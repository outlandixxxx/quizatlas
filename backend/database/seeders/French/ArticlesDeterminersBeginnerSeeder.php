<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;
class ArticlesDeterminersBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'articles-determiners')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les articles définis au quotidien',
                'description' => 'Apprenez à choisir le, la, l’ et les lorsque vous parlez de personnes, d’objets ou de lieux identifiés.',
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Vous parlez à Karim du livre que vous lui avez montré hier : « ___ livre est sur la table. »',
                        'choices' => [
                            ['choice_text' => 'Le', 'is_correct' => true],
                            ['choice_text' => 'Un', 'is_correct' => false],
                            ['choice_text' => 'Une', 'is_correct' => false],
                            ['choice_text' => 'Des', 'is_correct' => false],
                        ],
                        'explanation' => 'Ce livre est déjà connu des deux personnes, donc on emploie l’article défini masculin singulier.',
                    ],
                    [
                        'question' => 'Quel article convient devant « maison » dans « ___ maison est très grande » ?',
                        'choices' => [
                            ['choice_text' => 'Le', 'is_correct' => false],
                            ['choice_text' => 'La', 'is_correct' => true],
                            ['choice_text' => 'Les', 'is_correct' => false],
                            ['choice_text' => 'L’', 'is_correct' => false],
                        ],
                        'explanation' => '« Maison » est féminin singulier et commence par une consonne : on dit « la maison ».',
                    ],
                    [
                        'question' => 'Laquelle de ces phrases emploie le bon article devant « radio » ?',
                        'choices' => [
                            ['choice_text' => 'J’écoute la radio dans la voiture le soir.', 'is_correct' => true],
                            ['choice_text' => 'J’écoute le radio dans la voiture le soir.', 'is_correct' => false],
                            ['choice_text' => 'J’écoute les radio dans la voiture le soir.', 'is_correct' => false],
                            ['choice_text' => 'J’écoute l’radio dans la voiture le soir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nom « radio » est féminin, d’où « la radio ». L’élision en « l’ » n’a lieu que devant une voyelle.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement formulée ?',
                        'choices' => [
                            ['choice_text' => 'Le étudiants sont dans la salle.', 'is_correct' => false],
                            ['choice_text' => 'Les étudiants sont dans la salle.', 'is_correct' => true],
                            ['choice_text' => 'Les étudiant sont dans la salle.', 'is_correct' => false],
                            ['choice_text' => 'La étudiants sont dans la salle.', 'is_correct' => false],
                        ],
                        'explanation' => 'Plusieurs étudiants appellent « les », et le nom prend lui aussi la marque du pluriel.',
                    ],
                    [
                        'question' => 'Après le cours, Yassine dit à Hind : « Nous allons à ___ bibliothèque. »',
                        'choices' => [
                            ['choice_text' => 'un', 'is_correct' => false],
                            ['choice_text' => 'des', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'la', 'is_correct' => true],
                        ],
                        'explanation' => 'Ils parlent de leur bibliothèque, qu’ils connaissent. « Bibliothèque » est féminin singulier, donc « la ».',
                    ],
                    [
                        'question' => 'Quelle forme est correcte devant « école » ?',
                        'choices' => [
                            ['choice_text' => 'l’école', 'is_correct' => true],
                            ['choice_text' => 'la école', 'is_correct' => false],
                            ['choice_text' => 'le école', 'is_correct' => false],
                            ['choice_text' => 'les école', 'is_correct' => false],
                        ],
                        'explanation' => 'Devant une voyelle, « la » s’élide en « l’ » : on dit « l’école ».',
                    ],
                    [
                        'question' => 'Dans la cour, ___ enfants jouent au ballon.',
                        'choices' => [
                            ['choice_text' => 'Le', 'is_correct' => false],
                            ['choice_text' => 'La', 'is_correct' => false],
                            ['choice_text' => 'L’', 'is_correct' => false],
                            ['choice_text' => 'Les', 'is_correct' => true],
                        ],
                        'explanation' => 'Il y a plusieurs enfants que l’on voit, donc on met « les ».',
                    ],
                    [
                        'question' => 'Laquelle de ces phrases est correcte ?',
                        'choices' => [
                            ['choice_text' => 'J’aime la chocolat.', 'is_correct' => false],
                            ['choice_text' => 'J’aime les chocolat.', 'is_correct' => false],
                            ['choice_text' => 'J’aime le chocolat.', 'is_correct' => true],
                            ['choice_text' => 'J’aime l’chocolat.', 'is_correct' => false],
                        ],
                        'explanation' => 'Chocolat est masculin singulier et commence par une consonne, donc « le chocolat ».',
                    ],
                    [
                        'question' => 'Vous montrez un objet précis à votre ami : « ___ ordinateur est très rapide. » Quel choix convient ?',
                        'choices' => [
                            ['choice_text' => 'La', 'is_correct' => false],
                            ['choice_text' => 'L’', 'is_correct' => true],
                            ['choice_text' => 'Les', 'is_correct' => false],
                            ['choice_text' => 'Une', 'is_correct' => false],
                        ],
                        'explanation' => '« Ordinateur » est masculin et commence par une voyelle, donc « le » s’élide en « l’ ».',
                    ],
                    [
                        'question' => 'Quelle forme est correcte devant « hôtel » ?',
                        'choices' => [
                            ['choice_text' => 'le hôtel', 'is_correct' => false],
                            ['choice_text' => 'la hôtel', 'is_correct' => false],
                            ['choice_text' => 'l’hôtel', 'is_correct' => true],
                            ['choice_text' => 'les hôtel', 'is_correct' => false],
                        ],
                        'explanation' => 'Le h de « hôtel » est muet : on élide l’article comme devant une voyelle et on dit « l’hôtel ».',
                    ],
                ],
            ],
            [
                'title' => 'Le, la, un, une : faire la différence',
                'description' => 'Distinguez les articles définis et indéfinis lorsqu’un nom est déjà connu ou qu’il est présenté pour la première fois.',
                'duration' => 25,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Vous entrez dans une boulangerie et vous n’avez encore rien choisi : « Je voudrais ___ croissant. »',
                        'choices' => [
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'un', 'is_correct' => true],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'les', 'is_correct' => false],
                        ],
                        'explanation' => 'Le croissant n’est pas encore choisi, on prend l’article indéfini masculin singulier : « un ».',
                    ],
                    [
                        'question' => 'Une phrase commence par : « J’ai acheté ___ voiture hier. » Quelle forme convient pour présenter une voiture nouvelle dans le récit ?',
                        'choices' => [
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'les', 'is_correct' => false],
                            ['choice_text' => 'l’', 'is_correct' => false],
                            ['choice_text' => 'une', 'is_correct' => true],
                        ],
                        'explanation' => 'La voiture apparaît pour la première fois, donc « une », qui est féminin comme « voiture ».',
                    ],
                    [
                        'question' => 'On a déjà parlé d’un film. Vous ajoutez : « ___ film était très drôle. »',
                        'choices' => [
                            ['choice_text' => 'Un', 'is_correct' => false],
                            ['choice_text' => 'Le', 'is_correct' => true],
                            ['choice_text' => 'Une', 'is_correct' => false],
                            ['choice_text' => 'Des', 'is_correct' => false],
                        ],
                        'explanation' => 'Le film a déjà été mentionné, il est donc connu : on passe à l’article défini « le ».',
                    ],
                    [
                        'question' => 'Laquelle de ces phrases présente un nouvel objet, puis le reprend ?',
                        'choices' => [
                            ['choice_text' => 'J’ai acheté le stylo. Un stylo écrit bien.', 'is_correct' => false],
                            ['choice_text' => 'J’ai acheté une stylo. La stylo écrit bien.', 'is_correct' => false],
                            ['choice_text' => 'J’ai acheté un stylo. Le stylo écrit bien.', 'is_correct' => true],
                            ['choice_text' => 'J’ai acheté des stylo. Le stylo écrivent bien.', 'is_correct' => false],
                        ],
                        'explanation' => '« Un » introduit le stylo, « le » le reprend ensuite. Les autres phrases inversent l’ordre ou se trompent de genre ou de nombre.',
                    ],
                    [
                        'question' => 'Complétez : « Elle cherche ___ appartement depuis deux mois. » Il s’agit de n’importe quel appartement qui lui convient.',
                        'choices' => [
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'un', 'is_correct' => true],
                            ['choice_text' => 'les', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle n’a aucun appartement précis en tête : on emploie l’article indéfini masculin « un ».',
                    ],
                    [
                        'question' => 'Quel choix complète naturellement : « Ferme ___ porte, s’il te plaît. » La porte est évidente pour les deux personnes.',
                        'choices' => [
                            ['choice_text' => 'la', 'is_correct' => true],
                            ['choice_text' => 'une', 'is_correct' => false],
                            ['choice_text' => 'des', 'is_correct' => false],
                            ['choice_text' => 'un', 'is_correct' => false],
                        ],
                        'explanation' => 'La porte est identifiée dans la situation, donc l’article défini féminin « la ».',
                    ],
                    [
                        'question' => 'Vous voyez plusieurs chiens dans un parc et vous dites à votre ami : « ___ chiens jouent ensemble. »',
                        'choices' => [
                            ['choice_text' => 'Un', 'is_correct' => false],
                            ['choice_text' => 'Une', 'is_correct' => false],
                            ['choice_text' => 'L’', 'is_correct' => false],
                            ['choice_text' => 'Les', 'is_correct' => true],
                        ],
                        'explanation' => 'Ce sont les chiens que vous regardez tous les deux, donc « les ».',
                    ],
                    [
                        'question' => 'La directrice annonce l’arrivée d’une personne que personne ne connaît encore. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Une nouveau collègue arrive aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Des nouveau collègues arrive aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Un nouvelle collègue arrive aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Un nouveau collègue arrive aujourd’hui.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le collègue est inconnu, donc « un ». Le déterminant et l’adjectif s’accordent avec le masculin singulier.',
                    ],
                    [
                        'question' => 'Hier, j’ai croisé ___ chat noir dans la rue. ___ chat m’a suivi jusqu’à la maison. Quelle suite est correcte ?',
                        'choices' => [
                            ['choice_text' => 'le / Un', 'is_correct' => false],
                            ['choice_text' => 'un / Un', 'is_correct' => false],
                            ['choice_text' => 'un / Le', 'is_correct' => true],
                            ['choice_text' => 'le / Le', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chat est présenté par « un », puis repris par « le » parce qu’il est désormais connu.',
                    ],
                    [
                        'question' => 'Complétez : « Il a acheté ___ ordinateur et ___ imprimante. » Les deux objets sont présentés pour la première fois.',
                        'choices' => [
                            ['choice_text' => 'l’ / la', 'is_correct' => false],
                            ['choice_text' => 'un / une', 'is_correct' => true],
                            ['choice_text' => 'le / un', 'is_correct' => false],
                            ['choice_text' => 'des / les', 'is_correct' => false],
                        ],
                        'explanation' => 'Ordinateur est masculin, imprimante est féminin. Comme ils sont nouveaux, on emploie « un » et « une ».',
                    ],
                    [
                        'question' => 'Quelle paire convient pour « ___ ami » et « ___ amie » quand on mentionne ces deux personnes pour la première fois ?',
                        'choices' => [
                            ['choice_text' => 'un / une', 'is_correct' => true],
                            ['choice_text' => 'le / la', 'is_correct' => false],
                            ['choice_text' => 'l’ / l’', 'is_correct' => false],
                            ['choice_text' => 'un / un', 'is_correct' => false],
                        ],
                        'explanation' => 'On n’a pas encore parlé d’eux, donc l’article est indéfini : « un ami » et « une amie ».',
                    ],
                ],
            ],
            [
                'title' => 'Du, de la, de l\', des : les quantités non précises',
                'description' => 'Découvrez les articles partitifs et le pluriel « des » pour parler de quantités non comptées ou de plusieurs éléments.',
                'duration' => 25,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Au petit-déjeuner, Amine boit une quantité non précisée de lait. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Je bois de la lait.', 'is_correct' => false],
                            ['choice_text' => 'Je bois des lait.', 'is_correct' => false],
                            ['choice_text' => 'Je bois du lait.', 'is_correct' => true],
                            ['choice_text' => 'Je bois de l’lait.', 'is_correct' => false],
                        ],
                        'explanation' => '« Lait » est masculin singulier. Pour une quantité non précisée, on emploie le partitif « du ».',
                    ],
                    [
                        'question' => 'Chaque soir, Meriem prend un peu de soupe, sans compter. Complétez : « Elle mange ___ soupe. »',
                        'choices' => [
                            ['choice_text' => 'du', 'is_correct' => false],
                            ['choice_text' => 'de la', 'is_correct' => true],
                            ['choice_text' => 'des', 'is_correct' => false],
                            ['choice_text' => 'de l’', 'is_correct' => false],
                        ],
                        'explanation' => '« Soupe » est féminin et commence par une consonne : on emploie le partitif « de la ».',
                    ],
                    [
                        'question' => 'Quel choix convient dans « Nous achetons ___ huile d’olive » ?',
                        'choices' => [
                            ['choice_text' => 'de l’', 'is_correct' => true],
                            ['choice_text' => 'du', 'is_correct' => false],
                            ['choice_text' => 'de la', 'is_correct' => false],
                            ['choice_text' => 'des', 'is_correct' => false],
                        ],
                        'explanation' => '« Huile » est féminin, mais il commence par une voyelle : « de la » devient « de l’ ».',
                    ],
                    [
                        'question' => 'Au marché, Lila achète plusieurs pommes. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'J’achète de la pommes.', 'is_correct' => false],
                            ['choice_text' => 'J’achète du pommes.', 'is_correct' => false],
                            ['choice_text' => 'J’achète des pommes.', 'is_correct' => true],
                            ['choice_text' => 'J’achète une pommes.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pommes est au pluriel : on emploie « des ».',
                    ],
                    [
                        'question' => 'Vous préparez une quantité non précisée de riz. Quelle phrase choisissez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Je prépare du riz.', 'is_correct' => true],
                            ['choice_text' => 'Je prépare de la riz.', 'is_correct' => false],
                            ['choice_text' => 'Je prépare de l’riz.', 'is_correct' => false],
                            ['choice_text' => 'Je prépare une riz.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le riz est masculin et on le prend ici sans compter, d’où « du riz ».',
                    ],
                    [
                        'question' => 'Quel mot complète correctement : « Elle met ___ beurre dans la poêle » ?',
                        'choices' => [
                            ['choice_text' => 'de la', 'is_correct' => false],
                            ['choice_text' => 'des', 'is_correct' => false],
                            ['choice_text' => 'une', 'is_correct' => false],
                            ['choice_text' => 'du', 'is_correct' => true],
                        ],
                        'explanation' => 'Beurre est masculin singulier, et on ne compte pas la quantité : « du beurre ».',
                    ],
                    [
                        'question' => 'Dans « Nous achetons des tomates », que signifie « des » ?',
                        'choices' => [
                            ['choice_text' => 'Une tomate bien précise que tout le monde connaît.', 'is_correct' => false],
                            ['choice_text' => 'Une matière non comptée, comme de la purée.', 'is_correct' => false],
                            ['choice_text' => 'Plusieurs tomates, sans dire lesquelles ni combien.', 'is_correct' => true],
                            ['choice_text' => 'Un nombre précis de tomates.', 'is_correct' => false],
                        ],
                        'explanation' => '« Des » est l’article indéfini pluriel : il désigne plusieurs éléments sans les identifier.',
                    ],
                    [
                        'question' => 'Pour traverser la rivière à la nage, il faut ___ courage.',
                        'choices' => [
                            ['choice_text' => 'de la', 'is_correct' => false],
                            ['choice_text' => 'des', 'is_correct' => false],
                            ['choice_text' => 'de l’', 'is_correct' => false],
                            ['choice_text' => 'du', 'is_correct' => true],
                        ],
                        'explanation' => 'Courage est masculin singulier et ne se compte pas : on emploie « du courage ».',
                    ],
                    [
                        'question' => 'Laquelle de ces phrases décrit correctement un petit-déjeuner simple ?',
                        'choices' => [
                            ['choice_text' => 'Il boit du café et mange du pain.', 'is_correct' => true],
                            ['choice_text' => 'Il boit de la café et mange du pain.', 'is_correct' => false],
                            ['choice_text' => 'Il boit des café et mange de la pain.', 'is_correct' => false],
                            ['choice_text' => 'Il boit un café et mange une pain.', 'is_correct' => false],
                        ],
                        'explanation' => 'Café et pain sont masculins singuliers, on les prend sans compter : « du café » et « du pain ».',
                    ],
                    [
                        'question' => 'Camille dit « Je prends un gâteau », puis « Je prends du gâteau ». Qu’est-ce qui change ?',
                        'choices' => [
                            ['choice_text' => 'Un gâteau est au pluriel, du gâteau est au singulier.', 'is_correct' => false],
                            ['choice_text' => 'Un gâteau entier d’un côté, une quantité non précisée de gâteau de l’autre.', 'is_correct' => true],
                            ['choice_text' => 'Un gâteau est féminin, du gâteau est masculin.', 'is_correct' => false],
                            ['choice_text' => 'Du gâteau désigne un gâteau précis que l’on connaît déjà.', 'is_correct' => false],
                        ],
                        'explanation' => '« Un » compte un gâteau entier, alors que « du » prend une part, sans dire combien.',
                    ],
                    [
                        'question' => 'Pour le dîner, nous avons ___ salade et ___ fromage.',
                        'choices' => [
                            ['choice_text' => 'du / de la', 'is_correct' => false],
                            ['choice_text' => 'des / un', 'is_correct' => false],
                            ['choice_text' => 'une / une', 'is_correct' => false],
                            ['choice_text' => 'de la / du', 'is_correct' => true],
                        ],
                        'explanation' => 'Salade est féminin : « de la ». Fromage est masculin : « du ». Les deux sont pris sans être comptés.',
                    ],
                ],
            ],
            [
                'title' => 'Les déterminants démonstratifs',
                'description' => 'Apprenez à employer ce, cet, cette et ces pour montrer ou désigner des personnes, des objets et des lieux.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Complétez : « ___ livre est intéressant. »',
                        'choices' => [
                            ['choice_text' => 'Cette', 'is_correct' => false],
                            ['choice_text' => 'Ces', 'is_correct' => false],
                            ['choice_text' => 'Cet', 'is_correct' => false],
                            ['choice_text' => 'Ce', 'is_correct' => true],
                        ],
                        'explanation' => 'Livre est masculin singulier et commence par une consonne : on emploie « ce ».',
                    ],
                    [
                        'question' => 'Le professeur désigne du doigt un étudiant de la classe : « ___ étudiant a bien travaillé. »',
                        'choices' => [
                            ['choice_text' => 'Ce', 'is_correct' => false],
                            ['choice_text' => 'Cette', 'is_correct' => false],
                            ['choice_text' => 'Cet', 'is_correct' => true],
                            ['choice_text' => 'Ces', 'is_correct' => false],
                        ],
                        'explanation' => 'Étudiant est masculin et commence par une voyelle, donc « ce » devient « cet ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte avec le nom « maison » ?',
                        'choices' => [
                            ['choice_text' => 'Ce maison est ancienne.', 'is_correct' => false],
                            ['choice_text' => 'Cette maison est ancienne.', 'is_correct' => true],
                            ['choice_text' => 'Cet maison est ancienne.', 'is_correct' => false],
                            ['choice_text' => 'Ces maison est ancienne.', 'is_correct' => false],
                        ],
                        'explanation' => 'Maison est féminin singulier, donc « cette ».',
                    ],
                    [
                        'question' => 'Vous montrez plusieurs stylos. Quel déterminant convient ?',
                        'choices' => [
                            ['choice_text' => 'Ce', 'is_correct' => false],
                            ['choice_text' => 'Ces', 'is_correct' => true],
                            ['choice_text' => 'Cet', 'is_correct' => false],
                            ['choice_text' => 'Cette', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour désigner plusieurs objets, on emploie « ces », que le nom soit masculin ou féminin.',
                    ],
                    [
                        'question' => 'Dans la cour, Adam montre un garçon à son frère : « ___ garçon est mon voisin. »',
                        'choices' => [
                            ['choice_text' => 'Cet', 'is_correct' => false],
                            ['choice_text' => 'Cette', 'is_correct' => false],
                            ['choice_text' => 'Ce', 'is_correct' => true],
                            ['choice_text' => 'Ces', 'is_correct' => false],
                        ],
                        'explanation' => 'Garçon est masculin singulier et commence par une consonne, donc « ce garçon ».',
                    ],
                    [
                        'question' => 'Quelle phrase convient si vous montrez une seule lampe ?',
                        'choices' => [
                            ['choice_text' => 'Ce lampe est neuve.', 'is_correct' => false],
                            ['choice_text' => 'Cet lampe est neuve.', 'is_correct' => false],
                            ['choice_text' => 'Cette lampe est neuve.', 'is_correct' => true],
                            ['choice_text' => 'Ces lampe est neuve.', 'is_correct' => false],
                        ],
                        'explanation' => 'Lampe est féminin singulier : « cette lampe ».',
                    ],
                    [
                        'question' => 'Vous entrez dans une salle et vous désignez plusieurs chaises. Quelle phrase est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Ces chaises sont libres.', 'is_correct' => true],
                            ['choice_text' => 'Cette chaises sont libres.', 'is_correct' => false],
                            ['choice_text' => 'Ce chaises sont libres.', 'is_correct' => false],
                            ['choice_text' => 'Cet chaises sont libres.', 'is_correct' => false],
                        ],
                        'explanation' => 'Plusieurs chaises : on emploie « ces », et le verbe se met au pluriel.',
                    ],
                    [
                        'question' => 'Le gardien montre l’étage : « ___ appartement est à louer. » Quel déterminant convient ?',
                        'choices' => [
                            ['choice_text' => 'Cet', 'is_correct' => true],
                            ['choice_text' => 'Ce', 'is_correct' => false],
                            ['choice_text' => 'Cette', 'is_correct' => false],
                            ['choice_text' => 'Ces', 'is_correct' => false],
                        ],
                        'explanation' => 'Appartement commence par une voyelle et il est masculin, d’où « cet appartement ».',
                    ],
                    [
                        'question' => 'Vous montrez deux écoles voisines à des touristes. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Cet écoles sont proches.', 'is_correct' => false],
                            ['choice_text' => 'Ces écoles sont proches.', 'is_correct' => true],
                            ['choice_text' => 'Cette écoles sont proches.', 'is_correct' => false],
                            ['choice_text' => 'Ce écoles sont proches.', 'is_correct' => false],
                        ],
                        'explanation' => 'Écoles est au pluriel : on dit « ces », même si le nom commence par une voyelle.',
                    ],
                    [
                        'question' => 'Marie présente sa meilleure amie : « ___ amie s’appelle Sarah. »',
                        'choices' => [
                            ['choice_text' => 'Cet', 'is_correct' => false],
                            ['choice_text' => 'Ce', 'is_correct' => false],
                            ['choice_text' => 'Ces', 'is_correct' => false],
                            ['choice_text' => 'Cette', 'is_correct' => true],
                        ],
                        'explanation' => 'Amie est féminin. Le nom commence par une voyelle, mais « cet » est réservé au masculin : on dit « cette amie ».',
                    ],
                    [
                        'question' => 'Quelle paire est correctement associée ?',
                        'choices' => [
                            ['choice_text' => 'ce livre / cette page', 'is_correct' => true],
                            ['choice_text' => 'cette livre / ce page', 'is_correct' => false],
                            ['choice_text' => 'cet livre / cette page', 'is_correct' => false],
                            ['choice_text' => 'ce livre / cet page', 'is_correct' => false],
                        ],
                        'explanation' => 'Livre est masculin : « ce livre ». Page est féminin : « cette page ».',
                    ],
                    [
                        'question' => 'Léa montre un homme à son amie. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ce homme est mon oncle.', 'is_correct' => false],
                            ['choice_text' => 'Cette homme est mon oncle.', 'is_correct' => false],
                            ['choice_text' => 'Ces homme est mon oncle.', 'is_correct' => false],
                            ['choice_text' => 'Cet homme est mon oncle.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le h de « homme » est muet, donc on traite le mot comme s’il commençait par une voyelle : « cet homme ».',
                    ],
                ],
            ],
            [
                'title' => 'Les déterminants possessifs',
                'description' => 'Utilisez mon, ma, mes, ton, ta, tes, son, sa, ses, notre, nos, votre et vos dans des situations simples de possession.',
                'duration' => 30,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Samir dit « je » et parle de son frère à un ami : « ___ frère habite ici. »',
                        'choices' => [
                            ['choice_text' => 'Ma', 'is_correct' => false],
                            ['choice_text' => 'Mes', 'is_correct' => false],
                            ['choice_text' => 'Mon', 'is_correct' => true],
                            ['choice_text' => 'Notre', 'is_correct' => false],
                        ],
                        'explanation' => 'Frère est masculin singulier et le possesseur est « je » : « mon frère ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte pour parler de votre sœur ?',
                        'choices' => [
                            ['choice_text' => 'Mon sœur est médecin.', 'is_correct' => false],
                            ['choice_text' => 'Mes sœur est médecin.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœurs est médecin.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœur est médecin.', 'is_correct' => true],
                        ],
                        'explanation' => 'Sœur est féminin singulier : on emploie « ma ».',
                    ],
                    [
                        'question' => 'Vous parlez de plusieurs livres qui vous appartiennent. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Mes livres sont sur le bureau.', 'is_correct' => true],
                            ['choice_text' => 'Ma livres sont sur le bureau.', 'is_correct' => false],
                            ['choice_text' => 'Mon livres sont sur le bureau.', 'is_correct' => false],
                            ['choice_text' => 'Mes livre est sur le bureau.', 'is_correct' => false],
                        ],
                        'explanation' => 'Livres est au pluriel, donc « mes », et le verbe se met au pluriel lui aussi.',
                    ],
                    [
                        'question' => 'Karim demande à Samir : « Où est ___ téléphone ? »',
                        'choices' => [
                            ['choice_text' => 'ta', 'is_correct' => false],
                            ['choice_text' => 'tes', 'is_correct' => false],
                            ['choice_text' => 'ton', 'is_correct' => true],
                            ['choice_text' => 'ma', 'is_correct' => false],
                        ],
                        'explanation' => 'Téléphone est masculin singulier et on parle à « tu » : « ton téléphone ».',
                    ],
                    [
                        'question' => 'Vous tutoyez Sara et vous parlez de ses chaussures. Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'Ta chaussures sont neuves.', 'is_correct' => false],
                            ['choice_text' => 'Tes chaussures sont neuves.', 'is_correct' => true],
                            ['choice_text' => 'Ton chaussures est neuve.', 'is_correct' => false],
                            ['choice_text' => 'Tes chaussure est neuve.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les chaussures appartiennent à la personne que l’on tutoie, et elles sont plusieurs : « tes chaussures ».',
                    ],
                    [
                        'question' => 'Elle parle de son appartement. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Sa appartement est lumineuse.', 'is_correct' => false],
                            ['choice_text' => 'Son appartement est lumineux.', 'is_correct' => true],
                            ['choice_text' => 'Ses appartement est lumineux.', 'is_correct' => false],
                            ['choice_text' => 'Son appartements sont lumineux.', 'is_correct' => false],
                        ],
                        'explanation' => 'Appartement est masculin singulier et commence par une voyelle : « son appartement ».',
                    ],
                    [
                        'question' => 'Elle parle de sa voiture. Quel choix convient ?',
                        'choices' => [
                            ['choice_text' => 'Sa voiture', 'is_correct' => true],
                            ['choice_text' => 'Son voiture', 'is_correct' => false],
                            ['choice_text' => 'Ses voiture', 'is_correct' => false],
                            ['choice_text' => 'Sa voitures', 'is_correct' => false],
                        ],
                        'explanation' => 'Voiture est féminin singulier, donc « sa voiture ».',
                    ],
                    [
                        'question' => 'Quel groupe convient pour parler de plusieurs projets appartenant à une même personne ?',
                        'choices' => [
                            ['choice_text' => 'Son projets', 'is_correct' => false],
                            ['choice_text' => 'Sa projets', 'is_correct' => false],
                            ['choice_text' => 'Ses projets', 'is_correct' => true],
                            ['choice_text' => 'Ses projet', 'is_correct' => false],
                        ],
                        'explanation' => 'Projets est au pluriel : avec « il » ou « elle », le possessif est « ses ».',
                    ],
                    [
                        'question' => 'Nous parlons de notre maison. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nos maison est petite.', 'is_correct' => false],
                            ['choice_text' => 'Notre maisons sont petites.', 'is_correct' => false],
                            ['choice_text' => 'Notre maison sont petite.', 'is_correct' => false],
                            ['choice_text' => 'Notre maison est petite.', 'is_correct' => true],
                        ],
                        'explanation' => 'Maison est au singulier : avec « nous », on emploie « notre ».',
                    ],
                    [
                        'question' => 'Karim et Lina parlent de leurs amis communs en disant « nous ». Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'Notre amis arrivent.', 'is_correct' => false],
                            ['choice_text' => 'Nos ami arrive.', 'is_correct' => false],
                            ['choice_text' => 'Nos amis arrivent.', 'is_correct' => true],
                            ['choice_text' => 'Notre ami arrivent.', 'is_correct' => false],
                        ],
                        'explanation' => 'Amis est au pluriel : le possessif est « nos ».',
                    ],
                    [
                        'question' => 'Vous parlez à plusieurs personnes de plusieurs documents. Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'Votre documents sont prêts.', 'is_correct' => false],
                            ['choice_text' => 'Vos documents sont prêts.', 'is_correct' => true],
                            ['choice_text' => 'Vos document est prêt.', 'is_correct' => false],
                            ['choice_text' => 'Votre document sont prêts.', 'is_correct' => false],
                        ],
                        'explanation' => 'On s’adresse à plusieurs personnes et il y a plusieurs documents : « vos ».',
                    ],
                    [
                        'question' => 'Hanane présente Sarah à sa mère. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ma amie Sarah arrive demain.', 'is_correct' => false],
                            ['choice_text' => 'Mes amie Sarah arrive demain.', 'is_correct' => false],
                            ['choice_text' => 'Mon amies Sarah arrive demain.', 'is_correct' => false],
                            ['choice_text' => 'Mon amie Sarah arrive demain.', 'is_correct' => true],
                        ],
                        'explanation' => 'Devant un nom féminin qui commence par une voyelle, on emploie « mon » pour éviter la rencontre de deux voyelles : « mon amie ».',
                    ],
                    [
                        'question' => 'Quelle phrase montre la différence entre « son » et « sa » ?',
                        'choices' => [
                            ['choice_text' => 'Il cherche son téléphone et sa clé partout.', 'is_correct' => true],
                            ['choice_text' => 'Il cherche sa téléphone et son clé.', 'is_correct' => false],
                            ['choice_text' => 'Il cherche ses téléphone et sa clé.', 'is_correct' => false],
                            ['choice_text' => 'Il cherche son téléphones et son clé.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le possessif s’accorde avec l’objet possédé : « son téléphone » (masculin) et « sa clé » (féminin).',
                    ],
                ],
            ],
            [
                'title' => 'Articles et négation',
                'description' => 'Observez comment les articles se comportent dans les phrases négatives et après des expressions de quantité simples.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase dit que vous n’avez aucune voiture ?',
                        'choices' => [
                            ['choice_text' => 'Je n’ai pas du voiture.', 'is_correct' => false],
                            ['choice_text' => 'Je n’ai pas des voiture.', 'is_correct' => false],
                            ['choice_text' => 'Je n’ai pas de voiture.', 'is_correct' => true],
                            ['choice_text' => 'Je n’ai pas de la voiture.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « ne ... pas », l’article indéfini devient « de » : « pas de voiture ».',
                    ],
                    [
                        'question' => 'Complétez : « Nous n’avons pas ___ pain. »',
                        'choices' => [
                            ['choice_text' => 'de', 'is_correct' => true],
                            ['choice_text' => 'du', 'is_correct' => false],
                            ['choice_text' => 'des', 'is_correct' => false],
                            ['choice_text' => 'de la', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une phrase négative, le partitif « du » devient « de » : « pas de pain ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte pour dire que la table est vide de livres ?',
                        'choices' => [
                            ['choice_text' => 'Il n’y a pas des livres sur la table.', 'is_correct' => false],
                            ['choice_text' => 'Il n’y a pas du livres sur la table.', 'is_correct' => false],
                            ['choice_text' => 'Il n’y a pas de les livres sur la table.', 'is_correct' => false],
                            ['choice_text' => 'Il n’y a pas de livres sur la table.', 'is_correct' => true],
                        ],
                        'explanation' => '« Des » devient « de » après la négation : « il n’y a pas de livres ».',
                    ],
                    [
                        'question' => 'Karim donne son avis sur le café en général. Quelle phrase dit qu’il ne l’aime pas ?',
                        'choices' => [
                            ['choice_text' => 'Je n’aime pas le café.', 'is_correct' => true],
                            ['choice_text' => 'Je n’aime pas de café.', 'is_correct' => false],
                            ['choice_text' => 'Je n’aime pas du café.', 'is_correct' => false],
                            ['choice_text' => 'Je n’aime pas de le café.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec un verbe comme « aimer », on garde l’article défini, même à la forme négative, parce qu’on parle du café en général.',
                    ],
                    [
                        'question' => 'Au dîner, Meriem a refusé la soupe. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Elle n’a pas mangé de la soupe.', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a pas mangé du soupe.', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a pas mangé des soupe.', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a pas mangé de soupe.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le partitif « de la » devient « de » après la négation : « pas de soupe ».',
                    ],
                    [
                        'question' => 'Complétez : « Elle achète beaucoup ___ fruits. »',
                        'choices' => [
                            ['choice_text' => 'de', 'is_correct' => true],
                            ['choice_text' => 'des', 'is_correct' => false],
                            ['choice_text' => 'du', 'is_correct' => false],
                            ['choice_text' => 'les', 'is_correct' => false],
                        ],
                        'explanation' => 'Après un mot de quantité comme « beaucoup », on emploie « de » : « beaucoup de fruits ».',
                    ],
                    [
                        'question' => 'Dans un café, Léo demande ___ dans son thé. Quelle formule est correcte ?',
                        'choices' => [
                            ['choice_text' => 'un peu du sucre', 'is_correct' => false],
                            ['choice_text' => 'un peu de sucre', 'is_correct' => true],
                            ['choice_text' => 'un peu de le sucre', 'is_correct' => false],
                            ['choice_text' => 'un peu de la sucre', 'is_correct' => false],
                        ],
                        'explanation' => '« Un peu de » est suivi directement du nom, sans autre article : « un peu de sucre ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement construite ?',
                        'choices' => [
                            ['choice_text' => 'Nous n’achetons pas des légumes aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Nous n’achetons pas du légumes aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Nous n’achetons pas de les légumes aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Nous n’achetons pas de légumes aujourd’hui.', 'is_correct' => true],
                        ],
                        'explanation' => 'À la forme affirmative on dirait « des légumes ». Après la négation, « des » devient « de ».',
                    ],
                    [
                        'question' => 'Il est 19 h et la boulangerie a tout vendu : il n’y a plus ___ pain.',
                        'choices' => [
                            ['choice_text' => 'du', 'is_correct' => false],
                            ['choice_text' => 'de', 'is_correct' => true],
                            ['choice_text' => 'des', 'is_correct' => false],
                            ['choice_text' => 'de la', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne ... plus » se comporte comme « ne ... pas » : le partitif « du » devient « de ».',
                    ],
                    [
                        'question' => 'Quelle transformation est correcte ? « J’ai des amis. » → phrase négative',
                        'choices' => [
                            ['choice_text' => 'Je n’ai pas des amis.', 'is_correct' => false],
                            ['choice_text' => 'Je ne ai pas des amis.', 'is_correct' => false],
                            ['choice_text' => 'Je n’ai pas d’amis.', 'is_correct' => true],
                            ['choice_text' => 'Je n’ai pas du amis.', 'is_correct' => false],
                        ],
                        'explanation' => '« Des » devient « de » après la négation. Devant « amis », « de » s’élide en « d’ ».',
                    ],
                    [
                        'question' => 'Complétez : « Il boit beaucoup ___ eau après le sport. »',
                        'choices' => [
                            ['choice_text' => 'de la', 'is_correct' => false],
                            ['choice_text' => 'd’', 'is_correct' => true],
                            ['choice_text' => 'de l’', 'is_correct' => false],
                            ['choice_text' => 'du', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « beaucoup », on emploie « de », qui s’élide en « d’ » devant la voyelle de « eau ».',
                    ],
                ],
            ],
            [
                'title' => 'Choisir le bon déterminant en contexte',
                'description' => 'Réinvestissez les principaux déterminants dans des situations quotidiennes où le sens du contexte guide le choix.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Vous entrez dans une pièce et voyez une table précise devant vous. Vous dites : « Je vais poser le sac sur ___ table. »',
                        'choices' => [
                            ['choice_text' => 'la', 'is_correct' => true],
                            ['choice_text' => 'une', 'is_correct' => false],
                            ['choice_text' => 'des', 'is_correct' => false],
                            ['choice_text' => 'un', 'is_correct' => false],
                        ],
                        'explanation' => 'La table est identifiée dans la situation, donc l’article défini « la ».',
                    ],
                    [
                        'question' => 'Anaïs cherche n’importe quel stylo dans son sac. Que dit-elle ?',
                        'choices' => [
                            ['choice_text' => 'J’ai besoin du stylo.', 'is_correct' => false],
                            ['choice_text' => 'J’ai besoin des stylo.', 'is_correct' => false],
                            ['choice_text' => 'J’ai besoin de la stylo.', 'is_correct' => false],
                            ['choice_text' => 'J’ai besoin d’un stylo.', 'is_correct' => true],
                        ],
                        'explanation' => 'Elle ne vise aucun stylo précis, donc l’article est indéfini : « d’un stylo ».',
                    ],
                    [
                        'question' => 'Vous montrez un sac précis à votre ami : « ___ sac est à moi. »',
                        'choices' => [
                            ['choice_text' => 'Cet', 'is_correct' => false],
                            ['choice_text' => 'Cette', 'is_correct' => false],
                            ['choice_text' => 'Ces', 'is_correct' => false],
                            ['choice_text' => 'Ce', 'is_correct' => true],
                        ],
                        'explanation' => 'Sac est masculin singulier et commence par une consonne : « ce sac ».',
                    ],
                    [
                        'question' => 'Vous parlez de plusieurs photos qui vous appartiennent. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Mes photos sont dans mon téléphone.', 'is_correct' => true],
                            ['choice_text' => 'Ma photos sont dans mon téléphone.', 'is_correct' => false],
                            ['choice_text' => 'Mes photo est dans mon téléphone.', 'is_correct' => false],
                            ['choice_text' => 'Mon photos sont dans ma téléphone.', 'is_correct' => false],
                        ],
                        'explanation' => 'Photos est féminin pluriel, donc « mes ». Téléphone est masculin singulier, donc « mon ».',
                    ],
                    [
                        'question' => 'Quelle phrase exprime correctement une quantité non précisée de fromage ?',
                        'choices' => [
                            ['choice_text' => 'Nous achetons de la fromage.', 'is_correct' => false],
                            ['choice_text' => 'Nous achetons du fromage.', 'is_correct' => true],
                            ['choice_text' => 'Nous achetons des fromage.', 'is_correct' => false],
                            ['choice_text' => 'Nous achetons une fromage.', 'is_correct' => false],
                        ],
                        'explanation' => 'Fromage est masculin singulier et on ne le compte pas ici : « du fromage ».',
                    ],
                    [
                        'question' => 'Un message annonce : « ___ réunion commence à neuf heures. » Tous les participants savent déjà de laquelle il s’agit.',
                        'choices' => [
                            ['choice_text' => 'Une', 'is_correct' => false],
                            ['choice_text' => 'Des', 'is_correct' => false],
                            ['choice_text' => 'La', 'is_correct' => true],
                            ['choice_text' => 'Un', 'is_correct' => false],
                        ],
                        'explanation' => 'La réunion est connue de tous, donc l’article défini féminin « la ».',
                    ],
                    [
                        'question' => 'Vous parlez à une amie et désignez son manteau. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ta manteau est ici.', 'is_correct' => false],
                            ['choice_text' => 'Tes manteau est ici.', 'is_correct' => false],
                            ['choice_text' => 'Ton manteau est ici.', 'is_correct' => true],
                            ['choice_text' => 'Ton manteaux sont ici.', 'is_correct' => false],
                        ],
                        'explanation' => 'Manteau est masculin singulier et vous dites « tu » à votre amie : « ton manteau ».',
                    ],
                    [
                        'question' => 'Vous regardez plusieurs tableaux accrochés au mur. Quelle phrase est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Cette tableaux sont magnifiques.', 'is_correct' => false],
                            ['choice_text' => 'Cet tableaux sont magnifiques.', 'is_correct' => false],
                            ['choice_text' => 'Ce tableaux est magnifique.', 'is_correct' => false],
                            ['choice_text' => 'Ces tableaux sont magnifiques.', 'is_correct' => true],
                        ],
                        'explanation' => 'Plusieurs tableaux : on emploie « ces », et le verbe se met au pluriel.',
                    ],
                    [
                        'question' => 'Quelle phrase indique que vous ne possédez aucun ordinateur ?',
                        'choices' => [
                            ['choice_text' => 'Je n’ai pas de l’ordinateur.', 'is_correct' => false],
                            ['choice_text' => 'Je n’ai pas d’ordinateur.', 'is_correct' => true],
                            ['choice_text' => 'Je n’ai pas des ordinateur.', 'is_correct' => false],
                            ['choice_text' => 'Je n’ai pas d’un ordinateur.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après la négation, « un » devient « de ». Devant la voyelle de « ordinateur », on écrit « d’ ».',
                    ],
                    [
                        'question' => 'Vous demandez à un vendeur une chemise bleue, n’importe laquelle : « Je voudrais ___ chemise bleue. »',
                        'choices' => [
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'des', 'is_correct' => false],
                            ['choice_text' => 'une', 'is_correct' => true],
                            ['choice_text' => 'du', 'is_correct' => false],
                        ],
                        'explanation' => 'Vous n’avez pas encore choisi : l’article indéfini féminin « une » convient.',
                    ],
                    [
                        'question' => 'Quelle phrase présente d’abord un objet nouveau, puis le reprend comme un objet connu ?',
                        'choices' => [
                            ['choice_text' => 'J’ai acheté la veste. Une veste est sur le lit.', 'is_correct' => false],
                            ['choice_text' => 'J’ai acheté une veste. La veste est sur le lit.', 'is_correct' => true],
                            ['choice_text' => 'J’ai acheté un veste. Le veste est sur le lit.', 'is_correct' => false],
                            ['choice_text' => 'J’ai acheté des veste. Une veste sont sur le lit.', 'is_correct' => false],
                        ],
                        'explanation' => '« Une » introduit la veste, « la » la reprend. Dans les autres phrases, l’ordre ou le genre est faux.',
                    ],
                    [
                        'question' => 'Complétez : « Pour préparer le repas, il faut ___ huile et ___ tomates. »',
                        'choices' => [
                            ['choice_text' => 'de l’ / des', 'is_correct' => true],
                            ['choice_text' => 'du / de la', 'is_correct' => false],
                            ['choice_text' => 'une / du', 'is_correct' => false],
                            ['choice_text' => 'des / un', 'is_correct' => false],
                        ],
                        'explanation' => 'Huile est féminin et commence par une voyelle : « de l’huile ». Tomates est au pluriel : « des tomates ».',
                    ],
                    [
                        'question' => 'Dans un bureau, tout le monde connaît les documents dont on parle. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Des document sont posés sur votre bureau.', 'is_correct' => false],
                            ['choice_text' => 'Les documents sont posés sur votre bureau.', 'is_correct' => true],
                            ['choice_text' => 'Le documents sont posés sur votre bureau.', 'is_correct' => false],
                            ['choice_text' => 'Les document est posé sur votre bureau.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les documents sont identifiés par tout le monde : on emploie « les », avec un nom et un verbe au pluriel.',
                    ],
                ],
            ],
            [
                'title' => 'Révision globale des déterminants',
                'description' => 'Révisez les articles et déterminants à travers des phrases variées qui demandent de comparer le nombre, le genre et le contexte.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quel choix complète correctement : « ___ arbre est très vieux. »',
                        'choices' => [
                            ['choice_text' => 'Ce', 'is_correct' => false],
                            ['choice_text' => 'Cette', 'is_correct' => false],
                            ['choice_text' => 'Cet', 'is_correct' => true],
                            ['choice_text' => 'Ces', 'is_correct' => false],
                        ],
                        'explanation' => 'Arbre est masculin singulier et commence par une voyelle : on dit « cet arbre ».',
                    ],
                    [
                        'question' => 'Quelle phrase exprime correctement la possession de plusieurs clés ?',
                        'choices' => [
                            ['choice_text' => 'J’ai ma clés dans mon grand sac.', 'is_correct' => false],
                            ['choice_text' => 'J’ai mon clés dans mon grand sac.', 'is_correct' => false],
                            ['choice_text' => 'J’ai mes clé dans ma grand sac.', 'is_correct' => false],
                            ['choice_text' => 'J’ai mes clés dans mon grand sac.', 'is_correct' => true],
                        ],
                        'explanation' => 'Clés est au pluriel : « mes clés ». Sac est masculin singulier : « mon sac ».',
                    ],
                    [
                        'question' => 'Vous racontez votre petit-déjeuner : chaque matin, vous buvez un peu de café. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Je bois de la café tous les matins.', 'is_correct' => false],
                            ['choice_text' => 'Je bois du café tous les matins.', 'is_correct' => true],
                            ['choice_text' => 'Je bois des café tous les matins.', 'is_correct' => false],
                            ['choice_text' => 'Je bois une café tous les matins.', 'is_correct' => false],
                        ],
                        'explanation' => 'Café est masculin singulier et on ne compte pas la quantité : « du café ».',
                    ],
                    [
                        'question' => 'Une personne désigne du doigt une chaussure parmi plusieurs. Elle dit : « Je prends ___ chaussure. »',
                        'choices' => [
                            ['choice_text' => 'cette', 'is_correct' => true],
                            ['choice_text' => 'ce', 'is_correct' => false],
                            ['choice_text' => 'cet', 'is_correct' => false],
                            ['choice_text' => 'ces', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaussure est féminin singulier et elle la désigne du doigt : « cette chaussure ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte après « beaucoup » ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons beaucoup du travail.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons beaucoup de travail.', 'is_correct' => true],
                            ['choice_text' => 'Nous avons beaucoup de la travail.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons beaucoup des travail.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « beaucoup », on emploie « de », sans autre article : « beaucoup de travail ».',
                    ],
                    [
                        'question' => 'Vous présentez votre mère et plusieurs amis. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ma mère et mes amis arrivent.', 'is_correct' => true],
                            ['choice_text' => 'Mon mère et mes amis arrivent.', 'is_correct' => false],
                            ['choice_text' => 'Ma mère et mon amis arrivent.', 'is_correct' => false],
                            ['choice_text' => 'Mes mère et ma amis arrivent.', 'is_correct' => false],
                        ],
                        'explanation' => 'Mère est féminin singulier : « ma mère ». Amis est au pluriel : « mes amis ».',
                    ],
                    [
                        'question' => 'Quelle phrase fait le bon choix entre article défini et article partitif ?',
                        'choices' => [
                            ['choice_text' => 'Il aime le thé, mais ce soir il boit du café.', 'is_correct' => true],
                            ['choice_text' => 'Il aime du thé, mais ce soir il boit le café.', 'is_correct' => false],
                            ['choice_text' => 'Il aime le thé, mais ce soir il boit de la café.', 'is_correct' => false],
                            ['choice_text' => 'Il aime de la thé, mais ce soir il boit du café.', 'is_correct' => false],
                        ],
                        'explanation' => 'On aime une boisson en général : « le thé ». Ce soir, il en boit une quantité non précisée : « du café ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte dans une situation où une personne désigne plusieurs nouveaux livres ?',
                        'choices' => [
                            ['choice_text' => 'Cette livres sont nouveaux.', 'is_correct' => false],
                            ['choice_text' => 'Ce livres sont nouveaux.', 'is_correct' => false],
                            ['choice_text' => 'Cet livres est nouveau.', 'is_correct' => false],
                            ['choice_text' => 'Ces livres sont nouveaux.', 'is_correct' => true],
                        ],
                        'explanation' => 'Livres est au pluriel : on emploie « ces ».',
                    ],
                    [
                        'question' => 'Quelle phrase indique correctement l’absence totale de lait ?',
                        'choices' => [
                            ['choice_text' => 'Il n’y a pas du lait.', 'is_correct' => false],
                            ['choice_text' => 'Il n’y a pas de la lait.', 'is_correct' => false],
                            ['choice_text' => 'Il n’y a pas de lait.', 'is_correct' => true],
                            ['choice_text' => 'Il n’y a pas des lait.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après la négation, le partitif « du » devient « de » : « pas de lait ».',
                    ],
                    [
                        'question' => 'Ahmed parle de l’école de sa sœur : « ___ école est fermée le lundi. »',
                        'choices' => [
                            ['choice_text' => 'Sa', 'is_correct' => false],
                            ['choice_text' => 'Son', 'is_correct' => true],
                            ['choice_text' => 'Ses', 'is_correct' => false],
                            ['choice_text' => 'Leur', 'is_correct' => false],
                        ],
                        'explanation' => '« École » est féminin, mais le mot commence par une voyelle : on emploie « son », comme dans « son école ».',
                    ],
                    [
                        'question' => 'Vous introduisez deux objets dans un récit : un sac et une bouteille. Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'J’ai une sac et un bouteille.', 'is_correct' => false],
                            ['choice_text' => 'J’ai le sac et la bouteille.', 'is_correct' => false],
                            ['choice_text' => 'J’ai des sac et des bouteille.', 'is_correct' => false],
                            ['choice_text' => 'J’ai un sac et une bouteille.', 'is_correct' => true],
                        ],
                        'explanation' => 'Sac est masculin, bouteille est féminin. Comme ils sont nouveaux, on emploie « un » et « une ».',
                    ],
                    [
                        'question' => 'Toute la classe parle de son professeur en disant « nous ». Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nos professeur explique bien la leçon.', 'is_correct' => false],
                            ['choice_text' => 'Notre professeurs expliquent bien la leçon.', 'is_correct' => false],
                            ['choice_text' => 'Notre professeur explique bien la leçon.', 'is_correct' => true],
                            ['choice_text' => 'Notre professeur expliquent bien la leçon.', 'is_correct' => false],
                        ],
                        'explanation' => 'Professeur est au singulier : « notre professeur », avec un verbe au singulier.',
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
