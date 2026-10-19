<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialAccountingProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-accounting')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Comptabilité financière — Reporting financier professionnel',
                'description' => 'Analysez la qualité, la cohérence et la pertinence de l’information financière destinée à la prise de décision.',
                'questions' => [
                    [
                        'question' => 'Une société affiche une progression de 18 % du résultat net, mais ses flux de trésorerie opérationnels diminuent de 12 %. Quelle analyse professionnelle doit être prioritaire ?',
                        'explanation' => 'Il faut identifier les éléments qui expliquent l’écart entre le résultat et la trésorerie, notamment les créances, stocks et autres éléments du besoin en fonds de roulement.',
                        'choices' => [
                            ['choice_text' => 'Analyser la conversion du résultat en trésorerie et les variations du fonds de roulement', 'is_correct' => true],
                            ['choice_text' => 'Conclure que la performance s’est automatiquement améliorée', 'is_correct' => false],
                            ['choice_text' => 'Ignorer la trésorerie puisque le résultat est positif', 'is_correct' => false],
                            ['choice_text' => 'Se concentrer uniquement sur les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un directeur financier examine-t-il les tendances plutôt qu’un seul exercice comptable ?',
                        'explanation' => 'Une tendance permet de distinguer une évolution durable d’un événement ponctuel.',
                        'choices' => [
                            ['choice_text' => 'Pour distinguer les évolutions durables des variations ponctuelles', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un exercice unique ne contient jamais d’information utile', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les résultats historiques', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir les résultats futurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du bénéfice provient principalement d’une cession exceptionnelle d’un actif. Quelle conclusion est la plus prudente ?',
                        'explanation' => 'La cession peut augmenter le résultat sans améliorer durablement la performance opérationnelle.',
                        'choices' => [
                            ['choice_text' => 'Le bénéfice récurrent doit être analysé séparément de l’élément exceptionnel', 'is_correct' => true],
                            ['choice_text' => 'Le bénéfice récurrent a nécessairement augmenté dans la même proportion', 'is_correct' => false],
                            ['choice_text' => 'La trésorerie future est automatiquement garantie', 'is_correct' => false],
                            ['choice_text' => 'La cession constitue une activité opérationnelle récurrente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une variation inhabituelle d’un compte comptable doit-elle être documentée ?',
                        'explanation' => 'La documentation permet d’expliquer l’origine de la variation et de faciliter la revue.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer la traçabilité de la cause et faciliter la revue financière', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute modification ultérieure', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter le montant du compte', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l’analyse comparative', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la qualité des données sources est-elle essentielle avant la production d’un reporting financier ?',
                        'explanation' => 'Un reporting ne peut être fiable si les données sous-jacentes sont incomplètes ou erronées.',
                        'choices' => [
                            ['choice_text' => 'Parce que des données erronées peuvent rendre les conclusions financières trompeuses', 'is_correct' => true],
                            ['choice_text' => 'Parce que les logiciels corrigent automatiquement toutes les erreurs', 'is_correct' => false],
                            ['choice_text' => 'Parce que les données sources n’ont aucune influence sur les états financiers', 'is_correct' => false],
                            ['choice_text' => 'Parce que les contrôles sont inutiles lorsque le reporting est automatisé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les indicateurs financiers doivent-ils être accompagnés d’un contexte explicatif ?',
                        'explanation' => 'Un même indicateur peut avoir une signification différente selon le secteur, la stratégie et les événements de la période.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre une interprétation correcte des chiffres et de leurs évolutions', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre le reporting plus long uniquement', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute comparaison historique', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les états financiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un reporting professionnel distingue-t-il généralement les éléments opérationnels des éléments non récurrents ?',
                        'explanation' => 'Cette distinction aide à apprécier la performance soutenable et les perspectives futures.',
                        'choices' => [
                            ['choice_text' => 'Pour mieux identifier la performance récurrente et sa soutenabilité', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les événements exceptionnels des comptes', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer les éléments non récurrents en revenus réguliers', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter l’analyse du résultat net', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer les résultats réels aux budgets est-il utile ?',
                        'explanation' => 'L’analyse des écarts permet d’identifier les différences entre les hypothèses initiales et les réalisations.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les causes des écarts et améliorer les décisions futures', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que le budget initial était exact', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute nouvelle prévision', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données réelles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle éviter de présenter un indicateur favorable sans signaler un changement majeur de méthode comptable ?',
                        'explanation' => 'Un changement de méthode peut affecter la comparabilité avec les périodes précédentes.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut modifier la comparabilité et l’interprétation des performances', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un changement de méthode augmente toujours le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Parce que les méthodes comptables ne peuvent jamais changer', 'is_correct' => false],
                            ['choice_text' => 'Parce que la comparaison entre périodes est inutile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’un reporting financier professionnel ?',
                        'explanation' => 'Il doit fournir une information compréhensible, fiable et utile à la décision.',
                        'choices' => [
                            ['choice_text' => 'Fournir une information financière fiable et pertinente pour la prise de décision', 'is_correct' => true],
                            ['choice_text' => 'Présenter uniquement les chiffres les plus favorables', 'is_correct' => false],
                            ['choice_text' => 'Maximiser artificiellement le résultat', 'is_correct' => false],
                            ['choice_text' => 'Réduire le nombre de contrôles', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Clôture professionnelle et écritures sensibles',
                'description' => 'Évaluez les décisions et contrôles nécessaires lors d’une clôture financière professionnelle.',
                'questions' => [
                    [
                        'question' => 'Pourquoi les écritures de clôture inhabituelles présentent-elles un risque de contrôle supérieur ?',
                        'explanation' => 'Elles peuvent être complexes, significatives ou avoir un impact direct sur le résultat.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles peuvent être significatives, complexes ou sensibles pour le résultat', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles sont toujours erronées', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles ne doivent jamais être enregistrées', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles n’affectent jamais les états financiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une charge importante liée à décembre n’a pas encore été facturée. Quelle question faut-il poser à la clôture ?',
                        'explanation' => 'Il faut déterminer si la charge appartient à la période clôturée et si une écriture de régularisation est nécessaire.',
                        'choices' => [
                            ['choice_text' => 'La charge se rapporte-t-elle à la période clôturée et doit-elle être constatée avant réception de la facture ?', 'is_correct' => true],
                            ['choice_text' => 'La facture doit-elle être supprimée ?', 'is_correct' => false],
                            ['choice_text' => 'Le coût doit-il être reporté automatiquement à l’année suivante ?', 'is_correct' => false],
                            ['choice_text' => 'La charge doit-elle être transformée en immobilisation ?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse des événements postérieurs à la clôture peut-elle être nécessaire ?',
                        'explanation' => 'Certains événements survenus après la clôture peuvent fournir des informations pertinentes sur une situation existant déjà à la date de clôture.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer si certains événements ultérieurs apportent des informations pertinentes sur la situation à la clôture', 'is_correct' => true],
                            ['choice_text' => 'Pour modifier systématiquement tous les comptes clôturés', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les événements futurs', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir qu’aucune information ne sera ajoutée après clôture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une différence significative entre inventaire physique et stock comptable doit-elle être investiguée ?',
                        'explanation' => 'Elle peut révéler une erreur de saisie, une perte, une fraude ou un problème de processus.',
                        'choices' => [
                            ['choice_text' => 'Elle peut révéler une erreur, une perte, une anomalie de processus ou un risque de fraude', 'is_correct' => true],
                            ['choice_text' => 'Elle signifie toujours que les stocks comptables sont corrects', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a jamais d’impact financier', 'is_correct' => false],
                            ['choice_text' => 'Elle doit être ignorée si le résultat est positif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les comptes de charges doivent-ils être revus à la clôture même s’ils ont été enregistrés automatiquement ?', 'explanation' => 'L’automatisation réduit certaines erreurs mais ne remplace pas la validation de l’exhaustivité et de la bonne période.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier l’exhaustivité, le rattachement et l’absence d’anomalies significatives', 'is_correct' => true],
                            ['choice_text' => 'Parce que les systèmes automatiques sont toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l’automatisation', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter les charges', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une clôture accélérée ne doit-elle pas supprimer les contrôles essentiels ?',
                        'explanation' => 'La rapidité ne doit pas dégrader la fiabilité des états financiers.',
                        'choices' => [
                            ['choice_text' => 'Parce que la qualité et la fiabilité des comptes restent prioritaires', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une clôture lente est toujours meilleure', 'is_correct' => false],
                            ['choice_text' => 'Parce que les contrôles ne servent qu’aux audits externes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les écritures de clôture sont toujours sans risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les comptes à forte volatilité doivent-ils faire l’objet d’une analyse spécifique pendant la clôture ?',
                        'explanation' => 'Une forte volatilité peut signaler des erreurs, des événements inhabituels ou des changements économiques importants.',
                        'choices' => [
                            ['choice_text' => 'Pour distinguer une évolution réelle d’une anomalie comptable ou d’un événement inhabituel', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les variations', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un compte volatil est nécessairement faux', 'is_correct' => false],
                            ['choice_text' => 'Parce que les variations n’ont aucun intérêt analytique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la documentation des jugements comptables significatifs est-elle importante ?',
                        'explanation' => 'Elle permet de comprendre les hypothèses retenues et de faciliter la revue et l’audit.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre une revue claire des hypothèses, estimations et raisonnements utilisés', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute réévaluation', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les contrôles', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier automatiquement le résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les rapprochements de clôture doivent-ils être réalisés avant la validation finale des comptes ?',
                        'explanation' => 'Ils permettent de réduire le risque d’écarts non résolus dans les soldes présentés.',
                        'choices' => [
                            ['choice_text' => 'Pour résoudre les écarts et renforcer la fiabilité des soldes avant validation', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les soldes comptables', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les comptes auxiliaires', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute correction', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe caractérise une clôture professionnelle de qualité ?',
                        'explanation' => 'Une clôture solide combine exhaustivité, exactitude, justification, contrôle et respect du calendrier.',
                        'choices' => [
                            ['choice_text' => 'Concilier rapidité, exhaustivité, exactitude, justification et contrôle', 'is_correct' => true],
                            ['choice_text' => 'Privilégier uniquement la rapidité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les écritures de régularisation', 'is_correct' => false],
                            ['choice_text' => 'Éviter les contrôles pour respecter les délais', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Jugements, estimations et qualité comptable',
                'description' => 'Approfondissez le traitement des estimations et des jugements ayant un impact important sur les comptes.',
                'questions' => [
                    [
                        'question' => 'Pourquoi les estimations comptables peuvent-elles représenter un risque significatif ?',
                        'explanation' => 'Elles reposent sur des hypothèses qui peuvent fortement influencer les montants présentés.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles dépendent d’hypothèses susceptibles de modifier significativement les comptes', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les estimations sont nécessairement incorrectes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une estimation ne peut jamais être documentée', 'is_correct' => false],
                            ['choice_text' => 'Parce que les estimations ne concernent jamais le résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une estimation doit-elle être fondée sur des informations raisonnables disponibles à la date de clôture ?',
                        'explanation' => 'L’objectif est d’éviter que l’estimation repose sur des hypothèses arbitraires ou non pertinentes.',
                        'choices' => [
                            ['choice_text' => 'Pour refléter au mieux les conditions et informations pertinentes disponibles à cette date', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que l’estimation sera parfaitement exacte', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute révision future', 'is_correct' => false],
                            ['choice_text' => 'Pour maximiser artificiellement le résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hypothèse très optimiste concernant la recouvrabilité des créances peut-elle être risquée ?',
                        'explanation' => 'Elle peut conduire à sous-estimer les pertes attendues et donc à surévaluer les actifs.',
                        'choices' => [
                            ['choice_text' => 'Elle peut conduire à sous-estimer les pertes et à surévaluer les créances', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit une meilleure trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit automatiquement les dettes', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente toujours la qualité des bénéfices', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les estimations doivent-elles être réexaminées lorsque les circonstances changent ?',
                        'explanation' => 'Une estimation pertinente dans une situation donnée peut devenir inadaptée lorsque les conditions évoluent.',
                        'choices' => [
                            ['choice_text' => 'Parce que de nouvelles informations peuvent modifier les hypothèses pertinentes', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une estimation ne doit jamais rester stable', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement les charges', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute comparaison historique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les hypothèses d’amortissement peuvent-elles influencer le résultat futur ?',
                        'explanation' => 'La durée d’utilisation et les autres hypothèses déterminent le rythme de reconnaissance de la charge.',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent modifier le rythme de constatation des charges d’amortissement', 'is_correct' => true],
                            ['choice_text' => 'Elles modifient automatiquement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Elles n’ont aucun effet sur le résultat', 'is_correct' => false],
                            ['choice_text' => 'Elles transforment les immobilisations en dettes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un professionnel doit-il distinguer une erreur comptable d’un changement d’estimation ?',
                        'explanation' => 'Les deux situations n’ont pas la même nature ni nécessairement le même traitement comptable.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils résultent de causes différentes et peuvent avoir des traitements comptables différents', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute estimation est une erreur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les erreurs et estimations sont toujours traitées de la même façon', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une estimation ne peut jamais changer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la documentation des hypothèses comptables sensibles est-elle importante pour un auditeur ?',
                        'explanation' => 'Elle lui permet de comprendre la logique suivie et de challenger les hypothèses.',
                        'choices' => [
                            ['choice_text' => 'Elle facilite l’évaluation du raisonnement et des éléments de preuve utilisés', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit automatiquement l’approbation de l’audit', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche l’auditeur de poser des questions', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace les pièces justificatives', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une estimation significative doit-elle faire l’objet d’une analyse de sensibilité dans certains cas ?',
                        'explanation' => 'La sensibilité montre l’effet potentiel d’une modification raisonnable des hypothèses.',
                        'choices' => [
                            ['choice_text' => 'Pour comprendre l’impact de variations raisonnables des hypothèses sur les comptes', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir la valeur exacte de l’estimation', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les incertitudes', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute estimation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une estimation prudente ne signifie-t-elle pas nécessairement une sous-évaluation systématique ?', 'explanation' => 'La prudence consiste à utiliser des hypothèses raisonnables et justifiées, pas à biaiser volontairement les comptes.',
                        'choices' => [
                            ['choice_text' => 'Parce que la prudence exige surtout des hypothèses raisonnables et justifiables', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il faut toujours choisir le montant le plus faible', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une estimation prudente doit toujours minimiser les actifs', 'is_correct' => false],
                            ['choice_text' => 'Parce que les comptes peuvent être volontairement sous-évalués', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le bon principe professionnel concernant les estimations comptables ?',
                        'explanation' => 'Les estimations doivent être fondées, documentées, cohérentes et révisées lorsque nécessaire.',
                        'choices' => [
                            ['choice_text' => 'Utiliser des hypothèses raisonnables, documentées, cohérentes et régulièrement réévaluées', 'is_correct' => true],
                            ['choice_text' => 'Utiliser systématiquement les hypothèses les plus optimistes', 'is_correct' => false],
                            ['choice_text' => 'Ne jamais réviser une estimation', 'is_correct' => false],
                            ['choice_text' => 'Modifier les estimations uniquement pour atteindre un objectif de résultat', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Trésorerie, dette et continuité financière',
                'description' => 'Analysez les risques liés à la liquidité, à la dette et aux besoins de financement.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une entreprise rentable peut-elle présenter un risque de liquidité élevé ?',
                        'explanation' => 'Le bénéfice peut être immobilisé dans les créances, les stocks ou les investissements.',
                        'choices' => [
                            ['choice_text' => 'Parce que les ressources peuvent être immobilisées malgré un résultat positif', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une entreprise rentable n’a jamais de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les bénéfices sont toujours des dettes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes diminuent nécessairement quand le résultat augmente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la concentration des échéances de dette à une même période représente-t-elle un risque ?', 'explanation' => 'Elle peut provoquer un besoin important de liquidité ou de refinancement à une date donnée.',
                        'choices' => [
                            ['choice_text' => 'Elle peut créer une forte pression de trésorerie ou de refinancement', 'is_correct' => true],
                            ['choice_text' => 'Elle diminue automatiquement la dette', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente toujours le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit systématiquement le risque financier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un professionnel analyse-t-il la dette avec les flux de trésorerie futurs ?',
                        'explanation' => 'La capacité de remboursement dépend des ressources disponibles dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer la capacité future à payer intérêts et remboursements', 'is_correct' => true],
                            ['choice_text' => 'Parce que les flux futurs sont toujours certains', 'is_correct' => false],
                            ['choice_text' => 'Parce que le niveau de dette ne dépend jamais des flux', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la nécessité de trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un niveau élevé de trésorerie n’élimine-t-il pas automatiquement tout risque financier ?', 'explanation' => 'La trésorerie peut être temporaire, insuffisante face aux obligations futures ou exposée à d’autres contraintes.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il faut aussi examiner les engagements futurs, la durabilité des flux et la structure financière', 'is_correct' => true],
                            ['choice_text' => 'Parce que la trésorerie n’a aucune valeur financière', 'is_correct' => false],
                            ['choice_text' => 'Parce que la trésorerie est toujours perdue', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une entreprise liquide est nécessairement insolvable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les prévisions de trésorerie sont-elles importantes lorsqu’une dette importante arrive à échéance ?', 'explanation' => 'Elles permettent de vérifier si les ressources seront disponibles au moment du remboursement.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que les liquidités nécessaires seront disponibles à la date d’échéance', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer la dette', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir le renouvellement du financement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de refinancement doit-il être pris en compte dans une analyse financière ?', 'explanation' => 'Une entreprise peut dépendre du renouvellement de ses financements arrivant à échéance.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un financement arrivant à échéance peut devoir être remplacé dans des conditions moins favorables', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les dettes sont automatiquement renouvelées', 'is_correct' => false],
                            ['choice_text' => 'Parce que le refinancement ne dépend jamais des marchés', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une dette arrivant à échéance disparaît sans paiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le fonds de roulement peut-il devenir particulièrement important pendant une phase de croissance ?', 'explanation' => 'La croissance peut accroître les besoins en stocks et créances avant les encaissements correspondants.',
                        'choices' => [
                            ['choice_text' => 'Parce que la croissance peut augmenter les ressources immobilisées dans le cycle d’exploitation', 'is_correct' => true],
                            ['choice_text' => 'Parce que la croissance réduit toujours les stocks', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes sont toujours encaissées avant leur réalisation', 'is_correct' => false],
                            ['choice_text' => 'Parce que le fonds de roulement disparaît avec la croissance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un directeur financier peut-il chercher à étaler les échéances de dette ?', 'explanation' => 'L’étalement peut réduire les concentrations de besoins de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Pour limiter les pics de refinancement et de décaissement', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement le coût financier', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les obligations de remboursement', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir des flux opérationnels plus élevés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte dépendance à une seule banque peut-elle être un risque de financement ?', 'explanation' => 'Une modification des conditions ou une réduction du soutien de cette banque peut affecter fortement la liquidité.',
                        'choices' => [
                            ['choice_text' => 'Une dégradation de cette relation peut réduire fortement la flexibilité financière', 'is_correct' => true],
                            ['choice_text' => 'Une seule banque garantit toujours les meilleures conditions', 'is_correct' => false],
                            ['choice_text' => 'La diversification des sources n’a jamais d’intérêt', 'is_correct' => false],
                            ['choice_text' => 'Les banques ne peuvent jamais modifier leurs conditions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif doit guider la gestion professionnelle de la trésorerie ?', 'explanation' => 'Il faut assurer la continuité financière tout en évitant des ressources excessivement inutilisées.',
                        'choices' => [
                            ['choice_text' => 'Garantir la liquidité nécessaire tout en utilisant efficacement les ressources disponibles', 'is_correct' => true],
                            ['choice_text' => 'Maximiser la trésorerie inutilisée', 'is_correct' => false],
                            ['choice_text' => 'Réduire la trésorerie au minimum absolu', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute dette quelle que soit la situation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Contrôle interne et prévention des anomalies',
                'description' => 'Analysez les risques, contrôles et responsabilités dans les processus comptables.',
                'questions' => [
                    [
                        'question' => 'Pourquoi la même personne ne devrait-elle idéalement pas créer un fournisseur et valider le paiement correspondant ?', 'explanation' => 'Le cumul de ces fonctions augmente le risque d’erreur ou de fraude non détectée.',
                        'choices' => [
                            ['choice_text' => 'Parce que la séparation des tâches réduit le risque de création et de paiement d’opérations irrégulières', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une personne ne peut jamais gérer plusieurs tâches', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les paiements sont frauduleux', 'is_correct' => false],
                            ['choice_text' => 'Parce que les fournisseurs ne doivent jamais être enregistrés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un contrôle automatisé doit-il néanmoins être testé périodiquement ?', 'explanation' => 'Un contrôle automatisé peut devenir inefficace si la configuration, les données ou l’environnement évoluent.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que sa logique et sa configuration continuent de fonctionner comme prévu', 'is_correct' => true],
                            ['choice_text' => 'Parce que les contrôles automatisés sont toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer tous les automatismes', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute évolution du système', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les accès privilégiés au système comptable doivent-ils être limités ?', 'explanation' => 'Ils permettent potentiellement de modifier des données sensibles ou des paramètres critiques.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire le risque de modification non autorisée des données ou paramètres sensibles', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher tous les utilisateurs de travailler', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement la sécurité physique', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les opérations inhabituelles de fin de période sont-elles souvent soumises à une revue renforcée ?', 'explanation' => 'Elles peuvent avoir un impact significatif et présenter un risque plus élevé de mauvaise classification ou de manipulation.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles peuvent avoir un impact significatif et un risque de mauvaise classification', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles sont toujours frauduleuses', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles n’ont jamais de justification', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles n’affectent pas les comptes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une piste d’audit complète est-elle importante dans un système comptable ?', 'explanation' => 'Elle permet de reconstituer les opérations et les modifications effectuées.',
                        'choices' => [
                            ['choice_text' => 'Pour retracer les opérations, les modifications et les responsabilités', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les anciennes données', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les contrôles', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir qu’aucune erreur ne peut exister', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un contrôle doit-il être lié à un risque identifié ?', 'explanation' => 'Un contrôle est utile lorsqu’il réduit un risque concret et pertinent.',
                        'choices' => [
                            ['choice_text' => 'Pour s’assurer que les ressources de contrôle répondent à des risques réels et significatifs', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre tous les contrôles identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour maximiser le nombre de contrôles', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les procédures simples', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les rapprochements intersociétés doivent-ils être résolus avant la consolidation ?', 'explanation' => 'Des écarts entre entités peuvent produire des incohérences dans les comptes consolidés.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer la cohérence des soldes réciproques avant leur combinaison', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les revenus consolidés', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les transactions intersociétés', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter tout contrôle de groupe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter la résolution d’une anomalie importante ?', 'explanation' => 'La documentation permet de montrer la cause, l’impact, les actions prises et la validation.',
                        'choices' => [
                            ['choice_text' => 'Pour conserver la preuve de la cause, de l’analyse et de la correction effectuée', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute analyse future', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l’anomalie de l’historique', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter artificiellement le résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contrôles de rapprochement doivent-ils avoir une fréquence adaptée au risque ?', 'explanation' => 'Les comptes et processus très sensibles nécessitent généralement une surveillance plus fréquente.',
                        'choices' => [
                            ['choice_text' => 'Pour concentrer la surveillance sur les processus où une anomalie rapide aurait un impact important', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les comptes doivent être contrôlés à la même fréquence', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire systématiquement les contrôles', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les contrôles des comptes sensibles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe caractérise un système de contrôle interne comptable mature ?', 'explanation' => 'Il combine prévention, détection, responsabilités, traçabilité et amélioration continue.',
                        'choices' => [
                            ['choice_text' => 'Une combinaison de prévention, détection, responsabilité, traçabilité et amélioration continue', 'is_correct' => true],
                            ['choice_text' => 'La dépendance exclusive à un seul contrôle', 'is_correct' => false],
                            ['choice_text' => 'L’absence de séparation des tâches', 'is_correct' => false],
                            ['choice_text' => 'La suppression de toute revue humaine', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Analyse des anomalies et signaux d’alerte',
                'description' => 'Identifiez les signaux comptables nécessitant une investigation professionnelle.',
                'questions' => [
                    [
                        'question' => 'Une marge brute augmente fortement alors que les prix et volumes sont stables. Quelle première démarche est appropriée ?',
                        'explanation' => 'Une variation inhabituelle peut provenir d’une modification des coûts, d’une erreur de classement ou d’un problème de données.',
                        'choices' => [
                            ['choice_text' => 'Vérifier les coûts enregistrés, le classement des charges et la qualité des données', 'is_correct' => true],
                            ['choice_text' => 'Conclure immédiatement à une amélioration opérationnelle', 'is_correct' => false],
                            ['choice_text' => 'Réduire les prix de vente', 'is_correct' => false],
                            ['choice_text' => 'Ignorer l’évolution car la marge est positive', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise présente une baisse inhabituelle des dépenses fournisseurs au dernier mois de l’exercice. Quelle hypothèse doit être examinée ?',
                        'explanation' => 'Une baisse peut résulter d’un décalage de facturation ou d’un problème d’exhaustivité.',
                        'choices' => [
                            ['choice_text' => 'La possibilité de charges non enregistrées ou reportées à la période suivante', 'is_correct' => true],
                            ['choice_text' => 'Une disparition automatique des coûts', 'is_correct' => false],
                            ['choice_text' => 'Une hausse garantie de la marge', 'is_correct' => false],
                            ['choice_text' => 'Une réduction certaine des achats futurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du résultat juste avant la clôture peut-elle nécessiter une analyse renforcée ?', 'explanation' => 'Elle peut être parfaitement légitime mais également résulter d’écritures inhabituelles ou de problèmes de rattachement.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il faut distinguer une évolution économique réelle d’écritures de fin de période inhabituelles', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute hausse de résultat est frauduleuse', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un résultat élevé doit toujours être corrigé à la baisse', 'is_correct' => false],
                            ['choice_text' => 'Parce que la clôture n’a aucun effet sur les comptes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse inhabituelle des créances peut-elle aussi être un signal à examiner ?', 'explanation' => 'Elle peut être positive si les encaissements progressent, mais peut aussi provenir d’un reclassement ou d’une radiation inhabituelle.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer si elle provient de meilleurs encaissements ou d’un autre traitement comptable', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une baisse des créances est toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes doivent automatiquement baisser', 'is_correct' => false],
                            ['choice_text' => 'Parce que les créances doivent rester constantes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise enregistre plusieurs écritures manuelles de montants ronds juste avant la clôture. Quelle réponse professionnelle est appropriée ?', 'explanation' => 'Ce profil mérite une revue de justification, d’auteur, de compte, de date et d’impact.',
                        'choices' => [
                            ['choice_text' => 'Effectuer une revue ciblée de la justification, du timing et de l’impact de ces écritures', 'is_correct' => true],
                            ['choice_text' => 'Les considérer automatiquement comme frauduleuses', 'is_correct' => false],
                            ['choice_text' => 'Les ignorer si elles équilibrent la balance', 'is_correct' => false],
                            ['choice_text' => 'Les supprimer sans analyse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une augmentation soudaine du nombre d’avoirs clients mérite-t-elle une analyse ?', 'explanation' => 'Elle peut refléter des retours, erreurs de facturation, remises exceptionnelles ou problèmes commerciaux.',
                        'choices' => [
                            ['choice_text' => 'Elle peut signaler des problèmes de facturation, retours, qualité ou politique commerciale', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours une hausse du chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit automatiquement le risque client', 'is_correct' => false],
                            ['choice_text' => 'Elle signifie toujours une erreur informatique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une différence importante entre budget et réel ne doit-elle pas être corrigée automatiquement dans le reporting ?', 'explanation' => 'L’écart peut être économiquement réel et doit d’abord être expliqué.',
                        'choices' => [
                            ['choice_text' => 'Il faut comprendre l’écart avant de décider s’il s’agit d’un problème de prévision ou de performance', 'is_correct' => true],
                            ['choice_text' => 'Tous les écarts doivent être supprimés', 'is_correct' => false],
                            ['choice_text' => 'Le budget est toujours plus exact que le réel', 'is_correct' => false],
                            ['choice_text' => 'Le réel doit toujours être aligné sur le budget', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des écritures de correction peut-elle révéler une faiblesse de processus ?', 'explanation' => 'De nombreuses corrections peuvent indiquer des erreurs récurrentes en amont.',
                        'choices' => [
                            ['choice_text' => 'Elle peut signaler que les contrôles ou processus en amont produisent trop d’erreurs', 'is_correct' => true],
                            ['choice_text' => 'Elle prouve toujours une fraude', 'is_correct' => false],
                            ['choice_text' => 'Elle améliore toujours la qualité des données', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a aucun lien avec les processus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une anomalie de faible montant peut-elle rester importante d’un point de vue professionnel ?', 'explanation' => 'La valeur monétaire n’est pas le seul critère : la nature et la fréquence peuvent révéler une faiblesse systémique.',
                        'choices' => [
                            ['choice_text' => 'Parce que sa nature ou sa répétition peut révéler une faiblesse systémique', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une petite anomalie est toujours significative financièrement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle doit toujours être corrigée à zéro', 'is_correct' => false],
                            ['choice_text' => 'Parce que les petits montants sont toujours frauduleux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur réflexe face à un signal comptable inhabituel ?', 'explanation' => 'L’analyse professionnelle commence par comprendre la cause avant de conclure ou de corriger.',
                        'choices' => [
                            ['choice_text' => 'Identifier la cause, obtenir les éléments probants, mesurer l’impact et documenter la conclusion', 'is_correct' => true],
                            ['choice_text' => 'Modifier immédiatement le compte', 'is_correct' => false],
                            ['choice_text' => 'Ignorer l’anomalie si le résultat reste positif', 'is_correct' => false],
                            ['choice_text' => 'Considérer toute anomalie comme une fraude', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Analyse professionnelle de la qualité du résultat',
                'description' => 'Évaluez la soutenabilité des bénéfices et la cohérence entre performance comptable et réalité économique.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un analyste professionnel examine-t-il les flux de trésorerie derrière le résultat net ?',
                        'explanation' => 'La trésorerie donne une autre perspective sur la capacité de l’activité à produire des ressources.',
                        'choices' => [
                            ['choice_text' => 'Pour apprécier la qualité et la conversion du résultat en ressources de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Parce que le résultat net est toujours incorrect', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer systématiquement le compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'Parce que les flux de trésorerie déterminent seuls les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise affiche plusieurs années de bénéfices mais consomme régulièrement de la trésorerie opérationnelle. Quelle question est centrale ?', 'explanation' => 'Une telle divergence nécessite une analyse approfondie de la qualité et de la conversion du résultat.',
                        'choices' => [
                            ['choice_text' => 'Pourquoi le résultat ne se transforme-t-il pas en trésorerie opérationnelle durablement ?', 'is_correct' => true],
                            ['choice_text' => 'Pourquoi les bénéfices doivent-ils être supprimés ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi les stocks n’ont aucune valeur ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi la société n’a plus besoin de financement ?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les revenus issus d’opérations inhabituelles doivent-ils être analysés séparément ?', 'explanation' => 'Ils peuvent améliorer temporairement les résultats sans représenter la performance habituelle.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils peuvent ne pas être représentatifs des revenus futurs récurrents', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute opération inhabituelle est incorrecte', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils doivent toujours être exclus des états financiers', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils sont nécessairement des passifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une amélioration de résultat obtenue principalement par réduction des dépenses de développement peut-elle nécessiter une analyse stratégique ?', 'explanation' => 'Une réduction de certaines dépenses peut améliorer le résultat à court terme mais affaiblir la croissance future.',
                        'choices' => [
                            ['choice_text' => 'Parce que des économies immédiates peuvent réduire les capacités futures de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute réduction de coûts est négative', 'is_correct' => false],
                            ['choice_text' => 'Parce que le résultat ne doit jamais augmenter', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dépenses de développement ne sont jamais pertinentes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une marge élevée n’est-elle pas suffisante pour conclure à une forte qualité des bénéfices ?', 'explanation' => 'La qualité dépend aussi de la récurrence, des flux et de la structure des résultats.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il faut aussi examiner la récurrence des bénéfices, les flux et les éléments exceptionnels', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une marge élevée est toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Parce que les marges n’ont aucun intérêt', 'is_correct' => false],
                            ['choice_text' => 'Parce que la rentabilité n’est jamais mesurable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les résultats d’une entreprise doivent-ils être comparés à ceux de sociétés comparables ?', 'explanation' => 'Le benchmark permet d’identifier les forces et faiblesses relatives.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer la performance relative dans un contexte économique comparable', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que toutes les entreprises auront les mêmes résultats', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les particularités du modèle économique', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter l’analyse interne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les changements de politique commerciale peuvent-ils modifier la qualité du résultat ?', 'explanation' => 'Ils peuvent affecter les prix, remises, délais clients et niveau de risque.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent modifier simultanément marges, créances, volumes et risque client', 'is_correct' => true],
                            ['choice_text' => 'Ils affectent uniquement les stocks', 'is_correct' => false],
                            ['choice_text' => 'Ils n’ont jamais d’impact comptable ou financier', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent une hausse du bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle afficher une marge stable mais une rentabilité des capitaux propres très différente d’une année à l’autre ?', 'explanation' => 'La structure financière, les capitaux propres et le levier peuvent varier.',
                        'choices' => [
                            ['choice_text' => 'Parce que la structure financière et le niveau des capitaux propres peuvent évoluer', 'is_correct' => true],
                            ['choice_text' => 'Parce que la marge détermine toujours seule le rendement des capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Parce que les capitaux propres ne changent jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’endettement n’a aucun effet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les bénéfices doivent-ils être évalués avec leur niveau de capital engagé ?', 'explanation' => 'Un bénéfice important peut être obtenu au prix d’un investissement de capital très important.',
                        'choices' => [
                            ['choice_text' => 'Pour apprécier l’efficacité économique des ressources mobilisées', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer l’analyse du bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir un résultat futur', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire automatiquement les actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle conclusion est la plus professionnelle lorsqu’un indicateur financier s’améliore fortement ?', 'explanation' => 'Il faut vérifier la cause, la durabilité, les éléments exceptionnels et les effets secondaires avant de conclure.',
                        'choices' => [
                            ['choice_text' => 'Identifier la cause, vérifier sa durabilité et examiner ses conséquences sur les autres indicateurs', 'is_correct' => true],
                            ['choice_text' => 'Conclure immédiatement à une amélioration durable', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les autres indicateurs', 'is_correct' => false],
                            ['choice_text' => 'Supposer automatiquement une amélioration de tous les résultats futurs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Cas professionnels intégrés',
                'description' => 'Résolvez des cas intégrant clôture, contrôle, trésorerie, créances, stocks et résultat.',
                'questions' => [
                    [
                        'question' => 'Une société connaît une croissance rapide, une hausse des créances et un déficit de trésorerie. La direction souhaite uniquement augmenter les ventes. Quelle recommandation comptable-financière est la plus pertinente ?',
                        'explanation' => 'Avant d’accélérer davantage les ventes, il faut vérifier que la croissance est soutenable en termes de fonds de roulement et de liquidité.',
                        'choices' => [
                            ['choice_text' => 'Analyser et maîtriser le cycle clients, le fonds de roulement et la capacité de financement de la croissance', 'is_correct' => true],
                            ['choice_text' => 'Accélérer les ventes sans modification', 'is_correct' => false],
                            ['choice_text' => 'Réduire la qualité des contrôles clients', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les créances tant que le chiffre d’affaires augmente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un stock très important avant la clôture et prévoit des ventes difficiles l’année suivante. Quel risque doit être évalué ?',
                        'explanation' => 'L’obsolescence ou la baisse de valeur des stocks peut nécessiter un ajustement comptable selon les règles applicables.',
                        'choices' => [
                            ['choice_text' => 'Le risque de perte de valeur et l’adéquation de la valorisation des stocks', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation automatique du bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des dettes fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Une hausse certaine des ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise souhaite reconnaître rapidement un revenu important alors que la prestation n’est pas encore substantiellement réalisée. Quel sujet comptable est en jeu ?',
                        'explanation' => 'La reconnaissance du revenu doit être appréciée selon les conditions applicables, notamment le transfert ou la réalisation des obligations concernées.',
                        'choices' => [
                            ['choice_text' => 'La correcte reconnaissance et le rattachement du revenu à la période', 'is_correct' => true],
                            ['choice_text' => 'La seule disponibilité de la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'La diminution automatique des actifs', 'is_correct' => false],
                            ['choice_text' => 'La création d’une dette fournisseur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une créance importante devient litigieuse après la clôture. Quelle analyse doit être menée ?', 'explanation' => 'Il faut déterminer si les circonstances existaient déjà à la date de clôture et quelle information elles apportent sur la recouvrabilité.',
                        'choices' => [
                            ['choice_text' => 'Évaluer si l’événement fournit des informations pertinentes sur la situation existant à la clôture', 'is_correct' => true],
                            ['choice_text' => 'Modifier automatiquement tous les comptes clients', 'is_correct' => false],
                            ['choice_text' => 'Ignorer l’événement puisqu’il est postérieur', 'is_correct' => false],
                            ['choice_text' => 'Annuler toutes les ventes du client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une filiale présente un solde intersociétés très différent de celui enregistré par sa contrepartie. Quelle priorité doit avoir l’équipe de consolidation ?', 'explanation' => 'Les écarts intersociétés doivent être analysés et résolus pour assurer la cohérence des comptes du groupe.',
                        'choices' => [
                            ['choice_text' => 'Identifier et résoudre les différences avant la finalisation de la consolidation', 'is_correct' => true],
                            ['choice_text' => 'Additionner les soldes sans correction', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le solde de la filiale sans analyse', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les différences sous prétexte qu’elles sont internes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise constate que plusieurs erreurs de facturation sont corrigées manuellement chaque mois. Quelle conclusion professionnelle est la plus utile ?', 'explanation' => 'La fréquence des corrections peut signaler un problème de processus plutôt qu’une simple série d’erreurs isolées.',
                        'choices' => [
                            ['choice_text' => 'Identifier la cause racine et renforcer le processus à l’origine des erreurs', 'is_correct' => true],
                            ['choice_text' => 'Continuer les corrections manuelles sans analyse', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les factures concernées', 'is_correct' => false],
                            ['choice_text' => 'Considérer que les contrôles fonctionnent parfaitement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise améliore son résultat en réduisant fortement ses provisions pour créances douteuses sans amélioration claire du portefeuille client. Quel sujet mérite un examen particulier ?', 'explanation' => 'La diminution des provisions doit être cohérente avec l’évolution réelle du risque de crédit.',
                        'choices' => [
                            ['choice_text' => 'La cohérence entre l’évolution du risque client et la diminution des provisions', 'is_correct' => true],
                            ['choice_text' => 'La hausse automatique de la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'La suppression du suivi des créances', 'is_correct' => false],
                            ['choice_text' => 'La transformation des créances en immobilisations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente sa dette pour financer un stock supplémentaire avant un lancement commercial. Quelle analyse intégrée est nécessaire ?', 'explanation' => 'Il faut évaluer le délai de rotation, les ventes attendues, le coût de financement et le risque d’invendus.',
                        'choices' => [
                            ['choice_text' => 'Évaluer demande attendue, rotation, risque d’obsolescence, trésorerie et coût du financement', 'is_correct' => true],
                            ['choice_text' => 'Augmenter la dette sans scénario', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les ventes attendues', 'is_correct' => false],
                            ['choice_text' => 'Considérer le stock comme une trésorerie disponible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise présente de bons ratios mais accumule des anomalies comptables non résolues. Quelle conclusion est la plus professionnelle ?', 'explanation' => 'Des anomalies non résolues peuvent remettre en cause la fiabilité des indicateurs eux-mêmes.',
                        'choices' => [
                            ['choice_text' => 'La fiabilité de l’information doit être renforcée avant de se fier pleinement aux indicateurs', 'is_correct' => true],
                            ['choice_text' => 'Les ratios suffisent à prouver que les comptes sont fiables', 'is_correct' => false],
                            ['choice_text' => 'Les anomalies sont sans importance si les bénéfices sont élevés', 'is_correct' => false],
                            ['choice_text' => 'Les ratios remplacent les contrôles comptables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider une décision comptable professionnelle lorsqu’une situation est complexe et incertaine ?', 'explanation' => 'Une bonne décision repose sur les règles applicables, les faits, la documentation, la cohérence et une analyse du risque.',
                        'choices' => [
                            ['choice_text' => 'Documenter les faits, appliquer les règles pertinentes, analyser les hypothèses et faire valider les jugements significatifs', 'is_correct' => true],
                            ['choice_text' => 'Choisir automatiquement le traitement qui maximise le résultat', 'is_correct' => false],
                            ['choice_text' => 'Choisir l’option la plus simple sans analyser les faits', 'is_correct' => false],
                            ['choice_text' => 'Reporter systématiquement la décision à l’exercice suivant', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Gouvernance, audit et préparation professionnelle',
                'description' => 'Évaluez les bonnes pratiques de préparation des comptes, de gouvernance et de collaboration avec l’audit.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un dossier de clôture bien documenté facilite-t-il le travail d’audit ?',
                        'explanation' => 'Une documentation structurée permet de retrouver rapidement les rapprochements, justificatifs et raisonnements.',
                        'choices' => [
                            ['choice_text' => 'Il permet de démontrer rapidement l’origine des soldes et les contrôles réalisés', 'is_correct' => true],
                            ['choice_text' => 'Il remplace les comptes annuels', 'is_correct' => false],
                            ['choice_text' => 'Il empêche l’auditeur de demander des informations', 'is_correct' => false],
                            ['choice_text' => 'Il garantit automatiquement une opinion sans réserve', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les comptes à risque élevé doivent-ils être identifiés avant la clôture finale ?', 'explanation' => 'Cela permet de consacrer les ressources de revue aux domaines susceptibles d’avoir le plus d’impact.',
                        'choices' => [
                            ['choice_text' => 'Pour concentrer l’analyse et les contrôles sur les zones les plus significatives', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute revue des autres comptes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les comptes complexes', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir automatiquement leur exactitude', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la communication entre comptabilité, contrôle interne et finance est-elle importante pendant la clôture ?', 'explanation' => 'Les différents acteurs disposent d’informations complémentaires qui peuvent améliorer l’identification des risques et anomalies.',
                        'choices' => [
                            ['choice_text' => 'Pour partager les informations pertinentes et coordonner la résolution des problèmes', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les responsabilités individuelles', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute documentation', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les contrôles croisés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les demandes de l’auditeur doivent-elles être traitées avec une documentation cohérente ?', 'explanation' => 'Une réponse traçable permet de démontrer le raisonnement et les éléments probants disponibles.',
                        'choices' => [
                            ['choice_text' => 'Pour fournir une réponse cohérente, traçable et appuyée par des éléments probants', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les demandes complémentaires', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier les comptes sans justification', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer tous les contrôles internes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une conclusion comptable importante doit-elle reposer sur les faits et non uniquement sur le résultat recherché ?', 'explanation' => 'La comptabilité professionnelle doit rester neutre et fondée sur la réalité économique et les règles applicables.',
                        'choices' => [
                            ['choice_text' => 'Pour préserver la fiabilité et l’intégrité de l’information financière', 'is_correct' => true],
                            ['choice_text' => 'Parce que le résultat n’a jamais d’importance', 'is_correct' => false],
                            ['choice_text' => 'Pour maximiser automatiquement les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute estimation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contrôles clés doivent-ils être documentés de manière reproductible ?', 'explanation' => 'La reproductibilité permet à une autre personne de comprendre et de vérifier le contrôle.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre une revue cohérente et vérifier que le contrôle fonctionne réellement', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher tout changement de processus', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les procédures plus complexes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l’automatisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle conserver des preuves suffisantes de ses jugements comptables significatifs ?', 'explanation' => 'Les jugements significatifs peuvent être contestés ou réévalués et doivent donc être justifiables.',
                        'choices' => [
                            ['choice_text' => 'Pour démontrer le raisonnement, les données utilisées et les hypothèses retenues', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute modification ultérieure', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une décision favorable', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l’intervention de l’audit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une faiblesse de contrôle détectée doit-elle faire l’objet d’un suivi jusqu’à sa résolution ?', 'explanation' => 'Sans suivi, la même faiblesse peut continuer à produire des anomalies.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que la cause est traitée et que le risque est effectivement réduit', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute amélioration du processus', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l’historique de l’anomalie', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que les erreurs ne se reproduiront jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les responsabilités doivent-elles être clairement définies dans les processus comptables ?', 'explanation' => 'Une responsabilité claire facilite le contrôle, la résolution des écarts et la gouvernance.',
                        'choices' => [
                            ['choice_text' => 'Pour savoir qui prépare, contrôle, valide et corrige les opérations', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher la collaboration', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la supervision', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter la documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif caractérise une fonction comptable financière mature ?', 'explanation' => 'Elle doit produire une information fiable tout en intégrant contrôle, efficacité, traçabilité et compréhension des risques.',
                        'choices' => [
                            ['choice_text' => 'Produire une information fiable, contrôlée, traçable et utile aux décisions', 'is_correct' => true],
                            ['choice_text' => 'Minimiser uniquement le temps de clôture', 'is_correct' => false],
                            ['choice_text' => 'Maximiser uniquement le résultat', 'is_correct' => false],
                            ['choice_text' => 'Réduire tous les contrôles', 'is_correct' => false],
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
                    'duration' => 30,
                    'passing_score' => 70,
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Professional',
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