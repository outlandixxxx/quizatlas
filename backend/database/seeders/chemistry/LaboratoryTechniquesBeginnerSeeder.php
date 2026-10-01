<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class LaboratoryTechniquesBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'laboratory-techniques')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 20, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 25, 'passing_score' => 65],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 25, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => "Sécurité et bonnes habitudes au laboratoire",
                'description' => "Reconnaître les comportements essentiels pour travailler proprement, prudemment et efficacement au laboratoire.",
                'questions' => [
                    ['question' => "Avant de commencer une manipulation, quel geste est le plus important ?", 'explanation' => "Lire le protocole permet de connaître les produits utilisés, les risques, le matériel nécessaire et l’ordre des étapes avant de commencer.", 'choices' => [
                        ['choice_text' => "Commencer immédiatement pour gagner du temps", 'is_correct' => false],
                        ['choice_text' => "Lire le protocole et identifier les consignes de sécurité", 'is_correct' => true],
                        ['choice_text' => "Choisir la verrerie la plus grande", 'is_correct' => false],
                        ['choice_text' => "Verser tous les réactifs sur la paillasse", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi porte-t-on des lunettes de protection lors de nombreuses manipulations ?", 'explanation' => "Les lunettes protègent les yeux contre les éclaboussures, les projections et certaines particules qui pourraient atteindre le visage.", 'choices' => [
                        ['choice_text' => "Pour mieux voir les couleurs des solutions", 'is_correct' => false],
                        ['choice_text' => "Pour protéger les yeux des projections", 'is_correct' => true],
                        ['choice_text' => "Pour éviter que les produits chauffent", 'is_correct' => false],
                        ['choice_text' => "Pour remplacer les gants", 'is_correct' => false],
                    ]],
                    ['question' => "Quelle attitude est correcte lorsqu’un flacon de réactif n’est pas identifié avec certitude ?", 'explanation' => "Un produit mal identifié ne doit pas être utilisé au hasard. Vérifier l’étiquette et demander une confirmation évite une réaction dangereuse ou une erreur expérimentale.", 'choices' => [
                        ['choice_text' => "Le sentir directement pour le reconnaître", 'is_correct' => false],
                        ['choice_text' => "Le mélanger avec de l’eau pour voir la réaction", 'is_correct' => false],
                        ['choice_text' => "Ne pas l’utiliser avant d’avoir identifié correctement le produit", 'is_correct' => true],
                        ['choice_text' => "Choisir le réactif qui ressemble le plus", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi évite-t-on de manger ou de boire dans un laboratoire de chimie ?", 'explanation' => "Des substances peuvent contaminer les mains, la vaisselle ou les surfaces. Manger ou boire crée un risque d’ingestion accidentelle.", 'choices' => [
                        ['choice_text' => "Parce que cela change toujours le pH du laboratoire", 'is_correct' => false],
                        ['choice_text' => "Parce qu’il existe un risque de contamination et d’ingestion", 'is_correct' => true],
                        ['choice_text' => "Parce que les aliments deviennent automatiquement froids", 'is_correct' => false],
                        ['choice_text' => "Parce que les balances ne fonctionnent plus", 'is_correct' => false],
                    ]],
                    ['question' => "Un liquide est renversé sur la paillasse. Que faut-il faire en premier ?", 'explanation' => "La bonne réponse dépend du produit, mais il faut d’abord sécuriser la situation et appliquer la procédure prévue, plutôt que nettoyer au hasard.", 'choices' => [
                        ['choice_text' => "Le toucher avec la main pour savoir ce que c’est", 'is_correct' => false],
                        ['choice_text' => "Suivre la procédure de sécurité adaptée au produit renversé", 'is_correct' => true],
                        ['choice_text' => "Souffler dessus pour le faire sécher", 'is_correct' => false],
                        ['choice_text' => "Cacher la zone avec un cahier", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi faut-il garder la paillasse propre pendant une manipulation ?", 'explanation' => "Une paillasse propre limite les contaminations, réduit les risques de confusion et permet de travailler plus facilement avec le matériel nécessaire.", 'choices' => [
                        ['choice_text' => "Uniquement pour que le laboratoire soit plus joli", 'is_correct' => false],
                        ['choice_text' => "Pour limiter les contaminations et les erreurs", 'is_correct' => true],
                        ['choice_text' => "Pour augmenter automatiquement la température", 'is_correct' => false],
                        ['choice_text' => "Pour rendre les solutions plus concentrées", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi ne doit-on pas pipeter une solution à la bouche ?", 'explanation' => "La solution pourrait être avalée ou entrer en contact avec la bouche. Une propipette ou un système de pipetage adapté est utilisé à la place.", 'choices' => [
                        ['choice_text' => "Parce que le verre devient trop lourd", 'is_correct' => false],
                        ['choice_text' => "Parce qu’il existe un risque d’exposition ou d’ingestion", 'is_correct' => true],
                        ['choice_text' => "Parce que cela change la couleur de la solution", 'is_correct' => false],
                        ['choice_text' => "Parce qu’une pipette ne peut pas contenir de liquide", 'is_correct' => false],
                    ]],
                    ['question' => "Quel comportement limite le mieux les erreurs de traçabilité ?", 'explanation' => "Noter les résultats, les unités et les observations au moment où ils sont obtenus évite les oublis et les confusions.", 'choices' => [
                        ['choice_text' => "Mémoriser toutes les valeurs jusqu’à la fin", 'is_correct' => false],
                        ['choice_text' => "Noter immédiatement les mesures et observations importantes", 'is_correct' => true],
                        ['choice_text' => "Arrondir toutes les valeurs au hasard", 'is_correct' => false],
                        ['choice_text' => "Changer les unités sans les écrire", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi les cheveux longs sont-ils généralement attachés pendant une manipulation ?", 'explanation' => "Attacher les cheveux réduit le risque qu’ils touchent une flamme, un produit chimique ou du matériel en mouvement.", 'choices' => [
                        ['choice_text' => "Pour rendre la manipulation plus rapide", 'is_correct' => false],
                        ['choice_text' => "Pour réduire les risques de contact avec le matériel ou les produits", 'is_correct' => true],
                        ['choice_text' => "Pour améliorer la précision d’une balance", 'is_correct' => false],
                        ['choice_text' => "Pour empêcher l’évaporation de l’eau", 'is_correct' => false],
                    ]],
                    ['question' => "À la fin d’une séance, quelle action est particulièrement importante ?", 'explanation' => "Ranger, nettoyer et éliminer les déchets selon les règles prévues permet de laisser un poste de travail sûr pour la suite.", 'choices' => [
                        ['choice_text' => "Laisser les flacons ouverts", 'is_correct' => false],
                        ['choice_text' => "Ranger le poste et éliminer les déchets selon les consignes", 'is_correct' => true],
                        ['choice_text' => "Jeter tous les liquides dans le même évier", 'is_correct' => false],
                        ['choice_text' => "Emporter le matériel sans le nettoyer", 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => "Verrerie et mesures de volume",
                'description' => "Choisir la verrerie adaptée et lire correctement les volumes lors des manipulations courantes.",
                'questions' => [
                    ['question' => "Quel matériel est conçu pour mesurer un volume avec une bonne précision lors d’une préparation de solution ?", 'explanation' => "La fiole jaugée possède un trait de jauge précis et sert à préparer un volume final défini.", 'choices' => [
                        ['choice_text' => "Une fiole jaugée", 'is_correct' => true],
                        ['choice_text' => "Un bécher ordinaire", 'is_correct' => false],
                        ['choice_text' => "Une coupelle", 'is_correct' => false],
                        ['choice_text' => "Une spatule", 'is_correct' => false],
                    ]],
                    ['question' => "À quoi sert principalement une pipette jaugée ?", 'explanation' => "La pipette jaugée est calibrée pour prélever un volume précis, souvent utilisé pour préparer une solution ou réaliser une dilution.", 'choices' => [
                        ['choice_text' => "Chauffer une solution", 'is_correct' => false],
                        ['choice_text' => "Prélever un volume précis", 'is_correct' => true],
                        ['choice_text' => "Filtrer un précipité", 'is_correct' => false],
                        ['choice_text' => "Peser un solide", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi lit-on généralement le bas du ménisque pour une solution aqueuse colorless dans une verrerie graduée ?", 'explanation' => "La lecture du bas du ménisque réduit l’erreur de parallaxe et donne une référence cohérente pour les liquides aqueux usuels.", 'choices' => [
                        ['choice_text' => "Parce que le bas du ménisque donne la référence de volume", 'is_correct' => true],
                        ['choice_text' => "Parce que le haut du ménisque est toujours vide", 'is_correct' => false],
                        ['choice_text' => "Parce que le liquide n’occupe que le bas du tube", 'is_correct' => false],
                        ['choice_text' => "Parce que la verrerie ne contient pas de graduations", 'is_correct' => false],
                    ]],
                    ['question' => "Quelle verrerie est surtout pratique pour mélanger une solution sans rechercher une mesure de volume très précise ?", 'explanation' => "Le bécher convient bien pour mélanger, dissoudre ou transvaser. Ses graduations, lorsqu’elles existent, restent approximatives.", 'choices' => [
                        ['choice_text' => "Un bécher", 'is_correct' => true],
                        ['choice_text' => "Une pipette jaugée", 'is_correct' => false],
                        ['choice_text' => "Une fiole jaugée", 'is_correct' => false],
                        ['choice_text' => "Une burette utilisée sans robinet", 'is_correct' => false],
                    ]],
                    ['question' => "Une burette est particulièrement adaptée à quelle opération ?", 'explanation' => "La burette permet d’ajouter progressivement un volume connu de solution, ce qui est essentiel lors d’un titrage.", 'choices' => [
                        ['choice_text' => "Une filtration sous vide", 'is_correct' => false],
                        ['choice_text' => "Un titrage", 'is_correct' => true],
                        ['choice_text' => "Une pesée", 'is_correct' => false],
                        ['choice_text' => "Un séchage", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi faut-il regarder la graduation à hauteur des yeux ?", 'explanation' => "Cette position réduit l’erreur de parallaxe et permet d’aligner correctement les yeux, le ménisque et la graduation.", 'choices' => [
                        ['choice_text' => "Pour éviter une erreur de parallaxe", 'is_correct' => true],
                        ['choice_text' => "Pour augmenter le volume mesuré", 'is_correct' => false],
                        ['choice_text' => "Pour refroidir la verrerie", 'is_correct' => false],
                        ['choice_text' => "Pour rendre la solution plus homogène", 'is_correct' => false],
                    ]],
                    ['question' => "Une fiole jaugée porte la mention 100 mL. Que signifie ce volume ?", 'explanation' => "Le trait de jauge indique le volume auquel on doit amener la solution finale : 100 mL dans cet exemple.", 'choices' => [
                        ['choice_text' => "Le volume maximal approximatif de la fiole", 'is_correct' => false],
                        ['choice_text' => "Le volume correspondant au trait de jauge", 'is_correct' => true],
                        ['choice_text' => "La masse de la fiole", 'is_correct' => false],
                        ['choice_text' => "La masse d’eau qu’elle contient toujours", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi rincer une burette avec la solution qui sera utilisée avant le titrage ?", 'explanation' => "Cela évite qu’un reste d’eau ou d’une autre solution dilue le réactif et modifie sa concentration effective.", 'choices' => [
                        ['choice_text' => "Pour colorer la burette", 'is_correct' => false],
                        ['choice_text' => "Pour éviter une dilution ou une contamination par les résidus", 'is_correct' => true],
                        ['choice_text' => "Pour augmenter le volume disponible", 'is_correct' => false],
                        ['choice_text' => "Pour rendre le verre opaque", 'is_correct' => false],
                    ]],
                    ['question' => "Quelle erreur est probable si le ménisque est lu au-dessus de la ligne des yeux ?", 'explanation' => "Une lecture inclinée introduit une erreur de parallaxe. Le volume lu peut alors être différent du volume réellement mesuré.", 'choices' => [
                        ['choice_text' => "Une erreur de lecture du volume", 'is_correct' => true],
                        ['choice_text' => "Une augmentation de la masse molaire", 'is_correct' => false],
                        ['choice_text' => "Une modification de la constante d’équilibre", 'is_correct' => false],
                        ['choice_text' => "Une réaction nucléaire", 'is_correct' => false],
                    ]],
                    ['question' => "Pour transférer exactement 25,0 mL d’une solution dans une autre fiole, quel choix est le plus adapté ?", 'explanation' => "Une pipette jaugée de 25,0 mL est conçue pour délivrer un volume précis de ce type.", 'choices' => [
                        ['choice_text' => "Une pipette jaugée de 25,0 mL", 'is_correct' => true],
                        ['choice_text' => "Une spatule", 'is_correct' => false],
                        ['choice_text' => "Un verre de montre", 'is_correct' => false],
                        ['choice_text' => "Une coupelle d’évaporation", 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => "Pesée et utilisation des balances",
                'description' => "Effectuer des pesées simples et limiter les erreurs courantes liées aux balances et aux solides.",
                'questions' => [
                    ['question' => "Pourquoi tare-t-on une balance avant de mesurer la masse d’un solide placé dans une coupelle ?", 'explanation' => "La tare remet l’affichage à zéro avec la coupelle présente. La balance donne alors directement la masse du solide ajouté.", 'choices' => [
                        ['choice_text' => "Pour réchauffer le solide", 'is_correct' => false],
                        ['choice_text' => "Pour soustraire automatiquement la masse du récipient", 'is_correct' => true],
                        ['choice_text' => "Pour augmenter la précision de la verrerie", 'is_correct' => false],
                        ['choice_text' => "Pour changer l’unité en litres", 'is_correct' => false],
                    ]],
                    ['question' => "Une balance affiche 2,356 g. Si la résolution affichée est de 0,001 g, combien de chiffres après la virgule sont affichés ?", 'explanation' => "Le nombre 2,356 possède trois chiffres après la virgule, cohérents avec une résolution affichée au millième de gramme.", 'choices' => [
                        ['choice_text' => "1", 'is_correct' => false],
                        ['choice_text' => "2", 'is_correct' => false],
                        ['choice_text' => "3", 'is_correct' => true],
                        ['choice_text' => "4", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi évite-t-on de poser directement un solide humide sur une balance de précision ?", 'explanation' => "L’humidité peut contaminer la balance ou le support et la masse mesurée ne correspond pas à celle du solide sec attendu.", 'choices' => [
                        ['choice_text' => "Parce que l’humidité peut fausser la mesure et salir la balance", 'is_correct' => true],
                        ['choice_text' => "Parce que l’humidité rend la balance plus légère", 'is_correct' => false],
                        ['choice_text' => "Parce que tous les solides humides explosent", 'is_correct' => false],
                        ['choice_text' => "Parce que les chiffres disparaissent de l’écran", 'is_correct' => false],
                    ]],
                    ['question' => "Vous devez peser environ 0,500 g d’un solide. Pourquoi vaut-il mieux ajouter progressivement le solide ?", 'explanation' => "Ajouter petit à petit permet de s’arrêter près de la masse visée au lieu de dépasser fortement la quantité recherchée.", 'choices' => [
                        ['choice_text' => "Pour contrôler plus facilement la masse finale", 'is_correct' => true],
                        ['choice_text' => "Pour empêcher la balance de fonctionner", 'is_correct' => false],
                        ['choice_text' => "Pour changer la composition du solide", 'is_correct' => false],
                        ['choice_text' => "Pour rendre le solide liquide", 'is_correct' => false],
                    ]],
                    ['question' => "Quelle pratique est la plus correcte avec une balance de précision ?", 'explanation' => "Fermer les portes de la balance limite les effets des courants d’air et stabilise l’affichage.", 'choices' => [
                        ['choice_text' => "Laisser les portes grandes ouvertes", 'is_correct' => false],
                        ['choice_text' => "Attendre une lecture stable et limiter les courants d’air", 'is_correct' => true],
                        ['choice_text' => "Souffler sur le plateau avant la pesée", 'is_correct' => false],
                        ['choice_text' => "Déplacer la balance pendant la mesure", 'is_correct' => false],
                    ]],
                    ['question' => "Une coupelle vide pèse 12,40 g et la coupelle avec le solide pèse 15,85 g. Quelle est la masse du solide ?", 'explanation' => "Masse du solide = 15,85 − 12,40 = 3,45 g.", 'choices' => [
                        ['choice_text' => "2,45 g", 'is_correct' => false],
                        ['choice_text' => "3,45 g", 'is_correct' => true],
                        ['choice_text' => "4,45 g", 'is_correct' => false],
                        ['choice_text' => "28,25 g", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi ne faut-il généralement pas déposer un produit chimique directement sur le plateau de la balance ?", 'explanation' => "Un produit pourrait contaminer ou endommager le plateau. Un récipient propre permet aussi de récupérer plus facilement le solide.", 'choices' => [
                        ['choice_text' => "Pour éviter la contamination et protéger la balance", 'is_correct' => true],
                        ['choice_text' => "Parce que le plateau ne peut pas mesurer les grammes", 'is_correct' => false],
                        ['choice_text' => "Parce qu’une balance ne mesure que les liquides", 'is_correct' => false],
                        ['choice_text' => "Pour empêcher toute lecture de masse", 'is_correct' => false],
                    ]],
                    ['question' => "Une masse est lue plusieurs fois : 4,12 g ; 4,13 g ; 4,12 g. Que peut-on raisonnablement conclure ?", 'explanation' => "Les mesures sont très proches. Leur petite variation peut venir du fonctionnement normal de la balance et de l’incertitude de lecture.", 'choices' => [
                        ['choice_text' => "La balance donne des résultats très différents", 'is_correct' => false],
                        ['choice_text' => "Les mesures sont assez proches les unes des autres", 'is_correct' => true],
                        ['choice_text' => "Le solide change de masse à chaque seconde", 'is_correct' => false],
                        ['choice_text' => "Le résultat doit être ignoré", 'is_correct' => false],
                    ]],
                    ['question' => "Quel geste peut aider à éviter une erreur avant une pesée précise ?", 'explanation' => "Vérifier que la balance est propre, à zéro et correctement installée permet de réduire les erreurs évitables avant la mesure.", 'choices' => [
                        ['choice_text' => "Vérifier la propreté et le zéro de la balance", 'is_correct' => true],
                        ['choice_text' => "Ajouter une petite quantité inconnue sur le plateau", 'is_correct' => false],
                        ['choice_text' => "Changer l’unité au hasard", 'is_correct' => false],
                        ['choice_text' => "Débrancher la balance pendant la mesure", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi utilise-t-on parfois la pesée par différence pour distribuer un solide ?", 'explanation' => "En pesée par différence, on compare la masse avant et après le transfert. La différence correspond à la masse réellement délivrée.", 'choices' => [
                        ['choice_text' => "Parce qu’elle permet de déterminer la masse réellement transférée", 'is_correct' => true],
                        ['choice_text' => "Parce qu’elle remplace toujours une fiole jaugée", 'is_correct' => false],
                        ['choice_text' => "Parce qu’elle donne directement le volume", 'is_correct' => false],
                        ['choice_text' => "Parce qu’elle évite toute utilisation de balance", 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => "Préparation des solutions et dilutions",
                'description' => "Préparer une solution à partir d’un solide ou d’une solution mère et réaliser des dilutions simples.",
                'questions' => [
                    ['question' => "Lorsqu’on prépare une solution à partir d’un solide, pourquoi dissout-on d’abord le solide avant d’ajuster au volume final ?", 'explanation' => "Le solide doit être entièrement dissous avant l’ajustement. Sinon, le volume final et la concentration ne correspondent pas à la préparation recherchée.", 'choices' => [
                        ['choice_text' => "Pour être certain que tout le soluté est dissous avant l’ajustement du volume", 'is_correct' => true],
                        ['choice_text' => "Pour faire évaporer le solvant", 'is_correct' => false],
                        ['choice_text' => "Pour changer la masse du soluté", 'is_correct' => false],
                        ['choice_text' => "Pour supprimer la nécessité d’une fiole jaugée", 'is_correct' => false],
                    ]],
                    ['question' => "Une solution de concentration 2,0 mol/L est diluée dix fois. Quelle est la concentration finale ?", 'explanation' => "Une dilution par 10 divise la concentration par 10 : 2,0 / 10 = 0,20 mol/L.", 'choices' => [
                        ['choice_text' => "20 mol/L", 'is_correct' => false],
                        ['choice_text' => "2,0 mol/L", 'is_correct' => false],
                        ['choice_text' => "0,20 mol/L", 'is_correct' => true],
                        ['choice_text' => "0,02 mol/L", 'is_correct' => false],
                    ]],
                    ['question' => "Quelle relation simple est utilisée pour une dilution sans perte de soluté ?", 'explanation' => "Pour une dilution idéale, la quantité de soluté prélevée est conservée : C1V1 = C2V2.", 'choices' => [
                        ['choice_text' => "C1 + V1 = C2 + V2", 'is_correct' => false],
                        ['choice_text' => "C1V1 = C2V2", 'is_correct' => true],
                        ['choice_text' => "C1/V1 = C2V2", 'is_correct' => false],
                        ['choice_text' => "C1 − V1 = C2 − V2", 'is_correct' => false],
                    ]],
                    ['question' => "On veut préparer 100 mL d’une solution à 0,10 mol/L à partir d’une solution mère à 1,0 mol/L. Quel volume de solution mère faut-il prélever ?", 'explanation' => "C1V1 = C2V2, donc V1 = (0,10 × 100)/1,0 = 10 mL. Il faut prélever 10 mL puis compléter à 100 mL.", 'choices' => [
                        ['choice_text' => "1 mL", 'is_correct' => false],
                        ['choice_text' => "10 mL", 'is_correct' => true],
                        ['choice_text' => "50 mL", 'is_correct' => false],
                        ['choice_text' => "90 mL", 'is_correct' => false],
                    ]],
                    ['question' => "Lors d’une dilution dans une fiole jaugée, avec quoi complète-t-on généralement jusqu’au trait de jauge ?", 'explanation' => "On ajoute le solvant approprié, souvent de l’eau distillée dans le cas d’une solution aqueuse, jusqu’au trait de jauge.", 'choices' => [
                        ['choice_text' => "Avec du réactif concentré supplémentaire", 'is_correct' => false],
                        ['choice_text' => "Avec le solvant approprié", 'is_correct' => true],
                        ['choice_text' => "Avec de l’air", 'is_correct' => false],
                        ['choice_text' => "Avec un solide sec", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi faut-il homogénéiser une solution après l’avoir préparée ?", 'explanation' => "L’homogénéisation répartit uniformément le soluté dans toute la solution, de sorte qu’un prélèvement ait une composition représentative.", 'choices' => [
                        ['choice_text' => "Pour répartir uniformément le soluté", 'is_correct' => true],
                        ['choice_text' => "Pour augmenter automatiquement la concentration", 'is_correct' => false],
                        ['choice_text' => "Pour changer la formule chimique du solvant", 'is_correct' => false],
                        ['choice_text' => "Pour faire disparaître le volume", 'is_correct' => false],
                    ]],
                    ['question' => "Une solution mère est dix fois plus concentrée que la solution fille recherchée. Quel facteur de dilution faut-il réaliser ?", 'explanation' => "Si la concentration doit être divisée par 10, le facteur de dilution est 10.", 'choices' => [
                        ['choice_text' => "2", 'is_correct' => false],
                        ['choice_text' => "5", 'is_correct' => false],
                        ['choice_text' => "10", 'is_correct' => true],
                        ['choice_text' => "100", 'is_correct' => false],
                    ]],
                    ['question' => "Après avoir atteint presque le trait de jauge, pourquoi ajoute-t-on le solvant très progressivement ?", 'explanation' => "Un ajout trop rapide peut faire dépasser le trait. À ce stade, quelques gouttes suffisent et permettent un ajustement précis.", 'choices' => [
                        ['choice_text' => "Pour éviter de dépasser le volume demandé", 'is_correct' => true],
                        ['choice_text' => "Pour chauffer la solution", 'is_correct' => false],
                        ['choice_text' => "Pour augmenter la masse du soluté", 'is_correct' => false],
                        ['choice_text' => "Pour provoquer une précipitation", 'is_correct' => false],
                    ]],
                    ['question' => "Une personne met directement 50 mL de solvant dans une fiole prévue pour 100 mL, puis ajoute le soluté. Pourquoi cette méthode peut-elle être mauvaise pour une préparation précise ?", 'explanation' => "La quantité finale de solvant ne doit pas être estimée au hasard : il faut dissoudre puis ajuster précisément le volume final au trait de jauge.", 'choices' => [
                        ['choice_text' => "Parce que le volume final doit être ajusté précisément après dissolution", 'is_correct' => true],
                        ['choice_text' => "Parce qu’une fiole jaugée ne contient jamais de liquide", 'is_correct' => false],
                        ['choice_text' => "Parce qu’un solvant ne peut pas dissoudre un solide", 'is_correct' => false],
                        ['choice_text' => "Parce que la concentration ne dépend jamais du volume", 'is_correct' => false],
                    ]],
                    ['question' => "Pour préparer une dilution, pourquoi le volume prélevé est-il mesuré avec une pipette plutôt qu’avec un bécher gradué ?", 'explanation' => "La pipette est conçue pour délivrer un volume précis, alors que les graduations d’un bécher sont généralement moins adaptées à une mesure précise.", 'choices' => [
                        ['choice_text' => "Parce que la pipette permet un prélèvement plus précis", 'is_correct' => true],
                        ['choice_text' => "Parce qu’un bécher ne peut contenir aucun liquide", 'is_correct' => false],
                        ['choice_text' => "Parce qu’une pipette chauffe le soluté", 'is_correct' => false],
                        ['choice_text' => "Parce qu’un bécher mesure toujours une masse", 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => "Chauffage, agitation et transfert",
                'description' => "Maîtriser les gestes courants pour chauffer, mélanger et transférer des produits sans perdre la qualité de la manipulation.",
                'questions' => [
                    ['question' => "Pourquoi utilise-t-on parfois une agitation pendant la dissolution d’un solide ?", 'explanation' => "L’agitation renouvelle le contact entre le solide et le solvant et facilite généralement la dissolution.", 'choices' => [
                        ['choice_text' => "Pour favoriser le contact entre le soluté et le solvant", 'is_correct' => true],
                        ['choice_text' => "Pour diminuer toujours la masse du solide", 'is_correct' => false],
                        ['choice_text' => "Pour supprimer le besoin de mesurer le volume", 'is_correct' => false],
                        ['choice_text' => "Pour empêcher toute dissolution", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi chauffe-t-on parfois une solution au bain-marie plutôt qu’avec une flamme directe ?", 'explanation' => "Le bain-marie fournit un chauffage plus doux et plus uniforme et peut être préférable lorsqu’une flamme directe n’est pas adaptée.", 'choices' => [
                        ['choice_text' => "Pour obtenir un chauffage plus doux et contrôlé", 'is_correct' => true],
                        ['choice_text' => "Pour rendre la solution automatiquement solide", 'is_correct' => false],
                        ['choice_text' => "Pour supprimer le solvant sans évaporation", 'is_correct' => false],
                        ['choice_text' => "Pour augmenter la précision de la balance", 'is_correct' => false],
                    ]],
                    ['question' => "Lorsqu’on chauffe un tube à essai contenant un liquide, pourquoi évite-t-on de diriger l’ouverture vers soi ou vers quelqu’un ?", 'explanation' => "Le liquide peut bouillir brutalement et être projeté. Orienter l’ouverture loin des personnes réduit ce risque.", 'choices' => [
                        ['choice_text' => "Pour réduire le risque de projection vers une personne", 'is_correct' => true],
                        ['choice_text' => "Pour empêcher toute évaporation", 'is_correct' => false],
                        ['choice_text' => "Pour augmenter la concentration en oxygène", 'is_correct' => false],
                        ['choice_text' => "Pour refroidir le tube", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi faut-il parfois rincer les parois d’un récipient lors d’un transfert quantitatif ?", 'explanation' => "Des traces de solution peuvent rester sur les parois. Les rincer avec une petite quantité de solvant permet de transférer davantage de matière vers le récipient final.", 'choices' => [
                        ['choice_text' => "Pour récupérer les résidus de solution restés sur les parois", 'is_correct' => true],
                        ['choice_text' => "Pour réduire la masse de la solution", 'is_correct' => false],
                        ['choice_text' => "Pour empêcher tout mélange", 'is_correct' => false],
                        ['choice_text' => "Pour changer la nature du soluté", 'is_correct' => false],
                    ]],
                    ['question' => "Un agitateur magnétique sert principalement à…", 'explanation' => "L’agitateur magnétique permet de mélanger régulièrement une solution sans devoir agiter manuellement en continu.", 'choices' => [
                        ['choice_text' => "Peser une solution", 'is_correct' => false],
                        ['choice_text' => "Mélanger une solution de façon régulière", 'is_correct' => true],
                        ['choice_text' => "Mesurer directement le pH", 'is_correct' => false],
                        ['choice_text' => "Filtrer un solide", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi utilise-t-on parfois des billes anti-bouillonnement lors d’un chauffage ?", 'explanation' => "Elles fournissent des sites de nucléation et limitent les phénomènes de surchauffe et de bouillonnement retardé dans certaines situations.", 'choices' => [
                        ['choice_text' => "Pour favoriser une ébullition plus régulière", 'is_correct' => true],
                        ['choice_text' => "Pour augmenter la masse molaire", 'is_correct' => false],
                        ['choice_text' => "Pour rendre un liquide plus concentré sans évaporation", 'is_correct' => false],
                        ['choice_text' => "Pour mesurer la température", 'is_correct' => false],
                    ]],
                    ['question' => "Quel est l’intérêt d’utiliser un entonnoir lors d’un transvasement ?", 'explanation' => "L’entonnoir guide le liquide et réduit les risques de déversement, surtout lorsque l’ouverture du récipient récepteur est étroite.", 'choices' => [
                        ['choice_text' => "Guider le liquide et limiter les pertes", 'is_correct' => true],
                        ['choice_text' => "Modifier la concentration sans ajouter de solvant", 'is_correct' => false],
                        ['choice_text' => "Refroidir instantanément le liquide", 'is_correct' => false],
                        ['choice_text' => "Remplacer une balance", 'is_correct' => false],
                    ]],
                    ['question' => "Lorsqu’un solide est introduit dans une solution, pourquoi peut-il être utile de rincer le récipient de départ avec du solvant ?", 'explanation' => "Le rinçage permet de récupérer les petites quantités de solide ou de solution restées dans le récipient de départ.", 'choices' => [
                        ['choice_text' => "Pour limiter la perte de matière lors du transfert", 'is_correct' => true],
                        ['choice_text' => "Pour empêcher toute dissolution", 'is_correct' => false],
                        ['choice_text' => "Pour augmenter la température", 'is_correct' => false],
                        ['choice_text' => "Pour changer l’identité chimique du solide", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi laisse-t-on parfois refroidir une solution avant de compléter précisément au trait de jauge ?", 'explanation' => "Le volume et la densité d’une solution peuvent varier avec la température. Pour une préparation précise, on ajuste le volume à la température prévue par la méthode.", 'choices' => [
                        ['choice_text' => "Parce que la température peut influencer le volume mesuré", 'is_correct' => true],
                        ['choice_text' => "Parce qu’une solution chaude ne contient jamais de soluté", 'is_correct' => false],
                        ['choice_text' => "Pour faire disparaître les graduations", 'is_correct' => false],
                        ['choice_text' => "Pour rendre la balance plus légère", 'is_correct' => false],
                    ]],
                    ['question' => "Une solution vient d’être chauffée et doit être transvasée. Quelle précaution simple est raisonnable avant de manipuler la verrerie ?", 'explanation' => "La verrerie chaude peut provoquer une brûlure ou casser si elle est manipulée brusquement. Il faut utiliser les moyens de préhension adaptés et laisser refroidir si nécessaire.", 'choices' => [
                        ['choice_text' => "Vérifier qu’elle peut être manipulée sans risque avec le matériel adapté", 'is_correct' => true],
                        ['choice_text' => "La saisir à main nue immédiatement", 'is_correct' => false],
                        ['choice_text' => "La poser directement sur une surface fragile", 'is_correct' => false],
                        ['choice_text' => "Ajouter de l’eau au hasard", 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => "Filtration, séparation et centrifugation",
                'description' => "Choisir une méthode simple de séparation et comprendre le rôle du filtre et de la centrifugation.",
                'questions' => [
                    ['question' => "Quel est le but principal d’une filtration classique ?", 'explanation' => "La filtration sépare un solide insoluble d’un liquide grâce à un matériau poreux qui retient le solide.", 'choices' => [
                        ['choice_text' => "Séparer un solide insoluble d’un liquide", 'is_correct' => true],
                        ['choice_text' => "Transformer un soluté en gaz", 'is_correct' => false],
                        ['choice_text' => "Mesurer directement le pH", 'is_correct' => false],
                        ['choice_text' => "Augmenter la masse du liquide", 'is_correct' => false],
                    ]],
                    ['question' => "Après une filtration, comment appelle-t-on généralement le liquide qui a traversé le filtre ?", 'explanation' => "Le liquide récupéré sous le filtre est appelé le filtrat.", 'choices' => [
                        ['choice_text' => "Le résidu", 'is_correct' => false],
                        ['choice_text' => "Le filtrat", 'is_correct' => true],
                        ['choice_text' => "Le précipité sec", 'is_correct' => false],
                        ['choice_text' => "Le ménisque", 'is_correct' => false],
                    ]],
                    ['question' => "Le solide retenu par le papier filtre est appelé…", 'explanation' => "Le solide qui reste sur le filtre après passage du liquide constitue le résidu de filtration.", 'choices' => [
                        ['choice_text' => "Le résidu", 'is_correct' => true],
                        ['choice_text' => "Le filtrat", 'is_correct' => false],
                        ['choice_text' => "Le tampon", 'is_correct' => false],
                        ['choice_text' => "Le solvant", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi mouille-t-on parfois le papier filtre avec un peu de solvant avant de commencer la filtration ?", 'explanation' => "Humidifier le filtre permet de le faire adhérer correctement à l’entonnoir et peut éviter qu’il se déplace pendant la filtration.", 'choices' => [
                        ['choice_text' => "Pour bien le positionner contre le support", 'is_correct' => true],
                        ['choice_text' => "Pour le transformer en métal", 'is_correct' => false],
                        ['choice_text' => "Pour augmenter sa porosité à l’infini", 'is_correct' => false],
                        ['choice_text' => "Pour changer le pH de toute solution", 'is_correct' => false],
                    ]],
                    ['question' => "À quoi sert principalement une centrifugeuse ?", 'explanation' => "La centrifugeuse accélère la séparation de constituants de densités différentes en les soumettant à une rotation rapide.", 'choices' => [
                        ['choice_text' => "Accélérer la séparation de constituants par rotation", 'is_correct' => true],
                        ['choice_text' => "Mesurer une masse", 'is_correct' => false],
                        ['choice_text' => "Mesurer un volume au trait de jauge", 'is_correct' => false],
                        ['choice_text' => "Chauffer un liquide uniformément", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi faut-il équilibrer les tubes dans une centrifugeuse ?", 'explanation' => "Des tubes équilibrés limitent les vibrations importantes et réduisent les contraintes mécaniques sur l’appareil.", 'choices' => [
                        ['choice_text' => "Pour limiter les vibrations et les déséquilibres", 'is_correct' => true],
                        ['choice_text' => "Pour rendre les solutions plus acides", 'is_correct' => false],
                        ['choice_text' => "Pour augmenter la concentration", 'is_correct' => false],
                        ['choice_text' => "Pour empêcher la rotation", 'is_correct' => false],
                    ]],
                    ['question' => "Un mélange contient du sable et de l’eau. Quelle séparation simple convient bien ?", 'explanation' => "Le sable est insoluble dans l’eau. Une filtration permet de retenir le sable et de récupérer l’eau sous forme de filtrat.", 'choices' => [
                        ['choice_text' => "Filtration", 'is_correct' => true],
                        ['choice_text' => "Titrage", 'is_correct' => false],
                        ['choice_text' => "Pesée directe du mélange", 'is_correct' => false],
                        ['choice_text' => "Lecture du ménisque", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi ne faut-il pas verser un mélange très rapidement dans un petit filtre ?", 'explanation' => "Un débit trop important peut saturer le filtre, provoquer un débordement ou entraîner une séparation moins efficace.", 'choices' => [
                        ['choice_text' => "Pour éviter de surcharger ou faire déborder le filtre", 'is_correct' => true],
                        ['choice_text' => "Pour empêcher toute filtration", 'is_correct' => false],
                        ['choice_text' => "Pour rendre le papier filtre plus épais", 'is_correct' => false],
                        ['choice_text' => "Pour augmenter la masse du solvant", 'is_correct' => false],
                    ]],
                    ['question' => "Une filtration devient très lente alors que le liquide est encore présent au-dessus du filtre. Quelle explication simple est plausible ?", 'explanation' => "Le filtre peut être chargé en solide ou les pores peuvent se boucher. La résistance au passage du liquide augmente alors.", 'choices' => [
                        ['choice_text' => "Le filtre peut être saturé ou colmaté", 'is_correct' => true],
                        ['choice_text' => "La solution est devenue une base forte automatiquement", 'is_correct' => false],
                        ['choice_text' => "Le papier filtre est devenu magnétique", 'is_correct' => false],
                        ['choice_text' => "La gravité a cessé d’agir", 'is_correct' => false],
                    ]],
                    ['question' => "Après centrifugation d’un mélange, un dépôt compact apparaît au fond du tube. Comment peut-on l’appeler ?", 'explanation' => "Le matériau séparé et accumulé au fond après centrifugation forme un dépôt ou culot selon le contexte expérimental.", 'choices' => [
                        ['choice_text' => "Un culot ou dépôt", 'is_correct' => true],
                        ['choice_text' => "Un filtrat", 'is_correct' => false],
                        ['choice_text' => "Un ménisque", 'is_correct' => false],
                        ['choice_text' => "Une burette", 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => "pH, indicateurs et mesure",
                'description' => "Réaliser et interpréter des mesures simples de pH et choisir un indicateur adapté à une observation.",
                'questions' => [
                    ['question' => "Un pH de 3 indique une solution…", 'explanation' => "Sur l’échelle usuelle du pH, une valeur inférieure à 7 correspond à un milieu acide.", 'choices' => [
                        ['choice_text' => "Acide", 'is_correct' => true],
                        ['choice_text' => "Neutre", 'is_correct' => false],
                        ['choice_text' => "Basique", 'is_correct' => false],
                        ['choice_text' => "Forcément gazeux", 'is_correct' => false],
                    ]],
                    ['question' => "À 25 °C, un pH proche de 7 correspond à…", 'explanation' => "À 25 °C, une solution neutre présente un pH proche de 7.", 'choices' => [
                        ['choice_text' => "Un milieu neutre", 'is_correct' => true],
                        ['choice_text' => "Un acide fort obligatoire", 'is_correct' => false],
                        ['choice_text' => "Une base forte obligatoire", 'is_correct' => false],
                        ['choice_text' => "Une solution sans eau", 'is_correct' => false],
                    ]],
                    ['question' => "Quel instrument permet généralement de mesurer le pH avec plus de précision qu’un papier indicateur ?", 'explanation' => "Un pH-mètre électronique mesure le pH directement et permet une lecture plus précise qu’une simple estimation par couleur.", 'choices' => [
                        ['choice_text' => "Un pH-mètre", 'is_correct' => true],
                        ['choice_text' => "Une spatule", 'is_correct' => false],
                        ['choice_text' => "Une balance", 'is_correct' => false],
                        ['choice_text' => "Une fiole jaugée", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi rince-t-on l’électrode d’un pH-mètre avec de l’eau adaptée entre deux mesures ?", 'explanation' => "Le rinçage limite le transfert de la solution précédente vers l’échantillon suivant et réduit la contamination croisée.", 'choices' => [
                        ['choice_text' => "Pour limiter les contaminations entre les échantillons", 'is_correct' => true],
                        ['choice_text' => "Pour augmenter la température de l’électrode", 'is_correct' => false],
                        ['choice_text' => "Pour remplacer l’étalonnage", 'is_correct' => false],
                        ['choice_text' => "Pour rendre toutes les solutions neutres", 'is_correct' => false],
                    ]],
                    ['question' => "Un indicateur coloré sert principalement à…", 'explanation' => "Un indicateur change de couleur dans une zone de pH donnée. Il peut donc aider à repérer qualitativement une acidité ou une fin de titrage.", 'choices' => [
                        ['choice_text' => "Donner une indication visuelle sur le pH", 'is_correct' => true],
                        ['choice_text' => "Mesurer directement la masse", 'is_correct' => false],
                        ['choice_text' => "Filtrer un précipité", 'is_correct' => false],
                        ['choice_text' => "Accélérer toutes les réactions", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi choisit-on un indicateur dont la zone de virage correspond au pH recherché ?", 'explanation' => "L’indicateur doit changer de couleur dans la région où l’on veut détecter la variation de pH ou l’équivalence d’un titrage.", 'choices' => [
                        ['choice_text' => "Pour que le changement de couleur soit observable au bon moment", 'is_correct' => true],
                        ['choice_text' => "Pour augmenter la concentration du titrant", 'is_correct' => false],
                        ['choice_text' => "Pour empêcher toute réaction chimique", 'is_correct' => false],
                        ['choice_text' => "Pour modifier la masse molaire", 'is_correct' => false],
                    ]],
                    ['question' => "Un échantillon a un pH de 11. Par rapport à un échantillon de pH 5, lequel est le plus basique ?", 'explanation' => "Un pH plus élevé indique un caractère plus basique. Le pH 11 est donc plus basique que le pH 5.", 'choices' => [
                        ['choice_text' => "L’échantillon à pH 5", 'is_correct' => false],
                        ['choice_text' => "L’échantillon à pH 11", 'is_correct' => true],
                        ['choice_text' => "Ils sont forcément identiques", 'is_correct' => false],
                        ['choice_text' => "Aucun des deux", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi faut-il étalonner un pH-mètre avant des mesures précises ?", 'explanation' => "L’étalonnage avec des solutions tampons permet de relier correctement la réponse de l’électrode aux valeurs de pH de référence.", 'choices' => [
                        ['choice_text' => "Pour vérifier et ajuster la réponse de l’appareil", 'is_correct' => true],
                        ['choice_text' => "Pour chauffer l’échantillon", 'is_correct' => false],
                        ['choice_text' => "Pour supprimer les ions de la solution", 'is_correct' => false],
                        ['choice_text' => "Pour changer automatiquement le pH de l’échantillon", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi évite-t-on généralement d’essuyer fortement une électrode de pH juste avant la mesure ?", 'explanation' => "Une manipulation trop brusque peut perturber la couche sensible de l’électrode. On préfère souvent la rincer puis éliminer délicatement l’excès de liquide selon la procédure.", 'choices' => [
                        ['choice_text' => "Parce qu’un frottement énergique peut perturber ou endommager la surface sensible", 'is_correct' => true],
                        ['choice_text' => "Parce que le pH devient automatiquement égal à 7", 'is_correct' => false],
                        ['choice_text' => "Parce que l’électrode ne peut jamais être rincée", 'is_correct' => false],
                        ['choice_text' => "Parce que l’eau distillée est toujours corrosive", 'is_correct' => false],
                    ]],
                    ['question' => "Deux mesures successives donnent pH 6,2 puis 6,2 après rinçage. Que suggère ce résultat ?", 'explanation' => "Des lectures identiques dans les mêmes conditions suggèrent une mesure stable et reproductible pour cet échantillon.", 'choices' => [
                        ['choice_text' => "Une bonne cohérence entre les deux lectures", 'is_correct' => true],
                        ['choice_text' => "Une panne certaine du pH-mètre", 'is_correct' => false],
                        ['choice_text' => "Une neutralité obligatoire", 'is_correct' => false],
                        ['choice_text' => "Une contamination certaine", 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => "Nettoyage, contamination et gestion des déchets",
                'description' => "Éviter les contaminations croisées, nettoyer correctement le matériel et orienter les déchets selon leur nature.",
                'questions' => [
                    ['question' => "Pourquoi rince-t-on soigneusement une verrerie avant de préparer une nouvelle solution ?", 'explanation' => "Des résidus de l’expérience précédente peuvent modifier la composition de la nouvelle solution. Un nettoyage adapté limite cette contamination.", 'choices' => [
                        ['choice_text' => "Pour éviter que des résidus modifient la nouvelle préparation", 'is_correct' => true],
                        ['choice_text' => "Pour augmenter la masse de la verrerie", 'is_correct' => false],
                        ['choice_text' => "Pour changer le volume nominal", 'is_correct' => false],
                        ['choice_text' => "Pour rendre le verre magnétique", 'is_correct' => false],
                    ]],
                    ['question' => "Une pipette ayant servi avec une solution doit-elle être utilisée immédiatement avec une autre solution sans rinçage approprié ?", 'explanation' => "Non. Des traces du premier produit peuvent contaminer le second. Le nettoyage et le rinçage doivent suivre la procédure adaptée.", 'choices' => [
                        ['choice_text' => "Oui, toujours", 'is_correct' => false],
                        ['choice_text' => "Non, il faut éviter la contamination croisée", 'is_correct' => true],
                        ['choice_text' => "Oui, si les solutions sont colorless", 'is_correct' => false],
                        ['choice_text' => "Oui, si elles ont le même volume", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi les déchets chimiques ne sont-ils pas tous jetés dans le même évier ?", 'explanation' => "Les déchets peuvent avoir des propriétés et des risques différents. Ils doivent être collectés et traités selon les règles prévues pour leur catégorie.", 'choices' => [
                        ['choice_text' => "Parce que la nature des déchets détermine leur traitement", 'is_correct' => true],
                        ['choice_text' => "Parce que les éviers ne contiennent jamais d’eau", 'is_correct' => false],
                        ['choice_text' => "Parce que tous les déchets sont solides", 'is_correct' => false],
                        ['choice_text' => "Parce que le volume ne peut jamais être mesuré", 'is_correct' => false],
                    ]],
                    ['question' => "Une verrerie semble propre mais contient encore des traces visibles d’un produit. Que faut-il faire ?", 'explanation' => "La verrerie doit être nettoyée correctement avant réutilisation. Une simple apparence propre ne suffit pas si des résidus sont encore présents.", 'choices' => [
                        ['choice_text' => "La réutiliser immédiatement", 'is_correct' => false],
                        ['choice_text' => "La nettoyer jusqu’à élimination appropriée des résidus", 'is_correct' => true],
                        ['choice_text' => "Ajouter un autre produit dessus", 'is_correct' => false],
                        ['choice_text' => "La ranger avec les autres verreries propres", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi étiquette-t-on les solutions préparées au laboratoire ?", 'explanation' => "L’étiquette permet d’identifier le contenu, la concentration ou d’autres informations utiles et évite les confusions.", 'choices' => [
                        ['choice_text' => "Pour identifier correctement le contenu", 'is_correct' => true],
                        ['choice_text' => "Pour augmenter sa concentration", 'is_correct' => false],
                        ['choice_text' => "Pour empêcher toute évaporation", 'is_correct' => false],
                        ['choice_text' => "Pour rendre la solution colorée", 'is_correct' => false],
                    ]],
                    ['question' => "Une solution inconnue est retrouvée sur la paillasse sans étiquette. Quelle réaction est la plus raisonnable ?", 'explanation' => "Sans identification fiable, il serait dangereux et scientifiquement mauvais de deviner son contenu. Elle doit être traitée selon la procédure du laboratoire.", 'choices' => [
                        ['choice_text' => "La goûter pour l’identifier", 'is_correct' => false],
                        ['choice_text' => "La mélanger avec une autre solution au hasard", 'is_correct' => false],
                        ['choice_text' => "La mettre de côté et suivre la procédure d’identification ou de gestion des inconnus", 'is_correct' => true],
                        ['choice_text' => "La jeter avec les déchets ordinaires sans vérification", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi faut-il refermer les flacons de réactifs après utilisation ?", 'explanation' => "Fermer les flacons limite l’évaporation, la contamination par l’environnement et les erreurs de concentration ou de qualité du produit.", 'choices' => [
                        ['choice_text' => "Pour limiter l’évaporation et la contamination", 'is_correct' => true],
                        ['choice_text' => "Pour augmenter automatiquement la masse du réactif", 'is_correct' => false],
                        ['choice_text' => "Pour diminuer le volume de la verrerie", 'is_correct' => false],
                        ['choice_text' => "Pour empêcher toute lecture d’étiquette", 'is_correct' => false],
                    ]],
                    ['question' => "Quel est un signe classique de contamination croisée lors d’une analyse ?", 'explanation' => "Un résultat anormal ou inattendu dans un échantillon peut être dû à un transfert involontaire de matière depuis un autre échantillon ou réactif.", 'choices' => [
                        ['choice_text' => "Un résultat inattendu lié à un transfert involontaire de matière", 'is_correct' => true],
                        ['choice_text' => "Une balance propre", 'is_correct' => false],
                        ['choice_text' => "Une verrerie correctement étiquetée", 'is_correct' => false],
                        ['choice_text' => "Une solution homogène", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi utilise-t-on parfois des récipients différents pour différents types de déchets chimiques ?", 'explanation' => "Séparer les déchets évite des réactions incompatibles et facilite leur traitement adapté.", 'choices' => [
                        ['choice_text' => "Pour éviter les mélanges incompatibles et faciliter le traitement", 'is_correct' => true],
                        ['choice_text' => "Pour augmenter automatiquement leur toxicité", 'is_correct' => false],
                        ['choice_text' => "Pour empêcher toute identification", 'is_correct' => false],
                        ['choice_text' => "Pour faire disparaître les déchets", 'is_correct' => false],
                    ]],
                    ['question' => "Quel document ou support est particulièrement utile pour retrouver les détails d’une manipulation ?", 'explanation' => "Un cahier de laboratoire ou une fiche expérimentale permet de conserver les mesures, calculs, observations et conditions de l’expérience.", 'choices' => [
                        ['choice_text' => "Le cahier de laboratoire ou la fiche d’expérience", 'is_correct' => true],
                        ['choice_text' => "Uniquement l’étiquette du flacon", 'is_correct' => false],
                        ['choice_text' => "Une feuille sans date ni unité", 'is_correct' => false],
                        ['choice_text' => "La mémoire de l’opérateur seulement", 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => "Qualité des mesures et pratique expérimentale",
                'description' => "Comprendre la répétabilité, les erreurs courantes, les blancs et la manière d’améliorer la qualité d’une mesure.",
                'questions' => [
                    ['question' => "Pourquoi réalise-t-on parfois plusieurs mesures d’un même échantillon ?", 'explanation' => "Répéter une mesure permet de vérifier la reproductibilité et d’identifier une valeur éventuellement anormale.", 'choices' => [
                        ['choice_text' => "Pour évaluer la stabilité et la reproductibilité des résultats", 'is_correct' => true],
                        ['choice_text' => "Pour changer chimiquement l’échantillon", 'is_correct' => false],
                        ['choice_text' => "Pour supprimer les unités", 'is_correct' => false],
                        ['choice_text' => "Pour rendre le résultat forcément exact", 'is_correct' => false],
                    ]],
                    ['question' => "Des résultats sont 10,1 ; 10,2 ; 10,1. Que peut-on dire de ces mesures ?", 'explanation' => "Les valeurs sont proches les unes des autres. Cela indique une bonne cohérence interne, même si cela ne suffit pas à prouver qu’elles sont exactes.", 'choices' => [
                        ['choice_text' => "Elles sont assez proches entre elles", 'is_correct' => true],
                        ['choice_text' => "Elles sont forcément fausses", 'is_correct' => false],
                        ['choice_text' => "Elles prouvent que l’appareil est parfait", 'is_correct' => false],
                        ['choice_text' => "Elles ne peuvent pas être comparées", 'is_correct' => false],
                    ]],
                    ['question' => "Quelle différence simple existe entre précision et exactitude ?", 'explanation' => "La précision concerne le fait que les mesures soient proches entre elles. L’exactitude concerne leur proximité avec une valeur de référence.", 'choices' => [
                        ['choice_text' => "La précision concerne la proximité entre mesures, l’exactitude la proximité avec une référence", 'is_correct' => true],
                        ['choice_text' => "Précision et exactitude sont toujours synonymes", 'is_correct' => false],
                        ['choice_text' => "L’exactitude concerne seulement la masse", 'is_correct' => false],
                        ['choice_text' => "La précision concerne uniquement la température", 'is_correct' => false],
                    ]],
                    ['question' => "Une mesure est répétée cinq fois et donne presque exactement la même valeur, mais cette valeur est éloignée de la valeur de référence. Quelle situation décrit-on le mieux ?", 'explanation' => "Les résultats sont regroupés, donc précis, mais éloignés de la référence, donc peu exacts. Un biais systématique est possible.", 'choices' => [
                        ['choice_text' => "Mesures précises mais potentiellement peu exactes", 'is_correct' => true],
                        ['choice_text' => "Mesures totalement aléatoires", 'is_correct' => false],
                        ['choice_text' => "Mesures sans aucune répétabilité", 'is_correct' => false],
                        ['choice_text' => "Mesures forcément parfaites", 'is_correct' => false],
                    ]],
                    ['question' => "À quoi sert un blanc dans une méthode analytique simple ?", 'explanation' => "Le blanc permet d’observer le signal provenant du milieu, des réactifs ou de la procédure sans l’analyte recherché.", 'choices' => [
                        ['choice_text' => "À estimer le signal dû aux réactifs ou au milieu sans l’analyte", 'is_correct' => true],
                        ['choice_text' => "À peser le récipient", 'is_correct' => false],
                        ['choice_text' => "À augmenter la concentration de l’échantillon", 'is_correct' => false],
                        ['choice_text' => "À remplacer toutes les solutions étalons", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi note-t-on les unités avec les valeurs mesurées ?", 'explanation' => "Une valeur sans unité peut être ambiguë et conduire à des erreurs de calcul ou d’interprétation.", 'choices' => [
                        ['choice_text' => "Pour rendre la mesure interprétable et éviter les erreurs", 'is_correct' => true],
                        ['choice_text' => "Pour rendre les nombres plus grands", 'is_correct' => false],
                        ['choice_text' => "Pour changer la substance mesurée", 'is_correct' => false],
                        ['choice_text' => "Pour éviter toute répétition", 'is_correct' => false],
                    ]],
                    ['question' => "Un résultat semble très différent des autres répétitions. Quelle première attitude scientifique est raisonnable ?", 'explanation' => "Il faut vérifier la manipulation, le calcul, l’appareil et les conditions avant de supprimer la valeur. Une valeur atypique doit être examinée, pas simplement effacée.", 'choices' => [
                        ['choice_text' => "Vérifier le protocole, le calcul et l’appareil avant toute décision", 'is_correct' => true],
                        ['choice_text' => "Supprimer immédiatement la valeur", 'is_correct' => false],
                        ['choice_text' => "La remplacer par la plus jolie valeur", 'is_correct' => false],
                        ['choice_text' => "Changer l’unité pour la faire rentrer dans la série", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi faut-il utiliser des instruments adaptés à la précision recherchée ?", 'explanation' => "Un instrument trop peu précis peut ajouter une erreur importante, même si l’opérateur réalise correctement la manipulation.", 'choices' => [
                        ['choice_text' => "Parce que l’instrument doit être capable de fournir la précision nécessaire", 'is_correct' => true],
                        ['choice_text' => "Parce que tous les instruments ont exactement la même précision", 'is_correct' => false],
                        ['choice_text' => "Pour éviter de faire des calculs", 'is_correct' => false],
                        ['choice_text' => "Pour supprimer la nécessité d’un étalonnage", 'is_correct' => false],
                    ]],
                    ['question' => "Une méthode donne 5,00 g, puis 5,01 g, puis 4,99 g autour d’une référence de 5,00 g. Comment décrire simplement ces résultats ?", 'explanation' => "Les valeurs sont très proches entre elles et proches de la référence, ce qui indique à la fois une bonne cohérence et une bonne proximité avec la valeur attendue.", 'choices' => [
                        ['choice_text' => "Elles sont proches entre elles et de la valeur de référence", 'is_correct' => true],
                        ['choice_text' => "Elles sont toutes très éloignées", 'is_correct' => false],
                        ['choice_text' => "Elles ne sont pas comparables", 'is_correct' => false],
                        ['choice_text' => "Elles indiquent forcément une erreur de calcul", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi une bonne technique de laboratoire ne consiste-t-elle pas seulement à obtenir rapidement un nombre ?", 'explanation' => "Un résultat utile doit être obtenu dans des conditions contrôlées, avec une méthode claire, des mesures fiables et une traçabilité suffisante.", 'choices' => [
                        ['choice_text' => "Parce que la qualité du résultat dépend aussi de la méthode et de la traçabilité", 'is_correct' => true],
                        ['choice_text' => "Parce qu’un nombre n’a jamais d’unité", 'is_correct' => false],
                        ['choice_text' => "Parce qu’une manipulation lente est toujours meilleure", 'is_correct' => false],
                        ['choice_text' => "Parce que les instruments ne mesurent rien", 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => "Révision pratique des techniques de laboratoire",
                'description' => "Mettre ensemble les gestes essentiels de laboratoire dans des situations proches de celles rencontrées en cours ou en séance pratique.",
                'questions' => [
                    ['question' => "Vous devez préparer précisément 250 mL d’une solution à partir d’un solide pesé. Quel matériel est essentiel pour fixer précisément le volume final ?", 'explanation' => "Une fiole jaugée de 250 mL permet d’ajuster précisément le volume final après dissolution du solide.", 'choices' => [
                        ['choice_text' => "Une fiole jaugée de 250 mL", 'is_correct' => true],
                        ['choice_text' => "Un verre de montre seul", 'is_correct' => false],
                        ['choice_text' => "Une spatule seule", 'is_correct' => false],
                        ['choice_text' => "Une coupelle seule", 'is_correct' => false],
                    ]],
                    ['question' => "Vous devez prélever 10,0 mL d’une solution mère pour une dilution. Pourquoi utiliser une pipette adaptée est-il préférable à un bécher ?", 'explanation' => "La pipette est conçue pour délivrer précisément un petit volume, alors qu’un bécher sert surtout aux manipulations moins exigeantes en précision.", 'choices' => [
                        ['choice_text' => "Elle permet un prélèvement plus précis", 'is_correct' => true],
                        ['choice_text' => "Elle chauffe la solution pendant le prélèvement", 'is_correct' => false],
                        ['choice_text' => "Elle augmente la concentration de la solution mère", 'is_correct' => false],
                        ['choice_text' => "Elle remplace automatiquement la fiole jaugée", 'is_correct' => false],
                    ]],
                    ['question' => "Une solution contient un précipité que vous souhaitez retirer avant une mesure de pH. Quelle opération est la plus directe ?", 'explanation' => "Une filtration permet de retirer un solide insoluble avant de mesurer la phase liquide, si le protocole le demande.", 'choices' => [
                        ['choice_text' => "Filtration", 'is_correct' => true],
                        ['choice_text' => "Pesée par différence", 'is_correct' => false],
                        ['choice_text' => "Tare de la balance", 'is_correct' => false],
                        ['choice_text' => "Dilution automatique", 'is_correct' => false],
                    ]],
                    ['question' => "Une pipette a été utilisée avec une solution très concentrée. Avant un prélèvement destiné à une autre solution, quelle préoccupation est prioritaire ?", 'explanation' => "Les résidus de la première solution peuvent contaminer la seconde et modifier son résultat. Le nettoyage ou le rinçage adapté est donc essentiel.", 'choices' => [
                        ['choice_text' => "Éviter la contamination croisée", 'is_correct' => true],
                        ['choice_text' => "Augmenter le volume de la seconde solution", 'is_correct' => false],
                        ['choice_text' => "Changer l’unité de mesure", 'is_correct' => false],
                        ['choice_text' => "Réchauffer la pipette", 'is_correct' => false],
                    ]],
                    ['question' => "Lors d’un titrage, pourquoi lit-on soigneusement le volume sur la burette à la fin de l’ajout ?", 'explanation' => "Le volume délivré par la burette est une donnée nécessaire pour calculer la quantité de matière introduite et exploiter le titrage.", 'choices' => [
                        ['choice_text' => "Parce que ce volume intervient dans le calcul du résultat", 'is_correct' => true],
                        ['choice_text' => "Parce qu’il remplace la concentration", 'is_correct' => false],
                        ['choice_text' => "Parce qu’une burette mesure une masse", 'is_correct' => false],
                        ['choice_text' => "Parce que le volume est toujours nul à l’équivalence", 'is_correct' => false],
                    ]],
                    ['question' => "Une balance donne 0,250 g pour le récipient avec le solide et 0,100 g pour le récipient vide. Quelle masse de solide a été mesurée ?", 'explanation' => "Masse du solide = 0,250 − 0,100 = 0,150 g.", 'choices' => [
                        ['choice_text' => "0,050 g", 'is_correct' => false],
                        ['choice_text' => "0,150 g", 'is_correct' => true],
                        ['choice_text' => "0,350 g", 'is_correct' => false],
                        ['choice_text' => "2,500 g", 'is_correct' => false],
                    ]],
                    ['question' => "Un élève lit 20,8 mL sur une burette alors que l’œil est nettement au-dessus du niveau du ménisque. Quel problème faut-il surtout suspecter ?", 'explanation' => "Une lecture qui n’est pas faite à hauteur des yeux peut introduire une erreur de parallaxe et fausser le volume lu.", 'choices' => [
                        ['choice_text' => "Une erreur de lecture du volume", 'is_correct' => true],
                        ['choice_text' => "Une modification de la formule du titrant", 'is_correct' => false],
                        ['choice_text' => "Une baisse automatique du pH", 'is_correct' => false],
                        ['choice_text' => "Une augmentation de la masse molaire", 'is_correct' => false],
                    ]],
                    ['question' => "Pourquoi est-il utile d’écrire immédiatement le résultat d’une mesure avec son unité et son numéro d’échantillon ?", 'explanation' => "Cela évite de mélanger les mesures, facilite les calculs et garantit une bonne traçabilité de l’expérience.", 'choices' => [
                        ['choice_text' => "Pour garder une trace claire et éviter les confusions", 'is_correct' => true],
                        ['choice_text' => "Pour rendre la mesure automatiquement plus précise", 'is_correct' => false],
                        ['choice_text' => "Pour changer la concentration", 'is_correct' => false],
                        ['choice_text' => "Pour éviter tout nettoyage", 'is_correct' => false],
                    ]],
                    ['question' => "Une solution mère a une concentration de 0,50 mol/L. On prélève 20 mL et on complète à 100 mL. Quelle est la concentration finale ?", 'explanation' => "C1V1 = C2V2, donc C2 = (0,50 × 20)/100 = 0,10 mol/L.", 'choices' => [
                        ['choice_text' => "0,01 mol/L", 'is_correct' => false],
                        ['choice_text' => "0,05 mol/L", 'is_correct' => false],
                        ['choice_text' => "0,10 mol/L", 'is_correct' => true],
                        ['choice_text' => "2,50 mol/L", 'is_correct' => false],
                    ]],
                    ['question' => "Quelle combinaison décrit le mieux une bonne séance de laboratoire ?", 'explanation' => "Une bonne pratique associe une préparation correcte, des mesures adaptées, la sécurité, la propreté et une traçabilité claire des résultats.", 'choices' => [
                        ['choice_text' => "Travailler vite sans noter les mesures", 'is_correct' => false],
                        ['choice_text' => "Suivre le protocole, mesurer correctement, travailler proprement et noter les résultats", 'is_correct' => true],
                        ['choice_text' => "Utiliser la même verrerie pour tout sans nettoyage", 'is_correct' => false],
                        ['choice_text' => "Deviner les résultats quand une mesure manque", 'is_correct' => false],
                    ]],
                ],
            ],
        ];

        foreach ($quizzes as $index => $quizData) {
            $settings = $quizSettings[$index] ?? ['duration' => 20, 'passing_score' => 60];

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
