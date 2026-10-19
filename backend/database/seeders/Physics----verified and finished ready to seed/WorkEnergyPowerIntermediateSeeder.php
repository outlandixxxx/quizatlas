<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WorkEnergyPowerIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'work-energy-power')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Work of Variable Forces
            // ============================================================

            [
                'title' => 'Work of Variable Forces',
                'description' => 'Intermediate analysis of work for variable forces and force-displacement relationships.',
                'questions' => [

                    [
                        'question' => 'For a force that varies with position along one dimension, which expression gives the work between x1 and x2?',
                        'choices' => [
                            ['choice_text' => 'W = ∫(x1 to x2) F(x) dx', 'is_correct' => true],
                            ['choice_text' => 'W = F(x1)F(x2)', 'is_correct' => false],
                            ['choice_text' => 'W = ∫ F(x) dt', 'is_correct' => false],
                            ['choice_text' => 'W = F/x', 'is_correct' => false],
                        ],
                        'explanation' => 'For a one-dimensional variable force, work is the integral of force with respect to displacement.',
                    ],

                    [
                        'question' => 'What does the area under a force-position graph represent?',
                        'choices' => [
                            ['choice_text' => 'The work done by the force', 'is_correct' => true],
                            ['choice_text' => 'The acceleration', 'is_correct' => false],
                            ['choice_text' => 'The momentum', 'is_correct' => false],
                            ['choice_text' => 'The power at one instant', 'is_correct' => false],
                        ],
                        'explanation' => 'The integral of F(x) dx is geometrically the signed area under the force-position curve.',
                    ],

                    [
                        'question' => 'A force increases linearly from 0 N to 10 N over a displacement of 4 m. What work does it perform?',
                        'choices' => [
                            ['choice_text' => '20 J', 'is_correct' => true],
                            ['choice_text' => '40 J', 'is_correct' => false],
                            ['choice_text' => '10 J', 'is_correct' => false],
                            ['choice_text' => '5 J', 'is_correct' => false],
                        ],
                        'explanation' => 'The area is a triangle: W = 1/2 × 4 × 10 = 20 J.',
                    ],

                    [
                        'question' => 'If a force is conservative, what property does its work have?',
                        'choices' => [
                            ['choice_text' => 'The work between two points is independent of the path', 'is_correct' => true],
                            ['choice_text' => 'The work always depends on time', 'is_correct' => false],
                            ['choice_text' => 'The work is always positive', 'is_correct' => false],
                            ['choice_text' => 'The force must be constant', 'is_correct' => false],
                        ],
                        'explanation' => 'Path independence is a defining property of conservative forces.',
                    ],

                    [
                        'question' => 'For a conservative force, what is the work over any closed path?',
                        'choices' => [
                            ['choice_text' => 'Zero', 'is_correct' => true],
                            ['choice_text' => 'Always positive', 'is_correct' => false],
                            ['choice_text' => 'Always negative', 'is_correct' => false],
                            ['choice_text' => 'Infinite', 'is_correct' => false],
                        ],
                        'explanation' => 'The line integral of a conservative force around a closed path is zero.',
                    ],

                    [
                        'question' => 'Why can the work done by a force be negative even when displacement is positive?',
                        'choices' => [
                            ['choice_text' => 'The force can have a component opposite to the displacement', 'is_correct' => true],
                            ['choice_text' => 'Positive displacement always gives positive work', 'is_correct' => false],
                            ['choice_text' => 'Work cannot be negative', 'is_correct' => false],
                            ['choice_text' => 'The force must be zero', 'is_correct' => false],
                        ],
                        'explanation' => 'A force opposing displacement produces negative work.',
                    ],

                    [
                        'question' => 'For a spring obeying Hooke’s law, what is the work required to stretch it from x = 0 to x = X?',
                        'choices' => [
                            ['choice_text' => '1/2 kX²', 'is_correct' => true],
                            ['choice_text' => 'kX', 'is_correct' => false],
                            ['choice_text' => 'kX²', 'is_correct' => false],
                            ['choice_text' => '1/2 kX', 'is_correct' => false],
                        ],
                        'explanation' => 'Integrating the spring force magnitude kx from 0 to X gives 1/2 kX².',
                    ],

                    [
                        'question' => 'Why is the work done by the spring force during stretching negative?',
                        'choices' => [
                            ['choice_text' => The spring force opposes the stretching displacement', 'is_correct' => true],
                            ['choice_text' => The spring has negative stiffness', 'is_correct' => false],
                            ['choice_text' => The displacement is necessarily zero', 'is_correct' => false],
                            ['choice_text' => Energy is destroyed', 'is_correct' => false],
                        ],
                        'explanation' => 'During stretching, the restoring spring force points opposite the displacement.',
                    ],

                    [
                        'question' => 'Which mathematical operation connects force and potential energy for a conservative one-dimensional force?',
                        'choices' => [
                            ['choice_text' => 'F = -dU/dx', 'is_correct' => true],
                            ['choice_text' => 'F = dU/dx', 'is_correct' => false],
                            ['choice_text' => 'F = Ux', 'is_correct' => false],
                            ['choice_text' => 'F = U/x²', 'is_correct' => false],
                        ],
                        'explanation' => 'A conservative force is the negative gradient of the potential energy.',
                    ],

                    [
                        'question' => 'Why is choosing the correct sign convention important when integrating work?',
                        'choices' => [
                            ['choice_text' => The sign determines whether the force adds or removes mechanical energy', 'is_correct' => true],
                            ['choice_text' => Sign conventions change the physical force', 'is_correct' => false],
                            ['choice_text' => Work is independent of direction', 'is_correct' => false],
                            ['choice_text' => Integrals do not involve signs', 'is_correct' => false],
                        ],
                        'explanation' => 'The sign of work carries physical information about energy transfer.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 2 — Work-Energy Theorem
            // ============================================================

            [
                'title' => 'Work-Energy Theorem',
                'description' => 'Intermediate applications of the work-energy theorem to particle motion.',
                'questions' => [

                    [
                        'question' => 'What is the work-energy theorem?',
                        'choices' => [
                            ['choice_text' => 'The net work done on a particle equals its change in kinetic energy', 'is_correct' => true],
                            ['choice_text' => 'The net work equals the potential energy itself', 'is_correct' => false],
                            ['choice_text' => 'The net work equals the momentum', 'is_correct' => false],
                            ['choice_text' => 'The net work is always zero', 'is_correct' => false],
                        ],
                        'explanation' => 'The theorem states W_net = ΔK.',
                    ],

                    [
                        'question' => 'A 2 kg object speeds up from 3 m/s to 7 m/s. What is the net work done?',
                        'choices' => [
                            ['choice_text' => '40 J', 'is_correct' => true],
                            ['choice_text' => '20 J', 'is_correct' => false],
                            ['choice_text' => '58 J', 'is_correct' => false],
                            ['choice_text' => '49 J', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔK = 1/2 × 2 × (7² - 3²) = 49 - 9 = 40 J.',
                    ],

                    [
                        'question' => 'If the net work on an object is zero, what can be concluded about its kinetic energy?',
                        'choices' => [
                            ['choice_text' => 'Its kinetic energy is unchanged', 'is_correct' => true],
                            ['choice_text' => 'Its kinetic energy must be zero', 'is_correct' => false],
                            ['choice_text' => 'Its kinetic energy doubles', 'is_correct' => false],
                            ['choice_text' => 'Its mass changes', 'is_correct' => false],
                        ],
                        'explanation' => 'W_net = ΔK, so zero net work implies ΔK = 0.',
                    ],

                    [
                        'question' => 'Why can the work-energy theorem be useful when the acceleration is not constant?',
                        'choices' => [
                            ['choice_text' => 'It relates net work directly to changes in kinetic energy without requiring constant acceleration', 'is_correct' => true],
                            ['choice_text' => 'It assumes acceleration is always zero', 'is_correct' => false],
                            ['choice_text' => 'It applies only to constant forces', 'is_correct' => false],
                            ['choice_text' => 'It ignores displacement', 'is_correct' => false],
                        ],
                        'explanation' => 'The work-energy theorem remains valid for variable forces and accelerations.',
                    ],

                    [
                        'question' => 'A 5 kg object initially moves at 2 m/s. If the net work done is 90 J, what is its final speed?',
                        'choices' => [
                            ['choice_text' => '≈ 6,32 m/s', 'is_correct' => true],
                            ['choice_text' => '≈ 4,24 m/s', 'is_correct' => false],
                            ['choice_text' => '≈ 9,0 m/s', 'is_correct' => false],
                            ['choice_text' => '≈ 5,0 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Initial K = 1/2 × 5 × 2² = 10 J. Final K = 100 J, so vf = √(2×100/5) ≈ 6,32 m/s.',
                    ],

                    [
                        'question' => 'Why can individual forces perform both positive and negative work while the net work remains positive?',
                        'choices' => [
                            ['choice_text' => The positive contributions can exceed the magnitude of the negative contributions', 'is_correct' => true],
                            ['choice_text' => Work has only one possible sign', 'is_correct' => false],
                            ['choice_text' => Negative work is ignored', 'is_correct' => false],
                            ['choice_text' => The forces must be equal', 'is_correct' => false],
                        ],
                        'explanation' => 'Net work is the algebraic sum of the work done by all forces.',
                    ],

                    [
                        'question' => 'A constant horizontal force acts on an object over a displacement in the same direction. If the force is doubled and all else is unchanged, the work done is...',
                        'choices' => [
                            ['choice_text' => 'Doubled', 'is_correct' => true],
                            ['choice_text' => 'Halved', 'is_correct' => false],
                            ['choice_text' => 'Quadrupled', 'is_correct' => false],
                            ['choice_text' => 'Unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'For fixed displacement and direction, W = Fd, so doubling F doubles W.',
                    ],

                    [
                        'question' => 'Why does the work-energy theorem involve net work rather than the work of only one force?',
                        'choices' => [
                            ['choice_text' => 'All forces contribute to the total change in kinetic energy', 'is_correct' => true],
                            ['choice_text' => 'Only gravity changes kinetic energy', 'is_correct' => false],
                            ['choice_text' => 'Only friction performs work', 'is_correct' => false],
                            ['choice_text' => 'Net work ignores every force', 'is_correct' => false],
                        ],
                        'explanation' => 'The net work is the sum of all individual works and determines ΔK.',
                    ],

                    [
                        'question' => 'If an object slows down while moving forward, the net work done on it is generally...',
                        'choices' => [
                            ['choice_text' => 'Negative', 'is_correct' => true],
                            ['choice_text' => 'Positive', 'is_correct' => false],
                            ['choice_text' => 'Always zero', 'is_correct' => false],
                            ['choice_text' => 'Undefined', 'is_correct' => false],
                        ],
                        'explanation' => 'A decrease in kinetic energy means ΔK < 0, so net work is negative.',
                    ],

                    [
                        'question' => 'Why is the work-energy theorem sometimes simpler than solving Newton’s second law step by step?',
                        'choices' => [
                            ['choice_text' => 'It can connect two states directly without finding the complete time dependence', 'is_correct' => true],
                            ['choice_text' => 'It removes all force information', 'is_correct' => false],
                            ['choice_text' => 'It applies only when acceleration is zero', 'is_correct' => false],
                            ['choice_text' => 'It requires no initial conditions', 'is_correct' => false],
                        ],
                        'explanation' => 'Energy methods often avoid solving for acceleration and time when only state-to-state quantities are required.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 3 — Potential Energy and Conservative Forces
            // ============================================================

            [
                'title' => 'Potential Energy and Conservative Forces',
                'description' => 'Intermediate analysis of gravitational, elastic and conservative potentials.',
                'questions' => [

                    [
                        'question' => 'What is a potential-energy function used for in classical mechanics?',
                        'choices' => [
                            ['choice_text' => 'It represents the stored energy associated with a conservative interaction', 'is_correct' => true],
                            ['choice_text' => 'It directly represents velocity', 'is_correct' => false],
                            ['choice_text' => 'It measures mass', 'is_correct' => false],
                            ['choice_text' => 'It replaces kinetic energy', 'is_correct' => false],
                        ],
                        'explanation' => 'Potential energy characterizes the configuration-dependent energy associated with conservative forces.',
                    ],

                    [
                        'question' => 'If a conservative force does positive work, what happens to its potential energy?',
                        'choices' => [
                            ['choice_text' => 'It decreases', 'is_correct' => true],
                            ['choice_text' => 'It increases', 'is_correct' => false],
                            ['choice_text' => 'It must remain constant', 'is_correct' => false],
                            ['choice_text' => 'It becomes infinite', 'is_correct' => false],
                        ],
                        'explanation' => 'For conservative forces, W = -ΔU.',
                    ],

                    [
                        'question' => 'Why is gravitational potential energy near Earth written as U = mgh?',
                        'choices' => [
                            ['choice_text' => 'Because the gravitational force is approximately constant over small height changes', 'is_correct' => true],
                            ['choice_text' => 'Because gravity depends on h² near Earth', 'is_correct' => false],
                            ['choice_text' => 'Because mass and height are unrelated quantities', 'is_correct' => false],
                            ['choice_text' => 'Because potential energy is always mg/h', 'is_correct' => false],
                        ],
                        'explanation' => 'Near Earth’s surface, g can be treated as approximately constant, giving U = mgh relative to a reference.',
                    ],

                    [
                        'question' => 'For a point mass moving far from a spherical gravitating body, which form of gravitational potential energy is appropriate?',
                        'choices' => [
                            ['choice_text' => 'U = -GMm/r when U(∞) = 0', 'is_correct' => true],
                            ['choice_text' => 'U = GMm/r²', 'is_correct' => false],
                            ['choice_text' => 'U = mgh for all distances', 'is_correct' => false],
                            ['choice_text' => 'U = GMm r', 'is_correct' => false],
                        ],
                        'explanation' => 'For Newtonian gravity, choosing zero at infinity gives U = -GMm/r.',
                    ],

                    [
                        'question' => 'Why is the gravitational potential energy of a bound two-body system negative when zero is chosen at infinity?',
                        'choices' => [
                            ['choice_text' => The bound configuration has lower energy than the separated state at infinity', 'is_correct' => true],
                            ['choice_text' => Gravity always creates negative mass', 'is_correct' => false],
                            ['choice_text' => Potential energy cannot be positive by definition', 'is_correct' => false],
                            ['choice_text' => The force itself is negative energy', 'is_correct' => false],
                        ],
                        'explanation' => 'The attractive gravitational interaction lowers the potential energy relative to infinite separation.',
                    ],

                    [
                        'question' => 'What condition identifies a stable equilibrium in a one-dimensional conservative potential?',
                        'choices' => [
                            ['choice_text' => 'dU/dx = 0 and d²U/dx² > 0', 'is_correct' => true],
                            ['choice_text' => 'dU/dx = 1 and d²U/dx² = 0', 'is_correct' => false],
                            ['choice_text' => 'dU/dx > 0 everywhere', 'is_correct' => false],
                            ['choice_text' => 'U = 0 necessarily', 'is_correct' => false],
                        ],
                        'explanation' => 'Equilibrium requires zero force, and stability requires a local minimum of U.',
                    ],

                    [
                        'question' => 'Why can the absolute value of potential energy be changed without changing the physics?',
                        'choices' => [
                            ['choice_text' => Adding a constant to potential energy does not change the force or its energy differences', 'is_correct' => true],
                            ['choice_text' => 'Forces depend directly on the arbitrary zero of energy', 'is_correct' => false],
                            ['choice_text' => 'Potential energy has no relation to force', 'is_correct' => false],
                            ['choice_text' => 'The constant changes the mass', 'is_correct' => false],
                        ],
                        'explanation' => 'Only potential-energy differences and derivatives matter in classical mechanics.',
                    ],

                    [
                        'question' => 'What is the relation between conservative force and potential energy in vector form?',
                        'choices' => [
                            ['choice_text' => 'F = -∇U', 'is_correct' => true],
                            ['choice_text' => 'F = ∇U', 'is_correct' => false],
                            ['choice_text' => 'F = U²', 'is_correct' => false],
                            ['choice_text' => 'F = U/r² in every system', 'is_correct' => false],
                        ],
                        'explanation' => 'The conservative force is the negative gradient of the potential.',
                    ],

                    [
                        'question' => 'Why is the potential-energy method particularly useful for one-dimensional motion?',
                        'choices' => [
                            ['choice_text' => 'The total mechanical energy can be written directly as K(x, ẋ) + U(x)', 'is_correct' => true],
                            ['choice_text' => 'All forces become constant', 'is_correct' => false],
                            ['choice_text' => 'Time is eliminated from physics entirely', 'is_correct' => false],
                            ['choice_text' => 'Momentum is no longer relevant to any problem', 'is_correct' => false],
                        ],
                        'explanation' => 'The energy equation provides a powerful first integral of the motion.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 4 — Rotational Work and Energy
            // ============================================================

            [
                'title' => 'Rotational Work and Energy',
                'description' => 'Intermediate applications of torque, angular displacement and rotational kinetic energy.',
                'questions' => [

                    [
                        'question' => 'What is the rotational analogue of mechanical work for a constant torque τ acting through angular displacement Δθ?',
                        'choices' => [
                            ['choice_text' => 'W = τΔθ', 'is_correct' => true],
                            ['choice_text' => 'W = τ/Δθ', 'is_correct' => false],
                            ['choice_text' => 'W = τΔθ²', 'is_correct' => false],
                            ['choice_text' => 'W = τ + Δθ', 'is_correct' => false],
                        ],
                        'explanation' => 'For constant torque acting about a fixed axis, rotational work is W = τΔθ.',
                    ],

                    [
                        'question' => 'What is the rotational kinetic energy of a rigid body rotating about a fixed axis?',
                        'choices' => [
                            ['choice_text' => 'K_rot = 1/2 Iω²', 'is_correct' => true],
                            ['choice_text' => 'K_rot = Iω', 'is_correct' => false],
                            ['choice_text' => 'K_rot = Iα', 'is_correct' => false],
                            ['choice_text' => 'K_rot = 1/2 Iα²', 'is_correct' => false],
                        ],
                        'explanation' => 'Rotational kinetic energy is K_rot = 1/2 Iω².',
                    ],

                    [
                        'question' => 'A torque of 5 N·m acts through 4 rad. How much work is done?',
                        'choices' => [
                            ['choice_text' => '20 J', 'is_correct' => true],
                            ['choice_text' => '1,25 J', 'is_correct' => false],
                            ['choice_text' => '9 J', 'is_correct' => false],
                            ['choice_text' => '40 J', 'is_correct' => false],
                        ],
                        'explanation' => 'W = τΔθ = 5 × 4 = 20 J.',
                    ],

                    [
                        'question' => 'What is the rotational form of the work-energy theorem?',
                        'choices' => [
                            ['choice_text' => 'Net rotational work equals the change in rotational kinetic energy', 'is_correct' => true],
                            ['choice_text' => 'Torque equals angular displacement', 'is_correct' => false],
                            ['choice_text' => 'Rotational work equals angular momentum', 'is_correct' => false],
                            ['choice_text' => 'Rotational work is always zero', 'is_correct' => false],
                        ],
                        'explanation' => 'The net torque work changes the rotational kinetic energy.',
                    ],

                    [
                        'question' => 'If the angular speed of a rigid body doubles, its rotational kinetic energy becomes...',
                        'choices' => [
                            ['choice_text' => 'Four times larger', 'is_correct' => true],
                            ['choice_text' => 'Twice as large', 'is_correct' => false],
                            ['choice_text' => 'Half as large', 'is_correct' => false],
                            ['choice_text' => 'Unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Since K_rot ∝ ω², doubling ω multiplies the energy by four.',
                    ],

                    [
                        'question' => 'Why does the moment of inertia play a role analogous to mass in rotational dynamics?',
                        'choices' => [
                            ['choice_text' => 'It measures resistance to changes in angular motion', 'is_correct' => true],
                            ['choice_text' => 'It measures total force', 'is_correct' => false],
                            ['choice_text' => 'It determines gravitational acceleration', 'is_correct' => false],
                            ['choice_text' => 'It is identical to mass for every axis', 'is_correct' => false],
                        ],
                        'explanation' => 'Moment of inertia determines how strongly torque produces angular acceleration.',
                    ],

                    [
                        'question' => 'A constant torque performs positive work on a rotating body. Its rotational kinetic energy generally...',
                        'choices' => [
                            ['choice_text' => 'Increases', 'is_correct' => true],
                            ['choice_text' => 'Decreases', 'is_correct' => false],
                            ['choice_text' => 'Must be zero', 'is_correct' => false],
                            ['choice_text' => 'Cannot change', 'is_correct' => false],
                        ],
                        'explanation' => 'Positive net rotational work gives a positive change in rotational kinetic energy.',
                    ],

                    [
                        'question' => 'Why is angular displacement measured in radians in the work expression W = τΔθ?',
                        'choices' => [
                            ['choice_text' => 'Radians make torque times angular displacement dimensionally equal to energy', 'is_correct' => true],
                            ['choice_text' => 'Degrees cannot describe rotation', 'is_correct' => false],
                            ['choice_text' => 'Radians are a unit of force', 'is_correct' => false],
                            ['choice_text' => 'Radians eliminate torque', 'is_correct' => false],
                        ],
                        'explanation' => 'The radian is dimensionless in SI, giving N·m = J.',
                    ],

                    [
                        'question' => 'Why can a constant torque increase angular speed even if the torque is applied over a small angular displacement?',
                        'choices' => [
                            ['choice_text' => It transfers a finite amount of rotational energy through the work τΔθ', 'is_correct' => true],
                            ['choice_text' => Torque changes mass directly', 'is_correct' => false],
                            ['choice_text' => Angular speed is unrelated to work', 'is_correct' => false],
                            ['choice_text' => Rotation requires no energy', 'is_correct' => false],
                        ],
                        'explanation' => 'Even over a limited angular displacement, torque can perform work and increase rotational kinetic energy.',
                    ],

                    [
                        'question' => 'What is the mechanical power associated with a torque τ acting on a body rotating with angular speed ω?',
                        'choices' => [
                            ['choice_text' => 'P = τω', 'is_correct' => true],
                            ['choice_text' => 'P = τ/ω', 'is_correct' => false],
                            ['choice_text' => 'P = τω²', 'is_correct' => false],
                            ['choice_text' => 'P = τ + ω', 'is_correct' => false],
                        ],
                        'explanation' => 'Rotational power is P = τω for torque and angular speed about the same axis.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 5 — Momentum and Energy Together
            // ============================================================

            [
                'title' => 'Momentum and Energy Methods',
                'description' => 'Intermediate comparison of momentum conservation and energy methods in mechanics.',
                'questions' => [

                    [
                        'question' => 'Which quantity is conserved in every isolated mechanical collision?',
                        'choices' => [
                            ['choice_text' => 'Total linear momentum', 'is_correct' => true],
                            ['choice_text' => 'Kinetic energy', 'is_correct' => false],
                            ['choice_text' => 'Each object’s momentum separately', 'is_correct' => false],
                            ['choice_text' => 'Potential energy separately', 'is_correct' => false],
                        ],
                        'explanation' => 'For an isolated system, total linear momentum is conserved.',
                    ],

                    [
                        'question' => 'In an elastic collision, which additional quantity is conserved?',
                        'choices' => [
                            ['choice_text' => 'Total kinetic energy', 'is_correct' => true],
                            ['choice_text' => 'Each object’s velocity', 'is_correct' => false],
                            ['choice_text' => 'The kinetic energy of each body individually', 'is_correct' => false],
                            ['choice_text' => 'Potential energy of every subsystem', 'is_correct' => false],
                        ],
                        'explanation' => 'Elastic collisions conserve both total momentum and total kinetic energy.',
                    ],

                    [
                        'question' => 'Why can a collision conserve momentum but not kinetic energy?',
                        'choices' => [
                            ['choice_text' => Internal processes can convert kinetic energy into thermal, deformation and other forms while total momentum remains conserved', 'is_correct' => true],
                            ['choice_text' => 'Momentum and energy are identical quantities', 'is_correct' => false],
                            ['choice_text' => 'Energy conservation never applies to collisions', 'is_correct' => false],
                            ['choice_text' => 'Momentum is destroyed with kinetic energy', 'is_correct' => false],
                        ],
                        'explanation' => 'Total energy remains conserved, but kinetic energy need not remain within the translational degrees of freedom.',
                    ],

                    [
                        'question' => 'A 2 kg object moving at 4 m/s collides elastically with a stationary 2 kg object in one dimension. What is the final speed of the second object in the ideal equal-mass case?',
                        'choices' => [
                            ['choice_text' => '4 m/s', 'is_correct' => true],
                            ['choice_text' => '2 m/s', 'is_correct' => false],
                            ['choice_text' => '8 m/s', 'is_correct' => false],
                            ['choice_text' => '0 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'In a head-on elastic collision between equal masses with one initially at rest, the velocities exchange.',
                    ],

                    [
                        'question' => 'Why can energy methods determine the speed reached after descending a frictionless track without finding the acceleration at every point?',
                        'choices' => [
                            ['choice_text' => Mechanical energy conservation directly relates height and speed', 'is_correct' => true],
                            ['choice_text' => 'Acceleration is always zero on a track', 'is_correct' => false],
                            ['choice_text' => Gravity does no work', 'is_correct' => false],
                            ['choice_text' => Momentum is not relevant to motion', 'is_correct' => false],
                        ],
                        'explanation' => 'The decrease in gravitational potential energy equals the increase in kinetic energy.',
                    ],

                    [
                        'question' => 'What is the kinetic energy of a 3 kg body moving at 4 m/s?',
                        'choices' => [
                            ['choice_text' => '24 J', 'is_correct' => true],
                            ['choice_text' => '12 J', 'is_correct' => false],
                            ['choice_text' => '48 J', 'is_correct' => false],
                            ['choice_text' => '6 J', 'is_correct' => false],
                        ],
                        'explanation' => 'K = 1/2 × 3 × 16 = 24 J.',
                    ],

                    [
                        'question' => 'What is the momentum of the same 3 kg body moving at 4 m/s?',
                        'choices' => [
                            ['choice_text' => '12 kg·m/s', 'is_correct' => true],
                            ['choice_text' => '24 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '7 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '1,33 kg·m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'p = mv = 3 × 4 = 12 kg·m/s.',
                    ],

                    [
                        'question' => 'Why are momentum and kinetic energy not interchangeable even though both depend on mass and velocity?',
                        'choices' => [
                            ['choice_text' => 'They have different mathematical forms, units and physical meanings', 'is_correct' => true],
                            ['choice_text' => 'They are numerically identical for every object', 'is_correct' => false],
                            ['choice_text' => 'Momentum is scalar and kinetic energy is vector', 'is_correct' => false],
                            ['choice_text' => 'Kinetic energy has the same units as momentum', 'is_correct' => false],
                        ],
                        'explanation' => 'Momentum is vectorial and proportional to v, while kinetic energy is scalar and proportional to v².',
                    ],

                    [
                        'question' => 'Why is kinetic energy particularly sensitive to speed compared with momentum?',
                        'choices' => [
                            ['choice_text' => 'Kinetic energy depends on the square of speed while momentum depends linearly on speed', 'is_correct' => true],
                            ['choice_text' => 'Momentum depends on speed squared', 'is_correct' => false],
                            ['choice_text' => 'Kinetic energy is independent of speed', 'is_correct' => false],
                            ['choice_text' => 'Momentum is independent of velocity', 'is_correct' => false],
                        ],
                        'explanation' => 'K = 1/2mv² while p = mv.',
                    ],

                    [
                        'question' => 'Why is choosing between momentum and energy methods important in a mechanics problem?',
                        'choices' => [
                            ['choice_text' => 'One method may provide the needed result with fewer unknowns or simpler equations', 'is_correct' => true],
                            ['choice_text' => 'The two methods are physically incompatible', 'is_correct' => false],
                            ['choice_text' => 'Energy methods cannot be used with motion', 'is_correct' => false],
                            ['choice_text' => 'Momentum methods apply only to stationary systems', 'is_correct' => false],
                        ],
                        'explanation' => 'Different conservation laws reveal different aspects of the same physical process.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 6 — Power, Machines and Efficiency
            // ============================================================

            [
                'title' => 'Power, Machines and Efficiency',
                'description' => 'Intermediate applications of power, useful work and mechanical efficiency.',
                'questions' => [

                    [
                        'question' => 'A motor performs 12 000 J of work in 30 s. What is its average power?',
                        'choices' => [
                            ['choice_text' => '400 W', 'is_correct' => true],
                            ['choice_text' => '360 W', 'is_correct' => false],
                            ['choice_text' => '40 W', 'is_correct' => false],
                            ['choice_text' => '3600 W', 'is_correct' => false],
                        ],
                        'explanation' => 'P_avg = W/t = 12 000/30 = 400 W.',
                    ],

                    [
                        'question' => 'A machine lifts a 200 kg load by 5 m in 10 s. Taking g = 9,8 m/s², what minimum average useful power is required?',
                        'choices' => [
                            ['choice_text' => '980 W', 'is_correct' => true],
                            ['choice_text' => '196 W', 'is_correct' => false],
                            ['choice_text' => '9800 W', 'is_correct' => false],
                            ['choice_text' => '490 W', 'is_correct' => false],
                        ],
                        'explanation' => 'Useful work = mgh = 200 × 9,8 × 5 = 9800 J. P = 9800/10 = 980 W.',
                    ],

                    [
                        'question' => 'A machine receives 2500 J and provides 1750 J of useful work. What is its efficiency?',
                        'choices' => [
                            ['choice_text' => '70 %', 'is_correct' => true],
                            ['choice_text' => '30 %', 'is_correct' => false],
                            ['choice_text' => '40 %', 'is_correct' => false],
                            ['choice_text' => '85 %', 'is_correct' => false],
                        ],
                        'explanation' => 'η = 1750/2500 = 0,70 = 70 %.',
                    ],

                    [
                        'question' => 'If a machine operates at constant power, doubling the time of operation doubles the total work done.',
                        'choices' => [
                            ['choice_text' => 'True', 'is_correct' => true],
                            ['choice_text' => 'False', 'is_correct' => false],
                            ['choice_text' => 'Only for zero power', 'is_correct' => false],
                            ['choice_text' => 'Only when force is zero', 'is_correct' => false],
                        ],
                        'explanation' => 'For constant power, W = Pt, so work is directly proportional to time.',
                    ],

                    [
                        'question' => 'A 1000 W motor operates for 60 s. How much energy does it deliver at 100 % efficiency?',
                        'choices' => [
                            ['choice_text' => '60 000 J', 'is_correct' => true],
                            ['choice_text' => '1000 J', 'is_correct' => false],
                            ['choice_text' => '16,7 J', 'is_correct' => false],
                            ['choice_text' => '600 J', 'is_correct' => false],
                        ],
                        'explanation' => 'W = Pt = 1000 × 60 = 60 000 J.',
                    ],

                    [
                        'question' => 'Why can a high-power machine complete a fixed amount of work in less time?',
                        'choices' => [
                            ['choice_text' => Power measures the rate at which work is performed', 'is_correct' => true],
                            ['choice_text' => 'Power changes the amount of work required', 'is_correct' => false],
                            ['choice_text' => 'Power is identical to energy', 'is_correct' => false],
                            ['choice_text' => 'Higher power always means lower force', 'is_correct' => false],
                        ],
                        'explanation' => 'For a fixed work requirement, larger power means a shorter completion time.',
                    ],

                    [
                        'question' => 'A machine has 80 % efficiency. If it receives 5000 J, how much useful energy is produced?',
                        'choices' => [
                            ['choice_text' => '4000 J', 'is_correct' => true],
                            ['choice_text' => '1000 J', 'is_correct' => false],
                            ['choice_text' => '6250 J', 'is_correct' => false],
                            ['choice_text' => '500 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Useful output = η × input = 0,8 × 5000 = 4000 J.',
                    ],

                    [
                        'question' => 'Why can efficiency be improved by reducing friction in a machine?',
                        'choices' => [
                            ['choice_text' => 'Less input energy is dissipated into unwanted thermal energy', 'is_correct' => true],
                            ['choice_text' => 'Friction creates additional useful energy', 'is_correct' => false],
                            ['choice_text' => 'Reducing friction increases mass', 'is_correct' => false],
                            ['choice_text' => 'Friction determines gravitational acceleration', 'is_correct' => false],
                        ],
                        'explanation' => 'Reducing dissipative losses increases the fraction of input energy available as useful output.',
                    ],

                    [
                        'question' => 'For rotational motion, which expression gives instantaneous power delivered by a torque?',
                        'choices' => [
                            ['choice_text' => 'P = τω', 'is_correct' => true],
                            ['choice_text' => 'P = τ/ω', 'is_correct' => false],
                            ['choice_text' => 'P = τω²', 'is_correct' => false],
                            ['choice_text' => 'P = τ + ω', 'is_correct' => false],
                        ],
                        'explanation' => 'Rotational power is the product of torque and angular velocity.',
                    ],

                    [
                        'question' => 'Why is efficiency alone insufficient to characterize a machine completely?',
                        'choices' => [
                            ['choice_text' => 'A machine can be efficient but still have low power, limited capacity or unsuitable operating conditions', 'is_correct' => true],
                            ['choice_text' => 'Efficiency gives every mechanical property automatically', 'is_correct' => false],
                            ['choice_text' => 'Power and efficiency are always identical', 'is_correct' => false],
                            ['choice_text' => 'Efficiency determines the machine’s mass', 'is_correct' => false],
                        ],
                        'explanation' => 'Engineering performance depends on several parameters including efficiency, power, operating range and reliability.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 7 — Springs, Oscillations and Energy
            // ============================================================

            [
                'title' => 'Springs, Oscillations and Energy',
                'description' => 'Intermediate relationship between elastic energy and simple harmonic motion.',
                'questions' => [

                    [
                        'question' => 'For an ideal mass-spring oscillator, where is the kinetic energy maximum?',
                        'choices' => [
                            ['choice_text' => 'At the equilibrium position', 'is_correct' => true],
                            ['choice_text' => 'At maximum displacement', 'is_correct' => false],
                            ['choice_text' => 'Halfway between every pair of points only', 'is_correct' => false],
                            ['choice_text' => 'At all positions equally', 'is_correct' => false],
                        ],
                        'explanation' => 'At equilibrium, displacement is zero and speed is maximum, so kinetic energy is maximum.',
                    ],

                    [
                        'question' => 'For an ideal mass-spring oscillator, where is elastic potential energy maximum?',
                        'choices' => [
                            ['choice_text' => 'At maximum displacement from equilibrium', 'is_correct' => true],
                            ['choice_text' => 'At equilibrium', 'is_correct' => false],
                            ['choice_text' => 'When velocity is maximum', 'is_correct' => false],
                            ['choice_text' => 'It is always zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Us = 1/2kx² is maximum when |x| is maximum.',
                    ],

                    [
                        'question' => 'What is the angular frequency of a simple mass-spring oscillator?',
                        'choices' => [
                            ['choice_text' => 'ω = √(k/m)', 'is_correct' => true],
                            ['choice_text' => 'ω = √(m/k)', 'is_correct' => false],
                            ['choice_text' => 'ω = k/m', 'is_correct' => false],
                            ['choice_text' => 'ω = m/k', 'is_correct' => false],
                        ],
                        'explanation' => 'The equation m ẍ + kx = 0 gives ω = √(k/m).',
                    ],

                    [
                        'question' => 'Why is the total mechanical energy constant for an ideal harmonic oscillator?',
                        'choices' => [
                            ['choice_text' => The spring force is conservative and there is no dissipative force', 'is_correct' => true],
                            ['choice_text' => The oscillator has no kinetic energy', 'is_correct' => false],
                            ['choice_text' => The amplitude changes continuously', 'is_correct' => false],
                            ['choice_text' => Gravity always supplies energy', 'is_correct' => false],
                        ],
                        'explanation' => 'The spring exchanges energy between kinetic and elastic potential forms without net loss.',
                    ],

                    [
                        'question' => 'If the amplitude of an ideal oscillator doubles, the total mechanical energy becomes...',
                        'choices' => [
                            ['choice_text' => 'Four times larger', 'is_correct' => true],
                            ['choice_text' => 'Two times larger', 'is_correct' => false],
                            ['choice_text' => 'Half as large', 'is_correct' => false],
                            ['choice_text' => 'Unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Total energy E = 1/2 kA², so doubling A multiplies E by four.',
                    ],

                    [
                        'question' => 'Why does an ideal oscillator repeatedly exchange energy between kinetic and potential forms?',
                        'choices' => [
                            ['choice_text' => The restoring force continuously converts one form into the other', 'is_correct' => true],
                            ['choice_text' => Energy is created at equilibrium', 'is_correct' => false],
                            ['choice_text' => The mass changes periodically', 'is_correct' => false],
                            ['choice_text' => The spring stops exerting force at maximum displacement', 'is_correct' => false],
                        ],
                        'explanation' => 'The conservative restoring force transfers energy back and forth between kinetic and potential energy.',
                    ],

                    [
                        'question' => 'At maximum displacement in simple harmonic motion, what is the instantaneous velocity?',
                        'choices' => [
                            ['choice_text' => 'Zero', 'is_correct' => true],
                            ['choice_text' => 'Maximum', 'is_correct' => false],
                            ['choice_text' => 'Infinite', 'is_correct' => false],
                            ['choice_text' => 'Equal to the acceleration', 'is_correct' => false],
                        ],
                        'explanation' => 'The oscillator momentarily stops before reversing direction.',
                    ],

                    [
                        'question' => 'Why is the acceleration maximum in magnitude at maximum displacement in ideal simple harmonic motion?',
                        'choices' => [
                            ['choice_text' => 'a = -ω²x, so its magnitude is proportional to |x|', 'is_correct' => true],
                            ['choice_text' => 'Acceleration is independent of displacement', 'is_correct' => false],
                            ['choice_text' => 'Velocity is maximum there', 'is_correct' => false],
                            ['choice_text' => 'The restoring force is zero there', 'is_correct' => false],
                        ],
                        'explanation' => 'In SHM, acceleration is directly proportional to displacement and opposite in direction.',
                    ],

                    [
                        'question' => 'What happens to the period of an ideal mass-spring oscillator if the mass is quadrupled while k remains constant?',
                        'choices' => [
                            ['choice_text' => 'The period doubles', 'is_correct' => true],
                            ['choice_text' => 'The period is halved', 'is_correct' => false],
                            ['choice_text' => 'The period quadruples', 'is_correct' => false],
                            ['choice_text' => 'The period is unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'T = 2π√(m/k), so multiplying m by 4 doubles T.',
                    ],

                    [
                        'question' => 'Why does an ideal oscillator eventually stop being a good model for many real systems?',
                        'choices' => [
                            ['choice_text' => Real systems often have damping, nonlinearities or external forcing', 'is_correct' => true],
                            ['choice_text' => 'Real systems contain no energy', 'is_correct' => false],
                            ['choice_text' => 'Real springs always have zero stiffness', 'is_correct' => false],
                            ['choice_text' => 'Mass disappears over time', 'is_correct' => false],
                        ],
                        'explanation' => 'Real oscillators frequently exhibit dissipative and nonlinear effects absent from the ideal model.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 8 — Integrated Work, Energy and Power
            // ============================================================

            [
                'title' => 'Integrated Work, Energy and Power',
                'description' => 'Comprehensive intermediate problems combining work, energy, power, rotation and conservation laws.',
                'questions' => [

                    [
                        'question' => 'A 4 kg object accelerates from 2 m/s to 6 m/s. What net work is done?',
                        'choices' => [
                            ['choice_text' => '64 J', 'is_correct' => true],
                            ['choice_text' => '32 J', 'is_correct' => false],
                            ['choice_text' => '80 J', 'is_correct' => false],
                            ['choice_text' => '48 J', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔK = 1/2 × 4 × (36 - 4) = 64 J.',
                    ],

                    [
                        'question' => 'A 2 kg object falls 10 m without air resistance. Taking g = 9,8 m/s², how much gravitational potential energy is lost?',
                        'choices' => [
                            ['choice_text' => '196 J', 'is_correct' => true],
                            ['choice_text' => '98 J', 'is_correct' => false],
                            ['choice_text' => '49 J', 'is_correct' => false],
                            ['choice_text' => '19,6 J', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔU = mgh = 2 × 9,8 × 10 = 196 J.',
                    ],

                    [
                        'question' => 'Assuming no air resistance in the previous problem, what kinetic energy does the object gain?',
                        'choices' => [
                            ['choice_text' => '196 J', 'is_correct' => true],
                            ['choice_text' => '98 J', 'is_correct' => false],
                            ['choice_text' => '392 J', 'is_correct' => false],
                            ['choice_text' => '19,6 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Mechanical energy conservation means the lost gravitational potential energy becomes kinetic energy.',
                    ],

                    [
                        'question' => 'A 1000 W motor lifts a constant load and operates for 20 s at 75 % efficiency. How much useful energy is delivered?',
                        'choices' => [
                            ['choice_text' => '15 000 J', 'is_correct' => true],
                            ['choice_text' => '20 000 J', 'is_correct' => false],
                            ['choice_text' => '7500 J', 'is_correct' => false],
                            ['choice_text' => '13 333 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Input energy = Pt = 1000 × 20 = 20 000 J. Useful energy = 0,75 × 20 000 = 15 000 J.',
                    ],

                    [
                        'question' => 'A spring with k = 500 N/m is compressed by 0,2 m. What energy is stored?',
                        'choices' => [
                            ['choice_text' => '10 J', 'is_correct' => true],
                            ['choice_text' => '20 J', 'is_correct' => false],
                            ['choice_text' => '50 J', 'is_correct' => false],
                            ['choice_text' => '5 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Us = 1/2 × 500 × 0,2² = 10 J.',
                    ],

                    [
                        'question' => 'A rotating body has I = 2 kg·m² and angular speed 5 rad/s. What is its rotational kinetic energy?',
                        'choices' => [
                            ['choice_text' => '25 J', 'is_correct' => true],
                            ['choice_text' => '10 J', 'is_correct' => false],
                            ['choice_text' => '50 J', 'is_correct' => false],
                            ['choice_text' => '5 J', 'is_correct' => false],
                        ],
                        'explanation' => 'K_rot = 1/2 × 2 × 25 = 25 J.',
                    ],

                    [
                        'question' => 'A constant torque of 8 N·m rotates a shaft through 3 rad. What work is done by the torque?',
                        'choices' => [
                            ['choice_text' => '24 J', 'is_correct' => true],
                            ['choice_text' => '11 J', 'is_correct' => false],
                            ['choice_text' => '5 J', 'is_correct' => false],
                            ['choice_text' => '48 J', 'is_correct' => false],
                        ],
                        'explanation' => 'W = τΔθ = 8 × 3 = 24 J.',
                    ],

                    [
                        'question' => 'A 500 N horizontal force moves a vehicle at 20 m/s in the same direction as the force. What power is delivered?',
                        'choices' => [
                            ['choice_text' => '10 000 W', 'is_correct' => true],
                            ['choice_text' => '25 W', 'is_correct' => false],
                            ['choice_text' => '250 W', 'is_correct' => false],
                            ['choice_text' => '520 W', 'is_correct' => false],
                        ],
                        'explanation' => 'P = Fv = 500 × 20 = 10 000 W.',
                    ],

                    [
                        'question' => 'Why is mechanical energy not necessarily conserved even though total energy is conserved?',
                        'choices' => [
                            ['choice_text' => Non-conservative processes can transfer mechanical energy into thermal, internal or other forms', 'is_correct' => true],
                            ['choice_text' => 'Energy conservation fails when friction acts', 'is_correct' => false],
                            ['choice_text' => 'Mechanical energy is always equal to total energy', 'is_correct' => false],
                            ['choice_text' => 'Friction destroys energy rather than transforming it', 'is_correct' => false],
                        ],
                        'explanation' => 'Total energy remains conserved, but mechanical energy can be converted into other forms.',
                    ],

                    [
                        'question' => 'Why is selecting an appropriate conservation law an important part of solving an intermediate mechanics problem?',
                        'choices' => [
                            ['choice_text' => 'A suitable conservation law can reduce the number of unknowns and avoid unnecessary differential equations', 'is_correct' => true],
                            ['choice_text' => 'Conservation laws apply only when objects are at rest', 'is_correct' => false],
                            ['choice_text' => 'Every problem must be solved with exactly one law', 'is_correct' => false],
                            ['choice_text' => 'Energy methods invalidate Newton’s laws', 'is_correct' => false],
                        ],
                        'explanation' => 'Good problem selection often makes the difference between a long calculation and a concise solution.',
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