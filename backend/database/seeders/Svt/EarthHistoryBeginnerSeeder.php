<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EarthHistoryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'earth-history')->firstOrFail();

        $quizzes = [
            [
                'title' => "Formation et débuts de la Terre",
                'description' => "Repérer la formation de la Terre et quelques grandes étapes de son histoire initiale.",
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Quel âge approximatif est attribué à la Terre ?",
                        'marks' => 1,
                        'explanation' => "Les méthodes radiométriques donnent un âge d’environ 4,54 milliards d’années.",
                        'choices' => [
                            [
                                'choice_text' => "Environ 4,54 milliards d’années",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Environ 454 millions d’années",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Environ 45,4 millions d’années",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Environ 45,4 milliards d’années",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel événement vient avant l’apparition de la vie ?",
                        'marks' => 1,
                        'explanation' => "La Terre s’est formée avant que des organismes puissent y apparaître.",
                        'choices' => [
                            [
                                'choice_text' => "La formation de la Terre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La disparition des dinosaures",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’apparition des premiers humains",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La dernière glaciation",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l’histoire géologique couvre-t-elle des milliards d’années ?",
                        'marks' => 1,
                        'explanation' => "Les changements géologiques et biologiques sont souvent très lents à l’échelle humaine.",
                        'choices' => [
                            [
                                'choice_text' => "Les processus de la Terre se déroulent sur des durées très longues",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Chaque année terrestre dure un milliard d’années",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les humains ont observé toute cette durée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Toutes les roches mettent un milliard d’années à se former",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel outil organise les grands événements de l’histoire de la Terre ?",
                        'marks' => 1,
                        'explanation' => "L’échelle des temps géologiques permet de situer les événements du plus ancien au plus récent.",
                        'choices' => [
                            [
                                'choice_text' => "L’échelle des temps géologiques",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le bulletin météorologique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La carte routière",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le calendrier scolaire",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une roche ancienne contient des traces d’organismes. Que peuvent-elles renseigner ?",
                        'marks' => 1,
                        'explanation' => "Les traces fossiles donnent des informations sur les organismes anciens.",
                        'choices' => [
                            [
                                'choice_text' => "La vie présente à l’époque du dépôt ou de la conservation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La météo exacte de chaque journée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La profondeur actuelle du noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La vitesse d’une voiture",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les continents actuels ne décrivent-ils pas nécessairement le paysage d’une époque ancienne ?",
                        'marks' => 1,
                        'explanation' => "La tectonique a déplacé les continents et modifié les bassins au cours du temps.",
                        'choices' => [
                            [
                                'choice_text' => "La configuration des continents a changé au cours du temps",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les océans n’ont jamais existé",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les continents sont immobiles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les montagnes ne changent jamais",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel grand phénomène biologique se produit à plusieurs moments de l’histoire de la Terre ?",
                        'marks' => 1,
                        'explanation' => "La biodiversité a augmenté, diminué et s’est réorganisée au cours des temps géologiques.",
                        'choices' => [
                            [
                                'choice_text' => "La diversification des organismes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La disparition définitive de toute vie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’arrêt du cycle de l’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La solidification totale des océans",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les océans ont-ils joué un rôle majeur dans l’histoire de la vie ?",
                        'marks' => 1,
                        'explanation' => "Une grande partie de l’histoire ancienne de la vie s’est déroulée dans les milieux marins.",
                        'choices' => [
                            [
                                'choice_text' => "Ils ont fourni de nombreux milieux favorables aux premiers organismes et à leur diversification",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ils n’ont jamais contenu de vie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils ont empêché toute photosynthèse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils sont apparus après les humains",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé décrit correctement une datation numérique ?",
                        'marks' => 1,
                        'explanation' => "Une datation numérique fournit une valeur d’âge, contrairement à une simple relation relative.",
                        'choices' => [
                            [
                                'choice_text' => "Elle attribue un âge exprimé en unités de temps",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle indique seulement plus ancien ou plus récent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle décrit uniquement les fossiles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle mesure la salinité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les roches anciennes sont-elles importantes pour les géologues ?",
                        'marks' => 1,
                        'explanation' => "Les roches sont des archives des anciens environnements et événements géologiques.",
                        'choices' => [
                            [
                                'choice_text' => "Elles conservent des indices sur les conditions et événements passés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles donnent toujours la température exacte du passé",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles sont toutes identiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles ne peuvent jamais être déformées",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Les grands découpages du temps",
                'description' => "Comprendre éons, ères, périodes et quelques repères comme le Mésozoïque et le Quaternaire.",
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Quelle unité est la plus vaste parmi éon, période et époque ?",
                        'marks' => 1,
                        'explanation' => "Un éon regroupe des intervalles beaucoup plus vastes que les périodes et les époques.",
                        'choices' => [
                            [
                                'choice_text' => "L’éon",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La période",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’époque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La saison",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le Mésozoïque est quoi ?",
                        'marks' => 1,
                        'explanation' => "Le Mésozoïque est une ère qui comprend le Trias, le Jurassique et le Crétacé.",
                        'choices' => [
                            [
                                'choice_text' => "Une ère géologique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une période de quelques jours",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un fossile",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un type de roche",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Laquelle est une période du Mésozoïque ?",
                        'marks' => 1,
                        'explanation' => "Le Jurassique appartient au Mésozoïque, entre le Trias et le Crétacé.",
                        'choices' => [
                            [
                                'choice_text' => "Le Jurassique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’Holocène",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le Quaternaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le Cambrien",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le Quaternaire appartient à quelle ère ?",
                        'marks' => 1,
                        'explanation' => "Le Quaternaire est une période récente du Cénozoïque.",
                        'choices' => [
                            [
                                'choice_text' => "Le Cénozoïque",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le Mésozoïque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le Paléozoïque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’Archéen",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel ordre est correct du plus ancien au plus récent dans le Mésozoïque ?",
                        'marks' => 1,
                        'explanation' => "La succession chronologique du Mésozoïque est Trias, Jurassique puis Crétacé.",
                        'choices' => [
                            [
                                'choice_text' => "Trias → Jurassique → Crétacé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Crétacé → Trias → Jurassique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Jurassique → Crétacé → Trias",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Trias → Crétacé → Jurassique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une frise géologique n’est-elle pas forcément divisée en périodes de durée égale ?",
                        'marks' => 1,
                        'explanation' => "Les unités géologiques ont des durées différentes selon leurs limites reconnues.",
                        'choices' => [
                            [
                                'choice_text' => "Les limites des unités sont définies par des repères géologiques",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les années ont une durée variable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La Terre change de vitesse chaque période",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les fossiles sont tous de même âge",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "L’Holocène est quoi ?",
                        'marks' => 1,
                        'explanation' => "L’Holocène est l’époque la plus récente du Quaternaire.",
                        'choices' => [
                            [
                                'choice_text' => "Une époque récente du Quaternaire",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une ère plus ancienne que le Mésozoïque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un fossile marin",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une plaque tectonique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel niveau de découpage est plus fin qu’une période ?",
                        'marks' => 1,
                        'explanation' => "Une époque constitue une subdivision d’une période.",
                        'choices' => [
                            [
                                'choice_text' => "L’époque",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’éon",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’ère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le continent",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les noms d’ères et de périodes sont-ils utiles ?",
                        'marks' => 1,
                        'explanation' => "Ces divisions servent de repères communs aux géologues et aux autres scientifiques.",
                        'choices' => [
                            [
                                'choice_text' => "Ils donnent des repères communs pour communiquer sur l’histoire de la Terre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ils remplacent toutes les datations",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils indiquent directement la météo",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils mesurent les distances",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche est datée du Crétacé. Quelle période est nécessairement plus ancienne ?",
                        'marks' => 1,
                        'explanation' => "Le Jurassique précède le Crétacé dans le Mésozoïque.",
                        'choices' => [
                            [
                                'choice_text' => "Le Jurassique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le Quaternaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’Holocène",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le Paléogène",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Superposition et succession des couches",
                'description' => "Appliquer le principe de superposition à des coupes sédimentaires simples.",
                'duration' => 19,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Dans une série sédimentaire non renversée, quelle couche est la plus ancienne ?",
                        'marks' => 1,
                        'explanation' => "Le principe de superposition place les couches inférieures avant les couches supérieures.",
                        'choices' => [
                            [
                                'choice_text' => "La couche inférieure",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La couche supérieure",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couche la plus colorée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couche la plus épaisse",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche A se trouve sous B. Quel énoncé est correct ?",
                        'marks' => 1,
                        'explanation' => "Dans une série non perturbée, A s’est déposée avant B.",
                        'choices' => [
                            [
                                'choice_text' => "A est plus ancienne que B",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "A est plus récente que B",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "A et B ont forcément le même âge",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "B est une roche magmatique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un élève affirme que la couche la plus épaisse est toujours la plus ancienne. Pourquoi est-ce faux ?",
                        'marks' => 1,
                        'explanation' => "L’âge relatif repose sur les relations entre couches, pas sur leur seule épaisseur.",
                        'choices' => [
                            [
                                'choice_text' => "L’épaisseur ne suffit pas pour déterminer l’âge relatif",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une couche épaisse est toujours plus jeune",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Toutes les couches ont la même épaisseur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’âge dépend seulement de la couleur",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une série montre C sous B sous A. Quelle chronologie est correcte ?",
                        'marks' => 1,
                        'explanation' => "Dans une série non renversée, la base est la partie la plus ancienne.",
                        'choices' => [
                            [
                                'choice_text' => "C puis B puis A",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "A puis B puis C",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "B puis A puis C",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "A puis C puis B",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche horizontale recouvre une surface érodée. Quel événement est antérieur au dépôt de la couche ?",
                        'marks' => 1,
                        'explanation' => "L’érosion doit avoir créé la surface avant son recouvrement par de nouveaux sédiments.",
                        'choices' => [
                            [
                                'choice_text' => "L’érosion de la surface",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le dépôt de la couche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La formation de la couche elle-même",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une pluie actuelle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche peut-elle être absente localement sans avoir été « détruite par le temps » partout ?",
                        'marks' => 1,
                        'explanation' => "Les lacunes stratigraphiques peuvent résulter d’une non-sédimentation ou d’une érosion.",
                        'choices' => [
                            [
                                'choice_text' => "Oui, elle peut ne pas s’être déposée ou avoir été érodée localement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Non, toutes les couches existent partout",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, seulement si elle est volcanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non, une couche ne peut jamais manquer",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle information est la plus utile pour reconstruire l’ordre de couches ?",
                        'marks' => 1,
                        'explanation' => "La géométrie des couches fournit l’ordre relatif lorsqu’elles ne sont pas renversées.",
                        'choices' => [
                            [
                                'choice_text' => "Leurs relations de superposition",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Leur couleur uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Leur distance au Soleil",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Leur masse volumique seulement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Des galets provenant d’une roche sous-jacente sont inclus dans une couche supérieure. Quelle est la plus ancienne ?",
                        'marks' => 1,
                        'explanation' => "Les galets doivent exister avant leur érosion et leur dépôt dans une couche plus récente.",
                        'choices' => [
                            [
                                'choice_text' => "La roche source des galets",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La couche qui contient les galets",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les deux ont forcément le même âge",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La surface actuelle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une série est fortement plissée. Peut-on appliquer la superposition sans vérifier le sens des couches ?",
                        'marks' => 1,
                        'explanation' => "Un plissement peut incliner ou renverser les couches ; il faut donc vérifier leur position réelle.",
                        'choices' => [
                            [
                                'choice_text' => "Non",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Oui, toujours",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, si les couches sont colorées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, uniquement dans les montagnes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une coupe géologique est-elle utile en chronologie ?",
                        'marks' => 1,
                        'explanation' => "Les relations spatiales aident à établir l’ordre relatif des dépôts et des événements.",
                        'choices' => [
                            [
                                'choice_text' => "Elle montre les relations spatiales entre les unités rocheuses",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle donne toujours un âge numérique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle mesure directement la température",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle remplace les fossiles",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Recoupements et événements successifs",
                'description' => "Utiliser failles, intrusions et surfaces d’érosion pour ordonner des événements.",
                'duration' => 21,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une faille coupe une couche sédimentaire. Quel événement est le plus récent ?",
                        'marks' => 1,
                        'explanation' => "La faille recoupe la couche et lui est donc postérieure.",
                        'choices' => [
                            [
                                'choice_text' => "La faille",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le dépôt de la couche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La formation de la surface initiale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’érosion antérieure",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un filon magmatique traverse plusieurs couches. Quelle relation est correcte ?",
                        'marks' => 1,
                        'explanation' => "Le principe de recoupement place le filon après les couches qu’il traverse.",
                        'choices' => [
                            [
                                'choice_text' => "Le filon est plus récent que les couches traversées",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le filon est toujours plus ancien",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Toutes les unités ont le même âge",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le filon est plus récent que la Terre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une faille coupe A et B mais pas C, qui les recouvre. Quel ordre est correct ?",
                        'marks' => 1,
                        'explanation' => "La faille est postérieure à A et B mais antérieure au dépôt de C.",
                        'choices' => [
                            [
                                'choice_text' => "A → B → faille → C",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Faille → A → B → C",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "C → faille → B → A",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "A → C → faille → B",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une intrusion recoupe une faille. Que peut-on dire ?",
                        'marks' => 1,
                        'explanation' => "L’intrusion coupe la structure existante et est donc postérieure.",
                        'choices' => [
                            [
                                'choice_text' => "L’intrusion est plus récente que la faille",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La faille est plus récente",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles sont forcément contemporaines",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Aucune relation n’est possible",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel principe compare surtout l’âge relatif d’un objet inclus et de la roche qui l’entoure ?",
                        'marks' => 1,
                        'explanation' => "Un fragment inclus doit être antérieur à la roche qui l’a incorporé.",
                        'choices' => [
                            [
                                'choice_text' => "Le principe d’inclusion",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le principe des marées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le principe de gravité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le principe de latitude",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une surface d’érosion tronque une ancienne faille. Quelle séquence est cohérente ?",
                        'marks' => 1,
                        'explanation' => "La faille devait exister avant d’être coupée par la surface d’érosion.",
                        'choices' => [
                            [
                                'choice_text' => "Faille puis érosion",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Érosion puis faille",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Faille après le dépôt qui la recouvre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les deux simultanément",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel élément indique une interruption de l’enregistrement sédimentaire ?",
                        'marks' => 1,
                        'explanation' => "Une discordance peut signaler une période d’érosion ou de non-dépôt.",
                        'choices' => [
                            [
                                'choice_text' => "Une discordance",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une couche parfaitement continue",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un cristal isolé",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une pluie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un filon peut-il aider à établir une chronologie ?",
                        'marks' => 1,
                        'explanation' => "Les relations de recoupement permettent de placer le filon après les unités traversées.",
                        'choices' => [
                            [
                                'choice_text' => "Parce qu’il recoupe les structures plus anciennes qu’il traverse",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce qu’il donne toujours son âge exact",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’il est toujours la roche la plus ancienne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’il indique la latitude",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche supérieure n’est pas coupée par une faille visible dessous. Quelle conclusion simple est possible ?",
                        'marks' => 1,
                        'explanation' => "La faille doit avoir cessé avant le dépôt de la couche qui la recouvre.",
                        'choices' => [
                            [
                                'choice_text' => "La couche supérieure est plus récente que l’activité de la faille",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La faille est plus récente que la couche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couche est forcément plus ancienne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Aucune comparaison n’est possible",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel est l’objectif principal d’une chronologie relative ?",
                        'marks' => 1,
                        'explanation' => "La chronologie relative répond à la question « avant ou après ? ».",
                        'choices' => [
                            [
                                'choice_text' => "Ordonner les événements",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Attribuer une température à chaque couche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Mesurer la masse de la Terre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Prévoir la météo",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche de cendres étendue peut-elle servir de repère ?",
                        'marks' => 1,
                        'explanation' => "Un niveau volcanique étendu et identifiable peut servir d’horizon repère.",
                        'choices' => [
                            [
                                'choice_text' => "Oui, pour corréler des niveaux entre plusieurs sites",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Non, une cendre est toujours sans valeur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, mais seulement comme sol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non, les cendres ne se déposent jamais",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Fossiles et chronologie",
                'description' => "Relier fossiles, stratigraphie et corrélations simples.",
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Quel fossile est le plus utile comme fossile stratigraphique ?",
                        'marks' => 1,
                        'explanation' => "Une large répartition et une durée d’existence courte améliorent la valeur stratigraphique.",
                        'choices' => [
                            [
                                'choice_text' => "Une espèce largement répartie et de courte durée d’existence",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une espèce rare et très localisée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une espèce présente depuis des centaines de millions d’années",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une espèce impossible à identifier",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Deux couches éloignées contiennent le même fossile stratigraphique. Quelle conclusion est possible ?",
                        'marks' => 1,
                        'explanation' => "Le fossile commun fournit un repère temporel permettant une corrélation.",
                        'choices' => [
                            [
                                'choice_text' => "Elles peuvent être corrélées en âge",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles ont forcément la même épaisseur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles ont forcément le même climat actuel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles sont au même niveau topographique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une espèce très longue dans le temps est-elle moins précise comme marqueur ?",
                        'marks' => 1,
                        'explanation' => "Sa longue durée d’existence réduit la précision temporelle.",
                        'choices' => [
                            [
                                'choice_text' => "Elle couvre une tranche de temps trop large",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle ne laisse jamais de fossiles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle est toujours terrestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle est toujours trop petite",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle méthode exploite directement les fossiles pour corréler des couches ?",
                        'marks' => 1,
                        'explanation' => "La biostratigraphie utilise la succession des fossiles pour établir des corrélations.",
                        'choices' => [
                            [
                                'choice_text' => "La biostratigraphie",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La météorologie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La gravimétrie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La climatologie quotidienne",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche contient un fossile caractéristique du Jurassique. Dans quelle période peut-on la situer en première approximation ?",
                        'marks' => 1,
                        'explanation' => "Le fossile fournit un indice stratigraphique cohérent avec le Jurassique.",
                        'choices' => [
                            [
                                'choice_text' => "Le Jurassique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le Quaternaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’Holocène",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le Paléogène",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche sans fossiles est-elle forcément plus ancienne qu’une couche fossilifère ?",
                        'marks' => 1,
                        'explanation' => "L’absence de fossiles ne donne pas à elle seule un âge relatif.",
                        'choices' => [
                            [
                                'choice_text' => "Non",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Oui",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, si elle est épaisse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, si elle est sombre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi utiliser plusieurs fossiles plutôt qu’un seul ?",
                        'marks' => 1,
                        'explanation' => "Une association fossile peut fournir une information plus robuste sur l’âge et l’environnement.",
                        'choices' => [
                            [
                                'choice_text' => "Pour renforcer la corrélation et mieux caractériser le milieu",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce qu’un fossile ne sert jamais",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour mesurer la pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour dater le noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un fossile repère est très commun mais présent pendant 150 millions d’années. Est-il idéal ?",
                        'marks' => 1,
                        'explanation' => "Un fossile stratigraphique doit permettre de réduire l’intervalle temporel, pas de l’élargir.",
                        'choices' => [
                            [
                                'choice_text' => "Non, sa durée est trop longue pour une corrélation fine",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Oui, une longue durée est toujours préférable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, s’il est grand",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non, parce qu’il est commun",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel autre indice peut encadrer l’âge d’une couche fossilifère ?",
                        'marks' => 1,
                        'explanation' => "Des couches volcaniques bien datées peuvent fournir des limites chronologiques.",
                        'choices' => [
                            [
                                'choice_text' => "Des niveaux volcaniques datables",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La couleur du ciel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La hauteur d’un arbre actuel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La température d’une maison",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la biostratigraphie reste-t-elle une datation relative ?",
                        'marks' => 1,
                        'explanation' => "Le fossile indique un intervalle temporel relatif ; un âge numérique exige d’autres méthodes.",
                        'choices' => [
                            [
                                'choice_text' => "Elle ordonne et corrèle des intervalles sans fournir nécessairement un âge numérique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle utilise uniquement des nombres exacts",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle ignore les couches",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle mesure seulement la salinité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Grandes diversifications de la vie",
                'description' => "Suivre les grandes phases d’apparition, diversification et renouvellement des groupes vivants.",
                'duration' => 23,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Que signifie la diversification d’un groupe ?",
                        'marks' => 1,
                        'explanation' => "La diversification correspond à la multiplication des lignées au cours du temps.",
                        'choices' => [
                            [
                                'choice_text' => "Une augmentation du nombre de lignées ou formes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La disparition de tous les membres du groupe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La fusion de toutes les espèces",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un changement de couleur seulement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l’oxygénation progressive de l’atmosphère a-t-elle été importante pour la vie ?",
                        'marks' => 1,
                        'explanation' => "L’augmentation d’oxygène a transformé les conditions de la biosphère.",
                        'choices' => [
                            [
                                'choice_text' => "Elle a modifié les conditions environnementales et permis l’expansion d’organismes utilisant l’oxygène",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle a supprimé l’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle a arrêté la tectonique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle a détruit tous les microbes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel groupe a été particulièrement diversifié au Mésozoïque sur les continents ?",
                        'marks' => 1,
                        'explanation' => "Les dinosaures occupaient de nombreuses niches terrestres pendant le Mésozoïque.",
                        'choices' => [
                            [
                                'choice_text' => "Les dinosaures",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les humains modernes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les trilobites modernes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les mammouths uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les végétaux ont-ils transformé les continents ?",
                        'marks' => 1,
                        'explanation' => "La végétation influence l’altération, les sols et les échanges de matière avec l’environnement.",
                        'choices' => [
                            [
                                'choice_text' => "Ils ont contribué à modifier les sols, les cycles chimiques et les habitats",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ils ont supprimé les océans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils ont empêché toute érosion",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils ont arrêté le cycle du carbone",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le registre fossile montre-t-il seulement des apparitions ?",
                        'marks' => 1,
                        'explanation' => "Les archives fossiles enregistrent apparitions, persistance, diversification et disparitions.",
                        'choices' => [
                            [
                                'choice_text' => "Non, il montre aussi extinctions et changements de diversité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Oui, aucune extinction n’y apparaît",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il montre uniquement des plantes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il ne contient jamais de traces",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les fossiles sont-ils une source importante pour l’évolution ?",
                        'marks' => 1,
                        'explanation' => "La succession des formes fossiles permet de suivre les changements biologiques.",
                        'choices' => [
                            [
                                'choice_text' => "Ils montrent des organismes présents à différentes époques",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ils donnent toujours l’ADN complet",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils indiquent la météo d’un jour",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils empêchent les comparaisons",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une nouvelle niche écologique devient disponible après une extinction. Que peut-il se produire ?",
                        'marks' => 1,
                        'explanation' => "Les niches libérées peuvent être occupées par des lignées survivantes qui se diversifient.",
                        'choices' => [
                            [
                                'choice_text' => "Une diversification des survivants",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une disparition obligatoire de tous les survivants",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une baisse immédiate de toutes les espèces",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une formation de magma",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une innovation biologique peut-elle favoriser une expansion de groupe ?",
                        'marks' => 1,
                        'explanation' => "Une innovation avantageuse peut permettre l’exploitation de nouvelles niches.",
                        'choices' => [
                            [
                                'choice_text' => "Oui, si elle ouvre l’accès à de nouvelles ressources ou habitats",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Non, une innovation réduit toujours la diversité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, mais seulement chez les roches",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non, les traits n’ont aucun effet",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l’évolution est-elle étudiée sur plusieurs générations ?",
                        'marks' => 1,
                        'explanation' => "L’évolution des populations s’observe à travers les générations.",
                        'choices' => [
                            [
                                'choice_text' => "Les changements héréditaires se transmettent au fil des générations",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les espèces changent entièrement pendant une journée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les fossiles apparaissent instantanément",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les individus deviennent une nouvelle espèce à la naissance",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une lignée disparaît du registre fossile. Quelle interprétation faut-il garder en tête ?",
                        'marks' => 1,
                        'explanation' => "L’absence fossile peut indiquer une extinction mais doit être interprétée avec prudence.",
                        'choices' => [
                            [
                                'choice_text' => "Une extinction possible, mais aussi l’incomplétude du registre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une survie certaine",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une création de minéraux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un changement de planète certain",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Crises biologiques majeures",
                'description' => "Reconnaître quelques extinctions majeures et leurs conséquences générales.",
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Quelle crise marque la limite Crétacé-Paléogène ?",
                        'marks' => 1,
                        'explanation' => "La limite Crétacé-Paléogène correspond à une crise biologique majeure.",
                        'choices' => [
                            [
                                'choice_text' => "Une extinction majeure de fin du Crétacé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une apparition de la Terre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une glaciation quotidienne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La naissance des océans",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel groupe célèbre disparaît à la fin du Crétacé, à l’exception des oiseaux ?",
                        'marks' => 1,
                        'explanation' => "Les dinosaures non aviens disparaissent lors de la crise de fin du Crétacé ; les oiseaux survivent.",
                        'choices' => [
                            [
                                'choice_text' => "Les dinosaures non aviens",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Tous les mammifères",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Tous les poissons",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Tous les insectes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La « Grande Mort » désigne généralement quelle crise ?",
                        'marks' => 1,
                        'explanation' => "La crise Permien-Trias est la plus importante extinction de masse connue par son ampleur.",
                        'choices' => [
                            [
                                'choice_text' => "La crise Permien-Trias",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La crise Quaternaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La fin de l’Holocène",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La crise du Jurassique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une extinction de masse peut-elle avoir plusieurs causes ?",
                        'marks' => 1,
                        'explanation' => "Les grandes crises peuvent résulter de plusieurs facteurs environnementaux combinés.",
                        'choices' => [
                            [
                                'choice_text' => "Oui",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Non",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Seulement chez les plantes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Seulement dans les océans",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel effet une extinction massive a-t-elle sur les écosystèmes ?",
                        'marks' => 1,
                        'explanation' => "La disparition de nombreux groupes modifie les chaînes alimentaires et les niches disponibles.",
                        'choices' => [
                            [
                                'choice_text' => "Elle réorganise fortement les réseaux alimentaires et la biodiversité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle rend tous les écosystèmes identiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle stoppe toute évolution",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle supprime toujours les océans",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la diversité peut-elle augmenter après une crise ?",
                        'marks' => 1,
                        'explanation' => "La disponibilité de niches peut favoriser une diversification post-crise.",
                        'choices' => [
                            [
                                'choice_text' => "Les survivants peuvent se diversifier dans des niches libérées",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les espèces disparues reviennent toutes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les fossiles créent des espèces",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les roches produisent des animaux",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel indice peut révéler une crise biologique ancienne ?",
                        'marks' => 1,
                        'explanation' => "Une baisse importante et corrélée de la diversité fossile est un signal classique de crise.",
                        'choices' => [
                            [
                                'choice_text' => "Une chute brutale de la diversité fossile à une limite stratigraphique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une pluie actuelle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une route moderne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couleur d’une rivière",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une extinction mondiale se distingue d’une disparition locale par quoi ?",
                        'marks' => 1,
                        'explanation' => "Une crise mondiale a une extension géographique et biologique beaucoup plus large.",
                        'choices' => [
                            [
                                'choice_text' => "Elle touche de nombreuses régions et de nombreux groupes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle touche une seule vallée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle concerne un seul individu",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle se produit uniquement dans une ferme",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l’absence d’un fossile dans une couche ne prouve-t-elle pas toujours son extinction ?",
                        'marks' => 1,
                        'explanation' => "Une lacune de conservation ou d’échantillonnage peut créer une absence apparente.",
                        'choices' => [
                            [
                                'choice_text' => "Le registre fossile est incomplet",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Tous les fossiles vivent encore",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les couches empêchent la fossilisation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les espèces changent de nom chaque année",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel changement environnemental peut accompagner une crise biologique ?",
                        'marks' => 1,
                        'explanation' => "Les grandes crises sont souvent associées à des changements environnementaux de grande ampleur.",
                        'choices' => [
                            [
                                'choice_text' => "Une modification importante du climat ou de la chimie des océans",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une petite pluie locale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une journée nuageuse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une rotation terrestre arrêtée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Lire une coupe complexe simple",
                'description' => "Combiner plusieurs principes pour ordonner une succession d’événements.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une série A-B-C est recouverte par une discordance puis une couche D. Que faut-il placer avant D ?",
                        'marks' => 1,
                        'explanation' => "La discordance représente un épisode antérieur au dépôt de D.",
                        'choices' => [
                            [
                                'choice_text' => "La déformation ou l’érosion représentée par la discordance",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "D puis l’érosion",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "D puis A",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "C après D",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un filon E coupe A, B et C mais pas D. Quel ordre est correct ?",
                        'marks' => 1,
                        'explanation' => "Le filon est postérieur aux couches qu’il coupe et antérieur à D.",
                        'choices' => [
                            [
                                'choice_text' => "A-B-C → E → D",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "E → A-B-C → D",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "D → E → A-B-C",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "A → D → B → C → E",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une faille F coupe A et B ; une intrusion G coupe F. Quel événement est plus récent ?",
                        'marks' => 1,
                        'explanation' => "Une intrusion qui coupe la faille est postérieure à celle-ci.",
                        'choices' => [
                            [
                                'choice_text' => "G",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "F",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "A",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "B",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche fossilifère H est sous I dans une série non perturbée. Laquelle est plus récente ?",
                        'marks' => 1,
                        'explanation' => "La superposition place I après H.",
                        'choices' => [
                            [
                                'choice_text' => "I",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "H",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les deux ont forcément le même âge",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le fossile le plus grand",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Des galets d’une roche J sont inclus dans K. Quelle relation est correcte ?",
                        'marks' => 1,
                        'explanation' => "Le principe d’inclusion indique que les fragments existaient avant leur dépôt.",
                        'choices' => [
                            [
                                'choice_text' => "J est plus ancienne que K",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "K est plus ancienne que J",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "J et K sont contemporaines",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les galets sont toujours plus jeunes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une ancienne série inclinée est recouverte par une série horizontale. Que peut révéler la surface entre elles ?",
                        'marks' => 1,
                        'explanation' => "La différence d’orientation et la surface peuvent enregistrer un épisode tectonique suivi d’érosion.",
                        'choices' => [
                            [
                                'choice_text' => "Une déformation suivie d’érosion",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un simple changement de couleur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une pluie unique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une formation du noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi combine-t-on fossiles et relations géométriques ?",
                        'marks' => 1,
                        'explanation' => "Plusieurs indices indépendants peuvent rendre l’interprétation plus robuste.",
                        'choices' => [
                            [
                                'choice_text' => "Pour renforcer la chronologie et les corrélations",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que chaque méthode donne le même résultat automatiquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour mesurer la pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour remplacer toute observation",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche de cendres se trouve entre deux unités sédimentaires. Quel rôle peut-elle jouer ?",
                        'marks' => 1,
                        'explanation' => "Une couche volcanique étendue peut servir de repère stratigraphique.",
                        'choices' => [
                            [
                                'choice_text' => "Un horizon repère pour corréler les séries",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un horizon de sol moderne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une preuve d’eau douce",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un fossile",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle question doit-on poser en premier devant une coupe inconnue ?",
                        'marks' => 1,
                        'explanation' => "L’analyse des relations géométriques donne la base de la chronologie relative.",
                        'choices' => [
                            [
                                'choice_text' => "Quelles unités se superposent ou se recoupent ?",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Quelle couche est la plus colorée ?",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Quelle roche est la plus lourde ?",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Quelle pluie est tombée ?",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une faille est recouverte par une couche qui n’est pas décalée. Que peut-on placer entre faille et dépôt ?",
                        'marks' => 1,
                        'explanation' => "La surface peut enregistrer une période d’activité puis d’arrêt avant un nouveau dépôt.",
                        'choices' => [
                            [
                                'choice_text' => "Une phase d’érosion ou de préparation de la surface est possible",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une deuxième faille obligatoire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une nouvelle planète",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une période de photosynthèse",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Fossiles, milieux et histoire terrestre",
                'description' => "Relier les fossiles aux environnements anciens et aux changements de la Terre.",
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Un fossile de corail marin suggère quel milieu au moment du dépôt ?",
                        'marks' => 1,
                        'explanation' => "Les coraux constructeurs sont associés à des milieux marins éclairés, souvent peu profonds.",
                        'choices' => [
                            [
                                'choice_text' => "Un milieu marin peu profond favorable aux coraux",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un désert froid",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un glacier continental",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un milieu nécessairement volcanique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Des fossiles de plantes terrestres apparaissent dans une série. Que peuvent-ils indiquer ?",
                        'marks' => 1,
                        'explanation' => "Les fossiles végétaux renseignent sur la présence d’une flore terrestre et sur son environnement.",
                        'choices' => [
                            [
                                'choice_text' => "La présence d’une végétation terrestre passée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La salinité actuelle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La profondeur du noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La magnitude d’un séisme",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une succession passe de fossiles marins à terrestres. Quelle interprétation est possible ?",
                        'marks' => 1,
                        'explanation' => "Les communautés fossiles peuvent enregistrer un changement de milieu au cours du temps.",
                        'choices' => [
                            [
                                'choice_text' => "Un changement du milieu ou du niveau marin",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une disparition de l’atmosphère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une fusion des continents",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une preuve de climat actuel",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une roche marine peut-elle aujourd’hui se trouver en montagne ?",
                        'marks' => 1,
                        'explanation' => "La tectonique peut soulever d’anciennes séries marines puis l’érosion les expose.",
                        'choices' => [
                            [
                                'choice_text' => "Elle a pu être soulevée par la tectonique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les océans étaient toujours en montagne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les fossiles montent spontanément",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La pluie déplace les continents",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel indice est davantage environnemental que chronologique ?",
                        'marks' => 1,
                        'explanation' => "Les exigences écologiques des organismes servent à reconstituer l’environnement.",
                        'choices' => [
                            [
                                'choice_text' => "Une association de fossiles indiquant un milieu marin",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une faille",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un filon",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une couche datée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi des fossiles terrestres peuvent-ils être rares dans certaines roches ?",
                        'marks' => 1,
                        'explanation' => "La fossilisation dépend du milieu et n’enregistre pas toutes les communautés.",
                        'choices' => [
                            [
                                'choice_text' => "Les conditions de conservation étaient défavorables ou le dépôt s’est fait en milieu marin",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les plantes n’ont jamais vécu",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les fossiles terrestres sont toujours détruits par le froid",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les roches marines ne se conservent pas",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un fossile est très répandu mais à longue durée d’existence. Quelle limite présente-t-il ?",
                        'marks' => 1,
                        'explanation' => "La longue durée de présence réduit la résolution chronologique.",
                        'choices' => [
                            [
                                'choice_text' => "Il est moins précis pour dater une couche",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il est toujours le meilleur repère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il donne l’âge exact",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il indique directement le climat",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi comparer plusieurs sites fossiles ?",
                        'marks' => 1,
                        'explanation' => "La comparaison de sites permet de tester l’extension géographique d’un signal.",
                        'choices' => [
                            [
                                'choice_text' => "Pour distinguer un changement local d’un changement plus général",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour supprimer toutes les incertitudes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour mesurer la masse de la Terre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour éviter la stratigraphie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un fossile apparaît dans une couche puis n’est plus observé dans les couches supérieures. Quelle conclusion prudente est possible ?",
                        'marks' => 1,
                        'explanation' => "L’absence peut correspondre à une extinction ou à un manque de conservation.",
                        'choices' => [
                            [
                                'choice_text' => "Une disparition est possible, mais il faut considérer les lacunes du registre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’espèce vit forcément encore",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle s’est transformée en roche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle a quitté la Terre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les fossiles et les roches sédimentaires sont-ils liés dans l’histoire géologique ?",
                        'marks' => 1,
                        'explanation' => "Les sédiments peuvent enfouir et préserver les restes ou traces d’organismes.",
                        'choices' => [
                            [
                                'choice_text' => "Oui, les dépôts sédimentaires sont les principaux contextes de conservation fossile",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Non, les fossiles ne se trouvent jamais dans les sédiments",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, mais seulement dans les roches magmatiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non, les fossiles se forment dans le noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Synthèse de l’histoire de la Terre",
                'description' => "Réviser les liens entre temps géologiques, événements, fossiles et chronologie relative.",
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Quel est le but d’une chronologie géologique ?",
                        'marks' => 1,
                        'explanation' => "Elle organise les événements dans leur succession temporelle.",
                        'choices' => [
                            [
                                'choice_text' => "Ordonner les grands événements de la Terre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Mesurer la météo",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Calculer la salinité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Prévoir les séismes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel principe place une couche inférieure avant une couche supérieure ?",
                        'marks' => 1,
                        'explanation' => "La superposition est la règle de base pour une série sédimentaire non renversée.",
                        'choices' => [
                            [
                                'choice_text' => "La superposition",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La réfraction",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La gravité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La conduction",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel principe place un filon après une roche qu’il traverse ?",
                        'marks' => 1,
                        'explanation' => "Un objet géologique qui en coupe un autre est postérieur à celui-ci.",
                        'choices' => [
                            [
                                'choice_text' => "Le recoupement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La flottabilité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La photosynthèse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La saisonnalité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel indice permet de corréler deux couches éloignées ?",
                        'marks' => 1,
                        'explanation' => "Un fossile repère présent dans les deux niveaux fournit une corrélation possible.",
                        'choices' => [
                            [
                                'choice_text' => "Un fossile stratigraphique commun",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une pluie commune",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couleur des villes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un arbre actuel",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle grande ère comprend le Crétacé ?",
                        'marks' => 1,
                        'explanation' => "Le Crétacé est la dernière période du Mésozoïque.",
                        'choices' => [
                            [
                                'choice_text' => "Le Mésozoïque",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le Cénozoïque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le Paléozoïque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’Archéen",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle unité vient après le Mésozoïque dans l’échelle simplifiée des grandes ères ?",
                        'marks' => 1,
                        'explanation' => "Le Cénozoïque succède au Mésozoïque.",
                        'choices' => [
                            [
                                'choice_text' => "Le Cénozoïque",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’Archéen",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le Paléozoïque",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’Hadéen",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une extinction de masse peut-elle être suivie d’une diversification ?",
                        'marks' => 1,
                        'explanation' => "Les survivants peuvent exploiter des niches libérées et se diversifier.",
                        'choices' => [
                            [
                                'choice_text' => "Oui",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Non",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Seulement dans les océans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Seulement chez les plantes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les archives fossiles sont-elles incomplètes ?",
                        'marks' => 1,
                        'explanation' => "La conservation fossile est un processus sélectif et incomplet.",
                        'choices' => [
                            [
                                'choice_text' => "La fossilisation et la conservation dépendent de conditions particulières",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Toutes les espèces se fossilisent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les fossiles disparaissent dès qu’ils sont découverts",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les roches détruisent toujours la vie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé décrit une datation relative ?",
                        'marks' => 1,
                        'explanation' => "La datation relative établit des relations d’ordre sans fournir nécessairement un âge numérique.",
                        'choices' => [
                            [
                                'choice_text' => "« Cet événement est antérieur à celui-ci »",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "« Cette roche a 120 millions d’années »",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "« Cette eau est à 20 °C »",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "« La couche a 30 % de sable »",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel est l’intérêt général d’associer plusieurs indices géologiques ?",
                        'marks' => 1,
                        'explanation' => "La convergence de plusieurs indices donne une reconstruction plus solide.",
                        'choices' => [
                            [
                                'choice_text' => "Réduire l’incertitude de l’interprétation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Rendre toutes les roches identiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Éviter toute chronologie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Remplacer les observations",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche de cendres bien datée est retrouvée dans plusieurs régions. Quel avantage offre-t-elle ?",
                        'marks' => 1,
                        'explanation' => "Un niveau volcanique étendu peut faciliter la corrélation des couches entre régions.",
                        'choices' => [
                            [
                                'choice_text' => "Un repère chronologique commun",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une mesure de la pluviométrie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une preuve d’eau douce",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un horizon biologique actuel",
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
