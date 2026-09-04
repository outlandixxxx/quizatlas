<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DynamicsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'dynamics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Advanced Analytical Mechanics
            // ============================================================

            [
                'title' => 'Analytical Mechanics and Generalized Coordinates',
                'description' => 'Professional treatment of Lagrangian mechanics, generalized coordinates, constraints and equations of motion.',
                'questions' => [

                    [
                        'question' => 'What is the Lagrangian of a classical mechanical system?',
                        'choices' => [
                            ['choice_text' => 'L = T - V', 'is_correct' => true],
                            ['choice_text' => 'L = T + V', 'is_correct' => false],
                            ['choice_text' => 'L = V - T²', 'is_correct' => false],
                            ['choice_text' => 'L = T/V', 'is_correct' => false],
                        ],
                        'explanation' => 'For a broad class of conservative mechanical systems, the Lagrangian is the kinetic energy minus the potential energy.',
                    ],

                    [
                        'question' => 'What principle leads to the Euler-Lagrange equations?',
                        'choices' => [
                            ['choice_text' => 'The principle of stationary action', 'is_correct' => true],
                            ['choice_text' => 'The principle of constant velocity', 'is_correct' => false],
                            ['choice_text' => 'The law of conservation of mass only', 'is_correct' => false],
                            ['choice_text' => 'The principle of maximum force', 'is_correct' => false],
                        ],
                        'explanation' => 'Stationarity of the action S = ∫L dt leads to the Euler-Lagrange equations.',
                    ],

                    [
                        'question' => 'Which equation is the Euler-Lagrange equation for a generalized coordinate q?',
                        'choices' => [
                            ['choice_text' => 'd/dt(∂L/∂q̇) - ∂L/∂q = 0', 'is_correct' => true],
                            ['choice_text' => '∂L/∂q + ∂L/∂q̇ = 0', 'is_correct' => false],
                            ['choice_text' => 'dL/dq = 0 in all cases', 'is_correct' => false],
                            ['choice_text' => '∂²L/∂q² = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'The Euler-Lagrange equation governs the dynamics of each generalized coordinate.',
                    ],

                    [
                        'question' => 'Why are generalized coordinates useful in constrained mechanical systems?',
                        'choices' => [
                            ['choice_text' => 'They can reduce the number of independent variables by incorporating constraints directly', 'is_correct' => true],
                            ['choice_text' => 'They eliminate all forces from the problem', 'is_correct' => false],
                            ['choice_text' => 'They guarantee linear motion', 'is_correct' => false],
                            ['choice_text' => 'They are limited to Cartesian coordinates', 'is_correct' => false],
                        ],
                        'explanation' => 'A suitable set of generalized coordinates can describe only the independent degrees of freedom.',
                    ],

                    [
                        'question' => 'What is meant by a cyclic or ignorable coordinate in Lagrangian mechanics?',
                        'choices' => [
                            ['choice_text' => 'A coordinate that does not appear explicitly in the Lagrangian', 'is_correct' => true],
                            ['choice_text' => 'A coordinate that is always zero', 'is_correct' => false],
                            ['choice_text' => 'A coordinate with zero velocity', 'is_correct' => false],
                            ['choice_text' => 'A coordinate that must be periodic', 'is_correct' => false],
                        ],
                        'explanation' => 'If q does not appear explicitly in L, then the conjugate momentum ∂L/∂q̇ is conserved.',
                    ],

                    [
                        'question' => 'If a coordinate q is cyclic, which quantity is conserved?',
                        'choices' => [
                            ['choice_text' => 'Its conjugate momentum p_q = ∂L/∂q̇', 'is_correct' => true],
                            ['choice_text' => 'The coordinate q itself in every system', 'is_correct' => false],
                            ['choice_text' => 'Its acceleration', 'is_correct' => false],
                            ['choice_text' => 'Its potential energy alone', 'is_correct' => false],
                        ],
                        'explanation' => 'The Euler-Lagrange equation gives dp_q/dt = 0 for a cyclic coordinate.',
                    ],

                    [
                        'question' => 'Why can Lagrangian mechanics simplify problems involving complicated constraints?',
                        'choices' => [
                            ['choice_text' => 'Constraint forces may disappear from the equations when the chosen coordinates incorporate ideal holonomic constraints', 'is_correct' => true],
                            ['choice_text' => 'Lagrangian mechanics ignores physical constraints', 'is_correct' => false],
                            ['choice_text' => 'All constraint forces become zero physically', 'is_correct' => false],
                            ['choice_text' => 'The system becomes force-free', 'is_correct' => false],
                        ],
                        'explanation' => 'For ideal constraints incorporated into generalized coordinates, explicit constraint forces may not be needed in the reduced equations.',
                    ],

                    [
                        'question' => 'What does the action functional represent?',
                        'choices' => [
                            ['choice_text' => 'S = ∫L dt along a possible trajectory', 'is_correct' => true],
                            ['choice_text' => 'The instantaneous force multiplied by time in every case', 'is_correct' => false],
                            ['choice_text' => 'The total momentum only', 'is_correct' => false],
                            ['choice_text' => 'The total kinetic energy divided by time', 'is_correct' => false],
                        ],
                        'explanation' => 'The action is the time integral of the Lagrangian along a path.',
                    ],

                    [
                        'question' => 'Why is the principle of stationary action called a variational principle?',
                        'choices' => [
                            ['choice_text' => 'Because the physical trajectory makes the first variation of the action vanish', 'is_correct' => true],
                            ['choice_text' => 'Because the action must always be numerically minimum', 'is_correct' => false],
                            ['choice_text' => 'Because the path has zero length', 'is_correct' => false],
                            ['choice_text' => 'Because velocity must remain constant', 'is_correct' => false],
                        ],
                        'explanation' => 'The physical path is stationary with respect to nearby admissible paths under the required boundary conditions.',
                    ],

                    [
                        'question' => 'Why does analytical mechanics remain useful even when Newtonian vector equations are available?',
                        'choices' => [
                            ['choice_text' => 'It provides compact formulations that exploit symmetry, constraints and conserved quantities', 'is_correct' => true],
                            ['choice_text' => 'It replaces all physical measurements', 'is_correct' => false],
                            ['choice_text' => 'It is valid only for one-dimensional motion', 'is_correct' => false],
                            ['choice_text' => 'It eliminates the need for energy concepts', 'is_correct' => false],
                        ],
                        'explanation' => 'Lagrangian and Hamiltonian methods can expose structure that is difficult to see in direct force equations.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 2 — Hamiltonian Mechanics
            // ============================================================

            [
                'title' => 'Hamiltonian Mechanics',
                'description' => 'Professional introduction to phase space, canonical momenta and Hamiltonian dynamics.',
                'questions' => [

                    [
                        'question' => 'What is the Hamiltonian generally defined as in canonical mechanics?',
                        'choices' => [
                            ['choice_text' => 'H = Σ p_iq̇_i - L', 'is_correct' => true],
                            ['choice_text' => 'H = L - Σ p_iq̇_i', 'is_correct' => false],
                            ['choice_text' => 'H = T - V²', 'is_correct' => false],
                            ['choice_text' => 'H = p/q', 'is_correct' => false],
                        ],
                        'explanation' => 'The Hamiltonian is obtained from the Lagrangian by a Legendre transform.',
                    ],

                    [
                        'question' => 'For a simple conservative system with standard kinetic energy, what does the Hamiltonian often equal?',
                        'choices' => [
                            ['choice_text' => 'The total mechanical energy T + V', 'is_correct' => true],
                            ['choice_text' => 'Only the kinetic energy', 'is_correct' => false],
                            ['choice_text' => 'Only the potential energy', 'is_correct' => false],
                            ['choice_text' => 'The Lagrangian T - V', 'is_correct' => false],
                        ],
                        'explanation' => 'For many standard time-independent systems, H equals total mechanical energy.',
                    ],

                    [
                        'question' => 'What are Hamilton’s canonical equations?',
                        'choices' => [
                            ['choice_text' => 'q̇_i = ∂H/∂p_i and ṗ_i = -∂H/∂q_i', 'is_correct' => true],
                            ['choice_text' => 'q̇_i = ∂H/∂q_i and ṗ_i = ∂H/∂p_i', 'is_correct' => false],
                            ['choice_text' => 'q̇_i = -∂H/∂p_i and ṗ_i = ∂H/∂q_i', 'is_correct' => false],
                            ['choice_text' => 'q̇_i = Hq_i and ṗ_i = Hp_i', 'is_correct' => false],
                        ],
                        'explanation' => 'Hamilton’s equations form a first-order system in the canonical coordinates and momenta.',
                    ],

                    [
                        'question' => 'What is phase space in classical mechanics?',
                        'choices' => [
                            ['choice_text' => 'The space of generalized coordinates and their conjugate momenta', 'is_correct' => true],
                            ['choice_text' => 'Physical space only', 'is_correct' => false],
                            ['choice_text' => 'The space of velocities only', 'is_correct' => false],
                            ['choice_text' => 'The space of energies only', 'is_correct' => false],
                        ],
                        'explanation' => 'A point in phase space specifies all canonical coordinates and momenta of the system.',
                    ],

                    [
                        'question' => 'Why is Hamiltonian mechanics especially useful in statistical mechanics and advanced theoretical physics?',
                        'choices' => [
                            ['choice_text' => 'It provides a natural description in phase space and exposes canonical structure', 'is_correct' => true],
                            ['choice_text' => 'It eliminates the need for coordinates', 'is_correct' => false],
                            ['choice_text' => 'It applies only to equilibrium systems', 'is_correct' => false],
                            ['choice_text' => 'It cannot represent conserved quantities', 'is_correct' => false],
                        ],
                        'explanation' => 'Phase-space formulations are central to statistical mechanics, canonical transformations and modern dynamical systems.',
                    ],

                    [
                        'question' => 'What happens to the Hamiltonian along a trajectory when H has no explicit time dependence under standard conditions?',
                        'choices' => [
                            ['choice_text' => 'It is conserved', 'is_correct' => true],
                            ['choice_text' => 'It must increase linearly', 'is_correct' => false],
                            ['choice_text' => 'It is always zero', 'is_correct' => false],
                            ['choice_text' => 'It becomes equal to momentum', 'is_correct' => false],
                        ],
                        'explanation' => 'If ∂H/∂t = 0, Hamilton’s equations imply dH/dt = 0 along the trajectory.',
                    ],

                    [
                        'question' => 'What is a canonical transformation?',
                        'choices' => [
                            ['choice_text' => 'A transformation preserving the canonical structure of Hamilton’s equations', 'is_correct' => true],
                            ['choice_text' => 'Any arbitrary coordinate change', 'is_correct' => false],
                            ['choice_text' => 'A transformation that changes the physical system', 'is_correct' => false],
                            ['choice_text' => 'A transformation that eliminates energy conservation', 'is_correct' => false],
                        ],
                        'explanation' => 'Canonical transformations preserve the symplectic structure of phase space.',
                    ],

                    [
                        'question' => 'Why are Poisson brackets important in Hamiltonian mechanics?',
                        'choices' => [
                            ['choice_text' => 'They provide a compact algebraic framework for time evolution and conserved quantities', 'is_correct' => true],
                            ['choice_text' => 'They replace all differential equations by algebraic identities', 'is_correct' => false],
                            ['choice_text' => 'They describe only friction forces', 'is_correct' => false],
                            ['choice_text' => 'They are defined only for quantum systems', 'is_correct' => false],
                        ],
                        'explanation' => 'Poisson brackets encode canonical evolution and symmetry relations in classical phase space.',
                    ],

                    [
                        'question' => 'What does a conserved quantity generally imply about the trajectory in phase space?',
                        'choices' => [
                            ['choice_text' => 'The trajectory remains on a surface or manifold compatible with the conserved quantity', 'is_correct' => true],
                            ['choice_text' => 'The trajectory becomes random', 'is_correct' => false],
                            ['choice_text' => 'All phase-space coordinates become constant', 'is_correct' => false],
                            ['choice_text' => 'The system must stop moving', 'is_correct' => false],
                        ],
                        'explanation' => 'Each independent first integral restricts the accessible region of phase space.',
                    ],

                    [
                        'question' => 'Why is the Hamiltonian formulation naturally compatible with symplectic geometry?',
                        'choices' => [
                            ['choice_text' => 'Hamiltonian evolution preserves the phase-space symplectic structure', 'is_correct' => true],
                            ['choice_text' => 'Hamiltonian systems have no geometry', 'is_correct' => false],
                            ['choice_text' => 'The phase space is always Euclidean in a dynamical sense', 'is_correct' => false],
                            ['choice_text' => 'Symplectic structure applies only to rigid bodies', 'is_correct' => false],
                        ],
                        'explanation' => 'The preservation of the symplectic two-form is a fundamental structural property of Hamiltonian flow.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 3 — Rigid Body Dynamics
            // ============================================================

            [
                'title' => 'Rigid Body Dynamics',
                'description' => 'Professional analysis of rigid-body rotation, inertia tensors, angular momentum and torque.',
                'questions' => [

                    [
                        'question' => 'What is the inertia tensor of a rigid body used to describe?',
                        'choices' => [
                            ['choice_text' => 'The relationship between angular velocity and angular momentum about a chosen reference point', 'is_correct' => true],
                            ['choice_text' => 'Only the total mass of the body', 'is_correct' => false],
                            ['choice_text' => 'The body’s temperature distribution', 'is_correct' => false],
                            ['choice_text' => 'Only translational momentum', 'is_correct' => false],
                        ],
                        'explanation' => 'The inertia tensor generalizes the scalar moment of inertia to arbitrary rotation axes.',
                    ],

                    [
                        'question' => 'For a rigid body rotating about a principal axis, the angular momentum and angular velocity are...',
                        'choices' => [
                            ['choice_text' => 'Parallel, with L = Iω', 'is_correct' => true],
                            ['choice_text' => 'Always perpendicular', 'is_correct' => false],
                            ['choice_text' => 'Unrelated', 'is_correct' => false],
                            ['choice_text' => 'Opposite for every rotation', 'is_correct' => false],
                        ],
                        'explanation' => 'Along a principal axis, the inertia tensor acts as a scalar principal moment.',
                    ],

                    [
                        'question' => 'Why can angular momentum and angular velocity fail to be parallel for a general rigid body?',
                        'choices' => [
                            ['choice_text' => The inertia tensor can map ω into a vector L with different direction', 'is_correct' => true],
                            ['choice_text' => Angular momentum is always scalar', 'is_correct' => false],
                            ['choice_text' => Angular velocity has no direction', 'is_correct' => false],
                            ['choice_text' => Torque forces them to be perpendicular', 'is_correct' => false],
                        ],
                        'explanation' => 'For L = I·ω, the tensorial nature of I can produce a different direction for L.',
                    ],

                    [
                        'question' => 'What are principal axes of inertia?',
                        'choices' => [
                            ['choice_text' => 'Directions in which the inertia tensor is diagonal and L is parallel to ω for pure principal-axis rotation', 'is_correct' => true],
                            ['choice_text' => 'Axes where the mass is always zero', 'is_correct' => false],
                            ['choice_text' => 'Axes defined only by gravity', 'is_correct' => false],
                            ['choice_text' => 'Axes that exist only for spherical bodies', 'is_correct' => false],
                        ],
                        'explanation' => 'Principal axes are eigenvector directions of the inertia tensor.',
                    ],

                    [
                        'question' => 'What equation relates torque to angular momentum in an inertial frame?',
                        'choices' => [
                            ['choice_text' => 'τ_ext = dL/dt', 'is_correct' => true],
                            ['choice_text' => 'τ_ext = L²', 'is_correct' => false],
                            ['choice_text' => 'τ_ext = dL²/dt', 'is_correct' => false],
                            ['choice_text' => 'τ_ext = L/t²', 'is_correct' => false],
                        ],
                        'explanation' => 'The net external torque equals the time derivative of angular momentum.',
                    ],

                    [
                        'question' => 'Why can a torque-free rigid body still exhibit complicated rotational motion?',
                        'choices' => [
                            ['choice_text' => Angular momentum may remain fixed while angular velocity changes direction relative to the body', 'is_correct' => true],
                            ['choice_text' => 'Torque-free motion always means ω = 0', 'is_correct' => false],
                            ['choice_text' => 'Angular momentum is not conserved without torque', 'is_correct' => false],
                            ['choice_text' => 'Rigid bodies cannot rotate without torque at every instant', 'is_correct' => false],
                        ],
                        'explanation' => 'Free rigid-body rotation can involve precession of the body frame even with conserved space-fixed angular momentum.',
                    ],

                    [
                        'question' => 'What is the rotational kinetic energy of a rigid body in tensor form?',
                        'choices' => [
                            ['choice_text' => 'T_rot = 1/2 ω·L', 'is_correct' => true],
                            ['choice_text' => 'T_rot = ω + L', 'is_correct' => false],
                            ['choice_text' => 'T_rot = 1/2ω/L', 'is_correct' => false],
                            ['choice_text' => 'T_rot = ω²/L²', 'is_correct' => false],
                        ],
                        'explanation' => 'Since L = I·ω, rotational kinetic energy is T = 1/2 ω·I·ω = 1/2 ω·L.',
                    ],

                    [
                        'question' => 'Why are moments of inertia about different axes not generally equal?',
                        'choices' => [
                            ['choice_text' => The mass distribution relative to each axis is different', 'is_correct' => true],
                            ['choice_text' => Mass has no effect on rotational inertia', 'is_correct' => false],
                            ['choice_text' => All rigid bodies are spherically symmetric', 'is_correct' => false],
                            ['choice_text' => Angular velocity determines the inertia tensor uniquely', 'is_correct' => false],
                        ],
                        'explanation' => 'Moment of inertia depends on how mass is distributed with respect to the chosen axis.',
                    ],

                    [
                        'question' => 'What does the parallel-axis theorem allow one to calculate?',
                        'choices' => [
                            ['choice_text' => The moment of inertia about an axis parallel to one through the center of mass', 'is_correct' => true],
                            ['choice_text' => The translational speed of the center of mass', 'is_correct' => false],
                            ['choice_text' => The gravitational field of the body', 'is_correct' => false],
                            ['choice_text' => The temperature of a rotating body', 'is_correct' => false],
                        ],
                        'explanation' => 'The theorem gives I = I_cm + Md² for parallel axes separated by distance d.',
                    ],

                    [
                        'question' => 'Why is rigid-body dynamics fundamentally a coupled translational and rotational problem?',
                        'choices' => [
                            ['choice_text' => A finite rigid body can translate through space while simultaneously changing its orientation', 'is_correct' => true],
                            ['choice_text' => 'Rigid bodies cannot translate and rotate simultaneously', 'is_correct' => false],
                            ['choice_text' => 'Rotation eliminates center-of-mass motion', 'is_correct' => false],
                            ['choice_text' => 'Translation does not affect any physical coordinate', 'is_correct' => false],
                        ],
                        'explanation' => 'The full motion of a rigid body requires both center-of-mass translation and orientation dynamics.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 4 — Small Oscillations and Stability
            // ============================================================

            [
                'title' => 'Small Oscillations and Stability',
                'description' => 'Professional treatment of equilibrium stability, harmonic approximation and coupled oscillations.',
                'questions' => [

                    [
                        'question' => 'What characterizes a stable equilibrium in terms of potential energy?',
                        'choices' => [
                            ['choice_text' => 'The potential energy has a local minimum with respect to allowed perturbations', 'is_correct' => true],
                            ['choice_text' => 'The potential energy has a local maximum', 'is_correct' => false],
                            ['choice_text' => 'The potential energy must be infinite', 'is_correct' => false],
                            ['choice_text' => 'The potential energy must be exactly zero', 'is_correct' => false],
                        ],
                        'explanation' => 'A local minimum of potential energy corresponds to stable equilibrium under conservative forces.',
                    ],

                    [
                        'question' => 'What approximation is commonly used near a stable equilibrium to describe small oscillations?',
                        'choices' => [
                            ['choice_text' => 'The potential is approximated by a quadratic function of the displacement', 'is_correct' => true],
                            ['choice_text' => 'The potential is treated as exactly linear for all displacements', 'is_correct' => false],
                            ['choice_text' => 'The kinetic energy is neglected', 'is_correct' => false],
                            ['choice_text' => 'The mass is set to zero', 'is_correct' => false],
                        ],
                        'explanation' => 'A Taylor expansion about a stable equilibrium gives a harmonic quadratic leading term.',
                    ],

                    [
                        'question' => 'For a one-dimensional potential expanded near equilibrium x0, what condition corresponds to equilibrium?',
                        'choices' => [
                            ['choice_text' => 'dV/dx = 0 at x0', 'is_correct' => true],
                            ['choice_text' => 'dV/dx = 1 at x0', 'is_correct' => false],
                            ['choice_text' => 'd²V/dx² = 0 necessarily', 'is_correct' => false],
                            ['choice_text' => 'V = 0 necessarily', 'is_correct' => false],
                        ],
                        'explanation' => 'Equilibrium requires zero force, and F = -dV/dx.',
                    ],

                    [
                        'question' => 'What condition indicates stability in the one-dimensional potential near equilibrium?',
                        'choices' => [
                            ['choice_text' => 'd²V/dx² > 0 at x0', 'is_correct' => true],
                            ['choice_text' => 'd²V/dx² < 0 at x0', 'is_correct' => false],
                            ['choice_text' => 'd²V/dx² = -1', 'is_correct' => false],
                            ['choice_text' => 'dV/dx must be maximum', 'is_correct' => false],
                        ],
                        'explanation' => 'A positive second derivative gives a local minimum of potential energy.',
                    ],

                    [
                        'question' => 'What is the angular frequency of a simple harmonic oscillator with mass m and spring constant k?',
                        'choices' => [
                            ['choice_text' => 'ω = √(k/m)', 'is_correct' => true],
                            ['choice_text' => 'ω = √(m/k)', 'is_correct' => false],
                            ['choice_text' => 'ω = k/m', 'is_correct' => false],
                            ['choice_text' => 'ω = m/k', 'is_correct' => false],
                        ],
                        'explanation' => 'The equation m ẍ + kx = 0 gives ω² = k/m.',
                    ],

                    [
                        'question' => 'Why do nonlinear oscillators often behave approximately harmonically at sufficiently small amplitude?',
                        'choices' => [
                            ['choice_text' => The lowest nonzero term in the potential expansion near a stable minimum is quadratic', 'is_correct' => true],
                            ['choice_text' => All nonlinear terms vanish at every amplitude', 'is_correct' => false],
                            ['choice_text' => The mass changes with amplitude', 'is_correct' => false],
                            ['choice_text' => The force becomes exactly zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Higher-order terms become relatively small near the equilibrium point.',
                    ],

                    [
                        'question' => 'What are normal modes in a coupled oscillatory system?',
                        'choices' => [
                            ['choice_text' => Independent patterns of collective oscillation with definite normal frequencies', 'is_correct' => true],
                            ['choice_text' => Random motions of all particles', 'is_correct' => false],
                            ['choice_text' => Motions in which all coordinates are always zero', 'is_correct' => false],
                            ['choice_text' => Only rigid translations', 'is_correct' => false],
                        ],
                        'explanation' => 'Normal modes diagonalize the linearized coupled equations and oscillate at characteristic frequencies.',
                    ],

                    [
                        'question' => 'Why can normal-mode analysis simplify a system of coupled linear oscillators?',
                        'choices' => [
                            ['choice_text' => It transforms coupled equations into independent modal equations', 'is_correct' => true],
                            ['choice_text' => It removes all masses from the system', 'is_correct' => false],
                            ['choice_text' => It makes every force constant equal', 'is_correct' => false],
                            ['choice_text' => It eliminates oscillations', 'is_correct' => false],
                        ],
                        'explanation' => 'An appropriate eigenvector basis decouples the linear equations.',
                    ],

                    [
                        'question' => 'Why is a local maximum of potential energy unstable for a conservative system?',
                        'choices' => [
                            ['choice_text' => Small displacements generate forces that drive the system away from the equilibrium', 'is_correct' => true],
                            ['choice_text' => 'The force always restores the system to equilibrium', 'is_correct' => false],
                            ['choice_text' => 'The potential becomes constant', 'is_correct' => false],
                            ['choice_text' => 'The mass becomes negative', 'is_correct' => false],
                        ],
                        'explanation' => 'At a potential maximum, the restoring tendency has the wrong sign and perturbations grow away from equilibrium.',
                    ],

                    [
                        'question' => 'Why is linear stability analysis useful beyond simple harmonic motion?',
                        'choices' => [
                            ['choice_text' => 'It determines local behavior of more complicated nonlinear systems around equilibrium states', 'is_correct' => true],
                            ['choice_text' => 'It proves global stability in every nonlinear system', 'is_correct' => false],
                            ['choice_text' => 'It removes all nonlinearities exactly', 'is_correct' => false],
                            ['choice_text' => 'It applies only to springs', 'is_correct' => false],
                        ],
                        'explanation' => 'Linearization provides a local approximation near equilibrium and is widely used in stability analysis.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 5 — Central Force Motion
            // ============================================================

            [
                'title' => 'Central Force Motion',
                'description' => 'Professional analysis of central forces, angular momentum, effective potential and orbital dynamics.',
                'questions' => [

                    [
                        'question' => 'What property characterizes a central force?',
                        'choices' => [
                            ['choice_text' => 'It points along the radial direction and depends only on the distance from a fixed center', 'is_correct' => true],
                            ['choice_text' => 'It always acts tangentially', 'is_correct' => false],
                            ['choice_text' => 'It depends only on time', 'is_correct' => false],
                            ['choice_text' => 'It must be constant in magnitude', 'is_correct' => false],
                        ],
                        'explanation' => 'A central force has the form F(r) r̂.',
                    ],

                    [
                        'question' => 'Why is angular momentum conserved in motion under an ideal central force?',
                        'choices' => [
                            ['choice_text' => The torque about the center is zero because the force is radial', 'is_correct' => true],
                            ['choice_text' => 'The force is always perpendicular to r', 'is_correct' => false],
                            ['choice_text' => 'The particle has zero velocity', 'is_correct' => false],
                            ['choice_text' => 'The force does no work in every central-force problem', 'is_correct' => false],
                        ],
                        'explanation' => 'Since τ = r × F = 0 for a radial force, angular momentum is conserved.',
                    ],

                    [
                        'question' => 'Why does conservation of angular momentum imply planar motion for a central-force problem?',
                        'choices' => [
                            ['choice_text' => The conserved angular momentum vector fixes a constant orbital plane perpendicular to it', 'is_correct' => true],
                            ['choice_text' => 'The force always points out of the plane', 'is_correct' => false],
                            ['choice_text' => 'The particle has no radial motion', 'is_correct' => false],
                            ['choice_text' => 'Energy conservation forces motion to be one-dimensional', 'is_correct' => false],
                        ],
                        'explanation' => 'The position and momentum remain perpendicular to the fixed angular momentum vector.',
                    ],

                    [
                        'question' => 'What is the effective potential in a central-force problem?',
                        'choices' => [
                            ['choice_text' => 'V_eff(r) = V(r) + L²/(2mr²)', 'is_correct' => true],
                            ['choice_text' => 'V_eff(r) = V(r) - L²/(2mr²)', 'is_correct' => false],
                            ['choice_text' => 'V_eff(r) = V(r) + mr²', 'is_correct' => false],
                            ['choice_text' => 'V_eff(r) = L/(mr)', 'is_correct' => false],
                        ],
                        'explanation' => 'The centrifugal barrier term appears when reducing the central-force problem to radial motion.',
                    ],

                    [
                        'question' => 'Why is the effective potential useful?',
                        'choices' => [
                            ['choice_text' => 'It reduces the radial dynamics to an effective one-dimensional energy problem', 'is_correct' => true],
                            ['choice_text' => 'It removes angular momentum from the system', 'is_correct' => false],
                            ['choice_text' => 'It eliminates the physical potential', 'is_correct' => false],
                            ['choice_text' => 'It applies only to non-conservative forces', 'is_correct' => false],
                        ],
                        'explanation' => 'The radial motion can be interpreted using a one-dimensional effective potential.',
                    ],

                    [
                        'question' => 'For a circular orbit in a central potential, what condition must the effective potential satisfy?',
                        'choices' => [
                            ['choice_text' => 'dV_eff/dr = 0', 'is_correct' => true],
                            ['choice_text' => 'V_eff = 0 necessarily', 'is_correct' => false],
                            ['choice_text' => 'dV_eff/dr = 1', 'is_correct' => false],
                            ['choice_text' => 'd²V_eff/dr² = 0 necessarily', 'is_correct' => false],
                        ],
                        'explanation' => 'A circular orbit corresponds to a stationary point of the effective potential.',
                    ],

                    [
                        'question' => 'What additional condition indicates stability of a circular orbit?',
                        'choices' => [
                            ['choice_text' => 'd²V_eff/dr² > 0 at the circular-orbit radius', 'is_correct' => true],
                            ['choice_text' => 'd²V_eff/dr² < 0', 'is_correct' => false],
                            ['choice_text' => 'V_eff must be negative everywhere', 'is_correct' => false],
                            ['choice_text' => 'Angular momentum must be zero', 'is_correct' => false],
                        ],
                        'explanation' => 'A local minimum of the effective potential corresponds to stable radial perturbations.',
                    ],

                    [
                        'question' => 'Why does Kepler’s second law follow from angular momentum conservation?',
                        'choices' => [
                            ['choice_text' => Constant angular momentum implies constant areal velocity', 'is_correct' => true],
                            ['choice_text' => 'The orbital radius is always constant', 'is_correct' => false],
                            ['choice_text' => 'The speed is always constant on every orbit', 'is_correct' => false],
                            ['choice_text' => 'Gravity is always constant in magnitude', 'is_correct' => false],
                        ],
                        'explanation' => 'For a central force, h = r²θ̇ is constant, so dA/dt is constant.',
                    ],

                    [
                        'question' => 'Why are inverse-square central forces special in orbital mechanics?',
                        'choices' => [
                            ['choice_text' => 'They lead to closed conic-section orbits for bound ideal two-body motion', 'is_correct' => true],
                            ['choice_text' => 'They are the only forces that conserve energy', 'is_correct' => false],
                            ['choice_text' => 'They always produce circular trajectories', 'is_correct' => false],
                            ['choice_text' => 'They produce no angular momentum', 'is_correct' => false],
                        ],
                        'explanation' => 'The Newtonian inverse-square gravitational and Coulomb forces lead to conic-section trajectories under ideal conditions.',
                    ],

                    [
                        'question' => 'Why is the two-body gravitational problem often reduced to a one-body problem?',
                        'choices' => [
                            ['choice_text' => The center-of-mass motion separates and the relative motion can be described using the reduced mass', 'is_correct' => true],
                            ['choice_text' => 'One body is always assumed massless', 'is_correct' => false],
                            ['choice_text' => 'Gravity acts on only one of the masses', 'is_correct' => false],
                            ['choice_text' => 'The relative coordinate is always zero', 'is_correct' => false],
                        ],
                        'explanation' => 'The two-body problem separates into center-of-mass translation and relative motion with reduced mass.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 6 — Continuum and Fluid Dynamics Connections
            // ============================================================

            [
                'title' => 'Continuum Dynamics and Momentum Balance',
                'description' => 'Professional introduction to continuum mechanics concepts relevant to dynamics and distributed systems.',
                'questions' => [

                    [
                        'question' => 'What is the continuum approximation in mechanics?',
                        'choices' => [
                            ['choice_text' => 'Matter is treated as continuously distributed fields rather than discrete particles at the macroscopic scale', 'is_correct' => true],
                            ['choice_text' => 'Matter is assumed to have no mass', 'is_correct' => false],
                            ['choice_text' => 'All particles are treated as isolated point masses', 'is_correct' => false],
                            ['choice_text' => 'The system must be vacuum', 'is_correct' => false],
                        ],
                        'explanation' => 'Continuum mechanics replaces microscopic discreteness by smoothly varying macroscopic fields.',
                    ],

                    [
                        'question' => 'What does mass density represent?',
                        'choices' => [
                            ['choice_text' => 'Mass per unit volume', 'is_correct' => true],
                            ['choice_text' => 'Volume per unit mass', 'is_correct' => false],
                            ['choice_text' => 'Force per unit area', 'is_correct' => false],
                            ['choice_text' => 'Momentum per unit time only', 'is_correct' => false],
                        ],
                        'explanation' => 'Density is defined as ρ = dm/dV.',
                    ],

                    [
                        'question' => 'What does the momentum balance of a continuum fundamentally express?',
                        'choices' => [
                            ['choice_text' => Conservation of momentum applied to an extended body or control volume', 'is_correct' => true],
                            ['choice_text' => 'Conservation of temperature', 'is_correct' => false],
                            ['choice_text' => 'Conservation of position', 'is_correct' => false],
                            ['choice_text' => 'Conservation of pressure alone', 'is_correct' => false],
                        ],
                        'explanation' => 'The continuum momentum equation is the distributed counterpart of Newton’s second law.',
                    ],

                    [
                        'question' => 'What is stress in continuum mechanics?',
                        'choices' => [
                            ['choice_text' => 'Internal force per unit area represented by a tensor', 'is_correct' => true],
                            ['choice_text' => 'Energy per unit mass', 'is_correct' => false],
                            ['choice_text' => 'Volume per unit force', 'is_correct' => false],
                            ['choice_text' => 'Acceleration per unit density', 'is_correct' => false],
                        ],
                        'explanation' => 'Stress describes internal force transmission across surfaces and is tensorial in general.',
                    ],

                    [
                        'question' => 'Why is stress a tensor rather than a single scalar in general?',
                        'choices' => [
                            ['choice_text' => The traction on a surface depends on both the surface orientation and force direction', 'is_correct' => true],
                            ['choice_text' => 'All internal forces point in one direction', 'is_correct' => false],
                            ['choice_text' => 'Stress is identical to pressure in every material', 'is_correct' => false],
                            ['choice_text' => 'A tensor is required only for thermal systems', 'is_correct' => false],
                        ],
                        'explanation' => 'The Cauchy stress tensor maps a surface-normal direction to the traction vector acting on that surface.',
                    ],

                    [
                        'question' => 'What is pressure in an ideal isotropic fluid at rest?',
                        'choices' => [
                            ['choice_text' => 'The isotropic normal stress magnitude', 'is_correct' => true],
                            ['choice_text' => 'The shear stress only', 'is_correct' => false],
                            ['choice_text' => 'The fluid’s momentum', 'is_correct' => false],
                            ['choice_text' => 'The fluid’s viscosity multiplied by volume', 'is_correct' => false],
                        ],
                        'explanation' => 'In a fluid at rest, the stress is isotropic and characterized by pressure.',
                    ],

                    [
                        'question' => 'Why does the Navier-Stokes equation require a model for viscous stress?',
                        'choices' => [
                            ['choice_text' => Viscous forces represent momentum transport associated with velocity gradients in the fluid', 'is_correct' => true],
                            ['choice_text' => 'Viscosity is simply the fluid’s mass', 'is_correct' => false],
                            ['choice_text' => 'Viscous stress exists only in solids', 'is_correct' => false],
                            ['choice_text' => 'Velocity gradients have no effect on stress', 'is_correct' => false],
                        ],
                        'explanation' => 'For Newtonian fluids, viscous stresses are related to velocity gradients through constitutive relations.',
                    ],

                    [
                        'question' => 'What is the Reynolds number used to characterize?',
                        'choices' => [
                            ['choice_text' => 'The relative importance of inertial and viscous effects in fluid flow', 'is_correct' => true],
                            ['choice_text' => 'Only temperature', 'is_correct' => false],
                            ['choice_text' => 'Only pressure', 'is_correct' => false],
                            ['choice_text' => 'The total mass of a fluid', 'is_correct' => false],
                        ],
                        'explanation' => 'Re = ρvL/μ compares inertial and viscous effects.',
                    ],

                    [
                        'question' => 'Why can the same fluid exhibit very different flow behavior at different characteristic Reynolds numbers?',
                        'choices' => [
                            ['choice_text' => The balance between inertia and viscosity changes with the flow conditions and scale', 'is_correct' => true],
                            ['choice_text' => 'The fluid changes chemical identity automatically', 'is_correct' => false],
                            ['choice_text' => 'Density is always zero at low Reynolds number', 'is_correct' => false],
                            ['choice_text' => 'Pressure ceases to exist at high Reynolds number', 'is_correct' => false],
                        ],
                        'explanation' => 'Flow regime depends strongly on the relative magnitudes of inertial and viscous effects.',
                    ],

                    [
                        'question' => 'Why is continuum dynamics a natural extension of particle dynamics?',
                        'choices' => [
                            ['choice_text' => It applies conservation laws locally to systems containing very large numbers of interacting particles', 'is_correct' => true],
                            ['choice_text' => 'It abandons conservation laws', 'is_correct' => false],
                            ['choice_text' => 'It treats all materials as rigid', 'is_correct' => false],
                            ['choice_text' => 'It ignores forces entirely', 'is_correct' => false],
                        ],
                        'explanation' => 'Continuum mechanics generalizes Newtonian conservation principles to distributed matter.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 7 — Nonlinear Dynamics and Stability
            // ============================================================

            [
                'title' => 'Nonlinear Dynamics and Stability',
                'description' => 'Professional introduction to nonlinear equations, phase portraits, fixed points and chaos.',
                'questions' => [

                    [
                        'question' => 'What distinguishes a nonlinear dynamical system from a linear one?',
                        'choices' => [
                            ['choice_text' => The governing equations cannot in general be represented as linear combinations of the state variables and inputs', 'is_correct' => true],
                            ['choice_text' => 'The system must have no equilibrium', 'is_correct' => false],
                            ['choice_text' => 'The system cannot have forces', 'is_correct' => false],
                            ['choice_text' => 'The variables must all be discrete', 'is_correct' => false],
                        ],
                        'explanation' => 'Nonlinearity can arise from products, powers, nonlinear functions or state-dependent coefficients.',
                    ],

                    [
                        'question' => 'What is a fixed point of a dynamical system?',
                        'choices' => [
                            ['choice_text' => 'A state at which the time derivative of the state variables vanishes', 'is_correct' => true],
                            ['choice_text' => 'A point with infinite acceleration', 'is_correct' => false],
                            ['choice_text' => 'Any point on a trajectory', 'is_correct' => false],
                            ['choice_text' => 'A point where energy is always zero', 'is_correct' => false],
                        ],
                        'explanation' => 'At a fixed point, the system remains there if started exactly at that state.',
                    ],

                    [
                        'question' => 'Why is linearization used near an equilibrium point of a nonlinear system?',
                        'choices' => [
                            ['choice_text' => 'It approximates the nonlinear dynamics by the first-order Jacobian near the equilibrium', 'is_correct' => true],
                            ['choice_text' => 'It makes the nonlinear terms physically disappear everywhere', 'is_correct' => false],
                            ['choice_text' => 'It gives exact global behavior in every case', 'is_correct' => false],
                            ['choice_text' => 'It is valid only far from equilibrium', 'is_correct' => false],
                        ],
                        'explanation' => 'The Jacobian provides a local linear approximation near a fixed point.',
                    ],

                    [
                        'question' => 'What does an eigenvalue with a negative real part typically indicate for a linearized continuous-time mode?',
                        'choices' => [
                            ['choice_text' => 'Exponential decay of that perturbation mode', 'is_correct' => true],
                            ['choice_text' => 'Exponential growth', 'is_correct' => false],
                            ['choice_text' => 'Immediate divergence to infinity', 'is_correct' => false],
                            ['choice_text' => 'No time dependence', 'is_correct' => false],
                        ],
                        'explanation' => 'A negative real part causes exp(λt) to decay with time.',
                    ],

                    [
                        'question' => 'What does an eigenvalue with a positive real part indicate in linear stability analysis?',
                        'choices' => [
                            ['choice_text' => 'Growth of the corresponding perturbation mode', 'is_correct' => true],
                            ['choice_text' => 'Guaranteed oscillation with constant amplitude', 'is_correct' => false],
                            ['choice_text' => 'Guaranteed stability', 'is_correct' => false],
                            ['choice_text' => 'Zero acceleration everywhere', 'is_correct' => false],
                        ],
                        'explanation' => 'A positive real part produces exponential growth of the associated linearized perturbation.',
                    ],

                    [
                        'question' => 'Why can a nonlinear system display multiple equilibria?',
                        'choices' => [
                            ['choice_text' => 'The nonlinear equilibrium equations can have several distinct solutions', 'is_correct' => true],
                            ['choice_text' => 'Linear systems cannot have equilibrium', 'is_correct' => false],
                            ['choice_text' => 'Mass automatically creates multiple equilibria', 'is_correct' => false],
                            ['choice_text' => 'Equilibrium exists only when acceleration is infinite', 'is_correct' => false],
                        ],
                        'explanation' => 'Nonlinear algebraic equations can have multiple roots corresponding to multiple fixed points.',
                    ],

                    [
                        'question' => 'What is meant by a phase portrait?',
                        'choices' => [
                            ['choice_text' => 'A graphical representation of trajectories in state space', 'is_correct' => true],
                            ['choice_text' => 'A plot of force versus mass only', 'is_correct' => false],
                            ['choice_text' => 'A spatial photograph of the system', 'is_correct' => false],
                            ['choice_text' => 'A graph of temperature versus pressure only', 'is_correct' => false],
                        ],
                        'explanation' => 'Phase portraits visualize how system states evolve in state space.',
                    ],

                    [
                        'question' => 'Why is chaos possible in deterministic mechanical systems?',
                        'choices' => [
                            ['choice_text' => Nonlinear sensitivity to initial conditions can produce complex unpredictable long-term trajectories', 'is_correct' => true],
                            ['choice_text' => 'The system must contain random external noise', 'is_correct' => false],
                            ['choice_text' => 'Deterministic equations cannot generate complex behavior', 'is_correct' => false],
                            ['choice_text' => 'Chaos means the equations have no solution', 'is_correct' => false],
                        ],
                        'explanation' => 'Deterministic nonlinear systems can exhibit sensitive dependence on initial conditions and chaotic dynamics.',
                    ],

                    [
                        'question' => 'What does sensitive dependence on initial conditions mean?',
                        'choices' => [
                            ['choice_text' => 'Very small initial differences can lead to substantially different trajectories after sufficient time', 'is_correct' => true],
                            ['choice_text' => 'All initial conditions converge immediately', 'is_correct' => false],
                            ['choice_text' => 'The system has no deterministic law', 'is_correct' => false],
                            ['choice_text' => 'Only measurement errors matter', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a defining feature of chaotic dynamics and limits long-term prediction.',
                    ],

                    [
                        'question' => 'Why is nonlinear dynamics relevant to real mechanical systems?',
                        'choices' => [
                            ['choice_text' => 'Real systems often contain geometric, material or forcing nonlinearities that alter stability and response', 'is_correct' => true],
                            ['choice_text' => 'Real systems are always exactly linear', 'is_correct' => false],
                            ['choice_text' => 'Nonlinearity occurs only in abstract mathematics', 'is_correct' => false],
                            ['choice_text' => 'Nonlinear effects can always be ignored', 'is_correct' => false],
                        ],
                        'explanation' => 'Nonlinearities are common in contact, large deformation, fluid forces, pendula, rigid-body motion and many other systems.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 8 — Professional Integrated Dynamics
            // ============================================================

            [
                'title' => 'Professional Integrated Dynamics',
                'description' => 'Integrated professional-level problems covering analytical mechanics, rigid bodies, orbits, oscillations and nonlinear dynamics.',
                'questions' => [

                    [
                        'question' => 'A particle moves in a central potential V(r). Why can the three-dimensional problem be reduced to radial motion plus angular momentum conservation?',
                        'choices' => [
                            ['choice_text' => 'The central force gives zero torque about the center, conserving angular momentum and fixing the orbital plane', 'is_correct' => true],
                            ['choice_text' => 'The particle has no angular momentum', 'is_correct' => false],
                            ['choice_text' => 'The potential is always constant', 'is_correct' => false],
                            ['choice_text' => 'The force is always tangential', 'is_correct' => false],
                        ],
                        'explanation' => 'Central-force symmetry provides angular momentum conservation and reduces the problem substantially.',
                    ],

                    [
                        'question' => 'A rigid body rotates with angular velocity ω about a principal axis with moment of inertia I = 4 kg·m². If ω = 3 rad/s, what is its rotational kinetic energy?',
                        'choices' => [
                            ['choice_text' => '18 J', 'is_correct' => true],
                            ['choice_text' => '12 J', 'is_correct' => false],
                            ['choice_text' => '36 J', 'is_correct' => false],
                            ['choice_text' => '6 J', 'is_correct' => false],
                        ],
                        'explanation' => 'K_rot = 1/2 Iω² = 1/2 × 4 × 9 = 18 J.',
                    ],

                    [
                        'question' => 'A one-dimensional system has a potential near equilibrium of the form V(x) = V0 + 50x². What does the positive quadratic coefficient indicate?',
                        'choices' => [
                            ['choice_text' => 'The equilibrium at x = 0 is locally stable', 'is_correct' => true],
                            ['choice_text' => 'The equilibrium is necessarily unstable', 'is_correct' => false],
                            ['choice_text' => 'There is no equilibrium', 'is_correct' => false],
                            ['choice_text' => 'The force is constant and nonzero at x = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'The potential has a local minimum at x = 0 because the quadratic coefficient is positive.',
                    ],

                    [
                        'question' => 'Why does a conserved Hamiltonian constrain the motion of an autonomous system?',
                        'choices' => [
                            ['choice_text' => 'The trajectory must remain on the constant-energy surface in phase space', 'is_correct' => true],
                            ['choice_text' => 'The system loses all degrees of freedom', 'is_correct' => false],
                            ['choice_text' => 'Momentum must always vanish', 'is_correct' => false],
                            ['choice_text' => 'The configuration cannot change', 'is_correct' => false],
                        ],
                        'explanation' => 'Energy conservation restricts the set of accessible states in phase space.',
                    ],

                    [
                        'question' => 'Why can a free rigid body undergo rotational motion without external torque?',
                        'choices' => [
                            ['choice_text' => Its angular momentum is conserved while its orientation evolves according to rigid-body dynamics', 'is_correct' => true],
                            ['choice_text' => 'Rotation always requires a continuing external torque', 'is_correct' => false],
                            ['choice_text' => 'Angular momentum is zero for free bodies', 'is_correct' => false],
                            ['choice_text' => 'A rigid body cannot rotate in the absence of gravity', 'is_correct' => false],
                        ],
                        'explanation' => 'Torque-free rotation is a fundamental case of rigid-body dynamics.',
                    ],

                    [
                        'question' => 'Why can numerical integration be necessary in professional dynamics problems?',
                        'choices' => [
                            ['choice_text' => 'Nonlinear, coupled or constrained equations may lack practical closed-form solutions', 'is_correct' => true],
                            ['choice_text' => 'Newton’s laws cannot be solved symbolically', 'is_correct' => false],
                            ['choice_text' => 'Numerical methods are required only for constant velocity', 'is_correct' => false],
                            ['choice_text' => 'Analytical methods are forbidden in professional physics', 'is_correct' => false],
                        ],
                        'explanation' => 'Numerical methods are indispensable for many realistic multibody, nonlinear and high-dimensional models.',
                    ],

                    [
                        'question' => 'Why is symplectic numerical integration valuable for long-term Hamiltonian simulations?',
                        'choices' => [
                            ['choice_text' => 'It preserves the geometric symplectic structure and often controls long-term energy drift better', 'is_correct' => true],
                            ['choice_text' => 'It makes all systems exactly energy-conserving at every step', 'is_correct' => false],
                            ['choice_text' => 'It eliminates discretization error completely', 'is_correct' => false],
                            ['choice_text' => 'It applies only to dissipative systems', 'is_correct' => false],
                        ],
                        'explanation' => 'Symplectic integrators preserve phase-space geometry and are well suited to long-time Hamiltonian evolution.',
                    ],

                    [
                        'question' => 'Why must a professional dynamics model distinguish between model assumptions and measured physical behavior?',
                        'choices' => [
                            ['choice_text' => 'Approximations such as rigid bodies, ideal constraints or negligible drag determine the validity range of the equations', 'is_correct' => true],
                            ['choice_text' => 'Physical systems always satisfy ideal assumptions exactly', 'is_correct' => false],
                            ['choice_text' => 'Measurements are irrelevant to model validation', 'is_correct' => false],
                            ['choice_text' => 'A mathematical model is automatically exact because it uses equations', 'is_correct' => false],
                        ],
                        'explanation' => 'Every model has a domain of validity, and comparison with experiment is essential for assessing that domain.',
                    ],

                    [
                        'question' => 'Why are conserved quantities particularly valuable when solving complex dynamical systems?',
                        'choices' => [
                            ['choice_text' => 'They reduce the effective degrees of freedom and provide checks on analytical or numerical solutions', 'is_correct' => true],
                            ['choice_text' => 'They always provide the complete trajectory immediately', 'is_correct' => false],
                            ['choice_text' => 'They eliminate the need for initial conditions', 'is_correct' => false],
                            ['choice_text' => 'They exist in every dissipative system without qualification', 'is_correct' => false],
                        ],
                        'explanation' => 'Conservation laws provide both analytical simplification and powerful validation tests.',
                    ],

                    [
                        'question' => 'Why is professional dynamics best viewed as a combination of force, energy, momentum and geometric methods?',
                        'choices' => [
                            ['choice_text' => Different formulations expose different structures and become advantageous for different physical problems', 'is_correct' => true],
                            ['choice_text' => 'Only force equations are physically valid', 'is_correct' => false],
                            ['choice_text' => 'Energy methods cannot describe motion', 'is_correct' => false],
                            ['choice_text' => 'Momentum methods apply only to collisions', 'is_correct' => false],
                        ],
                        'explanation' => 'Newtonian, Lagrangian, Hamiltonian, energy and momentum formulations are complementary descriptions of dynamics.',
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

                // Randomize choice order so the correct answer
                // is not predictable by position.
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