<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MefPolitiquesPubliques2026Seeder extends Seeder
{
    use ImportsMefQuiz;

    public function run(): void
    {
        $data = json_decode(<<<'MEF_QUIZ_JSON'
{
  "title": "Préparation MEF 2026 — Politiques publiques et économie marocaine (adaptation)",
  "subject": "Politiques publiques et économie marocaine",
  "language": "fr",
  "source_date_displayed": "2026-07-05",
  "status": "Corrigé pédagogique non officiel ; adaptation et remplacements signalés",
  "instructions": "Une réponse sauf multiple_choice : sélectionner toutes les réponses exactes.",
  "questions": [
    {
      "id": "ECO2026-06",
      "source_question_number": 6,
      "source_page": 1,
      "subject_code": "PM",
      "question": "Comment définit-on un taux d'urbanisation ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "La part des entreprises exportatrices",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "La part de la population résidant en milieu urbain",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Le taux de croissance du PIB",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "La proportion de personnes ayant un emploi",
          "is_correct": false
        }
      ],
      "explanation": "Il rapporte la population urbaine à la population totale, selon le découpage statistique retenu.\n\nNote éditoriale : question thématique de remplacement. Remplacement de la fourchette chiffrée non confirmée par la définition de l’indicateur.",
      "adaptation": "thematic_replacement",
      "editorial_note": "Remplacement de la fourchette chiffrée non confirmée par la définition de l’indicateur.",
      "references": []
    },
    {
      "id": "ECO2026-07",
      "source_question_number": 7,
      "source_page": 1,
      "subject_code": "PM",
      "question": "Quelle espérance de vie à la naissance pour 2024 figure dans l'indicateur du HCP cité en référence ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "77,2 ans",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "76,9 ans",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "76,6 ans",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "76,7 ans",
          "is_correct": false
        }
      ],
      "explanation": "La série du HCP citée indique 77,2 ans pour 2024. La valeur doit être rattachée à cette publication, les estimations pouvant être révisées.",
      "adaptation": "adapted_question",
      "editorial_note": "Référence HCP précisée : estimation publiée, et non valeur universelle indépendante des révisions.",
      "references": [
        {
          "title": "HCP — Population et démographie, indicateur 2024",
          "url": "https://m.hcp.ma/Population-demographie_r513.html"
        }
      ]
    },
    {
      "id": "ECO2026-08",
      "source_question_number": 8,
      "source_page": 1,
      "subject_code": "PM",
      "question": "À quoi peut servir la mobilisation de foncier public pour un projet agricole ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Garantir automatiquement les bénéfices",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Supprimer le besoin de financement",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Faciliter l'accès au foncier nécessaire à l'investissement",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Remplacer toutes les autorisations environnementales",
          "is_correct": false
        }
      ],
      "explanation": "L'accès au foncier peut lever une contrainte d'investissement. La réussite dépend aussi du financement, des compétences, de l'eau et des débouchés.\n\nNote éditoriale : question thématique de remplacement. Question thématique de remplacement : superficie non confirmée.",
      "adaptation": "thematic_replacement",
      "editorial_note": "Question thématique de remplacement : superficie non confirmée.",
      "references": []
    },
    {
      "id": "ECO2026-09",
      "source_question_number": 9,
      "source_page": 1,
      "subject_code": "PM",
      "question": "Quel indicateur mesure directement la contribution d'une stratégie industrielle à l'emploi ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Le nombre net d'emplois créés",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Le nombre de communiqués publiés",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Le volume de documents administratifs",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Le nombre de réunions tenues",
          "is_correct": false
        }
      ],
      "explanation": "Le nombre net d'emplois créés mesure un résultat. Les activités administratives ne prouvent pas à elles seules une amélioration de l'emploi.\n\nNote éditoriale : question thématique de remplacement. Question thématique de remplacement : objectif chiffré industriel non confirmé.",
      "adaptation": "thematic_replacement",
      "editorial_note": "Question thématique de remplacement : objectif chiffré industriel non confirmé.",
      "references": []
    },
    {
      "id": "ECO2026-10",
      "source_question_number": 10,
      "source_page": 1,
      "subject_code": "PM",
      "question": "Quels objectifs peuvent justifier une diversification du mix énergétique marocain ?",
      "type": "multiple_choice",
      "choices": [
        {
          "id": "A",
          "text": "Concentrer toutes les sources sur un seul combustible importé",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Accroître la contribution des énergies renouvelables",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Diversifier les sources d'approvisionnement",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Réduire la vulnérabilité à une source extérieure unique",
          "is_correct": true
        }
      ],
      "explanation": "Diversification et renouvelables peuvent améliorer la sécurité énergétique. Ils ne suppriment pas instantanément toute dépendance extérieure.",
      "adaptation": "adapted_question",
      "editorial_note": "Plusieurs objectifs sont valables : question explicitement à réponses multiples.",
      "references": []
    },
    {
      "id": "ECO2026-11",
      "source_question_number": 11,
      "source_page": 1,
      "subject_code": "PM",
      "question": "Quel objectif d'emploi est annoncé lors du lancement de la feuille de route marocaine du commerce extérieur 2025-2027 ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "150 000 emplois",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "25 000 emplois",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "10 000 emplois",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "76 000 emplois",
          "is_correct": true
        }
      ],
      "explanation": "Le ministère de l'Industrie et du Commerce annonce un objectif de 76 000 nouveaux emplois. C'est une cible, pas un résultat déjà atteint.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": [
        {
          "title": "Ministère de l’Industrie et du Commerce — Lancement de la feuille de route 2025-2027",
          "url": "https://www.mcinet.gov.ma/fr/actualites/lancement-de-la-feuille-de-route-du-commerce-exterieur-2025-2027"
        }
      ]
    },
    {
      "id": "ECO2026-12",
      "source_question_number": 12,
      "source_page": 1,
      "subject_code": "PM",
      "question": "Quelle mesure détériore directement le climat des affaires ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Simplifier les démarches transparentes",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Renforcer la sécurité juridique",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Introduire des obstacles administratifs imprévisibles",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Faciliter l'accès à l'information",
          "is_correct": false
        }
      ],
      "explanation": "L'imprévisibilité et les obstacles inutiles augmentent les coûts et l'incertitude des entreprises.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation du choix négatif afin d’éviter de supposer que toute digitalisation ou toute innovation est un obstacle.",
      "references": []
    },
    {
      "id": "ECO2026-13",
      "source_question_number": 13,
      "source_page": 1,
      "subject_code": "PM",
      "question": "Quelle évaluation est la plus pertinente pour apprécier une politique de transformation numérique ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Supposer que toute dépense produit automatiquement un gain",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Comparer ressources engagées, services effectivement améliorés et résultats observés",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Compter uniquement les slogans publiés",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Examiner seulement le budget annoncé",
          "is_correct": false
        }
      ],
      "explanation": "Un budget mesure un moyen. L'évaluation doit aussi porter sur les usages, la qualité de service, l'accessibilité et les résultats.\n\nNote éditoriale : question thématique de remplacement. Question thématique de remplacement : enveloppe budgétaire non confirmée.",
      "adaptation": "thematic_replacement",
      "editorial_note": "Question thématique de remplacement : enveloppe budgétaire non confirmée.",
      "references": []
    },
    {
      "id": "ECO2026-14",
      "source_question_number": 14,
      "source_page": 1,
      "subject_code": "PM",
      "question": "Quel objectif caractérise une politique visant à développer un emploi durable et formel ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Réduire uniquement les statistiques publiées",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Ne considérer que le chômage urbain",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Substituer systématiquement des emplois non déclarés",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Créer des postes pérennes déclarés et couverts par les règles sociales",
          "is_correct": true
        }
      ],
      "explanation": "La qualité et la formalisation des postes comptent, au-delà du seul nombre d'emplois créés.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation pédagogique ; choix ajustés pour une réponse défendable.",
      "references": []
    },
    {
      "id": "ECO2026-16",
      "source_question_number": 16,
      "source_page": 1,
      "subject_code": "PM",
      "question": "Laquelle n'est pas une hypothèse de cadrage macroéconomique du PLF 2026 mentionnée dans la synthèse ministérielle citée ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Un prix moyen du Brent de 65 dollars le baril",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Une récolte céréalière de 70 millions de quintaux",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Une parité euro-dollar de 1,11",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une hausse garantie du salaire de chaque travailleur de 10 %",
          "is_correct": true
        }
      ],
      "explanation": "La synthèse retient les trois premières hypothèses. Une hausse salariale individuelle garantie n'en fait pas partie ; les hypothèses ne sont pas des résultats certains.",
      "adaptation": "adapted_question",
      "editorial_note": "Question arabe reformulée en français avec trois hypothèses documentées et un distracteur nouveau.",
      "references": [
        {
          "title": "MEF — Synthèse loi de finances 2026",
          "url": "https://www.finances.gov.ma/Maliya%20tawassol/SLF2026-Fr.pdf"
        }
      ]
    },
    {
      "id": "ECO2026-17",
      "source_question_number": 17,
      "source_page": 2,
      "subject_code": "PM",
      "question": "Quel objectif est cohérent avec une réforme de la gouvernance des établissements et entreprises publics ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Écarter tout objectif de service public",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Supprimer toute évaluation",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Confondre contrôle et exécution",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Clarifier les responsabilités et améliorer la reddition des comptes",
          "is_correct": true
        }
      ],
      "explanation": "Une meilleure gouvernance repose sur des responsabilités identifiables, des objectifs explicites et un suivi des résultats.\n\nNote éditoriale : question thématique de remplacement. Texte arabe insuffisamment lisible ; question de remplacement sur la gouvernance publique, sans prétendre reproduire l’énoncé.",
      "adaptation": "thematic_replacement",
      "editorial_note": "Texte arabe insuffisamment lisible ; question de remplacement sur la gouvernance publique, sans prétendre reproduire l’énoncé.",
      "references": []
    },
    {
      "id": "ECO2026-19",
      "source_question_number": 19,
      "source_page": 2,
      "subject_code": "PM",
      "question": "Quel taux de croissance pour 2026 est retenu dans la synthèse de la loi de finances 2026 citée ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "4,5 %",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "4,6 %",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "6,4 %",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "5,4 %",
          "is_correct": false
        }
      ],
      "explanation": "Cette synthèse retient 4,6 %. Il s'agit d'une prévision du cadrage budgétaire cité, non d'une mesure définitive de la croissance réalisée.",
      "adaptation": "adapted_question",
      "editorial_note": "La prévision de 4,6 % est rattachée à la synthèse finale citée ; des documents préparatoires peuvent retenir d’autres valeurs.",
      "references": [
        {
          "title": "MEF — Synthèse loi de finances 2026",
          "url": "https://www.finances.gov.ma/Maliya%20tawassol/SLF2026-Fr.pdf"
        }
      ]
    },
    {
      "id": "ECO2026-21",
      "source_question_number": 21,
      "source_page": 2,
      "subject_code": "PM",
      "question": "Comment interpréter un taux d'analphabétisme calculé sur la population âgée de dix ans et plus ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Comme le taux de pauvreté monétaire",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Comme la part de tous les enfants non scolarisés",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Comme la part de cette population ne sachant pas lire et écrire selon la définition retenue",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Comme le taux de chômage national",
          "is_correct": false
        }
      ],
      "explanation": "L'âge et la définition statistique sont indispensables. On ne peut pas assimiler ce taux au chômage ou à la pauvreté.\n\nNote éditoriale : question thématique de remplacement. Question de remplacement sur la définition du taux, sans inventer la tranche chiffrée attendue.",
      "adaptation": "thematic_replacement",
      "editorial_note": "Question de remplacement sur la définition du taux, sans inventer la tranche chiffrée attendue.",
      "references": []
    },
    {
      "id": "ECO2026-22",
      "source_question_number": 22,
      "source_page": 2,
      "subject_code": "PM",
      "question": "Quel objectif général correspond à une politique de souveraineté alimentaire ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Supprimer tous les échanges agricoles",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Garantir la disparition de tout aléa climatique",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Interdire toute innovation agricole",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Renforcer la capacité à assurer durablement l'approvisionnement alimentaire",
          "is_correct": true
        }
      ],
      "explanation": "La souveraineté alimentaire implique des capacités de production et d'approvisionnement résilientes ; elle ne signifie pas nécessairement une autarcie intégrale.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation sur la souveraineté alimentaire, sans prétendre transcrire chaque proposition arabe.",
      "references": []
    },
    {
      "id": "ECO2026-23",
      "source_question_number": 23,
      "source_page": 2,
      "subject_code": "PM",
      "question": "Quel résultat permet d'évaluer utilement un programme d'investissement routier ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Le nombre de photographies du chantier",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Le nombre de courriers échangés",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "L'amélioration vérifiée de l'accessibilité et des temps de parcours",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Le seul montant initial annoncé",
          "is_correct": false
        }
      ],
      "explanation": "Les dépenses sont des moyens. L'accessibilité, la sécurité et les temps de trajet renseignent sur les effets du programme.\n\nNote éditoriale : question thématique de remplacement. Enveloppe routière non confirmée ; question de remplacement sur l’évaluation des investissements.",
      "adaptation": "thematic_replacement",
      "editorial_note": "Enveloppe routière non confirmée ; question de remplacement sur l’évaluation des investissements.",
      "references": []
    },
    {
      "id": "ECO2026-24",
      "source_question_number": 24,
      "source_page": 2,
      "subject_code": "PM",
      "question": "Quel résultat est cohérent avec les objectifs d'une politique de soutien à l'investissement productif ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Décourager l'innovation",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Développer l'activité et réduire les disparités territoriales",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Concentrer nécessairement tous les projets dans une seule ville",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Réduire systématiquement l'emploi formel",
          "is_correct": false
        }
      ],
      "explanation": "Un investissement productif peut soutenir l'emploi et le développement territorial, sous réserve de la qualité et de la localisation des projets.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation du thème de soutien à l’investissement ; formulation juridique exacte non reproduite.",
      "references": []
    },
    {
      "id": "ECO2026-25",
      "source_question_number": 25,
      "source_page": 2,
      "subject_code": "PM",
      "question": "Pourquoi développer les formations aux métiers du numérique ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Pour rapprocher les compétences disponibles des besoins de transformation numérique",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Pour garantir un poste à chaque diplômé sans condition",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Pour rendre inutile toute formation continue",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Pour remplacer toutes les autres spécialités",
          "is_correct": false
        }
      ],
      "explanation": "Les compétences numériques soutiennent l'adoption des technologies. Leur efficacité dépend de la qualité des formations et de la demande de travail.\n\nNote éditoriale : question thématique de remplacement. Question de remplacement sur la formation numérique ; objectif quantitatif non confirmé.",
      "adaptation": "thematic_replacement",
      "editorial_note": "Question de remplacement sur la formation numérique ; objectif quantitatif non confirmé.",
      "references": []
    },
    {
      "id": "ECO2026-26",
      "source_question_number": 26,
      "source_page": 2,
      "subject_code": "PM",
      "question": "Quel obstacle peut limiter l'usage de services publics numériques ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une interface accessible",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Une assistance adaptée aux usagers",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Des démarches clairement expliquées",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Un manque d'accès à Internet ou de compétences numériques",
          "is_correct": true
        }
      ],
      "explanation": "La fracture numérique tient à l'équipement, à la connexion et aux compétences. Une mise en ligne seule ne garantit pas l'accès effectif.\n\nNote éditoriale : question thématique de remplacement. Question de remplacement sur l’accès numérique, à partir du thème lisible.",
      "adaptation": "thematic_replacement",
      "editorial_note": "Question de remplacement sur l’accès numérique, à partir du thème lisible.",
      "references": []
    },
    {
      "id": "ECO2026-27",
      "source_question_number": 27,
      "source_page": 2,
      "subject_code": "PM",
      "question": "Quel indicateur évalue un résultat éducatif plutôt qu'un simple moyen engagé ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Le nombre de bureaux administratifs",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "La progression des apprentissages mesurés des élèves",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Le nombre de réunions de lancement",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Le montant des fournitures achetées",
          "is_correct": false
        }
      ],
      "explanation": "Les apprentissages sont un résultat. Les dépenses et activités ne constituent pas, à elles seules, une preuve de progrès éducatif.\n\nNote éditoriale : question thématique de remplacement. Question de remplacement sur les résultats éducatifs ; détail de la feuille de route insuffisamment lisible.",
      "adaptation": "thematic_replacement",
      "editorial_note": "Question de remplacement sur les résultats éducatifs ; détail de la feuille de route insuffisamment lisible.",
      "references": []
    },
    {
      "id": "ECO2026-28",
      "source_question_number": 28,
      "source_page": 2,
      "subject_code": "PM",
      "question": "Pourquoi distinguer une cible de chômage pour 2030 d'un taux observé ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Les deux notions sont identiques",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Une cible est nécessairement déjà atteinte",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Un taux observé est toujours une prévision",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une cible exprime un objectif futur, un taux observé décrit une mesure datée",
          "is_correct": true
        }
      ],
      "explanation": "L'évaluation compare ensuite les mesures effectives à l'objectif, en tenant compte des définitions et du contexte.\n\nNote éditoriale : question thématique de remplacement. Cible chiffrée non confirmée ; question de remplacement distinguant cible et résultat.",
      "adaptation": "thematic_replacement",
      "editorial_note": "Cible chiffrée non confirmée ; question de remplacement distinguant cible et résultat.",
      "references": []
    },
    {
      "id": "ECO2026-30",
      "source_question_number": 30,
      "source_page": 2,
      "subject_code": "PM",
      "question": "Quel objectif correspond à une régionalisation orientée vers un développement territorial équilibré ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Réduire les disparités entre territoires",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Supprimer tous les budgets régionaux",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Concentrer tous les pouvoirs localement sans coordination",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Uniformiser toutes les activités économiques",
          "is_correct": false
        }
      ],
      "explanation": "Un développement équilibré vise à réduire les écarts d'accès aux services et aux opportunités, avec une coordination entre niveaux de décision.",
      "adaptation": "adapted_question",
      "editorial_note": "Reformulation en français du thème de développement territorial.",
      "references": []
    }
  ],
  "duration": 32,
  "description": "QCM en français : Politiques publiques et économie marocaine. Adaptation pédagogique de documents datés de 2026 ; corrigé proposé, non officiel. Une ou plusieurs réponses selon la question. Comprend 11 questions thématiques de remplacement, identifiées dans les explications."
}
MEF_QUIZ_JSON
        , true, 512, JSON_THROW_ON_ERROR);

        $this->importMefQuiz('mef-politiques-publiques-economie-marocaine-fr', $data);
    }
}
