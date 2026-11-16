<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MefGestionComptabiliteAudit2026Seeder extends Seeder
{
    use ImportsMefQuiz;

    public function run(): void
    {
        $data = json_decode(<<<'MEF_QUIZ_JSON'
{
  "title": "Préparation MEF 2026 — Gestion financière, comptabilité et audit (adaptation)",
  "subject": "Gestion financière, comptabilité et audit",
  "language": "fr",
  "source_date_displayed": "2026-07-05",
  "status": "Corrigé pédagogique non officiel ; adaptation et remplacements signalés",
  "instructions": "Une réponse sauf multiple_choice : sélectionner toutes les réponses exactes.",
  "questions": [
    {
      "id": "ECO2026-34",
      "source_question_number": 34,
      "source_page": 2,
      "subject_code": "GF",
      "question": "Quel revenu rémunère principalement le capital plutôt que le travail ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "La rémunération d'une prestation professionnelle",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Le salaire",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "La prime d'ancienneté",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Le dividende",
          "is_correct": true
        }
      ],
      "explanation": "Un dividende rémunère une participation au capital. Le revenu d'un indépendant peut combiner rémunération du travail et du capital.",
      "adaptation": "adapted_question",
      "editorial_note": "Le dividende est distingué du travail ; le revenu d’un indépendant peut être mixte.",
      "references": []
    },
    {
      "id": "ECO2026-63",
      "source_question_number": 63,
      "source_page": 3,
      "subject_code": "GF",
      "question": "Pourquoi séparer l'autorisation, l'exécution et le contrôle d'une opération ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Pour réduire les risques d'erreur et de fraude",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Pour confier tout le processus à une seule personne",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Pour empêcher toute coopération",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Pour supprimer toute trace documentaire",
          "is_correct": false
        }
      ],
      "explanation": "La séparation limite la possibilité qu'une même personne réalise et dissimule seule une opération irrégulière.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-64",
      "source_question_number": 64,
      "source_page": 3,
      "subject_code": "GF",
      "question": "Une entreprise est solvable lorsqu'elle :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Présente toujours un BFR nul",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Dégage un bénéfice sur un exercice, quoi qu'il arrive",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Peut faire face à l'ensemble de ses engagements financiers dans la durée",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Vend davantage que ses seuls coûts fixes",
          "is_correct": false
        }
      ],
      "explanation": "La solvabilité concerne la capacité globale à honorer les dettes. Un bénéfice comptable ponctuel ne suffit pas à la démontrer.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-65",
      "source_question_number": 65,
      "source_page": 4,
      "subject_code": "GF",
      "question": "Quel ratio met directement en relation les ressources propres et l'endettement total ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Capitaux propres / dettes totales",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Trésorerie / chiffre d'affaires",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Chiffre d'affaires / effectif",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Stocks / ventes quotidiennes",
          "is_correct": false
        }
      ],
      "explanation": "Ce ratio renseigne sur la structure de financement. Il existe plusieurs ratios de solvabilité : aucune formule unique ne couvre tous les usages.",
      "adaptation": "adapted_question",
      "editorial_note": "Il existe plusieurs définitions du ratio de solvabilité ; le ratio demandé est explicité.",
      "references": []
    },
    {
      "id": "ECO2026-66",
      "source_question_number": 66,
      "source_page": 4,
      "subject_code": "GF",
      "question": "Dans un modèle simple, une marge sur coûts variables positive accompagnée d'un résultat négatif indique que :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Les ventes sont nécessairement nulles",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Les charges fixes sont nulles",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Chaque vente aggrave nécessairement la perte",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "La marge ne couvre pas les charges fixes",
          "is_correct": true
        }
      ],
      "explanation": "Résultat = marge sur coûts variables − charges fixes. Une marge positive mais insuffisante laisse un résultat négatif.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-67",
      "source_question_number": 67,
      "source_page": 4,
      "subject_code": "GF",
      "question": "Quel indicateur représente la part du chiffre d'affaires restant après les charges variables pour couvrir les charges fixes puis former un résultat ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "La trésorerie bancaire",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "La marge sur coûts variables",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Le besoin en fonds de roulement",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Le seul total des stocks",
          "is_correct": false
        }
      ],
      "explanation": "La marge sur coûts variables est obtenue en retirant les charges variables du chiffre d'affaires.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-68",
      "source_question_number": 68,
      "source_page": 4,
      "subject_code": "GF",
      "question": "Quel indicateur mesure la richesse créée par l'entreprise avant sa répartition entre les parties prenantes ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "La trésorerie nette",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "La valeur ajoutée",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Le bénéfice net",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Le capital social",
          "is_correct": false
        }
      ],
      "explanation": "La valeur ajoutée retranche les consommations intermédiaires de la production selon le cadre considéré ; elle rémunère ensuite différents facteurs et prélèvements.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-69",
      "source_question_number": 69,
      "source_page": 4,
      "subject_code": "GF",
      "question": "Quel signal peut révéler une production supérieure aux ventes prévues ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une augmentation des ventes toujours supérieure à la production",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Une baisse nécessaire de tous les prix d'achat",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Une disparition automatique des stocks",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une accumulation non désirée de stocks de produits finis",
          "is_correct": true
        }
      ],
      "explanation": "Des stocks non désirés croissants peuvent signaler une demande insuffisante. Une hausse volontaire et planifiée des stocks ne suffit pas à conclure.",
      "adaptation": "adapted_question",
      "editorial_note": "Stocks non désirés précisés : une hausse planifiée des stocks n’implique pas une surproduction.",
      "references": []
    },
    {
      "id": "ECO2026-70",
      "source_question_number": 70,
      "source_page": 4,
      "subject_code": "GF",
      "question": "Quand l'endettement peut-il accroître la rentabilité des capitaux propres, à risque accru ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Lorsque la rentabilité économique excède le coût de la dette, à bases comparables",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Lorsque les dettes deviennent gratuites par définition",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Lorsque son coût dépasse toujours la rentabilité économique",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Lorsque toute activité cesse",
          "is_correct": false
        }
      ],
      "explanation": "Un effet de levier favorable est possible si l'écart de rentabilité est positif. La dette accroît aussi le risque et peut produire un effet défavorable.",
      "adaptation": "adapted_question",
      "editorial_note": "Effet de levier conditionné à un écart positif de rentabilité.",
      "references": []
    },
    {
      "id": "ECO2026-71",
      "source_question_number": 71,
      "source_page": 4,
      "subject_code": "GF",
      "question": "En audit financier, que signifie l'assertion d'exhaustivité ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Tous les actifs ont une valeur identique",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Toutes les écritures ont le même montant",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Toutes les opérations sont bénéficiaires",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Toutes les opérations qui doivent être enregistrées le sont",
          "is_correct": true
        }
      ],
      "explanation": "L'exhaustivité vise à détecter les omissions. L'existence, l'évaluation et la présentation relèvent d'autres assertions.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    }
  ],
  "duration": 15,
  "description": "QCM en français : Gestion financière, comptabilité et audit. Adaptation pédagogique de documents datés de 2026 ; corrigé proposé, non officiel. Une ou plusieurs réponses selon la question."
}
MEF_QUIZ_JSON
        , true, 512, JSON_THROW_ON_ERROR);

        $this->importMefQuiz('mef-gestion-financiere-comptabilite-audit-fr', $data);
    }
}
