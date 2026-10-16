<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

/**
 * OPTIONNEL : à lancer UNE SEULE FOIS, après avoir passé les nouveaux seeders de chimie.
 * Supprime les anciens quiz (titres abandonnés lors de la réécriture) qui resteraient en base.
 * Attention : supprime aussi leurs questions et choix. Faites une sauvegarde de la base avant.
 */
class RemoveObsoleteChemistryQuizzesSeeder extends Seeder
{
    public function run(): void
    {
        $obsolete = [
        'industrial-chemistry' => [
            "Matières premières et bilans simples",
            "Pétrole, raffinage et pétrochimie",
            "Sécurité et maîtrise des risques",
            "Environnement, déchets et chimie plus durable",
            "Contrôle qualité et conduite du procédé",
        ],
        'inorganic-chemistry' => [
            "Métaux alcalins et alcalino-terreux",
            "Halogènes et gaz nobles",
            "Métaux de transition",
            "Chimie inorganique au laboratoire et dans la vie courante",
            "Révision intégrée de chimie inorganique",
        ],
        'laboratory-techniques' => [
            "Qualité des mesures et pratique expérimentale",
            "Révision pratique des techniques de laboratoire",
        ],
        'materials-chemistry' => [
            "Matériaux pour l’énergie et les hautes températures",
        ],
        'medicinal-chemistry' => [
            "Groupes fonctionnels des molécules médicinales",
            "Absorption et distribution des médicaments",
            "Structure et activité biologique",
            "Formulation, dose et stabilité",
            "Sécurité, toxicité et sélectivité",
        ],
        'nuclear-chemistry' => [
            "Radioactivité naturelle et artificielle",
            "Sûreté, protection et gestion des sources",
            "Révision générale de chimie nucléaire",
        ],
        'organic-chemistry' => [
            "Alcanes et formules moléculaires",
            "Aldéhydes, cétones et acides carboxyliques",
            "Amines, amides et molécules azotées",
            "Isomérie et représentations des molécules",
            "Nomenclature organique essentielle",
            "Applications et révision de chimie organique",
        ],
        'periodic-table' => [
            "Les métaux alcalins et alcalino-terreux",
            "Halogènes et gaz nobles",
            "Trouver les éléments et leurs symboles",
            "Révision générale du tableau périodique",
        ],
        'physical-chemistry' => [
            "Enthalpie et transformations thermiques",
            "Changements d’état et diagrammes de phase",
            "Équilibre chimique et constante d’équilibre",
            "Propriétés des solutions et effets colligatifs",
            "Électricité, ions et électrochimie physique",
        ],
        'polymer-chemistry' => [
            "Structure des chaînes et propriétés",
            "Additifs et formulation des polymères",
            "Dégradation et vieillissement des polymères",
            "Recyclage et durabilité des polymères",
            "Polymères dans les procédés industriels",
            "Révision intégrée de la chimie des polymères",
        ],
        'reaction-kinetics' => [
            "Facteurs combinés et raisonnement cinétique",
            "Révision générale de cinétique chimique",
        ],
        'spectroscopy' => [
            "Spectroscopie Raman : premières notions",
            "Fluorescence et phosphorescence",
            "Applications pratiques de la spectroscopie",
            "Révision générale de spectroscopie",
        ],
        'states-of-matter' => [
            "Évaporation et ébullition",
            "Diffusion et mouvement des particules",
            "Diagrammes et lecture des états de la matière",
            "Révision générale des états de la matière",
        ],
        'stoichiometry' => [
            "Rendement, excès et pertes",
            "Révision générale de stœchiométrie",
        ],
        'thermochemistry' => [
            "Énergie des liaisons et réactions chimiques",
            "Applications de la thermochimie",
            "Révision générale de thermochimie",
        ],
        ];

        foreach ($obsolete as $slug => $titles) {
            $subject = Subject::where('slug', $slug)->first();

            if (! $subject) {
                continue;
            }

            foreach (Quiz::where('subject_id', $subject->id)->whereIn('title', $titles)->get() as $quiz) {
                foreach (Question::where('quiz_id', $quiz->id)->get() as $question) {
                    $question->choices()->delete();
                    $question->delete();
                }

                $quiz->delete();
            }
        }
    }
}
