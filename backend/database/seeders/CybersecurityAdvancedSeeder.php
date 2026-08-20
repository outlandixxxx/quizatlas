<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;

class CybersecurityAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'cybersecurity')->firstOrFail();

        $quizzes = [

            /*
            |--------------------------------------------------------------------------
            | 1. Architecture de sécurité et Zero Trust
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Architecture Zero Trust et segmentation avancée',
                'description' => 'Évaluation des choix d’architecture, de segmentation et de contrôle d’accès dans des environnements complexes.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [

                    [
                        'question' => 'Dans une architecture Zero Trust, quel principe doit guider l’accès à une ressource interne ?',
                        'explanation' => 'Zero Trust considère que la localisation réseau ne suffit pas à établir la confiance. L’accès doit être évalué selon l’identité, le contexte, l’état du terminal et la sensibilité de la ressource.',
                        'choices' => [
                            ['choice_text' => 'Accorder automatiquement l’accès parce que la machine se trouve sur le réseau interne', 'is_correct' => false],
                            ['choice_text' => 'Évaluer explicitement chaque demande selon son identité et son contexte', 'is_correct' => true],
                            ['choice_text' => 'Autoriser tous les utilisateurs authentifiés sans autre contrôle', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toute authentification par une segmentation réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal intérêt d’une microsegmentation par rapport à une simple segmentation en VLAN ?',
                        'explanation' => 'La microsegmentation permet d’appliquer des politiques beaucoup plus fines entre charges de travail, y compris lorsque plusieurs applications partagent le même réseau physique ou virtuel.',
                        'choices' => [
                            ['choice_text' => 'Réduire le nombre d’adresses IP disponibles', 'is_correct' => false],
                            ['choice_text' => 'Appliquer des politiques de sécurité fines entre charges de travail', 'is_correct' => true],
                            ['choice_text' => 'Supprimer la nécessité d’authentifier les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute communication réseau externe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application compromise peut communiquer librement avec plusieurs autres services internes. Quelle faiblesse architecturale cela révèle-t-il principalement ?',
                        'explanation' => 'Une compromission latérale facilitée par de nombreuses communications autorisées indique généralement une segmentation insuffisante et un manque de contrôle des flux entre services.',
                        'choices' => [
                            ['choice_text' => 'Une absence de compression réseau', 'is_correct' => false],
                            ['choice_text' => 'Une segmentation et une politique de flux insuffisantes', 'is_correct' => true],
                            ['choice_text' => 'Une mauvaise résolution DNS publique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une utilisation excessive du chiffrement TLS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle Zero Trust, pourquoi l’état de sécurité du terminal peut-il influencer une décision d’accès ?',
                        'explanation' => 'Un compte correctement authentifié ne garantit pas que le terminal est sûr. Un appareil non corrigé ou compromis peut présenter un risque élevé même si l’identité de son utilisateur est valide.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’adresse MAC remplace l’identité utilisateur', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un terminal compromis peut être utilisé pour exploiter une identité légitime', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un terminal sécurisé n’a pas besoin de chiffrement', 'is_correct' => false],
                            ['choice_text' => 'Parce que Zero Trust interdit tous les appareils mobiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel contrôle limite le mieux le risque associé à un compte administrateur utilisé quotidiennement pour des tâches ordinaires ?',
                        'explanation' => 'La séparation entre comptes standards et comptes privilégiés réduit l’exposition des privilèges élevés aux activités quotidiennes, notamment à la navigation et à la messagerie.',
                        'choices' => [
                            ['choice_text' => 'Utiliser systématiquement le compte administrateur pour simplifier les opérations', 'is_correct' => false],
                            ['choice_text' => 'Séparer les comptes standards et privilégiés et n’élever les privilèges qu’au besoin', 'is_correct' => true],
                            ['choice_text' => 'Désactiver les journaux du compte administrateur', 'is_correct' => false],
                            ['choice_text' => 'Partager un compte administrateur entre les opérateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture de défense en profondeur reste-t-elle pertinente lorsqu’un pare-feu périmétrique est déjà présent ?',
                        'explanation' => 'Un contrôle unique peut être contourné ou mal configuré. La défense en profondeur ajoute plusieurs barrières indépendantes afin qu’une défaillance n’entraîne pas immédiatement une compromission complète.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un pare-feu ne peut jamais filtrer aucun trafic', 'is_correct' => false],
                            ['choice_text' => 'Parce que plusieurs contrôles indépendants réduisent l’impact d’une défaillance unique', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle supprime la nécessité de corriger les systèmes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle garantit qu’aucune attaque ne réussira', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel choix est le plus cohérent pour protéger une API interne appelée par plusieurs microservices sensibles ?',
                        'explanation' => 'L’identité du service appelant doit être vérifiable et les permissions doivent être limitées à ce qui est nécessaire. Une simple confiance basée sur l’adresse IP offre une protection insuffisante.',
                        'choices' => [
                            ['choice_text' => 'Autoriser les appels selon l’adresse IP uniquement', 'is_correct' => false],
                            ['choice_text' => 'Authentifier les services et appliquer une autorisation granulaire', 'is_correct' => true],
                            ['choice_text' => 'Désactiver TLS puisque le trafic reste interne', 'is_correct' => false],
                            ['choice_text' => 'Utiliser un compte partagé pour tous les microservices', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’une segmentation basée uniquement sur le périmètre réseau dans un environnement cloud moderne ?',
                        'explanation' => 'Les ressources cloud sont distribuées et peuvent communiquer à travers plusieurs réseaux et services. Le périmètre traditionnel ne suffit donc plus à représenter les frontières de confiance.',
                        'choices' => [
                            ['choice_text' => 'Le périmètre peut ne plus correspondre aux véritables relations entre ressources et identités', 'is_correct' => true],
                            ['choice_text' => 'Les certificats TLS deviennent automatiquement invalides', 'is_correct' => false],
                            ['choice_text' => 'Les utilisateurs ne peuvent plus utiliser MFA', 'is_correct' => false],
                            ['choice_text' => 'Les journaux deviennent impossibles à générer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe veut réduire le mouvement latéral après la compromission d’un serveur applicatif. Quelle stratégie est la plus adaptée ?',
                        'explanation' => 'Limiter explicitement les communications autorisées entre composants réduit la possibilité pour un attaquant de progresser d’un système compromis vers des ressources qui ne sont pas nécessaires au fonctionnement de l’application.',
                        'choices' => [
                            ['choice_text' => 'Autoriser tous les flux internes pour éviter les problèmes applicatifs', 'is_correct' => false],
                            ['choice_text' => 'Définir des flux minimaux entre services selon leurs dépendances réelles', 'is_correct' => true],
                            ['choice_text' => 'Désactiver la journalisation des communications internes', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement un antivirus sur le serveur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis doit être particulièrement évalué lors de la microsegmentation d’un grand environnement ?',
                        'explanation' => 'Une segmentation très fine améliore le contrôle mais augmente également la complexité opérationnelle. Les dépendances doivent donc être cartographiées et les politiques maintenables à long terme.',
                        'choices' => [
                            ['choice_text' => 'Le nombre de couleurs utilisées dans les tableaux de bord', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de réduction du risque par rapport à la complexité opérationnelle', 'is_correct' => true],
                            ['choice_text' => 'La taille des écrans des administrateurs', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de noms DNS publics', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 2. Active Directory et identité
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Sécurité avancée des identités et Active Directory',
                'description' => 'Analyse des attaques et des mécanismes de défense autour des identités, des privilèges et d’Active Directory.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [

                    [
                        'question' => 'Pourquoi le Kerberoasting peut-il être dangereux dans un environnement Active Directory ?',
                        'explanation' => 'Un utilisateur authentifié peut demander des tickets Kerberos pour certains comptes de service et tenter de casser hors ligne les informations cryptographiques associées lorsque les mots de passe sont faibles.',
                        'choices' => [
                            ['choice_text' => 'Il permet de supprimer directement tous les contrôleurs de domaine', 'is_correct' => false],
                            ['choice_text' => 'Il peut permettre de récupérer hors ligne des secrets associés à des comptes de service', 'is_correct' => true],
                            ['choice_text' => 'Il désactive automatiquement MFA sur tous les comptes', 'is_correct' => false],
                            ['choice_text' => 'Il exploite exclusivement des vulnérabilités physiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel contrôle réduit directement le risque de Kerberoasting réussi contre les comptes de service ?',
                        'explanation' => 'Des mots de passe longs et résistants au cracking rendent beaucoup plus difficile l’exploitation hors ligne des tickets récupérés. Les comptes de service doivent également utiliser des mécanismes adaptés comme les gMSA lorsque cela est possible.',
                        'choices' => [
                            ['choice_text' => 'Utiliser des mots de passe longs et gérés pour les comptes de service', 'is_correct' => true],
                            ['choice_text' => 'Désactiver DNS sur les contrôleurs de domaine', 'is_correct' => false],
                            ['choice_text' => 'Autoriser les comptes de service à utiliser des mots de passe courts', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute journalisation Kerberos', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit le mieux une attaque Pass-the-Hash ?',
                        'explanation' => 'Pass-the-Hash exploite la possibilité d’utiliser un hash d’authentification récupéré pour s’authentifier sans connaître nécessairement le mot de passe en clair.',
                        'choices' => [
                            ['choice_text' => 'L’attaquant utilise un hash d’authentification volé pour tenter une authentification', 'is_correct' => true],
                            ['choice_text' => 'L’attaquant chiffre un disque avec un hash aléatoire', 'is_correct' => false],
                            ['choice_text' => 'L’attaquant remplace DNS par HTTP', 'is_correct' => false],
                            ['choice_text' => 'L’attaquant exploite uniquement des mots de passe expirés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe réduit le plus efficacement l’impact d’une compromission d’un compte privilégié Active Directory ?',
                        'explanation' => 'La réduction du périmètre des privilèges et la séparation des rôles limitent les actions qu’un compte compromis peut effectuer et rendent les chemins d’escalade plus difficiles.',
                        'choices' => [
                            ['choice_text' => 'Attribuer les privilèges administratifs permanents à davantage d’utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Appliquer le moindre privilège et séparer les comptes administratifs', 'is_correct' => true],
                            ['choice_text' => 'Utiliser le même compte pour l’administration et la messagerie', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les journaux de connexion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les comptes de service possédant des privilèges excessifs représentent-ils un risque majeur ?',
                        'explanation' => 'Un compte de service compromis peut être exploité automatiquement par un attaquant et ses privilèges peuvent fournir un chemin direct vers des ressources critiques.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils ne peuvent jamais être journalisés', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une compromission du service peut donner accès à des ressources dépassant ses besoins réels', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils utilisent toujours HTTP', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils empêchent toute segmentation réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel signal peut être particulièrement pertinent pour détecter une tentative de mouvement latéral dans Active Directory ?',
                        'explanation' => 'Des authentifications inhabituelles, notamment depuis des hôtes inattendus ou vers des systèmes rarement utilisés par un compte, peuvent révéler une progression latérale.',
                        'choices' => [
                            ['choice_text' => 'Une modification de la résolution d’écran', 'is_correct' => false],
                            ['choice_text' => 'Des authentifications inhabituelles entre plusieurs hôtes', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation de la luminosité du moniteur', 'is_correct' => false],
                            ['choice_text' => 'Une baisse de la taille des fichiers temporaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’une stratégie tiering pour les comptes administratifs ?',
                        'explanation' => 'Le tiering sépare les niveaux de privilèges afin qu’un poste ou un compte utilisé dans une zone moins sensible ne puisse pas facilement compromettre des identités administratives de niveau supérieur.',
                        'choices' => [
                            ['choice_text' => 'Augmenter le nombre de comptes administrateurs', 'is_correct' => false],
                            ['choice_text' => 'Empêcher l’utilisation de privilèges élevés dans des contextes moins fiables', 'is_correct' => true],
                            ['choice_text' => 'Désactiver Kerberos', 'is_correct' => false],
                            ['choice_text' => 'Remplacer Active Directory par DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème une délégation Active Directory mal configurée peut-elle créer ?',
                        'explanation' => 'Une délégation excessive peut permettre à une identité ou à un service de réaliser des opérations d’authentification ou d’administration qui dépassent son rôle prévu, créant ainsi des chemins d’escalade.',
                        'choices' => [
                            ['choice_text' => 'Une augmentation automatique de la bande passante', 'is_correct' => false],
                            ['choice_text' => 'Un chemin d’escalade de privilèges', 'is_correct' => true],
                            ['choice_text' => 'Une désactivation automatique du chiffrement disque', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des enregistrements DNS publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les comptes administratifs devraient-ils idéalement être protégés par MFA lorsque l’architecture le permet ?',
                        'explanation' => 'MFA ajoute un facteur supplémentaire qui réduit l’impact d’un mot de passe compromis. Il ne remplace toutefois pas le moindre privilège ni les contrôles spécifiques aux comptes privilégiés.',
                        'choices' => [
                            ['choice_text' => 'Parce que MFA empêche toutes les vulnérabilités logicielles', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un mot de passe compromis ne suffit alors plus nécessairement à authentifier l’attaquant', 'is_correct' => true],
                            ['choice_text' => 'Parce que MFA supprime le besoin de journalisation', 'is_correct' => false],
                            ['choice_text' => 'Parce que MFA remplace automatiquement les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’un compte privilégié présente soudainement des connexions depuis un poste utilisateur standard, quelle réaction est la plus appropriée ?',
                        'explanation' => 'Une telle anomalie peut indiquer un vol d’identifiants ou une mauvaise pratique opérationnelle. Il faut corréler les événements, vérifier le contexte et contenir rapidement le compte si une compromission est plausible.',
                        'choices' => [
                            ['choice_text' => 'Ignorer l’événement puisqu’il utilise un compte valide', 'is_correct' => false],
                            ['choice_text' => 'Analyser l’événement, vérifier le contexte et déclencher une réponse si la compromission est suspectée', 'is_correct' => true],
                            ['choice_text' => 'Désactiver définitivement tous les comptes administrateurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les journaux pour éviter les faux positifs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 3. Sécurité applicative avancée
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Vulnérabilités applicatives et sécurité des API',
                'description' => 'Analyse de vulnérabilités applicatives avancées, des API et des mécanismes de protection.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [

                    [
                        'question' => 'Une API permet à un utilisateur de modifier directement l’identifiant d’une ressource dans une requête. Quel contrôle est essentiel contre un IDOR ?',
                        'explanation' => 'L’application doit vérifier côté serveur que l’utilisateur courant possède réellement le droit d’accéder à la ressource demandée. Masquer ou encoder l’identifiant ne constitue pas un contrôle d’autorisation.',
                        'choices' => [
                            ['choice_text' => 'Encoder l’identifiant en Base64 uniquement', 'is_correct' => false],
                            ['choice_text' => 'Vérifier côté serveur l’autorisation sur la ressource demandée', 'is_correct' => true],
                            ['choice_text' => 'Changer régulièrement le format JSON', 'is_correct' => false],
                            ['choice_text' => 'Masquer l’identifiant uniquement dans l’interface', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’une vulnérabilité SSRF dans une application hébergée dans le cloud ?',
                        'explanation' => 'Une SSRF peut permettre au serveur compromis d’effectuer des requêtes vers des ressources internes qui ne sont pas directement accessibles depuis Internet, notamment certains services de métadonnées.',
                        'choices' => [
                            ['choice_text' => 'L’augmentation automatique de la résolution DNS', 'is_correct' => false],
                            ['choice_text' => 'L’accès indirect à des services internes ou à des métadonnées sensibles', 'is_correct' => true],
                            ['choice_text' => 'La corruption obligatoire de toutes les bases SQL', 'is_correct' => false],
                            ['choice_text' => 'La suppression automatique des certificats TLS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme réduit le risque d’une SSRF lorsqu’une application doit accepter des URLs externes ?',
                        'explanation' => 'La validation stricte des destinations, la limitation des schémas et des réseaux accessibles ainsi que les contrôles de résolution DNS réduisent la capacité de l’attaquant à utiliser le serveur comme proxy vers des ressources internes.',
                        'choices' => [
                            ['choice_text' => 'Autoriser toutes les URLs tant qu’elles utilisent HTTP', 'is_correct' => false],
                            ['choice_text' => 'Appliquer une allowlist de destinations et restreindre les réseaux accessibles', 'is_correct' => true],
                            ['choice_text' => 'Désactiver les logs HTTP', 'is_correct' => false],
                            ['choice_text' => 'Encoder toutes les URLs en Base64', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le danger principal d’une désérialisation non sûre de données contrôlées par un attaquant ?',
                        'explanation' => 'Selon le langage et la bibliothèque utilisés, une désérialisation non sûre peut provoquer l’exécution de chaînes d’objets contrôlées par l’attaquant et conduire à une exécution de code ou à d’autres impacts graves.',
                        'choices' => [
                            ['choice_text' => 'Une simple augmentation de la taille des polices', 'is_correct' => false],
                            ['choice_text' => 'Une exécution de code ou une manipulation dangereuse d’objets', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration automatique de la disponibilité', 'is_correct' => false],
                            ['choice_text' => 'Une suppression obligatoire des certificats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une validation d’entrée côté client ne suffit-elle pas pour protéger une API ?',
                        'explanation' => 'Le client peut être modifié ou contourné. Toute donnée reçue par le serveur doit donc être considérée comme non fiable et validée côté serveur selon les règles métier et techniques.',
                        'choices' => [
                            ['choice_text' => 'Parce que le client peut être contourné ou manipulé', 'is_correct' => true],
                            ['choice_text' => 'Parce que JSON ne peut jamais être validé', 'is_correct' => false],
                            ['choice_text' => 'Parce que TLS désactive les validations', 'is_correct' => false],
                            ['choice_text' => 'Parce que les navigateurs bloquent toutes les API sécurisées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel contrôle est le plus approprié pour limiter l’impact d’une compromission d’un token d’API ?',
                        'explanation' => 'Des tokens courts, limités en portée et correctement révoquables réduisent la fenêtre et le périmètre d’utilisation d’un secret volé.',
                        'choices' => [
                            ['choice_text' => 'Utiliser un token permanent possédant tous les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Limiter la durée et les permissions du token selon son usage', 'is_correct' => true],
                            ['choice_text' => 'Mettre le token dans le nom de domaine', 'is_correct' => false],
                            ['choice_text' => 'Désactiver la journalisation des appels API', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique CORS permissive ne constitue-t-elle pas à elle seule une faille d’authentification ?',
                        'explanation' => 'CORS contrôle principalement quels scripts exécutés dans un navigateur peuvent lire certaines réponses. Il ne remplace pas les contrôles d’authentification et d’autorisation côté serveur.',
                        'choices' => [
                            ['choice_text' => 'Parce que CORS remplace toujours les ACL serveur', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’autorisation doit rester appliquée côté serveur indépendamment de CORS', 'is_correct' => true],
                            ['choice_text' => 'Parce que CORS chiffre automatiquement toutes les requêtes', 'is_correct' => false],
                            ['choice_text' => 'Parce que CORS désactive JavaScript', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut provoquer une mauvaise gestion des permissions dans une API REST ?',
                        'explanation' => 'Une API peut exposer une fonctionnalité correcte techniquement mais dangereuse si elle ne vérifie pas si l’identité appelante possède le droit d’effectuer l’opération sur la ressource concernée.',
                        'choices' => [
                            ['choice_text' => 'Une élévation fonctionnelle permettant d’effectuer des opérations non autorisées', 'is_correct' => true],
                            ['choice_text' => 'Une réduction obligatoire de la taille des paquets', 'is_correct' => false],
                            ['choice_text' => 'Une impossibilité d’utiliser HTTPS', 'is_correct' => false],
                            ['choice_text' => 'Une désactivation automatique de DNSSEC', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe réduit le risque lié aux secrets utilisés par une application en production ?',
                        'explanation' => 'Les secrets doivent être séparés du code source, accessibles uniquement aux composants qui en ont besoin et renouvelables sans modifier directement le code applicatif.',
                        'choices' => [
                            ['choice_text' => 'Stocker les secrets directement dans le dépôt Git privé', 'is_correct' => false],
                            ['choice_text' => 'Utiliser un gestionnaire de secrets avec contrôle d’accès et rotation', 'is_correct' => true],
                            ['choice_text' => 'Mettre les secrets dans les commentaires du code', 'is_correct' => false],
                            ['choice_text' => 'Utiliser le même secret pour tous les environnements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application utilise une requête SQL paramétrée mais construit dynamiquement le nom de la table à partir d’une entrée utilisateur. Quel risque subsiste ?',
                        'explanation' => 'Les paramètres SQL protègent les valeurs, mais les identifiants SQL comme les noms de tables ne sont généralement pas paramétrables de la même manière. Une allowlist des identifiants autorisés est nécessaire.',
                        'choices' => [
                            ['choice_text' => 'Aucun risque puisque toute requête paramétrée est automatiquement sûre', 'is_correct' => false],
                            ['choice_text' => 'Un risque lié à la construction dynamique d’identifiants SQL non contrôlés', 'is_correct' => true],
                            ['choice_text' => 'Uniquement un risque de compression réseau', 'is_correct' => false],
                            ['choice_text' => 'Un risque uniquement lié aux certificats TLS', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 4. Cryptographie et protection des données
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Cryptographie appliquée et protection des données',
                'description' => 'Évaluation des choix cryptographiques, de la gestion des clés et de la protection des données sensibles.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [

                    [
                        'question' => 'Quel est l’avantage principal d’un mode de chiffrement authentifié comme AES-GCM ?',
                        'explanation' => 'AES-GCM fournit à la fois la confidentialité et l’authentification de l’intégrité des données, ce qui permet de détecter une modification non autorisée du ciphertext.',
                        'choices' => [
                            ['choice_text' => 'Il fournit uniquement de la compression', 'is_correct' => false],
                            ['choice_text' => 'Il combine confidentialité et authentification de l’intégrité', 'is_correct' => true],
                            ['choice_text' => 'Il remplace tous les mécanismes de gestion des clés', 'is_correct' => false],
                            ['choice_text' => 'Il garantit que la clé ne sera jamais compromise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la réutilisation d’un nonce avec AES-GCM est-elle dangereuse ?',
                        'explanation' => 'GCM dépend de l’unicité du nonce pour préserver ses garanties cryptographiques. Une réutilisation avec la même clé peut compromettre l’intégrité et révéler des informations sur les messages.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle augmente uniquement la taille des messages', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle peut compromettre les garanties de confidentialité et d’intégrité', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle désactive automatiquement TLS', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle transforme AES en hash', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les mots de passe utilisateurs ne devraient-ils généralement pas être chiffrés avec une clé réversible ?',
                        'explanation' => 'Le système n’a pas besoin de récupérer le mot de passe original pour vérifier une authentification. Une fonction de dérivation de clé adaptée aux mots de passe permet de résister davantage au cracking hors ligne.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un mot de passe ne doit jamais être stocké sous une forme récupérable', 'is_correct' => true],
                            ['choice_text' => 'Parce que AES ne fonctionne qu’avec des images', 'is_correct' => false],
                            ['choice_text' => 'Parce que les hashes sont toujours réversibles', 'is_correct' => false],
                            ['choice_text' => 'Parce que TLS interdit le stockage des mots de passe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme est spécifiquement conçu pour rendre le cracking hors ligne des mots de passe plus coûteux ?',
                        'explanation' => 'Les fonctions comme Argon2id, bcrypt ou scrypt intègrent des paramètres de coût destinés à rendre chaque tentative de dérivation plus coûteuse en temps ou en ressources.',
                        'choices' => [
                            ['choice_text' => 'Une fonction de dérivation de mot de passe avec coût configurable', 'is_correct' => true],
                            ['choice_text' => 'Une simple fonction CRC', 'is_correct' => false],
                            ['choice_text' => 'Une compression ZIP', 'is_correct' => false],
                            ['choice_text' => 'Une résolution DNS plus rapide', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un HSM dans une architecture de gestion cryptographique ?',
                        'explanation' => 'Un HSM fournit un environnement matériel spécialisé pour protéger certaines clés et effectuer des opérations cryptographiques avec des contrôles renforcés sur leur utilisation.',
                        'choices' => [
                            ['choice_text' => 'Fournir un stockage général de fichiers utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Protéger des clés cryptographiques et réaliser certaines opérations sensibles', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les pare-feu réseau', 'is_correct' => false],
                            ['choice_text' => 'Analyser les vulnérabilités applicatives automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la rotation des clés cryptographiques est-elle importante ?',
                        'explanation' => 'Une rotation limite la durée pendant laquelle une clé compromise peut être exploitée et réduit la quantité de données ou d’opérations dépendant d’une même clé.',
                        'choices' => [
                            ['choice_text' => 'Elle garantit qu’une clé ne pourra jamais être volée', 'is_correct' => false],
                            ['choice_text' => 'Elle limite la durée et le périmètre d’impact d’une compromission de clé', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime le besoin de contrôle d’accès', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace automatiquement les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut survenir si une organisation chiffre ses données mais conserve les clés dans le même système de confiance que les données ?',
                        'explanation' => 'Si un attaquant compromet simultanément les données et les clés, le chiffrement au repos offre une protection beaucoup plus faible. La séparation des responsabilités et des domaines de confiance renforce le modèle.',
                        'choices' => [
                            ['choice_text' => 'La compression devient impossible', 'is_correct' => false],
                            ['choice_text' => 'Une compromission commune peut permettre de récupérer les données en clair', 'is_correct' => true],
                            ['choice_text' => 'Les utilisateurs ne peuvent plus s’authentifier', 'is_correct' => false],
                            ['choice_text' => 'DNS devient obligatoirement non sécurisé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un certificat dans TLS ?',
                        'explanation' => 'Le certificat permet notamment d’associer une identité à une clé publique via une chaîne de confiance. Il ne chiffre pas directement tout le trafic applicatif à lui seul.',
                        'choices' => [
                            ['choice_text' => 'Prouver une identité associée à une clé publique selon une chaîne de confiance', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les mots de passe utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Stocker les sauvegardes de l’application', 'is_correct' => false],
                            ['choice_text' => 'Détecter tous les malwares sur le poste client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la gestion du cycle de vie des certificats est-elle un enjeu opérationnel important ?',
                        'explanation' => 'Un certificat expiré peut provoquer des interruptions de service, tandis qu’un certificat compromis doit être révoqué ou remplacé rapidement. L’automatisation réduit le risque d’erreur humaine.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un certificat n’expire jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une expiration ou une compromission peut affecter la disponibilité et la confiance', 'is_correct' => true],
                            ['choice_text' => 'Parce que TLS dépend uniquement du DNS', 'is_correct' => false],
                            ['choice_text' => 'Parce que les certificats remplacent les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est le plus important lorsqu’une application doit gérer plusieurs clés cryptographiques ayant des niveaux de sensibilité différents ?',
                        'explanation' => 'Les clés doivent être séparées selon leur usage, leur sensibilité et leur domaine de confiance afin qu’une compromission d’une clé ne permette pas d’accéder inutilement à toutes les données.',
                        'choices' => [
                            ['choice_text' => 'Utiliser une seule clé globale pour simplifier l’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Séparer les clés selon leurs usages et leurs domaines de confiance', 'is_correct' => true],
                            ['choice_text' => 'Mettre toutes les clés dans le code source', 'is_correct' => false],
                            ['choice_text' => 'Partager les clés entre environnements de production et de test', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 5. Détection et réponse aux incidents
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Détection avancée et réponse aux incidents',
                'description' => 'Analyse de scénarios de détection, de corrélation et de réponse à des incidents complexes.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [

                    [
                        'question' => 'Pourquoi la corrélation de plusieurs événements faibles peut-elle être plus utile qu’une seule alerte critique isolée ?',
                        'explanation' => 'Des signaux faibles provenant de plusieurs sources peuvent former une séquence cohérente révélant une attaque que chaque événement pris séparément ne permet pas d’identifier.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une alerte isolée est toujours fausse', 'is_correct' => false],
                            ['choice_text' => 'Parce que plusieurs signaux cohérents peuvent révéler une chaîne d’attaque', 'is_correct' => true],
                            ['choice_text' => 'Parce que la corrélation désactive les journaux', 'is_correct' => false],
                            ['choice_text' => 'Parce que les SIEM ne peuvent traiter qu’un événement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une alerte indique une exécution PowerShell inhabituelle sur un serveur critique. Quelle première action est la plus pertinente ?',
                        'explanation' => 'Il faut préserver le contexte et déterminer si l’activité est légitime avant de conclure à une compromission. Les informations sur le processus, l’utilisateur et la commande sont particulièrement utiles.',
                        'choices' => [
                            ['choice_text' => 'Supprimer immédiatement tous les journaux du serveur', 'is_correct' => false],
                            ['choice_text' => 'Examiner le processus, l’utilisateur, la commande et le contexte d’exécution', 'is_correct' => true],
                            ['choice_text' => 'Redémarrer tous les serveurs de l’organisation', 'is_correct' => false],
                            ['choice_text' => 'Désactiver définitivement PowerShell partout', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de conserver une copie fiable des journaux hors du système potentiellement compromis ?',
                        'explanation' => 'Un attaquant disposant de privilèges élevés peut tenter d’effacer ou de modifier les traces locales. Une copie centralisée et protégée préserve les éléments nécessaires à l’analyse.',
                        'choices' => [
                            ['choice_text' => 'Permettre à l’attaquant de modifier les journaux plus facilement', 'is_correct' => false],
                            ['choice_text' => 'Préserver les preuves même si les journaux locaux sont altérés', 'is_correct' => true],
                            ['choice_text' => 'Réduire automatiquement la consommation CPU', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute authentification des administrateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une procédure de réponse aux incidents doit-elle définir des critères d’escalade ?',
                        'explanation' => 'Les critères d’escalade permettent de déterminer rapidement quand un incident dépasse la capacité d’une équipe et nécessite des spécialistes, la direction ou des acteurs externes.',
                        'choices' => [
                            ['choice_text' => 'Pour empêcher toute communication pendant un incident', 'is_correct' => false],
                            ['choice_text' => 'Pour déclencher rapidement les ressources appropriées selon la gravité', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les preuves inutiles', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’isoler immédiatement un système compromis sans considérer son rôle dans l’incident ?',
                        'explanation' => 'L’isolement peut empêcher une propagation mais peut aussi détruire des preuves volatiles ou interrompre des services critiques. La stratégie doit tenir compte des objectifs de containment et de forensics.',
                        'choices' => [
                            ['choice_text' => 'L’isolement est toujours sans conséquence', 'is_correct' => false],
                            ['choice_text' => 'Il peut faire perdre des preuves volatiles ou provoquer un impact métier important', 'is_correct' => true],
                            ['choice_text' => 'Il empêche définitivement toute récupération', 'is_correct' => false],
                            ['choice_text' => 'Il augmente toujours la persistance de l’attaquant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence fondamentale existe entre containment et eradication lors d’un incident ?',
                        'explanation' => 'Le containment vise à limiter la propagation et l’impact immédiat, tandis que l’éradication cherche à supprimer la cause ou les mécanismes de persistance de l’attaquant.',
                        'choices' => [
                            ['choice_text' => 'Containment limite l’impact ; eradication supprime la présence ou la cause de l’attaque', 'is_correct' => true],
                            ['choice_text' => 'Les deux termes désignent exactement la même action', 'is_correct' => false],
                            ['choice_text' => 'Eradication consiste uniquement à restaurer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Containment signifie supprimer toutes les preuves', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la synchronisation temporelle des systèmes est-elle importante pour un SOC ?',
                        'explanation' => 'Une chronologie fiable est indispensable pour corréler les événements provenant de plusieurs systèmes et reconstruire correctement la séquence d’une attaque.',
                        'choices' => [
                            ['choice_text' => 'Elle accélère directement le chiffrement AES', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de reconstruire et corréler plus précisément la chronologie des événements', 'is_correct' => true],
                            ['choice_text' => 'Elle empêche les attaques DDoS', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace les mécanismes d’authentification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une organisation observe une authentification réussie depuis un pays inhabituel puis une extraction massive de données. Quel élément doit être priorisé dans l’analyse ?',
                        'explanation' => 'La combinaison d’une anomalie d’authentification et d’une exfiltration potentielle est beaucoup plus significative qu’un seul événement isolé. Il faut rechercher les événements associés à la même identité et aux mêmes ressources.',
                        'choices' => [
                            ['choice_text' => 'Uniquement la météo du pays concerné', 'is_correct' => false],
                            ['choice_text' => 'La corrélation entre l’identité, les connexions, les ressources consultées et l’exfiltration', 'is_correct' => true],
                            ['choice_text' => 'La résolution d’écran du poste', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de fichiers temporaires du navigateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est généralement le plus utile pour mesurer l’efficacité opérationnelle d’une équipe SOC ?',
                        'explanation' => 'Des métriques comme le Mean Time to Detect et le Mean Time to Respond permettent d’évaluer la rapidité de détection et de réponse, à condition d’être interprétées avec le contexte et la qualité des alertes.',
                        'choices' => [
                            ['choice_text' => 'Le nombre de couleurs dans le SIEM', 'is_correct' => false],
                            ['choice_text' => 'Le temps moyen de détection et de réponse', 'is_correct' => true],
                            ['choice_text' => 'Le nombre total de fenêtres ouvertes', 'is_correct' => false],
                            ['choice_text' => 'La taille du logo du SOC', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il documenter les décisions prises pendant un incident majeur ?',
                        'explanation' => 'La documentation permet de conserver la chronologie, de justifier les décisions, de faciliter la coordination et d’alimenter le retour d’expérience après l’incident.',
                        'choices' => [
                            ['choice_text' => 'Uniquement pour augmenter la taille des rapports', 'is_correct' => false],
                            ['choice_text' => 'Pour conserver la traçabilité des décisions et améliorer les réponses futures', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les analystes de collaborer', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer automatiquement les alertes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 6. Threat Modeling, Supply Chain et sécurité du développement
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Threat Modeling et sécurité de la chaîne logicielle',
                'description' => 'Évaluation des risques liés à la conception, aux dépendances et à la supply chain logicielle.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [

                    [
                        'question' => 'Dans STRIDE, quelle catégorie correspond principalement à l’usurpation d’une identité ?',
                        'explanation' => 'STRIDE associe Spoofing à l’usurpation d’identité, Tampering à la modification, Repudiation à la non-répudiation, Information Disclosure à la divulgation, Denial of Service à la disponibilité et Elevation of Privilege à l’élévation de privilèges.',
                        'choices' => [
                            ['choice_text' => 'Spoofing', 'is_correct' => true],
                            ['choice_text' => 'Tampering', 'is_correct' => false],
                            ['choice_text' => 'Denial of Service', 'is_correct' => false],
                            ['choice_text' => 'Information Disclosure', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal du Threat Modeling pendant la conception d’un système ?',
                        'explanation' => 'Le Threat Modeling permet d’identifier les menaces et les chemins d’attaque avant la mise en production, lorsque les choix d’architecture sont encore relativement faciles à modifier.',
                        'choices' => [
                            ['choice_text' => 'Identifier les menaces et concevoir des contrôles avant la mise en production', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les tests fonctionnels', 'is_correct' => false],
                            ['choice_text' => 'Optimiser uniquement la vitesse du réseau', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement tous les comptes utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dépendance open source non maintenue représente-t-elle un risque de sécurité ?',
                        'explanation' => 'Une dépendance abandonnée peut contenir des vulnérabilités non corrigées et devenir incompatible avec les contrôles modernes. Elle augmente également le risque de dépendre d’un composant sans capacité de correction.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle utilise toujours du code malveillant', 'is_correct' => false],
                            ['choice_text' => 'Parce que les vulnérabilités peuvent rester non corrigées et le support disparaître', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une licence open source interdit toujours TLS', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle ne peut jamais être testée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel contrôle réduit le risque qu’une dépendance compromise soit introduite dans une chaîne CI/CD ?',
                        'explanation' => 'La vérification des dépendances, la génération de SBOM, la signature des artefacts et des sources fiables permettent de mieux contrôler ce qui entre dans la chaîne logicielle.',
                        'choices' => [
                            ['choice_text' => 'Désactiver toutes les vérifications dans la pipeline', 'is_correct' => false],
                            ['choice_text' => 'Vérifier les dépendances et l’intégrité des artefacts avant leur promotion', 'is_correct' => true],
                            ['choice_text' => 'Utiliser uniquement des noms de packages courts', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs de build', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt principal d’une SBOM ?',
                        'explanation' => 'Une SBOM fournit un inventaire des composants logiciels utilisés. Elle permet notamment d’identifier rapidement les applications potentiellement concernées lorsqu’une vulnérabilité touche une bibliothèque donnée.',
                        'choices' => [
                            ['choice_text' => 'Accélérer automatiquement les applications', 'is_correct' => false],
                            ['choice_text' => 'Connaître les composants logiciels présents dans un produit', 'is_correct' => true],
                            ['choice_text' => 'Remplacer le contrôle d’accès', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toutes les attaques réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les artefacts de build devraient-ils être immuables après leur validation ?',
                        'explanation' => 'L’immutabilité réduit le risque qu’un artefact validé soit remplacé par une version différente entre les étapes de validation et de déploiement.',
                        'choices' => [
                            ['choice_text' => 'Pour empêcher toute modification non contrôlée après validation', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement le nombre de développeurs', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter l’utilisation de Git', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la nécessité de signatures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel scénario illustre le mieux une attaque de supply chain logicielle ?',
                        'explanation' => 'Une supply chain attack exploite la confiance accordée à un fournisseur, une dépendance ou un outil de développement afin d’introduire du code malveillant dans les systèmes en aval.',
                        'choices' => [
                            ['choice_text' => 'Un fournisseur compromis distribue une version malveillante de son composant', 'is_correct' => true],
                            ['choice_text' => 'Un utilisateur oublie son mot de passe', 'is_correct' => false],
                            ['choice_text' => 'Un serveur manque temporairement de mémoire', 'is_correct' => false],
                            ['choice_text' => 'Un certificat arrive à expiration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les secrets ne devraient-ils pas être inclus dans les images de conteneurs ?',
                        'explanation' => 'Une donnée secrète intégrée dans une image peut rester présente dans les couches, les caches ou les registres même après suppression du fichier dans une couche ultérieure.',
                        'choices' => [
                            ['choice_text' => 'Parce que les images ne supportent pas les fichiers texte', 'is_correct' => false],
                            ['choice_text' => 'Parce que le secret peut rester récupérable dans les couches ou artefacts associés', 'is_correct' => true],
                            ['choice_text' => 'Parce que les conteneurs ne peuvent pas utiliser TLS', 'is_correct' => false],
                            ['choice_text' => 'Parce que Docker interdit tous les secrets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’effectuer une revue de sécurité des changements d’architecture avant leur déploiement ?',
                        'explanation' => 'Une modification architecturale peut introduire de nouveaux flux, privilèges ou dépendances. Une revue préalable permet d’identifier ces changements avant qu’ils ne deviennent difficiles à corriger.',
                        'choices' => [
                            ['choice_text' => 'Identifier les nouveaux risques avant leur introduction en production', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les tests unitaires', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les contrôles de conformité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une analyse de menace, pourquoi faut-il identifier les actifs critiques avant de prioriser les scénarios ?',
                        'explanation' => 'La criticité d’un scénario dépend notamment de ce qu’il peut compromettre. Identifier les actifs permet de concentrer les efforts sur les chemins d’attaque ayant le plus fort impact métier.',
                        'choices' => [
                            ['choice_text' => 'Pour prioriser les scénarios selon leur impact réel sur l’organisation', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter de documenter les menaces', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les actifs non critiques', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute analyse technique', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 7. Sécurité réseau avancée et protocoles
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Sécurité réseau avancée et détection des attaques',
                'description' => 'Analyse des protocoles, des contrôles réseau et des scénarios d’attaque complexes.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [

                    [
                        'question' => 'Quel est le principal intérêt de TLS inspection dans un environnement où le trafic chiffré représente une grande partie des communications ?',
                        'explanation' => 'L’inspection permet aux contrôles de sécurité d’analyser certains flux chiffrés afin de détecter des menaces qui seraient invisibles si le contenu restait entièrement opaque.',
                        'choices' => [
                            ['choice_text' => 'Permettre aux contrôles de sécurité d’analyser certains flux chiffrés', 'is_correct' => true],
                            ['choice_text' => 'Supprimer le besoin de certificats', 'is_correct' => false],
                            ['choice_text' => 'Garantir que tous les utilisateurs sont administrateurs', 'is_correct' => false],
                            ['choice_text' => 'Désactiver automatiquement HTTP/2', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème doit être soigneusement évalué avant de déployer une interception TLS à grande échelle ?',
                        'explanation' => 'L’interception TLS modifie le modèle de confiance et peut avoir des conséquences sur la confidentialité, les applications sensibles, les certificats et les performances.',
                        'choices' => [
                            ['choice_text' => 'Uniquement la couleur des certificats', 'is_correct' => false],
                            ['choice_text' => 'La confidentialité, les exceptions applicatives, la confiance et les performances', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de claviers utilisés par les administrateurs', 'is_correct' => false],
                            ['choice_text' => 'La taille des noms de machines uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi DNS peut-il constituer une source utile de détection pour un SOC ?',
                        'explanation' => 'Les requêtes DNS peuvent révéler des domaines malveillants, des comportements inhabituels ou certains mécanismes de commande et contrôle, notamment lorsqu’elles sont corrélées avec d’autres événements.',
                        'choices' => [
                            ['choice_text' => 'Parce que DNS contient toujours le contenu complet des fichiers', 'is_correct' => false],
                            ['choice_text' => 'Parce que les requêtes peuvent révéler des domaines et comportements réseau suspects', 'is_correct' => true],
                            ['choice_text' => 'Parce que DNS remplace les EDR', 'is_correct' => false],
                            ['choice_text' => 'Parce que DNS chiffre automatiquement toutes les applications', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indice peut suggérer un tunnel DNS abusif ?',
                        'explanation' => 'Des requêtes très fréquentes avec des sous-domaines longs et fortement entropiques peuvent indiquer qu’un attaquant utilise DNS pour transporter des données ou des commandes.',
                        'choices' => [
                            ['choice_text' => 'Des requêtes très fréquentes contenant des sous-domaines anormalement longs', 'is_correct' => true],
                            ['choice_text' => 'Une seule requête DNS vers un domaine connu', 'is_correct' => false],
                            ['choice_text' => 'L’absence totale de trafic DNS', 'is_correct' => false],
                            ['choice_text' => 'Une réponse HTTP 200', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une ACL réseau restrictive entre deux segments sensibles ?',
                        'explanation' => 'Une ACL restrictive réduit les communications possibles entre zones et limite les chemins qu’un attaquant peut utiliser après avoir compromis un système.',
                        'choices' => [
                            ['choice_text' => 'Autoriser toutes les communications internes', 'is_correct' => false],
                            ['choice_text' => 'Limiter les flux aux communications nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Désactiver l’authentification applicative', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les règles de pare-feu trop larges représentent-elles un risque même lorsqu’elles sont faciles à administrer ?',
                        'explanation' => 'Une règle trop large augmente la surface de communication autorisée et peut permettre à un système compromis d’atteindre des ressources qui n’ont aucune raison d’être accessibles.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles peuvent autoriser des chemins de communication inutiles', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles empêchent toujours HTTPS', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles désactivent les journaux DNS', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles réduisent nécessairement le débit à zéro', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage présente un IDS basé sur plusieurs sources de télémétrie ?',
                        'explanation' => 'La combinaison de données réseau, endpoint et identité permet d’obtenir davantage de contexte et de réduire les limites d’une détection fondée sur une seule source.',
                        'choices' => [
                            ['choice_text' => 'Il permet de corréler le comportement réseau avec l’activité des systèmes et des identités', 'is_correct' => true],
                            ['choice_text' => 'Il supprime la nécessité de correctifs', 'is_correct' => false],
                            ['choice_text' => 'Il rend les mots de passe inutiles', 'is_correct' => false],
                            ['choice_text' => 'Il empêche toutes les attaques internes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal problème d’une règle IDS trop sensible ?',
                        'explanation' => 'Une règle générant trop de faux positifs peut surcharger les analystes et réduire leur capacité à identifier les événements réellement importants.',
                        'choices' => [
                            ['choice_text' => 'Elle garantit automatiquement une meilleure sécurité', 'is_correct' => false],
                            ['choice_text' => 'Elle peut provoquer une surcharge d’alertes et diminuer la capacité de triage', 'is_correct' => true],
                            ['choice_text' => 'Elle empêche toute journalisation', 'is_correct' => false],
                            ['choice_text' => 'Elle désactive les certificats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un proxy sortant peut-il être utile pour contrôler les communications Internet d’un serveur ?',
                        'explanation' => 'Un proxy centralise et contrôle les sorties réseau, ce qui permet notamment d’appliquer des politiques, de journaliser les destinations et de limiter les communications non nécessaires.',
                        'choices' => [
                            ['choice_text' => 'Il permet de centraliser le contrôle et la journalisation des communications sortantes', 'is_correct' => true],
                            ['choice_text' => 'Il supprime toutes les vulnérabilités applicatives', 'is_correct' => false],
                            ['choice_text' => 'Il remplace les comptes utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Il empêche toute communication interne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel choix réduit le mieux le risque qu’un serveur compromis puisse contacter librement Internet ?',
                        'explanation' => 'Les communications sortantes doivent être limitées selon les besoins réels du service. Une politique egress restrictive réduit les possibilités d’exfiltration et de commande et contrôle.',
                        'choices' => [
                            ['choice_text' => 'Autoriser toutes les connexions sortantes', 'is_correct' => false],
                            ['choice_text' => 'Appliquer une politique egress restrictive fondée sur les besoins du service', 'is_correct' => true],
                            ['choice_text' => 'Désactiver les logs réseau', 'is_correct' => false],
                            ['choice_text' => 'Autoriser uniquement les ports élevés aléatoires', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 8. Scénarios avancés et décisions opérationnelles
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Scénarios complexes et décisions de sécurité',
                'description' => 'Résolution de scénarios complexes combinant architecture, détection, risque, disponibilité et décisions opérationnelles.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'questions' => [

                    [
                        'question' => 'Une entreprise découvre qu’un compte de service compromis possède des droits d’administration sur plusieurs environnements. Quelle priorité doit être traitée après le containment initial ?',
                        'explanation' => 'Après avoir empêché l’utilisation immédiate du compte, il faut déterminer l’étendue des privilèges et rechercher les systèmes affectés afin d’identifier une éventuelle propagation ou persistance.',
                        'choices' => [
                            ['choice_text' => 'Changer uniquement la couleur du tableau de bord SOC', 'is_correct' => false],
                            ['choice_text' => 'Évaluer l’étendue des privilèges et rechercher les systèmes potentiellement affectés', 'is_correct' => true],
                            ['choice_text' => 'Réactiver immédiatement le compte compromis', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les comptes utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une vulnérabilité critique touche un composant utilisé par 500 applications, mais aucun exploit n’est observé. Quelle décision est la plus rigoureuse ?',
                        'explanation' => 'L’absence d’exploitation observée ne signifie pas que le risque est nul. L’organisation doit inventorier les usages, évaluer l’exposition et prioriser les corrections selon la criticité et l’exploitabilité.',
                        'choices' => [
                            ['choice_text' => 'Ignorer la vulnérabilité puisqu’aucun exploit n’a encore été observé', 'is_correct' => false],
                            ['choice_text' => 'Identifier les systèmes concernés et prioriser la remédiation selon exposition et criticité', 'is_correct' => true],
                            ['choice_text' => 'Arrêter immédiatement toutes les applications sans analyse', 'is_correct' => false],
                            ['choice_text' => 'Attendre une compromission confirmée avant toute action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe veut supprimer une ancienne règle de pare-feu, mais personne ne sait quelles applications en dépendent. Quelle approche est la plus sûre ?',
                        'explanation' => 'Une suppression brutale peut provoquer une interruption. Il faut d’abord analyser les journaux, les dépendances et le trafic réel, puis retirer la règle progressivement avec validation.',
                        'choices' => [
                            ['choice_text' => 'Supprimer immédiatement la règle sans observation', 'is_correct' => false],
                            ['choice_text' => 'Analyser les dépendances et le trafic avant une suppression progressive et contrôlée', 'is_correct' => true],
                            ['choice_text' => 'Autoriser toutes les communications avant la suppression', 'is_correct' => false],
                            ['choice_text' => 'Désactiver la journalisation pour éviter les faux positifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe SOC reçoit beaucoup d’alertes provenant d’un scanner de vulnérabilités interne. Quelle amélioration est la plus pertinente ?',
                        'explanation' => 'Les activités de scan connues peuvent être identifiées comme contexte légitime afin de réduire le bruit tout en conservant les alertes pertinentes pour des comportements inattendus.',
                        'choices' => [
                            ['choice_text' => 'Désactiver toutes les alertes réseau', 'is_correct' => false],
                            ['choice_text' => 'Enrichir et contextualiser les alertes avec les sources de scan autorisées', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les logs du scanner', 'is_correct' => false],
                            ['choice_text' => 'Ignorer toute activité provenant du réseau interne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après une compromission, une organisation restaure les serveurs depuis des sauvegardes mais ne vérifie pas leur intégrité. Quel risque subsiste ?',
                        'explanation' => 'Si l’attaquant a compromis les sauvegardes ou y a introduit une persistance, une restauration aveugle peut réintroduire la compromission. Les sauvegardes doivent être vérifiées et idéalement protégées contre les modifications.',
                        'choices' => [
                            ['choice_text' => 'Aucun risque puisque toute sauvegarde est automatiquement sûre', 'is_correct' => false],
                            ['choice_text' => 'La restauration peut réintroduire une compromission présente dans les sauvegardes', 'is_correct' => true],
                            ['choice_text' => 'Le réseau devient nécessairement plus rapide', 'is_correct' => false],
                            ['choice_text' => 'TLS devient automatiquement désactivé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une sauvegarde immuable face à un ransomware ?',
                        'explanation' => 'Une sauvegarde immuable ne peut pas être modifiée ou supprimée librement pendant sa période de protection, ce qui réduit le risque que le ransomware détruise également les copies nécessaires à la restauration.',
                        'choices' => [
                            ['choice_text' => 'Empêcher le ransomware de chiffrer tous les postes', 'is_correct' => false],
                            ['choice_text' => 'Réduire la possibilité que les sauvegardes soient modifiées ou supprimées par l’attaquant', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les contrôles endpoint', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun compte ne sera compromis', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un EDR mais constate qu’un attaquant a utilisé des outils légitimes du système pour progresser. Quelle conclusion est la plus appropriée ?',
                        'explanation' => 'Les outils légitimes peuvent être utilisés de manière malveillante. La détection doit donc considérer le contexte comportemental, les chaînes de processus et les anomalies plutôt que rechercher uniquement des binaires inconnus.',
                        'choices' => [
                            ['choice_text' => 'L’EDR est inutile par définition', 'is_correct' => false],
                            ['choice_text' => 'La détection doit aussi analyser le contexte et le comportement des outils légitimes', 'is_correct' => true],
                            ['choice_text' => 'Il faut désinstaller tous les outils système', 'is_correct' => false],
                            ['choice_text' => 'Les outils légitimes ne peuvent jamais être utilisés dans une attaque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe doit choisir entre corriger immédiatement une vulnérabilité sur un système critique ou attendre une fenêtre de maintenance. Quel facteur doit guider la décision ?',
                        'explanation' => 'La décision doit comparer le risque d’exploitation avec le risque opérationnel de l’intervention. Une vulnérabilité activement exploitée ou fortement exposée peut justifier une action immédiate malgré le coût opérationnel.',
                        'choices' => [
                            ['choice_text' => 'Uniquement la préférence personnelle de l’administrateur', 'is_correct' => false],
                            ['choice_text' => 'Le risque de sécurité, l’exposition, l’exploitabilité et l’impact opérationnel', 'is_correct' => true],
                            ['choice_text' => 'La taille du logo du fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de fichiers temporaires du système', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application critique doit rester disponible même pendant une attaque DDoS. Quelle approche architecturale est la plus adaptée ?',
                        'explanation' => 'La résilience DDoS repose généralement sur plusieurs mécanismes combinés : capacité absorbante, distribution, filtrage en amont, rate limiting et stratégies de dégradation contrôlée.',
                        'choices' => [
                            ['choice_text' => 'Placer un seul serveur sans filtrage devant Internet', 'is_correct' => false],
                            ['choice_text' => 'Combiner protection en amont, distribution, filtrage et mécanismes de limitation', 'is_correct' => true],
                            ['choice_text' => 'Désactiver TLS pendant l’attaque', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes pour libérer de la bande passante', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après un incident majeur, quelle activité permet le mieux d’éviter de reproduire les mêmes erreurs ?',
                        'explanation' => 'Un retour d’expérience structuré permet d’identifier les causes techniques et organisationnelles, les contrôles insuffisants et les améliorations à intégrer dans les procédures et l’architecture.',
                        'choices' => [
                            ['choice_text' => 'Supprimer toutes les traces de l’incident', 'is_correct' => false],
                            ['choice_text' => 'Réaliser un post-incident review avec des actions correctives mesurables', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute discussion sur les décisions prises', 'is_correct' => false],
                            ['choice_text' => 'Changer uniquement les mots de passe sans analyser l’incident', 'is_correct' => false],
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
                    'is_active' => true,
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

                // Shuffle the complete choice records so the
                // is_correct flag remains attached to its text.
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