<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ComputerNetworksIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'computer-networks')->firstOrFail();

        Quiz::where('subject_id', $subject->id)
            ->whereIn('title', ['Advanced IPv4 Subnetting', 'IPv6 Networking', 'VLANs & Trunking', 'STP & Layer 2 Redundancy', 'Dynamic Routing', 'TCP/IP Services', 'Network Security Fundamentals', 'Network Monitoring & Troubleshooting'])
            ->update(['is_active' => false]);

        $quizzes = [
            [
                'title' => 'Planification de sous-réseaux IPv4',
                'description' => 'Mise en pratique du sous-réseautage, de la commutation, du routage et des services réseau.',
                'difficulty' => 'Intermediate',
                'duration' => 22,
                'passing_score' => 65,
                'total_marks' => 12,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel préfixe fournit 30 utilisables IPv4 hôte adresses dans un sous-réseau classique?',
                        'explanation' => 'Un /27 contient 32 adresses, dont 30 sont normalement utilisables pour des hôtes.',
                        'choices' => [
                            [
                                'choice_text' => '/27',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '/26',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '/28',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '/25',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Combien d’adresses totales contient un /20?',
                        'explanation' => 'Un /20 laisse 12 bits pour les hôtes, soit 2^12 = 4096 adresses.',
                        'choices' => [
                            [
                                'choice_text' => '4096',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '2048',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1024',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8192',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel préfixe correspond au masque de sous-réseau 255.255.255.192?',
                        'explanation' => '255.255.255.192 correspond à 26 bits de préfixe.',
                        'choices' => [
                            [
                                'choice_text' => '/26',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '/27',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '/25',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '/24',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principe de VLSM?',
                        'explanation' => 'VLSM permet d’allouer des préfixes de tailles différentes afin d’utiliser plus efficacement l’espace IPv4.',
                        'choices' => [
                            [
                                'choice_text' => 'Utiliser des sous-réseau sizes différents selon les besoins',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Utiliser uniquement des /24',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Attribuer la même IP à tous les hôtes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les tables de routage',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel sous-réseau peut contenir un besoin de 100 utilisables hôtes?',
                        'explanation' => 'Un /25 fournit 128 adresses, soit 126 utilisables dans le cas classique, donc suffisamment pour 100 hôtes.',
                        'choices' => [
                            [
                                'choice_text' => '/25',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '/26',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '/27',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '/28',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’avantage principal de CIDR aggregation?',
                        'explanation' => 'La route agrégation de routes réduit la taille des tables de routage et le volume d’annonces.',
                        'choices' => [
                            [
                                'choice_text' => 'Réduire le nombre de routes en annonçant un préfixe plus agrégé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Augmenter le nombre de diffusions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer IPv6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Créer des adresses MAC',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel préfixe couvre 192.168.0.0 à 192.168.3.255?',
                        'explanation' => 'Un /22 couvre 1024 adresses, soit quatre /24 contigus à partir de 192.168.0.0.',
                        'choices' => [
                            [
                                'choice_text' => '/22',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '/21',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '/23',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '/24',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les sous-réseaus doivent-ils être correctement alignés pour une route summary?',
                        'explanation' => 'Une summary route valide doit correspondre à une frontière CIDR appropriée.',
                        'choices' => [
                            [
                                'choice_text' => 'Le préfixe agrégé doit représenter exactement une plage compatible avec les frontières binaires du CIDR',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que DNS l’exige',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter TCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que adresses MAC sont décimales',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le résultat d’un découpage en sous-réseaux trop fin?',
                        'explanation' => 'Augmenter la longueur du préfixe crée davantage de sous-réseaus mais réduit leur taille.',
                        'choices' => [
                            [
                                'choice_text' => 'Davantage de sous-réseaus mais moins d’adresses disponibles par sous-réseau',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Davantage d’adresses par sous-réseau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Suppression du routage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmentation automatique du bande passante',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi réserver un plan d’adressage avant le déploiement?',
                        'explanation' => 'Un adresse plan cohérent limite les overlaps et facilite l’agrégation et l’exploitation future.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour éviter les chevauchements et prévoir la croissance',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les VLAN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour rendre TCP connectionless',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour désactiver DHCP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Combien de bits contient une adresse IPv6?',
                        'explanation' => 'Une adresse IPv6 contient 128 bits.',
                        'choices' => [
                            [
                                'choice_text' => '128',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '64',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '32',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '256',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme IPv6 permet à un hôte de construire automatiquement une adresse à partir d’informations de réseau?',
                        'explanation' => 'SLAAC permet à un hôte d’autoconfigurer une adresse IPv6 à partir des routeur Advertisements.',
                        'choices' => [
                            [
                                'choice_text' => 'SLAAC',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'NAT44',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DHCPv4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ARP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Adressage et découverte en IPv6',
                'description' => 'Mise en pratique du sous-réseautage, de la commutation, du routage et des services réseau.',
                'difficulty' => 'Intermediate',
                'duration' => 22,
                'passing_score' => 65,
                'total_marks' => 13,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel protocole remplace ARP dans IPv6?',
                        'explanation' => 'IPv6 utilise Neighbor Discovery, basé sur ICMPv6, pour plusieurs fonctions autrefois assurées par ARP.',
                        'choices' => [
                            [
                                'choice_text' => 'Neighbor Discovery Protocol',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'DHCPv4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'RIP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'FTP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle notation représente correctement une adresse IPv6?',
                        'explanation' => 'IPv6 utilise des groupes hexadécimaux séparés par des deux-points et permet la compression des zéros.',
                        'choices' => [
                            [
                                'choice_text' => '2001:db8:10::1',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '192.168.1.1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2001.192.1.1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'AA:BB:CC:DD:EE:FF',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel type d’adresse IPv6 est utilisé pour la communication vers tous les nœuds d’un link?',
                        'explanation' => 'ff02::1 est le link-local all-nœuds multicast adresse.',
                        'choices' => [
                            [
                                'choice_text' => 'ff02::1',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '::1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'fe80::1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2001:db8::1',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel préfixe est utilisé pour les IPv6 adresses locales au lien?',
                        'explanation' => 'Les link-local adresses IPv6 appartiennent au préfixe fe80::/10.',
                        'choices' => [
                            [
                                'choice_text' => 'fe80::/10',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'fc00::/7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2000::/3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ff00::/8',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme IPv6 est utilisé pour découvrir les routeurs?',
                        'explanation' => 'Neighbor Discovery utilise notamment RS et RA pour permettre aux hôtes de découvrir les routeurs et paramètres du link.',
                        'choices' => [
                            [
                                'choice_text' => 'routeur Solicitation et routeur Advertisement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ARP Request',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DHCPDISCOVER uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'TCP SYN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi IPv6 utilise-t-il largement multicast?',
                        'explanation' => 'IPv6 n’utilise pas le diffusion IPv4 classique et s’appuie notamment sur multicast.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour cibler des groupes de nœuds sans utiliser le diffusion traditionnel',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour remplacer toutes les tables de routage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour chiffrer les paquets',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour créer des ports TCP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une IPv6 ULA?',
                        'explanation' => 'Les ULA utilisent le préfixe fc00::/7 et sont destinées aux communications internes.',
                        'choices' => [
                            [
                                'choice_text' => 'Une Unique Local adresse destinée à des communications privées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une adresse DNS publique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une adresse MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une port TCP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme peut être utilisé pour faire fonctionner IPv4 et IPv6 simultanément?',
                        'explanation' => 'Dual stack permet aux équipements d’exécuter IPv4 et IPv6 en parallèle.',
                        'choices' => [
                            [
                                'choice_text' => 'Dual stack',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ARP diffusion',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'VLAN liaison trunk uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Port mirroanneau',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel standard est couramment utilisé pour étiqueter les VLAN sur un Ethernet trunk?',
                        'explanation' => 'IEEE 802.1Q définit le tagging VLAN sur Ethernet.',
                        'choices' => [
                            [
                                'choice_text' => 'IEEE 802.1Q',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '802.11ax',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '802.3af',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '802.1X uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel type de port est normalement utilisé pour un PC appartenant à un seul VLAN?',
                        'explanation' => 'Un port d’accès associe généralement les trames non taggées d’un endpoint à un VLAN donné.',
                        'choices' => [
                            [
                                'choice_text' => 'port d’accès',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'port trunk',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'SPAN port',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Loopback',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un trunk est-il nécessaire entre deux commutateurs qui transportent plusieurs VLAN?',
                        'explanation' => 'Le trunk permet de multiplex­er plusieurs VLAN sur un seul lien physique.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour transporter les différents VLAN sur un même lien avec leur identification',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour remplacer les adresses IP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour chiffrer les trames',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour créer des zone DNSs',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel problème survient si le VLAN natif est incohérent entre deux extrémités?',
                        'explanation' => 'Une VLAN natif mismatch peut provoquer des problèmes de connectivité et des risques de sécurité.',
                        'choices' => [
                            [
                                'choice_text' => 'Des comportements de tagging et de acheminement inattendus peuvent apparaître',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'TCP devient UDP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DNS est supprimé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les adresses MAC deviennent IPv6',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le routage est-il nécessaire entre deux VLAN différents?',
                        'explanation' => 'Le trafic entre sous-réseaus doit passer par une fonction couche 3.',
                        'choices' => [
                            [
                                'choice_text' => 'Chaque VLAN représente généralement un sous-réseau et un domaine de diffusion distinct',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’un commutateur ne connaît jamais les adresses MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’Ethernet n’utilise pas de trames',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour remplacer DHCP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Segmentation et redondance de couche 2',
                'description' => 'Mise en pratique du sous-réseautage, de la commutation, du routage et des services réseau.',
                'difficulty' => 'Intermediate',
                'duration' => 24,
                'passing_score' => 65,
                'total_marks' => 14,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel concept permet d’associer plusieurs commutateur ports à un même VLAN?',
                        'explanation' => 'Le VLAN membership détermine le VLAN logique auquel un port appartient.',
                        'choices' => [
                            [
                                'choice_text' => 'VLAN membership',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'DNS delegation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'fenêtre TCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'BGP community',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un inter-VLAN routage?',
                        'explanation' => 'Inter-VLAN routage permet aux sous-réseaus associés à différents VLAN de communiquer via couche 3.',
                        'choices' => [
                            [
                                'choice_text' => 'Le acheminement couche 3 entre différents VLAN',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le tagging d’une trame',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le acheminement DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le commutateuanneau basé sur MAC uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel risque augmente lorsque trop de hôtes sont placés dans un même domaine de diffusion?',
                        'explanation' => 'Des domaine de diffusions trop grands peuvent augmenter le bruit et le rayon d’impact de certains problèmes.',
                        'choices' => [
                            [
                                'choice_text' => 'Le volume de diffusion et l’impact potentiel des incidents augmentent',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La capacité des adresses MAC diminue',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'IPv6 est désactivé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'TCP perd toujours ses paquets',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme peut transporter plusieurs VLAN sur un routeur-on-a-stick?',
                        'explanation' => 'Un routeur-on-a-stick utilise des subinterfaces taggées 802.1Q pour routeur entre VLAN.',
                        'choices' => [
                            [
                                'choice_text' => '802.1Q subinterfaces',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'enregistrements DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DHCP leases uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'MAC filtrage',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les VLAN IDs et leurs sous-réseaus?',
                        'explanation' => 'Une correspondance documentée VLAN/sous-réseau simplifie l’exploitation et réduit les erreurs de configuration.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour éviter les incohérences et faciliter le diagnostic et les changements',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour augmenter la latency',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour remplacer STP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les tables de routage',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel problème principal STP résout-il?',
                        'explanation' => 'STP empêche les boucles de acheminement Ethernet qui peuvent provoquer des diffusion storms.',
                        'choices' => [
                            [
                                'choice_text' => 'Les couche 2 loops',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les DNS pannes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les TCP retransmissions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les adresses IPv6',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel équipement devient root bridge dans STP?',
                        'explanation' => 'STP élit le commutateur avec le meilleur Bridge ID, généralement le plus petit selon les critères STP.',
                        'choices' => [
                            [
                                'choice_text' => 'Celui qui possède le meilleur Bridge ID',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Celui qui possède le plus d’adresses IP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Celui qui a le plus de CPU',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le premier allumé obligatoirement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les couche 2 loops sont-elles dangereuses?',
                        'explanation' => 'Une boucle couche 2 peut provoquer des storms et une instabilité importante.',
                        'choices' => [
                            [
                                'choice_text' => 'Les Ethernet trames peuvent être répétées et les diffusions peuvent provoquer une congestion massive',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elles améliorent la convergence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles réduisent toujours la latency',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles chiffrent les paquets',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel état STP permet au port de participer au acheminement normal?',
                        'explanation' => 'Un port en acheminement peut apprendre et transmettre des trames selon l’état STP.',
                        'choices' => [
                            [
                                'choice_text' => 'acheminement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Blocking uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Listening uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Disabled uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser plusieurs chemins physiques entre commutateurs?',
                        'explanation' => 'La redondance augmente la résilience, mais nécessite un contrôle des loops.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour fournir de la redondance en cas de panne d’un lien',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour supprimer STP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter les adresses MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour remplacer routage',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un BPDU?',
                        'explanation' => 'Les BPDUs permettent aux commutateurs STP de calculer et maintenir la topologie sans boucle.',
                        'choices' => [
                            [
                                'choice_text' => 'Un message utilisé par STP pour échanger des informations de topologie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un DNS record',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un TCP segment',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une adresse IPv6',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle STP désigne généralement un port offrant le meilleur chemin vers le root bridge?',
                        'explanation' => 'Chaque non-root commutateur sélectionne généralement un root port vers le root bridge.',
                        'choices' => [
                            [
                                'choice_text' => 'Root port',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'port d’accès',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DNS port',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Edge gateway',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi positionner volontairement un commutateur comme root bridge?',
                        'explanation' => 'Le choix explicite du root bridge permet de maîtriser la topologie STP.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour contrôler le chemin logique préféré et rendre la topologie prévisible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour désactiver les VLAN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour augmenter la taille des paquets',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour remplacer OSPF',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme peut protéger un edge port contre des BPDUs inattendus?',
                        'explanation' => 'BPDU Guard peut désactiver ou protéger un port edge lorsqu’un BPDU inattendu y apparaît.',
                        'choices' => [
                            [
                                'choice_text' => 'BPDU Guard',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'DNSSEC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'NAT',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DHCP snooping',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Routage dynamique',
                'description' => 'Mise en pratique du sous-réseautage, de la commutation, du routage et des services réseau.',
                'difficulty' => 'Intermediate',
                'duration' => 24,
                'passing_score' => 65,
                'total_marks' => 13,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif de la convergence STP?',
                        'explanation' => 'La convergence permet à STP d’adapter la topologie après une panne ou modification.',
                        'choices' => [
                            [
                                'choice_text' => 'Permettre au réseau de retrouver une topologie de acheminement cohérente après un changement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Changer les adresses IP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Résoudre les nom DNSs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Créer des VLAN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel type de protocole de routage utilise OSPF?',
                        'explanation' => 'OSPF est un à état de liens protocole de routage.',
                        'choices' => [
                            [
                                'choice_text' => 'à état de liens',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Distance-vector pur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Application-layer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Transport-layer',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle métrique OSPF utilise principalement pour calculer le coût d’un chemin?',
                        'explanation' => 'OSPF utilise un cost associé aux interfaces pour déterminer les meilleurs chemins.',
                        'choices' => [
                            [
                                'choice_text' => 'Cost',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Hop count uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'adresse MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Port number',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel protocole utilise classiquement le hop count comme métrique principale?',
                        'explanation' => 'RIP utilise principalement le nombre de hops, avec une limite historique de 15 hops utilisables.',
                        'choices' => [
                            [
                                'choice_text' => 'RIP',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'OSPF',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'BGP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ethernet',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi OSPF utilise-t-il des zones?',
                        'explanation' => 'Les zones OSPF permettent de hiérarchiser le domaine et de réduire certaines contraintes de scale.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour structurer le domaine de routage et limiter certaines informations de topologie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour remplacer les VLAN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour attribuer les adresses MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour chiffrer TCP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que représente une routage adjacence?',
                        'explanation' => 'Une adjacence permet aux routeurs d’échanger les informations prévues par le protocole de routage.',
                        'choices' => [
                            [
                                'choice_text' => 'Une relation de voisinage établie entre routage pairs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une connexion TCP applicative',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une relation DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un trunk VLAN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la convergence d’un protocole de routage?',
                        'explanation' => 'La convergence correspond à la stabilisation des routage decisions après une modification de topologie.',
                        'choices' => [
                            [
                                'choice_text' => 'Le processus par lequel les routeurs atteignent une vision cohérente des routes après un changement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La création d’un VLAN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La résolution DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le chiffrement d’un paquet',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dynamic protocoles de routage sont-ils utiles dans un réseau redondant?',
                        'explanation' => 'La capacité d’adaptation améliore la résilience et réduit les interventions manuelles.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils peuvent recalculer ou adapter les chemins lorsqu’un lien ou routeur devient indisponible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils suppriment les sauvegardes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils rendent Ethernet wireless',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils remplacent les adresses IP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel type de route est généralement préféré lorsqu’un préfixe est plus spécifique?',
                        'explanation' => 'Le acheminement IP sélectionne normalement le préfixe le plus spécifique avant d’autres critères.',
                        'choices' => [
                            [
                                'choice_text' => 'La route avec le correspondance au préfixe le plus long',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Toujours la route statique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Toujours la route OSPF',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Toujours la default route',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une routage metric?',
                        'explanation' => 'Une metric fournit une base de comparaison entre chemins candidats.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour comparer plusieurs chemins possibles selon les règles du protocol',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour identifier un hôtename',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour chiffrer une trame',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour créer un sous-réseau',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe avec une mauvaise redistribution entre protocoles de routage?',
                        'explanation' => 'La redistribution doit être contrôlée afin d’éviter les boucles et les annonces incohérentes.',
                        'choices' => [
                            [
                                'choice_text' => 'Des loops, routes suboptimales ou instabilités peuvent apparaître',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le DNS devient toujours plus rapide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les VLAN disparaissent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'TCP devient connectionless',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme résout une adresse IPv4 locale en adresse MAC?',
                        'explanation' => 'ARP permet à un hôte IPv4 de déterminer la adresse MAC associée à une adresse IPv4 locale.',
                        'choices' => [
                            [
                                'choice_text' => 'ARP',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DHCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'BGP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel service fournit souvent la default gateway via configuration automatique?',
                        'explanation' => 'DHCP peut fournir la default gateway, les serveur DNSs et d’autres paramètres.',
                        'choices' => [
                            [
                                'choice_text' => 'DHCP',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'SMTP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'NTP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Services TCP/IP',
                'description' => 'Mise en pratique du sous-réseautage, de la commutation, du routage et des services réseau.',
                'difficulty' => 'Intermediate',
                'duration' => 26,
                'passing_score' => 65,
                'total_marks' => 14,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel mécanisme traduit des adresse IPv4 privéees vers une public adresse?',
                        'explanation' => 'NAT permet notamment de traduire des adresses privées vers des adresses publiques.',
                        'choices' => [
                            [
                                'choice_text' => 'NAT',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'STP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'OSPF',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ARP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel type de NAT permet à plusieurs hôtes privés de partager une seule adresse IPv4 publique?',
                        'explanation' => 'PAT utilise généralement des port numbers pour distinguer plusieurs sessions partageant une même adresse IPv4 publique.',
                        'choices' => [
                            [
                                'choice_text' => 'PAT',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Static routage',
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
                        'question' => 'Quel problème ARP spoofing peut-il faciliter?',
                        'explanation' => 'ARP spoofing peut permettre à un attaquant de se faire passer pour un autre hôte sur un LAN.',
                        'choices' => [
                            [
                                'choice_text' => 'Man-in-the-middle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'zone DNS transfer uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'STP root election',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'TCP congestion control',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel protocole est utilisé pour synchroniser l’heure des systèmes?',
                        'explanation' => 'NTP synchronise les clocks des systèmes sur un réseau.',
                        'choices' => [
                            [
                                'choice_text' => 'NTP',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ARP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'FTP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi DNS recursion est-elle utile pour un client?',
                        'explanation' => 'Un recursive resolver prend en charge la recherche de la réponse pour le client.',
                        'choices' => [
                            [
                                'choice_text' => 'Un resolver peut rechercher la réponse auprès d’autres serveurs DNS',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle attribue une IP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle configure les VLAN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle chiffre Ethernet',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel service traduit généralement un domain name en IP?',
                        'explanation' => 'DNS fournit la résolution de noms.',
                        'choices' => [
                            [
                                'choice_text' => 'DNS',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'DHCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'NAT',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'STP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut provoquer un DHCP pool épuisé?',
                        'explanation' => 'Lorsque toutes les leases disponibles sont utilisées, les nouveaux clients peuvent ne pas obtenir de configuration.',
                        'choices' => [
                            [
                                'choice_text' => 'De nouveaux clients peuvent ne pas recevoir d’adresse IPv4',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les enregistrements DNS sont supprimés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les VLAN deviennent trunk',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'TCP change de port',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les DNS TTLs doivent-ils être considérés lors d’un changement d’adresse?',
                        'explanation' => 'Le caching DNS signifie que les anciennes réponses peuvent rester visibles jusqu’à expiration du TTL.',
                        'choices' => [
                            [
                                'choice_text' => 'Des resolvers peuvent conserver temporairement l’ancienne réponse en cache',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'TCP ignore toujours DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DHCP supprime les caches',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ARP contrôle les DNS TTLs',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’une ACL réseau?',
                        'explanation' => 'Une ACL filtre le trafic selon des règles portant par exemple sur source, destination, protocol ou port.',
                        'choices' => [
                            [
                                'choice_text' => 'Autoriser ou bloquer certains flux selon des critères définis',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Attribuer des nom DNSs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Compresser les paquets',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Créer des adresses MAC',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi segmenter les réseaux améliore-t-il la sécurité?',
                        'explanation' => 'La segmentation limite le mouvement latéral et permet de contrôler les communications entre zones.',
                        'choices' => [
                            [
                                'choice_text' => 'Cela réduit le périmètre de propagation et permet d’appliquer des contrôles différents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Cela supprime tous les attacks',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cela rend les passwords inutiles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cela désactive routage',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel protocole sécurisé remplace généralement Telnet pour l’administration distante?',
                        'explanation' => 'SSH fournit une administration distante chiffrée contrairement à Telnet.',
                        'choices' => [
                            [
                                'choice_text' => 'SSH',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'FTP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'HTTP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'TFTP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel principe signifie donner uniquement les permissions nécessaires?',
                        'explanation' => 'Le least privilege réduit l’impact potentiel d’un compte ou service compromis.',
                        'choices' => [
                            [
                                'choice_text' => 'Least privilege',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Open access',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Implicit trust',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'diffusion first',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme protège les communications IP avec authentification et chiffrement selon le mode utilisé?',
                        'explanation' => 'IPsec fournit des mécanismes de sécurité pour les communications IP, notamment authentication et encryption.',
                        'choices' => [
                            [
                                'choice_text' => 'IPsec',
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
                        'question' => 'Quel attack consiste à saturer un service avec un grand volume de trafic?',
                        'explanation' => 'Un DDoS vise à épuiser les ressources d’un service ou de son infrastructure.',
                        'choices' => [
                            [
                                'choice_text' => 'DDoS',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ARP discovery',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'découpage en sous-réseaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'VLAN tagging',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Sécurité et diagnostic réseau',
                'description' => 'Mise en pratique du sous-réseautage, de la commutation, du routage et des services réseau.',
                'difficulty' => 'Intermediate',
                'duration' => 26,
                'passing_score' => 65,
                'total_marks' => 14,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi sécuriser les management interfaces des équipements réseau?',
                        'explanation' => 'Une management interface compromise peut permettre une modification complète du comportement réseau.',
                        'choices' => [
                            [
                                'choice_text' => 'Elles permettent de modifier la configuration et peuvent donner un contrôle critique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elles servent uniquement au DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles ne peuvent jamais être attaquées',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles n’utilisent pas d’IP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel contrôle réduit le risque de rogue DHCP server?',
                        'explanation' => 'DHCP snooping permet notamment de distinguer les ports trusted et non trusted pour contrôler les réponses DHCP.',
                        'choices' => [
                            [
                                'choice_text' => 'DHCP snooping',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'DNS caching',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'STP cost',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'NAT overload',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi désactiver les services réseau inutiles?',
                        'explanation' => 'Chaque service exposé peut représenter une surface d’attaque supplémentaire.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour réduire la attack surface',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour augmenter le nombre de ports ouverts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer le supervision',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour accélérer tous les DNS queries',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel concept consiste à supposer qu’aucun accès n’est automatiquement fiable?',
                        'explanation' => 'Zero Trust impose une vérification explicite et continue plutôt qu’une confiance implicite basée uniquement sur la position réseau.',
                        'choices' => [
                            [
                                'choice_text' => 'Zero Trust',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Flat networking',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Implicit trust',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Open routage',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une paquet capture lors d’un incident complexe?',
                        'explanation' => 'Une paquet capture permet de vérifier les protocol exchanges, flags, retransmissions et erreurs observables.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour observer directement les échanges et vérifier les hypothèses du diagnostic',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour remplacer toutes les journaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour modifier les routes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour attribuer les VLAN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que peut indiquer un grand nombre de TCP retransmissions?',
                        'explanation' => 'Les retransmissions indiquent que les données attendues n’ont pas été confirmées normalement et nécessitent une investigation.',
                        'choices' => [
                            [
                                'choice_text' => 'perte de paquets, congestion ou problèmes de chemin peuvent être présents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'DNS fonctionne parfaitement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le VLAN est toujours incorrect',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le hôte a forcément une mauvaise MAC',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est particulièrement utile pour détecter une saturation de lien?',
                        'explanation' => 'L’utilisation de l’interface permet d’identifier les liens proches de leur capacité.',
                        'choices' => [
                            [
                                'choice_text' => 'Interface utilization',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'hôtename length',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DNS TTL uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'adresse MAC format',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi corréler les journaux de plusieurs équipements?',
                        'explanation' => 'La corrélation des événements permet de distinguer cause, propagation et symptômes.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour reconstruire une chronologie et localiser plus précisément la cause',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les timestamps',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter les captures',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour modifier les VLAN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme fournit des métriques et informations de supervision réseau standardisées?',
                        'explanation' => 'SNMP permet de collecter des informations de management et de supervision depuis de nombreux équipements.',
                        'choices' => [
                            [
                                'choice_text' => 'SNMP',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'SMTP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'FTP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ARP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la synchronisation NTP est-elle importante pour les journaux?',
                        'explanation' => 'Sans clocks synchronisées, il devient difficile d’établir une chronologie fiable.',
                        'choices' => [
                            [
                                'choice_text' => 'Des timestamps cohérents facilitent la corrélation des événements',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle augmente la bande passante',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle remplace Syslog',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle crée les routes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel phénomène peut expliquer une latency élevée avec peu de perte de paquets?',
                        'explanation' => 'La latency peut augmenter sans perte importante, notamment lors de congestion et de queueing.',
                        'choices' => [
                            [
                                'choice_text' => 'Congestion, buffeanneau ou un chemin intrinsèquement lent',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une adresse MAC trop courte',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un VLAN ID incorrect dans tous les cas',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un DNS record manquant uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une baseline réseau?',
                        'explanation' => 'Une baseline fournit une référence permettant d’identifier les écarts significatifs.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour comparer le comportement actuel à un état normal connu',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour remplacer les protocoles de routage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les metrics',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour configurer les adresses IP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que permet une trace de route dans l’analyse d’un problème?',
                        'explanation' => 'Traceroute aide à localiser approximativement où le chemin ou la reachability change.',
                        'choices' => [
                            [
                                'choice_text' => 'Identifier des changements de chemin ou des hops où le comportement se dégrade',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Modifier automatiquement OSPF',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Créer des VLAN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Changer les DNS TTLs',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi reproduire un incident avec un scope contrôlé?',
                        'explanation' => 'Un test contrôlé réduit les variables et permet de confirmer ou réfuter une hypothèse.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour isoler une variable et tester une hypothèse sans modifier inutilement l’environnement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour augmenter le risque',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les journaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour désactiver le supervision',
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
