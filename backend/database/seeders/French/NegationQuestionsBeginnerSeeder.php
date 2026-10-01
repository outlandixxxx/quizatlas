<?php

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
                        'question' => 'Quelle phrase est correctement négative ?',
                        'choices' => [
                            ['choice_text' => 'Je ne comprends pas.', 'is_correct' => true],
                            ['choice_text' => 'Je ne pas comprends.', 'is_correct' => false],
                            ['choice_text' => 'Je comprends ne pas.', 'is_correct' => false],
                            ['choice_text' => 'Je pas comprends ne.', 'is_correct' => false],
                        ],
                        'explanation' => 'La négation simple se construit avec « ne » avant le verbe et « pas » après le verbe.',
                    ],
                    [
                        'question' => 'Transformez « Elle regarde la télévision » en phrase négative.',
                        'choices' => [
                            ['choice_text' => 'Elle ne regarde pas la télévision.', 'is_correct' => true],
                            ['choice_text' => 'Elle ne pas regarde la télévision.', 'is_correct' => false],
                            ['choice_text' => 'Elle regarde ne pas la télévision.', 'is_correct' => false],
                            ['choice_text' => 'Elle pas ne regarde la télévision.', 'is_correct' => false],
                        ],
                        'explanation' => 'On place « ne » et « pas » autour du verbe conjugué « regarde ».',
                    ],
                    [
                        'question' => 'Complétez : « Nous ___ mangeons ___ de viande aujourd’hui. »',
                        'choices' => [
                            ['choice_text' => 'ne / pas', 'is_correct' => true],
                            ['choice_text' => 'pas / ne', 'is_correct' => false],
                            ['choice_text' => 'ne / jamais', 'is_correct' => false],
                            ['choice_text' => 'jamais / pas', 'is_correct' => false],
                        ],
                        'explanation' => 'La négation de base utilise « ne...pas » : « Nous ne mangeons pas de viande aujourd’hui. »',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Tu ne travailles pas demain.', 'is_correct' => true],
                            ['choice_text' => 'Tu pas ne travailles demain.', 'is_correct' => false],
                            ['choice_text' => 'Tu ne pas travailles demain.', 'is_correct' => false],
                            ['choice_text' => 'Tu travailles ne pas demain.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne » vient avant le verbe « travailles » et « pas » après celui-ci.',
                    ],
                    [
                        'question' => 'Quelle phrase est à la forme négative ?',
                        'choices' => [
                            ['choice_text' => 'Il ne joue pas au football.', 'is_correct' => true],
                            ['choice_text' => 'Il joue au football.', 'is_correct' => false],
                            ['choice_text' => 'Il joue souvent au football.', 'is_correct' => false],
                            ['choice_text' => 'Il jouera au football.', 'is_correct' => false],
                        ],
                        'explanation' => 'La présence de « ne...pas » marque ici la négation.',
                    ],
                    [
                        'question' => 'Transformez « J’ai une voiture » en phrase négative.',
                        'choices' => [
                            ['choice_text' => 'Je n’ai pas de voiture.', 'is_correct' => true],
                            ['choice_text' => 'Je ne ai pas une voiture.', 'is_correct' => false],
                            ['choice_text' => 'Je n’ai une pas voiture.', 'is_correct' => false],
                            ['choice_text' => 'Je pas n’ai une voiture.', 'is_correct' => false],
                        ],
                        'explanation' => 'Devant une voyelle, « ne » devient « n’ ». Après la négation, « une voiture » devient généralement « de voiture ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement construite ?',
                        'choices' => [
                            ['choice_text' => 'Ils ne parlent pas français.', 'is_correct' => true],
                            ['choice_text' => 'Ils ne pas parlent français.', 'is_correct' => false],
                            ['choice_text' => 'Ils parlent ne pas français.', 'is_correct' => false],
                            ['choice_text' => 'Ils pas ne parlent français.', 'is_correct' => false],
                        ],
                        'explanation' => 'La construction correcte est « ne parlent pas » autour du verbe.',
                    ],
                    [
                        'question' => 'Complétez : « Marie ___ aime ___ le café. »',
                        'choices' => [
                            ['choice_text' => 'n’ / pas', 'is_correct' => true],
                            ['choice_text' => 'ne / jamais', 'is_correct' => false],
                            ['choice_text' => 'pas / n’', 'is_correct' => false],
                            ['choice_text' => 'n’ / plus', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme « aime » commence par une voyelle, « ne » devient « n’ » : « Marie n’aime pas le café. »',
                    ],
                    [
                        'question' => 'Quelle phrase signifie que Paul ne fait pas l’action de venir ?',
                        'choices' => [
                            ['choice_text' => 'Paul ne vient pas.', 'is_correct' => true],
                            ['choice_text' => 'Paul vient pas ne.', 'is_correct' => false],
                            ['choice_text' => 'Paul pas vient.', 'is_correct' => false],
                            ['choice_text' => 'Paul ne pas vient.', 'is_correct' => false],
                        ],
                        'explanation' => '« Paul ne vient pas » est la forme négative correcte de « Paul vient ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement négative ?',
                        'choices' => [
                            ['choice_text' => 'Nous ne sommes pas prêts.', 'is_correct' => true],
                            ['choice_text' => 'Nous ne pas sommes prêts.', 'is_correct' => false],
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
                            ['choice_text' => 'Je ne voyage jamais en hiver.', 'is_correct' => true],
                            ['choice_text' => 'Je ne voyage plus en hiver.', 'is_correct' => false],
                            ['choice_text' => 'Je ne voyage pas en hiver.', 'is_correct' => false],
                            ['choice_text' => 'Je voyage toujours en hiver.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne...jamais » indique qu’une action ne se produit à aucun moment dans le contexte.',
                    ],
                    [
                        'question' => 'Complétez : « Il ne mange ___ de poisson. »',
                        'choices' => [
                            ['choice_text' => 'jamais', 'is_correct' => true],
                            ['choice_text' => 'plus', 'is_correct' => false],
                            ['choice_text' => 'rien', 'is_correct' => false],
                            ['choice_text' => 'personne', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne mange jamais » signifie qu’il ne mange du poisson à aucun moment ou en aucune occasion.',
                    ],
                    [
                        'question' => 'Quelle phrase indique qu’une habitude a cessé ?',
                        'choices' => [
                            ['choice_text' => 'Je ne cours plus le matin.', 'is_correct' => true],
                            ['choice_text' => 'Je ne cours jamais le matin.', 'is_correct' => false],
                            ['choice_text' => 'Je ne cours pas le matin.', 'is_correct' => false],
                            ['choice_text' => 'Je cours encore le matin.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne...plus » indique qu’une situation ou une action qui existait auparavant a cessé.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « rien » ?',
                        'choices' => [
                            ['choice_text' => 'Je ne vois rien.', 'is_correct' => true],
                            ['choice_text' => 'Je ne rien vois.', 'is_correct' => false],
                            ['choice_text' => 'Je vois ne rien.', 'is_correct' => false],
                            ['choice_text' => 'Je rien ne vois.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec un verbe conjugué, « rien » se place généralement après le verbe : « ne vois rien ».',
                    ],
                    [
                        'question' => 'Complétez : « Elle ne travaille ___ ici. »',
                        'choices' => [
                            ['choice_text' => 'plus', 'is_correct' => true],
                            ['choice_text' => 'jamais', 'is_correct' => false],
                            ['choice_text' => 'rien', 'is_correct' => false],
                            ['choice_text' => 'personne', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne travaille plus ici » signifie qu’elle y travaillait auparavant mais que ce n’est plus le cas.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « aucune chose » ?',
                        'choices' => [
                            ['choice_text' => 'Je ne veux rien.', 'is_correct' => true],
                            ['choice_text' => 'Je ne veux jamais.', 'is_correct' => false],
                            ['choice_text' => 'Je ne veux plus.', 'is_correct' => false],
                            ['choice_text' => 'Je ne veux personne.', 'is_correct' => false],
                        ],
                        'explanation' => '« Rien » remplace ici une chose ou un objet : « aucune chose ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient une négation avec « jamais » ?',
                        'choices' => [
                            ['choice_text' => 'Nous ne sortons jamais le lundi.', 'is_correct' => true],
                            ['choice_text' => 'Nous ne sortons plus le lundi.', 'is_correct' => false],
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
                        'question' => 'Complétez : « Nous n’avons ___ trouvé dans le magasin. »',
                        'choices' => [
                            ['choice_text' => 'rien', 'is_correct' => true],
                            ['choice_text' => 'jamais', 'is_correct' => false],
                            ['choice_text' => 'plus', 'is_correct' => false],
                            ['choice_text' => 'personne', 'is_correct' => false],
                        ],
                        'explanation' => '« Rien » signifie qu’aucune chose n’a été trouvée.',
                    ],
                    [
                        'question' => 'Quelle expression indique qu’une action ne se produit plus ?',
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
                            ['choice_text' => 'Il ne dit jamais rien.', 'is_correct' => true],
                            ['choice_text' => 'Il ne jamais dit rien.', 'is_correct' => false],
                            ['choice_text' => 'Il ne dit rien jamais.', 'is_correct' => false],
                            ['choice_text' => 'Il jamais ne dit rien.', 'is_correct' => false],
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
                            ['choice_text' => 'Je ne connais personne ici.', 'is_correct' => true],
                            ['choice_text' => 'Je ne personne connais ici.', 'is_correct' => false],
                            ['choice_text' => 'Je personne ne connais ici.', 'is_correct' => false],
                            ['choice_text' => 'Je connais ne personne ici.', 'is_correct' => false],
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
                            ['choice_text' => 'aucune', 'is_correct' => true],
                            ['choice_text' => 'aucun', 'is_correct' => false],
                            ['choice_text' => 'rien', 'is_correct' => false],
                            ['choice_text' => 'personne', 'is_correct' => false],
                        ],
                        'explanation' => '« Idée » est féminin singulier, donc on choisit « aucune ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Je n’ai vu personne dans la rue.', 'is_correct' => true],
                            ['choice_text' => 'Je n’ai personne vu dans la rue.', 'is_correct' => false],
                            ['choice_text' => 'Je personne n’ai vu dans la rue.', 'is_correct' => false],
                            ['choice_text' => 'Je n’ai vu ne personne dans la rue.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans cette phrase, « personne » complète le verbe « vu » et se place après le participe passé dans la négation.',
                    ],
                    [
                        'question' => 'Que signifie « aucun livre » ?',
                        'choices' => [
                            ['choice_text' => 'Pas un seul livre', 'is_correct' => true],
                            ['choice_text' => 'Plusieurs livres', 'is_correct' => false],
                            ['choice_text' => 'Un livre précis', 'is_correct' => false],
                            ['choice_text' => 'Tous les livres', 'is_correct' => false],
                        ],
                        'explanation' => '« Aucun livre » signifie qu’il n’y a pas un seul livre concerné.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie qu’aucune personne ne peut répondre ?',
                        'choices' => [
                            ['choice_text' => 'Personne ne peut répondre.', 'is_correct' => true],
                            ['choice_text' => 'Personne peut ne répondre.', 'is_correct' => false],
                            ['choice_text' => 'Ne personne peut répondre.', 'is_correct' => false],
                            ['choice_text' => 'Personne ne peut pas répondre.', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand « personne » est le sujet négatif, la construction correcte est « Personne ne peut répondre. »',
                    ],
                    [
                        'question' => 'Complétez : « Il n’y a ___ chaise libre. »',
                        'choices' => [
                            ['choice_text' => 'aucune', 'is_correct' => true],
                            ['choice_text' => 'aucun', 'is_correct' => false],
                            ['choice_text' => 'personne', 'is_correct' => false],
                            ['choice_text' => 'rien', 'is_correct' => false],
                        ],
                        'explanation' => '« Chaise » est féminin, donc on utilise « aucune » : « Il n’y a aucune chaise libre. »',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement construite ?',
                        'choices' => [
                            ['choice_text' => 'Nous ne connaissons personne dans ce quartier.', 'is_correct' => true],
                            ['choice_text' => 'Nous ne personne connaissons dans ce quartier.', 'is_correct' => false],
                            ['choice_text' => 'Nous personne ne connaissons dans ce quartier.', 'is_correct' => false],
                            ['choice_text' => 'Nous connaissons ne personne dans ce quartier.', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure correcte est « ne connaissons personne ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « aucun » ?',
                        'choices' => [
                            ['choice_text' => 'Aucun étudiant n’est absent aujourd’hui.', 'is_correct' => true],
                            ['choice_text' => 'Aucun étudiant est ne absent aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Aucune étudiant n’est absent aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Aucun étudiant ne est absent aujourd’hui.', 'is_correct' => false],
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
                            ['choice_text' => 'Est-ce tu que travailles demain ?', 'is_correct' => false],
                            ['choice_text' => 'Tu est-ce que travailles demain ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que travailles tu demain ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure correcte est « Est-ce que + sujet + verbe + complément ? »',
                    ],
                    [
                        'question' => 'Quelle question est naturelle à l’oral courant ?',
                        'choices' => [
                            ['choice_text' => 'Tu viens ce soir ?', 'is_correct' => true],
                            ['choice_text' => 'Viens tu ce soir le ?', 'is_correct' => false],
                            ['choice_text' => 'Tu ce soir viens le ?', 'is_correct' => false],
                            ['choice_text' => 'Ce soir viens tu le ?', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’oral, l’intonation permet de transformer une phrase affirmative en question : « Tu viens ce soir ? »',
                    ],
                    [
                        'question' => 'Quelle question utilise correctement l’inversion ?',
                        'choices' => [
                            ['choice_text' => 'Aimes-tu le chocolat ?', 'is_correct' => true],
                            ['choice_text' => 'Aimes le chocolat-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Tu aimes-le chocolat ?', 'is_correct' => false],
                            ['choice_text' => 'Le chocolat aimes-tu ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec l’inversion, le pronom sujet se place après le verbe : « Aimes-tu... ? »',
                    ],
                    [
                        'question' => 'Quelle question demande le lieu ?',
                        'choices' => [
                            ['choice_text' => 'Où habites-tu ?', 'is_correct' => true],
                            ['choice_text' => 'Quand habites-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi habites-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Combien habites-tu ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Où » sert à demander un lieu.',
                    ],
                    [
                        'question' => 'Quelle question demande le moment ?',
                        'choices' => [
                            ['choice_text' => 'Quand commence le film ?', 'is_correct' => true],
                            ['choice_text' => 'Où commence le film ?', 'is_correct' => false],
                            ['choice_text' => 'Qui commence le film ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi commence le film ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Quand » demande à quel moment un événement se produit.',
                    ],
                    [
                        'question' => 'Quelle question demande une raison ?',
                        'choices' => [
                            ['choice_text' => 'Pourquoi es-tu fatigué ?', 'is_correct' => true],
                            ['choice_text' => 'Où es-tu fatigué ?', 'is_correct' => false],
                            ['choice_text' => 'Quand es-tu fatigué ?', 'is_correct' => false],
                            ['choice_text' => 'Qui es-tu fatigué ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Pourquoi » sert à demander la cause ou la raison.',
                    ],
                    [
                        'question' => 'Complétez : « ___ tu habites à Casablanca ? »',
                        'choices' => [
                            ['choice_text' => 'Est-ce que', 'is_correct' => true],
                            ['choice_text' => 'Pourquoi est', 'is_correct' => false],
                            ['choice_text' => 'Où est-ce', 'is_correct' => false],
                            ['choice_text' => 'Quand est-ce', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase correcte est « Est-ce que tu habites à Casablanca ? »',
                    ],
                    [
                        'question' => 'Quelle question demande une personne ?',
                        'choices' => [
                            ['choice_text' => 'Qui est ton professeur ?', 'is_correct' => true],
                            ['choice_text' => 'Où est ton professeur ?', 'is_correct' => false],
                            ['choice_text' => 'Quand est ton professeur ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi est ton professeur ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Qui » sert à demander l’identité d’une personne.',
                    ],
                    [
                        'question' => 'Quelle question demande une quantité ?',
                        'choices' => [
                            ['choice_text' => 'Combien coûte cette veste ?', 'is_correct' => true],
                            ['choice_text' => 'Quand coûte cette veste ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi coûte cette veste ?', 'is_correct' => false],
                            ['choice_text' => 'Où coûte cette veste ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Combien » permet ici de demander le prix, donc une quantité monétaire.',
                    ],
                    [
                        'question' => 'Quelle question est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Comment vas-tu ?', 'is_correct' => true],
                            ['choice_text' => 'Comment tu vas le ?', 'is_correct' => false],
                            ['choice_text' => 'Vas comment-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Tu comment vas le ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Comment vas-tu ? » est une question correcte avec inversion.',
                    ],
                    [
                        'question' => 'Quelle question correspond à la réponse « À 8 heures » ?',
                        'choices' => [
                            ['choice_text' => 'À quelle heure commence le cours ?', 'is_correct' => true],
                            ['choice_text' => 'Où commence le cours ?', 'is_correct' => false],
                            ['choice_text' => 'Qui commence le cours ?', 'is_correct' => false],
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
                        'question' => 'Quel mot interrogatif demande un lieu ?',
                        'choices' => [
                            ['choice_text' => 'Où', 'is_correct' => true],
                            ['choice_text' => 'Pourquoi', 'is_correct' => false],
                            ['choice_text' => 'Qui', 'is_correct' => false],
                            ['choice_text' => 'Combien', 'is_correct' => false],
                        ],
                        'explanation' => '« Où » permet de demander un endroit ou une destination.',
                    ],
                    [
                        'question' => 'Quel mot demande une raison ?',
                        'choices' => [
                            ['choice_text' => 'Pourquoi', 'is_correct' => true],
                            ['choice_text' => 'Quand', 'is_correct' => false],
                            ['choice_text' => 'Où', 'is_correct' => false],
                            ['choice_text' => 'Combien', 'is_correct' => false],
                        ],
                        'explanation' => '« Pourquoi » sert à demander la cause ou la raison d’un fait.',
                    ],
                    [
                        'question' => 'Quel mot demande le moment d’une action ?',
                        'choices' => [
                            ['choice_text' => 'Quand', 'is_correct' => true],
                            ['choice_text' => 'Qui', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi', 'is_correct' => false],
                            ['choice_text' => 'Comment', 'is_correct' => false],
                        ],
                        'explanation' => '« Quand » sert à demander à quel moment quelque chose se produit.',
                    ],
                    [
                        'question' => 'Quel mot demande la manière ?',
                        'choices' => [
                            ['choice_text' => 'Comment', 'is_correct' => true],
                            ['choice_text' => 'Quand', 'is_correct' => false],
                            ['choice_text' => 'Où', 'is_correct' => false],
                            ['choice_text' => 'Qui', 'is_correct' => false],
                        ],
                        'explanation' => '« Comment » permet de demander de quelle manière une action se réalise.',
                    ],
                    [
                        'question' => 'Quel mot convient : « ___ coûte ce téléphone ? »',
                        'choices' => [
                            ['choice_text' => 'Combien', 'is_correct' => true],
                            ['choice_text' => 'Pourquoi', 'is_correct' => false],
                            ['choice_text' => 'Quand', 'is_correct' => false],
                            ['choice_text' => 'Qui', 'is_correct' => false],
                        ],
                        'explanation' => '« Combien coûte ce téléphone ? » demande son prix.',
                    ],
                    [
                        'question' => 'Quelle question correspond à la réponse « Au travail » ?',
                        'choices' => [
                            ['choice_text' => 'Où es-tu ?', 'is_correct' => true],
                            ['choice_text' => 'Quand es-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi es-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Comment es-tu ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Au travail » indique un lieu, donc la question appropriée commence par « où ».',
                    ],
                    [
                        'question' => 'Quelle question correspond à la réponse « Parce qu’il pleut » ?',
                        'choices' => [
                            ['choice_text' => 'Pourquoi restes-tu ici ?', 'is_correct' => true],
                            ['choice_text' => 'Où restes-tu ici ?', 'is_correct' => false],
                            ['choice_text' => 'Quand restes-tu ici ?', 'is_correct' => false],
                            ['choice_text' => 'Comment restes-tu ici ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse « Parce qu’il pleut » donne une raison, donc on utilise « pourquoi ».',
                    ],
                    [
                        'question' => 'Quelle question correspond à la réponse « Avec ma sœur » ?',
                        'choices' => [
                            ['choice_text' => 'Avec qui vas-tu au cinéma ?', 'is_correct' => true],
                            ['choice_text' => 'Où vas-tu au cinéma ?', 'is_correct' => false],
                            ['choice_text' => 'Quand vas-tu au cinéma ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi vas-tu au cinéma ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Avec ma sœur » répond à une question portant sur la personne qui accompagne le locuteur.',
                    ],
                    [
                        'question' => 'Quelle question correspond à la réponse « Demain matin » ?',
                        'choices' => [
                            ['choice_text' => 'Quand pars-tu ?', 'is_correct' => true],
                            ['choice_text' => 'Où pars-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Comment pars-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi pars-tu ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Demain matin » indique un moment, donc « quand » est le mot interrogatif approprié.',
                    ],
                    [
                        'question' => 'Quelle question correspond à la réponse « Très bien » ?',
                        'choices' => [
                            ['choice_text' => 'Comment vas-tu ?', 'is_correct' => true],
                            ['choice_text' => 'Où vas-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Quand vas-tu ?', 'is_correct' => false],
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
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Est-ce que tu ne comprends pas la question ?', 'is_correct' => true],
                            ['choice_text' => 'Est-ce ne que tu comprends pas la question ?', 'is_correct' => false],
                            ['choice_text' => 'Tu est-ce que ne comprends pas la question ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que ne tu comprends pas la question ?', 'is_correct' => false],
                        ],
                        'explanation' => 'On peut combiner « est-ce que » et la négation : « Est-ce que tu ne comprends pas la question ? »',
                    ],
                    [
                        'question' => 'Quelle question est correcte à la forme négative ?',
                        'choices' => [
                            ['choice_text' => 'Pourquoi ne viens-tu pas ?', 'is_correct' => true],
                            ['choice_text' => 'Pourquoi ne pas viens-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi tu ne viens pas le ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi viens-tu ne pas ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec l’inversion et la négation, « ne » vient avant le verbe et « pas » après le verbe.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie qu’une personne ne vient jamais ?',
                        'choices' => [
                            ['choice_text' => 'Elle ne vient jamais.', 'is_correct' => true],
                            ['choice_text' => 'Elle ne vient plus.', 'is_correct' => false],
                            ['choice_text' => 'Elle ne vient pas jamais.', 'is_correct' => false],
                            ['choice_text' => 'Elle jamais ne vient pas.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne...jamais » signifie que l’action ne se produit à aucun moment.',
                    ],
                    [
                        'question' => 'Quelle question est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Est-ce que vous avez encore du pain ?', 'is_correct' => true],
                            ['choice_text' => 'Est-ce vous que avez encore du pain ?', 'is_correct' => false],
                            ['choice_text' => 'Vous est-ce que avez encore du pain ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que avez vous encore du pain le ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La construction « Est-ce que + sujet + verbe » est correcte ici.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement négative ?',
                        'choices' => [
                            ['choice_text' => 'Je n’ai rien compris.', 'is_correct' => true],
                            ['choice_text' => 'Je ne rien ai compris.', 'is_correct' => false],
                            ['choice_text' => 'Je n’ai compris rien.', 'is_correct' => false],
                            ['choice_text' => 'Je rien n’ai compris.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec le passé composé, « rien » se place généralement après le participe passé : « n’ai rien compris ».',
                    ],
                    [
                        'question' => 'Quelle question demande une raison négative ?',
                        'choices' => [
                            ['choice_text' => 'Pourquoi ne veux-tu pas venir ?', 'is_correct' => true],
                            ['choice_text' => 'Pourquoi ne pas veux-tu venir ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi veux-tu ne pas venir le ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi pas ne veux-tu venir ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme correcte combine « pourquoi », l’inversion et « ne...pas » autour du verbe.',
                    ],
                    [
                        'question' => 'Quelle question est correcte pour demander le nombre de frères ?',
                        'choices' => [
                            ['choice_text' => 'Combien de frères as-tu ?', 'is_correct' => true],
                            ['choice_text' => 'Combien frères de as-tu ?', 'is_correct' => false],
                            ['choice_text' => 'De combien frères as-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Combien as-tu frères de ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure correcte est « combien de + nom » : « Combien de frères as-tu ? »',
                    ],
                    [
                        'question' => 'Quelle phrase indique qu’aucune personne n’est disponible ?',
                        'choices' => [
                            ['choice_text' => 'Personne n’est disponible.', 'is_correct' => true],
                            ['choice_text' => 'Personne est disponible ne.', 'is_correct' => false],
                            ['choice_text' => 'Ne personne est disponible.', 'is_correct' => false],
                            ['choice_text' => 'Personne n’est pas disponible.', 'is_correct' => false],
                        ],
                        'explanation' => '« Personne n’est disponible » signifie qu’aucune personne n’est disponible.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime l’arrêt d’une habitude ?',
                        'choices' => [
                            ['choice_text' => 'Nous ne sortons plus le dimanche.', 'is_correct' => true],
                            ['choice_text' => 'Nous ne sortons jamais le dimanche.', 'is_correct' => false],
                            ['choice_text' => 'Nous ne sortons rien le dimanche.', 'is_correct' => false],
                            ['choice_text' => 'Nous sortons toujours le dimanche.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne...plus » indique qu’une habitude qui existait auparavant a cessé.',
                    ],
                    [
                        'question' => 'Quelle question est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Où est-ce que vous travaillez ?', 'is_correct' => true],
                            ['choice_text' => 'Où vous est-ce que travaillez ?', 'is_correct' => false],
                            ['choice_text' => 'Où est-ce vous que travaillez ?', 'is_correct' => false],
                            ['choice_text' => 'Où est-ce que travaillez vous le ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure correcte est « mot interrogatif + est-ce que + sujet + verbe ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Je ne connais personne ici.', 'is_correct' => true],
                            ['choice_text' => 'Je ne personne connais ici.', 'is_correct' => false],
                            ['choice_text' => 'Je connais ne personne ici.', 'is_correct' => false],
                            ['choice_text' => 'Je personne ne connais ici.', 'is_correct' => false],
                        ],
                        'explanation' => '« Personne » se place après le verbe dans cette construction négative.',
                    ],
                    [
                        'question' => 'Quelle question correspond à la réponse « Non, je ne peux pas » ?',
                        'choices' => [
                            ['choice_text' => 'Peux-tu venir avec nous ?', 'is_correct' => true],
                            ['choice_text' => 'Où peux-tu venir avec nous ?', 'is_correct' => false],
                            ['choice_text' => 'Quand peux-tu venir avec nous ?', 'is_correct' => false],
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
