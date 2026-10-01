<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ListeningComprehensionBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'listening-comprehension')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Comprendre des dialogues du quotidien',
                'description' => 'Écouter ou lire des dialogues courts et identifier les informations essentielles.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Transcription à écouter :\n\n« Bonjour, je voudrais un café et un croissant, s'il vous plaît. »\n« Bien sûr. Vous prenez le café sur place ? »\n« Oui, merci. »\n\nQue commande le client ?",
                        'choices' => [
                            ['choice_text' => 'Un café et un croissant', 'is_correct' => true],
                            ['choice_text' => 'Un thé et un sandwich', 'is_correct' => false],
                            ['choice_text' => 'Un jus et un gâteau', 'is_correct' => false],
                            ['choice_text' => 'Une soupe et une salade', 'is_correct' => false],
                        ],
                        'explanation' => 'Le client demande explicitement un café et un croissant.',
                    ],
                    [
                        'question' => 'Dans le dialogue, où le client va-t-il consommer sa commande ?',
                        'choices' => [
                            ['choice_text' => 'Sur place', 'is_correct' => true],
                            ['choice_text' => 'À la maison', 'is_correct' => false],
                            ['choice_text' => 'Dans le train', 'is_correct' => false],
                            ['choice_text' => 'Au travail', 'is_correct' => false],
                        ],
                        'explanation' => 'Le client répond « Oui » à la question sur la consommation sur place.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Tu viens au cinéma ce soir ? »\n« J'aimerais bien, mais je travaille jusqu'à vingt heures. »\n« D'accord, une autre fois alors. »\n\nPourquoi la personne ne peut-elle pas aller au cinéma ?",
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle travaille jusqu’à vingt heures', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle est en voyage', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle n’aime pas le cinéma', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle doit aller à l’école', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne explique qu’elle travaille jusqu’à vingt heures.',
                    ],
                    [
                        'question' => 'À quel moment la personne termine-t-elle son travail ?',
                        'choices' => [
                            ['choice_text' => 'À vingt heures', 'is_correct' => true],
                            ['choice_text' => 'À dix-huit heures', 'is_correct' => false],
                            ['choice_text' => 'À dix-neuf heures', 'is_correct' => false],
                            ['choice_text' => 'À vingt-deux heures', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dialogue mentionne clairement vingt heures.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Excusez-moi, où est la pharmacie ? »\n« Elle est juste en face de la boulangerie, à côté de la banque. »\n« Merci beaucoup. »\n\nOù se trouve la pharmacie ?",
                        'choices' => [
                            ['choice_text' => 'En face de la boulangerie', 'is_correct' => true],
                            ['choice_text' => 'Derrière la banque', 'is_correct' => false],
                            ['choice_text' => 'Dans la boulangerie', 'is_correct' => false],
                            ['choice_text' => 'Près de la gare', 'is_correct' => false],
                        ],
                        'explanation' => 'La pharmacie est décrite comme étant en face de la boulangerie et à côté de la banque.',
                    ],
                    [
                        'question' => 'Quel autre lieu est mentionné comme étant à côté de la pharmacie ?',
                        'choices' => [
                            ['choice_text' => 'La banque', 'is_correct' => true],
                            ['choice_text' => 'La gare', 'is_correct' => false],
                            ['choice_text' => 'Le cinéma', 'is_correct' => false],
                            ['choice_text' => 'L’école', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne répond que la pharmacie est à côté de la banque.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Tu as l'heure ? »\n« Oui, il est neuf heures moins dix. »\n« Merci ! Mon cours commence à neuf heures. »\n\nQuelle heure est-il ?",
                        'choices' => [
                            ['choice_text' => '8 h 50', 'is_correct' => true],
                            ['choice_text' => '9 h 10', 'is_correct' => false],
                            ['choice_text' => '8 h 40', 'is_correct' => false],
                            ['choice_text' => '9 h 00', 'is_correct' => false],
                        ],
                        'explanation' => '« Neuf heures moins dix » correspond à 8 h 50.',
                    ],
                    [
                        'question' => 'À quelle heure commence le cours ?',
                        'choices' => [
                            ['choice_text' => 'À neuf heures', 'is_correct' => true],
                            ['choice_text' => 'À huit heures', 'is_correct' => false],
                            ['choice_text' => 'À neuf heures trente', 'is_correct' => false],
                            ['choice_text' => 'À dix heures', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne dit que son cours commence à neuf heures.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Tu veux déjeuner où ? »\n« Au petit restaurant près de la gare. »\n« D'accord. On y va à midi ? »\n« Oui, parfait. »\n\nOù veulent-ils déjeuner ?",
                        'choices' => [
                            ['choice_text' => 'Dans un restaurant près de la gare', 'is_correct' => true],
                            ['choice_text' => 'À la maison', 'is_correct' => false],
                            ['choice_text' => 'Dans un café au centre-ville', 'is_correct' => false],
                            ['choice_text' => 'À la cantine de l’école', 'is_correct' => false],
                        ],
                        'explanation' => 'Ils choisissent un petit restaurant situé près de la gare.',
                    ],
                    [
                        'question' => 'À quelle heure ont-ils prévu de partir ?',
                        'choices' => [
                            ['choice_text' => 'À midi', 'is_correct' => true],
                            ['choice_text' => 'À onze heures', 'is_correct' => false],
                            ['choice_text' => 'À treize heures', 'is_correct' => false],
                            ['choice_text' => 'À quatorze heures', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dialogue propose clairement « à midi » et la réponse est positive.',
                    ],
                ],
            ],

            [
                'title' => 'Informations pratiques et annonces',
                'description' => 'Comprendre des annonces simples, des horaires et des informations pratiques entendues dans la vie quotidienne.',
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Transcription à écouter :\n\n« Attention, le train à destination de Fès partira du quai numéro quatre à dix heures quinze. Les voyageurs sont priés de se présenter quelques minutes avant le départ. »\n\nÀ quelle heure part le train ?",
                        'choices' => [
                            ['choice_text' => 'À 10 h 15', 'is_correct' => true],
                            ['choice_text' => 'À 9 h 45', 'is_correct' => false],
                            ['choice_text' => 'À 10 h 50', 'is_correct' => false],
                            ['choice_text' => 'À 11 h 15', 'is_correct' => false],
                        ],
                        'explanation' => 'L’annonce indique un départ à dix heures quinze.',
                    ],
                    [
                        'question' => 'De quelle destination parle l’annonce ?',
                        'choices' => [
                            ['choice_text' => 'Fès', 'is_correct' => true],
                            ['choice_text' => 'Rabat', 'is_correct' => false],
                            ['choice_text' => 'Tanger', 'is_correct' => false],
                            ['choice_text' => 'Marrakech', 'is_correct' => false],
                        ],
                        'explanation' => 'Le train annoncé est à destination de Fès.',
                    ],
                    [
                        'question' => 'Sur quel quai les voyageurs doivent-ils se rendre ?',
                        'choices' => [
                            ['choice_text' => 'Quai numéro quatre', 'is_correct' => true],
                            ['choice_text' => 'Quai numéro deux', 'is_correct' => false],
                            ['choice_text' => 'Quai numéro trois', 'is_correct' => false],
                            ['choice_text' => 'Quai numéro cinq', 'is_correct' => false],
                        ],
                        'explanation' => 'L’annonce précise que le train part du quai numéro quatre.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Le musée ouvrira exceptionnellement à onze heures samedi matin. La dernière entrée sera à dix-sept heures trente. »\n\nÀ quelle heure le musée ouvre-t-il samedi ?",
                        'choices' => [
                            ['choice_text' => 'À onze heures', 'is_correct' => true],
                            ['choice_text' => 'À neuf heures', 'is_correct' => false],
                            ['choice_text' => 'À dix heures', 'is_correct' => false],
                            ['choice_text' => 'À midi', 'is_correct' => false],
                        ],
                        'explanation' => 'L’annonce indique une ouverture exceptionnelle à onze heures.',
                    ],
                    [
                        'question' => 'À quelle heure a lieu la dernière entrée ?',
                        'choices' => [
                            ['choice_text' => 'À 17 h 30', 'is_correct' => true],
                            ['choice_text' => 'À 17 h 00', 'is_correct' => false],
                            ['choice_text' => 'À 18 h 30', 'is_correct' => false],
                            ['choice_text' => 'À 16 h 30', 'is_correct' => false],
                        ],
                        'explanation' => 'La dernière entrée est prévue à dix-sept heures trente.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Bonjour à tous. Le cours de français de mardi aura lieu dans la salle 12 au lieu de la salle 8. Le début reste fixé à neuf heures. »\n\nQu’est-ce qui change ?",
                        'choices' => [
                            ['choice_text' => 'La salle', 'is_correct' => true],
                            ['choice_text' => 'L’heure', 'is_correct' => false],
                            ['choice_text' => 'Le jour', 'is_correct' => false],
                            ['choice_text' => 'La matière', 'is_correct' => false],
                        ],
                        'explanation' => 'Le jour, l’heure et la matière restent les mêmes ; seule la salle change.',
                    ],
                    [
                        'question' => 'Dans quelle salle aura lieu le cours ?',
                        'choices' => [
                            ['choice_text' => 'Salle 12', 'is_correct' => true],
                            ['choice_text' => 'Salle 8', 'is_correct' => false],
                            ['choice_text' => 'Salle 10', 'is_correct' => false],
                            ['choice_text' => 'Salle 14', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cours se déroulera dans la salle 12 au lieu de la salle 8.',
                    ],
                    [
                        'question' => 'À quelle heure commence le cours de français ?',
                        'choices' => [
                            ['choice_text' => 'À neuf heures', 'is_correct' => true],
                            ['choice_text' => 'À huit heures', 'is_correct' => false],
                            ['choice_text' => 'À dix heures', 'is_correct' => false],
                            ['choice_text' => 'À neuf heures trente', 'is_correct' => false],
                        ],
                        'explanation' => 'Le début du cours reste fixé à neuf heures.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« En raison de la pluie, le match de football prévu cet après-midi est reporté à dimanche matin. Les billets restent valables. »\n\nPourquoi le match est-il reporté ?",
                        'choices' => [
                            ['choice_text' => 'À cause de la pluie', 'is_correct' => true],
                            ['choice_text' => 'À cause d’un problème de transport', 'is_correct' => false],
                            ['choice_text' => 'À cause d’un manque de joueurs', 'is_correct' => false],
                            ['choice_text' => 'À cause d’une panne d’électricité', 'is_correct' => false],
                        ],
                        'explanation' => 'L’annonce donne directement la raison : la pluie.',
                    ],
                    [
                        'question' => 'À quel moment le match est-il reporté ?',
                        'choices' => [
                            ['choice_text' => 'À dimanche matin', 'is_correct' => true],
                            ['choice_text' => 'À samedi soir', 'is_correct' => false],
                            ['choice_text' => 'À lundi matin', 'is_correct' => false],
                            ['choice_text' => 'À dimanche après-midi', 'is_correct' => false],
                        ],
                        'explanation' => 'Le match prévu l’après-midi est déplacé à dimanche matin.',
                    ],
                    [
                        'question' => 'Que deviennent les billets ?',
                        'choices' => [
                            ['choice_text' => 'Ils restent valables', 'is_correct' => true],
                            ['choice_text' => 'Ils sont automatiquement annulés', 'is_correct' => false],
                            ['choice_text' => 'Ils doivent être échangés immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Ils deviennent plus chers', 'is_correct' => false],
                        ],
                        'explanation' => 'L’annonce précise que les billets restent valables.',
                    ],
                ],
            ],

            [
                'title' => 'Dialogues et intention du locuteur',
                'description' => 'Comprendre une demande, une réponse, une invitation, un refus ou une proposition dans des dialogues simples.',
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Transcription à écouter :\n\n« Tu peux m’aider avec cet exercice ? »\n« Oui, bien sûr. On va le regarder ensemble. »\n\nQue demande la première personne ?",
                        'choices' => [
                            ['choice_text' => 'De l’aide pour un exercice', 'is_correct' => true],
                            ['choice_text' => 'Un livre de français', 'is_correct' => false],
                            ['choice_text' => 'Un trajet en voiture', 'is_correct' => false],
                            ['choice_text' => 'Une invitation à dîner', 'is_correct' => false],
                        ],
                        'explanation' => 'La première personne demande de l’aide pour comprendre ou faire un exercice.',
                    ],
                    [
                        'question' => 'Quelle est la réponse de l’autre personne ?',
                        'choices' => [
                            ['choice_text' => 'Elle accepte d’aider', 'is_correct' => true],
                            ['choice_text' => 'Elle refuse', 'is_correct' => false],
                            ['choice_text' => 'Elle ne comprend pas la question', 'is_correct' => false],
                            ['choice_text' => 'Elle doit partir immédiatement', 'is_correct' => false],
                        ],
                        'explanation' => '« Oui, bien sûr » montre clairement qu’elle accepte d’aider.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Est-ce que vous avez encore une chambre libre pour ce soir ? »\n« Oui, il nous reste une chambre double. »\n\nQue cherche la personne ?",
                        'choices' => [
                            ['choice_text' => 'Une chambre pour la nuit', 'is_correct' => true],
                            ['choice_text' => 'Une table au restaurant', 'is_correct' => false],
                            ['choice_text' => 'Un billet de train', 'is_correct' => false],
                            ['choice_text' => 'Une place de cinéma', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle demande s’il reste une chambre libre pour ce soir.',
                    ],
                    [
                        'question' => 'Quel type de chambre reste disponible ?',
                        'choices' => [
                            ['choice_text' => 'Une chambre double', 'is_correct' => true],
                            ['choice_text' => 'Une chambre simple', 'is_correct' => false],
                            ['choice_text' => 'Une suite', 'is_correct' => false],
                            ['choice_text' => 'Une chambre familiale', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse indique qu’il reste une chambre double.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« On va au parc cet après-midi ? »\n« Pourquoi pas, mais j’ai un rendez-vous à quatre heures. »\n« Alors, on peut y aller à deux heures. »\n\nQuel est le problème ?",
                        'choices' => [
                            ['choice_text' => 'La personne a un rendez-vous à quatre heures', 'is_correct' => true],
                            ['choice_text' => 'Le parc est fermé', 'is_correct' => false],
                            ['choice_text' => 'Il n’y a pas de transport', 'is_correct' => false],
                            ['choice_text' => 'Il va pleuvoir toute la journée', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne a un rendez-vous à quatre heures, ce qui limite le moment disponible.',
                    ],
                    [
                        'question' => 'À quelle heure proposent-ils finalement d’aller au parc ?',
                        'choices' => [
                            ['choice_text' => 'À deux heures', 'is_correct' => true],
                            ['choice_text' => 'À trois heures', 'is_correct' => false],
                            ['choice_text' => 'À quatre heures', 'is_correct' => false],
                            ['choice_text' => 'À cinq heures', 'is_correct' => false],
                        ],
                        'explanation' => 'La seconde personne propose finalement d’y aller à deux heures.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Bonjour, je voudrais savoir si la bibliothèque est ouverte aujourd’hui. »\n« Oui, elle ferme exceptionnellement à dix-huit heures. »\n\nPourquoi la personne appelle-t-elle ?",
                        'choices' => [
                            ['choice_text' => 'Pour connaître les horaires de la bibliothèque', 'is_correct' => true],
                            ['choice_text' => 'Pour réserver un livre en restaurant', 'is_correct' => false],
                            ['choice_text' => 'Pour demander une adresse de magasin', 'is_correct' => false],
                            ['choice_text' => 'Pour annuler un cours', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle veut savoir si la bibliothèque est ouverte et connaître son horaire.',
                    ],
                    [
                        'question' => 'À quelle heure la bibliothèque ferme-t-elle exceptionnellement ?',
                        'choices' => [
                            ['choice_text' => 'À dix-huit heures', 'is_correct' => true],
                            ['choice_text' => 'À dix-sept heures', 'is_correct' => false],
                            ['choice_text' => 'À dix-neuf heures', 'is_correct' => false],
                            ['choice_text' => 'À vingt heures', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse précise une fermeture exceptionnelle à dix-huit heures.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Vous voulez encore du pain ? »\n« Non merci, j’en ai assez. Je voudrais plutôt un peu d’eau. »\n\nQue demande finalement la personne ?",
                        'choices' => [
                            ['choice_text' => 'Un peu d’eau', 'is_correct' => true],
                            ['choice_text' => 'Encore du pain', 'is_correct' => false],
                            ['choice_text' => 'Du jus de fruit', 'is_correct' => false],
                            ['choice_text' => 'Un café', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle refuse le pain et demande plutôt un peu d’eau.',
                    ],
                    [
                        'question' => 'Pourquoi ne veut-elle pas davantage de pain ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle en a assez', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle n’aime pas le pain', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il est trop chaud', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il n’y en a plus', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle dit directement « j’en ai assez », ce qui explique son refus.',
                    ],
                    [
                        'question' => 'Quelle attitude montre la réponse « Non merci » ?',
                        'choices' => [
                            ['choice_text' => 'Un refus poli', 'is_correct' => true],
                            ['choice_text' => 'Une colère', 'is_correct' => false],
                            ['choice_text' => 'Une surprise', 'is_correct' => false],
                            ['choice_text' => 'Une demande urgente', 'is_correct' => false],
                        ],
                        'explanation' => '« Non merci » est une manière polie de refuser une proposition.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Je peux vous appeler demain matin ? »\n« Oui, mais pas avant dix heures, s’il vous plaît. »\n\nQue demande la deuxième personne ?",
                        'choices' => [
                            ['choice_text' => 'Ne pas être appelée avant dix heures', 'is_correct' => true],
                            ['choice_text' => 'Être appelée à huit heures', 'is_correct' => false],
                            ['choice_text' => 'Ne pas recevoir d’appel demain', 'is_correct' => false],
                            ['choice_text' => 'Être appelée uniquement le soir', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle accepte l’appel mais demande qu’il n’ait pas lieu avant dix heures.',
                    ],
                ],
            ],

            [
                'title' => 'Dialogues avec détails',
                'description' => 'Repérer plusieurs informations dans un dialogue et distinguer les détails importants.',
                'duration' => 26,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Transcription à écouter :\n\n« Tu vas au marché samedi ? »\n« Oui, vers dix heures. Je dois acheter des légumes et du fromage. »\n« Tu veux que je vienne avec toi ? »\n« Oui, volontiers. On se retrouve devant l’entrée principale. »\n\nQuand la personne va-t-elle au marché ?",
                        'choices' => [
                            ['choice_text' => 'Vers dix heures', 'is_correct' => true],
                            ['choice_text' => 'Vers huit heures', 'is_correct' => false],
                            ['choice_text' => 'Vers midi', 'is_correct' => false],
                            ['choice_text' => 'Vers quinze heures', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle dit clairement qu’elle ira au marché vers dix heures.',
                    ],
                    [
                        'question' => 'Que doit-elle acheter ?',
                        'choices' => [
                            ['choice_text' => 'Des légumes et du fromage', 'is_correct' => true],
                            ['choice_text' => 'Du pain et du lait', 'is_correct' => false],
                            ['choice_text' => 'Des fruits et du poisson', 'is_correct' => false],
                            ['choice_text' => 'De la viande et du riz', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dialogue mentionne précisément les légumes et le fromage.',
                    ],
                    [
                        'question' => 'Où les deux personnes vont-elles se retrouver ?',
                        'choices' => [
                            ['choice_text' => 'Devant l’entrée principale', 'is_correct' => true],
                            ['choice_text' => 'Devant la gare', 'is_correct' => false],
                            ['choice_text' => 'Près du parking', 'is_correct' => false],
                            ['choice_text' => 'À l’intérieur d’un café', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rendez-vous est fixé devant l’entrée principale du marché.',
                    ],
                    [
                        'question' => 'Que propose la deuxième personne ?',
                        'choices' => [
                            ['choice_text' => 'D’accompagner son interlocuteur', 'is_correct' => true],
                            ['choice_text' => 'De faire les courses à sa place', 'is_correct' => false],
                            ['choice_text' => 'De préparer le déjeuner', 'is_correct' => false],
                            ['choice_text' => 'De venir le lendemain', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle demande : « Tu veux que je vienne avec toi ? »',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Bonjour, je voudrais réserver une table pour quatre personnes samedi soir. »\n« À quelle heure ? »\n« À vingt heures, si possible. »\n« Très bien. Pouvez-vous me donner votre nom ? »\n« Samir El Amrani. »\n\nPour combien de personnes la table est-elle réservée ?",
                        'choices' => [
                            ['choice_text' => 'Quatre personnes', 'is_correct' => true],
                            ['choice_text' => 'Deux personnes', 'is_correct' => false],
                            ['choice_text' => 'Trois personnes', 'is_correct' => false],
                            ['choice_text' => 'Six personnes', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne demande une table pour quatre personnes.',
                    ],
                    [
                        'question' => 'Pour quel jour la réservation est-elle demandée ?',
                        'choices' => [
                            ['choice_text' => 'Samedi soir', 'is_correct' => true],
                            ['choice_text' => 'Vendredi soir', 'is_correct' => false],
                            ['choice_text' => 'Dimanche midi', 'is_correct' => false],
                            ['choice_text' => 'Lundi soir', 'is_correct' => false],
                        ],
                        'explanation' => 'La réservation concerne le samedi soir.',
                    ],
                    [
                        'question' => 'À quelle heure la personne souhaite-t-elle dîner ?',
                        'choices' => [
                            ['choice_text' => 'À vingt heures', 'is_correct' => true],
                            ['choice_text' => 'À dix-huit heures', 'is_correct' => false],
                            ['choice_text' => 'À dix-neuf heures', 'is_correct' => false],
                            ['choice_text' => 'À vingt et une heures', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle demande une réservation à vingt heures.',
                    ],
                    [
                        'question' => 'Quel nom donne-t-elle pour la réservation ?',
                        'choices' => [
                            ['choice_text' => 'Samir El Amrani', 'is_correct' => true],
                            ['choice_text' => 'Sami El Amrani', 'is_correct' => false],
                            ['choice_text' => 'Amine El Mansouri', 'is_correct' => false],
                            ['choice_text' => 'Samir Amrani', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nom communiqué est « Samir El Amrani ».',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Tu as vu mon téléphone ? »\n« Oui, il est sur la table, à côté de ton sac. »\n« Ah oui, merci. Je ne l’avais pas vu. »\n\nOù est le téléphone ?",
                        'choices' => [
                            ['choice_text' => 'Sur la table, à côté du sac', 'is_correct' => true],
                            ['choice_text' => 'Dans le sac', 'is_correct' => false],
                            ['choice_text' => 'Sous la table', 'is_correct' => false],
                            ['choice_text' => 'Dans la voiture', 'is_correct' => false],
                        ],
                        'explanation' => 'Le téléphone est sur la table et se trouve à côté du sac.',
                    ],
                    [
                        'question' => 'Pourquoi la personne ne trouvait-elle pas son téléphone ?',
                        'choices' => [
                            ['choice_text' => 'Elle ne l’avait pas vu', 'is_correct' => true],
                            ['choice_text' => 'Quelqu’un l’avait pris', 'is_correct' => false],
                            ['choice_text' => 'Il était dans une autre maison', 'is_correct' => false],
                            ['choice_text' => 'Le téléphone était éteint', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle dit qu’elle ne l’avait simplement pas vu.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Tu peux acheter du lait en rentrant ? »\n« Oui. Je prends aussi du pain ? »\n« Non, il en reste encore à la maison. »\n\nQue doit acheter la personne ?",
                        'choices' => [
                            ['choice_text' => 'Du lait', 'is_correct' => true],
                            ['choice_text' => 'Du pain', 'is_correct' => false],
                            ['choice_text' => 'Du fromage', 'is_correct' => false],
                            ['choice_text' => 'Des œufs', 'is_correct' => false],
                        ],
                        'explanation' => 'La première personne demande explicitement d’acheter du lait.',
                    ],
                    [
                        'question' => 'Pourquoi ne doit-elle pas acheter de pain ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il en reste à la maison', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il est trop cher', 'is_correct' => false],
                            ['choice_text' => 'Parce que la boulangerie est fermée', 'is_correct' => false],
                            ['choice_text' => 'Parce que personne n’aime le pain', 'is_correct' => false],
                        ],
                        'explanation' => 'On lui répond qu’il reste encore du pain à la maison.',
                    ],
                ],
            ],

            [
                'title' => 'Révision de compréhension orale',
                'description' => 'Réviser les informations de lieu, de temps, les intentions et les détails dans des dialogues variés.',
                'duration' => 28,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Transcription à écouter :\n\n« Bonjour, à quelle heure ouvre le magasin ? »\n« Il ouvre à neuf heures du lundi au samedi. »\n« Et le dimanche ? »\n« Le dimanche, il est fermé. »\n\nÀ quelle heure le magasin ouvre-t-il ?",
                        'choices' => [
                            ['choice_text' => 'À neuf heures', 'is_correct' => true],
                            ['choice_text' => 'À huit heures', 'is_correct' => false],
                            ['choice_text' => 'À dix heures', 'is_correct' => false],
                            ['choice_text' => 'À onze heures', 'is_correct' => false],
                        ],
                        'explanation' => 'Le magasin ouvre à neuf heures du lundi au samedi.',
                    ],
                    [
                        'question' => 'Quels jours le magasin est-il fermé selon le dialogue ?',
                        'choices' => [
                            ['choice_text' => 'Le dimanche', 'is_correct' => true],
                            ['choice_text' => 'Le samedi', 'is_correct' => false],
                            ['choice_text' => 'Le lundi', 'is_correct' => false],
                            ['choice_text' => 'Le mardi', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dialogue précise que le magasin est fermé le dimanche.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Tu vas à l’université comment ? »\n« Je prends le tramway jusqu’au centre, puis je marche dix minutes. »\n\nComment la personne se rend-elle à l’université ?",
                        'choices' => [
                            ['choice_text' => 'En tramway puis à pied', 'is_correct' => true],
                            ['choice_text' => 'En bus uniquement', 'is_correct' => false],
                            ['choice_text' => 'En voiture puis en taxi', 'is_correct' => false],
                            ['choice_text' => 'À vélo uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle prend d’abord le tramway, puis termine le trajet à pied.',
                    ],
                    [
                        'question' => 'Combien de temps marche-t-elle après le tramway ?',
                        'choices' => [
                            ['choice_text' => 'Dix minutes', 'is_correct' => true],
                            ['choice_text' => 'Cinq minutes', 'is_correct' => false],
                            ['choice_text' => 'Quinze minutes', 'is_correct' => false],
                            ['choice_text' => 'Vingt minutes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dialogue indique une marche de dix minutes.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Vous avez une réservation ? »\n« Oui, au nom de Nadia Benali, pour deux personnes à vingt heures. »\n\nAu nom de qui est la réservation ?",
                        'choices' => [
                            ['choice_text' => 'Nadia Benali', 'is_correct' => true],
                            ['choice_text' => 'Nadia Bennani', 'is_correct' => false],
                            ['choice_text' => 'Nadia Belkadi', 'is_correct' => false],
                            ['choice_text' => 'Nadia El Amrani', 'is_correct' => false],
                        ],
                        'explanation' => 'La réservation est au nom de Nadia Benali.',
                    ],
                    [
                        'question' => 'Pour combien de personnes la réservation est-elle faite ?',
                        'choices' => [
                            ['choice_text' => 'Deux', 'is_correct' => true],
                            ['choice_text' => 'Trois', 'is_correct' => false],
                            ['choice_text' => 'Quatre', 'is_correct' => false],
                            ['choice_text' => 'Six', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne précise que la réservation est pour deux personnes.',
                    ],
                    [
                        'question' => 'À quelle heure est la réservation ?',
                        'choices' => [
                            ['choice_text' => 'À vingt heures', 'is_correct' => true],
                            ['choice_text' => 'À dix-neuf heures', 'is_correct' => false],
                            ['choice_text' => 'À vingt et une heures', 'is_correct' => false],
                            ['choice_text' => 'À dix-huit heures', 'is_correct' => false],
                        ],
                        'explanation' => 'La réservation est prévue à vingt heures.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Je suis désolé, je ne peux pas venir demain. J’ai un rendez-vous chez le dentiste. »\n« D’accord. On se voit vendredi alors ? »\n« Oui, vendredi me convient. »\n\nPourquoi la personne ne peut-elle pas venir demain ?",
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle a un rendez-vous chez le dentiste', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle part en vacances', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle doit travailler toute la nuit', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle a un examen à l’université', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle explique qu’elle a un rendez-vous chez le dentiste.',
                    ],
                    [
                        'question' => 'Quel jour proposent-ils finalement de se voir ?',
                        'choices' => [
                            ['choice_text' => 'Vendredi', 'is_correct' => true],
                            ['choice_text' => 'Jeudi', 'is_correct' => false],
                            ['choice_text' => 'Samedi', 'is_correct' => false],
                            ['choice_text' => 'Dimanche', 'is_correct' => false],
                        ],
                        'explanation' => 'La deuxième personne propose vendredi et la réponse est positive.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Quel temps fait-il aujourd’hui ? »\n« Il fait froid et il y a beaucoup de vent. Je pense qu’il va pleuvoir cet après-midi. »\n\nQuel temps fait-il maintenant ?",
                        'choices' => [
                            ['choice_text' => 'Il fait froid et il y a du vent', 'is_correct' => true],
                            ['choice_text' => 'Il fait très chaud et ensoleillé', 'is_correct' => false],
                            ['choice_text' => 'Il neige fortement', 'is_correct' => false],
                            ['choice_text' => 'Il y a du brouillard sans vent', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne décrit un temps froid et venteux.',
                    ],
                    [
                        'question' => 'Que pense la personne pour l’après-midi ?',
                        'choices' => [
                            ['choice_text' => 'Qu’il va pleuvoir', 'is_correct' => true],
                            ['choice_text' => 'Qu’il va faire très chaud', 'is_correct' => false],
                            ['choice_text' => 'Qu’il va neiger', 'is_correct' => false],
                            ['choice_text' => 'Qu’il va faire complètement sec', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle pense qu’il va pleuvoir dans l’après-midi.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Tu as fini ton projet ? »\n« Presque. Il me reste seulement la dernière page à écrire. »\n« Alors, tu vas pouvoir le rendre demain ? »\n« Oui, normalement. »\n\nQuel élément manque encore au projet ?",
                        'choices' => [
                            ['choice_text' => 'La dernière page', 'is_correct' => true],
                            ['choice_text' => 'La première page', 'is_correct' => false],
                            ['choice_text' => 'La couverture entière', 'is_correct' => false],
                            ['choice_text' => 'Toutes les illustrations', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne dit qu’il lui reste seulement la dernière page à écrire.',
                    ],
                    [
                        'question' => 'Quand pense-t-elle pouvoir rendre le projet ?',
                        'choices' => [
                            ['choice_text' => 'Demain', 'is_correct' => true],
                            ['choice_text' => 'Ce soir', 'is_correct' => false],
                            ['choice_text' => 'La semaine prochaine', 'is_correct' => false],
                            ['choice_text' => 'Dans un mois', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle répond « Oui, normalement » à la proposition de le rendre demain.',
                    ],
                    [
                        'question' => "Transcription à écouter :\n\n« Bonjour, vous êtes bien au service client ? »\n« Oui. Que puis-je faire pour vous ? »\n« Je voudrais signaler un problème avec ma commande. »\n\nPourquoi la personne appelle-t-elle ?",
                        'choices' => [
                            ['choice_text' => 'Pour signaler un problème avec sa commande', 'is_correct' => true],
                            ['choice_text' => 'Pour demander les horaires du magasin', 'is_correct' => false],
                            ['choice_text' => 'Pour réserver une chambre', 'is_correct' => false],
                            ['choice_text' => 'Pour commander un repas au restaurant', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne explique qu’elle appelle pour signaler un problème avec sa commande.',
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