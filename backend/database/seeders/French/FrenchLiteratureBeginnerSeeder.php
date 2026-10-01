<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FrenchLiteratureBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'french-literature')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Découvrir les genres littéraires',
                'description' => 'Identifier les principaux genres de la littérature française et reconnaître leurs caractéristiques générales.',
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quel genre raconte généralement une histoire avec des personnages et des événements ?',
                        'choices' => [
                            ['choice_text' => 'Le récit', 'is_correct' => true],
                            ['choice_text' => 'La poésie', 'is_correct' => false],
                            ['choice_text' => 'Le dictionnaire', 'is_correct' => false],
                            ['choice_text' => 'Le formulaire administratif', 'is_correct' => false],
                        ],
                        'explanation' => 'Le récit raconte une histoire à travers des personnages, des événements et une organisation narrative.',
                    ],
                    [
                        'question' => 'Quel genre est particulièrement associé aux vers et au travail du rythme et des images ?',
                        'choices' => [
                            ['choice_text' => 'La poésie', 'is_correct' => true],
                            ['choice_text' => 'Le roman policier uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le compte rendu administratif', 'is_correct' => false],
                            ['choice_text' => 'La biographie scientifique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La poésie utilise souvent les vers, le rythme, les sonorités et les images pour produire des effets particuliers.',
                    ],
                    [
                        'question' => 'Quel genre est principalement destiné à être joué devant un public ?',
                        'choices' => [
                            ['choice_text' => 'Le théâtre', 'is_correct' => true],
                            ['choice_text' => 'Le roman', 'is_correct' => false],
                            ['choice_text' => 'Le dictionnaire', 'is_correct' => false],
                            ['choice_text' => 'Le manuel scolaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le théâtre est conçu pour être représenté devant un public, avec des dialogues et des actions scéniques.',
                    ],
                    [
                        'question' => 'Quel texte raconte la vie réelle d\'une personne ?',
                        'choices' => [
                            ['choice_text' => 'Une biographie', 'is_correct' => true],
                            ['choice_text' => 'Une comédie', 'is_correct' => false],
                            ['choice_text' => 'Une fable', 'is_correct' => false],
                            ['choice_text' => 'Un sonnet', 'is_correct' => false],
                        ],
                        'explanation' => 'Une biographie présente la vie d\'une personne, généralement écrite par quelqu\'un d\'autre.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une autobiographie ?',
                        'choices' => [
                            ['choice_text' => 'Un récit de sa propre vie écrit par soi-même', 'is_correct' => true],
                            ['choice_text' => 'Une pièce de théâtre comique', 'is_correct' => false],
                            ['choice_text' => 'Un récit historique sur une ville', 'is_correct' => false],
                            ['choice_text' => 'Une collection de poèmes écrits par plusieurs auteurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une autobiographie, l\'auteur raconte sa propre vie ou une partie importante de celle-ci.',
                    ],
                    [
                        'question' => 'Quel genre met souvent en scène des personnages qui parlent directement entre eux ?',
                        'choices' => [
                            ['choice_text' => 'Le théâtre', 'is_correct' => true],
                            ['choice_text' => 'La description géographique', 'is_correct' => false],
                            ['choice_text' => 'L\'article de dictionnaire', 'is_correct' => false],
                            ['choice_text' => 'La recette', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dialogue est essentiel au théâtre et permet aux personnages de communiquer directement sur scène.',
                    ],
                    [
                        'question' => 'Une fable est souvent une courte histoire qui cherche notamment à...',
                        'choices' => [
                            ['choice_text' => 'Donner une leçon ou une morale', 'is_correct' => true],
                            ['choice_text' => 'Présenter uniquement des dates historiques', 'is_correct' => false],
                            ['choice_text' => 'Expliquer les règles d\'un sport', 'is_correct' => false],
                            ['choice_text' => 'Décrire une recette de cuisine', 'is_correct' => false],
                        ],
                        'explanation' => 'La fable raconte généralement une histoire courte et peut se terminer par une morale ou transmettre une leçon.',
                    ],
                    [
                        'question' => 'Quel genre utilise souvent des personnages et des situations pour provoquer le rire ?',
                        'choices' => [
                            ['choice_text' => 'La comédie', 'is_correct' => true],
                            ['choice_text' => 'L\'élégie uniquement', 'is_correct' => false],
                            ['choice_text' => 'La biographie', 'is_correct' => false],
                            ['choice_text' => 'Le reportage scientifique', 'is_correct' => false],
                        ],
                        'explanation' => 'La comédie cherche généralement à faire rire ou sourire en mettant en scène des situations comiques.',
                    ],
                    [
                        'question' => 'Quel genre cherche souvent à provoquer la peur ou l\'angoisse ?',
                        'choices' => [
                            ['choice_text' => 'Le récit fantastique ou d\'horreur', 'is_correct' => true],
                            ['choice_text' => 'La notice administrative', 'is_correct' => false],
                            ['choice_text' => 'La carte postale', 'is_correct' => false],
                            ['choice_text' => 'Le curriculum vitae', 'is_correct' => false],
                        ],
                        'explanation' => 'Certains récits fantastiques ou d\'horreur utilisent l\'inquiétude, l\'étrange et le suspense pour produire des effets de peur.',
                    ],
                    [
                        'question' => 'Quel élément est typique d\'un roman ?',
                        'choices' => [
                            ['choice_text' => 'Une histoire développée sur une certaine longueur', 'is_correct' => true],
                            ['choice_text' => 'Une liste de verbes conjugués', 'is_correct' => false],
                            ['choice_text' => 'Un formulaire à compléter', 'is_correct' => false],
                            ['choice_text' => 'Une simple liste de définitions', 'is_correct' => false],
                        ],
                        'explanation' => 'Le roman est un récit de fiction généralement plus long et plus développé qu\'une histoire très courte.',
                    ],
                    [
                        'question' => 'Quel genre est souvent organisé en strophes et en vers ?',
                        'choices' => [
                            ['choice_text' => 'La poésie', 'is_correct' => true],
                            ['choice_text' => 'Le roman', 'is_correct' => false],
                            ['choice_text' => 'La biographie', 'is_correct' => false],
                            ['choice_text' => 'Le théâtre uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreux poèmes sont organisés en vers et en strophes, même si la poésie contemporaine peut aussi utiliser d\'autres formes.',
                    ],
                ],
            ],

            [
                'title' => 'Les grandes périodes de la littérature française',
                'description' => 'Reconnaître quelques grandes périodes et associer des auteurs ou des mouvements à leur contexte général.',
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'À quelle période appartient principalement Molière ?',
                        'choices' => [
                            ['choice_text' => 'Le XVIIe siècle', 'is_correct' => true],
                            ['choice_text' => 'Le XIIe siècle', 'is_correct' => false],
                            ['choice_text' => 'Le XIXe siècle', 'is_correct' => false],
                            ['choice_text' => 'Le XXIe siècle', 'is_correct' => false],
                        ],
                        'explanation' => 'Molière est l\'un des grands auteurs français du XVIIe siècle, notamment connu pour ses comédies.',
                    ],
                    [
                        'question' => 'Victor Hugo appartient principalement à quel siècle ?',
                        'choices' => [
                            ['choice_text' => 'Le XIXe siècle', 'is_correct' => true],
                            ['choice_text' => 'Le XVe siècle', 'is_correct' => false],
                            ['choice_text' => 'Le XVIIe siècle', 'is_correct' => false],
                            ['choice_text' => 'Le XXe siècle uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Victor Hugo est une figure majeure de la littérature française du XIXe siècle.',
                    ],
                    [
                        'question' => 'Le romantisme français est particulièrement associé à quel siècle ?',
                        'choices' => [
                            ['choice_text' => 'Le XIXe siècle', 'is_correct' => true],
                            ['choice_text' => 'Le XIIe siècle', 'is_correct' => false],
                            ['choice_text' => 'Le XVIe siècle uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le XXIe siècle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le romantisme se développe fortement au XIXe siècle et met notamment en avant les émotions, l\'imagination et l\'expression personnelle.',
                    ],
                    [
                        'question' => 'La Renaissance française correspond principalement à quelle période ?',
                        'choices' => [
                            ['choice_text' => 'Le XVIe siècle', 'is_correct' => true],
                            ['choice_text' => 'Le Xe siècle', 'is_correct' => false],
                            ['choice_text' => 'Le XVIIIe siècle', 'is_correct' => false],
                            ['choice_text' => 'Le XXe siècle', 'is_correct' => false],
                        ],
                        'explanation' => 'La Renaissance française correspond surtout au XVIe siècle et se caractérise notamment par un renouveau culturel et humaniste.',
                    ],
                    [
                        'question' => 'Quel courant met particulièrement l\'accent sur l\'observation du réel au XIXe siècle ?',
                        'choices' => [
                            ['choice_text' => 'Le réalisme', 'is_correct' => true],
                            ['choice_text' => 'Le surréalisme', 'is_correct' => false],
                            ['choice_text' => 'Le symbolisme médiéval', 'is_correct' => false],
                            ['choice_text' => 'Le classicisme antique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le réalisme cherche notamment à représenter la vie et la société de manière détaillée et crédible.',
                    ],
                    [
                        'question' => 'Quel mouvement littéraire est associé à André Breton ?',
                        'choices' => [
                            ['choice_text' => 'Le surréalisme', 'is_correct' => true],
                            ['choice_text' => 'Le classicisme', 'is_correct' => false],
                            ['choice_text' => 'Le réalisme', 'is_correct' => false],
                            ['choice_text' => 'La Pléiade', 'is_correct' => false],
                        ],
                        'explanation' => 'André Breton est une figure centrale du surréalisme, mouvement qui accorde une grande place à l\'imagination et à l\'inconscient.',
                    ],
                    [
                        'question' => 'Quel mouvement est associé aux écrivains comme Corneille et Racine ?',
                        'choices' => [
                            ['choice_text' => 'Le classicisme', 'is_correct' => true],
                            ['choice_text' => 'Le surréalisme', 'is_correct' => false],
                            ['choice_text' => 'Le romantisme', 'is_correct' => false],
                            ['choice_text' => 'Le nouveau roman', 'is_correct' => false],
                        ],
                        'explanation' => 'Corneille et Racine sont deux grandes figures du théâtre classique du XVIIe siècle.',
                    ],
                    [
                        'question' => 'Quel courant littéraire valorise fortement l\'émotion, l\'imagination et la sensibilité individuelle ?',
                        'choices' => [
                            ['choice_text' => 'Le romantisme', 'is_correct' => true],
                            ['choice_text' => 'Le réalisme scientifique', 'is_correct' => false],
                            ['choice_text' => 'Le classicisme uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le naturalisme juridique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le romantisme accorde une place importante aux sentiments, à l\'imagination, à la nature et à l\'expression personnelle.',
                    ],
                    [
                        'question' => 'Quel grand mouvement culturel du XVIe siècle met l\'homme, les langues anciennes et les savoirs au centre de nombreuses réflexions ?',
                        'choices' => [
                            ['choice_text' => 'L\'humanisme', 'is_correct' => true],
                            ['choice_text' => 'Le naturalisme', 'is_correct' => false],
                            ['choice_text' => 'Le surréalisme', 'is_correct' => false],
                            ['choice_text' => 'Le symbolisme du XXe siècle', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'humanisme de la Renaissance valorise notamment l\'éducation, les langues anciennes, les sciences et la réflexion sur l\'être humain.',
                    ],
                    [
                        'question' => 'Quel auteur est associé aux Essais ?',
                        'choices' => [
                            ['choice_text' => 'Michel de Montaigne', 'is_correct' => true],
                            ['choice_text' => 'Émile Zola', 'is_correct' => false],
                            ['choice_text' => 'Molière', 'is_correct' => false],
                            ['choice_text' => 'Albert Camus', 'is_correct' => false],
                        ],
                        'explanation' => 'Montaigne est l\'auteur des Essais, œuvre majeure de la Renaissance française.',
                    ],
                    [
                        'question' => 'Quel siècle est notamment connu pour l\'importance du classicisme français ?',
                        'choices' => [
                            ['choice_text' => 'Le XVIIe siècle', 'is_correct' => true],
                            ['choice_text' => 'Le XVe siècle', 'is_correct' => false],
                            ['choice_text' => 'Le XIXe siècle', 'is_correct' => false],
                            ['choice_text' => 'Le XXIe siècle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le XVIIe siècle est fortement associé au classicisme, notamment dans le théâtre et la littérature française.',
                    ],
                    [
                        'question' => 'Quel mouvement littéraire du XIXe siècle cherche notamment à représenter les milieux sociaux et les réalités quotidiennes ?',
                        'choices' => [
                            ['choice_text' => 'Le réalisme', 'is_correct' => true],
                            ['choice_text' => 'Le surréalisme', 'is_correct' => false],
                            ['choice_text' => 'Le baroque médiéval', 'is_correct' => false],
                            ['choice_text' => 'La poésie courtoise', 'is_correct' => false],
                        ],
                        'explanation' => 'Le réalisme s\'intéresse aux personnages, aux milieux sociaux et aux situations ordinaires avec une volonté de représentation crédible.',
                    ],
                ],
            ],

            [
                'title' => 'Auteurs et œuvres célèbres',
                'description' => 'Associer quelques auteurs majeurs à leurs œuvres connues et comprendre leur place dans la littérature française.',
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Qui a écrit Les Misérables ?',
                        'choices' => [
                            ['choice_text' => 'Victor Hugo', 'is_correct' => true],
                            ['choice_text' => 'Molière', 'is_correct' => false],
                            ['choice_text' => 'Montaigne', 'is_correct' => false],
                            ['choice_text' => 'Jean de La Fontaine', 'is_correct' => false],
                        ],
                        'explanation' => 'Les Misérables est un grand roman de Victor Hugo publié au XIXe siècle.',
                    ],
                    [
                        'question' => 'Quel auteur est associé à L\'Avare ?',
                        'choices' => [
                            ['choice_text' => 'Molière', 'is_correct' => true],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                            ['choice_text' => 'Gustave Flaubert', 'is_correct' => false],
                            ['choice_text' => 'Albert Camus', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'Avare est une comédie de Molière, célèbre pour le personnage d\'Harpagon.',
                    ],
                    [
                        'question' => 'Qui a écrit Madame Bovary ?',
                        'choices' => [
                            ['choice_text' => 'Gustave Flaubert', 'is_correct' => true],
                            ['choice_text' => 'Émile Zola', 'is_correct' => false],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                            ['choice_text' => 'Molière', 'is_correct' => false],
                        ],
                        'explanation' => 'Madame Bovary est un roman de Gustave Flaubert publié au XIXe siècle.',
                    ],
                    [
                        'question' => 'Quel auteur est célèbre pour Le Petit Prince ?',
                        'choices' => [
                            ['choice_text' => 'Antoine de Saint-Exupéry', 'is_correct' => true],
                            ['choice_text' => 'Guy de Maupassant', 'is_correct' => false],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                            ['choice_text' => 'Jean Racine', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Petit Prince est l\'œuvre la plus connue d\'Antoine de Saint-Exupéry.',
                    ],
                    [
                        'question' => 'Qui est l\'auteur du roman L\'Étranger ?',
                        'choices' => [
                            ['choice_text' => 'Albert Camus', 'is_correct' => true],
                            ['choice_text' => 'André Breton', 'is_correct' => false],
                            ['choice_text' => 'Émile Zola', 'is_correct' => false],
                            ['choice_text' => 'Alexandre Dumas', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'Étranger est un roman d\'Albert Camus publié en 1942.',
                    ],
                    [
                        'question' => 'Quel auteur est particulièrement associé aux fables ?',
                        'choices' => [
                            ['choice_text' => 'Jean de La Fontaine', 'is_correct' => true],
                            ['choice_text' => 'Gustave Flaubert', 'is_correct' => false],
                            ['choice_text' => 'Marcel Proust', 'is_correct' => false],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                        ],
                        'explanation' => 'Jean de La Fontaine est célèbre pour ses Fables, souvent construites autour d\'animaux et d\'une leçon morale.',
                    ],
                    [
                        'question' => 'Quel auteur a écrit Germinal ?',
                        'choices' => [
                            ['choice_text' => 'Émile Zola', 'is_correct' => true],
                            ['choice_text' => 'Molière', 'is_correct' => false],
                            ['choice_text' => 'Albert Camus', 'is_correct' => false],
                            ['choice_text' => 'Michel de Montaigne', 'is_correct' => false],
                        ],
                        'explanation' => 'Germinal est un roman d\'Émile Zola qui traite notamment du monde ouvrier et des conditions de travail dans les mines.',
                    ],
                    [
                        'question' => 'Quel auteur est associé à Du côté de chez Swann ?',
                        'choices' => [
                            ['choice_text' => 'Marcel Proust', 'is_correct' => true],
                            ['choice_text' => 'Jean de La Fontaine', 'is_correct' => false],
                            ['choice_text' => 'Molière', 'is_correct' => false],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                        ],
                        'explanation' => 'Du côté de chez Swann constitue le premier volume de la Recherche du temps perdu de Marcel Proust.',
                    ],
                    [
                        'question' => 'Quel auteur est associé à Les Trois Mousquetaires ?',
                        'choices' => [
                            ['choice_text' => 'Alexandre Dumas', 'is_correct' => true],
                            ['choice_text' => 'Albert Camus', 'is_correct' => false],
                            ['choice_text' => 'Gustave Flaubert', 'is_correct' => false],
                            ['choice_text' => 'Jean Racine', 'is_correct' => false],
                        ],
                        'explanation' => 'Les Trois Mousquetaires est un célèbre roman d\'Alexandre Dumas.',
                    ],
                    [
                        'question' => 'Quel auteur a écrit Cyrano de Bergerac ?',
                        'choices' => [
                            ['choice_text' => 'Edmond Rostand', 'is_correct' => true],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                            ['choice_text' => 'Molière', 'is_correct' => false],
                            ['choice_text' => 'Paul Verlaine', 'is_correct' => false],
                        ],
                        'explanation' => 'Cyrano de Bergerac est une pièce d\'Edmond Rostand, créée à la fin du XIXe siècle.',
                    ],
                    [
                        'question' => 'Quelle œuvre est associée à Michel de Montaigne ?',
                        'choices' => [
                            ['choice_text' => 'Les Essais', 'is_correct' => true],
                            ['choice_text' => 'Germinal', 'is_correct' => false],
                            ['choice_text' => 'Les Misérables', 'is_correct' => false],
                            ['choice_text' => 'L\'Étranger', 'is_correct' => false],
                        ],
                        'explanation' => 'Montaigne a consacré les Essais à des réflexions personnelles et philosophiques sur l\'être humain et la société.',
                    ],
                    [
                        'question' => 'Quelle œuvre appartient à Molière ?',
                        'choices' => [
                            ['choice_text' => 'Le Malade imaginaire', 'is_correct' => true],
                            ['choice_text' => 'Madame Bovary', 'is_correct' => false],
                            ['choice_text' => 'Le Rouge et le Noir', 'is_correct' => false],
                            ['choice_text' => 'L\'Assommoir', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Malade imaginaire est une célèbre comédie de Molière.',
                    ],
                ],
            ],

            [
                'title' => 'Lire une œuvre et comprendre son contexte',
                'description' => 'Relier une œuvre à son genre, à son contexte et à quelques thèmes fondamentaux sans se limiter à la mémorisation des auteurs.',
                'duration' => 26,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Les Misérables est principalement quel type d\'œuvre ?',
                        'choices' => [
                            ['choice_text' => 'Un roman', 'is_correct' => true],
                            ['choice_text' => 'Une fable', 'is_correct' => false],
                            ['choice_text' => 'Un sonnet', 'is_correct' => false],
                            ['choice_text' => 'Une simple lettre personnelle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les Misérables est un grand roman de Victor Hugo.',
                    ],
                    [
                        'question' => 'Quel thème est important dans Les Misérables ?',
                        'choices' => [
                            ['choice_text' => 'La pauvreté et la justice sociale', 'is_correct' => true],
                            ['choice_text' => 'La préparation d\'une recette', 'is_correct' => false],
                            ['choice_text' => 'La grammaire du latin', 'is_correct' => false],
                            ['choice_text' => 'La navigation spatiale', 'is_correct' => false],
                        ],
                        'explanation' => 'Le roman aborde notamment la pauvreté, la justice, la misère sociale, la rédemption et les inégalités.',
                    ],
                    [
                        'question' => 'Madame Bovary est particulièrement liée à quel courant littéraire ?',
                        'choices' => [
                            ['choice_text' => 'Le réalisme', 'is_correct' => true],
                            ['choice_text' => 'Le surréalisme', 'is_correct' => false],
                            ['choice_text' => 'La littérature courtoise', 'is_correct' => false],
                            ['choice_text' => 'Le théâtre classique', 'is_correct' => false],
                        ],
                        'explanation' => 'Madame Bovary est généralement étudié dans le cadre du réalisme, même si l’œuvre présente une grande richesse stylistique et ne se réduit pas à un seul courant.',
                    ],
                    [
                        'question' => 'Quel thème est central dans Madame Bovary ?',
                        'choices' => [
                            ['choice_text' => 'L\'écart entre les rêves d\'Emma et sa réalité', 'is_correct' => true],
                            ['choice_text' => 'Les aventures d\'un chevalier au Moyen Âge', 'is_correct' => false],
                            ['choice_text' => 'Une guerre spatiale', 'is_correct' => false],
                            ['choice_text' => 'La vie d\'un roi dans l\'Antiquité uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le roman montre notamment le décalage entre les attentes et les rêves d\'Emma Bovary et la réalité de sa vie.',
                    ],
                    [
                        'question' => 'Dans une fable de La Fontaine, pourquoi les animaux sont-ils souvent utilisés comme personnages ?',
                        'choices' => [
                            ['choice_text' => 'Ils permettent de représenter des comportements humains de manière simple et efficace', 'is_correct' => true],
                            ['choice_text' => 'Parce que les animaux existaient seulement dans les livres', 'is_correct' => false],
                            ['choice_text' => 'Pour présenter uniquement des informations scientifiques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute idée morale', 'is_correct' => false],
                        ],
                        'explanation' => 'Les animaux permettent souvent de représenter des qualités, des défauts ou des comportements humains tout en rendant la leçon accessible.',
                    ],
                    [
                        'question' => 'Quel est l\'objectif fréquent d\'une fable ?',
                        'choices' => [
                            ['choice_text' => 'Divertir tout en transmettant une leçon', 'is_correct' => true],
                            ['choice_text' => 'Présenter un document administratif', 'is_correct' => false],
                            ['choice_text' => 'Donner uniquement des chiffres', 'is_correct' => false],
                            ['choice_text' => 'Décrire une expérience scientifique détaillée', 'is_correct' => false],
                        ],
                        'explanation' => 'La fable associe souvent le plaisir du récit à une réflexion ou à une morale.',
                    ],
                    [
                        'question' => 'Le Malade imaginaire appartient principalement à quel genre ?',
                        'choices' => [
                            ['choice_text' => 'La comédie', 'is_correct' => true],
                            ['choice_text' => 'Le récit autobiographique', 'is_correct' => false],
                            ['choice_text' => 'La poésie lyrique', 'is_correct' => false],
                            ['choice_text' => 'Le conte philosophique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Malade imaginaire est une comédie de Molière qui utilise notamment le comique pour critiquer certains comportements sociaux et médicaux.',
                    ],
                    [
                        'question' => 'Quel élément du théâtre aide directement à faire avancer l\'action ?',
                        'choices' => [
                            ['choice_text' => 'Les dialogues et les actions des personnages', 'is_correct' => true],
                            ['choice_text' => 'Une liste de synonymes', 'is_correct' => false],
                            ['choice_text' => 'Des tableaux statistiques', 'is_correct' => false],
                            ['choice_text' => 'Des définitions de dictionnaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Au théâtre, les dialogues et les actions des personnages permettent de construire et de faire progresser l\'action.',
                    ],
                    [
                        'question' => 'Quel est l\'un des grands thèmes de L\'Étranger d\'Albert Camus ?',
                        'choices' => [
                            ['choice_text' => 'Le rapport de l\'individu au monde et au sens de l\'existence', 'is_correct' => true],
                            ['choice_text' => 'La vie quotidienne d\'un chevalier médiéval uniquement', 'is_correct' => false],
                            ['choice_text' => 'La préparation d\'un voyage scolaire', 'is_correct' => false],
                            ['choice_text' => 'Le fonctionnement d\'une entreprise moderne', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'Étranger est souvent étudié à travers des questions liées à l\'absurde, à l\'existence, à la société et au rapport de l\'individu au monde.',
                    ],
                    [
                        'question' => 'Pourquoi le contexte historique peut-il aider à comprendre une œuvre ?',
                        'choices' => [
                            ['choice_text' => 'Il permet de mieux comprendre certaines idées, valeurs et préoccupations présentes dans le texte', 'is_correct' => true],
                            ['choice_text' => 'Il donne automatiquement la réponse à chaque question d\'interprétation', 'is_correct' => false],
                            ['choice_text' => 'Il remplace complètement la lecture de l\'œuvre', 'is_correct' => false],
                            ['choice_text' => 'Il permet de savoir à l\'avance tout ce que pense un personnage', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contexte peut éclairer les thèmes, les valeurs et les débats présents dans une œuvre, même s\'il ne remplace pas l\'analyse du texte.',
                    ],
                    [
                        'question' => 'Pourquoi peut-on étudier une œuvre sans connaître tous les détails de la biographie de son auteur ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le texte lui-même contient des éléments à analyser', 'is_correct' => true],
                            ['choice_text' => 'Parce que la biographie est toujours inutile', 'is_correct' => false],
                            ['choice_text' => 'Parce que les auteurs n\'ont jamais de contexte historique', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'une œuvre n\'a aucun rapport avec la langue', 'is_correct' => false],
                        ],
                        'explanation' => 'La biographie peut apporter un éclairage, mais une œuvre possède aussi son propre texte, sa structure, ses personnages et ses thèmes à analyser.',
                    ],
                    [
                        'question' => 'Quel élément peut aider à comprendre la période d\'une œuvre ?',
                        'choices' => [
                            ['choice_text' => 'Les idées, les valeurs et les références présentes dans le texte', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la longueur du livre', 'is_correct' => false],
                            ['choice_text' => 'La couleur de la couverture actuelle', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de pages d\'une édition moderne uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les idées, les valeurs, les références et le vocabulaire peuvent fournir des indices sur le contexte d\'une œuvre.',
                    ],
                ],
            ],

            [
                'title' => 'Révision de littérature française',
                'description' => 'Réviser les notions essentielles de littérature française : genres, périodes, auteurs, œuvres et thèmes.',
                'duration' => 28,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel auteur appartient au XVIIe siècle ?',
                        'choices' => [
                            ['choice_text' => 'Molière', 'is_correct' => true],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                            ['choice_text' => 'Albert Camus', 'is_correct' => false],
                            ['choice_text' => 'Marcel Proust', 'is_correct' => false],
                        ],
                        'explanation' => 'Molière est un auteur majeur du XVIIe siècle.',
                    ],
                    [
                        'question' => 'Quel auteur appartient principalement au XIXe siècle ?',
                        'choices' => [
                            ['choice_text' => 'Victor Hugo', 'is_correct' => true],
                            ['choice_text' => 'Montaigne', 'is_correct' => false],
                            ['choice_text' => 'Molière', 'is_correct' => false],
                            ['choice_text' => 'Camus', 'is_correct' => false],
                        ],
                        'explanation' => 'Victor Hugo est l\'une des grandes figures littéraires françaises du XIXe siècle.',
                    ],
                    [
                        'question' => 'Quelle œuvre est une comédie de Molière ?',
                        'choices' => [
                            ['choice_text' => 'L\'Avare', 'is_correct' => true],
                            ['choice_text' => 'Germinal', 'is_correct' => false],
                            ['choice_text' => 'Madame Bovary', 'is_correct' => false],
                            ['choice_text' => 'Les Essais', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'Avare est une comédie célèbre de Molière.',
                    ],
                    [
                        'question' => 'Quel genre repose particulièrement sur les vers, les sonorités et les images ?',
                        'choices' => [
                            ['choice_text' => 'La poésie', 'is_correct' => true],
                            ['choice_text' => 'Le théâtre uniquement', 'is_correct' => false],
                            ['choice_text' => 'La biographie', 'is_correct' => false],
                            ['choice_text' => 'Le rapport administratif', 'is_correct' => false],
                        ],
                        'explanation' => 'La poésie travaille souvent la forme, le rythme, les sonorités et les images, même si elle peut prendre des formes très diverses.',
                    ],
                    [
                        'question' => 'Quel courant met en avant les émotions et la sensibilité individuelle ?',
                        'choices' => [
                            ['choice_text' => 'Le romantisme', 'is_correct' => true],
                            ['choice_text' => 'Le réalisme', 'is_correct' => false],
                            ['choice_text' => 'Le classicisme', 'is_correct' => false],
                            ['choice_text' => 'Le naturalisme uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le romantisme accorde une grande importance aux sentiments, à l\'imagination et à l\'expression du moi.',
                    ],
                    [
                        'question' => 'Quel courant cherche particulièrement à représenter la société et le quotidien de manière crédible ?',
                        'choices' => [
                            ['choice_text' => 'Le réalisme', 'is_correct' => true],
                            ['choice_text' => 'Le surréalisme', 'is_correct' => false],
                            ['choice_text' => 'Le romantisme uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le théâtre classique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le réalisme cherche notamment à représenter les réalités sociales et quotidiennes de manière crédible.',
                    ],
                    [
                        'question' => 'Quel auteur est associé à la Renaissance et à l\'humanisme ?',
                        'choices' => [
                            ['choice_text' => 'Michel de Montaigne', 'is_correct' => true],
                            ['choice_text' => 'Émile Zola', 'is_correct' => false],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                            ['choice_text' => 'Albert Camus', 'is_correct' => false],
                        ],
                        'explanation' => 'Montaigne est une grande figure de la Renaissance française et de l\'humanisme.',
                    ],
                    [
                        'question' => 'Quelle œuvre est associée à Émile Zola ?',
                        'choices' => [
                            ['choice_text' => 'Germinal', 'is_correct' => true],
                            ['choice_text' => 'L\'Avare', 'is_correct' => false],
                            ['choice_text' => 'Les Misérables', 'is_correct' => false],
                            ['choice_text' => 'Le Petit Prince', 'is_correct' => false],
                        ],
                        'explanation' => 'Germinal est un roman majeur d\'Émile Zola.',
                    ],
                    [
                        'question' => 'Quel est le principal intérêt d\'identifier le genre d\'une œuvre ?',
                        'choices' => [
                            ['choice_text' => 'Cela aide à comprendre sa forme, ses attentes et ses caractéristiques', 'is_correct' => true],
                            ['choice_text' => 'Cela permet de connaître automatiquement toute l\'histoire', 'is_correct' => false],
                            ['choice_text' => 'Cela évite de lire le texte', 'is_correct' => false],
                            ['choice_text' => 'Cela permet de savoir quelle est la seule interprétation possible', 'is_correct' => false],
                        ],
                        'explanation' => 'Identifier le genre donne des repères pour comprendre la structure, les conventions et les objectifs du texte.',
                    ],
                    [
                        'question' => 'Pourquoi les thèmes sont-ils importants dans l\'étude d\'une œuvre ?',
                        'choices' => [
                            ['choice_text' => 'Ils permettent d\'identifier les grandes idées et préoccupations du texte', 'is_correct' => true],
                            ['choice_text' => 'Ils remplacent toujours l\'analyse du style', 'is_correct' => false],
                            ['choice_text' => 'Ils servent uniquement à classer les livres par longueur', 'is_correct' => false],
                            ['choice_text' => 'Ils donnent automatiquement l\'opinion personnelle du lecteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les thèmes permettent de repérer les grandes questions et idées développées dans une œuvre.',
                    ],
                    [
                        'question' => 'Quel élément permet de mieux situer une œuvre dans son époque ?',
                        'choices' => [
                            ['choice_text' => 'Son contexte historique et culturel', 'is_correct' => true],
                            ['choice_text' => 'La couleur de son édition moderne', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de mots du titre uniquement', 'is_correct' => false],
                            ['choice_text' => 'La taille du livre vendu aujourd\'hui', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contexte historique et culturel aide à comprendre les références, les valeurs et les débats présents dans l\'œuvre.',
                    ],
                    [
                        'question' => 'Quel auteur est associé aux Fables ?',
                        'choices' => [
                            ['choice_text' => 'Jean de La Fontaine', 'is_correct' => true],
                            ['choice_text' => 'Alexandre Dumas', 'is_correct' => false],
                            ['choice_text' => 'Gustave Flaubert', 'is_correct' => false],
                            ['choice_text' => 'Marcel Proust', 'is_correct' => false],
                        ],
                        'explanation' => 'Jean de La Fontaine est célèbre pour ses Fables, souvent construites autour d\'animaux et d\'une morale.',
                    ],
                    [
                        'question' => 'Quel élément est essentiel pour une première découverte d\'une œuvre littéraire ?',
                        'choices' => [
                            ['choice_text' => 'Lire le texte et identifier son genre, ses personnages ou ses thèmes', 'is_correct' => true],
                            ['choice_text' => 'Mémoriser uniquement le nom de l\'auteur', 'is_correct' => false],
                            ['choice_text' => 'Apprendre uniquement la date de publication', 'is_correct' => false],
                            ['choice_text' => 'Lire uniquement le titre', 'is_correct' => false],
                        ],
                        'explanation' => 'Une première lecture doit permettre de repérer plusieurs éléments du texte, et pas seulement des informations biographiques.',
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
