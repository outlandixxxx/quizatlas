<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class BureautiqueProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'bureautique')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Bureautique Professional — Modélisation et contrôle financier dans Excel',
                'description' => 'Analysez des modèles financiers, leurs hypothèses, leurs contrôles et les risques liés aux modifications.',
                'difficulty' => 'Professional',
                'duration' => 30,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Un modèle budgétaire contient des taux de croissance saisis directement dans plusieurs formules. Une mise à jour manuelle en a modifié certaines, mais pas toutes. Quelle refonte réduit le mieux ce risque ?',
                        'explanation' => 'Les hypothèses doivent être saisies une seule fois dans une zone identifiée, puis référencées par les formules. Cela rend les changements visibles et facilite leur contrôle.',
                        'choices' => [
                            ['choice_text' => 'Centraliser les hypothèses dans une zone d’entrées contrôlée et les référencer dans les calculs', 'is_correct' => true],
                            ['choice_text' => 'Colorer les cellules contenant les taux sans changer les formules', 'is_correct' => false],
                            ['choice_text' => 'Copier la feuille budgétaire pour chaque service', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les formules par leurs valeurs actuelles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après l’ajout d’une nouvelle catégorie de dépenses, le total général n’inclut pas les nouvelles lignes. Quelle amélioration structurelle est la plus adaptée ?',
                        'explanation' => 'Un tableau Excel structuré étend automatiquement ses références aux nouvelles lignes et rend les formules moins dépendantes d’adresses fixes.',
                        'choices' => [
                            ['choice_text' => 'Convertir la plage source en tableau Excel et utiliser des références structurées', 'is_correct' => true],
                            ['choice_text' => 'Insérer une ligne vide avant le total', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le total par une valeur saisie manuellement', 'is_correct' => false],
                            ['choice_text' => 'Masquer les lignes qui ne sont pas incluses', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une formule de prévision est copiée vers le bas. Le taux fiscal doit toujours venir de la cellule B2, tandis que le chiffre d’affaires doit changer selon la ligne. Comment écrire la référence du taux ?',
                        'explanation' => 'Une référence absolue, telle que $B$2, conserve la même cellule lors de la recopie, tandis que la référence de chiffre d’affaires peut rester relative.',
                        'choices' => [
                            ['choice_text' => 'Utiliser une référence absolue à B2, par exemple $B$2', 'is_correct' => true],
                            ['choice_text' => 'Utiliser B2 sans symbole dollar', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la formule par une référence circulaire', 'is_correct' => false],
                            ['choice_text' => 'Fusionner B2 avec la cellule du chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un responsable veut comparer le résultat d’un budget selon trois hypothèses de volume et de prix, sans écraser les hypothèses de référence. Quel outil Excel convient le mieux à cette comparaison ?',
                        'explanation' => 'Le Gestionnaire de scénarios permet d’enregistrer plusieurs jeux de valeurs d’entrée et de comparer leurs résultats sans remplacer définitivement le scénario de référence.',
                        'choices' => [
                            ['choice_text' => 'Le Gestionnaire de scénarios de l’Analyse de scénarios', 'is_correct' => true],
                            ['choice_text' => 'La mise en forme conditionnelle appliquée aux cellules de résultat', 'is_correct' => false],
                            ['choice_text' => 'La suppression temporaire des formules', 'is_correct' => false],
                            ['choice_text' => 'Le tri décroissant des cellules d’hypothèses', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle de trésorerie, une cellule de solde affiche une valeur plausible alors qu’une formule en amont a été remplacée par une constante. Quel contrôle aide le plus à repérer ce type de rupture ?',
                        'explanation' => 'Un contrôle dédié qui compare les cellules attendues comme formules à leur contenu réel peut signaler une saisie accidentelle ou une perte de formule.',
                        'choices' => [
                            ['choice_text' => 'Ajouter une vérification des cellules de calcul et rapprocher le résultat avec un contrôle indépendant', 'is_correct' => true],
                            ['choice_text' => 'Augmenter le nombre de décimales affichées', 'is_correct' => false],
                            ['choice_text' => 'Masquer les formules pour tous les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Trier la feuille selon les soldes affichés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un classeur utilise des formules imbriquées difficiles à relire pour appliquer plusieurs seuils de commission. Quelle solution améliore généralement la maintenance sans changer la règle métier ?',
                        'explanation' => 'Une table de correspondance explicite, utilisée avec une fonction de recherche appropriée, sépare la règle des calculs et simplifie sa revue lors d’une évolution.',
                        'choices' => [
                            ['choice_text' => 'Documenter les seuils dans une table dédiée et rechercher le taux correspondant', 'is_correct' => true],
                            ['choice_text' => 'Ajouter encore des fonctions SI dans la même formule', 'is_correct' => false],
                            ['choice_text' => 'Saisir le taux à la main pour chaque transaction', 'is_correct' => false],
                            ['choice_text' => 'Convertir les formules en images', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une feuille de saisie accepte des dates en texte et des montants négatifs dans un champ réservé aux quantités vendues. Quelle mesure préventive est la plus pertinente ?',
                        'explanation' => 'La validation des données peut restreindre les types et plages de valeurs autorisés et fournir un message utile à la saisie.',
                        'choices' => [
                            ['choice_text' => 'Appliquer des règles de validation adaptées aux dates et aux quantités', 'is_correct' => true],
                            ['choice_text' => 'Appliquer un format monétaire à toute la feuille', 'is_correct' => false],
                            ['choice_text' => 'Protéger la feuille sans distinguer les cellules de saisie', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les en-têtes des colonnes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux personnes modifient des cellules d’hypothèses dans une copie locale du classeur. L’équipe ne sait plus quelle copie a produit le rapport transmis à la direction. Quelle pratique aurait le mieux prévenu ce problème ?',
                        'explanation' => 'Une source de référence partagée avec contrôle des versions et un processus de publication permettent de relier un rapport à la version précise du modèle utilisée.',
                        'choices' => [
                            ['choice_text' => 'Conserver un classeur de référence contrôlé et consigner la version utilisée pour chaque publication', 'is_correct' => true],
                            ['choice_text' => 'Ajouter le mot « final » au nom de chaque copie', 'is_correct' => false],
                            ['choice_text' => 'Désactiver l’enregistrement automatique sur les postes', 'is_correct' => false],
                            ['choice_text' => 'Envoyer chaque copie par courriel à toute l’équipe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un modèle de rentabilité présente un résultat positif, mais l’équipe souhaite savoir à partir de quel volume les coûts sont couverts. Quelle approche répond directement à cette question ?',
                        'explanation' => 'La Valeur cible peut ajuster une cellule d’entrée jusqu’à ce qu’une cellule de résultat atteigne la valeur souhaitée, par exemple un bénéfice nul.',
                        'choices' => [
                            ['choice_text' => 'Utiliser la Valeur cible pour déterminer le volume donnant un bénéfice nul', 'is_correct' => true],
                            ['choice_text' => 'Utiliser le tri pour placer le bénéfice nul en première ligne', 'is_correct' => false],
                            ['choice_text' => 'Utiliser le correcteur orthographique sur les hypothèses', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la cellule de résultat par zéro', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une direction reçoit un classeur de prévision avec des hypothèses de croissance, mais aucune indication de leur origine ni de leur date. Quel ajout améliore le plus la traçabilité de la décision ?',
                        'explanation' => 'Documenter la source, la date, le responsable et la justification des hypothèses aide les réviseurs à évaluer leur pertinence et à comprendre les changements.',
                        'choices' => [
                            ['choice_text' => 'Associer à chaque hypothèse importante sa source, sa date et sa justification', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les libellés par des codes couleur', 'is_correct' => false],
                            ['choice_text' => 'Masquer les cellules qui contiennent les hypothèses', 'is_correct' => false],
                            ['choice_text' => 'Ajouter une feuille vide à la fin du classeur', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Bureautique Professional — Analyse de données et reporting dans Excel',
                'description' => 'Évaluez la préparation de données, l’analyse, les tableaux croisés et la communication fiable des résultats.',
                'difficulty' => 'Professional',
                'duration' => 30,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Un fichier de ventes contient des dates sous plusieurs formats, des espaces superflus dans les noms de régions et des montants importés comme texte. Que faut-il faire avant de comparer les résultats ?',
                        'explanation' => 'La normalisation des types, formats et valeurs textuelles réduit les erreurs de regroupement et permet des calculs cohérents.',
                        'choices' => [
                            ['choice_text' => 'Nettoyer et normaliser les champs dans une étape de préparation reproductible', 'is_correct' => true],
                            ['choice_text' => 'Créer immédiatement un graphique à partir des colonnes telles quelles', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les lignes contenant un espace', 'is_correct' => false],
                            ['choice_text' => 'Convertir les montants en texte pour éviter les erreurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chaque semaine, un analyste reçoit le même type de fichier avec une nouvelle période et répète plusieurs étapes de nettoyage. Quelle méthode Excel rend ce traitement plus reproductible ?',
                        'explanation' => 'Power Query permet de définir les étapes de transformation une fois, puis de les réappliquer aux nouveaux fichiers compatibles lors de l’actualisation.',
                        'choices' => [
                            ['choice_text' => 'Enregistrer les étapes de préparation dans Power Query et actualiser la requête sur les nouveaux fichiers', 'is_correct' => true],
                            ['choice_text' => 'Copier-coller manuellement chaque colonne dans un nouveau classeur', 'is_correct' => false],
                            ['choice_text' => 'Appliquer une couleur différente à chaque période', 'is_correct' => false],
                            ['choice_text' => 'Fusionner toutes les cellules avant le nettoyage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un rapport doit comparer le chiffre d’affaires par région et par trimestre, avec la possibilité de filtrer par catégorie de produit. Quel outil convient le mieux à cette exploration interactive ?',
                        'explanation' => 'Un tableau croisé dynamique permet de répartir les dimensions en lignes, colonnes et filtres, puis d’agréger les valeurs sans réécrire les formules pour chaque vue.',
                        'choices' => [
                            ['choice_text' => 'Un tableau croisé dynamique relié à une source de données structurée', 'is_correct' => true],
                            ['choice_text' => 'Une zone de texte contenant les totaux calculés à la main', 'is_correct' => false],
                            ['choice_text' => 'Une mise en page avec des cellules fusionnées', 'is_correct' => false],
                            ['choice_text' => 'Un tri alphabétique permanent de la feuille source', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après l’actualisation d’un tableau croisé dynamique, les nouveaux enregistrements n’apparaissent pas. La source était une plage fixe qui n’a pas été étendue. Quelle correction est la plus robuste ?',
                        'explanation' => 'En utilisant un tableau Excel comme source, les nouvelles lignes sont intégrées à la source structurée et peuvent être prises en compte lors de l’actualisation.',
                        'choices' => [
                            ['choice_text' => 'Basculer la source vers un tableau structuré qui s’étend avec les nouvelles lignes', 'is_correct' => true],
                            ['choice_text' => 'Actualiser plusieurs fois sans modifier la source', 'is_correct' => false],
                            ['choice_text' => 'Masquer les anciennes lignes du tableau croisé', 'is_correct' => false],
                            ['choice_text' => 'Copier les nouveaux totaux directement dans le rapport', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphique de ventes utilise un axe vertical tronqué qui amplifie visuellement une faible variation. Quelle modification améliore le plus l’intégrité de la présentation ?',
                        'explanation' => 'Un axe adapté à la nature des données et clairement gradué évite de donner une impression disproportionnée des écarts.',
                        'choices' => [
                            ['choice_text' => 'Ajuster l’échelle ou signaler explicitement la coupure pour représenter les variations honnêtement', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les libellés de l’axe vertical', 'is_correct' => false],
                            ['choice_text' => 'Ajouter des effets 3D pour rendre le graphique plus visible', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les valeurs par des pourcentages sans préciser la base', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un tableau de suivi utilise des cellules vides pour désigner tantôt zéro, tantôt une donnée non encore reçue. Quel est le principal risque analytique ?',
                        'explanation' => 'Si zéro et absence de donnée ont des significations différentes, les confondre fausse les agrégations, les taux et les interprétations.',
                        'choices' => [
                            ['choice_text' => 'Les calculs et indicateurs peuvent traiter à tort une valeur inconnue comme une valeur nulle', 'is_correct' => true],
                            ['choice_text' => 'Excel ne pourra plus enregistrer le classeur', 'is_correct' => false],
                            ['choice_text' => 'Les graphiques deviendront nécessairement des graphiques circulaires', 'is_correct' => false],
                            ['choice_text' => 'Les filtres ne pourront plus être utilisés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un rapport compare les ventes de deux années, mais une catégorie de produit a été reclassée au milieu de la période. Quelle précaution est essentielle avant de conclure à une hausse ou une baisse ?',
                        'explanation' => 'Une comparaison n’est valide que si les catégories ont des définitions cohérentes ou si les données historiques sont retraitées selon une règle documentée.',
                        'choices' => [
                            ['choice_text' => 'Vérifier et harmoniser les définitions de catégories sur les deux périodes', 'is_correct' => true],
                            ['choice_text' => 'Masquer les catégories dont le nom a changé', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les valeurs historiques par celles de l’année courante', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement la couleur des séries pour expliquer le changement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un indicateur de délai moyen semble bon, alors que plusieurs dossiers dépassent largement le délai contractuel. Quel indicateur complémentaire aide à révéler cette situation ?',
                        'explanation' => 'La médiane, les percentiles ou la part de dossiers dépassant un seuil rendent visibles les longues durées que la moyenne peut masquer.',
                        'choices' => [
                            ['choice_text' => 'La distribution des délais, notamment un percentile élevé et la proportion au-delà du seuil', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de couleurs utilisées dans le tableau', 'is_correct' => false],
                            ['choice_text' => 'La moyenne arrondie à moins de décimales', 'is_correct' => false],
                            ['choice_text' => 'Le total des délais sans préciser le nombre de dossiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un tableau croisé affiche plusieurs lignes « Casablanca » qui diffèrent seulement par des espaces ou une orthographe incohérente. Quelle étape doit précéder l’analyse ?',
                        'explanation' => 'La standardisation des libellés évite de répartir une même catégorie en plusieurs groupes et de sous-estimer ses totaux.',
                        'choices' => [
                            ['choice_text' => 'Normaliser les libellés de région dans les données source ou dans la requête de préparation', 'is_correct' => true],
                            ['choice_text' => 'Fusionner visuellement les lignes du tableau croisé', 'is_correct' => false],
                            ['choice_text' => 'Trier les libellés de Z à A', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les lignes qui ne sont pas identiques caractère par caractère', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un tableau de bord contient une valeur d’objectif, mais les utilisateurs ne savent pas si elle est mensuelle ou annuelle ni quelles exclusions s’appliquent. Quel élément est prioritaire à ajouter ?',
                        'explanation' => 'La définition opérationnelle d’un indicateur doit préciser sa période, son périmètre, ses exclusions et sa méthode de calcul pour éviter des interprétations différentes.',
                        'choices' => [
                            ['choice_text' => 'Une définition documentée de l’indicateur, de sa période et de son périmètre', 'is_correct' => true],
                            ['choice_text' => 'Une animation à l’ouverture du tableau de bord', 'is_correct' => false],
                            ['choice_text' => 'Un deuxième graphique utilisant une autre couleur', 'is_correct' => false],
                            ['choice_text' => 'Une capture d’écran de la feuille source', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Bureautique Professional — Documents longs et révision dans Word',
                'description' => 'Mettez en pratique les fonctions avancées de structuration, de révision et de publication de documents professionnels.',
                'difficulty' => 'Professional',
                'duration' => 30,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Un rapport de 80 pages doit changer de police et d’espacement dans tous ses titres. Ceux-ci ont été formatés manuellement. Quelle préparation aurait rendu la modification fiable et rapide ?',
                        'explanation' => 'Les styles de titre centralisent la mise en forme et permettent d’appliquer une modification cohérente à toutes les occurrences concernées.',
                        'choices' => [
                            ['choice_text' => 'Appliquer des styles de titre cohérents et modifier leur définition', 'is_correct' => true],
                            ['choice_text' => 'Rechercher chaque titre et modifier sa police individuellement', 'is_correct' => false],
                            ['choice_text' => 'Insérer un saut de page avant chaque titre', 'is_correct' => false],
                            ['choice_text' => 'Convertir toutes les pages en images', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un rapport comporte une section paysage entre deux sections portrait. Le changement d’orientation s’applique à tout le document. Quel élément manque probablement ?',
                        'explanation' => 'Les sauts de section permettent d’appliquer des paramètres de mise en page différents à des parties distinctes du document.',
                        'choices' => [
                            ['choice_text' => 'Des sauts de section autour de la partie en paysage', 'is_correct' => true],
                            ['choice_text' => 'Un saut de ligne avant le tableau', 'is_correct' => false],
                            ['choice_text' => 'Une table des matières manuelle', 'is_correct' => false],
                            ['choice_text' => 'Des commentaires dans les marges', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La table des matières d’un document long ne reflète plus les titres après plusieurs révisions. Quelle méthode permet de la maintenir correctement ?',
                        'explanation' => 'Une table des matières automatique s’appuie sur les styles de titre et doit être actualisée après les changements de structure ou de pagination.',
                        'choices' => [
                            ['choice_text' => 'Utiliser les styles de titre puis actualiser la table des matières automatique', 'is_correct' => true],
                            ['choice_text' => 'Ajouter des points de suite en tapant des points jusqu’au numéro de page', 'is_correct' => false],
                            ['choice_text' => 'Créer la table dans une zone de texte indépendante', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les titres par du texte en gras', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Plusieurs réviseurs doivent proposer des corrections, mais le propriétaire doit pouvoir accepter ou refuser chacune d’elles. Quelle fonction est la plus adaptée ?',
                        'explanation' => 'Le suivi des modifications conserve les insertions, suppressions et changements de mise en forme afin que le propriétaire puisse les examiner et les traiter.',
                        'choices' => [
                            ['choice_text' => 'Activer le suivi des modifications avant la révision', 'is_correct' => true],
                            ['choice_text' => 'Envoyer uniquement un PDF non commentable', 'is_correct' => false],
                            ['choice_text' => 'Demander aux réviseurs de modifier le texte sans laisser de trace', 'is_correct' => false],
                            ['choice_text' => 'Copier chaque paragraphe dans un courriel séparé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe a accepté les corrections d’un contrat et s’apprête à envoyer la version finale. Quelle vérification est particulièrement importante ?',
                        'explanation' => 'Avant publication, il faut confirmer que les modifications ont été traitées, que les commentaires internes sont supprimés et que les métadonnées ou informations masquées ne révèlent rien de confidentiel.',
                        'choices' => [
                            ['choice_text' => 'Vérifier les marques de révision, commentaires et informations documentaires avant diffusion', 'is_correct' => true],
                            ['choice_text' => 'Augmenter le nombre de polices pour différencier les versions', 'is_correct' => false],
                            ['choice_text' => 'Laisser toutes les marques visibles pour démontrer le travail effectué', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le texte par une capture d’écran de chaque page', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service doit produire 300 lettres personnalisées à partir d’une liste de clients, avec des champs d’adresse et de référence. Quelle démarche limite le mieux les erreurs de publipostage ?',
                        'explanation' => 'Une source de données propre, un aperçu de plusieurs enregistrements représentatifs et une vérification des champs avant la fusion permettent de détecter des erreurs avant la génération complète.',
                        'choices' => [
                            ['choice_text' => 'Nettoyer la source, vérifier les champs et prévisualiser plusieurs destinataires avant la fusion finale', 'is_correct' => true],
                            ['choice_text' => 'Saisir chaque lettre manuellement pour éviter toute vérification', 'is_correct' => false],
                            ['choice_text' => 'Fusionner immédiatement tous les enregistrements sans aperçu', 'is_correct' => false],
                            ['choice_text' => 'Placer tous les destinataires dans le corps d’une seule lettre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un manuel, le même intitulé de figure apparaît en plusieurs endroits et la numérotation change après l’ajout d’une figure. Quelle fonctionnalité évite de corriger les renvois à la main ?',
                        'explanation' => 'Les légendes et renvois automatiques maintiennent les références liées aux objets et peuvent être actualisés lorsque leur ordre change.',
                        'choices' => [
                            ['choice_text' => 'Insérer des légendes puis des renvois croisés vers ces légendes', 'is_correct' => true],
                            ['choice_text' => 'Taper les numéros de figure comme du texte ordinaire', 'is_correct' => false],
                            ['choice_text' => 'Utiliser des tabulations pour simuler les numéros', 'is_correct' => false],
                            ['choice_text' => 'Créer une zone de texte par renvoi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une annexe doit utiliser une numérotation de pages différente du corps du rapport, tout en conservant l’en-tête commun. Quelle configuration est la plus appropriée ?',
                        'explanation' => 'Une nouvelle section permet de régler séparément la numérotation. Le lien avec la section précédente peut être conservé ou rompu selon les éléments d’en-tête à partager.',
                        'choices' => [
                            ['choice_text' => 'Créer une nouvelle section et régler séparément le format de numérotation des pages', 'is_correct' => true],
                            ['choice_text' => 'Insérer des numéros de page tapés manuellement dans chaque pied de page', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauts de section par des espaces', 'is_correct' => false],
                            ['choice_text' => 'Créer un document distinct sans vérifier la continuité des pages', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un modèle Word partagé contient des instructions de rédaction qui ne doivent pas apparaître dans le document remis au client. Quelle pratique protège le mieux le résultat ?',
                        'explanation' => 'Les consignes doivent être placées dans des contrôles ou zones clairement identifiés comme temporaires, puis supprimées ou remplacées dans une étape de validation avant livraison.',
                        'choices' => [
                            ['choice_text' => 'Prévoir une étape de contrôle qui recherche et retire les instructions de modèle avant publication', 'is_correct' => true],
                            ['choice_text' => 'Mettre les instructions en blanc sur fond blanc', 'is_correct' => false],
                            ['choice_text' => 'Réduire la taille des instructions à un point', 'is_correct' => false],
                            ['choice_text' => 'Masquer les instructions sans vérifier leur présence dans le fichier final', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un document destiné à l’impression comporte des titres orphelins en bas de page et des tableaux coupés de façon peu lisible. Quel travail de finalisation est le plus approprié ?',
                        'explanation' => 'La vérification de la pagination, des options de conservation des titres avec le paragraphe suivant et de la répartition des lignes de tableau améliore la lisibilité du document imprimé.',
                        'choices' => [
                            ['choice_text' => 'Contrôler la mise en page et ajuster les options de pagination des paragraphes et tableaux', 'is_correct' => true],
                            ['choice_text' => 'Ajouter des lignes vides jusqu’à déplacer les éléments', 'is_correct' => false],
                            ['choice_text' => 'Réduire toutes les marges au minimum sans prévisualiser', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les titres qui apparaissent en bas de page', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Bureautique Professional — Présentations de décision dans PowerPoint',
                'description' => 'Construisez un récit clair pour des décideurs et présentez les données, risques et recommandations avec précision.',
                'difficulty' => 'Professional',
                'duration' => 30,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Un comité doit décider s’il finance un projet. Le support commence par 18 diapositives de contexte technique avant d’énoncer la demande. Quelle amélioration aiderait le plus la décision ?',
                        'explanation' => 'Un support décisionnel doit exposer tôt la décision attendue, la recommandation et les principaux éléments qui la justifient, puis développer les détails utiles.',
                        'choices' => [
                            ['choice_text' => 'Présenter dès le début la décision sollicitée, la recommandation et ses justifications clés', 'is_correct' => true],
                            ['choice_text' => 'Ajouter davantage de diapositives de contexte avant la demande', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la recommandation et laisser le comité déduire l’action', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les titres par des numéros de diapositives', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une présentation compare le budget prévu au budget réel, mais les deux séries utilisent des couleurs proches et aucune légende n’est visible à distance. Que faut-il corriger en priorité ?',
                        'explanation' => 'Les séries doivent être distinguables par des couleurs contrastées et des libellés explicites, avec une légende ou des annotations lisibles dans la salle.',
                        'choices' => [
                            ['choice_text' => 'Renforcer le contraste et identifier clairement chaque série dans le graphique', 'is_correct' => true],
                            ['choice_text' => 'Ajouter une animation à chaque valeur', 'is_correct' => false],
                            ['choice_text' => 'Réduire la taille du graphique pour faire de la place à un paragraphe', 'is_correct' => false],
                            ['choice_text' => 'Utiliser une couleur différente pour chaque point sans légende', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphique à colonnes compare les parts de marché de deux concurrents, mais l’axe commence à 80 % et fait paraître l’écart immense. Quelle correction protège l’interprétation ?',
                        'explanation' => 'Pour des colonnes représentant des grandeurs, une base cohérente, souvent zéro, évite d’exagérer visuellement les écarts; toute échelle particulière doit être justifiée et signalée.',
                        'choices' => [
                            ['choice_text' => 'Revoir l’échelle pour ne pas amplifier artificiellement les différences', 'is_correct' => true],
                            ['choice_text' => 'Ajouter une ombre portée aux colonnes', 'is_correct' => false],
                            ['choice_text' => 'Retirer les unités de l’axe', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les données par des valeurs arrondies au hasard', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Plusieurs présentateurs utilisent le même support d’entreprise, mais le logo, les polices et les pieds de page varient d’une diapositive à l’autre. Quelle fonction facilite une correction cohérente ?',
                        'explanation' => 'Le masque des diapositives centralise les éléments et dispositions communes afin qu’une modification puisse être répercutée sur les diapositives qui l’utilisent.',
                        'choices' => [
                            ['choice_text' => 'Mettre en place des masques et dispositions adaptés aux types de diapositives', 'is_correct' => true],
                            ['choice_text' => 'Ajouter manuellement le logo sur chaque diapositive', 'is_correct' => false],
                            ['choice_text' => 'Copier chaque diapositive dans un nouveau fichier', 'is_correct' => false],
                            ['choice_text' => 'Verrouiller le clavier pendant la présentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un tableau détaillé de 25 lignes doit être présenté à une audience qui ne peut pas lire les petits caractères projetés. Quelle solution conserve les détails sans surcharger le récit oral ?',
                        'explanation' => 'La diapositive principale doit mettre en évidence les résultats pertinents pour la décision; le tableau complet peut être placé en annexe ou remis comme document complémentaire.',
                        'choices' => [
                            ['choice_text' => 'Résumer les indicateurs déterminants dans le récit et placer le tableau détaillé en annexe', 'is_correct' => true],
                            ['choice_text' => 'Réduire la police jusqu’à faire tenir toutes les lignes sur la diapositive', 'is_correct' => false],
                            ['choice_text' => 'Lire à voix haute chaque cellule du tableau', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les valeurs par un graphique décoratif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une présentation utilise un graphique exporté depuis Excel. Les données changent encore la veille de la réunion et le graphique doit rester modifiable. Quel mode d’insertion convient le mieux ?',
                        'explanation' => 'Un graphique lié à son classeur source peut être actualisé avec les données; il faut toutefois conserver l’accès à la source et vérifier le lien avant la présentation.',
                        'choices' => [
                            ['choice_text' => 'Insérer le graphique avec un lien vers le classeur source et vérifier son actualisation', 'is_correct' => true],
                            ['choice_text' => 'Coller uniquement une capture d’écran du graphique', 'is_correct' => false],
                            ['choice_text' => 'Convertir les axes en zones de texte indépendantes', 'is_correct' => false],
                            ['choice_text' => 'Recréer les valeurs manuellement dans chaque diapositive', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les membres d’un comité lisent parfois le support avant la réunion et parfois après. Quelle structure permet une lecture autonome sans transformer chaque diapositive en page de rapport ?',
                        'explanation' => 'Des titres porteurs de message, des sources et dates visibles, ainsi que des notes ou annexes pour les détails, soutiennent la lecture autonome tout en gardant des diapositives lisibles.',
                        'choices' => [
                            ['choice_text' => 'Utiliser des titres qui expriment le constat, citer les données et déplacer les détails en notes ou annexes', 'is_correct' => true],
                            ['choice_text' => 'Écrire un paragraphe complet sur chaque diapositive', 'is_correct' => false],
                            ['choice_text' => 'Retirer les sources afin d’alléger le pied de page', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement des titres génériques comme « Analyse »', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe présente trois options de projet, mais ne montre que les avantages de l’option recommandée. Quelle information rendrait l’arbitrage plus crédible ?',
                        'explanation' => 'Présenter les critères et compromis des options considérées permet à l’audience de comprendre la logique de la recommandation et ses limites.',
                        'choices' => [
                            ['choice_text' => 'Comparer les options selon des critères explicites et exposer les principaux compromis', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les options non recommandées du dossier', 'is_correct' => false],
                            ['choice_text' => 'Ajouter des animations pour rendre l’option préférée plus attractive', 'is_correct' => false],
                            ['choice_text' => 'Présenter uniquement le coût total sans contexte ni hypothèse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le support utilise le rouge et le vert comme seuls moyens de distinguer les résultats favorables et défavorables. Quelle amélioration rend l’information plus accessible ?',
                        'explanation' => 'Il faut compléter la couleur par des libellés, symboles ou motifs et vérifier le contraste, afin que le sens reste perceptible pour les personnes ayant une déficience de perception des couleurs.',
                        'choices' => [
                            ['choice_text' => 'Ajouter des libellés ou symboles et vérifier le contraste, sans dépendre uniquement de la couleur', 'is_correct' => true],
                            ['choice_text' => 'Remplacer le rouge par une nuance de rouge plus pâle', 'is_correct' => false],
                            ['choice_text' => 'Retirer toutes les légendes et laisser les couleurs parler', 'is_correct' => false],
                            ['choice_text' => 'Réduire la taille des textes associés aux résultats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une présentation contient des diapositives masquées avec d’anciennes données confidentielles. Le fichier doit être transmis à un partenaire externe. Quelle étape est indispensable ?',
                        'explanation' => 'Avant tout partage externe, il faut inspecter l’ensemble du fichier, y compris les diapositives masquées, commentaires, notes et métadonnées, puis retirer les informations non destinées au partenaire.',
                        'choices' => [
                            ['choice_text' => 'Inspecter le fichier complet et supprimer les contenus cachés ou confidentiels non nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Masquer à nouveau les diapositives sans examiner leur contenu', 'is_correct' => false],
                            ['choice_text' => 'Changer uniquement le nom du fichier', 'is_correct' => false],
                            ['choice_text' => 'Convertir le fichier en diaporama sans vérifier les notes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Bureautique Professional — Collaboration et gouvernance documentaire',
                'description' => 'Choisissez les bonnes pratiques de coédition, de gestion des versions, des accès et du cycle de vie des documents.',
                'difficulty' => 'Professional',
                'duration' => 30,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Deux équipes modifient des copies différentes d’un rapport partagé. Le propriétaire doit restaurer une version d’avant la fusion accidentelle. Quel mécanisme offre la meilleure base de récupération ?',
                        'explanation' => 'L’historique des versions d’un document partagé permet de comparer ou restaurer des états antérieurs, à condition que les modifications aient été enregistrées dans l’espace partagé.',
                        'choices' => [
                            ['choice_text' => 'Utiliser l’historique des versions du document conservé dans l’espace partagé', 'is_correct' => true],
                            ['choice_text' => 'Rechercher dans les pièces jointes envoyées sans vérifier leur date', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le rapport par la copie la plus récente selon son nom', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les versions précédentes pour éviter la confusion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un document de politique interne est accessible en modification à tous les employés, alors que la plupart doivent seulement le consulter. Quelle configuration applique le mieux le principe du moindre privilège ?',
                        'explanation' => 'Les droits doivent correspondre aux tâches: la majorité peut recevoir un accès en lecture, tandis que la modification reste limitée aux responsables concernés.',
                        'choices' => [
                            ['choice_text' => 'Accorder la lecture au public concerné et réserver la modification aux éditeurs désignés', 'is_correct' => true],
                            ['choice_text' => 'Rendre le lien public pour éviter les demandes d’accès', 'is_correct' => false],
                            ['choice_text' => 'Donner les droits de propriétaire à tous les lecteurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le document après chaque consultation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un employé quitte l’équipe, mais conserve l’accès à plusieurs espaces de projet contenant des documents sensibles. Quel contrôle périodique aurait dû être appliqué ?',
                        'explanation' => 'Une revue des accès liée aux changements de rôle et de départ permet de retirer rapidement les permissions qui ne sont plus nécessaires.',
                        'choices' => [
                            ['choice_text' => 'Réviser les appartenances aux groupes et révoquer les accès devenus injustifiés', 'is_correct' => true],
                            ['choice_text' => 'Renommer les dossiers sensibles', 'is_correct' => false],
                            ['choice_text' => 'Partager les mots de passe des responsables avec le nouvel employé', 'is_correct' => false],
                            ['choice_text' => 'Désactiver l’historique des accès', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un document contractuel est partagé avec un fournisseur par un lien qui peut être transféré sans limite et n’expire jamais. Quelle modification réduit le plus l’exposition ?',
                        'explanation' => 'Un partage nominatif, limité aux personnes concernées et assorti d’une durée ou d’une révocation possible, offre davantage de contrôle qu’un lien public permanent.',
                        'choices' => [
                            ['choice_text' => 'Limiter le partage aux identités du fournisseur concernées et définir une échéance ou une révocation', 'is_correct' => true],
                            ['choice_text' => 'Conserver le lien public mais le placer dans un courriel confidentiel', 'is_correct' => false],
                            ['choice_text' => 'Envoyer le lien dans un canal de discussion plus fréquenté', 'is_correct' => false],
                            ['choice_text' => 'Créer plusieurs liens publics pour répartir le trafic', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Plusieurs copies d’une procédure sont en circulation et les équipes ne savent pas laquelle est officielle. Quel dispositif de gouvernance doit être établi en premier ?',
                        'explanation' => 'Il faut désigner une source de référence, un propriétaire et un processus de publication; les copies de travail doivent être distinguées de la version approuvée.',
                        'choices' => [
                            ['choice_text' => 'Définir l’emplacement officiel, le propriétaire et le processus d’approbation des versions', 'is_correct' => true],
                            ['choice_text' => 'Ajouter « final » à tous les noms de fichier', 'is_correct' => false],
                            ['choice_text' => 'Conserver uniquement les copies locales des équipes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les dates de modification des documents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une organisation conserve indéfiniment toutes les versions de tous les documents, y compris des données personnelles qui ne sont plus nécessaires. Quel risque de gouvernance doit être traité ?',
                        'explanation' => 'La conservation doit répondre à des besoins métier et obligations définis. Garder sans limite peut augmenter les coûts, l’exposition en cas d’incident et les difficultés de conformité.',
                        'choices' => [
                            ['choice_text' => 'Définir des règles de conservation et de suppression adaptées aux catégories de documents', 'is_correct' => true],
                            ['choice_text' => 'Créer davantage de copies de sauvegarde sans calendrier', 'is_correct' => false],
                            ['choice_text' => 'Permettre à chaque utilisateur de supprimer des documents selon son choix', 'is_correct' => false],
                            ['choice_text' => 'Renommer périodiquement les anciennes versions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe partage un document avec une agence externe pour une mission de six semaines. Quel principe devrait guider la fin de cette collaboration ?',
                        'explanation' => 'Les accès externes doivent être limités dans leur portée et leur durée, puis révoqués ou renouvelés après vérification du besoin.',
                        'choices' => [
                            ['choice_text' => 'Réexaminer et retirer les accès externes lorsque la mission se termine', 'is_correct' => true],
                            ['choice_text' => 'Laisser les accès actifs pour faciliter une éventuelle mission future', 'is_correct' => false],
                            ['choice_text' => 'Convertir le dossier en lien public permanent', 'is_correct' => false],
                            ['choice_text' => 'Partager le compte d’un employé avec l’agence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fichier contient des données personnelles et doit être transmis à un collègue qui n’a besoin que d’un sous-ensemble pour son analyse. Quelle action est la plus prudente ?',
                        'explanation' => 'Limiter les données au besoin réel réduit l’exposition en cas d’erreur de partage ou d’usage secondaire non prévu.',
                        'choices' => [
                            ['choice_text' => 'Préparer une copie contenant uniquement les champs nécessaires, selon les règles internes', 'is_correct' => true],
                            ['choice_text' => 'Transmettre le dossier complet et demander au collègue d’ignorer le reste', 'is_correct' => false],
                            ['choice_text' => 'Publier le fichier pour éviter une demande d’accès', 'is_correct' => false],
                            ['choice_text' => 'Envoyer une capture d’écran contenant toutes les colonnes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un document approuvé est modifié directement après publication, sans seconde validation, alors qu’il sert de référence à plusieurs services. Quel contrôle est le plus approprié ?',
                        'explanation' => 'Une séparation entre brouillon et version publiée, avec approbation et traçabilité des changements, évite qu’une modification non examinée devienne la référence.',
                        'choices' => [
                            ['choice_text' => 'Mettre en place une étape de révision et d’approbation avant la republication', 'is_correct' => true],
                            ['choice_text' => 'Permettre les modifications directes à tous les lecteurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la version publiée dès qu’un brouillon existe', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les notifications de modification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un responsable doit prouver qui a consulté ou modifié un dossier sensible après un incident. Quel élément doit être vérifié avant qu’un tel besoin survienne ?',
                        'explanation' => 'Les journaux d’activité doivent être activés, conservés selon une politique définie et suffisamment détaillés pour relier les actions à des identités et à des périodes.',
                        'choices' => [
                            ['choice_text' => 'La disponibilité et la durée de conservation de journaux d’accès et de modification exploitables', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de couleurs du dossier', 'is_correct' => false],
                            ['choice_text' => 'La possibilité de renommer le dossier après l’incident', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de copies locales conservées par les utilisateurs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Bureautique Professional — Automatisation et fiabilité des processus Office',
                'description' => 'Concevez des automatisations Office proportionnées, vérifiables et capables de gérer les erreurs et exceptions.',
                'difficulty' => 'Professional',
                'duration' => 30,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Un flux envoie automatiquement des confirmations aux clients à partir d’un tableau Excel. Une ligne peut être incomplète ou contenir une adresse invalide. Quel garde-fou faut-il ajouter avant l’envoi ?',
                        'explanation' => 'La validation des champs obligatoires et un traitement explicite des lignes invalides empêchent des envois erronés et facilitent leur correction.',
                        'choices' => [
                            ['choice_text' => 'Contrôler les données requises et placer les lignes invalides en exception avant tout envoi', 'is_correct' => true],
                            ['choice_text' => 'Ignorer les lignes incomplètes sans journaliser leur traitement', 'is_correct' => false],
                            ['choice_text' => 'Envoyer les confirmations à une adresse générique', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles pour que le flux termine toujours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après une interruption, un flux de traitement est relancé. Certaines factures risquent d’être enregistrées deux fois. Quelle propriété réduit ce risque ?',
                        'explanation' => 'Un traitement idempotent reconnaît qu’un même élément a déjà été traité et évite de reproduire l’effet métier lors d’une relance.',
                        'choices' => [
                            ['choice_text' => 'Vérifier une clé unique ou un statut de traitement avant de créer l’enregistrement', 'is_correct' => true],
                            ['choice_text' => 'Réexécuter toutes les actions sans vérifier leur résultat précédent', 'is_correct' => false],
                            ['choice_text' => 'Changer le nom du fichier à chaque relance', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les journaux d’exécution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un script VBA doit mettre à jour des centaines de lignes à partir d’un classeur reçu d’un tiers. Quelle première démarche limite les conséquences d’une erreur ?',
                        'explanation' => 'Un essai sur une copie et un échantillon contrôlé permet de vérifier les résultats et les hypothèses avant de modifier les données de production.',
                        'choices' => [
                            ['choice_text' => 'Tester sur une copie représentative, comparer les sorties et prévoir une sauvegarde avant le traitement complet', 'is_correct' => true],
                            ['choice_text' => 'Exécuter immédiatement la macro sur le seul fichier reçu', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les avertissements de sécurité pour accélérer le lancement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données source après l’importation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une automatisation échoue sur une ligne, mais continue les autres sans signaler les éléments ignorés. Quel ajout améliore le mieux l’exploitation du processus ?',
                        'explanation' => 'Un journal de traitement avec identifiant, statut, motif d’échec et résultat permet de corriger les exceptions et de démontrer ce qui a été réalisé.',
                        'choices' => [
                            ['choice_text' => 'Consigner chaque élément traité, son statut et les erreurs avec un moyen de reprise contrôlée', 'is_correct' => true],
                            ['choice_text' => 'Afficher uniquement un message « terminé » à la fin', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les erreurs afin de ne pas interrompre le processus', 'is_correct' => false],
                            ['choice_text' => 'Écraser le fichier source après chaque ligne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe souhaite automatiser une opération manuelle rare qui prend moins de deux minutes et change souvent selon le dossier. Quel critère doit guider la décision ?',
                        'explanation' => 'Le bénéfice attendu doit être comparé au coût de développement, de test, de documentation et de maintenance. Une automatisation n’est pas automatiquement rentable.',
                        'choices' => [
                            ['choice_text' => 'Comparer les gains récurrents attendus au coût total de création et de maintenance', 'is_correct' => true],
                            ['choice_text' => 'Automatiser toute tâche dès qu’elle comporte une répétition', 'is_correct' => false],
                            ['choice_text' => 'Mesurer seulement le temps de développement initial', 'is_correct' => false],
                            ['choice_text' => 'Choisir l’outil qui comporte le plus de fonctionnalités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un flux de validation fonctionne avec le compte personnel de son créateur. Lorsqu’il est absent, personne ne peut le dépanner. Quelle amélioration de gouvernance est prioritaire ?',
                        'explanation' => 'Une identité de service contrôlée, des responsables désignés, une documentation et une procédure de transfert réduisent la dépendance à une seule personne.',
                        'choices' => [
                            ['choice_text' => 'Attribuer la propriété à un dispositif d’équipe contrôlé et documenter la maintenance et les accès', 'is_correct' => true],
                            ['choice_text' => 'Partager le mot de passe personnel du créateur avec l’équipe', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les notifications du flux', 'is_correct' => false],
                            ['choice_text' => 'Créer une deuxième automatisation sans documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un processus importe chaque mois un fichier dont l’ordre des colonnes peut changer. La macro lit toujours les données de la colonne D. Quelle modification rend le traitement moins fragile ?',
                        'explanation' => 'Identifier les colonnes par leur en-tête, puis vérifier la présence et le type des champs attendus, réduit la dépendance à leur position dans le fichier.',
                        'choices' => [
                            ['choice_text' => 'Repérer les colonnes par leur nom et arrêter le traitement si un champ requis manque', 'is_correct' => true],
                            ['choice_text' => 'Continuer à lire la colonne D quel que soit son contenu', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la première ligne avant chaque import', 'is_correct' => false],
                            ['choice_text' => 'Fusionner toutes les colonnes en une seule cellule', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe veut automatiser le déplacement de fichiers selon leur nom, mais certains noms contiennent des informations personnelles. Quel principe doit être intégré à la conception ?',
                        'explanation' => 'Les règles doivent limiter l’accès et l’exposition aux seules informations nécessaires, éviter de reproduire inutilement des données personnelles et respecter les politiques internes.',
                        'choices' => [
                            ['choice_text' => 'Traiter seulement les données nécessaires et limiter les accès aux fichiers et journaux', 'is_correct' => true],
                            ['choice_text' => 'Copier tous les fichiers dans un dossier public pour simplifier le flux', 'is_correct' => false],
                            ['choice_text' => 'Inclure le nom complet dans chaque notification à tous les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les contrôles d’accès pendant l’exécution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un flux envoie des courriels à un groupe de clients, mais une erreur de configuration pourrait envoyer le message à tous les contacts. Quel contrôle de déploiement réduit le mieux ce risque ?',
                        'explanation' => 'Un mode test, une validation de la liste des destinataires, des limites de volume et une approbation avant activation peuvent empêcher une diffusion massive involontaire.',
                        'choices' => [
                            ['choice_text' => 'Tester avec des destinataires internes, vérifier le périmètre et exiger une approbation avant activation', 'is_correct' => true],
                            ['choice_text' => 'Activer directement le flux sur la liste complète', 'is_correct' => false],
                            ['choice_text' => 'Retirer les journaux pour réduire le volume de données', 'is_correct' => false],
                            ['choice_text' => 'Doubler la fréquence d’exécution pour détecter plus vite les erreurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après six mois, une automatisation fonctionne toujours, mais personne ne sait si elle réduit réellement le temps de traitement ou les erreurs. Quel suivi manque ?',
                        'explanation' => 'Des indicateurs définis avant le déploiement, comparés à une situation de référence, permettent de vérifier la valeur, la fiabilité et les effets secondaires de l’automatisation.',
                        'choices' => [
                            ['choice_text' => 'Mesurer des indicateurs de résultat et les comparer à une référence antérieure', 'is_correct' => true],
                            ['choice_text' => 'Ajouter des animations au formulaire déclencheur', 'is_correct' => false],
                            ['choice_text' => 'Augmenter le nombre d’étapes sans analyser les résultats', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données historiques de traitement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Bureautique Professional — Communication et coordination avec Outlook',
                'description' => 'Gérez les échanges, réunions et actions de suivi avec une communication professionnelle et des décisions traçables.',
                'difficulty' => 'Professional',
                'duration' => 30,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une demande de validation urgente est adressée à 25 personnes, mais seules deux doivent décider et trois fournir une expertise. Comment rendre le message plus efficace ?',
                        'explanation' => 'Un message ciblé doit désigner clairement les personnes responsables de l’action, solliciter les contributeurs nécessaires et limiter les destinataires en copie à ceux qui ont besoin d’être informés.',
                        'choices' => [
                            ['choice_text' => 'Identifier les décideurs et contributeurs dans le message et limiter les destinataires au besoin', 'is_correct' => true],
                            ['choice_text' => 'Mettre tous les destinataires en copie cachée sans préciser la demande', 'is_correct' => false],
                            ['choice_text' => 'Envoyer le même courriel chaque heure jusqu’à réception d’une réponse', 'is_correct' => false],
                            ['choice_text' => 'Retirer la date limite pour réduire la pression', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une longue chaîne de courriels contient plusieurs décisions et une nouvelle personne doit reprendre le dossier. Quelle transmission est la plus utile ?',
                        'explanation' => 'Un résumé concis des décisions, des points ouverts, des responsables et des échéances donne le contexte nécessaire sans imposer la lecture de toute la chaîne.',
                        'choices' => [
                            ['choice_text' => 'Transmettre un résumé structuré des décisions, actions, responsables et échéances avec les pièces utiles', 'is_correct' => true],
                            ['choice_text' => 'Transférer la chaîne entière sans explication', 'is_correct' => false],
                            ['choice_text' => 'Copier uniquement le dernier message, même s’il ne contient pas le contexte', 'is_correct' => false],
                            ['choice_text' => 'Envoyer les messages un par un sans ordre chronologique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une réunion de projet réunit 12 personnes, mais l’invitation ne précise ni objectif ni préparation attendue. Que faut-il ajouter pour améliorer son efficacité ?',
                        'explanation' => 'Un objectif clair, un ordre du jour avec les décisions attendues et les documents préparatoires permettent aux participants de se préparer et de consacrer la réunion aux sujets utiles.',
                        'choices' => [
                            ['choice_text' => 'Un objectif, un ordre du jour, les décisions attendues et les éléments à préparer', 'is_correct' => true],
                            ['choice_text' => 'Une invitation récurrente sans date de fin', 'is_correct' => false],
                            ['choice_text' => 'Une liste de tous les courriels échangés depuis le début du projet', 'is_correct' => false],
                            ['choice_text' => 'Un ordre du jour qui ne distingue pas information et décision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À la fin d’une réunion, l’équipe a convenu de trois actions, mais les personnes responsables et les dates ne sont pas consignées. Quelle pratique évite le mieux que les décisions restent sans suite ?',
                        'explanation' => 'Un compte rendu bref qui associe chaque action à un responsable et une échéance crée un suivi vérifiable.',
                        'choices' => [
                            ['choice_text' => 'Envoyer un relevé des décisions et actions avec responsables et échéances', 'is_correct' => true],
                            ['choice_text' => 'Attendre que chaque participant se souvienne de sa tâche', 'is_correct' => false],
                            ['choice_text' => 'Envoyer l’enregistrement complet sans synthèse', 'is_correct' => false],
                            ['choice_text' => 'Programmer une réunion supplémentaire sans ordre du jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un cadre reçoit chaque jour des alertes automatiques, des comptes rendus et des demandes d’approbation dans la même boîte de réception. Quelle organisation est la plus utile ?',
                        'explanation' => 'Des règles peuvent classer certains messages répétitifs, mais les demandes nécessitant une décision doivent rester identifiables et être contrôlées pour éviter un classement silencieux incorrect.',
                        'choices' => [
                            ['choice_text' => 'Créer des règles ciblées pour les messages prévisibles et vérifier régulièrement les dossiers de classement', 'is_correct' => true],
                            ['choice_text' => 'Déplacer automatiquement tout message contenant une pièce jointe vers les éléments supprimés', 'is_correct' => false],
                            ['choice_text' => 'Désactiver toutes les notifications et ne plus consulter la boîte', 'is_correct' => false],
                            ['choice_text' => 'Utiliser une règle unique fondée sur le nom de l’expéditeur uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une réunion récurrente ne produit plus de décisions et plusieurs participants y assistent sans rôle précis. Quelle action de gestion est la plus raisonnable ?',
                        'explanation' => 'Il convient de vérifier si la réunion demeure nécessaire, d’en redéfinir l’objectif, les participants et les résultats attendus, ou de la remplacer par un autre mode de suivi.',
                        'choices' => [
                            ['choice_text' => 'Réévaluer son objectif, ses participants et ses résultats attendus avant de maintenir la récurrence', 'is_correct' => true],
                            ['choice_text' => 'Ajouter davantage de participants pour produire plus d’idées', 'is_correct' => false],
                            ['choice_text' => 'Allonger sa durée sans revoir l’ordre du jour', 'is_correct' => false],
                            ['choice_text' => 'La conserver par défaut parce qu’elle figure déjà au calendrier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un collaborateur doit organiser son agenda pour livrer une analyse qui demande plusieurs heures de concentration. Quelle méthode protège le mieux ce travail ?',
                        'explanation' => 'Réserver des blocs de travail réalistes, communiquer les périodes d’indisponibilité et prévoir des marges pour les imprévus réduit la fragmentation du travail.',
                        'choices' => [
                            ['choice_text' => 'Bloquer des périodes de concentration et prévoir une marge pour les tâches urgentes', 'is_correct' => true],
                            ['choice_text' => 'Remplir chaque créneau disponible de réunions', 'is_correct' => false],
                            ['choice_text' => 'Planifier toute l’analyse dans une seule plage sans pause ni marge', 'is_correct' => false],
                            ['choice_text' => 'Refuser automatiquement toutes les invitations de l’équipe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une demande de changement doit être approuvée par plusieurs personnes dans un ordre défini, et l’équipe doit conserver la décision finale. Quel mode de traitement est le plus approprié ?',
                        'explanation' => 'Un processus d’approbation explicite avec étapes, responsables, échéance et historique fournit une traçabilité plus fiable qu’une série de réponses dispersées par courriel.',
                        'choices' => [
                            ['choice_text' => 'Utiliser un flux d’approbation ou un suivi partagé qui conserve les étapes et la décision', 'is_correct' => true],
                            ['choice_text' => 'Demander à chacun de répondre séparément à l’expéditeur sans registre commun', 'is_correct' => false],
                            ['choice_text' => 'Considérer l’absence de réponse comme une approbation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les messages dès qu’une personne a répondu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un employé reçoit un courriel d’un dirigeant demandant de modifier immédiatement les coordonnées bancaires d’un fournisseur. Le ton est pressant et la demande est inhabituelle. Quelle réaction est la plus sûre ?',
                        'explanation' => 'Une demande sensible et inattendue doit être vérifiée par un canal connu et indépendant avant toute modification, même si l’adresse ou le nom affiché semble familier.',
                        'choices' => [
                            ['choice_text' => 'Confirmer la demande par un canal de confiance distinct avant toute modification', 'is_correct' => true],
                            ['choice_text' => 'Répondre au même courriel pour demander si la demande est réelle', 'is_correct' => false],
                            ['choice_text' => 'Effectuer la modification puis attendre la confirmation', 'is_correct' => false],
                            ['choice_text' => 'Transférer les coordonnées bancaires à toute l’équipe pour avis', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une invitation de réunion inclut des personnes externes et joint un document interne dont le contenu n’est pas nécessaire à leur participation. Quel contrôle faut-il effectuer ?',
                        'explanation' => 'Les invitations et pièces jointes doivent être vérifiées selon le besoin de chaque destinataire; les documents internes non nécessaires ne doivent pas être diffusés par inadvertance.',
                        'choices' => [
                            ['choice_text' => 'Vérifier les destinataires et retirer ou remplacer les pièces jointes non destinées aux externes', 'is_correct' => true],
                            ['choice_text' => 'Conserver toutes les pièces jointes pour que chacun dispose du contexte complet', 'is_correct' => false],
                            ['choice_text' => 'Masquer les noms des destinataires sans vérifier le document', 'is_correct' => false],
                            ['choice_text' => 'Envoyer le document dans un deuxième courriel à la même liste', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Bureautique Professional — Cas intégrés de production bureautique',
                'description' => 'Résolvez des situations professionnelles qui combinent données, documents, communication, contrôle et publication.',
                'difficulty' => 'Professional',
                'duration' => 35,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une équipe doit produire chaque mois un rapport client à partir d’un export de ventes, appliquer des calculs, générer un document Word personnalisé et l’envoyer après validation. Quelle démarche réduit le mieux les erreurs de bout en bout ?',
                        'explanation' => 'Le flux doit comporter des étapes vérifiables de préparation des données, de contrôle des résultats, de génération du document et d’approbation avant l’envoi externe.',
                        'choices' => [
                            ['choice_text' => 'Séparer préparation, contrôles, génération et approbation, avec une vérification avant l’envoi', 'is_correct' => true],
                            ['choice_text' => 'Automatiser l’envoi dès réception du fichier sans vérifier son contenu', 'is_correct' => false],
                            ['choice_text' => 'Copier les montants dans Word et supprimer le fichier source', 'is_correct' => false],
                            ['choice_text' => 'Envoyer un modèle vierge au client pour qu’il calcule les résultats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un rapport destiné au conseil d’administration contient des chiffres extraits d’un classeur modifié après sa dernière revue. Quel contrôle doit précéder la publication ?',
                        'explanation' => 'La publication doit être rapprochée de la source et de la version approuvées; les changements postérieurs doivent être évalués et validés avant de diffuser les chiffres.',
                        'choices' => [
                            ['choice_text' => 'Rapprocher les chiffres avec une version contrôlée du classeur et faire approuver les changements récents', 'is_correct' => true],
                            ['choice_text' => 'Vérifier uniquement que le rapport s’ouvre sur l’ordinateur du présentateur', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les chiffres qui semblent inhabituels sans documenter la correction', 'is_correct' => false],
                            ['choice_text' => 'Utiliser le classeur le plus récent par date sans vérifier son contenu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un tableau de bord partagé montre une baisse de performance. L’équipe envisage de modifier immédiatement le modèle Excel et de republier le rapport. Quelle séquence est la plus professionnelle ?',
                        'explanation' => 'Avant la modification, il faut vérifier la définition de l’indicateur, la période, les filtres et la qualité de la source; les changements de modèle doivent ensuite être testés et documentés.',
                        'choices' => [
                            ['choice_text' => 'Vérifier source, périmètre et calcul, puis tester et documenter toute modification', 'is_correct' => true],
                            ['choice_text' => 'Changer les couleurs jusqu’à ce que la baisse soit moins visible', 'is_correct' => false],
                            ['choice_text' => 'Effacer les données antérieures pour éviter les comparaisons', 'is_correct' => false],
                            ['choice_text' => 'Publier une nouvelle copie sans conserver la version précédente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fusion de courriers doit envoyer des offres différentes selon le segment de clientèle. Les critères de segmentation changent chaque trimestre. Où est-il préférable de gérer ces règles ?',
                        'explanation' => 'Les critères doivent être définis et validés dans la source de données ou dans une logique centralisée et documentée, plutôt que dispersés dans des modifications manuelles des courriers.',
                        'choices' => [
                            ['choice_text' => 'Maintenir les segments dans une source structurée, contrôlée et validée avant le publipostage', 'is_correct' => true],
                            ['choice_text' => 'Choisir les offres au hasard après l’impression', 'is_correct' => false],
                            ['choice_text' => 'Modifier manuellement chaque lettre sans conserver la règle appliquée', 'is_correct' => false],
                            ['choice_text' => 'Inscrire tous les clients dans le même segment pour simplifier le modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe prépare un support de décision avec des données provenant de plusieurs départements. Les périodes et définitions de deux indicateurs diffèrent. Que faut-il résoudre avant de comparer les résultats ?',
                        'explanation' => 'Les indicateurs doivent être rendus comparables en alignant période, périmètre, unité et définition, ou en signalant clairement les écarts méthodologiques.',
                        'choices' => [
                            ['choice_text' => 'Harmoniser ou expliciter les définitions, périodes et périmètres des indicateurs', 'is_correct' => true],
                            ['choice_text' => 'Utiliser les mêmes couleurs pour les deux indicateurs', 'is_correct' => false],
                            ['choice_text' => 'Ajouter les valeurs sans vérifier les unités', 'is_correct' => false],
                            ['choice_text' => 'Retirer les titres des graphiques pour gagner de la place', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un document de procédure, un tableau de suivi et une présentation contiennent chacun une version différente du même objectif trimestriel. Quelle correction de processus est la plus utile ?',
                        'explanation' => 'Une source de référence avec propriétaire et processus d’actualisation coordonné permet aux différents livrables de reprendre le même chiffre et la même définition.',
                        'choices' => [
                            ['choice_text' => 'Désigner une source officielle et un responsable de mise à jour utilisée par les livrables', 'is_correct' => true],
                            ['choice_text' => 'Demander à chaque auteur de choisir la valeur qui lui semble la plus récente', 'is_correct' => false],
                            ['choice_text' => 'Garder les trois valeurs et supprimer leur période', 'is_correct' => false],
                            ['choice_text' => 'Copier les trois fichiers dans un dossier public', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un classeur macro-enabled reçu d’un partenaire déclenche un avertissement de sécurité. L’expéditeur est connu, mais le fichier n’était pas attendu. Quelle réaction convient ?',
                        'explanation' => 'La familiarité de l’expéditeur ne suffit pas à établir l’authenticité. Il faut confirmer le besoin et la provenance par un canal fiable, puis suivre la procédure de sécurité avant d’activer le contenu.',
                        'choices' => [
                            ['choice_text' => 'Confirmer l’envoi et le besoin par un canal fiable avant d’activer les macros', 'is_correct' => true],
                            ['choice_text' => 'Activer les macros parce que le nom de l’expéditeur est familier', 'is_correct' => false],
                            ['choice_text' => 'Désactiver l’antivirus pour ouvrir le fichier plus facilement', 'is_correct' => false],
                            ['choice_text' => 'Transférer le fichier à tous les collègues pour qu’ils l’essaient', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une présentation doit être distribuée après une réunion à des participants internes et à un consultant externe. Elle contient des notes de préparation réservées à l’équipe interne. Quelle action faut-il prendre ?',
                        'explanation' => 'Il faut préparer une version destinée à l’externe, contrôler notes, commentaires et diapositives masquées, puis vérifier les autorisations de partage avant diffusion.',
                        'choices' => [
                            ['choice_text' => 'Créer et inspecter une version adaptée au destinataire externe avant de la partager avec des accès contrôlés', 'is_correct' => true],
                            ['choice_text' => 'Envoyer le fichier interne et demander au consultant de ne pas lire les notes', 'is_correct' => false],
                            ['choice_text' => 'Masquer les notes sur l’écran du présentateur sans les retirer du fichier', 'is_correct' => false],
                            ['choice_text' => 'Publier le fichier sur un lien ouvert pour éviter les demandes d’accès', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un processus de clôture mensuelle dépend de macros personnelles, de fichiers enregistrés sur le poste d’un seul analyste et de règles connues oralement. Quel premier chantier rendrait le processus plus résilient ?',
                        'explanation' => 'La documentation du flux, la centralisation contrôlée des fichiers et la clarification des responsabilités réduisent les dépendances individuelles avant d’envisager une automatisation plus large.',
                        'choices' => [
                            ['choice_text' => 'Documenter les étapes et contrôles, centraliser les fichiers de référence et désigner des responsables de relève', 'is_correct' => true],
                            ['choice_text' => 'Ajouter davantage de macros personnelles sans les documenter', 'is_correct' => false],
                            ['choice_text' => 'Copier le poste de l’analyste sur tous les ordinateurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles manuels avant de comprendre le processus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après une automatisation, les erreurs ont diminué mais le temps de traitement n’a pas changé et les exceptions exigent beaucoup de corrections. Quelle décision est la plus fondée ?',
                        'explanation' => 'L’équipe doit analyser séparément les gains de qualité et les coûts de traitement des exceptions, puis améliorer, limiter ou abandonner l’automatisation selon les résultats mesurés.',
                        'choices' => [
                            ['choice_text' => 'Évaluer les résultats et les exceptions par rapport aux objectifs, puis ajuster le processus sur ces données', 'is_correct' => true],
                            ['choice_text' => 'Déclarer l’automatisation réussie parce qu’elle est déjà déployée', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le suivi des exceptions pour réduire le temps apparent', 'is_correct' => false],
                            ['choice_text' => 'Augmenter le volume traité sans corriger les causes des erreurs', 'is_correct' => false],
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
