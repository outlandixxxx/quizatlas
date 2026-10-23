<?php

namespace Database\Seeders;

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
                        'question' => 'Quel genre raconte une histoire avec des personnages et des événements ?',
                        'choices' => [
                            ['choice_text' => 'L’essai', 'is_correct' => false],
                            ['choice_text' => 'Le récit', 'is_correct' => true],
                            ['choice_text' => 'La poésie', 'is_correct' => false],
                            ['choice_text' => 'Le discours', 'is_correct' => false],
                        ],
                        'explanation' => 'Le récit raconte une histoire : des personnages, des événements, un début et une fin.',
                    ],
                    [
                        'question' => 'Quel genre est particulièrement associé aux vers et au travail du rythme et des images ?',
                        'choices' => [
                            ['choice_text' => 'Le roman', 'is_correct' => false],
                            ['choice_text' => 'La biographie', 'is_correct' => false],
                            ['choice_text' => 'Le reportage', 'is_correct' => false],
                            ['choice_text' => 'La poésie', 'is_correct' => true],
                        ],
                        'explanation' => 'La poésie travaille les vers, le rythme, les sonorités et les images.',
                    ],
                    [
                        'question' => 'Quel genre est écrit pour être joué devant un public ?',
                        'choices' => [
                            ['choice_text' => 'Le roman', 'is_correct' => false],
                            ['choice_text' => 'L’essai', 'is_correct' => false],
                            ['choice_text' => 'La biographie', 'is_correct' => false],
                            ['choice_text' => 'Le théâtre', 'is_correct' => true],
                        ],
                        'explanation' => 'Le théâtre est écrit pour la scène : des acteurs jouent les dialogues et les actions devant des spectateurs.',
                    ],
                    [
                        'question' => 'Quel texte raconte la vie réelle d’une personne ?',
                        'choices' => [
                            ['choice_text' => 'Une comédie', 'is_correct' => false],
                            ['choice_text' => 'Une fable', 'is_correct' => false],
                            ['choice_text' => 'Une biographie', 'is_correct' => true],
                            ['choice_text' => 'Un sonnet', 'is_correct' => false],
                        ],
                        'explanation' => 'Une biographie présente la vie d’une personne ; elle est écrite par quelqu’un d’autre.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une autobiographie ?',
                        'choices' => [
                            ['choice_text' => 'Un récit de sa propre vie écrit par soi-même', 'is_correct' => true],
                            ['choice_text' => 'Une pièce de théâtre comique', 'is_correct' => false],
                            ['choice_text' => 'Un récit historique sur une ville', 'is_correct' => false],
                            ['choice_text' => 'Une collection de poèmes écrits par plusieurs auteurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une autobiographie, l’auteur raconte sa propre vie ou une partie importante de celle-ci.',
                    ],
                    [
                        'question' => 'Combien de vers compte un sonnet ?',
                        'choices' => [
                            ['choice_text' => 'Huit', 'is_correct' => false],
                            ['choice_text' => 'Douze', 'is_correct' => false],
                            ['choice_text' => 'Quatorze', 'is_correct' => true],
                            ['choice_text' => 'Seize', 'is_correct' => false],
                        ],
                        'explanation' => 'Un sonnet est un poème de quatorze vers, souvent répartis en deux quatrains et deux tercets.',
                    ],
                    [
                        'question' => 'Une fable est une courte histoire qui sert à…',
                        'choices' => [
                            ['choice_text' => 'Expliquer le fonctionnement d’une machine', 'is_correct' => false],
                            ['choice_text' => 'Présenter des dates historiques', 'is_correct' => false],
                            ['choice_text' => 'Donner une leçon ou une morale', 'is_correct' => true],
                            ['choice_text' => 'Décrire un paysage en détail', 'is_correct' => false],
                        ],
                        'explanation' => 'La fable raconte une histoire courte, souvent avec des animaux, et se termine par une morale.',
                    ],
                    [
                        'question' => 'Quel genre utilise souvent des personnages et des situations pour provoquer le rire ?',
                        'choices' => [
                            ['choice_text' => 'La tragédie', 'is_correct' => false],
                            ['choice_text' => 'La biographie', 'is_correct' => false],
                            ['choice_text' => 'L’autobiographie', 'is_correct' => false],
                            ['choice_text' => 'La comédie', 'is_correct' => true],
                        ],
                        'explanation' => 'La comédie met en scène des situations drôles pour faire rire ou sourire.',
                    ],
                    [
                        'question' => 'Quel genre cherche souvent à provoquer la peur ou l’angoisse ?',
                        'choices' => [
                            ['choice_text' => 'Le récit d’aventures', 'is_correct' => false],
                            ['choice_text' => 'Le récit d’horreur', 'is_correct' => true],
                            ['choice_text' => 'La comédie', 'is_correct' => false],
                            ['choice_text' => 'La poésie lyrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le récit d’horreur cherche à faire peur par l’étrange, le suspense et l’angoisse.',
                    ],
                    [
                        'question' => 'Quel élément est typique d’un roman ?',
                        'choices' => [
                            ['choice_text' => 'Une longue histoire de fiction', 'is_correct' => true],
                            ['choice_text' => 'Un recueil de poèmes', 'is_correct' => false],
                            ['choice_text' => 'Un dialogue écrit pour la scène', 'is_correct' => false],
                            ['choice_text' => 'Une très courte histoire avec une morale', 'is_correct' => false],
                        ],
                        'explanation' => 'Un roman est un récit de fiction assez long, qui prend le temps de développer personnages et intrigue.',
                    ],
                    [
                        'question' => 'Quel genre est organisé en chapitres ?',
                        'choices' => [
                            ['choice_text' => 'Le roman', 'is_correct' => true],
                            ['choice_text' => 'La poésie', 'is_correct' => false],
                            ['choice_text' => 'Le théâtre', 'is_correct' => false],
                            ['choice_text' => 'Le sonnet', 'is_correct' => false],
                        ],
                        'explanation' => 'Un roman est souvent divisé en chapitres, alors qu’une pièce l’est en actes et un poème en strophes.',
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
                            ['choice_text' => 'Le XIIe siècle', 'is_correct' => false],
                            ['choice_text' => 'Le XIXe siècle', 'is_correct' => false],
                            ['choice_text' => 'Le XXIe siècle', 'is_correct' => false],
                            ['choice_text' => 'Le XVIIe siècle', 'is_correct' => true],
                        ],
                        'explanation' => 'Molière est l’un des grands auteurs français du XVIIe siècle, notamment connu pour ses comédies.',
                    ],
                    [
                        'question' => 'Victor Hugo appartient principalement à quel siècle ?',
                        'choices' => [
                            ['choice_text' => 'Le XVe siècle', 'is_correct' => false],
                            ['choice_text' => 'Le XVIIe siècle', 'is_correct' => false],
                            ['choice_text' => 'Le XXe siècle', 'is_correct' => false],
                            ['choice_text' => 'Le XIXe siècle', 'is_correct' => true],
                        ],
                        'explanation' => 'Victor Hugo est une figure majeure de la littérature française du XIXe siècle.',
                    ],
                    [
                        'question' => 'Le romantisme français est particulièrement associé à quel siècle ?',
                        'choices' => [
                            ['choice_text' => 'Le XVIIe siècle', 'is_correct' => false],
                            ['choice_text' => 'Le XIXe siècle', 'is_correct' => true],
                            ['choice_text' => 'Le XXe siècle', 'is_correct' => false],
                            ['choice_text' => 'Le XVIe siècle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le romantisme français s’épanouit au XIXe siècle, avec des auteurs comme Hugo ou Lamartine.',
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
                        'question' => 'Quel courant du XIXe siècle cherche à montrer le réel tel qu’on l’observe ?',
                        'choices' => [
                            ['choice_text' => 'Le surréalisme', 'is_correct' => false],
                            ['choice_text' => 'Le classicisme', 'is_correct' => false],
                            ['choice_text' => 'Le réalisme', 'is_correct' => true],
                            ['choice_text' => 'Le baroque', 'is_correct' => false],
                        ],
                        'explanation' => 'Le réalisme observe la vie et la société de façon détaillée et crédible.',
                    ],
                    [
                        'question' => 'André Breton est le chef de file de quel mouvement ?',
                        'choices' => [
                            ['choice_text' => 'Le classicisme', 'is_correct' => false],
                            ['choice_text' => 'Le surréalisme', 'is_correct' => true],
                            ['choice_text' => 'Le réalisme', 'is_correct' => false],
                            ['choice_text' => 'La Pléiade', 'is_correct' => false],
                        ],
                        'explanation' => 'André Breton est une figure centrale du surréalisme, mouvement qui accorde une grande place à l’imagination et à l’inconscient.',
                    ],
                    [
                        'question' => 'Quel mouvement est associé aux écrivains comme Corneille et Racine ?',
                        'choices' => [
                            ['choice_text' => 'Le surréalisme', 'is_correct' => false],
                            ['choice_text' => 'Le romantisme', 'is_correct' => false],
                            ['choice_text' => 'Le classicisme', 'is_correct' => true],
                            ['choice_text' => 'Le nouveau roman', 'is_correct' => false],
                        ],
                        'explanation' => 'Corneille et Racine sont deux grandes figures du théâtre classique du XVIIe siècle.',
                    ],
                    [
                        'question' => 'Quel courant littéraire valorise les sentiments, la nature et l’expression du moi ?',
                        'choices' => [
                            ['choice_text' => 'Le romantisme', 'is_correct' => true],
                            ['choice_text' => 'Le classicisme', 'is_correct' => false],
                            ['choice_text' => 'Le réalisme', 'is_correct' => false],
                            ['choice_text' => 'Le surréalisme', 'is_correct' => false],
                        ],
                        'explanation' => 'Le romantisme met en avant les sentiments, l’imagination, la nature et l’expression personnelle.',
                    ],
                    [
                        'question' => 'Quel grand mouvement culturel du XVIe siècle met l’homme, les langues anciennes et les savoirs au centre de nombreuses réflexions ?',
                        'choices' => [
                            ['choice_text' => 'Le naturalisme', 'is_correct' => false],
                            ['choice_text' => 'L’humanisme', 'is_correct' => true],
                            ['choice_text' => 'Le surréalisme', 'is_correct' => false],
                            ['choice_text' => 'Le romantisme', 'is_correct' => false],
                        ],
                        'explanation' => 'L’humanisme de la Renaissance valorise l’éducation, les langues anciennes et la réflexion sur l’être humain.',
                    ],
                    [
                        'question' => 'Qui est l’auteur des Essais ?',
                        'choices' => [
                            ['choice_text' => 'Émile Zola', 'is_correct' => false],
                            ['choice_text' => 'Molière', 'is_correct' => false],
                            ['choice_text' => 'Michel de Montaigne', 'is_correct' => true],
                            ['choice_text' => 'Albert Camus', 'is_correct' => false],
                        ],
                        'explanation' => 'Montaigne est l’auteur des Essais, œuvre majeure de la Renaissance française.',
                    ],
                    [
                        'question' => 'Quel auteur est associé au siècle des Lumières ?',
                        'choices' => [
                            ['choice_text' => 'Voltaire', 'is_correct' => true],
                            ['choice_text' => 'Molière', 'is_correct' => false],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                            ['choice_text' => 'Émile Zola', 'is_correct' => false],
                        ],
                        'explanation' => 'Voltaire est l’un des grands écrivains du XVIIIe siècle, celui des Lumières.',
                    ],
                    [
                        'question' => 'Quel poète du XIXe siècle a écrit Les Fleurs du mal ?',
                        'choices' => [
                            ['choice_text' => 'Paul Verlaine', 'is_correct' => false],
                            ['choice_text' => 'Arthur Rimbaud', 'is_correct' => false],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                            ['choice_text' => 'Charles Baudelaire', 'is_correct' => true],
                        ],
                        'explanation' => 'Les Fleurs du mal est le célèbre recueil de poèmes de Charles Baudelaire, publié en 1857.',
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
                        'explanation' => 'Les Misérables est un grand roman de Victor Hugo, publié en 1862.',
                    ],
                    [
                        'question' => 'Qui a écrit L’Avare, avec le personnage d’Harpagon ?',
                        'choices' => [
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                            ['choice_text' => 'Molière', 'is_correct' => true],
                            ['choice_text' => 'Gustave Flaubert', 'is_correct' => false],
                            ['choice_text' => 'Albert Camus', 'is_correct' => false],
                        ],
                        'explanation' => 'L’Avare est une comédie de Molière, célèbre pour le personnage d’Harpagon.',
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
                            ['choice_text' => 'Guy de Maupassant', 'is_correct' => false],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                            ['choice_text' => 'Jean Racine', 'is_correct' => false],
                            ['choice_text' => 'Antoine de Saint-Exupéry', 'is_correct' => true],
                        ],
                        'explanation' => 'Le Petit Prince est l’œuvre la plus connue d’Antoine de Saint-Exupéry.',
                    ],
                    [
                        'question' => 'Qui est l’auteur du roman L’Étranger ?',
                        'choices' => [
                            ['choice_text' => 'André Breton', 'is_correct' => false],
                            ['choice_text' => 'Émile Zola', 'is_correct' => false],
                            ['choice_text' => 'Albert Camus', 'is_correct' => true],
                            ['choice_text' => 'Alexandre Dumas', 'is_correct' => false],
                        ],
                        'explanation' => 'L’Étranger est un roman d’Albert Camus publié en 1942.',
                    ],
                    [
                        'question' => 'Quel auteur est particulièrement associé aux fables ?',
                        'choices' => [
                            ['choice_text' => 'Gustave Flaubert', 'is_correct' => false],
                            ['choice_text' => 'Jean de La Fontaine', 'is_correct' => true],
                            ['choice_text' => 'Marcel Proust', 'is_correct' => false],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                        ],
                        'explanation' => 'Jean de La Fontaine est célèbre pour ses Fables, souvent construites autour d’animaux et d’une leçon morale.',
                    ],
                    [
                        'question' => 'Quel auteur a écrit Germinal ?',
                        'choices' => [
                            ['choice_text' => 'Molière', 'is_correct' => false],
                            ['choice_text' => 'Albert Camus', 'is_correct' => false],
                            ['choice_text' => 'Michel de Montaigne', 'is_correct' => false],
                            ['choice_text' => 'Émile Zola', 'is_correct' => true],
                        ],
                        'explanation' => 'Germinal est un roman d’Émile Zola sur le monde ouvrier et la vie dans les mines.',
                    ],
                    [
                        'question' => 'Qui est l’auteur de Du côté de chez Swann ?',
                        'choices' => [
                            ['choice_text' => 'Jean de La Fontaine', 'is_correct' => false],
                            ['choice_text' => 'Molière', 'is_correct' => false],
                            ['choice_text' => 'Marcel Proust', 'is_correct' => true],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                        ],
                        'explanation' => 'Du côté de chez Swann est le premier volume d’À la recherche du temps perdu, de Marcel Proust.',
                    ],
                    [
                        'question' => 'Léa découvre Les Trois Mousquetaires. Qui a écrit ce roman ?',
                        'choices' => [
                            ['choice_text' => 'Albert Camus', 'is_correct' => false],
                            ['choice_text' => 'Gustave Flaubert', 'is_correct' => false],
                            ['choice_text' => 'Jean Racine', 'is_correct' => false],
                            ['choice_text' => 'Alexandre Dumas', 'is_correct' => true],
                        ],
                        'explanation' => 'Les Trois Mousquetaires est un célèbre roman d’Alexandre Dumas.',
                    ],
                    [
                        'question' => 'Quel auteur a écrit Cyrano de Bergerac ?',
                        'choices' => [
                            ['choice_text' => 'Edmond Rostand', 'is_correct' => true],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                            ['choice_text' => 'Molière', 'is_correct' => false],
                            ['choice_text' => 'Paul Verlaine', 'is_correct' => false],
                        ],
                        'explanation' => 'Cyrano de Bergerac est une pièce d’Edmond Rostand, créée à la fin du XIXe siècle.',
                    ],
                    [
                        'question' => 'Quel auteur est connu pour des nouvelles comme La Parure ?',
                        'choices' => [
                            ['choice_text' => 'Émile Zola', 'is_correct' => false],
                            ['choice_text' => 'Guy de Maupassant', 'is_correct' => true],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                            ['choice_text' => 'Marcel Proust', 'is_correct' => false],
                        ],
                        'explanation' => 'La Parure est une célèbre nouvelle de Guy de Maupassant.',
                    ],
                    [
                        'question' => 'Quelle œuvre appartient à Molière ?',
                        'choices' => [
                            ['choice_text' => 'Madame Bovary', 'is_correct' => false],
                            ['choice_text' => 'Le Rouge et le Noir', 'is_correct' => false],
                            ['choice_text' => 'Le Malade imaginaire', 'is_correct' => true],
                            ['choice_text' => 'L’Assommoir', 'is_correct' => false],
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
                        'question' => 'Le Petit Prince est surtout…',
                        'choices' => [
                            ['choice_text' => 'Une pièce de théâtre', 'is_correct' => false],
                            ['choice_text' => 'Un recueil de poèmes', 'is_correct' => false],
                            ['choice_text' => 'Un conte poétique et philosophique', 'is_correct' => true],
                            ['choice_text' => 'Un reportage', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Petit Prince est un conte poétique : il raconte une histoire simple qui fait réfléchir.',
                    ],
                    [
                        'question' => 'Quel thème est important dans Les Misérables ?',
                        'choices' => [
                            ['choice_text' => 'La pauvreté et la justice sociale', 'is_correct' => true],
                            ['choice_text' => 'Une enquête policière dans Londres', 'is_correct' => false],
                            ['choice_text' => 'Un voyage vers la Lune', 'is_correct' => false],
                            ['choice_text' => 'Les amours d’un roi médiéval', 'is_correct' => false],
                        ],
                        'explanation' => 'Le roman parle de la pauvreté, de la justice, de la misère sociale et de la rédemption.',
                    ],
                    [
                        'question' => 'Madame Bovary est particulièrement liée à quel courant littéraire ?',
                        'choices' => [
                            ['choice_text' => 'Le surréalisme', 'is_correct' => false],
                            ['choice_text' => 'La littérature courtoise', 'is_correct' => false],
                            ['choice_text' => 'Le théâtre classique', 'is_correct' => false],
                            ['choice_text' => 'Le réalisme', 'is_correct' => true],
                        ],
                        'explanation' => 'On étudie Madame Bovary comme un roman réaliste, même si son style est très riche.',
                    ],
                    [
                        'question' => 'Quel thème est central dans Madame Bovary ?',
                        'choices' => [
                            ['choice_text' => 'Les aventures d’un chevalier errant au Moyen Âge', 'is_correct' => false],
                            ['choice_text' => 'L’écart entre les rêves d’Emma et sa réalité', 'is_correct' => true],
                            ['choice_text' => 'Un tour du monde en quatre-vingts jours', 'is_correct' => false],
                            ['choice_text' => 'La vie d’un roi à la cour de Versailles', 'is_correct' => false],
                        ],
                        'explanation' => 'Le roman montre le décalage entre les rêves d’Emma Bovary et la réalité de sa vie.',
                    ],
                    [
                        'question' => 'Dans une fable de La Fontaine, quel est l’intérêt de mettre en scène des animaux ?',
                        'choices' => [
                            ['choice_text' => 'Ils servent à décrire précisément la vie des animaux', 'is_correct' => false],
                            ['choice_text' => 'Ils permettent de raconter un voyage scientifique', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent les dialogues par des cris d’animaux', 'is_correct' => false],
                            ['choice_text' => 'Ils incarnent des défauts et des qualités humains', 'is_correct' => true],
                        ],
                        'explanation' => 'Les animaux incarnent des comportements humains : la leçon de la fable devient simple à comprendre.',
                    ],
                    [
                        'question' => 'Dans une pièce de théâtre, comment appelle-t-on les grandes parties qui la divisent ?',
                        'choices' => [
                            ['choice_text' => 'Les actes', 'is_correct' => true],
                            ['choice_text' => 'Les strophes', 'is_correct' => false],
                            ['choice_text' => 'Les chapitres', 'is_correct' => false],
                            ['choice_text' => 'Les vers', 'is_correct' => false],
                        ],
                        'explanation' => 'Une pièce de théâtre est découpée en actes, eux-mêmes divisés en scènes.',
                    ],
                    [
                        'question' => 'Phèdre, de Racine, appartient à quel genre ?',
                        'choices' => [
                            ['choice_text' => 'La tragédie', 'is_correct' => true],
                            ['choice_text' => 'La comédie', 'is_correct' => false],
                            ['choice_text' => 'La fable', 'is_correct' => false],
                            ['choice_text' => 'La biographie', 'is_correct' => false],
                        ],
                        'explanation' => 'Phèdre est une tragédie classique de Racine, écrite en vers.',
                    ],
                    [
                        'question' => 'Quel élément du théâtre aide directement à faire avancer l’action ?',
                        'choices' => [
                            ['choice_text' => 'Les descriptions du narrateur', 'is_correct' => false],
                            ['choice_text' => 'Les dialogues et les actions', 'is_correct' => true],
                            ['choice_text' => 'Les notes de bas de page', 'is_correct' => false],
                            ['choice_text' => 'Les titres de chapitres', 'is_correct' => false],
                        ],
                        'explanation' => 'Au théâtre, les dialogues et les actions des personnages permettent de construire et de faire progresser l’action.',
                    ],
                    [
                        'question' => 'Quel est l’un des grands thèmes de L’Étranger d’Albert Camus ?',
                        'choices' => [
                            ['choice_text' => 'La nostalgie d’un poète romantique', 'is_correct' => false],
                            ['choice_text' => 'L’absurde de la condition humaine', 'is_correct' => true],
                            ['choice_text' => 'L’ascension sociale d’un jeune provincial', 'is_correct' => false],
                            ['choice_text' => 'Le bonheur d’une famille de campagne', 'is_correct' => false],
                        ],
                        'explanation' => 'On étudie souvent L’Étranger à travers l’absurde : l’existence, la société et le rapport de l’individu au monde.',
                    ],
                    [
                        'question' => 'En quoi connaître le contexte historique aide-t-il à lire une œuvre ?',
                        'choices' => [
                            ['choice_text' => 'Il dispense de lire le texte jusqu’au bout', 'is_correct' => false],
                            ['choice_text' => 'Il fixe l’interprétation de chaque scène', 'is_correct' => false],
                            ['choice_text' => 'Il éclaire les idées et les valeurs du texte', 'is_correct' => true],
                            ['choice_text' => 'Il révèle les pensées cachées de chaque personnage', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contexte aide à comprendre les thèmes et les débats d’une époque, mais il ne remplace pas la lecture du texte.',
                    ],
                    [
                        'question' => 'Peut-on analyser un roman sans connaître la vie de son auteur ?',
                        'choices' => [
                            ['choice_text' => 'Non, la biographie permet de se passer du texte', 'is_correct' => false],
                            ['choice_text' => 'Non, il faut d’abord apprendre la date de naissance de l’auteur', 'is_correct' => false],
                            ['choice_text' => 'Oui, car le texte lui-même offre des éléments à analyser', 'is_correct' => true],
                            ['choice_text' => 'Oui, car l’auteur n’influence pas son œuvre', 'is_correct' => false],
                        ],
                        'explanation' => 'La biographie peut aider, mais le texte a sa propre structure, ses personnages et ses thèmes à analyser.',
                    ],
                    [
                        'question' => 'Quel élément peut aider à comprendre la période d’une œuvre ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de pages d’une édition récente du livre', 'is_correct' => false],
                            ['choice_text' => 'La couleur de la couverture de l’édition actuelle', 'is_correct' => false],
                            ['choice_text' => 'Le prix du livre chez un libraire', 'is_correct' => false],
                            ['choice_text' => 'Les valeurs et les références du texte', 'is_correct' => true],
                        ],
                        'explanation' => 'Les idées, les valeurs et les références du texte donnent des indices sur son époque.',
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
                        'question' => 'Quel auteur appartient au XXe siècle ?',
                        'choices' => [
                            ['choice_text' => 'Molière', 'is_correct' => false],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                            ['choice_text' => 'Albert Camus', 'is_correct' => true],
                            ['choice_text' => 'Michel de Montaigne', 'is_correct' => false],
                        ],
                        'explanation' => 'Albert Camus a écrit au XXe siècle, par exemple L’Étranger en 1942.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on la voix qui raconte l’histoire dans un récit ?',
                        'choices' => [
                            ['choice_text' => 'Le metteur en scène', 'is_correct' => false],
                            ['choice_text' => 'Le lecteur', 'is_correct' => false],
                            ['choice_text' => 'Le narrateur', 'is_correct' => true],
                            ['choice_text' => 'L’éditeur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le narrateur est celui qui raconte l’histoire au lecteur.',
                    ],
                    [
                        'question' => 'Laquelle de ces œuvres est une pièce de théâtre ?',
                        'choices' => [
                            ['choice_text' => 'Le Cid', 'is_correct' => true],
                            ['choice_text' => 'Germinal', 'is_correct' => false],
                            ['choice_text' => 'Madame Bovary', 'is_correct' => false],
                            ['choice_text' => 'L’Étranger', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Cid est une pièce de Corneille ; les trois autres titres sont des romans.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on une ligne d’un poème ?',
                        'choices' => [
                            ['choice_text' => 'Un acte', 'is_correct' => false],
                            ['choice_text' => 'Un vers', 'is_correct' => true],
                            ['choice_text' => 'Un chapitre', 'is_correct' => false],
                            ['choice_text' => 'Une réplique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un poème est composé de vers, souvent regroupés en strophes.',
                    ],
                    [
                        'question' => 'Zola, l’auteur de Germinal, est rattaché à quel courant proche du réalisme ?',
                        'choices' => [
                            ['choice_text' => 'Le romantisme', 'is_correct' => false],
                            ['choice_text' => 'Le classicisme', 'is_correct' => false],
                            ['choice_text' => 'Le naturalisme', 'is_correct' => true],
                            ['choice_text' => 'Le surréalisme', 'is_correct' => false],
                        ],
                        'explanation' => 'Zola est le grand nom du naturalisme, qui observe la société avec une méthode presque scientifique.',
                    ],
                    [
                        'question' => 'Quelle est la différence entre un roman et une nouvelle ?',
                        'choices' => [
                            ['choice_text' => 'La nouvelle est écrite en vers', 'is_correct' => false],
                            ['choice_text' => 'La nouvelle est écrite pour la scène', 'is_correct' => false],
                            ['choice_text' => 'La nouvelle raconte la vie d’une personne réelle', 'is_correct' => false],
                            ['choice_text' => 'La nouvelle est un récit plus court', 'is_correct' => true],
                        ],
                        'explanation' => 'Une nouvelle raconte une histoire brève, alors qu’un roman est plus long.',
                    ],
                    [
                        'question' => 'Quel auteur de la Renaissance a écrit Gargantua ?',
                        'choices' => [
                            ['choice_text' => 'François Rabelais', 'is_correct' => true],
                            ['choice_text' => 'Molière', 'is_correct' => false],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                            ['choice_text' => 'Jean de La Fontaine', 'is_correct' => false],
                        ],
                        'explanation' => 'Gargantua est un roman de François Rabelais, écrivain humaniste du XVIe siècle.',
                    ],
                    [
                        'question' => 'Quelle œuvre appartient à Alexandre Dumas ?',
                        'choices' => [
                            ['choice_text' => 'Madame Bovary', 'is_correct' => false],
                            ['choice_text' => 'Germinal', 'is_correct' => false],
                            ['choice_text' => 'L’Avare', 'is_correct' => false],
                            ['choice_text' => 'Le Comte de Monte-Cristo', 'is_correct' => true],
                        ],
                        'explanation' => 'Le Comte de Monte-Cristo est un roman d’aventures d’Alexandre Dumas.',
                    ],
                    [
                        'question' => 'À quoi sert d’identifier le genre d’une œuvre ?',
                        'choices' => [
                            ['choice_text' => 'À connaître d’avance toute l’histoire du livre', 'is_correct' => false],
                            ['choice_text' => 'À éviter de lire le texte', 'is_correct' => false],
                            ['choice_text' => 'À imposer une opinion au lecteur', 'is_correct' => false],
                            ['choice_text' => 'À savoir à quoi s’attendre à la lecture', 'is_correct' => true],
                        ],
                        'explanation' => 'Le genre donne des repères sur la structure, les conventions et le but du texte.',
                    ],
                    [
                        'question' => 'À quoi servent les thèmes dans l’étude d’une œuvre ?',
                        'choices' => [
                            ['choice_text' => 'À classer les livres selon leur longueur', 'is_correct' => false],
                            ['choice_text' => 'À repérer les grandes idées du texte', 'is_correct' => true],
                            ['choice_text' => 'À remplacer l’analyse du style', 'is_correct' => false],
                            ['choice_text' => 'À deviner l’opinion personnelle du lecteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les thèmes montrent les grandes questions que l’œuvre développe.',
                    ],
                    [
                        'question' => 'Qui a écrit Le Rouge et le Noir ?',
                        'choices' => [
                            ['choice_text' => 'Stendhal', 'is_correct' => true],
                            ['choice_text' => 'Gustave Flaubert', 'is_correct' => false],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => false],
                            ['choice_text' => 'Alexandre Dumas', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Rouge et le Noir est un roman de Stendhal, publié en 1830.',
                    ],
                    [
                        'question' => 'Qui a écrit Notre-Dame de Paris ?',
                        'choices' => [
                            ['choice_text' => 'Gustave Flaubert', 'is_correct' => false],
                            ['choice_text' => 'Victor Hugo', 'is_correct' => true],
                            ['choice_text' => 'Émile Zola', 'is_correct' => false],
                            ['choice_text' => 'Alexandre Dumas', 'is_correct' => false],
                        ],
                        'explanation' => 'Notre-Dame de Paris est un roman de Victor Hugo, publié en 1831.',
                    ],
                    [
                        'question' => 'Quel élément est essentiel pour une première découverte d’une œuvre littéraire ?',
                        'choices' => [
                            ['choice_text' => 'Mémoriser le nom de l’auteur et la date de publication', 'is_correct' => false],
                            ['choice_text' => 'Lire le texte et repérer son genre ou ses thèmes', 'is_correct' => true],
                            ['choice_text' => 'Résumer le texte avant de l’avoir lu', 'is_correct' => false],
                            ['choice_text' => 'Copier le résumé trouvé sur un site', 'is_correct' => false],
                        ],
                        'explanation' => 'Une première lecture sert à repérer plusieurs éléments du texte, pas seulement des informations sur l’auteur.',
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
