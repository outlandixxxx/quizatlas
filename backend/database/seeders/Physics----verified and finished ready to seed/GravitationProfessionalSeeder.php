<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class GravitationProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'gravitation')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Advanced Gravitational Theory
            // ============================================================

            [
                'title' => 'Advanced Gravitational Theory',
                'description' => 'Professional treatment of Newtonian gravity, gravitational fields, potentials and symmetry.',
                'questions' => [

                    [
                        'question' => 'Which equation represents Newton’s law of universal gravitation in vector form for two point masses?',
                        'choices' => [
                            ['choice_text' => 'F12 = -Gm1m2 (r1 - r2)/|r1 - r2|³', 'is_correct' => true],
                            ['choice_text' => 'F12 = Gm1m2 (r1 - r2)/|r1 - r2|²', 'is_correct' => false],
                            ['choice_text' => 'F12 = -Gm1m2 (r1 + r2)', 'is_correct' => false],
                            ['choice_text' => 'F12 = G(m1 + m2)/|r1 - r2|', 'is_correct' => false],
                        ],
                        'explanation' => 'The vector inverse-square law can be written using the relative position vector with the appropriate negative direction.',
                    ],

                    [
                        'question' => 'Why is Newtonian gravity described by a scalar potential field?',
                        'choices' => [
                            ['choice_text' => 'The gravitational field is conservative and can be expressed as the negative gradient of a scalar potential', 'is_correct' => true],
                            ['choice_text' => 'Gravity has no direction', 'is_correct' => false],
                            ['choice_text' => 'Potential is identical to force', 'is_correct' => false],
                            ['choice_text' => 'Only electromagnetic interactions admit scalar potentials', 'is_correct' => false],
                        ],
                        'explanation' => 'For Newtonian gravity, g = -∇V, where V is the gravitational potential per unit mass.',
                    ],

                    [
                        'question' => 'What differential equation does the gravitational potential satisfy in a region containing mass density ρ?',
                        'choices' => [
                            ['choice_text' => ∇²V = 4πGρ', 'is_correct' => true],
                            ['choice_text' => ∇²V = -4πGρ', 'is_correct' => false],
                            ['choice_text' => ∇V = 4πGρ', 'is_correct' => false],
                            ['choice_text' => ∇²V = G/ρ', 'is_correct' => false],
                        ],
                        'explanation' => 'With g = -∇V and ∇·g = -4πGρ, Poisson’s equation becomes ∇²V = 4πGρ.',
                    ],

                    [
                        'question' => 'What equation applies in a vacuum region where there is no mass density?',
                        'choices' => [
                            ['choice_text' => '∇²V = 0', 'is_correct' => true],
                            ['choice_text' => '∇²V = 4πG', 'is_correct' => false],
                            ['choice_text' => '∇V = 0', 'is_correct' => false],
                            ['choice_text' => 'V = 0 necessarily', 'is_correct' => false],
                        ],
                        'explanation' => 'In a source-free region, Poisson’s equation reduces to Laplace’s equation.',
                    ],

                    [
                        'question' => 'Why is the gravitational potential conventionally chosen to vanish at infinity for isolated Newtonian systems?',
                        'choices' => [
                            ['choice_text' => The point-mass potential approaches zero as separation tends to infinity', 'is_correct' => true],
                            ['choice_text' => Infinity is the only physically meaningful reference position', 'is_correct' => false],
                            ['choice_text' => Potential must always be positive', 'is_correct' => false],
                            ['choice_text' => Gravity becomes repulsive at infinity', 'is_correct' => false],
                        ],
                        'explanation' => 'For an isolated source, V = -GM/r naturally tends to zero as r approaches infinity.',
                    ],

                    [
                        'question' => 'Why does the gravitational potential of a point mass diverge negatively as r approaches zero in Newtonian theory?',
                        'choices' => [
                            ['choice_text' => The ideal point-mass model gives V = -GM/r, which has no finite limit at r = 0', 'is_correct' => true],
                            ['choice_text' => Gravity becomes exactly zero at the center', 'is_correct' => false],
                            ['choice_text' => Potential is always finite for point masses', 'is_correct' => false],
                            ['choice_text' => The gravitational constant becomes infinite', 'is_correct' => false],
                        ],
                        'explanation' => 'The Newtonian point-source idealization contains a mathematical singularity at the source position.',
                    ],

                    [
                        'question' => 'Why does spherical symmetry reduce the gravitational field outside a body to a radial function?',
                        'choices' => [
                            ['choice_text' => Symmetry eliminates any preferred angular direction and leaves only dependence on radius', 'is_correct' => true],
                            ['choice_text' => 'Gravity is always radial regardless of source geometry', 'is_correct' => false],
                            ['choice_text' => 'The body must have zero density', 'is_correct' => false],
                            ['choice_text' => 'Angular coordinates cease to exist', 'is_correct' => false],
                        ],
                        'explanation' => 'Spherical symmetry requires the field to be radial and depend only on r.',
                    ],

                    [
                        'question' => 'What is the gravitational field corresponding to V(r) = -GM/r?',
                        'choices' => [
                            ['choice_text' => 'g(r) = -GM/r² r̂', 'is_correct' => true],
                            ['choice_text' => 'g(r) = GM/r r̂', 'is_correct' => false],
                            ['choice_text' => 'g(r) = GM/r² r̂', 'is_correct' => false],
                            ['choice_text' => 'g(r) = -GM/r r̂', 'is_correct' => false],
                        ],
                        'explanation' => 'Taking the negative radial gradient of V gives g = -GM/r² r̂.',
                    ],

                    [
                        'question' => 'Why is the gravitational potential additive for multiple source masses?',
                        'choices' => [
                            ['choice_text' => Newtonian gravity obeys linear superposition, so scalar potential contributions can be summed', 'is_correct' => true],
                            ['choice_text' => Potential is nonlinear by definition', 'is_correct' => false],
                            ['choice_text' => Source masses never interact gravitationally', 'is_correct' => false],
                            ['choice_text' => Only one source may exist in Newtonian gravity', 'is_correct' => false],
                        ],
                        'explanation' => 'The total Newtonian potential is the scalar sum of the individual source potentials.',
                    ],

                    [
                        'question' => 'Why is the gravitational field of an extended source generally obtained by integration rather than simply applying GM/r² to the total mass?',
                        'choices' => [
                            ['choice_text' => The direction and distance of contributions vary throughout the source, except in special symmetric cases', 'is_correct' => true],
                            ['choice_text' => Total mass is irrelevant to gravity', 'is_correct' => false],
                            ['choice_text' => Gravity is not additive', 'is_correct' => false],
                            ['choice_text' => Newton’s law applies only to massless objects', 'is_correct' => false],
                        ],
                        'explanation' => 'For arbitrary extended mass distributions, contributions from each mass element must be integrated vectorially.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 2 — Poisson and Laplace Equations
            // ============================================================

            [
                'title' => 'Poisson and Laplace Equations',
                'description' => 'Professional analysis of the field equations of Newtonian gravitational potential theory.',
                'questions' => [

                    [
                        'question' => 'Which equation relates the gravitational potential to mass density in Newtonian gravity?',
                        'choices' => [
                            ['choice_text' => '∇²V = 4πGρ', 'is_correct' => true],
                            ['choice_text' => '∇²V = -4πGρ', 'is_correct' => false],
                            ['choice_text' => '∇V = Gρ', 'is_correct' => false],
                            ['choice_text' => '∇·V = 4πGρ', 'is_correct' => false],
                        ],
                        'explanation' => 'Poisson’s equation follows from the divergence of the Newtonian gravitational field.',
                    ],

                    [
                        'question' => 'What equation does the potential satisfy in a source-free region?',
                        'choices' => [
                            ['choice_text' => '∇²V = 0', 'is_correct' => true],
                            ['choice_text' => '∇²V = ρ', 'is_correct' => false],
                            ['choice_text' => '∇V = 0 everywhere', 'is_correct' => false],
                            ['choice_text' => 'V = 0 everywhere', 'is_correct' => false],
                        ],
                        'explanation' => 'When ρ = 0, Poisson’s equation reduces to Laplace’s equation.',
                    ],

                    [
                        'question' => 'Why is the Laplacian of gravitational potential important physically?',
                        'choices' => [
                            ['choice_text' => It encodes the local source density of the gravitational field', 'is_correct' => true],
                            ['choice_text' => 'It directly gives the velocity of a test particle', 'is_correct' => false],
                            ['choice_text' => 'It measures temperature', 'is_correct' => false],
                            ['choice_text' => 'It determines mass without boundary conditions in every case', 'is_correct' => false],
                        ],
                        'explanation' => 'The Laplacian is directly related to the local mass density through Poisson’s equation.',
                    ],

                    [
                        'question' => 'What does Gauss’s law for Newtonian gravity state?',
                        'choices' => [
                            ['choice_text' => 'The flux of gravitational field through a closed surface is -4πG times the enclosed mass', 'is_correct' => true],
                            ['choice_text' => 'The flux is always zero', 'is_correct' => false],
                            ['choice_text' => 'The flux equals the enclosed volume', 'is_correct' => false],
                            ['choice_text' => 'The flux is proportional only to surface area', 'is_correct' => false],
                        ],
                        'explanation' => 'For gravitational field g, ∮g·dA = -4πGM_enclosed.',
                    ],

                    [
                        'question' => 'Why is Gauss’s law particularly useful for highly symmetric gravitational systems?',
                        'choices' => [
                            ['choice_text' => Symmetry can make the field magnitude constant over a convenient Gaussian surface', 'is_correct' => true],
                            ['choice_text' => 'It eliminates mass density', 'is_correct' => false],
                            ['choice_text' => 'It applies only when gravity is zero', 'is_correct' => false],
                            ['choice_text' => 'It requires no symmetry at all for easy evaluation', 'is_correct' => false],
                        ],
                        'explanation' => 'Spherical, cylindrical or planar symmetries can simplify the flux integral dramatically.',
                    ],

                    [
                        'question' => 'For a spherical Gaussian surface enclosing mass M, what does Gauss’s law give for the exterior field magnitude?',
                        'choices' => [
                            ['choice_text' => 'g = GM/r²', 'is_correct' => true],
                            ['choice_text' => 'g = GM/r', 'is_correct' => false],
                            ['choice_text' => 'g = GMr²', 'is_correct' => false],
                            ['choice_text' => 'g = GM', 'is_correct' => false],
                        ],
                        'explanation' => 'The flux equation gives 4πr²g = 4πGM in magnitude.',
                    ],

                    [
                        'question' => 'Why can Gauss’s law be true without being computationally useful for an arbitrary mass distribution?',
                        'choices' => [
                            ['choice_text' => The flux relation is general, but extracting the local field may require symmetry or a detailed integral', 'is_correct' => true],
                            ['choice_text' => Gauss’s law applies only to spherical systems', 'is_correct' => false],
                            ['choice_text' => The law violates superposition', 'is_correct' => false],
                            ['choice_text' => The field is always known from total mass alone', 'is_correct' => false],
                        ],
                        'explanation' => 'The law is universal, but symmetry is what usually turns it into a simple field calculation.',
                    ],

                    [
                        'question' => 'What boundary condition is commonly imposed on the potential of an isolated finite mass distribution?',
                        'choices' => [
                            ['choice_text' => 'V → 0 as r → ∞', 'is_correct' => true],
                            ['choice_text' => 'V → ∞ as r → ∞', 'is_correct' => false],
                            ['choice_text' => 'V = 1 everywhere at infinity', 'is_correct' => false],
                            ['choice_text' => '∇V = 0 at every finite point', 'is_correct' => false],
                        ],
                        'explanation' => 'The standard isolated-system convention takes gravitational potential to vanish at infinity.',
                    ],

                    [
                        'question' => 'Why can Poisson’s equation be used to reconstruct source information from the potential?',
                        'choices' => [
                            ['choice_text' => The mass density is proportional to the Laplacian of the potential', 'is_correct' => true],
                            ['choice_text' => 'Potential contains no information about the source', 'is_correct' => false],
                            ['choice_text' => The source density equals the gradient of kinetic energy', 'is_correct' => false],
                            ['choice_text' => 'Potential is independent of mass distribution', 'is_correct' => false],
                        ],
                        'explanation' => 'From ∇²V = 4πGρ, knowing the potential determines the corresponding density where the equation applies.',
                    ],

                    [
                        'question' => 'Why do boundary conditions matter when solving Laplace’s or Poisson’s equation?',
                        'choices' => [
                            ['choice_text' => The differential equation alone generally admits multiple mathematical solutions', 'is_correct' => true],
                            ['choice_text' => 'Boundary conditions change the value of G', 'is_correct' => false],
                            ['choice_text' => 'They are needed only in quantum mechanics', 'is_correct' => false],
                            ['choice_text' => 'The potential is automatically unique without any additional information', 'is_correct' => false],
                        ],
                        'explanation' => 'Physical boundary conditions select the appropriate solution of the field equation.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 3 — Central Force Dynamics
            // ============================================================

            [
                'title' => 'Central Force Dynamics',
                'description' => 'Professional analysis of angular momentum, effective potential and central-force motion.',
                'questions' => [

                    [
                        'question' => 'Why is angular momentum conserved under a central gravitational force?',
                        'choices' => [
                            ['choice_text' => 'The torque about the force center is zero because the force is radial', 'is_correct' => true],
                            ['choice_text' => 'The force is always tangential', 'is_correct' => false],
                            ['choice_text' => 'The potential is constant', 'is_correct' => false],
                            ['choice_text' => 'The particle has zero velocity', 'is_correct' => false],
                        ],
                        'explanation' => 'For a central force F parallel to r, τ = r × F = 0.',
                    ],

                    [
                        'question' => 'Why is the motion under an ideal central force confined to a plane?',
                        'choices' => [
                            ['choice_text' => The angular momentum vector is conserved and remains perpendicular to the plane of motion', 'is_correct' => true],
                            ['choice_text' => 'The radial coordinate is constant', 'is_correct' => false],
                            ['choice_text' => 'The force has no magnitude', 'is_correct' => false],
                            ['choice_text' => 'Energy conservation forces one-dimensional motion', 'is_correct' => false],
                        ],
                        'explanation' => 'The constant angular momentum vector defines a fixed plane containing r and v.',
                    ],

                    [
                        'question' => 'What is the effective potential for a particle of reduced mass μ under a central potential V(r)?',
                        'choices' => [
                            ['choice_text' => 'V_eff(r) = V(r) + L²/(2μr²)', 'is_correct' => true],
                            ['choice_text' => 'V_eff(r) = V(r) - L²/(2μr²)', 'is_correct' => false],
                            ['choice_text' => 'V_eff(r) = V(r) + μr²/2', 'is_correct' => false],
                            ['choice_text' => 'V_eff(r) = L/(μr)', 'is_correct' => false],
                        ],
                        'explanation' => 'Angular momentum contributes an effective centrifugal potential in the radial equation.',
                    ],

                    [
                        'question' => 'What is the radial energy equation in a central-force problem?',
                        'choices' => [
                            ['choice_text' => 'E = 1/2 μ ṙ² + V_eff(r)', 'is_correct' => true],
                            ['choice_text' => 'E = μṙ + V(r)', 'is_correct' => false],
                            ['choice_text' => 'E = 1/2 μr² + V_eff', 'is_correct' => false],
                            ['choice_text' => 'E = L/ṙ + V', 'is_correct' => false],
                        ],
                        'explanation' => 'After eliminating angular motion through conserved L, the radial dynamics has this one-dimensional energy form.',
                    ],

                    [
                        'question' => 'What condition identifies a circular orbit in the effective-potential description?',
                        'choices' => [
                            ['choice_text' => 'dV_eff/dr = 0', 'is_correct' => true],
                            ['choice_text' => 'V_eff = 0', 'is_correct' => false],
                            ['choice_text' => 'L = 0', 'is_correct' => false],
                            ['choice_text' => 'dV_eff/dr = 1', 'is_correct' => false],
                        ],
                        'explanation' => 'A circular orbit occurs where the effective radial force vanishes.',
                    ],

                    [
                        'question' => 'What indicates stability of a circular orbit under small radial perturbations?',
                        'choices' => [
                            ['choice_text' => 'd²V_eff/dr² > 0 at the circular-orbit radius', 'is_correct' => true],
                            ['choice_text' => 'd²V_eff/dr² < 0', 'is_correct' => false],
                            ['choice_text' => 'dV_eff/dr ≠ 0', 'is_correct' => false],
                            ['choice_text' => 'L = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'A local minimum in effective potential provides a restoring radial force.',
                    ],

                    [
                        'question' => 'Why does a central force conserve areal velocity?',
                        'choices' => [
                            ['choice_text' => Zero torque implies constant angular momentum, which is proportional to areal velocity', 'is_correct' => true],
                            ['choice_text' => 'The radial distance never changes', 'is_correct' => false],
                            ['choice_text' => 'The orbital speed is always constant', 'is_correct' => false],
                            ['choice_text' => 'The force is perpendicular to velocity everywhere', 'is_correct' => false],
                        ],
                        'explanation' => 'For planar motion, dA/dt = L/(2μ), so conserved L gives constant areal velocity.',
                    ],

                    [
                        'question' => 'Why is the effective-potential method useful for classifying possible motions?',
                        'choices' => [
                            ['choice_text' => 'It identifies turning points and allowed radial regions from the condition E ≥ V_eff(r)', 'is_correct' => true],
                            ['choice_text' => 'It eliminates angular momentum', 'is_correct' => false],
                            ['choice_text' => 'It guarantees a circular orbit', 'is_correct' => false],
                            ['choice_text' => 'It applies only to non-conservative forces', 'is_correct' => false],
                        ],
                        'explanation' => 'The inequality E - V_eff ≥ 0 determines the radially accessible region.',
                    ],

                    [
                        'question' => 'Why does the inverse-square gravitational force produce conic-section trajectories?',
                        'choices' => [
                            ['choice_text' => The specific form of the central potential leads to a solvable orbit equation whose solutions are conics', 'is_correct' => true],
                            ['choice_text' => 'All central forces produce ellipses', 'is_correct' => false],
                            ['choice_text' => 'Gravity is not central', 'is_correct' => false],
                            ['choice_text' => 'The trajectory is determined only by the object’s mass', 'is_correct' => false],
                        ],
                        'explanation' => 'The Newtonian inverse-square law leads to Keplerian conic trajectories.',
                    ],

                    [
                        'question' => 'Why can a circular orbit be regarded as a stationary point of the effective potential?',
                        'choices' => [
                            ['choice_text' => The radial coordinate remains constant when the effective radial force vanishes', 'is_correct' => true],
                            ['choice_text' => 'The particle has zero angular velocity', 'is_correct' => false],
                            ['choice_text' => 'The total energy must vanish', 'is_correct' => false],
                            ['choice_text' => 'The potential must be infinite', 'is_correct' => false],
                        ],
                        'explanation' => 'A circular orbit has constant r, requiring dV_eff/dr = 0.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 4 — Keplerian Orbits and Orbital Elements
            // ============================================================

            [
                'title' => 'Keplerian Orbits and Orbital Elements',
                'description' => 'Professional treatment of elliptical orbits, orbital energy and Keplerian parameters.',
                'questions' => [

                    [
                        'question' => 'What does the semi-major axis a determine in a Keplerian orbit?',
                        'choices' => [
                            ['choice_text' => 'The total orbital energy and, for a fixed central mass, the orbital period', 'is_correct' => true],
                            ['choice_text' => 'Only orbital inclination', 'is_correct' => false],
                            ['choice_text' => 'Only the object’s mass', 'is_correct' => false],
                            ['choice_text' => 'Only the orbital plane orientation', 'is_correct' => false],
                        ],
                        'explanation' => 'For a fixed gravitational parameter, orbital energy depends on a and Kepler’s third law relates a to period.',
                    ],

                    [
                        'question' => 'What is the specific orbital energy of a bound Keplerian orbit with semi-major axis a?',
                        'choices' => [
                            ['choice_text' => 'ε = -GM/(2a)', 'is_correct' => true],
                            ['choice_text' => 'ε = GM/(2a)', 'is_correct' => false],
                            ['choice_text' => 'ε = -GM/a²', 'is_correct' => false],
                            ['choice_text' => 'ε = GM/a', 'is_correct' => false],
                        ],
                        'explanation' => 'The specific mechanical energy of any Keplerian ellipse is -GM/(2a).',
                    ],

                    [
                        'question' => 'What equation relates speed, radius and semi-major axis in a Keplerian orbit?',
                        'choices' => [
                            ['choice_text' => 'v² = GM(2/r - 1/a)', 'is_correct' => true],
                            ['choice_text' => 'v² = GM(r/a)', 'is_correct' => false],
                            ['choice_text' => 'v² = GM(1/r + 1/a)', 'is_correct' => false],
                            ['choice_text' => 'v² = GM(2a/r)', 'is_correct' => false],
                        ],
                        'explanation' => 'The vis-viva equation follows from conservation of orbital energy.',
                    ],

                    [
                        'question' => 'What happens to orbital speed along an elliptical orbit as r decreases?',
                        'choices' => [
                            ['choice_text' => 'Orbital speed increases', 'is_correct' => true],
                            ['choice_text' => 'Orbital speed decreases', 'is_correct' => false],
                            ['choice_text' => 'Orbital speed remains constant', 'is_correct' => false],
                            ['choice_text' => 'Orbital speed becomes zero', 'is_correct' => false],
                        ],
                        'explanation' => 'The vis-viva equation shows increasing speed as the orbital radius decreases for a fixed semi-major axis.',
                    ],

                    [
                        'question' => 'Why does the specific orbital energy depend only on semi-major axis and not directly on eccentricity?',
                        'choices' => [
                            ['choice_text' => Different ellipses with the same semi-major axis have the same total mechanical energy', 'is_correct' => true],
                            ['choice_text' => 'Eccentricity has no geometric meaning', 'is_correct' => false],
                            ['choice_text' => 'Angular momentum is independent of eccentricity', 'is_correct' => false],
                            ['choice_text' => 'All ellipses have the same shape', 'is_correct' => false],
                        ],
                        'explanation' => 'For Keplerian ellipses, energy is determined by a while eccentricity affects angular momentum and orbit shape.',
                    ],

                    [
                        'question' => 'What is the physical meaning of orbital eccentricity e = 0?',
                        'choices' => [
                            ['choice_text' => 'The orbit is circular', 'is_correct' => true],
                            ['choice_text' => 'The orbit is parabolic', 'is_correct' => false],
                            ['choice_text' => 'The orbit is hyperbolic', 'is_correct' => false],
                            ['choice_text' => 'The object is unbound', 'is_correct' => false],
                        ],
                        'explanation' => 'A Keplerian ellipse with zero eccentricity is a circle.',
                    ],

                    [
                        'question' => 'What orbital type corresponds to 0 < e < 1 for a bound Keplerian trajectory?',
                        'choices' => [
                            ['choice_text' => 'Ellipse', 'is_correct' => true],
                            ['choice_text' => 'Parabola', 'is_correct' => false],
                            ['choice_text' => 'Hyperbola', 'is_correct' => false],
                            ['choice_text' => 'Straight-line orbit only', 'is_correct' => false],
                        ],
                        'explanation' => 'Elliptical Keplerian orbits have eccentricity between zero and one.',
                    ],

                    [
                        'question' => 'What orbital type corresponds to e = 1 in the ideal Keplerian classification?',
                        'choices' => [
                            ['choice_text' => 'Parabola', 'is_correct' => true],
                            ['choice_text' => 'Circle', 'is_correct' => false],
                            ['choice_text' => 'Ellipse', 'is_correct' => false],
                            ['choice_text' => 'Hyperbola', 'is_correct' => false],
                        ],
                        'explanation' => 'The parabolic trajectory is the zero-energy escape boundary.',
                    ],

                    [
                        'question' => 'What orbital type corresponds to e > 1?',
                        'choices' => [
                            ['choice_text' => 'Hyperbola', 'is_correct' => true],
                            ['choice_text' => 'Circle', 'is_correct' => false],
                            ['choice_text' => 'Ellipse', 'is_correct' => false],
                            ['choice_text' => 'Parabola', 'is_correct' => false],
                        ],
                        'explanation' => 'Hyperbolic trajectories have eccentricity greater than one and positive orbital energy.',
                    ],

                    [
                        'question' => 'Why is the periapsis speed greater than apoapsis speed for an elliptical orbit?',
                        'choices' => [
                            ['choice_text' => Conservation of angular momentum and energy requires greater speed at smaller radius', 'is_correct' => true],
                            ['choice_text' => 'Gravity is weaker at periapsis', 'is_correct' => false],
                            ['choice_text' => 'Mass changes along the orbit', 'is_correct' => false],
                            ['choice_text' => 'The orbital period is shortest at apoapsis', 'is_correct' => false],
                        ],
                        'explanation' => 'Angular momentum conservation increases tangential speed as the radial distance decreases.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 5 — Tidal Gravity and Gravitational Gradients
            // ============================================================

            [
                'title' => 'Tidal Gravity and Gravitational Gradients',
                'description' => 'Professional treatment of tidal acceleration, gravitational gradients and astrophysical deformation.',
                'questions' => [

                    [
                        'question' => 'What mathematical quantity most directly characterizes a tidal gravitational effect?',
                        'choices' => [
                            ['choice_text' => 'The spatial gradient of the gravitational field', 'is_correct' => true],
                            ['choice_text' => 'The absolute value of the total mass only', 'is_correct' => false],
                            ['choice_text' => 'The gravitational potential’s arbitrary zero', 'is_correct' => false],
                            ['choice_text' => 'The temperature of the source body', 'is_correct' => false],
                        ],
                        'explanation' => 'Tidal effects arise from differences in gravitational acceleration over finite spatial separations.',
                    ],

                    [
                        'question' => 'For a point source, how does the leading magnitude of a tidal acceleration scale with distance?',
                        'choices' => [
                            ['choice_text' => 'Approximately as GMΔr/r³', 'is_correct' => true],
                            ['choice_text' => 'Approximately as GMΔr/r²', 'is_correct' => false],
                            ['choice_text' => 'Approximately as GM/r', 'is_correct' => false],
                            ['choice_text' => 'Approximately as GΔr/r', 'is_correct' => false],
                        ],
                        'explanation' => 'The field scales as 1/r² and its gradient scales as 1/r³, multiplied by the separation Δr.',
                    ],

                    [
                        'question' => 'Why can the tidal force on an extended object differ significantly from the net gravitational force on its center of mass?',
                        'choices' => [
                            ['choice_text' => The field is not uniform across the object, producing differential accelerations', 'is_correct' => true],
                            ['choice_text' => Gravity acts only on the center of mass', 'is_correct' => false],
                            ['choice_text' => Tidal effects require zero gravitational field', 'is_correct' => false],
                            ['choice_text' => The object must have zero mass', 'is_correct' => false],
                        ],
                        'explanation' => 'A nonuniform gravitational field produces relative accelerations among different parts of the body.',
                    ],

                    [
                        'question' => 'Why do tidal effects generally become stronger near a compact gravitating object?',
                        'choices' => [
                            ['choice_text' => The gravitational field changes more rapidly with position at small radius', 'is_correct' => true],
                            ['choice_text' => The gravitational constant increases nearby', 'is_correct' => false],
                            ['choice_text' => Mass always increases with decreasing radius', 'is_correct' => false],
                            ['choice_text' => Gravity becomes repulsive near compact bodies', 'is_correct' => false],
                        ],
                        'explanation' => 'The gravitational gradient grows strongly as the source distance decreases.',
                    ],

                    [
                        'question' => 'What determines the relative tidal acceleration between two nearby particles in a weak Newtonian field?',
                        'choices' => [
                            ['choice_text' => The gravitational-field gradient multiplied by their separation', 'is_correct' => true],
                            ['choice_text' => 'Only the total gravitational potential', 'is_correct' => false],
                            ['choice_text' => 'Only the mass of the test particles', 'is_correct' => false],
                            ['choice_text' => 'Their absolute velocities only', 'is_correct' => false],
                        ],
                        'explanation' => 'For sufficiently small separations, differential acceleration is approximated by the field gradient times separation.',
                    ],

                    [
                        'question' => 'Why can tidal forces stretch an object in one direction while compressing it in another?',
                        'choice_text' => 'The gravitational gradient is tensorial, producing different differential accelerations along different spatial directions.',
                    ],

                    [
                        'question' => 'Why are tidal interactions important in binary-star systems?',
                        'choices' => [
                            ['choice_text' => They can deform stars, exchange angular momentum and influence orbital evolution', 'is_correct' => true],
                            ['choice_text' => Tidal effects occur only in oceans', 'is_correct' => false],
                            ['choice_text' => Gravity between stars is absent', 'is_correct' => false],
                            ['choice_text' => Tidal forces cannot transfer angular momentum', 'is_correct' => false],
                        ],
                        'explanation' => 'Tidal deformation and dissipation can couple stellar spin with orbital motion.',
                    ],

                    [
                        'question' => 'Why does tidal influence usually fall off faster with distance than ordinary gravitational acceleration?',
                        'choices' => [
                            ['choice_text' => Tidal acceleration involves a spatial derivative of the field', 'is_correct' => true],
                            ['choice_text' => Gravity itself scales as 1/r³', 'is_correct' => false],
                            ['choice_text' => Tidal forces do not depend on distance', 'is_correct' => false],
                            ['choice_text' => The source mass decreases with distance', 'is_correct' => false],
                        ],
                        'explanation' => 'Differentiating the inverse-square field introduces an additional inverse power of distance.',
                    ],

                    [
                        'question' => 'Why is the Moon more important than the Sun for many local ocean-tide calculations despite the Sun’s greater mass?',
                        'choices' => [
                            ['choice_text' => The Moon’s much smaller distance produces a stronger local gravitational gradient', 'is_correct' => true],
                            ['choice_text' => The Moon is more massive', 'is_correct' => false],
                            ['choice_text' => The Sun has no gravitational field at Earth', 'is_correct' => false],
                            ['choice_text' => Ocean tides depend only on source mass', 'is_correct' => false],
                        ],
                        'explanation' => 'Tidal strength depends strongly on the gradient, which falls approximately as 1/r³.',
                    ],

                    [
                        'question' => 'Why is a tidal field naturally represented using more than one scalar quantity?',
                        'choices' => [
                            ['choice_text' => Differential acceleration depends on direction and therefore has tensorial structure', 'is_correct' => true],
                            ['choice_text' => Gravity is a scalar interaction', 'is_correct' => false],
                            ['choice_text' => Tidal effects are independent of geometry', 'is_correct' => false],
                            ['choice_text' => Only mass determines tidal response', 'is_correct' => false],
                        ],
                        'explanation' => 'The gradient of a vector field is generally a rank-two tensor.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 6 — Two-Body and N-Body Gravitation
            // ============================================================

            [
                'title' => 'Two-Body and N-Body Gravitation',
                'description' => 'Professional study of reduced mass, center-of-mass motion and limitations of exact gravitational solutions.',
                'questions' => [

                    [
                        'question' => 'What is the reduced mass of two bodies m1 and m2?',
                        'choices' => [
                            ['choice_text' => 'μ = m1m2/(m1 + m2)', 'is_correct' => true],
                            ['choice_text' => 'μ = m1 + m2', 'is_correct' => false],
                            ['choice_text' => 'μ = m1 - m2', 'is_correct' => false],
                            ['choice_text' => 'μ = m1m2/(m1 - m2)', 'is_correct' => false],
                        ],
                        'explanation' => 'The reduced mass transforms the two-body relative-motion problem into an equivalent one-body problem.',
                    ],

                    [
                        'question' => 'Why does the two-body gravitational problem admit an exact analytical reduction?',
                        'choices' => [
                            ['choice_text' => Translation to center-of-mass and relative coordinates separates the equations', 'is_correct' => true],
                            ['choice_text' => Gravity disappears in the center-of-mass frame', 'is_correct' => false],
                            ['choice_text' => One body is assumed massless', 'is_correct' => false],
                            ['choice_text' => Both bodies are always stationary', 'is_correct' => false],
                        ],
                        'explanation' => 'The mutual central interaction permits separation of center-of-mass motion and relative motion.',
                    ],

                    [
                        'question' => 'What governs the center-of-mass motion of an isolated two-body system?',
                        'choices' => [
                            ['choice_text' => Zero net external force, so the center of mass moves uniformly', 'is_correct' => true],
                            ['choice_text' => The internal gravitational force alone', 'is_correct' => false],
                            ['choice_text' => The relative coordinate only', 'is_correct' => false],
                            ['choice_text' => The orbital eccentricity', 'is_correct' => false],
                        ],
                        'explanation' => 'Internal forces cancel in the center-of-mass equation.',
                    ],

                    [
                        'question' => 'What gravitational parameter governs the relative orbital equation of two bodies?',
                        'choices' => [
                            ['choice_text' => 'G(m1 + m2)', 'is_correct' => true],
                            ['choice_text' => 'Gm1m2', 'is_correct' => false],
                            ['choice_text' => 'G(m1 - m2)', 'is_correct' => false],
                            ['choice_text' => 'G/(m1 + m2)', 'is_correct' => false],
                        ],
                        'explanation' => 'The relative coordinate satisfies r̈ = -G(m1 + m2)r/r³.',
                    ],

                    [
                        'question' => 'Why is the approximation of a fixed central mass often valid in planetary motion?',
                        'choices' => [
                            ['choice_text' => The central body is usually much more massive than the orbiting body, making its recoil comparatively small', 'is_correct' => true],
                            ['choice_text' => The central body has no inertia', 'is_correct' => false],
                            ['choice_text' => The orbiting body has no mass', 'is_correct' => false],
                            ['choice_text' => Newtonian gravity acts on only one body', 'is_correct' => false],
                        ],
                        'explanation' => 'When one mass dominates, the center-of-mass motion is small relative to the orbital motion.',
                    ],

                    [
                        'question' => 'Why is the general Newtonian N-body gravitational problem not analytically solvable in the same simple way as the two-body problem?',
                        'choices' => [
                            ['choice_text' => Mutual interactions couple the equations nonlinearly and generally prevent complete closed-form reduction', 'is_correct' => true],
                            ['choice_text' => Newtonian gravity stops applying for N > 2', 'is_correct' => false],
                            ['choice_text' => Energy is not conserved for N > 2', 'is_correct' => false],
                            ['choice_text' => The masses cannot be defined', 'is_correct' => false],
                        ],
                        'explanation' => 'The N-body system is coupled and generally requires numerical or approximation methods.',
                    ],

                    [
                        'question' => 'Why are numerical methods central to modern celestial mechanics?',
                        'choice_text' => 'Real systems involve multiple interacting bodies, perturbations, finite-size effects and other complications that generally prevent simple closed-form solutions.',
                    ],

                    [
                        'question' => 'Which quantity remains conserved for an isolated N-body Newtonian system?',
                        'choices' => [
                            ['choice_text' => 'Total linear momentum', 'is_correct' => true],
                            ['choice_text' => 'The velocity of each individual body', 'is_correct' => false],
                            ['choice_text' => 'The orbital radius of every body', 'is_correct' => false],
                            ['choice_text' => 'The kinetic energy of each body separately', 'is_correct' => false],
                        ],
                        'explanation' => 'In the absence of external forces, total linear momentum is conserved.',
                    ],

                    [
                        'question' => 'Why is total angular momentum also conserved in an isolated Newtonian gravitational N-body system?',
                        'choices' => [
                            ['choice_text' => Internal gravitational forces are central and therefore produce no net internal torque', 'is_correct' => true],
                            ['choice_text' => 'All individual angular momenta are separately constant', 'is_correct' => false],
                            ['choice_text' => 'Gravity is tangential', 'is_correct' => false],
                            ['choice_text' => 'Angular momentum is not affected by forces', 'is_correct' => false],
                        ],
                        'explanation' => 'The internal central forces satisfy action-reaction symmetry and produce zero net torque.',
                    ],

                    [
                        'question' => 'Why are hierarchical gravitational systems sometimes easier to model than general N-body systems?',
                        'choices' => [
                            ['choice_text' => Widely separated bodies can allow perturbative treatment around dominant two-body subsystems', 'is_correct' => true],
                            ['choice_text' => All interactions disappear', 'is_correct' => false],
                            ['choice_text' => Conservation laws no longer apply', 'is_correct' => false],
                            ['choice_text' => The bodies become massless', 'is_correct' => false],
                        ],
                        'explanation' => 'Hierarchical structure can make perturbation theory and reduced models effective.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 7 — Orbital Maneuvers and Energy
            // ============================================================

            [
                'title' => 'Orbital Maneuvers and Energy',
                'description' => 'Professional analysis of orbital-energy changes, impulsive maneuvers and transfer orbits.',
                'questions' => [

                    [
                        'question' => 'What happens to a spacecraft’s specific orbital energy when its speed is increased instantaneously at a fixed position?',
                        'choices' => [
                            ['choice_text' => 'Its specific orbital energy increases', 'is_correct' => true],
                            ['choice_text' => 'Its specific orbital energy always decreases', 'is_correct' => false],
                            ['choice_text' => 'It remains unchanged', 'is_correct' => false],
                            ['choice_text' => 'It becomes zero regardless of the burn magnitude', 'is_correct' => false],
                        ],
                        'explanation' => 'At fixed position the gravitational potential is unchanged, while kinetic energy increases.',
                    ],

                    [
                        'question' => 'Why does a prograde impulsive burn from a circular orbit raise the opposite side of the orbit?',
                        'choices' => [
                            ['choice_text' => It increases orbital energy and changes the spacecraft to a higher-energy elliptical trajectory', 'is_correct' => true],
                            ['choice_text' => 'It decreases angular momentum to zero', 'is_correct' => false],
                            ['choice_text' => 'It reverses gravity', 'is_correct' => false],
                            ['choice_text' => 'It reduces the spacecraft’s kinetic energy', 'is_correct' => false],
                        ],
                        'explanation' => 'A prograde burn raises orbital energy and creates an ellipse whose opposite apsis is higher.',
                    ],

                    [
                        'question' => 'What is the specific mechanical energy of a circular orbit at radius r?',
                        'choices' => [
                            ['choice_text' => 'ε = -GM/(2r)', 'is_correct' => true],
                            ['choice_text' => 'ε = GM/(2r)', 'is_correct' => false],
                            ['choice_text' => 'ε = -GM/r²', 'is_correct' => false],
                            ['choice_text' => 'ε = GM/r', 'is_correct' => false],
                        ],
                        'explanation' => 'For circular motion, kinetic and potential energies combine to ε = -GM/(2r).',
                    ],

                    [
                        'question' => 'Why does a higher circular orbit require a positive energy input relative to a lower circular orbit?',
                        'choices' => [
                            ['choice_text' => Its total orbital energy is less negative', 'is_correct' => true],
                            ['choice_text' => Its total orbital energy is more negative', 'is_correct' => false],
                            ['choice_text' => Gravity becomes infinite', 'is_correct' => false],
                            ['choice_text' => The orbit has zero kinetic energy', 'is_correct' => false],
                        ],
                        'explanation' => 'Since ε = -GM/(2r), increasing r raises the orbital energy toward zero.',
                    ],

                    [
                        'question' => 'What is the Hohmann transfer used for in ideal two-body orbital mechanics?',
                        'choices' => [
                            ['choice_text' => A minimum-ideal-impulse transfer between two coplanar circular orbits', 'is_correct' => true],
                            ['choice_text' => 'An escape trajectory from every planet', 'is_correct' => false],
                            ['choice_text' => 'A method for changing inclination with no velocity change', 'is_correct' => false],
                            ['choice_text' => 'A method that requires continuous thrust', 'is_correct' => false],
                        ],
                        'explanation' => 'The classical Hohmann transfer uses two tangential impulses and an elliptical transfer orbit.',
                    ],

                    [
                        'question' => 'Why does a retrograde burn from a circular orbit lower the opposite apsis?',
                        'choice_text' => 'It reduces the spacecraft’s orbital energy, producing a lower-energy elliptical trajectory whose opposite apsis lies at a smaller radius.',
                    ],

                    [
                        'question' => 'Why is a bi-elliptic transfer sometimes advantageous for sufficiently large orbital-radius ratios?',
                        'choices' => [
                            ['choice_text' => Its sequence of burns can require less total ideal Δv than a Hohmann transfer in certain radius regimes', 'is_correct' => true],
                            ['choice_text' => 'It always takes less time', 'is_correct' => false],
                            ['choice_text' => 'It eliminates gravity during transfer', 'is_correct' => false],
                            ['choice_text' => 'It requires no energy change', 'is_correct' => false],
                        ],
                        'explanation' => 'For sufficiently large radius ratios, a bi-elliptic transfer can become Δv-efficient despite longer transfer times.',
                    ],

                    [
                        'question' => 'Why is specific orbital energy especially convenient in spacecraft dynamics?',
                        'choices' => [
                            ['choice_text' => It removes dependence on spacecraft mass and directly classifies the Keplerian orbit', 'is_correct' => true],
                            ['choice_text' => 'It removes dependence on gravity', 'is_correct' => false],
                            ['choice_text' => 'It determines only spacecraft temperature', 'is_correct' => false],
                            ['choice_text' => 'It is not conserved in two-body motion', 'is_correct' => false],
                        ],
                        'explanation' => 'Specific energy is energy per unit mass and remains constant between impulsive events in ideal two-body motion.',
                    ],

                    [
                        'question' => 'What happens to specific orbital energy during an ideal impulsive burn?',
                        'choices' => [
                            ['choice_text' => 'It changes discontinuously because the velocity changes while position is approximately fixed', 'is_correct' => true],
                            ['choice_text' => 'It must remain continuous through every burn', 'is_correct' => false],
                            ['choice_text' => 'It becomes independent of velocity', 'is_correct' => false],
                            ['choice_text' => 'It always becomes zero', 'is_correct' => false],
                        ],
                        'explanation' => 'An impulsive maneuver changes kinetic energy abruptly while position remains effectively unchanged during the impulse.',
                    ],

                    [
                        'question' => 'Why is a detailed orbital maneuver analysis based on both energy and angular momentum?',
                        'choices' => [
                            ['choice_text' => Energy determines the orbit class and scale, while angular momentum constrains its geometry and radial behavior', 'is_correct' => true],
                            ['choice_text' => 'Energy alone determines every vector direction', 'is_correct' => false],
                            ['choice_text' => Angular momentum determines only mass', 'is_correct' => false],
                            ['choice_text' => The two quantities contain identical information', 'is_correct' => false],
                        ],
                        'explanation' => 'Together they provide strong constraints on orbital size, shape and motion.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 8 — Professional Integrated Gravitation
            // ============================================================

            [
                'title' => 'Professional Integrated Gravitation',
                'description' => 'Comprehensive professional-level problems combining potential theory, orbital mechanics, tides and computational gravitation.',
                'questions' => [

                    [
                        'question' => 'A point mass M generates potential V = -GM/r. What is the gravitational field magnitude at radius 2R compared with its value at R?',
                        'choices' => [
                            ['choice_text' => 'One quarter as large', 'is_correct' => true],
                            ['choice_text' => 'One half as large', 'is_correct' => false],
                            ['choice_text' => 'Twice as large', 'is_correct' => false],
                            ['choice_text' => 'Four times as large', 'is_correct' => false],
                        ],
                        'explanation' => 'Since g = GM/r², doubling the radius reduces the field by a factor of four.',
                    ],

                    [
                        'question' => 'A spacecraft has specific orbital energy ε = -GM/(4R). What is its semi-major axis?',
                        'choices' => [
                            ['choice_text' => 'a = 2R', 'is_correct' => true],
                            ['choice_text' => 'a = R/2', 'is_correct' => false],
                            ['choice_text' => 'a = 4R', 'is_correct' => false],
                            ['choice_text' => 'a = R', 'is_correct' => false],
                        ],
                        'explanation' => 'Using ε = -GM/(2a), equating to -GM/(4R) gives a = 2R.',
                    ],

                    [
                        'question' => 'For a Keplerian orbit with semi-major axis a and current radius r, what equation gives the speed?',
                        'choices' => [
                            ['choice_text' => 'v = √[GM(2/r - 1/a)]', 'is_correct' => true],
                            ['choice_text' => 'v = √[GM(1/r + 1/a)]', 'is_correct' => false],
                            ['choice_text' => 'v = GM(2/r - 1/a)', 'is_correct' => false],
                            ['choice_text' => 'v = √[GM(a/r)]', 'is_correct' => false],
                        ],
                        'explanation' => 'This is the vis-viva equation.',
                    ],

                    [
                        'question' => 'Why does the total mechanical energy of an isolated Newtonian gravitational system remain conserved?',
                        'choices' => [
                            ['choice_text' => Newtonian gravity is conservative and there is no external work on the isolated system', 'is_correct' => true],
                            ['choice_text' => 'Gravity creates no forces', 'is_correct' => false],
                            ['choice_text' => 'Kinetic energy is individually conserved', 'is_correct' => false],
                            ['choice_text' => 'Potential energy cannot change', 'is_correct' => false],
                        ],
                        'explanation' => 'The mutual gravitational interaction is conservative, so total mechanical energy remains constant.',
                    ],

                    [
                        'question' => 'Why is the N-body gravitational problem fundamentally more difficult than the two-body problem?',
                        'choices' => [
                            ['choice_text' => Each body interacts with multiple moving masses, producing a strongly coupled nonlinear system', 'is_correct' => true],
                            ['choice_text' => Newtonian gravity applies only to two objects', 'is_correct' => false],
                            ['choice_text' => Conservation laws disappear for N > 2', 'is_correct' => false],
                            ['choice_text' => Mass cannot be measured in N-body systems', 'is_correct' => false],
                        ],
                        'explanation' => 'Multiple mutual interactions prevent the exact separation available in the ideal two-body problem.',
                    ],

                    [
                        'question' => 'Why is symplectic numerical integration particularly relevant to long-term orbital simulations?',
                        'choices' => [
                            ['choice_text' => It preserves the geometric structure of Hamiltonian phase space and can control secular energy errors', 'is_correct' => true],
                            ['choice_text' => 'It makes all numerical errors vanish', 'is_correct' => false],
                            ['choice_text' => 'It is designed only for dissipative systems', 'is_correct' => false],
                            ['choice_text' => 'It guarantees exact position at every time step', 'is_correct' => false],
                        ],
                        'explanation' => 'Symplectic methods are well suited to preserving long-term qualitative behavior in Hamiltonian systems.',
                    ],

                    [
                        'question' => 'Why is the tidal tensor useful in professional gravitational modeling?',
                        'choices' => [
                            ['choice_text' => 'It describes the linearized differential acceleration between nearby particles', 'is_correct' => true],
                            ['choice_text' => 'It gives only the total mass', 'is_correct' => false],
                            ['choice_text' => 'It is the same as gravitational potential', 'is_correct' => false],
                            ['choice_text' => 'It applies only to electromagnetic fields', 'is_correct' => false],
                        ],
                        'explanation' => 'The Jacobian of the gravitational field determines first-order relative acceleration in a weak-field Newtonian setting.',
                    ],

                    [
                        'question' => 'Why can energy methods and field-equation methods complement each other in gravitational modeling?',
                        'choices' => [
                            ['choice_text' => Field equations determine the gravitational field and potential, while energy methods analyze the resulting motion and constraints', 'is_correct' => true],
                            ['choice_text' => They describe unrelated physical systems', 'is_correct' => false],
                            ['choice_text' => Energy cannot be defined in gravity', 'is_correct' => false],
                            ['choice_text' => Field equations replace conservation laws completely', 'is_correct' => false],
                        ],
                        'explanation' => 'Potential theory determines the interaction, while conserved quantities and effective potentials characterize dynamics.',
                    ],

                    [
                        'question' => 'Why is model validation especially important in professional gravitation simulations?',
                        'choices' => [
                            ['choice_text' => Approximations such as point masses, Newtonian gravity and isolated systems have specific domains of validity', 'is_correct' => true],
                            ['choice_text' => Newtonian models are exact in every gravitational environment', 'is_correct' => false],
                            ['choice_text' => Numerical agreement automatically proves physical correctness', 'is_correct' => false],
                            ['choice_text' => Conservation laws eliminate all modeling uncertainty', 'is_correct' => false],
                        ],
                        'explanation' => 'Professional models must be checked against assumptions, limiting cases, observations and the relevant physical regime.',
                    ],

                    [
                        'question' => 'Why is a combined analysis of potential, orbital energy, angular momentum and tidal effects valuable for complex gravitational systems?',
                        'choices' => [
                            ['choice_text' => Each quantity captures a different aspect of the gravitational dynamics and together they strongly constrain the system', 'is_correct' => true],
                            ['choice_text' => All four quantities are mathematically identical', 'is_correct' => false],
                            ['choice_text' => They apply only to circular orbits', 'is_correct' => false],
                            ['choice_text' => They eliminate the need for physical modeling', 'is_correct' => false],
                        ],
                        'explanation' => 'Potential determines the field, energy constrains accessible motion, angular momentum constrains geometry and tides describe differential effects.',
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
                    'difficulty' => 'Professional',
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

                // Randomize choice positions so the correct answer
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