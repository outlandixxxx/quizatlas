<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ComputerNetworksIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'computer-science-it')->firstOrFail();

        $subject = $major->subjects()
            ->where('slug', 'computer-networks')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Advanced IPv4 Subnetting',
                'description' => 'Subnetting avancé, VLSM, CIDR et planification efficace des adresses IPv4.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quel prefix fournit 30 usable IPv4 host addresses dans un subnet classique ?',
                        'choices' => [
                            ['text' => '/27', 'is_correct' => true],
                            ['text' => '/26', 'is_correct' => false],
                            ['text' => '/28', 'is_correct' => false],
                            ['text' => '/25', 'is_correct' => false],
                        ],
                        'explanation' => 'Un /27 contient 32 adresses, dont 30 sont normalement utilisables pour des hosts.',
                    ],
                    [
                        'question' => 'Combien d’adresses totales contient un /20 ?',
                        'choices' => [
                            ['text' => '4096', 'is_correct' => true],
                            ['text' => '2048', 'is_correct' => false],
                            ['text' => '1024', 'is_correct' => false],
                            ['text' => '8192', 'is_correct' => false],
                        ],
                        'explanation' => 'Un /20 laisse 12 bits pour les hosts, soit 2^12 = 4096 adresses.',
                    ],
                    [
                        'question' => 'Quel prefix correspond au subnet mask 255.255.255.192 ?',
                        'choices' => [
                            ['text' => '/26', 'is_correct' => true],
                            ['text' => '/27', 'is_correct' => false],
                            ['text' => '/25', 'is_correct' => false],
                            ['text' => '/24', 'is_correct' => false],
                        ],
                        'explanation' => '255.255.255.192 correspond à 26 bits de prefix.',
                    ],
                    [
                        'question' => 'Quel est le principe de VLSM ?',
                        'choices' => [
                            ['text' => 'Utiliser des subnet sizes différents selon les besoins', 'is_correct' => true],
                            ['text' => 'Utiliser uniquement des /24', 'is_correct' => false],
                            ['text' => 'Attribuer la même IP à tous les hosts', 'is_correct' => false],
                            ['text' => 'Supprimer les routing tables', 'is_correct' => false],
                        ],
                        'explanation' => 'VLSM permet d’allouer des prefixes de tailles différentes afin d’utiliser plus efficacement l’espace IPv4.',
                    ],
                    [
                        'question' => 'Quel subnet peut contenir un besoin de 100 usable hosts ?',
                        'choices' => [
                            ['text' => '/25', 'is_correct' => true],
                            ['text' => '/26', 'is_correct' => false],
                            ['text' => '/27', 'is_correct' => false],
                            ['text' => '/28', 'is_correct' => false],
                        ],
                        'explanation' => 'Un /25 fournit 128 adresses, soit 126 usable dans le cas classique, donc suffisamment pour 100 hosts.',
                    ],
                    [
                        'question' => 'Quel est l’avantage principal de CIDR aggregation ?',
                        'choices' => [
                            ['text' => 'Réduire le nombre de routes en annonçant un prefix plus agrégé', 'is_correct' => true],
                            ['text' => 'Augmenter le nombre de broadcasts', 'is_correct' => false],
                            ['text' => 'Supprimer IPv6', 'is_correct' => false],
                            ['text' => 'Créer des MAC addresses', 'is_correct' => false],
                        ],
                        'explanation' => 'La route summarization réduit la taille des routing tables et le volume d’annonces.',
                    ],
                    [
                        'question' => 'Quel prefix couvre 192.168.0.0 à 192.168.3.255 ?',
                        'choices' => [
                            ['text' => '/22', 'is_correct' => true],
                            ['text' => '/21', 'is_correct' => false],
                            ['text' => '/23', 'is_correct' => false],
                            ['text' => '/24', 'is_correct' => false],
                        ],
                        'explanation' => 'Un /22 couvre 1024 adresses, soit quatre /24 contigus à partir de 192.168.0.0.',
                    ],
                    [
                        'question' => 'Pourquoi les subnets doivent-ils être correctement alignés pour une route summary ?',
                        'choices' => [
                            ['text' => 'Le prefix agrégé doit représenter exactement une plage compatible avec les frontières binaires du CIDR', 'is_correct' => true],
                            ['text' => 'Parce que DNS l’exige', 'is_correct' => false],
                            ['text' => 'Pour éviter TCP', 'is_correct' => false],
                            ['text' => 'Parce que MAC addresses sont décimales', 'is_correct' => false],
                        ],
                        'explanation' => 'Une summary route valide doit correspondre à une frontière CIDR appropriée.',
                    ],
                    [
                        'question' => 'Quel est le résultat d’un subnetting trop fin ?',
                        'choices' => [
                            ['text' => 'Davantage de subnets mais moins d’adresses disponibles par subnet', 'is_correct' => true],
                            ['text' => 'Davantage d’adresses par subnet', 'is_correct' => false],
                            ['text' => 'Suppression du routing', 'is_correct' => false],
                            ['text' => 'Augmentation automatique du bandwidth', 'is_correct' => false],
                        ],
                        'explanation' => 'Augmenter la longueur du prefix crée davantage de subnets mais réduit leur taille.',
                    ],
                    [
                        'question' => 'Pourquoi réserver un plan d’adressage avant le déploiement ?',
                        'choices' => [
                            ['text' => 'Pour éviter les chevauchements et prévoir la croissance', 'is_correct' => true],
                            ['text' => 'Pour supprimer les VLANs', 'is_correct' => false],
                            ['text' => 'Pour rendre TCP connectionless', 'is_correct' => false],
                            ['text' => 'Pour désactiver DHCP', 'is_correct' => false],
                        ],
                        'explanation' => 'Un address plan cohérent limite les overlaps et facilite l’agrégation et l’exploitation future.',
                    ],
                ],
            ],
            [
                'title' => 'IPv6 Networking',
                'description' => 'Adressage IPv6, Neighbor Discovery, SLAAC et mécanismes de transition.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Combien de bits contient une IPv6 address ?',
                        'choices' => [
                            ['text' => '128', 'is_correct' => true],
                            ['text' => '64', 'is_correct' => false],
                            ['text' => '32', 'is_correct' => false],
                            ['text' => '256', 'is_correct' => false],
                        ],
                        'explanation' => 'Une IPv6 address contient 128 bits.',
                    ],
                    [
                        'question' => 'Quel mécanisme IPv6 permet à un host de construire automatiquement une address à partir d’informations de réseau ?',
                        'choices' => [
                            ['text' => 'SLAAC', 'is_correct' => true],
                            ['text' => 'NAT44', 'is_correct' => false],
                            ['text' => 'DHCPv4', 'is_correct' => false],
                            ['text' => 'ARP', 'is_correct' => false],
                        ],
                        'explanation' => 'SLAAC permet à un host d’autoconfigurer une IPv6 address à partir des Router Advertisements.',
                    ],
                    [
                        'question' => 'Quel protocole remplace ARP dans IPv6 ?',
                        'choices' => [
                            ['text' => 'Neighbor Discovery Protocol', 'is_correct' => true],
                            ['text' => 'DHCPv4', 'is_correct' => false],
                            ['text' => 'RIP', 'is_correct' => false],
                            ['text' => 'FTP', 'is_correct' => false],
                        ],
                        'explanation' => 'IPv6 utilise Neighbor Discovery, basé sur ICMPv6, pour plusieurs fonctions autrefois assurées par ARP.',
                    ],
                    [
                        'question' => 'Quelle notation représente correctement une IPv6 address ?',
                        'choices' => [
                            ['text' => '2001:db8:10::1', 'is_correct' => true],
                            ['text' => '192.168.1.1', 'is_correct' => false],
                            ['text' => '2001.192.1.1', 'is_correct' => false],
                            ['text' => 'AA:BB:CC:DD:EE:FF', 'is_correct' => false],
                        ],
                        'explanation' => 'IPv6 utilise des groupes hexadécimaux séparés par des deux-points et permet la compression des zéros.',
                    ],
                    [
                        'question' => 'Quel type d’IPv6 address est utilisé pour la communication vers tous les nodes d’un link ?',
                        'choices' => [
                            ['text' => 'ff02::1', 'is_correct' => true],
                            ['text' => '::1', 'is_correct' => false],
                            ['text' => 'fe80::1', 'is_correct' => false],
                            ['text' => '2001:db8::1', 'is_correct' => false],
                        ],
                        'explanation' => 'ff02::1 est le link-local all-nodes multicast address.',
                    ],
                    [
                        'question' => 'Quel prefix est utilisé pour les IPv6 link-local addresses ?',
                        'choices' => [
                            ['text' => 'fe80::/10', 'is_correct' => true],
                            ['text' => 'fc00::/7', 'is_correct' => false],
                            ['text' => '2000::/3', 'is_correct' => false],
                            ['text' => 'ff00::/8', 'is_correct' => false],
                        ],
                        'explanation' => 'Les link-local IPv6 addresses appartiennent au prefix fe80::/10.',
                    ],
                    [
                        'question' => 'Quel mécanisme IPv6 est utilisé pour découvrir les routers ?',
                        'choices' => [
                            ['text' => 'Router Solicitation et Router Advertisement', 'is_correct' => true],
                            ['text' => 'ARP Request', 'is_correct' => false],
                            ['text' => 'DHCPDISCOVER uniquement', 'is_correct' => false],
                            ['text' => 'TCP SYN', 'is_correct' => false],
                        ],
                        'explanation' => 'Neighbor Discovery utilise notamment RS et RA pour permettre aux hosts de découvrir les routers et paramètres du link.',
                    ],
                    [
                        'question' => 'Pourquoi IPv6 utilise-t-il largement multicast ?',
                        'choices' => [
                            ['text' => 'Pour cibler des groupes de nodes sans utiliser le broadcast traditionnel', 'is_correct' => true],
                            ['text' => 'Pour remplacer toutes les routing tables', 'is_correct' => false],
                            ['text' => 'Pour chiffrer les packets', 'is_correct' => false],
                            ['text' => 'Pour créer des TCP ports', 'is_correct' => false],
                        ],
                        'explanation' => 'IPv6 n’utilise pas le broadcast IPv4 classique et s’appuie notamment sur multicast.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une IPv6 ULA ?',
                        'choices' => [
                            ['text' => 'Une Unique Local Address destinée à des communications privées', 'is_correct' => true],
                            ['text' => 'Une public DNS address', 'is_correct' => false],
                            ['text' => 'Une MAC address', 'is_correct' => false],
                            ['text' => 'Une TCP port', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ULA utilisent le prefix fc00::/7 et sont destinées aux communications internes.',
                    ],
                    [
                        'question' => 'Quel mécanisme peut être utilisé pour faire fonctionner IPv4 et IPv6 simultanément ?',
                        'choices' => [
                            ['text' => 'Dual stack', 'is_correct' => true],
                            ['text' => 'ARP flooding', 'is_correct' => false],
                            ['text' => 'VLAN trunking uniquement', 'is_correct' => false],
                            ['text' => 'Port mirroring', 'is_correct' => false],
                        ],
                        'explanation' => 'Dual stack permet aux équipements d’exécuter IPv4 et IPv6 en parallèle.',
                    ],
                ],
            ],
            [
                'title' => 'VLANs & Trunking',
                'description' => 'Segmentation logique avec VLAN, 802.1Q, trunking et inter-VLAN routing.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quel standard est couramment utilisé pour tagger les VLANs sur un Ethernet trunk ?',
                        'choices' => [
                            ['text' => 'IEEE 802.1Q', 'is_correct' => true],
                            ['text' => '802.11ax', 'is_correct' => false],
                            ['text' => '802.3af', 'is_correct' => false],
                            ['text' => '802.1X uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'IEEE 802.1Q définit le tagging VLAN sur Ethernet.',
                    ],
                    [
                        'question' => 'Quel type de port est normalement utilisé pour un PC appartenant à un seul VLAN ?',
                        'choices' => [
                            ['text' => 'Access port', 'is_correct' => true],
                            ['text' => 'Trunk port', 'is_correct' => false],
                            ['text' => 'SPAN port', 'is_correct' => false],
                            ['text' => 'Loopback', 'is_correct' => false],
                        ],
                        'explanation' => 'Un access port associe généralement les frames non taggées d’un endpoint à un VLAN donné.',
                    ],
                    [
                        'question' => 'Pourquoi un trunk est-il nécessaire entre deux switches qui transportent plusieurs VLANs ?',
                        'choices' => [
                            ['text' => 'Pour transporter les différents VLANs sur un même lien avec leur identification', 'is_correct' => true],
                            ['text' => 'Pour remplacer les IP addresses', 'is_correct' => false],
                            ['text' => 'Pour chiffrer les frames', 'is_correct' => false],
                            ['text' => 'Pour créer des DNS zones', 'is_correct' => false],
                        ],
                        'explanation' => 'Le trunk permet de multiplex­er plusieurs VLANs sur un seul lien physique.',
                    ],
                    [
                        'question' => 'Quel problème survient si le native VLAN est incohérent entre deux extrémités ?',
                        'choices' => [
                            ['text' => 'Des comportements de tagging et de forwarding inattendus peuvent apparaître', 'is_correct' => true],
                            ['text' => 'TCP devient UDP', 'is_correct' => false],
                            ['text' => 'DNS est supprimé', 'is_correct' => false],
                            ['text' => 'Les MAC addresses deviennent IPv6', 'is_correct' => false],
                        ],
                        'explanation' => 'Une native VLAN mismatch peut provoquer des problèmes de connectivité et des risques de sécurité.',
                    ],
                    [
                        'question' => 'Pourquoi le routing est-il nécessaire entre deux VLANs différents ?',
                        'choices' => [
                            ['text' => 'Chaque VLAN représente généralement un subnet et un broadcast domain distinct', 'is_correct' => true],
                            ['text' => 'Parce qu’un switch ne connaît jamais les MAC addresses', 'is_correct' => false],
                            ['text' => 'Parce qu’Ethernet n’utilise pas de frames', 'is_correct' => false],
                            ['text' => 'Pour remplacer DHCP', 'is_correct' => false],
                        ],
                        'explanation' => 'Le trafic entre subnets doit passer par une fonction Layer 3.',
                    ],
                    [
                        'question' => 'Quel concept permet d’associer plusieurs switch ports à un même VLAN ?',
                        'choices' => [
                            ['text' => 'VLAN membership', 'is_correct' => true],
                            ['text' => 'DNS delegation', 'is_correct' => false],
                            ['text' => 'TCP window', 'is_correct' => false],
                            ['text' => 'BGP community', 'is_correct' => false],
                        ],
                        'explanation' => 'Le VLAN membership détermine le VLAN logique auquel un port appartient.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un inter-VLAN routing ?',
                        'choices' => [
                            ['text' => 'Le forwarding Layer 3 entre différents VLANs', 'is_correct' => true],
                            ['text' => 'Le tagging d’une frame', 'is_correct' => false],
                            ['text' => 'Le forwarding DNS', 'is_correct' => false],
                            ['text' => 'Le switching basé sur MAC uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Inter-VLAN routing permet aux subnets associés à différents VLANs de communiquer via Layer 3.',
                    ],
                    [
                        'question' => 'Quel risque augmente lorsque trop de hosts sont placés dans un même broadcast domain ?',
                        'choices' => [
                            ['text' => 'Le volume de broadcast et l’impact potentiel des incidents augmentent', 'is_correct' => true],
                            ['text' => 'La capacité des MAC addresses diminue', 'is_correct' => false],
                            ['text' => 'IPv6 est désactivé', 'is_correct' => false],
                            ['text' => 'TCP perd toujours ses packets', 'is_correct' => false],
                        ],
                        'explanation' => 'Des broadcast domains trop grands peuvent augmenter le bruit et le rayon d’impact de certains problèmes.',
                    ],
                    [
                        'question' => 'Quel mécanisme peut transporter plusieurs VLANs sur un router-on-a-stick ?',
                        'choices' => [
                            ['text' => '802.1Q subinterfaces', 'is_correct' => true],
                            ['text' => 'DNS records', 'is_correct' => false],
                            ['text' => 'DHCP leases uniquement', 'is_correct' => false],
                            ['text' => 'MAC filtering', 'is_correct' => false],
                        ],
                        'explanation' => 'Un router-on-a-stick utilise des subinterfaces taggées 802.1Q pour router entre VLANs.',
                    ],
                    [
                        'question' => 'Pourquoi documenter les VLAN IDs et leurs subnets ?',
                        'choices' => [
                            ['text' => 'Pour éviter les incohérences et faciliter le troubleshooting et les changements', 'is_correct' => true],
                            ['text' => 'Pour augmenter la latency', 'is_correct' => false],
                            ['text' => 'Pour remplacer STP', 'is_correct' => false],
                            ['text' => 'Pour supprimer les routing tables', 'is_correct' => false],
                        ],
                        'explanation' => 'Une correspondance documentée VLAN/subnet simplifie l’exploitation et réduit les erreurs de configuration.',
                    ],
                ],
            ],
            [
                'title' => 'STP & Layer 2 Redundancy',
                'description' => 'Spanning Tree Protocol, boucles Layer 2, root bridge et mécanismes de redondance.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quel problème principal STP résout-il ?',
                        'choices' => [
                            ['text' => 'Les Layer 2 loops', 'is_correct' => true],
                            ['text' => 'Les DNS failures', 'is_correct' => false],
                            ['text' => 'Les TCP retransmissions', 'is_correct' => false],
                            ['text' => 'Les IPv6 addresses', 'is_correct' => false],
                        ],
                        'explanation' => 'STP empêche les boucles de forwarding Ethernet qui peuvent provoquer des broadcast storms.',
                    ],
                    [
                        'question' => 'Quel équipement devient root bridge dans STP ?',
                        'choices' => [
                            ['text' => 'Celui qui possède le meilleur Bridge ID', 'is_correct' => true],
                            ['text' => 'Celui qui possède le plus d’IP addresses', 'is_correct' => false],
                            ['text' => 'Celui qui a le plus de CPU', 'is_correct' => false],
                            ['text' => 'Le premier allumé obligatoirement', 'is_correct' => false],
                        ],
                        'explanation' => 'STP élit le switch avec le meilleur Bridge ID, généralement le plus petit selon les critères STP.',
                    ],
                    [
                        'question' => 'Pourquoi les Layer 2 loops sont-elles dangereuses ?',
                        'choices' => [
                            ['text' => 'Les Ethernet frames peuvent être répétées et les broadcasts peuvent provoquer une congestion massive', 'is_correct' => true],
                            ['text' => 'Elles améliorent la convergence', 'is_correct' => false],
                            ['text' => 'Elles réduisent toujours la latency', 'is_correct' => false],
                            ['text' => 'Elles chiffrent les packets', 'is_correct' => false],
                        ],
                        'explanation' => 'Une boucle Layer 2 peut provoquer des storms et une instabilité importante.',
                    ],
                    [
                        'question' => 'Quel état STP permet au port de participer au forwarding normal ?',
                        'choices' => [
                            ['text' => 'Forwarding', 'is_correct' => true],
                            ['text' => 'Blocking uniquement', 'is_correct' => false],
                            ['text' => 'Listening uniquement', 'is_correct' => false],
                            ['text' => 'Disabled uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un port en Forwarding peut apprendre et transmettre des frames selon l’état STP.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser plusieurs chemins physiques entre switches ?',
                        'choices' => [
                            ['text' => 'Pour fournir de la redondance en cas de panne d’un lien', 'is_correct' => true],
                            ['text' => 'Pour supprimer STP', 'is_correct' => false],
                            ['text' => 'Pour éviter les MAC addresses', 'is_correct' => false],
                            ['text' => 'Pour remplacer routing', 'is_correct' => false],
                        ],
                        'explanation' => 'La redondance augmente la résilience, mais nécessite un contrôle des loops.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un BPDU ?',
                        'choices' => [
                            ['text' => 'Un message utilisé par STP pour échanger des informations de topologie', 'is_correct' => true],
                            ['text' => 'Un DNS record', 'is_correct' => false],
                            ['text' => 'Un TCP segment', 'is_correct' => false],
                            ['text' => 'Une IPv6 address', 'is_correct' => false],
                        ],
                        'explanation' => 'Les BPDUs permettent aux switches STP de calculer et maintenir la topologie sans boucle.',
                    ],
                    [
                        'question' => 'Quel rôle STP désigne généralement un port offrant le meilleur chemin vers le root bridge ?',
                        'choices' => [
                            ['text' => 'Root port', 'is_correct' => true],
                            ['text' => 'Access port', 'is_correct' => false],
                            ['text' => 'DNS port', 'is_correct' => false],
                            ['text' => 'Edge gateway', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque non-root switch sélectionne généralement un root port vers le root bridge.',
                    ],
                    [
                        'question' => 'Pourquoi positionner volontairement un switch comme root bridge ?',
                        'choices' => [
                            ['text' => 'Pour contrôler le chemin logique préféré et rendre la topologie prévisible', 'is_correct' => true],
                            ['text' => 'Pour désactiver les VLANs', 'is_correct' => false],
                            ['text' => 'Pour augmenter la taille des packets', 'is_correct' => false],
                            ['text' => 'Pour remplacer OSPF', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix explicite du root bridge permet de maîtriser la topologie STP.',
                    ],
                    [
                        'question' => 'Quel mécanisme peut protéger un edge port contre des BPDUs inattendus ?',
                        'choices' => [
                            ['text' => 'BPDU Guard', 'is_correct' => true],
                            ['text' => 'DNSSEC', 'is_correct' => false],
                            ['text' => 'NAT', 'is_correct' => false],
                            ['text' => 'DHCP snooping', 'is_correct' => false],
                        ],
                        'explanation' => 'BPDU Guard peut désactiver ou protéger un port edge lorsqu’un BPDU inattendu y apparaît.',
                    ],
                    [
                        'question' => 'Quel est l’objectif de la convergence STP ?',
                        'choices' => [
                            ['text' => 'Permettre au réseau de retrouver une topologie de forwarding cohérente après un changement', 'is_correct' => true],
                            ['text' => 'Changer les IP addresses', 'is_correct' => false],
                            ['text' => 'Résoudre les DNS names', 'is_correct' => false],
                            ['text' => 'Créer des VLANs', 'is_correct' => false],
                        ],
                        'explanation' => 'La convergence permet à STP d’adapter la topologie après une panne ou modification.',
                    ],
                ],
            ],
            [
                'title' => 'Dynamic Routing',
                'description' => 'Principes de RIP, OSPF, métriques, adjacencies et convergence.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quel type de routing protocol utilise OSPF ?',
                        'choices' => [
                            ['text' => 'Link-state', 'is_correct' => true],
                            ['text' => 'Distance-vector pur', 'is_correct' => false],
                            ['text' => 'Application-layer', 'is_correct' => false],
                            ['text' => 'Transport-layer', 'is_correct' => false],
                        ],
                        'explanation' => 'OSPF est un link-state routing protocol.',
                    ],
                    [
                        'question' => 'Quelle métrique OSPF utilise principalement pour calculer le coût d’un chemin ?',
                        'choices' => [
                            ['text' => 'Cost', 'is_correct' => true],
                            ['text' => 'Hop count uniquement', 'is_correct' => false],
                            ['text' => 'MAC address', 'is_correct' => false],
                            ['text' => 'Port number', 'is_correct' => false],
                        ],
                        'explanation' => 'OSPF utilise un cost associé aux interfaces pour déterminer les meilleurs chemins.',
                    ],
                    [
                        'question' => 'Quel protocole utilise classiquement le hop count comme métrique principale ?',
                        'choices' => [
                            ['text' => 'RIP', 'is_correct' => true],
                            ['text' => 'OSPF', 'is_correct' => false],
                            ['text' => 'BGP', 'is_correct' => false],
                            ['text' => 'Ethernet', 'is_correct' => false],
                        ],
                        'explanation' => 'RIP utilise principalement le nombre de hops, avec une limite historique de 15 hops utilisables.',
                    ],
                    [
                        'question' => 'Pourquoi OSPF utilise-t-il des areas ?',
                        'choices' => [
                            ['text' => 'Pour structurer le domaine de routing et limiter certaines informations de topologie', 'is_correct' => true],
                            ['text' => 'Pour remplacer les VLANs', 'is_correct' => false],
                            ['text' => 'Pour attribuer les MAC addresses', 'is_correct' => false],
                            ['text' => 'Pour chiffrer TCP', 'is_correct' => false],
                        ],
                        'explanation' => 'Les OSPF areas permettent de hiérarchiser le domaine et de réduire certaines contraintes de scale.',
                    ],
                    [
                        'question' => 'Que représente une routing adjacency ?',
                        'choices' => [
                            ['text' => 'Une relation de voisinage établie entre routing peers', 'is_correct' => true],
                            ['text' => 'Une connexion TCP applicative', 'is_correct' => false],
                            ['text' => 'Une relation DNS', 'is_correct' => false],
                            ['text' => 'Un trunk VLAN', 'is_correct' => false],
                        ],
                        'explanation' => 'Une adjacency permet aux routers d’échanger les informations prévues par le routing protocol.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la convergence d’un routing protocol ?',
                        'choices' => [
                            ['text' => 'Le processus par lequel les routers atteignent une vision cohérente des routes après un changement', 'is_correct' => true],
                            ['text' => 'La création d’un VLAN', 'is_correct' => false],
                            ['text' => 'La résolution DNS', 'is_correct' => false],
                            ['text' => 'Le chiffrement d’un packet', 'is_correct' => false],
                        ],
                        'explanation' => 'La convergence correspond à la stabilisation des routing decisions après une modification de topologie.',
                    ],
                    [
                        'question' => 'Pourquoi les dynamic routing protocols sont-ils utiles dans un réseau redondant ?',
                        'choices' => [
                            ['text' => 'Ils peuvent recalculer ou adapter les chemins lorsqu’un lien ou router devient indisponible', 'is_correct' => true],
                            ['text' => 'Ils suppriment les backups', 'is_correct' => false],
                            ['text' => 'Ils rendent Ethernet wireless', 'is_correct' => false],
                            ['text' => 'Ils remplacent les IP addresses', 'is_correct' => false],
                        ],
                        'explanation' => 'La capacité d’adaptation améliore la résilience et réduit les interventions manuelles.',
                    ],
                    [
                        'question' => 'Quel type de route est généralement préféré lorsqu’un prefix est plus spécifique ?',
                        'choices' => [
                            ['text' => 'La route avec le longest prefix match', 'is_correct' => true],
                            ['text' => 'Toujours la route statique', 'is_correct' => false],
                            ['text' => 'Toujours la route OSPF', 'is_correct' => false],
                            ['text' => 'Toujours la default route', 'is_correct' => false],
                        ],
                        'explanation' => 'Le forwarding IP sélectionne normalement le prefix le plus spécifique avant d’autres critères.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser une routing metric ?',
                        'choices' => [
                            ['text' => 'Pour comparer plusieurs chemins possibles selon les règles du protocol', 'is_correct' => true],
                            ['text' => 'Pour identifier un hostname', 'is_correct' => false],
                            ['text' => 'Pour chiffrer une frame', 'is_correct' => false],
                            ['text' => 'Pour créer un subnet', 'is_correct' => false],
                        ],
                        'explanation' => 'Une metric fournit une base de comparaison entre chemins candidats.',
                    ],
                    [
                        'question' => 'Quel risque existe avec une mauvaise redistribution entre routing protocols ?',
                        'choices' => [
                            ['text' => 'Des loops, routes suboptimales ou instabilités peuvent apparaître', 'is_correct' => true],
                            ['text' => 'Le DNS devient toujours plus rapide', 'is_correct' => false],
                            ['text' => 'Les VLANs disparaissent', 'is_correct' => false],
                            ['text' => 'TCP devient connectionless', 'is_correct' => false],
                        ],
                        'explanation' => 'La redistribution doit être contrôlée afin d’éviter les boucles et les annonces incohérentes.',
                    ],
                ],
            ],
            [
                'title' => 'TCP/IP Services',
                'description' => 'Fonctionnement détaillé de DNS, DHCP, NAT, ARP et services réseau associés.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quel mécanisme résout une IPv4 address locale en MAC address ?',
                        'choices' => [
                            ['text' => 'ARP', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'DHCP', 'is_correct' => false],
                            ['text' => 'BGP', 'is_correct' => false],
                        ],
                        'explanation' => 'ARP permet à un host IPv4 de déterminer la MAC address associée à une IPv4 address locale.',
                    ],
                    [
                        'question' => 'Quel service fournit souvent la default gateway via configuration automatique ?',
                        'choices' => [
                            ['text' => 'DHCP', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'SMTP', 'is_correct' => false],
                            ['text' => 'NTP', 'is_correct' => false],
                        ],
                        'explanation' => 'DHCP peut fournir la default gateway, les DNS servers et d’autres paramètres.',
                    ],
                    [
                        'question' => 'Quel mécanisme traduit des private IPv4 addresses vers une public address ?',
                        'choices' => [
                            ['text' => 'NAT', 'is_correct' => true],
                            ['text' => 'STP', 'is_correct' => false],
                            ['text' => 'OSPF', 'is_correct' => false],
                            ['text' => 'ARP', 'is_correct' => false],
                        ],
                        'explanation' => 'NAT permet notamment de traduire des addresses privées vers des addresses publiques.',
                    ],
                    [
                        'question' => 'Quel type de NAT permet à plusieurs hosts privés de partager une seule public IPv4 address ?',
                        'choices' => [
                            ['text' => 'PAT', 'is_correct' => true],
                            ['text' => 'Static routing', 'is_correct' => false],
                            ['text' => 'STP', 'is_correct' => false],
                            ['text' => 'DNSSEC', 'is_correct' => false],
                        ],
                        'explanation' => 'PAT utilise généralement des port numbers pour distinguer plusieurs sessions partageant une même public IPv4 address.',
                    ],
                    [
                        'question' => 'Quel problème ARP spoofing peut-il faciliter ?',
                        'choices' => [
                            ['text' => 'Man-in-the-middle', 'is_correct' => true],
                            ['text' => 'DNS zone transfer uniquement', 'is_correct' => false],
                            ['text' => 'STP root election', 'is_correct' => false],
                            ['text' => 'TCP congestion control', 'is_correct' => false],
                        ],
                        'explanation' => 'ARP spoofing peut permettre à un attaquant de se faire passer pour un autre host sur un LAN.',
                    ],
                    [
                        'question' => 'Quel protocole est utilisé pour synchroniser l’heure des systèmes ?',
                        'choices' => [
                            ['text' => 'NTP', 'is_correct' => true],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'ARP', 'is_correct' => false],
                            ['text' => 'FTP', 'is_correct' => false],
                        ],
                        'explanation' => 'NTP synchronise les clocks des systèmes sur un réseau.',
                    ],
                    [
                        'question' => 'Pourquoi DNS recursion est-elle utile pour un client ?',
                        'choices' => [
                            ['text' => 'Un resolver peut rechercher la réponse auprès d’autres serveurs DNS', 'is_correct' => true],
                            ['text' => 'Elle attribue une IP', 'is_correct' => false],
                            ['text' => 'Elle configure les VLANs', 'is_correct' => false],
                            ['text' => 'Elle chiffre Ethernet', 'is_correct' => false],
                        ],
                        'explanation' => 'Un recursive resolver prend en charge la recherche de la réponse pour le client.',
                    ],
                    [
                        'question' => 'Quel service traduit généralement un domain name en IP ?',
                        'choices' => [
                            ['text' => 'DNS', 'is_correct' => true],
                            ['text' => 'DHCP', 'is_correct' => false],
                            ['text' => 'NAT', 'is_correct' => false],
                            ['text' => 'STP', 'is_correct' => false],
                        ],
                        'explanation' => 'DNS fournit la résolution de noms.',
                    ],
                    [
                        'question' => 'Quel problème peut provoquer un DHCP pool épuisé ?',
                        'choices' => [
                            ['text' => 'De nouveaux clients peuvent ne pas recevoir d’IPv4 address', 'is_correct' => true],
                            ['text' => 'Les DNS records sont supprimés', 'is_correct' => false],
                            ['text' => 'Les VLANs deviennent trunk', 'is_correct' => false],
                            ['text' => 'TCP change de port', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque toutes les leases disponibles sont utilisées, les nouveaux clients peuvent ne pas obtenir de configuration.',
                    ],
                    [
                        'question' => 'Pourquoi les DNS TTLs doivent-ils être considérés lors d’un changement d’adresse ?',
                        'choices' => [
                            ['text' => 'Des resolvers peuvent conserver temporairement l’ancienne réponse en cache', 'is_correct' => true],
                            ['text' => 'TCP ignore toujours DNS', 'is_correct' => false],
                            ['text' => 'DHCP supprime les caches', 'is_correct' => false],
                            ['text' => 'ARP contrôle les DNS TTLs', 'is_correct' => false],
                        ],
                        'explanation' => 'Le caching DNS signifie que les anciennes réponses peuvent rester visibles jusqu’à expiration du TTL.',
                    ],
                ],
            ],
            [
                'title' => 'Network Security Fundamentals',
                'description' => 'ACLs, segmentation, secure management, attacks courantes et contrôles défensifs.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal d’une ACL réseau ?',
                        'choices' => [
                            ['text' => 'Autoriser ou bloquer certains flux selon des critères définis', 'is_correct' => true],
                            ['text' => 'Attribuer des DNS names', 'is_correct' => false],
                            ['text' => 'Compresser les packets', 'is_correct' => false],
                            ['text' => 'Créer des MAC addresses', 'is_correct' => false],
                        ],
                        'explanation' => 'Une ACL filtre le trafic selon des règles portant par exemple sur source, destination, protocol ou port.',
                    ],
                    [
                        'question' => 'Pourquoi segmenter les réseaux améliore-t-il la sécurité ?',
                        'choices' => [
                            ['text' => 'Cela réduit le périmètre de propagation et permet d’appliquer des contrôles différents', 'is_correct' => true],
                            ['text' => 'Cela supprime tous les attacks', 'is_correct' => false],
                            ['text' => 'Cela rend les passwords inutiles', 'is_correct' => false],
                            ['text' => 'Cela désactive routing', 'is_correct' => false],
                        ],
                        'explanation' => 'La segmentation limite le mouvement latéral et permet de contrôler les communications entre zones.',
                    ],
                    [
                        'question' => 'Quel protocole sécurisé remplace généralement Telnet pour l’administration distante ?',
                        'choices' => [
                            ['text' => 'SSH', 'is_correct' => true],
                            ['text' => 'FTP', 'is_correct' => false],
                            ['text' => 'HTTP', 'is_correct' => false],
                            ['text' => 'TFTP', 'is_correct' => false],
                        ],
                        'explanation' => 'SSH fournit une administration distante chiffrée contrairement à Telnet.',
                    ],
                    [
                        'question' => 'Quel principe signifie donner uniquement les permissions nécessaires ?',
                        'choices' => [
                            ['text' => 'Least privilege', 'is_correct' => true],
                            ['text' => 'Open access', 'is_correct' => false],
                            ['text' => 'Implicit trust', 'is_correct' => false],
                            ['text' => 'Broadcast first', 'is_correct' => false],
                        ],
                        'explanation' => 'Le least privilege réduit l’impact potentiel d’un compte ou service compromis.',
                    ],
                    [
                        'question' => 'Quel mécanisme protège les communications IP avec authentification et chiffrement selon le mode utilisé ?',
                        'choices' => [
                            ['text' => 'IPsec', 'is_correct' => true],
                            ['text' => 'ARP', 'is_correct' => false],
                            ['text' => 'STP', 'is_correct' => false],
                            ['text' => 'DHCP', 'is_correct' => false],
                        ],
                        'explanation' => 'IPsec fournit des mécanismes de sécurité pour les communications IP, notamment authentication et encryption.',
                    ],
                    [
                        'question' => 'Quel attack consiste à saturer un service avec un grand volume de trafic ?',
                        'choices' => [
                            ['text' => 'DDoS', 'is_correct' => true],
                            ['text' => 'ARP discovery', 'is_correct' => false],
                            ['text' => 'Subnetting', 'is_correct' => false],
                            ['text' => 'VLAN tagging', 'is_correct' => false],
                        ],
                        'explanation' => 'Un DDoS vise à épuiser les ressources d’un service ou de son infrastructure.',
                    ],
                    [
                        'question' => 'Pourquoi sécuriser les management interfaces des équipements réseau ?',
                        'choices' => [
                            ['text' => 'Elles permettent de modifier la configuration et peuvent donner un contrôle critique', 'is_correct' => true],
                            ['text' => 'Elles servent uniquement au DNS', 'is_correct' => false],
                            ['text' => 'Elles ne peuvent jamais être attaquées', 'is_correct' => false],
                            ['text' => 'Elles n’utilisent pas d’IP', 'is_correct' => false],
                        ],
                        'explanation' => 'Une management interface compromise peut permettre une modification complète du comportement réseau.',
                    ],
                    [
                        'question' => 'Quel contrôle réduit le risque de rogue DHCP server ?',
                        'choices' => [
                            ['text' => 'DHCP snooping', 'is_correct' => true],
                            ['text' => 'DNS caching', 'is_correct' => false],
                            ['text' => 'STP cost', 'is_correct' => false],
                            ['text' => 'NAT overload', 'is_correct' => false],
                        ],
                        'explanation' => 'DHCP snooping permet notamment de distinguer les ports trusted et non trusted pour contrôler les réponses DHCP.',
                    ],
                    [
                        'question' => 'Pourquoi désactiver les services réseau inutiles ?',
                        'choices' => [
                            ['text' => 'Pour réduire la attack surface', 'is_correct' => true],
                            ['text' => 'Pour augmenter le nombre de ports ouverts', 'is_correct' => false],
                            ['text' => 'Pour supprimer le monitoring', 'is_correct' => false],
                            ['text' => 'Pour accélérer tous les DNS queries', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque service exposé peut représenter une surface d’attaque supplémentaire.',
                    ],
                    [
                        'question' => 'Quel concept consiste à supposer qu’aucun accès n’est automatiquement fiable ?',
                        'choices' => [
                            ['text' => 'Zero Trust', 'is_correct' => true],
                            ['text' => 'Flat networking', 'is_correct' => false],
                            ['text' => 'Implicit trust', 'is_correct' => false],
                            ['text' => 'Open routing', 'is_correct' => false],
                        ],
                        'explanation' => 'Zero Trust impose une vérification explicite et continue plutôt qu’une confiance implicite basée uniquement sur la position réseau.',
                    ],
                ],
            ],
            [
                'title' => 'Network Monitoring & Troubleshooting',
                'description' => 'Analyse de trafic, logs, packet capture, monitoring et diagnostic méthodique.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Pourquoi utiliser une packet capture lors d’un incident complexe ?',
                        'choices' => [
                            ['text' => 'Pour observer directement les échanges et vérifier les hypothèses du diagnostic', 'is_correct' => true],
                            ['text' => 'Pour remplacer toutes les logs', 'is_correct' => false],
                            ['text' => 'Pour modifier les routes', 'is_correct' => false],
                            ['text' => 'Pour attribuer les VLANs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une packet capture permet de vérifier les protocol exchanges, flags, retransmissions et erreurs observables.',
                    ],
                    [
                        'question' => 'Que peut indiquer un grand nombre de TCP retransmissions ?',
                        'choices' => [
                            ['text' => 'Packet loss, congestion ou problèmes de chemin peuvent être présents', 'is_correct' => true],
                            ['text' => 'DNS fonctionne parfaitement', 'is_correct' => false],
                            ['text' => 'Le VLAN est toujours incorrect', 'is_correct' => false],
                            ['text' => 'Le host a forcément une mauvaise MAC', 'is_correct' => false],
                        ],
                        'explanation' => 'Les retransmissions indiquent que les données attendues n’ont pas été confirmées normalement et nécessitent une investigation.',
                    ],
                    [
                        'question' => 'Quel indicateur est particulièrement utile pour détecter une saturation de lien ?',
                        'choices' => [
                            ['text' => 'Interface utilization', 'is_correct' => true],
                            ['text' => 'Hostname length', 'is_correct' => false],
                            ['text' => 'DNS TTL uniquement', 'is_correct' => false],
                            ['text' => 'MAC address format', 'is_correct' => false],
                        ],
                        'explanation' => 'L’utilisation de l’interface permet d’identifier les liens proches de leur capacité.',
                    ],
                    [
                        'question' => 'Pourquoi corréler les logs de plusieurs équipements ?',
                        'choices' => [
                            ['text' => 'Pour reconstruire une chronologie et localiser plus précisément la cause', 'is_correct' => true],
                            ['text' => 'Pour supprimer les timestamps', 'is_correct' => false],
                            ['text' => 'Pour éviter les captures', 'is_correct' => false],
                            ['text' => 'Pour modifier les VLANs', 'is_correct' => false],
                        ],
                        'explanation' => 'La corrélation des événements permet de distinguer cause, propagation et symptômes.',
                    ],
                    [
                        'question' => 'Quel mécanisme fournit des métriques et informations de monitoring réseau standardisées ?',
                        'choices' => [
                            ['text' => 'SNMP', 'is_correct' => true],
                            ['text' => 'SMTP', 'is_correct' => false],
                            ['text' => 'FTP', 'is_correct' => false],
                            ['text' => 'ARP', 'is_correct' => false],
                        ],
                        'explanation' => 'SNMP permet de collecter des informations de management et de monitoring depuis de nombreux équipements.',
                    ],
                    [
                        'question' => 'Pourquoi la synchronisation NTP est-elle importante pour les logs ?',
                        'choices' => [
                            ['text' => 'Des timestamps cohérents facilitent la corrélation des événements', 'is_correct' => true],
                            ['text' => 'Elle augmente la bandwidth', 'is_correct' => false],
                            ['text' => 'Elle remplace Syslog', 'is_correct' => false],
                            ['text' => 'Elle crée les routes', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans clocks synchronisées, il devient difficile d’établir une chronologie fiable.',
                    ],
                    [
                        'question' => 'Quel phénomène peut expliquer une latency élevée avec peu de packet loss ?',
                        'choices' => [
                            ['text' => 'Congestion, buffering ou un chemin intrinsèquement lent', 'is_correct' => true],
                            ['text' => 'Une MAC address trop courte', 'is_correct' => false],
                            ['text' => 'Un VLAN ID incorrect dans tous les cas', 'is_correct' => false],
                            ['text' => 'Un DNS record manquant uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La latency peut augmenter sans perte importante, notamment lors de congestion et de queueing.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser une baseline réseau ?',
                        'choices' => [
                            ['text' => 'Pour comparer le comportement actuel à un état normal connu', 'is_correct' => true],
                            ['text' => 'Pour remplacer les routing protocols', 'is_correct' => false],
                            ['text' => 'Pour supprimer les metrics', 'is_correct' => false],
                            ['text' => 'Pour configurer les IP addresses', 'is_correct' => false],
                        ],
                        'explanation' => 'Une baseline fournit une référence permettant d’identifier les écarts significatifs.',
                    ],
                    [
                        'question' => 'Que permet une trace de route dans l’analyse d’un problème ?',
                        'choices' => [
                            ['text' => 'Identifier des changements de chemin ou des hops où le comportement se dégrade', 'is_correct' => true],
                            ['text' => 'Modifier automatiquement OSPF', 'is_correct' => false],
                            ['text' => 'Créer des VLANs', 'is_correct' => false],
                            ['text' => 'Changer les DNS TTLs', 'is_correct' => false],
                        ],
                        'explanation' => 'Traceroute aide à localiser approximativement où le chemin ou la reachability change.',
                    ],
                    [
                        'question' => 'Pourquoi reproduire un incident avec un scope contrôlé ?',
                        'choices' => [
                            ['text' => 'Pour isoler une variable et tester une hypothèse sans modifier inutilement l’environnement', 'is_correct' => true],
                            ['text' => 'Pour augmenter le risque', 'is_correct' => false],
                            ['text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['text' => 'Pour désactiver le monitoring', 'is_correct' => false],
                        ],
                        'explanation' => 'Un test contrôlé réduit les variables et permet de confirmer ou réfuter une hypothèse.',
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