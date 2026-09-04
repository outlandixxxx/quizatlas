<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WorkEnergyPowerBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'work-energy-power')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Work and Force
            // ============================================================

            [
                'title' => 'Work and Force',
                'description' => 'Introduction to mechanical work, force, displacement and the work of simple forces.',
                'questions' => [

                    [
                        'question' => 'What is mechanical work in physics?',
                        'choices' => [
                            ['choice_text' => 'Energy transferred by a force acting through a displacement', 'is_correct' => true],
                            ['choice_text' => 'The mass of an object multiplied by its speed', 'is_correct' => false],
                            ['choice_text' => 'The time required to move an object', 'is_correct' => false],
                            ['choice_text' => 'The force divided by acceleration', 'is_correct' => false],
                        ],
                        'explanation' => 'Mechanical work describes energy transferred when a force acts through a displacement.',
                    ],

                    [
                        'question' => 'What is the SI unit of work?',
                        'choices' => [
                            ['choice_text' => 'Joule', 'is_correct' => true],
                            ['choice_text' => 'Newton', 'is_correct' => false],
                            ['choice_text' => 'Watt', 'is_correct' => false],
                            ['choice_text' => 'Pascal', 'is_correct' => false],
                        ],
                        'explanation' => 'The SI unit of work and energy is the joule (J).',
                    ],

                    [
                        'question' => 'What is the work done by a constant force F over displacement d when the angle between them is θ?',
                        'choices' => [
                            ['choice_text' => 'W = Fd cosθ', 'is_correct' => true],
                            ['choice_text' => 'W = Fd sinθ', 'is_correct' => false],
                            ['choice_text' => 'W = F/d', 'is_correct' => false],
                            ['choice_text' => 'W = F + d', 'is_correct' => false],
                        ],
                        'explanation' => 'The work is the scalar product W = F·d = Fd cosθ.',
                    ],

                    [
                        'question' => 'When is the work of a force positive?',
                        'choices' => [
                            ['choice_text' => When the force has a component in the direction of displacement', 'is_correct' => true],
                            ['choice_text' => When the force is always perpendicular to displacement', 'is_correct' => false],
                            ['choice_text' => When the force opposes displacement', 'is_correct' => false],
                            ['choice_text' => When displacement is zero', 'is_correct' => false],
                        ],
                        'explanation' => 'A force component along the displacement contributes positive work.',
                    ],

                    [
                        'question' => 'When is the work done by a force equal to zero?',
                        'choices' => [
                            ['choice_text' => 'When displacement is zero or the force is perpendicular to displacement', 'is_correct' => true],
                            ['choice_text' => 'Only when the force is very large', 'is_correct' => false],
                            ['choice_text' => 'Only when the object is accelerating', 'is_correct' => false],
                            ['choice_text' => 'Whenever the force points along displacement', 'is_correct' => false],
                        ],
                        'explanation' => 'Since W = Fd cosθ, work is zero when d = 0 or θ = 90°.',
                    ],

                    [
                        'question' => 'A 10 N force moves an object 3 m in the same direction as the force. What work is done?',
                        'choices' => [
                            ['choice_text' => '30 J', 'is_correct' => true],
                            ['choice_text' => '13 J', 'is_correct' => false],
                            ['choice_text' => '3,3 J', 'is_correct' => false],
                            ['choice_text' => '0 J', 'is_correct' => false],
                        ],
                        'explanation' => 'W = Fd cos0° = 10 × 3 = 30 J.',
                    ],

                    [
                        'question' => 'A force of 20 N acts opposite to a displacement of 2 m. What work does the force perform?',
                        'choices' => [
                            ['choice_text' => '-40 J', 'is_correct' => true],
                            ['choice_text' => '40 J', 'is_correct' => false],
                            ['choice_text' => '-10 J', 'is_correct' => false],
                            ['choice_text' => '0 J', 'is_correct' => false],
                        ],
                        'explanation' => 'The angle is 180°, so W = 20 × 2 × cos180° = -40 J.',
                    ],

                    [
                        'question' => 'What does negative work by a force generally indicate?',
                        'choices' => [
                            ['choice_text' => 'The force removes mechanical energy from the object', 'is_correct' => true],
                            ['choice_text' => 'The force always creates energy', 'is_correct' => false],
                            ['choice_text' => 'The object has negative mass', 'is_correct' => false],
                            ['choice_text' => 'The displacement must be zero', 'is_correct' => false],
                        ],
                        'explanation' => 'A force opposing displacement performs negative work and tends to reduce kinetic energy.',
                    ],

                    [
                        'question' => 'What happens to the work done by a constant force if the displacement is doubled while the force and angle remain unchanged?',
                        'choices' => [
                            ['choice_text' => 'The work doubles', 'is_correct' => true],
                            ['choice_text' => 'The work is halved', 'is_correct' => false],
                            ['choice_text' => 'The work becomes four times larger', 'is_correct' => false],
                            ['choice_text' => 'The work remains unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Since W = Fd cosθ, work is directly proportional to displacement for fixed F and θ.',
                    ],

                    [
                        'question' => 'Why is work a scalar quantity?',
                        'choices' => [
                            ['choice_text' => 'It is obtained from the scalar product of force and displacement', 'is_correct' => true],
                            ['choice_text' => 'It has no numerical value', 'is_correct' => false],
                            ['choice_text' => 'It always points in the direction of motion', 'is_correct' => false],
                            ['choice_text' => 'It is identical to force', 'is_correct' => false],
                        ],
                        'explanation' => 'The dot product of two vectors produces a scalar.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 2 — Kinetic Energy
            // ============================================================

            [
                'title' => 'Kinetic Energy',
                'description' => 'Introduction to kinetic energy, speed and the work-energy theorem.',
                'questions' => [

                    [
                        'question' => 'What is kinetic energy?',
                        'choices' => [
                            ['choice_text' => 'Energy associated with an object’s motion', 'is_correct' => true],
                            ['choice_text' => 'Energy associated only with height', 'is_correct' => false],
                            ['choice_text' => 'Energy stored only in springs', 'is_correct' => false],
                            ['choice_text' => 'Energy caused by temperature alone', 'is_correct' => false],
                        ],
                        'explanation' => 'Kinetic energy is the mechanical energy associated with motion.',
                    ],

                    [
                        'question' => 'What is the formula for the translational kinetic energy of a particle?',
                        'choices' => [
                            ['choice_text' => 'K = 1/2 mv²', 'is_correct' => true],
                            ['choice_text' => 'K = mv', 'is_correct' => false],
                            ['choice_text' => 'K = ma', 'is_correct' => false],
                            ['choice_text' => 'K = 1/2 mgh', 'is_correct' => false],
                        ],
                        'explanation' => 'For a particle moving with speed v, K = 1/2 mv².',
                    ],

                    [
                        'question' => 'What is the SI unit of kinetic energy?',
                        'choices' => [
                            ['choice_text' => 'Joule', 'is_correct' => true],
                            ['choice_text' => 'Newton', 'is_correct' => false],
                            ['choice_text' => 'Meter per second', 'is_correct' => false],
                            ['choice_text' => 'Watt', 'is_correct' => false],
                        ],
                        'explanation' => 'Kinetic energy is an energy and is measured in joules.',
                    ],

                    [
                        'question' => 'If the speed of an object doubles while its mass remains constant, its kinetic energy becomes...',
                        'choices' => [
                            ['choice_text' => 'Four times larger', 'is_correct' => true],
                            ['choice_text' => 'Twice as large', 'is_correct' => false],
                            ['choice_text' => 'Half as large', 'is_correct' => false],
                            ['choice_text' => 'Unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Since K ∝ v², doubling speed multiplies kinetic energy by four.',
                    ],

                    [
                        'question' => 'If the mass of an object doubles while its speed remains unchanged, kinetic energy becomes...',
                        'choices' => [
                            ['choice_text' => 'Twice as large', 'is_correct' => true],
                            ['choice_text' => 'Four times larger', 'is_correct' => false],
                            ['choice_text' => 'Half as large', 'is_correct' => false],
                            ['choice_text' => 'Unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'K = 1/2 mv², so kinetic energy is directly proportional to mass.',
                    ],

                    [
                        'question' => 'What is the kinetic energy of a 2 kg object moving at 3 m/s?',
                        'choices' => [
                            ['choice_text' => '9 J', 'is_correct' => true],
                            ['choice_text' => '6 J', 'is_correct' => false],
                            ['choice_text' => '18 J', 'is_correct' => false],
                            ['choice_text' => '3 J', 'is_correct' => false],
                        ],
                        'explanation' => 'K = 1/2 × 2 × 3² = 9 J.',
                    ],

                    [
                        'question' => 'What is the kinetic energy of an object at rest?',
                        'choices' => [
                            ['choice_text' => 'Zero', 'is_correct' => true],
                            ['choice_text' => 'Equal to its mass', 'is_correct' => false],
                            ['choice_text' => 'Always equal to mg', 'is_correct' => false],
                            ['choice_text' => 'Infinite', 'is_correct' => false],
                        ],
                        'explanation' => 'At rest, v = 0, so K = 1/2 mv² = 0.',
                    ],

                    [
                        'question' => 'Which theorem states that the net work done on a particle equals its change in kinetic energy?',
                        'choices' => [
                            ['choice_text' => 'The work-energy theorem', 'is_correct' => true],
                            ['choice_text' => 'The conservation of momentum theorem', 'is_correct' => false],
                            ['choice_text' => 'The zeroth law', 'is_correct' => false],
                            ['choice_text' => 'The law of flotation', 'is_correct' => false],
                        ],
                        'explanation' => 'The work-energy theorem states W_net = ΔK.',
                    ],

                    [
                        'question' => 'If the net work done on an object is positive, its kinetic energy generally...',
                        'choices' => [
                            ['choice_text' => 'Increases', 'is_correct' => true],
                            ['choice_text' => 'Decreases', 'is_correct' => false],
                            ['choice_text' => 'Must become zero', 'is_correct' => false],
                            ['choice_text' => 'Cannot change', 'is_correct' => false],
                        ],
                        'explanation' => 'From W_net = ΔK, positive net work produces an increase in kinetic energy.',
                    ],

                    [
                        'question' => 'If the net work done on an object is negative, its kinetic energy generally...',
                        'choices' => [
                            ['choice_text' => 'Decreases', 'is_correct' => true],
                            ['choice_text' => 'Increases', 'is_correct' => false],
                            ['choice_text' => 'Becomes infinite', 'is_correct' => false],
                            ['choice_text' => 'Must remain constant', 'is_correct' => false],
                        ],
                        'explanation' => 'Negative net work gives ΔK < 0.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 3 — Gravitational Potential Energy
            // ============================================================

            [
                'title' => 'Gravitational Potential Energy',
                'description' => 'Introduction to gravitational potential energy near Earth and conservation of mechanical energy.',
                'questions' => [

                    [
                        'question' => 'What is gravitational potential energy near Earth’s surface?',
                        'choices' => [
                            ['choice_text' => 'An energy associated with an object’s position in a gravitational field', 'is_correct' => true],
                            ['choice_text' => 'Energy associated only with speed', 'is_correct' => false],
                            ['choice_text' => 'The force divided by distance', 'is_correct' => false],
                            ['choice_text' => 'The mass multiplied by acceleration only', 'is_correct' => false],
                        ],
                        'explanation' => 'Near Earth’s surface, gravitational potential energy depends on height relative to a chosen reference.',
                    ],

                    [
                        'question' => 'What is the usual expression for gravitational potential energy near Earth’s surface?',
                        'choices' => [
                            ['choice_text' => 'Ug = mgh', 'is_correct' => true],
                            ['choice_text' => 'Ug = mg/h', 'is_correct' => false],
                            ['choice_text' => 'Ug = mh/g', 'is_correct' => false],
                            ['choice_text' => 'Ug = 1/2 mv²', 'is_correct' => false],
                        ],
                        'explanation' => 'Near Earth, Ug = mgh relative to a chosen zero level.',
                    ],

                    [
                        'question' => 'What determines the zero level of gravitational potential energy near Earth?',
                        'choices' => [
                            ['choice_text' => 'A reference level chosen for convenience', 'is_correct' => true],
                            ['choice_text' => 'A universal fixed height that cannot be changed', 'is_correct' => false],
                            ['choice_text' => 'The mass of the object only', 'is_correct' => false],
                            ['choice_text' => 'The speed of the object', 'is_correct' => false],
                        ],
                        'explanation' => 'The reference level for potential energy can be chosen arbitrarily.',
                    ],

                    [
                        'question' => 'What happens to gravitational potential energy when an object is lifted upward?',
                        'choices' => [
                            ['choice_text' => 'It increases', 'is_correct' => true],
                            ['choice_text' => 'It decreases', 'is_correct' => false],
                            ['choice_text' => 'It becomes zero automatically', 'is_correct' => false],
                            ['choice_text' => 'It cannot change', 'is_correct' => false],
                        ],
                        'explanation' => 'Since Ug = mgh, increasing height increases gravitational potential energy.',
                    ],

                    [
                        'question' => 'What happens to gravitational potential energy when an object falls through a height difference?',
                        'choices' => [
                            ['choice_text' => 'It decreases', 'is_correct' => true],
                            ['choice_text' => 'It increases', 'is_correct' => false],
                            ['choice_text' => 'It becomes infinite', 'is_correct' => false],
                            ['choice_text' => 'It remains necessarily constant', 'is_correct' => false],
                        ],
                        'explanation' => 'A decrease in height produces a decrease in gravitational potential energy.',
                    ],

                    [
                        'question' => 'A 2 kg object is raised 5 m. Taking g = 9,8 m/s², how much gravitational potential energy does it gain?',
                        'choices' => [
                            ['choice_text' => '98 J', 'is_correct' => true],
                            ['choice_text' => '49 J', 'is_correct' => false],
                            ['choice_text' => '19,6 J', 'is_correct' => false],
                            ['choice_text' => '9,8 J', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔUg = mgh = 2 × 9,8 × 5 = 98 J.',
                    ],

                    [
                        'question' => 'Why can gravitational potential energy be negative depending on the chosen reference?',
                        'choices' => [
                            ['choice_text' => 'Only differences in potential energy affect physical predictions, so the zero reference is arbitrary', 'is_correct' => true],
                            ['choice_text' => 'Gravity always produces negative energy', 'is_correct' => false],
                            ['choice_text' => 'Mass can become negative', 'is_correct' => false],
                            ['choice_text' => 'Potential energy cannot have a reference level', 'is_correct' => false],
                        ],
                        'explanation' => 'Potential energy is defined up to an additive constant.',
                    ],

                    [
                        'question' => 'For an object falling without air resistance, gravitational potential energy is mainly converted into...',
                        'choices' => [
                            ['choice_text' => 'Kinetic energy', 'is_correct' => true],
                            ['choice_text' => 'Mass', 'is_correct' => false],
                            ['choice_text' => 'Electric charge', 'is_correct' => false],
                            ['choice_text' => 'Temperature only', 'is_correct' => false],
                        ],
                        'explanation' => 'In ideal free fall, mechanical energy is conserved and potential energy decreases while kinetic energy increases.',
                    ],

                    [
                        'question' => 'Why is gravity considered a conservative force near Earth?',
                        'choices' => [
                            ['choice_text' => 'Its work depends only on the initial and final heights', 'is_correct' => true],
                            ['choice_text' => 'It always does positive work', 'is_correct' => false],
                            ['choice_text' => 'Its force is always zero', 'is_correct' => false],
                            ['choice_text' => 'It depends only on time', 'is_correct' => false],
                        ],
                        'explanation' => 'For uniform gravity, the work depends only on the vertical displacement between initial and final positions.',
                    ],

                    [
                        'question' => 'What is conserved for an ideal system subject only to conservative forces?',
                        'choices' => [
                            ['choice_text' => 'Mechanical energy', 'is_correct' => true],
                            ['choice_text' => 'Kinetic energy alone', 'is_correct' => false],
                            ['choice_text' => 'Potential energy alone', 'is_correct' => false],
                            ['choice_text' => 'Acceleration alone', 'is_correct' => false],
                        ],
                        'explanation' => 'When only conservative forces act, K + U remains constant.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 4 — Power
            // ============================================================

            [
                'title' => 'Power and Rate of Energy Transfer',
                'description' => 'Introduction to mechanical power and the rate at which work and energy are transferred.',
                'questions' => [

                    [
                        'question' => 'What is power?',
                        'choices' => [
                            ['choice_text' => 'The rate at which work is done or energy is transferred', 'is_correct' => true],
                            ['choice_text' => 'The total force on an object', 'is_correct' => false],
                            ['choice_text' => 'The total distance traveled', 'is_correct' => false],
                            ['choice_text' => 'The amount of mass in a system', 'is_correct' => false],
                        ],
                        'explanation' => 'Power measures how quickly work is performed or energy is transferred.',
                    ],

                    [
                        'question' => 'What is the SI unit of power?',
                        'choices' => [
                            ['choice_text' => 'Watt', 'is_correct' => true],
                            ['choice_text' => 'Joule', 'is_correct' => false],
                            ['choice_text' => 'Newton', 'is_correct' => false],
                            ['choice_text' => 'Pascal', 'is_correct' => false],
                        ],
                        'explanation' => 'The watt is the SI unit of power, equal to one joule per second.',
                    ],

                    [
                        'question' => 'What is the average power when work W is done during time Δt?',
                        'choices' => [
                            ['choice_text' => 'P_avg = W/Δt', 'is_correct' => true],
                            ['choice_text' => 'P_avg = WΔt', 'is_correct' => false],
                            ['choice_text' => 'P_avg = Δt/W', 'is_correct' => false],
                            ['choice_text' => 'P_avg = W + Δt', 'is_correct' => false],
                        ],
                        'explanation' => 'Average power is work divided by the time interval.',
                    ],

                    [
                        'question' => 'If an engine performs 6000 J of work in 20 s, what is its average power?',
                        'choices' => [
                            ['choice_text' => '300 W', 'is_correct' => true],
                            ['choice_text' => '120 W', 'is_correct' => false],
                            ['choice_text' => '3000 W', 'is_correct' => false],
                            ['choice_text' => '120 000 W', 'is_correct' => false],
                        ],
                        'explanation' => 'P = W/t = 6000/20 = 300 W.',
                    ],

                    [
                        'question' => 'For a particle moving with velocity v under a force F, what is the instantaneous mechanical power delivered by the force?',
                        'choices' => [
                            ['choice_text' => 'P = F·v', 'is_correct' => true],
                            ['choice_text' => 'P = F/v', 'is_correct' => false],
                            ['choice_text' => 'P = Fv²', 'is_correct' => false],
                            ['choice_text' => 'P = F + v', 'is_correct' => false],
                        ],
                        'explanation' => 'Instantaneous power is the scalar product of force and velocity.',
                    ],

                    [
                        'question' => 'When a force is perpendicular to velocity, its instantaneous power is...',
                        'choices' => [
                            ['choice_text' => 'Zero', 'is_correct' => true],
                            ['choice_text' => 'Maximum', 'is_correct' => false],
                            ['choice_text' => 'Always negative', 'is_correct' => false],
                            ['choice_text' => 'Infinite', 'is_correct' => false],
                        ],
                        'explanation' => 'Since P = Fv cosθ and θ = 90°, the power is zero.',
                    ],

                    [
                        'question' => 'Two machines perform the same amount of work. Which machine has greater power?',
                        'choices' => [
                            ['choice_text' => 'The machine that performs the work in less time', 'is_correct' => true],
                            ['choice_text' => 'The machine that takes more time', 'is_correct' => false],
                            ['choice_text' => 'Both always have the same power', 'is_correct' => false],
                            ['choice_text' => 'The machine with greater mass only', 'is_correct' => false],
                        ],
                        'explanation' => 'For the same work, less time means greater average power.',
                    ],

                    [
                        'question' => 'What does one watt represent?',
                        'choices' => [
                            ['choice_text' => 'One joule of energy transferred per second', 'is_correct' => true],
                            ['choice_text' => 'One newton per meter', 'is_correct' => false],
                            ['choice_text' => 'One joule per meter', 'is_correct' => false],
                            ['choice_text' => 'One kilogram per second', 'is_correct' => false],
                        ],
                        'explanation' => '1 W = 1 J/s.',
                    ],

                    [
                        'question' => 'If the same work is completed in half the time, average power becomes...',
                        'choices' => [
                            ['choice_text' => 'Twice as large', 'is_correct' => true],
                            ['choice_text' => 'Half as large', 'is_correct' => false],
                            ['choice_text' => 'Four times as large', 'is_correct' => false],
                            ['choice_text' => 'Unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Since P = W/t, halving time doubles power for fixed work.',
                    ],

                    [
                        'question' => 'Why is power different from energy?',
                        'choices' => [
                            ['choice_text' => 'Energy measures the amount transferred or stored, while power measures the rate of transfer', 'is_correct' => true],
                            ['choice_text' => 'Power is measured in joules and energy in watts', 'is_correct' => false],
                            ['choice_text' => 'Energy and power are always identical', 'is_correct' => false],
                            ['choice_text' => 'Power does not depend on time', 'is_correct' => false],
                        ],
                        'explanation' => 'Energy and power have different meanings and units: joules and watts respectively.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 5 — Conservation of Mechanical Energy
            // ============================================================

            [
                'title' => 'Conservation of Mechanical Energy',
                'description' => 'Introduction to the conservation and transformation of kinetic and potential energy.',
                'questions' => [

                    [
                        'question' => 'What is mechanical energy?',
                        'choices' => [
                            ['choice_text' => 'The sum of kinetic and potential energies', 'is_correct' => true],
                            ['choice_text' => 'The sum of mass and velocity', 'is_correct' => false],
                            ['choice_text' => 'The product of force and acceleration', 'is_correct' => false],
                            ['choice_text' => 'Only the kinetic energy of an object', 'is_correct' => false],
                        ],
                        'explanation' => 'Mechanical energy is E_mech = K + U.',
                    ],

                    [
                        'question' => 'When only conservative forces act, what happens to mechanical energy?',
                        'choices' => [
                            ['choice_text' => 'It remains constant', 'is_correct' => true],
                            ['choice_text' => 'It always increases', 'is_correct' => false],
                            ['choice_text' => 'It always decreases', 'is_correct' => false],
                            ['choice_text' => 'It becomes zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Conservative systems satisfy K + U = constant.',
                    ],

                    [
                        'question' => 'A ball falls from a height without air resistance. As it falls, kinetic energy...',
                        'choices' => [
                            ['choice_text' => 'Increases while gravitational potential energy decreases', 'is_correct' => true],
                            ['choice_text' => 'Decreases while potential energy increases', 'is_correct' => false],
                            ['choice_text' => 'Remains zero', 'is_correct' => false],
                            ['choice_text' => 'Becomes negative', 'is_correct' => false],
                        ],
                        'explanation' => 'In ideal free fall, potential energy is converted into kinetic energy.',
                    ],

                    [
                        'question' => 'A ball is thrown upward. During the upward motion, its kinetic energy generally...',
                        'choices' => [
                            ['choice_text' => 'Decreases', 'is_correct' => true],
                            ['choice_text' => 'Increases continuously', 'is_correct' => false],
                            ['choice_text' => 'Remains constant', 'is_correct' => false],
                            ['choice_text' => 'Becomes equal to mass', 'is_correct' => false],
                        ],
                        'explanation' => 'As the ball rises, speed decreases and kinetic energy decreases.',
                    ],

                    [
                        'question' => 'At the highest point of an ideal vertical throw, what is the instantaneous velocity of the object?',
                        'choices' => [
                            ['choice_text' => 'Zero', 'is_correct' => true],
                            ['choice_text' => 'Equal to g', 'is_correct' => false],
                            ['choice_text' => 'Infinite', 'is_correct' => false],
                            ['choice_text' => 'Equal to its initial velocity', 'is_correct' => false],
                        ],
                        'explanation' => 'At the highest point, the instantaneous vertical velocity is zero.',
                    ],

                    [
                        'question' => 'Why does the mechanical energy of a system decrease when kinetic friction acts?',
                        'choices' => [
                            ['choice_text' => 'Mechanical energy is converted into internal and thermal energy', 'is_correct' => true],
                            ['choice_text' => 'Energy is destroyed completely', 'is_correct' => false],
                            ['choice_text' => 'Mass disappears', 'is_correct' => false],
                            ['choice_text' => 'Gravity stops acting', 'is_correct' => false],
                        ],
                        'explanation' => 'Friction transfers some mechanical energy into thermal and microscopic internal energy.',
                    ],

                    [
                        'question' => 'A 1 kg object falls from 10 m to the ground without air resistance. Approximately how much kinetic energy does it gain?',
                        'choices' => [
                            ['choice_text' => '98 J', 'is_correct' => true],
                            ['choice_text' => '9,8 J', 'is_correct' => false],
                            ['choice_text' => '10 J', 'is_correct' => false],
                            ['choice_text' => '196 J', 'is_correct' => false],
                        ],
                        'explanation' => 'The loss of gravitational potential energy is mgh = 1 × 9,8 × 10 = 98 J.',
                    ],

                    [
                        'question' => 'Why can conservation of mechanical energy be used to compare two points on a trajectory?',
                        'choices' => [
                            ['choice_text' => It connects the kinetic and potential energies at the two positions without requiring the full time history', 'is_correct' => true],
                            ['choice_text' => 'It always determines time directly', 'is_correct' => false],
                            ['choice_text' => 'It ignores all forces', 'is_correct' => false],
                            ['choice_text' => 'It is valid only when the object is stationary', 'is_correct' => false],
                        ],
                        'explanation' => 'Energy conservation relates state quantities between positions.',
                    ],

                    [
                        'question' => 'Which force is a common non-conservative force in elementary mechanics?',
                        'choices' => [
                            ['choice_text' => 'Kinetic friction', 'is_correct' => true],
                            ['choice_text' => 'Gravity', 'is_correct' => false],
                            ['choice_text' => 'Ideal spring force', 'is_correct' => false],
                            ['choice_text' => 'Electrostatic force in the ideal conservative case', 'is_correct' => false],
                        ],
                        'explanation' => 'Kinetic friction is path-dependent and dissipates mechanical energy.',
                    ],

                    [
                        'question' => 'Why is energy conservation often useful when force analysis becomes complicated?',
                        'choices' => [
                            ['choice_text' => 'It can relate initial and final states without solving every intermediate force or acceleration detail', 'is_correct' => true],
                            ['choice_text' => 'It eliminates the need for physical assumptions', 'is_correct' => false],
                            ['choice_text' => 'It works only for one-dimensional motion', 'is_correct' => false],
                            ['choice_text' => 'It makes friction conservative', 'is_correct' => false],
                        ],
                        'explanation' => 'Energy methods can bypass detailed time-dependent dynamics in many problems.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 6 — Springs and Elastic Potential Energy
            // ============================================================

            [
                'title' => 'Springs and Elastic Energy',
                'description' => 'Introduction to Hooke’s law and elastic potential energy.',
                'questions' => [

                    [
                        'question' => 'What does Hooke’s law describe for an ideal spring?',
                        'choices' => [
                            ['choice_text' => 'A restoring force proportional to displacement from equilibrium', 'is_correct' => true],
                            ['choice_text' => 'A force proportional to mass only', 'is_correct' => false],
                            ['choice_text' => 'A force always independent of displacement', 'is_correct' => false],
                            ['choice_text' => 'A gravitational force', 'is_correct' => false],
                        ],
                        'explanation' => 'For an ideal spring, F = -kx.',
                    ],

                    [
                        'question' => 'What is the elastic potential energy stored in an ideal spring?',
                        'choices' => [
                            ['choice_text' => 'Us = 1/2 kx²', 'is_correct' => true],
                            ['choice_text' => 'Us = kx', 'is_correct' => false],
                            ['choice_text' => 'Us = k/x²', 'is_correct' => false],
                            ['choice_text' => 'Us = 1/2 mv²', 'is_correct' => false],
                        ],
                        'explanation' => 'The spring stores Us = 1/2 kx².',
                    ],

                    [
                        'question' => 'What is the SI unit of the spring constant k?',
                        'choices' => [
                            ['choice_text' => 'N/m', 'is_correct' => true],
                            ['choice_text' => 'N·m', 'is_correct' => false],
                            ['choice_text' => 'J/m', 'is_correct' => false],
                            ['choice_text' => 'kg/m²', 'is_correct' => false],
                        ],
                        'explanation' => 'From F = kx, k has units N/m.',
                    ],

                    [
                        'question' => 'If the displacement of an ideal spring is doubled, its stored elastic energy becomes...',
                        'choices' => [
                            ['choice_text' => 'Four times larger', 'is_correct' => true],
                            ['choice_text' => 'Twice as large', 'is_correct' => false],
                            ['choice_text' => 'Half as large', 'is_correct' => false],
                            ['choice_text' => 'Unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Since Us ∝ x², doubling x multiplies the energy by four.',
                    ],

                    [
                        'question' => 'What does the negative sign in F = -kx indicate?',
                        'choices' => [
                            ['choice_text' => 'The spring force points opposite to the displacement from equilibrium', 'is_correct' => true],
                            ['choice_text' => 'The spring force is always negative in magnitude', 'is_correct' => false],
                            ['choice_text' => 'The spring has negative stiffness', 'is_correct' => false],
                            ['choice_text' => 'The displacement must be negative', 'is_correct' => false],
                        ],
                        'explanation' => 'The minus sign indicates the restoring direction of the spring force.',
                    ],

                    [
                        'question' => 'A spring has k = 200 N/m and is compressed by 0,1 m. What elastic potential energy is stored?',
                        'choices' => [
                            ['choice_text' => '1 J', 'is_correct' => true],
                            ['choice_text' => '2 J', 'is_correct' => false],
                            ['choice_text' => '10 J', 'is_correct' => false],
                            ['choice_text' => '20 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Us = 1/2 × 200 × 0,1² = 1 J.',
                    ],

                    [
                        'question' => 'At the equilibrium position of an ideal spring, the elastic potential energy is...',
                        'choices' => [
                            ['choice_text' => 'Zero relative to the equilibrium reference', 'is_correct' => true],
                            ['choice_text' => 'Always maximum', 'is_correct' => false],
                            ['choice_text' => 'Infinite', 'is_correct' => false],
                            ['choice_text' => 'Equal to mg', 'is_correct' => false],
                        ],
                        'explanation' => 'With x = 0 and the conventional zero reference, Us = 0.',
                    ],

                    [
                        'question' => 'Why is an ideal spring force conservative?',
                        'choices' => [
                            ['choice_text' => 'Its work depends only on the initial and final spring extensions', 'is_correct' => true],
                            ['choice_text' => 'It always does negative work', 'is_correct' => false],
                            ['choice_text' => 'It depends on time only', 'is_correct' => false],
                            ['choice_text' => 'It cannot store energy', 'is_correct' => false],
                        ],
                        'explanation' => 'The spring force derives from the potential Us = 1/2 kx².',
                    ],

                    [
                        'question' => 'When a compressed spring launches an object on a frictionless surface, the spring’s stored energy is mainly converted into...',
                        'choices' => [
                            ['choice_text' => 'Kinetic energy of the object', 'is_correct' => true],
                            ['choice_text' => 'Mass of the object', 'is_correct' => false],
                            ['choice_text' => 'Gravitational field strength', 'is_correct' => false],
                            ['choice_text' => 'Electric charge', 'is_correct' => false],
                        ],
                        'explanation' => 'In an ideal frictionless system, elastic potential energy converts into kinetic energy.',
                    ],

                    [
                        'question' => 'Why does a stiffer spring store more energy for the same displacement?',
                        'choices' => [
                            ['choice_text' => 'Because Us = 1/2 kx² increases with the spring constant k', 'is_correct' => true],
                            ['choice_text' => 'Because its mass is always larger', 'is_correct' => false],
                            ['choice_text' => 'Because displacement disappears', 'is_correct' => false],
                            ['choice_text' => 'Because gravity becomes stronger', 'is_correct' => false],
                        ],
                        'explanation' => 'For fixed x, the stored elastic energy is directly proportional to k.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 7 — Efficiency and Energy Conversion
            // ============================================================

            [
                'title' => 'Efficiency and Energy Conversion',
                'description' => 'Introduction to efficiency, useful output energy and energy losses.',
                'questions' => [

                    [
                        'question' => 'What is efficiency?',
                        'choices' => [
                            ['choice_text' => 'The ratio of useful output energy or work to input energy', 'is_correct' => true],
                            ['choice_text' => 'The total input energy multiplied by time', 'is_correct' => false],
                            ['choice_text' => 'The force divided by mass', 'is_correct' => false],
                            ['choice_text' => 'The speed divided by acceleration', 'is_correct' => false],
                        ],
                        'explanation' => 'Efficiency measures how much of the input energy or work becomes useful output.',
                    ],

                    [
                        'question' => 'What is a common formula for efficiency in terms of useful work and input energy?',
                        'choices' => [
                            ['choice_text' => 'η = W_useful/W_input', 'is_correct' => true],
                            ['choice_text' => 'η = W_input/W_useful', 'is_correct' => false],
                            ['choice_text' => 'η = W_useful + W_input', 'is_correct' => false],
                            ['choice_text' => 'η = W_usefulW_input', 'is_correct' => false],
                        ],
                        'explanation' => 'Efficiency is the useful output divided by the total input.',
                    ],

                    [
                        'question' => 'A machine receives 1000 J and delivers 800 J of useful work. What is its efficiency?',
                        'choices' => [
                            ['choice_text' => '80 %', 'is_correct' => true],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '125 %', 'is_correct' => false],
                            ['choice_text' => '8 %', 'is_correct' => false],
                        ],
                        'explanation' => 'η = 800/1000 = 0,8 = 80 %.',
                    ],

                    [
                        'question' => 'Why is the efficiency of a real machine usually less than 100 %?',
                        'choices' => [
                            ['choice_text' => 'Some input energy is transferred into unwanted forms such as heat or sound', 'is_correct' => true],
                            ['choice_text' => 'Energy is destroyed completely', 'is_correct' => false],
                            ['choice_text' => 'The useful output is always zero', 'is_correct' => false],
                            ['choice_text' => 'Mass disappears during operation', 'is_correct' => false],
                        ],
                        'explanation' => 'Real machines experience losses and irreversible processes.',
                    ],

                    [
                        'question' => 'Can the efficiency of an ordinary passive machine exceed 100 %?',
                        'choices' => [
                            ['choice_text' => 'No, not when defined as useful output energy divided by input energy', 'is_correct' => true],
                            ['choice_text' => 'Yes, for any machine', 'is_correct' => false],
                            ['choice_text' => 'Only when friction is present', 'is_correct' => false],
                            ['choice_text' => 'Only when power is constant', 'is_correct' => false],
                        ],
                        'explanation' => 'For a passive energy-conversion device, useful output cannot exceed the supplied input under the standard definition.',
                    ],

                    [
                        'question' => 'What happens to efficiency if useful output remains constant while input energy increases?',
                        'choices' => [
                            ['choice_text' => 'Efficiency decreases', 'is_correct' => true],
                            ['choice_text' => 'Efficiency increases', 'is_correct' => false],
                            ['choice_text' => 'Efficiency becomes exactly 100 %', 'is_correct' => false],
                            ['choice_text' => 'Efficiency is unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Since η = useful output/input, increasing the denominator lowers efficiency for fixed output.',
                    ],

                    [
                        'question' => 'Why are energy losses often represented as heat in mechanical machines?',
                        'choices' => [
                            ['choice_text' => 'Friction and other irreversible effects convert organized mechanical energy into internal thermal energy', 'is_correct' => true],
                            ['choice_text' => 'Heat is the only form of energy that exists', 'is_correct' => false],
                            ['choice_text' => 'Mechanical energy disappears without trace', 'is_correct' => false],
                            ['choice_text' => 'Mass is converted entirely into heat in ordinary machines', 'is_correct' => false],
                        ],
                        'explanation' => 'Dissipative processes commonly transform mechanical energy into internal energy and heat.',
                    ],

                    [
                        'question' => 'Two machines receive the same input energy. Which one is more efficient?',
                        'choices' => [
                            ['choice_text' => 'The one that provides more useful output', 'is_correct' => true],
                            ['choice_text' => 'The one that loses more energy', 'is_correct' => false],
                            ['choice_text' => 'The one that takes more time regardless of output', 'is_correct' => false],
                            ['choice_text' => 'They are necessarily equally efficient', 'is_correct' => false],
                        ],
                        'explanation' => 'With equal input, greater useful output means greater efficiency.',
                    ],

                    [
                        'question' => 'Why is efficiency usually expressed as a percentage?',
                        'choices' => [
                            ['choice_text' => 'It conveniently expresses the fraction of input converted into useful output', 'is_correct' => true],
                            ['choice_text' => 'Percentages remove all measurement errors', 'is_correct' => false],
                            ['choice_text' => 'Efficiency has units of percent per second', 'is_correct' => false],
                            ['choice_text' => 'Energy must always be measured in percent', 'is_correct' => false],
                        ],
                        'explanation' => 'Multiplying the efficiency ratio by 100 gives an intuitive percentage.',
                    ],

                    [
                        'question' => 'Why can improving lubrication increase the mechanical efficiency of a machine?',
                        'choices' => [
                            ['choice_text' => 'It can reduce frictional losses and therefore increase useful output for the same input', 'is_correct' => true],
                            ['choice_text' => 'It increases mass', 'is_correct' => false],
                            ['choice_text' => 'It eliminates the need for energy input', 'is_correct' => false],
                            ['choice_text' => 'It makes gravity disappear', 'is_correct' => false],
                        ],
                        'explanation' => 'Lower friction generally means less energy dissipated as heat.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 8 — Integrated Work, Energy and Power
            // ============================================================

            [
                'title' => 'Integrated Work, Energy and Power',
                'description' => 'Mixed beginner-level problems combining work, kinetic energy, potential energy, power and efficiency.',
                'questions' => [

                    [
                        'question' => 'A 5 N force moves an object 4 m in the same direction as the force. What work is done?',
                        'choices' => [
                            ['choice_text' => '20 J', 'is_correct' => true],
                            ['choice_text' => '9 J', 'is_correct' => false],
                            ['choice_text' => '1,25 J', 'is_correct' => false],
                            ['choice_text' => '0 J', 'is_correct' => false],
                        ],
                        'explanation' => 'W = Fd = 5 × 4 = 20 J.',
                    ],

                    [
                        'question' => 'A 4 kg object moves at 5 m/s. What is its kinetic energy?',
                        'choices' => [
                            ['choice_text' => '50 J', 'is_correct' => true],
                            ['choice_text' => '20 J', 'is_correct' => false],
                            ['choice_text' => '100 J', 'is_correct' => false],
                            ['choice_text' => '25 J', 'is_correct' => false],
                        ],
                        'explanation' => 'K = 1/2 × 4 × 5² = 50 J.',
                    ],

                    [
                        'question' => 'A 3 kg object is lifted by 2 m. Taking g = 9,8 m/s², what gravitational potential energy does it gain?',
                        'choices' => [
                            ['choice_text' => '58,8 J', 'is_correct' => true],
                            ['choice_text' => '29,4 J', 'is_correct' => false],
                            ['choice_text' => '19,6 J', 'is_correct' => false],
                            ['choice_text' => '5,88 J', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔUg = mgh = 3 × 9,8 × 2 = 58,8 J.',
                    ],

                    [
                        'question' => 'A machine performs 2000 J of work in 10 s. What is its average power?',
                        'choices' => [
                            ['choice_text' => '200 W', 'is_correct' => true],
                            ['choice_text' => '20 W', 'is_correct' => false],
                            ['choice_text' => '2000 W', 'is_correct' => false],
                            ['choice_text' => '20 000 W', 'is_correct' => false],
                        ],
                        'explanation' => 'P = W/t = 2000/10 = 200 W.',
                    ],

                    [
                        'question' => 'A 2 kg object falls from rest through 5 m without air resistance. What is its approximate speed just before reaching the ground?',
                        'choices' => [
                            ['choice_text' => '9,9 m/s', 'is_correct' => true],
                            ['choice_text' => '5 m/s', 'is_correct' => false],
                            ['choice_text' => '4,9 m/s', 'is_correct' => false],
                            ['choice_text' => '19,6 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'From energy conservation, mgh = 1/2 mv², so v = √(2gh) = √98 ≈ 9,9 m/s.',
                    ],

                    [
                        'question' => 'A spring with k = 100 N/m is compressed by 0,2 m. How much energy is stored?',
                        'choices' => [
                            ['choice_text' => '2 J', 'is_correct' => true],
                            ['choice_text' => '10 J', 'is_correct' => false],
                            ['choice_text' => '20 J', 'is_correct' => false],
                            ['choice_text' => '1 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Us = 1/2 × 100 × 0,2² = 2 J.',
                    ],

                    [
                        'question' => 'An ideal machine receives 500 J and delivers 400 J of useful energy. What is its efficiency?',
                        'choices' => [
                            ['choice_text' => '80 %', 'is_correct' => true],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '125 %', 'is_correct' => false],
                            ['choice_text' => '90 %', 'is_correct' => false],
                        ],
                        'explanation' => 'η = 400/500 = 0,8 = 80 %.',
                    ],

                    [
                        'question' => 'Why does an object moving in a circle at constant speed have no change in kinetic energy?',
                        'choices' => [
                            ['choice_text' => 'Its speed remains constant even though its velocity direction changes', 'is_correct' => true],
                            ['choice_text' => 'No force acts on it', 'is_correct' => false],
                            ['choice_text' => 'Its acceleration is zero', 'is_correct' => false],
                            ['choice_text' => 'Its mass continuously decreases', 'is_correct' => false],
                        ],
                        'explanation' => 'Kinetic energy depends on speed, not direction. In uniform circular motion the speed remains constant.',
                    ],

                    [
                        'question' => 'Why does the centripetal force do no work during uniform circular motion?',
                        'choices' => [
                            ['choice_text' => 'It is perpendicular to the instantaneous displacement', 'is_correct' => true],
                            ['choice_text' => 'It is always zero', 'is_correct' => false],
                            ['choice_text' => 'The object has no acceleration', 'is_correct' => false],
                            ['choice_text' => 'The force points in the direction of velocity', 'is_correct' => false],
                        ],
                        'explanation' => 'The radial centripetal force is perpendicular to tangential velocity, so its instantaneous power and work are zero.',
                    ],

                    [
                        'question' => 'Why are work, energy and power closely connected in mechanics?',
                        'choices' => [
                            ['choice_text' => 'Work describes energy transfer, energy describes the capacity or state of transfer, and power describes the transfer rate', 'is_correct' => true],
                            ['choice_text' => 'They are three names for exactly the same quantity', 'is_correct' => false],
                            ['choice_text' => 'Power is unrelated to work', 'is_correct' => false],
                            ['choice_text' => 'Energy can never be transferred by work', 'is_correct' => false],
                        ],
                        'explanation' => 'These concepts provide complementary descriptions of mechanical energy transfer and its rate.',
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
                    'difficulty' => 'Beginner',
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