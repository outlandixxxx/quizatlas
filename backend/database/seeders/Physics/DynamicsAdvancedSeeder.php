<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DynamicsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'dynamics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Advanced Newtonian Dynamics
            // ============================================================

            [
                'title' => 'Advanced Newtonian Dynamics',
                'description' => 'Advanced analysis of Newton’s laws, inertial frames, constrained motion and force systems.',
                'questions' => [

                    [
                        'question' => 'For a particle of constant mass, what is the most general vector form of Newton’s second law?',
                        'choices' => [
                            ['choice_text' => 'ΣF = ma', 'is_correct' => true],
                            ['choice_text' => 'ΣF = mv', 'is_correct' => false],
                            ['choice_text' => 'ΣF = m/v', 'is_correct' => false],
                            ['choice_text' => 'ΣF = a/m', 'is_correct' => false],
                        ],
                        'explanation' => 'For constant mass, the net external force equals mass times acceleration.',
                    ],

                    [
                        'question' => 'Why is an inertial reference frame particularly convenient for Newtonian mechanics?',
                        'choices' => [
                            ['choice_text' => Newton’s laws can be applied without introducing fictitious forces', 'is_correct' => true],
                            ['choice_text' => 'The frame must always be stationary relative to Earth', 'is_correct' => false],
                            ['choice_text' => 'Acceleration is always zero in such a frame', 'is_correct' => false],
                            ['choice_text' => 'All forces vanish in such a frame', 'is_correct' => false],
                        ],
                        'explanation' => 'In an inertial frame, Newton’s laws take their standard form without additional inertial forces.',
                    ],

                    [
                        'question' => 'A 4 kg particle is subjected to forces of 12 N east and 5 N north. What is the magnitude of its acceleration?',
                        'choices' => [
                            ['choice_text' => '3,25 m/s²', 'is_correct' => true],
                            ['choice_text' => '4,25 m/s²', 'is_correct' => false],
                            ['choice_text' => '17 m/s²', 'is_correct' => false],
                            ['choice_text' => '2,25 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'The net force magnitude is √(12² + 5²) = 13 N, so a = 13/4 = 3,25 m/s².',
                    ],

                    [
                        'question' => 'Why can the normal force be different from the weight even when an object remains in contact with a surface?',
                        'choices' => [
                            ['choice_text' => The acceleration component perpendicular to the surface can make the perpendicular force balance differ from zero', 'is_correct' => true],
                            ['choice_text' => 'The normal force is always equal to weight by definition', 'is_correct' => false],
                            ['choice_text' => 'Weight disappears during acceleration', 'is_correct' => false],
                            ['choice_text' => 'Normal force depends only on mass', 'is_correct' => false],
                        ],
                        'explanation' => 'The normal force is determined by the force balance perpendicular to the contact surface.',
                    ],

                    [
                        'question' => 'A particle is acted upon by a constant net force. What happens to its momentum?',
                        'choices' => [
                            ['choice_text' => 'It changes linearly with time in the direction of the net force', 'is_correct' => true],
                            ['choice_text' => 'It remains constant regardless of the force', 'is_correct' => false],
                            ['choice_text' => 'It changes quadratically with time', 'is_correct' => false],
                            ['choice_text' => 'It becomes zero immediately', 'is_correct' => false],
                        ],
                        'explanation' => 'Since F = dp/dt, a constant force produces a linear change in momentum with time.',
                    ],

                    [
                        'question' => 'Why is the free-body diagram considered a model rather than a literal picture of all interactions?',
                        'choices' => [
                            ['choice_text' => It includes only the external forces relevant to the chosen system', 'is_correct' => true],
                            ['choice_text' => 'It must show every microscopic molecular interaction', 'is_correct' => false],
                            ['choice_text' => 'It contains only forces with positive signs', 'is_correct' => false],
                            ['choice_text' => 'It ignores the system boundary', 'is_correct' => false],
                        ],
                        'explanation' => 'A free-body diagram is an idealized representation of the relevant external forces.',
                    ],

                    [
                        'question' => 'If the net force on a particle is zero at every instant, which statement must hold?',
                        'choices' => [
                            ['choice_text' => 'Its velocity is constant in an inertial frame', 'is_correct' => true],
                            ['choice_text' => 'Its position is constant', 'is_correct' => false],
                            ['choice_text' => 'Its acceleration is increasing', 'is_correct' => false],
                            ['choice_text' => 'Its kinetic energy is always zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Zero net force gives zero acceleration, so velocity remains constant.',
                    ],

                    [
                        'question' => 'Why must Newton’s third-law force pair act on different bodies?',
                        'choices' => [
                            ['choice_text' => 'Each force in the pair is the response of one body to the interaction with the other', 'is_correct' => true],
                            ['choice_text' => 'Third-law forces are never simultaneous', 'is_correct' => false],
                            ['choice_text' => 'The forces always act at the same point on one object', 'is_correct' => false],
                            ['choice_text' => 'Newton’s third law applies only to isolated objects', 'is_correct' => false],
                        ],
                        'explanation' => 'Action and reaction are equal and opposite but act on different bodies.',
                    ],

                    [
                        'question' => 'Why is vector decomposition especially important in multidimensional dynamics?',
                        'choices' => [
                            ['choice_text' => 'Different force components can determine independent components of acceleration', 'is_correct' => true],
                            ['choice_text' => 'It changes the physical direction of the forces', 'is_correct' => false],
                            ['choice_text' => 'It turns vectors into constants', 'is_correct' => false],
                            ['choice_text' => 'It eliminates the need for coordinate systems', 'is_correct' => false],
                        ],
                        'explanation' => 'Resolving vectors along convenient axes allows Newton’s law to be solved component by component.',
                    ],

                    [
                        'question' => 'Why can the acceleration of a particle change direction even when the magnitude of the net force remains constant?',
                        'choices' => [
                            ['choice_text' => The direction of the net force can change while its magnitude stays constant', 'is_correct' => true],
                            ['choice_text' => Mass must change', 'is_correct' => false],
                            ['choice_text' => The particle must be at rest', 'is_correct' => false],
                            ['choice_text' => Newton’s second law stops applying', 'is_correct' => false],
                        ],
                        'explanation' => 'Acceleration follows the direction of the net force, so changing force direction changes acceleration direction.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 2 — Advanced Friction
            // ============================================================

            [
                'title' => 'Advanced Friction and Contact Forces',
                'description' => 'Advanced treatment of static and kinetic friction, limiting equilibrium and contact interactions.',
                'questions' => [

                    [
                        'question' => 'In the simple Coulomb model, what distinguishes static friction from kinetic friction mathematically?',
                        'choices' => [
                            ['choice_text' => 'Static friction satisfies fs ≤ μsN, while kinetic friction is modeled as fk = μkN during sliding', 'is_correct' => true],
                            ['choice_text' => 'Static friction is always equal to zero', 'is_correct' => false],
                            ['choice_text' => 'Kinetic friction can act only before motion begins', 'is_correct' => false],
                            ['choice_text' => 'Both are always exactly equal to μN', 'is_correct' => false],
                        ],
                        'explanation' => 'Static friction adjusts up to a maximum, whereas kinetic friction is modeled as approximately constant in the basic Coulomb model.',
                    ],

                    [
                        'question' => 'A block is on the verge of sliding on an incline of angle θ. Which relation is satisfied in the basic static-friction model?',
                        'choices' => [
                            ['choice_text' => μs = tanθ', 'is_correct' => true],
                            ['choice_text' => 'μs = sinθ', 'is_correct' => false],
                            ['choice_text' => 'μs = cosθ', 'is_correct' => false],
                            ['choice_text' => 'μs = 1/tanθ', 'is_correct' => false],
                        ],
                        'explanation' => 'At impending motion, mg sinθ = μs mg cosθ, giving μs = tanθ.',
                    ],

                    [
                        'question' => 'Why can static friction be zero even when the surfaces are in contact?',
                        'choices' => [
                            ['choice_text' => No tangential force is required to prevent relative motion', 'is_correct' => true],
                            ['choice_text' => 'Static friction always acts at its maximum value', 'is_correct' => false],
                            ['choice_text' => 'Contact surfaces cannot produce friction without motion', 'is_correct' => false],
                            ['choice_text' => 'Normal force is necessarily zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Static friction is a responsive contact force and can take any value needed up to its limiting value.',
                    ],

                    [
                        'question' => 'A block slides down an incline with kinetic friction. Which expression gives the acceleration down the incline?',
                        'choices' => [
                            ['choice_text' => 'a = g(sinθ - μk cosθ)', 'is_correct' => true],
                            ['choice_text' => 'a = g(sinθ + μk cosθ)', 'is_correct' => false],
                            ['choice_text' => 'a = g(cosθ - μk sinθ)', 'is_correct' => false],
                            ['choice_text' => 'a = gμk sinθ', 'is_correct' => false],
                        ],
                        'explanation' => 'Along the incline, mg sinθ drives the motion while μkmg cosθ opposes it.',
                    ],

                    [
                        'question' => 'Why can increasing the normal force increase friction without changing the coefficient of friction?',
                        'choices' => [
                            ['choice_text' => The friction model makes friction proportional to the normal force', 'is_correct' => true],
                            ['choice_text' => 'The coefficient automatically increases with N', 'is_correct' => false],
                            ['choice_text' => 'Friction is independent of contact force', 'is_correct' => false],
                            ['choice_text' => 'The mass of the surface disappears', 'is_correct' => false],
                        ],
                        'explanation' => 'In the Coulomb model, fk = μkN and fs,max = μsN.',
                    ],

                    [
                        'question' => 'Why can a horizontal applied force change the normal force on a block even if it has no vertical component?',
                        'choices' => [
                            ['choice_text' => In the basic horizontal-pull model it does not, but an applied force with a vertical component would change N', 'is_correct' => true],
                            ['choice_text' => 'Any horizontal force automatically doubles N', 'is_correct' => false],
                            ['choice_text' => 'Normal force is independent of all applied forces', 'is_correct' => false],
                            ['choice_text' => 'Normal force exists only on inclined planes', 'is_correct' => false],
                        ],
                        'explanation' => 'A purely horizontal force does not alter N in the simplest horizontal-surface model; vertical components can.',
                    ],

                    [
                        'question' => 'A block is pulled by a force F at an upward angle α above the horizontal. Why can increasing α reduce friction in the basic model?',
                        'choices' => [
                            ['choice_text' => The upward component reduces the normal force and therefore reduces μkN', 'is_correct' => true],
                            ['choice_text' => The coefficient of friction becomes negative', 'is_correct' => false],
                            ['choice_text' => The block loses mass', 'is_correct' => false],
                            ['choice_text' => Friction becomes parallel to gravity', 'is_correct' => false],
                        ],
                        'explanation' => 'The vertical component F sinα reduces N from mg to mg - F sinα when contact remains.',
                    ],

                    [
                        'question' => 'Why can friction cause an object to accelerate in the same direction as its motion?',
                        'choices' => [
                            ['choice_text' => Friction opposes relative slipping at the contact, which need not oppose the object’s center-of-mass motion', 'is_correct' => true],
                            ['choice_text' => 'Friction always accelerates every object forward', 'is_correct' => false],
                            ['choice_text' => 'Friction has no directional dependence', 'is_correct' => false],
                            ['choice_text' => 'Friction is not a contact force', 'is_correct' => false],
                        ],
                        'explanation' => 'For rolling or more complex contact situations, friction can point in the same direction as center-of-mass motion while opposing relative slip.',
                    ],

                    [
                        'question' => 'Why is the coefficient of friction dimensionless?',
                        'choices' => [
                            ['choice_text' => 'It is a ratio of two forces with the same units', 'is_correct' => true],
                            ['choice_text' => 'It is measured in newtons', 'is_correct' => false],
                            ['choice_text' => 'It represents an acceleration', 'is_correct' => false],
                            ['choice_text' => 'It is a length ratio only', 'is_correct' => false],
                        ],
                        'explanation' => 'Since μ = f/N, the units cancel.',
                    ],

                    [
                        'question' => 'Why is the simple Coulomb friction model only an approximation of real contact behavior?',
                        'choices' => [
                            ['choice_text' => Real friction can depend on speed, temperature, surface condition, lubrication and microscopic contact physics', 'is_correct' => true],
                            ['choice_text' => 'Friction is exactly described by one universal constant in every situation', 'is_correct' => false],
                            ['choice_text' => 'Real surfaces have no microscopic structure', 'is_correct' => false],
                            ['choice_text' => 'The coefficient of friction is always identical for every material pair', 'is_correct' => false],
                        ],
                        'explanation' => 'The Coulomb model is useful but simplified; real tribological behavior can be much more complex.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 3 — Rotational Dynamics
            // ============================================================

            [
                'title' => 'Rotational Dynamics',
                'description' => 'Introduction to torque, angular acceleration, moment of inertia and rotational equilibrium.',
                'questions' => [

                    [
                        'question' => 'What quantity plays the rotational analogue of force?',
                        'choices' => [
                            ['choice_text' => Torque', 'is_correct' => true],
                            ['choice_text' => 'Momentum only', 'is_correct' => false],
                            ['choice_text' => 'Angular displacement', 'is_correct' => false],
                            ['choice_text' => 'Angular velocity', 'is_correct' => false],
                        ],
                        'explanation' => 'Torque determines rotational acceleration in analogy with force determining translational acceleration.',
                    ],

                    [
                        'question' => 'What is the magnitude of torque produced by a force F applied at lever arm r with angle θ between r and F?',
                        'choices' => [
                            ['choice_text' => 'τ = rF sinθ', 'is_correct' => true],
                            ['choice_text' => 'τ = rF cosθ', 'is_correct' => false],
                            ['choice_text' => 'τ = F/r', 'is_correct' => false],
                            ['choice_text' => 'τ = r/F', 'is_correct' => false],
                        ],
                        'explanation' => 'The torque magnitude is |τ| = rF sinθ.',
                    ],

                    [
                        'question' => 'When does a force produce zero torque about a given point?',
                        'choices' => [
                            ['choice_text' => 'When its line of action passes through the reference point', 'is_correct' => true],
                            ['choice_text' => 'Only when its magnitude is infinite', 'is_correct' => false],
                            ['choice_text' => 'Whenever the force is perpendicular to the radius', 'is_correct' => false],
                            ['choice_text' => 'Whenever the object is rotating', 'is_correct' => false],
                        ],
                        'explanation' => 'The perpendicular lever arm is zero when the force line of action passes through the reference point.',
                    ],

                    [
                        'question' => 'Which equation represents rotational dynamics about a fixed axis?',
                        'choices' => [
                            ['choice_text' => 'Στ = Iα', 'is_correct' => true],
                            ['choice_text' => 'Στ = Iω', 'is_correct' => false],
                            ['choice_text' => 'Στ = I/α', 'is_correct' => false],
                            ['choice_text' => 'Στ = mα', 'is_correct' => false],
                        ],
                        'explanation' => 'For rotation about a fixed principal axis, the net torque equals moment of inertia times angular acceleration.',
                    ],

                    [
                        'question' => 'What does the moment of inertia measure physically?',
                        'choices' => [
                            ['choice_text' => The resistance of a body to angular acceleration about a specified axis', 'is_correct' => true],
                            ['choice_text' => 'Its total gravitational force', 'is_correct' => false],
                            ['choice_text' => 'Its linear velocity', 'is_correct' => false],
                            ['choice_text' => 'Its temperature', 'is_correct' => false],
                        ],
                        'explanation' => 'Moment of inertia depends on mass distribution relative to the rotation axis.',
                    ],

                    [
                        'question' => 'Why does moving mass farther from the rotation axis generally increase the moment of inertia?',
                        'choices' => [
                            ['choice_text' => 'The contribution to I scales with the square of the distance from the axis', 'is_correct' => true],
                            ['choice_text' => 'Distance has no effect on I', 'is_correct' => false],
                            ['choice_text' => 'Only the total mass matters', 'is_correct' => false],
                            ['choice_text' => 'Angular velocity automatically increases I', 'is_correct' => false],
                        ],
                        'explanation' => 'For point masses, I = Σm_ir_i².',
                    ],

                    [
                        'question' => 'What is the rotational kinetic energy of a rigid body rotating about a fixed axis?',
                        'choices' => [
                            ['choice_text' => 'K_rot = 1/2 Iω²', 'is_correct' => true],
                            ['choice_text' => 'K_rot = Iω', 'is_correct' => false],
                            ['choice_text' => 'K_rot = Iω²', 'is_correct' => false],
                            ['choice_text' => 'K_rot = 1/2 I/ω²', 'is_correct' => false],
                        ],
                        'explanation' => 'The rotational kinetic energy is K = 1/2 Iω².',
                    ],

                    [
                        'question' => 'What is the angular momentum of a rigid body rotating about a principal fixed axis?',
                        'choices' => [
                            ['choice_text' => 'L = Iω', 'is_correct' => true],
                            ['choice_text' => 'L = I/ω', 'is_correct' => false],
                            ['choice_text' => 'L = Iω²', 'is_correct' => false],
                            ['choice_text' => 'L = mω/r', 'is_correct' => false],
                        ],
                        'explanation' => 'For rotation about a principal fixed axis, angular momentum is L = Iω.',
                    ],

                    [
                        'question' => 'Why can the same force produce different angular accelerations depending on where it is applied?',
                        'choices' => [
                            ['choice_text' => The torque depends on the perpendicular lever arm', 'is_correct' => true],
                            ['choice_text' => 'Mass always changes with position', 'is_correct' => false],
                            ['choice_text' => 'Angular acceleration is independent of torque', 'is_correct' => false],
                            ['choice_text' => 'The force changes its own magnitude automatically', 'is_correct' => false],
                        ],
                        'explanation' => 'Torque is τ = rF sinθ, so the point and angle of application matter.',
                    ],

                    [
                        'question' => 'For static rotational equilibrium about a chosen point, what condition must hold?',
                        'choices' => [
                            ['choice_text' => 'The net torque about that point must be zero', 'is_correct' => true],
                            ['choice_text' => 'The total mass must be zero', 'is_correct' => false],
                            ['choice_text' => 'The angular velocity must be infinite', 'is_correct' => false],
                            ['choice_text' => 'All individual torques must be zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Rotational equilibrium requires Στ = 0 about the chosen axis or point.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 4 — Energy Methods in Dynamics
            // ============================================================

            [
                'title' => 'Energy Methods in Dynamics',
                'description' => 'Advanced use of kinetic energy, potential energy, conservative forces and energy conservation.',
                'questions' => [

                    [
                        'question' => 'What is the work-energy theorem for a particle?',
                        'choices' => [
                            ['choice_text' => 'The net work done on the particle equals the change in kinetic energy', 'is_correct' => true],
                            ['choice_text' => 'The net work always equals the potential energy', 'is_correct' => false],
                            ['choice_text' => 'Work is always zero for moving particles', 'is_correct' => false],
                            ['choice_text' => 'Kinetic energy equals momentum', 'is_correct' => false],
                        ],
                        'explanation' => 'W_net = ΔK.',
                    ],

                    [
                        'question' => 'Which force is conservative in the usual classical mechanics sense?',
                        'choices' => [
                            ['choice_text' => 'Gravity', 'is_correct' => true],
                            ['choice_text' => 'Kinetic friction', 'is_correct' => false],
                            ['choice_text' => 'Air drag', 'is_correct' => false],
                            ['choice_text' => 'Viscous resistance', 'is_correct' => false],
                        ],
                        'explanation' => 'Gravity is conservative, so its work depends only on initial and final positions.',
                    ],

                    [
                        'question' => 'What property distinguishes a conservative force?',
                        'choices' => [
                            ['choice_text' => Its work between two points is independent of the path', 'is_correct' => true],
                            ['choice_text' => 'It always increases kinetic energy', 'is_correct' => false],
                            ['choice_text' => 'It always opposes motion', 'is_correct' => false],
                            ['choice_text' => 'It must be electromagnetic', 'is_correct' => false],
                        ],
                        'explanation' => 'Path independence of work is a defining property of conservative forces.',
                    ],

                    [
                        'question' => 'What is the mechanical energy of a system in a simple conservative mechanical problem?',
                        'choices' => [
                            ['choice_text' => 'E_mech = K + U', 'is_correct' => true],
                            ['choice_text' => 'E_mech = K - U²', 'is_correct' => false],
                            ['choice_text' => 'E_mech = K/U', 'is_correct' => false],
                            ['choice_text' => 'E_mech = K + F', 'is_correct' => false],
                        ],
                        'explanation' => 'Mechanical energy is the sum of kinetic and potential energies.',
                    ],

                    [
                        'question' => 'When only conservative forces do work, mechanical energy is...',
                        'choices' => [
                            ['choice_text' => 'Conserved', 'is_correct' => true],
                            ['choice_text' => 'Always increasing', 'is_correct' => false],
                            ['choice_text' => 'Always decreasing', 'is_correct' => false],
                            ['choice_text' => 'Necessarily zero', 'is_correct' => false],
                        ],
                        'explanation' => 'For conservative forces only, K + U remains constant.',
                    ],

                    [
                        'question' => 'A 2 kg object falls through a vertical height of 5 m without air resistance. What is the decrease in gravitational potential energy using g = 9,8 m/s²?',
                        'choices' => [
                            ['choice_text' => '98 J', 'is_correct' => true],
                            ['choice_text' => '49 J', 'is_correct' => false],
                            ['choice_text' => '19,6 J', 'is_correct' => false],
                            ['choice_text' => '196 J', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔU = -mgh = -2 × 9,8 × 5 = -98 J, so the decrease in U is 98 J.',
                    ],

                    [
                        'question' => 'Why can energy methods sometimes solve a dynamics problem without finding acceleration explicitly?',
                        'choices' => [
                            ['choice_text' => The work-energy relation can connect initial and final speeds directly', 'is_correct' => true],
                            ['choice_text' => Acceleration is never physically relevant', 'is_correct' => false],
                            ['choice_text' => Forces disappear when energy is used', 'is_correct' => false],
                            ['choice_text' => Energy equations contain no physical assumptions', 'is_correct' => false],
                        ],
                        'explanation' => 'Energy methods can bypass the time-dependent equations when only initial and final states are needed.',
                    ],

                    [
                        'question' => 'Why does kinetic friction make mechanical energy decrease in a simple mechanical system?',
                        'choices' => [
                            ['choice_text' => Friction performs negative work and transfers mechanical energy to internal energy', 'is_correct' => true],
                            ['choice_text' => 'Friction destroys energy', 'is_correct' => false],
                            ['choice_text' => 'Friction creates negative mass', 'is_correct' => false],
                            ['choice_text' => 'Friction is conservative', 'is_correct' => false],
                        ],
                        'explanation' => 'Total energy is conserved, but friction transfers mechanical energy into thermal and other internal forms.',
                    ],

                    [
                        'question' => 'What is the work done by a constant force F over displacement d when the angle between them is θ?',
                        'choices' => [
                            ['choice_text' => 'W = Fd cosθ', 'is_correct' => true],
                            ['choice_text' => 'W = Fd sinθ', 'is_correct' => false],
                            ['choice_text' => 'W = F/d', 'is_correct' => false],
                            ['choice_text' => 'W = F + d + θ', 'is_correct' => false],
                        ],
                        'explanation' => 'The scalar product gives W = F·d = Fd cosθ.',
                    ],

                    [
                        'question' => 'Why is the work done by a purely centripetal force zero during uniform circular motion?',
                        'choices' => [
                            ['choice_text' => The force is perpendicular to the instantaneous displacement', 'is_correct' => true],
                            ['choice_text' => 'The force is always zero', 'is_correct' => false],
                            ['choice_text' => 'The object has no velocity', 'is_correct' => false],
                            ['choice_text' => 'The radius is zero', 'is_correct' => false],
                        ],
                        'explanation' => 'The centripetal force is radial while instantaneous displacement is tangential, so their dot product is zero.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 5 — Momentum, Impulse and Collisions
            // ============================================================

            [
                'title' => 'Momentum, Impulse and Collisions',
                'description' => 'Advanced analysis of linear momentum, impulse and collision models.',
                'questions' => [

                    [
                        'question' => 'What condition guarantees conservation of total linear momentum for a system?',
                        'choices' => [
                            ['choice_text' => 'The net external impulse on the system is zero', 'is_correct' => true],
                            ['choice_text' => 'All internal forces are zero', 'is_correct' => false],
                            ['choice_text' => 'Kinetic energy is conserved', 'is_correct' => false],
                            ['choice_text' => 'Every object has the same mass', 'is_correct' => false],
                        ],
                        'explanation' => 'The system momentum changes according to the net external impulse.',
                    ],

                    [
                        'question' => 'Why is momentum conservation especially useful during a very short collision?',
                        'choices' => [
                            ['choice_text' => External impulse can often be negligible while internal forces are large', 'is_correct' => true],
                            ['choice_text' => 'Internal forces vanish during impact', 'is_correct' => false],
                            ['choice_text' => 'Kinetic energy is always conserved', 'is_correct' => false],
                            ['choice_text' => 'The masses become zero temporarily', 'is_correct' => false],
                        ],
                        'explanation' => 'Short collision times can make external impulses small compared with internal collision impulses.',
                    ],

                    [
                        'question' => 'In a perfectly elastic collision, which quantities are conserved for an isolated system?',
                        'choices' => [
                            ['choice_text' => 'Both linear momentum and kinetic energy', 'is_correct' => true],
                            ['choice_text' => 'Only kinetic energy', 'is_correct' => false],
                            ['choice_text' => 'Only momentum', 'is_correct' => false],
                            ['choice_text' => 'Neither momentum nor kinetic energy', 'is_correct' => false],
                        ],
                        'explanation' => 'An ideal elastic collision conserves both total momentum and total kinetic energy.',
                    ],

                    [
                        'question' => 'In a perfectly inelastic collision, what happens to the bodies after impact?',
                        'choices' => [
                            ['choice_text' => 'They stick together and move with a common velocity', 'is_correct' => true],
                            ['choice_text' => 'They always rebound with equal speeds', 'is_correct' => false],
                            ['choice_text' => 'They both stop regardless of initial momentum', 'is_correct' => false],
                            ['choice_text' => 'Kinetic energy is necessarily conserved', 'is_correct' => false],
                        ],
                        'explanation' => 'Perfectly inelastic collisions maximize the loss of kinetic energy subject to momentum conservation.',
                    ],

                    [
                        'question' => 'A 2 kg object moving at 6 m/s collides and sticks to a 4 kg object initially at rest. What is the final velocity?',
                        'choices' => [
                            ['choice_text' => '2 m/s', 'is_correct' => true],
                            ['choice_text' => '3 m/s', 'is_correct' => false],
                            ['choice_text' => '6 m/s', 'is_correct' => false],
                            ['choice_text' => '1 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Momentum conservation gives 2×6 = (2+4)v, so v = 2 m/s.',
                    ],

                    [
                        'question' => 'Why is kinetic energy generally not conserved in a perfectly inelastic collision?',
                        'choices' => [
                            ['choice_text' => Some kinetic energy is converted into internal energy, deformation, sound and other forms', 'is_correct' => true],
                            ['choice_text' => 'Momentum conservation fails', 'is_correct' => false],
                            ['choice_text' => 'Energy conservation is violated', 'is_correct' => false],
                            ['choice_text' => 'Mass disappears', 'is_correct' => false],
                        ],
                        'explanation' => 'Total energy remains conserved, but mechanical kinetic energy can be transformed into other forms.',
                    ],

                    [
                        'question' => 'What does the impulse-momentum theorem state?',
                        'choices' => [
                            ['choice_text' => 'Impulse equals the change in linear momentum', 'is_correct' => true],
                            ['choice_text' => 'Impulse equals kinetic energy', 'is_correct' => false],
                            ['choice_text' => 'Impulse equals force divided by time', 'is_correct' => false],
                            ['choice_text' => 'Impulse is always zero in a collision', 'is_correct' => false],
                        ],
                        'explanation' => 'The time integral of force equals the change in momentum.',
                    ],

                    [
                        'question' => 'Why does increasing the collision time usually reduce the average impact force for the same momentum change?',
                        'choices' => [
                            ['choice_text' => 'Because F_avg = Δp/Δt', 'is_correct' => true],
                            ['choice_text' => 'Because momentum decreases with time automatically', 'is_correct' => false],
                            ['choice_text' => 'Because mass becomes smaller', 'is_correct' => false],
                            ['choice_text' => 'Because the impulse becomes zero', 'is_correct' => false],
                        ],
                        'explanation' => 'A fixed change in momentum spread over a longer time gives a smaller average force.',
                    ],

                    [
                        'question' => 'Why is center-of-mass motion often simpler than the motion of individual particles in a many-body system?',
                        'choices' => [
                            ['choice_text' => Internal forces cancel in the total momentum equation, leaving external forces to govern the center of mass', 'is_correct' => true],
                            ['choice_text' => 'Internal forces never exist', 'is_correct' => false],
                            ['choice_text' => 'All particles have identical velocities', 'is_correct' => false],
                            ['choice_text' => 'The center of mass has zero mass', 'is_correct' => false],
                        ],
                        'explanation' => 'For a closed system, the center of mass responds to the net external force.',
                    ],

                    [
                        'question' => 'For an isolated system initially at rest, can internal forces create a net momentum of the system?',
                        'choices' => [
                            ['choice_text' => 'No, internal forces cannot change the total momentum of the isolated system', 'is_correct' => true],
                            ['choice_text' => 'Yes, always', 'is_correct' => false],
                            ['choice_text' => 'Only in elastic collisions', 'is_correct' => false],
                            ['choice_text' => 'Only if masses are equal', 'is_correct' => false],
                        ],
                        'explanation' => 'Internal forces occur in equal and opposite pairs, so they cannot alter total system momentum.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 6 — Advanced Circular and Orbital Dynamics
            // ============================================================

            [
                'title' => 'Circular and Orbital Dynamics',
                'description' => 'Advanced treatment of circular motion, gravitational orbits and centripetal dynamics.',
                'questions' => [

                    [
                        'question' => 'A particle of mass m moves in a circle of radius r with angular speed ω. What centripetal force is required?',
                        'choices' => [
                            ['choice_text' => 'F = mrω²', 'is_correct' => true],
                            ['choice_text' => 'F = mω/r', 'is_correct' => false],
                            ['choice_text' => 'F = mr/ω²', 'is_correct' => false],
                            ['choice_text' => 'F = mω²/r', 'is_correct' => false],
                        ],
                        'explanation' => 'Since a_c = rω², the required inward force is F = mrω².',
                    ],

                    [
                        'question' => 'For a circular orbit under gravity alone, what provides the centripetal force?',
                        'choices' => [
                            ['choice_text' => The gravitational force', 'is_correct' => true],
                            ['choice_text' => A separate centripetal force', 'is_correct' => false],
                            ['choice_text' => Air resistance', 'is_correct' => false],
                            ['choice_text' => The orbital object’s own weight acting outward', 'is_correct' => false],
                        ],
                        'explanation' => 'Gravitational attraction supplies the inward force needed for orbital motion.',
                    ],

                    [
                        'question' => 'For a circular orbit around a central mass M, what is the orbital speed at radius r?',
                        'choices' => [
                            ['choice_text' => 'v = √(GM/r)', 'is_correct' => true],
                            ['choice_text' => 'v = √(Gr/M)', 'is_correct' => false],
                            ['choice_text' => 'v = GM/r²', 'is_correct' => false],
                            ['choice_text' => 'v = √(r/GM)', 'is_correct' => false],
                        ],
                        'explanation' => 'Equating GMm/r² with mv²/r gives v = √(GM/r).',
                    ],

                    [
                        'question' => 'What happens to the speed of a circular gravitational orbit when the orbital radius increases?',
                        'choices' => [
                            ['choice_text' => 'It decreases as 1/√r', 'is_correct' => true],
                            ['choice_text' => 'It increases as √r', 'is_correct' => false],
                            ['choice_text' => 'It remains constant', 'is_correct' => false],
                            ['choice_text' => 'It increases as r²', 'is_correct' => false],
                        ],
                        'explanation' => 'The circular orbital speed satisfies v = √(GM/r).',
                    ],

                    [
                        'question' => 'What is the period of a circular orbit around mass M at radius r?',
                        'choices' => [
                            ['choice_text' => 'T = 2π√(r³/GM)', 'is_correct' => true],
                            ['choice_text' => 'T = 2π√(GM/r³)', 'is_correct' => false],
                            ['choice_text' => 'T = √(GM/r)', 'is_correct' => false],
                            ['choice_text' => 'T = 2πrGM', 'is_correct' => false],
                        ],
                        'explanation' => 'Using v = 2πr/T and v = √(GM/r) gives T = 2π√(r³/GM).',
                    ],

                    [
                        'question' => 'Why does a satellite in circular orbit continuously accelerate even when its speed is constant?',
                        'choices' => [
                            ['choice_text' => Its velocity direction continuously changes', 'is_correct' => true],
                            ['choice_text' => 'Its mass changes continuously', 'is_correct' => false],
                            ['choice_text' => 'Its speed increases continuously', 'is_correct' => false],
                            ['choice_text' => 'Gravity acts only tangentially', 'is_correct' => false],
                        ],
                        'explanation' => 'Circular motion has inward centripetal acceleration due to continual change in velocity direction.',
                    ],

                    [
                        'question' => 'Why is the work done by gravity over a complete circular orbit zero?',
                        'choices' => [
                            ['choice_text' => Gravity is conservative and the initial and final positions are identical', 'is_correct' => true],
                            ['choice_text' => 'Gravity is always zero in orbit', 'is_correct' => false],
                            ['choice_text' => 'The satellite has no velocity', 'is_correct' => false],
                            ['choice_text' => 'Gravity is non-conservative', 'is_correct' => false],
                        ],
                        'explanation' => 'For a conservative gravitational field, the net work around a closed path is zero.',
                    ],

                    [
                        'question' => 'What is the escape speed from a spherical body of mass M and radius R, neglecting rotation and atmosphere?',
                        'choices' => [
                            ['choice_text' => 'vesc = √(2GM/R)', 'is_correct' => true],
                            ['choice_text' => 'vesc = √(GM/R)', 'is_correct' => false],
                            ['choice_text' => 'vesc = 2GM/R', 'is_correct' => false],
                            ['choice_text' => 'vesc = √(R/2GM)', 'is_correct' => false],
                        ],
                        'explanation' => 'Setting the total mechanical energy at infinity equal to zero gives vesc = √(2GM/R).',
                    ],

                    [
                        'question' => 'Why does an orbiting satellite not continuously fall directly into the central body?',
                        'choices' => [
                            ['choice_text' => Its tangential velocity causes it to continuously fall around the curved trajectory rather than straight toward the center', 'is_correct' => true],
                            ['choice_text' => 'Gravity does not act on satellites', 'is_correct' => false],
                            ['choice_text' => 'There is a permanent upward force canceling gravity', 'is_correct' => false],
                            ['choice_text' => 'The satellite has no acceleration', 'is_correct' => false],
                        ],
                        'explanation' => 'The combination of tangential motion and gravitational acceleration produces orbital motion.',
                    ],

                    [
                        'question' => 'Why is the concept of a fictitious centrifugal force sometimes introduced in rotating reference frames?',
                        'choices' => [
                            ['choice_text' => It allows Newton-like equations to be written in a non-inertial rotating frame', 'is_correct' => true],
                            ['choice_text' => 'It is a new fundamental interaction', 'is_correct' => false],
                            ['choice_text' => 'It exists only in inertial frames', 'is_correct' => false],
                            ['choice_text' => 'It replaces gravity everywhere', 'is_correct' => false],
                        ],
                        'explanation' => 'Rotating frames require inertial or fictitious forces to account for the frame’s acceleration.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 7 — Non-Inertial Reference Frames
            // ============================================================

            [
                'title' => 'Non-Inertial Reference Frames',
                'description' => 'Advanced introduction to accelerating and rotating reference frames and fictitious forces.',
                'questions' => [

                    [
                        'question' => 'What is a non-inertial reference frame?',
                        'choices' => [
                            ['choice_text' => A reference frame that accelerates or rotates relative to an inertial frame', 'is_correct' => true],
                            ['choice_text' => 'A frame in which gravity is always zero', 'is_correct' => false],
                            ['choice_text' => 'Any frame attached to a stationary object', 'is_correct' => false],
                            ['choice_text' => 'A frame with no coordinates', 'is_correct' => false],
                        ],
                        'explanation' => 'A non-inertial frame has accelerated motion relative to an inertial frame.',
                    ],

                    [
                        'question' => 'Why are fictitious forces introduced in an accelerating reference frame?',
                        'choices' => [
                            ['choice_text' => 'They allow Newton’s second law to be written in the usual form within the accelerating frame', 'is_correct' => true],
                            ['choice_text' => 'They are additional fundamental interactions', 'is_correct' => false],
                            ['choice_text' => 'They eliminate all real forces', 'is_correct' => false],
                            ['choice_text' => 'They exist only in vacuum', 'is_correct' => false],
                        ],
                        'explanation' => 'Fictitious forces account for the acceleration of the reference frame itself.',
                    ],

                    [
                        'question' => 'A passenger feels pushed backward when a car accelerates forward. In the car’s accelerating frame, which fictitious force explains this sensation?',
                        'choices' => [
                            ['choice_text' => 'An inertial force directed opposite to the frame acceleration', 'is_correct' => true],
                            ['choice_text' => 'A gravitational force directed forward', 'is_correct' => false],
                            ['choice_text' => 'A magnetic force', 'is_correct' => false],
                            ['choice_text' => 'A friction force from the ceiling', 'is_correct' => false],
                        ],
                        'explanation' => 'In the accelerating car frame, an inertial force appears opposite the frame acceleration.',
                    ],

                    [
                        'question' => 'What is the Coriolis force associated with a rotating reference frame?',
                        'choices' => [
                            ['choice_text' => 'A velocity-dependent fictitious force proportional to Ω × v′', 'is_correct' => true],
                            ['choice_text' => 'A real gravitational force', 'is_correct' => false],
                            ['choice_text' => 'A force independent of motion', 'is_correct' => false],
                            ['choice_text' => 'A force proportional only to temperature', 'is_correct' => false],
                        ],
                        'explanation' => 'The Coriolis term is proportional to the cross product of the frame’s angular velocity and the particle’s relative velocity.',
                    ],

                    [
                        'question' => 'Why does the Coriolis force vanish for a particle at rest relative to the rotating frame?',
                        'choices' => [
                            ['choice_text' => 'Its relative velocity is zero', 'is_correct' => true],
                            ['choice_text' => 'Angular velocity is always zero', 'is_correct' => false],
                            ['choice_text' => 'Gravity cancels it automatically', 'is_correct' => false],
                            ['choice_text' => 'The frame becomes inertial', 'is_correct' => false],
                        ],
                        'explanation' => 'The Coriolis force depends on the particle’s velocity relative to the rotating frame.',
                    ],

                    [
                        'question' => 'What is the centrifugal force in a frame rotating with angular velocity Ω?',
                        'choices' => [
                            ['choice_text' => A fictitious force directed outward from the rotation axis in the rotating frame', 'is_correct' => true],
                            ['choice_text' => 'A force directed toward the rotation axis', 'is_correct' => false],
                            ['choice_text' => 'A magnetic force', 'is_correct' => false],
                            ['choice_text' => 'A force that exists only when the particle is accelerating radially inward in an inertial frame', 'is_correct' => false],
                        ],
                        'explanation' => 'The centrifugal force appears in rotating coordinates and points away from the axis.',
                    ],

                    [
                        'question' => 'Why can Earth’s rotation influence the trajectory of a projectile over long distances?',
                        'choices' => [
                            ['choice_text' => 'The Earth-fixed frame is rotating, producing Coriolis effects', 'is_correct' => true],
                            ['choice_text' => 'Gravity becomes zero over long distances', 'is_correct' => false],
                            ['choice_text' => 'Air becomes perfectly stationary in space', 'is_correct' => false],
                            ['choice_text' => 'Mass changes with latitude', 'is_correct' => false],
                        ],
                        'explanation' => 'The rotating Earth provides a non-inertial reference frame in which Coriolis effects appear.',
                    ],

                    [
                        'question' => 'Why is a pendulum mounted on Earth able to reveal Earth’s rotation through its precession?',
                        'choices' => [
                            ['choice_text' => The pendulum’s plane of oscillation interacts with the rotating Earth-fixed frame', 'is_correct' => true],
                            ['choice_text' => 'The pendulum creates a gravitational field that rotates Earth', 'is_correct' => false],
                            ['choice_text' => 'The mass of the pendulum changes with time', 'is_correct' => false],
                            ['choice_text' => 'The pendulum becomes magnetic', 'is_correct' => false],
                        ],
                        'explanation' => 'Foucault’s pendulum demonstrates Earth’s rotation through the apparent precession of the oscillation plane.',
                    ],

                    [
                        'question' => 'Why is it important to distinguish real forces from fictitious forces?',
                        'choices' => [
                            ['choice_text' => 'Real forces arise from physical interactions, while fictitious forces arise from the chosen non-inertial coordinates', 'is_correct' => true],
                            ['choice_text' => 'Both are always fundamental interactions', 'is_correct' => false],
                            ['choice_text' => 'Fictitious forces exist in every inertial frame', 'is_correct' => false],
                            ['choice_text' => 'Real forces depend only on coordinate choice', 'is_correct' => false],
                        ],
                        'explanation' => 'The distinction clarifies which effects are physical interactions and which originate from coordinate acceleration.',
                    ],

                    [
                        'question' => 'Why can a rotating frame still be useful despite requiring fictitious forces?',
                        'choices' => [
                            ['choice_text' => 'It may simplify the description of systems naturally tied to the rotating object', 'is_correct' => true],
                            ['choice_text' => 'It always eliminates all equations of motion', 'is_correct' => false],
                            ['choice_text' => 'It makes the system physically inertial', 'is_correct' => false],
                            ['choice_text' => 'It removes the need to identify forces', 'is_correct' => false],
                        ],
                        'explanation' => 'A suitable non-inertial frame can make the geometry or constraints of a problem simpler.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 8 — Advanced Integrated Dynamics
            // ============================================================

            [
                'title' => 'Integrated Advanced Dynamics',
                'description' => 'Comprehensive problems combining forces, rotation, energy, momentum and gravitation.',
                'questions' => [

                    [
                        'question' => 'A 5 kg block is pulled horizontally by 40 N while kinetic friction is 15 N. What is its acceleration?',
                        'choices' => [
                            ['choice_text' => '5 m/s²', 'is_correct' => true],
                            ['choice_text' => '8 m/s²', 'is_correct' => false],
                            ['choice_text' => '11 m/s²', 'is_correct' => false],
                            ['choice_text' => '3 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'F_net = 40 - 15 = 25 N, so a = 25/5 = 5 m/s².',
                    ],

                    [
                        'question' => 'A solid disk and a point mass have the same mass and radius. Which generally has the larger moment of inertia about the central axis?',
                        'choices' => [
                            ['choice_text' => 'The point mass', 'is_correct' => true],
                            ['choice_text' => 'The disk', 'is_correct' => false],
                            ['choice_text' => 'They are always identical', 'is_correct' => false],
                            ['choice_text' => 'Neither has rotational inertia', 'is_correct' => false],
                        ],
                        'explanation' => 'A point mass at radius R has I = MR², while a solid disk has I = 1/2 MR².',
                    ],

                    [
                        'question' => 'A 2 kg object moves from rest to 10 m/s. What is the change in kinetic energy?',
                        'choices' => [
                            ['choice_text' => '100 J', 'is_correct' => true],
                            ['choice_text' => '20 J', 'is_correct' => false],
                            ['choice_text' => '200 J', 'is_correct' => false],
                            ['choice_text' => '50 J', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔK = 1/2 m(v² - u²) = 1/2 × 2 × 100 = 100 J.',
                    ],

                    [
                        'question' => 'A 10 N force acts on a 0,5 m lever arm at 90°. What torque magnitude does it produce?',
                        'choices' => [
                            ['choice_text' => '5 N·m', 'is_correct' => true],
                            ['choice_text' => '20 N·m', 'is_correct' => false],
                            ['choice_text' => '10 N·m', 'is_correct' => false],
                            ['choice_text' => '0,05 N·m', 'is_correct' => false],
                        ],
                        'explanation' => 'τ = rF sin90° = 0,5 × 10 = 5 N·m.',
                    ],

                    [
                        'question' => 'A 3 kg body moves at 4 m/s. What is its linear momentum magnitude?',
                        'choices' => [
                            ['choice_text' => '12 kg·m/s', 'is_correct' => true],
                            ['choice_text' => '7 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '1,33 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '48 kg·m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'p = mv = 3 × 4 = 12 kg·m/s.',
                    ],

                    [
                        'question' => 'A particle moves in a circular orbit around a central mass. If the orbital radius is quadrupled, how does the circular orbital speed change?',
                        'choices' => [
                            ['choice_text' => 'It is divided by 2', 'is_correct' => true],
                            ['choice_text' => 'It doubles', 'is_correct' => false],
                            ['choice_text' => 'It is divided by 4', 'is_correct' => false],
                            ['choice_text' => 'It remains unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Since v = √(GM/r), multiplying r by 4 divides v by 2.',
                    ],

                    [
                        'question' => 'Why can the center-of-mass acceleration of a system be found without solving every internal interaction?',
                        'choices' => [
                            ['choice_text' => Internal forces cancel in the total momentum balance', 'is_correct' => true],
                            ['choice_text' => 'Internal forces do not exist', 'is_correct' => false],
                            ['choice_text' => 'All particles have the same acceleration', 'is_correct' => false],
                            ['choice_text' => 'The center of mass has no inertia', 'is_correct' => false],
                        ],
                        'explanation' => 'For a closed system, only the net external force determines center-of-mass acceleration.',
                    ],

                    [
                        'question' => 'Why is the angular momentum about a point not necessarily conserved even when no net torque is present about another point?',
                        'choices' => [
                            ['choice_text' => Angular momentum conservation depends on the torque about the specific reference point or axis', 'is_correct' => true],
                            ['choice_text' => 'Angular momentum is always conserved about every point', 'is_correct' => false],
                            ['choice_text' => 'Angular momentum is scalar and independent of origin', 'is_correct' => false],
                            ['choice_text' => 'Torque has no dependence on the reference point', 'is_correct' => false],
                        ],
                        'explanation' => 'Torque and angular momentum are defined relative to a chosen point or axis.',
                    ],

                    [
                        'question' => 'Why can a system lose mechanical energy while total energy remains conserved?',
                        'choices' => [
                            ['choice_text' => 'Mechanical energy can be converted into thermal, internal, chemical or other forms', 'is_correct' => true],
                            ['choice_text' => 'Energy conservation applies only to ideal systems', 'is_correct' => false],
                            ['choice_text' => 'Mechanical energy is the same as total energy in every situation', 'is_correct' => false],
                            ['choice_text' => 'Friction destroys energy completely', 'is_correct' => false],
                        ],
                        'explanation' => 'Total energy is conserved, but the mechanical portion can be transformed into other energy forms.',
                    ],

                    [
                        'question' => 'Why is a systematic dynamics solution particularly important for complex mechanical systems?',
                        'choices' => [
                            ['choice_text' => 'It separates modeling, force identification, coordinates, equations and validation of the result', 'is_correct' => true],
                            ['choice_text' => 'It eliminates the need for physical assumptions', 'is_correct' => false],
                            ['choice_text' => 'It guarantees that every problem has a closed-form solution', 'is_correct' => false],
                            ['choice_text' => 'It makes every force positive', 'is_correct' => false],
                        ],
                        'explanation' => 'A structured workflow reduces conceptual errors and keeps the mathematics consistent with the physical model.',
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

                // Randomize choices so the correct answer is not
                // predictable from its position.
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