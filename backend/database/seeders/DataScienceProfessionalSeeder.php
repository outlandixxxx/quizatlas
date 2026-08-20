<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DataScienceProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'data-science')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Data Science Professional — Stratégie et gouvernance des données',
                'description' => 'Évaluez votre capacité à concevoir une stratégie Data Science alignée sur les objectifs métier, la gouvernance et la qualité des données.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le meilleur point de départ pour un programme Data Science à l’échelle d’une entreprise ?',
                        'explanation' => 'La stratégie doit partir des problèmes métier et de la valeur attendue avant de choisir les technologies ou modèles.',
                        'choices' => [
                            ['choice_text' => 'Identifier les problèmes métier et la valeur attendue', 'is_correct' => true],
                            ['choice_text' => 'Acheter immédiatement l’infrastructure la plus puissante', 'is_correct' => false],
                            ['choice_text' => 'Choisir un modèle unique pour toute l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Commencer par entraîner le plus grand modèle disponible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la gouvernance des données est-elle essentielle dans un programme Data Science ?',
                        'explanation' => 'La gouvernance clarifie la qualité, la propriété, les accès, les usages et la responsabilité concernant les données.',
                        'choices' => [
                            ['choice_text' => 'Pour maîtriser qualité, accès, responsabilité et usage des données', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute utilisation analytique', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données historiques', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir automatiquement la causalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un data owner ?',
                        'explanation' => 'Le data owner porte généralement la responsabilité métier ou organisationnelle concernant un domaine de données.',
                        'choices' => [
                            ['choice_text' => 'Porter la responsabilité métier et la gouvernance d’un domaine de données', 'is_correct' => true],
                            ['choice_text' => 'Administrer uniquement les serveurs physiques', 'is_correct' => false],
                            ['choice_text' => 'Développer tous les modèles ML', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les analystes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un catalogue de données est-il important à grande échelle ?',
                        'explanation' => 'Un catalogue permet aux équipes de découvrir les datasets, leur définition, leur propriétaire et leurs métadonnées.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la découverte, la compréhension et la gouvernance des données', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Garantir la qualité parfaite des données', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les systèmes transactionnels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la qualité des données doit-elle être mesurée régulièrement ?',
                        'explanation' => 'Les données changent dans le temps. Une qualité acceptable aujourd’hui peut se dégrader après modification d’une source ou d’un processus.',
                        'choices' => [
                            ['choice_text' => 'Parce que les sources et usages évoluent dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Parce que la qualité est toujours constante', 'is_correct' => false],
                            ['choice_text' => 'Parce que les données ne changent jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce que le modèle corrige automatiquement toutes les erreurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis existe entre centralisation et autonomie dans une organisation Data Science ?',
                        'explanation' => 'Une centralisation excessive ralentit les équipes tandis qu’une autonomie totale peut créer de la fragmentation. Une approche fédérée cherche un équilibre.',
                        'choices' => [
                            ['choice_text' => 'Cohérence centrale contre rapidité et autonomie locale', 'is_correct' => true],
                            ['choice_text' => 'Stockage contre calcul uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sécurité contre disponibilité uniquement', 'is_correct' => false],
                            ['choice_text' => 'SQL contre Python uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les standards de données doivent-ils être automatisés lorsque cela est possible ?',
                        'explanation' => 'Les contrôles automatisés permettent de détecter rapidement les violations et de réduire la dépendance aux vérifications manuelles.',
                        'choices' => [
                            ['choice_text' => 'Pour rendre les contrôles cohérents et continus', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toute responsabilité humaine', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les changements de schéma', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter la documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la classification des données est-elle utile ?',
                        'explanation' => 'Classer les données selon leur sensibilité permet d’appliquer des protections et politiques adaptées.',
                        'choices' => [
                            ['choice_text' => 'Adapter les contrôles de sécurité et de gouvernance à la sensibilité des données', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les données sensibles', 'is_correct' => false],
                            ['choice_text' => 'Éliminer les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucune donnée ne soit exposée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur reflète mieux la maturité d’un programme Data Science qu’un simple nombre de modèles ?',
                        'explanation' => 'La maturité repose sur la capacité à produire une valeur durable avec des données fiables, des processus reproductibles et des modèles correctement exploités.',
                        'choices' => [
                            ['choice_text' => 'La capacité à produire durablement de la valeur avec des processus fiables', 'is_correct' => true],
                            ['choice_text' => 'Le nombre total de notebooks créés', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de bibliothèques Python utilisées', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de colonnes dans les datasets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter la provenance des données ?',
                        'explanation' => 'La provenance facilite les audits, l’analyse des erreurs et la compréhension de la manière dont les données ont été transformées.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer la traçabilité de l’origine et des transformations', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute transformation future', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les métadonnées', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir automatiquement une meilleure précision', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Professional — Architecture analytique',
                'description' => 'Évaluez les décisions d’architecture autour des data lakes, warehouses, pipelines et plateformes analytiques.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi séparer les couches ingestion, stockage, transformation et consommation ?',
                        'explanation' => 'Le découplage facilite l’évolution indépendante des composants, la maintenance et la gouvernance.',
                        'choices' => [
                            ['choice_text' => 'Pour rendre les composants plus indépendants et maintenables', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute circulation de données', 'is_correct' => false],
                            ['choice_text' => 'Pour éliminer toutes les transformations', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la gouvernance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal avantage d’un data warehouse pour les analyses structurées ?',
                        'explanation' => 'Un warehouse est généralement optimisé pour les requêtes analytiques structurées, la modélisation et le reporting.',
                        'choices' => [
                            ['choice_text' => 'Fournir un environnement structuré et optimisé pour l’analyse', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les systèmes transactionnels', 'is_correct' => false],
                            ['choice_text' => 'Stocker uniquement des images', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les pipelines ETL', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt principal d’un data lake ?',
                        'explanation' => 'Un data lake peut accueillir des données variées, y compris semi-structurées ou brutes, avant différents traitements.',
                        'choices' => [
                            ['choice_text' => 'Stocker de grands volumes de données variées dans leur forme originale ou peu transformée', 'is_correct' => true],
                            ['choice_text' => 'Garantir automatiquement la qualité de toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les bases relationnelles', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute gouvernance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un data lake mal gouverné devient-il rapidement problématique ?',
                        'explanation' => 'Sans catalogue, ownership et contrôles de qualité, les datasets deviennent difficiles à comprendre et à faire confiance.',
                        'choices' => [
                            ['choice_text' => 'Il peut devenir un ensemble de données difficile à découvrir et à interpréter', 'is_correct' => true],
                            ['choice_text' => 'Il supprime automatiquement les données', 'is_correct' => false],
                            ['choice_text' => 'Il interdit toutes les requêtes', 'is_correct' => false],
                            ['choice_text' => 'Il devient automatiquement un warehouse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un pipeline ELT peut-il être intéressant dans un environnement cloud moderne ?',
                        'explanation' => 'Le stockage et le calcul cloud permettent parfois de charger d’abord les données puis d’effectuer les transformations dans le moteur analytique.',
                        'choices' => [
                            ['choice_text' => 'Le stockage et le calcul peuvent être utilisés séparément avec les transformations réalisées après chargement', 'is_correct' => true],
                            ['choice_text' => 'ELT interdit toute transformation', 'is_correct' => false],
                            ['choice_text' => 'ELT ne fonctionne qu’avec des fichiers texte', 'is_correct' => false],
                            ['choice_text' => 'ELT remplace les bases de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pipelines doivent-ils être idempotents lorsque cela est possible ?',
                        'explanation' => 'Une étape idempotente peut être rejouée sans créer de duplications ou effets incohérents.',
                        'choices' => [
                            ['choice_text' => 'Faciliter les reprises et éviter les effets indésirables lors d’une réexécution', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute nouvelle exécution', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la journalisation', 'is_correct' => false],
                            ['choice_text' => 'Garantir une qualité parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal avantage d’une architecture orientée événements pour certaines données ?',
                        'explanation' => 'Les événements peuvent permettre de diffuser les changements au fur et à mesure et de découpler les consommateurs.',
                        'choices' => [
                            ['choice_text' => 'Permettre une propagation découplée et potentiellement en temps quasi réel des changements', 'is_correct' => true],
                            ['choice_text' => 'Garantir une cohérence forte partout', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le stockage', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute surveillance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les workloads analytiques et transactionnels ?',
                        'explanation' => 'Ils ont généralement des profils de charge et des exigences différentes. Les mélanger peut dégrader les performances des systèmes critiques.',
                        'choices' => [
                            ['choice_text' => 'Leurs profils de charge et objectifs de performance sont différents', 'is_correct' => true],
                            ['choice_text' => 'Les données transactionnelles ne peuvent jamais être analysées', 'is_correct' => false],
                            ['choice_text' => 'Les systèmes analytiques ne stockent jamais de données', 'is_correct' => false],
                            ['choice_text' => 'SQL interdit les analyses transactionnelles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un data mart peut-il être utile ?',
                        'explanation' => 'Un data mart fournit une vue spécialisée et adaptée aux besoins d’un domaine métier.',
                        'choices' => [
                            ['choice_text' => 'Fournir une vue analytique spécialisée pour un domaine métier', 'is_correct' => true],
                            ['choice_text' => 'Remplacer le stockage brut', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Garantir les prédictions ML', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la gestion de la fraîcheur des données est-elle importante ?',
                        'explanation' => 'Un dataset peut être techniquement valide mais inutile si les données arrivent trop tard par rapport à la décision qu’elles doivent supporter.',
                        'choices' => [
                            ['choice_text' => 'Parce que la valeur d’une donnée dépend parfois de sa disponibilité au bon moment', 'is_correct' => true],
                            ['choice_text' => 'Parce que les données anciennes sont toujours incorrectes', 'is_correct' => false],
                            ['choice_text' => 'Parce que la fraîcheur remplace la qualité', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les applications nécessitent du temps réel', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Professional — Statistiques avancées et causalité',
                'description' => 'Analysez les problèmes avancés de causalité, confusions, inférence et interprétation statistique.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une corrélation élevée entre deux variables ne suffit-elle pas à établir une causalité ?',
                        'explanation' => 'Une troisième variable peut expliquer la relation observée, ou la causalité peut fonctionner dans l’autre direction.',
                        'choices' => [
                            ['choice_text' => 'Une variable tierce ou une causalité inverse peut expliquer l’association', 'is_correct' => true],
                            ['choice_text' => 'La corrélation est toujours incorrecte', 'is_correct' => false],
                            ['choice_text' => 'La causalité est directement calculée par Pearson', 'is_correct' => false],
                            ['choice_text' => 'Les variables corrélées sont toujours indépendantes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un facteur de confusion ?',
                        'explanation' => 'Un facteur de confusion influence à la fois la variable étudiée et le résultat, créant une association qui peut être trompeuse.',
                        'choices' => [
                            ['choice_text' => 'Une variable liée à la fois à l’exposition et au résultat qui peut fausser l’association observée', 'is_correct' => true],
                            ['choice_text' => 'Une variable qui ne concerne jamais la cible', 'is_correct' => false],
                            ['choice_text' => 'Une erreur de calcul uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une variable automatiquement supprimée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les expériences randomisées sont-elles puissantes pour étudier la causalité ?',
                        'explanation' => 'La randomisation aide à équilibrer les facteurs confondants connus et inconnus entre les groupes, sous réserve du respect du protocole.',
                        'choices' => [
                            ['choice_text' => 'Elle réduit les déséquilibres systématiques entre groupes', 'is_correct' => true],
                            ['choice_text' => 'Elle élimine toute incertitude', 'is_correct' => false],
                            ['choice_text' => 'Elle rend les données parfaitement représentatives', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une absence de biais de mesure', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse observationnelle doit-elle être interprétée avec prudence lorsqu’elle cherche à établir un effet causal ?',
                        'explanation' => 'Les groupes observés peuvent différer sur des facteurs non contrôlés.',
                        'choices' => [
                            ['choice_text' => 'Des facteurs non observés peuvent expliquer une partie de l’association', 'is_correct' => true],
                            ['choice_text' => 'Les données observationnelles ne contiennent jamais d’information', 'is_correct' => false],
                            ['choice_text' => 'Une régression transforme automatiquement une association en causalité', 'is_correct' => false],
                            ['choice_text' => 'Les variables observationnelles sont toujours aléatoires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsqu’on contrôle une variable qui est en réalité un médiateur causal ?',
                        'explanation' => 'Contrôler certains médiateurs peut supprimer une partie de l’effet qu’on cherche à mesurer et conduire à une interprétation différente de l’effet causal.',
                        'choices' => [
                            ['choice_text' => 'On peut bloquer une partie du chemin causal et estimer un effet différent', 'is_correct' => true],
                            ['choice_text' => 'Le modèle devient automatiquement plus précis', 'is_correct' => false],
                            ['choice_text' => 'La causalité disparaît toujours', 'is_correct' => false],
                            ['choice_text' => 'La variable devient automatiquement indépendante', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la taille d’effet est-elle importante en plus de la significativité statistique ?',
                        'explanation' => 'Un effet statistiquement significatif peut être très faible et sans importance pratique.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un effet significatif peut être trop petit pour avoir une importance pratique', 'is_correct' => true],
                            ['choice_text' => 'Parce que la significativité n’est jamais utile', 'is_correct' => false],
                            ['choice_text' => 'Parce que tout effet significatif est nécessairement important', 'is_correct' => false],
                            ['choice_text' => 'Parce que la taille de l’échantillon ne joue aucun rôle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les intervalles de confiance sont-ils utiles dans une analyse professionnelle ?',
                        'explanation' => 'Ils donnent une idée de l’incertitude autour d’une estimation et évitent de considérer l’estimation ponctuelle comme exacte.',
                        'choices' => [
                            ['choice_text' => 'Ils renseignent sur l’incertitude associée à une estimation', 'is_correct' => true],
                            ['choice_text' => 'Ils garantissent que la valeur vraie est toujours incluse', 'is_correct' => false],
                            ['choice_text' => 'Ils prouvent une causalité', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent les données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi multiplier les tests statistiques sans correction peut-il être dangereux ?',
                        'explanation' => 'Le nombre de faux positifs attendus augmente lorsque de nombreux tests indépendants sont effectués.',
                        'choices' => [
                            ['choice_text' => 'Le risque global de faux positifs augmente', 'is_correct' => true],
                            ['choice_text' => 'La puissance devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'La causalité devient automatique', 'is_correct' => false],
                            ['choice_text' => 'Les données deviennent indépendantes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une analyse de sensibilité en contexte causal ?',
                        'explanation' => 'Elle permet d’étudier à quel point les conclusions dépendent de certaines hypothèses ou d’éventuels facteurs non observés.',
                        'choices' => [
                            ['choice_text' => 'Évaluer la robustesse des conclusions face à certaines hypothèses', 'is_correct' => true],
                            ['choice_text' => 'Garantir une causalité parfaite', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les variables', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute analyse statistique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le contexte de collecte doit-il être connu avant d’interpréter une estimation ?',
                        'explanation' => 'Le processus de collecte détermine la représentativité, les biais possibles et la manière dont l’estimation peut être généralisée.',
                        'choices' => [
                            ['choice_text' => 'Le processus d’échantillonnage influence la validité et la généralisation des conclusions', 'is_correct' => true],
                            ['choice_text' => 'La collecte ne change jamais les résultats', 'is_correct' => false],
                            ['choice_text' => 'Toutes les données sont naturellement représentatives', 'is_correct' => false],
                            ['choice_text' => 'Le contexte n’a d’importance que pour SQL', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Professional — ML en production et MLOps',
                'description' => 'Évaluez les pratiques professionnelles de déploiement, monitoring, versioning et maintenance des modèles.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le principal objectif du MLOps ?',
                        'explanation' => 'MLOps industrialise le cycle de vie des modèles en combinant ingénierie, automatisation, observabilité et gouvernance.',
                        'choices' => [
                            ['choice_text' => 'Industrialiser et fiabiliser le cycle de vie des modèles', 'is_correct' => true],
                            ['choice_text' => 'Créer uniquement des notebooks', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les data scientists', 'is_correct' => false],
                            ['choice_text' => 'Garantir une précision parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi versionner simultanément code, données et modèle ?',
                        'explanation' => 'Un modèle donné dépend de la combinaison du code, des données et des paramètres utilisés pour le produire.',
                        'choices' => [
                            ['choice_text' => 'Pour reproduire précisément une version de modèle', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les mises à jour', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les modèles anciens', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir automatiquement la meilleure performance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème est révélé par un model drift ?',
                        'explanation' => 'Le comportement des données ou la relation entre entrées et cible peut changer et rendre le modèle moins performant.',
                        'choices' => [
                            ['choice_text' => 'Une évolution du contexte pouvant dégrader la performance du modèle', 'is_correct' => true],
                            ['choice_text' => 'Une panne obligatoire du serveur', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des labels', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation garantie de la précision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi monitorer à la fois les données et les prédictions ?',
                        'explanation' => 'Une anomalie peut apparaître au niveau des inputs avant même que la dégradation de la performance ne puisse être mesurée directement.',
                        'choices' => [
                            ['choice_text' => 'Les changements dans les données peuvent annoncer une dégradation future du modèle', 'is_correct' => true],
                            ['choice_text' => 'Les prédictions ne dépendent jamais des données', 'is_correct' => false],
                            ['choice_text' => 'Les données sont toujours stables', 'is_correct' => false],
                            ['choice_text' => 'Le monitoring des données remplace les métriques métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un déploiement canary d’un nouveau modèle ?',
                        'explanation' => 'Le modèle reçoit une petite portion du trafic, ce qui permet d’observer son comportement avant un déploiement généralisé.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque en exposant progressivement le nouveau modèle', 'is_correct' => true],
                            ['choice_text' => 'Remplacer immédiatement tous les systèmes', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute observation en production', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests offline', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de rollback est-elle nécessaire pour un modèle critique ?',
                        'explanation' => 'Si une nouvelle version dégrade la qualité ou le service, il faut pouvoir revenir rapidement à une version connue.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact d’une version défaillante', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute expérimentation', 'is_correct' => false],
                            ['choice_text' => 'Garantir la meilleure précision', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les anciennes versions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un model registry ?',
                        'explanation' => 'Le registry centralise les versions, métadonnées et états des modèles afin de faciliter leur cycle de vie.',
                        'choices' => [
                            ['choice_text' => 'Gérer les versions et le cycle de vie des modèles', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement les datasets', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le système de monitoring', 'is_correct' => false],
                            ['choice_text' => 'Garantir la conformité sans contrôle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les modèles doivent-ils être surveillés après leur mise en production ?',
                        'explanation' => 'Le contexte opérationnel change et les performances peuvent se dégrader avec le temps.',
                        'choices' => [
                            ['choice_text' => 'Parce que les données et le comportement réel peuvent évoluer', 'is_correct' => true],
                            ['choice_text' => 'Parce que les modèles ne fonctionnent jamais en production', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un modèle devient toujours meilleur automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les métriques ne servent qu’avant le déploiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer preprocessing et modèle dans un pipeline de production ?',
                        'explanation' => 'Cette séparation permet de tester, versionner et surveiller chaque composant tout en conservant une cohérence entre entraînement et inférence.',
                        'choices' => [
                            ['choice_text' => 'Pour gérer et valider indépendamment chaque étape du traitement', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les transformations', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter le versioning', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les rollbacks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver des métriques métier pour un modèle de production ?',
                        'explanation' => 'Une amélioration technique ne garantit pas automatiquement une amélioration du résultat métier.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que la performance technique produit réellement de la valeur', 'is_correct' => true],
                            ['choice_text' => 'Pour remplacer toutes les métriques ML', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la validation statistique', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une absence de drift', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Professional — FinOps et valeur métier',
                'description' => 'Analysez les coûts, le retour sur investissement et les compromis entre performance et valeur des systèmes Data Science.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi le coût par prédiction peut-il être plus utile que la facture totale d’un système ML ?',
                        'explanation' => 'Le coût unitaire permet de comparer l’économie du système à son volume de production et à la valeur créée.',
                        'choices' => [
                            ['choice_text' => 'Il relie le coût technique au volume réel d’utilisation', 'is_correct' => true],
                            ['choice_text' => 'Il supprime les coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Il garantit une rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Il mesure uniquement la puissance du GPU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal danger d’un modèle très performant mais extrêmement coûteux ?',
                        'explanation' => 'Le gain de performance peut ne pas compenser le coût supplémentaire si la valeur métier produite est faible.',
                        'choices' => [
                            ['choice_text' => 'Le coût supplémentaire peut dépasser la valeur métier générée', 'is_correct' => true],
                            ['choice_text' => 'La performance devient automatiquement mauvaise', 'is_correct' => false],
                            ['choice_text' => 'Les données deviennent inutilisables', 'is_correct' => false],
                            ['choice_text' => 'Le modèle ne peut plus être entraîné', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût total de possession doit-il inclure l’exploitation du modèle ?',
                        'explanation' => 'Les coûts comprennent l’infrastructure, la surveillance, la maintenance, les équipes, les données et les mises à jour.',
                        'choices' => [
                            ['choice_text' => 'Le coût d’exploitation peut représenter une part importante du coût total', 'is_correct' => true],
                            ['choice_text' => 'L’exploitation est toujours gratuite', 'is_correct' => false],
                            ['choice_text' => 'Les modèles se gèrent automatiquement sans ressources', 'is_correct' => false],
                            ['choice_text' => 'Les coûts ne concernent que le stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle plus petit peut-il être préférable à un modèle plus complexe ?',
                        'explanation' => 'Lorsque les performances sont proches, le modèle plus petit peut réduire les coûts, la latence et la complexité.',
                        'choices' => [
                            ['choice_text' => 'Il peut offrir un meilleur compromis entre performance et coût', 'is_correct' => true],
                            ['choice_text' => 'Les petits modèles sont toujours plus précis', 'is_correct' => false],
                            ['choice_text' => 'Les modèles complexes sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'La taille n’a aucun impact opérationnel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il intégrer la valeur métier dans l’optimisation des coûts ?',
                        'explanation' => 'Réduire une dépense sans considérer l’impact sur les revenus, la qualité ou les risques peut détruire de la valeur plutôt que d’en créer.',
                        'choices' => [
                            ['choice_text' => 'Une réduction de coût peut dégrader la valeur créée par le système', 'is_correct' => true],
                            ['choice_text' => 'Les coûts sont toujours prioritaires sur les résultats', 'is_correct' => false],
                            ['choice_text' => 'La valeur métier ne dépend jamais des modèles', 'is_correct' => false],
                            ['choice_text' => 'La qualité du service n’a aucune importance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est particulièrement utile pour comparer différentes architectures Data Science ?',
                        'explanation' => 'Le coût par résultat métier permet de comparer des architectures produisant une valeur équivalente.',
                        'choices' => [
                            ['choice_text' => 'Le coût par unité de valeur produite', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de fichiers du projet', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de lignes de code uniquement', 'is_correct' => false],
                            ['choice_text' => 'La taille du notebook', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le scaling automatique doit-il être surveillé dans les workloads ML ?',
                        'explanation' => 'Une charge fluctuante ou une règle de scaling mal calibrée peut entraîner une consommation inutilement élevée.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter une surconsommation de ressources et des coûts imprévus', 'is_correct' => true],
                            ['choice_text' => 'Parce que le scaling réduit toujours les coûts', 'is_correct' => false],
                            ['choice_text' => 'Parce que les modèles ne peuvent pas être scalés', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les métriques de performance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis existe entre précision et coût d’inférence ?',
                        'explanation' => 'Une amélioration de précision peut nécessiter un modèle plus grand ou davantage de calcul.',
                        'choices' => [
                            ['choice_text' => 'Une meilleure précision peut nécessiter davantage de ressources', 'is_correct' => true],
                            ['choice_text' => 'La précision est toujours indépendante du coût', 'is_correct' => false],
                            ['choice_text' => 'Les modèles plus précis sont toujours moins chers', 'is_correct' => false],
                            ['choice_text' => 'Le coût n’est jamais lié à l’inférence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi revoir régulièrement les coûts d’un modèle en production ?',
                        'explanation' => 'Le trafic, les données, l’infrastructure et les prix peuvent évoluer et modifier le coût réel.',
                        'choices' => [
                            ['choice_text' => 'Les usages et coûts peuvent évoluer après le déploiement', 'is_correct' => true],
                            ['choice_text' => 'Les coûts restent toujours constants', 'is_correct' => false],
                            ['choice_text' => 'Le trafic n’influence jamais les dépenses', 'is_correct' => false],
                            ['choice_text' => 'Le modèle ne change jamais de comportement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur critère pour décider d’une optimisation coûteuse ?',
                        'explanation' => 'Il faut comparer le gain attendu, son coût et son impact sur les objectifs métier.',
                        'choices' => [
                            ['choice_text' => 'Le rapport entre coût de l’optimisation et valeur métier attendue', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de paramètres ajoutés', 'is_correct' => false],
                            ['choice_text' => 'La popularité de la technologie', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de GPU disponibles uniquement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Professional — Data Science et prise de décision',
                'description' => 'Évaluez la capacité à transformer une analyse Data Science en décisions fiables, mesurables et responsables.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le principal objectif d’un projet Data Science professionnel ?',
                        'explanation' => 'La Data Science doit créer une information exploitable permettant d’améliorer une décision, un processus ou un résultat métier.',
                        'choices' => [
                            ['choice_text' => 'Créer une information fiable permettant d’améliorer une décision ou un processus', 'is_correct' => true],
                            ['choice_text' => 'Maximiser la complexité du modèle', 'is_correct' => false],
                            ['choice_text' => 'Utiliser le plus grand dataset possible sans objectif', 'is_correct' => false],
                            ['choice_text' => 'Produire le plus grand nombre de graphiques possible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir un KPI avant de construire un modèle ?',
                        'explanation' => 'Le KPI permet de déterminer si le projet a réellement amélioré le résultat attendu.',
                        'choices' => [
                            ['choice_text' => 'Pour savoir comment mesurer l’impact réel du projet', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir la performance du modèle', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute collecte de données', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les métriques ML', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une métrique de modèle peut-elle être excellente alors que le projet métier échoue ?',
                        'explanation' => 'La métrique peut ne pas représenter la vraie valeur ou le système peut être mal intégré dans le processus opérationnel.',
                        'choices' => [
                            ['choice_text' => 'La métrique technique peut être mal alignée avec le résultat métier', 'is_correct' => true],
                            ['choice_text' => 'Les métriques ML sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Le modèle est nécessairement incorrect', 'is_correct' => false],
                            ['choice_text' => 'Les utilisateurs ne doivent jamais être impliqués', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une baseline métier ?',
                        'explanation' => 'Elle fournit une référence permettant de mesurer si le nouveau système produit réellement un gain.',
                        'choices' => [
                            ['choice_text' => 'Établir un niveau de référence à dépasser', 'is_correct' => true],
                            ['choice_text' => 'Garantir la causalité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les métriques', 'is_correct' => false],
                            ['choice_text' => 'Empêcher l’expérimentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi intégrer les utilisateurs métier dans le développement d’une solution Data Science ?',
                        'explanation' => 'Ils connaissent les processus, contraintes et cas particuliers qui ne sont pas toujours visibles dans les données.',
                        'choices' => [
                            ['choice_text' => 'Ils apportent le contexte métier nécessaire à l’interprétation et à l’adoption', 'is_correct' => true],
                            ['choice_text' => 'Ils remplacent les data scientists', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent la qualité statistique', 'is_correct' => false],
                            ['choice_text' => 'Ils n’ont aucun rôle dans la validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les résultats d’une analyse doivent-ils préciser les limites ?',
                        'explanation' => 'Les limites indiquent les conditions dans lesquelles les conclusions peuvent être moins fiables ou difficiles à généraliser.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter une interprétation excessive des résultats', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les résultats inutilisables', 'is_correct' => false],
                            ['choice_text' => 'Pour masquer les erreurs', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal avantage d’une expérimentation contrôlée avant une généralisation ?',
                        'explanation' => 'Elle permet d’observer l’impact réel du changement dans un environnement limité avant de l’étendre.',
                        'choices' => [
                            ['choice_text' => 'Mesurer l’effet du changement avant un déploiement généralisé', 'is_correct' => true],
                            ['choice_text' => 'Garantir le succès', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les incertitudes', 'is_correct' => false],
                            ['choice_text' => 'Éviter la mesure des coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une décision Data Science doit-elle considérer les coûts d’erreur ?',
                        'explanation' => 'Deux erreurs de même fréquence peuvent avoir des conséquences très différentes selon le contexte métier.',
                        'choices' => [
                            ['choice_text' => 'Les conséquences des erreurs peuvent être très différentes selon le contexte', 'is_correct' => true],
                            ['choice_text' => 'Toutes les erreurs ont toujours le même coût', 'is_correct' => false],
                            ['choice_text' => 'Les erreurs n’ont aucun impact métier', 'is_correct' => false],
                            ['choice_text' => 'La fréquence seule suffit toujours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une décision automatisée doit-elle parfois conserver un mécanisme de recours humain ?',
                        'explanation' => 'Les modèles peuvent être incorrects ou rencontrer des situations atypiques. Un recours permet de corriger certains cas sensibles.',
                        'choices' => [
                            ['choice_text' => 'Pour traiter les cas atypiques ou les erreurs lorsque leur impact est important', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’automatisation doit toujours être supprimée', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute utilisation du modèle', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que toutes les décisions seront manuelles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe définit le mieux une Data Science professionnelle mature ?',
                        'explanation' => 'La maturité combine rigueur statistique, qualité des données, ingénierie, gouvernance, valeur métier et amélioration continue.',
                        'choices' => [
                            ['choice_text' => 'Combiner qualité des données, rigueur analytique, ingénierie, gouvernance et valeur métier', 'is_correct' => true],
                            ['choice_text' => 'Utiliser uniquement les modèles les plus complexes', 'is_correct' => false],
                            ['choice_text' => 'Maximiser les métriques sans contexte', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute intervention métier', 'is_correct' => false],
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