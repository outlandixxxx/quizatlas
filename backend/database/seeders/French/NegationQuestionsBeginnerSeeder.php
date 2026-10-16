<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class NegationQuestionsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'negation-questions')->firstOrFail();

        $quizzes = [
            [
                'title' => 'La négation avec ne...pas',
                'description' => 'Former et reconnaître des phrases négatives simples avec « ne...pas ».',
                'duration' => 16,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Vous voulez dire que vous ne saisissez pas le sens d’une phrase. Quelle phrase est correctement négative ?',
                        'choices' => [
                            ['choice_text' => 'Je ne pas comprends.', 'is_correct' => false],
                            ['choice_text' => 'Je comprends ne pas.', 'is_correct' => false],
                            ['choice_text' => 'Je ne comprends pas.', 'is_correct' => true],
                            ['choice_text' => 'Ne je comprends pas.', 'is_correct' => false],
                        ],
                        'explanation' => 'La négation simple se construit avec « ne » avant le verbe et « pas » après le verbe.',
                    ],
                    [
                        'question' => 'Transformez « Elle regarde la télévision » en phrase négative.',
                        'choices' => [
                            ['choice_text' => 'Elle ne pas regarde la télévision.', 'is_correct' => false],
                            ['choice_text' => 'Elle regarde ne pas la télévision.', 'is_correct' => false],
                            ['choice_text' => 'Elle ne regarde pas la télévision.', 'is_correct' => true],
                            ['choice_text' => 'Elle ne regarde la pas télévision.', 'is_correct' => false],
                        ],
                        'explanation' => 'On place « ne » et « pas » autour du verbe conjugué « regarde ».',
                    ],
                    [
                        'question' => 'Nous mangeons de la viande d’habitude, mais pas aujourd’hui. Complétez : « Nous ___ mangeons ___ de viande aujourd’hui. »',
                        'choices' => [
                            ['choice_text' => 'ne / pas', 'is_correct' => true],
                            ['choice_text' => 'pas / ne', 'is_correct' => false],
                            ['choice_text' => 'n’ / pas', 'is_correct' => false],
                            ['choice_text' => 'ne / ne', 'is_correct' => false],
                        ],
                        'explanation' => 'La négation simple se fait avec « ne » avant le verbe et « pas » après : « Nous ne mangeons pas de viande. »',
                    ],
                    [
                        'question' => 'Demain, tu es en congé. Quelle phrase l’exprime ?',
                        'choices' => [
                            ['choice_text' => 'Tu ne travailles pas demain.', 'is_correct' => true],
                            ['choice_text' => 'Tu pas ne travailles demain.', 'is_correct' => false],
                            ['choice_text' => 'Tu ne pas travailles demain.', 'is_correct' => false],
                            ['choice_text' => 'Tu ne travailles demain pas.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne » vient avant le verbe « travailles » et « pas » après celui-ci.',
                    ],
                    [
                        'question' => 'Quelle phrase est à la forme négative ?',
                        'choices' => [
                            ['choice_text' => 'Il joue au football.', 'is_correct' => false],
                            ['choice_text' => 'Il ne joue pas au football.', 'is_correct' => true],
                            ['choice_text' => 'Il joue souvent au football.', 'is_correct' => false],
                            ['choice_text' => 'Il jouera au football.', 'is_correct' => false],
                        ],
                        'explanation' => 'La présence de « ne...pas » marque ici la négation.',
                    ],
                    [
                        'question' => 'Transformez « J’ai une voiture » en phrase négative.',
                        'choices' => [
                            ['choice_text' => 'Je n’ai pas de voiture.', 'is_correct' => true],
                            ['choice_text' => 'Je ne ai pas de voiture.', 'is_correct' => false],
                            ['choice_text' => 'Je n’ai une pas voiture.', 'is_correct' => false],
                            ['choice_text' => 'Je pas n’ai de voiture.', 'is_correct' => false],
                        ],
                        'explanation' => 'Devant une voyelle, « ne » devient « n’ ». Après la négation, « une voiture » devient « de voiture ».',
                    ],
                    [
                        'question' => 'Vos voisins étrangers n’ont pas encore appris notre langue. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ils ne pas parlent français.', 'is_correct' => false],
                            ['choice_text' => 'Ils parlent ne pas français.', 'is_correct' => false],
                            ['choice_text' => 'Ils ne parlent pas français.', 'is_correct' => true],
                            ['choice_text' => 'Ils pas ne parlent français.', 'is_correct' => false],
                        ],
                        'explanation' => 'La construction correcte est « ne parlent pas » autour du verbe.',
                    ],
                    [
                        'question' => 'Complétez : « Marie ___ aime ___ le café. »',
                        'choices' => [
                            ['choice_text' => 'ne / jamais', 'is_correct' => false],
                            ['choice_text' => 'pas / n’', 'is_correct' => false],
                            ['choice_text' => 'ne / pas', 'is_correct' => false],
                            ['choice_text' => 'n’ / pas', 'is_correct' => true],
                        ],
                        'explanation' => 'Comme « aime » commence par une voyelle, « ne » devient « n’ » : « Marie n’aime pas le café. »',
                    ],
                    [
                        'question' => 'Paul est absent aujourd’hui. Quelle phrase signifie qu’il ne vient pas ?',
                        'choices' => [
                            ['choice_text' => 'Paul vient pas ne.', 'is_correct' => false],
                            ['choice_text' => 'Paul pas vient.', 'is_correct' => false],
                            ['choice_text' => 'Paul ne pas vient.', 'is_correct' => false],
                            ['choice_text' => 'Paul ne vient pas.', 'is_correct' => true],
                        ],
                        'explanation' => '« Paul ne vient pas » est la forme négative correcte de « Paul vient ».',
                    ],
                    [
                        'question' => 'Vous parlez au nom de l’équipe, qui a besoin de plus de temps. Quelle phrase est correctement négative ?',
                        'choices' => [
                            ['choice_text' => 'Nous ne pas sommes prêts.', 'is_correct' => false],
                            ['choice_text' => 'Nous ne sommes pas prêts.', 'is_correct' => true],
                            ['choice_text' => 'Nous sommes ne pas prêts.', 'is_correct' => false],
                            ['choice_text' => 'Nous pas ne sommes prêts.', 'is_correct' => false],
                        ],
                        'explanation' => 'Même avec le verbe « être », la négation simple encadre le verbe conjugué.',
                    ],
                ],
            ],
            [
                'title' => 'Jamais, plus et rien',
                'description' => 'Utiliser plusieurs formes de négation pour exprimer l’absence, l’arrêt d’une action ou une fréquence nulle.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase signifie « à aucun moment » ?',
                        'choices' => [
                            ['choice_text' => 'Je ne voyage plus en hiver.', 'is_correct' => false],
                            ['choice_text' => 'Je ne voyage jamais en hiver.', 'is_correct' => true],
                            ['choice_text' => 'Je ne voyage rien en hiver.', 'is_correct' => false],
                            ['choice_text' => 'Je voyage toujours en hiver.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne...jamais » indique qu’une action ne se produit à aucun moment dans le contexte.',
                    ],
                    [
                        'question' => 'Zakaria déteste le poisson : à aucun moment il n’en mange. Complétez : « Il ne mange ___ de poisson. »',
                        'choices' => [
                            ['choice_text' => 'plus', 'is_correct' => false],
                            ['choice_text' => 'rien', 'is_correct' => false],
                            ['choice_text' => 'jamais', 'is_correct' => true],
                            ['choice_text' => 'personne', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne...jamais » exprime qu’une action n’a lieu à aucun moment.',
                    ],
                    [
                        'question' => 'Quelle phrase indique qu’une habitude a cessé ?',
                        'choices' => [
                            ['choice_text' => 'Je ne cours jamais le matin.', 'is_correct' => false],
                            ['choice_text' => 'Je ne cours pas le matin.', 'is_correct' => false],
                            ['choice_text' => 'Je cours encore le matin.', 'is_correct' => false],
                            ['choice_text' => 'Je ne cours plus le matin.', 'is_correct' => true],
                        ],
                        'explanation' => '« Ne...plus » indique qu’une situation ou une action qui existait auparavant a cessé.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « rien » ?',
                        'choices' => [
                            ['choice_text' => 'Je ne rien vois.', 'is_correct' => false],
                            ['choice_text' => 'Je vois ne rien.', 'is_correct' => false],
                            ['choice_text' => 'Je rien ne vois.', 'is_correct' => false],
                            ['choice_text' => 'Je ne vois rien.', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec un verbe conjugué au présent, « rien » se place après le verbe : « je ne vois rien ».',
                    ],
                    [
                        'question' => 'Elle a quitté l’entreprise en juin. Complétez : « Elle ne travaille ___ ici. »',
                        'choices' => [
                            ['choice_text' => 'jamais', 'is_correct' => false],
                            ['choice_text' => 'rien', 'is_correct' => false],
                            ['choice_text' => 'plus', 'is_correct' => true],
                            ['choice_text' => 'personne', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne travaille plus ici » signifie qu’elle y travaillait auparavant mais que ce n’est plus le cas.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « aucune chose » ?',
                        'choices' => [
                            ['choice_text' => 'Je ne veux jamais.', 'is_correct' => false],
                            ['choice_text' => 'Je ne veux plus.', 'is_correct' => false],
                            ['choice_text' => 'Je ne veux rien.', 'is_correct' => true],
                            ['choice_text' => 'Je ne veux personne.', 'is_correct' => false],
                        ],
                        'explanation' => '« Rien » remplace ici une chose ou un objet : « aucune chose ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient une négation avec « jamais » ?',
                        'choices' => [
                            ['choice_text' => 'Nous ne sortons plus le lundi.', 'is_correct' => false],
                            ['choice_text' => 'Nous ne sortons jamais le lundi.', 'is_correct' => true],
                            ['choice_text' => 'Nous ne sortons rien le lundi.', 'is_correct' => false],
                            ['choice_text' => 'Nous ne sortons personne le lundi.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne...jamais » exprime une fréquence nulle.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie qu’une personne ne regarde plus la télévision ?',
                        'choices' => [
                            ['choice_text' => 'Elle ne regarde plus la télévision.', 'is_correct' => true],
                            ['choice_text' => 'Elle ne regarde jamais la télévision.', 'is_correct' => false],
                            ['choice_text' => 'Elle ne regarde rien à la télévision.', 'is_correct' => false],
                            ['choice_text' => 'Elle ne regarde personne à la télévision.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne regarde plus » indique un changement : cette action avait lieu auparavant mais a cessé.',
                    ],
                    [
                        'question' => 'Dans ce magasin, nous n’avons ___ trouvé : aucune chose ne nous a plu.',
                        'choices' => [
                            ['choice_text' => 'jamais', 'is_correct' => false],
                            ['choice_text' => 'rien', 'is_correct' => true],
                            ['choice_text' => 'plus', 'is_correct' => false],
                            ['choice_text' => 'personne', 'is_correct' => false],
                        ],
                        'explanation' => '« Rien » signifie « aucune chose » et se place entre l’auxiliaire et le participe : « nous n’avons rien trouvé ».',
                    ],
                    [
                        'question' => 'Quelle négation exprime qu’une action est arrêtée ?',
                        'choices' => [
                            ['choice_text' => 'ne...plus', 'is_correct' => true],
                            ['choice_text' => 'ne...jamais', 'is_correct' => false],
                            ['choice_text' => 'ne...rien', 'is_correct' => false],
                            ['choice_text' => 'ne...personne', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne...plus » marque l’arrêt d’une situation ou d’une action.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement construite ?',
                        'choices' => [
                            ['choice_text' => 'Il ne jamais dit rien.', 'is_correct' => false],
                            ['choice_text' => 'Il ne dit rien jamais.', 'is_correct' => false],
                            ['choice_text' => 'Il jamais ne dit rien.', 'is_correct' => false],
                            ['choice_text' => 'Il ne dit jamais rien.', 'is_correct' => true],
                        ],
                        'explanation' => 'La phrase correcte combine « ne...jamais » et « rien » : « Il ne dit jamais rien. »',
                    ],
                ],
            ],
            [
                'title' => 'Personne et aucun',
                'description' => 'Employer « personne » et « aucun » dans des phrases négatives simples.',
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quelle phrase signifie qu’aucune personne n’est venue ?',
                        'choices' => [
                            ['choice_text' => 'Personne n’est venu.', 'is_correct' => true],
                            ['choice_text' => 'Personne est ne venu.', 'is_correct' => false],
                            ['choice_text' => 'Ne personne est venu.', 'is_correct' => false],
                            ['choice_text' => 'Personne n’est pas venu.', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand « personne » est sujet, on dit « Personne n’est venu » pour indiquer l’absence totale de personnes.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « personne » après le verbe ?',
                        'choices' => [
                            ['choice_text' => 'Je ne personne connais ici.', 'is_correct' => false],
                            ['choice_text' => 'Je personne ne connais ici.', 'is_correct' => false],
                            ['choice_text' => 'Je connais ne personne ici.', 'is_correct' => false],
                            ['choice_text' => 'Je ne connais personne ici.', 'is_correct' => true],
                        ],
                        'explanation' => '« Personne » se place après le verbe dans cette construction : « ne connais personne ».',
                    ],
                    [
                        'question' => 'Complétez : « Nous n’avons ___ problème. »',
                        'choices' => [
                            ['choice_text' => 'aucun', 'is_correct' => true],
                            ['choice_text' => 'aucune', 'is_correct' => false],
                            ['choice_text' => 'personne', 'is_correct' => false],
                            ['choice_text' => 'rien', 'is_correct' => false],
                        ],
                        'explanation' => '« Problème » est masculin singulier, donc on utilise « aucun » : « Nous n’avons aucun problème. »',
                    ],
                    [
                        'question' => 'Complétez : « Elle n’a ___ idée de la réponse. »',
                        'choices' => [
                            ['choice_text' => 'aucun', 'is_correct' => false],
                            ['choice_text' => 'rien', 'is_correct' => false],
                            ['choice_text' => 'aucune', 'is_correct' => true],
                            ['choice_text' => 'personne', 'is_correct' => false],
                        ],
                        'explanation' => '« Idée » est féminin singulier, donc on choisit « aucune ».',
                    ],
                    [
                        'question' => 'Vous êtes seul dans la rue. Quelle phrase le dit correctement ?',
                        'choices' => [
                            ['choice_text' => 'Je n’ai personne vu dans la rue.', 'is_correct' => false],
                            ['choice_text' => 'Je n’ai vu personne dans la rue.', 'is_correct' => true],
                            ['choice_text' => 'Je personne n’ai vu dans la rue.', 'is_correct' => false],
                            ['choice_text' => 'Je n’ai vu ne personne dans la rue.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans cette phrase, « personne » complète le verbe « vu » et se place après le participe passé dans la négation.',
                    ],
                    [
                        'question' => 'Que signifie « aucun livre » ?',
                        'choices' => [
                            ['choice_text' => 'Plusieurs livres', 'is_correct' => false],
                            ['choice_text' => 'Pas un seul livre', 'is_correct' => true],
                            ['choice_text' => 'Un livre précis', 'is_correct' => false],
                            ['choice_text' => 'Quelques livres', 'is_correct' => false],
                        ],
                        'explanation' => '« Aucun livre » signifie qu’il n’y a pas un seul livre concerné.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie qu’aucune personne ne peut répondre ?',
                        'choices' => [
                            ['choice_text' => 'Personne peut ne répondre.', 'is_correct' => false],
                            ['choice_text' => 'Ne personne peut répondre.', 'is_correct' => false],
                            ['choice_text' => 'Personne ne peut répondre.', 'is_correct' => true],
                            ['choice_text' => 'Personne ne peut pas répondre.', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand « personne » est le sujet négatif, la construction correcte est « Personne ne peut répondre. »',
                    ],
                    [
                        'question' => 'Complétez : « Il n’y a ___ chaise libre. »',
                        'choices' => [
                            ['choice_text' => 'aucun', 'is_correct' => false],
                            ['choice_text' => 'personne', 'is_correct' => false],
                            ['choice_text' => 'rien', 'is_correct' => false],
                            ['choice_text' => 'aucune', 'is_correct' => true],
                        ],
                        'explanation' => '« Chaise » est féminin, donc on utilise « aucune » : « Il n’y a aucune chaise libre. »',
                    ],
                    [
                        'question' => '« Qui as-tu vu au cinéma ? » — « Je n’ai vu ___. »',
                        'choices' => [
                            ['choice_text' => 'rien', 'is_correct' => false],
                            ['choice_text' => 'personne', 'is_correct' => true],
                            ['choice_text' => 'pas', 'is_correct' => false],
                            ['choice_text' => 'jamais', 'is_correct' => false],
                        ],
                        'explanation' => '« Qui » demande une personne ; la réponse est « Je n’ai vu personne », avec « personne » après le participe passé.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « aucun » ?',
                        'choices' => [
                            ['choice_text' => 'Aucun étudiant est ne absent aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Aucune étudiant n’est absent aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Aucun étudiant ne est absent aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Aucun étudiant n’est absent aujourd’hui.', 'is_correct' => true],
                        ],
                        'explanation' => '« Étudiant » est masculin singulier, donc « aucun » convient. Avec le verbe, on utilise « n’est ».',
                    ],
                ],
            ],
            [
                'title' => 'Former des questions simples',
                'description' => 'Construire des questions avec l’intonation, « est-ce que » et l’inversion.',
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle question est correctement formée avec « est-ce que » ?',
                        'choices' => [
                            ['choice_text' => 'Est-ce que tu travailles demain ?', 'is_correct' => true],
                            ['choice_text' => 'Est-ce que tu travailles-tu demain ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que travailles-tu demain ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que tu travaillez demain ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure correcte est « Est-ce que + sujet + verbe + complément ? »',
                    ],
                    [
                        'question' => 'Entre amis, à l’oral, il suffit de monter la voix à la fin. Quelle question est possible ?',
                        'choices' => [
                            ['choice_text' => 'Tu viens ce soir ?', 'is_correct' => true],
                            ['choice_text' => 'Viens tu ce soir ?', 'is_correct' => false],
                            ['choice_text' => 'Tu viens-ce soir ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que viens tu ce soir ?', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’oral, l’intonation permet de transformer une phrase affirmative en question : « Tu viens ce soir ? »',
                    ],
                    [
                        'question' => 'Quelle question utilise correctement l’inversion ?',
                        'choices' => [
                            ['choice_text' => 'Aime-tu le chocolat ?', 'is_correct' => false],
                            ['choice_text' => 'Aimes-tu le chocolat ?', 'is_correct' => true],
                            ['choice_text' => 'Aimes le chocolat-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Tu aimes-le chocolat ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec l’inversion, le pronom sujet se place après le verbe : « Aimes-tu... ? »',
                    ],
                    [
                        'question' => 'Quelle question demande le lieu ?',
                        'choices' => [
                            ['choice_text' => 'Quand habites-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Où habites-tu ?', 'is_correct' => true],
                            ['choice_text' => 'Pourquoi habites-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Combien habites-tu ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Où » sert à demander un lieu.',
                    ],
                    [
                        'question' => 'Quelle question demande le moment ?',
                        'choices' => [
                            ['choice_text' => 'Où commence le film ?', 'is_correct' => false],
                            ['choice_text' => 'Qui commence le film ?', 'is_correct' => false],
                            ['choice_text' => 'Quand commence le film ?', 'is_correct' => true],
                            ['choice_text' => 'Pourquoi commence le film ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Quand » demande à quel moment un événement se produit.',
                    ],
                    [
                        'question' => 'Quelle question demande une raison ?',
                        'choices' => [
                            ['choice_text' => 'Où es-tu fatigué ?', 'is_correct' => false],
                            ['choice_text' => 'Quand es-tu fatigué ?', 'is_correct' => false],
                            ['choice_text' => 'Qui es-tu fatigué ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi es-tu fatigué ?', 'is_correct' => true],
                        ],
                        'explanation' => '« Pourquoi » sert à demander la cause ou la raison.',
                    ],
                    [
                        'question' => 'Complétez : « ___ tu habites à Casablanca ? »',
                        'choices' => [
                            ['choice_text' => 'Où est-ce', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que', 'is_correct' => true],
                            ['choice_text' => 'Quand est-ce', 'is_correct' => false],
                            ['choice_text' => 'Qu’est-ce que', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase correcte est « Est-ce que tu habites à Casablanca ? »',
                    ],
                    [
                        'question' => 'Quelle question demande une personne ?',
                        'choices' => [
                            ['choice_text' => 'Où est ton professeur ?', 'is_correct' => false],
                            ['choice_text' => 'Quand est ton professeur ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi est ton professeur ?', 'is_correct' => false],
                            ['choice_text' => 'Qui est ton professeur ?', 'is_correct' => true],
                        ],
                        'explanation' => '« Qui » sert à demander l’identité d’une personne.',
                    ],
                    [
                        'question' => 'Quelle question demande une quantité ?',
                        'choices' => [
                            ['choice_text' => 'Quand coûte cette veste ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi coûte cette veste ?', 'is_correct' => false],
                            ['choice_text' => 'Où coûte cette veste ?', 'is_correct' => false],
                            ['choice_text' => 'Combien coûte cette veste ?', 'is_correct' => true],
                        ],
                        'explanation' => '« Combien » permet ici de demander le prix, donc une quantité monétaire.',
                    ],
                    [
                        'question' => 'Un ami vous salue. Quelle question de politesse est bien formée ?',
                        'choices' => [
                            ['choice_text' => 'Comment vas-tu ?', 'is_correct' => true],
                            ['choice_text' => 'Comment va-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Comment vas tu ?', 'is_correct' => false],
                            ['choice_text' => 'Comment est-ce que vas-tu ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Comment vas-tu ? » est une question correcte avec inversion.',
                    ],
                    [
                        'question' => 'Quelle question correspond à la réponse « À 8 heures » ?',
                        'choices' => [
                            ['choice_text' => 'Où commence le cours ?', 'is_correct' => false],
                            ['choice_text' => 'Qui commence le cours ?', 'is_correct' => false],
                            ['choice_text' => 'À quelle heure commence le cours ?', 'is_correct' => true],
                            ['choice_text' => 'Pourquoi commence le cours ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse « À 8 heures » donne un moment précis, donc la question porte sur l’heure.',
                    ],
                ],
            ],
            [
                'title' => 'Les mots interrogatifs',
                'description' => 'Choisir le bon mot interrogatif selon l’information recherchée.',
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel mot interrogatif demande une personne ?',
                        'choices' => [
                            ['choice_text' => 'Qui', 'is_correct' => true],
                            ['choice_text' => 'Où', 'is_correct' => false],
                            ['choice_text' => 'Quand', 'is_correct' => false],
                            ['choice_text' => 'Comment', 'is_correct' => false],
                        ],
                        'explanation' => '« Qui » est utilisé pour demander l’identité d’une personne.',
                    ],
                    [
                        'question' => '« ___ est ton numéro de téléphone ? » Quel mot convient ?',
                        'choices' => [
                            ['choice_text' => 'Quelle', 'is_correct' => false],
                            ['choice_text' => 'Quels', 'is_correct' => false],
                            ['choice_text' => 'Quel', 'is_correct' => true],
                            ['choice_text' => 'Quelles', 'is_correct' => false],
                        ],
                        'explanation' => '« Numéro » est masculin singulier : on dit « Quel est ton numéro ? ».',
                    ],
                    [
                        'question' => '« ___ fais-tu dans la vie ? » Quel mot convient pour demander le métier ?',
                        'choices' => [
                            ['choice_text' => 'Que', 'is_correct' => true],
                            ['choice_text' => 'Qui', 'is_correct' => false],
                            ['choice_text' => 'Où', 'is_correct' => false],
                            ['choice_text' => 'Combien', 'is_correct' => false],
                        ],
                        'explanation' => '« Que fais-tu ? » demande ce que la personne fait, c’est-à-dire son activité.',
                    ],
                    [
                        'question' => 'Vous voulez savoir à quelle date Inès passe son examen. Quel mot interrogatif employez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Quand', 'is_correct' => true],
                            ['choice_text' => 'Qui', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi', 'is_correct' => false],
                            ['choice_text' => 'Comment', 'is_correct' => false],
                        ],
                        'explanation' => 'On interroge sur la date, donc sur le moment : « quand ».',
                    ],
                    [
                        'question' => 'Vous demandez à un ami de quelle façon il rentre chez lui : « ___ rentres-tu ? »',
                        'choices' => [
                            ['choice_text' => 'Quand', 'is_correct' => false],
                            ['choice_text' => 'Qui', 'is_correct' => false],
                            ['choice_text' => 'Combien', 'is_correct' => false],
                            ['choice_text' => 'Comment', 'is_correct' => true],
                        ],
                        'explanation' => '« Comment » interroge sur la manière : en bus, à pied, en voiture.',
                    ],
                    [
                        'question' => 'Quel mot convient : « ___ coûte ce téléphone ? »',
                        'choices' => [
                            ['choice_text' => 'Pourquoi', 'is_correct' => false],
                            ['choice_text' => 'Combien', 'is_correct' => true],
                            ['choice_text' => 'Quand', 'is_correct' => false],
                            ['choice_text' => 'Qui', 'is_correct' => false],
                        ],
                        'explanation' => '« Combien coûte ce téléphone ? » demande son prix.',
                    ],
                    [
                        'question' => 'Quelle question correspond à la réponse « Au travail » ?',
                        'choices' => [
                            ['choice_text' => 'Quand es-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi es-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Comment es-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Où es-tu ?', 'is_correct' => true],
                        ],
                        'explanation' => '« Au travail » indique un lieu, donc la question appropriée commence par « où ».',
                    ],
                    [
                        'question' => 'Quelle question correspond à la réponse « Parce qu’il pleut » ?',
                        'choices' => [
                            ['choice_text' => 'Où restes-tu ici ?', 'is_correct' => false],
                            ['choice_text' => 'Quand restes-tu ici ?', 'is_correct' => false],
                            ['choice_text' => 'Comment restes-tu ici ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi restes-tu ici ?', 'is_correct' => true],
                        ],
                        'explanation' => 'La réponse « Parce qu’il pleut » donne une raison, donc on utilise « pourquoi ».',
                    ],
                    [
                        'question' => 'Quelle question correspond à la réponse « Avec ma sœur » ?',
                        'choices' => [
                            ['choice_text' => 'Où vas-tu au cinéma ?', 'is_correct' => false],
                            ['choice_text' => 'Avec qui vas-tu au cinéma ?', 'is_correct' => true],
                            ['choice_text' => 'Quand vas-tu au cinéma ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi vas-tu au cinéma ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Avec ma sœur » répond à une question portant sur la personne qui accompagne le locuteur.',
                    ],
                    [
                        'question' => 'Quelle question correspond à la réponse « Demain matin » ?',
                        'choices' => [
                            ['choice_text' => 'Où pars-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Comment pars-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Quand pars-tu ?', 'is_correct' => true],
                            ['choice_text' => 'Pourquoi pars-tu ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Demain matin » indique un moment, donc « quand » est le mot interrogatif approprié.',
                    ],
                    [
                        'question' => 'Quelle question correspond à la réponse « Très bien » ?',
                        'choices' => [
                            ['choice_text' => 'Où vas-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Quand vas-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Comment vas-tu ?', 'is_correct' => true],
                            ['choice_text' => 'Pourquoi vas-tu ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Très bien » répond à une question sur l’état ou la manière, formulée ici avec « comment ».',
                    ],
                ],
            ],
            [
                'title' => 'Mélange : négation et questions',
                'description' => 'Réviser les principales structures de négation et de question dans des situations courantes.',
                'duration' => 26,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Vous demandez à un camarade s’il n’a pas compris la question. Quelle phrase est bien construite ?',
                        'choices' => [
                            ['choice_text' => 'Est-ce que tu ne comprends pas la question ?', 'is_correct' => true],
                            ['choice_text' => 'Est-ce que tu ne comprends la question pas ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que tu ne pas comprends la question ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que ne tu comprends pas la question ?', 'is_correct' => false],
                        ],
                        'explanation' => 'On peut combiner « est-ce que » et la négation : « Est-ce que tu ne comprends pas la question ? »',
                    ],
                    [
                        'question' => 'Quelle question est correcte à la forme négative ?',
                        'choices' => [
                            ['choice_text' => 'Pourquoi ne pas viens-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi ne viens pas tu ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi viens-tu ne pas ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi ne viens-tu pas ?', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec l’inversion et la négation, « ne » vient avant le verbe et « pas » après le verbe.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie qu’une personne ne vient jamais ?',
                        'choices' => [
                            ['choice_text' => 'Elle ne vient plus.', 'is_correct' => false],
                            ['choice_text' => 'Elle ne vient pas jamais.', 'is_correct' => false],
                            ['choice_text' => 'Elle jamais ne vient pas.', 'is_correct' => false],
                            ['choice_text' => 'Elle ne vient jamais.', 'is_correct' => true],
                        ],
                        'explanation' => '« Ne...jamais » signifie que l’action ne se produit à aucun moment.',
                    ],
                    [
                        'question' => 'À la boulangerie, vous demandez s’il reste du pain. Quelle question est bien formée ?',
                        'choices' => [
                            ['choice_text' => 'Est-ce que avez vous encore du pain ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que vous avez encore du pain ?', 'is_correct' => true],
                            ['choice_text' => 'Est-ce vous avez encore du pain ?', 'is_correct' => false],
                            ['choice_text' => 'Vous est-ce que avez encore du pain ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La construction « Est-ce que + sujet + verbe » est correcte ici.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement négative ?',
                        'choices' => [
                            ['choice_text' => 'Je ne rien ai compris.', 'is_correct' => false],
                            ['choice_text' => 'Je n’ai compris rien.', 'is_correct' => false],
                            ['choice_text' => 'Je n’ai rien compris.', 'is_correct' => true],
                            ['choice_text' => 'Je rien n’ai compris.', 'is_correct' => false],
                        ],
                        'explanation' => 'Au passé composé, « rien » se place entre l’auxiliaire et le participe passé : « je n’ai rien compris ».',
                    ],
                    [
                        'question' => 'Votre ami refuse de venir à la fête. Comment lui demandez-vous la raison ?',
                        'choices' => [
                            ['choice_text' => 'Pourquoi ne veux-tu pas venir ?', 'is_correct' => true],
                            ['choice_text' => 'Pourquoi ne pas veux-tu venir ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi ne veux pas tu venir ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi ne veux-tu venir pas ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme correcte combine « pourquoi », l’inversion et « ne...pas » autour du verbe.',
                    ],
                    [
                        'question' => 'Quelle question est correcte pour demander le nombre de frères ?',
                        'choices' => [
                            ['choice_text' => 'Combien des frères as-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Combien de frères as-tu ?', 'is_correct' => true],
                            ['choice_text' => 'Combien de frère as-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Combien frères as-tu ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure correcte est « combien de + nom » : « Combien de frères as-tu ? »',
                    ],
                    [
                        'question' => 'Le frigo est vide. Quelle phrase le dit correctement ?',
                        'choices' => [
                            ['choice_text' => 'Il n’y a pas rien dans le frigo.', 'is_correct' => false],
                            ['choice_text' => 'Il ne y a rien dans le frigo.', 'is_correct' => false],
                            ['choice_text' => 'Il n’y a rien dans le frigo.', 'is_correct' => true],
                            ['choice_text' => 'Il n’y a rien pas dans le frigo.', 'is_correct' => false],
                        ],
                        'explanation' => '« Il n’y a rien » : « ne » devient « n’ » devant « y », et « rien » suit le verbe.',
                    ],
                    [
                        'question' => '« Qui a pris mon stylo ? » — « ___ n’a pris ton stylo. »',
                        'choices' => [
                            ['choice_text' => 'Rien', 'is_correct' => false],
                            ['choice_text' => 'Personne', 'is_correct' => true],
                            ['choice_text' => 'Jamais', 'is_correct' => false],
                            ['choice_text' => 'Pas', 'is_correct' => false],
                        ],
                        'explanation' => '« Personne » est le sujet : « Personne n’a pris ton stylo ».',
                    ],
                    [
                        'question' => 'Vous demandez le lieu de travail d’un groupe de personnes. Quelle question convient ?',
                        'choices' => [
                            ['choice_text' => 'Où est-ce que vous travaillez ?', 'is_correct' => true],
                            ['choice_text' => 'Où est-ce vous travaillez ?', 'is_correct' => false],
                            ['choice_text' => 'Où est-ce que vous travaillez-vous ?', 'is_correct' => false],
                            ['choice_text' => 'Où vous travaillez est-ce que ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure correcte est « mot interrogatif + est-ce que + sujet + verbe ».',
                    ],
                    [
                        'question' => 'Quelle question avec inversion est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Vous parlez-vous français ?', 'is_correct' => false],
                            ['choice_text' => 'Parlez français-vous ?', 'is_correct' => false],
                            ['choice_text' => 'Parle-vous français ?', 'is_correct' => false],
                            ['choice_text' => 'Parlez-vous français ?', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec l’inversion, le verbe précède le pronom, avec un trait d’union : « Parlez-vous… ? ».',
                    ],
                    [
                        'question' => 'Quelle question correspond à la réponse « Non, je ne peux pas » ?',
                        'choices' => [
                            ['choice_text' => 'Où peux-tu venir avec nous ?', 'is_correct' => false],
                            ['choice_text' => 'Quand peux-tu venir avec nous ?', 'is_correct' => false],
                            ['choice_text' => 'Peux-tu venir avec nous ?', 'is_correct' => true],
                            ['choice_text' => 'Pourquoi peux-tu venir avec nous ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse « Non, je ne peux pas » répond à une question sur la possibilité : « Peux-tu... ? »',
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
