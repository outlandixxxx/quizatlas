<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class GravitationAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'gravitation')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Gravitational Potential and Field
            // ============================================================

            [
                'title' => 'Gravitational Potential and Field',
                'description' => 'Advanced analysis of gravitational potential, field strength and their mathematical relationship.',
                'questions' => [

                    [
                        'question' => 'What is the relationship between gravitational field and gravitational potential in vector form?',
                        'choices' => [
                            ['choice_text' => 'g = -∇V', 'is_correct' => true],
                            ['choice_text' => 'g = ∇V', 'is_correct' => false],
                            ['choice_text' => 'g = V²', 'is_correct' => false],
                            ['choice_text' => 'g = V/r²', 'is_correct' => false],
                        ],
                        'explanation' => 'The gravitational field is the negative gradient of the gravitational potential.',
                    ],

                    [
                        'question' => 'For a point mass M with V(∞) = 0, what is the gravitational potential at distance r?',
                        'choices' => [
                            ['choice_text' => 'V = -GM/r', 'is_correct' => true],
                            ['choice_text' => 'V = GM/r', 'is_correct' => false],
                            ['choice_text' => 'V = -GM/r²', 'is_correct' => false],
                            ['choice_text' => 'V = GMr', 'is_correct' => false],
                        ],
                        'explanation' => 'The Newtonian gravitational potential of a point mass is V = -GM/r when zero is chosen at infinity.',
                    ],

                    [
                        'question' => 'What is the gravitational potential energy of a test mass m in the field of a point mass M?',
                        'choices' => [
                            ['choice_text' => 'U = -GMm/r', 'is_correct' => true],
                            ['choice_text' => 'U = GMm/r', 'is_correct' => false],
                            ['choice_text' => 'U = -GMm/r²', 'is_correct' => false],
                            ['choice_text' => 'U = GMmr²', 'is_correct' => false],
                        ],
                        'explanation' => 'Potential energy is U = mV = -GMm/r.',
                    ],

                    [
                        'question' => 'Why is the gravitational potential negative for a finite separation when the zero is chosen at infinity?',
                        'choices' => [
                            ['choice_text' => 'The bound configuration has lower potential energy than the infinitely separated state', 'is_correct' => true],
                            ['choice_text' => 'Gravity destroys energy', 'is_correct' => false],
                            ['choice_text' => 'Potential energy must always be negative', 'is_correct' => false],
                            ['choice_text' => 'Mass is negative in a gravitational field', 'is_correct' => false],
                        ],
                        'explanation' => 'An attractive gravitational interaction lowers the potential energy relative to infinite separation.',
                    ],

                    [
                        'question' => 'At what radius from a point mass does the gravitational potential equal half its value at radius R?',
                        'choices' => [
                            ['choice_text' => '2R', 'is_correct' => true],
                            ['choice_text' => 'R/2', 'is_correct' => false],
                            ['choice_text' => '√2R', 'is_correct' => false],
                            ['choice_text' => '4R', 'is_correct' => false],
                        ],
                        'explanation' => 'Because V ∝ -1/r, setting V(r) = V(R)/2 gives r = 2R.',
                    ],

                    [
                        'question' => 'What does an equipotential surface represent?',
                        'choices' => [
                            ['choice_text' => A surface on which the gravitational potential has the same value everywhere', 'is_correct' => true],
                            ['choice_text' => 'A surface where gravitational force is always zero', 'is_correct' => false],
                            ['choice_text' => 'A surface where gravitational acceleration is infinite', 'is_correct' => false],
                            ['choice_text' => 'A surface with constant mass density only', 'is_correct' => false],
                        ],
                        'explanation' => 'An equipotential surface has constant gravitational potential at every point.',
                    ],

                    [
                        'question' => 'Why is no work done by gravity when a test mass moves along an equipotential surface?',
                        'choices' => [
                            ['choice_text' => 'The potential difference is zero, so the work by the conservative field is zero', 'is_correct' => true],
                            ['choice_text' => 'Gravity vanishes on equipotential surfaces', 'is_correct' => false],
                            ['choice_text' => 'The mass has no velocity', 'is_correct' => false],
                            ['choice_text' => 'The surface must be horizontal', 'is_correct' => false],
                        ],
                        'explanation' => 'For a conservative field, W = -ΔU, and ΔU = 0 along an equipotential.',
                    ],

                    [
                        'question' => 'In a spherically symmetric gravitational field, equipotential surfaces outside the source are...',
                        'choices' => [
                            ['choice_text' => 'Concentric spheres centered on the source', 'is_correct' => true],
                            ['choice_text' => 'Planes perpendicular to gravity', 'is_correct' => false],
                            ['choice_text' => 'Cylinders centered on the source', 'is_correct' => false],
                            ['choice_text' => 'Randomly oriented surfaces', 'is_correct' => false],
                        ],
                        'explanation' => 'For spherical symmetry, V depends only on r, so V = constant corresponds to spherical surfaces.',
                    ],

                    [
                        'question' => 'Why are gravitational field lines perpendicular to equipotential surfaces?',
                        'choices' => [
                            ['choice_text' => 'The field is the negative gradient of potential, which is normal to constant-potential surfaces', 'is_correct' => true],
                            ['choice_text' => 'Field lines always point tangentially to equipotentials', 'is_correct' => false],
                            ['choice_text' => 'Equipotentials are defined by zero gravity', 'is_correct' => false],
                            ['choice_text' => 'The relation is purely geometric and unrelated to potential', 'is_correct' => false],
                        ],
                        'explanation' => 'The gradient of a scalar field is perpendicular to its level surfaces.',
                    ],

                    [
                        'question' => 'Why can the potential be easier to superpose than the gravitational field?',
                        'choices' => [
                            ['choice_text' => Potential is a scalar and contributions add algebraically', 'is_correct' => true],
                            ['choice_text' => Field is scalar while potential is vector', 'is_correct' => false],
                            ['choice_text' => Potential does not depend on source masses', 'is_correct' => false],
                            ['choice_text' => Fields cannot be superposed', 'is_correct' => false],
                        ],
                        'explanation' => 'Gravitational potential contributions from multiple sources are scalar sums.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 2 — Spherical Mass Distributions
            // ============================================================

            [
                'title' => 'Spherical Mass Distributions',
                'description' => 'Advanced applications of shell theorem, spherical symmetry and interior gravitational fields.',
                'questions' => [

                    [
                        'question' => 'For a uniform-density solid sphere, how does gravitational field magnitude vary with radius inside the sphere?',
                        'choices' => [
                            ['choice_text' => 'g(r) = GMr/R³', 'is_correct' => true],
                            ['choice_text' => 'g(r) = GM/r²', 'is_correct' => false],
                            ['choice_text' => 'g(r) = GMr²/R³', 'is_correct' => false],
                            ['choice_text' => 'g(r) = GM/R²r', 'is_correct' => false],
                        ],
                        'explanation' => 'For uniform density, enclosed mass is M(r/R)³, giving g = GM r/R³.',
                    ],

                    [
                        'question' => 'Where is the gravitational field of a uniform solid sphere zero?',
                        'choices' => [
                            ['choice_text' => 'At the center', 'is_correct' => true],
                            ['choice_text' => 'Only at the surface', 'is_correct' => false],
                            ['choice_text' => 'Everywhere inside', 'is_correct' => false],
                            ['choice_text' => 'Only outside the sphere', 'is_correct' => false],
                        ],
                        'explanation' => 'At the exact center, spherical symmetry makes the net field zero.',
                    ],

                    [
                        'question' => 'At what radius inside a uniform solid sphere is the gravitational field magnitude maximum?',
                        'choices' => [
                            ['choice_text' => 'At the surface', 'is_correct' => true],
                            ['choice_text' => 'At the center', 'is_correct' => false],
                            ['choice_text' => 'Halfway to the center', 'is_correct' => false],
                            ['choice_text' => 'At every radius equally', 'is_correct' => false],
                        ],
                        'explanation' => 'Inside the sphere g increases linearly with r and reaches its maximum at r = R.',
                    ],

                    [
                        'question' => 'Why does the inverse-square law not apply directly at interior points of a uniform solid sphere using the total mass M?',
                        'choices' => [
                            ['choice_text' => Only the enclosed mass contributes to the net field at an interior radius', 'is_correct' => true],
                            ['choice_text' => Gravity changes into a repulsive force inside', 'is_correct' => false],
                            ['choice_text' => The total mass disappears inside the sphere', 'is_correct' => false],
                            ['choice_text' => The shell theorem applies only outside objects', 'is_correct' => false],
                        ],
                        'explanation' => 'Shell theorem shows that exterior shells contribute zero net field inside them.',
                    ],

                    [
                        'question' => 'For a thin spherical shell of radius R, what is the gravitational potential everywhere inside the shell?',
                        'choices' => [
                            ['choice_text' => 'Constant and equal to -GM/R', 'is_correct' => true],
                            ['choice_text' => 'Zero everywhere', 'is_correct' => false],
                            ['choice_text' => '-GM/r²', 'is_correct' => false],
                            ['choice_text' => 'Linear in r', 'is_correct' => false],
                        ],
                        'explanation' => 'The gravitational field is zero inside the shell, so the potential is constant and equals the surface value.',
                    ],

                    [
                        'question' => 'Why is the gravitational potential continuous across the surface of a spherical shell?',
                        'choices' => [
                            ['choice_text' => The potential approaches the same finite value from both the inside and outside', 'is_correct' => true],
                            ['choice_text' => 'The field is discontinuous so potential must also be discontinuous', 'is_correct' => false],
                            ['choice_text' => 'Potential is always zero at a surface', 'is_correct' => false],
                            ['choice_text' => 'The shell has no mass', 'is_correct' => false],
                        ],
                        'explanation' => 'For a finite thin shell, V is continuous while the radial derivative changes across the shell.',
                    ],

                    [
                        'question' => 'For a uniform solid sphere, how does gravitational potential vary inside relative to the center?',
                        'choices' => [
                            ['choice_text' => It increases outward from its minimum value at the center', 'is_correct' => true],
                            ['choice_text' => It decreases outward from zero', 'is_correct' => false],
                            ['choice_text' => It is constant throughout the interior', 'is_correct' => false],
                            ['choice_text' => It becomes positive immediately inside', 'is_correct' => false],
                        ],
                        'explanation' => 'For an attractive spherical mass, the potential is most negative at the center and rises toward the exterior.',
                    ],

                    [
                        'question' => 'Why is spherical symmetry so powerful in gravitational problems?',
                        'choices' => [
                            ['choice_text' => It reduces the vector field to a radial function of one coordinate', 'is_correct' => true],
                            ['choice_text' => 'It makes gravity vanish everywhere', 'is_correct' => false],
                            ['choice_text' => 'It removes mass from Newton’s law', 'is_correct' => false],
                            ['choice_text' => 'It makes all fields uniform globally', 'is_correct' => false],
                        ],
                        'explanation' => 'Symmetry determines the direction of the field and simplifies the dependence to radius alone.',
                    ],

                    [
                        'question' => 'For a spherically symmetric body, what quantity determines the gravitational field at an exterior radius r?',
                        'choices' => [
                            ['choice_text' => The total mass enclosed within r', 'is_correct' => true],
                            ['choice_text' => Only the surface mass density at one point', 'is_correct' => false],
                            ['choice_text' => The volume outside the body', 'is_correct' => false],
                            ['choice_text' => The body’s temperature', 'is_correct' => false],
                        ],
                        'explanation' => 'Outside the body, the field depends on the total mass enclosed.',
                    ],

                    [
                        'question' => 'Why can a thin shell contribute to gravitational potential inside even though its gravitational field is zero there?',
                        'choices' => [
                            ['choice_text' => A constant potential can have zero gradient', 'is_correct' => true],
                            ['choice_text' => Potential and field are unrelated', 'is_correct' => false],
                            ['choice_text' => The field is not actually zero inside', 'is_correct' => false],
                            ['choice_text' => Constant potentials cannot be nonzero', 'is_correct' => false],
                        ],
                        'explanation' => 'Since g = -∇V, a nonzero constant potential can correspond to zero field.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 3 — Orbital Mechanics
            // ============================================================

            [
                'title' => 'Orbital Mechanics',
                'description' => 'Advanced analysis of circular and elliptical gravitational orbits.',
                'questions' => [

                    [
                        'question' => 'What is the circular orbital speed at radius r around a central body of mass M?',
                        'choices' => [
                            ['choice_text' => 'v = √(GM/r)', 'is_correct' => true],
                            ['choice_text' => 'v = √(GM/r²)', 'is_correct' => false],
                            ['choice_text' => 'v = GM/r', 'is_correct' => false],
                            ['choice_text' => 'v = √(r/GM)', 'is_correct' => false],
                        ],
                        'explanation' => 'Equating gravitational and centripetal forces gives v² = GM/r.',
                    ],

                    [
                        'question' => 'What is the orbital period of a circular orbit of radius r?',
                        'choices' => [
                            ['choice_text' => 'T = 2π√(r³/GM)', 'is_correct' => true],
                            ['choice_text' => 'T = 2π√(GM/r³)', 'is_correct' => false],
                            ['choice_text' => 'T = √(GM/r)', 'is_correct' => false],
                            ['choice_text' => 'T = 2πGM/r³', 'is_correct' => false],
                        ],
                        'explanation' => 'Using T = 2πr/v and v = √(GM/r) gives T = 2π√(r³/GM).',
                    ],

                    [
                        'question' => 'If orbital radius increases by a factor of 9, how does circular orbital speed change?',
                        'choices' => [
                            ['choice_text' => 'It decreases by a factor of 3', 'is_correct' => true],
                            ['choice_text' => 'It increases by a factor of 3', 'is_correct' => false],
                            ['choice_text' => 'It decreases by a factor of 9', 'is_correct' => false],
                            ['choice_text' => 'It remains unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Since v ∝ 1/√r, increasing r by 9 divides v by 3.',
                    ],

                    [
                        'question' => 'If orbital radius increases by a factor of 4, how does the circular-orbit period change?',
                        'choices' => [
                            ['choice_text' => 'It increases by a factor of 8', 'is_correct' => true],
                            ['choice_text' => 'It increases by a factor of 4', 'is_correct' => false],
                            ['choice_text' => 'It doubles', 'is_correct' => false],
                            ['choice_text' => 'It decreases by a factor of 8', 'is_correct' => false],
                        ],
                        'explanation' => 'Since T ∝ r^(3/2), multiplying r by 4 multiplies T by 8.',
                    ],

                    [
                        'question' => 'What is the specific orbital energy of a circular orbit?',
                        'choices' => [
                            ['choice_text' => 'ε = -GM/(2r)', 'is_correct' => true],
                            ['choice_text' => 'ε = GM/(2r)', 'is_correct' => false],
                            ['choice_text' => 'ε = -GM/r²', 'is_correct' => false],
                            ['choice_text' => 'ε = GM/r', 'is_correct' => false],
                        ],
                        'explanation' => 'Specific energy is E/m = -GM/(2r) for a circular orbit.',
                    ],

                    [
                        'question' => 'Why is an elliptical orbit not characterized by a constant orbital speed?',
                        'choices' => [
                            ['choice_text' => Both radius and gravitational potential energy vary along the orbit', 'is_correct' => true],
                            ['choice_text' => Gravity disappears at apoapsis', 'is_correct' => false],
                            ['choice_text' => Angular momentum is not conserved', 'is_correct' => false],
                            ['choice_text' => The planet changes mass continuously', 'is_correct' => false],
                        ],
                        'explanation' => 'Speed changes as the object moves through different gravitational potentials while total energy remains constant.',
                    ],

                    [
                        'question' => 'What is the vis-viva equation for an object in a Keplerian orbit with semi-major axis a?',
                        'choices' => [
                            ['choice_text' => 'v² = GM(2/r - 1/a)', 'is_correct' => true],
                            ['choice_text' => 'v² = GM(1/r + 1/a)', 'is_correct' => false],
                            ['choice_text' => 'v² = GM(r/a)', 'is_correct' => false],
                            ['choice_text' => 'v² = GMr(2 - a)', 'is_correct' => false],
                        ],
                        'explanation' => 'The vis-viva equation follows from orbital energy conservation.',
                    ],

                    [
                        'question' => 'For a circular orbit, what does the vis-viva equation reduce to?',
                        'choices' => [
                            ['choice_text' => 'v² = GM/r', 'is_correct' => true],
                            ['choice_text' => 'v² = 2GM/r', 'is_correct' => false],
                            ['choice_text' => 'v² = GM/r²', 'is_correct' => false],
                            ['choice_text' => 'v² = GM', 'is_correct' => false],
                        ],
                        'explanation' => 'For a circular orbit, a = r, giving v² = GM/r.',
                    ],

                    [
                        'question' => 'Why does conservation of angular momentum imply faster motion near periapsis?',
                        'choices' => [
                            ['choice_text' => The product r²θ̇ remains constant, so smaller r requires larger angular speed', 'is_correct' => true],
                            ['choice_text' => Angular momentum vanishes near periapsis', 'is_correct' => false],
                            ['choice_text' => Gravity becomes zero there', 'is_correct' => false],
                            ['choice_text' => The orbital radius is constant', 'is_correct' => false],
                        ],
                        'explanation' => 'For planar central-force motion, L = mr²θ̇ is conserved.',
                    ],

                    [
                        'question' => 'Why is the semi-major axis important for a bound Keplerian orbit?',
                        'choices' => [
                            ['choice_text' => It determines the total orbital energy and, through Kepler’s third law, the orbital period', 'is_correct' => true],
                            ['choice_text' => 'It determines only the inclination', 'is_correct' => false],
                            ['choice_text' => 'It equals the eccentricity', 'is_correct' => false],
                            ['choice_text' => 'It determines the body’s mass uniquely', 'is_correct' => false],
                        ],
                        'explanation' => 'For a fixed central mass, the semi-major axis determines orbital energy and period.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 4 — Escape and Hyperbolic Motion
            // ============================================================

            [
                'title' => 'Escape and Hyperbolic Motion',
                'description' => 'Advanced study of escape conditions, unbound trajectories and hyperbolic motion.',
                'questions' => [

                    [
                        'question' => 'What total specific orbital energy corresponds to the threshold between bound and unbound Newtonian motion?',
                        'choices' => [
                            ['choice_text' => 'ε = 0', 'is_correct' => true],
                            ['choice_text' => 'ε < 0', 'is_correct' => false],
                            ['choice_text' => 'ε > 1', 'is_correct' => false],
                            ['choice_text' => 'ε = GM/r²', 'is_correct' => false],
                        ],
                        'explanation' => 'The parabolic escape threshold has zero total specific orbital energy.',
                    ],

                    [
                        'question' => 'What type of trajectory corresponds to positive total orbital energy in the ideal Newtonian two-body problem?',
                        'choices' => [
                            ['choice_text' => 'Hyperbolic', 'is_correct' => true],
                            ['choice_text' => 'Circular', 'is_correct' => false],
                            ['choice_text' => 'Elliptical', 'is_correct' => false],
                            ['choice_text' => 'Bound parabolic', 'is_correct' => false],
                        ],
                        'explanation' => 'Positive specific energy corresponds to an unbound hyperbolic trajectory.',
                    ],

                    [
                        'question' => 'What trajectory corresponds to zero total orbital energy?',
                        'choices' => [
                            ['choice_text' => 'Parabolic', 'is_correct' => true],
                            ['choice_text' => 'Circular', 'is_correct' => false],
                            ['choice_text' => 'Elliptical', 'is_correct' => false],
                            ['choice_text' => 'Static', 'is_correct' => false],
                        ],
                        'explanation' => 'A parabolic trajectory has zero total specific orbital energy.',
                    ],

                    [
                        'question' => 'Why does a hyperbolic trajectory not return to the central body?',
                        'choices' => [
                            ['choice_text' => 'Its positive total energy corresponds to unbound motion', 'is_correct' => true],
                            ['choice_text' => 'Gravity becomes repulsive after periapsis', 'is_correct' => false],
                            ['choice_text' => 'Angular momentum becomes zero', 'is_correct' => false],
                            ['choice_text' => 'The object loses all velocity at infinity', 'is_correct' => false],
                        ],
                        'explanation' => 'Positive orbital energy allows the object to escape to infinity with nonzero asymptotic speed.',
                    ],

                    [
                        'question' => 'For an object launched with speed greater than escape speed, what happens to its speed infinitely far from the central body in the ideal Newtonian model?',
                        'choices' => [
                            ['choice_text' => 'It approaches a nonzero asymptotic speed', 'is_correct' => true],
                            ['choice_text' => 'It always approaches zero', 'is_correct' => false],
                            ['choice_text' => 'It becomes infinite', 'is_correct' => false],
                            ['choice_text' => 'It reverses direction', 'is_correct' => false],
                        ],
                        'explanation' => 'Positive total energy means a finite residual kinetic energy remains at infinity.',
                    ],

                    [
                        'question' => 'What is the asymptotic speed at infinity for specific orbital energy ε > 0?',
                        'choices' => [
                            ['choice_text' => 'v∞ = √(2ε)', 'is_correct' => true],
                            ['choice_text' => 'v∞ = √(ε/2)', 'is_correct' => false],
                            ['choice_text' => 'v∞ = ε²', 'is_correct' => false],
                            ['choice_text' => 'v∞ = ε/2', 'is_correct' => false],
                        ],
                        'explanation' => 'At infinity, gravitational potential approaches zero, so ε = v∞²/2.',
                    ],

                    [
                        'question' => 'Why is escape speed defined locally at a given radius?',
                        'choices' => [
                            ['choice_text' => The required kinetic energy depends on the gravitational potential at the starting radius', 'is_correct' => true],
                            ['choice_text' => Escape speed is the same everywhere', 'is_correct' => false],
                            ['choice_text' => Only the object’s mass determines escape', 'is_correct' => false],
                            ['choice_text' => Escape is independent of gravity', 'is_correct' => false],
                        ],
                        'explanation' => 'The depth of the gravitational potential well changes with radius.',
                    ],

                    [
                        'question' => 'What happens to escape speed as the starting radius approaches infinity for fixed central mass?',
                        'choices' => [
                            ['choice_text' => It approaches zero', 'is_correct' => true],
                            ['choice_text' => It approaches infinity', 'is_correct' => false],
                            ['choice_text' => It approaches the speed of light', 'is_correct' => false],
                            ['choice_text' => It remains equal to the surface escape speed', 'is_correct' => false],
                        ],
                        'explanation' => 'Since vesc = √(2GM/r), it approaches zero as r becomes very large.',
                    ],

                    [
                        'question' => 'Why is a parabolic orbit the limiting case between elliptical and hyperbolic motion?',
                        'choices' => [
                            ['choice_text' => Its total energy is exactly zero, separating negative-energy bound orbits from positive-energy unbound orbits', 'is_correct' => true],
                            ['choice_text' => It has zero angular momentum', 'is_correct' => false],
                            ['choice_text' => Its speed is constant', 'is_correct' => false],
                            ['choice_text' => Gravity is zero along the trajectory', 'is_correct' => false],
                        ],
                        'explanation' => 'The sign of orbital energy distinguishes the three classes of Keplerian trajectories.',
                    ],

                    [
                        'question' => 'Why does increasing launch speed above escape speed increase the asymptotic speed at infinity?',
                        'choices' => [
                            ['choice_text' => Additional initial kinetic energy remains as residual kinetic energy after escaping the potential well', 'is_correct' => true],
                            ['choice_text' => Gravitational potential becomes positive', 'is_correct' => false],
                            ['choice_text' => Mass increases with launch speed', 'is_correct' => false],
                            ['choice_text' => The gravitational constant changes', 'is_correct' => false],
                        ],
                        'explanation' => 'Additional initial energy becomes additional kinetic energy at large distance.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 5 — Tides and Gravitational Gradients
            // ============================================================

            [
                'title' => 'Tides and Gravitational Gradients',
                'description' => 'Advanced analysis of tidal forces, differential gravity and gravitational gradients.',
                'questions' => [

                    [
                        'question' => 'What produces a tidal effect near an extended astronomical body?',
                        'choices' => [
                            ['choice_text' => The variation of gravitational acceleration across the size of the affected object', 'is_correct' => true],
                            ['choice_text' => A complete absence of gravity', 'is_correct' => false],
                            ['choice_text' => A change in the gravitational constant', 'is_correct' => false],
                            ['choice_text' => Only atmospheric pressure', 'is_correct' => false],
                        ],
                        'explanation' => 'Tidal effects arise because the gravitational field is not perfectly uniform across an extended body.',
                    ],

                    [
                        'question' => 'Why does the Moon produce significant tides on Earth despite the Sun being more massive?',
                        'choices' => [
                            ['choice_text' => The Moon is much closer, making its gravitational gradient across Earth significant', 'is_correct' => true],
                            ['choice_text' => 'The Moon is more massive than the Sun', 'is_correct' => false],
                            ['choice_text' => 'The Sun exerts no gravity on Earth', 'is_correct' => false],
                            ['choice_text' => Tidal forces depend only on object mass', 'is_correct' => false],
                        ],
                        'explanation' => 'Tidal effects depend strongly on the gradient of gravitational field, which scales approximately as 1/r³ for a point source.',
                    ],

                    [
                        'question' => 'How does the magnitude of a simple tidal acceleration scale with distance from a point mass M?',
                        'choices' => [
                            ['choice_text' => Approximately as 1/r³', 'is_correct' => true],
                            ['choice_text' => Approximately as 1/r', 'is_correct' => false],
                            ['choice_text' => Approximately as 1/r²', 'is_correct' => false],
                            ['choice_text' => Approximately as r²', 'is_correct' => false],
                        ],
                        'explanation' => 'A tidal gradient involves the spatial derivative of g ∝ 1/r², giving a characteristic 1/r³ dependence.',
                    ],

                    [
                        'question' => 'Why can two nearby objects experience nearly the same gravitational acceleration but still have relative acceleration?',
                        'choices' => [
                            ['choice_text' => Their gravitational accelerations differ slightly because the field varies spatially', 'is_correct' => true],
                            ['choice_text' => Gravity acts only on one object', 'is_correct' => false],
                            ['choice_text' => Relative acceleration requires different masses', 'is_correct' => false],
                            ['choice_text' => Their accelerations must be exactly identical by Newton’s law', 'is_correct' => false],
                        ],
                        'explanation' => 'Tidal acceleration is the difference in gravitational acceleration across spatially separated points.',
                    ],

                    [
                        'question' => 'What is the principal physical origin of ocean tides?',
                        'choices' => [
                            ['choice_text' => Differential gravitational forces from the Moon, Sun and Earth’s rotation', 'is_correct' => true],
                            ['choice_text' => Atmospheric pressure alone', 'is_correct' => false],
                            ['choice_text' => Earth’s magnetic field alone', 'is_correct' => false],
                            ['choice_text' => Uniform gravity acting everywhere identically', 'is_correct' => false],
                        ],
                        'explanation' => 'Tides arise mainly from differential lunar and solar gravity together with the rotating Earth-Moon system.',
                    ],

                    [
                        'question' => 'Why are there approximately two high-tide regions in the simplest equilibrium tidal model?',
                        'choices' => [
                            ['choice_text' => Differential gravity creates one bulge toward the Moon and another on the opposite side', 'is_correct' => true],
                            ['choice_text' => The Moon pushes ocean water in only one direction', 'is_correct' => false],
                            ['choice_text' => Earth has two gravitational centers', 'is_correct' => false],
                            ['choice_text' => The Sun removes one of the tides', 'is_correct' => false],
                        ],
                        'explanation' => 'The simplified equilibrium model produces paired tidal bulges along the Earth-Moon line.',
                    ],

                    [
                        'question' => 'Why are tidal forces important in astrophysics beyond ocean tides?',
                        'choices' => [
                            ['choice_text' => They can deform stars, disrupt satellites and shape the evolution of binary systems', 'is_correct' => true],
                            ['choice_text' => They only affect liquid oceans', 'is_correct' => false],
                            ['choice_text' => Tidal effects disappear in vacuum', 'is_correct' => false],
                            ['choice_text' => They affect only atmospheric pressure', 'is_correct' => false],
                        ],
                        'explanation' => 'Tidal interactions are important throughout gravitational astrophysics.',
                    ],

                    [
                        'question' => 'What happens to tidal effects when the source-body distance is doubled, approximately?',
                        'choices' => [
                            ['choice_text' => 'They decrease by a factor of 8', 'is_correct' => true],
                            ['choice_text' => 'They decrease by a factor of 2', 'is_correct' => false],
                            ['choice_text' => 'They decrease by a factor of 4', 'is_correct' => false],
                            ['choice_text' => 'They increase by a factor of 8', 'is_correct' => false],
                        ],
                        'explanation' => 'For the simple tidal scaling Δg ∝ 1/r³, doubling distance gives a factor of 1/8.',
                    ],

                    [
                        'question' => 'Why can tidal forces become destructive near compact massive objects?',
                        'choice_text' => 'The gravitational field can change extremely rapidly over the size of an extended object, creating very large differential accelerations.',
                    ],

                    [
                        'question' => 'Why is the gravitational gradient a more direct measure of tidal effects than the gravitational field itself?',
                        'choices' => [
                            ['choice_text' => Tides depend on how rapidly gravitational acceleration changes across space', 'is_correct' => true],
                            ['choice_text' => Tides depend only on the absolute value of g', 'is_correct' => false],
                            ['choice_text' => The gravitational field has no direction', 'is_correct' => false],
                            ['choice_text' => Gradients are unrelated to differential acceleration', 'is_correct' => false],
                        ],
                        'explanation' => 'The spatial derivative of the gravitational field determines the relative acceleration across an extended body.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 6 — Two-Body Gravitational Dynamics
            // ============================================================

            [
                'title' => 'Two-Body Gravitational Dynamics',
                'description' => 'Advanced treatment of relative motion, reduced mass and center-of-mass dynamics.',
                'questions' => [

                    [
                        'question' => 'Why can the Newtonian two-body problem be reduced to an equivalent one-body problem?',
                        'choices' => [
                            ['choice_text' => The center-of-mass motion separates and the relative motion uses the reduced mass', 'is_correct' => true],
                            ['choice_text' => 'One body is assumed to have zero mass', 'is_correct' => false],
                            ['choice_text' => Gravity acts on only one body', 'is_correct' => false],
                            ['choice_text' => Both bodies always have identical velocities', 'is_correct' => false],
                        ],
                        'explanation' => 'The two-body equations separate into center-of-mass translation and relative motion with reduced mass.',
                    ],

                    [
                        'question' => 'What is the reduced mass of two bodies m1 and m2?',
                        'choices' => [
                            ['choice_text' => 'μ = m1m2/(m1 + m2)', 'is_correct' => true],
                            ['choice_text' => 'μ = m1 + m2', 'is_correct' => false],
                            ['choice_text' => 'μ = m1 - m2', 'is_correct' => false],
                            ['choice_text' => 'μ = m1m2/(m1 - m2)', 'is_correct' => false],
                        ],
                        'explanation' => 'The reduced mass is μ = m1m2/(m1 + m2).',
                    ],

                    [
                        'question' => 'Why is the center of mass useful in an isolated two-body gravitational system?',
                        'choices' => [
                            ['choice_text' => The center of mass moves uniformly because the net external force is zero', 'is_correct' => true],
                            ['choice_text' => The center of mass is always stationary', 'is_correct' => false],
                            ['choice_text' => The center of mass experiences only internal forces as external forces', 'is_correct' => false],
                            ['choice_text' => The center of mass removes gravitational interaction', 'is_correct' => false],
                        ],
                        'explanation' => 'Internal forces cancel in the center-of-mass equation for an isolated system.',
                    ],

                    [
                        'question' => 'What happens to the reduced mass when one body is much more massive than the other?',
                        'choices' => [
                            ['choice_text' => 'It approaches the mass of the lighter body', 'is_correct' => true],
                            ['choice_text' => 'It approaches the larger mass', 'is_correct' => false],
                            ['choice_text' => 'It becomes zero', 'is_correct' => false],
                            ['choice_text' => 'It becomes the sum of the two masses', 'is_correct' => false],
                        ],
                        'explanation' => 'If m2 >> m1, then μ ≈ m1.',
                    ],

                    [
                        'question' => 'Why is the relative coordinate r = r1 - r2 useful?',
                        'choices' => [
                            ['choice_text' => 'It isolates the separation and relative motion governed by the mutual gravitational interaction', 'is_correct' => true],
                            ['choice_text' => 'It eliminates all positions from the problem', 'is_correct' => false],
                            ['choice_text' => 'It makes the masses equal', 'is_correct' => false],
                            ['choice_text' => 'It removes angular momentum', 'is_correct' => false],
                        ],
                        'explanation' => 'The relative coordinate reduces the mutual interaction to an effective one-particle problem.',
                    ],

                    [
                        'question' => 'What gravitational parameter governs the relative two-body orbit?',
                        'choices' => [
                            ['choice_text' => 'G(m1 + m2)', 'is_correct' => true],
                            ['choice_text' => 'G(m1 - m2)', 'is_correct' => false],
                            ['choice_text' => 'Gm1m2', 'is_correct' => false],
                            ['choice_text' => 'G/(m1 + m2)', 'is_correct' => false],
                        ],
                        'explanation' => 'The relative equation has μ r̈ = -Gm1m2 r/r³, leading to r̈ = -G(m1 + m2)r/r³.',
                    ],

                    [
                        'question' => 'Why does the total angular momentum of an isolated two-body system remain constant?',
                        'choice_text' => 'The mutual gravitational force is internal and central, so it produces no net external torque on the system.',
                    ],

                    [
                        'question' => 'For an isolated two-body system, what is the total linear momentum?',
                        'choices' => [
                            ['choice_text' => 'Constant', 'is_correct' => true],
                            ['choice_text' => 'Always zero regardless of reference frame', 'is_correct' => false],
                            ['choice_text' => 'Always increasing', 'is_correct' => false],
                            ['choice_text' => 'Dependent only on gravitational potential energy', 'is_correct' => false],
                        ],
                        'explanation' => 'Zero net external force implies constant total linear momentum.',
                    ],

                    [
                        'question' => 'Why does treating one object as fixed become a good approximation when its mass is much larger?',
                        'choices' => [
                            ['choice_text' => The center of mass lies very close to the massive body and its recoil is relatively small', 'is_correct' => true],
                            ['choice_text' => Gravity stops acting on the massive body', 'is_correct' => false],
                            ['choice_text' => The lighter object loses its mass', 'is_correct' => false],
                            ['choice_text' => The two-body problem becomes exactly one-body physically', 'is_correct' => false],
                        ],
                        'explanation' => 'The finite mass of the heavier body still matters in principle, but its motion can be negligible in many applications.',
                    ],

                    [
                        'question' => 'Why is the two-body reduction fundamental to celestial mechanics?',
                        'choices' => [
                            ['choice_text' => Many planetary and binary-system problems can be expressed in terms of relative Keplerian motion plus center-of-mass motion', 'is_correct' => true],
                            ['choice_text' => It removes all gravitational interactions', 'is_correct' => false],
                            ['choice_text' => It applies only to objects with equal mass', 'is_correct' => false],
                            ['choice_text' => It assumes the bodies are electrically neutral', 'is_correct' => false],
                        ],
                        'explanation' => 'The reduction provides the basic mathematical framework for ideal gravitational two-body systems.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 7 — Gravitational Dynamics and Conservation Laws
            // ============================================================

            [
                'title' => 'Gravitational Dynamics and Conservation Laws',
                'description' => 'Advanced integration of energy, momentum and angular momentum in gravitational systems.',
                'questions' => [

                    [
                        'question' => 'Which quantities are conserved in an isolated Newtonian gravitational two-body system?',
                        'choices' => [
                            ['choice_text' => 'Total energy, total linear momentum and total angular momentum', 'is_correct' => true],
                            ['choice_text' => 'Only kinetic energy', 'is_correct' => false],
                            ['choice_text' => 'Only potential energy', 'is_correct' => false],
                            ['choice_text' => 'Only angular velocity', 'is_correct' => false],
                        ],
                        'explanation' => 'The isolated system has translational, rotational and time-translation symmetries corresponding to these conservation laws.',
                    ],

                    [
                        'question' => 'Why is angular momentum conservation particularly important for central gravitational motion?',
                        'choices' => [
                            ['choice_text' => 'It restricts the motion to a plane and helps determine orbital speed changes', 'is_correct' => true],
                            ['choice_text' => 'It forces every orbit to be circular', 'is_correct' => false],
                            ['choice_text' => 'It eliminates gravitational potential energy', 'is_correct' => false],
                            ['choice_text' => 'It makes the radius constant', 'is_correct' => false],
                        ],
                        'explanation' => 'Conserved angular momentum fixes the orbital plane and constrains radial and angular motion.',
                    ],

                    [
                        'question' => 'What is the effective potential for a particle of mass μ in a central potential V(r)?',
                        'choices' => [
                            ['choice_text' => 'V_eff = V(r) + L²/(2μr²)', 'is_correct' => true],
                            ['choice_text' => 'V_eff = V(r) - L²/(2μr²)', 'is_correct' => false],
                            ['choice_text' => 'V_eff = V(r) + μr²/2', 'is_correct' => false],
                            ['choice_text' => 'V_eff = L/(μr)', 'is_correct' => false],
                        ],
                        'explanation' => 'Angular motion contributes the effective centrifugal term L²/(2μr²).',
                    ],

                    [
                        'question' => 'What condition gives a circular orbit in the effective-potential description?',
                        'choices' => [
                            ['choice_text' => 'dV_eff/dr = 0', 'is_correct' => true],
                            ['choice_text' => 'V_eff = 0', 'is_correct' => false],
                            ['choice_text' => 'L = 0', 'is_correct' => false],
                            ['choice_text' => 'd²V_eff/dr² = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'The radial coordinate is stationary when the effective force vanishes.',
                    ],

                    [
                        'question' => 'What condition gives radial stability of a circular orbit?',
                        'choices' => [
                            ['choice_text' => 'd²V_eff/dr² > 0', 'is_correct' => true],
                            ['choice_text' => 'd²V_eff/dr² < 0', 'is_correct' => false],
                            ['choice_text' => 'V_eff = 0', 'is_correct' => false],
                            ['choice_text' => 'L = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'A local minimum of effective potential corresponds to stable radial perturbations.',
                    ],

                    [
                        'question' => 'Why does conservation of total energy not necessarily imply constant kinetic energy?',
                        'choices' => [
                            ['choice_text' => Kinetic and potential energies can exchange while their sum remains constant', 'is_correct' => true],
                            ['choice_text' => 'Potential energy cannot change', 'is_correct' => false],
                            ['choice_text' => 'Energy conservation applies only to kinetic energy', 'is_correct' => false],
                            ['choice_text' => 'Kinetic energy is always zero in conservative systems', 'is_correct' => false],
                        ],
                        'explanation' => 'In gravitational systems, kinetic and potential energies generally vary while total energy remains constant.',
                    ],

                    [
                        'question' => 'Why is the virial theorem useful in gravitational systems?',
                        'choices' => [
                            ['choice_text' => It relates time-averaged kinetic and potential energies for certain bound systems', 'is_correct' => true],
                            ['choice_text' => 'It states that total energy is always zero', 'is_correct' => false],
                            ['choice_text' => 'It eliminates gravity from the equations', 'is_correct' => false],
                            ['choice_text' => 'It applies only to circular motion', 'is_correct' => false],
                        ],
                        'explanation' => 'For bound systems under suitable potentials, the virial theorem relates long-time averages of kinetic and potential energy.',
                    ],

                    [
                        'question' => 'For a bound Newtonian gravitational system in a stable orbit, what is generally true about total energy with U(∞) = 0?',
                        'choices' => [
                            ['choice_text' => 'E < 0', 'is_correct' => true],
                            ['choice_text' => 'E > 0', 'is_correct' => false],
                            ['choice_text' => 'E = 1', 'is_correct' => false],
                            ['choice_text' => 'E must always be zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Negative total energy indicates a gravitationally bound state.',
                    ],

                    [
                        'question' => 'Why does the total mechanical energy of an isolated gravitational system remain constant in Newtonian mechanics?',
                        'choice_text' => 'Gravity is conservative, so the work it performs can be represented by a potential energy and no external work changes the total mechanical energy.',
                    ],

                    [
                        'question' => 'Why are conservation laws often more powerful than direct force integration for complex orbital problems?',
                        'choices' => [
                            ['choice_text' => 'They reduce the number of independent variables and provide global constraints on the motion', 'is_correct' => true],
                            ['choice_text' => 'They eliminate all need for differential equations', 'is_correct' => false],
                            ['choice_text' => 'They apply only to circular orbits', 'is_correct' => false],
                            ['choice_text' => 'They determine every trajectory without initial conditions', 'is_correct' => false],
                        ],
                        'explanation' => 'Conservation laws often provide first integrals and strong restrictions on possible trajectories.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 8 — Integrated Advanced Gravitation
            // ============================================================

            [
                'title' => 'Integrated Advanced Gravitation',
                'description' => 'Comprehensive advanced problems combining fields, potential, orbital mechanics, escape, tides and two-body dynamics.',
                'questions' => [

                    [
                        'question' => 'A satellite moves from a circular orbit of radius R to one of radius 4R around the same planet. How does its orbital speed change?',
                        'choices' => [
                            ['choice_text' => 'It becomes half as large', 'is_correct' => true],
                            ['choice_text' => 'It becomes one quarter as large', 'is_correct' => false],
                            ['choice_text' => 'It doubles', 'is_correct' => false],
                            ['choice_text' => 'It remains unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Since v = √(GM/r), increasing radius by 4 divides the speed by 2.',
                    ],

                    [
                        'question' => 'The same satellite moves from radius R to 4R. How does its circular orbital period change?',
                        'choices' => [
                            ['choice_text' => 'It becomes 8 times longer', 'is_correct' => true],
                            ['choice_text' => 'It becomes 4 times longer', 'is_correct' => false],
                            ['choice_text' => 'It doubles', 'is_correct' => false],
                            ['choice_text' => 'It becomes 2 times shorter', 'is_correct' => false],
                        ],
                        'explanation' => 'Kepler’s third law gives T ∝ r^(3/2), so 4^(3/2) = 8.',
                    ],

                    [
                        'question' => 'What is the escape speed from a radius where the circular orbital speed is 7 km/s?',
                        'choices' => [
                            ['choice_text' => 'Approximately 9,90 km/s', 'is_correct' => true],
                            ['choice_text' => '14 km/s', 'is_correct' => false],
                            ['choice_text' => '3,50 km/s', 'is_correct' => false],
                            ['choice_text' => '49 km/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Escape speed is √2 times circular speed: 7√2 ≈ 9,90 km/s.',
                    ],

                    [
                        'question' => 'A planet has mass 9M and radius 3R compared with another planet of mass M and radius R. What is the ratio of their surface gravitational fields?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '1/3', 'is_correct' => false],
                        ],
                        'explanation' => 'g ∝ M/R², so (9M)/(3R)² = 1 × M/R².',
                    ],

                    [
                        'question' => 'A point mass produces gravitational potential V at radius R. At radius 5R, what is the potential?',
                        'choices' => [
                            ['choice_text' => 'V/5', 'is_correct' => true],
                            ['choice_text' => 'V/25', 'is_correct' => false],
                            ['choice_text' => '5V', 'is_correct' => false],
                            ['choice_text' => '25V', 'is_correct' => false],
                        ],
                        'explanation' => 'Since V ∝ 1/r, increasing the radius by 5 reduces the potential magnitude by 5.',
                    ],

                    [
                        'question' => 'Why can two points have the same gravitational potential but different gravitational field vectors in a non-spherically symmetric system?',
                        'choices' => [
                            ['choice_text' => The potential is scalar, while its gradient can differ in direction at different points on the same equipotential', 'is_correct' => true],
                            ['choice_text' => Field and potential are identical quantities', 'is_correct' => false],
                            ['choice_text' => Equipotential surfaces require zero field everywhere', 'is_correct' => false],
                            ['choice_text' => Potential is always vectorial', 'is_correct' => false],
                        ],
                        'explanation' => 'Points on the same equipotential can have different field directions because the local normal to the surface changes.',
                    ],

                    [
                        'question' => 'Why does a prograde impulsive maneuver from a circular orbit increase the spacecraft’s apogee in the ideal two-body model?',
                        'choices' => [
                            ['choice_text' => It increases orbital energy while preserving the instantaneous position, producing a higher-energy elliptical trajectory', 'is_correct' => true],
                            ['choice_text' => 'It decreases orbital energy', 'is_correct' => false],
                            ['choice_text' => 'It eliminates angular momentum', 'is_correct' => false],
                            ['choice_text' => 'It makes gravity vanish temporarily', 'is_correct' => false],
                        ],
                        'explanation' => 'A prograde impulse raises the orbit’s specific energy and places the spacecraft on an ellipse with a higher apoapsis.',
                    ],

                    [
                        'question' => 'Why are tidal effects more sensitive to distance than ordinary gravitational acceleration?',
                        'choices' => [
                            ['choice_text' => The gravitational field scales roughly as 1/r² while its spatial gradient scales roughly as 1/r³', 'is_correct' => true],
                            ['choice_text' => Tides are independent of distance', 'is_correct' => false],
                            ['choice_text' => Tidal acceleration scales as 1/r', 'is_correct' => false],
                            ['choice_text' => Ordinary gravity scales as 1/r³', 'is_correct' => false],
                        ],
                        'explanation' => 'Tidal effects involve spatial derivatives of the gravitational field and therefore fall off more rapidly with distance.',
                    ],

                    [
                        'question' => 'In an isolated two-body gravitational system, why is the center-of-mass motion separable from the relative motion?',
                        'choices' => [
                            ['choice_text' => Internal gravitational forces cancel in the center-of-mass equation', 'is_correct' => true],
                            ['choice_text' => The relative coordinate has zero mass', 'is_correct' => false],
                            ['choice_text' => Gravity acts only on the center of mass', 'is_correct' => false],
                            ['choice_text' => Both bodies remain fixed relative to each other', 'is_correct' => false],
                        ],
                        'explanation' => 'The internal force pair does not affect total momentum, allowing separation of center-of-mass and relative dynamics.',
                    ],

                    [
                        'question' => 'Why is the combination of gravitational field, potential, angular momentum and energy so powerful in advanced gravitation?',
                        'choices' => [
                            ['choice_text' => These complementary quantities constrain both local forces and global orbital behavior', 'is_correct' => true],
                            ['choice_text' => They are interchangeable representations with identical information in every context', 'is_correct' => false],
                            ['choice_text' => They eliminate all numerical modeling', 'is_correct' => false],
                            ['choice_text' => They apply only to circular satellite orbits', 'is_correct' => false],
                        ],
                        'explanation' => 'Field, potential and conservation laws provide complementary local and global descriptions of gravitational dynamics.',
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
                    'difficulty' => 'Advanced',
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

                // Randomize choices so the correct answer position
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