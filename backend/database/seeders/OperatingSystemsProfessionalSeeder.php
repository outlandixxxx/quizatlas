<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class OperatingSystemsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'operating-systems')->firstOrFail();

        $quizzes = [
        [
            'title' => 'Stratégie de plateforme',
            'description' => 'Gouvernance, standardisation, TCO, support et gestion des exceptions.',
            'difficulty' => 'Professional',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Quel critère doit primer pour choisir un OS standard sur des milliers de serveurs ?',
                    'choices' => [
                        ['choice_text' => 'Le compromis entre support sécurité automatisation compétences et coût total', 'is_correct' => true],
                        ['choice_text' => 'La couleur du logo', 'is_correct' => false],
                        ['choice_text' => 'Le nombre de fichiers par défaut', 'is_correct' => false],
                        ['choice_text' => 'La vitesse d\'un seul poste', 'is_correct' => false]
                    ],
                    'explanation' => 'À grande échelle, le choix doit intégrer cycle de support, sécurité, automatisation, compétences et coûts sur le cycle de vie.',
                ],
                [
                    'question' => 'Pourquoi utiliser une golden image versionnée ?',
                    'choices' => [
                        ['choice_text' => 'Fournir une base reproductible et auditée', 'is_correct' => true],
                        ['choice_text' => 'Empêcher toute mise à jour', 'is_correct' => false],
                        ['choice_text' => 'Remplacer la supervision', 'is_correct' => false],
                        ['choice_text' => 'Rendre tous les matériels identiques', 'is_correct' => false]
                    ],
                    'explanation' => 'Une image versionnée réduit la dérive et donne un artefact traçable pour les déploiements et les retours arrière.',
                ],
                [
                    'question' => 'Quel risque crée une forte dérive de configuration entre serveurs équivalents ?',
                    'choices' => [
                        ['choice_text' => 'Les incidents deviennent difficiles à reproduire et les changements à gouverner', 'is_correct' => true],
                        ['choice_text' => 'La résilience augmente', 'is_correct' => false],
                        ['choice_text' => 'L\'automatisation devient inutile', 'is_correct' => false],
                        ['choice_text' => 'Les performances deviennent identiques', 'is_correct' => false]
                    ],
                    'explanation' => 'La dérive crée des différences cachées et augmente la complexité opérationnelle et le risque de panne.',
                ],
                [
                    'question' => 'Pourquoi distinguer les changements de sécurité urgents des évolutions fonctionnelles ?',
                    'choices' => [
                        ['choice_text' => 'Adapter le processus de risque à la nature du changement', 'is_correct' => true],
                        ['choice_text' => 'Tous les changements ont le même risque', 'is_correct' => false],
                        ['choice_text' => 'Les patches de sécurité ne doivent jamais être rapides', 'is_correct' => false],
                        ['choice_text' => 'Cela supprime les tests', 'is_correct' => false]
                    ],
                    'explanation' => 'Une vulnérabilité critique peut nécessiter une voie accélérée tout en conservant validation, traçabilité et contrôle du risque.',
                ],
                [
                    'question' => 'Quelle mesure évalue le mieux le coût d\'une flotte OS ?',
                    'choices' => [
                        ['choice_text' => 'Le TCO incluant infrastructure opérations support incidents et migrations', 'is_correct' => true],
                        ['choice_text' => 'Le prix du premier serveur', 'is_correct' => false],
                        ['choice_text' => 'Le nombre de paquets', 'is_correct' => false],
                        ['choice_text' => 'La taille du kernel', 'is_correct' => false]
                    ],
                    'explanation' => 'Le coût total de possession couvre les dépenses et impacts opérationnels sur toute la durée de vie.',
                ],
                [
                    'question' => 'Pourquoi suivre la fin de support d\'un OS ?',
                    'choices' => [
                        ['choice_text' => 'Un OS hors support augmente le risque et réduit l\'accès aux correctifs', 'is_correct' => true],
                        ['choice_text' => 'Le matériel tombe toujours en panne', 'is_correct' => false],
                        ['choice_text' => 'Toutes les applications cessent le même jour', 'is_correct' => false],
                        ['choice_text' => 'Les backups sont supprimés', 'is_correct' => false]
                    ],
                    'explanation' => 'La fin de support réduit les options de correction et d\'assistance, ce qui crée une dette opérationnelle et de sécurité.',
                ],
                [
                    'question' => 'Quel mécanisme rend une modification serveur critique traçable ?',
                    'choices' => [
                        ['choice_text' => 'Gestion des changements avec approbation et audit', 'is_correct' => true],
                        ['choice_text' => 'Root partagé', 'is_correct' => false],
                        ['choice_text' => 'Logs désactivés', 'is_correct' => false],
                        ['choice_text' => 'Console sans MFA', 'is_correct' => false]
                    ],
                    'explanation' => 'Une gouvernance des changements établit qui a changé quoi, pourquoi et avec quelle validation.',
                ],
                [
                    'question' => 'Pourquoi donner une date d\'expiration aux exceptions de conformité ?',
                    'choices' => [
                        ['choice_text' => 'Pour empêcher une dérogation temporaire de devenir permanente', 'is_correct' => true],
                        ['choice_text' => 'Pour accélérer tous les audits', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer les contrôles', 'is_correct' => false],
                        ['choice_text' => 'Pour rendre le système immutable', 'is_correct' => false]
                    ],
                    'explanation' => 'Une échéance force la revue et la remédiation au lieu de laisser une exception devenir une configuration permanente.',
                ],
                [
                    'question' => 'Quel avantage apporte un catalogue de services OS standardisés ?',
                    'choices' => [
                        ['choice_text' => 'Réduire les variantes et clarifier support et responsabilités', 'is_correct' => true],
                        ['choice_text' => 'Interdire toute documentation', 'is_correct' => false],
                        ['choice_text' => 'Supprimer tous les incidents', 'is_correct' => false],
                        ['choice_text' => 'Rendre les workloads identiques', 'is_correct' => false]
                    ],
                    'explanation' => 'Un catalogue explicite les offres supportées et réduit la variété inutile dans la flotte.',
                ],
                [
                    'question' => 'Pourquoi documenter aussi les non-objectifs d\'une plateforme ?',
                    'choices' => [
                        ['choice_text' => 'Définir les cas que l\'architecture ne cherche pas à supporter', 'is_correct' => true],
                        ['choice_text' => 'Rendre le document plus long', 'is_correct' => false],
                        ['choice_text' => 'Empêcher tout changement', 'is_correct' => false],
                        ['choice_text' => 'Cacher les risques', 'is_correct' => false]
                    ],
                    'explanation' => 'Les non-objectifs évitent que la plateforme soit détournée vers des usages qui violent ses hypothèses de conception.',
                ]
            ],
        ],
        [
            'title' => 'Fiabilité et capacity planning',
            'description' => 'Marge de capacité, N+1, domaines de panne et tests de saturation.',
            'difficulty' => 'Professional',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Pourquoi une utilisation moyenne à 60 % ne garantit-elle pas la disponibilité sous incident ?',
                    'choices' => [
                        ['choice_text' => 'Les pics et pertes de capacité peuvent consommer rapidement la marge', 'is_correct' => true],
                        ['choice_text' => 'Une moyenne couvre toujours les pics', 'is_correct' => false],
                        ['choice_text' => 'La capacité n\'influence pas la latence', 'is_correct' => false],
                        ['choice_text' => 'Le cluster élimine toutes les pannes', 'is_correct' => false]
                    ],
                    'explanation' => 'La capacité doit être évaluée sur les pointes et les scénarios de panne, pas seulement sur une moyenne.',
                ],
                [
                    'question' => 'Quel est l\'objectif d\'un capacity model ?',
                    'choices' => [
                        ['choice_text' => 'Relier croissance de charge ressources et seuils aux décisions d\'investissement', 'is_correct' => true],
                        ['choice_text' => 'Prévoir la météo', 'is_correct' => false],
                        ['choice_text' => 'Remplacer la supervision', 'is_correct' => false],
                        ['choice_text' => 'Compresser les métriques', 'is_correct' => false]
                    ],
                    'explanation' => 'Un modèle transforme les tendances et hypothèses de charge en décisions de capacité et de calendrier.',
                ],
                [
                    'question' => 'Pourquoi tester la perte d\'un nœud dans un cluster N+1 ?',
                    'choices' => [
                        ['choice_text' => 'Vérifier que la capacité restante respecte encore les SLO', 'is_correct' => true],
                        ['choice_text' => 'Supprimer la redondance', 'is_correct' => false],
                        ['choice_text' => 'Ajouter automatiquement des nœuds', 'is_correct' => false],
                        ['choice_text' => 'Rendre le réseau inutile', 'is_correct' => false]
                    ],
                    'explanation' => 'N+1 n\'est utile que si le service conserve assez de capacité après une panne conforme au modèle.',
                ],
                [
                    'question' => 'Quel compromis existe entre actif-actif et actif-passif ?',
                    'choices' => [
                        ['choice_text' => 'Actif-actif utilise mieux la capacité mais complexifie certains scénarios d\'état et de panne', 'is_correct' => true],
                        ['choice_text' => 'Actif-passif n\'utilise aucune ressource', 'is_correct' => false],
                        ['choice_text' => 'Actif-actif est toujours plus simple', 'is_correct' => false],
                        ['choice_text' => 'Actif-passif est toujours manuel', 'is_correct' => false]
                    ],
                    'explanation' => 'L\'actif-actif améliore l\'utilisation mais augmente parfois la complexité de cohérence, de routage et de failover.',
                ],
                [
                    'question' => 'Pourquoi le headroom doit-il différer selon les workloads ?',
                    'choices' => [
                        ['choice_text' => 'Les profils de burst et contraintes de latence sont différents', 'is_correct' => true],
                        ['choice_text' => 'Tous les workloads ont les mêmes besoins', 'is_correct' => false],
                        ['choice_text' => 'Le headroom concerne uniquement le stockage', 'is_correct' => false],
                        ['choice_text' => 'Le budget est uniquement financier', 'is_correct' => false]
                    ],
                    'explanation' => 'Une charge interactive peut exiger plus de marge de latence qu\'un traitement batch, par exemple.',
                ],
                [
                    'question' => 'Quel signal justifie plutôt un ajout de capacité qu\'une optimisation ponctuelle ?',
                    'choices' => [
                        ['choice_text' => 'Un goulot structurel persistant après mesure face à une croissance durable', 'is_correct' => true],
                        ['choice_text' => 'Un seul pic isolé', 'is_correct' => false],
                        ['choice_text' => 'Une alerte sans métrique', 'is_correct' => false],
                        ['choice_text' => 'Une préférence d\'administrateur', 'is_correct' => false]
                    ],
                    'explanation' => 'La croissance durable et le caractère structurel du goulot peuvent rendre l\'ajout de capacité plus rationnel qu\'un tuning limité.',
                ],
                [
                    'question' => 'Pourquoi modéliser une perte de rack ou de zone ?',
                    'choices' => [
                        ['choice_text' => 'Une panne corrélée peut supprimer plusieurs hôtes simultanément', 'is_correct' => true],
                        ['choice_text' => 'Les pannes groupées sont impossibles', 'is_correct' => false],
                        ['choice_text' => 'Les racks n\'affectent pas la capacité', 'is_correct' => false],
                        ['choice_text' => 'Cela remplace les backups', 'is_correct' => false]
                    ],
                    'explanation' => 'Un domaine de panne peut retirer beaucoup plus de capacité qu\'un simple serveur ; le modèle doit l\'intégrer.',
                ],
                [
                    'question' => 'Quel intérêt a un test de saturation contrôlée ?',
                    'choices' => [
                        ['choice_text' => 'Mesurer le comportement et le mode dégradé à la limite', 'is_correct' => true],
                        ['choice_text' => 'Saturer la production sans contrôle', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les SLO', 'is_correct' => false],
                        ['choice_text' => 'Désactiver les alertes', 'is_correct' => false]
                    ],
                    'explanation' => 'Un test maîtrisé révèle files d\'attente, seuils, mécanismes de protection et comportement à la saturation.',
                ],
                [
                    'question' => 'Pourquoi comparer capacité réservée et consommée ?',
                    'choices' => [
                        ['choice_text' => 'Identifier sur-réservation ou sous-utilisation', 'is_correct' => true],
                        ['choice_text' => 'Garantir automatiquement les performances', 'is_correct' => false],
                        ['choice_text' => 'Remplacer le monitoring', 'is_correct' => false],
                        ['choice_text' => 'Mesurer uniquement les logs', 'is_correct' => false]
                    ],
                    'explanation' => 'Cette comparaison permet de voir si la capacité allouée est réellement utilisée et d\'optimiser les réservations.',
                ],
                [
                    'question' => 'Quel anti-pattern consiste à surdimensionner sans mesurer ?',
                    'choices' => [
                        ['choice_text' => 'Immobiliser des ressources et masquer des problèmes de conception', 'is_correct' => true],
                        ['choice_text' => 'Garantir les SLO', 'is_correct' => false],
                        ['choice_text' => 'Réduire toujours les coûts', 'is_correct' => false],
                        ['choice_text' => 'Remplacer la résilience', 'is_correct' => false]
                    ],
                    'explanation' => 'Le surdimensionnement sans preuve peut coûter cher et retarder l\'identification des causes réelles de saturation.',
                ]
            ],
        ],
        [
            'title' => 'Migration de plateformes',
            'description' => 'Canary, rollback, blue-green, compatibilité et reconstruction.',
            'difficulty' => 'Professional',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Pourquoi cartographier les dépendances avant une migration d\'OS ?',
                    'choices' => [
                        ['choice_text' => 'Les applications peuvent dépendre du kernel des drivers des runtimes ou outils', 'is_correct' => true],
                        ['choice_text' => 'Les dépendances n\'affectent jamais l\'OS', 'is_correct' => false],
                        ['choice_text' => 'La migration supprime toutes les applications', 'is_correct' => false],
                        ['choice_text' => 'DNS remplace tous les runtimes', 'is_correct' => false]
                    ],
                    'explanation' => 'Les dépendances incluent souvent des éléments hors paquet applicatif, notamment interfaces kernel et drivers.',
                ],
                [
                    'question' => 'Quel avantage offre un canary lors d\'une migration ?',
                    'choices' => [
                        ['choice_text' => 'Exposer les problèmes sur une petite population avant généralisation', 'is_correct' => true],
                        ['choice_text' => 'Interdire le rollback', 'is_correct' => false],
                        ['choice_text' => 'Migrer tout le parc', 'is_correct' => false],
                        ['choice_text' => 'Masquer les erreurs', 'is_correct' => false]
                    ],
                    'explanation' => 'Le canary limite le blast radius et fournit des données avant de poursuivre sur l\'ensemble de la flotte.',
                ],
                [
                    'question' => 'Pourquoi définir un rollback clair avant une migration majeure ?',
                    'choices' => [
                        ['choice_text' => 'Réduire le MTTR en cas d\'incompatibilité ou régression', 'is_correct' => true],
                        ['choice_text' => 'Garantir zéro panne', 'is_correct' => false],
                        ['choice_text' => 'Empêcher les tests', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les backups', 'is_correct' => false]
                    ],
                    'explanation' => 'Une procédure de retour prête à l\'emploi transforme une régression inattendue en action contrôlée.',
                ],
                [
                    'question' => 'Quel risque distingue une migration in-place d\'une reconstruction immutable ?',
                    'choices' => [
                        ['choice_text' => 'L\'in-place peut conserver des résidus de configuration qui rendent l\'état final moins prévisible', 'is_correct' => true],
                        ['choice_text' => 'L\'in-place est toujours impossible', 'is_correct' => false],
                        ['choice_text' => 'La reconstruction interdit l\'audit', 'is_correct' => false],
                        ['choice_text' => 'Le stockage devient toujours plus lent', 'is_correct' => false]
                    ],
                    'explanation' => 'Une reconstruction depuis une image cible réduit l\'accumulation historique de packages et de réglages.',
                ],
                [
                    'question' => 'Pourquoi tester les drivers lors d\'un changement de kernel ?',
                    'choices' => [
                        ['choice_text' => 'Le nouveau kernel peut modifier interfaces et compatibilités', 'is_correct' => true],
                        ['choice_text' => 'Les drivers sont indépendants du kernel', 'is_correct' => false],
                        ['choice_text' => 'Les drivers n\'ont aucun code', 'is_correct' => false],
                        ['choice_text' => 'Le kernel ne charge jamais de modules', 'is_correct' => false]
                    ],
                    'explanation' => 'Les modules et drivers dépendent des interfaces du kernel et du matériel.',
                ],
                [
                    'question' => 'Quel objectif poursuit une migration blue-green ?',
                    'choices' => [
                        ['choice_text' => 'Faire tourner ancien et nouveau environnement en parallèle avant bascule', 'is_correct' => true],
                        ['choice_text' => 'Supprimer l\'ancien immédiatement', 'is_correct' => false],
                        ['choice_text' => 'Utiliser un seul serveur', 'is_correct' => false],
                        ['choice_text' => 'Éviter toute validation', 'is_correct' => false]
                    ],
                    'explanation' => 'La coexistence permet de valider la nouvelle version et de conserver un retour rapide vers l\'ancienne.',
                ],
                [
                    'question' => 'Pourquoi une migration d\'OS peut-elle modifier les performances sans changer l\'application ?',
                    'choices' => [
                        ['choice_text' => 'Kernel scheduler drivers allocator et defaults peuvent changer', 'is_correct' => true],
                        ['choice_text' => 'Les performances ne dépendent pas de l\'OS', 'is_correct' => false],
                        ['choice_text' => 'Le CPU change toujours de fréquence', 'is_correct' => false],
                        ['choice_text' => 'Les disques sont remplacés automatiquement', 'is_correct' => false]
                    ],
                    'explanation' => 'L\'OS contrôle de nombreux chemins d\'exécution et d\'I/O ; un changement de version peut donc modifier la latence ou le débit.',
                ],
                [
                    'question' => 'Quel indicateur compare le mieux l\'impact utilisateur d\'une migration ?',
                    'choices' => [
                        ['choice_text' => 'Latence taux d\'erreur et débit comparés à une baseline', 'is_correct' => true],
                        ['choice_text' => 'Nombre de fichiers', 'is_correct' => false],
                        ['choice_text' => 'Nombre de paquets', 'is_correct' => false],
                        ['choice_text' => 'Taille de l\'ISO', 'is_correct' => false]
                    ],
                    'explanation' => 'Les SLI de service montrent si l\'utilisateur conserve le niveau de qualité attendu après la bascule.',
                ],
                [
                    'question' => 'Pourquoi conserver temporairement l\'ancien environnement ?',
                    'choices' => [
                        ['choice_text' => 'Fournir une marge de rollback et d\'investigation', 'is_correct' => true],
                        ['choice_text' => 'L\'ancien environnement n\'a aucune valeur', 'is_correct' => false],
                        ['choice_text' => 'Le retrait immédiat est toujours plus sûr', 'is_correct' => false],
                        ['choice_text' => 'Les backups sont impossibles', 'is_correct' => false]
                    ],
                    'explanation' => 'Une ancienne version stable sert de référence et peut accélérer le retour si la nouvelle rencontre un défaut.',
                ],
                [
                    'question' => 'Quel rôle joue un test de configuration dans CI/CD pour l\'infrastructure ?',
                    'choices' => [
                        ['choice_text' => 'Détecter en amont des incompatibilités d\'image ou de politique', 'is_correct' => true],
                        ['choice_text' => 'Remplacer tous les tests production', 'is_correct' => false],
                        ['choice_text' => 'Supprimer la revue', 'is_correct' => false],
                        ['choice_text' => 'Interdire les changements', 'is_correct' => false]
                    ],
                    'explanation' => 'La validation automatisée déplace la détection des problèmes vers une étape moins risquée et reproductible.',
                ]
            ],
        ],
        [
            'title' => 'Sécurité à grande échelle',
            'description' => 'Identités, patching, inventaire, segmentation et détection de dérive.',
            'difficulty' => 'Professional',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Pourquoi centraliser les identités d\'administration ?',
                    'choices' => [
                        ['choice_text' => 'Réduire les comptes locaux et appliquer une politique cohérente', 'is_correct' => true],
                        ['choice_text' => 'Supprimer MFA', 'is_correct' => false],
                        ['choice_text' => 'Rendre tous les comptes root', 'is_correct' => false],
                        ['choice_text' => 'Éliminer les logs', 'is_correct' => false]
                    ],
                    'explanation' => 'L\'identité centralisée facilite cycle de vie, révocation, MFA et audit à l\'échelle d\'une flotte.',
                ],
                [
                    'question' => 'Quel principe réduit le risque d\'un accès SSH partagé ?',
                    'choices' => [
                        ['choice_text' => 'Des comptes individuels avec clés personnelles et audit', 'is_correct' => true],
                        ['choice_text' => 'Une clé commune à tous', 'is_correct' => false],
                        ['choice_text' => 'Un mot de passe partagé', 'is_correct' => false],
                        ['choice_text' => 'Les logs désactivés', 'is_correct' => false]
                    ],
                    'explanation' => 'L\'identité individuelle permet la révocation et l\'attribution des actions à une identité précise.',
                ],
                [
                    'question' => 'Pourquoi le patch management est-il aussi une décision de gouvernance ?',
                    'choices' => [
                        ['choice_text' => 'Il faut intégrer criticité dépendances validation fenêtres et communication', 'is_correct' => true],
                        ['choice_text' => 'Un patch ne change jamais le comportement', 'is_correct' => false],
                        ['choice_text' => 'Tous les services ont le même risque', 'is_correct' => false],
                        ['choice_text' => 'Les tests sont inutiles', 'is_correct' => false]
                    ],
                    'explanation' => 'Appliquer un correctif modifie une plateforme de production et doit donc être piloté avec une gestion du risque adaptée.',
                ],
                [
                    'question' => 'Comment prioriser des vulnérabilités OS dans une grande flotte ?',
                    'choices' => [
                        ['choice_text' => 'Combiner sévérité exploitabilité exposition criticité et contrôles compensatoires', 'is_correct' => true],
                        ['choice_text' => 'Trier seulement par date', 'is_correct' => false],
                        ['choice_text' => 'Corriger uniquement les CVE faciles', 'is_correct' => false],
                        ['choice_text' => 'Ignorer le réseau', 'is_correct' => false]
                    ],
                    'explanation' => 'La priorité dépend du contexte opérationnel et de l\'exposition, pas d\'un score isolé.',
                ],
                [
                    'question' => 'Pourquoi tenir un inventaire fiable des kernels ?',
                    'choices' => [
                        ['choice_text' => 'Savoir quels hôtes sont exposés et lesquels doivent être corrigés', 'is_correct' => true],
                        ['choice_text' => 'Augmenter les performances', 'is_correct' => false],
                        ['choice_text' => 'Remplacer le patch management', 'is_correct' => false],
                        ['choice_text' => 'Les versions sont inutiles', 'is_correct' => false]
                    ],
                    'explanation' => 'Sans inventaire précis, il est impossible de mesurer l\'exposition réelle ou de vérifier la conformité.',
                ],
                [
                    'question' => 'Quel risque crée une console de management publique inutilement exposée ?',
                    'choices' => [
                        ['choice_text' => 'Elle devient une surface d\'attaque administrative à distance', 'is_correct' => true],
                        ['choice_text' => 'Elle augmente toujours la sécurité', 'is_correct' => false],
                        ['choice_text' => 'Elle empêche les scans', 'is_correct' => false],
                        ['choice_text' => 'Elle isole les serveurs', 'is_correct' => false]
                    ],
                    'explanation' => 'Les interfaces de management sont particulièrement sensibles et devraient être accessibles uniquement par des chemins contrôlés.',
                ],
                [
                    'question' => 'Pourquoi un modèle deny-by-default est-il utile pour l\'administration ?',
                    'choices' => [
                        ['choice_text' => 'Les accès nécessaires doivent être explicitement autorisés', 'is_correct' => true],
                        ['choice_text' => 'Il autorise tout', 'is_correct' => false],
                        ['choice_text' => 'Il empêche MFA', 'is_correct' => false],
                        ['choice_text' => 'Il remplace toutes les ACL', 'is_correct' => false]
                    ],
                    'explanation' => 'Un modèle fermé réduit les chemins hérités ou oubliés qui restent ouverts sans justification.',
                ],
                [
                    'question' => 'Quel objectif poursuit la séparation des rôles d\'administration ?',
                    'choices' => [
                        ['choice_text' => 'Réduire le blast radius d\'une compromission en séparant les privilèges', 'is_correct' => true],
                        ['choice_text' => 'Donner tous les droits à une équipe', 'is_correct' => false],
                        ['choice_text' => 'Supprimer l\'audit', 'is_correct' => false],
                        ['choice_text' => 'Empêcher le support', 'is_correct' => false]
                    ],
                    'explanation' => 'La séparation limite le nombre d\'actions qu\'une identité compromise peut effectuer.',
                ],
                [
                    'question' => 'Pourquoi un patch kernel peut-il nécessiter un reboot orchestré ?',
                    'choices' => [
                        ['choice_text' => 'Le correctif peut ne devenir actif qu\'après reboot et il faut préserver la capacité', 'is_correct' => true],
                        ['choice_text' => 'Les kernels ne demandent jamais de reboot', 'is_correct' => false],
                        ['choice_text' => 'Tous les hôtes doivent redémarrer ensemble', 'is_correct' => false],
                        ['choice_text' => 'Le reboot supprime les logs', 'is_correct' => false]
                    ],
                    'explanation' => 'Un redémarrage simultané peut retirer trop de capacité ; il faut planifier l\'ordre et les lots.',
                ],
                [
                    'question' => 'Quel contrôle détecte mieux la dérive de sécurité qu\'un audit ponctuel ?',
                    'choices' => [
                        ['choice_text' => 'Des contrôles continus ou périodiques automatisés', 'is_correct' => true],
                        ['choice_text' => 'Un scan unique', 'is_correct' => false],
                        ['choice_text' => 'Une documentation statique', 'is_correct' => false],
                        ['choice_text' => 'Le nombre de tickets', 'is_correct' => false]
                    ],
                    'explanation' => 'La configuration peut dériver après un audit ; une surveillance répétée permet de détecter les changements non conformes.',
                ]
            ],
        ],
        [
            'title' => 'Performance à grande échelle',
            'description' => 'Tuning, NUMA, IOPS, queues, baselines et métriques de service.',
            'difficulty' => 'Professional',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Pourquoi désactiver une mitigation de sécurité doit-il être gouverné ?',
                    'choices' => [
                        ['choice_text' => 'Le gain de performance doit être mis en balance avec l\'augmentation de risque', 'is_correct' => true],
                        ['choice_text' => 'Les mitigations n\'affectent jamais la sécurité', 'is_correct' => false],
                        ['choice_text' => 'Le gain est toujours garanti', 'is_correct' => false],
                        ['choice_text' => 'La production n\'a pas besoin de gouvernance', 'is_correct' => false]
                    ],
                    'explanation' => 'Désactiver une protection est un compromis explicite entre performance et sécurité et doit être décidé sur des mesures.',
                ],
                [
                    'question' => 'Quel est le danger d\'un tuning sans baseline ?',
                    'choices' => [
                        ['choice_text' => 'Impossible de quantifier le gain et de repérer une régression', 'is_correct' => true],
                        ['choice_text' => 'Le paramètre ne change jamais', 'is_correct' => false],
                        ['choice_text' => 'Le système est automatiquement plus rapide', 'is_correct' => false],
                        ['choice_text' => 'Les métriques sont inutiles', 'is_correct' => false]
                    ],
                    'explanation' => 'Sans état de référence, les variations de charge peuvent être confondues avec un gain ou une régression.',
                ],
                [
                    'question' => 'Pourquoi l\'affinité CPU aide-t-elle parfois les workloads sensibles à la latence ?',
                    'choices' => [
                        ['choice_text' => 'Réduire migrations et préserver une meilleure localité cache', 'is_correct' => true],
                        ['choice_text' => 'Ajouter des cœurs physiques', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les interruptions', 'is_correct' => false],
                        ['choice_text' => 'Remplacer NUMA', 'is_correct' => false]
                    ],
                    'explanation' => 'Une affinité contrôlée peut améliorer la stabilité de placement et la localité du traitement et des données.',
                ],
                [
                    'question' => 'Quel risque existe avec une affinité CPU trop stricte ?',
                    'choices' => [
                        ['choice_text' => 'Créer des cœurs saturés alors que d\'autres restent libres', 'is_correct' => true],
                        ['choice_text' => 'Garantir l\'équilibrage parfait', 'is_correct' => false],
                        ['choice_text' => 'Supprimer le scheduler', 'is_correct' => false],
                        ['choice_text' => 'Rendre NUMA identique', 'is_correct' => false]
                    ],
                    'explanation' => 'Des restrictions excessives réduisent la capacité du scheduler à équilibrer correctement la charge.',
                ],
                [
                    'question' => 'Pourquoi distinguer IOPS et bande passante ?',
                    'choices' => [
                        ['choice_text' => 'Une charge peut être limitée par le nombre d\'opérations ou par les octets transférés', 'is_correct' => true],
                        ['choice_text' => 'Les deux sont identiques', 'is_correct' => false],
                        ['choice_text' => 'La bande passante n\'existe pas', 'is_correct' => false],
                        ['choice_text' => 'Les IOPS concernent le réseau seulement', 'is_correct' => false]
                    ],
                    'explanation' => 'Une charge aléatoire peut saturer les IOPS sans saturer le débit, tandis qu\'un transfert séquentiel peut faire l\'inverse.',
                ],
                [
                    'question' => 'Quel comportement suggère une saturation de queue disque ?',
                    'choices' => [
                        ['choice_text' => 'La profondeur de queue et la latence augmentent fortement', 'is_correct' => true],
                        ['choice_text' => 'La latence baisse avec la queue', 'is_correct' => false],
                        ['choice_text' => 'Le CPU devient toujours idle', 'is_correct' => false],
                        ['choice_text' => 'Les permissions changent', 'is_correct' => false]
                    ],
                    'explanation' => 'Une file d\'attente croissante indique que le backend ne peut plus servir les requêtes au rythme d\'arrivée.',
                ],
                [
                    'question' => 'Pourquoi agrandir une queue réseau sans mesurer peut-il être nuisible ?',
                    'choices' => [
                        ['choice_text' => 'Le buffering peut augmenter la latence sans améliorer le débit utile', 'is_correct' => true],
                        ['choice_text' => 'Les grandes queues réduisent toujours la latence', 'is_correct' => false],
                        ['choice_text' => 'Les queues n\'utilisent aucune mémoire', 'is_correct' => false],
                        ['choice_text' => 'Le réseau n\'a pas de buffers', 'is_correct' => false]
                    ],
                    'explanation' => 'Une queue trop profonde peut produire du bufferbloat et des temps de réponse élevés.',
                ],
                [
                    'question' => 'Quelle méthode rend un tuning reproductible ?',
                    'choices' => [
                        ['choice_text' => 'Mesurer puis modifier une variable contrôlée et vérifier le résultat', 'is_correct' => true],
                        ['choice_text' => 'Changer des centaines de paramètres ensemble', 'is_correct' => false],
                        ['choice_text' => 'Copier un réglage sans test', 'is_correct' => false],
                        ['choice_text' => 'Optimiser seulement la moyenne', 'is_correct' => false]
                    ],
                    'explanation' => 'Une expérimentation contrôlée permet d\'attribuer l\'effet à un changement précis et de documenter le résultat.',
                ],
                [
                    'question' => 'Pourquoi revalider un tuning après un changement de matériel ?',
                    'choices' => [
                        ['choice_text' => 'Le profil NUMA cache I/O et CPU peut avoir changé', 'is_correct' => true],
                        ['choice_text' => 'Le matériel n\'influence pas le kernel', 'is_correct' => false],
                        ['choice_text' => 'Les paramètres sont universels', 'is_correct' => false],
                        ['choice_text' => 'Les mesures ne sont plus utiles', 'is_correct' => false]
                    ],
                    'explanation' => 'Le nouveau matériel peut déplacer le goulot ou modifier les coûts, rendant les réglages historiques inadaptés.',
                ],
                [
                    'question' => 'Quel indicateur doit finalement guider une optimisation ?',
                    'choices' => [
                        ['choice_text' => 'Le SLI pertinent comme p99 débit utile ou coût par requête', 'is_correct' => true],
                        ['choice_text' => 'Le nombre de logs', 'is_correct' => false],
                        ['choice_text' => 'Le nombre de threads', 'is_correct' => false],
                        ['choice_text' => 'La taille du swap', 'is_correct' => false]
                    ],
                    'explanation' => 'Un tuning est pertinent s\'il améliore un objectif de service ou économique sans dégrader les contraintes essentielles.',
                ]
            ],
        ],
        [
            'title' => 'Incidents majeurs',
            'description' => 'Change freeze, mitigation, blast radius, DR et MTTR.',
            'difficulty' => 'Professional',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Pourquoi geler certains changements non essentiels pendant un incident majeur ?',
                    'choices' => [
                        ['choice_text' => 'Réduire les variables et éviter d\'aggraver la situation', 'is_correct' => true],
                        ['choice_text' => 'Empêcher toute restauration', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                        ['choice_text' => 'Ralentir l\'équipe', 'is_correct' => false]
                    ],
                    'explanation' => 'Un gel ciblé réduit le bruit et le risque pendant la stabilisation et l\'analyse de cause.',
                ],
                [
                    'question' => 'Quelle approche est préférable entre mitigation et correction définitive ?',
                    'choices' => [
                        ['choice_text' => 'Rétablir d\'abord un service acceptable avec une action sûre et réversible si possible', 'is_correct' => true],
                        ['choice_text' => 'Chercher la cause parfaite avant toute action', 'is_correct' => false],
                        ['choice_text' => 'Changer de nombreux paramètres', 'is_correct' => false],
                        ['choice_text' => 'Redémarrer tout le parc', 'is_correct' => false]
                    ],
                    'explanation' => 'La mitigation réduit l\'impact rapidement ; la correction durable peut ensuite être préparée avec davantage de preuves.',
                ],
                [
                    'question' => 'Pourquoi limiter le blast radius d\'une action d\'urgence ?',
                    'choices' => [
                        ['choice_text' => 'Une hypothèse erronée aura un impact plus limité', 'is_correct' => true],
                        ['choice_text' => 'Un blast radius plus grand est plus sûr', 'is_correct' => false],
                        ['choice_text' => 'Il concerne uniquement la sécurité', 'is_correct' => false],
                        ['choice_text' => 'Il n\'affecte pas la production', 'is_correct' => false]
                    ],
                    'explanation' => 'Une action sur une petite population est plus facile à observer et à annuler en cas d\'erreur.',
                ],
                [
                    'question' => 'Que faire si une automatisation échoue sur 30 % du parc ?',
                    'choices' => [
                        ['choice_text' => 'Stopper ou contenir la vague puis analyser avant de poursuivre', 'is_correct' => true],
                        ['choice_text' => 'Poursuivre plus vite', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les métriques', 'is_correct' => false],
                        ['choice_text' => 'Redémarrer tout le parc', 'is_correct' => false]
                    ],
                    'explanation' => 'Un taux d\'échec élevé signifie que l\'hypothèse de déploiement n\'est plus fiable ; continuer amplifierait le risque.',
                ],
                [
                    'question' => 'Pourquoi conserver les identifiants de version et timestamps pendant un incident ?',
                    'choices' => [
                        ['choice_text' => 'Corréler les symptômes avec les changements', 'is_correct' => true],
                        ['choice_text' => 'Augmenter les performances', 'is_correct' => false],
                        ['choice_text' => 'Empêcher les rollbacks', 'is_correct' => false],
                        ['choice_text' => 'Remplacer les traces', 'is_correct' => false]
                    ],
                    'explanation' => 'Les versions et heures de déploiement permettent de relier une dégradation à un changement précis.',
                ],
                [
                    'question' => 'Quel est l\'intérêt d\'une gestion hors bande ?',
                    'choices' => [
                        ['choice_text' => 'Accéder à un serveur lorsque l\'OS ou le réseau de production est défaillant', 'is_correct' => true],
                        ['choice_text' => 'Remplacer toutes les sauvegardes', 'is_correct' => false],
                        ['choice_text' => 'Augmenter le trafic applicatif', 'is_correct' => false],
                        ['choice_text' => 'Exécuter des applications métier', 'is_correct' => false]
                    ],
                    'explanation' => 'Un accès hors bande fournit une voie indépendante pour console, reboot et récupération lorsque le chemin normal ne fonctionne plus.',
                ],
                [
                    'question' => 'Pourquoi définir des critères d\'escalade avant un incident ?',
                    'choices' => [
                        ['choice_text' => 'Éviter de perdre du temps à décider qui impliquer', 'is_correct' => true],
                        ['choice_text' => 'Retarder les spécialistes', 'is_correct' => false],
                        ['choice_text' => 'Supprimer la communication', 'is_correct' => false],
                        ['choice_text' => 'Éviter toute responsabilité', 'is_correct' => false]
                    ],
                    'explanation' => 'Des seuils préétablis accélèrent la mobilisation des bonnes expertises pendant une crise.',
                ],
                [
                    'question' => 'Pourquoi séparer faits, hypothèses et actions dans les communications ?',
                    'choices' => [
                        ['choice_text' => 'Éviter de présenter une hypothèse comme une cause prouvée', 'is_correct' => true],
                        ['choice_text' => 'Rendre les messages plus longs', 'is_correct' => false],
                        ['choice_text' => 'Ces notions sont identiques', 'is_correct' => false],
                        ['choice_text' => 'La communication ne sert pas l\'incident', 'is_correct' => false]
                    ],
                    'explanation' => 'Cette distinction conserve une compréhension commune et évite une fausse causalité partagée par toute l\'équipe.',
                ],
                [
                    'question' => 'Que doit vérifier un exercice de disaster recovery ?',
                    'choices' => [
                        ['choice_text' => 'Dépendances procédures temps de reprise et écart entre théorie et réalité', 'is_correct' => true],
                        ['choice_text' => 'L\'absence totale d\'incident', 'is_correct' => false],
                        ['choice_text' => 'Uniquement le boot', 'is_correct' => false],
                        ['choice_text' => 'La suppression des sauvegardes', 'is_correct' => false]
                    ],
                    'explanation' => 'Un exercice DR vérifie la chaîne opérationnelle réelle, pas seulement l\'existence de copies de données.',
                ],
                [
                    'question' => 'Pourquoi suivre MTTD et MTTR séparément ?',
                    'choices' => [
                        ['choice_text' => 'Détection et restauration sont des leviers opérationnels différents', 'is_correct' => true],
                        ['choice_text' => 'Ils sont toujours identiques', 'is_correct' => false],
                        ['choice_text' => 'MTTD concerne seulement le réseau', 'is_correct' => false],
                        ['choice_text' => 'MTTR concerne seulement les backups', 'is_correct' => false]
                    ],
                    'explanation' => 'Améliorer MTTD agit sur détection et alerting ; réduire MTTR agit sur diagnostic, accès, procédures et récupération.',
                ]
            ],
        ],
        [
            'title' => 'Plateformes multi-tenant',
            'description' => 'Isolation, quotas, noisy neighbors, cgroups et namespaces.',
            'difficulty' => 'Professional',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Quel objectif principal vise une plateforme multi-tenant ?',
                    'choices' => [
                        ['choice_text' => 'Partager les ressources tout en préservant isolation sécurité et équité', 'is_correct' => true],
                        ['choice_text' => 'Partager tous les privilèges', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les quotas', 'is_correct' => false],
                        ['choice_text' => 'Garantir zéro panne', 'is_correct' => false]
                    ],
                    'explanation' => 'La mutualisation n\'est viable que si les frontières entre tenants protègent sécurité et objectifs de service.',
                ],
                [
                    'question' => 'Pourquoi imposer des quotas par tenant ?',
                    'choices' => [
                        ['choice_text' => 'Éviter qu\'un tenant monopolise la capacité', 'is_correct' => true],
                        ['choice_text' => 'Réduire toujours la capacité totale', 'is_correct' => false],
                        ['choice_text' => 'Rendre les limites globales inutiles', 'is_correct' => false],
                        ['choice_text' => 'Supposer des charges identiques', 'is_correct' => false]
                    ],
                    'explanation' => 'Les quotas protègent l\'équité et facilitent le capacity planning par client ou équipe.',
                ],
                [
                    'question' => 'Quel mécanisme OS contrôle particulièrement bien les ressources d\'un tenant local ?',
                    'choices' => [
                        ['choice_text' => 'Les cgroups', 'is_correct' => true],
                        ['choice_text' => 'Les inodes', 'is_correct' => false],
                        ['choice_text' => 'DNS', 'is_correct' => false],
                        ['choice_text' => 'Le bootloader', 'is_correct' => false]
                    ],
                    'explanation' => 'Les cgroups regroupent des processus et permettent d\'appliquer des politiques de ressources CPU, mémoire et autres.',
                ],
                [
                    'question' => 'Pourquoi des métriques par tenant sont-elles nécessaires ?',
                    'choices' => [
                        ['choice_text' => 'Elles permettent d\'identifier le noisy neighbor dans des agrégats partagés', 'is_correct' => true],
                        ['choice_text' => 'Les agrégats donnent toujours l\'identité', 'is_correct' => false],
                        ['choice_text' => 'Les tenants ne consomment pas de ressources', 'is_correct' => false],
                        ['choice_text' => 'Les métriques sont inutiles', 'is_correct' => false]
                    ],
                    'explanation' => 'Sans dimension tenant, une saturation globale ne permet pas de savoir qui consomme la capacité ni d\'appliquer des limites ciblées.',
                ],
                [
                    'question' => 'Quel compromis existe entre surallocation et isolation de performance ?',
                    'choices' => [
                        ['choice_text' => 'La surallocation améliore l\'utilisation mais augmente la contention potentielle', 'is_correct' => true],
                        ['choice_text' => 'La surallocation garantit toujours la latence', 'is_correct' => false],
                        ['choice_text' => 'L\'isolation est gratuite', 'is_correct' => false],
                        ['choice_text' => 'Les deux sont identiques', 'is_correct' => false]
                    ],
                    'explanation' => 'Mutualiser augmente l\'efficacité mais réduit la marge individuelle, ce qui peut affecter les garanties sous pointe.',
                ],
                [
                    'question' => 'Pourquoi isoler les secrets par tenant ?',
                    'choices' => [
                        ['choice_text' => 'Empêcher un tenant compromis d\'accéder aux secrets d\'un autre', 'is_correct' => true],
                        ['choice_text' => 'Les secrets sont publics', 'is_correct' => false],
                        ['choice_text' => 'Le stockage doit être commun', 'is_correct' => false],
                        ['choice_text' => 'Les tenants n\'ont pas d\'identité', 'is_correct' => false]
                    ],
                    'explanation' => 'L\'isolation des identités et secrets limite la portée d\'une compromission croisée.',
                ],
                [
                    'question' => 'Quel risque existe avec un stockage partagé mal isolé ?',
                    'choices' => [
                        ['choice_text' => 'Une erreur de permission peut exposer les données d\'un autre tenant', 'is_correct' => true],
                        ['choice_text' => 'Le stockage devient plus rapide', 'is_correct' => false],
                        ['choice_text' => 'Les backups sont impossibles', 'is_correct' => false],
                        ['choice_text' => 'Le CPU change de fréquence', 'is_correct' => false]
                    ],
                    'explanation' => 'Le partage physique n\'est pas le problème ; une séparation logique et des contrôles d\'accès insuffisants peuvent entraîner une fuite.',
                ],
                [
                    'question' => 'Pourquoi utiliser des namespaces dans un environnement partagé Linux ?',
                    'choices' => [
                        ['choice_text' => 'Présenter des vues isolées de certaines ressources système', 'is_correct' => true],
                        ['choice_text' => 'Augmenter la RAM', 'is_correct' => false],
                        ['choice_text' => 'Chiffrer les disques', 'is_correct' => false],
                        ['choice_text' => 'Remplacer les cgroups', 'is_correct' => false]
                    ],
                    'explanation' => 'Les namespaces peuvent isoler notamment les PID, le réseau et les systèmes de fichiers vus par un groupe de processus.',
                ],
                [
                    'question' => 'Quel indicateur aide à vérifier le respect du budget d\'un tenant ?',
                    'choices' => [
                        ['choice_text' => 'Comparer sa consommation réelle à sa limite ou allocation', 'is_correct' => true],
                        ['choice_text' => 'La version du BIOS', 'is_correct' => false],
                        ['choice_text' => 'Le nombre de comptes root', 'is_correct' => false],
                        ['choice_text' => 'Le nombre de snapshots seuls', 'is_correct' => false]
                    ],
                    'explanation' => 'Le ratio usage/quota permet d\'identifier les dépassements et les allocations surdimensionnées.',
                ],
                [
                    'question' => 'Pourquoi interpréter avec soin un OOM sur une plateforme partagée ?',
                    'choices' => [
                        ['choice_text' => 'Le processus tué et le périmètre de limite déterminent si l\'incident reste isolé', 'is_correct' => true],
                        ['choice_text' => 'Tous les OOM sont bénins', 'is_correct' => false],
                        ['choice_text' => 'Un OOM ne touche pas l\'application', 'is_correct' => false],
                        ['choice_text' => 'Seul le CPU compte', 'is_correct' => false]
                    ],
                    'explanation' => 'Dans un environnement partagé, le choix du processus sacrifié et les frontières de cgroup conditionnent le blast radius.',
                ]
            ],
        ],
        [
            'title' => 'Gouvernance de configuration',
            'description' => 'Immuabilité, configuration as code, conformité et détection de dérive.',
            'difficulty' => 'Professional',
            'duration' => 15,
            'passing_score' => 70,
            'total_marks' => 10,
            'qs' => [
                [
                    'question' => 'Pourquoi favoriser l\'immuabilité des serveurs dans une grande flotte ?',
                    'choices' => [
                        ['choice_text' => 'Réduire la dérive en remplaçant l\'instance par un artefact connu plutôt qu\'en accumulant des modifications', 'is_correct' => true],
                        ['choice_text' => 'Interdire les changements de sécurité', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                        ['choice_text' => 'Éviter tout redémarrage', 'is_correct' => false]
                    ],
                    'explanation' => 'Une approche immutable rend l\'état plus reproductible et facilite le rollback et l\'audit des versions déployées.',
                ],
                [
                    'question' => 'Quel avantage apporte la configuration comme code ?',
                    'choices' => [
                        ['choice_text' => 'Versionner et relire les changements d\'infrastructure', 'is_correct' => true],
                        ['choice_text' => 'Rendre les serveurs impossibles à modifier', 'is_correct' => false],
                        ['choice_text' => 'Remplacer toutes les métriques', 'is_correct' => false],
                        ['choice_text' => 'Désactiver les tests', 'is_correct' => false]
                    ],
                    'explanation' => 'La configuration as code apporte historique, revue, automatisation et possibilité de reconstruire un état connu.',
                ],
                [
                    'question' => 'Pourquoi valider une politique de sécurité automatiquement dans un pipeline ?',
                    'choices' => [
                        ['choice_text' => 'Détecter une dérive avant le déploiement', 'is_correct' => true],
                        ['choice_text' => 'Éviter toute revue humaine', 'is_correct' => false],
                        ['choice_text' => 'Augmenter la latence réseau', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les alertes', 'is_correct' => false]
                    ],
                    'explanation' => 'Les contrôles automatisés déplacent la détection de non-conformité vers une étape plus sûre et répétable.',
                ],
                [
                    'question' => 'Quel risque crée une modification manuelle non tracée après un déploiement automatisé ?',
                    'choices' => [
                        ['choice_text' => 'Elle introduit une dérive qui peut être écrasée ou perdue au prochain déploiement', 'is_correct' => true],
                        ['choice_text' => 'Elle améliore toujours la fiabilité', 'is_correct' => false],
                        ['choice_text' => 'Elle empêche le rollback uniquement en laboratoire', 'is_correct' => false],
                        ['choice_text' => 'Elle réduit la surface d\'attaque', 'is_correct' => false]
                    ],
                    'explanation' => 'Une modification manuelle hors du système de référence casse la reproductibilité et peut disparaître lors d\'une reconstruction.',
                ],
                [
                    'question' => 'Pourquoi définir une politique de versioning des images OS ?',
                    'choices' => [
                        ['choice_text' => 'Identifier exactement le contenu et l\'historique de chaque artefact', 'is_correct' => true],
                        ['choice_text' => 'Faire varier les images aléatoirement', 'is_correct' => false],
                        ['choice_text' => 'Supprimer la traçabilité', 'is_correct' => false],
                        ['choice_text' => 'Éviter les mises à jour', 'is_correct' => false]
                    ],
                    'explanation' => 'Une version immuable ou explicitement identifiée permet de savoir quel état a été testé et déployé.',
                ],
                [
                    'question' => 'Pourquoi utiliser des tests de conformité différenciés selon les rôles de serveurs ?',
                    'choices' => [
                        ['choice_text' => 'Les exigences d\'un bastion, d\'une base de données et d\'un worker ne sont pas identiques', 'is_correct' => true],
                        ['choice_text' => 'Tous les serveurs ont exactement les mêmes exigences', 'is_correct' => false],
                        ['choice_text' => 'Les rôles empêchent les audits', 'is_correct' => false],
                        ['choice_text' => 'Les contrôles doivent toujours être absents', 'is_correct' => false]
                    ],
                    'explanation' => 'La politique doit distinguer les exigences communes des contraintes spécifiques à chaque rôle afin d\'éviter un modèle trop laxiste ou trop cassant.',
                ],
                [
                    'question' => 'Quel objectif poursuit une politique de drift detection ?',
                    'choices' => [
                        ['choice_text' => 'Identifier automatiquement une divergence entre l\'état réel et l\'état attendu', 'is_correct' => true],
                        ['choice_text' => 'Augmenter la consommation CPU', 'is_correct' => false],
                        ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                        ['choice_text' => 'Supprimer les journaux', 'is_correct' => false]
                    ],
                    'explanation' => 'La détection de dérive permet d\'identifier une modification non planifiée et de déclencher une remédiation ou une investigation.',
                ],
                [
                    'question' => 'Pourquoi limiter les exceptions de configuration à un périmètre précis ?',
                    'choices' => [
                        ['choice_text' => 'Réduire leur blast radius et faciliter leur revue', 'is_correct' => true],
                        ['choice_text' => 'Rendre les exceptions permanentes', 'is_correct' => false],
                        ['choice_text' => 'Éviter la documentation', 'is_correct' => false],
                        ['choice_text' => 'Supprimer le contrôle d\'accès', 'is_correct' => false]
                    ],
                    'explanation' => 'Une exception ciblée est plus facile à comprendre, auditer et retirer lorsqu\'elle n\'est plus nécessaire.',
                ],
                [
                    'question' => 'Quel indicateur montre qu\'une plateforme est réellement reproductible ?',
                    'choices' => [
                        ['choice_text' => 'La possibilité de reconstruire un serveur équivalent à partir d\'artefacts et d\'une configuration versionnés', 'is_correct' => true],
                        ['choice_text' => 'Le nombre d\'administrateurs', 'is_correct' => false],
                        ['choice_text' => 'Le nombre de connexions SSH', 'is_correct' => false],
                        ['choice_text' => 'La taille du disque', 'is_correct' => false]
                    ],
                    'explanation' => 'La reproductibilité se vérifie lorsqu\'un nouvel hôte peut être reconstruit de manière déterministe à partir des sources de vérité.',
                ],
                [
                    'question' => 'Pourquoi une revue des changements d\'infrastructure doit-elle inclure le rollback prévu ?',
                    'choices' => [
                        ['choice_text' => 'Pour vérifier qu\'une action peut être annulée sans hypothèse cachée', 'is_correct' => true],
                        ['choice_text' => 'Pour interdire tout changement', 'is_correct' => false],
                        ['choice_text' => 'Pour supprimer la supervision', 'is_correct' => false],
                        ['choice_text' => 'Pour éviter les tests', 'is_correct' => false]
                    ],
                    'explanation' => 'Le rollback fait partie du risque d\'un changement ; sa faisabilité doit être vérifiée avant l\'exécution en production.',
                ]
            ],
        ]
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

            foreach ($quizData['qs'] as $index => $questionData) {
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
