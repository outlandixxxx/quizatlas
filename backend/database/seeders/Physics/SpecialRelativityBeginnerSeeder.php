<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpecialRelativityBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'special-relativity')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondements de la relativité restreinte',
                'description' => 'Découvrir les deux postulats fondamentaux et les notions essentielles de la relativité restreinte.',
                'questions' => [
                    [
                        'question' => 'Quel domaine de la physique est principalement décrit par la relativité restreinte ?',
                        'choices' => [
                            ['choice_text' => 'Les mouvements à vitesse élevée dans les référentiels inertiels', 'is_correct' => true],
                            ['choice_text' => 'Uniquement les fluides au repos', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les réactions chimiques', 'is_correct' => false],
                            ['choice_text' => 'Les mouvements lents dans des référentiels accélérés uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La relativité restreinte traite notamment des référentiels inertiels et des phénomènes où les vitesses peuvent devenir comparables à celle de la lumière.',
                    ],
                    [
                        'question' => 'Quel scientifique est principalement associé à la formulation de la relativité restreinte en 1905 ?',
                        'choices' => [
                            ['choice_text' => 'Albert Einstein', 'is_correct' => true],
                            ['choice_text' => 'Isaac Newton', 'is_correct' => false],
                            ['choice_text' => 'Galilée', 'is_correct' => false],
                            ['choice_text' => 'James Clerk Maxwell', 'is_correct' => false],
                        ],
                        'explanation' => 'Albert Einstein a publié en 1905 un article fondateur sur l\'électrodynamique des corps en mouvement.',
                    ],
                    [
                        'question' => 'Quel est le premier postulat de la relativité restreinte ?',
                        'choices' => [
                            ['choice_text' => 'Les lois de la physique sont les mêmes dans tous les référentiels inertiels', 'is_correct' => true],
                            ['choice_text' => 'La lumière se déplace plus vite pour un observateur en mouvement', 'is_correct' => false],
                            ['choice_text' => 'Le temps est absolument identique pour tous', 'is_correct' => false],
                            ['choice_text' => 'Toutes les masses sont constantes dans tous les référentiels', 'is_correct' => false],
                        ],
                        'explanation' => 'Le principe de relativité affirme que les lois de la physique ont la même forme dans tous les référentiels inertiels.',
                    ],
                    [
                        'question' => 'Quel est le second postulat fondamental de la relativité restreinte ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse de la lumière dans le vide a la même valeur pour tous les observateurs inertiels', 'is_correct' => true],
                            ['choice_text' => 'La vitesse de la lumière dépend directement de la vitesse de la source', 'is_correct' => false],
                            ['choice_text' => 'La lumière se propage toujours à 343 m/s', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière dépend de la masse de l\'observateur', 'is_correct' => false],
                        ],
                        'explanation' => 'La célérité de la lumière dans le vide, notée c, est une constante fondamentale indépendante du mouvement de la source ou de l\'observateur inertiel.',
                    ],
                    [
                        'question' => 'Quelle valeur est approximativement utilisée pour la vitesse de la lumière dans le vide ?',
                        'choices' => [
                            ['choice_text' => '3,0 × 10^8 m/s', 'is_correct' => true],
                            ['choice_text' => '3,0 × 10^5 m/s', 'is_correct' => false],
                            ['choice_text' => '3,0 × 10^3 m/s', 'is_correct' => false],
                            ['choice_text' => '3,0 × 10^10 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'La valeur de c est approximativement 3,00 × 10^8 m/s.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un référentiel inertiel ?',
                        'choices' => [
                            ['choice_text' => 'Un référentiel dans lequel un corps isolé reste au repos ou en mouvement rectiligne uniforme', 'is_correct' => true],
                            ['choice_text' => 'Un référentiel qui tourne nécessairement très vite', 'is_correct' => false],
                            ['choice_text' => 'Un référentiel dans lequel tous les objets sont immobiles', 'is_correct' => false],
                            ['choice_text' => 'Un référentiel soumis obligatoirement à une accélération', 'is_correct' => false],
                        ],
                        'explanation' => 'Un référentiel inertiel est un référentiel dans lequel la première loi de Newton est valable.',
                    ],
                    [
                        'question' => 'La relativité restreinte conserve-t-elle les lois de la mécanique classique comme approximation à faible vitesse ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, la mécanique classique devient toujours fausse même à très faible vitesse', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les liquides', 'is_correct' => false],
                            ['choice_text' => 'Seulement à température nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque v est très inférieur à c, les effets relativistes deviennent négligeables et les résultats classiques constituent une excellente approximation.',
                    ],
                    [
                        'question' => 'Pourquoi la relativité restreinte a-t-elle été nécessaire ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la mécanique classique et les transformations de Galilée entraient en conflit avec l\'invariance de la vitesse de la lumière', 'is_correct' => true],
                            ['choice_text' => 'Parce que les lois de Newton ne pouvaient jamais décrire un mouvement quelconque', 'is_correct' => false],
                            ['choice_text' => 'Parce que les objets macroscopiques n\'avaient plus de masse', 'is_correct' => false],
                            ['choice_text' => 'Parce que la thermodynamique avait cessé d\'être valable', 'is_correct' => false],
                        ],
                        'explanation' => 'La relativité restreinte a notamment été développée pour rendre compatibles la relativité des référentiels et les propriétés de la lumière décrites par l\'électromagnétisme.',
                    ],
                    [
                        'question' => 'Une horloge se déplace très rapidement par rapport à un observateur. La relativité restreinte prédit que l\'intervalle de temps mesuré par l\'observateur peut être :',
                        'choices' => [
                            ['choice_text' => 'Plus grand que le temps propre de l\'horloge', 'is_correct' => true],
                            ['choice_text' => 'Toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Toujours plus petit sans exception', 'is_correct' => false],
                            ['choice_text' => 'Toujours exactement identique', 'is_correct' => false],
                        ],
                        'explanation' => 'C\'est le phénomène de dilatation du temps : un observateur voit les horloges en mouvement ralentir par rapport à son propre référentiel.',
                    ],
                    [
                        'question' => 'La relativité restreinte concerne-t-elle uniquement la lumière ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle concerne les relations entre espace, temps, énergie et mouvement', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle ne concerne aucune particule massive', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle ne traite que des miroirs', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle s\'applique seulement aux photons visibles', 'is_correct' => false],
                        ],
                        'explanation' => 'La théorie s\'applique à tous les phénomènes physiques compatibles avec ses postulats, pas seulement aux photons.',
                    ],
                ],
            ],

            [
                'title' => 'Espace et temps',
                'description' => 'Comprendre pourquoi les mesures de distances et de durées dépendent du référentiel.',
                'questions' => [
                    [
                        'question' => 'En relativité restreinte, le temps est-il une quantité absolue identique pour tous les observateurs ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, sauf pour les photons visibles', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais uniquement dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les durées mesurées peuvent dépendre de l\'état de mouvement relatif des observateurs.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on la durée mesurée dans le référentiel où les deux événements concernés se produisent au même endroit ?',
                        'choices' => [
                            ['choice_text' => 'Le temps propre', 'is_correct' => true],
                            ['choice_text' => 'Le temps universel absolu', 'is_correct' => false],
                            ['choice_text' => 'Le temps gravitationnel', 'is_correct' => false],
                            ['choice_text' => 'Le temps spectral', 'is_correct' => false],
                        ],
                        'explanation' => 'Le temps propre est la durée mesurée par une horloge qui se trouve au même endroit pour les deux événements.',
                    ],
                    [
                        'question' => 'Qu\'est-ce que la simultanéité en relativité restreinte ?',
                        'choices' => [
                            ['choice_text' => 'Une notion qui dépend du référentiel de l\'observateur', 'is_correct' => true],
                            ['choice_text' => 'Une propriété absolument identique pour tous les observateurs', 'is_correct' => false],
                            ['choice_text' => 'Une grandeur qui dépend uniquement de la masse', 'is_correct' => false],
                            ['choice_text' => 'Une propriété qui n\'a aucun lien avec le temps', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux événements simultanés dans un référentiel peuvent ne pas l\'être dans un autre référentiel en mouvement relatif.',
                    ],
                    [
                        'question' => 'Deux observateurs en mouvement relatif peuvent-ils mesurer des durées différentes entre les mêmes événements ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement si les événements sont lumineux', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans un champ électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'La relativité restreinte abandonne l\'idée d\'un temps universel partagé par tous les référentiels.',
                    ],
                    [
                        'question' => 'Quel est le temps propre d\'une horloge qui accompagne directement un objet entre deux événements ?',
                        'choices' => [
                            ['choice_text' => 'La durée mesurée par cette horloge', 'is_correct' => true],
                            ['choice_text' => 'Toujours zéro', 'is_correct' => false],
                            ['choice_text' => 'La durée mesurée uniquement par un observateur extérieur', 'is_correct' => false],
                            ['choice_text' => 'Une durée indépendante des événements', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'horloge qui accompagne le système mesure directement le temps propre associé à la trajectoire de ce système.',
                    ],
                    [
                        'question' => 'Le concept d\'espace-temps combine principalement :',
                        'choices' => [
                            ['choice_text' => 'Les coordonnées spatiales et la coordonnée temporelle', 'is_correct' => true],
                            ['choice_text' => 'La masse et la charge électrique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La température et la pression uniquement', 'is_correct' => false],
                            ['choice_text' => 'La vitesse du son et la longueur d\'onde', 'is_correct' => false],
                        ],
                        'explanation' => 'La relativité restreinte décrit les événements dans un espace-temps à quatre dimensions : trois spatiales et une temporelle.',
                    ],
                    [
                        'question' => 'Un événement en relativité est caractérisé par :',
                        'choices' => [
                            ['choice_text' => 'Sa position dans l\'espace et son instant', 'is_correct' => true],
                            ['choice_text' => 'Son énergie uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sa température uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sa masse uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un événement correspond à un point précis de l\'espace-temps.',
                    ],
                    [
                        'question' => 'Pourquoi deux observateurs peuvent-ils ne pas être d\'accord sur la simultanéité de deux événements éloignés ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le temps et l\'espace se transforment ensemble entre référentiels en mouvement relatif', 'is_correct' => true],
                            ['choice_text' => 'Parce que la lumière change de nature', 'is_correct' => false],
                            ['choice_text' => 'Parce que leurs horloges sont nécessairement cassées', 'is_correct' => false],
                            ['choice_text' => 'Parce que les événements changent physiquement de lieu', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transformations de Lorentz mélangent les coordonnées spatiales et temporelles.',
                    ],
                    [
                        'question' => 'La contraction des longueurs concerne principalement :',
                        'choices' => [
                            ['choice_text' => 'La longueur mesurée dans la direction du mouvement relatif', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la largeur perpendiculaire au mouvement', 'is_correct' => false],
                            ['choice_text' => 'La masse au repos', 'is_correct' => false],
                            ['choice_text' => 'La température du corps', 'is_correct' => false],
                        ],
                        'explanation' => 'La longueur d\'un objet en mouvement est raccourcie dans la direction de son déplacement pour un observateur qui le voit passer.',
                    ],
                    [
                        'question' => 'Un objet se déplace parallèlement à son axe longitudinal. La contraction relativiste concerne :',
                        'choices' => [
                            ['choice_text' => 'Sa longueur mesurée dans cette direction', 'is_correct' => true],
                            ['choice_text' => 'Seulement sa masse', 'is_correct' => false],
                            ['choice_text' => 'Uniquement ses dimensions transversales', 'is_correct' => false],
                            ['choice_text' => 'Uniquement son énergie thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'La contraction des longueurs s\'applique à la dimension parallèle à la vitesse relative.',
                    ],
                ],
            ],

            [
                'title' => 'Dilatation du temps',
                'description' => 'Étudier la dilatation du temps et le facteur de Lorentz dans des situations simples.',
                'questions' => [
                    [
                        'question' => 'Que signifie la dilatation du temps ?',
                        'choices' => [
                            ['choice_text' => 'Une horloge en mouvement relatif peut être observée comme avançant plus lentement', 'is_correct' => true],
                            ['choice_text' => 'Le temps disparaît à grande vitesse', 'is_correct' => false],
                            ['choice_text' => 'Toutes les horloges accélèrent lorsqu\'elles sont en mouvement', 'is_correct' => false],
                            ['choice_text' => 'La période d\'une horloge reste nécessairement identique pour tous les observateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'La dilatation du temps est l\'un des effets fondamentaux de la relativité restreinte.',
                    ],
                    [
                        'question' => 'Quel facteur intervient dans la formule relativiste de dilatation du temps ?',
                        'choices' => [
                            ['choice_text' => 'Le facteur de Lorentz γ', 'is_correct' => true],
                            ['choice_text' => 'La constante de Boltzmann', 'is_correct' => false],
                            ['choice_text' => 'La constante gravitationnelle uniquement', 'is_correct' => false],
                            ['choice_text' => 'La constante des gaz parfaits', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur γ = 1/√(1 - v²/c²) apparaît dans plusieurs effets relativistes.',
                    ],
                    [
                        'question' => 'Quelle expression donne le facteur de Lorentz ?',
                        'choices' => [
                            ['choice_text' => 'γ = 1 / √(1 - v²/c²)', 'is_correct' => true],
                            ['choice_text' => 'γ = √(1 - v²/c²)', 'is_correct' => false],
                            ['choice_text' => 'γ = v/c', 'is_correct' => false],
                            ['choice_text' => 'γ = c/v', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur de Lorentz est γ = 1/√(1 - v²/c²).',
                    ],
                    [
                        'question' => 'Pour v = 0, la valeur du facteur de Lorentz est :',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'c', 'is_correct' => false],
                            ['choice_text' => 'Inférieure à 0', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec v = 0, γ = 1/√1 = 1.',
                    ],
                    [
                        'question' => 'Que se passe-t-il lorsque v devient très proche de c ?',
                        'choices' => [
                            ['choice_text' => 'Le facteur de Lorentz devient très grand', 'is_correct' => true],
                            ['choice_text' => 'Le facteur de Lorentz devient nul', 'is_correct' => false],
                            ['choice_text' => 'Le facteur reste égal à 1', 'is_correct' => false],
                            ['choice_text' => 'Le facteur devient toujours négatif', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque v tend vers c, le terme 1 - v²/c² tend vers zéro et γ augmente fortement.',
                    ],
                    [
                        'question' => 'Si une horloge en mouvement possède un temps propre Δτ, une durée mesurée par un observateur pour qui l\'horloge est en mouvement vaut :',
                        'choices' => [
                            ['choice_text' => 'Δt = γΔτ', 'is_correct' => true],
                            ['choice_text' => 'Δt = Δτ/γ', 'is_correct' => false],
                            ['choice_text' => 'Δt = γ + Δτ', 'is_correct' => false],
                            ['choice_text' => 'Δt = γ²Δτ dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'La durée coordonnée est plus grande que le temps propre : Δt = γΔτ.',
                    ],
                    [
                        'question' => 'À faible vitesse devant c, la dilatation du temps est généralement :',
                        'choices' => [
                            ['choice_text' => 'Négligeable dans les situations ordinaires', 'is_correct' => true],
                            ['choice_text' => 'Énorme', 'is_correct' => false],
                            ['choice_text' => 'Toujours infinie', 'is_correct' => false],
                            ['choice_text' => 'Toujours dominante', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour v << c, γ est très proche de 1.',
                    ],
                    [
                        'question' => 'Un voyageur spatial se déplace très rapidement par rapport à la Terre. Pendant le voyage, son horloge mesure le temps propre. Par rapport à elle, les observateurs terrestres peuvent mesurer :',
                        'choices' => [
                            ['choice_text' => 'Une durée plus longue entre deux événements du voyageur', 'is_correct' => true],
                            ['choice_text' => 'Une durée toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'La même durée dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Une durée nécessairement négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour des événements liés à l\'horloge du voyageur, les observateurs terrestres mesurent une durée dilatée.',
                    ],
                    [
                        'question' => 'La dilatation du temps est-elle un défaut des horloges mécaniques ?',
                        'choices' => [
                            ['choice_text' => 'Non, c\'est un effet physique de la relativité', 'is_correct' => true],
                            ['choice_text' => 'Oui, seules les horloges mécaniques sont concernées', 'is_correct' => false],
                            ['choice_text' => 'Oui, les horloges atomiques ne subissent jamais cet effet', 'is_correct' => false],
                            ['choice_text' => 'Non, parce que le temps est une illusion', 'is_correct' => false],
                        ],
                        'explanation' => 'Toutes les horloges idéales subissent le même effet relativiste lorsqu\'elles suivent des trajectoires identiques.',
                    ],
                    [
                        'question' => 'Quel phénomène expérimental réel est compatible avec la dilatation relativiste du temps ?',
                        'choices' => [
                            ['choice_text' => 'La durée de vie apparente prolongée de particules instables très rapides', 'is_correct' => true],
                            ['choice_text' => 'La diminution de la gravité sur Terre pendant la nuit', 'is_correct' => false],
                            ['choice_text' => 'La disparition des électrons dans les métaux', 'is_correct' => false],
                            ['choice_text' => 'Le ralentissement du son dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Des particules instables se déplaçant à des vitesses relativistes peuvent être observées plus longtemps dans le laboratoire que ne le prévoirait leur durée de vie propre.',
                    ],
                ],
            ],

            [
                'title' => 'Contraction des longueurs',
                'description' => 'Comprendre la contraction relativiste des longueurs et son lien avec le facteur de Lorentz.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce que la contraction des longueurs ?',
                        'choices' => [
                            ['choice_text' => 'Une diminution de la longueur mesurée dans la direction du mouvement relatif', 'is_correct' => true],
                            ['choice_text' => 'Une diminution de la masse propre', 'is_correct' => false],
                            ['choice_text' => 'Une diminution de la température', 'is_correct' => false],
                            ['choice_text' => 'Une contraction physique ressentie par l\'objet lui-même', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'objet ne mesure pas sa propre longueur comme étant contractée ; c\'est une mesure faite dans un référentiel où l\'objet est en mouvement.',
                    ],
                    [
                        'question' => 'Quelle formule simple donne la longueur contractée L en fonction de la longueur propre L₀ ?',
                        'choices' => [
                            ['choice_text' => 'L = L₀/γ', 'is_correct' => true],
                            ['choice_text' => 'L = γL₀', 'is_correct' => false],
                            ['choice_text' => 'L = L₀ + γ', 'is_correct' => false],
                            ['choice_text' => 'L = γ²L₀', 'is_correct' => false],
                        ],
                        'explanation' => 'La longueur mesurée par l\'observateur en mouvement relatif vaut L = L₀/γ.',
                    ],
                    [
                        'question' => 'Qu\'appelle-t-on longueur propre ?',
                        'choices' => [
                            ['choice_text' => 'La longueur mesurée dans le référentiel où l\'objet est au repos', 'is_correct' => true],
                            ['choice_text' => 'La longueur mesurée uniquement par un observateur en mouvement', 'is_correct' => false],
                            ['choice_text' => 'La longueur minimale possible pour un objet', 'is_correct' => false],
                            ['choice_text' => 'La longueur mesurée uniquement dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'La longueur propre L₀ est mesurée dans le référentiel où l\'objet est immobile.',
                    ],
                    [
                        'question' => 'La contraction des longueurs concerne-t-elle les dimensions perpendiculaires au mouvement ?',
                        'choices' => [
                            ['choice_text' => 'Non, dans le cadre de la relativité restreinte, elles ne subissent pas cette contraction', 'is_correct' => true],
                            ['choice_text' => 'Oui, elles sont toujours divisées par γ', 'is_correct' => false],
                            ['choice_text' => 'Oui, elles deviennent nulles', 'is_correct' => false],
                            ['choice_text' => 'Oui, elles sont multipliées par γ', 'is_correct' => false],
                        ],
                        'explanation' => 'La contraction de Lorentz s\'applique uniquement à la dimension parallèle à la vitesse relative.',
                    ],
                    [
                        'question' => 'Si γ = 2 et qu\'une tige possède une longueur propre de 10 m, quelle longueur mesure un observateur pour qui la tige se déplace le long de son axe ?',
                        'choices' => [
                            ['choice_text' => '5 m', 'is_correct' => true],
                            ['choice_text' => '20 m', 'is_correct' => false],
                            ['choice_text' => '10 m', 'is_correct' => false],
                            ['choice_text' => '2 m', 'is_correct' => false],
                        ],
                        'explanation' => 'L = L₀/γ = 10/2 = 5 m.',
                    ],
                    [
                        'question' => 'Quand v = 0, la longueur mesurée est-elle différente de la longueur propre ?',
                        'choices' => [
                            ['choice_text' => 'Non, elles sont égales', 'is_correct' => true],
                            ['choice_text' => 'Oui, la longueur est toujours divisée par deux', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle devient infinie', 'is_correct' => false],
                            ['choice_text' => 'Elle devient toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque v = 0, γ = 1 et donc L = L₀.',
                    ],
                    [
                        'question' => 'À mesure que la vitesse augmente vers c, la longueur mesurée dans la direction du mouvement :',
                        'choices' => [
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                            ['choice_text' => 'Augmente sans limite', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours égale à L₀', 'is_correct' => false],
                            ['choice_text' => 'Devient négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme L = L₀/γ et que γ augmente fortement, la longueur mesurée diminue.',
                    ],
                    [
                        'question' => 'La contraction des longueurs est-elle observable à des vitesses usuelles comme 100 km/h ?',
                        'choices' => [
                            ['choice_text' => 'Elle est tellement faible qu\'elle est négligeable dans la pratique courante', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle divise la longueur par deux', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle est facilement visible à l\'œil nu', 'is_correct' => false],
                            ['choice_text' => 'Elle rend les véhicules ponctuels', 'is_correct' => false],
                        ],
                        'explanation' => 'À des vitesses très petites devant c, l\'effet de contraction est extrêmement faible.',
                    ],
                    [
                        'question' => 'Quel élément doit être mesuré simultanément aux deux extrémités pour déterminer correctement une longueur dans un référentiel donné ?',
                        'choices' => [
                            ['choice_text' => 'Les positions des deux extrémités au même instant dans ce référentiel', 'is_correct' => true],
                            ['choice_text' => 'La masse des deux extrémités', 'is_correct' => false],
                            ['choice_text' => 'La température des extrémités uniquement', 'is_correct' => false],
                            ['choice_text' => 'La vitesse du son dans l\'objet', 'is_correct' => false],
                        ],
                        'explanation' => 'La définition relativiste d\'une longueur exige des mesures simultanées des deux extrémités dans le référentiel considéré.',
                    ],
                    [
                        'question' => 'La contraction relativiste signifie-t-elle qu\'un observateur au repos avec une fusée mesure lui-même sa fusée comme contractée ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, dès que la fusée possède un moteur', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsque la fusée est dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans son propre référentiel, la fusée est au repos et sa longueur mesurée est sa longueur propre.',
                    ],
                ],
            ],

            [
                'title' => 'Transformations de Lorentz',
                'description' => 'Découvrir les transformations qui remplacent les transformations classiques de Galilée à grande vitesse.',
                'questions' => [
                    [
                        'question' => 'Quel nom porte la transformation reliant les coordonnées d\'un événement entre deux référentiels inertiels en relativité restreinte ?',
                        'choices' => [
                            ['choice_text' => 'La transformation de Lorentz', 'is_correct' => true],
                            ['choice_text' => 'La transformation de Fourier', 'is_correct' => false],
                            ['choice_text' => 'La transformation de Pascal', 'is_correct' => false],
                            ['choice_text' => 'La transformation de Bernoulli', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transformations de Lorentz relient l\'espace et le temps mesurés dans deux référentiels inertiels en mouvement relatif.',
                    ],
                    [
                        'question' => 'Que remplacent les transformations de Lorentz lorsque les vitesses deviennent relativistes ?',
                        'choices' => [
                            ['choice_text' => 'Les transformations de Galilée', 'is_correct' => true],
                            ['choice_text' => 'Les lois de Kirchhoff', 'is_correct' => false],
                            ['choice_text' => 'Les lois de Snell-Descartes', 'is_correct' => false],
                            ['choice_text' => 'Les équations de Bernoulli', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transformations de Galilée constituent l\'approximation classique, tandis que les transformations de Lorentz sont nécessaires dans le cadre relativiste.',
                    ],
                    [
                        'question' => 'Dans les transformations de Lorentz, les coordonnées spatiale et temporelle sont-elles indépendantes ?',
                        'choices' => [
                            ['choice_text' => 'Non, elles sont mélangées entre référentiels en mouvement relatif', 'is_correct' => true],
                            ['choice_text' => 'Oui, elles restent toujours totalement séparées', 'is_correct' => false],
                            ['choice_text' => 'Elles deviennent toutes deux nulles', 'is_correct' => false],
                            ['choice_text' => 'Elles sont remplacées par la température', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transformation de Lorentz mélange notamment x et t, ce qui conduit à la relativité de la simultanéité.',
                    ],
                    [
                        'question' => 'Quel facteur apparaît dans les transformations de Lorentz ?',
                        'choices' => [
                            ['choice_text' => 'γ', 'is_correct' => true],
                            ['choice_text' => 'k_B', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => 'G', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur de Lorentz intervient directement dans les expressions des transformations.',
                    ],
                    [
                        'question' => 'Que devient une transformation de Lorentz lorsque v est très faible devant c ?',
                        'choices' => [
                            ['choice_text' => 'Elle se rapproche de la transformation classique de Galilée', 'is_correct' => true],
                            ['choice_text' => 'Elle devient complètement différente de la mécanique classique', 'is_correct' => false],
                            ['choice_text' => 'Elle devient impossible à calculer', 'is_correct' => false],
                            ['choice_text' => 'Elle donne toujours une vitesse nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La mécanique classique est récupérée comme limite lorsque v/c devient très petit.',
                    ],
                    [
                        'question' => 'Quelle conséquence importante des transformations de Lorentz concerne la simultanéité ?',
                        'choices' => [
                            ['choice_text' => 'Deux événements simultanés dans un référentiel peuvent ne pas l\'être dans un autre', 'is_correct' => true],
                            ['choice_text' => 'Tous les événements deviennent simultanés', 'is_correct' => false],
                            ['choice_text' => 'Le temps cesse d\'exister', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mélange des coordonnées spatiales et temporelles entraîne la relativité de la simultanéité.',
                    ],
                    [
                        'question' => 'Quelle quantité relativiste reste fondamentale pour tous les observateurs inertiels ?',
                        'choices' => [
                            ['choice_text' => 'L\'intervalle d\'espace-temps', 'is_correct' => true],
                            ['choice_text' => 'La longueur ordinaire dans tous les référentiels', 'is_correct' => false],
                            ['choice_text' => 'Le temps coordonné dans tous les référentiels', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de chaque objet massive', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'intervalle d\'espace-temps est invariant sous les transformations de Lorentz.',
                    ],
                    [
                        'question' => 'Dans quel cas peut-on utiliser les transformations de Galilée comme excellente approximation ?',
                        'choices' => [
                            ['choice_text' => 'Lorsque toutes les vitesses sont très petites devant c', 'is_correct' => true],
                            ['choice_text' => 'Lorsque v est presque égal à c', 'is_correct' => false],
                            ['choice_text' => 'Uniquement pour les photons', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans un accélérateur', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour v << c, les corrections relativistes sont négligeables.',
                    ],
                    [
                        'question' => 'Pourquoi la composition classique des vitesses doit-elle être modifiée en relativité restreinte ?',
                        'choices' => [
                            ['choice_text' => 'Pour que la vitesse de la lumière dans le vide reste c pour tous les observateurs inertiels', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les masses toutes nulles', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les accélérations', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier la charge électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'La règle relativiste de composition des vitesses garantit notamment qu\'aucun observateur inertiel ne mesure une vitesse de lumière différente de c dans le vide.',
                    ],
                    [
                        'question' => 'Quelle valeur ne peut pas être dépassée par un objet massif dans la relativité restreinte ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse de la lumière dans le vide c', 'is_correct' => true],
                            ['choice_text' => 'La vitesse du son', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de rotation de la Terre', 'is_correct' => false],
                            ['choice_text' => 'La vitesse moyenne d\'une voiture', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le cadre de la relativité restreinte, un objet massif ne peut pas atteindre ni dépasser c.'
                    ],
                ],
            ],

            [
                'title' => 'Énergie et quantité de mouvement relativistes',
                'description' => 'Introduire les notions de quantité de mouvement relativiste, énergie totale et énergie de repos.',
                'questions' => [
                    [
                        'question' => 'Quelle expression donne la quantité de mouvement relativiste d\'une particule massive ?',
                        'choices' => [
                            ['choice_text' => 'p = γmv', 'is_correct' => true],
                            ['choice_text' => 'p = mv/γ', 'is_correct' => false],
                            ['choice_text' => 'p = m/v', 'is_correct' => false],
                            ['choice_text' => 'p = γm/v', 'is_correct' => false],
                        ],
                        'explanation' => 'La quantité de mouvement relativiste est p = γmv.',
                    ],
                    [
                        'question' => 'Quelle expression donne l\'énergie totale relativiste d\'une particule massive ?',
                        'choices' => [
                            ['choice_text' => 'E = γmc²', 'is_correct' => true],
                            ['choice_text' => 'E = mc/γ', 'is_correct' => false],
                            ['choice_text' => 'E = mv²', 'is_correct' => false],
                            ['choice_text' => 'E = mc', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'énergie totale d\'une particule massive est E = γmc².',
                    ],
                    [
                        'question' => 'Quelle est l\'énergie de repos d\'une particule de masse m ?',
                        'choices' => [
                            ['choice_text' => 'E₀ = mc²', 'is_correct' => true],
                            ['choice_text' => 'E₀ = mv²', 'is_correct' => false],
                            ['choice_text' => 'E₀ = mc', 'is_correct' => false],
                            ['choice_text' => 'E₀ = m/c²', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'énergie de repos correspond à E₀ = mc².',
                    ],
                    [
                        'question' => 'Quelle partie de l\'énergie totale correspond à l\'énergie cinétique relativiste ?',
                        'choices' => [
                            ['choice_text' => 'K = E - E₀', 'is_correct' => true],
                            ['choice_text' => 'K = E + E₀', 'is_correct' => false],
                            ['choice_text' => 'K = E₀ - E pour une particule en mouvement', 'is_correct' => false],
                            ['choice_text' => 'K = E₀/E', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'énergie cinétique est la différence entre l\'énergie totale et l\'énergie de repos.',
                    ],
                    [
                        'question' => 'À vitesse nulle, quelle est l\'énergie totale d\'une particule massive ?',
                        'choices' => [
                            ['choice_text' => 'mc²', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'mv²/2 uniquement', 'is_correct' => false],
                            ['choice_text' => 'mc', 'is_correct' => false],
                        ],
                        'explanation' => 'Même au repos, une particule possède une énergie de repos E₀ = mc².',
                    ],
                    [
                        'question' => 'Lorsque la vitesse d\'une particule massive augmente fortement, son énergie totale :',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Reste égale à mc²', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme E = γmc² et que γ augmente avec la vitesse, l\'énergie totale augmente.',
                    ],
                    [
                        'question' => 'Quelle relation relativiste relie l\'énergie, la quantité de mouvement et la masse au repos ?',
                        'choices' => [
                            ['choice_text' => 'E² = p²c² + m²c⁴', 'is_correct' => true],
                            ['choice_text' => 'E = pc + mc²', 'is_correct' => false],
                            ['choice_text' => 'E² = p² + m²', 'is_correct' => false],
                            ['choice_text' => 'E = p²c² - m²c⁴', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation énergie-impulsion fondamentale est E² = p²c² + m²c⁴.',
                    ],
                    [
                        'question' => 'Pour une particule massive au repos, que vaut sa quantité de mouvement ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => 'mc', 'is_correct' => false],
                            ['choice_text' => 'mc²', 'is_correct' => false],
                            ['choice_text' => 'Infini', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque v = 0, p = γmv = 0.',
                    ],
                    [
                        'question' => 'À faible vitesse, quelle expression classique est approximativement retrouvée pour l\'énergie cinétique ?',
                        'choices' => [
                            ['choice_text' => 'K ≈ 1/2 mv²', 'is_correct' => true],
                            ['choice_text' => 'K ≈ mc²', 'is_correct' => false],
                            ['choice_text' => 'K ≈ mv', 'is_correct' => false],
                            ['choice_text' => 'K ≈ m/v²', 'is_correct' => false],
                        ],
                        'explanation' => 'À basse vitesse, l\'énergie cinétique relativiste se réduit à l\'expression classique 1/2 mv² au premier ordre.',
                    ],
                    [
                        'question' => 'Pourquoi l\'énergie nécessaire pour accélérer une particule massive devient-elle extrêmement grande près de c ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le facteur de Lorentz augmente fortement', 'is_correct' => true],
                            ['choice_text' => 'Parce que sa masse propre devient exactement infinie', 'is_correct' => false],
                            ['choice_text' => 'Parce que la vitesse du son augmente', 'is_correct' => false],
                            ['choice_text' => 'Parce que la charge électrique disparaît', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur γ tend vers l\'infini lorsque v tend vers c, ce qui fait croître fortement l\'énergie nécessaire.'
                    ],
                ],
            ],

            [
                'title' => 'Vitesse de la lumière et photons',
                'description' => 'Comprendre quelques propriétés relativistes de la lumière et des particules sans masse.',
                'questions' => [
                    [
                        'question' => 'Quelle vitesse un photon dans le vide possède-t-il ?',
                        'choices' => [
                            ['choice_text' => 'c', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '343 m/s', 'is_correct' => false],
                            ['choice_text' => 'Une vitesse dépendant de l\'observateur inertiel', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le vide, tout observateur inertiel mesure la vitesse d\'un photon comme étant c.',
                    ],
                    [
                        'question' => 'Le photon possède-t-il une masse au repos ?',
                        'choices' => [
                            ['choice_text' => 'Non, sa masse au repos est nulle', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle vaut toujours 1 kg', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle dépend uniquement de la couleur', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle est nécessairement infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Le photon est une particule sans masse au repos, mais il possède de l\'énergie et une quantité de mouvement.',
                    ],
                    [
                        'question' => 'Quelle relation donne l\'énergie d\'un photon de fréquence ν ?',
                        'choices' => [
                            ['choice_text' => 'E = hν', 'is_correct' => true],
                            ['choice_text' => 'E = mc² avec m non nulle', 'is_correct' => false],
                            ['choice_text' => 'E = h/ν', 'is_correct' => false],
                            ['choice_text' => 'E = ν/h', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'énergie d\'un photon est E = hν.',
                    ],
                    [
                        'question' => 'Quelle relation relie l\'énergie et la quantité de mouvement d\'un photon ?',
                        'choices' => [
                            ['choice_text' => 'E = pc', 'is_correct' => true],
                            ['choice_text' => 'E = p/c', 'is_correct' => false],
                            ['choice_text' => 'E = p²c', 'is_correct' => false],
                            ['choice_text' => 'E = p + c', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une particule sans masse comme le photon, la relation relativiste donne E = pc.',
                    ],
                    [
                        'question' => 'Quel est le lien entre fréquence et longueur d\'onde d\'un photon dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'c = λν', 'is_correct' => true],
                            ['choice_text' => 'c = λ/ν', 'is_correct' => false],
                            ['choice_text' => 'c = ν/λ', 'is_correct' => false],
                            ['choice_text' => 'c = λ + ν', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le vide, la fréquence et la longueur d\'onde vérifient c = λν.',
                    ],
                    [
                        'question' => 'Deux observateurs inertiels en mouvement relatif mesurent-ils la même valeur de c pour un rayon lumineux dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, chacun mesure une valeur différente', 'is_correct' => false],
                            ['choice_text' => 'Seulement si la source est immobile', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour la lumière rouge', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'invariance de la vitesse de la lumière est un postulat fondamental de la relativité restreinte.',
                    ],
                    [
                        'question' => 'Un objet massif peut-il être accéléré jusqu\'à exactement c ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, avec n\'importe quelle force', 'is_correct' => false],
                            ['choice_text' => 'Oui, dès qu\'il atteint une grande énergie thermique', 'is_correct' => false],
                            ['choice_text' => 'Oui, à condition de supprimer la gravité', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'énergie nécessaire pour amener une particule massive jusqu\'à c diverge.',
                    ],
                    [
                        'question' => 'Pourquoi un photon peut-il se déplacer à c alors qu\'une particule massive ne le peut pas ?',
                        'choices' => [
                            ['choice_text' => 'Le photon a une masse au repos nulle', 'is_correct' => true],
                            ['choice_text' => 'Le photon possède une masse infinie', 'is_correct' => false],
                            ['choice_text' => 'La lumière ne possède aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'Les photons ne suivent aucune loi physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la relativité restreinte, les particules sans masse au repos se déplacent à c dans le vide.',
                    ],
                    [
                        'question' => 'Un photon peut-il avoir une quantité de mouvement malgré une masse au repos nulle ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, une masse nulle implique toujours une impulsion nulle', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans l\'air', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsque sa fréquence est nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le photon possède une quantité de mouvement p = E/c = h/λ malgré une masse au repos nulle.',
                    ],
                    [
                        'question' => 'Quelle observation quotidienne ne permet pas facilement de remarquer la relativité de la vitesse de la lumière ?',
                        'choices' => [
                            ['choice_text' => 'Les mouvements ordinaires d\'une voiture', 'is_correct' => true],
                            ['choice_text' => 'Les particules proches de c dans un accélérateur', 'is_correct' => false],
                            ['choice_text' => 'Les photons dans les expériences optiques de haute précision', 'is_correct' => false],
                            ['choice_text' => 'Les horloges atomiques de haute précision', 'is_correct' => false],
                        ],
                        'explanation' => 'À faible vitesse, les effets relativistes sont trop faibles pour être perceptibles dans les situations ordinaires.',
                    ],
                    [
                        'question' => 'Lorsqu\'un photon possède une fréquence plus élevée, son énergie :',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Ne dépend jamais de la fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'Puisque E = hν, l\'énergie du photon est proportionnelle à sa fréquence.',
                    ],
                ],
            ],

            [
                'title' => 'Effets relativistes au quotidien',
                'description' => 'Relier la relativité restreinte à des situations expérimentales et technologiques réelles.',
                'questions' => [
                    [
                        'question' => 'Les effets de relativité restreinte sont-ils importants dans les accélérateurs de particules ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, les particules y sont toujours lentes', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les accélérateurs thermiques', 'is_correct' => false],
                            ['choice_text' => 'Uniquement pour les neutrons au repos', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules des accélérateurs peuvent atteindre des vitesses extrêmement proches de c.',
                    ],
                    [
                        'question' => 'Pourquoi les corrections relativistes sont-elles prises en compte dans certains systèmes de navigation satellitaire ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les horloges embarquées ne mesurent pas exactement le même temps que des horloges terrestres', 'is_correct' => true],
                            ['choice_text' => 'Parce que les satellites se déplacent plus lentement que le son', 'is_correct' => false],
                            ['choice_text' => 'Parce que la lumière cesse de se propager dans l\'espace', 'is_correct' => false],
                            ['choice_text' => 'Parce que les satellites perdent automatiquement leur masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mouvement des satellites entraîne notamment des effets de relativité restreinte sur leurs horloges. Les systèmes de navigation réels tiennent également compte de la relativité générale.',
                    ],
                    [
                        'question' => 'Des particules cosmiques très rapides peuvent-elles être observées avec une durée de vie apparente plus longue que leur durée propre ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsqu\'elles sont au repos', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans un matériau solide', 'is_correct' => false],
                        ],
                        'explanation' => 'La dilatation du temps explique pourquoi certaines particules instables très rapides peuvent parcourir des distances importantes avant de se désintégrer.',
                    ],
                    [
                        'question' => 'Quel phénomène peut être utilisé pour vérifier expérimentalement la dilatation du temps ?',
                        'choices' => [
                            ['choice_text' => 'Comparer les durées de vie de particules rapides et au repos', 'is_correct' => true],
                            ['choice_text' => 'Mesurer la couleur d\'une pierre', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la pression de l\'eau', 'is_correct' => false],
                            ['choice_text' => 'Observer la chute d\'un objet lent', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules instables fournissent des tests expérimentaux de la dilatation du temps.',
                    ],
                    [
                        'question' => 'À quelle vitesse les effets relativistes deviennent-ils vraiment importants ?',
                        'choices' => [
                            ['choice_text' => 'Lorsque la vitesse est une fraction significative de c', 'is_correct' => true],
                            ['choice_text' => 'À quelques mètres par seconde', 'is_correct' => false],
                            ['choice_text' => 'Uniquement lorsque la température atteint 100 °C', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les liquides', 'is_correct' => false],
                        ],
                        'explanation' => 'Les effets deviennent mesurables et importants lorsque v/c n\'est plus négligeable.',
                    ],
                    [
                        'question' => 'Pourquoi ne remarque-t-on pas la contraction des longueurs sur un train ordinaire ?',
                        'choices' => [
                            ['choice_text' => 'Parce que sa vitesse est minuscule devant c', 'is_correct' => true],
                            ['choice_text' => 'Parce que les trains ne possèdent aucune longueur', 'is_correct' => false],
                            ['choice_text' => 'Parce que la relativité ne concerne pas les objets macroscopiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les trains sont toujours au repos dans tous les référentiels', 'is_correct' => false],
                        ],
                        'explanation' => 'Les effets relativistes existent en principe pour tous les objets, mais ils sont négligeables à des vitesses ordinaires.',
                    ],
                    [
                        'question' => 'Pourquoi une horloge atomique est-elle adaptée aux tests de relativité ?',
                        'choices' => [
                            ['choice_text' => 'Sa très grande précision permet de détecter de petites différences de temps', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'elle fonctionne sans aucun mouvement interne', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle ne possède aucune fréquence', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle ne mesure jamais le temps', 'is_correct' => false],
                        ],
                        'explanation' => 'Les horloges atomiques sont suffisamment précises pour mettre en évidence de minuscules effets relativistes.',
                    ],
                    [
                        'question' => 'Dans un accélérateur, fournir davantage d\'énergie à une particule très relativiste augmente-t-il sa vitesse de façon proportionnelle ?',
                        'choices' => [
                            ['choice_text' => 'Non, sa vitesse se rapproche de plus en plus de c sans l\'atteindre', 'is_correct' => true],
                            ['choice_text' => 'Oui, la vitesse augmente toujours linéairement avec l\'énergie', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle dépasse alors c', 'is_correct' => false],
                            ['choice_text' => 'Non, sa vitesse devient immédiatement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'À haute énergie, l\'augmentation de vitesse devient de plus en plus faible tandis que l\'énergie continue d\'augmenter.',
                    ],
                    [
                        'question' => 'La relativité restreinte est-elle uniquement une théorie abstraite sans applications expérimentales ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle possède de nombreuses confirmations expérimentales', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle n\'a jamais été testée', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle ne concerne que les équations mathématiques', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut être utilisée que dans les livres', 'is_correct' => false],
                        ],
                        'explanation' => 'La relativité restreinte est confirmée par de nombreuses expériences, notamment avec les particules rapides et les horloges de précision.',
                    ],
                    [
                        'question' => 'Quel système technologique doit notamment tenir compte d\'effets relativistes pour obtenir une très grande précision temporelle et positionnelle ?',
                        'choices' => [
                            ['choice_text' => 'Les systèmes de navigation par satellites', 'is_correct' => true],
                            ['choice_text' => 'Une règle graduée ordinaire', 'is_correct' => false],
                            ['choice_text' => 'Un thermomètre domestique simple', 'is_correct' => false],
                            ['choice_text' => 'Une bouteille d\'eau immobile', 'is_correct' => false],
                        ],
                        'explanation' => 'Les systèmes GNSS utilisent des horloges très précises et doivent intégrer des corrections relativistes.',
                    ],
                ],
            ],

            [
                'title' => 'Révision générale de la relativité restreinte',
                'description' => 'Réviser les concepts fondamentaux de vitesse de la lumière, temps, longueur, énergie et espace-temps.',
                'questions' => [
                    [
                        'question' => 'Quelle quantité est invariante pour tous les observateurs inertiels concernant la lumière dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse c', 'is_correct' => true],
                            ['choice_text' => 'La longueur d\'onde seule', 'is_correct' => false],
                            ['choice_text' => 'La fréquence seule', 'is_correct' => false],
                            ['choice_text' => 'La vitesse relative de la source', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse de la lumière dans le vide est la même pour tous les observateurs inertiels.',
                    ],
                    [
                        'question' => 'Quelle grandeur dépend du référentiel pour un objet en mouvement ?',
                        'choices' => [
                            ['choice_text' => 'La durée mesurée entre certains événements', 'is_correct' => true],
                            ['choice_text' => 'La vitesse de la lumière dans le vide', 'is_correct' => false],
                            ['choice_text' => 'La masse au repos de la particule', 'is_correct' => false],
                            ['choice_text' => 'La charge électrique intrinsèque', 'is_correct' => false],
                        ],
                        'explanation' => 'Les durées et les distances peuvent dépendre du référentiel, tandis que certaines quantités comme la masse au repos restent invariantes.',
                    ],
                    [
                        'question' => 'Quel effet relativiste est associé aux horloges en mouvement relatif ?',
                        'choices' => [
                            ['choice_text' => 'La dilatation du temps', 'is_correct' => true],
                            ['choice_text' => 'La poussée d\'Archimède', 'is_correct' => false],
                            ['choice_text' => 'La diffraction', 'is_correct' => false],
                            ['choice_text' => 'La conduction électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'La dilatation du temps décrit la différence de durée mesurée pour des horloges en mouvement relatif.',
                    ],
                    [
                        'question' => 'Quel effet relativiste réduit la longueur mesurée dans la direction du mouvement ?',
                        'choices' => [
                            ['choice_text' => 'La contraction des longueurs', 'is_correct' => true],
                            ['choice_text' => 'La dilatation temporelle', 'is_correct' => false],
                            ['choice_text' => 'La réfraction', 'is_correct' => false],
                            ['choice_text' => 'La dispersion', 'is_correct' => false],
                        ],
                        'explanation' => 'La contraction de Lorentz affecte la longueur parallèle au mouvement relatif.',
                    ],
                    [
                        'question' => 'Que vaut le facteur de Lorentz lorsque v est très inférieur à c ?',
                        'choices' => [
                            ['choice_text' => 'Il est proche de 1', 'is_correct' => true],
                            ['choice_text' => 'Il est proche de 0', 'is_correct' => false],
                            ['choice_text' => 'Il est toujours égal à c', 'is_correct' => false],
                            ['choice_text' => 'Il est toujours négatif', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque v/c est très petit, γ ≈ 1.',
                    ],
                    [
                        'question' => 'Quelle relation décrit l\'énergie de repos ?',
                        'choices' => [
                            ['choice_text' => 'E₀ = mc²', 'is_correct' => true],
                            ['choice_text' => 'E₀ = mv²', 'is_correct' => false],
                            ['choice_text' => 'E₀ = m/c²', 'is_correct' => false],
                            ['choice_text' => 'E₀ = mc', 'is_correct' => false],
                        ],
                        'explanation' => 'La masse au repos m correspond à une énergie de repos E₀ = mc².',
                    ],
                    [
                        'question' => 'Pourquoi un objet massif ne peut-il pas atteindre c ?',
                        'choices' => [
                            ['choice_text' => 'Parce que l\'énergie requise augmente sans limite lorsque v tend vers c', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'il perd toute sa masse avant c', 'is_correct' => false],
                            ['choice_text' => 'Parce que la gravité terrestre bloque toujours les objets', 'is_correct' => false],
                            ['choice_text' => 'Parce que le son est plus rapide que c', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation E = γmc² montre que l\'énergie totale diverge lorsque v tend vers c pour une particule massive.',
                    ],
                    [
                        'question' => 'Que signifie la relativité de la simultanéité ?',
                        'choices' => [
                            ['choice_text' => 'Deux événements simultanés pour un observateur peuvent ne pas l\'être pour un autre en mouvement relatif', 'is_correct' => true],
                            ['choice_text' => 'Tous les événements sont toujours simultanés', 'is_correct' => false],
                            ['choice_text' => 'La simultanéité dépend uniquement de la température', 'is_correct' => false],
                            ['choice_text' => 'Les événements n\'ont aucune position dans l\'espace-temps', 'is_correct' => false],
                        ],
                        'explanation' => 'La simultanéité absolue de la mécanique classique est remplacée par une simultanéité dépendant du référentiel.',
                    ],
                    [
                        'question' => 'Quelle transformation est utilisée pour relier deux référentiels inertiels en relativité restreinte ?',
                        'choices' => [
                            ['choice_text' => 'La transformation de Lorentz', 'is_correct' => true],
                            ['choice_text' => 'La transformation de Galilée uniquement à toute vitesse', 'is_correct' => false],
                            ['choice_text' => 'La transformation de Pascal', 'is_correct' => false],
                            ['choice_text' => 'La transformation de Hooke', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transformations de Lorentz assurent la cohérence entre les référentiels inertiels et l\'invariance de c.',
                    ],
                    [
                        'question' => 'Quelle approximation retrouve-t-on lorsque toutes les vitesses sont petites devant c ?',
                        'choices' => [
                            ['choice_text' => 'La mécanique classique', 'is_correct' => true],
                            ['choice_text' => 'La mécanique quantique exclusivement', 'is_correct' => false],
                            ['choice_text' => 'La thermodynamique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La relativité générale uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La relativité restreinte retrouve les résultats classiques lorsque les vitesses sont très faibles devant c.',
                    ],
                    [
                        'question' => 'Quel ensemble de notions est au cœur de la relativité restreinte ?',
                        'choices' => [
                            ['choice_text' => 'Référentiels inertiels, espace-temps, vitesse de la lumière et transformations de Lorentz', 'is_correct' => true],
                            ['choice_text' => 'Pression, viscosité, débit et masse volumique', 'is_correct' => false],
                            ['choice_text' => 'Température, entropie et chaleur uniquement', 'is_correct' => false],
                            ['choice_text' => 'Réfraction, diffraction et lentilles uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Ces concepts forment la base de la relativité restreinte et permettent de comprendre ses principaux effets.',
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
                    'duration' => 10,
                    'passing_score' => 50,
                    'total_marks' => 10,
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