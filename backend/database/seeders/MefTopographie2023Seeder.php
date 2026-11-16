<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MefTopographie2023Seeder extends Seeder
{
    use ImportsMefQuiz;

    public function run(): void
    {
        $data = json_decode(<<<'MEF_QUIZ_JSON'
{
  "title": "Préparation MEF 2023 — Topographie (adaptation)",
  "subject": "Topographie",
  "language": "fr",
  "historical_context": "2023-11-18",
  "status": "Corrigé pédagogique proposé, non officiel",
  "instructions": "Une seule réponse pour single_choice ; toutes les réponses exactes pour multiple_choice.",
  "questions": [
    {
      "id": "B1-01",
      "source_question": "B1-01",
      "question": "Quel document consigne formellement les opérations et constatations d'un bornage ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Le procès-verbal de bornage",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "La facture de travaux",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Le permis d'habiter",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Le compte de produits et charges",
          "is_correct": false
        }
      ],
      "explanation": "Le procès-verbal relate les opérations de bornage. Un croquis peut l'accompagner sans se substituer à lui.",
      "source_pages": [
        3
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B1-02",
      "source_question": "B1-02",
      "question": "À dimensions de feuille égales, une carte à petite échelle représente généralement :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une grande zone avec tous les détails cadastraux",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Une grande zone avec moins de détails",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Une zone sans aucune généralisation",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une petite zone avec davantage de détails",
          "is_correct": false
        }
      ],
      "explanation": "Une petite échelle, comme 1:1 000 000, réduit fortement le terrain et permet de couvrir une vaste étendue.",
      "source_pages": [
        3
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B1-03",
      "source_question": "B1-03",
      "question": "Quelle propriété définit une projection cartographique conforme ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "La conservation locale des angles",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "La suppression de toutes les déformations",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "La conservation exacte de toutes les superficies",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "La conservation exacte de toutes les distances",
          "is_correct": false
        }
      ],
      "explanation": "La conformité conserve localement les angles et la forme des éléments infinitésimaux. Elle ne garantit pas la conservation générale des surfaces ou distances.",
      "source_pages": [
        3
      ],
      "references": [],
      "editorial_note": "Choix redondants remplacés ; la conformité est une conservation locale des angles."
    },
    {
      "id": "B1-04",
      "source_question": "B1-04",
      "question": "Quel pays est à l'origine du système de navigation par satellites GPS ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "La Russie",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "La Chine",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "La France",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Les États-Unis",
          "is_correct": true
        }
      ],
      "explanation": "GPS est le système américain. GLONASS est russe, BeiDou chinois et Galileo européen.",
      "source_pages": [
        3
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B1-05",
      "source_question": "B1-05",
      "question": "Quelle description correspond le mieux au BIM dans un projet de construction ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Un système limité au relief naturel du terrain",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Un processus collaboratif de gestion de l'information appuyé sur des modèles numériques",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Une méthode de calcul des seuls angles horizontaux",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Un simple dessin sans données associées",
          "is_correct": false
        }
      ],
      "explanation": "Le BIM organise la production, le partage et l'exploitation d'informations sur l'ouvrage. Une maquette 3D seule ne résume pas ce processus.",
      "source_pages": [
        3
      ],
      "references": [],
      "editorial_note": "BIM défini comme processus de gestion de l’information ; il ne se limite ni à la 3D ni au terrain."
    },
    {
      "id": "B1-06",
      "source_question": "B1-06",
      "question": "Selon l'article 4 de la loi marocaine n° 18-00, quels éléments sont réputés parties communes ?",
      "type": "multiple_choice",
      "choices": [
        {
          "id": "A",
          "text": "Les murs et cloisons séparant deux parties privatives",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Les gros œuvres, fondations et façades de l'immeuble",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Les meubles personnels d'un occupant",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Les chambres privatives",
          "is_correct": false
        }
      ],
      "explanation": "La loi énumère notamment ces éléments parmi les parties communes. Les pièces et biens propres d'un copropriétaire ne deviennent pas communs du seul fait de la copropriété.",
      "source_pages": [
        3
      ],
      "references": [
        {
          "title": "Loi n° 18-00, article 4 — reproduction du texte",
          "url": "https://maloi.ma/fr/law/loi-copropriete/article/4"
        }
      ],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B1-07",
      "source_question": "B1-07",
      "question": "En combien de zones la projection conique conforme de Lambert en usage au Maroc est-elle organisée ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Quatre",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Deux",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Huit",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une",
          "is_correct": false
        }
      ],
      "explanation": "L'ANCFCC décrit une projection Lambert en quatre zones, afin de limiter les déformations sur l'étendue couverte.",
      "source_pages": [
        3
      ],
      "references": [
        {
          "title": "ANCFCC — Réseau géodésique planimétrique",
          "url": "https://www.ancfcc.gov.ma/nos-m%C3%A9tiers/cartographie/r%C3%A9seau-g%C3%A9od%C3%A9sique-planim%C3%A9trique/"
        }
      ],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B1-08",
      "source_question": "B1-08",
      "question": "Quelle surface sert de référence aux altitudes orthométriques ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Le géoïde",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "La surface du terrain",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Le plan cadastral",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "L'ellipsoïde seul",
          "is_correct": false
        }
      ],
      "explanation": "Les altitudes orthométriques se rapportent au géoïde. Les hauteurs fournies directement par le GNSS sont généralement ellipsoïdales.",
      "source_pages": [
        3
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B1-09",
      "source_question": "B1-09",
      "question": "La dispersion des pointés d'un opérateur autour d'une cible, sans biais constant, est une erreur :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "De projection cartographique",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Systématique par définition",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "De conversion d'unités",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Aléatoire, dite accidentelle",
          "is_correct": true
        }
      ],
      "explanation": "Cette dispersion fluctue d'une observation à l'autre. Un défaut stable de réglage peut produire un biais systématique, mais ce n'est pas le cas décrit.",
      "source_pages": [
        3
      ],
      "references": [],
      "editorial_note": "Absence de biais explicitée ; une erreur de pointé peut présenter d’autres composantes selon les conditions."
    },
    {
      "id": "B1-10",
      "source_question": "B1-10",
      "question": "Dans le barème ANCFCC cité pour la mise en concordance après construction, accroissement ou plantations, quel est le droit ad valorem ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "1 %",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "0,5 %",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "1,5 %",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "2 %",
          "is_correct": false
        }
      ],
      "explanation": "La brochure ANCFCC indique 1 %, auquel peuvent s'ajouter d'autres droits. Cette question porte sur le barème documentaire cité, pas sur un devis actualisé.",
      "source_pages": [
        3
      ],
      "references": [
        {
          "title": "ANCFCC — Tarifs et délais, mise en concordance",
          "url": "https://ancfcc.gov.ma/media/1192/tarifs-et-delais.pdf"
        }
      ],
      "editorial_note": "Question rattachée à la brochure ANCFCC consultée, sans prétendre produire un tarif actualisé ou une validation exhaustive du régime de 2023."
    },
    {
      "id": "B1-11",
      "source_question": "B1-11",
      "question": "Quelle mission relève de la Direction des Domaines de l'État ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Constituer le domaine privé de l'État, notamment par acquisition amiable et expropriation",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Juger les litiges constitutionnels",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Émettre les billets de banque",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Fixer le taux directeur",
          "is_correct": false
        }
      ],
      "explanation": "La constitution et la gestion du domaine privé de l'État relèvent de cette direction ; elle n'est pas l'autorité monétaire.",
      "source_pages": [
        4
      ],
      "references": [
        {
          "title": "MEF — Direction des Domaines de l’État",
          "url": "https://www.finances.gov.ma/fr/Ministere/Pages/dde.aspx"
        }
      ],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B1-12",
      "source_question": "B1-12",
      "question": "La mise en station d'un tachéomètre comprend notamment :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "La mise à l'horizontale de l'axe principal",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Le seul réglage de la luminosité de l'écran",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Le centrage sur le point et la verticalisation de l'axe principal",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Le déplacement arbitraire du point de station",
          "is_correct": false
        }
      ],
      "explanation": "Le centrage place l'appareil au-dessus du point ; le calage rend son axe principal vertical. Les deux opérations sont complémentaires.",
      "source_pages": [
        4
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B1-13",
      "source_question": "B1-13",
      "question": "Dans le vocabulaire cadastral, quelle opération détache une ou plusieurs portions d'un immeuble immatriculé pour créer des titres distincts ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Le nivellement",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "La triangulation",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "La fusion",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Le morcellement",
          "is_correct": true
        }
      ],
      "explanation": "Le morcellement détache des portions d'un immeuble. Le lotissement relève d'un régime spécifique lié notamment à la destination des lots.",
      "source_pages": [
        4
      ],
      "references": [
        {
          "title": "ANCFCC — Dépôt des dossiers techniques",
          "url": "https://www.ancfcc.gov.ma/DepotDossiersTechniques/"
        }
      ],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B1-14",
      "source_question": "B1-14",
      "question": "Quel indicateur GNSS tient compte de la géométrie des satellites pour la position tridimensionnelle et le temps ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "VDOP",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "PDOP seul",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "HDOP",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "GDOP",
          "is_correct": true
        }
      ],
      "explanation": "Le GDOP englobe les composantes de position et de temps. Le PDOP concerne la position 3D, le HDOP le plan horizontal et le VDOP la verticale.",
      "source_pages": [
        4
      ],
      "references": [],
      "editorial_note": "GDOP distingué des autres indicateurs par les composantes position et temps."
    },
    {
      "id": "B1-15",
      "source_question": "B1-15",
      "question": "Quelle proposition ne désigne pas une catégorie de courbe de niveau ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Courbe normale",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Courbe maîtresse",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Courbe de débit",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Courbe intercalaire",
          "is_correct": false
        }
      ],
      "explanation": "Les courbes de niveau relient des points de même altitude. Une courbe de débit décrit une autre grandeur.",
      "source_pages": [
        4
      ],
      "references": [],
      "editorial_note": "Le choix «courbe régulière» ambigu a été remplacé par un distracteur clairement faux."
    },
    {
      "id": "B1-16",
      "source_question": "B1-16",
      "question": "Pour mesurer précisément des dénivelées sur un cheminement adapté, quelle méthode utilise un niveau et des mires ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Le nivellement barométrique",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Le nivellement par estimation visuelle",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Le nivellement trigonométrique uniquement",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Le nivellement géométrique",
          "is_correct": true
        }
      ],
      "explanation": "Le nivellement géométrique compare des lectures sur mires au moyen d'une visée horizontale ; il est privilégié pour des dénivelées précises.",
      "source_pages": [
        4
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B1-17",
      "source_question": "B1-17",
      "question": "Qu'est-ce qu'une métadonnée géographique ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une donnée toujours secrète",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Une commande réservée au langage HTML",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Une information décrivant un jeu de données, par exemple sa date ou son système de coordonnées",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Un fichier dépassant nécessairement 2 Go",
          "is_correct": false
        }
      ],
      "explanation": "Les métadonnées renseignent le contexte, l'origine, la qualité et les conditions d'utilisation des données.",
      "source_pages": [
        4
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B1-18",
      "source_question": "B1-18",
      "question": "Dans la définition d'un datum géodésique classique local, quels éléments sont pertinents ?",
      "type": "multiple_choice",
      "choices": [
        {
          "id": "A",
          "text": "Un ellipsoïde de référence",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Le positionnement et l'orientation de l'ellipsoïde par rapport à la Terre",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Une projection cartographique suffit à elle seule",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Le format PDF du plan",
          "is_correct": false
        }
      ],
      "explanation": "Le datum définit une référence géodésique. Une projection transforme ensuite des coordonnées vers un plan ; elle ne définit pas à elle seule le datum.",
      "source_pages": [
        4
      ],
      "references": [],
      "editorial_note": "Datum local classique précisé ; les référentiels modernes ne se réduisent pas à un unique point fondamental."
    },
    {
      "id": "B1-19",
      "source_question": "B1-19",
      "question": "Comment appelle-t-on l'angle d'une ligne de visée par rapport au plan horizontal ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "L'angle de site",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "L'angle nadiral",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "L'angle zénithal",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "L'azimut",
          "is_correct": false
        }
      ],
      "explanation": "L'angle de site est mesuré depuis l'horizontale. L'angle zénithal est mesuré depuis la verticale orientée vers le zénith.",
      "source_pages": [
        4
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B1-20",
      "source_question": "B1-20",
      "question": "Quels instruments permettent de mesurer des angles ?",
      "type": "multiple_choice",
      "choices": [
        {
          "id": "A",
          "text": "Le théodolite",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Le tachéomètre",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Le goniomètre",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "La mire graduée utilisée seule",
          "is_correct": false
        }
      ],
      "explanation": "Le théodolite et le tachéomètre mesurent des angles ; le goniomètre est également un instrument angulaire. Une mire seule ne réalise pas cette mesure.",
      "source_pages": [
        4
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    }
  ],
  "duration": 30,
  "description": "QCM en français : Topographie. Adaptation pédagogique de documents datés de 2023 ; corrigé proposé, non officiel. Une ou plusieurs réponses selon la question."
}
MEF_QUIZ_JSON
        , true, 512, JSON_THROW_ON_ERROR);

        $this->importMefQuiz('mef-topographie-fr', $data);
    }
}
