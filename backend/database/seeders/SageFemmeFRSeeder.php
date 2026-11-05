<?php

namespace Database\Seeders;

use Database\Seeders\Support\HealthQcmSeeder;

/**
 * FR practice quiz for Concours Santé, with 50 questions.
 * Uses the existing subject with slug sage-femme-fr.
 * The source calls for review before publication. New quizzes start inactive.
 */
class SageFemmeFRSeeder extends HealthQcmSeeder
{
    public function definition(): array
    {
        $subjectSlug = 'sage-femme-fr';
        $quizSlug = 'health-competition-sage-femme-fr-qcm-01';
        $title = 'Sage-femme — QCM 01 (50 questions)';
        $description = 'QCM de préparation aux concours de la santé au Maroc.';

        // a is the zero-based index of the single correct choice.
        $questions = [
            [
                'q' => 'Quel signe confirme le plus directement une grossesse évolutive intra-utérine à l\'échographie ?',
                'c' => [
                    'Visualisation d\'un embryon intra-utérin avec activité cardiaque',
                    'Dosage isolé de la progestérone',
                    'Nausées matinales seules',
                    'Absence de règles seule',
                ],
                'a' => 0,
                'e' => 'L\'activité cardiaque embryonnaire intra-utérine confirme la viabilité au moment de l\'examen.',
            ],
            [
                'q' => 'À partir de quelle durée d\'aménorrhée parle-t-on habituellement de grossesse à terme ?',
                'c' => [
                    '35 semaines d\'aménorrhée',
                    '28 semaines d\'aménorrhée',
                    '32 semaines d\'aménorrhée',
                    '37 semaines d\'aménorrhée',
                ],
                'a' => 3,
                'e' => 'La période à terme débute à 37 SA; le terme précoce correspond à 37–38 SA.',
            ],
            [
                'q' => 'Quel examen est essentiel pour dépister une hypertension gravidique à chaque consultation ?',
                'c' => [
                    'Radiographie thoracique systématique',
                    'Mesure de la taille maternelle',
                    'Test de vision des couleurs',
                    'Mesure de la pression artérielle',
                ],
                'a' => 3,
                'e' => 'La pression artérielle doit être surveillée pendant la grossesse.',
            ],
            [
                'q' => 'Quelle valeur tensionnelle évoque une hypertension pendant la grossesse ?',
                'c' => [
                    'Au moins 110/70 mmHg',
                    'Au moins 140/90 mmHg',
                    'Au moins 120/80 mmHg',
                    'Au moins 100/60 mmHg',
                ],
                'a' => 1,
                'e' => 'Une PA systolique ≥140 ou diastolique ≥90 mmHg doit être confirmée selon le contexte.',
            ],
            [
                'q' => 'Quel signe impose une évaluation urgente pour une prééclampsie sévère ?',
                'c' => [
                    'Fatigue après marche',
                    'Céphalée intense persistante avec troubles visuels',
                    'Nausée légère isolée',
                    'Appétit augmenté',
                ],
                'a' => 1,
                'e' => 'Les symptômes neurologiques peuvent annoncer une complication grave.',
            ],
            [
                'q' => 'Quel médicament prévient et traite les convulsions de l\'éclampsie ?',
                'c' => [
                    'Vitamine C',
                    'Paracétamol',
                    'Fer oral',
                    'Sulfate de magnésium',
                ],
                'a' => 3,
                'e' => 'Le sulfate de magnésium est l\'anticonvulsivant de référence dans l\'éclampsie.',
            ],
            [
                'q' => 'Quel paramètre doit être surveillé pendant une perfusion de sulfate de magnésium ?',
                'c' => [
                    'Couleur des cheveux',
                    'Réflexes ostéotendineux et fréquence respiratoire',
                    'Température ambiante seule',
                    'Acuité auditive seule',
                ],
                'a' => 1,
                'e' => 'La surveillance clinique et de la diurèse aide à détecter la toxicité magnésienne.',
            ],
            [
                'q' => 'Quelle est la cause la plus fréquente d\'hémorragie du post-partum immédiat ?',
                'c' => [
                    'Appendicite',
                    'Atonie utérine',
                    'Calcul rénal',
                    'Rupture splénique',
                ],
                'a' => 1,
                'e' => 'L\'atonie empêche une contraction efficace du myomètre après la délivrance.',
            ],
            [
                'q' => 'Quel utérotonique est recommandé en première intention pour prévenir l\'hémorragie du post-partum ?',
                'c' => [
                    'Amoxicilline',
                    'Insuline',
                    'Diazépam',
                    'Ocytocine',
                ],
                'a' => 3,
                'e' => 'L\'ocytocine est l\'utérotonique de référence lorsqu\'elle est disponible et de qualité.',
            ],
            [
                'q' => 'Quel geste initial est approprié devant une hémorragie du post-partum avec utérus mou ?',
                'c' => [
                    'Retirer la voie veineuse',
                    'Attendre une heure sans surveillance',
                    'Faire marcher la patiente',
                    'Alerter et effectuer un massage utérin en débutant la prise en charge',
                ],
                'a' => 3,
                'e' => 'L\'hémorragie impose une réponse coordonnée immédiate, incluant les mesures utérotoniques.',
            ],
            [
                'q' => 'Quel médicament antifibrinolytique doit être administré précocement en cas d\'hémorragie du post-partum diagnostiquée ?',
                'c' => [
                    'Acide folique',
                    'Acide ascorbique',
                    'Acide acétylsalicylique',
                    'Acide tranexamique',
                ],
                'a' => 3,
                'e' => 'L\'acide tranexamique est recommandé rapidement, idéalement dans les trois heures après la naissance.',
            ],
            [
                'q' => 'Quelle situation évoque un placenta prævia ?',
                'c' => [
                    'Douleur de fosse iliaque droite avec fièvre',
                    'Prurit des mains isolé',
                    'Saignement vaginal indolore au troisième trimestre',
                    'Toux sèche isolée',
                ],
                'a' => 2,
                'e' => 'Le placenta prævia peut provoquer un saignement indolore; le diagnostic repose sur l\'échographie.',
            ],
            [
                'q' => 'Quelle précaution prendre avant un toucher vaginal en cas de saignement du troisième trimestre ?',
                'c' => [
                    'Faire boire beaucoup d\'eau',
                    'Mesurer la glycémie seulement',
                    'Donner systématiquement un laxatif',
                    'Écarter un placenta prævia par échographie',
                ],
                'a' => 3,
                'e' => 'Le toucher vaginal digital peut aggraver une hémorragie liée au placenta prævia.',
            ],
            [
                'q' => 'Quel tableau est évocateur d\'un décollement placentaire prématuré ?',
                'c' => [
                    'Saignement indolore isolé avec utérus souple',
                    'Brûlures mictionnelles seules',
                    'Rhinite allergique',
                    'Douleur abdominale avec utérus contracturé et saignement possible',
                ],
                'a' => 3,
                'e' => 'L\'hématome rétroplacentaire peut provoquer douleur, hypertonie utérine et souffrance fœtale.',
            ],
            [
                'q' => 'Quelle est la présentation fœtale la plus fréquente à terme ?',
                'c' => [
                    'Face',
                    'Céphalique du sommet',
                    'Front',
                    'Transverse',
                ],
                'a' => 1,
                'e' => 'La présentation céphalique du sommet est la plus habituelle.',
            ],
            [
                'q' => 'Quelle plage correspond à une fréquence cardiaque fœtale de base habituellement normale ?',
                'c' => [
                    '170 à 210 battements/min',
                    '30 à 50 battements/min',
                    '110 à 160 battements/min',
                    '60 à 90 battements/min',
                ],
                'a' => 2,
                'e' => 'Une ligne de base entre 110 et 160 bpm est généralement considérée normale.',
            ],
            [
                'q' => 'Quel outil permet de suivre la dilatation cervicale et la progression du travail ?',
                'c' => [
                    'Spiromètre',
                    'Courbe de glycémie',
                    'Audiogramme',
                    'Partogramme',
                ],
                'a' => 3,
                'e' => 'Le partogramme consigne l\'évolution du travail et la surveillance materno-fœtale.',
            ],
            [
                'q' => 'Quelle est la définition de la rupture prématurée des membranes avant travail ?',
                'c' => [
                    'Expulsion du placenta',
                    'Rupture après la naissance',
                    'Rupture des membranes avant le début du travail',
                    'Dilatation complète du col',
                ],
                'a' => 2,
                'e' => 'La rupture prématurée des membranes précède l\'installation du travail.',
            ],
            [
                'q' => 'Quel signe doit faire suspecter une infection intra-amniotique ?',
                'c' => [
                    'Appétit conservé',
                    'Fièvre maternelle avec tachycardie fœtale',
                    'Mouvements fœtaux habituels seuls',
                    'Sommeil maternel normal',
                ],
                'a' => 1,
                'e' => 'La fièvre associée à d\'autres signes cliniques nécessite une évaluation rapide.',
            ],
            [
                'q' => 'Quel examen biologique permet de dépister une anémie pendant la grossesse ?',
                'c' => [
                    'Dosage des troponines',
                    'Dosage de la lipase',
                    'Test de Coombs direct seul',
                    'Dosage de l\'hémoglobine',
                ],
                'a' => 3,
                'e' => 'L\'hémoglobine permet le dépistage de l\'anémie maternelle.',
            ],
            [
                'q' => 'Quelle supplémentation est recommandée avant la conception et au début de la grossesse pour prévenir les anomalies du tube neural ?',
                'c' => [
                    'Iode radioactif',
                    'Acide folique',
                    'Vitamine K uniquement',
                    'Vitamine A à forte dose',
                ],
                'a' => 1,
                'e' => 'L\'acide folique réduit le risque d\'anomalies de fermeture du tube neural.',
            ],
            [
                'q' => 'Quel examen est utilisé pour le dépistage du diabète gestationnel selon le protocole retenu ?',
                'c' => [
                    'Dosage des D-dimères',
                    'Hyperglycémie provoquée par voie orale',
                    'Ionogramme urinaire seul',
                    'Test de grossesse urinaire',
                ],
                'a' => 1,
                'e' => 'L\'HGPO est utilisée pour dépister ou diagnostiquer le diabète gestationnel selon les recommandations.',
            ],
            [
                'q' => 'Quel groupe sanguin maternel justifie une attention particulière à l\'immunisation anti-D ?',
                'c' => [
                    'Groupe A positif uniquement',
                    'Groupe AB positif uniquement',
                    'RhD négatif',
                    'Groupe O positif uniquement',
                ],
                'a' => 2,
                'e' => 'Une femme RhD négatif non immunisée peut nécessiter une prophylaxie anti-D selon les indications.',
            ],
            [
                'q' => 'Quel test permet de rechercher des anticorps anti-érythrocytaires maternels ?',
                'c' => [
                    'Recherche d\'agglutinines irrégulières (RAI)',
                    'Glycémie à jeun',
                    'ECBU',
                    'Test de Widal',
                ],
                'a' => 0,
                'e' => 'La RAI identifie les anticorps pouvant entraîner une maladie hémolytique fœtale.',
            ],
            [
                'q' => 'Quelle mesure réduit le risque de transmission mère-enfant du VIH ?',
                'c' => [
                    'Arrêt systématique de toute consultation',
                    'Supplémentation en calcium seule',
                    'Vaccination antitétanique seule',
                    'Traitement antirétroviral maternel adapté',
                ],
                'a' => 3,
                'e' => 'Un traitement antirétroviral efficace diminue fortement le risque de transmission verticale.',
            ],
            [
                'q' => 'Quel est le premier geste de routine chez un nouveau-né vigoureux après la naissance ?',
                'c' => [
                    'Donner immédiatement de l\'eau sucrée',
                    'Séparer systématiquement de sa mère',
                    'Sécher et maintenir au chaud avec contact peau à peau',
                    'Aspirer systématiquement les voies aériennes',
                ],
                'a' => 2,
                'e' => 'Le séchage, la chaleur et le peau-à-peau favorisent l\'adaptation néonatale.',
            ],
            [
                'q' => 'À quel moment le clampage du cordon est-il généralement recommandé chez un nouveau-né ne nécessitant pas de réanimation immédiate ?',
                'c' => [
                    'Après au moins une minute si les conditions le permettent',
                    'Après six heures',
                    'Toujours dans la première seconde',
                    'Avant la sortie complète du bébé',
                ],
                'a' => 0,
                'e' => 'Le clampage retardé améliore les réserves en fer chez le nouveau-né.',
            ],
            [
                'q' => 'Quel score évalue l\'adaptation du nouveau-né à 1 et 5 minutes ?',
                'c' => [
                    'Score de Glasgow',
                    'Score d\'Apgar',
                    'Score de Wells',
                    'Score de Bishop',
                ],
                'a' => 1,
                'e' => 'Le score d\'Apgar décrit cinq paramètres cliniques après la naissance.',
            ],
            [
                'q' => 'Quel signe nécessite une ventilation en pression positive chez un nouveau-né après les gestes initiaux ?',
                'c' => [
                    'Apnée ou respiration agonique',
                    'Cri vigoureux',
                    'Respiration régulière',
                    'Tonus normal avec bonne respiration',
                ],
                'a' => 0,
                'e' => 'L\'apnée ou le gasping nécessitent une ventilation rapide selon l\'algorithme de réanimation néonatale.',
            ],
            [
                'q' => 'Quel est le principal moyen de prévenir l\'hypothermie du nouveau-né ?',
                'c' => [
                    'Bain froid immédiat',
                    'Séchage immédiat et maintien au chaud',
                    'Exposer le bébé à un courant d\'air',
                    'Laisser le bébé mouillé',
                ],
                'a' => 1,
                'e' => 'Le nouveau-né perd rapidement de la chaleur par évaporation et convection.',
            ],
            [
                'q' => 'Quand recommande-t-on d\'initier l\'allaitement chez une mère et un nouveau-né stables ?',
                'c' => [
                    'Après 24 heures obligatoirement',
                    'Après trois jours',
                    'Uniquement après le retour à domicile',
                    'Dans la première heure après la naissance',
                ],
                'a' => 3,
                'e' => 'L\'initiation précoce de l\'allaitement favorise la nutrition et le lien mère-enfant.',
            ],
            [
                'q' => 'Quelle est la recommandation générale d\'allaitement exclusif du nourrisson ?',
                'c' => [
                    'Pendant un mois uniquement',
                    'Pendant une semaine',
                    'Pendant deux ans sans aliments complémentaires',
                    'Pendant les six premiers mois',
                ],
                'a' => 3,
                'e' => 'L\'OMS recommande l\'allaitement exclusif pendant six mois, puis une alimentation complémentaire adaptée.',
            ],
            [
                'q' => 'Quel symptôme post-partum évoque une endométrite ?',
                'c' => [
                    'Soif après allaitement',
                    'Prurit isolé des jambes',
                    'Somnolence après une nuit courte',
                    'Fièvre avec douleur utérine et lochies malodorantes',
                ],
                'a' => 3,
                'e' => 'L\'association fièvre, sensibilité utérine et lochies anormales évoque une infection utérine.',
            ],
            [
                'q' => 'Quelle méthode de contraception protège aussi contre les infections sexuellement transmissibles ?',
                'c' => [
                    'Pilule combinée',
                    'Dispositif intra-utérin au cuivre',
                    'Implant progestatif',
                    'Préservatif',
                ],
                'a' => 3,
                'e' => 'Le préservatif réduit le risque d\'IST lorsqu\'il est utilisé correctement.',
            ],
            [
                'q' => 'Quel signe fait suspecter une grossesse extra-utérine compliquée ?',
                'c' => [
                    'Douleur pelvienne aiguë avec malaise et hypotension',
                    'Appétit augmenté',
                    'Rhinorrhée isolée',
                    'Prurit du cuir chevelu',
                ],
                'a' => 0,
                'e' => 'Une grossesse extra-utérine rompue peut entraîner une hémorragie interne menaçant la vie.',
            ],
            [
                'q' => 'Quel examen est prioritaire devant une femme en âge de procréer avec douleur pelvienne et retard de règles ?',
                'c' => [
                    'Test auditif',
                    'Radiographie du genou',
                    'Dosage du cholestérol seul',
                    'Test de grossesse',
                ],
                'a' => 3,
                'e' => 'La recherche de grossesse oriente rapidement l\'évaluation d\'une douleur pelvienne.',
            ],
            [
                'q' => 'Quel signe évoque une dystocie des épaules après sortie de la tête ?',
                'c' => [
                    'Rétraction de la tête contre le périnée (signe de la tortue)',
                    'Hoquet fœtal',
                    'Expulsion immédiate du placenta',
                    'Éternuement maternel',
                ],
                'a' => 0,
                'e' => 'Le signe de la tortue peut signaler un blocage des épaules nécessitant une aide urgente.',
            ],
            [
                'q' => 'Quelle manœuvre est utilisée en première ligne lors d\'une dystocie des épaules ?',
                'c' => [
                    'Traction excessive sur la tête',
                    'Manœuvre de McRoberts',
                    'Attente passive prolongée',
                    'Pression fundique forte',
                ],
                'a' => 1,
                'e' => 'McRoberts est une manœuvre initiale recommandée; la pression fundique est à éviter.',
            ],
            [
                'q' => 'Quelle conduite est prioritaire en cas de procidence du cordon ombilical avec fœtus vivant ?',
                'c' => [
                    'Attendre le prochain contrôle',
                    'Administrer uniquement du fer',
                    'Alerter, soulager la compression et organiser l\'extraction urgente',
                    'Faire marcher la patiente',
                ],
                'a' => 2,
                'e' => 'La procidence du cordon est une urgence obstétricale nécessitant de limiter la compression.',
            ],
            [
                'q' => 'Quelle infection maternelle nécessite un dépistage sérologique pour prévenir la syphilis congénitale ?',
                'c' => [
                    'Syphilis',
                    'Rhinite virale banale',
                    'Mycose cutanée superficielle',
                    'Conjonctivite allergique',
                ],
                'a' => 0,
                'e' => 'Le dépistage et le traitement de la syphilis pendant la grossesse préviennent les complications fœtales.',
            ],
            [
                'q' => 'Quelle est la position conseillée pour réduire une compression aorto-cave chez une femme enceinte avancée ?',
                'c' => [
                    'Décubitus dorsal strict prolongé',
                    'Station debout immobile',
                    'Position ventrale forcée',
                    'Décubitus latéral gauche',
                ],
                'a' => 3,
                'e' => 'La latéralisation gauche peut améliorer le retour veineux en fin de grossesse.',
            ],
            [
                'q' => 'Quel examen confirme la présentation du siège avant l\'accouchement ?',
                'c' => [
                    'Radiographie du poignet',
                    'Bandelette urinaire seule',
                    'Électrocardiogramme',
                    'Échographie obstétricale',
                ],
                'a' => 3,
                'e' => 'L\'échographie précise la présentation et les éléments utiles à la planification de l\'accouchement.',
            ],
            [
                'q' => 'Quelle mesure est essentielle pour prévenir l\'infection lors d\'un accouchement ?',
                'c' => [
                    'Absence de nettoyage des surfaces',
                    'Hygiène des mains et technique aseptique',
                    'Port de bijoux pendant les gestes',
                    'Réutilisation de gants à usage unique',
                ],
                'a' => 1,
                'e' => 'L\'hygiène des mains et l\'asepsie limitent les infections associées aux soins.',
            ],
            [
                'q' => 'Quel symptôme maternel nécessite une consultation urgente après le retour à domicile ?',
                'c' => [
                    'Soif après allaitement',
                    'Fatigue légère transitoire',
                    'Saignement abondant avec vertiges',
                    'Douleur musculaire légère isolée',
                ],
                'a' => 2,
                'e' => 'Une hémorragie secondaire peut provoquer une instabilité hémodynamique.',
            ],
            [
                'q' => 'Quel paramètre est indispensable pour évaluer l\'état de choc chez une parturiente ?',
                'c' => [
                    'Couleur des cheveux',
                    'Pression artérielle et fréquence cardiaque',
                    'Taille du lit',
                    'Pointure',
                ],
                'a' => 1,
                'e' => 'Les constantes hémodynamiques sont essentielles pour identifier une instabilité.',
            ],
            [
                'q' => 'Quelle est la première étape de prise en charge d\'une femme enceinte inconsciente ?',
                'c' => [
                    'Commencer un questionnaire administratif',
                    'Évaluer les voies aériennes, la respiration et la circulation et appeler de l\'aide',
                    'Administrer immédiatement un repas',
                    'Attendre le réveil sans contrôle',
                ],
                'a' => 1,
                'e' => 'L\'approche ABC et l\'appel à l\'aide priment dans toute urgence vitale.',
            ],
            [
                'q' => 'Quel signe du nouveau-né impose une évaluation urgente après la sortie de maternité ?',
                'c' => [
                    'Sommeil entre les tétées',
                    'Difficulté respiratoire avec tirage',
                    'Éternuement occasionnel',
                    'Hoquet isolé',
                ],
                'a' => 1,
                'e' => 'Le tirage et la détresse respiratoire sont des signes de danger néonatal.',
            ],
            [
                'q' => 'Quel signe évoque une mastite lactationnelle ?',
                'c' => [
                    'Prurit des pieds',
                    'Douleur du genou isolée',
                    'Rhinite allergique',
                    'Douleur mammaire localisée avec rougeur et fièvre',
                ],
                'a' => 3,
                'e' => 'La mastite peut provoquer une inflammation douloureuse du sein et des signes généraux.',
            ],
            [
                'q' => 'Quelle attitude respecte le consentement éclairé pendant les soins obstétricaux ?',
                'c' => [
                    'Ignorer les questions',
                    'Partager le dossier sans justification',
                    'Expliquer le geste et obtenir l\'accord de la patiente',
                    'Réaliser le geste sans information',
                ],
                'a' => 2,
                'e' => 'L\'information et le consentement sont des éléments essentiels de soins respectueux.',
            ],
            [
                'q' => 'Quel signe évoque une dépression du post-partum nécessitant une évaluation ?',
                'c' => [
                    'Fatigue d\'une seule nuit',
                    'Faim après l\'accouchement',
                    'Émotion passagère isolée',
                    'Tristesse persistante avec perte d\'intérêt et retentissement fonctionnel',
                ],
                'a' => 3,
                'e' => 'Des symptômes persistants et invalidants justifient un dépistage et une orientation.',
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
