<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ProfessionalFrenchBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'professional-french')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Vocabulaire du monde professionnel',
                'description' => 'Découvrir le vocabulaire essentiel utilisé au travail, dans les entreprises et dans les échanges professionnels.',
                'duration' => 17,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Karim travaille dans le même bureau que vous. Que représente-t-il pour vous ?',
                        'choices' => [
                            ['choice_text' => 'Un collègue', 'is_correct' => true],
                            ['choice_text' => 'Un client', 'is_correct' => false],
                            ['choice_text' => 'Un fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Un candidat', 'is_correct' => false],
                        ],
                        'explanation' => 'Un collègue partage votre lieu de travail ou votre entreprise. Un client achète, un fournisseur livre et un candidat cherche un poste.',
                    ],
                    [
                        'question' => 'Dans une entreprise, Mme Benjelloun est la responsable du service. Que fait-elle ?',
                        'choices' => [
                            ['choice_text' => 'Elle passe une commande au service', 'is_correct' => false],
                            ['choice_text' => 'Elle dirige une équipe ou une activité', 'is_correct' => true],
                            ['choice_text' => 'Elle apprend le métier comme stagiaire', 'is_correct' => false],
                            ['choice_text' => 'Elle livre le matériel de bureau', 'is_correct' => false],
                        ],
                        'explanation' => 'Un responsable organise le travail d’une équipe et répond de ses résultats.',
                    ],
                    [
                        'question' => 'Lundi à 10 h, toute l’équipe se retrouve dans une salle pour discuter du planning. De quoi s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'D’une pause', 'is_correct' => false],
                            ['choice_text' => 'D’un congé', 'is_correct' => false],
                            ['choice_text' => 'D’une réunion', 'is_correct' => true],
                            ['choice_text' => 'D’une livraison', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réunion rassemble plusieurs personnes pour discuter ou décider ensemble.',
                    ],
                    [
                        'question' => 'Dans un contexte professionnel, qu’est-ce qu’un « projet » ?',
                        'choices' => [
                            ['choice_text' => 'Un travail organisé avec un objectif à atteindre', 'is_correct' => true],
                            ['choice_text' => 'Une pause de dix minutes entre deux réunions de travail', 'is_correct' => false],
                            ['choice_text' => 'Un horaire de travail fixe', 'is_correct' => false],
                            ['choice_text' => 'Une facture déjà payée', 'is_correct' => false],
                        ],
                        'explanation' => 'Un projet regroupe des tâches menées pour atteindre un but, comme lancer un site ou organiser un salon.',
                    ],
                    [
                        'question' => 'Que signifie « respecter une échéance » ?',
                        'choices' => [
                            ['choice_text' => 'Terminer un travail avant la date prévue ou le jour même', 'is_correct' => true],
                            ['choice_text' => 'Remettre un travail après la date limite fixée par le responsable', 'is_correct' => false],
                            ['choice_text' => 'Annoncer qu’on abandonne le travail', 'is_correct' => false],
                            ['choice_text' => 'Demander un autre poste à la direction', 'is_correct' => false],
                        ],
                        'explanation' => 'L’échéance est la date limite : la respecter, c’est rendre le travail à temps.',
                    ],
                    [
                        'question' => 'Votre collègue vous demande un coup de main. Que veut dire « je suis disponible » ?',
                        'choices' => [
                            ['choice_text' => 'Je suis absent de l’entreprise toute la semaine', 'is_correct' => false],
                            ['choice_text' => 'J’ai terminé mon contrat de travail', 'is_correct' => false],
                            ['choice_text' => 'Je suis en retard à un rendez-vous', 'is_correct' => false],
                            ['choice_text' => 'J’ai le temps de répondre à votre demande', 'is_correct' => true],
                        ],
                        'explanation' => 'Être disponible, c’est pouvoir consacrer du temps à quelqu’un ou à une tâche.',
                    ],
                    [
                        'question' => 'À la mairie, l’employé vous dit : « Votre dossier est complet. » Que désigne le mot « dossier » ?',
                        'choices' => [
                            ['choice_text' => 'Un employé chargé de l’accueil et de l’orientation du public', 'is_correct' => false],
                            ['choice_text' => 'Une courte réunion de service', 'is_correct' => false],
                            ['choice_text' => 'Un appareil pour imprimer les pièces', 'is_correct' => false],
                            ['choice_text' => 'Un ensemble de documents liés à une demande', 'is_correct' => true],
                        ],
                        'explanation' => 'Un dossier rassemble les pièces et documents d’une même affaire.',
                    ],
                    [
                        'question' => 'Quelle expression signifie « commencer officiellement une réunion » ?',
                        'choices' => [
                            ['choice_text' => 'Terminer la réunion', 'is_correct' => false],
                            ['choice_text' => 'Ouvrir la réunion', 'is_correct' => true],
                            ['choice_text' => 'Reporter la réunion', 'is_correct' => false],
                            ['choice_text' => 'Annuler la réunion', 'is_correct' => false],
                        ],
                        'explanation' => 'Ouvrir la réunion, c’est la commencer officiellement, souvent en saluant les participants.',
                    ],
                    [
                        'question' => 'Que signifie « transmettre un document » ?',
                        'choices' => [
                            ['choice_text' => 'Le relire pour corriger les fautes', 'is_correct' => false],
                            ['choice_text' => 'Le classer dans l’armoire du bureau', 'is_correct' => false],
                            ['choice_text' => 'Le faire parvenir à une autre personne', 'is_correct' => true],
                            ['choice_text' => 'Le garder sans le montrer', 'is_correct' => false],
                        ],
                        'explanation' => 'Transmettre un document, c’est l’envoyer à quelqu’un d’autre, par e-mail ou par courrier.',
                    ],
                    [
                        'question' => 'Que signifie « confirmer un rendez-vous » ?',
                        'choices' => [
                            ['choice_text' => 'Proposer une autre date pour le rendez-vous', 'is_correct' => false],
                            ['choice_text' => 'Dire que le rendez-vous est bien maintenu', 'is_correct' => true],
                            ['choice_text' => 'Annuler le rendez-vous', 'is_correct' => false],
                            ['choice_text' => 'Demander l’adresse de l’entreprise', 'is_correct' => false],
                        ],
                        'explanation' => 'Confirmer un rendez-vous, c’est répondre que la date et l’heure restent valables.',
                    ],
                    [
                        'question' => 'Quelle expression convient pour parler d’une tâche qui doit être faite rapidement ?',
                        'choices' => [
                            ['choice_text' => 'Une tâche facultative', 'is_correct' => false],
                            ['choice_text' => 'Une tâche habituelle', 'is_correct' => false],
                            ['choice_text' => 'Une tâche urgente', 'is_correct' => true],
                            ['choice_text' => 'Une tâche terminée', 'is_correct' => false],
                        ],
                        'explanation' => 'Une tâche urgente ne peut pas attendre : il faut la traiter vite.',
                    ],
                ],
            ],
            [
                'title' => 'E-mails professionnels',
                'description' => 'Choisir les formulations adaptées pour rédiger des e-mails professionnels simples et polis.',
                'duration' => 21,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Vous écrivez à une cliente que vous connaissez, Mme Alaoui. Comment commencez-vous votre e-mail ?',
                        'choices' => [
                            ['choice_text' => 'Salut Madame Alaoui,', 'is_correct' => false],
                            ['choice_text' => 'Bonjour Madame Alaoui,', 'is_correct' => true],
                            ['choice_text' => 'Coucou Madame Alaoui,', 'is_correct' => false],
                            ['choice_text' => 'Hello Madame Alaoui,', 'is_correct' => false],
                        ],
                        'explanation' => '« Bonjour Madame… » est poli et convient à un échange de travail.',
                    ],
                    [
                        'question' => 'Vous souhaitez voir votre directeur jeudi. Quel objet d’e-mail choisissez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour, c’est moi', 'is_correct' => false],
                            ['choice_text' => 'Urgent !!! Répondez-moi vite, c’est important', 'is_correct' => false],
                            ['choice_text' => 'Un message pour vous', 'is_correct' => false],
                            ['choice_text' => 'Demande de rendez-vous pour jeudi', 'is_correct' => true],
                        ],
                        'explanation' => 'L’objet doit annoncer clairement la raison du message en quelques mots.',
                    ],
                    [
                        'question' => 'Vous écrivez à votre directrice, que vous vouvoyez, pour connaître l’heure de la réunion. Quelle phrase choisissez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Dis-moi l’horaire de la réunion dès que possible.', 'is_correct' => false],
                            ['choice_text' => 'Pourriez-vous me préciser l’heure de la réunion ?', 'is_correct' => true],
                            ['choice_text' => 'Tu peux m’envoyer l’horaire exact de la réunion, s’il te plaît ?', 'is_correct' => false],
                            ['choice_text' => 'Je voudrais l’horaire de la réunion maintenant.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pourriez-vous… ? » est une façon polie de demander une information.',
                    ],
                    [
                        'question' => 'Quelle formule peut annoncer une pièce jointe ?',
                        'choices' => [
                            ['choice_text' => 'Le document est quelque part dans mon ordinateur.', 'is_correct' => false],
                            ['choice_text' => 'J’ai peut-être mis le document avec ce message.', 'is_correct' => false],
                            ['choice_text' => 'Vous trouverez le document en pièce jointe.', 'is_correct' => true],
                            ['choice_text' => 'Voici attaché le document en pièce.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase annonce le fichier joint au message.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour remercier un destinataire ?',
                        'choices' => [
                            ['choice_text' => 'Merci mec pour ta réponse.', 'is_correct' => false],
                            ['choice_text' => 'Enfin, vous avez répondu à mon message.', 'is_correct' => false],
                            ['choice_text' => 'Je vous remercie pour votre réponse.', 'is_correct' => true],
                            ['choice_text' => 'Réponse reçue, merci à toi.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase est polie et reste correcte dans un échange professionnel.',
                    ],
                    [
                        'question' => 'Quelle formule de politesse écrit-on juste avant sa signature ?',
                        'choices' => [
                            ['choice_text' => 'Cordialement,', 'is_correct' => true],
                            ['choice_text' => 'À plus !', 'is_correct' => false],
                            ['choice_text' => 'Bisous,', 'is_correct' => false],
                            ['choice_text' => 'Salut et à bientôt,', 'is_correct' => false],
                        ],
                        'explanation' => '« Cordialement » est une fin de message courante dans le monde du travail.',
                    ],
                    [
                        'question' => 'Vous serez en retard à un rendez-vous. Quelle phrase écrivez-vous ?',
                        'choices' => [
                            ['choice_text' => 'J’arriverai quand je pourrai, ne m’attendez pas pour commencer.', 'is_correct' => false],
                            ['choice_text' => 'Je suis en retard, voilà, ça arrive.', 'is_correct' => false],
                            ['choice_text' => 'Attention, je ne viendrai pas à l’heure prévue.', 'is_correct' => false],
                            ['choice_text' => 'Je vous informe que j’aurai quinze minutes de retard.', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette phrase prévient le destinataire du retard et donne une durée précise.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour demander une confirmation ?',
                        'choices' => [
                            ['choice_text' => 'Confirme l’heure du rendez-vous dès maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Tu confirmes l’heure du rendez-vous ou non ?', 'is_correct' => false],
                            ['choice_text' => 'Je veux la confirmation de l’heure exacte du rendez-vous.', 'is_correct' => false],
                            ['choice_text' => 'Pourriez-vous me confirmer l’heure du rendez-vous ?', 'is_correct' => true],
                        ],
                        'explanation' => 'La formule polie évite l’ordre direct et reste claire.',
                    ],
                    [
                        'question' => 'Vous contactez une entreprise pour la première fois. Quelle phrase ouvre bien votre e-mail ?',
                        'choices' => [
                            ['choice_text' => 'Je vous écris pour un petit truc sur votre service client.', 'is_correct' => false],
                            ['choice_text' => 'J’ai une question rapide à vous poser, vite.', 'is_correct' => false],
                            ['choice_text' => 'Je vous contacte afin d’obtenir des informations sur votre service.', 'is_correct' => true],
                            ['choice_text' => 'Informations sur votre service, merci d’avance.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase donne tout de suite la raison du message, avec un ton professionnel.',
                    ],
                    [
                        'question' => 'Vous attendez une réponse mais vous voulez rester poli. Quelle phrase écrivez-vous à la fin ?',
                        'choices' => [
                            ['choice_text' => 'Je vous remercie par avance pour votre retour.', 'is_correct' => true],
                            ['choice_text' => 'Répondez-moi vite, je suis pressé.', 'is_correct' => false],
                            ['choice_text' => 'J’attends votre réponse aujourd’hui même, sans faute.', 'is_correct' => false],
                            ['choice_text' => 'Vous devez me répondre avant ce soir.', 'is_correct' => false],
                        ],
                        'explanation' => '« Je vous remercie par avance » demande une réponse sans donner d’ordre.',
                    ],
                    [
                        'question' => 'Quelle formule convient lorsqu’on écrit à une personne dont on ne connaît pas le nom ?',
                        'choices' => [
                            ['choice_text' => 'Madame, Monsieur,', 'is_correct' => true],
                            ['choice_text' => 'Chers collègues,', 'is_correct' => false],
                            ['choice_text' => 'Cher ami,', 'is_correct' => false],
                            ['choice_text' => 'Salut à vous,', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand on ne connaît pas le nom du destinataire, on écrit « Madame, Monsieur, ».',
                    ],
                ],
            ],
            [
                'title' => 'Réunions et échanges professionnels',
                'description' => 'Comprendre et utiliser les expressions essentielles pour participer à une réunion professionnelle.',
                'duration' => 23,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle expression peut être utilisée pour ouvrir une réunion ?',
                        'choices' => [
                            ['choice_text' => 'Salut, on verra bien comment ça va se passer pendant cette réunion.', 'is_correct' => false],
                            ['choice_text' => 'Commencez sans moi, j’ai autre chose à faire.', 'is_correct' => false],
                            ['choice_text' => 'Bonjour à tous, merci d’être présents. Nous allons commencer.', 'is_correct' => true],
                            ['choice_text' => 'Je ne sais pas très bien pourquoi nous sommes ici.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le responsable accueille l’équipe et annonce le début de la réunion.',
                    ],
                    [
                        'question' => 'Quelle phrase permet de demander la parole poliment ?',
                        'choices' => [
                            ['choice_text' => 'Je parle maintenant, laissez-moi finir.', 'is_correct' => false],
                            ['choice_text' => 'Puis-je ajouter quelque chose ?', 'is_correct' => true],
                            ['choice_text' => 'Écoutez-moi, j’ai quelque chose à dire.', 'is_correct' => false],
                            ['choice_text' => 'Donnez-moi la parole tout de suite.', 'is_correct' => false],
                        ],
                        'explanation' => 'La question laisse l’autre décider : c’est la manière polie d’intervenir.',
                    ],
                    [
                        'question' => 'Quelle expression peut être utilisée pour demander une précision ?',
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous préciser ce point ?', 'is_correct' => true],
                            ['choice_text' => 'Quoi ? Je n’ai rien compris.', 'is_correct' => false],
                            ['choice_text' => 'Expliquez mieux, ce n’est pas clair.', 'is_correct' => false],
                            ['choice_text' => 'Passez au point suivant, vite.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette demande est précise et polie : on veut un détail sur un point.',
                    ],
                    [
                        'question' => 'Quelle phrase permet d’exprimer son accord ?',
                        'choices' => [
                            ['choice_text' => 'Je suis accord avec cette proposition.', 'is_correct' => false],
                            ['choice_text' => 'Je suis d’accord avec cette proposition.', 'is_correct' => true],
                            ['choice_text' => 'Je suis d’accord à cette proposition.', 'is_correct' => false],
                            ['choice_text' => 'Je suis d’accorde avec cette proposition.', 'is_correct' => false],
                        ],
                        'explanation' => 'On dit « être d’accord avec » quelqu’un ou quelque chose.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime un désaccord de manière polie ?',
                        'choices' => [
                            ['choice_text' => 'Je comprends votre avis, mais je ne suis pas tout à fait d’accord.', 'is_correct' => true],
                            ['choice_text' => 'Vous avez tort sur ce point, ce n’est pas la bonne solution du tout.', 'is_correct' => false],
                            ['choice_text' => 'Cette idée est mauvaise, je ne la retiens pas.', 'is_correct' => false],
                            ['choice_text' => 'Non, c’est impossible, nous ne ferons pas ça.', 'is_correct' => false],
                        ],
                        'explanation' => 'On reconnaît d’abord l’avis de l’autre, puis on dit son désaccord sans le blesser.',
                    ],
                    [
                        'question' => 'Après discussion, l’équipe change la date de la réunion. Quelle phrase résume la décision ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons décidé reporter la réunion à mardi.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons décision de reporter la réunion à mardi.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons décidé de reporter la réunion à mardi.', 'is_correct' => true],
                            ['choice_text' => 'Nous avons décidée de reporter la réunion mardi.', 'is_correct' => false],
                        ],
                        'explanation' => '« Décider de » + infinitif : nous avons décidé de reporter.',
                    ],
                    [
                        'question' => 'Quelle expression convient pour annoncer le point suivant de l’ordre du jour ?',
                        'choices' => [
                            ['choice_text' => 'Revenons maintenant au point précédent.', 'is_correct' => false],
                            ['choice_text' => 'Terminons la réunion sans point suivant.', 'is_correct' => false],
                            ['choice_text' => 'Passons maintenant au point suivant.', 'is_correct' => true],
                            ['choice_text' => 'Reprenons depuis le premier point.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase fait avancer l’ordre du jour d’un point à l’autre.',
                    ],
                    [
                        'question' => 'Vous n’avez pas entendu la dernière remarque d’un collègue. Que dites-vous ?',
                        'choices' => [
                            ['choice_text' => 'Quoi encore ? Répétez ça.', 'is_correct' => false],
                            ['choice_text' => 'Parlez mieux, on ne vous entend pas.', 'is_correct' => false],
                            ['choice_text' => 'Répétez immédiatement votre dernière remarque, je n’ai pas compris.', 'is_correct' => false],
                            ['choice_text' => 'Pardon, pourriez-vous répéter votre dernière remarque ?', 'is_correct' => true],
                        ],
                        'explanation' => '« Pardon, pourriez-vous… ? » reste poli même en réunion.',
                    ],
                    [
                        'question' => 'Quelle phrase vérifie poliment que tout le monde est d’accord ?',
                        'choices' => [
                            ['choice_text' => 'Sommes-nous bien d’accord sur ce point ?', 'is_correct' => true],
                            ['choice_text' => 'Vous êtes d’accord, oui ou non ?', 'is_correct' => false],
                            ['choice_text' => 'D’accord maintenant, on continue.', 'is_correct' => false],
                            ['choice_text' => 'Le point est compris par tout le monde, c’est évident.', 'is_correct' => false],
                        ],
                        'explanation' => 'La question invite chacun à confirmer sans mettre la pression.',
                    ],
                    [
                        'question' => 'Quelle phrase peut conclure une réunion ?',
                        'choices' => [
                            ['choice_text' => 'Voilà, c’est fini pour aujourd’hui, vous pouvez partir maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Merci à tous de votre participation. La réunion est terminée.', 'is_correct' => true],
                            ['choice_text' => 'Réunion finie, salut tout le monde.', 'is_correct' => false],
                            ['choice_text' => 'Je termine ici sans rien ajouter.', 'is_correct' => false],
                        ],
                        'explanation' => 'La conclusion remercie les participants et clôt la séance.',
                    ],
                    [
                        'question' => 'Quelle expression peut introduire une nouvelle suggestion ?',
                        'choices' => [
                            ['choice_text' => 'Je voudrais proposition d’une autre solution.', 'is_correct' => false],
                            ['choice_text' => 'Je propose une autre solution à moi.', 'is_correct' => false],
                            ['choice_text' => 'Je voudrais proposer autre solution.', 'is_correct' => false],
                            ['choice_text' => 'Je voudrais proposer une autre solution.', 'is_correct' => true],
                        ],
                        'explanation' => '« Je voudrais proposer… » présente une idée avec politesse.',
                    ],
                    [
                        'question' => 'Vous avez besoin de plus de temps pour un travail. Quelle phrase écrivez-vous à votre responsable ?',
                        'choices' => [
                            ['choice_text' => 'Donnez-moi deux jours de plus pour finir ce travail, merci d’avance.', 'is_correct' => false],
                            ['choice_text' => 'Je prends deux jours de plus pour finir ce travail.', 'is_correct' => false],
                            ['choice_text' => 'Il me faut deux jours de plus, c’est obligé.', 'is_correct' => false],
                            ['choice_text' => 'Serait-il possible d’avoir deux jours de plus pour ce travail ?', 'is_correct' => true],
                        ],
                        'explanation' => '« Serait-il possible de… ? » demande un délai sans l’imposer.',
                    ],
                ],
            ],
            [
                'title' => 'Communication avec les clients',
                'description' => 'Employer un langage professionnel simple et courtois dans les échanges avec les clients et usagers.',
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle formule convient pour accueillir un client ?',
                        'choices' => [
                            ['choice_text' => 'Oui, madame, c’est pour quoi encore ?', 'is_correct' => false],
                            ['choice_text' => 'Bonjour Madame, comment puis-je vous aider ?', 'is_correct' => true],
                            ['choice_text' => 'Qu’est-ce que vous voulez, madame ?', 'is_correct' => false],
                            ['choice_text' => 'Dites-moi vite quel est votre problème, je suis pressé.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accueil est chaleureux et propose directement de l’aide.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour demander à un client d’expliquer son problème ?',
                        'choices' => [
                            ['choice_text' => 'Expliquez votre problème, je n’ai pas beaucoup de temps.', 'is_correct' => false],
                            ['choice_text' => 'Qu’est-ce qui ne va pas chez vous ?', 'is_correct' => false],
                            ['choice_text' => 'Votre problème, c’est quoi, exactement ?', 'is_correct' => false],
                            ['choice_text' => 'Pourriez-vous m’expliquer le problème rencontré ?', 'is_correct' => true],
                        ],
                        'explanation' => 'La question polie met le client à l’aise pour décrire son problème.',
                    ],
                    [
                        'question' => 'Un client signale un problème. Quelle réponse est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'Ce n’est pas notre problème, désolé.', 'is_correct' => false],
                            ['choice_text' => 'Vous vous trompez, ce n’est pas possible.', 'is_correct' => false],
                            ['choice_text' => 'Je comprends votre situation. Nous allons vérifier cela.', 'is_correct' => true],
                            ['choice_text' => 'Il faut attendre, nous ne pouvons rien vous dire pour l’instant.', 'is_correct' => false],
                        ],
                        'explanation' => 'On écoute le client, puis on annonce une action concrète.',
                    ],
                    [
                        'question' => 'Quelle phrase permet de demander les coordonnées d’un client ?',
                        'choices' => [
                            ['choice_text' => 'Donnez-moi votre numéro de téléphone tout de suite, c’est obligatoire.', 'is_correct' => false],
                            ['choice_text' => 'Je veux votre numéro de téléphone pour le dossier.', 'is_correct' => false],
                            ['choice_text' => 'Pourriez-vous me donner votre numéro, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Votre numéro de téléphone, c’est quoi ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La demande est polie et accompagnée d’un « s’il vous plaît ».',
                    ],
                    [
                        'question' => 'Quelle réponse convient pour annoncer qu’un service est temporairement indisponible ?',
                        'choices' => [
                            ['choice_text' => 'Le service ne marche pas aujourd’hui, voilà, c’est tout ce que je sais.', 'is_correct' => false],
                            ['choice_text' => 'Je suis désolé, ce service est momentanément indisponible.', 'is_correct' => true],
                            ['choice_text' => 'Impossible aujourd’hui, passez au client suivant.', 'is_correct' => false],
                            ['choice_text' => 'Ce service est cassé, repassez un autre jour.', 'is_correct' => false],
                        ],
                        'explanation' => '« Momentanément » dit que le problème ne dure pas, avec des excuses.',
                    ],
                    [
                        'question' => 'Quelle phrase peut rassurer un client ?',
                        'choices' => [
                            ['choice_text' => 'Vous devez attendre, c’est tout ce qu’on peut dire pour le moment.', 'is_correct' => false],
                            ['choice_text' => 'Ce problème est compliqué, débrouillez-vous un peu.', 'is_correct' => false],
                            ['choice_text' => 'Nous faisons le nécessaire pour résoudre votre problème.', 'is_correct' => true],
                            ['choice_text' => 'Je ne peux rien faire pour vous, désolé.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le client sait qu’on s’occupe de son cas, ce qui le rassure.',
                    ],
                    [
                        'question' => 'Un client demande quand sa demande sera traitée. Que lui répondez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Votre demande prendra trois jours, on ne sait pas.', 'is_correct' => false],
                            ['choice_text' => 'Attendez trois jours et revenez nous voir à l’accueil.', 'is_correct' => false],
                            ['choice_text' => 'Trois jours, voilà, c’est le délai.', 'is_correct' => false],
                            ['choice_text' => 'Votre demande sera traitée sous trois jours ouvrés.', 'is_correct' => true],
                        ],
                        'explanation' => 'La réponse donne un délai précis dans un ton professionnel.',
                    ],
                    [
                        'question' => 'Quelle formule convient après avoir résolu le problème d’un client ?',
                        'choices' => [
                            ['choice_text' => 'Voilà, c’est fini, vous pouvez partir maintenant, au revoir.', 'is_correct' => false],
                            ['choice_text' => 'On en a terminé avec vous, au revoir.', 'is_correct' => false],
                            ['choice_text' => 'Ne nous contactez plus pour ce problème.', 'is_correct' => false],
                            ['choice_text' => 'N’hésitez pas à nous contacter si vous avez besoin d’aide.', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette formule clôt l’échange tout en laissant la porte ouverte.',
                    ],
                    [
                        'question' => 'Quelle phrase est adaptée pour s’excuser auprès d’un client ?',
                        'choices' => [
                            ['choice_text' => 'Nous vous prions de nous excuser pour ce désagrément.', 'is_correct' => true],
                            ['choice_text' => 'Désolé, ce n’est pas notre faute, ça arrive.', 'is_correct' => false],
                            ['choice_text' => 'C’est arrivé, tant pis, on ne peut rien y faire.', 'is_correct' => false],
                            ['choice_text' => 'Vous devez comprendre, nous avons beaucoup de travail.', 'is_correct' => false],
                        ],
                        'explanation' => '« Nous vous prions de nous excuser » est la formule d’excuses de l’entreprise.',
                    ],
                    [
                        'question' => 'Quelle question vérifie poliment que le client est satisfait ?',
                        'choices' => [
                            ['choice_text' => 'Êtes-vous satisfait de la solution proposée ?', 'is_correct' => true],
                            ['choice_text' => 'Vous êtes content de ce que nous avons fait pour vous, oui ?', 'is_correct' => false],
                            ['choice_text' => 'Alors, ça vous convient, ou pas ?', 'is_correct' => false],
                            ['choice_text' => 'Vous acceptez, hein ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La question est claire, complète et respectueuse.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour terminer un échange avec un client ?',
                        'choices' => [
                            ['choice_text' => 'Bon, c’est fini, au revoir.', 'is_correct' => false],
                            ['choice_text' => 'Je vous remercie et vous souhaite une excellente journée.', 'is_correct' => true],
                            ['choice_text' => 'Voilà, c’est tout, à plus tard.', 'is_correct' => false],
                            ['choice_text' => 'Merci, c’est bon, vous pouvez y aller maintenant, au revoir.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase remercie le client et finit sur un souhait aimable.',
                    ],
                ],
            ],
            [
                'title' => 'Documents et communication administrative',
                'description' => 'Comprendre et utiliser des formulations simples dans les documents professionnels et administratifs.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Que signifie « veuillez remplir ce formulaire » ?',
                        'choices' => [
                            ['choice_text' => 'Merci d’effacer ce formulaire', 'is_correct' => false],
                            ['choice_text' => 'Merci de rendre ce formulaire vierge', 'is_correct' => false],
                            ['choice_text' => 'Merci de ne pas tenir compte de ce formulaire', 'is_correct' => false],
                            ['choice_text' => 'Merci de compléter ce formulaire', 'is_correct' => true],
                        ],
                        'explanation' => '« Remplir un formulaire », c’est écrire les informations demandées.',
                    ],
                    [
                        'question' => 'Quelle expression convient pour demander un document manquant ?',
                        'choices' => [
                            ['choice_text' => 'Envoyez-nous le document qui manque, c’est urgent pour votre dossier.', 'is_correct' => false],
                            ['choice_text' => 'Merci de bien vouloir nous transmettre le document manquant.', 'is_correct' => true],
                            ['choice_text' => 'Il manque un document, envoyez-le vite.', 'is_correct' => false],
                            ['choice_text' => 'Le document manquant, donnez-le-nous maintenant.', 'is_correct' => false],
                        ],
                        'explanation' => '« Merci de bien vouloir… » est une formule administrative courante et polie.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour informer qu’un dossier est complet ?',
                        'choices' => [
                            ['choice_text' => 'Votre dossier est fini, voilà, c’est bon.', 'is_correct' => false],
                            ['choice_text' => 'Votre dossier est complet et peut maintenant être traité.', 'is_correct' => true],
                            ['choice_text' => 'Dossier complet, suivant, merci de partir.', 'is_correct' => false],
                            ['choice_text' => 'Votre dossier est bon, on le traitera un de ces jours, sans date.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase annonce clairement l’état du dossier et la suite.',
                    ],
                    [
                        'question' => 'Quelle formule administrative confirme la réception d’un document ?',
                        'choices' => [
                            ['choice_text' => 'Votre document est arrivé, c’est noté.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons un document de vous quelque part.', 'is_correct' => false],
                            ['choice_text' => 'Nous accusons votre document de réception.', 'is_correct' => false],
                            ['choice_text' => 'Nous accusons réception de votre document.', 'is_correct' => true],
                        ],
                        'explanation' => '« Accuser réception » veut dire confirmer par écrit qu’on a reçu quelque chose.',
                    ],
                    [
                        'question' => 'Quelle formule demande poliment une signature ?',
                        'choices' => [
                            ['choice_text' => 'Signez ici immédiatement.', 'is_correct' => false],
                            ['choice_text' => 'Vous devez mettre votre nom ici.', 'is_correct' => false],
                            ['choice_text' => 'Veuillez signer le document à l’endroit indiqué.', 'is_correct' => true],
                            ['choice_text' => 'Signez ici, c’est pour aujourd’hui.', 'is_correct' => false],
                        ],
                        'explanation' => '« Veuillez signer… » est la formule habituelle des documents officiels.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour informer d’un changement d’adresse ?',
                        'choices' => [
                            ['choice_text' => 'Notre adresse, elle a changé, voilà.', 'is_correct' => false],
                            ['choice_text' => 'Regardez, nous avons une nouvelle adresse.', 'is_correct' => false],
                            ['choice_text' => 'Nouvelle adresse pour nous, notez-la bien.', 'is_correct' => false],
                            ['choice_text' => 'Nous vous informons que notre adresse a changé.', 'is_correct' => true],
                        ],
                        'explanation' => 'La phrase est claire, neutre et adaptée à un courrier.',
                    ],
                    [
                        'question' => 'À la fin d’une lettre, vous invitez le client à vous poser d’autres questions. Quelle formule écrivez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Pour plus de détails, passez nous voir un jour.', 'is_correct' => false],
                            ['choice_text' => 'Appelez-nous, on verra bien ce qu’on peut faire.', 'is_correct' => false],
                            ['choice_text' => 'Nous vous invitons à nous contacter pour toute information complémentaire.', 'is_correct' => true],
                            ['choice_text' => 'Informations complémentaires : téléphone, bureau.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une formule de politesse fréquente à la fin des courriers professionnels.',
                    ],
                    [
                        'question' => 'Que signifie « ci-joint » dans un e-mail ?',
                        'choices' => [
                            ['choice_text' => 'Le document est joint au message', 'is_correct' => true],
                            ['choice_text' => 'Le document sera envoyé plus tard', 'is_correct' => false],
                            ['choice_text' => 'Le document a été supprimé', 'is_correct' => false],
                            ['choice_text' => 'Le document doit être imprimé', 'is_correct' => false],
                        ],
                        'explanation' => '« Ci-joint » indique qu’un document ou un fichier accompagne le message.',
                    ],
                    [
                        'question' => 'Quelle formulation convient pour signaler qu’une demande est en cours de traitement ?',
                        'choices' => [
                            ['choice_text' => 'Votre demande attend quelque part ici.', 'is_correct' => false],
                            ['choice_text' => 'Votre demande est actuellement en cours de traitement.', 'is_correct' => true],
                            ['choice_text' => 'Nous traiterons votre demande en cours de traitement.', 'is_correct' => false],
                            ['choice_text' => 'Votre demande est en cours de traiter.', 'is_correct' => false],
                        ],
                        'explanation' => '« En cours de traitement » signifie qu’on s’occupe de la demande en ce moment.',
                    ],
                    [
                        'question' => 'Quelle phrase peut annoncer une décision administrative ?',
                        'choices' => [
                            ['choice_text' => 'Nous vous informons que votre demande a été acceptée.', 'is_correct' => true],
                            ['choice_text' => 'Votre demande, c’est bon, on a dit oui.', 'is_correct' => false],
                            ['choice_text' => 'On a dit oui à votre demande, voilà.', 'is_correct' => false],
                            ['choice_text' => 'Votre demande est acceptée, nous pensons.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase annonce la décision avec un ton neutre.',
                    ],
                    [
                        'question' => 'Quelle formule convient pour annoncer qu’une demande a été refusée ?',
                        'choices' => [
                            ['choice_text' => 'Nous regrettons de vous informer que votre demande est refusée.', 'is_correct' => true],
                            ['choice_text' => 'Votre demande est non, nous sommes désolés.', 'is_correct' => false],
                            ['choice_text' => 'On refuse votre demande, c’est comme ça.', 'is_correct' => false],
                            ['choice_text' => 'Demande refusée, merci de ne pas insister.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule annonce le refus avec des regrets, sans brusquer le lecteur.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour inviter un destinataire à consulter une information ?',
                        'choices' => [
                            ['choice_text' => 'Regardez le document joint, c’est écrit dedans.', 'is_correct' => false],
                            ['choice_text' => 'Lisez ça et revenez nous voir plus tard.', 'is_correct' => false],
                            ['choice_text' => 'Nous vous invitons à consulter les informations du document joint.', 'is_correct' => true],
                            ['choice_text' => 'Document joint ici, informations dedans.', 'is_correct' => false],
                        ],
                        'explanation' => '« Nous vous invitons à… » renvoie le lecteur vers le document avec courtoisie.',
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
