<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MefProtectionSociale2026Seeder extends Seeder
{
    use ImportsMefQuiz;

    public function run(): void
    {
        $data = json_decode(<<<'MEF_QUIZ_JSON'
{
  "title": "Préparation MEF 2026 — Protection sociale, retraite et emploi (adaptation)",
  "subject": "Protection sociale, retraite et emploi",
  "language": "fr",
  "source_date_displayed": "2026-07-05",
  "status": "Corrigé pédagogique non officiel ; adaptation et remplacements signalés",
  "instructions": "Une réponse sauf multiple_choice : sélectionner toutes les réponses exactes.",
  "questions": [
    {
      "id": "ECO2026-15",
      "source_question_number": 15,
      "source_page": 1,
      "subject_code": "RS",
      "question": "Quelle caractéristique décrit le système marocain de retraite dans le cadre étudié ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "L'absence de tout régime obligatoire",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Une pluralité de régimes",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Un régime unique universel déjà identique pour tous",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une capitalisation exclusive pour tous les actifs",
          "is_correct": false
        }
      ],
      "explanation": "Le système comporte plusieurs régimes, notamment selon les catégories professionnelles. Il ne se résume pas à un dispositif unique.",
      "adaptation": "adapted_question",
      "editorial_note": "La pluralité des régimes est retenue ; le système ne se réduit pas à la capitalisation.",
      "references": []
    },
    {
      "id": "ECO2026-29",
      "source_question_number": 29,
      "source_page": 2,
      "subject_code": "RS",
      "question": "Quelle mesure ne constitue pas en elle-même un pilier d'une réforme de protection sociale ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "L'extension de l'assurance maladie",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Le développement d'une protection contre la perte d'emploi",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "La baisse du nombre de conseillers communaux",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "L'élargissement de la couverture retraite",
          "is_correct": false
        }
      ],
      "explanation": "La composition d'un conseil communal n'est pas un mécanisme de couverture des risques sociaux. Les autres mesures relèvent de la protection sociale.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation en français de la question arabe sur les piliers de protection sociale.",
      "references": []
    },
    {
      "id": "ECO2026-84",
      "source_question_number": 84,
      "source_page": 4,
      "subject_code": "RS",
      "question": "Dans un régime de retraite, un allongement de la vie après le départ à la retraite, à âge de départ inchangé, tend à :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Supprimer le besoin de financement",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Réduire automatiquement le nombre de pensions versées",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Allonger la durée de versement des pensions",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Augmenter toujours les cotisants",
          "is_correct": false
        }
      ],
      "explanation": "Les pensions sont versées plus longtemps en moyenne, ce qui accroît les besoins de financement si les autres paramètres restent inchangés.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-85",
      "source_question_number": 85,
      "source_page": 4,
      "subject_code": "RS",
      "question": "Quel changement peut améliorer l'équilibre d'un régime de retraite par répartition, toutes choses égales par ailleurs ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Accroître les pensions sans ressources supplémentaires",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Réduire le taux d'activité",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Élargir la base des cotisants",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Allonger la durée de retraite sans autre ajustement",
          "is_correct": false
        }
      ],
      "explanation": "Les cotisations courantes financent les pensions ; davantage de cotisants augmente les recettes, sous les hypothèses données.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-86",
      "source_question_number": 86,
      "source_page": 4,
      "subject_code": "RS",
      "question": "Que désigne la polarisation de l'emploi associée à certaines transformations numériques ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "La croissance exclusive des emplois intermédiaires routiniers",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "La progression relative des emplois aux deux extrémités des qualifications au détriment de certains emplois intermédiaires",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "La disparition nécessaire de tous les emplois peu qualifiés",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une égalisation automatique de tous les salaires",
          "is_correct": false
        }
      ],
      "explanation": "L'automatisation peut toucher les tâches routinières intermédiaires tout en laissant croître certains emplois très qualifiés et certains services peu qualifiés. Ce n'est pas une règle universelle.",
      "adaptation": "adapted_question",
      "editorial_note": "Polarisation formulée comme évolution relative et conditionnelle.",
      "references": []
    }
  ],
  "duration": 8,
  "description": "QCM en français : Protection sociale, retraite et emploi. Adaptation pédagogique de documents datés de 2026 ; corrigé proposé, non officiel. Une ou plusieurs réponses selon la question."
}
MEF_QUIZ_JSON
        , true, 512, JSON_THROW_ON_ERROR);

        $this->importMefQuiz('mef-protection-sociale-retraite-emploi-fr', $data);
    }
}
