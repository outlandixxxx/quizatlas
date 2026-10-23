<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ComputerNetworksBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'computer-networks')->firstOrFail();

        Quiz::where('subject_id', $subject->id)
            ->whereIn('title', ['Network Fundamentals', 'OSI & TCP/IP Basics', 'IPv4 Addressing', 'Ethernet & Switching', 'TCP & UDP', 'DNS & DHCP', 'Routing Basics', 'Network Troubleshooting'])
            ->update(['is_active' => false]);

        $quizzes = [
            [
                'title' => 'Repères essentiels en réseau',
                'description' => 'Questions de base sur les équipements, l’adressage, les protocoles et le diagnostic d’un réseau local.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 60,
                'total_marks' => 12,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel équipement fonctionne principalement en couche 2 pour transmettre des trames selon les adresses MAC?',
                        'explanation' => 'Un commutateur couche 2 utilise principalement la table des adresses MAC pour décider du port de sortie d’une trame.',
                        'choices' => [
                            [
                                'choice_text' => 'commutateur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'routeur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'serveur DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Modem',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’un routeur?',
                        'explanation' => 'Un routeur interconnecte des réseaux IP et utilise sa table de routage pour choisir un next hop ou une interface de sortie.',
                        'choices' => [
                            [
                                'choice_text' => 'Relier plusieurs réseaux IP et sélectionner des chemins',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Attribuer uniquement des adresses MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Convertir HTTP en HTTPS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Stocker les fichiers utilisateurs',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle topologie relie généralement plusieurs équipements à un point central?',
                        'explanation' => 'Dans une topologie étoile, les équipements sont connectés à un équipement central, souvent un commutateur.',
                        'choices' => [
                            [
                                'choice_text' => 'étoile',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'bus',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'anneau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'point à point',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle unité de données est associée principalement à couche 3 dans le modèle OSI?',
                        'explanation' => 'La couche 3 manipule principalement des paquets, notamment les paquets IP.',
                        'choices' => [
                            [
                                'choice_text' => 'paquet',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'trame',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Bit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Segment',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel identifiant est normalement utilisé par Ethernet pour identifier une interface au niveau couche 2?',
                        'explanation' => 'Ethernet utilise les adresses MAC pour l’adressage au niveau Data Link.',
                        'choices' => [
                            [
                                'choice_text' => 'adresse MAC',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'adresse IP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Port number',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'hôtename',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel composant fournit généralement la connectivité du réseau local vers d’autres réseaux?',
                        'explanation' => 'La default gateway est généralement l’adresse du routeur utilisé pour atteindre des réseaux externes.',
                        'choices' => [
                            [
                                'choice_text' => 'Default gateway',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Patch panel',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Keyboard',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DHCP lease',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un LAN?',
                        'explanation' => 'Un LAN connecte des équipements dans une zone locale comme un bâtiment ou un campus.',
                        'choices' => [
                            [
                                'choice_text' => 'Un réseau couvrant une zone locale limitée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un protocole de routage inter-domaines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un service DNS public',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un type de câble uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel terme désigne la capacité maximale théorique d’un lien?',
                        'explanation' => 'La bande passante représente la capacité de transmission théorique d’un lien, généralement exprimée en bits par seconde.',
                        'choices' => [
                            [
                                'choice_text' => 'bande passante',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Latency',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Jitter',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'perte de paquets',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle propriété décrit le délai de transmission d’un paquet?',
                        'explanation' => 'La latency correspond au délai entre l’envoi et la réception d’un paquet.',
                        'choices' => [
                            [
                                'choice_text' => 'Latency',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'bande passante',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'MTU',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Duplex',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un network protocol est-il nécessaire?',
                        'explanation' => 'Un protocol définit les règles, formats et comportements nécessaires pour que les systèmes communiquent correctement.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour définir des règles communes de communication entre systèmes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour augmenter automatiquement la CPU',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour remplacer les cables',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les adresses IP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle couche OSI est responsable du routage IP?',
                        'explanation' => 'La couche réseau, couche 3, fournit notamment l’adressage logique et le routage IP.',
                        'choices' => [
                            [
                                'choice_text' => 'Network',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Transport',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Session',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Presentation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle couche OSI fournit les services de transport comme TCP?',
                        'explanation' => 'TCP et UDP sont des protocoles de la couche transport.',
                        'choices' => [
                            [
                                'choice_text' => 'Transport',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Network',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Data Link',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Physical',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Modèles et transmission des données',
                'description' => 'Questions de base sur les équipements, l’adressage, les protocoles et le diagnostic d’un réseau local.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 60,
                'total_marks' => 15,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Dans TCP/IP, IP appartient principalement à quelle couche?',
                        'explanation' => 'IP appartient à la couche Internet du modèle TCP/IP.',
                        'choices' => [
                            [
                                'choice_text' => 'Internet',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Application',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Transport',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Physical',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel protocole appartient à la couche Transport?',
                        'explanation' => 'TCP est un protocole de transport orienté connexion.',
                        'choices' => [
                            [
                                'choice_text' => 'TCP',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'IP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ethernet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ARP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle couche OSI est associée aux adresses MAC et aux trames Ethernet?',
                        'explanation' => 'La couche liaison de données gère notamment les trames et les adresses MAC dans Ethernet.',
                        'choices' => [
                            [
                                'choice_text' => 'Data Link',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Network',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Transport',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Application',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal de la couche physique?',
                        'explanation' => 'La couche physique concerne la transmission des bits via le support physique ou radio.',
                        'choices' => [
                            [
                                'choice_text' => 'Transmettre les bits sur le média physique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Choisir les routes IP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Gérer les ports TCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Résoudre les noms DNS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel protocole permet généralement à une application Web d’utiliser une communication applicative?',
                        'explanation' => 'HTTP est un protocole de la couche Application utilisé notamment par le Web.',
                        'choices' => [
                            [
                                'choice_text' => 'HTTP',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ARP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ICMP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ethernet',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser un modèle en couches?',
                        'explanation' => 'La séparation en couches réduit la complexité et permet à des technologies différentes d’interopérer via des interfaces définies.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour séparer les responsabilités et standardiser les interactions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour rendre tous les protocoles identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les headers',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter le routage',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme ajoute généralement un header à chaque couche lors de l’encapsulation?',
                        'explanation' => 'Lors de l’encapsulation, chaque couche ajoute les informations nécessaires à son traitement.',
                        'choices' => [
                            [
                                'choice_text' => 'Encapsulation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Fragmentation uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'routage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'diffusioning',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Lors de la réception, comment appelle-t-on le processus inverse de l’encapsulation?',
                        'explanation' => 'La decapsulation consiste à retirer progressivement les headers correspondant aux couches traversées.',
                        'choices' => [
                            [
                                'choice_text' => 'Decapsulation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'diffusioning',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'NAT',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'diffusion',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Combien de bits contient une adresse IPv4?',
                        'explanation' => 'Une adresse IPv4 contient 32 bits, généralement représentés sous forme de quatre octets.',
                        'choices' => [
                            [
                                'choice_text' => '32',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '64',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '48',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '128',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel masque correspond à /24?',
                        'explanation' => 'Un préfixe /24 réserve 24 bits au network et laisse 8 bits pour les hôtes.',
                        'choices' => [
                            [
                                'choice_text' => '255.255.255.0',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '255.255.0.0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '255.255.255.128',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '255.0.0.0',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Combien d’adresses IPv4 sont contenues dans un /26?',
                        'explanation' => 'Un /26 laisse 6 bits pour les hôtes, soit 2^6 = 64 adresses.',
                        'choices' => [
                            [
                                'choice_text' => '64',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '32',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '128',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '256',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle du masque de sous-réseau?',
                        'explanation' => 'Le masque de sous-réseau permet de déterminer quels bits appartiennent au network préfixe et lesquels aux hôtes.',
                        'choices' => [
                            [
                                'choice_text' => 'Déterminer la partie network et la partie hôte d’une adresse IPv4',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Identifier uniquement le serveur DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Chiffrer les paquets',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Définir un port TCP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle adresse est une adresse IPv4 privée?',
                        'explanation' => '192.168.0.0/16 fait partie des plages IPv4 privées définies pour les réseaux internes.',
                        'choices' => [
                            [
                                'choice_text' => '192.168.10.20',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '8.8.8.8',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1.1.1.1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '172.40.1.1',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle adresse représente le network adresse d’un /24 pour 192.168.5.34?',
                        'explanation' => 'Avec un /24, les trois premiers octets constituent le network préfixe; le network adresse est donc.0.',
                        'choices' => [
                            [
                                'choice_text' => '192.168.5.0',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '192.168.5.34',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '192.168.5.255',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '192.168.0.0',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle adresse représente le diffusion d’un /24 pour 192.168.5.34?',
                        'explanation' => 'Dans un /24, la dernière adresse du sous-réseau est le directed adresse de diffusion.',
                        'choices' => [
                            [
                                'choice_text' => '192.168.5.255',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '192.168.5.0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '192.168.5.1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '192.168.6.255',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Adressage et réseaux locaux',
                'description' => 'Questions de base sur les équipements, l’adressage, les protocoles et le diagnostic d’un réseau local.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 60,
                'total_marks' => 17,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Que signifie CIDR?',
                        'explanation' => 'CIDR permet d’exprimer un network préfixe avec une longueur variable comme /20 ou /27.',
                        'choices' => [
                            [
                                'choice_text' => 'Classless Inter-Domain routage',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Central Internet Domain Registry',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Classified IP Data routage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Common Internal Dynamic routage',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel préfixe fournit le plus petit sous-réseau parmi /24, /26 et /28?',
                        'explanation' => 'Plus la longueur du préfixe est grande, moins le sous-réseau contient d’adresses.',
                        'choices' => [
                            [
                                'choice_text' => '/28',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '/26',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '/24',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils ont la même taille',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le découpage en sous-réseaux est-il utilisé?',
                        'explanation' => 'Le découpage en sous-réseaux permet une meilleure organisation, isolation et utilisation de l’espace d’adressage.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour diviser un réseau en sous-réseaux adaptés aux besoins',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour augmenter la longueur d’une adresse MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour remplacer TCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour chiffrer les routes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle table un commutateur utilise-t-il pour associer des adresses MAC à des ports?',
                        'explanation' => 'Le commutateur apprend les adresses MAC sources et les associe aux ports dans sa table des adresses MAC.',
                        'choices' => [
                            [
                                'choice_text' => 'table des adresses MAC',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'table de routage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DNS cache',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ARP politique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que fait un commutateur lorsqu’il reçoit une unicast trame dont la destination MAC est inconnue?',
                        'explanation' => 'Une unknown unicast peut être floodée dans le VLAN afin de trouver le destinataire.',
                        'choices' => [
                            [
                                'choice_text' => 'Il flood généralement la trame dans le VLAN sauf sur le port source',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il la chiffre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il l’envoie toujours au routeur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il la transforme en IP paquet',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme empêche les collisions dans un réseau Ethernet moderne duplex intégral?',
                        'explanation' => 'En duplex intégral, chaque extrémité peut transmettre et recevoir simultanément sans domaine de collision partagé.',
                        'choices' => [
                            [
                                'choice_text' => 'Le fonctionnement duplex intégral sans collisions partagées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'STP uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DHCP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel champ identifie le VLAN dans un IEEE 802.1Q trame étiquetée?',
                        'explanation' => '802.1Q ajoute un tag contenant notamment le VLAN ID.',
                        'choices' => [
                            [
                                'choice_text' => 'VLAN tag',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'TCP header',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'IP options',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DNS record',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un port d’accès?',
                        'explanation' => 'Un port d’accès sert généralement à connecter un endpoint appartenant à un VLAN donné.',
                        'choices' => [
                            [
                                'choice_text' => 'Un commutateur port associé généralement à un seul VLAN pour les endpoints',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un port qui transporte tous les VLAN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un routeur port uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un port réservé à DNS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un port trunk?',
                        'explanation' => 'Un trunk transporte plusieurs VLAN entre équipements réseau, généralement avec IEEE 802.1Q.',
                        'choices' => [
                            [
                                'choice_text' => 'Un port capable de transporter plusieurs VLAN avec un mécanisme de tagging',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un port réservé aux serveurs DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un port sans adresse MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un port uniquement Layer 1',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi segmenter un LAN avec des VLAN?',
                        'explanation' => 'Chaque VLAN constitue généralement un domaine de diffusion logique distinct.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour séparer logiquement les domaines de diffusion',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour augmenter la taille des adresses MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer le routage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour rendre TCP sans connexion',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel équipement est généralement nécessaire pour communiquer entre deux VLAN?',
                        'explanation' => 'La communication inter-VLAN nécessite une fonction couche 3 pour routeur entre les sous-réseaux.',
                        'choices' => [
                            [
                                'choice_text' => 'routeur ou couche 3 commutateur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Hub uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'résolveur DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Patch panel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un domaine de diffusion?',
                        'explanation' => 'Un domaine de diffusion délimite la portée d’un couche 2 diffusion.',
                        'choices' => [
                            [
                                'choice_text' => 'Un ensemble d’équipements qui reçoivent normalement un couche 2 diffusion',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un ensemble de ports TCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une zone DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une protocole de routage',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un commutateur apprend-il les adresses MAC sources?',
                        'explanation' => 'L’apprentissage des MAC source permet au commutateur de limiter les transmissions aux ports nécessaires.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour construire sa table et transmettre ensuite les trames vers le bon port',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour attribuer des adresses IPv4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour établir des sessions TCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour résoudre les nom DNSs',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel protocole est orienté connexion?',
                        'explanation' => 'TCP établit une connexion logique avant le transfert de données.',
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
                                'choice_text' => 'IP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ARP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme TCP utilise-t-il pour établir une connexion?',
                        'explanation' => 'TCP utilise SYN, SYN-ACK puis ACK pour établir une connexion.',
                        'choices' => [
                            [
                                'choice_text' => 'Three-way handshake',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'DNS lookup',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ARP diffusion',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DHCP discovery',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel protocole n’assure pas nativement la retransmission des paquets perdus?',
                        'explanation' => 'UDP est connectionless et ne fournit pas de retransmission ou de garantie de livraison par lui-même.',
                        'choices' => [
                            [
                                'choice_text' => 'UDP',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'TCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'HTTP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'TLS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'À quoi servent les port numbers?',
                        'explanation' => 'Les port numbers permettent au système de diriger les segments vers le bon processus ou service.',
                        'choices' => [
                            [
                                'choice_text' => 'À identifier les endpoints applicatifs sur un hôte',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'À identifier les commutateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À remplacer les adresses IP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À définir les adresses MAC',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Protocoles et services courants',
                'description' => 'Questions de base sur les équipements, l’adressage, les protocoles et le diagnostic d’un réseau local.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 60,
                'total_marks' => 18,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel mécanisme TCP contribue au contrôle de flux?',
                        'explanation' => 'La receive window permet au receiver d’indiquer combien de données supplémentaires il peut accepter.',
                        'choices' => [
                            [
                                'choice_text' => 'Receive window',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'DNS TTL',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'cache ARP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'VLAN tag',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme TCP contribue au contrôle de congestion?',
                        'explanation' => 'TCP adapte son débit avec des mécanismes de congestion control comme la congestion window.',
                        'choices' => [
                            [
                                'choice_text' => 'Congestion window',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'table MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DNS record',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'masque de sous-réseau',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi UDP est-il souvent utilisé pour DNS?',
                        'explanation' => 'Les requêtes DNS classiques sont souvent courtes et peuvent être transportées efficacement avec UDP.',
                        'choices' => [
                            [
                                'choice_text' => 'Il réduit l’overhead pour des échanges courts et rapides',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il garantit toujours la livraison',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il fournit un handshake obligatoire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il remplace IP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel protocole est adapté lorsqu’une application exige une livraison fiable et ordonnée?',
                        'explanation' => 'TCP fournit notamment acknowledgments, retransmissions et ordeanneau.',
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
                                'choice_text' => 'ARP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ICMP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel port est traditionnellement associé à HTTPS?',
                        'explanation' => 'HTTPS utilise traditionnellement le port TCP 443, même si les technologies modernes peuvent aussi utiliser QUIC/HTTP/3 sur UDP.',
                        'choices' => [
                            [
                                'choice_text' => '443',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '80',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '22',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '53',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage typique de UDP?',
                        'explanation' => 'UDP offre un transport simple avec peu d’overhead, laissant davantage de responsabilités à l’application.',
                        'choices' => [
                            [
                                'choice_text' => 'Un overhead réduit et l’absence d’établissement de connexion au niveau transport',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une retransmission garantie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une ordeanneau garantie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une congestion control intégrée identique à TCP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de DNS?',
                        'explanation' => 'DNS fournit un système distribué de résolution et de publication de noms.',
                        'choices' => [
                            [
                                'choice_text' => 'Associer des domain names à des informations comme des adresses IP',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Attribuer des adresses MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Chiffrer TCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'routeur les paquets',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel record DNS associe généralement un hôtename IPv4 à une adresse?',
                        'explanation' => 'Un A record mappe un nom DNS vers une adresse IPv4.',
                        'choices' => [
                            [
                                'choice_text' => 'A',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'MX',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'PTR',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'TXT',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel record DNS est utilisé pour IPv6?',
                        'explanation' => 'Un AAAA record associe un hôtename à une adresse IPv6.',
                        'choices' => [
                            [
                                'choice_text' => 'AAAA',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'A',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'MX',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'NS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle de DHCP?',
                        'explanation' => 'DHCP peut fournir notamment une adresse IP, un masque de sous-réseau, une default gateway et des serveur DNSs.',
                        'choices' => [
                            [
                                'choice_text' => 'Attribuer automatiquement des paramètres réseau aux clients',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Résoudre tous les domain names',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'routeur entre systèmes autonomes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Chiffrer les paquets',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel message DHCP est généralement envoyé initialement par un client sans configuration?',
                        'explanation' => 'Le client diffuse un DHCPDISCOVER pour rechercher des DHCP servers disponibles.',
                        'choices' => [
                            [
                                'choice_text' => 'DHCPDISCOVER',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'DHCPACK',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DHCPOFFER',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DHCPRELEASE',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme permet à un DHCP server d’attribuer une configuration au client?',
                        'explanation' => 'Le cycle classique est Discover, Offer, Request, Acknowledge.',
                        'choices' => [
                            [
                                'choice_text' => 'DORA',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'SYN-ACK-ACK',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ARP-ICMP-DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'LSA',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel record indique les mail servers responsables d’un domain?',
                        'explanation' => 'Un MX record indique les serveurs responsables de la réception des emails pour un domain.',
                        'choices' => [
                            [
                                'choice_text' => 'MX',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'A',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'AAAA',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'CNAME',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi DNS utilise-t-il du caching?',
                        'explanation' => 'Le caching permet de réutiliser temporairement des réponses selon leur TTL.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour réduire la latence et le nombre de requêtes vers les serveurs DNS',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour augmenter les diffusions Ethernet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour remplacer DHCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les TTL',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que représente un DNS TTL?',
                        'explanation' => 'Le TTL indique généralement combien de temps un resolver peut conserver une réponse en cache.',
                        'choices' => [
                            [
                                'choice_text' => 'La durée pendant laquelle une information peut rester en cache',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le nombre de serveur DNSs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La taille d’une adresse IPv4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le numéro de port HTTP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel composant est souvent configuré comme résolveur DNS sur un client?',
                        'explanation' => 'Le client envoie ses requêtes DNS à un resolver configuré ou fourni par le réseau.',
                        'choices' => [
                            [
                                'choice_text' => 'L’adresse d’un serveur DNS récursif',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une adresse MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un VLAN ID',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un TCP sequence number',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une table de routage?',
                        'explanation' => 'La table de routage contient des routes vers des préfixes et les informations nécessaires pour atteindre ces destinations.',
                        'choices' => [
                            [
                                'choice_text' => 'Une structure indiquant les destinations connues et les chemins de sortie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une table de adresses MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un cache DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une liste de passwords',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la default route?',
                        'explanation' => 'La default route sert de chemin de dernier recours.',
                        'choices' => [
                            [
                                'choice_text' => 'Une route utilisée lorsqu’aucune route plus spécifique ne correspond',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une route uniquement vers localhôte',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une route DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une route MAC',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Routage et diagnostic de base',
                'description' => 'Questions de base sur les équipements, l’adressage, les protocoles et le diagnostic d’un réseau local.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 60,
                'total_marks' => 18,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est généralement le next hop?',
                        'explanation' => 'Le next hop représente le prochain équipement couche 3 sur le chemin.',
                        'choices' => [
                            [
                                'choice_text' => 'Le prochain routeur auquel un paquet est envoyé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le serveur DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le client final uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le commutateur management port',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie correspondance au préfixe le plus long?',
                        'explanation' => 'Le routage IP privilégie généralement le préfixe le plus spécifique correspondant à la destination.',
                        'choices' => [
                            [
                                'choice_text' => 'Choisir la route dont le préfixe correspond le plus précisément à la destination',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Choisir la route la plus ancienne',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Choisir toujours la default route',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Choisir la route avec le moins de bits',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel protocole peut être utilisé pour tester la reachability IP?',
                        'explanation' => 'ICMP est notamment utilisé par ping pour tester la reachability et obtenir certaines informations de diagnostic.',
                        'choices' => [
                            [
                                'choice_text' => 'ICMP',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'FTP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'SMTP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DHCP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un default gateway sur un hôte?',
                        'explanation' => 'Le hôte envoie les destinations hors de son sous-réseau à sa default gateway.',
                        'choices' => [
                            [
                                'choice_text' => 'L’adresse du routeur utilisé pour atteindre des réseaux hors du sous-réseau local',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le DNS record principal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le commutateur port',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La adresse MAC du serveur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un hôte n’envoie-t-il généralement pas directement un paquet à un remote sous-réseau?',
                        'explanation' => 'Un hôte local ne connaît généralement pas le chemin complet; il remet le trafic distant à son gateway.',
                        'choices' => [
                            [
                                'choice_text' => 'Il transmet le paquet à son default gateway ou à un next-hop routeur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que TCP interdit le routage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que DNS doit d’abord routeur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’Ethernet ne possède pas de adresses MAC',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une static route?',
                        'explanation' => 'Une static route est définie manuellement plutôt qu’apprise dynamiquement.',
                        'choices' => [
                            [
                                'choice_text' => 'Une route configurée explicitement par un administrator',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une route apprise uniquement par OSPF',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une DNS entry',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une table MAC entry',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser un dynamic protocole de routage?',
                        'explanation' => 'Les dynamic protocoles de routage permettent l’échange d’informations de reachability et l’adaptation aux changements de topologie.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour permettre aux routeurs d’apprendre et d’adapter automatiquement les routes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour remplacer Ethernet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour attribuer des passwords',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour résoudre les noms DNS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il si aucune route ne correspond et qu’aucune default route n’existe?',
                        'explanation' => 'Sans route correspondante ni default route, le routeur ne peut pas acheminer le paquet normalement.',
                        'choices' => [
                            [
                                'choice_text' => 'Le routeur ne possède pas de chemin valide vers la destination',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le paquet est toujours livré',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DNS choisit automatiquement une route',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'TCP crée une nouvelle route',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une bonne première étape lors d’un incident réseau?',
                        'explanation' => 'Un diagnostic efficace commence par caractériser le problème, son impact et sa portée.',
                        'choices' => [
                            [
                                'choice_text' => 'Définir précisément le symptôme et sa portée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Changer immédiatement toute la configuration',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Redémarrer tous les commutateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les tables de routage',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande teste classiquement la reachability vers une destination?',
                        'explanation' => 'ping utilise généralement ICMP pour vérifier la reachability et mesurer approximativement le délai.',
                        'choices' => [
                            [
                                'choice_text' => 'ping',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'format',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'compile',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'chmod',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande permet souvent d’identifier les hops entre une source et une destination?',
                        'explanation' => 'traceroute/tracert révèle les différents hops visibles sur le chemin.',
                        'choices' => [
                            [
                                'choice_text' => 'traceroute ou tracert',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'mkdir',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'grep uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'passwd',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel outil permet d’inspecter les paquets capturés?',
                        'explanation' => 'Wireshark permet de capturer et analyser les paquets réseau avec un niveau de détail important.',
                        'choices' => [
                            [
                                'choice_text' => 'Wireshark',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Git',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Composer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Nginx',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si un hôte a une IP mais ne peut pas joindre un autre sous-réseau, quel paramètre faut-il vérifier en priorité?',
                        'explanation' => 'Une default gateway incorrecte empêche souvent l’accès aux réseaux distants.',
                        'choices' => [
                            [
                                'choice_text' => 'Default gateway',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'hôtename',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Keyboard layout',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Browser cache',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si un hôtename ne se résout pas mais qu’une IP est joignable, quel service faut-il suspecter?',
                        'explanation' => 'Si l’accès par IP fonctionne mais pas par nom, la résolution DNS est un suspect important.',
                        'choices' => [
                            [
                                'choice_text' => 'DNS',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ethernet duplex',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'STP uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'NTP uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier les interface counters?',
                        'explanation' => 'Les counters peuvent révéler des erreurs de transmission, pertes ou autres anomalies d’interface.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils peuvent révéler des errors, pertes ou problèmes physiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils changent les enregistrements DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils remplacent les protocoles de routage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils créent automatiquement des VLAN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un perte de paquets?',
                        'explanation' => 'Le perte de paquets signifie qu’une partie des paquets transmis n’arrive pas correctement à destination.',
                        'choices' => [
                            [
                                'choice_text' => 'La perte de paquets avant leur arrivée à destination',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une augmentation de bande passante',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un changement de nom DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une adresse MAC supplémentaire',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer un problème avec plusieurs destinations?',
                        'explanation' => 'Comparer plusieurs destinations aide à isoler la zone affectée.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour déterminer si le problème est local, spécifique à une destination ou plus global',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour modifier les VLAN au hasard',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les journaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour désactiver TCP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les changements effectués pendant le diagnostic?',
                        'explanation' => 'La traçabilité des changements permet de comprendre les causes et de revenir rapidement à un état stable.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour conserver une trace, faciliter le rollback et éviter les modifications contradictoires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour augmenter le perte de paquets',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer la supervision',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour remplacer les sauvegardes',
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
