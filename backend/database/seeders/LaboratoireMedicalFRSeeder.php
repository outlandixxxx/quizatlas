<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use RuntimeException;

/**
 * FR practice quiz for Concours Santé, with 50 questions.
 * Uses the existing subject with slug laboratoire-medical-fr.
 */
class LaboratoireMedicalFRSeeder extends Seeder
{
    public function run(): void
    {
        $subjectSlug = 'laboratoire-medical-fr';
        $quizSlug = 'laboratoire-medical-qcm-01-fr';
        $title = 'Laboratoire médical — QCM 01 (50 questions)';
        $description = 'QCM de préparation aux concours de la santé au Maroc.';

        // a is the zero-based index of the single correct choice.
        $questions = [
            [
                'q' => 'Quel anticoagulant est utilisé pour une NFS ?',
                'c' => [
                    'Citrate de sodium',
                    'Héparine',
                    'Fluorure de sodium',
                    'EDTA',
                ],
                'a' => 3,
                'e' => 'L\'EDTA préserve les éléments figurés pour la numération sanguine.',
            ],
            [
                'q' => 'Quel tube est habituellement utilisé pour les tests de coagulation ?',
                'c' => [
                    'Tube fluorure',
                    'Tube au citrate de sodium',
                    'Tube EDTA',
                    'Tube sec',
                ],
                'a' => 1,
                'e' => 'Le citrate lie temporairement le calcium et permet les tests de coagulation.',
            ],
            [
                'q' => 'Quel est le rapport sang/citrate requis pour les tests de coagulation courants ?',
                'c' => [
                    '1:9',
                    '9:1',
                    '1:1',
                    '4:1',
                ],
                'a' => 1,
                'e' => 'Un remplissage correct respecte neuf volumes de sang pour un volume de citrate.',
            ],
            [
                'q' => 'Quel prélèvement privilégier pour une glycémie avec délai d\'analyse prolongé ?',
                'c' => [
                    'Tube de citrate seul',
                    'Tube sans identification',
                    'Tube avec inhibiteur de glycolyse adapté',
                    'Tube EDTA seul',
                ],
                'a' => 2,
                'e' => 'La glycolyse après prélèvement peut abaisser artificiellement le glucose.',
            ],
            [
                'q' => 'Quelle erreur préanalytique peut augmenter artificiellement le potassium ?',
                'c' => [
                    'Centrifugation correcte',
                    'Hémolyse du prélèvement',
                    'Transport rapide',
                    'Identification correcte',
                ],
                'a' => 1,
                'e' => 'La lyse des cellules libère du potassium dans le sérum ou plasma.',
            ],
            [
                'q' => 'Quel examen explore principalement la voie extrinsèque de coagulation ?',
                'c' => [
                    'Temps de prothrombine (TP)',
                    'NFS',
                    'TCA',
                    'VS',
                ],
                'a' => 0,
                'e' => 'Le TP explore surtout la voie extrinsèque et la voie commune.',
            ],
            [
                'q' => 'Quel examen explore principalement la voie intrinsèque de coagulation ?',
                'c' => [
                    'CRP',
                    'TCA',
                    'Glycémie',
                    'TP seul',
                ],
                'a' => 1,
                'e' => 'Le TCA explore la voie intrinsèque et la voie commune.',
            ],
            [
                'q' => 'Quel paramètre mesure directement l\'hémoglobine dans une NFS ?',
                'c' => [
                    'Hématocrite',
                    'TCMH',
                    'Concentration en hémoglobine (Hb)',
                    'VGM',
                ],
                'a' => 2,
                'e' => 'La valeur Hb correspond à la concentration d\'hémoglobine sanguine.',
            ],
            [
                'q' => 'Que signifie un VGM diminué ?',
                'c' => [
                    'Leucocytose',
                    'Macrocytose',
                    'Thrombocytose',
                    'Microcytose',
                ],
                'a' => 3,
                'e' => 'Le VGM renseigne sur le volume moyen des globules rouges.',
            ],
            [
                'q' => 'Quel élément est compté lors de la numération plaquettaire ?',
                'c' => [
                    'Réticulocytes uniquement',
                    'Érythrocytes uniquement',
                    'Plaquettes sanguines',
                    'Neutrophiles uniquement',
                ],
                'a' => 2,
                'e' => 'La numération plaquettaire quantifie les thrombocytes.',
            ],
            [
                'q' => 'Quelle coloration est couramment utilisée pour un frottis sanguin ?',
                'c' => [
                    'Ziehl-Neelsen',
                    'Bleu de méthylène seul',
                    'May-Grünwald-Giemsa',
                    'Gram',
                ],
                'a' => 2,
                'e' => 'La coloration MGG permet l\'étude morphologique des cellules sanguines.',
            ],
            [
                'q' => 'Quelle cellule sanguine est principalement impliquée dans la défense antibactérienne aiguë ?',
                'c' => [
                    'Réticulocyte',
                    'Plaquette',
                    'Polynucléaire neutrophile',
                    'Érythrocyte',
                ],
                'a' => 2,
                'e' => 'Les neutrophiles jouent un rôle majeur dans l\'immunité innée antibactérienne.',
            ],
            [
                'q' => 'Quel test est utilisé pour la détermination du groupe ABO ?',
                'c' => [
                    'Dosage d\'urée',
                    'Agglutination avec antisérums anti-A et anti-B',
                    'Électrophorèse des protéines',
                    'Dosage de CRP',
                ],
                'a' => 1,
                'e' => 'Les antigènes A et B sont recherchés par réaction d\'agglutination.',
            ],
            [
                'q' => 'Quel antigène détermine principalement le statut RhD ?',
                'c' => [
                    'Antigène A',
                    'Antigène D',
                    'Antigène B',
                    'Antigène HBs',
                ],
                'a' => 1,
                'e' => 'La présence de l\'antigène D définit le phénotype RhD positif.',
            ],
            [
                'q' => 'Quelle vérification est indispensable avant une transfusion ?',
                'c' => [
                    'Concordance identité patient et produit sanguin',
                    'Couleur du bouchon seule',
                    'Heure du repas',
                    'Poids du tube vide',
                ],
                'a' => 0,
                'e' => 'L\'identitovigilance évite les incompatibilités transfusionnelles.',
            ],
            [
                'q' => 'Quel milieu est classiquement utilisé pour l\'isolement de bactéries entériques Gram négatif ?',
                'c' => [
                    'Gélose MacConkey',
                    'Milieu de Löwenstein-Jensen',
                    'Gélose au sang seule',
                    'Gélose Sabouraud',
                ],
                'a' => 0,
                'e' => 'MacConkey est sélectif pour de nombreux bacilles Gram négatif et différentiel pour le lactose.',
            ],
            [
                'q' => 'Quelle couleur prennent habituellement les bactéries Gram positives après coloration de Gram ?',
                'c' => [
                    'Violet',
                    'Jaune',
                    'Vert',
                    'Rose',
                ],
                'a' => 0,
                'e' => 'Les Gram positives retiennent le complexe cristal violet-iode.',
            ],
            [
                'q' => 'Quelle couleur prennent habituellement les bactéries Gram négatives après coloration de Gram ?',
                'c' => [
                    'Violet foncé',
                    'Noir',
                    'Rose ou rouge',
                    'Bleu intense',
                ],
                'a' => 2,
                'e' => 'Les Gram négatives prennent la contre-coloration.',
            ],
            [
                'q' => 'Quel test différencie fréquemment les staphylocoques des streptocoques ?',
                'c' => [
                    'Indole seul',
                    'Catalase',
                    'Uréase seule',
                    'Oxydase seule',
                ],
                'a' => 1,
                'e' => 'Les staphylocoques sont généralement catalase positifs et les streptocoques négatifs.',
            ],
            [
                'q' => 'Quel test est classiquement positif chez Staphylococcus aureus ?',
                'c' => [
                    'Bile-esculine',
                    'Oxydase',
                    'Indole',
                    'Coagulase',
                ],
                'a' => 3,
                'e' => 'S. aureus est habituellement coagulase positif.',
            ],
            [
                'q' => 'Quel milieu est adapté à la culture des champignons en mycologie ?',
                'c' => [
                    'Chapman seul',
                    'Gélose Sabouraud',
                    'MacConkey',
                    'Citrate de Simmons',
                ],
                'a' => 1,
                'e' => 'Sabouraud favorise la culture de nombreux champignons.',
            ],
            [
                'q' => 'Quel examen direct est classique devant une suspicion de tuberculose pulmonaire ?',
                'c' => [
                    'Bandelette urinaire',
                    'Goutte épaisse',
                    'Frottis sanguin MGG',
                    'Recherche de bacilles acido-alcoolo-résistants dans les crachats',
                ],
                'a' => 3,
                'e' => 'La microscopie des BAAR peut orienter le diagnostic, sans exclure la tuberculose si négative.',
            ],
            [
                'q' => 'Quel test moléculaire peut détecter rapidement Mycobacterium tuberculosis et une résistance à la rifampicine ?',
                'c' => [
                    'Test de Widal',
                    'ASLO',
                    'Xpert MTB/RIF',
                    'Test de grossesse',
                ],
                'a' => 2,
                'e' => 'Xpert MTB/RIF recherche l\'ADN du complexe tuberculosis et des mutations liées à la rifampicine.',
            ],
            [
                'q' => 'Quelle technique est utilisée pour étudier la sensibilité d\'une bactérie aux antibiotiques ?',
                'c' => [
                    'Groupage ABO',
                    'NFS',
                    'Glycémie',
                    'Antibiogramme',
                ],
                'a' => 3,
                'e' => 'L\'antibiogramme guide le choix des antibiotiques selon des référentiels validés.',
            ],
            [
                'q' => 'Quelle mesure évite le mieux la contamination d\'une hémoculture au prélèvement ?',
                'c' => [
                    'Toucher le site après antisepsie',
                    'Antisepsie rigoureuse du site de ponction',
                    'Laisser le bouchon ouvert',
                    'Secouer fortement le flacon',
                ],
                'a' => 1,
                'e' => 'L\'antisepsie cutanée et une technique aseptique limitent les contaminants.',
            ],
            [
                'q' => 'Quel parasite est recherché sur une goutte épaisse en contexte de paludisme ?',
                'c' => [
                    'Plasmodium',
                    'Giardia',
                    'Enterobius',
                    'Taenia',
                ],
                'a' => 0,
                'e' => 'La goutte épaisse augmente la sensibilité de détection des parasites du paludisme.',
            ],
            [
                'q' => 'Quel prélèvement est habituellement analysé pour une coproculture ?',
                'c' => [
                    'Urines',
                    'Selles',
                    'Liquide céphalorachidien',
                    'Salive',
                ],
                'a' => 1,
                'e' => 'La coproculture recherche des bactéries entéropathogènes dans les selles.',
            ],
            [
                'q' => 'Quel prélèvement est requis pour un ECBU ?',
                'c' => [
                    'Écouvillon pharyngé',
                    'Sérum',
                    'Urines recueillies selon une procédure propre',
                    'Selles',
                ],
                'a' => 2,
                'e' => 'Un recueil correct réduit la contamination et améliore l\'interprétation.',
            ],
            [
                'q' => 'Quel résultat sur bandelette urinaire évoque la présence de bactéries réductrices de nitrates ?',
                'c' => [
                    'Glucose positif seul',
                    'Bilirubine positive seule',
                    'Nitrites positifs',
                    'Cétones positives seules',
                ],
                'a' => 2,
                'e' => 'Les nitrites positifs orientent vers certaines bactéries, sans suffire au diagnostic.',
            ],
            [
                'q' => 'Quel marqueur est couramment utilisé pour estimer la fonction rénale ?',
                'c' => [
                    'Amylase',
                    'Bilirubine directe',
                    'Créatinine sanguine',
                    'Troponine',
                ],
                'a' => 2,
                'e' => 'La créatinine sert au calcul du débit de filtration glomérulaire estimé.',
            ],
            [
                'q' => 'Quel biomarqueur est privilégié pour détecter une lésion myocardique aiguë ?',
                'c' => [
                    'Phosphatase alcaline',
                    'Troponine cardiaque',
                    'Albumine',
                    'Urée',
                ],
                'a' => 1,
                'e' => 'La troponine cardiaque est sensible aux lésions myocardiques, à interpréter avec le contexte clinique.',
            ],
            [
                'q' => 'Quel paramètre biologique reflète la glycémie moyenne sur environ deux à trois mois ?',
                'c' => [
                    'Créatinine',
                    'Glycémie capillaire instantanée',
                    'CRP',
                    'HbA1c',
                ],
                'a' => 3,
                'e' => 'L\'HbA1c reflète l\'exposition des hématies au glucose au cours de leur durée de vie.',
            ],
            [
                'q' => 'Quel paramètre augmente souvent en cas de cholestase ?',
                'c' => [
                    'Hémoglobine',
                    'Phosphatases alcalines',
                    'Plaquettes',
                    'Sodium',
                ],
                'a' => 1,
                'e' => 'Les phosphatases alcalines peuvent augmenter en cas de cholestase, à confronter à la GGT.',
            ],
            [
                'q' => 'Quelle hormone est mesurée par les tests biologiques de grossesse ?',
                'c' => [
                    'TSH',
                    'Cortisol',
                    'hCG',
                    'Insuline',
                ],
                'a' => 2,
                'e' => 'Les tests de grossesse détectent la gonadotrophine chorionique humaine.',
            ],
            [
                'q' => 'Quel marqueur sérologique indique généralement une infection actuelle par le virus de l\'hépatite B ?',
                'c' => [
                    'Anti-HAV IgG',
                    'Anti-HBs isolé',
                    'Anti-HCV négatif',
                    'HBsAg',
                ],
                'a' => 3,
                'e' => 'La présence d\'HBsAg témoigne d\'une infection par le VHB, aiguë ou chronique.',
            ],
            [
                'q' => 'Quel examen est couramment utilisé pour le dépistage initial du VIH en laboratoire ?',
                'c' => [
                    'Test de coagulation',
                    'Dosage de créatinine',
                    'Test immunologique combiné antigène/anticorps',
                    'Hémoculture',
                ],
                'a' => 2,
                'e' => 'Les tests combinés VIH de quatrième génération recherchent anticorps et antigène p24.',
            ],
            [
                'q' => 'Quel est le rôle principal d\'un témoin positif en analyse ?',
                'c' => [
                    'Vérifier que la méthode détecte une cible présente',
                    'Calculer l\'âge du patient',
                    'Stériliser l\'appareil',
                    'Remplacer l\'échantillon patient',
                ],
                'a' => 0,
                'e' => 'Le témoin positif permet de vérifier le bon fonctionnement de la détection.',
            ],
            [
                'q' => 'Quel est le rôle principal d\'un témoin négatif ?',
                'c' => [
                    'Étalonner une balance',
                    'Détecter une contamination ou un signal non spécifique',
                    'Augmenter artificiellement la sensibilité',
                    'Mesurer l\'hématocrite',
                ],
                'a' => 1,
                'e' => 'Un signal positif dans un témoin négatif évoque une anomalie de la procédure.',
            ],
            [
                'q' => 'Quelle est la fonction d\'un calibrateur analytique ?',
                'c' => [
                    'Éliminer les déchets',
                    'Établir la relation entre signal et concentration',
                    'Désinfecter la paillasse',
                    'Identifier le patient',
                ],
                'a' => 1,
                'e' => 'Le calibrateur sert à régler la mesure quantitative de l\'analyseur.',
            ],
            [
                'q' => 'Que faut-il faire si un contrôle qualité interne est hors limites acceptables ?',
                'c' => [
                    'Ignorer le contrôle',
                    'Suspendre la validation et rechercher la cause',
                    'Modifier les résultats patients',
                    'Publier les résultats immédiatement',
                ],
                'a' => 1,
                'e' => 'Un contrôle non conforme nécessite investigation avant validation des résultats.',
            ],
            [
                'q' => 'Quel document décrit les étapes validées d\'une analyse ?',
                'c' => [
                    'Facture du fournisseur',
                    'Procédure opératoire standard (SOP)',
                    'Agenda personnel',
                    'Carte d\'accès',
                ],
                'a' => 1,
                'e' => 'La SOP standardise l\'exécution et la traçabilité d\'une méthode.',
            ],
            [
                'q' => 'À quel moment identifier le patient pour un prélèvement ?',
                'c' => [
                    'Avant le prélèvement, au contact du patient',
                    'Après l\'analyse seulement',
                    'Après l\'archivage',
                    'À la fin du service',
                ],
                'a' => 0,
                'e' => 'L\'identification préalable limite les erreurs d\'attribution des échantillons.',
            ],
            [
                'q' => 'Quel est le risque majeur d\'une aiguille usagée abandonnée ?',
                'c' => [
                    'Erreur de centrifugation',
                    'Baisse de température',
                    'Panne informatique',
                    'Accident d\'exposition au sang',
                ],
                'a' => 3,
                'e' => 'Les objets piquants exposent aux blessures et aux agents transmissibles par le sang.',
            ],
            [
                'q' => 'Où jeter immédiatement une aiguille utilisée ?',
                'c' => [
                    'Collecteur rigide pour objets piquants',
                    'Sac de papier',
                    'Évier',
                    'Poubelle ordinaire',
                ],
                'a' => 0,
                'e' => 'Les collecteurs adaptés préviennent les blessures par piqûre.',
            ],
            [
                'q' => 'Quel équipement protège principalement les mains lors de la manipulation de prélèvements à risque ?',
                'c' => [
                    'Masque seul',
                    'Lunettes seules',
                    'Blouse seule',
                    'Gants adaptés',
                ],
                'a' => 3,
                'e' => 'Les gants réduisent l\'exposition cutanée sans remplacer l\'hygiène des mains.',
            ],
            [
                'q' => 'Quelle technique est utilisée pour amplifier une séquence d\'ADN ?',
                'c' => [
                    'Coloration de Gram',
                    'Centrifugation',
                    'Hématocrite',
                    'PCR',
                ],
                'a' => 3,
                'e' => 'La PCR amplifie une séquence nucléique cible.',
            ],
            [
                'q' => 'Quelle technique sépare des molécules selon leur migration dans un champ électrique ?',
                'c' => [
                    'Autoclavage',
                    'Agglutination directe',
                    'Électrophorèse',
                    'Filtration stérilisante',
                ],
                'a' => 2,
                'e' => 'L\'électrophorèse sépare des molécules chargées selon leurs propriétés de migration.',
            ],
            [
                'q' => 'Quelle température est habituellement utilisée pour une stérilisation à la vapeur sous pression, selon un cycle validé ?',
                'c' => [
                    '4 °C',
                    '60 °C',
                    '37 °C',
                    '121 °C',
                ],
                'a' => 3,
                'e' => 'Un cycle validé d\'autoclave peut utiliser 121 °C avec un temps adapté à la charge.',
            ],
            [
                'q' => 'Quel est le principal objectif de la centrifugation d\'un tube sanguin ?',
                'c' => [
                    'Multiplier les cellules',
                    'Mesurer directement le pH',
                    'Stériliser le sang',
                    'Séparer les constituants selon leur densité',
                ],
                'a' => 3,
                'e' => 'La force centrifuge permet la séparation de fractions sanguines.',
            ],
            [
                'q' => 'Quel principe impose de traiter tous les prélèvements biologiques comme potentiellement infectieux ?',
                'c' => [
                    'Suppression de l\'étiquetage',
                    'Absence de gants partout',
                    'Précautions standard',
                    'Isolement aérien systématique',
                ],
                'a' => 2,
                'e' => 'Les précautions standard s\'appliquent indépendamment du statut infectieux connu.',
            ],
        ];

        $quizHasSlug = Schema::hasColumn((new Quiz())->getTable(), 'slug');

        DB::transaction(function () use ($subjectSlug, $quizSlug, $title, $description, $questions, $quizHasSlug): void {
            $subjects = Subject::where('slug', $subjectSlug)->lockForUpdate()->get();

            if ($subjects->count() !== 1) {
                throw new RuntimeException("Expected exactly one subject with slug {$subjectSlug}. Set it in the existing admin before running this seeder.");
            }

            $subject = $subjects->first();
            $quiz = Quiz::firstOrNew(['subject_id' => $subject->id, 'title' => $title]);
            $quiz->fill([
                'description' => $description,
                'duration' => 60,
                'passing_score' => 60,
                'total_marks' => count($questions),
                'difficulty' => 'Beginner',
            ]);

            if ($quizHasSlug) {
                $quiz->slug = $quizSlug;
            }

            if (! $quiz->exists) {
                $quiz->owner_id = null;
                $quiz->is_active = true;
            }

            $quiz->save();

            foreach ($questions as $qIndex => $item) {
                $question = Question::updateOrCreate(
                    ['quiz_id' => $quiz->id, 'order' => $qIndex + 1],
                    [
                        'question' => $item['q'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $item['e'],
                    ]
                );

                foreach ($item['c'] as $cIndex => $text) {
                    Choice::updateOrCreate(
                        ['question_id' => $question->id, 'order' => $cIndex + 1],
                        ['choice_text' => $text, 'is_correct' => $cIndex === $item['a']]
                    );
                }

                $question->choices()->where('order', '>', count($item['c']))->delete();
            }
        });
    }
}
