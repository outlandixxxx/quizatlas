<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class GravitationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'gravitation')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Universal Gravitation
            // ============================================================

            [
                'title' => 'Universal Gravitation',
                'description' => 'Introduction to gravitational attraction and Newton’s law of universal gravitation.',
                'questions' => [

                    [
                        'question' => 'What is gravitation?',
                        'choices' => [
                            ['choice_text' => 'The attractive interaction between masses', 'is_correct' => true],
                            ['choice_text' => 'A force that acts only between electrically charged objects', 'is_correct' => false],
                            ['choice_text' => 'A force caused by temperature differences', 'is_correct' => false],
                            ['choice_text' => 'A force that acts only in liquids', 'is_correct' => false],
                        ],
                        'explanation' => 'Gravitation is the attractive interaction between objects possessing mass.',
                    ],

                    [
                        'question' => 'Which scientist formulated the classical law of universal gravitation?',
                        'choices' => [
                            ['choice_text' => 'Isaac Newton', 'is_correct' => true],
                            ['choice_text' => 'James Clerk Maxwell', 'is_correct' => false],
                            ['choice_text' => 'Michael Faraday', 'is_correct' => false],
                            ['choice_text' => 'Niels Bohr', 'is_correct' => false],
                        ],
                        'explanation' => 'Newton formulated the classical universal law of gravitation.',
                    ],

                    [
                        'question' => 'What is the Newtonian gravitational force between two point masses m1 and m2 separated by distance r?',
                        'choices' => [
                            ['choice_text' => 'F = Gm1m2/r²', 'is_correct' => true],
                            ['choice_text' => 'F = Gm1m2/r', 'is_correct' => false],
                            ['choice_text' => 'F = G(m1 + m2)r²', 'is_correct' => false],
                            ['choice_text' => 'F = G/r²', 'is_correct' => false],
                        ],
                        'explanation' => 'Newton’s law gives F = Gm1m2/r².',
                    ],

                    [
                        'question' => 'What happens to the gravitational force if the separation between two masses is doubled?',
                        'choices' => [
                            ['choice_text' => 'It becomes one quarter as large', 'is_correct' => true],
                            ['choice_text' => 'It becomes half as large', 'is_correct' => false],
                            ['choice_text' => 'It becomes twice as large', 'is_correct' => false],
                            ['choice_text' => 'It becomes four times larger', 'is_correct' => false],
                        ],
                        'explanation' => 'Because F is proportional to 1/r², doubling r reduces F by a factor of four.',
                    ],

                    [
                        'question' => 'What happens to the gravitational force if one of the masses is doubled while the separation remains unchanged?',
                        'choices' => [
                            ['choice_text' => 'The force doubles', 'is_correct' => true],
                            ['choice_text' => 'The force becomes four times larger', 'is_correct' => false],
                            ['choice_text' => 'The force is halved', 'is_correct' => false],
                            ['choice_text' => 'The force remains unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Gravitational force is directly proportional to each interacting mass.',
                    ],

                    [
                        'question' => 'What is the SI unit of the gravitational constant G?',
                        'choices' => [
                            ['choice_text' => 'N·m²/kg²', 'is_correct' => true],
                            ['choice_text' => 'N/kg', 'is_correct' => false],
                            ['choice_text' => 'kg·m/s²', 'is_correct' => false],
                            ['choice_text' => 'm/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'The SI unit of G is N·m²/kg².',
                    ],

                    [
                        'question' => 'Why is the gravitational force between ordinary objects usually difficult to notice?',
                        'choices' => [
                            ['choice_text' => 'The gravitational constant G is very small', 'is_correct' => true],
                            ['choice_text' => 'Ordinary objects have no mass', 'is_correct' => false],
                            ['choice_text' => 'Gravity acts only on planets', 'is_correct' => false],
                            ['choice_text' => 'Gravity is blocked by the atmosphere', 'is_correct' => false],
                        ],
                        'explanation' => 'Although every mass gravitates, G is small enough that gravitational forces between everyday objects are usually weak.',
                    ],

                    [
                        'question' => 'What is the direction of the gravitational force between two point masses?',
                        'choices' => [
                            ['choice_text' => 'Along the line joining their centers', 'is_correct' => true],
                            ['choice_text' => 'Perpendicular to the line joining them', 'is_correct' => false],
                            ['choice_text' => 'Always vertically upward', 'is_correct' => false],
                            ['choice_text' => 'Always horizontally to the right', 'is_correct' => false],
                        ],
                        'explanation' => 'The Newtonian gravitational force acts along the line joining the two masses.',
                    ],

                    [
                        'question' => 'Is Newtonian gravitational interaction attractive or repulsive?',
                        'choices' => [
                            ['choice_text' => 'Attractive', 'is_correct' => true],
                            ['choice_text' => 'Repulsive', 'is_correct' => false],
                            ['choice_text' => 'It can only be neutral', 'is_correct' => false],
                            ['choice_text' => 'It depends on whether the masses are charged', 'is_correct' => false],
                        ],
                        'explanation' => 'Classical Newtonian gravity between positive masses is attractive.',
                    ],

                    [
                        'question' => 'Why does Newton’s gravitational force satisfy an inverse-square law?',
                        'choices' => [
                            ['choice_text' => 'The force magnitude decreases as the square of the separation increases', 'is_correct' => true],
                            ['choice_text' => 'The force is proportional to distance squared', 'is_correct' => false],
                            ['choice_text' => 'The force is independent of distance', 'is_correct' => false],
                            ['choice_text' => 'The force decreases linearly with distance only', 'is_correct' => false],
                        ],
                        'explanation' => 'The inverse-square dependence means F ∝ 1/r².',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 2 — Gravitational Field and Acceleration
            // ============================================================

            [
                'title' => 'Gravitational Field and Acceleration',
                'description' => 'Introduction to gravitational fields, field strength and free-fall acceleration.',
                'questions' => [

                    [
                        'question' => 'What is a gravitational field?',
                        'choices' => [
                            ['choice_text' => 'A region of space in which a mass experiences gravitational force', 'is_correct' => true],
                            ['choice_text' => 'A region containing only electrically charged particles', 'is_correct' => false],
                            ['choice_text' => 'A region where temperature is constant', 'is_correct' => false],
                            ['choice_text' => 'A region with no physical interactions', 'is_correct' => false],
                        ],
                        'explanation' => 'A gravitational field describes the gravitational influence of a mass throughout surrounding space.',
                    ],

                    [
                        'question' => 'How is gravitational field strength g defined?',
                        'choices' => [
                            ['choice_text' => 'As gravitational force per unit test mass', 'is_correct' => true],
                            ['choice_text' => 'As mass per unit force', 'is_correct' => false],
                            ['choice_text' => 'As force multiplied by mass', 'is_correct' => false],
                            ['choice_text' => 'As energy per unit distance only', 'is_correct' => false],
                        ],
                        'explanation' => 'The gravitational field strength is g = F/m for a small test mass.',
                    ],

                    [
                        'question' => 'What is the approximate gravitational acceleration near Earth’s surface?',
                        'choices' => [
                            ['choice_text' => '9,8 m/s²', 'is_correct' => true],
                            ['choice_text' => '98 m/s²', 'is_correct' => false],
                            ['choice_text' => '0,98 m/s²', 'is_correct' => false],
                            ['choice_text' => '9,8 km/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'Near Earth’s surface, g is approximately 9,8 m/s².',
                    ],

                    [
                        'question' => 'For a spherical body of mass M, what is the gravitational field magnitude at distance r from its center outside the body?',
                        'choices' => [
                            ['choice_text' => 'g = GM/r²', 'is_correct' => true],
                            ['choice_text' => 'g = GM/r', 'is_correct' => false],
                            ['choice_text' => 'g = GMr²', 'is_correct' => false],
                            ['choice_text' => 'g = r²/(GM)', 'is_correct' => false],
                        ],
                        'explanation' => 'Outside a spherically symmetric mass distribution, g = GM/r².',
                    ],

                    [
                        'question' => 'Why do all objects near Earth accelerate downward at approximately the same rate when air resistance is neglected?',
                        'choices' => [
                            ['choice_text' => 'Gravitational force is proportional to mass, so mass cancels from a = F/m', 'is_correct' => true],
                            ['choice_text' => 'All objects have the same mass', 'is_correct' => false],
                            ['choice_text' => 'Gravity does not depend on mass', 'is_correct' => false],
                            ['choice_text' => 'Earth pushes all objects downward with the same force', 'is_correct' => false],
                        ],
                        'explanation' => 'Since Fg = mg and a = Fg/m, the acceleration is approximately g regardless of object mass.',
                    ],

                    [
                        'question' => 'What is the gravitational acceleration at twice Earth’s radius from its center compared with the surface value?',
                        'choices' => [
                            ['choice_text' => 'One quarter as large', 'is_correct' => true],
                            ['choice_text' => 'Half as large', 'is_correct' => false],
                            ['choice_text' => 'Twice as large', 'is_correct' => false],
                            ['choice_text' => 'Four times larger', 'is_correct' => false],
                        ],
                        'explanation' => 'Since g ∝ 1/r², doubling r reduces g by a factor of four.',
                    ],

                    [
                        'question' => 'What is the direction of the gravitational field around an isolated spherical mass?',
                        'choices' => [
                            ['choice_text' => 'Radially inward toward the mass', 'is_correct' => true],
                            ['choice_text' => 'Radially outward away from the mass', 'is_correct' => false],
                            ['choice_text' => 'Tangential to every sphere around the mass', 'is_correct' => false],
                            ['choice_text' => 'Horizontally in one fixed direction', 'is_correct' => false],
                        ],
                        'explanation' => 'The gravitational field produced by a positive mass points toward the mass.',
                    ],

                    [
                        'question' => 'What happens to gravitational field strength as distance from a point mass increases?',
                        'choices' => [
                            ['choice_text' => 'It decreases according to an inverse-square law', 'is_correct' => true],
                            ['choice_text' => 'It increases linearly', 'is_correct' => false],
                            ['choice_text' => 'It remains constant at all distances', 'is_correct' => false],
                            ['choice_text' => 'It increases with distance squared', 'is_correct' => false],
                        ],
                        'explanation' => 'For a point mass, g = GM/r².',
                    ],

                    [
                        'question' => 'Why is gravitational field strength measured in N/kg also equivalent to m/s²?',
                        'choices' => [
                            ['choice_text' => 'From g = F/m and 1 N = 1 kg·m/s²', 'is_correct' => true],
                            ['choice_text' => 'Because force and acceleration are identical quantities', 'is_correct' => false],
                            ['choice_text' => 'Because kilograms are dimensionless', 'is_correct' => false],
                            ['choice_text' => 'Because gravity has no units', 'is_correct' => false],
                        ],
                        'explanation' => 'N/kg = (kg·m/s²)/kg = m/s².',
                    ],

                    [
                        'question' => 'Why does gravitational field strength vary slightly over Earth’s surface?',
                        'choices' => [
                            ['choice_text' => 'Earth’s distance from its center and its rotation vary with location', 'is_correct' => true],
                            ['choice_text' => 'Earth has no mass', 'is_correct' => false],
                            ['choice_text' => 'Gravity is random on Earth', 'is_correct' => false],
                            ['choice_text' => 'The gravitational constant changes from place to place', 'is_correct' => false],
                        ],
                        'explanation' => 'Local g depends on latitude, elevation, Earth’s shape and rotation, among other factors.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 3 — Weight and Gravitational Effects
            // ============================================================

            [
                'title' => 'Weight and Gravitational Effects',
                'description' => 'Study of weight, mass, apparent weight and gravitational effects near planetary bodies.',
                'questions' => [

                    [
                        'question' => 'What is the weight of an object near Earth’s surface?',
                        'choices' => [
                            ['choice_text' => 'The gravitational force exerted by Earth on the object', 'is_correct' => true],
                            ['choice_text' => 'The object’s amount of matter', 'is_correct' => false],
                            ['choice_text' => 'The object’s volume multiplied by density', 'is_correct' => false],
                            ['choice_text' => 'The object’s kinetic energy', 'is_correct' => false],
                        ],
                        'explanation' => 'Weight is the gravitational force acting on an object.',
                    ],

                    [
                        'question' => 'What is the approximate weight of a 10 kg object near Earth’s surface?',
                        'choices' => [
                            ['choice_text' => '98 N', 'is_correct' => true],
                            ['choice_text' => '10 N', 'is_correct' => false],
                            ['choice_text' => '9,8 N', 'is_correct' => false],
                            ['choice_text' => '1000 N', 'is_correct' => false],
                        ],
                        'explanation' => 'W = mg = 10 × 9,8 = 98 N.',
                    ],

                    [
                        'question' => 'Does an object’s mass change merely because it is moved from Earth to the Moon?',
                        'choices' => [
                            ['choice_text' => 'No, its mass remains approximately the same', 'is_correct' => true],
                            ['choice_text' => 'Yes, its mass becomes zero', 'is_correct' => false],
                            ['choice_text' => 'Yes, its mass doubles', 'is_correct' => false],
                            ['choice_text' => 'Yes, its mass equals its weight', 'is_correct' => false],
                        ],
                        'explanation' => 'Mass is an intrinsic measure of inertia, while weight depends on the local gravitational field.',
                    ],

                    [
                        'question' => 'Why would an astronaut weigh less on the Moon than on Earth?',
                        'choices' => [
                            ['choice_text' => 'The Moon has a weaker gravitational field at its surface', 'is_correct' => true],
                            ['choice_text' => 'The astronaut’s mass becomes smaller', 'is_correct' => false],
                            ['choice_text' => 'The astronaut loses all inertia', 'is_correct' => false],
                            ['choice_text' => 'Gravity on the Moon is stronger', 'is_correct' => false],
                        ],
                        'explanation' => 'The Moon’s surface gravitational acceleration is much smaller than Earth’s.',
                    ],

                    [
                        'question' => 'What happens to weight when the local gravitational acceleration decreases?',
                        'choices' => [
                            ['choice_text' => 'Weight decreases', 'is_correct' => true],
                            ['choice_text' => 'Weight increases', 'is_correct' => false],
                            ['choice_text' => 'Mass decreases automatically', 'is_correct' => false],
                            ['choice_text' => 'Weight becomes independent of gravity', 'is_correct' => false],
                        ],
                        'explanation' => 'Weight is W = mg, so it depends directly on local g.',
                    ],

                    [
                        'question' => 'What does apparent weight often correspond to in a scale measurement?',
                        'choices' => [
                            ['choice_text' => 'The normal force exerted by the scale on the object', 'is_correct' => true],
                            ['choice_text' => 'The object’s mass alone', 'is_correct' => false],
                            ['choice_text' => 'The gravitational constant G', 'is_correct' => false],
                            ['choice_text' => 'The object’s volume', 'is_correct' => false],
                        ],
                        'explanation' => 'A scale commonly measures contact force, which can differ from mg when the object accelerates.',
                    ],

                    [
                        'question' => 'Why can a person feel weightless while still being strongly affected by gravity?',
                        'choices' => [
                            ['choice_text' => 'They may be in free fall, so the supporting normal force becomes nearly zero', 'is_correct' => true],
                            ['choice_text' => 'Gravity becomes zero everywhere in space', 'is_correct' => false],
                            ['choice_text' => 'Their mass becomes zero', 'is_correct' => false],
                            ['choice_text' => 'Their gravitational field disappears', 'is_correct' => false],
                        ],
                        'explanation' => 'Weightlessness refers to the absence of a supporting contact force, not necessarily the absence of gravity.',
                    ],

                    [
                        'question' => 'What is the weight of a 2 kg object on a planet where g = 5 m/s²?',
                        'choices' => [
                            ['choice_text' => '10 N', 'is_correct' => true],
                            ['choice_text' => '2,5 N', 'is_correct' => false],
                            ['choice_text' => '7 N', 'is_correct' => false],
                            ['choice_text' => '25 N', 'is_correct' => false],
                        ],
                        'explanation' => 'W = mg = 2 × 5 = 10 N.',
                    ],

                    [
                        'question' => 'Why does weight depend on location while mass does not in ordinary classical mechanics?',
                        'choices' => [
                            ['choice_text' => 'Weight depends on local gravitational acceleration, while mass measures inertia', 'is_correct' => true],
                            ['choice_text' => 'Mass depends directly on local gravity', 'is_correct' => false],
                            ['choice_text' => 'Weight is a measure of the amount of matter', 'is_correct' => false],
                            ['choice_text' => 'Mass is a force', 'is_correct' => false],
                        ],
                        'explanation' => 'Mass is an intrinsic property in classical mechanics; weight is a gravitational force.',
                    ],

                    [
                        'question' => 'Why is it incorrect to use kilograms as the SI unit of weight?',
                        'choices' => [
                            ['choice_text' => 'Weight is a force and therefore is measured in newtons', 'is_correct' => true],
                            ['choice_text' => 'Kilograms measure acceleration', 'is_correct' => false],
                            ['choice_text' => 'Weight is dimensionless', 'is_correct' => false],
                            ['choice_text' => 'Newtons measure mass', 'is_correct' => false],
                        ],
                        'explanation' => 'Kilogram is the SI unit of mass; newton is the SI unit of force and therefore weight.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 4 — Gravitational Potential Energy
            // ============================================================

            [
                'title' => 'Gravitational Potential Energy',
                'description' => 'Introduction to gravitational potential energy and energy changes in gravitational fields.',
                'questions' => [

                    [
                        'question' => 'What is gravitational potential energy?',
                        'choices' => [
                            ['choice_text' => 'Energy associated with the position of an object in a gravitational field', 'is_correct' => true],
                            ['choice_text' => 'Energy associated only with speed', 'is_correct' => false],
                            ['choice_text' => 'Energy produced by friction', 'is_correct' => false],
                            ['choice_text' => 'The object’s mass divided by time', 'is_correct' => false],
                        ],
                        'explanation' => 'Gravitational potential energy depends on position in a gravitational field.',
                    ],

                    [
                        'question' => 'Near Earth’s surface, what expression gives gravitational potential energy relative to a chosen reference level?',
                        'choices' => [
                            ['choice_text' => 'Ug = mgh', 'is_correct' => true],
                            ['choice_text' => 'Ug = mg/h', 'is_correct' => false],
                            ['choice_text' => 'Ug = mh/g', 'is_correct' => false],
                            ['choice_text' => 'Ug = mv²', 'is_correct' => false],
                        ],
                        'explanation' => 'For approximately uniform gravity, Ug = mgh.',
                    ],

                    [
                        'question' => 'What happens to gravitational potential energy when an object is raised higher above the reference level?',
                        'choices' => [
                            ['choice_text' => 'It increases', 'is_correct' => true],
                            ['choice_text' => 'It decreases', 'is_correct' => false],
                            ['choice_text' => 'It becomes independent of height', 'is_correct' => false],
                            ['choice_text' => 'It always becomes zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Since Ug = mgh, potential energy increases with height.',
                    ],

                    [
                        'question' => 'A 2 kg object is raised by 4 m near Earth’s surface. Taking g = 9,8 m/s², how much gravitational potential energy does it gain?',
                        'choices' => [
                            ['choice_text' => '78,4 J', 'is_correct' => true],
                            ['choice_text' => '19,6 J', 'is_correct' => false],
                            ['choice_text' => '39,2 J', 'is_correct' => false],
                            ['choice_text' => '98 J', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔUg = mgh = 2 × 9,8 × 4 = 78,4 J.',
                    ],

                    [
                        'question' => 'Why can the zero of gravitational potential energy be chosen arbitrarily near Earth?',
                        'choices' => [
                            ['choice_text' => 'Only differences in potential energy affect physical predictions', 'is_correct' => true],
                            ['choice_text' => 'Potential energy has no connection to gravity', 'is_correct' => false],
                            ['choice_text' => 'Gravity depends on the chosen zero', 'is_correct' => false],
                            ['choice_text' => 'Energy must always be positive', 'is_correct' => false],
                        ],
                        'explanation' => 'An additive constant in potential energy does not affect forces or energy differences.',
                    ],

                    [
                        'question' => 'During an ideal fall without air resistance, gravitational potential energy is converted mainly into...',
                        'choices' => [
                            ['choice_text' => 'Kinetic energy', 'is_correct' => true],
                            ['choice_text' => 'Mass', 'is_correct' => false],
                            ['choice_text' => 'Electric charge', 'is_correct' => false],
                            ['choice_text' => 'Volume', 'is_correct' => false],
                        ],
                        'explanation' => 'Mechanical energy conservation converts gravitational potential energy into kinetic energy.',
                    ],

                    [
                        'question' => 'What happens to gravitational potential energy when an object falls?',
                        'choices' => [
                            ['choice_text' => 'It decreases', 'is_correct' => true],
                            ['choice_text' => 'It increases', 'is_correct' => false],
                            ['choice_text' => 'It is always unchanged', 'is_correct' => false],
                            ['choice_text' => 'It becomes infinite', 'is_correct' => false],
                        ],
                        'explanation' => 'Lower height corresponds to lower gravitational potential energy near Earth.',
                    ],

                    [
                        'question' => 'Why is gravitational potential energy considered a potential rather than a force?',
                        'choices' => [
                            ['choice_text' => 'It is a scalar energy function from which the conservative gravitational force can be derived', 'is_correct' => true],
                            ['choice_text' => 'It has units of acceleration', 'is_correct' => false],
                            ['choice_text' => 'It always points downward', 'is_correct' => false],
                            ['choice_text' => 'It is identical to weight', 'is_correct' => false],
                        ],
                        'explanation' => 'For conservative gravity, force and potential energy are related through the gradient.',
                    ],

                    [
                        'question' => 'For two objects at the same height near Earth, which object has greater gravitational potential energy?',
                        'choices' => [
                            ['choice_text' => 'The object with greater mass', 'is_correct' => true],
                            ['choice_text' => 'The object with smaller mass', 'is_correct' => false],
                            ['choice_text' => 'Both always have the same potential energy', 'is_correct' => false],
                            ['choice_text' => 'The one moving faster', 'is_correct' => false],
                        ],
                        'explanation' => 'At fixed h, Ug = mgh, so potential energy is proportional to mass.',
                    ],

                    [
                        'question' => 'Why is gravitational potential energy useful when analyzing a falling object?',
                        'choices' => [
                            ['choice_text' => 'It allows gravitational energy changes to be related to kinetic energy changes', 'is_correct' => true],
                            ['choice_text' => 'It eliminates gravity from the system', 'is_correct' => false],
                            ['choice_text' => 'It measures only the object’s mass', 'is_correct' => false],
                            ['choice_text' => 'It is independent of position', 'is_correct' => false],
                        ],
                        'explanation' => 'Energy conservation provides a convenient way to relate height and speed.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 5 — Orbits and Satellites
            // ============================================================

            [
                'title' => 'Orbits and Satellites',
                'description' => 'Introduction to circular orbits, satellites and gravitational orbital motion.',
                'questions' => [

                    [
                        'question' => 'Why can a satellite remain in a circular orbit around Earth?',
                        'choices' => [
                            ['choice_text' => 'Earth’s gravity provides the centripetal force needed for circular motion', 'is_correct' => true],
                            ['choice_text' => 'There is no gravity in orbit', 'is_correct' => false],
                            ['choice_text' => 'The satellite is held up by air pressure', 'is_correct' => false],
                            ['choice_text' => 'A satellite requires no acceleration', 'is_correct' => false],
                        ],
                        'explanation' => 'Gravity acts inward and supplies the required centripetal acceleration.',
                    ],

                    [
                        'question' => 'For a circular orbit around a spherical body of mass M, what is the orbital speed?',
                        'choices' => [
                            ['choice_text' => 'v = √(GM/r)', 'is_correct' => true],
                            ['choice_text' => 'v = √(r/GM)', 'is_correct' => false],
                            ['choice_text' => 'v = GM/r²', 'is_correct' => false],
                            ['choice_text' => 'v = GM/r', 'is_correct' => false],
                        ],
                        'explanation' => 'Equating gravitational and centripetal forces gives v = √(GM/r).',
                    ],

                    [
                        'question' => 'What happens to the orbital speed in a circular orbit if the orbital radius increases?',
                        'choices' => [
                            ['choice_text' => 'It decreases', 'is_correct' => true],
                            ['choice_text' => 'It increases', 'is_correct' => false],
                            ['choice_text' => 'It remains exactly unchanged', 'is_correct' => false],
                            ['choice_text' => 'It becomes zero immediately', 'is_correct' => false],
                        ],
                        'explanation' => 'Since v = √(GM/r), orbital speed decreases with increasing radius.',
                    ],

                    [
                        'question' => 'Why is a satellite continuously accelerating even when its orbital speed is constant?',
                        'choices' => [
                            ['choice_text' => 'Its velocity direction changes continuously', 'is_correct' => true],
                            ['choice_text' => 'Its mass increases continuously', 'is_correct' => false],
                            ['choice_text' => 'Its speed increases continuously', 'is_correct' => false],
                            ['choice_text' => 'Its gravitational force is zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Acceleration is the rate of change of velocity, including changes in direction.',
                    ],

                    [
                        'question' => 'What is the centripetal acceleration of a satellite moving in a circular orbit of radius r and speed v?',
                        'choices' => [
                            ['choice_text' => 'a_c = v²/r', 'is_correct' => true],
                            ['choice_text' => 'a_c = vr', 'is_correct' => false],
                            ['choice_text' => 'a_c = r/v²', 'is_correct' => false],
                            ['choice_text' => 'a_c = v/r²', 'is_correct' => false],
                        ],
                        'explanation' => 'Circular motion requires centripetal acceleration v²/r.',
                    ],

                    [
                        'question' => 'Why does a satellite not need a continuous engine burn to remain in an ideal circular orbit?',
                        'choices' => [
                            ['choice_text' => 'Gravity continually curves its trajectory and supplies the required centripetal acceleration', 'is_correct' => true],
                            ['choice_text' => 'The satellite is stationary in space', 'is_correct' => false],
                            ['choice_text' => 'Gravity disappears once the satellite is in orbit', 'is_correct' => false],
                            ['choice_text' => 'Air resistance maintains the orbit', 'is_correct' => false],
                        ],
                        'explanation' => 'An ideal orbit is a free-fall trajectory continuously curved by gravity.',
                    ],

                    [
                        'question' => 'What happens to the orbital period when the orbital radius increases around the same central body?',
                        'choices' => [
                            ['choice_text' => 'It increases', 'is_correct' => true],
                            ['choice_text' => 'It decreases', 'is_correct' => false],
                            ['choice_text' => 'It remains fixed for every radius', 'is_correct' => false],
                            ['choice_text' => 'It becomes zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Kepler’s third-law relation shows that orbital period increases with orbital radius.',
                    ],

                    [
                        'question' => 'What is the main force acting on an ideal planet or satellite in a simple gravitational orbit?',
                        'choices' => [
                            ['choice_text' => 'Gravitational force', 'is_correct' => true],
                            ['choice_text' => 'Friction', 'is_correct' => false],
                            ['choice_text' => 'Buoyant force', 'is_correct' => false],
                            ['choice_text' => 'Normal force from air', 'is_correct' => false],
                        ],
                        'explanation' => 'The ideal two-body orbital model includes gravitational interaction as the central force.',
                    ],

                    [
                        'question' => 'Why do satellites appear weightless even though Earth’s gravity acts on them?',
                        'choices' => [
                            ['choice_text' => 'They and everything inside them are in continuous free fall', 'is_correct' => true],
                            ['choice_text' => 'Gravity is absent above the atmosphere', 'is_correct' => false],
                            ['choice_text' => 'Their mass becomes zero', 'is_correct' => false],
                            ['choice_text' => 'The satellite has no acceleration', 'is_correct' => false],
                        ],
                        'explanation' => 'Orbital motion is continuous free fall, which removes the usual supporting contact force.',
                    ],

                    [
                        'question' => 'Why is orbital motion often described as falling around a planet rather than falling straight down?',
                        'choices' => [
                            ['choice_text' => 'The satellite has enough tangential velocity that its trajectory continuously curves around Earth', 'is_correct' => true],
                            ['choice_text' => 'Gravity points sideways only', 'is_correct' => false],
                            ['choice_text' => 'The satellite has no gravitational acceleration', 'is_correct' => false],
                            ['choice_text' => 'The satellite remains fixed relative to Earth', 'is_correct' => false],
                        ],
                        'explanation' => 'Tangential velocity combined with inward gravitational acceleration creates orbital motion.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 6 — Escape Velocity
            // ============================================================

            [
                'title' => 'Escape Velocity',
                'description' => 'Introduction to escape speed and gravitational binding.',
                'questions' => [

                    [
                        'question' => 'What is escape velocity?',
                        'choices' => [
                            ['choice_text' => 'The minimum speed needed to escape a gravitational field and reach infinity with zero remaining speed in the ideal model', 'is_correct' => true],
                            ['choice_text' => 'The maximum possible speed near a planet', 'is_correct' => false],
                            ['choice_text' => 'The speed of a satellite in every orbit', 'is_correct' => false],
                            ['choice_text' => 'The speed required to enter the atmosphere', 'is_correct' => false],
                        ],
                        'explanation' => 'Escape speed is the minimum initial speed for which the object can reach infinity with zero final speed in the ideal Newtonian model.',
                    ],

                    [
                        'question' => 'What is the escape speed from radius R around a spherical body of mass M?',
                        'choices' => [
                            ['choice_text' => 'vesc = √(2GM/R)', 'is_correct' => true],
                            ['choice_text' => 'vesc = √(GM/R)', 'is_correct' => false],
                            ['choice_text' => 'vesc = 2GM/R', 'is_correct' => false],
                            ['choice_text' => 'vesc = GM/R²', 'is_correct' => false],
                        ],
                        'explanation' => 'Energy conservation gives vesc = √(2GM/R).',
                    ],

                    [
                        'question' => 'How does escape velocity compare with circular orbital velocity at the same radius?',
                        'choices' => [
                            ['choice_text' => 'Escape velocity is √2 times the circular orbital speed', 'is_correct' => true],
                            ['choice_text' => 'They are always equal', 'is_correct' => false],
                            ['choice_text' => 'Escape velocity is half the orbital speed', 'is_correct' => false],
                            ['choice_text' => 'Escape velocity is twice the orbital speed', 'is_correct' => false],
                        ],
                        'explanation' => 'vcirc = √(GM/R), while vesc = √(2GM/R), so vesc = √2 vcirc.',
                    ],

                    [
                        'question' => 'What happens to escape velocity if the radius of the body increases while its mass stays constant?',
                        'choices' => [
                            ['choice_text' => 'It decreases', 'is_correct' => true],
                            ['choice_text' => 'It increases', 'is_correct' => false],
                            ['choice_text' => 'It remains constant', 'is_correct' => false],
                            ['choice_text' => 'It becomes infinite', 'is_correct' => false],
                        ],
                        'explanation' => 'Since vesc ∝ 1/√R, increasing R lowers escape velocity.',
                    ],

                    [
                        'question' => 'What happens to escape velocity if the mass of the central body increases while its radius remains fixed?',
                        'choices' => [
                            ['choice_text' => 'It increases', 'is_correct' => true],
                            ['choice_text' => 'It decreases', 'is_correct' => false],
                            ['choice_text' => 'It remains constant', 'is_correct' => false],
                            ['choice_text' => 'It becomes zero', 'is_correct' => false],
                        ],
                        'explanation' => 'Since vesc ∝ √M, increasing M increases escape velocity.',
                    ],

                    [
                        'question' => 'Why can an object with a speed below local escape velocity still leave its launch point and move very far away?',
                        'choices' => [
                            ['choice_text' => 'It may follow a bound trajectory or rise to a finite maximum distance before returning', 'is_correct' => true],
                            ['choice_text' => 'Any speed guarantees escape', 'is_correct' => false],
                            ['choice_text' => 'Gravity becomes zero immediately', 'is_correct' => false],
                            ['choice_text' => 'The object gains infinite energy automatically', 'is_correct' => false],
                        ],
                        'explanation' => 'Speeds below escape can produce bound trajectories with finite apogees.',
                    ],

                    [
                        'question' => 'Why is escape speed independent of the mass of the escaping object in Newtonian gravity?',
                        'choices' => [
                            ['choice_text' => 'The object’s mass cancels when applying energy conservation', 'is_correct' => true],
                            ['choice_text' => 'Gravity does not act on the object', 'is_correct' => false],
                            ['choice_text' => 'All objects have identical mass', 'is_correct' => false],
                            ['choice_text' => 'Energy is independent of mass', 'is_correct' => false],
                        ],
                        'explanation' => 'Both kinetic and gravitational potential energies are proportional to the escaping mass.',
                    ],

                    [
                        'question' => 'What does a negative total mechanical energy indicate for an ideal Newtonian gravitational system?',
                        'choices' => [
                            ['choice_text' => 'The object is gravitationally bound', 'is_correct' => true],
                            ['choice_text' => 'The object must have negative mass', 'is_correct' => false],
                            ['choice_text' => 'The object is guaranteed to escape', 'is_correct' => false],
                            ['choice_text' => 'The energy conservation law has failed', 'is_correct' => false],
                        ],
                        'explanation' => 'With zero potential energy at infinity, negative total energy corresponds to a bound state.',
                    ],

                    [
                        'question' => 'What total mechanical energy corresponds to the threshold of escape when U(∞) = 0?',
                        'choices' => [
                            ['choice_text' => 'Zero', 'is_correct' => true],
                            ['choice_text' => 'Positive infinity', 'is_correct' => false],
                            ['choice_text' => 'Always negative', 'is_correct' => false],
                            ['choice_text' => 'Equal to the object’s mass', 'is_correct' => false],
                        ],
                        'explanation' => 'At the limiting escape condition, the object reaches infinity with zero speed, giving E = 0.',
                    ],

                    [
                        'question' => 'Why is escape velocity larger for a more massive planet of the same radius?',
                        'choices' => [
                            ['choice_text' => 'The stronger gravitational field requires more initial kinetic energy for escape', 'is_correct' => true],
                            ['choice_text' => 'The object becomes heavier automatically', 'is_correct' => false],
                            ['choice_text' => 'The planet produces less gravity', 'is_correct' => false],
                            ['choice_text' => 'The radius becomes smaller automatically', 'is_correct' => false],
                        ],
                        'explanation' => 'Greater planetary mass means greater gravitational binding at the same radius.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 7 — Kepler's Laws
            // ============================================================

            [
                'title' => 'Kepler’s Laws and Planetary Motion',
                'description' => 'Introduction to Kepler’s laws and their connection with Newtonian gravitation.',
                'questions' => [

                    [
                        'question' => 'What does Kepler’s first law state?',
                        'choices' => [
                            ['choice_text' => 'Planets move in elliptical orbits with the Sun at one focus', 'is_correct' => true],
                            ['choice_text' => 'All planetary orbits are perfect circles', 'is_correct' => false],
                            ['choice_text' => 'Planetary speed is always constant', 'is_correct' => false],
                            ['choice_text' => 'Planets remain at fixed distances from the Sun', 'is_correct' => false],
                        ],
                        'explanation' => 'Kepler’s first law describes planetary orbits as ellipses with the Sun at one focus.',
                    ],

                    [
                        'question' => 'What does Kepler’s second law state?',
                        'choices' => [
                            ['choice_text' => 'A planet sweeps out equal areas in equal times', 'is_correct' => true],
                            ['choice_text' => 'A planet travels equal distances in equal times', 'is_correct' => false],
                            ['choice_text' => 'The orbital period is equal to the radius', 'is_correct' => false],
                            ['choice_text' => 'The speed is constant everywhere on the orbit', 'is_correct' => false],
                        ],
                        'explanation' => 'Kepler’s second law states that the radius vector sweeps equal areas in equal times.',
                    ],

                    [
                        'question' => 'What does Kepler’s third law relate for planets orbiting the same central body?',
                        'choices' => [
                            ['choice_text' => 'The square of orbital period to the cube of the semi-major axis', 'is_correct' => true],
                            ['choice_text' => 'The speed to the mass only', 'is_correct' => false],
                            ['choice_text' => 'The radius directly to the period', 'is_correct' => false],
                            ['choice_text' => 'The mass to the orbital temperature', 'is_correct' => false],
                        ],
                        'explanation' => 'For bodies orbiting the same central mass, T² is proportional to a³.',
                    ],

                    [
                        'question' => 'Why does a planet move faster when it is closer to the Sun in an elliptical orbit?',
                        'choices' => [
                            ['choice_text' => 'Conservation of angular momentum requires greater orbital speed at smaller radius', 'is_correct' => true],
                            ['choice_text' => 'Gravity becomes zero near the Sun', 'is_correct' => false],
                            ['choice_text' => 'The planet loses mass near the Sun', 'is_correct' => false],
                            ['choice_text' => 'Kepler’s second law requires constant linear speed', 'is_correct' => false],
                        ],
                        'explanation' => 'Equal-area motion means the planet moves faster when its distance from the Sun is smaller.',
                    ],

                    [
                        'question' => 'What is the geometric meaning of the semi-major axis of an elliptical orbit?',
                        'choices' => [
                            ['choice_text' => 'Half the length of the major axis', 'is_correct' => true],
                            ['choice_text' => 'The shortest distance to the Sun', 'is_correct' => false],
                            ['choice_text' => 'The orbital circumference', 'is_correct' => false],
                            ['choice_text' => 'The distance between the two foci', 'is_correct' => false],
                        ],
                        'explanation' => 'The semi-major axis is half the major-axis length of the ellipse.',
                    ],

                    [
                        'question' => 'Why is Kepler’s second law connected to conservation of angular momentum?',
                        'choices' => [
                            ['choice_text' => 'Constant angular momentum gives constant areal velocity', 'is_correct' => true],
                            ['choice_text' => 'Angular momentum is always zero', 'is_correct' => false],
                            ['choice_text' => 'Gravity is a tangential force', 'is_correct' => false],
                            ['choice_text' => 'Orbital radius remains constant', 'is_correct' => false],
                        ],
                        'explanation' => 'A central gravitational force produces zero torque about the center, conserving angular momentum.',
                    ],

                    [
                        'question' => 'For planets orbiting the same star, if the semi-major axis increases, the orbital period generally...',
                        'choices' => [
                            ['choice_text' => 'Increases', 'is_correct' => true],
                            ['choice_text' => 'Decreases', 'is_correct' => false],
                            ['choice_text' => 'Becomes zero', 'is_correct' => false],
                            ['choice_text' => 'Remains exactly unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Kepler’s third law gives T² ∝ a³.',
                    ],

                    [
                        'question' => 'Why were Kepler’s laws historically important?',
                        'choices' => [
                            ['choice_text' => 'They provided accurate empirical descriptions of planetary motion before Newton supplied the dynamical explanation', 'is_correct' => true],
                            ['choice_text' => 'They eliminated the need for observations', 'is_correct' => false],
                            ['choice_text' => 'They proved every orbit is circular', 'is_correct' => false],
                            ['choice_text' => 'They described only terrestrial falling objects', 'is_correct' => false],
                        ],
                        'explanation' => 'Kepler’s laws described observed planetary motion and were later explained using Newtonian gravity.',
                    ],

                    [
                        'question' => 'What type of force leads naturally to Keplerian planetary motion in Newtonian mechanics?',
                        'choices' => [
                            ['choice_text' => 'An inverse-square central gravitational force', 'is_correct' => true],
                            ['choice_text' => 'A constant horizontal force', 'is_correct' => false],
                            ['choice_text' => 'A friction force proportional to velocity', 'is_correct' => false],
                            ['choice_text' => 'A uniform magnetic force', 'is_correct' => false],
                        ],
                        'explanation' => 'Newton’s inverse-square gravitational force explains Kepler’s planetary laws.',
                    ],

                    [
                        'question' => 'Why is the Sun located at a focus rather than necessarily at the center of an elliptical planetary orbit?',
                        'choices' => [
                            ['choice_text' => 'The inverse-square gravitational dynamics produce conic-section orbits with the central mass at a focus', 'is_correct' => true],
                            ['choice_text' => 'The Sun continuously pushes planets sideways', 'is_correct' => false],
                            ['choice_text' => 'The center of an ellipse has no physical meaning', 'is_correct' => false],
                            ['choice_text' => 'Gravity acts only along the major axis', 'is_correct' => false],
                        ],
                        'explanation' => 'Newtonian inverse-square dynamics produce conic orbits with the attracting body at a focus.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 8 — Integrated Gravitation
            // ============================================================

            [
                'title' => 'Integrated Gravitation',
                'description' => 'Comprehensive beginner problems combining gravitational force, fields, potential energy, orbits and escape speed.',
                'questions' => [

                    [
                        'question' => 'Two masses of 2 kg and 3 kg are separated by 2 m. How does their gravitational force depend on these quantities?',
                        'choices' => [
                            ['choice_text' => 'It is proportional to (2 × 3)/2²', 'is_correct' => true],
                            ['choice_text' => 'It is proportional to 2 + 3 + 2', 'is_correct' => false],
                            ['choice_text' => 'It is proportional to (2 + 3)²', 'is_correct' => false],
                            ['choice_text' => 'It is proportional to 2² × 3² × 2²', 'is_correct' => false],
                        ],
                        'explanation' => 'Newton’s law gives F = Gm1m2/r².',
                    ],

                    [
                        'question' => 'An object is raised by 10 m near Earth. If its mass doubles, its gravitational potential-energy gain becomes...',
                        'choices' => [
                            ['choice_text' => 'Twice as large', 'is_correct' => true],
                            ['choice_text' => 'Four times larger', 'is_correct' => false],
                            ['choice_text' => 'Half as large', 'is_correct' => false],
                            ['choice_text' => 'Unchanged', 'is_correct' => false],
                        ],
                        'explanation' => 'Since ΔUg = mgh, doubling m doubles the potential-energy change.',
                    ],

                    [
                        'question' => 'At twice the distance from a point mass, the gravitational field strength is...',
                        'choices' => [
                            ['choice_text' => 'One quarter of its original value', 'is_correct' => true],
                            ['choice_text' => 'Half its original value', 'is_correct' => false],
                            ['choice_text' => 'Twice its original value', 'is_correct' => false],
                            ['choice_text' => 'Four times its original value', 'is_correct' => false],
                        ],
                        'explanation' => 'The field follows g ∝ 1/r².',
                    ],

                    [
                        'question' => 'A 5 kg object is at a location where g = 4 m/s². What is its weight?',
                        'choices' => [
                            ['choice_text' => '20 N', 'is_correct' => true],
                            ['choice_text' => '1,25 N', 'is_correct' => false],
                            ['choice_text' => '9,8 N', 'is_correct' => false],
                            ['choice_text' => '5 N', 'is_correct' => false],
                        ],
                        'explanation' => 'W = mg = 5 × 4 = 20 N.',
                    ],

                    [
                        'question' => 'A satellite moves in a circular orbit around Earth. What provides its centripetal force?',
                        'choices' => [
                            ['choice_text' => 'Earth’s gravitational force', 'is_correct' => true],
                            ['choice_text' => 'Air resistance', 'is_correct' => false],
                            ['choice_text' => 'The satellite’s engine continuously', 'is_correct' => false],
                            ['choice_text' => 'The normal force from space', 'is_correct' => false],
                        ],
                        'explanation' => 'In an ideal circular orbit, gravity supplies the required inward force.',
                    ],

                    [
                        'question' => 'Which statement correctly describes the relationship between circular orbital speed and escape speed at the same radius?',
                        'choices' => [
                            ['choice_text' => 'Escape speed is √2 times the circular orbital speed', 'is_correct' => true],
                            ['choice_text' => 'Escape speed equals half the orbital speed', 'is_correct' => false],
                            ['choice_text' => 'They are always identical', 'is_correct' => false],
                            ['choice_text' => 'Orbital speed is √2 times escape speed', 'is_correct' => false],
                        ],
                        'explanation' => 'vcirc = √(GM/r), while vesc = √(2GM/r).',
                    ],

                    [
                        'question' => 'Why does a falling object gain speed as gravitational potential energy decreases in an ideal system?',
                        'choices' => [
                            ['choice_text' => 'Conservation of mechanical energy transfers potential energy into kinetic energy', 'is_correct' => true],
                            ['choice_text' => 'Gravity creates energy from nothing', 'is_correct' => false],
                            ['choice_text' => 'Mass increases during the fall', 'is_correct' => false],
                            ['choice_text' => 'Potential energy is destroyed without replacement', 'is_correct' => false],
                        ],
                        'explanation' => 'In the absence of non-conservative losses, ΔK = -ΔU.',
                    ],

                    [
                        'question' => 'Why does an astronaut in orbit feel weightless even though gravitational acceleration is not zero?',
                        'choices' => [
                            ['choice_text' => 'The astronaut and spacecraft are both in free fall, so there is little or no supporting normal force', 'is_correct' => true],
                            ['choice_text' => 'Gravity is completely absent in orbit', 'is_correct' => false],
                            ['choice_text' => 'The astronaut’s mass disappears', 'is_correct' => false],
                            ['choice_text' => 'The spacecraft is stationary', 'is_correct' => false],
                        ],
                        'explanation' => 'Weightlessness is associated with free fall rather than the absence of gravity.',
                    ],

                    [
                        'question' => 'Why is gravitational potential energy negative for a finite separation when zero potential energy is chosen at infinity?',
                        'choices' => [
                            ['choice_text' => 'The potential-energy value at finite separation is below the chosen zero at infinity', 'is_correct' => true],
                            ['choice_text' => 'Negative energy means energy is destroyed', 'is_correct' => false],
                            ['choice_text' => 'Kinetic energy is negative', 'is_correct' => false],
                            ['choice_text' => 'Gravity is not conservative', 'is_correct' => false],
                        ],
                        'explanation' => 'For Newtonian gravity with U(∞) = 0, the potential energy is U = -GMm/r, which is negative at finite r.',
                    ],

                    [
                        'question' => 'Why is gravitation fundamental to the motion of planets, moons and artificial satellites in classical mechanics?',
                        'choices' => [
                            ['choice_text' => 'It provides the central force responsible for their orbital dynamics', 'is_correct' => true],
                            ['choice_text' => 'It acts only on objects at rest', 'is_correct' => false],
                            ['choice_text' => 'It prevents all orbital motion', 'is_correct' => false],
                            ['choice_text' => 'It is weaker than every other interaction in every situation', 'is_correct' => false],
                        ],
                        'explanation' => 'Gravity governs the large-scale orbital motion of astronomical bodies in the classical approximation.',
                    ],

                ],
            ],
        ];

        // Quiz-specific exam settings
        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50], // Universal Gravitation
            1 => ['duration' => 20, 'passing_score' => 60], // Gravitational Field and Acceleration
            2 => ['duration' => 15, 'passing_score' => 50], // Weight and Gravitational Effects
            3 => ['duration' => 20, 'passing_score' => 60], // Gravitational Potential Energy
            4 => ['duration' => 20, 'passing_score' => 60], // Orbits and Satellites
            5 => ['duration' => 20, 'passing_score' => 60], // Escape Velocity
            6 => ['duration' => 25, 'passing_score' => 65], // Kepler's Laws
            7 => ['duration' => 25, 'passing_score' => 65], // Integrated Gravitation
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex] ?? [
                'duration' => 20,
                'passing_score' => 60,
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

                // Randomize answer positions so the correct answer
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