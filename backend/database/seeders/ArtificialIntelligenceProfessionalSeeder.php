<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArtificialIntelligenceProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'artificial-intelligence')->firstOrFail();

        $quizzes = [
            [
                'title' => 'IA Professional — Stratégie et gouvernance de l’IA',
                'description' => 'Évaluez les décisions professionnelles liées à la stratégie IA, à la gouvernance, aux risques et à l’adoption à l’échelle de l’entreprise.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quelle est la meilleure approche pour une organisation qui souhaite multiplier les usages de l’IA tout en conservant une gouvernance cohérente ?',
                        'explanation' => 'Une plateforme et une gouvernance communes permettent de standardiser les contrôles essentiels tout en laissant aux équipes une autonomie encadrée.',
                        'choices' => [
                            ['choice_text' => 'Laisser chaque équipe adopter ses propres pratiques sans standard commun', 'is_correct' => false],
                            ['choice_text' => 'Définir un cadre commun de gouvernance avec des contrôles et standards réutilisables', 'is_correct' => true],
                            ['choice_text' => 'Centraliser toutes les décisions dans une seule équipe sans autonomie', 'is_correct' => false],
                            ['choice_text' => 'Interdire les projets IA jusqu’à ce qu’un modèle unique soit disponible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la gouvernance IA doit-elle couvrir les données, les modèles et les applications ?',
                        'explanation' => 'Les risques peuvent apparaître à n’importe quelle étape : données de mauvaise qualité, modèle inadéquat ou application mal intégrée.',
                        'choices' => [
                            ['choice_text' => 'Parce que les risques existent sur l’ensemble du cycle de vie', 'is_correct' => true],
                            ['choice_text' => 'Parce que les modèles sont toujours indépendants des données', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’application finale n’a aucune importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que seules les données doivent être gouvernées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe devrait guider la priorisation des projets IA ?',
                        'explanation' => 'Les projets doivent être évalués selon leur valeur potentielle, leur faisabilité, leur risque et la capacité de l’organisation à les exploiter.',
                        'choices' => [
                            ['choice_text' => 'La combinaison de valeur métier, faisabilité, risque et capacité d’exécution', 'is_correct' => true],
                            ['choice_text' => 'La nouveauté technologique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La taille du modèle', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de paramètres du modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un projet IA très performant techniquement peut-il malgré tout être un mauvais investissement ?',
                        'explanation' => 'Un système peut avoir d’excellentes métriques mais produire peu de valeur, être trop coûteux, impossible à intégrer ou trop risqué à exploiter.',
                        'choices' => [
                            ['choice_text' => 'La performance technique ne garantit pas la valeur métier ni l’exploitabilité', 'is_correct' => true],
                            ['choice_text' => 'La performance technique n’a jamais d’importance', 'is_correct' => false],
                            ['choice_text' => 'Les coûts sont toujours négligeables', 'is_correct' => false],
                            ['choice_text' => 'Les risques sont éliminés par un bon benchmark', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle doit jouer une équipe centrale d’IA dans une grande entreprise ?',
                        'explanation' => 'Une équipe centrale peut fournir les standards, plateformes, compétences, composants réutilisables et bonnes pratiques sans nécessairement développer tous les cas d’usage.',
                        'choices' => [
                            ['choice_text' => 'Fournir capacités, standards et plateforme tout en permettant aux métiers de développer leurs usages', 'is_correct' => true],
                            ['choice_text' => 'Développer tous les modèles de toute l’entreprise seule', 'is_correct' => false],
                            ['choice_text' => 'Interdire tout développement par les équipes métier', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les responsables produits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir des niveaux de risque pour les systèmes IA ?',
                        'explanation' => 'Tous les systèmes n’ont pas les mêmes conséquences en cas d’erreur. Les niveaux de risque permettent d’adapter les contrôles.',
                        'choices' => [
                            ['choice_text' => 'Adapter la profondeur des contrôles au niveau de risque', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun système ne doit être surveillé', 'is_correct' => false],
                            ['choice_text' => 'Choisir automatiquement le modèle le plus grand', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les systèmes à faible risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un registre des modèles et applications IA peut-il être utile ?',
                        'explanation' => 'Il permet de savoir quels systèmes existent, qui les possède, quelles données ils utilisent et quel est leur niveau de criticité.',
                        'choices' => [
                            ['choice_text' => 'Maintenir une visibilité sur les systèmes IA, leurs responsables et leurs risques', 'is_correct' => true],
                            ['choice_text' => 'Garantir que tous les modèles sont exacts', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les équipes d’innover', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la documentation technique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les décisions d’architecture IA devraient-elles être documentées ?',
                        'explanation' => 'La documentation conserve les hypothèses, compromis et alternatives et facilite les futures évolutions du système.',
                        'choices' => [
                            ['choice_text' => 'Pour conserver le contexte et les raisons derrière les choix techniques', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute modification future', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les tests', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter la gouvernance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’une stratégie IA purement centralisée ?',
                        'explanation' => 'Une centralisation excessive peut ralentir les expérimentations et empêcher les équipes proches du métier de répondre rapidement à leurs besoins.',
                        'choices' => [
                            ['choice_text' => 'Une réduction de l’agilité et une augmentation du délai de mise en œuvre', 'is_correct' => true],
                            ['choice_text' => 'Une disparition automatique des risques', 'is_correct' => false],
                            ['choice_text' => 'Une meilleure connaissance métier garantie', 'is_correct' => false],
                            ['choice_text' => 'Une baisse systématique des coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel modèle organisationnel est souvent le plus efficace à grande échelle ?',
                        'explanation' => 'Un modèle fédéré combine des capacités centrales et des équipes IA proches des métiers, ce qui équilibre cohérence et autonomie.',
                        'choices' => [
                            ['choice_text' => 'Une gouvernance fédérée combinant plateforme centrale et équipes métier', 'is_correct' => true],
                            ['choice_text' => 'Une autonomie totale sans standards', 'is_correct' => false],
                            ['choice_text' => 'Une équipe unique développant tous les cas d’usage', 'is_correct' => false],
                            ['choice_text' => 'Aucune gouvernance formelle', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Professional — Architecture des plateformes IA',
                'description' => 'Évaluez les choix architecturaux pour construire des plateformes IA d’entreprise robustes et évolutives.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est l’intérêt principal d’une plateforme ML partagée ?',
                        'explanation' => 'Une plateforme commune évite de reconstruire les mêmes capacités de stockage, entraînement, déploiement, monitoring et gouvernance pour chaque équipe.',
                        'choices' => [
                            ['choice_text' => 'Fournir des capacités réutilisables pour accélérer et standardiser les projets ML', 'is_correct' => true],
                            ['choice_text' => 'Forcer toutes les équipes à utiliser le même modèle', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’autonomie des développeurs', 'is_correct' => false],
                            ['choice_text' => 'Éliminer les besoins de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture IA doit-elle séparer expérimentation et production ?',
                        'explanation' => 'Les expérimentations sont souvent instables ou temporaires. Les isoler réduit le risque qu’elles affectent directement les systèmes critiques.',
                        'choices' => [
                            ['choice_text' => 'Réduire les risques liés aux expérimentations et aux changements non contrôlés', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les chercheurs de tester de nouveaux modèles', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les environnements de test', 'is_correct' => false],
                            ['choice_text' => 'Rendre tous les modèles publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est essentiel lorsqu’une plateforme IA supporte plusieurs équipes ?',
                        'explanation' => 'Les ressources et données doivent être séparées selon les tenants, équipes ou projets afin de limiter les accès croisés accidentels.',
                        'choices' => [
                            ['choice_text' => 'Une isolation claire des données, identités et ressources entre équipes', 'is_correct' => true],
                            ['choice_text' => 'Un compte administrateur partagé', 'is_correct' => false],
                            ['choice_text' => 'Des datasets communs sans restrictions', 'is_correct' => false],
                            ['choice_text' => 'L’absence de journalisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une feature store peut-elle être une capacité de plateforme stratégique ?',
                        'explanation' => 'Elle peut standardiser les features, leur découverte, leur qualité et leur cohérence entre entraînement et inférence.',
                        'choices' => [
                            ['choice_text' => 'Elle facilite la réutilisation et la cohérence des features entre modèles', 'is_correct' => true],
                            ['choice_text' => 'Elle remplace tous les modèles', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime le preprocessing', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit l’absence de biais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal bénéfice d’un model registry à l’échelle d’une entreprise ?',
                        'explanation' => 'Le registry permet de centraliser les versions, métadonnées, statuts de validation et historique des modèles.',
                        'choices' => [
                            ['choice_text' => 'Centraliser la gestion du cycle de vie et des versions des modèles', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement des labels', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une architecture IA devrait-elle prévoir la traçabilité des modèles déployés ?',
                        'explanation' => 'Il faut être capable de relier un résultat à la version du modèle, aux données et aux configurations utilisées.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier précisément la version et le contexte ayant produit un résultat', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que tous les résultats sont exacts', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les mises à jour', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter le versioning des datasets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis existe dans une plateforme IA fortement standardisée ?',
                        'explanation' => 'La standardisation accélère l’exploitation et la gouvernance mais peut limiter certains cas d’usage très spécifiques.',
                        'choices' => [
                            ['choice_text' => 'Cohérence et efficacité contre flexibilité maximale', 'is_correct' => true],
                            ['choice_text' => 'Sécurité contre impossibilité d’entraîner', 'is_correct' => false],
                            ['choice_text' => 'Coût contre absence de données', 'is_correct' => false],
                            ['choice_text' => 'Qualité contre stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une plateforme IA doit-elle proposer des interfaces automatisables ?',
                        'explanation' => 'Des API et workflows automatisés facilitent l’intégration avec les pipelines, systèmes métier et outils de développement.',
                        'choices' => [
                            ['choice_text' => 'Permettre l’intégration et l’automatisation des processus IA', 'is_correct' => true],
                            ['choice_text' => 'Supprimer l’observabilité', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute gouvernance', 'is_correct' => false],
                            ['choice_text' => 'Rendre les modèles accessibles sans authentification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une plateforme ML doit-elle traiter la gestion des coûts GPU ?',
                        'explanation' => 'Les ressources GPU peuvent être coûteuses et très demandées. Une plateforme doit donc optimiser leur utilisation et suivre leur consommation.',
                        'choices' => [
                            ['choice_text' => 'Parce que les ressources accélérées peuvent être coûteuses et limitées', 'is_correct' => true],
                            ['choice_text' => 'Parce que les GPU ne consomment jamais d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les GPU remplacent les datasets', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût n’influence jamais l’architecture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une couche d’abstraction au-dessus de plusieurs modèles ou fournisseurs IA ?',
                        'explanation' => 'Une abstraction peut réduire certains couplages et faciliter le changement de fournisseur ou de modèle, au prix d’une couche supplémentaire à maintenir.',
                        'choices' => [
                            ['choice_text' => 'Réduire certains couplages entre les applications et les fournisseurs de modèles', 'is_correct' => true],
                            ['choice_text' => 'Garantir les mêmes performances avec tous les modèles', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les coûts de modèle', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute personnalisation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Professional — LLM, agents et systèmes d’entreprise',
                'description' => 'Analysez les architectures professionnelles basées sur les LLM, RAG, agents, outils et workflows.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel principe est le plus important lorsqu’un LLM est utilisé comme interface à des systèmes métier sensibles ?',
                        'explanation' => 'Le modèle doit être considéré comme une couche de décision ou de génération non fiable et encadré par des contrôles déterministes.',
                        'choices' => [
                            ['choice_text' => 'Encadrer les actions du modèle par des autorisations et validations déterministes', 'is_correct' => true],
                            ['choice_text' => 'Donner au LLM un accès administrateur global', 'is_correct' => false],
                            ['choice_text' => 'Faire confiance à toutes les sorties', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les logs pour préserver la confidentialité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des outils spécialisés plutôt que demander au LLM de produire directement certains résultats déterministes ?',
                        'explanation' => 'Les outils spécialisés peuvent exécuter des opérations précises et vérifiables, tandis que le LLM est principalement utilisé pour comprendre ou orchestrer la demande.',
                        'choices' => [
                            ['choice_text' => 'Pour déléguer les calculs ou actions déterministes à des composants appropriés', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre le LLM plus créatif', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute validation', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les API', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’un agent possédant trop d’outils et de permissions ?',
                        'explanation' => 'Un agent compromis, mal configuré ou manipulé peut utiliser ces capacités pour produire un impact important.',
                        'choices' => [
                            ['choice_text' => 'Un rayon d’action excessif en cas d’erreur ou de compromission', 'is_correct' => true],
                            ['choice_text' => 'Une réduction automatique du coût', 'is_correct' => false],
                            ['choice_text' => 'Une meilleure factualité', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des logs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un système RAG d’entreprise doit-il intégrer des contrôles d’autorisation au niveau des documents ?',
                        'explanation' => 'Un retrieval sémantique ne doit pas permettre à un utilisateur de récupérer des documents qu’il n’est pas autorisé à consulter.',
                        'choices' => [
                            ['choice_text' => 'Empêcher le modèle de récupérer des informations auxquelles l’utilisateur n’a pas accès', 'is_correct' => true],
                            ['choice_text' => 'Rendre la recherche plus créative', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les embeddings', 'is_correct' => false],
                            ['choice_text' => 'Garantir des réponses sans hallucinations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme est adapté pour les actions IA à fort impact nécessitant validation humaine ?',
                        'explanation' => 'Un human-in-the-loop permet de suspendre une action et de demander une validation explicite avant son exécution.',
                        'choices' => [
                            ['choice_text' => 'Human-in-the-loop', 'is_correct' => true],
                            ['choice_text' => 'Accès anonyme', 'is_correct' => false],
                            ['choice_text' => 'Exécution automatique sans garde-fou', 'is_correct' => false],
                            ['choice_text' => 'Suppression des journaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il séparer la génération d’une recommandation et l’exécution d’une action dans certains agents ?',
                        'explanation' => 'La séparation permet de vérifier la proposition avant d’effectuer une opération ayant un effet réel.',
                        'choices' => [
                            ['choice_text' => 'Permettre une validation ou une policy avant l’action effective', 'is_correct' => true],
                            ['choice_text' => 'Rendre la réponse plus longue', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les outils', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute traçabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une architecture de workflow autour d’un agent LLM ?',
                        'explanation' => 'Un workflow peut imposer des étapes, validations et transitions explicites autour du comportement probabiliste du modèle.',
                        'choices' => [
                            ['choice_text' => 'Encadrer le comportement du modèle avec des étapes et contrôles déterministes', 'is_correct' => true],
                            ['choice_text' => 'Supprimer le modèle de langage', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement la vérité de chaque sortie', 'is_correct' => false],
                            ['choice_text' => 'Rendre les outils accessibles publiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les sorties d’un LLM doivent-elles souvent être validées par un schéma strict lorsqu’elles alimentent une application ?',
                        'explanation' => 'Une validation structurée empêche qu’une sortie inattendue casse le workflow ou soit interprétée comme une instruction dangereuse.',
                        'choices' => [
                            ['choice_text' => 'Réduire les risques liés aux sorties malformées ou inattendues', 'is_correct' => true],
                            ['choice_text' => 'Garantir la vérité du contenu', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de tests', 'is_correct' => false],
                            ['choice_text' => 'Rendre le modèle déterministe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les journaux des actions d’agents IA sont-ils particulièrement importants ?',
                        'explanation' => 'Les logs permettent de comprendre quelles décisions ont été prises, quels outils ont été appelés et quelles actions ont réellement été effectuées.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer la traçabilité des décisions et actions effectuées', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la créativité', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la nécessité d’autorisation', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro hallucination', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis apparaît lorsqu’une entreprise utilise plusieurs fournisseurs de modèles IA ?',
                        'explanation' => 'Le multivendor peut réduire la dépendance mais augmente les différences d’API, de comportement, de coûts et de gouvernance.',
                        'choices' => [
                            ['choice_text' => 'Moins de dépendance contre davantage de complexité d’intégration et de gouvernance', 'is_correct' => true],
                            ['choice_text' => 'Plus de fournisseurs contre zéro coût', 'is_correct' => false],
                            ['choice_text' => 'Plus de modèles contre aucune différence de comportement', 'is_correct' => false],
                            ['choice_text' => 'Moins de dépendance contre absence totale de tests', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Professional — MLOps à grande échelle',
                'description' => 'Évaluez les pratiques professionnelles de déploiement, reproductibilité, observabilité, versioning et gestion du cycle de vie ML.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le principal objectif d’un pipeline MLOps mature ?',
                        'explanation' => 'Un pipeline mature automatise et sécurise les étapes répétitives du cycle de vie des modèles tout en conservant leur traçabilité.',
                        'choices' => [
                            ['choice_text' => Automatiser le cycle de vie tout en garantissant reproductibilité, contrôle et traçabilité],
                            ['choice_text' => 'Éliminer toute intervention humaine', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement de meilleurs modèles', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les data scientists', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les datasets doivent-ils être traités comme des artefacts versionnés ?',
                        'explanation' => 'Les résultats d’un modèle dépendent des données utilisées. Sans version du dataset, il devient difficile de reproduire ou expliquer un modèle.',
                        'choices' => [
                            ['choice_text' => 'Pour reproduire les entraînements et comprendre les changements de performance', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les données d’évoluer', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les pipelines', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données anciennes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un model card ou document équivalent ?',
                        'explanation' => 'Un model card décrit notamment l’objectif, les limites, les données, les performances et les conditions d’utilisation du modèle.',
                        'choices' => [
                            ['choice_text' => Documenter les usages, limites, performances et contexte du modèle],
                            ['choice_text' => 'Remplacer le code du modèle', 'is_correct' => false],
                            ['choice_text' => 'Garantir une précision parfaite', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la gouvernance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la détection de drift doit-elle être séparée de la simple surveillance système ?',
                        'explanation' => 'Le système peut rester disponible alors que les caractéristiques des données changent suffisamment pour dégrader la performance du modèle.',
                        'choices' => [
                            ['choice_text' => 'Un modèle peut se dégrader alors que l’infrastructure fonctionne normalement', 'is_correct' => true],
                            ['choice_text' => 'Le monitoring système ne mesure jamais la disponibilité', 'is_correct' => false],
                            ['choice_text' => 'Le drift est uniquement un problème de réseau', 'is_correct' => false],
                            ['choice_text' => 'Les modèles ne changent jamais après déploiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un déploiement shadow d’un modèle ?',
                        'explanation' => 'Un modèle shadow reçoit le trafic réel ou une copie du trafic sans influencer les décisions, ce qui permet de mesurer son comportement dans des conditions réelles.',
                        'choices' => [
                            ['choice_text' => 'Tester un nouveau modèle en production sans l’utiliser pour les décisions', 'is_correct' => true],
                            ['choice_text' => 'Remplacer immédiatement le modèle existant', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données de production', 'is_correct' => false],
                            ['choice_text' => 'Éviter les métriques online', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pipelines ML doivent-ils contrôler la compatibilité entre features et modèle ?',
                        'explanation' => 'Un modèle peut devenir incorrect si les features sont renommées, transformées ou calculées différemment après son entraînement.',
                        'choices' => [
                            ['choice_text' => 'Éviter qu’un modèle reçoive des représentations différentes de celles attendues', 'is_correct' => true],
                            ['choice_text' => 'Garantir une baisse de la latence', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le versioning', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute mise à jour des données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme peut empêcher automatiquement la promotion d’un modèle qui ne respecte pas un seuil de performance ?',
                        'explanation' => 'Une quality gate dans le pipeline peut bloquer la promotion lorsque des critères prédéfinis ne sont pas atteints.',
                        'choices' => [
                            ['choice_text' => 'Une quality gate automatisée', 'is_correct' => true],
                            ['choice_text' => 'Un simple commentaire dans le code', 'is_correct' => false],
                            ['choice_text' => 'Un stockage objet', 'is_correct' => false],
                            ['choice_text' => 'Une clé API publique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer les performances du modèle selon plusieurs dimensions en production ?',
                        'explanation' => 'La qualité ML peut inclure précision, robustesse, équité, latence, coût et indicateurs métier.',
                        'choices' => [
                            ['choice_text' => 'La qualité réelle inclut plusieurs dimensions au-delà d’une seule métrique', 'is_correct' => true],
                            ['choice_text' => 'Une seule métrique peut toujours représenter tous les risques', 'is_correct' => false],
                            ['choice_text' => 'Les métriques système sont inutiles', 'is_correct' => false],
                            ['choice_text' => 'La précision suffit toujours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver les anciennes versions des modèles ?',
                        'explanation' => 'Elles permettent de comparer les versions, effectuer un rollback et analyser l’impact de changements.',
                        'choices' => [
                            ['choice_text' => 'Faciliter le rollback, la comparaison et l’investigation', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute amélioration future', 'is_correct' => false],
                            ['choice_text' => 'Garantir que la dernière version est parfaite', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les coûts de stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur opérationnel est particulièrement important pour un service ML critique ?',
                        'explanation' => 'Le service doit respecter ses objectifs d’inférence en plus de la qualité prédictive, notamment en termes de latence et de disponibilité.',
                        'choices' => [
                            ['choice_text' => 'La latence et la disponibilité du service d’inférence', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de lignes du dataset source uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de développeurs', 'is_correct' => false],
                            ['choice_text' => 'La taille des dashboards', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Professional — Risques, conformité et IA responsable',
                'description' => 'Analysez les pratiques professionnelles de gestion des risques, conformité, auditabilité et IA responsable.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi le niveau de gouvernance doit-il être proportionnel au risque du système IA ?',
                        'explanation' => 'Un système qui influence une décision critique mérite davantage de contrôles qu’un système utilisé uniquement pour générer des suggestions sans impact majeur.',
                        'choices' => [
                            ['choice_text' => 'Parce que les conséquences potentielles d’une erreur varient fortement selon les usages', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les modèles ont les mêmes risques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les systèmes à faible risque ne doivent jamais être surveillés', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un modèle complexe est toujours plus dangereux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une évaluation d’impact d’un système IA ?',
                        'explanation' => 'Elle identifie les effets potentiels du système sur les utilisateurs, l’organisation et les parties prenantes avant ou pendant son utilisation.',
                        'choices' => [
                            ['choice_text' => 'Identifier les risques, impacts et contrôles nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Garantir une précision de 100 %', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les tests techniques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les parties prenantes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver une piste d’audit des décisions IA ?',
                        'explanation' => 'La traçabilité aide à comprendre quelles versions, données et règles ont contribué à une décision et facilite les investigations.',
                        'choices' => [
                            ['choice_text' => 'Permettre d’analyser a posteriori les conditions ayant conduit à une décision', 'is_correct' => true],
                            ['choice_text' => 'Garantir que toutes les décisions sont correctes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données de production', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les modèles d’évoluer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’équité ne peut-elle pas être réduite à une seule métrique universelle ?',
                        'explanation' => 'Les critères d’équité dépendent du contexte, des groupes concernés, des coûts d’erreur et de l’objectif du système.',
                        'choices' => [
                            ['choice_text' => 'Les notions d’équité dépendent du contexte et des conséquences métier', 'is_correct' => true],
                            ['choice_text' => 'L’équité ne peut jamais être mesurée', 'is_correct' => false],
                            ['choice_text' => 'Une seule métrique est toujours suffisante', 'is_correct' => false],
                            ['choice_text' => 'Toutes les métriques d’équité sont identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données personnelles utilisées par un système IA doivent-elles être minimisées ?',
                        'explanation' => 'Limiter les données réduit l’exposition et le risque et aide à aligner le traitement sur le besoin réel du système.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’exposition en ne conservant que les données nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Collecter toujours le maximum d’informations', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute donnée nécessaire au modèle', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est important pour les systèmes IA utilisés dans des décisions sensibles ?',
                        'explanation' => 'Les résultats doivent pouvoir être vérifiés, contestés ou corrigés selon le contexte d’utilisation.',
                        'choices' => [
                            ['choice_text' => Prévoir des mécanismes de contrôle, supervision et recours adaptés au niveau de risque],
                            ['choice_text' => 'Automatiser toutes les décisions sans possibilité d’intervention', 'is_correct' => false],
                            ['choice_text' => 'Masquer toutes les performances', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les erreurs rares', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les modèles doivent-ils être évalués sur des populations ou situations représentatives ?',
                        'explanation' => 'Des données non représentatives peuvent conduire à des performances trompeuses et à des erreurs importantes sur des cas insuffisamment couverts.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les limites du modèle dans les conditions réelles importantes', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les groupes minoritaires', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir l’absence de biais', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire les coûts de validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle peut jouer une revue indépendante d’un système IA critique ?',
                        'explanation' => 'Une revue indépendante apporte un regard différent sur les hypothèses, risques, performances et contrôles et peut révéler des problèmes non vus par l’équipe projet.',
                        'choices' => [
                            ['choice_text' => 'Identifier des risques ou hypothèses qui n’ont pas été suffisamment challengés', 'is_correct' => true],
                            ['choice_text' => 'Remplacer toute l’équipe technique', 'is_correct' => false],
                            ['choice_text' => 'Garantir une conformité permanente', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests automatisés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les limites connues d’un modèle doivent-elles être communiquées à ses utilisateurs ?',
                        'explanation' => 'Les utilisateurs doivent savoir dans quelles conditions les résultats sont fiables ou nécessitent une vérification supplémentaire.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre une utilisation appropriée et réduire les mauvaises interprétations', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher l’adoption du système', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une meilleure précision', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la responsabilité des utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un processus de retrait d’un modèle ?',
                        'explanation' => 'Un modèle obsolète, compromis ou non conforme doit pouvoir être retiré de manière contrôlée sans perturber inutilement les opérations.',
                        'choices' => [
                            ['choice_text' => 'Pouvoir retirer ou remplacer un modèle de façon contrôlée', 'is_correct' => true],
                            ['choice_text' => 'Empêcher tout changement de modèle', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement toutes les données historiques', 'is_correct' => false],
                            ['choice_text' => 'Garantir que les anciens modèles restent actifs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Professional — Optimisation économique et performance',
                'description' => 'Évaluez les arbitrages professionnels entre qualité, coût, latence, capacité et valeur métier des systèmes IA.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une entreprise double le coût d’un modèle pour gagner seulement 1 % de performance sur une tâche peu critique. Quelle analyse est la plus pertinente ?',
                        'explanation' => 'L’augmentation de performance doit être comparée à son coût et à sa valeur métier. Un gain marginal peut ne pas justifier une hausse importante de coût.',
                        'choices' => [
                            ['choice_text' => 'Comparer le gain métier réel au surcoût du modèle', 'is_correct' => true],
                            ['choice_text' => 'Choisir automatiquement le modèle plus cher', 'is_correct' => false],
                            ['choice_text' => 'Ignorer le coût puisque la performance augmente', 'is_correct' => false],
                            ['choice_text' => 'Utiliser systématiquement le plus petit modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les modèles spécialisés peuvent-ils parfois être préférables à un modèle généraliste très grand ?',
                        'explanation' => 'Un modèle spécialisé peut offrir suffisamment de performance tout en réduisant la latence, les coûts et les besoins d’infrastructure.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent offrir un meilleur compromis entre qualité, coût et latence pour une tâche précise', 'is_correct' => true],
                            ['choice_text' => 'Ils sont toujours plus intelligents', 'is_correct' => false],
                            ['choice_text' => 'Ils ne nécessitent aucune donnée', 'is_correct' => false],
                            ['choice_text' => 'Ils éliminent tous les risques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de router les requêtes simples vers un petit modèle et les cas complexes vers un modèle plus grand ?',
                        'explanation' => 'Le routage dynamique peut réduire le coût moyen tout en conservant une capacité élevée pour les requêtes difficiles.',
                        'choices' => [
                            ['choice_text' => 'Optimiser le coût moyen tout en conservant une capacité élevée pour les cas complexes', 'is_correct' => true],
                            ['choice_text' => 'Garantir une réponse identique pour toutes les requêtes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les petits modèles', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement toutes les latences', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le caching est-il particulièrement intéressant pour certaines applications LLM ?',
                        'explanation' => 'Des requêtes ou préfixes répétitifs peuvent être réutilisés et éviter des calculs coûteux.',
                        'choices' => [
                            ['choice_text' => 'Réduire les calculs et appels répétés pour des contenus récurrents', 'is_correct' => true],
                            ['choice_text' => 'Garantir des réponses toujours correctes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de modèle', 'is_correct' => false],
                            ['choice_text' => 'Éliminer toutes les erreurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur est essentiel lors du choix d’un matériel d’inférence ?',
                        'explanation' => 'Le matériel doit être évalué selon le throughput, la latence, la mémoire, les coûts et les contraintes du workload.',
                        'choices' => [
                            ['choice_text' => 'Le compromis entre débit, latence, mémoire, coût et consommation', 'is_correct' => true],
                            ['choice_text' => 'La fréquence du CPU uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de fichiers du projet', 'is_correct' => false],
                            ['choice_text' => 'La taille du dataset uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût du prétraitement doit-il être pris en compte dans le coût global d’un système IA ?',
                        'explanation' => 'Le preprocessing, retrieval, stockage, transfert et orchestration peuvent représenter une part importante du coût total autour du modèle.',
                        'choices' => [
                            ['choice_text' => 'Le modèle n’est qu’une partie du coût total du système IA', 'is_correct' => true],
                            ['choice_text' => 'Le preprocessing est toujours gratuit', 'is_correct' => false],
                            ['choice_text' => 'Les données n’ont aucun coût opérationnel', 'is_correct' => false],
                            ['choice_text' => 'Le coût de l’inférence inclut toujours tout automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque crée un système de scaling automatique mal configuré ?',
                        'explanation' => 'Une règle de scaling excessive ou oscillante peut créer une consommation inutile et augmenter les coûts sans améliorer réellement le service.',
                        'choices' => [
                            ['choice_text' => 'Une surconsommation de ressources et des coûts inutiles', 'is_correct' => true],
                            ['choice_text' => 'Une meilleure efficacité garantie', 'is_correct' => false],
                            ['choice_text' => 'Une baisse automatique du trafic', 'is_correct' => false],
                            ['choice_text' => 'Une suppression du modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer le coût par résultat utile est-il plus intéressant que le seul coût d’infrastructure ?',
                        'explanation' => 'Le coût par résultat utile relie les ressources consommées à la valeur réellement produite pour l’utilisateur ou l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Il relie la consommation technique à la valeur réellement produite', 'is_correct' => true],
                            ['choice_text' => 'Il supprime les coûts d’infrastructure', 'is_correct' => false],
                            ['choice_text' => 'Il mesure uniquement le nombre de GPU', 'is_correct' => false],
                            ['choice_text' => 'Il garantit un système rentable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis existe entre précision et latence dans certains modèles ?',
                        'explanation' => 'Des modèles plus complexes ou plus grands peuvent améliorer la qualité mais nécessiter davantage de calcul et donc augmenter la latence.',
                        'choices' => [
                            ['choice_text' => 'Une amélioration de qualité peut demander davantage de calcul et de temps', 'is_correct' => true],
                            ['choice_text' => 'La précision et la latence sont toujours indépendantes', 'is_correct' => false],
                            ['choice_text' => 'Les modèles complexes sont toujours plus rapides', 'is_correct' => false],
                            ['choice_text' => 'Une latence faible garantit la précision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il revoir périodiquement l’architecture économique d’un système IA ?',
                        'explanation' => 'Les volumes, modèles, prix, exigences et usages changent. Une architecture optimale aujourd’hui peut ne plus l’être demain.',
                        'choices' => [
                            ['choice_text' => 'Parce que les workloads, coûts et contraintes évoluent avec le temps', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts restent toujours fixes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un modèle ne change jamais', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les métriques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Professional — Décisions stratégiques et avenir des systèmes IA',
                'description' => 'Évaluez les décisions stratégiques à long terme autour des modèles, fournisseurs, architecture, compétences et innovation IA.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une entreprise dépend entièrement d’un seul fournisseur de modèles. Quel risque stratégique doit être suivi en priorité ?',
                        'explanation' => 'Une dépendance forte peut exposer l’entreprise aux changements de prix, de disponibilité, de politique, de performance ou d’API du fournisseur.',
                        'choices' => [
                            ['choice_text' => 'La dépendance fournisseur et la difficulté de migration future', 'is_correct' => true],
                            ['choice_text' => 'La disparition automatique des données internes', 'is_correct' => false],
                            ['choice_text' => 'L’absence de besoin de monitoring', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration garantie des performances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider l’adoption de nouveaux modèles IA ?',
                        'explanation' => 'Une nouvelle technologie doit être évaluée selon la valeur apportée, les risques, les coûts, la maturité et l’effort d’intégration.',
                        'choices' => [
                            ['choice_text' => 'Évaluer objectivement valeur, risque, coût, maturité et intégration', 'is_correct' => true],
                            ['choice_text' => 'Adopter systématiquement le modèle le plus récent', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les coûts d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout benchmark interne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi maintenir une capacité d’évaluer plusieurs modèles peut-elle être stratégique ?',
                        'explanation' => 'Elle permet de comparer les performances, coûts et risques et réduit la dépendance à un choix unique.',
                        'choices' => [
                            ['choice_text' => 'Réduire la dépendance et choisir en fonction des besoins réels', 'is_correct' => true],
                            ['choice_text' => 'Garantir que tous les modèles ont les mêmes performances', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute gouvernance', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les évaluations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage stratégique d’une architecture de modèles interchangeable ?',
                        'explanation' => 'Une architecture abstraite peut permettre de remplacer un fournisseur ou modèle avec moins de modifications applicatives.',
                        'choices' => [
                            ['choice_text' => 'Réduire le coût et le risque d’un changement de modèle ou fournisseur', 'is_correct' => true],
                            ['choice_text' => 'Garantir les mêmes résultats avec tous les modèles', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout test après changement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les différences de comportement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les compétences internes sont-elles un facteur stratégique pour l’IA ?',
                        'explanation' => 'Une organisation doit pouvoir évaluer, déployer, surveiller et faire évoluer ses systèmes. Une dépendance complète à des fournisseurs ou consultants peut limiter cette capacité.',
                        'choices' => [
                            ['choice_text' => 'Elles conditionnent la capacité de l’organisation à exploiter et faire évoluer ses systèmes', 'is_correct' => true],
                            ['choice_text' => 'Parce que les outils cloud ne fonctionnent qu’avec des experts internes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les modèles nécessitent toujours une équipe énorme', 'is_correct' => false],
                            ['choice_text' => 'Parce que les compétences n’ont aucun lien avec le coût', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie IA doit-elle prévoir le retrait des modèles obsolètes ?',
                        'explanation' => 'Les modèles anciens peuvent devenir moins performants, coûteux, incompatibles ou non conformes et doivent pouvoir être décommissionnés proprement.',
                        'choices' => [
                            ['choice_text' => 'Pour maîtriser le cycle de vie et éviter l’accumulation de systèmes inutiles', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher tout apprentissage futur', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toutes les données historiques', 'is_correct' => false],
                            ['choice_text' => 'Pour conserver toujours le premier modèle déployé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un portefeuille IA plutôt qu’une simple liste de projets ?',
                        'explanation' => 'Une vision portefeuille permet de gérer les priorités, capacités, dépendances, coûts et risques entre plusieurs initiatives.',
                        'choices' => [
                            ['choice_text' => 'Optimiser les priorités, ressources, dépendances et risques à l’échelle de l’organisation', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les projets expérimentaux', 'is_correct' => false],
                            ['choice_text' => 'Garantir la réussite de tous les projets', 'is_correct' => false],
                            ['choice_text' => 'Centraliser tous les modèles dans un seul fichier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’innovation IA devrait-elle inclure des mécanismes d’expérimentation contrôlée ?',
                        'explanation' => 'Les expérimentations permettent d’explorer de nouvelles approches sans exposer directement les systèmes critiques à des technologies non validées.',
                        'choices' => [
                            ['choice_text' => 'Tester rapidement de nouvelles approches sans compromettre les environnements critiques', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute gouvernance', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les comparaisons de modèles', 'is_correct' => false],
                            ['choice_text' => 'Garantir que toutes les expériences deviennent immédiatement des produits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider la transformation d’un prototype IA en système de production ?',
                        'explanation' => 'Un prototype doit être renforcé avec sécurité, monitoring, gestion du cycle de vie, tests, coûts et gouvernance avant son utilisation réelle.',
                        'choices' => [
                            ['choice_text' => Ajouter les contrôles de sécurité, fiabilité, observabilité et gouvernance nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Déployer directement le prototype sans modification', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests de charge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel critère constitue la meilleure définition d’une IA d’entreprise mature ?',
                        'explanation' => 'La maturité ne se résume pas aux performances des modèles. Elle couvre la capacité à industrialiser, gouverner, sécuriser, mesurer et améliorer durablement les systèmes.',
                        'choices' => [
                            ['choice_text' => 'La capacité à créer, déployer, gouverner, surveiller et améliorer durablement des systèmes IA', 'is_correct' => true],
                            ['choice_text' => 'Le nombre maximal de modèles entraînés', 'is_correct' => false],
                            ['choice_text' => 'La taille du plus grand GPU', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de projets expérimentaux uniquement', 'is_correct' => false],
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

                // Shuffle the complete choice records so that
                // is_correct stays attached to the correct answer.
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