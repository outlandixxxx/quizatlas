<?php

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
                "title" => "Les articles définis au quotidien",
                "description" => "Apprenez à choisir le, la, l' et les lorsque vous parlez de personnes, d'objets ou de lieux identifiés.",
                "duration" => 20,
                "passing_score" => 50,
                "questions" => [
                    [
                        "question" => "Complétez : « ___ livre est sur la table. » On parle d'un livre déjà identifié.",
                        "choices" => [
                            ["choice_text" => "Le", "is_correct" => true],
                            ["choice_text" => "Un", "is_correct" => false],
                            ["choice_text" => "Une", "is_correct" => false],
                            ["choice_text" => "Des", "is_correct" => false],
                        ],
                        "explanation" => "On choisit « le » parce que le livre est masculin singulier et qu'il est déjà identifié dans le contexte.",
                    ],
                    [
                        "question" => "Quel article convient devant « maison » dans « ___ maison est très grande » ?",
                        "choices" => [
                            ["choice_text" => "La", "is_correct" => true],
                            ["choice_text" => "Le", "is_correct" => false],
                            ["choice_text" => "Les", "is_correct" => false],
                            ["choice_text" => "L'", "is_correct" => false],
                        ],
                        "explanation" => "« Maison » est un nom féminin singulier commençant par une consonne. On utilise donc l'article défini « la ».",
                    ],
                    [
                        "question" => "Dans « J'écoute la radio le matin », pourquoi emploie-t-on « la » ?",
                        "choices" => [
                            ["choice_text" => "Parce que « radio » est féminin singulier et désigne ici un élément identifié.", "is_correct" => true],
                            ["choice_text" => "Parce que tous les noms prennent « la » le matin.", "is_correct" => false],
                            ["choice_text" => "Parce que « radio » est masculin pluriel.", "is_correct" => false],
                            ["choice_text" => "Parce que « la » est toujours obligatoire après « écouter ».", "is_correct" => false],
                        ],
                        "explanation" => "« Radio » est féminin singulier. Dans cette phrase, on parle de la radio comme d'une réalité identifiée, d'où « la radio ».",
                    ],
                    [
                        "question" => "Quelle phrase est correctement formulée ?",
                        "choices" => [
                            ["choice_text" => "Les étudiants sont dans la salle.", "is_correct" => true],
                            ["choice_text" => "Le étudiants sont dans la salle.", "is_correct" => false],
                            ["choice_text" => "Les étudiant sont dans la salle.", "is_correct" => false],
                            ["choice_text" => "La étudiants sont dans la salle.", "is_correct" => false],
                        ],
                        "explanation" => "« Étudiants » est masculin pluriel, donc l'article défini pluriel « les » convient et le nom porte la marque du pluriel.",
                    ],
                    [
                        "question" => "Complétez : « Nous allons à ___ bibliothèque après le cours. »",
                        "choices" => [
                            ["choice_text" => "la", "is_correct" => true],
                            ["choice_text" => "un", "is_correct" => false],
                            ["choice_text" => "des", "is_correct" => false],
                            ["choice_text" => "le", "is_correct" => false],
                        ],
                        "explanation" => "« Bibliothèque » est féminin singulier. L'article défini correspondant est « la ».",
                    ],
                    [
                        "question" => "Pourquoi écrit-on « l'école » et non « la école » ?",
                        "choices" => [
                            ["choice_text" => "Parce que « école » commence par une voyelle et que « la » s'élide devant elle.", "is_correct" => true],
                            ["choice_text" => "Parce que « école » est masculin.", "is_correct" => false],
                            ["choice_text" => "Parce que « l' » est toujours le pluriel de « la ».", "is_correct" => false],
                            ["choice_text" => "Parce que les noms de lieux prennent toujours « l' ».", "is_correct" => false],
                        ],
                        "explanation" => "Devant une voyelle, l'article « la » s'élide et devient « l' ». On dit donc « l'école ».",
                    ],
                    [
                        "question" => "Quel article complète correctement « ___ enfants jouent dehors » ?",
                        "choices" => [
                            ["choice_text" => "Les", "is_correct" => true],
                            ["choice_text" => "Le", "is_correct" => false],
                            ["choice_text" => "La", "is_correct" => false],
                            ["choice_text" => "L'", "is_correct" => false],
                        ],
                        "explanation" => "« Enfants » est au pluriel. Pour parler de plusieurs enfants identifiés dans la situation, on utilise « les ».",
                    ],
                    [
                        "question" => "Quelle phrase contient l'article défini correctement employé ?",
                        "choices" => [
                            ["choice_text" => "J'aime le chocolat.", "is_correct" => true],
                            ["choice_text" => "J'aime la chocolat.", "is_correct" => false],
                            ["choice_text" => "J'aime les chocolat.", "is_correct" => false],
                            ["choice_text" => "J'aime un chocolat dans tous les contextes.", "is_correct" => false],
                        ],
                        "explanation" => "« Chocolat » est masculin singulier. L'article défini correct est « le » dans cette expression générale.",
                    ],
                    [
                        "question" => "Vous montrez un objet précis à votre ami : « ___ ordinateur est très rapide. » Quel choix convient ?",
                        "choices" => [
                            ["choice_text" => "L'", "is_correct" => true],
                            ["choice_text" => "La", "is_correct" => false],
                            ["choice_text" => "Les", "is_correct" => false],
                            ["choice_text" => "Une", "is_correct" => false],
                        ],
                        "explanation" => "« Ordinateur » est masculin singulier et commence par une voyelle. L'article défini « le » s'élide donc en « l' ».",
                    ],
                ],
            ],
            [
                "title" => "Le, la, un, une : faire la différence",
                "description" => "Distinguez les articles définis et indéfinis lorsqu'un nom est déjà connu ou qu'il est présenté pour la première fois.",
                "duration" => 25,
                "passing_score" => 55,
                "questions" => [
                    [
                        "question" => "Vous entrez dans une boulangerie et vous dites : « Je voudrais ___ croissant. » Vous en choisissez un parmi plusieurs.",
                        "choices" => [
                            ["choice_text" => "un", "is_correct" => true],
                            ["choice_text" => "le", "is_correct" => false],
                            ["choice_text" => "la", "is_correct" => false],
                            ["choice_text" => "les", "is_correct" => false],
                        ],
                        "explanation" => "« Un » présente ici un croissant non identifié parmi plusieurs possibilités. Il s'agit d'un nom masculin singulier.",
                    ],
                    [
                        "question" => "Une phrase commence par : « J'ai acheté ___ voiture hier. » Quelle forme convient pour présenter une voiture nouvelle dans le récit ?",
                        "choices" => [
                            ["choice_text" => "une", "is_correct" => true],
                            ["choice_text" => "la", "is_correct" => false],
                            ["choice_text" => "les", "is_correct" => false],
                            ["choice_text" => "l'", "is_correct" => false],
                        ],
                        "explanation" => "« Une » introduit ici une voiture qui n'était pas encore identifiée dans le récit. « Voiture » est féminin singulier.",
                    ],
                    [
                        "question" => "On a déjà parlé d'un film. Vous ajoutez : « ___ film était très drôle. »",
                        "choices" => [
                            ["choice_text" => "Le", "is_correct" => true],
                            ["choice_text" => "Un", "is_correct" => false],
                            ["choice_text" => "Une", "is_correct" => false],
                            ["choice_text" => "Des", "is_correct" => false],
                        ],
                        "explanation" => "Le film est maintenant identifié parce qu'il a déjà été mentionné. On emploie donc l'article défini « le ».",
                    ],
                    [
                        "question" => "Quelle phrase présente correctement un nouvel objet puis le reprend comme objet identifié ?",
                        "choices" => [
                            ["choice_text" => "J'ai acheté un livre. Le livre est passionnant.", "is_correct" => true],
                            ["choice_text" => "J'ai acheté le livre. Un livre est passionnant.", "is_correct" => false],
                            ["choice_text" => "J'ai acheté une livre. La livre est passionnante.", "is_correct" => false],
                            ["choice_text" => "J'ai acheté des livre. Le livre sont passionnants.", "is_correct" => false],
                        ],
                        "explanation" => "Le premier « un » présente le livre pour la première fois. Le second groupe reprend le même livre désormais identifié, d'où « le livre ».",
                    ],
                    [
                        "question" => "Complétez : « Elle cherche ___ appartement depuis deux mois. » Il s'agit de n'importe quel appartement correspondant à ses besoins.",
                        "choices" => [
                            ["choice_text" => "un", "is_correct" => true],
                            ["choice_text" => "le", "is_correct" => false],
                            ["choice_text" => "la", "is_correct" => false],
                            ["choice_text" => "les", "is_correct" => false],
                        ],
                        "explanation" => "La personne cherche un appartement parmi plusieurs possibilités, sans en avoir identifié un précis. L'article indéfini masculin singulier « un » convient.",
                    ],
                    [
                        "question" => "Quel choix complète naturellement : « Ferme ___ porte, s'il te plaît. » La porte est déjà évidente pour les deux personnes.",
                        "choices" => [
                            ["choice_text" => "la", "is_correct" => true],
                            ["choice_text" => "une", "is_correct" => false],
                            ["choice_text" => "des", "is_correct" => false],
                            ["choice_text" => "un", "is_correct" => false],
                        ],
                        "explanation" => "La porte est clairement identifiée dans la situation. On utilise donc l'article défini féminin singulier « la ».",
                    ],
                    [
                        "question" => "Vous voyez plusieurs chiens dans un parc et vous dites : « ___ chiens jouent ensemble. »",
                        "choices" => [
                            ["choice_text" => "Les", "is_correct" => true],
                            ["choice_text" => "Un", "is_correct" => false],
                            ["choice_text" => "Une", "is_correct" => false],
                            ["choice_text" => "L'", "is_correct" => false],
                        ],
                        "explanation" => "Le groupe parle de plusieurs chiens identifiés dans la situation : les chiens que les interlocuteurs voient dans le parc.",
                    ],
                    [
                        "question" => "Quelle phrase est correcte pour annoncer l'arrivée d'un nouveau collègue ?",
                        "choices" => [
                            ["choice_text" => "Un nouveau collègue arrive aujourd'hui.", "is_correct" => true],
                            ["choice_text" => "Une nouveau collègue arrive aujourd'hui.", "is_correct" => false],
                            ["choice_text" => "Le nouveau collègue arrive aujourd'hui.", "is_correct" => false],
                            ["choice_text" => "Des nouveau collègue arrive aujourd'hui.", "is_correct" => false],
                        ],
                        "explanation" => "« Un nouveau collègue » introduit une personne masculine singulière qui n'est pas encore identifiée dans le contexte. Le déterminant et l'adjectif s'accordent avec « collègue ».",
                    ],
                    [
                        "question" => "Une personne dit : « J'ai vu une femme devant l'école. La femme attendait quelqu'un. » Pourquoi le deuxième groupe utilise-t-il « la » ?",
                        "choices" => [
                            ["choice_text" => "Parce que la femme a déjà été présentée et est maintenant identifiée.", "is_correct" => true],
                            ["choice_text" => "Parce que « femme » est toujours accompagné de « la » dans tous les contextes.", "is_correct" => false],
                            ["choice_text" => "Parce que « une » est réservé au pluriel.", "is_correct" => false],
                            ["choice_text" => "Parce que « la » indique toujours une personne âgée.", "is_correct" => false],
                        ],
                        "explanation" => "La première mention utilise « une » pour introduire la femme. À la deuxième mention, elle est connue dans le récit, donc « la femme » convient.",
                    ],
                    [
                        "question" => "Complétez : « Il a acheté ___ ordinateur et ___ imprimante. » Les deux objets sont présentés pour la première fois.",
                        "choices" => [
                            ["choice_text" => "un / une", "is_correct" => true],
                            ["choice_text" => "l' / la", "is_correct" => false],
                            ["choice_text" => "le / un", "is_correct" => false],
                            ["choice_text" => "des / les", "is_correct" => false],
                        ],
                        "explanation" => "« Ordinateur » est masculin singulier, donc « un ». « Imprimante » est féminin singulier, donc « une ». Les deux objets sont introduits pour la première fois.",
                    ],
                    [
                        "question" => "Quelle paire d'articles convient pour « ___ hôtel » et « ___ maison » lorsqu'on introduit les deux lieux pour la première fois ?",
                        "choices" => [
                            ["choice_text" => "un / une", "is_correct" => true],
                            ["choice_text" => "le / la", "is_correct" => false],
                            ["choice_text" => "l' / une", "is_correct" => false],
                            ["choice_text" => "un / l'", "is_correct" => false],
                        ],
                        "explanation" => "Hôtel est masculin singulier et maison est féminin singulier. Comme les deux lieux sont introduits pour la première fois, on emploie « un » et « une ».",
                    ],
                ],
            ],
            [
                "title" => "Du, de la, de l', des : les quantités non précises",
                "description" => "Découvrez les articles partitifs et le pluriel « des » pour parler de quantités non comptées ou de plusieurs éléments.",
                "duration" => 25,
                "passing_score" => 55,
                "questions" => [
                    [
                        "question" => "Au petit-déjeuner, quelle phrase est correcte pour parler d'une quantité non précisée de lait ?",
                        "choices" => [
                            ["choice_text" => "Je bois du lait.", "is_correct" => true],
                            ["choice_text" => "Je bois de la lait.", "is_correct" => false],
                            ["choice_text" => "Je bois un lait dans tous les contextes.", "is_correct" => false],
                            ["choice_text" => "Je bois des lait.", "is_correct" => false],
                        ],
                        "explanation" => "« Lait » est masculin singulier et désigne ici une quantité non précisée. L'article partitif correct est « du ».",
                    ],
                    [
                        "question" => "Complétez : « Elle mange ___ soupe le soir. »",
                        "choices" => [
                            ["choice_text" => "de la", "is_correct" => true],
                            ["choice_text" => "du", "is_correct" => false],
                            ["choice_text" => "des", "is_correct" => false],
                            ["choice_text" => "une", "is_correct" => false],
                        ],
                        "explanation" => "« Soupe » est féminin singulier. Pour une quantité non précisée de soupe, on utilise l'article partitif « de la ».",
                    ],
                    [
                        "question" => "Quel choix convient dans « Nous achetons ___ huile d'olive » ?",
                        "choices" => [
                            ["choice_text" => "de l'", "is_correct" => true],
                            ["choice_text" => "du", "is_correct" => false],
                            ["choice_text" => "de la", "is_correct" => false],
                            ["choice_text" => "des", "is_correct" => false],
                        ],
                        "explanation" => "« Huile » est féminin singulier et commence par une voyelle. L'article partitif « de la » s'élide devant la voyelle et devient « de l' ».",
                    ],
                    [
                        "question" => "Quelle phrase exprime correctement l'achat de plusieurs pommes ?",
                        "choices" => [
                            ["choice_text" => "J'achète des pommes.", "is_correct" => true],
                            ["choice_text" => "J'achète de la pommes.", "is_correct" => false],
                            ["choice_text" => "J'achète du pommes.", "is_correct" => false],
                            ["choice_text" => "J'achète une pommes.", "is_correct" => false],
                        ],
                        "explanation" => "« Pommes » est un nom féminin pluriel. Pour parler de plusieurs éléments sans les préciser individuellement, on emploie « des ».",
                    ],
                    [
                        "question" => "Vous servez une quantité non précisée de riz. Quelle phrase choisissez-vous ?",
                        "choices" => [
                            ["choice_text" => "Je prépare du riz.", "is_correct" => true],
                            ["choice_text" => "Je prépare de la riz.", "is_correct" => false],
                            ["choice_text" => "Je prépare des riz.", "is_correct" => false],
                            ["choice_text" => "Je prépare une riz.", "is_correct" => false],
                        ],
                        "explanation" => "« Riz » est masculin singulier et se prend ici comme une matière ou une quantité non précisée. On utilise donc « du riz ».",
                    ],
                    [
                        "question" => "Quel groupe complète correctement : « Elle met ___ beurre dans la poêle » ?",
                        "choices" => [
                            ["choice_text" => "du", "is_correct" => true],
                            ["choice_text" => "de la", "is_correct" => false],
                            ["choice_text" => "des", "is_correct" => false],
                            ["choice_text" => "une", "is_correct" => false],
                        ],
                        "explanation" => "« Beurre » est masculin singulier et désigne ici une quantité non comptée. L'article partitif est « du ».",
                    ],
                    [
                        "question" => "Dans « Nous achetons des tomates », que signifie « des » ?",
                        "choices" => [
                            ["choice_text" => "Plusieurs tomates, sans préciser lesquelles ni leur nombre exact.", "is_correct" => true],
                            ["choice_text" => "Une seule tomate précisément identifiée.", "is_correct" => false],
                            ["choice_text" => "Une quantité de tomate non comptable au singulier.", "is_correct" => false],
                            ["choice_text" => "Toutes les tomates du monde.", "is_correct" => false],
                        ],
                        "explanation" => "« Des » est l'article indéfini pluriel. Il présente plusieurs éléments sans préciser leur identité exacte ni leur nombre précis.",
                    ],
                    [
                        "question" => "Quel article partitif convient devant « eau » ?",
                        "choices" => [
                            ["choice_text" => "de l'", "is_correct" => true],
                            ["choice_text" => "du", "is_correct" => false],
                            ["choice_text" => "de la", "is_correct" => false],
                            ["choice_text" => "des", "is_correct" => false],
                        ],
                        "explanation" => "« Eau » est féminin singulier et commence par une voyelle. « De la » devient « de l' » devant cette voyelle : « de l'eau ».",
                    ],
                    [
                        "question" => "Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Il boit du café et mange du pain.", "is_correct" => true],
                            ["choice_text" => "Il boit de la café et mange du pain.", "is_correct" => false],
                            ["choice_text" => "Il boit des café et mange de la pain.", "is_correct" => false],
                            ["choice_text" => "Il boit un café et mange une pain.", "is_correct" => false],
                        ],
                        "explanation" => "Café et pain sont ici pris comme des quantités non précisées. Ils sont masculins singuliers, d'où « du café » et « du pain ».",
                    ],
                    [
                        "question" => "Quelle distinction est correcte entre « un gâteau » et « du gâteau » ?",
                        "choices" => [
                            ["choice_text" => "« Un gâteau » désigne un élément comptable précis parmi d'autres ; « du gâteau » désigne une quantité non précisée.", "is_correct" => true],
                            ["choice_text" => "Les deux expressions ont toujours exactement le même sens.", "is_correct" => false],
                            ["choice_text" => "« Un gâteau » est pluriel et « du gâteau » est féminin.", "is_correct" => false],
                            ["choice_text" => "« Du gâteau » indique toujours un gâteau entier.", "is_correct" => false],
                        ],
                        "explanation" => "« Un » introduit un nom comptable masculin singulier. « Du » est partitif et présente une quantité non précisée d'un aliment ou d'une matière.",
                    ],
                    [
                        "question" => "Complétez naturellement : « Pour le dîner, nous avons ___ salade et ___ fromage. »",
                        "choices" => [
                            ["choice_text" => "de la / du", "is_correct" => true],
                            ["choice_text" => "du / de la", "is_correct" => false],
                            ["choice_text" => "des / un", "is_correct" => false],
                            ["choice_text" => "une / une", "is_correct" => false],
                        ],
                        "explanation" => "« Salade » est féminin singulier et est prise comme une quantité non précisée : « de la salade ». « Fromage » est masculin singulier : « du fromage ».",
                    ],
                ],
            ],
            [
                "title" => "Les déterminants démonstratifs",
                "description" => "Apprenez à employer ce, cet, cette et ces pour montrer ou désigner des personnes, des objets et des lieux.",
                "duration" => 25,
                "passing_score" => 60,
                "questions" => [
                    [
                        "question" => "Complétez : « ___ livre est intéressant. »",
                        "choices" => [
                            ["choice_text" => "Ce", "is_correct" => true],
                            ["choice_text" => "Cette", "is_correct" => false],
                            ["choice_text" => "Ces", "is_correct" => false],
                            ["choice_text" => "Cet", "is_correct" => false],
                        ],
                        "explanation" => "« Livre » est masculin singulier et commence par une consonne. Le déterminant démonstratif correct est « ce ».",
                    ],
                    [
                        "question" => "Quel choix convient devant « étudiant » ?",
                        "choices" => [
                            ["choice_text" => "Cet", "is_correct" => true],
                            ["choice_text" => "Ce", "is_correct" => false],
                            ["choice_text" => "Cette", "is_correct" => false],
                            ["choice_text" => "Ces", "is_correct" => false],
                        ],
                        "explanation" => "« Étudiant » est masculin singulier et commence par une voyelle. On utilise « cet » devant ce type de nom.",
                    ],
                    [
                        "question" => "Quelle phrase est correcte avec le nom « maison » ?",
                        "choices" => [
                            ["choice_text" => "Cette maison est ancienne.", "is_correct" => true],
                            ["choice_text" => "Ce maison est ancienne.", "is_correct" => false],
                            ["choice_text" => "Cet maison est ancienne.", "is_correct" => false],
                            ["choice_text" => "Ces maison est ancienne.", "is_correct" => false],
                        ],
                        "explanation" => "« Maison » est féminin singulier. Le déterminant démonstratif correspondant est « cette ».",
                    ],
                    [
                        "question" => "Vous montrez plusieurs stylos. Quel déterminant convient ?",
                        "choices" => [
                            ["choice_text" => "Ces", "is_correct" => true],
                            ["choice_text" => "Ce", "is_correct" => false],
                            ["choice_text" => "Cet", "is_correct" => false],
                            ["choice_text" => "Cette", "is_correct" => false],
                        ],
                        "explanation" => "« Stylos » est masculin pluriel. Pour montrer plusieurs objets, on utilise le déterminant démonstratif pluriel « ces ».",
                    ],
                    [
                        "question" => "Quel groupe est correct ?",
                        "choices" => [
                            ["choice_text" => "Cet ordinateur", "is_correct" => true],
                            ["choice_text" => "Ce ordinateur", "is_correct" => false],
                            ["choice_text" => "Cette ordinateur", "is_correct" => false],
                            ["choice_text" => "Ces ordinateur", "is_correct" => false],
                        ],
                        "explanation" => "Ordinateur est masculin singulier et commence par une voyelle. On utilise donc « cet ».",
                    ],
                    [
                        "question" => "Quelle phrase convient si vous montrez une seule lampe ?",
                        "choices" => [
                            ["choice_text" => "Cette lampe est neuve.", "is_correct" => true],
                            ["choice_text" => "Ce lampe est neuve.", "is_correct" => false],
                            ["choice_text" => "Cet lampe est neuve.", "is_correct" => false],
                            ["choice_text" => "Ces lampe est neuve.", "is_correct" => false],
                        ],
                        "explanation" => "« Lampe » est féminin singulier, donc le démonstratif correct est « cette ».",
                    ],
                    [
                        "question" => "Vous entrez dans une salle et vous désignez plusieurs chaises. Quelle phrase est naturelle ?",
                        "choices" => [
                            ["choice_text" => "Ces chaises sont libres.", "is_correct" => true],
                            ["choice_text" => "Cette chaises sont libres.", "is_correct" => false],
                            ["choice_text" => "Ce chaises sont libres.", "is_correct" => false],
                            ["choice_text" => "Cet chaises sont libres.", "is_correct" => false],
                        ],
                        "explanation" => "« Chaises » est féminin pluriel. Le déterminant démonstratif pluriel est « ces ».",
                    ],
                    [
                        "question" => "Quel déterminant complète correctement : « ___ hôtel est fermé » ?",
                        "choices" => [
                            ["choice_text" => "Cet", "is_correct" => true],
                            ["choice_text" => "Ce", "is_correct" => false],
                            ["choice_text" => "Cette", "is_correct" => false],
                            ["choice_text" => "Ces", "is_correct" => false],
                        ],
                        "explanation" => "Hôtel est masculin singulier et commence par une voyelle. On emploie donc « cet hôtel ».",
                    ],
                    [
                        "question" => "Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Ces écoles sont proches.", "is_correct" => true],
                            ["choice_text" => "Cet écoles sont proches.", "is_correct" => false],
                            ["choice_text" => "Cette écoles sont proches.", "is_correct" => false],
                            ["choice_text" => "Ce écoles sont proches.", "is_correct" => false],
                        ],
                        "explanation" => "« Écoles » est féminin pluriel. Le déterminant démonstratif pluriel « ces » convient, même si le nom commence par une voyelle.",
                    ],
                    [
                        "question" => "Un étudiant hésite entre « ce » et « cet » avant « examen ». Quelle forme doit-il choisir ?",
                        "choices" => [
                            ["choice_text" => "Cet examen", "is_correct" => true],
                            ["choice_text" => "Ce examen", "is_correct" => false],
                            ["choice_text" => "Cette examen", "is_correct" => false],
                            ["choice_text" => "Ces examen", "is_correct" => false],
                        ],
                        "explanation" => "« Examen » est masculin singulier et commence par une voyelle. Le déterminant « ce » devient « cet » devant ce type de nom.",
                    ],
                    [
                        "question" => "Quelle paire est correctement associée ?",
                        "choices" => [
                            ["choice_text" => "ce livre / cette page", "is_correct" => true],
                            ["choice_text" => "cette livre / ce page", "is_correct" => false],
                            ["choice_text" => "cet livre / cette page", "is_correct" => false],
                            ["choice_text" => "ce livre / cet page", "is_correct" => false],
                        ],
                        "explanation" => "Livre est masculin singulier : « ce livre ». Page est féminin singulier : « cette page ».",
                    ],
                    [
                        "question" => "Quelle phrase pourrait accompagner un geste montrant plusieurs maisons ?",
                        "choices" => [
                            ["choice_text" => "Ces maisons sont magnifiques.", "is_correct" => true],
                            ["choice_text" => "Cette maisons sont magnifiques.", "is_correct" => false],
                            ["choice_text" => "Ce maisons est magnifique.", "is_correct" => false],
                            ["choice_text" => "Cet maisons sont magnifiques.", "is_correct" => false],
                        ],
                        "explanation" => "Maisons est féminin pluriel, donc le déterminant démonstratif doit être « ces ».",
                    ],
                ],
            ],
            [
                "title" => "Les déterminants possessifs",
                "description" => "Utilisez mon, ma, mes, ton, ta, tes, son, sa, ses, notre, nos, votre et vos dans des situations simples de possession.",
                "duration" => 30,
                "passing_score" => 60,
                "questions" => [
                    [
                        "question" => "Vous parlez de votre frère. Quel choix convient ? « ___ frère habite ici. »",
                        "choices" => [
                            ["choice_text" => "Mon", "is_correct" => true],
                            ["choice_text" => "Ma", "is_correct" => false],
                            ["choice_text" => "Mes", "is_correct" => false],
                            ["choice_text" => "Notre", "is_correct" => false],
                        ],
                        "explanation" => "Frère est masculin singulier. Avec le possesseur « je », on utilise donc « mon frère ».",
                    ],
                    [
                        "question" => "Quelle phrase est correcte pour parler de votre sœur ?",
                        "choices" => [
                            ["choice_text" => "Ma sœur est médecin.", "is_correct" => true],
                            ["choice_text" => "Mon sœur est médecin.", "is_correct" => false],
                            ["choice_text" => "Mes sœur est médecin.", "is_correct" => false],
                            ["choice_text" => "Notre sœur sont médecin.", "is_correct" => false],
                        ],
                        "explanation" => "Sœur est féminin singulier. Le possessif de première personne correspondant est « ma ».",
                    ],
                    [
                        "question" => "Vous parlez de plusieurs livres qui vous appartiennent. Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Mes livres sont sur le bureau.", "is_correct" => true],
                            ["choice_text" => "Ma livres sont sur le bureau.", "is_correct" => false],
                            ["choice_text" => "Mon livres sont sur le bureau.", "is_correct" => false],
                            ["choice_text" => "Mes livre est sur le bureau.", "is_correct" => false],
                        ],
                        "explanation" => "Livres est masculin pluriel, donc le possessif « mes » convient. Le nom et le verbe sont aussi au pluriel.",
                    ],
                    [
                        "question" => "Tu parles de ton téléphone. Quel choix est correct ?",
                        "choices" => [
                            ["choice_text" => "Ton téléphone", "is_correct" => true],
                            ["choice_text" => "Ta téléphone", "is_correct" => false],
                            ["choice_text" => "Tes téléphone", "is_correct" => false],
                            ["choice_text" => "Ton téléphones", "is_correct" => false],
                        ],
                        "explanation" => "Téléphone est masculin singulier. Avec le possesseur « tu », on utilise « ton ».",
                    ],
                    [
                        "question" => "Tu parles de plusieurs chaussures. Quelle phrase convient ?",
                        "choices" => [
                            ["choice_text" => "Tes chaussures sont neuves.", "is_correct" => true],
                            ["choice_text" => "Ta chaussures sont neuves.", "is_correct" => false],
                            ["choice_text" => "Ton chaussures est neuve.", "is_correct" => false],
                            ["choice_text" => "Tes chaussure est neuve.", "is_correct" => false],
                        ],
                        "explanation" => "Chaussures est féminin pluriel. Avec « tu », le possessif pluriel est « tes ».",
                    ],
                    [
                        "question" => "Elle parle de son appartement. Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Son appartement est lumineux.", "is_correct" => true],
                            ["choice_text" => "Sa appartement est lumineuse.", "is_correct" => false],
                            ["choice_text" => "Ses appartement est lumineux.", "is_correct" => false],
                            ["choice_text" => "Son appartements sont lumineux.", "is_correct" => false],
                        ],
                        "explanation" => "Appartement est masculin singulier et commence par une voyelle. Avec « elle », on emploie « son ».",
                    ],
                    [
                        "question" => "Elle parle de sa voiture. Quel choix convient ?",
                        "choices" => [
                            ["choice_text" => "Sa voiture", "is_correct" => true],
                            ["choice_text" => "Son voiture", "is_correct" => false],
                            ["choice_text" => "Ses voiture", "is_correct" => false],
                            ["choice_text" => "Sa voitures", "is_correct" => false],
                        ],
                        "explanation" => "Voiture est féminin singulier. Le possessif correspondant à « elle » est « sa ».",
                    ],
                    [
                        "question" => "Quel groupe convient pour parler de plusieurs projets appartenant à une même personne ?",
                        "choices" => [
                            ["choice_text" => "Ses projets", "is_correct" => true],
                            ["choice_text" => "Son projets", "is_correct" => false],
                            ["choice_text" => "Sa projets", "is_correct" => false],
                            ["choice_text" => "Ses projet", "is_correct" => false],
                        ],
                        "explanation" => "Projets est masculin pluriel. Avec « il » ou « elle », le possessif pluriel est « ses ».",
                    ],
                    [
                        "question" => "Nous parlons de notre maison. Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Notre maison est petite.", "is_correct" => true],
                            ["choice_text" => "Nos maison est petite.", "is_correct" => false],
                            ["choice_text" => "Notre maisons sont petites.", "is_correct" => false],
                            ["choice_text" => "Notre maison sont petite.", "is_correct" => false],
                        ],
                        "explanation" => "Maison est féminin singulier. Avec « nous », le possessif correspondant est « notre ».",
                    ],
                    [
                        "question" => "Nous parlons de plusieurs amis. Quel choix convient ?",
                        "choices" => [
                            ["choice_text" => "Nos amis arrivent.", "is_correct" => true],
                            ["choice_text" => "Notre amis arrivent.", "is_correct" => false],
                            ["choice_text" => "Nos ami arrive.", "is_correct" => false],
                            ["choice_text" => "Notre ami arrivent.", "is_correct" => false],
                        ],
                        "explanation" => "Amis est au pluriel. Le possessif de première personne du pluriel est donc « nos ».",
                    ],
                    [
                        "question" => "Vous parlez à plusieurs personnes de plusieurs documents. Quelle phrase convient ?",
                        "choices" => [
                            ["choice_text" => "Vos documents sont prêts.", "is_correct" => true],
                            ["choice_text" => "Votre documents sont prêts.", "is_correct" => false],
                            ["choice_text" => "Vos document est prêt.", "is_correct" => false],
                            ["choice_text" => "Votre document sont prêts.", "is_correct" => false],
                        ],
                        "explanation" => "Documents est pluriel et le possesseur est « vous ». Le déterminant possessif correspondant est « vos ».",
                    ],
                    [
                        "question" => "Un étudiant écrit « ma ami ». Quelle correction est standard ?",
                        "choices" => [
                            ["choice_text" => "Mon ami", "is_correct" => true],
                            ["choice_text" => "Ma amie", "is_correct" => false],
                            ["choice_text" => "Mes ami", "is_correct" => false],
                            ["choice_text" => "Notre ami", "is_correct" => false],
                        ],
                        "explanation" => "Même si « amie » est féminin, on emploie « mon » devant un nom féminin singulier commençant par une voyelle pour faciliter la prononciation : « mon amie ».",
                    ],
                    [
                        "question" => "Quelle phrase montre correctement la différence entre « son » et « sa » ?",
                        "choices" => [
                            ["choice_text" => "Il cherche son téléphone et sa clé.", "is_correct" => true],
                            ["choice_text" => "Il cherche sa téléphone et son clé.", "is_correct" => false],
                            ["choice_text" => "Il cherche ses téléphone et sa clé.", "is_correct" => false],
                            ["choice_text" => "Il cherche son téléphones et son clé.", "is_correct" => false],
                        ],
                        "explanation" => "Téléphone est masculin singulier, donc « son téléphone ». Clé est féminin singulier, donc « sa clé ». Le possessif s'accorde avec le nom possédé, pas avec la personne qui possède.",
                    ],
                ],
            ],
            [
                "title" => "Articles et négation",
                "description" => "Observez comment les articles se comportent dans les phrases négatives et après des expressions de quantité simples.",
                "duration" => 25,
                "passing_score" => 60,
                "questions" => [
                    [
                        "question" => "Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Je n'ai pas de voiture.", "is_correct" => true],
                            ["choice_text" => "Je n'ai pas une voiture.", "is_correct" => false],
                            ["choice_text" => "Je n'ai pas du voiture.", "is_correct" => false],
                            ["choice_text" => "Je n'ai pas des voiture.", "is_correct" => false],
                        ],
                        "explanation" => "Après la négation « ne ... pas », l'article indéfini « une » devient généralement « de » lorsqu'on nie l'existence ou la possession d'une quantité non précisée : « pas de voiture ».",
                    ],
                    [
                        "question" => "Complétez : « Nous n'avons pas ___ pain. »",
                        "choices" => [
                            ["choice_text" => "de", "is_correct" => true],
                            ["choice_text" => "du", "is_correct" => false],
                            ["choice_text" => "des", "is_correct" => false],
                            ["choice_text" => "le", "is_correct" => false],
                        ],
                        "explanation" => "Dans une phrase négative avec le sens de « aucun pain », l'article partitif « du » devient « de » : « nous n'avons pas de pain ».",
                    ],
                    [
                        "question" => "Quelle phrase est correcte lorsqu'on nie la présence de plusieurs livres ?",
                        "choices" => [
                            ["choice_text" => "Il n'y a pas de livres sur la table.", "is_correct" => true],
                            ["choice_text" => "Il n'y a pas des livres sur la table.", "is_correct" => false],
                            ["choice_text" => "Il n'y a pas du livres sur la table.", "is_correct" => false],
                            ["choice_text" => "Il n'y a pas un livres sur la table.", "is_correct" => false],
                        ],
                        "explanation" => "Après « ne ... pas » avec « il y a », l'article indéfini pluriel « des » devient « de » : « il n'y a pas de livres ».",
                    ],
                    [
                        "question" => "Une personne dit : « Je n'aime pas le café. » Pourquoi « le » reste-t-il possible ?",
                        "choices" => [
                            ["choice_text" => "Parce qu'on parle du café comme d'une boisson en général, et non d'une quantité précise.", "is_correct" => true],
                            ["choice_text" => "Parce que les articles ne changent jamais après la négation.", "is_correct" => false],
                            ["choice_text" => "Parce que « café » est toujours pluriel.", "is_correct" => false],
                            ["choice_text" => "Parce que « ne ... pas » exige toujours « le ».", "is_correct" => false],
                        ],
                        "explanation" => "L'article défini reste lorsque l'on parle d'une catégorie, d'une notion générale ou de quelque chose considéré comme identifié. « Je n'aime pas le café » parle de la boisson en général.",
                    ],
                    [
                        "question" => "Quelle phrase indique que la personne n'a pas mangé de soupe ?",
                        "choices" => [
                            ["choice_text" => "Elle n'a pas mangé de soupe.", "is_correct" => true],
                            ["choice_text" => "Elle n'a pas mangé de la soupe.", "is_correct" => false],
                            ["choice_text" => "Elle n'a pas mangé du soupe.", "is_correct" => false],
                            ["choice_text" => "Elle n'a pas mangé une soupe.", "is_correct" => false],
                        ],
                        "explanation" => "L'article partitif « de la » devient « de » après la négation lorsque l'on indique l'absence de soupe : « pas de soupe ».",
                    ],
                    [
                        "question" => "Après « beaucoup de », quel choix convient ? « Elle achète beaucoup ___ fruits. »",
                        "choices" => [
                            ["choice_text" => "de", "is_correct" => true],
                            ["choice_text" => "des", "is_correct" => false],
                            ["choice_text" => "du", "is_correct" => false],
                            ["choice_text" => "les", "is_correct" => false],
                        ],
                        "explanation" => "Après une expression de quantité comme « beaucoup », on utilise « de » : « beaucoup de fruits ».",
                    ],
                    [
                        "question" => "Quel groupe est correct après « un peu de » ?",
                        "choices" => [
                            ["choice_text" => "un peu de sucre", "is_correct" => true],
                            ["choice_text" => "un peu du sucre dans tous les contextes", "is_correct" => false],
                            ["choice_text" => "un peu des sucre", "is_correct" => false],
                            ["choice_text" => "un peu de la sucre", "is_correct" => false],
                        ],
                        "explanation" => "« Un peu de » est une expression de quantité suivie de « de ». On dit donc « un peu de sucre ».",
                    ],
                    [
                        "question" => "Quelle phrase est correctement construite ?",
                        "choices" => [
                            ["choice_text" => "Nous n'achetons pas de légumes aujourd'hui.", "is_correct" => true],
                            ["choice_text" => "Nous n'achetons pas des légumes aujourd'hui.", "is_correct" => false],
                            ["choice_text" => "Nous n'achetons pas du légumes aujourd'hui.", "is_correct" => false],
                            ["choice_text" => "Nous n'achetons pas une légumes aujourd'hui.", "is_correct" => false],
                        ],
                        "explanation" => "« Légumes » est un nom pluriel précédé de « des » dans une phrase affirmative. Dans cette négation, « des » devient « de ».",
                    ],
                    [
                        "question" => "Quelle phrase est correcte si l'on parle d'une activité générale ?",
                        "choices" => [
                            ["choice_text" => "Je n'aime pas le football.", "is_correct" => true],
                            ["choice_text" => "Je n'aime pas du football.", "is_correct" => false],
                            ["choice_text" => "Je n'aime pas de football dans tous les contextes.", "is_correct" => false],
                            ["choice_text" => "Je n'aime pas un football.", "is_correct" => false],
                        ],
                        "explanation" => "Avec le verbe « aimer », on utilise souvent l'article défini pour parler d'une activité ou d'un domaine en général : « j'aime le football » et « je n'aime pas le football ».",
                    ],
                    [
                        "question" => "Quelle transformation est correcte ? « J'ai des amis. » → phrase négative",
                        "choices" => [
                            ["choice_text" => "Je n'ai pas d'amis.", "is_correct" => true],
                            ["choice_text" => "Je n'ai pas des amis.", "is_correct" => false],
                            ["choice_text" => "Je ne ai pas des amis.", "is_correct" => false],
                            ["choice_text" => "Je n'ai pas du amis.", "is_correct" => false],
                        ],
                        "explanation" => "« Des » devient généralement « de » après la négation : « je n'ai pas d'amis ». Devant une voyelle, « de » s'élide en « d' ».",
                    ],
                    [
                        "question" => "Complétez : « Il boit beaucoup ___ eau après le sport. »",
                        "choices" => [
                            ["choice_text" => "d'", "is_correct" => true],
                            ["choice_text" => "de la", "is_correct" => false],
                            ["choice_text" => "de l'", "is_correct" => false],
                            ["choice_text" => "du", "is_correct" => false],
                        ],
                        "explanation" => "Après « beaucoup », on emploie « de ». Devant « eau », qui commence par une voyelle, « de » s'élide en « d' » : « beaucoup d'eau ».",
                    ],
                ],
            ],
            [
                "title" => "Choisir le bon déterminant en contexte",
                "description" => "Réinvestissez les principaux déterminants dans des situations quotidiennes où le sens du contexte guide le choix.",
                "duration" => 30,
                "passing_score" => 65,
                "questions" => [
                    [
                        "question" => "Vous entrez dans une pièce et voyez une table précise devant vous. Vous dites : « Je vais poser le sac sur ___ table. »",
                        "choices" => [
                            ["choice_text" => "la", "is_correct" => true],
                            ["choice_text" => "une", "is_correct" => false],
                            ["choice_text" => "des", "is_correct" => false],
                            ["choice_text" => "un", "is_correct" => false],
                        ],
                        "explanation" => "La table est identifiée dans la situation, donc l'article défini « la » convient. « Table » est féminin singulier.",
                    ],
                    [
                        "question" => "Dans « J'ai besoin d'un stylo », pourquoi utilise-t-on « un » ?",
                        "choices" => [
                            ["choice_text" => "Parce qu'on cherche un stylo parmi plusieurs possibilités, sans en préciser un.", "is_correct" => true],
                            ["choice_text" => "Parce que « stylo » est féminin pluriel.", "is_correct" => false],
                            ["choice_text" => "Parce que « un » indique toujours quelque chose de précis.", "is_correct" => false],
                            ["choice_text" => "Parce que l'article défini est « un ».", "is_correct" => false],
                        ],
                        "explanation" => "« Un » est l'article indéfini masculin singulier. Il présente ici un stylo non identifié précisément.",
                    ],
                    [
                        "question" => "Vous montrez un sac précis à votre ami : « ___ sac est à moi. »",
                        "choices" => [
                            ["choice_text" => "Ce", "is_correct" => true],
                            ["choice_text" => "Cet", "is_correct" => false],
                            ["choice_text" => "Cette", "is_correct" => false],
                            ["choice_text" => "Ces", "is_correct" => false],
                        ],
                        "explanation" => "Sac est masculin singulier et commence par une consonne. Le démonstratif « ce » convient pour montrer l'objet.",
                    ],
                    [
                        "question" => "Vous parlez de plusieurs photos qui vous appartiennent. Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Mes photos sont dans mon téléphone.", "is_correct" => true],
                            ["choice_text" => "Ma photos sont dans mon téléphone.", "is_correct" => false],
                            ["choice_text" => "Mes photo est dans mon téléphone.", "is_correct" => false],
                            ["choice_text" => "Mon photos sont dans ma téléphone.", "is_correct" => false],
                        ],
                        "explanation" => "Photos est féminin pluriel, donc « mes » convient. Téléphone est masculin singulier, d'où « mon téléphone ».",
                    ],
                    [
                        "question" => "Quelle phrase exprime correctement une quantité non précisée de fromage ?",
                        "choices" => [
                            ["choice_text" => "Nous achetons du fromage.", "is_correct" => true],
                            ["choice_text" => "Nous achetons de la fromage.", "is_correct" => false],
                            ["choice_text" => "Nous achetons des fromage.", "is_correct" => false],
                            ["choice_text" => "Nous achetons une fromage.", "is_correct" => false],
                        ],
                        "explanation" => "Fromage est masculin singulier et désigne ici une quantité non comptée. L'article partitif est « du ».",
                    ],
                    [
                        "question" => "Un message annonce : « ___ réunion commence à neuf heures. » Les participants savent déjà de quelle réunion il s'agit.",
                        "choices" => [
                            ["choice_text" => "La", "is_correct" => true],
                            ["choice_text" => "Une", "is_correct" => false],
                            ["choice_text" => "Des", "is_correct" => false],
                            ["choice_text" => "Un", "is_correct" => false],
                        ],
                        "explanation" => "La réunion est déjà identifiée pour les participants. On utilise donc l'article défini féminin singulier « la ».",
                    ],
                    [
                        "question" => "Vous parlez à une amie et désignez son manteau. Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Ton manteau est ici.", "is_correct" => true],
                            ["choice_text" => "Ta manteau est ici.", "is_correct" => false],
                            ["choice_text" => "Tes manteau est ici.", "is_correct" => false],
                            ["choice_text" => "Ton manteaux sont ici.", "is_correct" => false],
                        ],
                        "explanation" => "Manteau est masculin singulier. Le déterminant possessif correspondant à « tu » est « ton ».",
                    ],
                    [
                        "question" => "Vous regardez plusieurs tableaux accrochés au mur. Quelle phrase est naturelle ?",
                        "choices" => [
                            ["choice_text" => "Ces tableaux sont magnifiques.", "is_correct" => true],
                            ["choice_text" => "Cette tableaux sont magnifiques.", "is_correct" => false],
                            ["choice_text" => "Cet tableaux sont magnifiques.", "is_correct" => false],
                            ["choice_text" => "Ce tableaux est magnifique.", "is_correct" => false],
                        ],
                        "explanation" => "Tableaux est masculin pluriel. Pour montrer plusieurs éléments, le déterminant démonstratif correct est « ces ».",
                    ],
                    [
                        "question" => "Quelle phrase indique que vous ne possédez aucun ordinateur ?",
                        "choices" => [
                            ["choice_text" => "Je n'ai pas d'ordinateur.", "is_correct" => true],
                            ["choice_text" => "Je n'ai pas un ordinateur.", "is_correct" => false],
                            ["choice_text" => "Je n'ai pas de l'ordinateur.", "is_correct" => false],
                            ["choice_text" => "Je n'ai pas des ordinateur.", "is_correct" => false],
                        ],
                        "explanation" => "Après la négation, « un » devient « de ». Comme ordinateur commence par une voyelle, on écrit « d'ordinateur ».",
                    ],
                    [
                        "question" => "Vous demandez à un vendeur une seule chemise parmi plusieurs : « Je voudrais ___ chemise bleue. »",
                        "choices" => [
                            ["choice_text" => "une", "is_correct" => true],
                            ["choice_text" => "la", "is_correct" => false],
                            ["choice_text" => "des", "is_correct" => false],
                            ["choice_text" => "du", "is_correct" => false],
                        ],
                        "explanation" => "Chemise est féminin singulier et vous en demandez une parmi plusieurs possibilités. L'article indéfini « une » convient.",
                    ],
                    [
                        "question" => "Quelle phrase distingue correctement un objet nouveau et un objet déjà identifié ?",
                        "choices" => [
                            ["choice_text" => "J'ai acheté une lampe. La lampe est sur le bureau.", "is_correct" => true],
                            ["choice_text" => "J'ai acheté la lampe. Une lampe est sur le bureau.", "is_correct" => false],
                            ["choice_text" => "J'ai acheté un lampe. Le lampe est sur le bureau.", "is_correct" => false],
                            ["choice_text" => "J'ai acheté des lampe. Une lampe sont sur le bureau.", "is_correct" => false],
                        ],
                        "explanation" => "La première mention utilise « une » pour introduire une lampe. La seconde utilise « la » parce que la lampe est désormais identifiée.",
                    ],
                    [
                        "question" => "Complétez : « Pour préparer le repas, il faut ___ huile et ___ tomates. »",
                        "choices" => [
                            ["choice_text" => "de l' / des", "is_correct" => true],
                            ["choice_text" => "du / de la", "is_correct" => false],
                            ["choice_text" => "une / du", "is_correct" => false],
                            ["choice_text" => "des / un", "is_correct" => false],
                        ],
                        "explanation" => "Huile est féminin singulier et commence par une voyelle : « de l'huile ». Tomates est féminin pluriel : « des tomates ».",
                    ],
                    [
                        "question" => "Quelle phrase est correctement formée dans un bureau où plusieurs collègues connaissent déjà les documents ?",
                        "choices" => [
                            ["choice_text" => "Les documents sont sur votre bureau.", "is_correct" => true],
                            ["choice_text" => "Des documents sont sur votre bureau.", "is_correct" => false],
                            ["choice_text" => "Le documents sont sur votre bureau.", "is_correct" => false],
                            ["choice_text" => "Les document est sur votre bureau.", "is_correct" => false],
                        ],
                        "explanation" => "Les documents sont déjà identifiés dans le contexte, donc l'article défini « les » convient. « Documents » est aussi au pluriel.",
                    ],
                ],
            ],
            [
                "title" => "Révision globale des déterminants",
                "description" => "Révisez les articles et déterminants à travers des phrases variées qui demandent de comparer le nombre, le genre et le contexte.",
                "duration" => 30,
                "passing_score" => 65,
                "questions" => [
                    [
                        "question" => "Quel choix complète correctement : « ___ arbre est très vieux. »",
                        "choices" => [
                            ["choice_text" => "Cet", "is_correct" => true],
                            ["choice_text" => "Ce", "is_correct" => false],
                            ["choice_text" => "Cette", "is_correct" => false],
                            ["choice_text" => "Ces", "is_correct" => false],
                        ],
                        "explanation" => "Arbre est masculin singulier et commence par une voyelle. Le déterminant démonstratif correct est « cet ».",
                    ],
                    [
                        "question" => "Quelle phrase exprime correctement la possession de plusieurs clés ?",
                        "choices" => [
                            ["choice_text" => "J'ai mes clés dans mon sac.", "is_correct" => true],
                            ["choice_text" => "J'ai ma clés dans mon sac.", "is_correct" => false],
                            ["choice_text" => "J'ai mon clés dans mon sac.", "is_correct" => false],
                            ["choice_text" => "J'ai mes clé dans ma sac.", "is_correct" => false],
                        ],
                        "explanation" => "Clés est féminin pluriel, donc « mes clés » convient. Sac est masculin singulier, d'où « mon sac ».",
                    ],
                    [
                        "question" => "Vous parlez d'un café en général comme d'une boisson. Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Je bois du café tous les matins.", "is_correct" => true],
                            ["choice_text" => "Je bois de la café tous les matins.", "is_correct" => false],
                            ["choice_text" => "Je bois des café tous les matins.", "is_correct" => false],
                            ["choice_text" => "Je bois une café tous les matins.", "is_correct" => false],
                        ],
                        "explanation" => "Lorsqu'on parle d'une quantité non précisée de café, qui est un nom masculin singulier, on utilise « du café ».",
                    ],
                    [
                        "question" => "Une personne voit une chaussure précise parmi plusieurs. Elle dit : « Je prends ___ chaussure. »",
                        "choices" => [
                            ["choice_text" => "cette", "is_correct" => true],
                            ["choice_text" => "ce", "is_correct" => false],
                            ["choice_text" => "cet", "is_correct" => false],
                            ["choice_text" => "ces", "is_correct" => false],
                        ],
                        "explanation" => "Chaussure est féminin singulier. Comme la personne montre une chaussure précise, « cette » est le démonstratif adapté.",
                    ],
                    [
                        "question" => "Quelle phrase est correcte après « beaucoup » ?",
                        "choices" => [
                            ["choice_text" => "Nous avons beaucoup de travail.", "is_correct" => true],
                            ["choice_text" => "Nous avons beaucoup du travail dans tous les contextes.", "is_correct" => false],
                            ["choice_text" => "Nous avons beaucoup des travail.", "is_correct" => false],
                            ["choice_text" => "Nous avons beaucoup de la travail.", "is_correct" => false],
                        ],
                        "explanation" => "Après « beaucoup », on emploie normalement « de » devant un nom : « beaucoup de travail ».",
                    ],
                    [
                        "question" => "Vous présentez votre mère et plusieurs amis. Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Ma mère et mes amis arrivent.", "is_correct" => true],
                            ["choice_text" => "Mon mère et mes amis arrivent.", "is_correct" => false],
                            ["choice_text" => "Ma mère et mon amis arrivent.", "is_correct" => false],
                            ["choice_text" => "Mes mère et ma amis arrivent.", "is_correct" => false],
                        ],
                        "explanation" => "Mère est féminin singulier : « ma mère ». Amis est masculin pluriel : « mes amis ». Le verbe est au pluriel car le sujet contient deux groupes.",
                    ],
                    [
                        "question" => "Quelle phrase respecte le choix entre article défini et article partitif ?",
                        "choices" => [
                            ["choice_text" => "J'aime le fromage, mais je mange du pain.", "is_correct" => true],
                            ["choice_text" => "J'aime du fromage, mais je mange le pain dans tous les contextes.", "is_correct" => false],
                            ["choice_text" => "J'aime de la fromage, mais je mange du pain.", "is_correct" => false],
                            ["choice_text" => "J'aime le fromage, mais je mange de la pain.", "is_correct" => false],
                        ],
                        "explanation" => "« Le fromage » présente ici le fromage comme une catégorie que l'on apprécie. « Du pain » indique une quantité non précisée consommée.",
                    ],
                    [
                        "question" => "Quelle phrase est correcte dans une situation où une personne désigne plusieurs nouveaux livres ?",
                        "choices" => [
                            ["choice_text" => "Ces livres sont nouveaux.", "is_correct" => true],
                            ["choice_text" => "Cette livres sont nouveaux.", "is_correct" => false],
                            ["choice_text" => "Ce livres sont nouveaux.", "is_correct" => false],
                            ["choice_text" => "Cet livres est nouveau.", "is_correct" => false],
                        ],
                        "explanation" => "Livres est masculin pluriel. Le démonstratif pluriel « ces » est donc correct.",
                    ],
                    [
                        "question" => "Quelle phrase indique correctement l'absence totale de lait ?",
                        "choices" => [
                            ["choice_text" => "Il n'y a pas de lait.", "is_correct" => true],
                            ["choice_text" => "Il n'y a pas du lait.", "is_correct" => false],
                            ["choice_text" => "Il n'y a pas de la lait.", "is_correct" => false],
                            ["choice_text" => "Il n'y a pas un lait.", "is_correct" => false],
                        ],
                        "explanation" => "Dans cette négation, l'article partitif « du » devient « de » : « il n'y a pas de lait ».",
                    ],
                    [
                        "question" => "Quel choix convient dans « ___ amie arrive demain » lorsque l'amie appartient à la personne qui parle ?",
                        "choices" => [
                            ["choice_text" => "Mon", "is_correct" => true],
                            ["choice_text" => "Ma", "is_correct" => false],
                            ["choice_text" => "Mes", "is_correct" => false],
                            ["choice_text" => "Notre", "is_correct" => false],
                        ],
                        "explanation" => "Amie est féminin singulier, mais commence par une voyelle. On emploie donc « mon amie » pour éviter l'enchaînement « ma amie ».",
                    ],
                    [
                        "question" => "Vous introduisez deux objets dans un récit : un sac et une bouteille. Quelle phrase convient ?",
                        "choices" => [
                            ["choice_text" => "J'ai un sac et une bouteille.", "is_correct" => true],
                            ["choice_text" => "J'ai une sac et un bouteille.", "is_correct" => false],
                            ["choice_text" => "J'ai le sac et la bouteille dans tous les contextes.", "is_correct" => false],
                            ["choice_text" => "J'ai des sac et des bouteille.", "is_correct" => false],
                        ],
                        "explanation" => "Sac est masculin singulier et bouteille est féminin singulier. Comme ils sont présentés pour la première fois, on emploie « un » et « une ».",
                    ],
                    [
                        "question" => "Quelle phrase est correcte ?",
                        "choices" => [
                            ["choice_text" => "Notre professeur explique la leçon.", "is_correct" => true],
                            ["choice_text" => "Nos professeur explique la leçon.", "is_correct" => false],
                            ["choice_text" => "Notre professeurs expliquent la leçon.", "is_correct" => false],
                            ["choice_text" => "Notre professeur expliquent la leçon.", "is_correct" => false],
                        ],
                        "explanation" => "Professeur est masculin singulier, donc le possessif de « nous » est « notre ». Le verbe singulier « explique » s'accorde avec le sujet.",
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