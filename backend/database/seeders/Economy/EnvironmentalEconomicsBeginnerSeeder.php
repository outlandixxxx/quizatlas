<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EnvironmentalEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'environmental-economics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondamentaux de l’économie de l’environnement',
                'description' => 'Quiz d’introduction sur les ressources environnementales, les externalités, les biens publics et les principaux enjeux économiques liés à l’environnement.',
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Une usine rejette de la fumée qui dégrade la qualité de l’air pour les habitants voisins. Quel concept économique décrit cette situation ?',
                        'explanation' => 'Il s’agit d’une externalité négative : une activité impose un coût à des personnes qui ne participent pas directement à la décision de production.',
                        'choices' => [
                            [
                                'choice_text' => 'Externalité positive',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Externalité négative',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Bien privé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Économie d’échelle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le marché peut-il produire trop de pollution en l’absence d’intervention ?',
                        'explanation' => 'Le producteur tient surtout compte de ses coûts privés. Si une partie du coût de la pollution est supportée par d’autres, le coût social est supérieur au coût privé.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que la pollution augmente toujours le prix du produit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le coût social peut dépasser le coût privé supporté par le producteur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que toutes les entreprises sont publiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les consommateurs connaissent toujours le coût réel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un parc naturel accessible à tous, dont il est difficile d’exclure les visiteurs, se rapproche de quel type de bien ?',
                        'explanation' => 'Un bien présentant une forte difficulté d’exclusion et une consommation qui peut limiter celle des autres peut relever des catégories étudiées pour les biens et ressources collectives.',
                        'choices' => [
                            [
                                'choice_text' => 'Bien privé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Bien de luxe',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Bien public ou ressource collective selon ses propriétés précises',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Bien intermédiaire uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Laquelle de ces actions constitue une externalité positive ?',
                        'explanation' => 'Une activité crée un bénéfice pour des tiers sans que ceux-ci paient directement l’agent à l’origine de ce bénéfice.',
                        'choices' => [
                            [
                                'choice_text' => 'Un agriculteur utilise trop d’engrais et pollue une rivière',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un automobiliste provoque un embouteillage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un propriétaire entretient un jardin qui améliore l’environnement visuel du quartier',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une entreprise augmente ses coûts de transport',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence décrit le mieux le coût privé et le coût social d’une activité polluante ?',
                        'explanation' => 'Le coût social inclut les coûts supportés par l’ensemble des personnes concernées, tandis que le coût privé concerne directement l’agent économique.',
                        'choices' => [
                            [
                                'choice_text' => 'Le coût social ne concerne que l’entreprise',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le coût privé inclut toujours tous les dommages environnementaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le coût social peut inclure des dommages subis par des tiers',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les deux coûts sont forcément identiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si une ressource environnementale est limitée, l’utiliser aujourd’hui peut réduire sa disponibilité future. Quelle idée cela illustre-t-il ?',
                        'explanation' => 'La gestion d’une ressource limitée implique de tenir compte de sa disponibilité dans le temps et donc du compromis entre usages présents et futurs.',
                        'choices' => [
                            [
                                'choice_text' => 'La disparition de tout coût d’opportunité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un compromis intertemporel',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La gratuité des ressources naturelles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une externalité positive automatique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une taxe sur les émissions vise principalement à quoi ?',
                        'explanation' => 'Une taxe environnementale peut faire entrer dans les décisions privées une partie du coût social des dommages causés par la pollution.',
                        'choices' => [
                            [
                                'choice_text' => 'À rendre la pollution gratuite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À intégrer le coût social de la pollution dans les décisions des pollueurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'À interdire toute activité industrielle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À supprimer tous les impôts',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la qualité de l’air peut-elle être étudiée comme un problème de bien collectif ?',
                        'explanation' => 'La difficulté d’exclure les individus et les effets partagés de la qualité de l’air rendent l’organisation du marché plus délicate.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que personne ne peut en bénéficier',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la qualité de l’air ne coûte rien à améliorer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que ses bénéfices peuvent être partagés largement et qu’il est difficile d’exclure les utilisateurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’elle est vendue uniquement par des entreprises privées',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise remplace une vieille machine très polluante par une machine plus propre sans obligation légale. Quel résultat économique direct peut-on attendre ?',
                        'explanation' => 'Si la nouvelle machine réduit les émissions, l’entreprise diminue le dommage environnemental associé à sa production, même sans nouvelle règle imposée.',
                        'choices' => [
                            [
                                'choice_text' => 'Une augmentation automatique de la pollution',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse des émissions liées à cette activité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La disparition de toute consommation d’énergie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse certaine de la production',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que cherche à comparer l’analyse économique de l’environnement lorsqu’elle évalue une politique de réduction de la pollution ?',
                        'explanation' => 'Une politique peut être jugée économiquement en mettant en balance ses coûts et les bénéfices qu’elle procure à la société.',
                        'choices' => [
                            [
                                'choice_text' => 'Seulement le coût administratif de la politique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les coûts de la politique et les bénéfices environnementaux et sociaux attendus',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement les profits des entreprises',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement le nombre de lois adoptées',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond le mieux à une ressource renouvelable lorsqu’elle est correctement gérée ?',
                        'explanation' => 'Une ressource renouvelable peut se reconstituer naturellement, mais son exploitation excessive peut dépasser sa capacité de régénération.',
                        'choices' => [
                            [
                                'choice_text' => 'Un gisement de pétrole',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un stock minier métallique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une forêt exploitée à un rythme compatible avec sa régénération',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une quantité fixe de charbon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Externalités et défaillances du marché',
                'description' => 'Exercices d’application pour reconnaître les externalités, distinguer coûts privés et sociaux et comprendre pourquoi une intervention peut être nécessaire.',
                'duration' => 20,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => 'Deux voisins profitent gratuitement des arbres plantés et entretenus par l’un d’eux, qui améliorent la qualité de l’air du quartier. Quel mécanisme est illustré ?',
                        'explanation' => 'Le bénéfice profite aussi à des tiers qui ne rémunèrent pas directement la personne à l’origine de l’amélioration.',
                        'choices' => [
                            [
                                'choice_text' => 'Une externalité positive',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une externalité négative',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une pénurie monétaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une barrière à l’entrée',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une usine choisit une technologie parce qu’elle est moins chère pour elle, mais cette technologie émet davantage de polluants. Que peut-on conclure ?',
                        'explanation' => 'Le choix privé peut être différent du choix social lorsque certains dommages environnementaux ne sont pas pris en compte dans le calcul de l’entreprise.',
                        'choices' => [
                            [
                                'choice_text' => 'Le choix privé garantit toujours l’optimum social',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le coût privé peut sous-estimer le coût social',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les émissions n’ont jamais de coût économique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La réglementation est toujours inutile',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Le bruit produit par un aéroport qui affecte les riverains sans compensation est principalement quel type d’externalité ?',
                        'explanation' => 'Le bruit subi par des personnes extérieures à la décision de transport constitue un effet externe négatif.',
                        'choices' => [
                            [
                                'choice_text' => 'Externalité positive',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Externalité négative',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Bien privé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Gain de productivité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une subvention à l’isolation des logements peut être justifiée en partie parce qu’elle réduit la consommation d’énergie et les émissions. Cela peut favoriser :',
                        'explanation' => 'Une subvention peut encourager une activité dont les bénéfices dépassent le seul intérêt privé de l’utilisateur.',
                        'choices' => [
                            [
                                'choice_text' => 'Une externalité positive',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une externalité négative',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique du capital humain',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un monopole naturel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si le coût social d’une tonne de pollution est de 40 unités monétaires et que l’entreprise ne supporte directement que 15 unités, quelle situation décrit-on ?',
                        'explanation' => 'Le dommage supplémentaire subi par les tiers fait que le coût pris en compte par l’entreprise est inférieur au coût social total.',
                        'choices' => [
                            [
                                'choice_text' => 'Le coût privé est supérieur au coût social de 25 unités',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le coût social dépasse le coût privé de 25 unités',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les deux coûts sont égaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La pollution n’a aucun coût',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une ville instaure une zone à faibles émissions dans le centre. Quel objectif environnemental est le plus direct ?',
                        'explanation' => 'La restriction vise à réduire les émissions produites par certaines activités de transport dans une zone donnée.',
                        'choices' => [
                            [
                                'choice_text' => 'Augmenter la consommation de carburant',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire certaines émissions locales',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Supprimer tous les déplacements',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Rendre toutes les voitures gratuites',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel raisonnement explique qu’une externalité négative puisse conduire à une quantité de production trop élevée ?',
                        'explanation' => 'Lorsque le dommage subi par des tiers n’est pas intégré au prix ou aux décisions du producteur, la production privée peut être supérieure au niveau socialement souhaitable.',
                        'choices' => [
                            [
                                'choice_text' => 'Les entreprises produisent toujours trop',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le marché ignore parfois une partie des coûts imposés à des tiers',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les consommateurs refusent toute production',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La demande disparaît toujours en présence de pollution',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise installe un filtre qui réduit fortement les émissions, mais le coût de l’installation est entièrement privé. Pourquoi peut-elle malgré tout avoir intérêt à agir ?',
                        'explanation' => 'Elle peut agir pour respecter une règle, préserver sa réputation ou anticiper des coûts futurs, même si le bénéfice environnemental profite aussi aux tiers.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que toute dépense privée crée automatiquement un bénéfice privé supérieur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’une réduction des émissions peut éviter certains coûts futurs ou exigences réglementaires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la pollution est toujours profitable',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le filtre augmente nécessairement les ventes de dix pour cent',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans quel cas une externalité est-elle absente ?',
                        'explanation' => 'Une externalité concerne un effet d’une décision économique sur des tiers qui n’est pas correctement pris en compte dans l’échange concerné.',
                        'choices' => [
                            [
                                'choice_text' => 'Lorsqu’un contrat de vente d’un bien privé n’impose ni bénéfice ni coût non compensé à des tiers',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Lorsqu’une usine pollue une rivière voisine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Lorsqu’un vaccin protège indirectement d’autres personnes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Lorsqu’un camion crée du bruit pour les riverains',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe proportionnelle aux émissions peut-elle modifier le comportement d’une entreprise ?',
                        'explanation' => 'En renchérissant le coût de la pollution, la taxe rend économiquement plus attractives les technologies ou méthodes de production moins polluantes.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle réduit mécaniquement tous les salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle augmente le coût privé des émissions et peut encourager leur réduction',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle interdit toute activité productive',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime la demande du marché',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si plusieurs activités génèrent des dommages environnementaux différents, pourquoi une politique uniforme peut-elle être imparfaite ?',
                        'explanation' => 'Les dommages et les coûts de réduction peuvent varier selon les activités, ce qui peut rendre une même contrainte trop faible pour certaines et trop forte pour d’autres.',
                        'choices' => [
                            [
                                'choice_text' => 'Toutes les activités ont exactement le même coût de réduction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les dommages environnementaux et les coûts d’abattement peuvent différer selon les sources',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une règle uniforme est toujours impossible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les entreprises ne réagissent jamais aux incitations',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Pollution et instruments de politique environnementale',
                'description' => 'Quiz consacré aux taxes, normes, permis échangeables et autres instruments utilisés pour limiter les émissions et orienter les comportements.',
                'duration' => 22,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => 'Une norme impose à chaque usine de ne pas dépasser un niveau précis d’émissions. De quel instrument s’agit-il ?',
                        'explanation' => 'Une norme environnementale fixe directement une obligation ou une limite à respecter.',
                        'choices' => [
                            [
                                'choice_text' => 'Une norme réglementaire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une subvention salariale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un taux de change',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une cotisation retraite',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principe d’un système de permis d’émission échangeables ?',
                        'explanation' => 'Les entreprises détiennent des droits d’émission encadrés et peuvent échanger ces droits, ce qui permet de réallouer les réductions entre sources.',
                        'choices' => [
                            [
                                'choice_text' => 'Chaque entreprise peut polluer sans limite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les permis sont échangés dans un cadre où la quantité totale autorisée est encadrée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le gouvernement fixe directement le profit de chaque entreprise',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les émissions sont transformées en actions boursières',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une taxe carbone augmente le prix de l’utilisation de combustibles très émetteurs. Quel signal envoie-t-elle ?',
                        'explanation' => 'En augmentant le coût des émissions, la taxe encourage la prise en compte du dommage climatique dans les décisions économiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Les activités polluantes deviennent moins coûteuses',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le prix privé reflète davantage le coût associé aux émissions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les émissions deviennent légalement obligatoires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La consommation d’énergie devient impossible',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage économique peut présenter un permis échangeable par rapport à une obligation identique pour toutes les entreprises ?',
                        'explanation' => 'Les échanges permettent, sous certaines conditions, que les réductions soient réalisées davantage par les entreprises dont le coût de réduction est plus faible.',
                        'choices' => [
                            [
                                'choice_text' => 'Il oblige chaque entreprise à réduire exactement de la même quantité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il peut permettre de répartir les réductions en fonction des coûts de réduction des différentes entreprises',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il supprime toute surveillance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il rend les émissions illimitées',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique environnementale peut-elle être accompagnée d’un mécanisme de contrôle ?',
                        'explanation' => 'Sans suivi, il est difficile de vérifier que les règles ou limites d’émission sont effectivement respectées.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que le contrôle augmente toujours la production',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il permet de vérifier le respect des règles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’un contrôle remplace toute information économique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les entreprises ne peuvent jamais mesurer leurs émissions',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une subvention finance une partie du coût d’un équipement qui réduit les émissions. Quel est son effet recherché ?',
                        'explanation' => 'En réduisant le coût privé de la dépollution, la subvention peut encourager l’adoption de technologies plus propres.',
                        'choices' => [
                            [
                                'choice_text' => 'Décourager l’investissement environnemental',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Encourager l’investissement dans une technologie moins polluante',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Augmenter nécessairement les émissions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer le prix de l’électricité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis une norme très stricte peut-elle créer pour une petite entreprise ?',
                        'explanation' => 'Une règle stricte peut améliorer l’environnement mais imposer un coût d’adaptation important, surtout pour une entreprise disposant de peu de ressources.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle n’a jamais aucun coût',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle peut réduire les émissions tout en imposant des coûts d’adaptation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle garantit une hausse des profits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime la concurrence internationale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si une entreprise peut réduire une tonne d’émissions pour 10 et une autre pour 30, laquelle a intérêt, toutes choses égales par ailleurs, à réaliser davantage de réduction dans un système flexible ?',
                        'explanation' => 'Un mécanisme flexible tend à permettre les réductions là où elles coûtent moins cher, sous réserve des règles du dispositif.',
                        'choices' => [
                            [
                                'choice_text' => 'L’entreprise dont la réduction coûte 10',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’entreprise dont la réduction coûte 30',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les deux doivent toujours réduire exactement la même quantité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Aucune des deux',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif commun d’une taxe sur la pollution et d’un système de permis échangeables ?',
                        'explanation' => 'Ces deux instruments cherchent à réduire les émissions en faisant entrer leur coût environnemental dans les décisions économiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Augmenter les émissions totales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire la pollution grâce à des incitations économiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Fixer les salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Interdire les échanges internationaux',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe environnementale n’interdit-elle pas forcément une activité polluante ?',
                        'explanation' => 'Une taxe peut laisser l’activité possible tout en la rendant plus coûteuse, de sorte que certains agents réduisent ou modifient leur comportement.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’une taxe supprime toujours le marché',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elle modifie les incitations sans constituer nécessairement une interdiction',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’elle garantit que toutes les entreprises ferment',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elle ne change jamais les décisions',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une politique publique combine une limite d’émissions et une aide à l’innovation propre. Quelle logique est cohérente ?',
                        'explanation' => 'La limite fixe une contrainte environnementale tandis que l’aide peut réduire le coût du développement ou de l’adoption de solutions moins polluantes.',
                        'choices' => [
                            [
                                'choice_text' => 'Les deux instruments ont nécessairement des objectifs opposés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La contrainte peut limiter les émissions et l’aide peut faciliter l’adaptation technologique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’aide rend toute règle inutile',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La limite augmente automatiquement la productivité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Ressources naturelles et développement durable',
                'description' => 'Questions sur les ressources renouvelables et non renouvelables, la gestion dans le temps et l’idée de développement durable.',
                'duration' => 19,
                'passing_score' => 54,
                'questions' => [
                    [
                        'question' => 'Le pétrole appartient à quelle catégorie ?',
                        'explanation' => 'Le pétrole est une ressource non renouvelable à l’échelle humaine : son stock naturel se reconstitue très lentement.',
                        'choices' => [
                            [
                                'choice_text' => 'Ressource renouvelable',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ressource non renouvelable',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Bien public pur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Externalité positive',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une forêt peut rester exploitable à long terme si les prélèvements restent compatibles avec sa régénération. Quel principe cela illustre-t-il ?',
                        'explanation' => 'La gestion durable cherche à ne pas dépasser la capacité de renouvellement de la ressource.',
                        'choices' => [
                            [
                                'choice_text' => 'Le stock doit toujours diminuer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les prélèvements peuvent être compatibles avec la capacité de régénération',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une ressource renouvelable est infinie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le prix est toujours nul',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie le développement durable dans son sens général ?',
                        'explanation' => 'Il s’agit d’organiser le développement en tenant compte des besoins présents tout en préservant la possibilité de répondre aux besoins futurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Satisfaire uniquement la consommation actuelle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Privilégier uniquement la croissance du PIB',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Répondre aux besoins présents sans compromettre les possibilités futures',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Interdire l’utilisation des ressources naturelles',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une nappe d’eau se recharge lentement alors que les prélèvements augmentent rapidement. Quel risque apparaît ?',
                        'explanation' => 'Lorsque les prélèvements dépassent durablement la recharge, le stock d’eau peut diminuer.',
                        'choices' => [
                            [
                                'choice_text' => 'La recharge augmente automatiquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le stock peut diminuer si les prélèvements dépassent durablement la recharge',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’eau devient une ressource non renouvelable par définition',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La demande d’eau disparaît',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le temps est-il important dans l’analyse des ressources naturelles ?',
                        'explanation' => 'L’exploitation actuelle peut modifier la quantité ou la qualité de la ressource disponible plus tard, ce qui oblige à comparer les usages dans le temps.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les ressources n’ont jamais de valeur aujourd’hui',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l’utilisation actuelle peut affecter la disponibilité future',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que le futur n’a aucun rôle dans l’économie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’un stock naturel est toujours constant',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple représente une ressource non renouvelable utilisée comme intrant énergétique ?',
                        'explanation' => 'Les combustibles fossiles sont des ressources dont la reconstitution naturelle est très lente à l’échelle humaine.',
                        'choices' => [
                            [
                                'choice_text' => 'Soleil',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Vent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Charbon',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Lumière naturelle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une politique de gestion impose une limite de pêche afin de préserver le stock de poissons. Quelle est l’idée centrale ?',
                        'explanation' => 'La limite cherche à rapprocher les captures du niveau compatible avec la capacité de renouvellement du stock.',
                        'choices' => [
                            [
                                'choice_text' => 'Augmenter la pression de pêche',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Préserver le stock afin qu’il puisse se renouveler',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Supprimer toute activité maritime',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Garantir un prix fixe du poisson',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise choisit une technologie qui utilise moins d’eau par unité produite. Quel bénéfice environnemental direct peut-on attendre ?',
                        'explanation' => 'Une technologie plus économe en eau réduit la quantité de ressource nécessaire pour la même unité de production.',
                        'choices' => [
                            [
                                'choice_text' => 'Une hausse obligatoire de la pollution',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une réduction de l’intensité d’utilisation de l’eau',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition de tous les coûts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse certaine des salaires',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Laquelle de ces politiques est la plus directement liée à la gestion durable d’un stock renouvelable ?',
                        'explanation' => 'La gestion durable vise à maintenir la capacité de renouvellement du stock.',
                        'choices' => [
                            [
                                'choice_text' => 'Accroître les prélèvements sans limite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Fixer un rythme de prélèvement compatible avec la régénération',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ignorer l’état du stock',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Interdire toute mesure biologique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la notion de capital naturel complète-t-elle l’analyse économique ?',
                        'explanation' => 'Elle attire l’attention sur les ressources et les écosystèmes qui fournissent des services utiles à l’activité et au bien-être.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les ressources naturelles n’ont aucune valeur économique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les écosystèmes peuvent fournir des services utiles à la société',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que seul le capital financier compte',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la nature peut être créée instantanément',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une ville investit dans la réduction des fuites d’eau du réseau. Quelle logique économique et environnementale est la plus directe ?',
                        'explanation' => 'Réduire les fuites permet d’économiser une ressource et d’éviter de mobiliser inutilement des coûts de captage et de traitement.',
                        'choices' => [
                            [
                                'choice_text' => 'L’investissement augmente nécessairement la consommation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il peut diminuer le gaspillage d’une ressource limitée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il remplace l’ensemble des politiques environnementales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il rend toute demande d’eau nulle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Changement climatique et émissions de carbone',
                'description' => 'Introduction aux émissions de gaz à effet de serre, aux incitations économiques et aux choix de réduction des émissions.',
                'duration' => 21,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => 'Pourquoi les émissions de gaz à effet de serre constituent-elles un problème économique particulier ?',
                        'explanation' => 'Le climat est partagé à grande échelle et les émissions d’un acteur peuvent affecter d’autres populations, ce qui crée des effets externes importants.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que chaque émission ne touche que son émetteur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les émissions peuvent imposer des dommages à d’autres agents et à d’autres territoires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les émissions n’ont aucune conséquence économique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le carbone est uniquement un actif financier',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme décrit le mieux une taxe carbone ?',
                        'explanation' => 'La taxe rend les émissions plus coûteuses pour l’émetteur et crée une incitation à réduire ou substituer les activités très carbonées.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle fixe toujours directement une quantité maximale d’émissions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle fait payer l’émission de carbone afin d’en intégrer le coût social',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle rend les combustibles fossiles gratuits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle garantit une énergie renouvelable pour tous',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise investit dans l’efficacité énergétique d’un bâtiment. Quel résultat peut être recherché en même temps que la baisse des émissions ?',
                        'explanation' => 'Une meilleure efficacité énergétique peut réduire la quantité d’énergie nécessaire pour fournir le même service, ce qui peut aussi réduire certaines dépenses d’exploitation.',
                        'choices' => [
                            [
                                'choice_text' => 'Une hausse automatique de la consommation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse de l’énergie utilisée pour un même service',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une suppression du besoin de maintenance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse certaine des émissions',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans une perspective climatique, pourquoi le long terme compte-t-il ?',
                        'explanation' => 'Les émissions actuelles peuvent affecter l’accumulation de gaz à effet de serre et donc produire des effets sur une longue période.',
                        'choices' => [
                            [
                                'choice_text' => 'Les émissions disparaissent toujours le jour même',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les effets climatiques sont nécessairement instantanés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les effets cumulés peuvent s’étendre dans le temps',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le long terme n’a aucun intérêt en économie',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un ménage choisit entre deux appareils offrant le même service. L’un consomme moins d’électricité. En l’absence d’autre différence, lequel est généralement plus économe en énergie pendant son utilisation ?',
                        'explanation' => 'À service comparable, un appareil consommant moins d’électricité par unité de temps ou d’usage utilise moins d’énergie.',
                        'choices' => [
                            [
                                'choice_text' => 'Celui qui consomme davantage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Celui qui consomme moins d’électricité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les deux consomment nécessairement la même quantité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Aucun des deux',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la coopération entre pays est-elle souvent importante pour le climat ?',
                        'explanation' => 'Les émissions ont des effets qui dépassent les frontières, tandis que les décisions d’un seul pays ne contrôlent qu’une partie des émissions mondiales.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les émissions sont strictement locales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les effets des émissions dépassent les frontières nationales',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’un seul pays produit tous les gaz à effet de serre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le commerce international ne concerne jamais l’environnement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple représente une réduction directe des émissions liées au transport ?',
                        'explanation' => 'Remplacer un trajet effectué seul en voiture thermique par un mode de transport moins émetteur peut réduire les émissions du déplacement.',
                        'choices' => [
                            [
                                'choice_text' => 'Augmenter la durée d’un moteur au ralenti',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Utiliser davantage de carburant par kilomètre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Choisir un mode de transport moins émetteur pour un trajet donné',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Augmenter la distance parcourue sans changement de technologie',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une politique encourage l’isolation des logements. Quel canal peut réduire les émissions ?',
                        'explanation' => 'Une meilleure isolation réduit les besoins de chauffage ou de climatisation, ce qui peut diminuer la consommation d’énergie et les émissions associées.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle augmente automatiquement les besoins énergétiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle peut réduire les besoins d’énergie pour maintenir une température donnée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle supprime toutes les émissions du pays',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle empêche les ménages d’occuper leur logement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle économique d’un prix du carbone ?',
                        'explanation' => 'Un prix du carbone fournit un signal qui rend les activités fortement émettrices relativement plus coûteuses et peut orienter les choix vers des options moins carbonées.',
                        'choices' => [
                            [
                                'choice_text' => 'Il fixe le prix de tous les biens de l’économie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il donne un signal sur le coût associé aux émissions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il interdit tout investissement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il garantit un niveau précis de chômage',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réduit ses émissions de 20 unités grâce à une nouvelle technologie, sans réduire sa production. Quelle conclusion est la plus directe ?',
                        'explanation' => 'La quantité d’émissions associée à la production a baissé : l’intensité environnementale de l’activité s’est améliorée sur cette mesure.',
                        'choices' => [
                            [
                                'choice_text' => 'La production a nécessairement doublé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les émissions associées à l’activité ont diminué de 20 unités',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les coûts sont nécessairement nuls',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La demande du marché a disparu',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi parle-t-on parfois d’adaptation en matière climatique ?',
                        'explanation' => 'L’adaptation vise à réduire les dommages liés aux effets du changement climatique, tandis que l’atténuation vise surtout à réduire les émissions ou à augmenter les absorptions.',
                        'choices' => [
                            [
                                'choice_text' => 'L’adaptation consiste uniquement à augmenter les émissions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’adaptation cherche à réduire la vulnérabilité face aux impacts climatiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’adaptation signifie supprimer toute activité économique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’adaptation et l’atténuation sont exactement le même objectif',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Biens publics, ressources communes et passager clandestin',
                'description' => 'Quiz pratique pour distinguer biens privés, biens publics et ressources communes, avec des situations de gestion collective.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Un éclairage public profite aux personnes d’une rue sans qu’il soit facile d’exclure les non-payeurs. Quelle propriété est particulièrement importante ?',
                        'explanation' => 'La difficulté d’exclusion est une propriété clé d’un bien public.',
                        'choices' => [
                            [
                                'choice_text' => 'La rivalité parfaite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La difficulté d’exclusion',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La propriété industrielle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le caractère périssable',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le problème du passager clandestin peut-il apparaître avec un bien public ?',
                        'explanation' => 'Certaines personnes peuvent chercher à bénéficier du bien sans contribuer à son financement, surtout lorsqu’il est difficile de les exclure.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’un bien public est toujours produit par une entreprise privée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’une personne peut profiter du bien sans payer directement sa part',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les biens publics sont toujours gratuits à produire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l’État connaît toujours les préférences exactes de chacun',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une zone de pâturage est accessible à de nombreux éleveurs et l’usage par un éleveur réduit ce qui reste pour les autres. Quel type de situation cela illustre-t-il ?',
                        'explanation' => 'La ressource est difficile à réserver à un utilisateur et sa consommation peut réduire celle des autres : ce sont des caractéristiques d’une ressource commune.',
                        'choices' => [
                            [
                                'choice_text' => 'Un bien privé parfaitement exclusif',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une ressource commune',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un bien public pur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un actif financier',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence fondamentale existe entre un bien public et un bien privé ?',
                        'explanation' => 'Un bien public est généralement difficile à rendre exclusif et sa consommation par une personne ne réduit pas nécessairement celle d’une autre.',
                        'choices' => [
                            [
                                'choice_text' => 'Un bien public est toujours payant',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un bien privé est toujours fourni par l’État',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un bien public présente généralement une faible exclusion et une faible rivalité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un bien privé est toujours non rival',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une campagne de vaccination réduit aussi le risque de transmission à d’autres personnes. Quel type de bénéfice externe peut être associé ?',
                        'explanation' => 'Une personne vaccinée peut créer un bénéfice pour d’autres en réduisant la probabilité de transmission.',
                        'choices' => [
                            [
                                'choice_text' => 'Un coût externe uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un bénéfice externe',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une barrière commerciale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique des revenus',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une ressource commune est surexploitée parce que chaque utilisateur considère surtout son intérêt individuel. Quel mécanisme est en jeu ?',
                        'explanation' => 'Chaque utilisateur peut avoir intérêt à utiliser davantage la ressource alors que le coût de son usage est en partie supporté par les autres utilisateurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Une parfaite coordination',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un risque de surexploitation d’une ressource commune',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un avantage comparatif',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une économie d’échelle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel instrument peut aider à limiter l’usage excessif d’une ressource commune ?',
                        'explanation' => 'Des règles d’accès, des quotas ou des droits d’usage clairement définis peuvent contribuer à limiter la pression sur la ressource.',
                        'choices' => [
                            [
                                'choice_text' => 'L’accès illimité sans surveillance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Des règles ou quotas d’utilisation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La suppression de toute information sur la ressource',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse automatique de la rivalité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la gestion d’un parc naturel peut-elle nécessiter une coordination collective ?',
                        'explanation' => 'La préservation d’un espace naturel produit des bénéfices collectifs et peut être difficile à organiser par de simples décisions individuelles.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les bénéfices sont exclusivement privés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que certains bénéfices environnementaux sont collectifs et nécessitent une coordination',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’un parc naturel n’a aucune valeur économique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que chaque visiteur connaît exactement le coût social de sa présence',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un usager utilise gratuitement une ressource commune déjà rare et ne tient pas compte de la diminution du stock pour les autres. Quel coût ignore-t-il ?',
                        'explanation' => 'Il ignore le coût d’opportunité imposé aux autres utilisateurs par la diminution de la ressource disponible.',
                        'choices' => [
                            [
                                'choice_text' => 'Le coût de son salaire uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le coût d’opportunité imposé aux autres utilisateurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le montant de l’inflation nationale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le prix des exportations',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans quel cas un bien est-il généralement rival ?',
                        'explanation' => 'Un bien est rival lorsque la consommation par une personne laisse moins de quantité disponible pour les autres.',
                        'choices' => [
                            [
                                'choice_text' => 'Lorsque la consommation d’une personne réduit la quantité disponible pour les autres',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Lorsque personne ne peut l’utiliser',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Lorsque son prix est fixé par l’État',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Lorsqu’il n’a aucun coût de production',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une municipalité demande aux habitants de participer à une opération de nettoyage d’un espace commun. Quelle difficulté collective cherche-t-elle notamment à résoudre ?',
                        'explanation' => 'La participation individuelle peut être insuffisante lorsque chacun compte sur les efforts des autres pour financer ou réaliser un bénéfice collectif.',
                        'choices' => [
                            [
                                'choice_text' => 'Le manque de demande pour les biens privés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le problème du passager clandestin',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le calcul du PIB',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le risque de change',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Gestion environnementale et choix des ménages',
                'description' => 'Applications simples aux comportements de consommation, aux déchets, à l’énergie et aux décisions quotidiennes ayant un impact environnemental.',
                'duration' => 17,
                'passing_score' => 52,
                'questions' => [
                    [
                        'question' => 'Une bouteille réutilisable remplace régulièrement des bouteilles jetables. Quel changement environnemental direct peut-on attendre ?',
                        'explanation' => 'La réutilisation peut réduire le nombre de déchets générés par les usages répétés, selon la manière dont les produits sont utilisés et entretenus.',
                        'choices' => [
                            [
                                'choice_text' => 'Une augmentation obligatoire des déchets',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une réduction du nombre de contenants jetables utilisés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une suppression de toute consommation de ressources',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse automatique des émissions',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une famille choisit une ampoule consommant moins d’électricité pour fournir un éclairage comparable. Quelle décision décrit-elle ?',
                        'explanation' => 'Elle choisit une option plus efficace du point de vue énergétique pour un service comparable.',
                        'choices' => [
                            [
                                'choice_text' => 'Une baisse de l’efficacité énergétique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une amélioration de l’efficacité énergétique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une augmentation de la consommation d’électricité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse du gaspillage',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un tarif de collecte des déchets peut-il modifier le comportement des ménages ?',
                        'explanation' => 'Un prix lié à la production de déchets peut encourager certains ménages à réduire ou trier davantage, selon la conception du système.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’un prix ne change jamais les comportements',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’un coût associé aux déchets peut modifier les incitations à en produire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les déchets deviennent automatiquement recyclables',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le tarif supprime la production de biens',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à la prévention des déchets ?',
                        'explanation' => 'La prévention vise à éviter la production du déchet plutôt qu’à le traiter après sa création.',
                        'choices' => [
                            [
                                'choice_text' => 'Recycler une bouteille déjà jetée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éviter d’acheter un emballage inutile',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Brûler tous les déchets',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Mélanger les déchets recyclables',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un ménage choisit un appareil plus cher à l’achat mais moins énergivore. Pourquoi comparer le coût d’achat et le coût d’usage est-il utile ?',
                        'explanation' => 'Le coût total de décision peut dépendre à la fois de la dépense initiale et des dépenses futures d’utilisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que seul le prix d’achat compte',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l’usage n’a jamais de coût',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le coût total peut inclure l’achat et les dépenses d’utilisation futures',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’un appareil plus cher consomme toujours plus',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement peut réduire le gaspillage alimentaire ?',
                        'explanation' => 'Mieux planifier les achats et conserver correctement les aliments peut réduire la quantité de nourriture jetée.',
                        'choices' => [
                            [
                                'choice_text' => 'Acheter sans tenir compte des besoins',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Jeter les aliments avant toute possibilité de consommation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Planifier les achats selon les besoins et les stocks disponibles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Augmenter systématiquement les portions',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une campagne explique les économies réalisables grâce à une baisse de consommation d’eau. Quel type d’action complète une incitation financière ?',
                        'explanation' => 'L’information peut aider les ménages à mieux percevoir les coûts et les bénéfices liés à leurs choix.',
                        'choices' => [
                            [
                                'choice_text' => 'La suppression des prix',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’information destinée à améliorer les décisions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’interdiction de toute consommation domestique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’augmentation automatique des déchets',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un ménage réduit sa consommation de chauffage en améliorant l’isolation. Quelle relation économique est la plus directe ?',
                        'explanation' => 'L’amélioration de l’isolation peut diminuer la quantité d’énergie nécessaire pour obtenir le même confort thermique.',
                        'choices' => [
                            [
                                'choice_text' => 'Une hausse du besoin énergétique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une réduction de la quantité d’énergie nécessaire pour un niveau de confort donné',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse certaine de la pollution',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition du coût du logement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le prix peut-il être un outil de politique environnementale ?',
                        'explanation' => 'Le prix modifie le coût d’une action et peut donc encourager des choix moins consommateurs de ressources ou moins polluants.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les prix n’ont aucun effet sur la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’un prix peut changer les incitations et la quantité demandée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’il remplace toujours la réglementation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il garantit une consommation nulle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel choix réduit directement l’usage d’un véhicule individuel pour un trajet donné ?',
                        'explanation' => 'Utiliser un transport collectif pour le trajet peut remplacer l’usage individuel d’une voiture, selon les circonstances.',
                        'choices' => [
                            [
                                'choice_text' => 'Faire le même trajet avec davantage de carburant',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Utiliser un transport collectif plutôt qu’un véhicule individuel',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Laisser le moteur tourner à l’arrêt',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Allonger inutilement le trajet',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une famille trie ses déchets recyclables mais ne réduit pas ses achats d’emballages. Quel principe reste pertinent ?',
                        'explanation' => 'Le recyclage peut réduire certains déchets, mais la prévention à la source intervient en amont et peut compléter le recyclage.',
                        'choices' => [
                            [
                                'choice_text' => 'Le recyclage rend toute production de déchets sans importance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La réduction à la source reste une étape complémentaire au recyclage',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le tri augmente forcément les déchets',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La prévention est impossible pour les ménages',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Évaluation des politiques environnementales',
                'description' => 'Révision générale sur le choix des instruments, les coûts et bénéfices, l’efficacité environnementale et les arbitrages de politique publique.',
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Une politique réduit fortement les émissions mais impose un coût très élevé alors qu’une autre atteint un objectif proche à moindre coût. Quel critère économique permet de comparer ces options ?',
                        'explanation' => 'L’efficacité au regard des ressources mobilisées conduit à comparer les résultats environnementaux obtenus et les coûts nécessaires pour les atteindre.',
                        'choices' => [
                            [
                                'choice_text' => 'Uniquement le nombre de règles adoptées',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le rapport entre les résultats obtenus et les ressources engagées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Seulement la taille de l’administration',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La couleur des documents officiels',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse coûts-bénéfices est-elle utile pour une politique environnementale ?',
                        'explanation' => 'Elle permet d’examiner les ressources mobilisées en regard des bénéfices attendus, notamment en matière de santé, de qualité de vie ou de réduction des dommages.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle mesure uniquement les recettes fiscales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle compare les coûts d’une action avec les bénéfices qu’elle peut générer pour la société',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle prouve qu’une politique est toujours rentable financièrement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle remplace toutes les consultations publiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une politique environnementale crée un bénéfice de santé en réduisant la pollution de l’air. Pourquoi ce bénéfice ne doit-il pas être ignoré ?',
                        'explanation' => 'La baisse de la pollution peut réduire des dommages pour la santé, même si cet effet n’apparaît pas directement dans le chiffre d’affaires des entreprises.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que la santé n’a aucun lien avec l’environnement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les effets sanitaires font partie des bénéfices sociaux d’une réduction de la pollution',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les entreprises encaissent automatiquement ces bénéfices',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les coûts de santé disparaissent entièrement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une norme impose la même technologie à toutes les entreprises, alors que leurs procédés sont très différents. Quel risque économique peut apparaître ?',
                        'explanation' => 'Une technologie imposée de manière uniforme peut être plus coûteuse pour certaines entreprises que nécessaire, même pour obtenir une réduction comparable.',
                        'choices' => [
                            [
                                'choice_text' => 'Tous les coûts deviennent égaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Certaines entreprises peuvent supporter un coût de conformité inutilement élevé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les émissions augmentent nécessairement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La concurrence disparaît automatiquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une taxe sur la pollution produit des recettes publiques. Quelle distinction faut-il garder à l’esprit ?',
                        'explanation' => 'Les recettes fiscales sont un élément financier du dispositif, tandis que l’objectif environnemental porte sur la modification des émissions et des comportements.',
                        'choices' => [
                            [
                                'choice_text' => 'Les recettes fiscales et la réduction des émissions sont exactement la même chose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les recettes constituent un résultat budgétaire distinct de l’objectif de réduction des émissions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une taxe environnementale ne crée jamais de recettes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une réduction d’émissions n’a aucun rapport avec les incitations',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est directement utile pour suivre une politique de qualité de l’air ?',
                        'explanation' => 'Des mesures de concentration de certains polluants permettent de suivre l’évolution de la qualité de l’air.',
                        'choices' => [
                            [
                                'choice_text' => 'Le nombre de billets de banque en circulation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La concentration d’un polluant dans l’air',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le nombre de diplômes universitaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le taux de change',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une politique encourage les entreprises à adopter des équipements propres, mais les émissions totales augmentent parce que la production augmente fortement. Que faut-il distinguer ?',
                        'explanation' => 'Une baisse des émissions par unité produite peut coexister avec une hausse des émissions totales si la production augmente suffisamment.',
                        'choices' => [
                            [
                                'choice_text' => 'L’efficacité par unité et le niveau total des émissions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le prix des actions et la météo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La production et la population sont toujours identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une amélioration par unité implique toujours une baisse totale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le suivi d’une politique après sa mise en œuvre est-il important ?',
                        'explanation' => 'Les résultats réels peuvent différer des effets anticipés ; le suivi permet donc de mesurer et d’ajuster la politique.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’aucune politique ne produit d’effet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l’évaluation permet de comparer les résultats observés aux objectifs initiaux',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’un suivi supprime les coûts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les indicateurs sont inutiles après la décision',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une politique réduit la pollution locale mais déplace l’activité polluante vers une autre zone. Quel problème peut-elle créer ?',
                        'explanation' => 'Le déplacement géographique de la pollution peut réduire les émissions dans une zone sans réduire le dommage environnemental total.',
                        'choices' => [
                            [
                                'choice_text' => 'Une disparition automatique du problème',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un déplacement du problème vers une autre zone',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une baisse certaine des émissions totales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse du capital humain',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’une politique environnementale touche fortement certains ménages modestes, quel enjeu peut être étudié ?',
                        'explanation' => 'L’analyse économique peut examiner la répartition des coûts entre catégories de ménages afin d’identifier les effets distributifs du dispositif.',
                        'choices' => [
                            [
                                'choice_text' => 'Uniquement la météo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La répartition des coûts et des bénéfices entre ménages',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La forme des routes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le niveau des exportations uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel principe peut guider le choix entre une réglementation et une incitation par les prix ?',
                        'explanation' => 'Le choix dépend notamment de l’objectif, de l’information disponible, de la manière dont les agents réagissent et des coûts de mise en œuvre.',
                        'choices' => [
                            [
                                'choice_text' => 'Toutes les politiques sont équivalentes en toute situation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il faut comparer les objectifs, les coûts de mise en œuvre et les incitations créées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les taxes sont toujours supérieures',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les normes sont toujours supérieures',
                                'is_correct' => false,
                            ],
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
