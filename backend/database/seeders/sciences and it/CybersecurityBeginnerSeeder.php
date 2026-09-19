<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class CybersecurityBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'cybersecurity')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Principes fondamentaux de la cybersécurité',
                'description' => 'Revoir les bases de la confidentialité, de l’intégrité, de la disponibilité et de la gestion du risque.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel objectif vise la confidentialité ?',
                        'choices' => [
                            ['choice_text' => 'Empêcher les accès non autorisés', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute panne', 'is_correct' => false],
                            ['choice_text' => 'Accélérer les connexions', 'is_correct' => false],
                            ['choice_text' => 'Créer des sauvegardes', 'is_correct' => false],
                        ],
                        'explanation' => 'La confidentialité limite l’accès aux informations aux personnes ou systèmes autorisés.',
                    ],
                    [
                        'question' => 'Que garantit principalement l’intégrité ?',
                        'choices' => [
                            ['choice_text' => 'La disponibilité permanente', 'is_correct' => false],
                            ['choice_text' => 'L’absence de modification non autorisée', 'is_correct' => true],
                            ['choice_text' => 'La rapidité du réseau', 'is_correct' => false],
                            ['choice_text' => 'La création de comptes', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intégrité vise à préserver l’exactitude et l’absence d’altération non autorisée des données.',
                    ],
                    [
                        'question' => 'Quel exemple illustre la disponibilité ?',
                        'choices' => [
                            ['choice_text' => 'Un fichier chiffré', 'is_correct' => false],
                            ['choice_text' => 'Un serveur accessible malgré la panne d’un composant', 'is_correct' => true],
                            ['choice_text' => 'Un mot de passe haché', 'is_correct' => false],
                            ['choice_text' => 'Un certificat signé', 'is_correct' => false],
                        ],
                        'explanation' => 'La disponibilité concerne la capacité à accéder à une ressource lorsqu’elle est nécessaire.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une vulnérabilité ?',
                        'choices' => [
                            ['choice_text' => 'Une faiblesse exploitable', 'is_correct' => true],
                            ['choice_text' => 'Une sauvegarde', 'is_correct' => false],
                            ['choice_text' => 'Un utilisateur', 'is_correct' => false],
                            ['choice_text' => 'Un certificat', 'is_correct' => false],
                        ],
                        'explanation' => 'Une vulnérabilité est une faiblesse pouvant être exploitée par une menace.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une menace ?',
                        'choices' => [
                            ['choice_text' => 'Une faiblesse technique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une source potentielle de dommage', 'is_correct' => true],
                            ['choice_text' => 'Un algorithme', 'is_correct' => false],
                            ['choice_text' => 'Un journal', 'is_correct' => false],
                        ],
                        'explanation' => 'Une menace est un acteur, événement ou phénomène susceptible de causer un dommage.',
                    ],
                    [
                        'question' => 'Quel principe réduit les droits inutiles ?',
                        'choices' => [
                            ['choice_text' => 'Moindre privilège', 'is_correct' => true],
                            ['choice_text' => 'Disponibilité', 'is_correct' => false],
                            ['choice_text' => 'Compression', 'is_correct' => false],
                            ['choice_text' => 'Redondance', 'is_correct' => false],
                        ],
                        'explanation' => 'Le moindre privilège limite les permissions à ce qui est nécessaire.',
                    ],
                    [
                        'question' => 'Pourquoi appliquer des mises à jour de sécurité ?',
                        'choices' => [
                            ['choice_text' => 'Pour corriger notamment des vulnérabilités connues', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter tous les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver TLS', 'is_correct' => false],
                        ],
                        'explanation' => 'Les correctifs réduisent l’exposition aux vulnérabilités connues.',
                    ],
                    [
                        'question' => 'À quoi sert une politique de sécurité ?',
                        'choices' => [
                            ['choice_text' => 'Définir des règles et responsabilités', 'is_correct' => true],
                            ['choice_text' => 'Remplacer l’antivirus', 'is_correct' => false],
                            ['choice_text' => 'Créer des comptes', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la bande passante', 'is_correct' => false],
                        ],
                        'explanation' => 'Une politique formalise les règles et responsabilités de sécurité.',
                    ],
                    [
                        'question' => 'Pourquoi la sensibilisation est-elle importante ?',
                        'choices' => [
                            ['choice_text' => 'Certaines attaques exploitent les erreurs humaines', 'is_correct' => true],
                            ['choice_text' => 'Elle remplace les contrôles techniques', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche les pannes matérielles', 'is_correct' => false],
                            ['choice_text' => 'Elle rend les mots de passe inutiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Le phishing et l’ingénierie sociale exploitent fréquemment le facteur humain.',
                    ],
                    [
                        'question' => 'Pourquoi documenter les risques ?',
                        'choices' => [
                            ['choice_text' => 'Pour faciliter les décisions et le suivi des traitements', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les vulnérabilités automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les données publiques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute sauvegarde', 'is_correct' => false],
                        ],
                        'explanation' => 'La documentation permet de suivre les risques, leurs propriétaires et les mesures de traitement.',
                    ],
                ],
            ],

            [
                'title' => 'Authentification et mots de passe',
                'description' => 'Comprendre les identités, secrets et facteurs d’authentification.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quelle différence existe entre authentification et autorisation ?',
                        'choices' => [
                            ['choice_text' => 'L’une vérifie l’identité, l’autre les droits', 'is_correct' => true],
                            ['choice_text' => 'L’une chiffre, l’autre sauvegarde', 'is_correct' => false],
                            ['choice_text' => 'Elles sont identiques', 'is_correct' => false],
                            ['choice_text' => 'L’une concerne DNS, l’autre HTTP', 'is_correct' => false],
                        ],
                        'explanation' => 'L’authentification établit l’identité ; l’autorisation détermine les actions permises.',
                    ],
                    [
                        'question' => 'Quel facteur est un facteur de possession ?',
                        'choices' => [
                            ['choice_text' => 'Un mot de passe', 'is_correct' => false],
                            ['choice_text' => 'Une empreinte digitale', 'is_correct' => false],
                            ['choice_text' => 'Un téléphone générant un code', 'is_correct' => true],
                            ['choice_text' => 'Une question secrète', 'is_correct' => false],
                        ],
                        'explanation' => 'Un objet détenu par l’utilisateur, comme un téléphone, constitue un facteur de possession.',
                    ],
                    [
                        'question' => 'Que signifie MFA ?',
                        'choices' => [
                            ['choice_text' => 'Multi-Factor Authentication', 'is_correct' => true],
                            ['choice_text' => 'Managed Firewall Access', 'is_correct' => false],
                            ['choice_text' => 'Memory File Analysis', 'is_correct' => false],
                            ['choice_text' => 'Multiple File Authorization', 'is_correct' => false],
                        ],
                        'explanation' => 'MFA combine au moins deux catégories de facteurs d’authentification.',
                    ],
                    [
                        'question' => 'Pourquoi éviter la réutilisation d’un mot de passe ?',
                        'choices' => [
                            ['choice_text' => 'Une fuite sur un service peut compromettre d’autres comptes', 'is_correct' => true],
                            ['choice_text' => 'Elle ralentit DNS', 'is_correct' => false],
                            ['choice_text' => 'Elle désactive TLS', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche les sauvegardes', 'is_correct' => false],
                        ],
                        'explanation' => 'Un secret réutilisé permet à un attaquant de tenter le même secret sur plusieurs services.',
                    ],
                    [
                        'question' => 'Pourquoi hacher les mots de passe ?',
                        'choices' => [
                            ['choice_text' => 'Pour éviter de stocker directement le secret original', 'is_correct' => true],
                            ['choice_text' => 'Pour les rendre réversibles', 'is_correct' => false],
                            ['choice_text' => 'Pour accélérer le réseau', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer MFA', 'is_correct' => false],
                        ],
                        'explanation' => 'Le stockage par fonction de dérivation adaptée limite l’exposition du mot de passe original.',
                    ],
                    [
                        'question' => 'À quoi sert un salt ?',
                        'choices' => [
                            ['choice_text' => 'À distinguer les hachages de mots de passe identiques', 'is_correct' => true],
                            ['choice_text' => 'À chiffrer HTTPS', 'is_correct' => false],
                            ['choice_text' => 'À remplacer une clé privée', 'is_correct' => false],
                            ['choice_text' => 'À ouvrir un port', 'is_correct' => false],
                        ],
                        'explanation' => 'Un salt unique empêche notamment que des secrets identiques produisent toujours la même valeur stockée.',
                    ],
                    [
                        'question' => 'Quel contrôle limite les essais de connexion répétés ?',
                        'choices' => [
                            ['choice_text' => 'Rate limiting', 'is_correct' => true],
                            ['choice_text' => 'DNS', 'is_correct' => false],
                            ['choice_text' => 'NAT', 'is_correct' => false],
                            ['choice_text' => 'Compression', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rate limiting ralentit ou bloque les tentatives excessives, notamment lors d’une force brute.',
                    ],
                    [
                        'question' => 'Pourquoi un compte standard est-il préférable pour la bureautique ?',
                        'choices' => [
                            ['choice_text' => 'Il limite l’impact d’une compromission', 'is_correct' => true],
                            ['choice_text' => 'Il désactive les mises à jour', 'is_correct' => false],
                            ['choice_text' => 'Il augmente les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Il empêche les sauvegardes', 'is_correct' => false],
                        ],
                        'explanation' => 'Un compte standard réduit les actions qu’un malware peut effectuer sans élévation.',
                    ],
                    [
                        'question' => 'Pourquoi séparer un compte administrateur d’un compte quotidien ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire l’exposition des privilèges élevés', 'is_correct' => true],
                            ['choice_text' => 'Pour partager les mêmes secrets', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour accélérer Internet', 'is_correct' => false],
                        ],
                        'explanation' => 'Une identité administrative séparée évite d’exposer des privilèges critiques à la navigation et à la messagerie.',
                    ],
                    [
                        'question' => 'Quel avantage offre un gestionnaire de mots de passe ?',
                        'choices' => [
                            ['choice_text' => 'Faciliter des secrets uniques et robustes', 'is_correct' => true],
                            ['choice_text' => 'Réutiliser un mot de passe partout', 'is_correct' => false],
                            ['choice_text' => 'Désactiver MFA', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les comptes', 'is_correct' => false],
                        ],
                        'explanation' => 'Il permet de générer et stocker des mots de passe uniques sans devoir tous les mémoriser.',
                    ],
                ],
            ],

            [
                'title' => 'Postes de travail',
                'description' => 'Sécuriser les ordinateurs, navigateurs et supports.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Que faire avec une clé USB inconnue ?',
                        'choices' => [
                            ['choice_text' => 'Suivre une procédure de contrôle avant utilisation', 'is_correct' => true],
                            ['choice_text' => 'La brancher immédiatement', 'is_correct' => false],
                            ['choice_text' => 'La donner à un client', 'is_correct' => false],
                            ['choice_text' => 'Désactiver l’antivirus', 'is_correct' => false],
                        ],
                        'explanation' => 'Un support inconnu peut contenir un malware et doit être contrôlé avant utilisation.',
                    ],
                    [
                        'question' => 'Pourquoi verrouiller son poste en quittant son bureau ?',
                        'choices' => [
                            ['choice_text' => 'Empêcher un accès physique non autorisé', 'is_correct' => true],
                            ['choice_text' => 'Accélérer le CPU', 'is_correct' => false],
                            ['choice_text' => 'Activer DNS', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le pare-feu', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verrouillage protège la session contre une personne présente physiquement.',
                    ],
                    [
                        'question' => 'Pourquoi limiter les logiciels inutiles ?',
                        'choices' => [
                            ['choice_text' => 'Réduire la surface d’attaque', 'is_correct' => true],
                            ['choice_text' => 'Augmenter les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Supprimer TLS', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les sauvegardes', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque logiciel supplémentaire peut introduire une vulnérabilité ou une mauvaise configuration.',
                    ],
                    [
                        'question' => 'Quel signe rend une extension de navigateur suspecte ?',
                        'choices' => [
                            ['choice_text' => 'Des permissions excessives sans justification', 'is_correct' => true],
                            ['choice_text' => 'L’utilisation de HTTPS', 'is_correct' => false],
                            ['choice_text' => 'La présence d’une icône', 'is_correct' => false],
                            ['choice_text' => 'Une mise à jour', 'is_correct' => false],
                        ],
                        'explanation' => 'Des permissions larges et injustifiées peuvent exposer les données de navigation.',
                    ],
                    [
                        'question' => 'Pourquoi les macros de documents peuvent-elles être risquées ?',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent exécuter du code', 'is_correct' => true],
                            ['choice_text' => 'Elles ne contiennent que du texte', 'is_correct' => false],
                            ['choice_text' => 'Elles désactivent toujours Internet', 'is_correct' => false],
                            ['choice_text' => 'Elles chiffrent le disque', 'is_correct' => false],
                        ],
                        'explanation' => 'Les macros peuvent automatiser l’exécution de code et ont été utilisées dans des campagnes malveillantes.',
                    ],
                    [
                        'question' => 'Quel contrôle protège les données d’un portable perdu ?',
                        'choices' => [
                            ['choice_text' => 'Chiffrement du disque', 'is_correct' => true],
                            ['choice_text' => 'Fond d’écran', 'is_correct' => false],
                            ['choice_text' => 'Luminosité', 'is_correct' => false],
                            ['choice_text' => 'Compression', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chiffrement du disque réduit l’exposition des données si le support tombe entre de mauvaises mains.',
                    ],
                    [
                        'question' => 'Pourquoi appliquer un verrouillage automatique ?',
                        'choices' => [
                            ['choice_text' => 'Réduire la durée d’exposition d’une session ouverte', 'is_correct' => true],
                            ['choice_text' => 'Accélérer le réseau', 'is_correct' => false],
                            ['choice_text' => 'Créer un compte', 'is_correct' => false],
                            ['choice_text' => 'Désactiver TLS', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verrouillage automatique limite l’accès à une session abandonnée.',
                    ],
                    [
                        'question' => 'Pourquoi les extensions de fichiers doivent-elles être visibles ?',
                        'choices' => [
                            ['choice_text' => 'Pour mieux repérer une extension inattendue', 'is_correct' => true],
                            ['choice_text' => 'Pour accélérer Windows', 'is_correct' => false],
                            ['choice_text' => 'Pour chiffrer les fichiers', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les métadonnées', 'is_correct' => false],
                        ],
                        'explanation' => 'Afficher les extensions aide à repérer des fichiers dont le type réel pourrait être trompeur.',
                    ],
                    [
                        'question' => 'Pourquoi installer les correctifs du système ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire les vulnérabilités connues', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le compte administrateur public', 'is_correct' => false],
                            ['choice_text' => 'Pour bloquer les journaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les correctifs traitent des défauts connus pouvant être exploités.',
                    ],
                    [
                        'question' => 'Pourquoi protéger physiquement les postes ?',
                        'choices' => [
                            ['choice_text' => 'Un accès physique peut permettre un contournement de certains contrôles', 'is_correct' => true],
                            ['choice_text' => 'La sécurité physique ne concerne que les serveurs', 'is_correct' => false],
                            ['choice_text' => 'Cela remplace le chiffrement', 'is_correct' => false],
                            ['choice_text' => 'Cela remplace MFA', 'is_correct' => false],
                        ],
                        'explanation' => 'La sécurité physique complète les contrôles logiciels et réseau.',
                    ],
                ],
            ],

            [
                'title' => 'Réseaux et protocoles',
                'description' => 'Notions de base sur les protocoles et contrôles réseau.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal d’un firewall ?',
                        'choices' => [
                            ['choice_text' => 'Filtrer les communications selon des règles', 'is_correct' => true],
                            ['choice_text' => 'Créer des comptes', 'is_correct' => false],
                            ['choice_text' => 'Compresser les fichiers', 'is_correct' => false],
                            ['choice_text' => 'Sauvegarder les bases', 'is_correct' => false],
                        ],
                        'explanation' => 'Un firewall autorise ou bloque des flux selon une politique.',
                    ],
                    [
                        'question' => 'Quel protocole protège normalement le trafic web avec TLS ?',
                        'choices' => [
                            ['choice_text' => 'HTTPS', 'is_correct' => true],
                            ['choice_text' => 'HTTP', 'is_correct' => false],
                            ['choice_text' => 'Telnet', 'is_correct' => false],
                            ['choice_text' => 'FTP', 'is_correct' => false],
                        ],
                        'explanation' => 'HTTPS utilise TLS pour protéger les échanges HTTP.',
                    ],
                    [
                        'question' => 'Pourquoi Telnet est-il déconseillé ?',
                        'choices' => [
                            ['choice_text' => 'Il ne fournit pas la protection cryptographique attendue pour l’administration', 'is_correct' => true],
                            ['choice_text' => 'Il utilise DNS', 'is_correct' => false],
                            ['choice_text' => 'Il est toujours chiffré', 'is_correct' => false],
                            ['choice_text' => 'Il remplace SSH', 'is_correct' => false],
                        ],
                        'explanation' => 'Telnet ne protège pas correctement les échanges d’administration contre l’écoute.',
                    ],
                    [
                        'question' => 'Quel protocole résout les noms de domaine ?',
                        'choices' => [
                            ['choice_text' => 'DNS', 'is_correct' => true],
                            ['choice_text' => 'SSH', 'is_correct' => false],
                            ['choice_text' => 'SMTP', 'is_correct' => false],
                            ['choice_text' => 'SNMP', 'is_correct' => false],
                        ],
                        'explanation' => 'DNS associe notamment des noms de domaine à des adresses IP.',
                    ],
                    [
                        'question' => 'Quel port est classiquement associé à HTTPS ?',
                        'choices' => [
                            ['choice_text' => '443', 'is_correct' => true],
                            ['choice_text' => '21', 'is_correct' => false],
                            ['choice_text' => '22', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                        ],
                        'explanation' => 'Le port TCP 443 est l’association conventionnelle de HTTPS.',
                    ],
                    [
                        'question' => 'Quel est l’objectif général d’un VPN ?',
                        'choices' => [
                            ['choice_text' => 'Créer un canal protégé entre des points', 'is_correct' => true],
                            ['choice_text' => 'Remplacer IAM', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le chiffrement', 'is_correct' => false],
                            ['choice_text' => 'Rendre tous les services publics', 'is_correct' => false],
                        ],
                        'explanation' => 'Un VPN établit un tunnel sécurisé mais ne remplace pas les contrôles d’accès.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une adresse IP privée ?',
                        'choices' => [
                            ['choice_text' => 'Une adresse destinée aux réseaux internes et non routée publiquement', 'is_correct' => true],
                            ['choice_text' => 'Une adresse MAC', 'is_correct' => false],
                            ['choice_text' => 'Un certificat', 'is_correct' => false],
                            ['choice_text' => 'Une adresse toujours publique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plages privées sont utilisées dans les réseaux internes.',
                    ],
                    [
                        'question' => 'Pourquoi segmenter un réseau ?',
                        'choices' => [
                            ['choice_text' => 'Limiter la propagation d’une compromission', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Rendre tous les services publics', 'is_correct' => false],
                            ['choice_text' => 'Désactiver MFA', 'is_correct' => false],
                        ],
                        'explanation' => 'La segmentation réduit les chemins de mouvement latéral.',
                    ],
                    [
                        'question' => 'Quel équipement achemine les paquets entre réseaux ?',
                        'choices' => [
                            ['choice_text' => 'Routeur', 'is_correct' => true],
                            ['choice_text' => 'Clavier', 'is_correct' => false],
                            ['choice_text' => 'Scanner', 'is_correct' => false],
                            ['choice_text' => 'Écran', 'is_correct' => false],
                        ],
                        'explanation' => 'Un routeur choisit des chemins pour acheminer les paquets entre réseaux.',
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu’un port inutile est exposé à Internet ?',
                        'choices' => [
                            ['choice_text' => 'Une surface d’attaque supplémentaire', 'is_correct' => true],
                            ['choice_text' => 'Une meilleure authentification', 'is_correct' => false],
                            ['choice_text' => 'Un chiffrement automatique', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des scans', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque service exposé ajoute un point d’entrée potentiel.',
                    ],
                ],
            ],

            [
                'title' => 'Malware',
                'description' => 'Reconnaître les principaux logiciels malveillants.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un ransomware ?',
                        'choices' => [
                            ['choice_text' => 'Un malware qui rend souvent des données indisponibles contre rançon', 'is_correct' => true],
                            ['choice_text' => 'Un protocole réseau', 'is_correct' => false],
                            ['choice_text' => 'Un certificat', 'is_correct' => false],
                            ['choice_text' => 'Un système de sauvegarde', 'is_correct' => false],
                        ],
                        'explanation' => 'Un ransomware chiffre ou bloque généralement des données et exige une rançon.',
                    ],
                    [
                        'question' => 'Quelle caractéristique décrit un ver ?',
                        'choices' => [
                            ['choice_text' => 'Il peut se propager automatiquement entre systèmes', 'is_correct' => true],
                            ['choice_text' => 'Il nécessite toujours une clé USB', 'is_correct' => false],
                            ['choice_text' => 'Il est toujours légitime', 'is_correct' => false],
                            ['choice_text' => 'Il sert uniquement au chiffrement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un ver peut se propager sans intervention manuelle à chaque étape.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un Trojan ?',
                        'choices' => [
                            ['choice_text' => 'Un programme malveillant présenté comme légitime', 'is_correct' => true],
                            ['choice_text' => 'Un câble réseau', 'is_correct' => false],
                            ['choice_text' => 'Un algorithme', 'is_correct' => false],
                            ['choice_text' => 'Une sauvegarde', 'is_correct' => false],
                        ],
                        'explanation' => 'Un Trojan se fait passer pour un logiciel légitime ou y est intégré.',
                    ],
                    [
                        'question' => 'Quel objectif a typiquement un spyware ?',
                        'choices' => [
                            ['choice_text' => 'Collecter clandestinement des informations', 'is_correct' => true],
                            ['choice_text' => 'Mettre à jour le système', 'is_correct' => false],
                            ['choice_text' => 'Filtrer les ports', 'is_correct' => false],
                            ['choice_text' => 'Créer des certificats', 'is_correct' => false],
                        ],
                        'explanation' => 'Le spyware surveille ou collecte des informations à l’insu de l’utilisateur.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un botnet ?',
                        'choices' => [
                            ['choice_text' => 'Un ensemble de machines compromises contrôlées par un acteur', 'is_correct' => true],
                            ['choice_text' => 'Un réseau de routeurs légitimes', 'is_correct' => false],
                            ['choice_text' => 'Une base SQL', 'is_correct' => false],
                            ['choice_text' => 'Un certificat', 'is_correct' => false],
                        ],
                        'explanation' => 'Un botnet regroupe des systèmes compromis pilotables à distance.',
                    ],
                    [
                        'question' => 'Quel objectif vise un DDoS ?',
                        'choices' => [
                            ['choice_text' => 'Rendre un service indisponible par surcharge', 'is_correct' => true],
                            ['choice_text' => 'Signer un fichier', 'is_correct' => false],
                            ['choice_text' => 'Créer un compte', 'is_correct' => false],
                            ['choice_text' => 'Chiffrer un disque', 'is_correct' => false],
                        ],
                        'explanation' => 'Un DDoS cherche à épuiser les ressources d’un service ou de son infrastructure.',
                    ],
                    [
                        'question' => 'Quel fichier est particulièrement suspect dans un e-mail inattendu ?',
                        'choices' => [
                            ['choice_text' => 'Une pièce jointe exécutable', 'is_correct' => true],
                            ['choice_text' => 'Un simple texte', 'is_correct' => false],
                            ['choice_text' => 'Une date', 'is_correct' => false],
                            ['choice_text' => 'Une signature', 'is_correct' => false],
                        ],
                        'explanation' => 'Une pièce jointe exécutable inattendue constitue un vecteur fréquent de malware.',
                    ],
                    [
                        'question' => 'Pourquoi un malware cherche-t-il la persistance ?',
                        'choices' => [
                            ['choice_text' => 'Pour conserver son accès après un redémarrage', 'is_correct' => true],
                            ['choice_text' => 'Pour accélérer le CPU', 'is_correct' => false],
                            ['choice_text' => 'Pour corriger le système', 'is_correct' => false],
                            ['choice_text' => 'Pour sauvegarder les fichiers', 'is_correct' => false],
                        ],
                        'explanation' => 'La persistance permet au malware ou à l’attaquant de revenir après une interruption.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’un keylogger ?',
                        'choices' => [
                            ['choice_text' => 'Enregistrer les frappes au clavier', 'is_correct' => true],
                            ['choice_text' => 'Filtrer les paquets', 'is_correct' => false],
                            ['choice_text' => 'Générer des certificats', 'is_correct' => false],
                            ['choice_text' => 'Compresser les fichiers', 'is_correct' => false],
                        ],
                        'explanation' => 'Un keylogger capture les frappes et peut voler des informations sensibles.',
                    ],
                    [
                        'question' => 'Pourquoi un nom de fichier peut-il être trompeur ?',
                        'choices' => [
                            ['choice_text' => 'L’extension réelle peut être masquée ou différente du nom affiché', 'is_correct' => true],
                            ['choice_text' => 'Les fichiers sont toujours chiffrés', 'is_correct' => false],
                            ['choice_text' => 'Le système ignore les extensions', 'is_correct' => false],
                            ['choice_text' => 'Un fichier légitime ne peut pas être modifié', 'is_correct' => false],
                        ],
                        'explanation' => 'Un attaquant peut exploiter des noms trompeurs ou des extensions masquées.',
                    ],
                ],
            ],

            [
                'title' => 'Phishing et ingénierie sociale',
                'description' => 'Identifier les techniques de manipulation des utilisateurs.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le phishing ?',
                        'choices' => [
                            ['choice_text' => 'Une tromperie destinée à obtenir une information ou une action', 'is_correct' => true],
                            ['choice_text' => 'Un protocole réseau', 'is_correct' => false],
                            ['choice_text' => 'Une sauvegarde', 'is_correct' => false],
                            ['choice_text' => 'Un algorithme', 'is_correct' => false],
                        ],
                        'explanation' => 'Le phishing utilise des messages ou pages trompeuses pour manipuler la victime.',
                    ],
                    [
                        'question' => 'Quel signe est particulièrement suspect dans un e-mail ?',
                        'choices' => [
                            ['choice_text' => 'Une demande urgente et inhabituelle de secret ou de paiement', 'is_correct' => true],
                            ['choice_text' => 'Une date', 'is_correct' => false],
                            ['choice_text' => 'Un logo', 'is_correct' => false],
                            ['choice_text' => 'Une signature', 'is_correct' => false],
                        ],
                        'explanation' => 'L’urgence et la demande inhabituelle de données sensibles sont des signaux classiques.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le spear phishing ?',
                        'choices' => [
                            ['choice_text' => 'Un phishing ciblé contre une personne ou organisation précise', 'is_correct' => true],
                            ['choice_text' => 'Un scan réseau', 'is_correct' => false],
                            ['choice_text' => 'Un chiffrement', 'is_correct' => false],
                            ['choice_text' => 'Une sauvegarde', 'is_correct' => false],
                        ],
                        'explanation' => 'Le spear phishing personnalise l’attaque selon la cible.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le smishing ?',
                        'choices' => [
                            ['choice_text' => 'Du phishing par SMS', 'is_correct' => true],
                            ['choice_text' => 'Du phishing par téléphone', 'is_correct' => false],
                            ['choice_text' => 'Un scan DNS', 'is_correct' => false],
                            ['choice_text' => 'Un chiffrement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le smishing utilise notamment les SMS pour tromper la victime.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le vishing ?',
                        'choices' => [
                            ['choice_text' => 'Une manipulation par appel vocal', 'is_correct' => true],
                            ['choice_text' => 'Un malware disque', 'is_correct' => false],
                            ['choice_text' => 'Un protocole de routage', 'is_correct' => false],
                            ['choice_text' => 'Une sauvegarde', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vishing exploite la communication vocale ou téléphonique.',
                    ],
                    [
                        'question' => 'Pourquoi vérifier la destination réelle d’un lien ?',
                        'choices' => [
                            ['choice_text' => 'Le domaine réel peut différer du texte affiché', 'is_correct' => true],
                            ['choice_text' => 'Cela accélère TLS', 'is_correct' => false],
                            ['choice_text' => 'Cela désactive les cookies', 'is_correct' => false],
                            ['choice_text' => 'Cela supprime le phishing', 'is_correct' => false],
                        ],
                        'explanation' => 'Un lien peut afficher un texte rassurant tout en pointant vers un domaine frauduleux.',
                    ],
                    [
                        'question' => 'Que faire face à une demande suspecte de paiement ?',
                        'choices' => [
                            ['choice_text' => 'Vérifier via un canal indépendant', 'is_correct' => true],
                            ['choice_text' => 'Répondre immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Partager le message', 'is_correct' => false],
                            ['choice_text' => 'Désactiver MFA', 'is_correct' => false],
                        ],
                        'explanation' => 'Un canal indépendant permet de confirmer la demande sans utiliser les coordonnées du message suspect.',
                    ],
                    [
                        'question' => 'Pourquoi l’urgence est-elle efficace en ingénierie sociale ?',
                        'choices' => [
                            ['choice_text' => 'Elle réduit le temps disponible pour vérifier', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente la bande passante', 'is_correct' => false],
                            ['choice_text' => 'Elle chiffre DNS', 'is_correct' => false],
                            ['choice_text' => 'Elle corrige les failles', 'is_correct' => false],
                        ],
                        'explanation' => 'La pression temporelle pousse la victime à agir avant de vérifier.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le pretexting ?',
                        'choices' => [
                            ['choice_text' => 'Inventer un scénario crédible pour obtenir une information', 'is_correct' => true],
                            ['choice_text' => 'Scanner un port', 'is_correct' => false],
                            ['choice_text' => 'Hacher un mot de passe', 'is_correct' => false],
                            ['choice_text' => 'Mettre à jour un antivirus', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pretexting crée un faux contexte ou une fausse identité pour obtenir la coopération de la cible.',
                    ],
                    [
                        'question' => 'Pourquoi signaler rapidement un phishing réussi ?',
                        'choices' => [
                            ['choice_text' => 'Pour réinitialiser les accès et limiter la propagation', 'is_correct' => true],
                            ['choice_text' => 'Pour punir automatiquement l’expéditeur', 'is_correct' => false],
                            ['choice_text' => 'Pour couper Internet', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les sauvegardes', 'is_correct' => false],
                        ],
                        'explanation' => 'Un signalement rapide permet de révoquer des sessions et de rechercher d’autres actions malveillantes.',
                    ],
                ],
            ],

            [
                'title' => 'Chiffrement et données',
                'description' => 'Comprendre chiffrement, hachage et protection des informations.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le but principal du chiffrement ?',
                        'choices' => [
                            ['choice_text' => 'Rendre les données inintelligibles sans le mécanisme approprié', 'is_correct' => true],
                            ['choice_text' => 'Garantir la disponibilité', 'is_correct' => false],
                            ['choice_text' => 'Créer des comptes', 'is_correct' => false],
                            ['choice_text' => 'Détecter tous les malwares', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chiffrement protège notamment la confidentialité des données.',
                    ],
                    [
                        'question' => 'Quelle propriété distingue un hachage d’un chiffrement ?',
                        'choices' => [
                            ['choice_text' => 'Le hachage est conçu comme une transformation à sens unique', 'is_correct' => true],
                            ['choice_text' => 'Le hachage a toujours deux clés', 'is_correct' => false],
                            ['choice_text' => 'Le chiffrement n’a jamais de clé', 'is_correct' => false],
                            ['choice_text' => 'Le hachage garantit la disponibilité', 'is_correct' => false],
                        ],
                        'explanation' => 'Un hachage cryptographique est conçu pour être difficile à inverser.',
                    ],
                    [
                        'question' => 'Quelle clé doit rester secrète dans un système asymétrique ?',
                        'choices' => [
                            ['choice_text' => 'La clé privée', 'is_correct' => true],
                            ['choice_text' => 'La clé publique', 'is_correct' => false],
                            ['choice_text' => 'L’adresse IP', 'is_correct' => false],
                            ['choice_text' => 'Le port', 'is_correct' => false],
                        ],
                        'explanation' => 'La clé privée est réservée à son détenteur tandis que la clé publique peut être distribuée.',
                    ],
                    [
                        'question' => 'Quel élément d’un certificat TLS lie une identité à une clé publique ?',
                        'choices' => [
                            ['choice_text' => 'Le certificat signé par une autorité de certification', 'is_correct' => true],
                            ['choice_text' => 'Le port 80', 'is_correct' => false],
                            ['choice_text' => 'Un mot de passe utilisateur', 'is_correct' => false],
                            ['choice_text' => 'Une adresse MAC', 'is_correct' => false],
                        ],
                        'explanation' => 'Le certificat associe une identité à une clé publique et est validé par une autorité de certification.',
                    ],
                    [
                        'question' => 'Pourquoi protéger les clés cryptographiques ?',
                        'choices' => [
                            ['choice_text' => 'Une clé compromise peut permettre des opérations sensibles', 'is_correct' => true],
                            ['choice_text' => 'Les clés n’ont aucune valeur', 'is_correct' => false],
                            ['choice_text' => 'Elles servent uniquement au routage', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent les comptes', 'is_correct' => false],
                        ],
                        'explanation' => 'La confidentialité et l’intégrité des clés conditionnent la sécurité des opérations cryptographiques.',
                    ],
                    [
                        'question' => 'Quel mécanisme permet de détecter une modification d’un fichier ?',
                        'choices' => [
                            ['choice_text' => 'Un hachage cryptographique', 'is_correct' => true],
                            ['choice_text' => 'Une adresse IP', 'is_correct' => false],
                            ['choice_text' => 'Un port', 'is_correct' => false],
                            ['choice_text' => 'Un nom DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'Comparer un hachage de référence à un hachage recalculé permet de détecter une modification.',
                    ],
                    [
                        'question' => 'Que protège principalement TLS ?',
                        'choices' => [
                            ['choice_text' => 'La confidentialité et l’intégrité du canal de communication', 'is_correct' => true],
                            ['choice_text' => 'La fiabilité du contenu métier', 'is_correct' => false],
                            ['choice_text' => 'L’absence de vulnérabilités applicatives', 'is_correct' => false],
                            ['choice_text' => 'La disponibilité du serveur', 'is_correct' => false],
                        ],
                        'explanation' => 'TLS protège la communication mais ne garantit pas que l’application elle-même est sûre.',
                    ],
                    [
                        'question' => 'Pourquoi une clé publique peut-elle être distribuée ?',
                        'choices' => [
                            ['choice_text' => 'Elle ne révèle pas la clé privée correspondante', 'is_correct' => true],
                            ['choice_text' => 'Elle est toujours un mot de passe', 'is_correct' => false],
                            ['choice_text' => 'Elle contient l’adresse IP', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace les sauvegardes', 'is_correct' => false],
                        ],
                        'explanation' => 'La cryptographie asymétrique est conçue pour permettre le partage de la clé publique.',
                    ],
                    [
                        'question' => 'Pourquoi les mots de passe ne devraient-ils pas être stockés avec un chiffrement réversible simple ?',
                        'choices' => [
                            ['choice_text' => 'Une compromission de la clé pourrait révéler tous les secrets', 'is_correct' => true],
                            ['choice_text' => 'TLS l’interdit', 'is_correct' => false],
                            ['choice_text' => 'Le chiffrement est toujours plus lent', 'is_correct' => false],
                            ['choice_text' => 'Les mots de passe n’ont pas de valeur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un stockage par fonction de dérivation adaptée limite l’exposition du secret original.',
                    ],
                    [
                        'question' => 'Que doit vérifier un client lors d’une connexion TLS ?',
                        'choices' => [
                            ['choice_text' => 'Que l’identité du certificat correspond au serveur attendu', 'is_correct' => true],
                            ['choice_text' => 'La couleur du site', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de ports', 'is_correct' => false],
                            ['choice_text' => 'Le nom du clavier', 'is_correct' => false],
                        ],
                        'explanation' => 'La vérification du certificat permet d’authentifier le serveur correspondant au domaine demandé.',
                    ],
                ],
            ],

            [
                'title' => 'Réponse aux incidents',
                'description' => 'Appliquer les premiers principes de gestion d’incident.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quelle priorité suit généralement la réponse à un poste compromis ?',
                        'choices' => [
                            ['choice_text' => 'Évaluer et contenir le risque', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les logs', 'is_correct' => false],
                            ['choice_text' => 'Publier les preuves', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les sauvegardes', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse cherche à limiter l’impact tout en préservant les éléments utiles à l’investigation.',
                    ],
                    [
                        'question' => 'Pourquoi conserver les journaux ?',
                        'choices' => [
                            ['choice_text' => 'Ils aident à reconstruire les événements', 'is_correct' => true],
                            ['choice_text' => 'Ils empêchent toujours les attaques', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Ils rendent TLS inutile', 'is_correct' => false],
                        ],
                        'explanation' => 'Les journaux permettent de comprendre les actions, horaires et systèmes concernés.',
                    ],
                    [
                        'question' => 'Que signifie confiner un incident ?',
                        'choices' => [
                            ['choice_text' => 'Limiter sa propagation et son impact', 'is_correct' => true],
                            ['choice_text' => 'Publier le rapport', 'is_correct' => false],
                            ['choice_text' => 'Créer des comptes', 'is_correct' => false],
                            ['choice_text' => 'Désactiver tous les contrôles', 'is_correct' => false],
                        ],
                        'explanation' => 'Le confinement empêche l’incident de s’étendre avant ou pendant son éradication.',
                    ],
                    [
                        'question' => 'Pourquoi documenter les actions pendant un incident ?',
                        'choices' => [
                            ['choice_text' => 'Pour assurer la traçabilité', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les preuves', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter la mémoire', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les procédures', 'is_correct' => false],
                        ],
                        'explanation' => 'Une chronologie documentée facilite l’analyse et le retour d’expérience.',
                    ],
                    [
                        'question' => 'Quel est l’objectif de l’éradication ?',
                        'choices' => [
                            ['choice_text' => 'Supprimer les mécanismes malveillants et la cause traitable', 'is_correct' => true],
                            ['choice_text' => 'Créer un domaine public', 'is_correct' => false],
                            ['choice_text' => 'Réduire le disque', 'is_correct' => false],
                            ['choice_text' => 'Masquer l’incident', 'is_correct' => false],
                        ],
                        'explanation' => 'L’éradication vise notamment le malware, la persistance et la vulnérabilité exploitée.',
                    ],
                    [
                        'question' => 'Pourquoi faire un retour d’expérience ?',
                        'choices' => [
                            ['choice_text' => 'Pour améliorer les contrôles et procédures', 'is_correct' => true],
                            ['choice_text' => 'Pour réutiliser les secrets compromis', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour arrêter la supervision', 'is_correct' => false],
                        ],
                        'explanation' => 'Le retour d’expérience transforme les enseignements en améliorations concrètes.',
                    ],
                    [
                        'question' => 'Pourquoi isoler un poste compromis ?',
                        'choices' => [
                            ['choice_text' => 'Limiter les communications malveillantes et le mouvement latéral', 'is_correct' => true],
                            ['choice_text' => 'Accélérer les mises à jour', 'is_correct' => false],
                            ['choice_text' => 'Rendre le poste public', 'is_correct' => false],
                            ['choice_text' => 'Désactiver l’antivirus', 'is_correct' => false],
                        ],
                        'explanation' => 'L’isolement réduit les possibilités de propagation et de commande.',
                    ],
                    [
                        'question' => 'Que faut-il préserver pour une preuve numérique ?',
                        'choices' => [
                            ['choice_text' => 'Son intégrité et sa traçabilité', 'is_correct' => true],
                            ['choice_text' => 'Sa suppression rapide', 'is_correct' => false],
                            ['choice_text' => 'Son exposition publique', 'is_correct' => false],
                            ['choice_text' => 'Son renommage', 'is_correct' => false],
                        ],
                        'explanation' => 'Une preuve doit rester intègre et être associée à une collecte documentée.',
                    ],
                    [
                        'question' => 'Pourquoi changer les identifiants après une compromission ?',
                        'choices' => [
                            ['choice_text' => 'Pour invalider les secrets potentiellement connus', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la bande passante', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les correctifs', 'is_correct' => false],
                        ],
                        'explanation' => 'La rotation réduit la possibilité de réutiliser des identifiants volés.',
                    ],
                    [
                        'question' => 'Quel critère aide à prioriser un incident ?',
                        'choices' => [
                            ['choice_text' => 'L’impact potentiel sur les systèmes et données', 'is_correct' => true],
                            ['choice_text' => 'La couleur de l’interface', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de fenêtres', 'is_correct' => false],
                            ['choice_text' => 'Le navigateur', 'is_correct' => false],
                        ],
                        'explanation' => 'La priorité dépend notamment de la criticité, de l’étendue et de la sensibilité des actifs.',
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