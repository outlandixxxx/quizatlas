<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MefDeveloppementInformatique2023Seeder extends Seeder
{
    use ImportsMefQuiz;

    public function run(): void
    {
        $data = json_decode(<<<'MEF_QUIZ_JSON'
{
  "title": "Préparation MEF 2023 — Développement informatique (adaptation)",
  "subject": "Développement informatique",
  "language": "fr",
  "historical_context": "2023-11-18",
  "status": "Corrigé pédagogique proposé, non officiel",
  "instructions": "Une seule réponse pour single_choice ; toutes les réponses exactes pour multiple_choice.",
  "questions": [
    {
      "id": "B3-01",
      "source_question": "B3-01",
      "question": "Quelle instruction SQL supprime la définition d'une table et ses données ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "DROP TABLE nom_table;",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "REMOVE TABLE nom_table;",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "DESTROY TABLE nom_table;",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "DELETE TABLE nom_table;",
          "is_correct": false
        }
      ],
      "explanation": "DROP TABLE supprime la table. DELETE FROM retire des lignes en conservant la structure.",
      "source_pages": [
        6
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B3-02",
      "source_question": "B3-02",
      "question": "Quelle clause filtre les lignes avant un regroupement dans une requête SELECT ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "HAVING",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "GROUP BY",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "ORDER BY",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "WHERE",
          "is_correct": true
        }
      ],
      "explanation": "WHERE filtre les lignes ; HAVING filtre les groupes, généralement après GROUP BY. La précision évite de considérer les deux clauses comme interchangeables.",
      "source_pages": [
        6
      ],
      "references": [],
      "editorial_note": "Filtrage avant regroupement précisé pour distinguer WHERE de HAVING."
    },
    {
      "id": "B3-03",
      "source_question": "B3-03",
      "question": "En UML, une interface décrit principalement :",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une relation de composition",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Une classe concrète directement instanciable",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Un contrat de services que des éléments peuvent réaliser",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Un composant graphique obligatoire",
          "is_correct": false
        }
      ],
      "explanation": "Une interface est un classificateur décrivant un contrat. La notation rectangulaire avec le mot-clé «interface» n'en fait pas simplement une classe abstraite.",
      "source_pages": [
        6
      ],
      "references": [],
      "editorial_note": "Définition UML corrigée : interface = contrat, et non simplement classe abstraite ou stéréotype de classe."
    },
    {
      "id": "B3-04",
      "source_question": "B3-04",
      "question": "Quelle fonction SQL calcule la plus grande valeur non NULL d'une colonne ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "MAX",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "GREATER",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "UPPER",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "AVG",
          "is_correct": false
        }
      ],
      "explanation": "MAX est une fonction d'agrégation. UPPER transforme la casse et AVG calcule une moyenne.",
      "source_pages": [
        6
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B3-05",
      "source_question": "B3-05",
      "question": "En Java, quelle classe constitue la racine de la hiérarchie des classes et ne possède pas de superclasse ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Exception",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "String",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "ArrayList",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Object",
          "is_correct": true
        }
      ],
      "explanation": "java.lang.Object est la racine de la hiérarchie des classes Java. String et les autres classes proposées héritent directement ou indirectement d'Object.",
      "source_pages": [
        6
      ],
      "references": [],
      "editorial_note": "Langage Java explicité."
    },
    {
      "id": "B3-06",
      "source_question": "B3-06",
      "question": "En PHP, comment décrire $cars = [[\"Volvo\",22,18],[\"BMW\",15,13]] ?",
      "type": "multiple_choice",
      "choices": [
        {
          "id": "A",
          "text": "Un tableau à deux dimensions dans cet exemple",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Une chaîne de caractères",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Un tableau contenant des tableaux",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Un scalaire",
          "is_correct": false
        }
      ],
      "explanation": "Chaque élément du tableau extérieur est un tableau intérieur. Il s'agit d'une structure imbriquée, dite bidimensionnelle ici ; PHP représente les arrays comme des cartes ordonnées.",
      "source_pages": [
        6
      ],
      "references": [
        {
          "title": "PHP — Arrays",
          "url": "https://www.php.net/manual/en/language.types.array.php"
        }
      ],
      "editorial_note": "Exemple raccourci sans changer la notion ; deux propositions complémentaires sont exactes."
    },
    {
      "id": "B3-07",
      "source_question": "B3-07",
      "question": "Quel élément HTML permet de référencer une feuille CSS externe dans head ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "<src href=\"style.css\">",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "<css href=\"style.css\">",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "<link rel=\"stylesheet\" href=\"style.css\">",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "<style src=\"style.css\">",
          "is_correct": false
        }
      ],
      "explanation": "L'élément link avec rel=\"stylesheet\" référence une ressource CSS externe. L'élément style contient du CSS intégré à la page.",
      "source_pages": [
        6
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B3-08",
      "source_question": "B3-08",
      "question": "Quel modèle organise principalement une base de données relationnelle ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une pile d'instructions machine",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Des relations représentées sous forme de tables",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Un réseau de fichiers sans schéma",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Une arborescence obligatoire parent-enfant",
          "is_correct": false
        }
      ],
      "explanation": "Le modèle relationnel organise les données en relations. Il ne se confond pas avec le modèle hiérarchique.",
      "source_pages": [
        6
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B3-09",
      "source_question": "B3-09",
      "question": "En Java, quel bloc permet d'exécuter un traitement à la sortie d'un try, même en cas d'exception, hors arrêt de la JVM ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "throws",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "throw",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "finally",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "catch obligatoirement",
          "is_correct": false
        }
      ],
      "explanation": "Le bloc finally intervient lors de la sortie du try, qu'elle soit normale ou provoquée par une exception. L'arrêt de la JVM est une limite importante à cette règle.",
      "source_pages": [
        6
      ],
      "references": [
        {
          "title": "Oracle — The finally Block",
          "url": "https://docs.oracle.com/javase/tutorial/essential/exceptions/finally.html"
        }
      ],
      "editorial_note": "Limite relative à l’arrêt de la JVM ajoutée."
    },
    {
      "id": "B3-10",
      "source_question": "B3-10",
      "question": "Quelle description de React est exacte ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Un serveur de messagerie",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Un système de gestion de bases de données",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Une bibliothèque de construction d'interfaces utilisateur",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Un langage de requêtes SQL",
          "is_correct": false
        }
      ],
      "explanation": "React permet de composer des interfaces à partir de composants. La qualification de bibliothèque est plus précise que celle de framework complet.",
      "source_pages": [
        6
      ],
      "references": [
        {
          "title": "React — Documentation officielle",
          "url": "https://react.dev/"
        }
      ],
      "editorial_note": "React qualifié de bibliothèque."
    },
    {
      "id": "B3-11",
      "source_question": "B3-11",
      "question": "Quel exemple correspond à un usage courant d'un cookie web ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Augmenter la mémoire RAM",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Compiler une application Java",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Exécuter directement un fichier binaire sur l'ordinateur",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Conserver un identifiant de session ou une préférence",
          "is_correct": true
        }
      ],
      "explanation": "Un cookie peut stocker un identifiant ou une préférence exploités par le site. Son contenu doit être traité avec les précautions adaptées aux données manipulées.",
      "source_pages": [
        6
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B3-12",
      "source_question": "B3-12",
      "question": "Quel langage s'exécute couramment dans le navigateur pour gérer les interactions d'une page ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "JavaScript",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "YAML",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "SQL",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Markdown",
          "is_correct": false
        }
      ],
      "explanation": "JavaScript permet notamment de réagir aux événements et de modifier le document. HTML structure la page et CSS gère sa présentation.",
      "source_pages": [
        6
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B3-13",
      "source_question": "B3-13",
      "question": "Quel composant exécute le bytecode Java ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Une API seule",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "AWT seul",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Le compilateur CSS",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "La JVM",
          "is_correct": true
        }
      ],
      "explanation": "La JVM exécute le bytecode, notamment par interprétation et compilation à la volée selon l'implémentation. Le JDK est un ensemble d'outils plus large.",
      "source_pages": [
        6
      ],
      "references": [],
      "editorial_note": "Interprétation et compilation à la volée mentionnées."
    },
    {
      "id": "B3-14",
      "source_question": "B3-14",
      "question": "Quand une base de données est-elle cohérente relativement aux règles d'intégrité définies ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Lorsque toutes ses tables ont le même nombre de lignes",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Lorsque les clés étrangères sont absentes",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Lorsque toutes les contraintes d'intégrité applicables sont respectées",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Lorsque toutes les colonnes sont textuelles",
          "is_correct": false
        }
      ],
      "explanation": "La cohérence exige le respect des contraintes applicables : domaines, unicité, références et autres règles. L'intégrité référentielle n'en est qu'une partie.",
      "source_pages": [
        6
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B3-15",
      "source_question": "B3-15",
      "question": "À quoi sert principalement l'élément iframe en HTML ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Intégrer un document dans un contexte de navigation imbriqué",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Définir une table SQL",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Supprimer le besoin d'un navigateur",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Créer une variable JavaScript",
          "is_correct": false
        }
      ],
      "explanation": "Un iframe intègre un document dans la page. L'intégration peut être interdite par les règles de sécurité du site cible.",
      "source_pages": [
        6
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B3-16",
      "source_question": "B3-16",
      "question": "En Java, une classe B du même package que A peut-elle accéder à un membre protected de A, même sans hériter de A ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Oui, mais seulement si le membre est public",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Non, seul le code de A y accède",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Oui",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Non, protected est identique à private",
          "is_correct": false
        }
      ],
      "explanation": "En Java, protected autorise l'accès dans le même package. L'accès depuis une sous-classe d'un autre package obéit à des règles supplémentaires.",
      "source_pages": [
        6
      ],
      "references": [
        {
          "title": "Oracle — Controlling Access to Members of a Class",
          "url": "https://docs.oracle.com/javase/tutorial/java/javaOO/accesscontrol.html"
        }
      ],
      "editorial_note": "Langage Java explicité."
    }
  ],
  "duration": 24,
  "description": "QCM en français : Développement informatique. Adaptation pédagogique de documents datés de 2023 ; corrigé proposé, non officiel. Une ou plusieurs réponses selon la question."
}
MEF_QUIZ_JSON
        , true, 512, JSON_THROW_ON_ERROR);

        $this->importMefQuiz('mef-developpement-informatique-fr', $data);
    }
}
