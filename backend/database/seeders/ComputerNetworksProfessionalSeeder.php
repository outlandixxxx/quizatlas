<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ComputerNetworksProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'computer-science-it')->firstOrFail();

        $subject = $major->subjects()
            ->where('slug', 'computer-networks')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'OSPF Architecture & Optimization',
                'description' => 'Architecture OSPF, areas, LSAs, DR/BDR, summarization et optimisation de la convergence.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quel type de database OSPF contient les informations de topologie reçues via les LSAs ?',
                        'choices' => [
                            ['text' => 'LSDB', 'is_correct' => true],
                            ['text' => 'ARP cache', 'is_correct' => false],
                            ['text' => 'MAC table', 'is_correct' => false],
                            ['text' => 'DNS zone', 'is_correct' => false],
                        ],
                        'explanation' => 'La Link-State Database contient les informations de topologie utilisées par OSPF pour calculer les chemins.',
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’une OSPF area ?',
                        'choices' => [
                            ['text' => 'Structurer le domaine OSPF et limiter la propagation de certaines informations', 'is_correct' => true],
                            ['text' => 'Remplacer les VLANs', 'is_correct' => false],
                            ['text' => 'Chiffrer les packets', 'is_correct' => false],
                            ['text' => 'Attribuer les MAC addresses', 'is_correct' => false],
                        ],
                        'explanation' => 'Les areas permettent de construire une architecture hiérarchique et de réduire la complexité du domaine OSPF.',
                    ],
                    [
                        'question' => 'Quel router connecte généralement une OSPF area au backbone area ?',
                        'choices' => [
                            ['text' => 'ABR', 'is_correct' => true],
                            ['text' => 'ASBR uniquement', 'is_correct' => false],
                            ['text' => 'DHCP relay', 'is_correct' => false],
                            ['text' => 'DNS resolver', 'is_correct' => false],
                        ],
                        'explanation' => 'Un Area Border Router possède des interfaces dans plusieurs OSPF areas, généralement avec un lien vers Area 0.',
                    ],
                    [
                        'question' => 'Quel rôle joue un DR sur un broadcast network ?',
                        'choices' => [
                            ['text' => 'Réduire le nombre d’adjacencies OSPF nécessaires', 'is_correct' => true],
                            ['text' => 'Remplacer tous les routers', 'is_correct' => false],
                            ['text' => 'Attribuer les IP addresses', 'is_correct' => false],
                            ['text' => 'Chiffrer OSPF', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Designated Router réduit le nombre d’adjacencies complètes sur certains multi-access networks.',
                    ],
                    [
                        'question' => 'Pourquoi une OSPF summarization peut-elle améliorer la scalabilité ?',
                        'choices' => [
                            ['text' => 'Elle réduit le nombre de prefixes propagés entre certaines boundaries', 'is_correct' => true],
                            ['text' => 'Elle augmente le nombre de LSAs', 'is_correct' => false],
                            ['text' => 'Elle supprime toutes les routes', 'is_correct' => false],
                            ['text' => 'Elle désactive SPF', 'is_correct' => false],
                        ],
                        'explanation' => 'La summarization réduit la taille des informations de routing visibles au-delà d’une boundary appropriée.',
                    ],
                    [
                        'question' => 'Quel algorithme OSPF utilise-t-il pour calculer le shortest path tree ?',
                        'choices' => [
                            ['text' => 'SPF de Dijkstra', 'is_correct' => true],
                            ['text' => 'Bellman-Ford uniquement', 'is_correct' => false],
                            ['text' => 'RSA', 'is_correct' => false],
                            ['text' => 'AES', 'is_correct' => false],
                        ],
                        'explanation' => 'OSPF utilise l’algorithme SPF basé sur Dijkstra pour calculer les chemins les plus courts.',
                    ],
                    [
                        'question' => 'Que peut provoquer une mauvaise configuration des OSPF timers ?',
                        'choices' => [
                            ['text' => 'Une convergence instable ou des adjacencies qui flappent', 'is_correct' => true],
                            ['text' => 'Une augmentation de la taille IPv4', 'is_correct' => false],
                            ['text' => 'La suppression des VLANs', 'is_correct' => false],
                            ['text' => 'La conversion TCP vers UDP', 'is_correct' => false],
                        ],
                        'explanation' => 'Des timers incohérents ou trop agressifs peuvent provoquer des neighbor resets et de l’instabilité.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’un ASBR ?',
                        'choices' => [
                            ['text' => 'Introduire ou redistribuer des routes provenant d’un autre routing domain ou protocol', 'is_correct' => true],
                            ['text' => 'Créer des MAC addresses', 'is_correct' => false],
                            ['text' => 'Servir uniquement DHCP', 'is_correct' => false],
                            ['text' => 'Être toujours le DR', 'is_correct' => false],
                        ],
                        'explanation' => 'Un Autonomous System Boundary Router injecte notamment des external routes dans OSPF.',
                    ],
                    [
                        'question' => 'Pourquoi contrôler les LSA flooding domains ?',
                        'choices' => [
                            ['text' => 'Pour limiter l’impact des changements et la charge de calcul et de mémoire', 'is_correct' => true],
                            ['text' => 'Pour supprimer le routing', 'is_correct' => false],
                            ['text' => 'Pour remplacer BGP', 'is_correct' => false],
                            ['text' => 'Pour augmenter les broadcasts', 'is_correct' => false],
                        ],
                        'explanation' => 'Une architecture OSPF bien structurée limite la propagation inutile des informations de topologie.',
                    ],
                    [
                        'question' => 'Quel trade-off accompagne une architecture OSPF très fragmentée en areas ?',
                        'choices' => [
                            ['text' => 'Elle peut réduire certaines informations de topologie mais augmente la complexité de design et d’exploitation', 'is_correct' => true],
                            ['text' => 'Elle supprime toute configuration', 'is_correct' => false],
                            ['text' => 'Elle garantit toujours le meilleur chemin', 'is_correct' => false],
                            ['text' => 'Elle rend BGP inutile', 'is_correct' => false],
                        ],
                        'explanation' => 'Multiplier les boundaries peut améliorer la scalabilité mais rend le design plus complexe.',
                    ],
                ],
            ],
            [
                'title' => 'BGP & Internet Routing',
                'description' => 'Principes de BGP, path selection, policies, attributes et architecture inter-domaines.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quel type de routing protocol est BGP ?',
                        'choices' => [
                            ['text' => 'Path-vector', 'is_correct' => true],
                            ['text' => 'Link-state', 'is_correct' => false],
                            ['text' => 'Ethernet switching', 'is_correct' => false],
                            ['text' => 'Transport protocol', 'is_correct' => false],
                        ],
                        'explanation' => 'BGP est un path-vector protocol conçu pour le routing inter-domaines.',
                    ],
                    [
                        'question' => 'Quel attribut BGP est couramment utilisé pour influencer le chemin préféré à l’intérieur d’un AS ?',
                        'choices' => [
                            ['text' => 'Local Preference', 'is_correct' => true],
                            ['text' => 'DNS TTL', 'is_correct' => false],
                            ['text' => 'TCP Window', 'is_correct' => false],
                            ['text' => 'VLAN ID', 'is_correct' => false],
                        ],
                        'explanation' => 'Local Preference permet notamment de choisir les routes de sortie préférées au sein d’un AS.',
                    ],
                    [
                        'question' => 'Quel attribut BGP indique notamment le chemin d’AS traversés ?',
                        'choices' => [
                            ['text' => 'AS_PATH', 'is_correct' => true],
                            ['text' => 'MAC_PATH', 'is_correct' => false],
                            ['text' => 'DNS_PATH', 'is_correct' => false],
                            ['text' => 'TCP_PATH', 'is_correct' => false],
                        ],
                        'explanation' => 'AS_PATH contient la séquence d’AS par lesquels l’annonce a été propagée.',
                    ],
                    [
                        'question' => 'Pourquoi BGP utilise-t-il AS_PATH pour la loop prevention ?',
                        'choices' => [
                            ['text' => 'Un AS peut détecter sa propre présence dans le path et rejeter l’annonce', 'is_correct' => true],
                            ['text' => 'Il remplace TCP', 'is_correct' => false],
                            ['text' => 'Il chiffre les routes', 'is_correct' => false],
                            ['text' => 'Il attribue les IP addresses', 'is_correct' => false],
                        ],
                        'explanation' => 'La présence de son propre AS dans AS_PATH est un signal classique de routing loop.',
                    ],
                    [
                        'question' => 'Quel protocole de transport est utilisé par BGP ?',
                        'choices' => [
                            ['text' => 'TCP', 'is_correct' => true],
                            ['text' => 'UDP', 'is_correct' => false],
                            ['text' => 'ICMP', 'is_correct' => false],
                            ['text' => 'SCTP', 'is_correct' => false],
                        ],
                        'explanation' => 'BGP établit ses sessions de peering sur TCP, traditionnellement port 179.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un eBGP peering ?',
                        'choices' => [
                            ['text' => 'Une session BGP entre deux autonomous systems différents', 'is_correct' => true],
                            ['text' => 'Une session DNS', 'is_correct' => false],
                            ['text' => 'Une adjacency OSPF dans la même area', 'is_correct' => false],
                            ['text' => 'Un trunk VLAN', 'is_correct' => false],
                        ],
                        'explanation' => 'eBGP échange des routes entre AS distincts.',
                    ],
                    [
                        'question' => 'Pourquoi les BGP policies sont-elles importantes ?',
                        'choices' => [
                            ['text' => 'Elles permettent de contrôler quelles routes sont acceptées, annoncées et préférées', 'is_correct' => true],
                            ['text' => 'Elles remplacent les ACLs', 'is_correct' => false],
                            ['text' => 'Elles configurent les MAC tables', 'is_correct' => false],
                            ['text' => 'Elles suppriment les prefixes', 'is_correct' => false],
                        ],
                        'explanation' => 'BGP est fortement policy-driven, ce qui permet de contrôler les échanges et les chemins.',
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu’on accepte sans filtrage des prefixes d’un peer ?',
                        'choices' => [
                            ['text' => 'Une mauvaise annonce ou route leak peut affecter fortement le routing', 'is_correct' => true],
                            ['text' => 'Le DNS devient obligatoire', 'is_correct' => false],
                            ['text' => 'TCP est désactivé', 'is_correct' => false],
                            ['text' => 'Les VLANs sont supprimés', 'is_correct' => false],
                        ],
                        'explanation' => 'Le prefix filtering est essentiel pour limiter les annonces incorrectes et les route leaks.',
                    ],
                    [
                        'question' => 'Pourquoi la route selection BGP ne se limite-t-elle pas à la plus courte distance physique ?',
                        'choices' => [
                            ['text' => 'BGP utilise des attributes et des policies plutôt qu’un simple coût géographique', 'is_correct' => true],
                            ['text' => 'BGP ne connaît pas les IP addresses', 'is_correct' => false],
                            ['text' => 'Il utilise uniquement STP', 'is_correct' => false],
                            ['text' => 'Il ignore toutes les policies', 'is_correct' => false],
                        ],
                        'explanation' => 'BGP sélectionne les routes selon une série d’attributs et de règles de policy.',
                    ],
                    [
                        'question' => 'Quel concept décrit l’annonce accidentelle de prefixes appartenant à un autre réseau ?',
                        'choices' => [
                            ['text' => 'Route leak', 'is_correct' => true],
                            ['text' => 'VLAN hopping', 'is_correct' => false],
                            ['text' => 'DNS poisoning uniquement', 'is_correct' => false],
                            ['text' => 'ARP cache', 'is_correct' => false],
                        ],
                        'explanation' => 'Un route leak consiste notamment à propager des prefixes au-delà de la policy prévue.',
                    ],
                ],
            ],
            [
                'title' => 'MPLS & WAN Architecture',
                'description' => 'MPLS, labels, VPNs, WAN design et concepts de transport opérateur.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Que signifie MPLS ?',
                        'choices' => [
                            ['text' => 'Multiprotocol Label Switching', 'is_correct' => true],
                            ['text' => 'Managed Packet Link Service', 'is_correct' => false],
                            ['text' => 'Multi-Port Layer Security', 'is_correct' => false],
                            ['text' => 'Main Protocol Link System', 'is_correct' => false],
                        ],
                        'explanation' => 'MPLS signifie Multiprotocol Label Switching.',
                    ],
                    [
                        'question' => 'Quel élément MPLS est ajouté pour permettre le forwarding basé sur labels ?',
                        'choices' => [
                            ['text' => 'Label', 'is_correct' => true],
                            ['text' => 'DNS record', 'is_correct' => false],
                            ['text' => 'TCP port', 'is_correct' => false],
                            ['text' => 'MAC vendor ID', 'is_correct' => false],
                        ],
                        'explanation' => 'MPLS utilise des labels pour orienter le forwarding dans le réseau du provider.',
                    ],
                    [
                        'question' => 'Quel équipement MPLS edge connecte typiquement le customer au provider network ?',
                        'choices' => [
                            ['text' => 'PE router', 'is_correct' => true],
                            ['text' => 'DNS resolver', 'is_correct' => false],
                            ['text' => 'Layer 2 hub', 'is_correct' => false],
                            ['text' => 'DHCP client', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Provider Edge router connecte les customer-facing services au réseau MPLS du provider.',
                    ],
                    [
                        'question' => 'Quel équipement se trouve généralement au cœur du MPLS provider network ?',
                        'choices' => [
                            ['text' => 'P router', 'is_correct' => true],
                            ['text' => 'Access point', 'is_correct' => false],
                            ['text' => 'DHCP server', 'is_correct' => false],
                            ['text' => 'Web proxy', 'is_correct' => false],
                        ],
                        'explanation' => 'Les P routers transportent les packets/labels au sein du core provider sans nécessairement connaître les routes client finales.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser MPLS VPNs ?',
                        'choices' => [
                            ['text' => 'Pour fournir une séparation logique de réseaux clients sur une infrastructure partagée', 'is_correct' => true],
                            ['text' => 'Pour remplacer tous les IP addresses', 'is_correct' => false],
                            ['text' => 'Pour désactiver routing', 'is_correct' => false],
                            ['text' => 'Pour supprimer QoS', 'is_correct' => false],
                        ],
                        'explanation' => 'Les MPLS VPNs permettent de maintenir des contextes de routing séparés sur une infrastructure commune.',
                    ],
                    [
                        'question' => 'Quel mécanisme peut associer une route VPN à un contexte de forwarding spécifique ?',
                        'choices' => [
                            ['text' => 'VRF', 'is_correct' => true],
                            ['text' => 'ARP', 'is_correct' => false],
                            ['text' => 'STP', 'is_correct' => false],
                            ['text' => 'DNSSEC', 'is_correct' => false],
                        ],
                        'explanation' => 'Une VRF sépare les routing tables et forwarding contexts, notamment pour les services VPN.',
                    ],
                    [
                        'question' => 'Quel est un avantage d’une WAN architecture redondante ?',
                        'choices' => [
                            ['text' => 'Maintenir la connectivité lorsqu’un lien ou chemin devient indisponible', 'is_correct' => true],
                            ['text' => 'Supprimer les routing protocols', 'is_correct' => false],
                            ['text' => 'Éviter toute configuration', 'is_correct' => false],
                            ['text' => 'Garantir zéro latency', 'is_correct' => false],
                        ],
                        'explanation' => 'La redondance permet de continuer le service après certaines défaillances.',
                    ],
                    [
                        'question' => 'Pourquoi considérer les SLA dans un WAN design ?',
                        'choices' => [
                            ['text' => 'Ils définissent des objectifs mesurables de disponibilité et de performance', 'is_correct' => true],
                            ['text' => 'Ils remplacent les routing tables', 'is_correct' => false],
                            ['text' => 'Ils créent les VLANs', 'is_correct' => false],
                            ['text' => 'Ils désactivent QoS', 'is_correct' => false],
                        ],
                        'explanation' => 'Les SLA permettent de relier le design technique aux objectifs de service attendus.',
                    ],
                    [
                        'question' => 'Quel facteur influence fortement le choix d’un WAN transport ?',
                        'choices' => [
                            ['text' => 'Latency, bandwidth, availability, cost et security requirements', 'is_correct' => true],
                            ['text' => 'La couleur des cables uniquement', 'is_correct' => false],
                            ['text' => 'Le hostname uniquement', 'is_correct' => false],
                            ['text' => 'Le nombre de DNS records', 'is_correct' => false],
                        ],
                        'explanation' => 'Un WAN design doit arbitrer performance, disponibilité, sécurité et coût.',
                    ],
                    [
                        'question' => 'Pourquoi éviter une architecture WAN avec un seul point de défaillance ?',
                        'choices' => [
                            ['text' => 'Une panne unique pourrait interrompre une grande partie du service', 'is_correct' => true],
                            ['text' => 'Elle améliore toujours la disponibilité', 'is_correct' => false],
                            ['text' => 'Elle supprime les dependencies', 'is_correct' => false],
                            ['text' => 'Elle réduit automatiquement la latency', 'is_correct' => false],
                        ],
                        'explanation' => 'Un single point of failure compromet la résilience du service.',
                    ],
                ],
            ],
            [
                'title' => 'Network Automation & Programmability',
                'description' => 'Network automation, APIs, configuration management, telemetry et infrastructure as code.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quel avantage principal offre une API dans network automation ?',
                        'choices' => [
                            ['text' => 'Permettre à des outils logiciels d’interagir programmatiquement avec les équipements ou services', 'is_correct' => true],
                            ['text' => 'Remplacer Ethernet', 'is_correct' => false],
                            ['text' => 'Créer des MAC addresses', 'is_correct' => false],
                            ['text' => 'Supprimer les configurations', 'is_correct' => false],
                        ],
                        'explanation' => 'Une API fournit une interface structurée permettant l’automatisation des opérations réseau.',
                    ],
                    [
                        'question' => 'Pourquoi l’idempotence est-elle importante en automation ?',
                        'choices' => [
                            ['text' => 'Une même opération peut être répétée sans provoquer des changements indésirables supplémentaires', 'is_correct' => true],
                            ['text' => 'Elle augmente les erreurs', 'is_correct' => false],
                            ['text' => 'Elle désactive les APIs', 'is_correct' => false],
                            ['text' => 'Elle remplace Git', 'is_correct' => false],
                        ],
                        'explanation' => 'Une tâche idempotente converge vers l’état souhaité même lorsqu’elle est exécutée plusieurs fois.',
                    ],
                    [
                        'question' => 'Quel outil est couramment associé à l’automatisation déclarative de configuration ?',
                        'choices' => [
                            ['text' => 'Ansible', 'is_correct' => true],
                            ['text' => 'Wireshark', 'is_correct' => false],
                            ['text' => 'ping', 'is_correct' => false],
                            ['text' => 'traceroute', 'is_correct' => false],
                        ],
                        'explanation' => 'Ansible peut décrire et appliquer des états de configuration de manière automatisée.',
                    ],
                    [
                        'question' => 'Pourquoi versionner les configurations réseau ?',
                        'choices' => [
                            ['text' => 'Pour suivre les changements, effectuer des reviews et faciliter le rollback', 'is_correct' => true],
                            ['text' => 'Pour augmenter le packet loss', 'is_correct' => false],
                            ['text' => 'Pour supprimer backups', 'is_correct' => false],
                            ['text' => 'Pour éviter les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'Le version control apporte traçabilité, collaboration et capacité de retour arrière.',
                    ],
                    [
                        'question' => 'Qu’est-ce que infrastructure as code ?',
                        'choices' => [
                            ['text' => 'La gestion déclarative ou automatisée de l’infrastructure via des fichiers et du code versionnés', 'is_correct' => true],
                            ['text' => 'Une méthode de câblage', 'is_correct' => false],
                            ['text' => 'Un protocole DNS', 'is_correct' => false],
                            ['text' => 'Un type de VLAN', 'is_correct' => false],
                        ],
                        'explanation' => 'Infrastructure as code traite la configuration de l’infrastructure comme un artefact versionnable et automatisable.',
                    ],
                    [
                        'question' => 'Quel format structuré est couramment utilisé par des APIs modernes ?',
                        'choices' => [
                            ['text' => 'JSON', 'is_correct' => true],
                            ['text' => 'MP3', 'is_correct' => false],
                            ['text' => 'PNG', 'is_correct' => false],
                            ['text' => 'EXE', 'is_correct' => false],
                        ],
                        'explanation' => 'JSON est fréquemment utilisé pour transporter des données structurées dans les APIs.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser CI/CD pour des changements réseau automatisés ?',
                        'choices' => [
                            ['text' => 'Pour automatiser validation, tests et déploiement contrôlé des changements', 'is_correct' => true],
                            ['text' => 'Pour supprimer les reviews', 'is_correct' => false],
                            ['text' => 'Pour éviter les backups', 'is_correct' => false],
                            ['text' => 'Pour augmenter les changements manuels', 'is_correct' => false],
                        ],
                        'explanation' => 'CI/CD peut intégrer linting, tests, validation et déploiements contrôlés afin de réduire les erreurs.',
                    ],
                    [
                        'question' => 'Qu’est-ce que telemetry dans un contexte réseau ?',
                        'choices' => [
                            ['text' => 'La collecte continue de données d’état et de performance depuis l’infrastructure', 'is_correct' => true],
                            ['text' => 'Un type de câble', 'is_correct' => false],
                            ['text' => 'Une méthode de subnetting', 'is_correct' => false],
                            ['text' => 'Un protocole de mail', 'is_correct' => false],
                        ],
                        'explanation' => 'La telemetry fournit des données opérationnelles détaillées pour l’observability et l’analyse.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser des templates dans l’automation ?',
                        'choices' => [
                            ['text' => 'Pour standardiser les configurations et réduire les variations manuelles', 'is_correct' => true],
                            ['text' => 'Pour supprimer les variables', 'is_correct' => false],
                            ['text' => 'Pour empêcher toute évolution', 'is_correct' => false],
                            ['text' => 'Pour remplacer les routing protocols', 'is_correct' => false],
                        ],
                        'explanation' => 'Les templates permettent de générer des configurations cohérentes à partir de paramètres structurés.',
                    ],
                    [
                        'question' => 'Quel risque doit-on contrôler avant une automation à grande échelle ?',
                        'choices' => [
                            ['text' => 'Une erreur de logique peut être propagée rapidement à de nombreux équipements', 'is_correct' => true],
                            ['text' => 'L’automation ne peut jamais échouer', 'is_correct' => false],
                            ['text' => 'Les APIs empêchent les erreurs', 'is_correct' => false],
                            ['text' => 'Le réseau devient automatiquement chiffré', 'is_correct' => false],
                        ],
                        'explanation' => 'L’automation augmente la vitesse mais peut aussi amplifier l’impact d’une mauvaise définition ou validation.',
                    ],
                ],
            ],
            [
                'title' => 'High Availability & Resilience',
                'description' => 'Redondance, failure domains, load balancing, convergence et stratégies de haute disponibilité.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de high availability ?',
                        'choices' => [
                            ['text' => 'Réduire la durée et la probabilité d’interruption du service', 'is_correct' => true],
                            ['text' => 'Augmenter le nombre de passwords', 'is_correct' => false],
                            ['text' => 'Supprimer les backups', 'is_correct' => false],
                            ['text' => 'Réduire les VLANs', 'is_correct' => false],
                        ],
                        'explanation' => 'High availability vise à maintenir le service malgré certaines défaillances.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un failure domain ?',
                        'choices' => [
                            ['text' => 'Une zone dans laquelle une défaillance peut affecter un ensemble de composants', 'is_correct' => true],
                            ['text' => 'Un DNS zone', 'is_correct' => false],
                            ['text' => 'Un VLAN ID uniquement', 'is_correct' => false],
                            ['text' => 'Une TCP port range', 'is_correct' => false],
                        ],
                        'explanation' => 'Identifier les failure domains aide à éviter qu’une panne unique touche simultanément des composants redondants.',
                    ],
                    [
                        'question' => 'Pourquoi placer deux équipements redondants dans le même failure domain peut-il être dangereux ?',
                        'choices' => [
                            ['text' => 'Un incident commun peut les rendre indisponibles simultanément', 'is_correct' => true],
                            ['text' => 'Ils deviennent toujours plus rapides', 'is_correct' => false],
                            ['text' => 'Cela supprime la routing', 'is_correct' => false],
                            ['text' => 'Cela augmente les MAC addresses', 'is_correct' => false],
                        ],
                        'explanation' => 'La redondance est moins efficace si les composants partagent une cause de panne commune.',
                    ],
                    [
                        'question' => 'Quel mécanisme permet de répartir des requêtes entre plusieurs servers ?',
                        'choices' => [
                            ['text' => 'Load balancing', 'is_correct' => true],
                            ['text' => 'ARP spoofing', 'is_correct' => false],
                            ['text' => 'STP blocking', 'is_correct' => false],
                            ['text' => 'DNS recursion uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un load balancer distribue les requêtes entre plusieurs backend servers selon une policy.',
                    ],
                    [
                        'question' => 'Pourquoi health checks sont-ils importants pour un load balancer ?',
                        'choices' => [
                            ['text' => 'Ils permettent d’éviter d’envoyer du trafic vers un backend indisponible', 'is_correct' => true],
                            ['text' => 'Ils augmentent la taille des packets', 'is_correct' => false],
                            ['text' => 'Ils remplacent DNS', 'is_correct' => false],
                            ['text' => 'Ils configurent OSPF', 'is_correct' => false],
                        ],
                        'explanation' => 'Les health checks permettent de retirer ou réintégrer dynamiquement des backends selon leur état.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un active-active design ?',
                        'choices' => [
                            ['text' => 'Plusieurs composants actifs traitent simultanément le trafic', 'is_correct' => true],
                            ['text' => 'Un seul composant fonctionne et l’autre est éteint', 'is_correct' => false],
                            ['text' => 'Un design sans monitoring', 'is_correct' => false],
                            ['text' => 'Un design sans routing', 'is_correct' => false],
                        ],
                        'explanation' => 'Active-active utilise plusieurs instances opérationnelles pour partager la charge et améliorer la résilience.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un active-passive design ?',
                        'choices' => [
                            ['text' => 'Un composant actif traite le service tandis qu’un autre est prêt à prendre le relais', 'is_correct' => true],
                            ['text' => 'Tous les composants traitent toujours le trafic', 'is_correct' => false],
                            ['text' => 'Un design sans failover', 'is_correct' => false],
                            ['text' => 'Un design uniquement Layer 2', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans active-passive, le standby devient actif après une défaillance ou un changement contrôlé.',
                    ],
                    [
                        'question' => 'Pourquoi mesurer RTO et RPO ?',
                        'choices' => [
                            ['text' => 'Pour définir les objectifs de reprise et de perte de données acceptables', 'is_correct' => true],
                            ['text' => 'Pour configurer les MAC addresses', 'is_correct' => false],
                            ['text' => 'Pour calculer les DNS TTLs', 'is_correct' => false],
                            ['text' => 'Pour créer des VLANs', 'is_correct' => false],
                        ],
                        'explanation' => 'RTO mesure notamment le temps cible de reprise et RPO la quantité de données que l’on accepte potentiellement de perdre.',
                    ],
                    [
                        'question' => 'Quel est le but du graceful failover ?',
                        'choices' => [
                            ['text' => 'Réduire l’impact d’un changement de rôle ou de chemin sur les sessions et le trafic', 'is_correct' => true],
                            ['text' => 'Supprimer les routes', 'is_correct' => false],
                            ['text' => 'Désactiver monitoring', 'is_correct' => false],
                            ['text' => 'Augmenter les broadcasts', 'is_correct' => false],
                        ],
                        'explanation' => 'Un failover maîtrisé cherche à maintenir les services avec une interruption minimale.',
                    ],
                    [
                        'question' => 'Pourquoi tester régulièrement les mécanismes de failover ?',
                        'choices' => [
                            ['text' => 'Une redondance non testée peut échouer au moment où elle est réellement nécessaire', 'is_correct' => true],
                            ['text' => 'Parce que les tests augmentent toujours la disponibilité', 'is_correct' => false],
                            ['text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['text' => 'Pour désactiver les backups', 'is_correct' => false],
                        ],
                        'explanation' => 'Les tests vérifient que la configuration, les dépendances et les procédures fonctionnent réellement.',
                    ],
                ],
            ],
            [
                'title' => 'Advanced Network Security',
                'description' => 'Zero Trust, segmentation, IDS/IPS, NAC, DDoS et architecture de sécurité réseau.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quel principe Zero Trust impose-t-il ?',
                        'choices' => [
                            ['text' => 'Ne pas accorder une confiance implicite et vérifier explicitement les accès', 'is_correct' => true],
                            ['text' => 'Faire confiance à tout le LAN', 'is_correct' => false],
                            ['text' => 'Désactiver MFA', 'is_correct' => false],
                            ['text' => 'Autoriser tous les ports internes', 'is_correct' => false],
                        ],
                        'explanation' => 'Zero Trust réduit la confiance implicite et exige des contrôles d’accès adaptés au contexte.',
                    ],
                    [
                        'question' => 'Quel rôle joue un IDS ?',
                        'choices' => [
                            ['text' => 'Détecter des activités ou patterns suspects', 'is_correct' => true],
                            ['text' => 'Bloquer automatiquement tous les packets', 'is_correct' => false],
                            ['text' => 'Attribuer des IPs', 'is_correct' => false],
                            ['text' => 'Résoudre DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'Un IDS observe et alerte sur des comportements potentiellement malveillants.',
                    ],
                    [
                        'question' => 'Quel rôle ajoute typiquement un IPS ?',
                        'choices' => [
                            ['text' => 'Détecter et bloquer ou prévenir certaines activités malveillantes', 'is_correct' => true],
                            ['text' => 'Attribuer les VLANs', 'is_correct' => false],
                            ['text' => 'Créer des routes BGP', 'is_correct' => false],
                            ['text' => 'Remplacer DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'Un IPS est conçu pour prendre des mesures de prévention en plus de la détection.',
                    ],
                    [
                        'question' => 'Pourquoi la micro-segmentation est-elle utile ?',
                        'choices' => [
                            ['text' => 'Elle permet d’appliquer des contrôles fins entre workloads ou groupes de workloads', 'is_correct' => true],
                            ['text' => 'Elle augmente tous les broadcasts', 'is_correct' => false],
                            ['text' => 'Elle supprime les policies', 'is_correct' => false],
                            ['text' => 'Elle remplace TLS', 'is_correct' => false],
                        ],
                        'explanation' => 'La micro-segmentation réduit les chemins de mouvement latéral et permet des policies plus précises.',
                    ],
                    [
                        'question' => 'Quel contrôle limite l’accès réseau aux endpoints autorisés ?',
                        'choices' => [
                            ['text' => 'NAC', 'is_correct' => true],
                            ['text' => 'NTP', 'is_correct' => false],
                            ['text' => 'STP', 'is_correct' => false],
                            ['text' => 'PAT', 'is_correct' => false],
                        ],
                        'explanation' => 'Network Access Control peut appliquer des politiques selon l’identité, l’état ou le type d’un endpoint.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser MFA pour l’administration réseau ?',
                        'choices' => [
                            ['text' => 'Une compromission du password seul ne suffit plus normalement à obtenir l’accès', 'is_correct' => true],
                            ['text' => 'Cela augmente la bandwidth', 'is_correct' => false],
                            ['text' => 'Cela supprime SSH', 'is_correct' => false],
                            ['text' => 'Cela remplace les ACLs', 'is_correct' => false],
                        ],
                        'explanation' => 'MFA ajoute un facteur supplémentaire et réduit le risque lié aux credentials compromis.',
                    ],
                    [
                        'question' => 'Quel type d’attaque vise à épuiser les ressources d’un service avec un trafic massif ?',
                        'choices' => [
                            ['text' => 'DDoS', 'is_correct' => true],
                            ['text' => 'VLAN tagging', 'is_correct' => false],
                            ['text' => 'Route summarization', 'is_correct' => false],
                            ['text' => 'ARP discovery', 'is_correct' => false],
                        ],
                        'explanation' => 'Un DDoS cherche à rendre un service indisponible en saturant ses ressources ou sa connectivité.',
                    ],
                    [
                        'question' => 'Pourquoi les management networks doivent-ils être isolés ?',
                        'choices' => [
                            ['text' => 'Pour réduire l’exposition des interfaces permettant de contrôler l’infrastructure', 'is_correct' => true],
                            ['text' => 'Pour augmenter les broadcasts', 'is_correct' => false],
                            ['text' => 'Pour supprimer logging', 'is_correct' => false],
                            ['text' => 'Pour rendre DNS public', 'is_correct' => false],
                        ],
                        'explanation' => 'L’isolation réduit les chemins d’accès vers les interfaces de management critiques.',
                    ],
                    [
                        'question' => 'Quel mécanisme protège généralement les données en transit applicatives ?',
                        'choices' => [
                            ['text' => 'TLS', 'is_correct' => true],
                            ['text' => 'ARP', 'is_correct' => false],
                            ['text' => 'STP', 'is_correct' => false],
                            ['text' => 'DHCP', 'is_correct' => false],
                        ],
                        'explanation' => 'TLS fournit notamment confidentialité et intégrité pour les communications applicatives qui l’utilisent.',
                    ],
                    [
                        'question' => 'Pourquoi une security policy doit-elle être testée après déploiement ?',
                        'choices' => [
                            ['text' => 'Une règle trop permissive ou trop restrictive peut avoir un impact de sécurité ou de disponibilité', 'is_correct' => true],
                            ['text' => 'Les policies sont toujours correctes', 'is_correct' => false],
                            ['text' => 'Les tests ne sont utiles qu’au frontend', 'is_correct' => false],
                            ['text' => 'Pour supprimer les logs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les tests vérifient que la policy produit le comportement attendu sans créer de faille ou de blocage injustifié.',
                    ],
                ],
            ],
            [
                'title' => 'QoS & Traffic Engineering',
                'description' => 'Classification, marking, queuing, shaping, congestion et engineering des flux.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de QoS ?',
                        'choices' => [
                            ['text' => 'Gérer les ressources réseau afin de traiter certains flux selon des priorités et contraintes définies', 'is_correct' => true],
                            ['text' => 'Augmenter physiquement la bandwidth', 'is_correct' => false],
                            ['text' => 'Remplacer IP', 'is_correct' => false],
                            ['text' => 'Supprimer congestion', 'is_correct' => false],
                        ],
                        'explanation' => 'QoS ne crée pas de bandwidth mais permet de gérer les ressources disponibles selon des exigences de service.',
                    ],
                    [
                        'question' => 'Quelle action identifie une classe de trafic avant application d’une policy QoS ?',
                        'choices' => [
                            ['text' => 'Classification', 'is_correct' => true],
                            ['text' => 'Encryption', 'is_correct' => false],
                            ['text' => 'Routing loop', 'is_correct' => false],
                            ['text' => 'DNS recursion', 'is_correct' => false],
                        ],
                        'explanation' => 'La classification identifie les flux selon des critères comme protocol, source, destination ou DSCP.',
                    ],
                    [
                        'question' => 'Quel champ IP est couramment utilisé pour transporter une classification QoS ?',
                        'choices' => [
                            ['text' => 'DSCP', 'is_correct' => true],
                            ['text' => 'TTL uniquement', 'is_correct' => false],
                            ['text' => 'MAC vendor ID', 'is_correct' => false],
                            ['text' => 'TCP checksum', 'is_correct' => false],
                        ],
                        'explanation' => 'DSCP permet de marquer les packets IP pour influencer leur traitement QoS.',
                    ],
                    [
                        'question' => 'Que fait le queuing ?',
                        'choices' => [
                            ['text' => 'Il organise les packets en attente de transmission selon une stratégie définie', 'is_correct' => true],
                            ['text' => 'Il augmente la taille des links', 'is_correct' => false],
                            ['text' => 'Il attribue les IPs', 'is_correct' => false],
                            ['text' => 'Il résout DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'Le queuing détermine comment les packets en attente sont sélectionnés lorsqu’une interface est congestionnée.',
                    ],
                    [
                        'question' => 'Quel mécanisme réduit le débit d’un flux pour respecter un rate cible ?',
                        'choices' => [
                            ['text' => 'Traffic shaping', 'is_correct' => true],
                            ['text' => 'DNS caching', 'is_correct' => false],
                            ['text' => 'ARP', 'is_correct' => false],
                            ['text' => 'STP', 'is_correct' => false],
                        ],
                        'explanation' => 'Traffic shaping retarde certains packets afin de respecter un débit cible.',
                    ],
                    [
                        'question' => 'Quel mécanisme peut supprimer certains packets lorsqu’une congestion est détectée ?',
                        'choices' => [
                            ['text' => 'Traffic policing', 'is_correct' => true],
                            ['text' => 'DNS recursion', 'is_correct' => false],
                            ['text' => 'NAT', 'is_correct' => false],
                            ['text' => 'OSPF', 'is_correct' => false],
                        ],
                        'explanation' => 'Policing limite le débit et peut dropper ou remarker les packets qui dépassent la policy.',
                    ],
                    [
                        'question' => 'Pourquoi la voix est-elle sensible à la jitter ?',
                        'choices' => [
                            ['text' => 'Les variations du délai peuvent perturber la continuité de la lecture audio', 'is_correct' => true],
                            ['text' => 'La voix utilise uniquement DNS', 'is_correct' => false],
                            ['text' => 'La jitter augmente les MAC addresses', 'is_correct' => false],
                            ['text' => 'Elle supprime IPv6', 'is_correct' => false],
                        ],
                        'explanation' => 'La variation du délai entre packets peut provoquer des interruptions ou une dégradation perceptible de la voix.',
                    ],
                    [
                        'question' => 'Quel phénomène décrit une attente excessive des packets dans les queues ?',
                        'choices' => [
                            ['text' => 'Bufferbloat', 'is_correct' => true],
                            ['text' => 'Route leak', 'is_correct' => false],
                            ['text' => 'ARP spoofing', 'is_correct' => false],
                            ['text' => 'DNS poisoning', 'is_correct' => false],
                        ],
                        'explanation' => 'Bufferbloat désigne notamment une latence excessive due à des buffers trop importants sous congestion.',
                    ],
                    [
                        'question' => 'Pourquoi QoS doit-elle être conçue de bout en bout ?',
                        'choices' => [
                            ['text' => 'Un seul segment mal dimensionné ou mal classifié peut dégrader le résultat global', 'is_correct' => true],
                            ['text' => 'Les routers ignorent toujours DSCP', 'is_correct' => false],
                            ['text' => 'La QoS ne concerne que les endpoints', 'is_correct' => false],
                            ['text' => 'Pour supprimer TCP', 'is_correct' => false],
                        ],
                        'explanation' => 'La qualité de service dépend de la cohérence du traitement sur l’ensemble du chemin pertinent.',
                    ],
                    [
                        'question' => 'Quel est le principal trade-off d’une priorité stricte ?',
                        'choices' => [
                            ['text' => 'Un trafic moins prioritaire peut subir de la starvation si la classe prioritaire est constamment chargée', 'is_correct' => true],
                            ['text' => 'Elle garantit toujours une utilisation parfaite', 'is_correct' => false],
                            ['text' => 'Elle supprime congestion', 'is_correct' => false],
                            ['text' => 'Elle augmente automatiquement bandwidth', 'is_correct' => false],
                        ],
                        'explanation' => 'Une strict priority queue doit être contrôlée pour éviter qu’une classe consomme indûment les ressources.',
                    ],
                ],
            ],
            [
                'title' => 'Enterprise Network Architecture',
                'description' => 'Design d’architectures enterprise, scalability, observability, segmentation et trade-offs.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quel principe architectural réduit l’impact d’une compromission en séparant les zones ?',
                        'choices' => [
                            ['text' => 'Segmentation', 'is_correct' => true],
                            ['text' => 'Flat networking', 'is_correct' => false],
                            ['text' => 'Broadcasting', 'is_correct' => false],
                            ['text' => 'Any-to-any trust', 'is_correct' => false],
                        ],
                        'explanation' => 'La segmentation crée des boundaries permettant d’appliquer des contrôles et de limiter le mouvement latéral.',
                    ],
                    [
                        'question' => 'Pourquoi concevoir des failure domains explicites ?',
                        'choices' => [
                            ['text' => 'Pour empêcher qu’un incident unique compromette trop de composants simultanément', 'is_correct' => true],
                            ['text' => 'Pour augmenter les dépendances', 'is_correct' => false],
                            ['text' => 'Pour supprimer la redundancy', 'is_correct' => false],
                            ['text' => 'Pour désactiver monitoring', 'is_correct' => false],
                        ],
                        'explanation' => 'La séparation des failure domains améliore la résilience globale.',
                    ],
                    [
                        'question' => 'Quel critère est essentiel pour évaluer la scalability d’une architecture ?',
                        'choices' => [
                            ['text' => 'Sa capacité à évoluer sans augmentation disproportionnée de complexité ou de coût', 'is_correct' => true],
                            ['text' => 'La couleur des équipements', 'is_correct' => false],
                            ['text' => 'Le nombre de passwords', 'is_correct' => false],
                            ['text' => 'Le nom des VLANs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une architecture scalable doit supporter la croissance avec des coûts et une complexité maîtrisés.',
                    ],
                    [
                        'question' => 'Pourquoi séparer control plane et data plane dans l’analyse d’une architecture ?',
                        'choices' => [
                            ['text' => 'Ils ont des responsabilités et des comportements différents qui doivent être protégés et dimensionnés séparément', 'is_correct' => true],
                            ['text' => 'Ils utilisent toujours des IPs différentes', 'is_correct' => false],
                            ['text' => 'Cela supprime routing', 'is_correct' => false],
                            ['text' => 'Cela rend les switches inutiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Le control plane prend les décisions tandis que le data plane assure principalement le forwarding.',
                    ],
                    [
                        'question' => 'Quel rôle joue l’observability dans une architecture enterprise ?',
                        'choices' => [
                            ['text' => 'Permettre de comprendre l’état, les performances et les comportements du système', 'is_correct' => true],
                            ['text' => 'Remplacer les backups', 'is_correct' => false],
                            ['text' => 'Créer des VLANs automatiquement', 'is_correct' => false],
                            ['text' => 'Supprimer les security policies', 'is_correct' => false],
                        ],
                        'explanation' => 'L’observability fournit les données nécessaires pour détecter, diagnostiquer et expliquer les comportements du réseau.',
                    ],
                    [
                        'question' => 'Pourquoi documenter les architecture trade-offs ?',
                        'choices' => [
                            ['text' => 'Pour rendre explicites les compromis entre coût, performance, résilience, sécurité et complexité', 'is_correct' => true],
                            ['text' => 'Pour augmenter les configurations manuelles', 'is_correct' => false],
                            ['text' => 'Pour empêcher les changements', 'is_correct' => false],
                            ['text' => 'Pour supprimer les reviews', 'is_correct' => false],
                        ],
                        'explanation' => 'La documentation des trade-offs aide les équipes à comprendre pourquoi une architecture a été choisie.',
                    ],
                    [
                        'question' => 'Quel design limite mieux les blast radius ?',
                        'choices' => [
                            ['text' => 'Des zones segmentées avec des policies et failure domains distincts', 'is_correct' => true],
                            ['text' => 'Un seul flat LAN', 'is_correct' => false],
                            ['text' => 'Un unique management interface public', 'is_correct' => false],
                            ['text' => 'Un réseau sans ACL', 'is_correct' => false],
                        ],
                        'explanation' => 'Le blast radius est réduit lorsque les composants et flux sont séparés par des boundaries appropriées.',
                    ],
                    [
                        'question' => 'Pourquoi éviter les single points of failure dans une architecture critique ?',
                        'choices' => [
                            ['text' => 'Parce qu’une seule panne pourrait interrompre un service entier', 'is_correct' => true],
                            ['text' => 'Parce qu’ils augmentent toujours la security', 'is_correct' => false],
                            ['text' => 'Parce qu’ils réduisent les coûts', 'is_correct' => false],
                            ['text' => 'Parce qu’ils empêchent DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'Une architecture résiliente élimine ou maîtrise les dépendances critiques uniques.',
                    ],
                    [
                        'question' => 'Quel élément doit être pris en compte dans un network capacity plan ?',
                        'choices' => [
                            ['text' => 'Croissance prévue, peak traffic, headroom et failure scenarios', 'is_correct' => true],
                            ['text' => 'Uniquement le trafic moyen', 'is_correct' => false],
                            ['text' => 'Uniquement le nombre actuel d’utilisateurs', 'is_correct' => false],
                            ['text' => 'Uniquement les DNS records', 'is_correct' => false],
                        ],
                        'explanation' => 'Le capacity planning doit intégrer la croissance, les pics et la marge nécessaire aux situations dégradées.',
                    ],
                    [
                        'question' => 'Pourquoi une architecture enterprise doit-elle être testable ?',
                        'choices' => [
                            ['text' => 'Les changements et mécanismes de failover doivent pouvoir être validés avant d’avoir un impact réel', 'is_correct' => true],
                            ['text' => 'Pour supprimer automation', 'is_correct' => false],
                            ['text' => 'Pour éviter monitoring', 'is_correct' => false],
                            ['text' => 'Pour rendre toutes les routes statiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La testabilité réduit le risque opérationnel en permettant de valider les comportements attendus.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'slug' => Str::slug($quizData['title']),
                ],
                [
                    'major_id' => $major->id,
                    'title' => $quizData['title'],
                    'description' => $quizData['description'],
                    'difficulty' => $quizData['difficulty'],
                    'is_active' => true,
                ]
            );

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'question' => $questionData['question'],
                    ],
                    [
                        'explanation' => $questionData['explanation'],
                        'is_active' => true,
                    ]
                );

                Choice::where('question_id', $question->id)->delete();

                // Shuffle the complete choice records so is_correct remains
                // attached to its answer. Assign order only after shuffling.
                $choices = $questionData['choices'];
                shuffle($choices);

                foreach ($choices as $index => $choiceData) {
                    Choice::create(
                        [
                            'question_id' => $question->id,
                            'choice' => $choiceData['text'],
                            'is_correct' => $choiceData['is_correct'],
                            'order' => $index + 1,
                        ]
                    );
                }
            }
        }
    }
}