<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class LiteraryAnalysisBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'literary-analysis')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à l’analyse littéraire',
                'description' => 'Découvrez les questions et le vocabulaire de base utilisés pour analyser un texte littéraire simple.',
                'duration' => 18,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de l’analyse littéraire ?',
                        'choices' => [
                            ['choice_text' => 'Mémoriser chaque page', 'is_correct' => false],
                            ['choice_text' => 'Examiner comment un texte construit son sens.', 'is_correct' => true],
                            ['choice_text' => 'Traduire chaque mot', 'is_correct' => false],
                            ['choice_text' => 'Compter les paragraphes', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse littéraire examine comment des éléments comme les personnages, le langage, la structure et le thème se combinent pour créer du sens.',
                    ],
                    [
                        'question' => 'Lorsqu’on analyse une histoire, à quoi renvoie le « thème » ?',
                        'choices' => [
                            ['choice_text' => 'L’adresse de l’auteur', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de chapitres', 'is_correct' => false],
                            ['choice_text' => 'Le prix du livre', 'is_correct' => false],
                            ['choice_text' => 'Une idée centrale explorée par le texte.', 'is_correct' => true],
                        ],
                        'explanation' => 'Un thème est une idée ou un message central que l’œuvre littéraire développe.',
                    ],
                    [
                        'question' => 'Que doit utiliser un lecteur pour soutenir une interprétation d’une histoire ?',
                        'choices' => [
                            ['choice_text' => 'Seulement des suppositions personnelles', 'is_correct' => false],
                            ['choice_text' => 'Seulement l’image de couverture', 'is_correct' => false],
                            ['choice_text' => 'Des preuves tirées du texte.', 'is_correct' => true],
                            ['choice_text' => 'Seulement le nom de l’auteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Une interprétation solide doit être reliée à des détails, des citations ou des événements présents dans le texte.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le « setting » (le cadre) d’une œuvre littéraire ?',
                        'choices' => [
                            ['choice_text' => 'Le moment et le lieu où se déroule l’histoire.', 'is_correct' => true],
                            ['choice_text' => 'La biographie de l’auteur', 'is_correct' => false],
                            ['choice_text' => 'La morale uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le titre de l’histoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cadre comprend le lieu et l’époque dans lesquels se déroulent les événements.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un « trait de caractère » ?',
                        'choices' => [
                            ['choice_text' => 'Un numéro de chapitre', 'is_correct' => false],
                            ['choice_text' => 'Un schéma de rimes', 'is_correct' => false],
                            ['choice_text' => 'Une qualité qui décrit un personnage.', 'is_correct' => true],
                            ['choice_text' => 'Une date de publication', 'is_correct' => false],
                        ],
                        'explanation' => 'Des traits comme gentil, impatient, courageux ou timide aident à expliquer comment est un personnage.',
                    ],
                    [
                        'question' => 'Quelle question porte le plus directement sur la caractérisation ?',
                        'choices' => [
                            ['choice_text' => 'Où le livre a-t-il été imprimé ?', 'is_correct' => false],
                            ['choice_text' => 'Combien de pages compte-t-il ?', 'is_correct' => false],
                            ['choice_text' => 'Qui a conçu la couverture ?', 'is_correct' => false],
                            ['choice_text' => 'Comment le personnage se comporte-t-il et évolue-t-il ?', 'is_correct' => true],
                        ],
                        'explanation' => 'La caractérisation examine le comportement d’un personnage, ses qualités, ses relations et son évolution.',
                    ],
                    [
                        'question' => 'Que désigne « narrador » dans une histoire ?',
                        'choices' => [
                            ['choice_text' => 'L’éditeur', 'is_correct' => false],
                            ['choice_text' => 'La voix qui raconte l’histoire.', 'is_correct' => true],
                            ['choice_text' => 'Le lecteur', 'is_correct' => false],
                            ['choice_text' => 'Le titre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le narrateur est la voix ou le point de vue à travers lequel l’histoire est présentée.',
                    ],
                    [
                        'question' => 'Pourquoi le titre est-il parfois utile en analyse littéraire ?',
                        'choices' => [
                            ['choice_text' => 'Il peut donner des indices sur le sujet ou le sens du texte.', 'is_correct' => true],
                            ['choice_text' => 'Il révèle toujours la fin', 'is_correct' => false],
                            ['choice_text' => 'Il nomme toujours tous les personnages', 'is_correct' => false],
                            ['choice_text' => 'Il remplace la conclusion', 'is_correct' => false],
                        ],
                        'explanation' => 'Un titre peut introduire un personnage, une image, un conflit ou un thème important qui se précise au fil de la lecture.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un « conflit » littéraire ?',
                        'choices' => [
                            ['choice_text' => 'Un problème ou une lutte qui fait avancer l’histoire.', 'is_correct' => true],
                            ['choice_text' => 'Une liste de vocabulaire', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de chapitres d’un livre', 'is_correct' => false],
                            ['choice_text' => 'Une description de l’auteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le conflit crée de la tension et donne aux personnages un défi auquel répondre.',
                    ],
                    [
                        'question' => 'Quelle affirmation relève de l’interprétation plutôt que du simple fait ?',
                        'choices' => [
                            ['choice_text' => 'L’histoire compte cinq chapitres.', 'is_correct' => false],
                            ['choice_text' => 'Le personnage vit à Madrid.', 'is_correct' => false],
                            ['choice_text' => 'Le personnage se sent piégé par les attentes des autres.', 'is_correct' => true],
                            ['choice_text' => 'Le poème comporte dix vers.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette affirmation interprète la situation et le sens du personnage plutôt que de simplement rapporter un détail visible.',
                    ],
                    [
                        'question' => 'Quelle question est la plus utile pour analyser l’effet du cadre ?',
                        'choices' => [
                            ['choice_text' => 'De quelle couleur est la couverture ?', 'is_correct' => false],
                            ['choice_text' => 'Comment le cadre influence-t-il les personnages ou les événements ?', 'is_correct' => true],
                            ['choice_text' => 'Qui a imprimé le livre ?', 'is_correct' => false],
                            ['choice_text' => 'Combien d’exemplaires ont été vendus ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette question relie le cadre à l’action et au sens de l’histoire plutôt que de simplement identifier le lieu.',
                    ],
                ],
            ],
            [
                'title' => 'Analyser les personnages et leurs relations',
                'description' => 'Entraînez-vous à identifier les traits de caractère, les motivations, les relations, l’évolution des personnages et les preuves textuelles.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la « motivación » d’un personnage ?',
                        'choices' => [
                            ['choice_text' => 'L’âge du personnage uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le titre du chapitre', 'is_correct' => false],
                            ['choice_text' => 'Le cadre', 'is_correct' => false],
                            ['choice_text' => 'La raison qui explique les actions du personnage.', 'is_correct' => true],
                        ],
                        'explanation' => 'La motivation explique pourquoi un personnage choisit d’agir d’une certaine façon.',
                    ],
                    [
                        'question' => 'Un personnage donne de la nourriture à un inconnu affamé. Quel trait cette action peut-elle suggérer ?',
                        'choices' => [
                            ['choice_text' => 'Négligent', 'is_correct' => false],
                            ['choice_text' => 'Généreux', 'is_correct' => true],
                            ['choice_text' => 'Jaloux', 'is_correct' => false],
                            ['choice_text' => 'Impatient', 'is_correct' => false],
                        ],
                        'explanation' => 'Donner de la nourriture à une personne dans le besoin peut apporter une preuve que le personnage est généreux ou attentionné.',
                    ],
                    [
                        'question' => 'Pourquoi les lecteurs devraient-ils observer les actions d’un personnage pour analyser sa personnalité ?',
                        'choices' => [
                            ['choice_text' => 'Les actions révèlent toujours la fin', 'is_correct' => false],
                            ['choice_text' => 'Les actions remplacent le cadre', 'is_correct' => false],
                            ['choice_text' => 'Les actions apportent des preuves sur les traits de caractère.', 'is_correct' => true],
                            ['choice_text' => 'Les actions identifient l’éditeur', 'is_correct' => false],
                        ],
                        'explanation' => 'Ce que fait un personnage peut révéler ses valeurs, ses émotions, ses habitudes et ses motivations.',
                    ],
                    [
                        'question' => 'Un personnage devient plus confiant à la fin d’une histoire. Que montre cela ?',
                        'choices' => [
                            ['choice_text' => 'L’évolution du personnage', 'is_correct' => true],
                            ['choice_text' => 'Le cadre narratif', 'is_correct' => false],
                            ['choice_text' => 'La conception du livre', 'is_correct' => false],
                            ['choice_text' => 'Les rimes', 'is_correct' => false],
                        ],
                        'explanation' => 'Un changement significatif dans le comportement ou l’attitude d’un personnage fait partie de son évolution.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une « relación » entre personnages en analyse littéraire ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de pages', 'is_correct' => false],
                            ['choice_text' => 'Le mètre du poème', 'is_correct' => false],
                            ['choice_text' => 'L’orthographe du titre', 'is_correct' => false],
                            ['choice_text' => 'La façon dont les personnages se connectent ou interagissent.', 'is_correct' => true],
                        ],
                        'explanation' => 'Les relations incluent l’amitié, la famille, la rivalité, le conflit ou d’autres liens entre personnages.',
                    ],
                    [
                        'question' => 'Si deux personnages ne s’accordent pas sur une décision importante, que cela peut-il créer ?',
                        'choices' => [
                            ['choice_text' => 'Un conflit interpersonnel', 'is_correct' => true],
                            ['choice_text' => 'Une bibliographie', 'is_correct' => false],
                            ['choice_text' => 'Une strophe', 'is_correct' => false],
                            ['choice_text' => 'Une date de publication', 'is_correct' => false],
                        ],
                        'explanation' => 'Un désaccord entre personnages crée un conflit qui peut faire avancer l’histoire.',
                    ],
                    [
                        'question' => 'Quelle question aide le mieux à analyser la motivation d’un personnage ?',
                        'choices' => [
                            ['choice_text' => 'De quelle couleur est la couverture ?', 'is_correct' => false],
                            ['choice_text' => 'Combien d’exemplaires ont été imprimés ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi le personnage fait-il ce choix ?', 'is_correct' => true],
                            ['choice_text' => 'Qui a vendu le livre ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Se demander pourquoi un personnage agit aide le lecteur à cerner ses motifs et ses objectifs sous-jacents.',
                    ],
                    [
                        'question' => 'Un personnage dit : « No quiero que nadie cometa el mismo error. » Que peut révéler cette phrase ?',
                        'choices' => [
                            ['choice_text' => 'Le cadre est en train de changer', 'is_correct' => false],
                            ['choice_text' => 'Le personnage a tiré une leçon de son expérience.', 'is_correct' => true],
                            ['choice_text' => 'Le narrateur est inconnu', 'is_correct' => false],
                            ['choice_text' => 'L’histoire n’a aucun conflit', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase suggère une réflexion et le désir d’empêcher quelqu’un d’autre de répéter une erreur.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un changement dans le comportement d’un personnage peut suggérer ?',
                        'choices' => [
                            ['choice_text' => 'Que le titre a changé', 'is_correct' => false],
                            ['choice_text' => 'Que le personnage a évolué ou appris quelque chose.', 'is_correct' => true],
                            ['choice_text' => 'Que le livre a moins de pages', 'is_correct' => false],
                            ['choice_text' => 'Que le genre est la poésie', 'is_correct' => false],
                        ],
                        'explanation' => 'Un changement de comportement peut montrer une évolution, une prise de conscience, ou une réaction à des événements.',
                    ],
                    [
                        'question' => 'Quelle est la preuve la plus solide pour affirmer qu’un personnage est nerveux ?',
                        'choices' => [
                            ['choice_text' => 'Le livre est long', 'is_correct' => false],
                            ['choice_text' => 'L’auteur est célèbre', 'is_correct' => false],
                            ['choice_text' => 'Le texte décrit les mains tremblantes du personnage.', 'is_correct' => true],
                            ['choice_text' => 'Le chapitre a un titre', 'is_correct' => false],
                        ],
                        'explanation' => 'Une action physique précise décrite dans le texte appuie directement l’interprétation selon laquelle le personnage est nerveux.',
                    ],
                    [
                        'question' => 'Si un personnage aide les autres à plusieurs reprises, même quand c’est difficile, quelle interprétation est raisonnable ?',
                        'choices' => [
                            ['choice_text' => 'Le personnage n’aime personne', 'is_correct' => false],
                            ['choice_text' => 'Le cadre doit forcément être rural', 'is_correct' => false],
                            ['choice_text' => 'Le narrateur doit forcément être à la première personne', 'is_correct' => false],
                            ['choice_text' => 'Le personnage accorde de la valeur au fait d’aider les gens.', 'is_correct' => true],
                        ],
                        'explanation' => 'Des actions d’entraide répétées apportent la preuve des valeurs du personnage et de son sens des responsabilités.',
                    ],
                ],
            ],
            [
                'title' => 'Thème, preuves et interprétation',
                'description' => 'Apprenez à identifier des thèmes, à distinguer les preuves de l’opinion et à formuler des interprétations simples fondées sur des détails du texte.',
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel sujet pourrait devenir un thème dans une histoire ?',
                        'choices' => [
                            ['choice_text' => 'Le numéro de page', 'is_correct' => false],
                            ['choice_text' => 'L’amitié', 'is_correct' => true],
                            ['choice_text' => 'La taille de la police', 'is_correct' => false],
                            ['choice_text' => 'Le prix du livre', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amitié est un sujet large qu’une histoire peut explorer comme thème central.',
                    ],
                    [
                        'question' => 'Quelle affirmation est plus précise en tant que thème littéraire ?',
                        'choices' => [
                            ['choice_text' => 'L’amitié', 'is_correct' => false],
                            ['choice_text' => 'Les gens', 'is_correct' => false],
                            ['choice_text' => 'La confiance peut être difficile à reconstruire après une trahison.', 'is_correct' => true],
                            ['choice_text' => 'La vie', 'is_correct' => false],
                        ],
                        'explanation' => 'Un thème précis exprime une idée ou un message plutôt que de simplement nommer un sujet large.',
                    ],
                    [
                        'question' => 'Pourquoi un seul petit détail ne suffit-il parfois pas à prouver un thème ?',
                        'choices' => [
                            ['choice_text' => 'Une interprétation solide a généralement besoin de plusieurs détails qui la soutiennent.', 'is_correct' => true],
                            ['choice_text' => 'Les thèmes ne se trouvent que dans les titres', 'is_correct' => false],
                            ['choice_text' => 'Les détails n’ont jamais d’importance', 'is_correct' => false],
                            ['choice_text' => 'Les thèmes sont toujours énoncés directement', 'is_correct' => false],
                        ],
                        'explanation' => 'Observer des motifs récurrents dans tout le texte rend une interprétation thématique plus convaincante.',
                    ],
                    [
                        'question' => 'Une histoire montre de façon répétée un élève qui choisit l’honnêteté même quand cela cause des problèmes. Quel thème cela peut-il soutenir ?',
                        'choices' => [
                            ['choice_text' => 'Les devoirs sont faciles', 'is_correct' => false],
                            ['choice_text' => 'Les bâtiments scolaires sont grands', 'is_correct' => false],
                            ['choice_text' => 'Le temps change vite', 'is_correct' => false],
                            ['choice_text' => 'L’honnêteté peut demander du courage.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le conflit répété autour de choix honnêtes peut appuyer une interprétation portant sur le courage et l’honnêteté.',
                    ],
                    [
                        'question' => 'Quelle est la différence entre un sujet et un thème ?',
                        'choices' => [
                            ['choice_text' => 'Ils sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Un thème n’est qu’un personnage', 'is_correct' => false],
                            ['choice_text' => 'Un sujet est toujours la fin', 'is_correct' => false],
                            ['choice_text' => 'Un sujet nomme un thème général, tandis qu’un thème exprime une idée à son propos.', 'is_correct' => true],
                        ],
                        'explanation' => 'Par exemple, « l’amitié » est un sujet, tandis que « la véritable amitié exige la confiance » est une idée thématique.',
                    ],
                    [
                        'question' => 'Quelle phrase est la mieux appuyée par des preuves textuelles ?',
                        'choices' => [
                            ['choice_text' => 'Le personnage est seul car l’histoire la montre mangeant seule et évitant la conversation.', 'is_correct' => true],
                            ['choice_text' => 'Le personnage est seul parce que je ne l’aime pas.', 'is_correct' => false],
                            ['choice_text' => 'Le personnage est seul parce que la couverture est bleue.', 'is_correct' => false],
                            ['choice_text' => 'Le personnage est seul parce que l’auteur est célèbre.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette affirmation relie directement une interprétation à deux détails concrets du texte.',
                    ],
                    [
                        'question' => 'Que signifie « evidencia textual » ?',
                        'choices' => [
                            ['choice_text' => 'Un souvenir personnel', 'is_correct' => false],
                            ['choice_text' => 'Une preuve textuelle', 'is_correct' => true],
                            ['choice_text' => 'Une publicité pour un livre', 'is_correct' => false],
                            ['choice_text' => 'Une carte de bibliothèque', 'is_correct' => false],
                        ],
                        'explanation' => 'Une preuve textuelle est un détail de l’œuvre qui appuie une interprétation ou une affirmation.',
                    ],
                    [
                        'question' => 'Un poème mentionne à plusieurs reprises l’obscurité et le silence. Que pourrait examiner un analyste ?',
                        'choices' => [
                            ['choice_text' => 'Seulement le prix du poème', 'is_correct' => false],
                            ['choice_text' => 'Seulement l’âge de l’auteur', 'is_correct' => false],
                            ['choice_text' => 'Si ces images contribuent à créer une ambiance ou une idée particulière.', 'is_correct' => true],
                            ['choice_text' => 'Seulement le numéro de page', 'is_correct' => false],
                        ],
                        'explanation' => 'Des images répétées peuvent contribuer à l’ambiance et se relier aussi à des thèmes plus larges.',
                    ],
                    [
                        'question' => 'Quelle démarche est la plus solide pour déterminer le sens d’un vers ambigu ?',
                        'choices' => [
                            ['choice_text' => 'Ignorer le texte environnant', 'is_correct' => false],
                            ['choice_text' => 'Ne se baser que sur la couverture', 'is_correct' => false],
                            ['choice_text' => 'Considérer le vers dans le contexte de l’ensemble du texte.', 'is_correct' => true],
                            ['choice_text' => 'Choisir l’interprétation la plus courte', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contexte peut clarifier la fonction d’un mot, d’une image ou d’une affirmation au sein de l’œuvre entière.',
                    ],
                    [
                        'question' => 'Que fait une bonne interprétation littéraire ?',
                        'choices' => [
                            ['choice_text' => 'Elle explique comment des détails du texte appuient une idée.', 'is_correct' => true],
                            ['choice_text' => 'Elle ne fait que répéter le titre', 'is_correct' => false],
                            ['choice_text' => 'Elle ne fait que résumer l’intrigue', 'is_correct' => false],
                            ['choice_text' => 'Elle ne fait que lister les personnages', 'is_correct' => false],
                        ],
                        'explanation' => 'L’interprétation relie des preuves à une explication raisonnée du sens.',
                    ],
                    [
                        'question' => 'Pourquoi deux lecteurs peuvent-ils avoir des interprétations différentes de la même histoire ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les preuves n’ont jamais d’importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les thèmes n’ont aucun sens', 'is_correct' => false],
                            ['choice_text' => 'Parce que les lecteurs doivent ignorer le texte', 'is_correct' => false],
                            ['choice_text' => 'Un texte littéraire peut permettre plus d’une interprétation raisonnable lorsqu’elle est appuyée par des preuves.', 'is_correct' => true],
                        ],
                        'explanation' => 'Plusieurs lectures sont possibles, mais elles doivent rester ancrées dans le texte.',
                    ],
                    [
                        'question' => 'Quelle affirmation décrit le mieux une observation fondée sur le texte ?',
                        'choices' => [
                            ['choice_text' => 'Le poème est le meilleur du monde.', 'is_correct' => false],
                            ['choice_text' => 'Le poème répète l’image de la mer trois fois.', 'is_correct' => true],
                            ['choice_text' => 'L’auteur était certainement heureux.', 'is_correct' => false],
                            ['choice_text' => 'Tout lecteur doit aimer le poème.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une observation fondée sur le texte rapporte un détail précis que l’on peut directement vérifier dans l’œuvre.',
                    ],
                ],
            ],
            [
                'title' => 'Narrateur, ton et structure',
                'description' => 'Analysez le point de vue narratif, le ton, l’enchaînement et les choix structurels simples dans des textes littéraires.',
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Que signifie « primera persona » en narration ?',
                        'choices' => [
                            ['choice_text' => 'L’histoire n’a pas de narrateur', 'is_correct' => false],
                            ['choice_text' => 'L’auteur n’utilise que le dialogue', 'is_correct' => false],
                            ['choice_text' => 'Le narrateur s’exprime en utilisant « yo » ou « nosotros ».', 'is_correct' => true],
                            ['choice_text' => 'L’histoire est toujours un poème', 'is_correct' => false],
                        ],
                        'explanation' => 'La narration à la première personne présente l’histoire à travers un narrateur qui parle de lui-même en disant « je » ou « nous ».',
                    ],
                    [
                        'question' => 'Qu’est-ce que la narration « tercera persona » ?',
                        'choices' => [
                            ['choice_text' => 'Le narrateur dit toujours « yo »', 'is_correct' => false],
                            ['choice_text' => 'Le narrateur désigne les personnages par « él », « ella », ou par leur nom.', 'is_correct' => true],
                            ['choice_text' => 'Il n’y a aucun point de vue', 'is_correct' => false],
                            ['choice_text' => 'Chaque phrase est un dialogue', 'is_correct' => false],
                        ],
                        'explanation' => 'La narration à la troisième personne présente les personnages depuis une perspective grammaticale extérieure.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le « tono » en analyse littéraire ?',
                        'choices' => [
                            ['choice_text' => 'L’attitude ou la tonalité émotionnelle de l’écriture.', 'is_correct' => true],
                            ['choice_text' => 'Le format de la page', 'is_correct' => false],
                            ['choice_text' => 'Le numéro du chapitre', 'is_correct' => false],
                            ['choice_text' => 'L’adresse de l’auteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le ton peut être sérieux, joyeux, ironique, triste, calme, coléreux, ou exprimer d’autres attitudes véhiculées par le langage.',
                    ],
                    [
                        'question' => 'Une scène utilise des mots comme « feliz », « sonrió » et « celebró ». Quel ton ces détails peuvent-ils suggérer ?',
                        'choices' => [
                            ['choice_text' => 'Hostile', 'is_correct' => false],
                            ['choice_text' => 'Craintif', 'is_correct' => false],
                            ['choice_text' => 'Indifférent', 'is_correct' => false],
                            ['choice_text' => 'Joyeux', 'is_correct' => true],
                        ],
                        'explanation' => 'Ces mots et actions positifs apportent la preuve d’un ton heureux ou joyeux.',
                    ],
                    [
                        'question' => 'Qu’est-ce que l’« estructura » dans une œuvre littéraire ?',
                        'choices' => [
                            ['choice_text' => 'La biographie de l’auteur', 'is_correct' => false],
                            ['choice_text' => 'Le prix du livre', 'is_correct' => false],
                            ['choice_text' => 'La couleur de la couverture', 'is_correct' => false],
                            ['choice_text' => 'La façon dont les parties de l’œuvre sont organisées.', 'is_correct' => true],
                        ],
                        'explanation' => 'La structure concerne l’agencement et les liens entre les scènes, les chapitres, les strophes ou d’autres parties d’un texte.',
                    ],
                    [
                        'question' => 'Pourquoi un auteur pourrait-il commencer une histoire au milieu d’un événement important ?',
                        'choices' => [
                            ['choice_text' => 'Pour supprimer tout conflit', 'is_correct' => false],
                            ['choice_text' => 'Pour créer immédiatement de l’intérêt ou de la tension.', 'is_correct' => true],
                            ['choice_text' => 'Pour expliquer l’historique de la publication', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter d’utiliser des personnages', 'is_correct' => false],
                        ],
                        'explanation' => 'Commencer au milieu d’un événement peut rendre les lecteurs curieux de savoir ce qui s’est passé avant et ce qui va suivre.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un enchaînement chronologique ?',
                        'choices' => [
                            ['choice_text' => 'Des événements présentés dans l’ordre du temps.', 'is_correct' => true],
                            ['choice_text' => 'Des événements uniquement dans un ordre aléatoire', 'is_correct' => false],
                            ['choice_text' => 'Une liste de personnages', 'is_correct' => false],
                            ['choice_text' => 'Un poème sans vers', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure chronologique suit les événements du plus ancien au plus récent, dans l’ordre où ils se produisent.',
                    ],
                    [
                        'question' => 'Que signifie un « flashback » ?',
                        'choices' => [
                            ['choice_text' => 'Un saut vers le futur', 'is_correct' => false],
                            ['choice_text' => 'Le dernier paragraphe', 'is_correct' => false],
                            ['choice_text' => 'Un retour à un événement antérieur.', 'is_correct' => true],
                            ['choice_text' => 'Un simple changement de narrateur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un flashback interrompt la chronologie en cours pour montrer quelque chose qui s’est produit plus tôt.',
                    ],
                    [
                        'question' => 'Si un narrateur connaît les pensées de plusieurs personnages, que cela peut-il suggérer ?',
                        'choices' => [
                            ['choice_text' => 'L’histoire n’a aucun point de vue', 'is_correct' => false],
                            ['choice_text' => 'Le texte est un dictionnaire', 'is_correct' => false],
                            ['choice_text' => 'Le narrateur a un accès étendu aux pensées des personnages.', 'is_correct' => true],
                            ['choice_text' => 'Le narrateur est toujours un personnage', 'is_correct' => false],
                        ],
                        'explanation' => 'Connaître les pensées intimes de plusieurs personnages suggère un narrateur à l’accès large, voire omniscient.',
                    ],
                    [
                        'question' => 'Pourquoi le ton importe-t-il en analyse littéraire ?',
                        'choices' => [
                            ['choice_text' => 'Le ton ne change que l’orthographe', 'is_correct' => false],
                            ['choice_text' => 'Le ton donne le numéro de page', 'is_correct' => false],
                            ['choice_text' => 'Le ton identifie l’éditeur', 'is_correct' => false],
                            ['choice_text' => 'Le ton influence la façon dont les lecteurs comprennent l’attitude de l’auteur envers le sujet.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le ton peut orienter l’interprétation d’un événement ou d’un personnage en signalant des attitudes émotionnelles ou évaluatives.',
                    ],
                    [
                        'question' => 'Si un narrateur dit : « No sabía que aquel día cambiaría mi vida », que crée cette phrase ?',
                        'choices' => [
                            ['choice_text' => 'Une explication scientifique', 'is_correct' => false],
                            ['choice_text' => 'Le sentiment que le narrateur regarde les événements avec le recul.', 'is_correct' => true],
                            ['choice_text' => 'Une liste de personnages', 'is_correct' => false],
                            ['choice_text' => 'Un changement vers la poésie', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase suggère que le narrateur sait qu’un événement passé a eu un effet important plus tard.',
                    ],
                ],
            ],
            [
                'title' => 'Appliquer l’analyse littéraire',
                'description' => 'Combinez plusieurs compétences d’analyse de niveau débutant pour interpréter de courtes situations littéraires et justifier des conclusions par des preuves.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Une histoire commence avec un personnage qui a peur de parler en public, mais se termine avec ce même personnage prononçant un discours. Quelle est l’évolution la plus claire ?',
                        'choices' => [
                            ['choice_text' => 'Le cadre disparaît', 'is_correct' => false],
                            ['choice_text' => 'Le narrateur change automatiquement', 'is_correct' => false],
                            ['choice_text' => 'L’histoire devient un poème', 'is_correct' => false],
                            ['choice_text' => 'Le personnage devient plus confiant.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le passage de la peur à la prise de parole publique montre une évolution claire vers davantage de confiance.',
                    ],
                    [
                        'question' => 'Un roman montre à plusieurs reprises une famille qui résout ses problèmes en communiquant ouvertement. Quel thème est le plus raisonnable ?',
                        'choices' => [
                            ['choice_text' => 'Les familles ne sont jamais en désaccord', 'is_correct' => false],
                            ['choice_text' => 'Une communication ouverte peut renforcer les relations.', 'is_correct' => true],
                            ['choice_text' => 'La communication est impossible', 'is_correct' => false],
                            ['choice_text' => 'Les problèmes n’ont pas de solution', 'is_correct' => false],
                        ],
                        'explanation' => 'Des exemples répétés de communication honnête qui soutient la famille peuvent appuyer cette interprétation thématique.',
                    ],
                    [
                        'question' => 'Un narrateur dit : « Yo vi la tormenta desde mi ventana. » Quel est ce point de vue ?',
                        'choices' => [
                            ['choice_text' => 'La première personne', 'is_correct' => true],
                            ['choice_text' => 'La troisième personne', 'is_correct' => false],
                            ['choice_text' => 'La deuxième personne', 'is_correct' => false],
                            ['choice_text' => 'Aucun narrateur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le narrateur utilise « yo », donc l’histoire est présentée à la première personne.',
                    ],
                    [
                        'question' => 'Un personnage cache une lettre parce qu’il craint la réaction de quelqu’un. Que révèle le plus directement cette action ?',
                        'choices' => [
                            ['choice_text' => 'Le cadre est une ville', 'is_correct' => false],
                            ['choice_text' => 'Le livre est historique', 'is_correct' => false],
                            ['choice_text' => 'Le personnage s’inquiète des conséquences.', 'is_correct' => true],
                            ['choice_text' => 'Le narrateur est un poète', 'is_correct' => false],
                        ],
                        'explanation' => 'Cacher la lettre à cause d’une réaction redoutée apporte la preuve d’une anxiété ou d’une inquiétude sur ce qui pourrait arriver.',
                    ],
                    [
                        'question' => 'Un poème répète plusieurs fois le mot « nunca ». Que pourrait examiner d’abord un analyste ?',
                        'choices' => [
                            ['choice_text' => 'L’effet de la répétition sur l’insistance et l’émotion.', 'is_correct' => true],
                            ['choice_text' => 'Le domicile de l’auteur', 'is_correct' => false],
                            ['choice_text' => 'Le prix du livre', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de personnages', 'is_correct' => false],
                        ],
                        'explanation' => 'Un mot répété peut insister sur une idée ou créer un fort effet émotionnel ou rythmique.',
                    ],
                    [
                        'question' => 'Le texte décrit une pièce comme « fría, vacía y silenciosa ». Qu’est-ce que ces détails peuvent aider à établir ?',
                        'choices' => [
                            ['choice_text' => 'L’âge de l’auteur', 'is_correct' => false],
                            ['choice_text' => 'Une ambiance ou une atmosphère', 'is_correct' => true],
                            ['choice_text' => 'La date de publication', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de chapitres', 'is_correct' => false],
                        ],
                        'explanation' => 'Ces détails sensoriels et descriptifs peuvent créer une atmosphère froide, solitaire ou tendue.',
                    ],
                    [
                        'question' => 'Un personnage dit une chose mais fait toujours le contraire. Que pourrait explorer un analyste ?',
                        'choices' => [
                            ['choice_text' => 'Seulement le cadre', 'is_correct' => false],
                            ['choice_text' => 'Seulement le titre', 'is_correct' => false],
                            ['choice_text' => 'Seulement la police de caractères', 'is_correct' => false],
                            ['choice_text' => 'Le contraste entre les paroles et les actions.', 'is_correct' => true],
                        ],
                        'explanation' => 'L’écart entre ce qu’un personnage dit et ce qu’il fait peut révéler un conflit, une ironie ou une motivation cachée.',
                    ],
                    [
                        'question' => 'Quelle phrase illustre le mieux une affirmation appuyée par des preuves ?',
                        'choices' => [
                            ['choice_text' => 'Le personnage est loyal parce que je l’aime bien.', 'is_correct' => false],
                            ['choice_text' => 'Le personnage est loyal parce que le titre est court.', 'is_correct' => false],
                            ['choice_text' => 'Le personnage est loyal car elle reste avec son amie quand tout le monde part.', 'is_correct' => true],
                            ['choice_text' => 'Le personnage est loyal parce que la couverture est rouge.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’affirmation sur la loyauté est directement reliée à une action précise de l’histoire.',
                    ],
                    [
                        'question' => 'Si la fin reprend une image du début, que peut accomplir ce choix structurel ?',
                        'choices' => [
                            ['choice_text' => 'Supprimer le thème', 'is_correct' => false],
                            ['choice_text' => 'Changer l’auteur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le conflit', 'is_correct' => false],
                            ['choice_text' => 'Créer un lien entre l’ouverture et la fin.', 'is_correct' => true],
                        ],
                        'explanation' => 'Répéter une image importante peut créer un sentiment d’unité ou inviter les lecteurs à comparer les deux moments.',
                    ],
                    [
                        'question' => 'Une histoire utilise beaucoup de phrases courtes pendant une scène dangereuse. Quel effet cela peut-il créer ?',
                        'choices' => [
                            ['choice_text' => 'Un rythme plus rapide et plus tendu.', 'is_correct' => true],
                            ['choice_text' => 'Un ton académique plus lent', 'is_correct' => false],
                            ['choice_text' => 'Un nouveau genre automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Un autre auteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Des phrases courtes peuvent accélérer la lecture et accroître la tension pendant une scène urgente.',
                    ],
                    [
                        'question' => 'Que devrait faire un analyste débutant avant de formuler une conclusion solide sur un texte ?',
                        'choices' => [
                            ['choice_text' => 'Choisir une conclusion d’abord et ignorer le texte', 'is_correct' => false],
                            ['choice_text' => 'Se baser uniquement sur le titre', 'is_correct' => false],
                            ['choice_text' => 'Lire attentivement et réunir des preuves pertinentes.', 'is_correct' => true],
                            ['choice_text' => 'Copier l’avis de quelqu’un d’autre sans vérifier', 'is_correct' => false],
                        ],
                        'explanation' => 'Une lecture attentive et la collecte de preuves offrent une base fiable pour l’interprétation.',
                    ],
                    [
                        'question' => 'Un personnage s’excuse après avoir reconnu une erreur. À quoi ce moment peut-il contribuer ?',
                        'choices' => [
                            ['choice_text' => 'À la date de publication', 'is_correct' => false],
                            ['choice_text' => 'À l’évolution du personnage.', 'is_correct' => true],
                            ['choice_text' => 'À la mise en page', 'is_correct' => false],
                            ['choice_text' => 'À l’orthographe du titre', 'is_correct' => false],
                        ],
                        'explanation' => 'Reconnaître une erreur et changer de comportement peut montrer l’évolution du personnage.',
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
