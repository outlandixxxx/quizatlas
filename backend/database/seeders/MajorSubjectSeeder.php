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

            'Computer Science & IT' => [
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

            'Finance' => [
                'icon' => 'payments',
                'description' => 'Financial principles, accounting, investments, banking, markets, risk, valuation and financial strategy.',
                'subjects' => [
                    'Financial Fundamentals',
                    'Financial Accounting',
                    'Management Accounting',
                    'Corporate Finance',
                    'Financial Mathematics',
                    'Financial Markets',
                    'Investment Analysis',
                    'Portfolio Management',
                    'Financial Statement Analysis',
                    'Financial Risk Management', // Done until here 
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
                    'Economics Fundamentals',
                    'Microeconomics',
                    'Macroeconomics',
                    'Economic Mathematics',
                    'Economic Statistics',
                    'Econometrics',
                    'International Economics', 
                    'Monetary Economics',
                    'Fiscal Economics',
                    'Public Economics',//done until here
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
                    'International Trade',
                    'Regional Economics',
                    'Urban Economics',
                    'Health Economics',
                    'Economics of Innovation',
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 4. Mathematics
            |--------------------------------------------------------------------------
            */

            'Mathematics' => [
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

            'Physics' => [
                'icon' => 'science',
                'description' => 'Physics from fundamental mechanics and thermodynamics to electromagnetism, quantum physics and astrophysics.',
                'subjects' => [
                    'Physics Fundamentals',//done
                    'Measurement & Units',//done
                    'Classical Mechanics',//done
                    'Kinematics', //done until here
                    'Dynamics', //done
                    'Work, Energy & Power',//done
                    'Gravitation',//done
                    'Fluid Mechanics',
                    'Thermodynamics', //done
                    'Statistical Physics',
                    'Waves & Oscillations',
                    'Acoustics',
                    'Electromagnetism', //done
                    'Electric Circuits',
                    'Waves & Optics', // done
                    'Modern Physics',
                    'Special Relativity',
                    'Quantum Physics',
                    'Atomic Physics',
                    'Nuclear Physics',
                    'Solid State Physics',
                    'Plasma Physics',
                    'Astrophysics',
                    'Electronics & Instrumentation',
                    'Computational Physics',
                    'Mathematical Physics',
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | 6. Chemistry
            |--------------------------------------------------------------------------
            */

            'Chemistry' => [
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

            'SVT' => [
                'icon' => 'biotech',
                'description' => 'Life and earth sciences covering biology, ecology, genetics, geology, climate and natural systems.',
                'subjects' => [
                    'SVT Fundamentals',
                    'Cell Biology',
                    'Molecular Biology',
                    'Genetics',
                    'Microbiology',
                    'Botany',
                    'Zoology',
                    'Human Biology',
                    'Human Anatomy',
                    'Human Physiology',
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

            'French' => [
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

            'English' => [
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
