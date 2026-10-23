<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class NounsAdjectivesBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'nouns-adjectives')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Reconnaître le genre des noms',
                'description' => 'Identifiez le genre grammatical de noms courants et choisissez les déterminants et adjectifs qui leur correspondent.',
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quel nom est féminin ?',
                        'choices' => [
                            ['choice_text' => 'Le livre', 'is_correct' => false],
                            ['choice_text' => 'Le jardin', 'is_correct' => false],
                            ['choice_text' => 'Le téléphone', 'is_correct' => false],
                            ['choice_text' => 'La table', 'is_correct' => true],
                        ],
                        'explanation' => '« Table » est un nom féminin : on dit « la table ». Les trois autres noms proposés sont masculins.',
                    ],
                    [
                        'question' => 'Quelle expression est correctement formée ?',
                        'choices' => [
                            ['choice_text' => 'Un chaise', 'is_correct' => false],
                            ['choice_text' => 'Une jardin', 'is_correct' => false],
                            ['choice_text' => 'Une chaise', 'is_correct' => true],
                            ['choice_text' => 'Un fenêtre', 'is_correct' => false],
                        ],
                        'explanation' => '« Chaise » est féminin singulier, donc le déterminant indéfini correct est « une ».',
                    ],
                    [
                        'question' => 'Vous parlez d’un objet masculin : « ___ ordinateur est neuf. » Quel déterminant convient ?',
                        'choices' => [
                            ['choice_text' => 'Une', 'is_correct' => false],
                            ['choice_text' => 'Des', 'is_correct' => false],
                            ['choice_text' => 'Le', 'is_correct' => false],
                            ['choice_text' => 'Un', 'is_correct' => true],
                        ],
                        'explanation' => '« Ordinateur » est masculin singulier : on dit « un ordinateur ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte avec le nom « voiture » ?',
                        'choices' => [
                            ['choice_text' => 'La voiture est rapide.', 'is_correct' => true],
                            ['choice_text' => 'Le voiture est rapide.', 'is_correct' => false],
                            ['choice_text' => 'La voiture est rapides.', 'is_correct' => false],
                            ['choice_text' => 'Un voiture est rapide.', 'is_correct' => false],
                        ],
                        'explanation' => '« Voiture » est féminin singulier ; « rapide » garde la même forme au féminin.',
                    ],
                    [
                        'question' => 'Parmi ces noms, lequel est masculin ?',
                        'choices' => [
                            ['choice_text' => 'Le problème', 'is_correct' => true],
                            ['choice_text' => 'La solution', 'is_correct' => false],
                            ['choice_text' => 'La question', 'is_correct' => false],
                            ['choice_text' => 'La réponse', 'is_correct' => false],
                        ],
                        'explanation' => 'On dit « le problème » : ce nom est masculin. Les noms « solution », « question » et « réponse » sont féminins.',
                    ],
                    [
                        'question' => 'Un apprenant écrit « une appartement ». Quelle est la forme correcte ?',
                        'choices' => [
                            ['choice_text' => 'un appartements', 'is_correct' => false],
                            ['choice_text' => 'des appartement', 'is_correct' => false],
                            ['choice_text' => 'un appartement', 'is_correct' => true],
                            ['choice_text' => 'le appartement', 'is_correct' => false],
                        ],
                        'explanation' => '« Appartement » est masculin singulier. On dit donc « un appartement ».',
                    ],
                    [
                        'question' => 'Quelle paire associe correctement le nom et son genre ?',
                        'choices' => [
                            ['choice_text' => 'un porte — masculin', 'is_correct' => false],
                            ['choice_text' => 'une fleur — féminin', 'is_correct' => true],
                            ['choice_text' => 'une jardin — féminin', 'is_correct' => false],
                            ['choice_text' => 'un maison — masculin', 'is_correct' => false],
                        ],
                        'explanation' => '« Fleur » est féminin : on dit « une fleur ». « Porte » et « maison » sont féminins, « jardin » est masculin.',
                    ],
                    [
                        'question' => 'Quel déterminant complète la phrase : « J’ai acheté ___ nouvelle chemise » ?',
                        'choices' => [
                            ['choice_text' => 'une', 'is_correct' => true],
                            ['choice_text' => 'un', 'is_correct' => false],
                            ['choice_text' => 'des', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                        ],
                        'explanation' => '« Chemise » est féminin singulier, donc « une nouvelle chemise » est correct.',
                    ],
                    [
                        'question' => 'Dans « un étudiant sérieux », quel mot est le nom ?',
                        'choices' => [
                            ['choice_text' => 'un', 'is_correct' => false],
                            ['choice_text' => 'sérieux', 'is_correct' => false],
                            ['choice_text' => 'un étudiant', 'is_correct' => false],
                            ['choice_text' => 'étudiant', 'is_correct' => true],
                        ],
                        'explanation' => '« Étudiant » désigne une personne et constitue le nom du groupe nominal. « Un » est le déterminant et « sérieux » est l’adjectif.',
                    ],
                    [
                        'question' => 'Quelle expression décrit correctement une école ?',
                        'choices' => [
                            ['choice_text' => 'Un école moderne', 'is_correct' => false],
                            ['choice_text' => 'Une école moderne', 'is_correct' => true],
                            ['choice_text' => 'Une école modernes', 'is_correct' => false],
                            ['choice_text' => 'Un école modernes', 'is_correct' => false],
                        ],
                        'explanation' => '« École » est féminin singulier, donc « une école ». L’adjectif « moderne » reste identique au féminin singulier.',
                    ],
                ],
            ],
            [
                'title' => 'Former correctement les pluriels',
                'description' => 'Entraînez-vous à former le pluriel des noms et à repérer les formes régulières et quelques formes fréquentes à connaître.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quel est le pluriel correct de « livre » ?',
                        'choices' => [
                            ['choice_text' => 'livre', 'is_correct' => false],
                            ['choice_text' => 'livres', 'is_correct' => true],
                            ['choice_text' => 'livrent', 'is_correct' => false],
                            ['choice_text' => 'livrer', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nom « livre » forme son pluriel régulièrement avec un s : « livres ».',
                    ],
                    [
                        'question' => 'Comment écrit-on « une voiture » au pluriel ?',
                        'choices' => [
                            ['choice_text' => 'des voitures', 'is_correct' => true],
                            ['choice_text' => 'des voiture', 'is_correct' => false],
                            ['choice_text' => 'une voitures', 'is_correct' => false],
                            ['choice_text' => 'les voiture', 'is_correct' => false],
                        ],
                        'explanation' => 'Au pluriel, le déterminant devient « des » et « voiture » prend un s : « des voitures ».',
                    ],
                    [
                        'question' => 'Quel est le pluriel correct de « journal » ?',
                        'choices' => [
                            ['choice_text' => 'journals', 'is_correct' => false],
                            ['choice_text' => 'journales', 'is_correct' => false],
                            ['choice_text' => 'journauxs', 'is_correct' => false],
                            ['choice_text' => 'journaux', 'is_correct' => true],
                        ],
                        'explanation' => 'Le nom « journal » fait partie des noms en -al qui forment souvent leur pluriel en -aux : « journaux ».',
                    ],
                    [
                        'question' => 'Quel est le pluriel de « cadeau » ?',
                        'choices' => [
                            ['choice_text' => 'cadeaus', 'is_correct' => false],
                            ['choice_text' => 'cadeauxs', 'is_correct' => false],
                            ['choice_text' => 'cadeaux', 'is_correct' => true],
                            ['choice_text' => 'cadeau', 'is_correct' => false],
                        ],
                        'explanation' => 'Les noms en -eau prennent un -x au pluriel : des cadeaux, des bateaux, des gâteaux.',
                    ],
                    [
                        'question' => 'Deux hommes habitent près de chez vous. Quelle forme complète « deux ___ » ?',
                        'choices' => [
                            ['choice_text' => 'voisin', 'is_correct' => false],
                            ['choice_text' => 'voisins', 'is_correct' => true],
                            ['choice_text' => 'voisine', 'is_correct' => false],
                            ['choice_text' => 'voisinent', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux hommes forment un pluriel masculin : on écrit « deux voisins ».',
                    ],
                    [
                        'question' => 'Quel pluriel est correct pour « cheval » ?',
                        'choices' => [
                            ['choice_text' => 'chevals', 'is_correct' => false],
                            ['choice_text' => 'chevaus', 'is_correct' => false],
                            ['choice_text' => 'chevauxs', 'is_correct' => false],
                            ['choice_text' => 'chevaux', 'is_correct' => true],
                        ],
                        'explanation' => 'Le pluriel de « cheval » est « chevaux ». Il s’agit d’une forme à mémoriser.',
                    ],
                    [
                        'question' => 'Vous avez plusieurs « bateau ». Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Les bateaus sont au port.', 'is_correct' => false],
                            ['choice_text' => 'Le bateaux sont au port.', 'is_correct' => false],
                            ['choice_text' => 'Les bateaux sont au port.', 'is_correct' => true],
                            ['choice_text' => 'Les bateau est au port.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pluriel de « bateau » s’écrit « bateaux ». Le déterminant « les » et le verbe « sont » indiquent également le pluriel.',
                    ],
                    [
                        'question' => 'Quel groupe est correctement écrit au pluriel ?',
                        'choices' => [
                            ['choice_text' => 'des enfant heureux', 'is_correct' => false],
                            ['choice_text' => 'des enfants heureuse', 'is_correct' => false],
                            ['choice_text' => 'des enfants heureux', 'is_correct' => true],
                            ['choice_text' => 'des enfant heureuse', 'is_correct' => false],
                        ],
                        'explanation' => '« Enfants » est au pluriel et « heureux » est ici au masculin pluriel. Le déterminant « des » convient également.',
                    ],
                    [
                        'question' => 'Quelle phrase montre correctement le pluriel de « travail » ?',
                        'choices' => [
                            ['choice_text' => 'Les travaux sont terminés.', 'is_correct' => true],
                            ['choice_text' => 'Les travails sont terminés.', 'is_correct' => false],
                            ['choice_text' => 'Le travaux sont terminé.', 'is_correct' => false],
                            ['choice_text' => 'Les travaux est terminés.', 'is_correct' => false],
                        ],
                        'explanation' => 'Au sens de tâches à réaliser, « travail » fait « travaux » au pluriel.',
                    ],
                    [
                        'question' => 'Quel nom reste identique à l’écrit au singulier et au pluriel ?',
                        'choices' => [
                            ['choice_text' => 'un chat / des chat', 'is_correct' => false],
                            ['choice_text' => 'un prix / des prix', 'is_correct' => true],
                            ['choice_text' => 'un livre / des livre', 'is_correct' => false],
                            ['choice_text' => 'un ami / des ami', 'is_correct' => false],
                        ],
                        'explanation' => '« Prix » s’écrit de la même manière au singulier et au pluriel. C’est le déterminant ou le contexte qui permet de distinguer les deux nombres.',
                    ],
                ],
            ],
            [
                'title' => 'Accorder les adjectifs avec les noms',
                'description' => 'Appliquez les accords de genre et de nombre entre les noms et les adjectifs dans des phrases simples et naturelles.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle forme convient dans « une maison ___ » ?',
                        'choices' => [
                            ['choice_text' => 'blanche', 'is_correct' => true],
                            ['choice_text' => 'blanc', 'is_correct' => false],
                            ['choice_text' => 'blanches', 'is_correct' => false],
                            ['choice_text' => 'blancs', 'is_correct' => false],
                        ],
                        'explanation' => '« Maison » est féminin singulier. L’adjectif « blanc » doit donc prendre la forme « blanche ».',
                    ],
                    [
                        'question' => 'Quel accord convient dans « des garçons ___ » ?',
                        'choices' => [
                            ['choice_text' => 'sportif', 'is_correct' => false],
                            ['choice_text' => 'sportifs', 'is_correct' => true],
                            ['choice_text' => 'sportive', 'is_correct' => false],
                            ['choice_text' => 'sportives', 'is_correct' => false],
                        ],
                        'explanation' => '« Garçons » est masculin pluriel. L’adjectif « sportif » devient donc « sportifs ».',
                    ],
                    [
                        'question' => 'Complétez : « une fille ___ »',
                        'choices' => [
                            ['choice_text' => 'heureux', 'is_correct' => false],
                            ['choice_text' => 'heureuses', 'is_correct' => false],
                            ['choice_text' => 'heureuxe', 'is_correct' => false],
                            ['choice_text' => 'heureuse', 'is_correct' => true],
                        ],
                        'explanation' => '« Fille » est féminin singulier. La forme correcte de l’adjectif est « heureuse ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement accordée ?',
                        'choices' => [
                            ['choice_text' => 'Les fleurs sont rouge.', 'is_correct' => false],
                            ['choice_text' => 'Les fleurs sont rouges.', 'is_correct' => true],
                            ['choice_text' => 'Les fleurs sont rougent.', 'is_correct' => false],
                            ['choice_text' => 'La fleurs sont rouges.', 'is_correct' => false],
                        ],
                        'explanation' => '« Fleurs » est féminin pluriel et l’adjectif « rouge » prend ici la marque du pluriel : « rouges ».',
                    ],
                    [
                        'question' => 'Vous décrivez un homme et une femme qui sont tous les deux fatigués. Quelle formulation est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ils sont fatiguées.', 'is_correct' => false],
                            ['choice_text' => 'Ils sont fatigué.', 'is_correct' => false],
                            ['choice_text' => 'Ils sont fatigués.', 'is_correct' => true],
                            ['choice_text' => 'Ils sont fatigue.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un groupe mixte, l’accord grammatical traditionnel se fait au masculin pluriel : « fatigués ».',
                    ],
                    [
                        'question' => 'Quel groupe nominal est bien accordé ?',
                        'choices' => [
                            ['choice_text' => 'de grand fenêtres', 'is_correct' => false],
                            ['choice_text' => 'de grande fenêtre', 'is_correct' => false],
                            ['choice_text' => 'de grandes fenêtres', 'is_correct' => true],
                            ['choice_text' => 'de grands fenêtre', 'is_correct' => false],
                        ],
                        'explanation' => '« Fenêtres » est féminin pluriel, donc « grandes » prend les marques du féminin et du pluriel.',
                    ],
                    [
                        'question' => 'Un élève écrit « un classe agréable ». Quelle est la forme correcte ?',
                        'choices' => [
                            ['choice_text' => 'une classe agréable', 'is_correct' => true],
                            ['choice_text' => 'une classe agréables', 'is_correct' => false],
                            ['choice_text' => 'des classe agréable', 'is_correct' => false],
                            ['choice_text' => 'un classes agréable', 'is_correct' => false],
                        ],
                        'explanation' => '« Classe » est féminin singulier : on dit « une classe ». « Agréable » ne change pas au féminin.',
                    ],
                    [
                        'question' => 'Quelle forme convient avec « des histoires » ?',
                        'choices' => [
                            ['choice_text' => 'intéressant', 'is_correct' => false],
                            ['choice_text' => 'intéressants', 'is_correct' => false],
                            ['choice_text' => 'intéressante', 'is_correct' => false],
                            ['choice_text' => 'intéressantes', 'is_correct' => true],
                        ],
                        'explanation' => '« Histoires » est féminin pluriel, donc « intéressant » devient « intéressantes ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient un accord incorrect ?',
                        'choices' => [
                            ['choice_text' => 'La voiture est rapide.', 'is_correct' => false],
                            ['choice_text' => 'Les voitures sont rapides.', 'is_correct' => false],
                            ['choice_text' => 'Les véhicules sont rapides.', 'is_correct' => false],
                            ['choice_text' => 'La voiture est rapides.', 'is_correct' => true],
                        ],
                        'explanation' => '« La voiture » est féminin singulier. L’adjectif doit être « rapide », sans marque du pluriel.',
                    ],
                    [
                        'question' => 'Vous parlez de plusieurs étudiantes. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Les étudiantes sont sérieux.', 'is_correct' => false],
                            ['choice_text' => 'Les étudiante sont sérieuses.', 'is_correct' => false],
                            ['choice_text' => 'Les étudiantes sont sérieuses.', 'is_correct' => true],
                            ['choice_text' => 'La étudiantes sont sérieuses.', 'is_correct' => false],
                        ],
                        'explanation' => '« Étudiantes » est féminin pluriel. Le nom et l’adjectif doivent donc porter les marques du féminin et du pluriel.',
                    ],
                    [
                        'question' => 'Quel adjectif complète correctement « un exercice ___ » ?',
                        'choices' => [
                            ['choice_text' => 'facile', 'is_correct' => true],
                            ['choice_text' => 'faciles', 'is_correct' => false],
                            ['choice_text' => 'facilles', 'is_correct' => false],
                            ['choice_text' => 'facilement', 'is_correct' => false],
                        ],
                        'explanation' => '« Exercice » est masculin singulier et « facile » possède ici la même forme au masculin et au féminin singulier.',
                    ],
                    [
                        'question' => 'Quelle formulation décrit correctement deux maisons anciennes ?',
                        'choices' => [
                            ['choice_text' => 'deux maison ancienne', 'is_correct' => false],
                            ['choice_text' => 'deux maisons anciennes', 'is_correct' => true],
                            ['choice_text' => 'deux maisons ancien', 'is_correct' => false],
                            ['choice_text' => 'deux maison anciens', 'is_correct' => false],
                        ],
                        'explanation' => '« Maisons » est féminin pluriel et « ancienne » doit donc devenir « anciennes ».',
                    ],
                ],
            ],
            [
                'title' => 'La place des adjectifs en français',
                'description' => 'Observez la position naturelle des adjectifs les plus courants et distinguez les formulations correctes dans des phrases simples.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle formulation est la plus naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Une petite maison', 'is_correct' => true],
                            ['choice_text' => 'Une maison petite', 'is_correct' => false],
                            ['choice_text' => 'Une petite de maison', 'is_correct' => false],
                            ['choice_text' => 'Une maison de petite', 'is_correct' => false],
                        ],
                        'explanation' => 'L’adjectif « petit » se place très naturellement avant le nom dans « une petite maison ».',
                    ],
                    [
                        'question' => 'Quelle expression est la plus naturelle en français ?',
                        'choices' => [
                            ['choice_text' => 'un intéressant film', 'is_correct' => false],
                            ['choice_text' => 'un film intéressants', 'is_correct' => false],
                            ['choice_text' => 'une film intéressant', 'is_correct' => false],
                            ['choice_text' => 'un film intéressant', 'is_correct' => true],
                        ],
                        'explanation' => '« Intéressant » se place après le nom : « un film intéressant ».',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Une belle journée', 'is_correct' => true],
                            ['choice_text' => 'Une journée belle', 'is_correct' => false],
                            ['choice_text' => 'Un belle journée', 'is_correct' => false],
                            ['choice_text' => 'Une belles journée', 'is_correct' => false],
                        ],
                        'explanation' => '« Belle » fait partie des adjectifs fréquemment placés avant le nom. On dit naturellement « une belle journée ».',
                    ],
                    [
                        'question' => 'Quelle formulation convient ?',
                        'choices' => [
                            ['choice_text' => 'Une rouge voiture', 'is_correct' => false],
                            ['choice_text' => 'Un voiture rouge', 'is_correct' => false],
                            ['choice_text' => 'Une voiture rouge', 'is_correct' => true],
                            ['choice_text' => 'Une voiture rouges', 'is_correct' => false],
                        ],
                        'explanation' => 'Les adjectifs de couleur se placent après le nom : « une voiture rouge ».',
                    ],
                    [
                        'question' => 'Quelle expression est la plus naturelle ?',
                        'choices' => [
                            ['choice_text' => 'un étudiant jeune', 'is_correct' => false],
                            ['choice_text' => 'une jeune étudiant', 'is_correct' => false],
                            ['choice_text' => 'un jeunes étudiant', 'is_correct' => false],
                            ['choice_text' => 'un jeune étudiant', 'is_correct' => true],
                        ],
                        'explanation' => '« Jeune » se met naturellement avant le nom : « un jeune étudiant », au masculin singulier.',
                    ],
                    [
                        'question' => 'Quel choix convient dans « J’ai acheté une chemise ___ » ?',
                        'choices' => [
                            ['choice_text' => 'blanc', 'is_correct' => false],
                            ['choice_text' => 'blanche', 'is_correct' => true],
                            ['choice_text' => 'blanches', 'is_correct' => false],
                            ['choice_text' => 'blanhe', 'is_correct' => false],
                        ],
                        'explanation' => '« Blanche » est l’adjectif féminin singulier qui correspond à « chemise ». Les couleurs se placent après le nom.',
                    ],
                    [
                        'question' => 'Quelle phrase sonne naturellement en français courant ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons un problème petit.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons un petit problème.', 'is_correct' => true],
                            ['choice_text' => 'Nous avons une petit problème.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons des petit problème.', 'is_correct' => false],
                        ],
                        'explanation' => '« Petit » se place couramment avant le nom et s’accorde avec « problème », masculin singulier : « un petit problème ».',
                    ],
                    [
                        'question' => 'Laquelle de ces expressions est bien placée ?',
                        'choices' => [
                            ['choice_text' => 'une difficile histoire', 'is_correct' => false],
                            ['choice_text' => 'un histoire difficile', 'is_correct' => false],
                            ['choice_text' => 'une histoire difficile', 'is_correct' => true],
                            ['choice_text' => 'une histoires difficiles', 'is_correct' => false],
                        ],
                        'explanation' => '« Difficile » se place après le nom dans cette construction : « une histoire difficile ».',
                    ],
                    [
                        'question' => 'Vous parlez d’un restaurant de qualité. Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'un restaurant bon', 'is_correct' => false],
                            ['choice_text' => 'une bon restaurant', 'is_correct' => false],
                            ['choice_text' => 'un bon restaurant', 'is_correct' => true],
                            ['choice_text' => 'un bonne restaurant', 'is_correct' => false],
                        ],
                        'explanation' => '« Bon » se place avant le nom et s’accorde : « un bon restaurant », masculin singulier.',
                    ],
                    [
                        'question' => 'Quelle phrase est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Elle porte une noire robe.', 'is_correct' => false],
                            ['choice_text' => 'Elle porte un robe noire.', 'is_correct' => false],
                            ['choice_text' => 'Elle porte une robe noirs.', 'is_correct' => false],
                            ['choice_text' => 'Elle porte une robe noire.', 'is_correct' => true],
                        ],
                        'explanation' => 'L’adjectif de couleur « noire » se place après le nom et s’accorde avec « robe » au féminin singulier.',
                    ],
                ],
            ],
            [
                'title' => 'Les formes de genre les plus fréquentes',
                'description' => 'Mémorisez quelques formes masculines et féminines courantes ainsi que des noms dont le genre peut surprendre les débutants.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel est le féminin de « étudiant » ?',
                        'choices' => [
                            ['choice_text' => 'étudiantrice', 'is_correct' => false],
                            ['choice_text' => 'étudiantesse', 'is_correct' => false],
                            ['choice_text' => 'étudiante', 'is_correct' => true],
                            ['choice_text' => 'étudianteuse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le féminin courant de « étudiant » est « étudiante ». Le nom garde la même base et prend la terminaison féminine -e.',
                    ],
                    [
                        'question' => 'Quel est le féminin de « acteur » ?',
                        'choices' => [
                            ['choice_text' => 'acteuse', 'is_correct' => false],
                            ['choice_text' => 'actrice', 'is_correct' => true],
                            ['choice_text' => 'acteure', 'is_correct' => false],
                            ['choice_text' => 'actrise', 'is_correct' => false],
                        ],
                        'explanation' => 'Le féminin de « acteur » est « actrice ». Il s’agit d’une transformation irrégulière qu’il faut mémoriser.',
                    ],
                    [
                        'question' => 'Quel est le féminin de « serveur » dans un restaurant ?',
                        'choices' => [
                            ['choice_text' => 'serveuse', 'is_correct' => true],
                            ['choice_text' => 'serveure', 'is_correct' => false],
                            ['choice_text' => 'servante', 'is_correct' => false],
                            ['choice_text' => 'serveuresse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le féminin de « serveur » est « serveuse ». « Servante » a un autre sens et ne constitue pas ici le féminin attendu.',
                    ],
                    [
                        'question' => 'Quel est le féminin de « directeur » ?',
                        'choices' => [
                            ['choice_text' => 'directrice', 'is_correct' => true],
                            ['choice_text' => 'directeure', 'is_correct' => false],
                            ['choice_text' => 'directeuse', 'is_correct' => false],
                            ['choice_text' => 'direction', 'is_correct' => false],
                        ],
                        'explanation' => 'Le féminin traditionnel de « directeur » est « directrice ».',
                    ],
                    [
                        'question' => 'Quel mot est féminin malgré sa terminaison en -age ?',
                        'choices' => [
                            ['choice_text' => 'voyage', 'is_correct' => false],
                            ['choice_text' => 'image', 'is_correct' => true],
                            ['choice_text' => 'garage', 'is_correct' => false],
                            ['choice_text' => 'message', 'is_correct' => false],
                        ],
                        'explanation' => '« Image » est féminin : on dit « une image ». Les noms voyage, garage et message sont masculins.',
                    ],
                    [
                        'question' => 'Quel groupe est correct pour parler d’une personne importante ?',
                        'choices' => [
                            ['choice_text' => 'un personne important', 'is_correct' => false],
                            ['choice_text' => 'une personne importante', 'is_correct' => true],
                            ['choice_text' => 'une personne important', 'is_correct' => false],
                            ['choice_text' => 'un personne importante', 'is_correct' => false],
                        ],
                        'explanation' => '« Personne » est féminin, même quand il désigne un homme : on dit « une personne » et l’adjectif devient « importante ».',
                    ],
                    [
                        'question' => 'Un seul de ces noms est masculin. Lequel ?',
                        'choices' => [
                            ['choice_text' => 'La couleur', 'is_correct' => false],
                            ['choice_text' => 'La chaleur', 'is_correct' => false],
                            ['choice_text' => 'La douleur', 'is_correct' => false],
                            ['choice_text' => 'Le silence', 'is_correct' => true],
                        ],
                        'explanation' => 'On dit « le silence ». Les noms couleur, chaleur et douleur sont féminins.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte avec « main » ?',
                        'choices' => [
                            ['choice_text' => 'J’ai un petit main.', 'is_correct' => false],
                            ['choice_text' => 'J’ai une petit main.', 'is_correct' => false],
                            ['choice_text' => 'J’ai un petite main.', 'is_correct' => false],
                            ['choice_text' => 'J’ai une petite main.', 'is_correct' => true],
                        ],
                        'explanation' => '« Main » est féminin singulier : « une main ». L’adjectif s’accorde donc également au féminin : « petite ».',
                    ],
                    [
                        'question' => 'Quel est le féminin de « boulanger » ?',
                        'choices' => [
                            ['choice_text' => 'boulangère', 'is_correct' => true],
                            ['choice_text' => 'boulangere', 'is_correct' => false],
                            ['choice_text' => 'boulangèreuse', 'is_correct' => false],
                            ['choice_text' => 'boulangesse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le féminin de « boulanger » est « boulangère ». L’accent grave sur è fait partie de la forme correcte.',
                    ],
                    [
                        'question' => 'Choisissez la phrase bien accordée.',
                        'choices' => [
                            ['choice_text' => 'Mon sœur est un bon musicienne.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœur est un bon musicienne.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœur est une bonne musicienne.', 'is_correct' => true],
                            ['choice_text' => 'Ma sœur est une bonne musicien.', 'is_correct' => false],
                        ],
                        'explanation' => '« Sœur » et « musicienne » sont féminins. Le déterminant « une » et l’adjectif « bonne » sont donc également au féminin.',
                    ],
                ],
            ],
            [
                'title' => 'Reconnaître le nom et l\'adjectif',
                'description' => 'Distinguez les noms des adjectifs et utilisez ces deux catégories pour décrire correctement des personnes, des objets et des lieux.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Dans « une maison calme », quel mot décrit la maison ?',
                        'choices' => [
                            ['choice_text' => 'maison', 'is_correct' => false],
                            ['choice_text' => 'calme', 'is_correct' => true],
                            ['choice_text' => 'une', 'is_correct' => false],
                            ['choice_text' => 'maison calme', 'is_correct' => false],
                        ],
                        'explanation' => '« Calme » apporte une information sur la maison. C’est donc l’adjectif du groupe nominal.',
                    ],
                    [
                        'question' => 'Dans « un vieux vélo », quel mot est le nom ?',
                        'choices' => [
                            ['choice_text' => 'vieux', 'is_correct' => false],
                            ['choice_text' => 'un', 'is_correct' => false],
                            ['choice_text' => 'vieux vélo', 'is_correct' => false],
                            ['choice_text' => 'vélo', 'is_correct' => true],
                        ],
                        'explanation' => '« Vélo » désigne l’objet. « Vieux » est l’adjectif qui le décrit et « un » est le déterminant.',
                    ],
                    [
                        'question' => 'Quel mot est un adjectif dans « une robe élégante » ?',
                        'choices' => [
                            ['choice_text' => 'élégante', 'is_correct' => true],
                            ['choice_text' => 'robe', 'is_correct' => false],
                            ['choice_text' => 'une', 'is_correct' => false],
                            ['choice_text' => 'élégamment', 'is_correct' => false],
                        ],
                        'explanation' => '« Élégante » décrit la robe et s’accorde avec elle au féminin singulier. C’est donc l’adjectif.',
                    ],
                    [
                        'question' => 'Dans « un professeur patient », quel mot désigne la personne ?',
                        'choices' => [
                            ['choice_text' => 'professeur', 'is_correct' => true],
                            ['choice_text' => 'patient', 'is_correct' => false],
                            ['choice_text' => 'un', 'is_correct' => false],
                            ['choice_text' => 'un professeur', 'is_correct' => false],
                        ],
                        'explanation' => '« Professeur » est le nom qui désigne la personne. « Patient » donne une caractéristique de cette personne.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un adjectif pour décrire un livre ?',
                        'choices' => [
                            ['choice_text' => 'C’est un livre passionnants.', 'is_correct' => false],
                            ['choice_text' => 'C’est un livre passionnant.', 'is_correct' => true],
                            ['choice_text' => 'C’est un livre passionnante.', 'is_correct' => false],
                            ['choice_text' => 'C’est un passionnant livres.', 'is_correct' => false],
                        ],
                        'explanation' => '« Livre » est masculin singulier. L’adjectif « passionnant » doit donc rester au masculin singulier.',
                    ],
                    [
                        'question' => 'Dans « Nous marchons dans les rues étroites », quel mot est l’adjectif ?',
                        'choices' => [
                            ['choice_text' => 'rues', 'is_correct' => false],
                            ['choice_text' => 'marchons', 'is_correct' => false],
                            ['choice_text' => 'étroites', 'is_correct' => true],
                            ['choice_text' => 'dans', 'is_correct' => false],
                        ],
                        'explanation' => '« Étroites » décrit les rues et s’accorde avec « rues » au féminin pluriel.',
                    ],
                    [
                        'question' => 'Quel mot est le nom dans « une longue journée » ?',
                        'choices' => [
                            ['choice_text' => 'longue', 'is_correct' => false],
                            ['choice_text' => 'une', 'is_correct' => false],
                            ['choice_text' => 'journée', 'is_correct' => true],
                            ['choice_text' => 'long', 'is_correct' => false],
                        ],
                        'explanation' => '« Journée » est le nom qui désigne une période de temps. « Longue » est l’adjectif qui la décrit.',
                    ],
                    [
                        'question' => 'Quel groupe contient un nom et un adjectif correctement accordé ?',
                        'choices' => [
                            ['choice_text' => 'une arbre haute', 'is_correct' => false],
                            ['choice_text' => 'un arbre haute', 'is_correct' => false],
                            ['choice_text' => 'des arbre haut', 'is_correct' => false],
                            ['choice_text' => 'un arbre haut', 'is_correct' => true],
                        ],
                        'explanation' => '« Arbre » est masculin singulier. « Haut » s’accorde donc au masculin singulier : « un arbre haut ».',
                    ],
                    [
                        'question' => 'Dans « des chaussures confortables », comment expliquer le -s de « confortables » ?',
                        'choices' => [
                            ['choice_text' => 'Les adjectifs prennent un -s à la fin par habitude', 'is_correct' => false],
                            ['choice_text' => '« Confortable » est ici un nom pluriel', 'is_correct' => false],
                            ['choice_text' => 'Le déterminant « des » ajoute un -s au mot suivant', 'is_correct' => false],
                            ['choice_text' => 'L’adjectif s’accorde avec « chaussures », qui est au pluriel', 'is_correct' => true],
                        ],
                        'explanation' => 'Le nom « chaussures » est féminin pluriel. L’adjectif « confortable » doit donc lui aussi prendre la marque du pluriel : « confortables ».',
                    ],
                    [
                        'question' => 'Quelle liste ne contient que des adjectifs ?',
                        'choices' => [
                            ['choice_text' => 'maison, livre, école', 'is_correct' => false],
                            ['choice_text' => 'courir, petit, table', 'is_correct' => false],
                            ['choice_text' => 'grand, calme, heureux', 'is_correct' => true],
                            ['choice_text' => 'professeur, rouge, voiture', 'is_correct' => false],
                        ],
                        'explanation' => 'Seule la première liste réunit uniquement des adjectifs ; les autres mêlent noms et verbes.',
                    ],
                ],
            ],
            [
                'title' => 'Préciser et enrichir une description',
                'description' => 'Choisissez des adjectifs précis et adaptés pour décrire des personnes, des objets et des situations de la vie quotidienne.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Vous voulez indiquer qu’un sac peut contenir beaucoup de choses. Quel adjectif convient le mieux ?',
                        'choices' => [
                            ['choice_text' => 'minuscule', 'is_correct' => false],
                            ['choice_text' => 'étroit', 'is_correct' => false],
                            ['choice_text' => 'spacieux', 'is_correct' => true],
                            ['choice_text' => 'plat', 'is_correct' => false],
                        ],
                        'explanation' => '« Spacieux » décrit un objet qui offre beaucoup de place. Il convient donc naturellement à un sac de grande capacité.',
                    ],
                    [
                        'question' => 'Quel adjectif convient pour une pièce où il y a beaucoup de lumière ?',
                        'choices' => [
                            ['choice_text' => 'lumineuse', 'is_correct' => true],
                            ['choice_text' => 'sombre', 'is_correct' => false],
                            ['choice_text' => 'étroite', 'is_correct' => false],
                            ['choice_text' => 'bruyante', 'is_correct' => false],
                        ],
                        'explanation' => 'Une pièce où il y a beaucoup de lumière peut être décrite comme « lumineuse ». Le mot s’accorde ici avec « pièce », féminin singulier.',
                    ],
                    [
                        'question' => 'Quel adjectif convient pour une route qui ne présente aucun danger ?',
                        'choices' => [
                            ['choice_text' => 'glissante', 'is_correct' => false],
                            ['choice_text' => 'sûre', 'is_correct' => true],
                            ['choice_text' => 'étroite', 'is_correct' => false],
                            ['choice_text' => 'longue', 'is_correct' => false],
                        ],
                        'explanation' => '« Sûre » signifie ici qu’elle présente peu de danger. C’est l’adjectif adapté à une route considérée comme sans danger important.',
                    ],
                    [
                        'question' => 'Quel adjectif décrit le mieux un étudiant qui arrive toujours à l’heure ?',
                        'choices' => [
                            ['choice_text' => 'généreux', 'is_correct' => false],
                            ['choice_text' => 'timide', 'is_correct' => false],
                            ['choice_text' => 'lent', 'is_correct' => false],
                            ['choice_text' => 'ponctuel', 'is_correct' => true],
                        ],
                        'explanation' => 'Une personne « ponctuelle » respecte les horaires. Le masculin singulier « ponctuel » convient ici à « étudiant ».',
                    ],
                    [
                        'question' => 'Un hôtel qui ne coûte pas cher est dit :',
                        'choices' => [
                            ['choice_text' => 'luxueux', 'is_correct' => false],
                            ['choice_text' => 'bon marché', 'is_correct' => true],
                            ['choice_text' => 'moderne', 'is_correct' => false],
                            ['choice_text' => 'fermé', 'is_correct' => false],
                        ],
                        'explanation' => '« Bon marché » signifie que le prix est bas ; l’expression ne change pas au pluriel.',
                    ],
                    [
                        'question' => 'Quel choix convient pour décrire un café dont le goût est très agréable ?',
                        'choices' => [
                            ['choice_text' => 'délicieux', 'is_correct' => true],
                            ['choice_text' => 'chaud', 'is_correct' => false],
                            ['choice_text' => 'fort', 'is_correct' => false],
                            ['choice_text' => 'rapide', 'is_correct' => false],
                        ],
                        'explanation' => '« Délicieux » sert notamment à exprimer qu’un aliment ou une boisson a un goût très agréable.',
                    ],
                    [
                        'question' => 'Une valise qui pèse très peu est :',
                        'choices' => [
                            ['choice_text' => 'lourde', 'is_correct' => false],
                            ['choice_text' => 'grande', 'is_correct' => false],
                            ['choice_text' => 'légère', 'is_correct' => true],
                            ['choice_text' => 'solide', 'is_correct' => false],
                        ],
                        'explanation' => '« Légère » signifie qu’un objet ne pèse pas beaucoup. L’adjectif s’accorde avec « valise », féminin singulier.',
                    ],
                    [
                        'question' => 'Quel adjectif convient dans « un ordinateur ___ » si l’appareil fonctionne sans faire beaucoup de bruit ?',
                        'choices' => [
                            ['choice_text' => 'bruyant', 'is_correct' => false],
                            ['choice_text' => 'silencieux', 'is_correct' => true],
                            ['choice_text' => 'rapide', 'is_correct' => false],
                            ['choice_text' => 'ancien', 'is_correct' => false],
                        ],
                        'explanation' => 'Un appareil qui produit peu de bruit peut être qualifié de « silencieux ».',
                    ],
                    [
                        'question' => 'Quel adjectif décrit un chemin couvert de boue après une forte pluie ?',
                        'choices' => [
                            ['choice_text' => 'poussiéreux', 'is_correct' => false],
                            ['choice_text' => 'enneigé', 'is_correct' => false],
                            ['choice_text' => 'rocheux', 'is_correct' => false],
                            ['choice_text' => 'boueux', 'is_correct' => true],
                        ],
                        'explanation' => 'La boue est mouillée et collante : le chemin est boueux.',
                    ],
                    [
                        'question' => 'Une personne qui aide volontiers les autres est souvent décrite comme :',
                        'choices' => [
                            ['choice_text' => 'généreuse', 'is_correct' => true],
                            ['choice_text' => 'égoïste', 'is_correct' => false],
                            ['choice_text' => 'timide', 'is_correct' => false],
                            ['choice_text' => 'paresseuse', 'is_correct' => false],
                        ],
                        'explanation' => '« Généreuse » peut décrire une personne qui donne de son temps, de son aide ou de ses ressources avec facilité.',
                    ],
                    [
                        'question' => 'Quel adjectif convient le mieux pour une explication facile à comprendre ?',
                        'choices' => [
                            ['choice_text' => 'confuse', 'is_correct' => false],
                            ['choice_text' => 'compliquée', 'is_correct' => false],
                            ['choice_text' => 'pressée', 'is_correct' => false],
                            ['choice_text' => 'claire', 'is_correct' => true],
                        ],
                        'explanation' => 'Une explication « claire » est formulée de manière compréhensible et sans ambiguïté inutile.',
                    ],
                ],
            ],
            [
                'title' => 'Réviser les accords et les pièges courants',
                'description' => 'Corrigez des erreurs fréquentes liées au genre, au pluriel et à l’accord des adjectifs dans des phrases proches de celles produites par des débutants.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Un étudiant écrit : « une petit voiture ». Quelle correction est correcte ?',
                        'choices' => [
                            ['choice_text' => 'un petit voiture', 'is_correct' => false],
                            ['choice_text' => 'une petite voiture', 'is_correct' => true],
                            ['choice_text' => 'une petits voiture', 'is_correct' => false],
                            ['choice_text' => 'une petite voitures', 'is_correct' => false],
                        ],
                        'explanation' => '« Voiture » est féminin singulier. Le déterminant est « une » et l’adjectif doit être « petite ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement écrite ?',
                        'choices' => [
                            ['choice_text' => 'Les maisons sont grand.', 'is_correct' => false],
                            ['choice_text' => 'Les maison sont grandes.', 'is_correct' => false],
                            ['choice_text' => 'La maisons est grande.', 'is_correct' => false],
                            ['choice_text' => 'Les maisons sont grandes.', 'is_correct' => true],
                        ],
                        'explanation' => '« Maisons » est féminin pluriel, donc l’adjectif prend la forme « grandes ». Le déterminant « les » et le verbe « sont » sont également au pluriel.',
                    ],
                    [
                        'question' => 'Quel choix corrige « un chaise confortable » ?',
                        'choices' => [
                            ['choice_text' => 'un chaise confortables', 'is_correct' => false],
                            ['choice_text' => 'une chaise confortable', 'is_correct' => true],
                            ['choice_text' => 'une chaise confortables', 'is_correct' => false],
                            ['choice_text' => 'une chaises confortable', 'is_correct' => false],
                        ],
                        'explanation' => '« Chaise » est féminin singulier. On dit donc « une chaise ». L’adjectif « confortable » reste au singulier.',
                    ],
                    [
                        'question' => 'Quelle phrase contient une erreur d’accord ?',
                        'choices' => [
                            ['choice_text' => 'Ma sœur est heureuse.', 'is_correct' => false],
                            ['choice_text' => 'Mon frère est heureuse.', 'is_correct' => true],
                            ['choice_text' => 'Mon frère est heureux.', 'is_correct' => false],
                            ['choice_text' => 'Mes sœurs sont heureuses.', 'is_correct' => false],
                        ],
                        'explanation' => '« Frère » est masculin singulier, donc l’adjectif doit être « heureux », pas « heureuse ».',
                    ],
                    [
                        'question' => 'Quelle phrase respecte le pluriel de « jeu » ?',
                        'choices' => [
                            ['choice_text' => 'Les jeus sont amusants.', 'is_correct' => false],
                            ['choice_text' => 'Les jeu sont amusants.', 'is_correct' => false],
                            ['choice_text' => 'Le jeux sont amusants.', 'is_correct' => false],
                            ['choice_text' => 'Les jeux sont amusants.', 'is_correct' => true],
                        ],
                        'explanation' => 'Les noms en -eu prennent un -x au pluriel : des jeux, des cheveux.',
                    ],
                    [
                        'question' => 'Un apprenant écrit : « des fleur rouge ». Quelle correction convient ?',
                        'choices' => [
                            ['choice_text' => 'des fleurs rouges', 'is_correct' => true],
                            ['choice_text' => 'des fleurs rouge', 'is_correct' => false],
                            ['choice_text' => 'des fleur rouges', 'is_correct' => false],
                            ['choice_text' => 'de fleurs rouges', 'is_correct' => false],
                        ],
                        'explanation' => '« Fleurs » est féminin pluriel et « rouges » doit s’accorder avec lui. Le déterminant pluriel est « des ».',
                    ],
                    [
                        'question' => 'Quelle expression est correcte pour parler d’un bâtiment construit il y a très longtemps ?',
                        'choices' => [
                            ['choice_text' => 'un vieux bâtiment', 'is_correct' => true],
                            ['choice_text' => 'une vieux bâtiment', 'is_correct' => false],
                            ['choice_text' => 'un vieille bâtiment', 'is_correct' => false],
                            ['choice_text' => 'un vieux bâtiments', 'is_correct' => false],
                        ],
                        'explanation' => '« Bâtiment » est masculin singulier : on emploie la forme masculine « vieux ».',
                    ],
                    [
                        'question' => 'Quelle phrase est bien accordée ?',
                        'choices' => [
                            ['choice_text' => 'Ces petit fenêtres sont ouvertes.', 'is_correct' => false],
                            ['choice_text' => 'Cette petites fenêtre sont ouvertes.', 'is_correct' => false],
                            ['choice_text' => 'Ces petites fenêtre est ouverte.', 'is_correct' => false],
                            ['choice_text' => 'Ces petites fenêtres sont ouvertes.', 'is_correct' => true],
                        ],
                        'explanation' => '« Fenêtres » est féminin pluriel : « ces petites fenêtres ». Le verbe « sont » correspond également au sujet pluriel.',
                    ],
                    [
                        'question' => 'Quel mot complète correctement « une idée ___ » ?',
                        'choices' => [
                            ['choice_text' => 'intéressant', 'is_correct' => false],
                            ['choice_text' => 'intéressants', 'is_correct' => false],
                            ['choice_text' => 'intéressante', 'is_correct' => true],
                            ['choice_text' => 'intéressantes', 'is_correct' => false],
                        ],
                        'explanation' => '« Idée » est féminin singulier. On choisit donc « intéressante ».',
                    ],
                    [
                        'question' => 'Laquelle de ces phrases est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Elle a de beaux œils bleus.', 'is_correct' => false],
                            ['choice_text' => 'Elle a de beau yeux bleus.', 'is_correct' => false],
                            ['choice_text' => 'Elle a de beaux yeux bleus.', 'is_correct' => true],
                            ['choice_text' => 'Elle a de beaux yeux bleu.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pluriel de « œil » est « yeux », une forme à retenir. L’adjectif « beau » devient « beaux » et « bleus » prend un -s.',
                    ],
                    [
                        'question' => 'Une étudiante écrit « une travail difficile ». Quelle correction est correcte ?',
                        'choices' => [
                            ['choice_text' => 'un travail difficile', 'is_correct' => true],
                            ['choice_text' => 'une travaille difficile', 'is_correct' => false],
                            ['choice_text' => 'un travail difficiles', 'is_correct' => false],
                            ['choice_text' => 'des travail difficile', 'is_correct' => false],
                        ],
                        'explanation' => '« Travail » est masculin singulier. On dit « un travail difficile ».',
                    ],
                    [
                        'question' => 'Quel groupe est correctement accordé ?',
                        'choices' => [
                            ['choice_text' => 'de nouveau chaussures', 'is_correct' => false],
                            ['choice_text' => 'de nouvelles chaussure', 'is_correct' => false],
                            ['choice_text' => 'de nouvelles chaussures', 'is_correct' => true],
                            ['choice_text' => 'des nouvelle chaussures', 'is_correct' => false],
                        ],
                        'explanation' => '« Chaussures » est féminin pluriel. L’adjectif « nouveau » devient donc « nouvelles ».',
                    ],
                ],
            ],
            [
                'title' => 'Défi final : noms et adjectifs en situation',
                'description' => 'Mobilisez les règles essentielles sur le genre, le nombre et les adjectifs dans des phrases de la vie quotidienne et des études.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Vous décrivez un nouvel ordinateur qui fonctionne très bien. Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'C’est une ordinateur performante.', 'is_correct' => false],
                            ['choice_text' => 'C’est un ordinateur performant.', 'is_correct' => true],
                            ['choice_text' => 'C’est un ordinateurs performant.', 'is_correct' => false],
                            ['choice_text' => 'C’est une ordinateur performant.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ordinateur » est masculin singulier. Le groupe correct est donc « un ordinateur performant ».',
                    ],
                    [
                        'question' => 'Mes parents ont acheté deux voitures. Complétez : « Ils ont deux voitures ___. »',
                        'choices' => [
                            ['choice_text' => 'neuf', 'is_correct' => false],
                            ['choice_text' => 'neufs', 'is_correct' => false],
                            ['choice_text' => 'neuves', 'is_correct' => true],
                            ['choice_text' => 'neuve', 'is_correct' => false],
                        ],
                        'explanation' => '« Voitures » est féminin pluriel : « neuf » devient « neuves ».',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour parler de plusieurs cours intéressants ?',
                        'choices' => [
                            ['choice_text' => 'Ce sont des cours intéressante.', 'is_correct' => false],
                            ['choice_text' => 'C’est des cours intéressant.', 'is_correct' => false],
                            ['choice_text' => 'Ce sont des cours intéressants.', 'is_correct' => true],
                            ['choice_text' => 'Ce sont un cours intéressants.', 'is_correct' => false],
                        ],
                        'explanation' => '« Cours » est ici au pluriel et masculin. L’adjectif devient donc « intéressants ».',
                    ],
                    [
                        'question' => 'Quel groupe est correct pour décrire une petite salle ?',
                        'choices' => [
                            ['choice_text' => 'un petit salle lumineux', 'is_correct' => false],
                            ['choice_text' => 'une petite salle lumineuse', 'is_correct' => true],
                            ['choice_text' => 'une petit salle lumineux', 'is_correct' => false],
                            ['choice_text' => 'une petites salle lumineuse', 'is_correct' => false],
                        ],
                        'explanation' => '« Salle » est féminin singulier. Les deux adjectifs doivent donc être au féminin singulier : « petite » et « lumineuse ».',
                    ],
                    [
                        'question' => 'Vous voyez plusieurs photos anciennes. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ces vieux photos sont intéressante.', 'is_correct' => false],
                            ['choice_text' => 'Ces vieilles photos sont intéressantes.', 'is_correct' => true],
                            ['choice_text' => 'Cette vieilles photos sont intéressantes.', 'is_correct' => false],
                            ['choice_text' => 'Ces vieille photo est intéressantes.', 'is_correct' => false],
                        ],
                        'explanation' => '« Photos » est féminin pluriel. On emploie donc « vieilles » et « intéressantes », avec « ces » pour le pluriel.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte avec « personne » ?',
                        'choices' => [
                            ['choice_text' => 'Cette personne est très gentille.', 'is_correct' => true],
                            ['choice_text' => 'Cet personne est très gentil.', 'is_correct' => false],
                            ['choice_text' => 'Cette personne est très gentil.', 'is_correct' => false],
                            ['choice_text' => 'Ce personne est très gentille.', 'is_correct' => false],
                        ],
                        'explanation' => '« Personne » est féminin singulier. On dit donc « cette personne » et l’adjectif prend la forme féminine « gentille ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit « des nouveau livres ». Quelle correction convient ?',
                        'choices' => [
                            ['choice_text' => 'des nouvelles livres', 'is_correct' => false],
                            ['choice_text' => 'des nouveau livre', 'is_correct' => false],
                            ['choice_text' => 'de nouveau livres', 'is_correct' => false],
                            ['choice_text' => 'de nouveaux livres', 'is_correct' => true],
                        ],
                        'explanation' => '« Livres » est masculin pluriel : « nouveau » devient « nouveaux », et « des » devient « de » devant l’adjectif.',
                    ],
                    [
                        'question' => 'Vous voulez parler d’une route très longue. Quelle formulation est correcte ?',
                        'choices' => [
                            ['choice_text' => 'une longue route', 'is_correct' => true],
                            ['choice_text' => 'un longue route', 'is_correct' => false],
                            ['choice_text' => 'une long route', 'is_correct' => false],
                            ['choice_text' => 'une longues route', 'is_correct' => false],
                        ],
                        'explanation' => '« Route » est féminin singulier. L’adjectif « long » prend la forme féminine « longue ».',
                    ],
                    [
                        'question' => 'Quel choix complète correctement : « Les étudiants sont ___ après l’examen. »',
                        'choices' => [
                            ['choice_text' => 'fatigué', 'is_correct' => false],
                            ['choice_text' => 'fatiguée', 'is_correct' => false],
                            ['choice_text' => 'fatigués', 'is_correct' => true],
                            ['choice_text' => 'fatiguées', 'is_correct' => false],
                        ],
                        'explanation' => '« Étudiants » est masculin pluriel, donc « fatigués » est la forme correcte de l’adjectif.',
                    ],
                    [
                        'question' => 'Quelle expression associe correctement le nom et son adjectif ?',
                        'choices' => [
                            ['choice_text' => 'un solution simple', 'is_correct' => false],
                            ['choice_text' => 'une solution simples', 'is_correct' => false],
                            ['choice_text' => 'un solution simples', 'is_correct' => false],
                            ['choice_text' => 'une solution simple', 'is_correct' => true],
                        ],
                        'explanation' => '« Solution » est féminin singulier. « Simple » ne change pas de forme au féminin singulier, donc « une solution simple » est correct.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte au pluriel ?',
                        'choices' => [
                            ['choice_text' => 'Les petits chiens blancs jouent dehors.', 'is_correct' => true],
                            ['choice_text' => 'Les petit chiens blancs jouent dehors.', 'is_correct' => false],
                            ['choice_text' => 'Les petits chien blanc jouent dehors.', 'is_correct' => false],
                            ['choice_text' => 'Le petits chiens blanche jouent dehors.', 'is_correct' => false],
                        ],
                        'explanation' => '« Chiens » est masculin pluriel. Les deux adjectifs doivent donc être au masculin pluriel : « petits » et « blancs ».',
                    ],
                    [
                        'question' => 'Une personne parle de plusieurs fleurs qui ont une couleur jaune. Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'Les fleurs jaune sont belles.', 'is_correct' => false],
                            ['choice_text' => 'Les fleur jaunes sont belle.', 'is_correct' => false],
                            ['choice_text' => 'La fleurs jaunes est belle.', 'is_correct' => false],
                            ['choice_text' => 'Les fleurs jaunes sont belles.', 'is_correct' => true],
                        ],
                        'explanation' => '« Fleurs » est féminin pluriel. L’adjectif de couleur « jaune » prend donc la marque du pluriel : « jaunes ».',
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
