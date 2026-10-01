<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ElectrochemistryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'electrochemistry')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 65],
            6 => ['duration' => 20, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 70],
            8 => ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => "Les bases de l’électrochimie",
                'description' => "Découvrir l’oxydation, la réduction, les électrons et le rôle des espèces dans une réaction d’oxydoréduction.",
                'questions' => [
                    [
                        'question' => "Que se passe-t-il lors d’une oxydation ?",
                        'explanation' => "Une oxydation correspond à une perte d’électrons. On peut retenir l’idée simple : perdre des électrons = s’oxyder.",
                        'choices' => [
                            ['choice_text' => "L’espèce gagne des électrons", 'is_correct' => false],
                            ['choice_text' => "L’espèce perd des électrons", 'is_correct' => true],
                            ['choice_text' => "L’espèce gagne toujours des protons", 'is_correct' => false],
                            ['choice_text' => "L’espèce devient forcément neutre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que se passe-t-il lors d’une réduction ?",
                        'explanation' => "Une réduction correspond à un gain d’électrons. Cette notion est liée à l’oxydation dans toute réaction d’oxydoréduction.",
                        'choices' => [
                            ['choice_text' => "L’espèce perd des électrons", 'is_correct' => false],
                            ['choice_text' => "L’espèce gagne des électrons", 'is_correct' => true],
                            ['choice_text' => "L’espèce perd nécessairement des neutrons", 'is_correct' => false],
                            ['choice_text' => "L’espèce devient toujours un gaz", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une réaction d’oxydoréduction, quelle particule est échangée ?",
                        'explanation' => "Les réactions d’oxydoréduction impliquent un transfert d’électrons entre espèces chimiques.",
                        'choices' => [
                            ['choice_text' => "Les électrons", 'is_correct' => true],
                            ['choice_text' => "Les neutrons uniquement", 'is_correct' => false],
                            ['choice_text' => "Les photons uniquement", 'is_correct' => false],
                            ['choice_text' => "Les molécules d’eau uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une espèce qui gagne des électrons est appelée…",
                        'explanation' => "Gagner des électrons correspond à une réduction. L’espèce qui se réduit est souvent appelée oxydant dans le couple réactionnel.",
                        'choices' => [
                            ['choice_text' => "réduite", 'is_correct' => true],
                            ['choice_text' => "oxydée", 'is_correct' => false],
                            ['choice_text' => "neutralisée", 'is_correct' => false],
                            ['choice_text' => "évaporée", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans Cu²⁺ + 2 e⁻ → Cu, que fait l’ion Cu²⁺ ?",
                        'explanation' => "Cu²⁺ reçoit deux électrons et devient Cu. Il gagne donc des électrons : il est réduit.",
                        'choices' => [
                            ['choice_text' => "Il s’oxyde", 'is_correct' => false],
                            ['choice_text' => "Il se réduit", 'is_correct' => true],
                            ['choice_text' => "Il perd deux électrons", 'is_correct' => false],
                            ['choice_text' => "Il devient Cu³⁺", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans Zn → Zn²⁺ + 2 e⁻, le zinc…",
                        'explanation' => "Le zinc libère deux électrons. Une perte d’électrons est une oxydation.",
                        'choices' => [
                            ['choice_text' => "se réduit", 'is_correct' => false],
                            ['choice_text' => "s’oxyde", 'is_correct' => true],
                            ['choice_text' => "ne réagit pas", 'is_correct' => false],
                            ['choice_text' => "gagne deux électrons", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel couple représente correctement une forme oxydée et sa forme réduite ?",
                        'explanation' => "Un couple rédox s’écrit généralement Ox/Red, par exemple Cu²⁺/Cu. La forme oxydée peut gagner des électrons pour devenir la forme réduite.",
                        'choices' => [
                            ['choice_text' => "Cu/Cu²⁺ uniquement dans cet ordre", 'is_correct' => false],
                            ['choice_text' => "Cu²⁺/Cu", 'is_correct' => true],
                            ['choice_text' => "Cu²⁺/Cu³⁺", 'is_correct' => false],
                            ['choice_text' => "Cu/Cu⁻", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une réaction rédox complète, si une espèce perd des électrons, une autre doit généralement…",
                        'explanation' => "Les électrons ne disparaissent pas. Ceux qui sont perdus par une espèce sont reçus par une autre espèce.",
                        'choices' => [
                            ['choice_text' => "les absorber", 'is_correct' => true],
                            ['choice_text' => "les créer sans source", 'is_correct' => false],
                            ['choice_text' => "les transformer en neutrons", 'is_correct' => false],
                            ['choice_text' => "les rejeter dans le vide", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi parle-t-on de réaction d’oxydoréduction ?",
                        'explanation' => "Une oxydation et une réduction sont liées : les électrons perdus par une espèce sont gagnés par une autre.",
                        'choices' => [
                            ['choice_text' => "Parce qu’il y a toujours deux solvants", 'is_correct' => false],
                            ['choice_text' => "Parce qu’oxydation et réduction se produisent ensemble", 'is_correct' => true],
                            ['choice_text' => "Parce que la solution doit être acide", 'is_correct' => false],
                            ['choice_text' => "Parce que la température augmente toujours", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle phrase aide le mieux à mémoriser oxydation et réduction ?",
                        'explanation' => "Une règle mnémotechnique classique est : oxydation = perte d’électrons, réduction = gain d’électrons.",
                        'choices' => [
                            ['choice_text' => "Perdre = réduction, gagner = oxydation", 'is_correct' => false],
                            ['choice_text' => "Perdre = oxydation, gagner = réduction", 'is_correct' => true],
                            ['choice_text' => "Perdre ou gagner signifie toujours la même chose", 'is_correct' => false],
                            ['choice_text' => "Oxydation et réduction ne concernent pas les électrons", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Nombres d’oxydation et identification des espèces",
                'description' => "Utiliser simplement les nombres d’oxydation pour repérer ce qui s’oxyde et ce qui se réduit.",
                'questions' => [
                    [
                        'question' => "Dans un ion monoatomique Na⁺, quel est le nombre d’oxydation du sodium ?",
                        'explanation' => "Pour un ion monoatomique, le nombre d’oxydation est égal à sa charge. Na⁺ a donc un nombre d’oxydation de +1.",
                        'choices' => [
                            ['choice_text' => "-1", 'is_correct' => false],
                            ['choice_text' => "0", 'is_correct' => false],
                            ['choice_text' => "+1", 'is_correct' => true],
                            ['choice_text' => "+2", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le nombre d’oxydation de l’oxygène dans H₂O ?",
                        'explanation' => "Dans H₂O, l’oxygène possède généralement le nombre d’oxydation -2. Les deux hydrogènes à +1 compensent pour donner une molécule neutre.",
                        'choices' => [
                            ['choice_text' => "-2", 'is_correct' => true],
                            ['choice_text' => "-1", 'is_correct' => false],
                            ['choice_text' => "+1", 'is_correct' => false],
                            ['choice_text' => "+2", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une réaction, le nombre d’oxydation d’un élément passe de +2 à +3. Que s’est-il passé ?",
                        'explanation' => "Le nombre d’oxydation augmente. Pour un élément, cette augmentation correspond à une oxydation, donc à une perte d’électrons.",
                        'choices' => [
                            ['choice_text' => "Réduction", 'is_correct' => false],
                            ['choice_text' => "Oxydation", 'is_correct' => true],
                            ['choice_text' => "Neutralisation", 'is_correct' => false],
                            ['choice_text' => "Précipitation uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une réaction, le nombre d’oxydation d’un élément passe de +3 à +1. Cela correspond à…",
                        'explanation' => "Le nombre d’oxydation diminue de 2 unités. Cela signifie que l’élément a gagné des électrons : il est réduit.",
                        'choices' => [
                            ['choice_text' => "Une oxydation", 'is_correct' => false],
                            ['choice_text' => "Une réduction", 'is_correct' => true],
                            ['choice_text' => "Une fusion", 'is_correct' => false],
                            ['choice_text' => "Une sublimation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans Fe²⁺ → Fe³⁺, combien d’électrons le fer perd-il ?",
                        'explanation' => "Le nombre d’oxydation augmente de +2 à +3. Le fer perd donc un électron : Fe²⁺ → Fe³⁺ + e⁻.",
                        'choices' => [
                            ['choice_text' => "1", 'is_correct' => true],
                            ['choice_text' => "2", 'is_correct' => false],
                            ['choice_text' => "3", 'is_correct' => false],
                            ['choice_text' => "4", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans Cl₂ + 2 e⁻ → 2 Cl⁻, le chlore est-il oxydé ou réduit ?",
                        'explanation' => "Chaque atome de chlore gagne un électron pour devenir Cl⁻. Il subit donc une réduction.",
                        'choices' => [
                            ['choice_text' => "Oxydé", 'is_correct' => false],
                            ['choice_text' => "Réduit", 'is_correct' => true],
                            ['choice_text' => "Ni l’un ni l’autre", 'is_correct' => false],
                            ['choice_text' => "Seulement neutralisé", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel changement de nombre d’oxydation indique une perte d’électrons ?",
                        'explanation' => "Une perte d’électrons correspond à une oxydation et se traduit généralement par une augmentation du nombre d’oxydation.",
                        'choices' => [
                            ['choice_text' => "+1 vers 0", 'is_correct' => false],
                            ['choice_text' => "-2 vers -3", 'is_correct' => false],
                            ['choice_text' => "0 vers +2", 'is_correct' => true],
                            ['choice_text' => "+3 vers +1", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le nombre d’oxydation d’un élément passe de -1 à -3. Il a donc tendance à…",
                        'explanation' => "La valeur diminue de 2 unités, ce qui correspond à un gain de deux électrons et donc à une réduction.",
                        'choices' => [
                            ['choice_text' => "perdre 2 électrons", 'is_correct' => false],
                            ['choice_text' => "gagner 2 électrons", 'is_correct' => true],
                            ['choice_text' => "perdre 1 électron", 'is_correct' => false],
                            ['choice_text' => "ne rien échanger", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une réaction rédox, pourquoi le nombre d’oxydation est-il utile ?",
                        'explanation' => "Il permet de suivre les changements électroniques. Une hausse indique une oxydation et une baisse indique une réduction.",
                        'choices' => [
                            ['choice_text' => "Il permet d’identifier les éléments oxydés et réduits", 'is_correct' => true],
                            ['choice_text' => "Il donne directement la température d’ébullition", 'is_correct' => false],
                            ['choice_text' => "Il remplace toutes les équations chimiques", 'is_correct' => false],
                            ['choice_text' => "Il indique seulement la couleur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pour un élément qui passe de 0 à -2, quelle quantité d’électrons est gagnée ?",
                        'explanation' => "Le nombre d’oxydation diminue de 2 unités. L’élément gagne donc deux électrons.",
                        'choices' => [
                            ['choice_text' => "1 électron", 'is_correct' => false],
                            ['choice_text' => "2 électrons", 'is_correct' => true],
                            ['choice_text' => "3 électrons", 'is_correct' => false],
                            ['choice_text' => "4 électrons", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Piles électrochimiques et circulation des électrons",
                'description' => "Comprendre le fonctionnement d’une pile, des électrodes aux électrons qui circulent dans le circuit extérieur.",
                'questions' => [
                    [
                        'question' => "Dans une pile électrochimique qui fonctionne spontanément, quelle transformation produit le courant électrique ?",
                        'explanation' => "Une réaction d’oxydoréduction spontanée transforme de l’énergie chimique en énergie électrique dans une pile.",
                        'choices' => [
                            ['choice_text' => "Une réaction rédox", 'is_correct' => true],
                            ['choice_text' => "Une simple fusion", 'is_correct' => false],
                            ['choice_text' => "Une évaporation", 'is_correct' => false],
                            ['choice_text' => "Une dissolution sans transfert d’électrons", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une pile galvanique, où a lieu l’oxydation ?",
                        'explanation' => "L’oxydation a toujours lieu à l’anode. Dans une pile galvanique, l’anode est l’électrode négative.",
                        'choices' => [
                            ['choice_text' => "À la cathode", 'is_correct' => false],
                            ['choice_text' => "À l’anode", 'is_correct' => true],
                            ['choice_text' => "Dans le fil uniquement", 'is_correct' => false],
                            ['choice_text' => "Dans le voltmètre uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une pile galvanique, où a lieu la réduction ?",
                        'explanation' => "La réduction a toujours lieu à la cathode. Dans une pile galvanique, la cathode est l’électrode positive.",
                        'choices' => [
                            ['choice_text' => "À l’anode", 'is_correct' => false],
                            ['choice_text' => "À la cathode", 'is_correct' => true],
                            ['choice_text' => "Dans le pont salin uniquement", 'is_correct' => false],
                            ['choice_text' => "Dans le fil", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans le circuit extérieur d’une pile, les électrons se déplacent…",
                        'explanation' => "Les électrons produits par l’oxydation à l’anode circulent dans le circuit extérieur vers la cathode, où ils sont consommés par la réduction.",
                        'choices' => [
                            ['choice_text' => "de la cathode vers l’anode", 'is_correct' => false],
                            ['choice_text' => "de l’anode vers la cathode", 'is_correct' => true],
                            ['choice_text' => "du pont salin vers l’anode", 'is_correct' => false],
                            ['choice_text' => "dans les deux directions en même temps", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À quoi sert principalement le pont salin d’une pile ?",
                        'explanation' => "Le pont salin permet la circulation d’ions entre les compartiments et maintient l’électroneutralité. Il complète le circuit sans fournir les électrons du circuit extérieur.",
                        'choices' => [
                            ['choice_text' => "À fournir les électrons du fil", 'is_correct' => false],
                            ['choice_text' => "À maintenir l’équilibre électrique des solutions", 'is_correct' => true],
                            ['choice_text' => "À arrêter la réaction", 'is_correct' => false],
                            ['choice_text' => "À chauffer les électrodes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une pile Zn/Cu, quel métal s’oxyde spontanément dans le fonctionnement classique de la pile ?",
                        'explanation' => "Le zinc perd des électrons : Zn → Zn²⁺ + 2 e⁻. Il est donc oxydé à l’anode.",
                        'choices' => [
                            ['choice_text' => "Cu", 'is_correct' => false],
                            ['choice_text' => "Zn", 'is_correct' => true],
                            ['choice_text' => "Les deux métaux de la même manière", 'is_correct' => false],
                            ['choice_text' => "Aucun", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans la pile Zn/Cu, les électrons arrivent à l’électrode de cuivre pour permettre…",
                        'explanation' => "À l’électrode de cuivre, Cu²⁺ gagne des électrons et devient Cu. C’est une réduction.",
                        'choices' => [
                            ['choice_text' => "l’oxydation du cuivre", 'is_correct' => false],
                            ['choice_text' => "la réduction des ions Cu²⁺", 'is_correct' => true],
                            ['choice_text' => "la formation de Zn²⁺", 'is_correct' => false],
                            ['choice_text' => "la dissolution du pont salin", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel élément du circuit extérieur peut mesurer la différence de potentiel entre les deux électrodes ?",
                        'explanation' => "Un voltmètre mesure la différence de potentiel électrique entre deux points. Dans une pile, on mesure ainsi sa tension.",
                        'choices' => [
                            ['choice_text' => "Un voltmètre", 'is_correct' => true],
                            ['choice_text' => "Un thermomètre", 'is_correct' => false],
                            ['choice_text' => "Une balance", 'is_correct' => false],
                            ['choice_text' => "Un bécher vide", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une pile ne débite plus alors que les connexions semblent correctes. Quelle cause simple est possible ?",
                        'explanation' => "Les réactifs peuvent avoir été consommés ou les conditions nécessaires au fonctionnement peuvent ne plus être réunies. Une pile ne fournit pas une énergie illimitée.",
                        'choices' => [
                            ['choice_text' => "Les réactifs électrochimiques peuvent être épuisés", 'is_correct' => true],
                            ['choice_text' => "Les électrons ont disparu de l’Univers", 'is_correct' => false],
                            ['choice_text' => "Le cuivre devient toujours un isolant", 'is_correct' => false],
                            ['choice_text' => "Le pont salin crée une batterie neuve", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé permet de retenir les rôles des électrodes ?",
                        'explanation' => "La règle qui ne change pas est : oxydation à l’anode et réduction à la cathode. Le signe de l’électrode dépend du type de cellule.",
                        'choices' => [
                            ['choice_text' => "Anode = oxydation ; cathode = réduction", 'is_correct' => true],
                            ['choice_text' => "Anode = réduction ; cathode = oxydation", 'is_correct' => false],
                            ['choice_text' => "Les deux électrodes font toujours une oxydation", 'is_correct' => false],
                            ['choice_text' => "Les deux électrodes sont toujours négatives", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Anode, cathode et pont salin",
                'description' => "Approfondir les rôles des électrodes et le déplacement des ions dans une pile simple.",
                'questions' => [
                    [
                        'question' => "Dans une pile galvanique, quelle électrode est négative ?",
                        'explanation' => "L’anode est le siège de l’oxydation et fournit les électrons au circuit extérieur. Elle est donc négative dans une pile galvanique.",
                        'choices' => [
                            ['choice_text' => "La cathode", 'is_correct' => false],
                            ['choice_text' => "L’anode", 'is_correct' => true],
                            ['choice_text' => "Le pont salin", 'is_correct' => false],
                            ['choice_text' => "Les deux", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une pile galvanique, quelle électrode est positive ?",
                        'explanation' => "Les électrons arrivent à la cathode, où se produit la réduction. Dans une pile galvanique, la cathode est positive.",
                        'choices' => [
                            ['choice_text' => "L’anode", 'is_correct' => false],
                            ['choice_text' => "La cathode", 'is_correct' => true],
                            ['choice_text' => "Le pont salin", 'is_correct' => false],
                            ['choice_text' => "Le fil uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les électrons ne circulent-ils pas normalement à travers le pont salin ?",
                        'explanation' => "Le pont salin assure surtout un déplacement d’ions pour maintenir la neutralité électrique. Les électrons passent par le circuit extérieur.",
                        'choices' => [
                            ['choice_text' => "Parce que le pont salin est destiné au déplacement des ions", 'is_correct' => true],
                            ['choice_text' => "Parce que les électrons n’existent pas dans une pile", 'is_correct' => false],
                            ['choice_text' => "Parce que les ions ne peuvent jamais se déplacer", 'is_correct' => false],
                            ['choice_text' => "Parce que la cathode les bloque", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans le compartiment de l’anode d’une pile Zn/Cu, Zn devient Zn²⁺. Que se passe-t-il avec le nombre d’ions positifs dans cette solution ?",
                        'explanation' => "La formation de Zn²⁺ augmente la quantité de charge positive dans le compartiment. Le déplacement des ions du pont salin aide à compenser cette charge.",
                        'choices' => [
                            ['choice_text' => "Elle tend à augmenter", 'is_correct' => true],
                            ['choice_text' => "Elle tombe forcément à zéro", 'is_correct' => false],
                            ['choice_text' => "Elle ne peut jamais changer", 'is_correct' => false],
                            ['choice_text' => "Elle devient négative instantanément", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une pile, pourquoi les ions du pont salin se déplacent-ils ?",
                        'explanation' => "Ils migrent pour éviter une accumulation excessive de charge dans les solutions et permettre au fonctionnement électrique de continuer.",
                        'choices' => [
                            ['choice_text' => "Pour maintenir l’électroneutralité", 'is_correct' => true],
                            ['choice_text' => "Pour produire tous les électrons", 'is_correct' => false],
                            ['choice_text' => "Pour chauffer le métal", 'is_correct' => false],
                            ['choice_text' => "Pour changer la réaction en combustion", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel couple correspond à une électrode de zinc dans la pile classique Zn/Cu ?",
                        'explanation' => "Le couple rédox du zinc est Zn²⁺/Zn : Zn peut perdre des électrons pour former Zn²⁺.",
                        'choices' => [
                            ['choice_text' => "Zn/Zn²⁺ seulement", 'is_correct' => false],
                            ['choice_text' => "Zn²⁺/Zn", 'is_correct' => true],
                            ['choice_text' => "Zn³⁺/Zn²⁺", 'is_correct' => false],
                            ['choice_text' => "Zn⁻/Zn", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel couple correspond à l’électrode de cuivre dans la pile classique Zn/Cu ?",
                        'explanation' => "Les ions Cu²⁺ sont réduits en cuivre métallique. Le couple s’écrit donc Cu²⁺/Cu.",
                        'choices' => [
                            ['choice_text' => "Cu²⁺/Cu", 'is_correct' => true],
                            ['choice_text' => "Cu/Cu²⁺", 'is_correct' => false],
                            ['choice_text' => "Cu³⁺/Cu²⁺", 'is_correct' => false],
                            ['choice_text' => "Cu⁻/Cu", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si le circuit extérieur est interrompu, que se passe-t-il pour le courant ?",
                        'explanation' => "Un circuit ouvert ne permet pas aux électrons de circuler de façon continue. La pile ne peut donc plus débiter normalement.",
                        'choices' => [
                            ['choice_text' => "Le courant circule davantage", 'is_correct' => false],
                            ['choice_text' => "Le courant ne peut plus circuler dans le circuit extérieur", 'is_correct' => true],
                            ['choice_text' => "Le pont salin crée instantanément un courant extérieur", 'is_correct' => false],
                            ['choice_text' => "Les électrodes fondent toujours", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une pile Zn/Cu, quelle transformation se produit à l’anode ?",
                        'explanation' => "À l’anode, le zinc métallique est oxydé : Zn → Zn²⁺ + 2 e⁻.",
                        'choices' => [
                            ['choice_text' => "Cu²⁺ + 2 e⁻ → Cu", 'is_correct' => false],
                            ['choice_text' => "Zn → Zn²⁺ + 2 e⁻", 'is_correct' => true],
                            ['choice_text' => "Cu → Cu²⁺ + 2 e⁻", 'is_correct' => false],
                            ['choice_text' => "Zn²⁺ + e⁻ → Zn⁺", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une pile Zn/Cu, quelle transformation se produit à la cathode ?",
                        'explanation' => "À la cathode, les ions Cu²⁺ reçoivent les électrons et se déposent sous forme de cuivre métallique : Cu²⁺ + 2 e⁻ → Cu.",
                        'choices' => [
                            ['choice_text' => "Cu²⁺ + 2 e⁻ → Cu", 'is_correct' => true],
                            ['choice_text' => "Zn → Zn²⁺ + 2 e⁻", 'is_correct' => false],
                            ['choice_text' => "Cu → Cu²⁺ + e⁻", 'is_correct' => false],
                            ['choice_text' => "Zn²⁺ → Zn + 2 e⁻", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Potentiel d’électrode et tension d’une pile",
                'description' => "Comprendre le rôle des potentiels standard et effectuer des calculs simples de force électromotrice.",
                'questions' => [
                    [
                        'question' => "À quoi correspond la différence de potentiel d’une pile ?",
                        'explanation' => "La différence de potentiel entre les deux électrodes est liée à leur tendance relative à accepter ou céder des électrons.",
                        'choices' => [
                            ['choice_text' => "À sa tension électrique", 'is_correct' => true],
                            ['choice_text' => "À sa masse totale", 'is_correct' => false],
                            ['choice_text' => "À son volume de métal uniquement", 'is_correct' => false],
                            ['choice_text' => "À son point de fusion", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans la formule E°pile = E°cathode − E°anode, quelle électrode est associée à la réduction ?",
                        'explanation' => "La cathode est le siège de la réduction. Son potentiel standard de réduction entre donc dans le terme de la cathode.",
                        'choices' => [
                            ['choice_text' => "L’anode", 'is_correct' => false],
                            ['choice_text' => "La cathode", 'is_correct' => true],
                            ['choice_text' => "Le pont salin", 'is_correct' => false],
                            ['choice_text' => "Le fil", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si E°cathode = +0,80 V et E°anode = -0,76 V, quelle est la tension standard de la pile ?",
                        'explanation' => "E°pile = 0,80 − (-0,76) = 1,56 V.",
                        'choices' => [
                            ['choice_text' => "0,04 V", 'is_correct' => false],
                            ['choice_text' => "1,56 V", 'is_correct' => true],
                            ['choice_text' => "-1,56 V", 'is_correct' => false],
                            ['choice_text' => "2,36 V", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si E°cathode = +0,34 V et E°anode = -0,76 V, combien vaut E°pile ?",
                        'explanation' => "On soustrait le potentiel de l’anode : 0,34 − (-0,76) = 1,10 V.",
                        'choices' => [
                            ['choice_text' => "0,42 V", 'is_correct' => false],
                            ['choice_text' => "1,10 V", 'is_correct' => true],
                            ['choice_text' => "-1,10 V", 'is_correct' => false],
                            ['choice_text' => "1,52 V", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une pile a E°pile > 0 pour la réaction écrite dans le sens considéré. Que peut-on généralement en déduire ?",
                        'explanation' => "Une force électromotrice standard positive correspond à une réaction globalement spontanée dans le sens écrit, dans les conditions standard.",
                        'choices' => [
                            ['choice_text' => "La réaction est favorisée dans ce sens en conditions standard", 'is_correct' => true],
                            ['choice_text' => "La réaction est impossible", 'is_correct' => false],
                            ['choice_text' => "La pile doit être chauffée", 'is_correct' => false],
                            ['choice_text' => "Les électrons ne peuvent pas circuler", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si on inverse complètement la réaction d’une pile, que devient le signe de E°pile ?",
                        'explanation' => "Inverser le sens de la réaction inverse le sens du transfert d’électrons et change donc le signe de la force électromotrice standard.",
                        'choices' => [
                            ['choice_text' => "Il reste forcément identique", 'is_correct' => false],
                            ['choice_text' => "Il s’inverse", 'is_correct' => true],
                            ['choice_text' => "Il devient toujours nul", 'is_correct' => false],
                            ['choice_text' => "Il devient toujours égal à 1 V", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi compare-t-on les potentiels standards de réduction pour prévoir le fonctionnement d’une pile ?",
                        'explanation' => "Ils permettent d’identifier l’électrode qui a la plus grande tendance à subir une réduction dans les conditions standard.",
                        'choices' => [
                            ['choice_text' => "Pour choisir le siège de la réduction", 'is_correct' => true],
                            ['choice_text' => "Pour calculer directement la masse du récipient", 'is_correct' => false],
                            ['choice_text' => "Pour déterminer la couleur de l’électrode", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer le pont salin", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux couples ont des potentiels standards de réduction de +0,34 V et +0,80 V. Lequel a la plus forte tendance à se réduire en conditions standard ?",
                        'explanation' => "Le potentiel de réduction le plus élevé correspond à la plus grande tendance thermodynamique à accepter des électrons en conditions standard.",
                        'choices' => [
                            ['choice_text' => "+0,34 V", 'is_correct' => false],
                            ['choice_text' => "+0,80 V", 'is_correct' => true],
                            ['choice_text' => "Ils sont identiques", 'is_correct' => false],
                            ['choice_text' => "Impossible de comparer les valeurs", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une tension de pile de 1,50 V est-elle une mesure de courant ?",
                        'explanation' => "Le volt mesure une différence de potentiel, pas un courant. Le courant électrique se mesure en ampères.",
                        'choices' => [
                            ['choice_text' => "Oui, le volt et l’ampère sont la même unité", 'is_correct' => false],
                            ['choice_text' => "Non, 1,50 V représente une différence de potentiel", 'is_correct' => true],
                            ['choice_text' => "Oui, mais seulement pour les piles", 'is_correct' => false],
                            ['choice_text' => "Non, car une pile n’a pas de potentiel", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si E°cathode = +1,10 V et E°anode = +0,34 V, quelle est la valeur de E°pile ?",
                        'explanation' => "E°pile = 1,10 − 0,34 = 0,76 V.",
                        'choices' => [
                            ['choice_text' => "0,76 V", 'is_correct' => true],
                            ['choice_text' => "1,44 V", 'is_correct' => false],
                            ['choice_text' => "-0,76 V", 'is_correct' => false],
                            ['choice_text' => "0,34 V", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Équations d’oxydoréduction et équilibrage simple",
                'description' => "Écrire des demi-équations simples et équilibrer le transfert d’électrons dans des réactions rédox courantes.",
                'questions' => [
                    [
                        'question' => "Quelle demi-équation représente correctement l’oxydation du fer métallique en Fe²⁺ ?",
                        'explanation' => "Le fer perd deux électrons pour passer de Fe à Fe²⁺ : Fe → Fe²⁺ + 2 e⁻.",
                        'choices' => [
                            ['choice_text' => "Fe + 2 e⁻ → Fe²⁺", 'is_correct' => false],
                            ['choice_text' => "Fe → Fe²⁺ + 2 e⁻", 'is_correct' => true],
                            ['choice_text' => "Fe²⁺ → Fe + 2 e⁻", 'is_correct' => false],
                            ['choice_text' => "Fe + e⁻ → Fe⁺", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle demi-équation représente correctement la réduction de Cu²⁺ ?",
                        'explanation' => "Cu²⁺ gagne deux électrons pour devenir Cu : Cu²⁺ + 2 e⁻ → Cu.",
                        'choices' => [
                            ['choice_text' => "Cu → Cu²⁺ + 2 e⁻", 'is_correct' => false],
                            ['choice_text' => "Cu²⁺ + 2 e⁻ → Cu", 'is_correct' => true],
                            ['choice_text' => "Cu²⁺ → Cu + e⁻", 'is_correct' => false],
                            ['choice_text' => "Cu + 2 e⁻ → Cu²⁺", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi faut-il équilibrer le nombre d’électrons dans une réaction rédox globale ?",
                        'explanation' => "Les électrons transférés doivent être conservés : le nombre d’électrons perdus doit égaler le nombre d’électrons gagnés.",
                        'choices' => [
                            ['choice_text' => "Pour respecter la conservation des charges et des électrons", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter automatiquement la température", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les réactifs", 'is_correct' => false],
                            ['choice_text' => "Pour rendre la solution toujours neutre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pour Zn → Zn²⁺ + 2 e⁻ et Cu²⁺ + 2 e⁻ → Cu, combien d’électrons sont transférés dans la réaction globale ?",
                        'explanation' => "Les deux demi-réactions font intervenir 2 électrons. Ils s’annulent lors de l’addition, donc 2 électrons sont transférés.",
                        'choices' => [
                            ['choice_text' => "1", 'is_correct' => false],
                            ['choice_text' => "2", 'is_correct' => true],
                            ['choice_text' => "3", 'is_correct' => false],
                            ['choice_text' => "4", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle est la réaction globale correcte pour la pile Zn/Cu ?",
                        'explanation' => "On additionne Zn → Zn²⁺ + 2 e⁻ et Cu²⁺ + 2 e⁻ → Cu. Les électrons s’annulent : Zn + Cu²⁺ → Zn²⁺ + Cu.",
                        'choices' => [
                            ['choice_text' => "Zn²⁺ + Cu → Zn + Cu²⁺", 'is_correct' => false],
                            ['choice_text' => "Zn + Cu²⁺ → Zn²⁺ + Cu", 'is_correct' => true],
                            ['choice_text' => "Zn + Cu → Zn²⁺ + Cu²⁺", 'is_correct' => false],
                            ['choice_text' => "Zn²⁺ + Cu²⁺ → Zn + Cu", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans MnO₄⁻ + 8 H⁺ + 5 e⁻ → Mn²⁺ + 4 H₂O, que représente le coefficient 5 devant les électrons ?",
                        'explanation' => "Le coefficient 5 indique que cinq électrons sont nécessaires pour réduire MnO₄⁻ en Mn²⁺ dans cette demi-équation acide.",
                        'choices' => [
                            ['choice_text' => "Cinq électrons sont consommés", 'is_correct' => true],
                            ['choice_text' => "Cinq électrons sont produits", 'is_correct' => false],
                            ['choice_text' => "Cinq protons sont produits", 'is_correct' => false],
                            ['choice_text' => "Cinq molécules d’eau sont consommées", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une demi-équation de réduction, où place-t-on généralement les électrons ?",
                        'explanation' => "Une réduction est un gain d’électrons. Les électrons apparaissent donc du côté des réactifs dans la demi-équation.",
                        'choices' => [
                            ['choice_text' => "Du côté des produits", 'is_correct' => false],
                            ['choice_text' => "Du côté des réactifs", 'is_correct' => true],
                            ['choice_text' => "Ils ne doivent jamais apparaître", 'is_correct' => false],
                            ['choice_text' => "Toujours au-dessus de la flèche", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une demi-équation d’oxydation, où apparaissent les électrons ?",
                        'explanation' => "Une oxydation correspond à une perte d’électrons. Les électrons apparaissent donc du côté des produits.",
                        'choices' => [
                            ['choice_text' => "Du côté des réactifs", 'is_correct' => false],
                            ['choice_text' => "Du côté des produits", 'is_correct' => true],
                            ['choice_text' => "Dans le solvant uniquement", 'is_correct' => false],
                            ['choice_text' => "Dans le nom de l’espèce", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une demi-réaction libère 3 électrons tandis qu’une autre en consomme 2. Que faut-il faire avant de les additionner ?",
                        'explanation' => "Il faut rendre les nombres d’électrons identiques. Le plus petit multiple commun de 3 et 2 est 6 : on multiplie donc les demi-réactions pour avoir 6 électrons de chaque côté.",
                        'choices' => [
                            ['choice_text' => "Rien, on additionne directement", 'is_correct' => false],
                            ['choice_text' => "Multiplier les demi-réactions pour obtenir le même nombre d’électrons", 'is_correct' => true],
                            ['choice_text' => "Supprimer les électrons", 'is_correct' => false],
                            ['choice_text' => "Changer tous les ions en molécules", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans 2 Fe³⁺ + 2 e⁻ → 2 Fe²⁺, combien d’électrons sont consommés ?",
                        'explanation' => "Le coefficient placé devant les électrons est 2. La demi-équation consomme donc 2 moles d’électrons pour 2 moles de Fe³⁺.",
                        'choices' => [
                            ['choice_text' => "1 électron", 'is_correct' => false],
                            ['choice_text' => "2 électrons", 'is_correct' => true],
                            ['choice_text' => "3 électrons", 'is_correct' => false],
                            ['choice_text' => "4 électrons", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Électrolyse et cellules électrolytiques",
                'description' => "Comprendre comment l’électricité peut forcer une réaction chimique et distinguer électrolyse et pile.",
                'questions' => [
                    [
                        'question' => "Qu’est-ce qu’une électrolyse ?",
                        'explanation' => "L’électrolyse utilise une source électrique pour imposer une réaction chimique non spontanée dans les conditions étudiées.",
                        'choices' => [
                            ['choice_text' => "Une réaction spontanée qui produit toujours de la lumière", 'is_correct' => false],
                            ['choice_text' => "Une réaction chimique forcée par une source électrique", 'is_correct' => true],
                            ['choice_text' => "Une simple évaporation", 'is_correct' => false],
                            ['choice_text' => "Une pile qui fonctionne sans électrodes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une cellule électrolytique, où a lieu l’oxydation ?",
                        'explanation' => "Comme dans toutes les cellules électrochimiques, l’oxydation a lieu à l’anode. Ce qui change avec le type de cellule, c’est le signe de l’électrode.",
                        'choices' => [
                            ['choice_text' => "À la cathode", 'is_correct' => false],
                            ['choice_text' => "À l’anode", 'is_correct' => true],
                            ['choice_text' => "Dans la pile externe", 'is_correct' => false],
                            ['choice_text' => "Dans le générateur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une cellule électrolytique, où a lieu la réduction ?",
                        'explanation' => "La réduction a toujours lieu à la cathode, même pendant une électrolyse.",
                        'choices' => [
                            ['choice_text' => "À l’anode", 'is_correct' => false],
                            ['choice_text' => "À la cathode", 'is_correct' => true],
                            ['choice_text' => "Dans le générateur", 'is_correct' => false],
                            ['choice_text' => "Dans le câble uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle est une différence générale entre une pile galvanique et une cellule électrolytique ?",
                        'explanation' => "Une pile transforme une réaction spontanée en énergie électrique, alors qu’une cellule électrolytique consomme de l’énergie électrique pour forcer une réaction.",
                        'choices' => [
                            ['choice_text' => "La pile produit généralement de l’électricité ; l’électrolyse en consomme", 'is_correct' => true],
                            ['choice_text' => "Les deux utilisent toujours de l’électricité de la même manière", 'is_correct' => false],
                            ['choice_text' => "Une électrolyse ne contient jamais d’électrodes", 'is_correct' => false],
                            ['choice_text' => "Une pile ne fait jamais d’oxydoréduction", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une cellule électrolytique, l’électrode reliée à la borne positive du générateur est généralement…",
                        'explanation' => "Dans une cellule électrolytique, l’anode est reliée à la borne positive du générateur et c’est le lieu de l’oxydation.",
                        'choices' => [
                            ['choice_text' => "L’anode", 'is_correct' => true],
                            ['choice_text' => "La cathode", 'is_correct' => false],
                            ['choice_text' => "Le pont salin", 'is_correct' => false],
                            ['choice_text' => "Le fusible", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une cellule électrolytique, la cathode est généralement reliée à la borne…",
                        'explanation' => "La cathode est le siège de la réduction et, dans une cellule électrolytique, elle est reliée à la borne négative du générateur.",
                        'choices' => [
                            ['choice_text' => "positive", 'is_correct' => false],
                            ['choice_text' => "négative", 'is_correct' => true],
                            ['choice_text' => "neutre uniquement", 'is_correct' => false],
                            ['choice_text' => "du pont salin", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la cathode d’une électrolyse est-elle négative ?",
                        'explanation' => "Le générateur fournit des électrons à la cathode. Elle reçoit donc des électrons et est reliée à la borne négative.",
                        'choices' => [
                            ['choice_text' => "Parce qu’elle reçoit des électrons du générateur", 'is_correct' => true],
                            ['choice_text' => "Parce qu’elle produit tous les ions positifs", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle réalise une oxydation", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle est toujours faite de zinc", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le dépôt d’un métal sur une électrode pendant une électrolyse correspond souvent à…",
                        'explanation' => "Un ion métallique peut gagner des électrons à la cathode et devenir un métal solide qui se dépose sur l’électrode.",
                        'choices' => [
                            ['choice_text' => "une réduction", 'is_correct' => true],
                            ['choice_text' => "une oxydation", 'is_correct' => false],
                            ['choice_text' => "une vaporisation", 'is_correct' => false],
                            ['choice_text' => "une combustion", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lors de l’électrolyse de Cu²⁺, quelle demi-équation peut décrire le dépôt de cuivre ?",
                        'explanation' => "Les ions Cu²⁺ gagnent deux électrons à la cathode pour former du cuivre métallique : Cu²⁺ + 2 e⁻ → Cu.",
                        'choices' => [
                            ['choice_text' => "Cu → Cu²⁺ + 2 e⁻", 'is_correct' => false],
                            ['choice_text' => "Cu²⁺ + 2 e⁻ → Cu", 'is_correct' => true],
                            ['choice_text' => "Cu²⁺ → Cu + e⁻", 'is_correct' => false],
                            ['choice_text' => "Cu + 2 e⁻ → Cu²⁺", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel appareil fournit l’énergie électrique nécessaire à une électrolyse ?",
                        'explanation' => "Une source de courant ou un générateur fournit l’énergie électrique qui force la réaction électrochimique.",
                        'choices' => [
                            ['choice_text' => "Un générateur", 'is_correct' => true],
                            ['choice_text' => "Un thermomètre", 'is_correct' => false],
                            ['choice_text' => "Une balance", 'is_correct' => false],
                            ['choice_text' => "Un aimant seulement", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Applications de l’électrochimie",
                'description' => "Relier les notions d’électrochimie à des exemples concrets : corrosion, batteries, électrodéposition et piles.",
                'questions' => [
                    [
                        'question' => "La rouille du fer est principalement liée à…",
                        'explanation' => "La corrosion du fer implique des réactions d’oxydation et de réduction, en présence notamment d’eau et de dioxygène.",
                        'choices' => [
                            ['choice_text' => "Une réaction d’oxydoréduction", 'is_correct' => true],
                            ['choice_text' => "Une simple fusion du fer", 'is_correct' => false],
                            ['choice_text' => "Une évaporation du métal", 'is_correct' => false],
                            ['choice_text' => "Une réaction sans électrons", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi peindre une surface métallique peut-il ralentir la corrosion ?",
                        'explanation' => "La peinture peut isoler le métal du dioxygène et de l’eau. Elle réduit ainsi le contact nécessaire à certaines réactions de corrosion.",
                        'choices' => [
                            ['choice_text' => "Elle bloque l’accès de l’eau et de l’air au métal", 'is_correct' => true],
                            ['choice_text' => "Elle transforme le fer en cuivre", 'is_correct' => false],
                            ['choice_text' => "Elle ajoute automatiquement des électrons au métal", 'is_correct' => false],
                            ['choice_text' => "Elle augmente toujours la température", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le rôle principal d’une batterie rechargeable lorsqu’on la recharge ?",
                        'explanation' => "La source électrique impose des réactions dans le sens inverse des réactions de décharge, ce qui régénère les matériaux actifs de la batterie.",
                        'choices' => [
                            ['choice_text' => "Forcer des réactions électrochimiques inverses", 'is_correct' => true],
                            ['choice_text' => "Détruire définitivement les électrodes", 'is_correct' => false],
                            ['choice_text' => "Supprimer tous les ions", 'is_correct' => false],
                            ['choice_text' => "Transformer l’électricité en masse", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "L’électrodéposition est utilisée notamment pour…",
                        'explanation' => "L’électrodéposition permet de déposer une couche métallique sur une pièce grâce à une électrolyse, par exemple pour la protection ou l’aspect de surface.",
                        'choices' => [
                            ['choice_text' => "recouvrir une pièce d’un métal", 'is_correct' => true],
                            ['choice_text' => "faire fondre tout le métal sans source électrique", 'is_correct' => false],
                            ['choice_text' => "mesurer la pression atmosphérique", 'is_correct' => false],
                            ['choice_text' => "produire uniquement de la vapeur d’eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une batterie en fonctionnement, l’énergie chimique est principalement convertie en…",
                        'explanation' => "Pendant la décharge, les réactions électrochimiques libèrent de l’énergie qui peut être fournie au circuit sous forme électrique.",
                        'choices' => [
                            ['choice_text' => "énergie électrique", 'is_correct' => true],
                            ['choice_text' => "énergie nucléaire", 'is_correct' => false],
                            ['choice_text' => "masse supplémentaire", 'is_correct' => false],
                            ['choice_text' => "matière sans énergie", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une batterie rechargeable n’est-elle pas identique à une pile jetable dans son fonctionnement ?",
                        'explanation' => "Une batterie rechargeable est conçue pour permettre des réactions électrochimiques réversibles ou suffisamment réversibles lors de la recharge et de la décharge.",
                        'choices' => [
                            ['choice_text' => "Ses réactions peuvent être ramenées dans le sens utile pendant la recharge", 'is_correct' => true],
                            ['choice_text' => "Elle ne contient jamais d’électrolyte", 'is_correct' => false],
                            ['choice_text' => "Elle fonctionne sans électrons", 'is_correct' => false],
                            ['choice_text' => "Elle produit uniquement de la chaleur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lequel est un exemple d’application directe d’une pile électrochimique ?",
                        'explanation' => "Une pile électrochimique peut alimenter un appareil en transformant l’énergie chimique en énergie électrique.",
                        'choices' => [
                            ['choice_text' => "Alimenter une télécommande", 'is_correct' => true],
                            ['choice_text' => "Mesurer une masse avec une balance mécanique", 'is_correct' => false],
                            ['choice_text' => "Faire fondre de la glace sans énergie", 'is_correct' => false],
                            ['choice_text' => "Refroidir spontanément une pièce", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une protection cathodique du fer, l’objectif est notamment de…",
                        'explanation' => "La protection cathodique cherche à empêcher l’oxydation du fer en lui faisant jouer le rôle de cathode ou en le protégeant par une anode sacrificielle selon le dispositif.",
                        'choices' => [
                            ['choice_text' => "réduire l’oxydation du fer", 'is_correct' => true],
                            ['choice_text' => "accélérer sa corrosion", 'is_correct' => false],
                            ['choice_text' => "transformer le fer en plastique", 'is_correct' => false],
                            ['choice_text' => "supprimer toutes les réactions chimiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un objet en fer est laissé sous la pluie pendant plusieurs semaines sans protection. Quel phénomène est favorisé ?",
                        'explanation' => "L’eau et le dioxygène présents dans l’environnement facilitent les réactions électrochimiques à l’origine de la corrosion du fer.",
                        'choices' => [
                            ['choice_text' => "La corrosion", 'is_correct' => true],
                            ['choice_text' => "La fusion", 'is_correct' => false],
                            ['choice_text' => "La sublimation", 'is_correct' => false],
                            ['choice_text' => "La neutralisation acido-basique uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel lien existe entre corrosion et électrochimie ?",
                        'explanation' => "La corrosion implique des zones où le métal s’oxyde et d’autres réactions de réduction. Elle repose donc sur des transferts d’électrons.",
                        'choices' => [
                            ['choice_text' => "La corrosion est liée à des réactions d’oxydoréduction", 'is_correct' => true],
                            ['choice_text' => "La corrosion ne concerne jamais les électrons", 'is_correct' => false],
                            ['choice_text' => "La corrosion est uniquement un changement physique", 'is_correct' => false],
                            ['choice_text' => "La corrosion nécessite toujours une pile commerciale", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Électrochimie et calculs simples",
                'description' => "Résoudre de petites questions numériques sur les électrons transférés, la charge électrique et la quantité de matière.",
                'questions' => [
                    [
                        'question' => "Dans Zn → Zn²⁺ + 2 e⁻, combien de moles d’électrons sont produites par 1 mole de zinc oxydée ?",
                        'explanation' => "L’équation montre directement que 1 mole de Zn produit 2 moles d’électrons.",
                        'choices' => [
                            ['choice_text' => "0,5 mol", 'is_correct' => false],
                            ['choice_text' => "1 mol", 'is_correct' => false],
                            ['choice_text' => "2 mol", 'is_correct' => true],
                            ['choice_text' => "3 mol", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Selon Cu²⁺ + 2 e⁻ → Cu, combien de moles d’électrons faut-il pour réduire 3 moles de Cu²⁺ ?",
                        'explanation' => "Chaque mole de Cu²⁺ consomme 2 moles d’électrons. Pour 3 moles : 3 × 2 = 6 moles d’électrons.",
                        'choices' => [
                            ['choice_text' => "3 mol", 'is_correct' => false],
                            ['choice_text' => "5 mol", 'is_correct' => false],
                            ['choice_text' => "6 mol", 'is_correct' => true],
                            ['choice_text' => "9 mol", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une réaction transfère 4 moles d’électrons. Avec F ≈ 96 500 C/mol, quelle charge est transférée approximativement ?",
                        'explanation' => "Q = nF = 4 × 96 500 = 386 000 C.",
                        'choices' => [
                            ['choice_text' => "24 125 C", 'is_correct' => false],
                            ['choice_text' => "96 500 C", 'is_correct' => false],
                            ['choice_text' => "193 000 C", 'is_correct' => false],
                            ['choice_text' => "386 000 C", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une cellule reçoit une charge de 193 000 C. Avec F ≈ 96 500 C/mol, combien de moles d’électrons correspondent à cette charge ?",
                        'explanation' => "n = Q/F = 193 000 / 96 500 = 2 mol d’électrons.",
                        'choices' => [
                            ['choice_text' => "0,5 mol", 'is_correct' => false],
                            ['choice_text' => "1 mol", 'is_correct' => false],
                            ['choice_text' => "2 mol", 'is_correct' => true],
                            ['choice_text' => "4 mol", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si 1 mole de Cu²⁺ nécessite 2 moles d’électrons, combien de moles de Cu²⁺ peuvent être réduites par 4 moles d’électrons ?",
                        'explanation' => "2 moles d’électrons réduisent 1 mole de Cu²⁺. Donc 4 moles d’électrons peuvent réduire 4/2 = 2 moles de Cu²⁺.",
                        'choices' => [
                            ['choice_text' => "1 mol", 'is_correct' => false],
                            ['choice_text' => "2 mol", 'is_correct' => true],
                            ['choice_text' => "4 mol", 'is_correct' => false],
                            ['choice_text' => "8 mol", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une pile possède E = 1,20 V et débite un courant de 2,0 A pendant 10 s. Quelle charge a circulé ?",
                        'explanation' => "La charge est Q = I × t = 2,0 × 10 = 20 C. La tension intervient dans l’énergie, pas dans ce calcul simple de charge.",
                        'choices' => [
                            ['choice_text' => "2 C", 'is_correct' => false],
                            ['choice_text' => "10 C", 'is_correct' => false],
                            ['choice_text' => "20 C", 'is_correct' => true],
                            ['choice_text' => "24 C", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un courant de 0,50 A circule pendant 20 s. Quelle charge traverse le circuit ?",
                        'explanation' => "Q = I × t = 0,50 × 20 = 10 C.",
                        'choices' => [
                            ['choice_text' => "5 C", 'is_correct' => false],
                            ['choice_text' => "10 C", 'is_correct' => true],
                            ['choice_text' => "20 C", 'is_correct' => false],
                            ['choice_text' => "40 C", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle relation simple permet de calculer la charge transférée lorsqu’on connaît le courant I et le temps t ?",
                        'explanation' => "La relation de base est Q = I × t, avec Q en coulombs, I en ampères et t en secondes.",
                        'choices' => [
                            ['choice_text' => "Q = I/t", 'is_correct' => false],
                            ['choice_text' => "Q = I × t", 'is_correct' => true],
                            ['choice_text' => "Q = I + t", 'is_correct' => false],
                            ['choice_text' => "Q = I − t", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une pile fournit 3 A pendant 60 s. Quelle charge traverse le circuit ?",
                        'explanation' => "Q = I × t = 3 × 60 = 180 C.",
                        'choices' => [
                            ['choice_text' => "20 C", 'is_correct' => false],
                            ['choice_text' => "60 C", 'is_correct' => false],
                            ['choice_text' => "180 C", 'is_correct' => true],
                            ['choice_text' => "360 C", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si une électrolyse consomme 9650 C, combien de moles d’électrons cela représente-t-il environ avec F ≈ 96 500 C/mol ?",
                        'explanation' => "n = Q/F = 9 650 / 96 500 = 0,10 mol d’électrons.",
                        'choices' => [
                            ['choice_text' => "0,01 mol", 'is_correct' => false],
                            ['choice_text' => "0,10 mol", 'is_correct' => true],
                            ['choice_text' => "1,0 mol", 'is_correct' => false],
                            ['choice_text' => "10 mol", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Révision intégrée d’électrochimie",
                'description' => "Mobiliser plusieurs notions à la fois pour interpréter des piles, des électrolyses et des réactions d’oxydoréduction.",
                'questions' => [
                    [
                        'question' => "Dans une pile Zn/Cu qui fonctionne spontanément, quel énoncé est correct ?",
                        'explanation' => "Le zinc s’oxyde à l’anode et fournit des électrons. Les ions Cu²⁺ se réduisent à la cathode et consomment ces électrons.",
                        'choices' => [
                            ['choice_text' => "Zn est oxydé et Cu²⁺ est réduit", 'is_correct' => true],
                            ['choice_text' => "Zn est réduit et Cu²⁺ est oxydé", 'is_correct' => false],
                            ['choice_text' => "Les deux ions sont oxydés", 'is_correct' => false],
                            ['choice_text' => "Aucune espèce ne transfère d’électrons", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une électrode gagne des électrons pendant une réaction. À quelle transformation cela correspond-il ?",
                        'explanation' => "Gagner des électrons signifie subir une réduction. La cathode est le siège de cette transformation.",
                        'choices' => [
                            ['choice_text' => "Oxydation", 'is_correct' => false],
                            ['choice_text' => "Réduction", 'is_correct' => true],
                            ['choice_text' => "Corrosion uniquement", 'is_correct' => false],
                            ['choice_text' => "Précipitation nécessairement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle paire de mots permet de ne pas confondre les électrodes ?",
                        'explanation' => "Le siège de l’oxydation est toujours l’anode et le siège de la réduction est toujours la cathode.",
                        'choices' => [
                            ['choice_text' => "Anode = oxydation ; cathode = réduction", 'is_correct' => true],
                            ['choice_text' => "Anode = réduction ; cathode = oxydation", 'is_correct' => false],
                            ['choice_text' => "Anode = oxydation ; cathode = oxydation", 'is_correct' => false],
                            ['choice_text' => "Anode = réduction ; cathode = réduction", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un électrolyseur ne fonctionne pas sans alimentation électrique. Pourquoi ?",
                        'explanation' => "L’électrolyse force une transformation chimique qui n’est pas spontanée dans les conditions considérées. Le générateur fournit l’énergie nécessaire.",
                        'choices' => [
                            ['choice_text' => "Parce que la réaction doit être forcée par une source électrique", 'is_correct' => true],
                            ['choice_text' => "Parce que les électrodes sont toujours absentes", 'is_correct' => false],
                            ['choice_text' => "Parce que les électrons sont supprimés", 'is_correct' => false],
                            ['choice_text' => "Parce qu’une électrolyse est une combustion", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une batterie se recharge. Quelle conversion d’énergie décrit le mieux cette étape ?",
                        'explanation' => "Lors de la recharge, l’énergie électrique fournie par le chargeur est convertie en énergie chimique stockée dans les matériaux de la batterie.",
                        'choices' => [
                            ['choice_text' => "Électrique vers chimique", 'is_correct' => true],
                            ['choice_text' => "Chimique vers nucléaire", 'is_correct' => false],
                            ['choice_text' => "Thermique vers masse uniquement", 'is_correct' => false],
                            ['choice_text' => "Nucléaire vers électrique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un métal passe de l’état d’oxydation 0 à +2. Que s’est-il probablement produit ?",
                        'explanation' => "Une augmentation de +0 à +2 signifie une perte de deux électrons. Le métal a donc été oxydé.",
                        'choices' => [
                            ['choice_text' => "Un gain de 2 électrons", 'is_correct' => false],
                            ['choice_text' => "Une perte de 2 électrons", 'is_correct' => true],
                            ['choice_text' => "Une perte de 1 électron", 'is_correct' => false],
                            ['choice_text' => "Aucun transfert électronique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une pile possède E°cathode = +0,80 V et E°anode = -0,20 V. Quelle est sa tension standard ?",
                        'explanation' => "E°pile = 0,80 − (-0,20) = 1,00 V.",
                        'choices' => [
                            ['choice_text' => "0,60 V", 'is_correct' => false],
                            ['choice_text' => "1,00 V", 'is_correct' => true],
                            ['choice_text' => "-1,00 V", 'is_correct' => false],
                            ['choice_text' => "1,20 V", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si 2 moles d’électrons traversent un circuit, quelle charge est transférée environ ? F ≈ 96 500 C/mol.",
                        'explanation' => "Q = nF = 2 × 96 500 = 193 000 C.",
                        'choices' => [
                            ['choice_text' => "96 500 C", 'is_correct' => false],
                            ['choice_text' => "193 000 C", 'is_correct' => true],
                            ['choice_text' => "289 500 C", 'is_correct' => false],
                            ['choice_text' => "386 000 C", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le pont salin est-il important dans une pile classique ?",
                        'explanation' => "Sans déplacement d’ions pour compenser les charges, les compartiments se chargeraient rapidement et le fonctionnement de la pile serait bloqué.",
                        'choices' => [
                            ['choice_text' => "Il maintient l’électroneutralité des solutions", 'is_correct' => true],
                            ['choice_text' => "Il fournit tous les électrons du circuit", 'is_correct' => false],
                            ['choice_text' => "Il remplace les deux électrodes", 'is_correct' => false],
                            ['choice_text' => "Il transforme directement l’eau en métal", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle phrase résume le mieux l’électrochimie au niveau débutant ?",
                        'explanation' => "L’électrochimie étudie les liens entre réactions chimiques et électricité, notamment les transferts d’électrons dans les réactions d’oxydoréduction.",
                        'choices' => [
                            ['choice_text' => "Elle relie les réactions d’oxydoréduction aux phénomènes électriques", 'is_correct' => true],
                            ['choice_text' => "Elle étudie uniquement les changements de température", 'is_correct' => false],
                            ['choice_text' => "Elle concerne seulement les gaz", 'is_correct' => false],
                            ['choice_text' => "Elle exclut les batteries et les piles", 'is_correct' => false],
                        ],
                    ],
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
