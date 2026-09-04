<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ITArchitectureProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'it-architecture')->firstOrFail();

        $quizzes = [
            [
                'title' => 'IT Architecture Professional — Enterprise Architecture Strategy',
                'description' => 'Évaluez la capacité à aligner l’architecture d’entreprise sur la stratégie, la transformation et les contraintes organisationnelles.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le principal objectif d’une architecture d’entreprise mature ?',
                        'explanation' => 'Une architecture d’entreprise doit relier stratégie, capacités métier, données, applications et technologies afin de soutenir les objectifs de l’organisation.',
                        'choices' => [
                            ['choice_text' => 'Aligner les capacités technologiques sur la stratégie et les objectifs de l’organisation', 'is_correct' => true],
                            ['choice_text' => 'Standardiser toutes les technologies sans tenir compte du contexte', 'is_correct' => false],
                            ['choice_text' => 'Maximiser le nombre de plateformes utilisées', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les responsables métier dans les décisions stratégiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi cartographier les capacités métier avant certaines transformations technologiques ?',
                        'explanation' => 'Les capacités métier permettent d’identifier quelles fonctions sont réellement critiques et d’éviter de raisonner uniquement à partir des applications existantes.',
                        'choices' => [
                            ['choice_text' => 'Pour relier les investissements technologiques aux capacités réellement critiques', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer immédiatement toutes les applications legacy', 'is_correct' => false],
                            ['choice_text' => 'Pour choisir une technologie avant de comprendre le besoin', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter de parler aux parties prenantes métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une cible d’architecture trop détaillée à plusieurs années peut-elle être fragile ?',
                        'explanation' => 'Les technologies, priorités et contraintes évoluent. Une cible trop figée peut devenir obsolète avant sa réalisation.',
                        'choices' => [
                            ['choice_text' => 'Parce que les hypothèses technologiques et métier peuvent évoluer avant sa réalisation', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une architecture ne doit jamais avoir de vision cible', 'is_correct' => false],
                            ['choice_text' => 'Parce que les architectures détaillées sont toujours incorrectes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une stratégie IT ne doit considérer que le court terme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture d’entreprise doit-elle gérer les dépendances entre capacités ?',
                        'explanation' => 'Une transformation peut sembler locale mais dépendre de plateformes partagées, de données communes ou de capacités transverses.',
                        'choices' => [
                            ['choice_text' => 'Pour anticiper les effets en chaîne et planifier les transformations dans le bon ordre', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les interdépendances métier', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre toutes les équipes autonomes immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute feuille de route', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des principes d’architecture communs à l’échelle d’une entreprise ?',
                        'explanation' => 'Des principes communs facilitent les décisions cohérentes sans imposer nécessairement une implémentation unique.',
                        'choices' => [
                            ['choice_text' => 'Créer un cadre cohérent pour orienter les décisions techniques', 'is_correct' => true],
                            ['choice_text' => 'Imposer exactement les mêmes composants à chaque équipe', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute innovation locale', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les arbitrages métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’architecture doit-elle intégrer les contraintes réglementaires dès la conception ?',
                        'explanation' => 'Certaines obligations peuvent modifier la localisation des données, leur conservation, les contrôles d’accès ou les mécanismes d’audit.',
                        'choices' => [
                            ['choice_text' => 'Parce que les contraintes réglementaires peuvent modifier directement les choix de conception', 'is_correct' => true],
                            ['choice_text' => 'Parce que la conformité est uniquement une activité documentaire', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les réglementations imposent les mêmes technologies', 'is_correct' => false],
                            ['choice_text' => 'Parce que les contrôles techniques peuvent être ajoutés uniquement après production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture de référence doit-elle être adaptée aux contextes d’usage ?',
                        'explanation' => 'Une référence sert de guide. L’utiliser sans adaptation peut créer des solutions surdimensionnées ou inadaptées.',
                        'choices' => [
                            ['choice_text' => 'Une référence doit fournir un cadre tout en laissant place aux contraintes spécifiques', 'is_correct' => true],
                            ['choice_text' => 'Une référence doit toujours être copiée sans modification', 'is_correct' => false],
                            ['choice_text' => 'Une référence doit éliminer toute diversité technologique', 'is_correct' => false],
                            ['choice_text' => 'Une référence remplace toujours les exigences métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un portefeuille d’applications doit-il être évalué en fonction de sa valeur métier ?',
                        'explanation' => 'Le simple âge ou coût technique d’une application ne suffit pas pour décider de la conserver, transformer ou remplacer.',
                        'choices' => [
                            ['choice_text' => 'Pour arbitrer les investissements selon valeur, risque, coût et importance métier', 'is_correct' => true],
                            ['choice_text' => 'Pour éliminer automatiquement toutes les applications anciennes', 'is_correct' => false],
                            ['choice_text' => 'Pour privilégier toujours les technologies récentes', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute modernisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’architecture d’entreprise doit-elle surveiller la dette technique ?',
                        'explanation' => 'Une dette importante peut ralentir les changements, augmenter les risques et consommer une part croissante de la capacité d’ingénierie.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une dette croissante peut réduire la capacité future de transformation', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute dette technique est nécessairement mauvaise', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle remplace les risques métier', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle garantit automatiquement un mauvais système', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider une décision d’architecture stratégique ?',
                        'explanation' => 'Une décision stratégique doit être contextualisée, expliciter ses compromis et être reliée à une capacité ou un objectif business.',
                        'choices' => [
                            ['choice_text' => 'Relier la décision à la valeur recherchée et expliciter ses compromis', 'is_correct' => true],
                            ['choice_text' => 'Choisir la solution avec le plus grand nombre de fonctionnalités', 'is_correct' => false],
                            ['choice_text' => 'Choisir systématiquement la technologie la plus récente', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute documentation pour accélérer la décision', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Professional — Architecture de systèmes distribués à grande échelle',
                'description' => 'Évaluez la capacité à concevoir des systèmes distribués robustes, observables et capables de résister aux défaillances partielles.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi un service critique doit-il limiter les dépendances synchrones en chaîne ?',
                        'explanation' => 'Plus une requête dépend de services successifs, plus sa latence et son risque d’échec augmentent.',
                        'choices' => [
                            ['choice_text' => 'Chaque dépendance ajoute potentiellement latence, panne et complexité au chemin critique', 'is_correct' => true],
                            ['choice_text' => 'Les appels synchrones accélèrent toujours les systèmes distribués', 'is_correct' => false],
                            ['choice_text' => 'Les dépendances synchrones n’ont aucun impact sur la disponibilité', 'is_correct' => false],
                            ['choice_text' => 'Les services distribués ne devraient jamais communiquer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir un budget de latence pour chaque dépendance critique ?',
                        'explanation' => 'Le budget de latence permet de distribuer l’objectif de temps de réponse entre les composants du chemin critique.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter qu’une seule dépendance consomme tout le budget de réponse disponible', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que toutes les dépendances ont la même latence', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les timeouts', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher le parallélisme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture professionnelle doit-elle considérer les cascades de panne ?',
                        'explanation' => 'Un composant défaillant peut surcharger ses appelants, qui peuvent eux-mêmes dégrader les autres composants.',
                        'choices' => [
                            ['choice_text' => 'Un défaut local peut se propager via les dépendances et provoquer une panne plus large', 'is_correct' => true],
                            ['choice_text' => 'Les pannes distribuées restent toujours isolées', 'is_correct' => false],
                            ['choice_text' => 'Les retries empêchent automatiquement les cascades', 'is_correct' => false],
                            ['choice_text' => 'Une architecture distribuée élimine les dépendances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les retries doivent-ils être combinés avec des mécanismes de backoff et de limitation ?',
                        'explanation' => 'Sans contrôle, plusieurs clients peuvent répéter simultanément leurs requêtes et amplifier une saturation.',
                        'choices' => [
                            ['choice_text' => 'Réduire la probabilité que les tentatives de récupération aggravent la saturation', 'is_correct' => true],
                            ['choice_text' => 'Garantir que toutes les opérations finiront immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute gestion d’erreur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les timeouts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le bulkhead pattern peut-il améliorer la résilience ?',
                        'explanation' => 'Il isole certaines ressources ou charges afin qu’un problème dans un flux ne consomme pas tout le pool disponible.',
                        'choices' => [
                            ['choice_text' => 'Empêcher qu’une charge ou panne consomme toutes les ressources partagées', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun composant ne tombera en panne', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de scaling', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le load balancing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les architectures distribuées doivent-elles définir la sémantique de livraison des messages ?',
                        'explanation' => 'Exactly-once, at-least-once ou at-most-once impliquent des comportements et contraintes différents.',
                        'choices' => [
                            ['choice_text' => 'Le niveau de garantie détermine la gestion des doublons, pertes et idempotence', 'is_correct' => true],
                            ['choice_text' => 'Toutes les plateformes garantissent exactement la même livraison', 'is_correct' => false],
                            ['choice_text' => 'La livraison des messages n’a aucun impact métier', 'is_correct' => false],
                            ['choice_text' => 'Les doublons ne peuvent jamais apparaître', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’idempotence est-elle particulièrement importante dans les systèmes distribués ?',
                        'explanation' => 'Les retries et mécanismes de livraison peuvent provoquer plusieurs traitements du même événement ou de la même commande.',
                        'choices' => [
                            ['choice_text' => 'Elle permet de rejouer certaines opérations sans produire de conséquences incorrectes répétées', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit que les messages ne seront jamais dupliqués', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime tous les besoins de transaction', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace les contrôles d’accès', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les architectures distribuées doivent-elles distinguer panne technique et dégradation fonctionnelle ?',
                        'explanation' => 'Un service peut rester accessible tout en retournant des résultats incomplets ou incorrects.',
                        'choices' => [
                            ['choice_text' => 'Une disponibilité technique ne garantit pas que la fonction métier reste correcte', 'is_correct' => true],
                            ['choice_text' => 'Une erreur fonctionnelle signifie toujours que le serveur est arrêté', 'is_correct' => false],
                            ['choice_text' => 'Les utilisateurs ne ressentent jamais les dégradations fonctionnelles', 'is_correct' => false],
                            ['choice_text' => 'Les métriques métier sont inutiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture doit-elle favoriser des dégradations contrôlées plutôt qu’un échec total ?',
                        'explanation' => 'Certaines fonctions non essentielles peuvent être désactivées temporairement afin de préserver les fonctions critiques.',
                        'choices' => [
                            ['choice_text' => 'Préserver les fonctions critiques lorsque certaines capacités deviennent indisponibles', 'is_correct' => true],
                            ['choice_text' => 'Garantir toutes les fonctionnalités même pendant une panne', 'is_correct' => false],
                            ['choice_text' => 'Éviter les mécanismes de fallback', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les dépendances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les architectes doivent-ils considérer le coût opérationnel de la distribution ?',
                        'explanation' => 'Plus de services, régions et flux signifient souvent davantage de monitoring, sécurité, réseau, coordination et support.',
                        'choices' => [
                            ['choice_text' => 'La distribution augmente généralement les coûts de fonctionnement et de gouvernance', 'is_correct' => true],
                            ['choice_text' => 'La distribution réduit toujours les coûts', 'is_correct' => false],
                            ['choice_text' => 'Les systèmes distribués n’ont pas de coût réseau', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de composants n’influence jamais l’exploitation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Professional — Data Architecture et gouvernance des données',
                'description' => 'Maîtrisez les architectures de données d’entreprise, la gouvernance, la qualité, la traçabilité et la rétention.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi la propriété des données doit-elle être explicitement définie ?',
                        'explanation' => 'L’ownership permet de savoir qui est responsable de la qualité, des règles métier et de l’évolution des données.',
                        'choices' => [
                            ['choice_text' => 'Pour attribuer clairement la responsabilité de la qualité, du sens et de l’usage des données', 'is_correct' => true],
                            ['choice_text' => 'Pour centraliser toutes les données chez une seule personne', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute gouvernance', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que les données ne changeront jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la gouvernance des données doit-elle inclure la qualité des données ?',
                        'explanation' => 'Les décisions métier et automatisations peuvent devenir incorrectes si les données sont incomplètes ou incohérentes.',
                        'choices' => [
                            ['choice_text' => 'Une mauvaise qualité peut produire des décisions et traitements incorrects', 'is_correct' => true],
                            ['choice_text' => 'La qualité est automatiquement garantie par toute base de données', 'is_correct' => false],
                            ['choice_text' => 'La qualité concerne uniquement l’interface utilisateur', 'is_correct' => false],
                            ['choice_text' => 'La qualité n’a aucun effet sur l’architecture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un catalogue de données peut-il être utile dans une grande organisation ?',
                        'explanation' => 'Il aide à découvrir quelles données existent, leur signification, leur propriétaire et parfois leur niveau de sensibilité.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la découverte, la compréhension et la gouvernance des données', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement la qualité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données inutilisées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la lignée des données est-elle importante ?',
                        'explanation' => 'La data lineage permet de comprendre l’origine, les transformations et les usages d’une donnée.',
                        'choices' => [
                            ['choice_text' => 'Identifier d’où vient une donnée et comment elle a été transformée', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les données sont toujours exactes', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les systèmes sources', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de master data doit-elle éviter plusieurs vérités contradictoires ?',
                        'explanation' => 'Lorsque plusieurs systèmes deviennent des sources concurrentes pour la même donnée métier, les incohérences deviennent difficiles à contrôler.',
                        'choices' => [
                            ['choice_text' => 'Réduire les divergences entre les systèmes qui représentent la même donnée métier', 'is_correct' => true],
                            ['choice_text' => 'Forcer toutes les données à vivre dans une seule base', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les systèmes opérationnels', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’une donnée n’aura jamais plusieurs usages', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de rétention doit-elle tenir compte de la valeur métier et des obligations de conservation ?',
                        'explanation' => 'Conserver trop longtemps augmente coûts et risques ; conserver trop peu peut empêcher un usage métier ou réglementaire.',
                        'choices' => [
                            ['choice_text' => 'Équilibrer utilité, risques, coûts et obligations de conservation', 'is_correct' => true],
                            ['choice_text' => 'Conserver systématiquement toutes les données pour toujours', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données dès qu’elles ne sont plus consultées quotidiennement', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute politique de suppression', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le chiffrement ne remplace-t-il pas la gouvernance des accès aux données ?',
                        'explanation' => 'Une donnée peut être chiffrée mais toujours accessible à une identité qui dispose de permissions excessives.',
                        'choices' => [
                            ['choice_text' => 'Le chiffrement protège les données mais ne détermine pas qui peut légitimement les utiliser', 'is_correct' => true],
                            ['choice_text' => 'Le chiffrement donne automatiquement les permissions nécessaires', 'is_correct' => false],
                            ['choice_text' => 'Les permissions deviennent inutiles avec le chiffrement', 'is_correct' => false],
                            ['choice_text' => 'Le chiffrement remplace les politiques de rétention', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les architectures analytiques doivent-elles considérer le coût du mouvement des données ?',
                        'explanation' => 'Déplacer de gros volumes entre systèmes, régions ou clouds peut coûter cher et ajouter de la latence.',
                        'choices' => [
                            ['choice_text' => 'Les transferts de données peuvent devenir un coût et une contrainte de performance majeurs', 'is_correct' => true],
                            ['choice_text' => 'Le mouvement des données est toujours gratuit', 'is_correct' => false],
                            ['choice_text' => 'Les données analytiques ne circulent jamais entre systèmes', 'is_correct' => false],
                            ['choice_text' => 'Le réseau n’a aucun effet sur l’architecture des données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture de données distribuée doit-elle expliciter la cohérence attendue ?',
                        'explanation' => 'Les différents consommateurs peuvent avoir des besoins différents et les choix de cohérence ont des coûts techniques.',
                        'choices' => [
                            ['choice_text' => 'Les besoins métier déterminent le niveau de cohérence acceptable', 'is_correct' => true],
                            ['choice_text' => 'Toutes les données doivent avoir exactement le même modèle de cohérence', 'is_correct' => false],
                            ['choice_text' => 'La cohérence est toujours gratuite', 'is_correct' => false],
                            ['choice_text' => 'Les données distribuées n’ont pas de cohérence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester la restauration des données selon les objectifs métier ?',
                        'explanation' => 'La réussite technique d’une restauration ne suffit pas si elle ne respecte pas les délais ou la précision nécessaires au métier.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que la récupération réelle respecte les besoins de continuité du métier', 'is_correct' => true],
                            ['choice_text' => 'Garantir que toutes les données seront restaurées instantanément', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests techniques', 'is_correct' => false],
                            ['choice_text' => 'Éviter les sauvegardes historiques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Professional — Cloud, hybride et multi-cloud',
                'description' => 'Évaluez les choix professionnels liés aux architectures cloud, hybrides et multi-cloud, notamment gouvernance, résilience et portabilité.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une stratégie multi-cloud ne doit-elle pas être adoptée uniquement pour éviter le vendor lock-in ?',
                        'explanation' => 'Le multi-cloud apporte aussi de la complexité, des coûts opérationnels et des différences de compétences.',
                        'choices' => [
                            ['choice_text' => 'Le bénéfice de diversification doit être comparé aux coûts et à la complexité ajoutés', 'is_correct' => true],
                            ['choice_text' => 'Le multi-cloud supprime toujours tous les risques de dépendance', 'is_correct' => false],
                            ['choice_text' => 'Chaque cloud possède exactement les mêmes services', 'is_correct' => false],
                            ['choice_text' => 'Le multi-cloud garantit systématiquement un coût inférieur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’architecture hybride doit-elle gérer explicitement l’identité entre environnements ?',
                        'explanation' => 'Les utilisateurs et workloads doivent conserver un modèle de contrôle cohérent malgré la diversité des plateformes.',
                        'choices' => [
                            ['choice_text' => 'Éviter des politiques d’accès incohérentes entre environnements', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute identité locale', 'is_correct' => false],
                            ['choice_text' => 'Garantir que toutes les plateformes utilisent la même technologie IAM', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute fédération d’identité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture hybride doit-elle mesurer la latence entre environnements ?',
                        'explanation' => 'Une dépendance traversant un réseau long ou instable peut dégrader fortement les performances d’un service.',
                        'choices' => [
                            ['choice_text' => 'Les communications inter-environnements peuvent devenir un facteur déterminant de performance', 'is_correct' => true],
                            ['choice_text' => 'La latence réseau disparaît dans les architectures hybrides', 'is_correct' => false],
                            ['choice_text' => 'Tous les appels inter-cloud sont instantanés', 'is_correct' => false],
                            ['choice_text' => 'La performance dépend uniquement du CPU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi externaliser une charge vers le cloud ne signifie-t-il pas automatiquement qu’elle sera moins chère ?',
                        'explanation' => 'Les coûts dépendent du volume, du modèle de consommation, des transferts, des licences et de la gestion.',
                        'choices' => [
                            ['choice_text' => 'Le coût total dépend de l’usage, des transferts, des services et des opérations', 'is_correct' => true],
                            ['choice_text' => 'Le cloud est toujours moins cher que le on-premises', 'is_correct' => false],
                            ['choice_text' => 'Les transferts sont toujours gratuits', 'is_correct' => false],
                            ['choice_text' => 'Le coût d’exploitation disparaît totalement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de portabilité doit-elle être sélective ?',
                        'explanation' => 'Chercher une portabilité parfaite peut empêcher de profiter des services natifs utiles à l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'La portabilité doit être recherchée là où sa valeur dépasse la complexité qu’elle impose', 'is_correct' => true],
                            ['choice_text' => 'Toute dépendance cloud doit être éliminée', 'is_correct' => false],
                            ['choice_text' => 'La portabilité n’a jamais de valeur', 'is_correct' => false],
                            ['choice_text' => 'Une architecture portable est toujours moins chère', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépendances cloud propriétaires doivent-elles être documentées ?',
                        'explanation' => 'Une connaissance explicite des dépendances permet d’évaluer les risques, les coûts futurs et les options de migration.',
                        'choices' => [
                            ['choice_text' => 'Évaluer la dépendance réelle et préparer les scénarios d’évolution', 'is_correct' => true],
                            ['choice_text' => 'Garantir une migration instantanée', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les services propriétaires automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute utilisation du cloud', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi centraliser certaines politiques cloud tout en gardant une autonomie locale ?',
                        'explanation' => 'Les politiques globales apportent cohérence et sécurité, tandis que l’autonomie permet de répondre aux besoins spécifiques.',
                        'choices' => [
                            ['choice_text' => 'Combiner cohérence de gouvernance et autonomie contrôlée des équipes', 'is_correct' => true],
                            ['choice_text' => 'Centraliser absolument toutes les décisions', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute gouvernance centrale', 'is_correct' => false],
                            ['choice_text' => 'Donner des privilèges identiques à toutes les équipes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les architectures multi-région doivent-elles considérer la réplication des secrets et de l’identité ?',
                        'explanation' => 'Un service peut être correctement répliqué mais devenir inutilisable si ses identités, clés ou certificats ne sont pas disponibles dans la région de secours.',
                        'choices' => [
                            ['choice_text' => 'Les éléments de sécurité sont eux aussi des dépendances critiques de la reprise', 'is_correct' => true],
                            ['choice_text' => 'Les identités sont automatiquement disponibles partout', 'is_correct' => false],
                            ['choice_text' => 'Les secrets n’ont aucun rôle dans la disponibilité', 'is_correct' => false],
                            ['choice_text' => 'Une région de secours ne nécessite jamais d’authentification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie cloud doit-elle inclure des contrôles de configuration continue ?',
                        'explanation' => 'La configuration des ressources évolue et peut dériver des standards définis.',
                        'choices' => [
                            ['choice_text' => 'Détecter les écarts de configuration avant qu’ils ne deviennent des incidents', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les ressources ne changeront jamais', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’IaC', 'is_correct' => false],
                            ['choice_text' => 'Éviter les audits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur critère pour décider si une charge doit rester on-premises ou migrer vers le cloud ?',
                        'explanation' => 'La décision dépend de plusieurs facteurs : contraintes métier, performance, réglementation, coûts, compétences et résilience.',
                        'choices' => [
                            ['choice_text' => 'Le meilleur compromis entre contraintes métier, coût, performance, sécurité et résilience', 'is_correct' => true],
                            ['choice_text' => 'Le coût du serveur uniquement', 'is_correct' => false],
                            ['choice_text' => 'La popularité actuelle du fournisseur cloud', 'is_correct' => false],
                            ['choice_text' => 'La préférence personnelle de l’équipe', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Professional — Security Architecture et Zero Trust',
                'description' => 'Analysez la sécurité à l’échelle architecture : Zero Trust, identité, segmentation, secrets, supply chain et détection.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une architecture Zero Trust doit-elle traiter les identités de workload comme des sujets de première classe ?',
                        'explanation' => 'Les services et workloads prennent des décisions automatisées et peuvent posséder des permissions importantes.',
                        'choices' => [
                            ['choice_text' => 'Parce que les workloads peuvent eux-mêmes accéder à des ressources critiques', 'is_correct' => true],
                            ['choice_text' => 'Parce que seuls les utilisateurs humains peuvent être attaqués', 'is_correct' => false],
                            ['choice_text' => 'Parce que les services n’ont jamais besoin d’authentification', 'is_correct' => false],
                            ['choice_text' => 'Parce que les identités de service sont indépendantes du risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le contrôle d’accès basé uniquement sur le réseau est-il insuffisant ?',
                        'explanation' => 'Une identité située sur un réseau autorisé peut tout de même avoir des droits excessifs ou être compromise.',
                        'choices' => [
                            ['choice_text' => 'La localisation réseau ne décrit pas à elle seule l’identité ni les permissions légitimes', 'is_correct' => true],
                            ['choice_text' => 'Les réseaux ne peuvent jamais être segmentés', 'is_correct' => false],
                            ['choice_text' => 'Les firewalls n’ont aucune utilité', 'is_correct' => false],
                            ['choice_text' => 'Les utilisateurs internes sont toujours fiables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les secrets de configuration des secrets d’accès critique ?',
                        'explanation' => 'Tous les secrets n’ont pas la même criticité, rotation ou exposition et peuvent nécessiter des contrôles différents.',
                        'choices' => [
                            ['choice_text' => 'Adapter les contrôles, la rotation et l’exposition au niveau de sensibilité', 'is_correct' => true],
                            ['choice_text' => 'Permettre à toutes les applications de partager les mêmes secrets', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute gestion centralisée', 'is_correct' => false],
                            ['choice_text' => 'Garantir que les secrets ne seront jamais compromis', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les permissions temporaires sont-elles particulièrement pertinentes pour les comptes privilégiés ?',
                        'explanation' => 'Elles réduisent la fenêtre temporelle pendant laquelle un privilège élevé est exploitable.',
                        'choices' => [
                            ['choice_text' => 'Réduire la fenêtre d’exposition des privilèges élevés', 'is_correct' => true],
                            ['choice_text' => 'Garantir une disponibilité supérieure', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles d’identité', 'is_correct' => false],
                            ['choice_text' => 'Éviter la journalisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture de sécurité doit-elle prendre en compte le blast radius d’un compte compromis ?',
                        'explanation' => 'Le niveau de permissions d’un compte détermine la portée des actions possibles après compromission.',
                        'choices' => [
                            ['choice_text' => 'Pour limiter les conséquences d’une compromission à une zone ou fonction restreinte', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir qu’aucun compte ne sera compromis', 'is_correct' => false],
                            ['choice_text' => 'Pour donner des privilèges élevés par défaut', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les identités de service', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les journaux de sécurité doivent-ils être protégés contre l’altération ?',
                        'explanation' => 'Des logs modifiables par un attaquant permettent de masquer certains événements.',
                        'choices' => [
                            ['choice_text' => 'Préserver la fiabilité des preuves et des signaux utilisés pour les investigations', 'is_correct' => true],
                            ['choice_text' => 'Réduire la quantité de logs', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucune attaque ne sera réussie', 'is_correct' => false],
                            ['choice_text' => 'Éviter les contrôles d’accès', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la sécurité de la supply chain doit-elle couvrir les outils de build ?',
                        'explanation' => 'Un outil de build compromis peut produire des artefacts malveillants même si le code source est légitime.',
                        'choices' => [
                            ['choice_text' => 'Un outil compromis peut contaminer les artefacts produits par toute la chaîne', 'is_correct' => true],
                            ['choice_text' => 'Les outils de build ne peuvent jamais exécuter de code', 'is_correct' => false],
                            ['choice_text' => 'La supply chain ne concerne que les packages runtime', 'is_correct' => false],
                            ['choice_text' => 'Les artefacts générés sont toujours sûrs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi scanner les images et dépendances n’est-il pas suffisant pour sécuriser une architecture ?',
                        'explanation' => 'Les vulnérabilités peuvent aussi provenir des configurations, identités, réseaux, secrets et flux métier.',
                        'choices' => [
                            ['choice_text' => 'La sécurité doit couvrir aussi identité, configuration, réseau, secrets et comportement', 'is_correct' => true],
                            ['choice_text' => 'Les scans de dépendances sont inutiles', 'is_correct' => false],
                            ['choice_text' => 'Une image sans vulnérabilité connue est nécessairement sûre', 'is_correct' => false],
                            ['choice_text' => 'Les contrôles réseau ne sont jamais nécessaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un threat model doit-il évoluer avec l’architecture ?',
                        'explanation' => 'De nouvelles intégrations, données, utilisateurs ou services peuvent introduire de nouveaux chemins d’attaque.',
                        'choices' => [
                            ['choice_text' => 'Les changements de conception peuvent introduire de nouvelles menaces ou surfaces d’attaque', 'is_correct' => true],
                            ['choice_text' => 'Un threat model n’est utile qu’une seule fois', 'is_correct' => false],
                            ['choice_text' => 'Les menaces ne changent jamais', 'is_correct' => false],
                            ['choice_text' => 'Une architecture validée reste toujours identique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture sécurisée doit-elle intégrer la capacité de détection et de réponse ?',
                        'explanation' => 'Même avec de bonnes protections préventives, certaines attaques peuvent réussir et nécessiter une détection rapide.',
                        'choices' => [
                            ['choice_text' => 'Une protection préventive ne suffit pas à garantir qu’aucun incident ne se produira', 'is_correct' => true],
                            ['choice_text' => 'La détection rend les contrôles préventifs inutiles', 'is_correct' => false],
                            ['choice_text' => 'La réponse aux incidents concerne uniquement les équipes juridiques', 'is_correct' => false],
                            ['choice_text' => 'Les systèmes sécurisés ne doivent jamais être surveillés', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Professional — Migration, Modernisation et Transformation',
                'description' => 'Maîtrisez les stratégies professionnelles de migration de systèmes legacy, modernisation progressive et transformation architecturale.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une transformation legacy doit-elle commencer par une cartographie des flux et dépendances ?',
                        'explanation' => 'Les systèmes historiques possèdent souvent des dépendances implicites qui ne sont pas visibles dans la documentation officielle.',
                        'choices' => [
                            ['choice_text' => 'Découvrir les dépendances réelles avant de déplacer ou remplacer des composants', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer immédiatement les systèmes historiques', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une réécriture complète sans analyse', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les tests de compatibilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une approche strangler peut-elle réduire le risque par rapport à une réécriture totale ?',
                        'explanation' => 'Les fonctionnalités peuvent être migrées progressivement, ce qui limite l’ampleur de chaque changement.',
                        'choices' => [
                            ['choice_text' => 'Elle réduit le périmètre et le risque de chaque étape de transformation', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit une migration sans coexistence', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime le besoin d’intégration', 'is_correct' => false],
                            ['choice_text' => 'Elle impose toujours une nouvelle base unique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les migrations de données sont-elles souvent le point le plus risqué d’une transformation ?',
                        'explanation' => 'Les données possèdent une valeur métier durable et peuvent être partagées par plusieurs applications.',
                        'choices' => [
                            ['choice_text' => 'Une erreur de données peut affecter durablement plusieurs processus métier', 'is_correct' => true],
                            ['choice_text' => 'Les données peuvent toujours être recréées facilement', 'is_correct' => false],
                            ['choice_text' => 'Les bases de données ne possèdent aucune dépendance', 'is_correct' => false],
                            ['choice_text' => 'Le code est toujours plus critique que les données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une phase de double écriture avec prudence ?',
                        'explanation' => 'Écrire dans deux systèmes augmente les possibilités d’incohérence et demande une stratégie claire de reconciliation.',
                        'choices' => [
                            ['choice_text' => 'Elle peut créer des divergences qui nécessitent des mécanismes de réconciliation', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit automatiquement que les deux systèmes sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime le besoin de monitoring', 'is_correct' => false],
                            ['choice_text' => 'Elle rend les migrations instantanées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de migration doit-elle définir des critères d’arrêt ?',
                        'explanation' => 'Les équipes doivent savoir quand interrompre ou inverser une migration si les résultats dépassent les seuils acceptables.',
                        'choices' => [
                            ['choice_text' => 'Permettre une décision objective de continuer, suspendre ou rollbacker', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’une migration ne sera jamais arrêtée', 'is_correct' => false],
                            ['choice_text' => 'Éviter la collecte de métriques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la validation métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer la performance et le comportement avant une modernisation ?',
                        'explanation' => 'Une baseline permet de comparer le système ancien et le nouveau et de détecter les régressions.',
                        'choices' => [
                            ['choice_text' => 'Créer une référence objective pour mesurer les effets de la transformation', 'is_correct' => true],
                            ['choice_text' => 'Prouver que l’ancien système est toujours optimal', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout monitoring après migration', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les critères de succès', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une migration doit-elle prévoir une période de coexistence contrôlée ?',
                        'explanation' => 'Certaines transformations nécessitent que les anciennes et nouvelles capacités fonctionnent ensemble pendant une période.',
                        'choices' => [
                            ['choice_text' => 'Permettre des bascules progressives et limiter le risque de changement brutal', 'is_correct' => true],
                            ['choice_text' => 'Garantir que l’ancien système restera permanent', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests de validation', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute observation du comportement réel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les migrations doivent-elles traiter l’identité et les permissions comme des dépendances ?',
                        'explanation' => 'Une application migrée peut fonctionner techniquement mais rester inutilisable si elle ne peut plus authentifier ou autoriser les utilisateurs.',
                        'choices' => [
                            ['choice_text' => 'Une migration fonctionnelle peut échouer si les accès et identités ne suivent pas le nouveau système', 'is_correct' => true],
                            ['choice_text' => 'Les identités sont indépendantes des applications', 'is_correct' => false],
                            ['choice_text' => 'Les permissions sont toujours identiques entre plateformes', 'is_correct' => false],
                            ['choice_text' => 'La sécurité peut être ajoutée après la migration sans risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la modernisation doit-elle éviter de reproduire automatiquement tous les défauts du système legacy ?',
                        'explanation' => 'Une migration technique sans remise en question des limites historiques peut déplacer la dette sans améliorer réellement l’architecture.',
                        'choices' => [
                            ['choice_text' => 'Une migration devrait conserver le nécessaire tout en corrigeant les contraintes qui ne sont plus justifiées', 'is_correct' => true],
                            ['choice_text' => 'Toute fonctionnalité legacy doit être supprimée', 'is_correct' => false],
                            ['choice_text' => 'Une migration doit toujours produire exactement le même design', 'is_correct' => false],
                            ['choice_text' => 'Les règles métier anciennes sont toujours incorrectes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un bon critère pour décider si une capacité doit être modernisée ou simplement conservée ?',
                        'explanation' => 'La valeur métier, le coût de changement, le risque et la criticité doivent être comparés.',
                        'choices' => [
                            ['choice_text' => 'Comparer valeur métier, risque, coût de maintenance et bénéfice attendu de la transformation', 'is_correct' => true],
                            ['choice_text' => 'Choisir systématiquement les composants les plus anciens', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tout ce qui n’utilise pas le cloud', 'is_correct' => false],
                            ['choice_text' => 'Moderniser uniquement les composants les plus faciles', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Professional — Architecture de résilience et continuité',
                'description' => 'Évaluez la conception professionnelle de systèmes résilients, de plans de reprise et de stratégies de continuité.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi un RTO strict peut-il influencer fortement le coût d’une architecture ?',
                        'explanation' => 'Un temps de reprise très court peut nécessiter duplication, automatisation, ressources de secours et procédures avancées.',
                        'choices' => [
                            ['choice_text' => 'Une reprise très rapide nécessite généralement davantage de préparation et de ressources', 'is_correct' => true],
                            ['choice_text' => 'Le RTO n’a aucun rapport avec l’architecture', 'is_correct' => false],
                            ['choice_text' => 'Un RTO plus strict réduit toujours les coûts', 'is_correct' => false],
                            ['choice_text' => 'La reprise rapide peut être obtenue sans aucun investissement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le RPO doit-il être analysé séparément du RTO ?',
                        'explanation' => 'Le RTO concerne le temps nécessaire à la reprise, tandis que le RPO concerne la quantité de données que l’organisation accepte potentiellement de perdre.',
                        'choices' => [
                            ['choice_text' => 'Ils mesurent deux dimensions différentes : délai de reprise et perte de données acceptable', 'is_correct' => true],
                            ['choice_text' => 'Les deux indicateurs représentent exactement la même chose', 'is_correct' => false],
                            ['choice_text' => 'Le RPO concerne uniquement les serveurs', 'is_correct' => false],
                            ['choice_text' => 'Le RTO ne concerne jamais les données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de backup 3-2-1 peut-elle être pertinente ?',
                        'explanation' => 'Elle cherche à éviter qu’un incident unique compromette toutes les copies de données.',
                        'choices' => [
                            ['choice_text' => 'Elle diversifie les copies et emplacements pour réduire le risque de perte simultanée', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit que les sauvegardes ne peuvent jamais être compromises', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime le besoin de tester les restaurations', 'is_correct' => false],
                            ['choice_text' => 'Elle nécessite toujours trois fournisseurs cloud différents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une sauvegarde immuable est-elle importante dans certains scénarios de ransomware ?',
                        'explanation' => 'Elle réduit la possibilité qu’un attaquant ayant compromis les systèmes sources puisse supprimer ou modifier les copies de sauvegarde.',
                        'choices' => [
                            ['choice_text' => 'Elle réduit le risque que les sauvegardes soient elles-mêmes altérées ou supprimées', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit que le système source ne sera pas compromis', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace tous les contrôles d’accès', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine le besoin de restauration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester la reprise avec des utilisateurs ou scénarios représentatifs du métier ?',
                        'explanation' => 'Une reprise techniquement réussie peut échouer à répondre aux besoins réels si certaines fonctions métier critiques ne sont pas disponibles.',
                        'choices' => [
                            ['choice_text' => 'Valider que la reprise restaure réellement les fonctions métier attendues', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les tests techniques', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro perte de données', 'is_correct' => false],
                            ['choice_text' => 'Éviter les exercices futurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les exercices de disaster recovery doivent-ils mesurer les temps réels ?',
                        'explanation' => 'Les temps observés permettent de comparer la capacité réelle aux objectifs RTO définis.',
                        'choices' => [
                            ['choice_text' => 'Vérifier si la capacité opérationnelle respecte les objectifs de reprise', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que les exercices seront toujours plus rapides', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les procédures', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les métriques de production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépendances d’identité doivent-elles être incluses dans les plans de reprise ?',
                        'explanation' => 'Un service restauré peut rester inutilisable si ses utilisateurs ou services ne peuvent plus s’authentifier.',
                        'choices' => [
                            ['choice_text' => 'La disponibilité des identités et permissions est nécessaire au fonctionnement des services', 'is_correct' => true],
                            ['choice_text' => 'L’authentification est indépendante de la disponibilité', 'is_correct' => false],
                            ['choice_text' => 'Les services de reprise n’ont jamais besoin d’identité', 'is_correct' => false],
                            ['choice_text' => 'Les permissions peuvent toujours être ignorées pendant une reprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les scénarios de continuité doivent-ils inclure les erreurs humaines ?',
                        'explanation' => 'Certaines interruptions proviennent de mauvaises configurations, suppressions accidentelles ou changements incorrects.',
                        'choices' => [
                            ['choice_text' => 'Les incidents majeurs peuvent être provoqués par des actions humaines incorrectes', 'is_correct' => true],
                            ['choice_text' => 'Les erreurs humaines ne touchent jamais les infrastructures modernes', 'is_correct' => false],
                            ['choice_text' => 'La redondance empêche toutes les erreurs humaines', 'is_correct' => false],
                            ['choice_text' => 'Les erreurs humaines sont uniquement un problème de formation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la reprise doit-elle être conçue comme un processus et non comme un simple backup ?',
                        'explanation' => 'La continuité nécessite des procédures, dépendances, rôles, ressources, communications et validation.',
                        'choices' => [
                            ['choice_text' => 'La récupération exige des procédures, des responsabilités et des dépendances maîtrisées', 'is_correct' => true],
                            ['choice_text' => 'Les backups restaurent automatiquement toute l’organisation', 'is_correct' => false],
                            ['choice_text' => 'Le backup suffit toujours à satisfaire un RTO', 'is_correct' => false],
                            ['choice_text' => 'Les équipes n’ont aucun rôle pendant la reprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur montre le mieux qu’une stratégie de continuité est réellement maîtrisée ?',
                        'explanation' => 'La maturité se démontre par des exercices réussis avec des résultats mesurés et des corrections des écarts.',
                        'choices' => [
                            ['choice_text' => 'La capacité démontrée à restaurer les fonctions critiques selon les objectifs définis', 'is_correct' => true],
                            ['choice_text' => 'Le nombre total de sauvegardes uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de documents produits', 'is_correct' => false],
                            ['choice_text' => 'La quantité de stockage de secours disponible', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Professional — Architecture de plateforme et opérations',
                'description' => 'Maîtrisez les principes de plateforme interne, automatisation, observabilité, self-service et excellence opérationnelle.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une plateforme interne doit-elle fournir des interfaces self-service plutôt que dépendre de tickets pour chaque opération ?',
                        'explanation' => 'Le self-service réduit les délais et permet aux équipes de réaliser les opérations standards sans intervention manuelle répétitive.',
                        'choices' => [
                            ['choice_text' => 'Réduire les délais et les tâches manuelles répétitives pour les demandes standard', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute gouvernance', 'is_correct' => false],
                            ['choice_text' => 'Donner un accès administrateur global à tous', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute automatisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les capacités self-service doivent-elles être accompagnées de guardrails ?',
                        'explanation' => 'Sans garde-fous, le self-service peut produire des configurations non conformes, dangereuses ou coûteuses.',
                        'choices' => [
                            ['choice_text' => 'Permettre l’autonomie tout en empêchant les usages qui dépassent les contraintes acceptées', 'is_correct' => true],
                            ['choice_text' => 'Interdire tout self-service', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles de conformité', 'is_correct' => false],
                            ['choice_text' => 'Donner des privilèges root permanents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les plateformes internes doivent-elles suivre leur propre disponibilité ?',
                        'explanation' => 'Une plateforme critique qui permet les déploiements devient elle-même une dépendance opérationnelle importante.',
                        'choices' => [
                            ['choice_text' => 'Une indisponibilité de la plateforme peut bloquer les flux de développement et déploiement', 'is_correct' => true],
                            ['choice_text' => 'Les plateformes internes ne sont jamais critiques', 'is_correct' => false],
                            ['choice_text' => 'Le monitoring n’est nécessaire qu’en production applicative', 'is_correct' => false],
                            ['choice_text' => 'La disponibilité n’a pas de valeur pour les développeurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer le temps nécessaire pour passer du code à un environnement de test ?',
                        'explanation' => 'Ce délai permet d’identifier les goulots du parcours développeur.',
                        'choices' => [
                            ['choice_text' => 'Identifier les frictions et améliorer le flux de livraison', 'is_correct' => true],
                            ['choice_text' => 'Garantir zéro erreur applicative', 'is_correct' => false],
                            ['choice_text' => 'Mesurer uniquement la performance du réseau', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de pipelines', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une plateforme interne doit-elle fournir des modèles observables par défaut ?',
                        'explanation' => 'L’observabilité intégrée réduit le travail répétitif nécessaire pour rendre chaque service exploitable.',
                        'choices' => [
                            ['choice_text' => 'Rendre les services exploitables avec moins d’effort manuel et de configuration spécifique', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les choix des équipes', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro incident', 'is_correct' => false],
                            ['choice_text' => 'Éviter les métriques métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une plateforme ne doit-elle pas exposer tous les détails infrastructurels aux développeurs ?',
                        'explanation' => 'L’abstraction réduit la charge cognitive et permet de standardiser les chemins courants.',
                        'choices' => [
                            ['choice_text' => 'Masquer la complexité inutile tout en conservant les contrôles nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les développeurs de comprendre leur application', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute possibilité de diagnostic', 'is_correct' => false],
                            ['choice_text' => 'Éviter la documentation technique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture de plateforme doit-elle limiter les privilèges de ses propres composants ?',
                        'explanation' => 'Une compromission de la plateforme pourrait exposer de nombreux services et environnements.',
                        'choices' => [
                            ['choice_text' => 'Réduire le rayon d’impact d’une compromission de la plateforme centrale', 'is_correct' => true],
                            ['choice_text' => 'Donner tous les privilèges aux composants centraux', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la séparation des environnements', 'is_correct' => false],
                            ['choice_text' => 'Éviter les audits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une plateforme de déploiement doit-elle disposer de mécanismes de rollback ?',
                        'explanation' => 'La plateforme contrôle souvent des changements à grande échelle et doit permettre un retour rapide à une version stable.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact des déploiements défaillants à grande échelle', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les déploiements échoueront rarement sans test', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le versioning', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute release progressive', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les métriques d’adoption sont-elles importantes pour une plateforme interne ?',
                        'explanation' => 'Une plateforme peut être techniquement sophistiquée mais créer peu de valeur si les équipes ne l’utilisent pas ou la contournent.',
                        'choices' => [
                            ['choice_text' => 'Mesurer si la plateforme répond réellement aux besoins des équipes', 'is_correct' => true],
                            ['choice_text' => 'Garantir une meilleure performance réseau', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les tests de production', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout feedback utilisateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un signe qu’une plateforme interne est devenue une source de dette ?',
                        'explanation' => 'Une plateforme peut devenir un problème lorsqu’elle exige des contournements, une expertise excessive ou des opérations manuelles.',
                        'choices' => [
                            ['choice_text' => 'Les équipes contournent régulièrement la plateforme parce qu’elle ajoute plus de friction que de valeur', 'is_correct' => true],
                            ['choice_text' => 'La plateforme possède des standards', 'is_correct' => false],
                            ['choice_text' => 'La plateforme fournit du self-service', 'is_correct' => false],
                            ['choice_text' => 'Les équipes utilisent des templates communs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Professional — Architecture Decision Records et trade-offs',
                'description' => 'Évaluez la capacité à prendre, justifier et réévaluer des décisions architecturales complexes.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quelle information est la plus importante dans un Architecture Decision Record ?',
                        'explanation' => 'L’ADR doit surtout préserver le contexte, la décision, les alternatives et les conséquences afin de rendre le choix compréhensible dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Le contexte, la décision, les alternatives considérées et ses conséquences', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le nom du fournisseur sélectionné', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le budget initial', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le schéma technique final', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les options rejetées dans une décision importante ?',
                        'explanation' => 'Les options rejetées expliquent pourquoi la décision a été prise et évitent de répéter la même analyse plus tard.',
                        'choices' => [
                            ['choice_text' => 'Conserver les compromis et éviter de rouvrir inutilement les mêmes alternatives', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’une alternative ne sera jamais utilisée', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les débats futurs', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute réévaluation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une décision architecturale doit-elle mentionner ses hypothèses ?',
                        'explanation' => 'Une décision peut devenir incorrecte lorsque ses hypothèses de départ changent.',
                        'choices' => [
                            ['choice_text' => 'Permettre de réévaluer la décision lorsque les hypothèses ne sont plus valides', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les hypothèses resteront vraies', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute mesure après déploiement', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les exigences métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture peut-elle nécessiter des décisions différentes selon les domaines ?',
                        'explanation' => 'Les contraintes de sécurité, performance, cohérence, coût et criticité varient selon les contextes.',
                        'choices' => [
                            ['choice_text' => 'Les besoins et contraintes peuvent différer fortement d’un domaine à l’autre', 'is_correct' => true],
                            ['choice_text' => 'Tous les domaines ont exactement les mêmes priorités', 'is_correct' => false],
                            ['choice_text' => 'Une architecture d’entreprise doit toujours utiliser une seule technologie', 'is_correct' => false],
                            ['choice_text' => 'La standardisation interdit toute exception', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût d’opportunité fait-il partie d’un trade-off architectural ?',
                        'explanation' => 'Investir du temps et des ressources dans une option signifie ne pas les investir ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Une décision consomme des ressources qui ne pourront pas être utilisées simultanément pour d’autres priorités', 'is_correct' => true],
                            ['choice_text' => 'Le coût d’opportunité concerne uniquement la finance', 'is_correct' => false],
                            ['choice_text' => 'Une décision technique n’a jamais de coût indirect', 'is_correct' => false],
                            ['choice_text' => 'Les choix architecturaux ne consomment pas de temps', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture trop optimisée pour un scénario actuel peut devenir problématique ?',
                        'explanation' => 'Une optimisation extrême pour une charge ou un usage temporaire peut limiter l’évolution future.',
                        'choices' => [
                            ['choice_text' => 'Elle peut réduire la flexibilité future pour un bénéfice local ou temporaire', 'is_correct' => true],
                            ['choice_text' => 'Une optimisation locale améliore toujours toute l’architecture', 'is_correct' => false],
                            ['choice_text' => 'Les scénarios futurs sont toujours identiques aux scénarios actuels', 'is_correct' => false],
                            ['choice_text' => 'L’optimisation rend toute dette technique impossible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture professionnelle doit-elle distinguer réversibilité et irréversibilité ?',
                        'explanation' => 'Les décisions difficiles à inverser méritent souvent davantage d’analyse avant engagement.',
                        'choices' => [
                            ['choice_text' => 'Les décisions difficiles à annuler nécessitent généralement une analyse plus approfondie', 'is_correct' => true],
                            ['choice_text' => 'Toutes les décisions sont également faciles à annuler', 'is_correct' => false],
                            ['choice_text' => 'Une décision irréversible ne doit jamais être prise', 'is_correct' => false],
                            ['choice_text' => 'La réversibilité concerne uniquement le code', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi réaliser un proof of concept pour certaines décisions à forte incertitude ?',
                        'explanation' => 'Un prototype ciblé peut réduire rapidement l’incertitude technique avant un engagement à grande échelle.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’incertitude technique avant un investissement important', 'is_correct' => true],
                            ['choice_text' => 'Remplacer définitivement les tests de production', 'is_correct' => false],
                            ['choice_text' => 'Garantir que la solution finale sera parfaite', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute comparaison entre options', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un ADR devrait-il pouvoir être remplacé ou supersédé ?',
                        'explanation' => 'Une bonne gouvernance accepte qu’une décision devienne obsolète lorsque les contraintes ou objectifs changent.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une décision architecturale peut devenir inadaptée avec le temps', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’aucune décision ne doit rester en vigueur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ADR sont temporaires par définition', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer tout historique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur signe qu’un trade-off architectural a été correctement explicité ?',
                        'explanation' => 'Les parties prenantes doivent comprendre ce qui est gagné, ce qui est sacrifié et dans quelles conditions le choix reste valide.',
                        'choices' => [
                            ['choice_text' => 'Les bénéfices, coûts, risques et conditions de validité sont clairement compréhensibles', 'is_correct' => true],
                            ['choice_text' => 'Une seule option est présentée sans justification', 'is_correct' => false],
                            ['choice_text' => 'La décision est basée uniquement sur les préférences techniques', 'is_correct' => false],
                            ['choice_text' => 'Les risques ne sont pas mentionnés pour accélérer l’approbation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Professional — Architecture Cost, Risk et Value',
                'description' => 'Analysez les arbitrages avancés entre valeur métier, coût total, risques, performance et complexité.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi le coût total de possession est-il plus pertinent que le coût initial seul ?',
                        'explanation' => 'Une solution peu coûteuse à l’achat peut devenir chère à exploiter, sécuriser, maintenir ou faire évoluer.',
                        'choices' => [
                            ['choice_text' => 'Parce que les coûts d’exploitation, maintenance, sécurité et évolution peuvent dominer le coût initial', 'is_correct' => true],
                            ['choice_text' => 'Parce que le coût initial n’a jamais d’importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les solutions ont le même coût opérationnel', 'is_correct' => false],
                            ['choice_text' => 'Parce que le cloud supprime les coûts de maintenance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture plus simple peut-elle être préférable à une solution techniquement plus sophistiquée ?',
                        'explanation' => 'La simplicité peut réduire les risques, les besoins de compétences et la charge d’exploitation si elle satisfait les exigences.',
                        'choices' => [
                            ['choice_text' => 'Elle peut réduire la complexité et le coût opérationnel tout en respectant les exigences', 'is_correct' => true],
                            ['choice_text' => 'Les architectures simples sont toujours plus performantes', 'is_correct' => false],
                            ['choice_text' => 'Les systèmes sophistiqués sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'La complexité n’a jamais de valeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi évaluer le coût d’un incident dans les décisions d’architecture ?',
                        'explanation' => 'Une architecture plus chère peut être justifiée si elle réduit fortement la probabilité ou l’impact d’incidents coûteux.',
                        'choices' => [
                            ['choice_text' => 'Pour comparer l’investissement préventif au coût potentiel des défaillances', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir qu’aucun incident ne surviendra', 'is_correct' => false],
                            ['choice_text' => 'Pour ignorer la valeur métier', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les plans de reprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la complexité opérationnelle doit-elle être traitée comme un coût ?',
                        'explanation' => 'Chaque technologie et intégration supplémentaire demande des compétences, du monitoring, de la maintenance et du support.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle consomme du temps, des compétences et des ressources d’exploitation', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute complexité est nécessairement mauvaise', 'is_correct' => false],
                            ['choice_text' => 'Parce que la complexité ne concerne que le développement', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’exploitation est toujours automatisée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture à haute disponibilité peut-elle être injustifiée pour certains workloads ?',
                        'explanation' => 'Le coût et la complexité de la haute disponibilité doivent être proportionnels à la criticité du service.',
                        'choices' => [
                            ['choice_text' => 'Le niveau de résilience doit être proportionnel à la criticité et à la valeur du service', 'is_correct' => true],
                            ['choice_text' => 'La haute disponibilité est toujours inutile', 'is_correct' => false],
                            ['choice_text' => 'Tous les services ont les mêmes exigences', 'is_correct' => false],
                            ['choice_text' => 'La redondance est toujours trop chère', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque architectural doit-il être priorisé plutôt que simplement listé ?',
                        'explanation' => 'Une liste de risques sans impact, probabilité et stratégie de traitement n’aide pas à décider.',
                        'choices' => [
                            ['choice_text' => 'Pour concentrer les efforts sur les risques les plus significatifs', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les petits risques automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro risque', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les arbitrages', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les scénarios de croissance doivent-ils inclure les coûts ?',
                        'explanation' => 'Une architecture qui scale techniquement mais dont les coûts explosent peut devenir économiquement non viable.',
                        'choices' => [
                            ['choice_text' => 'Une croissance soutenable doit rester compatible avec les contraintes économiques', 'is_correct' => true],
                            ['choice_text' => 'Les coûts diminuent toujours avec la croissance', 'is_correct' => false],
                            ['choice_text' => 'Les dépenses ne dépendent pas du volume', 'is_correct' => false],
                            ['choice_text' => 'La scalabilité est uniquement une question technique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse de sensibilité peut-elle être utile dans une décision architecturale ?',
                        'explanation' => 'Elle montre comment le choix change lorsque certaines hypothèses comme le trafic, le coût ou le volume évoluent.',
                        'choices' => [
                            ['choice_text' => 'Identifier les hypothèses qui influencent le plus le résultat de la décision', 'is_correct' => true],
                            ['choice_text' => 'Garantir une prévision parfaite', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les scénarios alternatifs', 'is_correct' => false],
                            ['choice_text' => 'Éviter les données historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût de migration doit-il être inclus dans le TCO ?',
                        'explanation' => 'Une architecture peut sembler économique au quotidien mais exiger une transformation très coûteuse pour en sortir.',
                        'choices' => [
                            ['choice_text' => 'Le coût futur de changement ou de sortie fait partie de la décision économique globale', 'is_correct' => true],
                            ['choice_text' => 'Une migration future est toujours gratuite', 'is_correct' => false],
                            ['choice_text' => 'Le coût de changement concerne uniquement les applications legacy', 'is_correct' => false],
                            ['choice_text' => 'Le TCO doit exclure les évolutions futures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider un arbitrage entre performance et coût ?',
                        'explanation' => 'L’objectif n’est pas la performance maximale mais le niveau de performance nécessaire pour la valeur recherchée.',
                        'choices' => [
                            ['choice_text' => 'Obtenir le niveau de performance nécessaire au coût acceptable pour le métier', 'is_correct' => true],
                            ['choice_text' => 'Maximiser la performance quel que soit le coût', 'is_correct' => false],
                            ['choice_text' => 'Minimiser toujours le coût au détriment du service', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute mesure de performance', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IT Architecture Professional — Strategic Architecture Case Studies',
                'description' => 'Mettez à l’épreuve votre capacité à résoudre des situations d’architecture complexes à l’échelle entreprise.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une entreprise possède 40 applications qui accèdent directement au même schéma de base de données. Les changements sont devenus risqués. Quelle priorité architecturale est la plus pertinente ?',
                        'explanation' => 'Le partage direct du schéma crée un couplage très fort. La priorité consiste à établir des frontières et contrats plus stables avant de multiplier les changements.',
                        'choices' => [
                            ['choice_text' => 'Réduire progressivement le couplage au schéma partagé en établissant des contrats et frontières de domaine', 'is_correct' => true],
                            ['choice_text' => 'Ajouter davantage d’applications au même schéma', 'is_correct' => false],
                            ['choice_text' => 'Remplacer immédiatement toutes les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Interdire toute évolution fonctionnelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une plateforme critique a trois régions actives mais les opérations de failover sont entièrement manuelles. Quel risque reste important ?',
                        'explanation' => 'Une architecture très redondante reste vulnérable si la bascule dépend d’actions humaines lentes ou difficiles à exécuter sous pression.',
                        'choices' => [
                            ['choice_text' => 'Le temps et la fiabilité de récupération peuvent dépendre d’actions manuelles complexes', 'is_correct' => true],
                            ['choice_text' => 'La réplication devient inutile', 'is_correct' => false],
                            ['choice_text' => 'Les trois régions deviennent automatiquement indisponibles', 'is_correct' => false],
                            ['choice_text' => 'La disponibilité technique est toujours garantie par le nombre de régions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une organisation veut adopter 25 microservices pour une application auparavant monolithique, mais aucun problème de découplage ou de scalabilité n’a été identifié. Quelle décision est la plus professionnelle ?',
                        'explanation' => 'Le nombre de services ne doit pas être une fin en soi. La décomposition doit répondre à des problèmes ou frontières métier réelles.',
                        'choices' => [
                            ['choice_text' => 'Valider d’abord les besoins réels et éviter une décomposition distribuée sans justification', 'is_correct' => true],
                            ['choice_text' => 'Adopter les 25 services puisque les microservices sont modernes', 'is_correct' => false],
                            ['choice_text' => 'Créer 25 bases de données avant toute analyse', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les interfaces entre modules', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service cloud respecte ses SLO mais sa facture augmente de 40 % par trimestre. Quelle démarche est la plus appropriée ?',
                        'explanation' => 'Le respect du SLO ne signifie pas que l’architecture est économiquement optimale. Il faut analyser le coût par unité de valeur et les drivers de consommation.',
                        'choices' => [
                            ['choice_text' => 'Analyser les drivers de coût et rechercher des optimisations sans dégrader les SLO', 'is_correct' => true],
                            ['choice_text' => 'Réduire immédiatement la capacité sans mesurer les conséquences', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les coûts puisque les SLO sont respectés', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les mécanismes de résilience', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise souhaite migrer une application réglementée vers le cloud sans modifier les règles de conservation des données. Quel aspect doit être traité en priorité ?',
                        'explanation' => 'La localisation, la rétention, les contrôles d’accès, les journaux et la protection des données doivent être intégrés à l’architecture cible.',
                        'choices' => [
                            ['choice_text' => 'Mapper les exigences réglementaires sur les services, données et contrôles de l’architecture cible', 'is_correct' => true],
                            ['choice_text' => 'Migrer immédiatement puis ajouter la conformité plus tard', 'is_correct' => false],
                            ['choice_text' => 'Choisir le fournisseur le moins cher uniquement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un data lake rempli de données dont personne ne connaît réellement la provenance. Quelle faiblesse architecturale est la plus évidente ?',
                        'explanation' => 'L’absence de métadonnées et de lineage limite la compréhension, la gouvernance et la confiance dans les données.',
                        'choices' => [
                            ['choice_text' => 'Un manque de gouvernance, de métadonnées et de traçabilité des données', 'is_correct' => true],
                            ['choice_text' => 'Un manque de CPU uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un excès de APIs', 'is_correct' => false],
                            ['choice_text' => 'Une mauvaise stratégie de load balancing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un système distribué subit régulièrement des cascades de retries lorsqu’un service dépendant ralentit. Quelle combinaison est la plus adaptée ?',
                        'explanation' => 'Timeouts, backoff, circuit breakers et limitation des ressources permettent ensemble de réduire la propagation de la saturation.',
                        'choices' => [
                            ['choice_text' => 'Timeouts, retries contrôlés avec backoff, circuit breakers et isolation des ressources', 'is_correct' => true],
                            ['choice_text' => 'Retries illimités sans timeout', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les métriques', 'is_correct' => false],
                            ['choice_text' => 'Augmenter les timeouts sans autre changement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une organisation veut une plateforme self-service, mais certaines ressources sont réglementées et doivent être approuvées. Quelle architecture de plateforme convient le mieux ?',
                        'explanation' => 'Le self-service doit être différencié selon les niveaux de risque et intégrer les approbations uniquement lorsque nécessaire.',
                        'choices' => [
                            ['choice_text' => 'Un self-service avec politiques automatisées et contrôles renforcés pour les ressources sensibles', 'is_correct' => true],
                            ['choice_text' => 'Une procédure manuelle identique pour toutes les ressources', 'is_correct' => false],
                            ['choice_text' => 'Un accès administrateur global pour accélérer toutes les demandes', 'is_correct' => false],
                            ['choice_text' => 'Une interdiction complète du self-service', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut réduire son vendor lock-in mais l’équipe perdrait plusieurs fonctionnalités utiles en évitant les services cloud natifs. Quel raisonnement est le plus approprié ?',
                        'explanation' => 'La portabilité parfaite peut être très coûteuse. Il faut évaluer où l’indépendance est réellement stratégique.',
                        'choices' => [
                            ['choice_text' => 'Identifier les dépendances dont la réduction apporte une vraie valeur stratégique et accepter les autres lorsque le bénéfice le justifie', 'is_correct' => true],
                            ['choice_text' => 'Éliminer toute fonctionnalité cloud propriétaire sans analyse', 'is_correct' => false],
                            ['choice_text' => 'Ignorer totalement le risque de lock-in', 'is_correct' => false],
                            ['choice_text' => 'Choisir un multi-cloud identique pour tous les workloads', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une architecture respecte toutes les exigences techniques mais les équipes opérationnelles nécessitent cinq compétences rares différentes pour la maintenir. Quel problème doit être examiné ?',
                        'explanation' => 'Une architecture peut satisfaire les exigences techniques tout en étant trop coûteuse ou fragile à exploiter.',
                        'choices' => [
                            ['choice_text' => 'Le coût et la complexité opérationnels de la solution', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la taille du réseau', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le stockage', 'is_correct' => false],
                            ['choice_text' => 'La couleur des interfaces', 'is_correct' => false],
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