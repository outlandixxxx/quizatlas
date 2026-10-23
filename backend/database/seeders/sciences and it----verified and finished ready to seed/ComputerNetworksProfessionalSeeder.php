<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ComputerNetworksProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'computer-networks')->firstOrFail();

        Quiz::where('subject_id', $subject->id)
            ->whereIn('title', ['OSPF Architecture & Optimization', 'BGP & Internet Routing', 'MPLS & WAN Architecture', 'Network Automation & Programmability', 'High Availability & Resilience', 'Advanced Network Security', 'QoS & Traffic Engineering', 'Enterprise Network Architecture'])
            ->update(['is_active' => false]);

        $quizzes = [
            [
                'title' => 'Conception et optimisation OSPF',
                'description' => 'Études de cas de niveau professionnel sur la conception, l’exploitation et l’optimisation des réseaux.',
                'difficulty' => 'Advanced',
                'duration' => 32,
                'passing_score' => 75,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quelle base de données LSDB contient les informations de topologie reçues via les LSA?',
                        'explanation' => 'La base de données LSDB contient les informations de topologie utilisées par OSPF pour calculer les chemins.',
                        'choices' => [
                            [
                                'choice_text' => 'LSDB',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'cache ARP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'table MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'zone DNS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’une zone OSPF?',
                        'explanation' => 'Les zones permettent de construire une architecture hiérarchique et de réduire la complexité du domaine OSPF.',
                        'choices' => [
                            [
                                'choice_text' => 'Structurer le domaine OSPF et limiter la propagation de certaines informations',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Remplacer les VLAN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Chiffrer les paquets',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Attribuer les adresses MAC',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel routeur connecte généralement une zone OSPF à la zone dorsale?',
                        'explanation' => 'Un routeur de frontière OSPF possède des interfaces dans plusieurs zones OSPF, généralement avec un lien vers zone 0.',
                        'choices' => [
                            [
                                'choice_text' => 'ABR',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ASBR uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'relais DHCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'résolveur DNS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue un DR sur un réseau à diffusion générale?',
                        'explanation' => 'Le routeur désigné réduit le nombre d’adjacences complètes sur certains réseaux multiaccès.',
                        'choices' => [
                            [
                                'choice_text' => 'Réduire le nombre d’adjacences OSPF nécessaires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Remplacer tous les routeurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Attribuer les adresses IP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Chiffrer OSPF',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une OSPF agrégation de routes peut-elle améliorer l’évolutivité?',
                        'explanation' => 'La agrégation de routes réduit la taille des informations de routage visibles au-delà d’une frontière appropriée.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle réduit le nombre de préfixes propagés entre certaines frontières',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle augmente le nombre de LSA',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime toutes les routes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle désactive SPF',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel algorithme OSPF utilise-t-il pour calculer le arbre des plus courts chemins?',
                        'explanation' => 'OSPF utilise l’algorithme SPF basé sur Dijkstra pour calculer les chemins les plus courts.',
                        'choices' => [
                            [
                                'choice_text' => 'SPF de Dijkstra',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Bellman-Ford uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'RSA',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'AES',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que peut provoquer une mauvaise configuration des OSPF temporisateurs?',
                        'explanation' => 'Des temporisateurs incohérents ou trop agressifs peuvent provoquer des neighbor resets et de l’instabilité.',
                        'choices' => [
                            [
                                'choice_text' => 'Une convergence instable ou des adjacences qui deviennent instables',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une augmentation de la taille IPv4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La suppression des VLAN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La conversion TCP vers UDP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un ASBR?',
                        'explanation' => 'Un système autonome frontière routeur injecte notamment des external routes dans OSPF.',
                        'choices' => [
                            [
                                'choice_text' => 'Introduire ou redistribuer des routes provenant d’un autre domaine de routage ou protocol',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Créer des adresses MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Servir uniquement DHCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Être toujours le DR',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi contrôler les domaines de diffusion des LSA?',
                        'explanation' => 'Une architecture OSPF bien structurée limite la propagation inutile des informations de topologie.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour limiter l’impact des changements et la charge de calcul et de mémoire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour supprimer le routage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour remplacer BGP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour augmenter les diffusions',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel trade-off accompagne une architecture OSPF très fragmentée en zones?',
                        'explanation' => 'Multiplier les frontières peut améliorer l’évolutivité mais rend le design plus complexe.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut réduire certaines informations de topologie mais augmente la complexité de design et d’exploitation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle supprime toute configuration',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle garantit toujours le meilleur chemin',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle rend BGP inutile',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Politiques de routage BGP',
                'description' => 'Études de cas de niveau professionnel sur la conception, l’exploitation et l’optimisation des réseaux.',
                'difficulty' => 'Advanced',
                'duration' => 32,
                'passing_score' => 75,
                'total_marks' => 11,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel type de protocole de routage est BGP?',
                        'explanation' => 'BGP est un à vecteur de chemin protocol conçu pour le routage inter-domaines.',
                        'choices' => [
                            [
                                'choice_text' => 'à vecteur de chemin',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'à état de liens',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ethernet commutateuanneau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Transport protocol',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel attribut BGP est couramment utilisé pour influencer le chemin préféré à l’intérieur d’un AS?',
                        'explanation' => 'Local Preference permet notamment de choisir les routes de sortie préférées au sein d’un AS.',
                        'choices' => [
                            [
                                'choice_text' => 'Local Preference',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'DNS TTL',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'fenêtre TCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'VLAN ID',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel attribut BGP indique notamment le chemin d’AS traversés?',
                        'explanation' => 'AS_PATH contient la séquence d’AS par lesquels l’annonce a été propagée.',
                        'choices' => [
                            [
                                'choice_text' => 'AS_PATH',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'MAC_PATH',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DNS_PATH',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'TCP_PATH',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi BGP utilise-t-il AS_PATH pour la prévention des boucles?',
                        'explanation' => 'La présence de son propre AS dans AS_PATH est un signal classique de routage loop.',
                        'choices' => [
                            [
                                'choice_text' => 'Un AS peut détecter sa propre présence dans le chemin et rejeter l’annonce',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il remplace TCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il chiffre les routes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il attribue les adresses IP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel protocole de transport est utilisé par BGP?',
                        'explanation' => 'BGP établit ses sessions de appairage sur TCP, traditionnellement port 179.',
                        'choices' => [
                            [
                                'choice_text' => 'TCP',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'UDP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ICMP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'SCTP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un eBGP appairage?',
                        'explanation' => 'eBGP échange des routes entre AS distincts.',
                        'choices' => [
                            [
                                'choice_text' => 'Une session BGP entre deux systèmes autonomes différents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une session DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une adjacence OSPF dans la même zone',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un trunk VLAN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les BGP politiques sont-elles importantes?',
                        'explanation' => 'BGP est fortement politique-driven, ce qui permet de contrôler les échanges et les chemins.',
                        'choices' => [
                            [
                                'choice_text' => 'Elles permettent de contrôler quelles routes sont acceptées, annoncées et préférées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elles remplacent les ACLs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles configurent les table MACs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles suppriment les préfixes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu’on accepte sans filtrage des préfixes d’un pair?',
                        'explanation' => 'Le préfixe filtrage est essentiel pour limiter les annonces incorrectes et les fuite de routess.',
                        'choices' => [
                            [
                                'choice_text' => 'Une mauvaise annonce ou fuite de routes peut affecter fortement le routage',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le DNS devient obligatoire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'TCP est désactivé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les VLAN sont supprimés',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la sélection des routes BGP ne se limite-t-elle pas à la plus courte distance physique?',
                        'explanation' => 'BGP sélectionne les routes selon une série d’attributs et de règles de politique.',
                        'choices' => [
                            [
                                'choice_text' => 'BGP utilise des attributs et des politiques plutôt qu’un simple coût géographique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'BGP ne connaît pas les adresses IP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il utilise uniquement STP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il ignore toutes les politiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel concept décrit l’annonce accidentelle de préfixes appartenant à un autre réseau?',
                        'explanation' => 'Un fuite de routes consiste notamment à propager des préfixes au-delà de la politique prévue.',
                        'choices' => [
                            [
                                'choice_text' => 'fuite de routes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'VLAN hopping',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DNS poisoning uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'cache ARP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie MPLS?',
                        'explanation' => 'MPLS signifie Multiprotocol Label commutateuanneau.',
                        'choices' => [
                            [
                                'choice_text' => 'Multiprotocol Label commutateuanneau',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Managed paquet Link Service',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Multi-Port Layer Security',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Main Protocol Link System',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'MPLS et réseaux WAN',
                'description' => 'Études de cas de niveau professionnel sur la conception, l’exploitation et l’optimisation des réseaux.',
                'difficulty' => 'Advanced',
                'duration' => 34,
                'passing_score' => 75,
                'total_marks' => 12,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel élément MPLS est ajouté pour permettre le acheminement basé sur labels?',
                        'explanation' => 'MPLS utilise des labels pour orienter le acheminement dans le réseau du provider.',
                        'choices' => [
                            [
                                'choice_text' => 'Label',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'DNS record',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'port TCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'MAC vendor ID',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel équipement MPLS edge connecte typiquement le customer au provider network?',
                        'explanation' => 'Le Provider Edge routeur connecte les customer-facing services au réseau MPLS du provider.',
                        'choices' => [
                            [
                                'choice_text' => 'PE routeur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'résolveur DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'couche 2 hub',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DHCP client',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel équipement se trouve généralement au cœur du MPLS provider network?',
                        'explanation' => 'Les P routeurs transportent les paquets/labels au sein du core provider sans nécessairement connaître les routes client finales.',
                        'choices' => [
                            [
                                'choice_text' => 'P routeur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Access point',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DHCP server',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Web proxy',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser MPLS VPNs?',
                        'explanation' => 'Les MPLS VPNs permettent de maintenir des contextes de routage séparés sur une infrastructure commune.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour fournir une séparation logique de réseaux clients sur une infrastructure partagée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour remplacer tous les adresses IP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour désactiver routage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer QoS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme peut associer une route VPN à un contexte de acheminement spécifique?',
                        'explanation' => 'Une VRF sépare les tables de routage et acheminement contexts, notamment pour les services VPN.',
                        'choices' => [
                            [
                                'choice_text' => 'VRF',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ARP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'STP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DNSSEC',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage d’une WAN architecture redondante?',
                        'explanation' => 'La redondance permet de continuer le service après certaines défaillances.',
                        'choices' => [
                            [
                                'choice_text' => 'Maintenir la connectivité lorsqu’un lien ou chemin devient indisponible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Supprimer les protocoles de routage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éviter toute configuration',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Garantir zéro latency',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi considérer les SLA dans un WAN design?',
                        'explanation' => 'Les SLA permettent de relier le design technique aux objectifs de service attendus.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils définissent des objectifs mesurables de disponibilité et de performance',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils remplacent les tables de routage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils créent les VLAN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils désactivent QoS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur influence fortement le choix d’un WAN transport?',
                        'explanation' => 'Un WAN design doit arbitrer performance, disponibilité, sécurité et coût.',
                        'choices' => [
                            [
                                'choice_text' => 'Latency, bande passante, availability, cost et security requirements',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La couleur des cables uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le hôtename uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nombre de enregistrements DNS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter une architecture WAN avec un seul point de défaillance?',
                        'explanation' => 'Un point de défaillance unique compromet la résilience du service.',
                        'choices' => [
                            [
                                'choice_text' => 'Une panne unique pourrait interrompre une grande partie du service',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle améliore toujours la disponibilité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime les dependencies',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle réduit automatiquement la latency',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage principal offre une API dans network automation?',
                        'explanation' => 'Une API fournit une interface structurée permettant l’automatisation des opérations réseau.',
                        'choices' => [
                            [
                                'choice_text' => 'Permettre à des outils logiciels d’interagir programmatiquement avec les équipements ou services',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Remplacer Ethernet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Créer des adresses MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les configurations',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’idempotence est-elle importante en automation?',
                        'explanation' => 'Une tâche idempotente converge vers l’état souhaité même lorsqu’elle est exécutée plusieurs fois.',
                        'choices' => [
                            [
                                'choice_text' => 'Une même opération peut être répétée sans provoquer des changements indésirables supplémentaires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle augmente les erreurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle désactive les APIs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle remplace Git',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel outil est couramment associé à l’automatisation déclarative de configuration?',
                        'explanation' => 'Ansible peut décrire et appliquer des états de configuration de manière automatisée.',
                        'choices' => [
                            [
                                'choice_text' => 'Ansible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Wireshark',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ping',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'traceroute',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Automatisation des réseaux',
                'description' => 'Études de cas de niveau professionnel sur la conception, l’exploitation et l’optimisation des réseaux.',
                'difficulty' => 'Advanced',
                'duration' => 34,
                'passing_score' => 75,
                'total_marks' => 11,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi versionner les configurations réseau?',
                        'explanation' => 'Le version control apporte traçabilité, collaboration et capacité de retour arrière.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour suivre les changements, effectuer des reviews et faciliter le rollback',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour augmenter le perte de paquets',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer sauvegardes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter les tests',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que infrastructure as code?',
                        'explanation' => 'Infrastructure as code traite la configuration de l’infrastructure comme un artefact versionnable et automatisable.',
                        'choices' => [
                            [
                                'choice_text' => 'La gestion déclarative ou automatisée de l’infrastructure via des fichiers et du code versionnés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une méthode de câblage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un protocole DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un type de VLAN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel format structuré est couramment utilisé par des APIs modernes?',
                        'explanation' => 'JSON est fréquemment utilisé pour transporter des données structurées dans les APIs.',
                        'choices' => [
                            [
                                'choice_text' => 'JSON',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'MP3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'PNG',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'EXE',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser CI/CD pour des changements réseau automatisés?',
                        'explanation' => 'CI/CD peut intégrer linting, tests, validation et déploiements contrôlés afin de réduire les erreurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour automatiser validation, tests et déploiement contrôlé des changements',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les reviews',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter les sauvegardes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour augmenter les changements manuels',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que telemetry dans un contexte réseau?',
                        'explanation' => 'La telemetry fournit des données opérationnelles détaillées pour l’observability et l’analyse.',
                        'choices' => [
                            [
                                'choice_text' => 'La collecte continue de données d’état et de performance depuis l’infrastructure',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un type de câble',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une méthode de découpage en sous-réseaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un protocole de mail',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des templates dans l’automation?',
                        'explanation' => 'Les templates permettent de générer des configurations cohérentes à partir de paramètres structurés.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour standardiser les configurations et réduire les variations manuelles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les variables',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour empêcher toute évolution',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour remplacer les protocoles de routage',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel risque doit-on contrôler avant une automation à grande échelle?',
                        'explanation' => 'L’automation augmente la vitesse mais peut aussi amplifier l’impact d’une mauvaise définition ou validation.',
                        'choices' => [
                            [
                                'choice_text' => 'Une erreur de logique peut être propagée rapidement à de nombreux équipements',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’automation ne peut jamais échouer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les APIs empêchent les erreurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le réseau devient automatiquement chiffré',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal de high availability?',
                        'explanation' => 'High availability vise à maintenir le service malgré certaines défaillances.',
                        'choices' => [
                            [
                                'choice_text' => 'Réduire la durée et la probabilité d’interruption du service',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Augmenter le nombre de passwords',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les sauvegardes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire les VLAN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un panne domain?',
                        'explanation' => 'Identifier les panne domains aide à éviter qu’une panne unique touche simultanément des composants redondants.',
                        'choices' => [
                            [
                                'choice_text' => 'Une zone dans laquelle une défaillance peut affecter un ensemble de composants',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une zone DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un VLAN ID uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une port TCP range',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi placer deux équipements redondants dans le même panne domain peut-il être dangereux?',
                        'explanation' => 'La redondance est moins efficace si les composants partagent une cause de panne commune.',
                        'choices' => [
                            [
                                'choice_text' => 'Un incident commun peut les rendre indisponibles simultanément',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils deviennent toujours plus rapides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cela supprime la routage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cela augmente les adresses MAC',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme permet de répartir des requêtes entre plusieurs servers?',
                        'explanation' => 'Un load balancer distribue les requêtes entre plusieurs backend servers selon une politique.',
                        'choices' => [
                            [
                                'choice_text' => 'Load balancing',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ARP spoofing',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'STP blocking',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DNS recursion uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Résilience et continuité de service',
                'description' => 'Études de cas de niveau professionnel sur la conception, l’exploitation et l’optimisation des réseaux.',
                'difficulty' => 'Advanced',
                'duration' => 36,
                'passing_score' => 75,
                'total_marks' => 12,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi health checks sont-ils importants pour un load balancer?',
                        'explanation' => 'Les health checks permettent de retirer ou réintégrer dynamiquement des backends selon leur état.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils permettent d’éviter d’envoyer du trafic vers un backend indisponible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils augmentent la taille des paquets',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils remplacent DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils configurent OSPF',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un active-active design?',
                        'explanation' => 'Active-active utilise plusieurs instances opérationnelles pour partager la charge et améliorer la résilience.',
                        'choices' => [
                            [
                                'choice_text' => 'Plusieurs composants actifs traitent simultanément le trafic',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un seul composant fonctionne et l’autre est éteint',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un design sans supervision',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un design sans routage',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un active-passive design?',
                        'explanation' => 'Dans active-passive, le standby devient actif après une défaillance ou un changement contrôlé.',
                        'choices' => [
                            [
                                'choice_text' => 'Un composant actif traite le service tandis qu’un autre est prêt à prendre le relais',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Tous les composants traitent toujours le trafic',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un design sans basculement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un design uniquement couche 2',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer RTO et RPO?',
                        'explanation' => 'RTO mesure notamment le temps cible de reprise et RPO la quantité de données que l’on accepte potentiellement de perdre.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour définir les objectifs de reprise et de perte de données acceptables',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour configurer les adresses MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour calculer les DNS TTLs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour créer des VLAN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le but du graceful basculement?',
                        'explanation' => 'Un basculement maîtrisé cherche à maintenir les services avec une interruption minimale.',
                        'choices' => [
                            [
                                'choice_text' => 'Réduire l’impact d’un changement de rôle ou de chemin sur les sessions et le trafic',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Supprimer les routes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Désactiver supervision',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter les diffusions',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester régulièrement les mécanismes de basculement?',
                        'explanation' => 'Les tests vérifient que la configuration, les dépendances et les procédures fonctionnent réellement.',
                        'choices' => [
                            [
                                'choice_text' => 'Une redondance non testée peut échouer au moment où elle est réellement nécessaire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les tests augmentent toujours la disponibilité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les journaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour désactiver les sauvegardes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel principe Zero Trust impose-t-il?',
                        'explanation' => 'Zero Trust réduit la confiance implicite et exige des contrôles d’accès adaptés au contexte.',
                        'choices' => [
                            [
                                'choice_text' => 'Ne pas accorder une confiance implicite et vérifier explicitement les accès',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Faire confiance à tout le LAN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Désactiver MFA',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Autoriser tous les ports internes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue un IDS?',
                        'explanation' => 'Un IDS observe et alerte sur des comportements potentiellement malveillants.',
                        'choices' => [
                            [
                                'choice_text' => 'Détecter des activités ou patterns suspects',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Bloquer automatiquement tous les paquets',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Attribuer des IPs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Résoudre DNS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle ajoute typiquement un IPS?',
                        'explanation' => 'Un IPS est conçu pour prendre des mesures de prévention en plus de la détection.',
                        'choices' => [
                            [
                                'choice_text' => 'Détecter et bloquer ou prévenir certaines activités malveillantes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Attribuer les VLAN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Créer des routes BGP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remplacer DNS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la micro-segmentation est-elle utile?',
                        'explanation' => 'La micro-segmentation réduit les chemins de mouvement latéral et permet des politiques plus précises.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle permet d’appliquer des contrôles fins entre workloads ou groupes de workloads',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle augmente tous les diffusions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime les politiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle remplace TLS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel contrôle limite l’accès réseau aux endpoints autorisés?',
                        'explanation' => 'Network Access Control peut appliquer des politiques selon l’identité, l’état ou le type d’un endpoint.',
                        'choices' => [
                            [
                                'choice_text' => 'NAC',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'NTP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'STP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'PAT',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser MFA pour l’administration réseau?',
                        'explanation' => 'MFA ajoute un facteur supplémentaire et réduit le risque lié aux credentials compromis.',
                        'choices' => [
                            [
                                'choice_text' => 'Une compromission du password seul ne suffit plus normalement à obtenir l’accès',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Cela augmente la bande passante',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cela supprime SSH',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cela remplace les ACLs',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Sécurité et qualité de service',
                'description' => 'Études de cas de niveau professionnel sur la conception, l’exploitation et l’optimisation des réseaux.',
                'difficulty' => 'Advanced',
                'duration' => 36,
                'passing_score' => 75,
                'total_marks' => 12,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel type d’attaque vise à épuiser les ressources d’un service avec un trafic massif?',
                        'explanation' => 'Un DDoS cherche à rendre un service indisponible en saturant ses ressources ou sa connectivité.',
                        'choices' => [
                            [
                                'choice_text' => 'DDoS',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'VLAN tagging',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Route agrégation de routes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ARP discovery',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les management networks doivent-ils être isolés?',
                        'explanation' => 'L’isolation réduit les chemins d’accès vers les interfaces de management critiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour réduire l’exposition des interfaces permettant de contrôler l’infrastructure',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour augmenter les diffusions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer logging',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour rendre DNS public',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme protège généralement les données en transit applicatives?',
                        'explanation' => 'TLS fournit notamment confidentialité et intégrité pour les communications applicatives qui l’utilisent.',
                        'choices' => [
                            [
                                'choice_text' => 'TLS',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ARP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'STP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DHCP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique de sécurité doit-elle être testée après déploiement?',
                        'explanation' => 'Les tests vérifient que la politique produit le comportement attendu sans créer de faille ou de blocage injustifié.',
                        'choices' => [
                            [
                                'choice_text' => 'Une règle trop permissive ou trop restrictive peut avoir un impact de sécurité ou de disponibilité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les politiques sont toujours correctes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les tests ne sont utiles qu’au frontend',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les journaux',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal de QoS?',
                        'explanation' => 'QoS ne crée pas de bande passante mais permet de gérer les ressources disponibles selon des exigences de service.',
                        'choices' => [
                            [
                                'choice_text' => 'Gérer les ressources réseau afin de traiter certains flux selon des priorités et contraintes définies',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Augmenter physiquement la bande passante',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remplacer IP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer congestion',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle action identifie une classe de trafic avant application d’une politique QoS?',
                        'explanation' => 'La classification identifie les flux selon des critères comme protocol, source, destination ou DSCP.',
                        'choices' => [
                            [
                                'choice_text' => 'Classification',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Encryption',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'routage loop',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DNS recursion',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel champ IP est couramment utilisé pour transporter une classification QoS?',
                        'explanation' => 'DSCP permet de marquer les paquets IP pour influencer leur traitement QoS.',
                        'choices' => [
                            [
                                'choice_text' => 'DSCP',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'TTL uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'MAC vendor ID',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'TCP checksum',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que fait le queuing?',
                        'explanation' => 'Le queuing détermine comment les paquets en attente sont sélectionnés lorsqu’une interface est congestionnée.',
                        'choices' => [
                            [
                                'choice_text' => 'Il organise les paquets en attente de transmission selon une stratégie définie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il augmente la taille des links',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il attribue les IPs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il résout DNS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme réduit le débit d’un flux pour respecter un rate cible?',
                        'explanation' => 'Traffic shaping retarde certains paquets afin de respecter un débit cible.',
                        'choices' => [
                            [
                                'choice_text' => 'Traffic shaping',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'DNS caching',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ARP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'STP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme peut supprimer certains paquets lorsqu’une congestion est détectée?',
                        'explanation' => 'Policing limite le débit et peut perteper ou remarker les paquets qui dépassent la politique.',
                        'choices' => [
                            [
                                'choice_text' => 'Traffic policing',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'DNS recursion',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'NAT',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'OSPF',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la voix est-elle sensible à la jitter?',
                        'explanation' => 'La variation du délai entre paquets peut provoquer des interruptions ou une dégradation perceptible de la voix.',
                        'choices' => [
                            [
                                'choice_text' => 'Les variations du délai peuvent perturber la continuité de la lecture audio',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La voix utilise uniquement DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La jitter augmente les adresses MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime IPv6',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel phénomène décrit une attente excessive des paquets dans les queues?',
                        'explanation' => 'Bufferbloat désigne notamment une latence excessive due à des buffers trop importants sous congestion.',
                        'choices' => [
                            [
                                'choice_text' => 'Bufferbloat',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'fuite de routes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ARP spoofing',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DNS poisoning',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Architecture réseau d’entreprise',
                'description' => 'Études de cas de niveau professionnel sur la conception, l’exploitation et l’optimisation des réseaux.',
                'difficulty' => 'Advanced',
                'duration' => 38,
                'passing_score' => 75,
                'total_marks' => 12,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi QoS doit-elle être conçue de bout en bout?',
                        'explanation' => 'La qualité de service dépend de la cohérence du traitement sur l’ensemble du chemin pertinent.',
                        'choices' => [
                            [
                                'choice_text' => 'Un seul segment mal dimensionné ou mal classifié peut dégrader le résultat global',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les routeurs ignorent toujours DSCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La QoS ne concerne que les endpoints',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer TCP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal trade-off d’une priorité stricte?',
                        'explanation' => 'Une strict priority queue doit être contrôlée pour éviter qu’une classe consomme indûment les ressources.',
                        'choices' => [
                            [
                                'choice_text' => 'Un trafic moins prioritaire peut subir de la étoilevation si la classe prioritaire est constamment chargée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle garantit toujours une utilisation parfaite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime congestion',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle augmente automatiquement bande passante',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel principe architectural réduit l’impact d’une compromission en séparant les zones?',
                        'explanation' => 'La segmentation crée des frontières permettant d’appliquer des contrôles et de limiter le mouvement latéral.',
                        'choices' => [
                            [
                                'choice_text' => 'Segmentation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Flat networking',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'diffusioning',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Any-to-any trust',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi concevoir des panne domains explicites?',
                        'explanation' => 'La séparation des panne domains améliore la résilience globale.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour empêcher qu’un incident unique compromette trop de composants simultanément',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour augmenter les dépendances',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer la redundancy',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour désactiver supervision',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel critère est essentiel pour évaluer la évolutivité d’une architecture?',
                        'explanation' => 'Une architecture scalable doit supporter la croissance avec des coûts et une complexité maîtrisés.',
                        'choices' => [
                            [
                                'choice_text' => 'Sa capacité à évoluer sans augmentation disproportionnée de complexité ou de coût',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La couleur des équipements',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nombre de passwords',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nom des VLAN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer plan de contrôle et plan de transfert dans l’analyse d’une architecture?',
                        'explanation' => 'Le plan de contrôle prend les décisions tandis que le plan de transfert assure principalement le acheminement.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils ont des responsabilités et des comportements différents qui doivent être protégés et dimensionnés séparément',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils utilisent toujours des IPs différentes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cela supprime routage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cela rend les commutateurs inutiles',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue l’observability dans une architecture enterprise?',
                        'explanation' => 'L’observability fournit les données nécessaires pour détecter, diagnostiquer et expliquer les comportements du réseau.',
                        'choices' => [
                            [
                                'choice_text' => 'Permettre de comprendre l’état, les performances et les comportements du système',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Remplacer les sauvegardes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Créer des VLAN automatiquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les security politiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les architecture trade-offs?',
                        'explanation' => 'La documentation des trade-offs aide les équipes à comprendre pourquoi une architecture a été choisie.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour rendre explicites les compromis entre coût, performance, résilience, sécurité et complexité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour augmenter les configurations manuelles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour empêcher les changements',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les reviews',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel design limite mieux les blast radius?',
                        'explanation' => 'Le blast radius est réduit lorsque les composants et flux sont séparés par des frontières appropriées.',
                        'choices' => [
                            [
                                'choice_text' => 'Des zones segmentées avec des politiques et panne domains distincts',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un seul flat LAN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un unique management interface public',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un réseau sans ACL',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter les points de défaillance uniques dans une architecture critique?',
                        'explanation' => 'Une architecture résiliente élimine ou maîtrise les dépendances critiques uniques.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’une seule panne pourrait interrompre un service entier',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’ils augmentent toujours la security',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’ils réduisent les coûts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’ils empêchent DNS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel élément doit être pris en compte dans un network capacity plan?',
                        'explanation' => 'Le capacity planning doit intégrer la croissance, les pics et la marge nécessaire aux situations dégradées.',
                        'choices' => [
                            [
                                'choice_text' => 'Croissance prévue, peak traffic, headroom et panne scenarios',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement le trafic moyen',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement le nombre actuel d’utilisateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement les enregistrements DNS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture enterprise doit-elle être testable?',
                        'explanation' => 'La testabilité réduit le risque opérationnel en permettant de valider les comportements attendus.',
                        'choices' => [
                            [
                                'choice_text' => 'Les changements et mécanismes de basculement doivent pouvoir être validés avant d’avoir un impact réel',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour supprimer automation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter supervision',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour rendre toutes les routes statiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
                    'total_marks' => $quizData['total_marks'],
                    'is_active' => $quizData['is_active'],
                    'difficulty' => $quizData['difficulty'],
                ]
            );

            foreach ($quizData['questions'] as $index => $questionData) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'order' => $index + 1,
                    ],
                    [
                        'question' => $questionData['question'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $questionData['explanation'],
                    ]
                );

                $question->choices()->delete();
                foreach ($questionData['choices'] as $choiceIndex => $choiceData) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $choiceData['choice_text'],
                        'is_correct' => $choiceData['is_correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }
}
