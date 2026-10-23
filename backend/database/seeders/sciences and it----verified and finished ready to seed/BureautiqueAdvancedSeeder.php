<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class BureautiqueAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'bureautique')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Bureautique Advanced — Excel Modélisation et contrôle',
                'description' => 'Maîtrisez les modèles Excel complexes, les contrôles, les dépendances, les scénarios et la fiabilité des calculs.',
                'difficulty' => 'Advanced',
                'duration' => 22,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi séparer les cellules d’entrée, les calculs et les résultats dans un modèle Excel professionnel ?',
                        'explanation' => 'Cette séparation améliore la lisibilité, limite les modifications accidentelles et facilite les contrôles.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque d’erreur et faciliter l’audit du modèle', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute formule d’être recalculée', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement la précision des données', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une formule complexe répétée dans de nombreuses cellules pose-t-elle un risque ?',
                        'explanation' => 'Une formule complexe dupliquée augmente les possibilités d’incohérence et rend les changements plus difficiles.',
                        'choices' => [
                            ['choice_text' => 'Une modification peut devoir être reproduite à plusieurs endroits et créer des incohérences', 'is_correct' => true],
                            ['choice_text' => 'Excel interdit les formules répétées', 'is_correct' => false],
                            ['choice_text' => 'Les formules répétées deviennent automatiquement plus précises', 'is_correct' => false],
                            ['choice_text' => 'Une formule répétée empêche l’enregistrement du classeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des contrôles de cohérence dans un modèle financier ?',
                        'explanation' => 'Des contrôles permettent d’identifier certaines incohérences entre données et résultats avant utilisation ou diffusion.',
                        'choices' => [
                            ['choice_text' => 'Détecter automatiquement certaines incohérences ou résultats inattendus', 'is_correct' => true],
                            ['choice_text' => 'Garantir que toutes les hypothèses sont correctes', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la validation humaine', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les erreurs de saisie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les hypothèses d’un modèle Excel complexe ?',
                        'explanation' => 'Les résultats dépendent souvent d’hypothèses qui doivent être comprises et réévaluées.',
                        'choices' => [
                            ['choice_text' => 'Permettre aux utilisateurs de comprendre l’origine des résultats et de réévaluer les hypothèses', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute modification du modèle', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement le nombre de formules', 'is_correct' => false],
                            ['choice_text' => 'Créer une présentation PowerPoint', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester un modèle avec des valeurs extrêmes ?',
                        'explanation' => 'Les valeurs extrêmes peuvent révéler des erreurs de logique qui ne sont pas visibles avec des données normales.',
                        'choices' => [
                            ['choice_text' => 'Découvrir des comportements ou erreurs qui n’apparaissent pas dans les scénarios normaux', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les valeurs extrêmes seront toujours réalistes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les limites du modèle', 'is_correct' => false],
                            ['choice_text' => 'Éviter les scénarios métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des noms explicites pour les plages et variables d’un modèle complexe ?',
                        'explanation' => 'Des noms clairs rendent les formules plus lisibles et facilitent la maintenance.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la lisibilité et réduire les erreurs lors de la maintenance', 'is_correct' => true],
                            ['choice_text' => 'Garantir automatiquement l’exactitude des calculs', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute modification du classeur', 'is_correct' => false],
                            ['choice_text' => 'Réduire le nombre de feuilles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi protéger certaines cellules plutôt que protéger toute la feuille sans distinction ?',
                        'explanation' => 'Un modèle partagé peut nécessiter des zones de saisie modifiables et des zones de calcul protégées.',
                        'choices' => [
                            ['choice_text' => 'Permettre la saisie nécessaire tout en protégeant les calculs sensibles', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute saisie utilisateur', 'is_correct' => false],
                            ['choice_text' => 'Garantir que les données d’entrée sont toujours exactes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les validations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer deux versions d’un classeur important après une modification ?',
                        'explanation' => 'Une comparaison permet d’identifier les changements inattendus et de contrôler leurs conséquences.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que seuls les changements attendus ont été introduits', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucune formule ne changera jamais', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les anciennes versions', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute collaboration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter de multiplier les feuilles de calcul sans structure claire ?',
                        'explanation' => 'Un classeur trop fragmenté devient difficile à comprendre et les dépendances entre feuilles sont plus difficiles à suivre.',
                        'choices' => [
                            ['choice_text' => 'Une structure excessive peut rendre les dépendances difficiles à comprendre et maintenir', 'is_correct' => true],
                            ['choice_text' => 'Excel limite toujours le nombre de feuilles à cinq', 'is_correct' => false],
                            ['choice_text' => 'Les feuilles supplémentaires détruisent automatiquement les données', 'is_correct' => false],
                            ['choice_text' => 'Plus de feuilles garantit toujours un meilleur modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est le plus important pour un modèle Excel critique ?',
                        'explanation' => 'Un modèle critique doit être compréhensible, contrôlable, documenté et testé.',
                        'choices' => [
                            ['choice_text' => 'Privilégier la fiabilité, la traçabilité et la maintenabilité du calcul', 'is_correct' => true],
                            ['choice_text' => 'Maximiser le nombre de formules complexes', 'is_correct' => false],
                            ['choice_text' => 'Réduire toutes les feuilles à une seule', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute validation manuelle', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Advanced — Excel analyse de données',
                'description' => 'Approfondissez les tableaux croisés, recherches, synthèses, visualisations et interprétation des données.',
                'difficulty' => 'Advanced',
                'duration' => 22,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi utiliser un tableau croisé dynamique sur un grand jeu de données ?',
                        'explanation' => 'Il permet de synthétiser rapidement des données selon plusieurs dimensions sans modifier la source.',
                        'choices' => [
                            ['choice_text' => 'Analyser et résumer rapidement de grands volumes selon différents critères', 'is_correct' => true],
                            ['choice_text' => 'Modifier définitivement toutes les données sources', 'is_correct' => false],
                            ['choice_text' => 'Remplacer une base de données transactionnelle', 'is_correct' => false],
                            ['choice_text' => 'Garantir que les données sources sont correctes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier la qualité des données avant de construire un dashboard Excel ?',
                        'explanation' => 'Un dashboard peut être visuellement parfait mais produire des conclusions erronées si les données sont incomplètes ou incohérentes.',
                        'choices' => [
                            ['choice_text' => 'Une visualisation fiable dépend de données correctes et cohérentes', 'is_correct' => true],
                            ['choice_text' => 'Les graphiques corrigent automatiquement les données', 'is_correct' => false],
                            ['choice_text' => 'Les dashboards ne dépendent pas des données sources', 'is_correct' => false],
                            ['choice_text' => 'La qualité des données concerne uniquement les bases SQL', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter d’utiliser plusieurs échelles visuelles trompeuses dans un graphique ?',
                        'explanation' => 'Une mauvaise échelle peut exagérer ou minimiser visuellement une différence réelle.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter de donner une impression visuelle disproportionnée par rapport aux données', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’Excel interdit les axes multiples', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les graphiques doivent avoir une seule catégorie', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute différence entre les séries', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une fonction de recherche plutôt que recopier manuellement des informations entre deux tables ?',
                        'explanation' => 'Une recherche automatisée réduit les ressaisies et se met à jour avec les données selon la logique utilisée.',
                        'choices' => [
                            ['choice_text' => 'Réduire les erreurs de ressaisie et automatiser la correspondance entre données', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les relations entre les tables', 'is_correct' => false],
                            ['choice_text' => 'Garantir que toutes les données sont uniques', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute modification des sources', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données doivent-elles généralement avoir une structure tabulaire propre avant une analyse avancée ?',
                        'explanation' => 'Des colonnes cohérentes, des en-têtes clairs et une ligne par observation facilitent les analyses et transformations.',
                        'choices' => [
                            ['choice_text' => 'Une structure régulière facilite les filtres, calculs et analyses', 'is_correct' => true],
                            ['choice_text' => 'Une structure tabulaire supprime tous les doublons automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Les tableaux empêchent l’utilisation de formules', 'is_correct' => false],
                            ['choice_text' => 'Une structure propre garantit toujours l’absence d’erreurs métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi distinguer une donnée manquante d’une valeur réellement nulle ou égale à zéro ?',
                        'explanation' => 'Ces situations ont des significations différentes et peuvent modifier les résultats statistiques.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles peuvent représenter des situations métier différentes', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’Excel traite toujours les trois cas de manière identique', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter d’utiliser des graphiques', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une valeur zéro est toujours une donnée manquante', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi actualiser les sources avant de publier un dashboard ?',
                        'explanation' => 'Un dashboard peut afficher des données anciennes si ses sources n’ont pas été actualisées.',
                        'choices' => [
                            ['choice_text' => 'S’assurer que les résultats reflètent la version attendue des données', 'is_correct' => true],
                            ['choice_text' => 'Garantir que toutes les valeurs sont correctes', 'is_correct' => false],
                            ['choice_text' => 'Modifier le design de tous les graphiques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi afficher trop de KPI sur un même dashboard peut-il réduire son efficacité ?',
                        'explanation' => 'Trop de métriques peuvent noyer les indicateurs importants et rendre les décisions plus difficiles.',
                        'choices' => [
                            ['choice_text' => 'L’excès d’informations peut masquer les indicateurs réellement prioritaires', 'is_correct' => true],
                            ['choice_text' => 'Les dashboards ne peuvent contenir que trois KPI', 'is_correct' => false],
                            ['choice_text' => 'Plus de KPI garantit toujours de meilleures décisions', 'is_correct' => false],
                            ['choice_text' => 'Les utilisateurs ne lisent jamais les graphiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter la définition d’un KPI dans un dashboard ?',
                        'explanation' => 'Un KPI peut être interprété différemment selon son calcul, sa période et ses filtres.',
                        'choices' => [
                            ['choice_text' => 'Éviter les interprétations différentes de la même mesure', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le KPI augmentera chaque mois', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les filtres du dashboard', 'is_correct' => false],
                            ['choice_text' => 'Rendre le KPI indépendant de ses données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester un dashboard avec des cas limites avant diffusion ?',
                        'explanation' => 'Les valeurs inhabituelles peuvent révéler des erreurs de formule, de filtre ou de représentation.',
                        'choices' => [
                            ['choice_text' => 'Identifier les comportements incorrects dans des situations atypiques', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les cas limites ne se produiront jamais', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement les valeurs extrêmes', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute validation des données', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Advanced — Word automatisation et publication',
                'description' => 'Maîtrisez la production de documents structurés à grande échelle, les modèles, références, publipostage et contrôle de publication.',
                'difficulty' => 'Advanced',
                'duration' => 22,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi un modèle Word d’entreprise doit-il être conçu avec des styles plutôt que seulement des formats manuels ?',
                        'explanation' => 'Les styles permettent de modifier et maintenir la charte documentaire de manière cohérente.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la standardisation et les modifications globales du modèle', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute personnalisation du document', 'is_correct' => false],
                            ['choice_text' => 'Garantir que le contenu métier est correct', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de relire les documents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les numérotations manuelles peuvent-elles créer des problèmes dans un long rapport ?',
                        'explanation' => 'Des modifications de structure peuvent rendre les numéros incohérents ou nécessiter de nombreuses corrections.',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent devenir incohérentes lorsque la structure du document évolue', 'is_correct' => true],
                            ['choice_text' => 'Word ne permet pas les numérotations', 'is_correct' => false],
                            ['choice_text' => 'Les numéros manuels sont automatiquement corrigés dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Les numérotations ne peuvent pas apparaître dans un PDF', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des champs automatiques pour certaines informations récurrentes ?',
                        'explanation' => 'Les champs permettent de maintenir certaines informations synchronisées avec la structure du document.',
                        'choices' => [
                            ['choice_text' => 'Réduire les mises à jour manuelles de certaines informations récurrentes', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute modification du document', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement un fichier Excel', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les références croisées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des références croisées dans un long rapport ?',
                        'explanation' => 'Elles permettent de référencer dynamiquement des éléments tels que tableaux, figures ou sections.',
                        'choices' => [
                            ['choice_text' => 'Maintenir des références plus facilement lorsque le document évolue', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le contenu référencé ne changera jamais', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les titres', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les sauts de page', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi effectuer une vérification finale du document après génération automatique ?',
                        'explanation' => 'Une automatisation peut produire des erreurs de données, de mise en page ou de contenu selon les entrées.',
                        'choices' => [
                            ['choice_text' => 'Une génération automatique peut encore produire des anomalies nécessitant une validation humaine', 'is_correct' => true],
                            ['choice_text' => 'L’automatisation garantit toujours un résultat parfait', 'is_correct' => false],
                            ['choice_text' => 'Une validation humaine annule toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Le document généré ne peut jamais contenir d’erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une source de données propre pour un publipostage massif ?',
                        'explanation' => 'Des données incohérentes produisent des documents mal personnalisés.',
                        'choices' => [
                            ['choice_text' => 'La qualité des données source détermine directement la qualité des documents générés', 'is_correct' => true],
                            ['choice_text' => 'Le publipostage corrige automatiquement toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Les données source n’ont aucune influence', 'is_correct' => false],
                            ['choice_text' => 'Les champs personnalisés sont toujours remplis correctement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester le publipostage avec quelques destinataires avant une diffusion massive ?',
                        'explanation' => 'Un test limité peut révéler des erreurs de correspondance, format ou données avant diffusion.',
                        'choices' => [
                            ['choice_text' => 'Détecter les erreurs de personnalisation avant l’envoi à grande échelle', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les données seront parfaites', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute validation finale', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la source de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un document destiné à un public externe doit-il être nettoyé avant export PDF ?',
                        'explanation' => 'Les commentaires, suivis de modifications et informations internes peuvent rester visibles selon les paramètres.',
                        'choices' => [
                            ['choice_text' => 'Éviter de divulguer des informations internes ou des annotations non destinées au public', 'is_correct' => true],
                            ['choice_text' => 'Garantir une compression maximale', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les métadonnées dans tous les cas automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute impression', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des sections et en-têtes cohérents dans un document réglementaire ?',
                        'explanation' => 'Une structure cohérente améliore la navigation, la vérification et la conformité au format attendu.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la navigation, la lisibilité et la vérifiabilité du document', 'is_correct' => true],
                            ['choice_text' => 'Réduire automatiquement le contenu', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les utilisateurs de rechercher du texte', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les annexes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi verrouiller un modèle maître tout en autorisant la création de documents basés dessus ?',
                        'explanation' => 'Cela permet de préserver les standards du modèle tout en autorisant l’utilisation de copies de travail.',
                        'choices' => [
                            ['choice_text' => 'Préserver le standard maître tout en permettant aux utilisateurs de produire leurs propres documents', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute création de document', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les styles', 'is_correct' => false],
                            ['choice_text' => 'Garantir que tous les documents auront le même contenu', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Advanced — PowerPoint storytelling et communication',
                'description' => 'Construisez des présentations exécutives plus efficaces grâce à la hiérarchie de l’information, la visualisation et le storytelling.',
                'difficulty' => 'Advanced',
                'duration' => 22,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une présentation exécutive doit-elle commencer par le message principal plutôt que par tous les détails ?',
                        'explanation' => 'Les décideurs ont besoin de comprendre rapidement la situation, la décision demandée et les implications.',
                        'choices' => [
                            ['choice_text' => 'Permettre aux décideurs de comprendre rapidement le point essentiel et la décision attendue', 'is_correct' => true],
                            ['choice_text' => 'Parce que les détails sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute donnée chiffrée', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire automatiquement la durée de la réunion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une même diapositive ne devrait-elle pas porter plusieurs messages principaux concurrents ?',
                        'explanation' => 'Plusieurs messages de même importance réduisent la hiérarchie et rendent le message difficile à retenir.',
                        'choices' => [
                            ['choice_text' => 'Un message principal clair facilite la compréhension et la mémorisation', 'is_correct' => true],
                            ['choice_text' => 'PowerPoint limite le nombre de messages par diapositive', 'is_correct' => false],
                            ['choice_text' => 'Les données ne peuvent pas être regroupées', 'is_correct' => false],
                            ['choice_text' => 'Les présentations professionnelles ne doivent contenir qu’une donnée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi annoter un graphique plutôt que laisser le public deviner ce qu’il montre ?',
                        'explanation' => 'Une annotation met en évidence l’élément important et réduit l’effort d’interprétation.',
                        'choices' => [
                            ['choice_text' => 'Mettre directement en évidence le point ou la tendance importante', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre tous les graphiques plus complexes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les axes', 'is_correct' => false],
                            ['choice_text' => 'Pour cacher les données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter une palette de couleurs trop large dans une présentation ?',
                        'explanation' => 'Une palette excessive peut réduire la cohérence visuelle et rendre les couleurs moins significatives.',
                        'choices' => [
                            ['choice_text' => 'Préserver une hiérarchie visuelle et donner un sens clair aux couleurs utilisées', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une présentation ne peut utiliser que trois couleurs', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les images', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire toujours la taille du fichier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une structure "problème → analyse → recommandation" dans certaines présentations ?',
                        'explanation' => 'Cette structure aide le public à suivre le raisonnement avant d’arriver à la décision ou recommandation.',
                        'choices' => [
                            ['choice_text' => 'Construire un raisonnement clair menant progressivement à la recommandation', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute analyse intermédiaire', 'is_correct' => false],
                            ['choice_text' => 'Garantir que le public acceptera la recommandation', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute donnée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi placer les détails techniques en annexe d’une présentation exécutive ?',
                        'explanation' => 'L’annexe permet de conserver les informations détaillées sans surcharger le flux principal.',
                        'choices' => [
                            ['choice_text' => 'Préserver la simplicité du message principal tout en gardant les détails disponibles', 'is_correct' => true],
                            ['choice_text' => 'Cacher systématiquement les risques', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les questions', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les informations techniques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester la présentation sur un écran de salle avant une réunion importante ?',
                        'explanation' => 'La taille, le contraste, les polices et les médias peuvent être différents de l’environnement de création.',
                        'choices' => [
                            ['choice_text' => 'Détecter les problèmes de lisibilité ou de compatibilité dans l’environnement réel', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le public sera attentif', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement les animations', 'is_correct' => false],
                            ['choice_text' => 'Modifier le contenu métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une présentation doit-elle indiquer clairement la source d’un chiffre important ?',
                        'explanation' => 'Une source identifiable renforce la crédibilité et permet de vérifier le chiffre.',
                        'choices' => [
                            ['choice_text' => 'Permettre de vérifier l’origine du chiffre et renforcer sa crédibilité', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la valeur numérique du chiffre', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les commentaires', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute interprétation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi adapter une présentation à son audience plutôt que réutiliser exactement le même support ?',
                        'explanation' => 'Les différents publics ont des besoins, connaissances et décisions différentes.',
                        'choices' => [
                            ['choice_text' => 'Les informations utiles et le niveau de détail varient selon le public', 'is_correct' => true],
                            ['choice_text' => 'Chaque présentation doit obligatoirement avoir un design différent', 'is_correct' => false],
                            ['choice_text' => 'Les données changent toujours selon l’audience', 'is_correct' => false],
                            ['choice_text' => 'Les thèmes PowerPoint ne sont jamais réutilisables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal objectif d’une présentation professionnelle avancée ?',
                        'explanation' => 'Une bonne présentation facilite une compréhension ou une décision, plutôt que simplement afficher des informations.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la compréhension et, lorsque nécessaire, soutenir une décision', 'is_correct' => true],
                            ['choice_text' => 'Afficher le maximum d’informations possibles', 'is_correct' => false],
                            ['choice_text' => 'Maximiser le nombre d’animations', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les documents détaillés', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Advanced — Automatisation, intégration et workflow',
                'description' => 'Analysez des workflows bureautiques complexes, l’automatisation des tâches et l’intégration entre outils.',
                'difficulty' => 'Advanced',
                'duration' => 22,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une automatisation entre plusieurs applications doit-elle gérer les erreurs de transmission ?',
                        'explanation' => 'Une étape peut échouer alors que les précédentes ont déjà produit un résultat, ce qui nécessite un comportement de reprise adapté.',
                        'choices' => [
                            ['choice_text' => 'Une défaillance intermédiaire peut laisser le workflow dans un état partiellement traité', 'is_correct' => true],
                            ['choice_text' => 'Les intégrations entre applications ne peuvent jamais échouer', 'is_correct' => false],
                            ['choice_text' => 'Les workflows sont toujours exécutés en une seule opération atomique', 'is_correct' => false],
                            ['choice_text' => 'Les erreurs doivent toujours être ignorées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi rendre un workflow répétable et prévisible ?',
                        'explanation' => 'Un processus répétable est plus facile à tester, surveiller et maintenir.',
                        'choices' => [
                            ['choice_text' => 'Faciliter les tests, la maintenance et l’identification des erreurs', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute modification future', 'is_correct' => false],
                            ['choice_text' => 'Garantir que toutes les données sont parfaites', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les étapes de validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un workflow automatisé doit-il éviter de dépendre d’un fichier stocké uniquement sur un poste personnel ?',
                        'explanation' => 'Une dépendance à un poste individuel peut provoquer des interruptions lorsque l’utilisateur ou la machine est indisponible.',
                        'choices' => [
                            ['choice_text' => 'Réduire la dépendance à une machine ou personne unique', 'is_correct' => true],
                            ['choice_text' => 'Parce que les fichiers locaux sont toujours corrompus', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute utilisation locale', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une automatisation sans données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un processus automatisé doit-il enregistrer les résultats ou événements importants ?',
                        'explanation' => 'La traçabilité facilite le diagnostic et permet de savoir ce qui a réellement été exécuté.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la supervision, l’audit et le diagnostic en cas de problème', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement les performances', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les validations', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter les dépendances circulaires dans un workflow ?',
                        'explanation' => 'Les dépendances circulaires rendent le processus difficile à raisonner et peuvent provoquer des boucles ou blocages.',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent provoquer des boucles, blocages ou comportements difficiles à prévoir', 'is_correct' => true],
                            ['choice_text' => 'Elles accélèrent toujours le traitement', 'is_correct' => false],
                            ['choice_text' => 'Elles garantissent une meilleure intégration', 'is_correct' => false],
                            ['choice_text' => 'Elles suppriment les erreurs de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une automatisation doit-elle avoir un mécanisme de notification en cas d’échec critique ?',
                        'explanation' => 'Sans notification, un workflow peut échouer silencieusement et produire des retards ou erreurs métier.',
                        'choices' => [
                            ['choice_text' => 'Permettre une réaction rapide lorsqu’un traitement important échoue', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le workflow réussira toujours', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les journaux', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute intervention humaine future', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi versionner les scripts ou automatisations importantes ?',
                        'explanation' => 'Le versioning permet de suivre les changements et de revenir à une version antérieure.',
                        'choices' => [
                            ['choice_text' => 'Suivre les modifications et restaurer une version précédente si nécessaire', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute amélioration', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro bug', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les besoins de tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester les workflows avec des données inattendues ?',
                        'explanation' => 'Les données réelles peuvent contenir des valeurs nulles, formats inhabituels ou informations manquantes.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que le processus gère correctement les situations non idéales', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les données inattendues seront supprimées', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les erreurs utilisateur', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute validation humaine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi limiter les permissions d’un workflow automatisé ?',
                        'explanation' => 'Un workflow compromis peut agir avec les permissions dont il dispose.',
                        'choices' => [
                            ['choice_text' => 'Réduire les actions qu’un workflow compromis pourrait effectuer', 'is_correct' => true],
                            ['choice_text' => 'Donner tous les privilèges pour simplifier la configuration', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tout workflow d’exécuter une tâche', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la traçabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer le taux d’échec d’un workflow automatisé ?',
                        'explanation' => 'Un taux d’échec élevé peut révéler des problèmes de conception, données ou dépendances.',
                        'choices' => [
                            ['choice_text' => 'Identifier la fiabilité réelle du processus automatisé', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun workflow ne devra être corrigé', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs d’exécution', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute amélioration', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Advanced — Gouvernance documentaire et conformité',
                'description' => 'Maîtrisez la classification, rétention, validation, accès et traçabilité des documents dans une organisation.',
                'difficulty' => 'Advanced',
                'duration' => 22,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi classer les documents selon leur sensibilité ?',
                        'explanation' => 'La classification permet d’appliquer des règles adaptées au niveau de risque.',
                        'choices' => [
                            ['choice_text' => 'Associer à chaque document les contrôles de protection appropriés', 'is_correct' => true],
                            ['choice_text' => 'Garantir que tous les documents seront publics', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de permissions', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement la taille des fichiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique de rétention doit-elle distinguer les documents actifs des archives ?',
                        'explanation' => 'Les besoins d’accès, de modification et de conservation peuvent être différents selon le statut du document.',
                        'choices' => [
                            ['choice_text' => 'Adapter les règles de conservation et de gestion au cycle de vie du document', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les archives après chaque projet', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun document ne sera modifié', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les utilisateurs de consulter les archives', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la suppression automatique de documents doit-elle être contrôlée ?',
                        'explanation' => 'Une suppression peut être irréversible et certaines données peuvent encore être nécessaires ou soumises à une obligation de conservation.',
                        'choices' => [
                            ['choice_text' => 'Éviter de supprimer des informations encore nécessaires ou devant être conservées', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’aucun document ne doit jamais être supprimé', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute automatisation documentaire', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter le volume de stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver une piste d’audit des modifications d’un document critique ?',
                        'explanation' => 'Elle permet de déterminer ce qui a changé et par qui, ce qui est important pour le contrôle et les investigations.',
                        'choices' => [
                            ['choice_text' => 'Retracer les changements et faciliter les contrôles ou investigations', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute modification future', 'is_correct' => false],
                            ['choice_text' => 'Garantir que le document est toujours correct', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la responsabilité du propriétaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les documents réglementaires doivent-ils avoir un propriétaire clair ?',
                        'explanation' => 'Un propriétaire permet de savoir qui veille à la validité et à la maintenance du document.',
                        'choices' => [
                            ['choice_text' => 'Attribuer la responsabilité de la validité et de la maintenance du document', 'is_correct' => true],
                            ['choice_text' => 'Donner automatiquement tous les droits à cette personne', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de validation', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les audits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les documents de référence approuvés des brouillons ?',
                        'explanation' => 'Un utilisateur doit pouvoir identifier rapidement quelle version possède une valeur officielle.',
                        'choices' => [
                            ['choice_text' => 'Éviter qu’un brouillon soit confondu avec une version officiellement approuvée', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les brouillons automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’un brouillon est toujours incorrect', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute révision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi contrôler les téléchargements de documents très sensibles dans certaines organisations ?',
                        'explanation' => 'Une copie locale peut échapper à certains contrôles centralisés.',
                        'choices' => [
                            ['choice_text' => 'Réduire les possibilités de diffusion non contrôlée d’informations sensibles', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute utilisation professionnelle des documents', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucune fuite ne sera possible', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique documentaire doit-elle prévoir les partages externes ?',
                        'explanation' => 'Les accès externes peuvent avoir des implications particulières de confidentialité, traçabilité et conformité.',
                        'choices' => [
                            ['choice_text' => 'Appliquer des contrôles spécifiques aux personnes extérieures à l’organisation', 'is_correct' => true],
                            ['choice_text' => 'Interdire tous les échanges externes', 'is_correct' => false],
                            ['choice_text' => 'Garantir que tous les documents restent internes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les permissions internes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi revoir périodiquement les propriétaires et permissions des documents ?',
                        'explanation' => 'Les équipes changent et les accès accordés dans le passé peuvent devenir inutiles.',
                        'choices' => [
                            ['choice_text' => 'Retirer les accès et responsabilités devenus obsolètes', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement les privilèges', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les documents anciens', 'is_correct' => false],
                            ['choice_text' => 'Empêcher la collaboration future', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’une gouvernance documentaire mature ?',
                        'explanation' => 'Elle doit permettre aux utilisateurs de trouver, utiliser, partager et conserver les bonnes informations avec les contrôles appropriés.',
                        'choices' => [
                            ['choice_text' => 'Garantir que les documents sont accessibles, fiables, protégés et gérés selon leur cycle de vie', 'is_correct' => true],
                            ['choice_text' => 'Conserver tous les documents sans limite', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tout partage de fichiers', 'is_correct' => false],
                            ['choice_text' => 'Maximiser uniquement le volume de stockage', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Advanced — Cas complexes et décision bureautique',
                'description' => 'Résolvez des scénarios professionnels complexes impliquant Excel, Word, PowerPoint, collaboration, automatisation et gouvernance.',
                'difficulty' => 'Advanced',
                'duration' => 22,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une équipe possède un fichier Excel critique rempli de formules manuelles mais personne ne sait exactement comment il produit ses résultats. Quelle est la priorité ?',
                        'explanation' => 'Avant d’optimiser le fichier, il faut comprendre ses entrées, calculs, dépendances et résultats.',
                        'choices' => [
                            ['choice_text' => 'Documenter et cartographier les entrées, calculs, dépendances et résultats', 'is_correct' => true],
                            ['choice_text' => 'Ajouter immédiatement davantage de formules', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les anciennes feuilles', 'is_correct' => false],
                            ['choice_text' => 'Créer une présentation PowerPoint à partir du fichier sans validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise publie chaque semaine une présentation avec les mêmes graphiques et données actualisées. Quelle approche réduit le plus le travail répétitif ?',
                        'explanation' => 'Un modèle connecté à des données actualisées permet de réutiliser la structure au lieu de reconstruire chaque présentation.',
                        'choices' => [
                            ['choice_text' => 'Créer un modèle réutilisable et automatiser autant que possible l’actualisation des données', 'is_correct' => true],
                            ['choice_text' => 'Recréer manuellement chaque graphique chaque semaine', 'is_correct' => false],
                            ['choice_text' => 'Copier les captures d’écran de la semaine précédente', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les graphiques détaillés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un document Word comporte 150 pages et plusieurs personnes doivent le modifier. Quelle combinaison est la plus adaptée ?',
                        'explanation' => 'Une structure à base de styles, commentaires, suivi des modifications et gestion des versions réduit les problèmes de collaboration.',
                        'choices' => [
                            ['choice_text' => 'Styles structurés, suivi des modifications, commentaires et gestion des versions', 'is_correct' => true],
                            ['choice_text' => 'Copies locales indépendantes envoyées par e-mail', 'is_correct' => false],
                            ['choice_text' => 'Mise en forme manuelle sans styles', 'is_correct' => false],
                            ['choice_text' => 'Une seule personne modifie le document sans historique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un dashboard indique une hausse spectaculaire d’un KPI mais la source vient de subir une transformation. Quelle action doit être faite avant de communiquer le résultat ?',
                        'explanation' => 'Une modification de source peut changer la définition ou le calcul du KPI et fausser une comparaison historique.',
                        'choices' => [
                            ['choice_text' => 'Vérifier la continuité de la définition, du calcul et de la source du KPI', 'is_correct' => true],
                            ['choice_text' => 'Présenter immédiatement la hausse comme une amélioration', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les anciennes données', 'is_correct' => false],
                            ['choice_text' => 'Changer uniquement la couleur du graphique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe envoie chaque mois 5 000 e-mails personnalisés depuis un fichier Excel. Quelle approche est la plus importante avant automatisation complète ?',
                        'explanation' => 'La qualité des données et les tests sur un petit échantillon sont essentiels pour éviter une diffusion massive d’erreurs.',
                        'choices' => [
                            ['choice_text' => 'Valider les données sources et tester le processus sur un échantillon contrôlé', 'is_correct' => true],
                            ['choice_text' => 'Automatiser directement l’envoi des 5 000 messages', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles des destinataires', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les données manquantes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe dispose d’un dossier partagé contenant des centaines de fichiers sans règle de nommage ni propriétaires. Quel est le problème principal ?',
                        'explanation' => 'Sans gouvernance, les utilisateurs ont du mal à identifier les versions, propriétaires et documents officiels.',
                        'choices' => [
                            ['choice_text' => 'L’absence de gouvernance documentaire crée des problèmes de recherche, responsabilité et version', 'is_correct' => true],
                            ['choice_text' => 'Le problème est uniquement la taille du disque', 'is_correct' => false],
                            ['choice_text' => 'Les fichiers sont automatiquement protégés parce qu’ils sont partagés', 'is_correct' => false],
                            ['choice_text' => 'Le dossier doit être supprimé immédiatement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un modèle Excel doit être utilisé par 50 personnes, mais seules 5 doivent modifier les formules. Quelle conception est la plus appropriée ?',
                        'explanation' => 'Il faut rendre les zones de saisie accessibles et protéger les zones de calcul selon les besoins.',
                        'choices' => [
                            ['choice_text' => 'Protéger les cellules de calcul et laisser modifiables les zones d’entrée prévues', 'is_correct' => true],
                            ['choice_text' => 'Donner les droits de modification de toutes les cellules à tout le monde', 'is_correct' => false],
                            ['choice_text' => 'Rendre toutes les cellules verrouillées', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les formules avant distribution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une présentation contient beaucoup d’informations techniques destinées à une direction générale. Quelle amélioration est la plus pertinente ?',
                        'explanation' => 'Le support principal doit mettre l’accent sur les décisions, impacts et messages clés, tandis que les détails peuvent être placés en annexe.',
                        'choices' => [
                            ['choice_text' => 'Recentrer les diapositives principales sur les décisions et impacts, avec les détails en annexe', 'is_correct' => true],
                            ['choice_text' => 'Ajouter encore plus de texte sur chaque diapositive', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les données techniques sans exception', 'is_correct' => false],
                            ['choice_text' => 'Ajouter davantage d’animations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un workflow automatique crée des fichiers mais échoue parfois silencieusement. Quelle amélioration est prioritaire ?',
                        'explanation' => 'Un échec silencieux empêche l’équipe de savoir qu’une opération importante n’a pas été terminée.',
                        'choices' => [
                            ['choice_text' => 'Ajouter une détection d’erreur, une journalisation et une notification adaptée', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les logs pour simplifier le workflow', 'is_correct' => false],
                            ['choice_text' => 'Augmenter le nombre d’étapes manuelles sans diagnostic', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les échecs rares', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une organisation souhaite donner accès à des documents sensibles à des partenaires externes pendant seulement deux semaines. Quelle approche est la plus sûre ?',
                        'explanation' => 'Un accès temporaire limité réduit la fenêtre d’exposition et permet de retirer automatiquement ou manuellement les droits après la période prévue.',
                        'choices' => [
                            ['choice_text' => 'Accorder un accès limité et temporaire avec contrôle des permissions et expiration', 'is_correct' => true],
                            ['choice_text' => 'Créer un lien public permanent', 'is_correct' => false],
                            ['choice_text' => 'Envoyer les documents à toutes les adresses de l’organisation', 'is_correct' => false],
                            ['choice_text' => 'Partager le mot de passe du compte de l’équipe', 'is_correct' => false],
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