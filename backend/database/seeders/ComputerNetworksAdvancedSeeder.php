<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use Illuminate\Database\Seeder;

class ComputerNetworksAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'computer-science-it')->firstOrFail();

        $subject = $major->subjects()
            ->where('slug', 'computer-networks')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Network Architecture & Design',
                'slug' => 'network-architecture-and-design-advanced',
                'description' => 'Quiz avancé de Computer Networks.',
                'level' => 'advanced',
                'questions' => [
                    [
                        'question' => 'Dans une architecture campus hiérarchique, quel rôle est principalement associé à la couche Distribution ?',
                        'explanation' => "La couche Distribution agrège les switches Access et constitue généralement le point d'application des politiques de routing, filtering et redundancy.",
                        'choices' => [
                            ['text' => 'Fournir directement la connectivité aux terminaux utilisateurs', 'is_correct' => false],
                            ['text' => 'Appliquer des politiques et agréger les flux provenant de la couche Access', 'is_correct' => true],
                            ['text' => 'Remplacer tous les protocoles de routing par du switching L2', 'is_correct' => false],
                            ['text' => 'Fournir exclusivement la connexion Internet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel principe améliore le plus la résilience d'une architecture réseau critique ?",
                        'explanation' => "La redondance des chemins et des équipements réduit l'impact d'une panne unique et permet un failover contrôlé.",
                        'choices' => [
                            ['text' => 'Supprimer toutes les routes alternatives', 'is_correct' => false],
                            ['text' => 'Introduire des single points of failure', 'is_correct' => false],
                            ['text' => 'Utiliser des chemins et équipements redondants avec des mécanismes de failover', 'is_correct' => true],
                            ['text' => 'Centraliser tous les services sur un seul switch', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un design Clos est-il adapté aux Data Centers modernes ?',
                        'explanation' => "Une architecture Clos leaf-spine fournit plusieurs chemins de coût égal entre les endpoints, ce qui facilite l'utilisation d'ECMP et améliore la scalabilité.",
                        'choices' => [
                            ['text' => 'Il impose uniquement du Layer 2', 'is_correct' => false],
                            ['text' => 'Il offre une architecture leaf-spine avec plusieurs chemins ECMP', 'is_correct' => true],
                            ['text' => 'Il élimine le besoin de routing', 'is_correct' => false],
                            ['text' => "Il interdit l'utilisation de VLAN", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une architecture leaf-spine, quel équipement fournit généralement la connectivité aux serveurs ?',
                        'explanation' => 'Les leaf switches connectent généralement les serveurs et autres endpoints, tandis que les spine switches assurent le transit entre leafs.',
                        'choices' => [
                            ['text' => 'Spine', 'is_correct' => false],
                            ['text' => 'Leaf', 'is_correct' => true],
                            ['text' => 'Core Internet uniquement', 'is_correct' => false],
                            ['text' => 'Route reflector uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif principal justifie la segmentation réseau par VLAN ?',
                        'explanation' => "Les VLAN permettent de segmenter logiquement le réseau, notamment pour réduire les domaines de broadcast et améliorer l'isolation.",
                        'choices' => [
                            ['text' => 'Augmenter automatiquement la bande passante physique', 'is_correct' => false],
                            ['text' => "Créer des domaines logiques de broadcast et faciliter l'isolation", 'is_correct' => true],
                            ['text' => 'Remplacer TCP par UDP', 'is_correct' => false],
                            ['text' => 'Désactiver le routing inter-VLAN', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l'intérêt principal d'un underlay IP dans un Data Center moderne ?",
                        'explanation' => "L'underlay fournit une connectivité IP robuste entre les équipements du fabric, généralement avec des protocoles de routing et ECMP.",
                        'choices' => [
                            ['text' => 'Transporter le trafic de manière routée entre les leaf et spine', 'is_correct' => true],
                            ['text' => 'Supprimer toutes les adresses IP', 'is_correct' => false],
                            ['text' => 'Forcer tous les serveurs à utiliser STP', 'is_correct' => false],
                            ['text' => 'Remplacer les applications par des services réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque architectural est principalement réduit par la séparation control plane / data plane ?',
                        'explanation' => 'La séparation conceptuelle du control plane et du data plane permet de distinguer les décisions de contrôle des opérations de forwarding.',
                        'choices' => [
                            ['text' => 'La consommation électrique des serveurs', 'is_correct' => false],
                            ['text' => 'La confusion entre décisions de forwarding et traitement effectif des paquets', 'is_correct' => true],
                            ['text' => 'La taille des écrans de supervision', 'is_correct' => false],
                            ['text' => 'La longueur des câbles cuivre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel choix est le plus approprié pour un service nécessitant une forte disponibilité ?',
                        'explanation' => 'Une haute disponibilité repose sur la redondance, la détection des défaillances et la capacité à basculer rapidement vers une ressource alternative.',
                        'choices' => [
                            ['text' => 'Un seul équipement sans backup', 'is_correct' => false],
                            ['text' => 'Une architecture redondante avec détection de panne et failover', 'is_correct' => true],
                            ['text' => 'Une topologie sans monitoring', 'is_correct' => false],
                            ['text' => 'Un unique lien physique partagé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les dépendances entre services réseau ?',
                        'explanation' => "La cartographie des dépendances permet d'évaluer les impacts, de planifier les changements et de faciliter le troubleshooting.",
                        'choices' => [
                            ['text' => 'Pour empêcher toute automatisation', 'is_correct' => false],
                            ['text' => "Pour identifier les impacts potentiels d'une panne ou d'un changement", 'is_correct' => true],
                            ['text' => 'Pour remplacer les tests de configuration', 'is_correct' => false],
                            ['text' => 'Pour supprimer les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel compromis est typique lorsqu'on augmente fortement la redondance ?",
                        'explanation' => 'La redondance améliore la disponibilité mais augmente généralement la complexité de configuration, de supervision et de troubleshooting.',
                        'choices' => [
                            ['text' => 'Complexité opérationnelle plus élevée', 'is_correct' => true],
                            ['text' => 'Disparition de tous les coûts', 'is_correct' => false],
                            ['text' => 'Suppression du monitoring', 'is_correct' => false],
                            ['text' => 'Réduction automatique de tous les risques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Routing avancé',
                'slug' => 'routing-avancé-advanced',
                'description' => 'Quiz avancé de Computer Networks.',
                'level' => 'advanced',
                'questions' => [
                    [
                        'question' => "Quel mécanisme BGP est couramment utilisé pour influencer le trafic sortant d'un Autonomous System ?",
                        'explanation' => "Local Preference est un attribut BGP utilisé à l'intérieur d'un AS pour sélectionner les routes préférées pour le trafic sortant.",
                        'choices' => [
                            ['text' => 'Local Preference', 'is_correct' => true],
                            ['text' => 'TTL uniquement', 'is_correct' => false],
                            ['text' => 'ARP', 'is_correct' => false],
                            ['text' => 'STP Root Guard', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel attribut BGP est principalement utilisé pour influencer le chemin entrant vers un préfixe depuis des AS voisins ?',
                        'explanation' => "L'AS_PATH prepend peut rendre un chemin moins attractif pour les voisins BGP qui prennent en compte la longueur de l'AS_PATH.",
                        'choices' => [
                            ['text' => 'MED uniquement comme garantie universelle', 'is_correct' => false],
                            ['text' => 'AS_PATH via prepend', 'is_correct' => true],
                            ['text' => 'ARP cache', 'is_correct' => false],
                            ['text' => 'VLAN ID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel problème OSPF résout principalement l'utilisation des Areas ?",
                        'explanation' => 'Les Areas permettent de limiter la portée des informations de routing et de réduire les coûts de calcul et de maintenance de la LSDB.',
                        'choices' => [
                            ['text' => 'La segmentation et la réduction de la taille de la LSDB et du calcul SPF', 'is_correct' => true],
                            ['text' => "Le remplacement d'Ethernet", 'is_correct' => false],
                            ['text' => 'La suppression des adresses IP', 'is_correct' => false],
                            ['text' => 'Le chiffrement automatique de tous les paquets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel type d'Area OSPF peut réduire les informations externes injectées dans une zone ?",
                        'explanation' => "Une Stub Area limite certaines routes externes et peut utiliser une route par défaut pour atteindre l'extérieur de l'Area.",
                        'choices' => [
                            ['text' => 'Stub', 'is_correct' => true],
                            ['text' => 'Broadcast uniquement', 'is_correct' => false],
                            ['text' => 'Loopback', 'is_correct' => false],
                            ['text' => 'Access VLAN', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ECMP est-il utile dans un réseau moderne ?',
                        'explanation' => "ECMP permet de répartir le trafic sur plusieurs chemins de coût égal, améliorant l'utilisation des liens et la résilience.",
                        'choices' => [
                            ['text' => "Il permet d'utiliser plusieurs chemins de coût égal", 'is_correct' => true],
                            ['text' => 'Il désactive le routing', 'is_correct' => false],
                            ['text' => 'Il transforme UDP en TCP', 'is_correct' => false],
                            ['text' => 'Il élimine les tables de forwarding', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le rôle d'un route reflector dans BGP ?",
                        'explanation' => 'Un route reflector permet de distribuer des routes iBGP sans établir une session full-mesh entre tous les routeurs.',
                        'choices' => [
                            ['text' => 'Réduire le besoin de full-mesh iBGP', 'is_correct' => true],
                            ['text' => 'Remplacer tous les routeurs de bordure', 'is_correct' => false],
                            ['text' => 'Fournir uniquement du DNS', 'is_correct' => false],
                            ['text' => 'Désactiver les sessions eBGP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel problème peut provoquer une route statique plus spécifique qu'une route dynamique ?",
                        'explanation' => "Le forwarding IP utilise d'abord le longest prefix match ; une route plus spécifique peut donc être choisie même si une autre source propose une route moins spécifique.",
                        'choices' => [
                            ['text' => 'Elle peut être préférée selon la longest prefix match', 'is_correct' => true],
                            ['text' => 'Elle est toujours ignorée', 'is_correct' => false],
                            ['text' => 'Elle désactive Ethernet', 'is_correct' => false],
                            ['text' => 'Elle ne peut jamais être installée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser BFD avec un protocole de routing ?',
                        'explanation' => 'BFD fournit une détection rapide et indépendante du protocole de routing, permettant une convergence plus rapide.',
                        'choices' => [
                            ['text' => "Pour accélérer la détection de défaillance d'un chemin", 'is_correct' => true],
                            ['text' => 'Pour attribuer les adresses MAC', 'is_correct' => false],
                            ['text' => 'Pour chiffrer les sessions BGP', 'is_correct' => false],
                            ['text' => 'Pour remplacer ICMP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel concept permet à BGP de limiter les annonces à certains préfixes ?',
                        'explanation' => 'Le route filtering contrôle les préfixes acceptés ou annoncés et constitue un mécanisme essentiel de policy control en BGP.',
                        'choices' => [
                            ['text' => 'Route filtering', 'is_correct' => true],
                            ['text' => 'ARP flooding', 'is_correct' => false],
                            ['text' => 'STP learning', 'is_correct' => false],
                            ['text' => 'DHCP relay', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l'objectif d'une route de blackhole volontairement configurée ?",
                        'explanation' => 'Une blackhole route permet de supprimer volontairement un trafic ciblé, notamment dans certaines stratégies de mitigation DDoS.',
                        'choices' => [
                            ['text' => 'Jeter certains paquets de manière contrôlée', 'is_correct' => true],
                            ['text' => 'Augmenter leur priorité', 'is_correct' => false],
                            ['text' => 'Créer automatiquement un tunnel TLS', 'is_correct' => false],
                            ['text' => 'Transformer le trafic en multicast', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Switching avancé & Layer 2',
                'slug' => 'switching-avancé-and-layer-2-advanced',
                'description' => 'Quiz avancé de Computer Networks.',
                'level' => 'advanced',
                'questions' => [
                    [
                        'question' => 'Quel mécanisme STP empêche généralement les boucles Layer 2 en bloquant certains chemins redondants ?',
                        'explanation' => 'STP construit une topologie sans boucle en plaçant certains ports dans un état non forwarding.',
                        'choices' => [
                            ['text' => "Port blocking dans l'arbre Spanning Tree", 'is_correct' => true],
                            ['text' => 'NAT', 'is_correct' => false],
                            ['text' => 'BGP', 'is_correct' => false],
                            ['text' => 'DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l'avantage principal de LACP ?",
                        'explanation' => "LACP permet de former un Link Aggregation Group et d'utiliser plusieurs liens physiques comme une interface logique.",
                        'choices' => [
                            ['text' => 'Agrégation logique de plusieurs liens physiques', 'is_correct' => true],
                            ['text' => 'Chiffrement des paquets', 'is_correct' => false],
                            ['text' => "Attribution automatique d'adresses IP publiques", 'is_correct' => false],
                            ['text' => 'Remplacement de TCP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi BPDU Guard est-il généralement activé sur des ports edge ?',
                        'explanation' => 'BPDU Guard peut désactiver un port edge si un BPDU y est reçu, protégeant ainsi la topologie STP.',
                        'choices' => [
                            ['text' => "Pour protéger le réseau contre l'arrivée inattendue de BPDUs", 'is_correct' => true],
                            ['text' => 'Pour accélérer DNS', 'is_correct' => false],
                            ['text' => 'Pour augmenter MTU', 'is_correct' => false],
                            ['text' => 'Pour activer BGP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème PortFast cherche-t-il principalement à réduire ?',
                        'explanation' => "PortFast permet à un port edge de passer rapidement vers l'état forwarding sans attendre les transitions STP classiques.",
                        'choices' => [
                            ['text' => "Le délai d'accès d'un endpoint sur un port edge", 'is_correct' => true],
                            ['text' => 'La latence BGP intercontinentale', 'is_correct' => false],
                            ['text' => 'La taille des paquets IP', 'is_correct' => false],
                            ['text' => 'La fragmentation TCP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme réduit le risque de MAC flooding sur un port Access ?',
                        'explanation' => 'Port Security permet de limiter les adresses MAC apprises ou autorisées sur un port et de définir une réaction en cas de violation.',
                        'choices' => [
                            ['text' => 'Port Security', 'is_correct' => true],
                            ['text' => 'OSPF', 'is_correct' => false],
                            ['text' => 'NAT64', 'is_correct' => false],
                            ['text' => 'DNSSEC', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un trunk 802.1Q, quel champ identifie le VLAN associé à la trame ?',
                        'explanation' => "Le tag IEEE 802.1Q contient notamment le VLAN ID permettant d'identifier le VLAN auquel appartient la trame.",
                        'choices' => [
                            ['text' => 'VLAN ID dans le tag 802.1Q', 'is_correct' => true],
                            ['text' => 'TCP port', 'is_correct' => false],
                            ['text' => 'IP TTL', 'is_correct' => false],
                            ['text' => 'DNS query ID', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l'objectif de Storm Control ?",
                        'explanation' => 'Storm Control protège les switches contre une saturation provoquée par un volume excessif de trafic de broadcast, multicast ou unknown unicast.',
                        'choices' => [
                            ['text' => 'Limiter certains types de trafic excessif comme broadcast, multicast ou unknown unicast', 'is_correct' => true],
                            ['text' => 'Remplacer STP', 'is_correct' => false],
                            ['text' => 'Chiffrer les VLAN', 'is_correct' => false],
                            ['text' => 'Augmenter la puissance CPU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le native VLAN doit-il être traité avec attention sur un trunk ?',
                        'explanation' => 'Une configuration incohérente du native VLAN entre équipements peut entraîner des erreurs de segmentation et certaines vulnérabilités.',
                        'choices' => [
                            ['text' => 'Un mauvais alignement peut créer des problèmes de segmentation et de sécurité', 'is_correct' => true],
                            ['text' => 'Il détermine le protocole TCP', 'is_correct' => false],
                            ['text' => 'Il remplace le VLAN management', 'is_correct' => false],
                            ['text' => 'Il désactive le routing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le rôle d'un SVI sur un switch Layer 3 ?",
                        'explanation' => 'Un SVI fournit une interface logique associée à un VLAN et peut servir de gateway pour les endpoints de ce VLAN.',
                        'choices' => [
                            ['text' => 'Fournir une interface IP logique, notamment pour le routing inter-VLAN', 'is_correct' => true],
                            ['text' => 'Remplacer les ports physiques Ethernet', 'is_correct' => false],
                            ['text' => 'Créer des certificats TLS', 'is_correct' => false],
                            ['text' => 'Stocker les logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel bénéfice fournit le routing inter-VLAN sur un switch Layer 3 ?',
                        'explanation' => 'Le routing inter-VLAN permet aux réseaux IP correspondant à différents VLAN de communiquer via un équipement Layer 3.',
                        'choices' => [
                            ['text' => 'Permettre la communication IP entre différents VLAN', 'is_correct' => true],
                            ['text' => 'Supprimer tous les domaines de broadcast', 'is_correct' => false],
                            ['text' => 'Remplacer DHCP dans tous les cas', 'is_correct' => false],
                            ['text' => 'Désactiver les ACL', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Network Security',
                'slug' => 'network-security-advanced',
                'description' => 'Quiz avancé de Computer Networks.',
                'level' => 'advanced',
                'questions' => [
                    [
                        'question' => "Quel principe Zero Trust résume le mieux la vérification d'accès ?",
                        'explanation' => "Zero Trust suppose qu'aucun accès ne doit être implicitement considéré comme fiable et impose une vérification adaptée au contexte.",
                        'choices' => [
                            ['text' => 'Never trust, always verify', 'is_correct' => true],
                            ['text' => 'Trust internal networks by default', 'is_correct' => false],
                            ['text' => 'Disable authentication after login', 'is_correct' => false],
                            ['text' => 'Allow all authenticated devices permanently', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme réduit le risque lié à un compte compromis ?',
                        'explanation' => "MFA ajoute un facteur d'authentification supplémentaire et réduit l'impact d'un mot de passe compromis.",
                        'choices' => [
                            ['text' => 'MFA', 'is_correct' => true],
                            ['text' => 'Hub flooding', 'is_correct' => false],
                            ['text' => 'Plain HTTP', 'is_correct' => false],
                            ['text' => 'Open relay', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l'objectif principal d'une Network ACL ?",
                        'explanation' => 'Une ACL applique une policy de filtrage basée sur des critères tels que source, destination, protocole et ports.',
                        'choices' => [
                            ['text' => 'Autoriser ou bloquer du trafic selon des critères définis', 'is_correct' => true],
                            ['text' => 'Résoudre les noms DNS', 'is_correct' => false],
                            ['text' => 'Attribuer des MAC addresses', 'is_correct' => false],
                            ['text' => "Synchroniser l'heure", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi segmenter les workloads sensibles dans des zones réseau distinctes ?',
                        'explanation' => 'La segmentation limite les chemins accessibles à un attaquant et réduit le potentiel de lateral movement après une compromission.',
                        'choices' => [
                            ['text' => "Pour réduire leur surface d'exposition et limiter les mouvements latéraux", 'is_correct' => true],
                            ['text' => 'Pour supprimer le besoin de logs', 'is_correct' => false],
                            ['text' => 'Pour rendre toutes les communications publiques', 'is_correct' => false],
                            ['text' => 'Pour éviter toute authentification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme est principalement destiné à détecter une activité réseau suspecte ?',
                        'explanation' => 'Un IDS analyse le trafic ou les événements afin de détecter des comportements potentiellement malveillants.',
                        'choices' => [
                            ['text' => 'IDS', 'is_correct' => true],
                            ['text' => 'NAT', 'is_correct' => false],
                            ['text' => 'DHCP', 'is_correct' => false],
                            ['text' => 'ARP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence fondamentale existe entre IDS et IPS ?',
                        'explanation' => "Un IPS est positionné pour appliquer des actions de prévention ou de blocage, alors qu'un IDS est principalement orienté détection et alerte.",
                        'choices' => [
                            ['text' => 'IPS peut bloquer automatiquement certains trafics, contrairement à un IDS passif', 'is_correct' => true],
                            ['text' => 'IDS chiffre toujours le trafic', 'is_correct' => false],
                            ['text' => 'IPS ne peut jamais inspecter les paquets', 'is_correct' => false],
                            ['text' => 'Ils sont strictement identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi TLS inspection peut-elle poser un défi de sécurité et de confidentialité ?',
                        'explanation' => 'TLS inspection introduit un point où le trafic chiffré est déchiffré pour inspection, ce qui nécessite une gestion rigoureuse des certificats et de la confidentialité.',
                        'choices' => [
                            ['text' => 'Elle nécessite de déchiffrer et ré-encrypter le trafic inspecté', 'is_correct' => true],
                            ['text' => 'Elle supprime IP', 'is_correct' => false],
                            ['text' => 'Elle rend TCP inutile', 'is_correct' => false],
                            ['text' => 'Elle interdit les certificats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel contrôle limite l'utilisation d'adresses IP usurpées à l'entrée d'un réseau ?",
                        'explanation' => "L'anti-spoofing vérifie que les adresses source sont cohérentes avec les préfixes autorisés sur une interface ou un domaine réseau.",
                        'choices' => [
                            ['text' => 'Ingress filtering / anti-spoofing', 'is_correct' => true],
                            ['text' => 'DNS caching', 'is_correct' => false],
                            ['text' => 'NTP', 'is_correct' => false],
                            ['text' => 'STP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l'objectif d'un security baseline pour les équipements réseau ?",
                        'explanation' => 'Une security baseline formalise les paramètres de sécurité attendus et facilite le contrôle de conformité des équipements.',
                        'choices' => [
                            ['text' => 'Définir un état de configuration sécurisé et reproductible', 'is_correct' => true],
                            ['text' => 'Désactiver tous les protocoles', 'is_correct' => false],
                            ['text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                            ['text' => 'Autoriser les comptes partagés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi utiliser le principle of least privilege sur les comptes d'administration réseau ?",
                        'explanation' => "Le least privilege réduit l'impact potentiel d'une compromission ou d'une erreur en limitant les droits au strict nécessaire.",
                        'choices' => [
                            ['text' => "Limiter les actions possibles d'un compte compromis ou mal utilisé", 'is_correct' => true],
                            ['text' => 'Donner tous les privilèges à tous les utilisateurs', 'is_correct' => false],
                            ['text' => 'Supprimer MFA', 'is_correct' => false],
                            ['text' => 'Désactiver les logs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'VPN, Tunneling & Encryption',
                'slug' => 'vpn,-tunneling-and-encryption-advanced',
                'description' => 'Quiz avancé de Computer Networks.',
                'level' => 'advanced',
                'questions' => [
                    [
                        'question' => "Quel est le rôle d'IPsec dans un VPN site-to-site ?",
                        'explanation' => 'IPsec protège le trafic IP grâce à des mécanismes cryptographiques et peut être utilisé pour construire des VPN site-to-site.',
                        'choices' => [
                            ['text' => "Fournir des mécanismes d'authentification, intégrité et chiffrement IP", 'is_correct' => true],
                            ['text' => 'Résoudre les noms DNS', 'is_correct' => false],
                            ['text' => 'Remplacer Ethernet', 'is_correct' => false],
                            ['text' => 'Attribuer les VLAN', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi IKE est-il utilisé avec IPsec ?',
                        'explanation' => "IKE négocie notamment les paramètres cryptographiques et l'authentification nécessaires à l'établissement des Security Associations IPsec.",
                        'choices' => [
                            ['text' => 'Pour négocier les paramètres de sécurité et établir les Security Associations', 'is_correct' => true],
                            ['text' => 'Pour transporter les fichiers utilisateurs', 'is_correct' => false],
                            ['text' => 'Pour remplacer BGP', 'is_correct' => false],
                            ['text' => 'Pour créer les VLAN', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel mode IPsec protège l'intégralité du paquet IP original ?",
                        'explanation' => "En tunnel mode, le paquet IP original est encapsulé et protégé à l'intérieur d'un nouveau paquet IP.",
                        'choices' => [
                            ['text' => 'Tunnel mode', 'is_correct' => true],
                            ['text' => 'Access mode', 'is_correct' => false],
                            ['text' => 'Bridge mode uniquement', 'is_correct' => false],
                            ['text' => 'Discovery mode', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel problème peut survenir avec un VPN lorsqu'un réseau intermédiaire bloque certains protocoles IP ?",
                        'explanation' => "NAT-T encapsule généralement ESP dans UDP afin de faciliter le passage d'IPsec à travers certains équipements NAT.",
                        'choices' => [
                            ['text' => 'La nécessité de NAT-T pour transporter IPsec à travers NAT', 'is_correct' => true],
                            ['text' => 'Le remplacement automatique de BGP par DNS', 'is_correct' => false],
                            ['text' => 'La suppression des routes', 'is_correct' => false],
                            ['text' => 'La désactivation de TLS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage présente WireGuard par rapport à de nombreuses implémentations VPN traditionnelles ?',
                        'explanation' => "WireGuard utilise une architecture moderne et relativement minimaliste, ce qui facilite notamment l'audit et la maintenance.",
                        'choices' => [
                            ['text' => 'Une conception relativement simple avec une base de code réduite', 'is_correct' => true],
                            ['text' => "L'absence totale de cryptographie", 'is_correct' => false],
                            ['text' => "L'utilisation obligatoire de Telnet", 'is_correct' => false],
                            ['text' => 'Le remplacement de toutes les routes par ARP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel risque existe lorsqu'un tunnel VPN est considéré comme entièrement fiable ?",
                        'explanation' => "Le VPN protège le transport mais ne garantit pas qu'un endpoint soit digne de confiance ; des contrôles d'accès supplémentaires restent nécessaires.",
                        'choices' => [
                            ['text' => "Un endpoint compromis peut bénéficier d'un accès excessif aux ressources internes", 'is_correct' => true],
                            ['text' => 'Les paquets ne peuvent plus être routés', 'is_correct' => false],
                            ['text' => 'Le DNS devient impossible', 'is_correct' => false],
                            ['text' => 'TCP cesse automatiquement de fonctionner', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le Perfect Forward Secrecy est-il important ?',
                        'explanation' => "PFS utilise des clés de session éphémères afin de limiter l'impact d'une compromission ultérieure d'une clé à long terme.",
                        'choices' => [
                            ['text' => "La compromission d'une clé à long terme ne doit pas permettre de déchiffrer toutes les sessions passées", 'is_correct' => true],
                            ['text' => 'Il supprime les certificats', 'is_correct' => false],
                            ['text' => 'Il désactive le chiffrement', 'is_correct' => false],
                            ['text' => 'Il rend les clés publiques secrètes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut provoquer un MTU trop élevé dans un tunnel ?',
                        'explanation' => "L'encapsulation d'un tunnel ajoute des overheads et peut réduire le MTU effectif ; un MTU inadapté peut provoquer fragmentation ou blackholing.",
                        'choices' => [
                            ['text' => 'Fragmentation ou perte de paquets si le chemin ne supporte pas la taille', 'is_correct' => true],
                            ['text' => 'Augmentation automatique de la sécurité', 'is_correct' => false],
                            ['text' => 'Création de VLAN supplémentaires', 'is_correct' => false],
                            ['text' => 'Suppression des routes BGP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un certificat serveur doit-il être validé par le client dans TLS ?',
                        'explanation' => "La validation du certificat permet au client de vérifier que le serveur correspond à l'identité attendue et que la chaîne de confiance est valide.",
                        'choices' => [
                            ['text' => "Pour vérifier l'identité du serveur et réduire le risque de MITM", 'is_correct' => true],
                            ['text' => 'Pour attribuer un VLAN', 'is_correct' => false],
                            ['text' => 'Pour augmenter la bande passante', 'is_correct' => false],
                            ['text' => 'Pour désactiver DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel principe doit guider le choix d'un algorithme cryptographique pour un VPN ?",
                        'explanation' => 'Les choix cryptographiques doivent reposer sur des primitives modernes, correctement configurées et adaptées au niveau de sécurité recherché.',
                        'choices' => [
                            ['text' => 'Utiliser des algorithmes modernes et maintenus selon les recommandations de sécurité', 'is_correct' => true],
                            ['text' => "Choisir l'algorithme le plus ancien disponible", 'is_correct' => false],
                            ['text' => 'Éviter toute authentification', 'is_correct' => false],
                            ['text' => 'Utiliser une clé identique pour tous les clients', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Wireless Networking',
                'slug' => 'wireless-networking-advanced',
                'description' => 'Quiz avancé de Computer Networks.',
                'level' => 'advanced',
                'questions' => [
                    [
                        'question' => 'Quel problème le channel planning cherche-t-il principalement à réduire dans un réseau Wi-Fi dense ?',
                        'explanation' => "Le channel planning vise à réduire les interférences co-channel et adjacent-channel afin d'améliorer la capacité et la qualité radio.",
                        'choices' => [
                            ['text' => 'Les interférences et la contention entre cellules', 'is_correct' => true],
                            ['text' => 'Les erreurs SQL', 'is_correct' => false],
                            ['text' => 'Les routes BGP', 'is_correct' => false],
                            ['text' => 'La fragmentation IP uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le 5 GHz peut-il offrir davantage de capacité que le 2,4 GHz dans certains environnements ?',
                        'explanation' => 'La bande 5 GHz offre généralement plus de canaux non chevauchants ou exploitables, même si la propagation peut être moins favorable.',
                        'choices' => [
                            ['text' => 'Il dispose généralement de davantage de canaux exploitables et de moins de congestion', 'is_correct' => true],
                            ['text' => 'Il ne subit aucune interférence', 'is_correct' => false],
                            ['text' => "Il n'utilise pas de radio", 'is_correct' => false],
                            ['text' => 'Il remplace Ethernet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l'objectif du roaming dans un réseau WLAN professionnel ?",
                        'explanation' => "Le roaming permet à un client mobile de passer d'un AP à un autre avec une interruption minimale de session.",
                        'choices' => [
                            ['text' => "Permettre à un client de changer d'AP tout en maintenant la connectivité", 'is_correct' => true],
                            ['text' => "Changer l'adresse MAC de tous les clients", 'is_correct' => false],
                            ['text' => "Désactiver l'authentification", 'is_correct' => false],
                            ['text' => 'Remplacer le routing IP', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le signal strength seul n'est-il pas suffisant pour évaluer un WLAN ?",
                        'explanation' => 'Un bon RSSI ne garantit pas une bonne expérience ; le bruit, les interférences et la contention influencent fortement les performances.',
                        'choices' => [
                            ['text' => 'La capacité dépend aussi du bruit, de la contention, du channel utilization et de la qualité du lien', 'is_correct' => true],
                            ['text' => "Le signal strength n'a aucun rapport avec la radio", 'is_correct' => false],
                            ['text' => 'Il détermine toujours la latence applicative exacte', 'is_correct' => false],
                            ['text' => 'Il remplace les mesures de capacité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel mécanisme WPA3 améliore l'établissement de session par rapport à WPA2-PSK ?",
                        'explanation' => 'WPA3-Personal utilise SAE, qui améliore notamment la résistance aux attaques offline de dictionnaire par rapport au mécanisme PSK classique.',
                        'choices' => [
                            ['text' => 'SAE', 'is_correct' => true],
                            ['text' => 'ARP', 'is_correct' => false],
                            ['text' => 'STP', 'is_correct' => false],
                            ['text' => 'BFD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel risque existe lorsqu'un SSID invité est placé sur le même réseau logique que les ressources internes ?",
                        'explanation' => "Le réseau invité doit être isolé des ressources internes afin de limiter la surface d'attaque et les mouvements latéraux.",
                        'choices' => [
                            ['text' => 'Un invité compromis peut avoir un accès excessif aux ressources internes', 'is_correct' => true],
                            ['text' => 'Le Wi-Fi devient automatiquement plus rapide', 'is_correct' => false],
                            ['text' => 'Le DHCP est toujours désactivé', 'is_correct' => false],
                            ['text' => 'Le chiffrement devient inutile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif poursuit band steering ?',
                        'explanation' => 'Band steering peut orienter certains clients compatibles vers une bande moins congestionnée ou offrant de meilleures capacités.',
                        'choices' => [
                            ['text' => 'Encourager les clients compatibles à utiliser une bande radio plus appropriée', 'is_correct' => true],
                            ['text' => 'Forcer tous les clients sur Ethernet', 'is_correct' => false],
                            ['text' => 'Désactiver 5 GHz', 'is_correct' => false],
                            ['text' => 'Remplacer WPA3', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la puissance d'émission ne doit-elle pas être augmentée sans analyse ?",
                        'explanation' => 'Une puissance excessive peut augmenter les cellules qui se chevauchent et empêcher les clients de maintenir un roaming optimal.',
                        'choices' => [
                            ['text' => 'Elle peut accroître les interférences et créer un déséquilibre avec la puissance des clients', 'is_correct' => true],
                            ['text' => 'Elle supprime toujours le roaming', 'is_correct' => false],
                            ['text' => 'Elle réduit automatiquement le bruit', 'is_correct' => false],
                            ['text' => 'Elle transforme Wi-Fi en fibre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l'intérêt de 802.1X dans un WLAN d'entreprise ?",
                        'explanation' => "802.1X permet une authentification réseau centralisée, souvent avec RADIUS, et peut être intégré à une politique d'accès d'entreprise.",
                        'choices' => [
                            ['text' => 'Fournir une authentification par port basée notamment sur RADIUS', 'is_correct' => true],
                            ['text' => 'Remplacer les AP par des routers', 'is_correct' => false],
                            ['text' => 'Désactiver les certificats', 'is_correct' => false],
                            ['text' => 'Créer automatiquement des VLAN publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur aide à identifier une forte occupation radio ?',
                        'explanation' => "Channel utilization mesure l'occupation du canal et permet d'identifier des situations de contention ou de saturation radio.",
                        'choices' => [
                            ['text' => 'Channel utilization', 'is_correct' => true],
                            ['text' => 'TTL', 'is_correct' => false],
                            ['text' => 'ARP timeout', 'is_correct' => false],
                            ['text' => 'BGP MED', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Network Troubleshooting & Observability',
                'slug' => 'network-troubleshooting-and-observability-advanced',
                'description' => 'Quiz avancé de Computer Networks.',
                'level' => 'advanced',
                'questions' => [
                    [
                        'question' => 'Quel outil est particulièrement adapté pour analyser les paquets capturés ?',
                        'explanation' => "Wireshark permet d'inspecter les paquets et leurs protocol fields afin d'analyser finement le comportement d'une communication.",
                        'choices' => [
                            ['text' => 'Wireshark', 'is_correct' => true],
                            ['text' => 'Terraform', 'is_correct' => false],
                            ['text' => 'Composer', 'is_correct' => false],
                            ['text' => 'Git', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi commencer un troubleshooting par la définition précise du symptôme ?',
                        'explanation' => "Un symptôme clairement défini permet de limiter le scope, d'établir des hypothèses et de choisir des tests pertinents.",
                        'choices' => [
                            ['text' => "Pour éviter de modifier inutilement la configuration et cibler l'analyse", 'is_correct' => true],
                            ['text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['text' => 'Pour désactiver le monitoring', 'is_correct' => false],
                            ['text' => 'Pour contourner les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel outil permet principalement de suivre le chemin des paquets vers une destination IP ?',
                        'explanation' => "Traceroute identifie les hops intermédiaires en utilisant des mécanismes basés notamment sur TTL et ICMP ou UDP selon l'implémentation.",
                        'choices' => [
                            ['text' => 'traceroute / tracert', 'is_correct' => true],
                            ['text' => 'nslookup uniquement', 'is_correct' => false],
                            ['text' => 'ssh-keygen', 'is_correct' => false],
                            ['text' => 'git', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la corrélation des logs est-elle importante dans un incident réseau ?',
                        'explanation' => "La corrélation temporelle et contextuelle des logs permet de reconstruire une chaîne d'événements distribuée.",
                        'choices' => [
                            ['text' => 'Elle permet de relier des événements provenant de plusieurs équipements et systèmes', 'is_correct' => true],
                            ['text' => 'Elle supprime les timestamps', 'is_correct' => false],
                            ['text' => 'Elle empêche toute analyse temporelle', 'is_correct' => false],
                            ['text' => 'Elle remplace les backups', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel indicateur est le plus directement associé à la qualité d'un service réseau ?",
                        'explanation' => 'Les SLO réseau sont généralement évalués à partir de métriques telles que latency, packet loss, jitter et disponibilité.',
                        'choices' => [
                            ['text' => 'Latency, packet loss et jitter selon le service', 'is_correct' => true],
                            ['text' => 'Nombre de VLAN uniquement', 'is_correct' => false],
                            ['text' => 'Nombre de comptes locaux', 'is_correct' => false],
                            ['text' => 'Taille du fichier de configuration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les synthetic probes sont-elles utiles ?',
                        'explanation' => 'Les synthetic probes simulent des transactions ou des tests réseau afin de détecter les dégradations avant ou indépendamment des plaintes utilisateurs.',
                        'choices' => [
                            ['text' => 'Elles testent activement un parcours ou un service depuis un point donné', 'is_correct' => true],
                            ['text' => 'Elles remplacent tous les utilisateurs', 'is_correct' => false],
                            ['text' => 'Elles modifient automatiquement BGP', 'is_correct' => false],
                            ['text' => 'Elles désactivent TLS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel phénomène peut expliquer une connexion TCP lente malgré une bande passante élevée ?',
                        'explanation' => 'TCP adapte son débit à la congestion et aux pertes ; un RTT élevé ou du packet loss peut donc limiter fortement le throughput effectif.',
                        'choices' => [
                            ['text' => 'Packet loss ou RTT élevé provoquant des effets sur la congestion control', 'is_correct' => true],
                            ['text' => 'Un nombre élevé de VLAN uniquement', 'is_correct' => false],
                            ['text' => 'Une MAC address trop courte', 'is_correct' => false],
                            ['text' => 'La présence de DNSSEC', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l'intérêt de NetFlow/IPFIX ?",
                        'explanation' => 'NetFlow et IPFIX fournissent des informations de flux telles que sources, destinations, ports, volumes et durées.',
                        'choices' => [
                            ['text' => 'Analyser des métadonnées de flux réseau pour comprendre les communications', 'is_correct' => true],
                            ['text' => 'Capturer systématiquement le payload complet', 'is_correct' => false],
                            ['text' => 'Remplacer les certificats TLS', 'is_correct' => false],
                            ['text' => 'Créer des VLAN', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver des métriques historiques est-il important ?',
                        'explanation' => "Les historiques permettent d'identifier les écarts par rapport à une baseline et de distinguer incident ponctuel et dérive progressive.",
                        'choices' => [
                            ['text' => 'Pour comparer le comportement actuel aux baselines et détecter les tendances', 'is_correct' => true],
                            ['text' => 'Pour empêcher toute capacité de diagnostic', 'is_correct' => false],
                            ['text' => 'Pour supprimer les anomalies', 'is_correct' => false],
                            ['text' => 'Pour remplacer la documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle pratique réduit le risque lors d'un changement réseau complexe ?",
                        'explanation' => "Un changement contrôlé doit prévoir validation, observabilité et rollback afin de réduire le blast radius d'une erreur.",
                        'choices' => [
                            ['text' => 'Plan de rollback, validation progressive et monitoring post-changement', 'is_correct' => true],
                            ['text' => 'Modification sans sauvegarde', 'is_correct' => false],
                            ['text' => 'Déploiement simultané sans validation', 'is_correct' => false],
                            ['text' => 'Suppression des logs avant changement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Network Automation & Infrastructure as Code',
                'slug' => 'network-automation-and-infrastructure-as-code-advanced',
                'description' => 'Quiz avancé de Computer Networks.',
                'level' => 'advanced',
                'questions' => [
                    [
                        'question' => 'Quel avantage principal présente Infrastructure as Code ?',
                        'explanation' => "Infrastructure as Code permet de gérer l'infrastructure comme du code, avec versioning, review, automatisation et reproductibilité.",
                        'choices' => [
                            ['text' => "Déclarer et reproduire l'infrastructure de manière versionnée et automatisable", 'is_correct' => true],
                            ['text' => 'Supprimer le version control', 'is_correct' => false],
                            ['text' => 'Éviter toute validation', 'is_correct' => false],
                            ['text' => 'Remplacer tous les protocoles réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel outil est couramment associé à l'automatisation déclarative de l'infrastructure ?",
                        'explanation' => "Terraform utilise une approche déclarative permettant de décrire l'état souhaité d'une infrastructure.",
                        'choices' => [
                            ['text' => 'Terraform', 'is_correct' => true],
                            ['text' => 'Wireshark', 'is_correct' => false],
                            ['text' => 'tcpdump', 'is_correct' => false],
                            ['text' => 'Nmap uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage apporte une configuration réseau générée par template ?',
                        'explanation' => "Les templates permettent d'appliquer des configurations cohérentes tout en réduisant les erreurs de saisie manuelle.",
                        'choices' => [
                            ['text' => 'Réduire les variations manuelles et améliorer la cohérence', 'is_correct' => true],
                            ['text' => 'Supprimer les tests', 'is_correct' => false],
                            ['text' => 'Rendre les changements impossibles à auditer', 'is_correct' => false],
                            ['text' => 'Désactiver les backups', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une API réseau doit-elle être traitée comme une interface contractuelle ?',
                        'explanation' => 'Une API définit un contrat entre producteurs et consommateurs ; les changements doivent donc préserver la compatibilité ou être versionnés.',
                        'choices' => [
                            ['text' => 'Parce que les clients dépendent de formats, ressources et comportements définis', 'is_correct' => true],
                            ['text' => "Parce qu'elle ne nécessite jamais de versioning", 'is_correct' => false],
                            ['text' => "Parce qu'elle remplace DNS", 'is_correct' => false],
                            ['text' => "Parce qu'elle ne doit pas être sécurisée", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut provoquer une automatisation non idempotente ?',
                        'explanation' => "Une opération idempotente peut être rejouée sans produire d'effets cumulatifs inattendus ; l'absence d'idempotence complique les déploiements répétés.",
                        'choices' => [
                            ['text' => "La répétition d'une opération peut produire des états différents ou des effets indésirables", 'is_correct' => true],
                            ['text' => 'Elle garantit toujours le même état', 'is_correct' => false],
                            ['text' => 'Elle supprime les credentials', 'is_correct' => false],
                            ['text' => 'Elle empêche tout changement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi stocker les secrets réseau directement dans un repository Git est-il dangereux ?',
                        'explanation' => "Les credentials présents dans Git peuvent persister dans l'historique et être copiés par de nombreux utilisateurs ; un secret manager est préférable.",
                        'choices' => [
                            ['text' => "Ils peuvent être exposés dans l'historique et accessibles à des utilisateurs non autorisés", 'is_correct' => true],
                            ['text' => 'Git chiffre automatiquement tous les secrets', 'is_correct' => false],
                            ['text' => 'Les secrets deviennent invalides immédiatement', 'is_correct' => false],
                            ['text' => 'Cela augmente automatiquement la sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel rôle joue CI/CD dans l'automatisation réseau ?",
                        'explanation' => "CI/CD permet d'automatiser les validations, tests et déploiements tout en améliorant la traçabilité des changements.",
                        'choices' => [
                            ['text' => 'Valider et déployer des changements de manière contrôlée et répétable', 'is_correct' => true],
                            ['text' => 'Remplacer les routeurs physiques', 'is_correct' => false],
                            ['text' => 'Désactiver le monitoring', 'is_correct' => false],
                            ['text' => 'Créer des adresses MAC', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi effectuer une configuration validation avant déploiement ?',
                        'explanation' => "La validation pré-déploiement réduit le risque d'introduire une configuration invalide ou incohérente dans l'environnement de production.",
                        'choices' => [
                            ['text' => 'Pour détecter des erreurs de syntaxe ou de logique avant impact sur le réseau', 'is_correct' => true],
                            ['text' => 'Pour supprimer les backups', 'is_correct' => false],
                            ['text' => 'Pour désactiver les ACL', 'is_correct' => false],
                            ['text' => 'Pour éviter toute review', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe Git améliore la traçabilité des changements réseau ?',
                        'explanation' => "Des commits atomiques et explicites facilitent la revue, le rollback et la compréhension de l'évolution de la configuration.",
                        'choices' => [
                            ['text' => 'Commits atomiques et messages explicites', 'is_correct' => true],
                            ['text' => "Suppression de l'historique", 'is_correct' => false],
                            ['text' => "Partage d'un compte unique", 'is_correct' => false],
                            ['text' => 'Modification directe sans commit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les tests automatisés sont-ils importants pour les changements réseau ?',
                        'explanation' => 'Les tests automatisés peuvent vérifier des propriétés réseau avant et après déploiement, sans prétendre éliminer tous les risques.',
                        'choices' => [
                            ['text' => 'Ils permettent de vérifier automatiquement des invariants et comportements attendus', 'is_correct' => true],
                            ['text' => "Ils garantissent l'absence absolue de panne", 'is_correct' => false],
                            ['text' => 'Ils remplacent toute supervision', 'is_correct' => false],
                            ['text' => 'Ils rendent les configurations secrètes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = $subject->quizzes()->updateOrCreate(
                ['slug' => $quizData['slug']],
                [
                    'title' => $quizData['title'],
                    'description' => $quizData['description'],
                    'level' => $quizData['level'],
                    'is_active' => true,
                ]
            );

            foreach ($quizData['questions'] as $questionData) {
                $question = $quiz->questions()->updateOrCreate(
                    ['question' => $questionData['question']],
                    [
                        'explanation' => $questionData['explanation'],
                    ]
                );

                $question->choices()->delete();

                $choices = $questionData['choices'];
                shuffle($choices);

                foreach ($choices as $index => $choiceData) {
                    Choice::create([
                        'question_id' => $question->id,
                        'text' => $choiceData['text'],
                        'is_correct' => $choiceData['is_correct'],
                        'order' => $index + 1,
                    ]);
                }
            }
        }
    }
}