<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class BehavioralFinanceBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'behavioral-finance')->firstOrFail();

        $quizzesData = [
            [
                'title' => "Reconnaître les biais dans les décisions d’investissement",
                'description' => "Repérer les principaux biais comportementaux à partir de situations concrètes.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Après trois semaines de hausse d’une action, un investisseur achète surtout parce qu’il voit ses proches en parler avec enthousiasme. Quel biais est le plus évident ?",
                        'choices' => [
                            [
                                'choice_text' => "Le biais de troupeau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’aversion aux pertes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La comptabilité mentale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’ancrage",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L’investisseur suit le comportement du groupe plutôt que de partir d’une analyse indépendante. C’est un cas classique de comportement de troupeau.",
                    ],
                    [
                        'question' => "Un épargnant conserve une action achetée 80 € alors qu’il estime aujourd’hui sa valeur raisonnable à 50 €, uniquement parce qu’il n’accepte pas l’idée de vendre à perte. Quelle tendance observe-t-on ?",
                        'choices' => [
                            [
                                'choice_text' => "L’aversion aux pertes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le biais de disponibilité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’effet de cadrage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’excès de confiance",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La peur de réaliser une perte peut pousser à conserver un titre alors que ses perspectives ont changé. La perte est psychologiquement plus difficile à accepter qu’un gain équivalent.",
                    ],
                    [
                        'question' => "Une personne voit une action cotée 120 € après l’avoir vue à 200 € et pense immédiatement qu’elle est bon marché, sans autre analyse. Quel mécanisme intervient ?",
                        'choices' => [
                            [
                                'choice_text' => "L’ancrage",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le comportement de troupeau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La disponibilité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’auto-attribution",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le prix de 200 € sert de référence mentale. L’investisseur lui accorde trop de poids alors que les fondamentaux actuels peuvent être différents.",
                    ],
                    [
                        'question' => "Un investisseur affirme après une bonne année : « J’avais prévu tout le mouvement du marché ». En réalité, il avait simplement eu de la chance. Quel biais est illustré ?",
                        'choices' => [
                            [
                                'choice_text' => "L’excès de confiance",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’effet de dotation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La comptabilité mentale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La myopie face aux pertes",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le résultat est attribué à une compétence personnelle alors qu’une part importante peut venir du hasard. Cette surestimation relève de l’excès de confiance.",
                    ],
                    [
                        'question' => "Une personne refuse de vendre une action héritée de sa famille parce qu’elle lui attribue une valeur sentimentale supérieure à celle qu’elle donnerait au même titre acheté aujourd’hui. Quel biais peut l’expliquer ?",
                        'choices' => [
                            [
                                'choice_text' => "L’effet de dotation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le biais de troupeau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’ancrage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’aversion à l’information",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un bien peut être jugé plus précieux simplement parce qu’il appartient déjà à la personne. La dimension affective renforce ici l’effet de dotation.",
                    ],
                    [
                        'question' => "Un investisseur consulte uniquement les informations confirmant son opinion initiale sur une entreprise et ignore les signaux contraires. Quel biais décrit le mieux ce comportement ?",
                        'choices' => [
                            [
                                'choice_text' => "Le biais de confirmation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le biais de liquidité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’effet de dotation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La préférence pour le dividende",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le biais de confirmation pousse à rechercher ou retenir les informations qui confortent une opinion existante et à minimiser les éléments contraires.",
                    ],
                    [
                        'question' => "Une personne choisit un produit financier parce que la publicité affiche « seulement 20 € par mois » alors que le coût total est élevé. Quel phénomène est mobilisé ?",
                        'choices' => [
                            [
                                'choice_text' => "L’effet de cadrage",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’ancrage comptable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La diversification",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’aversion au risque systématique",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La mensualité est mise en avant alors que le coût total est moins visible. La manière de présenter l’information influence donc la perception de l’offre.",
                    ],
                    [
                        'question' => "Pourquoi un investisseur peut-il continuer à renforcer une position perdante uniquement pour « retrouver son prix d’achat » ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce qu’il reste attaché à un point de référence passé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que le prix d’achat détermine toujours la valeur future",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’une perte passée garantit un rebond",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les actions doivent revenir à leur prix initial",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le prix d’achat devient un repère psychologique. Pourtant, le marché ne connaît pas ce prix et la décision devrait dépendre des perspectives actuelles.",
                    ],
                    [
                        'question' => "Un investisseur achète un titre après avoir regardé plusieurs vidéos très populaires sur ce titre, sans consulter les comptes de l’entreprise. Quel risque comportemental apparaît ?",
                        'choices' => [
                            [
                                'choice_text' => "La disponibilité et l’influence de la popularité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une couverture parfaite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La neutralité au risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une baisse du coût du capital",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une information très visible et répétée peut sembler plus crédible ou importante qu’elle ne l’est réellement. L’investisseur risque de confondre visibilité et qualité de l’analyse.",
                    ],
                    [
                        'question' => "Pourquoi une bonne connaissance des biais n’empêche-t-elle pas automatiquement une personne de prendre de mauvaises décisions ?",
                        'choices' => [
                            [
                                'choice_text' => "Les émotions et les habitudes peuvent continuer à influencer le comportement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les biais n’existent que chez les débutants",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les marchés rendent toute décision irrationnelle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Connaître un biais suffit toujours à le supprimer",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Identifier un biais est utile, mais le stress, l’euphorie, la peur ou les habitudes peuvent encore influencer la décision. La connaissance doit être accompagnée d’un bon processus.",
                    ],
                ],
            ],
            [
                'title' => "Aversion aux pertes et décisions difficiles",
                'description' => "Comprendre comment la peur de perdre peut modifier l’achat, la vente et la gestion du portefeuille.",
                'duration' => 22,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Un investisseur hésite à vendre un titre devenu trop risqué parce qu’il préfère attendre une remontée plutôt que d’accepter une perte. Quelle influence domine ?",
                        'choices' => [
                            [
                                'choice_text' => "L’aversion aux pertes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’effet de cadrage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La disponibilité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le biais de récence",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La peur de réaliser une perte peut retarder une décision rationnelle. L’investisseur reste attaché au scénario d’un retour au niveau précédent.",
                    ],
                    [
                        'question' => "Une personne se sent beaucoup plus mal après avoir perdu 500 € qu’elle ne se sent bien après avoir gagné 500 €. Quelle idée comportementale cela illustre-t-il ?",
                        'choices' => [
                            [
                                'choice_text' => "Les pertes peuvent être ressenties plus fortement que des gains équivalents",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les gains et pertes sont toujours ressentis de manière identique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le rendement est garanti",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La diversification supprime les émotions",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La Finance comportementale souligne que les réactions psychologiques aux pertes et aux gains ne sont pas toujours symétriques.",
                    ],
                    [
                        'question' => "Une famille conserve 30 000 € sur un compte peu rémunéré uniquement par peur d’une baisse temporaire des marchés. Quel risque comportemental peut apparaître ?",
                        'choices' => [
                            [
                                'choice_text' => "Une aversion au risque excessive par rapport à ses objectifs",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une diversification parfaite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une amélioration automatique du rendement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une disparition de l’inflation",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une prudence excessive peut laisser une part importante du patrimoine sur des placements très peu rémunérés. Le coût d’opportunité et l’inflation peuvent alors peser à long terme.",
                    ],
                    [
                        'question' => "Après une perte importante, un investisseur double sa mise sur un actif risqué en disant qu’il faut « se refaire ». Quel danger faut-il surtout surveiller ?",
                        'choices' => [
                            [
                                'choice_text' => "Une prise de risque émotionnelle excessive",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une diversification prudente",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une baisse automatique de la volatilité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une stratégie sans émotion",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Chercher à récupérer rapidement une perte peut conduire à augmenter le risque sans réexaminer objectivement l’investissement.",
                    ],
                    [
                        'question' => "Pourquoi la phrase « je n’ai pas perdu tant que je ne vends pas » peut-elle être trompeuse ?",
                        'choices' => [
                            [
                                'choice_text' => "La valeur économique de la position a déjà baissé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une perte n’existe jamais avant une vente",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le prix d’achat protège toujours l’investisseur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une vente transforme toujours une perte en gain",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La perte de valeur existe déjà économiquement, même si elle n’est pas réalisée par une vente. Le prix d’achat ne constitue pas une garantie.",
                    ],
                    [
                        'question' => "Un investisseur vend rapidement un titre après une petite baisse, mais conserve une autre position beaucoup plus risquée parce qu’il la considère comme une « sécurité ». Quel problème peut apparaître ?",
                        'choices' => [
                            [
                                'choice_text' => "Une perception incohérente du risque",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une couverture parfaite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une absence totale de biais",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une réduction garantie des pertes",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La même personne peut percevoir deux positions différemment selon leur histoire ou leur étiquette mentale. Cette incohérence peut conduire à une allocation inefficace.",
                    ],
                    [
                        'question' => "Un portefeuille de 100 € baisse de 10 %, puis augmente de 10 %. Combien vaut-il ensuite ?",
                        'choices' => [
                            [
                                'choice_text' => "99 €",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "100 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "101 €",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "90 €",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Après la baisse, 100 € deviennent 90 €. Une hausse de 10 % sur 90 € ajoute 9 €, donc le portefeuille vaut 99 €. Les pourcentages ne sont pas symétriques.",
                    ],
                    [
                        'question' => "Une personne choisit systématiquement le placement présentant le moins de risque, même si son horizon est très long et ses objectifs exigent davantage de croissance. Quel problème peut apparaître ?",
                        'choices' => [
                            [
                                'choice_text' => "Une aversion aux pertes trop forte",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un excès de confiance",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un biais de confirmation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une préférence parfaite pour le rendement",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Éviter toute fluctuation peut conduire à sous-investir dans des actifs adaptés à un horizon long. Le profil doit être cohérent avec les objectifs et la capacité à supporter les fluctuations.",
                    ],
                    [
                        'question' => "Après une forte baisse du marché, un investisseur vend tout son portefeuille uniquement pour ne plus ressentir d’angoisse. Quelle difficulté observe-t-on ?",
                        'choices' => [
                            [
                                'choice_text' => "Une décision émotionnelle dominée par la peur",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une stratégie de couverture parfaitement calculée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un arbitrage sans risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une analyse fondamentale complète",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La volonté de supprimer immédiatement l’angoisse peut conduire à une décision prise sous stress plutôt qu’à une réévaluation de la stratégie.",
                    ],
                    [
                        'question' => "Quel moyen simple peut aider à limiter l’influence de l’aversion aux pertes ?",
                        'choices' => [
                            [
                                'choice_text' => "Définir à l’avance des règles d’allocation et de rééquilibrage",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Consulter les cours toutes les cinq minutes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Augmenter le risque après chaque perte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Acheter uniquement les actifs ayant le plus baissé",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Des règles prévues à l’avance donnent un cadre lorsque les émotions deviennent fortes. Elles peuvent réduire les décisions prises dans la précipitation.",
                    ],
                ],
            ],
            [
                'title' => "Ancrage, récence et biais de confirmation",
                'description' => "Comprendre comment les références passées et les informations récentes peuvent déformer le jugement.",
                'duration' => 21,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => "Un analyste pense qu’une action doit revenir à 150 € simplement parce qu’elle cotait 150 € l’année précédente. Quelle erreur fait-il ?",
                        'choices' => [
                            [
                                'choice_text' => "Il traite un ancien prix comme une référence pertinente sans vérifier les données actuelles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il applique correctement la valeur intrinsèque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il mesure la volatilité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il optimise la diversification",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un ancien prix n’est pas une valeur fondamentale en lui-même. Les bénéfices, taux et perspectives ont pu changer depuis.",
                    ],
                    [
                        'question' => "Après deux excellents résultats trimestriels, un investisseur prévoit automatiquement une troisième hausse sans regarder l’historique plus long. Quel biais peut intervenir ?",
                        'choices' => [
                            [
                                'choice_text' => "Le biais de récence",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’effet de dotation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’aversion aux pertes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La comptabilité mentale",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le biais de récence conduit à donner trop de poids aux événements les plus proches dans le temps.",
                    ],
                    [
                        'question' => "Une personne ne lit que les analyses qui expliquent pourquoi son action préférée va monter. Quel mécanisme est le plus direct ?",
                        'choices' => [
                            [
                                'choice_text' => "Le biais de confirmation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’ancrage nominal",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le comportement de troupeau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’effet de dotation",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Elle sélectionne les informations qui confortent son opinion et néglige les arguments opposés. C’est précisément le biais de confirmation.",
                    ],
                    [
                        'question' => "Un investisseur voit qu’une action a perdu 40 % et conclut qu’elle est forcément une bonne affaire. Que manque-t-il à son raisonnement ?",
                        'choices' => [
                            [
                                'choice_text' => "Une analyse de sa valeur actuelle et de ses perspectives",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un graphique supplémentaire montrant la baisse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La garantie d’un rebond",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le prix historique uniquement",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une forte baisse ne prouve pas qu’un titre est sous-évalué. L’entreprise peut avoir perdu de la valeur économique.",
                    ],
                    [
                        'question' => "Une action monte de 30 % en quelques jours et un investisseur affirme qu’elle continuera forcément à monter demain. Quelle erreur de raisonnement est possible ?",
                        'choices' => [
                            [
                                'choice_text' => "Extrapoler trop vite un mouvement récent",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Utiliser une analyse prudente",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Réduire le risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Comparer plusieurs scénarios",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un mouvement récent ne constitue pas une garantie sur le lendemain. L’extrapolation mécanique est une source classique d’erreur.",
                    ],
                    [
                        'question' => "Pourquoi l’ancrage peut-il influencer une négociation sur le prix d’un actif ?",
                        'choices' => [
                            [
                                'choice_text' => "Le premier prix entendu peut devenir une référence psychologique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le premier prix garantit toujours la juste valeur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le prix initial empêche toute analyse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un prix négocié devient juridiquement fixe",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le premier chiffre présenté peut influencer les estimations suivantes, même s’il est arbitraire ou peu pertinent.",
                    ],
                    [
                        'question' => "Un investisseur lit une seule dépêche très récente et ignore trois années de résultats plus stables. Quel problème apparaît ?",
                        'choices' => [
                            [
                                'choice_text' => "Il peut surpondérer l’information récente",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il diversifie mieux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il élimine le risque spécifique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il calcule automatiquement la valeur intrinsèque",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une information récente peut être utile, mais lui donner un poids disproportionné peut faire perdre de vue la tendance générale et la variabilité normale.",
                    ],
                    [
                        'question' => "Une entreprise annonce des résultats en hausse, mais l’action baisse. L’actionnaire affirme immédiatement que « le marché se trompe ». Quel élément doit-il d’abord vérifier ?",
                        'choices' => [
                            [
                                'choice_text' => "Les attentes du marché avant la publication",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La couleur du graphique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le nombre de commentaires en ligne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La valeur nominale de l’action",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un résultat positif peut être inférieur aux attentes déjà intégrées dans le prix. Il faut donc comparer le publié au consensus ou aux anticipations pertinentes.",
                    ],
                    [
                        'question' => "Quelle question aide le mieux à lutter contre l’ancrage sur un ancien cours ?",
                        'choices' => [
                            [
                                'choice_text' => "Quelles informations actuelles justifient réellement la valeur d’aujourd’hui ?",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "À quel prix ai-je acheté ?",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Quel était le plus haut historique ?",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Quel prix me semblerait psychologiquement agréable ?",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Se concentrer sur les informations actuelles permet de sortir d’une référence historique qui peut ne plus avoir de sens économique.",
                    ],
                    [
                        'question' => "Quel réflexe aide à limiter le biais de confirmation ?",
                        'choices' => [
                            [
                                'choice_text' => "Chercher activement un argument solide qui pourrait invalider son hypothèse",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Lire seulement les analystes favorables",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer les données négatives",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Décider avant de vérifier les chiffres",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Tester volontairement une hypothèse contre des arguments sérieux réduit le risque de ne retenir que ce qui confirme une conviction initiale.",
                    ],
                ],
            ],
            [
                'title' => "Excès de confiance et prévisions",
                'description' => "Étudier les erreurs liées à une confiance excessive dans ses propres capacités et prévisions.",
                'duration' => 23,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Un investisseur pense pouvoir prévoir chaque retournement de marché parce qu’il a réussi deux fois. Quelle attitude traduit-il ?",
                        'choices' => [
                            [
                                'choice_text' => "Un excès de confiance",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une aversion aux pertes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une diversification prudente",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une neutralité émotionnelle",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Deux réussites ne suffisent pas à démontrer une capacité systématique de prévision. Le succès peut contenir une part importante de hasard.",
                    ],
                    [
                        'question' => "Pourquoi un investisseur très sûr de lui peut-il effectuer trop de transactions ?",
                        'choices' => [
                            [
                                'choice_text' => "Il peut croire que ses prévisions justifient des changements fréquents",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les marchés imposent trop de transactions",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les frais deviennent nuls avec la confiance",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La diversification exige des ventes quotidiennes",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une confiance excessive peut encourager des prises de position fréquentes et coûteuses sur la base de prévisions peu fiables.",
                    ],
                    [
                        'question' => "Un analyste prévoit le bénéfice d’une entreprise à 52,37 € par action alors que les hypothèses sont très incertaines. Quel problème peut-il y avoir ?",
                        'choices' => [
                            [
                                'choice_text' => "Une précision numérique supérieure à la précision réelle de la prévision",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un risque nul",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une diversification parfaite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une information certaine",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Afficher plusieurs décimales ne rend pas une prévision plus certaine. La précision du calcul ne doit pas masquer l’incertitude des hypothèses.",
                    ],
                    [
                        'question' => "Après une année exceptionnelle, un trader augmente fortement la taille de ses positions. Quel risque comportemental augmente ?",
                        'choices' => [
                            [
                                'choice_text' => "L’excès de confiance et la prise de risque excessive",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La réduction de la volatilité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’aversion aux pertes uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La diversification automatique",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le succès récent peut gonfler la confiance et conduire à augmenter l’exposition sans preuve que la compétence supposée soit durable.",
                    ],
                    [
                        'question' => "Un investisseur estime que sa bonne performance prouve qu’il est meilleur que tous les autres, mais attribue ses mauvaises années aux événements extérieurs. Quel mécanisme apparaît ?",
                        'choices' => [
                            [
                                'choice_text' => "L’auto-attribution",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’ancrage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’effet de dotation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le troupeau",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les gains sont attribués à ses capacités tandis que les pertes sont expliquées par des causes externes. Cela empêche parfois de tirer des leçons utiles de ses erreurs.",
                    ],
                    [
                        'question' => "Quel comportement montre davantage d’humilité face à l’incertitude ?",
                        'choices' => [
                            [
                                'choice_text' => "Présenter plusieurs scénarios et reconnaître les hypothèses fragiles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Affirmer que le marché est prévisible à 100 %",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Garantir un cours cible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer les données contradictoires",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les scénarios rendent l’incertitude visible et obligent à réfléchir aux conditions qui pourraient invalider la prévision.",
                    ],
                    [
                        'question' => "Pourquoi une performance historique excellente ne prouve-t-elle pas à elle seule une compétence durable ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle peut dépendre du hasard, d’une période particulière ou de risques cachés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Toute performance passée est fausse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque n’existe pas",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une bonne stratégie ne fonctionne jamais",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une période favorable peut aider une stratégie à paraître exceptionnelle. Il faut examiner la durée, le risque, les coûts et la robustesse des résultats.",
                    ],
                    [
                        'question' => "Une équipe d’investissement est très convaincue d’une entreprise et ne laisse personne présenter les arguments opposés. Quel risque est accentué ?",
                        'choices' => [
                            [
                                'choice_text' => "L’excès de confiance collectif",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La réduction du risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une diversification parfaite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une meilleure qualité d’information",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Sans contradiction, le groupe peut surévaluer la solidité de sa thèse et négliger les scénarios défavorables.",
                    ],
                    [
                        'question' => "Quel outil simple peut réduire l’excès de confiance lors d’une décision d’investissement ?",
                        'choices' => [
                            [
                                'choice_text' => "Une revue contradictoire des hypothèses",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une augmentation automatique de la taille de position",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La suppression des limites de risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La lecture d’un seul avis favorable",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une revue contradictoire oblige à identifier les points faibles et à tester les hypothèses les plus fragiles.",
                    ],
                    [
                        'question' => "Un investisseur change sans cesse ses prévisions pour qu’elles correspondent aux résultats déjà observés. Quel danger cela révèle-t-il ?",
                        'choices' => [
                            [
                                'choice_text' => "Il peut confondre adaptation rationnelle et justification a posteriori",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une meilleure prévision",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une neutralité parfaite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une diversification accrue",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Modifier le récit après coup peut donner l’illusion d’avoir anticipé les événements. Une bonne pratique consiste à conserver les hypothèses initiales et à suivre leurs erreurs.",
                    ],
                ],
            ],
            [
                'title' => "Effet de cadrage et présentation des offres",
                'description' => "Comprendre pourquoi une même information peut produire des réactions différentes selon sa présentation.",
                'duration' => 21,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => "Deux offres ont le même coût total, mais l’une est présentée comme « 95 % des clients économisent » et l’autre comme « 5 % supportent des frais supplémentaires ». Pourquoi les réactions peuvent-elles différer ?",
                        'choices' => [
                            [
                                'choice_text' => "Le cadrage influence la perception",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les coûts deviennent différents",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le produit positif est toujours meilleur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le pourcentage fixe juridiquement le prix",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La formulation attire l’attention sur des aspects différents d’une information comparable. C’est le principe de l’effet de cadrage.",
                    ],
                    [
                        'question' => "Une publicité affirme qu’un placement est « gagnant dans 9 cas sur 10 » mais ne montre pas clairement la perte possible dans le dixième cas. Quel danger existe ?",
                        'choices' => [
                            [
                                'choice_text' => "La présentation peut minimiser mentalement les pertes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le placement devient sans risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les probabilités deviennent inutiles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le rendement est garanti",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Mettre en avant les gagnants peut rendre le scénario défavorable moins présent dans l’esprit du client.",
                    ],
                    [
                        'question' => "Pourquoi demander « combien de perte pouvez-vous supporter ? » peut-il produire une réponse différente de « quel risque acceptez-vous pour atteindre votre objectif ? »",
                        'choices' => [
                            [
                                'choice_text' => "La formulation attire l’attention sur des aspects psychologiques différents",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les deux questions ont toujours la même réponse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque n’est pas mesurable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une seule formulation est valable",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La première formulation met l’accent sur la peur de la perte, la seconde sur le compromis entre risque et objectif. La présentation influence donc la perception.",
                    ],
                    [
                        'question' => "Un compte bancaire met en avant « 50 € de cashback » sans mettre immédiatement en évidence les frais annuels. Quel problème peut apparaître ?",
                        'choices' => [
                            [
                                'choice_text' => "Une focalisation sur un avantage visible au détriment du coût global",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une diversification optimale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une gestion passive",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une couverture de taux",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un bénéfice présenté de manière très visible peut détourner l’attention d’un coût moins saillant. Il faut comparer l’offre dans son ensemble.",
                    ],
                    [
                        'question' => "Un conseiller décrit un produit comme « 98 % du capital conservé » au lieu de « jusqu’à 2 % de perte possible ». Quel effet peut-il rechercher ?",
                        'choices' => [
                            [
                                'choice_text' => "Une perception plus rassurante grâce au cadrage",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une hausse mécanique du rendement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une disparition du risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une garantie juridique du capital",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La première formulation met en avant la conservation du capital et rend la perte moins saillante, sans changer nécessairement le risque économique.",
                    ],
                    [
                        'question' => "Quel réflexe est utile face à une offre financière très séduisante par sa présentation ?",
                        'choices' => [
                            [
                                'choice_text' => "Reformuler les mêmes chiffres sous un autre angle avant de décider",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Choisir immédiatement l’offre la plus positive",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer les coûts",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Se fier au slogan",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Changer volontairement le cadrage permet de vérifier si la décision dépend trop de la présentation plutôt que des conditions réelles.",
                    ],
                    [
                        'question' => "Un formulaire demande d’abord au client combien il souhaite investir, puis lui demande son objectif. Quel risque comportemental peut apparaître ?",
                        'choices' => [
                            [
                                'choice_text' => "Le premier montant peut devenir un ancrage",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le client devient automatiquement prudent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le rendement devient garanti",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque disparaît",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le premier chiffre peut influencer la réponse suivante, même s’il n’avait pas de justification objective au départ.",
                    ],
                    [
                        'question' => "Pourquoi présenter une perte comme « 100 € » plutôt que « 10 % » peut-il modifier la réaction d’un client ?",
                        'choices' => [
                            [
                                'choice_text' => "L’échelle et le contexte influencent la perception",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les deux formulations sont toujours perçues identiquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le pourcentage supprime la perte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le montant est toujours plus précis",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La même réalité peut sembler différente selon l’unité et le contexte. Une analyse complète doit remettre les chiffres en perspective.",
                    ],
                    [
                        'question' => "Un investisseur retient uniquement le « potentiel de gain de 8 % » d’un produit alors qu’une baisse de 10 % est également possible. Quel défaut de décision apparaît ?",
                        'choices' => [
                            [
                                'choice_text' => "Une attention asymétrique à l’information favorable",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une bonne évaluation du risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une diversification parfaite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une optimisation certaine",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L’investisseur n’intègre pas correctement la partie défavorable du scénario. Il réagit donc à un cadrage incomplet.",
                    ],
                    [
                        'question' => "Quelle pratique peut réduire l’effet de cadrage ?",
                        'choices' => [
                            [
                                'choice_text' => "Présenter gains, pertes, coûts et probabilités dans un format comparable",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Afficher uniquement les résultats positifs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Utiliser davantage de slogans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Éviter les chiffres",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une présentation équilibrée réduit le risque qu’un seul aspect soit surpondéré simplement parce qu’il est mieux mis en évidence.",
                    ],
                ],
            ],
            [
                'title' => "Comptabilité mentale et argent par catégories",
                'description' => "Comprendre pourquoi les individus traitent différemment des sommes pourtant interchangeables.",
                'duration' => 21,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => "Une personne possède 5 000 € sur son compte courant et 5 000 € dans une « enveloppe vacances ». Elle refuse de toucher à l’enveloppe en cas d’urgence. Quel mécanisme est visible ?",
                        'choices' => [
                            [
                                'choice_text' => "La comptabilité mentale",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’ancrage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le biais de récence",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le troupeau",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La personne attribue des rôles différents à des sommes qui ont pourtant la même valeur économique.",
                    ],
                    [
                        'question' => "Un ménage rembourse une petite dette à 0 % mais conserve une dette de carte beaucoup plus coûteuse parce qu’il veut « finir d’abord la petite ». Quel phénomène peut expliquer ce choix ?",
                        'choices' => [
                            [
                                'choice_text' => "La comptabilité mentale",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’efficience des marchés",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La diversification",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque systématique",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les dettes sont traitées comme des catégories séparées au lieu d’être comparées principalement selon leur coût financier.",
                    ],
                    [
                        'question' => "Une personne dépense facilement une prime exceptionnelle mais protège davantage son salaire mensuel. Pourquoi ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle peut considérer mentalement la prime comme de « l’argent en plus »",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La prime vaut économiquement davantage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le salaire est moins liquide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La prime ne peut pas être épargnée",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L’origine perçue du revenu influence parfois le comportement. Économiquement, pourtant, un euro reste un euro.",
                    ],
                    [
                        'question' => "Pourquoi une enveloppe d’épargne peut-elle malgré tout être utile ?",
                        'choices' => [
                            [
                                'choice_text' => "Une catégorie mentale peut servir de règle pour limiter les dépenses impulsives",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle rapporte automatiquement plus",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle est juridiquement différente",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle échappe à l’inflation",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La comptabilité mentale n’est pas toujours négative. Une catégorie claire peut agir comme un engagement comportemental utile.",
                    ],
                    [
                        'question' => "Une personne refuse d’utiliser 1 000 € d’épargne pour réduire une dette de carte très coûteuse parce que l’épargne est réservée à « un projet ». Quel problème peut apparaître ?",
                        'choices' => [
                            [
                                'choice_text' => "L’étiquette mentale empêche une comparaison globale des coûts",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La dette devient moins chère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’épargne augmente toujours la richesse nette",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le compte d’épargne est inaccessible",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La séparation mentale peut empêcher de comparer rationnellement le coût de la dette avec le rendement de l’épargne.",
                    ],
                    [
                        'question' => "Un investisseur considère les dividendes comme de « l’argent gratuit » et dépense tout sans tenir compte de la variation du cours de l’action. Quelle erreur peut-il faire ?",
                        'choices' => [
                            [
                                'choice_text' => "Il sépare mentalement les dividendes du reste de sa richesse",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il diversifie trop",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il réduit son risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il calcule correctement le rendement total",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les dividendes et la valeur du titre font partie de la richesse globale. Les considérer comme indépendants peut fausser le raisonnement.",
                    ],
                    [
                        'question' => "Quel conseil peut aider une famille qui utilise beaucoup d’enveloppes mentales ?",
                        'choices' => [
                            [
                                'choice_text' => "Faire régulièrement un bilan consolidé du patrimoine et des dettes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Supprimer tout budget",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Considérer chaque compte comme indépendant",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Éviter toute comparaison de coûts",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La vue consolidée aide à repérer les incohérences entre différentes poches et à prendre des décisions à l’échelle du patrimoine total.",
                    ],
                    [
                        'question' => "Une personne utilise un remboursement d’impôt pour des achats qu’elle n’aurait pas faits avec son salaire. Quelle interprétation est plausible ?",
                        'choices' => [
                            [
                                'choice_text' => "L’origine perçue de l’argent modifie son usage mental",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le remboursement vaut plus que le salaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le salaire est moins liquide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’argent fiscal ne peut pas être épargné",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La source du revenu peut influencer le comportement alors que la valeur économique du montant reste identique.",
                    ],
                    [
                        'question' => "Une entreprise refuse de réallouer une somme du budget « projet A » vers « projet B » alors que B est devenu beaucoup plus rentable. Quel parallèle comportemental peut-on faire ?",
                        'choices' => [
                            [
                                'choice_text' => "Des catégories rigides peuvent empêcher une allocation efficace",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le budget garantit l’optimisation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le coût d’opportunité disparaît",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les projets doivent toujours avoir des budgets séparés",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les catégories de suivi sont utiles, mais elles ne devraient pas empêcher l’organisation de réallouer une ressource vers un usage plus créateur de valeur.",
                    ],
                    [
                        'question' => "La comptabilité mentale est-elle forcément néfaste ?",
                        'choices' => [
                            [
                                'choice_text' => "Non, certaines catégories peuvent aider à discipliner l’épargne et les dépenses",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Oui, elle provoque toujours une perte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, parce que tout budget est inutile",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non, mais seulement en banque centrale",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une règle mentale peut être utile lorsqu’elle sert d’engagement simple. Le problème apparaît quand elle empêche une comparaison économique rationnelle.",
                    ],
                ],
            ],
            [
                'title' => "Effet de disposition et gestion des positions",
                'description' => "Comprendre pourquoi certains investisseurs vendent trop vite les gagnants et gardent trop longtemps les perdants.",
                'duration' => 22,
                'passing_score' => 59,
                'questions' => [
                    [
                        'question' => "Un investisseur vend rapidement une action après +10 % mais refuse de vendre une autre position à −20 %. Quelle tendance reconnaît-on ?",
                        'choices' => [
                            [
                                'choice_text' => "L’effet de disposition",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le biais de récence",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La comptabilité mentale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le troupeau",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L’effet de disposition désigne notamment la tendance à réaliser rapidement les gains et à conserver les pertes plus longtemps.",
                    ],
                    [
                        'question' => "Pourquoi vendre une action uniquement parce qu’elle a déjà beaucoup monté peut-il être une mauvaise raison ?",
                        'choices' => [
                            [
                                'choice_text' => "La décision devrait dépendre de sa valeur et de ses perspectives actuelles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un gain passé garantit une baisse future",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une action gagnante ne peut jamais être vendue",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les bénéfices sont sans importance",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le gain passé ne dit pas si l’action reste intéressante aujourd’hui. Il faut réexaminer les perspectives et les alternatives.",
                    ],
                    [
                        'question' => "Un investisseur garde une position perdante en disant : « tant que je ne vends pas, je n’ai rien perdu ». Quelle confusion fait-il ?",
                        'choices' => [
                            [
                                'choice_text' => "Il confond la réalisation de la perte avec la valeur économique actuelle",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il applique parfaitement l’efficience du marché",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il réduit automatiquement son risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il diversifie son portefeuille",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La position a déjà perdu de la valeur. Une vente matérialise la perte, mais ne la crée pas.",
                    ],
                    [
                        'question' => "Une position gagnante devient 35 % du portefeuille et l’investisseur refuse de la réduire parce qu’il veut conserver son « beau gain ». Quel risque augmente ?",
                        'choices' => [
                            [
                                'choice_text' => "Le risque de concentration",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La diversification",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La liquidité garantie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La disparition du risque spécifique",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le succès du titre a fait grossir son poids. Refuser tout rééquilibrage peut rendre le portefeuille trop dépendant de cette seule position.",
                    ],
                    [
                        'question' => "Quelle question aide le mieux à décider si une action gagnante doit être conservée ?",
                        'choices' => [
                            [
                                'choice_text' => "Si je ne la possédais pas aujourd’hui, l’achèterais-je au prix actuel ?",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Combien ai-je gagné dessus ?",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Quel était son plus bas ?",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Est-ce que vendre me rendrait triste ?",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Cette question remet la décision sur le capital disponible aujourd’hui plutôt que sur l’histoire du titre dans le portefeuille.",
                    ],
                    [
                        'question' => "Pourquoi l’effet de disposition peut-il nuire au portefeuille ?",
                        'choices' => [
                            [
                                'choice_text' => "Il peut faire vendre certains gagnants trop tôt et garder des perdants trop longtemps",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il garantit toujours une faible performance",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les gains sont mauvais",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les pertes deviennent impossibles",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le biais peut empêcher de laisser certaines bonnes positions évoluer tout en immobilisant du capital dans des investissements devenus moins convaincants.",
                    ],
                    [
                        'question' => "Un investisseur dit : « cette action m’a beaucoup rapporté, donc je dois la garder ». Quelle erreur peut-il commettre ?",
                        'choices' => [
                            [
                                'choice_text' => "Utiliser le passé comme justification d’une décision future",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Réduire automatiquement la concentration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Éliminer l’ancrage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Appliquer une règle de rééquilibrage",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le passé du titre ne détermine pas sa valeur future. La décision doit partir de l’analyse actuelle.",
                    ],
                    [
                        'question' => "Une action perd 25 % après une mauvaise annonce fondamentale. Quel réflexe est le plus pertinent ?",
                        'choices' => [
                            [
                                'choice_text' => "Réexaminer les perspectives de l’entreprise plutôt que d’attendre mécaniquement le prix d’achat",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Attendre obligatoirement le retour au prix initial",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Doubler la position sans analyse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer l’information nouvelle",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une nouvelle information peut avoir changé durablement la valeur économique du titre. Le prix d’achat n’est pas une cible naturelle.",
                    ],
                    [
                        'question' => "Quel rôle le rééquilibrage peut-il jouer face à l’effet de disposition ?",
                        'choices' => [
                            [
                                'choice_text' => "Il fournit une règle objective pour réduire des positions devenues trop importantes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il garantit la vente au meilleur prix",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il supprime toutes les émotions",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il interdit les pertes",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une règle d’allocation préalablement définie peut réduire les décisions émotionnelles autour des gains et des pertes.",
                    ],
                    [
                        'question' => "Pourquoi l’effet de disposition ne signifie-t-il pas qu’il faut toujours vendre les perdants et garder les gagnants ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce que la décision dépend des perspectives futures et du risque, pas du seul résultat passé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les pertes sont toujours préférables",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les gains sont toujours mauvais",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Vendre est interdit",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le biais décrit une tendance, pas une règle de gestion. Un perdant peut devenir attractif et un gagnant peut devenir trop cher ou trop risqué.",
                    ],
                ],
            ],
            [
                'title' => "Troupeau et pression sociale sur les marchés",
                'description' => "Analyser les décisions prises sous l’influence du comportement des autres.",
                'duration' => 23,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une action devient très populaire sur les réseaux sociaux et beaucoup de particuliers l’achètent sans étudier l’entreprise. Quel phénomène est le plus visible ?",
                        'choices' => [
                            [
                                'choice_text' => "Le comportement de troupeau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La comptabilité mentale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’effet de dotation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La valeur temporelle de l’argent",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les investisseurs imitent les autres participants. La popularité devient alors une raison d’achat à elle seule.",
                    ],
                    [
                        'question' => "Pourquoi le comportement de troupeau peut-il amplifier une hausse de prix ?",
                        'choices' => [
                            [
                                'choice_text' => "Les achats déclenchés par l’imitation renforcent la demande",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les fondamentaux deviennent automatiquement meilleurs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La valeur intrinsèque double",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les risques disparaissent",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les achats de nouveaux participants peuvent renforcer le mouvement initial et attirer encore d’autres acheteurs.",
                    ],
                    [
                        'question' => "Après une série de nouvelles alarmantes, de nombreux investisseurs vendent en même temps alors que les fondamentaux n’ont pas tous changé. Quelle dynamique peut apparaître ?",
                        'choices' => [
                            [
                                'choice_text' => "Une contagion émotionnelle et un comportement de troupeau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une diversification parfaite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une réduction automatique de la volatilité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une hausse certaine des bénéfices",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La peur peut se transmettre entre investisseurs et provoquer des ventes simultanées au-delà de ce que justifieraient certains fondamentaux.",
                    ],
                    [
                        'question' => "Un investisseur achète un actif uniquement parce que « tout le monde en parle ». Quel risque psychologique est évident ?",
                        'choices' => [
                            [
                                'choice_text' => "Confondre popularité et valeur économique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Calculer correctement le risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Utiliser une diversification fondamentale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Évaluer précisément la liquidité",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La popularité est une information sur le comportement des autres, pas une preuve que l’actif est correctement valorisé.",
                    ],
                    [
                        'question' => "Pourquoi peut-on regretter de ne pas avoir acheté un actif qui monte fortement, même si la décision initiale était rationnelle ?",
                        'choices' => [
                            [
                                'choice_text' => "La comparaison sociale et la peur de manquer une opportunité peuvent influencer la décision",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le marché garantit que la décision initiale était mauvaise",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une hausse passée prouve une hausse future",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque devient nul",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Voir les autres gagner peut créer un sentiment de regret qui pousse à acheter tardivement sans nouvelle analyse.",
                    ],
                    [
                        'question' => "Un gérant refuse d’acheter un titre uniquement parce que deux concurrents l’ont acheté. Quelle réponse est la plus saine ?",
                        'choices' => [
                            [
                                'choice_text' => "Analyser le titre indépendamment tout en considérant ce que l’information sur les concurrents peut signifier",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Acheter immédiatement pour ne pas être différent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Copier systématiquement les concurrents",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer toute information externe",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La décision des concurrents peut être une information à examiner, mais elle ne remplace pas l’analyse propre du risque et de la valeur.",
                    ],
                    [
                        'question' => "Quel mécanisme peut contribuer à une bulle lorsqu’une hausse attire des acheteurs uniquement parce qu’ils pensent que d’autres achèteront encore ?",
                        'choices' => [
                            [
                                'choice_text' => "Des anticipations autoréalisatrices alimentées par le troupeau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une amélioration certaine des bénéfices",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une baisse automatique du risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une diversification parfaite",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les achats fondés sur l’anticipation des achats futurs peuvent entretenir la hausse pendant un temps, indépendamment des fondamentaux.",
                    ],
                    [
                        'question' => "Pourquoi le fait que beaucoup de personnes possèdent un actif ne prouve-t-il pas qu’il est correctement valorisé ?",
                        'choices' => [
                            [
                                'choice_text' => "Le nombre de détenteurs ne donne pas directement sa valeur fondamentale",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La majorité est toujours correcte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La liquidité garantit le juste prix",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un actif populaire ne peut pas baisser",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un actif peut être extrêmement populaire et néanmoins trop cher ou trop peu cher. La popularité ne remplace pas la valorisation.",
                    ],
                    [
                        'question' => "Une équipe d’investissement change d’avis dès qu’un dirigeant très respecté exprime une opinion différente. Quel risque apparaît ?",
                        'choices' => [
                            [
                                'choice_text' => "La pression d’autorité et le conformisme",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une meilleure diversification",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une réduction du risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une information parfaitement objective",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La position d’une personne influente peut réduire la liberté de jugement des autres, même lorsque les arguments méritent d’être discutés.",
                    ],
                    [
                        'question' => "Quel dispositif simple aide une équipe à limiter le biais de troupeau ?",
                        'choices' => [
                            [
                                'choice_text' => "Faire présenter explicitement les arguments contre la décision dominante",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Faire voter uniquement le responsable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Suivre systématiquement la majorité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer les analyses indépendantes",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un contradicteur désigné permet d’examiner les risques ignorés et de réduire l’effet du consensus automatique.",
                    ],
                ],
            ],
            [
                'title' => "Escalade d’engagement et coûts irrécupérables",
                'description' => "Comprendre pourquoi les décisions passées peuvent peser à tort sur les décisions futures.",
                'duration' => 22,
                'passing_score' => 59,
                'questions' => [
                    [
                        'question' => "Une entreprise continue de financer un projet qui ne semble plus rentable parce qu’elle y a déjà consacré 2 millions d’euros. Quelle erreur peut apparaître ?",
                        'choices' => [
                            [
                                'choice_text' => "L’escalade d’engagement liée aux coûts déjà supportés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une analyse parfaite des coûts futurs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une diversification efficace",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une couverture de change",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les 2 millions déjà dépensés sont des coûts irrécupérables. Ils ne devraient pas, à eux seuls, déterminer la décision de continuer.",
                    ],
                    [
                        'question' => "Pourquoi faut-il distinguer les coûts passés de la décision actuelle ?",
                        'choices' => [
                            [
                                'choice_text' => "Parce que les fonds déjà dépensés ne peuvent pas être récupérés et ne doivent pas justifier automatiquement de nouvelles dépenses",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que les coûts passés disparaissent des comptes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’un projet perdu doit toujours être doublé",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les marchés remboursent les pertes",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La décision marginale porte sur ce qu’il reste à engager et sur les bénéfices futurs. Le passé peut fournir de l’information, mais il ne doit pas devenir une dette psychologique.",
                    ],
                    [
                        'question' => "Un particulier conserve un abonnement qu’il n’utilise presque jamais parce qu’il l’a payé pour l’année entière. Quel raisonnement est en cause ?",
                        'choices' => [
                            [
                                'choice_text' => "Une dépense passée influence à tort une décision future",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une optimisation parfaite du budget",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une réduction du coût d’opportunité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une meilleure diversification",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La somme déjà payée est irrécupérable. La question actuelle est simplement de savoir si le service vaut encore son coût futur.",
                    ],
                    [
                        'question' => "Un gérant refuse de reconnaître qu’une hypothèse initiale était fausse parce qu’il l’a défendue devant le comité. Quel risque apparaît ?",
                        'choices' => [
                            [
                                'choice_text' => "Le besoin de justifier son choix initial",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une diversification parfaite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La disparition du risque de marché",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’inutilité des nouvelles informations",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Reconnaître une erreur peut être psychologiquement difficile. Cette pression peut conduire à défendre une décision devenue peu convaincante.",
                    ],
                    [
                        'question' => "Quel critère doit surtout guider la décision de continuer ou d’arrêter un projet ?",
                        'choices' => [
                            [
                                'choice_text' => "La valeur attendue des coûts et bénéfices futurs",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le montant déjà dépensé uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le prestige du projet",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le nombre de réunions",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les coûts passés ne peuvent pas être récupérés. Il faut comparer les ressources restant à engager aux bénéfices futurs attendus.",
                    ],
                    [
                        'question' => "Un investisseur augmente sa mise sur une position détériorée uniquement pour justifier ses achats précédents. Quel danger apparaît ?",
                        'choices' => [
                            [
                                'choice_text' => "Une escalade d’engagement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une réduction du risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une meilleure diversification",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une couverture naturelle",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Augmenter l’exposition pour défendre une décision ancienne peut transformer une petite erreur en perte beaucoup plus importante.",
                    ],
                    [
                        'question' => "Pourquoi demander à un collègue « si tu n’avais encore rien investi, commencerais-tu aujourd’hui ? » peut-il aider ?",
                        'choices' => [
                            [
                                'choice_text' => "Cela aide à isoler la décision future des coûts déjà engagés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Cela garantit la bonne décision",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Cela supprime le risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Cela donne automatiquement la valeur du projet",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "La question force à regarder la situation comme si l’argent passé n’était plus récupérable, ce qui aide à neutraliser l’attachement au passé.",
                    ],
                    [
                        'question' => "Un projet reçoit de nouveaux résultats décevants, mais l’équipe continue pour ne pas « gaspiller le travail déjà fait ». Quel élément doit être examiné ?",
                        'choices' => [
                            [
                                'choice_text' => "Si les dépenses et bénéfices futurs justifient encore le projet",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le temps déjà passé uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le prestige de l’équipe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le nombre de documents produits",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le travail passé ne crée pas automatiquement une valeur future. Il faut réévaluer la décision à partir des informations disponibles aujourd’hui.",
                    ],
                    [
                        'question' => "Un investisseur garde une stratégie faible pendant des années en disant « après tout ce temps, elle finira bien par marcher ». Quel biais est plausible ?",
                        'choices' => [
                            [
                                'choice_text' => "L’escalade d’engagement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La diversification",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La neutralité émotionnelle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couverture parfaite",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le temps déjà consacré peut créer un sentiment d’obligation à continuer, même lorsque les perspectives ne justifient plus la stratégie.",
                    ],
                    [
                        'question' => "Quelle pratique aide à limiter l’escalade d’engagement ?",
                        'choices' => [
                            [
                                'choice_text' => "Prévoir des critères d’arrêt ou de révision avant le lancement du projet",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Interdire toute révision",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Récompenser uniquement la poursuite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer les résultats négatifs",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Des critères définis à l’avance rendent plus facile une décision objective lorsque de nouvelles informations rendent le projet moins attractif.",
                    ],
                ],
            ],
            [
                'title' => "Règles, pré-engagement et habitudes financières",
                'description' => "Voir comment des règles simples peuvent protéger les décisions contre les émotions.",
                'duration' => 21,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Une personne met automatiquement 500 € de côté chaque début de mois plutôt que d’attendre la fin du mois. Quel avantage comportemental peut en découler ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle réduit le besoin de décider chaque mois et facilite l’habitude d’épargne",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle garantit un rendement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle supprime toutes les dépenses inutiles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle élimine l’inflation",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "L’automatisation transforme l’épargne en routine et réduit le risque de dépenser la somme avant de la mettre de côté.",
                    ],
                    [
                        'question' => "Pourquoi un plan d’investissement régulier peut-il aider quelqu’un qui réagit fortement aux variations du marché ?",
                        'choices' => [
                            [
                                'choice_text' => "Il réduit la dépendance aux décisions émotionnelles prises au mauvais moment",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il garantit que le marché ne baisse jamais",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il supprime les pertes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il permet toujours d’acheter au plus bas",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une règle régulière enlève une partie du choix tactique à des moments où les émotions peuvent être fortes. Elle ne garantit cependant pas le meilleur prix.",
                    ],
                    [
                        'question' => "Un investisseur fixe qu’une position ne doit pas dépasser 10 % du portefeuille sans justification documentée. Quel outil utilise-t-il ?",
                        'choices' => [
                            [
                                'choice_text' => "Une règle pré-engagée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une prévision parfaite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une garantie de rendement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une suppression du risque spécifique",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une limite prédéfinie réduit le risque qu’une position grossisse simplement parce que l’investisseur est devenu trop optimiste.",
                    ],
                    [
                        'question' => "Quel est l’intérêt comportemental d’un rééquilibrage annuel ?",
                        'choices' => [
                            [
                                'choice_text' => "Ramener le portefeuille vers une allocation décidée à l’avance",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Garantir les meilleurs actifs de l’année suivante",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Éliminer tous les biais",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer les frais",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le rééquilibrage donne un cadre objectif et réduit le risque de laisser les gagnants récents dominer durablement le portefeuille.",
                    ],
                    [
                        'question' => "Un épargnant programme un virement automatique vers l’épargne juste après son salaire. Quelle difficulté cherche-t-il notamment à éviter ?",
                        'choices' => [
                            [
                                'choice_text' => "La tentation de dépenser d’abord puis de ne rien épargner",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le risque de change",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La duration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le risque de crédit bancaire",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le mécanisme « payer d’abord l’épargne » donne priorité à l’objectif plutôt qu’aux dépenses qui apparaissent au cours du mois.",
                    ],
                    [
                        'question' => "Pourquoi écrire à l’avance les raisons de son investissement peut-il être utile ?",
                        'choices' => [
                            [
                                'choice_text' => "Cela donne une référence pour vérifier plus tard si les faits ont réellement changé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Cela garantit une hausse du cours",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Cela remplace toute analyse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Cela rend l’investissement sans risque",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une thèse écrite permet de distinguer une vraie évolution des fondamentaux d’une simple réaction émotionnelle au prix.",
                    ],
                    [
                        'question' => "Une personne décide de ne prendre aucune décision importante pendant 24 heures après une forte baisse de marché. Quel objectif poursuit-elle ?",
                        'choices' => [
                            [
                                'choice_text' => "Créer un délai pour limiter les décisions impulsives sous stress",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Garantir un rebond",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer la volatilité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Prévoir le lendemain",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Le délai crée une distance entre l’émotion immédiate et la décision. Il ne prédit évidemment pas le marché.",
                    ],
                    [
                        'question' => "Un investisseur consulte son portefeuille une fois par trimestre plutôt que plusieurs fois par jour. Quel avantage psychologique est possible ?",
                        'choices' => [
                            [
                                'choice_text' => "Moins d’exposition aux petites fluctuations et aux réactions émotionnelles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une garantie de meilleur rendement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La suppression du risque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une information toujours plus complète",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Une surveillance excessive peut attirer l’attention sur le bruit à court terme. Une fréquence cohérente avec l’horizon peut aider à rester discipliné.",
                    ],
                    [
                        'question' => "Pourquoi une politique écrite de gestion des risques est-elle utile à une petite équipe ?",
                        'choices' => [
                            [
                                'choice_text' => "Elle fournit un cadre commun et limite les décisions improvisées",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle garantit l’absence de pertes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle remplace les données financières",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle interdit toute adaptation",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Les règles écrites réduisent l’ambiguïté et aident à maintenir une discipline commune, tout en pouvant être révisées lorsque les hypothèses changent.",
                    ],
                    [
                        'question' => "Quel exemple illustre le mieux un « nudge » financier ?",
                        'choices' => [
                            [
                                'choice_text' => "Proposer par défaut un virement vers l’épargne tout en laissant la possibilité de le modifier",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Interdire les retraits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Cacher les frais",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Forcer un investissement risqué",
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => "Un nudge modifie l’environnement du choix sans supprimer la liberté de l’utilisateur. Le virement par défaut facilite un comportement souhaité.",
                    ],
                ],
            ],
        ];

        foreach ($quizzesData as $quizData) {
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
