<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class CloudComputingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'cloud-computing')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondamentaux du Cloud Computing',
                'description' => 'Découvrez les concepts essentiels du Cloud Computing, ses caractéristiques et ses principaux avantages.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le Cloud Computing ?',
                        'explanation' => 'Le Cloud Computing permet d’utiliser à la demande des ressources informatiques comme des serveurs, du stockage ou des applications via un réseau.',
                        'choices' => [
                            ['choice_text' => 'L’accès à des ressources informatiques à la demande via un réseau', 'is_correct' => true],
                            ['choice_text' => 'Un type de câble réseau', 'is_correct' => false],
                            ['choice_text' => 'Un système utilisé uniquement pour les jeux vidéo', 'is_correct' => false],
                            ['choice_text' => 'Un remplacement physique de tous les ordinateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage courant du Cloud Computing ?',
                        'explanation' => 'Le cloud permet notamment d’utiliser des ressources sans devoir acheter et administrer tout le matériel correspondant localement.',
                        'choices' => [
                            ['choice_text' => 'Pouvoir utiliser des ressources informatiques sans posséder toute l’infrastructure physique', 'is_correct' => true],
                            ['choice_text' => 'Supprimer définitivement les réseaux', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucune panne ne surviendra', 'is_correct' => false],
                            ['choice_text' => 'Rendre toutes les données publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie généralement « ressource à la demande » dans le cloud ?',
                        'explanation' => 'Une ressource à la demande peut être obtenue ou ajustée lorsque l’utilisateur en a besoin, selon les capacités du fournisseur.',
                        'choices' => [
                            ['choice_text' => 'La ressource peut être provisionnée selon les besoins', 'is_correct' => true],
                            ['choice_text' => 'La ressource doit toujours être installée physiquement par le client', 'is_correct' => false],
                            ['choice_text' => 'La ressource ne peut jamais être supprimée', 'is_correct' => false],
                            ['choice_text' => 'La ressource fonctionne uniquement hors ligne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément constitue généralement une ressource cloud ?',
                        'explanation' => 'Les fournisseurs cloud proposent notamment des machines virtuelles, du stockage, des bases de données, des réseaux et des services applicatifs.',
                        'choices' => [
                            ['choice_text' => 'Une machine virtuelle', 'is_correct' => true],
                            ['choice_text' => 'Un clavier physique obligatoire chez chaque client', 'is_correct' => false],
                            ['choice_text' => 'Un câble USB uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un écran sans système informatique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le cloud facilite-t-il généralement l’augmentation des capacités informatiques ?',
                        'explanation' => 'Les ressources peuvent souvent être ajoutées ou ajustées plus rapidement qu’avec une infrastructure physique entièrement achetée et installée par l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Parce que des ressources supplémentaires peuvent être provisionnées rapidement', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il n’existe aucune limite physique dans les datacenters', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les services deviennent gratuits', 'is_correct' => false],
                            ['choice_text' => 'Parce que les serveurs cloud ne consomment pas d’énergie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel terme désigne généralement un centre informatique hébergeant des équipements et services cloud ?',
                        'explanation' => 'Un datacenter regroupe les équipements physiques permettant d’exécuter, stocker et connecter de nombreux services informatiques.',
                        'choices' => [
                            ['choice_text' => 'Datacenter', 'is_correct' => true],
                            ['choice_text' => 'Navigateur', 'is_correct' => false],
                            ['choice_text' => 'Cookie', 'is_correct' => false],
                            ['choice_text' => 'Clavier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général d’un fournisseur cloud ?',
                        'explanation' => 'Le fournisseur exploite l’infrastructure et les services qui permettent aux clients de consommer des ressources informatiques.',
                        'choices' => [
                            ['choice_text' => 'Fournir et exploiter des ressources et services informatiques accessibles aux clients', 'is_correct' => true],
                            ['choice_text' => 'Fabriquer uniquement des câbles réseau', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les logiciels du client', 'is_correct' => false],
                            ['choice_text' => 'Administrer automatiquement tous les postes personnels des utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une connexion réseau est-elle importante pour de nombreux services cloud ?',
                        'explanation' => 'Les utilisateurs accèdent généralement aux ressources cloud via un réseau, même si certaines capacités peuvent également être mises en cache ou utilisées localement.',
                        'choices' => [
                            ['choice_text' => 'Elle permet généralement d’accéder aux services et ressources hébergés à distance', 'is_correct' => true],
                            ['choice_text' => 'Elle remplace toujours le système d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Elle rend le stockage inutile', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche toute authentification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un exemple concret de service cloud utilisé par un particulier ?',
                        'explanation' => 'Le stockage de photos ou documents dans un service accessible en ligne est un exemple courant d’utilisation du cloud.',
                        'choices' => [
                            ['choice_text' => 'Le stockage de fichiers en ligne', 'is_correct' => true],
                            ['choice_text' => 'Un câble HDMI', 'is_correct' => false],
                            ['choice_text' => 'Un disque local non connecté', 'is_correct' => false],
                            ['choice_text' => 'Une imprimante hors tension', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel décrit le mieux une ressource cloud ?',
                        'explanation' => 'Une ressource cloud est consommée comme un service et peut généralement être provisionnée, configurée ou libérée selon les besoins.',
                        'choices' => [
                            ['choice_text' => 'Une capacité informatique disponible comme un service', 'is_correct' => true],
                            ['choice_text' => 'Un composant qui doit toujours être physiquement installé chez le client', 'is_correct' => false],
                            ['choice_text' => 'Une donnée obligatoirement publique', 'is_correct' => false],
                            ['choice_text' => 'Un appareil qui fonctionne sans aucune infrastructure', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Modèles de services Cloud',
                'description' => 'Apprenez à distinguer IaaS, PaaS et SaaS et à comprendre leurs usages principaux.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Que signifie IaaS ?',
                        'explanation' => 'IaaS signifie Infrastructure as a Service. Le fournisseur met à disposition des ressources d’infrastructure comme des machines virtuelles, du réseau ou du stockage.',
                        'choices' => [
                            ['choice_text' => 'Infrastructure as a Service', 'is_correct' => true],
                            ['choice_text' => 'Internet as a System', 'is_correct' => false],
                            ['choice_text' => 'Identity as a Software', 'is_correct' => false],
                            ['choice_text' => 'Infrastructure and Security', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie PaaS ?',
                        'explanation' => 'PaaS signifie Platform as a Service. Le fournisseur gère une grande partie de la plateforme nécessaire pour exécuter des applications.',
                        'choices' => [
                            ['choice_text' => 'Platform as a Service', 'is_correct' => true],
                            ['choice_text' => 'Private application as a system', 'is_correct' => false],
                            ['choice_text' => 'Processing as a Server', 'is_correct' => false],
                            ['choice_text' => 'Program Access and Storage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie SaaS ?',
                        'explanation' => 'SaaS signifie Software as a Service. L’utilisateur consomme directement une application gérée par le fournisseur.',
                        'choices' => [
                            ['choice_text' => 'Software as a Service', 'is_correct' => true],
                            ['choice_text' => 'Security as a Server', 'is_correct' => false],
                            ['choice_text' => 'Storage and Software', 'is_correct' => false],
                            ['choice_text' => 'System as a Subscription', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel modèle donne généralement au client le plus de contrôle sur le système d’exploitation ?',
                        'explanation' => 'Avec IaaS, le client gère généralement davantage de couches, notamment le système d’exploitation de ses machines virtuelles.',
                        'choices' => [
                            ['choice_text' => 'IaaS', 'is_correct' => true],
                            ['choice_text' => 'SaaS', 'is_correct' => false],
                            ['choice_text' => 'SaaS uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un service de messagerie managé uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel modèle est généralement le plus proche de l’utilisation directe d’une application finale ?',
                        'explanation' => 'Avec SaaS, l’utilisateur consomme directement une application prête à l’emploi au lieu de gérer l’infrastructure ou la plateforme sous-jacente.',
                        'choices' => [
                            ['choice_text' => 'SaaS', 'is_correct' => true],
                            ['choice_text' => 'IaaS', 'is_correct' => false],
                            ['choice_text' => 'PaaS uniquement', 'is_correct' => false],
                            ['choice_text' => 'Datacenter physique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe veut déployer son application sans gérer directement le système d’exploitation des serveurs. Quel modèle peut être approprié ?',
                        'explanation' => 'PaaS permet généralement au client de se concentrer sur l’application tandis que le fournisseur gère davantage de composants de la plateforme.',
                        'choices' => [
                            ['choice_text' => 'PaaS', 'is_correct' => true],
                            ['choice_text' => 'IaaS uniquement', 'is_correct' => false],
                            ['choice_text' => 'Colocation physique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Stockage local uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel modèle implique généralement le moins de gestion d’infrastructure par l’utilisateur final ?',
                        'explanation' => 'Dans SaaS, le fournisseur gère généralement l’application et une grande partie des couches sous-jacentes.',
                        'choices' => [
                            ['choice_text' => 'SaaS', 'is_correct' => true],
                            ['choice_text' => 'IaaS', 'is_correct' => false],
                            ['choice_text' => 'Serveur physique autogéré', 'is_correct' => false],
                            ['choice_text' => 'Datacenter privé non managé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans IaaS, qui gère généralement le système d’exploitation installé sur une machine virtuelle ?',
                        'explanation' => 'Dans un modèle IaaS classique, le fournisseur fournit l’infrastructure tandis que le client est responsable de nombreuses couches logicielles, notamment l’OS de la VM.',
                        'choices' => [
                            ['choice_text' => 'Le client', 'is_correct' => true],
                            ['choice_text' => 'Toujours le fournisseur uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le navigateur Web', 'is_correct' => false],
                            ['choice_text' => 'Le fournisseur DNS public', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage courant de PaaS pour les développeurs ?',
                        'explanation' => 'PaaS simplifie la gestion de l’infrastructure sous-jacente et permet aux développeurs de se concentrer davantage sur le code et le déploiement de l’application.',
                        'choices' => [
                            ['choice_text' => 'Réduire la gestion de l’infrastructure nécessaire à l’exécution de l’application', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute responsabilité de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement un code sans bugs', 'is_correct' => false],
                            ['choice_text' => 'Rendre l’application toujours gratuite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit le mieux SaaS ?',
                        'explanation' => 'Le client utilise le logiciel comme un service sans gérer directement la majorité de l’infrastructure qui l’exécute.',
                        'choices' => [
                            ['choice_text' => 'Le client utilise directement une application gérée par le fournisseur', 'is_correct' => true],
                            ['choice_text' => 'Le client achète nécessairement les serveurs physiques', 'is_correct' => false],
                            ['choice_text' => 'Le client administre obligatoirement le système d’exploitation du fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Le service est toujours installé exclusivement hors ligne', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Modèles de déploiement Cloud',
                'description' => 'Comprenez les différences entre cloud public, privé, hybride et multicloud.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un cloud public ?',
                        'explanation' => 'Un cloud public fournit des ressources cloud à plusieurs clients à partir d’une infrastructure opérée par un fournisseur.',
                        'choices' => [
                            ['choice_text' => 'Un environnement cloud fourni par un opérateur et utilisé par plusieurs clients', 'is_correct' => true],
                            ['choice_text' => 'Un cloud accessible uniquement depuis un ordinateur personnel', 'is_correct' => false],
                            ['choice_text' => 'Un datacenter sans réseau', 'is_correct' => false],
                            ['choice_text' => 'Un serveur qui ne peut héberger qu’une application', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un cloud privé ?',
                        'explanation' => 'Un cloud privé est dédié à une organisation ou à un périmètre spécifique, avec une infrastructure ou un environnement cloud réservé.',
                        'choices' => [
                            ['choice_text' => 'Un environnement cloud dédié à une organisation ou à un périmètre particulier', 'is_correct' => true],
                            ['choice_text' => 'Un cloud obligatoirement gratuit', 'is_correct' => false],
                            ['choice_text' => 'Un cloud sans mécanisme d’authentification', 'is_correct' => false],
                            ['choice_text' => 'Un service réservé uniquement aux téléphones', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un cloud hybride ?',
                        'explanation' => 'Un cloud hybride combine des environnements distincts, par exemple un cloud privé ou une infrastructure locale avec un cloud public.',
                        'choices' => [
                            ['choice_text' => 'Une combinaison d’environnements cloud ou d’infrastructures distinctes interconnectées', 'is_correct' => true],
                            ['choice_text' => 'Un cloud utilisé uniquement pour le stockage', 'is_correct' => false],
                            ['choice_text' => 'Un cloud sans connexion réseau', 'is_correct' => false],
                            ['choice_text' => 'Un serveur physique unique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une organisation peut-elle utiliser plusieurs fournisseurs cloud ?',
                        'explanation' => 'Le multicloud peut répondre à des besoins de spécialisation, de disponibilité, de réduction de dépendance à un fournisseur ou d’exigences spécifiques.',
                        'choices' => [
                            ['choice_text' => 'Pour bénéficier de services différents ou réduire une dépendance à un seul fournisseur', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toute gestion des identités', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un seul fournisseur ne peut jamais fournir de stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage potentiel du cloud public ?',
                        'explanation' => 'Le cloud public permet d’accéder rapidement à un large éventail de services sans devoir construire entièrement l’infrastructure physique correspondante.',
                        'choices' => [
                            ['choice_text' => 'Un accès rapide à de nombreuses ressources et services', 'is_correct' => true],
                            ['choice_text' => 'L’absence totale de coûts', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale de responsabilités du client', 'is_correct' => false],
                            ['choice_text' => 'L’impossibilité de partager une infrastructure', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque opérationnel peut augmenter dans une stratégie multicloud ?',
                        'explanation' => 'Plusieurs fournisseurs signifient souvent plusieurs interfaces, politiques IAM, modèles réseau, outils et compétences à maîtriser.',
                        'choices' => [
                            ['choice_text' => 'La complexité de gestion et de gouvernance', 'is_correct' => true],
                            ['choice_text' => 'La disparition des contrôles de sécurité', 'is_correct' => false],
                            ['choice_text' => 'La suppression automatique des données', 'is_correct' => false],
                            ['choice_text' => 'L’absence totale de réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle conserver certaines ressources sur site tout en utilisant le cloud public ?',
                        'explanation' => 'Certaines applications ou données peuvent avoir des contraintes techniques, réglementaires, de latence ou de migration qui rendent utile une architecture hybride.',
                        'choices' => [
                            ['choice_text' => 'Pour conserver certaines charges de travail tout en profitant de services cloud', 'is_correct' => true],
                            ['choice_text' => 'Parce que le cloud public interdit toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les serveurs locaux accessibles publiquement', 'is_correct' => false],
                            ['choice_text' => 'Parce que le cloud hybride ne peut pas utiliser Internet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément est particulièrement important dans une architecture hybride ?',
                        'explanation' => 'Les connexions entre environnements doivent être correctement sécurisées, surveillées et configurées afin d’éviter qu’un environnement compromis n’affecte l’autre.',
                        'choices' => [
                            ['choice_text' => 'La sécurisation des communications et des identités entre les environnements', 'is_correct' => true],
                            ['choice_text' => 'L’absence de segmentation', 'is_correct' => false],
                            ['choice_text' => 'Le partage de tous les comptes administrateurs', 'is_correct' => false],
                            ['choice_text' => 'La désactivation des logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsqu’une entreprise utilise plusieurs fournisseurs cloud sans stratégie commune ?',
                        'explanation' => 'Les politiques de sécurité peuvent devenir incohérentes entre fournisseurs, ce qui complique le contrôle des identités, la surveillance et la conformité.',
                        'choices' => [
                            ['choice_text' => 'Des politiques et contrôles incohérents entre environnements', 'is_correct' => true],
                            ['choice_text' => 'La suppression automatique des comptes', 'is_correct' => false],
                            ['choice_text' => 'La disparition des réseaux privés', 'is_correct' => false],
                            ['choice_text' => 'L’impossibilité d’utiliser le chiffrement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la portabilité peut-elle être un critère important dans une architecture multicloud ?',
                        'explanation' => 'Une architecture plus portable peut faciliter une migration ou une répartition des workloads, même si la portabilité parfaite est souvent difficile à atteindre.',
                        'choices' => [
                            ['choice_text' => 'Elle peut faciliter le déplacement de certaines charges de travail entre environnements', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit qu’aucune migration ne sera nécessaire', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace la sécurité cloud', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime tous les coûts de fonctionnement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Stockage et bases de données Cloud',
                'description' => 'Découvrez les principaux types de stockage cloud, les bases de données et les notions de disponibilité et de durabilité.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel type de stockage est particulièrement adapté à des fichiers, images ou objets accessibles via une API ?',
                        'explanation' => 'Le stockage objet est conçu pour conserver des objets tels que des fichiers, images, vidéos et sauvegardes.',
                        'choices' => [
                            ['choice_text' => 'Le stockage objet', 'is_correct' => true],
                            ['choice_text' => 'Le stockage uniquement en registre CPU', 'is_correct' => false],
                            ['choice_text' => 'Le cache du navigateur uniquement', 'is_correct' => false],
                            ['choice_text' => 'La mémoire vive du poste utilisateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel type de stockage fournit généralement un espace présenté comme un disque à une machine virtuelle ?',
                        'explanation' => 'Le stockage bloc est généralement utilisé comme des volumes ou disques attachés à des machines virtuelles ou autres systèmes.',
                        'choices' => [
                            ['choice_text' => 'Le stockage bloc', 'is_correct' => true],
                            ['choice_text' => 'Le stockage objet uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le cache HTTP', 'is_correct' => false],
                            ['choice_text' => 'Le DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt principal de la réplication des données ?',
                        'explanation' => 'La réplication crée plusieurs copies ou instances d’une donnée afin d’améliorer notamment la disponibilité ou la résilience selon l’architecture.',
                        'choices' => [
                            ['choice_text' => 'Disposer de plusieurs copies pour améliorer la disponibilité ou la résilience', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement toutes les données originales', 'is_correct' => false],
                            ['choice_text' => 'Rendre les données publiques', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute sauvegarde', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence existe entre sauvegarde et réplication ?',
                        'explanation' => 'La réplication maintient généralement des copies synchronisées ou proches de la source, tandis qu’une sauvegarde constitue une copie destinée notamment à la récupération après perte ou corruption.',
                        'choices' => [
                            ['choice_text' => 'Une sauvegarde sert notamment à récupérer des données perdues, tandis que la réplication vise souvent la disponibilité', 'is_correct' => true],
                            ['choice_text' => 'Il n’existe aucune différence', 'is_correct' => false],
                            ['choice_text' => 'La réplication empêche toute panne', 'is_correct' => false],
                            ['choice_text' => 'Une sauvegarde doit toujours être publique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi chiffrer des données stockées dans le cloud ?',
                        'explanation' => 'Le chiffrement au repos réduit le risque qu’un accès non autorisé au support ou à la donnée permette directement de lire son contenu.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’exposition des données en cas d’accès non autorisé au stockage', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute restauration des données', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité des contrôles d’accès', 'is_correct' => false],
                            ['choice_text' => 'Rendre les données automatiquement publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la durabilité des données dans le contexte du stockage cloud ?',
                        'explanation' => 'La durabilité décrit la capacité d’un service à préserver les données contre leur perte involontaire selon les garanties du fournisseur et du service.',
                        'choices' => [
                            ['choice_text' => 'La capacité à préserver les données contre certaines pertes ou corruptions', 'is_correct' => true],
                            ['choice_text' => 'La vitesse du processeur de stockage', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’utilisateurs connectés', 'is_correct' => false],
                            ['choice_text' => 'La longueur des mots de passe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une base de données managée dans le cloud ?',
                        'explanation' => 'Une base managée réduit la charge opérationnelle liée à certaines tâches comme les mises à jour, sauvegardes ou maintenance de l’infrastructure.',
                        'choices' => [
                            ['choice_text' => 'Réduire la gestion opérationnelle de l’infrastructure de base de données', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute responsabilité de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Garantir que toutes les requêtes seront toujours correctes', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute sauvegarde', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique de cycle de vie peut-elle être utile pour un stockage objet ?',
                        'explanation' => 'Une politique de cycle de vie permet par exemple de déplacer ou supprimer automatiquement des objets selon leur ancienneté ou leur utilisation.',
                        'choices' => [
                            ['choice_text' => 'Automatiser certaines transitions ou suppressions selon des règles', 'is_correct' => true],
                            ['choice_text' => 'Modifier automatiquement le contenu des objets', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les permissions', 'is_correct' => false],
                            ['choice_text' => 'Rendre tous les objets publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe si un bucket de stockage cloud est configuré en accès public sans nécessité ?',
                        'explanation' => 'Une configuration publique peut exposer des données à des utilisateurs non autorisés. L’accès doit être explicitement contrôlé et limité au besoin.',
                        'choices' => [
                            ['choice_text' => 'Une exposition non autorisée des données', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration de la confidentialité', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique des coûts', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation du chiffrement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester les restaurations de sauvegardes cloud ?',
                        'explanation' => 'L’existence d’une sauvegarde ne garantit pas qu’elle sera réellement restaurable. Les tests permettent de vérifier l’intégrité et les procédures de récupération.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que les données peuvent réellement être récupérées', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les anciennes sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les données publiques', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver le stockage objet', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Réseaux et connectivité Cloud',
                'description' => 'Comprenez les bases des réseaux cloud, sous-réseaux, sécurité réseau, DNS et connectivité privée.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un réseau virtuel dans le cloud ?',
                        'explanation' => 'Un réseau virtuel permet de définir logiquement les communications entre ressources cloud comme des machines virtuelles et services.',
                        'choices' => [
                            ['choice_text' => 'Un réseau logique permettant de connecter et isoler des ressources cloud', 'is_correct' => true],
                            ['choice_text' => 'Un câble réseau physique spécifique au client', 'is_correct' => false],
                            ['choice_text' => 'Une base de données', 'is_correct' => false],
                            ['choice_text' => 'Un logiciel de traitement de texte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert principalement un sous-réseau ?',
                        'explanation' => 'Un sous-réseau divise un réseau en segments logiques qui peuvent avoir des règles et rôles différents.',
                        'choices' => [
                            ['choice_text' => 'Organiser les ressources réseau en segments logiques', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer automatiquement tous les fichiers', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le système d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Créer des comptes utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence existe généralement entre une ressource publique et une ressource privée dans un cloud ?',
                        'explanation' => 'Une ressource publique peut être accessible via Internet selon les règles configurées, tandis qu’une ressource privée est généralement accessible uniquement via des réseaux ou contrôles internes.',
                        'choices' => [
                            ['choice_text' => 'Une ressource publique peut être directement accessible depuis Internet selon sa configuration', 'is_correct' => true],
                            ['choice_text' => 'Une ressource privée n’utilise jamais d’adresse IP', 'is_correct' => false],
                            ['choice_text' => 'Une ressource publique est toujours non sécurisée', 'is_correct' => false],
                            ['choice_text' => 'Une ressource privée ne peut jamais communiquer avec une autre ressource', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel composant filtre généralement le trafic entrant et sortant d’une ressource cloud ?',
                        'explanation' => 'Les groupes de sécurité, règles réseau ou pare-feu cloud permettent de contrôler les communications autorisées.',
                        'choices' => [
                            ['choice_text' => 'Un mécanisme de filtrage réseau ou pare-feu', 'is_correct' => true],
                            ['choice_text' => 'Un éditeur de texte', 'is_correct' => false],
                            ['choice_text' => 'Un stockage objet', 'is_correct' => false],
                            ['choice_text' => 'Un gestionnaire de secrets uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert DNS dans une architecture cloud ?',
                        'explanation' => 'DNS permet notamment de convertir des noms de domaine en adresses réseau et de fournir différentes formes de résolution adaptées aux services cloud.',
                        'choices' => [
                            ['choice_text' => 'Associer des noms de domaine à des adresses ou services', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer les fichiers stockés', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des comptes utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les firewalls', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une connexion privée entre un environnement local et un cloud ?',
                        'explanation' => 'Une connexion privée peut fournir un chemin de communication contrôlé entre les environnements sans exposer nécessairement toutes les communications au réseau Internet public.',
                        'choices' => [
                            ['choice_text' => 'Fournir une connectivité contrôlée entre l’environnement local et le cloud', 'is_correct' => true],
                            ['choice_text' => 'Rendre toutes les ressources publiques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles d’identité', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute segmentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les ressources publiques des ressources privées ?',
                        'explanation' => 'Cette séparation permet d’appliquer des contrôles différents et de réduire l’exposition directe des composants sensibles.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’exposition des ressources sensibles aux accès directs', 'is_correct' => true],
                            ['choice_text' => 'Augmenter systématiquement le trafic Internet', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les règles réseau', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les applications de fonctionner', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme permet de répartir les requêtes entre plusieurs serveurs ?',
                        'explanation' => 'Un load balancer répartit le trafic entre plusieurs instances ou serveurs afin d’améliorer la disponibilité et parfois les performances.',
                        'choices' => [
                            ['choice_text' => 'Un load balancer', 'is_correct' => true],
                            ['choice_text' => 'Un gestionnaire de mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Un stockage objet', 'is_correct' => false],
                            ['choice_text' => 'Un certificat seul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage apporte un load balancer à une application ?',
                        'explanation' => 'La répartition du trafic peut améliorer la disponibilité et éviter qu’un seul serveur supporte toutes les requêtes.',
                        'choices' => [
                            ['choice_text' => 'Répartir la charge et améliorer la disponibilité', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les vulnérabilités applicatives', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Garantir une absence totale de panne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il limiter les ports ouverts d’une ressource cloud ?',
                        'explanation' => 'Chaque port ouvert peut fournir un chemin d’accès à un service. Limiter les ports réduit la surface d’exposition.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire la surface d’attaque réseau', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre le service obligatoirement public', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter le nombre de vulnérabilités', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Sécurité et responsabilité dans le Cloud',
                'description' => 'Apprenez les principes fondamentaux de sécurité cloud, IAM, chiffrement, journalisation et responsabilité partagée.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Dans le cloud, pourquoi le contrôle des identités est-il particulièrement important ?',
                        'explanation' => 'Les identités sont souvent au cœur de l’accès aux ressources et aux API cloud. Un compte compromis peut donc permettre des actions importantes.',
                        'choices' => [
                            ['choice_text' => 'Parce que les identités contrôlent souvent l’accès aux ressources et aux services', 'is_correct' => true],
                            ['choice_text' => 'Parce que le cloud fonctionne sans réseau', 'is_correct' => false],
                            ['choice_text' => 'Parce que les identités remplacent les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les mots de passe ne sont jamais utilisés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider les permissions accordées à un utilisateur cloud ?',
                        'explanation' => 'Le moindre privilège consiste à accorder uniquement les permissions nécessaires à la tâche.',
                        'choices' => [
                            ['choice_text' => 'Le moindre privilège', 'is_correct' => true],
                            ['choice_text' => 'Le privilège maximal', 'is_correct' => false],
                            ['choice_text' => 'L’accès anonyme', 'is_correct' => false],
                            ['choice_text' => 'La confiance permanente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi activer MFA pour les comptes administrateurs cloud ?',
                        'explanation' => 'Les comptes administrateurs disposent souvent de capacités importantes. MFA réduit le risque qu’un simple mot de passe compromis suffise à les utiliser.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque lié au vol du mot de passe administrateur', 'is_correct' => true],
                            ['choice_text' => 'Supprimer la nécessité de journalisation', 'is_correct' => false],
                            ['choice_text' => 'Rendre les comptes publics', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute utilisation du cloud', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi journaliser les actions administratives dans un environnement cloud ?',
                        'explanation' => 'Les logs permettent de savoir qui a effectué quelles actions, facilitent les investigations et peuvent aider à détecter les comportements anormaux.',
                        'choices' => [
                            ['choice_text' => 'Pour tracer les actions et faciliter la détection et l’investigation', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les événements de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les contrôles IAM', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les données publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu’une clé d’accès cloud est stockée en clair dans un fichier partagé ?',
                        'explanation' => 'Les personnes ou systèmes ayant accès au fichier peuvent récupérer le secret et l’utiliser. Une gestion sécurisée des secrets est donc nécessaire.',
                        'choices' => [
                            ['choice_text' => 'Le secret peut être récupéré et utilisé par une personne non autorisée', 'is_correct' => true],
                            ['choice_text' => 'La clé devient automatiquement expirée', 'is_correct' => false],
                            ['choice_text' => 'Le cloud désactive automatiquement le compte', 'is_correct' => false],
                            ['choice_text' => 'Le stockage partagé devient automatiquement chiffré de manière indépendante', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt du chiffrement au repos ?',
                        'explanation' => 'Le chiffrement protège les données stockées contre certains accès non autorisés au support ou au stockage.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’exposition des données lorsqu’elles sont stockées', 'is_correct' => true],
                            ['choice_text' => 'Rendre les données impossibles à restaurer', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les permissions IAM', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il surveiller les changements de configuration cloud ?',
                        'explanation' => 'Une mauvaise configuration peut exposer des ressources ou modifier les contrôles de sécurité. Les changements doivent donc être traçables et contrôlés.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un changement peut créer une exposition ou affaiblir un contrôle de sécurité', 'is_correct' => true],
                            ['choice_text' => 'Parce que les configurations n’ont jamais d’impact sur la sécurité', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre tous les services publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel contrôle peut limiter l’accès public involontaire à un stockage cloud ?',
                        'explanation' => 'Des politiques restrictives et des outils de détection de mauvaises configurations permettent de réduire les expositions publiques involontaires.',
                        'choices' => [
                            ['choice_text' => 'Des politiques d’accès restrictives et une surveillance de configuration', 'is_correct' => true],
                            ['choice_text' => 'Le partage de toutes les ressources', 'is_correct' => false],
                            ['choice_text' => 'La suppression des logs', 'is_correct' => false],
                            ['choice_text' => 'L’utilisation de comptes administrateurs partagés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il protéger les logs cloud contre les suppressions non autorisées ?',
                        'explanation' => 'Un attaquant pourrait tenter d’effacer les traces de son activité. Des logs protégés et centralisés conservent leur valeur d’investigation.',
                        'choices' => [
                            ['choice_text' => 'Pour préserver les preuves et faciliter l’analyse d’incidents', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement le stockage disponible', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les alertes', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute authentification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe décrit le mieux une bonne gestion des secrets cloud ?',
                        'explanation' => 'Les secrets doivent être stockés dans un système adapté, accessibles uniquement aux composants nécessaires et renouvelés lorsque cela est approprié.',
                        'choices' => [
                            ['choice_text' => 'Stockage sécurisé, accès limité et rotation appropriée', 'is_correct' => true],
                            ['choice_text' => 'Publication des secrets dans le code source', 'is_correct' => false],
                            ['choice_text' => 'Partage des mêmes clés entre tous les projets', 'is_correct' => false],
                            ['choice_text' => 'Absence de surveillance', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Virtualisation, conteneurs et serverless',
                'description' => 'Découvrez les bases des machines virtuelles, conteneurs et architectures serverless.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une machine virtuelle ?',
                        'explanation' => 'Une machine virtuelle est un environnement logiciel qui simule une machine informatique et fonctionne généralement au-dessus d’un hyperviseur.',
                        'choices' => [
                            ['choice_text' => 'Un environnement informatique virtualisé qui fonctionne sur une infrastructure physique', 'is_correct' => true],
                            ['choice_text' => 'Un câble réseau virtuel uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un fichier texte partagé', 'is_correct' => false],
                            ['choice_text' => 'Une base de données sans système', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel composant permet généralement d’exécuter plusieurs machines virtuelles sur un serveur physique ?',
                        'explanation' => 'L’hyperviseur gère les ressources du serveur physique et permet à plusieurs environnements virtuels de fonctionner sur celui-ci.',
                        'choices' => [
                            ['choice_text' => 'Un hyperviseur', 'is_correct' => true],
                            ['choice_text' => 'Un navigateur', 'is_correct' => false],
                            ['choice_text' => 'Un fichier CSV', 'is_correct' => false],
                            ['choice_text' => 'Un serveur DNS public uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage de la virtualisation ?',
                        'explanation' => 'La virtualisation permet notamment d’utiliser plus efficacement les ressources physiques et d’isoler plusieurs environnements.',
                        'choices' => [
                            ['choice_text' => 'Exécuter plusieurs environnements sur une même infrastructure physique', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les systèmes d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Rendre tous les services publics', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un conteneur ?',
                        'explanation' => 'Un conteneur regroupe une application et ses dépendances dans un environnement isolé utilisant le noyau de l’hôte.',
                        'choices' => [
                            ['choice_text' => 'Une unité légère permettant d’exécuter une application et ses dépendances', 'is_correct' => true],
                            ['choice_text' => 'Un serveur physique complet obligatoirement dédié', 'is_correct' => false],
                            ['choice_text' => 'Une base de données publique', 'is_correct' => false],
                            ['choice_text' => 'Un protocole de chiffrement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage courant des conteneurs ?',
                        'explanation' => 'Les conteneurs sont généralement plus légers que des machines virtuelles complètes et facilitent le packaging et le déploiement des applications.',
                        'choices' => [
                            ['choice_text' => 'Ils permettent de packager et déployer rapidement des applications avec leurs dépendances', 'is_correct' => true],
                            ['choice_text' => 'Ils n’utilisent jamais de ressources système', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment tous les risques de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent toujours les bases de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie généralement serverless ?',
                        'explanation' => 'Serverless signifie que le fournisseur prend en charge une grande partie de la gestion de l’infrastructure, tandis que le client se concentre sur l’exécution de fonctions ou services.',
                        'choices' => [
                            ['choice_text' => 'Le fournisseur gère une grande partie de l’infrastructure sous-jacente', 'is_correct' => true],
                            ['choice_text' => 'Aucun serveur physique n’existe', 'is_correct' => false],
                            ['choice_text' => 'L’application ne nécessite aucun matériel', 'is_correct' => false],
                            ['choice_text' => 'Le service fonctionne sans réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un exemple d’utilisation serverless ?',
                        'explanation' => 'Une fonction cloud déclenchée par un événement est un exemple typique de modèle serverless.',
                        'choices' => [
                            ['choice_text' => 'Une fonction exécutée lorsqu’un fichier est ajouté à un stockage', 'is_correct' => true],
                            ['choice_text' => 'Un serveur physique administré manuellement', 'is_correct' => false],
                            ['choice_text' => 'Un poste de travail local', 'is_correct' => false],
                            ['choice_text' => 'Un câble réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les conteneurs ne doivent-ils pas être considérés comme une frontière de sécurité parfaite ?',
                        'explanation' => 'Les conteneurs partagent généralement le noyau de l’hôte et une mauvaise configuration peut réduire l’isolation. Ils nécessitent donc leurs propres contrôles de sécurité.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une mauvaise configuration ou une vulnérabilité peut affecter l’isolation', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils n’ont aucune limite réseau', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils ne peuvent jamais être surveillés', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils exécutent toujours des logiciels malveillants', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est important lorsqu’un conteneur exécute une application en production ?',
                        'explanation' => 'L’application doit disposer du minimum de permissions nécessaires. Réduire les privilèges limite l’impact potentiel d’une compromission.',
                        'choices' => [
                            ['choice_text' => 'Exécuter l’application avec les privilèges minimaux nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Exécuter systématiquement le conteneur avec tous les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Partager les secrets dans une image publique', 'is_correct' => false],
                            ['choice_text' => 'Désactiver toute journalisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage principal peut offrir le serverless pour une application événementielle ?',
                        'explanation' => 'Le modèle serverless permet au fournisseur de gérer une grande partie de l’infrastructure et de faire varier automatiquement les ressources selon les besoins du service.',
                        'choices' => [
                            ['choice_text' => 'Exécuter du code en fonction des événements sans gérer directement toute l’infrastructure', 'is_correct' => true],
                            ['choice_text' => 'Garantir une absence totale de coûts', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tout besoin de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Rendre les fonctions accessibles sans authentification', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Élasticité, disponibilité et résilience Cloud',
                'description' => 'Comprenez l’élasticité, la haute disponibilité, la redondance et les stratégies de récupération dans le cloud.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Que signifie l’élasticité dans le cloud ?',
                        'explanation' => 'L’élasticité correspond à la capacité d’ajuster les ressources selon les besoins, en les augmentant ou en les réduisant.',
                        'choices' => [
                            ['choice_text' => 'Adapter les ressources à l’évolution de la demande', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute modification des ressources', 'is_correct' => false],
                            ['choice_text' => 'Utiliser obligatoirement une infrastructure physique unique', 'is_correct' => false],
                            ['choice_text' => 'Rendre tous les services publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence existe entre élasticité et disponibilité ?',
                        'explanation' => 'L’élasticité concerne l’adaptation de capacité, tandis que la disponibilité concerne la capacité d’un service à rester accessible et fonctionnel.',
                        'choices' => [
                            ['choice_text' => 'L’élasticité concerne l’adaptation de capacité, la disponibilité concerne l’accessibilité du service', 'is_correct' => true],
                            ['choice_text' => 'Les deux termes signifient exactement la même chose', 'is_correct' => false],
                            ['choice_text' => 'La disponibilité concerne uniquement le stockage', 'is_correct' => false],
                            ['choice_text' => 'L’élasticité signifie toujours sauvegarde', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser plusieurs instances d’une application ?',
                        'explanation' => 'Plusieurs instances permettent notamment de répartir les requêtes et de continuer le service lorsqu’une instance devient indisponible.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la disponibilité et répartir la charge', 'is_correct' => true],
                            ['choice_text' => 'Supprimer le besoin de surveillance', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute mise à jour', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucune application ne tombera jamais en panne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi répartir des ressources entre plusieurs zones de disponibilité peut-il améliorer la résilience ?',
                        'explanation' => 'Une panne affectant une zone ne touche pas nécessairement les autres, ce qui permet à une application redondante de continuer à fonctionner.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque qu’une panne d’une seule zone rende le service indisponible', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement tous les coûts', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute utilisation du réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un load balancer dans une architecture hautement disponible ?',
                        'explanation' => 'Le load balancer répartit les requêtes entre plusieurs instances et peut retirer du trafic une instance indisponible.',
                        'choices' => [
                            ['choice_text' => 'Répartir les requêtes et éviter d’envoyer du trafic vers des instances indisponibles', 'is_correct' => true],
                            ['choice_text' => 'Créer les mots de passe des utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toutes les attaques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture redondante doit-elle être testée ?',
                        'explanation' => 'Une architecture théoriquement redondante peut comporter des erreurs de configuration ou des dépendances cachées. Les tests de bascule permettent de vérifier son comportement réel.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que la bascule fonctionne réellement en cas de panne', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute modification future', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les ressources secondaires', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver la supervision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le but principal d’une stratégie de disaster recovery ?',
                        'explanation' => 'Disaster recovery vise à restaurer les systèmes et services après une interruption importante ou une catastrophe.',
                        'choices' => [
                            ['choice_text' => 'Restaurer les services et données après une interruption majeure', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute erreur humaine', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la cybersécurité préventive', 'is_correct' => false],
                            ['choice_text' => 'Rendre toutes les applications publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une sauvegarde située dans le même environnement que les systèmes de production peut-elle être vulnérable ?',
                        'explanation' => 'Une compromission ou une erreur affectant l’environnement de production peut également atteindre les sauvegardes accessibles depuis celui-ci.',
                        'choices' => [
                            ['choice_text' => 'Un même incident peut affecter les systèmes et leurs sauvegardes', 'is_correct' => true],
                            ['choice_text' => 'Une sauvegarde locale est toujours inutilisable', 'is_correct' => false],
                            ['choice_text' => 'Les sauvegardes cloud ne peuvent jamais être isolées', 'is_correct' => false],
                            ['choice_text' => 'Le stockage ne peut pas être chiffré', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il définir des objectifs RTO et RPO ?',
                        'explanation' => 'Ils permettent de préciser les attentes de reprise et de perte de données acceptables afin de concevoir une architecture et une stratégie de sauvegarde adaptées.',
                        'choices' => [
                            ['choice_text' => 'Pour définir les objectifs de temps de reprise et de perte de données acceptable', 'is_correct' => true],
                            ['choice_text' => 'Pour choisir la couleur des dashboards', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les contrôles IAM', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver le réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un mécanisme d’auto-scaling ?',
                        'explanation' => 'L’auto-scaling ajuste automatiquement la quantité de ressources en fonction de règles ou de signaux de charge.',
                        'choices' => [
                            ['choice_text' => 'Adapter automatiquement la capacité à la charge', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute variation de trafic', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de supervision', 'is_correct' => false],
                            ['choice_text' => 'Rendre l’application automatiquement sécurisée', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Administration et bonnes pratiques Cloud',
                'description' => 'Appliquez les bonnes pratiques fondamentales de gestion, surveillance, coûts et sécurité dans un environnement cloud.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi est-il important de supprimer les ressources cloud inutilisées ?',
                        'explanation' => 'Les ressources inutilisées peuvent continuer à générer des coûts et augmenter inutilement la surface d’administration et d’exposition.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire les coûts et limiter les ressources inutilement exposées', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter le nombre de comptes', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le réseau public', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt du tagging des ressources cloud ?',
                        'explanation' => 'Les tags permettent notamment de classer les ressources par équipe, environnement, application ou centre de coût.',
                        'choices' => [
                            ['choice_text' => 'Identifier et organiser les ressources pour faciliter la gestion', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer automatiquement les ressources', 'is_correct' => false],
                            ['choice_text' => 'Créer des comptes administrateurs', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les pannes matérielles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller les coûts cloud ?',
                        'explanation' => 'Les services cloud sont souvent facturés selon l’usage. Une consommation inattendue peut donc entraîner une augmentation importante des dépenses.',
                        'choices' => [
                            ['choice_text' => 'Pour détecter les consommations inattendues et maîtriser les dépenses', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les contrôles de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute élasticité', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre toutes les ressources gratuites', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un dashboard de monitoring cloud ?',
                        'explanation' => 'Les dashboards permettent de visualiser des métriques et événements utiles pour surveiller l’état des services et détecter des anomalies.',
                        'choices' => [
                            ['choice_text' => 'Visualiser les performances, événements et indicateurs des ressources', 'is_correct' => true],
                            ['choice_text' => 'Remplacer automatiquement les administrateurs', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toutes les attaques', 'is_correct' => false],
                            ['choice_text' => 'Stocker uniquement des mots de passe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des rôles plutôt que des clés permanentes lorsque la plateforme cloud le permet ?',
                        'explanation' => 'Les rôles peuvent fournir des permissions temporaires et éviter la gestion de certaines clés longues durées.',
                        'choices' => [
                            ['choice_text' => 'Réduire la dépendance aux secrets permanents', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les permissions', 'is_correct' => false],
                            ['choice_text' => 'Rendre les services publics', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les utilisateurs de s’authentifier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer les environnements de développement, test et production ?',
                        'explanation' => 'La séparation réduit le risque qu’une erreur ou une compromission dans un environnement moins contrôlé affecte directement la production.',
                        'choices' => [
                            ['choice_text' => 'Pour limiter les effets d’une erreur ou d’une compromission entre environnements', 'is_correct' => true],
                            ['choice_text' => 'Pour partager les mêmes identifiants partout', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute automatisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage offre l’automatisation de la création d’infrastructure cloud ?',
                        'explanation' => 'L’automatisation rend les déploiements reproductibles et limite certaines erreurs manuelles.',
                        'choices' => [
                            ['choice_text' => 'Rendre les déploiements plus reproductibles et réduire certaines erreurs manuelles', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement tous les risques', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute surveillance', 'is_correct' => false],
                            ['choice_text' => 'Créer des ressources sans aucune configuration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il documenter les ressources cloud critiques ?',
                        'explanation' => 'Une documentation correcte facilite l’exploitation, la sécurité, la récupération et la compréhension des dépendances.',
                        'choices' => [
                            ['choice_text' => 'Pour comprendre leur rôle, leurs dépendances et les procédures associées', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre leurs configurations publiques', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les journaux', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une politique de sauvegarde cloud ?',
                        'explanation' => 'Une politique définit notamment quelles données doivent être sauvegardées, à quelle fréquence et pendant combien de temps elles doivent être conservées.',
                        'choices' => [
                            ['choice_text' => 'Définir une stratégie cohérente de protection et de récupération des données', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les données anciennes immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Donner accès aux sauvegardes à tous les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les contrôles de sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les ressources cloud doivent-elles être surveillées après leur déploiement ?',
                        'explanation' => 'Une configuration correcte au départ peut évoluer. La surveillance permet de détecter les changements, anomalies, problèmes de performance et événements de sécurité.',
                        'choices' => [
                            ['choice_text' => 'Parce que leur état, configuration et comportement peuvent évoluer dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une ressource cloud devient automatiquement publique après son déploiement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il est impossible de conserver une configuration stable', 'is_correct' => false],
                            ['choice_text' => 'Parce que les logs ne peuvent être produits qu’avant le déploiement', 'is_correct' => false],
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

                $choices = $questionData['choices'];

                /*
                 * Shuffle complete choice records so the correct answer
                 * remains attached to the correct choice text.
                 */
                shuffle($choices);

                foreach ($choices as $choiceIndex => $choice) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $choice['choice_text'],
                        'is_correct' => $choice['is_correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }
}