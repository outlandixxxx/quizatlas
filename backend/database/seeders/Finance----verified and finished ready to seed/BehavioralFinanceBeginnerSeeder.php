<?php

namespace Database\Seeders;

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

        $quizSettings = [
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 22, 'passing_score' => 58],
            ['duration' => 21, 'passing_score' => 57],
            ['duration' => 23, 'passing_score' => 60],
            ['duration' => 21, 'passing_score' => 56],
            ['duration' => 21, 'passing_score' => 57],
            ['duration' => 22, 'passing_score' => 59],
            ['duration' => 23, 'passing_score' => 60],
            ['duration' => 22, 'passing_score' => 59],
            ['duration' => 21, 'passing_score' => 58],
        ];

        $quizzes = [
            [
                'title' => 'Reconnaître les biais dans les décisions d’investissement',
                'description' => 'Repérer les principaux biais comportementaux à partir de situations concrètes.',
                'questions' => [
                    [
                        'question' => 'Après trois semaines de hausse d’une action, un investisseur achète surtout parce qu’il voit ses proches en parler avec enthousiasme. Quel biais est le plus évident ?',
                        'explanation' => 'L’investisseur suit le comportement du groupe plutôt que de partir d’une analyse indépendante. C’est un cas classique de comportement de troupeau.',
                        'choices' => [
                            ['choice_text' => 'Le biais de troupeau', 'is_correct' => true],
                            ['choice_text' => 'L’aversion aux pertes', 'is_correct' => false],
                            ['choice_text' => 'La comptabilité mentale', 'is_correct' => false],
                            ['choice_text' => 'L’ancrage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un épargnant conserve une action achetée 80 € alors qu’il estime aujourd’hui sa valeur raisonnable à 50 €, uniquement parce qu’il n’accepte pas l’idée de vendre à perte. Quelle tendance observe-t-on ?',
                        'explanation' => 'La peur de réaliser une perte peut pousser à conserver un titre alors que ses perspectives ont changé. La perte est psychologiquement plus difficile à accepter qu’un gain équivalent.',
                        'choices' => [
                            ['choice_text' => 'Le biais de disponibilité', 'is_correct' => false],
                            ['choice_text' => 'L’effet de cadrage', 'is_correct' => false],
                            ['choice_text' => 'L’aversion aux pertes', 'is_correct' => true],
                            ['choice_text' => 'L’excès de confiance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne voit une action cotée 120 € après l’avoir vue à 200 € et pense immédiatement qu’elle est bon marché, sans autre analyse. Quel mécanisme intervient ?',
                        'explanation' => 'Le prix de 200 € sert de référence mentale. L’investisseur lui accorde trop de poids alors que les fondamentaux actuels peuvent être différents.',
                        'choices' => [
                            ['choice_text' => 'L’ancrage', 'is_correct' => true],
                            ['choice_text' => 'Le comportement de troupeau', 'is_correct' => false],
                            ['choice_text' => 'La disponibilité', 'is_correct' => false],
                            ['choice_text' => 'L’auto-attribution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur affirme après une bonne année : « J’avais prévu tout le mouvement du marché ». En réalité, il avait simplement eu de la chance. Quel biais est illustré ?',
                        'explanation' => 'Le résultat est attribué à une compétence personnelle alors qu’une part importante peut venir du hasard. Cette surestimation relève de l’excès de confiance.',
                        'choices' => [
                            ['choice_text' => 'L’effet de dotation', 'is_correct' => false],
                            ['choice_text' => 'L’excès de confiance', 'is_correct' => true],
                            ['choice_text' => 'La comptabilité mentale', 'is_correct' => false],
                            ['choice_text' => 'La myopie face aux pertes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne refuse de vendre une action héritée de sa famille parce qu’elle lui attribue une valeur sentimentale supérieure à celle qu’elle donnerait au même titre acheté aujourd’hui. Quel biais peut l’expliquer ?',
                        'explanation' => 'Un bien peut être jugé plus précieux simplement parce qu’il appartient déjà à la personne. La dimension affective renforce ici l’effet de dotation.',
                        'choices' => [
                            ['choice_text' => 'L’effet de dotation', 'is_correct' => true],
                            ['choice_text' => 'Le biais de troupeau', 'is_correct' => false],
                            ['choice_text' => 'L’ancrage', 'is_correct' => false],
                            ['choice_text' => 'L’aversion à l’information', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur consulte uniquement les informations confirmant son opinion initiale sur une entreprise et ignore les signaux contraires. Quel biais décrit le mieux ce comportement ?',
                        'explanation' => 'Le biais de confirmation pousse à rechercher ou retenir les informations qui confortent une opinion existante et à minimiser les éléments contraires.',
                        'choices' => [
                            ['choice_text' => 'Le biais de liquidité', 'is_correct' => false],
                            ['choice_text' => 'Le biais de confirmation', 'is_correct' => true],
                            ['choice_text' => 'L’effet de dotation', 'is_correct' => false],
                            ['choice_text' => 'La préférence pour le dividende', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne choisit un produit financier parce que la publicité affiche « seulement 20 € par mois » alors que le coût total est élevé. Quel phénomène est mobilisé ?',
                        'explanation' => 'La mensualité est mise en avant alors que le coût total est moins visible. La manière de présenter l’information influence donc la perception de l’offre.',
                        'choices' => [
                            ['choice_text' => 'L’ancrage comptable', 'is_correct' => false],
                            ['choice_text' => 'La diversification', 'is_correct' => false],
                            ['choice_text' => 'L’effet de cadrage', 'is_correct' => true],
                            ['choice_text' => 'L’aversion au risque systématique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur peut-il continuer à renforcer une position perdante uniquement pour « retrouver son prix d’achat » ?',
                        'explanation' => 'Le prix d’achat devient un repère psychologique. Pourtant, le marché ne connaît pas ce prix et la décision devrait dépendre des perspectives actuelles.',
                        'choices' => [
                            ['choice_text' => 'Parce que le marché compense les acheteurs qui ont payé trop cher', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il cherche à mieux diversifier son portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une action en baisse a une probabilité plus forte de remonter', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il reste attaché à un point de référence passé', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur achète un titre après avoir regardé plusieurs vidéos très populaires sur ce titre, sans consulter les comptes de l’entreprise. Quel risque comportemental apparaît ?',
                        'explanation' => 'Une information très visible et répétée peut sembler plus crédible ou importante qu’elle ne l’est réellement. L’investisseur risque de confondre visibilité et qualité de l’analyse.',
                        'choices' => [
                            ['choice_text' => 'L’ancrage sur un ancien prix de référence', 'is_correct' => false],
                            ['choice_text' => 'L’effet de dotation lié à un titre déjà détenu', 'is_correct' => false],
                            ['choice_text' => 'La comptabilité mentale entre plusieurs comptes', 'is_correct' => false],
                            ['choice_text' => 'La disponibilité et l’influence de la popularité', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une bonne connaissance des biais n’empêche-t-elle pas automatiquement une personne de prendre de mauvaises décisions ?',
                        'explanation' => 'Identifier un biais est utile, mais le stress, l’euphorie, la peur ou les habitudes peuvent encore influencer la décision. La connaissance doit être accompagnée d’un bon processus.',
                        'choices' => [
                            ['choice_text' => 'Les biais proviennent surtout d’un manque d’information, pas de la manière dont on raisonne', 'is_correct' => false],
                            ['choice_text' => 'Les mauvaises décisions viennent surtout du hasard des marchés, indépendamment du comportement', 'is_correct' => false],
                            ['choice_text' => 'Les émotions et les habitudes peuvent continuer à influencer le comportement', 'is_correct' => true],
                            ['choice_text' => 'La connaissance d’un biais ne porte que sur le passé et ne s’applique pas aux décisions futures', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Aversion aux pertes et décisions difficiles',
                'description' => 'Comprendre comment la peur de perdre peut modifier l’achat, la vente et la gestion du portefeuille.',
                'questions' => [
                    [
                        'question' => 'Un investisseur hésite à vendre un titre devenu trop risqué parce qu’il préfère attendre une remontée plutôt que d’accepter une perte. Quelle influence domine ?',
                        'explanation' => 'La peur de réaliser une perte peut retarder une décision rationnelle. L’investisseur reste attaché au scénario d’un retour au niveau précédent.',
                        'choices' => [
                            ['choice_text' => 'La comptabilité mentale', 'is_correct' => false],
                            ['choice_text' => 'L’aversion aux pertes', 'is_correct' => true],
                            ['choice_text' => 'Le biais de confirmation', 'is_correct' => false],
                            ['choice_text' => 'Le biais de disponibilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne se sent beaucoup plus mal après avoir perdu 500 € qu’elle ne se sent bien après avoir gagné 500 €. Quelle idée comportementale cela illustre-t-il ?',
                        'explanation' => 'La finance comportementale souligne que les réactions psychologiques aux pertes et aux gains ne sont pas toujours symétriques.',
                        'choices' => [
                            ['choice_text' => 'Les gains peuvent être ressentis plus fortement que des pertes équivalentes', 'is_correct' => false],
                            ['choice_text' => 'Les pertes sont ressenties de la même façon que des gains de montant équivalent', 'is_correct' => false],
                            ['choice_text' => 'Les pertes peuvent être ressenties plus fortement que des gains équivalents', 'is_correct' => true],
                            ['choice_text' => 'Les gains récents marquent davantage l’esprit que les pertes plus anciennes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une famille conserve 30 000 € sur un compte peu rémunéré uniquement par peur d’une baisse temporaire des marchés. Quel risque comportemental peut apparaître ?',
                        'explanation' => 'Une prudence excessive peut laisser une part importante du patrimoine sur des placements très peu rémunérés. Le coût d’opportunité et l’inflation peuvent alors peser à long terme.',
                        'choices' => [
                            ['choice_text' => 'Un excès de confiance dans la capacité à prévoir les marchés', 'is_correct' => false],
                            ['choice_text' => 'Un biais de troupeau lié aux conseils de l’entourage', 'is_correct' => false],
                            ['choice_text' => 'Une aversion au risque excessive par rapport à ses objectifs', 'is_correct' => true],
                            ['choice_text' => 'Une prise de risque émotionnelle pour se refaire après une perte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après une perte importante, un investisseur double sa mise sur un actif risqué en disant qu’il faut « se refaire ». Quel danger faut-il surtout surveiller ?',
                        'explanation' => 'Chercher à récupérer rapidement une perte peut conduire à augmenter le risque sans réexaminer objectivement l’investissement.',
                        'choices' => [
                            ['choice_text' => 'Une diversification prudente', 'is_correct' => false],
                            ['choice_text' => 'Une prise de risque émotionnelle excessive', 'is_correct' => true],
                            ['choice_text' => 'Une baisse automatique de la volatilité', 'is_correct' => false],
                            ['choice_text' => 'Une stratégie sans émotion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la phrase « je n’ai pas perdu tant que je ne vends pas » peut-elle être trompeuse ?',
                        'explanation' => 'La perte de valeur existe déjà économiquement, même si elle n’est pas réalisée par une vente. Le prix d’achat ne constitue pas une garantie.',
                        'choices' => [
                            ['choice_text' => 'La valeur économique de la position a déjà baissé', 'is_correct' => true],
                            ['choice_text' => 'Le prix d’achat protège contre une nouvelle baisse', 'is_correct' => false],
                            ['choice_text' => 'Une perte non réalisée finit généralement par se résorber', 'is_correct' => false],
                            ['choice_text' => 'La valeur d’un titre dépend du prix auquel il a été acheté', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur vend rapidement un titre après une petite baisse, mais conserve une autre position beaucoup plus risquée parce qu’il la considère comme une « sécurité ». Quel problème peut apparaître ?',
                        'explanation' => 'La même personne peut percevoir deux positions différemment selon leur histoire ou leur étiquette mentale. Cette incohérence peut conduire à une allocation inefficace.',
                        'choices' => [
                            ['choice_text' => 'Un comportement de troupeau sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Une perception incohérente du risque', 'is_correct' => true],
                            ['choice_text' => 'Un ancrage sur un ancien cours de référence', 'is_correct' => false],
                            ['choice_text' => 'Une sous-estimation des frais de transaction', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille de 100 € baisse de 10 %, puis augmente de 10 %. Combien vaut-il ensuite ?',
                        'explanation' => 'Après la baisse, 100 € deviennent 90 €. Une hausse de 10 % sur 90 € ajoute 9 €, donc le portefeuille vaut 99 €. Les pourcentages ne sont pas symétriques.',
                        'choices' => [
                            ['choice_text' => '90 €', 'is_correct' => false],
                            ['choice_text' => '99 €', 'is_correct' => true],
                            ['choice_text' => '100 €', 'is_correct' => false],
                            ['choice_text' => '101 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur refuse un pari à pile ou face qui lui ferait gagner 120 € ou perdre 100 € avec la même probabilité, alors que le gain moyen attendu est positif. Quelle tendance explique le mieux ce refus ?',
                        'explanation' => 'Le gain moyen attendu est de 0,5 × 120 − 0,5 × 100 = +10 €. Pourtant, une perte de 100 € pèse psychologiquement plus qu’un gain de 120 €, ce qui est un cas typique d’aversion aux pertes.',
                        'choices' => [
                            ['choice_text' => 'Un excès de confiance', 'is_correct' => false],
                            ['choice_text' => 'Un biais de confirmation', 'is_correct' => false],
                            ['choice_text' => 'Une aversion aux pertes', 'is_correct' => true],
                            ['choice_text' => 'Une préférence parfaite pour le rendement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après une forte baisse du marché, un investisseur vend tout son portefeuille uniquement pour ne plus ressentir d’angoisse. Quelle difficulté observe-t-on ?',
                        'explanation' => 'La volonté de supprimer immédiatement l’angoisse peut conduire à une décision prise sous stress plutôt qu’à une réévaluation de la stratégie.',
                        'choices' => [
                            ['choice_text' => 'Une stratégie de couverture parfaitement calculée', 'is_correct' => false],
                            ['choice_text' => 'Une décision émotionnelle dominée par la peur', 'is_correct' => true],
                            ['choice_text' => 'Un arbitrage sans risque', 'is_correct' => false],
                            ['choice_text' => 'Une analyse fondamentale complète', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel moyen simple peut aider à limiter l’influence de l’aversion aux pertes ?',
                        'explanation' => 'Des règles prévues à l’avance donnent un cadre lorsque les émotions deviennent fortes. Elles peuvent réduire les décisions prises dans la précipitation.',
                        'choices' => [
                            ['choice_text' => 'Réduire fortement ses placements risqués après chaque baisse de marché', 'is_correct' => false],
                            ['choice_text' => 'Vérifier chaque jour la valeur du portefeuille pour réagir rapidement', 'is_correct' => false],
                            ['choice_text' => 'Conserver les titres perdants jusqu’à ce qu’ils retrouvent leur prix d’achat', 'is_correct' => false],
                            ['choice_text' => 'Définir à l’avance des règles d’allocation et de rééquilibrage', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Ancrage, récence et biais de confirmation',
                'description' => 'Comprendre comment les références passées et les informations récentes peuvent déformer le jugement.',
                'questions' => [
                    [
                        'question' => 'Un analyste pense qu’une action doit revenir à 150 € simplement parce qu’elle cotait 150 € l’année précédente. Quelle erreur fait-il ?',
                        'explanation' => 'Un ancien prix n’est pas une valeur fondamentale en lui-même. Les bénéfices, taux et perspectives ont pu changer depuis.',
                        'choices' => [
                            ['choice_text' => 'Il suit l’opinion de la majorité des analystes sans avoir étudié l’entreprise lui-même', 'is_correct' => false],
                            ['choice_text' => 'Il traite un ancien prix comme une référence pertinente sans vérifier les données actuelles', 'is_correct' => true],
                            ['choice_text' => 'Il néglige le risque en raison d’un attachement affectif à un titre qu’il possède depuis longtemps', 'is_correct' => false],
                            ['choice_text' => 'Il sous-estime la valeur de l’action en se concentrant sur un événement récent isolé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après deux excellents résultats trimestriels, un investisseur prévoit automatiquement une troisième hausse sans regarder l’historique plus long. Quel biais peut intervenir ?',
                        'explanation' => 'Le biais de récence conduit à donner trop de poids aux événements les plus proches dans le temps.',
                        'choices' => [
                            ['choice_text' => 'L’effet de dotation', 'is_correct' => false],
                            ['choice_text' => 'L’aversion aux pertes', 'is_correct' => false],
                            ['choice_text' => 'La comptabilité mentale', 'is_correct' => false],
                            ['choice_text' => 'Le biais de récence', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une personne ne lit que les analyses qui expliquent pourquoi son action préférée va monter. Quel mécanisme est le plus direct ?',
                        'explanation' => 'Elle sélectionne les informations qui confortent son opinion et néglige les arguments opposés. C’est précisément le biais de confirmation.',
                        'choices' => [
                            ['choice_text' => 'L’ancrage nominal', 'is_correct' => false],
                            ['choice_text' => 'Le comportement de troupeau', 'is_correct' => false],
                            ['choice_text' => 'Le biais de confirmation', 'is_correct' => true],
                            ['choice_text' => 'L’effet de dotation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur voit qu’une action a perdu 40 % et conclut qu’elle est forcément une bonne affaire. Que manque-t-il à son raisonnement ?',
                        'explanation' => 'Une forte baisse ne prouve pas qu’un titre est sous-évalué. L’entreprise peut avoir perdu de la valeur économique.',
                        'choices' => [
                            ['choice_text' => 'Une analyse de sa valeur actuelle et de ses perspectives', 'is_correct' => true],
                            ['choice_text' => 'Une comparaison avec le plus haut historique du titre', 'is_correct' => false],
                            ['choice_text' => 'Un calcul du prix moyen d’achat de ses positions', 'is_correct' => false],
                            ['choice_text' => 'Une lecture des avis favorables publiés sur les forums', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action monte de 30 % en quelques jours et un investisseur affirme qu’elle continuera forcément à monter demain. Quelle erreur de raisonnement est possible ?',
                        'explanation' => 'Un mouvement récent ne constitue pas une garantie sur le lendemain. L’extrapolation mécanique est une source classique d’erreur.',
                        'choices' => [
                            ['choice_text' => 'Extrapoler trop vite un mouvement récent', 'is_correct' => true],
                            ['choice_text' => 'Ancrer son jugement sur un ancien prix de référence', 'is_correct' => false],
                            ['choice_text' => 'Attribuer ce gain à sa compétence personnelle', 'is_correct' => false],
                            ['choice_text' => 'Refuser de vendre pour ne pas réaliser de perte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’ancrage peut-il influencer une négociation sur le prix d’un actif ?',
                        'explanation' => 'Le premier chiffre présenté peut influencer les estimations suivantes, même s’il est arbitraire ou peu pertinent.',
                        'choices' => [
                            ['choice_text' => 'Le vendeur est légalement tenu de maintenir son premier prix', 'is_correct' => false],
                            ['choice_text' => 'Le premier prix entendu reflète la valeur fondamentale de l’actif', 'is_correct' => false],
                            ['choice_text' => 'Les acheteurs ressentent plus fortement une perte qu’un gain équivalent', 'is_correct' => false],
                            ['choice_text' => 'Le premier prix entendu peut devenir une référence psychologique', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur lit une seule dépêche très récente et ignore trois années de résultats plus stables. Quel problème apparaît ?',
                        'explanation' => 'Une information récente peut être utile, mais lui donner un poids disproportionné peut faire perdre de vue la tendance générale et la variabilité normale.',
                        'choices' => [
                            ['choice_text' => 'Il peut négliger les informations récentes', 'is_correct' => false],
                            ['choice_text' => 'Il peut surpondérer l’information récente', 'is_correct' => true],
                            ['choice_text' => 'Il peut réduire son risque de concentration', 'is_correct' => false],
                            ['choice_text' => 'Il peut mieux repérer la tendance de long terme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise annonce des résultats en hausse, mais l’action baisse. L’actionnaire affirme immédiatement que « le marché se trompe ». Quel élément doit-il d’abord vérifier ?',
                        'explanation' => 'Un résultat positif peut être inférieur aux attentes déjà intégrées dans le prix. Il faut donc comparer le publié au consensus ou aux anticipations pertinentes.',
                        'choices' => [
                            ['choice_text' => 'Les attentes du marché avant la publication', 'is_correct' => true],
                            ['choice_text' => 'Le montant du dividende versé l’année précédente', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’actions détenues par les dirigeants', 'is_correct' => false],
                            ['choice_text' => 'Le cours d’achat de ses propres actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle question aide le mieux à lutter contre l’ancrage sur un ancien cours ?',
                        'explanation' => 'Se concentrer sur les informations actuelles permet de sortir d’une référence historique qui peut ne plus avoir de sens économique.',
                        'choices' => [
                            ['choice_text' => 'À quel prix ai-je acheté ce titre et quelle perte latente ai-je aujourd’hui ?', 'is_correct' => false],
                            ['choice_text' => 'Quelles informations actuelles justifient réellement la valeur d’aujourd’hui ?', 'is_correct' => true],
                            ['choice_text' => 'Quel était le plus haut historique du titre avant la baisse récente ?', 'is_correct' => false],
                            ['choice_text' => 'Quel cours me permettrait de retrouver mon niveau de confort psychologique ?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel réflexe aide à limiter le biais de confirmation ?',
                        'explanation' => 'Tester volontairement une hypothèse contre des arguments sérieux réduit le risque de ne retenir que ce qui confirme une conviction initiale.',
                        'choices' => [
                            ['choice_text' => 'Chercher activement un argument solide qui pourrait invalider son hypothèse', 'is_correct' => true],
                            ['choice_text' => 'Lire en priorité les analyses qui partagent déjà son opinion sur le titre', 'is_correct' => false],
                            ['choice_text' => 'Se limiter aux données les plus récentes pour ne pas être influencé par le passé', 'is_correct' => false],
                            ['choice_text' => 'Décider rapidement avant que de nouvelles informations ne viennent brouiller son avis', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Excès de confiance et prévisions',
                'description' => 'Étudier les erreurs liées à une confiance excessive dans ses propres capacités et prévisions.',
                'questions' => [
                    [
                        'question' => 'Un investisseur pense pouvoir prévoir chaque retournement de marché parce qu’il a réussi deux fois. Quelle attitude traduit-il ?',
                        'explanation' => 'Deux réussites ne suffisent pas à démontrer une capacité systématique de prévision. Le succès peut contenir une part importante de hasard.',
                        'choices' => [
                            ['choice_text' => 'Une aversion aux pertes', 'is_correct' => false],
                            ['choice_text' => 'Une diversification prudente', 'is_correct' => false],
                            ['choice_text' => 'Une neutralité émotionnelle', 'is_correct' => false],
                            ['choice_text' => 'Un excès de confiance', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur très sûr de lui peut-il effectuer trop de transactions ?',
                        'explanation' => 'Une confiance excessive peut encourager des prises de position fréquentes et coûteuses sur la base de prévisions peu fiables.',
                        'choices' => [
                            ['choice_text' => 'Les frais de courtage baissent à chaque ordre supplémentaire passé', 'is_correct' => false],
                            ['choice_text' => 'Il peut croire que ses prévisions justifient des changements fréquents', 'is_correct' => true],
                            ['choice_text' => 'Les règles de diversification imposent de réajuster le portefeuille chaque semaine', 'is_correct' => false],
                            ['choice_text' => 'Il ressent surtout la peur de perdre et vend pour éviter les fluctuations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un analyste prévoit le bénéfice d’une entreprise à 52,37 € par action alors que les hypothèses sont très incertaines. Quel problème peut-il y avoir ?',
                        'explanation' => 'Afficher plusieurs décimales ne rend pas une prévision plus certaine. La précision du calcul ne doit pas masquer l’incertitude des hypothèses.',
                        'choices' => [
                            ['choice_text' => 'Une prévision trop prudente par rapport aux informations disponibles', 'is_correct' => false],
                            ['choice_text' => 'Une absence de calcul sur les flux de trésorerie futurs', 'is_correct' => false],
                            ['choice_text' => 'Une précision numérique supérieure à la précision réelle de la prévision', 'is_correct' => true],
                            ['choice_text' => 'Une dépendance excessive aux avis des autres analystes du secteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après une année exceptionnelle, un trader augmente fortement la taille de ses positions. Quel risque comportemental augmente ?',
                        'explanation' => 'Le succès récent peut gonfler la confiance et conduire à augmenter l’exposition sans preuve que la compétence supposée soit durable.',
                        'choices' => [
                            ['choice_text' => 'L’aversion aux pertes et la vente trop rapide des gains', 'is_correct' => false],
                            ['choice_text' => 'Le biais de troupeau et l’imitation des autres traders', 'is_correct' => false],
                            ['choice_text' => 'La réduction du risque grâce à une meilleure diversification', 'is_correct' => false],
                            ['choice_text' => 'L’excès de confiance et la prise de risque excessive', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur estime que sa bonne performance prouve qu’il est meilleur que tous les autres, mais attribue ses mauvaises années aux événements extérieurs. Quel mécanisme apparaît ?',
                        'explanation' => 'Les gains sont attribués à ses capacités tandis que les pertes sont expliquées par des causes externes. Cela empêche parfois de tirer des leçons utiles de ses erreurs.',
                        'choices' => [
                            ['choice_text' => 'L’ancrage', 'is_correct' => false],
                            ['choice_text' => 'L’effet de dotation', 'is_correct' => false],
                            ['choice_text' => 'Le troupeau', 'is_correct' => false],
                            ['choice_text' => 'L’auto-attribution', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement montre davantage d’humilité face à l’incertitude ?',
                        'explanation' => 'Les scénarios rendent l’incertitude visible et obligent à réfléchir aux conditions qui pourraient invalider la prévision.',
                        'choices' => [
                            ['choice_text' => 'Présenter plusieurs scénarios et reconnaître les hypothèses fragiles', 'is_correct' => true],
                            ['choice_text' => 'Fournir un seul cours cible précis pour rassurer les clients', 'is_correct' => false],
                            ['choice_text' => 'Appuyer sa prévision sur les résultats récents les plus favorables', 'is_correct' => false],
                            ['choice_text' => 'Écarter les scénarios défavorables afin de conserver un message plus cohérent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une performance historique excellente ne prouve-t-elle pas à elle seule une compétence durable ?',
                        'explanation' => 'Une période favorable peut aider une stratégie à paraître exceptionnelle. Il faut examiner la durée, le risque, les coûts et la robustesse des résultats.',
                        'choices' => [
                            ['choice_text' => 'Elle peut dépendre du hasard, d’une période particulière ou de risques cachés', 'is_correct' => true],
                            ['choice_text' => 'Elle ne prend en compte que la volatilité et ignore le rendement obtenu', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a de sens que pour des investisseurs qui détiennent leurs titres à court terme', 'is_correct' => false],
                            ['choice_text' => 'Elle résulte généralement d’une prise de risque plus faible que celle du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe d’investissement est très convaincue d’une entreprise et ne laisse personne présenter les arguments opposés. Quel risque est accentué ?',
                        'explanation' => 'Sans contradiction, le groupe peut surévaluer la solidité de sa thèse et négliger les scénarios défavorables.',
                        'choices' => [
                            ['choice_text' => 'La réduction du risque', 'is_correct' => false],
                            ['choice_text' => 'Une diversification parfaite', 'is_correct' => false],
                            ['choice_text' => 'Une meilleure qualité d’information', 'is_correct' => false],
                            ['choice_text' => 'L’excès de confiance collectif', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel outil simple peut réduire l’excès de confiance lors d’une décision d’investissement ?',
                        'explanation' => 'Une revue contradictoire oblige à identifier les points faibles et à tester les hypothèses les plus fragiles.',
                        'choices' => [
                            ['choice_text' => 'Une augmentation automatique de la taille de position', 'is_correct' => false],
                            ['choice_text' => 'Une revue contradictoire des hypothèses', 'is_correct' => true],
                            ['choice_text' => 'La suppression des limites de risque', 'is_correct' => false],
                            ['choice_text' => 'La lecture d’un seul avis favorable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur change sans cesse ses prévisions pour qu’elles correspondent aux résultats déjà observés. Quel danger cela révèle-t-il ?',
                        'explanation' => 'Modifier le récit après coup peut donner l’illusion d’avoir anticipé les événements. Une bonne pratique consiste à conserver les hypothèses initiales et à suivre leurs erreurs.',
                        'choices' => [
                            ['choice_text' => 'Il peut sous-estimer l’importance des résultats déjà observés', 'is_correct' => false],
                            ['choice_text' => 'Il peut avoir une confiance excessive dans la stabilité de ses premières hypothèses', 'is_correct' => false],
                            ['choice_text' => 'Il peut confondre adaptation rationnelle et justification a posteriori', 'is_correct' => true],
                            ['choice_text' => 'Il peut confondre corrélation entre deux actifs et diversification réelle', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Effet de cadrage et présentation des offres',
                'description' => 'Comprendre pourquoi une même information peut produire des réactions différentes selon sa présentation.',
                'questions' => [
                    [
                        'question' => 'Deux offres ont le même coût total, mais l’une est présentée comme « 95 % des clients économisent » et l’autre comme « 5 % supportent des frais supplémentaires ». Pourquoi les réactions peuvent-elles différer ?',
                        'explanation' => 'La formulation attire l’attention sur des aspects différents d’une information comparable. C’est le principe de l’effet de cadrage.',
                        'choices' => [
                            ['choice_text' => 'Les coûts réels des deux offres diffèrent', 'is_correct' => false],
                            ['choice_text' => 'Le cadrage influence la perception', 'is_correct' => true],
                            ['choice_text' => 'La récence modifie la lecture des offres', 'is_correct' => false],
                            ['choice_text' => 'Un premier prix affiché sert de point d’ancrage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une publicité affirme qu’un placement est « gagnant dans 9 cas sur 10 » mais ne montre pas clairement la perte possible dans le dixième cas. Quel danger existe ?',
                        'explanation' => 'Mettre en avant les gagnants peut rendre le scénario défavorable moins présent dans l’esprit du client.',
                        'choices' => [
                            ['choice_text' => 'La probabilité de perte devient mathématiquement plus faible', 'is_correct' => false],
                            ['choice_text' => 'La présentation peut minimiser mentalement les pertes', 'is_correct' => true],
                            ['choice_text' => 'Le client peut surestimer la fréquence des pertes passées', 'is_correct' => false],
                            ['choice_text' => 'Le produit est protégé contre les pertes par la réglementation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi demander « combien de perte pouvez-vous supporter ? » peut-il produire une réponse différente de « quel risque acceptez-vous pour atteindre votre objectif ? » ?',
                        'explanation' => 'La première formulation met l’accent sur la peur de la perte, la seconde sur le compromis entre risque et objectif. La présentation influence donc la perception.',
                        'choices' => [
                            ['choice_text' => 'La formulation attire l’attention sur des aspects psychologiques différents', 'is_correct' => true],
                            ['choice_text' => 'Les deux questions portent sur la même grandeur et donnent des réponses identiques', 'is_correct' => false],
                            ['choice_text' => 'La seconde question suppose que le client connaît déjà la volatilité de chaque actif', 'is_correct' => false],
                            ['choice_text' => 'Le risque devient plus facile à mesurer quand on parle d’objectif plutôt que de perte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un compte bancaire met en avant « 50 € de cashback » sans mettre immédiatement en évidence les frais annuels. Quel problème peut apparaître ?',
                        'explanation' => 'Un bénéfice présenté de manière très visible peut détourner l’attention d’un coût moins saillant. Il faut comparer l’offre dans son ensemble.',
                        'choices' => [
                            ['choice_text' => 'Une confusion entre taux nominal et taux réel de l’épargne', 'is_correct' => false],
                            ['choice_text' => 'Un excès de confiance dans la stabilité financière de la banque', 'is_correct' => false],
                            ['choice_text' => 'Un excès d’attention accordé au coût annuel par rapport aux avantages offerts', 'is_correct' => false],
                            ['choice_text' => 'Une focalisation sur un avantage visible au détriment du coût global', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un conseiller décrit un produit comme « 98 % du capital conservé » au lieu de « jusqu’à 2 % de perte possible ». Quel effet peut-il rechercher ?',
                        'explanation' => 'La première formulation met en avant la conservation du capital et rend la perte moins saillante, sans changer nécessairement le risque économique.',
                        'choices' => [
                            ['choice_text' => 'Une réduction réelle du risque de perte du produit', 'is_correct' => false],
                            ['choice_text' => 'Une protection du capital imposée par la réglementation', 'is_correct' => false],
                            ['choice_text' => 'Une perception plus rassurante grâce au cadrage', 'is_correct' => true],
                            ['choice_text' => 'Une meilleure rentabilité attendue du produit proposé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel réflexe est utile face à une offre financière très séduisante par sa présentation ?',
                        'explanation' => 'Changer volontairement le cadrage permet de vérifier si la décision dépend trop de la présentation plutôt que des conditions réelles.',
                        'choices' => [
                            ['choice_text' => 'Demander l’avis d’un proche qui a déjà souscrit l’offre', 'is_correct' => false],
                            ['choice_text' => 'Se concentrer sur le chiffre le plus mis en avant par l’offre', 'is_correct' => false],
                            ['choice_text' => 'Décider rapidement tant que la présentation de l’offre reste attractive', 'is_correct' => false],
                            ['choice_text' => 'Reformuler les mêmes chiffres sous un autre angle avant de décider', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un formulaire demande d’abord au client combien il souhaite investir, puis lui demande son objectif. Quel risque comportemental peut apparaître ?',
                        'explanation' => 'Le premier chiffre peut influencer la réponse suivante, même s’il n’avait pas de justification objective au départ.',
                        'choices' => [
                            ['choice_text' => 'Le client peut surestimer sa compétence financière', 'is_correct' => false],
                            ['choice_text' => 'Le premier montant peut devenir un ancrage', 'is_correct' => true],
                            ['choice_text' => 'Le formulaire peut déclencher un effet de dotation', 'is_correct' => false],
                            ['choice_text' => 'Le client peut suivre le choix de la majorité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi présenter une perte comme « 100 € » plutôt que « 10 % » peut-il modifier la réaction d’un client ?',
                        'explanation' => 'La même réalité peut sembler différente selon l’unité et le contexte. Une analyse complète doit remettre les chiffres en perspective.',
                        'choices' => [
                            ['choice_text' => 'Le pourcentage est une donnée certaine et le montant une estimation', 'is_correct' => false],
                            ['choice_text' => 'Le pourcentage inclut les frais, alors que le montant les exclut', 'is_correct' => false],
                            ['choice_text' => 'Le calcul de la perte diffère selon l’unité choisie', 'is_correct' => false],
                            ['choice_text' => 'L’échelle et le contexte influencent la perception', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur retient uniquement le « potentiel de gain de 8 % » d’un produit alors qu’une baisse de 10 % est également possible. Quel défaut de décision apparaît ?',
                        'explanation' => 'L’investisseur n’intègre pas correctement la partie défavorable du scénario. Il réagit donc à un cadrage incomplet.',
                        'choices' => [
                            ['choice_text' => 'Une surévaluation du risque de perte par rapport au gain', 'is_correct' => false],
                            ['choice_text' => 'Une attention asymétrique à l’information favorable', 'is_correct' => true],
                            ['choice_text' => 'Un attachement affectif à un produit qu’il détient déjà', 'is_correct' => false],
                            ['choice_text' => 'Une dépendance aux avis des autres souscripteurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle pratique peut réduire l’effet de cadrage ?',
                        'explanation' => 'Une présentation équilibrée réduit le risque qu’un seul aspect soit surpondéré simplement parce qu’il est mieux mis en évidence.',
                        'choices' => [
                            ['choice_text' => 'Mettre en avant la formulation la plus rassurante pour le client', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les chiffres par des descriptions qualitatives du produit', 'is_correct' => false],
                            ['choice_text' => 'Présenter gains, pertes, coûts et probabilités dans un format comparable', 'is_correct' => true],
                            ['choice_text' => 'Raccourcir la présentation pour ne conserver que le rendement moyen attendu', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptabilité mentale et argent par catégories',
                'description' => 'Comprendre pourquoi les individus traitent différemment des sommes pourtant interchangeables.',
                'questions' => [
                    [
                        'question' => 'Une personne possède 5 000 € sur son compte courant et 5 000 € dans une « enveloppe vacances ». Elle refuse de toucher à l’enveloppe en cas d’urgence. Quel mécanisme est visible ?',
                        'explanation' => 'La personne attribue des rôles différents à des sommes qui ont pourtant la même valeur économique.',
                        'choices' => [
                            ['choice_text' => 'Le biais de confirmation', 'is_correct' => false],
                            ['choice_text' => 'L’excès de confiance', 'is_correct' => false],
                            ['choice_text' => 'La comptabilité mentale', 'is_correct' => true],
                            ['choice_text' => 'Le biais de disponibilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un ménage rembourse une petite dette à 0 % mais conserve une dette de carte beaucoup plus coûteuse parce qu’il veut « finir d’abord la petite ». Quel phénomène peut expliquer ce choix ?',
                        'explanation' => 'Les dettes sont traitées comme des catégories séparées au lieu d’être comparées principalement selon leur coût financier.',
                        'choices' => [
                            ['choice_text' => 'La comptabilité mentale', 'is_correct' => true],
                            ['choice_text' => 'L’efficience des marchés', 'is_correct' => false],
                            ['choice_text' => 'La diversification', 'is_correct' => false],
                            ['choice_text' => 'Le risque systématique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne a perdu un billet de concert de 50 €. Elle renonce à en racheter un, alors qu’elle aurait acheté sans hésiter ce même billet si elle avait perdu 50 € en espèces. Quel mécanisme est le plus plausible ?',
                        'explanation' => 'Racheter le billet revient à payer deux fois la même sortie dans le même compte mental, alors que la perte d’espèces n’est pas imputée à ce compte. Pourtant, la perte économique est de 50 € dans les deux cas.',
                        'choices' => [
                            ['choice_text' => 'Elle considère qu’un billet de concert vaut moins que 50 € en espèces', 'is_correct' => false],
                            ['choice_text' => 'Elle range billet et espèces dans deux comptes mentaux distincts', 'is_correct' => true],
                            ['choice_text' => 'Elle copie le comportement de ses amis, qui n’auraient pas racheté de billet', 'is_correct' => false],
                            ['choice_text' => 'Elle sous-estime l’effet de l’inflation sur le prix des billets de concert', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une enveloppe d’épargne peut-elle malgré tout être utile ?',
                        'explanation' => 'La comptabilité mentale n’est pas toujours négative. Une catégorie claire peut agir comme un engagement comportemental utile.',
                        'choices' => [
                            ['choice_text' => 'Une catégorie mentale peut servir de règle pour limiter les dépenses impulsives', 'is_correct' => true],
                            ['choice_text' => 'Une enveloppe peut protéger l’épargne de l’inflation grâce à son étiquette', 'is_correct' => false],
                            ['choice_text' => 'L’enveloppe peut transformer l’argent mis de côté en placement à rendement supérieur', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de comparer plus facilement le coût de la dette et le rendement de l’épargne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne refuse d’utiliser 1 000 € d’épargne pour réduire une dette de carte très coûteuse parce que l’épargne est réservée à « un projet ». Quel problème peut apparaître ?',
                        'explanation' => 'La séparation mentale peut empêcher de comparer rationnellement le coût de la dette avec le rendement de l’épargne.',
                        'choices' => [
                            ['choice_text' => 'L’épargne perd de la valeur dès qu’elle est affectée à un projet', 'is_correct' => false],
                            ['choice_text' => 'Le taux de la dette baisse quand on conserve davantage d’épargne', 'is_correct' => false],
                            ['choice_text' => 'L’investisseur sous-estime le risque de perdre son épargne sur les marchés', 'is_correct' => false],
                            ['choice_text' => 'L’étiquette mentale empêche une comparaison globale des coûts', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur considère les dividendes comme de « l’argent gratuit » et dépense tout sans tenir compte de la variation du cours de l’action. Quelle erreur peut-il faire ?',
                        'explanation' => 'Les dividendes et la valeur du titre font partie de la richesse globale. Les considérer comme indépendants peut fausser le raisonnement.',
                        'choices' => [
                            ['choice_text' => 'Il surestime la valeur des dividendes futurs de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Il applique une règle de rééquilibrage trop stricte', 'is_correct' => false],
                            ['choice_text' => 'Il suit l’exemple des autres actionnaires de la société cotée', 'is_correct' => false],
                            ['choice_text' => 'Il sépare mentalement les dividendes du reste de sa richesse', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel conseil peut aider une famille qui utilise beaucoup d’enveloppes mentales ?',
                        'explanation' => 'La vue consolidée aide à repérer les incohérences entre différentes poches et à prendre des décisions à l’échelle du patrimoine total.',
                        'choices' => [
                            ['choice_text' => 'Ajouter une enveloppe distincte pour chaque nouvel objectif de dépense', 'is_correct' => false],
                            ['choice_text' => 'Placer chaque enveloppe sur un compte différent sans les comparer', 'is_correct' => false],
                            ['choice_text' => 'Faire régulièrement un bilan consolidé du patrimoine et des dettes', 'is_correct' => true],
                            ['choice_text' => 'Réserver les primes et remboursements à des dépenses de plaisir', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne utilise un remboursement d’impôt pour des achats qu’elle n’aurait pas faits avec son salaire. Quelle interprétation est plausible ?',
                        'explanation' => 'La source du revenu peut influencer le comportement alors que la valeur économique du montant reste identique.',
                        'choices' => [
                            ['choice_text' => 'L’origine perçue de l’argent modifie son usage mental', 'is_correct' => true],
                            ['choice_text' => 'Elle ne peut pas placer un remboursement d’impôt sur un compte d’épargne', 'is_correct' => false],
                            ['choice_text' => 'Elle copie les dépenses de son entourage après un remboursement', 'is_correct' => false],
                            ['choice_text' => 'Elle reste ancrée sur le montant de son dernier remboursement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise refuse de réallouer une somme du budget « projet A » vers « projet B » alors que B est devenu beaucoup plus rentable. Quel parallèle comportemental peut-on faire ?',
                        'explanation' => 'Les catégories de suivi sont utiles, mais elles ne devraient pas empêcher l’organisation de réallouer une ressource vers un usage plus créateur de valeur.',
                        'choices' => [
                            ['choice_text' => 'Un budget par projet réduit le coût d’opportunité des ressources', 'is_correct' => false],
                            ['choice_text' => 'Les ressources d’un projet perdent leur valeur lorsqu’elles sont déplacées', 'is_correct' => false],
                            ['choice_text' => 'Des catégories rigides peuvent empêcher une allocation efficace', 'is_correct' => true],
                            ['choice_text' => 'Une entreprise ne peut pas comparer deux projets dont les budgets diffèrent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La comptabilité mentale est-elle forcément néfaste ?',
                        'explanation' => 'Une règle mentale peut être utile lorsqu’elle sert d’engagement simple. Le problème apparaît quand elle empêche une comparaison économique rationnelle.',
                        'choices' => [
                            ['choice_text' => 'Oui, car elle pousse à dépenser davantage dès qu’une enveloppe est remplie', 'is_correct' => false],
                            ['choice_text' => 'Non, car elle améliore le rendement des placements en actions', 'is_correct' => false],
                            ['choice_text' => 'Oui, car elle empêche de constituer une épargne pour des projets à long terme', 'is_correct' => false],
                            ['choice_text' => 'Non, certaines catégories peuvent aider à discipliner l’épargne et les dépenses', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Effet de disposition et gestion des positions',
                'description' => 'Comprendre pourquoi certains investisseurs vendent trop vite les gagnants et gardent trop longtemps les perdants.',
                'questions' => [
                    [
                        'question' => 'Un investisseur vend rapidement une action après +10 % mais refuse de vendre une autre position à −20 %. Quelle tendance reconnaît-on ?',
                        'explanation' => 'L’effet de disposition désigne notamment la tendance à réaliser rapidement les gains et à conserver les pertes plus longtemps.',
                        'choices' => [
                            ['choice_text' => 'L’effet de disposition', 'is_correct' => true],
                            ['choice_text' => 'Le biais de récence', 'is_correct' => false],
                            ['choice_text' => 'La comptabilité mentale', 'is_correct' => false],
                            ['choice_text' => 'Le troupeau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vendre une action uniquement parce qu’elle a déjà beaucoup monté peut-il être une mauvaise raison ?',
                        'explanation' => 'Le gain passé ne dit pas si l’action reste intéressante aujourd’hui. Il faut réexaminer les perspectives et les alternatives.',
                        'choices' => [
                            ['choice_text' => 'Un gain passé réduit le risque de baisse future et rend la vente inutile', 'is_correct' => false],
                            ['choice_text' => 'Une action qui a beaucoup monté perd son potentiel de dividendes', 'is_correct' => false],
                            ['choice_text' => 'La décision devrait dépendre de sa valeur et de ses perspectives actuelles', 'is_correct' => true],
                            ['choice_text' => 'Le prix d’achat de l’action détermine sa valeur actuelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur garde une position perdante en disant : « tant que je ne vends pas, je n’ai rien perdu ». Quelle confusion fait-il ?',
                        'explanation' => 'La position a déjà perdu de la valeur. Une vente matérialise la perte, mais ne la crée pas.',
                        'choices' => [
                            ['choice_text' => 'Il confond la réalisation de la perte avec la valeur économique actuelle', 'is_correct' => true],
                            ['choice_text' => 'Il confond le rendement attendu avec le risque supporté par la position', 'is_correct' => false],
                            ['choice_text' => 'Il applique une règle d’arrêt de perte fixée avant son achat', 'is_correct' => false],
                            ['choice_text' => 'Il mesure sa perte à partir du prix le plus élevé atteint par l’action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une position gagnante devient 35 % du portefeuille et l’investisseur refuse de la réduire parce qu’il veut conserver son « beau gain ». Quel risque augmente ?',
                        'explanation' => 'Le succès du titre a fait grossir son poids. Refuser tout rééquilibrage peut rendre le portefeuille trop dépendant de cette seule position.',
                        'choices' => [
                            ['choice_text' => 'Le risque de concentration', 'is_correct' => true],
                            ['choice_text' => 'Le risque de change', 'is_correct' => false],
                            ['choice_text' => 'Le risque de taux d’intérêt', 'is_correct' => false],
                            ['choice_text' => 'Le risque de défaut bancaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle question aide le mieux à décider si une action gagnante doit être conservée ?',
                        'explanation' => 'Cette question remet la décision sur le capital disponible aujourd’hui plutôt que sur l’histoire du titre dans le portefeuille.',
                        'choices' => [
                            ['choice_text' => 'Combien ai-je gagné sur cette action depuis mon achat initial ?', 'is_correct' => false],
                            ['choice_text' => 'À quel prix l’action a-t-elle atteint son niveau le plus bas ?', 'is_correct' => false],
                            ['choice_text' => 'Si je ne la possédais pas aujourd’hui, l’achèterais-je au prix actuel ?', 'is_correct' => true],
                            ['choice_text' => 'Comment me sentirais-je si je vendais et que le cours montait ensuite ?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’effet de disposition peut-il nuire au portefeuille ?',
                        'explanation' => 'Le biais peut empêcher de laisser certaines bonnes positions évoluer tout en immobilisant du capital dans des investissements devenus moins convaincants.',
                        'choices' => [
                            ['choice_text' => 'Il peut faire vendre certains gagnants trop tôt et garder des perdants trop longtemps', 'is_correct' => true],
                            ['choice_text' => 'Il peut pousser à acheter des titres qui ont fortement baissé sans analyse', 'is_correct' => false],
                            ['choice_text' => 'Il peut conduire à détenir trop de titres différents dans le portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Il peut inciter à acheter les mêmes titres que la majorité des autres investisseurs du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur dit : « cette action m’a beaucoup rapporté, donc je dois la garder ». Quelle erreur peut-il commettre ?',
                        'explanation' => 'Le passé du titre ne détermine pas sa valeur future. La décision doit partir de l’analyse actuelle.',
                        'choices' => [
                            ['choice_text' => 'Vendre trop vite pour sécuriser un gain déjà important', 'is_correct' => false],
                            ['choice_text' => 'Utiliser le passé comme justification d’une décision future', 'is_correct' => true],
                            ['choice_text' => 'Accorder trop de poids aux nouvelles les plus récentes sur cette action', 'is_correct' => false],
                            ['choice_text' => 'Suivre l’opinion de la majorité sans analyse personnelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action perd 25 % après une mauvaise annonce fondamentale. Quel réflexe est le plus pertinent ?',
                        'explanation' => 'Une nouvelle information peut avoir changé durablement la valeur économique du titre. Le prix d’achat n’est pas une cible naturelle.',
                        'choices' => [
                            ['choice_text' => 'Vendre immédiatement toute la position pour ne plus subir la baisse, sans réévaluer l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Réexaminer les perspectives de l’entreprise plutôt que d’attendre mécaniquement le prix d’achat', 'is_correct' => true],
                            ['choice_text' => 'Acheter davantage de titres pour abaisser son prix de revient moyen sans réexamen', 'is_correct' => false],
                            ['choice_text' => 'Se fier à l’avis de la majorité des investisseurs présents sur les forums', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle le rééquilibrage peut-il jouer face à l’effet de disposition ?',
                        'explanation' => 'Une règle d’allocation préalablement définie peut réduire les décisions émotionnelles autour des gains et des pertes.',
                        'choices' => [
                            ['choice_text' => 'Il permet de repérer à l’avance les titres qui vont monter et de les conserver plus longtemps', 'is_correct' => false],
                            ['choice_text' => 'Il impose de vendre les perdants avant la fin de chaque année', 'is_correct' => false],
                            ['choice_text' => 'Il fournit une règle objective pour réduire des positions devenues trop importantes', 'is_correct' => true],
                            ['choice_text' => 'Il réduit les frais de transaction en limitant le nombre de titres détenus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’effet de disposition ne signifie-t-il pas qu’il faut toujours vendre les perdants et garder les gagnants ?',
                        'explanation' => 'Le biais décrit une tendance, pas une règle de gestion. Un perdant peut devenir attractif et un gagnant peut devenir trop cher ou trop risqué.',
                        'choices' => [
                            ['choice_text' => 'Parce que les gagnants passés ont tendance à baisser et les perdants à remonter à moyen terme', 'is_correct' => false],
                            ['choice_text' => 'Parce que le biais ne concerne que les investisseurs qui empruntent pour acheter des titres', 'is_correct' => false],
                            ['choice_text' => 'Parce que les performances passées permettent de prévoir les titres à conserver', 'is_correct' => false],
                            ['choice_text' => 'Parce que la décision dépend des perspectives futures et du risque, pas du seul résultat passé', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Troupeau et pression sociale sur les marchés',
                'description' => 'Analyser les décisions prises sous l’influence du comportement des autres.',
                'questions' => [
                    [
                        'question' => 'Une action devient très populaire sur les réseaux sociaux et beaucoup de particuliers l’achètent sans étudier l’entreprise. Quel phénomène est le plus visible ?',
                        'explanation' => 'Les investisseurs imitent les autres participants. La popularité devient alors une raison d’achat à elle seule.',
                        'choices' => [
                            ['choice_text' => 'La comptabilité mentale', 'is_correct' => false],
                            ['choice_text' => 'Le comportement de troupeau', 'is_correct' => true],
                            ['choice_text' => 'L’effet de dotation', 'is_correct' => false],
                            ['choice_text' => 'La valeur temporelle de l’argent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le comportement de troupeau peut-il amplifier une hausse de prix ?',
                        'explanation' => 'Les achats de nouveaux participants peuvent renforcer le mouvement initial et attirer encore d’autres acheteurs.',
                        'choices' => [
                            ['choice_text' => 'Les bénéfices des entreprises montent dès que leur cours augmente', 'is_correct' => false],
                            ['choice_text' => 'Les achats déclenchés par l’imitation renforcent la demande', 'is_correct' => true],
                            ['choice_text' => 'Les taux d’intérêt baissent quand beaucoup d’investisseurs achètent', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’actions en circulation diminue à chaque achat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après une série de nouvelles alarmantes, de nombreux investisseurs vendent en même temps alors que les fondamentaux n’ont pas tous changé. Quelle dynamique peut apparaître ?',
                        'explanation' => 'La peur peut se transmettre entre investisseurs et provoquer des ventes simultanées au-delà de ce que justifieraient certains fondamentaux.',
                        'choices' => [
                            ['choice_text' => 'Une réévaluation prudente fondée sur les comptes des entreprises', 'is_correct' => false],
                            ['choice_text' => 'Un excès de confiance et une attention portée aux gains passés', 'is_correct' => false],
                            ['choice_text' => 'Un effet de dotation et un attachement aux titres détenus', 'is_correct' => false],
                            ['choice_text' => 'Une contagion émotionnelle et un comportement de troupeau', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur achète un actif uniquement parce que « tout le monde en parle ». Quel risque psychologique est évident ?',
                        'explanation' => 'La popularité est une information sur le comportement des autres, pas une preuve que l’actif est correctement valorisé.',
                        'choices' => [
                            ['choice_text' => 'Confondre popularité et valeur économique', 'is_correct' => true],
                            ['choice_text' => 'Calculer correctement le risque', 'is_correct' => false],
                            ['choice_text' => 'Utiliser une diversification fondamentale', 'is_correct' => false],
                            ['choice_text' => 'Évaluer précisément la liquidité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi peut-on regretter de ne pas avoir acheté un actif qui monte fortement, même si la décision initiale était rationnelle ?',
                        'explanation' => 'Voir les autres gagner peut créer un sentiment de regret qui pousse à acheter tardivement sans nouvelle analyse.',
                        'choices' => [
                            ['choice_text' => 'Le regret traduit une compétence supérieure à celle des investisseurs qui ont acheté', 'is_correct' => false],
                            ['choice_text' => 'Les actifs qui ont fortement monté continuent généralement de monter pendant plusieurs mois ensuite', 'is_correct' => false],
                            ['choice_text' => 'La forte hausse d’un actif prouve que son prix était auparavant sous-évalué par erreur', 'is_correct' => false],
                            ['choice_text' => 'La comparaison sociale et la peur de manquer une opportunité peuvent influencer la décision', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un gérant refuse d’acheter un titre uniquement parce que deux concurrents l’ont acheté. Quelle réponse est la plus saine ?',
                        'explanation' => 'La décision des concurrents peut être une information à examiner, mais elle ne remplace pas l’analyse propre du risque et de la valeur.',
                        'choices' => [
                            ['choice_text' => 'Acheter le titre pour ne pas s’écarter de ses concurrents et éviter d’être le seul à se tromper', 'is_correct' => false],
                            ['choice_text' => 'Écarter les informations venant des concurrents afin de préserver son jugement personnel', 'is_correct' => false],
                            ['choice_text' => 'Suivre l’avis du gérant le plus expérimenté de l’équipe sans demander d’analyse', 'is_correct' => false],
                            ['choice_text' => 'Analyser le titre indépendamment tout en considérant ce que l’information sur les concurrents peut signifier', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme peut contribuer à une bulle lorsqu’une hausse attire des acheteurs uniquement parce qu’ils pensent que d’autres achèteront encore ?',
                        'explanation' => 'Les achats fondés sur l’anticipation des achats futurs peuvent entretenir la hausse pendant un temps, indépendamment des fondamentaux.',
                        'choices' => [
                            ['choice_text' => 'Une amélioration durable des bénéfices des entreprises concernées', 'is_correct' => false],
                            ['choice_text' => 'Une baisse des taux d’intérêt annoncée par la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Des anticipations autoréalisatrices alimentées par le troupeau', 'is_correct' => true],
                            ['choice_text' => 'Une prudence accrue des investisseurs après plusieurs années de hausse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le fait que beaucoup de personnes possèdent un actif ne prouve-t-il pas qu’il est correctement valorisé ?',
                        'explanation' => 'Un actif peut être extrêmement populaire et néanmoins trop cher ou trop peu cher. La popularité ne remplace pas la valorisation.',
                        'choices' => [
                            ['choice_text' => 'Le nombre de détenteurs ne donne pas directement sa valeur fondamentale', 'is_correct' => true],
                            ['choice_text' => 'Un grand nombre de détenteurs réduit le risque de baisse de l’actif', 'is_correct' => false],
                            ['choice_text' => 'Les détenteurs d’un actif sont mieux informés que les autres investisseurs', 'is_correct' => false],
                            ['choice_text' => 'La forte liquidité d’un actif populaire fixe son prix à sa valeur réelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe d’investissement change d’avis dès qu’un dirigeant très respecté exprime une opinion différente. Quel risque apparaît ?',
                        'explanation' => 'La position d’une personne influente peut réduire la liberté de jugement des autres, même lorsque les arguments méritent d’être discutés.',
                        'choices' => [
                            ['choice_text' => 'Une meilleure diversification', 'is_correct' => false],
                            ['choice_text' => 'Une réduction du risque', 'is_correct' => false],
                            ['choice_text' => 'La pression d’autorité et le conformisme', 'is_correct' => true],
                            ['choice_text' => 'Une information parfaitement objective', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel dispositif simple aide une équipe à limiter le biais de troupeau ?',
                        'explanation' => 'Un contradicteur désigné permet d’examiner les risques ignorés et de réduire l’effet du consensus automatique.',
                        'choices' => [
                            ['choice_text' => 'Faire présenter explicitement les arguments contre la décision dominante', 'is_correct' => true],
                            ['choice_text' => 'Demander à chaque membre de voter à main levée devant le reste de l’équipe réunie', 'is_correct' => false],
                            ['choice_text' => 'Réunir l’équipe en présence du dirigeant le plus expérimenté', 'is_correct' => false],
                            ['choice_text' => 'Limiter les échanges pour accélérer la prise de décision collective', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Escalade d’engagement et coûts irrécupérables',
                'description' => 'Comprendre pourquoi les décisions passées peuvent peser à tort sur les décisions futures.',
                'questions' => [
                    [
                        'question' => 'Une entreprise continue de financer un projet qui ne semble plus rentable parce qu’elle y a déjà consacré 2 millions d’euros. Quelle erreur peut apparaître ?',
                        'explanation' => 'Les 2 millions déjà dépensés sont des coûts irrécupérables. Ils ne devraient pas, à eux seuls, déterminer la décision de continuer.',
                        'choices' => [
                            ['choice_text' => 'Le biais de confirmation lié aux avis des fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'L’effet de cadrage lié à la présentation du budget', 'is_correct' => false],
                            ['choice_text' => 'Le comportement de troupeau lié aux projets des concurrents', 'is_correct' => false],
                            ['choice_text' => 'L’escalade d’engagement liée aux coûts déjà supportés', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer les coûts passés de la décision actuelle ?',
                        'explanation' => 'La décision marginale porte sur ce qu’il reste à engager et sur les bénéfices futurs. Le passé peut fournir de l’information, mais il ne doit pas devenir une dette psychologique.',
                        'choices' => [
                            ['choice_text' => 'Parce que les fonds déjà dépensés ne peuvent pas être récupérés et ne doivent pas justifier automatiquement de nouvelles dépenses', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts passés sont déjà amortis comptablement et ne comptent plus dans le résultat de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dépenses déjà engagées doivent être doublées pour que le projet atteigne son seuil de rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts passés sont généralement plus faibles que les coûts futurs et peuvent donc être négligés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un particulier conserve un abonnement qu’il n’utilise presque jamais parce qu’il l’a payé pour l’année entière. Quel raisonnement est en cause ?',
                        'explanation' => 'La somme déjà payée est irrécupérable. La question actuelle est simplement de savoir si le service vaut encore son coût futur.',
                        'choices' => [
                            ['choice_text' => 'Une comparaison correcte du coût d’opportunité de l’abonnement', 'is_correct' => false],
                            ['choice_text' => 'Un attachement affectif au service dont il dispose déjà', 'is_correct' => false],
                            ['choice_text' => 'Une influence du comportement des autres abonnés du service', 'is_correct' => false],
                            ['choice_text' => 'Le poids excessif d’une dépense passée dans la décision', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un gérant refuse de reconnaître qu’une hypothèse initiale était fausse parce qu’il l’a défendue devant le comité. Quel risque apparaît ?',
                        'explanation' => 'Reconnaître une erreur peut être psychologiquement difficile. Cette pression peut conduire à défendre une décision devenue peu convaincante.',
                        'choices' => [
                            ['choice_text' => 'Le besoin de justifier son choix initial', 'is_correct' => true],
                            ['choice_text' => 'Une diversification parfaite', 'is_correct' => false],
                            ['choice_text' => 'La disparition du risque de marché', 'is_correct' => false],
                            ['choice_text' => 'L’inutilité des nouvelles informations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel critère doit surtout guider la décision de continuer ou d’arrêter un projet ?',
                        'explanation' => 'Les coûts passés ne peuvent pas être récupérés. Il faut comparer les ressources restant à engager aux bénéfices futurs attendus.',
                        'choices' => [
                            ['choice_text' => 'Le montant total déjà investi depuis le lancement', 'is_correct' => false],
                            ['choice_text' => 'La durée déjà écoulée depuis le lancement du projet', 'is_correct' => false],
                            ['choice_text' => 'La valeur attendue des coûts et bénéfices futurs', 'is_correct' => true],
                            ['choice_text' => 'L’image que le projet donne de l’entreprise aux clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur augmente sa mise sur une position détériorée uniquement pour justifier ses achats précédents. Quel danger apparaît ?',
                        'explanation' => 'Augmenter l’exposition pour défendre une décision ancienne peut transformer une petite erreur en perte beaucoup plus importante.',
                        'choices' => [
                            ['choice_text' => 'Une escalade d’engagement', 'is_correct' => true],
                            ['choice_text' => 'Une réduction du risque', 'is_correct' => false],
                            ['choice_text' => 'Une meilleure diversification', 'is_correct' => false],
                            ['choice_text' => 'Une couverture naturelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi demander à un collègue « si tu n’avais encore rien investi, commencerais-tu aujourd’hui ? » peut-il aider ?',
                        'explanation' => 'La question force à regarder la situation comme si l’argent passé n’était plus récupérable, ce qui aide à neutraliser l’attachement au passé.',
                        'choices' => [
                            ['choice_text' => 'Cela permet de calculer précisément le rendement final du projet', 'is_correct' => false],
                            ['choice_text' => 'Cela remplace l’analyse des flux de trésorerie futurs par un simple avis', 'is_correct' => false],
                            ['choice_text' => 'Cela aide à isoler la décision future des coûts déjà engagés', 'is_correct' => true],
                            ['choice_text' => 'Cela mesure la rentabilité passée du projet pour décider de sa suite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet reçoit de nouveaux résultats décevants, mais l’équipe continue pour ne pas « gaspiller le travail déjà fait ». Quel élément doit être examiné ?',
                        'explanation' => 'Le travail passé ne crée pas automatiquement une valeur future. Il faut réévaluer la décision à partir des informations disponibles aujourd’hui.',
                        'choices' => [
                            ['choice_text' => 'Si le temps déjà investi dépasse la durée initialement prévue', 'is_correct' => false],
                            ['choice_text' => 'Si les dépenses et bénéfices futurs justifient encore le projet', 'is_correct' => true],
                            ['choice_text' => 'Si l’abandon du projet risque de décevoir les membres de l’équipe', 'is_correct' => false],
                            ['choice_text' => 'Si le budget déjà dépensé est supérieur à celui des autres projets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur garde une stratégie faible pendant des années en disant « après tout ce temps, elle finira bien par marcher ». Quel biais est plausible ?',
                        'explanation' => 'Le temps déjà consacré peut créer un sentiment d’obligation à continuer, même lorsque les perspectives ne justifient plus la stratégie.',
                        'choices' => [
                            ['choice_text' => 'La diversification', 'is_correct' => false],
                            ['choice_text' => 'La neutralité émotionnelle', 'is_correct' => false],
                            ['choice_text' => 'L’escalade d’engagement', 'is_correct' => true],
                            ['choice_text' => 'La couverture parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle pratique aide à limiter l’escalade d’engagement ?',
                        'explanation' => 'Des critères définis à l’avance rendent plus facile une décision objective lorsque de nouvelles informations rendent le projet moins attractif.',
                        'choices' => [
                            ['choice_text' => 'Prévoir des critères d’arrêt ou de révision avant le lancement du projet', 'is_correct' => true],
                            ['choice_text' => 'Rendre le budget du projet plus rigide pour éviter toute remise en cause', 'is_correct' => false],
                            ['choice_text' => 'Confier le suivi à l’équipe qui a lancé le projet pour garder la continuité', 'is_correct' => false],
                            ['choice_text' => 'Augmenter le budget dès les premiers retards pour sécuriser la réussite du projet', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Règles, pré-engagement et habitudes financières',
                'description' => 'Voir comment des règles simples peuvent protéger les décisions contre les émotions.',
                'questions' => [
                    [
                        'question' => 'Une personne met automatiquement 500 € de côté chaque début de mois plutôt que d’attendre la fin du mois. Quel avantage comportemental peut en découler ?',
                        'explanation' => 'L’automatisation transforme l’épargne en routine et réduit le risque de dépenser la somme avant de la mettre de côté.',
                        'choices' => [
                            ['choice_text' => 'Elle transforme chaque virement en investissement à rendement plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Elle rend inutile de suivre un budget puisque les dépenses s’ajustent d’elles-mêmes', 'is_correct' => false],
                            ['choice_text' => 'Elle protège le capital épargné contre la hausse des prix à long terme', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit le besoin de décider chaque mois et facilite l’habitude d’épargne', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un plan d’investissement régulier peut-il aider quelqu’un qui réagit fortement aux variations du marché ?',
                        'explanation' => 'Une règle régulière enlève une partie du choix tactique à des moments où les émotions peuvent être fortes. Elle ne garantit cependant pas le meilleur prix.',
                        'choices' => [
                            ['choice_text' => 'Il supprime le risque de perte en capital lorsque le plan est suivi sur de longues années', 'is_correct' => false],
                            ['choice_text' => 'Il réduit la dépendance aux décisions émotionnelles prises au mauvais moment', 'is_correct' => true],
                            ['choice_text' => 'Il dispense de choisir les actifs dans lesquels investir au départ', 'is_correct' => false],
                            ['choice_text' => 'Il permet de prévoir le meilleur moment pour acheter chaque mois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur fixe qu’une position ne doit pas dépasser 10 % du portefeuille sans justification documentée. Quel outil utilise-t-il ?',
                        'explanation' => 'Une limite prédéfinie réduit le risque qu’une position grossisse simplement parce que l’investisseur est devenu trop optimiste.',
                        'choices' => [
                            ['choice_text' => 'Une prévision de marché', 'is_correct' => false],
                            ['choice_text' => 'Un indicateur de volatilité', 'is_correct' => false],
                            ['choice_text' => 'Une règle pré-engagée', 'is_correct' => true],
                            ['choice_text' => 'Un objectif de rendement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt comportemental d’un rééquilibrage annuel ?',
                        'explanation' => 'Le rééquilibrage donne un cadre objectif et réduit le risque de laisser les gagnants récents dominer durablement le portefeuille.',
                        'choices' => [
                            ['choice_text' => 'Acheter les actifs les plus performants de l’année écoulée', 'is_correct' => false],
                            ['choice_text' => 'Liquider le portefeuille à chaque fin d’année pour repartir de zéro', 'is_correct' => false],
                            ['choice_text' => 'Adapter le portefeuille aux prévisions de marché de l’année suivante', 'is_correct' => false],
                            ['choice_text' => 'Ramener le portefeuille vers une allocation décidée à l’avance', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Avant chaque achat, un investisseur remplit une courte liste de vérification : objectif, horizon, perte maximale acceptée, scénario défavorable. Quel avantage comportemental cette habitude apporte-t-elle ?',
                        'explanation' => 'Une liste de vérification impose le même cadre à chaque décision et limite les achats impulsifs. Elle ne garantit ni la rentabilité ni la prévision des cours.',
                        'choices' => [
                            ['choice_text' => 'Elle garantit que les titres choisis seront rentables sur le long terme', 'is_correct' => false],
                            ['choice_text' => 'Elle oblige à examiner les mêmes critères avant chaque décision', 'is_correct' => true],
                            ['choice_text' => 'Elle permet de prévoir avec précision le cours du titre à court terme', 'is_correct' => false],
                            ['choice_text' => 'Elle dispense de suivre ensuite l’actualité de l’entreprise achetée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi écrire à l’avance les raisons de son investissement peut-il être utile ?',
                        'explanation' => 'Une thèse écrite permet de distinguer une vraie évolution des fondamentaux d’une simple réaction émotionnelle au prix.',
                        'choices' => [
                            ['choice_text' => 'Cela permet de prévoir avec précision l’évolution du cours à court terme', 'is_correct' => false],
                            ['choice_text' => 'Cela oblige à conserver le titre tant que le cours n’a pas retrouvé son prix d’achat', 'is_correct' => false],
                            ['choice_text' => 'Cela dispense de revoir ses hypothèses lorsque de nouvelles informations arrivent', 'is_correct' => false],
                            ['choice_text' => 'Cela donne une référence pour vérifier plus tard si les faits ont réellement changé', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une personne décide de ne prendre aucune décision importante pendant 24 heures après une forte baisse de marché. Quel objectif poursuit-elle ?',
                        'explanation' => 'Le délai crée une distance entre l’émotion immédiate et la décision. Il ne prédit évidemment pas le marché.',
                        'choices' => [
                            ['choice_text' => 'Éviter de payer des frais de transaction pendant la période de baisse', 'is_correct' => false],
                            ['choice_text' => 'Se donner le temps de prévoir le rebond avec davantage de précision', 'is_correct' => false],
                            ['choice_text' => 'Créer un délai pour limiter les décisions impulsives sous stress', 'is_correct' => true],
                            ['choice_text' => 'Réduire la volatilité du portefeuille pendant la période de baisse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur consulte son portefeuille une fois par trimestre plutôt que plusieurs fois par jour. Quel avantage psychologique est possible ?',
                        'explanation' => 'Une surveillance excessive peut attirer l’attention sur le bruit à court terme. Une fréquence cohérente avec l’horizon peut aider à rester discipliné.',
                        'choices' => [
                            ['choice_text' => 'Une réduction du risque de perte sur les marchés pendant la période observée', 'is_correct' => false],
                            ['choice_text' => 'Un accès à des informations plus complètes sur chaque entreprise détenue', 'is_correct' => false],
                            ['choice_text' => 'Moins d’exposition aux petites fluctuations et aux réactions émotionnelles', 'is_correct' => true],
                            ['choice_text' => 'Un rendement supérieur obtenu en achetant au moment le plus favorable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique écrite de gestion des risques est-elle utile à une petite équipe ?',
                        'explanation' => 'Les règles écrites réduisent l’ambiguïté et aident à maintenir une discipline commune, tout en pouvant être révisées lorsque les hypothèses changent.',
                        'choices' => [
                            ['choice_text' => 'Elle supprime le risque de perte important sur les investissements suivis', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de prévoir quels investissements seront rentables', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit les frais de transaction en limitant le nombre d’opérations', 'is_correct' => false],
                            ['choice_text' => 'Elle fournit un cadre commun et limite les décisions improvisées', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple illustre le mieux un « nudge » financier ?',
                        'explanation' => 'Un nudge modifie l’environnement du choix sans supprimer la liberté de l’utilisateur. Le virement par défaut facilite un comportement souhaité.',
                        'choices' => [
                            ['choice_text' => 'Obliger les clients à verser un montant fixe sur leur épargne chaque mois, sans possibilité de retrait', 'is_correct' => false],
                            ['choice_text' => 'Proposer par défaut un virement vers l’épargne tout en laissant la possibilité de le modifier', 'is_correct' => true],
                            ['choice_text' => 'Présenter les frais de gestion en petits caractères au bas du document', 'is_correct' => false],
                            ['choice_text' => 'Taxer lourdement les retraits d’épargne afin de dissuader les clients de dépenser', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex];

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings['duration'],
                    'passing_score' => $settings['passing_score'],
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

                foreach ($questionData['choices'] as $choiceIndex => $choice) {
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
