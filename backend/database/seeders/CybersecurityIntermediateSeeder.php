<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class CybersecurityIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'cybersecurity')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Gestion des vulnérabilités',
                'description' => 'Identifier, prioriser et traiter les vulnérabilités dans un environnement informatique.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi contextualiser un score CVSS ?',
                        'choices' => [
                            ['choice_text' => 'Le score seul ne décrit pas toute l’exposition métier', 'is_correct' => true],
                            ['choice_text' => 'CVSS remplace l’inventaire', 'is_correct' => false],
                            ['choice_text' => 'CVSS supprime les vulnérabilités', 'is_correct' => false],
                            ['choice_text' => 'CVSS mesure uniquement les performances', 'is_correct' => false],
                        ],
                        'explanation' => 'La criticité réelle dépend également de l’exposition, de la criticité de l’actif et des contrôles existants.',
                    ],
                    [
                        'question' => 'Quel facteur augmente généralement la priorité d’une vulnérabilité ?',
                        'choices' => [
                            ['choice_text' => 'Une exploitation connue sur un actif critique exposé', 'is_correct' => true],
                            ['choice_text' => 'Un nom de serveur court', 'is_correct' => false],
                            ['choice_text' => 'Un écran haute résolution', 'is_correct' => false],
                            ['choice_text' => 'Une faible utilisation CPU', 'is_correct' => false],
                        ],
                        'explanation' => 'Exploitabilité, exposition et criticité de l’actif sont des facteurs importants de priorisation.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un contrôle compensatoire ?',
                        'choices' => [
                            ['choice_text' => 'Une mesure qui réduit temporairement le risque lorsqu’un correctif immédiat est impossible', 'is_correct' => true],
                            ['choice_text' => 'Une suppression des journaux', 'is_correct' => false],
                            ['choice_text' => 'Une élévation de privilèges', 'is_correct' => false],
                            ['choice_text' => 'Une désactivation du pare-feu', 'is_correct' => false],
                        ],
                        'explanation' => 'Un contrôle compensatoire permet de réduire l’exposition pendant l’attente d’une remédiation complète.',
                    ],
                    [
                        'question' => 'Pourquoi valider un résultat de scanner avant remédiation ?',
                        'choices' => [
                            ['choice_text' => 'Pour distinguer une vulnérabilité réelle d’un faux positif', 'is_correct' => true],
                            ['choice_text' => 'Pour désactiver le scanner', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les preuves', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter le nombre de tickets', 'is_correct' => false],
                        ],
                        'explanation' => 'La validation évite de consacrer des ressources à une vulnérabilité qui n’existe pas réellement.',
                    ],
                    [
                        'question' => 'Pourquoi tester un correctif en environnement pilote ?',
                        'choices' => [
                            ['choice_text' => 'Pour détecter les régressions avant le déploiement généralisé', 'is_correct' => true],
                            ['choice_text' => 'Pour désactiver les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le système public', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les journaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le test pilote réduit le risque qu’un correctif provoque une panne généralisée.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’un SLA de remédiation ?',
                        'choices' => [
                            ['choice_text' => 'Définir un délai cible de traitement selon la criticité', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer les données', 'is_correct' => false],
                            ['choice_text' => 'Créer des utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le firewall', 'is_correct' => false],
                        ],
                        'explanation' => 'Un SLA transforme la criticité d’une vulnérabilité en délai de traitement mesurable.',
                    ],
                    [
                        'question' => 'Pourquoi suivre une exception de sécurité ?',
                        'choices' => [
                            ['choice_text' => 'Pour éviter qu’une exception temporaire devienne permanente', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les alertes', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Pour arrêter la supervision', 'is_correct' => false],
                        ],
                        'explanation' => 'Une exception doit être justifiée, attribuée à un responsable et réévaluée à une date définie.',
                    ],
                    [
                        'question' => 'Quel élément doit être associé à une vulnérabilité acceptée temporairement ?',
                        'choices' => [
                            ['choice_text' => 'Un propriétaire et une date de réévaluation', 'is_correct' => true],
                            ['choice_text' => 'Un compte anonyme', 'is_correct' => false],
                            ['choice_text' => 'Un mot de passe partagé', 'is_correct' => false],
                            ['choice_text' => 'Une suppression de logs', 'is_correct' => false],
                        ],
                        'explanation' => 'La gouvernance des exceptions nécessite notamment responsabilité, justification et échéance.',
                    ],
                    [
                        'question' => 'Quel résultat confirme le mieux une remédiation ?',
                        'choices' => [
                            ['choice_text' => 'Une nouvelle vérification montrant que la faiblesse n’est plus exploitable', 'is_correct' => true],
                            ['choice_text' => 'La fermeture du ticket sans test', 'is_correct' => false],
                            ['choice_text' => 'La suppression du scanner', 'is_correct' => false],
                            ['choice_text' => 'La diminution du nombre d’utilisateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une validation technique après correction permet de confirmer que le risque a effectivement diminué.',
                    ],
                    [
                        'question' => 'Pourquoi maintenir un inventaire des actifs ?',
                        'choices' => [
                            ['choice_text' => 'Pour savoir quels systèmes doivent être évalués et protégés', 'is_correct' => true],
                            ['choice_text' => 'Pour remplacer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer MFA', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher le chiffrement', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans inventaire fiable, il est difficile de savoir où se trouvent les actifs vulnérables.',
                    ],
                ],
            ],

            [
                'title' => 'Contrôle d’accès avancé',
                'description' => 'Approfondir IAM, RBAC, privilèges et comptes de service.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif du RBAC ?',
                        'choices' => [
                            ['choice_text' => 'Attribuer les permissions selon des rôles', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer les disques', 'is_correct' => false],
                            ['choice_text' => 'Analyser les paquets', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les certificats', 'is_correct' => false],
                        ],
                        'explanation' => 'RBAC simplifie la gestion des droits en les associant à des rôles organisationnels.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le moindre privilège ?',
                        'choices' => [
                            ['choice_text' => 'Accorder uniquement les permissions nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Donner tous les droits par défaut', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute authentification', 'is_correct' => false],
                            ['choice_text' => 'Partager les comptes administrateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Le moindre privilège limite les possibilités d’abus ou de compromission.',
                    ],
                    [
                        'question' => 'Pourquoi revoir régulièrement les droits d’accès ?',
                        'choices' => [
                            ['choice_text' => 'Les responsabilités et besoins peuvent changer', 'is_correct' => true],
                            ['choice_text' => 'Les mots de passe deviennent automatiquement publics', 'is_correct' => false],
                            ['choice_text' => 'TLS exige une revue quotidienne', 'is_correct' => false],
                            ['choice_text' => 'Les firewalls suppriment les rôles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les changements de poste ou de responsabilités peuvent rendre certains droits inutiles.',
                    ],
                    [
                        'question' => 'Quel risque présente un compte de service trop privilégié ?',
                        'choices' => [
                            ['choice_text' => 'Une compromission peut donner un accès excessif', 'is_correct' => true],
                            ['choice_text' => 'Il améliore toujours la sécurité', 'is_correct' => false],
                            ['choice_text' => 'Il empêche les logs', 'is_correct' => false],
                            ['choice_text' => 'Il désactive automatiquement MFA', 'is_correct' => false],
                        ],
                        'explanation' => 'Les comptes de service compromis peuvent permettre une élévation ou un mouvement latéral important.',
                    ],
                    [
                        'question' => 'Pourquoi éviter les comptes administrateurs partagés ?',
                        'choices' => [
                            ['choice_text' => 'Ils réduisent la traçabilité individuelle', 'is_correct' => true],
                            ['choice_text' => 'Ils accélèrent les attaques', 'is_correct' => false],
                            ['choice_text' => 'Ils chiffrent les mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent MFA', 'is_correct' => false],
                        ],
                        'explanation' => 'Une identité individuelle permet d’attribuer les actions à une personne ou un processus précis.',
                    ],
                    [
                        'question' => 'Que signifie JIT dans la gestion des privilèges ?',
                        'choices' => [
                            ['choice_text' => 'Just-In-Time', 'is_correct' => true],
                            ['choice_text' => 'Java Identity Token', 'is_correct' => false],
                            ['choice_text' => 'Joint Internet Tunnel', 'is_correct' => false],
                            ['choice_text' => 'Job Internal Table', 'is_correct' => false],
                        ],
                        'explanation' => 'JIT désigne notamment l’octroi temporaire de privilèges lorsqu’ils sont nécessaires.',
                    ],
                    [
                        'question' => 'Quel avantage apporte une élévation temporaire des privilèges ?',
                        'choices' => [
                            ['choice_text' => 'Réduire la durée d’exposition aux droits élevés', 'is_correct' => true],
                            ['choice_text' => 'Créer des comptes permanents', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les audits', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les alertes', 'is_correct' => false],
                        ],
                        'explanation' => 'Des privilèges temporaires réduisent la fenêtre durant laquelle un compte possède des droits élevés.',
                    ],
                    [
                        'question' => 'Quel contrôle aide à détecter un compte utilisé de manière inhabituelle ?',
                        'choices' => [
                            ['choice_text' => L’analyse des journaux d’authentification', 'is_correct' => true],
                            ['choice_text' => 'Le changement de fond d’écran', 'is_correct' => false],
                            ['choice_text' => 'La compression réseau', 'is_correct' => false],
                            ['choice_text' => 'La désactivation DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'Les journaux peuvent révéler des horaires, localisations ou comportements anormaux.',
                    ],
                    [
                        'question' => 'Pourquoi désactiver rapidement un compte d’un collaborateur parti ?',
                        'choices' => [
                            ['choice_text' => 'Pour empêcher l’utilisation ultérieure de ses accès', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les performances', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le firewall', 'is_correct' => false],
                        ],
                        'explanation' => 'La révocation rapide des accès fait partie du processus de départ.',
                    ],
                    [
                        'question' => 'Quel principe limite les conflits de responsabilités ?',
                        'choices' => [
                            ['choice_text' => La séparation des tâches', 'is_correct' => true],
                            ['choice_text' => 'Le partage des comptes', 'is_correct' => false],
                            ['choice_text' => 'La réutilisation des mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Le désarmement des logs', 'is_correct' => false],
                        ],
                        'explanation' => 'La séparation des tâches évite qu’une seule personne puisse réaliser toutes les étapes sensibles.',
                    ],
                ],
            ],

            [
                'title' => 'Sécurité des applications web',
                'description' => 'Reconnaître les principales vulnérabilités applicatives web.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une injection SQL ?',
                        'choices' => [
                            ['choice_text' => 'Une manipulation de requêtes SQL via des entrées contrôlées par un attaquant', 'is_correct' => true],
                            ['choice_text' => 'Un chiffrement de base de données', 'is_correct' => false],
                            ['choice_text' => 'Une sauvegarde SQL', 'is_correct' => false],
                            ['choice_text' => 'Un protocole TLS', 'is_correct' => false],
                        ],
                        'explanation' => 'Une validation insuffisante des entrées peut permettre de modifier la logique d’une requête SQL.',
                    ],
                    [
                        'question' => 'Quelle défense est efficace contre l’injection SQL ?',
                        'choices' => [
                            ['choice_text' => 'Les requêtes préparées', 'is_correct' => true],
                            ['choice_text' => 'Le partage des comptes', 'is_correct' => false],
                            ['choice_text' => 'La désactivation des logs', 'is_correct' => false],
                            ['choice_text' => 'L’ouverture de tous les ports', 'is_correct' => false],
                        ],
                        'explanation' => 'Les requêtes préparées séparent les données des instructions SQL.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une XSS ?',
                        'choices' => [
                            ['choice_text' => 'Une exécution de contenu script contrôlé par un attaquant dans le contexte d’une page', 'is_correct' => true],
                            ['choice_text' => 'Une attaque uniquement réseau', 'is_correct' => false],
                            ['choice_text' => 'Une sauvegarde chiffrée', 'is_correct' => false],
                            ['choice_text' => 'Un certificat', 'is_correct' => false],
                        ],
                        'explanation' => 'La XSS exploite notamment un traitement insuffisant des contenus contrôlés par l’utilisateur.',
                    ],
                    [
                        'question' => 'Quel contrôle réduit le risque XSS ?',
                        'choices' => [
                            ['choice_text' => L’encodage contextuel des sorties', 'is_correct' => true],
                            ['choice_text' => 'La suppression des sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Le partage des comptes', 'is_correct' => false],
                            ['choice_text' => 'L’ouverture du port 22', 'is_correct' => false],
                        ],
                        'explanation' => 'Encoder correctement les données avant affichage empêche leur interprétation comme code.',
                    ],
                    [
                        'question' => 'Que signifie CSRF ?',
                        'choices' => [
                            ['choice_text' => 'Cross-Site Request Forgery', 'is_correct' => true],
                            ['choice_text' => 'Central Security Routing Firewall', 'is_correct' => false],
                            ['choice_text' => 'Common System Recovery File', 'is_correct' => false],
                            ['choice_text' => 'Cloud Service Remote Function', 'is_correct' => false],
                        ],
                        'explanation' => 'CSRF désigne une attaque où une victime authentifiée est amenée à effectuer une action non souhaitée.',
                    ],
                    [
                        'question' => 'Quel mécanisme aide à se protéger contre CSRF ?',
                        'choices' => [
                            ['choice_text' => Un jeton anti-CSRF imprévisible', 'is_correct' => true],
                            ['choice_text' => Un mot de passe partagé', 'is_correct' => false],
                            ['choice_text' => Un port ouvert', 'is_correct' => false],
                            ['choice_text' => Un fichier texte public', 'is_correct' => false],
                        ],
                        'explanation' => 'Un jeton lié à la session permet de vérifier que la requête provient d’un contexte légitime.',
                    ],
                    [
                        'question' => 'Pourquoi valider les entrées côté serveur ?',
                        'choices' => [
                            ['choice_text' => Le client peut être manipulé ou contourné', 'is_correct' => true],
                            ['choice_text' => Le navigateur est toujours fiable', 'is_correct' => false],
                            ['choice_text' => TLS valide les données métier', 'is_correct' => false],
                            ['choice_text' => Le firewall valide toutes les entrées', 'is_correct' => false],
                        ],
                        'explanation' => 'Les contrôles côté client sont utiles pour l’ergonomie mais ne constituent pas une frontière de confiance.',
                    ],
                    [
                        'question' => 'Quel est le risque d’un message d’erreur trop détaillé ?',
                        'choices' => [
                            ['choice_text' => Il peut révéler des informations utiles à un attaquant', 'is_correct' => true],
                            ['choice_text' => Il améliore toujours la sécurité', 'is_correct' => false],
                            ['choice_text' => Il chiffre automatiquement les données', 'is_correct' => false],
                            ['choice_text' => Il désactive les sessions', 'is_correct' => false],
                        ],
                        'explanation' => 'Les traces techniques détaillées doivent généralement rester dans les journaux plutôt que dans les réponses utilisateur.',
                    ],
                    [
                        'question' => 'Pourquoi limiter les tentatives d’authentification d’une application ?',
                        'choices' => [
                            ['choice_text' => Pour réduire les attaques par force brute', 'is_correct' => true],
                            ['choice_text' => Pour désactiver les sessions', 'is_correct' => false],
                            ['choice_text' => Pour supprimer les utilisateurs', 'is_correct' => false],
                            ['choice_text' => Pour rendre l’application publique', 'is_correct' => false],
                        ],
                        'explanation' => 'La limitation des tentatives réduit la capacité à tester rapidement de nombreux secrets.',
                    ],
                    [
                        'question' => 'Pourquoi protéger les cookies de session avec des attributs appropriés ?',
                        'choices' => [
                            ['choice_text' => Pour réduire certains risques de vol ou d’envoi non souhaité', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter le CPU', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer TLS', 'is_correct' => false],
                        ],
                        'explanation' => 'Des attributs comme Secure, HttpOnly et SameSite contribuent à protéger les cookies selon le contexte.',
                    ],
                ],
            ],

            [
                'title' => 'Sécurité réseau intermédiaire',
                'description' => 'Approfondir segmentation, IDS, VPN et surveillance réseau.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quelle différence générale existe entre IDS et IPS ?',
                        'choices' => [
                            ['choice_text' => 'Un IDS détecte tandis qu’un IPS peut également bloquer', 'is_correct' => true],
                            ['choice_text' => 'Un IDS chiffre et un IPS sauvegarde', 'is_correct' => false],
                            ['choice_text' => 'Ils sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Un IPS remplace IAM', 'is_correct' => false],
                        ],
                        'explanation' => 'Un IDS est principalement orienté détection ; un IPS peut prendre des mesures de prévention.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser des VLAN de sécurité ?',
                        'choices' => [
                            ['choice_text' => 'Pour segmenter logiquement le réseau', 'is_correct' => true],
                            ['choice_text' => 'Pour chiffrer les disques', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les identités', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer DNS', 'is_correct' => false],
                        ],
                        'explanation' => 'Les VLAN permettent notamment de séparer des populations et flux réseau.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le mouvement latéral ?',
                        'choices' => [
                            ['choice_text' => Le déplacement d’un attaquant entre systèmes internes après un premier accès', 'is_correct' => true],
                            ['choice_text' => 'Le changement de fournisseur Internet', 'is_correct' => false],
                            ['choice_text' => 'La rotation d’un mot de passe', 'is_correct' => false],
                            ['choice_text' => 'Une sauvegarde', 'is_correct' => false],
                        ],
                        'explanation' => 'Après compromission, un attaquant peut chercher d’autres machines et comptes.',
                    ],
                    [
                        'question' => 'Pourquoi restreindre les flux entre segments ?',
                        'choices' => [
                            ['choice_text' => 'Pour limiter les communications nécessaires et le mouvement latéral', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le chiffrement', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre tous les ports publics', 'is_correct' => false],
                        ],
                        'explanation' => 'Une segmentation efficace associe séparation et règles de communication minimales.',
                    ],
                    [
                        'question' => 'Quel avantage apporte un bastion d’administration ?',
                        'choices' => [
                            ['choice_text' => 'Centraliser et contrôler les accès administratifs', 'is_correct' => true],
                            ['choice_text' => 'Partager les mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Désactiver MFA', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les journaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bastion peut réduire les chemins d’administration et améliorer la supervision.',
                    ],
                    [
                        'question' => 'Pourquoi surveiller les connexions sortantes ?',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent révéler une communication avec une infrastructure malveillante', 'is_correct' => true],
                            ['choice_text' => 'Elles sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent l’antivirus', 'is_correct' => false],
                            ['choice_text' => 'Elles désactivent TLS', 'is_correct' => false],
                        ],
                        'explanation' => 'Les communications sortantes peuvent fournir des indicateurs de compromission ou d’exfiltration.',
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un DNS sécurisé et surveillé ?',
                        'choices' => [
                            ['choice_text' => 'Réduire certains détournements et détecter des domaines suspects', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Chiffrer tous les fichiers', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les firewalls', 'is_correct' => false],
                        ],
                        'explanation' => 'Le DNS constitue une source utile de contrôle et de détection.',
                    ],
                    [
                        'question' => 'Pourquoi journaliser les flux réseau importants ?',
                        'choices' => [
                            ['choice_text' => 'Pour faciliter la détection et l’investigation', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les certificats', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le réseau anonyme', 'is_correct' => false],
                        ],
                        'explanation' => 'Les métadonnées réseau peuvent aider à reconstruire une activité suspecte.',
                    ],
                    [
                        'question' => 'Pourquoi limiter l’administration depuis Internet ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire l’exposition des interfaces privilégiées', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les journaux', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter les comptes administrateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les interfaces d’administration sont particulièrement sensibles et doivent être fortement restreintes.',
                    ],
                    [
                        'question' => 'Quel contrôle peut limiter l’exfiltration vers Internet ?',
                        'choices' => [
                            ['choice_text' => Des règles de sortie et une surveillance des flux', 'is_correct' => true],
                            ['choice_text' => 'La désactivation de tous les logs', 'is_correct' => false],
                            ['choice_text' => 'Le partage des comptes', 'is_correct' => false],
                            ['choice_text' => 'Un fond d’écran', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contrôle des flux sortants et leur surveillance peuvent limiter ou détecter l’exfiltration.',
                    ],
                ],
            ],

            [
                'title' => 'Journalisation et SIEM',
                'description' => 'Comprendre la collecte, la corrélation et l’analyse des événements.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal d’un SIEM ?',
                        'choices' => [
                            ['choice_text' => 'Centraliser et corréler des événements de sécurité', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les firewalls', 'is_correct' => false],
                            ['choice_text' => 'Créer des mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Chiffrer automatiquement les disques', 'is_correct' => false],
                        ],
                        'explanation' => 'Un SIEM agrège les événements et fournit des capacités de recherche, corrélation et alerte.',
                    ],
                    [
                        'question' => 'Pourquoi synchroniser l’heure des systèmes ?',
                        'choices' => [
                            ['choice_text' => 'Pour corréler correctement les événements dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la bande passante', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver TLS', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les journaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Des horodatages cohérents sont essentiels à l’analyse d’une chronologie d’incident.',
                    ],
                    [
                        'question' => 'Quel événement d’authentification peut être particulièrement intéressant à surveiller ?',
                        'choices' => [
                            ['choice_text' => 'De nombreuses connexions échouées suivies d’une réussite', 'is_correct' => true],
                            ['choice_text' => 'Un changement de fond d’écran', 'is_correct' => false],
                            ['choice_text' => 'Une impression normale', 'is_correct' => false],
                            ['choice_text' => 'Une lecture locale sans erreur', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette séquence peut indiquer une tentative de force brute réussie.',
                    ],
                    [
                        'question' => 'Pourquoi centraliser les journaux ?',
                        'choices' => [
                            ['choice_text' => 'Pour les rendre plus difficiles à modifier depuis un système compromis', 'is_correct' => true],
                            ['choice_text' => 'Pour les supprimer automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver l’audit', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter les privilèges', 'is_correct' => false],
                        ],
                        'explanation' => 'Une copie centralisée améliore la résilience des journaux et leur analyse.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une règle de corrélation ?',
                        'choices' => [
                            ['choice_text' => 'Une logique qui relie plusieurs événements pour produire un signal', 'is_correct' => true],
                            ['choice_text' => 'Une règle de pare-feu uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une clé cryptographique', 'is_correct' => false],
                            ['choice_text' => 'Une sauvegarde', 'is_correct' => false],
                        ],
                        'explanation' => 'La corrélation combine plusieurs événements qui, pris isolément, peuvent sembler anodins.',
                    ],
                    [
                        'question' => 'Pourquoi réduire le bruit des alertes ?',
                        'choices' => [
                            ['choice_text' => 'Pour permettre aux analystes de se concentrer sur les événements importants', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toute surveillance', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les attaques plus rapides', 'is_correct' => false],
                        ],
                        'explanation' => 'Un volume excessif de faux positifs augmente le risque qu’une vraie alerte soit ignorée.',
                    ],
                    [
                        'question' => 'Quel est un indicateur utile pour détecter un compte compromis ?',
                        'choices' => [
                            ['choice_text' => Une connexion depuis une localisation ou un horaire inhabituel', 'is_correct' => true],
                            ['choice_text' => 'Un écran allumé', 'is_correct' => false],
                            ['choice_text' => 'Un fichier temporaire normal', 'is_correct' => false],
                            ['choice_text' => 'Une impression planifiée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les anomalies comportementales peuvent signaler une utilisation frauduleuse d’un compte.',
                    ],
                    [
                        'question' => 'Pourquoi protéger les journaux contre la modification ?',
                        'choices' => [
                            ['choice_text' => 'Pour préserver leur valeur d’investigation', 'is_correct' => true],
                            ['choice_text' => 'Pour accélérer les processeurs', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les preuves', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les sauvegardes', 'is_correct' => false],
                        ],
                        'explanation' => 'Des journaux altérés peuvent empêcher de déterminer ce qui s’est réellement produit.',
                    ],
                    [
                        'question' => 'Quelle donnée aide à identifier une machine dans un événement réseau ?',
                        'choices' => [
                            ['choice_text' => 'L’adresse IP et éventuellement le nom d’hôte', 'is_correct' => true],
                            ['choice_text' => 'La couleur du boîtier', 'is_correct' => false],
                            ['choice_text' => 'Le fond d’écran', 'is_correct' => false],
                            ['choice_text' => 'La luminosité', 'is_correct' => false],
                        ],
                        'explanation' => 'Les identifiants réseau permettent de relier un événement à un système.',
                    ],
                    [
                        'question' => 'Pourquoi définir une durée de conservation des logs ?',
                        'choices' => [
                            ['choice_text' => 'Pour répondre aux besoins d’investigation et de conformité tout en maîtrisant le stockage', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les traces immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les alertes', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les logs publics', 'is_correct' => false],
                        ],
                        'explanation' => 'La conservation doit équilibrer besoins opérationnels, exigences et coûts.',
                    ],
                ],
            ],

            [
                'title' => 'Sauvegarde et continuité',
                'description' => 'Mettre en place des sauvegardes et une résilience adaptées.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Que signifie RPO ?',
                        'choices' => [
                            ['choice_text' => 'Recovery Point Objective', 'is_correct' => true],
                            ['choice_text' => 'Recovery Password Operation', 'is_correct' => false],
                            ['choice_text' => 'Remote Protection Object', 'is_correct' => false],
                            ['choice_text' => 'Risk Processing Order', 'is_correct' => false],
                        ],
                        'explanation' => 'Le RPO représente la quantité maximale de données que l’organisation accepte potentiellement de perdre.',
                    ],
                    [
                        'question' => 'Que signifie RTO ?',
                        'choices' => [
                            ['choice_text' => 'Recovery Time Objective', 'is_correct' => true],
                            ['choice_text' => 'Remote Token Operation', 'is_correct' => false],
                            ['choice_text' => 'Risk Transfer Object', 'is_correct' => false],
                            ['choice_text' => 'Recovery Threat Order', 'is_correct' => false],
                        ],
                        'explanation' => 'Le RTO représente le délai cible de restauration d’un service.',
                    ],
                    [
                        'question' => 'Pourquoi tester les restaurations ?',
                        'choices' => [
                            ['choice_text' => 'Une sauvegarde non testée peut être inutilisable au moment critique', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver le stockage', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter les privilèges', 'is_correct' => false],
                        ],
                        'explanation' => 'Le test confirme que les données peuvent réellement être récupérées.',
                    ],
                    [
                        'question' => 'Pourquoi conserver une copie hors ligne ou fortement isolée ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire le risque qu’un ransomware compromette toutes les copies', 'is_correct' => true],
                            ['choice_text' => 'Pour accélérer Internet', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer MFA', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les données publiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une copie isolée est plus difficile à chiffrer ou supprimer depuis un environnement compromis.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser plusieurs emplacements de sauvegarde ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire le risque de perte simultanée', 'is_correct' => true],
                            ['choice_text' => 'Pour partager les mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la redondance', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les contrôles', 'is_correct' => false],
                        ],
                        'explanation' => 'La diversification des emplacements protège contre certaines pannes et catastrophes.',
                    ],
                    [
                        'question' => 'Quel principe est associé à la stratégie 3-2-1 ?',
                        'choices' => [
                            ['choice_text' => Plusieurs copies sur différents supports dont une copie hors site', 'is_correct' => true],
                            ['choice_text' => 'Trois mots de passe par compte', 'is_correct' => false],
                            ['choice_text' => 'Deux firewalls et un antivirus', 'is_correct' => false],
                            ['choice_text' => 'Trois comptes administrateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'La règle 3-2-1 vise à diversifier le nombre de copies, supports et emplacements.',
                    ],
                    [
                        'question' => 'Pourquoi chiffrer les sauvegardes sensibles ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire l’exposition si le support de sauvegarde est compromis', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute restauration', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les contrôles d’accès', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chiffrement protège les données sauvegardées contre un accès non autorisé.',
                    ],
                    [
                        'question' => 'Pourquoi séparer les comptes utilisés pour administrer les sauvegardes ?',
                        'choices' => [
                            ['choice_text' => 'Pour limiter l’impact d’une compromission du réseau principal', 'is_correct' => true],
                            ['choice_text' => 'Pour partager les mêmes mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver l’audit', 'is_correct' => false],
                        ],
                        'explanation' => 'Une séparation des privilèges réduit les possibilités pour un attaquant de détruire les sauvegardes.',
                    ],
                    [
                        'question' => 'Quel document décrit les étapes de reprise d’un service critique ?',
                        'choices' => [
                            ['choice_text' => 'Une procédure de reprise ou plan de continuité', 'is_correct' => true],
                            ['choice_text' => 'Un fond d’écran', 'is_correct' => false],
                            ['choice_text' => 'Une liste de mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Un certificat utilisateur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plans de continuité et de reprise documentent les actions nécessaires pour restaurer les services.',
                    ],
                    [
                        'question' => 'Pourquoi prioriser les services lors d’une reprise ?',
                        'choices' => [
                            ['choice_text' => 'Les ressources de récupération peuvent être limitées', 'is_correct' => true],
                            ['choice_text' => 'Tous les services ont exactement la même criticité', 'is_correct' => false],
                            ['choice_text' => 'Les sauvegardes l’exigent toujours', 'is_correct' => false],
                            ['choice_text' => 'Cela désactive les contrôles de sécurité', 'is_correct' => false],
                        ],
                        'explanation' => 'La criticité métier aide à déterminer l’ordre de restauration.',
                    ],
                ],
            ],

            [
                'title' => 'Sécurité cloud',
                'description' => 'Comprendre les responsabilités partagées et les erreurs courantes dans le cloud.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Que signifie le modèle de responsabilité partagée ?',
                        'choices' => [
                            ['choice_text' => 'Le fournisseur et le client ont chacun des responsabilités de sécurité', 'is_correct' => true],
                            ['choice_text' => 'Le fournisseur est toujours responsable de tout', 'is_correct' => false],
                            ['choice_text' => 'Le client n’a aucune responsabilité', 'is_correct' => false],
                            ['choice_text' => 'La sécurité n’est pas nécessaire dans le cloud', 'is_correct' => false],
                        ],
                        'explanation' => 'Les responsabilités varient selon le service cloud et son modèle.',
                    ],
                    [
                        'question' => 'Quel problème peut provoquer un bucket de stockage public par erreur ?',
                        'choices' => [
                            ['choice_text' => Une exposition non autorisée des données', 'is_correct' => true],
                            ['choice_text' => 'Une meilleure confidentialité', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique des coûts', 'is_correct' => false],
                            ['choice_text' => 'Un chiffrement supplémentaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mauvaise configuration de stockage peut rendre des données accessibles publiquement.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser des rôles cloud plutôt que des clés permanentes quand c’est possible ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire la gestion de secrets statiques', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer IAM', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les comptes publics', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les logs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les rôles et identités temporaires peuvent réduire l’exposition des clés longues durées.',
                    ],
                    [
                        'question' => 'Pourquoi activer la journalisation cloud ?',
                        'choices' => [
                            ['choice_text' => 'Pour surveiller les actions et faciliter l’investigation', 'is_correct' => true],
                            ['choice_text' => 'Pour désactiver IAM', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les alertes', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les ressources publiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les journaux cloud permettent de suivre les opérations effectuées sur les ressources.',
                    ],
                    [
                        'question' => 'Quel risque présente une clé API longue durée exposée dans du code source ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut être réutilisée par un attaquant', 'is_correct' => true],
                            ['choice_text' => 'Elle améliore automatiquement la sécurité', 'is_correct' => false],
                            ['choice_text' => 'Elle désactive les permissions', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut jamais être utilisée', 'is_correct' => false],
                        ],
                        'explanation' => 'Un secret exposé dans le code peut être récupéré et utilisé jusqu’à sa révocation.',
                    ],
                    [
                        'question' => 'Pourquoi séparer les environnements cloud ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire les conséquences d’une erreur ou compromission', 'is_correct' => true],
                            ['choice_text' => 'Pour partager tous les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les journaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Séparer développement, test et production réduit les chemins d’accès involontaires.',
                    ],
                    [
                        'question' => 'Quel contrôle réduit le risque d’un compte cloud trop puissant ?',
                        'choices' => [
                            ['choice_text' => Le moindre privilège IAM', 'is_correct' => true],
                            ['choice_text' => 'Le partage de compte', 'is_correct' => false],
                            ['choice_text' => 'La suppression des logs', 'is_correct' => false],
                            ['choice_text' => 'La désactivation MFA', 'is_correct' => false],
                        ],
                        'explanation' => 'IAM doit accorder uniquement les permissions nécessaires.',
                    ],
                    [
                        'question' => 'Pourquoi surveiller les changements de configuration cloud ?',
                        'choices' => [
                            ['choice_text' => 'Une mauvaise configuration peut exposer des ressources sensibles', 'is_correct' => true],
                            ['choice_text' => 'Les configurations n’ont aucun impact', 'is_correct' => false],
                            ['choice_text' => 'Cela remplace les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Cela empêche toute erreur humaine', 'is_correct' => false],
                        ],
                        'explanation' => 'Les changements de configuration sont une source importante de risque cloud.',
                    ],
                    [
                        'question' => 'Pourquoi protéger les comptes cloud administrateurs avec MFA ?',
                        'choices' => [
                            ['choice_text' => 'Ils donnent accès à des ressources très sensibles', 'is_correct' => true],
                            ['choice_text' => 'MFA est inutile pour les administrateurs', 'is_correct' => false],
                            ['choice_text' => 'Cela remplace tous les contrôles réseau', 'is_correct' => false],
                            ['choice_text' => 'Cela rend les secrets publics', 'is_correct' => false],
                        ],
                        'explanation' => 'Les comptes privilégiés constituent des cibles prioritaires et doivent être fortement protégés.',
                    ],
                    [
                        'question' => 'Quel est un bon principe pour les ressources cloud publiques ?',
                        'choices' => [
                            ['choice_text' => Elles doivent être explicitement nécessaires et contrôlées', 'is_correct' => true],
                            ['choice_text' => 'Toutes les ressources devraient être publiques', 'is_correct' => false],
                            ['choice_text' => 'Les permissions doivent être maximales', 'is_correct' => false],
                            ['choice_text' => 'Les logs doivent être désactivés', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exposition publique doit être intentionnelle, justifiée et surveillée.',
                    ],
                ],
            ],

            [
                'title' => 'Sécurité mobile et télétravail',
                'description' => 'Réduire les risques liés aux appareils mobiles et aux connexions distantes.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi utiliser un verrouillage biométrique ou PIN sur un smartphone professionnel ?',
                        'choices' => [
                            ['choice_text' => 'Pour limiter l’accès physique aux données', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la puissance réseau', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le chiffrement', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les mises à jour', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verrouillage protège l’appareil en cas de perte ou de vol.',
                    ],
                    [
                        'question' => 'Quel risque présente un Wi-Fi public non fiable ?',
                        'choices' => [
                            ['choice_text' => 'Des interceptions ou attaques sur le trafic selon les protections utilisées', 'is_correct' => true],
                            ['choice_text' => 'Une meilleure confidentialité automatique', 'is_correct' => false],
                            ['choice_text' => 'Une authentification plus forte', 'is_correct' => false],
                            ['choice_text' => 'Une sauvegarde automatique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un réseau non fiable peut permettre différentes attaques, notamment lorsque les protections applicatives sont insuffisantes.',
                    ],
                    [
                        'question' => 'Pourquoi maintenir les appareils mobiles à jour ?',
                        'choices' => [
                            ['choice_text' => 'Pour corriger des vulnérabilités connues', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer MFA', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les données publiques', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver le chiffrement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mises à jour corrigent notamment des failles exploitables.',
                    ],
                    [
                        'question' => 'Quel contrôle est utile pour gérer les appareils professionnels à distance ?',
                        'choices' => [
                            ['choice_text' => Une solution MDM/UEM', 'is_correct' => true],
                            ['choice_text' => 'Un compte partagé', 'is_correct' => false],
                            ['choice_text' => 'Un port ouvert', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des logs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les solutions MDM/UEM permettent notamment de gérer les politiques et appareils.',
                    ],
                    [
                        'question' => 'Pourquoi désactiver les fonctions inutilisées sur un appareil mobile ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire la surface d’attaque', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les mises à jour', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le Wi-Fi public', 'is_correct' => false],
                        ],
                        'explanation' => 'Les services inutilisés ajoutent des possibilités d’exposition sans bénéfice nécessaire.',
                    ],
                    [
                        'question' => 'Quel risque présente une application mobile ayant des permissions excessives ?',
                        'choices' => [
                            ['choice_text' => 'Une collecte de données supérieure à ce qui est nécessaire', 'is_correct' => true],
                            ['choice_text' => 'Une meilleure confidentialité', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique des risques', 'is_correct' => false],
                            ['choice_text' => 'Une authentification renforcée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les permissions doivent être cohérentes avec les fonctionnalités nécessaires.',
                    ],
                    [
                        'question' => 'Pourquoi séparer les données personnelles et professionnelles ?',
                        'choices' => [
                            ['choice_text' => 'Pour mieux appliquer les politiques et limiter les accès', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer le chiffrement', 'is_correct' => false],
                            ['choice_text' => 'Pour partager les comptes', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les mises à jour', 'is_correct' => false],
                        ],
                        'explanation' => 'La séparation réduit les risques de mélange et facilite la gestion des données professionnelles.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser un VPN d’entreprise lorsque cela est requis ?',
                        'choices' => [
                            ['choice_text' => 'Pour fournir un canal protégé vers les ressources internes', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre l’utilisateur administrateur', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les contrôles d’accès', 'is_correct' => false],
                            ['choice_text' => 'Pour publier les ressources internes', 'is_correct' => false],
                        ],
                        'explanation' => 'Un VPN peut sécuriser le transport vers les ressources de l’organisation.',
                    ],
                    [
                        'question' => 'Que faire si un appareil professionnel est perdu ?',
                        'choices' => [
                            ['choice_text' => Le signaler rapidement afin de permettre le verrouillage ou l’effacement à distance', 'is_correct' => true],
                            ['choice_text' => 'Attendre plusieurs semaines', 'is_correct' => false],
                            ['choice_text' => 'Partager son mot de passe', 'is_correct' => false],
                            ['choice_text' => 'Désactiver MFA', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réaction rapide permet de réduire la fenêtre pendant laquelle l’appareil peut être exploité.',
                    ],
                    [
                        'question' => 'Pourquoi éviter de stocker des secrets professionnels dans une application non approuvée ?',
                        'choices' => [
                            ['choice_text' => 'La politique et les contrôles de sécurité peuvent ne pas être garantis', 'is_correct' => true],
                            ['choice_text' => 'Les applications approuvées ne fonctionnent jamais', 'is_correct' => false],
                            ['choice_text' => 'Le cloud est toujours dangereux', 'is_correct' => false],
                            ['choice_text' => 'Les secrets sont sans valeur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les applications non approuvées peuvent manquer de contrôles de sécurité, de gouvernance ou de chiffrement adaptés.',
                    ],
                ],
            ],

            [
                'title' => 'Sécurité des données',
                'description' => 'Classer, protéger et contrôler les informations sensibles.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi classifier les données ?',
                        'choices' => [
                            ['choice_text' => 'Pour appliquer des contrôles adaptés à leur sensibilité', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre toutes les données publiques', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les logs', 'is_correct' => false],
                        ],
                        'explanation' => 'La classification permet d’aligner les mesures de protection sur la sensibilité des informations.',
                    ],
                    [
                        'question' => 'Quel exemple correspond à une donnée très sensible ?',
                        'choices' => [
                            ['choice_text' => Une clé privée cryptographique', 'is_correct' => true],
                            ['choice_text' => 'Un logo public', 'is_correct' => false],
                            ['choice_text' => 'Une page marketing publique', 'is_correct' => false],
                            ['choice_text' => 'Une adresse de site public', 'is_correct' => false],
                        ],
                        'explanation' => 'Une clé privée compromise peut permettre des opérations cryptographiques critiques.',
                    ],
                    [
                        'question' => 'Pourquoi limiter l’accès aux données sensibles ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire le nombre de personnes ou systèmes pouvant les compromettre', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les journaux', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter les privilèges', 'is_correct' => false],
                        ],
                        'explanation' => 'La réduction des accès diminue la surface d’exposition.',
                    ],
                    [
                        'question' => 'Pourquoi chiffrer les données sensibles en transit ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire le risque d’interception', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer l’authentification', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter les droits', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer la sauvegarde', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chiffrement en transit protège les données pendant leur communication.',
                    ],
                    [
                        'question' => 'Pourquoi chiffrer certaines données au repos ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire l’exposition en cas d’accès au support', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute utilisation légitime', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer IAM', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les logs', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chiffrement au repos protège les données stockées contre certains accès non autorisés.',
                    ],
                    [
                        'question' => 'Pourquoi définir une durée de conservation des données ?',
                        'choices' => [
                            ['choice_text' => 'Pour éviter de conserver inutilement des informations sensibles', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer tous les contrôles', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter la surface d’attaque', 'is_correct' => false],
                            ['choice_text' => 'Pour partager les données', 'is_correct' => false],
                        ],
                        'explanation' => 'Conserver moins longtemps les données inutiles réduit l’exposition potentielle.',
                    ],
                    [
                        'question' => 'Quel risque présente une donnée sensible copiée dans un environnement de test ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut être exposée à des personnes ou systèmes non prévus', 'is_correct' => true],
                            ['choice_text' => 'Elle devient automatiquement publique', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours chiffrée', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut plus être supprimée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les environnements de test peuvent avoir des contrôles différents de la production.',
                    ],
                    [
                        'question' => 'Pourquoi anonymiser ou pseudonymiser certaines données de test ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire l’exposition des informations réelles', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer TLS', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les données publiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La transformation des données peut réduire les conséquences d’une fuite dans un environnement non productif.',
                    ],
                    [
                        'question' => 'Quel mécanisme permet de détecter certaines copies non autorisées de données ?',
                        'choices' => [
                            ['choice_text' => La surveillance des accès et transferts', 'is_correct' => true],
                            ['choice_text' => 'Un fond d’écran', 'is_correct' => false],
                            ['choice_text' => 'Un changement de clavier', 'is_correct' => false],
                            ['choice_text' => 'La désactivation des logs', 'is_correct' => false],
                        ],
                        'explanation' => 'La journalisation des accès et mouvements permet d’identifier des comportements anormaux.',
                    ],
                    [
                        'question' => 'Pourquoi détruire correctement un support contenant des données sensibles ?',
                        'choices' => [
                            ['choice_text' => 'Pour empêcher la récupération des informations', 'is_correct' => true],
                            ['choice_text' => 'Pour améliorer le Wi-Fi', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer MFA', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter les droits', 'is_correct' => false],
                        ],
                        'explanation' => 'La fin de vie d’un support doit prendre en compte la possibilité de récupération des données.',
                    ],
                ],
            ],

            [
                'title' => 'Gestion des risques',
                'description' => 'Évaluer les risques et choisir des traitements adaptés.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Comment peut-on simplifier la notion de risque ?',
                        'choices' => [
                            ['choice_text' => Une combinaison de probabilité et d’impact', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le nombre de serveurs', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le coût matériel', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le nombre d’utilisateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Le risque est souvent évalué en considérant la probabilité d’un événement et son impact.',
                    ],
                    [
                        'question' => 'Que signifie traiter un risque par réduction ?',
                        'choices' => [
                            ['choice_text' => 'Mettre en place des mesures qui diminuent sa probabilité ou son impact', 'is_correct' => true],
                            ['choice_text' => 'Ignorer le risque', 'is_correct' => false],
                            ['choice_text' => 'Le supprimer des registres', 'is_correct' => false],
                            ['choice_text' => 'Le rendre public', 'is_correct' => false],
                        ],
                        'explanation' => 'La réduction consiste à diminuer l’exposition au risque.',
                    ],
                    [
                        'question' => 'Que signifie accepter un risque ?',
                        'choices' => [
                            ['choice_text' => Décider consciemment de conserver le risque selon un niveau approuvé', 'is_correct' => true],
                            ['choice_text' => 'Ne pas connaître le risque', 'is_correct' => false],
                            ['choice_text' => 'Le supprimer automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Le transférer toujours à un fournisseur', 'is_correct' => false],
                        ],
                        'explanation' => 'L’acceptation doit être une décision consciente et documentée.',
                    ],
                    [
                        'question' => 'Que signifie transférer un risque ?',
                        'choices' => [
                            ['choice_text' => 'Partager certaines conséquences avec une autre partie', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute menace', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les contrôles', 'is_correct' => false],
                            ['choice_text' => 'Créer un mot de passe', 'is_correct' => false],
                        ],
                        'explanation' => 'L’assurance ou certains contrats peuvent transférer une partie des conséquences, sans supprimer le risque.',
                    ],
                    [
                        'question' => 'Pourquoi identifier les actifs critiques ?',
                        'choices' => [
                            ['choice_text' => 'Pour concentrer les efforts de sécurité là où l’impact est important', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les actifs', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les serveurs publics', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les sauvegardes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ressources de sécurité sont limitées et doivent être priorisées.',
                    ],
                    [
                        'question' => 'Pourquoi tenir un registre des risques ?',
                        'choices' => [
                            ['choice_text' => 'Pour suivre les risques, responsables, décisions et échéances', 'is_correct' => true],
                            ['choice_text' => 'Pour stocker les mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver MFA', 'is_correct' => false],
                        ],
                        'explanation' => 'Un registre rend le suivi des risques et des traitements plus structuré.',
                    ],
                    [
                        'question' => 'Pourquoi réévaluer régulièrement les risques ?',
                        'choices' => [
                            ['choice_text' => 'Les menaces, actifs et contrôles évoluent', 'is_correct' => true],
                            ['choice_text' => 'Les risques restent toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Cela remplace les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Cela désactive les audits', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contexte de risque change avec les nouvelles menaces, technologies et activités.',
                    ],
                    [
                        'question' => 'Quel facteur peut augmenter l’impact d’une compromission ?',
                        'choices' => [
                            ['choice_text' => La présence de données sensibles ou d’un service critique', 'is_correct' => true],
                            ['choice_text' => 'Une faible résolution d’écran', 'is_correct' => false],
                            ['choice_text' => 'Un clavier différent', 'is_correct' => false],
                            ['choice_text' => 'Un nom de serveur court', 'is_correct' => false],
                        ],
                        'explanation' => 'La criticité métier et la sensibilité des données influencent fortement l’impact.',
                    ],
                    [
                        'question' => 'Pourquoi prendre en compte les contrôles existants dans l’évaluation ?',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent réduire la probabilité ou l’impact', 'is_correct' => true],
                            ['choice_text' => 'Ils n’ont jamais d’effet', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent l’analyse', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment toutes les menaces', 'is_correct' => false],
                        ],
                        'explanation' => 'Les contrôles préventifs, détectifs ou correctifs modifient le niveau de risque résiduel.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque résiduel ?',
                        'choices' => [
                            ['choice_text' => Le risque qui subsiste après application des contrôles', 'is_correct' => true],
                            ['choice_text' => 'Le risque avant toute analyse', 'is_correct' => false],
                            ['choice_text' => 'Le risque supprimé', 'is_correct' => false],
                            ['choice_text' => 'Le risque qui appartient uniquement au fournisseur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le risque résiduel représente l’exposition restante après les mesures de traitement.',
                    ],
                ],
            ],

            [
                'title' => 'Sécurité des e-mails',
                'description' => 'Protéger la messagerie contre phishing, usurpation et pièces jointes malveillantes.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel mécanisme aide à vérifier l’autorisation d’un serveur à envoyer des e-mails pour un domaine ?',
                        'choices' => [
                            ['choice_text' => SPF', 'is_correct' => true],
                            ['choice_text' => 'FTP', 'is_correct' => false],
                            ['choice_text' => 'SSH', 'is_correct' => false],
                            ['choice_text' => 'NTP', 'is_correct' => false],
                        ],
                        'explanation' => 'SPF publie notamment les serveurs autorisés à envoyer des messages pour un domaine.',
                    ],
                    [
                        'question' => 'Quel mécanisme utilise une signature cryptographique pour authentifier certains e-mails ?',
                        'choices' => [
                            ['choice_text' => DKIM', 'is_correct' => true],
                            ['choice_text' => 'DHCP', 'is_correct' => false],
                            ['choice_text' => 'ARP', 'is_correct' => false],
                            ['choice_text' => 'FTP', 'is_correct' => false],
                        ],
                        'explanation' => 'DKIM signe certains éléments du message afin de permettre une vérification cryptographique.',
                    ],
                    [
                        'question' => 'Quel est l’objectif principal de DMARC ?',
                        'choices' => [
                            ['choice_text' => Définir une politique pour les messages qui échouent aux contrôles d’authentification', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer tous les fichiers', 'is_correct' => false],
                            ['choice_text' => 'Remplacer TLS', 'is_correct' => false],
                            ['choice_text' => 'Créer des comptes', 'is_correct' => false],
                        ],
                        'explanation' => 'DMARC permet notamment de définir des politiques et d’obtenir des rapports sur les résultats d’authentification.',
                    ],
                    [
                        'question' => 'Pourquoi scanner les pièces jointes ?',
                        'choices' => [
                            ['choice_text' => 'Pour détecter certains contenus malveillants', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer tous les e-mails', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver MFA', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les pièces jointes publiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les pièces jointes constituent un vecteur courant de malware.',
                    ],
                    [
                        'question' => 'Pourquoi bloquer certains types de pièces jointes exécutables ?',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent permettre l’exécution de code malveillant', 'is_correct' => true],
                            ['choice_text' => 'Elles sont toujours légitimes', 'is_correct' => false],
                            ['choice_text' => 'Elles chiffrent automatiquement les messages', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent SPF', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fichiers exécutables peuvent lancer du code sur le poste de la victime.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser un filtrage anti-phishing ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire le nombre de messages malveillants atteignant les utilisateurs', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toute authentification', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour partager les comptes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le filtrage constitue une couche de défense avant l’utilisateur.',
                    ],
                    [
                        'question' => 'Quel risque présente une usurpation de nom d’expéditeur ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut tromper l’utilisateur sur l’identité de l’expéditeur', 'is_correct' => true],
                            ['choice_text' => 'Elle chiffre le disque', 'is_correct' => false],
                            ['choice_text' => 'Elle bloque automatiquement les attaques', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace un certificat TLS', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nom affiché peut être manipulé pour créer une apparence de légitimité.',
                    ],
                    [
                        'question' => 'Pourquoi les utilisateurs doivent-ils signaler les messages suspects ?',
                        'choices' => [
                            ['choice_text' => 'Pour permettre une analyse et éventuellement protéger d’autres utilisateurs', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter le spam', 'is_correct' => false],
                            ['choice_text' => 'Pour désactiver le filtrage', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les journaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le signalement aide les équipes de sécurité à identifier et contenir les campagnes.',
                    ],
                    [
                        'question' => 'Pourquoi protéger les comptes de messagerie avec MFA ?',
                        'choices' => [
                            ['choice_text' => 'Pour ajouter une barrière en cas de vol du mot de passe', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les sessions', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le compte public', 'is_correct' => false],
                        ],
                        'explanation' => 'MFA réduit le risque qu’un mot de passe volé suffise à prendre le compte.',
                    ],
                    [
                        'question' => 'Que faire avant de répondre à une demande sensible reçue par e-mail ?',
                        'choices' => [
                            ['choice_text' => Vérifier la demande par un canal indépendant', 'is_correct' => true],
                            ['choice_text' => 'Répondre avec le mot de passe', 'is_correct' => false],
                            ['choice_text' => 'Transférer à tous les contacts', 'is_correct' => false],
                            ['choice_text' => 'Désactiver l’antivirus', 'is_correct' => false],
                        ],
                        'explanation' => 'La vérification indépendante réduit le risque d’être manipulé par un message frauduleux.',
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