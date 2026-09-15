<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;
use Illuminate\Database\Seeder;

class CybersecurityAdvancedExtraSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'cybersecurity')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Cybersécurité avancée — Architecture et défense',
                'description' => 'Évaluez votre maîtrise des architectures de sécurité modernes, de la segmentation et des mécanismes défensifs avancés.',
                'duration' => 20,
                'passing_score' => 70,
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal d’une architecture Zero Trust ?',
                        'choices' => [
                            ['choice_text' => 'Faire confiance aux utilisateurs internes par défaut', 'is_correct' => false],
                            ['choice_text' => 'Ne faire confiance à aucune entité par défaut et vérifier continuellement les accès', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les contrôles réseau', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les antivirus par un pare-feu', 'is_correct' => false],
                        ],
                        'explanation' => 'Zero Trust repose sur le principe « never trust, always verify » et impose une vérification continue du contexte et des privilèges.'
                    ],
                    [
                        'question' => 'Quelle technique limite le mieux les mouvements latéraux d’un attaquant dans un réseau compromis ?',
                        'choices' => [
                            ['choice_text' => 'La segmentation réseau', 'is_correct' => true],
                            ['choice_text' => 'La compression des fichiers', 'is_correct' => false],
                            ['choice_text' => 'Le changement du nom des serveurs', 'is_correct' => false],
                            ['choice_text' => 'La désactivation du DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'La segmentation réduit les chemins accessibles entre différentes zones et limite ainsi les déplacements latéraux.'
                    ],
                    [
                        'question' => 'Que permet principalement un bastion d’administration ?',
                        'choices' => [
                            ['choice_text' => 'Centraliser et contrôler les accès administratifs sensibles', 'is_correct' => true],
                            ['choice_text' => 'Accélérer les téléchargements Internet', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Chiffrer automatiquement toutes les bases de données', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bastion fournit un point contrôlé, journalisé et durci pour les connexions d’administration.'
                    ],
                    [
                        'question' => 'Quel principe de sécurité réduit directement l’impact d’un compte compromis ?',
                        'choices' => [
                            ['choice_text' => 'Le moindre privilège', 'is_correct' => true],
                            ['choice_text' => 'Le partage des comptes', 'is_correct' => false],
                            ['choice_text' => 'L’utilisation permanente du compte root', 'is_correct' => false],
                            ['choice_text' => 'La suppression des journaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le principe du moindre privilège limite les ressources et actions accessibles à chaque identité.'
                    ],
                    [
                        'question' => 'Quel mécanisme est particulièrement adapté à la protection d’une API contre les abus de volume ?',
                        'choices' => [
                            ['choice_text' => 'Le rate limiting', 'is_correct' => true],
                            ['choice_text' => 'Le renommage des endpoints', 'is_correct' => false],
                            ['choice_text' => 'La désactivation de TLS', 'is_correct' => false],
                            ['choice_text' => 'La suppression des logs', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rate limiting impose des limites au nombre de requêtes qu’une identité ou une source peut effectuer pendant une période donnée.'
                    ],
                    [
                        'question' => 'Quel composant permet généralement de centraliser l’application des politiques d’accès dans une architecture Zero Trust ?',
                        'choices' => [
                            ['choice_text' => 'Un moteur de décision de politique', 'is_correct' => true],
                            ['choice_text' => 'Un simple switch non administrable', 'is_correct' => false],
                            ['choice_text' => 'Un compresseur de fichiers', 'is_correct' => false],
                            ['choice_text' => 'Un serveur NTP uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les architectures Zero Trust utilisent des composants de décision et d’application de politiques pour déterminer si une demande doit être autorisée.'
                    ],
                    [
                        'question' => 'Pourquoi la microsegmentation est-elle plus granulaire qu’une segmentation réseau classique ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut appliquer des politiques au niveau de charges de travail ou d’identités spécifiques', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime les contrôles d’accès', 'is_correct' => false],
                            ['choice_text' => 'Elle fonctionne uniquement sur Internet public', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche tout chiffrement', 'is_correct' => false],
                        ],
                        'explanation' => 'La microsegmentation permet de contrôler beaucoup plus finement les communications entre charges de travail et services.'
                    ],
                    [
                        'question' => 'Quel contrôle est particulièrement important pour sécuriser un compte à privilèges élevés ?',
                        'choices' => [
                            ['choice_text' => 'L’authentification multifacteur', 'is_correct' => true],
                            ['choice_text' => 'Le partage du mot de passe entre administrateurs', 'is_correct' => false],
                            ['choice_text' => 'La désactivation des journaux', 'is_correct' => false],
                            ['choice_text' => 'L’utilisation d’un mot de passe commun', 'is_correct' => false],
                        ],
                        'explanation' => 'La MFA ajoute un facteur indépendant et réduit le risque lié au vol du secret d’authentification.'
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’un système NAC ?',
                        'choices' => [
                            ['choice_text' => 'Contrôler l’accès des appareils au réseau selon des politiques de sécurité', 'is_correct' => true],
                            ['choice_text' => 'Générer des clés privées uniquement', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les applications métiers', 'is_correct' => false],
                            ['choice_text' => 'Compresser les paquets réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Network Access Control vérifie le contexte et l’état des terminaux avant ou pendant leur accès au réseau.'
                    ],
                    [
                        'question' => 'Quel principe consiste à concevoir les systèmes afin qu’une compromission isolée ne provoque pas une compromission globale ?',
                        'choices' => [
                            ['choice_text' => 'La défense en profondeur', 'is_correct' => true],
                            ['choice_text' => 'La confiance implicite', 'is_correct' => false],
                            ['choice_text' => 'La centralisation sans contrôle', 'is_correct' => false],
                            ['choice_text' => 'Le partage de privilèges', 'is_correct' => false],
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
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quelle propriété garantit qu’une fonction de hachage cryptographique rend difficile la récupération du message original à partir du hash ?',
                        'choices' => [
                            ['choice_text' => 'La résistance à la préimage', 'is_correct' => true],
                            ['choice_text' => 'La compression réseau', 'is_correct' => false],
                            ['choice_text' => 'La réplication', 'is_correct' => false],
                            ['choice_text' => 'La disponibilité', 'is_correct' => false],
                        ],
                        'explanation' => 'La résistance à la préimage signifie qu’il doit être computationnellement difficile de retrouver une entrée correspondant à un hash donné.'
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’une signature numérique ?',
                        'choices' => [
                            ['choice_text' => 'Garantir l’intégrité et fournir une preuve cryptographique de l’origine', 'is_correct' => true],
                            ['choice_text' => 'Compresser les données', 'is_correct' => false],
                            ['choice_text' => 'Rendre les données disponibles hors ligne', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les clés symétriques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une signature numérique permet notamment de vérifier l’intégrité du contenu et l’authenticité de son signataire.'
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on généralement un chiffrement symétrique pour chiffrer de gros volumes de données ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il est généralement beaucoup plus efficace pour le traitement de grandes quantités de données', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il ne nécessite aucune clé', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il fournit automatiquement une identité', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il ne peut jamais être compromis', 'is_correct' => false],
                        ],
                        'explanation' => 'Les algorithmes symétriques sont généralement bien plus performants que les mécanismes asymétriques pour le chiffrement de données volumineuses.'
                    ],
                    [
                        'question' => 'Quel problème est principalement résolu par Diffie-Hellman ?',
                        'choices' => [
                            ['choice_text' => 'L’établissement sécurisé d’un secret partagé sur un canal non sécurisé', 'is_correct' => true],
                            ['choice_text' => 'La détection automatique des malwares', 'is_correct' => false],
                            ['choice_text' => 'La compression des paquets', 'is_correct' => false],
                            ['choice_text' => 'La sauvegarde des bases de données', 'is_correct' => false],
                        ],
                        'explanation' => 'Diffie-Hellman permet à deux parties d’établir un secret partagé sans transmettre directement ce secret sur le réseau.'
                    ],
                    [
                        'question' => 'Quel est le rôle d’une autorité de certification dans une PKI ?',
                        'choices' => [
                            ['choice_text' => 'Émettre et signer des certificats numériques selon une politique de confiance', 'is_correct' => true],
                            ['choice_text' => 'Analyser tous les fichiers utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les pare-feu', 'is_correct' => false],
                            ['choice_text' => 'Stocker tous les mots de passe en clair', 'is_correct' => false],
                        ],
                        'explanation' => 'La CA émet et signe des certificats qui permettent d’associer une identité à une clé publique.'
                    ],
                    [
                        'question' => 'Pourquoi le sel est-il utilisé avec le stockage des mots de passe ?',
                        'choices' => [
                            ['choice_text' => 'Pour rendre les hashes identiques beaucoup moins prévisibles et résister aux attaques pré-calculées', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les mots de passe réversibles', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le besoin de hachage', 'is_correct' => false],
                            ['choice_text' => 'Pour permettre de récupérer le mot de passe original', 'is_correct' => false],
                        ],
                        'explanation' => 'Un sel unique par mot de passe empêche notamment l’utilisation directe de tables pré-calculées et fait que deux mots de passe identiques ne produisent pas nécessairement le même hash.'
                    ],
                    [
                        'question' => 'Quelle propriété offre le forward secrecy ?',
                        'choices' => [
                            ['choice_text' => 'La compromission ultérieure d’une clé à long terme ne doit pas permettre de déchiffrer les sessions passées', 'is_correct' => true],
                            ['choice_text' => 'Toutes les sessions utilisent la même clé permanente', 'is_correct' => false],
                            ['choice_text' => 'Les certificats ne sont jamais renouvelés', 'is_correct' => false],
                            ['choice_text' => 'Les clés privées sont transmises avec les messages', 'is_correct' => false],
                        ],
                        'explanation' => 'Le forward secrecy protège les anciennes sessions grâce à des secrets de session éphémères indépendants des clés à long terme.'
                    ],
                    [
                        'question' => 'Quel risque est directement associé à une mauvaise gestion des clés cryptographiques ?',
                        'choices' => [
                            ['choice_text' => 'La compromission des données protégées malgré l’utilisation d’un algorithme robuste', 'is_correct' => true],
                            ['choice_text' => 'L’augmentation automatique de la disponibilité', 'is_correct' => false],
                            ['choice_text' => 'La suppression des vulnérabilités applicatives', 'is_correct' => false],
                            ['choice_text' => 'La désactivation des attaques par déni de service', 'is_correct' => false],
                        ],
                        'explanation' => 'Une cryptographie robuste ne suffit pas si les clés sont exposées, mal stockées, trop largement accessibles ou insuffisamment renouvelées.'
                    ],
                    [
                        'question' => 'Quel mécanisme est préférable pour protéger une clé secrète d’application à haute valeur ?',
                        'choices' => [
                            ['choice_text' => 'Un HSM ou un service de gestion de secrets correctement sécurisé', 'is_correct' => true],
                            ['choice_text' => 'Un fichier texte public dans le dépôt Git', 'is_correct' => false],
                            ['choice_text' => 'Un commentaire dans le code source', 'is_correct' => false],
                            ['choice_text' => 'Une variable JavaScript visible côté client', 'is_correct' => false],
                        ],
                        'explanation' => 'Les HSM et systèmes de gestion de secrets permettent de contrôler et protéger les clés sensibles bien mieux qu’un stockage directement dans le code.'
                    ],
                    [
                        'question' => 'Quel est le principal avantage d’un chiffrement authentifié comme AES-GCM ?',
                        'choices' => [
                            ['choice_text' => 'Il fournit à la fois confidentialité et authentification/intégrité des données', 'is_correct' => true],
                            ['choice_text' => 'Il supprime le besoin de gérer les clés', 'is_correct' => false],
                            ['choice_text' => 'Il rend les signatures numériques inutiles dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Il permet de déchiffrer sans clé', 'is_correct' => false],
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
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quelle défense est la plus appropriée contre les injections SQL ?',
                        'choices' => [
                            ['choice_text' => 'Les requêtes paramétrées', 'is_correct' => true],
                            ['choice_text' => 'Le changement du nom des tables', 'is_correct' => false],
                            ['choice_text' => 'La suppression des logs', 'is_correct' => false],
                            ['choice_text' => 'L’utilisation de mots de passe plus longs uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les requêtes paramétrées séparent les données des instructions SQL et empêchent les entrées utilisateur de devenir du code SQL.'
                    ],
                    [
                        'question' => 'Quel est le principe d’une défense contre XSS basée sur l’encodage de sortie ?',
                        'choices' => [
                            ['choice_text' => 'Encoder les données selon le contexte avant de les intégrer dans la réponse', 'is_correct' => true],
                            ['choice_text' => 'Faire confiance aux données provenant du navigateur', 'is_correct' => false],
                            ['choice_text' => 'Désactiver HTTPS', 'is_correct' => false],
                            ['choice_text' => 'Stocker tous les scripts dans les cookies', 'is_correct' => false],
                        ],
                        'explanation' => 'L’encodage contextuel empêche qu’une donnée contrôlée par un attaquant soit interprétée comme du code par le navigateur.'
                    ],
                    [
                        'question' => 'Quel attribut de cookie limite fortement son exposition au JavaScript côté client ?',
                        'choices' => [
                            ['choice_text' => 'HttpOnly', 'is_correct' => true],
                            ['choice_text' => 'Public', 'is_correct' => false],
                            ['choice_text' => 'Readable', 'is_correct' => false],
                            ['choice_text' => 'Debug', 'is_correct' => false],
                        ],
                        'explanation' => 'HttpOnly empêche l’accès au cookie via les API JavaScript classiques du navigateur.'
                    ],
                    [
                        'question' => 'Quel contrôle réduit le risque de CSRF pour une application web ?',
                        'choices' => [
                            ['choice_text' => 'Un token CSRF imprévisible vérifié côté serveur', 'is_correct' => true],
                            ['choice_text' => 'Un identifiant de session visible dans l’URL', 'is_correct' => false],
                            ['choice_text' => 'La suppression des cookies', 'is_correct' => false],
                            ['choice_text' => 'La désactivation de TLS', 'is_correct' => false],
                        ],
                        'explanation' => 'Un token CSRF permet au serveur de distinguer une requête légitime d’une requête forgée depuis un autre contexte.'
                    ],
                    [
                        'question' => 'Pourquoi la validation côté client seule est-elle insuffisante ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le client peut être contrôlé ou contourné par l’utilisateur', 'is_correct' => true],
                            ['choice_text' => 'Parce que JavaScript est toujours chiffré', 'is_correct' => false],
                            ['choice_text' => 'Parce que les navigateurs ne peuvent pas exécuter de validation', 'is_correct' => false],
                            ['choice_text' => 'Parce que TLS supprime les validations', 'is_correct' => false],
                        ],
                        'explanation' => 'Toute donnée reçue par le serveur doit être considérée comme non fiable et validée côté serveur.'
                    ],
                    [
                        'question' => 'Quel problème peut être causé par une désérialisation non sécurisée ?',
                        'choices' => [
                            ['choice_text' => 'L’exécution de comportements ou de code non prévu selon le mécanisme de désérialisation', 'is_correct' => true],
                            ['choice_text' => 'La réduction automatique des privilèges', 'is_correct' => false],
                            ['choice_text' => 'La suppression des injections SQL', 'is_correct' => false],
                            ['choice_text' => 'L’amélioration automatique du chiffrement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une désérialisation dangereuse peut permettre la manipulation d’objets et, selon la technologie, conduire à des conséquences critiques.'
                    ],
                    [
                        'question' => 'Quelle pratique réduit le risque lié aux secrets présents dans le code source ?',
                        'choices' => [
                            ['choice_text' => 'Utiliser un gestionnaire de secrets et effectuer une rotation des secrets', 'is_correct' => true],
                            ['choice_text' => 'Encoder les secrets en Base64', 'is_correct' => false],
                            ['choice_text' => 'Renommer les variables', 'is_correct' => false],
                            ['choice_text' => 'Les déplacer dans des commentaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Base64 n’est pas un mécanisme de protection. Les secrets doivent être gérés séparément du code et pouvoir être renouvelés.'
                    ],
                    [
                        'question' => 'Quel contrôle est particulièrement important pour une API manipulant des ressources appartenant à différents utilisateurs ?',
                        'choices' => [
                            ['choice_text' => 'La vérification systématique de l’autorisation sur chaque objet', 'is_correct' => true],
                            ['choice_text' => 'La confiance dans l’identifiant envoyé par le client', 'is_correct' => false],
                            ['choice_text' => 'La désactivation de l’authentification', 'is_correct' => false],
                            ['choice_text' => 'La suppression des identifiants de ressources', 'is_correct' => false],
                        ],
                        'explanation' => 'L’authentification indique qui est l’utilisateur, tandis que l’autorisation doit vérifier qu’il peut réellement accéder à l’objet demandé.'
                    ],
                    [
                        'question' => 'Quel est le rôle principal de Content Security Policy ?',
                        'choices' => [
                            ['choice_text' => 'Réduire les possibilités d’exécution de contenu non autorisé dans le navigateur', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer les mots de passe en base', 'is_correct' => false],
                            ['choice_text' => 'Remplacer TLS', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tous les scans réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'CSP permet de définir des politiques sur les sources de contenu autorisées et constitue notamment une défense supplémentaire contre certaines attaques XSS.'
                    ],
                    [
                        'question' => 'Quelle stratégie est la plus sûre lors de la gestion d’erreurs côté production ?',
                        'choices' => [
                            ['choice_text' => 'Fournir des messages génériques au client tout en journalisant les détails de manière sécurisée', 'is_correct' => true],
                            ['choice_text' => 'Afficher les stack traces complètes à tous les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Afficher les mots de passe dans les exceptions', 'is_correct' => false],
                            ['choice_text' => 'Désactiver complètement les journaux', 'is_correct' => false],
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
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal d’un SIEM ?',
                        'choices' => [
                            ['choice_text' => 'Centraliser, corréler et analyser des événements de sécurité provenant de multiples sources', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les systèmes d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Chiffrer automatiquement chaque fichier', 'is_correct' => false],
                            ['choice_text' => 'Créer uniquement des sauvegardes', 'is_correct' => false],
                        ],
                        'explanation' => 'Un SIEM agrège les journaux et événements afin d’améliorer la détection, l’investigation et la visibilité.'
                    ],
                    [
                        'question' => 'Pourquoi la synchronisation temporelle est-elle importante dans un SOC ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de reconstruire correctement la chronologie des événements', 'is_correct' => true],
                            ['choice_text' => 'Elle remplace les mécanismes d’authentification', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche tous les malwares', 'is_correct' => false],
                            ['choice_text' => 'Elle chiffre les logs', 'is_correct' => false],
                        ],
                        'explanation' => 'Des horodatages incohérents compliquent fortement la corrélation et la reconstruction d’une attaque.'
                    ],
                    [
                        'question' => 'Quelle différence décrit correctement IDS et IPS ?',
                        'choices' => [
                            ['choice_text' => 'Un IDS détecte principalement tandis qu’un IPS peut également bloquer ou prévenir activement', 'is_correct' => true],
                            ['choice_text' => 'Un IDS chiffre les fichiers et un IPS les compresse', 'is_correct' => false],
                            ['choice_text' => 'Ils sont toujours strictement identiques', 'is_correct' => false],
                            ['choice_text' => 'Un IPS ne peut jamais inspecter le trafic', 'is_correct' => false],
                        ],
                        'explanation' => 'Un IDS est principalement orienté détection alors qu’un IPS est placé pour permettre une action préventive ou bloquante.'
                    ],
                    [
                        'question' => 'Quel indicateur peut signaler une activité anormale d’un compte ?',
                        'choices' => [
                            ['choice_text' => 'Une connexion inhabituelle suivie d’actions privilégiées inattendues', 'is_correct' => true],
                            ['choice_text' => 'Une sauvegarde planifiée', 'is_correct' => false],
                            ['choice_text' => 'Une connexion correspondant exactement aux habitudes connues', 'is_correct' => false],
                            ['choice_text' => 'Un redémarrage planifié', 'is_correct' => false],
                        ],
                        'explanation' => 'Les anomalies comportementales deviennent particulièrement intéressantes lorsqu’elles sont corrélées à des actions sensibles.'
                    ],
                    [
                        'question' => 'Pourquoi les faux positifs constituent-ils un problème dans un SOC ?',
                        'choices' => [
                            ['choice_text' => 'Ils consomment les ressources des analystes et peuvent masquer de vraies alertes', 'is_correct' => true],
                            ['choice_text' => 'Ils rendent automatiquement le réseau plus sécurisé', 'is_correct' => false],
                            ['choice_text' => 'Ils empêchent toute collecte de logs', 'is_correct' => false],
                            ['choice_text' => 'Ils chiffrent les systèmes', 'is_correct' => false],
                        ],
                        'explanation' => 'Un volume excessif d’alertes non pertinentes peut provoquer une fatigue d’alerte et diminuer l’efficacité de la détection.'
                    ],
                    [
                        'question' => 'Que signifie généralement une règle de corrélation dans un SIEM ?',
                        'choices' => [
                            ['choice_text' => 'Associer plusieurs événements afin d’identifier un scénario potentiellement malveillant', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement tous les logs', 'is_correct' => false],
                            ['choice_text' => 'Changer les mots de passe utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Compresser les disques', 'is_correct' => false],
                        ],
                        'explanation' => 'La corrélation transforme plusieurs événements isolés en signaux plus significatifs.'
                    ],
                    [
                        'question' => 'Quel avantage apporte EDR par rapport à une simple collecte de journaux ?',
                        'choices' => [
                            ['choice_text' => 'Une visibilité et des capacités de détection/réponse directement liées aux terminaux', 'is_correct' => true],
                            ['choice_text' => 'La suppression des contrôles d’identité', 'is_correct' => false],
                            ['choice_text' => 'L’absence totale de télémétrie', 'is_correct' => false],
                            ['choice_text' => 'La désactivation automatique des réseaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les solutions EDR collectent une télémétrie détaillée des endpoints et peuvent fournir des capacités d’investigation et de réponse.'
                    ],
                    [
                        'question' => 'Quel élément est essentiel à une règle de détection de qualité ?',
                        'choices' => [
                            ['choice_text' => 'Un signal pertinent associé à un contexte permettant de réduire les faux positifs', 'is_correct' => true],
                            ['choice_text' => 'Un déclenchement sur chaque événement sans exception', 'is_correct' => false],
                            ['choice_text' => 'L’absence totale de contexte', 'is_correct' => false],
                            ['choice_text' => 'La suppression des métadonnées', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne détection doit maximiser la pertinence du signal tout en fournissant suffisamment de contexte à l’analyste.'
                    ],
                    [
                        'question' => 'Quel est l’intérêt de MITRE ATT&CK pour une équipe SOC ?',
                        'choices' => [
                            ['choice_text' => 'Structurer les techniques et tactiques adverses afin d’améliorer la couverture de détection', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les pare-feu', 'is_correct' => false],
                            ['choice_text' => 'Fournir automatiquement des mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                        ],
                        'explanation' => 'ATT&CK fournit une connaissance structurée des comportements adverses utilisable pour la détection, l’analyse et l’évaluation de couverture.'
                    ],
                    [
                        'question' => 'Quel type de journal est particulièrement utile pour investiguer une élévation de privilèges ?',
                        'choices' => [
                            ['choice_text' => 'Les journaux d’authentification et d’activité privilégiée', 'is_correct' => true],
                            ['choice_text' => 'Les journaux d’impression uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les journaux météo', 'is_correct' => false],
                            ['choice_text' => 'Les journaux de compression uniquement', 'is_correct' => false],
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
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quelle action est généralement prioritaire lorsqu’un incident critique vient d’être confirmé ?',
                        'choices' => [
                            ['choice_text' => 'Contenir l’incident tout en préservant les éléments nécessaires à l’investigation', 'is_correct' => true],
                            ['choice_text' => 'Supprimer immédiatement tous les disques', 'is_correct' => false],
                            ['choice_text' => 'Désactiver tous les logs', 'is_correct' => false],
                            ['choice_text' => 'Publier immédiatement tous les détails techniques', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse doit limiter les dommages tout en préservant les preuves et informations nécessaires à l’analyse.'
                    ],
                    [
                        'question' => 'Pourquoi faut-il éviter de modifier inutilement une machine compromise avant la collecte des preuves ?',
                        'choices' => [
                            ['choice_text' => 'Parce que certaines actions peuvent détruire ou modifier des éléments forensiques utiles', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un système compromis devient automatiquement invulnérable', 'is_correct' => false],
                            ['choice_text' => 'Parce que les logs ne servent jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce que les attaquants contrôlent toujours physiquement le serveur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les actions d’intervention peuvent modifier les traces en mémoire, les fichiers, les journaux ou d’autres artefacts.'
                    ],
                    [
                        'question' => 'Quel est l’objectif du confinement pendant une réponse à incident ?',
                        'choices' => [
                            ['choice_text' => 'Limiter la propagation et réduire l’impact de l’incident', 'is_correct' => true],
                            ['choice_text' => 'Effacer les preuves', 'is_correct' => false],
                            ['choice_text' => 'Restaurer tous les systèmes sans analyse', 'is_correct' => false],
                            ['choice_text' => 'Donner davantage de privilèges à l’attaquant', 'is_correct' => false],
                        ],
                        'explanation' => 'Le confinement vise à empêcher l’incident de continuer à se propager ou à causer des dommages supplémentaires.'
                    ],
                    [
                        'question' => 'Pourquoi la rotation des identifiants compromis est-elle importante après une intrusion ?',
                        'choices' => [
                            ['choice_text' => 'Pour empêcher l’attaquant de réutiliser les secrets qu’il aurait récupérés', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer automatiquement les vulnérabilités logicielles', 'is_correct' => false],
                            ['choice_text' => 'Pour améliorer la bande passante', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les sauvegardes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les identifiants compromis peuvent permettre une persistance ou un nouvel accès même après le nettoyage initial.'
                    ],
                    [
                        'question' => 'Que doit contenir idéalement un plan de réponse aux incidents ?',
                        'choices' => [
                            ['choice_text' => 'Les rôles, responsabilités, procédures d’escalade et actions à mener selon différents scénarios', 'is_correct' => true],
                            ['choice_text' => 'Uniquement les noms des serveurs', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les mots de passe administrateurs', 'is_correct' => false],
                            ['choice_text' => 'Aucune procédure documentée', 'is_correct' => false],
                        ],
                        'explanation' => 'Un plan efficace précise qui fait quoi, quand et comment, notamment sous pression.'
                    ],
                    [
                        'question' => 'Quelle activité intervient après l’éradication pour confirmer le retour à un état maîtrisé ?',
                        'choices' => [
                            ['choice_text' => 'La validation et la surveillance de la récupération', 'is_correct' => true],
                            ['choice_text' => 'La suppression de tous les contrôles de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Le partage public des secrets', 'is_correct' => false],
                            ['choice_text' => 'La désactivation des sauvegardes', 'is_correct' => false],
                        ],
                        'explanation' => 'Après restauration, les systèmes doivent être surveillés afin de vérifier qu’ils sont réellement propres et stables.'
                    ],
                    [
                        'question' => 'Pourquoi les exercices de réponse aux incidents sont-ils importants ?',
                        'choices' => [
                            ['choice_text' => 'Ils permettent de tester les procédures avant qu’un incident réel ne survienne', 'is_correct' => true],
                            ['choice_text' => 'Ils rendent les systèmes invulnérables', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent tous les contrôles techniques', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment la nécessité de sauvegardes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les exercices permettent d’identifier les lacunes organisationnelles et techniques dans un contexte contrôlé.'
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un IOC dans le contexte de la réponse aux incidents ?',
                        'choices' => [
                            ['choice_text' => 'Un indicateur technique pouvant être associé à une compromission', 'is_correct' => true],
                            ['choice_text' => 'Une politique de sauvegarde', 'is_correct' => false],
                            ['choice_text' => 'Un protocole de chiffrement', 'is_correct' => false],
                            ['choice_text' => 'Une méthode de compression', 'is_correct' => false],
                        ],
                        'explanation' => 'Un IOC peut être une adresse IP, un hash, un domaine ou un autre artefact associé à une activité malveillante.'
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’une analyse post-incident ?',
                        'choices' => [
                            ['choice_text' => 'Comprendre les causes et améliorer les contrôles afin d’éviter une récidive', 'is_correct' => true],
                            ['choice_text' => 'Cacher systématiquement l’incident aux équipes concernées', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les preuves restantes', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les mécanismes de détection', 'is_correct' => false],
                        ],
                        'explanation' => 'Le retour d’expérience transforme l’incident en amélioration durable de la sécurité.'
                    ],
                    [
                        'question' => 'Pourquoi la chaîne de conservation des preuves est-elle importante ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de documenter comment les preuves ont été collectées, conservées et manipulées', 'is_correct' => true],
                            ['choice_text' => 'Elle permet de supprimer les preuves plus rapidement', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace les contrôles d’accès', 'is_correct' => false],
                            ['choice_text' => 'Elle chiffre automatiquement tous les serveurs', 'is_correct' => false],
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
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quelle différence fondamentale existe entre authentification et autorisation ?',
                        'choices' => [
                            ['choice_text' => 'L’authentification vérifie l’identité tandis que l’autorisation détermine les actions permises', 'is_correct' => true],
                            ['choice_text' => 'Elles désignent exactement le même processus', 'is_correct' => false],
                            ['choice_text' => 'L’autorisation vérifie toujours le mot de passe', 'is_correct' => false],
                            ['choice_text' => 'L’authentification ne concerne jamais les utilisateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'L’authentification répond à « qui êtes-vous ? », tandis que l’autorisation répond à « que pouvez-vous faire ? ».'
                    ],
                    [
                        'question' => 'Quel est l’avantage principal du RBAC ?',
                        'choices' => [
                            ['choice_text' => 'Attribuer les permissions selon des rôles plutôt que gérer chaque utilisateur individuellement', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les contrôles d’accès', 'is_correct' => false],
                            ['choice_text' => 'Autoriser tous les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le chiffrement', 'is_correct' => false],
                        ],
                        'explanation' => 'RBAC simplifie la gestion des permissions en les associant à des rôles organisationnels.'
                    ],
                    [
                        'question' => 'Quel modèle peut prendre en compte des attributs tels que l’identité, la ressource, l’heure et le contexte ?',
                        'choices' => [
                            ['choice_text' => 'ABAC', 'is_correct' => true],
                            ['choice_text' => 'FTP', 'is_correct' => false],
                            ['choice_text' => 'NAT', 'is_correct' => false],
                            ['choice_text' => 'ARP', 'is_correct' => false],
                        ],
                        'explanation' => 'Attribute-Based Access Control permet de prendre des décisions à partir de multiples attributs et conditions contextuelles.'
                    ],
                    [
                        'question' => 'Pourquoi le PAM est-il important dans une infrastructure d’entreprise ?',
                        'choices' => [
                            ['choice_text' => 'Il permet de contrôler, surveiller et limiter l’utilisation des comptes à privilèges', 'is_correct' => true],
                            ['choice_text' => 'Il remplace tous les systèmes DNS', 'is_correct' => false],
                            ['choice_text' => 'Il supprime les comptes administrateurs', 'is_correct' => false],
                            ['choice_text' => 'Il rend les mots de passe publics', 'is_correct' => false],
                        ],
                        'explanation' => 'Privileged Access Management vise à réduire le risque lié aux comptes administratifs et aux secrets associés.'
                    ],
                    [
                        'question' => 'Quel est le principal avantage de l’authentification multifacteur ?',
                        'choices' => [
                            ['choice_text' => 'Elle exige plusieurs catégories de facteurs indépendants', 'is_correct' => true],
                            ['choice_text' => 'Elle rend tous les mots de passe inutiles dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Elle désactive automatiquement les attaques réseau', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime le besoin d’autorisation', 'is_correct' => false],
                        ],
                        'explanation' => 'La MFA augmente la résistance aux compromissions d’un seul facteur d’authentification.'
                    ],
                    [
                        'question' => 'Pourquoi la fédération d’identité peut-elle réduire les risques opérationnels ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de centraliser certaines fonctions d’identité et d’éviter la multiplication des comptes locaux', 'is_correct' => true],
                            ['choice_text' => 'Elle élimine tous les contrôles d’accès', 'is_correct' => false],
                            ['choice_text' => 'Elle rend les identités anonymes', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche toute révocation', 'is_correct' => false],
                        ],
                        'explanation' => 'La fédération permet à plusieurs services de s’appuyer sur une source d’identité commune selon des relations de confiance définies.'
                    ],
                    [
                        'question' => 'Quelle pratique est recommandée pour les comptes de service ?',
                        'choices' => [
                            ['choice_text' => 'Leur attribuer uniquement les permissions nécessaires et gérer leurs secrets de manière sécurisée', 'is_correct' => true],
                            ['choice_text' => 'Leur donner systématiquement des privilèges administrateurs', 'is_correct' => false],
                            ['choice_text' => 'Partager leurs secrets publiquement', 'is_correct' => false],
                            ['choice_text' => 'Désactiver toute rotation de secret', 'is_correct' => false],
                        ],
                        'explanation' => 'Les comptes de service doivent être traités comme des identités sensibles avec un périmètre de privilèges minimal.'
                    ],
                    [
                        'question' => 'Quel mécanisme peut limiter la durée d’utilisation d’un privilège élevé ?',
                        'choices' => [
                            ['choice_text' => 'L’accès juste-à-temps', 'is_correct' => true],
                            ['choice_text' => 'Le privilège permanent', 'is_correct' => false],
                            ['choice_text' => 'Le partage de comptes', 'is_correct' => false],
                            ['choice_text' => 'La suppression des journaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Just-In-Time Access fournit un privilège temporaire lorsque celui-ci est nécessaire, réduisant ainsi l’exposition.'
                    ],
                    [
                        'question' => 'Pourquoi faut-il désactiver rapidement les comptes d’utilisateurs qui ne doivent plus accéder au système ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire le risque d’utilisation abusive d’une identité devenue inutile', 'is_correct' => true],
                            ['choice_text' => 'Pour améliorer la vitesse du processeur', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les certificats TLS', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les sauvegardes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les comptes obsolètes constituent une surface d’attaque inutile et doivent être désactivés selon le cycle de vie des identités.'
                    ],
                    [
                        'question' => 'Quel principe impose une réévaluation régulière des permissions attribuées ?',
                        'choices' => [
                            ['choice_text' => 'La revue périodique des accès', 'is_correct' => true],
                            ['choice_text' => 'La confiance permanente', 'is_correct' => false],
                            ['choice_text' => 'Le partage de privilèges', 'is_correct' => false],
                            ['choice_text' => 'L’accès anonyme', 'is_correct' => false],
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
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Que signifie le modèle de responsabilité partagée dans le cloud ?',
                        'choices' => [
                            ['choice_text' => 'Le fournisseur et le client ont chacun des responsabilités de sécurité selon le service utilisé', 'is_correct' => true],
                            ['choice_text' => 'Le fournisseur est toujours responsable de tout', 'is_correct' => false],
                            ['choice_text' => 'Le client n’a aucune responsabilité', 'is_correct' => false],
                            ['choice_text' => 'La sécurité est optionnelle dans le cloud', 'is_correct' => false],
                        ],
                        'explanation' => 'La répartition précise dépend du modèle de service, mais le client conserve toujours certaines responsabilités.'
                    ],
                    [
                        'question' => 'Quel risque est particulièrement critique pour un stockage cloud mal configuré ?',
                        'choices' => [
                            ['choice_text' => 'L’exposition publique involontaire de données sensibles', 'is_correct' => true],
                            ['choice_text' => 'La suppression automatique de TLS partout', 'is_correct' => false],
                            ['choice_text' => 'La réduction des privilèges administrateurs', 'is_correct' => false],
                            ['choice_text' => 'L’amélioration de la confidentialité', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mauvaise configuration des politiques d’accès peut rendre des données accessibles à des entités non autorisées.'
                    ],
                    [
                        'question' => 'Pourquoi les identités cloud doivent-elles être surveillées attentivement ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un compte compromis peut permettre d’accéder à de nombreuses ressources via les API cloud', 'is_correct' => true],
                            ['choice_text' => 'Parce que les comptes cloud ne peuvent jamais être révoqués', 'is_correct' => false],
                            ['choice_text' => 'Parce que les API cloud n’ont aucun contrôle d’accès', 'is_correct' => false],
                            ['choice_text' => 'Parce que le cloud ne possède aucun journal', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plateformes cloud sont fortement pilotées par les identités et les API, ce qui rend les privilèges particulièrement sensibles.'
                    ],
                    [
                        'question' => 'Quel contrôle réduit le risque lié à une clé d’accès cloud longue durée ?',
                        'choices' => [
                            ['choice_text' => 'Privilégier des identifiants temporaires lorsque cela est possible', 'is_correct' => true],
                            ['choice_text' => 'Publier la clé dans le code', 'is_correct' => false],
                            ['choice_text' => 'Partager la clé entre toutes les équipes', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les journaux d’utilisation', 'is_correct' => false],
                        ],
                        'explanation' => 'Les identifiants temporaires réduisent la fenêtre d’exploitation en cas de compromission.'
                    ],
                    [
                        'question' => 'Quel principe doit guider les permissions IAM cloud ?',
                        'choices' => [
                            ['choice_text' => 'Le moindre privilège', 'is_correct' => true],
                            ['choice_text' => 'Le privilège maximal', 'is_correct' => false],
                            ['choice_text' => 'L’accès anonyme', 'is_correct' => false],
                            ['choice_text' => 'Le partage universel', 'is_correct' => false],
                        ],
                        'explanation' => 'Les permissions IAM doivent être limitées aux ressources et actions réellement nécessaires.'
                    ],
                    [
                        'question' => 'Pourquoi centraliser les journaux cloud est-il utile ?',
                        'choices' => [
                            ['choice_text' => 'Pour améliorer la corrélation, la détection et l’investigation', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les traces', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les comptes anonymes', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les contrôles IAM', 'is_correct' => false],
                        ],
                        'explanation' => 'Une visibilité centralisée facilite la détection d’activités anormales réparties entre plusieurs services.'
                    ],
                    [
                        'question' => 'Quel problème peut survenir lorsqu’une organisation utilise trop de permissions IAM très larges ?',
                        'choices' => [
                            ['choice_text' => 'Une compromission d’identité peut avoir un impact beaucoup plus important', 'is_correct' => true],
                            ['choice_text' => 'Les utilisateurs deviennent automatiquement anonymes', 'is_correct' => false],
                            ['choice_text' => 'Les sauvegardes deviennent impossibles', 'is_correct' => false],
                            ['choice_text' => 'Le chiffrement devient automatiquement plus fort', 'is_correct' => false],
                        ],
                        'explanation' => 'Des permissions excessives augmentent le rayon d’impact d’un compte compromis.'
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une politique de rétention des logs cloud ?',
                        'choices' => [
                            ['choice_text' => 'Conserver suffisamment longtemps les données nécessaires à la détection et à l’investigation', 'is_correct' => true],
                            ['choice_text' => 'Supprimer immédiatement toutes les traces', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les audits', 'is_correct' => false],
                            ['choice_text' => 'Donner accès aux logs à tout le monde', 'is_correct' => false],
                        ],
                        'explanation' => 'La rétention doit équilibrer besoins d’investigation, exigences réglementaires, coûts et risques.'
                    ],
                    [
                        'question' => 'Pourquoi l’IaC doit-elle être intégrée aux pratiques de sécurité ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les configurations d’infrastructure deviennent reproductibles et peuvent être contrôlées avant déploiement', 'is_correct' => true],
                            ['choice_text' => 'Parce que le code IaC ne peut jamais contenir d’erreurs', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’IaC désactive les identités', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’IaC remplace tous les tests', 'is_correct' => false],
                        ],
                        'explanation' => 'L’infrastructure as Code permet notamment d’automatiser des contrôles et de détecter certaines mauvaises configurations avant leur déploiement.'
                    ],
                    [
                        'question' => 'Quel concept consiste à analyser en continu la posture de sécurité des ressources cloud ?',
                        'choices' => [
                            ['choice_text' => 'La gestion de la posture de sécurité cloud', 'is_correct' => true],
                            ['choice_text' => 'La compression cloud', 'is_correct' => false],
                            ['choice_text' => 'Le routage anonyme', 'is_correct' => false],
                            ['choice_text' => 'Le partage public automatique', 'is_correct' => false],
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
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quel est le principal objectif d’un pare-feu stateful ?',
                        'choices' => [
                            ['choice_text' => 'Prendre des décisions en tenant compte de l’état des connexions réseau', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer tous les fichiers', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les systèmes IAM', 'is_correct' => false],
                            ['choice_text' => 'Analyser uniquement les mots de passe', 'is_correct' => false],
                        ],
                        'explanation' => 'Un pare-feu stateful conserve un état des connexions afin d’appliquer des politiques tenant compte du contexte de la session.'
                    ],
                    [
                        'question' => 'Quel avantage apporte un VPN correctement configuré ?',
                        'choices' => [
                            ['choice_text' => 'Créer un canal protégé pour les communications sur un réseau non fiable', 'is_correct' => true],
                            ['choice_text' => 'Rendre les endpoints invulnérables', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin d’authentification', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toutes les attaques applicatives', 'is_correct' => false],
                        ],
                        'explanation' => 'Un VPN protège principalement le transport entre les extrémités selon les mécanismes de chiffrement et d’authentification utilisés.'
                    ],
                    [
                        'question' => 'Pourquoi le DNS est-il intéressant pour la détection de menaces ?',
                        'choices' => [
                            ['choice_text' => 'Les requêtes DNS peuvent révéler des domaines malveillants ou des comportements anormaux', 'is_correct' => true],
                            ['choice_text' => 'Le DNS chiffre toujours tout le trafic applicatif', 'is_correct' => false],
                            ['choice_text' => 'Le DNS remplace les EDR', 'is_correct' => false],
                            ['choice_text' => 'Le DNS ne produit aucune information exploitable', 'is_correct' => false],
                        ],
                        'explanation' => 'Les métadonnées DNS peuvent être très utiles pour détecter des communications vers des infrastructures suspectes.'
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une DMZ dans une architecture réseau ?',
                        'choices' => [
                            ['choice_text' => 'Isoler certains services exposés tout en limitant leur accès au réseau interne', 'is_correct' => true],
                            ['choice_text' => 'Donner un accès direct à tous les serveurs internes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles réseau', 'is_correct' => false],
                            ['choice_text' => 'Stocker uniquement les mots de passe', 'is_correct' => false],
                        ],
                        'explanation' => 'Une DMZ crée une zone intermédiaire permettant de réduire l’exposition du réseau interne.'
                    ],
                    [
                        'question' => 'Quel mécanisme permet de détecter des signatures connues d’attaques réseau ?',
                        'choices' => [
                            ['choice_text' => 'Un IDS basé sur les signatures', 'is_correct' => true],
                            ['choice_text' => 'Un serveur DHCP uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un serveur NTP uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un proxy sans journalisation', 'is_correct' => false],
                        ],
                        'explanation' => 'La détection par signature compare les événements ou paquets à des motifs connus associés à des menaces.'
                    ],
                    [
                        'question' => 'Pourquoi le filtrage sortant est-il important ?',
                        'choices' => [
                            ['choice_text' => 'Il peut limiter les communications d’un système compromis vers des destinations non autorisées', 'is_correct' => true],
                            ['choice_text' => 'Il empêche uniquement les connexions entrantes', 'is_correct' => false],
                            ['choice_text' => 'Il remplace la gestion des identités', 'is_correct' => false],
                            ['choice_text' => 'Il rend inutiles les journaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contrôle du trafic sortant peut réduire la capacité d’un système compromis à communiquer avec une infrastructure externe.'
                    ],
                    [
                        'question' => 'Quel risque est associé à un protocole réseau non chiffré sur un réseau non fiable ?',
                        'choices' => [
                            ['choice_text' => 'L’interception ou la modification potentielle des communications', 'is_correct' => true],
                            ['choice_text' => 'La suppression automatique des comptes', 'is_correct' => false],
                            ['choice_text' => 'L’amélioration de l’intégrité', 'is_correct' => false],
                            ['choice_text' => 'La réduction automatique des privilèges', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans protection cryptographique adaptée, les communications peuvent être exposées à l’écoute ou à la manipulation.'
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’un proxy inverse ?',
                        'choices' => [
                            ['choice_text' => 'Recevoir les requêtes des clients et les transmettre aux services backend selon des politiques définies', 'is_correct' => true],
                            ['choice_text' => 'Stocker les mots de passe en clair', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Supprimer TLS', 'is_correct' => false],
                        ],
                        'explanation' => 'Un reverse proxy se place devant les services backend et peut fournir notamment routage, filtrage, terminaison TLS et contrôle du trafic.'
                    ],
                    [
                        'question' => 'Quel mécanisme réduit la surface d’attaque d’un serveur réseau ?',
                        'choices' => [
                            ['choice_text' => 'Désactiver les services et ports inutiles', 'is_correct' => true],
                            ['choice_text' => 'Activer tous les services disponibles', 'is_correct' => false],
                            ['choice_text' => 'Partager tous les ports avec Internet', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les journaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque service exposé constitue une surface potentielle d’attaque ; les services inutiles doivent donc être supprimés ou désactivés.'
                    ],
                    [
                        'question' => 'Quel avantage fournit une architecture réseau basée sur plusieurs zones de confiance ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet d’appliquer des politiques différentes selon la sensibilité des ressources', 'is_correct' => true],
                            ['choice_text' => 'Elle élimine tous les contrôles d’accès', 'is_correct' => false],
                            ['choice_text' => 'Elle rend tous les systèmes publics', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche la journalisation', 'is_correct' => false],
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
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal d’une analyse de risques cyber ?',
                        'choices' => [
                            ['choice_text' => 'Identifier, évaluer et prioriser les risques afin de guider les mesures de traitement', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les risques sans exception', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les contrôles techniques', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute documentation', 'is_correct' => false],
                        ],
                        'explanation' => 'La gestion des risques vise à comprendre les menaces et impacts afin de déterminer les mesures appropriées.'
                    ],
                    [
                        'question' => 'Quelle différence existe entre risque inhérent et risque résiduel ?',
                        'choices' => [
                            ['choice_text' => 'Le risque résiduel est celui qui demeure après prise en compte des contrôles', 'is_correct' => true],
                            ['choice_text' => 'Le risque inhérent apparaît uniquement après les contrôles', 'is_correct' => false],
                            ['choice_text' => 'Ils sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Le risque résiduel est toujours nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Le risque inhérent existe avant les contrôles tandis que le risque résiduel correspond à l’exposition restante.'
                    ],
                    [
                        'question' => 'Que signifie le principe de séparation des tâches ?',
                        'choices' => [
                            ['choice_text' => 'Répartir certaines responsabilités sensibles entre plusieurs personnes ou rôles', 'is_correct' => true],
                            ['choice_text' => 'Donner toutes les permissions à un seul administrateur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles internes', 'is_correct' => false],
                            ['choice_text' => 'Permettre l’anonymat total', 'is_correct' => false],
                        ],
                        'explanation' => 'La séparation des tâches réduit le risque qu’une seule personne puisse réaliser ou dissimuler seule une opération sensible.'
                    ],
                    [
                        'question' => 'Pourquoi les actifs critiques doivent-ils être identifiés ?',
                        'choices' => [
                            ['choice_text' => 'Pour concentrer les efforts de protection sur les ressources dont l’impact d’une compromission serait important', 'is_correct' => true],
                            ['choice_text' => 'Pour les rendre publics', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les contrôles', 'is_correct' => false],
                        ],
                        'explanation' => 'La criticité des actifs permet de prioriser les investissements et contrôles de sécurité.'
                    ],
                    [
                        'question' => 'Quel est le rôle d’un contrôle compensatoire ?',
                        'choices' => [
                            ['choice_text' => 'Fournir une mesure alternative lorsqu’un contrôle principal ne peut pas être appliqué directement', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute politique de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Augmenter volontairement le risque', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les audits par des suppositions', 'is_correct' => false],
                        ],
                        'explanation' => 'Un contrôle compensatoire réduit le risque par un autre moyen lorsqu’une mesure attendue n’est pas réalisable.'
                    ],
                    [
                        'question' => 'Pourquoi les audits de sécurité sont-ils utiles ?',
                        'choices' => [
                            ['choice_text' => 'Ils permettent d’évaluer si les contrôles et processus respectent les exigences définies', 'is_correct' => true],
                            ['choice_text' => 'Ils garantissent qu’aucune attaque ne se produira', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment la nécessité de surveillance', 'is_correct' => false],
                            ['choice_text' => 'Ils rendent les vulnérabilités impossibles', 'is_correct' => false],
                        ],
                        'explanation' => 'Un audit fournit une évaluation structurée de la conformité et de l’efficacité des contrôles.'
                    ],
                    [
                        'question' => 'Quel concept décrit la capacité d’une organisation à continuer ses activités malgré une perturbation ?',
                        'choices' => [
                            ['choice_text' => 'La résilience opérationnelle', 'is_correct' => true],
                            ['choice_text' => 'La confiance implicite', 'is_correct' => false],
                            ['choice_text' => 'La compression réseau', 'is_correct' => false],
                            ['choice_text' => 'La rotation DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'La résilience vise à maintenir ou restaurer les fonctions critiques malgré les perturbations.'
                    ],
                    [
                        'question' => 'Quel est l’objectif du RTO ?',
                        'choices' => [
                            ['choice_text' => 'Définir le délai cible pour restaurer un service après une interruption', 'is_correct' => true],
                            ['choice_text' => 'Définir le volume maximal de données perdu', 'is_correct' => false],
                            ['choice_text' => 'Définir le nombre d’utilisateurs autorisés', 'is_correct' => false],
                            ['choice_text' => 'Définir la longueur minimale d’un mot de passe', 'is_correct' => false],
                        ],
                        'explanation' => 'Recovery Time Objective définit le délai cible de reprise d’un service ou processus.'
                    ],
                    [
                        'question' => 'Quel est l’objectif du RPO ?',
                        'choices' => [
                            ['choice_text' => 'Définir la quantité maximale de données qu’une organisation accepte de perdre après un incident', 'is_correct' => true],
                            ['choice_text' => 'Définir le délai maximal d’une session utilisateur', 'is_correct' => false],
                            ['choice_text' => 'Définir la durée d’un certificat', 'is_correct' => false],
                            ['choice_text' => 'Définir la durée d’une analyse antivirus', 'is_correct' => false],
                        ],
                        'explanation' => 'Recovery Point Objective exprime le point de récupération acceptable et donc la perte maximale de données tolérée.'
                    ],
                    [
                        'question' => 'Pourquoi les politiques de sécurité doivent-elles être régulièrement révisées ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les technologies, menaces, exigences et risques évoluent', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une politique ne peut jamais être documentée', 'is_correct' => false],
                            ['choice_text' => 'Parce que les contrôles deviennent automatiquement inutiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les menaces disparaissent', 'is_correct' => false],
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
                        'order' => $questionIndex + 1,
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
