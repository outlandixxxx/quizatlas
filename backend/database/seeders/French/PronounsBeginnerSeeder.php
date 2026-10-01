<?php

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
                "title" => "Les pronoms sujets essentiels",
                "description" => "Identifiez et utilisez correctement les principaux pronoms personnels sujets dans des phrases simples et des situations courantes.",
                "duration" => 20,
                "passing_score" => 50,
                "questions" => [
                    [
                        "question" => "Dans « Marie travaille à la bibliothèque », quel pronom peut remplacer « Marie » ?",
                        "choices" => [
                            ["choice_text" => "Elle", "is_correct" => true],
                            ["choice_text" => "Il", "is_correct" => false],
                            ["choice_text" => "Nous", "is_correct" => false],
                            ["choice_text" => "Ils", "is_correct" => false],
                        ],
                        "explanation" => "« Marie » désigne une seule personne féminine. Le pronom sujet correspondant est donc « elle ».",
                    ],
                    [
                        "question" => "Quel pronom convient dans « ___ habitons à Rabat » ?",
                        "choices" => [
                            ["choice_text" => "Nous", "is_correct" => true],
                            ["choice_text" => "Vous", "is_correct" => false],
                            ["choice_text" => "Ils", "is_correct" => false],
                            ["choice_text" => "Tu", "is_correct" => false],
                        ],
                        "explanation" => "La terminaison « -ons » correspond ici au verbe « habiter » avec le pronom « nous » : « nous habitons ».",
                    ],
                    [
                        "question" => "Un étudiant parle de lui-même. Quel pronom utilise-t-il ?",
                        "choices" => [
                            ["choice_text" => "Je", "is_correct" => true],
                            ["choice_text" => "Tu", "is_correct" => false],
                            ["choice_text" => "Il", "is_correct" => false],
                            ["choice_text" => "Vous", "is_correct" => false],
                        ],
                        "explanation" => "« Je » est le pronom personnel sujet utilisé par la personne qui parle pour parler d'elle-même.",
                    ],
                    [
                        "question" => "Vous parlez directement à une seule amie. Quel pronom sujet convient normalement dans une conversation familière ?",
                        "choices" => [
                            ["choice_text" => "Tu", "is_correct" => true],
                            ["choice_text" => "Vous", "is_correct" => false],
                            ["choice_text" => "Elle", "is_correct" => false],
                            ["choice_text" => "Ils", "is_correct" => false],
                        ],
                        "explanation" => "Dans une relation familière avec une seule personne, on emploie généralement « tu ». « Vous » peut être utilisé dans un contexte formel ou pour plusieurs personnes.",
                    ],
                    [
                        "question" => "Quelle phrase est correctement construite ?",
                        "choices" => [
                            ["choice_text" => "Ils arrivent à huit heures.", "is_correct" => true],
                            ["choice_text" => "Il arrivent à huit heures.", "is_correct" => false],
                            ["choice_text" => "Ils arrive à huit heures.", "is_correct" => false],
                            ["choice_text" => "Elles arrive à huit heures.", "is_correct" => false],
                        ],
                        "explanation" => "Le pronom « ils » est pluriel et demande ici la forme verbale « arrivent ». La phrase est donc correctement accordée.",
                    ],
                    [
                        "question" => "Quelle phrase convient pour parler de deux étudiantes ?",
                        "choices" => [
                            ["choice_text" => "Elles révisent ensemble.", "is_correct" => true],
                            ["choice_text" => "Ils révisent ensemble.", "is_correct" => false],
                            ["choice_text" => "Elle révisent ensemble.", "is_correct" => false],
                            ["choice_text" => "Nous révisent ensemble.", "is_correct" => false],
                        ],
                        "explanation" => "Deux étudiantes forment un groupe féminin pluriel. Le pronom sujet correspondant est « elles ».",
                    ],
                    [
                        "question" => "Quel pronom remplace « Paul et moi » dans « Paul et moi allons au cinéma » ?",
                        "choices" => [
                            ["choice_text" => "Nous", "is_correct" => true],
                            ["choice_text" => "Ils", "is_correct" => false],
                            ["choice_text" => "Vous", "is_correct" => false],
                            ["choice_text" => "On", "is_correct" => false],
                        ],
                        "explanation" => "« Paul et moi » désigne la personne qui parle et une autre personne. Le pronom sujet correspondant est « nous ».",
                    ],
                    [
                        "question" => "Quel pronom peut remplacer « mes parents » ?",
                        "choices" => [
                            ["choice_text" => "Ils", "is_correct" => true],
                            ["choice_text" => "Elle", "is_correct" => false],
                            ["choice_text" => "Tu", "is_correct" => false],
                            ["choice_text" => "Je", "is_correct" => false],
                        ],
                        "explanation" => "« Mes parents » désigne plusieurs personnes. Dans cette phrase, le pronom masculin pluriel « ils » convient.",
                    ],
                    [
                        "question" => "Vous parlez à plusieurs étudiants. Quel pronom utilisez-vous pour vous adresser directement à eux ?",
                        "choices" => [
                            ["choice_text" => "Vous", "is_correct" => true],
                            ["choice_text" => "Nous", "is_correct" => false],
                            ["choice_text" => "Ils", "is_correct" => false],
                            ["choice_text" => "Tu", "is_correct" => false],
                        ],
                        "explanation" => "« Vous » sert notamment à s'adresser directement à plusieurs personnes. « Ils » parlerait de ces personnes, sans s'adresser directement à elles.",
                    ],
                    [
                        "question" => "Quelle phrase utilise correctement « on » dans un contexte courant ?",
                        "choices" => [
                            ["choice_text" => "On va au marché samedi.", "is_correct" => true],
                            ["choice_text" => "On allez au marché samedi.", "is_correct" => false],
                            ["choice_text" => "On vont au marché samedi.", "is_correct" => false],
                            ["choice_text" => "On aller au marché samedi.", "is_correct" => false],
                        ],
                        "explanation" => "« On » se conjugue comme « il » ou « elle » au singulier : « on va ». Dans la conversation, « on » peut aussi remplacer « nous ».",
                    ],
                    [
                        "question" => "Un professeur demande : « Qui veut répondre ? » Quelle réponse est correcte pour parler de soi ?",
                        "choices" => [
                            ["choice_text" => "Je veux répondre.", "is_correct" => true],
                            ["choice_text" => "Il veux répondre.", "is_correct" => false],
                            ["choice_text" => "Tu veux répondre.", "is_correct" => false],
                            ["choice_text" => "Nous veut répondre.", "is_correct" => false],
                        ],
                        "explanation" => "L'étudiant parle de lui-même et utilise donc « je ». Le verbe vouloir devient « je veux ».",
                    ],
                ],
            ],
            [
                "title" => "Remplacer les noms par des pronoms",
                "description" => "Apprenez à éviter les répétitions en remplaçant correctement des personnes et des groupes nominaux par des pronoms personnels simples.",
                "duration" => 25,
                "passing_score" => 55,
                "questions" => [
                    [
                        "question" => "« Sarah aime le français. » Quel pronom peut remplacer « Sarah » sans changer le sens général ?",
                        "choices" => [
                            ["choice_text" => "Elle", "is_correct" => true],
                            ["choice_text" => "Il", "is_correct" => false],
                            ["choice_text" => "Ils", "is_correct" => false],
                            ["choice_text" => "Nous", "is_correct" => false],
                        ],
                        "explanation" => "Sarah est une personne féminine au singulier. Le pronom sujet « elle » permet d'éviter de répéter son prénom.",
                    ],
                    [
                        "question" => "« Karim et Youssef arrivent demain. ___ prennent le train. »",
                        "choices" => [
                            ["choice_text" => "Ils", "is_correct" => true],
                            ["choice_text" => "Elles", "is_correct" => false],
                            ["choice_text" => "Il", "is_correct" => false],
                            ["choice_text" => "On", "is_correct" => false],
                        ],
                        "explanation" => "Karim et Youssef forment un groupe masculin pluriel. Le pronom correspondant est « ils ».",
                    ],
                    [
                        "question" => "« Ma sœur et moi préparons le dîner. » Quel pronom remplace « ma sœur et moi » ?",
                        "choices" => [
                            ["choice_text" => "Nous", "is_correct" => true],
                            ["choice_text" => "Elles", "is_correct" => false],
                            ["choice_text" => "Vous", "is_correct" => false],
                            ["choice_text" => "Ils", "is_correct" => false],
                        ],
                        "explanation" => "Le groupe comprend la personne qui parle et sa sœur. Le pronom sujet correspondant est « nous ».",
                    ],
                    [
                        "question" => "« Le professeur entre dans la salle. » Comment éviter de répéter « le professeur » dans la phrase suivante ?",
                        "choices" => [
                            ["choice_text" => "Il s'assoit derrière le bureau.", "is_correct" => true],
                            ["choice_text" => "Elle s'assoit derrière le bureau.", "is_correct" => false],
                            ["choice_text" => "Ils s'assoit derrière le bureau.", "is_correct" => false],
                            ["choice_text" => "Nous s'assoit derrière le bureau.", "is_correct" => false],
                        ],
                        "explanation" => "« Professeur » désigne ici une personne masculine singulière. On peut le reprendre avec le pronom « il ».",
                    ],
                    [
                        "question" => "« Les voitures sont devant la maison. ___ sont rouges. »",
                        "choices" => [
                            ["choice_text" => "Elles", "is_correct" => true],
                            ["choice_text" => "Ils", "is_correct" => false],
                            ["choice_text" => "Elle", "is_correct" => false],
                            ["choice_text" => "Vous", "is_correct" => false],
                        ],
                        "explanation" => "« Voitures » est féminin pluriel. Le pronom qui reprend ce nom est donc « elles ».",
                    ],
                    [
                        "question" => "« Le livre est sur le bureau. ___ est à Paul. »",
                        "choices" => [
                            ["choice_text" => "Il", "is_correct" => true],
                            ["choice_text" => "Elle", "is_correct" => false],
                            ["choice_text" => "Ils", "is_correct" => false],
                            ["choice_text" => "Elles", "is_correct" => false],
                        ],
                        "explanation" => "« Livre » est masculin singulier. Le pronom sujet qui le remplace est « il ».",
                    ],
                    [
                        "question" => "« La porte est ouverte. ___ donne sur le jardin. »",
                        "choices" => [
                            ["choice_text" => "Elle", "is_correct" => true],
                            ["choice_text" => "Il", "is_correct" => false],
                            ["choice_text" => "Ils", "is_correct" => false],
                            ["choice_text" => "On", "is_correct" => false],
                        ],
                        "explanation" => "« Porte » est féminin singulier. Le pronom sujet correspondant est donc « elle ».",
                    ],
                    [
                        "question" => "« Mon frère et ma sœur étudient ici. » Quel pronom peut les remplacer ?",
                        "choices" => [
                            ["choice_text" => "Ils", "is_correct" => true],
                            ["choice_text" => "Elles", "is_correct" => false],
                            ["choice_text" => "Nous", "is_correct" => false],
                            ["choice_text" => "Elle", "is_correct" => false],
                        ],
                        "explanation" => "Le groupe est mixte : un frère et une sœur. L'accord traditionnel du pronom pluriel se fait avec « ils ».",
                    ],
                    [
                        "question" => "Quelle reformulation évite la répétition ? « Nadia habite à Rabat. Nadia travaille à Casablanca. »",
                        "choices" => [
                            ["choice_text" => "Nadia habite à Rabat. Elle travaille à Casablanca.", "is_correct" => true],
                            ["choice_text" => "Nadia habite à Rabat. Il travaille à Casablanca.", "is_correct" => false],
                            ["choice_text" => "Nadia habite à Rabat. Elles travaillent à Casablanca.", "is_correct" => false],
                            ["choice_text" => "Nadia habite à Rabat. Nous travaille à Casablanca.", "is_correct" => false],
                        ],
                        "explanation" => "Nadia est une personne féminine singulière. « Elle » évite la répétition du prénom et conserve l'accord correct avec le verbe « travaille ».",
                    ],
                    [
                        "question" => "« Mon père et moi allons au marché. » Quelle phrase reprend correctement le même sujet ?",
                        "choices" => [
                            ["choice_text" => "Nous achetons des fruits.", "is_correct" => true],
                            ["choice_text" => "Ils achètent des fruits.", "is_correct" => false],
                            ["choice_text" => "Elle achète des fruits.", "is_correct" => false],
                            ["choice_text" => "Vous achète des fruits.", "is_correct" => false],
                        ],
                        "explanation" => "« Mon père et moi » correspond au pronom « nous ». Le verbe acheter prend donc la forme « achetons ».",
                    ],
                    [
                        "question" => "Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Les étudiants arrivent. Ils attendent le professeur.", "is_correct" => true],
                            ["choice_text" => "Les étudiants arrivent. Elle attendent le professeur.", "is_correct" => false],
                            ["choice_text" => "Les étudiants arrivent. Il attend le professeur.", "is_correct" => false],
                            ["choice_text" => "Les étudiants arrivent. Nous attend le professeur.", "is_correct" => false],
                        ],
                        "explanation" => "« Les étudiants » est un groupe pluriel masculin. Le pronom « ils » et le verbe « attendent » sont donc correctement accordés.",
                    ],
                    [
                        "question" => "Dans « La voiture est neuve. Elle est encore au garage », pourquoi emploie-t-on « elle » ?",
                        "choices" => [
                            ["choice_text" => "Parce que « voiture » est féminin singulier.", "is_correct" => true],
                            ["choice_text" => "Parce que « garage » est masculin.", "is_correct" => false],
                            ["choice_text" => "Parce que tous les objets utilisent « elle ».", "is_correct" => false],
                            ["choice_text" => "Parce que « voiture » est toujours pluriel.", "is_correct" => false],
                        ],
                        "explanation" => "Le pronom reprend « voiture », un nom féminin singulier. Le genre du pronom dépend du nom qu'il remplace, pas du mot « garage ».",
                    ],
                ],
            ],
            [
                "title" => "Les pronoms compléments dans les phrases simples",
                "description" => "Distinguez les pronoms sujets des pronoms compléments et utilisez me, te, le, la, les, lui et leur dans des phrases accessibles.",
                "duration" => 30,
                "passing_score" => 60,
                "questions" => [
                    [
                        "question" => "« Tu regardes Paul ? Oui, je ___ regarde. »",
                        "choices" => [
                            ["choice_text" => "le", "is_correct" => true],
                            ["choice_text" => "lui", "is_correct" => false],
                            ["choice_text" => "les", "is_correct" => false],
                            ["choice_text" => "la", "is_correct" => false],
                        ],
                        "explanation" => "Paul est le complément direct du verbe « regarder ». Pour un nom masculin singulier, on utilise le pronom COD « le ».",
                    ],
                    [
                        "question" => "« Tu connais Marie ? Oui, je ___ connais. »",
                        "choices" => [
                            ["choice_text" => "la", "is_correct" => true],
                            ["choice_text" => "lui", "is_correct" => false],
                            ["choice_text" => "le", "is_correct" => false],
                            ["choice_text" => "leur", "is_correct" => false],
                        ],
                        "explanation" => "Marie est le complément direct du verbe « connaître ». Comme il s'agit d'une personne féminine singulière, le pronom COD est « la ».",
                    ],
                    [
                        "question" => "« J'aime mes amis. Je ___ invite souvent chez moi. »",
                        "choices" => [
                            ["choice_text" => "les", "is_correct" => true],
                            ["choice_text" => "leur", "is_correct" => false],
                            ["choice_text" => "lui", "is_correct" => false],
                            ["choice_text" => "ils", "is_correct" => false],
                        ],
                        "explanation" => "« Mes amis » est le complément direct du verbe « inviter ». Le pronom COD masculin pluriel est « les ».",
                    ],
                    [
                        "question" => "« Tu téléphones à ta mère ? » — « Oui, je ___ téléphone. »",
                        "choices" => [
                            ["choice_text" => "lui", "is_correct" => true],
                            ["choice_text" => "la", "is_correct" => false],
                            ["choice_text" => "le", "is_correct" => false],
                            ["choice_text" => "les", "is_correct" => false],
                        ],
                        "explanation" => "Avec le verbe « téléphoner à », la personne est un complément indirect. Pour une personne singulière, on utilise « lui ».",
                    ],
                    [
                        "question" => "« Vous écrivez à vos parents ? » — « Oui, je ___ écris chaque semaine. »",
                        "choices" => [
                            ["choice_text" => "leur", "is_correct" => true],
                            ["choice_text" => "les", "is_correct" => false],
                            ["choice_text" => "lui", "is_correct" => false],
                            ["choice_text" => "eux", "is_correct" => false],
                        ],
                        "explanation" => "« Vos parents » est un complément indirect pluriel introduit par « à ». Le pronom correspondant est « leur ».",
                    ],
                    [
                        "question" => "Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Je lui parle tous les jours.", "is_correct" => true],
                            ["choice_text" => "Je le parle tous les jours.", "is_correct" => false],
                            ["choice_text" => "Je les parle tous les jours.", "is_correct" => false],
                            ["choice_text" => "Je leur parle à elle.", "is_correct" => false],
                        ],
                        "explanation" => "Le verbe « parler à quelqu'un » demande un complément indirect. Avec une personne singulière, on utilise donc « lui ».",
                    ],
                    [
                        "question" => "« Elle aide ses parents. » Comment remplacer « ses parents » ?",
                        "choices" => [
                            ["choice_text" => "Elle les aide.", "is_correct" => true],
                            ["choice_text" => "Elle leur aide.", "is_correct" => false],
                            ["choice_text" => "Elle lui aide.", "is_correct" => false],
                            ["choice_text" => "Elle eux aide.", "is_correct" => false],
                        ],
                        "explanation" => "Le verbe « aider » se construit directement avec son complément : aider quelqu'un. « Ses parents » est donc un COD et devient « les ».",
                    ],
                    [
                        "question" => "Quelle phrase est correcte avec « me » ?",
                        "choices" => [
                            ["choice_text" => "Tu me regardes.", "is_correct" => true],
                            ["choice_text" => "Tu moi regardes.", "is_correct" => false],
                            ["choice_text" => "Tu me regardent.", "is_correct" => false],
                            ["choice_text" => "Tu regardes me.", "is_correct" => false],
                        ],
                        "explanation" => "« Me » est un pronom complément placé avant le verbe conjugué dans cette phrase : « tu me regardes ».",
                    ],
                    [
                        "question" => "« Le professeur parle aux étudiants. » Quelle reprise pronominale est correcte ?",
                        "choices" => [
                            ["choice_text" => "Le professeur leur parle.", "is_correct" => true],
                            ["choice_text" => "Le professeur les parle.", "is_correct" => false],
                            ["choice_text" => "Le professeur lui parle.", "is_correct" => false],
                            ["choice_text" => "Le professeur eux parle.", "is_correct" => false],
                        ],
                        "explanation" => "« Parler aux étudiants » demande un complément indirect pluriel. Le pronom correspondant est « leur ».",
                    ],
                    [
                        "question" => "Quelle phrase remplace correctement « J'écoute la radio » ?",
                        "choices" => [
                            ["choice_text" => "Je l'écoute.", "is_correct" => true],
                            ["choice_text" => "Je lui écoute.", "is_correct" => false],
                            ["choice_text" => "Je la écoute.", "is_correct" => false],
                            ["choice_text" => "J'écoute elle.", "is_correct" => false],
                        ],
                        "explanation" => "« La radio » est un complément direct féminin singulier. Le pronom « la » devient « l' » devant le verbe commençant par une voyelle : « je l'écoute ».",
                    ],
                ],
            ],
            [
                "title" => "Pronoms possessifs et démonstratifs",
                "description" => "Apprenez à reconnaître quelques pronoms qui expriment la possession ou remplacent un groupe nominal déjà connu dans le contexte.",
                "duration" => 25,
                "passing_score" => 60,
                "questions" => [
                    [
                        "question" => "Dans « Mon téléphone est ici, le tien est sur la table », que remplace « le tien » ?",
                        "choices" => [
                            ["choice_text" => "Ton téléphone", "is_correct" => true],
                            ["choice_text" => "Ta table", "is_correct" => false],
                            ["choice_text" => "Ton sac", "is_correct" => false],
                            ["choice_text" => "Tes clés", "is_correct" => false],
                        ],
                        "explanation" => "« Le tien » est un pronom possessif masculin singulier et reprend ici « ton téléphone », en évitant de répéter le nom.",
                    ],
                    [
                        "question" => "« Ma voiture est rouge. ___ est noire. » Quelle forme convient si l'on parle de la voiture de Paul ?",
                        "choices" => [
                            ["choice_text" => "La sienne", "is_correct" => true],
                            ["choice_text" => "Le sien", "is_correct" => false],
                            ["choice_text" => "Les siennes", "is_correct" => false],
                            ["choice_text" => "La leur", "is_correct" => false],
                        ],
                        "explanation" => "« Voiture » est féminin singulier. Le pronom possessif correspondant à « sa voiture » est donc « la sienne ».",
                    ],
                    [
                        "question" => "Quel pronom peut remplacer « mes clés » dans « Mes clés sont sur la table, mais je ne trouve pas les tiennes » ?",
                        "choices" => [
                            ["choice_text" => "Les tiennes", "is_correct" => true],
                            ["choice_text" => "La tienne", "is_correct" => false],
                            ["choice_text" => "Le tien", "is_correct" => false],
                            ["choice_text" => "Les tiens", "is_correct" => false],
                        ],
                        "explanation" => "« Clés » est féminin pluriel. Le pronom possessif correspondant à « tes clés » est « les tiennes ».",
                    ],
                    [
                        "question" => "Vous montrez un stylo précis. Quelle phrase convient ?",
                        "choices" => [
                            ["choice_text" => "Celui-ci est à moi.", "is_correct" => true],
                            ["choice_text" => "Celle-ci est à moi.", "is_correct" => false],
                            ["choice_text" => "Ceux-ci est à moi.", "is_correct" => false],
                            ["choice_text" => "Celles-ci est à moi.", "is_correct" => false],
                        ],
                        "explanation" => "« Stylo » est masculin singulier. Le pronom démonstratif correspondant est « celui-ci ».",
                    ],
                    [
                        "question" => "Vous montrez une seule chaise. Quel pronom démonstratif convient ?",
                        "choices" => [
                            ["choice_text" => "Celle-ci", "is_correct" => true],
                            ["choice_text" => "Celui-ci", "is_correct" => false],
                            ["choice_text" => "Ceux-ci", "is_correct" => false],
                            ["choice_text" => "Celles-ci", "is_correct" => false],
                        ],
                        "explanation" => "« Chaise » est féminin singulier. Le pronom démonstratif approprié est donc « celle-ci ».",
                    ],
                    [
                        "question" => "Quel pronom convient pour remplacer « les livres de Paul » ?",
                        "choices" => [
                            ["choice_text" => "Les siens", "is_correct" => true],
                            ["choice_text" => "La sienne", "is_correct" => false],
                            ["choice_text" => "Le sien", "is_correct" => false],
                            ["choice_text" => "Les siennes", "is_correct" => false],
                        ],
                        "explanation" => "« Livres » est masculin pluriel. Le pronom possessif masculin pluriel correspondant à « ses livres » est « les siens ».",
                    ],
                    [
                        "question" => "Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Mon sac est lourd, mais le tien est léger.", "is_correct" => true],
                            ["choice_text" => "Mon sac est lourd, mais la tienne est légère.", "is_correct" => false],
                            ["choice_text" => "Mon sac est lourd, mais les tiens est léger.", "is_correct" => false],
                            ["choice_text" => "Mon sac est lourd, mais celui tien est léger.", "is_correct" => false],
                        ],
                        "explanation" => "« Sac » est masculin singulier. Le pronom possessif correspondant à « ton sac » est donc « le tien ».",
                    ],
                    [
                        "question" => "Vous parlez de plusieurs photos et dites : « Celles-ci sont récentes. » Que remplace « celles-ci » ?",
                        "choices" => [
                            ["choice_text" => "Des photos", "is_correct" => true],
                            ["choice_text" => "Un téléphone", "is_correct" => false],
                            ["choice_text" => "Une photo", "is_correct" => false],
                            ["choice_text" => "Des livres", "is_correct" => false],
                        ],
                        "explanation" => "« Celles-ci » est un pronom démonstratif féminin pluriel. Il peut remplacer ici « les photos » ou « ces photos ».",
                    ],
                    [
                        "question" => "Quelle phrase utilise correctement « le nôtre » ?",
                        "choices" => [
                            ["choice_text" => "Notre projet est prêt. Le nôtre est plus simple.", "is_correct" => true],
                            ["choice_text" => "Notre projet est prêt. La nôtre est plus simple.", "is_correct" => false],
                            ["choice_text" => "Notre projet est prêt. Les nôtres est plus simple.", "is_correct" => false],
                            ["choice_text" => "Notre projet est prêt. Le notre est plus simple.", "is_correct" => false],
                        ],
                        "explanation" => "« Projet » est masculin singulier, donc le pronom possessif correspondant est « le nôtre ». L'accent circonflexe fait partie de l'orthographe correcte.",
                    ],
                    [
                        "question" => "Quel pronom complète naturellement : « Cette robe est à moi. Celle-là est à ma sœur. » Que signifie « celle-là » ?",
                        "choices" => [
                            ["choice_text" => "Il remplace une robe précise déjà visible dans la situation.", "is_correct" => true],
                            ["choice_text" => "Il remplace automatiquement une personne masculine.", "is_correct" => false],
                            ["choice_text" => "Il signifie toujours « mes vêtements ».", "is_correct" => false],
                            ["choice_text" => "Il remplace uniquement un groupe masculin pluriel.", "is_correct" => false],
                        ],
                        "explanation" => "« Celle-là » est un pronom démonstratif féminin singulier. Il reprend ici une robe précise déjà présente dans le contexte.",
                    ],
                ],
            ],
            [
                "title" => "Y et en dans des situations simples",
                "description" => "Découvrez les usages essentiels de « y » et « en » pour remplacer des compléments de lieu ou des groupes introduits par « de ».",
                "duration" => 30,
                "passing_score" => 60,
                "questions" => [
                    [
                        "question" => "« Tu vas à la bibliothèque ? » — « Oui, j'___ vais chaque mardi. »",
                        "choices" => [
                            ["choice_text" => "y", "is_correct" => true],
                            ["choice_text" => "en", "is_correct" => false],
                            ["choice_text" => "la", "is_correct" => false],
                            ["choice_text" => "lui", "is_correct" => false],
                        ],
                        "explanation" => "Le pronom « y » peut remplacer un complément de lieu introduit par « à » : « je vais à la bibliothèque » devient « j'y vais ».",
                    ],
                    [
                        "question" => "« Vous pensez à votre examen ? » — « Oui, j'___ pense beaucoup. »",
                        "choices" => [
                            ["choice_text" => "y", "is_correct" => true],
                            ["choice_text" => "en", "is_correct" => false],
                            ["choice_text" => "le", "is_correct" => false],
                            ["choice_text" => "lui", "is_correct" => false],
                        ],
                        "explanation" => "Avec « penser à quelque chose », « y » peut remplacer le complément introduit par « à » : « j'y pense ».",
                    ],
                    [
                        "question" => "« Tu reviens de Paris ? » — « Oui, j'___ reviens ce soir. »",
                        "choices" => [
                            ["choice_text" => "en", "is_correct" => true],
                            ["choice_text" => "y", "is_correct" => false],
                            ["choice_text" => "le", "is_correct" => false],
                            ["choice_text" => "lui", "is_correct" => false],
                        ],
                        "explanation" => "Le pronom « en » peut remplacer un lieu introduit par « de » : « je reviens de Paris » devient « j'en reviens ».",
                    ],
                    [
                        "question" => "« Tu parles de ce livre ? » — « Oui, j'___ parle souvent. »",
                        "choices" => [
                            ["choice_text" => "en", "is_correct" => true],
                            ["choice_text" => "y", "is_correct" => false],
                            ["choice_text" => "le", "is_correct" => false],
                            ["choice_text" => "lui", "is_correct" => false],
                        ],
                        "explanation" => "Avec « parler de quelque chose », le pronom « en » remplace le complément introduit par « de ».",
                    ],
                    [
                        "question" => "Quel pronom remplace « à l'école » dans « Je vais à l'école » ?",
                        "choices" => [
                            ["choice_text" => "y", "is_correct" => true],
                            ["choice_text" => "en", "is_correct" => false],
                            ["choice_text" => "la", "is_correct" => false],
                            ["choice_text" => "elle", "is_correct" => false],
                        ],
                        "explanation" => "« Y » remplace fréquemment un complément de lieu introduit par « à » : « je vais à l'école » devient « j'y vais ».",
                    ],
                    [
                        "question" => "Quelle transformation est correcte ? « Nous revenons de la gare. »",
                        "choices" => [
                            ["choice_text" => "Nous en revenons.", "is_correct" => true],
                            ["choice_text" => "Nous y revenons de.", "is_correct" => false],
                            ["choice_text" => "Nous la revenons.", "is_correct" => false],
                            ["choice_text" => "Nous leur revenons.", "is_correct" => false],
                        ],
                        "explanation" => "« De la gare » est un complément introduit par « de ». Il peut être remplacé par « en » : « nous en revenons ».",
                    ],
                    [
                        "question" => "« Tu as besoin de ce document ? » — « Oui, j'___ ai besoin. »",
                        "choices" => [
                            ["choice_text" => "en", "is_correct" => true],
                            ["choice_text" => "y", "is_correct" => false],
                            ["choice_text" => "le", "is_correct" => false],
                            ["choice_text" => "lui", "is_correct" => false],
                        ],
                        "explanation" => "L'expression « avoir besoin de » est construite avec « de ». Le pronom « en » peut remplacer ce complément : « j'en ai besoin ».",
                    ],
                    [
                        "question" => "Quelle phrase est naturelle ?",
                        "choices" => [
                            ["choice_text" => "J'y vais demain.", "is_correct" => true],
                            ["choice_text" => "Je en vais demain.", "is_correct" => false],
                            ["choice_text" => "Je lui vais demain.", "is_correct" => false],
                            ["choice_text" => "Je la vais demain.", "is_correct" => false],
                        ],
                        "explanation" => "« J'y vais » est une expression très courante lorsque « y » remplace un lieu déjà connu dans le contexte.",
                    ],
                    [
                        "question" => "« Vous parlez de vos vacances ? » — « Oui, nous ___ parlons encore. »",
                        "choices" => [
                            ["choice_text" => "en", "is_correct" => true],
                            ["choice_text" => "y", "is_correct" => false],
                            ["choice_text" => "les", "is_correct" => false],
                            ["choice_text" => "leur", "is_correct" => false],
                        ],
                        "explanation" => "Le complément « de vos vacances » peut être remplacé par « en » après le verbe « parler » : « nous en parlons ».",
                    ],
                    [
                        "question" => "Quel pronom complète « Elle tient à son travail. Elle ___ tient beaucoup. » ?",
                        "choices" => [
                            ["choice_text" => "y", "is_correct" => true],
                            ["choice_text" => "en", "is_correct" => false],
                            ["choice_text" => "le", "is_correct" => false],
                            ["choice_text" => "lui", "is_correct" => false],
                        ],
                        "explanation" => "Avec « tenir à quelque chose », le complément est introduit par « à ». On peut donc le remplacer par « y » : « elle y tient beaucoup ».",
                    ],
                    [
                        "question" => "Quelle phrase contient correctement « en » pour parler d'une quantité ?",
                        "choices" => [
                            ["choice_text" => "Tu veux des pommes ? Oui, j'en veux deux.", "is_correct" => true],
                            ["choice_text" => "Tu veux des pommes ? Oui, j'y veux deux.", "is_correct" => false],
                            ["choice_text" => "Tu veux des pommes ? Oui, je les veux deux.", "is_correct" => false],
                            ["choice_text" => "Tu veux des pommes ? Oui, je lui veux deux.", "is_correct" => false],
                        ],
                        "explanation" => "« En » peut remplacer un groupe introduit par « des » lorsqu'une quantité est ensuite précisée : « j'en veux deux ».",
                    ],
                    [
                        "question" => "Un étudiant dit : « Je vais à la bibliothèque chaque jeudi. » Quelle reprise évite de répéter le lieu ?",
                        "choices" => [
                            ["choice_text" => "J'y vais chaque jeudi.", "is_correct" => true],
                            ["choice_text" => "J'en vais chaque jeudi.", "is_correct" => false],
                            ["choice_text" => "Je la vais chaque jeudi.", "is_correct" => false],
                            ["choice_text" => "Je lui vais chaque jeudi.", "is_correct" => false],
                        ],
                        "explanation" => "« À la bibliothèque » est un complément de lieu qui peut être repris par « y ». La phrase devient donc « j'y vais chaque jeudi ».",
                    ],
                ],
            ],
            [
                "title" => "La place des pronoms et les erreurs fréquentes",
                "description" => "Entraînez-vous à placer les pronoms correctement avant le verbe et à corriger des erreurs fréquentes dans des phrases de niveau débutant.",
                "duration" => 30,
                "passing_score" => 65,
                "questions" => [
                    [
                        "question" => "Quelle phrase est correctement construite ?",
                        "choices" => [
                            ["choice_text" => "Je le connais.", "is_correct" => true],
                            ["choice_text" => "Je connais le.", "is_correct" => false],
                            ["choice_text" => "Le je connais.", "is_correct" => false],
                            ["choice_text" => "Je lui connais.", "is_correct" => false],
                        ],
                        "explanation" => "Le pronom COD « le » se place avant le verbe conjugué : « je le connais ».",
                    ],
                    [
                        "question" => "Quelle correction faut-il apporter à « Je lui vois tous les jours » si l'on parle d'une personne que l'on voit ?",
                        "choices" => [
                            ["choice_text" => "Je la vois tous les jours.", "is_correct" => true],
                            ["choice_text" => "Je lui vois tous les jours.", "is_correct" => false],
                            ["choice_text" => "Je les vois tous les jours.", "is_correct" => false],
                            ["choice_text" => "Je elle vois tous les jours.", "is_correct" => false],
                        ],
                        "explanation" => "Le verbe « voir » prend normalement un complément direct : voir quelqu'un. Pour une personne féminine singulière, on utilise donc « la ».",
                    ],
                    [
                        "question" => "Un étudiant écrit : « Je parle elle tous les jours. » Quelle correction est correcte ?",
                        "choices" => [
                            ["choice_text" => "Je lui parle tous les jours.", "is_correct" => true],
                            ["choice_text" => "Je la parle tous les jours.", "is_correct" => false],
                            ["choice_text" => "Je elle parle tous les jours.", "is_correct" => false],
                            ["choice_text" => "Je les parle tous les jours.", "is_correct" => false],
                        ],
                        "explanation" => "Le verbe « parler » se construit avec « à » lorsqu'il s'agit de la personne : parler à quelqu'un. Le pronom complément indirect est donc « lui ».",
                    ],
                    [
                        "question" => "Quelle phrase est correcte avec une négation ?",
                        "choices" => [
                            ["choice_text" => "Je ne le connais pas.", "is_correct" => true],
                            ["choice_text" => "Je ne connais le pas.", "is_correct" => false],
                            ["choice_text" => "Je le ne connais pas.", "is_correct" => false],
                            ["choice_text" => "Je ne lui connais pas.", "is_correct" => false],
                        ],
                        "explanation" => "Dans une phrase négative, le pronom complément reste placé avant le verbe : « je ne le connais pas ».",
                    ],
                    [
                        "question" => "Quelle réponse convient ? « Tu vois Paul ? » — « Oui, ___ vois. »",
                        "choices" => [
                            ["choice_text" => "je le", "is_correct" => true],
                            ["choice_text" => "je lui", "is_correct" => false],
                            ["choice_text" => "je il", "is_correct" => false],
                            ["choice_text" => "je les", "is_correct" => false],
                        ],
                        "explanation" => "Paul est un complément direct du verbe « voir ». Le pronom COD masculin singulier est « le » : « je le vois ».",
                    ],
                    [
                        "question" => "« Nous parlons à nos voisins. » Quelle reprise est correcte ?",
                        "choices" => [
                            ["choice_text" => "Nous leur parlons.", "is_correct" => true],
                            ["choice_text" => "Nous les parlons.", "is_correct" => false],
                            ["choice_text" => "Nous lui parlons.", "is_correct" => false],
                            ["choice_text" => "Nous eux parlons.", "is_correct" => false],
                        ],
                        "explanation" => "« Nos voisins » est un complément indirect pluriel après « parler à ». Le pronom correspondant est « leur ».",
                    ],
                    [
                        "question" => "Quelle phrase place correctement « en » ?",
                        "choices" => [
                            ["choice_text" => "J'en prends un.", "is_correct" => true],
                            ["choice_text" => "Je prends en un.", "is_correct" => false],
                            ["choice_text" => "En je prends un.", "is_correct" => false],
                            ["choice_text" => "Je le en prends un.", "is_correct" => false],
                        ],
                        "explanation" => "Dans la structure « j'en prends un », le pronom « en » se place avant le verbe conjugué « prends ».",
                    ],
                    [
                        "question" => "Quelle phrase utilise correctement « y » ?",
                        "choices" => [
                            ["choice_text" => "Nous y allons demain.", "is_correct" => true],
                            ["choice_text" => "Nous allons y demain.", "is_correct" => false],
                            ["choice_text" => "Y nous allons demain.", "is_correct" => false],
                            ["choice_text" => "Nous le allons demain.", "is_correct" => false],
                        ],
                        "explanation" => "« Y » se place avant le verbe conjugué dans cette phrase : « nous y allons ».",
                    ],
                    [
                        "question" => "Un étudiant écrit : « Je regarde lui. » Quelle correction standard faut-il faire ?",
                        "choices" => [
                            ["choice_text" => "Je le regarde.", "is_correct" => true],
                            ["choice_text" => "Je lui regarde.", "is_correct" => false],
                            ["choice_text" => "Je regarde le.", "is_correct" => false],
                            ["choice_text" => "Je il regarde.", "is_correct" => false],
                        ],
                        "explanation" => "Le verbe « regarder » prend un complément direct. Avec une personne masculine singulière, on utilise « le », placé avant le verbe : « je le regarde ».",
                    ],
                    [
                        "question" => "Quelle phrase est correcte avec « me » et « te » ?",
                        "choices" => [
                            ["choice_text" => "Tu me comprends et je te comprends.", "is_correct" => true],
                            ["choice_text" => "Tu moi comprends et je toi comprends.", "is_correct" => false],
                            ["choice_text" => "Tu me comprends et je te comprendre.", "is_correct" => false],
                            ["choice_text" => "Tu me comprend et je te comprends.", "is_correct" => false],
                        ],
                        "explanation" => "« Me » et « te » sont des pronoms compléments placés avant le verbe. Les verbes « comprends » et « comprends » sont aussi correctement conjugués.",
                    ],
                    [
                        "question" => "Quelle phrase exprime correctement « Je ne vais pas à la bibliothèque » avec « y » ?",
                        "choices" => [
                            ["choice_text" => "Je n'y vais pas.", "is_correct" => true],
                            ["choice_text" => "Je ne vais y pas.", "is_correct" => false],
                            ["choice_text" => "Je n'en vais pas.", "is_correct" => false],
                            ["choice_text" => "Je y ne vais pas.", "is_correct" => false],
                        ],
                        "explanation" => "Le pronom « y » vient avant le verbe et reste placé entre « ne » et le verbe dans une négation : « je n'y vais pas ».",
                    ],
                ],
            ],
            [
                "title" => "Révision des pronoms en contexte",
                "description" => "Réinvestissez les pronoms sujets, compléments, possessifs, démonstratifs, y et en dans des échanges et des phrases de la vie quotidienne.",
                "duration" => 30,
                "passing_score" => 65,
                "questions" => [
                    [
                        "question" => "« Lina et Sara sont en classe. ___ écoutent le professeur. »",
                        "choices" => [
                            ["choice_text" => "Elles", "is_correct" => true],
                            ["choice_text" => "Ils", "is_correct" => false],
                            ["choice_text" => "Elle", "is_correct" => false],
                            ["choice_text" => "Nous", "is_correct" => false],
                        ],
                        "explanation" => "Lina et Sara forment un groupe féminin pluriel. Le pronom sujet adapté est « elles ».",
                    ],
                    [
                        "question" => "« Tu connais mon frère ? » — « Oui, je ___ connais. »",
                        "choices" => [
                            ["choice_text" => "le", "is_correct" => true],
                            ["choice_text" => "lui", "is_correct" => false],
                            ["choice_text" => "la", "is_correct" => false],
                            ["choice_text" => "leur", "is_correct" => false],
                        ],
                        "explanation" => "Le verbe « connaître » prend un complément direct. « Mon frère » devient donc le pronom COD masculin singulier « le ».",
                    ],
                    [
                        "question" => "« Vous écrivez à vos amis ? » — « Oui, je ___ écris ce soir. »",
                        "choices" => [
                            ["choice_text" => "leur", "is_correct" => true],
                            ["choice_text" => "les", "is_correct" => false],
                            ["choice_text" => "lui", "is_correct" => false],
                            ["choice_text" => "eux", "is_correct" => false],
                        ],
                        "explanation" => "Écrire à quelqu'un demande un complément indirect. Comme « vos amis » est pluriel, on utilise « leur ».",
                    ],
                    [
                        "question" => "« Notre appartement est petit, mais ___ est très lumineux. » Vous comparez avec l'appartement de vos parents.",
                        "choices" => [
                            ["choice_text" => "le leur", "is_correct" => true],
                            ["choice_text" => "la leur", "is_correct" => false],
                            ["choice_text" => "les leurs", "is_correct" => false],
                            ["choice_text" => "le sien", "is_correct" => false],
                        ],
                        "explanation" => "« Appartement » est masculin singulier. Le pronom possessif correspondant à « leur appartement » est donc « le leur ».",
                    ],
                    [
                        "question" => "Vous montrez plusieurs chaises : « ___ sont libres. »",
                        "choices" => [
                            ["choice_text" => "Celles-ci", "is_correct" => true],
                            ["choice_text" => "Celui-ci", "is_correct" => false],
                            ["choice_text" => "Celle-ci", "is_correct" => false],
                            ["choice_text" => "Ceux-ci", "is_correct" => false],
                        ],
                        "explanation" => "« Chaises » est féminin pluriel. Le pronom démonstratif correspondant est « celles-ci ».",
                    ],
                    [
                        "question" => "« Tu vas au marché ? » — « Oui, j'___ vais maintenant. »",
                        "choices" => [
                            ["choice_text" => "y", "is_correct" => true],
                            ["choice_text" => "en", "is_correct" => false],
                            ["choice_text" => "le", "is_correct" => false],
                            ["choice_text" => "lui", "is_correct" => false],
                        ],
                        "explanation" => "« Au marché » est un complément de lieu introduit par « à ». Le pronom « y » permet de le remplacer : « j'y vais ».",
                    ],
                    [
                        "question" => "« Tu as du pain ? » — « Oui, j'___ ai encore. »",
                        "choices" => [
                            ["choice_text" => "en", "is_correct" => true],
                            ["choice_text" => "y", "is_correct" => false],
                            ["choice_text" => "le", "is_correct" => false],
                            ["choice_text" => "lui", "is_correct" => false],
                        ],
                        "explanation" => "« Du pain » peut être repris par « en » lorsqu'on parle d'une quantité : « j'en ai encore ».",
                    ],
                    [
                        "question" => "Un étudiant écrit : « Je parle mes parents tous les jours. » Quelle correction faut-il faire ?",
                        "choices" => [
                            ["choice_text" => "Je parle à mes parents tous les jours.", "is_correct" => true],
                            ["choice_text" => "Je parle mes parents à tous les jours.", "is_correct" => false],
                            ["choice_text" => "Je leur parle mes parents tous les jours.", "is_correct" => false],
                            ["choice_text" => "Je parle les parents tous les jours.", "is_correct" => false],
                        ],
                        "explanation" => "Le verbe « parler » se construit avec « à » pour introduire la personne : « parler à mes parents ». On ne peut pas supprimer cette préposition dans la phrase de départ.",
                    ],
                    [
                        "question" => "Quelle phrase évite correctement la répétition ? « Le professeur entre. Le professeur ouvre le livre. »",
                        "choices" => [
                            ["choice_text" => "Le professeur entre. Il ouvre le livre.", "is_correct" => true],
                            ["choice_text" => "Le professeur entre. Elle ouvre le livre.", "is_correct" => false],
                            ["choice_text" => "Le professeur entre. Ils ouvre le livre.", "is_correct" => false],
                            ["choice_text" => "Le professeur entre. Le ouvre le livre.", "is_correct" => false],
                        ],
                        "explanation" => "Le pronom sujet « il » remplace ici « le professeur » et permet d'éviter la répétition. Le verbe reste au singulier : « il ouvre ».",
                    ],
                    [
                        "question" => "« J'ai besoin de ce document. » Quelle reprise est correcte ?",
                        "choices" => [
                            ["choice_text" => "J'en ai besoin.", "is_correct" => true],
                            ["choice_text" => "J'y ai besoin.", "is_correct" => false],
                            ["choice_text" => "Je le ai besoin.", "is_correct" => false],
                            ["choice_text" => "Je lui ai besoin.", "is_correct" => false],
                        ],
                        "explanation" => "L'expression « avoir besoin de » appelle le pronom « en » lorsqu'on remplace le complément : « j'en ai besoin ».",
                    ],
                    [
                        "question" => "Vous parlez de votre propre voiture et de celle de votre amie. Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Ma voiture est ancienne, la sienne est récente.", "is_correct" => true],
                            ["choice_text" => "Ma voiture est ancienne, le sien est récent.", "is_correct" => false],
                            ["choice_text" => "Ma voiture est ancienne, les siennes est récente.", "is_correct" => false],
                            ["choice_text" => "Ma voiture est ancienne, celle son est récente.", "is_correct" => false],
                        ],
                        "explanation" => "« Voiture » est féminin singulier. Le pronom possessif correspondant à « sa voiture » est « la sienne ».",
                    ],
                    [
                        "question" => "Quelle phrase est entièrement correcte ?",
                        "choices" => [
                            ["choice_text" => "Je les connais, mais je ne leur parle pas souvent.", "is_correct" => true],
                            ["choice_text" => "Je leur connais, mais je ne les parle pas souvent.", "is_correct" => false],
                            ["choice_text" => "Je les connais, mais je ne les parle pas souvent.", "is_correct" => false],
                            ["choice_text" => "Je lui connais, mais je ne leur parle pas souvent.", "is_correct" => false],
                        ],
                        "explanation" => "« Connaître quelqu'un » demande un complément direct, donc « les connaître ». « Parler à quelqu'un » demande un complément indirect, donc « leur parler ».",
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
