<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ZoologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'zoology')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 25, 'passing_score' => 65],
            6 => ['duration' => 25, 'passing_score' => 65],
            7 => ['duration' => 20, 'passing_score' => 60],
        ];

        $quizzes = [
            [
                'title' => 'Introduction à la zoologie',
                'description' => 'Découvrez les grandes caractéristiques du règne animal et les critères simples utilisés pour distinguer les principaux groupes.',
                'questions' => [
                    [
                        'question' => 'Quel caractère est commun à la plupart des animaux ?',
                        'choices' => [
                            ['choice_text' => 'Ils fabriquent tous leur matière organique par photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'Ils possèdent tous une paroi cellulaire en cellulose', 'is_correct' => false],
                            ['choice_text' => 'Ils sont des organismes eucaryotes et hétérotrophes', 'is_correct' => true],
                            ['choice_text' => 'Ils sont tous unicellulaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Les animaux sont des eucaryotes qui obtiennent leur matière organique en consommant d’autres organismes ou leurs produits.',
                    ],
                    [
                        'question' => 'Pourquoi dit-on que les animaux sont généralement pluricellulaires ?',
                        'choices' => [
                            ['choice_text' => 'Une seule cellule assure toutes leurs fonctions', 'is_correct' => false],
                            ['choice_text' => 'Ils possèdent toujours plusieurs noyaux dans chaque cellule', 'is_correct' => false],
                            ['choice_text' => 'Ils n’ont aucune cellule reproductrice', 'is_correct' => false],
                            ['choice_text' => 'Leur organisme est constitué de nombreuses cellules spécialisées', 'is_correct' => true],
                        ],
                        'explanation' => 'La plupart des animaux sont constitués de nombreuses cellules qui peuvent se spécialiser dans des fonctions différentes.',
                    ],
                    [
                        'question' => 'Un animal se nourrit d’une autre matière organique déjà produite. Quel mode de nutrition cela illustre-t-il ?',
                        'choices' => [
                            ['choice_text' => 'La photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'La nutrition hétérotrophe', 'is_correct' => true],
                            ['choice_text' => 'La nutrition minérale seule', 'is_correct' => false],
                            ['choice_text' => 'La chimiosynthèse', 'is_correct' => false],
                        ],
                        'explanation' => 'Un organisme hétérotrophe doit obtenir sa matière organique à partir de sources organiques extérieures.',
                    ],
                    [
                        'question' => 'Quel niveau d’organisation vient immédiatement après la cellule chez un animal possédant des tissus ?',
                        'choices' => [
                            ['choice_text' => 'Le tissu', 'is_correct' => true],
                            ['choice_text' => 'L’organe', 'is_correct' => false],
                            ['choice_text' => 'L’organisme', 'is_correct' => false],
                            ['choice_text' => 'La population', 'is_correct' => false],
                        ],
                        'explanation' => 'Des cellules de structure et de fonction proches peuvent s’associer pour former un tissu.',
                    ],
                    [
                        'question' => 'Une méduse et un ver de terre n’ont pas la même forme corporelle. Quel critère peut aider à les comparer ?',
                        'choices' => [
                            ['choice_text' => 'Uniquement leur couleur', 'is_correct' => false],
                            ['choice_text' => 'L’organisation du corps et la symétrie', 'is_correct' => true],
                            ['choice_text' => 'Leur taille adulte', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de repas par jour', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie, les tissus et l’organisation du corps sont des critères utiles pour comparer les grands groupes animaux.',
                    ],
                    [
                        'question' => 'Un élève affirme : « Tous les animaux ont des os. » Quelle observation réfute directement cette idée ?',
                        'choices' => [
                            ['choice_text' => 'Les insectes et les mollusques n’ont pas de squelette osseux interne', 'is_correct' => true],
                            ['choice_text' => 'Les mammifères ont des os', 'is_correct' => false],
                            ['choice_text' => 'Les oiseaux ont des plumes', 'is_correct' => false],
                            ['choice_text' => 'Les poissons vivent dans l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreux animaux sont invertébrés et ne possèdent pas de squelette osseux interne.',
                    ],
                    [
                        'question' => 'Pourquoi la spécialisation cellulaire est-elle utile chez un animal complexe ?',
                        'choices' => [
                            ['choice_text' => 'Elle empêche toute communication entre cellules', 'is_correct' => false],
                            ['choice_text' => 'Elle rend la reproduction impossible', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les besoins énergétiques', 'is_correct' => false],
                            ['choice_text' => 'Elle permet à différentes cellules d’assurer des fonctions complémentaires', 'is_correct' => true],
                        ],
                        'explanation' => 'La spécialisation permet une division du travail biologique, par exemple entre cellules musculaires, nerveuses et épithéliales.',
                    ],
                    [
                        'question' => 'Un organisme possède des cellules, des tissus, des organes et plusieurs systèmes qui fonctionnent ensemble. Que décrit-on ?',
                        'choices' => [
                            ['choice_text' => 'Une seule cellule', 'is_correct' => false],
                            ['choice_text' => 'Une molécule', 'is_correct' => false],
                            ['choice_text' => 'Un organisme animal complexe', 'is_correct' => true],
                            ['choice_text' => 'Une population', 'is_correct' => false],
                        ],
                        'explanation' => 'Chez un animal complexe, plusieurs niveaux d’organisation s’emboîtent et coopèrent pour assurer la vie.',
                    ],
                    [
                        'question' => 'Pourquoi la classification animale ne repose-t-elle pas seulement sur l’apparence ?',
                        'choices' => [
                            ['choice_text' => 'Des structures similaires peuvent avoir des fonctions ou des origines différentes', 'is_correct' => true],
                            ['choice_text' => 'L’apparence n’existe jamais chez les animaux', 'is_correct' => false],
                            ['choice_text' => 'Tous les animaux ont exactement la même anatomie', 'is_correct' => false],
                            ['choice_text' => 'La taille suffit toujours à identifier un groupe', 'is_correct' => false],
                        ],
                        'explanation' => 'La classification s’appuie sur de nombreux caractères anatomiques, embryologiques et évolutifs plutôt que sur une simple ressemblance visuelle.',
                    ],
                    [
                        'question' => 'Un zoologiste observe un animal inconnu et commence par noter son nombre de cellules, son organisation et sa symétrie. Pourquoi ?',
                        'choices' => [
                            ['choice_text' => 'Ils permettent de connaître immédiatement son âge', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent toutes les autres observations', 'is_correct' => false],
                            ['choice_text' => 'Ces caractères fournissent des indices pour déterminer son groupe', 'is_correct' => true],
                            ['choice_text' => 'Ils indiquent directement son régime alimentaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les caractères généraux du plan d’organisation donnent des indices utiles pour orienter l’identification.',
                    ],
                ],
            ],
            [
                'title' => 'Invertébrés : grands groupes',
                'description' => 'Identifiez les principales caractéristiques des cnidaires, annélides, mollusques et arthropodes à partir de situations simples.',
                'questions' => [
                    [
                        'question' => 'Quel animal appartient aux arthropodes ?',
                        'choices' => [
                            ['choice_text' => 'La méduse', 'is_correct' => false],
                            ['choice_text' => 'Le lombric', 'is_correct' => false],
                            ['choice_text' => 'L’escargot', 'is_correct' => false],
                            ['choice_text' => 'Le crabe', 'is_correct' => true],
                        ],
                        'explanation' => 'Le crabe est un arthropode : il possède notamment des appendices articulés et un exosquelette.',
                    ],
                    [
                        'question' => 'Quelle caractéristique distingue les arthropodes ?',
                        'choices' => [
                            ['choice_text' => 'Une colonne vertébrale', 'is_correct' => false],
                            ['choice_text' => 'Des appendices articulés et un exosquelette', 'is_correct' => true],
                            ['choice_text' => 'Des cellules sans noyau', 'is_correct' => false],
                            ['choice_text' => 'Des feuilles chlorophylliennes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les arthropodes possèdent un squelette externe et des appendices articulés, avec des variations selon les groupes.',
                    ],
                    [
                        'question' => 'L’escargot appartient à quel grand groupe ?',
                        'choices' => [
                            ['choice_text' => 'Les cnidaires', 'is_correct' => false],
                            ['choice_text' => 'Les annélides', 'is_correct' => false],
                            ['choice_text' => 'Les mollusques', 'is_correct' => true],
                            ['choice_text' => 'Les échinodermes', 'is_correct' => false],
                        ],
                        'explanation' => 'L’escargot est un mollusque, comme les moules et les calmars.',
                    ],
                    [
                        'question' => 'Le lombric présente un corps formé de nombreux anneaux. À quel groupe appartient-il ?',
                        'choices' => [
                            ['choice_text' => 'Les annélides', 'is_correct' => true],
                            ['choice_text' => 'Les arthropodes', 'is_correct' => false],
                            ['choice_text' => 'Les cnidaires', 'is_correct' => false],
                            ['choice_text' => 'Les vertébrés', 'is_correct' => false],
                        ],
                        'explanation' => 'Les annélides ont un corps segmenté en anneaux, caractéristique visible chez le lombric.',
                    ],
                    [
                        'question' => 'Une méduse possède des cellules spécialisées capables d’injecter des substances lors du contact. À quel groupe appartient-elle ?',
                        'choices' => [
                            ['choice_text' => 'Les mollusques', 'is_correct' => false],
                            ['choice_text' => 'Les annélides', 'is_correct' => false],
                            ['choice_text' => 'Les cnidaires', 'is_correct' => true],
                            ['choice_text' => 'Les insectes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cnidaires possèdent des cellules urticantes caractéristiques, utiles notamment pour capturer leurs proies.',
                    ],
                    [
                        'question' => 'Pourquoi l’exosquelette d’un arthropode doit-il être renouvelé pendant sa croissance ?',
                        'choices' => [
                            ['choice_text' => 'Il contient des os vivants', 'is_correct' => false],
                            ['choice_text' => 'Il ne s’agrandit pas continuellement avec le corps', 'is_correct' => true],
                            ['choice_text' => 'Il est fabriqué par les plantes', 'is_correct' => false],
                            ['choice_text' => 'Il empêche toute croissance', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exosquelette rigide limite l’augmentation de taille. L’animal doit donc effectuer des mues pour grandir.',
                    ],
                    [
                        'question' => 'Une moule et un escargot ont des formes très différentes. Quel caractère les rapproche ?',
                        'choices' => [
                            ['choice_text' => 'Ils appartiennent tous deux aux mollusques', 'is_correct' => true],
                            ['choice_text' => 'Ils possèdent tous deux des plumes', 'is_correct' => false],
                            ['choice_text' => 'Ils ont tous deux une colonne vertébrale', 'is_correct' => false],
                            ['choice_text' => 'Ils sont tous deux des insectes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mollusques comprennent des formes très variées, dont les bivalves comme la moule et les gastéropodes comme l’escargot.',
                    ],
                    [
                        'question' => 'Une araignée possède huit pattes articulées. Quelle conclusion simple est justifiée ?',
                        'choices' => [
                            ['choice_text' => 'Elle est un mollusque', 'is_correct' => false],
                            ['choice_text' => 'Elle est un vertébré', 'is_correct' => false],
                            ['choice_text' => 'Elle est un cnidaire', 'is_correct' => false],
                            ['choice_text' => 'Elle appartient aux arthropodes et plus précisément aux arachnides', 'is_correct' => true],
                        ],
                        'explanation' => 'Les araignées sont des arthropodes et font partie des arachnides, caractérisés notamment par leurs huit pattes chez l’adulte.',
                    ],
                    [
                        'question' => 'Quel groupe possède typiquement un corps mou, avec parfois une coquille externe ?',
                        'choices' => [
                            ['choice_text' => 'Les mollusques', 'is_correct' => true],
                            ['choice_text' => 'Les annélides uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les cnidaires uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les oiseaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le corps mou est caractéristique des mollusques ; certaines espèces possèdent une coquille, comme de nombreux gastéropodes et bivalves.',
                    ],
                    [
                        'question' => 'Un élève confond une chenille et un ver de terre parce qu’ils ont tous deux un corps allongé. Quel critère est plus fiable ?',
                        'choices' => [
                            ['choice_text' => 'Leur longueur', 'is_correct' => false],
                            ['choice_text' => 'Leur couleur', 'is_correct' => false],
                            ['choice_text' => 'Leur lieu de découverte', 'is_correct' => false],
                            ['choice_text' => 'La présence d’appendices articulés et d’un exosquelette chez la chenille', 'is_correct' => true],
                        ],
                        'explanation' => 'La chenille est une larve d’insecte, donc un arthropode avec des caractères anatomiques précis ; le lombric est un annélide.',
                    ],
                ],
            ],
            [
                'title' => 'Arthropodes et insectes',
                'description' => 'Apprenez à reconnaître les insectes et à comprendre leur développement, leurs adaptations et leur rôle dans les écosystèmes.',
                'questions' => [
                    [
                        'question' => 'Combien de paires de pattes possède normalement un insecte adulte ?',
                        'choices' => [
                            ['choice_text' => 'Deux paires', 'is_correct' => false],
                            ['choice_text' => 'Quatre paires', 'is_correct' => false],
                            ['choice_text' => 'Cinq paires', 'is_correct' => false],
                            ['choice_text' => 'Trois paires', 'is_correct' => true],
                        ],
                        'explanation' => 'Le plan corporel des insectes comprend normalement trois paires de pattes, soit six pattes.',
                    ],
                    [
                        'question' => 'Quel ensemble décrit correctement le corps typique d’un insecte ?',
                        'choices' => [
                            ['choice_text' => 'Tête, cou et queue', 'is_correct' => false],
                            ['choice_text' => 'Crâne, thorax et bassin', 'is_correct' => false],
                            ['choice_text' => 'Tête, thorax et abdomen', 'is_correct' => true],
                            ['choice_text' => 'Tête, coquille et pied', 'is_correct' => false],
                        ],
                        'explanation' => 'Le corps des insectes est organisé en trois grandes régions : tête, thorax et abdomen.',
                    ],
                    [
                        'question' => 'À quoi servent principalement les antennes d’un insecte ?',
                        'choices' => [
                            ['choice_text' => 'À pomper le sang', 'is_correct' => false],
                            ['choice_text' => 'À recevoir des informations sensorielles', 'is_correct' => true],
                            ['choice_text' => 'À produire des os', 'is_correct' => false],
                            ['choice_text' => 'À remplacer les ailes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les antennes portent des récepteurs qui participent notamment à l’odorat, au toucher et à la détection de l’environnement.',
                    ],
                    [
                        'question' => 'Une chenille devient une chrysalide puis un papillon adulte. Quel type de développement observe-t-on ?',
                        'choices' => [
                            ['choice_text' => 'Une métamorphose complète', 'is_correct' => true],
                            ['choice_text' => 'Une croissance sans changement de forme', 'is_correct' => false],
                            ['choice_text' => 'Une reproduction asexuée', 'is_correct' => false],
                            ['choice_text' => 'Une régénération', 'is_correct' => false],
                        ],
                        'explanation' => 'Chez les insectes à métamorphose complète, les stades œuf, larve, nymphe et adulte sont nettement différenciés.',
                    ],
                    [
                        'question' => 'Pourquoi la mue est-elle nécessaire chez les insectes ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils perdent leur ADN', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils doivent changer d’espèce', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils cessent de respirer', 'is_correct' => false],
                            ['choice_text' => 'Parce que leur exosquelette rigide limite la croissance', 'is_correct' => true],
                        ],
                        'explanation' => 'La mue permet à l’insecte de remplacer temporairement son exosquelette devenu trop petit.',
                    ],
                    [
                        'question' => 'Une abeille visite des fleurs puis revient à la colonie avec du pollen. Quel rôle écologique joue-t-elle notamment ?',
                        'choices' => [
                            ['choice_text' => 'Elle transforme les fleurs en racines', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche toute reproduction végétale', 'is_correct' => false],
                            ['choice_text' => 'Elle participe à la pollinisation', 'is_correct' => true],
                            ['choice_text' => 'Elle dissout les graines', 'is_correct' => false],
                        ],
                        'explanation' => 'En transportant du pollen entre fleurs, les abeilles peuvent favoriser la reproduction de nombreuses plantes.',
                    ],
                    [
                        'question' => 'Un insecte possède six pattes et deux paires d’ailes. Que peut-on déduire avec certitude ?',
                        'choices' => [
                            ['choice_text' => 'Il est forcément une abeille', 'is_correct' => false],
                            ['choice_text' => 'Il présente des caractères typiques d’un insecte adulte', 'is_correct' => true],
                            ['choice_text' => 'Il est forcément nuisible', 'is_correct' => false],
                            ['choice_text' => 'Il vit obligatoirement dans l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Six pattes et un corps organisé en tête, thorax et abdomen sont des caractères fondamentaux des insectes ; les deux paires d’ailes sont fréquentes mais pas universelles.',
                    ],
                    [
                        'question' => 'Pourquoi certains insectes sont-ils importants pour l’agriculture ?',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent polliniser des cultures ou participer au contrôle biologique', 'is_correct' => true],
                            ['choice_text' => 'Ils produisent tous des engrais', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent l’irrigation', 'is_correct' => false],
                            ['choice_text' => 'Ils empêchent toute maladie des plantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Certains insectes assurent la pollinisation, tandis que d’autres prédateurs peuvent limiter des populations de ravageurs.',
                    ],
                    [
                        'question' => 'Un insecte nuisible devient résistant à un insecticide après plusieurs générations. Quelle idée évolutive cela illustre-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Tous les individus changent volontairement', 'is_correct' => false],
                            ['choice_text' => 'L’insecticide crée toujours exactement la même mutation chez chacun', 'is_correct' => false],
                            ['choice_text' => 'La sélection peut favoriser les individus possédant une résistance', 'is_correct' => true],
                            ['choice_text' => 'La résistance disparaît automatiquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Si une variation héréditaire confère une résistance, les individus résistants peuvent davantage survivre et se reproduire sous pression de l’insecticide.',
                    ],
                    [
                        'question' => 'Pourquoi la diversité des insectes est-elle importante dans un écosystème ?',
                        'choices' => [
                            ['choice_text' => 'Ils occupent de nombreux rôles, comme pollinisateurs, herbivores, prédateurs et décomposeurs', 'is_correct' => true],
                            ['choice_text' => 'Ils ont tous le même régime alimentaire', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent les végétaux', 'is_correct' => false],
                            ['choice_text' => 'Ils ne participent jamais aux chaînes alimentaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Les insectes interviennent à de nombreux niveaux des réseaux trophiques et dans plusieurs processus écologiques.',
                    ],
                ],
            ],
            [
                'title' => 'Vertébrés : poissons, amphibiens et reptiles',
                'description' => 'Comparez les grands caractères des poissons, amphibiens et reptiles et reliez leurs adaptations à leur milieu.',
                'questions' => [
                    [
                        'question' => 'Quel caractère permet de classer un animal parmi les vertébrés ?',
                        'choices' => [
                            ['choice_text' => 'La présence de six pattes', 'is_correct' => false],
                            ['choice_text' => 'La présence d’une coquille chez tous les individus', 'is_correct' => false],
                            ['choice_text' => 'La présence d’une colonne vertébrale', 'is_correct' => true],
                            ['choice_text' => 'La photosynthèse', 'is_correct' => false],
                        ],
                        'explanation' => 'Les vertébrés possèdent une colonne vertébrale intégrée à leur squelette interne.',
                    ],
                    [
                        'question' => 'Quel organe permet principalement aux poissons de respirer dans l’eau ?',
                        'choices' => [
                            ['choice_text' => 'Les poumons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les trachées', 'is_correct' => false],
                            ['choice_text' => 'Les stomates', 'is_correct' => false],
                            ['choice_text' => 'Les branchies', 'is_correct' => true],
                        ],
                        'explanation' => 'Les branchies permettent des échanges gazeux avec l’eau, notamment l’absorption de dioxygène dissous.',
                    ],
                    [
                        'question' => 'Pourquoi les poissons sont-ils bien adaptés à la vie aquatique ?',
                        'choices' => [
                            ['choice_text' => 'Leur corps et leurs organes respiratoires sont adaptés aux contraintes de l’eau', 'is_correct' => true],
                            ['choice_text' => 'Ils respirent tous directement l’air par des poumons', 'is_correct' => false],
                            ['choice_text' => 'Ils possèdent des ailes', 'is_correct' => false],
                            ['choice_text' => 'Ils n’ont jamais besoin de dioxygène', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme du corps, les nageoires et les branchies participent à leur adaptation au milieu aquatique.',
                    ],
                    [
                        'question' => 'La grenouille adulte peut respirer par ses poumons mais aussi à travers sa peau. Quel groupe représente-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Les poissons', 'is_correct' => false],
                            ['choice_text' => 'Les amphibiens', 'is_correct' => true],
                            ['choice_text' => 'Les reptiles', 'is_correct' => false],
                            ['choice_text' => 'Les mammifères', 'is_correct' => false],
                        ],
                        'explanation' => 'Les amphibiens, comme les grenouilles, ont généralement une peau impliquée dans les échanges gazeux et une vie liée à l’eau à certains stades.',
                    ],
                    [
                        'question' => 'Pourquoi les amphibiens sont-ils souvent sensibles aux changements de qualité de l’eau ?',
                        'choices' => [
                            ['choice_text' => 'Une partie de leur cycle de vie dépend de milieux humides et leur peau participe aux échanges', 'is_correct' => true],
                            ['choice_text' => 'Ils possèdent tous des branchies toute leur vie', 'is_correct' => false],
                            ['choice_text' => 'Ils n’ont aucun besoin d’eau', 'is_correct' => false],
                            ['choice_text' => 'Ils sont des plantes aquatiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La peau perméable et les stades aquatiques rendent de nombreux amphibiens sensibles aux conditions de leur environnement.',
                    ],
                    [
                        'question' => 'Quel caractère distingue généralement les reptiles des amphibiens ?',
                        'choices' => [
                            ['choice_text' => 'La présence de branchies chez l’adulte', 'is_correct' => false],
                            ['choice_text' => 'Une peau plus kératinisée et moins dépendante de l’eau pour limiter les pertes hydriques', 'is_correct' => true],
                            ['choice_text' => 'La présence de six pattes', 'is_correct' => false],
                            ['choice_text' => 'La photosynthèse', 'is_correct' => false],
                        ],
                        'explanation' => 'La peau des reptiles est davantage kératinisée et contribue à réduire les pertes d’eau, ce qui facilite la vie terrestre.',
                    ],
                    [
                        'question' => 'Un lézard se chauffe au soleil avant d’être actif. Que cela montre-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Il produit de la chaleur par photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'Il est un amphibien', 'is_correct' => false],
                            ['choice_text' => 'Sa température corporelle dépend en partie de sources de chaleur externes', 'is_correct' => true],
                            ['choice_text' => 'Il n’a pas de métabolisme', 'is_correct' => false],
                        ],
                        'explanation' => 'Les reptiles sont ectothermes : leur température corporelle est fortement influencée par la température du milieu.',
                    ],
                    [
                        'question' => 'Un poisson est placé hors de l’eau et ses mouvements respiratoires deviennent inefficaces. Pourquoi ?',
                        'choices' => [
                            ['choice_text' => 'Ses poumons se ferment', 'is_correct' => false],
                            ['choice_text' => 'Ses ailes cessent de battre', 'is_correct' => false],
                            ['choice_text' => 'Sa peau produit du sel', 'is_correct' => false],
                            ['choice_text' => 'Ses branchies ne fonctionnent plus normalement dans ces conditions', 'is_correct' => true],
                        ],
                        'explanation' => 'Les branchies sont adaptées aux échanges avec l’eau. Hors de l’eau, leur structure et leur fonctionnement peuvent être gravement perturbés.',
                    ],
                    [
                        'question' => 'Un jeune animal possède une peau humide et vit dans l’eau avant de développer des caractères terrestres. Quel groupe est plausible ?',
                        'choices' => [
                            ['choice_text' => 'Les oiseaux', 'is_correct' => false],
                            ['choice_text' => 'Les insectes', 'is_correct' => false],
                            ['choice_text' => 'Les amphibiens', 'is_correct' => true],
                            ['choice_text' => 'Les mammifères', 'is_correct' => false],
                        ],
                        'explanation' => 'Le développement de nombreux amphibiens comporte un stade larvaire aquatique avant la vie terrestre de l’adulte.',
                    ],
                    [
                        'question' => 'Pourquoi les œufs de nombreux reptiles sont-ils mieux adaptés à la vie terrestre que ceux de nombreux amphibiens ?',
                        'choices' => [
                            ['choice_text' => 'Ils n’ont aucun embryon', 'is_correct' => false],
                            ['choice_text' => 'Ils se développent uniquement dans les branchies', 'is_correct' => false],
                            ['choice_text' => 'Ils sont toujours fabriqués sous l’eau', 'is_correct' => false],
                            ['choice_text' => 'Ils possèdent des enveloppes et membranes qui limitent la perte d’eau', 'is_correct' => true],
                        ],
                        'explanation' => 'Les œufs amniotiques de nombreux reptiles protègent l’embryon et limitent sa dépendance à un milieu aquatique.',
                    ],
                ],
            ],
            [
                'title' => 'Oiseaux et mammifères',
                'description' => 'Comparez oiseaux et mammifères à partir de leurs caractères corporels, de leur respiration, de leur reproduction et de leurs adaptations.',
                'questions' => [
                    [
                        'question' => 'Quel caractère est typique des oiseaux ?',
                        'choices' => [
                            ['choice_text' => 'La présence de poils', 'is_correct' => false],
                            ['choice_text' => 'La présence de plumes', 'is_correct' => true],
                            ['choice_text' => 'Six pattes', 'is_correct' => false],
                            ['choice_text' => 'Des branchies chez l’adulte', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plumes sont des structures caractéristiques des oiseaux et jouent notamment un rôle dans l’isolation et, chez beaucoup d’espèces, le vol.',
                    ],
                    [
                        'question' => 'Quel caractère est commun à tous les mammifères ?',
                        'choices' => [
                            ['choice_text' => 'Ils pondent tous des œufs', 'is_correct' => false],
                            ['choice_text' => 'Ils possèdent tous des ailes', 'is_correct' => false],
                            ['choice_text' => 'Ils vivent tous dans l’eau', 'is_correct' => false],
                            ['choice_text' => 'Les femelles produisent du lait pour nourrir leurs jeunes', 'is_correct' => true],
                        ],
                        'explanation' => 'La production de lait par les glandes mammaires est un caractère fondamental des mammifères.',
                    ],
                    [
                        'question' => 'Pourquoi les oiseaux possèdent-ils des os et des structures corporelles favorisant le vol chez de nombreuses espèces ?',
                        'choices' => [
                            ['choice_text' => 'Elles leur permettent de respirer sous l’eau', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent les muscles', 'is_correct' => false],
                            ['choice_text' => 'Ces adaptations réduisent ou optimisent la masse et l’efficacité du corps en vol', 'is_correct' => true],
                            ['choice_text' => 'Elles empêchent toute dépense d’énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Chez les oiseaux volants, plusieurs adaptations anatomiques contribuent à rendre le vol efficace, notamment une structure corporelle légère et des muscles spécialisés.',
                    ],
                    [
                        'question' => 'Quel organe respiratoire utilise principalement un mammifère terrestre comme le chien ?',
                        'choices' => [
                            ['choice_text' => 'Les poumons', 'is_correct' => true],
                            ['choice_text' => 'Les branchies', 'is_correct' => false],
                            ['choice_text' => 'Les trachées d’insecte', 'is_correct' => false],
                            ['choice_text' => 'Les stomates', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mammifères terrestres respirent principalement grâce à des poumons où ont lieu les échanges gazeux.',
                    ],
                    [
                        'question' => 'Un dauphin remonte régulièrement à la surface malgré sa vie aquatique. Pourquoi ?',
                        'choices' => [
                            ['choice_text' => 'Il possède des branchies mais les recharge à l’air', 'is_correct' => false],
                            ['choice_text' => 'Il doit respirer de l’air avec ses poumons', 'is_correct' => true],
                            ['choice_text' => 'Il réalise la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'Il doit boire de l’oxygène liquide', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dauphin est un mammifère marin. Il respire l’air atmosphérique et doit donc revenir à la surface.',
                    ],
                    [
                        'question' => 'Un oiseau nourrit ses petits avec de la nourriture régurgitée. Que montre cette observation ?',
                        'choices' => [
                            ['choice_text' => 'Les oiseaux sont tous herbivores', 'is_correct' => false],
                            ['choice_text' => 'Les œufs sont des plantes', 'is_correct' => false],
                            ['choice_text' => 'Les petits sont autonomes dès l’éclosion', 'is_correct' => false],
                            ['choice_text' => 'Les adultes peuvent assurer des soins parentaux aux jeunes', 'is_correct' => true],
                        ],
                        'explanation' => 'De nombreuses espèces d’oiseaux investissent dans les soins parentaux, notamment l’alimentation et la protection des jeunes.',
                    ],
                    [
                        'question' => 'Pourquoi la température corporelle relativement stable des mammifères est-elle avantageuse ?',
                        'choices' => [
                            ['choice_text' => 'Elle supprime tous les besoins alimentaires', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de vivre sans oxygène', 'is_correct' => false],
                            ['choice_text' => 'Elle permet une activité physiologique relativement indépendante des variations de température extérieure', 'is_correct' => true],
                            ['choice_text' => 'Elle rend les maladies impossibles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mammifères sont endothermes et utilisent leur métabolisme pour maintenir une température interne relativement stable.',
                    ],
                    [
                        'question' => 'Une chauve-souris vole mais allaite ses petits. Comment la classer ?',
                        'choices' => [
                            ['choice_text' => 'Parmi les mammifères', 'is_correct' => true],
                            ['choice_text' => 'Parmi les oiseaux', 'is_correct' => false],
                            ['choice_text' => 'Parmi les insectes', 'is_correct' => false],
                            ['choice_text' => 'Parmi les reptiles', 'is_correct' => false],
                        ],
                        'explanation' => 'La capacité de voler ne suffit pas à classer un animal. L’allaitement et les autres caractères placent la chauve-souris parmi les mammifères.',
                    ],
                    [
                        'question' => 'Un manchot possède des plumes mais ne vole pas. Quelle conclusion est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Il devient un mammifère', 'is_correct' => false],
                            ['choice_text' => 'Il reste un oiseau malgré son adaptation à la nage', 'is_correct' => true],
                            ['choice_text' => 'Il est forcément un poisson', 'is_correct' => false],
                            ['choice_text' => 'Les plumes prouvent qu’il vole', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plumes sont un caractère des oiseaux, mais toutes les espèces d’oiseaux ne sont pas capables de voler.',
                    ],
                    [
                        'question' => 'Quel avantage les poils apportent-ils à de nombreux mammifères ?',
                        'choices' => [
                            ['choice_text' => 'Ils servent de branchies', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent les dents', 'is_correct' => false],
                            ['choice_text' => 'Ils contribuent notamment à l’isolation thermique', 'is_correct' => true],
                            ['choice_text' => 'Ils produisent la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Les poils forment une couche isolante et peuvent aussi avoir des fonctions sensorielles ou protectrices.',
                    ],
                ],
            ],
            [
                'title' => 'Fonctions vitales et comportement animal',
                'description' => 'Interprétez des situations simples concernant la respiration, la digestion, la circulation, les sens et les comportements animaux.',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal du système digestif ?',
                        'choices' => [
                            ['choice_text' => 'Transformer les aliments et permettre l’absorption des nutriments', 'is_correct' => true],
                            ['choice_text' => 'Produire les rayons du soleil', 'is_correct' => false],
                            ['choice_text' => 'Fabriquer les os uniquement', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le système respiratoire', 'is_correct' => false],
                        ],
                        'explanation' => 'La digestion transforme les aliments en molécules absorbables, qui peuvent ensuite être utilisées par les cellules.',
                    ],
                    [
                        'question' => 'Pourquoi les animaux ont-ils besoin de dioxygène ?',
                        'choices' => [
                            ['choice_text' => 'Il remplace l’eau dans toutes les cellules', 'is_correct' => false],
                            ['choice_text' => 'Il permet notamment la production d’énergie par la respiration cellulaire', 'is_correct' => true],
                            ['choice_text' => 'Il fabrique directement les protéines', 'is_correct' => false],
                            ['choice_text' => 'Il sert uniquement à refroidir le corps', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dioxygène permet à de nombreuses cellules de produire efficacement de l’énergie à partir de nutriments.',
                    ],
                    [
                        'question' => 'Quel système transporte le dioxygène et les nutriments dans le corps humain ?',
                        'choices' => [
                            ['choice_text' => 'Le système digestif seul', 'is_correct' => false],
                            ['choice_text' => 'Le système nerveux seul', 'is_correct' => false],
                            ['choice_text' => 'Le système osseux', 'is_correct' => false],
                            ['choice_text' => 'Le système circulatoire', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sang circule dans les vaisseaux et distribue notamment le dioxygène et les nutriments aux tissus.',
                    ],
                    [
                        'question' => 'Un animal fuit lorsqu’il entend un bruit soudain. Quel système coordonne rapidement cette réponse ?',
                        'choices' => [
                            ['choice_text' => 'Le système digestif', 'is_correct' => false],
                            ['choice_text' => 'Le système osseux uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le système nerveux', 'is_correct' => true],
                            ['choice_text' => 'Le système reproducteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le système nerveux reçoit les informations sensorielles et coordonne rapidement les réponses comportementales.',
                    ],
                    [
                        'question' => 'Pourquoi les animaux possèdent-ils des organes sensoriels ?',
                        'choices' => [
                            ['choice_text' => 'Pour fabriquer tous leurs nutriments', 'is_correct' => false],
                            ['choice_text' => 'Pour détecter des informations provenant de leur environnement', 'is_correct' => true],
                            ['choice_text' => 'Pour remplacer les muscles', 'is_correct' => false],
                            ['choice_text' => 'Pour produire des graines', 'is_correct' => false],
                        ],
                        'explanation' => 'Les organes sensoriels permettent de détecter la lumière, les sons, les molécules odorantes, les contacts ou d’autres signaux.',
                    ],
                    [
                        'question' => 'Un prédateur repère une proie, s’approche puis attaque. Quelle succession illustre le mieux ce comportement ?',
                        'choices' => [
                            ['choice_text' => 'Digestion → photosynthèse → germination', 'is_correct' => false],
                            ['choice_text' => 'Croissance → floraison → pollinisation', 'is_correct' => false],
                            ['choice_text' => 'Respiration → fabrication d’une graine → mue', 'is_correct' => false],
                            ['choice_text' => 'Détection d’un signal → traitement de l’information → réponse', 'is_correct' => true],
                        ],
                        'explanation' => 'Un comportement implique souvent la réception d’un stimulus, son traitement par le système nerveux puis une réponse.',
                    ],
                    [
                        'question' => 'Pourquoi un animal herbivore possède-t-il un appareil digestif adapté à son alimentation ?',
                        'choices' => [
                            ['choice_text' => 'La nature des aliments influence les transformations nécessaires pour libérer les nutriments', 'is_correct' => true],
                            ['choice_text' => 'Tous les animaux digèrent exactement de la même manière', 'is_correct' => false],
                            ['choice_text' => 'Les végétaux ne contiennent aucune matière organique', 'is_correct' => false],
                            ['choice_text' => 'L’herbivore n’a pas besoin d’énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Les aliments végétaux contiennent notamment des fibres et des molécules qui demandent des adaptations digestives particulières selon l’espèce.',
                    ],
                    [
                        'question' => 'Un animal mange davantage avant une période froide. Quelle interprétation est plausible ?',
                        'choices' => [
                            ['choice_text' => 'Il cesse d’avoir besoin d’oxygène', 'is_correct' => false],
                            ['choice_text' => 'Il transforme sa nourriture en os uniquement', 'is_correct' => false],
                            ['choice_text' => 'Il peut augmenter ses réserves énergétiques avant une période où les dépenses ou la disponibilité alimentaire changent', 'is_correct' => true],
                            ['choice_text' => 'Il devient automatiquement herbivore', 'is_correct' => false],
                        ],
                        'explanation' => 'Certains animaux modifient leur alimentation ou stockent des réserves en fonction des contraintes saisonnières.',
                    ],
                    [
                        'question' => 'Un oiseau ouvre largement son bec lorsqu’il fait très chaud. Chez certaines espèces, quel effet peut cela avoir ?',
                        'choices' => [
                            ['choice_text' => 'Augmenter la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'Favoriser la perte de chaleur par évaporation', 'is_correct' => true],
                            ['choice_text' => 'Produire des œufs instantanément', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la circulation sanguine', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines espèces utilisent le halètement ou l’ouverture du bec pour favoriser des pertes de chaleur par évaporation.',
                    ],
                    [
                        'question' => 'Un groupe de poissons se déplace ensemble face à un prédateur. Quel avantage possible offre ce comportement ?',
                        'choices' => [
                            ['choice_text' => 'La vigilance collective peut augmenter et rendre la capture d’un individu plus difficile', 'is_correct' => true],
                            ['choice_text' => 'Chaque poisson devient plus grand', 'is_correct' => false],
                            ['choice_text' => 'Le groupe n’a plus besoin de respirer', 'is_correct' => false],
                            ['choice_text' => 'Les poissons deviennent des mammifères', 'is_correct' => false],
                        ],
                        'explanation' => 'La vie en groupe peut réduire le risque individuel dans certaines situations grâce à une meilleure détection du danger ou à l’effet de dilution.',
                    ],
                ],
            ],
            [
                'title' => 'Écologie animale et interactions',
                'description' => 'Mettez en relation les animaux avec leur habitat, leur alimentation, leurs interactions et leur place dans les réseaux alimentaires.',
                'questions' => [
                    [
                        'question' => 'Dans une chaîne alimentaire, quel rôle joue généralement un herbivore ?',
                        'choices' => [
                            ['choice_text' => 'Consommateur primaire', 'is_correct' => true],
                            ['choice_text' => 'Producteur', 'is_correct' => false],
                            ['choice_text' => 'Décomposeur obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Consommateur tertiaire uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’herbivore se nourrit directement de producteurs végétaux et occupe donc généralement le niveau de consommateur primaire.',
                    ],
                    [
                        'question' => 'Un renard mange un lapin qui mange de l’herbe. Quelle relation décrit le mieux le renard et le lapin ?',
                        'choices' => [
                            ['choice_text' => 'Mutualisme obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Parasitisme végétal', 'is_correct' => false],
                            ['choice_text' => 'Prédation', 'is_correct' => true],
                            ['choice_text' => 'Pollinisation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le renard capture et consomme le lapin : c’est une interaction de prédation.',
                    ],
                    [
                        'question' => 'Deux espèces utilisent exactement la même ressource limitée. Quelle interaction peut apparaître ?',
                        'choices' => [
                            ['choice_text' => 'Photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'Mue', 'is_correct' => false],
                            ['choice_text' => 'Digestion', 'is_correct' => false],
                            ['choice_text' => 'La compétition', 'is_correct' => true],
                        ],
                        'explanation' => 'Lorsque deux organismes dépendent d’une même ressource limitée, ils peuvent entrer en compétition.',
                    ],
                    [
                        'question' => 'Une abeille et une plante à fleurs peuvent toutes deux bénéficier de leur interaction. Comment la décrire ?',
                        'choices' => [
                            ['choice_text' => 'Prédation', 'is_correct' => false],
                            ['choice_text' => 'Mutualisme', 'is_correct' => true],
                            ['choice_text' => 'Compétition obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Parasitisme', 'is_correct' => false],
                        ],
                        'explanation' => 'L’abeille obtient une ressource alimentaire et la plante peut bénéficier du transport du pollen. Lorsque les deux partenaires tirent bénéfice de l’association, on parle de mutualisme.',
                    ],
                    [
                        'question' => 'Un parasite vit aux dépens d’un hôte. Quelle conséquence est la plus directe pour l’hôte ?',
                        'choices' => [
                            ['choice_text' => 'Il devient forcément plus grand', 'is_correct' => false],
                            ['choice_text' => 'Il gagne toujours de l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Il cesse immédiatement de respirer', 'is_correct' => false],
                            ['choice_text' => 'Il subit un coût lié à l’exploitation par le parasite', 'is_correct' => true],
                        ],
                        'explanation' => 'Le parasite obtient des ressources auprès de l’hôte, ce qui peut réduire les ressources ou l’état physiologique de celui-ci.',
                    ],
                    [
                        'question' => 'Pourquoi la disparition d’un prédateur peut-elle modifier une communauté animale ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut entraîner une augmentation de certaines proies et modifier les relations alimentaires', 'is_correct' => true],
                            ['choice_text' => 'Les producteurs deviennent automatiquement des animaux', 'is_correct' => false],
                            ['choice_text' => 'Toutes les espèces disparaissent immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Les cycles biologiques s’arrêtent toujours', 'is_correct' => false],
                        ],
                        'explanation' => 'La suppression d’un prédateur peut modifier l’abondance des proies et provoquer des effets en cascade dans le réseau trophique.',
                    ],
                    [
                        'question' => 'Un animal nocturne possède de grands yeux. Quelle interprétation est raisonnable ?',
                        'choices' => [
                            ['choice_text' => 'Elle prouve qu’il est carnivore', 'is_correct' => false],
                            ['choice_text' => 'Cette caractéristique peut améliorer la détection de faibles niveaux de lumière', 'is_correct' => true],
                            ['choice_text' => 'Elle empêche toute perception sonore', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace le système nerveux', 'is_correct' => false],
                        ],
                        'explanation' => 'De grands yeux peuvent constituer une adaptation favorisant la capture de lumière dans des conditions peu éclairées.',
                    ],
                    [
                        'question' => 'Un poisson possède une forme fuselée et des nageoires adaptées à la nage. Quel lien peut-on faire ?',
                        'choices' => [
                            ['choice_text' => 'Elle prouve qu’il vit sur terre', 'is_correct' => false],
                            ['choice_text' => 'Elle signifie qu’il n’a pas de squelette', 'is_correct' => false],
                            ['choice_text' => 'Sa morphologie peut réduire les contraintes de déplacement dans l’eau', 'is_correct' => true],
                            ['choice_text' => 'Elle empêche les échanges gazeux', 'is_correct' => false],
                        ],
                        'explanation' => 'Une forme hydrodynamique et des nageoires peuvent faciliter le déplacement et la stabilité dans l’eau.',
                    ],
                    [
                        'question' => 'Dans un réseau alimentaire, un même animal mange des fruits, des insectes et de petits vertébrés. Comment qualifier son régime ?',
                        'choices' => [
                            ['choice_text' => 'Omnivore', 'is_correct' => true],
                            ['choice_text' => 'Strictement herbivore', 'is_correct' => false],
                            ['choice_text' => 'Strictement carnivore', 'is_correct' => false],
                            ['choice_text' => 'Autotrophe', 'is_correct' => false],
                        ],
                        'explanation' => 'Un omnivore consomme des aliments d’origine végétale et animale.',
                    ],
                    [
                        'question' => 'Une sécheresse réduit fortement les insectes disponibles dans un milieu. Quel animal insectivore peut être directement affecté ?',
                        'choices' => [
                            ['choice_text' => 'Une plante qui ne consomme jamais d’animaux', 'is_correct' => false],
                            ['choice_text' => 'Une roche', 'is_correct' => false],
                            ['choice_text' => 'Un organisme qui n’utilise aucune ressource du milieu', 'is_correct' => false],
                            ['choice_text' => 'Un oiseau qui nourrit principalement ses petits avec des insectes', 'is_correct' => true],
                        ],
                        'explanation' => 'La diminution d’une ressource alimentaire peut affecter directement les consommateurs qui en dépendent, puis avoir des effets sur les niveaux trophiques associés.',
                    ],
                ],
            ],
            [
                'title' => 'Animaux marins et adaptations',
                'description' => 'Explorez les adaptations simples des animaux marins à la nage, à la pression, à la salinité et aux différents modes de vie aquatiques.',
                'questions' => [
                    [
                        'question' => 'Quel animal est un mammifère marin ?',
                        'choices' => [
                            ['choice_text' => 'Le thon', 'is_correct' => false],
                            ['choice_text' => 'La méduse', 'is_correct' => false],
                            ['choice_text' => 'Le poulpe', 'is_correct' => false],
                            ['choice_text' => 'Le dauphin', 'is_correct' => true],
                        ],
                        'explanation' => 'Le dauphin est un mammifère : il respire avec des poumons et allaite ses petits.',
                    ],
                    [
                        'question' => 'Quel organe permet principalement au poisson d’échanger des gaz avec l’eau ?',
                        'choices' => [
                            ['choice_text' => 'Les poumons', 'is_correct' => false],
                            ['choice_text' => 'Les branchies', 'is_correct' => true],
                            ['choice_text' => 'Les reins', 'is_correct' => false],
                            ['choice_text' => 'Les nageoires', 'is_correct' => false],
                        ],
                        'explanation' => 'Les branchies offrent une grande surface d’échange avec l’eau et permettent notamment de capter le dioxygène dissous.',
                    ],
                    [
                        'question' => 'Pourquoi la forme fuselée est-elle fréquente chez les animaux qui nagent rapidement ?',
                        'choices' => [
                            ['choice_text' => 'Elle empêche toute dépense d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace les branchies', 'is_correct' => false],
                            ['choice_text' => 'Elle peut réduire la résistance de l’eau lors du déplacement', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours la température du corps', 'is_correct' => false],
                        ],
                        'explanation' => 'Une forme hydrodynamique peut diminuer la traînée et faciliter les déplacements dans l’eau.',
                    ],
                    [
                        'question' => 'Un poulpe utilise ses bras munis de ventouses pour saisir une proie. Quelle fonction est illustrée ?',
                        'choices' => [
                            ['choice_text' => 'La capture et la manipulation de nourriture', 'is_correct' => true],
                            ['choice_text' => 'La production de lait', 'is_correct' => false],
                            ['choice_text' => 'La photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'La respiration par les poumons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bras et ventouses du poulpe participent notamment à la manipulation des objets et à la capture des proies.',
                    ],
                    [
                        'question' => 'Pourquoi les animaux vivant en profondeur doivent-ils supporter une pression importante ?',
                        'choices' => [
                            ['choice_text' => 'La lumière augmente avec la profondeur', 'is_correct' => false],
                            ['choice_text' => 'L’eau disparaît progressivement', 'is_correct' => false],
                            ['choice_text' => 'La salinité devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'La pression de l’eau augmente avec la profondeur', 'is_correct' => true],
                        ],
                        'explanation' => 'Plus on descend dans l’eau, plus le poids de la colonne d’eau au-dessus augmente et donc plus la pression est élevée.',
                    ],
                    [
                        'question' => 'Un animal marin possède une couche de graisse épaisse. Quel avantage peut-elle notamment apporter ?',
                        'choices' => [
                            ['choice_text' => 'Une production de branchies', 'is_correct' => false],
                            ['choice_text' => 'Une photosynthèse plus rapide', 'is_correct' => false],
                            ['choice_text' => 'Une isolation thermique', 'is_correct' => true],
                            ['choice_text' => 'Une absence de besoin alimentaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Une couche de graisse peut limiter les pertes de chaleur, ce qui est utile dans des eaux froides.',
                    ],
                    [
                        'question' => 'Un poisson osseux marin vit dans une eau plus salée que ses liquides corporels. Pourquoi doit-il réguler ses échanges d’eau et de sels ?',
                        'choices' => [
                            ['choice_text' => 'Pour maintenir un équilibre interne compatible avec le fonctionnement de ses cellules', 'is_correct' => true],
                            ['choice_text' => 'Pour produire des nageoires supplémentaires', 'is_correct' => false],
                            ['choice_text' => 'Pour devenir un amphibien', 'is_correct' => false],
                            ['choice_text' => 'Pour arrêter toute respiration', 'is_correct' => false],
                        ],
                        'explanation' => 'Les différences de concentration en sels favorisent les mouvements d’eau et d’ions. L’animal doit donc maintenir son équilibre osmotique.',
                    ],
                    [
                        'question' => 'Une tortue marine remonte à la surface après une longue plongée. Quelle explication convient ?',
                        'choices' => [
                            ['choice_text' => 'Elle possède des branchies qu’elle recharge à l’air', 'is_correct' => false],
                            ['choice_text' => 'Elle doit renouveler l’air de ses poumons', 'is_correct' => true],
                            ['choice_text' => 'Elle réalise la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'Elle doit changer de squelette', 'is_correct' => false],
                        ],
                        'explanation' => 'La tortue marine est un reptile qui respire avec des poumons et doit donc revenir à la surface pour respirer.',
                    ],
                    [
                        'question' => 'Des poissons vivent en banc très serré lorsqu’un prédateur approche. Quel avantage peut être associé à ce comportement ?',
                        'choices' => [
                            ['choice_text' => 'Tous les poissons deviennent invisibles', 'is_correct' => false],
                            ['choice_text' => 'Une meilleure détection collective du danger peut être possible', 'is_correct' => true],
                            ['choice_text' => 'Ils cessent de respirer', 'is_correct' => false],
                            ['choice_text' => 'Leur taille augmente immédiatement', 'is_correct' => false],
                        ],
                        'explanation' => 'La vie en groupe peut améliorer la vigilance et réduire le risque individuel dans certaines situations.',
                    ],
                    [
                        'question' => 'Une étoile de mer et un dauphin vivent tous deux dans la mer. Pourquoi ne faut-il pas les placer dans le même grand groupe zoologique ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils n’ont pas la même couleur', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un seul des deux mange', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les animaux marins appartiennent au même groupe', 'is_correct' => false],
                            ['choice_text' => 'Leur organisation anatomique et leur histoire évolutive sont très différentes', 'is_correct' => true],
                        ],
                        'explanation' => 'Le milieu de vie ne suffit pas à définir un groupe zoologique. L’étoile de mer est un échinoderme, tandis que le dauphin est un mammifère.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex];

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings['duration'],
                    'passing_score' => $settings['passing_score'],
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