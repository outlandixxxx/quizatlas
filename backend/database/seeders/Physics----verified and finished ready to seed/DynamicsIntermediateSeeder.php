<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DynamicsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'dynamics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Newton's Laws and Free-Body Diagrams
            // ============================================================

            [
                'title' => 'Newton’s Laws and Free-Body Diagrams',
                'description' => 'Intermediate analysis of Newton’s laws, force balances and free-body diagrams.',
                'questions' => [

                    [
                        'question' => 'A 10 kg block is pulled by a horizontal force of 50 N while a friction force of 20 N opposes the motion. What is its acceleration?',
                        'choices' => [
                            ['choice_text' => '3 m/s²', 'is_correct' => true],
                            ['choice_text' => '5 m/s²', 'is_correct' => false],
                            ['choice_text' => '7 m/s²', 'is_correct' => false],
                            ['choice_text' => '2 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'The net force is 50 - 20 = 30 N, so a = 30/10 = 3 m/s².',
                    ],

                    [
                        'question' => 'Why should the forces acting on a body be drawn from the body itself in a free-body diagram?',
                        'choices' => [
                            ['choice_text' => 'To identify all external forces that contribute to the net force on that body', 'is_correct' => true],
                            ['choice_text' => 'To include forces exerted by the body on other objects', 'is_correct' => false],
                            ['choice_text' => 'To guarantee that all forces point in the same direction', 'is_correct' => false],
                            ['choice_text' => 'To eliminate Newton’s third law', 'is_correct' => false],
                        ],
                        'explanation' => 'A free-body diagram isolates one body and represents the external forces acting on it.',
                    ],

                    [
                        'question' => 'An object moves in a straight line at constant speed. Which statement is necessarily true?',
                        'choices' => [
                            ['choice_text' => 'The net force is zero', 'is_correct' => true],
                            ['choice_text' => 'No forces act on the object', 'is_correct' => false],
                            ['choice_text' => 'Only gravity acts on the object', 'is_correct' => false],
                            ['choice_text' => 'The object has zero momentum', 'is_correct' => false],
                        ],
                        'explanation' => 'Constant velocity means zero acceleration, so ΣF = 0.',
                    ],

                    [
                        'question' => 'A 4 kg object has an acceleration of 6 m/s². What is the magnitude of the net force?',
                        'choices' => [
                            ['choice_text' => '24 N', 'is_correct' => true],
                            ['choice_text' => '10 N', 'is_correct' => false],
                            ['choice_text' => '1,5 N', 'is_correct' => false],
                            ['choice_text' => '2,4 N', 'is_correct' => false],
                        ],
                        'explanation' => 'Newton’s second law gives F_net = ma = 4 × 6 = 24 N.',
                    ],

                    [
                        'question' => 'If two forces act on an object in opposite directions, the net force magnitude is found by...',
                        'choices' => [
                            ['choice_text' => 'Subtracting the smaller magnitude from the larger magnitude', 'is_correct' => true],
                            ['choice_text' => 'Always adding the two magnitudes', 'is_correct' => false],
                            ['choice_text' => 'Multiplying the magnitudes', 'is_correct' => false],
                            ['choice_text' => 'Dividing the magnitudes', 'is_correct' => false],
                        ],
                        'explanation' => 'Oppositely directed forces have opposite signs when summed algebraically.',
                    ],

                    [
                        'question' => 'Why does the mass of an object measure its resistance to acceleration?',
                        'choices' => [
                            ['choice_text' => 'For a given net force, a larger mass produces a smaller acceleration', 'is_correct' => true],
                            ['choice_text' => 'Mass always increases acceleration', 'is_correct' => false],
                            ['choice_text' => 'Mass determines the direction of every force', 'is_correct' => false],
                            ['choice_text' => 'Mass is identical to force', 'is_correct' => false],
                        ],
                        'explanation' => 'From a = F_net/m, greater mass means less acceleration for the same net force.',
                    ],

                    [
                        'question' => 'A 6 kg body is subjected to perpendicular forces of 8 N and 6 N. What is the magnitude of the resultant force?',
                        'choices' => [
                            ['choice_text' => '10 N', 'is_correct' => true],
                            ['choice_text' => '14 N', 'is_correct' => false],
                            ['choice_text' => '2 N', 'is_correct' => false],
                            ['choice_text' => '48 N', 'is_correct' => false],
                        ],
                        'explanation' => 'The resultant is √(8² + 6²) = √100 = 10 N.',
                    ],

                    [
                        'question' => 'Why can a stationary object still experience several nonzero forces?',
                        'choices' => [
                            ['choice_text' => 'The forces can balance so that their vector sum is zero', 'is_correct' => true],
                            ['choice_text' => 'A stationary object cannot experience forces', 'is_correct' => false],
                            ['choice_text' => 'Only magnetic forces can act on stationary objects', 'is_correct' => false],
                            ['choice_text' => 'Forces disappear at equilibrium', 'is_correct' => false],
                        ],
                        'explanation' => 'Equilibrium means zero net force, not zero individual forces.',
                    ],

                    [
                        'question' => 'Which statement correctly distinguishes mass from weight?',
                        'choices' => [
                            ['choice_text' => 'Mass is a measure of inertia, while weight is a gravitational force', 'is_correct' => true],
                            ['choice_text' => 'Mass and weight are identical physical quantities', 'is_correct' => false],
                            ['choice_text' => 'Weight is measured in kilograms', 'is_correct' => false],
                            ['choice_text' => 'Mass depends directly on local gravitational acceleration', 'is_correct' => false],
                        ],
                        'explanation' => 'Mass is measured in kilograms, while weight is a force measured in newtons.',
                    ],

                    [
                        'question' => 'Why is Newton’s second law most useful when written as a vector equation?',
                        'choices' => [
                            ['choice_text' => 'Because forces and acceleration have both magnitude and direction', 'is_correct' => true],
                            ['choice_text' => 'Because mass is a vector', 'is_correct' => false],
                            ['choice_text' => 'Because velocity is always scalar', 'is_correct' => false],
                            ['choice_text' => 'Because all forces act in one dimension', 'is_correct' => false],
                        ],
                        'explanation' => 'The vector form ΣF = ma accounts for both magnitudes and directions.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 2 — Friction and Inclined Planes
            // ============================================================

            [
                'title' => 'Friction and Inclined Planes',
                'description' => 'Intermediate problems involving static friction, kinetic friction and inclined surfaces.',
                'questions' => [

                    [
                        'question' => 'A 5 kg block slides on a horizontal surface with μk = 0,3. Taking g = 9,8 m/s², what is the kinetic friction force?',
                        'choices' => [
                            ['choice_text' => '14,7 N', 'is_correct' => true],
                            ['choice_text' => '4,9 N', 'is_correct' => false],
                            ['choice_text' => '49 N', 'is_correct' => false],
                            ['choice_text' => '1,5 N', 'is_correct' => false],
                        ],
                        'explanation' => 'N = mg = 49 N, so fk = μkN = 0,3 × 49 = 14,7 N.',
                    ],

                    [
                        'question' => 'A block remains at rest on an incline because static friction balances which component of gravity?',
                        'choices' => [
                            ['choice_text' => 'The component parallel to the incline', 'is_correct' => true],
                            ['choice_text' => 'The component perpendicular to the incline', 'is_correct' => false],
                            ['choice_text' => 'The entire weight in every direction', 'is_correct' => false],
                            ['choice_text' => 'The normal force', 'is_correct' => false],
                        ],
                        'explanation' => 'Static friction can oppose the downslope component mg sinθ.',
                    ],

                    [
                        'question' => 'For a frictionless incline at angle θ, the acceleration of a sliding block along the plane is...',
                        'choices' => [
                            ['choice_text' => 'a = g sinθ', 'is_correct' => true],
                            ['choice_text' => 'a = g cosθ', 'is_correct' => false],
                            ['choice_text' => 'a = g tanθ', 'is_correct' => false],
                            ['choice_text' => 'a = g/ sinθ', 'is_correct' => false],
                        ],
                        'explanation' => 'Along the incline, ma = mg sinθ, giving a = g sinθ.',
                    ],

                    [
                        'question' => 'For a block on a frictionless incline, how does the normal force vary as θ increases from 0° toward 90°?',
                        'choices' => [
                            ['choice_text' => 'It decreases as N = mg cosθ', 'is_correct' => true],
                            ['choice_text' => 'It increases as N = mg sinθ', 'is_correct' => false],
                            ['choice_text' => 'It remains equal to mg', 'is_correct' => false],
                            ['choice_text' => 'It becomes independent of θ', 'is_correct' => false],
                        ],
                        'explanation' => 'The perpendicular component of weight is mg cosθ, so N decreases as θ increases.',
                    ],

                    [
                        'question' => 'A block is pulled horizontally across a rough floor. If the applied force increases but the block remains at rest, static friction...',
                        'choices' => [
                            ['choice_text' => 'Increases to match the applied force until its maximum value', 'is_correct' => true],
                            ['choice_text' => 'Remains zero', 'is_correct' => false],
                            ['choice_text' => 'Always equals μsN immediately', 'is_correct' => false],
                            ['choice_text' => 'Decreases as the applied force increases', 'is_correct' => false],
                        ],
                        'explanation' => 'Static friction adjusts as needed up to fs,max = μsN.',
                    ],

                    [
                        'question' => 'A block starts sliding when the incline angle reaches θc. In the simple friction model, what relation applies at the threshold?',
                        'choices' => [
                            ['choice_text' => 'μs = tanθc', 'is_correct' => true],
                            ['choice_text' => 'μs = sinθc', 'is_correct' => false],
                            ['choice_text' => 'μs = cosθc', 'is_correct' => false],
                            ['choice_text' => 'μs = 1/tanθc', 'is_correct' => false],
                        ],
                        'explanation' => 'At impending motion, mg sinθc = μs mg cosθc, hence μs = tanθc.',
                    ],

                    [
                        'question' => 'A 10 kg block on a horizontal surface has μk = 0,2. What horizontal force is required to produce zero acceleration while it is sliding at constant speed?',
                        'choices' => [
                            ['choice_text' => '19,6 N', 'is_correct' => true],
                            ['choice_text' => '98 N', 'is_correct' => false],
                            ['choice_text' => '2 N', 'is_correct' => false],
                            ['choice_text' => '49 N', 'is_correct' => false],
                        ],
                        'explanation' => 'fk = μkmg = 0,2 × 10 × 9,8 = 19,6 N. Equal applied force gives zero net force.',
                    ],

                    [
                        'question' => 'Why can friction sometimes reduce acceleration without stopping the object immediately?',
                        'choices' => [
                            ['choice_text' => Friction opposes motion but may be smaller than the driving force', 'is_correct' => true],
                            ['choice_text' => Friction always exceeds every applied force', 'is_correct' => false],
                            ['choice_text' => Friction always points in the direction of motion', 'is_correct' => false],
                            ['choice_text' => Friction changes mass rather than force', 'is_correct' => false],
                        ],
                        'explanation' => 'If the applied force exceeds friction, the net force remains nonzero and the object accelerates.',
                    ],

                    [
                        'question' => 'A block is sliding down an incline while friction acts upward along the incline. Which force component does friction directly oppose?',
                        'choices' => [
                            ['choice_text' => The downslope component of motion-related dynamics', 'is_correct' => true],
                            ['choice_text' => 'The normal force', 'is_correct' => false],
                            ['choice_text' => 'The gravitational force perpendicular to the plane only', 'is_correct' => false],
                            ['choice_text' => 'The mass of the block', 'is_correct' => false],
                        ],
                        'explanation' => 'Friction acts opposite relative sliding, so for downward sliding it acts uphill.',
                    ],

                    [
                        'question' => 'Why is the normal force not always equal to mg on an inclined or vertically accelerating system?',
                        'choices' => [
                            ['choice_text' => 'The geometry and acceleration can make the force balance perpendicular to the surface different from mg', 'is_correct' => true],
                            ['choice_text' => 'Normal force is never related to gravity', 'is_correct' => false],
                            ['choice_text' => 'Mass changes when the object is inclined', 'is_correct' => false],
                            ['choice_text' => 'The normal force always equals zero on an incline', 'is_correct' => false],
                        ],
                        'explanation' => 'The normal force is determined by the perpendicular force balance, which depends on geometry and acceleration.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 3 — Tension and Connected Systems
            // ============================================================

            [
                'title' => 'Tension and Connected Systems',
                'description' => 'Intermediate analysis of connected bodies, pulleys and constrained motion.',
                'questions' => [

                    [
                        'question' => 'Two masses m1 and m2 are connected by an ideal rope over a frictionless pulley. Why do they have equal acceleration magnitudes?',
                        'choices' => [
                            ['choice_text' => 'The inextensible rope imposes a kinematic constraint', 'is_correct' => true],
                            ['choice_text' => 'Their masses must be equal', 'is_correct' => false],
                            ['choice_text' => 'Gravity acts with the same force on both', 'is_correct' => false],
                            ['choice_text' => 'The pulley makes every force equal', 'is_correct' => false],
                        ],
                        'explanation' => 'An inextensible rope links the displacements and accelerations of the two masses.',
                    ],

                    [
                        'question' => 'For an ideal Atwood machine with m2 > m1, which expression gives the magnitude of the acceleration?',
                        'choices' => [
                            ['choice_text' => 'a = (m2 - m1)g/(m1 + m2)', 'is_correct' => true],
                            ['choice_text' => 'a = (m1 + m2)g/(m2 - m1)', 'is_correct' => false],
                            ['choice_text' => 'a = g(m1m2)', 'is_correct' => false],
                            ['choice_text' => 'a = (m2 - m1)g', 'is_correct' => false],
                        ],
                        'explanation' => 'Applying Newton’s second law to both masses gives the standard Atwood-machine result.',
                    ],

                    [
                        'question' => 'In an ideal Atwood machine, what happens to the acceleration when the two masses become equal?',
                        'choices' => [
                            ['choice_text' => 'It becomes zero', 'is_correct' => true],
                            ['choice_text' => 'It becomes g', 'is_correct' => false],
                            ['choice_text' => 'It doubles', 'is_correct' => false],
                            ['choice_text' => 'It becomes infinite', 'is_correct' => false],
                        ],
                        'explanation' => 'Equal masses have equal opposing gravitational forces, so the net driving force is zero.',
                    ],

                    [
                        'question' => 'A 4 kg mass hangs from a rope and accelerates downward at 2 m/s². Taking g = 9,8 m/s², what is the rope tension?',
                        'choices' => [
                            ['choice_text' => '31,2 N', 'is_correct' => true],
                            ['choice_text' => '39,2 N', 'is_correct' => false],
                            ['choice_text' => '47,2 N', 'is_correct' => false],
                            ['choice_text' => '7,8 N', 'is_correct' => false],
                        ],
                        'explanation' => 'mg - T = ma, so T = m(g - a) = 4(9,8 - 2) = 31,2 N.',
                    ],

                    [
                        'question' => 'A 3 kg mass accelerates upward at 2 m/s². What is the tension in its supporting rope?',
                        'choices' => [
                            ['choice_text' => '35,4 N', 'is_correct' => true],
                            ['choice_text' => '29,4 N', 'is_correct' => false],
                            ['choice_text' => '23,4 N', 'is_correct' => false],
                            ['choice_text' => '9,8 N', 'is_correct' => false],
                        ],
                        'explanation' => 'T - mg = ma, so T = m(g + a) = 3(9,8 + 2) = 35,4 N.',
                    ],

                    [
                        'question' => 'Why is the tension not generally equal to the weight of a hanging body that is accelerating?',
                        'choices' => [
                            ['choice_text' => 'The difference T - mg must produce the body’s acceleration', 'is_correct' => true],
                            ['choice_text' => 'Weight disappears during acceleration', 'is_correct' => false],
                            ['choice_text' => 'Tension is independent of acceleration', 'is_correct' => false],
                            ['choice_text' => 'The rope has no relation to the body’s motion', 'is_correct' => false],
                        ],
                        'explanation' => 'Newton’s second law gives T - mg = ma for upward acceleration.',
                    ],

                    [
                        'question' => 'A block on a horizontal frictionless table is connected by a rope to a hanging mass. What provides the horizontal force on the block?',
                        'choices' => [
                            ['choice_text' => 'The tension in the rope', 'is_correct' => true],
                            ['choice_text' => 'The normal force', 'is_correct' => false],
                            ['choice_text' => 'The block’s weight', 'is_correct' => false],
                            ['choice_text' => 'Air resistance only', 'is_correct' => false],
                        ],
                        'explanation' => 'The rope tension acts horizontally on the block and accelerates it.',
                    ],

                    [
                        'question' => 'Why must the acceleration of connected bodies be written with consistent signs?',
                        'choices' => [
                            ['choice_text' => 'Their kinematic constraint relates the directions of their motions', 'is_correct' => true],
                            ['choice_text' => 'Mass determines the sign automatically', 'is_correct' => false],
                            ['choice_text' => 'Tension is always positive in every coordinate system', 'is_correct' => false],
                            ['choice_text' => 'Gravity changes sign randomly', 'is_correct' => false],
                        ],
                        'explanation' => 'A chosen positive direction must be maintained consistently for each coordinate equation.',
                    ],

                    [
                        'question' => 'If an ideal rope is massless, why can its tension be treated as uniform along a straight segment?',
                        'choices' => [
                            ['choice_text' => A massless rope segment cannot sustain a net force without requiring negligible acceleration force of its own', 'is_correct' => true],
                            ['choice_text' => 'The rope creates gravity', 'is_correct' => false],
                            ['choice_text' => 'The rope has infinite mass', 'is_correct' => false],
                            ['choice_text' => 'Tension is not a force', 'is_correct' => false],
                        ],
                        'explanation' => 'In the ideal massless-rope model, tension is the same throughout the connected rope when the pulley is also ideal.',
                    ],

                    [
                        'question' => 'Why does a massive pulley generally make a connected-body problem more complicated?',
                        'choices' => [
                            ['choice_text' => 'The pulley can have rotational inertia and therefore different tensions on its two sides', 'is_correct' => true],
                            ['choice_text' => 'Gravity stops acting on the masses', 'is_correct' => false],
                            ['choice_text' => 'The rope becomes electrically charged', 'is_correct' => false],
                            ['choice_text' => 'Acceleration must become zero', 'is_correct' => false],
                        ],
                        'explanation' => 'A massive pulley requires rotational dynamics and can have unequal tensions on the two sides.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 4 — Circular Motion
            // ============================================================

            [
                'title' => 'Circular Motion and Applications',
                'description' => 'Intermediate analysis of centripetal acceleration, banking and circular motion.',
                'questions' => [

                    [
                        'question' => 'An object moves at 12 m/s in a circle of radius 6 m. What is its centripetal acceleration?',
                        'choices' => [
                            ['choice_text' => '24 m/s²', 'is_correct' => true],
                            ['choice_text' => '2 m/s²', 'is_correct' => false],
                            ['choice_text' => '72 m/s²', 'is_correct' => false],
                            ['choice_text' => '36 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a_c = v²/r = 144/6 = 24 m/s².',
                    ],

                    [
                        'question' => 'A 1000 kg car travels at 20 m/s around a circular curve of radius 100 m. What centripetal force is required?',
                        'choices' => [
                            ['choice_text' => '4000 N', 'is_correct' => true],
                            ['choice_text' => '200 N', 'is_correct' => false],
                            ['choice_text' => '20 000 N', 'is_correct' => false],
                            ['choice_text' => '400 N', 'is_correct' => false],
                        ],
                        'explanation' => 'Fc = mv²/r = 1000 × 400/100 = 4000 N.',
                    ],

                    [
                        'question' => 'For a car turning on a flat road, which force can provide the necessary centripetal force under ordinary conditions?',
                        'choices' => [
                            ['choice_text' => Static friction between tires and road', 'is_correct' => true],
                            ['choice_text' => Weight alone', 'is_correct' => false],
                            ['choice_text' => The normal force alone', 'is_correct' => false],
                            ['choice_text' => Air pressure only', 'is_correct' => false],
                        ],
                        'explanation' => 'Static friction provides the horizontal inward force required for a turn without slipping.',
                    ],

                    [
                        'question' => 'Why can a vehicle skid outward on a flat curve if its speed is too high?',
                        'choices' => [
                            ['choice_text' => The required centripetal force exceeds the maximum available static friction', 'is_correct' => true],
                            ['choice_text' => Gravity disappears', 'is_correct' => false],
                            ['choice_text' => The normal force becomes zero automatically', 'is_correct' => false],
                            ['choice_text' => Centripetal acceleration becomes zero', 'is_correct' => false],
                        ],
                        'explanation' => 'The available static friction must be at least mv²/r for the vehicle to follow the curve.',
                    ],

                    [
                        'question' => 'For a frictionless banked road, what force component provides the centripetal acceleration?',
                        'choices' => [
                            ['choice_text' => The horizontal component of the normal force', 'is_correct' => true],
                            ['choice_text' => The vertical component of gravity', 'is_correct' => false],
                            ['choice_text' => Friction only', 'is_correct' => false],
                            ['choice_text' => The entire weight horizontally', 'is_correct' => false],
                        ],
                        'explanation' => 'On a banked curve without friction, the normal force has a horizontal component toward the center.',
                    ],

                    [
                        'question' => 'Why is uniform circular motion still accelerated even though the speed is constant?',
                        'choices' => [
                            ['choice_text' => 'The velocity direction changes continuously', 'is_correct' => true],
                            ['choice_text' => 'The mass increases continuously', 'is_correct' => false],
                            ['choice_text' => 'The speed increases continuously', 'is_correct' => false],
                            ['choice_text' => 'The radius changes continuously', 'is_correct' => false],
                        ],
                        'explanation' => 'Acceleration is the rate of change of velocity, including changes in direction.',
                    ],

                    [
                        'question' => 'What is the relationship between tangential speed v and angular speed ω for circular motion?',
                        'choices' => [
                            ['choice_text' => 'v = rω', 'is_correct' => true],
                            ['choice_text' => 'v = ω/r', 'is_correct' => false],
                            ['choice_text' => 'v = r/ω', 'is_correct' => false],
                            ['choice_text' => 'v = rω²', 'is_correct' => false],
                        ],
                        'explanation' => 'Tangential speed is related to angular speed by v = rω.',
                    ],

                    [
                        'question' => 'What is the centripetal acceleration in terms of angular speed and radius?',
                        'choices' => [
                            ['choice_text' => 'a_c = rω²', 'is_correct' => true],
                            ['choice_text' => 'a_c = r/ω²', 'is_correct' => false],
                            ['choice_text' => 'a_c = ω/r', 'is_correct' => false],
                            ['choice_text' => 'a_c = rω', 'is_correct' => false],
                        ],
                        'explanation' => 'Using v = rω in a_c = v²/r gives a_c = rω².',
                    ],

                    [
                        'question' => 'If the radius of circular motion is tripled while angular speed remains constant, the centripetal acceleration becomes...',
                        'choices' => [
                            ['choice_text' => 'Three times larger', 'is_correct' => true],
                            ['choice_text' => 'One third as large', 'is_correct' => false],
                            ['choice_text' => 'Nine times larger', 'is_correct' => false],
                            ['choice_text' => 'Unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Since a_c = rω² for constant ω, acceleration is proportional to r.',
                    ],

                    [
                        'question' => 'Why is the term “centripetal force” potentially misleading?',
                        'choices' => [
                            ['choice_text' => 'It describes the net inward role of a force rather than a separate fundamental interaction', 'is_correct' => true],
                            ['choice_text' => 'It is always a new physical force', 'is_correct' => false],
                            ['choice_text' => 'It exists only in gravitational systems', 'is_correct' => false],
                            ['choice_text' => 'It always acts outward', 'is_correct' => false],
                        ],
                        'explanation' => 'Tension, gravity, friction or another force may provide the required inward net force.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 5 — Dynamics in Multiple Dimensions
            // ============================================================

            [
                'title' => 'Dynamics in Multiple Dimensions',
                'description' => 'Intermediate analysis of two-dimensional forces, components and projectile dynamics.',
                'questions' => [

                    [
                        'question' => 'Why is it useful to resolve a force into perpendicular components?',
                        'choices' => [
                            ['choice_text' => 'Newton’s second law can then be applied independently along convenient coordinate axes', 'is_correct' => true],
                            ['choice_text' => 'A force becomes scalar after decomposition', 'is_correct' => false],
                            ['choice_text' => 'It eliminates acceleration', 'is_correct' => false],
                            ['choice_text' => 'It changes the actual force acting on the body', 'is_correct' => false],
                        ],
                        'explanation' => 'Resolving forces makes vector equations easier to solve component by component.',
                    ],

                    [
                        'question' => 'A force of 20 N acts at 30° above the horizontal. What is its horizontal component?',
                        'choices' => [
                            ['choice_text' => '17,3 N', 'is_correct' => true],
                            ['choice_text' => '10 N', 'is_correct' => false],
                            ['choice_text' => '20 N', 'is_correct' => false],
                            ['choice_text' => '11,5 N', 'is_correct' => false],
                        ],
                        'explanation' => 'Fx = F cos30° = 20 × 0,866 ≈ 17,3 N.',
                    ],

                    [
                        'question' => 'For the same 20 N force at 30° above horizontal, what is its vertical component?',
                        'choices' => [
                            ['choice_text' => '10 N', 'is_correct' => true],
                            ['choice_text' => '17,3 N', 'is_correct' => false],
                            ['choice_text' => '20 N', 'is_correct' => false],
                            ['choice_text' => '5 N', 'is_correct' => false],
                        ],
                        'explanation' => 'Fy = F sin30° = 20 × 0,5 = 10 N.',
                    ],

                    [
                        'question' => 'In ideal projectile motion near Earth with air resistance neglected, the horizontal acceleration is...',
                        'choices' => [
                            ['choice_text' => 'Zero', 'is_correct' => true],
                            ['choice_text' => 'Equal to g', 'is_correct' => false],
                            ['choice_text' => 'Always increasing', 'is_correct' => false],
                            ['choice_text' => 'Equal to the vertical acceleration', 'is_correct' => false],
                        ],
                        'explanation' => 'Gravity acts vertically, so the horizontal acceleration is zero in the ideal model.',
                    ],

                    [
                        'question' => 'In ideal projectile motion, the vertical acceleration is...',
                        'choices' => [
                            ['choice_text' => 'Approximately -g if upward is chosen as positive', 'is_correct' => true],
                            ['choice_text' => 'Zero', 'is_correct' => false],
                            ['choice_text' => '+g regardless of coordinate choice', 'is_correct' => false],
                            ['choice_text' => 'Equal to the horizontal velocity', 'is_correct' => false],
                        ],
                        'explanation' => 'Gravity provides a constant downward acceleration of magnitude g.',
                    ],

                    [
                        'question' => 'A projectile is launched horizontally from a height. Neglecting air resistance, what determines its vertical motion?',
                        'choices' => [
                            ['choice_text' => 'Its initial vertical velocity and gravitational acceleration', 'is_correct' => true],
                            ['choice_text' => 'Its horizontal velocity alone', 'is_correct' => false],
                            ['choice_text' => 'Its mass alone', 'is_correct' => false],
                            ['choice_text' => 'The horizontal acceleration', 'is_correct' => false],
                        ],
                        'explanation' => 'The vertical component evolves independently under constant gravitational acceleration.',
                    ],

                    [
                        'question' => 'Why can horizontal and vertical motions of an ideal projectile be treated independently?',
                        'choices' => [
                            ['choice_text' => 'The equations of motion separate into independent components because gravity acts only vertically', 'is_correct' => true],
                            ['choice_text' => 'There is no acceleration anywhere', 'is_correct' => false],
                            ['choice_text' => 'Velocity is always constant in both directions', 'is_correct' => false],
                            ['choice_text' => 'Mass acts separately in each direction', 'is_correct' => false],
                        ],
                        'explanation' => 'The absence of horizontal acceleration allows independent treatment of the components.',
                    ],

                    [
                        'question' => 'A 2 kg object experiences forces of 6 N east and 8 N north. What is the magnitude of its acceleration?',
                        'choices' => [
                            ['choice_text' => '5 m/s²', 'is_correct' => true],
                            ['choice_text' => '7 m/s²', 'is_correct' => false],
                            ['choice_text' => '4 m/s²', 'is_correct' => false],
                            ['choice_text' => '10 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'The net force is √(6² + 8²) = 10 N, so a = 10/2 = 5 m/s².',
                    ],

                    [
                        'question' => 'Why does the mass cancel from some ideal projectile trajectory equations?',
                        'choices' => [
                            ['choice_text' => 'Both gravitational force and inertial response are proportional to mass', 'is_correct' => true],
                            ['choice_text' => 'Projectile mass is always zero', 'is_correct' => false],
                            ['choice_text' => 'Gravity does not act on massive bodies', 'is_correct' => false],
                            ['choice_text' => 'Mass is not part of Newton’s second law', 'is_correct' => false],
                        ],
                        'explanation' => 'From mg = ma, the mass cancels and gives a = g.',
                    ],

                    [
                        'question' => 'Why is choosing axes aligned with the geometry of a problem often advantageous?',
                        'choices' => [
                            ['choice_text' => 'It can simplify the force components and reduce the number of unknowns', 'is_correct' => true],
                            ['choice_text' => 'It changes the laws of motion', 'is_correct' => false],
                            ['choice_text' => 'It guarantees zero acceleration', 'is_correct' => false],
                            ['choice_text' => 'It removes the need for vector addition', 'is_correct' => false],
                        ],
                        'explanation' => 'A convenient coordinate system can make the equations much simpler.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 6 — Drag and Resistive Forces
            // ============================================================

            [
                'title' => 'Resistive Forces and Terminal Motion',
                'description' => 'Introduction to linear and quadratic drag and terminal velocity.',
                'questions' => [

                    [
                        'question' => 'What is the usual direction of a resistive drag force?',
                        'choices' => [
                            ['choice_text' => Opposite to the relative motion through the medium', 'is_correct' => true],
                            ['choice_text' => 'Always in the direction of motion', 'is_correct' => false],
                            ['choice_text' => 'Always vertically upward', 'is_correct' => false],
                            ['choice_text' => 'Always toward the center of mass', 'is_correct' => false],
                        ],
                        'explanation' => 'Drag opposes relative motion between the body and the surrounding medium.',
                    ],

                    [
                        'question' => 'For low-speed motion in some fluid regimes, drag may be approximated as proportional to...',
                        'choices' => [
                            ['choice_text' => 'Velocity', 'is_correct' => true],
                            ['choice_text' => 'Velocity squared only', 'is_correct' => false],
                            ['choice_text' => 'Acceleration squared', 'is_correct' => false],
                            ['choice_text' => 'Mass squared', 'is_correct' => false],
                        ],
                        'explanation' => 'A linear drag model uses Fd = bv.',
                    ],

                    [
                        'question' => 'For many objects moving rapidly through air, drag is often approximated as proportional to...',
                        'choices' => [
                            ['choice_text' => 'The square of the speed', 'is_correct' => true],
                            ['choice_text' => 'The inverse of speed', 'is_correct' => false],
                            ['choice_text' => 'The square of acceleration', 'is_correct' => false],
                            ['choice_text' => 'Mass only', 'is_correct' => false],
                        ],
                        'explanation' => 'A common quadratic drag model is Fd = 1/2 ρCdAv².',
                    ],

                    [
                        'question' => 'What is terminal velocity?',
                        'choices' => [
                            ['choice_text' => 'The constant velocity reached when the net force becomes zero', 'is_correct' => true],
                            ['choice_text' => 'The maximum possible velocity in the universe', 'is_correct' => false],
                            ['choice_text' => 'The velocity at which gravity disappears', 'is_correct' => false],
                            ['choice_text' => 'The initial velocity of a falling object', 'is_correct' => false],
                        ],
                        'explanation' => 'At terminal velocity, drag balances the driving force such that acceleration is zero.',
                    ],

                    [
                        'question' => 'For an object falling vertically with quadratic drag, what happens to its acceleration as its speed approaches terminal velocity?',
                        'choices' => [
                            ['choice_text' => 'It approaches zero', 'is_correct' => true],
                            ['choice_text' => 'It approaches g and remains there', 'is_correct' => false],
                            ['choice_text' => 'It grows without limit', 'is_correct' => false],
                            ['choice_text' => 'It becomes equal to terminal velocity', 'is_correct' => false],
                        ],
                        'explanation' => 'As drag increases and approaches the weight, the net force and acceleration approach zero.',
                    ],

                    [
                        'question' => 'Why can two objects of different mass have different terminal velocities in the same fluid?',
                        'choices' => [
                            ['choice_text' => Their weights and drag characteristics can differ', 'is_correct' => true],
                            ['choice_text' => Gravity acts differently on massless objects only', 'is_correct' => false],
                            ['choice_text' => Drag is independent of object properties', 'is_correct' => false],
                            ['choice_text' => Terminal velocity depends only on time', 'is_correct' => false],
                        ],
                        'explanation' => 'Terminal velocity depends on mass, shape, area, drag coefficient and fluid properties.',
                    ],

                    [
                        'question' => 'In a linear drag model Fd = bv, what is the terminal speed of a falling object of mass m?',
                        'choices' => [
                            ['choice_text' => 'vt = mg/b', 'is_correct' => true],
                            ['choice_text' => 'vt = b/(mg)', 'is_correct' => false],
                            ['choice_text' => 'vt = mg/b²', 'is_correct' => false],
                            ['choice_text' => 'vt = bmg', 'is_correct' => false],
                        ],
                        'explanation' => 'At terminal speed, mg = bvt, so vt = mg/b.',
                    ],

                    [
                        'question' => 'Why does a parachute reduce a person’s terminal speed?',
                        'choices' => [
                            ['choice_text' => 'It greatly increases the effective drag area', 'is_correct' => true],
                            ['choice_text' => 'It reduces gravitational acceleration', 'is_correct' => false],
                            ['choice_text' => 'It removes the person’s mass', 'is_correct' => false],
                            ['choice_text' => 'It eliminates air resistance', 'is_correct' => false],
                        ],
                        'explanation' => 'A larger area increases drag for a given speed, resulting in a lower terminal velocity.',
                    ],

                    [
                        'question' => 'Why is drag described as a dissipative force in many mechanical systems?',
                        'choices' => [
                            ['choice_text' => 'It converts mechanical energy into thermal energy and other forms of internal energy', 'is_correct' => true],
                            ['choice_text' => 'It creates mechanical energy from nothing', 'is_correct' => false],
                            ['choice_text' => 'It always conserves mechanical energy', 'is_correct' => false],
                            ['choice_text' => 'It permanently increases kinetic energy', 'is_correct' => false],
                        ],
                        'explanation' => 'Resistive forces generally remove mechanical energy from the macroscopic motion.',
                    ],

                    [
                        'question' => 'Why is the simple vacuum free-fall model inaccurate for a falling object in air at sufficiently high speed?',
                        'choices' => [
                            ['choice_text' => 'Aerodynamic drag becomes significant and modifies the net force', 'is_correct' => true],
                            ['choice_text' => 'Gravity stops acting in air', 'is_correct' => false],
                            ['choice_text' => 'Mass becomes zero in air', 'is_correct' => false],
                            ['choice_text' => 'The object loses all momentum instantly', 'is_correct' => false],
                        ],
                        'explanation' => 'Air resistance becomes an important additional force at higher speeds.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 7 — Momentum and Impulse
            // ============================================================

            [
                'title' => 'Momentum and Impulse',
                'description' => 'Intermediate treatment of linear momentum, impulse and collisions.',
                'questions' => [

                    [
                        'question' => 'What is the linear momentum of a particle?',
                        'choices' => [
                            ['choice_text' => 'p = mv', 'is_correct' => true],
                            ['choice_text' => 'p = m/v', 'is_correct' => false],
                            ['choice_text' => 'p = mv²', 'is_correct' => false],
                            ['choice_text' => 'p = ma', 'is_correct' => false],
                        ],
                        'explanation' => 'Linear momentum is the vector product p = mv.',
                    ],

                    [
                        'question' => 'What is the SI unit of linear momentum?',
                        'choices' => [
                            ['choice_text' => 'kg·m/s', 'is_correct' => true],
                            ['choice_text' => 'N·m', 'is_correct' => false],
                            ['choice_text' => 'J/s', 'is_correct' => false],
                            ['choice_text' => 'kg/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'Momentum has SI units of kg·m/s.',
                    ],

                    [
                        'question' => 'What is impulse?',
                        'choices' => [
                            ['choice_text' => 'The change in momentum produced by a force over a time interval', 'is_correct' => true],
                            ['choice_text' => 'The force divided by mass', 'is_correct' => false],
                            ['choice_text' => 'The change in kinetic energy only', 'is_correct' => false],
                            ['choice_text' => 'The distance traveled by a body', 'is_correct' => false],
                        ],
                        'explanation' => 'Impulse satisfies J = Δp and equals the time integral of force.',
                    ],

                    [
                        'question' => 'A constant force of 20 N acts for 0,5 s. What impulse does it deliver?',
                        'choices' => [
                            ['choice_text' => '10 N·s', 'is_correct' => true],
                            ['choice_text' => '40 N·s', 'is_correct' => false],
                            ['choice_text' => '20 N·s', 'is_correct' => false],
                            ['choice_text' => '5 N·s', 'is_correct' => false],
                        ],
                        'explanation' => 'J = FΔt = 20 × 0,5 = 10 N·s.',
                    ],

                    [
                        'question' => 'When is the total linear momentum of an isolated system conserved?',
                        'choices' => [
                            ['choice_text' => 'When the net external impulse on the system is zero', 'is_correct' => true],
                            ['choice_text' => 'Whenever internal forces are zero', 'is_correct' => false],
                            ['choice_text' => 'Only during elastic collisions', 'is_correct' => false],
                            ['choice_text' => 'Only when all objects are stationary', 'is_correct' => false],
                        ],
                        'explanation' => 'Zero net external impulse implies conservation of total system momentum.',
                    ],

                    [
                        'question' => 'Why can internal forces cancel when considering the total momentum of a system?',
                        'choices' => [
                            ['choice_text' => Newton’s third-law pairs are equal and opposite within the system', 'is_correct' => true],
                            ['choice_text' => 'Internal forces do not exist', 'is_correct' => false],
                            ['choice_text' => 'Internal forces always have zero magnitude', 'is_correct' => false],
                            ['choice_text' => 'Momentum is not a vector', 'is_correct' => false],
                        ],
                        'explanation' => 'Internal force pairs cancel in the system-wide momentum balance under the usual assumptions.',
                    ],

                    [
                        'question' => 'Why does increasing the collision time reduce the average force for a fixed change in momentum?',
                        'choices' => [
                            ['choice_text' => 'Because F_avg = Δp/Δt', 'is_correct' => true],
                            ['choice_text' => 'Because momentum becomes zero', 'is_correct' => false],
                            ['choice_text' => 'Because mass decreases with time', 'is_correct' => false],
                            ['choice_text' => 'Because the change in momentum increases automatically', 'is_correct' => false],
                        ],
                        'explanation' => 'For a fixed impulse, spreading the momentum change over a longer interval reduces average force.',
                    ],

                    [
                        'question' => 'Why do airbags reduce injury risk during a collision?',
                        'choices' => [
                            ['choice_text' => 'They increase the time over which the passenger’s momentum changes', 'is_correct' => true],
                            ['choice_text' => 'They eliminate momentum conservation', 'is_correct' => false],
                            ['choice_text' => 'They reduce the passenger’s mass to zero', 'is_correct' => false],
                            ['choice_text' => 'They increase the collision force intentionally', 'is_correct' => false],
                        ],
                        'explanation' => 'For a given momentum change, a longer stopping time reduces the average force.',
                    ],

                    [
                        'question' => 'A 2 kg object moving at 5 m/s has what momentum magnitude?',
                        'choices' => [
                            ['choice_text' => '10 kg·m/s', 'is_correct' => true],
                            ['choice_text' => '2,5 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '7 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '25 kg·m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'p = mv = 2 × 5 = 10 kg·m/s.',
                    ],

                    [
                        'question' => 'In a perfectly inelastic collision between two bodies, what happens after impact?',
                        'choices' => [
                            ['choice_text' => 'The bodies move together with a common velocity', 'is_correct' => true],
                            ['choice_text' => 'Both bodies always stop', 'is_correct' => false],
                            ['choice_text' => 'Kinetic energy is always conserved', 'is_correct' => false],
                            ['choice_text' => 'Momentum is necessarily lost', 'is_correct' => false],
                        ],
                        'explanation' => 'In a perfectly inelastic collision, the objects stick together while total momentum is conserved for an isolated system.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 8 — Integrated Dynamics Problems
            // ============================================================

            [
                'title' => 'Integrated Dynamics Problems',
                'description' => 'Mixed intermediate problems combining force balances, friction, circular motion, momentum and acceleration.',
                'questions' => [

                    [
                        'question' => 'A 10 kg block is pulled with 60 N on a horizontal surface where kinetic friction is 10 N. What is its acceleration?',
                        'choices' => [
                            ['choice_text' => '5 m/s²', 'is_correct' => true],
                            ['choice_text' => '6 m/s²', 'is_correct' => false],
                            ['choice_text' => '7 m/s²', 'is_correct' => false],
                            ['choice_text' => '10 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'F_net = 60 - 10 = 50 N, so a = 50/10 = 5 m/s².',
                    ],

                    [
                        'question' => 'A 4 kg block slides down a frictionless 30° incline. What is its acceleration?',
                        'choices' => [
                            ['choice_text' => '4,9 m/s²', 'is_correct' => true],
                            ['choice_text' => '8,5 m/s²', 'is_correct' => false],
                            ['choice_text' => '9,8 m/s²', 'is_correct' => false],
                            ['choice_text' => '2,45 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a = g sin30° = 9,8 × 0,5 = 4,9 m/s².',
                    ],

                    [
                        'question' => 'A 2 kg object moves at 6 m/s in a circle of radius 3 m. What centripetal force is required?',
                        'choices' => [
                            ['choice_text' => '24 N', 'is_correct' => true],
                            ['choice_text' => '12 N', 'is_correct' => false],
                            ['choice_text' => '18 N', 'is_correct' => false],
                            ['choice_text' => '36 N', 'is_correct' => false],
                        ],
                        'explanation' => 'Fc = mv²/r = 2 × 36/3 = 24 N.',
                    ],

                    [
                        'question' => 'A 3 kg object initially at rest experiences a constant net force of 9 N for 4 s. What is its final speed?',
                        'choices' => [
                            ['choice_text' => '12 m/s', 'is_correct' => true],
                            ['choice_text' => '3 m/s', 'is_correct' => false],
                            ['choice_text' => '36 m/s', 'is_correct' => false],
                            ['choice_text' => '6 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'a = F/m = 9/3 = 3 m/s², so v = at = 3 × 4 = 12 m/s.',
                    ],

                    [
                        'question' => 'A 2 kg object moving at 8 m/s is brought to rest. What is the magnitude of its change in momentum?',
                        'choices' => [
                            ['choice_text' => '16 kg·m/s', 'is_correct' => true],
                            ['choice_text' => '8 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '4 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '32 kg·m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Initial momentum is 2 × 8 = 16 kg·m/s and final momentum is zero.',
                    ],

                    [
                        'question' => 'A 5 kg mass hangs from a rope and accelerates upward at 1,2 m/s². Taking g = 9,8 m/s², what is the tension?',
                        'choices' => [
                            ['choice_text' => '55 N', 'is_correct' => true],
                            ['choice_text' => '49 N', 'is_correct' => false],
                            ['choice_text' => '43 N', 'is_correct' => false],
                            ['choice_text' => '60 N', 'is_correct' => false],
                        ],
                        'explanation' => 'T = m(g + a) = 5(9,8 + 1,2) = 55 N.',
                    ],

                    [
                        'question' => 'A car of mass 1000 kg travels at 15 m/s around a curve of radius 50 m. What is the required centripetal force?',
                        'choices' => [
                            ['choice_text' => '4500 N', 'is_correct' => true],
                            ['choice_text' => '300 N', 'is_correct' => false],
                            ['choice_text' => '15 000 N', 'is_correct' => false],
                            ['choice_text' => '2250 N', 'is_correct' => false],
                        ],
                        'explanation' => 'Fc = mv²/r = 1000 × 225/50 = 4500 N.',
                    ],

                    [
                        'question' => 'A 2 kg block is connected to a 3 kg hanging mass by an ideal rope and frictionless pulley. Which statement is correct?',
                        'choices' => [
                            ['choice_text' => 'The 3 kg mass accelerates downward and the 2 kg mass accelerates upward', 'is_correct' => true],
                            ['choice_text' => 'Both masses necessarily remain at rest', 'is_correct' => false],
                            ['choice_text' => 'The 2 kg mass accelerates downward faster than the 3 kg mass', 'is_correct' => false],
                            ['choice_text' => 'The rope tension must be zero', 'is_correct' => false],
                        ],
                        'explanation' => 'The heavier hanging mass provides the net driving force and moves downward.',
                    ],

                    [
                        'question' => 'Why is momentum conservation often more convenient than force analysis during a short collision?',
                        'choices' => [
                            ['choice_text' => 'The details of the rapidly varying internal forces do not need to be known when external impulse is negligible', 'is_correct' => true],
                            ['choice_text' => 'Newton’s laws stop applying during collisions', 'is_correct' => false],
                            ['choice_text' => 'Energy is never relevant to collisions', 'is_correct' => false],
                            ['choice_text' => 'Momentum is a scalar quantity', 'is_correct' => false],
                        ],
                        'explanation' => 'For an isolated system, total momentum remains conserved despite complicated short-duration internal forces.',
                    ],

                    [
                        'question' => 'Why is solving dynamics problems systematically with a diagram, coordinates and Newton’s second law so effective?',
                        'choices' => [
                            ['choice_text' => 'It converts the physical situation into a consistent set of component equations', 'is_correct' => true],
                            ['choice_text' => 'It eliminates all unknown quantities automatically', 'is_correct' => false],
                            ['choice_text' => 'It makes every problem one-dimensional', 'is_correct' => false],
                            ['choice_text' => 'It removes the need to consider signs and directions', 'is_correct' => false],
                        ],
                        'explanation' => 'A systematic workflow reduces conceptual and algebraic errors while preserving the vector nature of the problem.',
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

                // Randomize the choices so the correct answer
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