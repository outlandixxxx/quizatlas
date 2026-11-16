<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MefCultureGenerale2023Seeder extends Seeder
{
    use ImportsMefQuiz;

    public function run(): void
    {
        $data = json_decode(<<<'MEF_QUIZ_JSON'
{
  "title": "Préparation MEF 2023 — Culture générale et institutions (adaptation)",
  "subject": "Culture générale et institutions",
  "language": "fr",
  "historical_context": "2023-11-18",
  "status": "Corrigé pédagogique proposé, non officiel",
  "instructions": "Une seule réponse pour single_choice ; toutes les réponses exactes pour multiple_choice.",
  "questions": [
    {
      "id": "A-01",
      "source_question": "A-01",
      "question": "À quelle date le décret marocain n° 2-22-431 relatif aux marchés publics est-il entré en vigueur ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "9 mars 2023",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "1er septembre 2023",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "1er janvier 2024",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "1er octobre 2023",
          "is_correct": false
        }
      ],
      "explanation": "La publication et l'entrée en vigueur sont distinctes : le nouveau dispositif est entré en vigueur le 1er septembre 2023.",
      "source_pages": [
        1
      ],
      "references": [
        {
          "title": "TGR — Décret des marchés publics, édition 2023",
          "url": "https://www.tgr.gov.ma/wps/wcm/connect/927951cd-a477-486c-b65f-11f675604508/D%C3%A9cret%2Bdes%2Bmarch%C3%A9s%2Bpublics%2Bet%2Barr%C3%AAt%C3%A9s%2Bd%E2%80%99application.pdf?MOD=AJPERES"
        }
      ],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "A-02",
      "source_question": "A-02",
      "question": "Quel vote permet au Parlement d'approuver les résultats de l'exécution d'un exercice budgétaire achevé ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "La liquidation des dépenses",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Le vote du taux directeur",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Le vote de la loi de règlement",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "L'émission des mandats de paiement",
          "is_correct": false
        }
      ],
      "explanation": "La loi de règlement porte sur les résultats de l'exécution budgétaire. Le Parlement vote aussi la loi de finances, mais ne procède pas lui-même à son exécution.",
      "source_pages": [
        1
      ],
      "references": [
        {
          "title": "Loi organique n° 130-13, article 64",
          "url": "https://bdj.mmsp.gov.ma/Ar/Document/10036-Dahir-n-1-15-62-du-14-chaabane-1436-2-juin-2015.aspx"
        }
      ],
      "editorial_note": "Traduction en français et ciblage de la loi de règlement ; le texte source mêlait vote initial et contrôle a posteriori."
    },
    {
      "id": "A-03",
      "source_question": "A-03",
      "question": "Au 18 novembre 2023, combien de phases finales de la Coupe du monde masculine de football le Maroc avait-il disputées ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Six",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Quatre",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Cinq",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Sept",
          "is_correct": false
        }
      ],
      "explanation": "Les six éditions étaient 1970, 1986, 1994, 1998, 2018 et 2022. La date de référence évite de confondre cette donnée historique avec un total ultérieur.",
      "source_pages": [
        1
      ],
      "references": [],
      "editorial_note": "Date et compétition masculine précisées pour conserver la réponse historique."
    },
    {
      "id": "A-04",
      "source_question": "A-04",
      "question": "En droit commercial marocain, un chèque est en principe payable :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "À la clôture de l'exercice",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "À vue",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Uniquement trente jours après sa création",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "À une échéance librement fixée comme une lettre de change",
          "is_correct": false
        }
      ],
      "explanation": "Le chèque est un instrument de paiement à vue. Une date future inscrite sur le chèque n'en fait pas un instrument payable à terme.",
      "source_pages": [
        1
      ],
      "references": [
        {
          "title": "Code de commerce, article 267 — TGR",
          "url": "https://www.tgr.gov.ma/wps/wcm/connect/96ab6f6f-0a8c-4b39-8006-c2ece25093b8/Dahir%2B1-96-83.pdf?MOD=AJPERES"
        }
      ],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "A-05",
      "source_question": "A-05",
      "question": "Quelle stratégie agricole marocaine couvre la période 2020-2030 ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Plan d'accélération industrielle",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Génération Green",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Plan Azur",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Maroc Numeric 2013",
          "is_correct": false
        }
      ],
      "explanation": "Génération Green 2020-2030 succède au Plan Maroc Vert et concerne le développement agricole.",
      "source_pages": [
        1
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "A-06",
      "source_question": "A-06",
      "question": "Quel organisme marocain veille au respect de la réglementation des changes pour les opérations avec l'étranger ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "L'AMMC",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "La Cour constitutionnelle",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Le Conseil de la concurrence",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "L'Office des Changes",
          "is_correct": true
        }
      ],
      "explanation": "L'Office des Changes contrôle le respect de la réglementation des changes, notamment dans les règlements internationaux.",
      "source_pages": [
        1
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "A-07",
      "source_question": "A-07",
      "question": "À quel niveau Bank Al-Maghrib a-t-elle porté son taux directeur lors de sa décision du 21 mars 2023 ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "2,5 %",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "3 %",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "4 %",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "2 %",
          "is_correct": false
        }
      ],
      "explanation": "Le Conseil a décidé une hausse de 50 points de base, portant le taux de 2,5 % à 3 %. Il s'agit du niveau historique de mars 2023.",
      "source_pages": [
        1
      ],
      "references": [
        {
          "title": "Bank Al-Maghrib — Conseil du 21 mars 2023",
          "url": "https://www.bkam.ma/content/download/781253/8708786/Communique%20de%20Presse%20mars%20%202023%20FR.pdf"
        }
      ],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "A-08",
      "source_question": "A-08",
      "question": "Que signifie RSU dans le dispositif marocain de protection sociale ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Répertoire social unique",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Registre des services urbains",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Régime salarial universel",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Registre social unifié",
          "is_correct": true
        }
      ],
      "explanation": "Le Registre social unifié est un dispositif d'enregistrement et de ciblage des ménages pour les programmes d'appui social.",
      "source_pages": [
        1
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "A-09",
      "source_question": "A-09",
      "question": "Dans la séparation des fonctions de la comptabilité publique, lequel n'est pas un comptable public ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Le percepteur",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "L'ordonnateur",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Le receveur des finances",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Le trésorier ministériel",
          "is_correct": false
        }
      ],
      "explanation": "L'ordonnateur prescrit les opérations de recettes et de dépenses. Le comptable public prend en charge leur exécution comptable et les contrôles qui lui incombent.",
      "source_pages": [
        1
      ],
      "references": [],
      "editorial_note": "Traduction et choix clarifiés ; la qualification du greffier dépend de ses fonctions."
    },
    {
      "id": "A-10",
      "source_question": "A-10",
      "question": "Quelle autorité régule le marché marocain des capitaux ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Bank Al-Maghrib uniquement",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "L'Autorité marocaine du marché des capitaux",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Le ministère de l'Agriculture",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "L'Office des Changes uniquement",
          "is_correct": false
        }
      ],
      "explanation": "L'AMMC assure la régulation du marché des capitaux et contribue à la protection de l'épargne investie en instruments financiers.",
      "source_pages": [
        1
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "A-11",
      "source_question": "A-11",
      "question": "Quelle superficie est généralement donnée par les publications officielles marocaines, en incluant le Sahara occidental dans le périmètre retenu ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "610 850 km²",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "710 850 km²",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "810 850 km²",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "510 850 km²",
          "is_correct": false
        }
      ],
      "explanation": "La valeur attendue dans ce cadre est 710 850 km². D'autres sources emploient un périmètre différent ; le Sahara occidental est un territoire au statut international disputé.",
      "source_pages": [
        2
      ],
      "references": [],
      "editorial_note": "Périmètre géographique explicité."
    },
    {
      "id": "A-12",
      "source_question": "A-12",
      "question": "Quelle structure relève du ministère marocain de l'Économie et des Finances dans le cadre de l'organisation étudiée ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "L'Agence judiciaire du Royaume",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Le Conseil de la concurrence",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "La Cour constitutionnelle",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "L'Institution du Médiateur du Royaume",
          "is_correct": false
        }
      ],
      "explanation": "L'Agence judiciaire du Royaume figure parmi les structures du ministère. Le Médiateur et le Conseil de la concurrence ne sont pas des directions de ce ministère.",
      "source_pages": [
        2
      ],
      "references": [
        {
          "title": "MEF — Directions",
          "url": "https://www.finances.gov.ma/bsg/nos-metiers/Pages/directions.aspx"
        }
      ],
      "editorial_note": "Traduction de la question arabe."
    },
    {
      "id": "A-13",
      "source_question": "A-13",
      "question": "Combien de sièges compte la Chambre des représentants du Maroc dans la législature issue de 2021 ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "325",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "395",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "120",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "275",
          "is_correct": false
        }
      ],
      "explanation": "La Chambre des représentants compte 395 sièges. Il ne faut pas la confondre avec la Chambre des conseillers.",
      "source_pages": [
        2
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "A-14",
      "source_question": "A-14",
      "question": "Quelles juridictions assurent le suivi et le contrôle des déclarations obligatoires de patrimoine selon les catégories d'assujettis ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Les juridictions constitutionnelles uniquement",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "La Cour des comptes et les cours régionales des comptes compétentes",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Les tribunaux militaires uniquement",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Les tribunaux de commerce uniquement",
          "is_correct": false
        }
      ],
      "explanation": "La compétence dépend notamment de la fonction et du ressort territorial. Réduire la réponse à la seule administration fiscale serait incorrect.",
      "source_pages": [
        2
      ],
      "references": [
        {
          "title": "Cour des comptes — Déclarations de patrimoine, questions/réponses",
          "url": "https://www.courdescomptes.ma/autres-acces/dop-questions-reponses/"
        }
      ],
      "editorial_note": "Compétence des cours régionales précisée."
    },
    {
      "id": "A-15",
      "source_question": "A-15",
      "question": "Quel instrument une banque centrale peut-elle utiliser pour freiner la demande et limiter une inflation persistante ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Supprimer tous les impôts",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Fixer directement tous les prix de détail",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Abaisser systématiquement son taux directeur",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Relever son taux directeur",
          "is_correct": true
        }
      ],
      "explanation": "Une hausse du taux directeur peut renchérir le crédit et modérer la demande. Son efficacité dépend des causes de l'inflation et des mécanismes de transmission.",
      "source_pages": [
        2
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "A-16",
      "source_question": "A-16",
      "question": "Dans le cadre juridique applicable aux centres hospitaliers universitaires marocains en 2023, un CHU est principalement :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Un établissement public",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Un service sans personnalité morale dans tous les cas",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Une association professionnelle",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une société anonyme privée",
          "is_correct": false
        }
      ],
      "explanation": "Le CHU possède un statut d'établissement public ; cette qualification ne se confond pas avec une société commerciale ou un simple service administratif.",
      "source_pages": [
        2
      ],
      "references": [
        {
          "title": "Ministère de la Santé — CHU",
          "url": "https://www.sante.gov.ma/Pages/Org%20sous-tutelle/CHU.aspx"
        }
      ],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "A-17",
      "source_question": "A-17",
      "question": "À partir de septembre 2023, quel salaire brut obtient-on pour 191 heures au minimum horaire non agricole de 16,29 DH ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "2 770,05 DH",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "2 970,05 DH",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "3 000,00 DH",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "3 111,39 DH",
          "is_correct": true
        }
      ],
      "explanation": "16,29 × 191 = 3 111,39 DH brut. Les choix de l'image ne proposent pas ce montant ; 2 970,05 DH correspond à 15,55 × 191, avant cette revalorisation.",
      "source_pages": [
        2
      ],
      "references": [
        {
          "title": "SNRT News, 25 octobre 2023 — décret n° 2.23.799",
          "url": "https://snrtnews.com/article/85850"
        }
      ],
      "editorial_note": "Montant corrigé ; les réponses de la transcription ne correspondent pas au taux applicable depuis septembre 2023."
    },
    {
      "id": "A-18",
      "source_question": "A-18",
      "question": "En quelle année le Maroc a-t-il réintégré l'Union africaine ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "2017",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "2018",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "2016",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "2019",
          "is_correct": false
        }
      ],
      "explanation": "Le retour du Maroc au sein de l'Union africaine a été acté en janvier 2017.",
      "source_pages": [
        2
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "A-19",
      "source_question": "A-19",
      "question": "Lequel de ces impôts est un impôt indirect ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Aucun des trois",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "L'impôt sur les sociétés",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "L'impôt sur le revenu",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "La taxe sur la valeur ajoutée",
          "is_correct": true
        }
      ],
      "explanation": "La TVA est un impôt indirect sur la consommation. L'IR et l'IS sont classés parmi les impôts directs.",
      "source_pages": [
        2
      ],
      "references": [],
      "editorial_note": "Traduction de la question arabe."
    },
    {
      "id": "A-20",
      "source_question": "A-20",
      "question": "Quels éléments appartiennent à une analyse SWOT ?",
      "type": "multiple_choice",
      "choices": [
        {
          "id": "A",
          "text": "Les opportunités et les menaces externes",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Uniquement les mouvements de trésorerie",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Uniquement les stocks de matières premières",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Les forces et les faiblesses internes",
          "is_correct": true
        }
      ],
      "explanation": "SWOT associe le diagnostic interne, forces et faiblesses, au diagnostic externe, opportunités et menaces. Les deux premières propositions sont complémentaires.",
      "source_pages": [
        2
      ],
      "references": [],
      "editorial_note": "Deux réponses correctes conservées pour les diagnostics interne et externe."
    }
  ],
  "duration": 30,
  "description": "QCM en français : Culture générale et institutions. Adaptation pédagogique de documents datés de 2023 ; corrigé proposé, non officiel. Une ou plusieurs réponses selon la question."
}
MEF_QUIZ_JSON
        , true, 512, JSON_THROW_ON_ERROR);

        $this->importMefQuiz('mef-culture-generale-fr', $data);
    }
}
