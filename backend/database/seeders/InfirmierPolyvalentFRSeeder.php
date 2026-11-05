<?php

namespace Database\Seeders;

use Database\Seeders\Support\HealthQcmSeeder;

/**
 * FR practice quiz for Concours Santé, with 50 questions.
 * Uses the existing subject with slug infirmier-polyvalent-fr.
 */
class InfirmierPolyvalentFRSeeder extends HealthQcmSeeder
{
    public function definition(): array
    {
        $subjectSlug = 'infirmier-polyvalent-fr';
        $quizSlug = 'health-competition-infirmier-polyvalent-fr-qcm-02';
        $title = 'Préparation concours santé – Santé publique et soins infirmiers – 02';
        $description = 'QCM de préparation aux concours de la santé au Maroc.';

        // a is the zero-based index of the single correct choice.
        $questions = [
            [
                'q' => 'Quel geste est prioritaire avant un soin aseptique ?',
                'c' => [
                    'Hygiène des mains',
                    'Port de surchaussures',
                    'Mesure de la taille',
                    'Prise du pouls',
                ],
                'a' => 0,
                'e' => 'L\'hygiène des mains réduit la transmission croisée des micro-organismes.',
            ],
            [
                'q' => 'Quel équipement protège surtout le soignant contre les projections de liquide biologique vers les yeux ?',
                'c' => [
                    'Gants seuls',
                    'Lunettes ou visière',
                    'Calot seul',
                    'Tablier textile seul',
                ],
                'a' => 1,
                'e' => 'Une protection oculaire est indiquée en cas de risque de projection.',
            ],
            [
                'q' => 'Quelle est la première action après une piqûre accidentelle avec une aiguille utilisée ?',
                'c' => [
                    'Presser fortement la plaie',
                    'Laver à l\'eau et au savon',
                    'Recapuchonner l\'aiguille',
                    'Ignorer l\'incident',
                ],
                'a' => 1,
                'e' => 'Le lavage immédiat fait partie des premières mesures, suivi du signalement et de l\'évaluation urgente.',
            ],
            [
                'q' => 'Quel type de déchet nécessite un collecteur rigide adapté ?',
                'c' => [
                    'Papier propre',
                    'Aiguille usagée',
                    'Emballage alimentaire propre',
                    'Serviette de bureau',
                ],
                'a' => 1,
                'e' => 'Les objets piquants ou tranchants vont immédiatement dans un collecteur sécurisé.',
            ],
            [
                'q' => 'Que signifie la sensibilité d\'un test de dépistage ?',
                'c' => [
                    'Proportion de malades testés positifs',
                    'Proportion de non-malades testés négatifs',
                    'Coût du test',
                    'Durée du test',
                ],
                'a' => 0,
                'e' => 'La sensibilité est la capacité du test à identifier les personnes atteintes.',
            ],
            [
                'q' => 'Que signifie la spécificité d\'un test ?',
                'c' => [
                    'Proportion de malades positifs',
                    'Proportion de non-malades négatifs',
                    'Nombre de tests réalisés',
                    'Fréquence des consultations',
                ],
                'a' => 1,
                'e' => 'La spécificité mesure la capacité à identifier correctement les non-malades.',
            ],
            [
                'q' => 'Quel indicateur décrit les nouveaux cas pendant une période ?',
                'c' => [
                    'Prévalence',
                    'Incidence',
                    'Létalité',
                    'Mortalité proportionnelle',
                ],
                'a' => 1,
                'e' => 'L\'incidence concerne les nouveaux cas observés durant une période.',
            ],
            [
                'q' => 'Quel indicateur comprend tous les cas existants à un instant donné ?',
                'c' => [
                    'Incidence',
                    'Prévalence',
                    'Taux de natalité',
                    'Taux d\'attaque uniquement',
                ],
                'a' => 1,
                'e' => 'La prévalence reflète l\'ensemble des cas présents dans une population.',
            ],
            [
                'q' => 'Quel est l\'objectif principal de la vaccination ?',
                'c' => [
                    'Traiter toutes les infections actives',
                    'Prévenir certaines maladies infectieuses',
                    'Remplacer l\'hygiène',
                    'Diagnostiquer le diabète',
                ],
                'a' => 1,
                'e' => 'La vaccination prépare la réponse immunitaire avant une exposition future.',
            ],
            [
                'q' => 'Quel vaccin est classiquement administré pour prévenir les formes graves de tuberculose chez l\'enfant ?',
                'c' => [
                    'BCG',
                    'Antigrippal',
                    'Antirabique',
                    'Antitétanique seul',
                ],
                'a' => 0,
                'e' => 'Le BCG protège surtout contre certaines formes graves de tuberculose pédiatrique.',
            ],
            [
                'q' => 'Quel est le mode principal de transmission de la tuberculose pulmonaire contagieuse ?',
                'c' => [
                    'Eau contaminée',
                    'Voie aérienne',
                    'Piqûre de moustique',
                    'Contact avec les vêtements uniquement',
                ],
                'a' => 1,
                'e' => 'La tuberculose pulmonaire se transmet par inhalation d\'aérosols infectieux.',
            ],
            [
                'q' => 'Quelle précaution est essentielle face à une suspicion de tuberculose pulmonaire contagieuse ?',
                'c' => [
                    'Précautions aériennes',
                    'Aucune précaution',
                    'Isolement digestif seul',
                    'Antibiotique systématique pour tous les visiteurs',
                ],
                'a' => 0,
                'e' => 'Les précautions aériennes complètent les précautions standard.',
            ],
            [
                'q' => 'Quel est le vecteur du paludisme ?',
                'c' => [
                    'Moustique Anopheles femelle',
                    'Mouche domestique',
                    'Puce',
                    'Tique uniquement',
                ],
                'a' => 0,
                'e' => 'Le paludisme est transmis par certaines femelles Anopheles infectées.',
            ],
            [
                'q' => 'Quelle mesure prévient directement les infections liées aux cathéters ?',
                'c' => [
                    'Manipulation aseptique',
                    'Changement sans hygiène des mains',
                    'Réutilisation de matériel à usage unique',
                    'Déconnexion répétée inutile',
                ],
                'a' => 0,
                'e' => 'L\'asepsie lors de la pose et de la manipulation limite les infections associées.',
            ],
            [
                'q' => 'Que doit-on vérifier avant d\'administrer un médicament ?',
                'c' => [
                    'Identité du patient et prescription',
                    'Couleur des murs',
                    'Nombre de visiteurs',
                    'Heure du dernier repas uniquement',
                ],
                'a' => 0,
                'e' => 'La vérification du patient, du médicament, de la dose, de la voie et de l\'heure est fondamentale.',
            ],
            [
                'q' => 'Quelle voie d\'administration évite le passage initial par le tube digestif ?',
                'c' => [
                    'Orale',
                    'Intraveineuse',
                    'Sublinguale uniquement pour les aliments',
                    'Entérale par sonde',
                ],
                'a' => 1,
                'e' => 'L\'administration intraveineuse introduit directement le médicament dans la circulation.',
            ],
            [
                'q' => 'Quel signe peut évoquer une hypoglycémie chez une personne consciente ?',
                'c' => [
                    'Sueurs et tremblements',
                    'Jaunisse isolée',
                    'Éruption chronique uniquement',
                    'Ongles longs',
                ],
                'a' => 0,
                'e' => 'Les sueurs et tremblements sont des signes fréquents d\'hypoglycémie.',
            ],
            [
                'q' => 'Quel paramètre est mesuré par un oxymètre de pouls ?',
                'c' => [
                    'Saturation périphérique en oxygène',
                    'Glycémie',
                    'Hémoglobine exacte',
                    'Pression intracrânienne',
                ],
                'a' => 0,
                'e' => 'L\'oxymètre estime la saturation périphérique en oxygène, SpO2.',
            ],
            [
                'q' => 'Quel organe assure principalement la filtration du sang pour former l\'urine ?',
                'c' => [
                    'Foie',
                    'Rein',
                    'Rate',
                    'Pancréas',
                ],
                'a' => 1,
                'e' => 'Les reins filtrent le plasma et participent à l\'équilibre hydroélectrolytique.',
            ],
            [
                'q' => 'Quelle mesure est indispensable avant de mesurer correctement la pression artérielle ?',
                'c' => [
                    'Utiliser un brassard adapté',
                    'Faire courir le patient',
                    'Mesurer sur un vêtement épais',
                    'Parler pendant toute la mesure',
                ],
                'a' => 0,
                'e' => 'Un brassard de taille adaptée contribue à la fiabilité de la mesure.',
            ],
            [
                'q' => 'Quelle est la fréquence cardiaque habituelle au repos chez l\'adulte ?',
                'c' => [
                    '20 à 40/min',
                    '60 à 100/min',
                    '130 à 180/min',
                    '200 à 240/min',
                ],
                'a' => 1,
                'e' => 'Chez l\'adulte au repos, la fréquence cardiaque habituelle est d\'environ 60 à 100/min.',
            ],
            [
                'q' => 'Quel signe peut évoquer une déshydratation ?',
                'c' => [
                    'Muqueuses sèches',
                    'Œdème généralisé obligatoire',
                    'Bradycardie systématique',
                    'Vision nocturne améliorée',
                ],
                'a' => 0,
                'e' => 'La sécheresse des muqueuses est un signe possible, à interpréter avec le contexte clinique.',
            ],
            [
                'q' => 'Quelle solution est recommandée en première intention pour une déshydratation légère due à une diarrhée chez un patient capable de boire ?',
                'c' => [
                    'Solution de réhydratation orale',
                    'Boisson alcoolisée',
                    'Eau de mer',
                    'Solution hypertonique non prescrite',
                ],
                'a' => 0,
                'e' => 'La solution de réhydratation orale remplace eau et électrolytes perdus.',
            ],
            [
                'q' => 'Quel est le premier maillon de la chaîne de survie devant un arrêt cardiaque présumé ?',
                'c' => [
                    'Reconnaître l\'urgence et alerter',
                    'Attendre une heure',
                    'Donner à boire',
                    'Faire marcher la victime',
                ],
                'a' => 0,
                'e' => 'Reconnaître rapidement l\'arrêt et activer les secours permet de débuter la réanimation.',
            ],
            [
                'q' => 'Chez un adulte inconscient qui ne respire pas normalement, quelle action est indiquée après l\'alerte ?',
                'c' => [
                    'Commencer les compressions thoraciques',
                    'Lui donner un repas',
                    'Le faire asseoir',
                    'Attendre le réveil',
                ],
                'a' => 0,
                'e' => 'Les compressions thoraciques doivent débuter rapidement selon les recommandations de réanimation.',
            ],
            [
                'q' => 'Quelle fréquence de compressions thoraciques est recommandée chez l\'adulte ?',
                'c' => [
                    '40 à 60/min',
                    '100 à 120/min',
                    '150 à 180/min',
                    '200 à 220/min',
                ],
                'a' => 1,
                'e' => 'La fréquence recommandée est de 100 à 120 compressions par minute.',
            ],
            [
                'q' => 'Quelle mesure limite le risque d\'escarre chez un patient alité ?',
                'c' => [
                    'Repositionnement adapté',
                    'Immobilisation sans surveillance',
                    'Massage vigoureux d\'une rougeur persistante',
                    'Suppression des apports hydriques',
                ],
                'a' => 0,
                'e' => 'Le repositionnement et l\'évaluation cutanée font partie de la prévention.',
            ],
            [
                'q' => 'Quel est l\'objectif du triage aux urgences ?',
                'c' => [
                    'Classer selon la gravité et l\'urgence',
                    'Classer par ordre alphabétique',
                    'Faire passer les proches d\'abord',
                    'Éviter toute évaluation',
                ],
                'a' => 0,
                'e' => 'Le triage priorise les patients selon leurs besoins de soins urgents.',
            ],
            [
                'q' => 'Quelle est la première mesure devant une hémorragie externe importante accessible ?',
                'c' => [
                    'Compression directe adaptée',
                    'Appliquer de la chaleur',
                    'Faire boire le patient',
                    'Retirer systématiquement tous les pansements',
                ],
                'a' => 0,
                'e' => 'Une pression directe ferme aide à contrôler une hémorragie externe.',
            ],
            [
                'q' => 'Quel est l\'intérêt de l\'identitovigilance à l\'hôpital ?',
                'c' => [
                    'Prévenir les erreurs de patient',
                    'Réduire la durée des visites',
                    'Remplacer le consentement',
                    'Supprimer le dossier médical',
                ],
                'a' => 0,
                'e' => 'L\'identitovigilance sécurise les soins et les examens en évitant les erreurs d\'identité.',
            ],
            [
                'q' => 'Quel principe impose de ne pas divulguer les informations médicales à des tiers non autorisés ?',
                'c' => [
                    'Secret professionnel',
                    'Publicité',
                    'Libre diffusion',
                    'Traçabilité administrative seule',
                ],
                'a' => 0,
                'e' => 'Le secret professionnel protège la confidentialité des informations du patient.',
            ],
            [
                'q' => 'Quel élément est indispensable pour un consentement éclairé ?',
                'c' => [
                    'Information compréhensible sur le soin',
                    'Signature obtenue par menace',
                    'Absence de questions',
                    'Décision imposée sans urgence',
                ],
                'a' => 0,
                'e' => 'Le patient doit recevoir une information adaptée pour décider librement.',
            ],
            [
                'q' => 'Quelle pratique améliore la transmission entre équipes soignantes ?',
                'c' => [
                    'Transmission structurée et traçable',
                    'Communication uniquement orale sans vérification',
                    'Omission des allergies',
                    'Usage de surnoms non vérifiés',
                ],
                'a' => 0,
                'e' => 'Une transmission structurée réduit les omissions et les malentendus.',
            ],
            [
                'q' => 'Quel événement doit être déclaré selon la procédure de sécurité des soins ?',
                'c' => [
                    'Erreur médicamenteuse ou presque-accident',
                    'Changement de météo',
                    'Arrivée d\'un visiteur',
                    'Pause déjeuner',
                ],
                'a' => 0,
                'e' => 'Déclarer les incidents et presque-accidents favorise l\'amélioration de la sécurité.',
            ],
            [
                'q' => 'Quel signe évoque une réaction anaphylactique sévère ?',
                'c' => [
                    'Difficulté respiratoire avec hypotension',
                    'Faim isolée',
                    'Fatigue chronique seule',
                    'Douleur musculaire après sport uniquement',
                ],
                'a' => 0,
                'e' => 'Une atteinte respiratoire ou circulatoire après exposition allergénique impose une prise en charge urgente.',
            ],
            [
                'q' => 'Quelle est la voie recommandée pour l\'adrénaline en première intention dans l\'anaphylaxie ?',
                'c' => [
                    'Intramusculaire',
                    'Orale',
                    'Sous forme de collyre',
                    'Topique sur la peau',
                ],
                'a' => 0,
                'e' => 'L\'adrénaline intramusculaire est le traitement de première intention de l\'anaphylaxie.',
            ],
            [
                'q' => 'Quel signe oriente vers un accident vasculaire cérébral aigu ?',
                'c' => [
                    'Faiblesse brutale d\'un côté du corps',
                    'Douleur d\'ongle ancienne',
                    'Toux saisonnière isolée',
                    'Démangeaison chronique',
                ],
                'a' => 0,
                'e' => 'Un déficit neurologique focal soudain nécessite une évaluation urgente.',
            ],
            [
                'q' => 'Pourquoi noter l\'heure de début des symptômes d\'AVC ?',
                'c' => [
                    'Pour orienter les options thérapeutiques urgentes',
                    'Pour calculer la taille',
                    'Pour choisir le repas',
                    'Pour éviter l\'imagerie',
                ],
                'a' => 0,
                'e' => 'Le délai depuis le début des symptômes influence l\'éligibilité à certains traitements.',
            ],
            [
                'q' => 'Quel examen au lit du patient est utile devant une altération brutale de conscience ?',
                'c' => [
                    'Glycémie capillaire',
                    'Mesure de pointure',
                    'Test de vision des couleurs seul',
                    'Radiographie dentaire',
                ],
                'a' => 0,
                'e' => 'Une hypo- ou hyperglycémie peut contribuer à une altération de conscience.',
            ],
            [
                'q' => 'Quel est le but principal de la surveillance de la diurèse chez un patient critique ?',
                'c' => [
                    'Évaluer notamment la perfusion rénale et l\'équilibre hydrique',
                    'Mesurer la température',
                    'Évaluer l\'acuité visuelle',
                    'Remplacer le bilan clinique',
                ],
                'a' => 0,
                'e' => 'La diurèse est un indicateur utile de l\'état hémodynamique et rénal.',
            ],
            [
                'q' => 'Quelle mesure contribue à prévenir la transmission du VIH en milieu de soins ?',
                'c' => [
                    'Précautions standard pour tous les patients',
                    'Isolement systématique de tous les patients VIH',
                    'Réutilisation des aiguilles',
                    'Absence de gants en cas de sang',
                ],
                'a' => 0,
                'e' => 'Les précautions standard s\'appliquent à tous les patients indépendamment du statut connu.',
            ],
            [
                'q' => 'Quelle infection est évitable par vaccination du personnel exposé au sang ?',
                'c' => [
                    'Hépatite B',
                    'Hépatite C par vaccin courant',
                    'VIH par vaccin courant',
                    'Paludisme par BCG',
                ],
                'a' => 0,
                'e' => 'La vaccination contre l\'hépatite B protège les professionnels exposés.',
            ],
            [
                'q' => 'Quel est le rôle d\'une enquête épidémiologique lors d\'une flambée ?',
                'c' => [
                    'Identifier cas, sources et chaînes de transmission',
                    'Choisir les couleurs des salles',
                    'Remplacer tous les soins',
                    'Éviter la collecte de données',
                ],
                'a' => 0,
                'e' => 'L\'enquête permet d\'orienter rapidement les mesures de contrôle.',
            ],
            [
                'q' => 'Quelle action relève de la prévention primaire ?',
                'c' => [
                    'Vaccination avant maladie',
                    'Rééducation après AVC',
                    'Traitement des complications',
                    'Dialyse d\'insuffisance rénale terminale',
                ],
                'a' => 0,
                'e' => 'La prévention primaire vise à éviter la survenue de la maladie.',
            ],
            [
                'q' => 'Quel exemple relève de la prévention secondaire ?',
                'c' => [
                    'Dépistage d\'une maladie asymptomatique',
                    'Vaccination avant exposition',
                    'Rééducation d\'une séquelle',
                    'Soins palliatifs',
                ],
                'a' => 0,
                'e' => 'La prévention secondaire vise une détection précoce pour limiter l\'évolution.',
            ],
            [
                'q' => 'Quel exemple relève de la prévention tertiaire ?',
                'c' => [
                    'Rééducation après une complication invalidante',
                    'Vaccination de routine',
                    'Distribution de moustiquaires avant infection',
                    'Conseil d\'hygiène à une personne saine',
                ],
                'a' => 0,
                'e' => 'La prévention tertiaire réduit les conséquences et incapacités d\'une maladie existante.',
            ],
            [
                'q' => 'Quelle approche favorise l\'éducation thérapeutique ?',
                'c' => [
                    'Objectifs construits avec le patient',
                    'Ordres sans explication',
                    'Information volontairement contradictoire',
                    'Exclusion de toute question',
                ],
                'a' => 0,
                'e' => 'La participation active du patient améliore la compréhension et l\'autogestion.',
            ],
            [
                'q' => 'Quelle pratique contribue à prévenir les erreurs de transfusion ?',
                'c' => [
                    'Vérification rigoureuse de l\'identité et de la compatibilité',
                    'Se fier au numéro du lit seul',
                    'Omettre les contrôles',
                    'Échanger les poches entre patients',
                ],
                'a' => 0,
                'e' => 'L\'identification et les contrôles de compatibilité sont essentiels avant transfusion.',
            ],
            [
                'q' => 'Quelle attitude est correcte devant une suspicion de réaction transfusionnelle aiguë ?',
                'c' => [
                    'Arrêter immédiatement la transfusion et alerter',
                    'Accélérer le débit',
                    'Ignorer les signes',
                    'Changer simplement de chambre',
                ],
                'a' => 0,
                'e' => 'L\'arrêt immédiat et l\'évaluation urgente sont nécessaires en cas de réaction suspectée.',
            ],
            [
                'q' => 'Quel est le rôle principal de la traçabilité des soins ?',
                'c' => [
                    'Assurer continuité, qualité et responsabilité',
                    'Remplacer toute communication',
                    'Éviter la vérification des traitements',
                    'Supprimer le consentement',
                ],
                'a' => 0,
                'e' => 'La documentation permet de suivre les actes, observations et décisions.',
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
