<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class OperatingSystemsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'operating-systems')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Stratégie de plateforme et gouvernance',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Stratégie de plateforme et gouvernance.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'qs' => [
                    [
                        'question' => 'Une organisation doit standardiser un OS sur une flotte d’hôtes de production. Les équipes préfèrent des versions différentes. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => 'Réduire les combinaisons à tester et clarifier le cycle de support et les responsabilités', 'is_correct' => false],
                            ['choice_text' => 'La formation, le recrutement, l’astreinte et le support opérationnel nécessaires', 'is_correct' => false],
                            ['choice_text' => 'Comparer support, sécurité, automatisation, compétences, compatibilité et coût total sur le cycle de vie', 'is_correct' => true],
                            ['choice_text' => 'Le coût total de possession incluant opérations, support, incidents, formation et migration', 'is_correct' => false],
                        ],
                        'explanation' => 'La décision doit tenir compte des exigences techniques, opérationnelles et économiques plutôt que d’un seul attribut.',
                    ],
                    [
                        'question' => 'Une golden image est reconstruite chaque trimestre, mais aucun identifiant ne relie les instances à l’image testée. Le contrôle manquant dans cette situation est :',
                        'choices' => [
                            ['choice_text' => 'Une image versionnée empêche tous les incidents', 'is_correct' => false],
                            ['choice_text' => 'Comparer support, sécurité, automatisation, compétences, compatibilité et coût total sur le cycle de vie', 'is_correct' => false],
                            ['choice_text' => 'Définir une source de vérité versionnée, détecter la dérive et gouverner les changements hors processus', 'is_correct' => false],
                            ['choice_text' => 'La provenance et la reproductibilité des systèmes déployés ne peuvent pas être établies avec confiance', 'is_correct' => true],
                        ],
                        'explanation' => 'L’image doit être traçable jusqu’aux déploiements pour auditer et reproduire leur état.',
                    ],
                    [
                        'question' => 'Un audit constate que des serveurs équivalents ont divergé après des interventions manuelles. Le diagnostic doit d’abord porter sur :',
                        'choices' => [
                            ['choice_text' => 'Définir une source de vérité versionnée, détecter la dérive et gouverner les changements hors processus', 'is_correct' => true],
                            ['choice_text' => 'La provenance et la reproductibilité des systèmes déployés ne peuvent pas être établies avec confiance', 'is_correct' => false],
                            ['choice_text' => 'Activer une voie d’urgence avec validation proportionnée, canary, journalisation et critères de retour', 'is_correct' => false],
                            ['choice_text' => 'Associer un propriétaire, une justification, des contrôles compensatoires et une date de réexamen', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérive vient d’états modifiés hors référence ; il faut restaurer une gestion déclarative traçable.',
                    ],
                    [
                        'question' => 'Une CVE critique touche un OS de production. Le processus standard prévoit une fenêtre mensuelle. La réponse proportionnée à cette vulnérabilité consiste à :',
                        'choices' => [
                            ['choice_text' => 'Évaluer l’exposition, réduire les accès, appliquer les mitigations disponibles et piloter une migration datée', 'is_correct' => false],
                            ['choice_text' => 'Activer une voie d’urgence avec validation proportionnée, canary, journalisation et critères de retour', 'is_correct' => true],
                            ['choice_text' => 'Ignorer le processus et pousser simultanément sans mesure', 'is_correct' => false],
                            ['choice_text' => 'Attendre la fenêtre mensuelle sans évaluer l’exposition', 'is_correct' => false],
                        ],
                        'explanation' => 'Une vulnérabilité urgente justifie une accélération gouvernée, pas l’abandon de la validation et de la traçabilité.',
                    ],
                    [
                        'question' => 'Le coût apparent des licences est faible, mais le support et les incidents mobilisent beaucoup d’ingénieurs. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => 'Comparer support, sécurité, automatisation, compétences, compatibilité et coût total sur le cycle de vie', 'is_correct' => false],
                            ['choice_text' => 'La formation, le recrutement, l’astreinte et le support opérationnel nécessaires', 'is_correct' => false],
                            ['choice_text' => 'Le coût total de possession incluant opérations, support, incidents, formation et migration', 'is_correct' => true],
                            ['choice_text' => 'Vérifier l’exigence auprès du fournisseur et traiter ce cas comme une exception de plateforme documentée', 'is_correct' => false],
                        ],
                        'explanation' => 'Le TCO tient compte des dépenses directes et des coûts opérationnels sur la durée de vie.',
                    ],
                    [
                        'question' => 'Une dérogation de conformité est accordée sans échéance à une application ancienne. Pour obtenir ce comportement, retenez le mécanisme suivant :',
                        'choices' => [
                            ['choice_text' => 'Copier la dérogation dans un document non versionné', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les alertes de conformité', 'is_correct' => false],
                            ['choice_text' => 'La provenance et la reproductibilité des systèmes déployés ne peuvent pas être établies avec confiance', 'is_correct' => false],
                            ['choice_text' => 'Associer un propriétaire, une justification, des contrôles compensatoires et une date de réexamen', 'is_correct' => true],
                        ],
                        'explanation' => 'Une exception doit rester limitée, attribuée et réévaluée afin que le risque accepté ne devienne pas invisible.',
                    ],
                    [
                        'question' => 'Deux distributions satisfont les besoins techniques, mais l’une n’est maîtrisée par personne en interne. L’évaluation de cette décision doit intégrer :',
                        'choices' => [
                            ['choice_text' => 'La formation, le recrutement, l’astreinte et le support opérationnel nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Le coût total de possession incluant opérations, support, incidents, formation et migration', 'is_correct' => false],
                            ['choice_text' => 'Réduire les combinaisons à tester et clarifier le cycle de support et les responsabilités', 'is_correct' => false],
                            ['choice_text' => 'Définir une source de vérité versionnée, détecter la dérive et gouverner les changements hors processus', 'is_correct' => false],
                        ],
                        'explanation' => 'La capacité de l’organisation à exploiter l’OS influe sur le coût et le risque de production.',
                    ],
                    [
                        'question' => 'Un catalogue de plateformes liste des dizaines de variantes sans propriétaire ni support. Cette décision apporte principalement :',
                        'choices' => [
                            ['choice_text' => 'Activer une voie d’urgence avec validation proportionnée, canary, journalisation et critères de retour', 'is_correct' => false],
                            ['choice_text' => 'Réduire les combinaisons à tester et clarifier le cycle de support et les responsabilités', 'is_correct' => true],
                            ['choice_text' => 'Associer un propriétaire, une justification, des contrôles compensatoires et une date de réexamen', 'is_correct' => false],
                            ['choice_text' => 'Évaluer l’exposition, réduire les accès, appliquer les mitigations disponibles et piloter une migration datée', 'is_correct' => false],
                        ],
                        'explanation' => 'Une gamme maîtrisée facilite la validation, les correctifs et l’attribution des responsabilités.',
                    ],
                    [
                        'question' => 'Un OS approche sa fin de support mais l’application ne peut pas migrer avant six mois. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => 'Vérifier l’exigence auprès du fournisseur et traiter ce cas comme une exception de plateforme documentée', 'is_correct' => false],
                            ['choice_text' => 'Réduire les combinaisons à tester et clarifier le cycle de support et les responsabilités', 'is_correct' => false],
                            ['choice_text' => 'Évaluer l’exposition, réduire les accès, appliquer les mitigations disponibles et piloter une migration datée', 'is_correct' => true],
                            ['choice_text' => 'Désactiver les inventaires jusqu’à la migration', 'is_correct' => false],
                        ],
                        'explanation' => 'L’absence de support augmente le risque ; des mesures compensatoires temporaires doivent accompagner une trajectoire de sortie.',
                    ],
                    [
                        'question' => 'Une plateforme est adoptée pour simplifier l’exploitation, mais un service exige un driver non supporté. Pour répondre au besoin décrit, retenez :',
                        'choices' => [
                            ['choice_text' => 'Forcer l’installation du driver sans test', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les exigences du service', 'is_correct' => false],
                            ['choice_text' => 'Modifier toutes les images standard pour un seul cas sans revue', 'is_correct' => false],
                            ['choice_text' => 'Vérifier l’exigence auprès du fournisseur et traiter ce cas comme une exception de plateforme documentée', 'is_correct' => true],
                        ],
                        'explanation' => 'La standardisation ne doit pas masquer une incompatibilité ; l’exception doit être évaluée et gouvernée.',
                    ],
                ],
            ],
            [
                'title' => 'Capacité, disponibilité et SLO',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Capacité, disponibilité et SLO.',
                'difficulty' => 'Professional',
                'duration' => 28,
                'passing_score' => 70,
                'total_marks' => 11,
                'qs' => [
                    [
                        'question' => 'La consommation moyenne d’un cluster est de 55 %, mais ses pics dépassent 90 % et un nœud doit rester disponible en cas de panne. Pour absorber cette charge, prévoyez :',
                        'choices' => [
                            ['choice_text' => 'La charge de pointe après perte du nœud prévue par le modèle de panne', 'is_correct' => true],
                            ['choice_text' => 'La moyenne seule, car les pics sont temporaires', 'is_correct' => false],
                            ['choice_text' => 'La capacité nominale du processeur uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le goulot est structurel, les optimisations raisonnables sont évaluées et les prévisions dépassent la marge disponible', 'is_correct' => false],
                        ],
                        'explanation' => 'Le capacity plan doit intégrer les pointes et les défaillances attendues, pas seulement une moyenne agrégée.',
                    ],
                    [
                        'question' => 'Un cluster N+1 tolère la panne d’un hôte, mais les services dépassent leurs SLO après la perte. Le contrôle qui sécurise cette opération consiste à :',
                        'choices' => [
                            ['choice_text' => 'La panne vient nécessairement du DNS', 'is_correct' => false],
                            ['choice_text' => 'La redondance d’hôte existe, mais la capacité restante ne suffit pas à préserver le niveau de service', 'is_correct' => true],
                            ['choice_text' => 'N+1 garantit automatiquement les SLO', 'is_correct' => false],
                            ['choice_text' => 'Le SLO est indépendant de la capacité', 'is_correct' => false],
                        ],
                        'explanation' => 'La tolérance à la panne doit inclure la capacité et les objectifs de service après retrait du composant.',
                    ],
                    [
                        'question' => 'Les deux sites de reprise hébergent des réplicas mais partagent le même circuit électrique et le même routeur d’accès. Le risque à traiter dans ce scénario est :',
                        'choices' => [
                            ['choice_text' => 'La charge de pointe après perte du nœud prévue par le modèle de panne', 'is_correct' => false],
                            ['choice_text' => 'Leurs profils de burst et leurs contraintes de latence ne sont pas les mêmes', 'is_correct' => false],
                            ['choice_text' => 'Une panne commune peut supprimer simultanément les deux environnements', 'is_correct' => true],
                            ['choice_text' => 'La redondance d’hôte existe, mais la capacité restante ne suffit pas à préserver le niveau de service', 'is_correct' => false],
                        ],
                        'explanation' => 'La redondance apparente ne protège pas contre des domaines de panne communs.',
                    ],
                    [
                        'question' => 'Une charge batch a des pointes prévisibles, tandis qu’une API interactive doit tenir un p99 faible. La capacité à réserver pour ce profil est :',
                        'choices' => [
                            ['choice_text' => 'Toutes les charges ont un objectif de latence identique', 'is_correct' => false],
                            ['choice_text' => 'La capacité réservée ne peut jamais être ajustée', 'is_correct' => false],
                            ['choice_text' => 'Réduire les changements risqués et consacrer la capacité à restaurer la fiabilité', 'is_correct' => false],
                            ['choice_text' => 'Leurs profils de burst et leurs contraintes de latence ne sont pas les mêmes', 'is_correct' => true],
                        ],
                        'explanation' => 'La marge doit être définie selon les conséquences d’une contention et les profils de demande.',
                    ],
                    [
                        'question' => 'Un goulot persiste après profilage, et la demande croît régulièrement. Pour absorber cette charge, prévoyez :',
                        'choices' => [
                            ['choice_text' => 'Le goulot est structurel, les optimisations raisonnables sont évaluées et les prévisions dépassent la marge disponible', 'is_correct' => true],
                            ['choice_text' => 'Ajouter un objectif mesurable de durée de bascule ou de latence pendant l’incident', 'is_correct' => false],
                            ['choice_text' => 'Une panne commune peut supprimer simultanément les deux environnements', 'is_correct' => false],
                            ['choice_text' => 'La stratégie d’état, de cohérence et de résolution des écritures concurrentes', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ajout de capacité doit répondre à une contrainte mesurée et une croissance durable.',
                    ],
                    [
                        'question' => 'Une architecture dispose d’un actif-actif pour chaque zone, mais les données ne sont pas cohérentes après bascule. Pour répondre au besoin décrit, retenez :',
                        'choices' => [
                            ['choice_text' => 'Le coût par unité de service utile tout en respectant les SLO', 'is_correct' => false],
                            ['choice_text' => 'La stratégie d’état, de cohérence et de résolution des écritures concurrentes', 'is_correct' => true],
                            ['choice_text' => 'Backpressure ou limitation de débit associée à une dégradation définie', 'is_correct' => false],
                            ['choice_text' => 'Un SLI de latence pertinent, avec seuil et population clairement définis', 'is_correct' => false],
                        ],
                        'explanation' => 'La disponibilité active-active implique des décisions sur les écritures, le routage et la cohérence.',
                    ],
                    [
                        'question' => 'Une campagne de charge fait croître la file jusqu’au dépassement du délai utilisateur. Le mécanisme qui répond à cette contrainte est :',
                        'choices' => [
                            ['choice_text' => 'La charge de pointe après perte du nœud prévue par le modèle de panne', 'is_correct' => false],
                            ['choice_text' => 'Le coût par unité de service utile tout en respectant les SLO', 'is_correct' => false],
                            ['choice_text' => 'Backpressure ou limitation de débit associée à une dégradation définie', 'is_correct' => true],
                            ['choice_text' => 'Augmenter sans limite la file mémoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Limiter l’admission ou ralentir les producteurs empêche les files d’attente de croître sans contrôle.',
                    ],
                    [
                        'question' => 'Le SLO est défini en disponibilité, mais aucune équipe ne suit l’impact des déploiements sur les requêtes lentes. Le contrôle manquant dans cette situation est :',
                        'choices' => [
                            ['choice_text' => 'La redondance d’hôte existe, mais la capacité restante ne suffit pas à préserver le niveau de service', 'is_correct' => false],
                            ['choice_text' => 'Leurs profils de burst et leurs contraintes de latence ne sont pas les mêmes', 'is_correct' => false],
                            ['choice_text' => 'Ajouter un objectif mesurable de durée de bascule ou de latence pendant l’incident', 'is_correct' => false],
                            ['choice_text' => 'Un SLI de latence pertinent, avec seuil et population clairement définis', 'is_correct' => true],
                        ],
                        'explanation' => 'Un SLO doit être soutenu par des indicateurs qui mesurent l’expérience de service visée.',
                    ],
                    [
                        'question' => 'Le budget d’erreur d’un service est presque épuisé après plusieurs incidents. Le mécanisme qui répond à cette contrainte est :',
                        'choices' => [
                            ['choice_text' => 'Réduire les changements risqués et consacrer la capacité à restaurer la fiabilité', 'is_correct' => true],
                            ['choice_text' => 'Accélérer les releases pour utiliser le budget restant', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les alertes d’erreur', 'is_correct' => false],
                            ['choice_text' => 'Une panne commune peut supprimer simultanément les deux environnements', 'is_correct' => false],
                        ],
                        'explanation' => 'L’error budget rend explicite le compromis entre vitesse de changement et fiabilité.',
                    ],
                    [
                        'question' => 'Un fournisseur propose une nouvelle taille de VM qui augmente le coût mais évite des files d’attente au p99. Le critère déterminant dans cette décision est :',
                        'choices' => [
                            ['choice_text' => 'Backpressure ou limitation de débit associée à une dégradation définie', 'is_correct' => false],
                            ['choice_text' => 'Le coût par unité de service utile tout en respectant les SLO', 'is_correct' => true],
                            ['choice_text' => 'Le goulot est structurel, les optimisations raisonnables sont évaluées et les prévisions dépassent la marge disponible', 'is_correct' => false],
                            ['choice_text' => 'La stratégie d’état, de cohérence et de résolution des écritures concurrentes', 'is_correct' => false],
                        ],
                        'explanation' => 'Un choix de capacité doit comparer le coût opérationnel au résultat utile et à la qualité de service.',
                    ],
                    [
                        'question' => 'Un SLO de disponibilité est atteint, mais les utilisateurs subissent des pauses de plusieurs secondes pendant les bascules. L’amélioration qui corrige ce problème consiste à :',
                        'choices' => [
                            ['choice_text' => 'Supprimer les tests de failover puisque le SLO est atteint', 'is_correct' => false],
                            ['choice_text' => 'Un SLI de latence pertinent, avec seuil et population clairement définis', 'is_correct' => false],
                            ['choice_text' => 'Ajouter un objectif mesurable de durée de bascule ou de latence pendant l’incident', 'is_correct' => true],
                            ['choice_text' => 'Remplacer disponibilité par le nombre de nœuds installés', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mesure de disponibilité peut masquer des interruptions brèves mais importantes ; l’objectif doit refléter l’expérience pendant la reprise.',
                    ],
                ],
            ],
            [
                'title' => 'Migration et évolution d’OS',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Migration et évolution d’OS.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'qs' => [
                    [
                        'question' => 'Une migration de kernel échoue sur des hôtes équipés d’un module tiers absent du parc de test. Pour compléter la séquence, l’étape à ajouter est :',
                        'choices' => [
                            ['choice_text' => 'Inventorier les matériels et drivers réels puis tester les combinaisons représentatives', 'is_correct' => true],
                            ['choice_text' => 'Migrer tous les hôtes avant d’examiner les erreurs', 'is_correct' => false],
                            ['choice_text' => 'Suspendre l’élargissement, comparer à la baseline et diagnostiquer avant la vague suivante', 'is_correct' => false],
                            ['choice_text' => 'Un état plus reproductible avec moins de résidus historiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dépendances d’OS incluent drivers et matériel, pas seulement les paquets applicatifs.',
                    ],
                    [
                        'question' => 'Une migration de flotte est planifiée en vagues. Après le premier canary, la latence disque augmente de 30 %. La menace prioritaire pour ce service est :',
                        'choices' => [
                            ['choice_text' => 'Redémarrer par lots avec un plafond d’indisponibilité et des contrôles de santé entre vagues', 'is_correct' => false],
                            ['choice_text' => 'Suspendre l’élargissement, comparer à la baseline et diagnostiquer avant la vague suivante', 'is_correct' => true],
                            ['choice_text' => 'Poursuivre la migration pour confirmer le problème sur tout le parc', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les métriques de latence', 'is_correct' => false],
                        ],
                        'explanation' => 'Le canary est un point de décision ; une régression doit être comprise avant de l’exposer plus largement.',
                    ],
                    [
                        'question' => 'Un système migré in-place conserve des règles firewall inconnues accumulées depuis plusieurs années. Le bénéfice attendu de ce choix est :',
                        'choices' => [
                            ['choice_text' => 'Inventorier les matériels et drivers réels puis tester les combinaisons représentatives', 'is_correct' => false],
                            ['choice_text' => 'Le format des données peut être incompatible avec l’ancienne version après rollback', 'is_correct' => false],
                            ['choice_text' => 'Un état plus reproductible avec moins de résidus historiques', 'is_correct' => true],
                            ['choice_text' => 'Comparer les unités, paramètres et politiques système effectifs entre les environnements', 'is_correct' => false],
                        ],
                        'explanation' => 'La reconstruction limite l’accumulation des changements non documentés mais nécessite une validation et une stratégie de bascule.',
                    ],
                    [
                        'question' => 'Le plan de rollback d’une migration propose de réinstaller l’ancienne image, mais les données ont déjà été converties au nouveau format. Le problème qui explique ce comportement est :',
                        'choices' => [
                            ['choice_text' => 'L’impact sur la fiabilité et les SLO, segmenté par matériel et version', 'is_correct' => false],
                            ['choice_text' => 'Attribuer les erreurs et SLI à la version, cohorte ou vague de déploiement', 'is_correct' => false],
                            ['choice_text' => 'Une stratégie de compatibilité et d’évolution progressive du schéma partagé', 'is_correct' => false],
                            ['choice_text' => 'Le format des données peut être incompatible avec l’ancienne version après rollback', 'is_correct' => true],
                        ],
                        'explanation' => 'La compatibilité des données et des versions doit être prévue avant une conversion irréversible.',
                    ],
                    [
                        'question' => 'Un déploiement blue-green conserve les deux environnements, mais les deux écrivent dans la même base avec des schémas incompatibles. Pour compléter la séquence, l’étape à ajouter est :',
                        'choices' => [
                            ['choice_text' => 'Une stratégie de compatibilité et d’évolution progressive du schéma partagé', 'is_correct' => true],
                            ['choice_text' => 'La double exploitation augmente coût, exposition et dette de maintenance ; une date de retrait est nécessaire', 'is_correct' => false],
                            ['choice_text' => 'Attribuer les erreurs et SLI à la version, cohorte ou vague de déploiement', 'is_correct' => false],
                            ['choice_text' => 'Comparer les unités, paramètres et politiques système effectifs entre les environnements', 'is_correct' => false],
                        ],
                        'explanation' => 'La coexistence de versions exige que leurs contrats de données soient compatibles pendant la bascule.',
                    ],
                    [
                        'question' => 'Une nouvelle version de kernel améliore le débit mais augmente les crashes d’un driver réseau. Dans cette séquence, retenez le signal adapté :',
                        'choices' => [
                            ['choice_text' => 'La double exploitation augmente coût, exposition et dette de maintenance ; une date de retrait est nécessaire', 'is_correct' => false],
                            ['choice_text' => 'L’impact sur la fiabilité et les SLO, segmenté par matériel et version', 'is_correct' => true],
                            ['choice_text' => 'Le nom du mainteneur du driver uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le format des données peut être incompatible avec l’ancienne version après rollback', 'is_correct' => false],
                        ],
                        'explanation' => 'Un gain de débit ne compense pas automatiquement une dégradation de fiabilité en production.',
                    ],
                    [
                        'question' => 'Un rollback peut être déclenché par une hausse d’erreurs, mais la métrique agrège toutes les versions. L’amélioration qui corrige ce problème consiste à :',
                        'choices' => [
                            ['choice_text' => 'L’impact sur la fiabilité et les SLO, segmenté par matériel et version', 'is_correct' => false],
                            ['choice_text' => 'Suspendre l’élargissement, comparer à la baseline et diagnostiquer avant la vague suivante', 'is_correct' => false],
                            ['choice_text' => 'Attribuer les erreurs et SLI à la version, cohorte ou vague de déploiement', 'is_correct' => true],
                            ['choice_text' => 'Déclencher le rollback selon la charge CPU seulement', 'is_correct' => false],
                        ],
                        'explanation' => 'La segmentation relie les changements déployés à leurs effets et évite que l’agrégation masque une régression.',
                    ],
                    [
                        'question' => 'Une application fonctionne sous le nouvel OS en test mais échoue au démarrage en production à cause d’un service désactivé par défaut. Le contrôle qui sécurise cette opération consiste à :',
                        'choices' => [
                            ['choice_text' => 'Comparer uniquement les versions d’application', 'is_correct' => false],
                            ['choice_text' => 'Inventorier les matériels et drivers réels puis tester les combinaisons représentatives', 'is_correct' => false],
                            ['choice_text' => 'Un état plus reproductible avec moins de résidus historiques', 'is_correct' => false],
                            ['choice_text' => 'Comparer les unités, paramètres et politiques système effectifs entre les environnements', 'is_correct' => true],
                        ],
                        'explanation' => 'Les valeurs par défaut et services actifs peuvent changer avec l’OS et doivent faire partie des tests de compatibilité.',
                    ],
                    [
                        'question' => 'Une migration importante doit éviter que tous les nœuds redémarrent ensemble. Pour absorber cette charge, prévoyez :',
                        'choices' => [
                            ['choice_text' => 'Redémarrer par lots avec un plafond d’indisponibilité et des contrôles de santé entre vagues', 'is_correct' => true],
                            ['choice_text' => 'Redémarrer simultanément pour réduire la durée totale', 'is_correct' => false],
                            ['choice_text' => 'Une stratégie de compatibilité et d’évolution progressive du schéma partagé', 'is_correct' => false],
                            ['choice_text' => 'Inventorier les matériels et drivers réels puis tester les combinaisons représentatives', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lots et critères de santé préservent les marges de capacité et de réplication.',
                    ],
                    [
                        'question' => 'Une équipe annonce que l’ancien environnement pourra rester disponible pour toujours après la migration. La menace prioritaire pour ce service est :',
                        'choices' => [
                            ['choice_text' => 'Suspendre l’élargissement, comparer à la baseline et diagnostiquer avant la vague suivante', 'is_correct' => false],
                            ['choice_text' => 'La double exploitation augmente coût, exposition et dette de maintenance ; une date de retrait est nécessaire', 'is_correct' => true],
                            ['choice_text' => 'L’ancien environnement ne peut jamais être une référence', 'is_correct' => false],
                            ['choice_text' => 'Redémarrer par lots avec un plafond d’indisponibilité et des contrôles de santé entre vagues', 'is_correct' => false],
                        ],
                        'explanation' => 'Une période de coexistence peut aider au rollback, mais doit avoir une échéance et des contrôles de sécurité.',
                    ],
                ],
            ],
            [
                'title' => 'Sécurité opérationnelle et identité',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Sécurité opérationnelle et identité.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'qs' => [
                    [
                        'question' => 'Un compte administrateur SSH est partagé par une équipe de 20 personnes. Après un incident, les actions ne sont pas attribuables. Pour supprimer ce défaut, corrigez :',
                        'choices' => [
                            ['choice_text' => 'Le placer derrière un accès contrôlé, un réseau de management et des identités fortes', 'is_correct' => false],
                            ['choice_text' => 'Une compromission de ces identifiants peut donner accès à la fois au système et au mécanisme de secours', 'is_correct' => false],
                            ['choice_text' => 'Des comptes individuels, authentification forte et accès via un chemin administré', 'is_correct' => true],
                            ['choice_text' => 'La suppression des journaux d’authentification', 'is_correct' => false],
                        ],
                        'explanation' => 'Les identités individuelles permettent révocation, MFA et attribution des opérations.',
                    ],
                    [
                        'question' => 'Une CVE critique reçoit un score élevé mais touche un service isolé non exposé ; une CVE moins sévère touche un bastion Internet. Pour établir l’ordre de traitement, comparez :',
                        'choices' => [
                            ['choice_text' => 'Trier uniquement par score numérique', 'is_correct' => false],
                            ['choice_text' => 'Des correctifs, comportements et diagnostics peuvent diverger au sein d’un même service', 'is_correct' => false],
                            ['choice_text' => 'Des comptes individuels, authentification forte et accès via un chemin administré', 'is_correct' => false],
                            ['choice_text' => 'Combiner sévérité, exploitabilité, exposition, criticité et contrôles compensatoires', 'is_correct' => true],
                        ],
                        'explanation' => 'Le contexte d’exposition et l’impact métier complètent les scores génériques.',
                    ],
                    [
                        'question' => 'Un bastion de management est accessible depuis Internet alors qu’il n’a pas de besoin public. Le risque à traiter dans ce scénario est :',
                        'choices' => [
                            ['choice_text' => 'Le placer derrière un accès contrôlé, un réseau de management et des identités fortes', 'is_correct' => true],
                            ['choice_text' => 'Combiner sévérité, exploitabilité, exposition, criticité et contrôles compensatoires', 'is_correct' => false],
                            ['choice_text' => 'Le correctif peut nécessiter un redémarrage pour que le nouveau kernel soit effectivement actif', 'is_correct' => false],
                            ['choice_text' => 'Attribuer un responsable, une justification, une portée et une date de revue à chaque exception', 'is_correct' => false],
                        ],
                        'explanation' => 'Les interfaces d’administration sont sensibles et doivent être exposées par des chemins restreints.',
                    ],
                    [
                        'question' => 'Après patch d’un kernel, certains hôtes affichent encore l’ancien kernel en mémoire. Pour confirmer que le correctif est actif, contrôlez :',
                        'choices' => [
                            ['choice_text' => 'Les hôtes gardent toujours deux noyaux actifs', 'is_correct' => false],
                            ['choice_text' => 'Le correctif peut nécessiter un redémarrage pour que le nouveau kernel soit effectivement actif', 'is_correct' => true],
                            ['choice_text' => 'Un kernel installé ne peut pas être chargé', 'is_correct' => false],
                            ['choice_text' => 'Le statut de paquet mesure la latence réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'L’inventaire doit distinguer version installée et version en cours d’exécution.',
                    ],
                    [
                        'question' => 'Un rapport d’audit révèle des exceptions de firewall sans propriétaire. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => 'Détection continue ou périodique automatisée de la configuration attendue', 'is_correct' => false],
                            ['choice_text' => 'Réduire les privilèges aux interfaces et données réellement requises par l’agent', 'is_correct' => false],
                            ['choice_text' => 'Attribuer un responsable, une justification, une portée et une date de revue à chaque exception', 'is_correct' => true],
                            ['choice_text' => 'Tester selon les rôles représentatifs et élargir progressivement avec exceptions temporaires suivies', 'is_correct' => false],
                        ],
                        'explanation' => 'Une exception doit pouvoir être examinée, limitée et retirée lorsqu’elle n’est plus justifiée.',
                    ],
                    [
                        'question' => 'Une flotte a 100 % de conformité lors d’un audit annuel, puis dérive entre les audits. Le contrôle qui sécurise cette opération consiste à :',
                        'choices' => [
                            ['choice_text' => 'Un audit manuel plus détaillé tous les cinq ans', 'is_correct' => false],
                            ['choice_text' => 'Désactivation des mises à jour de configuration', 'is_correct' => false],
                            ['choice_text' => 'Des comptes individuels, authentification forte et accès via un chemin administré', 'is_correct' => false],
                            ['choice_text' => 'Détection continue ou périodique automatisée de la configuration attendue', 'is_correct' => true],
                        ],
                        'explanation' => 'La surveillance répétée détecte les écarts qui apparaissent après un contrôle ponctuel.',
                    ],
                    [
                        'question' => 'Une équipe stocke des clés de récupération dans le même coffre accessible avec les identifiants administratifs qu’elles doivent restaurer. Le risque à traiter dans ce scénario est :',
                        'choices' => [
                            ['choice_text' => 'Une compromission de ces identifiants peut donner accès à la fois au système et au mécanisme de secours', 'is_correct' => true],
                            ['choice_text' => 'Le coffre ne peut jamais être compromis', 'is_correct' => false],
                            ['choice_text' => 'Les clés de récupération sont publiques par définition', 'is_correct' => false],
                            ['choice_text' => 'La redondance empêche toute compromission', 'is_correct' => false],
                        ],
                        'explanation' => 'Les secrets critiques devraient avoir des contrôles indépendants pour éviter une dépendance circulaire de confiance.',
                    ],
                    [
                        'question' => 'Un agent de supervision dispose de droits root complets alors qu’il ne collecte que des métriques. Avant d’accepter ce modèle, révisez :',
                        'choices' => [
                            ['choice_text' => 'Attribuer un responsable, une justification, une portée et une date de revue à chaque exception', 'is_correct' => false],
                            ['choice_text' => 'Réduire les privilèges aux interfaces et données réellement requises par l’agent', 'is_correct' => true],
                            ['choice_text' => 'Créer un second compte root de secours', 'is_correct' => false],
                            ['choice_text' => 'Exécuter l’agent seulement pendant les audits', 'is_correct' => false],
                        ],
                        'explanation' => 'La réduction des privilèges limite l’impact si le composant de collecte est compromis.',
                    ],
                    [
                        'question' => 'Une nouvelle politique de hardening bloque un service légitime sur 8 % des hôtes. Le défaut opérationnel à corriger est :',
                        'choices' => [
                            ['choice_text' => 'Des correctifs, comportements et diagnostics peuvent diverger au sein d’un même service', 'is_correct' => false],
                            ['choice_text' => 'Combiner sévérité, exploitabilité, exposition, criticité et contrôles compensatoires', 'is_correct' => false],
                            ['choice_text' => 'Tester selon les rôles représentatifs et élargir progressivement avec exceptions temporaires suivies', 'is_correct' => true],
                            ['choice_text' => 'Garder une politique unique sans différenciation de rôle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les rôles et canaries révèlent les incompatibilités tout en conservant un suivi des exceptions.',
                    ],
                    [
                        'question' => 'Un audit montre que plusieurs serveurs de base de données utilisent des kernels différents sans raison documentée. La menace prioritaire pour ce service est :',
                        'choices' => [
                            ['choice_text' => 'Les kernels n’influencent ni drivers ni sécurité', 'is_correct' => false],
                            ['choice_text' => 'Réduire les privilèges aux interfaces et données réellement requises par l’agent', 'is_correct' => false],
                            ['choice_text' => 'Le placer derrière un accès contrôlé, un réseau de management et des identités fortes', 'is_correct' => false],
                            ['choice_text' => 'Des correctifs, comportements et diagnostics peuvent diverger au sein d’un même service', 'is_correct' => true],
                        ],
                        'explanation' => 'Un inventaire des versions et une politique de support rendent les divergences visibles et gouvernables.',
                    ],
                ],
            ],
            [
                'title' => 'Performance, efficacité et coût',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Performance, efficacité et coût.',
                'difficulty' => 'Professional',
                'duration' => 28,
                'passing_score' => 70,
                'total_marks' => 11,
                'qs' => [
                    [
                        'question' => 'Une affinité CPU améliore le p99 d’un workload mais concentre la charge sur deux cœurs. Le risque à traiter dans ce scénario est :',
                        'choices' => [
                            ['choice_text' => 'Une saturation locale et une capacité inutilisée ailleurs si le placement est trop strict', 'is_correct' => true],
                            ['choice_text' => 'Une suppression automatique des caches CPU', 'is_correct' => false],
                            ['choice_text' => 'Conserver la mitigation tant qu’aucun bénéfice produit ne justifie d’accepter son risque', 'is_correct' => false],
                            ['choice_text' => 'Étudier les séries temporelles, les percentiles de demande et la capacité sous panne avant d’ajuster les réservations', 'is_correct' => false],
                        ],
                        'explanation' => 'L’affinité peut améliorer la localité mais réduire l’équilibrage et créer un point chaud.',
                    ],
                    [
                        'question' => 'Un stockage atteint sa limite de 100 000 IOPS avant sa limite de 2 Go/s. Le profil de charge à prendre en compte est :',
                        'choices' => [
                            ['choice_text' => 'La topologie, les caches et les coûts de mémoire peuvent avoir changé', 'is_correct' => false],
                            ['choice_text' => 'Beaucoup de petites opérations aléatoires', 'is_correct' => true],
                            ['choice_text' => 'Une saturation locale et une capacité inutilisée ailleurs si le placement est trop strict', 'is_correct' => false],
                            ['choice_text' => 'Le buffering excessif ajoute de l’attente et crée du bufferbloat', 'is_correct' => false],
                        ],
                        'explanation' => 'Les petites opérations peuvent épuiser les IOPS sans atteindre la bande passante en octets.',
                    ],
                    [
                        'question' => 'Une file réseau plus grande réduit les pertes mais fait passer le p99 de 40 à 400 ms. Les faits observés s’expliquent par :',
                        'choices' => [
                            ['choice_text' => 'La file a augmenté le nombre de cœurs CPU', 'is_correct' => false],
                            ['choice_text' => 'Les paquets ont cessé d’utiliser le réseau', 'is_correct' => false],
                            ['choice_text' => 'Le buffering excessif ajoute de l’attente et crée du bufferbloat', 'is_correct' => true],
                            ['choice_text' => 'Une grande file élimine toujours la latence', 'is_correct' => false],
                        ],
                        'explanation' => 'Des files profondes peuvent contenir davantage de travail que le service ne traite et dégrader la latence.',
                    ],
                    [
                        'question' => 'Une configuration CPU est optimisée sur un ancien serveur puis copiée sur une nouvelle génération NUMA. Le réglage doit être retesté au regard de :',
                        'choices' => [
                            ['choice_text' => 'Les réglages CPU ne dépendent jamais du matériel', 'is_correct' => false],
                            ['choice_text' => 'Une nouvelle génération garantit que tous les réglages sont meilleurs', 'is_correct' => false],
                            ['choice_text' => 'Séparer et contrôler les scénarios froid et chaud, puis répéter les mesures', 'is_correct' => false],
                            ['choice_text' => 'La topologie, les caches et les coûts de mémoire peuvent avoir changé', 'is_correct' => true],
                        ],
                        'explanation' => 'Le matériel modifie les caractéristiques de placement et les goulots ; les réglages historiques ne sont pas universels.',
                    ],
                    [
                        'question' => 'Un benchmark varie fortement entre exécutions, car certaines démarrent avec un cache chaud. L’amélioration qui corrige ce problème consiste à :',
                        'choices' => [
                            ['choice_text' => 'Séparer et contrôler les scénarios froid et chaud, puis répéter les mesures', 'is_correct' => true],
                            ['choice_text' => 'Mélanger les résultats sans enregistrer l’état du cache', 'is_correct' => false],
                            ['choice_text' => 'Désactiver les mesures de latence', 'is_correct' => false],
                            ['choice_text' => 'Comparer l’effet sur le SLO et le coût par requête utile, puis conserver le réglage seulement si le compromis est acceptable', 'is_correct' => false],
                        ],
                        'explanation' => 'La comparaison n’est utile que si les conditions d’exécution sont contrôlées et documentées.',
                    ],
                    [
                        'question' => 'Une équipe veut réduire le coût serveur sans dégrader l’expérience. La mesure la plus utile pour ce diagnostic est :',
                        'choices' => [
                            ['choice_text' => 'Le débit, la queue et la latence I/O pendant la fenêtre de sauvegarde', 'is_correct' => false],
                            ['choice_text' => 'Le coût par requête ou unité de travail utile sous les SLO', 'is_correct' => true],
                            ['choice_text' => 'Le débit supérieur peut dégrader le service si les objectifs de latence ne sont plus respectés', 'is_correct' => false],
                            ['choice_text' => 'Beaucoup de petites opérations aléatoires', 'is_correct' => false],
                        ],
                        'explanation' => 'Un ratio coût/service utile permet de comparer l’efficacité tout en gardant les exigences de qualité.',
                    ],
                    [
                        'question' => 'La latence p99 se dégrade au moment des sauvegardes, alors que le CPU reste stable. Pour relier cette dégradation aux sauvegardes, analysez :',
                        'choices' => [
                            ['choice_text' => 'Le débit supérieur peut dégrader le service si les objectifs de latence ne sont plus respectés', 'is_correct' => false],
                            ['choice_text' => 'Une saturation locale et une capacité inutilisée ailleurs si le placement est trop strict', 'is_correct' => false],
                            ['choice_text' => 'Le débit, la queue et la latence I/O pendant la fenêtre de sauvegarde', 'is_correct' => true],
                            ['choice_text' => 'Le coût par requête ou unité de travail utile sous les SLO', 'is_correct' => false],
                        ],
                        'explanation' => 'Les sauvegardes peuvent concurrencer les workloads sur le stockage même si le CPU n’est pas saturé.',
                    ],
                    [
                        'question' => 'Une mitigation de sécurité coûte 5 % de performance selon un microbenchmark mais n’a pas d’effet mesuré sur le SLO applicatif. Pour répondre au besoin décrit, retenez :',
                        'choices' => [
                            ['choice_text' => 'Comparer l’effet sur le SLO et le coût par requête utile, puis conserver le réglage seulement si le compromis est acceptable', 'is_correct' => false],
                            ['choice_text' => 'Le coût par requête ou unité de travail utile sous les SLO', 'is_correct' => false],
                            ['choice_text' => 'Beaucoup de petites opérations aléatoires', 'is_correct' => false],
                            ['choice_text' => 'Conserver la mitigation tant qu’aucun bénéfice produit ne justifie d’accepter son risque', 'is_correct' => true],
                        ],
                        'explanation' => 'Les optimisations doivent être guidées par un impact réel et pesées contre le risque qu’elles introduisent.',
                    ],
                    [
                        'question' => 'Une hausse du débit moyen s’accompagne d’une augmentation du p99 et des timeouts. Les faits observés s’expliquent par :',
                        'choices' => [
                            ['choice_text' => 'Le débit supérieur peut dégrader le service si les objectifs de latence ne sont plus respectés', 'is_correct' => true],
                            ['choice_text' => 'Le débit moyen rend les timeouts sans importance', 'is_correct' => false],
                            ['choice_text' => 'Le p99 est toujours un artefact de mesure', 'is_correct' => false],
                            ['choice_text' => 'Le débit, la queue et la latence I/O pendant la fenêtre de sauvegarde', 'is_correct' => false],
                        ],
                        'explanation' => 'Le succès d’une optimisation dépend des SLI visés, pas d’une métrique isolée.',
                    ],
                    [
                        'question' => 'Une flotte réserve beaucoup de CPU qui reste rarement consommé, mais subit des pics prévisibles. L’analyse à mener avant cette décision porte sur :',
                        'choices' => [
                            ['choice_text' => 'La topologie, les caches et les coûts de mémoire peuvent avoir changé', 'is_correct' => false],
                            ['choice_text' => 'Étudier les séries temporelles, les percentiles de demande et la capacité sous panne avant d’ajuster les réservations', 'is_correct' => true],
                            ['choice_text' => 'Réduire toutes les réservations à la moyenne', 'is_correct' => false],
                            ['choice_text' => 'Le buffering excessif ajoute de l’attente et crée du bufferbloat', 'is_correct' => false],
                        ],
                        'explanation' => 'La capacité doit concilier utilisation, pointes corrélées et marge de résilience.',
                    ],
                    [
                        'question' => 'Un changement d’affinité CPU réduit le p99 d’un service, mais augmente son coût de capacité de 20 %. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => 'Supprimer l’affinité parce que toute hausse de coût est interdite', 'is_correct' => false],
                            ['choice_text' => 'Étudier les séries temporelles, les percentiles de demande et la capacité sous panne avant d’ajuster les réservations', 'is_correct' => false],
                            ['choice_text' => 'Comparer l’effet sur le SLO et le coût par requête utile, puis conserver le réglage seulement si le compromis est acceptable', 'is_correct' => true],
                            ['choice_text' => 'Conserver le réglage parce que le p99 a baissé, quel que soit le coût', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux résultats doivent être comparés à des objectifs explicites plutôt que d’optimiser une seule métrique.',
                    ],
                ],
            ],
            [
                'title' => 'Incidents critiques et réponse',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Incidents critiques et réponse.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'qs' => [
                    [
                        'question' => 'Une commande de remédiation a redémarré 10 % des hôtes et une partie ne revient pas. Dans ce contexte, l’action à mener est :',
                        'choices' => [
                            ['choice_text' => 'Suspendre la vague, préserver les faits et évaluer l’état du cluster avant toute nouvelle action', 'is_correct' => true],
                            ['choice_text' => 'Relancer immédiatement la commande sur les hôtes restants', 'is_correct' => false],
                            ['choice_text' => 'Rapporter les observations comme faits, la cause réseau comme hypothèse et les prochaines vérifications', 'is_correct' => false],
                            ['choice_text' => 'Appliquer une mitigation réversible validée pour rétablir un service acceptable, puis analyser la cause', 'is_correct' => false],
                        ],
                        'explanation' => 'Contenir une action à fort impact et comprendre l’état actuel avant de poursuivre limite le blast radius.',
                    ],
                    [
                        'question' => 'Un service critique est dégradé et la cause n’est pas encore établie. Dans cette situation, procédez dans l’ordre suivant :',
                        'choices' => [
                            ['choice_text' => 'Suspendre la vague, préserver les faits et évaluer l’état du cluster avant toute nouvelle action', 'is_correct' => false],
                            ['choice_text' => 'Appliquer une mitigation réversible validée pour rétablir un service acceptable, puis analyser la cause', 'is_correct' => true],
                            ['choice_text' => 'Attendre la certitude causale avant toute mitigation', 'is_correct' => false],
                            ['choice_text' => 'Analyser les conditions, garde-fous et facteurs systémiques qui ont rendu l’erreur possible', 'is_correct' => false],
                        ],
                        'explanation' => 'La restauration rapide peut précéder l’analyse complète, à condition de contrôler le risque et de préserver les éléments utiles.',
                    ],
                    [
                        'question' => 'Une base et un réseau tombent dans deux régions à la même heure. Pour traiter cette opération, conservez :',
                        'choices' => [
                            ['choice_text' => 'Définir des critères d’escalade, des rôles et des canaux avant l’incident', 'is_correct' => false],
                            ['choice_text' => 'Suivre une procédure de collecte contrôlée avant les actions qui peuvent effacer les artefacts', 'is_correct' => false],
                            ['choice_text' => 'Les dépendances et domaines de panne partagés, y compris alimentation, routage et contrôle', 'is_correct' => true],
                            ['choice_text' => 'La taille de la base de logs', 'is_correct' => false],
                        ],
                        'explanation' => 'Des services distribués peuvent rester corrélés par une dépendance commune cachée.',
                    ],
                    [
                        'question' => 'Une équipe hésite à escalader un incident parce qu’aucun seuil de gravité n’est défini. Pour réduire ce risque, l’équipe doit :',
                        'choices' => [
                            ['choice_text' => 'Ajouter les contacts après chaque incident sans procédure', 'is_correct' => false],
                            ['choice_text' => 'Un seuil de stop conditionnant la poursuite à des métriques de santé par région', 'is_correct' => false],
                            ['choice_text' => 'Les dépendances et domaines de panne partagés, y compris alimentation, routage et contrôle', 'is_correct' => false],
                            ['choice_text' => 'Définir des critères d’escalade, des rôles et des canaux avant l’incident', 'is_correct' => true],
                        ],
                        'explanation' => 'Des seuils connus accélèrent la mobilisation des compétences nécessaires.',
                    ],
                    [
                        'question' => 'Un serveur compromis est encore accessible, mais l’équipe craint de perdre la mémoire volatile. La décision la plus cohérente avec ces contraintes est :',
                        'choices' => [
                            ['choice_text' => 'Suivre une procédure de collecte contrôlée avant les actions qui peuvent effacer les artefacts', 'is_correct' => true],
                            ['choice_text' => 'Décomposer le temps par dépendance, identifier le goulot et retester après correction', 'is_correct' => false],
                            ['choice_text' => 'Vérifier périodiquement l’accès, individualiser les identités et journaliser les opérations de secours', 'is_correct' => false],
                            ['choice_text' => 'Suspendre la vague, préserver les faits et évaluer l’état du cluster avant toute nouvelle action', 'is_correct' => false],
                        ],
                        'explanation' => 'La collecte doit être planifiée avec l’équipe de réponse pour préserver les preuves et éviter une contamination supplémentaire.',
                    ],
                    [
                        'question' => 'Une remédiation automatique échoue sur plusieurs régions et le nombre d’erreurs augmente après chaque nouvelle vague. Le contrôle qui sécurise cette opération consiste à :',
                        'choices' => [
                            ['choice_text' => 'Appliquer une mitigation réversible validée pour rétablir un service acceptable, puis analyser la cause', 'is_correct' => false],
                            ['choice_text' => 'Un seuil de stop conditionnant la poursuite à des métriques de santé par région', 'is_correct' => true],
                            ['choice_text' => 'Une alerte seulement après la dernière vague', 'is_correct' => false],
                            ['choice_text' => 'Analyser les conditions, garde-fous et facteurs systémiques qui ont rendu l’erreur possible', 'is_correct' => false],
                        ],
                        'explanation' => 'Les vagues doivent s’arrêter lorsque les signaux sortent des seuils prévus.',
                    ],
                    [
                        'question' => 'Une postmortem attribue l’incident à « l’erreur d’un opérateur » et ne propose aucun changement de système. La lacune que révèle ce scénario est :',
                        'choices' => [
                            ['choice_text' => 'Définir des critères d’escalade, des rôles et des canaux avant l’incident', 'is_correct' => false],
                            ['choice_text' => 'Les dépendances et domaines de panne partagés, y compris alimentation, routage et contrôle', 'is_correct' => false],
                            ['choice_text' => 'Analyser les conditions, garde-fous et facteurs systémiques qui ont rendu l’erreur possible', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les journaux de l’incident', 'is_correct' => false],
                        ],
                        'explanation' => 'Une analyse sans blâme cherche comment le système peut éviter ou limiter la répétition, plutôt que s’arrêter à un individu.',
                    ],
                    [
                        'question' => 'Un plan de disaster recovery annonce un RTO de 30 minutes, mais le test réel prend 3 heures. Le déroulement reste incomplet sans l’étape suivante :',
                        'choices' => [
                            ['choice_text' => 'Masquer les résultats du test', 'is_correct' => false],
                            ['choice_text' => 'Suivre une procédure de collecte contrôlée avant les actions qui peuvent effacer les artefacts', 'is_correct' => false],
                            ['choice_text' => 'Un seuil de stop conditionnant la poursuite à des métriques de santé par région', 'is_correct' => false],
                            ['choice_text' => 'Décomposer le temps par dépendance, identifier le goulot et retester après correction', 'is_correct' => true],
                        ],
                        'explanation' => 'Le RTO doit être vérifié dans des exercices qui couvrent la chaîne de récupération complète.',
                    ],
                    [
                        'question' => 'Les équipes annoncent « cause racine : réseau » alors que seules des pertes entre deux services sont confirmées. Pour communiquer avec précision, décrivez les faits confirmés ainsi :',
                        'choices' => [
                            ['choice_text' => 'Rapporter les observations comme faits, la cause réseau comme hypothèse et les prochaines vérifications', 'is_correct' => true],
                            ['choice_text' => 'Déclarer la cause certaine pour éviter les questions', 'is_correct' => false],
                            ['choice_text' => 'Décomposer le temps par dépendance, identifier le goulot et retester après correction', 'is_correct' => false],
                            ['choice_text' => 'Vérifier périodiquement l’accès, individualiser les identités et journaliser les opérations de secours', 'is_correct' => false],
                        ],
                        'explanation' => 'Distinguer fait et hypothèse permet une communication précise sans prétendre connaître une cause non démontrée.',
                    ],
                    [
                        'question' => 'Un accès hors bande est disponible mais les identifiants sont partagés et non testés. Pour éviter l’aggravation, l’équipe doit :',
                        'choices' => [
                            ['choice_text' => 'Les dépendances et domaines de panne partagés, y compris alimentation, routage et contrôle', 'is_correct' => false],
                            ['choice_text' => 'Vérifier périodiquement l’accès, individualiser les identités et journaliser les opérations de secours', 'is_correct' => true],
                            ['choice_text' => 'Désactiver le contrôle d’accès pour les urgences', 'is_correct' => false],
                            ['choice_text' => 'Rapporter les observations comme faits, la cause réseau comme hypothèse et les prochaines vérifications', 'is_correct' => false],
                        ],
                        'explanation' => 'Un chemin de secours doit fonctionner tout en restant protégé et auditable.',
                    ],
                ],
            ],
            [
                'title' => 'Multi-tenant, isolation et gouvernance',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Multi-tenant, isolation et gouvernance.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'qs' => [
                    [
                        'question' => 'Un tenant bruyant consomme CPU et I/O et dégrade les voisins. L’analyse à mener avant cette décision porte sur :',
                        'choices' => [
                            ['choice_text' => 'Des contrôles d’accès vérifiés au niveau du tenant, avec tests de séparation et défense en profondeur', 'is_correct' => false],
                            ['choice_text' => 'Collecter les métriques par groupe de ressources ou identité de tenant, avec cardinalité maîtrisée', 'is_correct' => false],
                            ['choice_text' => 'Quotas/cgroups, métriques par tenant et règles d’équité définies', 'is_correct' => true],
                            ['choice_text' => 'Une hausse permanente de priorité du tenant bruyant', 'is_correct' => false],
                        ],
                        'explanation' => 'L’isolation des ressources et la télémétrie dimensionnée par tenant aident à contenir et attribuer la contention.',
                    ],
                    [
                        'question' => 'Des données de clients sont stockées sur le même filesystem. Pour répondre au besoin décrit, retenez :',
                        'choices' => [
                            ['choice_text' => 'Le nom du répertoire est difficile à deviner', 'is_correct' => false],
                            ['choice_text' => 'Les données sont sur le même disque mais sans permissions', 'is_correct' => false],
                            ['choice_text' => 'La séparation des couleurs dans le tableau de bord', 'is_correct' => false],
                            ['choice_text' => 'Des contrôles d’accès vérifiés au niveau du tenant, avec tests de séparation et défense en profondeur', 'is_correct' => true],
                        ],
                        'explanation' => 'La mutualisation physique exige des frontières d’autorisation robustes ; l’obscurité du nom n’est pas une protection.',
                    ],
                    [
                        'question' => 'Un OOM se produit dans un cgroup dédié à un tenant, mais l’hôte reste sain. Avant de conclure, confirmez :',
                        'choices' => [
                            ['choice_text' => 'Que la limite et le mécanisme de sélection des processus ont contenu l’effet au bon périmètre', 'is_correct' => true],
                            ['choice_text' => 'Que les alertes OOM sont supprimées', 'is_correct' => false],
                            ['choice_text' => 'La compromission du processus peut traverser les frontières de tenant', 'is_correct' => false],
                            ['choice_text' => 'Un tenant peut remplir le filesystem partagé et perturber les autres', 'is_correct' => false],
                        ],
                        'explanation' => 'Le périmètre effectif de la limite détermine si la panne reste locale ou affecte d’autres workloads.',
                    ],
                    [
                        'question' => 'Les métriques de CPU sont agrégées par cluster, sans dimension de tenant. Un noisy neighbor est suspecté. Pour réduire ce risque, l’équipe doit :',
                        'choices' => [
                            ['choice_text' => 'Les droits, validations et séparation appliqués par le daemon privilégié', 'is_correct' => false],
                            ['choice_text' => 'Collecter les métriques par groupe de ressources ou identité de tenant, avec cardinalité maîtrisée', 'is_correct' => true],
                            ['choice_text' => 'Quotas/cgroups, métriques par tenant et règles d’équité définies', 'is_correct' => false],
                            ['choice_text' => 'Que la limite et le mécanisme de sélection des processus ont contenu l’effet au bon périmètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Des métriques attribuées permettent de relier l’usage à un tenant tout en évitant de collecter des données sensibles inutiles.',
                    ],
                    [
                        'question' => 'Une application multi-tenant partage un compte système avec accès en écriture à tous les espaces. La lacune que révèle ce scénario est :',
                        'choices' => [
                            ['choice_text' => 'Les namespaces ne peuvent jamais isoler de processus', 'is_correct' => false],
                            ['choice_text' => 'Définir un mécanisme transparent de demande/ajustement de capacité et vérifier les impacts sur les SLO voisins', 'is_correct' => false],
                            ['choice_text' => 'La compromission du processus peut traverser les frontières de tenant', 'is_correct' => true],
                            ['choice_text' => 'Le compte commun garantit l’isolation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le périmètre des droits du processus peut permettre une fuite croisée malgré la logique applicative.',
                    ],
                    [
                        'question' => 'Une plateforme offre un quota CPU mais aucun contrôle de stockage temporaire. La panne qui reste possible malgré ce quota est :',
                        'choices' => [
                            ['choice_text' => 'Un tenant ne peut plus créer de processus', 'is_correct' => false],
                            ['choice_text' => 'Les effets indirects et limites partagées entre tenants et services de plateforme', 'is_correct' => false],
                            ['choice_text' => 'Expliquer la frontière réelle et évaluer une isolation plus forte, comme une VM dédiée, selon le niveau exigé', 'is_correct' => false],
                            ['choice_text' => 'Un tenant peut remplir le filesystem partagé et perturber les autres', 'is_correct' => true],
                        ],
                        'explanation' => 'Une politique d’équité doit couvrir les ressources partagées pertinentes, pas seulement le CPU.',
                    ],
                    [
                        'question' => 'Une équipe place des tenants sensibles dans des namespaces mais conserve un daemon privilégié commun qui monte leurs volumes. Avant d’accepter ce modèle, révisez :',
                        'choices' => [
                            ['choice_text' => 'Les droits, validations et séparation appliqués par le daemon privilégié', 'is_correct' => true],
                            ['choice_text' => 'Les effets indirects et limites partagées entre tenants et services de plateforme', 'is_correct' => false],
                            ['choice_text' => 'Des contrôles d’accès vérifiés au niveau du tenant, avec tests de séparation et défense en profondeur', 'is_correct' => false],
                            ['choice_text' => 'Quotas/cgroups, métriques par tenant et règles d’équité définies', 'is_correct' => false],
                        ],
                        'explanation' => 'Un composant privilégié partagé peut devenir une passerelle entre tenants et doit faire partie du modèle de menace.',
                    ],
                    [
                        'question' => 'Un tenant approche régulièrement son quota pendant les pics métier légitimes. Pour répondre au besoin décrit, retenez :',
                        'choices' => [
                            ['choice_text' => 'Un tenant peut remplir le filesystem partagé et perturber les autres', 'is_correct' => false],
                            ['choice_text' => 'Définir un mécanisme transparent de demande/ajustement de capacité et vérifier les impacts sur les SLO voisins', 'is_correct' => true],
                            ['choice_text' => 'Supprimer son quota sans analyse', 'is_correct' => false],
                            ['choice_text' => 'La compromission du processus peut traverser les frontières de tenant', 'is_correct' => false],
                        ],
                        'explanation' => 'La gouvernance doit permettre une évolution justifiée tout en préservant l’équité et la capacité globale.',
                    ],
                    [
                        'question' => 'Une analyse attribue la saturation à un tenant, mais le service d’authentification commun est aussi ralenti. La dépendance qui bloque l’opération est :',
                        'choices' => [
                            ['choice_text' => 'Collecter les métriques par groupe de ressources ou identité de tenant, avec cardinalité maîtrisée', 'is_correct' => false],
                            ['choice_text' => 'Que la limite et le mécanisme de sélection des processus ont contenu l’effet au bon périmètre', 'is_correct' => false],
                            ['choice_text' => 'Les effets indirects et limites partagées entre tenants et services de plateforme', 'is_correct' => true],
                            ['choice_text' => 'Uniquement les fichiers du tenant le plus actif', 'is_correct' => false],
                        ],
                        'explanation' => 'La mutualisation crée des dépendances qui peuvent propager la contention au-delà du processus le plus consommateur.',
                    ],
                    [
                        'question' => 'Un client demande une garantie d’isolation stricte que la plateforme actuelle fondée sur un kernel partagé ne peut démontrer. Pour répondre au besoin décrit, retenez :',
                        'choices' => [
                            ['choice_text' => 'Affirmer que namespace signifie isolation absolue', 'is_correct' => false],
                            ['choice_text' => 'Définir un mécanisme transparent de demande/ajustement de capacité et vérifier les impacts sur les SLO voisins', 'is_correct' => false],
                            ['choice_text' => 'Les droits, validations et séparation appliqués par le daemon privilégié', 'is_correct' => false],
                            ['choice_text' => 'Expliquer la frontière réelle et évaluer une isolation plus forte, comme une VM dédiée, selon le niveau exigé', 'is_correct' => true],
                        ],
                        'explanation' => 'Les garanties doivent refléter le modèle de sécurité réel ; un kernel partagé ne correspond pas à tous les niveaux de menace.',
                    ],
                ],
            ],
            [
                'title' => 'Configuration immuable et chaîne de livraison',
                'description' => 'Situations pratiques et décisions d’exploitation autour du thème : Configuration immuable et chaîne de livraison.',
                'difficulty' => 'Professional',
                'duration' => 25,
                'passing_score' => 70,
                'total_marks' => 10,
                'qs' => [
                    [
                        'question' => 'Un serveur est reconstruit après incident et revient avec une configuration différente de celle d’avant. Pour absorber cette charge, prévoyez :',
                        'choices' => [
                            ['choice_text' => 'Une configuration et des artefacts versionnés permettant de reconstruire l’état attendu', 'is_correct' => true],
                            ['choice_text' => 'Valider l’image et la configuration dans le pipeline avant promotion', 'is_correct' => false],
                            ['choice_text' => 'L’empreinte et la provenance de l’image avec la version de configuration et l’horodatage de déploiement', 'is_correct' => false],
                            ['choice_text' => 'Prévoir des modes d’application, exemptions temporaires tracées et coordination avec l’incident', 'is_correct' => false],
                        ],
                        'explanation' => 'La reproductibilité repose sur des sources de vérité et artefacts identifiés, pas sur la mémoire d’un opérateur.',
                    ],
                    [
                        'question' => 'Un administrateur modifie manuellement un fichier sur une instance immuable pour corriger une urgence. Après cette intervention d’urgence, la suite à appliquer est :',
                        'choices' => [
                            ['choice_text' => 'Une portée trop large qui augmente l’exposition et rend l’exception difficile à retirer', 'is_correct' => false],
                            ['choice_text' => 'Tracer la mitigation, intégrer le correctif à la source, puis reconstruire ou remplacer l’instance', 'is_correct' => true],
                            ['choice_text' => 'Une configuration et des artefacts versionnés permettant de reconstruire l’état attendu', 'is_correct' => false],
                            ['choice_text' => 'Limiter les différences inattendues entre builds et faciliter l’audit de l’artefact', 'is_correct' => false],
                        ],
                        'explanation' => 'Une correction locale non intégrée crée une dérive et sera perdue ou reproduite de façon incohérente.',
                    ],
                    [
                        'question' => 'Un pipeline télécharge une version flottante d’un paquet à chaque build. Pour rendre le build reproductible, verrouillez :',
                        'choices' => [
                            ['choice_text' => 'Tracer la mitigation, intégrer le correctif à la source, puis reconstruire ou remplacer l’instance', 'is_correct' => false],
                            ['choice_text' => 'On ne peut pas identifier avec certitude le contenu effectivement testé ou déployé', 'is_correct' => false],
                            ['choice_text' => 'Limiter les différences inattendues entre builds et faciliter l’audit de l’artefact', 'is_correct' => true],
                            ['choice_text' => 'Supprimer la provenance du build', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verrouillage rend les entrées reproductibles, tout en permettant des mises à jour explicites et revues.',
                    ],
                    [
                        'question' => 'Une politique de conformité est évaluée uniquement après mise en production. La menace prioritaire pour ce service est :',
                        'choices' => [
                            ['choice_text' => 'Scanner seulement le nom de l’image', 'is_correct' => false],
                            ['choice_text' => 'Tester les signatures, chemins de récupération et compatibilité matérielle sur un échantillon représentatif', 'is_correct' => false],
                            ['choice_text' => 'Un canary, des seuils d’arrêt, une limite de concurrence et une procédure de retour testée', 'is_correct' => false],
                            ['choice_text' => 'Valider l’image et la configuration dans le pipeline avant promotion', 'is_correct' => true],
                        ],
                        'explanation' => 'Les contrôles en amont détectent les écarts avant qu’ils soient déployés sur la flotte.',
                    ],
                    [
                        'question' => 'Une exception de configuration concerne un seul groupe de serveurs mais est appliquée globalement. Le défaut qui découle de ce choix est :',
                        'choices' => [
                            ['choice_text' => 'Une portée trop large qui augmente l’exposition et rend l’exception difficile à retirer', 'is_correct' => true],
                            ['choice_text' => 'Valider l’image et la configuration dans le pipeline avant promotion', 'is_correct' => false],
                            ['choice_text' => 'Une configuration et des artefacts versionnés permettant de reconstruire l’état attendu', 'is_correct' => false],
                            ['choice_text' => 'L’empreinte et la provenance de l’image avec la version de configuration et l’horodatage de déploiement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les exceptions doivent être limitées au périmètre nécessaire et associées à une revue.',
                    ],
                    [
                        'question' => 'Un tag d’image OS est réutilisé pour publier un contenu différent à chaque build. Le contrôle manquant dans cette situation est :',
                        'choices' => [
                            ['choice_text' => 'Une portée trop large qui augmente l’exposition et rend l’exception difficile à retirer', 'is_correct' => false],
                            ['choice_text' => 'On ne peut pas identifier avec certitude le contenu effectivement testé ou déployé', 'is_correct' => true],
                            ['choice_text' => 'Tracer la mitigation, intégrer le correctif à la source, puis reconstruire ou remplacer l’instance', 'is_correct' => false],
                            ['choice_text' => 'Limiter les différences inattendues entre builds et faciliter l’audit de l’artefact', 'is_correct' => false],
                        ],
                        'explanation' => 'Un identifiant immuable ou une empreinte d’artefact facilite la traçabilité et les retours arrière.',
                    ],
                    [
                        'question' => 'Une dérive est détectée mais l’outil la corrige automatiquement pendant une intervention d’incident. Avant de poursuivre, l’équipe doit vérifier :',
                        'choices' => [
                            ['choice_text' => 'Tester les signatures, chemins de récupération et compatibilité matérielle sur un échantillon représentatif', 'is_correct' => false],
                            ['choice_text' => 'Un canary, des seuils d’arrêt, une limite de concurrence et une procédure de retour testée', 'is_correct' => false],
                            ['choice_text' => 'Prévoir des modes d’application, exemptions temporaires tracées et coordination avec l’incident', 'is_correct' => true],
                            ['choice_text' => 'On ne peut pas identifier avec certitude le contenu effectivement testé ou déployé', 'is_correct' => false],
                        ],
                        'explanation' => 'La convergence automatique doit être coordonnée avec des changements temporaires contrôlés pour éviter une seconde panne.',
                    ],
                    [
                        'question' => 'Une mise à jour du bootloader change la chaîne de démarrage de tous les hôtes. Le contrôle qui sécurise cette opération consiste à :',
                        'choices' => [
                            ['choice_text' => 'Prévoir des modes d’application, exemptions temporaires tracées et coordination avec l’incident', 'is_correct' => false],
                            ['choice_text' => 'Une configuration et des artefacts versionnés permettant de reconstruire l’état attendu', 'is_correct' => false],
                            ['choice_text' => 'Tracer la mitigation, intégrer le correctif à la source, puis reconstruire ou remplacer l’instance', 'is_correct' => false],
                            ['choice_text' => 'Tester les signatures, chemins de récupération et compatibilité matérielle sur un échantillon représentatif', 'is_correct' => true],
                        ],
                        'explanation' => 'Le bootloader est un composant critique ; une erreur peut rendre des hôtes indisponibles et compromettre la confiance au démarrage.',
                    ],
                    [
                        'question' => 'Une enquête doit déterminer quel artefact a été installé sur un hôte le jour d’une panne. Pour rendre l’incident traçable, enregistrez :',
                        'choices' => [
                            ['choice_text' => 'L’empreinte et la provenance de l’image avec la version de configuration et l’horodatage de déploiement', 'is_correct' => true],
                            ['choice_text' => 'Le nombre total d’alertes sans lien à l’hôte', 'is_correct' => false],
                            ['choice_text' => 'Valider l’image et la configuration dans le pipeline avant promotion', 'is_correct' => false],
                            ['choice_text' => 'Limiter les différences inattendues entre builds et faciliter l’audit de l’artefact', 'is_correct' => false],
                        ],
                        'explanation' => 'La provenance relie l’état exécuté aux entrées et changements qui l’ont produit.',
                    ],
                    [
                        'question' => 'Un pipeline de remédiation peut modifier 5 000 serveurs. Le contrôle qui sécurise cette opération consiste à :',
                        'choices' => [
                            ['choice_text' => 'On ne peut pas identifier avec certitude le contenu effectivement testé ou déployé', 'is_correct' => false],
                            ['choice_text' => 'Un canary, des seuils d’arrêt, une limite de concurrence et une procédure de retour testée', 'is_correct' => true],
                            ['choice_text' => 'Une exécution totale pour gagner du temps', 'is_correct' => false],
                            ['choice_text' => 'Une portée trop large qui augmente l’exposition et rend l’exception difficile à retirer', 'is_correct' => false],
                        ],
                        'explanation' => 'La limitation et l’observabilité d’une vague protègent contre une erreur de politique propagée à grande échelle.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                ['subject_id' => $subject->id, 'title' => $quizData['title']],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
                    'total_marks' => $quizData['total_marks'],
                    'is_active' => true,
                    'difficulty' => $quizData['difficulty'],
                ]
            );

            foreach ($quizData['qs'] as $index => $questionData) {
                $question = Question::updateOrCreate(
                    ['quiz_id' => $quiz->id, 'order' => $index + 1],
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
