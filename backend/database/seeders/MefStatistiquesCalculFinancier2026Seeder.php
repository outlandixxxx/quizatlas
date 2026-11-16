<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MefStatistiquesCalculFinancier2026Seeder extends Seeder
{
    use ImportsMefQuiz;

    public function run(): void
    {
        $data = json_decode(<<<'MEF_QUIZ_JSON'
{
  "title": "Préparation MEF 2026 — Statistiques et calcul financier (adaptation)",
  "subject": "Statistiques et calcul financier",
  "language": "fr",
  "source_date_displayed": "2026-07-05",
  "status": "Corrigé pédagogique non officiel ; adaptation et remplacements signalés",
  "instructions": "Une réponse sauf multiple_choice : sélectionner toutes les réponses exactes.",
  "questions": [
    {
      "id": "ECO2026-82",
      "source_question_number": 82,
      "source_page": 4,
      "subject_code": "ST",
      "question": "Deux projets réalisent chacun le même bénéfice sur une même période, avec des rendements de 3 % et 6 %. Quel est le rendement global des capitaux investis ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "5 %",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "3,5 %",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "4 %",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "4,5 %",
          "is_correct": false
        }
      ],
      "explanation": "Pour un bénéfice B par projet, les capitaux sont B/0,03 et B/0,06. Le rendement global vaut 2B ÷ (B/0,03 + B/0,06) = 4 %. La moyenne arithmétique de 4,5 % ne convient pas car les capitaux sont différents.",
      "adaptation": "adapted_question",
      "editorial_note": "La formulation «même bénéfice» est conservée. Le rendement global est 4 %, et non la moyenne arithmétique de 4,5 % qui supposerait des capitaux initiaux égaux.",
      "references": []
    },
    {
      "id": "ECO2026-83",
      "source_question_number": 83,
      "source_page": 4,
      "subject_code": "ST",
      "question": "Un estimateur est biaisé lorsque :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Il varie d'un échantillon à l'autre",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Il est calculé à partir de données numériques",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Son espérance diffère du paramètre qu'il estime",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Il dépend des observations",
          "is_correct": false
        }
      ],
      "explanation": "Le biais est E(estimation) − paramètre. La variabilité d'un estimateur ne constitue pas, à elle seule, un biais.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    }
  ],
  "duration": 5,
  "description": "QCM en français : Statistiques et calcul financier. Adaptation pédagogique de documents datés de 2026 ; corrigé proposé, non officiel. Une ou plusieurs réponses selon la question."
}
MEF_QUIZ_JSON
        , true, 512, JSON_THROW_ON_ERROR);

        $this->importMefQuiz('mef-statistiques-calcul-financier-fr', $data);
    }
}
