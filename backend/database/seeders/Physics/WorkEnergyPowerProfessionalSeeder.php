<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WorkEnergyPowerProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'work-energy-power')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Analytical Work and Conservative Fields
            // ============================================================

            [
                'title' => 'Analytical Work and Conservative Fields',
                'description' => 'Professional analysis of line integrals, conservative vector fields and potential functions.',
                'questions' => [

                    [
                        'question' => 'For a particle moving along a trajectory C under a position-dependent force F(r), which expression gives the mechanical work?',
                        'choices' => [
                            ['choice_text' => 'W = ∫C F · dr', 'is_correct' => true],
                            ['choice_text' => 'W = ∫C F × dr', 'is_correct' => false],
                            ['choice_text' => 'W = ∫C F · dt', 'is_correct' => false],
                            ['choice_text' => 'W = ∫C F/r dt', 'is_correct' => false],
                        ],
                        'explanation' => 'The work of a force along a trajectory is the line integral W = ∫C F · dr.',
                    ],

                    [
                        'question' => 'For a conservative force field in a simply connected region, which condition is equivalent to path independence of work?',
                        'choices' => [
                            ['choice_text' => '∇ × F = 0', 'is_correct' => true],
                            ['choice_text' => '∇ · F = 0', 'is_correct' => false],
                            ['choice_text' => '∇F = 0 everywhere', 'is_correct' => false],
                            ['choice_text' => 'F = 0 everywhere', 'is_correct' => false],
                        ],
                        'explanation' => 'In a simply connected region, an irrotational field is conservative.',
                    ],

                    [
                        'question' => 'If F = -∇U, what does a decrease in potential energy imply about the work done by the conservative force?',
                        'choices' => [
                            ['choice_text' => 'The conservative force performs positive work', 'is_correct' => true],
                            ['choice_text' => 'The conservative force performs negative work', 'is_correct' => false],
                            ['choice_text' => 'The work must be zero', 'is_correct' => false],
                            ['choice_text' => 'The force must vanish', 'is_correct' => false],
                        ],
                        'explanation' => 'For conservative forces, W = -ΔU. Thus ΔU < 0 implies W > 0.',
                    ],

                    [
                        'question' => 'Why is the work around a closed path zero for a conservative force?',
                        'choices' => [
                            ['choice_text' => The initial and final points coincide, so the potential-energy difference is zero', 'is_correct' => true],
                            ['choice_text' => 'The force must be zero everywhere', 'is_correct' => false],
                            ['choice_text' => 'The path length is always zero', 'is_correct' => false],
                            ['choice_text' => 'Closed paths cannot contain displacement', 'is_correct' => false],
                        ],
                        'explanation' => 'For a conservative force, the work depends only on endpoints, which are identical on a closed path.',
                    ],

                    [
                        'question' => 'A force field is given by F(x,y) = (2xy, x²). What is ∂Fy/∂x - ∂Fx/∂y?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '2x', 'is_correct' => false],
                            ['choice_text' => '2y', 'is_correct' => false],
                            ['choice_text' => 'x² - y²', 'is_correct' => false],
                        ],
                        'explanation' => '∂Fy/∂x = 2x and ∂Fx/∂y = 2x, so the difference is zero.',
                    ],

                    [
                        'question' => 'What mathematical object represents the potential energy associated with a conservative force field?',
                        'choices' => [
                            ['choice_text' => 'A scalar potential U(r)', 'is_correct' => true],
                            ['choice_text' => 'A vector potential equal to F', 'is_correct' => false],
                            ['choice_text' => 'A tensor equal to acceleration', 'is_correct' => false],
                            ['choice_text' => 'A scalar equal to momentum', 'is_correct' => false],
                        ],
                        'explanation' => 'A conservative force can be derived from a scalar potential U.',
                    ],

                    [
                        'question' => 'Why is the condition ∇ × F = 0 not sufficient by itself to guarantee a globally defined potential in every possible region?',
                        'choices' => [
                            ['choice_text' => The topology of the domain can prevent a curl-free field from being globally conservative', 'is_correct' => true],
                            ['choice_text' => 'The curl condition is never relevant', 'is_correct' => false],
                            ['choice_text' => 'Potential energy is always vectorial', 'is_correct' => false],
                            ['choice_text' => 'A force must have zero divergence instead', 'is_correct' => false],
                        ],
                        'explanation' => 'Global conservativity also depends on the topology of the domain; simply connectedness is a common sufficient condition.',
                    ],

                    [
                        'question' => 'Why can a potential function be shifted by an arbitrary additive constant without changing the force?',
                        'choices' => [
                            ['choice_text' => 'The gradient of a constant is zero', 'is_correct' => true],
                            ['choice_text' => 'The force depends directly on the absolute value of U', 'is_correct' => false],
                            ['choice_text' => 'The constant changes the particle mass', 'is_correct' => false],
                            ['choice_text' => 'Potential energy is not related to force', 'is_correct' => false],
                        ],
                        'explanation' => 'Since F = -∇U, adding a constant leaves the force unchanged.',
                    ],

                    [
                        'question' => 'What is the work-energy relation for a particle subjected to a general resultant force?',
                        'choices' => [
                            ['choice_text' => 'W_net = ΔK', 'is_correct' => true],
                            ['choice_text' => 'W_net = ΔU always', 'is_correct' => false],
                            ['choice_text' => 'W_net = Δp', 'is_correct' => false],
                            ['choice_text' => 'W_net = K/U', 'is_correct' => false],
                        ],
                        'explanation' => 'The net work on a particle equals the change in its kinetic energy.',
                    ],

                    [
                        'question' => 'Why is the line-integral formulation of work fundamental for nonuniform forces?',
                        'choices' => [
                            ['choice_text' => 'It accounts for the local force value and direction along the entire trajectory', 'is_correct' => true],
                            ['choice_text' => 'It assumes the force is constant', 'is_correct' => false],
                            ['choice_text' => 'It removes the need for displacement', 'is_correct' => false],
                            ['choice_text' => 'It applies only to one-dimensional motion', 'is_correct' => false],
                        ],
                        'explanation' => 'For varying forces, the infinitesimal contribution dW = F · dr must be accumulated along the path.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 2 — Lagrangian Energy Methods
            // ============================================================

            [
                'title' => 'Lagrangian Energy Methods',
                'description' => 'Professional treatment of kinetic and potential energies within the Lagrangian framework.',
                'questions' => [

                    [
                        'question' => 'For a conservative mechanical system, what is the standard Lagrangian?',
                        'choices' => [
                            ['choice_text' => 'L = T - V', 'is_correct' => true],
                            ['choice_text' => 'L = T + V', 'is_correct' => false],
                            ['choice_text' => 'L = V - T²', 'is_correct' => false],
                            ['choice_text' => 'L = T/V', 'is_correct' => false],
                        ],
                        'explanation' => 'For standard conservative systems, the Lagrangian is kinetic energy minus potential energy.',
                    ],

                    [
                        'question' => 'If a generalized coordinate q does not appear explicitly in the Lagrangian, what quantity is conserved?',
                        'choices' => [
                            ['choice_text' => 'The conjugate momentum p_q = ∂L/∂q̇', 'is_correct' => true],
                            ['choice_text' => 'The coordinate q itself', 'is_correct' => false],
                            ['choice_text' => 'The kinetic energy alone', 'is_correct' => false],
                            ['choice_text' => 'The acceleration q̈', 'is_correct' => false],
                        ],
                        'explanation' => 'An ignorable coordinate has conserved conjugate momentum.',
                    ],

                    [
                        'question' => 'Why does time-translation symmetry lead to energy conservation in a time-independent Lagrangian system?',
                        'choices' => [
                            ['choice_text' => The Lagrangian has no explicit time dependence, producing a conserved energy function', 'is_correct' => true],
                            ['choice_text' => 'Time becomes irrelevant to the equations', 'is_correct' => false],
                            ['choice_text' => 'The potential energy must vanish', 'is_correct' => false],
                            ['choice_text' => 'Momentum necessarily becomes zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Time-translation invariance is associated with conservation of energy through Noether’s theorem.',
                    ],

                    [
                        'question' => 'For a standard natural Lagrangian L = T - V with T quadratic in generalized velocities, what does the conserved Hamiltonian generally correspond to?',
                        'choices' => [
                            ['choice_text' => 'The total mechanical energy T + V', 'is_correct' => true],
                            ['choice_text' => 'Only V', 'is_correct' => false],
                            ['choice_text' => 'Only T', 'is_correct' => false],
                            ['choice_text' => 'The Lagrangian L itself', 'is_correct' => false],
                        ],
                        'explanation' => 'For a time-independent natural system, the Hamiltonian equals total mechanical energy.',
                    ],

                    [
                        'question' => 'Why can generalized coordinates simplify the calculation of kinetic energy?',
                        'choices' => [
                            ['choice_text' => They can incorporate geometric constraints directly into the velocity expressions', 'is_correct' => true],
                            ['choice_text' => 'They eliminate all velocities', 'is_correct' => false],
                            ['choice_text' => 'They force every coordinate to be Cartesian', 'is_correct' => false],
                            ['choice_text' => 'They make all masses equal', 'is_correct' => false],
                        ],
                        'explanation' => 'Well-chosen generalized coordinates reduce independent variables while respecting the geometry of the system.',
                    ],

                    [
                        'question' => 'What is the Euler-Lagrange equation for a conservative generalized coordinate q?',
                        'choices' => [
                            ['choice_text' => 'd/dt(∂L/∂q̇) - ∂L/∂q = 0', 'is_correct' => true],
                            ['choice_text' => '∂L/∂q + ∂L/∂q̇ = 0', 'is_correct' => false],
                            ['choice_text' => 'dL/dq = q̇', 'is_correct' => false],
                            ['choice_text' => '∂²L/∂q² = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'The Euler-Lagrange equation follows from stationary action.',
                    ],

                    [
                        'question' => 'Why is the Lagrangian method especially useful when the force components are cumbersome in Cartesian coordinates?',
                        'choices' => [
                            ['choice_text' => It allows the dynamics to be expressed directly in coordinates adapted to the geometry and constraints', 'is_correct' => true],
                            ['choice_text' => 'It removes all physical forces', 'is_correct' => false],
                            ['choice_text' => 'It requires no kinetic energy calculation', 'is_correct' => false],
                            ['choice_text' => 'It only applies to one-dimensional systems', 'is_correct' => false],
                        ],
                        'explanation' => 'The Lagrangian formulation often avoids explicitly resolving constraint forces.',
                    ],

                    [
                        'question' => 'In a time-independent conservative system, what relationship between the Lagrangian and conserved energy is commonly obtained?',
                        'choices' => [
                            ['choice_text' => 'E = Σq̇_i(∂L/∂q̇_i) - L', 'is_correct' => true],
                            ['choice_text' => 'E = L²', 'is_correct' => false],
                            ['choice_text' => 'E = L/T', 'is_correct' => false],
                            ['choice_text' => 'E = ∂L/∂t', 'is_correct' => false],
                        ],
                        'explanation' => 'This energy function becomes T + V for standard natural Lagrangians.',
                    ],

                    [
                        'question' => 'Why is the Lagrangian not itself required to equal an observable energy?',
                        'choices' => [
                            ['choice_text' => Physical predictions depend on the equations generated by L and appropriate symmetries, not on L having the dimensions of a directly measurable energy', 'is_correct' => true],
                            ['choice_text' => 'The Lagrangian is always dimensionless', 'is_correct' => false],
                            ['choice_text' => 'The Lagrangian is identical to momentum', 'is_correct' => false],
                            ['choice_text' => 'Only potential energy is observable', 'is_correct' => false],
                        ],
                        'explanation' => 'Although L = T - V has energy units in standard mechanics, its physical role is as the generator of equations of motion.',
                    ],

                    [
                        'question' => 'Why are energy methods and Lagrangian methods complementary?',
                        'choices' => [
                            ['choice_text' => 'Energy conservation can provide first integrals while Lagrange equations determine the detailed dynamics', 'is_correct' => true],
                            ['choice_text' => 'They describe incompatible physical systems', 'is_correct' => false],
                            ['choice_text' => 'Lagrange equations cannot include energy', 'is_correct' => false],
                            ['choice_text' => 'Energy conservation replaces all equations of motion', 'is_correct' => false],
                        ],
                        'explanation' => 'The two approaches emphasize different but compatible structures of the same dynamics.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 3 — Hamiltonian and Phase-Space Energy
            // ============================================================

            [
                'title' => 'Hamiltonian and Phase-Space Energy',
                'description' => 'Professional treatment of Hamiltonians, phase space and energy conservation.',
                'questions' => [

                    [
                        'question' => 'What is the Hamiltonian obtained from a Lagrangian through a Legendre transformation?',
                        'choices' => [
                            ['choice_text' => 'H = Σp_iq̇_i - L', 'is_correct' => true],
                            ['choice_text' => 'H = L - Σp_iq̇_i', 'is_correct' => false],
                            ['choice_text' => 'H = L²', 'is_correct' => false],
                            ['choice_text' => 'H = p_i/q_i', 'is_correct' => false],
                        ],
                        'explanation' => 'The Hamiltonian is constructed from canonical momenta and generalized velocities using a Legendre transform.',
                    ],

                    [
                        'question' => 'What happens to the Hamiltonian along a trajectory when ∂H/∂t = 0?',
                        'choices' => [
                            ['choice_text' => 'H is conserved', 'is_correct' => true],
                            ['choice_text' => 'H grows linearly with time', 'is_correct' => false],
                            ['choice_text' => 'H must vanish', 'is_correct' => false],
                            ['choice_text' => 'H equals momentum', 'is_correct' => false],
                        ],
                        'explanation' => 'For an autonomous Hamiltonian system, dH/dt = ∂H/∂t = 0 along the motion.',
                    ],

                    [
                        'question' => 'Why is phase space useful when studying dynamical systems?',
                        'choices' => [
                            ['choice_text' => 'It represents both configuration and momentum variables, allowing the full state evolution to be visualized', 'is_correct' => true],
                            ['choice_text' => 'It contains position but never momentum', 'is_correct' => false],
                            ['choice_text' => 'It is limited to thermodynamic systems', 'is_correct' => false],
                            ['choice_text' => 'It removes the need for initial conditions', 'is_correct' => false],
                        ],
                        'explanation' => 'Phase space provides a complete state representation for Hamiltonian dynamics.',
                    ],

                    [
                        'question' => 'For a one-dimensional particle with H = p²/(2m) + V(x), what is q̇?',
                        'choices' => [
                            ['choice_text' => 'q̇ = p/m', 'is_correct' => true],
                            ['choice_text' => 'q̇ = mp', 'is_correct' => false],
                            ['choice_text' => 'q̇ = V/p', 'is_correct' => false],
                            ['choice_text' => 'q̇ = pV', 'is_correct' => false],
                        ],
                        'explanation' => 'Hamilton’s equation q̇ = ∂H/∂p gives p/m.',
                    ],

                    [
                        'question' => 'For H = p²/(2m) + V(x), what is the canonical momentum equation?',
                        'choices' => [
                            ['choice_text' => 'ṗ = -dV/dx', 'is_correct' => true],
                            ['choice_text' => 'ṗ = dV/dx', 'is_correct' => false],
                            ['choice_text' => 'ṗ = -p/m', 'is_correct' => false],
                            ['choice_text' => 'ṗ = Vp', 'is_correct' => false],
                        ],
                        'explanation' => 'Hamilton’s equation gives ṗ = -∂H/∂x = -dV/dx.',
                    ],

                    [
                        'question' => 'Why do constant-energy trajectories occupy hypersurfaces in phase space?',
                        'choices' => [
                            ['choice_text' => Conservation of H restricts the accessible states to those satisfying H = constant', 'is_correct' => true],
                            ['choice_text' => 'Every trajectory is necessarily one-dimensional in phase space', 'is_correct' => false],
                            ['choice_text' => 'Momentum must be zero', 'is_correct' => false],
                            ['choice_text' => 'The system has no time evolution', 'is_correct' => false],
                        ],
                        'explanation' => 'An independent conserved energy reduces the accessible subset of phase space.',
                    ],

                    [
                        'question' => 'Why can canonical transformations preserve the structure of Hamiltonian equations while changing coordinates?',
                        'choices' => [
                            ['choice_text' => 'They preserve the underlying symplectic structure of phase space', 'is_correct' => true],
                            ['choice_text' => 'They preserve only the numerical value of position', 'is_correct' => false],
                            ['choice_text' => 'They remove all energy conservation laws', 'is_correct' => false],
                            ['choice_text' => 'They are arbitrary transformations without constraints', 'is_correct' => false],
                        ],
                        'explanation' => 'Canonical transformations preserve the fundamental symplectic geometry.',
                    ],

                    [
                        'question' => 'Why can Hamiltonian mechanics be especially useful for systems with many conserved quantities?',
                        'choices' => [
                            ['choice_text' => 'Conserved canonical momenta can reduce the effective dimension of the phase-space problem', 'is_correct' => true],
                            ['choice_text' => 'Conserved quantities make all coordinates fixed', 'is_correct' => false],
                            ['choice_text' => 'Momentum is absent from Hamiltonian mechanics', 'is_correct' => false],
                            ['choice_text' => 'Energy conservation becomes invalid', 'is_correct' => false],
                        ],
                        'explanation' => 'Each first integral can constrain the trajectory and sometimes permit reduction of the dynamics.',
                    ],

                    [
                        'question' => 'What role does the Hamiltonian commonly play in classical mechanics when there is no explicit time dependence?',
                        'choices' => [
                            ['choice_text' => 'It serves as a conserved generator associated with time evolution', 'is_correct' => true],
                            ['choice_text' => 'It represents only potential energy', 'is_correct' => false],
                            ['choice_text' => 'It is always equal to zero', 'is_correct' => false],
                            ['choice_text' => 'It measures only spatial displacement', 'is_correct' => false],
                        ],
                        'explanation' => 'The Hamiltonian generates time evolution through Hamilton’s equations and is conserved when autonomous.',
                    ],

                    [
                        'question' => 'Why is phase-space analysis valuable for distinguishing bounded from unbounded motion?',
                        'choices' => [
                            ['choice_text' => Energy surfaces and accessible regions reveal whether trajectories remain confined or can escape', 'is_correct' => true],
                            ['choice_text' => 'Phase space contains no energy information', 'is_correct' => false],
                            ['choice_text' => 'All trajectories are bounded', 'is_correct' => false],
                            ['choice_text' => 'Boundedness depends only on coordinate names', 'is_correct' => false],
                        ],
                        'explanation' => 'Energy and effective potential structures allow qualitative determination of allowed regions of motion.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 4 — Rigid Body Work and Energy
            // ============================================================

            [
                'title' => 'Rigid Body Work and Energy',
                'description' => 'Professional analysis of rotational energy, torque and coupled translational-rotational systems.',
                'questions' => [

                    [
                        'question' => 'For a rigid body rotating about a fixed axis, what is the rotational kinetic energy?',
                        'choices' => [
                            ['choice_text' => 'K_rot = 1/2 Iω²', 'is_correct' => true],
                            ['choice_text' => 'K_rot = Iω', 'is_correct' => false],
                            ['choice_text' => 'K_rot = Iα²', 'is_correct' => false],
                            ['choice_text' => 'K_rot = 1/2 Iα', 'is_correct' => false],
                        ],
                        'explanation' => 'Rotational kinetic energy is 1/2 Iω² for rotation about a fixed axis.',
                    ],

                    [
                        'question' => 'For a constant torque τ applied through angular displacement Δθ, what work is performed?',
                        'choices' => [
                            ['choice_text' => 'W = τΔθ', 'is_correct' => true],
                            ['choice_text' => 'W = τ/Δθ', 'is_correct' => false],
                            ['choice_text' => 'W = τΔθ²', 'is_correct' => false],
                            ['choice_text' => 'W = τ + Δθ', 'is_correct' => false],
                        ],
                        'explanation' => 'Rotational work for a constant torque is τΔθ.',
                    ],

                    [
                        'question' => 'What is the rotational power of a torque τ acting at angular velocity ω?',
                        'choices' => [
                            ['choice_text' => 'P = τω', 'is_correct' => true],
                            ['choice_text' => 'P = τ/ω', 'is_correct' => false],
                            ['choice_text' => 'P = τω²', 'is_correct' => false],
                            ['choice_text' => 'P = τ + ω', 'is_correct' => false],
                        ],
                        'explanation' => 'Instantaneous rotational power is P = τ · ω, or τω about a common fixed axis.',
                    ],

                    [
                        'question' => 'Why can rolling motion involve both translational and rotational kinetic energy?',
                        'choices' => [
                            ['choice_text' => The center of mass translates while the rigid body simultaneously rotates about its center of mass', 'is_correct' => true],
                            ['choice_text' => Rotation and translation cannot occur simultaneously', 'is_correct' => false],
                            ['choice_text' => Only the center of mass has kinetic energy', 'is_correct' => false],
                            ['choice_text' => Rotation always eliminates translation', 'is_correct' => false],
                        ],
                        'explanation' => 'For a rigid body, total kinetic energy can be decomposed into center-of-mass translation and rotation about the center of mass.',
                    ],

                    [
                        'question' => 'For a rolling rigid body without slipping, what kinematic relation connects center-of-mass speed v and angular speed ω?',
                        'choices' => [
                            ['choice_text' => 'v = Rω', 'is_correct' => true],
                            ['choice_text' => 'v = ω/R', 'is_correct' => false],
                            ['choice_text' => 'v = Rω²', 'is_correct' => false],
                            ['choice_text' => 'v = R/ω', 'is_correct' => false],
                        ],
                        'explanation' => 'The no-slip condition gives v_cm = Rω.',
                    ],

                    [
                        'question' => 'Why can static friction do zero work on a rolling wheel at a stationary contact point under ideal no-slip conditions?',
                        'choice_text' => 'The point of contact is instantaneously at rest relative to the surface, so the instantaneous power F · v_contact is zero in the idealized model.',
                    ],

                    [
                        'question' => 'What is the total kinetic energy of a rolling rigid body with center-of-mass speed v?',
                        'choices' => [
                            ['choice_text' => 'K = 1/2 Mv² + 1/2 I_cmω²', 'is_correct' => true],
                            ['choice_text' => 'K = 1/2 Mv² only', 'is_correct' => false],
                            ['choice_text' => 'K = 1/2 I_cmω only', 'is_correct' => false],
                            ['choice_text' => 'K = Mv + Iω', 'is_correct' => false],
                        ],
                        'explanation' => 'Rigid-body kinetic energy separates into translation of the center of mass and rotation about it.',
                    ],

                    [
                        'question' => 'Why does the distribution of mass matter for rolling acceleration down an incline?',
                        'choices' => [
                            ['choice_text' => Different moments of inertia change how gravitational energy is divided between translation and rotation', 'is_correct' => true],
                            ['choice_text' => 'Mass distribution never affects rotation', 'is_correct' => false],
                            ['choice_text' => 'Only total mass matters in all rotational problems', 'is_correct' => false],
                            ['choice_text' => 'The gravitational field depends on shape at laboratory scale', 'is_correct' => false],
                        ],
                        'explanation' => 'The moment of inertia determines the rotational energy associated with a given angular speed.',
                    ],

                    [
                        'question' => 'Why can two rolling objects with identical mass and radius reach the bottom of an incline at different speeds?',
                        'choices' => [
                            ['choice_text' => 'Their different moments of inertia lead to different energy partitions', 'is_correct' => true],
                            ['choice_text' => 'Gravity acts differently on objects with different shapes', 'is_correct' => false],
                            ['choice_text' => 'Their masses are necessarily different', 'is_correct' => false],
                            ['choice_text' => 'The rolling condition forces identical acceleration regardless of shape', 'is_correct' => false],
                        ],
                        'explanation' => 'For no-slip rolling, the rotational inertia affects the fraction of energy stored in rotation.',
                    ],

                    [
                        'question' => 'Why is rotational energy conservation useful for ideal rolling problems?',
                        'choices' => [
                            ['choice_text' => 'It directly relates gravitational potential energy to translational and rotational kinetic energies', 'is_correct' => true],
                            ['choice_text' => 'It removes the need to know the moment of inertia', 'is_correct' => false],
                            ['choice_text' => 'It assumes friction performs positive work', 'is_correct' => false],
                            ['choice_text' => 'It applies only to objects without mass', 'is_correct' => false],
                        ],
                        'explanation' => 'Mechanical energy conservation provides an efficient route to final speeds in ideal rolling systems.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 5 — Non-Conservative Work and Dissipation
            // ============================================================

            [
                'title' => 'Non-Conservative Work and Dissipation',
                'description' => 'Professional treatment of friction, drag, irreversible work and energy dissipation.',
                'questions' => [

                    [
                        'question' => 'How does kinetic friction modify a mechanical-energy balance?',
                        'choices' => [
                            ['choice_text' => It contributes non-conservative work that changes mechanical energy', 'is_correct' => true],
                            ['choice_text' => 'It always conserves mechanical energy', 'is_correct' => false],
                            ['choice_text' => 'It creates mechanical energy', 'is_correct' => false],
                            ['choice_text' => 'It cannot perform work', 'is_correct' => false],
                        ],
                        'explanation' => 'Friction performs path-dependent work and converts mechanical energy into internal energy.',
                    ],

                    [
                        'question' => 'For a system subject to both conservative and non-conservative forces, which relation is useful?',
                        'choices' => [
                            ['choice_text' => 'Δ(K + U) = W_non-conservative', 'is_correct' => true],
                            ['choice_text' => 'Δ(K + U) = W_conservative', 'is_correct' => false],
                            ['choice_text' => 'Δ(K - U) = 0 always', 'is_correct' => false],
                            ['choice_text' => 'Δ(K + U) = 0 regardless of dissipation', 'is_correct' => false],
                        ],
                        'explanation' => 'Non-conservative work accounts for changes in mechanical energy.',
                    ],

                    [
                        'question' => 'Why is drag often described as dissipative?',
                        'choices' => [
                            ['choice_text' => 'Its work usually transfers organized mechanical energy into internal energy of the body and surrounding medium', 'is_correct' => true],
                            ['choice_text' => 'It creates energy from nothing', 'is_correct' => false],
                            ['choice_text' => 'It is always conservative', 'is_correct' => false],
                            ['choice_text' => 'It stores mechanical energy reversibly in every case', 'is_correct' => false],
                        ],
                        'explanation' => 'Drag generally converts macroscopic mechanical energy into thermal and other internal forms.',
                    ],

                    [
                        'question' => 'Why is the work done by kinetic friction path-dependent?',
                        'choices' => [
                            ['choice_text' => Its magnitude depends on the distance traveled while the friction force acts', 'is_correct' => true],
                            ['choice_text' => 'It is derived from a scalar potential', 'is_correct' => false],
                            ['choice_text' => 'Its work depends only on initial and final positions', 'is_correct' => false],
                            ['choice_text' => 'It is independent of the trajectory', 'is_correct' => false],
                        ],
                        'explanation' => 'For simple sliding friction, longer travel generally means more energy dissipated.',
                    ],

                    [
                        'question' => 'A block slides 10 m under a constant kinetic-friction force of 8 N opposing its motion. What work does friction perform?',
                        'choices' => [
                            ['choice_text' => '-80 J', 'is_correct' => true],
                            ['choice_text' => '80 J', 'is_correct' => false],
                            ['choice_text' => '-18 J', 'is_correct' => false],
                            ['choice_text' => '0 J', 'is_correct' => false],
                        ],
                        'explanation' => 'W_f = -fd = -8 × 10 = -80 J.',
                    ],

                    [
                        'question' => 'Why can total energy remain conserved when mechanical energy decreases due to friction?',
                        'choices' => [
                            ['choice_text' => The lost mechanical energy is transformed into internal thermal and microscopic energy', 'is_correct' => true],
                            ['choice_text' => 'Energy is destroyed by friction', 'is_correct' => false],
                            ['choice_text' => 'The first law of thermodynamics is violated', 'is_correct' => false],
                            ['choice_text' => 'Mechanical energy is the only possible form of energy', 'is_correct' => false],
                        ],
                        'explanation' => 'Friction transfers energy among physical subsystems without violating total energy conservation.',
                    ],

                    [
                        'question' => 'Why can the same initial and final positions correspond to different mechanical energy changes when non-conservative forces act?',
                        'choices' => [
                            ['choice_text' => 'Non-conservative work depends on the path between the endpoints', 'is_correct' => true],
                            ['choice_text' => 'Potential energy becomes path-dependent', 'is_correct' => false],
                            ['choice_text' => 'Gravity becomes non-conservative', 'is_correct' => false],
                            ['choice_text' => 'The endpoints cease to exist physically', 'is_correct' => false],
                        ],
                        'explanation' => 'Mechanical-energy change can depend on the trajectory when non-conservative work is present.',
                    ],

                    [
                        'question' => 'Why is efficiency often less than unity for machines involving dissipative effects?',
                        'choices' => [
                            ['choice_text' => 'Part of the supplied energy becomes unavailable as useful mechanical output', 'is_correct' => true],
                            ['choice_text' => 'Energy is destroyed', 'is_correct' => false],
                            ['choice_text' => 'Useful work is always zero', 'is_correct' => false],
                            ['choice_text' => 'Dissipation increases useful output', 'is_correct' => false],
                        ],
                        'explanation' => 'Dissipative processes reduce the fraction of input energy that can be extracted as useful work.',
                    ],

                    [
                        'question' => 'Why is minimizing dissipative work important in mechanical design?',
                        'choices' => [
                            ['choice_text' => 'It can reduce energy consumption, heating and wear while improving useful efficiency', 'is_correct' => true],
                            ['choice_text' => 'It makes conservation laws invalid', 'is_correct' => false],
                            ['choice_text' => 'It increases unavoidable losses', 'is_correct' => false],
                            ['choice_text' => 'It removes the need for lubrication', 'is_correct' => false],
                        ],
                        'explanation' => 'Reducing unwanted energy dissipation is a central objective in efficient mechanical systems.',
                    ],

                    [
                        'question' => 'Why does an energy balance provide a useful engineering check even when the exact force history is complicated?',
                        'choices' => [
                            ['choice_text' => 'The total input, output and dissipative contributions must satisfy an energy conservation relation', 'is_correct' => true],
                            ['choice_text' => 'Energy calculations ignore physical constraints', 'is_correct' => false],
                            ['choice_text' => 'Only ideal systems conserve energy', 'is_correct' => false],
                            ['choice_text' => 'Energy balance depends only on mass', 'is_correct' => false],
                        ],
                        'explanation' => 'Energy accounting is often a powerful consistency check for complex mechanical calculations.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 6 — Central Forces and Orbital Energy
            // ============================================================

            [
                'title' => 'Central Forces and Orbital Energy',
                'description' => 'Professional analysis of gravitational energy, effective potentials and orbital mechanics.',
                'questions' => [

                    [
                        'question' => 'For Newtonian gravity with zero potential at infinity, what is the potential energy of two point masses M and m separated by r?',
                        'choices' => [
                            ['choice_text' => 'U = -GMm/r', 'is_correct' => true],
                            ['choice_text' => 'U = GMm/r', 'is_correct' => false],
                            ['choice_text' => 'U = -GMm/r²', 'is_correct' => false],
                            ['choice_text' => 'U = GMmr', 'is_correct' => false],
                        ],
                        'explanation' => 'The gravitational potential energy is negative for an attractive inverse-square force when U(∞) = 0.',
                    ],

                    [
                        'question' => 'What is the total mechanical energy of a circular orbit of mass m around a central mass M?',
                        'choices' => [
                            ['choice_text' => 'E = -GMm/(2r)', 'is_correct' => true],
                            ['choice_text' => 'E = GMm/(2r)', 'is_correct' => false],
                            ['choice_text' => 'E = -GMm/r²', 'is_correct' => false],
                            ['choice_text' => 'E = GMm/r', 'is_correct' => false],
                        ],
                        'explanation' => 'For a circular orbit, K = GMm/(2r) and U = -GMm/r, giving E = -GMm/(2r).',
                    ],

                    [
                        'question' => 'Why is the total energy of a bound Newtonian gravitational orbit negative when zero energy is assigned at infinity?',
                        'choices' => [
                            ['choice_text' => The bound state has lower energy than the unbound state at infinite separation', 'is_correct' => true],
                            ['choice_text' => Negative total energy means energy is not conserved', 'is_correct' => false],
                            ['choice_text' => Gravity destroys energy', 'is_correct' => false],
                            ['choice_text' => Kinetic energy is negative', 'is_correct' => false],
                        ],
                        'explanation' => 'A negative total energy characterizes a gravitationally bound orbit under this reference convention.',
                    ],

                    [
                        'question' => 'What is the effective potential for a particle of mass m in a central potential V(r) with angular momentum magnitude L?',
                        'choices' => [
                            ['choice_text' => 'V_eff = V(r) + L²/(2mr²)', 'is_correct' => true],
                            ['choice_text' => 'V_eff = V(r) - L²/(2mr²)', 'is_correct' => false],
                            ['choice_text' => 'V_eff = V(r) + mr²', 'is_correct' => false],
                            ['choice_text' => 'V_eff = L/(mr)', 'is_correct' => false],
                        ],
                        'explanation' => 'The angular momentum contribution creates the effective centrifugal barrier L²/(2mr²).',
                    ],

                    [
                        'question' => 'Why does angular momentum conservation simplify the energy analysis of a central-force problem?',
                        'choices' => [
                            ['choice_text' => 'It allows the angular degree of freedom to be incorporated into an effective radial potential', 'is_correct' => true],
                            ['choice_text' => 'It eliminates kinetic energy', 'is_correct' => false],
                            ['choice_text' => 'It makes the central potential constant', 'is_correct' => false],
                            ['choice_text' => 'It forces the orbit to be circular in all cases', 'is_correct' => false],
                        ],
                        'explanation' => 'A constant angular momentum permits reduction to one-dimensional radial motion.',
                    ],

                    [
                        'question' => 'For a circular orbit, what condition must the effective potential satisfy?',
                        'choices' => [
                            ['choice_text' => 'dV_eff/dr = 0', 'is_correct' => true],
                            ['choice_text' => 'dV_eff/dr = 1', 'is_correct' => false],
                            ['choice_text' => 'V_eff = 0', 'is_correct' => false],
                            ['choice_text' => 'd²V_eff/dr² = 0 always', 'is_correct' => false],
                        ],
                        'explanation' => 'A circular orbit occurs at a stationary point of the effective radial potential.',
                    ],

                    [
                        'question' => 'What condition indicates stability of a circular orbit in the effective-potential picture?',
                        'choices' => [
                            ['choice_text' => 'd²V_eff/dr² > 0', 'is_correct' => true],
                            ['choice_text' => 'd²V_eff/dr² < 0', 'is_correct' => false],
                            ['choice_text' => 'V_eff must vanish', 'is_correct' => false],
                            ['choice_text' => 'L must be zero', 'is_correct' => false],
                        ],
                        'explanation' => 'A local minimum of V_eff corresponds to stable radial perturbations.',
                    ],

                    [
                        'question' => 'What is the escape speed from radius R for Newtonian gravity?',
                        'choices' => [
                            ['choice_text' => 'vesc = √(2GM/R)', 'is_correct' => true],
                            ['choice_text' => 'vesc = √(GM/R)', 'is_correct' => false],
                            ['choice_text' => 'vesc = GM/R²', 'is_correct' => false],
                            ['choice_text' => 'vesc = 2GM/R', 'is_correct' => false],
                        ],
                        'explanation' => 'Escape requires total energy to reach zero at infinity, giving vesc = √(2GM/R).',
                    ],

                    [
                        'question' => 'Why does an elliptical gravitational orbit conserve total mechanical energy even though speed changes along the orbit?',
                        'choices' => [
                            ['choice_text' => Gravitational potential and kinetic energies exchange while their sum remains constant', 'is_correct' => true],
                            ['choice_text' => 'The speed remains constant on every ellipse', 'is_correct' => false],
                            ['choice_text' => 'Gravity is non-conservative', 'is_correct' => false],
                            ['choice_text' => 'Potential energy is always zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Gravity is conservative, so varying kinetic and potential energies sum to a constant total energy.',
                    ],

                    [
                        'question' => 'Why is orbital energy a useful quantity when classifying gravitational trajectories?',
                        'choices' => [
                            ['choice_text' => 'Its sign distinguishes bound motion from unbound motion under the usual Newtonian reference', 'is_correct' => true],
                            ['choice_text' => 'Energy determines only the object’s color', 'is_correct' => false],
                            ['choice_text' => 'All possible trajectories have identical total energy', 'is_correct' => false],
                            ['choice_text' => 'Energy is not conserved in gravitational motion', 'is_correct' => false],
                        ],
                        'explanation' => 'For Keplerian motion, E < 0 corresponds to bound ellipses, E = 0 to parabolic escape, and E > 0 to hyperbolic trajectories.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 7 — Numerical Energy Methods
            // ============================================================

            [
                'title' => 'Numerical Energy Methods',
                'description' => 'Professional use of numerical integration, energy conservation and computational mechanics.',
                'questions' => [

                    [
                        'question' => 'Why can numerical integration be necessary for realistic work-energy problems?',
                        'choices' => [
                            ['choice_text' => 'The force field, geometry or constraints may be too complicated for practical closed-form integration', 'is_correct' => true],
                            ['choice_text' => 'Energy conservation fails numerically by definition', 'is_correct' => false],
                            ['choice_text' => 'Analytical integration is impossible for every force', 'is_correct' => false],
                            ['choice_text' => 'Numerical methods are used only when the mass is unknown', 'is_correct' => false],
                        ],
                        'explanation' => 'Realistic systems can require numerical evaluation of trajectories and work integrals.',
                    ],

                    [
                        'question' => 'Why is monitoring total energy useful when numerically integrating a conservative system?',
                        'choices' => [
                            ['choice_text' => Energy drift provides a diagnostic of numerical error or an unsuitable integrator', 'is_correct' => true],
                            ['choice_text' => 'Energy monitoring changes the physical solution', 'is_correct' => false],
                            ['choice_text' => 'All numerical methods conserve energy exactly', 'is_correct' => false],
                            ['choice_text' => 'Energy is irrelevant to numerical dynamics', 'is_correct' => false],
                        ],
                        'explanation' => 'Unexpected energy drift can reveal accumulated numerical errors.',
                    ],

                    [
                        'question' => 'Why can symplectic integrators outperform generic methods for long-term Hamiltonian simulations?',
                        'choices' => [
                            ['choice_text' => 'They preserve the symplectic structure and often keep energy error bounded over long times', 'is_correct' => true],
                            ['choice_text' => 'They eliminate all discretization error', 'is_correct' => false],
                            ['choice_text' => 'They apply only to dissipative systems', 'is_correct' => false],
                            ['choice_text' => 'They guarantee exact trajectories at every step', 'is_correct' => false],
                        ],
                        'explanation' => 'Symplectic schemes are designed to preserve geometric structure important to Hamiltonian dynamics.',
                    ],

                    [
                        'question' => 'What is the main danger of using a time step that is too large in an energy-based numerical simulation?',
                        'choices' => [
                            ['choice_text' => 'Important dynamical features can be missed and numerical error can become significant', 'is_correct' => true],
                            ['choice_text' => 'The exact solution becomes simpler', 'is_correct' => false],
                            ['choice_text' => 'Energy conservation becomes physically invalid', 'is_correct' => false],
                            ['choice_text' => 'The system automatically becomes chaotic', 'is_correct' => false],
                        ],
                        'explanation' => 'A coarse time step can under-resolve fast dynamics and produce inaccurate trajectories and energy behavior.',
                    ],

                    [
                        'question' => 'Why is adaptive time stepping useful in systems with widely separated time scales?',
                        'choices' => [
                            ['choice_text' => 'It allows smaller steps where dynamics are rapid and larger steps where the solution varies slowly', 'is_correct' => true],
                            ['choice_text' => 'It forces a constant time step', 'is_correct' => false],
                            ['choice_text' => 'It eliminates all numerical error', 'is_correct' => false],
                            ['choice_text' => 'It removes the need for convergence checks', 'is_correct' => false],
                        ],
                        'explanation' => 'Adaptive algorithms allocate computational effort according to the local dynamical time scale.',
                    ],

                    [
                        'question' => 'Why can direct numerical integration of F · dr be preferable to reconstructing a potential in some engineering models?',
                        'choices' => [
                            ['choice_text' => 'The force may include non-conservative contributions for which no global scalar potential exists', 'is_correct' => true],
                            ['choice_text' => 'Potential energy is never useful', 'is_correct' => false],
                            ['choice_text' => 'All forces are conservative', 'is_correct' => false],
                            ['choice_text' => 'A force cannot be integrated numerically', 'is_correct' => false],
                        ],
                        'explanation' => 'Non-conservative forces must generally be handled through direct work or force integration.',
                    ],

                    [
                        'question' => 'What should be checked when a numerical result appears to violate energy conservation in an ideal conservative simulation?',
                        'choices' => [
                            ['choice_text' => 'Time-step size, numerical method, implementation and modeling assumptions', 'is_correct' => true],
                            ['choice_text' => 'Only the mass value', 'is_correct' => false],
                            ['choice_text' => 'The laws of mechanics must be wrong', 'is_correct' => false],
                            ['choice_text' => 'Energy conservation should be ignored', 'is_correct' => false],
                        ],
                        'explanation' => 'Numerical error or an implementation/modeling issue is usually investigated before questioning the physical law.',
                    ],

                    [
                        'question' => 'Why is convergence analysis important in computational work-energy calculations?',
                        'choices' => [
                            ['choice_text' => 'It tests whether the numerical result approaches a stable value as resolution is refined', 'is_correct' => true],
                            ['choice_text' => 'It guarantees the model is physically correct', 'is_correct' => false],
                            ['choice_text' => 'It eliminates all modeling uncertainty', 'is_correct' => false],
                            ['choice_text' => 'It makes every method exact', 'is_correct' => false],
                        ],
                        'explanation' => 'Numerical convergence assesses discretization behavior, though it does not by itself validate the physical model.',
                    ],

                    [
                        'question' => 'Why can a conserved-energy residual be used as a numerical diagnostic?',
                        'choices' => [
                            ['choice_text' => 'It measures how far the computed trajectory deviates from the expected conservation law', 'is_correct' => true],
                            ['choice_text' => 'It changes the true physical energy', 'is_correct' => false],
                            ['choice_text' => 'It is always exactly zero for finite time steps', 'is_correct' => false],
                            ['choice_text' => 'It applies only to thermodynamics', 'is_correct' => false],
                        ],
                        'explanation' => 'Energy residuals provide a practical indicator of numerical consistency in conservative simulations.',
                    ],

                    [
                        'question' => 'Why should numerical energy calculations be performed with appropriate units and nondimensional checks?',
                        'choices' => [
                            ['choice_text' => 'Dimensional consistency and scaling help detect implementation errors and poorly conditioned computations', 'is_correct' => true],
                            ['choice_text' => 'Units are irrelevant in numerical physics', 'is_correct' => false],
                            ['choice_text' => 'Nondimensionalization removes physics', 'is_correct' => false],
                            ['choice_text' => 'Only symbolic calculations require dimensions', 'is_correct' => false],
                        ],
                        'explanation' => 'Dimensional analysis and nondimensionalization are valuable tools for correctness and numerical conditioning.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 8 — Professional Integrated Work, Energy and Power
            // ============================================================

            [
                'title' => 'Professional Integrated Work, Energy and Power',
                'description' => 'Comprehensive professional-level analysis combining work, energy, power, rigid-body motion, dissipation and computational methods.',
                'questions' => [

                    [
                        'question' => 'A particle moves under a conservative force F = -∇U. Which quantity is conserved in the absence of explicit time dependence?',
                        'choices' => [
                            ['choice_text' => 'E = K + U', 'is_correct' => true],
                            ['choice_text' => 'E = K - U only', 'is_correct' => false],
                            ['choice_text' => 'E = F + U', 'is_correct' => false],
                            ['choice_text' => 'E = K/U', 'is_correct' => false],
                        ],
                        'explanation' => 'For a time-independent conservative system, total mechanical energy K + U is conserved.',
                    ],

                    [
                        'question' => 'A 4 kg body moves from 2 m/s to 8 m/s. What is the net work performed on it?',
                        'choices' => [
                            ['choice_text' => '120 J', 'is_correct' => true],
                            ['choice_text' => '96 J', 'is_correct' => false],
                            ['choice_text' => '128 J', 'is_correct' => false],
                            ['choice_text' => '60 J', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔK = 1/2 × 4 × (64 - 4) = 120 J.',
                    ],

                    [
                        'question' => 'A motor applies a constant torque of 50 N·m while rotating at 20 rad/s. What mechanical power is delivered?',
                        'choices' => [
                            ['choice_text' => '1000 W', 'is_correct' => true],
                            ['choice_text' => '2,5 W', 'is_correct' => false],
                            ['choice_text' => '500 W', 'is_correct' => false],
                            ['choice_text' => '4000 W', 'is_correct' => false],
                        ],
                        'explanation' => 'P = τω = 50 × 20 = 1000 W.',
                    ],

                    [
                        'question' => 'A rolling cylinder of mass M descends a frictionless incline without slipping. Why does its final speed depend on its moment of inertia?',
                        'choices' => [
                            ['choice_text' => Gravitational potential energy is shared between translational and rotational kinetic energy', 'is_correct' => true],
                            ['choice_text' => 'Gravity acts differently on different shapes', 'is_correct' => false],
                            ['choice_text' => 'The total mass depends on the moment of inertia', 'is_correct' => false],
                            ['choice_text' => 'Rotational kinetic energy is always zero', 'is_correct' => false],
                        ],
                        'explanation' => 'The inertia determines how much of the available energy appears as rotational kinetic energy.',
                    ],

                    [
                        'question' => 'A machine receives 20 kJ and delivers 15 kJ of useful mechanical work. What is its efficiency?',
                        'choices' => [
                            ['choice_text' => '75 %', 'is_correct' => true],
                            ['choice_text' => '25 %', 'is_correct' => false],
                            ['choice_text' => '80 %', 'is_correct' => false],
                            ['choice_text' => '133 %', 'is_correct' => false],
                        ],
                        'explanation' => 'η = 15/20 = 0,75 = 75 %.',
                    ],

                    [
                        'question' => 'A conservative one-dimensional potential has the local form U(x) = U0 + 4x² near equilibrium. What does the sign of the quadratic coefficient imply?',
                        'choices' => [
                            ['choice_text' => 'The equilibrium is locally stable', 'is_correct' => true],
                            ['choice_text' => 'The equilibrium is locally unstable', 'is_correct' => false],
                            ['choice_text' => 'There is no equilibrium at x = 0', 'is_correct' => false],
                            ['choice_text' => 'The force is constant and nonzero at x = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'A positive quadratic coefficient gives a local minimum of U and therefore stable equilibrium.',
                    ],

                    [
                        'question' => 'For a gravitational circular orbit of radius r around mass M, what happens to total orbital energy when r increases?',
                        'choices' => [
                            ['choice_text' => 'It becomes less negative and approaches zero', 'is_correct' => true],
                            ['choice_text' => 'It becomes more negative without limit', 'is_correct' => false],
                            ['choice_text' => 'It remains exactly zero', 'is_correct' => false],
                            ['choice_text' => 'It becomes positive for every finite r', 'is_correct' => false],
                        ],
                        'explanation' => 'E = -GMm/(2r), so increasing r moves E toward zero from below.',
                    ],

                    [
                        'question' => 'Why can conservation laws serve as validation tools for numerical dynamics software?',
                        'choices' => [
                            ['choice_text' => Known conserved quantities provide independent checks on computed trajectories', 'is_correct' => true],
                            ['choice_text' => 'Numerical methods automatically satisfy every conservation law', 'is_correct' => false],
                            ['choice_text' => 'Conservation laws are unrelated to computation', 'is_correct' => false],
                            ['choice_text' => 'Energy checks replace all experimental validation', 'is_correct' => false],
                        ],
                        'explanation' => 'Conserved quantities can reveal numerical drift and coding errors.',
                    ],

                    [
                        'question' => 'Why can a mechanical system have constant total energy but changing power output?',
                        'choices' => [
                            ['choice_text' => Power describes the rate of energy transfer, which can vary even when total energy is conserved', 'is_correct' => true],
                            ['choice_text' => 'Constant energy requires constant power', 'is_correct' => false],
                            ['choice_text' => 'Power is identical to energy', 'is_correct' => false],
                            ['choice_text' => 'Power has no time dependence', 'is_correct' => false],
                        ],
                        'explanation' => 'Energy conservation constrains totals, while power characterizes instantaneous or average transfer rates.',
                    ],

                    [
                        'question' => 'Why is a professional work-energy analysis more than simply applying K + U = constant?',
                        'choices' => [
                            ['choice_text' => 'It must identify applicable conservation laws, non-conservative work, constraints, reference choices, numerical issues and model validity', 'is_correct' => true],
                            ['choice_text' => 'Every mechanical system satisfies K + U = constant', 'is_correct' => false],
                            ['choice_text' => 'Reference choices never matter', 'is_correct' => false],
                            ['choice_text' => 'Non-conservative forces can always be ignored', 'is_correct' => false],
                        ],
                        'explanation' => 'Professional analysis requires correct modeling and identification of all relevant energy-transfer mechanisms.',
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