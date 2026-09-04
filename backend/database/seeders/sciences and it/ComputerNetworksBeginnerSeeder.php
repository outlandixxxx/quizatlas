<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ComputerNetworksBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'computer-science-it')->firstOrFail();

        $subject = $major->subjects()
            ->where('slug', 'computer-networks')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Network Fundamentals',
                'description' => 'Concepts fondamentaux des réseaux informatiques, topologies, équipements et modèles de communication.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quel équipement fonctionne principalement en Layer 2 pour transmettre des frames selon les MAC addresses ?',
                        'choices' => [
                            ['text' => 'Switch', 'is_correct' => true],
                            ['text' => 'Router', 'is_correct' => false],
                            ['text' => 'DNS server', 'is_correct' => false],
                            ['text' => 'Modem', 'is_correct' => false],
                        ],
                        'explanation' => 'Un switch Layer 2 utilise principalement la MAC address table pour décider du port de sortie d’une frame.',
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’un router ?',
                        'choices' => [
                            ['text' => 'Relier plusieurs réseaux IP et sélectionner des chemins', 'is_correct' => true],
                            ['text' => 'Attribuer uniquement des MAC addresses', 'is_correct' => false],
                            ['text' => 'Convertir HTTP en HTTPS', 'is_correct' => false],
                            ['text' => 'Stocker les fichiers utilisateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Un router interconnecte des réseaux IP et utilise sa routing table pour choisir un next hop ou une interface de sortie.',
                    ],
                    [
                        'question' => 'Quelle topologie relie généralement plusieurs équipements à un point central ?',
                        'choices' => [
                            ['text' => 'Star', 'is_correct' => true],
                            ['text' => 'Bus', 'is_correct' => false],
                            ['text' => 'Ring', 'is_correct' => false],
                            ['text' => 'Point-to-point', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une topologie star, les équipements sont connectés à un équipement central, souvent un switch.',
                    ],
                    [
                        'question' => 'Quelle unité de données est associée principalement à Layer 3 dans le modèle OSI ?',
                        'choices' => [
                            ['text' => 'Packet', 'is_correct' => true],
                            ['text' => 'Frame', 'is_correct' => false],
                            ['text' => 'Bit', 'is_correct' => false],
                            ['text' => 'Segment', 'is_correct' => false],
                        ],
                        'explanation' => 'La Layer 3 manipule principalement des packets, notamment les IP packets.',
                    ],
                    [
                        'question' => 'Quel identifiant est normalement utilisé par Ethernet pour identifier une interface au niveau Layer 2 ?',
                        'choices' => [
                            ['text' => 'MAC address', 'is_correct' => true],
                            ['text' => 'IP address', 'is_correct' => false],
                            ['text' => 'Port number', 'is_correct' => false],
                            ['text' => 'Hostname', 'is_correct' => false],
                        ],
                        'explanation' => 'Ethernet utilise les MAC addresses pour l’adressage au niveau Data Link.',
                    ],
                    [
                        'question' => 'Quel composant fournit généralement la connectivité du réseau local vers d’autres réseaux ?',
                        'choices' => [
                            ['text' => 'Default gateway', 'is_correct' => true],
                            ['text' => 'Patch panel', 'is_correct' => false],
                            ['text' => 'Keyboard', 'is_correct' => false],
                            ['text' => 'DHCP lease', 'is_correct' => false],
                        ],
                        'explanation' => 'La default gateway est généralement l’adresse du router utilisé pour atteindre des réseaux externes.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un LAN ?',
                        'choices' => [
                            ['text' => 'Un réseau couvrant une zone locale limitée', 'is_correct' => true],
                            ['text' => 'Un protocole de routing inter-domaines', 'is_correct' => false],
                            ['text' => 'Un service DNS public', 'is_correct' => false],
                            ['text' => 'Un type de câble uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un LAN connecte des équipements dans une zone locale comme un bâtiment ou un campus.',
                    ],
                    [
                        'question' => 'Quel terme désigne la capacité maximale théorique d’un lien ?',
                        'choices' => [
                            ['text' => 'Bandwidth', 'is_correct' => true],
                            ['text' => 'Latency', 'is_correct' => false],
                            ['text' => 'Jitter', 'is_correct' => false],
                            ['text' => 'Packet loss', 'is_correct' => false],
                        ],
                        'explanation' => 'La bandwidth représente la capacité de transmission théorique d’un lien, généralement exprimée en bits par seconde.',
                    ],
                    [
                        'question' => 'Quelle propriété décrit le délai de transmission d’un packet ?',
                        'choices' => [
                            ['text' => 'Latency', 'is_correct' => true],
                            ['text' => 'Bandwidth', 'is_correct' => false],
                            ['text' => 'MTU', 'is_correct' => false],
                            ['text' => 'Duplex', 'is_correct' => false],
                        ],
                        'explanation' => 'La latency correspond au délai entre l’envoi et la réception d’un packet.',
                    ],
                    [
                        'question' => 'Pourquoi un network protocol est-il nécessaire ?',
                        'choices' => [
                            ['text' => 'Pour définir des règles communes de communication entre systèmes', 'is_correct' => true],
                            ['text' => 'Pour augmenter automatiquement la CPU', 'is_correct' => false],
                            ['text' => 'Pour remplacer les cables', 'is_correct' => false],
                            ['text' => 'Pour supprimer les addresses IP', 'is_correct' => false],
                        ],
                        'explanation' => 'Un protocol définit les règles, formats et comportements nécessaires pour que les systèmes communiquent correctement.',
                    ],
                ],
            ],
            [
                'title' => 'OSI & TCP/IP Basics',
                'description' => 'Principes des modèles OSI et TCP/IP et rôle des principales couches réseau.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle couche OSI est responsable du routing IP ?',
                        'choices' => [
                            ['text' => 'Network', 'is_correct' => true],
                            ['text' => 'Transport', 'is_correct' => false],
                            ['text' => 'Session', 'is_correct' => false],
                            ['text' => 'Presentation', 'is_correct' => false],
                        ],
                        'explanation' => 'La Network Layer, Layer 3, fournit notamment l’adressage logique et le routing IP.',
                    ],
                    [
                        'question' => 'Quelle couche OSI fournit les services de transport comme TCP ?',
                        'choices' => [
                            ['text' => 'Transport', 'is_correct' => true],
                            ['text' => 'Network', 'is_correct' => false],
                            ['text' => 'Data Link', 'is_correct' => false],
                            ['text' => 'Physical', 'is_correct' => false],
                        ],
                        'explanation' => 'TCP et UDP sont des protocoles de la Transport Layer.',
                    ],
                    [
                        'question' => 'Dans TCP/IP, IP appartient principalement à quelle couche ?',
                        'choices' => [
                            ['text' => 'Internet', 'is_correct' => true],
                            ['text' => 'Application', 'is_correct' => false],
                            ['text' => 'Transport', 'is_correct' => false],
                            ['text' => 'Physical', 'is_correct' => false],
                        ],
                        'explanation' => 'IP appartient à la couche Internet du modèle TCP/IP.',
                    ],
                    [
                        'question' => 'Quel protocole appartient à la couche Transport ?',
                        'choices' => [
                            ['text' => 'TCP', 'is_correct' => true],
                            ['text' => 'IP', 'is_correct' => false],
                            ['text' => 'Ethernet', 'is_correct' => false],
                            ['text' => 'ARP', 'is_correct' => false],
                        ],
                        'explanation' => 'TCP est un protocole de transport orienté connexion.',
                    ],
                    [
                        'question' => 'Quelle couche OSI est associée aux MAC addresses et aux frames Ethernet ?',
                        'choices' => [
                            ['text' => 'Data Link', 'is_correct' => true],
                            ['text' => 'Network', 'is_correct' => false],
                            ['text' => 'Transport', 'is_correct' => false],
                            ['text' => 'Application', 'is_correct' => false],
                        ],
                        'explanation' => 'La Data Link Layer gère notamment les frames et les MAC addresses dans Ethernet.',
                    ],
                    [
                        'question' => 'Quel est l’objectif principal de la Physical Layer ?',
                        'choices' => [
                            ['text' => 'Transmettre les bits sur le média physique', 'is_correct' => true],
                            ['text' => 'Choisir les routes IP', 'is_correct' => false],
                            ['text' => 'Gérer les ports TCP', 'is_correct' => false],
                            ['text' => 'Résoudre les noms DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'La Physical Layer concerne la transmission des bits via le support physique ou radio.',
                    ],
                    [
                        'question' => 'Quel protocole permet généralement à une application web d’utiliser une communication applicative ?',
                        'choices' => [
                            ['text' => 'HTTP', 'is_correct' => true],
                            ['text' => 'ARP', 'is_correct' => false],
                            ['text' => 'ICMP', 'is_correct' => false],
                            ['text' => 'Ethernet', 'is_correct' => false],
                        ],
                        'explanation' => 'HTTP est un protocole de la couche Application utilisé notamment par le Web.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser un modèle en couches ?',
                        'choices' => [
                            ['text' => 'Pour séparer les responsabilités et standardiser les interactions', 'is_correct' => true],
                            ['text' => 'Pour rendre tous les protocoles identiques', 'is_correct' => false],
                            ['text' => 'Pour supprimer les headers', 'is_correct' => false],
                            ['text' => 'Pour éviter le routing', 'is_correct' => false],
                        ],
                        'explanation' => 'La séparation en couches réduit la complexité et permet à des technologies différentes d’interopérer via des interfaces définies.',
                    ],
                    [
                        'question' => 'Quel mécanisme ajoute généralement un header à chaque couche lors de l’encapsulation ?',
                        'choices' => [
                            ['text' => 'Encapsulation', 'is_correct' => true],
                            ['text' => 'Fragmentation uniquement', 'is_correct' => false],
                            ['text' => 'Routing', 'is_correct' => false],
                            ['text' => 'Broadcasting', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors de l’encapsulation, chaque couche ajoute les informations nécessaires à son traitement.',
                    ],
                    [
                        'question' => 'Lors de la réception, comment appelle-t-on le processus inverse de l’encapsulation ?',
                        'choices' => [
                            ['text' => 'Decapsulation', 'is_correct' => true],
                            ['text' => 'Broadcasting', 'is_correct' => false],
                            ['text' => 'NAT', 'is_correct' => false],
                            ['text' => 'Flooding', 'is_correct' => false],
                        ],
                        'explanation' => 'La decapsulation consiste à retirer progressivement les headers correspondant aux couches traversées.',
                    ],
                ],
            ],
            [
                'title' => 'IPv4 Addressing',
                'description' => 'Adressage IPv4, masques, sous-réseaux et notions de base du routage.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Combien de bits contient une IPv4 address ?',
                        'choices' => [
                            ['text' => '32', 'is_correct' => true],
                            ['text' => '64', 'is_correct' => false],
                            ['text' => '48', 'is_correct' => false],
                            ['text' => '128', 'is_correct' => false],
                        ],
                        'explanation' => 'Une IPv4 address contient 32 bits, généralement représentés sous forme de quatre octets.',
                    ],
                    [
                        'question' => 'Quel masque correspond à /24 ?',
                        'choices' => [
                            ['text' => '255.255.255.0', 'is_correct' => true],
                            ['text' => '255.255.0.0', 'is_correct' => false],
                            ['text' => '255.255.255.128', 'is_correct' => false],
                            ['text' => '255.0.0.0', 'is_correct' => false],
                        ],
                        'explanation' => 'Un prefix /24 réserve 24 bits au network et laisse 8 bits pour les hosts.',
                    ],
                    [
                        'question' => 'Combien d’adresses IPv4 sont contenues dans un /26 ?',
                        'choices' => [
                            ['text' => '64', 'is_correct' => true],
                            ['text' => '32', 'is_correct' => false],
                            ['text' => '128', 'is_correct' => false],
                            ['text' => '256', 'is_correct' => false],
                        ],
                        'explanation' => 'Un /26 laisse 6 bits pour les hosts, soit 2^6 = 64 adresses.',
                    ],
                    [
                        'question' => 'Quel est le rôle du subnet mask ?',
                        'choices' => [
                            ['text' => 'Déterminer la partie network et la partie host d’une IPv4 address', 'is_correct' => true],
                            ['text' => 'Identifier uniquement le DNS server', 'is_correct' => false],
                            ['text' => 'Chiffrer les packets', 'is_correct' => false],
                            ['text' => 'Définir un TCP port', 'is_correct' => false],
                        ],
                        'explanation' => 'Le subnet mask permet de déterminer quels bits appartiennent au network prefix et lesquels aux hosts.',
                    ],
                    [
                        'question' => 'Quelle adresse est une private IPv4 address ?',
                        'choices' => [
                            ['text' => '192.168.10.20', 'is_correct' => true],
                            ['text' => '8.8.8.8', 'is_correct' => false],
                            ['text' => '1.1.1.1', 'is_correct' => false],
                            ['text' => '172.40.1.1', 'is_correct' => false],
                        ],
                        'explanation' => '192.168.0.0/16 fait partie des plages IPv4 privées définies pour les réseaux internes.',
                    ],
                    [
                        'question' => 'Quelle adresse représente le network address d’un /24 pour 192.168.5.34 ?',
                        'choices' => [
                            ['text' => '192.168.5.0', 'is_correct' => true],
                            ['text' => '192.168.5.34', 'is_correct' => false],
                            ['text' => '192.168.5.255', 'is_correct' => false],
                            ['text' => '192.168.0.0', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec un /24, les trois premiers octets constituent le network prefix ; le network address est donc .0.',
                    ],
                    [
                        'question' => 'Quelle adresse représente le broadcast d’un /24 pour 192.168.5.34 ?',
                        'choices' => [
                            ['text' => '192.168.5.255', 'is_correct' => true],
                            ['text' => '192.168.5.0', 'is_correct' => false],
                            ['text' => '192.168.5.1', 'is_correct' => false],
                            ['text' => '192.168.6.255', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un /24, la dernière adresse du subnet est le directed broadcast address.',
                    ],
                    [
                        'question' => 'Que signifie CIDR ?',
                        'choices' => [
                            ['text' => 'Classless Inter-Domain Routing', 'is_correct' => true],
                            ['text' => 'Central Internet Domain Registry', 'is_correct' => false],
                            ['text' => 'Classified IP Data Routing', 'is_correct' => false],
                            ['text' => 'Common Internal Dynamic Routing', 'is_correct' => false],
                        ],
                        'explanation' => 'CIDR permet d’exprimer un network prefix avec une longueur variable comme /20 ou /27.',
                    ],
                    [
                        'question' => 'Quel prefix fournit le plus petit subnet parmi /24, /26 et /28 ?',
                        'choices' => [
                            ['text' => '/28', 'is_correct' => true],
                            ['text' => '/26', 'is_correct' => false],
                            ['text' => '/24', 'is_correct' => false],
                            ['text' => 'Ils ont la même taille', 'is_correct' => false],
                        ],
                        'explanation' => 'Plus la longueur du prefix est grande, moins le subnet contient d’adresses.',
                    ],
                    [
                        'question' => 'Pourquoi le subnetting est-il utilisé ?',
                        'choices' => [
                            ['text' => 'Pour diviser un réseau en sous-réseaux adaptés aux besoins', 'is_correct' => true],
                            ['text' => 'Pour augmenter la longueur d’une MAC address', 'is_correct' => false],
                            ['text' => 'Pour remplacer TCP', 'is_correct' => false],
                            ['text' => 'Pour chiffrer les routes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le subnetting permet une meilleure organisation, isolation et utilisation de l’espace d’adressage.',
                    ],
                ],
            ],
            [
                'title' => 'Ethernet & Switching',
                'description' => 'Ethernet, MAC addresses, switches, frames et fonctionnement d’un LAN.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle table un switch utilise-t-il pour associer des MAC addresses à des ports ?',
                        'choices' => [
                            ['text' => 'MAC address table', 'is_correct' => true],
                            ['text' => 'Routing table', 'is_correct' => false],
                            ['text' => 'DNS cache', 'is_correct' => false],
                            ['text' => 'ARP policy', 'is_correct' => false],
                        ],
                        'explanation' => 'Le switch apprend les source MAC addresses et les associe aux ports dans sa MAC address table.',
                    ],
                    [
                        'question' => 'Que fait un switch lorsqu’il reçoit une unicast frame dont la destination MAC est inconnue ?',
                        'choices' => [
                            ['text' => 'Il flood généralement la frame dans le VLAN sauf sur le port source', 'is_correct' => true],
                            ['text' => 'Il la chiffre', 'is_correct' => false],
                            ['text' => 'Il l’envoie toujours au router', 'is_correct' => false],
                            ['text' => 'Il la transforme en IP packet', 'is_correct' => false],
                        ],
                        'explanation' => 'Une unknown unicast peut être floodée dans le VLAN afin de trouver le destinataire.',
                    ],
                    [
                        'question' => 'Quel mécanisme empêche les collisions dans un réseau Ethernet moderne full-duplex ?',
                        'choices' => [
                            ['text' => 'Le fonctionnement full-duplex sans collisions partagées', 'is_correct' => true],
                            ['text' => 'STP uniquement', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                            ['text' => 'DHCP', 'is_correct' => false],
                        ],
                        'explanation' => 'En full-duplex, chaque extrémité peut transmettre et recevoir simultanément sans domaine de collision partagé.',
                    ],
                    [
                        'question' => 'Quel champ identifie le VLAN dans un IEEE 802.1Q tagged frame ?',
                        'choices' => [
                            ['text' => 'VLAN tag', 'is_correct' => true],
                            ['text' => 'TCP header', 'is_correct' => false],
                            ['text' => 'IP options', 'is_correct' => false],
                            ['text' => 'DNS record', 'is_correct' => false],
                        ],
                        'explanation' => '802.1Q ajoute un tag contenant notamment le VLAN ID.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un access port ?',
                        'choices' => [
                            ['text' => 'Un switch port associé généralement à un seul VLAN pour les endpoints', 'is_correct' => true],
                            ['text' => 'Un port qui transporte tous les VLANs', 'is_correct' => false],
                            ['text' => 'Un router port uniquement', 'is_correct' => false],
                            ['text' => 'Un port réservé à DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'Un access port sert généralement à connecter un endpoint appartenant à un VLAN donné.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un trunk port ?',
                        'choices' => [
                            ['text' => 'Un port capable de transporter plusieurs VLANs avec un mécanisme de tagging', 'is_correct' => true],
                            ['text' => 'Un port réservé aux serveurs DNS', 'is_correct' => false],
                            ['text' => 'Un port sans MAC address', 'is_correct' => false],
                            ['text' => 'Un port uniquement Layer 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Un trunk transporte plusieurs VLANs entre équipements réseau, généralement avec IEEE 802.1Q.',
                    ],
                    [
                        'question' => 'Pourquoi segmenter un LAN avec des VLANs ?',
                        'choices' => [
                            ['text' => 'Pour séparer logiquement les domaines de broadcast', 'is_correct' => true],
                            ['text' => 'Pour augmenter la taille des MAC addresses', 'is_correct' => false],
                            ['text' => 'Pour supprimer le routing', 'is_correct' => false],
                            ['text' => 'Pour rendre TCP sans connexion', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque VLAN constitue généralement un broadcast domain logique distinct.',
                    ],
                    [
                        'question' => 'Quel équipement est généralement nécessaire pour communiquer entre deux VLANs ?',
                        'choices' => [
                            ['text' => 'Router ou Layer 3 switch', 'is_correct' => true],
                            ['text' => 'Hub uniquement', 'is_correct' => false],
                            ['text' => 'DNS resolver', 'is_correct' => false],
                            ['text' => 'Patch panel', 'is_correct' => false],
                        ],
                        'explanation' => 'La communication inter-VLAN nécessite une fonction Layer 3 pour router entre les sous-réseaux.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un broadcast domain ?',
                        'choices' => [
                            ['text' => 'Un ensemble d’équipements qui reçoivent normalement un Layer 2 broadcast', 'is_correct' => true],
                            ['text' => 'Un ensemble de ports TCP', 'is_correct' => false],
                            ['text' => 'Une zone DNS', 'is_correct' => false],
                            ['text' => 'Une routing protocol', 'is_correct' => false],
                        ],
                        'explanation' => 'Un broadcast domain délimite la portée d’un Layer 2 broadcast.',
                    ],
                    [
                        'question' => 'Pourquoi un switch apprend-il les source MAC addresses ?',
                        'choices' => [
                            ['text' => 'Pour construire sa table et transmettre ensuite les frames vers le bon port', 'is_correct' => true],
                            ['text' => 'Pour attribuer des IPv4 addresses', 'is_correct' => false],
                            ['text' => 'Pour établir des sessions TCP', 'is_correct' => false],
                            ['text' => 'Pour résoudre les DNS names', 'is_correct' => false],
                        ],
                        'explanation' => 'L’apprentissage des source MAC permet au switch de limiter les transmissions aux ports nécessaires.',
                    ],
                ],
            ],
            [
                'title' => 'TCP & UDP',
                'description' => 'Caractéristiques de TCP et UDP, ports, connexions et cas d’utilisation.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quel protocole est orienté connexion ?',
                        'choices' => [
                            ['text' => 'TCP', 'is_correct' => true],
                            ['text' => 'UDP', 'is_correct' => false],
                            ['text' => 'IP', 'is_correct' => false],
                            ['text' => 'ARP', 'is_correct' => false],
                        ],
                        'explanation' => 'TCP établit une connexion logique avant le transfert de données.',
                    ],
                    [
                        'question' => 'Quel mécanisme TCP utilise-t-il pour établir une connexion ?',
                        'choices' => [
                            ['text' => 'Three-way handshake', 'is_correct' => true],
                            ['text' => 'DNS lookup', 'is_correct' => false],
                            ['text' => 'ARP broadcast', 'is_correct' => false],
                            ['text' => 'DHCP discovery', 'is_correct' => false],
                        ],
                        'explanation' => 'TCP utilise SYN, SYN-ACK puis ACK pour établir une connexion.',
                    ],
                    [
                        'question' => 'Quel protocole n’assure pas nativement la retransmission des packets perdus ?',
                        'choices' => [
                            ['text' => 'UDP', 'is_correct' => true],
                            ['text' => 'TCP', 'is_correct' => false],
                            ['text' => 'HTTP', 'is_correct' => false],
                            ['text' => 'TLS', 'is_correct' => false],
                        ],
                        'explanation' => 'UDP est connectionless et ne fournit pas de retransmission ou de garantie de livraison par lui-même.',
                    ],
                    [
                        'question' => 'À quoi servent les port numbers ?',
                        'choices' => [
                            ['text' => 'À identifier les endpoints applicatifs sur un host', 'is_correct' => true],
                            ['text' => 'À identifier les switches', 'is_correct' => false],
                            ['text' => 'À remplacer les IP addresses', 'is_correct' => false],
                            ['text' => 'À définir les MAC addresses', 'is_correct' => false],
                        ],
                        'explanation' => 'Les port numbers permettent au système de diriger les segments vers le bon processus ou service.',
                    ],
                    [
                        'question' => 'Quel mécanisme TCP contribue au contrôle de flux ?',
                        'choices' => [
                            ['text' => 'Receive window', 'is_correct' => true],
                            ['text' => 'DNS TTL', 'is_correct' => false],
                            ['text' => 'ARP cache', 'is_correct' => false],
                            ['text' => 'VLAN tag', 'is_correct' => false],
                        ],
                        'explanation' => 'La receive window permet au receiver d’indiquer combien de données supplémentaires il peut accepter.',
                    ],
                    [
                        'question' => 'Quel mécanisme TCP contribue au contrôle de congestion ?',
                        'choices' => [
                            ['text' => 'Congestion window', 'is_correct' => true],
                            ['text' => 'MAC table', 'is_correct' => false],
                            ['text' => 'DNS record', 'is_correct' => false],
                            ['text' => 'Subnet mask', 'is_correct' => false],
                        ],
                        'explanation' => 'TCP adapte son débit avec des mécanismes de congestion control comme la congestion window.',
                    ],
                    [
                        'question' => 'Pourquoi UDP est-il souvent utilisé pour DNS ?',
                        'choices' => [
                            ['text' => 'Il réduit l’overhead pour des échanges courts et rapides', 'is_correct' => true],
                            ['text' => 'Il garantit toujours la livraison', 'is_correct' => false],
                            ['text' => 'Il fournit un handshake obligatoire', 'is_correct' => false],
                            ['text' => 'Il remplace IP', 'is_correct' => false],
                        ],
                        'explanation' => 'Les requêtes DNS classiques sont souvent courtes et peuvent être transportées efficacement avec UDP.',
                    ],
                    [
                        'question' => 'Quel protocole est adapté lorsqu’une application exige une livraison fiable et ordonnée ?',
                        'choices' => [
                            ['text' => 'TCP', 'is_correct' => true],
                            ['text' => 'UDP', 'is_correct' => false],
                            ['text' => 'ARP', 'is_correct' => false],
                            ['text' => 'ICMP', 'is_correct' => false],
                        ],
                        'explanation' => 'TCP fournit notamment acknowledgments, retransmissions et ordering.',
                    ],
                    [
                        'question' => 'Quel port est traditionnellement associé à HTTPS ?',
                        'choices' => [
                            ['text' => '443', 'is_correct' => true],
                            ['text' => '80', 'is_correct' => false],
                            ['text' => '22', 'is_correct' => false],
                            ['text' => '53', 'is_correct' => false],
                        ],
                        'explanation' => 'HTTPS utilise traditionnellement le TCP port 443, même si les technologies modernes peuvent aussi utiliser QUIC/HTTP/3 sur UDP.',
                    ],
                    [
                        'question' => 'Quel est un avantage typique de UDP ?',
                        'choices' => [
                            ['text' => 'Un overhead réduit et l’absence d’établissement de connexion au niveau transport', 'is_correct' => true],
                            ['text' => 'Une retransmission garantie', 'is_correct' => false],
                            ['text' => 'Une ordering garantie', 'is_correct' => false],
                            ['text' => 'Une congestion control intégrée identique à TCP', 'is_correct' => false],
                        ],
                        'explanation' => 'UDP offre un transport simple avec peu d’overhead, laissant davantage de responsabilités à l’application.',
                    ],
                ],
            ],
            [
                'title' => 'DNS & DHCP',
                'description' => 'Résolution de noms, attribution d’adresses et services fondamentaux d’un réseau IP.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal de DNS ?',
                        'choices' => [
                            ['text' => 'Associer des domain names à des informations comme des IP addresses', 'is_correct' => true],
                            ['text' => 'Attribuer des MAC addresses', 'is_correct' => false],
                            ['text' => 'Chiffrer TCP', 'is_correct' => false],
                            ['text' => 'Router les packets', 'is_correct' => false],
                        ],
                        'explanation' => 'DNS fournit un système distribué de résolution et de publication de noms.',
                    ],
                    [
                        'question' => 'Quel record DNS associe généralement un hostname IPv4 à une address ?',
                        'choices' => [
                            ['text' => 'A', 'is_correct' => true],
                            ['text' => 'MX', 'is_correct' => false],
                            ['text' => 'PTR', 'is_correct' => false],
                            ['text' => 'TXT', 'is_correct' => false],
                        ],
                        'explanation' => 'Un A record mappe un nom DNS vers une IPv4 address.',
                    ],
                    [
                        'question' => 'Quel record DNS est utilisé pour IPv6 ?',
                        'choices' => [
                            ['text' => 'AAAA', 'is_correct' => true],
                            ['text' => 'A', 'is_correct' => false],
                            ['text' => 'MX', 'is_correct' => false],
                            ['text' => 'NS', 'is_correct' => false],
                        ],
                        'explanation' => 'Un AAAA record associe un hostname à une IPv6 address.',
                    ],
                    [
                        'question' => 'Quel est le rôle de DHCP ?',
                        'choices' => [
                            ['text' => 'Attribuer automatiquement des paramètres réseau aux clients', 'is_correct' => true],
                            ['text' => 'Résoudre tous les domain names', 'is_correct' => false],
                            ['text' => 'Router entre autonomous systems', 'is_correct' => false],
                            ['text' => 'Chiffrer les packets', 'is_correct' => false],
                        ],
                        'explanation' => 'DHCP peut fournir notamment une IP address, un subnet mask, une default gateway et des DNS servers.',
                    ],
                    [
                        'question' => 'Quel message DHCP est généralement envoyé initialement par un client sans configuration ?',
                        'choices' => [
                            ['text' => 'DHCPDISCOVER', 'is_correct' => true],
                            ['text' => 'DHCPACK', 'is_correct' => false],
                            ['text' => 'DHCPOFFER', 'is_correct' => false],
                            ['text' => 'DHCPRELEASE', 'is_correct' => false],
                        ],
                        'explanation' => 'Le client diffuse un DHCPDISCOVER pour rechercher des DHCP servers disponibles.',
                    ],
                    [
                        'question' => 'Quel mécanisme permet à un DHCP server d’attribuer une configuration au client ?',
                        'choices' => [
                            ['text' => 'DORA', 'is_correct' => true],
                            ['text' => 'SYN-ACK-ACK', 'is_correct' => false],
                            ['text' => 'ARP-ICMP-DNS', 'is_correct' => false],
                            ['text' => 'LSA', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cycle classique est Discover, Offer, Request, Acknowledge.',
                    ],
                    [
                        'question' => 'Quel record indique les mail servers responsables d’un domain ?',
                        'choices' => [
                            ['text' => 'MX', 'is_correct' => true],
                            ['text' => 'A', 'is_correct' => false],
                            ['text' => 'AAAA', 'is_correct' => false],
                            ['text' => 'CNAME', 'is_correct' => false],
                        ],
                        'explanation' => 'Un MX record indique les serveurs responsables de la réception des emails pour un domain.',
                    ],
                    [
                        'question' => 'Pourquoi DNS utilise-t-il du caching ?',
                        'choices' => [
                            ['text' => 'Pour réduire la latence et le nombre de requêtes vers les serveurs DNS', 'is_correct' => true],
                            ['text' => 'Pour augmenter les broadcasts Ethernet', 'is_correct' => false],
                            ['text' => 'Pour remplacer DHCP', 'is_correct' => false],
                            ['text' => 'Pour supprimer les TTL', 'is_correct' => false],
                        ],
                        'explanation' => 'Le caching permet de réutiliser temporairement des réponses selon leur TTL.',
                    ],
                    [
                        'question' => 'Que représente un DNS TTL ?',
                        'choices' => [
                            ['text' => 'La durée pendant laquelle une information peut rester en cache', 'is_correct' => true],
                            ['text' => 'Le nombre de DNS servers', 'is_correct' => false],
                            ['text' => 'La taille d’une IPv4 address', 'is_correct' => false],
                            ['text' => 'Le numéro de port HTTP', 'is_correct' => false],
                        ],
                        'explanation' => 'Le TTL indique généralement combien de temps un resolver peut conserver une réponse en cache.',
                    ],
                    [
                        'question' => 'Quel composant est souvent configuré comme DNS resolver sur un client ?',
                        'choices' => [
                            ['text' => 'L’adresse d’un DNS server récursif', 'is_correct' => true],
                            ['text' => 'Une MAC address', 'is_correct' => false],
                            ['text' => 'Un VLAN ID', 'is_correct' => false],
                            ['text' => 'Un TCP sequence number', 'is_correct' => false],
                        ],
                        'explanation' => 'Le client envoie ses requêtes DNS à un resolver configuré ou fourni par le réseau.',
                    ],
                ],
            ],
            [
                'title' => 'Routing Basics',
                'description' => 'Principes du routing, gateways, tables de routage et communication entre réseaux.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une routing table ?',
                        'choices' => [
                            ['text' => 'Une structure indiquant les destinations connues et les chemins de sortie', 'is_correct' => true],
                            ['text' => 'Une table de MAC addresses', 'is_correct' => false],
                            ['text' => 'Un cache DNS', 'is_correct' => false],
                            ['text' => 'Une liste de passwords', 'is_correct' => false],
                        ],
                        'explanation' => 'La routing table contient des routes vers des prefixes et les informations nécessaires pour atteindre ces destinations.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la default route ?',
                        'choices' => [
                            ['text' => 'Une route utilisée lorsqu’aucune route plus spécifique ne correspond', 'is_correct' => true],
                            ['text' => 'Une route uniquement vers localhost', 'is_correct' => false],
                            ['text' => 'Une route DNS', 'is_correct' => false],
                            ['text' => 'Une route MAC', 'is_correct' => false],
                        ],
                        'explanation' => 'La default route sert de chemin de dernier recours.',
                    ],
                    [
                        'question' => 'Quel est généralement le next hop ?',
                        'choices' => [
                            ['text' => 'Le prochain router auquel un packet est envoyé', 'is_correct' => true],
                            ['text' => 'Le DNS server', 'is_correct' => false],
                            ['text' => 'Le client final uniquement', 'is_correct' => false],
                            ['text' => 'Le switch management port', 'is_correct' => false],
                        ],
                        'explanation' => 'Le next hop représente le prochain équipement Layer 3 sur le chemin.',
                    ],
                    [
                        'question' => 'Que signifie longest prefix match ?',
                        'choices' => [
                            ['text' => 'Choisir la route dont le prefix correspond le plus précisément à la destination', 'is_correct' => true],
                            ['text' => 'Choisir la route la plus ancienne', 'is_correct' => false],
                            ['text' => 'Choisir toujours la default route', 'is_correct' => false],
                            ['text' => 'Choisir la route avec le moins de bits', 'is_correct' => false],
                        ],
                        'explanation' => 'Le routing IP privilégie généralement le prefix le plus spécifique correspondant à la destination.',
                    ],
                    [
                        'question' => 'Quel protocole peut être utilisé pour tester la reachability IP ?',
                        'choices' => [
                            ['text' => 'ICMP', 'is_correct' => true],
                            ['text' => 'FTP', 'is_correct' => false],
                            ['text' => 'SMTP', 'is_correct' => false],
                            ['text' => 'DHCP', 'is_correct' => false],
                        ],
                        'explanation' => 'ICMP est notamment utilisé par ping pour tester la reachability et obtenir certaines informations de diagnostic.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un default gateway sur un host ?',
                        'choices' => [
                            ['text' => 'L’adresse du router utilisé pour atteindre des réseaux hors du subnet local', 'is_correct' => true],
                            ['text' => 'Le DNS record principal', 'is_correct' => false],
                            ['text' => 'Le switch port', 'is_correct' => false],
                            ['text' => 'La MAC address du serveur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le host envoie les destinations hors de son subnet à sa default gateway.',
                    ],
                    [
                        'question' => 'Pourquoi un host n’envoie-t-il généralement pas directement un packet à un remote subnet ?',
                        'choices' => [
                            ['text' => 'Il transmet le packet à son default gateway ou à un next-hop router', 'is_correct' => true],
                            ['text' => 'Parce que TCP interdit le routing', 'is_correct' => false],
                            ['text' => 'Parce que DNS doit d’abord router', 'is_correct' => false],
                            ['text' => 'Parce qu’Ethernet ne possède pas de MAC addresses', 'is_correct' => false],
                        ],
                        'explanation' => 'Un host local ne connaît généralement pas le chemin complet ; il remet le trafic distant à son gateway.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une static route ?',
                        'choices' => [
                            ['text' => 'Une route configurée explicitement par un administrator', 'is_correct' => true],
                            ['text' => 'Une route apprise uniquement par OSPF', 'is_correct' => false],
                            ['text' => 'Une DNS entry', 'is_correct' => false],
                            ['text' => 'Une MAC table entry', 'is_correct' => false],
                        ],
                        'explanation' => 'Une static route est définie manuellement plutôt qu’apprise dynamiquement.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser un dynamic routing protocol ?',
                        'choices' => [
                            ['text' => 'Pour permettre aux routers d’apprendre et d’adapter automatiquement les routes', 'is_correct' => true],
                            ['text' => 'Pour remplacer Ethernet', 'is_correct' => false],
                            ['text' => 'Pour attribuer des passwords', 'is_correct' => false],
                            ['text' => 'Pour résoudre les noms DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dynamic routing protocols permettent l’échange d’informations de reachability et l’adaptation aux changements de topologie.',
                    ],
                    [
                        'question' => 'Que se passe-t-il si aucune route ne correspond et qu’aucune default route n’existe ?',
                        'choices' => [
                            ['text' => 'Le router ne possède pas de chemin valide vers la destination', 'is_correct' => true],
                            ['text' => 'Le packet est toujours livré', 'is_correct' => false],
                            ['text' => 'DNS choisit automatiquement une route', 'is_correct' => false],
                            ['text' => 'TCP crée une nouvelle route', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans route correspondante ni default route, le router ne peut pas acheminer le packet normalement.',
                    ],
                ],
            ],
            [
                'title' => 'Network Troubleshooting',
                'description' => 'Méthodes et outils fondamentaux pour diagnostiquer les problèmes réseau.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle est une bonne première étape lors d’un incident réseau ?',
                        'choices' => [
                            ['text' => 'Définir précisément le symptôme et sa portée', 'is_correct' => true],
                            ['text' => 'Changer immédiatement toute la configuration', 'is_correct' => false],
                            ['text' => 'Redémarrer tous les switches', 'is_correct' => false],
                            ['text' => 'Supprimer les routing tables', 'is_correct' => false],
                        ],
                        'explanation' => 'Un diagnostic efficace commence par caractériser le problème, son impact et sa portée.',
                    ],
                    [
                        'question' => 'Quelle commande teste classiquement la reachability vers une destination ?',
                        'choices' => [
                            ['text' => 'ping', 'is_correct' => true],
                            ['text' => 'format', 'is_correct' => false],
                            ['text' => 'compile', 'is_correct' => false],
                            ['text' => 'chmod', 'is_correct' => false],
                        ],
                        'explanation' => 'ping utilise généralement ICMP pour vérifier la reachability et mesurer approximativement le délai.',
                    ],
                    [
                        'question' => 'Quelle commande permet souvent d’identifier les hops entre une source et une destination ?',
                        'choices' => [
                            ['text' => 'traceroute ou tracert', 'is_correct' => true],
                            ['text' => 'mkdir', 'is_correct' => false],
                            ['text' => 'grep uniquement', 'is_correct' => false],
                            ['text' => 'passwd', 'is_correct' => false],
                        ],
                        'explanation' => 'traceroute/tracert révèle les différents hops visibles sur le chemin.',
                    ],
                    [
                        'question' => 'Quel outil permet d’inspecter les packets capturés ?',
                        'choices' => [
                            ['text' => 'Wireshark', 'is_correct' => true],
                            ['text' => 'Git', 'is_correct' => false],
                            ['text' => 'Composer', 'is_correct' => false],
                            ['text' => 'Nginx', 'is_correct' => false],
                        ],
                        'explanation' => 'Wireshark permet de capturer et analyser les packets réseau avec un niveau de détail important.',
                    ],
                    [
                        'question' => 'Si un host a une IP mais ne peut pas joindre un autre subnet, quel paramètre faut-il vérifier en priorité ?',
                        'choices' => [
                            ['text' => 'Default gateway', 'is_correct' => true],
                            ['text' => 'Hostname', 'is_correct' => false],
                            ['text' => 'Keyboard layout', 'is_correct' => false],
                            ['text' => 'Browser cache', 'is_correct' => false],
                        ],
                        'explanation' => 'Une default gateway incorrecte empêche souvent l’accès aux réseaux distants.',
                    ],
                    [
                        'question' => 'Si un hostname ne se résout pas mais qu’une IP est joignable, quel service faut-il suspecter ?',
                        'choices' => [
                            ['text' => 'DNS', 'is_correct' => true],
                            ['text' => 'Ethernet duplex', 'is_correct' => false],
                            ['text' => 'STP uniquement', 'is_correct' => false],
                            ['text' => 'NTP uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Si l’accès par IP fonctionne mais pas par nom, la résolution DNS est un suspect important.',
                    ],
                    [
                        'question' => 'Pourquoi vérifier les interface counters ?',
                        'choices' => [
                            ['text' => 'Ils peuvent révéler des errors, drops ou problèmes physiques', 'is_correct' => true],
                            ['text' => 'Ils changent les DNS records', 'is_correct' => false],
                            ['text' => 'Ils remplacent les routing protocols', 'is_correct' => false],
                            ['text' => 'Ils créent automatiquement des VLANs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les counters peuvent révéler des erreurs de transmission, drops ou autres anomalies d’interface.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un packet loss ?',
                        'choices' => [
                            ['text' => 'La perte de packets avant leur arrivée à destination', 'is_correct' => true],
                            ['text' => 'Une augmentation de bandwidth', 'is_correct' => false],
                            ['text' => 'Un changement de DNS name', 'is_correct' => false],
                            ['text' => 'Une MAC address supplémentaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le packet loss signifie qu’une partie des packets transmis n’arrive pas correctement à destination.',
                    ],
                    [
                        'question' => 'Pourquoi comparer un problème avec plusieurs destinations ?',
                        'choices' => [
                            ['text' => 'Pour déterminer si le problème est local, spécifique à une destination ou plus global', 'is_correct' => true],
                            ['text' => 'Pour modifier les VLANs au hasard', 'is_correct' => false],
                            ['text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['text' => 'Pour désactiver TCP', 'is_correct' => false],
                        ],
                        'explanation' => 'Comparer plusieurs destinations aide à isoler la zone affectée.',
                    ],
                    [
                        'question' => 'Pourquoi documenter les changements effectués pendant le troubleshooting ?',
                        'choices' => [
                            ['text' => 'Pour conserver une trace, faciliter le rollback et éviter les modifications contradictoires', 'is_correct' => true],
                            ['text' => 'Pour augmenter le packet loss', 'is_correct' => false],
                            ['text' => 'Pour supprimer la monitoring', 'is_correct' => false],
                            ['text' => 'Pour remplacer les backups', 'is_correct' => false],
                        ],
                        'explanation' => 'La traçabilité des changements permet de comprendre les causes et de revenir rapidement à un état stable.',
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