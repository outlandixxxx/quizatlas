<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoftwareEngineeringIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'software-engineering')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Préciser les exigences et maîtriser les changements',
                'description' => 'Relier besoins, exemples, risques et vérifications au fil des évolutions.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Une exigence annonce « les recherches répondent en moins d’une seconde ». Quel complément permet une évaluation représentative ?',
                        'marks' => 1,
                        'explanation' => 'Un seuil de performance n’est interprétable qu’avec un scénario, une charge, des données et une méthode de mesure définis.',
                        'choices' => [
                            ['text' => 'Le scénario, les données et la charge de mesure', 'is_correct' => true],
                            ['text' => 'Le meilleur temps d’un seul exemple sur un poste local', 'is_correct' => false],
                            ['text' => 'La seule complexité théorique sans charge définie', 'is_correct' => false],
                            ['text' => 'Le budget matériel sans parcours de référence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une règle de tarification change et touche plusieurs parcours. Quel lien documentaire facilite l’identification des vérifications à revoir ?',
                        'marks' => 1,
                        'explanation' => 'La traçabilité aide à analyser l’impact d’une modification sur les comportements et leurs preuves de vérification.',
                        'choices' => [
                            ['text' => 'La traçabilité entre règle, parcours et tests', 'is_correct' => true],
                            ['text' => 'Le classement des fichiers par date', 'is_correct' => false],
                            ['text' => 'Une liste de commits sans lien avec les règles', 'is_correct' => false],
                            ['text' => 'Une cartographie des serveurs sans lien avec les parcours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une demande contient plusieurs parcours indépendants qui ne peuvent pas être validés ensemble dans le temps disponible. Quel découpage est préférable ?',
                        'marks' => 1,
                        'explanation' => 'Un découpage vertical produit des comportements observables plutôt qu’une collection de couches incomplètes.',
                        'choices' => [
                            ['text' => 'Des tranches fonctionnelles validables séparément', 'is_correct' => true],
                            ['text' => 'Une tranche par couche technique, sans résultat utilisable', 'is_correct' => false],
                            ['text' => 'Une tranche contenant seulement les écrans vides', 'is_correct' => false],
                            ['text' => 'Des tâches réparties au hasard pour équilibrer leur nombre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux services métier proposent des règles incompatibles pour le même statut. Comment traiter le conflit ?',
                        'marks' => 1,
                        'explanation' => 'Un conflit métier exige une décision tracée ; le code ne doit pas masquer un désaccord non résolu.',
                        'choices' => [
                            ['text' => 'Une décision métier explicite après analyse des conséquences', 'is_correct' => true],
                            ['text' => 'Implémenter les deux règles selon l’ordre des requêtes', 'is_correct' => false],
                            ['text' => 'Choisir la règle la plus simple sans validation', 'is_correct' => false],
                            ['text' => 'Laisser chaque développeur choisir sa propre interprétation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’équipe ignore si un fournisseur permet le débit requis. Quel travail réduit cette incertitude avant de détailler toute l’intégration ?',
                        'marks' => 1,
                        'explanation' => 'Une investigation limitée peut tester une hypothèse risquée avant un investissement plus important.',
                        'choices' => [
                            ['text' => 'Une expérimentation courte avec critère de conclusion', 'is_correct' => true],
                            ['text' => 'Une réécriture complète du service client', 'is_correct' => false],
                            ['text' => 'Une estimation présentée comme certaine', 'is_correct' => false],
                            ['text' => 'Une documentation qui suppose la capacité disponible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une exigence impose une disponibilité totale sans budget ni mécanisme de reprise. Quelle réaction est appropriée ?',
                        'marks' => 1,
                        'explanation' => 'Une exigence doit être faisable et vérifiable ; les arbitrages nécessitent objectifs, risques et moyens explicites.',
                        'choices' => [
                            ['text' => 'Un objectif négocié, réaliste et vérifiable', 'is_correct' => true],
                            ['text' => 'Promettre 100 % sans préciser les conditions', 'is_correct' => false],
                            ['text' => 'Retirer toute mesure de disponibilité', 'is_correct' => false],
                            ['text' => 'Remplacer disponibilité par le nombre de serveurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une règle d’accessibilité concerne tous les formulaires. Comment éviter de l’oublier dans certains parcours ?',
                        'marks' => 1,
                        'explanation' => 'Une contrainte transversale doit être appliquée à toutes les parties concernées et vérifiée de manière organisée.',
                        'choices' => [
                            ['text' => 'Des contrôles transversaux et des vérifications ciblées', 'is_correct' => true],
                            ['text' => 'La rattacher uniquement au premier formulaire livré', 'is_correct' => false],
                            ['text' => 'La confier aux utilisateurs après la livraison', 'is_correct' => false],
                            ['text' => 'La considérer uniquement comme une préférence individuelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fonctionnalité satisfait les exemples heureux, mais échoue pour une entrée refusée prévue dans la règle. Quelle lacune existe dans l’acceptation ?',
                        'marks' => 1,
                        'explanation' => 'Les refus attendus font partie du contrat observable et doivent avoir leurs propres exemples.',
                        'choices' => [
                            ['text' => 'Les critères et scénarios de refus n’ont pas été couverts', 'is_correct' => true],
                            ['text' => 'Le besoin était nécessairement non fonctionnel', 'is_correct' => false],
                            ['text' => 'La compilation était trop rapide', 'is_correct' => false],
                            ['text' => 'L’outil de versionnement était inadapté', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une nouvelle demande arrive après le début du développement. Quelle gestion du changement est saine ?',
                        'marks' => 1,
                        'explanation' => 'Le changement est possible, mais son coût et ses conséquences doivent rester visibles et cohérents.',
                        'choices' => [
                            ['text' => 'Un arbitrage de valeur, de priorité et d’impact', 'is_correct' => true],
                            ['text' => 'L’accepter sans examiner l’impact sur le travail engagé', 'is_correct' => false],
                            ['text' => 'Refuser tout changement jusqu’à la fin du produit', 'is_correct' => false],
                            ['text' => 'Modifier le code en conservant les critères antérieurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une démonstration révèle que le besoin supposé n’est plus prioritaire. Quelle décision est cohérente avec une démarche itérative ?',
                        'marks' => 1,
                        'explanation' => 'L’apprentissage doit pouvoir modifier les priorités ; une itération ne sert pas seulement à exécuter un plan figé.',
                        'choices' => [
                            ['text' => 'Réévaluer les prochains travaux avec les personnes responsables du produit', 'is_correct' => true],
                            ['text' => 'Continuer uniquement parce que le plan initial existe', 'is_correct' => false],
                            ['text' => 'Masquer le retour pour protéger l’estimation', 'is_correct' => false],
                            ['text' => 'Augmenter le périmètre sans discussion', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Délimiter des modules et définir leurs contrats',
                'description' => 'Réduire les changements coordonnés par des responsabilités et des dépendances explicites.',
                'difficulty' => 'Intermediate',
                'duration' => 17,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Un module lit directement les tables internes d’un autre, puis casse lorsque ce dernier change son schéma. Quelle frontière manque ?',
                        'marks' => 1,
                        'explanation' => 'L’accès aux détails internes crée un couplage que le contrat doit limiter.',
                        'choices' => [
                            ['text' => 'Un contrat stable masquant le schéma interne', 'is_correct' => true],
                            ['text' => 'Un commentaire indiquant le nom des tables', 'is_correct' => false],
                            ['text' => 'Un index supplémentaire sur chaque table', 'is_correct' => false],
                            ['text' => 'Une copie du schéma dans chaque module', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service construit un client réseau concret dans sa méthode. Quelle évolution facilite un test sans réseau ?',
                        'marks' => 1,
                        'explanation' => 'L’injection permet de contrôler la dépendance sans modifier le comportement du service testé.',
                        'choices' => [
                            ['text' => 'Une dépendance remplaçable par injection', 'is_correct' => true],
                            ['text' => 'Construire le même client dans le test', 'is_correct' => false],
                            ['text' => 'Placer la connexion dans une variable globale', 'is_correct' => false],
                            ['text' => 'Ignorer les erreurs réseau dans les assertions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une classe change à chaque évolution de facturation et à chaque évolution de notification. Quel signal de conception apparaît ?',
                        'marks' => 1,
                        'explanation' => 'Des raisons de changement distinctes peuvent justifier de séparer les responsabilités.',
                        'choices' => [
                            ['text' => 'Plusieurs raisons de changement sont réunies', 'is_correct' => true],
                            ['text' => 'L’interface est nécessairement trop petite', 'is_correct' => false],
                            ['text' => 'Les objets sont trop immuables', 'is_correct' => false],
                            ['text' => 'Le code manque obligatoirement d’héritage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un sous-type exige un montant strictement positif alors que le contrat de base accepte zéro. Quel risque cela crée-t-il ?',
                        'marks' => 1,
                        'explanation' => 'Renforcer les préconditions d’un sous-type peut violer sa substituabilité pour les clients du type de base.',
                        'choices' => [
                            ['text' => 'Un appel valide du contrat de base peut devenir invalide', 'is_correct' => true],
                            ['text' => 'Le sous-type devient automatiquement plus sûr pour tous les clients', 'is_correct' => false],
                            ['text' => 'Les préconditions n’appartiennent pas au contrat', 'is_correct' => false],
                            ['text' => 'Le retour est nécessairement plus rapide', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une interface d’export impose aussi la suppression des données, dont certains clients n’ont pas besoin. Quelle modification améliore le contrat ?',
                        'marks' => 1,
                        'explanation' => 'Des interfaces ciblées évitent d’imposer des opérations inutiles ou dangereuses à leurs consommateurs.',
                        'choices' => [
                            ['text' => 'Séparer les capacités d’export et de suppression', 'is_correct' => true],
                            ['text' => 'Ajouter une implémentation vide à chaque client', 'is_correct' => false],
                            ['text' => 'Rendre la suppression implicite après tout export', 'is_correct' => false],
                            ['text' => 'Fusionner davantage d’opérations dans l’interface', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une commande hérite d’un transport HTTP uniquement pour réutiliser une méthode d’envoi. Quelle relation décrit mieux le besoin ?',
                        'marks' => 1,
                        'explanation' => 'La réutilisation seule ne justifie pas une relation de sous-type ; une collaboration explicite est souvent plus juste.',
                        'choices' => [
                            ['text' => 'Une collaboration avec le transport par composition', 'is_correct' => true],
                            ['text' => 'La commande est un sous-type métier de transport', 'is_correct' => false],
                            ['text' => 'Le transport doit hériter de toutes les commandes', 'is_correct' => false],
                            ['text' => 'L’héritage est requis dès que deux classes partagent du code', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une décision choisit un monolithe modulaire plutôt que des services séparés. Que doit contenir sa fiche de décision ?',
                        'marks' => 1,
                        'explanation' => 'Une décision utile conserve aussi les raisons et les compromis qui permettront de la réévaluer.',
                        'choices' => [
                            ['text' => 'Le contexte, les options et les conséquences du choix', 'is_correct' => true],
                            ['text' => 'Seulement le nom de la solution choisie', 'is_correct' => false],
                            ['text' => 'Une liste de classes sans justification', 'is_correct' => false],
                            ['text' => 'Une promesse de ne jamais réexaminer le choix', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une méthode renvoie null pour « absent » et pour « serveur indisponible ». Quel défaut de contrat en découle ?',
                        'marks' => 1,
                        'explanation' => 'Absence attendue et défaillance technique doivent être distinguées si elles appellent des comportements différents.',
                        'choices' => [
                            ['text' => 'L’appelant ne peut pas choisir une réaction adaptée à chaque situation', 'is_correct' => true],
                            ['text' => 'Null garantit que l’opération peut être retentée', 'is_correct' => false],
                            ['text' => 'Les deux situations ont toujours le même traitement métier', 'is_correct' => false],
                            ['text' => 'Une exception est impossible dans ce langage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux modules s’importent mutuellement et doivent être testés ensemble. Quel axe de correction est pertinent ?',
                        'marks' => 1,
                        'explanation' => 'Les cycles de dépendances réduisent l’autonomie et compliquent l’ordre de construction et de test.',
                        'choices' => [
                            ['text' => 'Revoir les responsabilités pour rompre le cycle', 'is_correct' => true],
                            ['text' => 'Ajouter un troisième module qui dépend des deux sans changer le cycle', 'is_correct' => false],
                            ['text' => 'Renommer les imports', 'is_correct' => false],
                            ['text' => 'Dupliquer toutes les classes dans les deux modules', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une abstraction est créée pour une seule utilisation et impose de nombreuses options jamais utilisées. Quel signe doit alerter ?',
                        'marks' => 1,
                        'explanation' => 'Une abstraction doit correspondre à une variation ou une frontière utile, pas à une généralité imaginée sans besoin.',
                        'choices' => [
                            ['text' => 'La généralisation apporte plus de complexité que de valeur démontrée', 'is_correct' => true],
                            ['text' => 'Une interface est toujours une preuve de bonne conception', 'is_correct' => false],
                            ['text' => 'Le nombre d’options garantit la stabilité du besoin', 'is_correct' => false],
                            ['text' => 'Les options inutilisées améliorent nécessairement les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une petite équipe veut isoler ses domaines mais ne peut pas exploiter plusieurs services. Quelle solution mérite examen ?',
                        'marks' => 1,
                        'explanation' => 'La modularité peut être assurée dans un même déploiement, sans ajouter immédiatement les coûts de distribution.',
                        'choices' => [
                            ['text' => 'Un monolithe modulaire aux dépendances contrôlées', 'is_correct' => true],
                            ['text' => 'Un service réseau par classe', 'is_correct' => false],
                            ['text' => 'Une base partagée accessible librement partout', 'is_correct' => false],
                            ['text' => 'Une séparation par serveur sans frontières de code', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un module expose son contrat mais continue de laisser les clients modifier son état interne. Quelle faiblesse demeure ?',
                        'marks' => 1,
                        'explanation' => 'Une frontière n’est efficace que si les accès et modifications passent réellement par ses règles.',
                        'choices' => [
                            ['text' => 'Les invariants peuvent être contournés malgré l’existence de l’interface', 'is_correct' => true],
                            ['text' => 'L’interface empêche toute modification invalide', 'is_correct' => false],
                            ['text' => 'La cohésion est automatiquement garantie', 'is_correct' => false],
                            ['text' => 'L’état est devenu immuable', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Construire une stratégie de tests utile',
                'description' => 'Choisir les preuves adaptées au risque et distinguer exécution, assertions et intégration.',
                'difficulty' => 'Intermediate',
                'duration' => 16,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Un double renvoie un taux fixé à l’avance pour isoler un calcul. Quel rôle joue-t-il principalement ?',
                        'marks' => 1,
                        'explanation' => 'Un bouchon, souvent appelé stub, fournit des valeurs déterminées pour contrôler le scénario.',
                        'choices' => [
                            ['text' => 'Un bouchon fournissant une réponse contrôlée', 'is_correct' => true],
                            ['text' => 'Un générateur de charge réel', 'is_correct' => false],
                            ['text' => 'Un test de contrat entre services déployés', 'is_correct' => false],
                            ['text' => 'Un outil de restauration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un test vérifie que le service appelle un transport avec le bon destinataire. Quel rôle du double est utilisé ?',
                        'marks' => 1,
                        'explanation' => 'Un double peut aussi vérifier des interactions ; les noms exacts des outils varient selon les bibliothèques.',
                        'choices' => [
                            ['text' => 'La vérification d’une interaction attendue', 'is_correct' => true],
                            ['text' => 'La mesure du débit en production', 'is_correct' => false],
                            ['text' => 'Le stockage durable d’un courriel réel', 'is_correct' => false],
                            ['text' => 'La validation par l’utilisateur final', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un consommateur attend un champ que le fournisseur d’API vient de retirer. Quel contrôle automatique vise cette incompatibilité ?',
                        'marks' => 1,
                        'explanation' => 'Les tests de contrat vérifient que les échanges restent compatibles avec les attentes déclarées.',
                        'choices' => [
                            ['text' => 'Un test de contrat fournisseur-consommateur', 'is_correct' => true],
                            ['text' => 'Un test de style du fournisseur', 'is_correct' => false],
                            ['text' => 'Une mesure du taux de couverture seul', 'is_correct' => false],
                            ['text' => 'Un test unitaire du calcul de remise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une suite teste les méthodes privées et casse après un déplacement interne sans effet public. Quelle réorientation améliore sa robustesse ?',
                        'marks' => 1,
                        'explanation' => 'Des tests centrés sur le contrat tolèrent mieux les refactorisations qui préservent le comportement.',
                        'choices' => [
                            ['text' => 'Vérifier les comportements observables au niveau du contrat', 'is_correct' => true],
                            ['text' => 'Vérifier le nom de toutes les variables locales', 'is_correct' => false],
                            ['text' => 'Retirer les assertions sur les résultats', 'is_correct' => false],
                            ['text' => 'Figer chaque détail d’implémentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe génère de nombreuses listes et vérifie qu’un tri conserve leurs éléments. Quelle approche met-elle en œuvre ?',
                        'marks' => 1,
                        'explanation' => 'Les tests de propriétés explorent des données générées en vérifiant une règle générale, sans garantir l’exhaustivité.',
                        'choices' => [
                            ['text' => 'Des tests fondés sur des propriétés', 'is_correct' => true],
                            ['text' => 'Une preuve exhaustive de toutes les listes possibles', 'is_correct' => false],
                            ['text' => 'Un test de charge uniquement', 'is_correct' => false],
                            ['text' => 'Une revue manuelle des entrées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une modification artificielle du code n’est détectée par aucun test. Quelle investigation est pertinente ?',
                        'marks' => 1,
                        'explanation' => 'Un mutant survivant peut révéler une lacune, mais certains mutants sont équivalents ou hors du comportement pertinent.',
                        'choices' => [
                            ['text' => 'Vérifier si le mutant change le comportement observable et si une assertion manque', 'is_correct' => true],
                            ['text' => 'Conclure que toute la suite est inutile', 'is_correct' => false],
                            ['text' => 'Ajouter systématiquement une assertion sur une variable privée', 'is_correct' => false],
                            ['text' => 'Considérer tout mutant survivant comme un défaut certain', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des tests partagent un compte modifié à chaque exécution parallèle. Quel remède répond directement à leur instabilité ?',
                        'marks' => 1,
                        'explanation' => 'L’isolation des données évite que les tests modifient les préconditions des autres.',
                        'choices' => [
                            ['text' => 'Fournir des données isolées ou un mécanisme de réinitialisation fiable', 'is_correct' => true],
                            ['text' => 'Réessayer chaque test jusqu’au succès', 'is_correct' => false],
                            ['text' => 'Retirer les contrôles du compte', 'is_correct' => false],
                            ['text' => 'Imposer un délai aléatoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’équipe applique une pyramide de tests. Comment interpréter ce modèle ?',
                        'marks' => 1,
                        'explanation' => 'Le modèle aide à équilibrer rapidité et portée ; sa forme exacte dépend du produit et de son architecture.',
                        'choices' => [
                            ['text' => 'Une orientation à adapter aux coûts et aux risques', 'is_correct' => true],
                            ['text' => 'Comme une règle imposant le même pourcentage dans chaque projet', 'is_correct' => false],
                            ['text' => 'Comme l’interdiction de tout test de bout en bout', 'is_correct' => false],
                            ['text' => 'Comme une preuve que seuls les tests unitaires comptent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un test de charge utilise des réponses mises en cache alors que le trafic réel écrit surtout en base. Quel défaut limite ses conclusions ?',
                        'marks' => 1,
                        'explanation' => 'Un test de performance doit reproduire les opérations et contraintes qui déterminent le coût en situation réelle.',
                        'choices' => [
                            ['text' => 'Un scénario non représentatif de l’usage réel', 'is_correct' => true],
                            ['text' => 'Le nombre d’assertions est trop élevé', 'is_correct' => false],
                            ['text' => 'Les tests sont trop isolés', 'is_correct' => false],
                            ['text' => 'La base devrait être absente de tous les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une échéance réduit le temps disponible pour les vérifications. Quelle priorisation est raisonnable ?',
                        'marks' => 1,
                        'explanation' => 'La valeur d’un test dépend notamment de la probabilité et de la gravité du défaut qu’il peut révéler.',
                        'choices' => [
                            ['text' => 'Les parcours aux conséquences les plus importantes', 'is_correct' => true],
                            ['text' => 'Tester uniquement les fonctions les plus courtes', 'is_correct' => false],
                            ['text' => 'Répartir le temps également sur chaque ligne de code', 'is_correct' => false],
                            ['text' => 'Choisir seulement les scénarios déjà stables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un nouveau calcul est comparé à une formule de référence indépendante sur des exemples connus. Quel rôle joue cette référence ?',
                        'marks' => 1,
                        'explanation' => 'L’oracle fournit un moyen de décider si le résultat observé est correct.',
                        'choices' => [
                            ['text' => 'Un oracle de test', 'is_correct' => true],
                            ['text' => 'Une donnée de journalisation', 'is_correct' => false],
                            ['text' => 'Une migration de schéma', 'is_correct' => false],
                            ['text' => 'Un moteur de déploiement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Réduire la dette sans casser le comportement',
                'description' => 'Préparer des transformations progressives et justifier leur priorité.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Un ancien module est mal compris et doit être restructuré. Quel premier filet de sécurité est utile ?',
                        'marks' => 1,
                        'explanation' => 'Des tests de caractérisation fixent ce que le système fait actuellement ; ils ne prouvent pas que chaque comportement historique est souhaitable.',
                        'choices' => [
                            ['text' => 'Des tests de caractérisation des comportements importants', 'is_correct' => true],
                            ['text' => 'Une réécriture complète avant toute observation', 'is_correct' => false],
                            ['text' => 'La suppression des cas particuliers non compris', 'is_correct' => false],
                            ['text' => 'Une nouvelle architecture sans comparaison des résultats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une refactorisation modifie aussi la règle de calcul et l’API publique. Quel risque méthodologique apparaît ?',
                        'marks' => 1,
                        'explanation' => 'Séparer les intentions facilite la revue, le diagnostic et la validation de chaque changement.',
                        'choices' => [
                            ['text' => 'La confusion entre restructuration et évolution fonctionnelle', 'is_correct' => true],
                            ['text' => 'Tout changement public est automatiquement une refactorisation pure', 'is_correct' => false],
                            ['text' => 'Les tests ne sont plus nécessaires', 'is_correct' => false],
                            ['text' => 'Le compilateur vérifie les exigences métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service ancien doit être remplacé sans bascule totale. Quelle stratégie est adaptée ?',
                        'marks' => 1,
                        'explanation' => 'Une migration progressive limite la portée de chaque étape et permet de comparer les comportements.',
                        'choices' => [
                            ['text' => 'Un remplacement progressif derrière une façade', 'is_correct' => true],
                            ['text' => 'Supprimer l’ancien service avant que le nouveau soit prêt', 'is_correct' => false],
                            ['text' => 'Maintenir deux écritures libres sans suivi', 'is_correct' => false],
                            ['text' => 'Changer toutes les intégrations simultanément', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un élément de dette technique doit être priorisé. Quelle fiche est la plus utile ?',
                        'marks' => 1,
                        'explanation' => 'Une dette actionnable relie un défaut technique à un coût ou à un risque réel.',
                        'choices' => [
                            ['text' => 'Un problème relié à ses effets, risques et coût de traitement', 'is_correct' => true],
                            ['text' => 'La seule phrase « code à nettoyer »', 'is_correct' => false],
                            ['text' => 'Une note fondée uniquement sur l’âge du fichier', 'is_correct' => false],
                            ['text' => 'Le nombre de lignes sans contexte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une solution provisoire est choisie pour tenir une échéance. Quelle pratique évite que le compromis soit oublié ?',
                        'marks' => 1,
                        'explanation' => 'Une dette assumée reste une décision à suivre, avec un contexte et des déclencheurs de traitement.',
                        'choices' => [
                            ['text' => 'Une décision tracée avec conditions de réexamen', 'is_correct' => true],
                            ['text' => 'Présenter la solution comme définitive', 'is_correct' => false],
                            ['text' => 'Éviter d’en parler dans les décisions', 'is_correct' => false],
                            ['text' => 'Créer un ticket sans propriétaire ni priorité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fonction semble morte, mais son nom figure dans une configuration chargée dynamiquement. Quelle conclusion est correcte ?',
                        'marks' => 1,
                        'explanation' => 'Les usages indirects doivent être vérifiés avant une suppression.',
                        'choices' => [
                            ['text' => 'L’absence d’appel statique ne suffit pas à prouver qu’elle est inutilisée', 'is_correct' => true],
                            ['text' => 'La configuration ne peut jamais appeler du code', 'is_correct' => false],
                            ['text' => 'La date du fichier suffit à décider', 'is_correct' => false],
                            ['text' => 'Un test de formatage prouve qu’elle peut disparaître', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux blocs se ressemblent mais répondent à des règles métier qui évoluent séparément. Quelle décision est la plus prudente ?',
                        'marks' => 1,
                        'explanation' => 'La ressemblance syntaxique ne justifie pas toujours une abstraction commune ; une fusion peut coupler des règles indépendantes.',
                        'choices' => [
                            ['text' => 'Vérifier qu’ils portent réellement la même connaissance', 'is_correct' => true],
                            ['text' => 'Les fusionner uniquement parce que leur texte est similaire', 'is_correct' => false],
                            ['text' => 'Les rendre globaux dans tous les cas', 'is_correct' => false],
                            ['text' => 'Supprimer l’un des comportements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une restructuration de grande taille ne fonctionne qu’à la fin de plusieurs semaines. Quelle méthode réduit le risque ?',
                        'marks' => 1,
                        'explanation' => 'Des étapes limitées facilitent le diagnostic, la revue et le retour arrière.',
                        'choices' => [
                            ['text' => 'Des transformations petites et vérifiées', 'is_correct' => true],
                            ['text' => 'Désactiver les tests pendant toute la période', 'is_correct' => false],
                            ['text' => 'Regrouper tous les changements en un commit final', 'is_correct' => false],
                            ['text' => 'Changer simultanément toutes les dépendances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un tableau de bord utilise la complexité cyclomatique pour juger la maintenabilité. Quelle interprétation est raisonnable ?',
                        'marks' => 1,
                        'explanation' => 'Les métriques indiquent des zones à étudier ; elles ne résument pas à elles seules la qualité du système.',
                        'choices' => [
                            ['text' => 'C’est un signal à examiner avec le contexte, les changements et les tests', 'is_correct' => true],
                            ['text' => 'Un seuil unique prouve la mauvaise qualité de tout module', 'is_correct' => false],
                            ['text' => 'Une valeur faible garantit l’absence de défaut', 'is_correct' => false],
                            ['text' => 'La métrique remplace la lecture du code', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les mêmes fichiers provoquent souvent des régressions et exigent des changements coordonnés. Quelle analyse aide à choisir une amélioration ?',
                        'marks' => 1,
                        'explanation' => 'Les historiques de changements et les défauts peuvent révéler des frontières mal choisies ou des points de concentration.',
                        'choices' => [
                            ['text' => 'Les dépendances et les changements fréquemment coordonnés', 'is_correct' => true],
                            ['text' => 'Renommer tous les fichiers', 'is_correct' => false],
                            ['text' => 'Compter uniquement les auteurs des commits', 'is_correct' => false],
                            ['text' => 'Mesurer seulement la taille du dépôt', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Automatiser une livraison contrôlée',
                'description' => 'Promouvoir des versions identifiables et préserver sécurité et compatibilité.',
                'difficulty' => 'Intermediate',
                'duration' => 19,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'L’équipe reconstruit l’application séparément pour la recette et la production. Quel risque évite la promotion du même artefact immuable ?',
                        'marks' => 1,
                        'explanation' => 'Construire une fois puis promouvoir limite les différences de contenu ; la configuration d’environnement reste gérée séparément.',
                        'choices' => [
                            ['text' => 'Livrer un contenu différent de celui qui a été vérifié', 'is_correct' => true],
                            ['text' => 'Exécuter deux fois les mêmes tests unitaires', 'is_correct' => false],
                            ['text' => 'Donner un numéro de version au code', 'is_correct' => false],
                            ['text' => 'Conserver un historique de livraison', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une pipeline passe la majorité de son temps à attendre des tâches indépendantes. Quel changement peut réduire le retour sans supprimer de contrôle ?',
                        'marks' => 1,
                        'explanation' => 'Le parallélisme aide lorsque les tâches et leurs données ne se perturbent pas.',
                        'choices' => [
                            ['text' => 'Paralléliser les tâches réellement indépendantes', 'is_correct' => true],
                            ['text' => 'Fusionner sans attendre les résultats', 'is_correct' => false],
                            ['text' => 'Réduire arbitrairement les assertions', 'is_correct' => false],
                            ['text' => 'Ignorer les échecs lents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une configuration doit contenir une clé API réelle. Quel stockage est préférable ?',
                        'marks' => 1,
                        'explanation' => 'Les secrets nécessitent un accès et un cycle de vie contrôlés ; l’encodage ne les rend pas confidentiels.',
                        'choices' => [
                            ['text' => 'Un mécanisme de secrets protégé, séparé du code versionné', 'is_correct' => true],
                            ['text' => 'Un fichier public encodé en Base64', 'is_correct' => false],
                            ['text' => 'Un commentaire dans le script de compilation', 'is_correct' => false],
                            ['text' => 'Une valeur intégrée à l’artefact distribué à tous', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une colonne doit être renommée pendant que deux versions du code coexistent. Quelle séquence réduit la rupture ?',
                        'marks' => 1,
                        'explanation' => 'Une évolution en phases permet aux versions successives de fonctionner durant la transition.',
                        'choices' => [
                            ['text' => 'Ajouter une structure compatible, migrer les usages puis retirer l’ancienne', 'is_correct' => true],
                            ['text' => 'Supprimer immédiatement l’ancienne colonne', 'is_correct' => false],
                            ['text' => 'Renommer sans examiner les lecteurs', 'is_correct' => false],
                            ['text' => 'Bloquer les tests jusqu’à la fin du déploiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application possède des sondes de disponibilité et de vivacité. Quel échec devrait surtout retirer une instance du trafic sans nécessairement la redémarrer ?',
                        'marks' => 1,
                        'explanation' => 'La disponibilité pour le trafic et la capacité du processus à fonctionner sont deux signaux distincts ; redémarrer ne résout pas tout défaut de dépendance.',
                        'choices' => [
                            ['text' => 'L’instance n’est pas prête à servir ses requêtes', 'is_correct' => true],
                            ['text' => 'Le processus est bloqué définitivement', 'is_correct' => false],
                            ['text' => 'Le système d’exploitation ne répond plus', 'is_correct' => false],
                            ['text' => 'Le processus a été arrêté', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une API stable suit SemVer et retire une opération publique utilisée. Quel changement de version correspond à cette rupture ?',
                        'marks' => 1,
                        'explanation' => 'Selon SemVer, une modification incompatible d’une API publique stable exige une version majeure.',
                        'choices' => [
                            ['text' => 'Une nouvelle version majeure', 'is_correct' => true],
                            ['text' => 'Une simple version corrective', 'is_correct' => false],
                            ['text' => 'Un changement de métadonnées de compilation seulement', 'is_correct' => false],
                            ['text' => 'Aucun changement si le code compile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un déploiement canari accroît le taux d’erreur au-delà du seuil convenu. Quelle réaction est prévue par une stratégie saine ?',
                        'marks' => 1,
                        'explanation' => 'Une progression doit être conditionnée à des résultats observés et à des règles d’arrêt établies.',
                        'choices' => [
                            ['text' => 'Suspendre l’élargissement et appliquer le plan de repli', 'is_correct' => true],
                            ['text' => 'Augmenter l’exposition pour obtenir plus d’erreurs', 'is_correct' => false],
                            ['text' => 'Désactiver l’alerte pour terminer', 'is_correct' => false],
                            ['text' => 'Modifier le seuil après coup sans analyse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un artefact est signé par une source de confiance. Quelle garantie la vérification apporte-t-elle principalement ?',
                        'marks' => 1,
                        'explanation' => 'Une signature valide ne remplace pas les analyses de sécurité, les tests ni l’évaluation de confiance de la source.',
                        'choices' => [
                            ['text' => 'Son origine et son intégrité selon la confiance accordée', 'is_correct' => true],
                            ['text' => 'L’absence de toute vulnérabilité', 'is_correct' => false],
                            ['text' => 'La justesse de toutes les règles métier', 'is_correct' => false],
                            ['text' => 'La capacité à supporter toute charge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’infrastructure déclarée diffère de celle modifiée manuellement en production. Quel phénomène doit être traité ?',
                        'marks' => 1,
                        'explanation' => 'Les écarts entre état déclaré et réel compromettent la reproductibilité et doivent être détectés et réconciliés.',
                        'choices' => [
                            ['text' => 'Une dérive de configuration', 'is_correct' => true],
                            ['text' => 'Une refactorisation de code', 'is_correct' => false],
                            ['text' => 'Une rupture de contrat utilisateur', 'is_correct' => false],
                            ['text' => 'Une couverture de tests accrue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une dépendance contient une vulnérabilité annoncée. Quelle démarche est appropriée ?',
                        'marks' => 1,
                        'explanation' => 'L’évaluation guide l’urgence et la réponse ; elle ne justifie pas de laisser le risque sans traitement.',
                        'choices' => [
                            ['text' => 'Une analyse d’exposition suivie d’une réponse priorisée', 'is_correct' => true],
                            ['text' => 'Ignorer l’annonce si l’application démarre', 'is_correct' => false],
                            ['text' => 'Mettre toutes les dépendances à jour sans vérifier la compatibilité', 'is_correct' => false],
                            ['text' => 'Supprimer l’authentification pour isoler le problème', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une route est authentifiée, mais chaque client peut demander le dossier d’un autre. Quel contrôle manque ?',
                        'marks' => 1,
                        'explanation' => 'L’identité de l’acteur ne prouve pas son droit sur chaque objet.',
                        'choices' => [
                            ['text' => 'L’autorisation sur le dossier demandé', 'is_correct' => true],
                            ['text' => 'Le chiffrement du mot de passe en entrée', 'is_correct' => false],
                            ['text' => 'Le contrôle de la longueur de l’identifiant seulement', 'is_correct' => false],
                            ['text' => 'Le mécanisme de compilation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le compte applicatif possède des droits d’administration inutiles sur la base. Quelle réduction limite les conséquences d’un compromis ?',
                        'marks' => 1,
                        'explanation' => 'Le moindre privilège réduit la portée d’une erreur ou d’un accès abusif.',
                        'choices' => [
                            ['text' => 'Accorder uniquement les opérations nécessaires au service', 'is_correct' => true],
                            ['text' => 'Partager le compte administrateur entre tous les services', 'is_correct' => false],
                            ['text' => 'Désactiver les traces d’administration', 'is_correct' => false],
                            ['text' => 'Allonger le mot de passe sans réduire les droits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un script de déploiement peut être interrompu après une étape réussie. Quelle propriété facilite une relance maîtrisée ?',
                        'marks' => 1,
                        'explanation' => 'Des étapes idempotentes et un état observable permettent de reprendre une exécution partielle sans répéter aveuglément les effets.',
                        'choices' => [
                            ['text' => 'Des étapes répétables et un état de reprise observable', 'is_correct' => true],
                            ['text' => 'Une nouvelle insertion systématique à chaque relance', 'is_correct' => false],
                            ['text' => 'La suppression de tout historique d’exécution', 'is_correct' => false],
                            ['text' => 'Une relance supposée réussir sans vérifier les étapes précédentes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Observer les performances et les échecs',
                'description' => 'Interpréter les mesures et choisir des protections proportionnées.',
                'difficulty' => 'Intermediate',
                'duration' => 16,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'La moyenne de latence reste faible mais certains utilisateurs attendent longtemps. Quelle mesure complète utilement la moyenne ?',
                        'marks' => 1,
                        'explanation' => 'Les percentiles élevés rendent visible la queue de la distribution que la moyenne peut masquer.',
                        'choices' => [
                            ['text' => 'Un percentile élevé tel que le p95 ou le p99', 'is_correct' => true],
                            ['text' => 'La seule taille maximale des réponses', 'is_correct' => false],
                            ['text' => 'Le seul taux de requêtes réussies', 'is_correct' => false],
                            ['text' => 'Le seul débit moyen', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service traite 600 demandes par seconde. Quelle grandeur cette valeur décrit-elle ?',
                        'marks' => 1,
                        'explanation' => 'Le débit mesure un volume de travail par unité de temps, tandis que la latence mesure une durée par opération.',
                        'choices' => [
                            ['text' => 'Le débit', 'is_correct' => true],
                            ['text' => 'La latence d’une demande', 'is_correct' => false],
                            ['text' => 'Le temps de restauration', 'is_correct' => false],
                            ['text' => 'Le taux d’erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une route est lente, mais la cause est inconnue. Quelle démarche précède une optimisation ciblée ?',
                        'marks' => 1,
                        'explanation' => 'Les mesures localisent le goulot et permettent de vérifier qu’un changement apporte un gain.',
                        'choices' => [
                            ['text' => 'Profiler le parcours sur une charge représentative', 'is_correct' => true],
                            ['text' => 'Ajouter un cache à chaque fonction', 'is_correct' => false],
                            ['text' => 'Réécrire tous les modules', 'is_correct' => false],
                            ['text' => 'Augmenter chaque délai d’attente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une mise à jour est visible en base mais pas dans le cache. Quel mécanisme faut-il examiner ?',
                        'marks' => 1,
                        'explanation' => 'La cohérence d’un cache dépend du lien entre les écritures et les valeurs conservées.',
                        'choices' => [
                            ['text' => 'L’invalidation ou l’actualisation de la clé concernée', 'is_correct' => true],
                            ['text' => 'Le tri des résultats sans rafraîchir les entrées', 'is_correct' => false],
                            ['text' => 'La mise en forme JSON des anciennes valeurs', 'is_correct' => false],
                            ['text' => 'L’ajout d’un cache local sans politique d’actualisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une dépendance distante tombe souvent en panne. Quel mécanisme cesse temporairement de l’appeler après des échecs répétés ?',
                        'marks' => 1,
                        'explanation' => 'Un coupe-circuit protège les ressources en suspendant des appels susceptibles d’échouer, puis autorise des essais contrôlés.',
                        'choices' => [
                            ['text' => 'Un coupe-circuit', 'is_correct' => true],
                            ['text' => 'Une simple journalisation', 'is_correct' => false],
                            ['text' => 'Un tri des demandes', 'is_correct' => false],
                            ['text' => 'Une augmentation automatique du quota', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un parcours dispose d’une seconde au total et appelle plusieurs services. Comment choisir ses délais d’attente ?',
                        'marks' => 1,
                        'explanation' => 'Des délais locaux indépendants peuvent dépasser l’objectif global ; le budget doit couvrir tout le parcours.',
                        'choices' => [
                            ['text' => 'Les répartir en tenant compte du budget de bout en bout', 'is_correct' => true],
                            ['text' => 'Donner une seconde entière à chaque appel successif', 'is_correct' => false],
                            ['text' => 'Ne limiter que le dernier appel', 'is_correct' => false],
                            ['text' => 'Retirer les délais sur les nouvelles tentatives', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les journaux de trois services contiennent des événements d’une même requête. Quel élément facilite leur rapprochement ?',
                        'marks' => 1,
                        'explanation' => 'La corrélation permet de relier les étapes d’un même traitement sans recopier de données sensibles.',
                        'choices' => [
                            ['text' => 'Un identifiant de corrélation propagé', 'is_correct' => true],
                            ['text' => 'Un identifiant différent créé à chaque ligne', 'is_correct' => false],
                            ['text' => 'Le mot de passe de l’utilisateur', 'is_correct' => false],
                            ['text' => 'Un texte sans horodatage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une reprise réseau répète parfois une opération de facturation. Quelle condition rend les tentatives plus sûres ?',
                        'marks' => 1,
                        'explanation' => 'Les reprises doivent éviter les effets dupliqués et ne pas amplifier la charge sans limite.',
                        'choices' => [
                            ['text' => 'Une opération idempotente ou une déduplication durable, avec des reprises bornées', 'is_correct' => true],
                            ['text' => 'Une boucle de reprises illimitée', 'is_correct' => false],
                            ['text' => 'Un délai plus court après chaque échec', 'is_correct' => false],
                            ['text' => 'Une clé différente à chaque reprise de la même demande', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une alerte sonne dès qu’un cœur CPU dépasse un seuil, sans effet utilisateur connu. Quelle amélioration réduit le bruit ?',
                        'marks' => 1,
                        'explanation' => 'Une alerte utile indique une situation nécessitant une intervention, plutôt qu’un événement technique isolé sans conséquence établie.',
                        'choices' => [
                            ['text' => 'Une alerte liée à un symptôme et à une action utiles', 'is_correct' => true],
                            ['text' => 'Déclencher davantage d’alertes sur le même cœur', 'is_correct' => false],
                            ['text' => 'Retirer toute observation de latence', 'is_correct' => false],
                            ['text' => 'Envoyer chaque ligne de log à toute l’équipe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un incident est résolu mais aucune suite n’est suivie. Quelle pratique transforme l’analyse en amélioration ?',
                        'marks' => 1,
                        'explanation' => 'Une analyse factuelle produit de la valeur lorsque les mesures décidées sont réalisées et évaluées.',
                        'choices' => [
                            ['text' => 'Des actions attribuées et suivies', 'is_correct' => true],
                            ['text' => 'Une liste de constats sans décision', 'is_correct' => false],
                            ['text' => 'Une recherche de faute individuelle avant les faits', 'is_correct' => false],
                            ['text' => 'La suppression des journaux de l’incident', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une sonde légère répond alors que le chemin métier principal échoue. Quelle conclusion est correcte ?',
                        'marks' => 1,
                        'explanation' => 'Les sondes et la surveillance des parcours couvrent des aspects différents de l’état du service.',
                        'choices' => [
                            ['text' => 'La sonde ne suffit pas à démontrer le bon fonctionnement du service rendu', 'is_correct' => true],
                            ['text' => 'Toute sonde réussie prouve la disponibilité de tous les parcours', 'is_correct' => false],
                            ['text' => 'Le problème vient nécessairement du client', 'is_correct' => false],
                            ['text' => 'La mesure du taux d’erreur devient inutile', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        $legacyTitles = [
            'Architecture et Design',
            'Design Patterns',
            'Testing Strategy',
            'Requirements Engineering',
            'Refactoring & Technical Debt',
            'CI/CD & DevOps',
            'Performance & Reliability',
            'Security Engineering',
        ];

        DB::transaction(function () use ($subject, $quizzes, $legacyTitles): void {
            foreach ($quizzes as $quizData) {
                $questionCount = count($quizData['questions']);
                $totalMarks = array_sum(array_column($quizData['questions'], 'marks'));

                $quiz = Quiz::updateOrCreate(
                    [
                        'subject_id' => $subject->id,
                        'title' => $quizData['title'],
                    ],
                    [
                        'owner_id' => null,
                        'description' => $quizData['description'],
                        'difficulty' => $quizData['difficulty'],
                        'duration' => $quizData['duration'],
                        'passing_score' => $quizData['passing_score'],
                        'total_marks' => $totalMarks,
                        'is_active' => true,
                    ]
                );

                foreach ($quizData['questions'] as $index => $questionData) {
                    $question = $quiz->questions()->updateOrCreate(
                        ['order' => $index + 1],
                        [
                            'question' => $questionData['question'],
                            'type' => 'multiple_choice',
                            'marks' => $questionData['marks'],
                            'explanation' => $questionData['explanation'],
                        ]
                    );

                    $question->choices()->delete();

                    // Le frontend gère le mélange des choix et des questions.
                    foreach ($questionData['choices'] as $choiceIndex => $choiceData) {
                        $question->choices()->create([
                            'choice_text' => $choiceData['text'],
                            'is_correct' => $choiceData['is_correct'],
                            'order' => $choiceIndex + 1,
                        ]);
                    }
                }

                $quiz->questions()->where('order', '>', $questionCount)->delete();
            }

            // Les anciens quiz restent conservés mais ne doublonnent plus le catalogue actif.
            Quiz::where('subject_id', $subject->id)
                ->whereNull('owner_id')
                ->whereIn('title', $legacyTitles)
                ->whereNotIn('title', array_column($quizzes, 'title'))
                ->update(['is_active' => false]);
        });
    }
}
