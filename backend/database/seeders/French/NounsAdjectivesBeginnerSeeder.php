<?php

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
                "title" => "Reconnaître le genre des noms",
                "description" => "Identifiez le genre grammatical de noms courants et choisissez les déterminants et adjectifs qui leur correspondent.",
                "duration" => 20,
                "passing_score" => 50,
                "questions" => [
                    [
                        "question" => "Quel nom est féminin ?",
                        "choices" => [
                            ["choice_text" => "La table", "is_correct" => true],
                            ["choice_text" => "Le livre", "is_correct" => false],
                            ["choice_text" => "Le jardin", "is_correct" => false],
                            ["choice_text" => "Le téléphone", "is_correct" => false],
                        ],
                        "explanation" => "« Table » est un nom féminin : on dit « la table ». Les trois autres noms proposés sont masculins."
                    ],
                    [
                        "question" => "Quel groupe est correctement formé ?",
                        "choices" => [
                            ["choice_text" => "Une chaise", "is_correct" => true],
                            ["choice_text" => "Un chaise", "is_correct" => false],
                            ["choice_text" => "Une livre", "is_correct" => false],
                            ["choice_text" => "Un fenêtre", "is_correct" => false],
                        ],
                        "explanation" => "« Chaise » est féminin singulier, donc le déterminant indéfini correct est « une »."
                    ],
                    [
                        "question" => "Vous parlez d'un objet masculin : « ___ ordinateur est neuf. » Quel déterminant convient ?",
                        "choices" => [
                            ["choice_text" => "Un", "is_correct" => true],
                            ["choice_text" => "Une", "is_correct" => false],
                            ["choice_text" => "Une seule", "is_correct" => false],
                            ["choice_text" => "Des", "is_correct" => false],
                        ],
                        "explanation" => "« Ordinateur » est masculin singulier. Le déterminant indéfini correspondant est « un »."
                    ],
                    [
                        "question" => "Quelle phrase est correcte avec le nom « voiture » ?",
                        "choices" => [
                            ["choice_text" => "La voiture est rapide.", "is_correct" => true],
                            ["choice_text" => "Le voiture est rapide.", "is_correct" => false],
                            ["choice_text" => "La voiture est rapides.", "is_correct" => false],
                            ["choice_text" => "Un voiture est rapide.", "is_correct" => false],
                        ],
                        "explanation" => "« Voiture » est féminin singulier. On dit « la voiture » et, pour l'adjectif « rapide », la même forme est utilisée au féminin singulier."
                    ],
                    [
                        "question" => "Quel nom est masculin ?",
                        "choices" => [
                            ["choice_text" => "Le problème", "is_correct" => true],
                            ["choice_text" => "La solution", "is_correct" => false],
                            ["choice_text" => "La question", "is_correct" => false],
                            ["choice_text" => "La réponse", "is_correct" => false],
                        ],
                        "explanation" => "On dit « le problème » : ce nom est masculin. Les noms « solution », « question » et « réponse » sont féminins."
                    ],
                    [
                        "question" => "Un apprenant écrit « une appartement ». Quelle correction faut-il faire ?",
                        "choices" => [
                            ["choice_text" => "un appartement", "is_correct" => true],
                            ["choice_text" => "une appartement", "is_correct" => false],
                            ["choice_text" => "une appartements", "is_correct" => false],
                            ["choice_text" => "un appartementes", "is_correct" => false],
                        ],
                        "explanation" => "« Appartement » est masculin singulier. On dit donc « un appartement »."
                    ],
                    [
                        "question" => "Quelle paire associe correctement le nom et son genre ?",
                        "choices" => [
                            ["choice_text" => "une fleur — féminin", "is_correct" => true],
                            ["choice_text" => "un porte — masculin", "is_correct" => false],
                            ["choice_text" => "une livre — féminin", "is_correct" => false],
                            ["choice_text" => "un maison — masculin", "is_correct" => false],
                        ],
                        "explanation" => "« Fleur » est féminin : on dit « une fleur ». « Porte » et « maison » sont féminins, tandis que « livre » est masculin."
                    ],
                    [
                        "question" => "Quel groupe complète naturellement la phrase : « J'ai acheté ___ nouvelle chemise. » ?",
                        "choices" => [
                            ["choice_text" => "une", "is_correct" => true],
                            ["choice_text" => "un", "is_correct" => false],
                            ["choice_text" => "des", "is_correct" => false],
                            ["choice_text" => "le", "is_correct" => false],
                        ],
                        "explanation" => "« Chemise » est féminin singulier, donc « une nouvelle chemise » est correct."
                    ],
                    [
                        "question" => "Dans « un étudiant sérieux », quel mot est le nom ?",
                        "choices" => [
                            ["choice_text" => "étudiant", "is_correct" => true],
                            ["choice_text" => "un", "is_correct" => false],
                            ["choice_text" => "sérieux", "is_correct" => false],
                            ["choice_text" => "estudiant", "is_correct" => false],
                        ],
                        "explanation" => "« Étudiant » désigne une personne et constitue le nom du groupe nominal. « Un » est le déterminant et « sérieux » est l'adjectif."
                    ],
                    [
                        "question" => "Quelle phrase décrit correctement « une école » ?",
                        "choices" => [
                            ["choice_text" => "Une école moderne", "is_correct" => true],
                            ["choice_text" => "Un école moderne", "is_correct" => false],
                            ["choice_text" => "Une école modernes", "is_correct" => false],
                            ["choice_text" => "Un école modernes", "is_correct" => false],
                        ],
                        "explanation" => "« École » est féminin singulier, donc « une école ». L'adjectif « moderne » reste identique au féminin singulier."
                    ],
                ],
            ],
            [
                "title" => "Former correctement les pluriels",
                "description" => "Entraînez-vous à former le pluriel des noms et à repérer les formes régulières et quelques formes fréquentes à connaître.",
                "duration" => 20,
                "passing_score" => 55,
                "questions" => [
                    [
                        "question" => "Quel est le pluriel correct de « livre » ?",
                        "choices" => [
                            ["choice_text" => "livres", "is_correct" => true],
                            ["choice_text" => "livrex", "is_correct" => false],
                            ["choice_text" => "livreses", "is_correct" => false],
                            ["choice_text" => "livr", "is_correct" => false],
                        ],
                        "explanation" => "Le nom « livre » forme son pluriel régulièrement avec un s : « livres »."
                    ],
                    [
                        "question" => "Comment écrit-on « une voiture » au pluriel ?",
                        "choices" => [
                            ["choice_text" => "des voitures", "is_correct" => true],
                            ["choice_text" => "des voiture", "is_correct" => false],
                            ["choice_text" => "des voiturs", "is_correct" => false],
                            ["choice_text" => "une voitures", "is_correct" => false],
                        ],
                        "explanation" => "Au pluriel, le déterminant devient « des » et « voiture » prend un s : « des voitures »."
                    ],
                    [
                        "question" => "Quel est le pluriel correct de « journal » ?",
                        "choices" => [
                            ["choice_text" => "journaux", "is_correct" => true],
                            ["choice_text" => "journals", "is_correct" => false],
                            ["choice_text" => "journalx", "is_correct" => false],
                            ["choice_text" => "journauxs", "is_correct" => false],
                        ],
                        "explanation" => "Le nom « journal » fait partie des noms en -al qui forment souvent leur pluriel en -aux : « journaux »."
                    ],
                    [
                        "question" => "Quel est le pluriel de « animal » ?",
                        "choices" => [
                            ["choice_text" => "animaux", "is_correct" => true],
                            ["choice_text" => "animals", "is_correct" => false],
                            ["choice_text" => "animalx", "is_correct" => false],
                            ["choice_text" => "animaus", "is_correct" => false],
                        ],
                        "explanation" => "« Animal » devient « animaux » au pluriel. Cette transformation est fréquente pour les noms terminés par -al."
                    ],
                    [
                        "question" => "Quelle forme convient dans « deux ___ » si l'on parle de deux personnes qui habitent près de vous ?",
                        "choices" => [
                            ["choice_text" => "voisins", "is_correct" => true],
                            ["choice_text" => "voisinx", "is_correct" => false],
                            ["choice_text" => "voisine", "is_correct" => false],
                            ["choice_text" => "voisin", "is_correct" => false],
                        ],
                        "explanation" => "Deux personnes forment un pluriel. Le nom « voisin » prend donc la marque du pluriel : « voisins »."
                    ],
                    [
                        "question" => "Quel pluriel est correct pour « cheval » ?",
                        "choices" => [
                            ["choice_text" => "chevaux", "is_correct" => true],
                            ["choice_text" => "chevals", "is_correct" => false],
                            ["choice_text" => "chevauxs", "is_correct" => false],
                            ["choice_text" => "chevalx", "is_correct" => false],
                        ],
                        "explanation" => "Le pluriel de « cheval » est « chevaux ». Il s'agit d'une forme à mémoriser."
                    ],
                    [
                        "question" => "Vous avez plusieurs « bateau ». Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Les bateaux sont au port.", "is_correct" => true],
                            ["choice_text" => "Les bateaus sont au port.", "is_correct" => false],
                            ["choice_text" => "Le bateaux sont au port.", "is_correct" => false],
                            ["choice_text" => "Les bateau est au port.", "is_correct" => false],
                        ],
                        "explanation" => "Le pluriel de « bateau » s'écrit « bateaux ». Le déterminant « les » et le verbe « sont » indiquent également le pluriel."
                    ],
                    [
                        "question" => "Quel groupe est correctement écrit au pluriel ?",
                        "choices" => [
                            ["choice_text" => "des enfants heureux", "is_correct" => true],
                            ["choice_text" => "des enfant heureux", "is_correct" => false],
                            ["choice_text" => "des enfants heureuse", "is_correct" => false],
                            ["choice_text" => "des enfant heureuse", "is_correct" => false],
                        ],
                        "explanation" => "« Enfants » est au pluriel et « heureux » est ici au masculin pluriel. Le déterminant « des » convient également."
                    ],
                    [
                        "question" => "Quelle phrase montre correctement le pluriel de « travail » ?",
                        "choices" => [
                            ["choice_text" => "Les travaux sont terminés.", "is_correct" => true],
                            ["choice_text" => "Les travails sont terminés.", "is_correct" => false],
                            ["choice_text" => "Le travaux sont terminé.", "is_correct" => false],
                            ["choice_text" => "Les travaux est terminés.", "is_correct" => false],
                        ],
                        "explanation" => "Dans le sens de travaux ou de tâches à réaliser, le pluriel de « travail » est « travaux »."
                    ],
                    [
                        "question" => "Quel nom reste identique à l'écrit au singulier et au pluriel ?",
                        "choices" => [
                            ["choice_text" => "un prix / des prix", "is_correct" => true],
                            ["choice_text" => "un chat / des chat", "is_correct" => false],
                            ["choice_text" => "un livre / des livre", "is_correct" => false],
                            ["choice_text" => "un ami / des ami", "is_correct" => false],
                        ],
                        "explanation" => "« Prix » s'écrit de la même manière au singulier et au pluriel. C'est le déterminant ou le contexte qui permet de distinguer les deux nombres."
                    ],
                ],
            ],
            [
                "title" => "Accorder les adjectifs avec les noms",
                "description" => "Appliquez les accords de genre et de nombre entre les noms et les adjectifs dans des phrases simples et naturelles.",
                "duration" => 25,
                "passing_score" => 60,
                "questions" => [
                    [
                        "question" => "Quelle forme convient dans « une maison ___ » ?",
                        "choices" => [
                            ["choice_text" => "blanche", "is_correct" => true],
                            ["choice_text" => "blanc", "is_correct" => false],
                            ["choice_text" => "blanches", "is_correct" => false],
                            ["choice_text" => "blancs", "is_correct" => false],
                        ],
                        "explanation" => "« Maison » est féminin singulier. L'adjectif « blanc » doit donc prendre la forme « blanche »."
                    ],
                    [
                        "question" => "Quel accord convient dans « des garçons ___ » ?",
                        "choices" => [
                            ["choice_text" => "sportifs", "is_correct" => true],
                            ["choice_text" => "sportif", "is_correct" => false],
                            ["choice_text" => "sportive", "is_correct" => false],
                            ["choice_text" => "sportives", "is_correct" => false],
                        ],
                        "explanation" => "« Garçons » est masculin pluriel. L'adjectif « sportif » devient donc « sportifs »."
                    ],
                    [
                        "question" => "Complétez : « une fille ___ »",
                        "choices" => [
                            ["choice_text" => "heureuse", "is_correct" => true],
                            ["choice_text" => "heureux", "is_correct" => false],
                            ["choice_text" => "heureuses", "is_correct" => false],
                            ["choice_text" => "heureus", "is_correct" => false],
                        ],
                        "explanation" => "« Fille » est féminin singulier. La forme correcte de l'adjectif est « heureuse »."
                    ],
                    [
                        "question" => "Quelle phrase est correctement accordée ?",
                        "choices" => [
                            ["choice_text" => "Les fleurs sont rouges.", "is_correct" => true],
                            ["choice_text" => "Les fleurs sont rouge.", "is_correct" => false],
                            ["choice_text" => "Les fleurs sont rougent.", "is_correct" => false],
                            ["choice_text" => "La fleurs sont rouges.", "is_correct" => false],
                        ],
                        "explanation" => "« Fleurs » est féminin pluriel et l'adjectif « rouge » prend ici la marque du pluriel : « rouges »."
                    ],
                    [
                        "question" => "Vous décrivez un homme et une femme qui sont tous les deux fatigués. Quelle formulation est correcte ?",
                        "choices" => [
                            ["choice_text" => "Ils sont fatigués.", "is_correct" => true],
                            ["choice_text" => "Ils sont fatiguées.", "is_correct" => false],
                            ["choice_text" => "Ils sont fatigué.", "is_correct" => false],
                            ["choice_text" => "Ils sont fatigue.", "is_correct" => false],
                        ],
                        "explanation" => "Pour un groupe mixte, l'accord grammatical traditionnel se fait au masculin pluriel : « fatigués »."
                    ],
                    [
                        "question" => "Quel groupe est correct ?",
                        "choices" => [
                            ["choice_text" => "de grandes fenêtres", "is_correct" => true],
                            ["choice_text" => "de grand fenêtres", "is_correct" => false],
                            ["choice_text" => "de grande fenêtre", "is_correct" => false],
                            ["choice_text" => "de grands fenêtre", "is_correct" => false],
                        ],
                        "explanation" => "« Fenêtres » est féminin pluriel, donc « grandes » prend les marques du féminin et du pluriel."
                    ],
                    [
                        "question" => "Une étudiante écrit : « une appartement moderne ». Quelle correction faut-il apporter ?",
                        "choices" => [
                            ["choice_text" => "un appartement moderne", "is_correct" => true],
                            ["choice_text" => "une appartement modernes", "is_correct" => false],
                            ["choice_text" => "un appartement modernes", "is_correct" => false],
                            ["choice_text" => "une appartements moderne", "is_correct" => false],
                        ],
                        "explanation" => "« Appartement » est masculin singulier. Le déterminant doit donc être « un ». L'adjectif « moderne » reste au singulier."
                    ],
                    [
                        "question" => "Quelle forme convient avec « des histoires » ?",
                        "choices" => [
                            ["choice_text" => "intéressantes", "is_correct" => true],
                            ["choice_text" => "intéressant", "is_correct" => false],
                            ["choice_text" => "intéressants", "is_correct" => false],
                            ["choice_text" => "intéressante", "is_correct" => false],
                        ],
                        "explanation" => "« Histoires » est féminin pluriel, donc « intéressant » devient « intéressantes »."
                    ],
                    [
                        "question" => "Quelle phrase contient un accord incorrect ?",
                        "choices" => [
                            ["choice_text" => "La voiture est rapides.", "is_correct" => true],
                            ["choice_text" => "La voiture est rapide.", "is_correct" => false],
                            ["choice_text" => "Les voitures sont rapides.", "is_correct" => false],
                            ["choice_text" => "Les véhicules sont rapides.", "is_correct" => false],
                        ],
                        "explanation" => "« La voiture » est féminin singulier. L'adjectif doit être « rapide », sans marque du pluriel."
                    ],
                    [
                        "question" => "Vous parlez de plusieurs étudiantes. Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Les étudiantes sont sérieuses.", "is_correct" => true],
                            ["choice_text" => "Les étudiantes sont sérieux.", "is_correct" => false],
                            ["choice_text" => "Les étudiante sont sérieuses.", "is_correct" => false],
                            ["choice_text" => "La étudiantes sont sérieuses.", "is_correct" => false],
                        ],
                        "explanation" => "« Étudiantes » est féminin pluriel. Le nom et l'adjectif doivent donc porter les marques du féminin et du pluriel."
                    ],
                    [
                        "question" => "Quel adjectif complète correctement « un exercice ___ » ?",
                        "choices" => [
                            ["choice_text" => "facile", "is_correct" => true],
                            ["choice_text" => "faciles", "is_correct" => false],
                            ["choice_text" => "facileuse", "is_correct" => false],
                            ["choice_text" => "facils", "is_correct" => false],
                        ],
                        "explanation" => "« Exercice » est masculin singulier et « facile » possède ici la même forme au masculin et au féminin singulier."
                    ],
                    [
                        "question" => "Quelle formulation décrit correctement deux maisons anciennes ?",
                        "choices" => [
                            ["choice_text" => "deux maisons anciennes", "is_correct" => true],
                            ["choice_text" => "deux maison ancienne", "is_correct" => false],
                            ["choice_text" => "deux maisons ancien", "is_correct" => false],
                            ["choice_text" => "deux maison anciens", "is_correct" => false],
                        ],
                        "explanation" => "« Maisons » est féminin pluriel et « ancienne » doit donc devenir « anciennes »."
                    ],
                ],
            ],
            [
                "title" => "La place des adjectifs en français",
                "description" => "Observez la position naturelle des adjectifs les plus courants et distinguez les formulations correctes dans des phrases simples.",
                "duration" => 20,
                "passing_score" => 60,
                "questions" => [
                    [
                        "question" => "Quelle formulation est la plus naturelle ?",
                        "choices" => [
                            ["choice_text" => "Une petite maison", "is_correct" => true],
                            ["choice_text" => "Une maison petite", "is_correct" => false],
                            ["choice_text" => "Une petite de maison", "is_correct" => false],
                            ["choice_text" => "Une maison de petite", "is_correct" => false],
                        ],
                        "explanation" => "L'adjectif « petit » se place très naturellement avant le nom dans « une petite maison »."
                    ],
                    [
                        "question" => "Quelle expression est correcte ?",
                        "choices" => [
                            ["choice_text" => "un film intéressant", "is_correct" => true],
                            ["choice_text" => "un intéressant film", "is_correct" => false],
                            ["choice_text" => "un film intéressants", "is_correct" => false],
                            ["choice_text" => "une film intéressant", "is_correct" => false],
                        ],
                        "explanation" => "« Intéressant » se place naturellement après « film » dans cette phrase : « un film intéressant »."
                    ],
                    [
                        "question" => "Quelle phrase est la plus naturelle ?",
                        "choices" => [
                            ["choice_text" => "Une belle journée", "is_correct" => true],
                            ["choice_text" => "Une journée belle", "is_correct" => false],
                            ["choice_text" => "Un belle journée", "is_correct" => false],
                            ["choice_text" => "Une belles journée", "is_correct" => false],
                        ],
                        "explanation" => "« Belle » fait partie des adjectifs fréquemment placés avant le nom. On dit naturellement « une belle journée »."
                    ],
                    [
                        "question" => "Quelle formulation convient ?",
                        "choices" => [
                            ["choice_text" => "Une voiture rouge", "is_correct" => true],
                            ["choice_text" => "Une rouge voiture", "is_correct" => false],
                            ["choice_text" => "Un voiture rouge", "is_correct" => false],
                            ["choice_text" => "Une voiture rouges", "is_correct" => false],
                        ],
                        "explanation" => "Les adjectifs de couleur se placent normalement après le nom : « une voiture rouge »."
                    ],
                    [
                        "question" => "Quelle expression est correcte ?",
                        "choices" => [
                            ["choice_text" => "un jeune étudiant", "is_correct" => true],
                            ["choice_text" => "un étudiant jeune", "is_correct" => false],
                            ["choice_text" => "une jeune étudiant", "is_correct" => false],
                            ["choice_text" => "un jeunes étudiant", "is_correct" => false],
                        ],
                        "explanation" => "« Jeune » peut se placer naturellement avant le nom : « un jeune étudiant ». Le déterminant, le nom et l'adjectif sont au masculin singulier."
                    ],
                    [
                        "question" => "Quel choix convient dans « J'ai acheté une chemise ___ » ?",
                        "choices" => [
                            ["choice_text" => "blanche", "is_correct" => true],
                            ["choice_text" => "blanc", "is_correct" => false],
                            ["choice_text" => "blanches", "is_correct" => false],
                            ["choice_text" => "blanhe", "is_correct" => false],
                        ],
                        "explanation" => "« Blanche » est l'adjectif féminin singulier correspondant à « chemise ». Les couleurs se placent généralement après le nom."
                    ],
                    [
                        "question" => "Quelle phrase sonne naturellement en français courant ?",
                        "choices" => [
                            ["choice_text" => "Nous avons un petit problème.", "is_correct" => true],
                            ["choice_text" => "Nous avons un problème petit.", "is_correct" => false],
                            ["choice_text" => "Nous avons une petit problème.", "is_correct" => false],
                            ["choice_text" => "Nous avons des petit problème.", "is_correct" => false],
                        ],
                        "explanation" => "« Petit » se place couramment avant le nom et s'accorde avec « problème », masculin singulier : « un petit problème »."
                    ],
                    [
                        "question" => "Quelle expression est correcte ?",
                        "choices" => [
                            ["choice_text" => "une histoire difficile", "is_correct" => true],
                            ["choice_text" => "une difficile histoire", "is_correct" => false],
                            ["choice_text" => "un histoire difficile", "is_correct" => false],
                            ["choice_text" => "une histoires difficiles", "is_correct" => false],
                        ],
                        "explanation" => "« Difficile » se place normalement après le nom dans cette construction : « une histoire difficile »."
                    ],
                    [
                        "question" => "Quel groupe est correctement placé et accordé ?",
                        "choices" => [
                            ["choice_text" => "de grandes fenêtres", "is_correct" => true],
                            ["choice_text" => "de fenêtres grandes", "is_correct" => false],
                            ["choice_text" => "de grand fenêtres", "is_correct" => false],
                            ["choice_text" => "des grandes fenêtre", "is_correct" => false],
                        ],
                        "explanation" => "« Grand » peut se placer avant « fenêtres » et devient « grandes » au féminin pluriel : « de grandes fenêtres »."
                    ],
                    [
                        "question" => "Quelle phrase est naturelle ?",
                        "choices" => [
                            ["choice_text" => "Elle porte une robe noire.", "is_correct" => true],
                            ["choice_text" => "Elle porte une noire robe.", "is_correct" => false],
                            ["choice_text" => "Elle porte un robe noire.", "is_correct" => false],
                            ["choice_text" => "Elle porte une robe noirs.", "is_correct" => false],
                        ],
                        "explanation" => "L'adjectif de couleur « noire » se place après le nom et s'accorde avec « robe » au féminin singulier."
                    ],
                ],
            ],
            [
                "title" => "Les formes de genre les plus fréquentes",
                "description" => "Mémorisez quelques formes masculines et féminines courantes ainsi que des noms dont le genre peut surprendre les débutants.",
                "duration" => 25,
                "passing_score" => 60,
                "questions" => [
                    [
                        "question" => "Quel est le féminin de « étudiant » ?",
                        "choices" => [
                            ["choice_text" => "étudiante", "is_correct" => true],
                            ["choice_text" => "étudianté", "is_correct" => false],
                            ["choice_text" => "étudiente", "is_correct" => false],
                            ["choice_text" => "étudieuse", "is_correct" => false],
                        ],
                        "explanation" => "Le féminin courant de « étudiant » est « étudiante ». Le nom garde la même base et prend la terminaison féminine -e."
                    ],
                    [
                        "question" => "Quel est le féminin de « acteur » ?",
                        "choices" => [
                            ["choice_text" => "actrice", "is_correct" => true],
                            ["choice_text" => "acteuse", "is_correct" => false],
                            ["choice_text" => "acteurse", "is_correct" => false],
                            ["choice_text" => "acteure", "is_correct" => false],
                        ],
                        "explanation" => "Le féminin de « acteur » est « actrice ». Il s'agit d'une transformation irrégulière qu'il faut mémoriser."
                    ],
                    [
                        "question" => "Quel est le féminin de « serveur » dans un restaurant ?",
                        "choices" => [
                            ["choice_text" => "serveuse", "is_correct" => true],
                            ["choice_text" => "serveure", "is_correct" => false],
                            ["choice_text" => "servante", "is_correct" => false],
                            ["choice_text" => "serveurresse", "is_correct" => false],
                        ],
                        "explanation" => "Le féminin de « serveur » est « serveuse ». « Servante » a un autre sens et ne constitue pas ici le féminin attendu."
                    ],
                    [
                        "question" => "Quel est le féminin de « directeur » ?",
                        "choices" => [
                            ["choice_text" => "directrice", "is_correct" => true],
                            ["choice_text" => "directeure", "is_correct" => false],
                            ["choice_text" => "directeuse", "is_correct" => false],
                            ["choice_text" => "direction", "is_correct" => false],
                        ],
                        "explanation" => "Le féminin traditionnel de « directeur » est « directrice »."
                    ],
                    [
                        "question" => "Quel mot est féminin malgré sa terminaison en -age ?",
                        "choices" => [
                            ["choice_text" => "image", "is_correct" => true],
                            ["choice_text" => "voyage", "is_correct" => false],
                            ["choice_text" => "garage", "is_correct" => false],
                            ["choice_text" => "message", "is_correct" => false],
                        ],
                        "explanation" => "« Image » est féminin : on dit « une image ». Les noms voyage, garage et message sont masculins."
                    ],
                    [
                        "question" => "Quel groupe est correct ?",
                        "choices" => [
                            ["choice_text" => "une personne importante", "is_correct" => true],
                            ["choice_text" => "un personne important", "is_correct" => false],
                            ["choice_text" => "une personne important", "is_correct" => false],
                            ["choice_text" => "un personne importante", "is_correct" => false],
                        ],
                        "explanation" => "« Personne » est féminin, même lorsqu'il désigne un homme. On dit « une personne » et l'adjectif s'accorde au féminin : « importante »."
                    ],
                    [
                        "question" => "Quel nom est masculin ?",
                        "choices" => [
                            ["choice_text" => "Le silence", "is_correct" => true],
                            ["choice_text" => "La couleur", "is_correct" => false],
                            ["choice_text" => "La chaleur", "is_correct" => false],
                            ["choice_text" => "La douleur", "is_correct" => false],
                        ],
                        "explanation" => "On dit « le silence ». Les noms couleur, chaleur et douleur sont féminins."
                    ],
                    [
                        "question" => "Quelle phrase est correcte avec « main » ?",
                        "choices" => [
                            ["choice_text" => "J'ai une petite main.", "is_correct" => true],
                            ["choice_text" => "J'ai un petit main.", "is_correct" => false],
                            ["choice_text" => "J'ai une petit main.", "is_correct" => false],
                            ["choice_text" => "J'ai un petite main.", "is_correct" => false],
                        ],
                        "explanation" => "« Main » est féminin singulier : « une main ». L'adjectif s'accorde donc également au féminin : « petite »."
                    ],
                    [
                        "question" => "Quel est le féminin de « boulanger » ?",
                        "choices" => [
                            ["choice_text" => "boulangère", "is_correct" => true],
                            ["choice_text" => "boulangere", "is_correct" => false],
                            ["choice_text" => "boulangèreuse", "is_correct" => false],
                            ["choice_text" => "boulangesse", "is_correct" => false],
                        ],
                        "explanation" => "Le féminin de « boulanger » est « boulangère ». L'accent grave sur è fait partie de la forme correcte."
                    ],
                    [
                        "question" => "Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Ma sœur est une bonne musicienne.", "is_correct" => true],
                            ["choice_text" => "Mon sœur est un bon musicienne.", "is_correct" => false],
                            ["choice_text" => "Ma sœur est un bon musicienne.", "is_correct" => false],
                            ["choice_text" => "Ma sœur est une bonne musicien.", "is_correct" => false],
                        ],
                        "explanation" => "« Sœur » et « musicienne » sont féminins. Le déterminant « une » et l'adjectif « bonne » sont donc également au féminin."
                    ],
                ],
            ],
            [
                "title" => "Reconnaître le nom et l'adjectif",
                "description" => "Distinguez les noms des adjectifs et utilisez ces deux catégories pour décrire correctement des personnes, des objets et des lieux.",
                "duration" => 25,
                "passing_score" => 60,
                "questions" => [
                    [
                        "question" => "Dans « une maison calme », quel mot décrit la maison ?",
                        "choices" => [
                            ["choice_text" => "calme", "is_correct" => true],
                            ["choice_text" => "maison", "is_correct" => false],
                            ["choice_text" => "une", "is_correct" => false],
                            ["choice_text" => "aucun mot", "is_correct" => false],
                        ],
                        "explanation" => "« Calme » apporte une information sur la maison. C'est donc l'adjectif du groupe nominal."
                    ],
                    [
                        "question" => "Dans « un vieux vélo », quel mot est le nom ?",
                        "choices" => [
                            ["choice_text" => "vélo", "is_correct" => true],
                            ["choice_text" => "vieux", "is_correct" => false],
                            ["choice_text" => "un", "is_correct" => false],
                            ["choice_text" => "vieux vélo", "is_correct" => false],
                        ],
                        "explanation" => "« Vélo » désigne l'objet. « Vieux » est l'adjectif qui le décrit et « un » est le déterminant."
                    ],
                    [
                        "question" => "Quel mot est un adjectif dans « une robe élégante » ?",
                        "choices" => [
                            ["choice_text" => "élégante", "is_correct" => true],
                            ["choice_text" => "robe", "is_correct" => false],
                            ["choice_text" => "une", "is_correct" => false],
                            ["choice_text" => "élégamment", "is_correct" => false],
                        ],
                        "explanation" => "« Élégante » décrit la robe et s'accorde avec elle au féminin singulier. C'est donc l'adjectif."
                    ],
                    [
                        "question" => "Dans « un professeur patient », quel mot désigne la personne ?",
                        "choices" => [
                            ["choice_text" => "professeur", "is_correct" => true],
                            ["choice_text" => "patient", "is_correct" => false],
                            ["choice_text" => "un", "is_correct" => false],
                            ["choice_text" => "professorial", "is_correct" => false],
                        ],
                        "explanation" => "« Professeur » est le nom qui désigne la personne. « Patient » donne une caractéristique de cette personne."
                    ],
                    [
                        "question" => "Quelle phrase utilise correctement un adjectif pour décrire un livre ?",
                        "choices" => [
                            ["choice_text" => "C'est un livre passionnant.", "is_correct" => true],
                            ["choice_text" => "C'est une livre passionnante.", "is_correct" => false],
                            ["choice_text" => "C'est un passionnant livres.", "is_correct" => false],
                            ["choice_text" => "C'est un livre passionnante.", "is_correct" => false],
                        ],
                        "explanation" => "« Livre » est masculin singulier. L'adjectif « passionnant » doit donc rester au masculin singulier."
                    ],
                    [
                        "question" => "Dans « les rues étroites », quel mot est l'adjectif ?",
                        "choices" => [
                            ["choice_text" => "étroites", "is_correct" => true],
                            ["choice_text" => "rues", "is_correct" => false],
                            ["choice_text" => "les", "is_correct" => false],
                            ["choice_text" => "dans", "is_correct" => false],
                        ],
                        "explanation" => "« Étroites » décrit les rues et s'accorde avec « rues » au féminin pluriel."
                    ],
                    [
                        "question" => "Quel mot est le nom dans « une longue journée » ?",
                        "choices" => [
                            ["choice_text" => "journée", "is_correct" => true],
                            ["choice_text" => "longue", "is_correct" => false],
                            ["choice_text" => "une", "is_correct" => false],
                            ["choice_text" => "long", "is_correct" => false],
                        ],
                        "explanation" => "« Journée » est le nom qui désigne une période de temps. « Longue » est l'adjectif qui la décrit."
                    ],
                    [
                        "question" => "Quel groupe contient un nom et un adjectif correctement accordé ?",
                        "choices" => [
                            ["choice_text" => "un arbre haut", "is_correct" => true],
                            ["choice_text" => "une arbre haute", "is_correct" => false],
                            ["choice_text" => "un arbre haute", "is_correct" => false],
                            ["choice_text" => "des arbre haut", "is_correct" => false],
                        ],
                        "explanation" => "« Arbre » est masculin singulier. « Haut » s'accorde donc au masculin singulier : « un arbre haut »."
                    ],
                    [
                        "question" => "Dans « des chaussures confortables », pourquoi « confortables » prend-il un -s ?",
                        "choices" => [
                            ["choice_text" => "Parce que l'adjectif s'accorde avec le nom pluriel « chaussures ».", "is_correct" => true],
                            ["choice_text" => "Parce que tous les adjectifs finissent par -s.", "is_correct" => false],
                            ["choice_text" => "Parce que « confortable » est un nom pluriel.", "is_correct" => false],
                            ["choice_text" => "Parce que le déterminant « des » impose toujours -s à tous les mots.", "is_correct" => false],
                        ],
                        "explanation" => "Le nom « chaussures » est féminin pluriel. L'adjectif « confortable » doit donc lui aussi prendre la marque du pluriel : « confortables »."
                    ],
                    [
                        "question" => "Quelle proposition contient uniquement des adjectifs ?",
                        "choices" => [
                            ["choice_text" => "grand, calme, heureux", "is_correct" => true],
                            ["choice_text" => "maison, livre, école", "is_correct" => false],
                            ["choice_text" => "courir, petit, table", "is_correct" => false],
                            ["choice_text" => "professeur, rouge, voiture", "is_correct" => false],
                        ],
                        "explanation" => "Grand, calme et heureux sont tous des adjectifs. Les autres propositions mélangent noms, verbes et adjectifs."
                    ],
                ],
            ],
            [
                "title" => "Préciser et enrichir une description",
                "description" => "Choisissez des adjectifs précis et adaptés pour décrire des personnes, des objets et des situations de la vie quotidienne.",
                "duration" => 30,
                "passing_score" => 65,
                "questions" => [
                    [
                        "question" => "Vous voulez indiquer qu'un sac peut contenir beaucoup de choses. Quel adjectif convient le mieux ?",
                        "choices" => [
                            ["choice_text" => "spacieux", "is_correct" => true],
                            ["choice_text" => "bruyant", "is_correct" => false],
                            ["choice_text" => "sucré", "is_correct" => false],
                            ["choice_text" => "timide", "is_correct" => false],
                        ],
                        "explanation" => "« Spacieux » décrit un objet qui offre beaucoup de place. Il convient donc naturellement à un sac de grande capacité."
                    ],
                    [
                        "question" => "Quel adjectif convient pour une pièce où il y a beaucoup de lumière ?",
                        "choices" => [
                            ["choice_text" => "lumineuse", "is_correct" => true],
                            ["choice_text" => "bruyante", "is_correct" => false],
                            ["choice_text" => "étroite", "is_correct" => false],
                            ["choice_text" => "salée", "is_correct" => false],
                        ],
                        "explanation" => "Une pièce où il y a beaucoup de lumière peut être décrite comme « lumineuse ». Le mot s'accorde ici avec « pièce », féminin singulier."
                    ],
                    [
                        "question" => "Une route qui n'est pas dangereuse peut être qualifiée de :",
                        "choices" => [
                            ["choice_text" => "sûre", "is_correct" => true],
                            ["choice_text" => "sucrée", "is_correct" => false],
                            ["choice_text" => "froide", "is_correct" => false],
                            ["choice_text" => "lourde", "is_correct" => false],
                        ],
                        "explanation" => "« Sûre » signifie ici qu'elle présente peu de danger. C'est l'adjectif adapté à une route considérée comme sans danger important."
                    ],
                    [
                        "question" => "Quel adjectif décrit le mieux un étudiant qui arrive toujours à l'heure ?",
                        "choices" => [
                            ["choice_text" => "ponctuel", "is_correct" => true],
                            ["choice_text" => "généreux", "is_correct" => false],
                            ["choice_text" => "fragile", "is_correct" => false],
                            ["choice_text" => "humide", "is_correct" => false],
                        ],
                        "explanation" => "Une personne « ponctuelle » respecte les horaires. Le masculin singulier « ponctuel » convient ici à « étudiant »."
                    ],
                    [
                        "question" => "Vous parlez d'une conversation qui ne contient pas beaucoup de mots inutiles. Quel adjectif convient ?",
                        "choices" => [
                            ["choice_text" => "claire", "is_correct" => true],
                            ["choice_text" => "salée", "is_correct" => false],
                            ["choice_text" => "cassée", "is_correct" => false],
                            ["choice_text" => "épaisse", "is_correct" => false],
                        ],
                        "explanation" => "Dans ce contexte, « claire » peut qualifier une conversation ou une explication facile à comprendre."
                    ],
                    [
                        "question" => "Quel choix convient pour décrire un café dont le goût est très agréable ?",
                        "choices" => [
                            ["choice_text" => "délicieux", "is_correct" => true],
                            ["choice_text" => "rapide", "is_correct" => false],
                            ["choice_text" => "étroit", "is_correct" => false],
                            ["choice_text" => "silencieux", "is_correct" => false],
                        ],
                        "explanation" => "« Délicieux » sert notamment à exprimer qu'un aliment ou une boisson a un goût très agréable."
                    ],
                    [
                        "question" => "Une valise qui pèse très peu est :",
                        "choices" => [
                            ["choice_text" => "légère", "is_correct" => true],
                            ["choice_text" => "forte", "is_correct" => false],
                            ["choice_text" => "brillante", "is_correct" => false],
                            ["choice_text" => "humide", "is_correct" => false],
                        ],
                        "explanation" => "« Légère » signifie qu'un objet ne pèse pas beaucoup. L'adjectif s'accorde avec « valise », féminin singulier."
                    ],
                    [
                        "question" => "Quel adjectif convient dans « un ordinateur ___ » si l'appareil fonctionne sans faire beaucoup de bruit ?",
                        "choices" => [
                            ["choice_text" => "silencieux", "is_correct" => true],
                            ["choice_text" => "sucré", "is_correct" => false],
                            ["choice_text" => "épuisé", "is_correct" => false],
                            ["choice_text" => "salé", "is_correct" => false],
                        ],
                        "explanation" => "Un appareil qui produit peu de bruit peut être qualifié de « silencieux »."
                    ],
                    [
                        "question" => "Quelle description est la plus précise pour un chemin couvert de boue après une forte pluie ?",
                        "choices" => [
                            ["choice_text" => "Un chemin boueux", "is_correct" => true],
                            ["choice_text" => "Un chemin sucré", "is_correct" => false],
                            ["choice_text" => "Un chemin musical", "is_correct" => false],
                            ["choice_text" => "Un chemin poli", "is_correct" => false],
                        ],
                        "explanation" => "Après une forte pluie, un chemin peut devenir boueux, c'est-à-dire couvert de boue et difficile à parcourir."
                    ],
                    [
                        "question" => "Une personne qui aide volontiers les autres est souvent décrite comme :",
                        "choices" => [
                            ["choice_text" => "généreuse", "is_correct" => true],
                            ["choice_text" => "fermée", "is_correct" => false],
                            ["choice_text" => "étroite", "is_correct" => false],
                            ["choice_text" => "fragile", "is_correct" => false],
                        ],
                        "explanation" => "« Généreuse » peut décrire une personne qui donne de son temps, de son aide ou de ses ressources avec facilité."
                    ],
                    [
                        "question" => "Quel adjectif convient le mieux pour une explication facile à comprendre ?",
                        "choices" => [
                            ["choice_text" => "claire", "is_correct" => true],
                            ["choice_text" => "lourde", "is_correct" => false],
                            ["choice_text" => "froide", "is_correct" => false],
                            ["choice_text" => "cassée", "is_correct" => false],
                        ],
                        "explanation" => "Une explication « claire » est formulée de manière compréhensible et sans ambiguïté inutile."
                    ],
                ],
            ],
            [
                "title" => "Réviser les accords et les pièges courants",
                "description" => "Corrigez des erreurs fréquentes liées au genre, au pluriel et à l'accord des adjectifs dans des phrases proches de celles produites par des débutants.",
                "duration" => 30,
                "passing_score" => 65,
                "questions" => [
                    [
                        "question" => "Un étudiant écrit : « une petit voiture ». Quelle correction est correcte ?",
                        "choices" => [
                            ["choice_text" => "une petite voiture", "is_correct" => true],
                            ["choice_text" => "un petit voiture", "is_correct" => false],
                            ["choice_text" => "une petits voiture", "is_correct" => false],
                            ["choice_text" => "une petite voitures", "is_correct" => false],
                        ],
                        "explanation" => "« Voiture » est féminin singulier. Le déterminant est « une » et l'adjectif doit être « petite »."
                    ],
                    [
                        "question" => "Quelle phrase est correctement écrite ?",
                        "choices" => [
                            ["choice_text" => "Les maisons sont grandes.", "is_correct" => true],
                            ["choice_text" => "Les maisons sont grand.", "is_correct" => false],
                            ["choice_text" => "Les maison sont grandes.", "is_correct" => false],
                            ["choice_text" => "La maisons est grande.", "is_correct" => false],
                        ],
                        "explanation" => "« Maisons » est féminin pluriel, donc l'adjectif prend la forme « grandes ». Le déterminant « les » et le verbe « sont » sont également au pluriel."
                    ],
                    [
                        "question" => "Quel choix corrige « un chaise confortable » ?",
                        "choices" => [
                            ["choice_text" => "une chaise confortable", "is_correct" => true],
                            ["choice_text" => "un chaise confortables", "is_correct" => false],
                            ["choice_text" => "une chaise confortables", "is_correct" => false],
                            ["choice_text" => "une chaises confortable", "is_correct" => false],
                        ],
                        "explanation" => "« Chaise » est féminin singulier. On dit donc « une chaise ». L'adjectif « confortable » reste au singulier."
                    ],
                    [
                        "question" => "Quelle phrase contient une erreur d'accord ?",
                        "choices" => [
                            ["choice_text" => "Mon frère est heureuse.", "is_correct" => true],
                            ["choice_text" => "Ma sœur est heureuse.", "is_correct" => false],
                            ["choice_text" => "Mon frère est heureux.", "is_correct" => false],
                            ["choice_text" => "Mes sœurs sont heureuses.", "is_correct" => false],
                        ],
                        "explanation" => "« Frère » est masculin singulier, donc l'adjectif doit être « heureux », pas « heureuse »."
                    ],
                    [
                        "question" => "Quelle phrase respecte le pluriel de « cheval » ?",
                        "choices" => [
                            ["choice_text" => "Les chevaux sont rapides.", "is_correct" => true],
                            ["choice_text" => "Les chevals sont rapides.", "is_correct" => false],
                            ["choice_text" => "Les chevaux est rapide.", "is_correct" => false],
                            ["choice_text" => "Le chevaux sont rapides.", "is_correct" => false],
                        ],
                        "explanation" => "Le pluriel de « cheval » est « chevaux ». Le groupe est pluriel, d'où « les » et « sont »."
                    ],
                    [
                        "question" => "Un apprenant écrit : « des fleur rouge ». Quelle correction convient ?",
                        "choices" => [
                            ["choice_text" => "des fleurs rouges", "is_correct" => true],
                            ["choice_text" => "des fleur rouge", "is_correct" => false],
                            ["choice_text" => "des fleurs rouge", "is_correct" => false],
                            ["choice_text" => "de fleur rouges", "is_correct" => false],
                        ],
                        "explanation" => "« Fleurs » est féminin pluriel et « rouges » doit s'accorder avec lui. Le déterminant pluriel est « des »."
                    ],
                    [
                        "question" => "Quel groupe est correct ?",
                        "choices" => [
                            ["choice_text" => "un vieux bâtiment", "is_correct" => true],
                            ["choice_text" => "une vieux bâtiment", "is_correct" => false],
                            ["choice_text" => "un vieille bâtiment", "is_correct" => false],
                            ["choice_text" => "un vieux bâtiments", "is_correct" => false],
                        ],
                        "explanation" => "« Bâtiment » est masculin singulier et « vieux » est la forme masculine correcte de l'adjectif « vieux »."
                    ],
                    [
                        "question" => "Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Ces petites fenêtres sont ouvertes.", "is_correct" => true],
                            ["choice_text" => "Ces petit fenêtres sont ouvertes.", "is_correct" => false],
                            ["choice_text" => "Cette petites fenêtre sont ouvertes.", "is_correct" => false],
                            ["choice_text" => "Ces petites fenêtre est ouverte.", "is_correct" => false],
                        ],
                        "explanation" => "« Fenêtres » est féminin pluriel : « ces petites fenêtres ». Le verbe « sont » correspond également au sujet pluriel."
                    ],
                    [
                        "question" => "Quel mot complète correctement « une idée ___ » ?",
                        "choices" => [
                            ["choice_text" => "intéressante", "is_correct" => true],
                            ["choice_text" => "intéressant", "is_correct" => false],
                            ["choice_text" => "intéressants", "is_correct" => false],
                            ["choice_text" => "intéressantes", "is_correct" => false],
                        ],
                        "explanation" => "« Idée » est féminin singulier. On choisit donc « intéressante »."
                    ],
                    [
                        "question" => "Quelle phrase est correcte avec plusieurs « journal » ?",
                        "choices" => [
                            ["choice_text" => "J'ai lu plusieurs journaux.", "is_correct" => true],
                            ["choice_text" => "J'ai lu plusieurs journals.", "is_correct" => false],
                            ["choice_text" => "J'ai lu plusieurs journal.", "is_correct" => false],
                            ["choice_text" => "J'ai lu plusieurs journales.", "is_correct" => false],
                        ],
                        "explanation" => "Le pluriel de « journal » est « journaux ». Le déterminant « plusieurs » demande également un nom au pluriel."
                    ],
                    [
                        "question" => "Une étudiante écrit « une travail difficile ». Quelle correction est correcte ?",
                        "choices" => [
                            ["choice_text" => "un travail difficile", "is_correct" => true],
                            ["choice_text" => "une travaille difficile", "is_correct" => false],
                            ["choice_text" => "un travail difficiles", "is_correct" => false],
                            ["choice_text" => "des travail difficile", "is_correct" => false],
                        ],
                        "explanation" => "« Travail » est masculin singulier. On dit « un travail difficile »."
                    ],
                    [
                        "question" => "Quel groupe est correctement accordé ?",
                        "choices" => [
                            ["choice_text" => "de nouvelles chaussures", "is_correct" => true],
                            ["choice_text" => "de nouveau chaussures", "is_correct" => false],
                            ["choice_text" => "de nouvelles chaussure", "is_correct" => false],
                            ["choice_text" => "des nouvelle chaussures", "is_correct" => false],
                        ],
                        "explanation" => "« Chaussures » est féminin pluriel. L'adjectif « nouveau » devient donc « nouvelles »."
                    ],
                ],
            ],
            [
                "title" => "Défi final : noms et adjectifs en situation",
                "description" => "Mobilisez les règles essentielles sur le genre, le nombre et les adjectifs dans des phrases de la vie quotidienne et des études.",
                "duration" => 30,
                "passing_score" => 65,
                "questions" => [
                    [
                        "question" => "Vous décrivez un nouvel ordinateur qui fonctionne très bien. Quelle phrase convient ?",
                        "choices" => [
                            ["choice_text" => "C'est un ordinateur performant.", "is_correct" => true],
                            ["choice_text" => "C'est une ordinateur performante.", "is_correct" => false],
                            ["choice_text" => "C'est un ordinateurs performant.", "is_correct" => false],
                            ["choice_text" => "C'est une ordinateur performant.", "is_correct" => false],
                        ],
                        "explanation" => "« Ordinateur » est masculin singulier. Le groupe correct est donc « un ordinateur performant »."
                    ],
                    [
                        "question" => "Une étudiante parle de deux valises. Elle dit : « J'ai deux valises ___ ». Quel adjectif convient pour indiquer qu'elles ne pèsent pas beaucoup ?",
                        "choices" => [
                            ["choice_text" => "légères", "is_correct" => true],
                            ["choice_text" => "légère", "is_correct" => false],
                            ["choice_text" => "légers", "is_correct" => false],
                            ["choice_text" => "léger", "is_correct" => false],
                        ],
                        "explanation" => "« Valises » est féminin pluriel, donc « léger » devient « légères »."
                    ],
                    [
                        "question" => "Quelle phrase convient pour parler de plusieurs cours intéressants ?",
                        "choices" => [
                            ["choice_text" => "Ce sont des cours intéressants.", "is_correct" => true],
                            ["choice_text" => "Ce sont des cours intéressante.", "is_correct" => false],
                            ["choice_text" => "C'est des cours intéressant.", "is_correct" => false],
                            ["choice_text" => "Ce sont un cours intéressants.", "is_correct" => false],
                        ],
                        "explanation" => "« Cours » est ici au pluriel et masculin. L'adjectif devient donc « intéressants »."
                    ],
                    [
                        "question" => "Quel groupe est correct pour décrire une petite salle ?",
                        "choices" => [
                            ["choice_text" => "une petite salle lumineuse", "is_correct" => true],
                            ["choice_text" => "un petit salle lumineux", "is_correct" => false],
                            ["choice_text" => "une petit salle lumineux", "is_correct" => false],
                            ["choice_text" => "une petites salle lumineuse", "is_correct" => false],
                        ],
                        "explanation" => "« Salle » est féminin singulier. Les deux adjectifs doivent donc être au féminin singulier : « petite » et « lumineuse »."
                    ],
                    [
                        "question" => "Vous voyez plusieurs photos anciennes. Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Ces vieilles photos sont intéressantes.", "is_correct" => true],
                            ["choice_text" => "Ces vieux photos sont intéressante.", "is_correct" => false],
                            ["choice_text" => "Cette vieilles photos sont intéressantes.", "is_correct" => false],
                            ["choice_text" => "Ces vieille photo est intéressantes.", "is_correct" => false],
                        ],
                        "explanation" => "« Photos » est féminin pluriel. On emploie donc « vieilles » et « intéressantes », avec « ces » pour le pluriel."
                    ],
                    [
                        "question" => "Quelle phrase est correcte avec « personne » ?",
                        "choices" => [
                            ["choice_text" => "Cette personne est très gentille.", "is_correct" => true],
                            ["choice_text" => "Cet personne est très gentil.", "is_correct" => false],
                            ["choice_text" => "Cette personne est très gentil.", "is_correct" => false],
                            ["choice_text" => "Ce personne est très gentille.", "is_correct" => false],
                        ],
                        "explanation" => "« Personne » est féminin singulier. On dit donc « cette personne » et l'adjectif prend la forme féminine « gentille »."
                    ],
                    [
                        "question" => "Un étudiant écrit : « des nouveau livres ». Quelle correction convient ?",
                        "choices" => [
                            ["choice_text" => "des nouveaux livres", "is_correct" => true],
                            ["choice_text" => "des nouvelles livres", "is_correct" => false],
                            ["choice_text" => "des nouveau livre", "is_correct" => false],
                            ["choice_text" => "de nouveau livres", "is_correct" => false],
                        ],
                        "explanation" => "« Livres » est masculin pluriel. L'adjectif « nouveau » devient donc « nouveaux »."
                    ],
                    [
                        "question" => "Vous voulez parler d'une route très longue. Quelle formulation est correcte ?",
                        "choices" => [
                            ["choice_text" => "une longue route", "is_correct" => true],
                            ["choice_text" => "un longue route", "is_correct" => false],
                            ["choice_text" => "une long route", "is_correct" => false],
                            ["choice_text" => "une longues route", "is_correct" => false],
                        ],
                        "explanation" => "« Route » est féminin singulier. L'adjectif « long » prend la forme féminine « longue »."
                    ],
                    [
                        "question" => "Quel choix complète correctement : « Les étudiants sont ___ après l'examen. »",
                        "choices" => [
                            ["choice_text" => "fatigués", "is_correct" => true],
                            ["choice_text" => "fatigué", "is_correct" => false],
                            ["choice_text" => "fatiguée", "is_correct" => false],
                            ["choice_text" => "fatiguées", "is_correct" => false],
                        ],
                        "explanation" => "« Étudiants » est masculin pluriel, donc « fatigués » est la forme correcte de l'adjectif."
                    ],
                    [
                        "question" => "Quel nom est correctement accompagné de son adjectif ?",
                        "choices" => [
                            ["choice_text" => "une solution simple", "is_correct" => true],
                            ["choice_text" => "un solution simple", "is_correct" => false],
                            ["choice_text" => "une solution simples", "is_correct" => false],
                            ["choice_text" => "un solution simples", "is_correct" => false],
                        ],
                        "explanation" => "« Solution » est féminin singulier. « Simple » ne change pas de forme au féminin singulier, donc « une solution simple » est correct."
                    ],
                    [
                        "question" => "Quelle phrase est correcte au pluriel ?",
                        "choices" => [
                            ["choice_text" => "Les petits chiens blancs jouent dehors.", "is_correct" => true],
                            ["choice_text" => "Les petit chiens blancs jouent dehors.", "is_correct" => false],
                            ["choice_text" => "Les petits chien blanc jouent dehors.", "is_correct" => false],
                            ["choice_text" => "Le petits chiens blanche jouent dehors.", "is_correct" => false],
                        ],
                        "explanation" => "« Chiens » est masculin pluriel. Les deux adjectifs doivent donc être au masculin pluriel : « petits » et « blancs »."
                    ],
                    [
                        "question" => "Une personne parle de plusieurs fleurs qui ont une couleur jaune. Quelle phrase convient ?",
                        "choices" => [
                            ["choice_text" => "Les fleurs jaunes sont belles.", "is_correct" => true],
                            ["choice_text" => "Les fleurs jaune sont belles.", "is_correct" => false],
                            ["choice_text" => "Les fleur jaunes sont belle.", "is_correct" => false],
                            ["choice_text" => "La fleurs jaunes est belle.", "is_correct" => false],
                        ],
                        "explanation" => "« Fleurs » est féminin pluriel. L'adjectif de couleur « jaune » prend donc la marque du pluriel : « jaunes »."
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