<?php

namespace Database\Seeders;

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

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 65],
            ['duration' => 20, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 70],
            ['duration' => 25, 'passing_score' => 70],
            ['duration' => 25, 'passing_score' => 70],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Les bases de l’électrochimie",
                'description' => "Découvrir l’oxydation, la réduction et le transfert d’électrons entre deux espèces chimiques.",
                'questions' => [
                    ['q' => "Lors d’une oxydation, que fait l’espèce chimique concernée ?", 'c' => ["Elle gagne des électrons", "Elle perd des électrons", "Elle gagne des protons", "Elle perd des neutrons"], 'a' => 1, 'e' => "Oxydation = perte d’électrons. Pour s’en souvenir : « oxydation » et « perte » riment avec la même idée de céder."],
                    ['q' => "Une réduction correspond à…", 'c' => ["une perte d’électrons", "un gain de neutrons", "une perte de protons", "un gain d’électrons"], 'a' => 3, 'e' => "Réduire une espèce, c’est lui apporter des électrons ; sa charge (ou son nombre d’oxydation) diminue."],
                    ['q' => "Dans une réaction d’oxydoréduction, quelle particule passe d’une espèce à l’autre ?", 'c' => ["L’électron", "Le proton", "Le neutron", "Le noyau atomique"], 'a' => 0, 'e' => "Seuls les électrons sont transférés : les noyaux ne changent pas dans une réaction chimique."],
                    ['q' => "Un clou de fer cède des électrons à son environnement. Il est donc…", 'c' => ["réduit", "neutralisé", "oxydé", "dissous dans l’eau"], 'a' => 2, 'e' => "Céder des électrons, c’est s’oxyder : le fer devient un ion fer."],
                    ['q' => "Dans la demi-équation Cu²⁺ + 2 e⁻ → Cu, que subit l’ion Cu²⁺ ?", 'c' => ["Une oxydation", "Une dilution", "Une précipitation", "Une réduction"], 'a' => 3, 'e' => "L’ion reçoit deux électrons, sa charge passe de +2 à 0 : il est réduit en métal cuivre."],
                    ['q' => "Dans Zn → Zn²⁺ + 2 e⁻, le zinc…", 'c' => ["se réduit", "s’oxyde", "reste inchangé", "gagne deux électrons"], 'a' => 1, 'e' => "Les électrons sont écrits à droite : ils sont libérés par le zinc, qui s’oxyde."],
                    ['q' => "Parmi ces écritures, laquelle est le couple oxydant/réducteur du cuivre (Ox/Red) ?", 'c' => ["Cu²⁺/Cu", "Cu/Cu²⁺", "Cu²⁺/Zn²⁺", "Cu⁻/Cu"], 'a' => 0, 'e' => "On note d’abord la forme oxydée, ici l’ion Cu²⁺, puis la forme réduite, le métal Cu."],
                    ['q' => "Dans une réaction rédox, les électrons cédés par une espèce sont…", 'c' => ["détruits au cours de la réaction", "libres dans la solution", "captés par une autre espèce", "transformés en protons"], 'a' => 2, 'e' => "Les électrons ne disparaissent pas : chaque électron perdu par un réducteur est gagné par un oxydant."],
                    ['q' => "Pourquoi parle-t-on d’oxydoréduction et pas seulement d’oxydation ?", 'c' => ["Il y a deux solvants dans le mélange", "Les deux transformations ont lieu en même temps", "La solution est toujours acide", "On chauffe toujours le mélange pour qu’il réagisse"], 'a' => 1, 'e' => "Une espèce ne peut céder des électrons que si une autre est là pour les recevoir : les deux demi-réactions sont indissociables."],
                    ['q' => "Laquelle de ces phrases est exacte ?", 'c' => ["L’oxydation est un gain d’électrons, la réduction une perte", "L’oxydation et la réduction sont deux gains d’électrons", "Ni l’une ni l’autre ne fait intervenir d’électrons", "Oxydation : perte d’électrons ; réduction : gain"], 'a' => 3, 'e' => "Moyen mnémotechnique : « RedOx — la Réduction c’est Recevoir », l’oxydation est donc l’inverse."],
                ],
            ],
            [
                'title' => "Nombres d’oxydation et identification des espèces",
                'description' => "Calculer un nombre d’oxydation et s’en servir pour repérer l’oxydation et la réduction.",
                'questions' => [
                    ['q' => "Quel est le nombre d’oxydation du sodium dans l’ion Na⁺ ?", 'c' => ["−1", "0 (atome neutre)", "+1", "+2"], 'a' => 2, 'e' => "Pour un ion monoatomique, le nombre d’oxydation est égal à sa charge."],
                    ['q' => "Quel est le nombre d’oxydation de l’oxygène dans l’eau H₂O ?", 'c' => ["-2", "-1 (peroxyde)", "+1", "+2"], 'a' => 0, 'e' => "Deux H à +1 donnent +2 ; pour que la molécule soit neutre, O doit valoir -2."],
                    ['q' => "Le nombre d’oxydation d’un élément passe de +2 à +3. Il a subi…", 'c' => ["une réduction", "une neutralisation", "une dilution", "une oxydation"], 'a' => 3, 'e' => "Le nombre d’oxydation augmente : l’élément a perdu un électron, c’est une oxydation."],
                    ['q' => "Un élément voit son nombre d’oxydation passer de +3 à +1. Que peut-on dire ?", 'c' => ["Il a perdu 2 électrons et s’est oxydé", "Il a gagné 2 électrons : réduction", "Il a gagné 4 électrons", "Il n’a pas échangé d’électrons"], 'a' => 1, 'e' => "La baisse de 2 unités correspond à 2 électrons reçus : il y a réduction."],
                    ['q' => "Dans Fe²⁺ → Fe³⁺, combien d’électrons le fer échange-t-il ?", 'c' => ["Il en perd 1", "Il en perd 2", "Il en gagne 1", "Il en gagne 3"], 'a' => 0, 'e' => "Le nombre d’oxydation monte d’une unité : Fe²⁺ → Fe³⁺ + e⁻."],
                    ['q' => "Dans Cl₂ + 2 e⁻ → 2 Cl⁻, le nombre d’oxydation du chlore passe de 0 à -1. Le chlore est donc…", 'c' => ["oxydé", "neutralisé", "réduit", "inchangé"], 'a' => 2, 'e' => "Il capte un électron par atome et son nombre d’oxydation diminue : c’est la réduction."],
                    ['q' => "Quel changement de nombre d’oxydation traduit une perte d’électrons ?", 'c' => ["+1 vers 0", "-2 vers -3", "+3 vers +1", "0 vers +2"], 'a' => 3, 'e' => "Perdre des électrons fait monter le nombre d’oxydation ; seul « 0 vers +2 » monte."],
                    ['q' => "L’azote passe de 0 dans N₂ à -3 dans NH₃. Que s’est-il passé pour chaque atome d’azote ?", 'c' => ["Il en a perdu 3", "Il en a gagné 3", "Il en a gagné 1", "Il n’a pas changé"], 'a' => 1, 'e' => "Le nombre d’oxydation baisse de 3 unités : trois électrons reçus, donc une réduction."],
                    ['q' => "Quel est le nombre d’oxydation du fer dans Fe₂O₃ ?", 'c' => ["+2", "+6 (2 × 3)", "+3", "-3"], 'a' => 2, 'e' => "Trois O à -2 font -6 ; les deux atomes de fer doivent compenser avec +6, soit +3 chacun."],
                    ['q' => "Quel est le nombre d’oxydation d’un élément dans un corps simple comme Fe ou Cl₂ ?", 'c' => ["0", "+1", "-1", "Il dépend de la solution"], 'a' => 0, 'e' => "Aucun transfert d’électrons n’est « imputé » entre atomes identiques : le nombre d’oxydation vaut 0."],
                ],
            ],
            [
                'title' => "Piles électrochimiques et circulation des électrons",
                'description' => "Comprendre le fonctionnement d’une pile : électrodes, circulation des électrons et rôle du pont salin.",
                'questions' => [
                    ['q' => "Dans une pile, quelle conversion d’énergie a lieu ?", 'c' => ["Électrique en chimique", "Thermique en chimique", "Lumineuse en électrique", "Chimique en électrique"], 'a' => 3, 'e' => "Une réaction rédox spontanée est exploitée pour faire circuler un courant dans le circuit extérieur."],
                    ['q' => "Dans une pile galvanique, où se produit l’oxydation ?", 'c' => ["À la cathode", "À l’anode", "Dans le pont salin", "Dans le voltmètre"], 'a' => 1, 'e' => "Mnémotechnique : anode et oxydation commencent par une voyelle."],
                    ['q' => "Dans le fil de la pile, dans quel sens circulent les électrons ?", 'c' => ["De la cathode vers l’anode", "Du pont salin vers l’anode", "De l’anode vers la cathode", "Du pont salin vers la cathode"], 'a' => 2, 'e' => "Ils sont libérés à l’anode par l’oxydation et consommés à la cathode par la réduction."],
                    ['q' => "À quoi sert le pont salin ?", 'c' => ["À fermer le circuit par le déplacement d’ions", "À fournir les électrons du fil", "À chauffer les solutions", "À faire passer les électrons entre compartiments"], 'a' => 0, 'e' => "Les ions qui s’y déplacent compensent les charges apparues dans chaque compartiment ; les électrons, eux, restent dans le fil."],
                    ['q' => "Dans une pile zinc-cuivre, quel métal s’oxyde ?", 'c' => ["Le cuivre", "Le zinc", "Les deux à la fois", "Aucun des deux"], 'a' => 1, 'e' => "Le zinc est le réducteur le plus fort : Zn → Zn²⁺ + 2 e⁻ (E° = -0,76 V contre +0,34 V pour le cuivre)."],
                    ['q' => "Dans la pile zinc-cuivre, à quoi servent les électrons qui arrivent sur l’électrode de cuivre ?", 'c' => ["À oxyder le cuivre métallique", "À former des ions Zn²⁺", "À dissoudre le pont salin", "À réduire les ions Cu²⁺"], 'a' => 3, 'e' => "Au contact de l’électrode, Cu²⁺ capte deux électrons et se dépose sous forme de cuivre métallique."],
                    ['q' => "Quel appareil mesure la tension aux bornes d’une pile ?", 'c' => ["Un voltmètre", "Un ampèremètre", "Un ohmmètre", "Un chronomètre"], 'a' => 0, 'e' => "Le voltmètre indique la différence de potentiel en volts ; l’ampèremètre, lui, mesure une intensité."],
                    ['q' => "Une pile à plat ne débite plus. Quelle est la cause la plus simple ?", 'c' => ["Les électrons ont disparu", "Le pont salin a créé un courant inverse", "Le réactif limitant est consommé", "Le cuivre est devenu isolant"], 'a' => 2, 'e' => "Une fois un réactif épuisé, la réaction spontanée s’arrête et la tension tombe à zéro."],
                    ['q' => "Dans la pile zinc-cuivre, l’électrode de zinc est la borne…", 'c' => ["positive", "neutre", "alternativement + et -", "négative"], 'a' => 3, 'e' => "Elle fournit des électrons au circuit : c’est la borne - de la pile."],
                    ['q' => "Dans le circuit extérieur de la pile zinc-cuivre, le courant conventionnel circule…", 'c' => ["du zinc vers le cuivre", "du cuivre vers le zinc", "dans le pont salin", "dans les deux sens à la fois"], 'a' => 1, 'e' => "Le courant va de la borne + (cuivre) à la borne - (zinc), donc en sens inverse des électrons."],
                ],
            ],
            [
                'title' => "Anode, cathode et pont salin",
                'description' => "Suivre les ions, les demi-équations et les électrodes dans la pile zinc-cuivre.",
                'questions' => [
                    ['q' => "Dans une pile, quelle électrode est la borne négative ?", 'c' => ["L’anode", "La cathode", "Le pont salin", "Le voltmètre"], 'a' => 0, 'e' => "L’anode envoie des électrons dans le fil : elle est négative en pile."],
                    ['q' => "Quelle demi-équation s’écrit à l’anode de la pile zinc-cuivre ?", 'c' => ["Zn²⁺ + 2 e⁻ → Zn", "Cu²⁺ + 2 e⁻ → Cu", "Zn → Zn²⁺ + 2 e⁻", "Cu → Cu²⁺ + 2 e⁻"], 'a' => 2, 'e' => "À l’anode se déroule l’oxydation, et c’est le zinc qui perd des électrons."],
                    ['q' => "Quelle demi-équation décrit la cathode de cette même pile ?", 'c' => ["Cu → Cu²⁺ + 2 e⁻", "Cu²⁺ + 2 e⁻ → Cu", "Zn → Zn²⁺ + 2 e⁻", "Zn²⁺ + 2 e⁻ → Zn"], 'a' => 1, 'e' => "Les électrons arrivent sur le cuivre : les ions Cu²⁺ les capturent et se déposent."],
                    ['q' => "Dans le compartiment du zinc, des ions Zn²⁺ apparaissent. Quels ions du pont salin viennent compenser cet excès de charge positive ?", 'c' => ["Les cations, qui migrent vers ce compartiment", "Les anions, qui quittent ce compartiment", "Les cations, qui quittent ce compartiment", "Les anions, qui migrent vers ce compartiment"], 'a' => 3, 'e' => "Les anions vont vers l’anode, où les charges + s’accumulent."],
                    ['q' => "Dans le compartiment du cuivre, les ions Cu²⁺ disparaissent peu à peu. Quels ions du pont salin migrent vers lui ?", 'c' => ["Les anions, comme NO₃⁻", "Les électrons", "Les cations, comme K⁺", "Les ions Zn²⁺ du fil"], 'a' => 2, 'e' => "Il manque des charges positives : des cations du pont salin arrivent pour rétablir l’électroneutralité."],
                    ['q' => "Pendant le fonctionnement de la pile, comment évoluent les masses des électrodes ?", 'c' => ["Le zinc diminue, le cuivre augmente", "Le zinc grossit, le cuivre s’amincit", "Les deux diminuent en même temps", "Aucune ne varie"], 'a' => 0, 'e' => "Le zinc se dissout en Zn²⁺ pendant que le cuivre métallique se dépose sur l’autre électrode."],
                    ['q' => "On débranche le fil qui relie les deux électrodes. Que se passe-t-il ?", 'c' => ["Le courant augmente", "Plus aucun courant ne circule", "Le pont salin prend le relais pour les électrons", "Les électrodes fondent"], 'a' => 1, 'e' => "Sans chemin pour les électrons, le circuit est ouvert et la pile ne débite plus."],
                    ['q' => "Dans la notation Zn | Zn²⁺ || Cu²⁺ | Cu, que représente le double trait ?", 'c' => ["Le fil électrique", "La paroi du verre", "La frontière entre solide et solution", "Le pont salin"], 'a' => 3, 'e' => "Le double trait sépare les deux demi-piles reliées par le pont salin ; l’anode est écrite à gauche."],
                    ['q' => "Un élève dit : « Les électrons traversent le pont salin. » Quelle est son erreur ?", 'c' => ["Dans le pont, ce sont les ions qui se déplacent", "Les électrons n’existent pas dans une pile électrochimique", "Le pont ne contient aucun ion", "Les électrons passent dans les solutions"], 'a' => 0, 'e' => "Les électrons circulent dans les fils métalliques ; la solution et le pont conduisent le courant grâce aux ions."],
                    ['q' => "La solution de sulfate de cuivre(II) est bleue au départ. Pendant le fonctionnement de la pile zinc-cuivre, sa couleur…", 'c' => ["devient plus intense", "reste identique", "s’atténue", "tourne au rouge"], 'a' => 2, 'e' => "Les ions Cu²⁺, responsables de la teinte bleue, sont consommés à la cathode."],
                ],
            ],
            [
                'title' => "Potentiel d’électrode et tension d’une pile",
                'description' => "Utiliser les potentiels standard pour désigner la cathode et calculer la tension d’une pile.",
                'questions' => [
                    ['q' => "On donne E°(Cu²⁺/Cu) = +0,34 V et E°(Zn²⁺/Zn) = -0,76 V. Quelle est la tension standard de la pile zinc-cuivre ?", 'c' => ["0,42 V", "1,10 V", "-1,10 V", "1,52 V"], 'a' => 1, 'e' => "E° = E°(cathode) − E°(anode) = 0,34 − (−0,76) = 1,10 V."],
                    ['q' => "Avec E°(Ag⁺/Ag) = +0,80 V et E°(Zn²⁺/Zn) = -0,76 V, quelle est la tension standard de la pile zinc-argent ?", 'c' => ["0,04 V", "-1,56 V", "1,14 V", "1,56 V"], 'a' => 3, 'e' => "L’argent est la cathode : 0,80 − (−0,76) = 1,56 V. Attention à ne pas additionner sans tenir compte du signe."],
                    ['q' => "Pile cuivre-argent : E°(Ag⁺/Ag) = +0,80 V et E°(Cu²⁺/Cu) = +0,34 V. Quelle est sa tension standard ?", 'c' => ["1,14 V", "-0,46 V", "0,46 V", "0,34 V"], 'a' => 2, 'e' => "L’argent, au potentiel le plus haut, est la cathode : 0,80 − 0,34 = 0,46 V."],
                    ['q' => "Entre Fe²⁺/Fe (−0,44 V) et Cu²⁺/Cu (+0,34 V), lequel sera la cathode dans une pile ?", 'c' => ["Cu²⁺/Cu, de potentiel le plus élevé", "Fe²⁺/Fe, car il est le plus réducteur", "Cu²⁺/Cu, de potentiel le plus bas", "Aucun, ils s’annulent"], 'a' => 0, 'e' => "Le couple le plus oxydant, celui de plus grand potentiel, subit la réduction."],
                    ['q' => "Pile zinc-fer : E°(Fe²⁺/Fe) = −0,44 V et E°(Zn²⁺/Zn) = −0,76 V. Quelle est sa tension standard ?", 'c' => ["1,20 V", "-0,32 V", "0,44 V", "0,32 V"], 'a' => 3, 'e' => "Le fer est la cathode : −0,44 − (−0,76) = 0,32 V."],
                    ['q' => "La réaction Cu + Zn²⁺ → Cu²⁺ + Zn est-elle spontanée dans les conditions standard ?", 'c' => ["Oui, son E° vaut +1,10 V", "Non, son E° vaut -1,10 V", "Oui, car elle est équilibrée", "Non, car il n’y a pas d’électrons"], 'a' => 1, 'e' => "C’est la réaction inverse de celle de la pile zinc-cuivre ; son E° est négatif, elle n’a pas lieu spontanément."],
                    ['q' => "Parmi Zn, Cu et Ag, quel métal est le meilleur réducteur ?", 'c' => ["Le zinc", "Le cuivre", "L’argent", "Les trois pareillement"], 'a' => 0, 'e' => "Le couple Zn²⁺/Zn a le potentiel le plus bas : le zinc cède le plus facilement ses électrons."],
                    ['q' => "Pile magnésium-cuivre : E°(Mg²⁺/Mg) = −2,37 V et E°(Cu²⁺/Cu) = +0,34 V. Que vaut E° ?", 'c' => ["2,03 V", "-2,71 V", "2,71 V", "1,10 V"], 'a' => 2, 'e' => "0,34 − (−2,37) = 2,71 V : le magnésium est un réducteur très puissant."],
                    ['q' => "Par convention, que vaut le potentiel standard de l’électrode standard à hydrogène ?", 'c' => ["+1,00 V", "0,00 V", "-1,00 V", "+0,34 V"], 'a' => 1, 'e' => "On choisit ce couple H⁺/H₂ comme origine : tous les autres potentiels sont mesurés par rapport à lui."],
                    ['q' => "Une pile associe Ni²⁺/Ni (−0,26 V) et Cu²⁺/Cu (+0,34 V). Quelle est sa tension standard ?", 'c' => ["0,08 V", "0,34 V", "-0,60 V", "0,60 V"], 'a' => 3, 'e' => "Le cuivre est la cathode : 0,34 − (−0,26) = 0,60 V."],
                ],
            ],
            [
                'title' => "Équations d’oxydoréduction et équilibrage simple",
                'description' => "Écrire des demi-équations et ajuster les électrons pour obtenir l’équation globale.",
                'questions' => [
                    ['q' => "Quelle demi-équation traduit l’oxydation du fer métallique en ion Fe²⁺ ?", 'c' => ["Fe + 2 e⁻ → Fe²⁺", "Fe²⁺ → Fe + 2 e⁻", "Fe → Fe²⁺ + 2 e⁻", "Fe + e⁻ → Fe⁺"], 'a' => 2, 'e' => "Les électrons sont produits : ils s’écrivent côté produits, et la charge est bien conservée (0 = +2 − 2)."],
                    ['q' => "Quelle demi-équation décrit la réduction de l’ion argent ?", 'c' => ["Ag⁺ + e⁻ → Ag", "Ag → Ag⁺ + e⁻", "Ag⁺ → Ag + e⁻", "Ag⁺ + 2 e⁻ → Ag"], 'a' => 0, 'e' => "Un seul électron suffit à ramener la charge +1 à 0."],
                    ['q' => "Quelle est l’équation globale de la pile zinc-cuivre ?", 'c' => ["Zn²⁺ + Cu → Zn + Cu²⁺", "Zn + Cu → Zn²⁺ + Cu²⁺", "Zn²⁺ + Cu²⁺ → Zn + Cu", "Zn + Cu²⁺ → Zn²⁺ + Cu"], 'a' => 3, 'e' => "On additionne les deux demi-équations ; les 2 électrons se retrouvent de chaque côté et s’éliminent."],
                    ['q' => "Al → Al³⁺ + 3 e⁻ et Cu²⁺ + 2 e⁻ → Cu. Quelle équation globale est correctement équilibrée ?", 'c' => ["Al + Cu²⁺ → Al³⁺ + Cu", "2 Al + 3 Cu²⁺ → 2 Al³⁺ + 3 Cu", "3 Al + 2 Cu²⁺ → 3 Al³⁺ + 2 Cu", "2 Al + 2 Cu²⁺ → 2 Al³⁺ + 2 Cu"], 'a' => 1, 'e' => "Il faut 6 électrons de chaque côté : 2 × 3 pour l’aluminium et 3 × 2 pour le cuivre. Vérifions la charge : +6 des deux côtés."],
                    ['q' => "Dans la demi-équation d’une réduction, où se placent les électrons ?", 'c' => ["Du côté des réactifs", "Du côté des produits", "Au-dessus de la flèche", "Nulle part"], 'a' => 0, 'e' => "La réduction est un gain : les électrons sont des réactifs de la demi-équation."],
                    ['q' => "MnO₄⁻ + 8 H⁺ + … e⁻ → Mn²⁺ + 4 H₂O. Combien d’électrons faut-il écrire ?", 'c' => ["3", "7", "5", "8"], 'a' => 2, 'e' => "Charge à gauche : −1 + 8 − n ; à droite : +2. L’égalité donne n = 5."],
                    ['q' => "Laquelle de ces demi-équations est correctement équilibrée en charge ?", 'c' => ["Fe³⁺ + 2 e⁻ → Fe²⁺", "Fe³⁺ + e⁻ → Fe²⁺", "Fe²⁺ → Fe³⁺ + 2 e⁻", "Fe²⁺ + e⁻ → Fe³⁺"], 'a' => 1, 'e' => "À gauche +3 − 1 = +2, à droite +2 : c’est bon. Les autres écritures créent ou perdent de la charge."],
                    ['q' => "Quelle demi-équation décrit la réduction du dichlore en ion chlorure ?", 'c' => ["Cl₂ + e⁻ → Cl⁻", "Cl₂ → 2 Cl⁻ + 2 e⁻", "2 Cl⁻ + 2 e⁻ → Cl₂", "Cl₂ + 2 e⁻ → 2 Cl⁻"], 'a' => 3, 'e' => "Deux atomes de chlore, deux charges négatives à droite : il faut donc 2 électrons à gauche."],
                    ['q' => "Une demi-réaction libère 3 électrons, l’autre en consomme 2. Avant de les additionner, on multiplie…", 'c' => ["la première par 3 et la seconde par 2", "uniquement la seconde par 3", "la première par 2, la seconde par 3", "aucune des deux"], 'a' => 2, 'e' => "Le plus petit multiple commun de 3 et 2 est 6 : 2 × 3 = 3 × 2 = 6 électrons de chaque côté."],
                    ['q' => "Dans Cu + 2 Ag⁺ → Cu²⁺ + 2 Ag, combien d’électrons sont échangés ?", 'c' => ["2", "1", "3", "4"], 'a' => 0, 'e' => "Un atome de cuivre libère 2 électrons, captés par les 2 ions Ag⁺ (un chacun)."],
                ],
            ],
            [
                'title' => "Électrolyse et cellules électrolytiques",
                'description' => "Distinguer l’électrolyse de la pile : polarité des électrodes, réactions et tension à imposer.",
                'questions' => [
                    ['q' => "En quoi consiste une électrolyse ?", 'c' => ["À laisser une réaction spontanée produire du courant dans un circuit", "À évaporer un solvant avec un courant", "À faire fondre une électrode au contact de l’eau", "À forcer une réaction non spontanée avec un générateur"], 'a' => 3, 'e' => "Contrairement à la pile, le générateur apporte l’énergie qui force la réaction à se produire."],
                    ['q' => "Dans un électrolyseur, l’électrode reliée à la borne positive du générateur est le siège de…", 'c' => ["la réduction", "l’oxydation", "la neutralisation", "l’évaporation"], 'a' => 1, 'e' => "L’anode est branchée au + : elle attire les électrons des espèces qui s’oxydent à son contact."],
                    ['q' => "Dans un électrolyseur, vers quelle électrode le générateur envoie-t-il les électrons ?", 'c' => ["Vers la cathode", "Vers l’anode", "Vers le pont salin", "Vers les deux en même temps"], 'a' => 0, 'e' => "Le générateur pompe les électrons de l’anode et les pousse vers la cathode, où ils réduisent des espèces."],
                    ['q' => "Quelle affirmation compare correctement pile et électrolyse ?", 'c' => ["La pile en consomme, l’électrolyse en fournit au circuit", "Les deux fournissent de l’énergie électrique au circuit", "La pile fournit de l’énergie, l’électrolyse en consomme", "Aucune des deux ne met en jeu d’électrons"], 'a' => 2, 'e' => "Pile : réaction spontanée qui débite. Électrolyse : réaction forcée par un générateur."],
                    ['q' => "Quelle demi-équation décrit le dépôt de cuivre à la cathode d’une électrolyse ?", 'c' => ["Cu → Cu²⁺ + 2 e⁻", "Cu²⁺ + 2 e⁻ → Cu", "Cu²⁺ → Cu + 2 e⁻", "Cu + 2 e⁻ → Cu²⁺"], 'a' => 1, 'e' => "Un dépôt métallique est une réduction : l’ion gagne des électrons, qui sont donc à gauche."],
                    ['q' => "On électrolyse une solution concentrée de chlorure de cuivre(II) avec des électrodes de graphite. Que se forme-t-il à l’anode ?", 'c' => ["Du cuivre métallique", "Du dihydrogène gazeux", "Des ions chlorure supplémentaires", "Du dichlore gazeux"], 'a' => 3, 'e' => "Les ions Cl⁻ s’oxydent : 2 Cl⁻ → Cl₂ + 2 e⁻. Le cuivre, lui, se dépose à la cathode."],
                    ['q' => "La pile zinc-cuivre a une tension standard de 1,10 V. Pour la faire fonctionner en sens inverse par électrolyse, la tension imposée doit être au moins…", 'c' => ["0,34 V", "0,76 V", "1,10 V", "environ 2,2 V"], 'a' => 2, 'e' => "Il faut compenser la tension qu’elle produirait spontanément pour inverser la réaction."],
                    ['q' => "Un métal se dépose sur l’électrode reliée à la borne négative. Quelle transformation a eu lieu ?", 'c' => ["Une réduction de cations", "L’oxydation d’ions métalliques", "La fusion du métal", "La combustion de l’électrode"], 'a' => 0, 'e' => "La borne - est la cathode ; les cations y reçoivent des électrons et forment un dépôt solide."],
                    ['q' => "Lors de l’électrolyse de l’eau, quel gaz se dégage à la cathode ?", 'c' => ["Le dioxygène, O₂", "Le diazote", "L’ozone", "Le dihydrogène"], 'a' => 3, 'e' => "La cathode est le lieu de la réduction : H⁺ (ou H₂O) y gagne des électrons pour donner H₂, en volume double de celui de O₂."],
                    ['q' => "Un élève affirme que, dans l’électrolyseur, la réduction a lieu à l’électrode positive. Où est son erreur ?", 'c' => ["La réduction se fait à l’anode, reliée au -", "Elle a lieu à la cathode, reliée au -", "La réduction n’existe pas en électrolyse", "L’électrode positive est aussi une cathode"], 'a' => 1, 'e' => "Quelle que soit la cellule, la réduction a lieu à la cathode ; en électrolyse celle-ci est branchée à la borne négative."],
                ],
            ],
            [
                'title' => "Applications de l’électrochimie",
                'description' => "Relier l’électrochimie à la rouille, aux batteries, à l’électrodéposition et aux piles du quotidien.",
                'questions' => [
                    ['q' => "La rouille se forme quand le fer…", 'c' => ["est oxydé par O₂ en présence d’eau", "est réduit par l’eau seule", "fond au contact de l’air", "réagit avec le diazote, très abondant dans l’air"], 'a' => 0, 'e' => "Le fer perd des électrons (ions Fe²⁺ puis Fe³⁺) que capte le dioxygène dissous."],
                    ['q' => "Pourquoi une couche de peinture ralentit-elle la corrosion d’une pièce d’acier ?", 'c' => ["Elle apporte des électrons au fer", "Elle transforme le fer en métal inoxydable", "Elle isole le métal de l’eau et de l’air", "Elle chauffe la surface du métal"], 'a' => 2, 'e' => "Sans contact avec l’eau et l’air, la réaction d’oxydation ne peut pas démarrer, tant que la peinture n’est pas rayée."],
                    ['q' => "Un bloc de zinc est fixé sur la coque en acier d’un navire. Pourquoi protège-t-il l’acier ?", 'c' => ["Le zinc est plus lourd et recouvre le fer d’une couche étanche", "Plus réducteur, le zinc s’oxyde à la place du fer", "Le zinc est meilleur oxydant et attire les électrons du fer", "Le zinc ne conduit pas l’électricité"], 'a' => 1, 'e' => "E°(Zn²⁺/Zn) < E°(Fe²⁺/Fe) : le zinc joue le rôle d’anode sacrificielle et se consume en premier."],
                    ['q' => "On fixe un bloc de cuivre, et non de zinc, sur une coque en acier. Que se passe-t-il ?", 'c' => ["Le cuivre s’oxyde à la place du fer", "Le cuivre protège le fer aussi bien que le zinc", "Rien ne change du tout", "Le fer s’oxyde plus vite"], 'a' => 3, 'e' => "Le cuivre est moins réducteur que le fer : c’est le fer qui devient l’anode, et il se corrode encore davantage."],
                    ['q' => "Quand on recharge un accumulateur, quelle conversion d’énergie a lieu ?", 'c' => ["Électrique en chimique", "Chimique en électrique", "Chimique en thermique uniquement", "Nucléaire en électrique"], 'a' => 0, 'e' => "Le chargeur impose les réactions inverses de celles de la décharge et reconstitue les réactifs."],
                    ['q' => "Qu’est-ce qui distingue un accumulateur d’une pile jetable ?", 'c' => ["Il n’a pas besoin d’électrolyte pour conduire", "Il ne fait pas intervenir d’électrons", "Un chargeur peut inverser ses réactions", "Il produit uniquement de la chaleur"], 'a' => 2, 'e' => "Ses transformations sont suffisamment réversibles pour qu’on puisse le recharger."],
                    ['q' => "Pour argenter une cuillère par électrolyse, on la relie…", 'c' => ["à la borne positive du générateur de courant", "au pont salin", "à l’anode d’une pile quelconque", "à la borne négative du générateur"], 'a' => 3, 'e' => "La cuillère doit être cathode : Ag⁺ + e⁻ → Ag s’y produit et forme la couche d’argent."],
                    ['q' => "Que rejette une pile à combustible alimentée en dihydrogène et en dioxygène ?", 'c' => ["Du dioxyde de carbone", "De l’eau", "Du monoxyde d’azote", "Du méthane"], 'a' => 1, 'e' => "Le bilan est 2 H₂ + O₂ → 2 H₂O : c’est ce qui en fait un système peu polluant à l’usage."],
                    ['q' => "Pour protéger une canalisation d’acier enterrée par courant imposé, on la relie…", 'c' => ["à la borne négative d’un générateur", "à la borne positive d’un générateur continu", "à un bloc de cuivre", "à un morceau de fer neuf"], 'a' => 0, 'e' => "Ainsi la canalisation devient cathode : elle reçoit des électrons au lieu d’en perdre, donc elle ne s’oxyde pas."],
                    ['q' => "Quel métal constitue l’électrode négative d’une pile alcaline usuelle ?", 'c' => ["Le cuivre", "L’argent", "Le zinc", "Le fer"], 'a' => 2, 'e' => "Le zinc est oxydé à l’anode, tandis que le dioxyde de manganèse est réduit à la cathode."],
                ],
            ],
            [
                'title' => "Électrochimie et calculs simples",
                'description' => "Utiliser Q = n·F et Q = I·t pour relier courant, durée, électrons échangés et masse.",
                'questions' => [
                    ['q' => "Selon Cu²⁺ + 2 e⁻ → Cu, combien de moles d’électrons faut-il pour réduire 3 mol de Cu²⁺ ?", 'c' => ["3 mol", "6 mol", "1,5 mol", "9 mol"], 'a' => 1, 'e' => "Chaque ion consomme 2 électrons : 3 × 2 = 6 mol d’électrons."],
                    ['q' => "Une cellule échange 0,50 mol d’électrons. Avec F = 96 500 C/mol, quelle charge a circulé ?", 'c' => ["24 125 C", "96 500 C", "193 000 C", "48 250 C"], 'a' => 3, 'e' => "Q = n × F = 0,50 × 96 500 = 48 250 C."],
                    ['q' => "Une charge de 482 500 C traverse une cellule. Combien de moles d’électrons cela représente-t-il (F = 96 500 C/mol) ?", 'c' => ["0,50 mol", "2,0 mol", "5,0 mol", "50 mol"], 'a' => 2, 'e' => "n = Q / F = 482 500 / 96 500 = 5,0 mol."],
                    ['q' => "Un courant de 2,0 A circule pendant 10 min. Quelle charge a traversé le circuit ?", 'c' => ["1 200 C", "20 C", "120 C", "12 000 C"], 'a' => 0, 'e' => "Il faut convertir la durée en secondes : 10 min = 600 s, donc Q = 2,0 × 600 = 1 200 C."],
                    ['q' => "Une électrolyse consomme 9 650 C. Quelle quantité d’électrons cela représente-t-il (F = 96 500 C/mol) ?", 'c' => ["0,010 mol", "1,0 mol", "10 mol", "0,10 mol"], 'a' => 3, 'e' => "n = 9 650 / 96 500 = 0,100 mol."],
                    ['q' => "0,20 mol d’électrons réduit des ions Cu²⁺ à la cathode. Quelle masse de cuivre se dépose (M = 63,5 g/mol) ?", 'c' => ["3,18 g", "6,35 g", "12,7 g", "0,635 g"], 'a' => 1, 'e' => "Deux électrons par atome de cuivre : n(Cu) = 0,10 mol, donc m = 0,10 × 63,5 = 6,35 g."],
                    ['q' => "Ag⁺ + e⁻ → Ag. Quelle masse d’argent se forme avec 0,10 mol d’électrons (M = 108 g/mol) ?", 'c' => ["10,8 g", "5,4 g", "21,6 g", "0,108 g"], 'a' => 0, 'e' => "Un électron par atome : n(Ag) = 0,10 mol, soit 0,10 × 108 = 10,8 g."],
                    ['q' => "Avec une intensité de 2,0 A, combien de temps faut-il pour faire passer 3 000 C ?", 'c' => ["750 s", "1 000 s", "1 500 s", "15 000 s"], 'a' => 2, 'e' => "t = Q / I = 3 000 / 2,0 = 1 500 s, soit 25 min."],
                    ['q' => "Un courant de 5,0 A passe pendant 1 930 s dans une cellule où Cu²⁺ + 2 e⁻ → Cu (M = 63,5 g/mol). Quelle masse de cuivre se dépose ?", 'c' => ["1,6 g", "6,4 g", "12,7 g", "3,2 g"], 'a' => 3, 'e' => "Q = 5,0 × 1 930 = 9 650 C, soit 0,100 mol d’électrons. Il se dépose donc 0,050 mol de Cu, soit environ 3,2 g."],
                    ['q' => "Une pile zinc-cuivre débite 0,50 A pendant 3 860 s. Quelle masse de zinc a été oxydée (M = 65,4 g/mol) ?", 'c' => ["0,65 g", "1,31 g", "0,33 g", "0,065 g"], 'a' => 0, 'e' => "Q = 0,50 × 3 860 = 1 930 C, soit 0,0200 mol d’électrons. Zn → Zn²⁺ + 2 e⁻ donne 0,0100 mol de zinc, soit 0,65 g."],
                ],
            ],
            [
                'title' => "Révision intégrée d’électrochimie",
                'description' => "Mobiliser pile, électrolyse, nombres d’oxydation et calculs de charge dans des situations variées.",
                'questions' => [
                    ['q' => "On associe Cu²⁺/Cu (+0,34 V) et Ag⁺/Ag (+0,80 V) dans une pile. Quelle est la réaction spontanée ?", 'c' => ["Cu²⁺ + 2 Ag → Cu + 2 Ag⁺", "2 Cu + Ag⁺ → 2 Cu²⁺ + Ag", "Cu + 2 Ag⁺ → Cu²⁺ + 2 Ag", "Cu²⁺ + Ag → Cu + Ag⁺"], 'a' => 2, 'e' => "Le couple de potentiel le plus haut (Ag⁺/Ag) est réduit ; le cuivre est donc oxydé. Les 2 électrons du cuivre sont captés par 2 Ag⁺."],
                    ['q' => "Quelle est la tension standard de cette pile cuivre-argent ?", 'c' => ["0,46 V", "1,14 V", "0,80 V", "-0,46 V"], 'a' => 0, 'e' => "E° = E°(cathode) − E°(anode) = 0,80 − 0,34 = 0,46 V."],
                    ['q' => "Dans cette pile cuivre-argent, quelle électrode est la borne négative ?", 'c' => ["L’électrode d’argent", "Le pont salin", "Les deux électrodes en même temps", "L’électrode de cuivre"], 'a' => 3, 'e' => "Le cuivre est oxydé : il envoie les électrons dans le fil, c’est donc l’anode, pôle négatif."],
                    ['q' => "On électrolyse du sulfate de cuivre(II) avec deux électrodes de cuivre. Que devient celle reliée à la borne positive ?", 'c' => ["Elle se recouvre de cuivre", "Elle se dissout", "Elle dégage du dihydrogène", "Elle reste inchangée"], 'a' => 1, 'e' => "C’est l’anode : le cuivre métallique s’oxyde en Cu²⁺ (Cu → Cu²⁺ + 2 e⁻), ce qui l’use peu à peu."],
                    ['q' => "Quelle charge faut-il faire passer pour déposer 1 mol de cuivre à partir de Cu²⁺ (F = 96 500 C/mol) ?", 'c' => ["96 500 C", "48 250 C", "193 000 C", "3,86 × 10⁵ C"], 'a' => 2, 'e' => "Il faut 2 mol d’électrons pour 1 mol de Cu : Q = 2 × 96 500 = 193 000 C."],
                    ['q' => "Laquelle de ces affirmations sur la polarité des électrodes est exacte ?", 'c' => ["En pile l’anode est négative, en électrolyse positive", "L’anode est positive dans une pile et négative dans une électrolyse", "L’anode est négative dans les deux cas, quel que soit le dispositif", "L’anode est positive dans les deux cas"], 'a' => 0, 'e' => "Le rôle (oxydation) ne change pas, mais le signe dépend de la cellule : en pile l’anode fournit des électrons, en électrolyse elle est reliée au + du générateur."],
                    ['q' => "Dans Zn + 2 H⁺ → Zn²⁺ + H₂, quelle espèce joue le rôle d’oxydant ?", 'c' => ["Zn", "H⁺", "Zn²⁺", "H₂"], 'a' => 1, 'e' => "Son nombre d’oxydation baisse de +1 à 0 : il capte des électrons, ce qui est le propre d’un oxydant."],
                    ['q' => "Dans 4 Fe + 3 O₂ → 2 Fe₂O₃, combien d’électrons sont transférés au total ?", 'c' => ["4 (un par Fe)", "6", "8", "12"], 'a' => 3, 'e' => "Chaque Fe passe de 0 à +3, soit 3 électrons ; pour 4 atomes, 4 × 3 = 12. Le dioxygène en reçoit bien 3 × 4 = 12."],
                    ['q' => "Pour une anode sacrificielle protégeant du fer (E°(Fe²⁺/Fe) = −0,44 V), quel métal convient ?", 'c' => ["Le plomb (−0,13 V)", "Le cuivre (+0,34 V)", "Le zinc (−0,76 V)", "L’argent (+0,80 V)"], 'a' => 2, 'e' => "Il faut un métal plus réducteur que le fer, donc de potentiel plus bas : seul le zinc répond au critère."],
                    ['q' => "Une pile débite 0,10 A pendant 1 h. Quelle quantité d’électrons a circulé (F = 96 500 C/mol) ?", 'c' => ["0,062 mmol", "3,7 mmol", "100 mmol", "370 mmol"], 'a' => 1, 'e' => "1 h = 3 600 s donc Q = 0,10 × 3 600 = 360 C, puis n = 360 / 96 500 ≈ 3,7 × 10⁻³ mol, soit 3,7 mmol."],
                ],
            ],
        ];

        foreach ($quizzes as $position => $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings[$position]['duration'],
                    'passing_score' => $settings[$position]['passing_score'],
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Beginner',
                ]
            );

            foreach ($quizData['questions'] as $qIndex => $item) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'order' => $qIndex + 1,
                    ],
                    [
                        'question' => $item['q'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $item['e'],
                    ]
                );

                foreach ($item['c'] as $cIndex => $text) {
                    Choice::updateOrCreate(
                        [
                            'question_id' => $question->id,
                            'order' => $cIndex + 1,
                        ],
                        [
                            'choice_text' => $text,
                            'is_correct' => $cIndex === $item['a'],
                        ]
                    );
                }

                $question->choices()->where('order', '>', count($item['c']))->delete();
            }
        }
    }
}
