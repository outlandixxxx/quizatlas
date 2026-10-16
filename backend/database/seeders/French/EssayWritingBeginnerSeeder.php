<?php

namespace Database\Seeders;

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
                'description' => 'Identifier les différentes parties d’un essai simple et comprendre le rôle de chacune.',
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quelles sont les trois grandes parties d’un essai simple ?',
                        'choices' => [
                            ['choice_text' => 'Plan détaillé, brouillon et version finale', 'is_correct' => false],
                            ['choice_text' => 'Introduction, développement et conclusion', 'is_correct' => true],
                            ['choice_text' => 'Titre, résumé et liste de références', 'is_correct' => false],
                            ['choice_text' => 'Accroche, citation et signature de l’auteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un essai simple s’organise en trois blocs : on présente le sujet, on développe ses idées, puis on conclut.',
                    ],
                    [
                        'question' => 'À quoi sert l’introduction d’un essai ?',
                        'choices' => [
                            ['choice_text' => 'À résumer les arguments déjà développés', 'is_correct' => false],
                            ['choice_text' => 'À donner la réponse définitive sans l’expliquer', 'is_correct' => false],
                            ['choice_text' => 'À présenter le sujet et à annoncer la suite', 'is_correct' => true],
                            ['choice_text' => 'À citer les sources utilisées pour écrire', 'is_correct' => false],
                        ],
                        'explanation' => 'L’introduction amène le sujet et prépare le lecteur à ce qui suit. Résumer les arguments est le travail de la conclusion.',
                    ],
                    [
                        'question' => 'Quel est le rôle du développement ?',
                        'choices' => [
                            ['choice_text' => 'Rappeler le sujet et annoncer le plan du texte', 'is_correct' => false],
                            ['choice_text' => 'Faire le bilan du texte et le clore proprement', 'is_correct' => false],
                            ['choice_text' => 'Développer les arguments avec des exemples', 'is_correct' => true],
                            ['choice_text' => 'Donner le titre et le nom de l’auteur du texte', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est dans le développement que les idées principales sont exposées, justifiées et illustrées.',
                    ],
                    [
                        'question' => 'Quel est le rôle de la conclusion ?',
                        'choices' => [
                            ['choice_text' => 'Présenter le sujet pour la première fois', 'is_correct' => false],
                            ['choice_text' => 'Ajouter plusieurs arguments entièrement nouveaux', 'is_correct' => false],
                            ['choice_text' => 'Annoncer le plan du développement à venir', 'is_correct' => false],
                            ['choice_text' => 'Faire le bilan des idées et clore le texte', 'is_correct' => true],
                        ],
                        'explanation' => 'La conclusion reprend l’essentiel de ce qui a été dit et donne une vraie fin au raisonnement.',
                    ],
                    [
                        'question' => 'Nadia commence un essai sur le sport à l’école. Quelle première phrase présente bien le sujet ?',
                        'choices' => [
                            ['choice_text' => 'Le sport à l’école suscite aujourd’hui de nombreux débats.', 'is_correct' => true],
                            ['choice_text' => 'Pour terminer, le sport est utile aux élèves.', 'is_correct' => false],
                            ['choice_text' => 'Premièrement, le sport améliore la santé des élèves.', 'is_correct' => false],
                            ['choice_text' => 'Mon prénom est Nadia et j’ai quinze ans, comme mes camarades.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase pose le thème de l’essai sans entrer dans les arguments. Les autres appartiennent à la conclusion, au développement ou à une présentation personnelle.',
                    ],
                    [
                        'question' => 'Que contient un paragraphe de développement bien construit ?',
                        'choices' => [
                            ['choice_text' => 'Plusieurs idées différentes sans lien entre elles', 'is_correct' => false],
                            ['choice_text' => 'Une idée principale, une explication et un exemple', 'is_correct' => true],
                            ['choice_text' => 'Un résumé de tout l’essai en trois phrases courtes', 'is_correct' => false],
                            ['choice_text' => 'Une liste de questions laissées sans réponse', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bon paragraphe défend une seule idée, l’explique, puis l’illustre.',
                    ],
                    [
                        'question' => 'Quelle organisation est la plus logique ?',
                        'choices' => [
                            ['choice_text' => 'Argument 1 → introduction → conclusion → argument 2', 'is_correct' => false],
                            ['choice_text' => 'Conclusion → argument 1 → argument 2 → introduction', 'is_correct' => false],
                            ['choice_text' => 'Introduction → argument 1 → argument 2 → conclusion', 'is_correct' => true],
                            ['choice_text' => 'Introduction → conclusion → argument 1 → argument 2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le lecteur doit d’abord découvrir le sujet, puis suivre les arguments, et enfin lire le bilan.',
                    ],
                    [
                        'question' => 'Pour que le lecteur suive facilement le raisonnement, que doit-on faire ?',
                        'choices' => [
                            ['choice_text' => 'Ordonner les idées et les relier entre elles', 'is_correct' => true],
                            ['choice_text' => 'Allonger les phrases autant que possible', 'is_correct' => false],
                            ['choice_text' => 'Placer la conclusion avant les arguments', 'is_correct' => false],
                            ['choice_text' => 'Changer de sujet à chaque paragraphe', 'is_correct' => false],
                        ],
                        'explanation' => 'Des idées bien ordonnées et liées donnent un texte cohérent, plus simple à comprendre.',
                    ],
                    [
                        'question' => 'Quelle phrase peut servir de début à une conclusion ?',
                        'choices' => [
                            ['choice_text' => 'En conclusion, cette question présente plusieurs aspects.', 'is_correct' => true],
                            ['choice_text' => 'Pour commencer, examinons le premier argument en détail.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, prenons une situation concrète du quotidien.', 'is_correct' => false],
                            ['choice_text' => 'Dans un premier temps, rappelons le sujet de l’essai.', 'is_correct' => false],
                        ],
                        'explanation' => '« En conclusion » prévient le lecteur que le texte arrive à sa dernière partie.',
                    ],
                    [
                        'question' => 'Quel élément est indispensable dans un essai argumentatif ?',
                        'choices' => [
                            ['choice_text' => 'Une citation d’un auteur très célèbre', 'is_correct' => false],
                            ['choice_text' => 'Un dialogue entre deux personnes', 'is_correct' => false],
                            ['choice_text' => 'Un schéma ou un tableau chiffré', 'is_correct' => false],
                            ['choice_text' => 'Une position appuyée par des raisons', 'is_correct' => true],
                        ],
                        'explanation' => 'Même au niveau débutant, un essai argumentatif défend une idée et la soutient par des raisons ou des exemples.',
                    ],
                ],
            ],
            [
                'title' => 'La thèse et l\'idée principale',
                'description' => 'Comprendre la thèse et distinguer une position claire d’un simple thème.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une thèse dans un essai ?',
                        'choices' => [
                            ['choice_text' => 'Le grand thème général dont parle le texte, sans prendre position', 'is_correct' => false],
                            ['choice_text' => 'Un exemple tiré de la vie quotidienne pour illustrer', 'is_correct' => false],
                            ['choice_text' => 'La dernière phrase qui termine le texte de l’essai', 'is_correct' => false],
                            ['choice_text' => 'Une idée ou une position principale que l’auteur veut défendre', 'is_correct' => true],
                        ],
                        'explanation' => 'La thèse est l’idée centrale que tout l’essai va défendre. Un thème, lui, désigne seulement le sujet.',
                    ],
                    [
                        'question' => 'Laquelle est une thèse claire sur l’utilisation des transports publics ?',
                        'choices' => [
                            ['choice_text' => 'Les transports publics dans les grandes villes', 'is_correct' => false],
                            ['choice_text' => 'Les transports publics peuvent réduire l’usage individuel de la voiture en ville.', 'is_correct' => true],
                            ['choice_text' => 'Le prix des tickets de bus et de tramway', 'is_correct' => false],
                            ['choice_text' => 'Il existe des bus, des trams et des métros.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase affirme une idée complète que l’on peut défendre. Les autres donnent un thème ou un simple constat.',
                    ],
                    [
                        'question' => 'Quelle phrase correspond seulement à un thème et pas encore à une thèse ?',
                        'choices' => [
                            ['choice_text' => 'Les réseaux sociaux peuvent faciliter certains échanges entre jeunes.', 'is_correct' => false],
                            ['choice_text' => 'L’usage raisonnable des réseaux sociaux peut être utile.', 'is_correct' => false],
                            ['choice_text' => 'Les jeunes devraient apprendre à limiter leur temps d’écran.', 'is_correct' => false],
                            ['choice_text' => 'Les réseaux sociaux chez les jeunes', 'is_correct' => true],
                        ],
                        'explanation' => '« Les réseaux sociaux chez les jeunes » nomme un sujet sans prendre position. Les trois autres énoncent un avis.',
                    ],
                    [
                        'question' => 'Quelle thèse est la plus précise ?',
                        'choices' => [
                            ['choice_text' => 'La lecture régulière enrichit le vocabulaire des élèves.', 'is_correct' => true],
                            ['choice_text' => 'La lecture est une activité très répandue chez les jeunes.', 'is_correct' => false],
                            ['choice_text' => 'La lecture est importante pour tout le monde aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Les élèves lisent plusieurs livres par an en moyenne.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle dit exactement ce que la lecture apporte et à qui, ce qui guide le développement. Les autres restent généraux ou factuels.',
                    ],
                    [
                        'question' => 'Pour l’essai « Faut-il limiter le temps d’écran des enfants ? », quelle thèse répond directement au sujet ?',
                        'choices' => [
                            ['choice_text' => 'Les téléphones sont devenus très courants chez les adultes.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants aiment beaucoup regarder des dessins animés.', 'is_correct' => false],
                            ['choice_text' => 'Limiter le temps d’écran des enfants les aide à mieux dormir et à mieux travailler.', 'is_correct' => true],
                            ['choice_text' => 'Chaque famille possède aujourd’hui plusieurs écrans différents.', 'is_correct' => false],
                        ],
                        'explanation' => 'La thèse doit répondre à la question posée. Seule la thèse sur la limitation du temps d’écran prend position sur la question posée.',
                    ],
                    [
                        'question' => 'Quelle phrase peut servir de thèse pour un essai sur le travail à distance ?',
                        'choices' => [
                            ['choice_text' => 'Le travail à distance peut offrir davantage de flexibilité à certains employés.', 'is_correct' => true],
                            ['choice_text' => 'Le travail à distance et les nouvelles technologies', 'is_correct' => false],
                            ['choice_text' => 'Beaucoup d’entreprises utilisent aujourd’hui Internet.', 'is_correct' => false],
                            ['choice_text' => 'Les employés qui travaillent depuis leur domicile', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle avance une idée précise que le reste de l’essai peut expliquer. Les autres ne prennent pas position.',
                    ],
                    [
                        'question' => 'Quel élément peut soutenir une thèse ?',
                        'choices' => [
                            ['choice_text' => 'Une répétition de la thèse avec d’autres mots', 'is_correct' => false],
                            ['choice_text' => 'Un souvenir personnel sans rapport avec le sujet', 'is_correct' => false],
                            ['choice_text' => 'Un argument accompagné d’une explication', 'is_correct' => true],
                            ['choice_text' => 'Une liste de mots-clés sans phrases', 'is_correct' => false],
                        ],
                        'explanation' => 'Un argument expliqué montre pourquoi la thèse est valable. Répéter la thèse ne la prouve pas.',
                    ],
                    [
                        'question' => 'Quelle thèse est trop vague ?',
                        'choices' => [
                            ['choice_text' => 'La pratique régulière du sport peut améliorer la condition physique.', 'is_correct' => false],
                            ['choice_text' => 'Trente minutes d’activité physique par jour peuvent favoriser une bonne hygiène de vie.', 'is_correct' => false],
                            ['choice_text' => 'Le sport est important.', 'is_correct' => true],
                            ['choice_text' => 'Le sport à l’école peut encourager les élèves à être actifs.', 'is_correct' => false],
                        ],
                        'explanation' => '« Le sport est important » est vrai mais ne dit rien de précis. Les autres phrases annoncent une direction pour le développement.',
                    ],
                    [
                        'question' => 'Clément hésite sur les arguments à garder dans son essai. Qu’est-ce qui l’aide à trancher ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de lignes qu’il lui reste à remplir', 'is_correct' => false],
                            ['choice_text' => 'L’ordre alphabétique des mots-clés de son sujet', 'is_correct' => false],
                            ['choice_text' => 'La longueur moyenne de ses paragraphes précédents', 'is_correct' => false],
                            ['choice_text' => 'Sa thèse : il garde ce qui la soutient', 'is_correct' => true],
                        ],
                        'explanation' => 'La thèse sert de point de repère : on retient les arguments qui la défendent et on écarte les autres.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime une opinion que l’on peut ensuite justifier ?',
                        'choices' => [
                            ['choice_text' => 'Les devoirs sont donnés chaque soir dans cette classe.', 'is_correct' => false],
                            ['choice_text' => 'À mon avis, les devoirs doivent rester raisonnables.', 'is_correct' => true],
                            ['choice_text' => 'Le professeur distribue les devoirs en fin de cours.', 'is_correct' => false],
                            ['choice_text' => 'Mon cahier de devoirs est posé sur la table.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est la seule phrase qui prend position et qui appelle des raisons. Les trois autres décrivent des faits.',
                    ],
                    [
                        'question' => 'Quelle question peut aider à construire une thèse ?',
                        'choices' => [
                            ['choice_text' => 'Combien de mots faut-il écrire au minimum pour réussir ?', 'is_correct' => false],
                            ['choice_text' => 'Quelle position puis-je défendre sur ce sujet ?', 'is_correct' => true],
                            ['choice_text' => 'Dans quel ordre vais-je ranger mes sources ?', 'is_correct' => false],
                            ['choice_text' => 'Quel titre sera le plus court possible ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Se demander quelle position défendre conduit directement à une thèse. Les autres questions portent sur la forme.',
                    ],
                ],
            ],
            [
                'title' => 'Arguments, exemples et explications',
                'description' => 'Apprendre à construire un paragraphe d’argumentation avec une idée, une justification et un exemple.',
                'duration' => 23,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal d’un argument ?',
                        'choices' => [
                            ['choice_text' => 'Annoncer le sujet au lecteur dès le début', 'is_correct' => false],
                            ['choice_text' => 'Résumer l’ensemble du texte', 'is_correct' => false],
                            ['choice_text' => 'Donner une raison qui soutient la thèse', 'is_correct' => true],
                            ['choice_text' => 'Donner son avis sans le justifier', 'is_correct' => false],
                        ],
                        'explanation' => 'Un argument apporte une raison pour défendre la position de l’essai.',
                    ],
                    [
                        'question' => 'Quelle phrase est un argument ?',
                        'choices' => [
                            ['choice_text' => 'Lire est une activité que beaucoup de personnes pratiquent.', 'is_correct' => false],
                            ['choice_text' => 'La lecture régulière développe l’habitude de se concentrer.', 'is_correct' => true],
                            ['choice_text' => 'Par exemple, un élève peut lire un roman le soir.', 'is_correct' => false],
                            ['choice_text' => 'En conclusion, la lecture est utile aux élèves.', 'is_correct' => false],
                        ],
                        'explanation' => 'Seule cette phrase avance une raison en faveur de la lecture. Les autres sont un simple constat, un exemple et une conclusion.',
                    ],
                    [
                        'question' => 'Quel mot peut introduire un exemple ?',
                        'choices' => [
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                            ['choice_text' => 'Par exemple', 'is_correct' => true],
                            ['choice_text' => 'Donc', 'is_correct' => false],
                            ['choice_text' => 'Enfin', 'is_correct' => false],
                        ],
                        'explanation' => '« Par exemple » ouvre un cas concret qui illustre l’idée qui précède.',
                    ],
                    [
                        'question' => 'Complétez : « Le sport est utile, ___ il aide à rester en bonne condition physique. »',
                        'choices' => [
                            ['choice_text' => 'car', 'is_correct' => true],
                            ['choice_text' => 'mais', 'is_correct' => false],
                            ['choice_text' => 'ou', 'is_correct' => false],
                            ['choice_text' => 'enfin', 'is_correct' => false],
                        ],
                        'explanation' => '« Car » introduit la raison de ce qui vient d’être dit.',
                    ],
                    [
                        'question' => 'Quelle phrase apporte un exemple concret pour l’idée « Les transports publics peuvent être pratiques » ?',
                        'choices' => [
                            ['choice_text' => 'Cependant, certaines lignes sont parfois en retard le matin.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, un bus direct peut éviter plusieurs changements pendant le trajet.', 'is_correct' => true],
                            ['choice_text' => 'En conclusion, les transports sont un sujet important.', 'is_correct' => false],
                            ['choice_text' => 'Les transports publics sont un sujet très discuté en ville.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le bus direct est une situation précise qui montre en quoi les transports sont pratiques.',
                    ],
                    [
                        'question' => 'Quelle structure est la plus utile pour un paragraphe argumentatif simple ?',
                        'choices' => [
                            ['choice_text' => 'Idée principale → explication → exemple', 'is_correct' => true],
                            ['choice_text' => 'Exemple → conclusion → idée principale', 'is_correct' => false],
                            ['choice_text' => 'Explication → titre → exemple', 'is_correct' => false],
                            ['choice_text' => 'Conclusion → idée principale → explication', 'is_correct' => false],
                        ],
                        'explanation' => 'On pose l’idée, on l’explique, puis on l’illustre : le lecteur suit sans effort.',
                    ],
                    [
                        'question' => 'Quelle phrase explique un argument plutôt que de simplement le répéter ?',
                        'choices' => [
                            ['choice_text' => 'Cette habitude est très importante pour la plupart des élèves.', 'is_correct' => false],
                            ['choice_text' => 'Cette habitude est vraiment une bonne habitude à prendre.', 'is_correct' => false],
                            ['choice_text' => 'Cette habitude aide les élèves à mieux organiser leur temps.', 'is_correct' => true],
                            ['choice_text' => 'Cette habitude est répandue dans beaucoup d’écoles du pays.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle dit ce que l’habitude produit, alors que les autres répètent l’idée ou la décrivent.',
                    ],
                    [
                        'question' => 'Quel connecteur convient pour présenter une conséquence ?',
                        'choices' => [
                            ['choice_text' => 'Donc', 'is_correct' => true],
                            ['choice_text' => 'Parce que', 'is_correct' => false],
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                        ],
                        'explanation' => '« Donc » annonce le résultat de ce qui vient d’être dit.',
                    ],
                    [
                        'question' => 'Quel connecteur convient pour expliquer une cause ?',
                        'choices' => [
                            ['choice_text' => 'Donc', 'is_correct' => false],
                            ['choice_text' => 'Enfin', 'is_correct' => false],
                            ['choice_text' => 'Parce que', 'is_correct' => true],
                            ['choice_text' => 'Pourtant', 'is_correct' => false],
                        ],
                        'explanation' => '« Parce que » donne la raison d’un fait.',
                    ],
                    [
                        'question' => 'Quelle phrase présente un argument suivi d’un exemple ?',
                        'choices' => [
                            ['choice_text' => 'Le vélo peut être économique. Cependant, un élève qui va au lycée à vélo ne paie pas de ticket de bus.', 'is_correct' => false],
                            ['choice_text' => 'Le vélo peut être économique. Enfin, un élève qui va au lycée à vélo ne paie pas de ticket de bus.', 'is_correct' => false],
                            ['choice_text' => 'Le vélo peut être économique. En conclusion, un élève qui va au lycée à vélo ne paie pas de ticket de bus.', 'is_correct' => false],
                            ['choice_text' => 'Le vélo peut être économique. Par exemple, un élève qui va au lycée à vélo ne paie pas de ticket de bus.', 'is_correct' => true],
                        ],
                        'explanation' => 'Les quatre phrases disent la même chose, mais seul « par exemple » relie un cas concret à l’argument.',
                    ],
                    [
                        'question' => 'Sofia dit que les exemples rendent un essai plus clair. Qu’apporte un exemple à un argument ?',
                        'choices' => [
                            ['choice_text' => 'Il remplace l’argument pour gagner de la place', 'is_correct' => false],
                            ['choice_text' => 'Il dispense d’écrire une conclusion', 'is_correct' => false],
                            ['choice_text' => 'Il permet de changer de thèse en cours de route', 'is_correct' => false],
                            ['choice_text' => 'Il rend l’idée concrète et plus facile à comprendre', 'is_correct' => true],
                        ],
                        'explanation' => 'Un exemple donne une situation réelle que le lecteur peut imaginer.',
                    ],
                    [
                        'question' => 'Quel élément montre qu’un argument est suffisamment développé ?',
                        'choices' => [
                            ['choice_text' => 'Il tient en un mot particulièrement bien choisi', 'is_correct' => false],
                            ['choice_text' => 'Il est expliqué et illustré par un exemple pertinent', 'is_correct' => true],
                            ['choice_text' => 'Il est suivi d’une citation sans lien avec le sujet', 'is_correct' => false],
                            ['choice_text' => 'Il est placé tout à la fin du texte', 'is_correct' => false],
                        ],
                        'explanation' => 'Un argument gagne en force quand on l’explique et qu’on l’appuie sur un exemple adapté.',
                    ],
                    [
                        'question' => 'Quel mot peut relier deux arguments dans une progression simple ?',
                        'choices' => [
                            ['choice_text' => 'En conclusion', 'is_correct' => false],
                            ['choice_text' => 'Pourtant', 'is_correct' => false],
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                            ['choice_text' => 'De plus', 'is_correct' => true],
                        ],
                        'explanation' => '« De plus » ajoute un nouvel argument à celui qui précède.',
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
                            ['choice_text' => 'Tout d’abord', 'is_correct' => true],
                            ['choice_text' => 'En conclusion', 'is_correct' => false],
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                            ['choice_text' => 'Par conséquent', 'is_correct' => false],
                        ],
                        'explanation' => '« Tout d’abord » ouvre la série des arguments.',
                    ],
                    [
                        'question' => 'Quel connecteur peut ajouter une deuxième idée ?',
                        'choices' => [
                            ['choice_text' => 'De plus', 'is_correct' => true],
                            ['choice_text' => 'En conclusion', 'is_correct' => false],
                            ['choice_text' => 'Parce que', 'is_correct' => false],
                            ['choice_text' => 'Malgré', 'is_correct' => false],
                        ],
                        'explanation' => '« De plus » apporte une information ou un argument supplémentaire.',
                    ],
                    [
                        'question' => 'Quel connecteur exprime une opposition ?',
                        'choices' => [
                            ['choice_text' => 'Donc', 'is_correct' => false],
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                            ['choice_text' => 'Cependant', 'is_correct' => true],
                            ['choice_text' => 'Ainsi', 'is_correct' => false],
                        ],
                        'explanation' => '« Cependant » introduit une idée qui contraste avec la précédente.',
                    ],
                    [
                        'question' => 'Complétez : « Le cours était difficile ; ___, les étudiants ont réussi. »',
                        'choices' => [
                            ['choice_text' => 'cependant', 'is_correct' => true],
                            ['choice_text' => 'donc', 'is_correct' => false],
                            ['choice_text' => 'par exemple', 'is_correct' => false],
                            ['choice_text' => 'd’abord', 'is_correct' => false],
                        ],
                        'explanation' => 'Le résultat va à l’inverse de ce qu’on attendait, ce qui demande un connecteur d’opposition.',
                    ],
                    [
                        'question' => 'Quel connecteur introduit une conséquence ?',
                        'choices' => [
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                            ['choice_text' => 'Par conséquent', 'is_correct' => true],
                            ['choice_text' => 'Tout d’abord', 'is_correct' => false],
                            ['choice_text' => 'Pour commencer', 'is_correct' => false],
                        ],
                        'explanation' => '« Par conséquent » annonce le résultat de ce qui précède.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise le bon connecteur pour opposer un avantage et un inconvénient ?',
                        'choices' => [
                            ['choice_text' => 'Le train est rapide ; par exemple, il est parfois coûteux.', 'is_correct' => false],
                            ['choice_text' => 'Le train est rapide ; donc, il est parfois coûteux.', 'is_correct' => false],
                            ['choice_text' => 'Le train est rapide ; enfin, il est parfois coûteux.', 'is_correct' => false],
                            ['choice_text' => 'Le train est rapide ; en revanche, il est parfois coûteux.', 'is_correct' => true],
                        ],
                        'explanation' => '« En revanche » oppose un point fort à un point faible. Les autres connecteurs ne créent pas ce contraste.',
                    ],
                    [
                        'question' => 'Quel connecteur introduit le dernier point d’une série ?',
                        'choices' => [
                            ['choice_text' => 'D’abord', 'is_correct' => false],
                            ['choice_text' => 'Enfin', 'is_correct' => true],
                            ['choice_text' => 'Parce que', 'is_correct' => false],
                            ['choice_text' => 'Par exemple', 'is_correct' => false],
                        ],
                        'explanation' => '« Enfin » signale qu’on arrive au dernier argument.',
                    ],
                    [
                        'question' => 'Quel enchaînement est le plus cohérent ?',
                        'choices' => [
                            ['choice_text' => 'Enfin → Tout d’abord → De plus → Cependant', 'is_correct' => false],
                            ['choice_text' => 'Tout d’abord → De plus → Cependant → Enfin', 'is_correct' => true],
                            ['choice_text' => 'Cependant → Enfin → Tout d’abord → De plus', 'is_correct' => false],
                            ['choice_text' => 'De plus → Enfin → Tout d’abord → Cependant', 'is_correct' => false],
                        ],
                        'explanation' => 'On commence, on ajoute, on nuance, puis on termine.',
                    ],
                    [
                        'question' => 'Karim écrit : « Il pleut beaucoup ; cependant, il prend son parapluie. » Quel connecteur serait plus logique ?',
                        'choices' => [
                            ['choice_text' => 'pourtant', 'is_correct' => false],
                            ['choice_text' => 'mais', 'is_correct' => false],
                            ['choice_text' => 'malgré cela', 'is_correct' => false],
                            ['choice_text' => 'donc', 'is_correct' => true],
                        ],
                        'explanation' => 'Prendre un parapluie est la conséquence de la pluie. « Cependant » marque une opposition, ce qui n’a pas de sens ici.',
                    ],
                    [
                        'question' => 'Quel connecteur convient ici : « Il aime lire. ___, il lit avant de dormir chaque soir. »',
                        'choices' => [
                            ['choice_text' => 'Cependant', 'is_correct' => false],
                            ['choice_text' => 'En conclusion', 'is_correct' => false],
                            ['choice_text' => 'Malgré cela', 'is_correct' => false],
                            ['choice_text' => 'Par exemple', 'is_correct' => true],
                        ],
                        'explanation' => 'La deuxième phrase donne un exemple de ce goût pour la lecture.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus cohérente ?',
                        'choices' => [
                            ['choice_text' => 'Les transports publics sont utiles. Pourtant, ils peuvent réduire le nombre de voitures dans certaines zones.', 'is_correct' => false],
                            ['choice_text' => 'Les transports publics sont utiles. En conclusion, ils peuvent réduire le nombre de voitures dans certaines zones.', 'is_correct' => false],
                            ['choice_text' => 'Les transports publics sont utiles. De plus, ils peuvent réduire le nombre de voitures dans certaines zones.', 'is_correct' => true],
                            ['choice_text' => 'Les transports publics sont utiles. Malgré cela, ils peuvent réduire le nombre de voitures dans certaines zones.', 'is_correct' => false],
                        ],
                        'explanation' => 'La seconde idée s’ajoute à la première : « de plus » convient. Les autres connecteurs créent une opposition ou une conclusion.',
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
                        'question' => 'Quel titre convient à un essai qui défend l’idée que la lecture est utile aux élèves ?',
                        'choices' => [
                            ['choice_text' => 'Pourquoi les élèves lisent de moins en moins', 'is_correct' => false],
                            ['choice_text' => 'Mon cahier de français de cette année', 'is_correct' => false],
                            ['choice_text' => 'Les meilleurs romans pour les vacances', 'is_correct' => false],
                            ['choice_text' => 'Les avantages de la lecture pour les élèves', 'is_correct' => true],
                        ],
                        'explanation' => 'Le titre annonce le sujet et la position défendue. Les autres titres parlent d’autre chose.',
                    ],
                    [
                        'question' => 'Quelle introduction est la plus adaptée ?',
                        'choices' => [
                            ['choice_text' => 'En conclusion, la lecture aide les élèves à progresser dans plusieurs matières.', 'is_correct' => false],
                            ['choice_text' => 'Mon premier argument est que la lecture enrichit le vocabulaire des élèves.', 'is_correct' => false],
                            ['choice_text' => 'La lecture joue un rôle important dans l’apprentissage : elle enrichit le vocabulaire et aide à comprendre.', 'is_correct' => true],
                            ['choice_text' => 'Je vais maintenant vous parler de ce que je pense de la lecture.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle amène le sujet et prépare les arguments. Les autres phrases ressemblent à une conclusion, à un argument ou à une annonce maladroite.',
                    ],
                    [
                        'question' => 'Quelle phrase peut présenter le premier argument ?',
                        'choices' => [
                            ['choice_text' => 'Tout d’abord, la lecture régulière enrichit le vocabulaire des élèves.', 'is_correct' => true],
                            ['choice_text' => 'En conclusion, la lecture régulière enrichit le vocabulaire des élèves.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, la lecture régulière enrichit le vocabulaire des élèves.', 'is_correct' => false],
                            ['choice_text' => 'Cependant, la lecture régulière enrichit le vocabulaire des élèves.', 'is_correct' => false],
                        ],
                        'explanation' => '« Tout d’abord » ouvre la série des arguments. Les autres connecteurs ne conviennent pas pour un premier point.',
                    ],
                    [
                        'question' => 'Quelle phrase donne un exemple concret lié au vocabulaire ?',
                        'choices' => [
                            ['choice_text' => 'Cependant, lire des romans est parfois long et fatigant pour certains élèves.', 'is_correct' => false],
                            ['choice_text' => 'En conclusion, lire des romans permet de découvrir des mots nouveaux.', 'is_correct' => false],
                            ['choice_text' => 'Par exemple, en lisant un roman d’aventure, un élève découvre le mot « périlleux ».', 'is_correct' => true],
                            ['choice_text' => 'Enfin, lire des romans est une habitude qui se perd peu à peu.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle donne un cas concret : un élève qui découvre un mot précis dans un roman.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour ajouter un deuxième argument ?',
                        'choices' => [
                            ['choice_text' => 'De plus, la lecture peut aider les élèves à comprendre différents types de textes.', 'is_correct' => true],
                            ['choice_text' => 'En conclusion, la lecture aide aussi les élèves à comprendre différents types de textes.', 'is_correct' => false],
                            ['choice_text' => 'Tout d’abord, la lecture aide à mieux comprendre différents types de textes.', 'is_correct' => false],
                            ['choice_text' => 'Pourtant, la lecture aide à mieux comprendre différents types de textes.', 'is_correct' => false],
                        ],
                        'explanation' => '« De plus » ajoute un argument à celui qui précède.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime correctement une conclusion ?',
                        'choices' => [
                            ['choice_text' => 'Tout d’abord, la lecture régulière apporte plusieurs bénéfices aux élèves.', 'is_correct' => false],
                            ['choice_text' => 'En conclusion, la lecture régulière peut apporter des bénéfices aux élèves.', 'is_correct' => true],
                            ['choice_text' => 'Par exemple, la lecture régulière apporte plusieurs bénéfices aux élèves.', 'is_correct' => false],
                            ['choice_text' => 'Cependant, la lecture régulière apporte plusieurs bénéfices aux élèves.', 'is_correct' => false],
                        ],
                        'explanation' => '« En conclusion » annonce le bilan final. Les autres connecteurs servent ailleurs dans l’essai.',
                    ],
                    [
                        'question' => 'Quelle erreur faut-il éviter dans un essai ?',
                        'choices' => [
                            ['choice_text' => 'Utiliser quelques exemples bien choisis et pertinents', 'is_correct' => false],
                            ['choice_text' => 'Relier les idées avec des connecteurs logiques simples', 'is_correct' => false],
                            ['choice_text' => 'Terminer l’essai par une conclusion claire', 'is_correct' => false],
                            ['choice_text' => 'Répéter la même idée sans apporter d’élément nouveau', 'is_correct' => true],
                        ],
                        'explanation' => 'Répéter sans rien ajouter affaiblit le développement. Les trois autres choix sont de bonnes pratiques.',
                    ],
                    [
                        'question' => 'Quel élément améliore la cohérence d’un essai ?',
                        'choices' => [
                            ['choice_text' => 'Des paragraphes de longueurs très différentes', 'is_correct' => false],
                            ['choice_text' => 'Des connecteurs logiques qui montrent les relations entre les idées', 'is_correct' => true],
                            ['choice_text' => 'Des phrases très longues et compliquées', 'is_correct' => false],
                            ['choice_text' => 'Des exemples sans lien avec la thèse', 'is_correct' => false],
                        ],
                        'explanation' => 'Les connecteurs montrent comment les idées s’enchaînent. Les autres choix brouillent la lecture.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus adaptée à un style d’essai formel ?',
                        'choices' => [
                            ['choice_text' => 'Cette situation présente plusieurs avantages à examiner.', 'is_correct' => true],
                            ['choice_text' => 'Franchement, cette situation a plein d’avantages à voir.', 'is_correct' => false],
                            ['choice_text' => 'C’est génial comme situation, il y a plein de points positifs.', 'is_correct' => false],
                            ['choice_text' => 'Cette situation, c’est vraiment un truc à examiner.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle reste neutre et précise. Les autres emploient un vocabulaire familier.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour signaler une opposition dans un essai ?',
                        'choices' => [
                            ['choice_text' => 'Par exemple, cette solution présente aussi certaines limites.', 'is_correct' => false],
                            ['choice_text' => 'Donc, cette solution présente aussi certaines limites.', 'is_correct' => false],
                            ['choice_text' => 'Enfin, cette solution présente aussi certaines limites.', 'is_correct' => false],
                            ['choice_text' => 'Cependant, cette solution présente aussi certaines limites.', 'is_correct' => true],
                        ],
                        'explanation' => '« Cependant » nuance l’argument précédent en montrant un revers.',
                    ],
                    [
                        'question' => 'Quelle méthode aide à préparer un essai avant de commencer à écrire ?',
                        'choices' => [
                            ['choice_text' => 'Recopier plusieurs paragraphes d’un autre texte', 'is_correct' => false],
                            ['choice_text' => 'Écrire la conclusion avant de lire le sujet', 'is_correct' => false],
                            ['choice_text' => 'Chercher d’abord les mots les plus longs à employer', 'is_correct' => false],
                            ['choice_text' => 'Noter la thèse, les arguments et quelques exemples', 'is_correct' => true],
                        ],
                        'explanation' => 'Un petit plan évite les répétitions et donne une direction au texte.',
                    ],
                    [
                        'question' => 'Quel ordre représente le mieux la rédaction d’un essai simple ?',
                        'choices' => [
                            ['choice_text' => 'Rédiger → choisir une thèse → organiser les arguments → relire', 'is_correct' => false],
                            ['choice_text' => 'Relire → rédiger → choisir une thèse → organiser les arguments', 'is_correct' => false],
                            ['choice_text' => 'Choisir une thèse → organiser les arguments → rédiger → relire', 'is_correct' => true],
                            ['choice_text' => 'Organiser les arguments → relire → rédiger → choisir une thèse', 'is_correct' => false],
                        ],
                        'explanation' => 'On prépare avant d’écrire, puis on relit le texte terminé.',
                    ],
                    [
                        'question' => 'Hamza vient de finir son essai. Que doit-il faire avant de le rendre ?',
                        'choices' => [
                            ['choice_text' => 'Ajouter une phrase d’introduction à chaque paragraphe', 'is_correct' => false],
                            ['choice_text' => 'Le relire pour corriger les erreurs et vérifier la cohérence', 'is_correct' => true],
                            ['choice_text' => 'Remplacer ses exemples par des citations', 'is_correct' => false],
                            ['choice_text' => 'Raccourcir sa conclusion à une seule phrase', 'is_correct' => false],
                        ],
                        'explanation' => 'La relecture permet de corriger la langue, la ponctuation et les problèmes d’organisation.',
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
