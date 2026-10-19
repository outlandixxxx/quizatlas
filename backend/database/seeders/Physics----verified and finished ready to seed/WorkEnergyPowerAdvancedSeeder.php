<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WorkEnergyPowerAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'work-energy-power')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Variable Forces and Work
            // ============================================================

            [
                'title' => 'Variable Forces and Work',
                'description' => 'Advanced analysis of work produced by position-dependent forces.',
                'questions' => [

                    [
                        'question' => 'For a one-dimensional force F(x), what expression gives the work performed between x1 and x2?',
                        'choices' => [
                            ['choice_text' => 'W = ∫(x1 to x2) F(x) dx', 'is_correct' => true],
                            ['choice_text' => 'W = ∫(x1 to x2) F(x) dt', 'is_correct' => false],
                            ['choice_text' => 'W = F(x2) - F(x1)', 'is_correct' => false],
                            ['choice_text' => 'W = F(x1)x2', 'is_correct' => false],
                        ],
                        'explanation' => 'For a position-dependent force, work is obtained by integrating F(x) with respect to displacement.',
                    ],

                    [
                        'question' => 'What does the signed area under a force-position graph represent?',
                        'choices' => [
                            ['choice_text' => 'The work done by the force over that displacement interval', 'is_correct' => true],
                            ['choice_text' => 'The acceleration at the endpoint', 'is_correct' => false],
                            ['choice_text' => 'The momentum of the particle', 'is_correct' => false],
                            ['choice_text' => 'The instantaneous power', 'is_correct' => false],
                        ],
                        'explanation' => 'The integral of F(x) dx corresponds geometrically to the signed area under the F-x curve.',
                    ],

                    [
                        'question' => 'A force varies as F(x) = 3x² N, with x measured in meters. What is the work done from x = 0 to x = 2 m?',
                        'choices' => [
                            ['choice_text' => '8 J', 'is_correct' => true],
                            ['choice_text' => '12 J', 'is_correct' => false],
                            ['choice_text' => '24 J', 'is_correct' => false],
                            ['choice_text' => '4 J', 'is_correct' => false],
                        ],
                        'explanation' => 'W = ∫0² 3x² dx = [x³]0² = 8 J.',
                    ],

                    [
                        'question' => 'For a conservative force F(x), which relation with potential energy U(x) is correct?',
                        'choices' => [
                            ['choice_text' => 'F(x) = -dU/dx', 'is_correct' => true],
                            ['choice_text' => 'F(x) = dU/dx', 'is_correct' => false],
                            ['choice_text' => 'F(x) = U/x', 'is_correct' => false],
                            ['choice_text' => 'F(x) = -U²', 'is_correct' => false],
                        ],
                        'explanation' => 'The force is the negative derivative of the potential energy.',
                    ],

                    [
                        'question' => 'Why does a conservative force have zero work around a closed path?',
                        'choices' => [
                            ['choice_text' => 'The path integral depends only on the initial and final positions, which are identical', 'is_correct' => true],
                            ['choice_text' => 'The force must vanish everywhere', 'is_correct' => false],
                            ['choice_text' => 'The displacement along a closed path is always zero at every point', 'is_correct' => false],
                            ['choice_text' => 'Conservative forces cannot perform work', 'is_correct' => false],
                        ],
                        'explanation' => 'For a conservative field, the closed-loop line integral is zero.',
                    ],

                    [
                        'question' => 'In a simply connected region, what differential condition is sufficient for a smooth force field to be conservative?',
                        'choices' => [
                            ['choice_text' => '∇ × F = 0', 'is_correct' => true],
                            ['choice_text' => '∇ · F = 0', 'is_correct' => false],
                            ['choice_text' => '∇F = constant', 'is_correct' => false],
                            ['choice_text' => 'F = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'In a simply connected domain, an irrotational force field is conservative.',
                    ],

                    [
                        'question' => 'Why is the topology of the domain relevant when identifying a conservative force field?',
                        'choices' => [
                            ['choice_text' => 'A curl-free field may fail to have a globally defined single-valued potential in a multiply connected domain', 'is_correct' => true],
                            ['choice_text' => 'Topology changes the mass of the particle', 'is_correct' => false],
                            ['choice_text' => 'Potential energy is always vectorial', 'is_correct' => false],
                            ['choice_text' => 'The work theorem applies only in simply connected domains', 'is_correct' => false],
                        ],
                        'explanation' => 'The global existence of a potential depends not only on curl but also on the topology of the region.',
                    ],

                    [
                        'question' => 'If U(x) = 4x³ - 2x, what is the corresponding one-dimensional force?',
                        'choices' => [
                            ['choice_text' => 'F(x) = -12x² + 2', 'is_correct' => true],
                            ['choice_text' => 'F(x) = 12x² - 2', 'is_correct' => false],
                            ['choice_text' => 'F(x) = 4x² - 2', 'is_correct' => false],
                            ['choice_text' => 'F(x) = -4x³ + 2x', 'is_correct' => false],
                        ],
                        'explanation' => 'F = -dU/dx = -(12x² - 2) = -12x² + 2.',
                    ],

                    [
                        'question' => 'Why can the work of a non-conservative force not generally be represented solely by a single-valued potential-energy function?',
                        'choices' => [
                            ['choice_text' => Its work can depend on the path taken between two points', 'is_correct' => true],
                            ['choice_text' => It always performs zero work', 'is_correct' => false],
                            ['choice_text' => It must be a gravitational force', 'is_correct' => false],
                            ['choice_text' => Its magnitude is always constant', 'is_correct' => false],
                        ],
                        'explanation' => 'Path dependence prevents a global scalar potential from describing the work in the usual conservative sense.',
                    ],

                    [
                        'question' => 'Why is the integral formulation of work essential for spatially varying force fields?',
                        'choices' => [
                            ['choice_text' => 'The local magnitude and direction of the force can vary throughout the trajectory', 'is_correct' => true],
                            ['choice_text' => 'All force fields are constant', 'is_correct' => false],
                            ['choice_text' => 'Displacement is irrelevant to work', 'is_correct' => false],
                            ['choice_text' => 'It eliminates the need for a trajectory', 'is_correct' => false],
                        ],
                        'explanation' => 'The line integral accumulates infinitesimal work contributions along the actual path.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 2 — Energy Landscapes and Stability
            // ============================================================

            [
                'title' => 'Energy Landscapes and Stability',
                'description' => 'Advanced treatment of equilibrium, potential-energy landscapes and accessible regions of motion.',
                'questions' => [

                    [
                        'question' => 'What condition identifies an equilibrium point x0 in a one-dimensional conservative system?',
                        'choices' => [
                            ['choice_text' => 'dU/dx evaluated at x0 equals zero', 'is_correct' => true],
                            ['choice_text' => 'U(x0) must equal zero', 'is_correct' => false],
                            ['choice_text' => 'dU/dx must be infinite', 'is_correct' => false],
                            ['choice_text' => 'd²U/dx² must equal zero', 'is_correct' => false],
                        ],
                        'explanation' => 'At equilibrium the force F = -dU/dx vanishes.',
                    ],

                    [
                        'question' => 'What condition indicates a stable one-dimensional equilibrium in a smooth conservative potential?',
                        'choices' => [
                            ['choice_text' => 'd²U/dx² > 0', 'is_correct' => true],
                            ['choice_text' => 'd²U/dx² < 0', 'is_correct' => false],
                            ['choice_text' => 'dU/dx > 0', 'is_correct' => false],
                            ['choice_text' => 'U = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'A positive second derivative means the equilibrium is at a local minimum of U.',
                    ],

                    [
                        'question' => 'What condition corresponds to an unstable equilibrium at a smooth local extremum of U(x)?',
                        'choices' => [
                            ['choice_text' => 'd²U/dx² < 0', 'is_correct' => true],
                            ['choice_text' => 'd²U/dx² > 0', 'is_correct' => false],
                            ['choice_text' => 'U = constant everywhere', 'is_correct' => false],
                            ['choice_text' => 'dU/dx ≠ 0', 'is_correct' => false],
                        ],
                        'explanation' => 'A negative second derivative corresponds to a local maximum of potential energy.',
                    ],

                    [
                        'question' => 'Why does the total mechanical energy determine which regions of a one-dimensional potential are accessible?',
                        'choices' => [
                            ['choice_text' => 'K = E - U(x) must be nonnegative for physically allowed motion', 'is_correct' => true],
                            ['choice_text' => 'Potential energy must always be zero', 'is_correct' => false],
                            ['choice_text' => 'Velocity can be imaginary without physical consequences', 'is_correct' => false],
                            ['choice_text' => 'The kinetic energy is independent of position', 'is_correct' => false],
                        ],
                        'explanation' => 'For real motion, E - U(x) ≥ 0, which constrains the accessible positions.',
                    ],

                    [
                        'question' => 'At a classical turning point, what condition holds for a one-dimensional conservative system?',
                        'choices' => [
                            ['choice_text' => 'K = 0 and therefore E = U(x)', 'is_correct' => true],
                            ['choice_text' => 'U = 0 for every turning point', 'is_correct' => false],
                            ['choice_text' => 'Acceleration is zero', 'is_correct' => false],
                            ['choice_text' => 'Momentum is infinite', 'is_correct' => false],
                        ],
                        'explanation' => 'At a turning point the instantaneous velocity and kinetic energy vanish.',
                    ],

                    [
                        'question' => 'Why can a particle reverse direction at a turning point even though its acceleration is generally nonzero there?',
                        'choices' => [
                            ['choice_text' => 'The velocity passes through zero while the force can remain finite and reverse the motion', 'is_correct' => true],
                            ['choice_text' => 'Acceleration must always vanish at a turning point', 'is_correct' => false],
                            ['choice_text' => 'The potential energy becomes undefined', 'is_correct' => false],
                            ['choice_text' => 'Momentum remains infinite', 'is_correct' => false],
                        ],
                        'explanation' => 'A finite restoring force can change the sign of velocity through a turning point.',
                    ],

                    [
                        'question' => 'Why is a local quadratic approximation useful near a stable equilibrium?',
                        'choices' => [
                            ['choice_text' => 'It leads to the simple harmonic oscillator as the leading approximation', 'is_correct' => true],
                            ['choice_text' => 'It makes all nonlinear effects globally disappear', 'is_correct' => false],
                            ['choice_text' => 'It forces the potential to be constant', 'is_correct' => false],
                            ['choice_text' => 'It eliminates kinetic energy', 'is_correct' => false],
                        ],
                        'explanation' => 'Expanding U around a stable minimum gives a quadratic leading term and harmonic dynamics.',
                    ],

                    [
                        'question' => 'If U(x) ≈ U0 + 1/2 k_eff(x - x0)² near equilibrium, what determines the small-oscillation angular frequency for mass m?',
                        'choices' => [
                            ['choice_text' => 'ω = √(k_eff/m)', 'is_correct' => true],
                            ['choice_text' => 'ω = √(m/k_eff)', 'is_correct' => false],
                            ['choice_text' => 'ω = k_eff/m²', 'is_correct' => false],
                            ['choice_text' => 'ω = m/k_eff', 'is_correct' => false],
                        ],
                        'explanation' => 'Linearization near the minimum produces m ẍ + k_eff x = 0.',
                    ],

                    [
                        'question' => 'Why can an energy diagram reveal qualitative motion without explicitly solving x(t)?',
                        'choices' => [
                            ['choice_text' => Turning points, allowed regions and equilibrium behavior can be inferred directly from E and U(x)', 'is_correct' => true],
                            ['choice_text' => 'Energy diagrams contain no information about motion', 'is_correct' => false],
                            ['choice_text' => 'The time variable is always displayed directly', 'is_correct' => false],
                            ['choice_text' => 'They determine every trajectory exactly', 'is_correct' => false],
                        ],
                        'explanation' => 'Energy methods provide powerful qualitative information even when an explicit trajectory is difficult to obtain.',
                    ],

                    [
                        'question' => 'Why is the additive constant in U(x) physically arbitrary?',
                        'choices' => [
                            ['choice_text' => 'Only potential-energy differences and its gradient affect the equations of motion', 'is_correct' => true],
                            ['choice_text' => 'Absolute potential energy directly determines mass', 'is_correct' => false],
                            ['choice_text' => 'The force depends on the arbitrary zero', 'is_correct' => false],
                            ['choice_text' => 'Energy conservation requires U to be positive', 'is_correct' => false],
                        ],
                        'explanation' => 'Changing U by a constant changes the reference but not forces or observable energy differences.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 3 — Rotational Energy and Rolling
            // ============================================================

            [
                'title' => 'Rotational Energy and Rolling',
                'description' => 'Advanced treatment of rolling bodies, rotational kinetic energy and energy partition.',
                'questions' => [

                    [
                        'question' => 'What is the total kinetic energy of a rigid body rolling without slipping?',
                        'choices' => [
                            ['choice_text' => 'K = 1/2 Mv_cm² + 1/2 I_cmω²', 'is_correct' => true],
                            ['choice_text' => 'K = 1/2 Mv_cm² only', 'is_correct' => false],
                            ['choice_text' => 'K = 1/2 I_cmω only', 'is_correct' => false],
                            ['choice_text' => 'K = Mv_cm + I_cmω', 'is_correct' => false],
                        ],
                        'explanation' => 'Rolling motion contains translational kinetic energy of the center of mass and rotational kinetic energy about it.',
                    ],

                    [
                        'question' => 'What relation describes pure rolling without slipping?',
                        'choices' => [
                            ['choice_text' => 'v_cm = Rω', 'is_correct' => true],
                            ['choice_text' => 'v_cm = ω/R', 'is_correct' => false],
                            ['choice_text' => 'v_cm = Rω²', 'is_correct' => false],
                            ['choice_text' => 'v_cm = R/ω', 'is_correct' => false],
                        ],
                        'explanation' => 'The no-slip condition gives v_cm = Rω.',
                    ],

                    [
                        'question' => 'Why can static friction be nonzero during rolling without slipping while doing no work at the instantaneous contact point in the ideal model?',
                        'choices' => [
                            ['choice_text' => The point of contact is instantaneously at rest relative to the surface', 'is_correct' => true],
                            ['choice_text' => Static friction is always zero', 'is_correct' => false],
                            ['choice_text' => The center of mass is stationary', 'is_correct' => false],
                            ['choice_text' => Static friction is non-conservative by definition', 'is_correct' => false],
                        ],
                        'explanation' => 'In ideal rolling, the instantaneous contact point has zero velocity relative to the surface.',
                    ],

                    [
                        'question' => 'A solid cylinder rolls without slipping down a frictionless incline. Which form of conservation of energy is appropriate?',
                        'choices' => [
                            ['choice_text' => 'Mgh = 1/2 Mv² + 1/2 I_cmω²', 'is_correct' => true],
                            ['choice_text' => 'Mgh = 1/2 Mv² only', 'is_correct' => false],
                            ['choice_text' => 'Mgh = 1/2 I_cmω² only', 'is_correct' => false],
                            ['choice_text' => 'Mgh = Mv', 'is_correct' => false],
                        ],
                        'explanation' => 'The gravitational potential energy becomes both translational and rotational kinetic energy.',
                    ],

                    [
                        'question' => 'For a solid cylinder with I_cm = 1/2 MR² rolling without slipping, what is its final speed after descending a height h from rest?',
                        'choices' => [
                            ['choice_text' => 'v = √(4gh/3)', 'is_correct' => true],
                            ['choice_text' => 'v = √(2gh)', 'is_correct' => false],
                            ['choice_text' => 'v = √(gh/2)', 'is_correct' => false],
                            ['choice_text' => 'v = √(3gh/4)', 'is_correct' => false],
                        ],
                        'explanation' => 'Using v = Rω, Mgh = 1/2Mv² + 1/4Mv² = 3/4Mv², so v² = 4gh/3.',
                    ],

                    [
                        'question' => 'Why does a rolling body with a smaller dimensionless inertia factor reach the bottom of an incline faster than one with a larger factor?',
                        'choice_text' => 'Less of the available gravitational potential energy must be stored in rotational kinetic energy for a given center-of-mass speed.',
                    ],

                    [
                        'question' => 'What is the rotational kinetic energy of a thin ring of mass M and radius R rolling without slipping at speed v?',
                        'choices' => [
                            ['choice_text' => 'K_rot = 1/2 Mv²', 'is_correct' => true],
                            ['choice_text' => 'K_rot = 1/4 Mv²', 'is_correct' => false],
                            ['choice_text' => 'K_rot = Mv²', 'is_correct' => false],
                            ['choice_text' => 'K_rot = 1/2 MRv', 'is_correct' => false],
                        ],
                        'explanation' => 'For a thin ring I = MR² and ω = v/R, so K_rot = 1/2 Iω² = 1/2 Mv².',
                    ],

                    [
                        'question' => 'Why is the center-of-mass decomposition useful for rigid-body kinetic energy?',
                        'choices' => [
                            ['choice_text' => 'It separates translational motion from rotation about the center of mass', 'is_correct' => true],
                            ['choice_text' => 'It eliminates angular velocity', 'is_correct' => false],
                            ['choice_text' => 'It assumes the body has no rotation', 'is_correct' => false],
                            ['choice_text' => 'It applies only to point particles', 'is_correct' => false],
                        ],
                        'explanation' => 'The decomposition simplifies rigid-body energy calculations into translational and rotational parts.',
                    ],

                    [
                        'question' => 'Why does mass distribution affect rolling acceleration even when total mass and radius are fixed?',
                        'choices' => [
                            ['choice_text' => The moment of inertia depends on how the mass is distributed relative to the rotation axis', 'is_correct' => true],
                            ['choice_text' => 'Gravity depends directly on the object’s shape', 'is_correct' => false],
                            ['choice_text' => 'Total mass no longer matters', 'is_correct' => false],
                            ['choice_text' => 'The rolling constraint changes the gravitational acceleration', 'is_correct' => false],
                        ],
                        'explanation' => 'Different mass distributions produce different moments of inertia and therefore different energy partitions.',
                    ],

                    [
                        'question' => 'Why can energy methods be especially effective for rolling problems?',
                        'choices' => [
                            ['choice_text' => 'They avoid solving separately for the instantaneous translation and rotation when only initial and final speeds are required', 'is_correct' => true],
                            ['choice_text' => 'Rolling involves no forces', 'is_correct' => false],
                            ['choice_text' => 'Friction always does positive work', 'is_correct' => false],
                            ['choice_text' => 'Angular momentum is always zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Conservation of mechanical energy can provide the final speed directly for ideal rolling systems.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 4 — Power and Continuous Energy Transfer
            // ============================================================

            [
                'title' => 'Power and Continuous Energy Transfer',
                'description' => 'Advanced analysis of instantaneous power, variable force and energy flow.',
                'questions' => [

                    [
                        'question' => 'What is the instantaneous power delivered by a force F to a particle moving with velocity v?',
                        'choices' => [
                            ['choice_text' => 'P = F · v', 'is_correct' => true],
                            ['choice_text' => 'P = F · a', 'is_correct' => false],
                            ['choice_text' => 'P = F/v', 'is_correct' => false],
                            ['choice_text' => 'P = F + v', 'is_correct' => false],
                        ],
                        'explanation' => 'Since dW = F · dr and v = dr/dt, P = dW/dt = F · v.',
                    ],

                    [
                        'question' => 'A force of 100 N acts at 60° to the velocity of a particle moving at 4 m/s. What instantaneous power does it deliver?',
                        'choices' => [
                            ['choice_text' => '200 W', 'is_correct' => true],
                            ['choice_text' => '400 W', 'is_correct' => false],
                            ['choice_text' => '100 W', 'is_correct' => false],
                            ['choice_text' => '50 W', 'is_correct' => false],
                        ],
                        'explanation' => 'P = Fv cos60° = 100 × 4 × 0,5 = 200 W.',
                    ],

                    [
                        'question' => 'Why does a force perpendicular to velocity perform zero instantaneous power?',
                        'choices' => [
                            ['choice_text' => 'Its scalar product with velocity vanishes', 'is_correct' => true],
                            ['choice_text' => 'The force is necessarily zero', 'is_correct' => false],
                            ['choice_text' => 'Velocity is necessarily zero', 'is_correct' => false],
                            ['choice_text' => 'The object cannot be accelerating', 'is_correct' => false],
                        ],
                        'explanation' => 'P = F · v = Fv cos90° = 0.',
                    ],

                    [
                        'question' => 'Why can a force change an object’s trajectory while doing zero work?',
                        'choices' => [
                            ['choice_text' => A perpendicular force can change the direction of velocity without changing its speed', 'is_correct' => true],
                            ['choice_text' => 'Zero work means zero force', 'is_correct' => false],
                            ['choice_text' => 'Trajectory depends only on energy, never on force', 'is_correct' => false],
                            ['choice_text' => 'The object must be stationary', 'is_correct' => false],
                        ],
                        'explanation' => 'Centripetal force is the standard example: it redirects velocity without changing kinetic energy.',
                    ],

                    [
                        'question' => 'What is the relationship between average power and total work over a time interval Δt?',
                        'choices' => [
                            ['choice_text' => 'P_avg = W/Δt', 'is_correct' => true],
                            ['choice_text' => 'P_avg = WΔt', 'is_correct' => false],
                            ['choice_text' => 'P_avg = Δt/W', 'is_correct' => false],
                            ['choice_text' => 'P_avg = W + Δt', 'is_correct' => false],
                        ],
                        'explanation' => 'Average power is total work divided by the elapsed time.',
                    ],

                    [
                        'question' => 'A force varies in time and the corresponding velocity also varies. Which quantity must be integrated to obtain total work from power?',
                        'choices' => [
                            ['choice_text' => 'P(t) with respect to time', 'is_correct' => true],
                            ['choice_text' => 'F(t) with respect to position only', 'is_correct' => false],
                            ['choice_text' => 'v(t) with respect to force', 'is_correct' => false],
                            ['choice_text' => 'P(t) squared', 'is_correct' => false],
                        ],
                        'explanation' => 'W = ∫P(t)dt over the relevant time interval.',
                    ],

                    [
                        'question' => 'Why is power a useful quantity when evaluating a machine operating over a long period?',
                        'choice_text' => 'It measures the rate of energy transfer and therefore determines how quickly useful work can be delivered.',
                    ],

                    [
                        'question' => 'A machine delivers 50 kJ of useful work in 25 s. What is its average useful power?',
                        'choices' => [
                            ['choice_text' => '2 kW', 'is_correct' => true],
                            ['choice_text' => '1 kW', 'is_correct' => false],
                            ['choice_text' => '20 kW', 'is_correct' => false],
                            ['choice_text' => '1250 W', 'is_correct' => false],
                        ],
                        'explanation' => 'P_avg = 50 000/25 = 2000 W = 2 kW.',
                    ],

                    [
                        'question' => 'Why can average power conceal important information about a varying mechanical system?',
                        'choices' => [
                            ['choice_text' => 'It gives only the average rate and may hide short intervals of very high or low power', 'is_correct' => true],
                            ['choice_text' => 'Average power determines the force at every instant', 'is_correct' => false],
                            ['choice_text' => 'Power is always constant by definition', 'is_correct' => false],
                            ['choice_text' => 'The work cannot vary in time', 'is_correct' => false],
                        ],
                        'explanation' => 'Instantaneous power can vary substantially even when the average is fixed.',
                    ],

                    [
                        'question' => 'Why is mechanical efficiency often analyzed together with power rather than efficiency alone?',
                        'choices' => [
                            ['choice_text' => 'Efficiency measures conversion fraction while power measures the rate of useful energy delivery', 'is_correct' => true],
                            ['choice_text' => 'Power and efficiency are identical quantities', 'is_correct' => false],
                            ['choice_text' => 'Efficiency determines the operating time uniquely', 'is_correct' => false],
                            ['choice_text' => 'Power has no practical engineering significance', 'is_correct' => false],
                        ],
                        'explanation' => 'A system may have high efficiency but low power, or high power with significant losses.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 5 — Dissipation and Non-Conservative Forces
            // ============================================================

            [
                'title' => 'Dissipation and Non-Conservative Forces',
                'description' => 'Advanced energy accounting in systems with friction, drag and irreversible processes.',
                'questions' => [

                    [
                        'question' => 'For a system with conservative and non-conservative forces, which relation is correct?',
                        'choices' => [
                            ['choice_text' => 'Δ(K + U) = W_nc', 'is_correct' => true],
                            ['choice_text' => 'Δ(K + U) = 0 regardless of W_nc', 'is_correct' => false],
                            ['choice_text' => 'Δ(K - U) = W_nc', 'is_correct' => false],
                            ['choice_text' => 'ΔU = W_nc always', 'is_correct' => false],
                        ],
                        'explanation' => 'The work of non-conservative forces changes total mechanical energy.',
                    ],

                    [
                        'question' => 'Why does kinetic friction reduce mechanical energy?',
                        'choices' => [
                            ['choice_text' => 'It performs negative work that transfers mechanical energy into internal energy', 'is_correct' => true],
                            ['choice_text' => 'It destroys total energy', 'is_correct' => false],
                            ['choice_text' => 'It increases potential energy automatically', 'is_correct' => false],
                            ['choice_text' => 'It is conservative', 'is_correct' => false],
                        ],
                        'explanation' => 'Friction dissipates organized mechanical energy into microscopic internal energy.',
                    ],

                    [
                        'question' => 'A block slides 12 m under a constant friction force of 15 N opposite its displacement. How much mechanical energy is dissipated?',
                        'choices' => [
                            ['choice_text' => '180 J', 'is_correct' => true],
                            ['choice_text' => '27 J', 'is_correct' => false],
                            ['choice_text' => '3 J', 'is_correct' => false],
                            ['choice_text' => '90 J', 'is_correct' => false],
                        ],
                        'explanation' => 'The friction work is -fd = -15 × 12 = -180 J, so 180 J of mechanical energy is dissipated.',
                    ],

                    [
                        'question' => 'Why can total energy remain constant while mechanical energy decreases in a frictional system?',
                        'choices' => [
                            ['choice_text' => 'Mechanical energy is transformed into internal thermal and microscopic energy', 'is_correct' => true],
                            ['choice_text' => 'The first law is violated locally', 'is_correct' => false],
                            ['choice_text' => 'Friction destroys energy', 'is_correct' => false],
                            ['choice_text' => 'Internal energy is not a form of energy', 'is_correct' => false],
                        ],
                        'explanation' => 'Energy conservation applies to the total energy, including internal energy generated by dissipation.',
                    ],

                    [
                        'question' => 'What happens to the mechanical energy balance if a driving non-conservative force performs positive work?',
                        'choices' => [
                            ['choice_text' => 'Mechanical energy can increase', 'is_correct' => true],
                            ['choice_text' => 'Mechanical energy must decrease', 'is_correct' => false],
                            ['choice_text' => 'Mechanical energy is necessarily unchanged', 'is_correct' => false],
                            ['choice_text' => 'Potential energy becomes undefined', 'is_correct' => false],
                        ],
                        'explanation' => 'Positive work by external non-conservative forces adds mechanical energy to the system.',
                    ],

                    [
                        'question' => 'Why is path dependence central to the definition of non-conservative work?',
                        'choices' => [
                            ['choice_text' => 'The amount of work can differ for different paths connecting the same endpoints', 'is_correct' => true],
                            ['choice_text' => 'All paths have identical lengths', 'is_correct' => false],
                            ['choice_text' => 'Non-conservative forces cannot act over distance', 'is_correct' => false],
                            ['choice_text' => 'Potential energy becomes path-independent', 'is_correct' => false],
                        ],
                        'explanation' => 'Path dependence is the key distinction from conservative forces.',
                    ],

                    [
                        'question' => 'Why is drag often modeled differently at low and high speeds?',
                        'choices' => [
                            ['choice_text' => 'Different flow regimes produce different relationships between drag and velocity', 'is_correct' => true],
                            ['choice_text' => 'Gravity changes with speed', 'is_correct' => false],
                            ['choice_text' => 'Mass is speed-dependent in classical mechanics', 'is_correct' => false],
                            ['choice_text' => 'Drag is always exactly linear', 'is_correct' => false],
                        ],
                        'explanation' => 'Depending on Reynolds number and flow conditions, drag can be approximately linear or quadratic in speed.',
                    ],

                    [
                        'question' => 'In an idealized linear-drag model F_d = -bv, what happens to the kinetic energy of a freely moving object if no other forces perform work?',
                        'choices' => [
                            ['choice_text' => 'It decreases monotonically', 'is_correct' => true],
                            ['choice_text' => 'It increases monotonically', 'is_correct' => false],
                            ['choice_text' => 'It remains constant', 'is_correct' => false],
                            ['choice_text' => 'It becomes negative immediately', 'is_correct' => false],
                        ],
                        'explanation' => 'The drag force always opposes velocity and performs negative power P = -bv².',
                    ],

                    [
                        'question' => 'Why is dissipation important in engineering energy budgets?',
                        'choices' => [
                            ['choice_text' => 'It determines how much supplied energy becomes useful output versus unwanted heating and losses', 'is_correct' => true],
                            ['choice_text' => 'It eliminates energy conservation', 'is_correct' => false],
                            ['choice_text' => 'It is relevant only to thermodynamics and never to mechanics', 'is_correct' => false],
                            ['choice_text' => 'It guarantees 100 % efficiency', 'is_correct' => false],
                        ],
                        'explanation' => 'Dissipative losses directly influence system efficiency, thermal loads and operating requirements.',
                    ],

                    [
                        'question' => 'Why is reducing friction not equivalent to eliminating all forms of energy loss in a real machine?',
                        'choices' => [
                            ['choice_text' => 'Other losses such as aerodynamic drag, electrical losses, deformation and heat transfer can remain', 'is_correct' => true],
                            ['choice_text' => 'Friction is the only possible loss mechanism', 'is_correct' => false],
                            ['choice_text' => 'A machine with no friction has no energy input', 'is_correct' => false],
                            ['choice_text' => 'All real machines are perfectly conservative without friction', 'is_correct' => false],
                        ],
                        'explanation' => 'Real machines have multiple mechanisms of irreversible energy transfer.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 6 — Central Forces and Effective Potential
            // ============================================================

            [
                'title' => 'Central Forces and Effective Potential',
                'description' => 'Advanced work-energy analysis for central-force motion and orbital systems.',
                'questions' => [

                    [
                        'question' => 'What is the effective potential for radial motion under a central potential V(r)?',
                        'choices' => [
                            ['choice_text' => 'V_eff(r) = V(r) + L²/(2mr²)', 'is_correct' => true],
                            ['choice_text' => 'V_eff(r) = V(r) - L²/(2mr²)', 'is_correct' => false],
                            ['choice_text' => 'V_eff(r) = V(r) + mr²/2', 'is_correct' => false],
                            ['choice_text' => 'V_eff(r) = L/(mr)', 'is_correct' => false],
                        ],
                        'explanation' => 'The angular kinetic contribution becomes an effective centrifugal potential.',
                    ],

                    [
                        'question' => 'Why is angular momentum conserved in a central-force problem?',
                        'choices' => [
                            ['choice_text' => 'The torque about the force center is zero', 'is_correct' => true],
                            ['choice_text' => 'The force is tangential', 'is_correct' => false],
                            ['choice_text' => 'The particle has no angular velocity', 'is_correct' => false],
                            ['choice_text' => 'Potential energy is constant', 'is_correct' => false],
                        ],
                        'explanation' => 'Since F is parallel to r, τ = r × F = 0.',
                    ],

                    [
                        'question' => 'What is the total mechanical energy in the reduced radial description?',
                        'choices' => [
                            ['choice_text' => 'E = 1/2 m ṙ² + V_eff(r)', 'is_correct' => true],
                            ['choice_text' => 'E = mṙ + V_eff(r)', 'is_correct' => false],
                            ['choice_text' => 'E = 1/2 m r² + V(r)', 'is_correct' => false],
                            ['choice_text' => 'E = V_eff/ṙ', 'is_correct' => false],
                        ],
                        'explanation' => 'The radial motion can be represented as a one-dimensional energy problem.',
                    ],

                    [
                        'question' => 'What condition identifies a circular orbit in the effective-potential picture?',
                        'choices' => [
                            ['choice_text' => 'dV_eff/dr = 0 at the orbit radius', 'is_correct' => true],
                            ['choice_text' => 'V_eff = 0', 'is_correct' => false],
                            ['choice_text' => 'dV_eff/dr = 1', 'is_correct' => false],
                            ['choice_text' => 'L = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'A circular orbit corresponds to a stationary radial coordinate.',
                    ],

                    [
                        'question' => 'What indicates radial stability of a circular orbit?',
                        'choices' => [
                            ['choice_text' => 'd²V_eff/dr² > 0', 'is_correct' => true],
                            ['choice_text' => 'd²V_eff/dr² < 0', 'is_correct' => false],
                            ['choice_text' => 'V_eff = 0', 'is_correct' => false],
                            ['choice_text' => 'r = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'A local minimum in effective potential provides a restoring radial response.',
                    ],

                    [
                        'question' => 'For Newtonian gravity, which potential energy is obtained when zero is chosen at infinity?',
                        'choices' => [
                            ['choice_text' => 'U(r) = -GMm/r', 'is_correct' => true],
                            ['choice_text' => 'U(r) = GMm/r', 'is_correct' => false],
                            ['choice_text' => 'U(r) = -GMm/r²', 'is_correct' => false],
                            ['choice_text' => 'U(r) = GMmr', 'is_correct' => false],
                        ],
                        'explanation' => 'The inverse-square attractive force corresponds to U = -GMm/r.',
                    ],

                    [
                        'question' => 'What is the total energy of a circular gravitational orbit at radius r?',
                        'choices' => [
                            ['choice_text' => 'E = -GMm/(2r)', 'is_correct' => true],
                            ['choice_text' => 'E = GMm/(2r)', 'is_correct' => false],
                            ['choice_text' => 'E = -GMm/r²', 'is_correct' => false],
                            ['choice_text' => 'E = GMm/r', 'is_correct' => false],
                        ],
                        'explanation' => 'The circular-orbit kinetic energy is GMm/(2r), while U = -GMm/r.',
                    ],

                    [
                        'question' => 'Why does negative orbital energy imply a gravitationally bound Newtonian orbit?',
                        'choice_text' => 'With U(∞) = 0, negative total energy means the object cannot reach infinity with nonnegative kinetic energy.',
                    ],

                    [
                        'question' => 'Why can energy and angular momentum together strongly constrain an orbital trajectory?',
                        'choices' => [
                            ['choice_text' => 'They determine the allowed radial range and angular dynamics of the central-force motion', 'is_correct' => true],
                            ['choice_text' => 'They eliminate the need for a force law', 'is_correct' => false],
                            ['choice_text' => 'They force every orbit to be circular', 'is_correct' => false],
                            ['choice_text' => 'Angular momentum is independent of geometry', 'is_correct' => false],
                        ],
                        'explanation' => 'Energy controls accessible radial regions while angular momentum contributes the effective centrifugal barrier.',
                    ],

                    [
                        'question' => 'Why is the effective-potential approach valuable even when an exact orbit equation is difficult to derive?',
                        'choices' => [
                            ['choice_text' => 'It provides qualitative information about turning points, bound motion and stability', 'is_correct' => true],
                            ['choice_text' => 'It automatically gives every trajectory in closed form', 'is_correct' => false],
                            ['choice_text' => 'It removes angular momentum from physics', 'is_correct' => false],
                            ['choice_text' => 'It applies only to non-conservative forces', 'is_correct' => false],
                        ],
                        'explanation' => 'Effective potentials are powerful qualitative tools even when explicit solutions are unavailable.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 7 — Computational Energy Analysis
            // ============================================================

            [
                'title' => 'Computational Energy Analysis',
                'description' => 'Advanced numerical treatment of energy conservation, integration error and simulation diagnostics.',
                'questions' => [

                    [
                        'question' => 'Why should a conservative numerical simulation approximately preserve total mechanical energy?',
                        'choices' => [
                            ['choice_text' => 'Because the continuous physical model conserves energy and the numerical method should approximate that behavior', 'is_correct' => true],
                            ['choice_text' => 'Because numerical methods are always exact', 'is_correct' => false],
                            ['choice_text' => 'Because energy is not part of mechanics', 'is_correct' => false],
                            ['choice_text' => 'Because numerical integration removes all errors', 'is_correct' => false],
                        ],
                        'explanation' => 'A suitable numerical approximation should respect the conservation properties of the underlying model as closely as practical.',
                    ],

                    [
                        'question' => 'What does systematic energy drift in a long conservative simulation suggest?',
                        'choices' => [
                            ['choice_text' => 'Possible numerical instability, inappropriate integration scheme or accumulated discretization error', 'is_correct' => true],
                            ['choice_text' => 'The physical system necessarily generates energy', 'is_correct' => false],
                            ['choice_text' => 'Energy conservation is incorrect', 'is_correct' => false],
                            ['choice_text' => 'The system must contain friction', 'is_correct' => false],
                        ],
                        'explanation' => 'Long-term drift is often a numerical artifact or an indication that the numerical method is poorly suited to the problem.',
                    ],

                    [
                        'question' => 'Why are symplectic integrators useful for Hamiltonian mechanics?',
                        'choices' => [
                            ['choice_text' => 'They preserve the symplectic structure of phase space and often control long-term energy error', 'is_correct' => true],
                            ['choice_text' => 'They make all numerical errors vanish', 'is_correct' => false],
                            ['choice_text' => 'They apply only to dissipative systems', 'is_correct' => false],
                            ['choice_text' => 'They force energy to be exactly constant at every numerical step', 'is_correct' => false],
                        ],
                        'explanation' => 'Symplectic methods preserve geometric structure and are particularly effective for long-term Hamiltonian simulations.',
                    ],

                    [
                        'question' => 'Why can reducing the numerical time step improve a work-energy simulation?',
                        'choices' => [
                            ['choice_text' => 'It generally reduces local discretization errors and better resolves the dynamics', 'is_correct' => true],
                            ['choice_text' => 'It guarantees exact results for any integrator', 'is_correct' => false],
                            ['choice_text' => 'It removes the need for validation', 'is_correct' => false],
                            ['choice_text' => 'It changes the physical force law', 'is_correct' => false],
                        ],
                        'explanation' => 'Smaller steps generally improve resolution and convergence, though cost increases.',
                    ],

                    [
                        'question' => 'Why can a numerical energy residual be used as a diagnostic?',
                        'choices' => [
                            ['choice_text' => 'It quantifies deviation from an expected conservation relation', 'is_correct' => true],
                            ['choice_text' => 'It modifies the exact physical energy', 'is_correct' => false],
                            ['choice_text' => 'It guarantees the model is physically correct', 'is_correct' => false],
                            ['choice_text' => 'It replaces experimental validation entirely', 'is_correct' => false],
                        ],
                        'explanation' => 'Energy residuals can reveal integration and implementation problems.',
                    ],

                    [
                        'question' => 'Why is nondimensionalization useful in computational energy problems?',
                        'choices' => [
                            ['choice_text' => 'It can improve numerical conditioning and reveal the relative importance of physical parameters', 'is_correct' => true],
                            ['choice_text' => 'It eliminates physical units from reality', 'is_correct' => false],
                            ['choice_text' => 'It guarantees exact conservation', 'is_correct' => false],
                            ['choice_text' => 'It removes all nonlinearities', 'is_correct' => false],
                        ],
                        'explanation' => 'Dimensionless variables help identify scales and can improve numerical robustness.',
                    ],

                    [
                        'question' => 'Why is convergence testing stronger than simply comparing one numerical result with one expected value?',
                        'choices' => [
                            ['choice_text' => 'It checks whether the solution approaches a stable result as resolution is refined', 'is_correct' => true],
                            ['choice_text' => 'It proves the underlying physics is correct', 'is_correct' => false],
                            ['choice_text' => 'It eliminates all uncertainty', 'is_correct' => false],
                            ['choice_text' => 'It guarantees exact machine arithmetic', 'is_correct' => false],
                        ],
                        'explanation' => 'Convergence testing assesses numerical discretization behavior independently of a single resolution.',
                    ],

                    [
                        'question' => 'Why can an adaptive solver be beneficial for a mechanical system with rapidly varying forces in limited regions?',
                        'choices' => [
                            ['choice_text' => 'It can refine the time step where the dynamics demand greater resolution and enlarge it elsewhere', 'is_correct' => true],
                            ['choice_text' => 'It always uses fewer steps than every fixed-step method', 'is_correct' => false],
                            ['choice_text' => 'It removes all stiffness from the equations', 'is_correct' => false],
                            ['choice_text' => 'It guarantees exact energy conservation', 'is_correct' => false],
                        ],
                        'explanation' => 'Adaptive schemes allocate computational effort based on estimated local error.',
                    ],

                    [
                        'question' => 'Why should numerical results be checked against limiting cases?',
                        'choices' => [
                            ['choice_text' => 'Known limits can reveal coding mistakes, incorrect scaling or physically inconsistent behavior', 'is_correct' => true],
                            ['choice_text' => 'Limiting cases are unrelated to numerical modeling', 'is_correct' => false],
                            ['choice_text' => 'Every numerical model is exact without checks', 'is_correct' => false],
                            ['choice_text' => 'Limiting cases always eliminate uncertainty', 'is_correct' => false],
                        ],
                        'explanation' => 'Analytical or physical limiting cases are powerful validation tests.',
                    ],

                    [
                        'question' => 'Why is numerical energy analysis best combined with analytical reasoning?',
                        'choices' => [
                            ['choice_text' => 'Analytical structure identifies expected invariants and behavior that numerical calculations can then test and approximate', 'is_correct' => true],
                            ['choice_text' => 'Numerical methods make analytical models unnecessary', 'is_correct' => false],
                            ['choice_text' => 'Analytical methods cannot describe energy', 'is_correct' => false],
                            ['choice_text' => 'Numerical calculations always reveal physical assumptions automatically', 'is_correct' => false],
                        ],
                        'explanation' => 'Combining theory and computation provides both physical interpretation and quantitative prediction.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 8 — Integrated Advanced Work, Energy and Power
            // ============================================================

            [
                'title' => 'Integrated Advanced Work, Energy and Power',
                'description' => 'Comprehensive advanced problems combining work, energy, power, rotation, dissipation and orbital mechanics.',
                'questions' => [

                    [
                        'question' => 'A particle of mass 2 kg moves from 3 m/s to 9 m/s. What is the net work performed on it?',
                        'choices' => [
                            ['choice_text' => '72 J', 'is_correct' => true],
                            ['choice_text' => '36 J', 'is_correct' => false],
                            ['choice_text' => '81 J', 'is_correct' => false],
                            ['choice_text' => '54 J', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔK = 1/2 × 2 × (9² - 3²) = 81 - 9 = 72 J.',
                    ],

                    [
                        'question' => 'A force F(x) = 4x N acts along the x-axis from x = 0 to x = 3 m. What work is performed?',
                        'choices' => [
                            ['choice_text' => '18 J', 'is_correct' => true],
                            ['choice_text' => '12 J', 'is_correct' => false],
                            ['choice_text' => '36 J', 'is_correct' => false],
                            ['choice_text' => '6 J', 'is_correct' => false],
                        ],
                        'explanation' => 'W = ∫0³ 4x dx = 2x²|0³ = 18 J.',
                    ],

                    [
                        'question' => 'A 1000 W motor operates for 60 s at 80 % efficiency. How much useful mechanical energy does it deliver?',
                        'choices' => [
                            ['choice_text' => '48 000 J', 'is_correct' => true],
                            ['choice_text' => '60 000 J', 'is_correct' => false],
                            ['choice_text' => '80 000 J', 'is_correct' => false],
                            ['choice_text' => '12 000 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Input energy = 1000 × 60 = 60 000 J. Useful output = 0,8 × 60 000 = 48 000 J.',
                    ],

                    [
                        'question' => 'A rigid body has I = 5 kg·m² and angular speed 4 rad/s. What is its rotational kinetic energy?',
                        'choices' => [
                            ['choice_text' => '40 J', 'is_correct' => true],
                            ['choice_text' => '20 J', 'is_correct' => false],
                            ['choice_text' => '80 J', 'is_correct' => false],
                            ['choice_text' => '10 J', 'is_correct' => false],
                        ],
                        'explanation' => 'K_rot = 1/2 Iω² = 1/2 × 5 × 16 = 40 J.',
                    ],

                    [
                        'question' => 'A 2 kg body slides down from a height of 10 m and loses 30 J of mechanical energy to friction. Taking g = 9,8 m/s², what kinetic energy does it gain if it starts from rest?',
                        'choices' => [
                            ['choice_text' => '166 J', 'is_correct' => true],
                            ['choice_text' => '196 J', 'is_correct' => false],
                            ['choice_text' => '226 J', 'is_correct' => false],
                            ['choice_text' => '30 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Initial gravitational potential energy is 196 J. After 30 J dissipation, final kinetic energy is 166 J.',
                    ],

                    [
                        'question' => 'Why does a central gravitational orbit conserve mechanical energy while the orbital speed changes around an ellipse?',
                        'choices' => [
                            ['choice_text' => Kinetic and gravitational potential energies exchange while their sum remains constant', 'is_correct' => true],
                            ['choice_text' => 'The speed is actually constant on an ellipse', 'is_correct' => false],
                            ['choice_text' => 'Gravity is non-conservative', 'is_correct' => false],
                            ['choice_text' => 'Potential energy remains zero', 'is_correct' => false],
                        ],
                        'explanation' => 'The gravitational force is conservative, so changing kinetic and potential energies compensate.',
                    ],

                    [
                        'question' => 'A torque of 30 N·m acts on a shaft rotating at 20 rad/s. What mechanical power is delivered?',
                        'choices' => [
                            ['choice_text' => '600 W', 'is_correct' => true],
                            ['choice_text' => '50 W', 'is_correct' => false],
                            ['choice_text' => '1500 W', 'is_correct' => false],
                            ['choice_text' => '300 W', 'is_correct' => false],
                        ],
                        'explanation' => 'P = τω = 30 × 20 = 600 W.',
                    ],

                    [
                        'question' => 'Why can conserved energy and momentum provide independent checks on a complex mechanics simulation?',
                        'choices' => [
                            ['choice_text' => 'They constrain different aspects of the computed dynamics and can reveal different numerical errors', 'is_correct' => true],
                            ['choice_text' => 'Energy and momentum are identical quantities', 'is_correct' => false],
                            ['choice_text' => 'Neither quantity is affected by numerical error', 'is_correct' => false],
                            ['choice_text' => 'Conservation laws apply only to analytical solutions', 'is_correct' => false],
                        ],
                        'explanation' => 'Independent conservation laws provide complementary validation constraints.',
                    ],

                    [
                        'question' => 'Why is the work-energy approach particularly powerful for determining final speed when the path is complicated but the energy changes are known?',
                        'choices' => [
                            ['choice_text' => 'It bypasses the need to determine the full time-dependent trajectory', 'is_correct' => true],
                            ['choice_text' => 'It ignores all forces automatically', 'is_correct' => false],
                            ['choice_text' => 'It requires acceleration to be constant', 'is_correct' => false],
                            ['choice_text' => 'It applies only to one-dimensional motion', 'is_correct' => false],
                        ],
                        'explanation' => 'State-to-state energy relations can provide final speeds without solving x(t) in detail.',
                    ],

                    [
                        'question' => 'Why should a professional work-energy model explicitly identify conservative and non-conservative contributions?',
                        'choices' => [
                            ['choice_text' => 'It determines whether mechanical energy is conserved or must include additional work terms', 'is_correct' => true],
                            ['choice_text' => 'All forces are conservative by definition', 'is_correct' => false],
                            ['choice_text' => 'Non-conservative forces never affect energy', 'is_correct' => false],
                            ['choice_text' => 'The classification has no mathematical consequence', 'is_correct' => false],
                        ],
                        'explanation' => 'Correct classification determines the appropriate energy balance and prevents invalid conservation assumptions.',
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

                // Randomize answer positions to avoid predictable
                // correct-choice ordering.
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