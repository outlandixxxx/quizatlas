<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EssayWritingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'essay-writing')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Comprendre la structure d\'un essai',
                'description' => 'Identifier les différentes parties d\'un essai simple et comprendre le rôle de chacune.',
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quelles sont les trois grandes parties d\'un essai simple ?',
                        'choices' => [
                            ['choice_text' => 'Introduction, développement et conclusion', 'is_correct' => true],
                            ['choice_text' => 'Titre, dialogue et publicité', 'is_correct' => false],
                            ['choice_text' => 'Question, liste et signature', 'is_correct' => false],
                            ['choice_text' => 'Résumé, tableau et dessin', 'is_correct' => false],
                        ],
                        'explanation' => 'Un essai simple est généralement organisé en introduction, développement des idées et conclusion.',
                    ],
                    [
                        'question' => 'Quel est le rôle principal de l\'introduction ?',
                        'choices' => [
                            ['choice_text' => 'Présenter le sujet et annoncer l\'orientation du texte', 'is_correct' => true],
                            ['choice_text' => 'Répéter exactement la conclusion', 'is_correct' => false],
                            ['choice_text' => 'Donner uniquement un exemple', 'is_correct' => false],
                            ['choice_text' => 'Présenter uniquement une liste de mots', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'introduction présente le sujet, donne le contexte nécessaire et peut annoncer l\'idée directrice.',
                    ],
                    [
                        'question' => 'Quel est le rôle du développement ?',
                        'choices' => [
                            ['choice_text' => 'Développer les arguments et les expliquer', 'is_correct' => true],
                            ['choice_text' => 'Présenter seulement le titre', 'is_correct' => false],
                            ['choice_text' => 'Répéter la première phrase', 'is_correct' => false],
                            ['choice_text' => 'Terminer le texte sans explication', 'is_correct' => false],
                        ],
                        'explanation' => 'Le développement contient les idées principales, les arguments, les explications et les exemples.',
                    ],
                    [
                        'question' => 'Quel est le rôle de la conclusion ?',
                        'choices' => [
                            ['choice_text' => 'Faire le bilan des idées et terminer le texte', 'is_correct' => true],
                            ['choice_text' => 'Introduire un sujet complètement différent', 'is_correct' => false],
                            ['choice_text' => 'Ajouter uniquement un nouveau titre', 'is_correct' => false],
                            ['choice_text' => 'Commencer les arguments principaux', 'is_correct' => false],
                        ],
                        'explanation' => 'La conclusion rappelle l\'essentiel et apporte une vraie fin au raisonnement.',
                    ],
                    [
                        'question' => 'Quel élément peut annoncer le sujet dans une introduction ?',
                        'choices' => [
                            ['choice_text' => 'Une phrase qui présente clairement la question traitée', 'is_correct' => true],
                            ['choice_text' => 'Une liste sans rapport avec le sujet', 'is_correct' => false],
                            ['choice_text' => 'Une conclusion déjà terminée', 'is_correct' => false],
                            ['choice_text' => 'Une signature professionnelle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une introduction doit orienter le lecteur vers le sujet principal de l\'essai.',
                    ],
                    [
                        'question' => 'Que doit généralement contenir un paragraphe de développement ?',
                        'choices' => [
                            ['choice_text' => 'Une idée principale accompagnée d\'explications ou d\'un exemple', 'is_correct' => true],
                            ['choice_text' => 'Seulement une question sans réponse', 'is_correct' => false],
                            ['choice_text' => 'Une liste de titres sans phrases', 'is_correct' => false],
                            ['choice_text' => 'La signature de l\'auteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bon paragraphe de développement présente une idée puis la développe pour qu\'elle soit compréhensible.',
                    ],
                    [
                        'question' => 'Quelle organisation est la plus logique ?',
                        'choices' => [
                            ['choice_text' => 'Introduction → argument 1 → argument 2 → conclusion', 'is_correct' => true],
                            ['choice_text' => 'Conclusion → titre → introduction → argument', 'is_correct' => false],
                            ['choice_text' => 'Argument 2 → conclusion → argument 1 → introduction', 'is_correct' => false],
                            ['choice_text' => 'Exemple → signature → titre → conclusion', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette organisation suit une progression simple et facile à suivre.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il organiser les idées dans un essai ?',
                        'choices' => [
                            ['choice_text' => 'Pour permettre au lecteur de suivre facilement le raisonnement', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre le texte plus long sans raison', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute conclusion', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les exemples', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne organisation améliore la cohérence et facilite la compréhension du texte.',
                    ],
                    [
                        'question' => 'Quelle phrase peut servir de début à une conclusion ?',
                        'choices' => [
                            ['choice_text' => 'En conclusion, on peut retenir que cette question présente plusieurs aspects.', 'is_correct' => true],
                            ['choice_text' => 'Tout d\'abord, nous allons présenter le premier argument.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, voici une situation précise.', 'is_correct' => false],
                            ['choice_text' => 'Premièrement, le sujet commence maintenant.', 'is_correct' => false],
                        ],
                        'explanation' => '« En conclusion » signale clairement au lecteur que le texte arrive à sa dernière partie.',
                    ],
                    [
                        'question' => 'Quel élément ne doit pas être absent d\'un essai argumentatif simple ?',
                        'choices' => [
                            ['choice_text' => 'Une idée ou position développée avec des raisons', 'is_correct' => true],
                            ['choice_text' => 'Une longue liste de mots isolés', 'is_correct' => false],
                            ['choice_text' => 'Un dialogue entre plusieurs personnages', 'is_correct' => false],
                            ['choice_text' => 'Une série de slogans publicitaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Même à un niveau débutant, un essai argumentatif doit présenter une idée et l\'appuyer par des raisons ou des exemples.',
                    ],
                ],
            ],

            [
                'title' => 'La thèse et l\'idée principale',
                'description' => 'Comprendre la thèse et distinguer une position claire d\'un simple thème.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce qu\'une thèse dans un essai ?',
                        'choices' => [
                            ['choice_text' => 'Une idée ou une position principale que l\'auteur veut défendre', 'is_correct' => true],
                            ['choice_text' => 'Un détail sans importance', 'is_correct' => false],
                            ['choice_text' => 'Une simple liste de vocabulaire', 'is_correct' => false],
                            ['choice_text' => 'Le nom de l\'auteur uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La thèse exprime l\'idée centrale ou la position que le texte va développer.',
                    ],
                    [
                        'question' => 'Laquelle est une thèse claire sur l\'utilisation des transports publics ?',
                        'choices' => [
                            ['choice_text' => 'Les transports publics peuvent réduire l\'usage individuel de la voiture en ville.', 'is_correct' => true],
                            ['choice_text' => 'Les transports publics.', 'is_correct' => false],
                            ['choice_text' => 'La ville et les bus.', 'is_correct' => false],
                            ['choice_text' => 'Les voitures sont partout.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première proposition présente une idée complète qui peut être défendue avec des arguments.',
                    ],
                    [
                        'question' => 'Quelle phrase correspond seulement à un thème et pas encore à une thèse ?',
                        'choices' => [
                            ['choice_text' => 'Les réseaux sociaux chez les jeunes', 'is_correct' => true],
                            ['choice_text' => 'Les réseaux sociaux peuvent faciliter certains échanges entre jeunes.', 'is_correct' => false],
                            ['choice_text' => 'L\'usage raisonnable des réseaux sociaux peut être utile.', 'is_correct' => false],
                            ['choice_text' => 'Les jeunes devraient apprendre à limiter leur temps d\'écran.', 'is_correct' => false],
                        ],
                        'explanation' => '« Les réseaux sociaux chez les jeunes » présente seulement le sujet, sans position précise.',
                    ],
                    [
                        'question' => 'Quelle thèse est la plus précise ?',
                        'choices' => [
                            ['choice_text' => 'La lecture régulière peut améliorer le vocabulaire des élèves.', 'is_correct' => true],
                            ['choice_text' => 'La lecture est quelque chose.', 'is_correct' => false],
                            ['choice_text' => 'Les livres existent.', 'is_correct' => false],
                            ['choice_text' => 'L\'école et les livres.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase exprime une idée claire et peut être soutenue par des explications ou des exemples.',
                    ],
                    [
                        'question' => 'Une bonne thèse doit-elle être liée au sujet proposé ?',
                        'choices' => [
                            ['choice_text' => 'Oui, elle doit répondre directement au sujet.', 'is_correct' => true],
                            ['choice_text' => 'Non, elle peut traiter d\'un autre thème.', 'is_correct' => false],
                            ['choice_text' => 'Elle doit toujours parler de littérature.', 'is_correct' => false],
                            ['choice_text' => 'Elle doit contenir uniquement une question.', 'is_correct' => false],
                        ],
                        'explanation' => 'La thèse doit rester directement liée à la question ou au thème de l\'essai.',
                    ],
                    [
                        'question' => 'Quelle phrase peut servir de thèse pour un essai sur le travail à distance ?',
                        'choices' => [
                            ['choice_text' => 'Le travail à distance peut offrir davantage de flexibilité à certains employés.', 'is_correct' => true],
                            ['choice_text' => 'Le travail à distance existe.', 'is_correct' => false],
                            ['choice_text' => 'Les bureaux et les ordinateurs.', 'is_correct' => false],
                            ['choice_text' => 'Le travail, les employés.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase affirme une idée précise que le reste de l\'essai peut expliquer.',
                    ],
                    [
                        'question' => 'Quel élément peut soutenir une thèse ?',
                        'choices' => [
                            ['choice_text' => 'Un argument accompagné d\'une explication', 'is_correct' => true],
                            ['choice_text' => 'Une phrase sans lien avec le sujet', 'is_correct' => false],
                            ['choice_text' => 'Une répétition exacte de la thèse', 'is_correct' => false],
                            ['choice_text' => 'Un titre sans contenu', 'is_correct' => false],
                        ],
                        'explanation' => 'Un argument aide à expliquer pourquoi la thèse peut être considérée comme valable.',
                    ],
                    [
                        'question' => 'Quelle thèse est trop vague ?',
                        'choices' => [
                            ['choice_text' => 'Le sport est important.', 'is_correct' => true],
                            ['choice_text' => 'La pratique régulière du sport peut améliorer la condition physique.', 'is_correct' => false],
                            ['choice_text' => 'Trente minutes d\'activité physique quotidienne peuvent favoriser une bonne hygiène de vie.', 'is_correct' => false],
                            ['choice_text' => 'Le sport à l\'école peut encourager les élèves à être actifs.', 'is_correct' => false],
                        ],
                        'explanation' => '« Le sport est important » est compréhensible, mais reste très général. Une thèse plus précise donne une direction au développement.',
                    ],
                    [
                        'question' => 'Pourquoi est-il utile d\'avoir une thèse claire ?',
                        'choices' => [
                            ['choice_text' => 'Pour donner une direction aux arguments du texte', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter de développer les idées', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l\'introduction', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer tous les exemples', 'is_correct' => false],
                        ],
                        'explanation' => 'La thèse sert de point de référence pour choisir et organiser les arguments.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime une opinion que l\'on peut ensuite justifier ?',
                        'choices' => [
                            ['choice_text' => 'À mon avis, les devoirs doivent rester raisonnables pour les élèves.', 'is_correct' => true],
                            ['choice_text' => 'Les devoirs.', 'is_correct' => false],
                            ['choice_text' => 'Un cahier sur une table.', 'is_correct' => false],
                            ['choice_text' => 'Hier, le professeur est arrivé.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase exprime une opinion claire qui peut être soutenue par plusieurs arguments.',
                    ],
                    [
                        'question' => 'Quelle question peut aider à construire une thèse ?',
                        'choices' => [
                            ['choice_text' => 'Quelle position puis-je défendre sur ce sujet ?', 'is_correct' => true],
                            ['choice_text' => 'Comment puis-je éviter le sujet ?', 'is_correct' => false],
                            ['choice_text' => 'Comment puis-je supprimer tous les arguments ?', 'is_correct' => false],
                            ['choice_text' => 'Quel mot dois-je répéter dix fois ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Réfléchir à la position que l\'on souhaite défendre aide à formuler une thèse claire.',
                    ],
                ],
            ],

            [
                'title' => 'Arguments, exemples et explications',
                'description' => 'Apprendre à construire un paragraphe d\'argumentation avec une idée, une justification et un exemple.',
                'duration' => 23,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal d\'un argument ?',
                        'choices' => [
                            ['choice_text' => 'Donner une raison qui soutient la thèse', 'is_correct' => true],
                            ['choice_text' => 'Changer complètement de sujet', 'is_correct' => false],
                            ['choice_text' => 'Terminer automatiquement le texte', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le titre', 'is_correct' => false],
                        ],
                        'explanation' => 'Un argument apporte une raison qui aide à défendre la position présentée dans l\'essai.',
                    ],
                    [
                        'question' => 'Quelle phrase est un argument ?',
                        'choices' => [
                            ['choice_text' => 'La lecture régulière développe l\'habitude de se concentrer.', 'is_correct' => true],
                            ['choice_text' => 'La lecture.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, un roman.', 'is_correct' => false],
                            ['choice_text' => 'En conclusion, voilà.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase affirme une raison qui peut soutenir une thèse favorable à la lecture.',
                    ],
                    [
                        'question' => 'Quel mot peut introduire un exemple ?',
                        'choices' => [
                            ['choice_text' => 'Par exemple', 'is_correct' => true],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                            ['choice_text' => 'Donc', 'is_correct' => false],
                            ['choice_text' => 'Enfin', 'is_correct' => false],
                        ],
                        'explanation' => '« Par exemple » sert à introduire un cas concret qui illustre l\'idée précédente.',
                    ],
                    [
                        'question' => 'Complétez : « Le sport est utile, ___ il aide à rester en bonne condition physique. »',
                        'choices' => [
                            ['choice_text' => 'car', 'is_correct' => true],
                            ['choice_text' => 'mais', 'is_correct' => false],
                            ['choice_text' => 'ou', 'is_correct' => false],
                            ['choice_text' => 'enfin', 'is_correct' => false],
                        ],
                        'explanation' => '« Car » introduit une explication ou une justification.',
                    ],
                    [
                        'question' => 'Quelle phrase apporte un exemple concret pour l\'idée « Les transports publics peuvent être pratiques » ?',
                        'choices' => [
                            ['choice_text' => 'Par exemple, un bus direct peut éviter plusieurs changements pendant le trajet.', 'is_correct' => true],
                            ['choice_text' => 'Cependant, les transports existent.', 'is_correct' => false],
                            ['choice_text' => 'Enfin, la ville est grande.', 'is_correct' => false],
                            ['choice_text' => 'Les transports publics.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase illustre concrètement pourquoi les transports publics peuvent être pratiques.',
                    ],
                    [
                        'question' => 'Quelle structure est la plus utile pour un paragraphe argumentatif simple ?',
                        'choices' => [
                            ['choice_text' => 'Idée principale → explication → exemple', 'is_correct' => true],
                            ['choice_text' => 'Exemple → titre → signature', 'is_correct' => false],
                            ['choice_text' => 'Conclusion → question → introduction', 'is_correct' => false],
                            ['choice_text' => 'Liste → slogan → répétition', 'is_correct' => false],
                        ],
                        'explanation' => 'Commencer par l\'idée, l\'expliquer puis l\'illustrer permet au lecteur de suivre facilement le raisonnement.',
                    ],
                    [
                        'question' => 'Quelle phrase explique un argument plutôt que de simplement le répéter ?',
                        'choices' => [
                            ['choice_text' => 'Cette habitude peut aider les élèves à mieux organiser leur temps.', 'is_correct' => true],
                            ['choice_text' => 'Cette habitude est une habitude.', 'is_correct' => false],
                            ['choice_text' => 'Cette habitude, cette habitude.', 'is_correct' => false],
                            ['choice_text' => 'Cette habitude existe.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase explique l\'effet de l\'habitude au lieu de répéter simplement l\'idée.',
                    ],
                    [
                        'question' => 'Quel connecteur convient pour présenter une conséquence ?',
                        'choices' => [
                            ['choice_text' => 'Donc', 'is_correct' => true],
                            ['choice_text' => 'Parce que', 'is_correct' => false],
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                        ],
                        'explanation' => '« Donc » introduit généralement une conséquence ou un résultat.',
                    ],
                    [
                        'question' => 'Quel connecteur convient pour expliquer une cause ?',
                        'choices' => [
                            ['choice_text' => 'Parce que', 'is_correct' => true],
                            ['choice_text' => 'Donc', 'is_correct' => false],
                            ['choice_text' => 'Enfin', 'is_correct' => false],
                            ['choice_text' => 'Pourtant', 'is_correct' => false],
                        ],
                        'explanation' => '« Parce que » introduit la raison ou la cause d\'une situation.',
                    ],
                    [
                        'question' => 'Quelle phrase présente un argument suivi d\'un exemple ?',
                        'choices' => [
                            ['choice_text' => 'Le vélo peut être économique. Par exemple, il ne demande pas de carburant pour chaque trajet.', 'is_correct' => true],
                            ['choice_text' => 'Le vélo. Par exemple seulement.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, donc le vélo économique.', 'is_correct' => false],
                            ['choice_text' => 'Économique parce que vélo et enfin.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première formulation présente d\'abord l\'argument puis l\'illustre avec un exemple précis.',
                    ],
                    [
                        'question' => 'Pourquoi les exemples sont-ils utiles ?',
                        'choices' => [
                            ['choice_text' => 'Ils rendent une idée plus concrète et plus facile à comprendre', 'is_correct' => true],
                            ['choice_text' => 'Ils remplacent toujours la thèse', 'is_correct' => false],
                            ['choice_text' => 'Ils permettent d\'éviter toute explication', 'is_correct' => false],
                            ['choice_text' => 'Ils servent uniquement à remplir de l\'espace', 'is_correct' => false],
                        ],
                        'explanation' => 'Un exemple donne une situation concrète qui aide le lecteur à comprendre l\'argument.',
                    ],
                    [
                        'question' => 'Quel élément montre qu\'un argument est suffisamment développé ?',
                        'choices' => [
                            ['choice_text' => 'Il est expliqué et peut être illustré par un exemple pertinent', 'is_correct' => true],
                            ['choice_text' => 'Il est répété trois fois sans ajout', 'is_correct' => false],
                            ['choice_text' => 'Il ne contient qu\'un mot', 'is_correct' => false],
                            ['choice_text' => 'Il change de sujet au milieu de la phrase', 'is_correct' => false],
                        ],
                        'explanation' => 'Un argument gagne en qualité lorsqu\'il est expliqué clairement et soutenu par un exemple ou un détail pertinent.',
                    ],
                    [
                        'question' => 'Quel mot peut relier deux arguments dans une progression simple ?',
                        'choices' => [
                            ['choice_text' => 'De plus', 'is_correct' => true],
                            ['choice_text' => 'Jamais', 'is_correct' => false],
                            ['choice_text' => 'Hier', 'is_correct' => false],
                            ['choice_text' => 'Sous', 'is_correct' => false],
                        ],
                        'explanation' => '« De plus » permet d\'ajouter un nouvel argument lié au précédent.',
                    ],
                ],
            ],

            [
                'title' => 'Connecteurs et cohérence',
                'description' => 'Utiliser des connecteurs simples pour relier les idées et construire un texte cohérent.',
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quel connecteur sert à introduire une première idée ?',
                        'choices' => [
                            ['choice_text' => 'Tout d\'abord', 'is_correct' => true],
                            ['choice_text' => 'En conclusion', 'is_correct' => false],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                            ['choice_text' => 'Par conséquent', 'is_correct' => false],
                        ],
                        'explanation' => '« Tout d\'abord » annonce généralement la première étape ou le premier argument.',
                    ],
                    [
                        'question' => 'Quel connecteur peut ajouter une deuxième idée ?',
                        'choices' => [
                            ['choice_text' => 'De plus', 'is_correct' => true],
                            ['choice_text' => 'En conclusion', 'is_correct' => false],
                            ['choice_text' => 'Parce que', 'is_correct' => false],
                            ['choice_text' => 'Malgré', 'is_correct' => false],
                        ],
                        'explanation' => '« De plus » sert à ajouter une information ou un argument supplémentaire.',
                    ],
                    [
                        'question' => 'Quel connecteur exprime une opposition ?',
                        'choices' => [
                            ['choice_text' => 'Cependant', 'is_correct' => true],
                            ['choice_text' => 'Donc', 'is_correct' => false],
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                            ['choice_text' => 'Ainsi', 'is_correct' => false],
                        ],
                        'explanation' => '« Cependant » introduit une idée qui contraste avec ce qui précède.',
                    ],
                    [
                        'question' => 'Complétez : « Le cours était difficile ; ___, les étudiants ont réussi. »',
                        'choices' => [
                            ['choice_text' => 'cependant', 'is_correct' => true],
                            ['choice_text' => 'donc', 'is_correct' => false],
                            ['choice_text' => 'par exemple', 'is_correct' => false],
                            ['choice_text' => 'd\'abord', 'is_correct' => false],
                        ],
                        'explanation' => 'Le résultat contraste avec la difficulté du cours, donc « cependant » convient.',
                    ],
                    [
                        'question' => 'Quel connecteur introduit une conséquence ?',
                        'choices' => [
                            ['choice_text' => 'Par conséquent', 'is_correct' => true],
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                            ['choice_text' => 'Tout d\'abord', 'is_correct' => false],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                        ],
                        'explanation' => '« Par conséquent » indique le résultat ou la conséquence d\'une idée précédente.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « en revanche » ?',
                        'choices' => [
                            ['choice_text' => 'Le train est rapide ; en revanche, il est parfois coûteux.', 'is_correct' => true],
                            ['choice_text' => 'Le train est rapide ; en revanche, donc il arrive.', 'is_correct' => false],
                            ['choice_text' => 'En revanche le train parce que rapide.', 'is_correct' => false],
                            ['choice_text' => 'Le train est en revanche rapide donc exemple.', 'is_correct' => false],
                        ],
                        'explanation' => '« En revanche » présente ici une idée opposée ou un élément qui compense la première information.',
                    ],
                    [
                        'question' => 'Quel connecteur convient pour conclure une série d\'arguments ?',
                        'choices' => [
                            ['choice_text' => 'Enfin', 'is_correct' => true],
                            ['choice_text' => 'D\'abord', 'is_correct' => false],
                            ['choice_text' => 'Parce que', 'is_correct' => false],
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                        ],
                        'explanation' => '« Enfin » peut introduire le dernier point d\'une série.',
                    ],
                    [
                        'question' => 'Quel enchaînement est le plus cohérent ?',
                        'choices' => [
                            ['choice_text' => 'Tout d\'abord → De plus → Cependant → Enfin', 'is_correct' => true],
                            ['choice_text' => 'Enfin → Tout d\'abord → Hier → Bonjour', 'is_correct' => false],
                            ['choice_text' => 'Cependant → Titre → Signature → Donc', 'is_correct' => false],
                            ['choice_text' => 'Par exemple → Nom → Adresse → Conclusion', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette séquence permet de présenter des idées, d\'en ajouter une autre, d\'introduire un contraste puis de terminer la série.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il éviter d\'utiliser « donc » et « cependant » comme s\'ils avaient le même rôle ?',
                        'choices' => [
                            ['choice_text' => 'Parce que « donc » exprime une conséquence alors que « cependant » marque une opposition', 'is_correct' => true],
                            ['choice_text' => 'Parce que les deux mots sont des verbes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'ils servent uniquement dans les titres', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'ils ont exactement le même sens', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux connecteurs relient les idées, mais ils indiquent des relations logiques différentes.',
                    ],
                    [
                        'question' => 'Quel connecteur convient ici : « Il aime lire. ___, il lit avant de dormir chaque soir. »',
                        'choices' => [
                            ['choice_text' => 'Par exemple', 'is_correct' => true],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                            ['choice_text' => 'En conclusion', 'is_correct' => false],
                            ['choice_text' => 'Par conséquent', 'is_correct' => false],
                        ],
                        'explanation' => 'La deuxième phrase donne un exemple concret qui montre comment il aime lire.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus cohérente ?',
                        'choices' => [
                            ['choice_text' => 'Les transports publics sont utiles. De plus, ils peuvent réduire le nombre de voitures dans certaines zones.', 'is_correct' => true],
                            ['choice_text' => 'Les transports publics sont utiles. Cependant, par conséquent, ils sont une voiture.', 'is_correct' => false],
                            ['choice_text' => 'Les transports publics sont utiles. Enfin, parce que voiture.', 'is_correct' => false],
                            ['choice_text' => 'Les transports publics sont utiles. Hier, de plus, conclusion.', 'is_correct' => false],
                        ],
                        'explanation' => '« De plus » ajoute logiquement une deuxième raison liée à la première affirmation.',
                    ],
                ],
            ],

            [
                'title' => 'Révision : rédiger un essai simple',
                'description' => 'Réviser les compétences essentielles pour organiser, rédiger et conclure un essai argumentatif de niveau débutant.',
                'duration' => 28,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel titre convient à un essai qui défend l\'idée que la lecture est utile aux élèves ?',
                        'choices' => [
                            ['choice_text' => 'Les avantages de la lecture pour les élèves', 'is_correct' => true],
                            ['choice_text' => 'Mon texte de trois lignes', 'is_correct' => false],
                            ['choice_text' => 'Bonjour professeur', 'is_correct' => false],
                            ['choice_text' => 'Exemple final uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le titre doit annoncer clairement le sujet traité dans l\'essai.',
                    ],
                    [
                        'question' => 'Quelle introduction est la plus adaptée ?',
                        'choices' => [
                            ['choice_text' => 'La lecture occupe une place importante dans l\'apprentissage. Elle peut notamment enrichir le vocabulaire et développer la compréhension.', 'is_correct' => true],
                            ['choice_text' => 'Lecture. Livres. Fin.', 'is_correct' => false],
                            ['choice_text' => 'En conclusion, la lecture est utile depuis le début.', 'is_correct' => false],
                            ['choice_text' => 'Mon deuxième argument est le vocabulaire.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première proposition introduit le sujet et prépare naturellement le développement des idées.',
                    ],
                    [
                        'question' => 'Quelle phrase peut présenter le premier argument ?',
                        'choices' => [
                            ['choice_text' => 'Tout d\'abord, la lecture régulière peut enrichir le vocabulaire des élèves.', 'is_correct' => true],
                            ['choice_text' => 'En conclusion, la lecture commence.', 'is_correct' => false],
                            ['choice_text' => 'Par conséquent, voici le titre.', 'is_correct' => false],
                            ['choice_text' => 'Bonjour, mon argument est demain.', 'is_correct' => false],
                        ],
                        'explanation' => '« Tout d\'abord » introduit logiquement le premier argument.',
                    ],
                    [
                        'question' => 'Quelle phrase donne un exemple lié au vocabulaire ?',
                        'choices' => [
                            ['choice_text' => 'Par exemple, lire des romans permet de rencontrer régulièrement des mots nouveaux en contexte.', 'is_correct' => true],
                            ['choice_text' => 'Cependant, les romans sont des arguments.', 'is_correct' => false],
                            ['choice_text' => 'Enfin, le vocabulaire est demain.', 'is_correct' => false],
                            ['choice_text' => 'Donc, exemple lecture.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase donne un cas concret qui explique comment la lecture peut enrichir le vocabulaire.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour ajouter un deuxième argument ?',
                        'choices' => [
                            ['choice_text' => 'De plus, la lecture peut aider les élèves à mieux comprendre différents types de textes.', 'is_correct' => true],
                            ['choice_text' => 'En conclusion, deuxième début.', 'is_correct' => false],
                            ['choice_text' => 'Cependant, tout d\'abord la lecture.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, donc deuxième argument uniquement.', 'is_correct' => false],
                        ],
                        'explanation' => '« De plus » introduit naturellement un nouvel argument en complément du précédent.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime correctement une conclusion ?',
                        'choices' => [
                            ['choice_text' => 'En conclusion, la lecture régulière peut apporter plusieurs bénéfices aux élèves.', 'is_correct' => true],
                            ['choice_text' => 'Tout d\'abord, voici le premier argument.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, un nouveau sujet commence.', 'is_correct' => false],
                            ['choice_text' => 'Cependant, introduction du texte.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation résume l\'idée générale et marque clairement la fin de l\'essai.',
                    ],
                    [
                        'question' => 'Quelle erreur faut-il éviter dans un essai ?',
                        'choices' => [
                            ['choice_text' => 'Répéter la même idée sans apporter d\'explication nouvelle', 'is_correct' => true],
                            ['choice_text' => 'Utiliser quelques exemples pertinents', 'is_correct' => false],
                            ['choice_text' => 'Relier les idées avec des connecteurs', 'is_correct' => false],
                            ['choice_text' => 'Écrire une conclusion', 'is_correct' => false],
                        ],
                        'explanation' => 'La répétition sans progression rend le développement faible et peu intéressant.',
                    ],
                    [
                        'question' => 'Quel élément améliore la cohérence d\'un essai ?',
                        'choices' => [
                            ['choice_text' => 'Des connecteurs logiques qui montrent les relations entre les idées', 'is_correct' => true],
                            ['choice_text' => 'Des changements de sujet imprévus', 'is_correct' => false],
                            ['choice_text' => 'Des phrases sans verbe', 'is_correct' => false],
                            ['choice_text' => 'Des mots difficiles sans explication', 'is_correct' => false],
                        ],
                        'explanation' => 'Les connecteurs aident le lecteur à comprendre l\'ordre et la relation entre les idées.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus adaptée à un style d\'essai formel simple ?',
                        'choices' => [
                            ['choice_text' => 'Cette situation présente plusieurs avantages qu\'il convient d\'examiner.', 'is_correct' => true],
                            ['choice_text' => 'C\'est super et voilà.', 'is_correct' => false],
                            ['choice_text' => 'C\'est cool, les gens aiment ça.', 'is_correct' => false],
                            ['choice_text' => 'Truc intéressant, quoi.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première formulation reste neutre et adaptée à une rédaction structurée.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour signaler une opposition dans un essai ?',
                        'choices' => [
                            ['choice_text' => 'Cependant, cette solution présente aussi certaines limites.', 'is_correct' => true],
                            ['choice_text' => 'Par exemple, cette solution est un argument.', 'is_correct' => false],
                            ['choice_text' => 'Tout d\'abord, cette solution est la conclusion.', 'is_correct' => false],
                            ['choice_text' => 'Donc, cette solution cependant.', 'is_correct' => false],
                        ],
                        'explanation' => '« Cependant » introduit une idée qui nuance ou s\'oppose à l\'argument précédent.',
                    ],
                    [
                        'question' => 'Quelle méthode aide à préparer un essai avant de commencer à écrire ?',
                        'choices' => [
                            ['choice_text' => 'Noter la thèse, les arguments principaux et quelques exemples', 'is_correct' => true],
                            ['choice_text' => 'Commencer sans savoir le sujet', 'is_correct' => false],
                            ['choice_text' => 'Écrire directement la conclusion puis arrêter', 'is_correct' => false],
                            ['choice_text' => 'Choisir uniquement les mots les plus longs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une courte préparation permet d\'organiser les idées et d\'éviter les répétitions.',
                    ],
                    [
                        'question' => 'Quel ordre représente le mieux la rédaction d\'un essai simple ?',
                        'choices' => [
                            ['choice_text' => 'Choisir une thèse → organiser les arguments → rédiger → relire', 'is_correct' => true],
                            ['choice_text' => 'Relire → choisir le sujet → supprimer les arguments → rédiger', 'is_correct' => false],
                            ['choice_text' => 'Rédiger la conclusion → choisir un thème différent → finir', 'is_correct' => false],
                            ['choice_text' => 'Choisir un exemple → signer → éviter la thèse → relire', 'is_correct' => false],
                        ],
                        'explanation' => 'Préparer les idées avant de rédiger puis relire le texte permet d\'améliorer la qualité et la cohérence de l\'essai.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il relire un essai après l\'avoir rédigé ?',
                        'choices' => [
                            ['choice_text' => 'Pour corriger les erreurs et vérifier la cohérence des idées', 'is_correct' => true],
                            ['choice_text' => 'Pour ajouter des fautes volontairement', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l\'introduction dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Pour changer complètement de sujet', 'is_correct' => false],
                        ],
                        'explanation' => 'La relecture permet de corriger la langue, la ponctuation et les problèmes d\'organisation avant de terminer le travail.',
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
