<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;
use Illuminate\Database\Seeder;

class CybersecurityAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::updateOrCreate(
            ['name' => 'Cybersecurity'],
            [
                'description' => 'Cybersécurité avancée : sécurité des réseaux, cryptographie, identité, détection, réponse aux incidents, sécurité applicative et architecture défensive.',
                'is_active' => true,
            ]
        );

        $quizzes = [
            [
                'title' => 'Cybersécurité avancée — Architecture et défense',
                'description' => 'Évaluez votre maîtrise des architectures de sécurité modernes, de la segmentation et des mécanismes défensifs avancés.',
                'duration' => 20,
                'passing_score' => 70,
                'difficulty' => 'advanced',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal d’une architecture Zero Trust ?',
                        'choices' => [
                            ['text' => 'Faire confiance aux utilisateurs internes par défaut', 'correct' => false],
                            ['text' => 'Ne faire confiance à aucune entité par défaut et vérifier continuellement les accès', 'correct' => true],
                            ['text' => 'Supprimer tous les contrôles réseau', 'correct' => false],
                            ['text' => 'Remplacer tous les antivirus par un pare-feu', 'correct' => false],
                        ],
                        'explanation' => 'Zero Trust repose sur le principe « never trust, always verify » et impose une vérification continue du contexte et des privilèges.'
                    ],
                    [
                        'question' => 'Quelle technique limite le mieux les mouvements latéraux d’un attaquant dans un réseau compromis ?',
                        'choices' => [
                            ['text' => 'La segmentation réseau', 'correct' => true],
                            ['text' => 'La compression des fichiers', 'correct' => false],
                            ['text' => 'Le changement du nom des serveurs', 'correct' => false],
                            ['text' => 'La désactivation du DNS', 'correct' => false],
                        ],
                        'explanation' => 'La segmentation réduit les chemins accessibles entre différentes zones et limite ainsi les déplacements latéraux.'
                    ],
                    [
                        'question' => 'Que permet principalement un bastion d’administration ?',
                        'choices' => [
                            ['text' => 'Centraliser et contrôler les accès administratifs sensibles', 'correct' => true],
                            ['text' => 'Accélérer les téléchargements Internet', 'correct' => false],
                            ['text' => 'Remplacer les sauvegardes', 'correct' => false],
                            ['text' => 'Chiffrer automatiquement toutes les bases de données', 'correct' => false],
                        ],
                        'explanation' => 'Un bastion fournit un point contrôlé, journalisé et durci pour les connexions d’administration.'
                    ],
                    [
                        'question' => 'Quel principe de sécurité réduit directement l’impact d’un compte compromis ?',
                        'choices' => [
                            ['text' => 'Le moindre privilège', 'correct' => true],
                            ['text' => 'Le partage des comptes', 'correct' => false],
                            ['text' => 'L’utilisation permanente du compte root', 'correct' => false],
                            ['text' => 'La suppression des journaux', 'correct' => false],
                        ],
                        'explanation' => 'Le principe du moindre privilège limite les ressources et actions accessibles à chaque identité.'
                    ],
                    [
                        'question' => 'Quel mécanisme est particulièrement adapté à la protection d’une API contre les abus de volume ?',
                        'choices' => [
                            ['text' => 'Le rate limiting', 'correct' => true],
                            ['text' => 'Le renommage des endpoints', 'correct' => false],
                            ['text' => 'La désactivation de TLS', 'correct' => false],
                            ['text' => 'La suppression des logs', 'correct' => false],
                        ],
                        'explanation' => 'Le rate limiting impose des limites au nombre de requêtes qu’une identité ou une source peut effectuer pendant une période donnée.'
                    ],
                    [
                        'question' => 'Quel composant permet généralement de centraliser l’application des politiques d’accès dans une architecture Zero Trust ?',
                        'choices' => [
                            ['text' => 'Un moteur de décision de politique', 'correct' => true],
                            ['text' => 'Un simple switch non administrable', 'correct' => false],
                            ['text' => 'Un compresseur de fichiers', 'correct' => false],
                            ['text' => 'Un serveur NTP uniquement', 'correct' => false],
                        ],
                        'explanation' => 'Les architectures Zero Trust utilisent des composants de décision et d’application de politiques pour déterminer si une demande doit être autorisée.'
                    ],
                    [
                        'question' => 'Pourquoi la microsegmentation est-elle plus granulaire qu’une segmentation réseau classique ?',
                        'choices' => [
                            ['text' => 'Elle peut appliquer des politiques au niveau de charges de travail ou d’identités spécifiques', 'correct' => true],
                            ['text' => 'Elle supprime les contrôles d’accès', 'correct' => false],
                            ['text' => 'Elle fonctionne uniquement sur Internet public', 'correct' => false],
                            ['text' => 'Elle empêche tout chiffrement', 'correct' => false],
                        ],
                        'explanation' => 'La microsegmentation permet de contrôler beaucoup plus finement les communications entre charges de travail et services.'
                    ],
                    [
                        'question' => 'Quel contrôle est particulièrement important pour sécuriser un compte à privilèges élevés ?',
                        'choices' => [
                            ['text' => 'L’authentification multifacteur', 'correct' => true],
                            ['text' => 'Le partage du mot de passe entre administrateurs', 'correct' => false],
                            ['text' => 'La désactivation des journaux', 'correct' => false],
                            ['text' => 'L’utilisation d’un mot de passe commun', 'correct' => false],
                        ],
                        'explanation' => 'La MFA ajoute un facteur indépendant et réduit le risque lié au vol du secret d’authentification.'
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’un système NAC ?',
                        'choices' => [
                            ['text' => 'Contrôler l’accès des appareils au réseau selon des politiques de sécurité', 'correct' => true],
                            ['text' => 'Générer des clés privées uniquement', 'correct' => false],
                            ['text' => 'Remplacer toutes les applications métiers', 'correct' => false],
                            ['text' => 'Compresser les paquets réseau', 'correct' => false],
                        ],
                        'explanation' => 'Le Network Access Control vérifie le contexte et l’état des terminaux avant ou pendant leur accès au réseau.'
                    ],
                    [
                        'question' => 'Quel principe consiste à concevoir les systèmes afin qu’une compromission isolée ne provoque pas une compromission globale ?',
                        'choices' => [
                            ['text' => 'La défense en profondeur', 'correct' => true],
                            ['text' => 'La confiance implicite', 'correct' => false],
                            ['text' => 'La centralisation sans contrôle', 'correct' => false],
                            ['text' => 'Le partage de privilèges', 'correct' => false],
                        ],
                        'explanation' => 'La défense en profondeur combine plusieurs couches indépendantes afin de réduire la probabilité d’un échec complet.'
                    ],
                ],
            ],

            [
                'title' => 'Cybersécurité avancée — Cryptographie',
                'description' => 'Questions avancées sur la cryptographie symétrique, asymétrique, les signatures, les certificats et la gestion des clés.',
                'duration' => 20,
                'passing_score' => 70,
                'difficulty' => 'advanced',
                'questions' => [
                    [
                        'question' => 'Quelle propriété garantit qu’une fonction de hachage cryptographique rend difficile la récupération du message original à partir du hash ?',
                        'choices' => [
                            ['text' => 'La résistance à la préimage', 'correct' => true],
                            ['text' => 'La compression réseau', 'correct' => false],
                            ['text' => 'La réplication', 'correct' => false],
                            ['text' => 'La disponibilité', 'correct' => false],
                        ],
                        'explanation' => 'La résistance à la préimage signifie qu’il doit être computationnellement difficile de retrouver une entrée correspondant à un hash donné.'
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’une signature numérique ?',
                        'choices' => [
                            ['text' => 'Garantir l’intégrité et fournir une preuve cryptographique de l’origine', 'correct' => true],
                            ['text' => 'Compresser les données', 'correct' => false],
                            ['text' => 'Rendre les données disponibles hors ligne', 'correct' => false],
                            ['text' => 'Remplacer toutes les clés symétriques', 'correct' => false],
                        ],
                        'explanation' => 'Une signature numérique permet notamment de vérifier l’intégrité du contenu et l’authenticité de son signataire.'
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on généralement un chiffrement symétrique pour chiffrer de gros volumes de données ?',
                        'choices' => [
                            ['text' => 'Parce qu’il est généralement beaucoup plus efficace pour le traitement de grandes quantités de données', 'correct' => true],
                            ['text' => 'Parce qu’il ne nécessite aucune clé', 'correct' => false],
                            ['text' => 'Parce qu’il fournit automatiquement une identité', 'correct' => false],
                            ['text' => 'Parce qu’il ne peut jamais être compromis', 'correct' => false],
                        ],
                        'explanation' => 'Les algorithmes symétriques sont généralement bien plus performants que les mécanismes asymétriques pour le chiffrement de données volumineuses.'
                    ],
                    [
                        'question' => 'Quel problème est principalement résolu par Diffie-Hellman ?',
                        'choices' => [
                            ['text' => 'L’établissement sécurisé d’un secret partagé sur un canal non sécurisé', 'correct' => true],
                            ['text' => 'La détection automatique des malwares', 'correct' => false],
                            ['text' => 'La compression des paquets', 'correct' => false],
                            ['text' => 'La sauvegarde des bases de données', 'correct' => false],
                        ],
                        'explanation' => 'Diffie-Hellman permet à deux parties d’établir un secret partagé sans transmettre directement ce secret sur le réseau.'
                    ],
                    [
                        'question' => 'Quel est le rôle d’une autorité de certification dans une PKI ?',
                        'choices' => [
                            ['text' => 'Émettre et signer des certificats numériques selon une politique de confiance', 'correct' => true],
                            ['text' => 'Analyser tous les fichiers utilisateurs', 'correct' => false],
                            ['text' => 'Remplacer les pare-feu', 'correct' => false],
                            ['text' => 'Stocker tous les mots de passe en clair', 'correct' => false],
                        ],
                        'explanation' => 'La CA émet et signe des certificats qui permettent d’associer une identité à une clé publique.'
                    ],
                    [
                        'question' => 'Pourquoi le sel est-il utilisé avec le stockage des mots de passe ?',
                        'choices' => [
                            ['text' => 'Pour rendre les hashes identiques beaucoup moins prévisibles et résister aux attaques pré-calculées', 'correct' => true],
                            ['text' => 'Pour rendre les mots de passe réversibles', 'correct' => false],
                            ['text' => 'Pour supprimer le besoin de hachage', 'correct' => false],
                            ['text' => 'Pour permettre de récupérer le mot de passe original', 'correct' => false],
                        ],
                        'explanation' => 'Un sel unique par mot de passe empêche notamment l’utilisation directe de tables pré-calculées et fait que deux mots de passe identiques ne produisent pas nécessairement le même hash.'
                    ],
                    [
                        'question' => 'Quelle propriété offre le forward secrecy ?',
                        'choices' => [
                            ['text' => 'La compromission ultérieure d’une clé à long terme ne doit pas permettre de déchiffrer les sessions passées', 'correct' => true],
                            ['text' => 'Toutes les sessions utilisent la même clé permanente', 'correct' => false],
                            ['text' => 'Les certificats ne sont jamais renouvelés', 'correct' => false],
                            ['text' => 'Les clés privées sont transmises avec les messages', 'correct' => false],
                        ],
                        'explanation' => 'Le forward secrecy protège les anciennes sessions grâce à des secrets de session éphémères indépendants des clés à long terme.'
                    ],
                    [
                        'question' => 'Quel risque est directement associé à une mauvaise gestion des clés cryptographiques ?',
                        'choices' => [
                            ['text' => 'La compromission des données protégées malgré l’utilisation d’un algorithme robuste', 'correct' => true],
                            ['text' => 'L’augmentation automatique de la disponibilité', 'correct' => false],
                            ['text' => 'La suppression des vulnérabilités applicatives', 'correct' => false],
                            ['text' => 'La désactivation des attaques par déni de service', 'correct' => false],
                        ],
                        'explanation' => 'Une cryptographie robuste ne suffit pas si les clés sont exposées, mal stockées, trop largement accessibles ou insuffisamment renouvelées.'
                    ],
                    [
                        'question' => 'Quel mécanisme est préférable pour protéger une clé secrète d’application à haute valeur ?',
                        'choices' => [
                            ['text' => 'Un HSM ou un service de gestion de secrets correctement sécurisé', 'correct' => true],
                            ['text' => 'Un fichier texte public dans le dépôt Git', 'correct' => false],
                            ['text' => 'Un commentaire dans le code source', 'correct' => false],
                            ['text' => 'Une variable JavaScript visible côté client', 'correct' => false],
                        ],
                        'explanation' => 'Les HSM et systèmes de gestion de secrets permettent de contrôler et protéger les clés sensibles bien mieux qu’un stockage directement dans le code.'
                    ],
                    [
                        'question' => 'Quel est le principal avantage d’un chiffrement authentifié comme AES-GCM ?',
                        'choices' => [
                            ['text' => 'Il fournit à la fois confidentialité et authentification/intégrité des données', 'correct' => true],
                            ['text' => 'Il supprime le besoin de gérer les clés', 'correct' => false],
                            ['text' => 'Il rend les signatures numériques inutiles dans tous les cas', 'correct' => false],
                            ['text' => 'Il permet de déchiffrer sans clé', 'correct' => false],
                        ],
                        'explanation' => 'AES-GCM combine chiffrement et authentification, permettant de détecter une modification non autorisée du contenu chiffré.'
                    ],
                ],
            ],

            [
                'title' => 'Cybersécurité avancée — Sécurité des applications',
                'description' => 'Analyse avancée des vulnérabilités applicatives, de la validation des entrées, des sessions et des API.',
                'duration' => 20,
                'passing_score' => 70,
                'difficulty' => 'advanced',
                'questions' => [
                    [
                        'question' => 'Quelle défense est la plus appropriée contre les injections SQL ?',
                        'choices' => [
                            ['text' => 'Les requêtes paramétrées', 'correct' => true],
                            ['text' => 'Le changement du nom des tables', 'correct' => false],
                            ['text' => 'La suppression des logs', 'correct' => false],
                            ['text' => 'L’utilisation de mots de passe plus longs uniquement', 'correct' => false],
                        ],
                        'explanation' => 'Les requêtes paramétrées séparent les données des instructions SQL et empêchent les entrées utilisateur de devenir du code SQL.'
                    ],
                    [
                        'question' => 'Quel est le principe d’une défense contre XSS basée sur l’encodage de sortie ?',
                        'choices' => [
                            ['text' => 'Encoder les données selon le contexte avant de les intégrer dans la réponse', 'correct' => true],
                            ['text' => 'Faire confiance aux données provenant du navigateur', 'correct' => false],
                            ['text' => 'Désactiver HTTPS', 'correct' => false],
                            ['text' => 'Stocker tous les scripts dans les cookies', 'correct' => false],
                        ],
                        'explanation' => 'L’encodage contextuel empêche qu’une donnée contrôlée par un attaquant soit interprétée comme du code par le navigateur.'
                    ],
                    [
                        'question' => 'Quel attribut de cookie limite fortement son exposition au JavaScript côté client ?',
                        'choices' => [
                            ['text' => 'HttpOnly', 'correct' => true],
                            ['text' => 'Public', 'correct' => false],
                            ['text' => 'Readable', 'correct' => false],
                            ['text' => 'Debug', 'correct' => false],
                        ],
                        'explanation' => 'HttpOnly empêche l’accès au cookie via les API JavaScript classiques du navigateur.'
                    ],
                    [
                        'question' => 'Quel contrôle réduit le risque de CSRF pour une application web ?',
                        'choices' => [
                            ['text' => 'Un token CSRF imprévisible vérifié côté serveur', 'correct' => true],
                            ['text' => 'Un identifiant de session visible dans l’URL', 'correct' => false],
                            ['text' => 'La suppression des cookies', 'correct' => false],
                            ['text' => 'La désactivation de TLS', 'correct' => false],
                        ],
                        'explanation' => 'Un token CSRF permet au serveur de distinguer une requête légitime d’une requête forgée depuis un autre contexte.'
                    ],
                    [
                        'question' => 'Pourquoi la validation côté client seule est-elle insuffisante ?',
                        'choices' => [
                            ['text' => 'Parce que le client peut être contrôlé ou contourné par l’utilisateur', 'correct' => true],
                            ['text' => 'Parce que JavaScript est toujours chiffré', 'correct' => false],
                            ['text' => 'Parce que les navigateurs ne peuvent pas exécuter de validation', 'correct' => false],
                            ['text' => 'Parce que TLS supprime les validations', 'correct' => false],
                        ],
                        'explanation' => 'Toute donnée reçue par le serveur doit être considérée comme non fiable et validée côté serveur.'
                    ],
                    [
                        'question' => 'Quel problème peut être causé par une désérialisation non sécurisée ?',
                        'choices' => [
                            ['text' => 'L’exécution de comportements ou de code non prévu selon le mécanisme de désérialisation', 'correct' => true],
                            ['text' => 'La réduction automatique des privilèges', 'correct' => false],
                            ['text' => 'La suppression des injections SQL', 'correct' => false],
                            ['text' => 'L’amélioration automatique du chiffrement', 'correct' => false],
                        ],
                        'explanation' => 'Une désérialisation dangereuse peut permettre la manipulation d’objets et, selon la technologie, conduire à des conséquences critiques.'
                    ],
                    [
                        'question' => 'Quelle pratique réduit le risque lié aux secrets présents dans le code source ?',
                        'choices' => [
                            ['text' => 'Utiliser un gestionnaire de secrets et effectuer une rotation des secrets', 'correct' => true],
                            ['text' => 'Encoder les secrets en Base64', 'correct' => false],
                            ['text' => 'Renommer les variables', 'correct' => false],
                            ['text' => 'Les déplacer dans des commentaires', 'correct' => false],
                        ],
                        'explanation' => 'Base64 n’est pas un mécanisme de protection. Les secrets doivent être gérés séparément du code et pouvoir être renouvelés.'
                    ],
                    [
                        'question' => 'Quel contrôle est particulièrement important pour une API manipulant des ressources appartenant à différents utilisateurs ?',
                        'choices' => [
                            ['text' => 'La vérification systématique de l’autorisation sur chaque objet', 'correct' => true],
                            ['text' => 'La confiance dans l’identifiant envoyé par le client', 'correct' => false],
                            ['text' => 'La désactivation de l’authentification', 'correct' => false],
                            ['text' => 'La suppression des identifiants de ressources', 'correct' => false],
                        ],
                        'explanation' => 'L’authentification indique qui est l’utilisateur, tandis que l’autorisation doit vérifier qu’il peut réellement accéder à l’objet demandé.'
                    ],
                    [
                        'question' => 'Quel est le rôle principal de Content Security Policy ?',
                        'choices' => [
                            ['text' => 'Réduire les possibilités d’exécution de contenu non autorisé dans le navigateur', 'correct' => true],
                            ['text' => 'Chiffrer les mots de passe en base', 'correct' => false],
                            ['text' => 'Remplacer TLS', 'correct' => false],
                            ['text' => 'Empêcher tous les scans réseau', 'correct' => false],
                        ],
                        'explanation' => 'CSP permet de définir des politiques sur les sources de contenu autorisées et constitue notamment une défense supplémentaire contre certaines attaques XSS.'
                    ],
                    [
                        'question' => 'Quelle stratégie est la plus sûre lors de la gestion d’erreurs côté production ?',
                        'choices' => [
['text' => 'Fournir des messages génériques au client tout en journalisant les détails de manière sécurisée', 'correct' => true],                            ['text' => 'Afficher les stack traces complètes à tous les utilisateurs', 'correct' => false],
                            ['text' => 'Afficher les mots de passe dans les exceptions', 'correct' => false],
                            ['text' => 'Désactiver complètement les journaux', 'correct' => false],
                        ],
                        'explanation' => 'Les détails techniques peuvent aider un attaquant. Ils doivent être réservés aux journaux contrôlés et protégés.'
                    ],
                ],
            ],

            [
                'title' => 'Cybersécurité avancée — SOC et détection',
                'description' => 'Évaluez vos compétences en surveillance, corrélation d’événements, SIEM, détection et analyse comportementale.',
                'duration' => 20,
                'passing_score' => 70,
                'difficulty' => 'advanced',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal d’un SIEM ?',
                        'choices' => [
                            ['text' => 'Centraliser, corréler et analyser des événements de sécurité provenant de multiples sources', 'correct' => true],
                            ['text' => 'Remplacer tous les systèmes d’exploitation', 'correct' => false],
                            ['text' => 'Chiffrer automatiquement chaque fichier', 'correct' => false],
                            ['text' => 'Créer uniquement des sauvegardes', 'correct' => false],
                        ],
                        'explanation' => 'Un SIEM agrège les journaux et événements afin d’améliorer la détection, l’investigation et la visibilité.'
                    ],
                    [
                        'question' => 'Pourquoi la synchronisation temporelle est-elle importante dans un SOC ?',
                        'choices' => [
                            ['text' => 'Elle permet de reconstruire correctement la chronologie des événements', 'correct' => true],
                            ['text' => 'Elle remplace les mécanismes d’authentification', 'correct' => false],
                            ['text' => 'Elle empêche tous les malwares', 'correct' => false],
                            ['text' => 'Elle chiffre les logs', 'correct' => false],
                        ],
                        'explanation' => 'Des horodatages incohérents compliquent fortement la corrélation et la reconstruction d’une attaque.'
                    ],
                    [
                        'question' => 'Quelle différence décrit correctement IDS et IPS ?',
                        'choices' => [
                            ['text' => 'Un IDS détecte principalement tandis qu’un IPS peut également bloquer ou prévenir activement', 'correct' => true],
                            ['text' => 'Un IDS chiffre les fichiers et un IPS les compresse', 'correct' => false],
                            ['text' => 'Ils sont toujours strictement identiques', 'correct' => false],
                            ['text' => 'Un IPS ne peut jamais inspecter le trafic', 'correct' => false],
                        ],
                        'explanation' => 'Un IDS est principalement orienté détection alors qu’un IPS est placé pour permettre une action préventive ou bloquante.'
                    ],
                    [
                        'question' => 'Quel indicateur peut signaler une activité anormale d’un compte ?',
                        'choices' => [
                            ['text' => 'Une connexion inhabituelle suivie d’actions privilégiées inattendues', 'correct' => true],
                            ['text' => 'Une sauvegarde planifiée', 'correct' => false],
                            ['text' => 'Une connexion correspondant exactement aux habitudes connues', 'correct' => false],
                            ['text' => 'Un redémarrage planifié', 'correct' => false],
                        ],
                        'explanation' => 'Les anomalies comportementales deviennent particulièrement intéressantes lorsqu’elles sont corrélées à des actions sensibles.'
                    ],
                    [
                        'question' => 'Pourquoi les faux positifs constituent-ils un problème dans un SOC ?',
                        'choices' => [
                            ['text' => 'Ils consomment les ressources des analystes et peuvent masquer de vraies alertes', 'correct' => true],
                            ['text' => 'Ils rendent automatiquement le réseau plus sécurisé', 'correct' => false],
                            ['text' => 'Ils empêchent toute collecte de logs', 'correct' => false],
                            ['text' => 'Ils chiffrent les systèmes', 'correct' => false],
                        ],
                        'explanation' => 'Un volume excessif d’alertes non pertinentes peut provoquer une fatigue d’alerte et diminuer l’efficacité de la détection.'
                    ],
                    [
                        'question' => 'Que signifie généralement une règle de corrélation dans un SIEM ?',
                        'choices' => [
                            ['text' => 'Associer plusieurs événements afin d’identifier un scénario potentiellement malveillant', 'correct' => true],
                            ['text' => 'Supprimer automatiquement tous les logs', 'correct' => false],
                            ['text' => 'Changer les mots de passe utilisateurs', 'correct' => false],
                            ['text' => 'Compresser les disques', 'correct' => false],
                        ],
                        'explanation' => 'La corrélation transforme plusieurs événements isolés en signaux plus significatifs.'
                    ],
                    [
                        'question' => 'Quel avantage apporte EDR par rapport à une simple collecte de journaux ?',
                        'choices' => [
                            ['text' => 'Une visibilité et des capacités de détection/réponse directement liées aux terminaux', 'correct' => true],
                            ['text' => 'La suppression des contrôles d’identité', 'correct' => false],
                            ['text' => 'L’absence totale de télémétrie', 'correct' => false],
                            ['text' => 'La désactivation automatique des réseaux', 'correct' => false],
                        ],
                        'explanation' => 'Les solutions EDR collectent une télémétrie détaillée des endpoints et peuvent fournir des capacités d’investigation et de réponse.'
                    ],
                    [
                        'question' => 'Quel élément est essentiel à une règle de détection de qualité ?',
                        'choices' => [
                            ['text' => 'Un signal pertinent associé à un contexte permettant de réduire les faux positifs', 'correct' => true],
                            ['text' => 'Un déclenchement sur chaque événement sans exception', 'correct' => false],
                            ['text' => 'L’absence totale de contexte', 'correct' => false],
                            ['text' => 'La suppression des métadonnées', 'correct' => false],
                        ],
                        'explanation' => 'Une bonne détection doit maximiser la pertinence du signal tout en fournissant suffisamment de contexte à l’analyste.'
                    ],
                    [
                        'question' => 'Quel est l’intérêt de MITRE ATT&CK pour une équipe SOC ?',
                        'choices' => [
                            ['text' => 'Structurer les techniques et tactiques adverses afin d’améliorer la couverture de détection', 'correct' => true],
                            ['text' => 'Remplacer tous les pare-feu', 'correct' => false],
                            ['text' => 'Fournir automatiquement des mots de passe', 'correct' => false],
                            ['text' => 'Remplacer les sauvegardes', 'correct' => false],
                        ],
                        'explanation' => 'ATT&CK fournit une connaissance structurée des comportements adverses utilisable pour la détection, l’analyse et l’évaluation de couverture.'
                    ],
                    [
                        'question' => 'Quel type de journal est particulièrement utile pour investiguer une élévation de privilèges ?',
                        'choices' => [
                            ['text' => 'Les journaux d’authentification et d’activité privilégiée', 'correct' => true],
                            ['text' => 'Les journaux d’impression uniquement', 'correct' => false],
                            ['text' => 'Les journaux météo', 'correct' => false],
                            ['text' => 'Les journaux de compression uniquement', 'correct' => false],
                        ],
                        'explanation' => 'Les événements d’authentification, d’autorisation et d’administration permettent de reconstruire l’utilisation des privilèges.'
                    ],
                ],
            ],

            [
                'title' => 'Cybersécurité avancée — Réponse aux incidents',
                'description' => 'Scénarios avancés portant sur la préparation, la détection, le confinement, l’éradication et la récupération.',
                'duration' => 20,
                'passing_score' => 70,
                'difficulty' => 'advanced',
                'questions' => [
                    [
                        'question' => 'Quelle action est généralement prioritaire lorsqu’un incident critique vient d’être confirmé ?',
                        'choices' => [
                            ['text' => 'Contenir l’incident tout en préservant les éléments nécessaires à l’investigation', 'correct' => true],
                            ['text' => 'Supprimer immédiatement tous les disques', 'correct' => false],
                            ['text' => 'Désactiver tous les logs', 'correct' => false],
                            ['text' => 'Publier immédiatement tous les détails techniques', 'correct' => false],
                        ],
                        'explanation' => 'La réponse doit limiter les dommages tout en préservant les preuves et informations nécessaires à l’analyse.'
                    ],
                    [
                        'question' => 'Pourquoi faut-il éviter de modifier inutilement une machine compromise avant la collecte des preuves ?',
                        'choices' => [
                            ['text' => 'Parce que certaines actions peuvent détruire ou modifier des éléments forensiques utiles', 'correct' => true],
                            ['text' => 'Parce qu’un système compromis devient automatiquement invulnérable', 'correct' => false],
                            ['text' => 'Parce que les logs ne servent jamais', 'correct' => false],
                            ['text' => 'Parce que les attaquants contrôlent toujours physiquement le serveur', 'correct' => false],
                        ],
                        'explanation' => 'Les actions d’intervention peuvent modifier les traces en mémoire, les fichiers, les journaux ou d’autres artefacts.'
                    ],
                    [
                        'question' => 'Quel est l’objectif du confinement pendant une réponse à incident ?',
                        'choices' => [
                            ['text' => 'Limiter la propagation et réduire l’impact de l’incident', 'correct' => true],
                            ['text' => 'Effacer les preuves', 'correct' => false],
                            ['text' => 'Restaurer tous les systèmes sans analyse', 'correct' => false],
                            ['text' => 'Donner davantage de privilèges à l’attaquant', 'correct' => false],
                        ],
                        'explanation' => 'Le confinement vise à empêcher l’incident de continuer à se propager ou à causer des dommages supplémentaires.'
                    ],
                    [
                        'question' => 'Pourquoi la rotation des identifiants compromis est-elle importante après une intrusion ?',
                        'choices' => [
                            ['text' => 'Pour empêcher l’attaquant de réutiliser les secrets qu’il aurait récupérés', 'correct' => true],
                            ['text' => 'Pour supprimer automatiquement les vulnérabilités logicielles', 'correct' => false],
                            ['text' => 'Pour améliorer la bande passante', 'correct' => false],
                            ['text' => 'Pour empêcher les sauvegardes', 'correct' => false],
                        ],
                        'explanation' => 'Les identifiants compromis peuvent permettre une persistance ou un nouvel accès même après le nettoyage initial.'
                    ],
                    [
                        'question' => 'Que doit contenir idéalement un plan de réponse aux incidents ?',
                        'choices' => [
                            ['text' => 'Les rôles, responsabilités, procédures d’escalade et actions à mener selon différents scénarios', 'correct' => true],
                            ['text' => 'Uniquement les noms des serveurs', 'correct' => false],
                            ['text' => 'Uniquement les mots de passe administrateurs', 'correct' => false],
                            ['text' => 'Aucune procédure documentée', 'correct' => false],
                        ],
                        'explanation' => 'Un plan efficace précise qui fait quoi, quand et comment, notamment sous pression.'
                    ],
                    [
                        'question' => 'Quelle activité intervient après l’éradication pour confirmer le retour à un état maîtrisé ?',
                        'choices' => [
                            ['text' => 'La validation et la surveillance de la récupération', 'correct' => true],
                            ['text' => 'La suppression de tous les contrôles de sécurité', 'correct' => false],
                            ['text' => 'Le partage public des secrets', 'correct' => false],
                            ['text' => 'La désactivation des sauvegardes', 'correct' => false],
                        ],
                        'explanation' => 'Après restauration, les systèmes doivent être surveillés afin de vérifier qu’ils sont réellement propres et stables.'
                    ],
                    [
                        'question' => 'Pourquoi les exercices de réponse aux incidents sont-ils importants ?',
                        'choices' => [
                            ['text' => 'Ils permettent de tester les procédures avant qu’un incident réel ne survienne', 'correct' => true],
                            ['text' => 'Ils rendent les systèmes invulnérables', 'correct' => false],
                            ['text' => 'Ils remplacent tous les contrôles techniques', 'correct' => false],
                            ['text' => 'Ils suppriment la nécessité de sauvegardes', 'correct' => false],
                        ],
                        'explanation' => 'Les exercices permettent d’identifier les lacunes organisationnelles et techniques dans un contexte contrôlé.'
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un IOC dans le contexte de la réponse aux incidents ?',
                        'choices' => [
                            ['text' => 'Un indicateur technique pouvant être associé à une compromission', 'correct' => true],
                            ['text' => 'Une politique de sauvegarde', 'correct' => false],
                            ['text' => 'Un protocole de chiffrement', 'correct' => false],
                            ['text' => 'Une méthode de compression', 'correct' => false],
                        ],
                        'explanation' => 'Un IOC peut être une adresse IP, un hash, un domaine ou un autre artefact associé à une activité malveillante.'
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’une analyse post-incident ?',
                        'choices' => [
                            ['text' => 'Comprendre les causes et améliorer les contrôles afin d’éviter une récidive', 'correct' => true],
                            ['text' => 'Cacher systématiquement l’incident aux équipes concernées', 'correct' => false],
                            ['text' => 'Supprimer les preuves restantes', 'correct' => false],
                            ['text' => 'Désactiver les mécanismes de détection', 'correct' => false],
                        ],
                        'explanation' => 'Le retour d’expérience transforme l’incident en amélioration durable de la sécurité.'
                    ],
                    [
                        'question' => 'Pourquoi la chaîne de conservation des preuves est-elle importante ?',
                        'choices' => [
                            ['text' => 'Elle permet de documenter comment les preuves ont été collectées, conservées et manipulées', 'correct' => true],
                            ['text' => 'Elle permet de supprimer les preuves plus rapidement', 'correct' => false],
                            ['text' => 'Elle remplace les contrôles d’accès', 'correct' => false],
                            ['text' => 'Elle chiffre automatiquement tous les serveurs', 'correct' => false],
                        ],
                        'explanation' => 'La traçabilité de la manipulation des preuves contribue à préserver leur intégrité et leur valeur dans une investigation.'
                    ],
                ],
            ],

            [
                'title' => 'Cybersécurité avancée — Identité et contrôle d’accès',
                'description' => 'Maîtrisez les concepts avancés d’IAM, MFA, fédération, RBAC, ABAC et gestion des privilèges.',
                'duration' => 20,
                'passing_score' => 70,
                'difficulty' => 'advanced',
                'questions' => [
                    [
                        'question' => 'Quelle différence fondamentale existe entre authentification et autorisation ?',
                        'choices' => [
                            ['text' => 'L’authentification vérifie l’identité tandis que l’autorisation détermine les actions permises', 'correct' => true],
                            ['text' => 'Elles désignent exactement le même processus', 'correct' => false],
                            ['text' => 'L’autorisation vérifie toujours le mot de passe', 'correct' => false],
                            ['text' => 'L’authentification ne concerne jamais les utilisateurs', 'correct' => false],
                        ],
                        'explanation' => 'L’authentification répond à « qui êtes-vous ? », tandis que l’autorisation répond à « que pouvez-vous faire ? ».'
                    ],
                    [
                        'question' => 'Quel est l’avantage principal du RBAC ?',
                        'choices' => [
                            ['text' => 'Attribuer les permissions selon des rôles plutôt que gérer chaque utilisateur individuellement', 'correct' => true],
                            ['text' => 'Supprimer tous les contrôles d’accès', 'correct' => false],
                            ['text' => 'Autoriser tous les utilisateurs', 'correct' => false],
                            ['text' => 'Remplacer le chiffrement', 'correct' => false],
                        ],
                        'explanation' => 'RBAC simplifie la gestion des permissions en les associant à des rôles organisationnels.'
                    ],
                    [
                        'question' => 'Quel modèle peut prendre en compte des attributs tels que l’identité, la ressource, l’heure et le contexte ?',
                        'choices' => [
                            ['text' => 'ABAC', 'correct' => true],
                            ['text' => 'FTP', 'correct' => false],
                            ['text' => 'NAT', 'correct' => false],
                            ['text' => 'ARP', 'correct' => false],
                        ],
                        'explanation' => 'Attribute-Based Access Control permet de prendre des décisions à partir de multiples attributs et conditions contextuelles.'
                    ],
                    [
                        'question' => 'Pourquoi le PAM est-il important dans une infrastructure d’entreprise ?',
                        'choices' => [
                            ['text' => 'Il permet de contrôler, surveiller et limiter l’utilisation des comptes à privilèges', 'correct' => true],
                            ['text' => 'Il remplace tous les systèmes DNS', 'correct' => false],
                            ['text' => 'Il supprime les comptes administrateurs', 'correct' => false],
                            ['text' => 'Il rend les mots de passe publics', 'correct' => false],
                        ],
                        'explanation' => 'Privileged Access Management vise à réduire le risque lié aux comptes administratifs et aux secrets associés.'
                    ],
                    [
                        'question' => 'Quel est le principal avantage de l’authentification multifacteur ?',
                        'choices' => [
                            ['text' => 'Elle exige plusieurs catégories de facteurs indépendants', 'correct' => true],
                            ['text' => 'Elle rend tous les mots de passe inutiles dans tous les cas', 'correct' => false],
                            ['text' => 'Elle désactive automatiquement les attaques réseau', 'correct' => false],
                            ['text' => 'Elle supprime le besoin d’autorisation', 'correct' => false],
                        ],
                        'explanation' => 'La MFA augmente la résistance aux compromissions d’un seul facteur d’authentification.'
                    ],
                    [
                        'question' => 'Pourquoi la fédération d’identité peut-elle réduire les risques opérationnels ?',
                        'choices' => [
                            ['text' => 'Elle permet de centraliser certaines fonctions d’identité et d’éviter la multiplication des comptes locaux', 'correct' => true],
                            ['text' => 'Elle élimine tous les contrôles d’accès', 'correct' => false],
                            ['text' => 'Elle rend les identités anonymes', 'correct' => false],
                            ['text' => 'Elle empêche toute révocation', 'correct' => false],
                        ],
                        'explanation' => 'La fédération permet à plusieurs services de s’appuyer sur une source d’identité commune selon des relations de confiance définies.'
                    ],
                    [
                        'question' => 'Quelle pratique est recommandée pour les comptes de service ?',
                        'choices' => [
                            ['text' => Leur attribuer uniquement les permissions nécessaires et gérer leurs secrets de manière sécurisée', 'correct' => true],
                            ['text' => 'Leur donner systématiquement des privilèges administrateurs', 'correct' => false],
                            ['text' => 'Partager leurs secrets publiquement', 'correct' => false],
                            ['text' => 'Désactiver toute rotation de secret', 'correct' => false],
                        ],
                        'explanation' => 'Les comptes de service doivent être traités comme des identités sensibles avec un périmètre de privilèges minimal.'
                    ],
                    [
                        'question' => 'Quel mécanisme peut limiter la durée d’utilisation d’un privilège élevé ?',
                        'choices' => [
                            ['text' => 'L’accès juste-à-temps', 'correct' => true],
                            ['text' => 'Le privilège permanent', 'correct' => false],
                            ['text' => 'Le partage de comptes', 'correct' => false],
                            ['text' => 'La suppression des journaux', 'correct' => false],
                        ],
                        'explanation' => 'Le Just-In-Time Access fournit un privilège temporaire lorsque celui-ci est nécessaire, réduisant ainsi l’exposition.'
                    ],
                    [
                        'question' => 'Pourquoi faut-il désactiver rapidement les comptes d’utilisateurs qui ne doivent plus accéder au système ?',
                        'choices' => [
                            ['text' => 'Pour réduire le risque d’utilisation abusive d’une identité devenue inutile', 'correct' => true],
                            ['text' => 'Pour améliorer la vitesse du processeur', 'correct' => false],
                            ['text' => 'Pour remplacer les certificats TLS', 'correct' => false],
                            ['text' => 'Pour désactiver les sauvegardes', 'correct' => false],
                        ],
                        'explanation' => 'Les comptes obsolètes constituent une surface d’attaque inutile et doivent être désactivés selon le cycle de vie des identités.'
                    ],
                    [
                        'question' => 'Quel principe impose une réévaluation régulière des permissions attribuées ?',
                        'choices' => [
                            ['text' => La revue périodique des accès', 'correct' => true],
                            ['text' => 'La confiance permanente', 'correct' => false],
                            ['text' => 'Le partage de privilèges', 'correct' => false],
                            ['text' => 'L’accès anonyme', 'correct' => false],
                        ],
                        'explanation' => 'Les droits doivent être régulièrement réévalués afin de détecter les privilèges devenus inutiles ou excessifs.'
                    ],
                ],
            ],

            [
                'title' => 'Cybersécurité avancée — Sécurité cloud',
                'description' => 'Évaluez votre compréhension des modèles cloud, de la responsabilité partagée, IAM, stockage et journalisation.',
                'duration' => 20,
                'passing_score' => 70,
                'difficulty' => 'advanced',
                'questions' => [
                    [
                        'question' => 'Que signifie le modèle de responsabilité partagée dans le cloud ?',
                        'choices' => [
                            ['text' => 'Le fournisseur et le client ont chacun des responsabilités de sécurité selon le service utilisé', 'correct' => true],
                            ['text' => 'Le fournisseur est toujours responsable de tout', 'correct' => false],
                            ['text' => 'Le client n’a aucune responsabilité', 'correct' => false],
                            ['text' => 'La sécurité est optionnelle dans le cloud', 'correct' => false],
                        ],
                        'explanation' => 'La répartition précise dépend du modèle de service, mais le client conserve toujours certaines responsabilités.'
                    ],
                    [
                        'question' => 'Quel risque est particulièrement critique pour un stockage cloud mal configuré ?',
                        'choices' => [
                            ['text' => 'L’exposition publique involontaire de données sensibles', 'correct' => true],
                            ['text' => 'La suppression automatique de TLS partout', 'correct' => false],
                            ['text' => 'La réduction des privilèges administrateurs', 'correct' => false],
                            ['text' => 'L’amélioration de la confidentialité', 'correct' => false],
                        ],
                        'explanation' => 'Une mauvaise configuration des politiques d’accès peut rendre des données accessibles à des entités non autorisées.'
                    ],
                    [
                        'question' => 'Pourquoi les identités cloud doivent-elles être surveillées attentivement ?',
                        'choices' => [
                            ['text' => 'Parce qu’un compte compromis peut permettre d’accéder à de nombreuses ressources via les API cloud', 'correct' => true],
                            ['text' => 'Parce que les comptes cloud ne peuvent jamais être révoqués', 'correct' => false],
                            ['text' => 'Parce que les API cloud n’ont aucun contrôle d’accès', 'correct' => false],
                            ['text' => 'Parce que le cloud ne possède aucun journal', 'correct' => false],
                        ],
                        'explanation' => 'Les plateformes cloud sont fortement pilotées par les identités et les API, ce qui rend les privilèges particulièrement sensibles.'
                    ],
                    [
                        'question' => 'Quel contrôle réduit le risque lié à une clé d’accès cloud longue durée ?',
                        'choices' => [
                            ['text' => Privilégier des identifiants temporaires lorsque cela est possible', 'correct' => true],
                            ['text' => 'Publier la clé dans le code', 'correct' => false],
                            ['text' => 'Partager la clé entre toutes les équipes', 'correct' => false],
                            ['text' => 'Désactiver les journaux d’utilisation', 'correct' => false],
                        ],
                        'explanation' => 'Les identifiants temporaires réduisent la fenêtre d’exploitation en cas de compromission.'
                    ],
                    [
                        'question' => 'Quel principe doit guider les permissions IAM cloud ?',
                        'choices' => [
                            ['text' => 'Le moindre privilège', 'correct' => true],
                            ['text' => 'Le privilège maximal', 'correct' => false],
                            ['text' => 'L’accès anonyme', 'correct' => false],
                            ['text' => 'Le partage universel', 'correct' => false],
                        ],
                        'explanation' => 'Les permissions IAM doivent être limitées aux ressources et actions réellement nécessaires.'
                    ],
                    [
                        'question' => 'Pourquoi centraliser les journaux cloud est-il utile ?',
                        'choices' => [
                            ['text' => 'Pour améliorer la corrélation, la détection et l’investigation', 'correct' => true],
                            ['text' => 'Pour supprimer toutes les traces', 'correct' => false],
                            ['text' => 'Pour rendre les comptes anonymes', 'correct' => false],
                            ['text' => 'Pour désactiver les contrôles IAM', 'correct' => false],
                        ],
                        'explanation' => 'Une visibilité centralisée facilite la détection d’activités anormales réparties entre plusieurs services.'
                    ],
                    [
                        'question' => 'Quel problème peut survenir lorsqu’une organisation utilise trop de permissions IAM très larges ?',
                        'choices' => [
                            ['text' => 'Une compromission d’identité peut avoir un impact beaucoup plus important', 'correct' => true],
                            ['text' => 'Les utilisateurs deviennent automatiquement anonymes', 'correct' => false],
                            ['text' => 'Les sauvegardes deviennent impossibles', 'correct' => false],
                            ['text' => 'Le chiffrement devient automatiquement plus fort', 'correct' => false],
                        ],
                        'explanation' => 'Des permissions excessives augmentent le rayon d’impact d’un compte compromis.'
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une politique de rétention des logs cloud ?',
                        'choices' => [
                            ['text' => 'Conserver suffisamment longtemps les données nécessaires à la détection et à l’investigation', 'correct' => true],
                            ['text' => 'Supprimer immédiatement toutes les traces', 'correct' => false],
                            ['text' => 'Désactiver les audits', 'correct' => false],
                            ['text' => 'Donner accès aux logs à tout le monde', 'correct' => false],
                        ],
                        'explanation' => 'La rétention doit équilibrer besoins d’investigation, exigences réglementaires, coûts et risques.'
                    ],
                    [
                        'question' => 'Pourquoi l’IaC doit-elle être intégrée aux pratiques de sécurité ?',
                        'choices' => [
                            ['text' => 'Parce que les configurations d’infrastructure deviennent reproductibles et peuvent être contrôlées avant déploiement', 'correct' => true],
                            ['text' => 'Parce que le code IaC ne peut jamais contenir d’erreurs', 'correct' => false],
                            ['text' => 'Parce que l’IaC désactive les identités', 'correct' => false],
                            ['text' => 'Parce que l’IaC remplace tous les tests', 'correct' => false],
                        ],
                        'explanation' => 'L’infrastructure as Code permet notamment d’automatiser des contrôles et de détecter certaines mauvaises configurations avant leur déploiement.'
                    ],
                    [
                        'question' => 'Quel concept consiste à analyser en continu la posture de sécurité des ressources cloud ?',
                        'choices' => [
                            ['text' => 'La gestion de la posture de sécurité cloud', 'correct' => true],
                            ['text' => 'La compression cloud', 'correct' => false],
                            ['text' => 'Le routage anonyme', 'correct' => false],
                            ['text' => 'Le partage public automatique', 'correct' => false],
                        ],
                        'explanation' => 'Les outils de posture de sécurité permettent d’identifier les mauvaises configurations et écarts par rapport aux politiques de sécurité.'
                    ],
                ],
            ],

            [
                'title' => 'Cybersécurité avancée — Sécurité réseau',
                'description' => 'Analyse avancée des protocoles, pare-feu, DNS, segmentation, VPN et détection réseau.',
                'duration' => 20,
                'passing_score' => 70,
                'difficulty' => 'advanced',
                'questions' => [
                    [
                        'question' => 'Quel est le principal objectif d’un pare-feu stateful ?',
                        'choices' => [
                            ['text' => 'Prendre des décisions en tenant compte de l’état des connexions réseau', 'correct' => true],
                            ['text' => 'Chiffrer tous les fichiers', 'correct' => false],
                            ['text' => 'Remplacer les systèmes IAM', 'correct' => false],
                            ['text' => 'Analyser uniquement les mots de passe', 'correct' => false],
                        ],
                        'explanation' => 'Un pare-feu stateful conserve un état des connexions afin d’appliquer des politiques tenant compte du contexte de la session.'
                    ],
                    [
                        'question' => 'Quel avantage apporte un VPN correctement configuré ?',
                        'choices' => [
                            ['text' => 'Créer un canal protégé pour les communications sur un réseau non fiable', 'correct' => true],
                            ['text' => 'Rendre les endpoints invulnérables', 'correct' => false],
                            ['text' => 'Supprimer le besoin d’authentification', 'correct' => false],
                            ['text' => 'Empêcher toutes les attaques applicatives', 'correct' => false],
                        ],
                        'explanation' => 'Un VPN protège principalement le transport entre les extrémités selon les mécanismes de chiffrement et d’authentification utilisés.'
                    ],
                    [
                        'question' => 'Pourquoi le DNS est-il intéressant pour la détection de menaces ?',
                        'choices' => [
                            ['text' => 'Les requêtes DNS peuvent révéler des domaines malveillants ou des comportements anormaux', 'correct' => true],
                            ['text' => 'Le DNS chiffre toujours tout le trafic applicatif', 'correct' => false],
                            ['text' => 'Le DNS remplace les EDR', 'correct' => false],
                            ['text' => 'Le DNS ne produit aucune information exploitable', 'correct' => false],
                        ],
                        'explanation' => 'Les métadonnées DNS peuvent être très utiles pour détecter des communications vers des infrastructures suspectes.'
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une DMZ dans une architecture réseau ?',
                        'choices' => [
                            ['text' => 'Isoler certains services exposés tout en limitant leur accès au réseau interne', 'correct' => true],
                            ['text' => 'Donner un accès direct à tous les serveurs internes', 'correct' => false],
                            ['text' => 'Supprimer les contrôles réseau', 'correct' => false],
                            ['text' => 'Stocker uniquement les mots de passe', 'correct' => false],
                        ],
                        'explanation' => 'Une DMZ crée une zone intermédiaire permettant de réduire l’exposition du réseau interne.'
                    ],
                    [
                        'question' => 'Quel mécanisme permet de détecter des signatures connues d’attaques réseau ?',
                        'choices' => [
                            ['text' => Un IDS basé sur les signatures', 'correct' => true],
                            ['text' => 'Un serveur DHCP uniquement', 'correct' => false],
                            ['text' => 'Un serveur NTP uniquement', 'correct' => false],
                            ['text' => 'Un proxy sans journalisation', 'correct' => false],
                        ],
                        'explanation' => 'La détection par signature compare les événements ou paquets à des motifs connus associés à des menaces.'
                    ],
                    [
                        'question' => 'Pourquoi le filtrage sortant est-il important ?',
                        'choices' => [
                            ['text' => 'Il peut limiter les communications d’un système compromis vers des destinations non autorisées', 'correct' => true],
                            ['text' => 'Il empêche uniquement les connexions entrantes', 'correct' => false],
                            ['text' => 'Il remplace la gestion des identités', 'correct' => false],
                            ['text' => 'Il rend inutiles les journaux', 'correct' => false],
                        ],
                        'explanation' => 'Le contrôle du trafic sortant peut réduire la capacité d’un système compromis à communiquer avec une infrastructure externe.'
                    ],
                    [
                        'question' => 'Quel risque est associé à un protocole réseau non chiffré sur un réseau non fiable ?',
                        'choices' => [
                            ['text' => L’interception ou la modification potentielle des communications', 'correct' => true],
                            ['text' => 'La suppression automatique des comptes', 'correct' => false],
                            ['text' => 'L’amélioration de l’intégrité', 'correct' => false],
                            ['text' => 'La réduction automatique des privilèges', 'correct' => false],
                        ],
                        'explanation' => 'Sans protection cryptographique adaptée, les communications peuvent être exposées à l’écoute ou à la manipulation.'
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’un proxy inverse ?',
                        'choices' => [
                            ['text' => 'Recevoir les requêtes des clients et les transmettre aux services backend selon des politiques définies', 'correct' => true],
                            ['text' => 'Stocker les mots de passe en clair', 'correct' => false],
                            ['text' => 'Remplacer toutes les bases de données', 'correct' => false],
                            ['text' => 'Supprimer TLS', 'correct' => false],
                        ],
                        'explanation' => 'Un reverse proxy se place devant les services backend et peut fournir notamment routage, filtrage, terminaison TLS et contrôle du trafic.'
                    ],
                    [
                        'question' => 'Quel mécanisme réduit la surface d’attaque d’un serveur réseau ?',
                        'choices' => [
                            ['text' => Désactiver les services et ports inutiles', 'correct' => true],
                            ['text' => 'Activer tous les services disponibles', 'correct' => false],
                            ['text' => 'Partager tous les ports avec Internet', 'correct' => false],
                            ['text' => 'Supprimer les journaux', 'correct' => false],
                        ],
                        'explanation' => 'Chaque service exposé constitue une surface potentielle d’attaque ; les services inutiles doivent donc être supprimés ou désactivés.'
                    ],
                    [
                        'question' => 'Quel avantage fournit une architecture réseau basée sur plusieurs zones de confiance ?',
                        'choices' => [
                            ['text' => 'Elle permet d’appliquer des politiques différentes selon la sensibilité des ressources', 'correct' => true],
                            ['text' => 'Elle élimine tous les contrôles d’accès', 'correct' => false],
                            ['text' => 'Elle rend tous les systèmes publics', 'correct' => false],
                            ['text' => 'Elle empêche la journalisation', 'correct' => false],
                        ],
                        'explanation' => 'La séparation en zones permet d’adapter les contrôles aux différents niveaux de sensibilité et de réduire les chemins d’attaque.'
                    ],
                ],
            ],

            [
                'title' => 'Cybersécurité avancée — Gouvernance et gestion des risques',
                'description' => 'Évaluez vos connaissances avancées en gouvernance, conformité, risques, contrôles et résilience.',
                'duration' => 20,
                'passing_score' => 70,
                'difficulty' => 'advanced',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal d’une analyse de risques cyber ?',
                        'choices' => [
                            ['text' => 'Identifier, évaluer et prioriser les risques afin de guider les mesures de traitement', 'correct' => true],
                            ['text' => 'Supprimer tous les risques sans exception', 'correct' => false],
                            ['text' => 'Remplacer les contrôles techniques', 'correct' => false],
                            ['text' => 'Éviter toute documentation', 'correct' => false],
                        ],
                        'explanation' => 'La gestion des risques vise à comprendre les menaces et impacts afin de déterminer les mesures appropriées.'
                    ],
                    [
                        'question' => 'Quelle différence existe entre risque inhérent et risque résiduel ?',
                        'choices' => [
                            ['text' => 'Le risque résiduel est celui qui demeure après prise en compte des contrôles', 'correct' => true],
                            ['text' => 'Le risque inhérent apparaît uniquement après les contrôles', 'correct' => false],
                            ['text' => 'Ils sont toujours identiques', 'correct' => false],
                            ['text' => 'Le risque résiduel est toujours nul', 'correct' => false],
                        ],
                        'explanation' => 'Le risque inhérent existe avant les contrôles tandis que le risque résiduel correspond à l’exposition restante.'
                    ],
                    [
                        'question' => 'Que signifie le principe de séparation des tâches ?',
                        'choices' => [
                            ['text' => 'Répartir certaines responsabilités sensibles entre plusieurs personnes ou rôles', 'correct' => true],
                            ['text' => 'Donner toutes les permissions à un seul administrateur', 'correct' => false],
                            ['text' => 'Supprimer les contrôles internes', 'correct' => false],
                            ['text' => 'Permettre l’anonymat total', 'correct' => false],
                        ],
                        'explanation' => 'La séparation des tâches réduit le risque qu’une seule personne puisse réaliser ou dissimuler seule une opération sensible.'
                    ],
                    [
                        'question' => 'Pourquoi les actifs critiques doivent-ils être identifiés ?',
                        'choices' => [
                            ['text' => 'Pour concentrer les efforts de protection sur les ressources dont l’impact d’une compromission serait important', 'correct' => true],
                            ['text' => 'Pour les rendre publics', 'correct' => false],
                            ['text' => 'Pour désactiver les sauvegardes', 'correct' => false],
                            ['text' => 'Pour supprimer les contrôles', 'correct' => false],
                        ],
                        'explanation' => 'La criticité des actifs permet de prioriser les investissements et contrôles de sécurité.'
                    ],
                    [
                        'question' => 'Quel est le rôle d’un contrôle compensatoire ?',
                        'choices' => [
                            ['text' => Fournir une mesure alternative lorsqu’un contrôle principal ne peut pas être appliqué directement', 'correct' => true],
                            ['text' => 'Supprimer toute politique de sécurité', 'correct' => false],
                            ['text' => 'Augmenter volontairement le risque', 'correct' => false],
                            ['text' => 'Remplacer les audits par des suppositions', 'correct' => false],
                        ],
                        'explanation' => 'Un contrôle compensatoire réduit le risque par un autre moyen lorsqu’une mesure attendue n’est pas réalisable.'
                    ],
                    [
                        'question' => 'Pourquoi les audits de sécurité sont-ils utiles ?',
                        'choices' => [
                            ['text' => 'Ils permettent d’évaluer si les contrôles et processus respectent les exigences définies', 'correct' => true],
                            ['text' => 'Ils garantissent qu’aucune attaque ne se produira', 'correct' => false],
                            ['text' => 'Ils suppriment la nécessité de surveillance', 'correct' => false],
                            ['text' => 'Ils rendent les vulnérabilités impossibles', 'correct' => false],
                        ],
                        'explanation' => 'Un audit fournit une évaluation structurée de la conformité et de l’efficacité des contrôles.'
                    ],
                    [
                        'question' => 'Quel concept décrit la capacité d’une organisation à continuer ses activités malgré une perturbation ?',
                        'choices' => [
                            ['text' => 'La résilience opérationnelle', 'correct' => true],
                            ['text' => 'La confiance implicite', 'correct' => false],
                            ['text' => 'La compression réseau', 'correct' => false],
                            ['text' => 'La rotation DNS', 'correct' => false],
                        ],
                        'explanation' => 'La résilience vise à maintenir ou restaurer les fonctions critiques malgré les perturbations.'
                    ],
                    [
                        'question' => 'Quel est l’objectif du RTO ?',
                        'choices' => [
                            ['text' => 'Définir le délai cible pour restaurer un service après une interruption', 'correct' => true],
                            ['text' => 'Définir le volume maximal de données perdu', 'correct' => false],
                            ['text' => 'Définir le nombre d’utilisateurs autorisés', 'correct' => false],
                            ['text' => 'Définir la longueur minimale d’un mot de passe', 'correct' => false],
                        ],
                        'explanation' => 'Recovery Time Objective définit le délai cible de reprise d’un service ou processus.'
                    ],
                    [
                        'question' => 'Quel est l’objectif du RPO ?',
                        'choices' => [
                            ['text' => 'Définir la quantité maximale de données qu’une organisation accepte de perdre après un incident', 'correct' => true],
                            ['text' => 'Définir le délai maximal d’une session utilisateur', 'correct' => false],
                            ['text' => 'Définir la durée d’un certificat', 'correct' => false],
                            ['text' => 'Définir la durée d’une analyse antivirus', 'correct' => false],
                        ],
                        'explanation' => 'Recovery Point Objective exprime le point de récupération acceptable et donc la perte maximale de données tolérée.'
                    ],
                    [
                        'question' => 'Pourquoi les politiques de sécurité doivent-elles être régulièrement révisées ?',
                        'choices' => [
                            ['text' => 'Parce que les technologies, menaces, exigences et risques évoluent', 'correct' => true],
                            ['text' => 'Parce qu’une politique ne peut jamais être documentée', 'correct' => false],
                            ['text' => 'Parce que les contrôles deviennent automatiquement inutiles', 'correct' => false],
                            ['text' => 'Parce que toutes les menaces disparaissent', 'correct' => false],
                        ],
                        'explanation' => 'Une politique efficace doit rester alignée avec l’évolution du contexte technologique, organisationnel et des menaces.'
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
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => $quizData['difficulty'],
                ]
            );

            foreach ($quizData['questions'] as $questionIndex => $questionData) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'question' => $questionData['question'],
                    ],
                    [
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $questionData['explanation'],
                        'order' => $questionIndex + 1,
                    ]
                );

                Choice::where('question_id', $question->id)->delete();

                $choices = collect($questionData['choices'])
                    ->shuffle()
                    ->values();

                foreach ($choices as $choiceIndex => $choiceData) {
                    Choice::create([
                        'question_id' => $question->id,
                        'text' => $choiceData['text'],
                        'is_correct' => $choiceData['correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }
}