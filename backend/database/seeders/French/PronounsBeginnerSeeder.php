<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PronounsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'pronouns')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les pronoms sujets essentiels',
                'description' => 'Identifiez et utilisez correctement les principaux pronoms personnels sujets dans des phrases simples et des situations courantes.',
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Dans « Marie travaille à la bibliothèque », quel pronom peut remplacer « Marie » ?',
                        'choices' => [
                            ['choice_text' => 'Il', 'is_correct' => false],
                            ['choice_text' => 'Elle', 'is_correct' => true],
                            ['choice_text' => 'Nous', 'is_correct' => false],
                            ['choice_text' => 'Ils', 'is_correct' => false],
                        ],
                        'explanation' => '« Marie » désigne une seule personne féminine. Le pronom sujet correspondant est donc « elle ».',
                    ],
                    [
                        'question' => 'Quel pronom convient dans « ___ habitons à Rabat » ?',
                        'choices' => [
                            ['choice_text' => 'Nous', 'is_correct' => true],
                            ['choice_text' => 'Vous', 'is_correct' => false],
                            ['choice_text' => 'Ils', 'is_correct' => false],
                            ['choice_text' => 'Tu', 'is_correct' => false],
                        ],
                        'explanation' => 'La terminaison « -ons » correspond ici au verbe « habiter » avec le pronom « nous » : « nous habitons ».',
                    ],
                    [
                        'question' => 'Un étudiant parle de lui-même. Quel pronom utilise-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Tu', 'is_correct' => false],
                            ['choice_text' => 'Il', 'is_correct' => false],
                            ['choice_text' => 'Je', 'is_correct' => true],
                            ['choice_text' => 'Vous', 'is_correct' => false],
                        ],
                        'explanation' => '« Je » est le pronom personnel sujet utilisé par la personne qui parle pour parler d’elle-même.',
                    ],
                    [
                        'question' => 'Vous parlez à une seule amie, dans une conversation entre amis. Quel pronom sujet utilisez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Vous', 'is_correct' => false],
                            ['choice_text' => 'Elle', 'is_correct' => false],
                            ['choice_text' => 'Ils', 'is_correct' => false],
                            ['choice_text' => 'Tu', 'is_correct' => true],
                        ],
                        'explanation' => 'Entre amis, on dit « tu » à une seule personne. « Vous » s’emploie avec plusieurs personnes ou dans un cadre formel.',
                    ],
                    [
                        'question' => 'Choisissez la phrase bien accordée.',
                        'choices' => [
                            ['choice_text' => 'Ils arrivent à huit heures.', 'is_correct' => true],
                            ['choice_text' => 'Il arrivent à huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Ils arrive à huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Elles arrive à huit heures.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pronom « ils » est pluriel et demande ici la forme verbale « arrivent ». La phrase est donc correctement accordée.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour parler de deux étudiantes ?',
                        'choices' => [
                            ['choice_text' => 'Ils révisent ensemble.', 'is_correct' => false],
                            ['choice_text' => 'Elle révisent ensemble.', 'is_correct' => false],
                            ['choice_text' => 'Nous révisent ensemble.', 'is_correct' => false],
                            ['choice_text' => 'Elles révisent ensemble.', 'is_correct' => true],
                        ],
                        'explanation' => 'Deux étudiantes forment un groupe féminin pluriel. Le pronom sujet correspondant est « elles ».',
                    ],
                    [
                        'question' => 'Quel pronom remplace « Paul et moi » dans « Paul et moi allons au cinéma » ?',
                        'choices' => [
                            ['choice_text' => 'Ils', 'is_correct' => false],
                            ['choice_text' => 'Nous', 'is_correct' => true],
                            ['choice_text' => 'Vous', 'is_correct' => false],
                            ['choice_text' => 'On', 'is_correct' => false],
                        ],
                        'explanation' => '« Paul et moi » désigne la personne qui parle et une autre personne. Le pronom sujet correspondant est « nous ».',
                    ],
                    [
                        'question' => 'Quel pronom peut remplacer « mes parents » ?',
                        'choices' => [
                            ['choice_text' => 'Elle', 'is_correct' => false],
                            ['choice_text' => 'Tu', 'is_correct' => false],
                            ['choice_text' => 'Ils', 'is_correct' => true],
                            ['choice_text' => 'Je', 'is_correct' => false],
                        ],
                        'explanation' => '« Mes parents » désigne plusieurs personnes. Dans cette phrase, le pronom masculin pluriel « ils » convient.',
                    ],
                    [
                        'question' => 'Vous parlez à plusieurs étudiants. Quel pronom utilisez-vous pour vous adresser directement à eux ?',
                        'choices' => [
                            ['choice_text' => 'Nous', 'is_correct' => false],
                            ['choice_text' => 'Ils', 'is_correct' => false],
                            ['choice_text' => 'Vous', 'is_correct' => true],
                            ['choice_text' => 'Tu', 'is_correct' => false],
                        ],
                        'explanation' => '« Vous » sert notamment à s’adresser directement à plusieurs personnes. « Ils » parlerait de ces personnes, sans s’adresser directement à elles.',
                    ],
                    [
                        'question' => 'Au marché, quelqu’un propose : « On y va samedi ? » Quelle phrase utilise bien « on » ?',
                        'choices' => [
                            ['choice_text' => 'On allez au marché samedi.', 'is_correct' => false],
                            ['choice_text' => 'On va au marché samedi.', 'is_correct' => true],
                            ['choice_text' => 'On vont au marché samedi.', 'is_correct' => false],
                            ['choice_text' => 'On aller au marché samedi.', 'is_correct' => false],
                        ],
                        'explanation' => '« On » se conjugue comme « il » : « on va ». À l’oral, il remplace souvent « nous ».',
                    ],
                    [
                        'question' => 'Le professeur demande : « Qui veut répondre ? » Vous levez la main. Que dites-vous ?',
                        'choices' => [
                            ['choice_text' => 'Je veux répondre.', 'is_correct' => true],
                            ['choice_text' => 'Il veux répondre.', 'is_correct' => false],
                            ['choice_text' => 'Tu veux répondre.', 'is_correct' => false],
                            ['choice_text' => 'Nous veut répondre.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’étudiant parle de lui-même et utilise donc « je ». Le verbe vouloir devient « je veux ».',
                    ],
                ],
            ],
            [
                'title' => 'Remplacer les noms par des pronoms',
                'description' => 'Apprenez à éviter les répétitions en remplaçant correctement des personnes et des groupes nominaux par des pronoms personnels simples.',
                'duration' => 25,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Le directeur dit à deux élèves : « ___ êtes en retard. » Quel pronom complète la phrase ?',
                        'choices' => [
                            ['choice_text' => 'Ils', 'is_correct' => false],
                            ['choice_text' => 'Nous', 'is_correct' => false],
                            ['choice_text' => 'Vous', 'is_correct' => true],
                            ['choice_text' => 'Tu', 'is_correct' => false],
                        ],
                        'explanation' => 'Le directeur s’adresse à deux élèves : il utilise « vous ».',
                    ],
                    [
                        'question' => '« Karim et Youssef arrivent demain. ___ prennent le train. »',
                        'choices' => [
                            ['choice_text' => 'Elles', 'is_correct' => false],
                            ['choice_text' => 'Ils', 'is_correct' => true],
                            ['choice_text' => 'Il', 'is_correct' => false],
                            ['choice_text' => 'On', 'is_correct' => false],
                        ],
                        'explanation' => 'Karim et Youssef forment un groupe masculin pluriel. Le pronom correspondant est « ils ».',
                    ],
                    [
                        'question' => '« Ma sœur et moi préparons le dîner. » Quel pronom remplace « ma sœur et moi » ?',
                        'choices' => [
                            ['choice_text' => 'Elles', 'is_correct' => false],
                            ['choice_text' => 'Vous', 'is_correct' => false],
                            ['choice_text' => 'Nous', 'is_correct' => true],
                            ['choice_text' => 'Ils', 'is_correct' => false],
                        ],
                        'explanation' => 'Le groupe comprend la personne qui parle et sa sœur. Le pronom sujet correspondant est « nous ».',
                    ],
                    [
                        'question' => 'Madame Tazi, la directrice, entre dans la salle. Quelle phrase suivante évite de répéter son nom ?',
                        'choices' => [
                            ['choice_text' => 'Il s’assoit derrière le bureau.', 'is_correct' => false],
                            ['choice_text' => 'Elles s’assoient derrière le bureau.', 'is_correct' => false],
                            ['choice_text' => 'Nous nous asseyons derrière le bureau.', 'is_correct' => false],
                            ['choice_text' => 'Elle s’assoit derrière le bureau.', 'is_correct' => true],
                        ],
                        'explanation' => 'La directrice est une seule femme : on la reprend par « elle ».',
                    ],
                    [
                        'question' => '« Les voitures sont devant la maison. ___ sont rouges. »',
                        'choices' => [
                            ['choice_text' => 'Ils', 'is_correct' => false],
                            ['choice_text' => 'Elle', 'is_correct' => false],
                            ['choice_text' => 'Vous', 'is_correct' => false],
                            ['choice_text' => 'Elles', 'is_correct' => true],
                        ],
                        'explanation' => '« Voitures » est féminin pluriel. Le pronom qui reprend ce nom est donc « elles ».',
                    ],
                    [
                        'question' => '« Le livre est sur le bureau. ___ est à Paul. »',
                        'choices' => [
                            ['choice_text' => 'Elle', 'is_correct' => false],
                            ['choice_text' => 'Ils', 'is_correct' => false],
                            ['choice_text' => 'Il', 'is_correct' => true],
                            ['choice_text' => 'Elles', 'is_correct' => false],
                        ],
                        'explanation' => '« Livre » est masculin singulier. Le pronom sujet qui le remplace est « il ».',
                    ],
                    [
                        'question' => '« La porte est ouverte. ___ donne sur le jardin. »',
                        'choices' => [
                            ['choice_text' => 'Il', 'is_correct' => false],
                            ['choice_text' => 'Elle', 'is_correct' => true],
                            ['choice_text' => 'Ils', 'is_correct' => false],
                            ['choice_text' => 'On', 'is_correct' => false],
                        ],
                        'explanation' => '« Porte » est féminin singulier. Le pronom sujet correspondant est donc « elle ».',
                    ],
                    [
                        'question' => '« Mon frère et ma sœur étudient ici. » Quel pronom peut les remplacer ?',
                        'choices' => [
                            ['choice_text' => 'Elles', 'is_correct' => false],
                            ['choice_text' => 'Nous', 'is_correct' => false],
                            ['choice_text' => 'Elle', 'is_correct' => false],
                            ['choice_text' => 'Ils', 'is_correct' => true],
                        ],
                        'explanation' => 'Le groupe est mixte : un frère et une sœur. L’accord traditionnel du pronom pluriel se fait avec « ils ».',
                    ],
                    [
                        'question' => 'Quelle reformulation évite la répétition ? « Nadia habite à Rabat. Nadia travaille à Casablanca. »',
                        'choices' => [
                            ['choice_text' => 'Nadia habite à Rabat. Elle travaille à Casablanca.', 'is_correct' => true],
                            ['choice_text' => 'Nadia habite à Rabat. Il travaille à Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'Nadia habite à Rabat. Elles travaillent à Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'Nadia habite à Rabat. Nous travaille à Casablanca.', 'is_correct' => false],
                        ],
                        'explanation' => 'Nadia est une personne féminine singulière. « Elle » évite la répétition du prénom et conserve l’accord correct avec le verbe « travaille ».',
                    ],
                    [
                        'question' => '« Toi et ton frère, vous venez ce soir ? » Quel pronom reprend « toi et ton frère » ?',
                        'choices' => [
                            ['choice_text' => 'Vous', 'is_correct' => true],
                            ['choice_text' => 'Ils', 'is_correct' => false],
                            ['choice_text' => 'Nous', 'is_correct' => false],
                            ['choice_text' => 'Tu', 'is_correct' => false],
                        ],
                        'explanation' => 'On s’adresse à deux personnes dont une est la personne à qui l’on parle : le pronom est « vous ».',
                    ],
                    [
                        'question' => 'Après la phrase « Les étudiants arrivent. », quelle suite est bien construite ?',
                        'choices' => [
                            ['choice_text' => 'Elle attendent le professeur.', 'is_correct' => false],
                            ['choice_text' => 'Ils attendent le professeur.', 'is_correct' => true],
                            ['choice_text' => 'Il attend le professeur.', 'is_correct' => false],
                            ['choice_text' => 'Nous attend le professeur.', 'is_correct' => false],
                        ],
                        'explanation' => '« Les étudiants » est un masculin pluriel : on le reprend par « ils ».',
                    ],
                    [
                        'question' => 'Dans « La voiture est neuve. Elle est encore au garage », que reprend le pronom « elle » ?',
                        'choices' => [
                            ['choice_text' => '« La voiture », un nom féminin singulier', 'is_correct' => true],
                            ['choice_text' => '« Le garage », un nom masculin singulier', 'is_correct' => false],
                            ['choice_text' => '« Les voitures », un nom féminin pluriel', 'is_correct' => false],
                            ['choice_text' => '« Une voiture », un nom masculin singulier', 'is_correct' => false],
                        ],
                        'explanation' => 'Le genre du pronom suit le nom repris : voiture est féminin singulier, donc « elle ».',
                    ],
                ],
            ],
            [
                'title' => 'Les pronoms compléments dans les phrases simples',
                'description' => 'Distinguez les pronoms sujets des pronoms compléments et utilisez me, te, le, la, les, lui et leur dans des phrases accessibles.',
                'duration' => 30,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => '« Tu regardes Paul ? Oui, je ___ regarde. »',
                        'choices' => [
                            ['choice_text' => 'lui', 'is_correct' => false],
                            ['choice_text' => 'les', 'is_correct' => false],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => true],
                        ],
                        'explanation' => 'Paul est le complément direct du verbe « regarder ». Pour un nom masculin singulier, on utilise le pronom COD « le ».',
                    ],
                    [
                        'question' => '« Tu connais Marie ? Oui, je ___ connais. »',
                        'choices' => [
                            ['choice_text' => 'lui', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'leur', 'is_correct' => false],
                            ['choice_text' => 'la', 'is_correct' => true],
                        ],
                        'explanation' => 'Marie est le complément direct du verbe « connaître ». Comme il s’agit d’une personne féminine singulière, le pronom COD est « la ».',
                    ],
                    [
                        'question' => '« J’aime mes amis. Je ___ invite souvent chez moi. »',
                        'choices' => [
                            ['choice_text' => 'leur', 'is_correct' => false],
                            ['choice_text' => 'lui', 'is_correct' => false],
                            ['choice_text' => 'les', 'is_correct' => true],
                            ['choice_text' => 'ils', 'is_correct' => false],
                        ],
                        'explanation' => '« Mes amis » est le complément direct du verbe « inviter ». Le pronom COD masculin pluriel est « les ».',
                    ],
                    [
                        'question' => '« Tu téléphones à ta mère ? » — « Oui, je ___ téléphone. »',
                        'choices' => [
                            ['choice_text' => 'lui', 'is_correct' => true],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'les', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec le verbe « téléphoner à », la personne est un complément indirect. Pour une personne singulière, on utilise « lui ».',
                    ],
                    [
                        'question' => '« Vous écrivez à vos parents ? » — « Oui, je ___ écris chaque semaine. »',
                        'choices' => [
                            ['choice_text' => 'les', 'is_correct' => false],
                            ['choice_text' => 'lui', 'is_correct' => false],
                            ['choice_text' => 'leur', 'is_correct' => true],
                            ['choice_text' => 'eux', 'is_correct' => false],
                        ],
                        'explanation' => '« Vos parents » est un complément indirect pluriel introduit par « à ». Le pronom correspondant est « leur ».',
                    ],
                    [
                        'question' => 'Vous parlez à votre voisin tous les jours. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Je le parle tous les jours.', 'is_correct' => false],
                            ['choice_text' => 'Je lui parle tous les jours.', 'is_correct' => true],
                            ['choice_text' => 'Je les parle tous les jours.', 'is_correct' => false],
                            ['choice_text' => 'Je leur parle à elle.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe « parler à quelqu’un » demande un complément indirect. Avec une personne singulière, on utilise donc « lui ».',
                    ],
                    [
                        'question' => '« Elle aide ses parents. » Comment remplacer « ses parents » par un pronom ?',
                        'choices' => [
                            ['choice_text' => 'Elle leur aide.', 'is_correct' => false],
                            ['choice_text' => 'Elle lui aide.', 'is_correct' => false],
                            ['choice_text' => 'Elle eux aide.', 'is_correct' => false],
                            ['choice_text' => 'Elle les aide.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le verbe « aider » se construit directement avec son complément : aider quelqu’un. « Ses parents » est donc un COD et devient « les ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte avec « me » ?',
                        'choices' => [
                            ['choice_text' => 'Tu moi regardes.', 'is_correct' => false],
                            ['choice_text' => 'Tu me regardes.', 'is_correct' => true],
                            ['choice_text' => 'Tu me regardent.', 'is_correct' => false],
                            ['choice_text' => 'Tu regardes me.', 'is_correct' => false],
                        ],
                        'explanation' => '« Me » est un pronom complément placé avant le verbe conjugué dans cette phrase : « tu me regardes ».',
                    ],
                    [
                        'question' => '« Le professeur parle aux étudiants. » Quelle reprise pronominale est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Le professeur les parle.', 'is_correct' => false],
                            ['choice_text' => 'Le professeur leur parle.', 'is_correct' => true],
                            ['choice_text' => 'Le professeur lui parle.', 'is_correct' => false],
                            ['choice_text' => 'Le professeur eux parle.', 'is_correct' => false],
                        ],
                        'explanation' => '« Parler aux étudiants » demande un complément indirect pluriel. Le pronom correspondant est « leur ».',
                    ],
                    [
                        'question' => 'Quelle phrase remplace correctement « J’écoute la radio » ?',
                        'choices' => [
                            ['choice_text' => 'Je l’écoute.', 'is_correct' => true],
                            ['choice_text' => 'Je lui écoute.', 'is_correct' => false],
                            ['choice_text' => 'Je la écoute.', 'is_correct' => false],
                            ['choice_text' => 'J’écoute elle.', 'is_correct' => false],
                        ],
                        'explanation' => '« La radio » est un complément direct féminin singulier. Le pronom « la » devient « l’ » devant le verbe commençant par une voyelle : « je l’écoute ».',
                    ],
                ],
            ],
            [
                'title' => 'Pronoms possessifs et démonstratifs',
                'description' => 'Apprenez à reconnaître quelques pronoms qui expriment la possession ou remplacent un groupe nominal déjà connu dans le contexte.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Dans « Mon téléphone est ici, le tien est sur la table », que remplace « le tien » ?',
                        'choices' => [
                            ['choice_text' => 'Ton téléphone', 'is_correct' => true],
                            ['choice_text' => 'Ta table', 'is_correct' => false],
                            ['choice_text' => 'Ton sac', 'is_correct' => false],
                            ['choice_text' => 'Tes clés', 'is_correct' => false],
                        ],
                        'explanation' => '« Le tien » est un pronom possessif masculin singulier et reprend ici « ton téléphone », en évitant de répéter le nom.',
                    ],
                    [
                        'question' => 'Ma voiture est rouge, mais celle de Paul est noire. Quel pronom possessif reprend « la voiture de Paul » ?',
                        'choices' => [
                            ['choice_text' => 'Le sien', 'is_correct' => false],
                            ['choice_text' => 'La sienne', 'is_correct' => true],
                            ['choice_text' => 'Les siennes', 'is_correct' => false],
                            ['choice_text' => 'La leur', 'is_correct' => false],
                        ],
                        'explanation' => '« Voiture » est féminin singulier et la voiture est à Paul, seul : « la sienne ».',
                    ],
                    [
                        'question' => '« Mes clés sont sur la table, mais je ne trouve pas les tiennes. » Que reprend « les tiennes » ?',
                        'choices' => [
                            ['choice_text' => 'Mes clés', 'is_correct' => false],
                            ['choice_text' => 'Ses clés', 'is_correct' => false],
                            ['choice_text' => 'Tes cartes', 'is_correct' => false],
                            ['choice_text' => 'Tes clés', 'is_correct' => true],
                        ],
                        'explanation' => '« Les tiennes » remplace « tes clés » : féminin pluriel, et elles appartiennent à la personne à qui l’on parle.',
                    ],
                    [
                        'question' => 'Vous montrez un stylo précis. Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'Celle-ci est à moi.', 'is_correct' => false],
                            ['choice_text' => 'Ceux-ci est à moi.', 'is_correct' => false],
                            ['choice_text' => 'Celles-ci est à moi.', 'is_correct' => false],
                            ['choice_text' => 'Celui-ci est à moi.', 'is_correct' => true],
                        ],
                        'explanation' => '« Stylo » est masculin singulier. Le pronom démonstratif correspondant est « celui-ci ».',
                    ],
                    [
                        'question' => 'Vous montrez une seule chaise. Quel pronom démonstratif convient ?',
                        'choices' => [
                            ['choice_text' => 'Celui-ci', 'is_correct' => false],
                            ['choice_text' => 'Ceux-ci', 'is_correct' => false],
                            ['choice_text' => 'Celle-ci', 'is_correct' => true],
                            ['choice_text' => 'Celles-ci', 'is_correct' => false],
                        ],
                        'explanation' => '« Chaise » est féminin singulier. Le pronom démonstratif approprié est donc « celle-ci ».',
                    ],
                    [
                        'question' => 'Quel pronom convient pour remplacer « les livres de Paul » ?',
                        'choices' => [
                            ['choice_text' => 'La sienne', 'is_correct' => false],
                            ['choice_text' => 'Le sien', 'is_correct' => false],
                            ['choice_text' => 'Les siennes', 'is_correct' => false],
                            ['choice_text' => 'Les siens', 'is_correct' => true],
                        ],
                        'explanation' => '« Livres » est masculin pluriel. Le pronom possessif masculin pluriel correspondant à « ses livres » est « les siens ».',
                    ],
                    [
                        'question' => 'Vous comparez votre sac à celui d’un ami que vous tutoyez. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Mon sac est lourd, mais la tienne est légère.', 'is_correct' => false],
                            ['choice_text' => 'Mon sac est lourd, mais les tiens est léger.', 'is_correct' => false],
                            ['choice_text' => 'Mon sac est lourd, mais le tien est léger.', 'is_correct' => true],
                            ['choice_text' => 'Mon sac est lourd, mais celui tien est léger.', 'is_correct' => false],
                        ],
                        'explanation' => '« Sac » est masculin singulier. Le pronom possessif correspondant à « ton sac » est donc « le tien ».',
                    ],
                    [
                        'question' => 'Vous parlez de plusieurs photos et dites : « Celles-ci sont récentes. » Que remplace « celles-ci » ?',
                        'choices' => [
                            ['choice_text' => 'Un téléphone', 'is_correct' => false],
                            ['choice_text' => 'Une photo', 'is_correct' => false],
                            ['choice_text' => 'Des photos', 'is_correct' => true],
                            ['choice_text' => 'Des livres', 'is_correct' => false],
                        ],
                        'explanation' => '« Celles-ci » est un pronom démonstratif féminin pluriel. Il peut remplacer ici « les photos » ou « ces photos ».',
                    ],
                    [
                        'question' => 'Un collègue dit à une autre équipe : « Votre projet est prêt, mais ___ est plus simple. » Quel pronom possessif désigne le projet de son équipe ?',
                        'choices' => [
                            ['choice_text' => 'la nôtre', 'is_correct' => false],
                            ['choice_text' => 'le nôtre', 'is_correct' => true],
                            ['choice_text' => 'les nôtres', 'is_correct' => false],
                            ['choice_text' => 'le notre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le projet est masculin singulier et appartient à « nous » : « le nôtre ».',
                    ],
                    [
                        'question' => 'Dans « Cette robe est à moi, celle-là est à ma sœur », que désigne « celle-là » ?',
                        'choices' => [
                            ['choice_text' => 'Une autre robe, montrée dans la situation', 'is_correct' => true],
                            ['choice_text' => 'La sœur elle-même', 'is_correct' => false],
                            ['choice_text' => 'Plusieurs robes de la boutique', 'is_correct' => false],
                            ['choice_text' => 'Le magasin où l’on a acheté la robe', 'is_correct' => false],
                        ],
                        'explanation' => '« Celle-là » est un démonstratif féminin singulier : il désigne une autre robe que l’on montre.',
                    ],
                ],
            ],
            [
                'title' => 'Y et en dans des situations simples',
                'description' => 'Découvrez les usages essentiels de « y » et « en » pour remplacer des compléments de lieu ou des groupes introduits par « de ».',
                'duration' => 30,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => '« Tu vas à la bibliothèque ? » — « Oui, j’___ vais chaque mardi. »',
                        'choices' => [
                            ['choice_text' => 'y', 'is_correct' => true],
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'lui', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pronom « y » peut remplacer un complément de lieu introduit par « à » : « je vais à la bibliothèque » devient « j’y vais ».',
                    ],
                    [
                        'question' => '« Vous pensez à votre examen ? » — « Oui, j’___ pense beaucoup. »',
                        'choices' => [
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'y', 'is_correct' => true],
                            ['choice_text' => 'lui', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « penser à quelque chose », « y » peut remplacer le complément introduit par « à » : « j’y pense ».',
                    ],
                    [
                        'question' => '« Tu reviens de Paris ? » — « Oui, j’___ reviens ce soir. »',
                        'choices' => [
                            ['choice_text' => 'y', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => true],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'lui', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pronom « en » peut remplacer un lieu introduit par « de » : « je reviens de Paris » devient « j’en reviens ».',
                    ],
                    [
                        'question' => '« Tu parles de ce livre ? » — « Oui, j’___ parle souvent. »',
                        'choices' => [
                            ['choice_text' => 'y', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'lui', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « parler de quelque chose », le pronom « en » remplace le complément introduit par « de ».',
                    ],
                    [
                        'question' => '« Tu habites à Casablanca ? » — « Oui, j’___ habite depuis 2020. »',
                        'choices' => [
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'y', 'is_correct' => true],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'lui', 'is_correct' => false],
                        ],
                        'explanation' => '« Y » remplace un lieu introduit par « à » : j’habite à Casablanca → j’y habite.',
                    ],
                    [
                        'question' => 'Quelle transformation est correcte ? « Nous revenons de la gare. »',
                        'choices' => [
                            ['choice_text' => 'Nous la revenons.', 'is_correct' => false],
                            ['choice_text' => 'Nous leur revenons.', 'is_correct' => false],
                            ['choice_text' => 'Nous en y revenons.', 'is_correct' => false],
                            ['choice_text' => 'Nous en revenons.', 'is_correct' => true],
                        ],
                        'explanation' => '« De la gare » est un complément introduit par « de ». Il peut être remplacé par « en » : « nous en revenons ».',
                    ],
                    [
                        'question' => '« Tu as besoin de ce document ? » — « Oui, j’___ ai besoin. »',
                        'choices' => [
                            ['choice_text' => 'y', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => true],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'lui', 'is_correct' => false],
                        ],
                        'explanation' => 'L’expression « avoir besoin de » est construite avec « de ». Le pronom « en » peut remplacer ce complément : « j’en ai besoin ».',
                    ],
                    [
                        'question' => 'Quelle phrase est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Je en vais demain.', 'is_correct' => false],
                            ['choice_text' => 'Je lui vais demain.', 'is_correct' => false],
                            ['choice_text' => 'J’y vais demain.', 'is_correct' => true],
                            ['choice_text' => 'Je la vais demain.', 'is_correct' => false],
                        ],
                        'explanation' => '« J’y vais » est une expression très courante lorsque « y » remplace un lieu déjà connu dans le contexte.',
                    ],
                    [
                        'question' => 'Elle rêve de ce voyage : elle ___ rêve depuis longtemps.',
                        'choices' => [
                            ['choice_text' => 'en', 'is_correct' => true],
                            ['choice_text' => 'y', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'lui', 'is_correct' => false],
                        ],
                        'explanation' => '« Rêver de » : le complément introduit par « de » est remplacé par « en ».',
                    ],
                    [
                        'question' => 'Quel pronom complète « Elle tient à son travail. Elle ___ tient beaucoup. » ?',
                        'choices' => [
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'lui', 'is_correct' => false],
                            ['choice_text' => 'y', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « tenir à quelque chose », le complément est introduit par « à ». On peut donc le remplacer par « y » : « elle y tient beaucoup ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient correctement « en » pour parler d’une quantité ?',
                        'choices' => [
                            ['choice_text' => 'Tu veux des pommes ? Oui, j’en veux deux.', 'is_correct' => true],
                            ['choice_text' => 'Tu veux des pommes ? Oui, j’y veux deux.', 'is_correct' => false],
                            ['choice_text' => 'Tu veux des pommes ? Oui, je les veux deux.', 'is_correct' => false],
                            ['choice_text' => 'Tu veux des pommes ? Oui, je lui veux deux.', 'is_correct' => false],
                        ],
                        'explanation' => '« En » peut remplacer un groupe introduit par « des » lorsqu’une quantité est ensuite précisée : « j’en veux deux ».',
                    ],
                    [
                        'question' => '« Tu as répondu à ce message ? » — « Oui, j’___ ai répondu hier. »',
                        'choices' => [
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'y', 'is_correct' => true],
                            ['choice_text' => 'lui', 'is_correct' => false],
                        ],
                        'explanation' => '« Répondre à quelque chose » : le complément en « à » est repris par « y ».',
                    ],
                ],
            ],
            [
                'title' => 'La place des pronoms et les erreurs fréquentes',
                'description' => 'Entraînez-vous à placer les pronoms correctement avant le verbe et à corriger des erreurs fréquentes dans des phrases de niveau débutant.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Choisissez la phrase correcte.',
                        'choices' => [
                            ['choice_text' => 'Je connais le.', 'is_correct' => false],
                            ['choice_text' => 'Le je connais.', 'is_correct' => false],
                            ['choice_text' => 'Je lui connais.', 'is_correct' => false],
                            ['choice_text' => 'Je le connais.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le pronom COD « le » se place avant le verbe conjugué : « je le connais ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit « Je lui vois tous les jours » en parlant de sa voisine. Quelle correction est juste ?',
                        'choices' => [
                            ['choice_text' => 'Je le vois tous les jours.', 'is_correct' => false],
                            ['choice_text' => 'Je la vois tous les jours.', 'is_correct' => true],
                            ['choice_text' => 'Je les vois tous les jours.', 'is_correct' => false],
                            ['choice_text' => 'Je leur vois tous les jours.', 'is_correct' => false],
                        ],
                        'explanation' => '« Voir quelqu’un » est un complément direct. Pour une femme seule : « la ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Je vois eux tous les matins. » Quelle correction est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Je les vois tous les matins.', 'is_correct' => true],
                            ['choice_text' => 'Je leur vois tous les matins.', 'is_correct' => false],
                            ['choice_text' => 'Je lui vois tous les matins.', 'is_correct' => false],
                            ['choice_text' => 'Je eux vois tous les matins.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le complément direct pluriel se remplace par « les » placé devant le verbe.',
                    ],
                    [
                        'question' => 'Choisissez la négation correcte.',
                        'choices' => [
                            ['choice_text' => 'Je ne le connais pas.', 'is_correct' => true],
                            ['choice_text' => 'Je ne connais le pas.', 'is_correct' => false],
                            ['choice_text' => 'Je le ne connais pas.', 'is_correct' => false],
                            ['choice_text' => 'Je ne lui connais pas.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une phrase négative, le pronom complément reste placé avant le verbe : « je ne le connais pas ».',
                    ],
                    [
                        'question' => '« Vous m’entendez, madame ? » — « Oui, je ___ entends très bien. »',
                        'choices' => [
                            ['choice_text' => 'me', 'is_correct' => false],
                            ['choice_text' => 'lui', 'is_correct' => false],
                            ['choice_text' => 'vous', 'is_correct' => true],
                            ['choice_text' => 'te', 'is_correct' => false],
                        ],
                        'explanation' => 'Je m’adresse à madame avec « vous », donc je réponds « je vous entends ».',
                    ],
                    [
                        'question' => 'Les enfants rendent visite à leur grand-mère. Quelle reprise est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Les enfants la rendent visite.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants lui rendent visite.', 'is_correct' => true],
                            ['choice_text' => 'Les enfants leur rendent visite.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants eux rendent visite.', 'is_correct' => false],
                        ],
                        'explanation' => '« Rendre visite à quelqu’un » : la grand-mère est une seule personne, donc « lui ».',
                    ],
                    [
                        'question' => 'Quelle phrase place correctement « en » ?',
                        'choices' => [
                            ['choice_text' => 'Je prends en un.', 'is_correct' => false],
                            ['choice_text' => 'En je prends un.', 'is_correct' => false],
                            ['choice_text' => 'J’en prends un.', 'is_correct' => true],
                            ['choice_text' => 'Je le en prends un.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la structure « j’en prends un », le pronom « en » se place avant le verbe conjugué « prends ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « y » ?',
                        'choices' => [
                            ['choice_text' => 'Nous allons y demain.', 'is_correct' => false],
                            ['choice_text' => 'Nous y allons demain.', 'is_correct' => true],
                            ['choice_text' => 'Y nous allons demain.', 'is_correct' => false],
                            ['choice_text' => 'Nous le allons demain.', 'is_correct' => false],
                        ],
                        'explanation' => '« Y » se place avant le verbe conjugué dans cette phrase : « nous y allons ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Je regarde lui. » Quelle correction standard faut-il faire ?',
                        'choices' => [
                            ['choice_text' => 'Je lui regarde.', 'is_correct' => false],
                            ['choice_text' => 'Je regarde le.', 'is_correct' => false],
                            ['choice_text' => 'Je il regarde.', 'is_correct' => false],
                            ['choice_text' => 'Je le regarde.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le verbe « regarder » prend un complément direct. Avec une personne masculine singulière, on utilise « le », placé avant le verbe : « je le regarde ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte avec « me » et « te » ?',
                        'choices' => [
                            ['choice_text' => 'Tu me comprends et je te comprends.', 'is_correct' => true],
                            ['choice_text' => 'Tu moi comprends et je toi comprends.', 'is_correct' => false],
                            ['choice_text' => 'Tu me comprends et je te comprendre.', 'is_correct' => false],
                            ['choice_text' => 'Tu me comprend et je te comprends.', 'is_correct' => false],
                        ],
                        'explanation' => '« Me » et « te » se placent avant le verbe. Le verbe « comprendre » s’écrit « comprends » avec « tu » et avec « je ».',
                    ],
                    [
                        'question' => 'Quelle phrase exprime correctement « Je ne vais pas à la bibliothèque » avec « y » ?',
                        'choices' => [
                            ['choice_text' => 'Je ne vais y pas.', 'is_correct' => false],
                            ['choice_text' => 'Je n’en vais pas.', 'is_correct' => false],
                            ['choice_text' => 'Je y ne vais pas.', 'is_correct' => false],
                            ['choice_text' => 'Je n’y vais pas.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le pronom « y » vient avant le verbe et reste placé entre « ne » et le verbe dans une négation : « je n’y vais pas ».',
                    ],
                ],
            ],
            [
                'title' => 'Révision des pronoms en contexte',
                'description' => 'Réinvestissez les pronoms sujets, compléments, possessifs, démonstratifs, y et en dans des échanges et des phrases de la vie quotidienne.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => '« Lina et Sara sont en classe. ___ écoutent le professeur. »',
                        'choices' => [
                            ['choice_text' => 'Ils', 'is_correct' => false],
                            ['choice_text' => 'Elles', 'is_correct' => true],
                            ['choice_text' => 'Elle', 'is_correct' => false],
                            ['choice_text' => 'Nous', 'is_correct' => false],
                        ],
                        'explanation' => 'Lina et Sara forment un groupe féminin pluriel. Le pronom sujet adapté est « elles ».',
                    ],
                    [
                        'question' => '« Tu as mes lunettes ? » — « Oui, je ___ ai dans mon sac. »',
                        'choices' => [
                            ['choice_text' => 'leur', 'is_correct' => false],
                            ['choice_text' => 'lui', 'is_correct' => false],
                            ['choice_text' => 'les', 'is_correct' => true],
                            ['choice_text' => 'le', 'is_correct' => false],
                        ],
                        'explanation' => '« Lunettes » est un pluriel complément direct : on le remplace par « les ».',
                    ],
                    [
                        'question' => 'Notre professeur ___ donne des exercices chaque lundi.',
                        'choices' => [
                            ['choice_text' => 'nous', 'is_correct' => true],
                            ['choice_text' => 'me', 'is_correct' => false],
                            ['choice_text' => 'leur', 'is_correct' => false],
                            ['choice_text' => 'lui', 'is_correct' => false],
                        ],
                        'explanation' => '« Nous » reprend les élèves qui parlent : le professeur nous donne des exercices.',
                    ],
                    [
                        'question' => '« Notre appartement est petit, mais celui de nos parents est très lumineux. » Quel pronom possessif reprend « l’appartement de nos parents » ?',
                        'choices' => [
                            ['choice_text' => 'la leur', 'is_correct' => false],
                            ['choice_text' => 'les leurs', 'is_correct' => false],
                            ['choice_text' => 'le leur', 'is_correct' => true],
                            ['choice_text' => 'le sien', 'is_correct' => false],
                        ],
                        'explanation' => '« Appartement » est masculin singulier et les parents sont plusieurs : « le leur ».',
                    ],
                    [
                        'question' => 'Vous montrez plusieurs stylos : « ___ sont à moi. »',
                        'choices' => [
                            ['choice_text' => 'Celui-ci', 'is_correct' => false],
                            ['choice_text' => 'Celle-ci', 'is_correct' => false],
                            ['choice_text' => 'Celles-ci', 'is_correct' => false],
                            ['choice_text' => 'Ceux-ci', 'is_correct' => true],
                        ],
                        'explanation' => '« Stylos » est masculin pluriel : le pronom est « ceux-ci ».',
                    ],
                    [
                        'question' => '« Vous allez au Maroc cet été ? » — « Oui, nous ___ allons en juillet. »',
                        'choices' => [
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'y', 'is_correct' => true],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'leur', 'is_correct' => false],
                        ],
                        'explanation' => '« Y » remplace un lieu introduit par « à » ou « au » : nous y allons.',
                    ],
                    [
                        'question' => '« Tu as du pain ? » — « Oui, j’___ ai encore. »',
                        'choices' => [
                            ['choice_text' => 'y', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'lui', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => true],
                        ],
                        'explanation' => '« Du pain » peut être repris par « en » lorsqu’on parle d’une quantité : « j’en ai encore ».',
                    ],
                    [
                        'question' => 'Dans « Il ne me parle pas », que remplace « me » ?',
                        'choices' => [
                            ['choice_text' => 'Le sujet « il »', 'is_correct' => false],
                            ['choice_text' => 'La personne qui parle (moi)', 'is_correct' => true],
                            ['choice_text' => 'Un lieu déjà cité', 'is_correct' => false],
                            ['choice_text' => 'Une chose dont on a parlé', 'is_correct' => false],
                        ],
                        'explanation' => '« Me » désigne la personne à qui l’on ne parle pas : celui ou celle qui dit « je ».',
                    ],
                    [
                        'question' => 'Monsieur Idrissi, le professeur, entre dans la classe. Complétez : « ___ ouvre le livre. »',
                        'choices' => [
                            ['choice_text' => 'Elle', 'is_correct' => false],
                            ['choice_text' => 'Ils', 'is_correct' => false],
                            ['choice_text' => 'Il', 'is_correct' => true],
                            ['choice_text' => 'Elles', 'is_correct' => false],
                        ],
                        'explanation' => 'Monsieur Idrissi est un seul homme : on le reprend par « il ».',
                    ],
                    [
                        'question' => '« Mes cousins habitent à Fès. Je ___ rends visite deux fois par an. »',
                        'choices' => [
                            ['choice_text' => 'leur', 'is_correct' => true],
                            ['choice_text' => 'les', 'is_correct' => false],
                            ['choice_text' => 'lui', 'is_correct' => false],
                            ['choice_text' => 'y', 'is_correct' => false],
                        ],
                        'explanation' => '« Rendre visite à quelqu’un » : la personne est un complément indirect, pluriel ici, donc « leur ».',
                    ],
                    [
                        'question' => '« Tu as donné les clés à Nora ? » — « Oui, je ___ ai donné les clés hier. »',
                        'choices' => [
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'leur', 'is_correct' => false],
                            ['choice_text' => 'lui', 'is_correct' => true],
                        ],
                        'explanation' => '« Donner quelque chose à quelqu’un » : Nora est un complément indirect singulier, donc « lui ».',
                    ],
                    [
                        'question' => 'Quelle phrase est entièrement correcte ?',
                        'choices' => [
                            ['choice_text' => 'Je les connais, mais je ne leur parle pas souvent.', 'is_correct' => true],
                            ['choice_text' => 'Je leur connais, mais je ne les parle pas souvent.', 'is_correct' => false],
                            ['choice_text' => 'Je les connais, mais je ne les parle pas souvent.', 'is_correct' => false],
                            ['choice_text' => 'Je lui connais, mais je ne leur parle pas souvent.', 'is_correct' => false],
                        ],
                        'explanation' => '« Connaître quelqu’un » demande un complément direct, donc « les connaître ». « Parler à quelqu’un » demande un complément indirect, donc « leur parler ».',
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
