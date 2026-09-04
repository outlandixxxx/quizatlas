<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArtificialIntelligenceAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'artificial-intelligence')->firstOrFail();

        $quizzes = [
            [
                'title' => 'IA Advanced — Architecture ML et sélection de modèles',
                'description' => 'Évaluez votre capacité à concevoir des systèmes ML avancés, sélectionner des modèles et gérer les compromis techniques.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une équipe obtient une excellente performance sur le jeu d’entraînement mais une performance nettement inférieure en validation. Quelle hypothèse doit être examinée en priorité ?',
                        'explanation' => 'Un écart important entre entraînement et validation indique fréquemment un surapprentissage, même si d’autres causes comme une différence de distribution doivent aussi être examinées.',
                        'choices' => [
                            ['choice_text' => 'Le modèle surapprend les données d’entraînement', 'is_correct' => true],
                            ['choice_text' => 'Le modèle possède forcément trop peu de paramètres', 'is_correct' => false],
                            ['choice_text' => 'Le dataset de test doit être supprimé', 'is_correct' => false],
                            ['choice_text' => 'Le learning rate doit nécessairement être augmenté', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle extrêmement complexe n’est-il pas toujours préférable à un modèle plus simple ?',
                        'explanation' => 'La complexité apporte parfois plus de capacité mais augmente aussi les coûts, le risque de surapprentissage, la difficulté d’explication et les contraintes d’exploitation.',
                        'choices' => [
                            ['choice_text' => 'La complexité peut augmenter les coûts, la variance et la difficulté de maintenance', 'is_correct' => true],
                            ['choice_text' => 'Un modèle complexe ne peut jamais apprendre correctement', 'is_correct' => false],
                            ['choice_text' => 'Les modèles simples sont toujours plus précis', 'is_correct' => false],
                            ['choice_text' => 'La complexité n’influence jamais l’exploitation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème apparaît lorsqu’une feature disponible uniquement après la décision réelle est utilisée pendant l’entraînement ?',
                        'explanation' => 'Le modèle dispose alors d’une information qui n’existera pas au moment réel de la prédiction, ce qui constitue une fuite de données.',
                        'choices' => [
                            ['choice_text' => 'Une fuite temporelle ou de cible', 'is_correct' => true],
                            ['choice_text' => 'Une meilleure généralisation garantie', 'is_correct' => false],
                            ['choice_text' => 'Une réduction du nombre de classes', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation automatique du bruit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est particulièrement important lors de la sélection d’un modèle pour une application à faible latence ?',
                        'explanation' => 'La qualité prédictive doit être évaluée avec la latence, le coût de calcul, la mémoire et les contraintes de déploiement.',
                        'choices' => [
                            ['choice_text' => 'Évaluer le compromis entre qualité prédictive et coût d’inférence', 'is_correct' => true],
                            ['choice_text' => 'Choisir systématiquement le modèle ayant le plus de paramètres', 'is_correct' => false],
                            ['choice_text' => 'Ignorer complètement la latence', 'is_correct' => false],
                            ['choice_text' => 'Choisir uniquement sur la base du nom du modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une validation croisée stratifiée pour une classification déséquilibrée ?',
                        'explanation' => 'La stratification aide à conserver des proportions de classes comparables entre les folds et rend les estimations plus stables.',
                        'choices' => [
                            ['choice_text' => 'Préserver approximativement la proportion des classes dans les différents folds', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les classes minoritaires', 'is_correct' => false],
                            ['choice_text' => 'Garantir une accuracy identique dans tous les folds', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute séparation des données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un hyperparamètre comme la profondeur maximale d’un arbre ?',
                        'explanation' => 'La profondeur maximale contrôle la complexité de l’arbre et influence directement le risque de sous-apprentissage ou de surapprentissage.',
                        'choices' => [
                            ['choice_text' => 'Contrôler une partie de la complexité du modèle', 'is_correct' => true],
                            ['choice_text' => 'Définir les labels du dataset', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la fonction de perte', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des données nouvelles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il éviter d’ajuster continuellement les hyperparamètres sur le même jeu de test ?',
                        'explanation' => 'Le jeu de test cesse progressivement d’être indépendant et finit par être indirectement optimisé, ce qui conduit à une estimation trop optimiste.',
                        'choices' => [
                            ['choice_text' => 'Le test risque de devenir une partie implicite du processus d’optimisation', 'is_correct' => true],
                            ['choice_text' => 'Le modèle perd automatiquement ses paramètres', 'is_correct' => false],
                            ['choice_text' => 'Le dataset devient toujours déséquilibré', 'is_correct' => false],
                            ['choice_text' => 'Les métriques deviennent toujours nulles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’avantage principal d’un ensemble de modèles dans certaines tâches ?',
                        'explanation' => 'L’agrégation de plusieurs modèles peut réduire certaines erreurs individuelles et améliorer la robustesse globale.',
                        'choices' => [
                            ['choice_text' => 'Combiner des erreurs différentes pour améliorer la robustesse', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les données de validation', 'is_correct' => false],
                            ['choice_text' => 'Garantir une interprétabilité parfaite', 'is_correct' => false],
                            ['choice_text' => 'Rendre automatiquement tous les modèles plus petits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la calibration d’un classificateur peut-elle être importante dans une application métier ?',
                        'explanation' => 'Une bonne calibration rend les probabilités prédites plus cohérentes avec les fréquences observées et facilite les décisions basées sur le risque.',
                        'choices' => [
                            ['choice_text' => 'Parce que les probabilités doivent être interprétables pour les décisions basées sur le risque', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une probabilité calibrée garantit une classification parfaite', 'is_correct' => false],
                            ['choice_text' => 'Parce que calibration et précision sont exactement identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que la calibration supprime les données d’entraînement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel critère devrait guider le choix final entre deux modèles ayant des performances proches ?',
                        'explanation' => 'Lorsque les performances sont proches, la complexité opérationnelle, le coût, la latence, la maintenabilité et la robustesse doivent entrer dans la décision.',
                        'choices' => [
                            ['choice_text' => 'Comparer aussi coût, latence, robustesse et maintenabilité', 'is_correct' => true],
                            ['choice_text' => 'Choisir obligatoirement le modèle le plus grand', 'is_correct' => false],
                            ['choice_text' => 'Choisir uniquement selon la taille du fichier', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les contraintes de production', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Advanced — Deep Learning et optimisation',
                'description' => 'Analysez les stratégies avancées d’entraînement, régularisation, optimisation et stabilité des réseaux profonds.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel problème est souvent associé aux gradients qui deviennent extrêmement petits dans un réseau profond ?',
                        'explanation' => 'Des gradients très faibles peuvent ralentir fortement l’apprentissage des premières couches, phénomène classique des réseaux profonds avec certaines fonctions d’activation.',
                        'choices' => [
                            ['choice_text' => 'Le vanishing gradient', 'is_correct' => true],
                            ['choice_text' => 'Le data leakage', 'is_correct' => false],
                            ['choice_text' => 'Le class imbalance', 'is_correct' => false],
                            ['choice_text' => 'Le feature scaling uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les connexions résiduelles sont-elles utiles dans les réseaux profonds ?',
                        'explanation' => 'Les connexions résiduelles facilitent la circulation des gradients et permettent de construire des réseaux très profonds plus facilement.',
                        'choices' => [
                            ['choice_text' => 'Elles facilitent notamment l’optimisation des réseaux profonds', 'is_correct' => true],
                            ['choice_text' => 'Elles suppriment toutes les couches intermédiaires', 'is_correct' => false],
                            ['choice_text' => 'Elles garantissent toujours zéro surapprentissage', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent toutes les fonctions d’activation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal de la régularisation L2 ?',
                        'explanation' => 'La régularisation L2 pénalise les poids trop importants afin de limiter certaines formes de surapprentissage.',
                        'choices' => [
                            ['choice_text' => 'Pénaliser les paramètres de grande amplitude afin de réduire le surapprentissage', 'is_correct' => true],
                            ['choice_text' => 'Créer davantage de classes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les poids du modèle', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement la taille des données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle du momentum dans certaines méthodes d’optimisation ?',
                        'explanation' => 'Le momentum accumule une information sur les directions précédentes des gradients afin d’aider à stabiliser et accélérer la progression.',
                        'choices' => [
                            ['choice_text' => 'Utiliser l’historique des mises à jour pour stabiliser et accélérer l’optimisation', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les données d’entraînement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les gradients', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des labels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un learning rate schedule peut-il améliorer l’entraînement ?',
                        'explanation' => 'Un learning rate adapté aux différentes phases de l’entraînement peut permettre des pas importants au début puis plus précis lorsque l’optimisation approche d’une bonne solution.',
                        'choices' => [
                            ['choice_text' => 'Adapter l’amplitude des mises à jour au cours de l’entraînement', 'is_correct' => true],
                            ['choice_text' => 'Remplacer complètement l’optimizer', 'is_correct' => false],
                            ['choice_text' => 'Créer de nouveaux labels', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro surapprentissage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal de la normalisation par lot dans certains réseaux ?',
                        'explanation' => 'La normalisation par lot stabilise et facilite souvent l’entraînement en contrôlant les distributions intermédiaires des activations.',
                        'choices' => [
                            ['choice_text' => 'Stabiliser certaines activations et faciliter l’optimisation', 'is_correct' => true],
                            ['choice_text' => 'Créer des catégories', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de fonction d’activation', 'is_correct' => false],
                            ['choice_text' => 'Garantir une précision parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le data augmentation peut-il agir comme une forme de régularisation ?',
                        'explanation' => 'En présentant des variantes des exemples, l’augmentation pousse le modèle à apprendre des caractéristiques plus robustes plutôt qu’à mémoriser exactement les observations.',
                        'choices' => [
                            ['choice_text' => 'Elle encourage l’apprentissage de représentations plus robustes', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime toujours le bruit', 'is_correct' => false],
                            ['choice_text' => 'Elle diminue nécessairement la diversité des données', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une meilleure performance sur tous les datasets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsqu’un réseau a beaucoup plus de paramètres que le volume de données disponible ?',
                        'explanation' => 'Un modèle très paramétré peut mémoriser les exemples d’entraînement et mal généraliser lorsque les données sont insuffisantes.',
                        'choices' => [
                            ['choice_text' => 'Un risque accru de surapprentissage', 'is_correct' => true],
                            ['choice_text' => 'Une garantie de meilleure généralisation', 'is_correct' => false],
                            ['choice_text' => 'La disparition du besoin de validation', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique du coût de calcul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des initialisations adaptées des poids ?',
                        'explanation' => 'Une mauvaise initialisation peut produire des activations ou gradients mal distribués et rendre l’apprentissage instable ou très lent.',
                        'choices' => [
                            ['choice_text' => 'Favoriser une propagation des activations et gradients compatible avec l’apprentissage', 'is_correct' => true],
                            ['choice_text' => 'Créer les labels du dataset', 'is_correct' => false],
                            ['choice_text' => 'Éviter toutes les données manquantes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de fonction de perte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage peut apporter le gradient clipping ?',
                        'explanation' => 'Le gradient clipping limite l’amplitude des gradients et peut stabiliser l’entraînement lorsque ceux-ci deviennent trop grands.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact de gradients excessivement grands', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les gradients', 'is_correct' => false],
                            ['choice_text' => 'Garantir l’absence de surapprentissage', 'is_correct' => false],
                            ['choice_text' => 'Créer de nouveaux exemples', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Advanced — Transformers, LLM et modèles génératifs',
                'description' => 'Approfondissez les architectures Transformer, LLM, attention, génération et stratégies d’utilisation.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi les Transformers utilisent-ils un mécanisme d’attention ?',
                        'explanation' => 'L’attention permet au modèle de pondérer dynamiquement la relation entre différents tokens pour construire des représentations contextuelles.',
                        'choices' => [
                            ['choice_text' => 'Pour pondérer les relations entre différents éléments de la séquence', 'is_correct' => true],
                            ['choice_text' => 'Pour compresser automatiquement tout le texte', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la position des tokens', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute représentation numérique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’information de position est-elle nécessaire dans un Transformer ?',
                        'explanation' => 'Le mécanisme d’attention seul ne fournit pas automatiquement la notion d’ordre. Une représentation positionnelle permet de distinguer les différentes positions des tokens.',
                        'choices' => [
                            ['choice_text' => 'Parce que le modèle doit représenter l’ordre ou la position des tokens', 'is_correct' => true],
                            ['choice_text' => 'Parce que les tokens ne peuvent jamais être identifiés', 'is_correct' => false],
                            ['choice_text' => 'Pour chiffrer les phrases', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les relations sémantiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut poser une fenêtre de contexte limitée pour un LLM ?',
                        'explanation' => 'Le modèle ne peut pas considérer arbitrairement tout un document si celui-ci dépasse sa capacité de contexte.',
                        'choices' => [
                            ['choice_text' => 'Certaines informations doivent être tronquées, résumées ou récupérées autrement', 'is_correct' => true],
                            ['choice_text' => 'Le modèle arrête toujours de fonctionner', 'is_correct' => false],
                            ['choice_text' => 'Le vocabulaire disparaît', 'is_correct' => false],
                            ['choice_text' => 'Les tokens deviennent automatiquement plus précis', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’un prompting donnant des instructions contradictoires ?',
                        'explanation' => 'Le modèle peut produire un comportement inattendu car il doit arbitrer entre des contraintes incompatibles.',
                        'choices' => [
                            ['choice_text' => 'Une réponse incohérente ou non conforme à l’objectif recherché', 'is_correct' => true],
                            ['choice_text' => 'Une précision automatiquement supérieure', 'is_correct' => false],
                            ['choice_text' => 'La disparition des tokens', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique du coût', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi RAG peut-il être préférable à un réentraînement complet pour incorporer des connaissances fréquemment mises à jour ?',
                        'explanation' => 'RAG permet de récupérer des informations externes actualisées sans nécessairement réentraîner le modèle à chaque changement documentaire.',
                        'choices' => [
                            ['choice_text' => 'Il permet d’ajouter du contexte externe sans réentraîner le modèle à chaque mise à jour', 'is_correct' => true],
                            ['choice_text' => 'Il garantit que le modèle ne fera jamais d’erreur', 'is_correct' => false],
                            ['choice_text' => 'Il supprime la nécessité d’un modèle de langage', 'is_correct' => false],
                            ['choice_text' => 'Il remplace toutes les bases de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle des embeddings dans une architecture RAG ?',
                        'explanation' => 'Les embeddings permettent de représenter les documents et les requêtes dans un espace où la similarité peut être calculée.',
                        'choices' => [
                            ['choice_text' => 'Permettre une recherche de contenus sémantiquement proches', 'is_correct' => true],
                            ['choice_text' => 'Générer directement les réponses finales', 'is_correct' => false],
                            ['choice_text' => 'Chiffrer les documents', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le tokenizer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la qualité du retrieval est-elle critique dans un système RAG ?',
                        'explanation' => 'Le modèle génératif dépend en partie du contexte récupéré. Si les documents pertinents ne sont pas trouvés, la génération peut devenir moins fiable.',
                        'choices' => [
                            ['choice_text' => 'Un contexte incorrect ou incomplet peut entraîner une réponse incorrecte', 'is_correct' => true],
                            ['choice_text' => 'Le retrieval ne sert qu’à réduire les coûts', 'is_correct' => false],
                            ['choice_text' => 'Le modèle ignore toujours les documents récupérés', 'is_correct' => false],
                            ['choice_text' => 'Le retrieval garantit automatiquement la vérité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis apparaît entre température faible et température élevée ?',
                        'explanation' => 'Une température faible favorise des sorties plus déterministes tandis qu’une température élevée augmente généralement la diversité.',
                        'choices' => [
                            ['choice_text' => 'Déterminisme et stabilité contre diversité et variabilité des sorties', 'is_correct' => true],
                            ['choice_text' => 'Sécurité contre disponibilité uniquement', 'is_correct' => false],
                            ['choice_text' => 'Mémoire contre stockage', 'is_correct' => false],
                            ['choice_text' => 'Tokens contre embeddings', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un LLM peut-il halluciner malgré un prompt détaillé ?',
                        'explanation' => 'Le modèle génère des séquences selon les régularités apprises et ne garantit pas automatiquement la vérification externe de toutes les affirmations.',
                        'choices' => [
                            ['choice_text' => 'La génération probabiliste ne constitue pas une garantie de factualité', 'is_correct' => true],
                            ['choice_text' => 'Un prompt détaillé supprime toute incertitude', 'is_correct' => false],
                            ['choice_text' => 'Les LLM ne peuvent utiliser aucune information contextuelle', 'is_correct' => false],
                            ['choice_text' => 'Les hallucinations sont toujours dues à un défaut réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi limiter les outils accessibles à un agent LLM ?',
                        'explanation' => 'Un agent disposant de nombreux outils et permissions peut avoir un rayon d’action important en cas d’erreur, de prompt injection ou de comportement inattendu.',
                        'choices' => [
                            ['choice_text' => 'Réduire les actions possibles en cas d’erreur ou de compromission', 'is_correct' => true],
                            ['choice_text' => 'Augmenter systématiquement les performances du modèle', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tout raisonnement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de journalisation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Advanced — MLOps, production et model drift',
                'description' => 'Évaluez les pratiques avancées de déploiement, monitoring, reproductibilité et maintenance des modèles.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif d’un pipeline ML reproductible ?',
                        'explanation' => 'La reproductibilité permet de retrouver les données, code, paramètres et environnement ayant produit un modèle donné.',
                        'choices' => [
                            ['choice_text' => 'Reproduire de manière cohérente les étapes ayant produit un modèle', 'is_correct' => true],
                            ['choice_text' => 'Garantir l’absence de bugs', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute version des datasets', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les changements de modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi versionner le code, les données et les modèles ensemble au niveau du pipeline ?',
                        'explanation' => 'Il faut pouvoir relier précisément une version déployée aux artefacts qui l’ont produite pour assurer la traçabilité et le rollback.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer une traçabilité complète d’une version de modèle', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter les tests', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une meilleure précision', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les datasets historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel signal peut révéler un data drift ?',
                        'explanation' => 'Une variation significative de la distribution des features entre l’entraînement et la production peut indiquer un changement dans les données.',
                        'choices' => [
                            ['choice_text' => Une modification importante de la distribution des features en production],
                            ['choice_text' => 'Une baisse de la mémoire du serveur sans changement de données', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation du nombre de développeurs', 'is_correct' => false],
                            ['choice_text' => 'Une modification du nom du modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller uniquement les performances système d’un modèle est insuffisant ?',
                        'explanation' => 'Une API peut rester disponible et rapide alors que la qualité prédictive se dégrade à cause d’un changement des données.',
                        'choices' => [
                            ['choice_text' => 'La disponibilité technique ne garantit pas la qualité prédictive', 'is_correct' => true],
                            ['choice_text' => 'Les métriques système sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Le modèle ne produit aucune prédiction en production', 'is_correct' => false],
                            ['choice_text' => 'Les performances métier n’existent pas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un canary release pour un modèle ML ?',
                        'explanation' => 'Une petite partie du trafic est dirigée vers le nouveau modèle afin d’observer ses performances et détecter les régressions avant généralisation.',
                        'choices' => [
                            ['choice_text' => 'Tester le nouveau modèle sur une petite partie du trafic avant généralisation', 'is_correct' => true],
                            ['choice_text' => 'Supprimer le modèle existant immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute mesure online', 'is_correct' => false],
                            ['choice_text' => 'Garantir une meilleure performance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un rollback ML peut-il être plus complexe qu’un rollback logiciel classique ?',
                        'explanation' => 'Le modèle dépend également de données, features, versions de preprocessing et comportements qui peuvent avoir évolué indépendamment du code.',
                        'choices' => [
                            ['choice_text' => 'Le modèle dépend aussi des données, features et pipelines', 'is_correct' => true],
                            ['choice_text' => 'Les modèles ne peuvent jamais être versionnés', 'is_correct' => false],
                            ['choice_text' => 'Un modèle n’a aucun artefact associé', 'is_correct' => false],
                            ['choice_text' => 'Le code logiciel ne possède jamais de version', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut provoquer une feature engineering différente entre entraînement et production ?',
                        'explanation' => 'Un pipeline de preprocessing différent peut produire des entrées incompatibles avec celles vues pendant l’entraînement.',
                        'choices' => [
                            ['choice_text' => Une incohérence entre les représentations utilisées pendant l’entraînement et l’inférence],
                            ['choice_text' => 'Une meilleure généralisation automatique', 'is_correct' => false],
                            ['choice_text' => 'Une diminution garantie de la latence', 'is_correct' => false],
                            ['choice_text' => 'La disparition des données historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser un feature store dans certaines architectures ML ?',
                        'explanation' => 'Un feature store centralise des features réutilisables et peut aider à maintenir une cohérence entre entraînement et production.',
                        'choices' => [
                            ['choice_text' => 'Centraliser et standardiser la gestion de features utilisées par plusieurs modèles', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les datasets', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les modèles', 'is_correct' => false],
                            ['choice_text' => 'Garantir l’absence de biais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est important lorsqu’un modèle doit être réentraîné périodiquement ?',
                        'explanation' => 'Le réentraînement doit être déclenché selon des critères définis et accompagné de contrôles avant promotion en production.',
                        'choices' => [
                            ['choice_text' => Définir des critères de déclenchement et de validation avant déploiement],
                            ['choice_text' => 'Remplacer automatiquement le modèle sans test', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les changements de données', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les anciennes versions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver des métriques métier pour les modèles ML ?',
                        'explanation' => 'Une amélioration d’une métrique technique ne signifie pas nécessairement une amélioration de la valeur métier.',
                        'choices' => [
                            ['choice_text' => 'Mesurer si les changements du modèle améliorent réellement le résultat métier', 'is_correct' => true],
                            ['choice_text' => 'Remplacer toutes les métriques ML', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests de performance', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement la taille du modèle', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Advanced — Sécurité des systèmes d’IA',
                'description' => 'Analysez les risques de sécurité des modèles, données, prompts, agents et pipelines IA.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une prompt injection ?',
                        'explanation' => 'Une prompt injection tente de manipuler un modèle ou un agent via des instructions malveillantes ou non prévues dans les entrées.',
                        'choices' => [
                            ['choice_text' => 'Une tentative de détourner le comportement du modèle via des instructions injectées', 'is_correct' => true],
                            ['choice_text' => 'Une panne du GPU', 'is_correct' => false],
                            ['choice_text' => 'Une technique de compression', 'is_correct' => false],
                            ['choice_text' => 'Une méthode de normalisation des données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le contenu récupéré par un système RAG doit-il être traité comme une entrée non fiable ?',
                        'explanation' => 'Des documents récupérés peuvent contenir des instructions ou contenus malveillants destinés à influencer le modèle ou l’agent.',
                        'choices' => [
                            ['choice_text' => 'Les documents peuvent contenir du contenu malveillant ou des instructions adversariales', 'is_correct' => true],
                            ['choice_text' => 'Les documents sont toujours vérifiés automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Les systèmes RAG ne peuvent lire que des sources internes', 'is_correct' => false],
                            ['choice_text' => 'Les embeddings éliminent toute menace', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel contrôle réduit le risque qu’un agent IA exécute des actions dangereuses de manière autonome ?',
                        'explanation' => 'Les permissions minimales, validations humaines et contrôles d’action réduisent le rayon d’impact des décisions de l’agent.',
                        'choices' => [
                            ['choice_text' => 'Limiter ses permissions et exiger une validation pour les actions sensibles', 'is_correct' => true],
                            ['choice_text' => 'Donner un accès administrateur permanent', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les journaux', 'is_correct' => false],
                            ['choice_text' => 'Permettre toutes les actions par défaut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est associé à l’exfiltration de données via un système génératif ?',
                        'explanation' => 'Des informations sensibles peuvent être exposées à travers les prompts, les sorties, les logs ou les intégrations avec des services externes.',
                        'choices' => [
                            ['choice_text' => 'Une divulgation de données sensibles par les entrées ou sorties du système', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration automatique de la confidentialité', 'is_correct' => false],
                            ['choice_text' => 'Une baisse obligatoire de la latence', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des prompts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les secrets ne doivent-ils pas être placés directement dans les prompts ?',
                        'explanation' => 'Les prompts peuvent être journalisés, transmis à des composants externes ou exposés à travers des mécanismes inattendus.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils peuvent être exposés via les logs, intégrations ou sorties du système', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un LLM ne peut lire aucun texte', 'is_correct' => false],
                            ['choice_text' => 'Parce que les secrets deviennent automatiquement chiffrés', 'is_correct' => false],
                            ['choice_text' => 'Parce que les prompts ne peuvent jamais être stockés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle du red teaming dans la sécurité des systèmes IA ?',
                        'explanation' => 'Le red teaming consiste à rechercher activement des comportements indésirables ou des chemins d’attaque pour identifier les faiblesses du système.',
                        'choices' => [
                            ['choice_text' => 'Simuler des attaques ou usages adversariaux afin de découvrir des faiblesses', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la taille du modèle', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données d’entraînement', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’un système est invulnérable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque peut présenter un modèle entraîné sur des données empoisonnées ?',
                        'explanation' => 'Des données volontairement malveillantes peuvent modifier le comportement du modèle ou introduire des comportements incorrects.',
                        'choices' => [
                            ['choice_text' => 'Le modèle peut apprendre des comportements ou associations malveillants', 'is_correct' => true],
                            ['choice_text' => 'Le modèle devient automatiquement plus robuste', 'is_correct' => false],
                            ['choice_text' => 'Les données sont automatiquement supprimées', 'is_correct' => false],
                            ['choice_text' => 'L’inférence devient toujours plus rapide', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la provenance des modèles et artefacts est-elle importante en sécurité ML ?',
                        'explanation' => 'Sans provenance fiable, il est difficile de savoir qui a produit un modèle, avec quelles données et selon quels processus.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier l’origine et l’intégrité des modèles déployés', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter tout versioning', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir toutes les prédictions', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les artefacts publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi limiter les données retournées par un outil utilisé par un agent LLM ?',
                        'explanation' => 'Minimiser les données accessibles réduit le risque qu’un agent expose des informations sensibles dans un contexte non prévu.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’exposition de données non nécessaires à la tâche', 'is_correct' => true],
                            ['choice_text' => 'Garantir que l’agent sera toujours exact', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Donner davantage de contexte que nécessaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit s’appliquer à un système IA capable de modifier des données métiers ?',
                        'explanation' => 'Les actions mutables doivent être protégées par des contrôles d’accès, de validation et idéalement de traçabilité afin de limiter les conséquences d’une mauvaise décision.',
                        'choices' => [
                            ['choice_text' => 'Limiter les permissions et tracer les actions sensibles', 'is_correct' => true],
                            ['choice_text' => 'Autoriser toutes les modifications sans validation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les journaux pour réduire les coûts', 'is_correct' => false],
                            ['choice_text' => 'Donner un accès administrateur global', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Advanced — Data-centric AI et qualité',
                'description' => 'Évaluez les stratégies avancées de qualité des données, annotation, biais et amélioration des datasets.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi améliorer la qualité des labels peut-il être plus efficace qu’augmenter simplement le nombre d’exemples ?',
                        'explanation' => 'Un grand dataset mal annoté peut fournir des signaux contradictoires. Des labels cohérents permettent au modèle d’apprendre une cible plus fiable.',
                        'choices' => [
                            ['choice_text' => 'Des labels plus fiables peuvent fournir un signal d’apprentissage de meilleure qualité', 'is_correct' => true],
                            ['choice_text' => 'Plus de données sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Les labels n’influencent jamais l’apprentissage', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de données ne dépend jamais de la qualité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut provoquer une incohérence entre annotateurs ?',
                        'explanation' => 'Des règles d’annotation ambiguës peuvent produire des labels contradictoires et rendre l’apprentissage plus difficile.',
                        'choices' => [
                            ['choice_text' => 'Des labels contradictoires ou bruités', 'is_correct' => true],
                            ['choice_text' => 'Une précision automatique de 100 %', 'is_correct' => false],
                            ['choice_text' => 'Une réduction certaine du coût', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des classes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données rares peuvent-elles être particulièrement précieuses ?',
                        'explanation' => 'Les cas rares peuvent être précisément ceux qui sont les plus importants métier ou les plus difficiles à détecter.',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent représenter des événements importants malgré leur faible fréquence', 'is_correct' => true],
                            ['choice_text' => 'Elles sont toujours bruitées', 'is_correct' => false],
                            ['choice_text' => 'Elles doivent systématiquement être supprimées', 'is_correct' => false],
                            ['choice_text' => 'Elles n’apportent jamais de valeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données synthétiques peuvent-elles être utiles ?',
                        'explanation' => 'Elles peuvent compléter certaines classes rares, protéger certains contenus ou augmenter la diversité des situations simulées.',
                        'choices' => [
                            ['choice_text' => 'Compléter certaines situations ou classes difficiles à observer', 'is_correct' => true],
                            ['choice_text' => 'Remplacer obligatoirement toutes les données réelles', 'is_correct' => false],
                            ['choice_text' => 'Garantir l’absence de biais', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe si les données synthétiques sont générées à partir d’un modèle biaisé ?',
                        'explanation' => 'Le système peut reproduire ou amplifier les biais déjà présents dans le générateur.',
                        'choices' => [
                            ['choice_text' => 'Les biais du générateur peuvent être reproduits ou amplifiés', 'is_correct' => true],
                            ['choice_text' => 'Les données deviennent automatiquement neutres', 'is_correct' => false],
                            ['choice_text' => 'La qualité devient nécessairement supérieure aux données réelles', 'is_correct' => false],
                            ['choice_text' => 'Les labels sont supprimés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le dataset de validation doit-il refléter les conditions réelles attendues ?',
                        'explanation' => 'Une validation réaliste permet d’obtenir une estimation plus utile de la performance réelle du système.',
                        'choices' => [
                            ['choice_text' => 'Pour rapprocher l’évaluation des situations réellement rencontrées', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre la validation plus facile artificiellement', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les cas difficiles', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une performance parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif de l’analyse d’erreurs après entraînement ?',
                        'explanation' => 'L’analyse d’erreurs cherche à comprendre les cas de prédiction incorrects afin d’identifier les problèmes de données, de modèle ou de tâche.',
                        'choices' => [
                            ['choice_text' => 'Identifier les causes récurrentes des erreurs afin d’améliorer le système', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les exemples mal prédits', 'is_correct' => false],
                            ['choice_text' => 'Masquer les erreurs', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement zéro erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une confusion fréquente entre deux classes peut-elle être informative ?',
                        'explanation' => 'Elle peut indiquer que les classes sont difficiles à distinguer, que les labels sont ambigus ou que les features ne contiennent pas suffisamment d’information.',
                        'choices' => [
                            ['choice_text' => 'Elle peut révéler un problème de définition de tâche ou de représentations', 'is_correct' => true],
                            ['choice_text' => 'Elle prouve toujours que les données sont incorrectes', 'is_correct' => false],
                            ['choice_text' => 'Elle indique nécessairement un bug logiciel', 'is_correct' => false],
                            ['choice_text' => 'Elle signifie que les classes doivent être supprimées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la représentativité d’un dataset est-elle importante ?',
                        'explanation' => 'Le modèle généralise principalement à partir de ce qu’il observe. Une couverture insuffisante de certaines conditions peut créer des performances faibles hors distribution.',
                        'choices' => [
                            ['choice_text' => 'Pour couvrir les situations importantes susceptibles d’être rencontrées en production', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire toujours la quantité de données', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute augmentation de données', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir l’absence totale de bruit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider la sélection d’exemples supplémentaires pour améliorer un modèle ?',
                        'explanation' => 'Il est souvent plus efficace de cibler les erreurs fréquentes, les cas incertains et les situations importantes que d’ajouter aléatoirement de nombreux exemples.',
                        'choices' => [
                            ['choice_text' => 'Prioriser les exemples apportant une information utile pour les erreurs ou lacunes identifiées', 'is_correct' => true],
                            ['choice_text' => 'Ajouter uniquement des exemples faciles', 'is_correct' => false],
                            ['choice_text' => 'Ajouter aléatoirement le maximum de données possible', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les cas difficiles', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Advanced — Computer Vision avancée',
                'description' => 'Analysez les architectures et problèmes avancés de détection, segmentation, transfer learning et vision industrielle.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi utiliser un modèle pré-entraîné pour une tâche de vision spécialisée ?',
                        'explanation' => 'Le modèle peut déjà disposer de représentations générales utiles et nécessiter moins de données pour être adapté à la nouvelle tâche.',
                        'choices' => [
                            ['choice_text' => 'Réutiliser des représentations apprises sur de grandes quantités de données', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute donnée spécifique', 'is_correct' => false],
                            ['choice_text' => 'Garantir une précision parfaite', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin d’évaluation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal avantage de l’IoU pour l’évaluation d’une bounding box ?',
                        'explanation' => 'L’Intersection over Union mesure le chevauchement entre la prédiction et la boîte de référence.',
                        'choices' => [
                            ['choice_text' => 'Mesurer la qualité du chevauchement entre prédiction et référence', 'is_correct' => true],
                            ['choice_text' => 'Mesurer la vitesse du GPU', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la quantité de données', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la classification uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la détection d’objets doit-elle gérer plusieurs seuils ?',
                        'explanation' => 'Le seuil de confiance influence le compromis entre détections manquées et faux positifs, tandis que le seuil IoU intervient dans l’évaluation de la localisation.',
                        'choices' => [
                            ['choice_text' => 'Les seuils influencent à la fois la confiance et l’évaluation du chevauchement', 'is_correct' => true],
                            ['choice_text' => 'Un seul seuil suffit toujours', 'is_correct' => false],
                            ['choice_text' => 'Les seuils n’ont aucun effet sur les métriques', 'is_correct' => false],
                            ['choice_text' => 'Ils servent uniquement à compresser les images', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsque les objets à détecter sont très petits dans l’image ?',
                        'explanation' => 'La petite taille laisse moins d’information visuelle exploitable et peut rendre la localisation et la classification plus difficiles.',
                        'choices' => [
                            ['choice_text' => 'Une détection et une localisation plus difficiles', 'is_correct' => true],
                            ['choice_text' => 'Une précision automatiquement supérieure', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique du nombre de classes', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des pixels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la segmentation d’instance est-elle plus détaillée que la segmentation sémantique ?',
                        'explanation' => 'La segmentation d’instance distingue les différentes instances d’un même objet, tandis que la segmentation sémantique attribue une classe aux pixels sans nécessairement séparer les instances.',
                        'choices' => [
                            ['choice_text' => 'Elle distingue séparément les instances appartenant à une même classe', 'is_correct' => true],
                            ['choice_text' => 'Elle ne produit aucune catégorie', 'is_correct' => false],
                            ['choice_text' => 'Elle ne traite que du texte', 'is_correct' => false],
                            ['choice_text' => 'Elle ignore la localisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les transformations d’augmentation doivent-elles respecter la sémantique de la tâche ?',
                        'explanation' => 'Une transformation irréaliste peut modifier le sens ou le label attendu et introduire du bruit dans l’apprentissage.',
                        'choices' => [
                            ['choice_text' => 'Certaines transformations peuvent rendre le label incorrect ou irréaliste', 'is_correct' => true],
                            ['choice_text' => 'Toutes les transformations sont toujours valides', 'is_correct' => false],
                            ['choice_text' => 'L’augmentation ne modifie jamais les données', 'is_correct' => false],
                            ['choice_text' => 'Les labels n’ont aucun lien avec les images', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis faut-il considérer pour une vision embarquée ?',
                        'explanation' => 'Un dispositif embarqué possède souvent des ressources limitées, ce qui impose un compromis entre précision, latence, mémoire et consommation énergétique.',
                        'choices' => [
                            ['choice_text' => 'Précision contre latence, mémoire et consommation énergétique', 'is_correct' => true],
                            ['choice_text' => 'Précision contre absence de données', 'is_correct' => false],
                            ['choice_text' => 'Nombre de classes contre stockage objet uniquement', 'is_correct' => false],
                            ['choice_text' => 'Images contre réseau DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la quantification est-elle intéressante pour un modèle de vision embarqué ?',
                        'explanation' => 'Elle peut réduire la taille mémoire et accélérer les calculs selon le matériel, avec un éventuel compromis de précision.',
                        'choices' => [
                            ['choice_text' => 'Réduire potentiellement mémoire et coût de calcul sur le matériel cible', 'is_correct' => true],
                            ['choice_text' => 'Garantir une meilleure précision', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les convolutions', 'is_correct' => false],
                            ['choice_text' => 'Créer de nouvelles classes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester un modèle de vision dans différentes conditions d’éclairage ?',
                        'explanation' => 'Les changements d’éclairage peuvent modifier fortement les pixels et révéler des limites de robustesse qui n’apparaissent pas sur des données uniformes.',
                        'choices' => [
                            ['choice_text' => 'Évaluer sa robustesse aux variations réalistes des conditions d’acquisition', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les variations d’image', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement le nombre de classes', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’éclairage n’a jamais d’impact', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsqu’un modèle de vision est entraîné sur des images provenant d’un seul type de caméra ?',
                        'explanation' => 'Le modèle peut apprendre certaines caractéristiques spécifiques au capteur et se dégrader sur des appareils présentant d’autres caractéristiques.',
                        'choices' => [
                            ['choice_text' => 'Une dépendance au domaine ou au capteur utilisé pour l’entraînement', 'is_correct' => true],
                            ['choice_text' => 'Une précision parfaite sur tous les capteurs', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des features', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique du dataset', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Advanced — LLM Evaluation et systèmes RAG',
                'description' => 'Évaluez les stratégies de qualité, retrieval, hallucinations et évaluation des applications basées sur les LLM.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi évaluer séparément la qualité du retrieval et celle de la génération dans un système RAG ?',
                        'explanation' => 'Une mauvaise réponse peut venir d’un document mal récupéré ou d’une mauvaise utilisation d’un document pertinent. Séparer les deux permet de localiser la faiblesse.',
                        'choices' => [
                            ['choice_text' => 'Pour distinguer les erreurs de recherche des erreurs de génération', 'is_correct' => true],
                            ['choice_text' => 'Parce que le retrieval ne sert jamais à la génération', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une seule métrique suffit toujours', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les documents récupérés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’une base vectorielle contenant des documents obsolètes ?',
                        'explanation' => 'Le système peut récupérer des informations dépassées et générer des réponses qui ne correspondent plus à la réalité actuelle.',
                        'choices' => [
                            ['choice_text' => 'Le modèle peut générer des réponses fondées sur des informations obsolètes', 'is_correct' => true],
                            ['choice_text' => 'La génération devient automatiquement plus créative', 'is_correct' => false],
                            ['choice_text' => 'Les embeddings cessent toujours de fonctionner', 'is_correct' => false],
                            ['choice_text' => 'Les données deviennent automatiquement chiffrées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les métadonnées doivent-elles être intégrées au retrieval dans certains systèmes RAG ?',
                        'explanation' => 'Les métadonnées peuvent servir à filtrer les documents par date, autorisation, tenant ou type et ainsi améliorer la pertinence et la sécurité.',
                        'choices' => [
                            ['choice_text' => 'Filtrer les documents selon le contexte, la sécurité ou la fraîcheur', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la taille du modèle', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la recherche sémantique', 'is_correct' => false],
                            ['choice_text' => 'Garantir la factualité sans validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une métrique de similarité sémantique seule est-elle insuffisante pour évaluer une réponse RAG ?',
                        'explanation' => 'Une réponse peut être sémantiquement proche tout en contenant des erreurs factuelles ou en omettant des éléments critiques.',
                        'choices' => [
                            ['choice_text' => 'La similarité ne vérifie pas nécessairement la factualité ou la complétude', 'is_correct' => true],
                            ['choice_text' => 'La similarité ne fonctionne jamais avec du texte', 'is_correct' => false],
                            ['choice_text' => 'Les embeddings ne représentent aucune information', 'is_correct' => false],
                            ['choice_text' => 'La similarité mesure toujours la vérité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un jeu d’évaluation composé de questions réelles d’utilisateurs ?',
                        'explanation' => 'Il reflète mieux les besoins opérationnels et les cas d’usage réellement rencontrés.',
                        'choices' => [
                            ['choice_text' => 'Mesurer le comportement du système sur des cas proches de l’usage réel', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute validation hors production', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro hallucination', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de données synthétiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer le taux de refus approprié dans une application LLM ?',
                        'explanation' => 'Un bon système doit refuser les demandes dangereuses ou hors politique mais éviter de refuser inutilement des demandes légitimes.',
                        'choices' => [
                            ['choice_text' => 'Évaluer l’équilibre entre sécurité et utilité des réponses', 'is_correct' => true],
                            ['choice_text' => 'Réduire automatiquement la taille des prompts', 'is_correct' => false],
                            ['choice_text' => 'Garantir une exactitude factuelle parfaite', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout appel au modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut provoquer un chunking trop petit dans un système RAG ?',
                        'explanation' => 'Des morceaux trop petits peuvent perdre le contexte nécessaire pour comprendre correctement une information.',
                        'choices' => [
                            ['choice_text' => 'Le contexte pertinent peut être fragmenté et devenir difficile à interpréter', 'is_correct' => true],
                            ['choice_text' => 'Le modèle devient automatiquement plus précis', 'is_correct' => false],
                            ['choice_text' => 'Les documents deviennent plus sécurisés', 'is_correct' => false],
                            ['choice_text' => 'Les embeddings cessent de fonctionner', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut provoquer un chunking trop grand ?',
                        'explanation' => 'Des chunks trop grands peuvent réduire la précision du retrieval et gaspiller la fenêtre de contexte avec des informations non pertinentes.',
                        'choices' => [
                            ['choice_text' => 'Plus de contenu non pertinent peut être récupéré avec l’information utile', 'is_correct' => true],
                            ['choice_text' => 'Toutes les informations sont forcément plus précises', 'is_correct' => false],
                            ['choice_text' => 'Les embeddings deviennent inutilisables', 'is_correct' => false],
                            ['choice_text' => 'Le retrieval devient automatiquement plus rapide', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les citations ou références des documents récupérés peuvent-elles être utiles dans un système LLM ?',
                        'explanation' => 'Elles permettent à l’utilisateur de vérifier l’origine des informations et facilitent l’analyse des erreurs.',
                        'choices' => [
                            ['choice_text' => 'Permettre à l’utilisateur de vérifier la provenance de certaines affirmations', 'is_correct' => true],
                            ['choice_text' => 'Garantir que toutes les affirmations sont correctes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les hallucinations automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le retrieval', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les évaluations humaines restent-elles utiles pour certaines applications LLM ?',
                        'explanation' => 'Certaines dimensions comme la pertinence, le ton, la sûreté ou la qualité globale peuvent être difficiles à mesurer avec une métrique unique.',
                        'choices' => [
                            ['choice_text' => 'Certaines qualités contextuelles ou subjectives nécessitent un jugement humain', 'is_correct' => true],
                            ['choice_text' => 'Les métriques automatiques ne servent jamais', 'is_correct' => false],
                            ['choice_text' => 'Les humains peuvent garantir zéro erreur', 'is_correct' => false],
                            ['choice_text' => 'L’évaluation humaine remplace toujours les tests automatiques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Advanced — Déploiement, performance et optimisation',
                'description' => 'Évaluez les choix avancés concernant la quantification, distillation, batching, latence et coûts d’inférence.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le principal objectif de la knowledge distillation ?',
                        'explanation' => 'La distillation permet à un modèle étudiant plus petit d’apprendre à reproduire une partie du comportement d’un modèle enseignant.',
                        'choices' => [
                            ['choice_text' => Entraîner un modèle plus petit à reproduire une partie des performances d’un modèle plus grand],
                            ['choice_text' => 'Augmenter la taille du modèle enseignant', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les données d’entraînement', 'is_correct' => false],
                            ['choice_text' => 'Créer un dataset de test uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi quantifier un modèle peut-il entraîner une perte de qualité ?',
                        'explanation' => 'Réduire la précision numérique modifie certaines représentations et peut introduire des erreurs d’approximation.',
                        'choices' => [
                            ['choice_text' => 'La représentation numérique plus grossière peut dégrader certaines informations', 'is_correct' => true],
                            ['choice_text' => 'La quantification ajoute toujours des paramètres', 'is_correct' => false],
                            ['choice_text' => 'La quantification supprime les données de test', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit toujours une meilleure précision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal objectif de pruning ?',
                        'explanation' => 'Le pruning retire certains paramètres ou connexions jugés moins importants afin de réduire la taille ou le coût du modèle.',
                        'choices' => [
                            ['choice_text' => 'Réduire la complexité en supprimant des paramètres moins utiles', 'is_correct' => true],
                            ['choice_text' => 'Créer de nouveaux labels', 'is_correct' => false],
                            ['choice_text' => 'Augmenter le nombre de couches', 'is_correct' => false],
                            ['choice_text' => 'Garantir une absence de perte de qualité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi benchmarker sur le matériel cible ?',
                        'explanation' => 'La performance réelle dépend fortement du matériel, du runtime et des optimisations disponibles.',
                        'choices' => [
                            ['choice_text' => 'Les performances réelles peuvent fortement dépendre de l’environnement matériel et logiciel', 'is_correct' => true],
                            ['choice_text' => 'Tous les matériels ont exactement les mêmes performances', 'is_correct' => false],
                            ['choice_text' => 'Le modèle ne dépend jamais du runtime', 'is_correct' => false],
                            ['choice_text' => 'Les benchmarks sont inutiles en production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’effet possible d’une augmentation excessive du batch size en inference ?',
                        'explanation' => 'Un batch plus important peut améliorer le débit mais augmenter la latence individuelle et la consommation mémoire.',
                        'choices' => [
                            ['choice_text' => 'Améliorer le throughput mais augmenter mémoire ou latence', 'is_correct' => true],
                            ['choice_text' => 'Réduire toujours le temps de réponse individuel', 'is_correct' => false],
                            ['choice_text' => 'Garantir une précision supérieure', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les requêtes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer le modèle et le preprocessing dans une architecture d’inférence ?',
                        'explanation' => 'La séparation permet de versionner et tester indépendamment les différentes étapes tout en assurant la cohérence entre entraînement et production.',
                        'choices' => [
                            ['choice_text' => 'Permettre une gestion et une validation indépendantes tout en conservant la cohérence', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les features', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro latence', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute mise à jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque apparaît lorsqu’un modèle optimisé pour la latence est fortement compressé sans validation ?',
                        'explanation' => 'Des techniques d’optimisation agressives peuvent dégrader la qualité ou modifier les comportements sur certaines catégories de données.',
                        'choices' => [
                            ['choice_text' => 'Une dégradation de la qualité du modèle', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration garantie de tous les résultats', 'is_correct' => false],
                            ['choice_text' => 'Une suppression automatique du dataset', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation certaine des paramètres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût par requête est-il important pour un service IA à très fort trafic ?',
                        'explanation' => 'Même un coût unitaire faible peut devenir important lorsque le volume de requêtes est très élevé.',
                        'choices' => [
                            ['choice_text' => 'Le volume peut transformer un faible coût unitaire en coût global important', 'is_correct' => true],
                            ['choice_text' => 'Le coût unitaire est toujours négligeable', 'is_correct' => false],
                            ['choice_text' => 'Le trafic n’influence jamais la facture', 'is_correct' => false],
                            ['choice_text' => 'Le modèle ne consomme aucune ressource en inference', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis doit être analysé lorsqu’on choisit entre un modèle cloud distant et un modèle local plus petit ?',
                        'explanation' => 'Le choix implique généralement des compromis entre qualité, coût, confidentialité, latence, infrastructure et maintenance.',
                        'choices' => [
                            ['choice_text' => 'Qualité, coût, latence, confidentialité et contraintes d’exploitation', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la taille du fichier', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le nombre de paramètres', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la disponibilité du réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le caching peut-il améliorer une application IA ?',
                        'explanation' => 'Lorsque certaines requêtes ou résultats sont répétitifs, le cache peut éviter des calculs ou appels coûteux répétés.',
                        'choices' => [
                            ['choice_text' => 'Réduire les calculs ou appels répétés pour des requêtes similaires', 'is_correct' => true],
                            ['choice_text' => 'Garantir une meilleure précision', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les modèles', 'is_correct' => false],
                            ['choice_text' => 'Éliminer tous les coûts d’infrastructure', 'is_correct' => false],
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

                // Shuffle complete choice records while preserving is_correct.
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