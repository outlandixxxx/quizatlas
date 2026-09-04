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
                'title' => 'Bureautique Professional — Excel Business Models',
                'description' => 'Évaluez la capacité à concevoir, contrôler et maintenir des modèles Excel critiques utilisés pour la prise de décision.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une direction utilise un modèle Excel critique dont les hypothèses, calculs et résultats sont mélangés sur plusieurs feuilles. Quelle amélioration doit être prioritaire ?',
                        'explanation' => 'Une séparation claire entre entrées, calculs, contrôles et résultats facilite l’audit et réduit les modifications accidentelles.',
                        'choices' => [
                            ['choice_text' => 'Restructurer le modèle en séparant clairement entrées, calculs, contrôles et sorties', 'is_correct' => true],
                            ['choice_text' => 'Ajouter davantage de couleurs sans modifier la structure', 'is_correct' => false],
                            ['choice_text' => 'Protéger toutes les feuilles sans analyser les flux de calcul', 'is_correct' => false],
                            ['choice_text' => 'Copier le classeur dans plusieurs fichiers identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle Excel utilisé pour une décision financière importante doit-il posséder une baseline ou une version approuvée ?',
                        'explanation' => 'Une version de référence permet d’identifier les changements et de comparer les résultats après modification.',
                        'choices' => [
                            ['choice_text' => 'Pour disposer d’une référence contrôlée permettant de comparer les modifications', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher définitivement toute évolution du modèle', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les sauvegardes', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que toutes les hypothèses resteront vraies', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle professionnel doit-il distinguer les hypothèses modifiables des calculs dérivés ?',
                        'explanation' => 'Les hypothèses représentent des entrées de décision tandis que les calculs doivent normalement découler de ces entrées sans modification manuelle.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque qu’un utilisateur modifie directement un résultat calculé', 'is_correct' => true],
                            ['choice_text' => 'Permettre à chacun de modifier toutes les cellules', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles du modèle', 'is_correct' => false],
                            ['choice_text' => 'Garantir que le modèle ne contient aucune hypothèse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester un modèle avec des scénarios volontairement extrêmes ?',
                        'explanation' => 'Les scénarios extrêmes révèlent souvent des problèmes de logique, divisions invalides ou comportements inattendus.',
                        'choices' => [
                            ['choice_text' => 'Identifier des faiblesses de logique qui restent invisibles dans les scénarios normaux', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les scénarios extrêmes seront toujours réalistes', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les données historiques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les contraintes du modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter la source d’un indicateur calculé dans un dashboard Excel ?',
                        'explanation' => 'Sans source ni définition, un indicateur peut être mal interprété ou devenir impossible à vérifier.',
                        'choices' => [
                            ['choice_text' => 'Permettre de vérifier son origine, son calcul et son périmètre', 'is_correct' => true],
                            ['choice_text' => 'Garantir que l’indicateur augmentera dans le futur', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les utilisateurs de modifier les données', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les contrôles de qualité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle complexe doit-il limiter les dépendances cachées entre feuilles ?',
                        'explanation' => 'Des dépendances difficiles à identifier augmentent le risque de modification incorrecte et compliquent les contrôles.',
                        'choices' => [
                            ['choice_text' => 'Pour rendre le flux des calculs plus compréhensible et auditable', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les feuilles de communiquer', 'is_correct' => false],
                            ['choice_text' => 'Pour multiplier les formules indirectes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les liens entre données et résultats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une protection de feuille ne suffit-elle pas à garantir la fiabilité d’un modèle ?',
                        'explanation' => 'La protection peut empêcher certaines modifications, mais elle ne vérifie ni la logique ni la qualité des données.',
                        'choices' => [
                            ['choice_text' => 'Elle limite certaines modifications mais ne valide pas la logique ni les données du modèle', 'is_correct' => true],
                            ['choice_text' => 'La protection de feuille empêche toujours toutes les erreurs', 'is_correct' => false],
                            ['choice_text' => 'La protection rend les calculs automatiquement exacts', 'is_correct' => false],
                            ['choice_text' => 'La protection remplace les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une revue indépendante d’un modèle critique peut-elle être utile ?',
                        'explanation' => 'Un second regard peut identifier des hypothèses ou erreurs que l’auteur ne remarque plus après avoir travaillé longtemps sur le modèle.',
                        'choices' => [
                            ['choice_text' => 'Apporter un regard indépendant sur la logique, les hypothèses et les contrôles', 'is_correct' => true],
                            ['choice_text' => 'Remplacer tous les tests automatisés', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucune erreur future n’existera', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer la complexité d’un classeur professionnel ?',
                        'explanation' => 'Une complexité excessive peut augmenter les risques de maintenance et le temps nécessaire pour comprendre les calculs.',
                        'choices' => [
                            ['choice_text' => 'Identifier les zones où la maintenance et la compréhension deviennent trop coûteuses', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’un modèle complexe est toujours meilleur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les feuilles supplémentaires', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les contrôles métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur objectif pour un modèle Excel critique ?',
                        'explanation' => 'La priorité doit être la fiabilité et la compréhension du modèle, pas simplement le nombre de fonctions utilisées.',
                        'choices' => [
                            ['choice_text' => 'Produire des résultats fiables, traçables et compréhensibles avec un niveau de contrôle adapté', 'is_correct' => true],
                            ['choice_text' => 'Utiliser le plus grand nombre possible de fonctions avancées', 'is_correct' => false],
                            ['choice_text' => 'Réduire le nombre de feuilles quel qu’en soit le coût', 'is_correct' => false],
                            ['choice_text' => 'Maximiser la quantité de données importées', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Professional — Reporting et décision',
                'description' => 'Évaluez la conception de dashboards, rapports et indicateurs destinés au management et à la prise de décision.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le principal risque d’un dashboard contenant des dizaines de KPI sans hiérarchie ?',
                        'explanation' => 'Une surcharge de métriques peut empêcher le lecteur d’identifier les indicateurs vraiment importants.',
                        'choices' => [
                            ['choice_text' => 'Les indicateurs prioritaires deviennent difficiles à distinguer et à interpréter', 'is_correct' => true],
                            ['choice_text' => 'Les données deviennent automatiquement incorrectes', 'is_correct' => false],
                            ['choice_text' => 'Excel empêche toujours l’affichage de tous les KPI', 'is_correct' => false],
                            ['choice_text' => 'Les graphiques ne peuvent plus être imprimés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un KPI doit-il avoir une définition métier explicite ?',
                        'explanation' => 'Deux équipes peuvent calculer ou interpréter le même indicateur différemment si sa définition n’est pas documentée.',
                        'choices' => [
                            ['choice_text' => 'Éviter que différentes équipes interprètent ou calculent le KPI différemment', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le KPI augmente chaque période', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données historiques', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la source de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un dashboard professionnel doit-il afficher la période de référence des données ?',
                        'explanation' => 'Un indicateur sans période peut être mal interprété, notamment lors de comparaisons avec d’autres périodes.',
                        'choices' => [
                            ['choice_text' => 'Permettre au lecteur de comprendre exactement à quelle période le résultat correspond', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la fraîcheur des données', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les comparaisons historiques', 'is_correct' => false],
                            ['choice_text' => 'Garantir que toutes les données sont en temps réel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un rapport de direction doit-il distinguer faits, interprétations et recommandations ?',
                        'explanation' => 'Cette séparation clarifie ce qui est observé, ce qui est analysé et ce qui est proposé comme action.',
                        'choices' => [
                            ['choice_text' => 'Clarifier ce qui est mesuré, ce qui est déduit et ce qui est recommandé', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les analyses', 'is_correct' => false],
                            ['choice_text' => 'Garantir que les recommandations seront acceptées', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute donnée quantitative', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un changement de définition d’un KPI doit-il être signalé ?',
                        'explanation' => 'Une modification de définition peut rendre les comparaisons avec les anciennes périodes invalides.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter de comparer directement des valeurs calculées selon des règles différentes', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un KPI ne peut jamais changer', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l’historique', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une nouvelle définition réduit toujours la qualité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les visualisations doivent-elles montrer les différences importantes sans les exagérer ?',
                        'explanation' => 'Une visualisation trompeuse peut orienter les décisions dans une mauvaise direction.',
                        'choices' => [
                            ['choice_text' => 'Pour communiquer fidèlement les différences et éviter des conclusions trompeuses', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre tous les écarts identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour maximiser visuellement les variations', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les valeurs faibles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une équipe devrait-elle conserver une trace de la version de données ayant produit un rapport important ?',
                        'explanation' => 'La traçabilité permet de reproduire, vérifier ou expliquer les résultats ultérieurement.',
                        'choices' => [
                            ['choice_text' => 'Permettre de comprendre et éventuellement reproduire le résultat publié', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les données ne changeront plus', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données sources après publication', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les utilisateurs de consulter le rapport', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un dashboard professionnel doit-il afficher les exceptions et alertes importantes plutôt que seulement les moyennes ?',
                        'explanation' => 'Une moyenne peut masquer une situation critique concentrée sur un petit groupe ou une période.',
                        'choices' => [
                            ['choice_text' => 'Une moyenne peut masquer des anomalies qui nécessitent une intervention', 'is_correct' => true],
                            ['choice_text' => 'Les moyennes sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Les exceptions ne peuvent pas être mesurées', 'is_correct' => false],
                            ['choice_text' => 'Afficher les exceptions empêche toute analyse globale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester un dashboard auprès de ses utilisateurs avant de le généraliser ?',
                        'explanation' => 'Les utilisateurs peuvent révéler des ambiguïtés, besoins manquants ou informations difficiles à interpréter.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que les indicateurs et visualisations répondent réellement aux besoins de décision', 'is_correct' => true],
                            ['choice_text' => 'Garantir que tous les utilisateurs auront la même interprétation', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la validation des données', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute modification future', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal objectif d’un reporting professionnel ?',
                        'explanation' => 'Le reporting doit aider à comprendre une situation et soutenir les décisions, pas simplement reproduire des données.',
                        'choices' => [
                            ['choice_text' => 'Transformer des données fiables en informations utiles à la décision', 'is_correct' => true],
                            ['choice_text' => 'Afficher le maximum de tableaux possibles', 'is_correct' => false],
                            ['choice_text' => 'Produire des fichiers sans analyse', 'is_correct' => false],
                            ['choice_text' => 'Remplacer complètement les décisions humaines', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Professional — Gestion documentaire d’entreprise',
                'description' => 'Maîtrisez l’organisation, la gouvernance, le cycle de vie et le contrôle des documents à l’échelle d’une organisation.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une organisation doit-elle définir un propriétaire pour chaque document critique ?',
                        'explanation' => 'Le propriétaire assume généralement la responsabilité du contenu, de sa mise à jour et de son cycle de vie.',
                        'choices' => [
                            ['choice_text' => 'Assurer une responsabilité claire sur le contenu, la validité et la maintenance', 'is_correct' => true],
                            ['choice_text' => 'Garantir que personne d’autre ne pourra consulter le document', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement les anciennes versions', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute collaboration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de cycle de vie documentaire doit-elle distinguer création, validation, publication, archivage et suppression ?',
                        'explanation' => 'Chaque étape peut nécessiter des règles différentes d’accès, de modification et de conservation.',
                        'choices' => [
                            ['choice_text' => 'Adapter les contrôles et responsabilités à chaque étape de la vie du document', 'is_correct' => true],
                            ['choice_text' => 'Rendre tous les documents publics dès leur création', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute suppression future', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de classification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une organisation doit-elle éviter une politique où tous les documents sont conservés indéfiniment ?',
                        'explanation' => 'Une conservation excessive augmente les coûts, les risques et parfois les obligations de gestion.',
                        'choices' => [
                            ['choice_text' => 'La conservation excessive augmente les coûts, les risques et la complexité de gouvernance', 'is_correct' => true],
                            ['choice_text' => 'Les documents anciens deviennent automatiquement incorrects', 'is_correct' => false],
                            ['choice_text' => 'Les archives sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Les systèmes de stockage ne peuvent pas conserver beaucoup de fichiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les documents sensibles doivent-ils avoir des permissions revues périodiquement ?',
                        'explanation' => 'Les rôles des personnes évoluent et les permissions historiques peuvent devenir excessives.',
                        'choices' => [
                            ['choice_text' => 'Les besoins d’accès évoluent et certains privilèges peuvent devenir injustifiés', 'is_correct' => true],
                            ['choice_text' => 'Les permissions deviennent automatiquement plus restrictives', 'is_correct' => false],
                            ['choice_text' => 'Les documents sensibles ne peuvent jamais changer de propriétaire', 'is_correct' => false],
                            ['choice_text' => 'Une revue des accès rend les sauvegardes inutiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer le stockage des documents actifs de celui des archives dans certains environnements ?',
                        'explanation' => 'Les deux catégories ont souvent des besoins différents en matière d’accès, performance et gouvernance.',
                        'choices' => [
                            ['choice_text' => 'Adapter les coûts, les performances et les contrôles au cycle de vie du contenu', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les archives seront toujours supprimées', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute recherche historique', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une organisation doit-elle définir ce qui constitue la version officielle d’un document ?',
                        'explanation' => 'Sans source officielle, plusieurs copies peuvent être considérées comme valides et produire des décisions contradictoires.',
                        'choices' => [
                            ['choice_text' => 'Éviter plusieurs versions concurrentes considérées à tort comme officielles', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute modification des documents', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les brouillons', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’une version officielle ne changera jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les politiques documentaires doivent-elles définir des règles de partage externe ?',
                        'explanation' => 'Le partage externe augmente potentiellement l’exposition des données et nécessite des contrôles spécifiques.',
                        'choices' => [
                            ['choice_text' => 'Contrôler la diffusion des informations au-delà des frontières de l’organisation', 'is_correct' => true],
                            ['choice_text' => 'Interdire systématiquement tout partenariat externe', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les permissions internes', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’un destinataire externe ne conservera jamais une copie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une classification documentaire seule ne suffit-elle pas à protéger l’information ?',
                        'explanation' => 'La classification identifie le niveau de sensibilité, mais les contrôles d’accès, chiffrement, surveillance et processus restent nécessaires.',
                        'choices' => [
                            ['choice_text' => 'La classification doit être accompagnée de contrôles techniques et organisationnels adaptés', 'is_correct' => true],
                            ['choice_text' => 'La classification chiffre automatiquement tous les documents', 'is_correct' => false],
                            ['choice_text' => 'La classification remplace les permissions', 'is_correct' => false],
                            ['choice_text' => 'Une donnée classifiée ne nécessite aucun audit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’audit des accès documentaires doit-il être exploitable ?',
                        'explanation' => 'Les journaux doivent permettre d’identifier les événements pertinents et de mener une investigation.',
                        'choices' => [
                            ['choice_text' => 'Pour pouvoir rechercher, comprendre et investiguer les accès importants', 'is_correct' => true],
                            ['choice_text' => 'Pour conserver tous les logs sans aucune organisation', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute consultation', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les permissions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur indicateur d’une gouvernance documentaire efficace ?',
                        'explanation' => 'Une bonne gouvernance permet de trouver les bons documents, savoir lesquels sont officiels, contrôler les accès et respecter les règles de conservation.',
                        'choices' => [
                            ['choice_text' => 'Les utilisateurs trouvent les bonnes versions, avec des accès et une conservation maîtrisés', 'is_correct' => true],
                            ['choice_text' => 'Le nombre maximal de fichiers conservés', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de dossiers créés', 'is_correct' => false],
                            ['choice_text' => 'La quantité de permissions accordées', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Professional — Automatisation et contrôle opérationnel',
                'description' => 'Évaluez la conception de workflows automatisés fiables, traçables et sécurisés dans un environnement bureautique professionnel.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi un workflow critique doit-il être idempotent lorsque cela est possible ?',
                        'explanation' => 'Un workflow peut être relancé après une erreur et doit éviter de produire plusieurs fois le même effet indésirable.',
                        'choices' => [
                            ['choice_text' => 'Permettre une relance sans reproduire plusieurs fois un effet métier incorrect', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’une exécution ne pourra jamais échouer', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute journalisation', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute validation de résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un workflow professionnel doit-il avoir des étapes de validation avant une action irréversible ?',
                        'explanation' => 'Les contrôles préalables réduisent le risque qu’une erreur de données déclenche une action coûteuse ou impossible à annuler.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque qu’une erreur soit transformée en action difficile à annuler', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucune donnée ne sera jamais erronée', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les notifications', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir des seuils d’alerte sur un workflow automatisé ?',
                        'explanation' => 'Un seuil permet de détecter qu’un processus dépasse une condition normale ou acceptable.',
                        'choices' => [
                            ['choice_text' => 'Détecter les situations anormales nécessitant une intervention', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le workflow sera toujours exécuté', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les erreurs silencieuses', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les données d’entrée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un workflow doit-il conserver un identifiant d’exécution unique ?',
                        'explanation' => 'Un identifiant permet de suivre une exécution particulière à travers ses différentes étapes.',
                        'choices' => [
                            ['choice_text' => 'Relier les logs, résultats et erreurs à une exécution précise', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun workflow ne sera dupliqué', 'is_correct' => false],
                            ['choice_text' => 'Modifier automatiquement les données', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi limiter les permissions d’un compte utilisé par une automatisation ?',
                        'explanation' => 'Si le compte est compromis, ses permissions déterminent les actions qu’un attaquant pourrait effectuer.',
                        'choices' => [
                            ['choice_text' => 'Limiter les conséquences potentielles d’une compromission du workflow', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le workflow aura toujours accès à toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute authentification', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le suivi des actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un workflow doit-il gérer explicitement les données manquantes ?',
                        'explanation' => 'Une donnée absente peut conduire à une opération incorrecte si elle est traitée comme une valeur normale.',
                        'choices' => [
                            ['choice_text' => 'Une donnée manquante peut modifier le résultat ou provoquer une action erronée', 'is_correct' => true],
                            ['choice_text' => 'Les données manquantes sont toujours équivalentes à zéro', 'is_correct' => false],
                            ['choice_text' => 'Les automatisations complètent toujours correctement les données manquantes', 'is_correct' => false],
                            ['choice_text' => 'Les données manquantes ne peuvent jamais apparaître', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi versionner un workflow critique avec une procédure de retour arrière ?',
                        'explanation' => 'Une nouvelle version peut introduire une régression et nécessiter un retour rapide à une version connue.',
                        'choices' => [
                            ['choice_text' => 'Permettre de revenir rapidement à une version stable en cas de régression', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les mises à jour du workflow', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les historiques', 'is_correct' => false],
                            ['choice_text' => 'Garantir que la nouvelle version sera parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer le taux d’échec et le temps moyen de traitement d’un workflow ?',
                        'explanation' => 'Ces indicateurs permettent d’identifier les problèmes de fiabilité et de performance.',
                        'choices' => [
                            ['choice_text' => 'Évaluer sa fiabilité réelle et détecter les dégradations de performance', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’il ne changera jamais', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles d’erreur', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les workflows critiques doivent-ils prévoir un mode d’intervention manuelle ?',
                        'explanation' => 'Lorsqu’une automatisation échoue ou rencontre un cas exceptionnel, une procédure contrôlée de reprise peut être nécessaire.',
                        'choices' => [
                            ['choice_text' => 'Permettre une récupération contrôlée lorsque l’automatisation ne peut pas terminer le traitement', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’automatisation ne doit jamais fonctionner seule', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer systématiquement l’automatisation', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter tout monitoring', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal objectif d’un workflow bureautique professionnel ?',
                        'explanation' => 'L’automatisation doit produire de la valeur de façon fiable, mesurable et contrôlée.',
                        'choices' => [
                            ['choice_text' => 'Automatiser une activité de manière fiable, traçable et contrôlée', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les interventions humaines', 'is_correct' => false],
                            ['choice_text' => 'Ajouter le plus grand nombre possible d’étapes', 'is_correct' => false],
                            ['choice_text' => 'Garantir que les données ne nécessiteront jamais de validation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Professional — Communication exécutive et présentations stratégiques',
                'description' => 'Évaluez la capacité à produire des supports exécutifs clairs, orientés décision et adaptés à différents publics.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une présentation destinée à un comité exécutif contient 40 diapositives techniques. Quelle première amélioration est la plus pertinente ?',
                        'explanation' => 'Le comité a besoin d’une vue décisionnelle. Les détails techniques peuvent être déplacés en annexe.',
                        'choices' => [
                            ['choice_text' => 'Recentrer le parcours principal sur les décisions, impacts, risques et recommandations', 'is_correct' => true],
                            ['choice_text' => 'Ajouter davantage de détails techniques sur chaque diapositive', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Utiliser davantage d’animations pour retenir l’attention', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une recommandation stratégique doit-elle présenter les alternatives considérées ?',
                        'explanation' => 'Présenter les alternatives permet de montrer que la recommandation résulte d’un arbitrage et non d’un choix arbitraire.',
                        'choices' => [
                            ['choice_text' => 'Montrer les compromis et la logique ayant conduit au choix recommandé', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les alternatives seront rejetées définitivement', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute discussion', 'is_correct' => false],
                            ['choice_text' => 'Augmenter le nombre de diapositives sans raison', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi distinguer clairement risques et problèmes actuels dans un support de direction ?',
                        'explanation' => 'Un problème existe déjà, tandis qu’un risque représente une situation potentielle et nécessite une lecture différente.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils ont des statuts et des actions de traitement différents', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un risque est toujours plus grave qu’un problème', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un problème ne doit jamais être présenté', 'is_correct' => false],
                            ['choice_text' => 'Parce que les risques ne peuvent pas être mesurés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des sources et dates de données dans une présentation stratégique ?',
                        'explanation' => 'Les décisions doivent pouvoir être reliées aux données disponibles à un moment donné.',
                        'choices' => [
                            ['choice_text' => 'Permettre au lecteur d’évaluer la provenance et l’actualité des informations', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les données sont toujours exactes', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute mise à jour future', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les notes de présentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une présentation professionnelle doit-elle expliciter l’action attendue du public lorsque nécessaire ?',
                        'explanation' => 'Sans action ou décision clairement identifiée, le public peut comprendre le contexte sans savoir quoi faire ensuite.',
                        'choices' => [
                            ['choice_text' => 'Permettre au public de comprendre clairement la décision ou action attendue', 'is_correct' => true],
                            ['choice_text' => 'Garantir que la décision sera acceptée', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les questions du public', 'is_correct' => false],
                            ['choice_text' => 'Raccourcir automatiquement la présentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une présentation stratégique peut-elle avoir plusieurs niveaux de détail ?',
                        'explanation' => 'Les décideurs peuvent avoir besoin d’une synthèse tandis que les experts souhaitent vérifier les détails.',
                        'choices' => [
                            ['choice_text' => 'Permettre une lecture rapide tout en offrant les détails nécessaires à la vérification', 'is_correct' => true],
                            ['choice_text' => 'Parce que les présentations doivent toujours contenir au moins trois annexes', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le message volontairement complexe', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute hiérarchie visuelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi répéter un même indicateur avec des définitions différentes dans plusieurs diapositives est-il dangereux ?',
                        'explanation' => 'Le public peut comparer des chiffres qui ne mesurent pas exactement la même chose.',
                        'choices' => [
                            ['choice_text' => 'Cela peut créer une fausse comparaison entre des métriques ayant des définitions différentes', 'is_correct' => true],
                            ['choice_text' => 'Cela augmente toujours la précision', 'is_correct' => false],
                            ['choice_text' => 'PowerPoint refuse automatiquement ces chiffres', 'is_correct' => false],
                            ['choice_text' => 'Les définitions n’ont aucun impact sur une présentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une présentation importante doit-elle prévoir des diapositives de secours ?',
                        'explanation' => 'Des annexes ou diapositives de backup permettent de répondre aux questions sans interrompre le fil principal.',
                        'choices' => [
                            ['choice_text' => 'Répondre aux questions détaillées sans surcharger le récit principal', 'is_correct' => true],
                            ['choice_text' => 'Garantir que la présentation sera toujours plus longue', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la préparation du présentateur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les messages principaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une présentation stratégique doit-elle être testée avec son audience cible ?',
                        'explanation' => 'Un support peut être techniquement correct mais peu adapté au niveau de connaissance ou aux besoins de l’audience.',
                        'choices' => [
                            ['choice_text' => 'Vérifier que le niveau de détail et le message correspondent réellement au public', 'is_correct' => true],
                            ['choice_text' => 'Garantir que tous les participants seront d’accord', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les questions', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les annexes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur indicateur qu’une présentation stratégique est réussie ?',
                        'explanation' => 'Une bonne présentation permet au public de comprendre la situation et de prendre les décisions nécessaires.',
                        'choices' => [
                            ['choice_text' => 'Le public comprend le message, les implications et l’action ou décision attendue', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de diapositives utilisées', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’animations', 'is_correct' => false],
                            ['choice_text' => 'La quantité maximale de texte affichée', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Professional — Collaboration, gouvernance et sécurité',
                'description' => 'Évaluez les bonnes pratiques professionnelles concernant les documents partagés, les permissions, la conformité et la sécurité.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une équipe compte 200 membres mais seulement 15 doivent modifier un document sensible. Quelle stratégie d’accès est la plus appropriée ?',
                        'explanation' => 'Les permissions doivent suivre le besoin réel plutôt que le nombre total de personnes ayant besoin de consulter le contenu.',
                        'choices' => [
                            ['choice_text' => 'Donner la lecture au groupe nécessaire et la modification uniquement aux 15 personnes concernées', 'is_correct' => true],
                            ['choice_text' => 'Donner la modification aux 200 personnes pour simplifier', 'is_correct' => false],
                            ['choice_text' => 'Rendre le document public puis compter sur la confidentialité', 'is_correct' => false],
                            ['choice_text' => 'Créer un compte partagé de modification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une organisation doit-elle éviter les comptes partagés pour modifier des documents critiques ?',
                        'explanation' => 'Un compte partagé réduit la traçabilité individuelle et complique les investigations.',
                        'choices' => [
                            ['choice_text' => 'Réduire les problèmes de traçabilité et permettre d’identifier l’auteur d’une action', 'is_correct' => true],
                            ['choice_text' => 'Parce que les comptes individuels empêchent toute collaboration', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un compte partagé est toujours plus lent', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l’historique des versions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les accès aux documents sensibles doivent-ils être révoqués après un changement de rôle ?',
                        'explanation' => 'Un ancien accès peut devenir injustifié dès qu’une personne change de fonction.',
                        'choices' => [
                            ['choice_text' => 'Un changement de responsabilité peut rendre certains accès précédemment légitimes inutiles', 'is_correct' => true],
                            ['choice_text' => 'Les anciennes permissions deviennent automatiquement incorrectes dans tous les systèmes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les documents concernés', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher la personne d’utiliser la messagerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les documents confidentiels doivent-ils éviter les liens publics permanents ?',
                        'explanation' => 'Un lien public permanent peut être partagé à d’autres personnes et rester accessible au-delà du besoin initial.',
                        'choices' => [
                            ['choice_text' => 'La portée et la durée de l’accès deviennent difficiles à contrôler', 'is_correct' => true],
                            ['choice_text' => 'Un lien public est toujours plus lent', 'is_correct' => false],
                            ['choice_text' => 'Les documents confidentiels ne peuvent jamais être partagés', 'is_correct' => false],
                            ['choice_text' => 'Les liens publics garantissent toujours la confidentialité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une organisation doit-elle contrôler les téléchargements de fichiers contenant des informations très sensibles lorsque le contexte le justifie ?',
                        'explanation' => 'Une copie téléchargée peut être conservée ou diffusée en dehors des contrôles centralisés.',
                        'choices' => [
                            ['choice_text' => 'Limiter la création de copies qui échappent aux contrôles documentaires centralisés', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute utilisation des documents', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les sauvegardes internes', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir qu’une copie locale sera toujours détruite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les politiques de partage doivent-elles distinguer collaborateurs internes et partenaires externes ?',
                        'explanation' => 'Les parties externes peuvent nécessiter des contrôles, approbations et durées d’accès différents.',
                        'choices' => [
                            ['choice_text' => 'Les niveaux de confiance, obligations et contrôles peuvent être différents', 'is_correct' => true],
                            ['choice_text' => 'Les partenaires externes ne peuvent jamais consulter de documents', 'is_correct' => false],
                            ['choice_text' => 'Les utilisateurs internes ont toujours plus de risques', 'is_correct' => false],
                            ['choice_text' => 'Les permissions sont identiques par définition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un document critique doit-il avoir une procédure de validation avant publication ?',
                        'explanation' => 'La validation réduit le risque de diffuser une version incomplète, incorrecte ou non conforme.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque de publication d’un contenu incorrect ou non approuvé', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute évolution du contenu', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les brouillons avant validation', 'is_correct' => false],
                            ['choice_text' => 'Garantir qu’aucune erreur future ne sera possible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique de conservation doit-elle être reliée au type de document ?',
                        'explanation' => 'Les documents peuvent avoir des obligations, risques et besoins de conservation différents.',
                        'choices' => [
                            ['choice_text' => 'Les besoins et obligations de conservation varient selon la nature des documents', 'is_correct' => true],
                            ['choice_text' => 'Tous les documents doivent être conservés exactement le même temps', 'is_correct' => false],
                            ['choice_text' => 'Les documents numériques ne nécessitent aucune politique', 'is_correct' => false],
                            ['choice_text' => 'Les documents anciens ont toujours une plus grande valeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une organisation doit-elle conserver un historique des changements sur des documents à forte valeur ?',
                        'explanation' => 'La traçabilité peut être nécessaire pour comprendre qui a modifié quoi et quand.',
                        'choices' => [
                            ['choice_text' => 'Faciliter l’audit, la responsabilité et l’analyse des modifications', 'is_correct' => true],
                            ['choice_text' => 'Empêcher automatiquement les modifications', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les versions précédentes', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume le mieux la sécurité documentaire professionnelle ?',
                        'explanation' => 'La sécurité documentaire doit combiner classification, moindre privilège, traçabilité, protection et cycle de vie.',
                        'choices' => [
                            ['choice_text' => 'Donner le bon accès aux bonnes personnes pendant la bonne durée avec une traçabilité adaptée', 'is_correct' => true],
                            ['choice_text' => 'Bloquer systématiquement tous les documents', 'is_correct' => false],
                            ['choice_text' => 'Partager largement puis compter sur la bonne volonté des utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Conserver tous les fichiers indéfiniment', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bureautique Professional — Cas stratégiques et décisionnels',
                'description' => 'Testez votre capacité à choisir les bonnes pratiques bureautiques dans des situations complexes d’entreprise.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Une équipe produit chaque semaine un rapport manuel à partir de cinq fichiers Excel différents. Quelle amélioration devrait être étudiée en premier ?',
                        'explanation' => 'Il faut analyser le flux de données et éliminer les manipulations répétitives avant de simplement améliorer la mise en forme.',
                        'choices' => [
                            ['choice_text' => 'Structurer et automatiser le flux de données avant la production du rapport', 'is_correct' => true],
                            ['choice_text' => 'Ajouter davantage de couleurs au rapport final', 'is_correct' => false],
                            ['choice_text' => 'Créer cinq nouvelles copies de chaque fichier', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les contrôles manuels sans analyse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un directeur reçoit un dashboard contenant 50 KPI mais ne sait pas lesquels nécessitent une action. Quelle amélioration est la plus stratégique ?',
                        'explanation' => 'Le dashboard doit prioriser les indicateurs directement liés aux décisions et distinguer les alertes des informations secondaires.',
                        'choices' => [
                            ['choice_text' => 'Réduire et hiérarchiser les KPI selon les décisions qu’ils doivent soutenir', 'is_correct' => true],
                            ['choice_text' => 'Ajouter encore 20 KPI pour augmenter la couverture', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les métriques historiques', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement des graphiques circulaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un classeur critique est utilisé par plusieurs départements et chacun possède sa propre copie légèrement différente. Quel risque doit être traité en priorité ?',
                        'explanation' => 'Des copies divergentes peuvent produire des résultats différents et rendre impossible l’identification de la version officielle.',
                        'choices' => [
                            ['choice_text' => 'Établir une version de référence contrôlée et un processus clair de modification', 'is_correct' => true],
                            ['choice_text' => 'Laisser chaque département continuer avec sa propre copie', 'is_correct' => false],
                            ['choice_text' => 'Fusionner manuellement toutes les copies chaque mois', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une automatisation envoie des documents à des clients mais une erreur dans les données source pourrait envoyer le mauvais document au mauvais client. Quelle protection est la plus pertinente ?',
                        'explanation' => 'Une validation avant envoi peut vérifier les correspondances critiques avant qu’une opération irréversible ou externe ne soit exécutée.',
                        'choices' => [
                            ['choice_text' => 'Ajouter une validation des correspondances critiques avant l’envoi', 'is_correct' => true],
                            ['choice_text' => 'Accélérer l’envoi pour réduire la durée du workflow', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les logs d’envoi', 'is_correct' => false],
                            ['choice_text' => 'Donner au workflow davantage de permissions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une présentation destinée à des investisseurs contient un chiffre important provenant d’un tableau Excel modifié la veille. Quel contrôle est particulièrement important ?',
                        'explanation' => 'Il faut vérifier la provenance, la période, les hypothèses et la cohérence du chiffre avant communication externe.',
                        'choices' => [
                            ['choice_text' => 'Vérifier la source, la définition, les hypothèses et la version des données', 'is_correct' => true],
                            ['choice_text' => 'Changer uniquement la couleur du chiffre', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données sources pour éviter les incohérences', 'is_correct' => false],
                            ['choice_text' => 'Copier le chiffre sans validation pour préserver le calendrier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise souhaite standardiser ses rapports dans plusieurs pays mais certaines exigences locales diffèrent. Quelle stratégie est la plus adaptée ?',
                        'explanation' => 'Un modèle commun peut fournir une base cohérente tout en laissant des variantes contrôlées pour les exigences locales.',
                        'choices' => [
                            ['choice_text' => 'Créer un modèle commun avec des variantes contrôlées pour les exigences locales', 'is_correct' => true],
                            ['choice_text' => 'Forcer exactement le même document dans tous les pays', 'is_correct' => false],
                            ['choice_text' => 'Créer tous les rapports indépendamment sans standard', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les exigences locales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un workflow bureautique critique dépend d’un compte personnel d’un employé. Quelle faiblesse architecturale cela révèle-t-il ?',
                        'explanation' => 'Le départ ou l’indisponibilité de l’employé peut interrompre le processus et compliquer la gouvernance.',
                        'choices' => [
                            ['choice_text' => 'Une dépendance à une identité personnelle crée un Single Point of Failure opérationnel', 'is_correct' => true],
                            ['choice_text' => 'Le workflow est automatiquement sécurisé', 'is_correct' => false],
                            ['choice_text' => 'Les comptes personnels sont toujours préférables aux comptes de service', 'is_correct' => false],
                            ['choice_text' => 'La dépendance humaine n’a aucun impact sur l’automatisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une organisation conserve des milliers de documents sans savoir lesquels sont réellement officiels. Quelle initiative doit être prioritaire ?',
                        'explanation' => 'Il faut d’abord clarifier la source officielle, les propriétaires, les versions et le cycle de vie avant d’automatiser davantage.',
                        'choices' => [
                            ['choice_text' => 'Établir une gouvernance des versions officielles, propriétaires et cycles de vie', 'is_correct' => true],
                            ['choice_text' => 'Acheter immédiatement plus de stockage', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les documents anciens', 'is_correct' => false],
                            ['choice_text' => 'Créer une copie de chaque document dans un second dossier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe veut automatiser une tâche qui prend seulement deux minutes mais qui doit être réalisée 10 fois par an et comporte peu d’erreurs. Quelle décision est la plus rationnelle ?',
                        'explanation' => 'L’automatisation a un coût de conception et de maintenance. Elle doit être proportionnelle au bénéfice attendu.',
                        'choices' => [
                            ['choice_text' => 'Évaluer le coût de l’automatisation et vérifier que le gain justifie réellement l’investissement', 'is_correct' => true],
                            ['choice_text' => 'Automatiser systématiquement toutes les tâches répétitives', 'is_correct' => false],
                            ['choice_text' => 'Créer une plateforme complète pour cette seule tâche', 'is_correct' => false],
                            ['choice_text' => 'Automatiser sans tester parce que la tâche est simple', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume le mieux une stratégie bureautique professionnelle à l’échelle d’une organisation ?',
                        'explanation' => 'La bureautique professionnelle doit combiner productivité, standardisation, qualité, sécurité, gouvernance et adaptation au contexte.',
                        'choices' => [
                            ['choice_text' => 'Maximiser la valeur du travail tout en maîtrisant qualité, sécurité, gouvernance et complexité', 'is_correct' => true],
                            ['choice_text' => 'Maximiser le nombre d’outils utilisés', 'is_correct' => false],
                            ['choice_text' => 'Automatiser toutes les tâches sans mesurer leur valeur', 'is_correct' => false],
                            ['choice_text' => 'Centraliser tous les documents sans distinction de sensibilité', 'is_correct' => false],
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