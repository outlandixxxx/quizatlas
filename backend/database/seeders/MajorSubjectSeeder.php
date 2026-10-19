<?php

namespace Database\Seeders;

use App\Models\Major;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MajorSubjectSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Active Majors
        |--------------------------------------------------------------------------
        |
        | Web Development and Networking are subjects inside
        | Computer Science & IT, not separate top-level majors.
        |
        */

        $curriculum = [

            /*
            |--------------------------------------------------------------------------
            | 1. Computer Science & IT
            |--------------------------------------------------------------------------
            */

            'Computer Science & IT' => [ //done all of them but only beginners validated
                'icon' => 'computer',
                'description' => 'Computer science, information technology, software, infrastructure, security, data and digital systems.',
                'subjects' => [
                    'Computer Fundamentals',
                    'Bureautique',
                    'Programming',
                    'Algorithms & Data Structures',
                    'Databases & SQL',
                    'Web Development',
                    'Mobile Development',
                    'Software Engineering',
                    'Computer Networks',
                    'Operating Systems',
                    'Cybersecurity',
                    'Cloud Computing',
                    'Artificial Intelligence',
                    'Data Science',
                    'System Administration',
                    'DevOps',
                    'IT Architecture',
                ],
            ],
            /*
            |--------------------------------------------------------------------------
            | 2. Finance
            |--------------------------------------------------------------------------
            */

            'Finance' => [//beginner for all of them
                'icon' => 'payments',
                'description' => 'Financial principles, accounting, investments, banking, markets, risk, valuation and financial strategy.',
                'subjects' => [ 
                    'Financial Fundamentals',//done
                    'Financial Accounting',//done
                    'Management Accounting',//done
                    'Corporate Finance', //done
                    'Financial Mathematics',//done
                    'Financial Markets',//done
                    'Investment Analysis',//done
                    'Portfolio Management',//done
                    'Financial Statement Analysis',//done
                    'Financial Risk Management', //done
                    'Banking',
                    'Central Banking & Monetary Finance',
                    'International Finance',
                    'Foreign Exchange',
                    'Fixed Income',
                    'Derivatives',
                    'Financial Modeling',
                    'Business Valuation',
                    'Mergers & Acquisitions',
                    'Treasury Management',
                    'Personal Finance',
                    'Wealth Management',
                    'Insurance & Risk',
                    'FinTech',
                    'Financial Economics',
                    'Sustainable Finance',
                    'Behavioral Finance',
                    'Islamic Finance',
                    'Financial Regulation & Compliance',
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 3. Economy
            |--------------------------------------------------------------------------
            */

            'Economy' => [
                'icon' => 'trending_up',
                'description' => 'Economic theory, markets, policy, macroeconomics, microeconomics, development and applied economics.',
                'subjects' => [
                    'Economics Fundamentals', //done
                    'Microeconomics',//done
                    'Macroeconomics',//done
                    'Economic Mathematics',//done
                    'Economic Statistics',//done
                    'Econometrics',//done
                    'International Economics', //done
                    'Monetary Economics',//done
                    'Fiscal Economics',//done
                    'Public Economics',//done 
                    'Development Economics',
                    'Labor Economics',
                    'Environmental Economics',
                    'Agricultural Economics',
                    'Industrial Economics',
                    'Managerial Economics',
                    'Financial Economics',
                    'Behavioral Economics',
                    'Political Economy',
                    'Economic Growth',
                    'Economic Policy',
                    'Economic History',
                    'International Trade',//done eco 1
                    'Regional Economics',//done eco 1
                    'Urban Economics',//done eco 1
                    'Health Economics',//done eco 1
                    'Economics of Innovation',//done eco 1
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 4. Mathematics
            |--------------------------------------------------------------------------
            */

            'Mathematics' => [// beginner for all of them
                'icon' => 'calculate',
                'description' => 'Pure and applied mathematics, algebra, calculus, geometry, probability, statistics and mathematical modeling.',
                'subjects' => [ 
                    'Mathematical Fundamentals',//done
                    'Arithmetic',//done
                    'Algebra',//done
                    'Geometry',//done
                    'Trigonometry',//done
                    'Analytical Geometry', //done
                    'Functions',//done
                    'Sequences & Series',//done
                    'Differential Calculus',//done until here
                    'Integral Calculus',
                    'Multivariable Calculus',
                    'Linear Algebra',
                    'Differential Equations',
                    'Probability',
                    'Statistics',
                    'Discrete Mathematics',
                    'Number Theory',
                    'Set Theory',
                    'Logic',
                    'Combinatorics',
                    'Graph Theory',
                    'Numerical Mathematics',
                    'Optimization',
                    'Real Analysis',
                    'Complex Analysis',
                    'Abstract Algebra',
                    'Topology',
                    'Mathematical Modeling',
                    'Applied Mathematics',
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 5. Physics
            |--------------------------------------------------------------------------
            */

            'Physics' => [//done all beginners ones
                'icon' => 'science',
                'description' => 'Physics from fundamental mechanics and thermodynamics to electromagnetism, quantum physics and astrophysics.',
                'subjects' => [
                    'Physics Fundamentals',//done 4 levels
                    'Measurement & Units',//done 4 levels
                    'Classical Mechanics',//done 4 levels
                    'Kinematics', //done until here 4 levels
                    'Dynamics', //done 4 levels
                    'Work, Energy & Power',//done 4 levels
                    'Gravitation',//done 4 levels
                    'Fluid Mechanics',//done beginner
                    'Thermodynamics', //done 4 levels
                    'Statistical Physics',//done beginner
                    'Waves & Oscillations',//done beginner
                    'Acoustics',//done beginner
                    'Electromagnetism', //done 4 levels
                    'Electric Circuits',//done beginner
                    'Waves & Optics', // done 4 levels
                    'Modern Physics',//done beginner
                    'Special Relativity',//done beginner
                    'Quantum Physics',//done beginner
                    'Atomic Physics',//done beginner
                    'Nuclear Physics',//done beginner
                    'Solid State Physics',//done beginner
                    'Plasma Physics',//done beginner
                    'Astrophysics',//done beginner
                    'Electronics & Instrumentation',//done beginner
                    'Computational Physics',//done beginner
                    'Mathematical Physics',//done beginner
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 6. Chemistry
            |--------------------------------------------------------------------------
            */

            'Chemistry' => [ //done all beginners ones
                'icon' => 'science',
                'description' => 'General, organic, inorganic, physical, analytical and applied chemistry.',
                'subjects' => [
                    'Chemistry Fundamentals',
                    'Atomic Structure',
                    'Periodic Table',
                    'Chemical Bonding',
                    'Stoichiometry',
                    'States of Matter',
                    'Thermochemistry',
                    'Chemical Equilibrium',
                    'Acids & Bases',
                    'Electrochemistry',
                    'Reaction Kinetics',
                    'Inorganic Chemistry',
                    'Organic Chemistry',
                    'Analytical Chemistry',
                    'Physical Chemistry',
                    'Biochemistry',
                    'Environmental Chemistry',
                    'Industrial Chemistry',
                    'Polymer Chemistry',
                    'Materials Chemistry',
                    'Medicinal Chemistry',
                    'Nuclear Chemistry',
                    'Spectroscopy',
                    'Chromatography',
                    'Laboratory Techniques', 
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 7. SVT
            |--------------------------------------------------------------------------
            */

            'SVT' => [//done all beginners ones
                'icon' => 'biotech',
                'description' => 'Life and earth sciences covering biology, ecology, genetics, geology, climate and natural systems.',
                'subjects' => [
                    'SVT Fundamentals', //done
                    'Cell Biology', //done
                    'Molecular Biology',//done
                    'Genetics',//done
                    'Microbiology',//done
                    'Botany',//done
                    'Zoology',//done
                    'Human Biology',//done
                    'Human Anatomy', //done
                    'Human Physiology', //done
                    'Immunology',
                    'Ecology',
                    'Biodiversity',
                    'Evolution',
                    'Environmental Biology',
                    'Biochemistry',
                    'Biotechnology',
                    'Geology Fundamentals',
                    'Mineralogy',
                    'Petrology',
                    'Geophysics',
                    'Plate Tectonics',
                    'Earth History',
                    'Paleontology',
                    'Hydrology',
                    'Climatology',
                    'Soil Science',
                    'Oceanography',
                    'Natural Hazards',
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 8. Arabic
            |--------------------------------------------------------------------------
            */

            'Arabic' => [
                'icon' => 'language',
                'description' => 'Arabic language, grammar, morphology, reading, writing, rhetoric, literature and translation.',
                'subjects' => [
                    'Arabic Fundamentals',
                    'Arabic Alphabet & Writing',
                    'Reading Arabic',
                    'Arabic Vocabulary',
                    'Arabic Grammar',
                    'Arabic Morphology',
                    'Sentence Structure',
                    'Verbs & Conjugation',
                    'Spelling & Orthography',
                    'Punctuation',
                    'Reading Comprehension',
                    'Writing Skills',
                    'Essay Writing',
                    'Arabic Literature',
                    'Classical Arabic',
                    'Modern Standard Arabic',
                    'Arabic Rhetoric',
                    'Poetry',
                    'Prose',
                    'Literary Analysis',
                    'Translation Arabic ↔ French',
                    'Translation Arabic ↔ English',
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 9. French
            |--------------------------------------------------------------------------
            */

            'French' => [ //done beginner for all of them
                'icon' => 'translate',
                'description' => 'French language, grammar, vocabulary, communication, literature, academic and professional French.',
                'subjects' => [
                    'French Fundamentals',
                    'French Alphabet & Pronunciation',
                    'French Vocabulary',
                    'French Grammar',
                    'Articles & Determiners',
                    'Nouns & Adjectives',
                    'Pronouns',
                    'Verbs & Conjugation',
                    'Tenses & Moods',
                    'Sentence Structure',
                    'Prepositions',
                    'Adverbs',
                    'Negation & Questions',
                    'Reading Comprehension',
                    'Listening Comprehension',
                    'Writing',
                    'Speaking',
                    'Essay Writing',
                    'Academic French',
                    'Professional French',
                    'French Literature',
                    'Literary Analysis',
                    'Translation',
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 10. English
            |--------------------------------------------------------------------------
            */

            'English' => [ //done beginner for all of them
                'icon' => 'language',
                'description' => 'English language, grammar, vocabulary, communication, academic English, business English and literature.',
                'subjects' => [
                    'English Fundamentals',
                    'English Alphabet & Pronunciation',
                    'English Vocabulary',
                    'English Grammar',
                    'Parts of Speech',
                    'Nouns & Pronouns',
                    'Adjectives & Adverbs',
                    'Verbs',
                    'Verb Tenses',
                    'Modal Verbs',
                    'Conditionals',
                    'Passive Voice',
                    'Reported Speech',
                    'Phrasal Verbs',
                    'Idioms & Expressions',
                    'Reading Comprehension',
                    'Listening',
                    'Speaking',
                    'Writing',
                    'Essay Writing',
                    'Academic English',
                    'Business English',
                    'English Literature',
                    'Literary Analysis',
                    'Translation',
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 11. Spanish
            |--------------------------------------------------------------------------
            */

            'Spanish' => [
                'icon' => 'language',
                'description' => 'Spanish language, grammar, vocabulary, communication, academic and professional Spanish and literature.',
                'subjects' => [
                    'Spanish Fundamentals',
                    'Spanish Alphabet & Pronunciation',
                    'Spanish Vocabulary',
                    'Spanish Grammar',
                    'Nouns & Gender',
                    'Articles',
                    'Adjectives',
                    'Pronouns',
                    'Verbs & Conjugation',
                    'Present Tense',
                    'Past Tenses',
                    'Future & Conditional',
                    'Subjunctive',
                    'Reflexive Verbs',
                    'Prepositions',
                    'Sentence Structure',
                    'Reading Comprehension',
                    'Listening',
                    'Speaking',
                    'Writing',
                    'Essay Writing',
                    'Business Spanish',
                    'Academic Spanish',
                    'Spanish Literature',
                    'Literary Analysis',
                    'Translation',
                ],
            ],
        ];

        /*
        |--------------------------------------------------------------------------
        | Generate majors and subjects
        |--------------------------------------------------------------------------
        */

        foreach ($curriculum as $majorName => $majorData) {

            $majorSlug = Str::slug($majorName);

            $major = Major::updateOrCreate(
                [
                    'slug' => $majorSlug,
                ],
                [
                    'name' => $majorName,
                    'icon' => $majorData['icon'],
                    'description' => $majorData['description'],
                    'is_active' => true,
                ]
            );

            foreach ($majorData['subjects'] as $index => $subjectName) {

                $subjectSlug = Str::slug($subjectName);

                $subjectCode = strtoupper(
                    Str::of($subjectName)
                        ->replace(['&', '↔', '-', '—'], ' ')
                        ->squish()
                        ->explode(' ')
                        ->filter()
                        ->map(fn ($word) => Str::substr($word, 0, 1))
                        ->implode('')
                );

                /*
                 * Prevent empty codes and keep them useful.
                 */
                if (empty($subjectCode)) {
                    $subjectCode = 'SUB';
                }

                /*
                 * Make the code unique enough inside the major.
                 */
                $subjectCode = $subjectCode . '-' . str_pad(
                    (string) ($index + 1),
                    2,
                    '0',
                    STR_PAD_LEFT
                );

Subject::updateOrCreate(
    [
        'major_id' => $major->id,
        'slug' => $subjectSlug,
    ],
    [
        'year' => 'N/A',
        'code' => $subjectCode,
        'name' => $subjectName,
        'description' => "{$subjectName} subject within the {$majorName} major.",
        'is_active' => true,
    ]
);
            }
        }
    }
}
