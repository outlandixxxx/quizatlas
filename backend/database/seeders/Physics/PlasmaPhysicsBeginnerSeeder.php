<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PlasmaPhysicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'plasma-physics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction aux plasmas',
                'description' => 'Découvrir ce qu\'est un plasma, ses propriétés générales et sa place parmi les états de la matière.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce qu\'un plasma ?',
                        'choices' => [
                            ['choice_text' => 'Un gaz partiellement ou fortement ionisé contenant des particules chargées', 'is_correct' => true],
                            ['choice_text' => 'Un solide porté à très basse température', 'is_correct' => false],
                            ['choice_text' => 'Un liquide sans aucune particule chargée', 'is_correct' => false],
                            ['choice_text' => 'Un gaz composé uniquement de photons', 'is_correct' => false],
                        ],
                        'explanation' => 'Un plasma est un milieu contenant des particules chargées libres, notamment des électrons et des ions.',
                    ],
                    [
                        'question' => 'Pourquoi considère-t-on souvent le plasma comme un quatrième état de la matière ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'il possède des propriétés collectives différentes de celles des gaz neutres', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'il ne contient aucune particule', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il est nécessairement solide', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il n\'obéit à aucune loi physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le plasma possède des particules chargées et des interactions électromagnétiques collectives qui lui donnent un comportement spécifique.',
                    ],
                    [
                        'question' => 'Quelles particules sont principalement responsables de la charge négative dans un plasma ?',
                        'choices' => [
                            ['choice_text' => 'Les électrons', 'is_correct' => true],
                            ['choice_text' => 'Les neutrons', 'is_correct' => false],
                            ['choice_text' => 'Les photons', 'is_correct' => false],
                            ['choice_text' => 'Les noyaux neutres', 'is_correct' => false],
                        ],
                        'explanation' => 'Les électrons portent une charge électrique négative et constituent l\'un des principaux composants d\'un plasma.',
                    ],
                    [
                        'question' => 'Quelles particules sont généralement chargées positivement dans un plasma ?',
                        'choices' => [
                            ['choice_text' => 'Les ions positifs', 'is_correct' => true],
                            ['choice_text' => 'Les électrons', 'is_correct' => false],
                            ['choice_text' => 'Les neutrons', 'is_correct' => false],
                            ['choice_text' => 'Les photons', 'is_correct' => false],
                        ],
                        'explanation' => 'Un ion positif est un atome ou une molécule ayant perdu un ou plusieurs électrons.',
                    ],
                    [
                        'question' => 'Un plasma doit-il nécessairement être globalement chargé positivement ?',
                        'choices' => [
                            ['choice_text' => 'Non, il peut être globalement quasi neutre', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, sauf dans les solides', 'is_correct' => false],
                            ['choice_text' => 'Non, mais il doit toujours être globalement négatif', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreux plasmas sont quasi neutres à grande échelle : les charges positives et négatives se compensent presque.',
                    ],
                    [
                        'question' => 'Quel phénomène transforme un atome neutre en ion positif ?',
                        'choices' => [
                            ['choice_text' => 'L\'ionisation par perte d\'un ou plusieurs électrons', 'is_correct' => true],
                            ['choice_text' => 'La capture d\'un neutron', 'is_correct' => false],
                            ['choice_text' => 'La perte d\'un proton sans modification électronique', 'is_correct' => false],
                            ['choice_text' => 'La diminution de son volume uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsqu\'un atome perd des électrons, sa charge nette devient positive.',
                    ],
                    [
                        'question' => 'Les interactions électromagnétiques jouent-elles un rôle important dans un plasma ?',
                        'choices' => [
                            ['choice_text' => 'Oui, elles déterminent une grande partie de son comportement collectif', 'is_correct' => true],
                            ['choice_text' => 'Non, elles sont absentes dans les plasmas', 'is_correct' => false],
                            ['choice_text' => 'Seulement à température nulle', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans les plasmas solides', 'is_correct' => false],
                        ],
                        'explanation' => 'Les charges libres interagissent par l\'intermédiaire des champs électriques et magnétiques.',
                    ],
                    [
                        'question' => 'Le Soleil est-il principalement constitué de plasma ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, il est essentiellement solide', 'is_correct' => false],
                            ['choice_text' => 'Non, il est uniquement constitué de liquide', 'is_correct' => false],
                            ['choice_text' => 'Il est entièrement composé de neutrons froids', 'is_correct' => false],
                        ],
                        'explanation' => 'La matière du Soleil est principalement sous forme de plasma en raison de ses températures extrêmement élevées.',
                    ],
                    [
                        'question' => 'La foudre peut-elle produire un plasma ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, la foudre est uniquement mécanique', 'is_correct' => false],
                            ['choice_text' => 'Non, car un plasma ne peut exister sur Terre', 'is_correct' => false],
                            ['choice_text' => 'Seulement sous l\'eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le canal de la foudre contient un gaz fortement ionisé qui peut être considéré comme un plasma.',
                    ],
                    [
                        'question' => 'Quelle différence fondamentale distingue un plasma d\'un gaz neutre ordinaire ?',
                        'choices' => [
                            ['choice_text' => 'Un plasma contient une quantité significative de particules chargées libres et présente des effets collectifs', 'is_correct' => true],
                            ['choice_text' => 'Un plasma ne contient aucune particule', 'is_correct' => false],
                            ['choice_text' => 'Un gaz neutre contient toujours plus de charges qu\'un plasma', 'is_correct' => false],
                            ['choice_text' => 'Il n\'existe aucune différence physique', 'is_correct' => false],
                        ],
                        'explanation' => 'La présence de charges libres et leurs interactions collectives sont essentielles à la physique des plasmas.',
                    ],
                ],
            ],

            [
                'title' => 'Ionisation et recombinaison',
                'description' => 'Comprendre les processus qui créent et détruisent les particules chargées dans un plasma.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce que l\'ionisation ?',
                        'choices' => [
                            ['choice_text' => 'Le processus par lequel un atome ou une molécule perd ou gagne des électrons et devient chargé', 'is_correct' => true],
                            ['choice_text' => 'La transformation d\'un proton en neutron dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'La solidification d\'un gaz', 'is_correct' => false],
                            ['choice_text' => 'La disparition complète de la matière', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'ionisation modifie le nombre d\'électrons liés et produit des ions ou des électrons libres.',
                    ],
                    [
                        'question' => 'Quelle source d\'énergie peut ioniser un gaz ?',
                        'choices' => [
                            ['choice_text' => 'Un rayonnement suffisamment énergétique', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la gravité', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les ondes sonores', 'is_correct' => false],
                            ['choice_text' => 'La masse du récipient', 'is_correct' => false],
                        ],
                        'explanation' => 'Des photons énergétiques, des particules rapides ou des collisions peuvent fournir l\'énergie nécessaire à l\'ionisation.',
                    ],
                    [
                        'question' => 'Que signifie la recombinaison dans un plasma ?',
                        'choices' => [
                            ['choice_text' => 'Un électron libre se lie à un ion et réduit le nombre de particules chargées libres', 'is_correct' => true],
                            ['choice_text' => 'Deux neutrons deviennent un photon', 'is_correct' => false],
                            ['choice_text' => 'Tous les ions se transforment en solides', 'is_correct' => false],
                            ['choice_text' => 'Le plasma devient automatiquement liquide', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d\'une recombinaison, un électron est capturé par un ion, pouvant former un atome ou une molécule moins ionisée.',
                    ],
                    [
                        'question' => 'Que peut provoquer une température élevée dans un gaz ?',
                        'choices' => [
                            ['choice_text' => 'Une augmentation du nombre de collisions énergétiques pouvant favoriser l\'ionisation', 'is_correct' => true],
                            ['choice_text' => 'La disparition de tous les électrons', 'is_correct' => false],
                            ['choice_text' => 'La suppression des interactions électromagnétiques', 'is_correct' => false],
                            ['choice_text' => 'Une diminution nécessaire de l\'énergie des particules', 'is_correct' => false],
                        ],
                        'explanation' => 'Une température élevée augmente l\'énergie cinétique moyenne et peut favoriser les collisions ionisantes.',
                    ],
                    [
                        'question' => 'Lorsqu\'un électron libre se recombine avec un ion positif, la charge nette totale du couple :',
                        'choices' => [
                            ['choice_text' => 'Devient nulle si l\'ion capte exactement cet électron', 'is_correct' => true],
                            ['choice_text' => 'Devient toujours doublement positive', 'is_correct' => false],
                            ['choice_text' => 'Devient toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Ne peut jamais changer', 'is_correct' => false],
                        ],
                        'explanation' => 'La capture d\'un électron peut neutraliser la charge positive de l\'ion.',
                    ],
                    [
                        'question' => 'Quelle situation peut maintenir l\'ionisation d\'un plasma ?',
                        'choices' => [
                            ['choice_text' => 'Un apport continu d\'énergie ou des collisions suffisamment énergétiques', 'is_correct' => true],
                            ['choice_text' => 'L\'absence totale d\'énergie', 'is_correct' => false],
                            ['choice_text' => 'Une température toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'La disparition des électrons libres', 'is_correct' => false],
                        ],
                        'explanation' => 'Une source d\'énergie peut compenser les pertes liées à la recombinaison et maintenir un état ionisé.',
                    ],
                    [
                        'question' => 'Une décharge électrique dans un gaz peut-elle provoquer son ionisation ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, une décharge ne produit jamais de particules chargées', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans le vide absolu', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans un solide', 'is_correct' => false],
                        ],
                        'explanation' => 'Une décharge électrique accélère des électrons qui peuvent ioniser le gaz par collision.',
                    ],
                    [
                        'question' => 'Quel processus tend à réduire la quantité d\'ions et d\'électrons libres ?',
                        'choices' => [
                            ['choice_text' => 'La recombinaison', 'is_correct' => true],
                            ['choice_text' => 'L\'ionisation', 'is_correct' => false],
                            ['choice_text' => 'L\'accélération électrique', 'is_correct' => false],
                            ['choice_text' => 'Le chauffage du plasma dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'La recombinaison diminue le nombre de particules chargées libres.',
                    ],
                    [
                        'question' => 'L\'ionisation et la recombinaison sont-elles des processus qui peuvent se produire simultanément dans un plasma ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, l\'un empêche toujours totalement l\'autre', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans un solide', 'is_correct' => false],
                            ['choice_text' => 'Uniquement à température nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Un plasma peut être en équilibre entre création et disparition de particules chargées.',
                    ],
                    [
                        'question' => 'Que représente le degré d\'ionisation d\'un gaz ?',
                        'choices' => [
                            ['choice_text' => 'La proportion de particules qui se trouvent sous forme chargée', 'is_correct' => true],
                            ['choice_text' => 'La masse totale du gaz', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière dans le plasma', 'is_correct' => false],
                            ['choice_text' => 'La pression atmosphérique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le degré d\'ionisation indique dans quelle mesure la population du gaz est transformée en ions et électrons libres.',
                    ],
                ],
            ],

            [
                'title' => 'Température et paramètres du plasma',
                'description' => 'Découvrir les notions de température électronique, température ionique, densité et pression dans un plasma.',
                'questions' => [
                    [
                        'question' => 'Dans un plasma, la température est-elle toujours simplement identique pour toutes les particules ?',
                        'choices' => [
                            ['choice_text' => 'Pas nécessairement ; les électrons et les ions peuvent avoir des températures différentes', 'is_correct' => true],
                            ['choice_text' => 'Oui, dans tous les plasmas', 'is_correct' => false],
                            ['choice_text' => 'Non, parce qu\'un plasma n\'a jamais de température', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais seulement dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Un plasma peut être non équilibré et présenter des températures électroniques et ioniques différentes.',
                    ],
                    [
                        'question' => 'Qu\'appelle-t-on densité électronique dans un plasma ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre d\'électrons par unité de volume', 'is_correct' => true],
                            ['choice_text' => 'La masse totale des électrons', 'is_correct' => false],
                            ['choice_text' => 'La charge d\'un électron unique', 'is_correct' => false],
                            ['choice_text' => 'Le volume occupé par chaque photon', 'is_correct' => false],
                        ],
                        'explanation' => 'La densité électronique n_e mesure le nombre d\'électrons libres présents par unité de volume.',
                    ],
                    [
                        'question' => 'Quelle unité SI convient à une densité de particules ?',
                        'choices' => [
                            ['choice_text' => 'm⁻³', 'is_correct' => true],
                            ['choice_text' => 'm/s', 'is_correct' => false],
                            ['choice_text' => 'Pa·s', 'is_correct' => false],
                            ['choice_text' => 'J/m', 'is_correct' => false],
                        ],
                        'explanation' => 'Une densité numérique est un nombre de particules par unité de volume, donc en m⁻³.',
                    ],
                    [
                        'question' => 'Quelle grandeur augmente généralement lorsque l\'agitation thermique du plasma augmente ?',
                        'choices' => [
                            ['choice_text' => 'La température', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de protons de chaque ion', 'is_correct' => false],
                            ['choice_text' => 'La charge élémentaire', 'is_correct' => false],
                            ['choice_text' => 'La masse du neutron', 'is_correct' => false],
                        ],
                        'explanation' => 'La température caractérise le niveau moyen d\'agitation thermique des particules.',
                    ],
                    [
                        'question' => 'Un plasma peut-il être très chaud tout en étant relativement peu dense ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, température et densité sont nécessairement proportionnelles', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les solides', 'is_correct' => false],
                            ['choice_text' => 'Non, un plasma chaud doit toujours être dense', 'is_correct' => false],
                        ],
                        'explanation' => 'La température et la densité sont deux paramètres différents ; un plasma peut être chaud et très raréfié.',
                    ],
                    [
                        'question' => 'Quelle relation qualitative existe entre pression et agitation thermique dans un gaz ou un plasma ?',
                        'choices' => [
                            ['choice_text' => 'À densité fixée, une température plus élevée tend à augmenter la pression', 'is_correct' => true],
                            ['choice_text' => 'La pression devient toujours nulle lorsque la température augmente', 'is_correct' => false],
                            ['choice_text' => 'La pression est indépendante de la température dans toutes les situations', 'is_correct' => false],
                            ['choice_text' => 'La pression est déterminée uniquement par la masse des électrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un gaz approximativement idéal, la pression augmente avec la température lorsque la densité reste constante.',
                    ],
                    [
                        'question' => 'Dans un plasma suffisamment chaud, les collisions peuvent-elles produire de nouveaux électrons libres ?',
                        'choices' => [
                            ['choice_text' => 'Oui, par ionisation collisionnelle', 'is_correct' => true],
                            ['choice_text' => 'Non, les collisions ne modifient jamais l\'état électronique', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans un solide', 'is_correct' => false],
                            ['choice_text' => 'Non, car les électrons ne participent jamais aux collisions', 'is_correct' => false],
                        ],
                        'explanation' => 'Des collisions suffisamment énergétiques peuvent arracher des électrons aux atomes ou molécules.',
                    ],
                    [
                        'question' => 'Que signifie qu\'un plasma est froid par rapport à un autre plasma ?',
                        'choices' => [
                            ['choice_text' => 'Sa température ou l\'énergie moyenne de certaines populations de particules est plus faible', 'is_correct' => true],
                            ['choice_text' => 'Toutes ses particules sont immobiles', 'is_correct' => false],
                            ['choice_text' => 'Il ne contient aucun ion', 'is_correct' => false],
                            ['choice_text' => 'Il est nécessairement sous forme solide', 'is_correct' => false],
                        ],
                        'explanation' => 'Un plasma dit froid peut avoir une température globale ou certaines températures de particules plus faibles tout en restant ionisé.',
                    ],
                    [
                        'question' => 'La température d\'un plasma se mesure-t-elle toujours directement avec un thermomètre classique ?',
                        'choices' => [
                            ['choice_text' => 'Non, on utilise souvent des méthodes indirectes adaptées aux particules chargées', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours avec un thermomètre à liquide', 'is_correct' => false],
                            ['choice_text' => 'Oui, avec n\'importe quel thermomètre domestique', 'is_correct' => false],
                            ['choice_text' => 'Non, parce qu\'un plasma ne possède aucune énergie thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plasmas peuvent être très chauds, raréfiés ou non équilibrés, ce qui nécessite des méthodes de diagnostic spécifiques.',
                    ],
                    [
                        'question' => 'Pourquoi la densité de plasma est-elle importante ?',
                        'choices' => [
                            ['choice_text' => 'Elle influence les collisions, le transport et de nombreuses propriétés collectives', 'is_correct' => true],
                            ['choice_text' => 'Elle détermine uniquement la couleur du récipient', 'is_correct' => false],
                            ['choice_text' => 'Elle n\'a aucun effet physique', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace complètement la température', 'is_correct' => false],
                        ],
                        'explanation' => 'La densité influence fortement la fréquence des collisions et plusieurs comportements macroscopiques du plasma.',
                    ],
                ],
            ],

            [
                'title' => 'Champs électriques et magnétiques',
                'description' => 'Comprendre comment les champs électriques et magnétiques agissent sur les particules chargées d\'un plasma.',
                'questions' => [
                    [
                        'question' => 'Quelle force agit sur une particule chargée placée dans un champ électrique ?',
                        'choices' => [
                            ['choice_text' => 'Une force électrique F = qE', 'is_correct' => true],
                            ['choice_text' => 'Une force toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Uniquement une force gravitationnelle', 'is_correct' => false],
                            ['choice_text' => 'Une force indépendante de sa charge', 'is_correct' => false],
                        ],
                        'explanation' => 'Une charge q soumise à un champ électrique E subit une force qE.',
                    ],
                    [
                        'question' => 'Dans quelle direction agit la force électrique sur une charge positive ?',
                        'choices' => [
                            ['choice_text' => 'Dans la direction du champ électrique', 'is_correct' => true],
                            ['choice_text' => 'Toujours à l\'opposé du champ', 'is_correct' => false],
                            ['choice_text' => 'Toujours perpendiculairement au champ', 'is_correct' => false],
                            ['choice_text' => 'Elle n\'a aucune direction', 'is_correct' => false],
                        ],
                        'explanation' => 'Une charge positive est accélérée dans la direction du champ électrique.',
                    ],
                    [
                        'question' => 'Dans quelle direction agit la partie magnétique de la force de Lorentz sur une particule chargée en mouvement ?',
                        'choices' => [
                            ['choice_text' => 'Perpendiculairement à la vitesse et au champ magnétique', 'is_correct' => true],
                            ['choice_text' => 'Toujours exactement dans la direction de la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Toujours opposée à la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Toujours dans la direction du champ électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'La contribution magnétique s\'écrit q(v × B) et est perpendiculaire à v et B.',
                    ],
                    [
                        'question' => 'Un champ magnétique uniforme peut-il courber la trajectoire d\'un électron ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, un champ magnétique n\'agit jamais sur les électrons', 'is_correct' => false],
                            ['choice_text' => 'Seulement si l\'électron est immobile', 'is_correct' => false],
                            ['choice_text' => 'Non, la charge électrique n\'a aucun effet magnétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une charge en mouvement peut subir une force magnétique qui modifie la direction de sa vitesse.',
                    ],
                    [
                        'question' => 'Si une particule chargée se déplace exactement dans la direction d\'un champ magnétique uniforme, la force magnétique est :',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Maximale', 'is_correct' => false],
                            ['choice_text' => 'Toujours dirigée vers le champ', 'is_correct' => false],
                            ['choice_text' => 'Toujours opposée à la vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'La force magnétique dépend de v × B. Si v et B sont parallèles, leur produit vectoriel est nul.',
                    ],
                    [
                        'question' => 'Quel instrument peut produire un champ magnétique utilisé pour contrôler un plasma ?',
                        'choices' => [
                            ['choice_text' => 'Une bobine électromagnétique', 'is_correct' => true],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Un baromètre', 'is_correct' => false],
                            ['choice_text' => 'Une lentille optique classique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bobine parcourue par un courant peut créer un champ magnétique.',
                    ],
                    [
                        'question' => 'Pourquoi les champs magnétiques sont-ils très utilisés dans les dispositifs de confinement des plasmas ?',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent guider et contraindre le mouvement des particules chargées', 'is_correct' => true],
                            ['choice_text' => 'Ils rendent les particules électriquement neutres', 'is_correct' => false],
                            ['choice_text' => 'Ils détruisent automatiquement les ions', 'is_correct' => false],
                            ['choice_text' => 'Ils empêchent toute interaction entre particules', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules chargées suivent notamment des trajectoires courbées autour des lignes de champ magnétique.',
                    ],
                    [
                        'question' => 'Une particule chargée peut-elle être accélérée directement par un champ électrique ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, un champ électrique ne peut produire aucune force', 'is_correct' => false],
                            ['choice_text' => 'Seulement si elle est neutre', 'is_correct' => false],
                            ['choice_text' => 'Uniquement lorsqu\'elle est immobile et sans charge', 'is_correct' => false],
                        ],
                        'explanation' => 'La force électrique peut modifier la vitesse et donc l\'énergie cinétique d\'une particule chargée.',
                    ],
                    [
                        'question' => 'Quelle expression générale décrit la force électromagnétique sur une charge en mouvement ?',
                        'choices' => [
                            ['choice_text' => 'F = q(E + v × B)', 'is_correct' => true],
                            ['choice_text' => 'F = q(E - v)', 'is_correct' => false],
                            ['choice_text' => 'F = E/B', 'is_correct' => false],
                            ['choice_text' => 'F = q + E + B', 'is_correct' => false],
                        ],
                        'explanation' => 'La force de Lorentz est F = q(E + v × B).',
                    ],
                    [
                        'question' => 'Un champ électrique peut-il modifier l\'énergie cinétique d\'une particule chargée ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les neutrons', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans les solides', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ électrique peut effectuer un travail sur une charge et modifier son énergie cinétique.',
                    ],
                ],
            ],

            [
                'title' => 'Plasma et magnétisme',
                'description' => 'Explorer les trajectoires des particules chargées et les principaux effets magnétiques dans les plasmas.',
                'questions' => [
                    [
                        'question' => 'Comment se déplace généralement une particule chargée dans un champ magnétique uniforme lorsque sa vitesse possède une composante perpendiculaire au champ ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut suivre une trajectoire hélicoïdale autour des lignes de champ', 'is_correct' => true],
                            ['choice_text' => 'Elle reste nécessairement immobile', 'is_correct' => false],
                            ['choice_text' => 'Elle se déplace uniquement en ligne droite', 'is_correct' => false],
                            ['choice_text' => 'Elle disparaît du plasma', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mouvement perpendiculaire au champ produit une trajectoire circulaire, tandis que la composante parallèle peut rester uniforme.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on le rayon de la trajectoire circulaire associée au mouvement cyclotronique ?',
                        'choices' => [
                            ['choice_text' => 'Le rayon de Larmor', 'is_correct' => true],
                            ['choice_text' => 'Le rayon atomique', 'is_correct' => false],
                            ['choice_text' => 'Le rayon de Schwarzschild', 'is_correct' => false],
                            ['choice_text' => 'Le rayon acoustique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon de Larmor caractérise le mouvement circulaire d\'une particule chargée autour d\'une ligne de champ magnétique.',
                    ],
                    [
                        'question' => 'La force magnétique accélère-t-elle directement une particule en augmentant nécessairement sa vitesse ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle agit principalement sur la direction de la vitesse', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours dans le sens du mouvement', 'is_correct' => false],
                            ['choice_text' => 'Oui, en augmentant automatiquement son énergie cinétique', 'is_correct' => false],
                            ['choice_text' => 'Non, car les particules chargées ne ressentent pas les champs magnétiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La force magnétique est perpendiculaire à la vitesse et, dans un champ magnétique statique idéal, ne fournit pas directement de travail.',
                    ],
                    [
                        'question' => 'Quel mouvement de rotation d\'une particule chargée autour d\'une ligne de champ est associé au champ magnétique ?',
                        'choices' => [
                            ['choice_text' => 'Le mouvement cyclotronique', 'is_correct' => true],
                            ['choice_text' => 'Le mouvement brownien uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le mouvement harmonique d\'un pendule', 'is_correct' => false],
                            ['choice_text' => 'La rotation moléculaire du liquide uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La force magnétique peut produire une rotation de la particule autour d\'une ligne de champ.',
                    ],
                    [
                        'question' => 'Quelle particule tourne généralement dans le sens opposé à un ion positif sous un même champ magnétique, toutes choses égales par ailleurs ?',
                        'choices' => [
                            ['choice_text' => 'Un électron', 'is_correct' => true],
                            ['choice_text' => 'Un proton positif', 'is_correct' => false],
                            ['choice_text' => 'Un ion positif identique', 'is_correct' => false],
                            ['choice_text' => 'Un neutron', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'électron possède une charge négative, ce qui inverse le sens de la force magnétique par rapport à une charge positive.',
                    ],
                    [
                        'question' => 'Les ions et les électrons peuvent-ils être guidés par des champs magnétiques ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, uniquement les particules neutres', 'is_correct' => false],
                            ['choice_text' => 'Seulement les neutrons', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les photons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules chargées interagissent avec les champs magnétiques et peuvent être guidées ou confinées.',
                    ],
                    [
                        'question' => 'Pourquoi le champ magnétique est-il particulièrement efficace pour contrôler les électrons ?',
                        'choices' => [
                            ['choice_text' => 'Les électrons possèdent une charge électrique et sont donc sensibles à la force de Lorentz', 'is_correct' => true],
                            ['choice_text' => 'Les électrons sont toujours neutres', 'is_correct' => false],
                            ['choice_text' => 'Le champ magnétique agit uniquement sur la masse', 'is_correct' => false],
                            ['choice_text' => 'Les électrons ne possèdent aucune vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'Une particule chargée en mouvement subit une force magnétique proportionnelle à sa charge.',
                    ],
                    [
                        'question' => 'Un plasma peut-il transporter un courant électrique ?',
                        'choices' => [
                            ['choice_text' => 'Oui, grâce au mouvement des particules chargées', 'is_correct' => true],
                            ['choice_text' => 'Non, car il est toujours parfaitement isolant', 'is_correct' => false],
                            ['choice_text' => 'Uniquement s\'il ne contient aucun électron', 'is_correct' => false],
                            ['choice_text' => 'Non, le courant est impossible dans les gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'Les électrons et les ions mobiles permettent au plasma de transporter un courant électrique.',
                    ],
                    [
                        'question' => 'Un courant électrique dans un plasma peut-il produire un champ magnétique ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, seuls les aimants peuvent produire des champs magnétiques', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les solides', 'is_correct' => false],
                            ['choice_text' => 'Non, car les charges sont toujours immobiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les courants électriques produisent des champs magnétiques, ce qui est particulièrement important dans les plasmas conducteurs.',
                    ],
                    [
                        'question' => 'Pourquoi les plasmas peuvent-ils être influencés par des champs magnétiques même à distance ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le champ magnétique exerce une force sur les particules chargées en mouvement', 'is_correct' => true],
                            ['choice_text' => 'Parce que la gravité disparaît dans un plasma', 'is_correct' => false],
                            ['choice_text' => 'Parce que les particules deviennent toutes neutres', 'is_correct' => false],
                            ['choice_text' => 'Parce que le champ magnétique transforme les ions en photons', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'interaction électromagnétique permet au champ de modifier le mouvement des charges sans contact mécanique direct.',
                    ],
                ],
            ],

            [
                'title' => 'Décharges électriques et plasmas froids',
                'description' => 'Comprendre la formation des plasmas dans les décharges électriques et découvrir quelques plasmas non thermiques.',
                'questions' => [
                    [
                        'question' => 'Comment peut-on créer un plasma dans un gaz à basse pression ?',
                        'choices' => [
                            ['choice_text' => 'En appliquant une différence de potentiel suffisamment élevée pour accélérer et ioniser les particules', 'is_correct' => true],
                            ['choice_text' => 'En retirant toutes les particules du gaz', 'is_correct' => false],
                            ['choice_text' => 'En refroidissant nécessairement le gaz jusqu\'au zéro absolu', 'is_correct' => false],
                            ['choice_text' => 'En supprimant le champ électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une décharge électrique peut accélérer des électrons, provoquer des collisions ionisantes et amorcer un plasma.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un plasma froid ou non thermique ?',
                        'choices' => [
                            ['choice_text' => 'Un plasma dans lequel les électrons peuvent être beaucoup plus énergétiques que les ions et les neutres', 'is_correct' => true],
                            ['choice_text' => 'Un plasma dont toutes les particules sont absolument immobiles', 'is_correct' => false],
                            ['choice_text' => 'Un plasma qui ne contient aucune charge', 'is_correct' => false],
                            ['choice_text' => 'Un plasma nécessairement situé dans un congélateur', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un plasma non thermique, les électrons peuvent avoir une énergie élevée tandis que le gaz global reste relativement froid.',
                    ],
                    [
                        'question' => 'Quelle application utilise des plasmas pour traiter certaines surfaces ?',
                        'choices' => [
                            ['choice_text' => 'Le traitement et la modification de surface par plasma', 'is_correct' => true],
                            ['choice_text' => 'La mesure de la pression atmosphérique avec un baromètre', 'is_correct' => false],
                            ['choice_text' => 'La pesée des matériaux avec une balance', 'is_correct' => false],
                            ['choice_text' => 'La mesure de la masse d\'un neutron', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plasmas peuvent nettoyer, activer, graver ou déposer des matériaux sur des surfaces.',
                    ],
                    [
                        'question' => 'Les tubes fluorescents utilisent-ils un plasma ou une décharge gazeuse ?',
                        'choices' => [
                            ['choice_text' => 'Oui, une décharge électrique dans le gaz participe à la production de lumière', 'is_correct' => true],
                            ['choice_text' => 'Non, ils fonctionnent uniquement grâce à un liquide', 'is_correct' => false],
                            ['choice_text' => 'Non, ils ne contiennent aucune particule chargée', 'is_correct' => false],
                            ['choice_text' => 'Ils fonctionnent exclusivement par combustion', 'is_correct' => false],
                        ],
                        'explanation' => 'Une décharge électrique excite et ionise le gaz, ce qui produit notamment des rayonnements utilisés pour générer la lumière visible.',
                    ],
                    [
                        'question' => 'Pourquoi les électrons jouent-ils un rôle important dans une décharge gazeuse ?',
                        'choices' => [
                            ['choice_text' => 'Ils sont légers et peuvent être fortement accélérés par le champ électrique', 'is_correct' => true],
                            ['choice_text' => 'Ils sont plus lourds que tous les ions', 'is_correct' => false],
                            ['choice_text' => 'Ils sont électriquement neutres', 'is_correct' => false],
                            ['choice_text' => 'Ils ne peuvent jamais entrer en collision', 'is_correct' => false],
                        ],
                        'explanation' => 'Leur faible masse leur permet d\'acquérir rapidement de l\'énergie entre deux collisions.',
                    ],
                    [
                        'question' => 'Une décharge électrique peut-elle devenir auto-entretenue ?',
                        'choices' => [
                            ['choice_text' => 'Oui, si les processus d\'ionisation produisent suffisamment de nouveaux porteurs de charge', 'is_correct' => true],
                            ['choice_text' => 'Non, une décharge s\'arrête toujours immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans un solide parfait', 'is_correct' => false],
                            ['choice_text' => 'Uniquement sans champ électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une avalanche électronique et d\'autres mécanismes peuvent entretenir une décharge dans certaines conditions.',
                    ],
                    [
                        'question' => 'Quelle couleur peut être observée dans un plasma de néon ?',
                        'choices' => [
                            ['choice_text' => 'Une lumière caractéristique liée aux transitions électroniques du néon', 'is_correct' => true],
                            ['choice_text' => 'Uniquement une lumière noire invisible', 'is_correct' => false],
                            ['choice_text' => 'Toujours la même couleur que le Soleil', 'is_correct' => false],
                            ['choice_text' => 'Aucune lumière car les gaz ionisés ne rayonnent pas', 'is_correct' => false],
                        ],
                        'explanation' => 'Les atomes excités peuvent émettre des photons à des longueurs d\'onde caractéristiques.',
                    ],
                    [
                        'question' => 'Pourquoi un plasma de faible température globale peut-il quand même permettre des réactions chimiques actives ?',
                        'choices' => [
                            ['choice_text' => 'Les électrons peuvent posséder suffisamment d\'énergie pour activer ou ioniser certaines espèces', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les particules sont à une température infinie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ions n\'ont aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'une température faible signifie nécessairement une absence de mouvement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un plasma non thermique, la population électronique peut être énergique sans chauffer fortement tout le gaz.',
                    ],
                    [
                        'question' => 'Quelle technologie peut utiliser un plasma pour graver des structures fines sur un matériau ?',
                        'choices' => [
                            ['choice_text' => 'La gravure plasma', 'is_correct' => true],
                            ['choice_text' => 'La gravité quantique', 'is_correct' => false],
                            ['choice_text' => 'Le refroidissement magnétique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La compression acoustique seule', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plasmas sont largement utilisés pour graver et fabriquer des structures dans l\'industrie électronique.',
                    ],
                    [
                        'question' => 'Dans une décharge lumineuse, pourquoi les atomes émettent-ils de la lumière ?',
                        'choices' => [
                            ['choice_text' => 'Les collisions peuvent exciter les atomes, qui émettent ensuite des photons en revenant vers des niveaux d\'énergie plus bas', 'is_correct' => true],
                            ['choice_text' => 'Les noyaux deviennent soudainement visibles', 'is_correct' => false],
                            ['choice_text' => 'Les électrons disparaissent définitivement', 'is_correct' => false],
                            ['choice_text' => 'Les photons sont créés par la gravité uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transitions électroniques entre niveaux d\'énergie peuvent produire des photons caractéristiques.',
                    ],
                ],
            ],

            [
                'title' => 'Ondes et comportement collectif',
                'description' => 'Introduire les phénomènes collectifs dans les plasmas et les principales notions d\'ondes plasma.',
                'questions' => [
                    [
                        'question' => 'Pourquoi parle-t-on de comportement collectif dans un plasma ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le mouvement d\'une particule peut être influencé par les champs produits par de nombreuses autres particules', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les particules occupent exactement la même position', 'is_correct' => false],
                            ['choice_text' => 'Parce que les particules cessent toutes de bouger', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il n\'y a aucune interaction entre les particules', 'is_correct' => false],
                        ],
                        'explanation' => 'Les champs électromagnétiques générés par l\'ensemble des charges donnent au plasma un comportement collectif.',
                    ],
                    [
                        'question' => 'Une perturbation électrique peut-elle se propager dans un plasma sous forme d\'onde ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, les plasmas ne supportent aucune onde', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsqu\'ils sont solides', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans le vide sans particules', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plasmas peuvent supporter de nombreux modes d\'ondes électromagnétiques et électrostatiques.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une oscillation de plasma ?',
                        'choices' => [
                            ['choice_text' => 'Une oscillation collective des charges autour d\'une position d\'équilibre', 'is_correct' => true],
                            ['choice_text' => 'La rotation mécanique d\'un solide', 'is_correct' => false],
                            ['choice_text' => 'Une vibration des noyaux uniquement sans électrons', 'is_correct' => false],
                            ['choice_text' => 'Une oscillation qui existe uniquement dans les liquides', 'is_correct' => false],
                        ],
                        'explanation' => 'Les électrons peuvent osciller collectivement par rapport aux ions positifs sous l\'effet des forces électriques.',
                    ],
                    [
                        'question' => 'La fréquence caractéristique des oscillations électroniques d\'un plasma dépend notamment de :',
                        'choices' => [
                            ['choice_text' => 'La densité électronique', 'is_correct' => true],
                            ['choice_text' => 'La couleur du plasma uniquement', 'is_correct' => false],
                            ['choice_text' => 'La masse du récipient', 'is_correct' => false],
                            ['choice_text' => 'La température de la pièce uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence plasma électronique dépend notamment de la densité des électrons.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une onde de plasma ?',
                        'choices' => [
                            ['choice_text' => 'Une perturbation collective pouvant se propager dans le milieu ionisé', 'is_correct' => true],
                            ['choice_text' => 'Une onde sonore dans un solide uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une particule isolée', 'is_correct' => false],
                            ['choice_text' => 'Une réaction chimique sans mouvement de charges', 'is_correct' => false],
                        ],
                        'explanation' => 'Les interactions collectives permettent la propagation de différentes formes d\'ondes dans un plasma.',
                    ],
                    [
                        'question' => 'Les ondes dans un plasma peuvent-elles être influencées par un champ magnétique extérieur ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, le champ magnétique n\'a jamais d\'effet sur les ondes plasma', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les liquides', 'is_correct' => false],
                            ['choice_text' => 'Uniquement lorsque le plasma est neutre sans électrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ magnétique modifie le mouvement des particules chargées et peut donc modifier les modes d\'ondes.',
                    ],
                    [
                        'question' => 'Pourquoi les plasmas peuvent-ils présenter des oscillations collectives même si les électrons et ions subissent des collisions ?',
                        'choices' => [
                            ['choice_text' => 'Les forces électromagnétiques collectives peuvent coordonner le mouvement de nombreuses particules', 'is_correct' => true],
                            ['choice_text' => 'Parce que les collisions détruisent toujours les interactions électriques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ions n\'ont aucune charge', 'is_correct' => false],
                            ['choice_text' => 'Parce que les électrons sont parfaitement immobiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les effets collectifs peuvent subsister malgré les collisions, selon les paramètres du plasma.',
                    ],
                    [
                        'question' => 'Quelle propriété permet à un plasma de répondre collectivement à une perturbation électrique ?',
                        'choices' => [
                            ['choice_text' => 'La présence de particules chargées mobiles', 'is_correct' => true],
                            ['choice_text' => 'L\'absence complète de charges', 'is_correct' => false],
                            ['choice_text' => 'La rigidité mécanique d\'un solide', 'is_correct' => false],
                            ['choice_text' => 'La masse du récipient', 'is_correct' => false],
                        ],
                        'explanation' => 'Les charges libres peuvent se déplacer et générer des champs qui influencent les autres charges.',
                    ],
                    [
                        'question' => 'Une onde plasma transporte-t-elle nécessairement de la matière dans la même direction que sa propagation ?',
                        'choices' => [
                            ['choice_text' => 'Pas nécessairement ; une onde peut principalement transporter de l\'énergie et de l\'information', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours une quantité nette de matière', 'is_correct' => false],
                            ['choice_text' => 'Oui, sinon ce n\'est pas une onde', 'is_correct' => false],
                            ['choice_text' => 'Non, parce qu\'une onde ne peut jamais transporter d\'énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une onde est avant tout une perturbation qui se propage ; le déplacement moyen de matière peut être faible ou nul.',
                    ],
                    [
                        'question' => 'Pourquoi les phénomènes collectifs sont-ils importants en physique des plasmas ?',
                        'choices' => [
                            ['choice_text' => 'Ils permettent d\'expliquer des comportements qui ne peuvent pas être compris en étudiant chaque particule indépendamment', 'is_correct' => true],
                            ['choice_text' => 'Ils rendent toutes les particules identiques', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment complètement les champs électriques', 'is_correct' => false],
                            ['choice_text' => 'Ils concernent uniquement les solides', 'is_correct' => false],
                        ],
                        'explanation' => 'Les interactions à longue portée et les champs auto-cohérents sont essentiels pour comprendre le comportement collectif des plasmas.',
                    ],
                ],
            ],

            [
                'title' => 'Applications des plasmas',
                'description' => 'Découvrir les principales applications des plasmas dans l\'industrie, l\'énergie, l\'électronique et l\'espace.',
                'questions' => [
                    [
                        'question' => 'Quel domaine utilise les plasmas dans la fabrication de composants électroniques ?',
                        'choices' => [
                            ['choice_text' => 'La gravure et le dépôt de couches minces', 'is_correct' => true],
                            ['choice_text' => 'La mécanique des planètes uniquement', 'is_correct' => false],
                            ['choice_text' => 'La production de glace domestique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La mesure de la masse des océans uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plasmas sont utilisés pour graver des structures très fines et déposer certains matériaux dans l\'industrie des semi-conducteurs.',
                    ],
                    [
                        'question' => 'Quelle application cherche à utiliser un plasma pour produire de l\'énergie grâce à la fusion ?',
                        'choices' => [
                            ['choice_text' => 'La fusion thermonucléaire contrôlée', 'is_correct' => true],
                            ['choice_text' => 'La combustion chimique classique', 'is_correct' => false],
                            ['choice_text' => 'La fission électronique', 'is_correct' => false],
                            ['choice_text' => 'La réfrigération magnétique domestique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les recherches sur la fusion utilisent des plasmas très chauds contenant notamment des isotopes de l\'hydrogène.',
                    ],
                    [
                        'question' => 'Quel dispositif est conçu pour confiner un plasma chaud à l\'aide de champs magnétiques sous une géométrie toroïdale ?',
                        'choices' => [
                            ['choice_text' => 'Un tokamak', 'is_correct' => true],
                            ['choice_text' => 'Un baromètre', 'is_correct' => false],
                            ['choice_text' => 'Un spectroscope optique simple', 'is_correct' => false],
                            ['choice_text' => 'Une turbine hydraulique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le tokamak utilise des champs magnétiques pour confiner un plasma dans une configuration en forme de tore.',
                    ],
                    [
                        'question' => 'Quel autre type de dispositif utilise des champs magnétiques pour confiner un plasma de fusion ?',
                        'choices' => [
                            ['choice_text' => 'Le stellarator', 'is_correct' => true],
                            ['choice_text' => 'Le manomètre', 'is_correct' => false],
                            ['choice_text' => 'Le calorimètre domestique', 'is_correct' => false],
                            ['choice_text' => 'Le microscope optique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le stellarator est une autre configuration magnétique destinée au confinement des plasmas.',
                    ],
                    [
                        'question' => 'Pourquoi les plasmas sont-ils utilisés dans certaines lampes ?',
                        'choices' => [
                            ['choice_text' => 'Les excitations et désexcitations des particules peuvent produire de la lumière', 'is_correct' => true],
                            ['choice_text' => 'Les plasmas sont naturellement solides', 'is_correct' => false],
                            ['choice_text' => 'Les ions ne peuvent jamais émettre de rayonnement', 'is_correct' => false],
                            ['choice_text' => 'La lumière provient uniquement de la gravité', 'is_correct' => false],
                        ],
                        'explanation' => 'Les collisions excitent les espèces présentes, puis leur relaxation peut produire des photons.',
                    ],
                    [
                        'question' => 'Les plasmas existent-ils dans l\'espace interplanétaire ou interstellaire ?',
                        'choices' => [
                            ['choice_text' => 'Oui, de nombreux milieux spatiaux sont sous forme de plasma', 'is_correct' => true],
                            ['choice_text' => 'Non, l\'espace ne contient jamais de particules chargées', 'is_correct' => false],
                            ['choice_text' => 'Seulement à l\'intérieur des planètes solides', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans les océans', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vent solaire, le milieu interstellaire ionisé et de nombreuses régions astrophysiques contiennent du plasma.',
                    ],
                    [
                        'question' => 'Le vent solaire est principalement constitué de :',
                        'choices' => [
                            ['choice_text' => 'Particules chargées provenant de l\'atmosphère extérieure du Soleil', 'is_correct' => true],
                            ['choice_text' => 'Roches solides uniquement', 'is_correct' => false],
                            ['choice_text' => 'Liquides chauds uniquement', 'is_correct' => false],
                            ['choice_text' => 'Photons sans particules chargées', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vent solaire est un flux de plasma composé principalement d\'électrons et d\'ions.',
                    ],
                    [
                        'question' => 'Pourquoi les plasmas peuvent-ils être utilisés pour stériliser certaines surfaces ?',
                        'choices' => [
                            ['choice_text' => 'Les espèces réactives et les rayonnements produits peuvent endommager les micro-organismes', 'is_correct' => true],
                            ['choice_text' => 'Parce que le plasma gèle automatiquement les bactéries', 'is_correct' => false],
                            ['choice_text' => 'Parce que les électrons deviennent solides', 'is_correct' => false],
                            ['choice_text' => 'Parce que les plasmas suppriment toute matière instantanément', 'is_correct' => false],
                        ],
                        'explanation' => 'Certains plasmas génèrent des espèces réactives, des ions et des rayonnements capables d\'inactiver des micro-organismes.',
                    ],
                    [
                        'question' => 'Quelle application des plasmas concerne les moteurs ou systèmes de propulsion spatiale électriques ?',
                        'choices' => [
                            ['choice_text' => 'La propulsion ionique ou à plasma', 'is_correct' => true],
                            ['choice_text' => 'La propulsion par combustion du bois', 'is_correct' => false],
                            ['choice_text' => 'La propulsion hydraulique', 'is_correct' => false],
                            ['choice_text' => 'La propulsion par gravité terrestre uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Certains moteurs spatiaux accélèrent des ions ou d\'autres particules chargées à l\'aide de champs électriques et magnétiques.',
                    ],
                    [
                        'question' => 'Pourquoi la physique des plasmas est-elle importante en astrophysique ?',
                        'choices' => [
                            ['choice_text' => 'Une grande partie de la matière visible de l\'Univers se trouve sous forme de plasma', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les étoiles sont solides', 'is_correct' => false],
                            ['choice_text' => 'Parce que les champs magnétiques n\'existent que sur Terre', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'Univers ne contient aucun gaz neutre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les étoiles, le vent solaire et de nombreuses structures cosmiques sont dominés par la physique des plasmas.',
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