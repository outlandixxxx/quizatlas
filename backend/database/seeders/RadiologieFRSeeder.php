<?php

namespace Database\Seeders;

use Database\Seeders\Support\HealthQcmSeeder;

/**
 * FR practice quiz for Concours Santé, with 50 questions.
 * Uses the existing subject with slug technicien-radiologie-fr.
 */
class RadiologieFRSeeder extends HealthQcmSeeder
{
    public function definition(): array
    {
        $subjectSlug = 'technicien-radiologie-fr';
        $quizSlug = 'health-competition-technicien-radiologie-fr-qcm-01';
        $title = 'Technicien de radiologie — Concours Santé — QCM 01';
        $description = 'QCM de préparation aux concours de la santé au Maroc.';

        // a is the zero-based index of the single correct choice.
        $questions = [
            [
                'q' => 'Quelle région anatomique explore principalement l\'incidence fémoro-patellaire axiale ?',
                'c' => [
                    'L’articulation sacro-iliaque',
                    'La charnière cervico-occipitale',
                    'La hanche',
                    'L’articulation fémoro-patellaire',
                ],
                'a' => 3,
                'e' => 'L\'incidence axiale de la rotule montre ses rapports avec la trochlée fémorale.',
            ],
            [
                'q' => 'Quel dispositif nécessite une vérification formelle de compatibilité avant l\'entrée en salle d\'IRM ?',
                'c' => [
                    'Un stimulateur cardiaque implanté',
                    'Une lentille de contact souple',
                    'Un tensiomètre manuel resté hors salle',
                    'Une prothèse dentaire amovible retirée',
                ],
                'a' => 0,
                'e' => 'Un stimulateur cardiaque doit être identifié et vérifié selon son statut IRM et un protocole spécialisé; tous les implants ne sont pas automatiquement interdits.',
            ],
            [
                'q' => 'Pour rechercher correctement le déplacement d\'une fracture de la jambe, quel ensemble d\'incidences est habituellement nécessaire ?',
                'c' => [
                    'Une incidence oblique unique',
                    'Une incidence de face centrée sur la fracture',
                    'Deux incidences orthogonales face et profil',
                    'Un cliché du membre controlatéral uniquement',
                ],
                'a' => 2,
                'e' => 'Deux projections perpendiculaires mettent en évidence un déplacement qui peut être masqué sur une seule vue.',
            ],
            [
                'q' => 'Lors de la radiographie d\'un os long après traumatisme, quelle couverture est généralement recherchée ?',
                'c' => [
                    'Uniquement la zone cutanée douloureuse',
                    'Le membre opposé seulement',
                    'L’os et les articulations adjacentes si indiqué',
                    'Seulement une des deux extrémités osseuses',
                ],
                'a' => 2,
                'e' => 'L\'étude doit rechercher les lésions associées aux articulations proches; pour la jambe, cela inclut souvent genou et cheville.',
            ],
            [
                'q' => 'Quelle mesure réduit directement l\'exposition inutile lors d\'une radiographie du bassin chez un nourrisson ?',
                'c' => [
                    'Adapter la collimation au bassin',
                    'Répéter l’examen par précaution',
                    'Élargir le champ à tout l’abdomen',
                    'Utiliser systématiquement la scopie continue',
                ],
                'a' => 0,
                'e' => 'Une collimation adaptée limite les tissus irradiés et contribue à l\'optimisation de la dose pédiatrique.',
            ],
            [
                'q' => 'Pour une radiographie standard de face de l\'épaule en incidence antéro-postérieure, où se trouve généralement le détecteur ?',
                'c' => [
                    'Derrière l’épaule examinée',
                    'En regard du rachis lombaire',
                    'Devant l’épaule examinée',
                    'Au niveau de l’aisselle opposée',
                ],
                'a' => 0,
                'e' => 'En incidence AP, le faisceau traverse de l\'avant vers l\'arrière et le détecteur est placé derrière l\'épaule.',
            ],
            [
                'q' => 'Dans l\'urographie intraveineuse classique, quel type de produit permet l\'opacification des voies urinaires ?',
                'c' => [
                    'Une suspension de baryum par voie orale',
                    'Un traceur fluorescent cutané',
                    'Un produit iodé éliminé par les reins',
                    'Un gaz inhalé',
                ],
                'a' => 2,
                'e' => 'Le produit de contraste iodé intraveineux est filtré/excrété par les reins et opacifie l\'appareil excréteur.',
            ],
            [
                'q' => 'Avant un scanner avec injection intraveineuse de contraste, quelle vérification technique est essentielle ?',
                'c' => [
                    'La réalisation d’une acquisition avant toute vérification de la voie',
                    'La présence d’un accès veineux adapté et perméable',
                    'L’injection malgré une résistance au rinçage de la voie',
                    'La mise en place du cathéter après le début de l’injection',
                ],
                'a' => 1,
                'e' => 'L\'accès veineux doit être testé et adapté au débit de l\'injecteur pour réduire notamment les risques d\'extravasation.',
            ],
            [
                'q' => 'L\'incidence de Blondeau est principalement utilisée pour étudier quelle structure ?',
                'c' => [
                    'Le bassin osseux',
                    'La rotule',
                    'Le massif facial et les sinus maxillaires',
                    'Le rachis lombaire',
                ],
                'a' => 2,
                'e' => 'L\'incidence occipito-mentonnière dite de Blondeau est une projection classique des sinus maxillaires.',
            ],
            [
                'q' => 'Quel examen est habituellement indiqué en première intention pour rechercher une hémorragie intracrânienne aiguë après traumatisme crânien ?',
                'c' => [
                    'Une artériographie cérébrale invasive systématique',
                    'Une IRM cérébrale différée',
                    'Un scanner cérébral sans injection',
                    'Une radiographie simple du crâne',
                ],
                'a' => 2,
                'e' => 'Le scanner sans injection détecte rapidement une hémorragie aiguë; le contraste n\'est pas requis pour cette recherche initiale.',
            ],
            [
                'q' => 'Quel objectif diagnostique correspond à une hystérosalpingographie (HSG) ?',
                'c' => [
                    'Étudier les artères pelviennes par angiographie',
                    'Étudier le parenchyme ovarien par ultrasons',
                    'Étudier la cavité utérine et la perméabilité tubaire',
                    'Mesurer la longueur du col utérin par IRM',
                ],
                'a' => 2,
                'e' => 'L\'HSG opacifie la cavité utérine et permet notamment l\'évaluation de la perméabilité des trompes dans un bilan de fertilité.',
            ],
            [
                'q' => 'Quelle énergie physique est utilisée pour produire une mammographie standard ?',
                'c' => [
                    'La lumière visible',
                    'Les rayons X',
                    'Les ondes radio seules',
                    'Les ultrasons',
                ],
                'a' => 1,
                'e' => 'La mammographie est une technique de radiographie à rayons X utilisant un faisceau adapté aux tissus mammaires.',
            ],
            [
                'q' => 'Quelle consigne est indispensable avant l\'accès en zone IRM ?',
                'c' => [
                    'Conserver son téléphone dans la poche',
                    'Retirer les objets ferromagnétiques et faire le questionnaire de sécurité',
                    'Boire systématiquement deux litres d’eau',
                    'Porter une montre métallique',
                ],
                'a' => 1,
                'e' => 'L\'aimant reste actif; le dépistage des implants et le retrait des objets dangereux préviennent les accidents de projectile.',
            ],
            [
                'q' => 'Quelle distance foyer-détecteur est couramment utilisée pour un cliché thoracique PA standard de l\'adulte debout ?',
                'c' => [
                    '180 cm',
                    '100 cm',
                    '30 cm',
                    '60 cm',
                ],
                'a' => 0,
                'e' => 'Une distance d\'environ 180 cm réduit notamment l\'agrandissement de l\'ombre cardiaque en incidence PA.',
            ],
            [
                'q' => 'À quel moment de la respiration réalise-t-on habituellement une radiographie thoracique standard de face ?',
                'c' => [
                    'Pendant la parole',
                    'À la fin d’une expiration forcée',
                    'En fin d’inspiration profonde',
                    'Pendant une toux',
                ],
                'a' => 2,
                'e' => 'Une inspiration profonde bloquée permet une bonne expansion pulmonaire et une lecture plus fiable.',
            ],
            [
                'q' => 'Un abdomen sans préparation (ASP) standard est réalisé avec quelle modalité ?',
                'c' => [
                    'Une séquence IRM pondérée T2',
                    'Une séquence IRM pondérée T1',
                    'Une acquisition échographique B-mode',
                    'Une acquisition radiographique aux rayons X',
                ],
                'a' => 3,
                'e' => 'L\'ASP est une radiographie conventionnelle de l\'abdomen; ses indications sont aujourd\'hui plus limitées du fait de l\'échographie et du scanner.',
            ],
            [
                'q' => 'Quel est l\'effet principal d\'une compression mammaire correctement effectuée ?',
                'c' => [
                    'Augmenter le flou de mouvement',
                    'Réduire l’épaisseur et le flou tout en améliorant l’image',
                    'Épaissir volontairement le sein',
                    'Remplacer le besoin de rayons X',
                ],
                'a' => 1,
                'e' => 'La compression étale les tissus, réduit leur épaisseur et favorise la netteté, tout en contribuant à limiter la dose.',
            ],
            [
                'q' => 'Quelle activité fait directement partie du rôle du technicien en radiologie avant l\'acquisition ?',
                'c' => [
                    'Rédiger le compte-rendu radiologique diagnostique',
                    'Expliquer l’examen et vérifier l’identité du patient',
                    'Modifier seul l’indication médicale de l’examen',
                    'Décider seul de la nécessité d’une injection non prescrite',
                ],
                'a' => 1,
                'e' => 'La préparation, l\'identitovigilance et l\'information du patient relèvent des responsabilités du technicien; l\'interprétation diagnostique relève du radiologue.',
            ],
            [
                'q' => 'La galactographie est une exploration radiologique de quelle structure ?',
                'c' => [
                    'Les canaux galactophores',
                    'Les uretères',
                    'Les canaux biliaires',
                    'Les bronches',
                ],
                'a' => 0,
                'e' => 'La galactographie opacifie les canaux galactophores, dans certaines indications d\'écoulement mamelonnaire.',
            ],
            [
                'q' => 'Quelle région explore une myélographie conventionnelle ?',
                'c' => [
                    'Les voies urinaires',
                    'Les veines des membres inférieurs',
                    'Les artères coronaires',
                    'L’espace sous-arachnoïdien rachidien',
                ],
                'a' => 3,
                'e' => 'La myélographie consiste à opacifier l\'espace sous-arachnoïdien spinal; elle n\'est pas une exploration veineuse.',
            ],
            [
                'q' => 'Quel est l\'objectif de la collimation du faisceau lors d\'une radiographie ?',
                'c' => [
                    'Supprimer toute diffusion secondaire',
                    'Augmenter systématiquement le champ exposé',
                    'Limiter l’irradiation aux régions nécessaires',
                    'Supprimer la nécessité de justification',
                ],
                'a' => 2,
                'e' => 'La collimation limite le volume irradié et réduit généralement la diffusion; elle ne la supprime pas totalement.',
            ],
            [
                'q' => 'Selon la loi de l\'inverse du carré, si la distance à une source ponctuelle double, l\'intensité reçue devient approximativement :',
                'c' => [
                    'Quatre fois plus grande',
                    'Le quart',
                    'Le double',
                    'La moitié',
                ],
                'a' => 1,
                'e' => 'Pour une source ponctuelle dans des conditions idéales, l\'intensité varie comme 1/d²; doubler la distance la divise par quatre.',
            ],
            [
                'q' => 'Quel rayonnement est produit après interaction du faisceau primaire avec le patient et constitue une source majeure d\'exposition du personnel ?',
                'c' => [
                    'Le rayonnement diffusé',
                    'Le rayonnement infrarouge',
                    'La lumière visible',
                    'Les ultrasons',
                ],
                'a' => 0,
                'e' => 'Le rayonnement diffusé, notamment de type Compton, constitue une grande partie de l\'exposition professionnelle près du patient.',
            ],
            [
                'q' => 'À kV et conditions identiques, que provoque approximativement un doublement du produit mAs en radiographie ?',
                'c' => [
                    'Une diminution systématique de la durée d’exposition',
                    'Une augmentation de la tension maximale (kVp)',
                    'Une diminution du nombre de photons émis',
                    'Une augmentation du nombre de photons émis',
                ],
                'a' => 3,
                'e' => 'Le mAs régule surtout la quantité de rayons X produits; le doublement augmente approximativement le nombre de photons et la dose à technique comparable.',
            ],
            [
                'q' => 'À quoi sert principalement une grille antidiffusante en radiographie conventionnelle ?',
                'c' => [
                    'À absorber une partie des photons diffusés avant le détecteur',
                    'À supprimer entièrement l’exposition du patient',
                    'À remplacer le diaphragme de collimation',
                    'À renforcer la production de photons au niveau du tube',
                ],
                'a' => 0,
                'e' => 'La grille améliore le contraste en retenant une partie du rayonnement diffusé; son utilisation peut nécessiter une exposition plus élevée.',
            ],
            [
                'q' => 'Quel changement réduit généralement l\'agrandissement géométrique d\'une structure radiographiée ?',
                'c' => [
                    'Réduire fortement la distance foyer-détecteur',
                    'Augmenter la distance objet-détecteur',
                    'Rapprocher l’objet du détecteur',
                    'Incliner le détecteur sans indication',
                ],
                'a' => 2,
                'e' => 'Réduire la distance objet-détecteur diminue habituellement le facteur d\'agrandissement.',
            ],
            [
                'q' => 'Avec quelle surface fémorale la face articulaire postérieure de la rotule s\'articule-t-elle ?',
                'c' => [
                    'La trochlée fémorale',
                    'Le grand trochanter',
                    'Le condyle tibial médial',
                    'La tête fémorale',
                ],
                'a' => 0,
                'e' => 'La face postérieure cartilagineuse de la rotule glisse sur la trochlée fémorale.',
            ],
            [
                'q' => 'Quel élément osseux appartient à l\'extrémité distale de l\'humérus ?',
                'c' => [
                    'La tête humérale',
                    'Le tubercule majeur',
                    'Le col anatomique de l’humérus',
                    'Le capitulum',
                ],
                'a' => 3,
                'e' => 'Le capitulum et la trochlée appartiennent à l\'extrémité distale de l\'humérus; les tubercules sont proximaux.',
            ],
            [
                'q' => 'Pour explorer une suspicion de fracture du scaphoïde avec clichés standards peu concluants, quelle mesure peut être utile ?',
                'c' => [
                    'Privilégier d’emblée une incidence axiale de la rotule',
                    'Ne radiographier que l’avant-bras',
                    'Réaliser une incidence dédiée du scaphoïde selon le protocole',
                    'Se limiter à une incidence de face du poignet',
                ],
                'a' => 2,
                'e' => 'Une incidence dédiée peut mieux dégager le scaphoïde; l\'imagerie complémentaire est discutée si la suspicion clinique persiste.',
            ],
            [
                'q' => 'Chez un patient avec suspicion de traumatisme instable du rachis cervical, quelle règle de positionnement est prioritaire ?',
                'c' => [
                    'Forcer l’extension cervicale pour une incidence de Hirtz',
                    'Conserver l’immobilisation et éviter les mobilisations dangereuses',
                    'Demander au patient une rotation maximale du cou',
                    'Retirer systématiquement le collier sans avis',
                ],
                'a' => 1,
                'e' => 'La priorité est la protection du rachis; les incidences nécessitant des mouvements dangereux sont évitées en cas de suspicion de lésion cervicale.',
            ],
            [
                'q' => 'Pour évaluer à la fois le parenchyme cérébral et les structures osseuses sur un scanner, quel réglage est utilisé ?',
                'c' => [
                    'Des fenêtres parenchymateuse et osseuse',
                    'Une fenêtre pulmonaire exclusive',
                    'Une fenêtre parenchymateuse exclusive pour étudier les fractures',
                    'Une fenêtre osseuse exclusive pour étudier toutes les lésions',
                ],
                'a' => 0,
                'e' => 'Des fenêtres d\'affichage différentes permettent d\'apprécier les tissus cérébraux et l\'os à partir des données tomodensitométriques.',
            ],
            [
                'q' => 'Quelle indication correspond principalement à l\'angioscanner injecté ?',
                'c' => [
                    'Évaluer l’épaisseur du cartilage sans injection',
                    'Étudier la circulation vasculaire et les vaisseaux',
                    'Mesurer uniquement la densité osseuse',
                    'Mesurer le débit sanguin au Doppler sans scanner',
                ],
                'a' => 1,
                'e' => 'L\'angioscanner exploite l\'opacification vasculaire par un produit iodé pour étudier le réseau artériel ou veineux.',
            ],
            [
                'q' => 'Quel avantage offre un scanner multidétecteur lors du post-traitement des images ?',
                'c' => [
                    'L’acquisition exclusivement en coupes frontales',
                    'La suppression systématique de la reconstruction 3D',
                    'La reconstruction multiplanaire sagittale et coronale',
                    'L’impossibilité de construire des vues sagittales',
                ],
                'a' => 2,
                'e' => 'Les données volumétriques du scanner permettent des reconstructions dans différents plans.',
            ],
            [
                'q' => 'Dans une séquence IRM T1 classique, quel tissu apparaît fréquemment hyperintense ?',
                'c' => [
                    'Le calcium compact',
                    'La graisse',
                    'L’air libre',
                    'L’os cortical',
                ],
                'a' => 1,
                'e' => 'La graisse apparaît souvent en hypersignal T1, sauf notamment lorsque la séquence applique une suppression de graisse.',
            ],
            [
                'q' => 'Quel aspect est typique de l\'eau libre sur une séquence IRM pondérée T2 classique ?',
                'c' => [
                    'Un hypersignal',
                    'Une disparition du champ magnétique',
                    'Une émission de rayons X',
                    'Un aspect toujours noir',
                ],
                'a' => 0,
                'e' => 'L\'eau libre est généralement en hypersignal T2, à distinguer de séquences telles que FLAIR qui suppriment le signal du liquide céphalorachidien.',
            ],
            [
                'q' => 'Quel antécédent doit attirer particulièrement l\'attention avant une nouvelle injection du même produit de contraste iodé ?',
                'c' => [
                    'Un antécédent d’allergie alimentaire isolée',
                    'Une allergie saisonnière sans réaction à un contraste',
                    'Une réaction d’hypersensibilité antérieure au produit iodé',
                    'Une intolérance digestive isolée au lactose',
                ],
                'a' => 2,
                'e' => 'Une réaction antérieure au même type de contraste est un facteur de risque important et nécessite une évaluation préalable adaptée.',
            ],
            [
                'q' => 'Pendant une injection de produit de contraste, une douleur et un gonflement apparaissent au point de ponction. Quel geste immédiat est indiqué ?',
                'c' => [
                    'Augmenter le débit pour finir vite',
                    'Arrêter l’injection et évaluer une extravasation',
                    'Poursuivre l’injection sans surveillance',
                    'Comprimer longuement en poursuivant l’injection',
                ],
                'a' => 1,
                'e' => 'La suspicion d\'extravasation impose l\'arrêt immédiat de l\'injection puis l\'évaluation et la prise en charge protocolisée.',
            ],
            [
                'q' => 'Après une injection de contraste, le patient présente stridor et détresse respiratoire. Quelle priorité s\'impose ?',
                'c' => [
                    'Laisser le patient seul pour se reposer',
                    'Terminer toutes les acquisitions avant d’agir',
                    'Lui proposer seulement de boire de l’eau',
                    'Prévenir immédiatement l’équipe d’urgence et appliquer le protocole de prise en charge',
                ],
                'a' => 3,
                'e' => 'Un stridor après contraste peut révéler une réaction sévère menaçant les voies aériennes; il faut une réponse d\'urgence immédiate.',
            ],
            [
                'q' => 'Quel paramètre aide à évaluer le risque rénal avant une injection iodée chez un patient à risque ?',
                'c' => [
                    'Le taux d’INR seul',
                    'Le débit de filtration glomérulaire estimé (DFGe)',
                    'La vitesse de sédimentation seule',
                    'Le taux d’hémoglobine seul',
                ],
                'a' => 1,
                'e' => 'Le DFGe et la présence éventuelle d\'une insuffisance rénale aiguë orientent l\'évaluation du risque et les précautions.',
            ],
            [
                'q' => 'Chez un patient prenant de la metformine, sans insuffisance rénale aiguë et avec DFGe ≥ 30 mL/min/1,73 m², quelle conduite recommande en général l\'ACR lors d\'un contraste iodé intraveineux ?',
                'c' => [
                    'Arrêter systématiquement la metformine pendant une semaine',
                    'Interdire toujours le scanner injecté',
                    'Remplacer obligatoirement la metformine par de l’insuline',
                    'Poursuivre la metformine sans arrêt obligatoire lié au contraste',
                ],
                'a' => 3,
                'e' => 'Selon l\'ACR, en l\'absence d\'IRA et avec DFGe ≥ 30, l\'arrêt systématique de la metformine pour injection iodée IV n\'est pas requis; les protocoles locaux restent à consulter.',
            ],
            [
                'q' => 'Quel radionucléide est largement utilisé dans les examens scintigraphiques diagnostiques courants ?',
                'c' => [
                    'Le technétium 99m',
                    'L’iridium 192 utilisé en curiethérapie',
                    'Le cobalt 60 utilisé en irradiation thérapeutique',
                    'L’iode 131 employé principalement en thérapie thyroïdienne',
                ],
                'a' => 0,
                'e' => 'Le technétium 99m est fréquemment employé comme traceur en médecine nucléaire diagnostique.',
            ],
            [
                'q' => 'Dans une scintigraphie conventionnelle, quel appareil détecte les photons gamma émis par le radiotraceur ?',
                'c' => [
                    'Le système Doppler vasculaire',
                    'Le récepteur de radiographie numérique',
                    'La caméra gamma',
                    'Le détecteur de mammographie',
                ],
                'a' => 2,
                'e' => 'La gamma-caméra utilise notamment un collimateur et un détecteur pour localiser les photons émis par le patient.',
            ],
            [
                'q' => 'À quoi sert principalement la scintigraphie rénale au DMSA marqué au technétium 99m ?',
                'c' => [
                    'L’exploration du cortex rénal et de ses cicatrices',
                    'La mesure immédiate de la pression artérielle',
                    'L’exploration exclusive des poumons',
                    'L’étude des valves cardiaques',
                ],
                'a' => 0,
                'e' => 'Le DMSA se fixe au parenchyme cortical rénal et aide notamment à visualiser des cicatrices corticales.',
            ],
            [
                'q' => 'Quel rôle joue le collimateur à trous parallèles placé devant une gamma-caméra ?',
                'c' => [
                    'Sélectionner les directions des photons gamma détectés',
                    'Accélérer les électrons du tube à rayons X',
                    'Produire un champ magnétique IRM',
                    'Supprimer la radioactivité du patient',
                ],
                'a' => 0,
                'e' => 'Le collimateur privilégie certains trajets de photons et contribue à la localisation spatiale du signal.',
            ],
            [
                'q' => 'Quel est l\'objectif essentiel d\'une radiothérapie palliative ?',
                'c' => [
                    'Guérir toujours les cancers métastatiques',
                    'Remplacer systématiquement la chirurgie curative',
                    'Soulager des symptômes et améliorer la qualité de vie',
                    'Prévenir exclusivement l’apparition de tout nouveau cancer',
                ],
                'a' => 2,
                'e' => 'La radiothérapie palliative vise surtout le contrôle des symptômes, par exemple les douleurs osseuses tumorales.',
            ],
            [
                'q' => 'Comment appelle-t-on l\'administration de radiothérapie et de chimiothérapie au cours de la même période thérapeutique ?',
                'c' => [
                    'Chimiothérapie adjuvante différée',
                    'Radiothérapie seule',
                    'Scintigraphie diagnostique',
                    'Radiochimiothérapie concomitante',
                ],
                'a' => 3,
                'e' => '« Concomitante » signifie que les deux modalités sont réalisées sur la même période selon le protocole oncologique.',
            ],
            [
                'q' => 'En curiethérapie à haut débit de dose, l\'iridium 192 est généralement employé sous quelle forme ?',
                'c' => [
                    'Un gel échographique',
                    'Une perfusion de glucose',
                    'Une capsule de baryum à boire',
                    'Une source scellée',
                ],
                'a' => 3,
                'e' => 'L\'Ir-192 est utilisé comme source radioactive scellée dans certains appareils de curiethérapie.',
            ],
            [
                'q' => 'Quel facteur physique influence directement les effets biologiques d\'une exposition aux rayonnements ionisants ?',
                'c' => [
                    'La largeur du chariot de transfert',
                    'La marque du détecteur numérique',
                    'La couleur de la gaine du câble',
                    'Le débit de dose',
                ],
                'a' => 3,
                'e' => 'À dose totale égale, le débit et le fractionnement peuvent modifier la réponse biologique des tissus.',
            ],
            [
                'q' => 'À propos d\'une exposition importante pendant une période sensible du développement embryonnaire, quel effet est considéré comme une réaction tissulaire à seuil ?',
                'c' => [
                    'Une augmentation de l’oxygénation sanguine',
                    'Une régénération garantie du tissu irradié',
                    'Une absence certaine de tout risque de cancer',
                    'Une malformation du développement',
                ],
                'a' => 3,
                'e' => 'À certaines périodes et au-delà de doses seuils, l\'irradiation peut entraîner des effets déterministes du développement; les effets cancérogènes sont d\'une autre nature.',
            ],
            [
                'q' => 'Avant un examen irradiant non urgent chez une patiente potentiellement enceinte, quelle démarche est appropriée ?',
                'c' => [
                    'Vérifier la situation et discuter la justification ou une alternative',
                    'Augmenter d’emblée les paramètres d’exposition',
                    'Ignorer l’éventualité d’une grossesse',
                    'Faire l’examen sans identification',
                ],
                'a' => 0,
                'e' => 'La vérification de grossesse lorsqu\'elle est pertinente permet d\'adapter ou reporter l\'examen, sans retarder les examens urgents justifiés.',
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
