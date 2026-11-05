<?php

namespace Database\Seeders;

use Database\Seeders\Support\HealthQcmSeeder;

/**
 * FR practice quiz for Concours Santé, with 50 questions.
 * Uses the existing subject with slug kinesitherapie-reeducation-fr.
 * The source calls for review before publication. New quizzes start inactive.
 */
class KinesitherapieReeducationFRSeeder extends HealthQcmSeeder
{
    public function definition(): array
    {
        $subjectSlug = 'kinesitherapie-reeducation-fr';
        $quizSlug = 'health-competition-kinesitherapie-reeducation-fr-qcm-01';
        $title = 'Kinésithérapie et rééducation — QCM 01';
        $description = 'QCM de préparation aux concours de la santé au Maroc.';

        // a is the zero-based index of the single correct choice.
        $questions = [
            [
                'q' => 'Quel muscle est le principal extenseur du genou ?',
                'c' => [
                    'Biceps brachial',
                    'Ischio-jambiers',
                    'Quadriceps fémoral',
                    'Triceps sural',
                ],
                'a' => 2,
                'e' => 'Le quadriceps assure principalement l\'extension active du genou.',
            ],
            [
                'q' => 'Quel muscle réalise principalement la dorsiflexion de la cheville ?',
                'c' => [
                    'Soléaire',
                    'Gastrocnémien',
                    'Tibial antérieur',
                    'Grand fessier',
                ],
                'a' => 2,
                'e' => 'Le tibial antérieur relève le pied vers la jambe.',
            ],
            [
                'q' => 'Quel nerf est principalement atteint lors d\'un pied tombant périphérique ?',
                'c' => [
                    'Nerf facial',
                    'Nerf fibulaire commun',
                    'Nerf ulnaire',
                    'Nerf médian',
                ],
                'a' => 1,
                'e' => 'Une atteinte fibulaire peut provoquer un déficit des releveurs du pied.',
            ],
            [
                'q' => 'Quelle racine nerveuse est surtout évaluée par le réflexe achilléen ?',
                'c' => [
                    'C5',
                    'L2',
                    'C7',
                    'S1',
                ],
                'a' => 3,
                'e' => 'Le réflexe achilléen explore surtout le segment S1.',
            ],
            [
                'q' => 'Quel réflexe explore surtout les segments L3-L4 ?',
                'c' => [
                    'Réflexe tricipital',
                    'Réflexe achilléen',
                    'Réflexe bicipital',
                    'Réflexe rotulien',
                ],
                'a' => 3,
                'e' => 'Le réflexe patellaire teste principalement L3-L4.',
            ],
            [
                'q' => 'Quelle articulation est de type énarthrose ?',
                'c' => [
                    'Interphalangienne',
                    'Huméro-ulnaire',
                    'Radio-ulnaire proximale',
                    'Articulation coxo-fémorale',
                ],
                'a' => 3,
                'e' => 'La hanche est une articulation sphéroïde multiaxiale.',
            ],
            [
                'q' => 'Quel plan anatomique sépare le corps en parties droite et gauche ?',
                'c' => [
                    'Plan horizontal oblique',
                    'Plan sagittal',
                    'Plan frontal',
                    'Plan transversal',
                ],
                'a' => 1,
                'e' => 'Le plan sagittal sépare droite et gauche.',
            ],
            [
                'q' => 'Dans quel plan s\'effectue principalement l\'abduction de l\'épaule ?',
                'c' => [
                    'Plan médian uniquement',
                    'Plan frontal',
                    'Plan sagittal',
                    'Plan transversal',
                ],
                'a' => 1,
                'e' => 'L\'abduction anatomique s\'observe dans le plan frontal.',
            ],
            [
                'q' => 'Quel outil quantifie une amplitude articulaire ?',
                'c' => [
                    'Stéthoscope',
                    'Goniomètre',
                    'Oxymètre',
                    'Spiromètre',
                ],
                'a' => 1,
                'e' => 'Le goniomètre mesure les angles articulaires.',
            ],
            [
                'q' => 'Quel test évalue principalement la force musculaire manuelle ?',
                'c' => [
                    'Indice de masse corporelle',
                    'Échelle EVA',
                    'Testing musculaire coté de 0 à 5',
                    'Score de Glasgow',
                ],
                'a' => 2,
                'e' => 'La cotation manuelle 0 à 5 décrit la capacité de contraction contre la gravité et résistance.',
            ],
            [
                'q' => 'Quelle cotation musculaire signifie un mouvement complet contre la gravité sans résistance ajoutée ?',
                'c' => [
                    '5/5',
                    '3/5',
                    '0/5',
                    '1/5',
                ],
                'a' => 1,
                'e' => 'La force 3/5 permet l\'amplitude complète contre la gravité.',
            ],
            [
                'q' => 'Quel instrument est utilisé pour mesurer la force de préhension ?',
                'c' => [
                    'Tensiomètre',
                    'Thermomètre',
                    'Goniomètre',
                    'Dynamomètre de main',
                ],
                'a' => 3,
                'e' => 'Le dynamomètre mesure la force de serrage de la main.',
            ],
            [
                'q' => 'Quel test chronométré évalue la mobilité fonctionnelle et le risque de chute ?',
                'c' => [
                    'Score d\'Apgar',
                    'Timed Up and Go',
                    'Test de Romberg seul',
                    'Test de Coombs',
                ],
                'a' => 1,
                'e' => 'Le TUG chronomètre lever, marche, demi-tour et retour assis.',
            ],
            [
                'q' => 'Quel test apprécie l\'équilibre statique debout, pieds joints, yeux fermés ?',
                'c' => [
                    'Test de Lachman',
                    'Test de Phalen',
                    'Test de Romberg',
                    'Test de Thomas',
                ],
                'a' => 2,
                'e' => 'Le Romberg explore l\'équilibre et la contribution proprioceptive.',
            ],
            [
                'q' => 'Quel test clinique est particulièrement utilisé pour rechercher une atteinte du ligament croisé antérieur ?',
                'c' => [
                    'Test de Phalen',
                    'Test de Lachman',
                    'Test de Trendelenburg',
                    'Test de Spurling',
                ],
                'a' => 1,
                'e' => 'Le Lachman évalue la translation antérieure tibiale.',
            ],
            [
                'q' => 'Quel test est utilisé pour explorer une compression du nerf médian au canal carpien ?',
                'c' => [
                    'Test de Phalen',
                    'Test de Thomas',
                    'Test de Thompson',
                    'Test de Lachman',
                ],
                'a' => 0,
                'e' => 'La flexion prolongée des poignets peut reproduire les paresthésies médianes.',
            ],
            [
                'q' => 'Quel test aide à identifier une rupture du tendon d\'Achille ?',
                'c' => [
                    'Test de Thompson',
                    'Test de Neer',
                    'Test de Phalen',
                    'Test de Romberg',
                ],
                'a' => 0,
                'e' => 'L\'absence de flexion plantaire à la compression du mollet évoque une rupture.',
            ],
            [
                'q' => 'Quel signe est typique d\'une atteinte du moyen fessier à l\'appui unipodal ?',
                'c' => [
                    'Élévation des épaules',
                    'Extension du coude',
                    'Chute du bassin controlatéral',
                    'Flexion des doigts',
                ],
                'a' => 2,
                'e' => 'Le signe de Trendelenburg reflète une insuffisance des abducteurs de hanche.',
            ],
            [
                'q' => 'Quel muscle est prioritaire dans la stabilisation latérale du bassin à la marche ?',
                'c' => [
                    'Masséter',
                    'Droit de l\'abdomen',
                    'Biceps brachial',
                    'Moyen fessier',
                ],
                'a' => 3,
                'e' => 'Le moyen fessier contrôle l\'inclinaison pelvienne pendant l\'appui.',
            ],
            [
                'q' => 'Quel est l\'objectif principal d\'une mobilisation passive ?',
                'c' => [
                    'Augmenter directement la force volontaire',
                    'Traiter une infection',
                    'Entretenir la mobilité articulaire',
                    'Mesurer la glycémie',
                ],
                'a' => 2,
                'e' => 'La mobilisation passive entretient les amplitudes sans contraction volontaire requise.',
            ],
            [
                'q' => 'Quel type de contraction produit une force sans changement visible de longueur musculaire ?',
                'c' => [
                    'Isométrique',
                    'Concentrique',
                    'Excentrique',
                    'Balistique',
                ],
                'a' => 0,
                'e' => 'En isométrie, l\'articulation reste globalement immobile.',
            ],
            [
                'q' => 'Quel type de contraction correspond à l\'allongement contrôlé d\'un muscle sous tension ?',
                'c' => [
                    'Réflexe cutané',
                    'Isométrique',
                    'Excentrique',
                    'Concentrique',
                ],
                'a' => 2,
                'e' => 'L\'excentrique freine un mouvement pendant que le muscle s\'allonge.',
            ],
            [
                'q' => 'Quel exercice sollicite la chaîne cinétique fermée du membre inférieur ?',
                'c' => [
                    'Battement de jambe dans le vide',
                    'Extension de genou assis pied libre',
                    'Flexion de genou couché pied libre',
                    'Squat pieds au sol',
                ],
                'a' => 3,
                'e' => 'Le pied fixé au sol caractérise une chaîne fermée.',
            ],
            [
                'q' => 'Quel est le rôle principal du diaphragme dans la respiration ?',
                'c' => [
                    'Muscle de la mastication',
                    'Muscle principal de l\'expiration forcée',
                    'Muscle de l\'extension du genou',
                    'Muscle principal de l\'inspiration',
                ],
                'a' => 3,
                'e' => 'La contraction diaphragmatique augmente le volume thoracique.',
            ],
            [
                'q' => 'Quelle mesure non invasive surveille la saturation périphérique en oxygène ?',
                'c' => [
                    'Oxymétrie de pouls',
                    'Goniométrie',
                    'Dynamométrie',
                    'Électromyographie',
                ],
                'a' => 0,
                'e' => 'L\'oxymètre estime la SpO2 par photopléthysmographie.',
            ],
            [
                'q' => 'Quelle technique aide à mobiliser les sécrétions bronchiques chez un patient coopérant ?',
                'c' => [
                    'Apnée prolongée systématique',
                    'Expiration forcée contrôlée (huff)',
                    'Immobilisation thoracique',
                    'Massage abdominal profond',
                ],
                'a' => 1,
                'e' => 'Le huff peut favoriser la mobilisation des sécrétions selon l\'évaluation clinique.',
            ],
            [
                'q' => 'Quel test mesure la distance parcourue en six minutes ?',
                'c' => [
                    'Test de Lachman',
                    'Test de Thompson',
                    'Test de Phalen',
                    'Test de marche de 6 minutes',
                ],
                'a' => 3,
                'e' => 'Le TM6 évalue la capacité fonctionnelle à l\'effort.',
            ],
            [
                'q' => 'Quel principe est recommandé dans la réadaptation respiratoire stable ?',
                'c' => [
                    'Repos au lit permanent',
                    'Entraînement physique progressif individualisé',
                    'Arrêt systématique de toute activité',
                    'Effort maximal immédiat',
                ],
                'a' => 1,
                'e' => 'L\'entraînement progressif améliore la tolérance à l\'effort.',
            ],
            [
                'q' => 'Quel signe pendant la séance impose l\'arrêt et une évaluation urgente ?',
                'c' => [
                    'Douleur thoracique nouvelle intense',
                    'Respiration accélérée attendue',
                    'Fatigue légère habituelle',
                    'Transpiration modérée',
                ],
                'a' => 0,
                'e' => 'Une douleur thoracique aiguë peut signaler une urgence cardiovasculaire.',
            ],
            [
                'q' => 'Après un AVC, quel déficit correspond à une hémiparésie ?',
                'c' => [
                    'Faiblesse d\'un hémicorps',
                    'Douleur lombaire isolée',
                    'Paralysie des deux jambes uniquement',
                    'Perte auditive isolée',
                ],
                'a' => 0,
                'e' => 'L\'hémiparésie est une diminution de force d\'un côté du corps.',
            ],
            [
                'q' => 'Quelle échelle évalue le degré de spasticité à la mobilisation passive ?',
                'c' => [
                    'Échelle d\'Ashworth modifiée',
                    'Échelle de Braden',
                    'Score d\'Apgar',
                    'Échelle de Glasgow',
                ],
                'a' => 0,
                'e' => 'L\'Ashworth modifiée cote la résistance au mouvement passif.',
            ],
            [
                'q' => 'Quel objectif est prioritaire dans la prévention des escarres chez un patient immobilisé ?',
                'c' => [
                    'Augmenter la pression sur les talons',
                    'Éviter tout contrôle cutané',
                    'Limiter toute hydratation',
                    'Réduire les pressions prolongées par repositionnement adapté',
                ],
                'a' => 3,
                'e' => 'La décharge et le repositionnement limitent les lésions liées à la pression.',
            ],
            [
                'q' => 'Quel dispositif est souvent utilisé pour aider la marche en cas de déficit léger d\'équilibre ?',
                'c' => [
                    'Attelle de poignet',
                    'Orthèse dentaire',
                    'Canne adaptée',
                    'Collier cervical',
                ],
                'a' => 2,
                'e' => 'Une canne correctement réglée peut améliorer la stabilité.',
            ],
            [
                'q' => 'De quel côté tient-on habituellement la canne en cas de douleur unilatérale de hanche ?',
                'c' => [
                    'Dans les deux mains',
                    'Derrière le dos',
                    'Du côté opposé à la hanche douloureuse',
                    'Du côté douloureux systématiquement',
                ],
                'a' => 2,
                'e' => 'La canne controlatérale peut réduire la charge sur la hanche douloureuse.',
            ],
            [
                'q' => 'Quelle aide à la marche offre en général une base de support plus large qu\'une canne simple ?',
                'c' => [
                    'Canne simple',
                    'Béquille unique',
                    'Déambulateur',
                    'Semelle souple',
                ],
                'a' => 2,
                'e' => 'Le déambulateur augmente la base de sustentation.',
            ],
            [
                'q' => 'Quel est le but d\'une orthèse cheville-pied chez un patient présentant un pied tombant ?',
                'c' => [
                    'Immobiliser les doigts',
                    'Bloquer la hanche',
                    'Améliorer le dégagement du pied pendant la marche',
                    'Augmenter la flexion plantaire incontrôlée',
                ],
                'a' => 2,
                'e' => 'L\'orthèse limite l\'accrochage des orteils pendant la phase oscillante.',
            ],
            [
                'q' => 'Quel phénomène correspond à une limitation durable d\'amplitude liée à un raccourcissement tissulaire ?',
                'c' => [
                    'Hyperventilation',
                    'Hyperlaxité',
                    'Hypertrophie',
                    'Rétraction',
                ],
                'a' => 3,
                'e' => 'Une rétraction limite la mobilité passive et active.',
            ],
            [
                'q' => 'Quel est l\'objectif principal des étirements doux adaptés ?',
                'c' => [
                    'Remplacer l\'évaluation clinique',
                    'Produire une fracture de fatigue',
                    'Améliorer ou entretenir la souplesse',
                    'Supprimer toute douleur instantanément',
                ],
                'a' => 2,
                'e' => 'Les étirements ciblés peuvent entretenir la longueur musculotendineuse.',
            ],
            [
                'q' => 'Quel examen d\'imagerie visualise le mieux les tissus mous du genou sans rayons X ?',
                'c' => [
                    'Radiographie standard',
                    'IRM',
                    'Fluoroscopie',
                    'Scanner',
                ],
                'a' => 1,
                'e' => 'L\'IRM visualise ligaments et ménisques sans rayonnement ionisant.',
            ],
            [
                'q' => 'Quel tissu est principalement lésé dans une entorse ?',
                'c' => [
                    'Émail dentaire',
                    'Ligament',
                    'Peau uniquement',
                    'Os cortical',
                ],
                'a' => 1,
                'e' => 'L\'entorse correspond à une atteinte ligamentaire.',
            ],
            [
                'q' => 'Quel diagnostic évoquer devant douleur intense disproportionnée et tension d\'une jambe plâtrée ?',
                'c' => [
                    'Tendinite chronique',
                    'Syndrome des loges',
                    'Arthrose stable',
                    'Simple courbature',
                ],
                'a' => 1,
                'e' => 'Le syndrome des loges est une urgence nécessitant évaluation immédiate.',
            ],
            [
                'q' => 'Quel signe doit faire suspecter une thrombose veineuse profonde après immobilisation ?',
                'c' => [
                    'Prurit isolé des mains',
                    'Vision floue isolée',
                    'Douleur dentaire',
                    'Gonflement unilatéral douloureux du mollet',
                ],
                'a' => 3,
                'e' => 'Une TVP suspectée nécessite une évaluation médicale rapide et non un massage.',
            ],
            [
                'q' => 'Quel exercice est souvent utilisé au début de la rééducation après chirurgie du genou, selon prescription ?',
                'c' => [
                    'Flexion forcée douloureuse',
                    'Contractions isométriques du quadriceps',
                    'Sauts répétés immédiats',
                    'Course de vitesse',
                ],
                'a' => 1,
                'e' => 'Les isométriques peuvent réactiver le quadriceps avec peu de mouvement.',
            ],
            [
                'q' => 'Quel principe guide la progression des charges après une fracture ?',
                'c' => [
                    'Retirer soi-même l\'immobilisation',
                    'Ignorer la douleur intense',
                    'Respecter la consolidation et les consignes médicales',
                    'Appui total immédiat pour tous',
                ],
                'a' => 2,
                'e' => 'La progression dépend du type de fracture et de la stabilité.',
            ],
            [
                'q' => 'Quel signe caractérise souvent une capsulite rétractile de l\'épaule ?',
                'c' => [
                    'Mobilité passive normale avec force nulle',
                    'Douleur isolée du genou',
                    'Limitation des mobilités active et passive',
                    'Hyperextension indolore du coude',
                ],
                'a' => 2,
                'e' => 'La capsulite réduit typiquement les amplitudes actives et passives.',
            ],
            [
                'q' => 'Quelle pathologie se caractérise par une perte progressive du cartilage articulaire ?',
                'c' => [
                    'Arthrose',
                    'Névralgie',
                    'Pneumonie',
                    'Scoliose',
                ],
                'a' => 0,
                'e' => 'L\'arthrose associe altérations cartilagineuses et changements articulaires.',
            ],
            [
                'q' => 'Quel exercice est généralement recommandé dans la lombalgie commune persistante ?',
                'c' => [
                    'Alitement strict prolongé',
                    'Immobilisation systématique',
                    'Éviter toute marche à vie',
                    'Activité physique adaptée et progressive',
                ],
                'a' => 3,
                'e' => 'Le maintien d\'une activité adaptée aide la récupération fonctionnelle.',
            ],
            [
                'q' => 'Quel signe neurologique associé à une lombalgie impose une évaluation urgente ?',
                'c' => [
                    'Raideur matinale brève',
                    'Troubles récents de la continence urinaire avec anesthésie en selle',
                    'Fatigue après marche',
                    'Douleur musculaire légère',
                ],
                'a' => 1,
                'e' => 'Ces signes évoquent un syndrome de la queue de cheval.',
            ],
            [
                'q' => 'Quelle mesure aide à prévenir les chutes chez une personne âgée fragile ?',
                'c' => [
                    'Porter des chaussures instables',
                    'Entraînement de l\'équilibre et adaptation de l\'environnement',
                    'Laisser les obstacles au sol',
                    'Supprimer toute activité',
                ],
                'a' => 1,
                'e' => 'Les exercices d\'équilibre et la réduction des risques domestiques diminuent les chutes.',
            ],
            [
                'q' => 'Quelle mesure doit précéder toute technique de rééducation ?',
                'c' => [
                    'Bilan clinique et recherche de contre-indications',
                    'Absence de consentement',
                    'Application automatique d\'une technique',
                    'Augmentation maximale des charges',
                ],
                'a' => 0,
                'e' => 'L\'évaluation oriente le choix sûr et individualisé des interventions.',
            ],
        ];

        return [
            'subject_slug' => $subjectSlug,
            'slug' => $quizSlug,
            'title' => $title,
            'description' => $description,
            'questions' => $questions,
        ];
    }
}
