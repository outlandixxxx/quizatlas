<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class BureautiqueIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'bureautique')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Bureautique Intermediate — Word avancé et documents professionnels',
                'description' => 'Approfondissez Microsoft Word : styles, sections, tableaux, navigation, modèles et production de documents professionnels.',
                'difficulty' => 'Intermediate',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi utiliser les styles Word plutôt que formater manuellement chaque titre ?',
                        'explanation' => 'Les styles permettent de maintenir une présentation cohérente et de modifier plusieurs éléments en une seule opération.',
                        'choices' => [
                            ['choice_text' => 'Maintenir une mise en forme cohérente et faciliter les modifications globales', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute modification du document', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement le nombre de pages', 'is_correct' => false],
                            ['choice_text' => 'Convertir le document en présentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un rapport contient plusieurs niveaux de titres. Quelle fonctionnalité facilite la navigation entre les sections ?',
                        'explanation' => 'Les titres structurés avec les styles appropriés permettent d’utiliser le volet de navigation et d’autres fonctions de structure.',
                        'choices' => [
                            ['choice_text' => 'Utiliser les styles de titres et le volet de navigation', 'is_correct' => true],
                            ['choice_text' => 'Insérer une image à chaque page', 'is_correct' => false],
                            ['choice_text' => 'Mettre tout le texte en gras', 'is_correct' => false],
                            ['choice_text' => 'Créer un fichier Excel séparé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser un saut de section plutôt qu’un simple saut de page ?',
                        'explanation' => 'Une section peut avoir sa propre mise en page, orientation, en-tête ou pied de page.',
                        'choices' => [
                            ['choice_text' => 'Pour appliquer une mise en page différente à une partie du document', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer automatiquement une page', 'is_correct' => false],
                            ['choice_text' => 'Pour convertir le document en PDF', 'is_correct' => false],
                            ['choice_text' => 'Pour corriger l’orthographe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Vous devez créer un rapport avec une page en portrait et une autre en paysage. Quelle solution est adaptée ?',
                        'explanation' => 'Les sauts de section permettent d’appliquer des orientations différentes dans un même document.',
                        'choices' => [
                            ['choice_text' => 'Utiliser des sauts de section pour séparer les parties de mise en page', 'is_correct' => true],
                            ['choice_text' => 'Créer deux documents sans autre possibilité', 'is_correct' => false],
                            ['choice_text' => 'Modifier uniquement la taille de la police', 'is_correct' => false],
                            ['choice_text' => 'Insérer une image de la page paysage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une table des matières automatique ?',
                        'explanation' => 'Elle peut être générée à partir des titres structurés et mise à jour lorsque le document évolue.',
                        'choices' => [
                            ['choice_text' => 'Générer et actualiser la structure du document à partir des titres', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement le contenu du rapport', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les notes de bas de page', 'is_correct' => false],
                            ['choice_text' => 'Protéger le document contre les suppressions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt principal du publipostage dans Word ?',
                        'explanation' => 'Le publipostage permet de générer plusieurs documents personnalisés à partir d’une source de données.',
                        'choices' => [
                            ['choice_text' => 'Produire plusieurs documents personnalisés à partir d’une liste de données', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement une base de données relationnelle', 'is_correct' => false],
                            ['choice_text' => 'Transformer toutes les lettres en présentations', 'is_correct' => false],
                            ['choice_text' => 'Protéger un document contre les virus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une liste de styles cohérente dans un modèle d’entreprise ?',
                        'explanation' => 'Les modèles permettent d’appliquer rapidement des standards visuels communs.',
                        'choices' => [
                            ['choice_text' => 'Standardiser la présentation des documents produits par différentes personnes', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les utilisateurs de modifier le contenu', 'is_correct' => false],
                            ['choice_text' => 'Réduire la taille des fichiers à zéro', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les tableaux Word peuvent-ils devenir difficiles à maintenir lorsqu’ils sont très complexes ?',
                        'explanation' => 'Des tableaux fortement imbriqués ou mal structurés deviennent plus difficiles à mettre en forme et à modifier.',
                        'choices' => [
                            ['choice_text' => 'Une structure trop complexe peut compliquer la mise en page et les modifications', 'is_correct' => true],
                            ['choice_text' => 'Les tableaux Word ne peuvent jamais contenir plusieurs lignes', 'is_correct' => false],
                            ['choice_text' => 'Les tableaux supprimeraient automatiquement le texte', 'is_correct' => false],
                            ['choice_text' => 'Les tableaux ne peuvent pas être imprimés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier les sauts de page avant de distribuer un rapport ?',
                        'explanation' => 'Des sauts mal placés peuvent produire des pages presque vides, des titres isolés ou des tableaux mal répartis.',
                        'choices' => [
                            ['choice_text' => 'Éviter une pagination peu professionnelle ou difficile à lire', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement le contenu', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les espaces blancs', 'is_correct' => false],
                            ['choice_text' => 'Créer une copie de sauvegarde', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des modèles Word dans un environnement professionnel ?',
                        'explanation' => 'Un modèle peut fournir une structure, des styles et des éléments récurrents réutilisables.',
                        'choices' => [
                            ['choice_text' => 'Accélérer la création de documents et harmoniser leur présentation', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute personnalisation du contenu', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de relecture', 'is_correct' => false],
                            ['choice_text' => 'Garantir que tous les documents contiendront les mêmes informations', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Intermediate — Excel formules et analyse',
                'description' => 'Approfondissez les formules Excel, références, fonctions conditionnelles et méthodes d’analyse.',
                'difficulty' => 'Intermediate',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi utiliser une référence absolue dans une formule Excel ?',
                        'explanation' => 'Une référence absolue permet de conserver une cellule fixe lorsqu’une formule est recopiée.',
                        'choices' => [
                            ['choice_text' => 'Conserver la référence d’une cellule fixe lors de la copie de la formule', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute formule d’être recalculée', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement les doublons', 'is_correct' => false],
                            ['choice_text' => 'Transformer une formule en texte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans quel cas une référence relative est-elle généralement utile ?',
                        'explanation' => 'Elle permet à une formule de s’adapter automatiquement lorsqu’elle est copiée vers une autre ligne ou colonne.',
                        'choices' => [
                            ['choice_text' => 'Lorsque la formule doit adapter ses références selon sa nouvelle position', 'is_correct' => true],
                            ['choice_text' => 'Lorsque toutes les cellules doivent rester identiques', 'is_correct' => false],
                            ['choice_text' => 'Lorsque le fichier ne contient aucune formule', 'is_correct' => false],
                            ['choice_text' => 'Lorsque l’on veut protéger une feuille', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle fonction est adaptée pour effectuer un calcul différent selon qu’une condition est vraie ou fausse ?',
                        'explanation' => 'La fonction SI permet de retourner une valeur ou une autre selon le résultat d’une condition.',
                        'choices' => [
                            ['choice_text' => 'SI', 'is_correct' => true],
                            ['choice_text' => 'SOMME', 'is_correct' => false],
                            ['choice_text' => 'MOYENNE', 'is_correct' => false],
                            ['choice_text' => 'MAX', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les erreurs #DIV/0! apparaissent-elles dans Excel ?',
                        'explanation' => 'Cette erreur apparaît lorsqu’une formule tente notamment de diviser une valeur par zéro ou une cellule vide selon le cas.',
                        'choices' => [
                            ['choice_text' => 'Une formule tente notamment de diviser par zéro', 'is_correct' => true],
                            ['choice_text' => 'Le fichier est toujours corrompu', 'is_correct' => false],
                            ['choice_text' => 'Une cellule contient automatiquement du texte', 'is_correct' => false],
                            ['choice_text' => 'Le classeur ne possède pas de feuille', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une fonction conditionnelle plutôt que calculer manuellement les mêmes résultats ?',
                        'explanation' => 'Une formule conditionnelle automatise une règle et se recalcule lorsque les données changent.',
                        'choices' => [
                            ['choice_text' => 'Automatiser une règle de calcul et la recalculer lorsque les données évoluent', 'is_correct' => true],
                            ['choice_text' => 'Éviter toute modification future', 'is_correct' => false],
                            ['choice_text' => 'Transformer les données en graphiques automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les formules existantes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une plage nommée dans un classeur complexe ?',
                        'explanation' => 'Une plage nommée peut rendre les formules et certaines opérations plus faciles à comprendre.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la lisibilité et la maintenance de certaines formules', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les données ne changeront jamais', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les lignes vides', 'is_correct' => false],
                            ['choice_text' => 'Protéger automatiquement la feuille', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier les dépendances entre cellules lorsqu’un classeur devient complexe ?',
                        'explanation' => 'Une formule peut dépendre de nombreuses cellules et une modification peut avoir des effets en cascade.',
                        'choices' => [
                            ['choice_text' => 'Comprendre l’impact d’une modification sur les résultats calculés', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les formules', 'is_correct' => false],
                            ['choice_text' => 'Empêcher Excel de recalculer', 'is_correct' => false],
                            ['choice_text' => 'Modifier automatiquement toutes les feuilles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les données brutes des calculs et de la présentation dans un classeur complexe ?',
                        'explanation' => 'Cette séparation limite les erreurs et facilite la maintenance du modèle.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la maintenance, la vérification et la réutilisation des données', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute analyse', 'is_correct' => false],
                            ['choice_text' => 'Forcer toutes les données à être saisies deux fois', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les graphiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser le formatage conditionnel dans un tableau de suivi ?',
                        'explanation' => 'Il permet de mettre visuellement en évidence certaines valeurs selon des règles.',
                        'choices' => [
                            ['choice_text' => 'Mettre automatiquement en évidence des valeurs qui répondent à certaines conditions', 'is_correct' => true],
                            ['choice_text' => 'Modifier définitivement les valeurs', 'is_correct' => false],
                            ['choice_text' => 'Créer une nouvelle base de données', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les formules', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi contrôler les cellules contenant des formules dans un modèle partagé ?',
                        'explanation' => 'Des utilisateurs peuvent modifier accidentellement des formules et produire des résultats incorrects.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque de modification accidentelle des calculs', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute saisie de données', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les résultats calculés', 'is_correct' => false],
                            ['choice_text' => 'Garantir que les données sont toujours exactes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Intermediate — Excel tableaux, filtres et graphiques',
                'description' => 'Apprenez à structurer des données, utiliser les tableaux Excel, filtrer les informations et construire des visualisations adaptées.',
                'difficulty' => 'Intermediate',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi convertir une plage de données en tableau Excel ?',
                        'explanation' => 'Les tableaux facilitent notamment le filtrage, l’expansion automatique et certaines références structurées.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la gestion, le filtrage et l’extension structurée des données', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les formules', 'is_correct' => false],
                            ['choice_text' => 'Transformer automatiquement le tableau en graphique', 'is_correct' => false],
                            ['choice_text' => 'Empêcher l’ajout de nouvelles lignes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter les lignes complètement vides au milieu d’un jeu de données destiné à l’analyse ?',
                        'explanation' => 'Des coupures peuvent perturber certaines opérations de tri, filtre ou détection automatique de plages.',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent interrompre certaines opérations automatiques sur la plage de données', 'is_correct' => true],
                            ['choice_text' => 'Elles suppriment automatiquement toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Elles rendent Excel incapable d’enregistrer le fichier', 'is_correct' => false],
                            ['choice_text' => 'Elles améliorent toujours la qualité des graphiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel graphique convient généralement à l’évolution d’une valeur au fil du temps ?',
                        'explanation' => 'Un graphique en courbes est souvent adapté pour montrer des tendances chronologiques.',
                        'choices' => [
                            ['choice_text' => 'Un graphique en courbes', 'is_correct' => true],
                            ['choice_text' => 'Un graphique circulaire dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Une zone de texte', 'is_correct' => false],
                            ['choice_text' => 'Une liste à puces', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un graphique circulaire est-il généralement mieux adapté à un petit nombre de catégories ?',
                        'explanation' => 'Avec trop de catégories, les parts deviennent difficiles à comparer visuellement.',
                        'choices' => [
                            ['choice_text' => 'Trop de catégories rendent les parts difficiles à distinguer et comparer', 'is_correct' => true],
                            ['choice_text' => 'Excel limite toujours les graphiques à cinq catégories', 'is_correct' => false],
                            ['choice_text' => 'Les graphiques circulaires ne peuvent contenir aucune donnée numérique', 'is_correct' => false],
                            ['choice_text' => 'Les graphiques circulaires fonctionnent uniquement avec des dates', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il choisir un graphique en fonction du message à communiquer ?',
                        'explanation' => 'Le type de graphique doit faciliter l’interprétation de la tendance ou comparaison recherchée.',
                        'choices' => [
                            ['choice_text' => 'Le type de graphique influence la facilité avec laquelle le lecteur comprend les données', 'is_correct' => true],
                            ['choice_text' => 'Tous les graphiques communiquent toujours la même information', 'is_correct' => false],
                            ['choice_text' => 'Le graphique le plus coloré est toujours le meilleur', 'is_correct' => false],
                            ['choice_text' => 'Le graphique n’a aucun lien avec les données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi figer ou garder visible la ligne d’en-tête lors de la consultation d’un long tableau ?',
                        'explanation' => 'Les en-têtes permettent de comprendre la signification des colonnes lorsque l’on fait défiler les données.',
                        'choices' => [
                            ['choice_text' => 'Garder les noms de colonnes visibles pour conserver le contexte', 'is_correct' => true],
                            ['choice_text' => 'Empêcher tout défilement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les filtres', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement une formule', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi supprimer les doublons doit-il être fait avec prudence ?',
                        'explanation' => 'Deux lignes semblables ne sont pas forcément des doublons réels et la suppression peut faire perdre des informations.',
                        'choices' => [
                            ['choice_text' => 'Des lignes similaires peuvent représenter des enregistrements réellement distincts', 'is_correct' => true],
                            ['choice_text' => 'Excel ne peut jamais détecter les doublons', 'is_correct' => false],
                            ['choice_text' => 'Les doublons améliorent toujours les résultats', 'is_correct' => false],
                            ['choice_text' => 'La suppression des doublons est irréversible dans tous les cas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier les unités avant de construire un graphique ?',
                        'explanation' => 'Des unités incohérentes peuvent produire une représentation trompeuse.',
                        'choices' => [
                            ['choice_text' => 'Des unités incohérentes peuvent rendre les comparaisons trompeuses', 'is_correct' => true],
                            ['choice_text' => 'Les graphiques convertissent toujours automatiquement toutes les unités correctement', 'is_correct' => false],
                            ['choice_text' => 'Les unités n’ont aucun impact visuel', 'is_correct' => false],
                            ['choice_text' => 'Les graphiques ne peuvent représenter que des nombres entiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier les filtres actifs avant d’interpréter un total dans Excel ?',
                        'explanation' => 'Un filtre peut masquer des lignes et faire croire qu’un total représente l’ensemble des données alors qu’il ne concerne qu’une partie.',
                        'choices' => [
                            ['choice_text' => 'Un filtre peut limiter les données visibles et donc modifier l’interprétation du résultat', 'is_correct' => true],
                            ['choice_text' => 'Un filtre détruit toujours les lignes masquées', 'is_correct' => false],
                            ['choice_text' => 'Les filtres n’ont aucun effet sur l’affichage', 'is_correct' => false],
                            ['choice_text' => 'Les filtres modifient toujours définitivement les données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ajouter un titre clair à un graphique ?',
                        'explanation' => 'Le titre permet au lecteur de comprendre immédiatement ce que représente la visualisation.',
                        'choices' => [
                            ['choice_text' => 'Donner rapidement le contexte et le message principal du graphique', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la précision des données', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute modification du graphique', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité des axes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Intermediate — PowerPoint professionnel',
                'description' => 'Approfondissez la conception de présentations professionnelles, les thèmes, masques, graphiques et cohérence visuelle.',
                'difficulty' => 'Intermediate',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est l’intérêt du masque des diapositives dans PowerPoint ?',
                        'explanation' => 'Le masque permet de définir des éléments communs pour plusieurs diapositives.',
                        'choices' => [
                            ['choice_text' => 'Gérer de manière centralisée certains éléments communs des diapositives', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement le contenu de chaque présentation', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les animations', 'is_correct' => false],
                            ['choice_text' => 'Convertir PowerPoint en Excel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser le masque plutôt que modifier manuellement le logo sur chaque diapositive ?',
                        'explanation' => 'Une modification centralisée est plus rapide et réduit les incohérences.',
                        'choices' => [
                            ['choice_text' => 'Permettre une modification cohérente et centralisée', 'is_correct' => true],
                            ['choice_text' => 'Empêcher tout changement du logo', 'is_correct' => false],
                            ['choice_text' => 'Réduire le nombre de diapositives', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les thèmes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi limiter le nombre de polices dans une présentation professionnelle ?',
                        'explanation' => 'Trop de polices différentes peuvent rendre la présentation incohérente et difficile à lire.',
                        'choices' => [
                            ['choice_text' => 'Maintenir une hiérarchie visuelle cohérente et lisible', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la vitesse du diaporama', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les images d’apparaître', 'is_correct' => false],
                            ['choice_text' => 'Réduire systématiquement le nombre de diapositives', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des guides et outils d’alignement dans PowerPoint ?',
                        'explanation' => 'Ils aident à positionner les éléments de manière régulière et professionnelle.',
                        'choices' => [
                            ['choice_text' => 'Obtenir une disposition régulière et cohérente des éléments', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement les notes du présentateur', 'is_correct' => false],
                            ['choice_text' => 'Changer les données du graphique', 'is_correct' => false],
                            ['choice_text' => 'Protéger les diapositives', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un graphique importé dans PowerPoint doit-il rester lisible à distance ?',
                        'explanation' => 'Une présentation est souvent regardée sur un écran éloigné et le niveau de détail doit rester compréhensible.',
                        'choices' => [
                            ['choice_text' => 'Les participants doivent pouvoir comprendre rapidement l’information même à distance', 'is_correct' => true],
                            ['choice_text' => 'Les graphiques PowerPoint ne peuvent pas contenir de légendes', 'is_correct' => false],
                            ['choice_text' => 'La lisibilité n’a aucun rapport avec la présentation', 'is_correct' => false],
                            ['choice_text' => 'Il faut toujours afficher toutes les données disponibles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une diapositive de synthèse après plusieurs diapositives détaillées ?',
                        'explanation' => 'Une synthèse permet de rappeler les messages principaux et d’aider le public à retenir l’essentiel.',
                        'choices' => [
                            ['choice_text' => 'Recentrer l’attention sur les messages clés', 'is_correct' => true],
                            ['choice_text' => 'Augmenter artificiellement le nombre de diapositives', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les autres diapositives', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les notes du présentateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une animation complexe peut-elle nuire à une présentation ?',
                        'explanation' => 'Un effet trop complexe peut détourner l’attention du contenu et ralentir le déroulement.',
                        'choices' => [
                            ['choice_text' => 'Elle peut distraire le public et détourner l’attention du message', 'is_correct' => true],
                            ['choice_text' => 'Les animations diminuent toujours la qualité des images', 'is_correct' => false],
                            ['choice_text' => 'PowerPoint interdit plusieurs animations', 'is_correct' => false],
                            ['choice_text' => 'Une animation complexe améliore toujours la compréhension', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi synchroniser le contenu des notes du présentateur avec les diapositives ?',
                        'explanation' => 'Les notes doivent aider l’orateur à présenter la diapositive correspondante.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la présentation orale sans détourner l’attention du public', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement une transcription parfaite', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les diapositives', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute modification de la présentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester une présentation sur le matériel réellement utilisé ?',
                        'explanation' => 'Les polices, médias, dimensions et connexions peuvent se comporter différemment selon l’environnement.',
                        'choices' => [
                            ['choice_text' => 'Détecter les problèmes qui peuvent apparaître sur l’environnement réel', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le public sera attentif', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement la taille des diapositives', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les animations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi créer une hiérarchie visuelle dans une diapositive ?',
                        'explanation' => 'La hiérarchie aide le public à distinguer titre, idée principale, détails et informations secondaires.',
                        'choices' => [
                            ['choice_text' => 'Guider l’attention du public vers les informations les plus importantes', 'is_correct' => true],
                            ['choice_text' => 'Remplir tout l’espace disponible', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout espace blanc', 'is_correct' => false],
                            ['choice_text' => 'Garantir que toutes les informations auront la même importance', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Intermediate — Collaboration et documents partagés',
                'description' => 'Maîtrisez les pratiques de collaboration documentaire, permissions, versions, commentaires et validation.',
                'difficulty' => 'Intermediate',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi éviter de donner un accès de modification à toutes les personnes ayant accès à un document ?',
                        'explanation' => 'Un accès de modification trop large augmente le risque de changements accidentels ou non autorisés.',
                        'choices' => [
                            ['choice_text' => 'Limiter les modifications aux personnes qui en ont réellement besoin', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute consultation', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l’historique des versions', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le document plus lourd', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des commentaires plutôt que modifier directement le contenu lors d’une revue ?',
                        'explanation' => 'Les commentaires permettent de discuter des modifications avant qu’elles soient intégrées.',
                        'choices' => [
                            ['choice_text' => 'Permettre une discussion structurée avant de modifier définitivement le contenu', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les autres utilisateurs de lire le document', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement les erreurs', 'is_correct' => false],
                            ['choice_text' => 'Créer une nouvelle feuille Excel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser l’historique des versions dans un document partagé ?',
                        'explanation' => 'Il permet de comprendre l’évolution du document et éventuellement de restaurer une version antérieure.',
                        'choices' => [
                            ['choice_text' => 'Suivre les modifications et restaurer une version précédente si nécessaire', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute nouvelle modification', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les sauvegardes automatiques', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement un PDF', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une convention de nommage est-elle importante dans un grand projet documentaire ?',
                        'explanation' => 'Une convention commune facilite le classement et réduit les ambiguïtés entre fichiers.',
                        'choices' => [
                            ['choice_text' => 'Faciliter le classement, la recherche et l’identification des versions', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les fichiers ne peuvent jamais être supprimés', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement la taille des fichiers', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les commentaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi valider le propriétaire d’un document important ?',
                        'explanation' => 'Un propriétaire identifié sait généralement qui maintient le contenu et décide des changements.',
                        'choices' => [
                            ['choice_text' => 'Clarifier la responsabilité du contenu et de sa maintenance', 'is_correct' => true],
                            ['choice_text' => 'Donner automatiquement tous les droits au propriétaire', 'is_correct' => false],
                            ['choice_text' => 'Éviter les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Empêcher le partage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter de conserver plusieurs copies locales d’un même document partagé ?',
                        'explanation' => 'Des copies multiples rendent plus probable le travail sur une version obsolète.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque qu’une personne modifie une version qui n’est plus la plus récente', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute sauvegarde locale', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire automatiquement l’espace cloud', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l’historique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une équipe devrait-elle définir un processus de validation avant de marquer un document comme final ?',
                        'explanation' => 'Un processus clair réduit le risque de publier un document incomplet ou contenant des modifications non validées.',
                        'choices' => [
                            ['choice_text' => 'Éviter qu’une version non relue ou non approuvée soit considérée comme définitive', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les commentaires dès le début', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les anciennes versions', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement une archive permanente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier les liens partagés périodiquement ?',
                        'explanation' => 'Des liens peuvent conserver des autorisations trop larges après un changement de besoin.',
                        'choices' => [
                            ['choice_text' => 'Détecter des accès qui ne sont plus justifiés', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les documents sont toujours modifiables', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement les documents anciens', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la vitesse de synchronisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi distinguer les dossiers de travail des archives ?',
                        'explanation' => 'Une séparation claire aide à savoir quels documents sont actifs et lesquels sont conservés principalement pour référence.',
                        'choices' => [
                            ['choice_text' => 'Réduire la confusion entre documents actifs et documents conservés pour référence', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les documents anciens immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les recherches', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des permissions identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une équipe doit-elle éviter de supprimer directement un document dont le statut est incertain ?',
                        'explanation' => 'Une suppression prématurée peut faire perdre une information encore nécessaire.',
                        'choices' => [
                            ['choice_text' => 'Vérifier son propriétaire, son usage et les politiques de conservation avant suppression', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’aucun document ne doit jamais être supprimé', 'is_correct' => false],
                            ['choice_text' => 'Parce que les archives sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter l’espace utilisé', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Intermediate — Email professionnel et gestion du temps',
                'description' => 'Approfondissez la communication professionnelle par e-mail, les règles de messagerie et la gestion des réunions.',
                'difficulty' => 'Intermediate',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi limiter l’utilisation de "Répondre à tous" ?',
                        'explanation' => 'Tous les destinataires n’ont pas toujours besoin de recevoir chaque réponse.',
                        'choices' => [
                            ['choice_text' => 'Éviter d’envoyer inutilement des messages à des personnes qui ne sont pas concernées', 'is_correct' => true],
                            ['choice_text' => 'Empêcher l’expéditeur de recevoir la réponse', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement les pièces jointes', 'is_correct' => false],
                            ['choice_text' => 'Garantir la confidentialité du message', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une signature professionnelle standardisée ?',
                        'explanation' => 'Une signature cohérente fournit des informations d’identification utiles et homogènes.',
                        'choices' => [
                            ['choice_text' => 'Fournir des informations professionnelles cohérentes au destinataire', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer automatiquement les e-mails', 'is_correct' => false],
                            ['choice_text' => 'Garantir que le message sera lu', 'is_correct' => false],
                            ['choice_text' => 'Réduire la taille des messages', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi donner un objet précis à un e-mail comportant une action attendue ?',
                        'explanation' => 'Le destinataire peut identifier plus rapidement la demande et son niveau de priorité.',
                        'choices' => [
                            ['choice_text' => 'Permettre au destinataire de comprendre rapidement la demande et son contexte', 'is_correct' => true],
                            ['choice_text' => 'Empêcher l’e-mail d’être archivé', 'is_correct' => false],
                            ['choice_text' => 'Garantir une réponse immédiate', 'is_correct' => false],
                            ['choice_text' => 'Augmenter le nombre de destinataires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi résumer une longue conversation avant de transmettre un e-mail à une nouvelle personne ?',
                        'explanation' => 'Un résumé réduit le temps nécessaire pour comprendre le contexte.',
                        'choices' => [
                            ['choice_text' => 'Donner le contexte nécessaire sans obliger le nouveau participant à parcourir tout l’historique', 'is_correct' => true],
                            ['choice_text' => 'Supprimer définitivement les anciens messages', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les réponses futures', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement un compte utilisateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une réunion sans objectif clair peut-elle être inefficace ?',
                        'explanation' => 'Sans objectif, les participants peuvent discuter sans décision ou résultat précis.',
                        'choices' => [
                            ['choice_text' => 'Elle risque de consommer du temps sans produire de résultat identifiable', 'is_correct' => true],
                            ['choice_text' => 'Les réunions sans objectif sont toujours plus courtes', 'is_correct' => false],
                            ['choice_text' => 'Un agenda n’a aucune influence sur une réunion', 'is_correct' => false],
                            ['choice_text' => 'Un objectif clair empêche toute discussion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi envoyer un ordre du jour avant une réunion importante ?',
                        'explanation' => 'Les participants peuvent préparer les informations nécessaires et comprendre les sujets à traiter.',
                        'choices' => [
                            ['choice_text' => 'Permettre aux participants de se préparer et cadrer la discussion', 'is_correct' => true],
                            ['choice_text' => 'Garantir que la réunion sera toujours courte', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les participants de poser des questions', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les comptes rendus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi résumer les décisions après une réunion ?',
                        'explanation' => 'Le résumé permet de clarifier les décisions, responsabilités et prochaines étapes.',
                        'choices' => [
                            ['choice_text' => 'Clarifier les décisions, responsables et actions à venir', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement une présentation', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout suivi ultérieur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les invitations précédentes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi regrouper certains e-mails avec des règles ou dossiers ?',
                        'explanation' => 'L’organisation automatique peut réduire le temps consacré au tri manuel.',
                        'choices' => [
                            ['choice_text' => 'Automatiser une partie du classement et réduire le tri manuel', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les messages d’arriver', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro spam', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement toute pièce jointe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ne pas utiliser systématiquement une réunion pour chaque sujet ?',
                        'explanation' => 'Certains sujets simples peuvent être traités plus efficacement par un message ou un document partagé.',
                        'choices' => [
                            ['choice_text' => 'Choisir le canal le plus efficace selon la nature et la complexité du sujet', 'is_correct' => true],
                            ['choice_text' => 'Supprimer complètement les réunions', 'is_correct' => false],
                            ['choice_text' => 'Faire passer tous les sujets par e-mail', 'is_correct' => false],
                            ['choice_text' => 'Garantir que toutes les décisions seront prises rapidement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi réserver des périodes sans interruption dans son agenda ?',
                        'explanation' => 'Des plages protégées permettent de réaliser certaines tâches nécessitant concentration et continuité.',
                        'choices' => [
                            ['choice_text' => 'Préserver du temps de concentration pour les tâches nécessitant un travail continu', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute communication pendant la journée', 'is_correct' => false],
                            ['choice_text' => 'Garantir une productivité maximale dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les réunions nécessaires', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Intermediate — Automatisation bureautique',
                'description' => 'Découvrez les principes d’automatisation dans les outils bureautiques, les modèles, formules, règles et flux répétitifs.',
                'difficulty' => 'Intermediate',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le meilleur candidat pour une automatisation bureautique ?',
                        'explanation' => 'Les tâches répétitives, prévisibles et basées sur des règles sont de bons candidats à l’automatisation.',
                        'choices' => [
                            ['choice_text' => 'Une tâche répétitive, prévisible et fondée sur des règles claires', 'is_correct' => true],
                            ['choice_text' => 'Une décision stratégique nécessitant un jugement humain complexe', 'is_correct' => false],
                            ['choice_text' => 'Une activité réalisée une seule fois', 'is_correct' => false],
                            ['choice_text' => 'Une tâche dont les règles changent chaque minute sans contrôle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester une automatisation sur un petit jeu de données avant de l’utiliser sur toutes les données ?',
                        'explanation' => 'Un test limité permet de détecter une erreur avant qu’elle ne touche un volume important de données.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’impact potentiel d’une erreur avant le déploiement complet', 'is_correct' => true],
                            ['choice_text' => 'Garantir que l’automatisation fonctionnera dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de validation', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement les performances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter une automatisation utilisée par plusieurs personnes ?',
                        'explanation' => 'La documentation aide à comprendre son fonctionnement et à intervenir lors d’un problème.',
                        'choices' => [
                            ['choice_text' => 'Permettre aux autres utilisateurs de comprendre, utiliser et maintenir le processus', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute modification', 'is_correct' => false],
                            ['choice_text' => 'Garantir que le processus ne connaîtra jamais d’erreur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une formule trop complexe peut-elle poser problème dans un classeur partagé ?',
                        'explanation' => 'Une formule difficile à comprendre augmente le risque d’erreur et complique la maintenance.',
                        'choices' => [
                            ['choice_text' => 'Elle peut être difficile à comprendre, vérifier et maintenir par les autres utilisateurs', 'is_correct' => true],
                            ['choice_text' => 'Les formules complexes sont toujours fausses', 'is_correct' => false],
                            ['choice_text' => 'Une formule complexe empêche Excel de sauvegarder', 'is_correct' => false],
                            ['choice_text' => 'Les autres utilisateurs ne peuvent jamais voir une formule', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi créer un modèle de reporting réutilisable ?',
                        'explanation' => 'Un modèle réduit les efforts répétitifs et améliore la cohérence des rapports.',
                        'choices' => [
                            ['choice_text' => 'Réduire le travail répétitif et standardiser la structure des rapports', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les données de changer', 'is_correct' => false],
                            ['choice_text' => 'Garantir que tous les rapports contiendront les mêmes résultats', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de vérifier les données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les données d’entrée des résultats générés dans une automatisation ?',
                        'explanation' => 'Cette séparation facilite les tests, les corrections et la traçabilité.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la vérification, la maintenance et l’identification de la source des résultats', 'is_correct' => true],
                            ['choice_text' => 'Multiplier les copies inutiles', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute réutilisation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une règle automatique d’e-mail doit-elle être testée avant d’être appliquée à toute la boîte de réception ?',
                        'explanation' => 'Une mauvaise règle peut déplacer ou classer des messages importants de manière incorrecte.',
                        'choices' => [
                            ['choice_text' => 'Éviter qu’une règle incorrecte perturbe un grand volume de messages', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun e-mail ne sera plus reçu', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les règles précédentes automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une automatisation doit-elle prévoir les cas d’erreur ?',
                        'explanation' => 'Les données réelles peuvent être incomplètes, invalides ou différentes des hypothèses prévues.',
                        'choices' => [
                            ['choice_text' => 'Une donnée inattendue peut empêcher le processus de produire un résultat correct', 'is_correct' => true],
                            ['choice_text' => 'Les automatisations ne rencontrent jamais d’erreur', 'is_correct' => false],
                            ['choice_text' => 'Les erreurs doivent toujours être ignorées', 'is_correct' => false],
                            ['choice_text' => 'Les contrôles d’erreur rendent toute automatisation inutile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi contrôler les permissions d’une automatisation qui traite des données sensibles ?',
                        'explanation' => 'L’automatisation peut elle-même accéder aux données et donc devenir une identité à protéger.',
                        'choices' => [
                            ['choice_text' => 'Limiter les données auxquelles le processus automatique peut accéder ou qu’il peut modifier', 'is_correct' => true],
                            ['choice_text' => 'Donner tous les droits à l’automatisation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les comptes de service', 'is_correct' => false],
                            ['choice_text' => 'Rendre toutes les données publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer le gain obtenu après une automatisation ?',
                        'explanation' => 'Le gain de temps, la réduction des erreurs ou l’amélioration de la qualité permettent de vérifier la valeur réelle du changement.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que l’automatisation produit réellement un bénéfice mesurable', 'is_correct' => true],
                            ['choice_text' => 'Garantir que toute automatisation est rentable', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de maintenance', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute amélioration future', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Intermediate — Sécurité et bonnes pratiques professionnelles',
                'description' => 'Approfondissez la protection des documents, comptes, pièces jointes, partages et données sensibles dans un environnement bureautique.',
                'difficulty' => 'Intermediate',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi envoyer un document sensible par un lien avec accès contrôlé plutôt que par un lien public ?',
                        'explanation' => 'Un lien contrôlé permet de limiter les personnes qui peuvent consulter le document.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’exposition du document aux seules personnes autorisées', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le document ne pourra jamais être téléchargé', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les besoins de chiffrement', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement la taille du stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi retirer les permissions devenues inutiles ?',
                        'explanation' => 'Les accès obsolètes augmentent inutilement la surface d’exposition.',
                        'choices' => [
                            ['choice_text' => 'Réduire les accès inutiles et appliquer le principe du moindre privilège', 'is_correct' => true],
                            ['choice_text' => 'Empêcher tous les utilisateurs de travailler', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les fichiers', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucun compte ne sera compromis', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les documents contenant des informations confidentielles doivent-ils être identifiables comme tels ?',
                        'explanation' => 'Une classification claire aide les utilisateurs à appliquer les contrôles appropriés.',
                        'choices' => [
                            ['choice_text' => 'Permettre d’appliquer les règles de protection adaptées au niveau de sensibilité', 'is_correct' => true],
                            ['choice_text' => 'Garantir automatiquement la confidentialité', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tout partage', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la taille des fichiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier un document avant de le transmettre à un destinataire externe ?',
                        'explanation' => 'Un fichier peut contenir des informations cachées, commentaires ou données qui ne devaient pas être partagés.',
                        'choices' => [
                            ['choice_text' => 'Vérifier qu’il ne contient pas d’informations ou commentaires non destinés au destinataire', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le destinataire le lira', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les métadonnées automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute modification future', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ne faut-il pas considérer un dossier partagé comme suffisamment sécurisé simplement parce qu’il est interne ?',
                        'explanation' => 'Les accès internes peuvent être trop larges ou un compte interne peut être compromis.',
                        'choices' => [
                            ['choice_text' => 'Les comptes internes peuvent eux aussi être mal configurés ou compromis', 'is_correct' => true],
                            ['choice_text' => 'Tous les comptes internes sont toujours fiables', 'is_correct' => false],
                            ['choice_text' => 'Les documents internes ne contiennent jamais d’informations sensibles', 'is_correct' => false],
                            ['choice_text' => 'Les permissions n’ont aucun rôle dans un réseau interne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser la légitimité d’un fichier macro-enabled reçu par e-mail ?',
                        'explanation' => 'Les macros peuvent exécuter du code et doivent être traitées avec prudence lorsqu’elles proviennent d’une source non fiable.',
                        'choices' => [
                            ['choice_text' => 'Une macro peut exécuter du code et représenter un risque si le fichier est malveillant', 'is_correct' => true],
                            ['choice_text' => 'Les macros ne peuvent jamais contenir de code', 'is_correct' => false],
                            ['choice_text' => 'Les fichiers macro-enabled sont toujours sûrs', 'is_correct' => false],
                            ['choice_text' => 'Les macros servent uniquement à formater du texte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser un stockage d’entreprise approuvé pour les documents professionnels ?',
                        'explanation' => 'Les plateformes approuvées peuvent intégrer des contrôles d’accès, de conservation et de sécurité adaptés.',
                        'choices' => [
                            ['choice_text' => 'Bénéficier des contrôles d’accès, de gouvernance et de sécurité définis par l’organisation', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les données ne seront jamais perdues', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute sauvegarde', 'is_correct' => false],
                            ['choice_text' => 'Rendre les documents automatiquement publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier l’authenticité d’une demande urgente par e-mail avant d’effectuer une action sensible ?',
                        'explanation' => 'Les attaques de type fraude au président ou business email compromise exploitent souvent l’urgence et l’autorité apparente.',
                        'choices' => [
                            ['choice_text' => 'Éviter d’exécuter une demande frauduleuse présentée comme urgente ou légitime', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les demandes urgentes sont fausses', 'is_correct' => false],
                            ['choice_text' => 'Pour retarder volontairement toutes les opérations', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les e-mails externes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique de partage doit-elle distinguer lecture, commentaire et modification ?',
                        'explanation' => 'Les différents niveaux d’accès correspondent à des besoins différents et limitent les modifications inutiles.',
                        'choices' => [
                            ['choice_text' => 'Attribuer le niveau d’accès correspondant au besoin réel de chaque personne', 'is_correct' => true],
                            ['choice_text' => 'Donner systématiquement le niveau le plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les utilisateurs de consulter les documents', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la collaboration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver des traces des partages de documents sensibles ?',
                        'explanation' => 'La traçabilité permet d’identifier qui a obtenu un accès et de faciliter les investigations.',
                        'choices' => [
                            ['choice_text' => 'Permettre l’audit des accès et des partages sensibles', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun partage incorrect ne pourra jamais avoir lieu', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les permissions', 'is_correct' => false],
                            ['choice_text' => 'Remplacer l’authentification', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Intermediate — Cas pratiques Office',
                'description' => 'Résolvez des situations réalistes combinant Word, Excel, PowerPoint, messagerie et gestion documentaire.',
                'difficulty' => 'Intermediate',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Vous devez produire chaque mois un rapport Word avec la même structure, les mêmes styles et une table des matières. Quelle approche est la plus efficace ?',
                        'explanation' => 'Un modèle Word avec des styles structurés permet de réutiliser la structure et de générer plus facilement la table des matières.',
                        'choices' => [
                            ['choice_text' => 'Créer un modèle avec des styles structurés et une table des matières automatique', 'is_correct' => true],
                            ['choice_text' => 'Reformater chaque rapport manuellement', 'is_correct' => false],
                            ['choice_text' => 'Créer chaque rapport dans Excel', 'is_correct' => false],
                            ['choice_text' => 'Copier uniquement le texte sans structure', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un responsable souhaite voir uniquement les ventes d’un commercial précis sans supprimer les autres données. Que devez-vous utiliser dans Excel ?',
                        'explanation' => 'Le filtre masque temporairement les lignes qui ne correspondent pas au critère.',
                        'choices' => [
                            ['choice_text' => 'Un filtre sur la colonne du commercial', 'is_correct' => true],
                            ['choice_text' => 'La suppression des autres lignes', 'is_correct' => false],
                            ['choice_text' => 'Une animation PowerPoint', 'is_correct' => false],
                            ['choice_text' => 'Une note Word', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une présentation contient beaucoup de données financières détaillées. Quelle approche est généralement meilleure pour une présentation orale ?',
                        'explanation' => 'Il vaut mieux présenter les indicateurs essentiels visuellement et garder le détail pour les annexes ou documents complémentaires.',
                        'choices' => [
                            ['choice_text' => 'Présenter les indicateurs clés et déplacer les détails dans des supports complémentaires', 'is_correct' => true],
                            ['choice_text' => 'Afficher toutes les lignes de données sur une seule diapositive', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les données numériques', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement des animations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Plusieurs collaborateurs modifient simultanément le même rapport. Quelle pratique réduit le risque de travailler sur des copies divergentes ?',
                        'explanation' => 'Un espace collaboratif avec historique des versions facilite le travail sur une source commune.',
                        'choices' => [
                            ['choice_text' => 'Utiliser un document partagé avec gestion des versions et permissions adaptées', 'is_correct' => true],
                            ['choice_text' => 'Envoyer une copie différente à chaque personne', 'is_correct' => false],
                            ['choice_text' => 'Renommer chaque copie "final"', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les versions précédentes immédiatement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une feuille Excel contient des formules importantes et des cellules de saisie. Quelle organisation améliore la sécurité du modèle ?',
                        'explanation' => 'Séparer visuellement les zones et protéger les cellules de calcul réduit les modifications accidentelles.',
                        'choices' => [
                            ['choice_text' => 'Distinguer les cellules d’entrée des cellules calculées et protéger les formules si nécessaire', 'is_correct' => true],
                            ['choice_text' => 'Mettre toutes les cellules en lecture seule', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les formules', 'is_correct' => false],
                            ['choice_text' => 'Créer une présentation PowerPoint à la place', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Vous devez envoyer à 100 clients un document personnalisé contenant leur nom. Quel outil Word est particulièrement adapté ?',
                        'explanation' => 'Le publipostage permet de générer plusieurs documents personnalisés à partir d’une source de données.',
                        'choices' => [
                            ['choice_text' => 'Le publipostage', 'is_correct' => true],
                            ['choice_text' => 'Les transitions PowerPoint', 'is_correct' => false],
                            ['choice_text' => 'Le filtre Excel uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le mode lecture Word', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fichier Excel devient très difficile à comprendre parce que les données, calculs et graphiques sont mélangés sur la même zone. Quelle amélioration est la plus pertinente ?',
                        'explanation' => 'Séparer les sources, les calculs et la présentation améliore la lisibilité et la maintenance.',
                        'choices' => [
                            ['choice_text' => 'Séparer les données sources, les calculs et la présentation', 'is_correct' => true],
                            ['choice_text' => 'Ajouter davantage de couleurs partout', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les noms de colonnes', 'is_correct' => false],
                            ['choice_text' => 'Copier toutes les données dans Word', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une réunion importante comporte dix sujets, mais seuls trois nécessitent une décision. Quelle amélioration peut augmenter son efficacité ?',
                        'explanation' => 'Identifier les décisions attendues permet de concentrer le temps de réunion sur les sujets réellement nécessaires.',
                        'choices' => [
                            ['choice_text' => 'Identifier clairement les sujets nécessitant une décision et traiter le reste comme information ou suivi', 'is_correct' => true],
                            ['choice_text' => 'Faire durer chaque sujet le même temps', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’ordre du jour', 'is_correct' => false],
                            ['choice_text' => 'Inviter toutes les personnes de l’organisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe reçoit des dizaines d’e-mails automatiques chaque jour. Quelle solution peut réduire le temps consacré au tri ?',
                        'explanation' => 'Des règles de messagerie peuvent classer automatiquement certains messages selon leur expéditeur, objet ou autre critère.',
                        'choices' => [
                            ['choice_text' => 'Créer des règles de classement adaptées aux messages répétitifs', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute la boîte de réception', 'is_correct' => false],
                            ['choice_text' => 'Répondre manuellement à chaque message', 'is_correct' => false],
                            ['choice_text' => 'Désactiver la messagerie professionnelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un rapport final doit être envoyé à un client externe sans lui donner accès au fichier source modifiable. Quelle solution est généralement adaptée ?',
                        'explanation' => 'Un PDF fournit une copie destinée à la consultation et réduit les modifications accidentelles du fichier source.',
                        'choices' => [
                            ['choice_text' => 'Exporter le rapport en PDF après vérification finale', 'is_correct' => true],
                            ['choice_text' => 'Envoyer directement le fichier source modifiable', 'is_correct' => false],
                            ['choice_text' => 'Envoyer uniquement des captures d’écran partielles', 'is_correct' => false],
                            ['choice_text' => 'Envoyer le classeur avec toutes les données internes sans contrôle', 'is_correct' => false],
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