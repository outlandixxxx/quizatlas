<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MefMonnaieBanque2026Seeder extends Seeder
{
    use ImportsMefQuiz;

    public function run(): void
    {
        $data = json_decode(<<<'MEF_QUIZ_JSON'
{
  "title": "Préparation MEF 2026 — Monnaie, banque et financement (adaptation)",
  "subject": "Monnaie, banque et financement",
  "language": "fr",
  "source_date_displayed": "2026-07-05",
  "status": "Corrigé pédagogique non officiel ; adaptation et remplacements signalés",
  "instructions": "Une réponse sauf multiple_choice : sélectionner toutes les réponses exactes.",
  "questions": [
    {
      "id": "ECO2026-72",
      "source_question_number": 72,
      "source_page": 4,
      "subject_code": "MN",
      "question": "Quel effet une hausse du taux directeur de Bank Al-Maghrib tend-elle à produire, toutes choses égales par ailleurs ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Un renchérissement des conditions de crédit",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Une accélération certaine de la croissance",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Une création automatique de monnaie illimitée",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une baisse garantie du coût du crédit",
          "is_correct": false
        }
      ],
      "explanation": "La transmission peut relever les taux de financement et freiner la demande. Elle est progressive et n'est pas identique pour tous les crédits.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-73",
      "source_question_number": 73,
      "source_page": 4,
      "subject_code": "MN",
      "question": "Face à des tensions inflationnistes persistantes, quelle mesure correspond à un resserrement monétaire ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Accroître sans limite la liquidité",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Supprimer toutes les réserves obligatoires dans tous les cas",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Abaisser systématiquement le taux directeur",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Relever le taux directeur",
          "is_correct": true
        }
      ],
      "explanation": "Le relèvement du taux directeur peut modérer la demande et les anticipations inflationnistes ; le choix dépend de l'origine des tensions.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-74",
      "source_question_number": 74,
      "source_page": 4,
      "subject_code": "MN",
      "question": "Quel enchaînement est attendu d'une politique monétaire restrictive, dans le mécanisme usuel et avec des délais ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Conditions de financement plus strictes, ralentissement de la demande et atténuation de l'inflation",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Neutralité parfaite à tout horizon",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Hausse illimitée de la monnaie et baisse de tous les taux",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Baisse des taux et hausse garantie de l'inflation",
          "is_correct": false
        }
      ],
      "explanation": "La restriction agit sur le financement et la demande, puis sur les prix. L'ampleur et le calendrier dépendent de la transmission.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-75",
      "source_question_number": 75,
      "source_page": 4,
      "subject_code": "MN",
      "question": "Le multiplicateur monétaire observé peut être faible lorsque :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "La demande de crédit est illimitée et satisfaite",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Les banques accumulent des réserves et le crédit progresse peu",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Les banques prêtent toujours toutes leurs ressources",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Les réserves excédentaires sont impossibles",
          "is_correct": false
        }
      ],
      "explanation": "Une faible expansion du crédit limite l'expansion des dépôts relativement à la base monétaire. Le multiplicateur n'est pas un mécanisme automatique fixe.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-76",
      "source_question_number": 76,
      "source_page": 4,
      "subject_code": "MN",
      "question": "Qu'est-ce qu'une trappe à liquidité dans le modèle keynésien usuel ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une situation où des taux très bas et une forte préférence pour la liquidité limitent l'efficacité d'une expansion monétaire conventionnelle",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "L'absence de réserves bancaires",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Une hausse mécanique de tous les taux",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une inflation forcément très élevée",
          "is_correct": false
        }
      ],
      "explanation": "Des injections supplémentaires peuvent être conservées sous forme liquide plutôt que stimuler fortement la dépense ; cela n'annule pas nécessairement tous les autres instruments.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-77",
      "source_question_number": 77,
      "source_page": 4,
      "subject_code": "MN",
      "question": "Quel avantage potentiel présente un régime de change plus flexible ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Ancrer plus rigidement la monnaie à l'euro",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Permettre au taux de change d'absorber une partie des chocs extérieurs",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Garantir une amélioration permanente de la compétitivité",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Supprimer tout risque de change",
          "is_correct": false
        }
      ],
      "explanation": "La flexibilité facilite certains ajustements, mais peut aussi accroître la variabilité du change. Elle ne garantit pas une dépréciation ni un gain durable de compétitivité.",
      "adaptation": "adapted_question",
      "editorial_note": "Suppression de l’idée qu’un change flexible améliore automatiquement la compétitivité.",
      "references": []
    },
    {
      "id": "ECO2026-78",
      "source_question_number": 78,
      "source_page": 4,
      "subject_code": "MN",
      "question": "Quelles pondérations du panier de cotation du dirham ont été adoptées le 13 avril 2015 ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "40 % euro et 60 % dollar américain",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "20 % euro et 80 % dollar américain",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "80 % euro et 20 % dollar américain",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "60 % euro et 40 % dollar américain",
          "is_correct": true
        }
      ],
      "explanation": "Le communiqué ministériel du 13 avril 2015 retient 60 % pour l'euro et 40 % pour le dollar américain. La question est explicitement datée.",
      "adaptation": "adapted_question",
      "editorial_note": "Question datée au changement des pondérations de 2015.",
      "references": [
        {
          "title": "MEF — Pondérations du panier, 13 avril 2015",
          "url": "https://www.finances.gov.ma/fr/pages/detail-actualite.aspx?fiche=2110"
        }
      ]
    },
    {
      "id": "ECO2026-79",
      "source_question_number": 79,
      "source_page": 4,
      "subject_code": "MN",
      "question": "Au Maroc, quelle autorité délivre l'agrément des sociétés de financement collaboratif de catégorie investissement ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Le Conseil de la concurrence",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Le ministère de l'Agriculture",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "La Cour constitutionnelle",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "L'AMMC",
          "is_correct": true
        }
      ],
      "explanation": "L'AMMC intervient pour la catégorie investissement ; Bank Al-Maghrib pour les catégories prêt et don. Le financement collaboratif ne doit pas être confondu avec les banques participatives.",
      "adaptation": "adapted_question",
      "editorial_note": "La source semble dire financement participatif et offre des choix incomplets. Question reconstruite sur le financement collaboratif de catégorie investissement ; ce n’est pas le même concept que la banque participative.",
      "references": [
        {
          "title": "AMMC — FAQ financement collaboratif",
          "url": "https://www.ammc.ma/fr/crowdfunding/faq"
        }
      ]
    },
    {
      "id": "ECO2026-80",
      "source_question_number": 80,
      "source_page": 4,
      "subject_code": "MN",
      "question": "Quel facteur favorise la propagation d'un risque systémique bancaire ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une forte interconnexion entre institutions financières",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "L'absence de toute exposition entre institutions",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "La disparition des engagements financiers",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une indépendance absolue de tous les bilans",
          "is_correct": false
        }
      ],
      "explanation": "Les liens de financement et expositions communes peuvent transmettre un choc. La diversification seule n'élimine pas ce risque.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-81",
      "source_question_number": 81,
      "source_page": 4,
      "subject_code": "MN",
      "question": "Pour une obligation existante à taux fixe, quel est l'effet usuel d'une hausse du rendement exigé, toutes choses égales par ailleurs ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Son prix augmente nécessairement",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Son prix baisse",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Son prix ne peut jamais varier",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Son coupon contractuel double automatiquement",
          "is_correct": false
        }
      ],
      "explanation": "Le prix est la valeur actualisée des flux futurs : un taux d'actualisation plus élevé réduit cette valeur.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    }
  ],
  "duration": 15,
  "description": "QCM en français : Monnaie, banque et financement. Adaptation pédagogique de documents datés de 2026 ; corrigé proposé, non officiel. Une ou plusieurs réponses selon la question."
}
MEF_QUIZ_JSON
        , true, 512, JSON_THROW_ON_ERROR);

        $this->importMefQuiz('mef-monnaie-banque-financement-fr', $data);
    }
}
