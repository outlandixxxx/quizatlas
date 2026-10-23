<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ComputerNetworksAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'computer-networks')->firstOrFail();

        Quiz::where('subject_id', $subject->id)
            ->whereIn('title', ['Network Architecture & Design', 'Routing avancé', 'Switching avancé & Layer 2', 'Network Security', 'VPN, Tunneling & Encryption', 'Wireless Networking', 'Network Troubleshooting & Observability', 'Network Automation & Infrastructure as Code'])
            ->update(['is_active' => false]);

        $quizzes = [
            [
                'title' => 'Architecture réseau et haute disponibilité',
                'description' => 'Analyse de choix d’architecture, de protocoles avancés et de scénarios d’exploitation.',
                'difficulty' => 'Advanced',
                'duration' => 28,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Dans une architecture campus hiérarchique, quel rôle est principalement associé à la couche Distribution?',
                        'explanation' => 'La couche Distribution agrège les commutateurs Access et constitue généralement le point d\'application des politiques de routage, filtrage et redundancy.',
                        'choices' => [
                            [
                                'choice_text' => 'Fournir directement la connectivité aux terminaux utilisateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Appliquer des politiques et agréger les flux provenant de la couche Access',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Remplacer tous les protocoles de routage par du commutateuanneau L2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Fournir exclusivement la connexion Internet',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel principe améliore le plus la résilience d\'une architecture réseau critique?',
                        'explanation' => 'La redondance des chemins et des équipements réduit l\'impact d\'une panne unique et permet un basculement contrôlé.',
                        'choices' => [
                            [
                                'choice_text' => 'Supprimer toutes les routes alternatives',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Introduire des points de défaillance uniques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Utiliser des chemins et équipements redondants avec des mécanismes de basculement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Centraliser tous les services sur un seul commutateur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un design Clos est-il adapté aux centre de donnéess modernes?',
                        'explanation' => 'Une architecture Clos feuille-colonne fournit plusieurs chemins de coût égal entre les endpoints, ce qui facilite l\'utilisation d\'ECMP et améliore l’évolutivité.',
                        'choices' => [
                            [
                                'choice_text' => 'Il impose uniquement du couche 2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il offre une architecture feuille-colonne avec plusieurs chemins ECMP',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il élimine le besoin de routage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il interdit l\'utilisation de VLAN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans une architecture feuille-colonne, quel équipement fournit généralement la connectivité aux serveurs?',
                        'explanation' => 'Les commutateur feuille commutateurs connectent généralement les serveurs et autres endpoints, tandis que les commutateur colonne commutateurs assurent le transit entre commutateur feuilles.',
                        'choices' => [
                            [
                                'choice_text' => 'commutateur colonne',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'commutateur feuille',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'cœur d’Internet uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Route reflector uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif principal justifie la segmentation réseau par VLAN?',
                        'explanation' => 'Les VLAN permettent de segmenter logiquement le réseau, notamment pour réduire les domaines de diffusion et améliorer l\'isolation.',
                        'choices' => [
                            [
                                'choice_text' => 'Augmenter automatiquement la bande passante physique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Créer des domaines logiques de diffusion et faciliter l\'isolation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Remplacer TCP par UDP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Désactiver le routage inter-VLAN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est l\'intérêt principal d\'un réseau de transport IP dans un centre de données moderne?',
                        'explanation' => 'L\'réseau de transport fournit une connectivité IP robuste entre les équipements du fabric, généralement avec des protocoles de routage et ECMP.',
                        'choices' => [
                            [
                                'choice_text' => 'Transporter le trafic de manière routée entre les commutateur feuille et commutateur colonne',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Supprimer toutes les adresses IP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Forcer tous les serveurs à utiliser STP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remplacer les applications par des services réseau',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel risque architectural est principalement réduit par la séparation plan de contrôle / plan de transfert?',
                        'explanation' => 'La séparation conceptuelle du plan de contrôle et du plan de transfert permet de distinguer les décisions de contrôle des opérations de acheminement.',
                        'choices' => [
                            [
                                'choice_text' => 'La consommation électrique des serveurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La confusion entre décisions de acheminement et traitement effectif des paquets',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La taille des écrans de supervision',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La longueur des câbles cuivre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel choix est le plus approprié pour un service nécessitant une forte disponibilité?',
                        'explanation' => 'Une haute disponibilité repose sur la redondance, la détection des défaillances et la capacité à basculer rapidement vers une ressource alternative.',
                        'choices' => [
                            [
                                'choice_text' => 'Un seul équipement sans sauvegarde',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une architecture redondante avec détection de panne et basculement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une topologie sans supervision',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un unique lien physique partagé',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les dépendances entre services réseau?',
                        'explanation' => 'La cartographie des dépendances permet d\'évaluer les impacts, de planifier les changements et de faciliter le diagnostic.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour empêcher toute automatisation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour identifier les impacts potentiels d\'une panne ou d\'un changement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour remplacer les tests de configuration',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les journaux',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis est typique lorsqu\'on augmente fortement la redondance?',
                        'explanation' => 'La redondance améliore la disponibilité mais augmente généralement la complexité de configuration, de supervision et de diagnostic.',
                        'choices' => [
                            [
                                'choice_text' => 'Complexité opérationnelle plus élevée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Disparition de tous les coûts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Suppression du supervision',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduction automatique de tous les risques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Routage avancé',
                'description' => 'Analyse de choix d’architecture, de protocoles avancés et de scénarios d’exploitation.',
                'difficulty' => 'Advanced',
                'duration' => 28,
                'passing_score' => 70,
                'total_marks' => 11,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel mécanisme BGP est couramment utilisé pour influencer le trafic sortant d\'un système autonome?',
                        'explanation' => 'Local Preference est un attribut BGP utilisé à l\'intérieur d\'un AS pour sélectionner les routes préférées pour le trafic sortant.',
                        'choices' => [
                            [
                                'choice_text' => 'Local Preference',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'TTL uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ARP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'STP Root Guard',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel attribut BGP est principalement utilisé pour influencer le chemin entrant vers un préfixe depuis des AS voisins?',
                        'explanation' => 'L\'AS_PATH prepend peut rendre un chemin moins attractif pour les voisins BGP qui prennent en compte la longueur de l\'AS_PATH.',
                        'choices' => [
                            [
                                'choice_text' => 'MED uniquement comme garantie universelle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'AS_PATH via prepend',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'cache ARP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'VLAN ID',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel problème OSPF résout principalement l\'utilisation des zones?',
                        'explanation' => 'Les zones permettent de limiter la portée des informations de routage et de réduire les coûts de calcul et de maintenance de la LSDB.',
                        'choices' => [
                            [
                                'choice_text' => 'La segmentation et la réduction de la taille de la LSDB et du calcul SPF',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le remplacement d\'Ethernet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La suppression des adresses IP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le chiffrement automatique de tous les paquets',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel type d\'zone OSPF peut réduire les informations externes injectées dans une zone?',
                        'explanation' => 'Une Stub zone limite certaines routes externes et peut utiliser une route par défaut pour atteindre l\'extérieur de l\'zone.',
                        'choices' => [
                            [
                                'choice_text' => 'Stub',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'diffusion uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Loopback',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'VLAN d’accès',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ECMP est-il utile dans un réseau moderne?',
                        'explanation' => 'ECMP permet de répartir le trafic sur plusieurs chemins de coût égal, améliorant l\'utilisation des liens et la résilience.',
                        'choices' => [
                            [
                                'choice_text' => 'Il permet d\'utiliser plusieurs chemins de coût égal',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il désactive le routage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il transforme UDP en TCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il élimine les tables de acheminement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d\'un route reflector dans BGP?',
                        'explanation' => 'Un route reflector permet de distribuer des routes iBGP sans établir une session maillage complet entre tous les routeurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Réduire le besoin de maillage complet iBGP',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Remplacer tous les routeurs de bordure',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Fournir uniquement du DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Désactiver les sessions eBGP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut provoquer une route statique plus spécifique qu\'une route dynamique?',
                        'explanation' => 'Le acheminement IP utilise d\'abord le correspondance au préfixe le plus long; une route plus spécifique peut donc être choisie même si une autre source propose une route moins spécifique.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut être préférée selon la correspondance au préfixe le plus long',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle est toujours ignorée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle désactive Ethernet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ne peut jamais être installée',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser BFD avec un protocole de routage?',
                        'explanation' => 'BFD fournit une détection rapide et indépendante du protocole de routage, permettant une convergence plus rapide.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour accélérer la détection de défaillance d\'un chemin',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour attribuer les adresses MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour chiffrer les sessions BGP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour remplacer ICMP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel concept permet à BGP de limiter les annonces à certains préfixes?',
                        'explanation' => 'Le filtrage des routes contrôle les préfixes acceptés ou annoncés et constitue un mécanisme essentiel de politique control en BGP.',
                        'choices' => [
                            [
                                'choice_text' => 'filtrage des routes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ARP diffusion',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'STP learning',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'relais DHCP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est l\'objectif d\'une route de blackhole volontairement configurée?',
                        'explanation' => 'Une blackhole route permet de supprimer volontairement un trafic ciblé, notamment dans certaines stratégies de mitigation DDoS.',
                        'choices' => [
                            [
                                'choice_text' => 'Jeter certains paquets de manière contrôlée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Augmenter leur priorité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Créer automatiquement un tunnel TLS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Transformer le trafic en multicast',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme STP empêche généralement les boucles couche 2 en bloquant certains chemins redondants?',
                        'explanation' => 'STP construit une topologie sans boucle en plaçant certains ports dans un état non acheminement.',
                        'choices' => [
                            [
                                'choice_text' => 'Port blocking dans l\'arbre Spanning Tree',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'NAT',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'BGP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DNS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Commutation et redondance de couche 2',
                'description' => 'Analyse de choix d’architecture, de protocoles avancés et de scénarios d’exploitation.',
                'difficulty' => 'Advanced',
                'duration' => 30,
                'passing_score' => 70,
                'total_marks' => 12,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est l\'avantage principal de LACP?',
                        'explanation' => 'LACP permet de former un Link Aggregation Group et d\'utiliser plusieurs liens physiques comme une interface logique.',
                        'choices' => [
                            [
                                'choice_text' => 'Agrégation logique de plusieurs liens physiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Chiffrement des paquets',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Attribution automatique d\'adresses IP publiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remplacement de TCP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi BPDU Guard est-il généralement activé sur des ports edge?',
                        'explanation' => 'BPDU Guard peut désactiver un port edge si un BPDU y est reçu, protégeant ainsi la topologie STP.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour protéger le réseau contre l\'arrivée inattendue de BPDUs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour accélérer DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour augmenter MTU',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour activer BGP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel problème PortFast cherche-t-il principalement à réduire?',
                        'explanation' => 'PortFast permet à un port edge de passer rapidement vers l\'état acheminement sans attendre les transitions STP classiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Le délai d\'accès d\'un endpoint sur un port edge',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La latence BGP intercontinentale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La taille des paquets IP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La fragmentation TCP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme réduit le risque de MAC diffusion sur un port Access?',
                        'explanation' => 'Port Security permet de limiter les adresses MAC apprises ou autorisées sur un port et de définir une réaction en cas de violation.',
                        'choices' => [
                            [
                                'choice_text' => 'Port Security',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'OSPF',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'NAT64',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DNSSEC',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans un trunk 802.1Q, quel champ identifie le VLAN associé à la trame?',
                        'explanation' => 'Le tag IEEE 802.1Q contient notamment le VLAN ID permettant d\'identifier le VLAN auquel appartient la trame.',
                        'choices' => [
                            [
                                'choice_text' => 'VLAN ID dans le tag 802.1Q',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'port TCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'IP TTL',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DNS query ID',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est l\'objectif de Storm Control?',
                        'explanation' => 'Storm Control protège les commutateurs contre une saturation provoquée par un volume excessif de trafic de diffusion, multicast ou unknown unicast.',
                        'choices' => [
                            [
                                'choice_text' => 'Limiter certains types de trafic excessif comme diffusion, multicast ou unknown unicast',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Remplacer STP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Chiffrer les VLAN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter la puissance CPU',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le VLAN natif doit-il être traité avec attention sur un trunk?',
                        'explanation' => 'Une configuration incohérente du VLAN natif entre équipements peut entraîner des erreurs de segmentation et certaines vulnérabilités.',
                        'choices' => [
                            [
                                'choice_text' => 'Un mauvais alignement peut créer des problèmes de segmentation et de sécurité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il détermine le protocole TCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il remplace le VLAN management',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il désactive le routage',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d\'un SVI sur un commutateur couche 3?',
                        'explanation' => 'Un SVI fournit une interface logique associée à un VLAN et peut servir de gateway pour les endpoints de ce VLAN.',
                        'choices' => [
                            [
                                'choice_text' => 'Fournir une interface IP logique, notamment pour le routage inter-VLAN',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Remplacer les ports physiques Ethernet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Créer des certificats TLS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Stocker les journaux',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel bénéfice fournit le routage inter-VLAN sur un commutateur couche 3?',
                        'explanation' => 'Le routage inter-VLAN permet aux réseaux IP correspondant à différents VLAN de communiquer via un équipement couche 3.',
                        'choices' => [
                            [
                                'choice_text' => 'Permettre la communication IP entre différents VLAN',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Supprimer tous les domaines de diffusion',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remplacer DHCP dans tous les cas',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Désactiver les ACL',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel principe Zero Trust résume le mieux la vérification d\'accès?',
                        'explanation' => 'Zero Trust suppose qu\'aucun accès ne doit être implicitement considéré comme fiable et impose une vérification adaptée au contexte.',
                        'choices' => [
                            [
                                'choice_text' => 'Never trust, always verify',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Trust internal networks by default',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Disable authentication after login',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Allow all authenticated devices permanently',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme réduit le risque lié à un compte compromis?',
                        'explanation' => 'MFA ajoute un facteur d\'authentification supplémentaire et réduit l\'impact d\'un mot de passe compromis.',
                        'choices' => [
                            [
                                'choice_text' => 'MFA',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Hub diffusion',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Plain HTTP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Open relay',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est l\'objectif principal d\'une Network ACL?',
                        'explanation' => 'Une ACL applique une politique de filtrage basée sur des critères tels que source, destination, protocole et ports.',
                        'choices' => [
                            [
                                'choice_text' => 'Autoriser ou bloquer du trafic selon des critères définis',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Résoudre les noms DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Attribuer des adresses MAC',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Synchroniser l\'heure',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Sécurité des réseaux',
                'description' => 'Analyse de choix d’architecture, de protocoles avancés et de scénarios d’exploitation.',
                'difficulty' => 'Advanced',
                'duration' => 30,
                'passing_score' => 70,
                'total_marks' => 11,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi segmenter les workloads sensibles dans des zones réseau distinctes?',
                        'explanation' => 'La segmentation limite les chemins accessibles à un attaquant et réduit le potentiel de lateral movement après une compromission.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour réduire leur surface d\'exposition et limiter les mouvements latéraux',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour supprimer le besoin de journaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour rendre toutes les communications publiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter toute authentification',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme est principalement destiné à détecter une activité réseau suspecte?',
                        'explanation' => 'Un IDS analyse le trafic ou les événements afin de détecter des comportements potentiellement malveillants.',
                        'choices' => [
                            [
                                'choice_text' => 'IDS',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'NAT',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'DHCP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ARP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence fondamentale existe entre IDS et IPS?',
                        'explanation' => 'Un IPS est positionné pour appliquer des actions de prévention ou de blocage, alors qu\'un IDS est principalement orienté détection et alerte.',
                        'choices' => [
                            [
                                'choice_text' => 'IPS peut bloquer automatiquement certains trafics, contrairement à un IDS passif',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'IDS chiffre toujours le trafic',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'IPS ne peut jamais inspecter les paquets',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils sont strictement identiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi TLS inspection peut-elle poser un défi de sécurité et de confidentialité?',
                        'explanation' => 'TLS inspection introduit un point où le trafic chiffré est déchiffré pour inspection, ce qui nécessite une gestion rigoureuse des certificats et de la confidentialité.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle nécessite de déchiffrer et ré-encrypter le trafic inspecté',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle supprime IP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle rend TCP inutile',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle interdit les certificats',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel contrôle limite l\'utilisation d\'adresses IP usurpées à l\'entrée d\'un réseau?',
                        'explanation' => 'L\'anti-spoofing vérifie que les adresses source sont cohérentes avec les préfixes autorisés sur une interface ou un domaine réseau.',
                        'choices' => [
                            [
                                'choice_text' => 'Ingress filtrage / anti-spoofing',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'DNS caching',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'NTP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'STP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est l\'objectif d\'un configuration de sécurité de référence pour les équipements réseau?',
                        'explanation' => 'Une configuration de sécurité de référence formalise les paramètres de sécurité attendus et facilite le contrôle de conformité des équipements.',
                        'choices' => [
                            [
                                'choice_text' => 'Définir un état de configuration sécurisé et reproductible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Désactiver tous les protocoles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les sauvegardes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Autoriser les comptes partagés',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser le principle of least privilege sur les comptes d\'administration réseau?',
                        'explanation' => 'Le least privilege réduit l\'impact potentiel d\'une compromission ou d\'une erreur en limitant les droits au strict nécessaire.',
                        'choices' => [
                            [
                                'choice_text' => 'Limiter les actions possibles d\'un compte compromis ou mal utilisé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Donner tous les privilèges à tous les utilisateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer MFA',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Désactiver les journaux',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d\'IPsec dans un VPN site-to-site?',
                        'explanation' => 'IPsec protège le trafic IP grâce à des mécanismes cryptographiques et peut être utilisé pour construire des VPN site-to-site.',
                        'choices' => [
                            [
                                'choice_text' => 'Fournir des mécanismes d\'authentification, intégrité et chiffrement IP',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Résoudre les noms DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remplacer Ethernet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Attribuer les VLAN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi IKE est-il utilisé avec IPsec?',
                        'explanation' => 'IKE négocie notamment les paramètres cryptographiques et l\'authentification nécessaires à l\'établissement des Security Associations IPsec.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour négocier les paramètres de sécurité et établir les Security Associations',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour transporter les fichiers utilisateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour remplacer BGP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour créer les VLAN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mode IPsec protège l\'intégralité du paquet IP original?',
                        'explanation' => 'En tunnel mode, le paquet IP original est encapsulé et protégé à l\'intérieur d\'un nouveau paquet IP.',
                        'choices' => [
                            [
                                'choice_text' => 'Tunnel mode',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Access mode',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Bridge mode uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Discovery mode',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut survenir avec un VPN lorsqu\'un réseau intermédiaire bloque certains protocoles IP?',
                        'explanation' => 'NAT-T encapsule généralement ESP dans UDP afin de faciliter le passage d\'IPsec à travers certains équipements NAT.',
                        'choices' => [
                            [
                                'choice_text' => 'La nécessité de NAT-T pour transporter IPsec à travers NAT',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le remplacement automatique de BGP par DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La suppression des routes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La désactivation de TLS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'VPN et tunnels',
                'description' => 'Analyse de choix d’architecture, de protocoles avancés et de scénarios d’exploitation.',
                'difficulty' => 'Advanced',
                'duration' => 32,
                'passing_score' => 70,
                'total_marks' => 12,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel avantage présente WireGuard par rapport à de nombreuses implémentations VPN traditionnelles?',
                        'explanation' => 'WireGuard utilise une architecture moderne et relativement minimaliste, ce qui facilite notamment l\'audit et la maintenance.',
                        'choices' => [
                            [
                                'choice_text' => 'Une conception relativement simple avec une base de code réduite',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L\'absence totale de cryptographie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L\'utilisation obligatoire de Telnet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le remplacement de toutes les routes par ARP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu\'un tunnel VPN est considéré comme entièrement fiable?',
                        'explanation' => 'Le VPN protège le transport mais ne garantit pas qu\'un endpoint soit digne de confiance; des contrôles d\'accès supplémentaires restent nécessaires.',
                        'choices' => [
                            [
                                'choice_text' => 'Un endpoint compromis peut bénéficier d\'un accès excessif aux ressources internes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les paquets ne peuvent plus être routés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le DNS devient impossible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'TCP cesse automatiquement de fonctionner',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le Perfect Forward Secrecy est-il important?',
                        'explanation' => 'PFS utilise des clés de session éphémères afin de limiter l\'impact d\'une compromission ultérieure d\'une clé à long terme.',
                        'choices' => [
                            [
                                'choice_text' => 'La compromission d\'une clé à long terme ne doit pas permettre de déchiffrer toutes les sessions passées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il supprime les certificats',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il désactive le chiffrement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il rend les clés publiques secrètes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut provoquer un MTU trop élevé dans un tunnel?',
                        'explanation' => 'L\'encapsulation d\'un tunnel ajoute des overheads et peut réduire le MTU effectif; un MTU inadapté peut provoquer fragmentation ou blackholing.',
                        'choices' => [
                            [
                                'choice_text' => 'Fragmentation ou perte de paquets si le chemin ne supporte pas la taille',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Augmentation automatique de la sécurité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Création de VLAN supplémentaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Suppression des routes BGP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un certificat serveur doit-il être validé par le client dans TLS?',
                        'explanation' => 'La validation du certificat permet au client de vérifier que le serveur correspond à l\'identité attendue et que la chaîne de confiance est valide.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour vérifier l\'identité du serveur et réduire le risque de MITM',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour attribuer un VLAN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour augmenter la bande passante',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour désactiver DNS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider le choix d\'un algorithme cryptographique pour un VPN?',
                        'explanation' => 'Les choix cryptographiques doivent reposer sur des primitives modernes, correctement configurées et adaptées au niveau de sécurité recherché.',
                        'choices' => [
                            [
                                'choice_text' => 'Utiliser des algorithmes modernes et maintenus selon les recommandations de sécurité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Choisir l\'algorithme le plus ancien disponible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éviter toute authentification',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Utiliser une clé identique pour tous les clients',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel problème le channel planning cherche-t-il principalement à réduire dans un réseau Wi-Fi dense?',
                        'explanation' => 'Le channel planning vise à réduire les interférences co-channel et adjacent-channel afin d\'améliorer la capacité et la qualité radio.',
                        'choices' => [
                            [
                                'choice_text' => 'Les interférences et la contention entre cellules',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les erreurs SQL',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les routes BGP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La fragmentation IP uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le 5 GHz peut-il offrir davantage de capacité que le 2,4 GHz dans certains environnements?',
                        'explanation' => 'La bande 5 GHz offre généralement plus de canaux non chevauchants ou exploitables, même si la propagation peut être moins favorable.',
                        'choices' => [
                            [
                                'choice_text' => 'Il dispose généralement de davantage de canaux exploitables et de moins de congestion',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il ne subit aucune interférence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il n\'utilise pas de radio',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il remplace Ethernet',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est l\'objectif du roaming dans un réseau WLAN professionnel?',
                        'explanation' => 'Le roaming permet à un client mobile de passer d\'un AP à un autre avec une interruption minimale de session.',
                        'choices' => [
                            [
                                'choice_text' => 'Permettre à un client de changer d\'AP tout en maintenant la connectivité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Changer l\'adresse MAC de tous les clients',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Désactiver l\'authentification',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remplacer le routage IP',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le signal strength seul n\'est-il pas suffisant pour évaluer un WLAN?',
                        'explanation' => 'Un bon RSSI ne garantit pas une bonne expérience; le bruit, les interférences et la contention influencent fortement les performances.',
                        'choices' => [
                            [
                                'choice_text' => 'La capacité dépend aussi du bruit, de la contention, du channel utilization et de la qualité du lien',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le signal strength n\'a aucun rapport avec la radio',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il détermine toujours la latence applicative exacte',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il remplace les mesures de capacité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme WPA3 améliore l\'établissement de session par rapport à WPA2-PSK?',
                        'explanation' => 'WPA3-Personal utilise SAE, qui améliore notamment la résistance aux attaques offline de dictionnaire par rapport au mécanisme PSK classique.',
                        'choices' => [
                            [
                                'choice_text' => 'SAE',
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
                                'choice_text' => 'BFD',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu\'un SSID invité est placé sur le même réseau logique que les ressources internes?',
                        'explanation' => 'Le réseau invité doit être isolé des ressources internes afin de limiter la surface d\'attaque et les mouvements latéraux.',
                        'choices' => [
                            [
                                'choice_text' => 'Un invité compromis peut avoir un accès excessif aux ressources internes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le Wi-Fi devient automatiquement plus rapide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le DHCP est toujours désactivé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le chiffrement devient inutile',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Réseaux sans fil',
                'description' => 'Analyse de choix d’architecture, de protocoles avancés et de scénarios d’exploitation.',
                'difficulty' => 'Advanced',
                'duration' => 32,
                'passing_score' => 70,
                'total_marks' => 12,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel objectif poursuit band steeanneau?',
                        'explanation' => 'Band steeanneau peut orienter certains clients compatibles vers une bande moins congestionnée ou offrant de meilleures capacités.',
                        'choices' => [
                            [
                                'choice_text' => 'Encourager les clients compatibles à utiliser une bande radio plus appropriée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Forcer tous les clients sur Ethernet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Désactiver 5 GHz',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remplacer WPA3',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la puissance d\'émission ne doit-elle pas être augmentée sans analyse?',
                        'explanation' => 'Une puissance excessive peut augmenter les cellules qui se chevauchent et empêcher les clients de maintenir un roaming optimal.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut accroître les interférences et créer un déséquilibre avec la puissance des clients',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle supprime toujours le roaming',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle réduit automatiquement le bruit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle transforme Wi-Fi en fibre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est l\'intérêt de 802.1X dans un WLAN d\'entreprise?',
                        'explanation' => '802.1X permet une authentification réseau centralisée, souvent avec RADIUS, et peut être intégré à une politique d\'accès d\'entreprise.',
                        'choices' => [
                            [
                                'choice_text' => 'Fournir une authentification par port basée notamment sur RADIUS',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Remplacer les AP par des routeurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Désactiver les certificats',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Créer automatiquement des VLAN publics',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur aide à identifier une forte occupation radio?',
                        'explanation' => 'Channel utilization mesure l\'occupation du canal et permet d\'identifier des situations de contention ou de saturation radio.',
                        'choices' => [
                            [
                                'choice_text' => 'Channel utilization',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'TTL',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ARP timeout',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'BGP MED',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel outil est particulièrement adapté pour analyser les paquets capturés?',
                        'explanation' => 'Wireshark permet d\'inspecter les paquets et leurs protocol fields afin d\'analyser finement le comportement d\'une communication.',
                        'choices' => [
                            [
                                'choice_text' => 'Wireshark',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Terraform',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Composer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Git',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi commencer un diagnostic par la définition précise du symptôme?',
                        'explanation' => 'Un symptôme clairement défini permet de limiter le scope, d\'établir des hypothèses et de choisir des tests pertinents.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour éviter de modifier inutilement la configuration et cibler l\'analyse',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les journaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour désactiver le supervision',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour contourner les tests',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel outil permet principalement de suivre le chemin des paquets vers une destination IP?',
                        'explanation' => 'Traceroute identifie les hops intermédiaires en utilisant des mécanismes basés notamment sur TTL et ICMP ou UDP selon l\'implémentation.',
                        'choices' => [
                            [
                                'choice_text' => 'traceroute / tracert',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'nslookup uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ssh-keygen',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'git',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la corrélation des journaux est-elle importante dans un incident réseau?',
                        'explanation' => 'La corrélation temporelle et contextuelle des journaux permet de reconstruire une chaîne d\'événements distribuée.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle permet de relier des événements provenant de plusieurs équipements et systèmes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle supprime les timestamps',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle empêche toute analyse temporelle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle remplace les sauvegardes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est le plus directement associé à la qualité d\'un service réseau?',
                        'explanation' => 'Les SLO réseau sont généralement évalués à partir de métriques telles que latency, perte de paquets, jitter et disponibilité.',
                        'choices' => [
                            [
                                'choice_text' => 'Latency, perte de paquets et jitter selon le service',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Nombre de VLAN uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Nombre de comptes locaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Taille du fichier de configuration',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les synthetic probes sont-elles utiles?',
                        'explanation' => 'Les synthetic probes simulent des transactions ou des tests réseau afin de détecter les dégradations avant ou indépendamment des plaintes utilisateurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Elles testent activement un parcours ou un service depuis un point donné',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elles remplacent tous les utilisateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles modifient automatiquement BGP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles désactivent TLS',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel phénomène peut expliquer une connexion TCP lente malgré une bande passante élevée?',
                        'explanation' => 'TCP adapte son débit à la congestion et aux pertes; un RTT élevé ou du perte de paquets peut donc limiter fortement le throughput effectif.',
                        'choices' => [
                            [
                                'choice_text' => 'perte de paquets ou RTT élevé provoquant des effets sur la congestion control',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un nombre élevé de VLAN uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une adresse MAC trop courte',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La présence de DNSSEC',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est l\'intérêt de NetFlow/IPFIX?',
                        'explanation' => 'NetFlow et IPFIX fournissent des informations de flux telles que sources, destinations, ports, volumes et durées.',
                        'choices' => [
                            [
                                'choice_text' => 'Analyser des métadonnées de flux réseau pour comprendre les communications',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Capturer systématiquement le payload complet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remplacer les certificats TLS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Créer des VLAN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Observabilité et automatisation',
                'description' => 'Analyse de choix d’architecture, de protocoles avancés et de scénarios d’exploitation.',
                'difficulty' => 'Advanced',
                'duration' => 34,
                'passing_score' => 70,
                'total_marks' => 12,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi conserver des métriques historiques est-il important?',
                        'explanation' => 'Les historiques permettent d\'identifier les écarts par rapport à une baseline et de distinguer incident ponctuel et dérive progressive.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour comparer le comportement actuel aux baselines et détecter les tendances',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour empêcher toute capacité de diagnostic',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les anomalies',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour remplacer la documentation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle pratique réduit le risque lors d\'un changement réseau complexe?',
                        'explanation' => 'Un changement contrôlé doit prévoir validation, observabilité et rollback afin de réduire le blast radius d\'une erreur.',
                        'choices' => [
                            [
                                'choice_text' => 'Plan de rollback, validation progressive et supervision post-changement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Modification sans sauvegarde',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Déploiement simultané sans validation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Suppression des journaux avant changement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage principal présente Infrastructure as Code?',
                        'explanation' => 'Infrastructure as Code permet de gérer l\'infrastructure comme du code, avec versioning, review, automatisation et reproductibilité.',
                        'choices' => [
                            [
                                'choice_text' => 'Déclarer et reproduire l\'infrastructure de manière versionnée et automatisable',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Supprimer le version control',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éviter toute validation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remplacer tous les protocoles réseau',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel outil est couramment associé à l\'automatisation déclarative de l\'infrastructure?',
                        'explanation' => 'Terraform utilise une approche déclarative permettant de décrire l\'état souhaité d\'une infrastructure.',
                        'choices' => [
                            [
                                'choice_text' => 'Terraform',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Wireshark',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'tcpdump',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Nmap uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage apporte une configuration réseau générée par template?',
                        'explanation' => 'Les templates permettent d\'appliquer des configurations cohérentes tout en réduisant les erreurs de saisie manuelle.',
                        'choices' => [
                            [
                                'choice_text' => 'Réduire les variations manuelles et améliorer la cohérence',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Supprimer les tests',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Rendre les changements impossibles à auditer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Désactiver les sauvegardes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une API réseau doit-elle être traitée comme une interface contractuelle?',
                        'explanation' => 'Une API définit un contrat entre producteurs et consommateurs; les changements doivent donc préserver la compatibilité ou être versionnés.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les clients dépendent de formats, ressources et comportements définis',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu\'elle ne nécessite jamais de versioning',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu\'elle remplace DNS',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu\'elle ne doit pas être sécurisée',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut provoquer une automatisation non idempotente?',
                        'explanation' => 'Une opération idempotente peut être rejouée sans produire d\'effets cumulatifs inattendus; l\'absence d\'idempotence complique les déploiements répétés.',
                        'choices' => [
                            [
                                'choice_text' => 'La répétition d\'une opération peut produire des états différents ou des effets indésirables',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle garantit toujours le même état',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime les credentials',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle empêche tout changement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi stocker les secrets réseau directement dans un repository Git est-il dangereux?',
                        'explanation' => 'Les credentials présents dans Git peuvent persister dans l\'historique et être copiés par de nombreux utilisateurs; un secret manager est préférable.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils peuvent être exposés dans l\'historique et accessibles à des utilisateurs non autorisés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Git chiffre automatiquement tous les secrets',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les secrets deviennent invalides immédiatement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cela augmente automatiquement la sécurité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue CI/CD dans l\'automatisation réseau?',
                        'explanation' => 'CI/CD permet d\'automatiser les validations, tests et déploiements tout en améliorant la traçabilité des changements.',
                        'choices' => [
                            [
                                'choice_text' => 'Valider et déployer des changements de manière contrôlée et répétable',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Remplacer les routeurs physiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Désactiver le supervision',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Créer des adresses MAC',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi effectuer une configuration validation avant déploiement?',
                        'explanation' => 'La validation pré-déploiement réduit le risque d\'introduire une configuration invalide ou incohérente dans l\'environnement de production.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour détecter des erreurs de syntaxe ou de logique avant impact sur le réseau',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les sauvegardes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour désactiver les ACL',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter toute review',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel principe Git améliore la traçabilité des changements réseau?',
                        'explanation' => 'Des commits atomiques et explicites facilitent la revue, le rollback et la compréhension de l\'évolution de la configuration.',
                        'choices' => [
                            [
                                'choice_text' => 'Commits atomiques et messages explicites',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Suppression de l\'historique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Partage d\'un compte unique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Modification directe sans commit',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les tests automatisés sont-ils importants pour les changements réseau?',
                        'explanation' => 'Les tests automatisés peuvent vérifier des propriétés réseau avant et après déploiement, sans prétendre éliminer tous les risques.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils permettent de vérifier automatiquement des invariants et comportements attendus',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils garantissent l\'absence absolue de panne',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils remplacent toute supervision',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils rendent les configurations secrètes',
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
