<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DevelopmentEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'development-economics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondamentaux du développement économique',
                'description' => 'Quiz d’introduction sur les notions de développement, de croissance et de niveau de vie.',
                'duration' => 18,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quelle idée décrit le mieux le développement économique ?',
                        'explanation' => 'Le développement économique désigne une amélioration durable des conditions de vie. Il ne se limite donc pas à une hausse de la production : il inclut aussi des progrès sociaux et institutionnels.',
                        'choices' => [
                            ['choice_text' => 'Une hausse durable de la production accompagnée d’une amélioration du bien-être', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation ponctuelle des prix', 'is_correct' => false],
                            ['choice_text' => 'Une baisse automatique des dépenses publiques', 'is_correct' => false],
                            ['choice_text' => 'Une spécialisation obligatoire dans un seul secteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle distinction entre croissance économique et développement est la plus juste ?',
                        'explanation' => 'La croissance concerne principalement l’augmentation de la production ou du revenu réel, tandis que le développement englobe une transformation plus large des conditions de vie, de la santé, de l’éducation et des institutions.',
                        'choices' => [
                            ['choice_text' => 'La croissance et le développement sont toujours exactement synonymes', 'is_correct' => false],
                            ['choice_text' => 'Le développement porte sur le bien-être au sens large, au-delà de la seule production', 'is_correct' => true],
                            ['choice_text' => 'La croissance ne concerne que les ménages', 'is_correct' => false],
                            ['choice_text' => 'Le développement mesure uniquement les exportations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un pays voit son revenu moyen augmenter alors que l’accès à l’école et aux soins reste très faible. Quelle conclusion est la plus prudente ?',
                        'explanation' => 'Une hausse du revenu moyen indique une amélioration d’un aspect économique, mais elle ne suffit pas à établir une amélioration générale du développement. Les dimensions sociales doivent aussi être examinées.',
                        'choices' => [
                            ['choice_text' => 'Le pays est forcément très développé', 'is_correct' => false],
                            ['choice_text' => 'Le revenu moyen est inutile pour étudier le développement', 'is_correct' => false],
                            ['choice_text' => 'Le pays connaît une progression économique, mais le développement doit être évalué plus largement', 'is_correct' => true],
                            ['choice_text' => 'Le développement se mesure uniquement par l’accès à l’électricité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel est un exemple de progrès du niveau de vie ?',
                        'explanation' => 'L’amélioration de l’accès à une eau potable sûre réduit les risques sanitaires et améliore directement les conditions de vie des ménages.',
                        'choices' => [
                            ['choice_text' => 'Une hausse du temps d’attente dans les transports', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation de l’accès à l’eau potable', 'is_correct' => true],
                            ['choice_text' => 'Une baisse de la durée de scolarité', 'is_correct' => false],
                            ['choice_text' => 'Une détérioration des routes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le revenu par habitant est-il souvent utilisé dans l’analyse du développement ?',
                        'explanation' => 'Le revenu par habitant rapporte une mesure de production ou de revenu à la taille de la population. Il aide ainsi à comparer approximativement les ressources économiques moyennes disponibles, même s’il ne mesure pas tout le bien-être.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il mesure directement la qualité des institutions', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il indique une valeur moyenne de ressources économiques par personne', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il remplace toutes les autres statistiques sociales', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il mesure uniquement les salaires publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond le mieux à une infrastructure économique ?',
                        'explanation' => 'Les routes facilitent le déplacement des personnes et des marchandises. Elles font donc partie des infrastructures qui soutiennent l’activité économique.',
                        'choices' => [
                            ['choice_text' => 'Un réseau routier', 'is_correct' => true],
                            ['choice_text' => 'Une préférence personnelle pour un produit', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du goût pour les loisirs', 'is_correct' => false],
                            ['choice_text' => 'Une mode vestimentaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une amélioration de la santé des enfants peut favoriser le développement parce qu’elle peut notamment :',
                        'explanation' => 'Des enfants en meilleure santé peuvent fréquenter l’école plus régulièrement et développer davantage leurs compétences, ce qui soutient le capital humain à long terme.',
                        'choices' => [
                            ['choice_text' => 'Réduire automatiquement tous les impôts', 'is_correct' => false],
                            ['choice_text' => 'Faciliter la scolarisation et l’accumulation de capital humain', 'is_correct' => true],
                            ['choice_text' => 'Supprimer le besoin de travailleurs qualifiés', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute migration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est le plus directement lié à l’éducation ?',
                        'explanation' => 'Le nombre moyen d’années de scolarité fournit une information sur la durée de l’éducation reçue par la population. C’est une dimension fréquemment utilisée pour apprécier le développement humain.',
                        'choices' => [
                            ['choice_text' => 'Le nombre moyen d’années de scolarité', 'is_correct' => true],
                            ['choice_text' => 'Le taux de change nominal uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le prix d’une action cotée', 'is_correct' => false],
                            ['choice_text' => 'La longueur moyenne des routes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit le mieux une amélioration du développement humain ?',
                        'explanation' => 'Le développement humain cherche à élargir les possibilités offertes aux personnes. De meilleurs résultats en santé et en éducation en constituent des exemples essentiels.',
                        'choices' => [
                            ['choice_text' => 'Une réduction durable des possibilités de choix des ménages', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration conjointe de la santé, de l’éducation et du niveau de vie', 'is_correct' => true],
                            ['choice_text' => 'Une simple augmentation du nombre de banques', 'is_correct' => false],
                            ['choice_text' => 'Une hausse des importations sans autre changement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la comparaison des pays en développement ne doit-elle pas reposer sur un seul indicateur ?',
                        'explanation' => 'Le développement est multidimensionnel. Deux pays peuvent avoir un revenu moyen similaire mais des différences importantes en matière de santé, d’éducation, d’infrastructures ou d’inégalités.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’aucun pays ne produit de statistiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que le développement comporte plusieurs dimensions', 'is_correct' => true],
                            ['choice_text' => 'Parce que le PIB est toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Parce que seules les données démographiques sont utiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une commune construit une route reliant des villages isolés à un marché. Quel effet économique est le plus plausible ?',
                        'explanation' => 'Une meilleure connexion au marché réduit les difficultés de transport et peut faciliter la vente des produits, l’accès aux services et la circulation des travailleurs.',
                        'choices' => [
                            ['choice_text' => 'Une réduction systématique de toute production', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration de l’accès aux marchés et aux services', 'is_correct' => true],
                            ['choice_text' => 'La disparition automatique de la pauvreté', 'is_correct' => false],
                            ['choice_text' => 'Une baisse obligatoire du nombre d’entreprises', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Pauvreté, inégalités et inclusion',
                'description' => 'Notions de base sur la pauvreté, les inégalités de revenu et les mécanismes d’inclusion économique.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Dans une analyse économique, la pauvreté monétaire renvoie principalement :',
                        'explanation' => 'La pauvreté monétaire est généralement étudiée à partir d’un niveau de ressources inférieur à un seuil donné. Elle se distingue des approches plus larges qui prennent en compte plusieurs dimensions du bien-être.',
                        'choices' => [
                            ['choice_text' => 'À une faiblesse des ressources monétaires par rapport à un seuil', 'is_correct' => true],
                            ['choice_text' => 'À toute baisse temporaire d’un prix', 'is_correct' => false],
                            ['choice_text' => 'À une absence totale d’épargne pour toutes les familles', 'is_correct' => false],
                            ['choice_text' => 'À un niveau élevé de production nationale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation illustre le mieux une inégalité de revenu ?',
                        'explanation' => 'Une inégalité de revenu existe lorsque les revenus sont distribués de façon très différente entre les personnes ou les ménages. Elle ne signifie pas nécessairement que tout le monde est pauvre.',
                        'choices' => [
                            ['choice_text' => 'Tous les ménages ont exactement le même revenu', 'is_correct' => false],
                            ['choice_text' => 'Les revenus sont très concentrés entre une partie de la population', 'is_correct' => true],
                            ['choice_text' => 'Le prix du pain augmente pour tout le monde', 'is_correct' => false],
                            ['choice_text' => 'Le taux de scolarisation progresse dans toutes les régions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un programme de transfert ciblé vers des ménages pauvres vise directement à :',
                        'explanation' => 'Un transfert monétaire ou en nature vers les ménages à faibles ressources cherche à améliorer leur consommation et à réduire la pauvreté ou certaines inégalités.',
                        'choices' => [
                            ['choice_text' => 'Augmenter les coûts de transport', 'is_correct' => false],
                            ['choice_text' => 'Soutenir les ressources des ménages ciblés', 'is_correct' => true],
                            ['choice_text' => 'Réduire la demande de santé', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les marchés locaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte inégalité peut-elle poser un problème de développement ?',
                        'explanation' => 'Une inégalité importante peut limiter l’accès d’une partie de la population à l’éducation, à la santé ou au financement, ce qui peut réduire les possibilités de mobilité économique.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle garantit toujours une faible croissance', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle peut limiter l’accès de certains groupes aux opportunités', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle empêche toute entreprise de faire du profit', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle supprime nécessairement les échanges internationaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle politique peut contribuer directement à réduire une pauvreté liée à un faible niveau de compétences ?',
                        'explanation' => 'La formation et l’éducation augmentent les compétences productives, ce qui peut améliorer l’accès à l’emploi et aux revenus à plus long terme.',
                        'choices' => [
                            ['choice_text' => 'Un programme de formation professionnelle', 'is_correct' => true],
                            ['choice_text' => 'Une fermeture des écoles', 'is_correct' => false],
                            ['choice_text' => 'Une restriction des transports ruraux', 'is_correct' => false],
                            ['choice_text' => 'Une réduction de l’accès à l’information', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation distingue correctement pauvreté absolue et pauvreté relative ?',
                        'explanation' => 'La pauvreté absolue repose sur un seuil de ressources permettant de couvrir un ensemble minimal de besoins, tandis que la pauvreté relative est définie en référence au niveau de vie de la société considérée.',
                        'choices' => [
                            ['choice_text' => 'La pauvreté relative compare la situation d’une personne au niveau de vie de la société', 'is_correct' => true],
                            ['choice_text' => 'La pauvreté absolue dépend uniquement du taux de change', 'is_correct' => false],
                            ['choice_text' => 'La pauvreté relative ne concerne jamais le revenu', 'is_correct' => false],
                            ['choice_text' => 'Les deux notions sont toujours identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une région pauvre, l’accès à un service bancaire de base s’améliore. Quel effet peut-il faciliter ?',
                        'explanation' => 'Un meilleur accès aux services financiers peut faciliter l’épargne, les paiements et parfois le financement de petites activités économiques. Il ne garantit toutefois pas à lui seul une sortie de la pauvreté.',
                        'choices' => [
                            ['choice_text' => 'L’accès à des outils d’épargne et de paiement', 'is_correct' => true],
                            ['choice_text' => 'La disparition immédiate du chômage', 'is_correct' => false],
                            ['choice_text' => 'La suppression des dépenses de santé', 'is_correct' => false],
                            ['choice_text' => 'La fermeture des petits commerces', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du revenu moyen accompagnée d’une forte baisse du revenu des ménages les plus pauvres serait difficile à qualifier de progrès inclusif car :',
                        'explanation' => 'L’inclusion économique s’intéresse à la possibilité pour une large part de la population de bénéficier des progrès économiques. Une moyenne en hausse peut masquer une détérioration pour certains groupes.',
                        'choices' => [
                            ['choice_text' => 'Une moyenne ne décrit pas nécessairement la répartition des revenus', 'is_correct' => true],
                            ['choice_text' => 'Le revenu moyen ne peut jamais augmenter', 'is_correct' => false],
                            ['choice_text' => 'Les ménages pauvres ne consomment aucun bien', 'is_correct' => false],
                            ['choice_text' => 'L’inclusion économique ne dépend jamais des revenus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément est le plus pertinent pour évaluer une politique de lutte contre la pauvreté ?',
                        'explanation' => 'L’évaluation doit regarder les résultats sur les conditions de vie des ménages ciblés, et pas seulement le montant dépensé par le programme.',
                        'choices' => [
                            ['choice_text' => 'Uniquement le nombre de réunions administratives', 'is_correct' => false],
                            ['choice_text' => 'L’évolution des conditions de vie des bénéficiaires', 'is_correct' => true],
                            ['choice_text' => 'La couleur des documents du programme', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de publicités diffusées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple représente une inégalité d’opportunités plutôt qu’une simple différence de revenu ?',
                        'explanation' => 'Une inégalité d’opportunités concerne l’accès différent à des possibilités importantes, comme l’éducation ou les soins, en fonction du milieu d’origine ou d’autres circonstances.',
                        'choices' => [
                            ['choice_text' => 'Deux travailleurs reçoivent des salaires différents pour deux emplois différents', 'is_correct' => false],
                            ['choice_text' => 'Des enfants ont un accès très différent à l’école selon leur zone de résidence', 'is_correct' => true],
                            ['choice_text' => 'Le prix du carburant varie au cours de l’année', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise augmente son chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Capital humain : éducation et santé',
                'description' => 'Quiz consacré au rôle du capital humain, de l’éducation et de la santé dans le développement.',
                'duration' => 19,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'En économie du développement, le capital humain désigne principalement :',
                        'explanation' => 'Le capital humain correspond aux connaissances, compétences, expériences et capacités de santé qui améliorent la capacité des personnes à participer à l’activité économique.',
                        'choices' => [
                            ['choice_text' => 'Les machines utilisées uniquement dans les usines', 'is_correct' => false],
                            ['choice_text' => 'Les compétences et capacités accumulées par les personnes', 'is_correct' => true],
                            ['choice_text' => 'Les bâtiments publics uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les ressources naturelles d’un pays', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une année supplémentaire de scolarité peut-elle avoir une valeur économique ?',
                        'explanation' => 'Une scolarité plus longue peut développer les connaissances et compétences d’une personne, ce qui peut améliorer sa productivité et ses possibilités d’emploi.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle augmente automatiquement le prix des produits', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle peut accroître les compétences et la productivité', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle réduit nécessairement le capital physique', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle interdit le travail indépendant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une politique qui réduit les abandons scolaires cherche notamment à renforcer :',
                        'explanation' => 'Réduire les abandons scolaires permet à davantage de jeunes d’acquérir des connaissances et des compétences, ce qui contribue à l’accumulation du capital humain.',
                        'choices' => [
                            ['choice_text' => 'Le capital humain', 'is_correct' => true],
                            ['choice_text' => 'La pollution atmosphérique', 'is_correct' => false],
                            ['choice_text' => 'Le coût du transport maritime', 'is_correct' => false],
                            ['choice_text' => 'Le stock de ressources minières', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel lien entre santé et productivité est économiquement plausible ?',
                        'explanation' => 'Une meilleure santé peut réduire les absences, améliorer la capacité à travailler et permettre une participation plus régulière à l’activité économique.',
                        'choices' => [
                            ['choice_text' => 'Une meilleure santé peut réduire les absences liées à la maladie', 'is_correct' => true],
                            ['choice_text' => 'Une meilleure santé diminue toujours la productivité', 'is_correct' => false],
                            ['choice_text' => 'La santé n’a aucun rapport avec la capacité à travailler', 'is_correct' => false],
                            ['choice_text' => 'La santé remplace entièrement l’éducation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un programme de vaccination qui réduit certaines maladies chez les enfants peut contribuer au développement en :',
                        'explanation' => 'La prévention sanitaire réduit les risques de maladie. À long terme, elle peut soutenir la fréquentation scolaire, la santé future et la capacité productive.',
                        'choices' => [
                            ['choice_text' => 'Augmentant mécaniquement le prix des logements', 'is_correct' => false],
                            ['choice_text' => 'Améliorant les conditions de santé et les possibilités d’apprentissage', 'is_correct' => true],
                            ['choice_text' => 'Réduisant automatiquement les exportations', 'is_correct' => false],
                            ['choice_text' => 'Supprimant les besoins en infrastructures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à une dépense pouvant être considérée comme un investissement en capital humain ?',
                        'explanation' => 'Une formation professionnelle améliore directement les connaissances ou compétences du participant. Elle peut donc être considérée comme un investissement en capital humain.',
                        'choices' => [
                            ['choice_text' => 'Une formation professionnelle', 'is_correct' => true],
                            ['choice_text' => 'Une hausse du coût d’un péage', 'is_correct' => false],
                            ['choice_text' => 'Une panne de réseau électrique', 'is_correct' => false],
                            ['choice_text' => 'Une baisse temporaire d’un loyer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une région dispose de davantage d’enseignants qualifiés, quel effet de long terme peut-on raisonnablement attendre ?',
                        'explanation' => 'Des enseignants mieux formés peuvent améliorer la qualité des apprentissages, ce qui favorise l’accumulation de capital humain parmi les élèves.',
                        'choices' => [
                            ['choice_text' => 'Une amélioration potentielle des compétences des élèves', 'is_correct' => true],
                            ['choice_text' => 'Une disparition automatique de toute inégalité', 'is_correct' => false],
                            ['choice_text' => 'Une baisse obligatoire de la production agricole', 'is_correct' => false],
                            ['choice_text' => 'Une suppression du besoin de technologies', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’état de santé peut-il être considéré comme une capacité productive ?',
                        'explanation' => 'L’état de santé influence la capacité d’une personne à travailler, à apprendre et à rester active. Il constitue donc une composante du capital humain.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut influencer la capacité à travailler et à apprendre', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il fixe les taux de change', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il remplace les infrastructures', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il garantit un emploi public', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise finance une formation qui permet à ses employés d’utiliser un logiciel plus efficacement. Quel mécanisme est illustré ?',
                        'explanation' => 'La formation augmente les compétences des travailleurs et peut donc accroître leur productivité. Elle constitue un exemple d’investissement en capital humain.',
                        'choices' => [
                            ['choice_text' => 'Une dépréciation du capital humain', 'is_correct' => false],
                            ['choice_text' => 'Un investissement en capital humain', 'is_correct' => true],
                            ['choice_text' => 'Une baisse de la demande', 'is_correct' => false],
                            ['choice_text' => 'Une externalité nécessairement négative', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel résultat est le plus compatible avec une amélioration de la qualité des soins de santé ?',
                        'explanation' => 'Des soins de meilleure qualité peuvent améliorer les résultats sanitaires, réduire certaines incapacités et soutenir la capacité des personnes à participer à la vie économique.',
                        'choices' => [
                            ['choice_text' => 'Une détérioration générale de l’espérance de vie', 'is_correct' => false],
                            ['choice_text' => 'De meilleurs résultats de santé pour la population', 'is_correct' => true],
                            ['choice_text' => 'Une réduction automatique de toutes les dépenses publiques', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des besoins de prévention', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Infrastructures et institutions du développement',
                'description' => 'Les bases du rôle des infrastructures, des institutions et de la gouvernance dans la transformation économique.',
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Pourquoi l’électricité fiable peut-elle soutenir le développement d’une région ?',
                        'explanation' => 'Une alimentation électrique fiable permet aux entreprises, aux écoles, aux services de santé et aux ménages d’utiliser des équipements et des technologies de manière plus régulière.',
                        'choices' => [
                            ['choice_text' => 'Elle facilite l’utilisation régulière d’équipements et de services', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime toute contrainte budgétaire', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit toujours le prix de tous les biens', 'is_correct' => false],
                            ['choice_text' => 'Elle rend les infrastructures inutiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond le mieux à une institution économique ?',
                        'explanation' => 'Les institutions sont les règles et arrangements qui encadrent les interactions économiques. Les règles de propriété en sont un exemple classique.',
                        'choices' => [
                            ['choice_text' => 'Les règles qui définissent et protègent les droits de propriété', 'is_correct' => true],
                            ['choice_text' => 'La couleur des bâtiments publics', 'is_correct' => false],
                            ['choice_text' => 'La météo quotidienne', 'is_correct' => false],
                            ['choice_text' => 'Le goût d’un consommateur pour un fruit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la sécurité des droits de propriété peut-elle encourager l’investissement ?',
                        'explanation' => 'Lorsque les individus savent que leurs actifs et les fruits de leurs investissements sont mieux protégés par les règles, leur volonté de réaliser des projets à long terme peut être renforcée.',
                        'choices' => [
                            ['choice_text' => 'Elle peut rendre les investissements à long terme plus prévisibles', 'is_correct' => true],
                            ['choice_text' => 'Elle interdit toute prise de risque', 'is_correct' => false],
                            ['choice_text' => 'Elle oblige toutes les entreprises à produire le même bien', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine automatiquement l’inflation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une justice lente et imprévisible peut freiner l’activité économique parce qu’elle :',
                        'explanation' => 'Des règles peu prévisibles augmentent l’incertitude sur l’exécution des contrats et le règlement des litiges, ce qui peut décourager certains investissements et échanges.',
                        'choices' => [
                            ['choice_text' => 'Augmente toujours les gains de productivité', 'is_correct' => false],
                            ['choice_text' => 'Peut accroître l’incertitude liée aux contrats et aux litiges', 'is_correct' => true],
                            ['choice_text' => 'Supprime les coûts de transaction', 'is_correct' => false],
                            ['choice_text' => 'Garantit un accès universel au crédit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel projet d’infrastructure répond le plus directement à un problème d’enclavement ?',
                        'explanation' => 'Une route ou une ligne de transport qui relie un territoire isolé à des centres urbains et des marchés réduit les coûts de déplacement et l’isolement géographique.',
                        'choices' => [
                            ['choice_text' => 'Une route reliant une zone rurale à une ville', 'is_correct' => true],
                            ['choice_text' => 'Une affiche publicitaire locale', 'is_correct' => false],
                            ['choice_text' => 'Une modification du logo d’une entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une réduction du temps de pause dans un bureau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Des contrats clairement définis et respectés contribuent notamment à :',
                        'explanation' => 'La confiance dans les contrats réduit l’incertitude des échanges et facilite les relations économiques entre entreprises, travailleurs et consommateurs.',
                        'choices' => [
                            ['choice_text' => 'Faciliter les échanges économiques', 'is_correct' => true],
                            ['choice_text' => 'Réduire automatiquement la population active', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de financement', 'is_correct' => false],
                            ['choice_text' => 'Interdire l’innovation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit le mieux une bonne gouvernance économique ?',
                        'explanation' => 'Une bonne gouvernance implique notamment des règles claires, une gestion responsable des ressources publiques et des institutions qui fonctionnent de manière prévisible.',
                        'choices' => [
                            ['choice_text' => 'Des règles publiques prévisibles et une gestion responsable', 'is_correct' => true],
                            ['choice_text' => 'Une absence totale de règles', 'is_correct' => false],
                            ['choice_text' => 'Des décisions toujours prises sans information', 'is_correct' => false],
                            ['choice_text' => 'La suppression des services publics essentiels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les infrastructures de transport peuvent-elles réduire certains écarts entre territoires ?',
                        'explanation' => 'Une meilleure connexion réduit les coûts d’accès aux marchés, aux emplois et aux services. Les territoires auparavant isolés peuvent alors participer davantage aux échanges économiques.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles peuvent faciliter l’accès aux marchés et aux emplois', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles rendent toutes les régions identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles supprimeraient les différences de climat', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles garantissent le même salaire partout', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple montre le rôle d’une institution dans une décision d’investissement ?',
                        'explanation' => 'La qualité et la prévisibilité des règles qui encadrent les investissements influencent le risque perçu par les investisseurs et donc leurs décisions.',
                        'choices' => [
                            ['choice_text' => 'Une entreprise évalue si les règles d’autorisation sont claires et stables', 'is_correct' => true],
                            ['choice_text' => 'Une entreprise choisit son slogan publicitaire', 'is_correct' => false],
                            ['choice_text' => 'Un consommateur change sa couleur préférée', 'is_correct' => false],
                            ['choice_text' => 'Un ménage regarde la météo avant un pique-nique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une coupure fréquente d’eau dans une zone industrielle peut surtout affecter :',
                        'explanation' => 'Les infrastructures essentielles, comme l’eau, sont des facteurs de fonctionnement pour de nombreuses activités productives. Des interruptions peuvent donc augmenter les coûts et perturber la production.',
                        'choices' => [
                            ['choice_text' => 'La continuité de la production', 'is_correct' => true],
                            ['choice_text' => 'La définition du PIB', 'is_correct' => false],
                            ['choice_text' => 'La couleur des produits vendus', 'is_correct' => false],
                            ['choice_text' => 'Le nom légal d’une monnaie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les institutions économiques sont-elles importantes pour le développement ?',
                        'explanation' => 'Les institutions structurent les incitations et les règles du jeu économique. Des institutions prévisibles peuvent faciliter l’investissement, les échanges et la protection des droits.',
                        'choices' => [
                            ['choice_text' => 'Elles influencent les incitations et la prévisibilité des échanges', 'is_correct' => true],
                            ['choice_text' => 'Elles déterminent uniquement la météo', 'is_correct' => false],
                            ['choice_text' => 'Elles rendent tout marché parfaitement concurrentiel', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent toujours le capital humain', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Transformation structurelle et emploi',
                'description' => 'Découverte de la transformation structurelle, de la productivité sectorielle et du passage vers des activités plus productives.',
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Que signifie la transformation structurelle d’une économie ?',
                        'explanation' => 'La transformation structurelle correspond au déplacement progressif de la main-d’œuvre et de l’activité entre secteurs, par exemple d’une agriculture à faible productivité vers l’industrie ou les services.',
                        'choices' => [
                            ['choice_text' => 'Le déplacement de l’activité et de l’emploi entre secteurs', 'is_correct' => true],
                            ['choice_text' => 'Le changement de monnaie nationale', 'is_correct' => false],
                            ['choice_text' => 'La suppression de tous les emplois agricoles', 'is_correct' => false],
                            ['choice_text' => 'Une simple variation saisonnière des prix', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une économie compte une grande part de travailleurs dans l’agriculture et une faible productivité moyenne. Une progression vers des activités plus productives peut entraîner :',
                        'explanation' => 'Lorsque des travailleurs passent vers des activités où la productivité est plus élevée, la productivité moyenne de l’économie peut augmenter, à condition que les nouveaux emplois soient réellement plus productifs.',
                        'choices' => [
                            ['choice_text' => 'Une hausse potentielle de la productivité moyenne', 'is_correct' => true],
                            ['choice_text' => 'Une disparition automatique des services', 'is_correct' => false],
                            ['choice_text' => 'Une baisse nécessaire du capital humain', 'is_correct' => false],
                            ['choice_text' => 'Une baisse certaine des revenus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les villes attirent-elles parfois de nouveaux travailleurs pendant la transformation structurelle ?',
                        'explanation' => 'Les villes concentrent souvent des emplois industriels et de services ainsi que des infrastructures. Elles peuvent donc attirer des travailleurs à la recherche de nouvelles opportunités.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles peuvent offrir davantage d’emplois dans certains secteurs', 'is_correct' => true],
                            ['choice_text' => 'Parce que tout travail rural est interdit', 'is_correct' => false],
                            ['choice_text' => 'Parce que les villes suppriment les coûts de logement', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les salaires urbains sont identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à une diversification de la structure productive ?',
                        'explanation' => 'Une économie est plus diversifiée lorsque plusieurs secteurs contribuent à la production. Développer les services en plus de l’agriculture et de l’industrie en est un exemple.',
                        'choices' => [
                            ['choice_text' => 'Une région dépend uniquement d’un seul produit', 'is_correct' => false],
                            ['choice_text' => 'Un pays développe à la fois l’industrie, les services et l’agriculture', 'is_correct' => true],
                            ['choice_text' => 'Une entreprise réduit tous ses fournisseurs à un seul', 'is_correct' => false],
                            ['choice_text' => 'Un ménage achète un seul type de nourriture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque peut apparaître lorsqu’une économie dépend fortement d’un seul secteur ?',
                        'explanation' => 'Une forte dépendance à un secteur expose davantage l’économie aux chocs touchant ce secteur, comme une baisse des prix ou une mauvaise récolte.',
                        'choices' => [
                            ['choice_text' => 'Une plus grande exposition aux chocs sectoriels', 'is_correct' => true],
                            ['choice_text' => 'Une diversification automatique', 'is_correct' => false],
                            ['choice_text' => 'Une réduction certaine du risque économique', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des cycles économiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une usine adopte une nouvelle machine et produit davantage avec le même nombre de travailleurs. Cela illustre surtout :',
                        'explanation' => 'Lorsque la production augmente à quantité de travail donnée grâce à une meilleure technologie ou à davantage de capital, la productivité du travail augmente.',
                        'choices' => [
                            ['choice_text' => 'Une hausse de la productivité du travail', 'is_correct' => true],
                            ['choice_text' => 'Une baisse du capital physique', 'is_correct' => false],
                            ['choice_text' => 'Une diminution du marché du travail', 'is_correct' => false],
                            ['choice_text' => 'Une réduction du capital humain', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une transformation structurelle peut-elle créer des difficultés à court terme ?',
                        'explanation' => 'Les travailleurs qui quittent un secteur peuvent ne pas posséder immédiatement les compétences recherchées dans les nouveaux secteurs. Des périodes de formation ou de chômage peuvent alors apparaître.',
                        'choices' => [
                            ['choice_text' => 'Parce que les compétences demandées peuvent changer', 'is_correct' => true],
                            ['choice_text' => 'Parce que tout changement sectoriel réduit forcément la demande totale', 'is_correct' => false],
                            ['choice_text' => 'Parce que les villes refusent toujours les nouveaux travailleurs', 'is_correct' => false],
                            ['choice_text' => 'Parce que la productivité ne peut jamais augmenter', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le passage de travailleurs d’activités informelles à des emplois formels peut notamment améliorer :',
                        'explanation' => 'L’emploi formel est généralement davantage encadré par des contrats et des règles. Cela peut améliorer la protection sociale, la sécurité juridique et parfois l’accès à certains services.',
                        'choices' => [
                            ['choice_text' => 'La protection et l’encadrement du travail', 'is_correct' => true],
                            ['choice_text' => 'La dépendance aux catastrophes naturelles', 'is_correct' => false],
                            ['choice_text' => 'La durée des trajets domicile-travail dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'La consommation obligatoire d’un seul produit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une région crée un parc industriel près d’un axe de transport majeur. Quel mécanisme de développement peut être recherché ?',
                        'explanation' => 'La proximité d’un axe de transport réduit certains coûts logistiques et peut rendre la région plus attractive pour les entreprises et l’activité productive.',
                        'choices' => [
                            ['choice_text' => 'Une meilleure connexion des activités productives aux marchés', 'is_correct' => true],
                            ['choice_text' => 'Une réduction volontaire du capital humain', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des échanges', 'is_correct' => false],
                            ['choice_text' => 'Une dépendance accrue à un seul ménage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est particulièrement utile pour observer la transformation de la structure de l’emploi ?',
                        'explanation' => 'La part de l’emploi par secteur permet de voir comment la main-d’œuvre se répartit entre agriculture, industrie et services au fil du temps.',
                        'choices' => [
                            ['choice_text' => 'La répartition de l’emploi entre les secteurs', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la couleur des billets de banque', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de jours fériés', 'is_correct' => false],
                            ['choice_text' => 'La taille moyenne des logements', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Mesurer le développement et le bien-être',
                'description' => 'Interprétation des principaux indicateurs économiques et sociaux utilisés pour apprécier le développement.',
                'duration' => 21,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quel est l’intérêt principal du PIB réel par habitant pour une comparaison dans le temps ?',
                        'explanation' => 'Le PIB réel corrige l’effet des variations de prix en utilisant des prix constants. Rapporté à la population, il permet d’observer l’évolution de la production réelle moyenne par personne.',
                        'choices' => [
                            ['choice_text' => 'Suivre l’évolution de la production réelle moyenne par personne', 'is_correct' => true],
                            ['choice_text' => 'Mesurer directement la démocratie', 'is_correct' => false],
                            ['choice_text' => 'Compter les établissements scolaires uniquement', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la qualité de tous les services publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le PIB par habitant ne mesure-t-il pas à lui seul tout le développement ?',
                        'explanation' => 'Le PIB par habitant ne capture pas entièrement des dimensions comme la répartition des revenus, la santé, l’éducation, la sécurité ou l’environnement.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il ne couvre pas toutes les dimensions du bien-être', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il ne mesure aucune activité économique', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il est réservé aux entreprises', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il remplace le revenu des ménages', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple montre pourquoi la moyenne peut être trompeuse ?',
                        'explanation' => 'Deux pays peuvent avoir le même revenu moyen tout en présentant des répartitions très différentes. Une moyenne ne révèle donc pas à elle seule la dispersion des revenus.',
                        'choices' => [
                            ['choice_text' => 'Deux pays ont le même revenu moyen mais des répartitions de revenus très différentes', 'is_correct' => true],
                            ['choice_text' => 'Deux villes ont la même couleur de drapeau', 'is_correct' => false],
                            ['choice_text' => 'Deux ménages utilisent la même monnaie', 'is_correct' => false],
                            ['choice_text' => 'Deux entreprises achètent le même logiciel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur social est particulièrement utile pour évaluer les conditions sanitaires de base ?',
                        'explanation' => 'L’espérance de vie à la naissance fournit une indication synthétique de l’état sanitaire général d’une population, même si elle ne décrit pas tous les aspects de la santé.',
                        'choices' => [
                            ['choice_text' => 'L’espérance de vie à la naissance', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de téléphones vendus dans une semaine', 'is_correct' => false],
                            ['choice_text' => 'Le prix d’une action', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de touristes par hôtel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur renseigne directement sur la participation des enfants à l’éducation ?',
                        'explanation' => 'Le taux de scolarisation mesure la part des enfants d’un groupe d’âge donné qui fréquentent l’école selon la définition statistique retenue.',
                        'choices' => [
                            ['choice_text' => 'Le taux de scolarisation', 'is_correct' => true],
                            ['choice_text' => 'Le taux de change', 'is_correct' => false],
                            ['choice_text' => 'Le taux directeur', 'is_correct' => false],
                            ['choice_text' => 'La balance commerciale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un pays améliore sa mortalité infantile sans hausse immédiate de son PIB, peut-on parler d’un progrès de développement ?',
                        'explanation' => 'Oui. Le développement englobe plusieurs dimensions du bien-être, et une amélioration importante de la santé constitue un progrès même si la production reste inchangée à court terme.',
                        'choices' => [
                            ['choice_text' => 'Oui, car le développement ne se limite pas à la production', 'is_correct' => true],
                            ['choice_text' => 'Non, car seul le PIB compte', 'is_correct' => false],
                            ['choice_text' => 'Non, sauf si les exportations doublent', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais seulement si les impôts baissent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel outil est le plus adapté pour visualiser l’évolution d’un indicateur de développement sur plusieurs années ?',
                        'explanation' => 'Un graphique en courbe permet de suivre une série chronologique et de repérer plus facilement les tendances et changements au fil du temps.',
                        'choices' => [
                            ['choice_text' => 'Un graphique en courbe avec les années sur l’axe horizontal', 'is_correct' => true],
                            ['choice_text' => 'Une photo sans données', 'is_correct' => false],
                            ['choice_text' => 'Un logo institutionnel', 'is_correct' => false],
                            ['choice_text' => 'Un contrat de travail', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une région passe de 40 à 50 médecins pour 100 000 habitants. Quel constat peut-on faire ?',
                        'explanation' => 'Le nombre de médecins rapporté à la population augmente. Cela indique une amélioration de cet indicateur d’offre de soins, sans permettre à lui seul de conclure sur toute la qualité des soins.',
                        'choices' => [
                            ['choice_text' => 'La densité de médecins par habitant a augmenté', 'is_correct' => true],
                            ['choice_text' => 'Le nombre total d’habitants a forcément baissé', 'is_correct' => false],
                            ['choice_text' => 'La pauvreté a forcément disparu', 'is_correct' => false],
                            ['choice_text' => 'Le PIB régional a nécessairement diminué', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il interpréter les indicateurs de développement avec leur contexte ?',
                        'explanation' => 'Un indicateur peut progresser pour une raison ponctuelle ou cacher des écarts entre groupes. Le contexte, les méthodes de mesure et les autres indicateurs aident à établir une analyse plus fiable.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un seul chiffre peut masquer des différences importantes', 'is_correct' => true],
                            ['choice_text' => 'Parce que les chiffres sont inutiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les pays ont les mêmes structures', 'is_correct' => false],
                            ['choice_text' => 'Parce que les indicateurs économiques sont toujours identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un indicateur de pauvreté passe de 20 % à 16 %. Quelle interprétation est correcte ?',
                        'explanation' => 'La proportion baisse de 4 points de pourcentage, en passant de 20 % à 16 %. Cela indique une diminution de la pauvreté selon l’indicateur retenu, sans donner à lui seul toutes les informations sur les conditions de vie.',
                        'choices' => [
                            ['choice_text' => 'La proportion mesurée a diminué de 4 points de pourcentage', 'is_correct' => true],
                            ['choice_text' => 'La proportion a augmenté de 4 points de pourcentage', 'is_correct' => false],
                            ['choice_text' => 'La proportion a été divisée par deux', 'is_correct' => false],
                            ['choice_text' => 'Aucune évolution ne peut être observée', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Développement durable et ressources',
                'description' => 'Comprendre le lien entre développement économique, environnement, ressources naturelles et durabilité.',
                'duration' => 23,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Le développement durable cherche principalement à :',
                        'explanation' => 'Le développement durable vise à répondre aux besoins actuels tout en préservant les possibilités des générations futures. Il articule donc des dimensions économiques, sociales et environnementales.',
                        'choices' => [
                            ['choice_text' => 'Concilier progrès économique, bien-être social et préservation de l’environnement', 'is_correct' => true],
                            ['choice_text' => 'Maximiser uniquement la production à court terme', 'is_correct' => false],
                            ['choice_text' => 'Interdire tout usage des ressources naturelles', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les investissements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à une utilisation plus durable d’une ressource ?',
                        'explanation' => 'L’irrigation économe en eau permet de produire tout en réduisant les pertes d’une ressource limitée. Elle illustre une recherche d’efficacité et de durabilité.',
                        'choices' => [
                            ['choice_text' => 'Une irrigation qui réduit les pertes d’eau', 'is_correct' => true],
                            ['choice_text' => 'Un gaspillage volontaire d’eau potable', 'is_correct' => false],
                            ['choice_text' => 'Une déforestation sans replantation', 'is_correct' => false],
                            ['choice_text' => 'Une consommation sans aucune limite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les ressources naturelles peuvent-elles être un enjeu de développement ?',
                        'explanation' => 'Les ressources naturelles peuvent fournir des revenus, des emplois et des matières premières, mais leur exploitation excessive ou mal gérée peut réduire les possibilités futures.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles peuvent soutenir l’activité tout en étant parfois limitées', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles sont toujours infinies', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles n’ont jamais de valeur économique', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles remplacent tous les autres facteurs de production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une ville développe un réseau de transport public efficace afin de réduire l’usage excessif de la voiture. Quel objectif de développement durable cela peut-il soutenir ?',
                        'explanation' => 'Le transport public peut réduire certains effets environnementaux et améliorer l’accès à la mobilité. Il peut donc contribuer à un développement plus durable.',
                        'choices' => [
                            ['choice_text' => 'Réduire certaines nuisances liées aux déplacements', 'is_correct' => true],
                            ['choice_text' => 'Augmenter nécessairement toutes les émissions', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute activité économique', 'is_correct' => false],
                            ['choice_text' => 'Rendre les transports inutiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement contribue à préserver une ressource renouvelable ?',
                        'explanation' => 'Une ressource renouvelable peut se reconstituer si son rythme d’utilisation reste compatible avec sa capacité de régénération. Une exploitation raisonnée va dans ce sens.',
                        'choices' => [
                            ['choice_text' => 'Pêcher à un niveau compatible avec le renouvellement des stocks', 'is_correct' => true],
                            ['choice_text' => 'Capturer systématiquement toute la ressource disponible', 'is_correct' => false],
                            ['choice_text' => 'Détruire les habitats naturels', 'is_correct' => false],
                            ['choice_text' => 'Ignorer toute information sur les stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis peut apparaître dans une politique de développement ?',
                        'explanation' => 'Certaines décisions peuvent apporter des gains économiques immédiats tout en générant des coûts environnementaux futurs. L’analyse du développement cherche justement à prendre en compte ces arbitrages.',
                        'choices' => [
                            ['choice_text' => 'Créer rapidement des emplois tout en augmentant la pression sur un écosystème', 'is_correct' => true],
                            ['choice_text' => 'Augmenter toujours les emplois sans aucun coût', 'is_correct' => false],
                            ['choice_text' => 'Réduire la production tout en augmentant automatiquement tous les revenus', 'is_correct' => false],
                            ['choice_text' => 'Améliorer l’environnement en supprimant tout investissement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’efficacité énergétique peut-elle être favorable au développement ?',
                        'explanation' => 'Utiliser moins d’énergie pour obtenir le même service peut réduire les coûts et les pressions sur les ressources. Cela peut libérer des ressources pour d’autres usages.',
                        'choices' => [
                            ['choice_text' => 'Elle peut réduire les coûts et l’utilisation de ressources pour un même service', 'is_correct' => true],
                            ['choice_text' => 'Elle interdit toute activité industrielle', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente toujours la consommation totale', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime le besoin de technologie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une forêt est exploitée plus rapidement qu’elle ne se régénère. Quel problème cela pose-t-il ?',
                        'explanation' => 'Lorsque le prélèvement dépasse durablement la capacité de régénération, le stock de ressources diminue. L’exploitation n’est alors pas soutenable à long terme.',
                        'choices' => [
                            ['choice_text' => 'Le stock forestier risque de diminuer à long terme', 'is_correct' => true],
                            ['choice_text' => 'La ressource devient automatiquement infinie', 'is_correct' => false],
                            ['choice_text' => 'La productivité augmente nécessairement', 'is_correct' => false],
                            ['choice_text' => 'La demande mondiale disparaît', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel investissement peut à la fois soutenir l’activité et améliorer la résilience d’une région ?',
                        'explanation' => 'Des infrastructures adaptées, comme des systèmes d’eau résistants ou des réseaux énergétiques fiables, peuvent soutenir l’activité tout en réduisant la vulnérabilité aux chocs.',
                        'choices' => [
                            ['choice_text' => 'Un réseau d’eau et d’énergie mieux conçu pour résister aux perturbations', 'is_correct' => true],
                            ['choice_text' => 'Un dispositif qui augmente volontairement les pertes de réseau', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des capacités de stockage', 'is_correct' => false],
                            ['choice_text' => 'Une réduction de l’entretien des infrastructures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise remplace un équipement très énergivore par un modèle plus efficace qui fournit le même service. Quel bénéfice environnemental est directement recherché ?',
                        'explanation' => 'À service rendu identique, utiliser moins d’énergie réduit la consommation de ressources énergétiques et peut diminuer certaines émissions associées à cette consommation.',
                        'choices' => [
                            ['choice_text' => 'Réduire la consommation d’énergie pour un même service', 'is_correct' => true],
                            ['choice_text' => 'Augmenter volontairement les pertes d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les investissements productifs', 'is_correct' => false],
                            ['choice_text' => 'Rendre l’activité économique indépendante des ressources', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Politiques de développement et évaluation',
                'description' => 'Bases pour comprendre les interventions publiques, leurs objectifs et la manière d’évaluer leurs résultats.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Pourquoi un gouvernement peut-il financer une infrastructure dans une zone défavorisée ?',
                        'explanation' => 'Une infrastructure peut produire des bénéfices qui dépassent le seul usager direct, par exemple en facilitant l’accès aux marchés et aux services pour toute une région.',
                        'choices' => [
                            ['choice_text' => 'Pour améliorer l’accès aux marchés et aux services dans la zone', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer tous les revenus privés', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute migration', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire automatiquement la productivité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une politique de développement est dite ciblée lorsqu’elle :',
                        'explanation' => 'Une politique ciblée concentre ses ressources sur un groupe ou un territoire défini plutôt que de les distribuer de manière identique à toute la population.',
                        'choices' => [
                            ['choice_text' => 'Concentre les ressources sur un groupe ou un territoire précis', 'is_correct' => true],
                            ['choice_text' => 'S’applique obligatoirement à tous les pays', 'is_correct' => false],
                            ['choice_text' => 'Ignore toute information sur les bénéficiaires', 'is_correct' => false],
                            ['choice_text' => 'Consiste uniquement à réduire les impôts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une évaluation est-elle utile après la mise en place d’un programme de développement ?',
                        'explanation' => 'L’évaluation permet de déterminer si le programme a atteint ses objectifs, d’identifier les résultats inattendus et d’améliorer les décisions futures.',
                        'choices' => [
                            ['choice_text' => 'Pour mesurer les résultats et améliorer les décisions futures', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que toutes les politiques ont réussi', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter de collecter des données', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute comparaison', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un programme offre des bourses scolaires à des familles à faibles revenus. Quel objectif est le plus directement visé ?',
                        'explanation' => 'Les bourses réduisent le coût supporté par les familles et peuvent faciliter la fréquentation scolaire des enfants issus de ménages pauvres.',
                        'choices' => [
                            ['choice_text' => 'Réduire les obstacles financiers à la scolarisation', 'is_correct' => true],
                            ['choice_text' => 'Réduire la capacité des écoles', 'is_correct' => false],
                            ['choice_text' => 'Augmenter le coût de l’éducation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les besoins de transport', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu’un programme reçoit un budget plus important sans amélioration des résultats ?',
                        'explanation' => 'Une hausse des dépenses ne garantit pas de meilleurs résultats. Il peut être nécessaire d’examiner la conception du programme, son ciblage et son efficacité.',
                        'choices' => [
                            ['choice_text' => 'Les ressources supplémentaires peuvent être peu efficaces', 'is_correct' => true],
                            ['choice_text' => 'Les résultats s’améliorent toujours automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Le programme devient nécessairement privé', 'is_correct' => false],
                            ['choice_text' => 'La pauvreté disparaît par définition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur conviendrait pour suivre un programme qui vise à améliorer l’accès à l’eau potable ?',
                        'explanation' => 'La part de la population ayant accès à une source d’eau potable sûre correspond directement à l’objectif du programme et permet d’en suivre les progrès.',
                        'choices' => [
                            ['choice_text' => 'La proportion de la population ayant accès à une eau potable sûre', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de voitures neuves vendues', 'is_correct' => false],
                            ['choice_text' => 'Le cours quotidien d’une action', 'is_correct' => false],
                            ['choice_text' => 'La superficie des bureaux administratifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une politique améliore la route entre une zone rurale et un marché urbain. Quel résultat peut être suivi pour évaluer son effet économique ?',
                        'explanation' => 'L’évolution du temps ou du coût de transport et la participation au marché constituent des résultats directement liés à l’objectif de connexion économique.',
                        'choices' => [
                            ['choice_text' => 'Le coût de transport vers le marché', 'is_correct' => true],
                            ['choice_text' => 'La couleur des panneaux routiers', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de billets de banque différents', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de fêtes locales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les politiques de développement peuvent-elles viser plusieurs secteurs en même temps ?',
                        'explanation' => 'L’éducation, la santé, les infrastructures et les institutions sont complémentaires. Des progrès coordonnés peuvent donc renforcer mutuellement leurs effets.',
                        'choices' => [
                            ['choice_text' => 'Parce que plusieurs contraintes du développement peuvent être liées entre elles', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un seul secteur ne produit jamais de valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les budgets doivent être égaux', 'is_correct' => false],
                            ['choice_text' => 'Parce que les infrastructures remplacent les compétences', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe améliore la qualité d’une décision publique de développement ?',
                        'explanation' => 'L’utilisation de données fiables et l’évaluation des résultats permettent de comparer les objectifs aux effets réels et de corriger les dispositifs lorsque cela est nécessaire.',
                        'choices' => [
                            ['choice_text' => 'S’appuyer sur des données et sur l’évaluation des résultats', 'is_correct' => true],
                            ['choice_text' => 'Décider sans définir d’objectif', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les effets inattendus', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute mesure des résultats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un programme de formation, pourquoi faut-il distinguer le nombre de personnes formées du résultat obtenu ?',
                        'explanation' => 'Le nombre de participants mesure une réalisation du programme, tandis que l’amélioration des compétences, de l’emploi ou du revenu correspond davantage au résultat recherché.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une activité réalisée ne garantit pas à elle seule le résultat final', 'is_correct' => true],
                            ['choice_text' => 'Parce que les participants ne reçoivent jamais de formation', 'is_correct' => false],
                            ['choice_text' => 'Parce que le nombre de personnes formées est toujours inutile', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un programme ne peut jamais être évalué', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un programme est présenté comme « réussi » uniquement parce que son budget a été entièrement dépensé. Pourquoi ce critère est-il insuffisant ?',
                        'explanation' => 'La dépense du budget indique que les ressources ont été consommées, mais ne dit pas si les objectifs de développement ont été atteints ni à quel coût.',
                        'choices' => [
                            ['choice_text' => 'La réussite dépend aussi des résultats obtenus', 'is_correct' => true],
                            ['choice_text' => 'Un budget ne peut jamais être dépensé', 'is_correct' => false],
                            ['choice_text' => 'Les objectifs de développement ne se mesurent pas', 'is_correct' => false],
                            ['choice_text' => 'Toutes les dépenses publiques sont inefficaces', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Scénarios de développement : raisonnement appliqué',
                'description' => 'Petites études de cas pour mobiliser les principaux concepts de l’économie du développement.',
                'duration' => 27,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Une région dispose d’un bon réseau routier mais d’écoles très éloignées des villages. Quelle contrainte de développement reste particulièrement visible ?',
                        'explanation' => 'Les infrastructures de transport ne remplacent pas les services sociaux. L’éloignement des écoles peut continuer à limiter l’accès à l’éducation.',
                        'choices' => [
                            ['choice_text' => 'L’accès à l’éducation', 'is_correct' => true],
                            ['choice_text' => 'La qualité des routes', 'is_correct' => false],
                            ['choice_text' => 'La définition du PIB', 'is_correct' => false],
                            ['choice_text' => 'Le fonctionnement des marchés financiers mondiaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un pays investit dans l’irrigation, la formation des agriculteurs et les routes rurales. Pourquoi cette combinaison peut-elle être cohérente ?',
                        'explanation' => 'Les infrastructures et les compétences sont complémentaires : l’irrigation améliore la capacité de production, la formation les pratiques et les routes l’accès aux marchés.',
                        'choices' => [
                            ['choice_text' => 'Parce que plusieurs contraintes de production et d’accès au marché sont traitées ensemble', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un seul secteur suffit toujours au développement', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’agriculture ne dépend jamais des infrastructures', 'is_correct' => false],
                            ['choice_text' => 'Parce que la formation réduit nécessairement la productivité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux ménages ont le même revenu, mais le premier dispose d’un centre de santé proche et le second non. Quelle dimension supplémentaire faut-il considérer pour comparer leur bien-être ?',
                        'explanation' => 'Le bien-être ne dépend pas uniquement du revenu. L’accès effectif aux services essentiels, comme la santé, constitue une autre dimension importante du développement humain.',
                        'choices' => [
                            ['choice_text' => 'L’accès aux services de santé', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la couleur des maisons', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de pièces de monnaie possédées', 'is_correct' => false],
                            ['choice_text' => 'Le type de téléphone utilisé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise s’installe dans une région parce que le système judiciaire y est prévisible et que les contrats sont bien appliqués. Quel facteur de développement est mis en avant ?',
                        'explanation' => 'La prévisibilité des règles et la bonne application des contrats sont des caractéristiques institutionnelles susceptibles de réduire l’incertitude des investisseurs.',
                        'choices' => [
                            ['choice_text' => 'La qualité des institutions', 'is_correct' => true],
                            ['choice_text' => 'La météo', 'is_correct' => false],
                            ['choice_text' => 'La taille de la population mondiale', 'is_correct' => false],
                            ['choice_text' => 'Le goût des consommateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une province voit son industrie progresser rapidement, mais ses écoles et ses services de santé stagnent. Quelle lecture est la plus appropriée ?',
                        'explanation' => 'La progression industrielle peut soutenir la croissance et créer des emplois, mais le développement au sens large dépend aussi des dimensions humaines et sociales.',
                        'choices' => [
                            ['choice_text' => 'La région connaît une transformation économique, mais le développement reste multidimensionnel', 'is_correct' => true],
                            ['choice_text' => 'Toute croissance industrielle signifie que tous les problèmes sont résolus', 'is_correct' => false],
                            ['choice_text' => 'L’industrie n’a jamais d’effet économique', 'is_correct' => false],
                            ['choice_text' => 'La santé n’a aucun rôle dans le développement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une sécheresse réduit fortement la production agricole d’une région dépendante de ce secteur. Quelle vulnérabilité est illustrée ?',
                        'explanation' => 'Une forte concentration de l’activité dans un secteur exposé aux conditions climatiques rend les revenus et l’emploi plus sensibles à un choc naturel.',
                        'choices' => [
                            ['choice_text' => 'Une dépendance sectorielle exposée à un choc naturel', 'is_correct' => true],
                            ['choice_text' => 'Une diversification parfaite', 'is_correct' => false],
                            ['choice_text' => 'Une hausse certaine du capital humain', 'is_correct' => false],
                            ['choice_text' => 'Une baisse obligatoire de la demande de santé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une municipalité ouvre un service numérique permettant aux petites entreprises d’accomplir plus facilement des démarches administratives. Quel bénéfice économique immédiat peut-on rechercher ?',
                        'explanation' => 'La simplification administrative peut réduire le temps consacré aux démarches et certains coûts de transaction, ce qui facilite l’activité des entreprises.',
                        'choices' => [
                            ['choice_text' => 'Réduire certains coûts administratifs', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les impôts', 'is_correct' => false],
                            ['choice_text' => 'Rendre les marchés parfaitement concurrentiels', 'is_correct' => false],
                            ['choice_text' => 'Éliminer tout risque entrepreneurial', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du nombre de personnes ayant terminé le secondaire est observée dans une région. Quel effet potentiel mérite d’être suivi ?',
                        'explanation' => 'Un niveau d’éducation plus élevé peut accroître les compétences disponibles et améliorer l’accès à des emplois plus productifs. L’effet réel doit toutefois être vérifié par les données.',
                        'choices' => [
                            ['choice_text' => 'L’évolution des compétences et de l’emploi des personnes concernées', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le nombre de véhicules vendus', 'is_correct' => false],
                            ['choice_text' => 'La couleur des uniformes scolaires', 'is_correct' => false],
                            ['choice_text' => 'Le prix international du pétrole uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un programme de développement augmente la scolarisation des filles dans une zone où elle était faible. Quel enjeu de développement est directement concerné ?',
                        'explanation' => 'L’éducation des filles améliore leur capital humain et leurs possibilités futures, avec des effets possibles sur les revenus, la santé et le bien-être des ménages.',
                        'choices' => [
                            ['choice_text' => 'L’accès équitable au capital humain', 'is_correct' => true],
                            ['choice_text' => 'La réduction automatique du commerce extérieur', 'is_correct' => false],
                            ['choice_text' => 'La disparition des infrastructures', 'is_correct' => false],
                            ['choice_text' => 'L’augmentation mécanique de la dette privée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une région améliore ses transports, mais les prix des biens restent élevés parce que les fournisseurs sont très éloignés. Quel facteur supplémentaire peut-il être utile d’examiner ?',
                        'explanation' => 'Les coûts de transport et la localisation des fournisseurs influencent les prix. Une meilleure infrastructure ne suffit pas nécessairement si les chaînes d’approvisionnement restent longues ou peu compétitives.',
                        'choices' => [
                            ['choice_text' => 'La structure des marchés et les coûts d’approvisionnement', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le niveau de scolarité', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de jours fériés', 'is_correct' => false],
                            ['choice_text' => 'La taille des salles de classe', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Révision générale du développement économique',
                'description' => 'Révision intégrée des notions essentielles : pauvreté, capital humain, institutions, indicateurs et transformation structurelle.',
                'duration' => 29,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel ensemble décrit le mieux une approche multidimensionnelle du développement ?',
                        'explanation' => 'Une approche multidimensionnelle combine des dimensions économiques et sociales, comme le revenu, la santé et l’éducation, au lieu de se limiter à la production.',
                        'choices' => [
                            ['choice_text' => 'Revenu, santé, éducation et conditions de vie', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le PIB nominal', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la valeur des exportations', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le nombre d’entreprises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme peut relier éducation et croissance de long terme ?',
                        'explanation' => 'L’éducation peut accroître les compétences des travailleurs, soutenir la productivité et faciliter l’adoption de nouvelles technologies.',
                        'choices' => [
                            ['choice_text' => 'L’accumulation de compétences peut soutenir la productivité', 'is_correct' => true],
                            ['choice_text' => 'L’éducation réduit toujours le stock de capital', 'is_correct' => false],
                            ['choice_text' => 'L’éducation interdit les innovations', 'is_correct' => false],
                            ['choice_text' => 'L’éducation n’a aucun effet économique possible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un indicateur passe de 60 à 66. De combien a-t-il augmenté en pourcentage ?',
                        'explanation' => 'L’augmentation absolue est de 6. Rapportée au niveau initial de 60, cela donne 6/60 = 0,10, soit une hausse de 10 %.',
                        'choices' => [
                            ['choice_text' => '5 %', 'is_correct' => false],
                            ['choice_text' => '8 %', 'is_correct' => false],
                            ['choice_text' => '10 %', 'is_correct' => true],
                            ['choice_text' => '12 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un pays réduit fortement la mortalité infantile et augmente le taux de scolarisation, sans progression spectaculaire du revenu. Que montre surtout cet exemple ?',
                        'explanation' => 'Le développement peut progresser par les dimensions sociales même lorsque la croissance du revenu est modérée. Cela confirme l’intérêt d’une lecture multidimensionnelle.',
                        'choices' => [
                            ['choice_text' => 'Les progrès sociaux peuvent faire partie du développement', 'is_correct' => true],
                            ['choice_text' => 'Le revenu est inutile en économie', 'is_correct' => false],
                            ['choice_text' => 'La croissance et le développement sont forcément opposés', 'is_correct' => false],
                            ['choice_text' => 'L’éducation empêche toute amélioration économique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur peut rendre une politique de développement plus durable à long terme ?',
                        'explanation' => 'Des institutions solides et prévisibles facilitent la continuité des politiques, la protection des investissements et la coordination économique dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Des institutions crédibles et prévisibles', 'is_correct' => true],
                            ['choice_text' => 'Une absence totale de règles', 'is_correct' => false],
                            ['choice_text' => 'Une dépendance à un seul produit', 'is_correct' => false],
                            ['choice_text' => 'Une suppression de l’investissement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la diversification économique est-elle souvent considérée comme importante ?',
                        'explanation' => 'Diversifier les activités réduit la dépendance à un seul secteur et peut rendre les revenus et l’emploi moins vulnérables à certains chocs spécifiques.',
                        'choices' => [
                            ['choice_text' => 'Elle peut réduire la dépendance à un seul secteur', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit l’absence de tout risque', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche toute spécialisation', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les échanges internationaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une politique améliore simultanément les routes rurales et l’accès au crédit pour les petits producteurs. Quel résultat commun peut-elle rechercher ?',
                        'explanation' => 'Les routes facilitent l’accès aux marchés tandis que le crédit peut faciliter l’achat d’intrants ou l’investissement. Les deux peuvent donc lever des contraintes complémentaires de production.',
                        'choices' => [
                            ['choice_text' => 'Faciliter l’investissement et l’accès aux marchés', 'is_correct' => true],
                            ['choice_text' => 'Réduire automatiquement la productivité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les différences régionales', 'is_correct' => false],
                            ['choice_text' => 'Réduire nécessairement l’offre alimentaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation est la plus correcte à propos du revenu par habitant ?',
                        'explanation' => 'Le revenu par habitant donne une moyenne de ressources économiques, mais il ne révèle ni la répartition des revenus ni l’ensemble des dimensions non monétaires du bien-être.',
                        'choices' => [
                            ['choice_text' => 'Il est utile mais insuffisant pour mesurer à lui seul le développement', 'is_correct' => true],
                            ['choice_text' => 'Il mesure directement l’égalité entre ménages', 'is_correct' => false],
                            ['choice_text' => 'Il remplace les indicateurs de santé', 'is_correct' => false],
                            ['choice_text' => 'Il ne peut jamais être comparé entre pays', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel changement correspond le mieux à une amélioration de la productivité ?',
                        'explanation' => 'La productivité mesure la quantité de production obtenue à partir d’un facteur ou d’un ensemble de facteurs. Produire davantage avec le même nombre d’heures de travail illustre une hausse de productivité du travail.',
                        'choices' => [
                            ['choice_text' => 'Produire plus avec le même nombre d’heures de travail', 'is_correct' => true],
                            ['choice_text' => 'Produire la même quantité avec plus de pertes', 'is_correct' => false],
                            ['choice_text' => 'Augmenter uniquement le prix de vente', 'is_correct' => false],
                            ['choice_text' => 'Réduire la qualité tout en gardant la même production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un gouvernement veut réduire la pauvreté à long terme. Pourquoi une stratégie combinant éducation, santé et emploi peut-elle être cohérente ?',
                        'explanation' => 'La pauvreté est liée à plusieurs contraintes. L’éducation et la santé renforcent les capacités des personnes, tandis que l’accès à l’emploi permet de transformer ces capacités en revenus.',
                        'choices' => [
                            ['choice_text' => 'Parce que plusieurs dimensions des opportunités économiques se renforcent mutuellement', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un seul secteur ne peut jamais être efficace', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ménages n’ont pas besoin de revenus', 'is_correct' => false],
                            ['choice_text' => 'Parce que la santé et l’éducation n’ont aucun coût', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une région est mieux connectée aux marchés, mais manque encore de travailleurs qualifiés. Quel complément de politique paraît directement lié à cette contrainte ?',
                        'explanation' => 'Lorsque l’accès aux marchés est amélioré mais que les compétences manquent, la formation et l’éducation peuvent aider les travailleurs à répondre aux besoins des activités nouvelles.',
                        'choices' => [
                            ['choice_text' => 'Des actions de formation et de développement des compétences', 'is_correct' => true],
                            ['choice_text' => 'Une fermeture des centres de formation', 'is_correct' => false],
                            ['choice_text' => 'Une réduction volontaire des infrastructures', 'is_correct' => false],
                            ['choice_text' => 'Une interdiction de créer des entreprises', 'is_correct' => false],
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
