<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class BureautiqueBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'bureautique')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Bureautique Beginner — Fondamentaux de l’ordinateur et des fichiers',
                'description' => 'Apprenez les bases indispensables pour travailler efficacement avec des fichiers, dossiers et applications bureautiques.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'À quoi sert principalement un système d’exploitation ?',
                        'explanation' => 'Le système d’exploitation gère les ressources de l’ordinateur et permet aux applications de fonctionner.',
                        'choices' => [
                            ['choice_text' => 'Gérer les ressources de l’ordinateur et permettre l’exécution des applications', 'is_correct' => true],
                            ['choice_text' => 'Créer uniquement des présentations', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les applications bureautiques', 'is_correct' => false],
                            ['choice_text' => 'Stocker uniquement les mots de passe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un fichier ?',
                        'explanation' => 'Un fichier est une unité de données enregistrée sur un support de stockage.',
                        'choices' => [
                            ['choice_text' => 'Une unité de données enregistrée sous un nom', 'is_correct' => true],
                            ['choice_text' => 'Un dossier contenant obligatoirement plusieurs programmes', 'is_correct' => false],
                            ['choice_text' => 'Un composant matériel', 'is_correct' => false],
                            ['choice_text' => 'Une connexion Internet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un dossier ?',
                        'explanation' => 'Un dossier sert principalement à organiser des fichiers et parfois d’autres dossiers.',
                        'choices' => [
                            ['choice_text' => 'Organiser des fichiers et d’autres dossiers', 'is_correct' => true],
                            ['choice_text' => 'Modifier la vitesse du processeur', 'is_correct' => false],
                            ['choice_text' => 'Remplacer un disque dur', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement une sauvegarde distante', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie généralement l’extension d’un fichier ?',
                        'explanation' => 'L’extension aide à identifier le type de fichier et l’application susceptible de l’ouvrir.',
                        'choices' => [
                            ['choice_text' => 'Elle indique généralement le type ou le format du fichier', 'is_correct' => true],
                            ['choice_text' => 'Elle indique toujours la taille du fichier', 'is_correct' => false],
                            ['choice_text' => 'Elle donne le mot de passe du fichier', 'is_correct' => false],
                            ['choice_text' => 'Elle indique le nombre d’utilisateurs connectés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il donner des noms clairs aux fichiers ?',
                        'explanation' => 'Des noms descriptifs facilitent la recherche et l’identification des documents.',
                        'choices' => [
                            ['choice_text' => 'Pour retrouver et identifier plus facilement les documents', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement leur taille', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute suppression', 'is_correct' => false],
                            ['choice_text' => 'Pour accélérer Internet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle pratique facilite l’organisation de nombreux documents ?',
                        'explanation' => 'Une structure de dossiers logique permet de classer les fichiers par projet, année, type ou autre critère pertinent.',
                        'choices' => [
                            ['choice_text' => 'Créer une structure de dossiers logique et cohérente', 'is_correct' => true],
                            ['choice_text' => 'Mettre tous les fichiers dans le même dossier', 'is_correct' => false],
                            ['choice_text' => 'Utiliser des noms aléatoires', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les extensions de fichiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi sauvegarder régulièrement les documents importants ?',
                        'explanation' => 'Les sauvegardes permettent de récupérer les données après une suppression accidentelle ou une panne.',
                        'choices' => [
                            ['choice_text' => 'Pour pouvoir récupérer les données en cas de perte ou d’incident', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute modification future', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les documents publics', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les fichiers temporaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que fait généralement le raccourci Ctrl + C ?',
                        'explanation' => 'Ctrl + C copie l’élément sélectionné dans le presse-papiers.',
                        'choices' => [
                            ['choice_text' => 'Copier la sélection', 'is_correct' => true],
                            ['choice_text' => 'Couper la sélection', 'is_correct' => false],
                            ['choice_text' => 'Coller la sélection', 'is_correct' => false],
                            ['choice_text' => 'Annuler la dernière action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que fait généralement le raccourci Ctrl + V ?',
                        'explanation' => 'Ctrl + V colle le contenu actuellement présent dans le presse-papiers.',
                        'choices' => [
                            ['choice_text' => 'Coller le contenu du presse-papiers', 'is_correct' => true],
                            ['choice_text' => 'Copier la sélection', 'is_correct' => false],
                            ['choice_text' => 'Sauvegarder le fichier', 'is_correct' => false],
                            ['choice_text' => 'Fermer la fenêtre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un format PDF pour le partage d’un document final ?',
                        'explanation' => 'Le PDF est souvent utilisé pour préserver la mise en page lors du partage ou de l’impression.',
                        'choices' => [
                            ['choice_text' => 'Préserver généralement la mise en page lors du partage et de l’impression', 'is_correct' => true],
                            ['choice_text' => 'Permettre toujours une modification facile du contenu source', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement la qualité des images', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Beginner — Microsoft Word',
                'description' => 'Maîtrisez les fonctions essentielles de Word pour créer et mettre en forme des documents professionnels simples.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'À quoi sert principalement Microsoft Word ?',
                        'explanation' => 'Word est un logiciel de traitement de texte utilisé pour créer et modifier des documents.',
                        'choices' => [
                            ['choice_text' => 'Créer, modifier et mettre en forme des documents texte', 'is_correct' => true],
                            ['choice_text' => 'Gérer uniquement des bases de données', 'is_correct' => false],
                            ['choice_text' => 'Créer uniquement des animations', 'is_correct' => false],
                            ['choice_text' => 'Administrer un réseau local', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser les styles dans Word ?',
                        'explanation' => 'Les styles permettent d’appliquer une mise en forme cohérente et facilitent la structure du document.',
                        'choices' => [
                            ['choice_text' => 'Appliquer rapidement une mise en forme cohérente aux différentes parties du document', 'is_correct' => true],
                            ['choice_text' => 'Remplacer automatiquement toutes les images', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la capacité du disque', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les paragraphes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi servent les titres dans un document structuré ?',
                        'explanation' => 'Les titres permettent d’organiser le contenu et facilitent la navigation.',
                        'choices' => [
                            ['choice_text' => 'Structurer le document et faciliter sa lecture et sa navigation', 'is_correct' => true],
                            ['choice_text' => 'Changer automatiquement la langue du clavier', 'is_correct' => false],
                            ['choice_text' => 'Compresser les images', 'is_correct' => false],
                            ['choice_text' => 'Créer un fichier Excel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel outil est adapté pour créer une liste avec des points ?',
                        'explanation' => 'Les listes à puces permettent de présenter plusieurs éléments de manière structurée.',
                        'choices' => [
                            ['choice_text' => 'Une liste à puces', 'is_correct' => true],
                            ['choice_text' => 'Un saut de page uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une note de bas de page', 'is_correct' => false],
                            ['choice_text' => 'Un en-tête uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser l’alignement justifié dans certains documents ?',
                        'explanation' => 'Le texte justifié aligne les lignes sur les deux marges et peut donner un aspect plus formel.',
                        'choices' => [
                            ['choice_text' => 'Pour aligner le texte sur les marges gauche et droite', 'is_correct' => true],
                            ['choice_text' => 'Pour insérer automatiquement des images', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les espaces entre les mots', 'is_correct' => false],
                            ['choice_text' => 'Pour protéger le document par mot de passe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi servent les marges d’un document ?',
                        'explanation' => 'Les marges déterminent l’espace entre le contenu et les bords de la page.',
                        'choices' => [
                            ['choice_text' => 'Définir l’espace entre le contenu et les bords de la page', 'is_correct' => true],
                            ['choice_text' => 'Changer la taille du disque', 'is_correct' => false],
                            ['choice_text' => 'Créer une feuille de calcul', 'is_correct' => false],
                            ['choice_text' => 'Modifier les permissions du fichier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser un saut de page ?',
                        'explanation' => 'Un saut de page permet de commencer une nouvelle page à un endroit précis.',
                        'choices' => [
                            ['choice_text' => 'Commencer une nouvelle page à un emplacement défini', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement une nouvelle version du document', 'is_correct' => false],
                            ['choice_text' => 'Supprimer un paragraphe', 'is_correct' => false],
                            ['choice_text' => 'Convertir le document en Excel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de l’aperçu avant impression ?',
                        'explanation' => 'Il permet de vérifier la mise en page avant de lancer l’impression.',
                        'choices' => [
                            ['choice_text' => 'Vérifier le rendu des pages avant l’impression', 'is_correct' => true],
                            ['choice_text' => 'Modifier le matériel de l’imprimante', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement la résolution', 'is_correct' => false],
                            ['choice_text' => 'Créer une copie cloud', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser un tableau dans Word ?',
                        'explanation' => 'Les tableaux permettent d’organiser des informations selon des lignes et des colonnes.',
                        'choices' => [
                            ['choice_text' => 'Organiser des informations en lignes et colonnes', 'is_correct' => true],
                            ['choice_text' => 'Remplacer toutes les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement une présentation', 'is_correct' => false],
                            ['choice_text' => 'Compresser le document', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser la vérification orthographique ?',
                        'explanation' => 'Elle aide à détecter certaines fautes d’orthographe et erreurs de saisie.',
                        'choices' => [
                            ['choice_text' => 'Identifier certaines fautes d’orthographe et erreurs de saisie', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le texte est toujours stylistiquement parfait', 'is_correct' => false],
                            ['choice_text' => 'Traduire automatiquement tout le document correctement', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la relecture humaine', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Beginner — Microsoft Excel',
                'description' => 'Découvrez les bases des cellules, formules, tableaux et opérations essentielles dans Excel.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'À quoi sert principalement Microsoft Excel ?',
                        'explanation' => 'Excel est un tableur utilisé pour organiser, calculer et analyser des données.',
                        'choices' => [
                            ['choice_text' => 'Organiser, calculer et analyser des données sous forme de feuilles de calcul', 'is_correct' => true],
                            ['choice_text' => 'Créer uniquement des lettres', 'is_correct' => false],
                            ['choice_text' => 'Administrer des serveurs', 'is_correct' => false],
                            ['choice_text' => 'Créer uniquement des vidéos', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une cellule dans Excel ?',
                        'explanation' => 'Une cellule est l’intersection d’une ligne et d’une colonne.',
                        'choices' => [
                            ['choice_text' => 'L’intersection d’une ligne et d’une colonne', 'is_correct' => true],
                            ['choice_text' => 'Une feuille entière', 'is_correct' => false],
                            ['choice_text' => 'Une formule complète uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un classeur séparé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment une formule Excel commence-t-elle généralement ?',
                        'explanation' => 'Une formule Excel commence généralement par le signe égal.',
                        'choices' => [
                            ['choice_text' => 'Avec le signe =', 'is_correct' => true],
                            ['choice_text' => 'Avec le signe #', 'is_correct' => false],
                            ['choice_text' => 'Avec deux-points', 'is_correct' => false],
                            ['choice_text' => 'Avec le caractère %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle fonction permet généralement d’additionner plusieurs cellules ?',
                        'explanation' => 'La fonction SOMME permet d’additionner les valeurs d’une ou plusieurs plages.',
                        'choices' => [
                            ['choice_text' => 'SOMME', 'is_correct' => true],
                            ['choice_text' => 'MOYENNE', 'is_correct' => false],
                            ['choice_text' => 'NB', 'is_correct' => false],
                            ['choice_text' => 'TEXTE', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle fonction permet généralement de calculer une moyenne ?',
                        'explanation' => 'La fonction MOYENNE calcule la moyenne arithmétique des valeurs sélectionnées.',
                        'choices' => [
                            ['choice_text' => 'MOYENNE', 'is_correct' => true],
                            ['choice_text' => 'SOMME', 'is_correct' => false],
                            ['choice_text' => 'MAX', 'is_correct' => false],
                            ['choice_text' => 'SI', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi formater une cellule en pourcentage ?',
                        'explanation' => 'Le format pourcentage permet d’afficher une valeur numérique sous forme de pourcentage.',
                        'choices' => [
                            ['choice_text' => 'Afficher une valeur dans un format adapté aux pourcentages', 'is_correct' => true],
                            ['choice_text' => 'Modifier automatiquement la formule', 'is_correct' => false],
                            ['choice_text' => 'Créer un graphique', 'is_correct' => false],
                            ['choice_text' => 'Protéger le classeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la différence générale entre une ligne et une colonne dans Excel ?',
                        'explanation' => 'Les lignes sont horizontales et les colonnes verticales.',
                        'choices' => [
                            ['choice_text' => 'Une ligne est horizontale et une colonne est verticale', 'is_correct' => true],
                            ['choice_text' => 'Une ligne est toujours verticale et une colonne horizontale', 'is_correct' => false],
                            ['choice_text' => 'Les deux sont exactement identiques', 'is_correct' => false],
                            ['choice_text' => 'Une colonne n’a pas d’identifiant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser le tri dans Excel ?',
                        'explanation' => 'Le tri permet de réorganiser les données selon un critère comme le nom, la date ou le montant.',
                        'choices' => [
                            ['choice_text' => 'Réorganiser les données selon un ou plusieurs critères', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement les doublons', 'is_correct' => false],
                            ['choice_text' => 'Créer une sauvegarde', 'is_correct' => false],
                            ['choice_text' => 'Modifier le système d’exploitation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser un filtre dans un tableau de données ?',
                        'explanation' => 'Le filtre permet d’afficher seulement les lignes correspondant à certains critères.',
                        'choices' => [
                            ['choice_text' => 'Afficher uniquement les données répondant à certains critères', 'is_correct' => true],
                            ['choice_text' => 'Supprimer définitivement toutes les lignes masquées', 'is_correct' => false],
                            ['choice_text' => 'Convertir le fichier en PDF', 'is_correct' => false],
                            ['choice_text' => 'Changer le nom du classeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert un graphique dans Excel ?',
                        'explanation' => 'Les graphiques permettent de représenter visuellement certaines données.',
                        'choices' => [
                            ['choice_text' => 'Représenter visuellement les données pour faciliter leur compréhension', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la précision des données', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les formules', 'is_correct' => false],
                            ['choice_text' => 'Modifier les données sans aucune action', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Beginner — Microsoft PowerPoint',
                'description' => 'Apprenez à créer des présentations simples, lisibles et structurées avec PowerPoint.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'À quoi sert principalement PowerPoint ?',
                        'explanation' => 'PowerPoint sert à créer des présentations composées de diapositives.',
                        'choices' => [
                            ['choice_text' => 'Créer et présenter des informations sous forme de diapositives', 'is_correct' => true],
                            ['choice_text' => 'Gérer uniquement des bases de données', 'is_correct' => false],
                            ['choice_text' => 'Écrire uniquement du code', 'is_correct' => false],
                            ['choice_text' => 'Administrer des utilisateurs réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une diapositive ?',
                        'explanation' => 'Une diapositive est une page ou écran individuel d’une présentation.',
                        'choices' => [
                            ['choice_text' => 'Une page individuelle d’une présentation', 'is_correct' => true],
                            ['choice_text' => 'Un fichier Excel', 'is_correct' => false],
                            ['choice_text' => 'Une feuille de calcul', 'is_correct' => false],
                            ['choice_text' => 'Une base de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser un thème dans PowerPoint ?',
                        'explanation' => 'Un thème fournit un ensemble cohérent de couleurs, polices et éléments visuels.',
                        'choices' => [
                            ['choice_text' => 'Appliquer rapidement une apparence visuelle cohérente à la présentation', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement le contenu métier', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les images', 'is_correct' => false],
                            ['choice_text' => 'Garantir une présentation parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter de mettre trop de texte sur une diapositive ?',
                        'explanation' => 'Une diapositive trop chargée devient difficile à lire et détourne l’attention du message principal.',
                        'choices' => [
                            ['choice_text' => 'Pour améliorer la lisibilité et permettre au public de suivre le message principal', 'is_correct' => true],
                            ['choice_text' => 'Parce que PowerPoint interdit le texte long', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire automatiquement la taille du fichier', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les notes du présentateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi servent les notes du présentateur ?',
                        'explanation' => 'Elles permettent d’ajouter des informations utiles à l’orateur sans surcharger la diapositive.',
                        'choices' => [
                            ['choice_text' => 'Conserver des informations destinées au présentateur', 'is_correct' => true],
                            ['choice_text' => 'Changer automatiquement le thème', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les diapositives', 'is_correct' => false],
                            ['choice_text' => 'Créer des formules', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des images pertinentes dans une présentation ?',
                        'explanation' => 'Des visuels appropriés peuvent faciliter la compréhension d’un concept ou renforcer le message.',
                        'choices' => [
                            ['choice_text' => 'Illustrer et renforcer le message présenté', 'is_correct' => true],
                            ['choice_text' => 'Remplacer automatiquement toutes les explications', 'is_correct' => false],
                            ['choice_text' => 'Garantir une meilleure note', 'is_correct' => false],
                            ['choice_text' => 'Augmenter obligatoirement le nombre de diapositives', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une transition entre diapositives ?',
                        'explanation' => 'Une transition est un effet visuel utilisé lors du passage d’une diapositive à une autre.',
                        'choices' => [
                            ['choice_text' => 'Définir l’effet visuel lors du passage à la diapositive suivante', 'is_correct' => true],
                            ['choice_text' => 'Modifier les données d’un tableau Excel', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement un discours', 'is_correct' => false],
                            ['choice_text' => 'Protéger le fichier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi limiter l’utilisation des animations dans une présentation professionnelle ?',
                        'explanation' => 'Des animations excessives peuvent distraire et rendre le contenu moins clair.',
                        'choices' => [
                            ['choice_text' => 'Éviter de distraire le public et préserver la clarté du message', 'is_correct' => true],
                            ['choice_text' => 'Parce que les animations sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher la présentation de démarrer', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les images', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi aligner correctement les éléments d’une diapositive ?',
                        'explanation' => 'Un alignement cohérent améliore la lisibilité et donne une apparence professionnelle.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la lisibilité et la cohérence visuelle', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la qualité audio', 'is_correct' => false],
                            ['choice_text' => 'Modifier les données du fichier', 'is_correct' => false],
                            ['choice_text' => 'Créer une nouvelle présentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester une présentation avant de la présenter au public ?',
                        'explanation' => 'Une répétition permet de vérifier la lisibilité, les médias, le timing et l’organisation des diapositives.',
                        'choices' => [
                            ['choice_text' => 'Détecter les problèmes techniques et améliorer le déroulement', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le public appréciera toujours la présentation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les animations automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Transformer la présentation en document Word', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Beginner — Email et calendrier',
                'description' => 'Apprenez les bonnes pratiques de base pour utiliser efficacement le courrier électronique et le calendrier.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'À quoi sert principalement un objet d’e-mail clair ?',
                        'explanation' => 'Un objet précis aide le destinataire à comprendre immédiatement le sujet du message.',
                        'choices' => [
                            ['choice_text' => 'Permettre au destinataire d’identifier rapidement le sujet du message', 'is_correct' => true],
                            ['choice_text' => 'Augmenter la taille maximale des pièces jointes', 'is_correct' => false],
                            ['choice_text' => 'Empêcher le message d’être archivé', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le contenu du message', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert le champ CC dans un e-mail ?',
                        'explanation' => 'CC permet d’envoyer une copie du message à d’autres destinataires visibles par les participants.',
                        'choices' => [
                            ['choice_text' => 'Envoyer une copie visible du message à d’autres destinataires', 'is_correct' => true],
                            ['choice_text' => 'Masquer automatiquement les destinataires', 'is_correct' => false],
                            ['choice_text' => 'Envoyer un fichier séparé', 'is_correct' => false],
                            ['choice_text' => 'Créer un calendrier partagé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert le champ CCI ou BCC ?',
                        'explanation' => 'CCI permet d’envoyer le message à des destinataires dont les adresses ne sont pas visibles par les autres destinataires.',
                        'choices' => [
                            ['choice_text' => 'Masquer les adresses des destinataires concernés aux autres destinataires', 'is_correct' => true],
                            ['choice_text' => 'Augmenter la taille du message', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement une pièce jointe', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’objet du message', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier les destinataires avant d’envoyer un e-mail ?',
                        'explanation' => 'Une erreur de destinataire peut provoquer une fuite d’informations ou une mauvaise communication.',
                        'choices' => [
                            ['choice_text' => 'Éviter d’envoyer des informations au mauvais destinataire', 'is_correct' => true],
                            ['choice_text' => 'Accélérer toujours l’envoi', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement la taille des pièces jointes', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la sécurité du compte uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il faire attention aux pièces jointes inconnues ?',
                        'explanation' => 'Une pièce jointe inattendue peut contenir du contenu malveillant ou frauduleux.',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent contenir des fichiers malveillants ou être utilisées dans une tentative de fraude', 'is_correct' => true],
                            ['choice_text' => 'Elles sont toujours trop volumineuses', 'is_correct' => false],
                            ['choice_text' => 'Elles ne peuvent jamais être ouvertes', 'is_correct' => false],
                            ['choice_text' => 'Elles suppriment automatiquement le compte de messagerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un calendrier partagé ?',
                        'explanation' => 'Un calendrier partagé permet de coordonner les réunions et disponibilités selon les droits accordés.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la planification et la coordination des événements', 'is_correct' => true],
                            ['choice_text' => 'Remplacer le courrier électronique', 'is_correct' => false],
                            ['choice_text' => 'Créer des feuilles Excel', 'is_correct' => false],
                            ['choice_text' => 'Modifier automatiquement les horaires de travail', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi donner un titre descriptif à une réunion ?',
                        'explanation' => 'Un titre clair aide les participants à comprendre l’objectif de la réunion avant de l’ouvrir.',
                        'choices' => [
                            ['choice_text' => 'Permettre aux participants de comprendre rapidement le but de la réunion', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la durée', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les invités de répondre', 'is_correct' => false],
                            ['choice_text' => 'Créer un fichier Word', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter de mettre trop de destinataires en copie inutilement ?',
                        'explanation' => 'Une surcharge de destinataires peut générer du bruit et rendre les responsabilités moins claires.',
                        'choices' => [
                            ['choice_text' => 'Réduire le bruit informationnel et cibler les personnes concernées', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les réponses', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le message privé', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement la sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des dossiers ou catégories dans une boîte mail ?',
                        'explanation' => 'Ils aident à organiser les messages et à retrouver plus facilement les informations.',
                        'choices' => [
                            ['choice_text' => 'Organiser et retrouver plus facilement les messages', 'is_correct' => true],
                            ['choice_text' => 'Empêcher définitivement la suppression des messages', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la capacité Internet', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des réponses', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier une invitation de réunion avant de l’accepter ?',
                        'explanation' => 'Il faut vérifier l’horaire, les participants, l’objectif et les éventuels conflits d’agenda.',
                        'choices' => [
                            ['choice_text' => 'Vérifier l’horaire, le contexte et les conflits éventuels dans son agenda', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher le calendrier de fonctionner', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier le compte de l’organisateur', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer automatiquement les autres réunions', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Beginner — Gestion documentaire et collaboration',
                'description' => 'Découvrez les bonnes pratiques de partage, versions, commentaires et collaboration sur des documents.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi utiliser un emplacement partagé pour un document collaboratif ?',
                        'explanation' => 'Un emplacement partagé peut permettre aux membres autorisés de travailler sur une version commune.',
                        'choices' => [
                            ['choice_text' => 'Permettre aux personnes autorisées d’accéder à une version commune du document', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucune erreur humaine ne se produira', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute modification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le contrôle des versions est-il utile ?',
                        'explanation' => 'Il permet de retrouver des versions précédentes et de mieux suivre les modifications.',
                        'choices' => [
                            ['choice_text' => 'Suivre les modifications et revenir à une version précédente si nécessaire', 'is_correct' => true],
                            ['choice_text' => 'Empêcher tous les utilisateurs de modifier un fichier', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la taille des documents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser les commentaires dans un document collaboratif ?',
                        'explanation' => 'Les commentaires permettent de discuter d’un contenu sans modifier directement le texte principal.',
                        'choices' => [
                            ['choice_text' => 'Discuter ou suggérer des changements sans modifier directement le contenu principal', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement une nouvelle présentation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les révisions', 'is_correct' => false],
                            ['choice_text' => 'Changer le mot de passe du fichier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter les copies nommées "final", "final2", "final3" pour un document partagé ?',
                        'explanation' => 'De nombreuses copies rendent difficile l’identification de la version réellement à jour.',
                        'choices' => [
                            ['choice_text' => 'Elles créent de la confusion sur la version réellement à jour', 'is_correct' => true],
                            ['choice_text' => 'Elles empêchent toujours l’ouverture du fichier', 'is_correct' => false],
                            ['choice_text' => 'Elles rendent automatiquement le document public', 'is_correct' => false],
                            ['choice_text' => 'Elles améliorent le suivi des versions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir clairement qui peut modifier un document partagé ?',
                        'explanation' => 'Les permissions doivent correspondre au besoin réel afin d’éviter des changements involontaires.',
                        'choices' => [
                            ['choice_text' => 'Limiter les modifications aux personnes qui en ont réellement besoin', 'is_correct' => true],
                            ['choice_text' => 'Donner automatiquement les droits de modification à tous', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute collaboration', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les commentaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi synchroniser un document dans le cloud peut-il être utile ?',
                        'explanation' => 'La synchronisation permet de retrouver les fichiers sur plusieurs appareils et de maintenir les versions selon le service utilisé.',
                        'choices' => [
                            ['choice_text' => 'Accéder plus facilement aux fichiers depuis plusieurs appareils autorisés', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’un fichier ne pourra jamais être supprimé', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les besoins de sauvegarde', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute collaboration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il vérifier les droits de partage avant d’envoyer un lien vers un document ?',
                        'explanation' => 'Un lien trop largement accessible peut exposer des informations à des personnes non autorisées.',
                        'choices' => [
                            ['choice_text' => 'Éviter de donner involontairement accès à des personnes non autorisées', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la taille du fichier', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les versions précédentes', 'is_correct' => false],
                            ['choice_text' => 'Garantir que le document sera modifié', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser un nom de fichier contenant une date lorsque c’est pertinent ?',
                        'explanation' => 'Une date claire aide à identifier la période ou la version associée au document.',
                        'choices' => [
                            ['choice_text' => 'Faciliter l’identification et le classement temporel du document', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute modification', 'is_correct' => false],
                            ['choice_text' => 'Changer automatiquement le contenu', 'is_correct' => false],
                            ['choice_text' => 'Créer un fichier de sauvegarde automatique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi centraliser les documents d’un projet dans un emplacement cohérent ?',
                        'explanation' => 'Un emplacement connu réduit le temps de recherche et le risque de travailler sur un fichier obsolète.',
                        'choices' => [
                            ['choice_text' => 'Réduire la dispersion des fichiers et les erreurs de version', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun fichier ne sera supprimé', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des permissions parfaites', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi relire un document partagé avant de le considérer comme final ?',
                        'explanation' => 'La collaboration peut introduire des incohérences, commentaires non résolus ou erreurs de mise en forme.',
                        'choices' => [
                            ['choice_text' => 'Vérifier le contenu, la cohérence et les éventuels commentaires ou modifications restantes', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer automatiquement toutes les versions', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter le nombre de pages', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le fichier public', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Beginner — Productivité et raccourcis',
                'description' => 'Apprenez les raccourcis et techniques simples qui permettent de travailler plus rapidement avec les applications bureautiques.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Que fait généralement Ctrl + Z ?',
                        'explanation' => 'Ctrl + Z annule généralement la dernière action effectuée.',
                        'choices' => [
                            ['choice_text' => 'Annuler la dernière action', 'is_correct' => true],
                            ['choice_text' => 'Répéter la dernière impression', 'is_correct' => false],
                            ['choice_text' => 'Fermer l’application', 'is_correct' => false],
                            ['choice_text' => 'Ouvrir une nouvelle fenêtre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que fait généralement Ctrl + S ?',
                        'explanation' => 'Ctrl + S permet généralement d’enregistrer le document ou les modifications.',
                        'choices' => [
                            ['choice_text' => 'Enregistrer le document', 'is_correct' => true],
                            ['choice_text' => 'Supprimer le document', 'is_correct' => false],
                            ['choice_text' => 'Copier le document', 'is_correct' => false],
                            ['choice_text' => 'Fermer l’ordinateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que fait généralement Ctrl + A ?',
                        'explanation' => 'Ctrl + A sélectionne généralement tout le contenu de la zone active.',
                        'choices' => [
                            ['choice_text' => 'Sélectionner tout le contenu de la zone active', 'is_correct' => true],
                            ['choice_text' => 'Aligner automatiquement le texte', 'is_correct' => false],
                            ['choice_text' => 'Ajouter une page', 'is_correct' => false],
                            ['choice_text' => 'Archiver un fichier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser les raccourcis clavier ?',
                        'explanation' => 'Les raccourcis réduisent les manipulations répétitives avec la souris et peuvent accélérer le travail.',
                        'choices' => [
                            ['choice_text' => 'Réduire certaines manipulations répétitives et gagner du temps', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la puissance du PC', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les fonctions des applications', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les erreurs de saisie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de la recherche dans un long document ?',
                        'explanation' => 'La recherche permet de retrouver rapidement un mot ou une expression sans parcourir manuellement tout le document.',
                        'choices' => [
                            ['choice_text' => 'Retrouver rapidement un mot ou une expression', 'is_correct' => true],
                            ['choice_text' => 'Réécrire automatiquement tout le document', 'is_correct' => false],
                            ['choice_text' => 'Changer automatiquement le format PDF', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les répétitions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser copier-coller plutôt que ressaisir un texte identique ?',
                        'explanation' => 'Le copier-coller réduit les erreurs de saisie et accélère les opérations répétitives.',
                        'choices' => [
                            ['choice_text' => 'Gagner du temps et réduire les erreurs de ressaisie', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le contenu est toujours correct', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la taille de la police', 'is_correct' => false],
                            ['choice_text' => 'Modifier automatiquement la mise en page', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser les favoris ou raccourcis vers les dossiers souvent utilisés ?',
                        'explanation' => 'Ils réduisent le temps nécessaire pour naviguer vers les emplacements fréquemment consultés.',
                        'choices' => [
                            ['choice_text' => 'Accéder plus rapidement aux emplacements fréquemment utilisés', 'is_correct' => true],
                            ['choice_text' => 'Créer une copie automatique de chaque dossier', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les fichiers anciens', 'is_correct' => false],
                            ['choice_text' => 'Protéger automatiquement les documents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des modèles pour les documents répétitifs ?',
                        'explanation' => 'Un modèle fournit une structure de départ réutilisable.',
                        'choices' => [
                            ['choice_text' => 'Éviter de recréer manuellement la même structure à chaque fois', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute personnalisation', 'is_correct' => false],
                            ['choice_text' => 'Garantir que tous les documents sont sans erreur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les fichiers précédents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des noms cohérents pour les fichiers d’un même projet ?',
                        'explanation' => 'Une convention de nommage facilite le tri, la recherche et la compréhension des documents.',
                        'choices' => [
                            ['choice_text' => 'Faciliter le classement, la recherche et l’identification des documents', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la sécurité', 'is_correct' => false],
                            ['choice_text' => 'Réduire la taille des fichiers', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toutes les suppressions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier les fichiers récemment modifiés avant de partager un document ?',
                        'explanation' => 'Cela aide à éviter de partager une ancienne version ou un fichier qui contient encore des modifications incomplètes.',
                        'choices' => [
                            ['choice_text' => 'Éviter de partager une version obsolète ou incomplète', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le fichier sera plus petit', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les commentaires', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement les anciennes versions', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Beginner — Sécurité bureautique',
                'description' => 'Apprenez les bonnes pratiques essentielles pour protéger les documents, comptes et informations professionnelles.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi utiliser un mot de passe unique pour son compte professionnel ?',
                        'explanation' => 'Un mot de passe réutilisé sur plusieurs services augmente les conséquences d’une compromission.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’impact si un autre service utilisant le même mot de passe est compromis', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun compte ne pourra jamais être piraté', 'is_correct' => false],
                            ['choice_text' => 'Éviter les mises à jour', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement la vitesse du compte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi activer l’authentification multifactorielle lorsque disponible ?',
                        'explanation' => 'Elle ajoute une preuve supplémentaire en plus du mot de passe.',
                        'choices' => [
                            ['choice_text' => 'Ajouter une couche de vérification supplémentaire lors de la connexion', 'is_correct' => true],
                            ['choice_text' => 'Remplacer définitivement tous les mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Garantir une sécurité absolue', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la gestion des comptes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier l’expéditeur d’un e-mail inattendu ?',
                        'explanation' => 'Les attaques de phishing utilisent souvent des messages qui semblent provenir d’une source légitime.',
                        'choices' => [
                            ['choice_text' => 'Détecter d’éventuelles tentatives de phishing ou d’usurpation', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que la pièce jointe est sûre', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter la vitesse du réseau', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ne faut-il pas partager facilement des documents contenant des informations sensibles ?',
                        'explanation' => 'Un partage trop large peut exposer des données confidentielles à des personnes non autorisées.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’exposition des informations aux seules personnes qui en ont besoin', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute collaboration', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire automatiquement la taille du document', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les versions précédentes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi verrouiller sa session lorsqu’on quitte son poste ?',
                        'explanation' => 'Le verrouillage empêche une personne proche d’utiliser la session ouverte sans autorisation.',
                        'choices' => [
                            ['choice_text' => 'Empêcher une personne non autorisée d’utiliser la session ouverte', 'is_correct' => true],
                            ['choice_text' => 'Éteindre définitivement l’ordinateur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les fichiers temporaires', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement les performances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mettre à jour les logiciels bureautiques ?',
                        'explanation' => 'Les mises à jour peuvent corriger des vulnérabilités et des défauts logiciels.',
                        'choices' => [
                            ['choice_text' => 'Bénéficier notamment de corrections de sécurité et de bugs', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le logiciel ne tombera jamais en panne', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les documents existants', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les nouvelles fonctionnalités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter les macros ou fichiers exécutables provenant d’une source inconnue ?',
                        'explanation' => 'Certains fichiers peuvent exécuter du contenu malveillant.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent exécuter du contenu malveillant sur le poste', 'is_correct' => true],
                            ['choice_text' => 'Ils sont toujours trop volumineux', 'is_correct' => false],
                            ['choice_text' => 'Ils ne peuvent jamais contenir de code', 'is_correct' => false],
                            ['choice_text' => 'Ils accélèrent toujours les applications', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier les liens avant de cliquer dans un e-mail ?',
                        'explanation' => 'Un lien peut rediriger vers un site frauduleux destiné à voler des informations.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque d’être redirigé vers un site frauduleux', 'is_correct' => true],
                            ['choice_text' => 'Garantir que la page sera plus rapide', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement la sécurité du navigateur', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tous les téléchargements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les sauvegardes ne doivent-elles pas être conservées uniquement sur le même appareil ?',
                        'explanation' => 'Une panne ou une perte de l’appareil peut alors détruire à la fois les données et leur sauvegarde.',
                        'choices' => [
                            ['choice_text' => 'Une panne ou perte du même appareil pourrait détruire les données et la sauvegarde', 'is_correct' => true],
                            ['choice_text' => 'Les sauvegardes locales sont toujours interdites', 'is_correct' => false],
                            ['choice_text' => 'Un deuxième emplacement empêche tous les incidents', 'is_correct' => false],
                            ['choice_text' => 'Les fichiers locaux ne peuvent jamais être sauvegardés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier les permissions d’un document partagé sensible ?',
                        'explanation' => 'Les autorisations doivent être limitées aux personnes ou groupes réellement concernés.',
                        'choices' => [
                            ['choice_text' => 'S’assurer que seules les personnes autorisées peuvent y accéder', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre le document accessible à tout le monde', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer automatiquement les commentaires', 'is_correct' => false],
                            ['choice_text' => 'Pour accélérer les téléchargements', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Beginner — Word, Excel et PowerPoint en pratique',
                'description' => 'Appliquez les fonctions de base des trois outils bureautiques principaux dans des situations courantes.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Vous devez rédiger une lettre officielle avec une mise en page propre. Quel outil est le plus adapté ?',
                        'explanation' => 'Word est conçu pour la création et la mise en forme de documents textuels.',
                        'choices' => [
                            ['choice_text' => 'Microsoft Word', 'is_correct' => true],
                            ['choice_text' => 'Microsoft Excel', 'is_correct' => false],
                            ['choice_text' => 'Microsoft PowerPoint', 'is_correct' => false],
                            ['choice_text' => 'Une application de calculatrice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Vous devez calculer automatiquement le total d’une colonne de dépenses. Quel outil est le plus adapté ?',
                        'explanation' => 'Excel permet d’utiliser des formules et fonctions pour effectuer des calculs sur des données structurées.',
                        'choices' => [
                            ['choice_text' => 'Microsoft Excel', 'is_correct' => true],
                            ['choice_text' => 'Microsoft Word', 'is_correct' => false],
                            ['choice_text' => 'Microsoft PowerPoint', 'is_correct' => false],
                            ['choice_text' => 'Un lecteur PDF', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Vous devez présenter les résultats d’un projet à un groupe. Quel outil est le plus approprié ?',
                        'explanation' => 'PowerPoint permet d’organiser des informations sous forme de diapositives adaptées à une présentation orale.',
                        'choices' => [
                            ['choice_text' => 'Microsoft PowerPoint', 'is_correct' => true],
                            ['choice_text' => 'Microsoft Excel uniquement', 'is_correct' => false],
                            ['choice_text' => 'Microsoft Word uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un gestionnaire de fichiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Vous voulez afficher la moyenne de plusieurs notes dans Excel. Quelle approche est adaptée ?',
                        'explanation' => 'La fonction MOYENNE permet de calculer automatiquement la moyenne d’une plage de valeurs.',
                        'choices' => [
                            ['choice_text' => 'Utiliser la fonction MOYENNE sur la plage de notes', 'is_correct' => true],
                            ['choice_text' => 'Insérer une image de la calculatrice', 'is_correct' => false],
                            ['choice_text' => 'Créer une nouvelle diapositive', 'is_correct' => false],
                            ['choice_text' => 'Changer le nom du fichier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Vous voulez appliquer la même apparence à plusieurs titres dans Word. Quelle fonction est particulièrement utile ?',
                        'explanation' => 'Les styles permettent d’appliquer une mise en forme cohérente à plusieurs titres.',
                        'choices' => [
                            ['choice_text' => 'Les styles', 'is_correct' => true],
                            ['choice_text' => 'Les filtres Excel', 'is_correct' => false],
                            ['choice_text' => 'Les transitions PowerPoint', 'is_correct' => false],
                            ['choice_text' => 'Le mode diaporama', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Vous voulez montrer visuellement l’évolution de ventes sur plusieurs mois. Quelle fonction Excel peut être utile ?',
                        'explanation' => 'Un graphique permet de représenter visuellement une évolution dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Créer un graphique à partir des données', 'is_correct' => true],
                            ['choice_text' => 'Ajouter un saut de page', 'is_correct' => false],
                            ['choice_text' => 'Modifier une note de bas de page', 'is_correct' => false],
                            ['choice_text' => 'Créer une règle de messagerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Vous devez distribuer une version finale d’un rapport qui ne doit pas changer de mise en page selon le lecteur. Quel format est souvent approprié ?',
                        'explanation' => 'Le PDF est couramment utilisé pour partager une version finale en conservant la présentation générale du document.',
                        'choices' => [
                            ['choice_text' => 'PDF', 'is_correct' => true],
                            ['choice_text' => 'Un fichier temporaire non enregistré', 'is_correct' => false],
                            ['choice_text' => 'Une capture d’écran de chaque paragraphe', 'is_correct' => false],
                            ['choice_text' => 'Un fichier audio', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Vous souhaitez réutiliser la même structure pour plusieurs présentations mensuelles. Quelle pratique est la plus efficace ?',
                        'explanation' => 'Un modèle permet de réutiliser rapidement la structure et la mise en forme.',
                        'choices' => [
                            ['choice_text' => 'Créer et réutiliser un modèle de présentation', 'is_correct' => true],
                            ['choice_text' => 'Recommencer toutes les diapositives de zéro', 'is_correct' => false],
                            ['choice_text' => 'Créer un classeur Excel vide', 'is_correct' => false],
                            ['choice_text' => 'Copier uniquement les captures d’écran', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Vous devez retrouver rapidement toutes les lignes contenant un client précis dans Excel. Quelle fonctionnalité est particulièrement adaptée ?',
                        'explanation' => 'Le filtre permet d’afficher uniquement les lignes correspondant au client recherché.',
                        'choices' => [
                            ['choice_text' => 'Le filtre', 'is_correct' => true],
                            ['choice_text' => 'Une transition', 'is_correct' => false],
                            ['choice_text' => 'Un saut de page', 'is_correct' => false],
                            ['choice_text' => 'Une note du présentateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Vous devez corriger plusieurs occurrences d’un même mot dans un document Word. Quelle fonction peut faire gagner du temps ?',
                        'explanation' => 'Rechercher et remplacer permet de modifier plusieurs occurrences d’un terme rapidement.',
                        'choices' => [
                            ['choice_text' => 'Rechercher et remplacer', 'is_correct' => true],
                            ['choice_text' => 'Le tri', 'is_correct' => false],
                            ['choice_text' => 'Le filtre', 'is_correct' => false],
                            ['choice_text' => 'Le mode diaporama', 'is_correct' => false],
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