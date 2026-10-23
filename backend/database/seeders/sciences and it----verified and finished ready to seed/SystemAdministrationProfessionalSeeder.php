<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemAdministrationProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'system-administration')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Concevoir et faire évoluer un parc à grande échelle',
                'description' => 'Arbitrer les standards, les dépendances et les domaines de panne d’une infrastructure.',
                'difficulty' => 'Professional',
                'duration' => 27,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Un inventaire contient des adresses IP mais aucun propriétaire ni niveau de criticité. Quel enrichissement rend les décisions d’exploitation plus fiables ?',
                        'marks' => 1,
                        'explanation' => 'Un inventaire utile décrit aussi le contexte de service et le cycle de vie ; la présence technique seule ne suffit pas à prioriser un changement.',
                        'choices' => [
                            ['text' => 'Rôle, responsable, criticité et dépendances', 'is_correct' => true],
                            ['text' => 'La seule adresse IP complétée par le dernier ping', 'is_correct' => false],
                            ['text' => 'La seule version du système sans contexte de service', 'is_correct' => false],
                            ['text' => 'Le modèle matériel sans attribution opérationnelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application indispensable dépend d’un OS hors support et ne peut pas être migrée immédiatement. Quel plan est défendable ?',
                        'marks' => 1,
                        'explanation' => 'Une contrainte réelle peut nécessiter des mesures compensatoires temporaires, mais le risque, la responsabilité et la sortie doivent rester explicites.',
                        'choices' => [
                            ['text' => 'Une réduction d’exposition et une sortie planifiée', 'is_correct' => true],
                            ['text' => 'Une exception sans échéance parce que l’application est utile', 'is_correct' => false],
                            ['text' => 'Une migration immédiate sans essai de compatibilité', 'is_correct' => false],
                            ['text' => 'Un simple changement de la bannière de version', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une image de référence validée sert à créer les serveurs du parc. Quel cycle maintient sa valeur ?',
                        'marks' => 1,
                        'explanation' => 'Une image de référence nécessite un cycle de maintenance, une provenance et un déploiement effectif ; elle n’est pas saine pour toujours.',
                        'choices' => [
                            ['text' => 'Un cycle de construction, vérification et renouvellement', 'is_correct' => true],
                            ['text' => 'Des corrections manuelles jamais réintégrées à l’image', 'is_correct' => false],
                            ['text' => 'Une réutilisation inchangée après validation initiale', 'is_correct' => false],
                            ['text' => 'Une nouvelle image appliquée sans vérifier ses consommateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des serveurs web, bases et bastions reçoivent la même configuration sans tenir compte de leur rôle. Quelle standardisation est plus pertinente ?',
                        'marks' => 1,
                        'explanation' => 'Les standards doivent couvrir les exigences communes tout en respectant les besoins et surfaces d’exposition spécifiques.',
                        'choices' => [
                            ['text' => 'Un socle et des profils contrôlés par rôle', 'is_correct' => true],
                            ['text' => 'Une ouverture identique de tous les ports partout', 'is_correct' => false],
                            ['text' => 'Une configuration manuelle sans référence pour chaque hôte', 'is_correct' => false],
                            ['text' => 'Un profil unique administrateur pour toute ressource', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quatre serveurs applicatifs résident dans des racks différents mais dépendent d’une seule baie de stockage. Quelle faiblesse demeure ?',
                        'marks' => 1,
                        'explanation' => 'La résilience se juge sur les dépendances et domaines de panne réels, pas seulement sur le nombre de serveurs.',
                        'choices' => [
                            ['text' => 'Une dépendance de stockage commune', 'is_correct' => true],
                            ['text' => 'Une redondance complète de toute la chaîne', 'is_correct' => false],
                            ['text' => 'L’impossibilité de toute panne électrique', 'is_correct' => false],
                            ['text' => 'Une isolation garantie par le nombre de racks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un service hybride possède une copie de données distante mais dépend du DNS et de l’identité du site principal. Que doit tester la reprise ?',
                        'marks' => 1,
                        'explanation' => 'Le service ne peut pas être repris si ses dépendances d’accès, de résolution ou d’identité restent perdues avec le site source.',
                        'choices' => [
                            ['text' => 'Les dépendances autonomes de reprise', 'is_correct' => true],
                            ['text' => 'La seule ouverture du fichier sauvegardé', 'is_correct' => false],
                            ['text' => 'Le nombre d’instances créées dans le cloud', 'is_correct' => false],
                            ['text' => 'Le nom du fournisseur distant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un serveur est retiré du parc. Quel traitement évite des actifs oubliés et des accès résiduels ?',
                        'marks' => 1,
                        'explanation' => 'Le retrait concerne aussi DNS, certificats, comptes, supervision, copies et responsabilités selon le rôle de la machine.',
                        'choices' => [
                            ['text' => 'Une clôture des accès, données et références', 'is_correct' => true],
                            ['text' => 'Supprimer la VM sans révoquer ses identités', 'is_correct' => false],
                            ['text' => 'Retirer la supervision mais laisser les références actives', 'is_correct' => false],
                            ['text' => 'Réattribuer son identité sans examiner les anciens accès', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des instances temporaires sont supprimées chaque jour. Quelle conception protège à la fois données et identités ?',
                        'marks' => 1,
                        'explanation' => 'Le cycle de vie éphémère demande une persistance explicite et des identités adaptées, sans multiplier des secrets permanents identiques.',
                        'choices' => [
                            ['text' => 'Des données séparées et des identités adaptées', 'is_correct' => true],
                            ['text' => 'Intégrer une clé privée partagée et permanente à toutes les images', 'is_correct' => false],
                            ['text' => 'Conserver les seules données dans la couche locale jetable', 'is_correct' => false],
                            ['text' => 'Réutiliser le compte personnel d’un opérateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fournisseur garantit un export des fichiers mais pas des clés nécessaires à leur déchiffrement. Quel point doit être testé dans la stratégie de sortie ?',
                        'marks' => 1,
                        'explanation' => 'Une sortie n’est utile que si les données peuvent réellement être relues et réutilisées dans le contexte cible.',
                        'choices' => [
                            ['text' => 'Un export réellement exploitable et déchiffrable', 'is_correct' => true],
                            ['text' => 'La seule réussite du téléchargement des fichiers', 'is_correct' => false],
                            ['text' => 'La seule compatibilité annoncée du format', 'is_correct' => false],
                            ['text' => 'Le seul engagement contractuel sans essai de récupération', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quatre instances identiques utilisent chacune 45 % de leur capacité. Une est en maintenance puis une autre tombe ; la charge totale reste identique et se répartit sur les deux restantes. Quel taux atteint chacune ?',
                        'marks' => 2,
                        'explanation' => 'La charge totale vaut 4 × 45 % = 180 % d’une instance ; divisée entre deux instances, elle représente 90 % chacune, hors surcoûts.',
                        'choices' => [
                            ['text' => '90 %', 'is_correct' => true],
                            ['text' => '45 %', 'is_correct' => false],
                            ['text' => '60 %', 'is_correct' => false],
                            ['text' => '67,5 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La consommation moyenne d’une VM est faible mais ses pointes mémoire provoquent déjà des échecs. Quel arbitrage de dimensionnement est raisonnable ?',
                        'marks' => 1,
                        'explanation' => 'Le dimensionnement doit considérer les ressources limitantes, leur variabilité et le délai réel de réaction, pas seulement une moyenne peu représentative.',
                        'choices' => [
                            ['text' => 'Dimensionner selon contraintes, pointes et marges', 'is_correct' => true],
                            ['text' => 'Réduire à partir de la moyenne CPU seule', 'is_correct' => false],
                            ['text' => 'Diviser automatiquement la RAM de toutes les VM', 'is_correct' => false],
                            ['text' => 'Supposer que l’autoscaling corrige toute pointe instantanément', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Maîtriser les identités et privilèges d’exploitation',
                'description' => 'Gérer les accès humains et machines dans les scénarios normaux et dégradés.',
                'difficulty' => 'Professional',
                'duration' => 24,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Un compte humain est bloqué dans l’annuaire, mais des sessions et clés déjà actives peuvent subsister. Quelle vérification complète le retrait ?',
                        'marks' => 1,
                        'explanation' => 'Le retrait doit couvrir le cycle de vie effectif des justificatifs et sessions, pas uniquement les futures authentifications à l’annuaire.',
                        'choices' => [
                            ['text' => 'Les sessions et justificatifs dérivés encore valides', 'is_correct' => true],
                            ['text' => 'Considérer tout accès comme instantanément terminé partout', 'is_correct' => false],
                            ['text' => 'Changer uniquement le nom affiché du compte', 'is_correct' => false],
                            ['text' => 'Supprimer la fiche de l’utilisateur dans l’inventaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’accès d’urgence dépend du même fournisseur d’identité que le service à restaurer. Quelle capacité doit être prévue ?',
                        'marks' => 1,
                        'explanation' => 'Le secours doit rester utilisable dans le scénario de panne prévu tout en conservant un contrôle strict de ses usages.',
                        'choices' => [
                            ['text' => 'Un secours protégé, auditable et exercé', 'is_correct' => true],
                            ['text' => 'Un secours dépendant du même composant indisponible', 'is_correct' => false],
                            ['text' => 'Un compte permanent partagé sans attribution de ses usages', 'is_correct' => false],
                            ['text' => 'Un document sans moyen d’authentification utilisable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une flotte utilise des certificats SSH de courte durée. Quelle affirmation sur le retrait d’un accès est correcte ?',
                        'marks' => 1,
                        'explanation' => 'Les certificats encadrent l’authentification ; la gestion des sessions, de la confiance et des révocations doit être conçue séparément selon les capacités disponibles.',
                        'choices' => [
                            ['text' => 'La courte durée ne clôt pas toutes les sessions', 'is_correct' => true],
                            ['text' => 'Toute session existante s’arrête automatiquement dès la fin du certificat', 'is_correct' => false],
                            ['text' => 'La courte durée supprime le besoin de contrôler l’autorité de signature', 'is_correct' => false],
                            ['text' => 'Les certificats rendent les comptes locaux inutiles dans tous les cas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des tâches de production utilisent les justificatifs personnels d’un administrateur. Quelle évolution réduit le couplage à cette personne ?',
                        'marks' => 1,
                        'explanation' => 'Une identité machine doit avoir un propriétaire opérationnel et un cycle de vie distinct des comptes humains.',
                        'choices' => [
                            ['text' => 'Des identités de service dédiées', 'is_correct' => true],
                            ['text' => 'Une copie de ses justificatifs sur davantage de postes', 'is_correct' => false],
                            ['text' => 'Un compte humain partagé entre tous les scripts', 'is_correct' => false],
                            ['text' => 'La conservation de son accès après son départ sans limite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les administrateurs de domaine ouvrent leurs sessions privilégiées sur des postes bureautiques ordinaires. Quel risque de chemin d’attaque faut-il réduire ?',
                        'marks' => 1,
                        'explanation' => 'L’administration privilégiée doit tenir compte de la confiance dans le poste et de la séparation des niveaux d’accès.',
                        'choices' => [
                            ['text' => 'Une exposition de privilèges sur des postes moins fiables', 'is_correct' => true],
                            ['text' => 'La disparition du besoin de journalisation', 'is_correct' => false],
                            ['text' => 'Une absence automatique de comptes locaux', 'is_correct' => false],
                            ['text' => 'Un risque limité aux performances d’affichage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le plan de reprise de l’annuaire exige un secret stocké uniquement dans cet annuaire. Quel défaut doit être corrigé ?',
                        'marks' => 1,
                        'explanation' => 'Les moyens de récupération doivent pouvoir être obtenus de façon sécurisée sans dépendre entièrement du composant perdu.',
                        'choices' => [
                            ['text' => 'Une dépendance circulaire de récupération', 'is_correct' => true],
                            ['text' => 'Une duplication excessive des noms de domaine', 'is_correct' => false],
                            ['text' => 'Une rotation trop fréquente des journaux', 'is_correct' => false],
                            ['text' => 'Une absence de port applicatif public', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une règle cloud destinée à un projet autorise en réalité des ressources de toute l’organisation. Quelle revue détecte ce dépassement ?',
                        'marks' => 1,
                        'explanation' => 'Le texte, l’héritage et les conditions de politique déterminent les droits réels ; son étiquette ne fait pas office de frontière.',
                        'choices' => [
                            ['text' => 'Les portées et héritages de la politique', 'is_correct' => true],
                            ['text' => 'Les permissions du seul projet sans examiner les héritages', 'is_correct' => false],
                            ['text' => 'L’appartenance aux groupes sans les ressources autorisées', 'is_correct' => false],
                            ['text' => 'La convention de nommage supposée limiter les droits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un rôle d’automatisation peut lire tous les secrets alors qu’il n’en utilise que deux. Quelle correction réduit l’impact d’un compromis ?',
                        'marks' => 1,
                        'explanation' => 'Les identités techniques ont aussi besoin du moindre privilège et d’un périmètre contrôlé.',
                        'choices' => [
                            ['text' => 'Réduire les ressources et opérations autorisées', 'is_correct' => true],
                            ['text' => 'Conserver l’accès général parce que le rôle est technique', 'is_correct' => false],
                            ['text' => 'Allonger seulement la description du rôle', 'is_correct' => false],
                            ['text' => 'Réutiliser le rôle pour toutes les équipes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une revue périodique reconduit tous les droits sans vérifier leur usage ni leur propriétaire. Quelle amélioration rend la revue utile ?',
                        'marks' => 1,
                        'explanation' => 'La recertification doit conduire à des décisions fondées sur les responsabilités et besoins actuels, pas à une reconduction automatique.',
                        'choices' => [
                            ['text' => 'Une confirmation attribuée et un traitement des écarts', 'is_correct' => true],
                            ['text' => 'Valider tous les droits plus rapidement', 'is_correct' => false],
                            ['text' => 'Retirer les journaux pour éviter les questions', 'is_correct' => false],
                            ['text' => 'Vérifier uniquement que les comptes ont un nom', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le renouvellement automatique des certificats réussit sur le serveur central, mais plusieurs points de terminaison restent anciens. Quelle gouvernance manque ?',
                        'marks' => 1,
                        'explanation' => 'Le cycle de vie inclut émission, distribution, chargement et contrôle sur les services qui présentent réellement l’identité.',
                        'choices' => [
                            ['text' => 'L’inventaire des consommateurs et des déploiements', 'is_correct' => true],
                            ['text' => 'Un contrôle du seul fichier du serveur central', 'is_correct' => false],
                            ['text' => 'Une mise à jour de la date de renouvellement prévue', 'is_correct' => false],
                            ['text' => 'Une création supplémentaire sans suivi des points de terminaison', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Encadrer l’Infrastructure as Code et les changements massifs',
                'description' => 'Limiter les effets d’une erreur sur l’état, les cibles et les accès de déploiement.',
                'difficulty' => 'Professional',
                'duration' => 28,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Un renommage de ressource IaC propose de supprimer puis recréer un stockage existant. Quelle analyse doit précéder toute application ?',
                        'marks' => 1,
                        'explanation' => 'Un nom logique peut influencer le suivi d’état ; il faut préserver les données et comprendre les mécanismes de déplacement ou d’import disponibles.',
                        'choices' => [
                            ['text' => 'Le lien d’état et la migration préservant les données', 'is_correct' => true],
                            ['text' => 'Accepter la destruction comme un simple changement de nom', 'is_correct' => false],
                            ['text' => 'Supprimer les sauvegardes pour accélérer le plan', 'is_correct' => false],
                            ['text' => 'Rejouer le même plan depuis plusieurs comptes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un état distant contient des données sensibles de production. Quelle organisation protège mieux sa confidentialité et sa reprise ?',
                        'marks' => 1,
                        'explanation' => 'L’état est un actif sensible et opérationnel ; ses contrôles doivent aussi prévoir restauration et continuité.',
                        'choices' => [
                            ['text' => 'Des accès, un chiffrement et une reprise contrôlés', 'is_correct' => true],
                            ['text' => 'Lecture publique parce que le code IaC est public', 'is_correct' => false],
                            ['text' => 'Un mot de passe partagé dans le dépôt', 'is_correct' => false],
                            ['text' => 'Une seule copie locale sur le poste d’un opérateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un verrou IaC paraît ancien. Quelle condition doit être établie avant de le supprimer de force ?',
                        'marks' => 1,
                        'explanation' => 'Retirer un verrou actif peut permettre des modifications concurrentes ; la procédure doit identifier l’exécution et la situation réelle.',
                        'choices' => [
                            ['text' => 'L’absence d’exécution légitime active', 'is_correct' => true],
                            ['text' => 'Se fier uniquement à l’âge affiché', 'is_correct' => false],
                            ['text' => 'Renommer le fichier d’état', 'is_correct' => false],
                            ['text' => 'Lancer une seconde application pour voir laquelle gagne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux outils imposent chacun des valeurs différentes au même paramètre système. Quel problème d’exploitation apparaît ?',
                        'marks' => 1,
                        'explanation' => 'Des contrôleurs contradictoires peuvent annuler leurs changements en boucle ; les responsabilités de configuration doivent être délimitées.',
                        'choices' => [
                            ['text' => 'Des sources d’état souhaité contradictoires', 'is_correct' => true],
                            ['text' => 'Une garantie de cohérence par double contrôle', 'is_correct' => false],
                            ['text' => 'Un simple défaut d’affichage sans effet', 'is_correct' => false],
                            ['text' => 'Une réplication de sauvegarde normale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un opérateur exécute terraform state rm sur une VM et pense que celle-ci est supprimée du cloud. Quel effet doit-il comprendre ?',
                        'marks' => 1,
                        'explanation' => 'terraform state rm retire une association de l’état sans détruire l’objet distant ; son devenir et sa gestion doivent ensuite être traités explicitement.',
                        'choices' => [
                            ['text' => 'Le lien disparaît, mais la VM reste présente', 'is_correct' => true],
                            ['text' => 'La VM est nécessairement détruite avec tous ses volumes', 'is_correct' => false],
                            ['text' => 'Le cloud arrête toujours la facturation immédiatement', 'is_correct' => false],
                            ['text' => 'La commande désactive tous les accès réseau de la VM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une vague de mise à jour peut toucher simultanément plusieurs nœuds d’une même zone. Quel calcul doit limiter son parallélisme ?',
                        'marks' => 1,
                        'explanation' => 'Les limites doivent respecter les dépendances, quorums et capacités de secours, pas seulement un plafond global de serveurs.',
                        'choices' => [
                            ['text' => 'La disponibilité par service et domaine de panne', 'is_correct' => true],
                            ['text' => 'Le nombre maximal de commandes par terminal seulement', 'is_correct' => false],
                            ['text' => 'Le nombre de personnes connectées à la console', 'is_correct' => false],
                            ['text' => 'La taille du paquet uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des instances doivent être remplacées sans couper les traitements en cours. Quelle étape précède le retrait d’une instance lorsqu’elle est prise en charge ?',
                        'marks' => 1,
                        'explanation' => 'Une vidange contrôlée du trafic et des tâches protège les opérations en cours ; son mécanisme dépend de la charge et du service.',
                        'choices' => [
                            ['text' => 'Une vidange bornée du trafic et des tâches', 'is_correct' => true],
                            ['text' => 'Effacer immédiatement ses fichiers de travail', 'is_correct' => false],
                            ['text' => 'Supprimer l’instance dès la création de sa remplaçante', 'is_correct' => false],
                            ['text' => 'Désactiver les vérifications de santé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une requête d’inventaire dynamique renvoie un groupe inattendu de machines critiques. Quel comportement de l’automatisation limite le risque ?',
                        'marks' => 1,
                        'explanation' => 'La résolution des cibles doit être vérifiable et échouer de façon sûre lorsque les hypothèses de périmètre ne sont pas respectées.',
                        'choices' => [
                            ['text' => 'Un refus hors périmètre validé', 'is_correct' => true],
                            ['text' => 'Appliquer le changement à toutes les machines retournées sans contrôle', 'is_correct' => false],
                            ['text' => 'Remplacer le groupe par toutes les machines connues', 'is_correct' => false],
                            ['text' => 'Ignorer les étiquettes de criticité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un parc isolé d’Internet doit recevoir des correctifs. Quelle chaîne est adaptée ?',
                        'marks' => 1,
                        'explanation' => 'L’isolement réseau ne supprime pas le besoin d’origine et de validation des paquets ; la chaîne de transfert devient un élément à contrôler.',
                        'choices' => [
                            ['text' => 'Un miroir approuvé et des transferts vérifiés', 'is_correct' => true],
                            ['text' => 'Des fichiers trouvés sur des supports inconnus', 'is_correct' => false],
                            ['text' => 'Une désactivation de la vérification des signatures', 'is_correct' => false],
                            ['text' => 'Une liste de versions sans conserver les paquets nécessaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La pipeline de test d’un module IaC possède les droits d’écriture sur l’état et les secrets de production. Quel cloisonnement faut-il examiner ?',
                        'marks' => 1,
                        'explanation' => 'Une étape de validation ne doit pas obtenir automatiquement le pouvoir de modifier ou lire toute la production.',
                        'choices' => [
                            ['text' => 'Des privilèges distincts pour validation et application', 'is_correct' => true],
                            ['text' => 'Donner les mêmes droits aux demandes externes', 'is_correct' => false],
                            ['text' => 'Publier les secrets dans les résultats de test', 'is_correct' => false],
                            ['text' => 'Retirer tout journal des applications de production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une bibliothèque de modules d’infrastructure change son comportement par défaut. Quelle diffusion évite des modifications surprises sur tous les consommateurs ?',
                        'marks' => 1,
                        'explanation' => 'Les modules réutilisés constituent des contrats opérationnels ; leurs changements doivent être prévisibles et vérifiables.',
                        'choices' => [
                            ['text' => 'Des versions et une migration explicites', 'is_correct' => true],
                            ['text' => 'Une référence mouvante non contrôlée partout', 'is_correct' => false],
                            ['text' => 'Un changement silencieux du même numéro de version', 'is_correct' => false],
                            ['text' => 'La suppression de tout historique de module', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un plan approuvé reste en attente plusieurs jours alors que l’infrastructure réelle change. Quelle vérification est nécessaire avant l’action ?',
                        'marks' => 1,
                        'explanation' => 'Un plan ne gèle pas les changements externes ; la validité de l’autorisation et de l’état doit être assurée dans la procédure.',
                        'choices' => [
                            ['text' => 'Revalider son applicabilité à l’état courant', 'is_correct' => true],
                            ['text' => 'Supposer qu’une approbation ancienne fige toutes les ressources', 'is_correct' => false],
                            ['text' => 'Retirer les mécanismes de verrouillage', 'is_correct' => false],
                            ['text' => 'Appliquer sans examiner les dépendances nouvelles', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Contenir une compromission et préparer une récupération fiable',
                'description' => 'Choisir les actions selon l’impact, les preuves et l’étendue du contrôle obtenu par l’attaquant.',
                'difficulty' => 'Professional',
                'duration' => 31,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Un chiffrement malveillant se propage activement entre serveurs. Quelle priorité est défendable selon le plan d’incident ?',
                        'marks' => 1,
                        'explanation' => 'La réduction de l’impact guide l’urgence ; collecte et conservation doivent être coordonnées sans laisser une propagation se poursuivre inutilement.',
                        'choices' => [
                            ['text' => 'Contenir avec conservation des preuves compatible avec l’urgence', 'is_correct' => true],
                            ['text' => 'Réinstaller au hasard tous les hôtes sans coordination', 'is_correct' => false],
                            ['text' => 'Continuer les accès partagés pour ne pas changer les habitudes', 'is_correct' => false],
                            ['text' => 'Supprimer tous les journaux avant toute action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une analyse a besoin d’éléments volatils, mais un arrêt immédiat est envisagé. Quelle décision doit être explicitée ?',
                        'marks' => 1,
                        'explanation' => 'L’arrêt peut détruire certains indices en mémoire ; la décision dépend de la situation et des moyens de confinement sûrs.',
                        'choices' => [
                            ['text' => 'L’arbitrage entre impact et données volatiles', 'is_correct' => true],
                            ['text' => 'Une règle universelle interdisant tout arrêt dans tous les cas', 'is_correct' => false],
                            ['text' => 'Une règle universelle imposant tout arrêt sans examen', 'is_correct' => false],
                            ['text' => 'La suppression des procédures de collecte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un hôte compromis peut altérer son heure et ses journaux locaux. Quel appui renforce la reconstruction des faits ?',
                        'marks' => 1,
                        'explanation' => 'Les sources externes et leur conservation permettent de corroborer ou contester les traces locales ; le contexte de collecte doit être préservé.',
                        'choices' => [
                            ['text' => 'Des sources indépendantes et une collecte documentée', 'is_correct' => true],
                            ['text' => 'Le seul fichier de log présent sur l’hôte', 'is_correct' => false],
                            ['text' => 'Les souvenirs non datés de l’opérateur', 'is_correct' => false],
                            ['text' => 'Une copie modifiable sans attribution de collecte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des justificatifs utilisés par l’hôte compromis existent sur d’autres systèmes. Quelle recherche est prioritaire ?',
                        'marks' => 1,
                        'explanation' => 'L’étendue peut dépasser le premier hôte ; les identités et dépendances aident à déterminer un périmètre d’investigation.',
                        'choices' => [
                            ['text' => 'L’investigation du périmètre accessible', 'is_correct' => true],
                            ['text' => 'Déclarer tous les autres hôtes sains parce qu’ils répondent au ping', 'is_correct' => false],
                            ['text' => 'Chercher seulement le même nom de fichier', 'is_correct' => false],
                            ['text' => 'Réduire l’enquête au premier serveur signalé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une restauration est prévue sur un réseau encore accessible avec des identités compromises. Quel risque doit être traité avant la remise en ligne ?',
                        'marks' => 1,
                        'explanation' => 'Restaurer des données ne nettoie pas automatiquement le réseau, les identités et les causes qui ont permis l’attaque.',
                        'choices' => [
                            ['text' => 'Une nouvelle compromission après restauration', 'is_correct' => true],
                            ['text' => 'Une correction automatique de tous les comptes', 'is_correct' => false],
                            ['text' => 'La disparition des vulnérabilités par copie des fichiers', 'is_correct' => false],
                            ['text' => 'Une isolation garantie par la date de sauvegarde', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un jeton d’automatisation capable d’agir sur tout le parc est volé. Quel périmètre de réponse est pertinent ?',
                        'marks' => 1,
                        'explanation' => 'Un justificatif à large portée peut donner accès à de nombreuses ressources ; la réponse doit suivre sa capacité réelle.',
                        'choices' => [
                            ['text' => 'Révoquer et examiner toute sa portée', 'is_correct' => true],
                            ['text' => 'Réinstaller uniquement le poste où le jeton a été trouvé', 'is_correct' => false],
                            ['text' => 'Changer le titre de la pipeline', 'is_correct' => false],
                            ['text' => 'Se fier à l’absence d’alerte sur une seule machine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une vulnérabilité exposée est exploitée et aucun correctif n’est encore disponible. Quelle réponse transitoire est défendable ?',
                        'marks' => 1,
                        'explanation' => 'Des compensations peuvent réduire le risque mais demandent une évaluation, une surveillance et une sortie vers une correction durable.',
                        'choices' => [
                            ['text' => 'Une réduction d’exposition vérifiée et suivie', 'is_correct' => true],
                            ['text' => 'Maintenir l’exposition sans responsable parce qu’aucun correctif n’existe', 'is_correct' => false],
                            ['text' => 'Masquer seulement le numéro de version affiché', 'is_correct' => false],
                            ['text' => 'Déclarer un filtrage périphérique comme preuve de correction complète', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un binaire suspect doit être analysé. Quelle manipulation initiale préserve mieux les indices ?',
                        'marks' => 1,
                        'explanation' => 'La collecte doit conserver intégrité et contexte ; l’analyse dynamique nécessite un environnement maîtrisé.',
                        'choices' => [
                            ['text' => 'Une collecte intègre sans exécution en production', 'is_correct' => true],
                            ['text' => 'L’exécuter sur un serveur d’administration privilégié', 'is_correct' => false],
                            ['text' => 'Modifier son contenu avant d’en conserver une référence', 'is_correct' => false],
                            ['text' => 'Transférer l’échantillon sans métadonnées ni contrôle d’accès', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un attaquant a obtenu root sur Linux. Quelle limite affecte un diagnostic fondé uniquement sur les outils locaux ?',
                        'marks' => 1,
                        'explanation' => 'Un contrôle étendu remet en cause la confiance dans la machine ; des sources et outils fiables hors de ce contexte peuvent être nécessaires.',
                        'choices' => [
                            ['text' => 'La confiance dans les outils locaux est remise en cause', 'is_correct' => true],
                            ['text' => 'Root ne peut jamais modifier un outil système', 'is_correct' => false],
                            ['text' => 'Une sortie ps vide prouve la propreté du serveur', 'is_correct' => false],
                            ['text' => 'Un antivirus local donne une preuve absolue d’intégrité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La clé privée d’un certificat de service est compromise. Quelle portée faut-il donner au renouvellement ?',
                        'marks' => 1,
                        'explanation' => 'Le traitement concerne la clé, les identités acceptées et le déploiement effectif ; les mécanismes de révocation et leur contrôle dépendent de l’écosystème.',
                        'choices' => [
                            ['text' => 'Un retrait coordonné de l’identité exposée', 'is_correct' => true],
                            ['text' => 'Renouveler le certificat en réutilisant la clé compromise', 'is_correct' => false],
                            ['text' => 'Créer une nouvelle clé sans retirer les anciennes copies actives', 'is_correct' => false],
                            ['text' => 'Traiter un seul point de terminaison sans inventaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un trafic hostile sature le même chemin que l’accès d’administration. Quelle protection améliore la capacité d’intervention ?',
                        'marks' => 1,
                        'explanation' => 'L’accès opérationnel doit rester utilisable dans les scénarios de saturation prévus sans ouvrir un chemin non contrôlé.',
                        'choices' => [
                            ['text' => 'Un chemin de gestion protégé et des secours', 'is_correct' => true],
                            ['text' => 'Une publication des mots de passe pour accélérer la connexion', 'is_correct' => false],
                            ['text' => 'Un quota illimité sur tout le trafic public', 'is_correct' => false],
                            ['text' => 'Une suppression de toutes les règles réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un runbook de nettoyage effacerait les journaux nécessaires à l’enquête. Quelle adaptation est appropriée si l’urgence le permet ?',
                        'marks' => 1,
                        'explanation' => 'Une procédure doit être adaptée au contexte d’incident ; les actions susceptibles de détruire des preuves exigent une décision explicite.',
                        'choices' => [
                            ['text' => 'Préserver les éléments utiles avant le nettoyage', 'is_correct' => true],
                            ['text' => 'Suivre aveuglément la suppression parce qu’elle est écrite', 'is_correct' => false],
                            ['text' => 'Désactiver toute conservation future', 'is_correct' => false],
                            ['text' => 'Changer les horodatages des copies', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fichier malveillant a été supprimé après une compromission étendue. Quelle preuve de récupération reste insuffisante ?',
                        'marks' => 1,
                        'explanation' => 'Un artefact supprimé ne prouve pas l’éradication des persistances ou modifications ; le niveau de confiance requis peut imposer une reconstruction.',
                        'choices' => [
                            ['text' => 'L’absence de ce seul fichier', 'is_correct' => true],
                            ['text' => 'Une reconstruction depuis des sources de confiance avec contrôles', 'is_correct' => false],
                            ['text' => 'Une analyse des comptes et mécanismes de persistance', 'is_correct' => false],
                            ['text' => 'Une validation des accès et services rétablis', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Dimensionner et éprouver la reprise d’activité',
                'description' => 'Vérifier fraîcheur des données, durée, indépendance des copies et fonctionnement restauré.',
                'difficulty' => 'Professional',
                'duration' => 34,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Le besoin métier fixe une perte maximale de quinze minutes, mais la seule sauvegarde est prise toutes les six heures. Quelle conclusion est correcte ?',
                        'marks' => 1,
                        'explanation' => 'L’ancienneté de la copie récupérable peut dépasser largement le seuil ; la fraîcheur et le délai de reprise sont deux objectifs distincts.',
                        'choices' => [
                            ['text' => 'Le RPO demandé n’est pas démontré', 'is_correct' => true],
                            ['text' => 'Le RPO est respecté si le serveur redémarre vite', 'is_correct' => false],
                            ['text' => 'Six heures de sauvegarde garantissent quinze minutes de perte', 'is_correct' => false],
                            ['text' => 'Le RPO ne concerne que la vitesse de copie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une restauration doit transférer 600 Gio à 100 Mio/s soutenus. Sans autre surcoût, quelle durée minimale représente le transfert ?',
                        'marks' => 2,
                        'explanation' => '600 Gio valent 614 400 Mio ; à 100 Mio/s, le transfert dure 6 144 secondes, soit 102,4 minutes.',
                        'choices' => [
                            ['text' => '102,4 minutes', 'is_correct' => true],
                            ['text' => '60 minutes', 'is_correct' => false],
                            ['text' => '6 minutes', 'is_correct' => false],
                            ['text' => '614,4 minutes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dix serveurs doivent être restaurés simultanément depuis le même dépôt. Quel test évite de surestimer leur vitesse ?',
                        'marks' => 1,
                        'explanation' => 'Des restaurations concurrentes partagent des ressources ; le débit observé seul ne se multiplie pas sans limite.',
                        'choices' => [
                            ['text' => 'Le débit agrégé et les limites partagées', 'is_correct' => true],
                            ['text' => 'Multiplier simplement le débit d’un essai isolé par dix', 'is_correct' => false],
                            ['text' => 'Supposer que chaque restauration dispose de tout le réseau', 'is_correct' => false],
                            ['text' => 'Vérifier seulement l’espace final', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La dernière sauvegarde immuable contient déjà des fichiers chiffrés par l’attaque. Quelle capacité devient déterminante ?',
                        'marks' => 1,
                        'explanation' => 'L’immuabilité protège une conservation, pas la validité initiale du contenu ; l’historique et la qualification des points restent nécessaires.',
                        'choices' => [
                            ['text' => 'Un point antérieur sain et cohérent', 'is_correct' => true],
                            ['text' => 'Supposer que l’immuabilité déchiffre le contenu', 'is_correct' => false],
                            ['text' => 'Restaurer toujours la copie la plus récente sans examen', 'is_correct' => false],
                            ['text' => 'Réduire la rétention des anciens points', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des sauvegardes historiques dépendent d’anciennes versions de clés, mais seules les clés actuelles sont conservées. Quelle règle de cycle de vie doit être revue ?',
                        'marks' => 1,
                        'explanation' => 'Le renouvellement des clés doit rester compatible avec la rétention et la restauration des données historiques ; les versions nécessaires doivent être protégées et testées.',
                        'choices' => [
                            ['text' => 'Les clés nécessaires aux copies conservées', 'is_correct' => true],
                            ['text' => 'Détruire toutes les anciennes clés dès le renouvellement', 'is_correct' => false],
                            ['text' => 'Supposer que toute clé neuve déchiffre les anciennes copies', 'is_correct' => false],
                            ['text' => 'Renommer les copies pour les lier à la clé actuelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les applications restaurées exigent DNS, identité et stockage avant de fonctionner. Quelle planification est nécessaire ?',
                        'marks' => 1,
                        'explanation' => 'Le rétablissement doit reconstruire une chaîne de service exploitable, pas seulement des hôtes isolés.',
                        'choices' => [
                            ['text' => 'Une reprise ordonnée par dépendances', 'is_correct' => true],
                            ['text' => 'Une mise sous tension aléatoire des machines', 'is_correct' => false],
                            ['text' => 'Une restauration de l’interface graphique seulement', 'is_correct' => false],
                            ['text' => 'Une séquence choisie uniquement par taille de VM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un exercice redémarre une copie d’un serveur avec les mêmes adresses et identités que la production. Quelle précaution réduit le risque de perturbation ?',
                        'marks' => 1,
                        'explanation' => 'Les clones peuvent entrer en conflit ou déclencher des effets réels ; l’environnement d’exercice doit maîtriser ces interactions.',
                        'choices' => [
                            ['text' => 'Une isolation réseau de test maîtrisée', 'is_correct' => true],
                            ['text' => 'Une connexion directe au réseau réel sans examen', 'is_correct' => false],
                            ['text' => 'Une suppression des journaux de production', 'is_correct' => false],
                            ['text' => 'Une modification du nom d’archive uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après restauration, les données locales sont anciennes mais des paiements ont été confirmés par un fournisseur. Quelle étape évite des effets incohérents ?',
                        'marks' => 1,
                        'explanation' => 'Les effets externes ne sont pas annulés par une restauration locale ; la réconciliation et les identifiants stables aident à éviter pertes ou doublons.',
                        'choices' => [
                            ['text' => 'Une réconciliation des effets externes', 'is_correct' => true],
                            ['text' => 'Réémettre tous les paiements avec de nouveaux identifiants', 'is_correct' => false],
                            ['text' => 'Supposer que la copie locale reflète tous les effets distants', 'is_correct' => false],
                            ['text' => 'Effacer les traces de paiement reçues', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le service source va être retiré et la conservation des copies doit encore couvrir des besoins définis. Quelle clôture est appropriée ?',
                        'marks' => 1,
                        'explanation' => 'Les copies historiques dépendent de formats, clés et procédures qui doivent survivre au retrait selon les besoins établis.',
                        'choices' => [
                            ['text' => 'Vérifier les dépendances des copies avant retrait', 'is_correct' => true],
                            ['text' => 'Supprimer les clés avec la VM source sans essai', 'is_correct' => false],
                            ['text' => 'Conserver des fichiers sans propriétaire ni documentation', 'is_correct' => false],
                            ['text' => 'Affirmer qu’une copie existante restera toujours exploitable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le même compte administrateur peut effacer données, snapshots et sauvegardes distantes. Quel domaine de risque reste partagé ?',
                        'marks' => 1,
                        'explanation' => 'La distance physique ne suffit pas si une seule identité peut détruire toutes les protections.',
                        'choices' => [
                            ['text' => 'Un pouvoir de destruction commun', 'is_correct' => true],
                            ['text' => 'Une indépendance complète due aux seuls noms de machines', 'is_correct' => false],
                            ['text' => 'Une absence de besoin de copie hors ligne', 'is_correct' => false],
                            ['text' => 'Une protection garantie par le chiffrement en transit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux équipes annoncent des RTO atteints mais démarrent leur chronomètre à des moments différents. Quelle définition doit être fixée ?',
                        'marks' => 1,
                        'explanation' => 'Des mesures comparables exigent des critères de début et de fin cohérents avec l’objectif de reprise annoncé.',
                        'choices' => [
                            ['text' => 'Des critères comparables de début et de fin', 'is_correct' => true],
                            ['text' => 'Le nom du tableau de bord seulement', 'is_correct' => false],
                            ['text' => 'La date de création des sauvegardes uniquement', 'is_correct' => false],
                            ['text' => 'Le nombre de comptes d’astreinte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le service couvre deux zones de disponibilité d’une même région, mais doit aussi supporter la perte de cette région. Quel écart doit être traité ?',
                        'marks' => 1,
                        'explanation' => 'La redondance entre zones ne couvre pas automatiquement un sinistre régional ; les copies et moyens de reprise doivent être conçus pour ce périmètre.',
                        'choices' => [
                            ['text' => 'Une reprise couvrant la perte régionale', 'is_correct' => true],
                            ['text' => 'La seule création d’une troisième VM dans la même zone', 'is_correct' => false],
                            ['text' => 'Une extension des droits d’accès publics', 'is_correct' => false],
                            ['text' => 'Une baisse de la durée des mots de passe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le site secondaire a reçu de nouvelles écritures après bascule. Quelle préparation est nécessaire avant de revenir au site initial ?',
                        'marks' => 1,
                        'explanation' => 'Le retour doit préserver les changements faits pendant le secours et garantir le rôle actif selon l’architecture.',
                        'choices' => [
                            ['text' => 'Réconcilier puis transférer le rôle sans double écriture', 'is_correct' => true],
                            ['text' => 'Réactiver immédiatement les deux sites en écriture', 'is_correct' => false],
                            ['text' => 'Restaurer l’ancienne copie par-dessus les nouvelles données sans décision', 'is_correct' => false],
                            ['text' => 'Déplacer seulement le nom DNS sans contrôler les écritures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un exercice respecte le temps de démarrage des VM mais aucun utilisateur ne peut accomplir le parcours prioritaire. Quel critère doit remplacer ce seul indicateur ?',
                        'marks' => 1,
                        'explanation' => 'La reprise attendue concerne un service utilisable ; le démarrage technique n’en constitue qu’une partie.',
                        'choices' => [
                            ['text' => 'Le service métier effectivement rétabli', 'is_correct' => true],
                            ['text' => 'La seule connexion à la console de l’hyperviseur', 'is_correct' => false],
                            ['text' => 'Le nombre de processus démarrés uniquement', 'is_correct' => false],
                            ['text' => 'La réussite d’un ping vers chaque VM uniquement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Prévoir la capacité et rendre les signaux interprétables',
                'description' => 'Calculer des marges et relier les mesures aux contraintes des ressources.',
                'difficulty' => 'Professional',
                'duration' => 26,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'En régime stable, 120 requêtes par seconde restent en moyenne 0,25 seconde dans un périmètre de service. Quel nombre moyen de requêtes y sont présentes selon la loi de Little ?',
                        'marks' => 2,
                        'explanation' => 'L = λ × W = 120 × 0,25 = 30, avec un périmètre et des unités cohérents en régime stable.',
                        'choices' => [
                            ['text' => '30', 'is_correct' => true],
                            ['text' => '480', 'is_correct' => false],
                            ['text' => '120', 'is_correct' => false],
                            ['text' => '0,0021', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un volume a 480 Gio libres. Une réserve de 80 Gio doit rester intacte et la croissance nette reste de 20 Gio par jour. Dans combien de jours cette réserve sera-t-elle atteinte ?',
                        'marks' => 2,
                        'explanation' => 'La marge consommable est 480 − 80 = 400 Gio ; à 20 Gio par jour, elle dure vingt jours si le rythme reste constant.',
                        'choices' => [
                            ['text' => '20 jours', 'is_correct' => true],
                            ['text' => '24 jours', 'is_correct' => false],
                            ['text' => '4 jours', 'is_correct' => false],
                            ['text' => '28 jours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des journaux arrivent à 5 Mio/s pendant vingt-quatre heures, sans compression ni autre surcoût. Quel volume approximatif est produit ?',
                        'marks' => 2,
                        'explanation' => '5 × 86 400 = 432 000 Mio ; divisés par 1 024, ils représentent 421,875 Gio.',
                        'choices' => [
                            ['text' => '421,9 Gio', 'is_correct' => true],
                            ['text' => '120 Gio', 'is_correct' => false],
                            ['text' => '43,2 Gio', 'is_correct' => false],
                            ['text' => '5 Gio', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une VM Linux voit augmenter son temps steal pendant des lenteurs, sans forte utilisation CPU interne. Quelle hypothèse mérite une vérification côté plateforme ?',
                        'marks' => 1,
                        'explanation' => 'Le temps steal reflète du temps où la VM n’a pas pu exécuter alors qu’elle attendait du CPU selon la virtualisation ; il faut examiner contention et quotas de la plateforme.',
                        'choices' => [
                            ['text' => 'Une contention CPU à examiner côté hyperviseur', 'is_correct' => true],
                            ['text' => 'Une suppression automatique des fichiers temporaires', 'is_correct' => false],
                            ['text' => 'Une résolution DNS locale forcément défaillante', 'is_correct' => false],
                            ['text' => 'Une permission NTFS héritée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un frontal atteint une limite de connexions et de descripteurs alors que le CPU reste disponible. Quel axe de capacité doit être étudié ?',
                        'marks' => 1,
                        'explanation' => 'Une autre ressource que le CPU peut limiter le débit ; limites système et application doivent être examinées avec leurs coûts réels.',
                        'choices' => [
                            ['text' => 'Les limites et coûts des connexions', 'is_correct' => true],
                            ['text' => 'Le nombre de cœurs seulement', 'is_correct' => false],
                            ['text' => 'La fréquence CPU seulement', 'is_correct' => false],
                            ['text' => 'La taille du cache disque sans examiner les connexions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une vue globale est saine, mais une région échoue sur presque toutes ses requêtes. Quel ajustement de supervision aide à voir cette dégradation ?',
                        'marks' => 1,
                        'explanation' => 'L’agrégation globale peut masquer un segment dégradé ; les dimensions doivent rester utiles et maîtrisées.',
                        'choices' => [
                            ['text' => 'Des indicateurs par périmètre opérationnel', 'is_correct' => true],
                            ['text' => 'Conserver seulement la moyenne mondiale', 'is_correct' => false],
                            ['text' => 'Ajouter des comptes à privilèges élevés', 'is_correct' => false],
                            ['text' => 'Réduire le nombre de sondes de cette région', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un certificat critique expire bientôt et son renouvellement échoue depuis plusieurs jours, sans panne actuelle. Quelle alerte est justifiée ?',
                        'marks' => 1,
                        'explanation' => 'Une alerte peut prévenir un impact prévisible si elle conduit à une action utile dans une fenêtre appropriée.',
                        'choices' => [
                            ['text' => 'Une alerte préventive attribuée', 'is_correct' => true],
                            ['text' => 'Attendre uniquement les premières connexions en échec', 'is_correct' => false],
                            ['text' => 'Ignorer tout indicateur tant que le CPU est bas', 'is_correct' => false],
                            ['text' => 'Diffuser le secret privé dans la notification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le stockage monte fortement chaque fin de mois mais paraît stable le reste du temps. Quelle prévision de capacité est pertinente ?',
                        'marks' => 1,
                        'explanation' => 'Les besoins dépendent des cycles d’usage et des tendances ; une mesure ponctuelle ne représente pas toujours le prochain pic.',
                        'choices' => [
                            ['text' => 'La saisonnalité et la marge de croissance', 'is_correct' => true],
                            ['text' => 'Prolonger seulement la moyenne du dernier jour calme', 'is_correct' => false],
                            ['text' => 'Considérer tout pic comme une anomalie sans risque', 'is_correct' => false],
                            ['text' => 'Fixer une capacité sans historique ni hypothèse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’horloge murale est corrigée pendant une opération et sa durée calculée devient négative. Quel mécanisme est adapté à la mesure du temps écoulé ?',
                        'marks' => 1,
                        'explanation' => 'Une horloge monotone évite les sauts de l’heure civile pour les durées ; les horodatages civils restent utiles pour la corrélation.',
                        'choices' => [
                            ['text' => 'Une horloge monotone prévue pour les durées', 'is_correct' => true],
                            ['text' => 'Le nom du fuseau dans le fichier de log', 'is_correct' => false],
                            ['text' => 'Une soustraction de dates locales sans précaution', 'is_correct' => false],
                            ['text' => 'Le compteur de fichiers modifiés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un réglage de stockage améliore le débit séquentiel mais dégrade le p99 des petites lectures critiques. Quelle décision d’évaluation est appropriée ?',
                        'marks' => 1,
                        'explanation' => 'Une optimisation doit respecter les parcours et contraintes prioritaires ; un gain de débit peut cacher une dégradation des délais.',
                        'choices' => [
                            ['text' => 'Les objectifs sous une charge représentative', 'is_correct' => true],
                            ['text' => 'Déclarer le réglage meilleur à partir du seul débit maximal', 'is_correct' => false],
                            ['text' => 'Masquer le percentile de latence', 'is_correct' => false],
                            ['text' => 'Réduire les contrôles pour conserver le nouveau résultat', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Organiser les changements et le travail opérationnel',
                'description' => 'Associer responsabilités, preuves et objectifs de service dans les interventions.',
                'difficulty' => 'Professional',
                'duration' => 28,
                'passing_score' => 75,
                'questions' => [
                    [
                        'question' => 'Un changement commun pourrait interrompre simultanément toutes les répliques d’un service. Quel contrôle de changement est prioritaire ?',
                        'marks' => 1,
                        'explanation' => 'L’effet corrélé d’un changement doit être pris en compte ; une flotte nombreuse n’offre pas de secours si tout est modifié simultanément.',
                        'choices' => [
                            ['text' => 'Des vagues respectant la disponibilité', 'is_correct' => true],
                            ['text' => 'Choisir le même horaire pour toutes les répliques par simplicité', 'is_correct' => false],
                            ['text' => 'Supprimer les critères d’arrêt', 'is_correct' => false],
                            ['text' => 'Se fier seulement au nombre total de serveurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une maintenance réseau peut couper l’authentification d’un service critique. Quelle préparation réduit les surprises ?',
                        'marks' => 1,
                        'explanation' => 'Les dépendances de service doivent guider la préparation et la communication d’une fenêtre de maintenance.',
                        'choices' => [
                            ['text' => 'Une coordination des dépendances et replis', 'is_correct' => true],
                            ['text' => 'Informer uniquement l’équipe qui exécute la commande', 'is_correct' => false],
                            ['text' => 'Changer le nom de la demande pour la classer moins risquée', 'is_correct' => false],
                            ['text' => 'Attendre l’incident pour identifier les consommateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une mise à jour de firmware n’offre pas le même retour arrière qu’un paquet applicatif. Quel examen est nécessaire ?',
                        'marks' => 1,
                        'explanation' => 'Le retour arrière dépend des composants et de leur état ; il ne doit pas être promis sans méthode compatible et testée.',
                        'choices' => [
                            ['text' => 'Les limites de récupération du matériel', 'is_correct' => true],
                            ['text' => 'Supposer que tout firmware accepte une version antérieure', 'is_correct' => false],
                            ['text' => 'Prévoir seulement un git revert', 'is_correct' => false],
                            ['text' => 'Copier un ancien fichier sans procédure du fournisseur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une intervention automatisée modifie un parc mais ne conserve ni version ni liste des cibles. Quel dossier d’exécution manque ?',
                        'marks' => 1,
                        'explanation' => 'La traçabilité doit permettre de comprendre ce qui a été autorisé, exécuté et vérifié sans conserver inutilement des secrets.',
                        'choices' => [
                            ['text' => 'Acteur, version, périmètre et résultat', 'is_correct' => true],
                            ['text' => 'Le nombre de caractères du script uniquement', 'is_correct' => false],
                            ['text' => 'La seule date du dépôt', 'is_correct' => false],
                            ['text' => 'Le mot de passe des opérateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pendant un incident, le spécialiste technique est interrompu par toutes les demandes de nouvelles. Quelle organisation aide ?',
                        'marks' => 1,
                        'explanation' => 'Des rôles clairs permettent une action technique concentrée et des informations cohérentes.',
                        'choices' => [
                            ['text' => 'Une séparation des rôles opérationnels', 'is_correct' => true],
                            ['text' => 'Donner toutes les tâches à la même personne sans soutien', 'is_correct' => false],
                            ['text' => 'Multiplier les changements parallèles sans responsable', 'is_correct' => false],
                            ['text' => 'Suspendre toute communication jusqu’à la fin', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La cause et le délai de résolution restent incertains. Quel message opérationnel est approprié ?',
                        'marks' => 1,
                        'explanation' => 'Une communication utile distingue certitudes et hypothèses et donne un rythme de suivi crédible.',
                        'choices' => [
                            ['text' => 'Des faits, actions et échéances de communication', 'is_correct' => true],
                            ['text' => 'Annoncer une heure précise inventée', 'is_correct' => false],
                            ['text' => 'Déclarer la fin de l’incident sans test', 'is_correct' => false],
                            ['text' => 'Diffuser des hypothèses comme des faits établis', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’analyse après incident conclut « être plus prudent ». Quelle action améliore réellement le système ?',
                        'marks' => 1,
                        'explanation' => 'L’apprentissage doit produire des changements concrets sur les facteurs de risque et faire l’objet d’un suivi.',
                        'choices' => [
                            ['text' => 'Une action attribuée et vérifiable', 'is_correct' => true],
                            ['text' => 'Une consigne générale sans propriétaire', 'is_correct' => false],
                            ['text' => 'Une sanction individuelle sans analyse des conditions', 'is_correct' => false],
                            ['text' => 'Une réduction des observations pour éviter les alertes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une vague pilote détecte une règle de pare-feu incompatible avec une ancienne distribution. Quelle suite donne de la valeur à ce quasi-incident ?',
                        'marks' => 1,
                        'explanation' => 'Le pilote révèle une hypothèse de compatibilité fausse ; les contrôles doivent couvrir les variantes réellement présentes.',
                        'choices' => [
                            ['text' => 'Intégrer le profil au contrôle de compatibilité', 'is_correct' => true],
                            ['text' => 'Ignorer le profil et poursuivre sur toutes les machines', 'is_correct' => false],
                            ['text' => 'Retirer les anciens hôtes des tableaux de bord seulement', 'is_correct' => false],
                            ['text' => 'Désactiver les tests de règle pour les pilotes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe consacre presque tout son temps à répéter les mêmes interventions manuelles sans valeur nouvelle. Quel investissement est pertinent ?',
                        'marks' => 1,
                        'explanation' => 'La réduction du travail répétitif doit libérer du temps et diminuer le risque, avec des automatisations elles-mêmes maintenables.',
                        'choices' => [
                            ['text' => 'Une réduction contrôlée du travail répétitif', 'is_correct' => true],
                            ['text' => 'Augmenter le nombre de commandes manuelles comme objectif', 'is_correct' => false],
                            ['text' => 'Retirer toute procédure pour gagner du temps', 'is_correct' => false],
                            ['text' => 'Automatiser sans tests ni limites de cible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des opérateurs doivent redémarrer un service mais ne doivent pas disposer d’un shell root libre. Quelle délégation répond au besoin ?',
                        'marks' => 1,
                        'explanation' => 'La délégation peut porter sur une capacité précise sans donner des privilèges généraux ; son implémentation doit éviter les échappements.',
                        'choices' => [
                            ['text' => 'Une action ciblée et traçable', 'is_correct' => true],
                            ['text' => 'Un compte root partagé dont le mot de passe circule', 'is_correct' => false],
                            ['text' => 'Tous les droits sur la configuration et les clés du serveur', 'is_correct' => false],
                            ['text' => 'Une désactivation de l’audit pour accélérer l’action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une organisation juge son exploitation au seul nombre d’interventions réalisées. Quel effet pervers doit être anticipé ?',
                        'marks' => 1,
                        'explanation' => 'Un indicateur d’activité ne résume pas les résultats ; les incitations peuvent favoriser la répétition plutôt que la réduction des problèmes.',
                        'choices' => [
                            ['text' => 'Une incitation à l’activité plutôt qu’à la prévention', 'is_correct' => true],
                            ['text' => 'Garantir automatiquement moins d’incidents', 'is_correct' => false],
                            ['text' => 'Mesurer précisément la valeur de chaque personne', 'is_correct' => false],
                            ['text' => 'Démontrer que les procédures sont toutes à jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une seule personne sait rétablir un composant critique et elle est indisponible pendant un exercice. Quelle action réduit ce risque organisationnel ?',
                        'marks' => 1,
                        'explanation' => 'La continuité dépend aussi de compétences et d’accès utilisables par plusieurs personnes formées ; un document non exercé ou un compte partagé ne remplace pas cette capacité.',
                        'choices' => [
                            ['text' => 'Une compétence partagée et exercée', 'is_correct' => true],
                            ['text' => 'Conserver la connaissance implicite pour éviter les erreurs', 'is_correct' => false],
                            ['text' => 'Donner uniquement le numéro de téléphone de cette personne', 'is_correct' => false],
                            ['text' => 'Rendre tous les comptes partagés pour remplacer la formation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        $legacyTitles = [
            'System Administration Professional — Architecture et gouvernance',
            'System Administration Professional — Linux à grande échelle',
            'System Administration Professional — Identity and Access Management',
            'System Administration Professional — Automatisation et Infrastructure as Code',
            'System Administration Professional — Cloud et infrastructure hybride',
            'System Administration Professional — Sécurité et réponse aux incidents',
            'System Administration Professional — Résilience, continuité et disaster recovery',
            'System Administration Professional — Observabilité et performance à l’échelle',
            'System Administration Professional — Leadership opérationnel',
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
