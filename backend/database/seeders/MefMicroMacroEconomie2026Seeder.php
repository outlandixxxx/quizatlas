<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MefMicroMacroEconomie2026Seeder extends Seeder
{
    use ImportsMefQuiz;

    public function run(): void
    {
        $data = json_decode(<<<'MEF_QUIZ_JSON'
{
  "title": "Préparation MEF 2026 — Microéconomie et macroéconomie (adaptation)",
  "subject": "Microéconomie et macroéconomie",
  "language": "fr",
  "source_date_displayed": "2026-07-05",
  "status": "Corrigé pédagogique non officiel ; adaptation et remplacements signalés",
  "instructions": "Une réponse sauf multiple_choice : sélectionner toutes les réponses exactes.",
  "questions": [
    {
      "id": "ECO2026-40",
      "source_question_number": 40,
      "source_page": 2,
      "subject_code": "EC",
      "question": "À prix des facteurs constants, des rendements d'échelle décroissants signifient que :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "La production augmente plus que les facteurs",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Les coûts fixes disparaissent",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Le coût moyen baisse nécessairement avec la production",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "La production augmente moins que proportionnellement lorsque tous les facteurs augmentent ensemble",
          "is_correct": true
        }
      ],
      "explanation": "Les rendements d'échelle portent sur la variation de tous les facteurs. Ils se distinguent des rendements marginaux d'un seul facteur.",
      "adaptation": "adapted_question",
      "editorial_note": "Rendements d’échelle distingués de productivité marginale ; choix originaux remplacés.",
      "references": []
    },
    {
      "id": "ECO2026-42",
      "source_question_number": 42,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Quel phénomène caractérise des économies d'échelle ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une hausse obligatoire du coût unitaire",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Une baisse obligatoire de la production totale",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Une baisse du coût moyen de long terme lorsque la production augmente",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Une hausse systématique du prix de vente",
          "is_correct": false
        }
      ],
      "explanation": "L'accroissement de l'échelle peut permettre de répartir les coûts ou d'organiser plus efficacement la production. Le prix de vente n'est pas automatiquement réduit.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-43",
      "source_question_number": 43,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Dans quel cas une croissance de la production peut-elle créer relativement peu d'emplois directs ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Lorsque les activités en expansion sont fortement intensives en capital",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Lorsque chaque unité supplémentaire exige un salarié supplémentaire",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Lorsque toute technique est nécessairement intensive en travail",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Lorsque la productivité reste strictement constante dans tous les secteurs",
          "is_correct": false
        }
      ],
      "explanation": "Des activités très capitalistiques peuvent accroître fortement la production avec une augmentation limitée de l'emploi.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-44",
      "source_question_number": 44,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Des gains de productivité concentrés dans certains secteurs peuvent contribuer à :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une baisse obligatoire de tous les profits",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Une égalisation automatique de tous les salaires",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "La disparition de toutes les qualifications",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Des écarts de salaires et une polarisation du marché du travail",
          "is_correct": true
        }
      ],
      "explanation": "Si compétences et secteurs bénéficient inégalement du progrès technique, les rémunérations peuvent diverger. L'effet dépend aussi des institutions et de la redistribution.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-45",
      "source_question_number": 45,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Dans une économie ouverte, une hausse de la demande intérieure satisfaite en partie par des importations peut :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Améliorer automatiquement la balance courante",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Supprimer toute dépendance extérieure",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Dégrader le solde extérieur, toutes choses égales par ailleurs",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Réduire nécessairement les importations",
          "is_correct": false
        }
      ],
      "explanation": "Si les importations augmentent sans hausse équivalente des exportations, le solde extérieur se dégrade.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-46",
      "source_question_number": 46,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Si la demande intérieure progresse durablement plus vite que les capacités de production, elle peut entraîner :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une baisse certaine de tous les prix",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Des tensions inflationnistes",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "La disparition des importations",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une déflation automatique",
          "is_correct": false
        }
      ],
      "explanation": "Une demande excessive par rapport à l'offre disponible peut exercer une pression sur les prix. Ce résultat est conditionnel, pas systématique.",
      "adaptation": "adapted_question",
      "editorial_note": "La source annonçait un effet de long terme trop général ; contrainte de capacités précisée.",
      "references": []
    },
    {
      "id": "ECO2026-47",
      "source_question_number": 47,
      "source_page": 3,
      "subject_code": "EC",
      "question": "À court terme, avec des capacités inutilisées, une hausse de la demande intérieure tend à :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "N'avoir jamais d'effet",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Réduire toujours la production",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Soutenir la production",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Supprimer les dépenses publiques",
          "is_correct": false
        }
      ],
      "explanation": "Lorsque les entreprises peuvent accroître leur offre, la demande supplémentaire soutient l'activité ; les importations et les prix peuvent absorber une partie de l'effet.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-48",
      "source_question_number": 48,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Dans quelles circonstances une expansion budgétaire peut-elle contribuer à un déficit courant extérieur ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Lorsqu'elle stimule une demande qui augmente les importations",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Lorsqu'elle diminue nécessairement les importations",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Lorsqu'elle accroît uniquement l'épargne sans effet sur la demande",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Lorsqu'elle supprime les dépenses privées",
          "is_correct": false
        }
      ],
      "explanation": "Le supplément de demande peut se porter sur des produits étrangers. Le lien entre déficit budgétaire et déficit courant n'est toutefois pas automatique.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-49",
      "source_question_number": 49,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Quel enchaînement décrit une spirale déflationniste ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Hausse des salaires, hausse de la consommation et plein emploi garanti",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Hausse des prix importés et accélération de l'inflation",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Baisse du coût unitaire due uniquement à l'innovation",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Baisse des prix, report des achats, contraction de l'activité et nouvelles pressions à la baisse des prix",
          "is_correct": true
        }
      ],
      "explanation": "L'attente de nouvelles baisses de prix peut retarder les achats, peser sur l'activité et accroître le poids réel des dettes.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-50",
      "source_question_number": 50,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Dans la relation de Phillips de court terme, à anticipations et chocs d'offre donnés, une baisse du chômage est associée à :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une disparition de la hausse des salaires",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Une inflation toujours nulle",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Une hausse de l'inflation",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Une baisse nécessaire de l'inflation",
          "is_correct": false
        }
      ],
      "explanation": "La relation décrit un arbitrage conditionnel de court terme. Elle n'établit pas une loi mécanique indépendante des anticipations ou des chocs.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-51",
      "source_question_number": 51,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Quel terme désigne précisément le taux de chômage compatible avec une inflation qui n'accélère pas ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Le chômage observé le plus faible",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Le NAIRU",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Le chômage frictionnel uniquement",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Le chômage saisonnier",
          "is_correct": false
        }
      ],
      "explanation": "NAIRU signifie taux de chômage n'accélérant pas l'inflation. Il ne doit pas être confondu sans nuance avec le taux naturel, concept voisin mais distinct.",
      "adaptation": "adapted_question",
      "editorial_note": "NAIRU utilisé plutôt qu’assimilation sans nuance au taux naturel.",
      "references": []
    },
    {
      "id": "ECO2026-52",
      "source_question_number": 52,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Quelle définition correspond à l'inflation ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Toute baisse temporaire du pouvoir d'achat",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Une hausse durable du niveau général des prix",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "La hausse du prix d'un seul bien",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Toute croissance du PIB réel",
          "is_correct": false
        }
      ],
      "explanation": "L'inflation porte sur le niveau général des prix. Le pouvoir d'achat dépend aussi de l'évolution des revenus.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-53",
      "source_question_number": 53,
      "source_page": 3,
      "subject_code": "EC",
      "question": "À panier comparable, quand le pouvoir d'achat d'un salaire diminue-t-il ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Lorsque les prix diminuent et le salaire reste stable",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Lorsque les prix augmentent plus vite que le salaire nominal",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Lorsque le salaire croît plus vite que les prix",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Lorsque salaire et prix augmentent exactement dans les mêmes proportions",
          "is_correct": false
        }
      ],
      "explanation": "Le salaire réel diminue si le revenu nominal ne suit pas les prix. À variations proportionnelles identiques, il reste stable.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-54",
      "source_question_number": 54,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Comment une relance de la demande peut-elle aussi soutenir durablement l'offre ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "En remplaçant toujours l'investissement privé",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "En imposant un prix unique à tous les biens",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "En réduisant nécessairement toutes les importations à zéro",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "En encourageant l'investissement productif et l'augmentation des capacités",
          "is_correct": true
        }
      ],
      "explanation": "Les perspectives de débouchés peuvent stimuler l'investissement. L'effet dépend des capacités, du financement et de la confiance des entreprises.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-55",
      "source_question_number": 55,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Que désigne l'effet d'éviction financière dans le modèle classique ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une réduction de l'investissement privé liée à la hausse des taux induite par les besoins de financement publics",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Une baisse automatique des taux après toute dépense publique",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "L'abolition des prélèvements obligatoires",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une hausse obligatoire des exportations",
          "is_correct": false
        }
      ],
      "explanation": "La concurrence pour les financements peut relever les taux et décourager une partie de l'investissement privé. L'ampleur dépend du contexte monétaire.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-56",
      "source_question_number": 56,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Dans le modèle de Mundell-Fleming avec change fixe et parfaite mobilité des capitaux, une expansion monétaire autonome est :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Neutralisée par la défense de la parité",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Indépendante de toute contrainte de change",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Possible sans intervention sur les réserves dans tous les cas",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Toujours durablement très efficace",
          "is_correct": false
        }
      ],
      "explanation": "La pression sur le change oblige la banque centrale à intervenir pour maintenir la parité, ce qui neutralise l'expansion monétaire autonome dans ce modèle.",
      "adaptation": "adapted_question",
      "editorial_note": "Cadre Mundell-Fleming explicite.",
      "references": []
    },
    {
      "id": "ECO2026-57",
      "source_question_number": 57,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Dans un marché concurrentiel, une hausse de la productivité marginale du travail, à prix du produit donné, tend à :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Fixer le salaire à zéro",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Réduire nécessairement l'offre de travail",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Accroître la demande de travail",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Réduire automatiquement la production",
          "is_correct": false
        }
      ],
      "explanation": "Le travail devient plus productif en valeur, ce qui incite les entreprises à en demander davantage, toutes choses égales par ailleurs.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-58",
      "source_question_number": 58,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Quel investissement contribue le plus directement à développer le capital humain ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une formation adaptée et le développement des compétences",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Une augmentation de salaire sans changement de compétences",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Une réduction de l'entretien des machines",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Un changement de logo",
          "is_correct": false
        }
      ],
      "explanation": "Le capital humain comprend notamment les connaissances, aptitudes et compétences ; la formation peut en accroître la valeur productive.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-59",
      "source_question_number": 59,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Quand un investissement en capital humain est-il économiquement justifié ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Seulement s'il supprime tout chômage",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Lorsque ses bénéfices attendus actualisés dépassent ses coûts actualisés",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Dès qu'il garantit un emploi à vie",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Lorsque son coût est élevé, indépendamment des résultats",
          "is_correct": false
        }
      ],
      "explanation": "La comparaison doit intégrer les coûts directs, le temps consacré et les gains futurs attendus, avec leurs incertitudes.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-60",
      "source_question_number": 60,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Pour une entreprise preneuse de prix, à un optimum intérieur de court terme où produire est préférable à fermer, quelle condition s'applique ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Le prix est égal au coût fixe total",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Le coût marginal égale le prix sur sa branche pertinente croissante",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "La productivité marginale égale le salaire sans tenir compte du prix",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Le prix est inférieur au coût variable moyen dans tous les cas",
          "is_correct": false
        }
      ],
      "explanation": "La condition P = Cm s'accompagne des conditions de second ordre et de la comparaison avec la fermeture. Elle ne suffit pas isolément à garantir un optimum global.",
      "adaptation": "adapted_question",
      "editorial_note": "Optimum intérieur, branche du coût marginal et condition de fermeture précisés.",
      "references": []
    },
    {
      "id": "ECO2026-61",
      "source_question_number": 61,
      "source_page": 3,
      "subject_code": "EC",
      "question": "Selon l'hypothèse des déficits jumeaux, une hausse du déficit budgétaire peut être associée à :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une dégradation du solde courant extérieur",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Une hausse automatique de l'épargne nationale",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Une amélioration nécessaire de la balance commerciale",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une baisse obligatoire des importations",
          "is_correct": false
        }
      ],
      "explanation": "À autres comportements donnés, la baisse de l'épargne nationale peut détériorer le solde courant. C'est une relation conditionnelle et non universelle.",
      "adaptation": "adapted_question",
      "editorial_note": "Déficit courant retenu ; le déficit commercial n’épuise pas la notion de solde courant.",
      "references": []
    }
  ],
  "duration": 32,
  "description": "QCM en français : Microéconomie et macroéconomie. Adaptation pédagogique de documents datés de 2026 ; corrigé proposé, non officiel. Une ou plusieurs réponses selon la question."
}
MEF_QUIZ_JSON
        , true, 512, JSON_THROW_ON_ERROR);

        $this->importMefQuiz('mef-microeconomie-macroeconomie-fr', $data);
    }
}
