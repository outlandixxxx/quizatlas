<?php

namespace Database\Seeders;

use Database\Seeders\Support\HealthQcmSeeder;

/**
 * FR practice quiz for Concours Santé, with 50 questions.
 * Uses the existing subject with slug anesthesie-reanimation-fr.
 * The source calls for review before publication. New quizzes start inactive.
 */
class AnesthesieReanimationFRSeeder extends HealthQcmSeeder
{
    public function definition(): array
    {
        $subjectSlug = 'anesthesie-reanimation-fr';
        $quizSlug = 'health-competition-anesthesie-reanimation-fr-qcm-01';
        $title = 'Anesthésie-réanimation — QCM 01 (50 questions)';
        $description = 'QCM de préparation aux concours de la santé au Maroc.';

        // a is the zero-based index of the single correct choice.
        $questions = [
            [
                'q' => 'Quel est le principal objectif de la préoxygénation avant une induction anesthésique ?',
                'c' => [
                    'Augmenter la glycémie',
                    'Augmenter les réserves d’oxygène',
                    'Réduire la température',
                    'Accélérer l’élimination rénale',
                ],
                'a' => 1,
                'e' => 'Elle augmente les réserves d’oxygène et retarde la désaturation pendant l’apnée.',
            ],
            [
                'q' => 'Quel dispositif mesure en continu la saturation périphérique en oxygène ?',
                'c' => [
                    'Glucomètre',
                    'Spiromètre',
                    'Thermomètre',
                    'Oxymètre de pouls',
                ],
                'a' => 3,
                'e' => 'L’oxymètre de pouls estime la SpO₂ par photopléthysmographie.',
            ],
            [
                'q' => 'Que surveille principalement la capnographie en anesthésie ?',
                'c' => [
                    'La pression intracrânienne',
                    'Le CO₂ expiré',
                    'Le potassium sérique',
                    'La glycémie',
                ],
                'a' => 1,
                'e' => 'La capnographie mesure le CO₂ expiré et aide à apprécier la ventilation.',
            ],
            [
                'q' => 'Quel signe capnographique peut évoquer une déconnexion du circuit ventilatoire ?',
                'c' => [
                    'Disparition brutale du tracé de CO₂',
                    'Augmentation de la température',
                    'Bradycardie isolée',
                    'Hausse de la glycémie',
                ],
                'a' => 0,
                'e' => 'La disparition soudaine du CO₂ expiré impose de vérifier rapidement circuit et patient.',
            ],
            [
                'q' => 'Quel paramètre reflète directement la fréquence des contractions cardiaques ?',
                'c' => [
                    'Diurèse',
                    'Température',
                    'Fréquence cardiaque',
                    'Pression veineuse centrale',
                ],
                'a' => 2,
                'e' => 'La fréquence cardiaque est exprimée en battements par minute.',
            ],
            [
                'q' => 'Quelle est la fonction principale du ballon autoremplisseur manuel ?',
                'c' => [
                    'Assurer une ventilation manuelle',
                    'Administrer une perfusion',
                    'Mesurer la glycémie',
                    'Aspirer les sécrétions',
                ],
                'a' => 0,
                'e' => 'Le ballon autoremplisseur permet d’insuffler de l’air ou de l’oxygène au patient.',
            ],
            [
                'q' => 'Quel instrument permet de visualiser la glotte lors d’une intubation classique ?',
                'c' => [
                    'Stéthoscope',
                    'Ophtalmoscope',
                    'Otoscopie',
                    'Laryngoscope',
                ],
                'a' => 3,
                'e' => 'Le laryngoscope sert à exposer les structures laryngées pour placer la sonde.',
            ],
            [
                'q' => 'Quel contrôle est particulièrement utile pour confirmer la position trachéale d’une sonde après intubation ?',
                'c' => [
                    'Couleur du drap',
                    'Capnographie avec CO₂ expiré persistant',
                    'Mesure de la taille',
                    'Examen des pupilles seul',
                ],
                'a' => 1,
                'e' => 'Une courbe persistante de CO₂ expiré est un indicateur majeur de position trachéale.',
            ],
            [
                'q' => 'Quel risque augmente chez un patient non à jeun lors de l’induction ?',
                'c' => [
                    'Myopie',
                    'Hypothermie uniquement',
                    'Inhalation du contenu gastrique',
                    'Anémie chronique',
                ],
                'a' => 2,
                'e' => 'Le contenu gastrique peut être régurgité puis aspiré dans les voies respiratoires.',
            ],
            [
                'q' => 'Quel élément fait partie de la vérification préanesthésique de sécurité ?',
                'c' => [
                    'Marque du lit',
                    'Nombre de visiteurs',
                    'Couleur des murs',
                    'Identité du patient et intervention prévue',
                ],
                'a' => 3,
                'e' => 'La concordance identité–intervention–site réduit les erreurs évitables.',
            ],
            [
                'q' => 'Quel est le rôle d’un filtre antibactérien/antiviral adapté sur un circuit respiratoire ?',
                'c' => [
                    'Réchauffer le sang',
                    'Mesurer la pression artérielle',
                    'Réduire la transmission de particules infectieuses',
                    'Remplacer l’oxygène',
                ],
                'a' => 2,
                'e' => 'Les filtres adaptés contribuent à la prévention de la contamination du circuit.',
            ],
            [
                'q' => 'Quelle mesure réduit les infections liées aux dispositifs intravasculaires ?',
                'c' => [
                    'Pansement systématiquement ouvert',
                    'Réutilisation des aiguilles',
                    'Manipulations sans hygiène des mains',
                    'Asepsie lors de la pose et de la manipulation',
                ],
                'a' => 3,
                'e' => 'L’asepsie et l’hygiène des mains réduisent les infections associées aux cathéters.',
            ],
            [
                'q' => 'Quelle est la première réaction devant une alarme de ventilateur ?',
                'c' => [
                    'Évaluer immédiatement le patient et la ventilation',
                    'Désactiver durablement l’alarme',
                    'Quitter la salle',
                    'Attendre sans vérification',
                ],
                'a' => 0,
                'e' => 'L’état du patient prime, suivi de la recherche de la cause de l’alarme.',
            ],
            [
                'q' => 'Quel paramètre exprime le volume insufflé à chaque cycle ventilatoire ?',
                'c' => [
                    'Fréquence cardiaque',
                    'Hématocrite',
                    'Volume courant',
                    'Débit urinaire',
                ],
                'a' => 2,
                'e' => 'Le volume courant correspond au volume d’air délivré ou expiré par respiration.',
            ],
            [
                'q' => 'Que signifie PEP (PEEP) en ventilation mécanique ?',
                'c' => [
                    'Pression intracrânienne',
                    'Pic électrique pulmonaire',
                    'Pression positive en fin d’expiration',
                    'Pression artérielle moyenne',
                ],
                'a' => 2,
                'e' => 'La PEP maintient une pression positive à la fin de l’expiration.',
            ],
            [
                'q' => 'Quelle complication peut résulter d’une pression ventilatoire excessive ?',
                'c' => [
                    'Fracture du poignet',
                    'Barotraumatisme pulmonaire',
                    'Otite externe',
                    'Cataracte',
                ],
                'a' => 1,
                'e' => 'Une pression excessive peut léser les structures pulmonaires.',
            ],
            [
                'q' => 'Quel examen biologique renseigne sur le pH et les gaz sanguins artériels ?',
                'c' => [
                    'Gaz du sang artériel',
                    'Bilan lipidique',
                    'Numération plaquettaire seule',
                    'Analyse d’urine simple',
                ],
                'a' => 0,
                'e' => 'La gazométrie artérielle évalue notamment pH, PaO₂ et PaCO₂.',
            ],
            [
                'q' => 'Quel changement de PaCO₂ évoque habituellement une hypoventilation alvéolaire ?',
                'c' => [
                    'Diminution de l’hémoglobine',
                    'Diminution de la natrémie',
                    'Augmentation des plaquettes',
                    'Augmentation de la PaCO₂',
                ],
                'a' => 3,
                'e' => 'Une ventilation alvéolaire insuffisante favorise la rétention de CO₂.',
            ],
            [
                'q' => 'Quel signe clinique peut accompagner une obstruction aiguë des voies aériennes ?',
                'c' => [
                    'Stridor inspiratoire',
                    'Augmentation isolée de la diurèse',
                    'Vision floue isolée',
                    'Prurit du pied',
                ],
                'a' => 0,
                'e' => 'Un stridor peut signaler une obstruction des voies aériennes supérieures.',
            ],
            [
                'q' => 'Quel est le rôle principal de l’aspiration trachéale lorsqu’elle est indiquée ?',
                'c' => [
                    'Évacuer des sécrétions gênant la perméabilité',
                    'Augmenter la glycémie',
                    'Corriger une anémie',
                    'Réduire la fièvre',
                ],
                'a' => 0,
                'e' => 'L’aspiration retire des sécrétions lorsque celles-ci compromettent la ventilation.',
            ],
            [
                'q' => 'Quel signe peut évoquer une réaction anaphylactique périopératoire ?',
                'c' => [
                    'Myopie',
                    'Hypotension brutale avec bronchospasme',
                    'Hypertension chronique isolée',
                    'Douleur du genou ancienne',
                ],
                'a' => 1,
                'e' => 'L’association collapsus et bronchospasme après exposition doit faire suspecter une anaphylaxie.',
            ],
            [
                'q' => 'Quel médicament est le traitement de première intention de l’anaphylaxie ?',
                'c' => [
                    'Furosémide',
                    'Insuline',
                    'Adrénaline',
                    'Paracétamol',
                ],
                'a' => 2,
                'e' => 'L’adrénaline est le traitement essentiel de l’anaphylaxie, selon les protocoles d’urgence.',
            ],
            [
                'q' => 'Quel est le rôle du monitorage ECG pendant l’anesthésie ?',
                'c' => [
                    'Mesurer la diurèse',
                    'Mesurer la douleur seule',
                    'Suivre rythme et fréquence cardiaques',
                    'Calculer l’IMC',
                ],
                'a' => 2,
                'e' => 'L’ECG permet de détecter notamment des anomalies du rythme.',
            ],
            [
                'q' => 'Quel signe doit faire rechercher rapidement une hémorragie périopératoire ?',
                'c' => [
                    'Toux ancienne isolée',
                    'Myopie',
                    'Hypotension avec tachycardie et saignement',
                    'Cheveux secs',
                ],
                'a' => 2,
                'e' => 'Une chute tensionnelle associée à tachycardie et pertes sanguines évoque une hémorragie.',
            ],
            [
                'q' => 'Quel indicateur est couramment suivi pour apprécier la perfusion rénale en réanimation ?',
                'c' => [
                    'Acuité visuelle',
                    'Diurèse',
                    'Couleur des cheveux',
                    'Tour de tête',
                ],
                'a' => 1,
                'e' => 'La diurèse est un élément de surveillance de la perfusion et de la fonction rénale.',
            ],
            [
                'q' => 'Quel est le but d’une échelle de douleur en salle de réveil ?',
                'c' => [
                    'Calculer la créatinine',
                    'Évaluer et suivre l’intensité de la douleur',
                    'Mesurer la température',
                    'Évaluer le groupe sanguin',
                ],
                'a' => 1,
                'e' => 'Une évaluation structurée aide à adapter la prise en charge antalgique.',
            ],
            [
                'q' => 'Quelle échelle est classiquement utilisée pour apprécier la récupération après anesthésie ?',
                'c' => [
                    'Score de Glasgow seul',
                    'Score d’Apgar',
                    'Indice de masse corporelle',
                    'Score d’Aldrete',
                ],
                'a' => 3,
                'e' => 'Le score d’Aldrete évalue plusieurs critères de récupération postanesthésique.',
            ],
            [
                'q' => 'Quel est un effet fréquent des opioïdes nécessitant une surveillance ?',
                'c' => [
                    'Amélioration de la vision',
                    'Augmentation systématique de la diurèse',
                    'Hyperthermie obligatoire',
                    'Dépression respiratoire',
                ],
                'a' => 3,
                'e' => 'Les opioïdes peuvent ralentir la ventilation et nécessitent une surveillance respiratoire.',
            ],
            [
                'q' => 'Quel médicament antagonise principalement les effets des opioïdes ?',
                'c' => [
                    'Protamine',
                    'Atropine',
                    'Flumazénil',
                    'Naloxone',
                ],
                'a' => 3,
                'e' => 'La naloxone est un antagoniste des récepteurs opioïdes.',
            ],
            [
                'q' => 'Quel médicament peut antagoniser les effets des benzodiazépines dans certaines situations ?',
                'c' => [
                    'Flumazénil',
                    'Naloxone',
                    'Vitamine K',
                    'Insuline',
                ],
                'a' => 0,
                'e' => 'Le flumazénil antagonise les benzodiazépines, mais son emploi exige une évaluation des risques.',
            ],
            [
                'q' => 'Quel signe peut évoquer une hyperthermie maligne sous anesthésie ?',
                'c' => [
                    'Hypoglycémie isolée',
                    'Myopie',
                    'Éternuement isolé',
                    'Hausse inexpliquée du CO₂ expiré et rigidité musculaire',
                ],
                'a' => 3,
                'e' => 'Une élévation inexpliquée de l’EtCO₂, avec rigidité, doit alerter sur une hyperthermie maligne.',
            ],
            [
                'q' => 'Quel médicament spécifique est utilisé contre l’hyperthermie maligne ?',
                'c' => [
                    'Paracétamol seul',
                    'Dantrolène',
                    'Amoxicilline',
                    'Héparine',
                ],
                'a' => 1,
                'e' => 'Le dantrolène fait partie du traitement spécifique de l’hyperthermie maligne.',
            ],
            [
                'q' => 'Quel est le principal risque d’une injection intravasculaire accidentelle d’anesthésique local ?',
                'c' => [
                    'Cataracte immédiate',
                    'Insuffisance thyroïdienne',
                    'Fracture',
                    'Toxicité systémique neurologique et cardiaque',
                ],
                'a' => 3,
                'e' => 'Une concentration sanguine élevée peut entraîner convulsions et troubles cardiovasculaires.',
            ],
            [
                'q' => 'Quel traitement peut être indiqué en cas de toxicité systémique grave des anesthésiques locaux ?',
                'c' => [
                    'Diurétique systématique',
                    'Fer oral seul',
                    'Émulsion lipidique intraveineuse',
                    'Vitamine C seule',
                ],
                'a' => 2,
                'e' => 'Une émulsion lipidique IV est utilisée dans les formes graves selon les protocoles.',
            ],
            [
                'q' => 'Quel signe est compatible avec un bloc rachidien trop étendu ?',
                'c' => [
                    'Hypotension et difficulté respiratoire',
                    'Hypertension permanente',
                    'Hyperglycémie obligatoire',
                    'Polyurie isolée',
                ],
                'a' => 0,
                'e' => 'Un bloc haut peut entraîner une atteinte sympathique et respiratoire.',
            ],
            [
                'q' => 'Quelle complication est typiquement associée à une ponction durale ?',
                'c' => [
                    'Céphalée post-ponction durale',
                    'Cataracte',
                    'Otite moyenne',
                    'Fracture costale',
                ],
                'a' => 0,
                'e' => 'Une fuite de liquide céphalorachidien peut provoquer une céphalée positionnelle.',
            ],
            [
                'q' => 'Quel contrôle est indispensable avant une transfusion de produit sanguin ?',
                'c' => [
                    'Concordance identité du patient et produit',
                    'Nombre de fenêtres',
                    'Couleur du plafond',
                    'Taille des chaussures',
                ],
                'a' => 0,
                'e' => 'Les vérifications d’identité et de compatibilité réduisent les erreurs transfusionnelles.',
            ],
            [
                'q' => 'Quel signe peut évoquer une réaction transfusionnelle aiguë ?',
                'c' => [
                    'Fièvre ou frissons pendant la transfusion',
                    'Augmentation de la taille',
                    'Cheveux gras',
                    'Amélioration visuelle',
                ],
                'a' => 0,
                'e' => 'Fièvre, frissons ou détresse pendant la transfusion imposent une évaluation urgente.',
            ],
            [
                'q' => 'Quel élément aide à prévenir l’hypothermie périopératoire ?',
                'c' => [
                    'Exposition prolongée au froid',
                    'Perfusion froide systématique',
                    'Arrêt de la surveillance',
                    'Réchauffement adapté et surveillance thermique',
                ],
                'a' => 3,
                'e' => 'Le maintien de la normothermie repose sur la prévention des pertes thermiques.',
            ],
            [
                'q' => 'Quel est le rôle d’un dispositif de pression artérielle non invasive ?',
                'c' => [
                    'Mesurer régulièrement la pression artérielle',
                    'Calculer la natrémie',
                    'Mesurer la diurèse',
                    'Mesurer la PaO₂ directement',
                ],
                'a' => 0,
                'e' => 'Le brassard oscillométrique fournit des mesures intermittentes de pression artérielle.',
            ],
            [
                'q' => 'Que signifie une alarme de pression élevée des voies aériennes sur ventilateur ?',
                'c' => [
                    'Résistance ou pression augmentée à explorer',
                    'Absence certaine de problème',
                    'Hypoglycémie certaine',
                    'Anémie certaine',
                ],
                'a' => 0,
                'e' => 'Elle impose de rechercher obstruction, sécrétions, bronchospasme ou problème de circuit.',
            ],
            [
                'q' => 'Quelle donnée renseigne sur la concentration inspirée en oxygène ?',
                'c' => [
                    'INR',
                    'Hémoglobine',
                    'FiO₂',
                    'IMC',
                ],
                'a' => 2,
                'e' => 'La FiO₂ est la fraction d’oxygène du mélange gazeux inspiré.',
            ],
            [
                'q' => 'Quel est l’intérêt du contrôle des médicaments à haut risque avant administration ?',
                'c' => [
                    'Prévenir les erreurs de produit, dose et voie',
                    'Gagner du temps sans vérification',
                    'Remplacer l’identification du patient',
                    'Éviter toute documentation',
                ],
                'a' => 0,
                'e' => 'La double vérification selon les procédures limite les erreurs médicamenteuses.',
            ],
            [
                'q' => 'Quel est l’objectif d’une transmission structurée en sortie de bloc ?',
                'c' => [
                    'Remplacer toute surveillance',
                    'Assurer la continuité des soins et communiquer les risques',
                    'Retarder la prise en charge',
                    'Éviter le dossier médical',
                ],
                'a' => 1,
                'e' => 'Une transmission structurée précise intervention, événements, traitements et surveillance.',
            ],
            [
                'q' => 'Quelle action est prioritaire devant un patient inconscient qui ne respire pas normalement ?',
                'c' => [
                    'Le laisser seul',
                    'Attendre une heure',
                    'Lui donner de l’eau',
                    'Alerter et débuter la réanimation selon le protocole',
                ],
                'a' => 3,
                'e' => 'L’absence de respiration normale impose l’activation des secours et une RCP rapide.',
            ],
            [
                'q' => 'Quelle est la finalité principale des compressions thoraciques lors d’un arrêt cardiaque ?',
                'c' => [
                    'Traiter une infection',
                    'Maintenir une circulation sanguine minimale',
                    'Mesurer la glycémie',
                    'Corriger une fracture',
                ],
                'a' => 1,
                'e' => 'Les compressions produisent un débit sanguin partiel vers les organes vitaux.',
            ],
            [
                'q' => 'Quel appareil délivre un choc électrique lors de certains rythmes d’arrêt cardiaque ?',
                'c' => [
                    'Glucomètre',
                    'Nébuliseur',
                    'Thermomètre',
                    'Défibrillateur',
                ],
                'a' => 3,
                'e' => 'La défibrillation est indiquée pour certains rythmes choquables selon les algorithmes.',
            ],
            [
                'q' => 'Quel rythme d’arrêt cardiaque est classiquement choquable ?',
                'c' => [
                    'Activité électrique sans pouls',
                    'Bradycardie sinusale stable',
                    'Fibrillation ventriculaire',
                    'Asystolie',
                ],
                'a' => 2,
                'e' => 'La fibrillation ventriculaire nécessite une défibrillation rapide.',
            ],
            [
                'q' => 'Quel élément doit être vérifié lors de la préparation d’un pousse-seringue électrique ?',
                'c' => [
                    'Âge de l’appareil uniquement',
                    'Marque du support',
                    'Couleur du câble seulement',
                    'Médicament, concentration et débit prescrits',
                ],
                'a' => 3,
                'e' => 'La sécurité exige de vérifier prescription, concentration, débit et voie.',
            ],
            [
                'q' => 'Pourquoi surveiller le site d’une perfusion périphérique ?',
                'c' => [
                    'Mesurer la saturation',
                    'Diagnostiquer une fracture',
                    'Détecter infiltration ou phlébite',
                    'Évaluer la vision',
                ],
                'a' => 2,
                'e' => 'La surveillance du point de ponction permet de repérer rapidement les complications locales.',
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
