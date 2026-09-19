<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DynamicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'dynamics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Forces and Newton's Laws
            // ============================================================

            [
                'title' => 'Forces and Newton’s Laws',
                'description' => 'Introduction to force, inertia and Newton’s three laws of motion.',
                'questions' => [

                    [
                        'question' => 'What is a force?',
                        'choices' => [
                            ['choice_text' => 'An interaction that can change an object’s motion or deform it', 'is_correct' => true],
                            ['choice_text' => 'A quantity that measures temperature', 'is_correct' => false],
                            ['choice_text' => 'The amount of matter in an object', 'is_correct' => false],
                            ['choice_text' => 'The distance traveled by an object', 'is_correct' => false],
                        ],
                        'explanation' => 'A force is an interaction capable of changing the motion of an object or producing deformation.',
                    ],

                    [
                        'question' => 'What is the SI unit of force?',
                        'choices' => [
                            ['choice_text' => 'Newton', 'is_correct' => true],
                            ['choice_text' => 'Joule', 'is_correct' => false],
                            ['choice_text' => 'Pascal', 'is_correct' => false],
                            ['choice_text' => 'Watt', 'is_correct' => false],
                        ],
                        'explanation' => 'The SI unit of force is the newton (N).',
                    ],

                    [
                        'question' => 'Which law states that an object remains at rest or in uniform straight-line motion when the net force is zero?',
                        'choices' => [
                            ['choice_text' => 'Newton’s first law', 'is_correct' => true],
                            ['choice_text' => 'Newton’s second law', 'is_correct' => false],
                            ['choice_text' => 'Newton’s third law', 'is_correct' => false],
                            ['choice_text' => 'The law of universal gravitation', 'is_correct' => false],
                        ],
                        'explanation' => 'Newton’s first law is the law of inertia.',
                    ],

                    [
                        'question' => 'Which equation expresses Newton’s second law for a particle of constant mass?',
                        'choices' => [
                            ['choice_text' => 'F_net = ma', 'is_correct' => true],
                            ['choice_text' => 'F_net = m/a', 'is_correct' => false],
                            ['choice_text' => 'F_net = a/m', 'is_correct' => false],
                            ['choice_text' => 'F_net = mv', 'is_correct' => false],
                        ],
                        'explanation' => 'For constant mass, Newton’s second law gives the net force as F_net = ma.',
                    ],

                    [
                        'question' => 'What does Newton’s third law state?',
                        'choices' => [
                            ['choice_text' => 'For every force, there is an equal and opposite force exerted on another body', 'is_correct' => true],
                            ['choice_text' => 'Every object must always accelerate', 'is_correct' => false],
                            ['choice_text' => 'A force is proportional to velocity', 'is_correct' => false],
                            ['choice_text' => 'An object at rest has no forces acting on it', 'is_correct' => false],
                        ],
                        'explanation' => 'Newton’s third law describes action-reaction force pairs acting on different bodies.',
                    ],

                    [
                        'question' => 'A 5 kg object experiences a net force of 20 N. What is its acceleration?',
                        'choices' => [
                            ['choice_text' => '4 m/s²', 'is_correct' => true],
                            ['choice_text' => '100 m/s²', 'is_correct' => false],
                            ['choice_text' => '0,25 m/s²', 'is_correct' => false],
                            ['choice_text' => '15 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a = F/m = 20/5 = 4 m/s².',
                    ],

                    [
                        'question' => 'If the net force acting on an object is doubled while its mass remains constant, its acceleration becomes...',
                        'choices' => [
                            ['choice_text' => 'Twice as large', 'is_correct' => true],
                            ['choice_text' => 'Half as large', 'is_correct' => false],
                            ['choice_text' => 'Four times as large', 'is_correct' => false],
                            ['choice_text' => 'Unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'From F_net = ma, acceleration is directly proportional to the net force for constant mass.',
                    ],

                    [
                        'question' => 'If the mass of an object is doubled while the net force remains constant, its acceleration becomes...',
                        'choices' => [
                            ['choice_text' => 'Half as large', 'is_correct' => true],
                            ['choice_text' => 'Twice as large', 'is_correct' => false],
                            ['choice_text' => 'Four times as large', 'is_correct' => false],
                            ['choice_text' => 'Unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'From a = F_net/m, doubling the mass halves the acceleration.',
                    ],

                    [
                        'question' => 'What is the net force on an object moving at constant velocity in a straight line?',
                        'choices' => [
                            ['choice_text' => 'Zero', 'is_correct' => true],
                            ['choice_text' => 'Always equal to its weight', 'is_correct' => false],
                            ['choice_text' => 'Always increasing', 'is_correct' => false],
                            ['choice_text' => 'Equal to its momentum', 'is_correct' => false],
                        ],
                        'explanation' => 'Constant velocity means zero acceleration, so Newton’s second law gives zero net force.',
                    ],

                    [
                        'question' => 'Why are Newton’s laws usually applied using a free-body diagram?',
                        'choices' => [
                            ['choice_text' => 'It helps identify and represent the external forces acting on an object', 'is_correct' => true],
                            ['choice_text' => 'It directly measures the object’s mass', 'is_correct' => false],
                            ['choice_text' => 'It removes gravity from the problem', 'is_correct' => false],
                            ['choice_text' => 'It guarantees that acceleration is zero', 'is_correct' => false],
                        ],
                        'explanation' => 'A free-body diagram organizes the forces that must be included in the force balance.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Weight and Normal Force
            // ============================================================

            [
                'title' => 'Weight and Normal Force',
                'description' => 'Study of gravitational force, contact forces and equilibrium on simple surfaces.',
                'questions' => [

                    [
                        'question' => 'What is the weight of an object near Earth’s surface?',
                        'choices' => [
                            ['choice_text' => 'The gravitational force exerted by Earth on the object', 'is_correct' => true],
                            ['choice_text' => 'The mass of the object', 'is_correct' => false],
                            ['choice_text' => 'The normal force exerted by a surface', 'is_correct' => false],
                            ['choice_text' => 'The object’s kinetic energy', 'is_correct' => false],
                        ],
                        'explanation' => 'Weight is the gravitational force acting on an object, approximately mg near Earth’s surface.',
                    ],

                    [
                        'question' => 'What is the approximate value of g near Earth’s surface?',
                        'choices' => [
                            ['choice_text' => '9,8 m/s²', 'is_correct' => true],
                            ['choice_text' => '98 m/s²', 'is_correct' => false],
                            ['choice_text' => '0,98 m/s²', 'is_correct' => false],
                            ['choice_text' => '9,8 km/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'The gravitational acceleration near Earth’s surface is approximately 9,8 m/s².',
                    ],

                    [
                        'question' => 'What is the formula for the weight of a mass m near Earth’s surface?',
                        'choices' => [
                            ['choice_text' => 'W = mg', 'is_correct' => true],
                            ['choice_text' => 'W = m/g', 'is_correct' => false],
                            ['choice_text' => 'W = g/m', 'is_correct' => false],
                            ['choice_text' => 'W = mv', 'is_correct' => false],
                        ],
                        'explanation' => 'The weight magnitude is W = mg.',
                    ],

                    [
                        'question' => 'What is the SI unit of weight?',
                        'choices' => [
                            ['choice_text' => 'Newton', 'is_correct' => true],
                            ['choice_text' => 'Kilogram', 'is_correct' => false],
                            ['choice_text' => 'Meter per second', 'is_correct' => false],
                            ['choice_text' => 'Joule per kilogram', 'is_correct' => false],
                        ],
                        'explanation' => 'Weight is a force, so its SI unit is the newton.',
                    ],

                    [
                        'question' => 'A 10 kg object is near Earth’s surface. What is its approximate weight?',
                        'choices' => [
                            ['choice_text' => '98 N', 'is_correct' => true],
                            ['choice_text' => '9,8 N', 'is_correct' => false],
                            ['choice_text' => '980 N', 'is_correct' => false],
                            ['choice_text' => '10 N', 'is_correct' => false],
                        ],
                        'explanation' => 'W = mg = 10 × 9,8 = 98 N.',
                    ],

                    [
                        'question' => 'What is the normal force?',
                        'choices' => [
                            ['choice_text' => 'A contact force perpendicular to a surface', 'is_correct' => true],
                            ['choice_text' => 'A force always parallel to a surface', 'is_correct' => false],
                            ['choice_text' => 'The same thing as weight', 'is_correct' => false],
                            ['choice_text' => 'A gravitational force between planets', 'is_correct' => false],
                        ],
                        'explanation' => 'The normal force acts perpendicular to the contact surface.',
                    ],

                    [
                        'question' => 'A book rests on a horizontal table and is not accelerating vertically. What is the relation between the normal force N and its weight W?',
                        'choices' => [
                            ['choice_text' => 'N = W', 'is_correct' => true],
                            ['choice_text' => 'N = 0', 'is_correct' => false],
                            ['choice_text' => 'N = 2W', 'is_correct' => false],
                            ['choice_text' => 'N = W/2', 'is_correct' => false],
                        ],
                        'explanation' => 'Vertical equilibrium requires the upward normal force to balance the downward weight.',
                    ],

                    [
                        'question' => 'Does an object necessarily have a normal force acting on it whenever gravity acts?',
                        'choices' => [
                            ['choice_text' => 'No, a normal force requires contact with a surface', 'is_correct' => true],
                            ['choice_text' => 'Yes, always', 'is_correct' => false],
                            ['choice_text' => 'Yes, but only in vacuum', 'is_correct' => false],
                            ['choice_text' => 'Only moving objects experience normal force', 'is_correct' => false],
                        ],
                        'explanation' => 'An object in free fall can experience gravity without a normal contact force.',
                    ],

                    [
                        'question' => 'Why can the normal force differ from the object’s weight on an accelerating elevator?',
                        'choices' => [
                            ['choice_text' => 'The vertical net force may no longer be zero', 'is_correct' => true],
                            ['choice_text' => 'Gravity disappears inside an elevator', 'is_correct' => false],
                            ['choice_text' => 'Mass changes whenever the elevator accelerates', 'is_correct' => false],
                            ['choice_text' => 'The normal force is always equal to mass', 'is_correct' => false],
                        ],
                        'explanation' => 'Newton’s second law allows N and mg to differ whenever there is vertical acceleration.',
                    ],

                    [
                        'question' => 'An object is suspended motionless by a single vertical cable. If air resistance is neglected, the cable tension is...',
                        'choices' => [
                            ['choice_text' => 'Equal in magnitude to the object’s weight', 'is_correct' => true],
                            ['choice_text' => 'Zero', 'is_correct' => false],
                            ['choice_text' => 'Twice the weight', 'is_correct' => false],
                            ['choice_text' => 'Equal to the object’s mass', 'is_correct' => false],
                        ],
                        'explanation' => 'For vertical equilibrium, the upward tension balances the downward weight.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Friction
            // ============================================================

            [
                'title' => 'Friction Forces',
                'description' => 'Introduction to static friction, kinetic friction and simple applications on surfaces.',
                'questions' => [

                    [
                        'question' => 'What is friction?',
                        'choices' => [
                            ['choice_text' => 'A contact force that opposes relative motion or the tendency of relative motion', 'is_correct' => true],
                            ['choice_text' => 'A gravitational force', 'is_correct' => false],
                            ['choice_text' => 'A force that always accelerates an object', 'is_correct' => false],
                            ['choice_text' => 'A force acting only in vacuum', 'is_correct' => false],
                        ],
                        'explanation' => 'Friction acts at contact interfaces and opposes relative sliding or its tendency.',
                    ],

                    [
                        'question' => 'What is the direction of kinetic friction on a sliding object?',
                        'choices' => [
                            ['choice_text' => 'Opposite the direction of relative sliding', 'is_correct' => true],
                            ['choice_text' => 'Always upward', 'is_correct' => false],
                            ['choice_text' => 'Always in the direction of motion', 'is_correct' => false],
                            ['choice_text' => 'Always perpendicular to the surface', 'is_correct' => false],
                        ],
                        'explanation' => 'Kinetic friction opposes the relative sliding motion at the contact.',
                    ],

                    [
                        'question' => 'Which expression is commonly used for the magnitude of kinetic friction?',
                        'choices' => [
                            ['choice_text' => 'f_k = μ_kN', 'is_correct' => true],
                            ['choice_text' => 'f_k = μ_k/N', 'is_correct' => false],
                            ['choice_text' => 'f_k = N/μ_k', 'is_correct' => false],
                            ['choice_text' => 'f_k = μ_k + N', 'is_correct' => false],
                        ],
                        'explanation' => 'For the simple Coulomb friction model, kinetic friction has magnitude μ_kN.',
                    ],

                    [
                        'question' => 'What distinguishes static friction from kinetic friction?',
                        'choices' => [
                            ['choice_text' => 'Static friction acts when surfaces do not slide relative to each other', 'is_correct' => true],
                            ['choice_text' => 'Static friction exists only in liquids', 'is_correct' => false],
                            ['choice_text' => 'Kinetic friction acts only at rest', 'is_correct' => false],
                            ['choice_text' => 'There is no difference between them', 'is_correct' => false],
                        ],
                        'explanation' => 'Static friction prevents relative sliding until its maximum value is exceeded.',
                    ],

                    [
                        'question' => 'What is the maximum static friction in the simple Coulomb model?',
                        'choices' => [
                            ['choice_text' => 'f_s,max = μ_sN', 'is_correct' => true],
                            ['choice_text' => 'f_s,max = μ_s/N', 'is_correct' => false],
                            ['choice_text' => 'f_s,max = N/μ_s', 'is_correct' => false],
                            ['choice_text' => 'f_s,max = μ_s + N', 'is_correct' => false],
                        ],
                        'explanation' => 'Static friction adjusts as needed up to the limiting value μ_sN.',
                    ],

                    [
                        'question' => 'A block rests on a horizontal surface with no horizontal forces applied. What is its static friction force?',
                        'choices' => [
                            ['choice_text' => 'Zero', 'is_correct' => true],
                            ['choice_text' => 'Equal to μ_sN automatically', 'is_correct' => false],
                            ['choice_text' => 'Equal to its weight', 'is_correct' => false],
                            ['choice_text' => 'Equal to its mass', 'is_correct' => false],
                        ],
                        'explanation' => 'Static friction is not necessarily at its maximum; it is only as large as required to prevent slipping.',
                    ],

                    [
                        'question' => 'A horizontal force of 10 N acts on a block and static friction provides 10 N in the opposite direction. What is the net horizontal force?',
                        'choices' => [
                            ['choice_text' => '0 N', 'is_correct' => true],
                            ['choice_text' => '20 N', 'is_correct' => false],
                            ['choice_text' => '10 N', 'is_correct' => false],
                            ['choice_text' => '5 N', 'is_correct' => false],
                        ],
                        'explanation' => 'The two horizontal forces cancel exactly.',
                    ],

                    [
                        'question' => 'If the normal force doubles while μ_k stays constant, the kinetic friction magnitude becomes...',
                        'choices' => [
                            ['choice_text' => 'Twice as large', 'is_correct' => true],
                            ['choice_text' => 'Half as large', 'is_correct' => false],
                            ['choice_text' => 'Four times as large', 'is_correct' => false],
                            ['choice_text' => 'Unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Since f_k = μ_kN, kinetic friction is directly proportional to N.',
                    ],

                    [
                        'question' => 'Why is static friction often described as a self-adjusting force?',
                        'choices' => [
                            ['choice_text' => 'Its magnitude changes as needed to oppose impending relative motion up to a maximum value', 'is_correct' => true],
                            ['choice_text' => 'It always has the same magnitude', 'is_correct' => false],
                            ['choice_text' => 'It always equals the weight', 'is_correct' => false],
                            ['choice_text' => 'It acts only when an object is already sliding', 'is_correct' => false],
                        ],
                        'explanation' => 'Static friction can take different values depending on the applied force, up to μ_sN.',
                    ],

                    [
                        'question' => 'Why can friction be useful rather than always undesirable?',
                        'choices' => [
                            ['choice_text' => 'It allows traction, walking, braking and controlled motion', 'is_correct' => true],
                            ['choice_text' => 'It eliminates gravity', 'is_correct' => false],
                            ['choice_text' => 'It makes all surfaces perfectly smooth', 'is_correct' => false],
                            ['choice_text' => 'It always increases mechanical energy', 'is_correct' => false],
                        ],
                        'explanation' => 'Friction is essential for many everyday mechanical interactions, including walking and braking.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Tension and Connected Bodies
            // ============================================================

            [
                'title' => 'Tension and Connected Bodies',
                'description' => 'Simple systems involving ropes, tensions, pulleys and connected objects.',
                'questions' => [

                    [
                        'question' => 'What is tension?',
                        'choices' => [
                            ['choice_text' => 'A pulling force transmitted through a stretched rope, cable or string', 'is_correct' => true],
                            ['choice_text' => 'A force that can only push objects', 'is_correct' => false],
                            ['choice_text' => 'A gravitational field', 'is_correct' => false],
                            ['choice_text' => 'A type of friction', 'is_correct' => false],
                        ],
                        'explanation' => 'Tension is a pulling force transmitted by an ideal flexible connector.',
                    ],

                    [
                        'question' => 'In an ideal massless rope over a frictionless pulley, the tension is generally...',
                        'choices' => [
                            ['choice_text' => 'The same throughout the rope', 'is_correct' => true],
                            ['choice_text' => 'Zero everywhere', 'is_correct' => false],
                            ['choice_text' => 'Always different on each side', 'is_correct' => false],
                            ['choice_text' => 'Equal to the mass of the rope', 'is_correct' => false],
                        ],
                        'explanation' => 'For an ideal massless rope and frictionless pulley, the tension has the same magnitude throughout the rope.',
                    ],

                    [
                        'question' => 'Two identical masses hang motionless from a single vertical rope. If each mass weighs 50 N, what is the tension above both masses?',
                        'choices' => [
                            ['choice_text' => '100 N', 'is_correct' => true],
                            ['choice_text' => '50 N', 'is_correct' => false],
                            ['choice_text' => '25 N', 'is_correct' => false],
                            ['choice_text' => '150 N', 'is_correct' => false],
                        ],
                        'explanation' => 'The upper rope segment supports both weights, so T = 50 + 50 = 100 N.',
                    ],

                    [
                        'question' => 'A 5 kg object hangs motionless from a vertical ideal rope near Earth. What is the rope tension?',
                        'choices' => [
                            ['choice_text' => '49 N', 'is_correct' => true],
                            ['choice_text' => '5 N', 'is_correct' => false],
                            ['choice_text' => '9,8 N', 'is_correct' => false],
                            ['choice_text' => '98 N', 'is_correct' => false],
                        ],
                        'explanation' => 'For equilibrium, T = mg = 5 × 9,8 = 49 N.',
                    ],

                    [
                        'question' => 'A hanging object accelerates upward. Compared with its weight, the tension in the supporting rope is...',
                        'choices' => [
                            ['choice_text' => 'Greater than the weight', 'is_correct' => true],
                            ['choice_text' => 'Less than the weight', 'is_correct' => false],
                            ['choice_text' => 'Always equal to the weight', 'is_correct' => false],
                            ['choice_text' => 'Always zero', 'is_correct' => false],
                        ],
                        'explanation' => 'For upward acceleration, T - mg = ma, so T > mg.',
                    ],

                    [
                        'question' => 'A hanging object accelerates downward. Compared with its weight, the rope tension is generally...',
                        'choices' => [
                            ['choice_text' => 'Less than the weight', 'is_correct' => true],
                            ['choice_text' => 'Greater than the weight', 'is_correct' => false],
                            ['choice_text' => 'Always equal to the weight', 'is_correct' => false],
                            ['choice_text' => 'Always greater than 2mg', 'is_correct' => false],
                        ],
                        'explanation' => 'For downward acceleration, mg - T = ma, so T < mg.',
                    ],

                    [
                        'question' => 'In an Atwood machine with unequal masses connected by an ideal rope, the heavier mass tends to...',
                        'choices' => [
                            ['choice_text' => 'Move downward', 'is_correct' => true],
                            ['choice_text' => 'Move upward', 'is_correct' => false],
                            ['choice_text' => 'Remain automatically at rest', 'is_correct' => false],
                            ['choice_text' => 'Move horizontally', 'is_correct' => false],
                        ],
                        'explanation' => 'The larger gravitational force causes the heavier mass to accelerate downward.',
                    ],

                    [
                        'question' => 'Why do connected objects often have the same magnitude of acceleration in an ideal rope system?',
                        'choices' => [
                            ['choice_text' => 'The rope is treated as inextensible, imposing a geometric constraint', 'is_correct' => true],
                            ['choice_text' => 'Gravity is identical for all objects', 'is_correct' => false],
                            ['choice_text' => 'The masses must be equal', 'is_correct' => false],
                            ['choice_text' => 'The rope creates no forces', 'is_correct' => false],
                        ],
                        'explanation' => 'An inextensible rope constrains the motions of connected bodies.',
                    ],

                    [
                        'question' => 'Why must forces be analyzed separately for each object in a connected-body problem?',
                        'choices' => [
                            ['choice_text' => 'Each object has its own free-body diagram and Newton’s second-law equation', 'is_correct' => true],
                            ['choice_text' => 'All connected objects always have the same forces', 'is_correct' => false],
                            ['choice_text' => 'Tension acts only on the pulley', 'is_correct' => false],
                            ['choice_text' => 'Newton’s laws apply only to isolated objects', 'is_correct' => false],
                        ],
                        'explanation' => 'Each body is subject to its own set of external forces and must satisfy its own force balance.',
                    ],

                    [
                        'question' => 'What assumption is commonly used to make pulley problems simple in introductory dynamics?',
                        'choices' => [
                            ['choice_text' => 'The pulley is massless and frictionless', 'is_correct' => true],
                            ['choice_text' => 'The pulley has infinite mass', 'is_correct' => false],
                            ['choice_text' => 'The rope is completely rigid and immovable', 'is_correct' => false],
                            ['choice_text' => 'Gravity is neglected everywhere', 'is_correct' => false],
                        ],
                        'explanation' => 'Ideal pulley models typically neglect pulley mass and axle friction.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Inclined Planes
            // ============================================================

            [
                'title' => 'Inclined Planes',
                'description' => 'Analysis of forces on inclined surfaces with and without friction.',
                'questions' => [

                    [
                        'question' => 'What force component tends to pull a block down an inclined plane?',
                        'choices' => [
                            ['choice_text' => 'The component of gravity parallel to the plane', 'is_correct' => true],
                            ['choice_text' => 'The normal force', 'is_correct' => false],
                            ['choice_text' => 'The horizontal component of tension only', 'is_correct' => false],
                            ['choice_text' => 'The weight component perpendicular to the plane', 'is_correct' => false],
                        ],
                        'explanation' => 'The component of weight parallel to the slope is mg sinθ for an incline angle θ.',
                    ],

                    [
                        'question' => 'For a frictionless incline of angle θ, what is the component of weight parallel to the surface?',
                        'choices' => [
                            ['choice_text' => 'mg sinθ', 'is_correct' => true],
                            ['choice_text' => 'mg cosθ', 'is_correct' => false],
                            ['choice_text' => 'mg tanθ', 'is_correct' => false],
                            ['choice_text' => 'mg/ sinθ', 'is_correct' => false],
                        ],
                        'explanation' => 'With the usual coordinate choice, the component parallel to the incline is mg sinθ.',
                    ],

                    [
                        'question' => 'For a frictionless incline of angle θ, what is the component of weight perpendicular to the surface?',
                        'choices' => [
                            ['choice_text' => 'mg cosθ', 'is_correct' => true],
                            ['choice_text' => 'mg sinθ', 'is_correct' => false],
                            ['choice_text' => 'mg tanθ', 'is_correct' => false],
                            ['choice_text' => 'mg/cosθ', 'is_correct' => false],
                        ],
                        'explanation' => 'The component perpendicular to the incline is mg cosθ.',
                    ],

                    [
                        'question' => 'For a block on a frictionless incline, what is the normal force?',
                        'choices' => [
                            ['choice_text' => 'N = mg cosθ', 'is_correct' => true],
                            ['choice_text' => 'N = mg sinθ', 'is_correct' => false],
                            ['choice_text' => 'N = mg tanθ', 'is_correct' => false],
                            ['choice_text' => 'N = mg', 'is_correct' => false],
                        ],
                        'explanation' => 'There is no acceleration perpendicular to the plane, so N balances mg cosθ.',
                    ],

                    [
                        'question' => 'What happens to the component of gravity parallel to the incline when θ increases?',
                        'choices' => [
                            ['choice_text' => 'It increases', 'is_correct' => true],
                            ['choice_text' => 'It decreases', 'is_correct' => false],
                            ['choice_text' => 'It always becomes zero', 'is_correct' => false],
                            ['choice_text' => 'It remains unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'The parallel component is mg sinθ, which increases as θ increases from 0° to 90°.',
                    ],

                    [
                        'question' => 'At θ = 0°, what is the parallel component of gravity on a surface?',
                        'choices' => [
                            ['choice_text' => 'Zero', 'is_correct' => true],
                            ['choice_text' => 'mg', 'is_correct' => false],
                            ['choice_text' => 'mg/2', 'is_correct' => false],
                            ['choice_text' => '2mg', 'is_correct' => false],
                        ],
                        'explanation' => 'mg sin0° = 0, so there is no component of gravity along a horizontal surface.',
                    ],

                    [
                        'question' => 'At θ = 90°, what is the magnitude of the component of gravity parallel to the surface in the idealized limit?',
                        'choices' => [
                            ['choice_text' => 'mg', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'mg/2', 'is_correct' => false],
                            ['choice_text' => 'mg cos90° = mg', 'is_correct' => false],
                        ],
                        'explanation' => 'mg sin90° = mg. The perpendicular component becomes zero in this limit.',
                    ],

                    [
                        'question' => 'Why is the coordinate system often chosen with one axis parallel to an inclined plane?',
                        'choices' => [
                            ['choice_text' => 'It simplifies the decomposition of forces and the application of Newton’s second law', 'is_correct' => true],
                            ['choice_text' => 'It removes gravity from the problem', 'is_correct' => false],
                            ['choice_text' => 'It makes all forces equal', 'is_correct' => false],
                            ['choice_text' => 'It guarantees zero acceleration', 'is_correct' => false],
                        ],
                        'explanation' => 'Choosing axes along and perpendicular to the surface makes the force components easier to analyze.',
                    ],

                    [
                        'question' => 'A 2 kg block is on a frictionless incline of 30°. What is the component of its weight parallel to the incline?',
                        'choices' => [
                            ['choice_text' => '9,8 N', 'is_correct' => true],
                            ['choice_text' => '19,6 N', 'is_correct' => false],
                            ['choice_text' => '4,9 N', 'is_correct' => false],
                            ['choice_text' => '17,0 N', 'is_correct' => false],
                        ],
                        'explanation' => 'mg sin30° = 2 × 9,8 × 0,5 = 9,8 N.',
                    ],

                    [
                        'question' => 'Why can a block remain at rest on an inclined plane when friction is present?',
                        'choices' => [
                            ['choice_text' => 'Static friction can balance the component of gravity parallel to the plane', 'is_correct' => true],
                            ['choice_text' => 'Gravity disappears on an incline', 'is_correct' => false],
                            ['choice_text' => 'The normal force always acts parallel to the incline', 'is_correct' => false],
                            ['choice_text' => 'The block has no mass', 'is_correct' => false],
                        ],
                        'explanation' => 'Static friction can oppose the downslope component of weight up to its maximum value.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Circular Motion
            // ============================================================

            [
                'title' => 'Circular Motion and Centripetal Force',
                'description' => 'Introduction to the dynamics of objects moving along circular paths.',
                'questions' => [

                    [
                        'question' => 'What is centripetal acceleration?',
                        'choices' => [
                            ['choice_text' => 'An acceleration directed toward the center of the circular path', 'is_correct' => true],
                            ['choice_text' => 'An acceleration directed away from the center', 'is_correct' => false],
                            ['choice_text' => 'An acceleration that is always zero', 'is_correct' => false],
                            ['choice_text' => 'An acceleration tangent to the path only', 'is_correct' => false],
                        ],
                        'explanation' => 'For circular motion, centripetal acceleration points toward the center.',
                    ],

                    [
                        'question' => 'What is the magnitude of centripetal acceleration for uniform circular motion?',
                        'choices' => [
                            ['choice_text' => 'a_c = v²/r', 'is_correct' => true],
                            ['choice_text' => 'a_c = vr', 'is_correct' => false],
                            ['choice_text' => 'a_c = r/v²', 'is_correct' => false],
                            ['choice_text' => 'a_c = v/r²', 'is_correct' => false],
                        ],
                        'explanation' => 'The centripetal acceleration magnitude is v²/r.',
                    ],

                    [
                        'question' => 'What is the corresponding centripetal force magnitude?',
                        'choices' => [
                            ['choice_text' => 'F_c = mv²/r', 'is_correct' => true],
                            ['choice_text' => 'F_c = mr/v²', 'is_correct' => false],
                            ['choice_text' => 'F_c = mvr', 'is_correct' => false],
                            ['choice_text' => 'F_c = v²/(mr)', 'is_correct' => false],
                        ],
                        'explanation' => 'Newton’s second law gives F_c = ma_c = mv²/r.',
                    ],

                    [
                        'question' => 'Is centripetal force necessarily a new type of fundamental force?',
                        'choices' => [
                            ['choice_text' => 'No, it is the net inward force responsible for circular motion', 'is_correct' => true],
                            ['choice_text' => 'Yes, it is always a separate force', 'is_correct' => false],
                            ['choice_text' => 'Yes, and it exists only in space', 'is_correct' => false],
                            ['choice_text' => 'No, because circular motion requires no force', 'is_correct' => false],
                        ],
                        'explanation' => '“Centripetal force” is a role played by the net inward force, which may be tension, gravity, friction or another force.',
                    ],

                    [
                        'question' => 'If the speed of an object in circular motion doubles while radius stays constant, centripetal acceleration becomes...',
                        'choices' => [
                            ['choice_text' => 'Four times as large', 'is_correct' => true],
                            ['choice_text' => 'Twice as large', 'is_correct' => false],
                            ['choice_text' => 'Half as large', 'is_correct' => false],
                            ['choice_text' => 'Unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Since a_c = v²/r, doubling v multiplies acceleration by four.',
                    ],

                    [
                        'question' => 'If the radius doubles while speed remains constant, centripetal acceleration becomes...',
                        'choices' => [
                            ['choice_text' => 'Half as large', 'is_correct' => true],
                            ['choice_text' => 'Twice as large', 'is_correct' => false],
                            ['choice_text' => 'Four times as large', 'is_correct' => false],
                            ['choice_text' => 'Unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Since a_c = v²/r, doubling r halves the acceleration.',
                    ],

                    [
                        'question' => 'In uniform circular motion, the speed is constant but the velocity is...',
                        'choices' => [
                            ['choice_text' => 'Changing because its direction changes', 'is_correct' => true],
                            ['choice_text' => 'Constant in both magnitude and direction', 'is_correct' => false],
                            ['choice_text' => 'Always zero', 'is_correct' => false],
                            ['choice_text' => 'Changing only because its magnitude changes', 'is_correct' => false],
                        ],
                        'explanation' => 'Velocity is a vector, so a change in direction means velocity changes even when speed is constant.',
                    ],

                    [
                        'question' => 'What provides the centripetal force for an object attached to a string moving in a circle on a horizontal surface when other horizontal forces are negligible?',
                        'choices' => [
                            ['choice_text' => 'The tension in the string', 'is_correct' => true],
                            ['choice_text' => 'The object’s weight', 'is_correct' => false],
                            ['choice_text' => 'The normal force', 'is_correct' => false],
                            ['choice_text' => 'Air pressure only', 'is_correct' => false],
                        ],
                        'explanation' => 'The inward tension supplies the required centripetal force.',
                    ],

                    [
                        'question' => 'Why is the centripetal acceleration perpendicular to the instantaneous velocity in uniform circular motion?',
                        'choices' => [
                            ['choice_text' => 'It changes the direction of velocity without changing its magnitude', 'is_correct' => true],
                            ['choice_text' => 'It increases the speed continuously', 'is_correct' => false],
                            ['choice_text' => 'It is always parallel to velocity', 'is_correct' => false],
                            ['choice_text' => 'The velocity is zero at every point', 'is_correct' => false],
                        ],
                        'explanation' => 'A radial acceleration changes the direction of the velocity while preserving speed in uniform circular motion.',
                    ],

                    [
                        'question' => 'An object of mass 2 kg moves at 4 m/s in a circle of radius 2 m. What is the required centripetal force?',
                        'choices' => [
                            ['choice_text' => '16 N', 'is_correct' => true],
                            ['choice_text' => '8 N', 'is_correct' => false],
                            ['choice_text' => '4 N', 'is_correct' => false],
                            ['choice_text' => '32 N', 'is_correct' => false],
                        ],
                        'explanation' => 'F_c = mv²/r = 2 × 16 / 2 = 16 N.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Equilibrium and Applications
            // ============================================================

            [
                'title' => 'Mechanical Equilibrium',
                'description' => 'Analysis of translational equilibrium and simple force-balance situations.',
                'questions' => [

                    [
                        'question' => 'What condition must be satisfied for translational equilibrium?',
                        'choices' => [
                            ['choice_text' => 'The net force must be zero', 'is_correct' => true],
                            ['choice_text' => 'The object must have zero mass', 'is_correct' => false],
                            ['choice_text' => 'The velocity must be zero in every reference frame', 'is_correct' => false],
                            ['choice_text' => 'The acceleration must be maximum', 'is_correct' => false],
                        ],
                        'explanation' => 'Translational equilibrium requires ΣF = 0.',
                    ],

                    [
                        'question' => 'Can an object be in equilibrium while moving?',
                        'choices' => [
                            ['choice_text' => 'Yes, if it moves with constant velocity in an inertial frame', 'is_correct' => true],
                            ['choice_text' => 'No, equilibrium always means rest', 'is_correct' => false],
                            ['choice_text' => 'Only if its mass is zero', 'is_correct' => false],
                            ['choice_text' => 'Only if gravity is absent', 'is_correct' => false],
                        ],
                        'explanation' => 'Zero net force means zero acceleration, not necessarily zero velocity.',
                    ],

                    [
                        'question' => 'A lamp hangs motionless from two vertical-support arrangements. What must be true for equilibrium?',
                        'choices' => [
                            ['choice_text' => 'The upward force components must balance the downward weight', 'is_correct' => true],
                            ['choice_text' => 'The lamp must have zero weight', 'is_correct' => false],
                            ['choice_text' => 'All forces must point in the same direction', 'is_correct' => false],
                            ['choice_text' => 'The tensions must always be zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Equilibrium requires the vector sum of all forces to vanish.',
                    ],

                    [
                        'question' => 'Why must horizontal and vertical force components often be treated separately?',
                        'choices' => [
                            ['choice_text' => 'The vector equation ΣF = 0 can be resolved into independent component equations', 'is_correct' => true],
                            ['choice_text' => 'Forces are not vectors', 'is_correct' => false],
                            ['choice_text' => 'Gravity acts only horizontally', 'is_correct' => false],
                            ['choice_text' => 'Component analysis removes all unknown forces', 'is_correct' => false],
                        ],
                        'explanation' => 'In Cartesian coordinates, equilibrium gives separate equations for each independent direction.',
                    ],

                    [
                        'question' => 'Two horizontal forces of 15 N and 9 N act in opposite directions on an object. What is the net horizontal force?',
                        'choices' => [
                            ['choice_text' => '6 N toward the 15 N force', 'is_correct' => true],
                            ['choice_text' => '24 N toward the 15 N force', 'is_correct' => false],
                            ['choice_text' => '6 N toward the 9 N force', 'is_correct' => false],
                            ['choice_text' => '0 N', 'is_correct' => false],
                        ],
                        'explanation' => 'The forces oppose each other, so 15 - 9 = 6 N toward the larger force.',
                    ],

                    [
                        'question' => 'A 3 kg object has a horizontal acceleration of 2 m/s². What is the net horizontal force?',
                        'choices' => [
                            ['choice_text' => '6 N', 'is_correct' => true],
                            ['choice_text' => '1,5 N', 'is_correct' => false],
                            ['choice_text' => '5 N', 'is_correct' => false],
                            ['choice_text' => '9,8 N', 'is_correct' => false],
                        ],
                        'explanation' => 'F_net = ma = 3 × 2 = 6 N.',
                    ],

                    [
                        'question' => 'Why is an object with zero acceleration not necessarily subject to zero individual forces?',
                        'choices' => [
                            ['choice_text' => 'Different forces can balance each other so that their vector sum is zero', 'is_correct' => true],
                            ['choice_text' => 'Forces disappear whenever acceleration is zero', 'is_correct' => false],
                            ['choice_text' => 'Only gravity can act on stationary objects', 'is_correct' => false],
                            ['choice_text' => 'Mass cancels all forces automatically', 'is_correct' => false],
                        ],
                        'explanation' => 'Equilibrium concerns the net force, not each individual force.',
                    ],

                    [
                        'question' => 'A person pushes a wall with 100 N. According to Newton’s third law, the wall exerts on the person...',
                        'choices' => [
                            ['choice_text' => 'A 100 N force in the opposite direction', 'is_correct' => true],
                            ['choice_text' => 'A 50 N force in the same direction', 'is_correct' => false],
                            ['choice_text' => 'No force', 'is_correct' => false],
                            ['choice_text' => 'A force equal to the person’s weight', 'is_correct' => false],
                        ],
                        'explanation' => 'The action-reaction pair has equal magnitude and opposite direction.',
                    ],

                    [
                        'question' => 'Why do action-reaction forces not cancel each other in a free-body diagram for one object?',
                        'choices' => [
                            ['choice_text' => 'They act on different objects', 'is_correct' => true],
                            ['choice_text' => 'They are never equal', 'is_correct' => false],
                            ['choice_text' => 'They always point in the same direction', 'is_correct' => false],
                            ['choice_text' => 'Newton’s third law applies only in equilibrium', 'is_correct' => false],
                        ],
                        'explanation' => 'Newton’s third-law forces form a pair acting on two different bodies.',
                    ],

                    [
                        'question' => 'Why is a clear choice of positive direction useful when solving force problems?',
                        'choices' => [
                            ['choice_text' => 'It allows force components and acceleration to be assigned consistent signs', 'is_correct' => true],
                            ['choice_text' => 'It changes the actual physical forces', 'is_correct' => false],
                            ['choice_text' => 'It eliminates the need for Newton’s laws', 'is_correct' => false],
                            ['choice_text' => 'It guarantees positive acceleration', 'is_correct' => false],
                        ],
                        'explanation' => 'A consistent sign convention prevents algebraic errors when writing Newton’s second law.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Dynamics Problem Solving
            // ============================================================

            [
                'title' => 'Introduction to Dynamics Problem Solving',
                'description' => 'Integrated beginner problems combining forces, acceleration, friction, gravity and circular motion.',
                'questions' => [

                    [
                        'question' => 'A 4 kg object is pushed by a net horizontal force of 12 N. What is its acceleration?',
                        'choices' => [
                            ['choice_text' => '3 m/s²', 'is_correct' => true],
                            ['choice_text' => '48 m/s²', 'is_correct' => false],
                            ['choice_text' => '0,33 m/s²', 'is_correct' => false],
                            ['choice_text' => '16 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a = F_net/m = 12/4 = 3 m/s².',
                    ],

                    [
                        'question' => 'A 6 kg object is pulled horizontally by 30 N while friction opposes the motion with 6 N. What is the net force?',
                        'choices' => [
                            ['choice_text' => '24 N', 'is_correct' => true],
                            ['choice_text' => '36 N', 'is_correct' => false],
                            ['choice_text' => '5 N', 'is_correct' => false],
                            ['choice_text' => '180 N', 'is_correct' => false],
                        ],
                        'explanation' => 'The net force is 30 - 6 = 24 N in the pulling direction.',
                    ],

                    [
                        'question' => 'For the object in the previous question, what is its acceleration?',
                        'choices' => [
                            ['choice_text' => '4 m/s²', 'is_correct' => true],
                            ['choice_text' => '5 m/s²', 'is_correct' => false],
                            ['choice_text' => '24 m/s²', 'is_correct' => false],
                            ['choice_text' => '0,25 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a = F_net/m = 24/6 = 4 m/s².',
                    ],

                    [
                        'question' => 'A 2 kg object is lifted vertically upward with acceleration 3 m/s². What is the required tension in the ideal rope?',
                        'choices' => [
                            ['choice_text' => '25,6 N', 'is_correct' => true],
                            ['choice_text' => '19,6 N', 'is_correct' => false],
                            ['choice_text' => '6 N', 'is_correct' => false],
                            ['choice_text' => '13,6 N', 'is_correct' => false],
                        ],
                        'explanation' => 'T - mg = ma, so T = m(g + a) = 2(9,8 + 3) = 25,6 N.',
                    ],

                    [
                        'question' => 'A 5 kg block slides on a horizontal surface with μ_k = 0,2. Taking g = 9,8 m/s², what is the kinetic friction magnitude?',
                        'choices' => [
                            ['choice_text' => '9,8 N', 'is_correct' => true],
                            ['choice_text' => '2 N', 'is_correct' => false],
                            ['choice_text' => '49 N', 'is_correct' => false],
                            ['choice_text' => '0,98 N', 'is_correct' => false],
                        ],
                        'explanation' => 'N = mg = 49 N, so f_k = μ_kN = 0,2 × 49 = 9,8 N.',
                    ],

                    [
                        'question' => 'A 1 kg object moves at 10 m/s in a circular path of radius 5 m. What centripetal force is required?',
                        'choices' => [
                            ['choice_text' => '20 N', 'is_correct' => true],
                            ['choice_text' => '2 N', 'is_correct' => false],
                            ['choice_text' => '50 N', 'is_correct' => false],
                            ['choice_text' => '100 N', 'is_correct' => false],
                        ],
                        'explanation' => 'F_c = mv²/r = 1 × 100 / 5 = 20 N.',
                    ],

                    [
                        'question' => 'A 10 kg object is at rest on a horizontal table. What is the magnitude of the normal force, assuming no other vertical forces act?',
                        'choices' => [
                            ['choice_text' => '98 N', 'is_correct' => true],
                            ['choice_text' => '10 N', 'is_correct' => false],
                            ['choice_text' => '9,8 N', 'is_correct' => false],
                            ['choice_text' => '196 N', 'is_correct' => false],
                        ],
                        'explanation' => 'Vertical equilibrium gives N = mg = 10 × 9,8 = 98 N.',
                    ],

                    [
                        'question' => 'Why is the first step in many dynamics problems to identify the forces acting on the object?',
                        'choices' => [
                            ['choice_text' => 'Newton’s second law requires the vector sum of the relevant forces', 'is_correct' => true],
                            ['choice_text' => 'Forces can be ignored after acceleration is known', 'is_correct' => false],
                            ['choice_text' => 'Velocity always determines every force', 'is_correct' => false],
                            ['choice_text' => 'Mass cannot be measured directly', 'is_correct' => false],
                        ],
                        'explanation' => 'A correct free-body diagram and force identification are the basis for writing ΣF = ma.',
                    ],

                    [
                        'question' => 'If an object’s net force is zero, which statement is correct?',
                        'choices' => [
                            ['choice_text' => 'Its acceleration is zero', 'is_correct' => true],
                            ['choice_text' => 'Its velocity must be zero', 'is_correct' => false],
                            ['choice_text' => 'No forces act on it', 'is_correct' => false],
                            ['choice_text' => 'Its kinetic energy must be zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Zero net force means zero acceleration. The object can still have nonzero constant velocity.',
                    ],

                    [
                        'question' => 'Why is dynamics different from kinematics?',
                        'choices' => [
                            ['choice_text' => 'Dynamics studies the causes of motion through forces, while kinematics describes motion without focusing on its causes', 'is_correct' => true],
                            ['choice_text' => 'Dynamics studies only position while kinematics studies only force', 'is_correct' => false],
                            ['choice_text' => 'They are exactly the same topic', 'is_correct' => false],
                            ['choice_text' => 'Kinematics includes Newton’s laws while dynamics excludes them', 'is_correct' => false],
                        ],
                        'explanation' => 'Kinematics describes motion variables, whereas dynamics connects motion to forces and mass.',
                    ],
                ],
            ],
        ];

        // ================================================================
        // QUIZ SETTINGS
        // ================================================================

        $quizSettings = [
            0 => [
                'duration' => 15,
                'passing_score' => 50,
            ],
            1 => [
                'duration' => 15,
                'passing_score' => 50,
            ],
            2 => [
                'duration' => 15,
                'passing_score' => 60,
            ],
            3 => [
                'duration' => 20,
                'passing_score' => 60,
            ],
            4 => [
                'duration' => 20,
                'passing_score' => 60,
            ],
            5 => [
                'duration' => 20,
                'passing_score' => 60,
            ],
            6 => [
                'duration' => 15,
                'passing_score' => 60,
            ],
            7 => [
                'duration' => 25,
                'passing_score' => 60,
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex] ?? [
                'duration' => 15,
                'passing_score' => 50,
            ];

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings['duration'],
                    'passing_score' => $settings['passing_score'],
                    'total_marks' => count($quizData['questions']),
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
                        'explanation' => $questionData['explanation'] ?? null,
                    ]
                );

                $question->choices()->delete();

                $choices = $questionData['choices'];

                // Randomize choices while keeping is_correct attached
                // to the correct answer.
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