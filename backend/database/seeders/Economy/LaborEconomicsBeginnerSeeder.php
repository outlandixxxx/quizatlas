<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class LaborEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'labor-economics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondamentaux du marché du travail',
                'description' => 'Quiz d’introduction sur l’offre de travail, la demande de travail, l’emploi et le rôle des salaires.',
                'duration' => 18,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Sur un marché du travail, que représente principalement la demande de travail d’une entreprise ?',
                        'explanation' => 'La demande de travail correspond à la quantité de travail que l’entreprise souhaite employer en fonction notamment du salaire et de la productivité attendue.',
                        'choices' => [
                            ['choice_text' => 'Le nombre de personnes qui souhaitent travailler', 'is_correct' => false],
                            ['choice_text' => 'La quantité de travail que l’entreprise souhaite embaucher', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de ménages qui reçoivent une pension', 'is_correct' => false],
                            ['choice_text' => 'La quantité de biens importés par l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du salaire, toutes choses égales par ailleurs, tend généralement à rendre le travail plus attractif pour une personne déjà disponible pour travailler. Cela concerne surtout :',
                        'explanation' => 'Un salaire plus élevé peut augmenter l’intérêt à participer au marché du travail. On parle ici de l’offre de travail des individus.',
                        'choices' => [
                            ['choice_text' => 'La demande de biens intermédiaires', 'is_correct' => false],
                            ['choice_text' => 'L’offre de travail', 'is_correct' => true],
                            ['choice_text' => 'La productivité du capital uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les exportations nationales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple décrit le mieux une situation de chômage ?',
                        'explanation' => 'Une personne au chômage n’a pas d’emploi mais est disponible pour travailler et recherche activement un emploi, selon la définition usuelle du chômage.',
                        'choices' => [
                            ['choice_text' => 'Une personne en emploi qui prend son congé annuel', 'is_correct' => false],
                            ['choice_text' => 'Une personne étudiante qui ne souhaite pas travailler', 'is_correct' => false],
                            ['choice_text' => 'Une personne sans emploi qui recherche activement un poste', 'is_correct' => true],
                            ['choice_text' => 'Une personne retraitée qui ne cherche plus d’emploi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi dit-on que la demande de travail est une demande dérivée ?',
                        'explanation' => 'Les entreprises demandent du travail parce qu’elles souhaitent produire des biens ou services. La demande de travail dépend donc de la demande de production.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle dépend des besoins de production de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle est toujours imposée par les salariés', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle existe uniquement dans le secteur public', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle est indépendante des ventes réalisées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise vend davantage de ses produits et conserve les autres conditions inchangées. Quel effet sur sa demande de travail est le plus plausible ?',
                        'explanation' => 'Une hausse des ventes augmente généralement les besoins de production. L’entreprise peut donc souhaiter employer davantage de travailleurs.',
                        'choices' => [
                            ['choice_text' => 'Une baisse automatique du nombre de travailleurs', 'is_correct' => false],
                            ['choice_text' => 'Aucune relation possible entre ventes et emploi', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation de la demande de travail', 'is_correct' => true],
                            ['choice_text' => 'La disparition du salaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le salaire versé à un salarié est avant tout :',
                        'explanation' => 'Le salaire est une rémunération du travail. Il peut être exprimé à l’heure, au mois, à la tâche ou selon d’autres modalités.',
                        'choices' => [
                            ['choice_text' => 'Une rémunération du travail', 'is_correct' => true],
                            ['choice_text' => 'Un impôt sur la consommation', 'is_correct' => false],
                            ['choice_text' => 'Un dividende versé aux actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Une subvention publique par définition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur mesure la part de la population en âge de travailler qui participe au marché du travail ?',
                        'explanation' => 'Le taux d’activité mesure la proportion de la population en âge de travailler qui est active, c’est-à-dire en emploi ou au chômage et à la recherche d’un emploi.',
                        'choices' => [
                            ['choice_text' => 'Le taux de profit', 'is_correct' => false],
                            ['choice_text' => 'Le taux d’activité', 'is_correct' => true],
                            ['choice_text' => 'Le taux d’inflation', 'is_correct' => false],
                            ['choice_text' => 'Le taux de change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une personne travaille 40 heures par semaine, elle est généralement classée comme :',
                        'explanation' => 'Une personne qui exerce une activité professionnelle rémunérée est comptée parmi les personnes en emploi, indépendamment du fait qu’elle travaille à temps plein ou à temps partiel.',
                        'choices' => [
                            ['choice_text' => 'Une personne inactive', 'is_correct' => false],
                            ['choice_text' => 'Une personne en emploi', 'is_correct' => true],
                            ['choice_text' => 'Une personne au chômage', 'is_correct' => false],
                            ['choice_text' => 'Une personne hors population active par définition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un marché concurrentiel du travail, si le salaire est fixé au-dessus du niveau qui équilibre l’offre et la demande de travail, quel phénomène peut apparaître ?',
                        'explanation' => 'Un salaire supérieur au niveau d’équilibre peut inciter davantage de personnes à offrir leur travail tandis que les entreprises demandent moins de travail, ce qui peut créer un excédent d’offre de travail.',
                        'choices' => [
                            ['choice_text' => 'Une pénurie certaine de travailleurs', 'is_correct' => false],
                            ['choice_text' => 'Un excédent d’offre de travail', 'is_correct' => true],
                            ['choice_text' => 'La disparition du marché du travail', 'is_correct' => false],
                            ['choice_text' => 'Une baisse automatique de la population active', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation distingue correctement emploi et population active ?',
                        'explanation' => 'La population active comprend les personnes en emploi et celles au chômage qui recherchent un emploi. L’emploi ne désigne que les personnes qui travaillent.',
                        'choices' => [
                            ['choice_text' => 'La population active comprend seulement les salariés', 'is_correct' => false],
                            ['choice_text' => 'L’emploi inclut les personnes en emploi, tandis que la population active comprend aussi les chômeurs', 'is_correct' => true],
                            ['choice_text' => 'L’emploi comprend les retraités', 'is_correct' => false],
                            ['choice_text' => 'Population active et emploi sont toujours exactement identiques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Salaires, offre et demande de travail',
                'description' => 'Applications simples pour comprendre comment les salaires, les compétences et la productivité influencent le marché du travail.',
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Une hausse durable de la productivité d’un groupe de travailleurs peut, toutes choses égales par ailleurs, :',
                        'explanation' => 'Une productivité plus élevée permet de produire davantage avec une même quantité de travail. Elle peut donc accroître la valeur du travail pour l’entreprise et soutenir une rémunération plus élevée.',
                        'choices' => [
                            ['choice_text' => 'Réduire nécessairement la valeur du travail', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la valeur produite par unité de travail', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement toute demande de travail', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute évolution des salaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel changement déplace le plus directement la demande de travail vers la droite pour une entreprise ?',
                        'explanation' => 'Une hausse de la demande pour le produit vendu par l’entreprise augmente son besoin de production et donc, en général, sa demande de travail.',
                        'choices' => [
                            ['choice_text' => 'Une baisse de la demande pour son produit', 'is_correct' => false],
                            ['choice_text' => 'Une hausse de la demande pour son produit', 'is_correct' => true],
                            ['choice_text' => 'Une baisse du temps de travail légal dans une autre branche', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du nombre de retraités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une formation professionnelle permet à une salariée d’acquérir une compétence recherchée et d’être plus productive. Il s’agit d’un investissement dans :',
                        'explanation' => 'Les connaissances et compétences acquises par une personne constituent du capital humain. Une formation peut augmenter sa productivité et ses perspectives d’emploi.',
                        'choices' => [
                            ['choice_text' => 'Le capital humain', 'is_correct' => true],
                            ['choice_text' => 'Le capital fixe uniquement', 'is_correct' => false],
                            ['choice_text' => 'La masse monétaire', 'is_correct' => false],
                            ['choice_text' => 'Le capital naturel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi deux métiers différents peuvent-ils offrir des salaires différents ?',
                        'explanation' => 'Les salaires peuvent différer en raison des compétences requises, de la productivité, des conditions de travail, de la rareté des qualifications ou encore de la demande relative pour certaines professions.',
                        'choices' => [
                            ['choice_text' => 'Parce que tous les emplois ont exactement la même productivité', 'is_correct' => false],
                            ['choice_text' => 'Uniquement parce que les salariés négocient de la même manière', 'is_correct' => false],
                            ['choice_text' => 'Parce que les caractéristiques et les demandes de compétences diffèrent selon les métiers', 'is_correct' => true],
                            ['choice_text' => 'Parce que le salaire n’a aucun lien avec le marché du travail', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un étudiant renonce à un emploi rémunéré pendant six mois pour suivre une formation. Dans cette décision, le salaire auquel il renonce constitue :',
                        'explanation' => 'Le coût d’opportunité d’un choix correspond à la valeur de la meilleure possibilité abandonnée. Ici, le revenu professionnel non perçu représente une partie du coût d’opportunité de la formation.',
                        'choices' => [
                            ['choice_text' => 'Un coût d’opportunité', 'is_correct' => true],
                            ['choice_text' => 'Une taxe sur le travail', 'is_correct' => false],
                            ['choice_text' => 'Un salaire différé garanti', 'is_correct' => false],
                            ['choice_text' => 'Une externalité positive', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Supposons qu’une entreprise ait moins besoin de travailleurs après l’introduction d’une machine qui remplace certaines tâches. La demande de travail pour les tâches concernées peut :',
                        'explanation' => 'Une technologie qui remplace directement certaines tâches peut réduire la quantité de travail nécessaire pour produire un même niveau de production dans ces tâches.',
                        'choices' => [
                            ['choice_text' => 'Augmenter nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Diminuer', 'is_correct' => true],
                            ['choice_text' => 'Devenir indépendante de la production', 'is_correct' => false],
                            ['choice_text' => 'Disparaître pour tous les métiers de l’économie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple illustre le mieux une amélioration de la productivité du travail ?',
                        'explanation' => 'La productivité du travail augmente lorsque davantage de production est réalisée avec une même quantité de travail, ou lorsque la même production est obtenue avec moins de travail.',
                        'choices' => [
                            ['choice_text' => 'Une équipe produit 120 unités au lieu de 100 avec le même nombre d’heures', 'is_correct' => true],
                            ['choice_text' => 'Une équipe travaille plus d’heures pour produire exactement la même quantité', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de salariés augmente sans changement de production', 'is_correct' => false],
                            ['choice_text' => 'Les prix des produits augmentent sans changement de production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une compétence devient soudainement très recherchée dans plusieurs entreprises. À court terme, si le nombre de travailleurs qualifiés reste limité, quel effet est plausible sur leur salaire ?',
                        'explanation' => 'Lorsque la demande pour une compétence augmente alors que l’offre de travailleurs qualifiés réagit peu à court terme, la rareté relative peut exercer une pression à la hausse sur les salaires.',
                        'choices' => [
                            ['choice_text' => 'Une baisse automatique des salaires', 'is_correct' => false],
                            ['choice_text' => 'Une hausse possible des salaires', 'is_correct' => true],
                            ['choice_text' => 'Une suppression des contrats de travail dans tous les secteurs', 'is_correct' => false],
                            ['choice_text' => 'Aucun effet possible sur la rémunération', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle relation est généralement attendue entre la productivité et le niveau de vie à long terme ?',
                        'explanation' => 'Une productivité plus élevée permet de produire davantage de biens et services par unité de travail. Elle constitue donc une base importante de l’augmentation durable des revenus réels et du niveau de vie.',
                        'choices' => [
                            ['choice_text' => 'Une productivité plus élevée peut soutenir une hausse du niveau de vie', 'is_correct' => true],
                            ['choice_text' => 'Une productivité plus élevée réduit toujours les revenus réels', 'is_correct' => false],
                            ['choice_text' => 'La productivité n’a aucun rapport avec les revenus', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de vie dépend uniquement du nombre de jours fériés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente les salaires uniquement pour attirer des candidats plus qualifiés. L’objectif décrit relève principalement de :',
                        'explanation' => 'Les entreprises peuvent ajuster les salaires pour attirer et conserver des travailleurs possédant les compétences dont elles ont besoin. Le salaire influence donc aussi la composition des candidats.',
                        'choices' => [
                            ['choice_text' => 'La gestion de la main-d’œuvre et le recrutement', 'is_correct' => true],
                            ['choice_text' => 'La fixation d’un taux de change', 'is_correct' => false],
                            ['choice_text' => 'La politique commerciale internationale', 'is_correct' => false],
                            ['choice_text' => 'La création de monnaie par la banque centrale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur tend à augmenter l’offre de travail d’une personne, toutes choses égales par ailleurs ?',
                        'explanation' => 'Des perspectives de rémunération plus élevées peuvent encourager une personne à entrer sur le marché du travail ou à augmenter son nombre d’heures travaillées, même si la réponse exacte peut dépendre de ses préférences.',
                        'choices' => [
                            ['choice_text' => 'La disparition de toute possibilité d’emploi', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration des perspectives de rémunération', 'is_correct' => true],
                            ['choice_text' => 'Une interdiction de travailler', 'is_correct' => false],
                            ['choice_text' => 'Une baisse certaine de tous les salaires', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Chômage et participation au marché du travail',
                'description' => 'S’entraîner à distinguer emploi, chômage, inactivité et participation au marché du travail.',
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Une personne perd son emploi et commence immédiatement à envoyer des candidatures. Elle appartient à quelle catégorie ?',
                        'explanation' => 'Une personne sans emploi qui recherche activement un emploi est comptée comme chômeuse et reste dans la population active.',
                        'choices' => [
                            ['choice_text' => 'Inactive', 'is_correct' => false],
                            ['choice_text' => 'Chômeuse', 'is_correct' => true],
                            ['choice_text' => 'Retraitée', 'is_correct' => false],
                            ['choice_text' => 'Employeuse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse du nombre de chômeurs ne signifie-t-elle pas toujours une amélioration du marché du travail ?',
                        'explanation' => 'Si certaines personnes cessent de chercher un emploi, elles peuvent sortir de la population active. Le nombre de chômeurs baisse alors sans qu’elles aient nécessairement retrouvé un emploi.',
                        'choices' => [
                            ['choice_text' => 'Parce que les chômeurs peuvent devenir inactifs en arrêtant leur recherche', 'is_correct' => true],
                            ['choice_text' => 'Parce que le chômage est toujours compté comme emploi', 'is_correct' => false],
                            ['choice_text' => 'Parce que les salaires sont exclus des statistiques', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une personne ne peut jamais changer de statut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le chômage frictionnel est principalement lié :',
                        'explanation' => 'Le chômage frictionnel provient des périodes normales de recherche entre deux emplois, d’une entrée sur le marché du travail ou d’un changement de poste.',
                        'choices' => [
                            ['choice_text' => 'Aux transitions et au temps de recherche d’un emploi', 'is_correct' => true],
                            ['choice_text' => 'À une guerre commerciale uniquement', 'is_correct' => false],
                            ['choice_text' => 'À l’absence totale de mobilité des travailleurs', 'is_correct' => false],
                            ['choice_text' => 'À une hausse générale des récoltes agricoles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le chômage structurel peut apparaître lorsque :',
                        'explanation' => 'Le chômage structurel peut résulter d’un décalage durable entre les compétences ou la localisation des travailleurs et les besoins des employeurs.',
                        'choices' => [
                            ['choice_text' => 'Les compétences demandées par les entreprises changent durablement', 'is_correct' => true],
                            ['choice_text' => 'Tous les travailleurs trouvent immédiatement un emploi', 'is_correct' => false],
                            ['choice_text' => 'Le marché du travail est fermé une seule journée', 'is_correct' => false],
                            ['choice_text' => 'Les vacances scolaires commencent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit le mieux le taux de chômage ?',
                        'explanation' => 'Le taux de chômage est la part des chômeurs dans la population active. Il ne se calcule pas en divisant le nombre de chômeurs par toute la population.',
                        'choices' => [
                            ['choice_text' => 'Chômeurs divisés par la population active', 'is_correct' => true],
                            ['choice_text' => 'Employés divisés par les retraités', 'is_correct' => false],
                            ['choice_text' => 'Chômeurs divisés par le nombre total d’entreprises', 'is_correct' => false],
                            ['choice_text' => 'Salaires divisés par le PIB', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une ville, 800 personnes font partie de la population active et 40 sont au chômage. Quel est le taux de chômage ?',
                        'explanation' => 'Le taux de chômage est égal à 40 / 800, soit 0,05. Exprimé en pourcentage, cela donne 5 %.',
                        'choices' => [
                            ['choice_text' => '2 %', 'is_correct' => false],
                            ['choice_text' => '4 %', 'is_correct' => false],
                            ['choice_text' => '5 %', 'is_correct' => true],
                            ['choice_text' => '8 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne qui étudie à temps plein et ne cherche pas d’emploi est généralement :',
                        'explanation' => 'Une personne sans emploi qui ne souhaite pas travailler ou ne recherche pas d’emploi est généralement classée parmi les inactifs et non parmi les chômeurs.',
                        'choices' => [
                            ['choice_text' => 'Dans la population active au chômage', 'is_correct' => false],
                            ['choice_text' => 'Dans la population inactive', 'is_correct' => true],
                            ['choice_text' => 'Dans la population en emploi', 'is_correct' => false],
                            ['choice_text' => 'Dans les personnes retraitées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse de la participation des femmes au marché du travail signifie principalement que :',
                        'explanation' => 'Une participation plus élevée signifie qu’une plus grande part de cette population est active, soit en emploi, soit au chômage et à la recherche d’un emploi.',
                        'choices' => [
                            ['choice_text' => 'Davantage de femmes sont présentes dans la population active', 'is_correct' => true],
                            ['choice_text' => 'Toutes les femmes ont nécessairement trouvé un emploi', 'is_correct' => false],
                            ['choice_text' => 'Le salaire de toutes les femmes est identique', 'is_correct' => false],
                            ['choice_text' => 'Le chômage disparaît automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à un chômage temporaire lié à une transition entre deux emplois ?',
                        'explanation' => 'Une période courte consacrée à chercher un nouveau poste après avoir quitté un emploi correspond à une situation typique de chômage frictionnel.',
                        'choices' => [
                            ['choice_text' => 'Une personne change d’emploi et cherche un nouveau poste pendant trois semaines', 'is_correct' => true],
                            ['choice_text' => 'Une profession disparaît durablement et aucune reconversion n’est engagée', 'is_correct' => false],
                            ['choice_text' => 'Une personne retraitée', 'is_correct' => false],
                            ['choice_text' => 'Une personne en emploi à temps partiel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la création d’emplois dans une région peut-elle augmenter temporairement le nombre de chômeurs ?',
                        'explanation' => 'De nouvelles offres peuvent attirer des personnes qui entraient auparavant dans l’inactivité. La population active augmente alors et le nombre de chômeurs peut monter avant que les recrutements ne soient finalisés.',
                        'choices' => [
                            ['choice_text' => 'Parce que de nouveaux arrivants ou inactifs peuvent commencer à chercher un emploi', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute création d’emploi détruit deux emplois', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux de chômage ne dépend jamais de la population active', 'is_correct' => false],
                            ['choice_text' => 'Parce que les salaires deviennent nécessairement nuls', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est le plus directement utilisé pour suivre la capacité d’une économie à mobiliser sa population en âge de travailler ?',
                        'explanation' => 'Le taux d’activité renseigne sur la part de la population en âge de travailler qui participe au marché du travail et permet donc d’observer sa mobilisation économique.',
                        'choices' => [
                            ['choice_text' => 'Le taux d’activité', 'is_correct' => true],
                            ['choice_text' => 'Le taux directeur', 'is_correct' => false],
                            ['choice_text' => 'Le taux de TVA', 'is_correct' => false],
                            ['choice_text' => 'Le taux de change nominal', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Salaire minimum et institutions du travail',
                'description' => 'Comprendre le rôle du salaire minimum, des règles du marché du travail et des institutions dans des situations simples.',
                'duration' => 24,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Le salaire minimum est avant tout :',
                        'explanation' => 'Le salaire minimum fixe un niveau légal de rémunération en dessous duquel un employeur ne peut pas rémunérer un salarié, selon le champ d’application de la règle concernée.',
                        'choices' => [
                            ['choice_text' => 'Un prix légal minimum du travail', 'is_correct' => true],
                            ['choice_text' => 'Un plafond légal des salaires', 'is_correct' => false],
                            ['choice_text' => 'Une taxe payée par le salarié à l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une subvention versée uniquement aux employeurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le modèle concurrentiel simple, qu’arrive-t-il si un salaire minimum contraignant est fixé au-dessus du salaire d’équilibre ?',
                        'explanation' => 'À un salaire plus élevé, davantage de personnes peuvent souhaiter travailler alors que les entreprises peuvent demander moins de travail. Cela peut créer un excédent d’offre de travail.',
                        'choices' => [
                            ['choice_text' => 'Un excédent d’offre de travail peut apparaître', 'is_correct' => true],
                            ['choice_text' => 'La demande de travail augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'Toutes les entreprises embauchent davantage', 'is_correct' => false],
                            ['choice_text' => 'Le chômage devient impossible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du salaire minimum peut avoir des effets différents selon les entreprises notamment parce que :',
                        'explanation' => 'Les entreprises n’emploient pas toutes les mêmes types de travailleurs ni les mêmes technologies. L’effet d’une hausse du salaire minimum dépend donc des caractéristiques du secteur et du marché du travail.',
                        'choices' => [
                            ['choice_text' => 'Toutes les entreprises produisent avec exactement la même technologie', 'is_correct' => false],
                            ['choice_text' => 'Les niveaux de productivité et les conditions de marché peuvent différer', 'is_correct' => true],
                            ['choice_text' => 'Le salaire minimum n’a jamais de relation avec les coûts', 'is_correct' => false],
                            ['choice_text' => 'Les salariés choisissent toujours le nombre d’employeurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un objectif fréquent des politiques de salaire minimum ?',
                        'explanation' => 'Le salaire minimum vise notamment à garantir un plancher de rémunération et à protéger les travailleurs contre des salaires jugés trop faibles, même si ses effets sur l’emploi sont débattus.',
                        'choices' => [
                            ['choice_text' => 'Garantir un plancher de rémunération', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute différence de salaire entre métiers', 'is_correct' => false],
                            ['choice_text' => 'Fixer les profits de toutes les entreprises', 'is_correct' => false],
                            ['choice_text' => 'Interdire le temps partiel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le salaire minimum légal est inférieur au salaire d’équilibre d’un marché donné, dans le modèle concurrentiel simple, il est dit :',
                        'explanation' => 'Lorsqu’il est fixé sous le niveau d’équilibre, le salaire minimum ne modifie pas directement l’équilibre du marché dans ce modèle. On dit qu’il n’est pas contraignant.',
                        'choices' => [
                            ['choice_text' => 'Qu’il est contraignant par définition', 'is_correct' => false],
                            ['choice_text' => 'Qu’il n’est pas contraignant', 'is_correct' => true],
                            ['choice_text' => 'Qu’il constitue un salaire maximum', 'is_correct' => false],
                            ['choice_text' => 'Qu’il supprime la demande de travail', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut réduire l’impact d’un salaire minimum sur le coût du travail pour une entreprise ?',
                        'explanation' => 'Si la productivité du travail augmente, la production obtenue par heure travaillée progresse également. Le coût par unité produite peut alors rester maîtrisé malgré un salaire horaire plus élevé.',
                        'choices' => [
                            ['choice_text' => 'Une baisse de la productivité du travail', 'is_correct' => false],
                            ['choice_text' => 'Une hausse de la productivité du travail', 'is_correct' => true],
                            ['choice_text' => 'Une réduction automatique des ventes', 'is_correct' => false],
                            ['choice_text' => 'La fermeture de tous les marchés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une réglementation impose des normes de sécurité plus strictes sur le lieu de travail. Dans l’analyse économique, ces règles peuvent aussi :',
                        'explanation' => 'Les normes de travail peuvent modifier les coûts supportés par les entreprises et les conditions proposées aux travailleurs. Elles influencent donc les décisions des deux côtés du marché.',
                        'choices' => [
                            ['choice_text' => 'Modifier certains coûts et conditions de travail', 'is_correct' => true],
                            ['choice_text' => 'N’avoir aucun effet possible sur les entreprises', 'is_correct' => false],
                            ['choice_text' => 'Fixer automatiquement tous les salaires de l’économie', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la productivité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les syndicats peuvent chercher à négocier collectivement :',
                        'explanation' => 'La négociation collective permet aux représentants des travailleurs de discuter des salaires, du temps de travail et d’autres conditions d’emploi avec les employeurs.',
                        'choices' => [
                            ['choice_text' => 'Des conditions d’emploi et des rémunérations', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le taux de change', 'is_correct' => false],
                            ['choice_text' => 'La météo pour les entreprises', 'is_correct' => false],
                            ['choice_text' => 'Le prix mondial du pétrole', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les règles du travail peuvent-elles avoir des effets sur l’emploi ?',
                        'explanation' => 'Les règles qui modifient les salaires, les coûts d’embauche ou les obligations liées aux postes peuvent influencer le nombre de travailleurs que les entreprises souhaitent employer.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles peuvent modifier les coûts et les conditions d’embauche', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’emploi est indépendant des décisions des entreprises', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles déterminent directement la productivité de chaque salarié', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles suppriment toujours l’offre de travail', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est le plus prudent lorsqu’on étudie l’effet d’un salaire minimum sur l’emploi ?',
                        'explanation' => 'L’effet réel dépend du niveau du salaire minimum et des caractéristiques du marché. L’analyse économique ne conduit pas à dire que toute hausse produit exactement le même effet dans tous les contextes.',
                        'choices' => [
                            ['choice_text' => 'L’effet est identique dans tous les secteurs et à tous les niveaux', 'is_correct' => false],
                            ['choice_text' => 'L’effet dépend notamment de la situation du marché du travail étudié', 'is_correct' => true],
                            ['choice_text' => 'Une hausse du salaire minimum supprime forcément tous les emplois', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du salaire minimum augmente forcément tous les emplois', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Capital humain, compétences et productivité',
                'description' => 'Explorer comment l’éducation, la formation, l’expérience et les compétences influencent la productivité et les revenus.',
                'duration' => 21,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Le capital humain désigne principalement :',
                        'explanation' => 'Le capital humain regroupe les connaissances, compétences, qualifications et autres capacités qui améliorent la capacité d’une personne à travailler et à produire.',
                        'choices' => [
                            ['choice_text' => 'Les machines détenues par les entreprises', 'is_correct' => false],
                            ['choice_text' => 'Les connaissances et compétences des personnes', 'is_correct' => true],
                            ['choice_text' => 'Les ressources naturelles d’un pays', 'is_correct' => false],
                            ['choice_text' => 'Les bâtiments publics uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’éducation peut-elle augmenter les revenus futurs d’un individu ?',
                        'explanation' => 'Une éducation supplémentaire peut accroître les compétences et la productivité. Ces compétences peuvent être valorisées sur le marché du travail par de meilleures possibilités d’emploi ou de rémunération.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut développer le capital humain', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle garantit automatiquement un emploi public', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle fixe légalement tous les salaires', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle élimine tous les risques professionnels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un salarié apprend à utiliser un nouveau logiciel et réalise ensuite une tâche en moitié moins de temps. Ce changement illustre surtout :',
                        'explanation' => 'Le salarié a acquis une compétence qui lui permet de produire le même résultat plus rapidement. Sa productivité du travail augmente donc.',
                        'choices' => [
                            ['choice_text' => 'Une baisse de productivité', 'is_correct' => false],
                            ['choice_text' => 'Une hausse de productivité', 'is_correct' => true],
                            ['choice_text' => 'Une baisse automatique des compétences', 'is_correct' => false],
                            ['choice_text' => 'Une diminution du capital humain', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans de nombreux métiers, l’expérience professionnelle peut augmenter la productivité parce qu’elle permet notamment :',
                        'explanation' => 'L’expérience peut améliorer la maîtrise des tâches, la résolution de problèmes et l’organisation du travail. Elle peut donc accroître la productivité, même si l’effet varie selon les métiers.',
                        'choices' => [
                            ['choice_text' => 'D’apprendre des méthodes plus efficaces', 'is_correct' => true],
                            ['choice_text' => 'De rendre les machines inutiles dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'De supprimer le besoin de formation pour toujours', 'is_correct' => false],
                            ['choice_text' => 'De fixer automatiquement le salaire légal', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation constitue un investissement dans le capital humain ?',
                        'explanation' => 'Une formation professionnelle représente un coût aujourd’hui mais peut augmenter les compétences et la productivité futures. C’est donc un investissement en capital humain.',
                        'choices' => [
                            ['choice_text' => 'Acheter un terrain agricole', 'is_correct' => false],
                            ['choice_text' => 'Suivre une formation de technicien', 'is_correct' => true],
                            ['choice_text' => 'Construire un entrepôt', 'is_correct' => false],
                            ['choice_text' => 'Acheter des obligations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle financer une formation générale de ses salariés ?',
                        'explanation' => 'Même si les compétences sont transférables à d’autres entreprises, la formation peut améliorer la productivité, la qualité du travail ou la capacité d’adaptation des salariés, ce qui peut être utile à l’employeur.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une formation ne produit jamais de valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’entreprise peut bénéficier d’une main-d’œuvre plus productive ou adaptable', 'is_correct' => true],
                            ['choice_text' => 'Parce que la formation augmente nécessairement le nombre d’heures travaillées', 'is_correct' => false],
                            ['choice_text' => 'Parce que les compétences ne servent qu’à l’école', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une formation coûte 2 000 dirhams et permet ensuite de gagner 300 dirhams supplémentaires par mois pendant plusieurs mois. Quel principe économique est illustré ?',
                        'explanation' => 'La formation est un investissement : une dépense est réalisée aujourd’hui en échange de bénéfices attendus dans le futur. Il faut comparer ses coûts et ses gains attendus.',
                        'choices' => [
                            ['choice_text' => 'Le principe du coût d’opportunité et de l’investissement', 'is_correct' => true],
                            ['choice_text' => 'Le principe d’une taxe à la consommation', 'is_correct' => false],
                            ['choice_text' => 'Le principe d’un quota d’importation', 'is_correct' => false],
                            ['choice_text' => 'Le principe d’une baisse automatique des salaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel lien entre compétences et chômage structurel est le plus direct ?',
                        'explanation' => 'Lorsque les emplois disponibles exigent des compétences différentes de celles que possèdent certains travailleurs, un décalage peut persister et produire du chômage structurel.',
                        'choices' => [
                            ['choice_text' => 'Le décalage entre compétences offertes et demandées peut prolonger le chômage', 'is_correct' => true],
                            ['choice_text' => 'Le chômage structurel disparaît dès qu’un salarié a de l’ancienneté', 'is_correct' => false],
                            ['choice_text' => 'Les compétences n’ont aucune importance pour les employeurs', 'is_correct' => false],
                            ['choice_text' => 'Le chômage structurel vient uniquement des congés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une entreprise, cinq salariés produisent ensemble 500 unités en une journée. Après une formation, les mêmes cinq salariés en produisent 600 dans la même durée. Que peut-on conclure ?',
                        'explanation' => 'Avec le même nombre de salariés et la même durée, la production passe de 500 à 600 unités. La productivité du travail a donc augmenté.',
                        'choices' => [
                            ['choice_text' => 'La productivité du travail a diminué de 20 %', 'is_correct' => false],
                            ['choice_text' => 'La productivité du travail a augmenté de 20 %', 'is_correct' => true],
                            ['choice_text' => 'La productivité est restée inchangée', 'is_correct' => false],
                            ['choice_text' => 'Le salaire de chaque salarié a forcément doublé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une qualification reconnue nationalement facilite l’accès à plusieurs professions. Cette qualification contribue surtout à :',
                        'explanation' => 'Une qualification reconnue rend les compétences plus lisibles pour les employeurs et peut faciliter la correspondance entre travailleurs et emplois.',
                        'choices' => [
                            ['choice_text' => 'La transparence et la reconnaissance des compétences', 'is_correct' => true],
                            ['choice_text' => 'La suppression de toute mobilité professionnelle', 'is_correct' => false],
                            ['choice_text' => 'La fixation des prix des biens de consommation', 'is_correct' => false],
                            ['choice_text' => 'La réduction automatique de la demande de travail', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel choix peut être considéré comme un investissement en capital humain même s’il ne conduit pas immédiatement à une hausse de salaire ?',
                        'explanation' => 'Une formation ou un apprentissage peut renforcer des compétences utiles plus tard. L’investissement en capital humain ne produit donc pas forcément un gain salarial immédiat.',
                        'choices' => [
                            ['choice_text' => 'Apprendre à utiliser un outil professionnel avant de l’intégrer au travail', 'is_correct' => true],
                            ['choice_text' => 'Réduire les heures de travail sans apprendre une nouvelle compétence', 'is_correct' => false],
                            ['choice_text' => 'Acheter un téléphone personnel', 'is_correct' => false],
                            ['choice_text' => 'Payer un loyer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsque des travailleurs très qualifiés migrent vers une région où leurs compétences sont rares, la région d’accueil peut bénéficier notamment de :',
                        'explanation' => 'L’arrivée de travailleurs qualifiés augmente l’offre de compétences disponibles localement et peut renforcer la production et certaines activités complémentaires.',
                        'choices' => [
                            ['choice_text' => 'Davantage de compétences disponibles', 'is_correct' => true],
                            ['choice_text' => 'Une suppression automatique de tous les emplois locaux', 'is_correct' => false],
                            ['choice_text' => 'Une baisse certaine de la productivité', 'is_correct' => false],
                            ['choice_text' => 'Une disparition de la demande de formation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Participation, choix professionnel et mobilité',
                'description' => 'Mettre en pratique les notions de participation, choix d’activité, mobilité et arbitrage entre travail et temps libre.',
                'duration' => 23,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Une personne qui choisit de ne pas chercher d’emploi parce qu’elle reprend des études sort, dans les statistiques du marché du travail, de :',
                        'explanation' => 'Si elle ne travaille pas et ne recherche pas d’emploi, elle est généralement classée comme inactive. Elle sort donc de la population active.',
                        'choices' => [
                            ['choice_text' => 'La population active', 'is_correct' => true],
                            ['choice_text' => 'La population en emploi seulement', 'is_correct' => false],
                            ['choice_text' => 'La population des employeurs', 'is_correct' => false],
                            ['choice_text' => 'La population des entreprises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le choix entre travailler plus et disposer de plus de temps libre est un exemple de :',
                        'explanation' => 'Le temps est limité. Consacrer davantage d’heures au travail peut procurer un revenu supplémentaire mais laisse moins de temps pour les loisirs ou d’autres activités.',
                        'choices' => [
                            ['choice_text' => 'Un arbitrage travail-loisir', 'is_correct' => true],
                            ['choice_text' => 'Une politique monétaire', 'is_correct' => false],
                            ['choice_text' => 'Une baisse de productivité automatique', 'is_correct' => false],
                            ['choice_text' => 'Un contrôle des importations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le salaire horaire augmente, pourquoi une personne peut-elle malgré tout choisir de travailler moins ?',
                        'explanation' => 'Un salaire plus élevé augmente le coût d’opportunité du temps libre, mais il augmente aussi le revenu disponible pour une même durée de travail. Selon ses préférences, une personne peut choisir davantage de loisir lorsque son revenu augmente.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’effet du revenu peut conduire à préférer davantage de temps libre', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un salaire plus élevé interdit le travail', 'is_correct' => false],
                            ['choice_text' => 'Parce que les heures de travail deviennent juridiquement nulles', 'is_correct' => false],
                            ['choice_text' => 'Parce que toute hausse de salaire réduit la richesse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un travailleur accepte un nouvel emploi dans une autre ville parce que son salaire y est plus élevé. Cette décision illustre :',
                        'explanation' => 'Le travailleur compare les avantages et les coûts du changement. Le salaire fait partie des bénéfices attendus, tandis que le déménagement et le transport peuvent constituer des coûts.',
                        'choices' => [
                            ['choice_text' => 'Une décision de mobilité professionnelle et géographique', 'is_correct' => true],
                            ['choice_text' => 'Une politique budgétaire', 'is_correct' => false],
                            ['choice_text' => 'Une baisse de la demande de travail', 'is_correct' => false],
                            ['choice_text' => 'Une création de monnaie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel coût peut freiner la migration d’un travailleur vers une région offrant un salaire plus élevé ?',
                        'explanation' => 'Un salaire plus élevé n’est pas le seul élément de décision. Les frais de déménagement, de transport, de logement ou les liens familiaux peuvent rendre la mobilité moins intéressante.',
                        'choices' => [
                            ['choice_text' => 'Les coûts de logement ou de déménagement', 'is_correct' => true],
                            ['choice_text' => 'Une baisse automatique de la productivité mondiale', 'is_correct' => false],
                            ['choice_text' => 'Une suppression du marché du travail', 'is_correct' => false],
                            ['choice_text' => 'Une hausse certaine de toutes les exportations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne accepte une offre d’emploi à temps partiel parce qu’elle souhaite aussi consacrer du temps aux études. Son choix combine principalement :',
                        'explanation' => 'Le temps partiel permet d’obtenir un revenu tout en conservant du temps pour une autre activité, ici les études. Il s’agit d’un arbitrage dans l’utilisation du temps.',
                        'choices' => [
                            ['choice_text' => 'Une activité professionnelle et une activité de formation', 'is_correct' => true],
                            ['choice_text' => 'Deux investissements financiers', 'is_correct' => false],
                            ['choice_text' => 'Une politique commerciale et une politique monétaire', 'is_correct' => false],
                            ['choice_text' => 'Une baisse simultanée de l’offre et de la demande de travail', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût de l’emploi n’est-il pas limité au salaire versé ?',
                        'explanation' => 'Pour l’employeur, le coût du travail peut aussi inclure des cotisations, avantages, coûts de recrutement, formation et autres éléments liés à l’emploi.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’employeur peut supporter d’autres coûts liés à l’emploi', 'is_correct' => true],
                            ['choice_text' => 'Parce que le salaire n’est jamais payé', 'is_correct' => false],
                            ['choice_text' => 'Parce que les entreprises ne comptent pas leurs dépenses', 'is_correct' => false],
                            ['choice_text' => 'Parce que les travailleurs financent toujours toutes les dépenses de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse des frais de transport entre domicile et travail peut rendre un emploi éloigné moins attractif. Pourquoi ?',
                        'explanation' => 'Le transport représente un coût monétaire et parfois temporel. Un emploi mieux payé peut donc devenir moins intéressant lorsque les coûts pour l’accepter augmentent.',
                        'choices' => [
                            ['choice_text' => 'Parce que le salaire net de tous les emplois baisse automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts liés à l’emploi réduisent son avantage réel', 'is_correct' => true],
                            ['choice_text' => 'Parce que le travail distant est toujours interdit', 'is_correct' => false],
                            ['choice_text' => 'Parce que la productivité disparaît', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel événement augmente directement la taille de la population active, toutes choses égales par ailleurs ?',
                        'explanation' => 'Lorsqu’une personne auparavant inactive commence à chercher activement un emploi, elle entre dans la population active, même si elle n’a pas encore trouvé de poste.',
                        'choices' => [
                            ['choice_text' => 'Une personne inactive commence à rechercher un emploi', 'is_correct' => true],
                            ['choice_text' => 'Un retraité arrête de chercher un emploi', 'is_correct' => false],
                            ['choice_text' => 'Un salarié prend un congé annuel', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise ferme pendant une journée fériée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un jeune diplômé choisit entre un emploi dans son domaine, moins payé mais formateur, et un emploi mieux payé sans perspective de nouvelles compétences. Son choix relève notamment d’un arbitrage entre :',
                        'explanation' => 'Les emplois diffèrent par le salaire immédiat mais aussi par leurs perspectives d’apprentissage et de carrière. Une décision rationnelle peut donc comparer les gains présents et futurs.',
                        'choices' => [
                            ['choice_text' => 'Revenus immédiats et avantages futurs', 'is_correct' => true],
                            ['choice_text' => 'Importations et exportations uniquement', 'is_correct' => false],
                            ['choice_text' => 'Inflation et taux de change uniquement', 'is_correct' => false],
                            ['choice_text' => 'Monnaie et réserves de change uniquement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Différences salariales et structure des emplois',
                'description' => 'Analyser simplement les écarts de rémunération, les qualifications, les conditions de travail et la structure des professions.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel facteur peut expliquer une différence de salaire entre deux professions ?',
                        'explanation' => 'Les métiers peuvent exiger des niveaux de qualification différents ou présenter des conditions de travail et des risques différents, ce qui peut contribuer aux écarts de rémunération.',
                        'choices' => [
                            ['choice_text' => 'Le niveau de qualification requis', 'is_correct' => true],
                            ['choice_text' => 'Le fait que tous les emplois aient exactement le même risque', 'is_correct' => false],
                            ['choice_text' => 'Une égalité parfaite de l’offre et de la demande dans tous les métiers', 'is_correct' => false],
                            ['choice_text' => 'L’absence totale de compétences', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un emploi de nuit est payé davantage qu’un emploi identique de jour, toutes choses égales par ailleurs. Une explication possible est :',
                        'explanation' => 'Une rémunération supérieure peut compenser des conditions de travail moins attractives, par exemple des horaires nocturnes. On parle de différences compensatoires liées aux caractéristiques de l’emploi.',
                        'choices' => [
                            ['choice_text' => 'Une compensation pour des conditions de travail moins attractives', 'is_correct' => true],
                            ['choice_text' => 'Une baisse automatique de la productivité', 'is_correct' => false],
                            ['choice_text' => 'Une taxe sur les loisirs', 'is_correct' => false],
                            ['choice_text' => 'Une interdiction des salaires de jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la rareté d’une compétence peut-elle faire monter son salaire ?',
                        'explanation' => 'Lorsque peu de travailleurs possèdent une compétence recherchée, l’offre de cette compétence est limitée. Les employeurs peuvent alors être prêts à payer davantage pour l’attirer.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une offre limitée rencontre une demande importante', 'is_correct' => true],
                            ['choice_text' => 'Parce que la compétence devient inutile', 'is_correct' => false],
                            ['choice_text' => 'Parce que les salaires sont indépendants de la rareté', 'is_correct' => false],
                            ['choice_text' => 'Parce que les travailleurs cessent tous de produire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une profession devient moins demandée à cause d’une nouvelle technologie. À compétences inchangées, quelle pression peut apparaître sur les salaires de cette profession ?',
                        'explanation' => 'Si la demande de travail pour une profession baisse et que les autres facteurs restent stables, la pression du marché peut conduire à des salaires plus faibles ou à des difficultés d’emploi.',
                        'choices' => [
                            ['choice_text' => 'Une pression à la baisse', 'is_correct' => true],
                            ['choice_text' => 'Une hausse certaine des salaires', 'is_correct' => false],
                            ['choice_text' => 'La disparition de toute offre de travail', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale de changement possible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé distingue correctement une différence salariale brute d’une différence salariale entre travailleurs comparables ?',
                        'explanation' => 'Une différence brute compare simplement des salaires. Pour comparer des travailleurs plus similaires, on peut tenir compte de caractéristiques comme l’expérience, les qualifications, le métier ou les heures travaillées.',
                        'choices' => [
                            ['choice_text' => 'La différence brute ne contrôle pas nécessairement les caractéristiques des travailleurs', 'is_correct' => true],
                            ['choice_text' => 'La différence brute élimine toujours tous les facteurs individuels', 'is_correct' => false],
                            ['choice_text' => 'Une différence salariale ne peut jamais être mesurée', 'is_correct' => false],
                            ['choice_text' => 'Deux salaires sont identiques dès que les travailleurs ont le même âge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux salariés ont le même métier et la même expérience, mais l’un travaille 20 heures et l’autre 40 heures par semaine. Une comparaison simple de leur revenu mensuel peut être trompeuse parce que :',
                        'explanation' => 'Le revenu total dépend du nombre d’heures travaillées. Pour comparer les rémunérations, il peut être plus pertinent de regarder le salaire horaire lorsque les durées de travail diffèrent.',
                        'choices' => [
                            ['choice_text' => 'Le nombre d’heures travaillées diffère', 'is_correct' => true],
                            ['choice_text' => 'Le salaire ne dépend jamais du temps de travail', 'is_correct' => false],
                            ['choice_text' => 'Le métier devient différent juridiquement', 'is_correct' => false],
                            ['choice_text' => 'Le revenu mensuel est toujours égal au salaire horaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La segmentation du marché du travail peut être illustrée par :',
                        'explanation' => 'Une segmentation existe lorsque certains groupes de travailleurs connaissent des conditions d’emploi ou des possibilités de mobilité différentes, par exemple entre emplois formels et informels.',
                        'choices' => [
                            ['choice_text' => 'Une séparation entre des emplois offrant des conditions très différentes', 'is_correct' => true],
                            ['choice_text' => 'Une situation où tous les emplois sont parfaitement identiques', 'is_correct' => false],
                            ['choice_text' => 'La suppression des différences de compétences', 'is_correct' => false],
                            ['choice_text' => 'La disparition de tous les contrats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un secteur où les travailleurs doivent supporter davantage de risques physiques, une rémunération plus élevée peut servir à :',
                        'explanation' => 'Les différences de rémunération peuvent compenser certaines caractéristiques désagréables ou risquées des emplois. Le risque du poste fait partie des conditions non salariales du travail.',
                        'choices' => [
                            ['choice_text' => 'Compenser partiellement le risque du poste', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tout accident de travail', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement la productivité', 'is_correct' => false],
                            ['choice_text' => 'Fixer le prix des biens de consommation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise propose une prime aux salariés qui atteignent un objectif de production. Cette prime vise notamment à :',
                        'explanation' => 'Une rémunération liée à la performance peut inciter les travailleurs à fournir davantage d’efforts lorsque l’effort influence le résultat mesuré.',
                        'choices' => [
                            ['choice_text' => 'Créer une incitation liée à la performance', 'is_correct' => true],
                            ['choice_text' => 'Réduire la productivité par définition', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de fixer des objectifs', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute variation du revenu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quand une profession devient plus attractive auprès des jeunes diplômés, l’augmentation de l’offre de travailleurs à terme peut exercer quelle pression sur les salaires, toutes choses égales par ailleurs ?',
                        'explanation' => 'Une offre de travail plus importante, à demande donnée, peut réduire la rareté de la compétence et exercer une pression à la baisse sur le salaire d’équilibre.',
                        'choices' => [
                            ['choice_text' => 'Une pression possible à la baisse', 'is_correct' => true],
                            ['choice_text' => 'Une hausse certaine des salaires', 'is_correct' => false],
                            ['choice_text' => 'La suppression de toute embauche', 'is_correct' => false],
                            ['choice_text' => 'Une disparition du capital humain', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un emploi exige une certification rare obtenue après plusieurs années d’études. L’un des facteurs économiques pouvant contribuer à son salaire élevé est :',
                        'explanation' => 'Une certification rare demande du temps et des efforts d’acquisition. Si les employeurs recherchent cette qualification, sa rareté relative peut soutenir une rémunération plus élevée.',
                        'choices' => [
                            ['choice_text' => 'La rareté et le coût d’acquisition de la qualification', 'is_correct' => true],
                            ['choice_text' => 'L’absence totale de demande pour la qualification', 'is_correct' => false],
                            ['choice_text' => 'Le fait que toutes les professions aient le même niveau de formation', 'is_correct' => false],
                            ['choice_text' => 'La suppression de l’offre de travail', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Emploi informel et marché du travail',
                'description' => 'Découvrir les caractéristiques de l’emploi informel, ses avantages immédiats, ses limites et son rôle dans les économies où il est présent.',
                'duration' => 19,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quel exemple correspond le mieux à un emploi informel ?',
                        'explanation' => 'L’emploi informel regroupe des activités qui échappent en partie aux dispositifs formels de déclaration, de protection ou de réglementation. Le critère précis dépend des statistiques utilisées.',
                        'choices' => [
                            ['choice_text' => 'Une activité rémunérée non déclarée aux autorités compétentes', 'is_correct' => true],
                            ['choice_text' => 'Un poste public avec contrat officiel', 'is_correct' => false],
                            ['choice_text' => 'Un emploi salarié avec toutes les protections prévues', 'is_correct' => false],
                            ['choice_text' => 'Un stage universitaire obligatoire déclaré', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi certaines personnes peuvent-elles entrer dans l’emploi informel ?',
                        'explanation' => 'L’emploi informel peut offrir une source de revenu lorsque les emplois formels sont insuffisants ou lorsque les coûts et les conditions d’accès au secteur formel sont élevés.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut constituer une source de revenu accessible rapidement', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il garantit toujours un revenu plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il impose toujours une protection sociale supérieure', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les emplois formels sont interdits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une limite fréquente de l’emploi informel pour le travailleur est :',
                        'explanation' => 'L’emploi informel peut être associé à une moindre protection sociale ou juridique, selon le type d’activité et le pays. Cette absence de protection peut accroître la vulnérabilité du travailleur.',
                        'choices' => [
                            ['choice_text' => 'Une couverture sociale ou juridique plus limitée', 'is_correct' => true],
                            ['choice_text' => 'Une obligation de recevoir deux salaires', 'is_correct' => false],
                            ['choice_text' => 'Un accès garanti à la retraite publique', 'is_correct' => false],
                            ['choice_text' => 'Une stabilité absolue de l’emploi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’emploi informel peut-il être difficile à mesurer exactement ?',
                        'explanation' => 'Une partie des activités informelles n’est pas enregistrée dans les dispositifs administratifs. Les enquêtes auprès des ménages ou des travailleurs sont donc souvent importantes pour les mesurer.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une partie des activités n’est pas enregistrée dans les données administratives', 'is_correct' => true],
                            ['choice_text' => 'Parce que les travailleurs informels n’effectuent jamais aucune activité productive', 'is_correct' => false],
                            ['choice_text' => 'Parce que toute activité informelle est automatiquement publique', 'is_correct' => false],
                            ['choice_text' => 'Parce que les statistiques ne comptent jamais les emplois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une travailleuse exerce une activité indépendante sans contrat formel, sans cotisation sociale et avec des revenus variables. Cette situation peut illustrer :',
                        'explanation' => 'Une activité indépendante peut être informelle lorsque son exercice et ses revenus ne sont pas entièrement déclarés ou couverts par les mécanismes formels de protection.',
                        'choices' => [
                            ['choice_text' => 'De l’emploi informel', 'is_correct' => true],
                            ['choice_text' => 'Du chômage frictionnel', 'is_correct' => false],
                            ['choice_text' => 'Du plein emploi garanti', 'is_correct' => false],
                            ['choice_text' => 'De la retraite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une politique qui simplifie l’enregistrement d’une petite entreprise cherche notamment à :',
                        'explanation' => 'Simplifier les procédures peut réduire les coûts administratifs d’entrée dans le secteur formel et faciliter la déclaration des entreprises et de leurs travailleurs.',
                        'choices' => [
                            ['choice_text' => 'Réduire les obstacles à la formalisation', 'is_correct' => true],
                            ['choice_text' => 'Interdire l’entrepreneuriat', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement tous les salaires', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la demande des consommateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la formalisation d’un emploi peut-elle avoir un coût pour l’employeur ?',
                        'explanation' => 'La formalisation peut entraîner des coûts liés aux cotisations, aux obligations administratives et au respect de certaines normes. Elle apporte en contrepartie des protections et des droits associés au cadre formel.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut entraîner des coûts administratifs et sociaux supplémentaires', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle réduit nécessairement la productivité à zéro', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle interdit tout investissement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle supprime le besoin de travailleurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle relation peut exister entre emploi informel et productivité ?',
                        'explanation' => 'L’informalité ne détermine pas mécaniquement la productivité. Cependant, un accès limité au financement, à la formation ou à certaines infrastructures peut freiner la productivité de certaines petites activités informelles.',
                        'choices' => [
                            ['choice_text' => 'Certaines contraintes liées à l’informalité peuvent limiter la productivité', 'is_correct' => true],
                            ['choice_text' => 'Tous les emplois informels sont nécessairement plus productifs', 'is_correct' => false],
                            ['choice_text' => 'L’informalité rend toute production impossible', 'is_correct' => false],
                            ['choice_text' => 'La productivité n’existe que dans les entreprises publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une économie où beaucoup de travailleurs sont informels, améliorer l’accès à la protection sociale peut :',
                        'explanation' => 'Une meilleure couverture sociale peut réduire la vulnérabilité des travailleurs en cas de maladie, accident, vieillesse ou perte de revenu, même si elle ne supprime pas à elle seule l’informalité.',
                        'choices' => [
                            ['choice_text' => 'Réduire la vulnérabilité de certains travailleurs', 'is_correct' => true],
                            ['choice_text' => 'Garantir automatiquement une hausse de productivité de tous les secteurs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les besoins de formation', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute activité indépendante', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une vendeuse travaille régulièrement pour son propre compte, mais sans déclaration officielle de son activité. Quel enjeu du marché du travail peut rendre cette situation importante pour l’analyse économique ?',
                        'explanation' => 'Une activité non déclarée peut rester productive tout en échappant aux mécanismes formels de protection et d’enregistrement. L’étude de l’informalité permet donc de mieux comprendre l’emploi réel et les conditions de travail.',
                        'choices' => [
                            ['choice_text' => 'La visibilité statistique et la protection des travailleurs', 'is_correct' => true],
                            ['choice_text' => 'La fixation du taux de change par les consommateurs', 'is_correct' => false],
                            ['choice_text' => 'La suppression automatique de toute concurrence', 'is_correct' => false],
                            ['choice_text' => 'La détermination du prix mondial des matières premières', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Applications et raisonnement sur le marché du travail',
                'description' => 'Résoudre des situations simples combinant offre, demande, productivité, chômage, salaires et choix des travailleurs.',
                'duration' => 27,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Une entreprise produit 1 000 unités avec 20 travailleurs. Après réorganisation, elle produit 1 200 unités avec les mêmes 20 travailleurs et le même nombre d’heures. De combien la production par travailleur augmente-t-elle ?',
                        'explanation' => 'La production par travailleur passe de 1 000 / 20 = 50 à 1 200 / 20 = 60 unités. L’augmentation est donc de 10 unités par travailleur, soit 20 %.',
                        'choices' => [
                            ['choice_text' => '5 unités', 'is_correct' => false],
                            ['choice_text' => '10 unités', 'is_correct' => true],
                            ['choice_text' => '20 unités', 'is_correct' => false],
                            ['choice_text' => '50 unités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une région perd une usine textile et 300 salariés deviennent sans emploi. Si la plupart commencent immédiatement à rechercher un autre poste, leur sortie de l’emploi implique aussi :',
                        'explanation' => 'Les personnes qui perdent leur emploi mais recherchent activement un nouveau poste passent de la catégorie des personnes en emploi à celle des chômeurs, sans quitter la population active.',
                        'choices' => [
                            ['choice_text' => 'Une sortie de la population active', 'is_correct' => false],
                            ['choice_text' => 'Une entrée dans le chômage et le maintien dans la population active', 'is_correct' => true],
                            ['choice_text' => 'Une entrée automatique en retraite', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des statistiques du travail', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise fait face à une baisse durable de la demande pour son produit. Sans changement de technologie, quelle réaction sur l’emploi est la plus cohérente ?',
                        'explanation' => 'Comme la demande de travail est dérivée de la production, une baisse durable de la demande du produit peut réduire les besoins de main-d’œuvre.',
                        'choices' => [
                            ['choice_text' => 'Une hausse certaine des embauches', 'is_correct' => false],
                            ['choice_text' => 'Une baisse possible de la demande de travail', 'is_correct' => true],
                            ['choice_text' => 'Une disparition de l’offre de travail', 'is_correct' => false],
                            ['choice_text' => 'Une hausse automatique de la productivité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne gagne 100 dirhams par heure et hésite entre travailler une heure de plus ou consacrer cette heure à une activité de loisir. Le salaire représente ici :',
                        'explanation' => 'En choisissant le loisir, la personne renonce au revenu qu’elle aurait gagné pendant cette heure. Le salaire horaire mesure donc le coût d’opportunité du temps consacré au loisir.',
                        'choices' => [
                            ['choice_text' => 'Le coût d’opportunité d’une heure de loisir', 'is_correct' => true],
                            ['choice_text' => 'Le coût fixe de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le profit marginal de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une taxe sur le revenu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une formation financée par l’entreprise permet de réduire les erreurs et d’augmenter la qualité des produits. Le principal mécanisme économique est :',
                        'explanation' => 'La formation améliore les compétences, ce qui peut réduire les erreurs et augmenter la productivité. Le capital humain agit donc sur la performance du travail.',
                        'choices' => [
                            ['choice_text' => 'Une hausse du capital humain', 'is_correct' => true],
                            ['choice_text' => 'Une baisse du capital humain', 'is_correct' => false],
                            ['choice_text' => 'Une réduction de la population active', 'is_correct' => false],
                            ['choice_text' => 'Une modification automatique du taux de change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un secteur, 60 personnes sont employées et 10 recherchent activement un emploi. Quelle est la population active de ce groupe ?',
                        'explanation' => 'La population active correspond aux personnes en emploi plus les chômeurs qui recherchent activement un emploi. Ici, 60 + 10 = 70 personnes.',
                        'choices' => [
                            ['choice_text' => '50', 'is_correct' => false],
                            ['choice_text' => '60', 'is_correct' => false],
                            ['choice_text' => '70', 'is_correct' => true],
                            ['choice_text' => '80', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Avec 70 personnes dans la population active et 10 chômeurs, quel est le taux de chômage ?',
                        'explanation' => 'Le taux de chômage est 10 / 70, soit environ 14,3 %. Il faut utiliser la population active comme dénominateur.',
                        'choices' => [
                            ['choice_text' => '10 %', 'is_correct' => false],
                            ['choice_text' => '12,5 %', 'is_correct' => false],
                            ['choice_text' => '14,3 % environ', 'is_correct' => true],
                            ['choice_text' => '16,7 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise automatise une tâche répétitive, mais embauche davantage de techniciens pour entretenir les nouvelles machines. Quel enseignement simple peut-on tirer ?',
                        'explanation' => 'Une technologie peut réduire certains emplois de tâches automatisables tout en augmentant la demande pour d’autres compétences. L’effet sur l’emploi peut donc différer selon les métiers.',
                        'choices' => [
                            ['choice_text' => 'La technologie peut modifier la composition des emplois', 'is_correct' => true],
                            ['choice_text' => 'La technologie supprime nécessairement tous les emplois', 'is_correct' => false],
                            ['choice_text' => 'La technologie n’influence jamais le travail', 'is_correct' => false],
                            ['choice_text' => 'Tous les salaires doivent devenir identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un employeur choisit entre deux candidats. Le candidat A a plus d’expérience pertinente, tandis que le candidat B demande un salaire légèrement plus faible. Lequel des critères économiques suivants doit aussi être considéré ?',
                        'explanation' => 'Une décision d’embauche compare le coût du travail et la productivité ou la valeur attendue du candidat. Le salaire seul ne suffit donc pas.',
                        'choices' => [
                            ['choice_text' => 'La productivité attendue de chaque candidat', 'is_correct' => true],
                            ['choice_text' => 'La couleur des préférences du consommateur', 'is_correct' => false],
                            ['choice_text' => 'Le taux de change uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’importations du pays', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme peut aider à réduire un manque de travailleurs qualifiés dans une région ?',
                        'explanation' => 'La formation peut augmenter l’offre locale de compétences adaptées aux emplois recherchés. La mobilité géographique peut également jouer un rôle, mais la formation est ici une réponse directe au manque de compétences.',
                        'choices' => [
                            ['choice_text' => 'Développer la formation correspondant aux besoins des entreprises', 'is_correct' => true],
                            ['choice_text' => 'Réduire toutes les possibilités d’apprentissage', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les offres d’emploi', 'is_correct' => false],
                            ['choice_text' => 'Interdire la mobilité des travailleurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente le salaire proposé mais ne modifie ni les tâches ni les conditions de travail. Dans un marché concurrentiel, cette hausse peut notamment :',
                        'explanation' => 'Un salaire plus élevé peut rendre le poste plus attractif et permettre à l’entreprise d’attirer davantage de candidats, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Augmenter l’attractivité du poste auprès des travailleurs', 'is_correct' => true],
                            ['choice_text' => 'Réduire nécessairement l’offre de travail', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la demande de compétences', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement une productivité double', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Révision générale de l’économie du travail',
                'description' => 'Révision transversale des notions essentielles du marché du travail avec définitions, applications et petits calculs.',
                'duration' => 26,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Une entreprise décide d’embaucher un salarié supplémentaire lorsque la valeur de sa contribution attendue à la production dépasse son coût. Ce raisonnement relève surtout de :',
                        'explanation' => 'La comparaison entre le gain supplémentaire attendu d’un travailleur et son coût correspond au raisonnement marginal, utilisé pour les décisions d’embauche et de production.',
                        'choices' => [
                            ['choice_text' => 'La politique commerciale', 'is_correct' => false],
                            ['choice_text' => 'Le raisonnement marginal', 'is_correct' => true],
                            ['choice_text' => 'La comptabilité nationale uniquement', 'is_correct' => false],
                            ['choice_text' => 'La politique monétaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation augmente le plus directement le nombre de personnes considérées comme actives ?',
                        'explanation' => 'L’entrée d’anciens inactifs dans la recherche d’emploi augmente la population active, même si ces personnes sont encore au chômage.',
                        'choices' => [
                            ['choice_text' => 'Des inactifs commencent à chercher un emploi', 'is_correct' => true],
                            ['choice_text' => 'Des chômeurs arrêtent de chercher un emploi', 'is_correct' => false],
                            ['choice_text' => 'Des salariés prennent des congés', 'is_correct' => false],
                            ['choice_text' => 'Des entreprises réduisent leur stock', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle mesure est directement liée à la proportion des personnes en âge de travailler qui ont un emploi ?',
                        'explanation' => 'Le taux d’emploi rapporte le nombre de personnes en emploi à une population de référence en âge de travailler. Il se distingue du taux d’activité et du taux de chômage.',
                        'choices' => [
                            ['choice_text' => 'Le taux d’emploi', 'is_correct' => true],
                            ['choice_text' => 'Le taux directeur', 'is_correct' => false],
                            ['choice_text' => 'Le taux de marge', 'is_correct' => false],
                            ['choice_text' => 'Le taux de change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une baisse des cotisations liées à l’emploi peut, selon le contexte, rendre l’embauche moins coûteuse pour une entreprise. L’effet immédiat étudié porte sur :',
                        'explanation' => 'Les cotisations font partie du coût du travail supporté par l’employeur. Une réduction peut diminuer le coût d’embauche, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Le coût du travail pour l’employeur', 'is_correct' => true],
                            ['choice_text' => 'Le capital humain du salarié', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de jours dans l’année', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de formation obligatoire dans toutes les professions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne passe d’un emploi à un autre en restant seulement deux semaines sans travailler. Cette période peut être classée comme :',
                        'explanation' => 'Une courte période de recherche entre deux emplois correspond à une forme de chômage frictionnel, liée aux transitions normales sur le marché du travail.',
                        'choices' => [
                            ['choice_text' => 'Chômage frictionnel', 'is_correct' => true],
                            ['choice_text' => 'Chômage structurel permanent', 'is_correct' => false],
                            ['choice_text' => 'Inactivité définitive', 'is_correct' => false],
                            ['choice_text' => 'Emploi informel par définition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une région développe une école technique spécialisée dans les métiers recherchés par les entreprises locales. Quel objectif économique est le plus direct ?',
                        'explanation' => 'Une école spécialisée peut augmenter l’offre de compétences correspondant aux besoins des entreprises et donc améliorer l’appariement entre travailleurs et emplois.',
                        'choices' => [
                            ['choice_text' => 'Améliorer l’adéquation entre compétences et emplois', 'is_correct' => true],
                            ['choice_text' => 'Réduire automatiquement les exportations', 'is_correct' => false],
                            ['choice_text' => 'Fixer tous les salaires de la région', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les entreprises peu productives par la loi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si 90 personnes sont en emploi et 10 au chômage dans une population active de 100 personnes, quel est le taux d’emploi par rapport à cette population active ?',
                        'explanation' => 'Dans ce groupe, 90 personnes sont en emploi sur 100 actives. La proportion est donc de 90 %. Le taux d’emploi officiel peut utiliser une autre population de référence selon la définition statistique retenue.',
                        'choices' => [
                            ['choice_text' => '80 %', 'is_correct' => false],
                            ['choice_text' => '90 %', 'is_correct' => true],
                            ['choice_text' => '10 %', 'is_correct' => false],
                            ['choice_text' => '100 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise offre un salaire légèrement inférieur à celui d’un concurrent mais propose une couverture santé plus complète. Dans l’analyse du marché du travail, la couverture santé est :',
                        'explanation' => 'Les emplois se distinguent aussi par des avantages non salariaux. Ceux-ci font partie de la rémunération totale ou des caractéristiques du poste prises en compte par les travailleurs.',
                        'choices' => [
                            ['choice_text' => 'Un avantage non salarial lié à l’emploi', 'is_correct' => true],
                            ['choice_text' => 'Une forme de chômage', 'is_correct' => false],
                            ['choice_text' => 'Une taxe sur les exportations', 'is_correct' => false],
                            ['choice_text' => 'Une mesure de productivité nationale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit le mieux la relation entre salaire et productivité ?',
                        'explanation' => 'La productivité et le salaire ne sont pas synonymes. Cependant, une productivité élevée peut soutenir des salaires plus élevés, car elle augmente la valeur de la production associée au travail.',
                        'choices' => [
                            ['choice_text' => 'Une productivité élevée peut contribuer à soutenir des salaires plus élevés', 'is_correct' => true],
                            ['choice_text' => 'Le salaire et la productivité sont toujours exactement égaux', 'is_correct' => false],
                            ['choice_text' => 'La productivité n’a aucun lien économique avec la rémunération', 'is_correct' => false],
                            ['choice_text' => 'Une hausse de productivité implique toujours un salaire nul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un marché où de nombreux candidats disposent d’une même compétence et où les offres d’emploi sont peu nombreuses, quelle pression peut apparaître sur les salaires de cette compétence ?',
                        'explanation' => 'Une offre de travail abondante face à une demande faible peut réduire la rareté relative de la compétence et exercer une pression à la baisse sur le salaire d’équilibre.',
                        'choices' => [
                            ['choice_text' => 'Une pression à la baisse', 'is_correct' => true],
                            ['choice_text' => 'Une hausse certaine des salaires', 'is_correct' => false],
                            ['choice_text' => 'Une disparition automatique du chômage', 'is_correct' => false],
                            ['choice_text' => 'Une hausse certaine de la productivité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne est en âge de travailler, ne travaille pas et ne cherche pas d’emploi car elle s’occupe à plein temps d’un proche. Dans la classification usuelle, elle est généralement :',
                        'explanation' => 'Comme elle n’a pas d’emploi et ne recherche pas d’emploi, elle est généralement classée parmi les inactifs, même si elle accomplit des activités utiles non rémunérées.',
                        'choices' => [
                            ['choice_text' => 'Inactive', 'is_correct' => true],
                            ['choice_text' => 'Chômeuse', 'is_correct' => false],
                            ['choice_text' => 'En emploi salarié', 'is_correct' => false],
                            ['choice_text' => 'Employeuse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple montre le mieux pourquoi les entreprises comparent le coût d’un travailleur à sa contribution attendue ?',
                        'explanation' => 'Une embauche a du sens économique si la contribution supplémentaire attendue du travailleur justifie son coût. C’est une application simple de la comparaison marginale des avantages et des coûts.',
                        'choices' => [
                            ['choice_text' => 'Une entreprise recrute lorsque le salarié supplémentaire devrait créer davantage de valeur que son coût', 'is_correct' => true],
                            ['choice_text' => 'Une entreprise recrute toujours dès qu’un candidat se présente', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise ignore toujours la productivité au moment d’embaucher', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise décide seulement selon l’âge du candidat', 'is_correct' => false],
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
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Beginner',
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
                        'explanation' => $questionData['explanation'] ?? null,
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
