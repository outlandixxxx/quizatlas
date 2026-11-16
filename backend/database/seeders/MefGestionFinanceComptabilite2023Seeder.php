<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MefGestionFinanceComptabilite2023Seeder extends Seeder
{
    use ImportsMefQuiz;

    public function run(): void
    {
        $data = json_decode(<<<'MEF_QUIZ_JSON'
{
  "title": "Préparation MEF 2023 — Gestion, finance et comptabilité (adaptation)",
  "subject": "Gestion, finance et comptabilité",
  "language": "fr",
  "historical_context": "2023-11-18",
  "status": "Corrigé pédagogique proposé, non officiel",
  "instructions": "Une seule réponse pour single_choice ; toutes les réponses exactes pour multiple_choice.",
  "questions": [
    {
      "id": "B4-01",
      "source_question": "B4-01",
      "question": "Quelles formes sont classiquement rangées parmi les sociétés de capitaux ?",
      "type": "multiple_choice",
      "choices": [
        {
          "id": "A",
          "text": "L'association sans but lucratif",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "La société en nom collectif",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "La société anonyme",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "La société en commandite par actions",
          "is_correct": true
        }
      ],
      "explanation": "La SA et la SCA sont des sociétés de capitaux. La SNC est une société de personnes ; la SARL, absente de ces choix adaptés, présente un caractère mixte.",
      "source_pages": [
        7
      ],
      "references": [],
      "editorial_note": "SARL remplacée par un distracteur non ambigu car sa classification est mixte."
    },
    {
      "id": "B4-02",
      "source_question": "B4-02",
      "question": "Dans le cadre fiscal marocain de 2023, quel élément est exonéré d'IR parmi les suivants ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une prime de rendement ordinaire",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Le salaire de base",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Les allocations familiales",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Un avantage en nature imposable",
          "is_correct": false
        }
      ],
      "explanation": "Les allocations familiales figurent parmi les exonérations prévues pour les revenus salariaux. Les autres éléments proposés sont en principe imposables.",
      "source_pages": [
        7
      ],
      "references": [
        {
          "title": "Code général des impôts 2023, articles 57 et 73",
          "url": "https://marocpme.gov.ma/wp-content/uploads/2023/08/Code-general-des-impots-2023.pdf"
        }
      ],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B4-03",
      "source_question": "B4-03",
      "question": "Un gain de change réalisé est classé, dans le référentiel comptable marocain, parmi :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Les capitaux propres",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Les produits d'exploitation",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Les produits financiers",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Les immobilisations corporelles",
          "is_correct": false
        }
      ],
      "explanation": "Le gain de change réalisé est un produit financier. Il faut le distinguer du gain latent constaté à la clôture.",
      "source_pages": [
        7
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B4-04",
      "source_question": "B4-04",
      "question": "Quel état synthétise les produits et charges de l'exercice afin de déterminer le résultat ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Le livre d'inventaire des stocks uniquement",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Le seul bilan fonctionnel",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Le compte de produits et charges",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Le tableau des immobilisations uniquement",
          "is_correct": false
        }
      ],
      "explanation": "Le CPC retrace la formation du résultat sur une période ; le bilan présente une situation patrimoniale à une date.",
      "source_pages": [
        7
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B4-05",
      "source_question": "B4-05",
      "question": "À quel principe renvoie l'égalité entre le bilan d'ouverture de N et le bilan de clôture de N−1 ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "La spécialisation des marchés",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "La variabilité des méthodes",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "La compensation des actifs et passifs",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "L'intangibilité du bilan d'ouverture",
          "is_correct": true
        }
      ],
      "explanation": "Le bilan d'ouverture reprend le bilan de clôture précédent. Cela ne doit pas être confondu avec la continuité d'exploitation.",
      "source_pages": [
        7
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B4-06",
      "source_question": "B4-06",
      "question": "Dans une lecture financière simplifiée, les capitaux permanents comprennent :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Les capitaux propres et les dettes financières à long et moyen terme",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Uniquement les disponibilités",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Uniquement les ressources définitivement acquises",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Uniquement les dettes fournisseurs à court terme",
          "is_correct": false
        }
      ],
      "explanation": "Ce sont des ressources durables : elles comprennent des dettes remboursables à long ou moyen terme, pas seulement les capitaux propres.",
      "source_pages": [
        7
      ],
      "references": [],
      "editorial_note": "Choix corrigés : capitaux permanents incluent aussi les dettes durables."
    },
    {
      "id": "B4-07",
      "source_question": "B4-07",
      "question": "Quels instruments sont classiquement des effets de commerce ?",
      "type": "multiple_choice",
      "choices": [
        {
          "id": "A",
          "text": "La carte bancaire",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Le virement bancaire",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "La lettre de change",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Le billet à ordre",
          "is_correct": true
        }
      ],
      "explanation": "La lettre de change et le billet à ordre matérialisent des créances payables selon leurs conditions. Ils se distinguent des simples moyens de transfert ou de paiement proposés.",
      "source_pages": [
        7
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B4-08",
      "source_question": "B4-08",
      "question": "Pourquoi réintégrer fiscalement une charge comptabilisée mais non déductible ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Pour supprimer la charge des comptes dans tous les cas",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Pour corriger le résultat comptable afin de déterminer le résultat fiscal",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Pour diminuer nécessairement la base imposable",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Pour rembourser automatiquement un impôt",
          "is_correct": false
        }
      ],
      "explanation": "La réintégration ajoute au résultat comptable une charge que les règles fiscales n'admettent pas en déduction. Elle ne signifie pas qu'il faut annuler son écriture comptable.",
      "source_pages": [
        7
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B4-09",
      "source_question": "B4-09",
      "question": "Sachant que TN = FR − BFR, quels changements augmentent la trésorerie nette, toutes choses égales par ailleurs ?",
      "type": "multiple_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une baisse du fonds de roulement",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Une baisse du besoin en fonds de roulement",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Une hausse du besoin en fonds de roulement",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une hausse du fonds de roulement",
          "is_correct": true
        }
      ],
      "explanation": "Une augmentation de FR ou une diminution de BFR augmente la différence FR − BFR. Les autres variations la réduisent.",
      "source_pages": [
        7
      ],
      "references": [],
      "editorial_note": "Hypothèse toutes choses égales par ailleurs ajoutée."
    },
    {
      "id": "B4-10",
      "source_question": "B4-10",
      "question": "Quel énoncé définit le seuil de rentabilité exprimé en chiffre d'affaires ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Le chiffre d'affaires maximal autorisé",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Le chiffre d'affaires pour lequel le résultat est nul",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Le total de la trésorerie disponible",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "La date exacte de paiement de tous les fournisseurs",
          "is_correct": false
        }
      ],
      "explanation": "Au seuil de rentabilité, les recettes couvrent l'ensemble des charges. Le point mort désigne le moment où ce seuil est atteint.",
      "source_pages": [
        7
      ],
      "references": [],
      "editorial_note": "Seuil chiffré distingué du point mort en date."
    },
    {
      "id": "B4-11",
      "source_question": "B4-11",
      "question": "Dans le cadre de la loi marocaine n° 17-95 étudiée pour 2023, quel est le nombre minimal d'actionnaires d'une SA ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Six",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Cinq",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Quatre",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Trois",
          "is_correct": false
        }
      ],
      "explanation": "La loi prévoit un minimum de cinq actionnaires pour la société anonyme visée. Il ne faut pas transposer cette règle à toutes les formes de sociétés.",
      "source_pages": [
        8
      ],
      "references": [
        {
          "title": "Recueil AMMC — Loi n° 17-95, article premier",
          "url": "https://www.jurismaroc.com/recueil_ammc/dfr.php?next=t4"
        }
      ],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B4-12",
      "source_question": "B4-12",
      "question": "Un apport en industrie correspond principalement à :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Un versement d'argent",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "La mise à disposition d'un travail, de compétences ou d'un savoir-faire",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Un apport d'immeubles uniquement",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Un apport de machines uniquement",
          "is_correct": false
        }
      ],
      "explanation": "L'apport en industrie porte sur une activité ou des compétences, contrairement aux apports en numéraire et en nature. Son admission dépend de la forme juridique.",
      "source_pages": [
        8
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B4-13",
      "source_question": "B4-13",
      "question": "Dans le référentiel comptable marocain, les écarts de conversion-passif correspondent à :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Des gains latents de change",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Des ventes réalisées au comptant",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Des pertes latentes de change",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Des charges de personnel",
          "is_correct": false
        }
      ],
      "explanation": "Ils constatent des gains de change non encore réalisés sur les postes concernés. Les pertes latentes relèvent des écarts de conversion-actif.",
      "source_pages": [
        8
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B4-14",
      "source_question": "B4-14",
      "question": "Un crédit de trésorerie finance principalement :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une donation définitive de la banque",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Un besoin de liquidité à court terme",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Une immobilisation sur vingt ans dans tous les cas",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une augmentation obligatoire du capital",
          "is_correct": false
        }
      ],
      "explanation": "Le crédit de trésorerie couvre généralement des décalages temporaires d'encaissements et de décaissements.",
      "source_pages": [
        8
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B4-15",
      "source_question": "B4-15",
      "question": "Les frais de tenue de compte et commissions rémunérant un service bancaire, hors intérêts, sont classés parmi :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Les immobilisations financières",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Les produits financiers",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Les charges d'exploitation",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Les capitaux propres",
          "is_correct": false
        }
      ],
      "explanation": "Dans le plan comptable marocain, les services bancaires relèvent notamment du compte 6147, distinct des charges d'intérêts.",
      "source_pages": [
        8
      ],
      "references": [
        {
          "title": "MEF — Plan comptable du secteur immobilier, compte 6147",
          "url": "https://www.finances.gov.ma/Publication/depp/2022/Plan%20comptable%20du%20secteur%20Immobilier.pdf"
        }
      ],
      "editorial_note": "Services bancaires hors intérêts précisés."
    },
    {
      "id": "B4-16",
      "source_question": "B4-16",
      "question": "Pour l'acheteur, un escompte de règlement obtenu de son fournisseur est :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une charge financière",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Une dette à long terme",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Un produit financier",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Une charge de personnel",
          "is_correct": false
        }
      ],
      "explanation": "L'escompte obtenu rémunère un paiement anticipé ou selon les conditions convenues. Il se distingue des réductions commerciales telles que les remises.",
      "source_pages": [
        8
      ],
      "references": [],
      "editorial_note": "Point de vue de l’acheteur et escompte obtenu explicités."
    },
    {
      "id": "B4-17",
      "source_question": "B4-17",
      "question": "Selon le barème général de l'IR marocain de 2023, jusqu'à quel revenu net imposable annuel la première tranche est-elle exonérée ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "20 000 DH",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "50 000 DH",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "30 000 DH",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "40 000 DH",
          "is_correct": false
        }
      ],
      "explanation": "L'article 73 du CGI 2023 exonère la tranche allant jusqu'à 30 000 DH. Il s'agit du revenu net imposable annuel et du barème historique de 2023.",
      "source_pages": [
        8
      ],
      "references": [
        {
          "title": "Code général des impôts 2023, articles 57 et 73",
          "url": "https://marocpme.gov.ma/wp-content/uploads/2023/08/Code-general-des-impots-2023.pdf"
        }
      ],
      "editorial_note": "Année 2023 et revenu annuel net imposable explicités."
    },
    {
      "id": "B4-18",
      "source_question": "B4-18",
      "question": "Que mesure principalement l'excédent brut d'exploitation ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "La performance brute d'exploitation avant amortissements et financement",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Le patrimoine net à la liquidation",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Le solde bancaire exact",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Le bénéfice net après tous les impôts",
          "is_correct": false
        }
      ],
      "explanation": "L'EBE renseigne sur la performance de l'exploitation avant les dotations aux amortissements et l'effet de la structure financière ; ce n'est pas le résultat net.",
      "source_pages": [
        8
      ],
      "references": [],
      "editorial_note": "Performance d’exploitation distinguée du résultat net."
    },
    {
      "id": "B4-19",
      "source_question": "B4-19",
      "question": "Dans le bilan fonctionnel, le fonds de roulement fonctionnel se calcule par :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Financements permanents moins actif immobilisé",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Stocks moins dettes fournisseurs uniquement",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Produits moins charges",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Trésorerie-actif moins trésorerie-passif",
          "is_correct": false
        }
      ],
      "explanation": "Le FRF mesure l'excédent des ressources stables sur les emplois stables. La différence entre trésorerie-actif et trésorerie-passif est la trésorerie nette.",
      "source_pages": [
        8
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B4-20",
      "source_question": "B4-20",
      "question": "Que permet la méthode des coûts complets par centres d'analyse ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Garantir que toutes les clés de répartition sont parfaitement objectives",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Décider automatiquement d'abandonner tout produit déficitaire",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Calculer un coût de revient incluant les charges directes et une répartition des charges indirectes",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Ignorer les charges indirectes",
          "is_correct": false
        }
      ],
      "explanation": "Les centres d'analyse servent à répartir les charges indirectes dans les coûts. Une décision d'abandon exige aussi d'étudier les charges évitables et les conséquences commerciales.",
      "source_pages": [
        8
      ],
      "references": [],
      "editorial_note": "Décision automatique d’abandon et fiabilité absolue exclues."
    }
  ],
  "duration": 30,
  "description": "QCM en français : Gestion, finance et comptabilité. Adaptation pédagogique de documents datés de 2023 ; corrigé proposé, non officiel. Une ou plusieurs réponses selon la question."
}
MEF_QUIZ_JSON
        , true, 512, JSON_THROW_ON_ERROR);

        $this->importMefQuiz('mef-gestion-finance-comptabilite-fr', $data);
    }
}
