<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class OceanographyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'oceanography')->firstOrFail();

        $quizzes = [
            [
                'title' => "Structure et grands domaines de l’océan",
                'description' => "Identifier les principales zones océaniques, la profondeur, la pression et les caractéristiques du milieu marin.",
                'duration' => 19,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Sur un planisphère, Salma observe que l’eau domine largement. Quelle part de la surface de la Terre les océans et les mers recouvrent-ils ?",
                        'marks' => 1,
                        'explanation' => "Les océans et les mers couvrent environ 71 % de la surface du globe ; les 29 % restants correspondent aux terres émergées.",
                        'choices' => [
                            ['choice_text' => "Environ 29 %", 'is_correct' => false],
                            ['choice_text' => "Environ 50 %", 'is_correct' => false],
                            ['choice_text' => "Environ 71 %", 'is_correct' => true],
                            ['choice_text' => "Environ 90 %", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Salma pêche depuis la jetée d’Essaouira, au contact direct du continent. Dans quelle zone de l’océan se trouve-t-elle ?",
                        'marks' => 1,
                        'explanation' => "La zone côtière borde le littoral et subit l’influence directe du continent : fleuves, ruissellement, marées. Les trois autres zones se situent bien plus au large et en profondeur.",
                        'choices' => [
                            ['choice_text' => "La plaine abyssale", 'is_correct' => false],
                            ['choice_text' => "La dorsale médio-océanique", 'is_correct' => false],
                            ['choice_text' => "La zone côtière", 'is_correct' => true],
                            ['choice_text' => "La fosse océanique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un banc de thons traverse la haute mer sans jamais toucher le fond. Dans quel domaine vit-il ?",
                        'marks' => 1,
                        'explanation' => "Le domaine pélagique désigne toute la colonne d’eau, de la surface jusqu’au voisinage du fond, par opposition au domaine benthique qui est le fond lui-même — qu’on soit près de la côte ou en haute mer.",
                        'choices' => [
                            ['choice_text' => "Le domaine benthique, au contact du fond", 'is_correct' => false],
                            ['choice_text' => "Le domaine pélagique, la colonne d’eau", 'is_correct' => true],
                            ['choice_text' => "Le domaine hadal, tout au fond des fosses", 'is_correct' => false],
                            ['choice_text' => "Le domaine estuarien, à l’embouchure des fleuves", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un crabe vit et se nourrit sur le fond de la mer. Comment qualifie-t-on ce mode de vie ?",
                        'marks' => 1,
                        'explanation' => "Les organismes benthiques vivent sur ou dans le fond marin. Les organismes nectoniques nagent activement dans l’eau et les planctoniques y dérivent.",
                        'choices' => [
                            ['choice_text' => "Pélagique", 'is_correct' => false],
                            ['choice_text' => "Planctonique", 'is_correct' => false],
                            ['choice_text' => "Nectonique", 'is_correct' => false],
                            ['choice_text' => "Benthique", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un sous-marin de recherche descend de 100 m à 3 000 m. Quelle grandeur augmente à mesure qu’il s’enfonce ?",
                        'marks' => 1,
                        'explanation' => "Chaque mètre d’eau supplémentaire ajoute son poids : la pression monte avec la profondeur, tandis que la lumière et la température diminuent.",
                        'choices' => [
                            ['choice_text' => "La lumière disponible", 'is_correct' => false],
                            ['choice_text' => "L’agitation des vagues", 'is_correct' => false],
                            ['choice_text' => "La température de l’eau", 'is_correct' => false],
                            ['choice_text' => "La pression de l’eau", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quand on descend sous la surface, la lumière du Soleil s’affaiblit vite. Qu’est-ce qui l’explique ?",
                        'marks' => 1,
                        'explanation' => "L’eau absorbe puis diffuse la lumière, si bien que le rayonnement utile à la photosynthèse disparaît sous 200 m environ.",
                        'choices' => [
                            ['choice_text' => "La pression bloque les rayons du Soleil", 'is_correct' => false],
                            ['choice_text' => "L’eau absorbe et diffuse le rayonnement solaire", 'is_correct' => true],
                            ['choice_text' => "Le froid des profondeurs éteint la lumière", 'is_correct' => false],
                            ['choice_text' => "Le fond de l’océan absorbe les rayons venus d’en haut", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le phytoplancton a besoin de lumière pour se développer. Dans quelle couche de l’océan le trouve-t-on surtout ?",
                        'marks' => 1,
                        'explanation' => "La zone photique reçoit assez de lumière pour la photosynthèse ; c’est là que vit le phytoplancton, base de la chaîne alimentaire marine.",
                        'choices' => [
                            ['choice_text' => "La zone photique, proche de la surface", 'is_correct' => true],
                            ['choice_text' => "La zone aphotique, sous 1 000 m", 'is_correct' => false],
                            ['choice_text' => "La zone des plaines abyssales", 'is_correct' => false],
                            ['choice_text' => "La zone des fosses les plus profondes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un robot sous-marin plonge à 4 000 m de profondeur. Quelles conditions y rencontre-t-il ?",
                        'marks' => 1,
                        'explanation' => "À 4 000 m, aucune lumière du Soleil n’arrive, et la pression atteint environ 400 fois celle de l’air.",
                        'choices' => [
                            ['choice_text' => "Un éclairage faible et une pression proche de celle de la surface", 'is_correct' => false],
                            ['choice_text' => "Une eau tiède éclairée par le Soleil", 'is_correct' => false],
                            ['choice_text' => "Une pression nulle et une eau très chaude", 'is_correct' => false],
                            ['choice_text' => "Une obscurité complète et une très forte pression", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quel ensemble de reliefs trouve-t-on sur le plancher océanique ?",
                        'marks' => 1,
                        'explanation' => "Le fond des océans alterne dorsales, vastes plaines abyssales et fosses profondes. Plages, falaises ou deltas appartiennent au littoral.",
                        'choices' => [
                            ['choice_text' => "Des dunes, des falaises et des plages", 'is_correct' => false],
                            ['choice_text' => "Des deltas, des estuaires et des lagunes", 'is_correct' => false],
                            ['choice_text' => "Dorsales, plaines abyssales et fosses", 'is_correct' => true],
                            ['choice_text' => "Des glaciers, des vallées et des plateaux alpins", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Comment appelle-t-on la science qui mesure les profondeurs et dessine le relief du fond marin ?",
                        'marks' => 1,
                        'explanation' => "La bathymétrie cartographie les profondeurs océaniques, avec un sonar. La limnologie étudie les lacs, la sismologie les séismes.",
                        'choices' => [
                            ['choice_text' => "La bathymétrie", 'is_correct' => true],
                            ['choice_text' => "La limnologie", 'is_correct' => false],
                            ['choice_text' => "La sismologie", 'is_correct' => false],
                            ['choice_text' => "La météorologie", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le plus grand océan de la planète ?",
                        'marks' => 1,
                        'explanation' => "Le Pacifique couvre à lui seul près d’un tiers de la surface du globe, plus que toutes les terres émergées réunies.",
                        'choices' => [
                            ['choice_text' => "L’océan Pacifique", 'is_correct' => true],
                            ['choice_text' => "L’océan Atlantique", 'is_correct' => false],
                            ['choice_text' => "L’océan Indien", 'is_correct' => false],
                            ['choice_text' => "L’océan Arctique", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Salinité et propriétés de l’eau de mer",
                'description' => "Comprendre la salinité, sa variation et son influence sur la densité de l’eau.",
                'duration' => 21,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Que mesure la salinité de l’eau de mer ?",
                        'marks' => 1,
                        'explanation' => "La salinité indique la masse de sels dissous dans l’eau, en grammes par kilogramme. Oxygène dissous et particules en suspension sont d’autres mesures.",
                        'choices' => [
                            ['choice_text' => "La quantité d’oxygène dissous dans l’eau", 'is_correct' => false],
                            ['choice_text' => "La quantité de sels dissous dans l’eau", 'is_correct' => true],
                            ['choice_text' => "La température moyenne de la masse d’eau", 'is_correct' => false],
                            ['choice_text' => "La quantité de particules en suspension", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Au bord d’un marais salant, Youssef voit l’eau s’évaporer au soleil et le sel se déposer. Quel effet l’évaporation a-t-elle sur la salinité de l’eau restante ?",
                        'marks' => 1,
                        'explanation' => "Seule l’eau passe en vapeur ; les sels dissous restent et se concentrent. Les marais salants fonctionnent sur ce principe.",
                        'choices' => [
                            ['choice_text' => "Elle diminue, car le sel s’évapore avec l’eau", 'is_correct' => false],
                            ['choice_text' => "Elle ne change pas, car sel et eau partent ensemble", 'is_correct' => false],
                            ['choice_text' => "Elle diminue, car la chaleur dissout le sel", 'is_correct' => false],
                            ['choice_text' => "Elle augmente, car le sel reste alors que l’eau s’en va", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Après de fortes crues, un grand fleuve déverse beaucoup d’eau douce dans la mer. Que devient la salinité de l’eau près de l’embouchure ?",
                        'marks' => 1,
                        'explanation' => "L’eau douce contient très peu de sels : elle dilue l’eau de mer et abaisse la salinité près de l’embouchure. Plus loin, le mélange atténue l’effet.",
                        'choices' => [
                            ['choice_text' => "Elle monte, car l’eau douce charrie des sels en excès", 'is_correct' => false],
                            ['choice_text' => "Elle reste identique à celle du large", 'is_correct' => false],
                            ['choice_text' => "Elle s’annule dans toute la baie", 'is_correct' => false],
                            ['choice_text' => "Elle baisse, l’eau douce diluant l’eau de mer", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Combien de sels contient en moyenne un kilogramme d’eau de mer en plein océan ?",
                        'marks' => 1,
                        'explanation' => "La salinité moyenne de l’océan ouvert est d’environ 35 g de sels par kilogramme, soit 3,5 %.",
                        'choices' => [
                            ['choice_text' => "Environ 3,5 kg", 'is_correct' => false],
                            ['choice_text' => "Environ 350 g", 'is_correct' => false],
                            ['choice_text' => "Environ 35 g", 'is_correct' => true],
                            ['choice_text' => "Environ 3,5 g", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel sel domine largement parmi les sels dissous de l’eau de mer ?",
                        'marks' => 1,
                        'explanation' => "Le chlorure de sodium représente plus de 85 % des sels dissous de l’eau de mer.",
                        'choices' => [
                            ['choice_text' => "Le chlorure de sodium, le sel de cuisine", 'is_correct' => true],
                            ['choice_text' => "Le carbonate de calcium, le calcaire", 'is_correct' => false],
                            ['choice_text' => "Le sulfate de magnésium, le sel d’Epsom", 'is_correct' => false],
                            ['choice_text' => "Le nitrate de potassium, l’engrais", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "L’eau douce gèle à 0 °C. À quelle température environ gèle l’eau de mer au large ?",
                        'marks' => 1,
                        'explanation' => "Les sels dissous abaissent le point de congélation : l’eau de mer à 35 g par kilogramme gèle vers −1,9 °C.",
                        'choices' => [
                            ['choice_text' => "Vers 0 °C, à la même température que l’eau douce", 'is_correct' => false],
                            ['choice_text' => "Vers −2 °C, plus bas que l’eau douce", 'is_correct' => true],
                            ['choice_text' => "Vers −20 °C, bien plus bas que l’eau douce", 'is_correct' => false],
                            ['choice_text' => "Vers +4 °C, avant l’eau douce", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux masses d’eau sont prélevées : A à 5 °C avec une salinité de 36, B à 20 °C avec une salinité de 34. Laquelle est la plus dense ?",
                        'marks' => 1,
                        'explanation' => "Le froid et le sel augmentent tous deux la densité de l’eau de mer : A l’emporte donc sur les deux critères.",
                        'choices' => [
                            ['choice_text' => "B, car la chaleur tasse les molécules d’eau", 'is_correct' => false],
                            ['choice_text' => "Les deux ont la même densité", 'is_correct' => false],
                            ['choice_text' => "B, car elle est moins salée", 'is_correct' => false],
                            ['choice_text' => "A, car elle est plus froide et plus salée", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un litre d’eau de mer contient environ 35 g de sels. Quelle masse de sels reste-t-il quand on laisse s’évaporer 10 litres ?",
                        'marks' => 1,
                        'explanation' => "10 litres contiennent 10 × 35 = 350 g de sels, qui restent après l’évaporation de l’eau.",
                        'choices' => [
                            ['choice_text' => "3 500 g", 'is_correct' => false],
                            ['choice_text' => "350 g", 'is_correct' => true],
                            ['choice_text' => "45 g", 'is_correct' => false],
                            ['choice_text' => "35 g", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une usine de dessalement, comme celle d’Agadir, produit de l’eau potable à partir de l’eau de mer. Quel constituant de l’eau de mer rend celle-ci impropre à la boisson ?",
                        'marks' => 1,
                        'explanation' => "Une eau contenant 35 g de sels par kilogramme est imbuvable ; le dessalement retire ces sels pour obtenir de l’eau douce.",
                        'choices' => [
                            ['choice_text' => "Les sels dissous", 'is_correct' => true],
                            ['choice_text' => "L’oxygène dissous", 'is_correct' => false],
                            ['choice_text' => "L’azote de l’air dissous", 'is_correct' => false],
                            ['choice_text' => "Le dioxyde de carbone dissous", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel instrument embarqué sur un navire océanographique mesure la salinité grâce à la conductivité de l’eau ?",
                        'marks' => 1,
                        'explanation' => "La sonde CTD mesure la conductivité, la température et la profondeur ; la conductivité sert à calculer la salinité.",
                        'choices' => [
                            ['choice_text' => "Un sismomètre", 'is_correct' => false],
                            ['choice_text' => "Un anémomètre", 'is_correct' => false],
                            ['choice_text' => "Une sonde CTD", 'is_correct' => true],
                            ['choice_text' => "Un marégraphe", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Courants océaniques et circulation",
                'description' => "Relier vents, densité, courants, upwelling et redistribution de chaleur.",
                'duration' => 23,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Quelle phrase définit le mieux un courant océanique ?",
                        'marks' => 1,
                        'explanation' => "Un courant déplace réellement de l’eau, sur des distances pouvant atteindre des milliers de kilomètres. La vague, la marée et le tsunami sont d’autres phénomènes.",
                        'choices' => [
                            ['choice_text' => "Une oscillation de la surface qui avance sans emporter d’eau", 'is_correct' => false],
                            ['choice_text' => "Un déplacement organisé d’une masse d’eau sur une grande distance", 'is_correct' => true],
                            ['choice_text' => "Une montée et une descente régulières du niveau de la mer", 'is_correct' => false],
                            ['choice_text' => "Un mouvement brutal du fond marin après un séisme", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Les alizés soufflent de façon régulière sur l’Atlantique tropical. Quel effet ont-ils sur l’eau de surface ?",
                        'marks' => 1,
                        'explanation' => "Le vent frotte sur l’eau et la met en mouvement : la plupart des courants de surface sont mis en route par les vents.",
                        'choices' => [
                            ['choice_text' => "Ils font monter le niveau de la mer deux fois par jour", 'is_correct' => false],
                            ['choice_text' => "Ils creusent des fosses dans le fond", 'is_correct' => false],
                            ['choice_text' => "Ils augmentent la salinité des grands fonds", 'is_correct' => false],
                            ['choice_text' => "Ils entraînent l’eau de surface et créent des courants", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quel rôle jouent les courants océaniques dans le climat de la Terre ?",
                        'marks' => 1,
                        'explanation' => "En emportant de l’eau chaude vers les pôles et de l’eau froide vers l’équateur, les courants redistribuent la chaleur sur la planète.",
                        'choices' => [
                            ['choice_text' => "Ils transportent de la chaleur vers les hautes latitudes", 'is_correct' => true],
                            ['choice_text' => "Ils gardent la chaleur au même endroit toute l’année", 'is_correct' => false],
                            ['choice_text' => "Ils produisent de la chaleur par frottement sur le fond marin", 'is_correct' => false],
                            ['choice_text' => "Ils bloquent l’évaporation à la surface des mers", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le Gulf Stream longe la côte est des États-Unis puis traverse l’Atlantique Nord, et il adoucit les hivers de l’Europe de l’Ouest. Que transporte-t-il ?",
                        'marks' => 1,
                        'explanation' => "Le Gulf Stream emporte l’eau chaude du golfe du Mexique vers l’Atlantique Nord, où elle réchauffe l’air et adoucit les hivers européens.",
                        'choices' => [
                            ['choice_text' => "De l’eau glacée de l’Arctique vers le sud", 'is_correct' => false],
                            ['choice_text' => "De la chaleur produite au contact des continents", 'is_correct' => false],
                            ['choice_text' => "De l’eau chaude des tropiques vers le nord", 'is_correct' => true],
                            ['choice_text' => "De l’eau profonde qui remonte le long des côtes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La circulation thermohaline met en mouvement les grandes masses d’eau profondes. Quelles deux propriétés de l’eau en sont le moteur ?",
                        'marks' => 1,
                        'explanation' => "Thermo renvoie à la température, haline au sel : ensemble, ils fixent la densité, qui fait couler ou flotter les masses d’eau.",
                        'choices' => [
                            ['choice_text' => "La couleur et la transparence", 'is_correct' => false],
                            ['choice_text' => "La température et la salinité", 'is_correct' => true],
                            ['choice_text' => "La profondeur et la pression", 'is_correct' => false],
                            ['choice_text' => "Le pH et l’oxygène dissous", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quand une eau froide, riche en nutriments, monte des profondeurs vers la surface, comment appelle-t-on ce phénomène ?",
                        'marks' => 1,
                        'explanation' => "L’upwelling ramène vers la surface des eaux froides chargées de nutriments. Il se produit en particulier le long de la côte atlantique du Maroc.",
                        'choices' => [
                            ['choice_text' => "Une remontée d’eau profonde, ou upwelling", 'is_correct' => true],
                            ['choice_text' => "Une subduction côtière", 'is_correct' => false],
                            ['choice_text' => "Un marnage important", 'is_correct' => false],
                            ['choice_text' => "Une houle de tempête", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Au large de Dakhla, des remontées d’eau profonde soutiennent une riche activité de pêche. Quel est le point de départ de cette chaîne alimentaire ?",
                        'marks' => 1,
                        'explanation' => "Dans la zone photique, ces nutriments permettent au phytoplancton de proliférer ; le zooplancton puis les poissons suivent.",
                        'choices' => [
                            ['choice_text' => "Les eaux profondes apportent directement des poissons à la surface", 'is_correct' => false],
                            ['choice_text' => "Le froid de l’eau multiplie les poissons", 'is_correct' => false],
                            ['choice_text' => "Les nutriments remontés nourrissent le phytoplancton", 'is_correct' => true],
                            ['choice_text' => "Le sel remonté sert de nourriture aux poissons", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le courant des Canaries longe la côte atlantique du Maroc en direction du sud. Quelle est la nature de ses eaux ?",
                        'marks' => 1,
                        'explanation' => "Le courant des Canaries est un courant froid : il descend vers le sud en refroidissant l’air au contact du littoral marocain.",
                        'choices' => [
                            ['choice_text' => "Des eaux chaudes venues de l’équateur", 'is_correct' => false],
                            ['choice_text' => "Des eaux tièdes venues de la Méditerranée", 'is_correct' => false],
                            ['choice_text' => "Des eaux douces venues du Sahara", 'is_correct' => false],
                            ['choice_text' => "Des eaux relativement froides venues du nord", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Dans l’hémisphère nord, la rotation de la Terre dévie les courants. Dans quelle direction ?",
                        'marks' => 1,
                        'explanation' => "C’est l’effet de Coriolis : dans l’hémisphère nord, les courants sont déviés vers la droite, dans l’hémisphère sud vers la gauche.",
                        'choices' => [
                            ['choice_text' => "Vers la gauche de leur trajectoire", 'is_correct' => false],
                            ['choice_text' => "Vers l’équateur", 'is_correct' => false],
                            ['choice_text' => "Vers la droite de leur trajectoire", 'is_correct' => true],
                            ['choice_text' => "Vers le fond", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une bouée dérivante est emportée sur 36 km en 12 heures par un courant. Quelle est sa vitesse moyenne ?",
                        'marks' => 1,
                        'explanation' => "Vitesse = distance ÷ durée = 36 km ÷ 12 h = 3 km/h.",
                        'choices' => [
                            ['choice_text' => "0,33 km/h", 'is_correct' => false],
                            ['choice_text' => "3 km/h", 'is_correct' => true],
                            ['choice_text' => "24 km/h", 'is_correct' => false],
                            ['choice_text' => "48 km/h", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Vagues, marées et tsunamis",
                'description' => "Distinguer les mouvements de surface, les marées et les tsunamis.",
                'duration' => 22,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Un bouchon flotte à la surface pendant que des vagues passent. Que lui arrive-t-il ?",
                        'marks' => 1,
                        'explanation' => "Une vague transporte de l’énergie, pas de l’eau : chaque particule décrit une petite orbite et revient près de son point de départ.",
                        'choices' => [
                            ['choice_text' => "Il monte et descend sur place", 'is_correct' => true],
                            ['choice_text' => "Il file vers le rivage à la vitesse de la vague", 'is_correct' => false],
                            ['choice_text' => "Il coule à chaque passage de crête", 'is_correct' => false],
                            ['choice_text' => "Il recule à contre-sens de la vague", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La cause la plus fréquente des vagues de surface est…",
                        'marks' => 1,
                        'explanation' => "Le vent transmet de l’énergie à la surface de l’océan et produit la majorité des vagues ordinaires.",
                        'choices' => [
                            ['choice_text' => "les marées quotidiennes", 'is_correct' => false],
                            ['choice_text' => "les séismes sous-marins", 'is_correct' => false],
                            ['choice_text' => "le vent", 'is_correct' => true],
                            ['choice_text' => "les courants profonds", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un séisme de forte magnitude soulève brusquement une grande zone du plancher océanique. Quel phénomène peut en résulter à la surface ?",
                        'marks' => 1,
                        'explanation' => "Un soulèvement brutal du fond déplace toute la colonne d’eau, et c’est ce qui déclenche un tsunami. Marées, houle et upwelling ont d’autres causes.",
                        'choices' => [
                            ['choice_text' => "Une marée de vive-eau", 'is_correct' => false],
                            ['choice_text' => "Une houle de tempête", 'is_correct' => false],
                            ['choice_text' => "Un tsunami", 'is_correct' => true],
                            ['choice_text' => "Un upwelling", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quand une vague approche d’une plage en pente douce, sa hauteur augmente. Qu’est-ce qui en est la cause ?",
                        'marks' => 1,
                        'explanation' => "En eau peu profonde, le fond ralentit la vague ; elle se raccourcit, se creuse, puis déferle.",
                        'choices' => [
                            ['choice_text' => "Le vent souffle plus fort à proximité du rivage qu’au large", 'is_correct' => false],
                            ['choice_text' => "Le fond freine la vague et concentre son énergie", 'is_correct' => true],
                            ['choice_text' => "La salinité diminue près de la côte", 'is_correct' => false],
                            ['choice_text' => "La Lune se rapproche à marée haute", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Qu’est-ce qui provoque principalement les marées ?",
                        'marks' => 1,
                        'explanation' => "La Lune surtout, et le Soleil, attirent l’eau des océans ; avec la rotation de la Terre, le niveau de la mer monte et descend.",
                        'choices' => [
                            ['choice_text' => "L’attraction gravitationnelle de la Lune et du Soleil", 'is_correct' => true],
                            ['choice_text' => "Le vent qui souffle sur la mer", 'is_correct' => false],
                            ['choice_text' => "Les séismes sous-marins", 'is_correct' => false],
                            ['choice_text' => "Les courants chauds équatoriaux", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur la côte atlantique du Maroc, la mer monte et descend. Combien de pleines mers observe-t-on environ par jour ?",
                        'marks' => 1,
                        'explanation' => "Le régime est semi-diurne : deux pleines mers et deux basses mers par jour, séparées d’un peu plus de six heures.",
                        'choices' => [
                            ['choice_text' => "Quatre", 'is_correct' => false],
                            ['choice_text' => "Trois", 'is_correct' => false],
                            ['choice_text' => "Deux", 'is_correct' => true],
                            ['choice_text' => "Une", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À la nouvelle lune comme à la pleine lune, le Soleil, la Terre et la Lune sont alignés. Quel type de marée observe-t-on alors ?",
                        'marks' => 1,
                        'explanation' => "Quand les trois astres sont alignés, les attractions du Soleil et de la Lune s’additionnent : la marée est de vive-eau, d’amplitude maximale.",
                        'choices' => [
                            ['choice_text' => "Une marée de vive-eau, de grande amplitude", 'is_correct' => true],
                            ['choice_text' => "Une marée de morte-eau, de faible amplitude", 'is_correct' => false],
                            ['choice_text' => "Une marée quotidienne sans variation de niveau", 'is_correct' => false],
                            ['choice_text' => "Un raz de marée causé par l’alignement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Aux premier et dernier quartiers de Lune, l’amplitude des marées est faible. Comment nomme-t-on ces marées ?",
                        'marks' => 1,
                        'explanation' => "À ces phases, les attractions de la Lune et du Soleil s’exercent à angle droit et se contrarient en partie : le marnage reste faible.",
                        'choices' => [
                            ['choice_text' => "Des marées de vive-eau", 'is_correct' => false],
                            ['choice_text' => "Des marées de tempête", 'is_correct' => false],
                            ['choice_text' => "Des marées d’équinoxe", 'is_correct' => false],
                            ['choice_text' => "Des marées de morte-eau", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Après un séisme, Imane voit la mer se retirer très loin de la plage en quelques minutes. Que doit-elle faire ?",
                        'marks' => 1,
                        'explanation' => "Un retrait soudain de la mer peut annoncer un tsunami. Il faut s’éloigner immédiatement du rivage et gagner un point élevé.",
                        'choices' => [
                            ['choice_text' => "Aller ramasser des coquillages sur le sable découvert", 'is_correct' => false],
                            ['choice_text' => "Se rapprocher de l’eau pour observer le phénomène", 'is_correct' => false],
                            ['choice_text' => "Attendre sur la plage le retour de la marée", 'is_correct' => false],
                            ['choice_text' => "Rejoindre rapidement les hauteurs : un tsunami peut arriver", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une houle arrive à la plage avec une crête toutes les 8 secondes. Combien de crêtes passent en 2 minutes ?",
                        'marks' => 1,
                        'explanation' => "2 minutes valent 120 s ; 120 ÷ 8 = 15 crêtes.",
                        'choices' => [
                            ['choice_text' => "8", 'is_correct' => false],
                            ['choice_text' => "15", 'is_correct' => true],
                            ['choice_text' => "16", 'is_correct' => false],
                            ['choice_text' => "60", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Relief du plancher océanique",
                'description' => "Reconnaître dorsales, plaines abyssales, fosses, marges et méthodes de cartographie.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Au milieu de l’Atlantique, un sonar révèle une longue chaîne de montagnes sous-marines où du magma remonte. De quoi s’agit-il ?",
                        'marks' => 1,
                        'explanation' => "Aux dorsales, le magma monte et se solidifie : de la nouvelle croûte océanique se forme de part et d’autre.",
                        'choices' => [
                            ['choice_text' => "D’une dorsale médio-océanique", 'is_correct' => true],
                            ['choice_text' => "D’une fosse de subduction", 'is_correct' => false],
                            ['choice_text' => "D’une plaine abyssale", 'is_correct' => false],
                            ['choice_text' => "D’un delta sous-marin", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Les vastes étendues plates et profondes, couvertes de sédiments, qui occupent une grande partie du fond des océans s’appellent…",
                        'marks' => 1,
                        'explanation' => "Les plaines abyssales se trouvent vers 4 000 à 6 000 m de profondeur, sous une lente pluie de sédiments.",
                        'choices' => [
                            ['choice_text' => "des plateaux continentaux", 'is_correct' => false],
                            ['choice_text' => "des fosses océaniques", 'is_correct' => false],
                            ['choice_text' => "des dorsales", 'is_correct' => false],
                            ['choice_text' => "des plaines abyssales", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une dépression étroite, profonde de plus de 8 000 m, borde un arc volcanique. Comment nomme-t-on ce relief ?",
                        'marks' => 1,
                        'explanation' => "Les fosses se creusent là où une plaque plonge sous une autre, c’est la subduction, comme pour la fosse du Japon.",
                        'choices' => [
                            ['choice_text' => "Une fosse océanique", 'is_correct' => true],
                            ['choice_text' => "Une dorsale", 'is_correct' => false],
                            ['choice_text' => "Un plateau continental", 'is_correct' => false],
                            ['choice_text' => "Une plaine abyssale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La fosse des Mariannes, dans le Pacifique, est le point le plus profond des océans. Quelle profondeur atteint-elle environ ?",
                        'marks' => 1,
                        'explanation' => "Le Challenger Deep atteint près de 11 000 m : l’Everest y disparaîtrait sous plus de 2 000 m d’eau.",
                        'choices' => [
                            ['choice_text' => "Environ 20 000 m", 'is_correct' => false],
                            ['choice_text' => "Environ 11 000 m", 'is_correct' => true],
                            ['choice_text' => "Environ 6 000 m", 'is_correct' => false],
                            ['choice_text' => "Environ 3 000 m", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un sonar permet de cartographier le fond marin en utilisant…",
                        'marks' => 1,
                        'explanation' => "Le sonar émet et reçoit des ondes sonores dont le temps de propagation permet d’estimer la distance jusqu’au fond marin.",
                        'choices' => [
                            ['choice_text' => "des ondes radio", 'is_correct' => false],
                            ['choice_text' => "des rayons lumineux", 'is_correct' => false],
                            ['choice_text' => "des ondes sonores", 'is_correct' => true],
                            ['choice_text' => "des champs magnétiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un navire envoie une impulsion sonar vers le fond ; l’écho revient après 4 secondes. Le son se propage à environ 1 500 m/s dans l’eau. Quelle est la profondeur ?",
                        'marks' => 1,
                        'explanation' => "Le signal fait l’aller-retour : 1 500 × 4 = 6 000 m parcourus, soit 6 000 ÷ 2 = 3 000 m de profondeur.",
                        'choices' => [
                            ['choice_text' => "6 000 m", 'is_correct' => false],
                            ['choice_text' => "3 000 m", 'is_correct' => true],
                            ['choice_text' => "1 500 m", 'is_correct' => false],
                            ['choice_text' => "375 m", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle est la principale source des sédiments déposés près des côtes ?",
                        'marks' => 1,
                        'explanation' => "Fleuves et érosion apportent à la mer des sables et des argiles qui se déposent près des côtes, puis plus au large.",
                        'choices' => [
                            ['choice_text' => "Les dorsales médio-océaniques", 'is_correct' => false],
                            ['choice_text' => "Les pluies de météorites", 'is_correct' => false],
                            ['choice_text' => "Les marées de vive-eau", 'is_correct' => false],
                            ['choice_text' => "Les fleuves et l’érosion des continents", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Au large du Maroc, des géologues datent la croûte océanique à différentes distances de la dorsale atlantique. Que constatent-ils ?",
                        'marks' => 1,
                        'explanation' => "La croûte naît à la dorsale puis s’en éloigne : plus on s’écarte, plus elle est vieille. La plus jeune se trouve donc au centre.",
                        'choices' => [
                            ['choice_text' => "La croûte est plus ancienne près de la dorsale qu’au loin", 'is_correct' => false],
                            ['choice_text' => "La croûte vieillit quand on s’éloigne de la dorsale", 'is_correct' => true],
                            ['choice_text' => "La croûte a le même âge partout dans l’Atlantique", 'is_correct' => false],
                            ['choice_text' => "La croûte est plus jeune près des continents", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La dorsale médio-atlantique écarte les deux rives de l’océan d’environ 2,5 cm par an. De combien l’Atlantique s’élargit-il en un million d’années ?",
                        'marks' => 1,
                        'explanation' => "2,5 cm × 1 000 000 = 2 500 000 cm, soit 25 km.",
                        'choices' => [
                            ['choice_text' => "2 500 km", 'is_correct' => false],
                            ['choice_text' => "250 km", 'is_correct' => false],
                            ['choice_text' => "25 km", 'is_correct' => true],
                            ['choice_text' => "2,5 km", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Au large d’une côte atlantique, le fond descend en pente douce sur plusieurs dizaines de kilomètres avant de plonger plus profond. Comment nomme-t-on cette partie peu profonde du continent immergé ?",
                        'marks' => 1,
                        'explanation' => "Le plateau continental prolonge le continent sous la mer, jusque vers 200 m de profondeur. Au-delà, la pente continentale plonge vers les grands fonds.",
                        'choices' => [
                            ['choice_text' => "Le plateau continental", 'is_correct' => true],
                            ['choice_text' => "La plaine abyssale", 'is_correct' => false],
                            ['choice_text' => "La fosse océanique", 'is_correct' => false],
                            ['choice_text' => "La dorsale", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Profondeur, lumière et stratification",
                'description' => "Interpréter les changements de pression, température, densité et lumière avec la profondeur.",
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Comment appelle-t-on la couche de surface brassée par le vent et les vagues, où la température est presque uniforme ?",
                        'marks' => 1,
                        'explanation' => "Le vent et les vagues brassent les premières dizaines de mètres : la température y est presque uniforme. Dessous commence la thermocline.",
                        'choices' => [
                            ['choice_text' => "La thermocline", 'is_correct' => false],
                            ['choice_text' => "La couche de mélange", 'is_correct' => true],
                            ['choice_text' => "La plaine abyssale", 'is_correct' => false],
                            ['choice_text' => "La zone benthique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sous la couche de mélange, la température baisse rapidement avec la profondeur. Comment nomme-t-on cette couche ?",
                        'marks' => 1,
                        'explanation' => "La thermocline est la couche où la température chute vite, entre 100 et 1 000 m selon les régions. Elle sépare l’eau chaude de surface de l’eau froide profonde.",
                        'choices' => [
                            ['choice_text' => "L’halocline", 'is_correct' => false],
                            ['choice_text' => "La thermocline", 'is_correct' => true],
                            ['choice_text' => "La pente continentale", 'is_correct' => false],
                            ['choice_text' => "Le marnage", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Jusqu’à quelle profondeur s’étend la zone photique dans l’océan ouvert ?",
                        'marks' => 1,
                        'explanation' => "Dans l’océan ouvert, la lumière suffisante pour la photosynthèse disparaît vers 200 m. Dessous commence la zone aphotique.",
                        'choices' => [
                            ['choice_text' => "Environ 6 000 m", 'is_correct' => false],
                            ['choice_text' => "Environ 2 000 m", 'is_correct' => false],
                            ['choice_text' => "Environ 200 m", 'is_correct' => true],
                            ['choice_text' => "Environ 20 m", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans l’Atlantique tropical, l’eau de surface atteint 26 °C alors qu’à 2 000 m elle avoisine 3 °C. Quelle explication retenir ?",
                        'marks' => 1,
                        'explanation' => "Le Soleil ne réchauffe que la couche supérieure ; l’eau des grands fonds, formée en zone polaire, est dense et froide.",
                        'choices' => [
                            ['choice_text' => "La chaleur interne de la Terre réchauffe la surface depuis le fond", 'is_correct' => false],
                            ['choice_text' => "Le sel dissous chauffe l’eau de surface en absorbant la lumière", 'is_correct' => false],
                            ['choice_text' => "Le Soleil chauffe la surface, l’eau profonde vient des pôles", 'is_correct' => true],
                            ['choice_text' => "La pression des grands fonds refroidit l’eau en la comprimant", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans l’obscurité des abysses, aucun phytoplancton ne vit. De quoi se nourrissent surtout les animaux de ces profondeurs ?",
                        'marks' => 1,
                        'explanation' => "La « neige marine » est une pluie continue de cadavres, d’excréments et de particules venus de la surface ; elle nourrit la plupart des animaux des grands fonds.",
                        'choices' => [
                            ['choice_text' => "De lumière captée par leur peau", 'is_correct' => false],
                            ['choice_text' => "D’algues géantes qui poussent sur la plaine abyssale", 'is_correct' => false],
                            ['choice_text' => "De sel dissous dans l’eau", 'is_correct' => false],
                            ['choice_text' => "De débris tombés de la surface, la « neige marine »", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Imane compare deux échantillons d’eau de mer, l’un à 5 °C, l’autre à 25 °C. Lequel contient le plus d’oxygène dissous ?",
                        'marks' => 1,
                        'explanation' => "La solubilité des gaz augmente quand l’eau se refroidit : les eaux polaires sont particulièrement riches en oxygène.",
                        'choices' => [
                            ['choice_text' => "Celui à 25 °C, car la chaleur libère de l’oxygène", 'is_correct' => false],
                            ['choice_text' => "Celui à 5 °C, car l’eau froide dissout mieux les gaz", 'is_correct' => true],
                            ['choice_text' => "Les deux, la température n’intervenant pas", 'is_correct' => false],
                            ['choice_text' => "Ni l’un ni l’autre, l’eau de mer est dépourvue d’oxygène", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À 10 m de profondeur, la veste rouge d’un plongeur paraît presque noire. Que s’est-il passé ?",
                        'marks' => 1,
                        'explanation' => "L’eau absorbe d’abord les grandes longueurs d’onde : le rouge disparaît en quelques mètres, tandis que le bleu pénètre le plus profond.",
                        'choices' => [
                            ['choice_text' => "L’eau a déjà absorbé la lumière bleue", 'is_correct' => false],
                            ['choice_text' => "La pression a décoloré le tissu", 'is_correct' => false],
                            ['choice_text' => "Le sel a teinté la veste en noir", 'is_correct' => false],
                            ['choice_text' => "L’eau a déjà absorbé la lumière rouge", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Dans les abysses, certains poissons émettent de la lumière. Comment appelle-t-on ce phénomène ?",
                        'marks' => 1,
                        'explanation' => "La bioluminescence est une lumière produite par l’organisme lui-même, pour attirer des proies ou communiquer dans l’obscurité.",
                        'choices' => [
                            ['choice_text' => "La photosynthèse", 'is_correct' => false],
                            ['choice_text' => "La phosphorescence minérale", 'is_correct' => false],
                            ['choice_text' => "La fluorescence solaire", 'is_correct' => false],
                            ['choice_text' => "La bioluminescence", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "La pression augmente d’environ 1 bar tous les 10 m. Quelle pression totale subit un plongeur à 30 m, sachant qu’elle vaut 1 bar à la surface ?",
                        'marks' => 1,
                        'explanation' => "30 m ajoutent 3 bars à la pression de l’air de 1 bar : 1 + 3 = 4 bars.",
                        'choices' => [
                            ['choice_text' => "31 bars", 'is_correct' => false],
                            ['choice_text' => "10 bars", 'is_correct' => false],
                            ['choice_text' => "4 bars", 'is_correct' => true],
                            ['choice_text' => "3 bars", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Les océans absorbent une grande part de la chaleur du Soleil sans trop se réchauffer. Quelle propriété de l’eau l’explique ?",
                        'marks' => 1,
                        'explanation' => "Il faut beaucoup d’énergie pour élever la température de l’eau : l’océan stocke ainsi de la chaleur et modère le climat.",
                        'choices' => [
                            ['choice_text' => "Sa grande capacité thermique", 'is_correct' => true],
                            ['choice_text' => "Sa faible densité", 'is_correct' => false],
                            ['choice_text' => "Sa forte conductivité électrique", 'is_correct' => false],
                            ['choice_text' => "Sa couleur sombre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans l’Atlantique tropical, une couche d’eau de surface à 28 °C recouvre une eau à 12 °C de même salinité. Qu’est-ce qui maintient ces couches séparées ?",
                        'marks' => 1,
                        'explanation' => "À salinité égale, l’eau chaude est moins dense : elle reste en surface et se mélange peu aux eaux froides, ce qui stratifie la colonne.",
                        'choices' => [
                            ['choice_text' => "L’eau chaude, moins dense, flotte sur l’eau froide", 'is_correct' => true],
                            ['choice_text' => "L’eau froide, moins dense, flotte sur l’eau chaude", 'is_correct' => false],
                            ['choice_text' => "La salinité interdit tout mélange entre couches", 'is_correct' => false],
                            ['choice_text' => "La pression forme une paroi entre les deux couches", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Lire des données océanographiques",
                'description' => "Analyser simplement profils, cartes, valeurs de salinité, profondeur et niveau marin.",
                'duration' => 21,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Un profil de température montre 24 °C en surface, puis 18 °C à 100 m et 8 °C à 1 000 m. Que constate-t-on ?",
                        'marks' => 1,
                        'explanation' => "Le profil montre clairement une diminution de température avec la profondeur dans la colonne d’eau considérée.",
                        'choices' => [
                            ['choice_text' => "La température augmente avec la profondeur", 'is_correct' => false],
                            ['choice_text' => "La température reste identique à chaque profondeur", 'is_correct' => false],
                            ['choice_text' => "La température diminue avec la profondeur", 'is_correct' => true],
                            ['choice_text' => "La salinité augmente avec la profondeur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une sonde relève une salinité de 37 près d’une baie très évaporante et de 34 près de l’embouchure d’un grand fleuve. Comment interpréter ces valeurs ?",
                        'marks' => 1,
                        'explanation' => "Une forte évaporation laisse le sel sur place et fait monter la salinité ; l’eau douce d’un fleuve la fait baisser.",
                        'choices' => [
                            ['choice_text' => "Le fleuve apporte du sel à la mer, l’évaporation en retire", 'is_correct' => false],
                            ['choice_text' => "Les deux zones devraient avoir la même salinité", 'is_correct' => false],
                            ['choice_text' => "L’évaporation concentre les sels, l’eau douce les dilue", 'is_correct' => true],
                            ['choice_text' => "Le sel s’évapore dans la baie avec l’eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une carte montre des flèches d’un courant allant du sud vers le nord. Que représentent-elles ?",
                        'marks' => 1,
                        'explanation' => "Les flèches d’une carte de circulation indiquent la direction du transport des masses d’eau.",
                        'choices' => [
                            ['choice_text' => "La profondeur du fond", 'is_correct' => false],
                            ['choice_text' => "La température de l’eau", 'is_correct' => false],
                            ['choice_text' => "La hauteur des vagues", 'is_correct' => false],
                            ['choice_text' => "La direction du déplacement des eaux", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un bathymètre mesure 4 000 m à un point et 500 m à un autre. Le premier point est…",
                        'marks' => 1,
                        'explanation' => "La différence est 4 000 − 500 = 3 500 m. Le premier point est donc 3 500 m plus profond.",
                        'choices' => [
                            ['choice_text' => "plus profond de 3 500 m", 'is_correct' => true],
                            ['choice_text' => "plus profond de 500 m", 'is_correct' => false],
                            ['choice_text' => "moins profond de 3 500 m", 'is_correct' => false],
                            ['choice_text' => "à la même profondeur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une bouée mesure des vagues de 2 m de hauteur pendant une tempête. Cette grandeur correspond à…",
                        'marks' => 1,
                        'explanation' => "La hauteur de vague correspond à la différence verticale entre le sommet de la crête et le creux adjacent.",
                        'choices' => [
                            ['choice_text' => "la distance entre deux crêtes successives", 'is_correct' => false],
                            ['choice_text' => "la profondeur de l’eau sous la bouée", 'is_correct' => false],
                            ['choice_text' => "le temps qui sépare deux vagues", 'is_correct' => false],
                            ['choice_text' => "la distance verticale entre une crête et un creux", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Sur un profil du fond, une dépression étroite atteint 8 000 m de profondeur alors que les alentours sont vers 4 000 m. Quel relief reconnaît-on ?",
                        'marks' => 1,
                        'explanation' => "Une dépression étroite et nettement plus profonde que son environnement est typique d’une fosse, liée à une subduction.",
                        'choices' => [
                            ['choice_text' => "Une fosse océanique", 'is_correct' => true],
                            ['choice_text' => "Un plateau continental", 'is_correct' => false],
                            ['choice_text' => "Une dorsale", 'is_correct' => false],
                            ['choice_text' => "Une plaine abyssale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un graphique montre une hausse du niveau de la mer deux fois par jour environ. Quel phénomène décrit-il ?",
                        'marks' => 1,
                        'explanation' => "Des variations périodiques du niveau marin à l’échelle de plusieurs heures sont compatibles avec les marées.",
                        'choices' => [
                            ['choice_text' => "Les vagues de vent", 'is_correct' => false],
                            ['choice_text' => "Les marées", 'is_correct' => true],
                            ['choice_text' => "L’upwelling", 'is_correct' => false],
                            ['choice_text' => "Les tsunamis", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un marégraphe enregistre une pleine mer à 6 h 00. Quand aura lieu la suivante, sur une côte à marée semi-diurne ?",
                        'marks' => 1,
                        'explanation' => "En régime semi-diurne, deux pleines mers se suivent à 12 h 25 d’intervalle environ : 6 h 00 + 12 h 25 = 18 h 25.",
                        'choices' => [
                            ['choice_text' => "Vers 18 h 25", 'is_correct' => true],
                            ['choice_text' => "Vers 12 h 10", 'is_correct' => false],
                            ['choice_text' => "Vers 9 h 15", 'is_correct' => false],
                            ['choice_text' => "Vers 6 h 50 le lendemain", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un marégraphe indique 1,2 m à marée basse et 3,8 m à marée haute. Quel est le marnage de cette marée ?",
                        'marks' => 1,
                        'explanation' => "Le marnage est la différence entre pleine mer et basse mer : 3,8 − 1,2 = 2,6 m.",
                        'choices' => [
                            ['choice_text' => "2,5 m", 'is_correct' => false],
                            ['choice_text' => "2,6 m", 'is_correct' => true],
                            ['choice_text' => "3,8 m", 'is_correct' => false],
                            ['choice_text' => "5,0 m", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur une carte marine, 1 cm représente 50 km. Deux ports sont distants de 6 cm sur la carte. Quelle est la distance réelle ?",
                        'marks' => 1,
                        'explanation' => "6 cm × 50 km par cm = 300 km.",
                        'choices' => [
                            ['choice_text' => "3 000 km", 'is_correct' => false],
                            ['choice_text' => "300 km", 'is_correct' => true],
                            ['choice_text' => "56 km", 'is_correct' => false],
                            ['choice_text' => "8,3 km", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Cas pratiques en océanographie",
                'description' => "Appliquer les notions fondamentales à des situations côtières et océaniques réalistes.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une tempête souffle au large de Safi et les vagues grossissent sur le littoral. D’où vient l’énergie de ces vagues ?",
                        'marks' => 1,
                        'explanation' => "Plus le vent est fort, souffle longtemps et sur une grande étendue, plus il communique d’énergie à la mer et plus les vagues grandissent.",
                        'choices' => [
                            ['choice_text' => "Du fond marin qui libère de la chaleur", 'is_correct' => false],
                            ['choice_text' => "De la Lune qui attire plus fort l’eau", 'is_correct' => false],
                            ['choice_text' => "Du vent qui transmet son énergie à la surface de la mer", 'is_correct' => true],
                            ['choice_text' => "D’un séisme qui secoue la côte", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "En 1755, un séisme au large de Lisbonne a provoqué un phénomène qui a frappé le littoral marocain, dont les environs d’Essaouira et d’Agadir. De quoi s’agissait-il ?",
                        'marks' => 1,
                        'explanation' => "Le séisme de Lisbonne a déplacé le fond de l’Atlantique et déclenché un tsunami dont les vagues ont atteint les côtes du Maroc.",
                        'choices' => [
                            ['choice_text' => "D’un cyclone tropical", 'is_correct' => false],
                            ['choice_text' => "D’un tsunami", 'is_correct' => true],
                            ['choice_text' => "D’une marée noire géante", 'is_correct' => false],
                            ['choice_text' => "D’un upwelling exceptionnel", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un pétrolier perd une partie de sa cargaison au large de Tanger. Que fait la nappe de pétrole à la surface ?",
                        'marks' => 1,
                        'explanation' => "Le pétrole est moins dense que l’eau de mer : la nappe flotte et se déplace avec le vent et les courants, ce qui guide les opérations de dépollution.",
                        'choices' => [
                            ['choice_text' => "Elle coule rapidement, le pétrole étant plus dense que l’eau", 'is_correct' => false],
                            ['choice_text' => "Elle flotte et dérive avec le vent et les courants", 'is_correct' => true],
                            ['choice_text' => "Elle se dissout aussitôt dans l’eau de mer", 'is_correct' => false],
                            ['choice_text' => "Elle reste sur place, insensible au vent et aux courants", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À l’embouchure d’un fleuve, l’eau douce reste en surface au-dessus d’une eau de mer salée. Comment l’expliquer ?",
                        'marks' => 1,
                        'explanation' => "L’eau douce est moins dense que l’eau salée : elle s’étale en surface et se mélange lentement, ce qui crée une stratification.",
                        'choices' => [
                            ['choice_text' => "L’eau douce, plus dense que l’eau salée, se déplace plus vite", 'is_correct' => false],
                            ['choice_text' => "Le sel forme une paroi solide sous l’eau douce", 'is_correct' => false],
                            ['choice_text' => "Le courant du fleuve interdit à l’eau de mer de monter", 'is_correct' => false],
                            ['choice_text' => "L’eau douce, moins dense que l’eau salée, flotte dessus", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Avec le réchauffement du climat, le niveau moyen des mers monte. Quel phénomène de l’eau de mer y contribue ?",
                        'marks' => 1,
                        'explanation' => "Une eau plus chaude occupe un plus grand volume ; avec la fonte des glaciers continentaux, c’est l’une des principales causes de la hausse du niveau marin.",
                        'choices' => [
                            ['choice_text' => "La contraction de l’eau sous l’effet de la chaleur", 'is_correct' => false],
                            ['choice_text' => "La dilatation de l’eau qui se réchauffe", 'is_correct' => true],
                            ['choice_text' => "L’augmentation de la salinité des océans", 'is_correct' => false],
                            ['choice_text' => "L’accélération de la rotation de la Terre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quand l’eau de mer gèle près du pôle, la glace formée contient peu de sel. Que devient l’eau liquide restante ?",
                        'marks' => 1,
                        'explanation' => "La glace de mer rejette la plus grande partie de son sel dans l’eau liquide. Celle-ci, plus salée et plus dense, plonge et alimente la circulation profonde.",
                        'choices' => [
                            ['choice_text' => "Elle devient moins salée et moins dense, et reste en surface", 'is_correct' => false],
                            ['choice_text' => "Elle se transforme en eau douce", 'is_correct' => false],
                            ['choice_text' => "Elle devient plus salée et plus dense, et peut plonger", 'is_correct' => true],
                            ['choice_text' => "Elle gèle à son tour en quelques minutes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "En naviguant au large, un bateau mesure un fond de 200 m, puis de 3 000 m quelques dizaines de kilomètres plus loin. Quel relief vient-il de traverser ?",
                        'marks' => 1,
                        'explanation' => "Le passage rapide de 200 m à plusieurs milliers de mètres marque la pente continentale, entre le plateau et les grands fonds.",
                        'choices' => [
                            ['choice_text' => "Une dorsale médio-océanique", 'is_correct' => false],
                            ['choice_text' => "Un plateau continental horizontal", 'is_correct' => false],
                            ['choice_text' => "Une plaine abyssale", 'is_correct' => false],
                            ['choice_text' => "La pente continentale", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Sur une plage de Taghazout, Hamza est entraîné vers le large par un courant d’arrachement. Que doit-il faire ?",
                        'marks' => 1,
                        'explanation' => "Un courant d’arrachement est étroit : nager sur le côté permet d’en sortir, alors que lutter à contre-courant épuise.",
                        'choices' => [
                            ['choice_text' => "Nager parallèlement à la plage jusqu’à sortir du courant", 'is_correct' => true],
                            ['choice_text' => "Nager à contre-courant vers la plage de toute sa force", 'is_correct' => false],
                            ['choice_text' => "Plonger pour passer sous le courant", 'is_correct' => false],
                            ['choice_text' => "Rester immobile sans appeler à l’aide", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Des flotteurs Argo plongent vers 2 000 m puis remontent en mesurant l’eau. Que mesurent-ils pendant la remontée ?",
                        'marks' => 1,
                        'explanation' => "Les flotteurs Argo dressent des profils de température et de salinité : des milliers d’entre eux surveillent l’océan mondial.",
                        'choices' => [
                            ['choice_text' => "La température et la salinité à différentes profondeurs", 'is_correct' => true],
                            ['choice_text' => "La hauteur des vagues à la surface", 'is_correct' => false],
                            ['choice_text' => "La vitesse du vent au-dessus de l’océan", 'is_correct' => false],
                            ['choice_text' => "Le relief du fond par sonar", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Des déchets plastiques s’accumulent au centre d’un grand tourbillon de courants du Pacifique. Comment nomme-t-on ce tourbillon ?",
                        'marks' => 1,
                        'explanation' => "Les grands courants forment des gyres : les objets flottants s’y rassemblent, comme dans le « vortex de déchets » du Pacifique nord.",
                        'choices' => [
                            ['choice_text' => "Une dorsale", 'is_correct' => false],
                            ['choice_text' => "Un marnage", 'is_correct' => false],
                            ['choice_text' => "Une gyre océanique", 'is_correct' => true],
                            ['choice_text' => "Une thermocline", 'is_correct' => false],
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