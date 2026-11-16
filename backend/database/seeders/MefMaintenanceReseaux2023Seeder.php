<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MefMaintenanceReseaux2023Seeder extends Seeder
{
    use ImportsMefQuiz;

    public function run(): void
    {
        $data = json_decode(<<<'MEF_QUIZ_JSON'
{
  "title": "Préparation MEF 2023 — Maintenance et réseaux informatiques (adaptation)",
  "subject": "Maintenance et réseaux informatiques",
  "language": "fr",
  "historical_context": "2023-11-18",
  "status": "Corrigé pédagogique proposé, non officiel",
  "instructions": "Une seule réponse pour single_choice ; toutes les réponses exactes pour multiple_choice.",
  "questions": [
    {
      "id": "B2-01",
      "source_question": "B2-01",
      "question": "Quel protocole sert principalement à envoyer et à relayer des courriers électroniques ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "SMTP",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "SSH",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "POP3",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "FTP",
          "is_correct": false
        }
      ],
      "explanation": "SMTP sert à la transmission du courrier. POP3 permet principalement de récupérer des messages stockés sur un serveur.",
      "source_pages": [
        5
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B2-02",
      "source_question": "B2-02",
      "question": "Quel est le rôle principal d'un pare-feu ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Attribuer obligatoirement une adresse IP fixe",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Éliminer toute panne matérielle",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Remplacer toutes les sauvegardes",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Filtrer les communications selon des règles de sécurité",
          "is_correct": true
        }
      ],
      "explanation": "Un pare-feu autorise ou bloque du trafic selon une politique définie. Il ne remplace ni les sauvegardes ni l'ensemble des autres protections.",
      "source_pages": [
        5
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B2-03",
      "source_question": "B2-03",
      "question": "Que permet généralement la commande ping lorsque les réponses ICMP sont autorisées ?",
      "type": "multiple_choice",
      "choices": [
        {
          "id": "A",
          "text": "Estimer le temps aller-retour",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Garantir que le serveur HTTP fonctionne",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Afficher tous les routeurs du trajet",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Tester la joignabilité IP",
          "is_correct": true
        }
      ],
      "explanation": "Ping utilise des échanges ICMP pour tester la joignabilité et mesurer le délai aller-retour. Une absence de réponse peut aussi résulter d'un filtrage.",
      "source_pages": [
        5
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B2-04",
      "source_question": "B2-04",
      "question": "Parmi ces propositions, lesquelles sont des couches du modèle OSI ?",
      "type": "multiple_choice",
      "choices": [
        {
          "id": "A",
          "text": "Physique",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Indexation",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Session",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Transport",
          "is_correct": true
        }
      ],
      "explanation": "Le modèle OSI comprend physique, liaison, réseau, transport, session, présentation et application. L'indexation n'est pas une couche OSI.",
      "source_pages": [
        5
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B2-05",
      "source_question": "B2-05",
      "question": "Quelles associations sont correctes ?",
      "type": "multiple_choice",
      "choices": [
        {
          "id": "A",
          "text": "DHCP — chiffrement de tous les paquets",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "DHCP — remplacement du routage IP",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "DHCPv4 — configuration IPv4",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "DHCPv6 — configuration IPv6",
          "is_correct": true
        }
      ],
      "explanation": "DHCP existe pour IPv4 et IPv6 avec des protocoles distincts. En IPv6, SLAAC constitue également un mécanisme d'autoconfiguration.",
      "source_pages": [
        5
      ],
      "references": [],
      "editorial_note": "DHCPv4 et DHCPv6 distingués."
    },
    {
      "id": "B2-06",
      "source_question": "B2-06",
      "question": "Dans un système de fichiers FAT, quel terme désigne une unité d'allocation constituée d'un ou plusieurs secteurs ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Un en-tête TCP",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Un cluster",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Une table de routage",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Un cylindre obligatoirement",
          "is_correct": false
        }
      ],
      "explanation": "Le cluster est l'unité d'allocation utilisée par FAT. Un secteur est une unité de stockage de niveau inférieur ; la question précise le système de fichiers.",
      "source_pages": [
        5
      ],
      "references": [],
      "editorial_note": "Système FAT précisé pour rendre cluster non ambigu."
    },
    {
      "id": "B2-07",
      "source_question": "B2-07",
      "question": "Quel système mobile est utilisé par de nombreux fabricants de smartphones et repose sur le projet AOSP ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "FreeBSD seul",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "macOS",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Windows Server",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Android",
          "is_correct": true
        }
      ],
      "explanation": "Android repose sur l'Android Open Source Project. La formulation évite une affirmation de part de marché dépendant du pays et de la date.",
      "source_pages": [
        5
      ],
      "references": [],
      "editorial_note": "Question de part de marché remplacée par une question stable sur AOSP."
    },
    {
      "id": "B2-08",
      "source_question": "B2-08",
      "question": "Quel service permet notamment de résoudre un nom de domaine en adresse IP ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "DHCP",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "DNS",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "SMTP",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "NTP",
          "is_correct": false
        }
      ],
      "explanation": "Le DNS fournit notamment les enregistrements A pour IPv4 et AAAA pour IPv6, ainsi que d'autres types d'informations.",
      "source_pages": [
        5
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B2-09",
      "source_question": "B2-09",
      "question": "En Java, hors arrêt de la JVM et lorsque l'exécution quitte le bloc try, quel bloc est exécuté même si une exception survient ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "catch dans tous les cas",
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
          "text": "throws",
          "is_correct": false
        }
      ],
      "explanation": "Le bloc finally est exécuté à la sortie du try. Un catch n'est exécuté que si l'exception correspond ; un arrêt de la JVM peut empêcher finally de s'exécuter.",
      "source_pages": [
        5
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
      "id": "B2-10",
      "source_question": "B2-10",
      "question": "Quel terme général désigne la manipulation d'une personne pour lui faire révéler une information confidentielle ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "L'ingénierie sociale",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "Le routage dynamique",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "La défragmentation",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "La compression sans perte",
          "is_correct": false
        }
      ],
      "explanation": "L'ingénierie sociale exploite les comportements humains. Le phishing en est une forme, souvent fondée sur un message ou un site usurpé.",
      "source_pages": [
        5
      ],
      "references": [],
      "editorial_note": "Question recentrée sur l’ingénierie sociale ; phishing est une sous-catégorie."
    },
    {
      "id": "B2-11",
      "source_question": "B2-11",
      "question": "Quel usage légitime un cookie peut-il avoir ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Exécuter à lui seul un programme natif",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Remplacer le chiffrement HTTPS",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Réparer physiquement un disque",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Mémoriser une préférence de langue",
          "is_correct": true
        }
      ],
      "explanation": "Un cookie stocke une donnée qui peut permettre au site de retrouver une préférence. Il ne constitue pas à lui seul un programme exécutable.",
      "source_pages": [
        5
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    },
    {
      "id": "B2-12",
      "source_question": "B2-12",
      "question": "Quelles propriétés caractérisent TCP ?",
      "type": "multiple_choice",
      "choices": [
        {
          "id": "A",
          "text": "Un flux d'octets ordonné et fiable",
          "is_correct": true
        },
        {
          "id": "B",
          "text": "La conservation des frontières de chaque message applicatif",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Une communication full-duplex",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Une diffusion obligatoire à toutes les machines du réseau",
          "is_correct": false
        }
      ],
      "explanation": "TCP transporte un flux d'octets dans les deux sens. L'application doit définir ses propres frontières de messages ; elles ne sont pas préservées par TCP.",
      "source_pages": [
        5
      ],
      "references": [
        {
          "title": "IETF — RFC 9293, TCP",
          "url": "https://www.rfc-editor.org/rfc/rfc9293.html"
        }
      ],
      "editorial_note": "TCP est un flux d’octets ; cela ne signifie pas un octet par paquet."
    },
    {
      "id": "B2-13",
      "source_question": "B2-13",
      "question": "Quel produit est un hyperviseur ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "Microsoft Excel",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Adobe Photoshop",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "Spotify",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "VMware ESXi",
          "is_correct": true
        }
      ],
      "explanation": "ESXi est un hyperviseur. VMware est un nom d'éditeur et de famille de produits, d'où la précision ajoutée.",
      "source_pages": [
        5
      ],
      "references": [],
      "editorial_note": "VMware remplacé par le produit précis VMware ESXi."
    },
    {
      "id": "B2-14",
      "source_question": "B2-14",
      "question": "Quelles affirmations sur le RAID sont exactes ?",
      "type": "multiple_choice",
      "choices": [
        {
          "id": "A",
          "text": "Tous les niveaux RAID résistent à une panne de disque",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Selon le niveau, le RAID peut améliorer les performances",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "Certains niveaux offrent de la redondance",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "Le RAID remplace une sauvegarde indépendante",
          "is_correct": false
        }
      ],
      "explanation": "Les propriétés dépendent du niveau : RAID 0 ne fournit pas de redondance, tandis que RAID 1, par exemple, réplique les données. Le RAID n'est pas une sauvegarde.",
      "source_pages": [
        5
      ],
      "references": [],
      "editorial_note": "Question RAID réécrite : performances et redondance dépendent du niveau."
    },
    {
      "id": "B2-15",
      "source_question": "B2-15",
      "question": "Quel mécanisme permet de transférer des fichiers au travers d'une connexion SSH ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "ARP",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "POP3",
          "is_correct": false
        },
        {
          "id": "C",
          "text": "SFTP",
          "is_correct": true
        },
        {
          "id": "D",
          "text": "DNS",
          "is_correct": false
        }
      ],
      "explanation": "SFTP fonctionne sur SSH pour assurer un transfert protégé. SSH sert aussi à l'accès distant et à d'autres usages.",
      "source_pages": [
        5
      ],
      "references": [],
      "editorial_note": "SFTP précisé au lieu de réduire SSH au transfert de fichiers."
    },
    {
      "id": "B2-16",
      "source_question": "B2-16",
      "question": "Quel système repose sur le noyau Linux ?",
      "type": "single_choice",
      "choices": [
        {
          "id": "A",
          "text": "iOS",
          "is_correct": false
        },
        {
          "id": "B",
          "text": "Android",
          "is_correct": true
        },
        {
          "id": "C",
          "text": "macOS",
          "is_correct": false
        },
        {
          "id": "D",
          "text": "Windows",
          "is_correct": false
        }
      ],
      "explanation": "Android utilise un noyau Linux adapté. Les autres systèmes proposés reposent sur d'autres noyaux.",
      "source_pages": [
        5
      ],
      "references": [],
      "editorial_note": "Énoncé et choix adaptés pour un entraînement sans ambiguïté."
    }
  ],
  "duration": 24,
  "description": "QCM en français : Maintenance et réseaux informatiques. Adaptation pédagogique de documents datés de 2023 ; corrigé proposé, non officiel. Une ou plusieurs réponses selon la question."
}
MEF_QUIZ_JSON
        , true, 512, JSON_THROW_ON_ERROR);

        $this->importMefQuiz('mef-maintenance-reseaux-fr', $data);
    }
}
