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
 * Uses the existing subject with slug assistance-medico-sociale-fr.
 * The source calls for review before publication. New quizzes start inactive.
 */
class AssistanceMedicoSocialeFRSeeder extends Seeder
{
    public function run(): void
    {
        $subjectSlug = 'assistance-medico-sociale-fr';
        $quizSlug = 'assistance-medico-sociale-qcm-01-fr';
        $title = 'Assistance médico-sociale — QCM 01 (50 questions)';
        $description = 'QCM de préparation aux concours de la santé au Maroc.';

        // a is the zero-based index of the single correct choice.
        $questions = [
            [
                'q' => 'Quel est l\'objectif principal du diagnostic social individuel ?',
                'c' => [
                    'Identifier les besoins, ressources et difficultés de la personne',
                    'Prescrire un médicament',
                    'Remplacer le diagnostic médical',
                    'Décider sans consulter la personne',
                ],
                'a' => 0,
                'e' => 'Le diagnostic social fonde un accompagnement adapté à la situation.',
            ],
            [
                'q' => 'Quelle étape précède normalement l\'élaboration d\'un plan d\'accompagnement social ?',
                'c' => [
                    'Clôture immédiate du dossier',
                    'Orientation au hasard',
                    'Évaluation de la situation et des besoins',
                    'Publication des données personnelles',
                ],
                'a' => 2,
                'e' => 'Une évaluation partagée permet de fixer des objectifs pertinents.',
            ],
            [
                'q' => 'Quel principe exige de recueillir l\'accord éclairé de la personne avant une intervention non urgente ?',
                'c' => [
                    'Consentement libre et éclairé',
                    'Divulgation systématique',
                    'Décision unilatérale',
                    'Obligation de témoigner',
                ],
                'a' => 0,
                'e' => 'L\'accompagnement respecte la capacité de décision de la personne.',
            ],
            [
                'q' => 'Quel principe interdit de communiquer librement les informations privées d\'un usager ?',
                'c' => [
                    'Publicité du dossier',
                    'Libre accès à tous',
                    'Diffusion sur les réseaux sociaux',
                    'Confidentialité professionnelle',
                ],
                'a' => 3,
                'e' => 'Les informations sont partagées uniquement selon les règles et nécessités légitimes.',
            ],
            [
                'q' => 'Qu\'est-ce que l\'écoute active dans un entretien social ?',
                'c' => [
                    'Éviter les questions ouvertes',
                    'Interrompre fréquemment',
                    'Écouter, reformuler et vérifier la compréhension',
                    'Imposer son opinion',
                ],
                'a' => 2,
                'e' => 'La reformulation aide à comprendre les besoins exprimés.',
            ],
            [
                'q' => 'Quelle question favorise un récit libre pendant l\'entretien ?',
                'c' => [
                    'Une réponse imposée',
                    'Une question ouverte',
                    'Une question accusatrice',
                    'Une question contenant déjà la réponse',
                ],
                'a' => 1,
                'e' => 'Les questions ouvertes laissent la personne décrire sa situation.',
            ],
            [
                'q' => 'Quel est le rôle d\'une orientation sociale vers un partenaire ?',
                'c' => [
                    'Transférer sans information',
                    'Faciliter l\'accès au service adapté au besoin',
                    'Supprimer le suivi',
                    'Remplacer toutes les prestations médicales',
                ],
                'a' => 1,
                'e' => 'L\'orientation s\'appuie sur les besoins et les ressources disponibles.',
            ],
            [
                'q' => 'Que signifie une prise en charge pluridisciplinaire ?',
                'c' => [
                    'Coordination de professionnels de disciplines différentes',
                    'Absence de concertation',
                    'Intervention d\'une seule profession',
                    'Exclusion de l\'usager',
                ],
                'a' => 0,
                'e' => 'Les professionnels articulent leurs compétences autour de la personne.',
            ],
            [
                'q' => 'Quel est le but d\'une réunion de synthèse médico-sociale ?',
                'c' => [
                    'Supprimer les objectifs',
                    'Partager les éléments utiles pour coordonner le suivi',
                    'Éviter les décisions',
                    'Rendre le dossier public',
                ],
                'a' => 1,
                'e' => 'La synthèse aide à ajuster les interventions tout en respectant la confidentialité.',
            ],
            [
                'q' => 'Quel document consigne les objectifs et actions convenus avec la personne ?',
                'c' => [
                    'Facture sans objet',
                    'Ordonnance médicale fictive',
                    'Plan d\'accompagnement individualisé',
                    'Liste de visiteurs',
                ],
                'a' => 2,
                'e' => 'Le plan individualisé précise objectifs, moyens et suivi.',
            ],
            [
                'q' => 'Quelle démarche est prioritaire devant une personne exprimant des idées suicidaires immédiates ?',
                'c' => [
                    'Promettre le secret absolu',
                    'Alerter sans délai l\'équipe clinique et sécuriser la personne',
                    'Reporter au prochain rendez-vous',
                    'La laisser seule',
                ],
                'a' => 1,
                'e' => 'Une urgence suicidaire nécessite une évaluation et une protection immédiates.',
            ],
            [
                'q' => 'Face à une suspicion de violence envers un enfant, quelle attitude est appropriée ?',
                'c' => [
                    'Ignorer les indices',
                    'Interroger publiquement l\'enfant',
                    'Publier son identité',
                    'Activer la procédure de protection et de signalement applicable',
                ],
                'a' => 3,
                'e' => 'La protection de l\'enfant prime, selon les procédures et obligations applicables.',
            ],
            [
                'q' => 'Quel principe guide une intervention auprès d\'une personne victime de violence ?',
                'c' => [
                    'Divulgation publique',
                    'Pression pour retirer sa plainte',
                    'Sécurité, respect et absence de jugement',
                    'Culpabilisation',
                ],
                'a' => 2,
                'e' => 'L\'approche centrée sur la victime protège sa dignité et sa sécurité.',
            ],
            [
                'q' => 'Quel est un facteur de vulnérabilité sociale ?',
                'c' => [
                    'Logement sécurisé',
                    'Soutien familial suffisant',
                    'Accès stable aux droits',
                    'Isolement associé à une absence de ressources',
                ],
                'a' => 3,
                'e' => 'L\'isolement et la précarité peuvent accroître les difficultés d\'accès aux soins.',
            ],
            [
                'q' => 'Quel est l\'objectif de l\'éducation thérapeutique du patient ?',
                'c' => [
                    'Renforcer ses compétences pour gérer sa maladie',
                    'Supprimer le suivi',
                    'Remplacer toute consultation',
                    'Imposer des choix sans dialogue',
                ],
                'a' => 0,
                'e' => 'L\'éducation thérapeutique favorise l\'autonomie dans la gestion de la santé.',
            ],
            [
                'q' => 'Que signifie l\'autonomisation dans l\'accompagnement social ?',
                'c' => [
                    'Renforcer la capacité de la personne à agir et décider',
                    'Décider toujours à sa place',
                    'Écarter ses préférences',
                    'Créer une dépendance durable',
                ],
                'a' => 0,
                'e' => 'L\'autonomisation soutient le pouvoir d\'agir de l\'usager.',
            ],
            [
                'q' => 'Quel est l\'objectif principal de la médiation sociale ?',
                'c' => [
                    'Faciliter le dialogue et l\'accès aux solutions',
                    'Imposer une sanction',
                    'Aggraver le conflit',
                    'Remplacer le juge',
                ],
                'a' => 0,
                'e' => 'La médiation facilite la communication entre les parties.',
            ],
            [
                'q' => 'Dans un service hospitalier, que désigne la continuité des soins ?',
                'c' => [
                    'Multiplication des démarches inutiles',
                    'Absence de rupture injustifiée dans le parcours du patient',
                    'Absence de transmission',
                    'Arrêt du suivi à la sortie',
                ],
                'a' => 1,
                'e' => 'La continuité suppose coordination entre acteurs et étapes de soins.',
            ],
            [
                'q' => 'Quel outil permet de visualiser les liens familiaux sur plusieurs générations ?',
                'c' => [
                    'Électrocardiogramme',
                    'Radiographie',
                    'Hémogramme',
                    'Génogramme',
                ],
                'a' => 3,
                'e' => 'Le génogramme représente la structure et les relations familiales.',
            ],
            [
                'q' => 'Quel outil cartographie les relations d\'une personne avec les ressources de son environnement ?',
                'c' => [
                    'Thermomètre',
                    'Spiromètre',
                    'Électroencéphalogramme',
                    'Écocarte',
                ],
                'a' => 3,
                'e' => 'L\'écocarte montre les soutiens et tensions du réseau social.',
            ],
            [
                'q' => 'Quelle caractéristique définit un groupe de travail ?',
                'c' => [
                    'Isolement des membres',
                    'Refus de coordination',
                    'Objectif commun et répartition des rôles',
                    'Absence de but',
                ],
                'a' => 2,
                'e' => 'Un groupe organisé partage des objectifs et des responsabilités.',
            ],
            [
                'q' => 'Quelle étape du travail de groupe permet d\'évaluer les résultats obtenus ?',
                'c' => [
                    'Suppression des indicateurs',
                    'Évaluation finale',
                    'Recrutement sans objectif',
                    'Refus du bilan',
                ],
                'a' => 1,
                'e' => 'L\'évaluation compare les réalisations aux objectifs fixés.',
            ],
            [
                'q' => 'Quelle démarche décrit le travail social communautaire ?',
                'c' => [
                    'Décision sans consultation',
                    'Mobilisation collective autour de besoins partagés',
                    'Intervention isolée sans participation',
                    'Exclusion des habitants',
                ],
                'a' => 1,
                'e' => 'L\'action communautaire associe les personnes aux solutions locales.',
            ],
            [
                'q' => 'Quel indicateur peut mesurer l\'accès effectif à un service social ?',
                'c' => [
                    'Taille du bureau',
                    'Nombre de réunions sans résultat',
                    'Couleur du formulaire',
                    'Proportion de bénéficiaires ayant reçu la prestation',
                ],
                'a' => 3,
                'e' => 'Un indicateur d\'accès mesure l\'utilisation réelle du service.',
            ],
            [
                'q' => 'Que mesure la prévalence en épidémiologie ?',
                'c' => [
                    'Uniquement les nouveaux cas',
                    'Uniquement les décès',
                    'Nombre de lits',
                    'Ensemble des cas existants dans une population définie',
                ],
                'a' => 3,
                'e' => 'La prévalence décrit la fréquence des cas existants à un moment ou sur une période.',
            ],
            [
                'q' => 'Que mesure l\'incidence d\'une maladie ?',
                'c' => [
                    'Tous les cas anciens seulement',
                    'Nombre de consultations non liées',
                    'Nouveaux cas sur une période définie',
                    'Stock de médicaments',
                ],
                'a' => 2,
                'e' => 'L\'incidence renseigne sur l\'apparition de nouveaux cas.',
            ],
            [
                'q' => 'Quel est l\'objectif principal de la prévention primaire ?',
                'c' => [
                    'Empêcher l\'apparition de la maladie',
                    'Diagnostiquer une complication tardive',
                    'Établir un certificat',
                    'Rééduquer uniquement après séquelles',
                ],
                'a' => 0,
                'e' => 'La prévention primaire agit avant l\'apparition de la maladie.',
            ],
            [
                'q' => 'Quel exemple correspond à la prévention secondaire ?',
                'c' => [
                    'Dépistage organisé d\'une maladie',
                    'Rééducation après handicap établi',
                    'Soins palliatifs uniquement',
                    'Aménagement de logement seul',
                ],
                'a' => 0,
                'e' => 'Le dépistage vise une détection précoce.',
            ],
            [
                'q' => 'Quel exemple correspond à la prévention tertiaire ?',
                'c' => [
                    'Sensibilisation générale uniquement',
                    'Dépistage initial',
                    'Réadaptation après séquelles d\'une maladie',
                    'Vaccination avant exposition',
                ],
                'a' => 2,
                'e' => 'La prévention tertiaire limite les conséquences d\'une maladie installée.',
            ],
            [
                'q' => 'Que signifie l\'équité en santé ?',
                'c' => [
                    'Donner toujours exactement les mêmes moyens sans considération des besoins',
                    'Exclure les zones rurales',
                    'Réduire les écarts injustes et évitables d\'accès ou de santé',
                    'Privilégier les plus favorisés',
                ],
                'a' => 2,
                'e' => 'L\'équité tient compte des besoins et obstacles différents.',
            ],
            [
                'q' => 'Quel obstacle est directement lié à l\'accessibilité géographique des soins ?',
                'c' => [
                    'Éloignement du centre de santé',
                    'Peur du diagnostic',
                    'Difficulté de compréhension',
                    'Absence d\'information écrite',
                ],
                'a' => 0,
                'e' => 'La distance et le transport peuvent limiter le recours aux soins.',
            ],
            [
                'q' => 'Quel obstacle est principalement financier dans l\'accès aux soins ?',
                'c' => [
                    'Coût du transport ou du reste à charge',
                    'Escalier sans rampe',
                    'Barrière linguistique seule',
                    'Distance seule',
                ],
                'a' => 0,
                'e' => 'Les coûts directs et indirects peuvent retarder les soins.',
            ],
            [
                'q' => 'Quel dispositif marocain relève de l\'assurance maladie obligatoire ?',
                'c' => [
                    'Permis de conduire',
                    'AMO',
                    'Carte électorale',
                    'Passeport',
                ],
                'a' => 1,
                'e' => 'L\'AMO organise la couverture maladie dans le cadre légal marocain.',
            ],
            [
                'q' => 'Quel organisme marocain gère notamment l\'AMO des salariés du secteur privé ?',
                'c' => [
                    'HCP',
                    'OFPPT',
                    'CNSS',
                    'ONCF',
                ],
                'a' => 2,
                'e' => 'La CNSS gère notamment la couverture des salariés du secteur privé.',
            ],
            [
                'q' => 'Quel principe doit guider l\'accueil d\'une personne en situation de handicap ?',
                'c' => [
                    'Refus d\'aménagement',
                    'Accessibilité et respect de l\'autonomie',
                    'Infantilisation',
                    'Exclusion des décisions',
                ],
                'a' => 1,
                'e' => 'L\'accueil adapté favorise la participation sans discrimination.',
            ],
            [
                'q' => 'Quel aménagement favorise l\'accès d\'une personne en fauteuil roulant ?',
                'c' => [
                    'Escalier sans alternative',
                    'Obstacle au passage',
                    'Porte trop étroite',
                    'Rampe d\'accès conforme',
                ],
                'a' => 3,
                'e' => 'Une rampe accessible réduit les obstacles physiques.',
            ],
            [
                'q' => 'Quelle attitude adopter avec une personne ayant une déficience auditive ?',
                'c' => [
                    'Adapter la communication selon ses préférences',
                    'Refuser l\'écrit',
                    'Supposer une incapacité de décision',
                    'Parler dos tourné',
                ],
                'a' => 0,
                'e' => 'Une communication accessible respecte les besoins de la personne.',
            ],
            [
                'q' => 'Quel est l\'objectif d\'une visite sociale à domicile ?',
                'c' => [
                    'Publier des photographies',
                    'Inspecter sans consentement',
                    'Imposer une sanction',
                    'Évaluer le contexte de vie avec accord et respect de la vie privée',
                ],
                'a' => 3,
                'e' => 'La visite aide à comprendre l\'environnement réel de la personne.',
            ],
            [
                'q' => 'Dans un dossier social, que faut-il privilégier pour la traçabilité ?',
                'c' => [
                    'Notes factuelles datées et pertinentes',
                    'Rumeurs non vérifiées',
                    'Jugements personnels',
                    'Informations sans source',
                ],
                'a' => 0,
                'e' => 'Une traçabilité fiable facilite la continuité et la responsabilité.',
            ],
            [
                'q' => 'Quel principe limite la collecte des données personnelles ?',
                'c' => [
                    'Partager publiquement',
                    'Collecter tout sans justification',
                    'Conserver sans aucune règle',
                    'Ne recueillir que les données nécessaires à la finalité',
                ],
                'a' => 3,
                'e' => 'La minimisation protège la vie privée des usagers.',
            ],
            [
                'q' => 'Quel est le premier objectif d\'une évaluation sociale en situation de précarité ?',
                'c' => [
                    'Prescrire systématiquement des antibiotiques',
                    'Identifier les besoins urgents et les ressources mobilisables',
                    'Classer sans entretien',
                    'Refuser toute orientation',
                ],
                'a' => 1,
                'e' => 'La priorisation permet de répondre d\'abord aux besoins essentiels.',
            ],
            [
                'q' => 'Quel signe doit faire prioriser une intervention de protection immédiate ?',
                'c' => [
                    'Demande administrative ordinaire',
                    'Danger actuel pour l\'intégrité de la personne',
                    'Retard mineur de courrier',
                    'Question générale sur un formulaire',
                ],
                'a' => 1,
                'e' => 'Le danger immédiat nécessite une réponse de protection urgente.',
            ],
            [
                'q' => 'Quel est le but d\'un réseau de partenaires médico-sociaux ?',
                'c' => [
                    'Dupliquer les interventions sans échange',
                    'Coordonner les ressources pour répondre à des besoins complexes',
                    'Centraliser les décisions sans concertation',
                    'Empêcher les orientations',
                ],
                'a' => 1,
                'e' => 'Le partenariat améliore la cohérence des réponses.',
            ],
            [
                'q' => 'Quel critère permet d\'apprécier la pertinence d\'une action sociale ?',
                'c' => [
                    'Nombre de documents imprimés seul',
                    'Adéquation entre action et besoins identifiés',
                    'Durée la plus longue',
                    'Coût maximal',
                ],
                'a' => 1,
                'e' => 'Une action pertinente répond à un besoin démontré.',
            ],
            [
                'q' => 'Quelle différence distingue un résultat d\'un moyen dans un projet social ?',
                'c' => [
                    'Les deux désignent toujours un budget',
                    'Le résultat est toujours une réunion',
                    'Le moyen est toujours une maladie',
                    'Le résultat décrit un changement obtenu, le moyen une ressource utilisée',
                ],
                'a' => 3,
                'e' => 'Les résultats évaluent les effets; les moyens décrivent les ressources mobilisées.',
            ],
            [
                'q' => 'Quelle méthode aide à fixer un objectif social mesurable ?',
                'c' => [
                    'Définir un indicateur et une échéance',
                    'Éviter toute évaluation',
                    'Rester volontairement vague',
                    'Ne fixer aucun délai',
                ],
                'a' => 0,
                'e' => 'Un objectif précis et daté permet d\'en suivre l\'atteinte.',
            ],
            [
                'q' => 'Que faire si un usager ne comprend pas une procédure administrative ?',
                'c' => [
                    'Expliquer dans un langage accessible et vérifier la compréhension',
                    'Le blâmer',
                    'Le renvoyer sans explication',
                    'Lui faire signer sans lecture',
                ],
                'a' => 0,
                'e' => 'L\'information compréhensible favorise l\'accès effectif aux droits.',
            ],
            [
                'q' => 'Quel comportement traduit une posture professionnelle non discriminatoire ?',
                'c' => [
                    'Humilier les personnes vulnérables',
                    'Favoriser les proches',
                    'Accueillir selon les besoins sans préjugé',
                    'Refuser selon l\'origine',
                ],
                'a' => 2,
                'e' => 'La non-discrimination garantit une relation respectueuse et équitable.',
            ],
            [
                'q' => 'Quel objectif correspond à la préparation de la sortie hospitalière d\'un patient dépendant ?',
                'c' => [
                    'Rompre tous les contacts',
                    'Supprimer l\'information à la famille autorisée',
                    'Éviter l\'évaluation des besoins',
                    'Organiser les aides et la continuité du suivi à domicile',
                ],
                'a' => 3,
                'e' => 'La préparation anticipe les besoins de soins et de soutien après la sortie.',
            ],
            [
                'q' => 'Quel est l\'objectif d\'une supervision professionnelle en travail social ?',
                'c' => [
                    'Remplacer toute formation',
                    'Analyser les pratiques et améliorer la qualité de l\'accompagnement',
                    'Supprimer les règles déontologiques',
                    'Publier les dossiers confidentiels',
                ],
                'a' => 1,
                'e' => 'La supervision aide à prendre du recul et à améliorer les interventions.',
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
                $quiz->is_active = false;
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
