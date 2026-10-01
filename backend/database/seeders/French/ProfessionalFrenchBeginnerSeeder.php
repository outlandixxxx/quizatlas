<?php

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
                        'question' => 'Dans le monde professionnel, que signifie « un collègue » ?',
                        'choices' => [
                            ['choice_text' => 'Une personne qui travaille avec vous', 'is_correct' => true],
                            ['choice_text' => 'Un client qui achète un produit', 'is_correct' => false],
                            ['choice_text' => 'Une personne qui habite dans une autre ville', 'is_correct' => false],
                            ['choice_text' => 'Un document administratif', 'is_correct' => false],
                        ],
                        'explanation' => 'Un collègue est une personne avec laquelle on travaille dans la même entreprise ou dans le même environnement professionnel.',
                    ],
                    [
                        'question' => 'Que signifie « un responsable » dans une entreprise ?',
                        'choices' => [
                            ['choice_text' => 'Une personne qui dirige ou supervise une activité ou une équipe', 'is_correct' => true],
                            ['choice_text' => 'Un client occasionnel', 'is_correct' => false],
                            ['choice_text' => 'Un document à signer', 'is_correct' => false],
                            ['choice_text' => 'Un fournisseur de matériel uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un responsable supervise généralement une équipe, une activité ou certaines tâches.',
                    ],
                    [
                        'question' => 'Que désigne une « réunion » ?',
                        'choices' => [
                            ['choice_text' => 'Un moment où plusieurs personnes se retrouvent pour échanger sur un sujet', 'is_correct' => true],
                            ['choice_text' => 'Une pause personnelle', 'is_correct' => false],
                            ['choice_text' => 'Un contrat de travail', 'is_correct' => false],
                            ['choice_text' => 'Un produit vendu par l’entreprise', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réunion permet à plusieurs personnes de discuter, d’échanger des informations ou de prendre des décisions.',
                    ],
                    [
                        'question' => 'Dans un contexte professionnel, qu’est-ce qu’un « projet » ?',
                        'choices' => [
                            ['choice_text' => 'Un travail organisé avec un objectif à atteindre', 'is_correct' => true],
                            ['choice_text' => 'Une pause entre deux réunions', 'is_correct' => false],
                            ['choice_text' => 'Une simple salutation', 'is_correct' => false],
                            ['choice_text' => 'Une facture déjà payée', 'is_correct' => false],
                        ],
                        'explanation' => 'Un projet est un ensemble d’activités organisées pour atteindre un objectif défini.',
                    ],
                    [
                        'question' => 'Que signifie « respecter une échéance » ?',
                        'choices' => [
                            ['choice_text' => 'Terminer quelque chose avant ou à la date prévue', 'is_correct' => true],
                            ['choice_text' => 'Reporter systématiquement une tâche', 'is_correct' => false],
                            ['choice_text' => 'Annuler une réunion', 'is_correct' => false],
                            ['choice_text' => 'Changer de poste dans une entreprise', 'is_correct' => false],
                        ],
                        'explanation' => 'Une échéance est une date ou une limite fixée pour réaliser une tâche ou remettre un travail.',
                    ],
                    [
                        'question' => 'Que signifie « être disponible » au travail ?',
                        'choices' => [
                            ['choice_text' => 'Pouvoir répondre ou consacrer du temps à une demande', 'is_correct' => true],
                            ['choice_text' => 'Être absent toute la journée', 'is_correct' => false],
                            ['choice_text' => 'Avoir terminé son contrat', 'is_correct' => false],
                            ['choice_text' => 'Ne jamais participer aux réunions', 'is_correct' => false],
                        ],
                        'explanation' => 'Être disponible signifie avoir du temps ou être prêt à répondre à une demande.',
                    ],
                    [
                        'question' => 'Que signifie « un dossier » dans de nombreuses situations administratives ou professionnelles ?',
                        'choices' => [
                            ['choice_text' => 'Un ensemble de documents liés à une affaire ou à une demande', 'is_correct' => true],
                            ['choice_text' => 'Une personne qui travaille dans un bureau', 'is_correct' => false],
                            ['choice_text' => 'Une réunion très courte', 'is_correct' => false],
                            ['choice_text' => 'Un appareil informatique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un dossier rassemble généralement plusieurs documents liés à un même sujet.',
                    ],
                    [
                        'question' => 'Quelle expression signifie « commencer officiellement une réunion » ?',
                        'choices' => [
                            ['choice_text' => 'Ouvrir la réunion', 'is_correct' => true],
                            ['choice_text' => 'Fermer le dossier', 'is_correct' => false],
                            ['choice_text' => 'Signer le client', 'is_correct' => false],
                            ['choice_text' => 'Envoyer la pause', 'is_correct' => false],
                        ],
                        'explanation' => '« Ouvrir la réunion » signifie commencer officiellement la réunion.',
                    ],
                    [
                        'question' => 'Que signifie « transmettre un document » ?',
                        'choices' => [
                            ['choice_text' => 'Faire parvenir le document à une autre personne', 'is_correct' => true],
                            ['choice_text' => 'Détruire le document', 'is_correct' => false],
                            ['choice_text' => 'Modifier toutes ses pages', 'is_correct' => false],
                            ['choice_text' => 'Le conserver sans le partager', 'is_correct' => false],
                        ],
                        'explanation' => 'Transmettre un document signifie l’envoyer ou le faire parvenir à une autre personne.',
                    ],
                    [
                        'question' => 'Que signifie « confirmer un rendez-vous » ?',
                        'choices' => [
                            ['choice_text' => 'Vérifier et valider que le rendez-vous est bien maintenu', 'is_correct' => true],
                            ['choice_text' => 'Annuler le rendez-vous', 'is_correct' => false],
                            ['choice_text' => 'Changer complètement de sujet', 'is_correct' => false],
                            ['choice_text' => 'Refuser toute communication', 'is_correct' => false],
                        ],
                        'explanation' => 'Confirmer un rendez-vous signifie vérifier qu’il est bien prévu et accepté aux conditions convenues.',
                    ],
                    [
                        'question' => 'Quelle expression convient pour parler d’une tâche qui doit être faite rapidement ?',
                        'choices' => [
                            ['choice_text' => 'Une tâche urgente', 'is_correct' => true],
                            ['choice_text' => 'Une tâche touristique', 'is_correct' => false],
                            ['choice_text' => 'Une tâche personnelle uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une tâche silencieuse', 'is_correct' => false],
                        ],
                        'explanation' => 'Une tâche urgente doit être traitée rapidement en raison de son importance ou de sa contrainte de temps.',
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
                        'question' => 'Quelle formule convient pour commencer un e-mail professionnel adressé à une personne connue ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour Madame,', 'is_correct' => true],
                            ['choice_text' => 'Coucou !', 'is_correct' => false],
                            ['choice_text' => 'Yo !', 'is_correct' => false],
                            ['choice_text' => 'Salut mon ami,', 'is_correct' => false],
                        ],
                        'explanation' => '« Bonjour Madame, » est une formule de salutation polie adaptée à un échange professionnel.',
                    ],
                    [
                        'question' => 'Quel objet convient à un e-mail demandant un rendez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Demande de rendez-vous', 'is_correct' => true],
                            ['choice_text' => 'Bonjour', 'is_correct' => false],
                            ['choice_text' => 'Question importante très importante', 'is_correct' => false],
                            ['choice_text' => 'Message', 'is_correct' => false],
                        ],
                        'explanation' => 'L’objet doit résumer clairement le but de l’e-mail.',
                    ],
                    [
                        'question' => 'Quelle phrase est adaptée pour demander une information ?',
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous me préciser l’horaire de la réunion, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Dis-moi l’heure vite.', 'is_correct' => false],
                            ['choice_text' => 'Tu dois m’envoyer l’heure maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Horaire ? Répondre.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pourriez-vous... ? » est une tournure polie et professionnelle pour demander une information.',
                    ],
                    [
                        'question' => 'Quelle formule peut annoncer une pièce jointe ?',
                        'choices' => [
                            ['choice_text' => 'Vous trouverez le document en pièce jointe.', 'is_correct' => true],
                            ['choice_text' => 'Le document est quelque part.', 'is_correct' => false],
                            ['choice_text' => 'J’ai mis le document peut-être.', 'is_correct' => false],
                            ['choice_text' => 'Voici attaché document.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette formulation est courante dans les e-mails professionnels pour signaler un fichier joint.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour remercier un destinataire ?',
                        'choices' => [
                            ['choice_text' => 'Je vous remercie pour votre réponse.', 'is_correct' => true],
                            ['choice_text' => 'Merci mec pour ta réponse.', 'is_correct' => false],
                            ['choice_text' => 'Tu réponds enfin.', 'is_correct' => false],
                            ['choice_text' => 'Réponse merci toi.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation est polie et adaptée à un échange professionnel.',
                    ],
                    [
                        'question' => 'Quelle formule convient généralement pour terminer un e-mail professionnel ?',
                        'choices' => [
                            ['choice_text' => 'Cordialement,', 'is_correct' => true],
                            ['choice_text' => 'À plus !', 'is_correct' => false],
                            ['choice_text' => 'Bisous,', 'is_correct' => false],
                            ['choice_text' => 'Salut !', 'is_correct' => false],
                        ],
                        'explanation' => '« Cordialement » est une formule de fin très fréquente dans les échanges professionnels.',
                    ],
                    [
                        'question' => 'Quelle phrase peut servir à signaler un retard ?',
                        'choices' => [
                            ['choice_text' => 'Je vous informe que j’aurai environ quinze minutes de retard.', 'is_correct' => true],
                            ['choice_text' => 'J’arrive quand je peux.', 'is_correct' => false],
                            ['choice_text' => 'Je suis en retard, voilà.', 'is_correct' => false],
                            ['choice_text' => 'Retard quinze minutes peut-être.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première formulation informe clairement le destinataire du retard tout en restant polie.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour demander une confirmation ?',
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous me confirmer l’heure du rendez-vous ?', 'is_correct' => true],
                            ['choice_text' => 'Confirme l’heure immédiatement.', 'is_correct' => false],
                            ['choice_text' => 'Tu confirmes ou non ?', 'is_correct' => false],
                            ['choice_text' => 'Confirmation maintenant.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette formulation est polie et précise pour demander une confirmation.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus adaptée pour commencer un e-mail dont le but est de demander une information ?',
                        'choices' => [
                            ['choice_text' => 'Je vous contacte afin d’obtenir des informations concernant votre service.', 'is_correct' => true],
                            ['choice_text' => 'Je vous écris pour un truc.', 'is_correct' => false],
                            ['choice_text' => 'J’ai une chose à demander vite.', 'is_correct' => false],
                            ['choice_text' => 'Informations, merci.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase indique clairement et professionnellement la raison de l’e-mail.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour demander une réponse sans être trop directe ?',
                        'choices' => [
                            ['choice_text' => 'Je vous remercie par avance pour votre retour.', 'is_correct' => true],
                            ['choice_text' => 'Répondez vite.', 'is_correct' => false],
                            ['choice_text' => 'J’attends votre réponse immédiatement.', 'is_correct' => false],
                            ['choice_text' => 'Vous devez répondre aujourd’hui.', 'is_correct' => false],
                        ],
                        'explanation' => '« Je vous remercie par avance pour votre retour » est une formule polie souvent utilisée pour solliciter une réponse.',
                    ],
                    [
                        'question' => 'Quelle formule convient lorsqu’on écrit à une personne dont on ne connaît pas le nom ?',
                        'choices' => [
                            ['choice_text' => 'Madame, Monsieur,', 'is_correct' => true],
                            ['choice_text' => 'Salut tout le monde,', 'is_correct' => false],
                            ['choice_text' => 'Cher ami,', 'is_correct' => false],
                            ['choice_text' => 'Coucou,', 'is_correct' => false],
                        ],
                        'explanation' => '« Madame, Monsieur, » est une formule formelle adaptée lorsque le destinataire n’est pas identifié précisément.',
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
                            ['choice_text' => 'Bonjour à tous, merci d’être présents. Nous allons commencer.', 'is_correct' => true],
                            ['choice_text' => 'Salut, on verra bien.', 'is_correct' => false],
                            ['choice_text' => 'Commencez sans moi.', 'is_correct' => false],
                            ['choice_text' => 'Je ne sais pas pourquoi nous sommes ici.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première formulation accueille les participants et annonce clairement le début de la réunion.',
                    ],
                    [
                        'question' => 'Quelle phrase permet de demander la parole poliment ?',
                        'choices' => [
                            ['choice_text' => 'Puis-je ajouter quelque chose ?', 'is_correct' => true],
                            ['choice_text' => 'Je parle maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Écoutez-moi.', 'is_correct' => false],
                            ['choice_text' => 'Donnez-moi la parole tout de suite.', 'is_correct' => false],
                        ],
                        'explanation' => '« Puis-je ajouter quelque chose ? » est une manière polie d’intervenir dans une discussion.',
                    ],
                    [
                        'question' => 'Quelle expression peut être utilisée pour demander une précision ?',
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous préciser ce point ?', 'is_correct' => true],
                            ['choice_text' => 'Quoi ?', 'is_correct' => false],
                            ['choice_text' => 'Expliquez mieux.', 'is_correct' => false],
                            ['choice_text' => 'Point suivant, vite.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation est précise et polie pour demander davantage d’informations.',
                    ],
                    [
                        'question' => 'Quelle phrase permet d’exprimer son accord ?',
                        'choices' => [
                            ['choice_text' => 'Je suis d’accord avec cette proposition.', 'is_correct' => true],
                            ['choice_text' => 'Cette proposition, moi demain.', 'is_correct' => false],
                            ['choice_text' => 'Je propositionne d’accord.', 'is_correct' => false],
                            ['choice_text' => 'D’accord suis proposition.', 'is_correct' => false],
                        ],
                        'explanation' => '« Je suis d’accord avec cette proposition » exprime clairement l’accord.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime un désaccord de manière polie ?',
                        'choices' => [
                            ['choice_text' => 'Je comprends votre point de vue, mais je ne suis pas tout à fait d’accord.', 'is_correct' => true],
                            ['choice_text' => 'Vous avez tort.', 'is_correct' => false],
                            ['choice_text' => 'Cette idée est mauvaise.', 'is_correct' => false],
                            ['choice_text' => 'Non, impossible.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase reconnaît le point de vue de l’autre avant d’exprimer un désaccord.',
                    ],
                    [
                        'question' => 'Quelle phrase peut résumer une décision prise pendant une réunion ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons décidé de reporter la réunion à mardi.', 'is_correct' => true],
                            ['choice_text' => 'La réunion est décision demain.', 'is_correct' => false],
                            ['choice_text' => 'Nous décisionnons mardi peut-être.', 'is_correct' => false],
                            ['choice_text' => 'Décision réunion reporter nous.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase indique clairement la décision et la nouvelle date.',
                    ],
                    [
                        'question' => 'Quelle expression convient pour annoncer le point suivant de l’ordre du jour ?',
                        'choices' => [
                            ['choice_text' => 'Passons maintenant au point suivant.', 'is_correct' => true],
                            ['choice_text' => 'On quitte la réunion.', 'is_correct' => false],
                            ['choice_text' => 'Le sujet est fini depuis demain.', 'is_correct' => false],
                            ['choice_text' => 'Suivant maintenant point.', 'is_correct' => false],
                        ],
                        'explanation' => '« Passons maintenant au point suivant » permet de faire avancer la réunion de manière claire.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour demander à un collègue de répéter ?',
                        'choices' => [
                            ['choice_text' => 'Pardon, pourriez-vous répéter votre dernière remarque ?', 'is_correct' => true],
                            ['choice_text' => 'Quoi encore ?', 'is_correct' => false],
                            ['choice_text' => 'Parlez mieux.', 'is_correct' => false],
                            ['choice_text' => 'Répétez immédiatement.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation est polie et adaptée à un échange professionnel.',
                    ],
                    [
                        'question' => 'Quelle phrase peut servir à vérifier qu’un accord a été compris ?',
                        'choices' => [
                            ['choice_text' => 'Sommes-nous bien d’accord sur ce point ?', 'is_correct' => true],
                            ['choice_text' => 'Vous êtes d’accord, oui ou non ?', 'is_correct' => false],
                            ['choice_text' => 'D’accord maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Point compris forcément.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette question permet de vérifier de manière polie si tous les participants partagent le même accord.',
                    ],
                    [
                        'question' => 'Quelle phrase peut conclure une réunion ?',
                        'choices' => [
                            ['choice_text' => 'Merci à tous pour votre participation. Nous pouvons terminer la réunion.', 'is_correct' => true],
                            ['choice_text' => 'Voilà, partez maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Réunion finie, salut tout le monde.', 'is_correct' => false],
                            ['choice_text' => 'Je termine sans remercier personne.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première formulation clôt la réunion de manière claire et professionnelle.',
                    ],
                    [
                        'question' => 'Quelle expression peut introduire une nouvelle suggestion ?',
                        'choices' => [
                            ['choice_text' => 'Je voudrais proposer une autre solution.', 'is_correct' => true],
                            ['choice_text' => 'Une autre solution est moi.', 'is_correct' => false],
                            ['choice_text' => 'Je veux proposition maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Autre solution, fin.', 'is_correct' => false],
                        ],
                        'explanation' => '« Je voudrais proposer... » permet d’introduire poliment une idée différente.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour demander un délai supplémentaire ?',
                        'choices' => [
                            ['choice_text' => 'Serait-il possible d’avoir deux jours supplémentaires pour terminer ce travail ?', 'is_correct' => true],
                            ['choice_text' => 'Donnez-moi deux jours.', 'is_correct' => false],
                            ['choice_text' => 'Je prends deux jours en plus.', 'is_correct' => false],
                            ['choice_text' => 'Deux jours, c’est obligé.', 'is_correct' => false],
                        ],
                        'explanation' => '« Serait-il possible de... ? » est une formulation polie pour demander un délai supplémentaire.',
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
                            ['choice_text' => 'Bonjour Madame, comment puis-je vous aider ?', 'is_correct' => true],
                            ['choice_text' => 'Qu’est-ce que vous voulez ?', 'is_correct' => false],
                            ['choice_text' => 'Oui, c’est pour quoi ?', 'is_correct' => false],
                            ['choice_text' => 'Dites vite votre problème.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule est accueillante, polie et adaptée à une relation professionnelle avec un client.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour demander à un client d’expliquer son problème ?',
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous m’expliquer le problème rencontré ?', 'is_correct' => true],
                            ['choice_text' => 'Expliquez votre problème.', 'is_correct' => false],
                            ['choice_text' => 'Qu’est-ce qui ne va pas chez vous ?', 'is_correct' => false],
                            ['choice_text' => 'Votre problème, maintenant.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pourriez-vous m’expliquer... ? » est une demande polie et professionnelle.',
                    ],
                    [
                        'question' => 'Un client signale un problème. Quelle réponse est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'Je comprends votre situation. Nous allons vérifier cela.', 'is_correct' => true],
                            ['choice_text' => 'Ce n’est pas notre problème.', 'is_correct' => false],
                            ['choice_text' => 'Vous vous trompez certainement.', 'is_correct' => false],
                            ['choice_text' => 'Il faut attendre sans explication.', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse reconnaît le problème du client et indique qu’une vérification sera effectuée.',
                    ],
                    [
                        'question' => 'Quelle phrase permet de demander les coordonnées d’un client ?',
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous me communiquer votre numéro de téléphone, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Donnez-moi votre numéro.', 'is_correct' => false],
                            ['choice_text' => 'Je veux votre téléphone.', 'is_correct' => false],
                            ['choice_text' => 'Votre numéro tout de suite.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation utilise une demande polie adaptée à une situation professionnelle.',
                    ],
                    [
                        'question' => 'Quelle réponse convient pour annoncer qu’un service est temporairement indisponible ?',
                        'choices' => [
                            ['choice_text' => 'Je suis désolé, ce service est momentanément indisponible.', 'is_correct' => true],
                            ['choice_text' => 'Le service ne marche pas, voilà.', 'is_correct' => false],
                            ['choice_text' => 'Impossible, suivant.', 'is_correct' => false],
                            ['choice_text' => 'Ce service ne fonctionne jamais.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette réponse informe le client de manière claire, polie et professionnelle.',
                    ],
                    [
                        'question' => 'Quelle phrase peut rassurer un client ?',
                        'choices' => [
                            ['choice_text' => 'Nous allons faire le nécessaire pour résoudre le problème rapidement.', 'is_correct' => true],
                            ['choice_text' => 'Vous devez attendre, c’est tout.', 'is_correct' => false],
                            ['choice_text' => 'Ce problème est compliqué, débrouillez-vous.', 'is_correct' => false],
                            ['choice_text' => 'Je ne peux rien faire.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation montre qu’une action sera entreprise pour résoudre le problème.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour informer un client d’un délai ?',
                        'choices' => [
                            ['choice_text' => 'Votre demande sera traitée dans un délai de trois jours ouvrés.', 'is_correct' => true],
                            ['choice_text' => 'Votre demande prendra trois jours, peut-être.', 'is_correct' => false],
                            ['choice_text' => 'Attendez trois jours.', 'is_correct' => false],
                            ['choice_text' => 'Trois jours, voilà.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première formulation est précise et professionnelle.',
                    ],
                    [
                        'question' => 'Quelle formule convient après avoir résolu le problème d’un client ?',
                        'choices' => [
                            ['choice_text' => 'N’hésitez pas à nous contacter si vous avez besoin d’une autre assistance.', 'is_correct' => true],
                            ['choice_text' => 'Voilà, c’est fini.', 'is_correct' => false],
                            ['choice_text' => 'Vous pouvez partir maintenant.', 'is_correct' => false],
                            ['choice_text' => 'On en a terminé.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette formule reste disponible et courtoise tout en clôturant l’échange.',
                    ],
                    [
                        'question' => 'Quelle phrase est adaptée pour s’excuser auprès d’un client ?',
                        'choices' => [
                            ['choice_text' => 'Nous vous prions de nous excuser pour ce désagrément.', 'is_correct' => true],
                            ['choice_text' => 'Désolé, ce n’est pas notre faute.', 'is_correct' => false],
                            ['choice_text' => 'C’est arrivé, tant pis.', 'is_correct' => false],
                            ['choice_text' => 'Vous devez comprendre.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première formule est professionnelle et convient à une situation où l’entreprise présente des excuses.',
                    ],
                    [
                        'question' => 'Quelle question permet de vérifier la satisfaction du client ?',
                        'choices' => [
                            ['choice_text' => 'Êtes-vous satisfait de la solution proposée ?', 'is_correct' => true],
                            ['choice_text' => 'Vous êtes content, oui ?', 'is_correct' => false],
                            ['choice_text' => 'Ça va maintenant ?', 'is_correct' => false],
                            ['choice_text' => 'Vous acceptez, hein ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation est claire et adaptée à une communication professionnelle avec un client.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour terminer un échange avec un client ?',
                        'choices' => [
                            ['choice_text' => 'Je vous remercie et vous souhaite une excellente journée.', 'is_correct' => true],
                            ['choice_text' => 'Bon, c’est fini.', 'is_correct' => false],
                            ['choice_text' => 'Voilà, au revoir.', 'is_correct' => false],
                            ['choice_text' => 'À plus tard peut-être.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation remercie le client et termine l’échange de manière courtoise.',
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
                            ['choice_text' => 'Merci de compléter ce formulaire', 'is_correct' => true],
                            ['choice_text' => 'Veuillez supprimer ce formulaire', 'is_correct' => false],
                            ['choice_text' => 'Veuillez envoyer le formulaire vide', 'is_correct' => false],
                            ['choice_text' => 'Veuillez ignorer ce document', 'is_correct' => false],
                        ],
                        'explanation' => '« Remplir un formulaire » signifie compléter les informations demandées.',
                    ],
                    [
                        'question' => 'Quelle expression convient pour demander un document manquant ?',
                        'choices' => [
                            ['choice_text' => 'Nous vous remercions de bien vouloir nous transmettre le document manquant.', 'is_correct' => true],
                            ['choice_text' => 'Envoyez le document qui manque.', 'is_correct' => false],
                            ['choice_text' => 'Il manque un document, vite.', 'is_correct' => false],
                            ['choice_text' => 'Document manquant, donnez.', 'is_correct' => false],
                        ],
                        'explanation' => '« Nous vous remercions de bien vouloir... » est une formulation polie adaptée à une demande administrative.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour informer qu’un dossier est complet ?',
                        'choices' => [
                            ['choice_text' => 'Votre dossier est complet et peut maintenant être traité.', 'is_correct' => true],
                            ['choice_text' => 'Votre dossier est fini, voilà.', 'is_correct' => false],
                            ['choice_text' => 'Le dossier est bon peut-être.', 'is_correct' => false],
                            ['choice_text' => 'Dossier complet, suivant.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase est claire et adaptée à un contexte administratif.',
                    ],
                    [
                        'question' => 'Quelle phrase indique qu’un document a été reçu ?',
                        'choices' => [
                            ['choice_text' => 'Nous accusons réception de votre document.', 'is_correct' => true],
                            ['choice_text' => 'Nous avons votre document quelque part.', 'is_correct' => false],
                            ['choice_text' => 'Votre document est peut-être arrivé.', 'is_correct' => false],
                            ['choice_text' => 'Document reçu, terminé.', 'is_correct' => false],
                        ],
                        'explanation' => '« Accuser réception » est une expression administrative qui signifie confirmer la réception d’un document ou d’un message.',
                    ],
                    [
                        'question' => 'Quelle formulation convient pour demander une signature ?',
                        'choices' => [
                            ['choice_text' => 'Veuillez signer le document à l’endroit indiqué.', 'is_correct' => true],
                            ['choice_text' => 'Signez ici immédiatement.', 'is_correct' => false],
                            ['choice_text' => 'Vous devez mettre votre nom ici.', 'is_correct' => false],
                            ['choice_text' => 'Signature maintenant.', 'is_correct' => false],
                        ],
                        'explanation' => '« Veuillez signer... » est une formule polie et fréquente dans les documents professionnels.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour informer d’un changement d’adresse ?',
                        'choices' => [
                            ['choice_text' => 'Nous vous informons que notre adresse a changé.', 'is_correct' => true],
                            ['choice_text' => 'Notre adresse, elle a changé voilà.', 'is_correct' => false],
                            ['choice_text' => 'Nouvelle adresse, regardez.', 'is_correct' => false],
                            ['choice_text' => 'Adresse changée peut-être.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première formulation est claire et adaptée à une communication administrative.',
                    ],
                    [
                        'question' => 'Quelle formule convient pour demander des informations supplémentaires ?',
                        'choices' => [
                            ['choice_text' => 'Nous vous invitons à nous contacter pour toute information complémentaire.', 'is_correct' => true],
                            ['choice_text' => 'Contactez-nous si vous voulez savoir.', 'is_correct' => false],
                            ['choice_text' => 'Appelez si nécessaire.', 'is_correct' => false],
                            ['choice_text' => 'Informations supplémentaires, téléphone.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation est polie et courante dans la communication professionnelle.',
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
                            ['choice_text' => 'Votre demande est actuellement en cours de traitement.', 'is_correct' => true],
                            ['choice_text' => 'Votre demande attend quelque part.', 'is_correct' => false],
                            ['choice_text' => 'Nous faisons votre demande peut-être.', 'is_correct' => false],
                            ['choice_text' => 'Demande maintenant traitement.', 'is_correct' => false],
                        ],
                        'explanation' => '« En cours de traitement » signifie que le dossier ou la demande est actuellement traité.',
                    ],
                    [
                        'question' => 'Quelle phrase peut annoncer une décision administrative ?',
                        'choices' => [
                            ['choice_text' => 'Nous vous informons que votre demande a été acceptée.', 'is_correct' => true],
                            ['choice_text' => 'Votre demande, c’est bon.', 'is_correct' => false],
                            ['choice_text' => 'On a dit oui, voilà.', 'is_correct' => false],
                            ['choice_text' => 'Demande acceptée peut-être.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation est claire, neutre et adaptée à une notification professionnelle.',
                    ],
                    [
                        'question' => 'Quelle formule convient pour annoncer qu’une demande a été refusée ?',
                        'choices' => [
                            ['choice_text' => 'Nous regrettons de vous informer que votre demande n’a pas été retenue.', 'is_correct' => true],
                            ['choice_text' => 'Votre demande est non.', 'is_correct' => false],
                            ['choice_text' => 'On refuse votre demande, voilà.', 'is_correct' => false],
                            ['choice_text' => 'Demande refusée, terminé.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette formulation reste neutre et professionnelle tout en annonçant clairement le refus.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour inviter un destinataire à consulter une information ?',
                        'choices' => [
                            ['choice_text' => 'Nous vous invitons à consulter les informations disponibles sur le document joint.', 'is_correct' => true],
                            ['choice_text' => 'Regardez le document.', 'is_correct' => false],
                            ['choice_text' => 'Lisez ça.', 'is_correct' => false],
                            ['choice_text' => 'Document ici.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation est polie et adaptée à un contexte professionnel ou administratif.',
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
