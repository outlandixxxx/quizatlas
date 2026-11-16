<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MefFinancesPubliquesFiscalite2026Seeder extends Seeder
{
    use ImportsMefQuiz;

    public function run(): void
    {
        $data = json_decode(<<<'MEF_QUIZ_JSON'
{
  "title": "Préparation MEF 2026 — Finances publiques et fiscalité (adaptation)",
  "subject": "Finances publiques et fiscalité",
  "language": "fr",
  "source_date_displayed": "2026-07-05",
  "status": "Corrigé pédagogique non officiel ; adaptation et remplacements signalés",
  "instructions": "Une réponse sauf multiple_choice : sélectionner toutes les réponses exactes.",
  "questions": [
    {
      "id": "ECO2026-01",
      "source_question_number": 1,
      "source_page": 1,
      "subject_code": "FP",
      "question": "En première lecture, de quel délai la Chambre des représentants dispose-t-elle pour se prononcer sur le projet de loi de finances de l'année ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "15 jours après le dépôt",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "40 jours après le dépôt",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "20 jours après le dépôt",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "30 jours après le dépôt",
          "is_correct": true
        }
      ],
      "explanation": "Le calendrier décrit par le ministère prévoit 30 jours pour cette première lecture ; les délais des étapes suivantes sont distincts.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": [
        {
          "title": "MEF — Processus de préparation et adoption du PLF",
          "url": "https://www.finances.gov.ma/fr/Nos-metiers/Pages/processus-de-preparation-du-plf-et-de-son-adoption.aspx"
        }
      ]
    },
    {
      "id": "ECO2026-02",
      "source_question_number": 2,
      "source_page": 1,
      "subject_code": "FP",
      "question": "Quelle description correspond au budget de l'État ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Un inventaire des seules immobilisations",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Un compte rendu exclusivement rétrospectif",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Un relevé limité aux recettes fiscales encaissées",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Un document prévisionnel des recettes et dépenses publiques",
          "is_correct": true
        }
      ],
      "explanation": "Le budget présente des prévisions de recettes et de dépenses. La loi de finances en détermine les autorisations dans le cadre légal.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-03",
      "source_question_number": 3,
      "source_page": 1,
      "subject_code": "FP",
      "question": "Quelle finalité correspond à la réforme de la gestion budgétaire portée par la loi organique relative à la loi de finances ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Supprimer toute programmation",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Écarter le contrôle parlementaire",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Renforcer la transparence et la performance de la gestion publique",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Limiter le budget aux dépenses de personnel",
          "is_correct": false
        }
      ],
      "explanation": "La gestion orientée vers les résultats s'appuie sur des objectifs, des indicateurs et une information budgétaire plus transparente.",
      "adaptation": "adapted_question",
      "editorial_note": "La source présente plusieurs objectifs valables de la LOF ; les choix ont été reconstruits pour assurer une réponse unique.",
      "references": []
    },
    {
      "id": "ECO2026-04",
      "source_question_number": 4,
      "source_page": 1,
      "subject_code": "FP",
      "question": "Quel texte arrête les résultats définitifs de l'exécution d'une loi de finances ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "La loi de finances initiale suivante",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "La loi de règlement",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Le seul rapport économique et financier",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Un décret d'ouverture de crédits",
          "is_correct": false
        }
      ],
      "explanation": "La loi de règlement constate les recettes encaissées et les dépenses de l'exercice selon les règles applicables, puis arrête le résultat.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-05",
      "source_question_number": 5,
      "source_page": 1,
      "subject_code": "FP",
      "question": "Si 36 milliards de DH de recettes fiscales sont réalisés pour une prévision annuelle de 100 milliards, quel est le taux de réalisation ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "64 %",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "136 %",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "3,6 %",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "36 %",
          "is_correct": true
        }
      ],
      "explanation": "Le taux est égal aux réalisations divisées par les prévisions : 36 ÷ 100 × 100 = 36 %. Données fictives d'exercice, et non chiffres d'avril 2026.\n\nNote éditoriale : question thématique de remplacement. Remplacement du chiffre daté non confirmé par un calcul sur données fictives explicites.",
      "adaptation": "thematic_replacement",
      "editorial_note": "Remplacement du chiffre daté non confirmé par un calcul sur données fictives explicites.",
      "references": []
    },
    {
      "id": "ECO2026-18",
      "source_question_number": 18,
      "source_page": 2,
      "subject_code": "FP",
      "question": "Quelle mesure traduit une logique de performance des finances publiques ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Mesurer la réussite par les seuls crédits consommés",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Supprimer les rapports d'exécution",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Associer les programmes à des objectifs et des indicateurs évaluables",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Reconduire toutes les dépenses sans examen",
          "is_correct": false
        }
      ],
      "explanation": "Le suivi des résultats complète le contrôle de régularité. Consommer un crédit ne prouve pas à lui seul que l'objectif est atteint.\n\nNote éditoriale : question thématique de remplacement. Texte arabe insuffisamment lisible ; question de remplacement sur la performance budgétaire.",
      "adaptation": "thematic_replacement",
      "editorial_note": "Texte arabe insuffisamment lisible ; question de remplacement sur la performance budgétaire.",
      "references": []
    },
    {
      "id": "ECO2026-20",
      "source_question_number": 20,
      "source_page": 2,
      "subject_code": "FP",
      "question": "Que mesure la part des recettes fiscales dans les recettes totales, pour un périmètre budgétaire défini ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Le niveau d'alphabétisation",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Le taux d'inflation",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Le poids du financement fiscal dans ces recettes",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Le taux de change réel",
          "is_correct": false
        }
      ],
      "explanation": "On rapporte les recettes fiscales aux recettes totales du même périmètre et de la même période. Le traitement des emprunts doit être précisé.\n\nNote éditoriale : question thématique de remplacement. Part chiffrée non confirmée ; question de remplacement sur la définition du ratio.",
      "adaptation": "thematic_replacement",
      "editorial_note": "Part chiffrée non confirmée ; question de remplacement sur la définition du ratio.",
      "references": []
    },
    {
      "id": "ECO2026-31",
      "source_question_number": 31,
      "source_page": 2,
      "subject_code": "FP",
      "question": "Les amendes et pénalités perçues par l'État sont généralement classées parmi :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Les recettes non fiscales",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Les recettes de privatisation exclusivement",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Les cotisations sociales exclusivement",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Les subventions reçues",
          "is_correct": false
        }
      ],
      "explanation": "Ces recettes ne constituent pas un impôt en tant que tel ; elles relèvent des recettes non fiscales dans la classification générale utilisée ici.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-32",
      "source_question_number": 32,
      "source_page": 2,
      "subject_code": "FP",
      "question": "Quelle caractéristique distingue généralement un prélèvement parafiscal d'un impôt de portée générale ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Son affectation au financement d'une activité ou d'un organisme déterminé",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Son caractère toujours facultatif",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "L'absence de toute obligation",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Son application exclusive aux personnes physiques",
          "is_correct": false
        }
      ],
      "explanation": "La parafiscalité désigne des prélèvements obligatoires affectés à des finalités déterminées. Elle ne se définit pas par un caractère facultatif.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-33",
      "source_question_number": 33,
      "source_page": 2,
      "subject_code": "FP",
      "question": "Quel est le taux normal de TVA au Maroc dans le cadre fiscal étudié ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "10 %",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "7 %",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "20 %",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "14 %",
          "is_correct": false
        }
      ],
      "explanation": "Le taux normal est de 20 %. Des opérations peuvent relever d'un taux réduit ou d'une exonération selon leur régime.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": [
        {
          "title": "MEF/ADII — Rapport annuel 2024, réforme TVA",
          "url": "https://www.finances.gov.ma/Publication/adii/2025/ra-douane2024.pdf"
        }
      ]
    },
    {
      "id": "ECO2026-35",
      "source_question_number": 35,
      "source_page": 2,
      "subject_code": "FP",
      "question": "Quel principe exprime l'équité fiscale verticale ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Exonérer arbitrairement un groupe",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Taxer chacun du même montant quels que soient ses moyens",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Appliquer nécessairement un taux nul",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Adapter la contribution aux capacités contributives",
          "is_correct": true
        }
      ],
      "explanation": "L'équité verticale tient compte des différences de capacité contributive. Elle ne se confond pas avec une égalité de montant ni avec une proportionnalité obligatoire.",
      "adaptation": "adapted_question",
      "editorial_note": "Équité verticale précisée : capacité contributive n’impose pas un taux strictement proportionnel.",
      "references": []
    },
    {
      "id": "ECO2026-36",
      "source_question_number": 36,
      "source_page": 2,
      "subject_code": "FP",
      "question": "Dans le mécanisme normal de TVA, pour une entreprise ouvrant pleinement droit à déduction, la TVA déductible est en principe :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Un impôt sur son bénéfice net",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Récupérable selon les règles de déduction",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Sans effet possible sur sa trésorerie",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une charge définitive sur tous ses achats",
          "is_correct": false
        }
      ],
      "explanation": "La déduction vise la neutralité pour l'entreprise assujettie. Des exclusions et délais de remboursement peuvent néanmoins affecter les coûts ou la trésorerie.",
      "adaptation": "adapted_question",
      "editorial_note": "Droit à déduction complet précisé ; ne pas généraliser à toute entreprise et à toute dépense.",
      "references": []
    },
    {
      "id": "ECO2026-37",
      "source_question_number": 37,
      "source_page": 2,
      "subject_code": "FP",
      "question": "Quelle orientation caractérise la réforme progressive de la TVA engagée au Maroc pour 2024-2026 ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Remplacer la TVA par l'impôt sur le revenu",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Fixer un taux unique de 50 %",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Converger vers deux taux de base, 10 % et 20 %",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Supprimer nécessairement toute exonération",
          "is_correct": false
        }
      ],
      "explanation": "La réforme vise notamment l'harmonisation des taux autour de 10 % et 20 %, tout en comportant des mesures spécifiques et des exonérations.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": [
        {
          "title": "MEF/ADII — Rapport annuel 2024, réforme TVA",
          "url": "https://www.finances.gov.ma/Publication/adii/2025/ra-douane2024.pdf"
        }
      ]
    },
    {
      "id": "ECO2026-38",
      "source_question_number": 38,
      "source_page": 2,
      "subject_code": "FP",
      "question": "Que recherche le principe de neutralité fiscale dans une analyse économique ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Supprimer toute redistribution",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Limiter les distorsions des choix économiques dues à l'impôt",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Favoriser arbitrairement une entreprise",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Garantir l'absence de tout prélèvement",
          "is_correct": false
        }
      ],
      "explanation": "La neutralité vise à limiter les modifications artificielles des choix économiques ; elle ne signifie pas l'absence de politique fiscale.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-39",
      "source_question_number": 39,
      "source_page": 2,
      "subject_code": "FP",
      "question": "À quoi correspond le solde budgétaire primaire ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Au solde commercial",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Aux seules recettes fiscales",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Au solde budgétaire hors charges d'intérêts de la dette",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Au solde hors dépenses d'investissement",
          "is_correct": false
        }
      ],
      "explanation": "Le solde primaire exclut les intérêts. Avec la convention recettes moins dépenses, il égale le solde global augmenté des intérêts versés.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-41",
      "source_question_number": 41,
      "source_page": 3,
      "subject_code": "FP",
      "question": "Le taux de pression fiscale correspond généralement au rapport entre :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Les dépenses sociales et les salaires",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Le nombre de contribuables et la population active",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Les importations et les exportations",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Les recettes fiscales et le PIB, sur un périmètre défini",
          "is_correct": true
        }
      ],
      "explanation": "Il faut préciser la période et le périmètre des prélèvements, notamment le traitement des cotisations sociales.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-62",
      "source_question_number": 62,
      "source_page": 3,
      "subject_code": "FP",
      "question": "Quel est un objectif central du suivi budgétaire ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Comparer réalisations et prévisions et analyser les écarts",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Garantir un excédent en toute circonstance",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Remplacer entièrement la comptabilité",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Empêcher toute dépense autorisée",
          "is_correct": false
        }
      ],
      "explanation": "Le contrôle suit l'exécution et analyse les écarts ; il ne garantit pas que le solde sera excédentaire.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    }
  ],
  "duration": 26,
  "description": "QCM en français : Finances publiques et fiscalité. Adaptation pédagogique de documents datés de 2026 ; corrigé proposé, non officiel. Une ou plusieurs réponses selon la question. Comprend 3 questions thématiques de remplacement, identifiées dans les explications."
}
MEF_QUIZ_JSON
        , true, 512, JSON_THROW_ON_ERROR);

        $this->importMefQuiz('mef-finances-publiques-fiscalite-fr', $data);
    }
}
