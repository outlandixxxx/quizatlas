<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class BehavioralEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'behavioral-economics')->firstOrFail();

        $quizDataList = [
            ['title' => 'Découvrir l’économie comportementale', 'description' => 'Notions fondamentales sur les décisions économiques et les limites de la rationalité.', 'duration' => 18, 'passing_score' => 50, 'questions' => [
                $this->q('Quel est l’objet principal de l’économie comportementale ?', 'Elle étudie comment les facteurs psychologiques et sociaux influencent les décisions économiques réelles.', 'L’influence de la psychologie sur les décisions économiques', ['La fixation administrative de tous les prix', 'L’étude exclusive des échanges internationaux', 'Le calcul des impôts des entreprises']),
                $this->q('Une personne compare plusieurs offres avant d’acheter. Quel comportement décrit-elle ?', 'Examiner les options et leurs conséquences correspond à une décision réfléchie.', 'Une décision réfléchie', ['Un achat impulsif', 'Une décision fondée uniquement sur l’habitude', 'Un effet d’ancrage automatique']),
                $this->q('Pourquoi parle-t-on de rationalité limitée ?', 'Les individus décident avec des informations, du temps et des capacités de traitement limités.', 'Les informations et capacités de décision sont limitées', ['Les consommateurs ignorent toujours les prix', 'Les entreprises ne font jamais de calcul', 'Les choix sont toujours aléatoires']),
                $this->q('Choisir une option suffisamment bonne plutôt que chercher indéfiniment la meilleure illustre…', 'Une solution satisfaisante peut être privilégiée lorsque le temps ou l’information manque.', 'La recherche d’une solution satisfaisante', ['La concurrence parfaite', 'La discrimination par les prix', 'La spécialisation internationale']),
                $this->q('Quel élément peut influencer un choix sans modifier les options disponibles ?', 'La manière de présenter une option peut modifier sa perception : c’est le cadrage.', 'La formulation de l’information', ['La quantité physique du produit', 'Le nombre réel de fournisseurs', 'Le coût de transport effectivement payé']),
                $this->q('En économie comportementale, une heuristique est…', 'Une heuristique est une règle mentale simple qui aide à décider rapidement, mais peut parfois induire en erreur.', 'Un raccourci mental pour juger ou choisir', ['Une taxe sur les importations', 'Une méthode de calcul du PIB', 'Une forme de contrat de travail']),
                $this->q('Quel exemple correspond à une préférence sociale ?', 'Une préférence sociale tient compte du bien-être ou du traitement d’autrui.', 'Donner une partie de son revenu à une association', ['Choisir toujours le produit le moins cher', 'Épargner uniquement pour soi', 'Comparer deux taux d’intérêt']),
                $this->q('L’économie comportementale nuance surtout l’idée que les individus…', 'Les décisions ne sont pas toujours parfaitement calculées et cohérentes.', 'calculent parfaitement toutes les conséquences', ['réagissent parfois aux prix', 'ont des besoins', 'font des choix']),
                $this->q('Une personne choisit souvent la même marque parce qu’elle la connaît. Quel facteur intervient ?', 'La familiarité et l’habitude peuvent simplifier le choix et influencer la préférence.', 'L’habitude et la familiarité', ['Une hausse du salaire minimum', 'Une baisse des droits de douane', 'Une externalité de production']),
                $this->q('Quel énoncé décrit le mieux une décision économique réelle ?', 'Les choix dépendent des incitations, mais aussi du contexte et des limites cognitives.', 'Elle dépend des incitations et peut être influencée par le contexte', ['Elle dépend uniquement du revenu', 'Elle est identique pour tous', 'Elle ne dépend jamais de la présentation']),
            ]],
            ['title' => 'Heuristiques et biais de jugement', 'description' => 'Reconnaître les raccourcis mentaux et les biais fréquents dans les choix économiques.', 'duration' => 20, 'passing_score' => 55, 'questions' => [
                $this->q('Un vendeur affiche un prix élevé puis un prix réduit. Le premier influence l’évaluation du second : c’est…', 'L’ancrage consiste à s’appuyer fortement sur une première valeur présentée.', 'l’effet d’ancrage', ['l’aversion au risque', 'l’effet de dotation', 'la préférence pour le présent']),
                $this->q('Après plusieurs nouvelles sur des accidents d’avion, une personne surestime leur fréquence. Quel biais peut l’expliquer ?', 'La disponibilité conduit à juger un événement plus probable lorsqu’un exemple vient facilement à l’esprit.', 'L’heuristique de disponibilité', ['L’effet de cadrage', 'La comptabilité mentale', 'L’effet de réseau']),
                $this->q('Un investisseur ne retient que les informations confirmant son opinion initiale. Il manifeste…', 'Le biais de confirmation favorise les éléments compatibles avec une croyance déjà adoptée.', 'un biais de confirmation', ['une préférence sociale', 'une aversion aux pertes', 'un coût irrécupérable']),
                $this->q('Une personne pense qu’un entrepreneur réussira parce qu’il ressemble à son image type de l’entrepreneur. Cela illustre…', 'La représentativité consiste à juger par ressemblance avec un prototype, parfois en négligeant les probabilités.', 'l’heuristique de représentativité', ['la diversification', 'la liquidité', 'le taux d’actualisation']),
                $this->q('Une personne garde un abonnement inutilisé parce qu’elle a déjà payé plusieurs mois. Quel biais intervient ?', 'Les dépenses passées non récupérables ne devraient pas déterminer seules une décision future.', 'Le biais des coûts irrécupérables', ['Le biais d’ancrage', 'La préférence pour l’équité', 'Le cadrage positif']),
                $this->q('Pourquoi une heuristique peut-elle être utile ?', 'Les raccourcis mentaux réduisent l’effort de décision et peuvent fonctionner dans des situations familières.', 'Elle permet de décider rapidement avec peu d’effort', ['Elle garantit toujours une décision optimale', 'Elle supprime toute incertitude', 'Elle rend les prix inutiles']),
                $this->q('Une personne attribue ses succès à son talent et ses échecs à la malchance. Quel biais est évoqué ?', 'Le biais d’auto-complaisance explique les succès par soi-même et les échecs par des facteurs externes.', 'Le biais d’auto-complaisance', ['L’effet de dotation', 'L’aversion au risque', 'Le biais du statu quo']),
                $this->q('Quel comportement correspond au biais du statu quo ?', 'Le statu quo est la tendance à conserver la situation actuelle même si une autre option pourrait convenir.', 'Garder son forfait par défaut sans comparer les offres', ['Changer de fournisseur chaque mois', 'Choisir toujours le prix le plus élevé', 'Refuser toute information chiffrée']),
                $this->q('Un consommateur juge un produit meilleur parce qu’il est présenté comme « le plus vendu ». Il peut être influencé par…', 'Le choix des autres peut servir de signal social, sans prouver que le produit convient à chacun.', 'la preuve sociale', ['le coût marginal', 'la balance commerciale', 'la productivité du travail']),
                $this->q('Quel moyen peut aider à limiter un biais de jugement ?', 'Des données vérifiables et l’examen d’explications alternatives peuvent réduire certains biais.', 'Examiner des données variées et questionner sa première impression', ['Se fier uniquement à sa première impression', 'Éviter toute comparaison', 'Choisir toujours l’option familière']),
            ]],
            ['title' => 'Aversion aux pertes et choix risqués', 'description' => 'Comprendre les réactions aux gains, aux pertes et à l’incertitude.', 'duration' => 19, 'passing_score' => 50, 'questions' => [
                $this->q('L’aversion aux pertes signifie généralement que…', 'À montant comparable, une perte peut être ressentie plus fortement qu’un gain.', 'une perte pèse davantage qu’un gain équivalent', ['un gain est toujours ignoré', 'toute personne refuse tout risque', 'les prix baissent après chaque achat']),
                $this->q('Une personne refuse de vendre son objet à 200 DH alors qu’elle ne l’aurait pas acheté à ce prix. Quel phénomène peut intervenir ?', 'L’effet de dotation est la valeur supplémentaire attribuée à un bien parce qu’on le possède.', 'L’effet de dotation', ['L’effet de réseau', 'La sélection adverse', 'La concurrence monopolistique']),
                $this->q('Une loterie offre 50 % de chances de gagner 100 DH et 50 % de ne rien gagner. Quel est le gain monétaire espéré ?', 'Le calcul est 0,5 × 100 + 0,5 × 0, soit 50 DH.', '50 DH', ['25 DH', '100 DH', '200 DH']),
                $this->q('Pourquoi deux personnes peuvent-elles choisir différemment face au même risque ?', 'Les préférences, la situation personnelle et la perception du risque peuvent différer.', 'Leur perception du risque et leurs préférences peuvent différer', ['Le risque devient une certitude', 'Le revenu n’a jamais d’importance', 'Les probabilités changent selon leur opinion']),
                $this->q('Une personne préfère une somme certaine à une loterie de même gain espéré. Elle privilégie…', 'Une personne averse au risque peut préférer un résultat certain à un résultat incertain comparable.', 'la sécurité face au risque', ['la recherche systématique du risque', 'la consommation ostentatoire', 'l’effet de cadrage']),
                $this->q('Après une perte, une personne prend davantage de risques pour récupérer son argent. Cela peut traduire…', 'Certaines personnes deviennent plus enclines au risque lorsqu’elles cherchent à compenser une perte.', 'une prise de risque pour récupérer la perte', ['une préférence automatique pour l’épargne', 'une baisse mécanique des prix', 'une hausse certaine du rendement']),
                $this->q('Dans la théorie des perspectives, les résultats sont souvent évalués…', 'La théorie des perspectives décrit l’évaluation par rapport à un point de référence.', 'par rapport à un point de référence', ['uniquement selon le PIB national', 'sans tenir compte des pertes', 'selon le prix de production seulement']),
                $this->q('Une assurance protège contre une dépense rare mais très coûteuse. Pour un ménage averse au risque, elle peut…', 'L’assurance transfère une partie du risque contre une prime et peut réduire l’incertitude financière.', 'réduire l’incertitude financière liée à un événement coûteux', ['garantir que l’événement n’arrivera jamais', 'supprimer toutes les dépenses courantes', 'augmenter nécessairement le revenu réel']),
                $this->q('Quel énoncé distingue correctement risque et certitude ?', 'Une situation risquée comporte plusieurs résultats possibles ; une situation certaine a un résultat connu.', 'Le risque comporte plusieurs résultats possibles, contrairement à la certitude', ['Le risque signifie toujours une perte', 'La certitude implique un rendement élevé', 'Les deux notions sont identiques']),
                $this->q('Pourquoi « 90 % de réussite » peut-il sembler plus rassurant que « 10 % d’échec » ?', 'Les formulations décrivent la même probabilité, mais leur cadrage peut influencer la perception.', 'Le cadrage positif peut rendre le résultat plus favorable à l’esprit', ['Les probabilités sont différentes', 'La première formulation garantit le résultat', 'La seconde augmente le prix']),
            ]],
            ['title' => 'Préférences dans le temps et consommation', 'description' => 'Explorer la préférence pour le présent, la procrastination et la comptabilité mentale.', 'duration' => 21, 'passing_score' => 55, 'questions' => [
                $this->q('La préférence pour le présent conduit souvent à…', 'Elle donne un poids important aux bénéfices immédiats par rapport aux bénéfices futurs.', 'privilégier une satisfaction immédiate', ['accorder toujours plus de valeur au futur', 'refuser toute consommation', 'ignorer systématiquement les promotions']),
                $this->q('Une personne prévoit d’épargner le mois prochain mais reporte encore son effort. Cela illustre…', 'La procrastination consiste à repousser une action prévue malgré son utilité reconnue.', 'la procrastination', ['la diversification', 'l’effet de dotation', 'la concurrence imparfaite']),
                $this->q('Quel exemple illustre la comptabilité mentale ?', 'La comptabilité mentale répartit mentalement l’argent en catégories alors que l’argent reste fongible.', 'Réserver une prime aux loisirs tout en empruntant pour les dépenses courantes', ['Comparer le coût de deux fournisseurs', 'Calculer le taux d’inflation', 'Choisir un emploi selon ses compétences']),
                $this->q('Pourquoi l’argent reçu comme cadeau peut-il être dépensé différemment du salaire ?', 'Les personnes peuvent attribuer des usages différents à des sommes selon leur origine.', 'Son origine peut créer une catégorie mentale particulière', ['Le cadeau n’a aucune valeur économique', 'Le salaire ne peut jamais être dépensé', 'Les prix changent selon l’origine']),
                $this->q('Un prélèvement automatique transfère chaque mois une somme vers l’épargne. Il aide surtout en…', 'L’automatisation réduit l’effort nécessaire et le risque de reporter la décision.', 'facilitant une habitude d’épargne régulière', ['rendant l’épargne sans coût', 'garantissant un rendement élevé', 'supprimant l’inflation']),
                $this->q('Une personne achète un dessert après avoir dépassé son budget « sorties ». Quel concept peut expliquer ce choix ?', 'Les budgets mentaux séparés peuvent faire perdre de vue la situation financière globale.', 'La séparation mentale des budgets', ['L’avantage comparatif', 'Le coût fixe', 'La politique monétaire']),
                $this->q('Choisir une petite récompense aujourd’hui plutôt qu’une plus importante dans un mois peut traduire…', 'La préférence pour le présent rend une récompense immédiate particulièrement attractive.', 'une préférence pour la récompense immédiate', ['une aversion à toute consommation', 'une baisse du pouvoir d’achat mesurée', 'une externalité positive']),
                $this->q('Quel outil peut aider à respecter un objectif d’épargne ?', 'Un engagement préalable, comme un virement automatique, facilite le suivi de l’objectif.', 'Mettre en place un virement automatique vers l’épargne', ['Attendre de voir ce qu’il reste', 'Ne pas définir d’objectif', 'Augmenter les achats impulsifs']),
                $this->q('Pourquoi les coûts futurs sont-ils parfois sous-estimés lors d’un achat à crédit ?', 'La mensualité attire l’attention et peut masquer le coût total sur la durée.', 'L’attention se concentre sur la mensualité plutôt que sur le coût total', ['Le crédit est toujours gratuit', 'Les intérêts n’existent pas', 'Le coût total ne dépend jamais de la durée']),
                $this->q('Quel choix aide à comparer correctement deux offres de crédit ?', 'Le coût total, les frais et la durée permettent de comparer les engagements.', 'Comparer le total à rembourser et les frais', ['Regarder seulement la première mensualité', 'Choisir la publicité la plus attractive', 'Ignorer la durée']),
            ]],
            ['title' => 'Cadrage, normes sociales et nudges', 'description' => 'Étudier les choix par défaut, les normes sociales et les incitations douces.', 'duration' => 22, 'passing_score' => 60, 'questions' => [
                $this->q('Un formulaire présélectionne l’option d’épargne mais permet de la modifier. Il s’agit…', 'L’option par défaut s’applique si la personne ne change rien, sans supprimer les alternatives.', 'd’un choix par défaut', ['d’une interdiction', 'd’une taxe indirecte', 'd’un monopole légal']),
                $this->q('Un nudge vise principalement à…', 'Un nudge modifie l’architecture du choix tout en préservant la liberté de choisir autrement.', 'orienter les décisions sans supprimer les options', ['interdire les choix jugés mauvais', 'imposer toujours une amende', 'fixer tous les salaires']),
                $this->q('Une campagne affirme que « la majorité des habitants économise l’eau ». Quel mécanisme mobilise-t-elle ?', 'Une norme descriptive informe sur ce que font les autres et peut encourager un comportement similaire.', 'Une norme sociale descriptive', ['Un coût irrécupérable', 'Une hausse du taux directeur', 'Une discrimination tarifaire']),
                $this->q('Pourquoi rendre une information importante plus visible peut-il aider ?', 'Une information claire et visible réduit l’effort nécessaire pour repérer les éléments utiles.', 'Cela facilite l’attention et la compréhension', ['Cela garantit le même choix pour tous', 'Cela élimine tous les risques', 'Cela rend les produits gratuits']),
                $this->q('Une facture compare la consommation d’électricité avec celle du mois précédent. Quel outil utilise-t-elle ?', 'Le retour d’information aide à prendre conscience de sa consommation et à l’ajuster.', 'Un retour d’information sur le comportement', ['Une hausse automatique du revenu', 'Une suppression de la demande', 'Une réduction certaine des prix']),
                $this->q('Quelle caractéristique distingue un nudge d’une interdiction ?', 'Un nudge conserve la possibilité de choisir autrement ; une interdiction retire une option.', 'Il laisse la liberté de ne pas suivre la suggestion', ['Il impose toujours une sanction', 'Il supprime toute information', 'Il interdit les alternatives']),
                $this->q('Un magasin place les fruits à hauteur des yeux près de l’entrée. Cela peut influencer les achats par…', 'La disposition attire l’attention et facilite certains choix sans obliger à acheter.', 'l’organisation de l’environnement de choix', ['une variation du taux d’intérêt', 'une hausse du salaire', 'une restriction des importations']),
                $this->q('Un message rappelle qu’éteindre les lumières réduit la facture et la consommation. Il combine…', 'Le rappel rend l’action saillante et associe le comportement à un bénéfice concret.', 'un rappel et une information sur les conséquences', ['une obligation d’achat', 'un tarif douanier', 'une fusion d’entreprises']),
                $this->q('Quel risque faut-il considérer lorsqu’on utilise des nudges ?', 'Les dispositifs doivent être transparents et respecter l’autonomie des personnes.', 'Orienter les choix de manière opaque ou contraire aux intérêts des personnes', ['Rendre toute décision impossible', 'Éliminer le besoin d’information', 'Garantir un résultat identique']),
                $this->q('Pourquoi les choix par défaut peuvent-ils avoir un effet important ?', 'Certaines personnes conservent l’option proposée car la modifier demande un effort supplémentaire.', 'Changer l’option demande parfois une démarche supplémentaire', ['Un défaut est toujours obligatoire', 'Les individus ne peuvent pas lire', 'Les autres options n’existent jamais']),
            ]],
        ];

        foreach ($quizDataList as $quizData) {
            $quiz = Quiz::updateOrCreate(
                ['subject_id' => $subject->id, 'title' => $quizData['title']],
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
                    ['quiz_id' => $quiz->id, 'order' => $index + 1],
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

    private function q(string $question, string $explanation, string $correct, array $incorrect): array
    {
        $choices = [['choice_text' => $correct, 'is_correct' => true]];
        foreach ($incorrect as $choice) {
            $choices[] = ['choice_text' => $choice, 'is_correct' => false];
        }
        return ['question' => $question, 'explanation' => $explanation, 'choices' => $choices];
    }
}
