<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FrenchGrammarBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'french-grammar')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Reconnaître les éléments essentiels de la phrase',
                'description' => 'Identifiez les principales catégories grammaticales et comprenez le rôle des mots dans des phrases simples.',
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Dans la phrase « Le chat dort sur le canapé », quel mot est le nom principal ?',
                        'choices' => [
                            ['choice_text' => 'chat', 'is_correct' => true],
                            ['choice_text' => 'dort', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                        ],
                        'explanation' => '« Chat » est un nom : il désigne un être vivant. « Dort » est le verbe, « sur » est une préposition et « le » est un déterminant.',
                    ],
                    [
                        'question' => 'Dans « Marie prépare le dîner », quel mot est le verbe ?',
                        'choices' => [
                            ['choice_text' => 'Marie', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'prépare', 'is_correct' => true],
                            ['choice_text' => 'dîner', 'is_correct' => false],
                        ],
                        'explanation' => '« Prépare » indique l’action réalisée par Marie. C’est donc le verbe de la phrase.',
                    ],
                    [
                        'question' => 'Quel mot est un adjectif dans « une petite maison » ?',
                        'choices' => [
                            ['choice_text' => 'une', 'is_correct' => false],
                            ['choice_text' => 'petite', 'is_correct' => true],
                            ['choice_text' => 'maison', 'is_correct' => false],
                            ['choice_text' => 'dans', 'is_correct' => false],
                        ],
                        'explanation' => '« Petite » décrit le nom « maison » et apporte une information sur sa taille. C’est donc un adjectif.',
                    ],
                    [
                        'question' => 'Dans « Mes amis arrivent demain », quel mot est le déterminant possessif ?',
                        'choices' => [
                            ['choice_text' => 'Mes', 'is_correct' => true],
                            ['choice_text' => 'amis', 'is_correct' => false],
                            ['choice_text' => 'arrivent', 'is_correct' => false],
                            ['choice_text' => 'demain', 'is_correct' => false],
                        ],
                        'explanation' => '« Mes » accompagne le nom « amis » et indique une relation de possession. C’est un déterminant possessif.',
                    ],
                    [
                        'question' => 'Dans « Elle parle doucement à son frère », quel mot indique la manière dont elle parle ?',
                        'choices' => [
                            ['choice_text' => 'parle', 'is_correct' => false],
                            ['choice_text' => 'frère', 'is_correct' => false],
                            ['choice_text' => 'doucement', 'is_correct' => true],
                            ['choice_text' => 'Elle', 'is_correct' => false],
                        ],
                        'explanation' => '« Doucement » précise comment elle parle. Il s’agit donc d’un adverbe de manière.',
                    ],
                    [
                        'question' => 'Quel mot relie les deux groupes dans « Paul lit et sa sœur écrit » ?',
                        'choices' => [
                            ['choice_text' => 'Paul', 'is_correct' => false],
                            ['choice_text' => 'lit', 'is_correct' => false],
                            ['choice_text' => 'sœur', 'is_correct' => false],
                            ['choice_text' => 'et', 'is_correct' => true],
                        ],
                        'explanation' => '« Et » relie deux éléments de même niveau dans la phrase. C’est une conjonction de coordination.',
                    ],
                    [
                        'question' => 'Dans « Le livre est sur la table », quel mot est une préposition ?',
                        'choices' => [
                            ['choice_text' => 'livre', 'is_correct' => false],
                            ['choice_text' => 'est', 'is_correct' => false],
                            ['choice_text' => 'table', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => true],
                        ],
                        'explanation' => '« Sur » introduit le complément qui indique la position du livre. C’est une préposition.',
                    ],
                    [
                        'question' => 'Dans « Ils jouent au football », quel mot est le pronom sujet ?',
                        'choices' => [
                            ['choice_text' => 'jouent', 'is_correct' => false],
                            ['choice_text' => 'Ils', 'is_correct' => true],
                            ['choice_text' => 'au', 'is_correct' => false],
                            ['choice_text' => 'football', 'is_correct' => false],
                        ],
                        'explanation' => '« Ils » remplace plusieurs personnes ou éléments et occupe la fonction de sujet. C’est un pronom personnel sujet.',
                    ],
                    [
                        'question' => 'Quel élément complète naturellement la phrase « Nous ___ un film ce soir » ?',
                        'choices' => [
                            ['choice_text' => 'regardons', 'is_correct' => true],
                            ['choice_text' => 'regarder', 'is_correct' => false],
                            ['choice_text' => 'regardez', 'is_correct' => false],
                            ['choice_text' => 'regarde', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec le sujet « nous », le verbe « regarder » se conjugue au présent sous la forme « regardons ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient correctement un sujet, un verbe et un complément ?',
                        'choices' => [
                            ['choice_text' => 'Un roman Sami.', 'is_correct' => false],
                            ['choice_text' => 'Lit un Sami roman.', 'is_correct' => false],
                            ['choice_text' => 'Sami un roman lit est.', 'is_correct' => false],
                            ['choice_text' => 'Sami lit un roman.', 'is_correct' => true],
                        ],
                        'explanation' => '« Sami » est le sujet, « lit » est le verbe et « un roman » est le complément. L’ordre est naturel et grammaticalement correct.',
                    ],
                    [
                        'question' => 'Dans « Nous arrivons demain à Rabat », quel mot indique le moment de l’action ?',
                        'choices' => [
                            ['choice_text' => 'Nous', 'is_correct' => false],
                            ['choice_text' => 'demain', 'is_correct' => true],
                            ['choice_text' => 'arrivons', 'is_correct' => false],
                            ['choice_text' => 'Rabat', 'is_correct' => false],
                        ],
                        'explanation' => '« Demain » est un adverbe de temps : il situe l’action dans le futur.',
                    ],
                ],
            ],
            [
                'title' => 'Maîtriser le genre et le nombre',
                'description' => 'Entraînez-vous à identifier le genre et le nombre des noms et à réaliser les accords essentiels entre déterminants, noms et adjectifs.',
                'duration' => 25,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Complétez correctement : « ___ voiture est rouge. »',
                        'choices' => [
                            ['choice_text' => 'Le', 'is_correct' => false],
                            ['choice_text' => 'La', 'is_correct' => true],
                            ['choice_text' => 'Les', 'is_correct' => false],
                            ['choice_text' => 'Un', 'is_correct' => false],
                        ],
                        'explanation' => '« Voiture » est un nom féminin singulier. Le déterminant défini correspondant est donc « la ».',
                    ],
                    [
                        'question' => 'Quelle phrase respecte l’accord de l’adjectif avec le nom ?',
                        'choices' => [
                            ['choice_text' => 'Une grand maison', 'is_correct' => false],
                            ['choice_text' => 'Un grande maison', 'is_correct' => false],
                            ['choice_text' => 'Une grande maison', 'is_correct' => true],
                            ['choice_text' => 'Une grandes maison', 'is_correct' => false],
                        ],
                        'explanation' => '« Maison » est féminin singulier. L’adjectif « grand » prend donc la forme féminine singulière « grande ».',
                    ],
                    [
                        'question' => 'Comment mettre correctement « un livre intéressant » au pluriel ?',
                        'choices' => [
                            ['choice_text' => 'Des livres intéressants', 'is_correct' => true],
                            ['choice_text' => 'Des livre intéressant', 'is_correct' => false],
                            ['choice_text' => 'Un livres intéressants', 'is_correct' => false],
                            ['choice_text' => 'Des livres intéressante', 'is_correct' => false],
                        ],
                        'explanation' => 'Au pluriel, le nom « livre » devient « livres » et l’adjectif « intéressant » devient « intéressants ». Le déterminant devient « des ».',
                    ],
                    [
                        'question' => 'Quelle forme convient avec « des filles » ?',
                        'choices' => [
                            ['choice_text' => 'fatiguées', 'is_correct' => true],
                            ['choice_text' => 'fatigué', 'is_correct' => false],
                            ['choice_text' => 'fatiguée', 'is_correct' => false],
                            ['choice_text' => 'fatigués', 'is_correct' => false],
                        ],
                        'explanation' => '« Filles » est féminin pluriel. L’adjectif doit donc être féminin pluriel : « fatiguées ».',
                    ],
                    [
                        'question' => 'Quel groupe est correctement accordé ?',
                        'choices' => [
                            ['choice_text' => 'Les petit garçons', 'is_correct' => false],
                            ['choice_text' => 'Le petits garçons', 'is_correct' => false],
                            ['choice_text' => 'Les petits garçons', 'is_correct' => true],
                            ['choice_text' => 'Les petites garçon', 'is_correct' => false],
                        ],
                        'explanation' => '« Garçons » est masculin pluriel : le déterminant et l’adjectif sont aussi au masculin pluriel.',
                    ],
                    [
                        'question' => 'Nadia parle de sa sœur à une amie. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ma sœur est content.', 'is_correct' => false],
                            ['choice_text' => 'Mon sœur est contente.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœurs est contente.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœur est contente.', 'is_correct' => true],
                        ],
                        'explanation' => '« Sœur » est féminin singulier, donc on utilise « ma ». L’adjectif « content » devient « contente » au féminin.',
                    ],
                    [
                        'question' => 'Comment parler de plusieurs fleurs blanches ?',
                        'choices' => [
                            ['choice_text' => 'Des fleur blanche', 'is_correct' => false],
                            ['choice_text' => 'Une fleurs blanches', 'is_correct' => false],
                            ['choice_text' => 'Des fleurs blanc', 'is_correct' => false],
                            ['choice_text' => 'Des fleurs blanches', 'is_correct' => true],
                        ],
                        'explanation' => '« Fleurs » est féminin pluriel et « blanche » doit donc prendre la forme féminine plurielle « blanches ».',
                    ],
                    [
                        'question' => 'Quel nom est masculin singulier ?',
                        'choices' => [
                            ['choice_text' => 'Le jardin', 'is_correct' => true],
                            ['choice_text' => 'La porte', 'is_correct' => false],
                            ['choice_text' => 'Les maisons', 'is_correct' => false],
                            ['choice_text' => 'Les écoles', 'is_correct' => false],
                        ],
                        'explanation' => '« Jardin » est masculin singulier et peut être précédé du déterminant défini « le ». Les autres groupes sont féminins ou pluriels.',
                    ],
                    [
                        'question' => 'Quelle phrase montre correctement le féminin de « étudiant » ?',
                        'choices' => [
                            ['choice_text' => 'Elle est étudiant.', 'is_correct' => false],
                            ['choice_text' => 'Elle est étudiantes.', 'is_correct' => false],
                            ['choice_text' => 'Elle est étudiante.', 'is_correct' => true],
                            ['choice_text' => 'Il est étudiante.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le féminin de « étudiant » est « étudiante ». Comme le sujet est « elle », le nom doit être au féminin singulier.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte avec un nom masculin pluriel ?',
                        'choices' => [
                            ['choice_text' => 'Cette vieux bâtiments', 'is_correct' => false],
                            ['choice_text' => 'Ces vieux bâtiments', 'is_correct' => true],
                            ['choice_text' => 'Ces vieille bâtiments', 'is_correct' => false],
                            ['choice_text' => 'Ce vieux bâtiment', 'is_correct' => false],
                        ],
                        'explanation' => '« Bâtiments » est masculin pluriel. Le déterminant démonstratif est « ces » et l’adjectif prend ici la forme « vieux ».',
                    ],
                    [
                        'question' => 'Choisissez la forme correcte : « Une robe ___ »',
                        'choices' => [
                            ['choice_text' => 'bleu', 'is_correct' => false],
                            ['choice_text' => 'bleues', 'is_correct' => false],
                            ['choice_text' => 'bleus', 'is_correct' => false],
                            ['choice_text' => 'bleue', 'is_correct' => true],
                        ],
                        'explanation' => '« Robe » est féminin singulier. L’adjectif « bleu » devient donc « bleue ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient uniquement des noms au pluriel correctement marqués ?',
                        'choices' => [
                            ['choice_text' => 'Les enfant regardent les étoile.', 'is_correct' => false],
                            ['choice_text' => 'Le enfants regarde les étoiles.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants regardent les étoiles.', 'is_correct' => true],
                            ['choice_text' => 'Les enfants regardes les étoile.', 'is_correct' => false],
                        ],
                        'explanation' => '« Les enfants » et « les étoiles » sont correctement marqués au pluriel. Le verbe « regardent » est également accordé avec le sujet pluriel.',
                    ],
                    [
                        'question' => 'Vous décrivez deux maisons qui sont grandes. Quelle formulation est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Deux grandes maisons', 'is_correct' => true],
                            ['choice_text' => 'Deux grande maisons', 'is_correct' => false],
                            ['choice_text' => 'Deux grands maisons', 'is_correct' => false],
                            ['choice_text' => 'Deux grandes maison', 'is_correct' => false],
                        ],
                        'explanation' => '« Maisons » est féminin pluriel. L’adjectif doit donc être au féminin pluriel : « grandes ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient une erreur d’accord ?',
                        'choices' => [
                            ['choice_text' => 'Les garçons sont heureux.', 'is_correct' => false],
                            ['choice_text' => 'Les garçons sont heureuse.', 'is_correct' => true],
                            ['choice_text' => 'Les filles sont heureuses.', 'is_correct' => false],
                            ['choice_text' => 'La fille est heureuse.', 'is_correct' => false],
                        ],
                        'explanation' => '« Garçons » est masculin pluriel, donc l’adjectif doit être « heureux ». « Heureuse » est la forme féminine singulière.',
                    ],
                ],
            ],
            [
                'title' => 'Choisir les bons déterminants',
                'description' => 'Travaillez les articles définis, indéfinis et possessifs dans des phrases simples et des situations du quotidien.',
                'duration' => 25,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Complétez : « Je vois ___ chat dans le jardin. » On parle ici d’un chat non identifié pour la première fois.',
                        'choices' => [
                            ['choice_text' => 'un', 'is_correct' => true],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'les', 'is_correct' => false],
                            ['choice_text' => 'ma', 'is_correct' => false],
                        ],
                        'explanation' => 'On utilise « un » pour introduire un nom masculin singulier qui n’est pas encore identifié précisément dans le contexte.',
                    ],
                    [
                        'question' => '« ___ soleil se couche. » Quel déterminant convient le mieux ?',
                        'choices' => [
                            ['choice_text' => 'Le', 'is_correct' => true],
                            ['choice_text' => 'Un', 'is_correct' => false],
                            ['choice_text' => 'Une', 'is_correct' => false],
                            ['choice_text' => 'Des', 'is_correct' => false],
                        ],
                        'explanation' => 'On dit « le soleil » pour désigner cet astre connu et unique.',
                    ],
                    [
                        'question' => 'Sami vient d’avoir une bonne idée. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'J’ai un idée.', 'is_correct' => false],
                            ['choice_text' => 'J’ai une idée.', 'is_correct' => true],
                            ['choice_text' => 'J’ai des idée.', 'is_correct' => false],
                            ['choice_text' => 'J’ai le idée.', 'is_correct' => false],
                        ],
                        'explanation' => '« Idée » est un nom féminin singulier. Le déterminant indéfini correspondant est « une ».',
                    ],
                    [
                        'question' => 'Vous parlez de plusieurs livres précis qui sont posés devant vous. Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'Un livres sont sur la table.', 'is_correct' => false],
                            ['choice_text' => 'Une livres est sur la table.', 'is_correct' => false],
                            ['choice_text' => 'Les livres sont sur la table.', 'is_correct' => true],
                            ['choice_text' => 'Le livre sont sur la table.', 'is_correct' => false],
                        ],
                        'explanation' => 'On parle de plusieurs livres identifiés, donc « les » convient. Le nom et le verbe sont également au pluriel.',
                    ],
                    [
                        'question' => 'Quel déterminant complète correctement : « Nous avons ___ amis à Casablanca. »',
                        'choices' => [
                            ['choice_text' => 'des', 'is_correct' => true],
                            ['choice_text' => 'de la', 'is_correct' => false],
                            ['choice_text' => 'un', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                        ],
                        'explanation' => '« Amis » est masculin pluriel et n’est pas présenté comme un groupe précisément identifié. Le déterminant indéfini pluriel est donc « des ».',
                    ],
                    [
                        'question' => 'Nadia parle de sa propre sœur à une amie. Quel déterminant possessif convient ?',
                        'choices' => [
                            ['choice_text' => 'mon', 'is_correct' => false],
                            ['choice_text' => 'mes', 'is_correct' => false],
                            ['choice_text' => 'leur', 'is_correct' => false],
                            ['choice_text' => 'ma', 'is_correct' => true],
                        ],
                        'explanation' => '« Sœur » est féminin singulier. Avec le possesseur « je », on utilise « ma » : « ma sœur ».',
                    ],
                    [
                        'question' => 'Quelle phrase exprime correctement la possession de plusieurs objets ?',
                        'choices' => [
                            ['choice_text' => 'Ce sont ma clés.', 'is_correct' => false],
                            ['choice_text' => 'Ce sont mon clés.', 'is_correct' => false],
                            ['choice_text' => 'Ce sont un clés.', 'is_correct' => false],
                            ['choice_text' => 'Ce sont mes clés.', 'is_correct' => true],
                        ],
                        'explanation' => '« Clés » est au pluriel. Le possessif correspondant à « je » est donc « mes ».',
                    ],
                    [
                        'question' => 'Complétez : « ___ école est près de chez moi. »',
                        'choices' => [
                            ['choice_text' => 'Ma', 'is_correct' => false],
                            ['choice_text' => 'Mon', 'is_correct' => true],
                            ['choice_text' => 'Mes', 'is_correct' => false],
                            ['choice_text' => 'Le', 'is_correct' => false],
                        ],
                        'explanation' => 'Même si « école » est féminin, on emploie « mon » devant un nom féminin commençant par une voyelle pour éviter l’enchaînement difficile « ma école ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte pour parler d’un seul objet féminin indéfini ?',
                        'choices' => [
                            ['choice_text' => 'J’achète un lampe.', 'is_correct' => false],
                            ['choice_text' => 'J’achète des lampe.', 'is_correct' => false],
                            ['choice_text' => 'J’achète le lampe.', 'is_correct' => false],
                            ['choice_text' => 'J’achète une lampe.', 'is_correct' => true],
                        ],
                        'explanation' => '« Lampe » est féminin singulier. L’article indéfini correspondant est « une ».',
                    ],
                    [
                        'question' => 'Dans quelle phrase le déterminant « cet » est-il correctement employé ?',
                        'choices' => [
                            ['choice_text' => 'Cet fille est sérieuse.', 'is_correct' => false],
                            ['choice_text' => 'Cet étudiants sont sérieux.', 'is_correct' => false],
                            ['choice_text' => 'Cet étudiant est sérieux.', 'is_correct' => true],
                            ['choice_text' => 'Cet école est grande.', 'is_correct' => false],
                        ],
                        'explanation' => '« Cet » s’emploie devant un nom masculin singulier commençant par une voyelle ou un h muet. « Étudiant » répond à ces conditions.',
                    ],
                    [
                        'question' => 'Quel groupe est correct ?',
                        'choices' => [
                            ['choice_text' => 'Notre nouveaux voisins', 'is_correct' => false],
                            ['choice_text' => 'Nos nouveaux voisins', 'is_correct' => true],
                            ['choice_text' => 'Nos nouvelle voisins', 'is_correct' => false],
                            ['choice_text' => 'Notre nouvelles voisin', 'is_correct' => false],
                        ],
                        'explanation' => '« Voisins » est masculin pluriel. Le possessif pluriel « nos » et l’adjectif masculin pluriel « nouveaux » sont donc adaptés.',
                    ],
                    [
                        'question' => 'Vous voulez parler d’un téléphone précis déjà mentionné. Quelle phrase est la plus naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Un téléphone est sur la table.', 'is_correct' => false],
                            ['choice_text' => 'Une téléphone est sur la table.', 'is_correct' => false],
                            ['choice_text' => 'Le téléphone est sur la table.', 'is_correct' => true],
                            ['choice_text' => 'Des téléphone est sur la table.', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme le téléphone est déjà identifié dans le contexte, l’article défini « le » convient. Le nom est aussi masculin singulier.',
                    ],
                ],
            ],
            [
                'title' => 'Conjuguer les verbes au présent',
                'description' => 'Pratiquez les formes essentielles du présent avec les verbes réguliers et quelques verbes très fréquents dans des situations simples.',
                'duration' => 30,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Complétez : « Je ___ français tous les jours. »',
                        'choices' => [
                            ['choice_text' => 'parles', 'is_correct' => false],
                            ['choice_text' => 'parlons', 'is_correct' => false],
                            ['choice_text' => 'parle', 'is_correct' => true],
                            ['choice_text' => 'parlent', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », le verbe « parler » se conjugue « je parle » au présent.',
                    ],
                    [
                        'question' => 'Quelle forme convient avec « nous » ?',
                        'choices' => [
                            ['choice_text' => 'Nous travaille', 'is_correct' => false],
                            ['choice_text' => 'Nous travaillons', 'is_correct' => true],
                            ['choice_text' => 'Nous travaillez', 'is_correct' => false],
                            ['choice_text' => 'Nous travaillent', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », le verbe travailler prend la terminaison -ons au présent : « nous travaillons ».',
                    ],
                    [
                        'question' => 'Choisissez la phrase correcte.',
                        'choices' => [
                            ['choice_text' => 'Tu regarde la télévision.', 'is_correct' => false],
                            ['choice_text' => 'Tu regardons la télévision.', 'is_correct' => false],
                            ['choice_text' => 'Tu regardez la télévision.', 'is_correct' => false],
                            ['choice_text' => 'Tu regardes la télévision.', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « tu », le verbe « regarder » se conjugue « tu regardes ». La terminaison -es est utilisée pour de nombreux verbes du premier groupe.',
                    ],
                    [
                        'question' => 'Quelle forme du verbe « être » convient ? « Vous ___ en avance. »',
                        'choices' => [
                            ['choice_text' => 'est', 'is_correct' => false],
                            ['choice_text' => 'êtes', 'is_correct' => true],
                            ['choice_text' => 'sommes', 'is_correct' => false],
                            ['choice_text' => 'sont', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec le sujet « vous », le verbe être se conjugue « vous êtes ».',
                    ],
                    [
                        'question' => 'Complétez : « Ils ___ à l’université le matin. »',
                        'choices' => [
                            ['choice_text' => 'vont', 'is_correct' => true],
                            ['choice_text' => 'va', 'is_correct' => false],
                            ['choice_text' => 'allez', 'is_correct' => false],
                            ['choice_text' => 'allons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe « aller » se conjugue « ils vont » avec un sujet masculin ou mixte au pluriel.',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Nous apprend le français. » Quelle correction faut-il apporter ?',
                        'choices' => [
                            ['choice_text' => 'Nous apprenons le français.', 'is_correct' => true],
                            ['choice_text' => 'Nous apprenez le français.', 'is_correct' => false],
                            ['choice_text' => 'Nous apprennent le français.', 'is_correct' => false],
                            ['choice_text' => 'Nous apprendre le français.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », le verbe apprendre se conjugue « nous apprenons ». Le verbe doit être accordé avec le sujet.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement conjuguée ?',
                        'choices' => [
                            ['choice_text' => 'Elle font ses devoirs.', 'is_correct' => false],
                            ['choice_text' => 'Elle fais ses devoirs.', 'is_correct' => false],
                            ['choice_text' => 'Elle faire ses devoirs.', 'is_correct' => false],
                            ['choice_text' => 'Elle fait ses devoirs.', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « elle », le verbe faire se conjugue « elle fait ». La forme « font » correspond à « ils/elles ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le verbe « avoir » ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons deux cours aujourd’hui.', 'is_correct' => true],
                            ['choice_text' => 'Nous avez deux cours aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Nous ont deux cours aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Nous a deux cours aujourd’hui.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », le verbe avoir se conjugue « nous avons ».',
                    ],
                    [
                        'question' => 'Complétez : « Chaque matin, vous ___ le bus. »',
                        'choices' => [
                            ['choice_text' => 'prends', 'is_correct' => false],
                            ['choice_text' => 'prenez', 'is_correct' => true],
                            ['choice_text' => 'prenons', 'is_correct' => false],
                            ['choice_text' => 'prend', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », le verbe prendre se conjugue « vous prenez » au présent.',
                    ],
                    [
                        'question' => 'Quel énoncé est correct ?',
                        'choices' => [
                            ['choice_text' => 'Je va au marché le samedi.', 'is_correct' => false],
                            ['choice_text' => 'Je vas au marché le samedi.', 'is_correct' => false],
                            ['choice_text' => 'Je vais au marché le samedi.', 'is_correct' => true],
                            ['choice_text' => 'Je aller au marché le samedi.', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme du verbe aller avec « je » est « je vais ».',
                    ],
                    [
                        'question' => 'Quelle phrase présente correctement le verbe « vouloir » avec « tu » ?',
                        'choices' => [
                            ['choice_text' => 'Tu veut un café ?', 'is_correct' => false],
                            ['choice_text' => 'Tu voulez un café ?', 'is_correct' => false],
                            ['choice_text' => 'Tu veux un café ?', 'is_correct' => true],
                            ['choice_text' => 'Tu vouloir un café ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « tu », vouloir se conjugue « tu veux ». C’est une forme très fréquente dans les demandes du quotidien.',
                    ],
                    [
                        'question' => 'Dans « Mes parents habitent à Rabat », qu’est-ce qui explique la terminaison de « habitent » ?',
                        'choices' => [
                            ['choice_text' => 'Le nom « Rabat » est au pluriel.', 'is_correct' => false],
                            ['choice_text' => 'Le verbe habiter est irrégulier au présent.', 'is_correct' => false],
                            ['choice_text' => 'Le complément de lieu commande l’accord.', 'is_correct' => false],
                            ['choice_text' => 'Le sujet « mes parents » est au pluriel.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sujet « mes parents » est à la troisième personne du pluriel. Le verbe « habiter » prend donc la forme « habitent ».',
                    ],
                    [
                        'question' => 'Quel choix complète correctement : « Elle ___ ses clés sur la table. »',
                        'choices' => [
                            ['choice_text' => 'mets', 'is_correct' => false],
                            ['choice_text' => 'mettent', 'is_correct' => false],
                            ['choice_text' => 'met', 'is_correct' => true],
                            ['choice_text' => 'mettre', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elle », le verbe mettre se conjugue « elle met » au présent.',
                    ],
                    [
                        'question' => 'Un camarade dit : « Ils mange à midi. » Quelle est la bonne correction ?',
                        'choices' => [
                            ['choice_text' => 'Ils manges à midi.', 'is_correct' => false],
                            ['choice_text' => 'Ils mangent à midi.', 'is_correct' => true],
                            ['choice_text' => 'Ils mangeons à midi.', 'is_correct' => false],
                            ['choice_text' => 'Ils manger à midi.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « ils » demande la troisième personne du pluriel. Le verbe manger devient donc « mangent ».',
                    ],
                ],
            ],
            [
                'title' => 'Construire et corriger des phrases simples',
                'description' => 'Repérez les erreurs courantes de construction, d’accord et de conjugaison et choisissez la formulation correcte.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase est correctement construite ?',
                        'choices' => [
                            ['choice_text' => 'Mon frère un journal lit.', 'is_correct' => false],
                            ['choice_text' => 'Mon frère lit un journal.', 'is_correct' => true],
                            ['choice_text' => 'Lit mon frère un journal est.', 'is_correct' => false],
                            ['choice_text' => 'Mon frère lire journal.', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure sujet + verbe + complément donne ici une phrase simple et naturelle : « Mon frère lit un journal. »',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « La fille sont contente. » Quelle correction est correcte ?',
                        'choices' => [
                            ['choice_text' => 'La fille sont contentes.', 'is_correct' => false],
                            ['choice_text' => 'La fille es contente.', 'is_correct' => false],
                            ['choice_text' => 'La fille être contente.', 'is_correct' => false],
                            ['choice_text' => 'La fille est contente.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sujet « la fille » est singulier, donc le verbe être devient « est » et l’adjectif reste au féminin singulier : « contente ».',
                    ],
                    [
                        'question' => 'Quelle phrase ne contient aucune erreur ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons un grande maison.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons une grands maison.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons une grande maison.', 'is_correct' => true],
                            ['choice_text' => 'Nous avoir une grande maison.', 'is_correct' => false],
                        ],
                        'explanation' => '« Maison » est féminin singulier, donc on utilise « une grande maison ». Le verbe doit être conjugué : « nous avons ».',
                    ],
                    [
                        'question' => 'Quelle question est correctement formée avec l’inversion du sujet ?',
                        'choices' => [
                            ['choice_text' => 'Où tu habites ?', 'is_correct' => false],
                            ['choice_text' => 'Où habite tu ?', 'is_correct' => false],
                            ['choice_text' => 'Où habites-tu ?', 'is_correct' => true],
                            ['choice_text' => 'Où habiter-tu ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Où habites-tu ? » place le sujet « tu » après le verbe : c’est l’inversion.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement négative ?',
                        'choices' => [
                            ['choice_text' => 'Je ne comprends pas.', 'is_correct' => true],
                            ['choice_text' => 'Je comprends ne pas.', 'is_correct' => false],
                            ['choice_text' => 'Je pas comprends ne.', 'is_correct' => false],
                            ['choice_text' => 'Je ne pas comprends.', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’écrit standard, la négation encadre le verbe avec « ne ... pas » : « je ne comprends pas ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « J’aime beaucoup les musique françaises. » Quelle correction faut-il faire ?',
                        'choices' => [
                            ['choice_text' => 'J’aime beaucoup la musiques françaises.', 'is_correct' => false],
                            ['choice_text' => 'J’aime beaucoup les musique français.', 'is_correct' => false],
                            ['choice_text' => 'J’aime beaucoup le musiques française.', 'is_correct' => false],
                            ['choice_text' => 'J’aime beaucoup les musiques françaises.', 'is_correct' => true],
                        ],
                        'explanation' => '« Les » marque le pluriel, donc « musique » devient « musiques ». L’adjectif doit aussi s’accorder : « françaises ».',
                    ],
                    [
                        'question' => 'Quelle formulation convient pour parler d’une seule personne féminine ?',
                        'choices' => [
                            ['choice_text' => 'Elle est un bon étudiante.', 'is_correct' => false],
                            ['choice_text' => 'Elle est une bons étudiante.', 'is_correct' => false],
                            ['choice_text' => 'Elle est des bonne étudiante.', 'is_correct' => false],
                            ['choice_text' => 'Elle est une bonne étudiante.', 'is_correct' => true],
                        ],
                        'explanation' => '« Étudiante » est féminin singulier. Le déterminant et l’adjectif doivent donc prendre les formes féminines « une » et « bonne ».',
                    ],
                    [
                        'question' => 'Quel mot complète correctement : « Il ___ pas aujourd’hui. »',
                        'choices' => [
                            ['choice_text' => 'ne vient', 'is_correct' => true],
                            ['choice_text' => 'vient ne', 'is_correct' => false],
                            ['choice_text' => 'ne venir', 'is_correct' => false],
                            ['choice_text' => 'pas vient', 'is_correct' => false],
                        ],
                        'explanation' => 'La négation encadre le verbe conjugué : « il ne vient pas ». Le verbe venir se conjugue ici au présent.',
                    ],
                    [
                        'question' => 'Quel énoncé accorde bien le sujet, le verbe et le démonstratif ?',
                        'choices' => [
                            ['choice_text' => 'Mes amis aiment cette ville.', 'is_correct' => true],
                            ['choice_text' => 'Mes amis aime cette ville.', 'is_correct' => false],
                            ['choice_text' => 'Mes amis aiment ces ville.', 'is_correct' => false],
                            ['choice_text' => 'Mes ami aiment cette ville.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « mes amis » est pluriel, donc le verbe prend la forme « aiment ». Le nom « ville » reste singulier dans cette expression.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime correctement une habitude ?',
                        'choices' => [
                            ['choice_text' => 'Chaque soir, je lire avant de dormir.', 'is_correct' => false],
                            ['choice_text' => 'Chaque soir, je lis avant de dormir.', 'is_correct' => true],
                            ['choice_text' => 'Chaque soir, je lisais hier avant de dormir.', 'is_correct' => false],
                            ['choice_text' => 'Chaque soir, je lit avant de dormir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le présent est approprié pour exprimer une habitude actuelle avec « chaque soir ». Le verbe lire se conjugue ici « je lis ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Nous est en classe. » Quelle correction faut-il apporter ?',
                        'choices' => [
                            ['choice_text' => 'Nous êtes en classe.', 'is_correct' => false],
                            ['choice_text' => 'Nous sommes en classe.', 'is_correct' => true],
                            ['choice_text' => 'Nous sont en classe.', 'is_correct' => false],
                            ['choice_text' => 'Nous être en classe.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », le verbe être se conjugue « nous sommes ».',
                    ],
                    [
                        'question' => 'Quelle phrase respecte à la fois le genre, le nombre et la conjugaison ?',
                        'choices' => [
                            ['choice_text' => 'Les petite filles joue dehors.', 'is_correct' => false],
                            ['choice_text' => 'Le petites filles jouent dehors.', 'is_correct' => false],
                            ['choice_text' => 'Les petites filles jouent dehors.', 'is_correct' => true],
                            ['choice_text' => 'Les petites fille joue dehors.', 'is_correct' => false],
                        ],
                        'explanation' => '« Filles » est féminin pluriel, donc « les petites filles » est correctement accordé. Le verbe « jouent » correspond au sujet pluriel.',
                    ],
                ],
            ],
            [
                'title' => 'Révision grammaticale en contexte',
                'description' => 'Mobilisez plusieurs notions de grammaire débutante dans des phrases réalistes : accords, déterminants, pronoms, conjugaison et ordre des mots.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Vous présentez votre famille : « ___ parents habitent à Kénitra. » Quel choix convient ?',
                        'choices' => [
                            ['choice_text' => 'Mes', 'is_correct' => true],
                            ['choice_text' => 'Ma', 'is_correct' => false],
                            ['choice_text' => 'Mon', 'is_correct' => false],
                            ['choice_text' => 'Une', 'is_correct' => false],
                        ],
                        'explanation' => '« Parents » est un nom masculin pluriel. Pour exprimer la possession avec « je », on utilise « mes ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte pour une activité qui se déroule maintenant ?',
                        'choices' => [
                            ['choice_text' => 'Nous travailler maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Nous travaillez maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Nous travaillons maintenant.', 'is_correct' => true],
                            ['choice_text' => 'Nous travaille maintenant.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le présent peut exprimer une action en cours. Avec « nous », le verbe travailler devient « travaillons ».',
                    ],
                    [
                        'question' => 'Un enseignant écrit : « Les classe sont propres. » Il parle de plusieurs classes. Quelle correction est nécessaire ?',
                        'choices' => [
                            ['choice_text' => 'Les classes est propres.', 'is_correct' => false],
                            ['choice_text' => 'La classes sont propre.', 'is_correct' => false],
                            ['choice_text' => 'Les classes sont propres.', 'is_correct' => true],
                            ['choice_text' => 'Le classe sont propres.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet est pluriel : « classe » prend un s, et le verbe « sont » et l’adjectif « propres » restent au pluriel.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le pronom « ils » ?',
                        'choices' => [
                            ['choice_text' => 'Ils regarde un match.', 'is_correct' => false],
                            ['choice_text' => 'Ils regardent un match.', 'is_correct' => true],
                            ['choice_text' => 'Ils regardez un match.', 'is_correct' => false],
                            ['choice_text' => 'Ils regarder un match.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ils » est un pronom personnel pluriel et demande ici la troisième personne du pluriel : « regardent ».',
                    ],
                    [
                        'question' => 'Quelle formulation correspond à une seule porte blanche ?',
                        'choices' => [
                            ['choice_text' => 'Un porte blanc', 'is_correct' => false],
                            ['choice_text' => 'Une portes blanches', 'is_correct' => false],
                            ['choice_text' => 'Des porte blanche', 'is_correct' => false],
                            ['choice_text' => 'Une porte blanche', 'is_correct' => true],
                        ],
                        'explanation' => '« Porte » est féminin singulier, donc on choisit « une ». L’adjectif doit s’accorder au féminin singulier : « blanche ».',
                    ],
                    [
                        'question' => 'Quel enchaînement est grammaticalement correct ?',
                        'choices' => [
                            ['choice_text' => 'Je prend le train à huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Je prends le train à huit heures.', 'is_correct' => true],
                            ['choice_text' => 'Je prends la train à huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Je prendre le train à huit heures.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe prendre avec « je » donne « je prends ». Le nom « train » est masculin, donc « le train » est correct.',
                    ],
                    [
                        'question' => 'Vous voulez dire qu’une personne n’a aucun frère. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Il ne a pas un frère.', 'is_correct' => false],
                            ['choice_text' => 'Il n’a pas de frère.', 'is_correct' => true],
                            ['choice_text' => 'Il n’a pas des frère.', 'is_correct' => false],
                            ['choice_text' => 'Il pas a de frère ne.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « ne ... pas », « un » devient « de » devant un nom : « il n’a pas de frère ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient un accord correct entre le sujet et le verbe ?',
                        'choices' => [
                            ['choice_text' => 'Paul et Lina arrive à midi.', 'is_correct' => false],
                            ['choice_text' => 'Paul et Lina arrives à midi.', 'is_correct' => false],
                            ['choice_text' => 'Paul et Lina arriver à midi.', 'is_correct' => false],
                            ['choice_text' => 'Paul et Lina arrivent à midi.', 'is_correct' => true],
                        ],
                        'explanation' => 'Deux personnes forment un sujet pluriel. Le verbe arriver doit donc être à la troisième personne du pluriel : « arrivent ».',
                    ],
                    [
                        'question' => 'Quel mot remplace correctement « ma sœur » dans « Ma sœur travaille ici » ?',
                        'choices' => [
                            ['choice_text' => 'Ils', 'is_correct' => false],
                            ['choice_text' => 'Nous', 'is_correct' => false],
                            ['choice_text' => 'Elle', 'is_correct' => true],
                            ['choice_text' => 'Vous', 'is_correct' => false],
                        ],
                        'explanation' => '« Ma sœur » désigne une seule personne féminine. Le pronom sujet correspondant est « elle ».',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Je ne parle pas très bien espagnol.', 'is_correct' => true],
                            ['choice_text' => 'Je parle ne pas très bien espagnol.', 'is_correct' => false],
                            ['choice_text' => 'Je ne parle très bien pas espagnol.', 'is_correct' => false],
                            ['choice_text' => 'Je pas ne parle très bien espagnol.', 'is_correct' => false],
                        ],
                        'explanation' => 'La négation standard place « ne » avant le verbe et « pas » après lui : « je ne parle pas ».',
                    ],
                    [
                        'question' => 'Hind cherche les clés qui lui appartiennent. Complétez : « Elle cherche ___ clés. »',
                        'choices' => [
                            ['choice_text' => 'ces', 'is_correct' => false],
                            ['choice_text' => 'c’est', 'is_correct' => false],
                            ['choice_text' => 's’est', 'is_correct' => false],
                            ['choice_text' => 'ses', 'is_correct' => true],
                        ],
                        'explanation' => '« Ses » est un possessif : il indique que les clés appartiennent à la personne. « Ces » sert à montrer ou désigner des éléments.',
                    ],
                    [
                        'question' => 'Quelle phrase distingue correctement « a » et « à » ?',
                        'choices' => [
                            ['choice_text' => 'Il à rendez-vous a dix heures.', 'is_correct' => false],
                            ['choice_text' => 'Il a rendez-vous a dix heures.', 'is_correct' => false],
                            ['choice_text' => 'Il a rendez-vous à dix heures.', 'is_correct' => true],
                            ['choice_text' => 'Il à rendez-vous à dix heures.', 'is_correct' => false],
                        ],
                        'explanation' => '« A » sans accent est une forme du verbe avoir : « il a ». « À » avec accent est une préposition, ici utilisée devant « dix heures ».',
                    ],
                    [
                        'question' => 'Quel choix complète correctement : « Où ___ tes livres ? »',
                        'choices' => [
                            ['choice_text' => 'est', 'is_correct' => false],
                            ['choice_text' => 'sont', 'is_correct' => true],
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'être', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet réel est « tes livres », qui est pluriel. Avec le verbe être, on utilise donc « sont ».',
                    ],
                    [
                        'question' => 'Quelle phrase respecte correctement l’ordre des mots ?',
                        'choices' => [
                            ['choice_text' => 'Le professeur la leçon explique aux étudiants.', 'is_correct' => false],
                            ['choice_text' => 'Explique le professeur aux étudiants la leçon est.', 'is_correct' => false],
                            ['choice_text' => 'Leçon le professeur aux étudiants explique.', 'is_correct' => false],
                            ['choice_text' => 'Le professeur explique la leçon aux étudiants.', 'is_correct' => true],
                        ],
                        'explanation' => 'La phrase suit un ordre naturel : sujet « le professeur », verbe « explique », complément direct « la leçon », puis complément indirect « aux étudiants ».',
                    ],
                    [
                        'question' => 'Vous décrivez plusieurs étudiants qui sont sérieux. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Les étudiants sont sérieux.', 'is_correct' => true],
                            ['choice_text' => 'Les étudiants est sérieux.', 'is_correct' => false],
                            ['choice_text' => 'Les étudiants sont sérieuse.', 'is_correct' => false],
                            ['choice_text' => 'Les étudiant sont sérieux.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet est masculin pluriel : « les étudiants ». Le verbe prend donc la forme « sont » et l’adjectif « sérieux » reste masculin pluriel.',
                    ],
                ],
            ],
            [
                'title' => 'Corriger les erreurs fréquentes',
                'description' => 'Repérez des erreurs typiques de débutant concernant les accords, les homophones, les articles, les pronoms et les formes verbales.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Un étudiant écrit : « Je suis à Paris et demain je vais à Lyon. » Quelle évaluation est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Il faut remplacer « suis » par « est ».', 'is_correct' => false],
                            ['choice_text' => 'Il faut écrire « je va à Lyon ».', 'is_correct' => false],
                            ['choice_text' => 'Il faut supprimer la préposition « à ».', 'is_correct' => false],
                            ['choice_text' => 'La phrase est correcte.', 'is_correct' => true],
                        ],
                        'explanation' => '« Je suis » est la bonne forme du verbe être avec « je » et « je vais » est la bonne forme du verbe aller. La préposition « à » convient avec les noms de villes.',
                    ],
                    [
                        'question' => 'Quelle correction faut-il faire dans « Elles est prêtes » ?',
                        'choices' => [
                            ['choice_text' => 'Elle est prêtes.', 'is_correct' => false],
                            ['choice_text' => 'Elles es prête.', 'is_correct' => false],
                            ['choice_text' => 'Elles être prêtes.', 'is_correct' => false],
                            ['choice_text' => 'Elles sont prêtes.', 'is_correct' => true],
                        ],
                        'explanation' => '« Elles » est pluriel, donc le verbe être devient « sont ». Comme le groupe est féminin pluriel, « prêtes » convient.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « c’est » ?',
                        'choices' => [
                            ['choice_text' => 'C’est mon nouveau livre.', 'is_correct' => true],
                            ['choice_text' => 'S’est mon nouveau livre.', 'is_correct' => false],
                            ['choice_text' => 'C’est mes nouveau livre.', 'is_correct' => false],
                            ['choice_text' => 'C’est mon nouveaux livre.', 'is_correct' => false],
                        ],
                        'explanation' => '« C’est » correspond à « cela est ». Ici, « mon nouveau livre » est correctement accordé au masculin singulier.',
                    ],
                    [
                        'question' => 'Quel choix complète : « Je ___ deux frères. »',
                        'choices' => [
                            ['choice_text' => 'est', 'is_correct' => false],
                            ['choice_text' => 'ai', 'is_correct' => true],
                            ['choice_text' => 'suis', 'is_correct' => false],
                            ['choice_text' => 'as', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour exprimer la possession avec le sujet « je », on utilise le verbe avoir : « j’ai deux frères ».',
                    ],
                    [
                        'question' => 'Les étudiants disent entre eux qu’ils n’ont pas cours demain. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nous ne avons pas des cours demain.', 'is_correct' => false],
                            ['choice_text' => 'Nous n’avons pas du cours demain.', 'is_correct' => false],
                            ['choice_text' => 'Nous n’avons pas de cours demain.', 'is_correct' => true],
                            ['choice_text' => 'Nous pas avons ne de cours demain.', 'is_correct' => false],
                        ],
                        'explanation' => 'La négation entoure le verbe avec « ne ... pas », et après la négation, on utilise ici « de cours ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « est » et « et » ?',
                        'choices' => [
                            ['choice_text' => 'Paul et étudiant et Marie travaille.', 'is_correct' => false],
                            ['choice_text' => 'Paul est étudiant et Marie travaille.', 'is_correct' => true],
                            ['choice_text' => 'Paul est étudiant est Marie travaille.', 'is_correct' => false],
                            ['choice_text' => 'Paul et étudiant est Marie travaille.', 'is_correct' => false],
                        ],
                        'explanation' => '« Est » est une forme du verbe être, tandis que « et » sert à relier deux éléments. La phrase utilise correctement les deux mots.',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Les enfants joue dans le parc. » Quelle correction est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Les enfant jouent dans le parc.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants joue dans les parc.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants jouer dans le parc.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants jouent dans le parc.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sujet « les enfants » est pluriel. Le verbe jouer doit donc être conjugué à la troisième personne du pluriel : « jouent ».',
                    ],
                    [
                        'question' => 'Quelle phrase respecte l’accord du possessif ?',
                        'choices' => [
                            ['choice_text' => 'Sa frère et son sœur sont ici.', 'is_correct' => false],
                            ['choice_text' => 'Ses frère et ses sœur sont ici.', 'is_correct' => false],
                            ['choice_text' => 'Son frère et sa sœur sont ici.', 'is_correct' => true],
                            ['choice_text' => 'Son frères et sa sœurs sont ici.', 'is_correct' => false],
                        ],
                        'explanation' => '« Frère » est masculin singulier : « son frère ». « Sœur » est féminin singulier : « sa sœur ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « où » pour parler d’un lieu ?',
                        'choices' => [
                            ['choice_text' => 'Où est la bibliothèque ?', 'is_correct' => true],
                            ['choice_text' => 'Ou est la bibliothèque ?', 'is_correct' => false],
                            ['choice_text' => 'Ou la bibliothèque est-elle ?', 'is_correct' => false],
                            ['choice_text' => 'Où est bibliothèque la ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Où » avec accent grave sert à poser une question sur le lieu. « Ou » sans accent signifie « ou bien ».',
                    ],
                    [
                        'question' => 'Karim et Lina ont chacun un livre. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ils ont chacun leur livre.', 'is_correct' => true],
                            ['choice_text' => 'Ils ont chacun leurs livre.', 'is_correct' => false],
                            ['choice_text' => 'Ils ont chacun leur livres.', 'is_correct' => false],
                            ['choice_text' => 'Ils ont chacun notre livre.', 'is_correct' => false],
                        ],
                        'explanation' => 'Chacun a un seul livre, donc « leur » reste au singulier, comme « livre ».',
                    ],
                    [
                        'question' => 'Quel choix convient dans « Il ___ fatigué après le cours » ?',
                        'choices' => [
                            ['choice_text' => 'et', 'is_correct' => false],
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'sont', 'is_correct' => false],
                            ['choice_text' => 'est', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec le sujet « il », le verbe être prend la forme « est ». Ici, il sert à relier le sujet à l’adjectif « fatigué ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement écrite ?',
                        'choices' => [
                            ['choice_text' => 'Aujourd hui nous étudions à la bibliothèque.', 'is_correct' => false],
                            ['choice_text' => 'Aujourd’hui, nous étudions à la bibliothèque.', 'is_correct' => true],
                            ['choice_text' => 'Aujourd’hui nous étudie à la bibliothèque.', 'is_correct' => false],
                            ['choice_text' => 'Aujourd’hui, nous étudier à la bibliothèque.', 'is_correct' => false],
                        ],
                        'explanation' => '« Aujourd’hui » s’écrit avec une apostrophe, et avec « nous » le verbe devient « étudions ».',
                    ],
                    [
                        'question' => 'Un apprenant écrit : « Cette garçon est gentil. » Quelle correction est nécessaire ?',
                        'choices' => [
                            ['choice_text' => 'Ce garçon est gentil.', 'is_correct' => true],
                            ['choice_text' => 'Cette garçon est gentille.', 'is_correct' => false],
                            ['choice_text' => 'Cet garçon est gentil.', 'is_correct' => false],
                            ['choice_text' => 'Ce garçon est gentille.', 'is_correct' => false],
                        ],
                        'explanation' => '« Garçon » est masculin singulier. Le déterminant démonstratif correct est donc « ce » et l’adjectif masculin singulier est « gentil ».',
                    ],
                    [
                        'question' => 'Quelle phrase est grammaticalement correcte ?',
                        'choices' => [
                            ['choice_text' => 'Je me lèves à sept heures tous les jours.', 'is_correct' => false],
                            ['choice_text' => 'Je me lever à sept heures tous les jours.', 'is_correct' => false],
                            ['choice_text' => 'Je me lève à sept heures tous les jours.', 'is_correct' => true],
                            ['choice_text' => 'Je me lève à sept heures tous les jour.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe pronominal « se lever » se conjugue « je me lève ». Le groupe « tous les jours » reste également au pluriel.',
                    ],
                ],
            ],
            [
                'title' => 'Application globale : les bases de la grammaire française',
                'description' => 'Révisez les notions essentielles à travers des situations variées qui demandent de choisir, corriger et interpréter des formulations simples.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Une étudiante écrit dans son cahier : « Ma professeur est absent aujourd’hui. » Quelle formulation convient si le professeur est une femme ?',
                        'choices' => [
                            ['choice_text' => 'Mon professeure est absent aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Ma professeur est absent aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Ma professeure est absente aujourd’hui.', 'is_correct' => true],
                            ['choice_text' => 'Mon professeures est absente aujourd’hui.', 'is_correct' => false],
                        ],
                        'explanation' => '« Professeure » est ici au féminin singulier. Le possessif est « ma » et l’adjectif s’accorde également : « absente ».',
                    ],
                    [
                        'question' => 'Quelle phrase exprime correctement la présence de plusieurs objets dans une pièce ?',
                        'choices' => [
                            ['choice_text' => 'Il y a du livres sur la table.', 'is_correct' => false],
                            ['choice_text' => 'Il y a des livres sur la table.', 'is_correct' => true],
                            ['choice_text' => 'Il y a un livres sur la table.', 'is_correct' => false],
                            ['choice_text' => 'Il y a des livre sur la table.', 'is_correct' => false],
                        ],
                        'explanation' => 'On parle de plusieurs livres comptables, donc « des livres » convient. Le nom doit prendre la marque du pluriel.',
                    ],
                    [
                        'question' => 'Vous présentez votre routine : « Le matin, je prends le petit-déjeuner puis je ___ au travail. » Quel verbe convient ?',
                        'choices' => [
                            ['choice_text' => 'pars', 'is_correct' => true],
                            ['choice_text' => 'part', 'is_correct' => false],
                            ['choice_text' => 'partons', 'is_correct' => false],
                            ['choice_text' => 'partir', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », le verbe partir se conjugue « je pars ». La phrase décrit une habitude au présent.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement formulée ?',
                        'choices' => [
                            ['choice_text' => 'Ce maison est plus grande que celle de Karim.', 'is_correct' => false],
                            ['choice_text' => 'Cette maison est plus grand que celle de Karim.', 'is_correct' => false],
                            ['choice_text' => 'Cette maison sont plus grande que celle de Karim.', 'is_correct' => false],
                            ['choice_text' => 'Cette maison est plus grande que celle de Karim.', 'is_correct' => true],
                        ],
                        'explanation' => '« Maison » est féminin singulier, donc « cette » et « grande » conviennent. Le verbe être doit aussi rester au singulier : « est ».',
                    ],
                    [
                        'question' => 'Samira invite ses amis ___ elle ce soir.',
                        'choices' => [
                            ['choice_text' => 'chez', 'is_correct' => true],
                            ['choice_text' => 'à', 'is_correct' => false],
                            ['choice_text' => 'dans', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                        ],
                        'explanation' => '« Chez elle » désigne la maison de Samira. Les autres prépositions ne se construisent pas avec « elle » dans ce sens.',
                    ],
                    [
                        'question' => 'Quelle réponse complète correctement : « ___ est ton professeur de français ? »',
                        'choices' => [
                            ['choice_text' => 'Quand', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi', 'is_correct' => false],
                            ['choice_text' => 'Combien', 'is_correct' => false],
                            ['choice_text' => 'Qui', 'is_correct' => true],
                        ],
                        'explanation' => '« Qui » sert à demander l’identité d’une personne. « Quand » demande un moment, « pourquoi » une cause et « combien » une quantité.',
                    ],
                    [
                        'question' => 'Quelle formulation est correcte pour une demande simple ?',
                        'choices' => [
                            ['choice_text' => 'Est-ce que vous pouvez aider moi ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce vous pouvez m’aider que ?', 'is_correct' => false],
                            ['choice_text' => 'Vous pouvez que m’aider est ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que vous pouvez m’aider ?', 'is_correct' => true],
                        ],
                        'explanation' => 'La structure « Est-ce que vous pouvez... ? » est une manière courante de poser une question. Le pronom complément « me » devient « m’ » devant le verbe commençant par une voyelle.',
                    ],
                    [
                        'question' => 'Hind va ___ cinéma avec ses amies.',
                        'choices' => [
                            ['choice_text' => 'à le', 'is_correct' => false],
                            ['choice_text' => 'au', 'is_correct' => true],
                            ['choice_text' => 'à la', 'is_correct' => false],
                            ['choice_text' => 'aux', 'is_correct' => false],
                        ],
                        'explanation' => '« À » et « le » se contractent en « au » : on dit « au cinéma ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte avec un nom féminin commençant par une voyelle ?',
                        'choices' => [
                            ['choice_text' => 'Ma amie arrive ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Mes amie arrive ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Mon amie arrive ce soir.', 'is_correct' => true],
                            ['choice_text' => 'Mon amies arrive ce soir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Devant un nom féminin singulier commençant par une voyelle, on utilise « mon » pour éviter l’enchaînement « ma amie ». Le nom reste singulier : « mon amie ».',
                    ],
                    [
                        'question' => 'Vous voulez décrire deux étudiants et deux étudiantes qui travaillent ensemble. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Les étudiants sont motivées.', 'is_correct' => false],
                            ['choice_text' => 'Les étudiants est motivés.', 'is_correct' => false],
                            ['choice_text' => 'Les étudiants sont motivés.', 'is_correct' => true],
                            ['choice_text' => 'Les étudiantes sont motivés.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un groupe mixte, l’accord se fait au masculin pluriel : « les étudiants sont motivés ».',
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
