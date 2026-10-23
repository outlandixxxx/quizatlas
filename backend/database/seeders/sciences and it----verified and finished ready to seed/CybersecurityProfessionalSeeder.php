<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class CybersecurityProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'cybersecurity')->firstOrFail();


        $quizzes = [
            [
                'title' => 'Architecture de défense et analyse des risques',
                'description' => 'Étude de cas et décisions de conception en cybersécurité professionnelle.',
                'difficulty' => 'Advanced',
                'duration' => 25,
                'passing_score' => 75,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Après trois intrusions parties d’un poste bureautique, le comité demande de réduire leur propagation vers la production. La décision d’architecture la plus utile consiste à :',
                        'explanation' => 'Des zones séparées par des règles explicites limitent les chemins disponibles et le rayon d’impact.',
                        'choices' => [
                            ['choice_text' => 'Segmenter les environnements et n’autoriser que les flux métier nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Doubler le débit des liens entre bureautique et production', 'is_correct' => false],
                            ['choice_text' => 'Conserver le réseau plat et renforcer uniquement les antivirus', 'is_correct' => false],
                            ['choice_text' => 'Masquer les noms DNS des serveurs de production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service critique dépend d’un seul fournisseur d’identité. La panne de ce service bloque aussi les comptes d’urgence. Le risque dominant est :',
                        'explanation' => 'Une dépendance commune peut rendre indisponibles à la fois l’accès normal et le mécanisme de secours.',
                        'choices' => [
                            ['choice_text' => 'La perte de confidentialité des journaux DNS', 'is_correct' => true],
                            ['choice_text' => 'La duplication des comptes utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'L’expiration des certificats des postes', 'is_correct' => false],
                            ['choice_text' => 'La surcharge du stockage des sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le modèle de menace d’une nouvelle plateforme montre qu’un compte de support peut modifier les règles de paiement sans double contrôle. Le correctif de conception à privilégier est :',
                        'explanation' => 'Une séparation des rôles et une validation indépendante limitent l’abus d’un compte unique.',
                        'choices' => [
                            ['choice_text' => 'Allonger la durée de session du support', 'is_correct' => true],
                            ['choice_text' => 'Masquer le bouton de paiement dans l’interface', 'is_correct' => false],
                            ['choice_text' => 'Désactiver la journalisation des modifications', 'is_correct' => false],
                            ['choice_text' => 'Augmenter le nombre de comptes de support', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe veut déployer un contrôle supplémentaire, mais le test révèle qu’il bloque aussi les flux de sauvegarde. La démarche la plus sûre est :',
                        'explanation' => 'Il faut cartographier les dépendances, ajuster les règles et tester le changement avant généralisation.',
                        'choices' => [
                            ['choice_text' => 'Déployer immédiatement sur tous les sites', 'is_correct' => true],
                            ['choice_text' => 'Désactiver les sauvegardes pendant la migration', 'is_correct' => false],
                            ['choice_text' => 'Autoriser tout le trafic interne sans échéance', 'is_correct' => false],
                            ['choice_text' => 'Ignorer le résultat, car le contrôle est plus strict', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un audit identifie trois failles dans un service public : une interface d’administration exposée, une bibliothèque vulnérable et des privilèges excessifs. La première mesure de réduction du risque est :',
                        'explanation' => 'La fermeture ou la restriction de l’interface exposée réduit immédiatement la surface d’attaque, pendant que les autres corrections sont planifiées.',
                        'choices' => [
                            ['choice_text' => 'Changer le logo du service', 'is_correct' => true],
                            ['choice_text' => 'Augmenter le nombre de journaux conservés', 'is_correct' => false],
                            ['choice_text' => 'Renommer la bibliothèque vulnérable', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les alertes de sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise place son système de sauvegarde dans le même domaine d’administration que ses serveurs. Après compromission d’un compte administrateur, les copies sont aussi chiffrées. Le défaut d’architecture est :',
                        'explanation' => 'Les sauvegardes doivent être isolées par des identités, des droits et, si possible, des mécanismes immuables distincts.',
                        'choices' => [
                            ['choice_text' => 'Les sauvegardes utilisent une compression trop élevée', 'is_correct' => true],
                            ['choice_text' => 'Les serveurs partagent le même fuseau horaire', 'is_correct' => false],
                            ['choice_text' => 'Le réseau de production possède plusieurs VLAN', 'is_correct' => false],
                            ['choice_text' => 'Les journaux sont conservés plus de trente jours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le comité hésite entre une architecture très centralisée et plusieurs domaines autonomes. Le service doit continuer à fonctionner pendant une panne régionale. Le critère de conception à faire primer est :',
                        'explanation' => 'La résilience exige d’évaluer les domaines de panne et les capacités de fonctionnement dégradé.',
                        'choices' => [
                            ['choice_text' => 'La simplicité du nommage des serveurs', 'is_correct' => true],
                            ['choice_text' => 'Le nombre d’écrans dans la console', 'is_correct' => false],
                            ['choice_text' => 'La couleur des tableaux de bord', 'is_correct' => false],
                            ['choice_text' => 'La réduction du nombre de tickets utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des développeurs ajoutent des exceptions permanentes aux règles réseau pour résoudre des incidents urgents. Après plusieurs mois, personne ne connaît leur propriétaire. Le contrôle de gouvernance manquant est :',
                        'explanation' => 'Toute exception doit être justifiée, attribuée à un responsable, limitée dans le temps et réexaminée.',
                        'choices' => [
                            ['choice_text' => 'Une rotation plus fréquente des noms de domaine', 'is_correct' => true],
                            ['choice_text' => 'Une politique interdisant les commentaires de configuration', 'is_correct' => false],
                            ['choice_text' => 'Un accès administrateur partagé entre équipes', 'is_correct' => false],
                            ['choice_text' => 'Une conservation plus courte des changements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un exercice montre que le plan de continuité dépend d’un coffre-fort numérique, lui-même accessible uniquement avec l’annuaire principal. L’amélioration prioritaire est :',
                        'explanation' => 'Les procédures et secrets de secours doivent rester accessibles par un chemin indépendant et testé.',
                        'choices' => [
                            ['choice_text' => 'Ajouter davantage de groupes dans l’annuaire principal', 'is_correct' => true],
                            ['choice_text' => 'Désactiver l’authentification multifacteur du personnel', 'is_correct' => false],
                            ['choice_text' => 'Copier les mêmes secrets dans les postes utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les tests de reprise par une documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une nouvelle API traite des données sensibles et sera exposée à des partenaires. Avant le choix des composants, l’équipe doit surtout documenter :',
                        'explanation' => 'Les actifs, les acteurs, les frontières de confiance, les scénarios d’abus et les mesures de réduction du risque.',
                        'choices' => [
                            ['choice_text' => 'Le nombre exact de lignes de code à écrire', 'is_correct' => true],
                            ['choice_text' => 'Le thème graphique du portail partenaire', 'is_correct' => false],
                            ['choice_text' => 'La fréquence des réunions de suivi', 'is_correct' => false],
                            ['choice_text' => 'Le modèle des ordinateurs des développeurs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Cryptographie appliquée et gestion des clés',
                'description' => 'Étude de cas et décisions de conception en cybersécurité professionnelle.',
                'difficulty' => 'Advanced',
                'duration' => 27,
                'passing_score' => 75,
                'total_marks' => 11,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Un service chiffre chaque sauvegarde avec une clé stockée dans le même compte cloud que les fichiers. Un attaquant qui obtient ce compte peut lire les deux. Le changement de contrôle à retenir est :',
                        'explanation' => 'Séparer l’administration des clés de celle des données et restreindre les opérations de déchiffrement.',
                        'choices' => [
                            ['choice_text' => 'Compresser les sauvegardes avant le chiffrement', 'is_correct' => true],
                            ['choice_text' => 'Renommer les fichiers après leur création', 'is_correct' => false],
                            ['choice_text' => 'Utiliser la même clé dans davantage de comptes', 'is_correct' => false],
                            ['choice_text' => 'Réduire la fréquence des sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux équipes découvrent qu’un même nonce a été réutilisé avec une clé de chiffrement par flux. Il faut d’abord :',
                        'explanation' => 'Traiter les données chiffrées concernées comme potentiellement exposées, remplacer les clés et corriger la génération des nonces.',
                        'choices' => [
                            ['choice_text' => 'Prolonger la durée de validité du certificat TLS', 'is_correct' => true],
                            ['choice_text' => 'Hacher les fichiers après leur téléchargement', 'is_correct' => false],
                            ['choice_text' => 'Changer seulement le nom de la clé', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les journaux de chiffrement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le certificat TLS d’un portail est valide, mais les utilisateurs sont redirigés vers un domaine ressemblant au domaine officiel. La vérification déterminante porte sur :',
                        'explanation' => 'Le nom d’hôte demandé doit correspondre au nom couvert par le certificat et l’utilisateur doit vérifier le domaine de destination.',
                        'choices' => [
                            ['choice_text' => 'La taille du logo affiché dans le navigateur', 'is_correct' => true],
                            ['choice_text' => 'La longueur du mot de passe de l’administrateur', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de certificats dans le magasin local', 'is_correct' => false],
                            ['choice_text' => 'La version du système d’exploitation du serveur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une base de données doit être chiffrée avec rotation régulière des clés, sans réécrire toute l’application à chaque rotation. Une approche adaptée est :',
                        'explanation' => 'Chiffrer les données avec des clés de données et protéger ces dernières au moyen d’une clé maîtresse gérée séparément.',
                        'choices' => [
                            ['choice_text' => 'Stocker une clé en clair dans chaque ligne', 'is_correct' => true],
                            ['choice_text' => 'Utiliser un mot de passe commun à tous les services', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le chiffrement par un encodage Base64', 'is_correct' => false],
                            ['choice_text' => 'Désactiver la rotation pour préserver la compatibilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’audit des secrets montre une clé privée présente dans l’historique Git, même si le fichier a depuis été supprimé. La réponse correcte est :',
                        'explanation' => 'Révoquer et remplacer la clé, puis rechercher son usage et retirer le secret de l’historique selon la procédure.',
                        'choices' => [
                            ['choice_text' => 'Supprimer uniquement la dernière version du fichier', 'is_correct' => true],
                            ['choice_text' => 'Rendre le dépôt privé et considérer l’incident clos', 'is_correct' => false],
                            ['choice_text' => 'Ajouter la clé à un fichier .gitignore', 'is_correct' => false],
                            ['choice_text' => 'Renommer la branche principale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application signe des jetons d’accès et plusieurs services doivent vérifier leur authenticité sans pouvoir en émettre. Le choix cryptographique cohérent est :',
                        'explanation' => 'Employer une signature asymétrique : la clé privée signe et les clés publiques vérifient.',
                        'choices' => [
                            ['choice_text' => 'Partager un secret de signature avec tous les services', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer le jeton avec la clé publique de chaque utilisateur', 'is_correct' => false],
                            ['choice_text' => 'Hacher le jeton sans mécanisme d’authentification', 'is_correct' => false],
                            ['choice_text' => 'Encoder le jeton en Base64', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après une rotation d’autorité de certification, certains appareils anciens échouent à établir TLS. Le déploiement doit intégrer :',
                        'explanation' => 'Une période de transition contrôlée, la distribution de la nouvelle chaîne de confiance et des tests sur les clients concernés.',
                        'choices' => [
                            ['choice_text' => 'La désactivation globale de la validation des certificats', 'is_correct' => true],
                            ['choice_text' => 'La réutilisation du certificat expiré sans limite', 'is_correct' => false],
                            ['choice_text' => 'L’ajout manuel du certificat privé sur chaque navigateur', 'is_correct' => false],
                            ['choice_text' => 'La suppression des contrôles de révocation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe veut conserver des mots de passe pour authentifier des utilisateurs. La base doit contenir :',
                        'explanation' => 'Un dérivé salé calculé avec une fonction dédiée au stockage des mots de passe, et non le mot de passe ni son hash rapide.',
                        'choices' => [
                            ['choice_text' => 'Les mots de passe chiffrés avec une clé commune dans le code', 'is_correct' => true],
                            ['choice_text' => 'Un hash rapide sans sel pour accélérer la connexion', 'is_correct' => false],
                            ['choice_text' => 'Une version Base64 des mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Une copie chiffrée dans les journaux applicatifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le responsable d’un protocole exige la confidentialité des anciennes sessions même si la clé privée du serveur est compromise plus tard. La propriété recherchée est :',
                        'explanation' => 'La confidentialité persistante, obtenue avec des échanges éphémères correctement configurés.',
                        'choices' => [
                            ['choice_text' => 'La compression sans perte', 'is_correct' => true],
                            ['choice_text' => 'La signature détachée des journaux', 'is_correct' => false],
                            ['choice_text' => 'La rotation des adresses IP', 'is_correct' => false],
                            ['choice_text' => 'La validation DNSSEC du domaine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un système ancien utilise un algorithme désormais déconseillé, mais aucune migration immédiate n’est possible. La stratégie la plus défendable est :',
                        'explanation' => 'Établir un plan de migration daté, limiter l’exposition, inventorier les usages et surveiller les exceptions.',
                        'choices' => [
                            ['choice_text' => 'Désactiver toute journalisation pour éviter les alertes', 'is_correct' => true],
                            ['choice_text' => 'Augmenter la taille des certificats sans autre analyse', 'is_correct' => false],
                            ['choice_text' => 'Copier la clé sur plusieurs serveurs', 'is_correct' => false],
                            ['choice_text' => 'Déclarer le système conforme sans échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un HSM est utilisé pour signer des transactions à forte valeur. La politique d’exploitation doit notamment prévoir :',
                        'explanation' => 'La séparation des rôles, la protection des opérations d’administration, la sauvegarde contrôlée et des essais de récupération.',
                        'choices' => [
                            ['choice_text' => 'L’export permanent des clés privées vers les postes clients', 'is_correct' => true],
                            ['choice_text' => 'Un compte administrateur partagé par toute l’équipe', 'is_correct' => false],
                            ['choice_text' => 'La désactivation des journaux pour protéger les secrets', 'is_correct' => false],
                            ['choice_text' => 'La conservation d’une seule copie de configuration non testée', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Sécurité des identités, du cloud et des API',
                'description' => 'Étude de cas et décisions de conception en cybersécurité professionnelle.',
                'difficulty' => 'Advanced',
                'duration' => 30,
                'passing_score' => 75,
                'total_marks' => 12,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Un prestataire n’intervient que deux jours par mois, mais son compte conserve des privilèges permanents d’administration. La mesure la mieux proportionnée est :',
                        'explanation' => 'Accorder l’accès juste à temps, limité à la tâche et approuvé, puis le retirer automatiquement.',
                        'choices' => [
                            ['choice_text' => 'Créer un compte partagé avec l’équipe interne', 'is_correct' => true],
                            ['choice_text' => 'Conserver les privilèges et changer le mot de passe chaque année', 'is_correct' => false],
                            ['choice_text' => 'Autoriser l’accès depuis n’importe quel appareil', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les journaux de connexion du prestataire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une charge de travail cloud utilise une clé d’accès longue durée copiée dans une image de conteneur. La correction à privilégier est :',
                        'explanation' => 'Remplacer le secret par une identité de charge de travail à durée limitée et faire tourner la clé exposée.',
                        'choices' => [
                            ['choice_text' => 'Masquer la valeur dans le tableau de bord', 'is_correct' => true],
                            ['choice_text' => 'Compresser l’image avant son déploiement', 'is_correct' => false],
                            ['choice_text' => 'Partager cette clé avec les conteneurs du même projet', 'is_correct' => false],
                            ['choice_text' => 'Stocker une deuxième copie dans le dépôt source', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une règle de stockage autorise la lecture publique; aucun fichier n’a encore été téléchargé selon les journaux. La réaction défendable consiste à :',
                        'explanation' => 'Fermer l’accès public, vérifier les journaux et l’historique, puis identifier les données qui ont pu être exposées.',
                        'choices' => [
                            ['choice_text' => 'Supprimer les journaux pour éviter une fausse alerte', 'is_correct' => true],
                            ['choice_text' => 'Renommer le conteneur sans modifier la règle', 'is_correct' => false],
                            ['choice_text' => 'Ajouter un avertissement sur la page d’accueil', 'is_correct' => false],
                            ['choice_text' => 'Attendre une preuve de téléchargement avant toute action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une API interne reçoit des jetons valides, mais un utilisateur peut remplacer l’identifiant d’un dossier et lire celui d’un autre client. Le contrôle absent est :',
                        'explanation' => 'Une vérification d’autorisation sur chaque objet demandé, fondée sur l’identité et le contexte métier.',
                        'choices' => [
                            ['choice_text' => 'Un certificat TLS plus long', 'is_correct' => true],
                            ['choice_text' => 'Une limitation du nombre de requêtes par seconde uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un encodage différent des identifiants', 'is_correct' => false],
                            ['choice_text' => 'Une règle CORS plus permissive', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fédération d’identités donne aux applications cloud les mêmes privilèges qu’aux administrateurs humains. Le modèle doit être ajusté afin de :',
                        'explanation' => 'Distinguer les identités humaines et les identités de service, avec des rôles minimaux et des durées de session adaptées.',
                        'choices' => [
                            ['choice_text' => 'Réutiliser les comptes personnels des développeurs', 'is_correct' => true],
                            ['choice_text' => 'Désactiver l’authentification multifacteur pour les applications', 'is_correct' => false],
                            ['choice_text' => 'Accorder le rôle global à toutes les applications', 'is_correct' => false],
                            ['choice_text' => 'Inscrire les secrets de fédération dans les fichiers de configuration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un compte d’urgence est utilisé pendant une panne de l’annuaire. L’équipe ne peut pas expliquer qui l’a ouvert ni quelles actions ont suivi. Le dispositif de secours doit ajouter :',
                        'explanation' => 'Une procédure de double contrôle, une alerte immédiate et une revue après usage avec identité nominative.',
                        'choices' => [
                            ['choice_text' => 'La suppression du compte après chaque connexion', 'is_correct' => true],
                            ['choice_text' => 'Une utilisation quotidienne pour vérifier qu’il fonctionne', 'is_correct' => false],
                            ['choice_text' => 'Un mot de passe connu de tous les administrateurs', 'is_correct' => false],
                            ['choice_text' => 'La désactivation de toute trace pendant la panne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fournisseur SaaS conserve les données après la fin du contrat, sans preuve de suppression. L’évaluation fournisseur doit exiger :',
                        'explanation' => 'Des engagements de restitution et d’effacement vérifiables, avec délais, périmètre et éléments de preuve.',
                        'choices' => [
                            ['choice_text' => 'Une remise sur le prochain abonnement', 'is_correct' => true],
                            ['choice_text' => 'Le changement de couleur du tableau de bord', 'is_correct' => false],
                            ['choice_text' => 'L’accès du fournisseur à tous les comptes internes', 'is_correct' => false],
                            ['choice_text' => 'La suppression des exigences contractuelles de sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des alertes montrent des connexions administratives depuis un pays inhabituel, mais le compte utilise une authentification multifacteur. La prochaine étape raisonnable est :',
                        'explanation' => 'Vérifier la légitimité et le contexte, révoquer les sessions suspectes si nécessaire et examiner les actions du compte.',
                        'choices' => [
                            ['choice_text' => 'Considérer le compte sûr grâce au second facteur', 'is_correct' => true],
                            ['choice_text' => 'Supprimer immédiatement toutes les données du compte', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les alertes géographiques', 'is_correct' => false],
                            ['choice_text' => 'Réinitialiser les mots de passe de tous les clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un endpoint d’API est saturé par des requêtes coûteuses issues de plusieurs jetons valides. La défense doit combiner :',
                        'explanation' => 'Des quotas par identité et opération, des limites de coût, une détection d’abus et une capacité de dégradation contrôlée.',
                        'choices' => [
                            ['choice_text' => 'Une règle CORS autorisant tous les domaines', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation permanente des privilèges API', 'is_correct' => false],
                            ['choice_text' => 'Le retrait des journaux de requêtes', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation des délais d’expiration sans limite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe constate qu’un ancien employé conserve encore un jeton d’accès valide après son départ. Le contrôle de cycle de vie manquant est :',
                        'explanation' => 'La révocation centralisée des sessions et jetons lors du départ, accompagnée d’une vérification des comptes associés.',
                        'choices' => [
                            ['choice_text' => 'Une rotation annuelle des certificats publics', 'is_correct' => true],
                            ['choice_text' => 'La suppression des journaux de l’ancien employé', 'is_correct' => false],
                            ['choice_text' => 'L’ajout d’un second compte au même nom', 'is_correct' => false],
                            ['choice_text' => 'L’allongement de la durée des jetons', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service cloud chiffre ses données au repos, mais tous les administrateurs peuvent modifier les règles d’accès et désactiver les journaux. Le risque restant se réduit en :',
                        'explanation' => 'Séparant les rôles de gestion des données, des clés et de la journalisation, puis en protégeant les journaux contre l’altération.',
                        'choices' => [
                            ['choice_text' => 'Augmentant uniquement le nombre de copies chiffrées', 'is_correct' => true],
                            ['choice_text' => 'Rendant les règles d’accès modifiables par les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Désactivant les alertes d’administration', 'is_correct' => false],
                            ['choice_text' => 'Réutilisant la même identité pour les applications', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise impose l’accès conditionnel, mais les comptes de service sont exclus de la revue des privilèges. La mesure de gouvernance à ajouter est :',
                        'explanation' => 'Inventorier chaque identité non humaine, désigner un propriétaire et réexaminer périodiquement ses permissions et son activité.',
                        'choices' => [
                            ['choice_text' => 'Exclure aussi les comptes d’urgence', 'is_correct' => true],
                            ['choice_text' => 'Changer le nom des comptes de service chaque mois', 'is_correct' => false],
                            ['choice_text' => 'Accorder le rôle de lecteur global par défaut', 'is_correct' => false],
                            ['choice_text' => 'Interdire la collecte de leur activité', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Réponse aux incidents et investigation',
                'description' => 'Étude de cas et décisions de conception en cybersécurité professionnelle.',
                'difficulty' => 'Advanced',
                'duration' => 32,
                'passing_score' => 75,
                'total_marks' => 13,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Le SOC observe l’exfiltration probable de données depuis un serveur encore actif. L’équipe doit préserver les preuves tout en limitant le dommage. La première conduite est :',
                        'explanation' => 'Isoler le serveur selon le plan d’intervention, préserver les traces volatiles utiles et documenter chaque action.',
                        'choices' => [
                            ['choice_text' => 'Éteindre immédiatement tous les serveurs du site', 'is_correct' => true],
                            ['choice_text' => 'Réinstaller le système avant de collecter les journaux', 'is_correct' => false],
                            ['choice_text' => 'Effacer les comptes impliqués sans capturer leur activité', 'is_correct' => false],
                            ['choice_text' => 'Publier les détails de l’incident sur les réseaux sociaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une alerte signale qu’un jeton privilégié est utilisé depuis deux régions à quelques minutes d’intervalle. Le confinement initial doit viser :',
                        'explanation' => 'La révocation du jeton et des sessions associées, puis la vérification des opérations exécutées avec cette identité.',
                        'choices' => [
                            ['choice_text' => 'La rotation des mots de passe de tous les clients', 'is_correct' => true],
                            ['choice_text' => 'La fermeture du centre de données principal', 'is_correct' => false],
                            ['choice_text' => 'La suppression de l’application qui a émis le jeton', 'is_correct' => false],
                            ['choice_text' => 'La suspension des sauvegardes hors ligne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une machine est soupçonnée d’héberger un rançongiciel, mais elle reste connectée au réseau. Le plan local prévoit un isolement réseau contrôlé. L’action à exécuter est :',
                        'explanation' => 'Appliquer l’isolement prévu, conserver les éléments de preuve nécessaires et confirmer l’étendue depuis les systèmes de supervision.',
                        'choices' => [
                            ['choice_text' => 'Payer la rançon avant d’évaluer les sauvegardes', 'is_correct' => true],
                            ['choice_text' => 'Redémarrer la machine plusieurs fois', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les contrôles de sécurité sur le réseau', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes afin d’éviter une réinfection', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un analyste copie des fichiers de preuve sur une clé personnelle sans noter l’heure ni l’origine. La faiblesse introduite concerne :',
                        'explanation' => 'La chaîne de conservation, qui doit documenter collecte, transfert, accès et intégrité des éléments.',
                        'choices' => [
                            ['choice_text' => 'La disponibilité du site Web public', 'is_correct' => true],
                            ['choice_text' => 'La rotation des certificats TLS', 'is_correct' => false],
                            ['choice_text' => 'La qualité de la compression réseau', 'is_correct' => false],
                            ['choice_text' => 'La politique de nommage des postes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des journaux montrent une intrusion dans un serveur, mais l’équipe ignore si d’autres systèmes sont touchés. La prochaine phase d’analyse doit :',
                        'explanation' => 'Délimiter le périmètre à partir des identifiants, connexions, indicateurs et dépendances observés.',
                        'choices' => [
                            ['choice_text' => 'Supprimer immédiatement tous les comptes de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Déclarer l’incident clos après la première alerte', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les routeurs sans collecte complémentaire', 'is_correct' => false],
                            ['choice_text' => 'Interrompre toute communication interne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une sauvegarde restaurée réintroduit le même compte compromis et la même tâche planifiée malveillante. Avant la remise en service, il faut :',
                        'explanation' => 'Éliminer la persistance, renouveler les secrets compromis, valider les sauvegardes et surveiller étroitement la reprise.',
                        'choices' => [
                            ['choice_text' => 'Rendre le serveur accessible avant la fin des contrôles', 'is_correct' => true],
                            ['choice_text' => 'Désactiver la journalisation pour réduire la charge', 'is_correct' => false],
                            ['choice_text' => 'Conserver les identifiants compromis pour comparer', 'is_correct' => false],
                            ['choice_text' => 'Effacer les alertes générées pendant la restauration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une attaque touche un prestataire qui traite des données personnelles pour plusieurs clients. La coordination doit commencer par :',
                        'explanation' => 'Activer les voies de notification prévues, préserver les faits établis et coordonner les actions avec les responsables concernés.',
                        'choices' => [
                            ['choice_text' => 'Demander au prestataire de supprimer tous les systèmes', 'is_correct' => true],
                            ['choice_text' => 'Confirmer publiquement une fuite avant vérification', 'is_correct' => false],
                            ['choice_text' => 'Ignorer le contrat jusqu’à la fin de l’enquête technique', 'is_correct' => false],
                            ['choice_text' => 'Envoyer les données touchées à tous les employés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’équipe hésite entre supprimer un poste compromis et en capturer la mémoire. Le poste contient probablement un processus furtif encore actif. Le choix de preuve à privilégier est :',
                        'explanation' => 'Capturer la mémoire vive selon la procédure, car elle peut contenir des éléments volatils absents du disque.',
                        'choices' => [
                            ['choice_text' => 'Effacer le disque immédiatement', 'is_correct' => true],
                            ['choice_text' => 'Attendre l’arrêt automatique du poste', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le poste sans conserver de trace', 'is_correct' => false],
                            ['choice_text' => 'Copier uniquement les icônes du bureau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des alertes révèlent que plusieurs comptes de service ont été utilisés après le vol d’un secret. Le traitement doit couvrir :',
                        'explanation' => 'La révocation et la rotation de chaque secret concerné, l’identification des systèmes dépendants et la recherche d’actions effectuées.',
                        'choices' => [
                            ['choice_text' => 'Le changement du mot de passe Wi-Fi des visiteurs uniquement', 'is_correct' => true],
                            ['choice_text' => 'La fermeture du système de tickets', 'is_correct' => false],
                            ['choice_text' => 'La suppression des comptes sans vérifier leurs dépendances', 'is_correct' => false],
                            ['choice_text' => 'La désactivation de l’authentification multifacteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pendant la reprise après incident, les responsables veulent rouvrir le service dès que la page d’accueil répond. Le critère de remise en service doit inclure :',
                        'explanation' => 'La validation des contrôles, l’intégrité des données, la surveillance renforcée et l’accord du responsable métier.',
                        'choices' => [
                            ['choice_text' => 'La seule disponibilité de la page d’accueil', 'is_correct' => true],
                            ['choice_text' => 'La confirmation orale d’un seul administrateur', 'is_correct' => false],
                            ['choice_text' => 'La suppression des alertes en attente', 'is_correct' => false],
                            ['choice_text' => 'La désactivation temporaire des restrictions d’accès', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un exercice révèle qu’aucune personne n’est chargée de tenir la chronologie de l’incident. La correction opérationnelle consiste à :',
                        'explanation' => 'Attribuer explicitement les rôles de commandement, d’analyse, de communication et de journalisation dans le plan.',
                        'choices' => [
                            ['choice_text' => 'Laisser chaque analyste tenir une chronologie séparée non partagée', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les exercices par une lecture du plan', 'is_correct' => false],
                            ['choice_text' => 'Confier toutes les décisions à l’équipe de communication', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les horaires des comptes rendus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les analyses techniques sont terminées, mais la même faiblesse de configuration existe sur vingt serveurs. Le suivi après incident doit produire :',
                        'explanation' => 'Des actions correctives attribuées, des échéances, des vérifications de déploiement et une mise à jour des scénarios de détection.',
                        'choices' => [
                            ['choice_text' => 'Un rapport sans responsable ni date de suivi', 'is_correct' => true],
                            ['choice_text' => 'Une interdiction générale de modifier les serveurs', 'is_correct' => false],
                            ['choice_text' => 'La suppression des indicateurs de compromission', 'is_correct' => false],
                            ['choice_text' => 'Un classement de l’incident sans mesure préventive', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe doit partager un indicateur de compromission avec un partenaire. Avant l’envoi, elle doit :',
                        'explanation' => 'Vérifier la fiabilité, retirer les données sensibles inutiles et convenir du contexte et des restrictions de diffusion.',
                        'choices' => [
                            ['choice_text' => 'Transmettre l’image disque complète sans autorisation', 'is_correct' => true],
                            ['choice_text' => 'Publier l’indicateur avec les noms des utilisateurs touchés', 'is_correct' => false],
                            ['choice_text' => 'Modifier l’indicateur pour éviter qu’il soit détecté', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute information sur la date de collecte', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Ingénierie sécurisée et assurance applicative',
                'description' => 'Étude de cas et décisions de conception en cybersécurité professionnelle.',
                'difficulty' => 'Advanced',
                'duration' => 35,
                'passing_score' => 75,
                'total_marks' => 14,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Un test d’intrusion montre qu’un client peut modifier l’identifiant d’une facture dans l’URL et consulter celle d’un autre client. La correction côté serveur doit :',
                        'explanation' => 'Vérifier l’autorisation sur la facture demandée pour chaque requête, sans se fier à l’identifiant fourni par le navigateur.',
                        'choices' => [
                            ['choice_text' => 'Rendre les identifiants plus longs sans contrôle d’accès', 'is_correct' => true],
                            ['choice_text' => 'Masquer l’URL dans l’interface', 'is_correct' => false],
                            ['choice_text' => 'Ajouter une règle CORS permissive', 'is_correct' => false],
                            ['choice_text' => 'Chiffrer uniquement les factures dans le navigateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fonctionnalité importe une URL fournie par l’utilisateur. Un test permet d’atteindre le service de métadonnées de l’infrastructure cloud. La faiblesse correspond à :',
                        'explanation' => 'Une SSRF; il faut restreindre les destinations, contrôler les résolutions et bloquer les plages internes non nécessaires.',
                        'choices' => [
                            ['choice_text' => 'Une injection SQL corrigée par le changement du mot de passe', 'is_correct' => true],
                            ['choice_text' => 'Un défaut de compression d’image', 'is_correct' => false],
                            ['choice_text' => 'Une fuite DNS sans accès serveur', 'is_correct' => false],
                            ['choice_text' => 'Une erreur de validation du certificat client uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une bibliothèque critique est compromise dans la chaîne de livraison. Les développeurs ne savent pas quelles versions sont présentes en production. Le contrôle de base à mettre en place est :',
                        'explanation' => 'Un inventaire des composants et versions, relié aux artefacts construits et aux déploiements.',
                        'choices' => [
                            ['choice_text' => 'Une suppression des tests unitaires', 'is_correct' => true],
                            ['choice_text' => 'Une hausse du nombre de branches Git', 'is_correct' => false],
                            ['choice_text' => 'Une copie manuelle des bibliothèques sur les postes', 'is_correct' => false],
                            ['choice_text' => 'Une désactivation des mises à jour automatiques sans inventaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un secret de production apparaît dans les journaux d’un pipeline CI/CD. Le traitement immédiat comprend :',
                        'explanation' => 'Révoquer le secret, rechercher son utilisation et corriger le pipeline pour éviter toute nouvelle exposition.',
                        'choices' => [
                            ['choice_text' => 'Effacer uniquement la ligne visible dans la console', 'is_correct' => true],
                            ['choice_text' => 'Masquer les journaux sans révoquer le secret', 'is_correct' => false],
                            ['choice_text' => 'Réutiliser le secret avec un autre nom', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les tests de déploiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe veut détecter les erreurs de contrôle d’accès avant la mise en production. Le plan de validation le plus solide combine :',
                        'explanation' => 'Des tests unitaires et d’intégration sur les permissions, des tests négatifs et une vérification en environnement représentatif.',
                        'choices' => [
                            ['choice_text' => 'Un test visuel de la page d’accueil', 'is_correct' => true],
                            ['choice_text' => 'Une vérification de la seule disponibilité HTTP', 'is_correct' => false],
                            ['choice_text' => 'Une revue des traductions de l’interface', 'is_correct' => false],
                            ['choice_text' => 'La suppression temporaire des comptes de test', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une API accepte des paramètres inattendus et exécute une requête SQL construite par concaténation. Le correctif doit prioritairement utiliser :',
                        'explanation' => 'Des requêtes paramétrées, une validation métier côté serveur et des privilèges de base de données limités.',
                        'choices' => [
                            ['choice_text' => 'Un filtrage basé uniquement sur les caractères visibles', 'is_correct' => true],
                            ['choice_text' => 'Un changement de port de la base de données', 'is_correct' => false],
                            ['choice_text' => 'Un encodage Base64 des paramètres', 'is_correct' => false],
                            ['choice_text' => 'Un compte de base de données administrateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service de téléversement stocke les fichiers sous le domaine principal et les sert avec les mêmes privilèges que l’application. Le risque se réduit en :',
                        'explanation' => 'Isolant le contenu téléversé, contrôlant son type et son nom côté serveur, et empêchant son exécution comme code actif.',
                        'choices' => [
                            ['choice_text' => 'Autorisant toutes les extensions de fichier', 'is_correct' => true],
                            ['choice_text' => 'Désactivant la journalisation des téléchargements', 'is_correct' => false],
                            ['choice_text' => 'Stockant les fichiers dans le répertoire des scripts exécutables', 'is_correct' => false],
                            ['choice_text' => 'Faisant confiance au type MIME envoyé par le client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe déploie une version majeure d’un service sans possibilité de retour arrière. Une stratégie de livraison plus sûre est :',
                        'explanation' => 'Déployer progressivement, surveiller des indicateurs définis et conserver un mécanisme de retour à une version saine.',
                        'choices' => [
                            ['choice_text' => 'Déployer partout en même temps pour raccourcir l’intervention', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les sauvegardes après la compilation', 'is_correct' => false],
                            ['choice_text' => 'Masquer les erreurs aux utilisateurs sans alerte interne', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les contrôles de santé pendant le déploiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une politique CSP autorise les scripts depuis toutes les origines. La correction doit réduire les sources permises et :',
                        'explanation' => 'Éviter les scripts en ligne non maîtrisés, employer des nonces ou empreintes appropriés et tester les dépendances réelles.',
                        'choices' => [
                            ['choice_text' => 'Autoriser toutes les directives avec un caractère générique', 'is_correct' => true],
                            ['choice_text' => 'Désactiver TLS pour simplifier les tests', 'is_correct' => false],
                            ['choice_text' => 'Remplacer CSP par une bannière de consentement', 'is_correct' => false],
                            ['choice_text' => 'Déplacer les scripts dans des fichiers portant une autre extension', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une revue de code se concentre sur le style, tandis que les changements d’authentification ne sont jamais discutés. La pratique à ajouter est :',
                        'explanation' => 'Une revue guidée par le risque, avec des critères de sécurité et des tests pour les changements sensibles.',
                        'choices' => [
                            ['choice_text' => 'Une approbation automatique de chaque fusion', 'is_correct' => true],
                            ['choice_text' => 'Une interdiction de commenter les changements', 'is_correct' => false],
                            ['choice_text' => 'Un contrôle de longueur des noms de variables uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une revue menée après la mise en production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un scanner SAST signale un flux de données suspect, mais l’équipe ne sait pas s’il est exploitable en production. La bonne suite est :',
                        'explanation' => 'Tracer la source et la destination, vérifier les contrôles effectifs et confirmer le scénario dans un environnement sûr.',
                        'choices' => [
                            ['choice_text' => 'Fermer le signalement sans examen', 'is_correct' => true],
                            ['choice_text' => 'Déployer un correctif qui supprime toute journalisation', 'is_correct' => false],
                            ['choice_text' => 'Désactiver le scanner pour ce dépôt', 'is_correct' => false],
                            ['choice_text' => 'Publier immédiatement le code concerné', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fournisseur demande un délai pour corriger une faille exploitable. Le produit reste exposé à Internet. La décision de risque doit documenter :',
                        'explanation' => 'L’exposition, l’impact, les mesures compensatoires, le responsable de l’acceptation et une échéance de correction.',
                        'choices' => [
                            ['choice_text' => 'La seule date de publication de la faille', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de développeurs du fournisseur', 'is_correct' => false],
                            ['choice_text' => 'La couleur de sévérité choisie par le tableau de bord', 'is_correct' => false],
                            ['choice_text' => 'Une acceptation permanente sans propriétaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un chercheur signale une vulnérabilité sans canal de divulgation défini. L’organisation devrait répondre en :',
                        'explanation' => 'Accusant réception, ouvrant un suivi sécurisé, évaluant le risque et convenant d’un calendrier de divulgation responsable.',
                        'choices' => [
                            ['choice_text' => 'Demandant au chercheur de publier immédiatement les détails', 'is_correct' => true],
                            ['choice_text' => 'Ignorant le signalement tant qu’aucune preuve publique n’existe', 'is_correct' => false],
                            ['choice_text' => 'Exigeant l’envoi de données réelles de clients', 'is_correct' => false],
                            ['choice_text' => 'Ferment le canal de contact', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un audit indépendant confirme qu’une correction empêche l’exploitation sur un service, mais plusieurs versions restent déployées. La clôture doit attendre :',
                        'explanation' => 'La vérification de toutes les versions exposées et la confirmation de leur mise à jour ou de leur retrait.',
                        'choices' => [
                            ['choice_text' => 'La seule fermeture du ticket de développement', 'is_correct' => true],
                            ['choice_text' => 'La suppression des tests de régression', 'is_correct' => false],
                            ['choice_text' => 'La confirmation que le correctif compile sur un poste', 'is_correct' => false],
                            ['choice_text' => 'Le changement du nom de la vulnérabilité', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                ['subject_id' => $subject->id, 'title' => $quizData['title']],
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
                    ['quiz_id' => $quiz->id, 'order' => $index + 1],
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
