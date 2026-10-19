<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class GravitationIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'gravitation')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Gravitational Fields
            // ============================================================

            [
                'title' => 'Gravitational Fields',
                'description' => 'Intermediate analysis of gravitational fields, field strength and superposition.',
                'questions' => [

                    [
                        'question' => 'What is the gravitational field strength at distance r from a point mass M?',
                        'choices' => [
                            ['choice_text' => 'g = GM/r²', 'is_correct' => true],
                            ['choice_text' => 'g = GM/r', 'is_correct' => false],
                            ['choice_text' => 'g = GMr²', 'is_correct' => false],
                            ['choice_text' => 'g = GM²/r²', 'is_correct' => false],
                        ],
                        'explanation' => 'For a point mass, the gravitational field magnitude is g = GM/r².',
                    ],

                    [
                        'question' => 'Why does the test mass not appear in the expression for gravitational field strength?',
                        'choices' => [
                            ['choice_text' => 'The gravitational force is proportional to the test mass, which cancels when F/m is formed', 'is_correct' => true],
                            ['choice_text' => 'The test mass is always zero', 'is_correct' => false],
                            ['choice_text' => 'Gravity acts independently of mass in every equation', 'is_correct' => false],
                            ['choice_text' => 'The source mass is not relevant', 'is_correct' => false],
                        ],
                        'explanation' => 'Since F = GMm/r², dividing by m gives g = GM/r².',
                    ],

                    [
                        'question' => 'Two identical point masses produce gravitational fields at a midpoint between them. What is the net gravitational field at that midpoint?',
                        'choices' => [
                            ['choice_text' => 'Zero', 'is_correct' => true],
                            ['choice_text' => 'Equal to the field from one mass', 'is_correct' => false],
                            ['choice_text' => 'Twice the field from one mass', 'is_correct' => false],
                            ['choice_text' => 'Infinite', 'is_correct' => false],
                        ],
                        'explanation' => 'The two field vectors have equal magnitude and opposite directions at the midpoint.',
                    ],

                    [
                        'question' => 'Why is gravitational field strength a vector quantity?',
                        'choices' => [
                            ['choice_text' => 'It has both magnitude and direction determined by the gravitational force per unit mass', 'is_correct' => true],
                            ['choice_text' => 'It is measured only by magnitude', 'is_correct' => false],
                            ['choice_text' => 'All gravitational fields are scalar', 'is_correct' => false],
                            ['choice_text' => 'It depends only on temperature', 'is_correct' => false],
                        ],
                        'explanation' => 'The gravitational field has a direction and magnitude at each point in space.',
                    ],

                    [
                        'question' => 'At what distance from a point mass M is the gravitational field one quarter of its value at distance r?',
                        'choices' => [
                            ['choice_text' => '2r', 'is_correct' => true],
                            ['choice_text' => 'r/2', 'is_correct' => false],
                            ['choice_text' => '4r', 'is_correct' => false],
                            ['choice_text' => 'r/4', 'is_correct' => false],
                        ],
                        'explanation' => 'Since g ∝ 1/r², doubling r reduces the field by a factor of four.',
                    ],

                    [
                        'question' => 'A planet has twice Earth’s mass and twice Earth’s radius. How does its surface gravitational field compare with Earth’s?',
                        'choices' => [
                            ['choice_text' => 'It is half as large', 'is_correct' => true],
                            ['choice_text' => 'It is twice as large', 'is_correct' => false],
                            ['choice_text' => 'It is four times larger', 'is_correct' => false],
                            ['choice_text' => 'It is unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'g ∝ M/R², so g_new/g_E = 2/4 = 1/2.',
                    ],

                    [
                        'question' => 'Why can the gravitational field inside a thin spherical shell be zero everywhere inside the shell?',
                        'choices' => [
                            ['choice_text' => Symmetry causes the gravitational contributions from the shell to cancel at every interior point', 'is_correct' => true],
                            ['choice_text' => 'Gravity does not act inside matter', 'is_correct' => false],
                            ['choice_text' => 'The shell has no mass', 'is_correct' => false],
                            ['choice_text' => 'The field is always zero outside the shell too', 'is_correct' => false],
                        ],
                        'explanation' => 'Newton’s shell theorem states that the net gravitational field inside a uniform spherical shell is zero.',
                    ],

                    [
                        'question' => 'What principle allows gravitational fields from several masses to be combined?',
                        'choices' => [
                            ['choice_text' => 'The superposition principle', 'is_correct' => true],
                            ['choice_text' => 'The uncertainty principle', 'is_correct' => false],
                            ['choice_text' => 'Archimedes’ principle', 'is_correct' => false],
                            ['choice_text' => 'The exclusion principle', 'is_correct' => false],
                        ],
                        'explanation' => 'Gravitational fields add vectorially according to superposition.',
                    ],

                    [
                        'question' => 'Why can gravitational field lines never cross at a point?',
                        'choices' => [
                            ['choice_text' => The gravitational field has a unique direction at a given point', 'is_correct' => true],
                            ['choice_text' => Gravity is always zero where lines cross', 'is_correct' => false],
                            ['choice_text' => Field lines are physical objects', 'is_correct' => false],
                            ['choice_text' => Gravitational fields are scalar', 'is_correct' => false],
                        ],
                        'explanation' => 'At a given point, the net gravitational field has one unique direction.',
                    ],

                    [
                        'question' => 'Why does the gravitational field near a spherical planet become approximately uniform over a small region near its surface?',
                        'choices' => [
                            ['choice_text' => The variation of distance from the planet’s center is small compared with the planet’s radius', 'is_correct' => true],
                            ['choice_text' => 'Gravity becomes independent of distance', 'is_correct' => false],
                            ['choice_text' => 'The planet loses mass near the surface', 'is_correct' => false],
                            ['choice_text' => 'The field is always exactly uniform everywhere', 'is_correct' => false],
                        ],
                        'explanation' => 'For small height variations compared with planetary radius, g changes only slightly.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 2 — Gravitational Potential
            // ============================================================

            [
                'title' => 'Gravitational Potential',
                'description' => 'Intermediate study of gravitational potential, potential energy and energy differences.',
                'questions' => [

                    [
                        'question' => 'What is gravitational potential at a point?',
                        'choices' => [
                            ['choice_text' => 'Gravitational potential energy per unit test mass', 'is_correct' => true],
                            ['choice_text' => 'Gravitational force per unit distance', 'is_correct' => false],
                            ['choice_text' => 'Mass per unit energy', 'is_correct' => false],
                            ['choice_text' => 'The acceleration due to gravity squared', 'is_correct' => false],
                        ],
                        'explanation' => 'Gravitational potential V is defined as potential energy per unit mass.',
                    ],

                    [
                        'question' => 'For a point mass M with zero potential at infinity, what is the gravitational potential at distance r?',
                        'choices' => [
                            ['choice_text' => 'V = -GM/r', 'is_correct' => true],
                            ['choice_text' => 'V = GM/r', 'is_correct' => false],
                            ['choice_text' => 'V = -GM/r²', 'is_correct' => false],
                            ['choice_text' => 'V = GMr', 'is_correct' => false],
                        ],
                        'explanation' => 'With V(∞) = 0, the Newtonian gravitational potential is V = -GM/r.',
                    ],

                    [
                        'question' => 'What is the gravitational potential energy of a mass m at distance r from a point mass M?',
                        'choices' => [
                            ['choice_text' => 'U = -GMm/r', 'is_correct' => true],
                            ['choice_text' => 'U = GMm/r', 'is_correct' => false],
                            ['choice_text' => 'U = -GMm/r²', 'is_correct' => false],
                            ['choice_text' => 'U = GMmr', 'is_correct' => false],
                        ],
                        'explanation' => 'Potential energy is U = mV = -GMm/r.',
                    ],

                    [
                        'question' => 'Why is the gravitational potential negative when zero is chosen at infinity?',
                        'choices' => [
                            ['choice_text' => A finite separation is a bound state with lower potential energy than infinite separation', 'is_correct' => true],
                            ['choice_text' => 'Gravity destroys energy', 'is_correct' => false],
                            ['choice_text' => 'Potential energy must always be negative', 'is_correct' => false],
                            ['choice_text' => 'The mass is negative', 'is_correct' => false],
                        ],
                        'explanation' => 'The chosen reference makes U = 0 at infinity and U < 0 at finite separation.',
                    ],

                    [
                        'question' => 'How is gravitational field related to gravitational potential in one dimension?',
                        'choices' => [
                            ['choice_text' => 'g = -dV/dr', 'is_correct' => true],
                            ['choice_text' => 'g = dV/dr', 'is_correct' => false],
                            ['choice_text' => 'g = V/r', 'is_correct' => false],
                            ['choice_text' => 'g = V²', 'is_correct' => false],
                        ],
                        'explanation' => 'The gravitational field is the negative gradient of gravitational potential.',
                    ],

                    [
                        'question' => 'Why is gravitational potential a scalar while gravitational field is a vector?',
                        'choices' => [
                            ['choice_text' => Potential is a scalar energy-per-unit-mass quantity, whereas field has magnitude and direction', 'is_correct' => true],
                            ['choice_text' => 'Potential has no physical meaning', 'is_correct' => false],
                            ['choice_text' => Field strength is always scalar', 'is_correct' => false],
                            ['choice_text' => Potential depends on velocity direction', 'is_correct' => false],
                        ],
                        'explanation' => 'The scalar potential generates the vector field through its spatial gradient.',
                    ],

                    [
                        'question' => 'What is the change in gravitational potential energy when a mass moves from r1 to r2 around a point mass M?',
                        'choices' => [
                            ['choice_text' => 'ΔU = GMm(1/r1 - 1/r2)', 'is_correct' => true],
                            ['choice_text' => 'ΔU = GMm(r2 - r1)', 'is_correct' => false],
                            ['choice_text' => 'ΔU = GMm(r1 - r2)', 'is_correct' => false],
                            ['choice_text' => 'ΔU = GMm/(r1r2)', 'is_correct' => false],
                        ],
                        'explanation' => 'Subtracting U1 = -GMm/r1 from U2 = -GMm/r2 gives ΔU = GMm(1/r1 - 1/r2).',
                    ],

                    [
                        'question' => 'Why can the zero point of gravitational potential be changed without changing the gravitational force?',
                        'choices' => [
                            ['choice_text' => 'Adding a constant to potential does not change its gradient', 'is_correct' => true],
                            ['choice_text' => 'The force is independent of potential', 'is_correct' => false],
                            ['choice_text' => 'Potential is not related to force', 'is_correct' => false],
                            ['choice_text' => 'Gravity depends on the chosen reference', 'is_correct' => false],
                        ],
                        'explanation' => 'Since g = -∇V, an additive constant has no effect on the field.',
                    ],

                    [
                        'question' => 'What is the work done by gravity when moving a mass from r1 to r2?',
                        'choices' => [
                            ['choice_text' => 'W_g = -ΔU', 'is_correct' => true],
                            ['choice_text' => 'W_g = ΔU', 'is_correct' => false],
                            ['choice_text' => 'W_g = U1U2', 'is_correct' => false],
                            ['choice_text' => 'W_g = U1 + U2 always', 'is_correct' => false],
                        ],
                        'explanation' => 'For a conservative force, the work performed is the negative change in potential energy.',
                    ],

                    [
                        'question' => 'Why is gravitational potential useful for systems containing many test masses?',
                        'choices' => [
                            ['choice_text' => The same scalar potential describes the field independently of the particular test mass', 'is_correct' => true],
                            ['choice_text' => 'It depends only on the test mass', 'is_correct' => false],
                            ['choice_text' => 'Potential replaces all source masses', 'is_correct' => false],
                            ['choice_text' => 'It is only defined for one object at a time', 'is_correct' => false],
                        ],
                        'explanation' => 'The gravitational potential is a property of the source field at each location.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 3 — Spherical Bodies and Shell Theorem
            // ============================================================

            [
                'title' => 'Spherical Bodies and Shell Theorem',
                'description' => 'Intermediate applications of Newton’s shell theorem and spherically symmetric mass distributions.',
                'questions' => [

                    [
                        'question' => 'What does Newton’s shell theorem state for the gravitational field outside a uniform spherical shell?',
                        'choices' => [
                            ['choice_text' => 'The shell acts gravitationally as though all its mass were concentrated at its center', 'is_correct' => true],
                            ['choice_text' => 'The field is always zero outside the shell', 'is_correct' => false],
                            ['choice_text' => 'Only the nearest part of the shell contributes', 'is_correct' => false],
                            ['choice_text' => 'The shell acts like a disk', 'is_correct' => false],
                        ],
                        'explanation' => 'Outside a spherically symmetric shell, the field is equivalent to that of a point mass at the center.',
                    ],

                    [
                        'question' => 'What is the gravitational field inside a uniform spherical shell?',
                        'choices' => [
                            ['choice_text' => 'Zero', 'is_correct' => true],
                            ['choice_text' => 'GM/r²', 'is_correct' => false],
                            ['choice_text' => 'GM/R² at every point', 'is_correct' => false],
                            ['choice_text' => 'Infinite at the center', 'is_correct' => false],
                        ],
                        'explanation' => 'The net gravitational field inside a uniform spherical shell is zero.',
                    ],

                    [
                        'question' => 'For a spherically symmetric solid planet of radius R, what is the external gravitational field at r > R?',
                        'choices' => [
                            ['choice_text' => 'g = GM/r²', 'is_correct' => true],
                            ['choice_text' => 'g = GM/R² for all r', 'is_correct' => false],
                            ['choice_text' => 'g = GMr²', 'is_correct' => false],
                            ['choice_text' => 'g = GM/r', 'is_correct' => false],
                        ],
                        'explanation' => 'Outside the spherical body, the entire mass acts as if concentrated at the center.',
                    ],

                    [
                        'question' => 'For a uniform-density spherical planet, how does gravitational field magnitude vary inside the planet?',
                        'choices' => [
                            ['choice_text' => 'It increases linearly with distance from the center', 'is_correct' => true],
                            ['choice_text' => 'It follows 1/r² all the way to the center', 'is_correct' => false],
                            ['choice_text' => 'It is constant everywhere inside', 'is_correct' => false],
                            ['choice_text' => 'It decreases linearly from the center', 'is_correct' => false],
                        ],
                        'explanation' => 'For uniform density, enclosed mass is proportional to r³, so g = GMencl/r² is proportional to r.',
                    ],

                    [
                        'question' => 'What is the gravitational field at the exact center of a uniform spherical planet?',
                        'choices' => [
                            ['choice_text' => 'Zero', 'is_correct' => true],
                            ['choice_text' => 'Maximum', 'is_correct' => false],
                            ['choice_text' => 'GM/R²', 'is_correct' => false],
                            ['choice_text' => 'Infinite', 'is_correct' => false],
                        ],
                        'explanation' => 'At the center, symmetry makes the net gravitational field zero.',
                    ],

                    [
                        'question' => 'Why can the shell theorem simplify the gravitational field of a planet?',
                        'choices' => [
                            ['choice_text' => Spherical symmetry allows the full mass distribution to be replaced by an equivalent central point mass outside the body', 'is_correct' => true],
                            ['choice_text' => 'Gravity ignores the planet’s mass distribution entirely', 'is_correct' => false],
                            ['choice_text' => 'Only surface mass matters in every geometry', 'is_correct' => false],
                            ['choice_text' => 'The theorem applies only to flat plates', 'is_correct' => false],
                        ],
                        'explanation' => 'Spherical symmetry is the key condition behind the simplification.',
                    ],

                    [
                        'question' => 'A spherical body has twice the radius but the same mass. How does its surface gravitational field change?',
                        'choices' => [
                            ['choice_text' => 'It becomes one quarter as large', 'is_correct' => true],
                            ['choice_text' => 'It becomes half as large', 'is_correct' => false],
                            ['choice_text' => 'It doubles', 'is_correct' => false],
                            ['choice_text' => 'It remains unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'At the surface, g = GM/R², so doubling R reduces g by a factor of four.',
                    ],

                    [
                        'question' => 'Why does a spherically symmetric mass distribution produce a radial gravitational field?',
                        'choices' => [
                            ['choice_text' => Symmetry eliminates any preferred tangential direction', 'is_correct' => true],
                            ['choice_text' => Gravity is always vertical', 'is_correct' => false],
                            ['choice_text' => Tangential forces are stronger than radial forces', 'is_correct' => false],
                            ['choice_text' => The mass distribution is one-dimensional', 'is_correct' => false],
                        ],
                        'explanation' => 'Spherical symmetry requires the field to depend only on radius and point radially.',
                    ],

                    [
                        'question' => 'Why does a hollow spherical planet not attract a small object toward the shell while the object remains inside, under perfect spherical symmetry?',
                        'choices' => [
                            ['choice_text' => Contributions from all parts of the shell cancel exactly', 'is_correct' => true],
                            ['choice_text' => 'Gravity does not penetrate hollow objects', 'is_correct' => false],
                            ['choice_text' => 'The object has no mass', 'is_correct' => false],
                            ['choice_text' => 'The shell repels the object', 'is_correct' => false],
                        ],
                        'explanation' => 'The shell theorem gives zero net gravitational field everywhere inside a uniform spherical shell.',
                    ],

                    [
                        'question' => 'What happens to the gravitational field immediately outside a spherical body if its mass is fixed but radius is reduced?',
                        'choices' => [
                            ['choice_text' => 'The surface field becomes stronger', 'is_correct' => true],
                            ['choice_text' => 'The surface field becomes weaker', 'is_correct' => false],
                            ['choice_text' => 'It becomes zero', 'is_correct' => false],
                            ['choice_text' => 'It is independent of radius', 'is_correct' => false],
                        ],
                        'explanation' => 'Since g_surface = GM/R², decreasing R increases the field magnitude.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 4 — Orbital Motion
            // ============================================================

            [
                'title' => 'Orbital Motion',
                'description' => 'Intermediate analysis of circular orbital speed, period and centripetal acceleration.',
                'questions' => [

                    [
                        'question' => 'For a circular orbit around mass M, which equation connects gravitational and centripetal forces?',
                        'choices' => [
                            ['choice_text' => 'GMm/r² = mv²/r', 'is_correct' => true],
                            ['choice_text' => 'GMm/r = mv²', 'is_correct' => false],
                            ['choice_text' => 'GMm = mr²v', 'is_correct' => false],
                            ['choice_text' => 'GM/r² = mv²', 'is_correct' => false],
                        ],
                        'explanation' => 'The gravitational force supplies the centripetal force for a circular orbit.',
                    ],

                    [
                        'question' => 'What is the circular orbital speed at radius r around a central mass M?',
                        'choices' => [
                            ['choice_text' => 'v = √(GM/r)', 'is_correct' => true],
                            ['choice_text' => 'v = √(GM/r²)', 'is_correct' => false],
                            ['choice_text' => 'v = GM/r', 'is_correct' => false],
                            ['choice_text' => 'v = √(r/GM)', 'is_correct' => false],
                        ],
                        'explanation' => 'Canceling m and one factor of r gives v² = GM/r.',
                    ],

                    [
                        'question' => 'If the orbital radius is quadrupled around the same central mass, what happens to circular orbital speed?',
                        'choices' => [
                            ['choice_text' => 'It is halved', 'is_correct' => true],
                            ['choice_text' => 'It doubles', 'is_correct' => false],
                            ['choice_text' => 'It becomes one quarter', 'is_correct' => false],
                            ['choice_text' => 'It remains unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Since v ∝ 1/√r, multiplying r by four divides v by two.',
                    ],

                    [
                        'question' => 'What is the orbital period of a circular orbit?',
                        'choices' => [
                            ['choice_text' => 'T = 2π√(r³/GM)', 'is_correct' => true],
                            ['choice_text' => 'T = 2π√(GM/r³)', 'is_correct' => false],
                            ['choice_text' => 'T = √(GM/r)', 'is_correct' => false],
                            ['choice_text' => 'T = 2πrGM', 'is_correct' => false],
                        ],
                        'explanation' => 'Using v = 2πr/T and v = √(GM/r) yields Kepler’s circular-orbit period relation.',
                    ],

                    [
                        'question' => 'If an orbit’s radius is doubled around the same central body, the orbital period changes by a factor of...',
                        'choices' => [
                            ['choice_text' => '2√2', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '√2', 'is_correct' => false],
                        ],
                        'explanation' => 'Since T ∝ r^(3/2), doubling r gives T2/T1 = 2^(3/2) = 2√2.',
                    ],

                    [
                        'question' => 'Why does the mass of the orbiting satellite cancel from the circular orbital speed equation?',
                        'choices' => [
                            ['choice_text' => Both gravitational and inertial terms are proportional to satellite mass', 'is_correct' => true],
                            ['choice_text' => 'The satellite has negligible mass by definition', 'is_correct' => false],
                            ['choice_text' => 'Gravity does not act on satellites', 'is_correct' => false],
                            ['choice_text' => 'Orbital speed never depends on the central body', 'is_correct' => false],
                        ],
                        'explanation' => 'Setting GMm/r² = mv²/r cancels the satellite mass m.',
                    ],

                    [
                        'question' => 'What is the centripetal acceleration of a circular orbit in terms of GM and r?',
                        'choices' => [
                            ['choice_text' => 'a_c = GM/r²', 'is_correct' => true],
                            ['choice_text' => 'a_c = GM/r', 'is_correct' => false],
                            ['choice_text' => 'a_c = Gr/M²', 'is_correct' => false],
                            ['choice_text' => 'a_c = GM²/r²', 'is_correct' => false],
                        ],
                        'explanation' => 'The required centripetal acceleration equals the local gravitational field.',
                    ],

                    [
                        'question' => 'Why does a lower circular orbit require a higher orbital speed?',
                        'choices' => [
                            ['choice_text' => The circular-orbit relation v = √(GM/r) increases as r decreases', 'is_correct' => true],
                            ['choice_text' => Gravity becomes weaker closer to the body', 'is_correct' => false],
                            ['choice_text' => The satellite becomes more massive', 'is_correct' => false],
                            ['choice_text' => The orbital period must increase', 'is_correct' => false],
                        ],
                        'explanation' => 'A smaller radius requires a larger centripetal acceleration, supplied by a larger orbital speed.',
                    ],

                    [
                        'question' => 'Why is a circular orbit a special case of orbital motion?',
                        'choices' => [
                            ['choice_text' => Its radial distance remains constant while gravity provides exactly the required centripetal acceleration', 'is_correct' => true],
                            ['choice_text' => 'The satellite has zero velocity', 'is_correct' => false],
                            ['choice_text' => 'No gravitational force acts', 'is_correct' => false],
                            ['choice_text' => 'The orbital energy is always zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Circular motion has constant radius and requires precise balance between gravity and centripetal acceleration.',
                    ],

                    [
                        'question' => 'Why do two satellites at different circular orbital radii around the same planet have different orbital periods?',
                        'choices' => [
                            ['choice_text' => The orbital period depends on radius according to T ∝ r^(3/2)', 'is_correct' => true],
                            ['choice_text' => 'Their masses determine the period in the ideal two-body model', 'is_correct' => false],
                            ['choice_text' => 'Gravity has the same strength at every altitude', 'is_correct' => false],
                            ['choice_text' => 'Orbital speed is independent of radius', 'is_correct' => false],
                        ],
                        'explanation' => 'Kepler’s third-law relation determines the period as a function of orbital radius.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 5 — Orbital Energy
            // ============================================================

            [
                'title' => 'Orbital Energy',
                'description' => 'Intermediate analysis of kinetic energy, potential energy and total energy in gravitational orbits.',
                'questions' => [

                    [
                        'question' => 'For a circular orbit, what is the orbital kinetic energy?',
                        'choices' => [
                            ['choice_text' => 'K = GMm/(2r)', 'is_correct' => true],
                            ['choice_text' => 'K = GMm/r', 'is_correct' => false],
                            ['choice_text' => 'K = GMm/(r²)', 'is_correct' => false],
                            ['choice_text' => 'K = 2GMm/r', 'is_correct' => false],
                        ],
                        'explanation' => 'Using v² = GM/r in K = 1/2mv² gives K = GMm/(2r).',
                    ],

                    [
                        'question' => 'What is the total mechanical energy of a circular orbit?',
                        'choices' => [
                            ['choice_text' => 'E = -GMm/(2r)', 'is_correct' => true],
                            ['choice_text' => 'E = GMm/(2r)', 'is_correct' => false],
                            ['choice_text' => 'E = -GMm/r', 'is_correct' => false],
                            ['choice_text' => 'E = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'Since U = -GMm/r and K = GMm/(2r), E = K + U = -GMm/(2r).',
                    ],

                    [
                        'question' => 'What is the relationship between circular orbital kinetic energy and gravitational potential energy?',
                        'choices' => [
                            ['choice_text' => 'K = -U/2', 'is_correct' => true],
                            ['choice_text' => 'K = U', 'is_correct' => false],
                            ['choice_text' => 'K = -U', 'is_correct' => false],
                            ['choice_text' => 'K = -2U', 'is_correct' => false],
                        ],
                        'explanation' => 'For a circular Newtonian orbit, K = GMm/(2r) and U = -GMm/r.',
                    ],

                    [
                        'question' => 'Why is the total energy of a bound circular orbit negative?',
                        'choices' => [
                            ['choice_text' => The negative gravitational potential energy has greater magnitude than the positive kinetic energy', 'is_correct' => true],
                            ['choice_text' => Kinetic energy is negative', 'is_correct' => false],
                            ['choice_text' => Energy conservation fails in orbit', 'is_correct' => false],
                            ['choice_text' => Gravity destroys energy', 'is_correct' => false],
                        ],
                        'explanation' => 'For a circular orbit E = -GMm/(2r) < 0.',
                    ],

                    [
                        'question' => 'What happens to the total orbital energy when a circular satellite moves to a larger radius?',
                        'choices' => [
                            ['choice_text' => 'It becomes less negative', 'is_correct' => true],
                            ['choice_text' => 'It becomes more negative', 'is_correct' => false],
                            ['choice_text' => 'It remains zero', 'is_correct' => false],
                            ['choice_text' => 'It becomes negative infinity', 'is_correct' => false],
                        ],
                        'explanation' => 'E = -GMm/(2r), so increasing r moves E toward zero.',
                    ],

                    [
                        'question' => 'What minimum total mechanical energy corresponds to the threshold of escape when zero energy is defined at infinity?',
                        'choices' => [
                            ['choice_text' => 'Zero', 'is_correct' => true],
                            ['choice_text' => '-GMm/r', 'is_correct' => false],
                            ['choice_text' => 'GMm/r', 'is_correct' => false],
                            ['choice_text' => 'Negative infinity', 'is_correct' => false],
                        ],
                        'explanation' => 'At infinity with zero final speed, both kinetic and potential energy approach zero.',
                    ],

                    [
                        'question' => 'Why does an object on an elliptical orbit have varying kinetic and potential energies while total energy remains constant?',
                        'choices' => [
                            ['choice_text' => Gravitational energy is exchanged reversibly with kinetic energy', 'is_correct' => true],
                            ['choice_text' => 'Gravity is non-conservative', 'is_correct' => false],
                            ['choice_text' => 'The object changes mass along the orbit', 'is_correct' => false],
                            ['choice_text' => 'Energy conservation applies only to circular orbits', 'is_correct' => false],
                        ],
                        'explanation' => 'Newtonian gravity is conservative, so K + U remains constant.',
                    ],

                    [
                        'question' => 'At the closest point of a planetary elliptical orbit, the planet’s speed is generally...',
                        'choices' => [
                            ['choice_text' => 'Greater than at the farthest point', 'is_correct' => true],
                            ['choice_text' => 'Smaller than at the farthest point', 'is_correct' => false],
                            ['choice_text' => 'Always zero', 'is_correct' => false],
                            ['choice_text' => 'Exactly the same', 'is_correct' => false],
                        ],
                        'explanation' => 'Conservation of angular momentum and energy imply higher speed at smaller orbital radius.',
                    ],

                    [
                        'question' => 'Why is orbital energy a useful classification parameter?',
                        'choices' => [
                            ['choice_text' => Its sign distinguishes bound from unbound Newtonian gravitational trajectories', 'is_correct' => true],
                            ['choice_text' => It directly gives the orbital angle at every instant', 'is_correct' => false],
                            ['choice_text' => It determines only the satellite mass', 'is_correct' => false],
                            ['choice_text' => It is independent of the gravitational field', 'is_correct' => false],
                        ],
                        'explanation' => 'Negative energy indicates bound motion, while zero and positive energy correspond to unbound limiting and hyperbolic cases.',
                    ],

                    [
                        'question' => 'What happens to the magnitude of circular-orbit kinetic energy as radius increases?',
                        'choices' => [
                            ['choice_text' => 'It decreases', 'is_correct' => true],
                            ['choice_text' => 'It increases', 'is_correct' => false],
                            ['choice_text' => 'It remains constant', 'is_correct' => false],
                            ['choice_text' => 'It becomes infinite', 'is_correct' => false],
                        ],
                        'explanation' => 'K = GMm/(2r), so kinetic energy decreases with increasing orbital radius.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 6 — Escape Velocity and Gravitational Binding
            // ============================================================

            [
                'title' => 'Escape Velocity and Gravitational Binding',
                'description' => 'Intermediate treatment of escape speed, gravitational binding and energy thresholds.',
                'questions' => [

                    [
                        'question' => 'What is the escape speed from radius R around a spherical body of mass M?',
                        'choices' => [
                            ['choice_text' => 'vesc = √(2GM/R)', 'is_correct' => true],
                            ['choice_text' => 'vesc = √(GM/R)', 'is_correct' => false],
                            ['choice_text' => 'vesc = GM/R²', 'is_correct' => false],
                            ['choice_text' => 'vesc = 2GM/R', 'is_correct' => false],
                        ],
                        'explanation' => 'Energy conservation from radius R to infinity gives vesc = √(2GM/R).',
                    ],

                    [
                        'question' => 'Why is escape speed larger than circular orbital speed at the same radius?',
                        'choices' => [
                            ['choice_text' => Escape requires enough energy to reach infinity with zero final speed', 'is_correct' => true],
                            ['choice_text' => 'Circular motion has no gravity', 'is_correct' => false],
                            ['choice_text' => 'Escape speed does not depend on gravity', 'is_correct' => false],
                            ['choice_text' => 'The satellite mass is larger during escape', 'is_correct' => false],
                        ],
                        'explanation' => 'Escape requires zero total energy at infinity, while a circular orbit has negative total energy.',
                    ],

                    [
                        'question' => 'What is the relation between escape speed and circular orbital speed at the same radius?',
                        'choices' => [
                            ['choice_text' => 'vesc = √2 vcirc', 'is_correct' => true],
                            ['choice_text' => 'vesc = vcirc/√2', 'is_correct' => false],
                            ['choice_text' => 'vesc = 2vcirc', 'is_correct' => false],
                            ['choice_text' => 'vesc = vcirc', 'is_correct' => false],
                        ],
                        'explanation' => 'The escape-speed expression differs from circular speed by a factor of √2.',
                    ],

                    [
                        'question' => 'Why is escape speed independent of the mass of the escaping object?',
                        'choices' => [
                            ['choice_text' => The escaping mass factors out of the energy equation', 'is_correct' => true],
                            ['choice_text' => 'The object has no gravitational interaction', 'is_correct' => false],
                            ['choice_text' => 'All objects have identical mass', 'is_correct' => false],
                            ['choice_text' => 'Kinetic energy is independent of mass', 'is_correct' => false],
                        ],
                        'explanation' => 'Both initial kinetic and gravitational potential energy are proportional to the escaping mass.',
                    ],

                    [
                        'question' => 'If a planet’s mass is quadrupled while its radius remains fixed, escape speed changes by a factor of...',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '√2', 'is_correct' => false],
                        ],
                        'explanation' => 'Since vesc ∝ √M, quadrupling M doubles escape speed.',
                    ],

                    [
                        'question' => 'If a planet’s radius is quadrupled while mass stays fixed, escape speed changes by a factor of...',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1/4', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Since vesc ∝ 1/√R, quadrupling R halves escape speed.',
                    ],

                    [
                        'question' => 'What happens to an object launched below escape speed in an ideal gravitational field?',
                        'choices' => [
                            ['choice_text' => 'It remains gravitationally bound and eventually reaches a turning point if its trajectory is radial', 'is_correct' => true],
                            ['choice_text' => 'It always escapes anyway', 'is_correct' => false],
                            ['choice_text' => 'It immediately falls back to the launch point in every case', 'is_correct' => false],
                            ['choice_text' => 'Its energy becomes positive automatically', 'is_correct' => false],
                        ],
                        'explanation' => 'Sub-escape trajectories have negative total energy and are bound.',
                    ],

                    [
                        'question' => 'What does zero total mechanical energy signify in the ideal Newtonian gravitational problem?',
                        'choices' => [
                            ['choice_text' => The limiting parabolic escape trajectory', 'is_correct' => true],
                            ['choice_text' => A circular orbit', 'is_correct' => false],
                            ['choice_text' => A state of negative infinite binding', 'is_correct' => false],
                            ['choice_text' => An impossible trajectory', 'is_correct' => false],
                        ],
                        'explanation' => 'E = 0 corresponds to a parabolic trajectory with zero asymptotic speed at infinity.',
                    ],

                    [
                        'question' => 'Why is the escape condition naturally derived using energy conservation?',
                        'choices' => [
                            ['choice_text' => It compares the initial kinetic energy with the gravitational binding energy required to reach infinity', 'is_correct' => true],
                            ['choice_text' => Escape depends only on momentum direction', 'is_correct' => false],
                            ['choice_text' => Force is irrelevant to gravity', 'is_correct' => false],
                            ['choice_text' => Energy is not conserved in gravitational systems', 'is_correct' => false],
                        ],
                        'explanation' => 'The energy criterion provides a direct threshold for unbound motion.',
                    ],

                    [
                        'question' => 'Why can a spacecraft increase its total orbital energy by performing a prograde burn?',
                        'choices' => [
                            ['choice_text' => The burn adds kinetic energy and therefore increases total mechanical orbital energy', 'is_correct' => true],
                            ['choice_text' => 'The gravitational field becomes weaker instantaneously', 'is_correct' => false],
                            ['choice_text' => 'The spacecraft loses all momentum', 'is_correct' => false],
                            ['choice_text' => 'Potential energy becomes independent of radius', 'is_correct' => false],
                        ],
                        'explanation' => 'A prograde impulse increases speed and kinetic energy, raising orbital energy.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 7 — Kepler's Laws and Angular Momentum
            // ============================================================

            [
                'title' => 'Kepler’s Laws and Angular Momentum',
                'description' => 'Intermediate study of Keplerian motion, areal velocity and angular momentum.',
                'questions' => [

                    [
                        'question' => 'What is the fundamental dynamical reason behind Kepler’s second law?',
                        'choices' => [
                            ['choice_text' => Conservation of angular momentum under a central gravitational force', 'is_correct' => true],
                            ['choice_text' => Conservation of linear speed', 'is_correct' => false],
                            ['choice_text' => Constant gravitational field strength', 'is_correct' => false],
                            ['choice_text' => Conservation of temperature', 'is_correct' => false],
                        ],
                        'explanation' => 'A central force produces zero torque about the center, conserving angular momentum and areal velocity.',
                    ],

                    [
                        'question' => 'What does constant areal velocity mean?',
                        'choices' => [
                            ['choice_text' => Equal areas are swept out by the radius vector in equal time intervals', 'is_correct' => true],
                            ['choice_text' => Equal distances are traveled in equal times', 'is_correct' => false],
                            ['choice_text' => Speed is constant', 'is_correct' => false],
                            ['choice_text' => Radius is constant', 'is_correct' => false],
                        ],
                        'explanation' => 'This is the geometric statement of Kepler’s second law.',
                    ],

                    [
                        'question' => 'Why is a planet faster near perihelion than aphelion?',
                        'choices' => [
                            ['choice_text' => Conservation of angular momentum requires greater tangential speed at smaller radius', 'is_correct' => true],
                            ['choice_text' => 'The planet’s mass increases near perihelion', 'is_correct' => false],
                            ['choice_text' => 'Gravity becomes zero at aphelion', 'is_correct' => false],
                            ['choice_text' => 'The orbit becomes circular at perihelion', 'is_correct' => false],
                        ],
                        'explanation' => 'For planar motion under a central force, L = mr²θ̇ remains constant.',
                    ],

                    [
                        'question' => 'What does Kepler’s third law imply for planets around the same star?',
                        'choices' => [
                            ['choice_text' => 'T²/a³ is approximately constant', 'is_correct' => true],
                            ['choice_text' => 'T/a² is constant', 'is_correct' => false],
                            ['choice_text' => 'T³/a² is constant', 'is_correct' => false],
                            ['choice_text' => 'T/a³ is constant', 'is_correct' => false],
                        ],
                        'explanation' => 'For a given central mass, Kepler’s third law gives T² ∝ a³.',
                    ],

                    [
                        'question' => 'Why does Kepler’s third law emerge from Newtonian gravity?',
                        'choices' => [
                            ['choice_text' => The inverse-square central force determines the orbital period-radius relationship', 'is_correct' => true],
                            ['choice_text' => 'Planets have identical masses', 'is_correct' => false],
                            ['choice_text' => 'Gravity is independent of distance', 'is_correct' => false],
                            ['choice_text' => 'The orbits must all be circular by definition', 'is_correct' => false],
                        ],
                        'explanation' => 'Newtonian gravitational dynamics reproduces and generalizes Kepler’s empirical orbital laws.',
                    ],

                    [
                        'question' => 'What quantity is constant for a two-body system under an isolated central gravitational interaction about the center of force?',
                        'choices' => [
                            ['choice_text' => 'Angular momentum', 'is_correct' => true],
                            ['choice_text' => 'Speed of each body separately', 'is_correct' => false],
                            ['choice_text' => 'Potential energy separately', 'is_correct' => false],
                            ['choice_text' => 'Orbital radius in every orbit', 'is_correct' => false],
                        ],
                        'explanation' => 'Zero external torque implies conservation of angular momentum.',
                    ],

                    [
                        'question' => 'What is the areal velocity for a particle of mass m with angular momentum L about the origin?',
                        'choices' => [
                            ['choice_text' => dA/dt = L/(2m)', 'is_correct' => true],
                            ['choice_text' => dA/dt = 2mL', 'is_correct' => false],
                            ['choice_text' => dA/dt = Lm/2', 'is_correct' => false],
                            ['choice_text' => dA/dt = L²/(2m)', 'is_correct' => false],
                        ],
                        'explanation' => 'Using L = mr²θ̇ and dA/dt = 1/2r²θ̇ gives dA/dt = L/(2m).',
                    ],

                    [
                        'question' => 'Why are Kepler’s laws considered descriptive laws while Newton’s laws provide a dynamical explanation?',
                        'choices' => [
                            ['choice_text' => Kepler’s laws describe observed orbital behavior, while Newton’s laws explain that behavior through forces and motion', 'is_correct' => true],
                            ['choice_text' => 'Kepler’s laws are unrelated to observation', 'is_correct' => false],
                            ['choice_text' => 'Newton’s laws cannot describe orbital motion', 'is_correct' => false],
                            ['choice_text' => 'Kepler’s laws replace gravitational theory', 'is_correct' => false],
                        ],
                        'explanation' => 'Kepler’s empirical laws were successfully explained by Newtonian mechanics and gravity.',
                    ],

                    [
                        'question' => 'Why does a planet not sweep equal orbital distances in equal times on an ellipse?',
                        'choice_text' => 'Its speed varies along the orbit, increasing when it is closer to the central body and decreasing when it is farther away.',
                    ],

                    [
                        'question' => 'What happens to orbital angular speed when the radial distance decreases while angular momentum remains constant?',
                        'choices' => [
                            ['choice_text' => 'It increases', 'is_correct' => true],
                            ['choice_text' => 'It decreases', 'is_correct' => false],
                            ['choice_text' => 'It remains constant', 'is_correct' => false],
                            ['choice_text' => 'It becomes zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Since L = mr²θ̇, a decrease in r requires an increase in θ̇ when L is constant.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 8 — Integrated Gravitation
            // ============================================================

            [
                'title' => 'Integrated Gravitation',
                'description' => 'Comprehensive intermediate problems combining fields, potentials, orbits and gravitational energy.',
                'questions' => [

                    [
                        'question' => 'A planet has mass 4M and radius 2R compared with another planet of mass M and radius R. How do their surface gravitational fields compare?',
                        'choices' => [
                            ['choice_text' => 'They are equal', 'is_correct' => true],
                            ['choice_text' => 'The larger planet has twice the field', 'is_correct' => false],
                            ['choice_text' => 'The larger planet has four times the field', 'is_correct' => false],
                            ['choice_text' => 'The larger planet has half the field', 'is_correct' => false],
                        ],
                        'explanation' => 'g ∝ M/R², so 4M/(2R)² = M/R².',
                    ],

                    [
                        'question' => 'A satellite moves from radius R to 4R around the same planet. How does circular orbital speed change?',
                        'choices' => [
                            ['choice_text' => 'It becomes half as large', 'is_correct' => true],
                            ['choice_text' => 'It becomes one quarter as large', 'is_correct' => false],
                            ['choice_text' => 'It doubles', 'is_correct' => false],
                            ['choice_text' => 'It remains unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Since v ∝ 1/√r, increasing radius by four halves the speed.',
                    ],

                    [
                        'question' => 'A satellite moves from radius R to 4R. By what factor does its circular orbital period change?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                        'explanation' => 'Since T ∝ r^(3/2), multiplying radius by four multiplies period by 4^(3/2) = 8.',
                    ],

                    [
                        'question' => 'A 1000 kg spacecraft is in a circular orbit of radius r around mass M. Which quantity determines its orbital speed in the ideal two-body model?',
                        'choices' => [
                            ['choice_text' => 'GM and r, but not the spacecraft mass', 'is_correct' => true],
                            ['choice_text' => 'Only the spacecraft mass', 'is_correct' => false],
                            ['choice_text' => 'The spacecraft mass and radius only', 'is_correct' => false],
                            ['choice_text' => 'Only the spacecraft’s kinetic energy', 'is_correct' => false],
                        ],
                        'explanation' => 'The circular-orbit speed is v = √(GM/r), independent of the satellite mass.',
                    ],

                    [
                        'question' => 'Why does a circular satellite orbit have negative total energy?',
                        'choices' => [
                            ['choice_text' => It is gravitationally bound and its total energy is below the zero-at-infinity reference', 'is_correct' => true],
                            ['choice_text' => 'Kinetic energy is negative', 'is_correct' => false],
                            ['choice_text' => Energy is not conserved in orbit', 'is_correct' => false],
                            ['choice_text' => 'Potential energy is always zero in orbit', 'is_correct' => false],
                        ],
                        'explanation' => 'The total energy E = -GMm/(2r) is negative for a bound circular orbit.',
                    ],

                    [
                        'question' => 'At what radius from a point mass M is the gravitational field half of its value at radius R?',
                        'choices' => [
                            ['choice_text' => 'R√2', 'is_correct' => true],
                            ['choice_text' => '2R', 'is_correct' => false],
                            ['choice_text' => 'R/√2', 'is_correct' => false],
                            ['choice_text' => '4R', 'is_correct' => false],
                        ],
                        'explanation' => 'Set GM/r² = 1/2 GM/R², giving r² = 2R² and r = R√2.',
                    ],

                    [
                        'question' => 'Why does a prograde orbital burn usually raise the apogee of an initially circular orbit?',
                        'choices' => [
                            ['choice_text' => The burn increases orbital energy while the spacecraft begins following a higher-energy elliptical orbit', 'is_correct' => true],
                            ['choice_text' => 'Gravity becomes weaker because the spacecraft burns fuel', 'is_correct' => false],
                            ['choice_text' => 'The spacecraft loses all angular momentum', 'is_correct' => false],
                            ['choice_text' => 'A prograde burn decreases orbital energy', 'is_correct' => false],
                        ],
                        'explanation' => 'A prograde impulse increases speed and orbital energy, moving the opposite side of the orbit outward.',
                    ],

                    [
                        'question' => 'A planet has surface escape speed v. If its mass remains unchanged but its radius is reduced to one quarter, what is the new escape speed?',
                        'choices' => [
                            ['choice_text' => '2v', 'is_correct' => true],
                            ['choice_text' => 'v/2', 'is_correct' => false],
                            ['choice_text' => '4v', 'is_correct' => false],
                            ['choice_text' => 'v', 'is_correct' => false],
                        ],
                        'explanation' => 'Escape speed scales as 1/√R, so reducing R by four doubles vesc.',
                    ],

                    [
                        'question' => 'Why is the gravitational potential at infinity commonly chosen as zero?',
                        'choices' => [
                            ['choice_text' => 'It provides a convenient reference because gravitational interaction vanishes as separation becomes very large', 'is_correct' => true],
                            ['choice_text' => 'Infinity is physically the only possible location for zero energy', 'is_correct' => false],
                            ['choice_text' => 'Potential must always be positive', 'is_correct' => false],
                            ['choice_text' => 'Gravity becomes repulsive at infinity', 'is_correct' => false],
                        ],
                        'explanation' => 'The inverse-distance potential naturally approaches zero as r tends to infinity.',
                    ],

                    [
                        'question' => 'Why is combining gravitational field, potential and energy methods powerful in orbital mechanics?',
                        'choices' => [
                            ['choice_text' => 'Field describes forces, potential describes configuration energy and total energy determines accessible motion', 'is_correct' => true],
                            ['choice_text' => 'They are three unrelated descriptions', 'is_correct' => false],
                            ['choice_text' => 'Only field calculations are physically valid', 'is_correct' => false],
                            ['choice_text' => 'Energy methods cannot be applied to gravity', 'is_correct' => false],
                        ],
                        'explanation' => 'The three descriptions are mathematically connected and provide complementary tools for gravitational problems.',
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
                    'difficulty' => 'Intermediate',
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

                // Randomize answer positions so the correct answer
                // is not predictable.
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