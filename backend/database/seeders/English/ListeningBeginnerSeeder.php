<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ListeningBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'listening')->firstOrFail();

        $quizSettings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Everyday Listening Details',
                'description' => 'Practice catching simple facts such as names, places, times, and everyday information in short spoken messages.',
                'questions' => [
                    [
                        'question' => 'You hear: \'My name is Elena, and I work at the city library.\' Where does Elena work?',
                        'explanation' => 'The speaker directly says that Elena works at the city library.',
                        'choices' => [
                            ['choice_text' => 'At the city library', 'is_correct' => true],
                            ['choice_text' => 'At a hospital', 'is_correct' => false],
                            ['choice_text' => 'At a school', 'is_correct' => false],
                            ['choice_text' => 'At a bank', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The meeting starts at nine thirty.\' When does the meeting start?',
                        'explanation' => 'The speaker gives the exact start time as nine thirty.',
                        'choices' => [
                            ['choice_text' => '8:30', 'is_correct' => false],
                            ['choice_text' => '10:30', 'is_correct' => false],
                            ['choice_text' => '9:45', 'is_correct' => false],
                            ['choice_text' => '9:30', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'Please leave your coat on the chair near the door.\' Where should you leave the coat?',
                        'explanation' => 'The instruction says to leave the coat on the chair near the door.',
                        'choices' => [
                            ['choice_text' => 'Inside the kitchen', 'is_correct' => false],
                            ['choice_text' => 'At the reception desk', 'is_correct' => false],
                            ['choice_text' => 'On the chair near the door', 'is_correct' => true],
                            ['choice_text' => 'On the floor', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'I bought the blue notebook, not the green one.\' Which notebook did the speaker buy?',
                        'explanation' => 'The speaker contrasts the blue notebook with the green one and says the blue one was bought.',
                        'choices' => [
                            ['choice_text' => 'Neither notebook', 'is_correct' => false],
                            ['choice_text' => 'The blue notebook', 'is_correct' => true],
                            ['choice_text' => 'The green notebook', 'is_correct' => false],
                            ['choice_text' => 'Both notebooks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'Our train arrives in about twenty minutes.\' How long is the wait?',
                        'explanation' => 'The speaker says the train will arrive in about twenty minutes.',
                        'choices' => [
                            ['choice_text' => 'About 20 minutes', 'is_correct' => true],
                            ['choice_text' => 'About 10 minutes', 'is_correct' => false],
                            ['choice_text' => 'About 40 minutes', 'is_correct' => false],
                            ['choice_text' => 'About one hour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The pharmacy is opposite the supermarket.\' Where is the pharmacy?',
                        'explanation' => '\'Opposite\' means across from, so the pharmacy is across from the supermarket.',
                        'choices' => [
                            ['choice_text' => 'Behind the supermarket', 'is_correct' => false],
                            ['choice_text' => 'Inside the supermarket', 'is_correct' => false],
                            ['choice_text' => 'Next to the bus station', 'is_correct' => false],
                            ['choice_text' => 'Across from the supermarket', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'I can meet you on Thursday, but not on Friday.\' Which day can the speaker meet?',
                        'explanation' => 'The speaker clearly says Thursday is possible and Friday is not.',
                        'choices' => [
                            ['choice_text' => 'Both days', 'is_correct' => false],
                            ['choice_text' => 'Neither day', 'is_correct' => false],
                            ['choice_text' => 'Thursday', 'is_correct' => true],
                            ['choice_text' => 'Friday', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The red bag belongs to Sara, and the black one is mine.\' Who owns the black bag?',
                        'explanation' => 'The speaker says the black bag is theirs, so it belongs to the speaker.',
                        'choices' => [
                            ['choice_text' => 'The speaker\'s friend', 'is_correct' => false],
                            ['choice_text' => 'The speaker', 'is_correct' => true],
                            ['choice_text' => 'Sara', 'is_correct' => false],
                            ['choice_text' => 'The shop assistant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'Don\'t forget to bring your student card to the exam.\' What should the student bring?',
                        'explanation' => 'The instruction specifically mentions the student card.',
                        'choices' => [
                            ['choice_text' => 'A student card', 'is_correct' => true],
                            ['choice_text' => 'A passport', 'is_correct' => false],
                            ['choice_text' => 'A notebook only', 'is_correct' => false],
                            ['choice_text' => 'A bus ticket', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The cafe is closed today because the owner is away.\' Why is the cafe closed?',
                        'explanation' => 'The speaker gives the owner\'s absence as the reason for the closure.',
                        'choices' => [
                            ['choice_text' => 'The cafe is being painted', 'is_correct' => false],
                            ['choice_text' => 'There is no electricity', 'is_correct' => false],
                            ['choice_text' => 'It is too late in the evening', 'is_correct' => false],
                            ['choice_text' => 'The owner is away', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Times, Dates, and Numbers',
                'description' => 'Train your ear to catch times, dates, prices, quantities, phone numbers, and simple measurements.',
                'questions' => [
                    [
                        'question' => 'You hear: \'The appointment is on the fifteenth of May.\' What is the appointment date?',
                        'explanation' => 'The speaker says \'the fifteenth of May,\' which is May 15.',
                        'choices' => [
                            ['choice_text' => 'May 15', 'is_correct' => true],
                            ['choice_text' => 'May 5', 'is_correct' => false],
                            ['choice_text' => 'May 50', 'is_correct' => false],
                            ['choice_text' => 'April 15', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The shirt costs thirty-five euros.\' How much is it?',
                        'explanation' => 'The price is stated as thirty-five euros.',
                        'choices' => [
                            ['choice_text' => '€25', 'is_correct' => false],
                            ['choice_text' => '€45', 'is_correct' => false],
                            ['choice_text' => '€53', 'is_correct' => false],
                            ['choice_text' => '€35', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'Room 214 is on the second floor.\' Which room should you go to?',
                        'explanation' => 'The room number is two hundred fourteen, written as 214.',
                        'choices' => [
                            ['choice_text' => '241', 'is_correct' => false],
                            ['choice_text' => '204', 'is_correct' => false],
                            ['choice_text' => '214', 'is_correct' => true],
                            ['choice_text' => '124', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'Please call me on 06 24 18 73 50.\' Which number is correct?',
                        'explanation' => 'The correct number repeats the digits exactly as spoken.',
                        'choices' => [
                            ['choice_text' => '06 24 18 37 50', 'is_correct' => false],
                            ['choice_text' => '06 24 18 73 50', 'is_correct' => true],
                            ['choice_text' => '06 42 18 73 50', 'is_correct' => false],
                            ['choice_text' => '06 24 81 73 50', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'We need three bottles of water and two sandwiches.\' How many items are needed altogether?',
                        'explanation' => 'Three bottles plus two sandwiches makes five items in total.',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The bus comes at quarter to seven.\' What time is that?',
                        'explanation' => 'Quarter to seven means fifteen minutes before seven, which is 6:45.',
                        'choices' => [
                            ['choice_text' => '7:15', 'is_correct' => false],
                            ['choice_text' => '6:15', 'is_correct' => false],
                            ['choice_text' => '7:45', 'is_correct' => false],
                            ['choice_text' => '6:45', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The course lasts twelve weeks.\' How long is the course?',
                        'explanation' => 'The speaker says the course lasts twelve weeks.',
                        'choices' => [
                            ['choice_text' => '2 weeks', 'is_correct' => false],
                            ['choice_text' => '10 weeks', 'is_correct' => false],
                            ['choice_text' => '12 weeks', 'is_correct' => true],
                            ['choice_text' => '20 weeks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'We sold one hundred and twenty tickets.\' How many tickets were sold?',
                        'explanation' => 'One hundred and twenty is 120.',
                        'choices' => [
                            ['choice_text' => '112', 'is_correct' => false],
                            ['choice_text' => '120', 'is_correct' => true],
                            ['choice_text' => '102', 'is_correct' => false],
                            ['choice_text' => '210', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The delivery should arrive between two and three this afternoon.\' When should it arrive?',
                        'explanation' => 'The speaker gives a delivery window from two to three in the afternoon.',
                        'choices' => [
                            ['choice_text' => 'Between 2:00 and 3:00 p.m.', 'is_correct' => true],
                            ['choice_text' => 'Between 1:00 and 2:00 p.m.', 'is_correct' => false],
                            ['choice_text' => 'Between 3:00 and 4:00 p.m.', 'is_correct' => false],
                            ['choice_text' => 'At midnight', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The temperature reached minus five degrees last night.\' What was the temperature?',
                        'explanation' => 'The word \'minus\' shows that the temperature was five degrees below zero.',
                        'choices' => [
                            ['choice_text' => '5°C', 'is_correct' => false],
                            ['choice_text' => '15°C', 'is_correct' => false],
                            ['choice_text' => '0°C', 'is_correct' => false],
                            ['choice_text' => '-5°C', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Short Conversations',
                'description' => 'Listen for who says what, what each person wants, and simple responses in everyday conversations.',
                'questions' => [
                    [
                        'question' => 'A: \'Are you free after class?\' B: \'Yes, I am. Why?\' What does B mean?',
                        'explanation' => 'B answers yes to the question about being free, so B is available.',
                        'choices' => [
                            ['choice_text' => 'B is available', 'is_correct' => true],
                            ['choice_text' => 'B is tired', 'is_correct' => false],
                            ['choice_text' => 'B has left already', 'is_correct' => false],
                            ['choice_text' => 'B is at work', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: \'Would you like tea or coffee?\' B: \'Coffee, please.\' What does B choose?',
                        'explanation' => 'B directly chooses coffee.',
                        'choices' => [
                            ['choice_text' => 'Tea', 'is_correct' => false],
                            ['choice_text' => 'Water', 'is_correct' => false],
                            ['choice_text' => 'Juice', 'is_correct' => false],
                            ['choice_text' => 'Coffee', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A: \'Did you enjoy the movie?\' B: \'Yes, especially the ending.\' What did B like most?',
                        'explanation' => 'B says the ending was the part they especially enjoyed.',
                        'choices' => [
                            ['choice_text' => 'The music', 'is_correct' => false],
                            ['choice_text' => 'The cinema', 'is_correct' => false],
                            ['choice_text' => 'The ending', 'is_correct' => true],
                            ['choice_text' => 'The beginning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: \'Can you help me with this box?\' B: \'Sure.\' What does B mean?',
                        'explanation' => '\'Sure\' is a positive response showing willingness to help.',
                        'choices' => [
                            ['choice_text' => 'I do not understand', 'is_correct' => false],
                            ['choice_text' => 'Yes, I can help', 'is_correct' => true],
                            ['choice_text' => 'No, I am busy', 'is_correct' => false],
                            ['choice_text' => 'I already moved it', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: \'Why are you carrying an umbrella?\' B: \'Because the forecast says it may rain.\' Why does B have the umbrella?',
                        'explanation' => 'B says the forecast suggests rain may happen.',
                        'choices' => [
                            ['choice_text' => 'Rain is possible', 'is_correct' => true],
                            ['choice_text' => 'The sun is very strong', 'is_correct' => false],
                            ['choice_text' => 'The umbrella is broken', 'is_correct' => false],
                            ['choice_text' => 'B is going to the beach', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: \'Shall we meet at six?\' B: \'Six is fine, but could we meet near the station?\' Where does B want to meet?',
                        'explanation' => 'B accepts the time but suggests the station as the meeting place.',
                        'choices' => [
                            ['choice_text' => 'At home', 'is_correct' => false],
                            ['choice_text' => 'At the office', 'is_correct' => false],
                            ['choice_text' => 'At the airport', 'is_correct' => false],
                            ['choice_text' => 'Near the station', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A: \'I thought the shop closed at seven.\' B: \'It does on weekdays, but today it closes at five.\' When does it close today?',
                        'explanation' => 'B explains that today\'s closing time is five, not seven.',
                        'choices' => [
                            ['choice_text' => '6:00', 'is_correct' => false],
                            ['choice_text' => '8:00', 'is_correct' => false],
                            ['choice_text' => '5:00', 'is_correct' => true],
                            ['choice_text' => '7:00', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: \'Have you finished the report?\' B: \'Almost. I just need to check the last page.\' What is true?',
                        'explanation' => '\'Almost\' and \'just need to check the last page\' show that only a small part remains.',
                        'choices' => [
                            ['choice_text' => 'The report was lost', 'is_correct' => false],
                            ['choice_text' => 'The report is nearly finished', 'is_correct' => true],
                            ['choice_text' => 'The report has not been started', 'is_correct' => false],
                            ['choice_text' => 'The report is completely finished', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: \'Why don\'t we take the bus?\' B: \'I\'d rather walk. It\'s only ten minutes.\' What does B prefer?',
                        'explanation' => 'B says \'I\'d rather walk,\' which shows a preference for walking.',
                        'choices' => [
                            ['choice_text' => 'Walking', 'is_correct' => true],
                            ['choice_text' => 'Taking the bus', 'is_correct' => false],
                            ['choice_text' => 'Taking a taxi', 'is_correct' => false],
                            ['choice_text' => 'Waiting at home', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: \'Did Sara call?\' B: \'No, but she sent a message.\' What did Sara do?',
                        'explanation' => 'B says Sara did not call but did send a message.',
                        'choices' => [
                            ['choice_text' => 'She called twice', 'is_correct' => false],
                            ['choice_text' => 'She visited the office', 'is_correct' => false],
                            ['choice_text' => 'She left the country', 'is_correct' => false],
                            ['choice_text' => 'She sent a message', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Instructions and Announcements',
                'description' => 'Practice listening to directions, classroom instructions, public announcements, and simple procedures.',
                'questions' => [
                    [
                        'question' => 'You hear: \'First press the green button, then wait for the light.\' What should you do first?',
                        'explanation' => 'The speaker clearly gives pressing the green button as the first step.',
                        'choices' => [
                            ['choice_text' => 'Press the green button', 'is_correct' => true],
                            ['choice_text' => 'Wait for the light', 'is_correct' => false],
                            ['choice_text' => 'Press the red button', 'is_correct' => false],
                            ['choice_text' => 'Open the door', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'Passengers for flight 218 should go to gate 12.\' Where should they go?',
                        'explanation' => 'The announcement directs passengers for flight 218 to gate 12.',
                        'choices' => [
                            ['choice_text' => 'Gate 21', 'is_correct' => false],
                            ['choice_text' => 'Gate 8', 'is_correct' => false],
                            ['choice_text' => 'The ticket desk', 'is_correct' => false],
                            ['choice_text' => 'Gate 12', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'Please switch off your phones during the performance.\' What should people do?',
                        'explanation' => 'The instruction is to switch the phones off during the performance.',
                        'choices' => [
                            ['choice_text' => 'Take photos throughout the show', 'is_correct' => false],
                            ['choice_text' => 'Leave their phones at home tomorrow', 'is_correct' => false],
                            ['choice_text' => 'Turn their phones off', 'is_correct' => true],
                            ['choice_text' => 'Keep their phones on silent and use them', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'Turn left at the bank and continue straight until you see the park.\' Where should you turn?',
                        'explanation' => 'The first movement instruction is to turn left at the bank.',
                        'choices' => [
                            ['choice_text' => 'Right at the park', 'is_correct' => false],
                            ['choice_text' => 'Left at the bank', 'is_correct' => true],
                            ['choice_text' => 'Right at the bank', 'is_correct' => false],
                            ['choice_text' => 'Left at the park', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The museum tour begins in ten minutes in the main hall.\' Where does the tour begin?',
                        'explanation' => 'The announcement gives the main hall as the starting point.',
                        'choices' => [
                            ['choice_text' => 'In the main hall', 'is_correct' => true],
                            ['choice_text' => 'At the cafe', 'is_correct' => false],
                            ['choice_text' => 'Outside the museum', 'is_correct' => false],
                            ['choice_text' => 'In the gift shop', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'Please place your bags under the seat in front of you.\' Where should the bags go?',
                        'explanation' => 'The instruction says to place the bags under the seat in front of you.',
                        'choices' => [
                            ['choice_text' => 'On the overhead shelf', 'is_correct' => false],
                            ['choice_text' => 'Under your own seat only', 'is_correct' => false],
                            ['choice_text' => 'Near the exit', 'is_correct' => false],
                            ['choice_text' => 'Under the seat in front', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'After you finish the test, put your paper on the teacher\'s desk and wait quietly.\' What should students do with the paper?',
                        'explanation' => 'The final instruction says to put the paper on the teacher\'s desk.',
                        'choices' => [
                            ['choice_text' => 'Leave it on the floor', 'is_correct' => false],
                            ['choice_text' => 'Give it to another student', 'is_correct' => false],
                            ['choice_text' => 'Put it on the teacher\'s desk', 'is_correct' => true],
                            ['choice_text' => 'Take it home', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The elevator is out of order, so please use the stairs.\' What should people use?',
                        'explanation' => 'The announcement explains that the elevator is unavailable and the stairs should be used.',
                        'choices' => [
                            ['choice_text' => 'The escalator only', 'is_correct' => false],
                            ['choice_text' => 'The stairs', 'is_correct' => true],
                            ['choice_text' => 'Another elevator', 'is_correct' => false],
                            ['choice_text' => 'The parking lot', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'For safety reasons, do not stand behind the yellow line.\' What is not allowed?',
                        'explanation' => 'The instruction specifically prohibits standing behind the yellow line.',
                        'choices' => [
                            ['choice_text' => 'Standing behind the yellow line', 'is_correct' => true],
                            ['choice_text' => 'Waiting near the entrance', 'is_correct' => false],
                            ['choice_text' => 'Reading the sign', 'is_correct' => false],
                            ['choice_text' => 'Using the stairs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'Please keep your receipt until you leave the store.\' Why should customers keep it?',
                        'explanation' => 'The instruction says the receipt should be kept until leaving the store.',
                        'choices' => [
                            ['choice_text' => 'They must mail it to the bank', 'is_correct' => false],
                            ['choice_text' => 'It is part of the shopping bag', 'is_correct' => false],
                            ['choice_text' => 'It replaces their payment card', 'is_correct' => false],
                            ['choice_text' => 'It is needed until they leave', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Listening for Main Ideas',
                'description' => 'Practice understanding the overall point of a short spoken message without getting distracted by minor details.',
                'questions' => [
                    [
                        'question' => 'You hear a short talk: \'Our office is moving to a larger building next month. The new space has more meeting rooms and a bigger kitchen.\' What is the main point?',
                        'explanation' => 'The central message is that the office is moving to a larger building.',
                        'choices' => [
                            ['choice_text' => 'The office is moving to a new building', 'is_correct' => true],
                            ['choice_text' => 'The kitchen is being closed', 'is_correct' => false],
                            ['choice_text' => 'The office is hiring chefs', 'is_correct' => false],
                            ['choice_text' => 'The meeting rooms are being removed', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'I started cycling to work because traffic was getting worse. It also helps me save money.\' Why did the speaker change how they travel?',
                        'explanation' => 'The speaker gives worsening traffic and lower travel costs as reasons for cycling.',
                        'choices' => [
                            ['choice_text' => 'The speaker bought a new car', 'is_correct' => false],
                            ['choice_text' => 'The bus stopped running', 'is_correct' => false],
                            ['choice_text' => 'The office moved to another city', 'is_correct' => false],
                            ['choice_text' => 'Traffic became difficult and cycling saves money', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The community center will offer free computer classes every Saturday this month.\' What is the announcement mainly about?',
                        'explanation' => 'The main information is about free computer classes on Saturdays.',
                        'choices' => [
                            ['choice_text' => 'A change to opening hours', 'is_correct' => false],
                            ['choice_text' => 'A library closure', 'is_correct' => false],
                            ['choice_text' => 'Free computer classes', 'is_correct' => true],
                            ['choice_text' => 'New sports equipment', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'Our team did not win the game, but the new goalkeeper played very well.\' What is the overall message?',
                        'explanation' => 'The speaker says the team did not win but praises the goalkeeper.',
                        'choices' => [
                            ['choice_text' => 'The match was cancelled', 'is_correct' => false],
                            ['choice_text' => 'The team lost, but the goalkeeper performed strongly', 'is_correct' => true],
                            ['choice_text' => 'The team won easily', 'is_correct' => false],
                            ['choice_text' => 'The goalkeeper missed the game', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'I wanted to buy the black jacket, but it was too expensive, so I chose the gray one instead.\' What is the main idea?',
                        'explanation' => 'The price of the black jacket led the speaker to choose the gray one.',
                        'choices' => [
                            ['choice_text' => 'The speaker chose the gray jacket because the black one cost too much', 'is_correct' => true],
                            ['choice_text' => 'The gray jacket was more expensive', 'is_correct' => false],
                            ['choice_text' => 'The speaker bought both jackets', 'is_correct' => false],
                            ['choice_text' => 'The black jacket was unavailable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'We used to eat out every weekend, but now we cook at home more often. It is cheaper and we enjoy trying new recipes.\' What has changed?',
                        'explanation' => 'The speakers compare their old habit of eating out with their current habit of cooking at home.',
                        'choices' => [
                            ['choice_text' => 'They stopped eating completely', 'is_correct' => false],
                            ['choice_text' => 'They moved to a new restaurant', 'is_correct' => false],
                            ['choice_text' => 'They no longer like food', 'is_correct' => false],
                            ['choice_text' => 'The speakers now cook at home more often', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The weather was sunny in the morning, but by the afternoon it became windy and cold.\' What happened during the day?',
                        'explanation' => 'The speaker describes a clear change in weather during the day.',
                        'choices' => [
                            ['choice_text' => 'It snowed in the morning', 'is_correct' => false],
                            ['choice_text' => 'The afternoon was warmer than the morning', 'is_correct' => false],
                            ['choice_text' => 'The weather changed from warm and sunny to colder and windier', 'is_correct' => true],
                            ['choice_text' => 'It stayed sunny all day', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'I joined the language club because I wanted more speaking practice and a chance to meet new people.\' Why did the speaker join?',
                        'explanation' => 'The speaker gives two reasons: more speaking practice and meeting new people.',
                        'choices' => [
                            ['choice_text' => 'To avoid meeting people', 'is_correct' => false],
                            ['choice_text' => 'For speaking practice and social contact', 'is_correct' => true],
                            ['choice_text' => 'To find a job', 'is_correct' => false],
                            ['choice_text' => 'To learn mathematics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The store is closing earlier this week while the staff prepare for renovation.\' Why is it closing earlier?',
                        'explanation' => 'The shortened hours are connected to preparation for renovation.',
                        'choices' => [
                            ['choice_text' => 'Staff are preparing for renovation', 'is_correct' => true],
                            ['choice_text' => 'The store has no customers', 'is_correct' => false],
                            ['choice_text' => 'The weather is bad', 'is_correct' => false],
                            ['choice_text' => 'The owner is on holiday', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'We had planned a beach trip, but heavy rain changed our plans and we went to the museum instead.\' What happened in the end?',
                        'explanation' => 'The rain changed the original plan, so they went to the museum instead.',
                        'choices' => [
                            ['choice_text' => 'They stayed at the beach', 'is_correct' => false],
                            ['choice_text' => 'They cancelled everything', 'is_correct' => false],
                            ['choice_text' => 'They went hiking', 'is_correct' => false],
                            ['choice_text' => 'They visited a museum', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Listening for Opinion and Attitude',
                'description' => 'Learn to identify simple opinions, preferences, agreement, disagreement, and feelings from short spoken comments.',
                'questions' => [
                    [
                        'question' => 'You hear: \'I really enjoyed the workshop. The examples were clear and practical.\' How does the speaker feel about the workshop?',
                        'explanation' => 'The speaker says they really enjoyed it and praises the examples.',
                        'choices' => [
                            ['choice_text' => 'Positive', 'is_correct' => true],
                            ['choice_text' => 'Negative', 'is_correct' => false],
                            ['choice_text' => 'Angry', 'is_correct' => false],
                            ['choice_text' => 'Uninterested', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The hotel was okay, but the room was smaller than I expected.\' What is the speaker\'s overall attitude?',
                        'explanation' => 'The speaker says the hotel was okay but criticizes the room size, so the opinion is mixed.',
                        'choices' => [
                            ['choice_text' => 'Completely enthusiastic', 'is_correct' => false],
                            ['choice_text' => 'Very angry about the staff', 'is_correct' => false],
                            ['choice_text' => 'Unable to remember the hotel', 'is_correct' => false],
                            ['choice_text' => 'Mixed or partly negative', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'I would rather take the train than drive.\' What is the speaker\'s preference?',
                        'explanation' => '\'Would rather\' expresses the speaker\'s preferred choice.',
                        'choices' => [
                            ['choice_text' => 'Flying', 'is_correct' => false],
                            ['choice_text' => 'Walking', 'is_correct' => false],
                            ['choice_text' => 'Taking the train', 'is_correct' => true],
                            ['choice_text' => 'Driving', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'I don\'t think the new schedule is a good idea.\' Does the speaker agree with the schedule?',
                        'explanation' => 'The phrase \'I don\'t think ... is a good idea\' clearly shows disagreement.',
                        'choices' => [
                            ['choice_text' => 'They created the schedule', 'is_correct' => false],
                            ['choice_text' => 'No', 'is_correct' => true],
                            ['choice_text' => 'Yes, strongly', 'is_correct' => false],
                            ['choice_text' => 'They do not know the schedule', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'That sounds great! Let\'s do it.\' How does the speaker react?',
                        'explanation' => '\'That sounds great\' and \'Let\'s do it\' show strong positive agreement.',
                        'choices' => [
                            ['choice_text' => 'Enthusiastically', 'is_correct' => true],
                            ['choice_text' => 'Angrily', 'is_correct' => false],
                            ['choice_text' => 'Confused', 'is_correct' => false],
                            ['choice_text' => 'Sadly', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'I\'m not sure about the restaurant. The food was fine, but the service was slow.\' What is the opinion?',
                        'explanation' => 'The speaker gives one positive point and one negative point, so the opinion is mixed.',
                        'choices' => [
                            ['choice_text' => 'Very positive', 'is_correct' => false],
                            ['choice_text' => 'Very negative about the food only', 'is_correct' => false],
                            ['choice_text' => 'Completely certain it is the best restaurant', 'is_correct' => false],
                            ['choice_text' => 'Mixed', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'Honestly, I was disappointed by the concert.\' How does the speaker feel?',
                        'explanation' => 'The word \'disappointed\' directly describes the speaker\'s feeling.',
                        'choices' => [
                            ['choice_text' => 'Proud', 'is_correct' => false],
                            ['choice_text' => 'Relaxed', 'is_correct' => false],
                            ['choice_text' => 'Disappointed', 'is_correct' => true],
                            ['choice_text' => 'Excited', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'I\'d definitely recommend this book.\' What does the speaker think?',
                        'explanation' => '\'Definitely recommend\' shows a strong positive opinion.',
                        'choices' => [
                            ['choice_text' => 'The speaker disliked the ending', 'is_correct' => false],
                            ['choice_text' => 'The book is worth recommending', 'is_correct' => true],
                            ['choice_text' => 'The book is too difficult to read', 'is_correct' => false],
                            ['choice_text' => 'The speaker has not read it', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'Maybe we should wait until tomorrow.\' What does the speaker suggest?',
                        'explanation' => '\'Maybe we should\' is a suggestion to wait until tomorrow.',
                        'choices' => [
                            ['choice_text' => 'Waiting until tomorrow', 'is_correct' => true],
                            ['choice_text' => 'Leaving immediately', 'is_correct' => false],
                            ['choice_text' => 'Cancelling the plan forever', 'is_correct' => false],
                            ['choice_text' => 'Calling the police', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'I agree with you. The earlier train is more convenient.\' What is the speaker doing?',
                        'explanation' => 'The speaker explicitly agrees and then explains why.',
                        'choices' => [
                            ['choice_text' => 'Changing the subject', 'is_correct' => false],
                            ['choice_text' => 'Rejecting the suggestion', 'is_correct' => false],
                            ['choice_text' => 'Asking for directions', 'is_correct' => false],
                            ['choice_text' => 'Agreeing and giving a reason', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Listening for Inference',
                'description' => 'Use clues from short spoken situations to work out information that is not stated word for word.',
                'questions' => [
                    [
                        'question' => 'You hear: \'I can\'t find my umbrella, and look at those dark clouds!\' What is probably going to happen?',
                        'explanation' => 'Dark clouds and the missing umbrella suggest possible rain.',
                        'choices' => [
                            ['choice_text' => 'It may rain', 'is_correct' => true],
                            ['choice_text' => 'The sun will be very strong', 'is_correct' => false],
                            ['choice_text' => 'The speaker will go swimming', 'is_correct' => false],
                            ['choice_text' => 'The speaker is cooking dinner', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'I left home at 7:50, and the train was due at 8:00, but the station is a ten-minute walk away.\' What can you infer?',
                        'explanation' => 'The speaker needed ten minutes to reach the station, so leaving at 7:50 likely made them late for the 8:00 train.',
                        'choices' => [
                            ['choice_text' => 'The speaker arrived an hour early', 'is_correct' => false],
                            ['choice_text' => 'The train was cancelled the day before', 'is_correct' => false],
                            ['choice_text' => 'The speaker lives at the station', 'is_correct' => false],
                            ['choice_text' => 'The speaker probably missed the train', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'I haven\'t eaten since breakfast, and that restaurant smells amazing.\' How does the speaker probably feel?',
                        'explanation' => 'Not eating since breakfast plus the appealing smell suggests the speaker is hungry.',
                        'choices' => [
                            ['choice_text' => 'Angry at the restaurant', 'is_correct' => false],
                            ['choice_text' => 'Cold', 'is_correct' => false],
                            ['choice_text' => 'Hungry', 'is_correct' => true],
                            ['choice_text' => 'Sleepy', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'Sam keeps looking at his watch while the meeting continues.\' What might this suggest?',
                        'explanation' => 'Repeatedly checking the time often suggests impatience, hurry, or concern about being late.',
                        'choices' => [
                            ['choice_text' => 'He wants the meeting to become longer', 'is_correct' => false],
                            ['choice_text' => 'He may be in a hurry or worried about the time', 'is_correct' => true],
                            ['choice_text' => 'He is excited about lunch next week only', 'is_correct' => false],
                            ['choice_text' => 'He has lost his watch', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'Nadia brought a camera, comfortable shoes, and a map.\' What is she probably planning to do?',
                        'explanation' => 'The camera, comfortable shoes, and map suggest walking around and exploring.',
                        'choices' => [
                            ['choice_text' => 'Go sightseeing or explore a place', 'is_correct' => true],
                            ['choice_text' => 'Attend a formal dinner', 'is_correct' => false],
                            ['choice_text' => 'Take a swimming lesson', 'is_correct' => false],
                            ['choice_text' => 'Repair a car', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The lights are off, the doors are locked, and there is a note saying [Back at 2].\' What can you infer?',
                        'explanation' => 'The note and locked doors indicate that the place is closed for now and will reopen later.',
                        'choices' => [
                            ['choice_text' => 'The shop is opening immediately', 'is_correct' => false],
                            ['choice_text' => 'The staff are having a meeting inside', 'is_correct' => false],
                            ['choice_text' => 'The building has no owner', 'is_correct' => false],
                            ['choice_text' => 'The place is temporarily closed', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'Maria keeps coughing and says she feels weak.\' What is most likely true?',
                        'explanation' => 'Coughing and feeling weak commonly suggest that someone is unwell.',
                        'choices' => [
                            ['choice_text' => 'Maria is celebrating', 'is_correct' => false],
                            ['choice_text' => 'Maria is looking for a new job', 'is_correct' => false],
                            ['choice_text' => 'Maria may be ill', 'is_correct' => true],
                            ['choice_text' => 'Maria is preparing for a race', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The children are carrying sleeping bags, and their father says [We will leave before sunrise].\' Where are they probably going?',
                        'explanation' => 'Sleeping bags and leaving before sunrise suggest an outdoor trip or camping activity.',
                        'choices' => [
                            ['choice_text' => 'To a shopping mall', 'is_correct' => false],
                            ['choice_text' => 'On an early trip or camping outing', 'is_correct' => true],
                            ['choice_text' => 'To a restaurant for breakfast', 'is_correct' => false],
                            ['choice_text' => 'To a cinema at noon', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The waiter brings a cake with candles while everyone starts singing.\' What is probably happening?',
                        'explanation' => 'Cake, candles, and singing strongly suggest a birthday celebration.',
                        'choices' => [
                            ['choice_text' => 'Someone is celebrating a birthday', 'is_correct' => true],
                            ['choice_text' => 'The restaurant is closing', 'is_correct' => false],
                            ['choice_text' => 'The group is leaving the city', 'is_correct' => false],
                            ['choice_text' => 'Someone is taking an exam', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'Jon has a suitcase, a passport, and a boarding pass.\' What is most likely true?',
                        'explanation' => 'A suitcase, passport, and boarding pass strongly suggest air travel.',
                        'choices' => [
                            ['choice_text' => 'Jon is going to a local supermarket', 'is_correct' => false],
                            ['choice_text' => 'Jon is starting a school exam', 'is_correct' => false],
                            ['choice_text' => 'Jon is repairing his car', 'is_correct' => false],
                            ['choice_text' => 'Jon is travelling by air', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Mixed Listening Review',
                'description' => 'Combine detail, sequence, main idea, opinion, and inference skills in realistic beginner listening situations.',
                'questions' => [
                    [
                        'question' => 'You hear: \'The library opens at ten, but the study room is available from nine thirty for registered students.\' When can registered students use the study room?',
                        'explanation' => 'The special study room opens at 9:30 for registered students.',
                        'choices' => [
                            ['choice_text' => 'From 9:30', 'is_correct' => true],
                            ['choice_text' => 'From 10:00', 'is_correct' => false],
                            ['choice_text' => 'From 8:30', 'is_correct' => false],
                            ['choice_text' => 'Only after noon', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'I ordered the vegetable soup, but they brought chicken soup, so I sent it back.\' What did the speaker do?',
                        'explanation' => 'The speaker says the chicken soup was sent back because it was not the order.',
                        'choices' => [
                            ['choice_text' => 'Ate the chicken soup', 'is_correct' => false],
                            ['choice_text' => 'Ordered dessert first', 'is_correct' => false],
                            ['choice_text' => 'Cancelled the restaurant', 'is_correct' => false],
                            ['choice_text' => 'Returned the wrong soup', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The lecture is in room 14. Please bring a notebook, but you don\'t need a laptop.\' What should students bring?',
                        'explanation' => 'The speaker asks students to bring a notebook and says a laptop is not necessary.',
                        'choices' => [
                            ['choice_text' => 'A printer', 'is_correct' => false],
                            ['choice_text' => 'A passport', 'is_correct' => false],
                            ['choice_text' => 'A notebook', 'is_correct' => true],
                            ['choice_text' => 'A laptop', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'We planned to leave at six, but Omar called to say he was delayed, so we left at seven.\' Why did they leave later?',
                        'explanation' => 'The speaker directly gives Omar\'s delay as the reason for leaving at seven.',
                        'choices' => [
                            ['choice_text' => 'The road was closed', 'is_correct' => false],
                            ['choice_text' => 'Omar was delayed', 'is_correct' => true],
                            ['choice_text' => 'The car broke down', 'is_correct' => false],
                            ['choice_text' => 'The weather was sunny', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'I like the new cafe. It is quiet, the coffee is good, and there are plenty of tables.\' What is the speaker\'s opinion?',
                        'explanation' => 'The speaker lists several positive features of the cafe.',
                        'choices' => [
                            ['choice_text' => 'Positive', 'is_correct' => true],
                            ['choice_text' => 'Negative', 'is_correct' => false],
                            ['choice_text' => 'Uncertain about every part', 'is_correct' => false],
                            ['choice_text' => 'Angry about the staff', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'After you sign the form, give it to reception and collect your badge.\' What happens immediately after signing?',
                        'explanation' => 'The sequence says signing comes first, then giving the form to reception.',
                        'choices' => [
                            ['choice_text' => 'Collect the badge first', 'is_correct' => false],
                            ['choice_text' => 'Go home', 'is_correct' => false],
                            ['choice_text' => 'Sign another form', 'is_correct' => false],
                            ['choice_text' => 'Give the form to reception', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'My brother works nights, so he sleeps during the day.\' When does he sleep?',
                        'explanation' => 'The speaker explains that working nights means sleeping during the day.',
                        'choices' => [
                            ['choice_text' => 'Only in the morning', 'is_correct' => false],
                            ['choice_text' => 'Before dinner every evening', 'is_correct' => false],
                            ['choice_text' => 'During the day', 'is_correct' => true],
                            ['choice_text' => 'At midnight only', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'The bus was supposed to arrive at 8:10, but it finally came at 8:25.\' How late was it?',
                        'explanation' => 'From 8:10 to 8:25 is a 15-minute delay.',
                        'choices' => [
                            ['choice_text' => '5 minutes early', 'is_correct' => false],
                            ['choice_text' => '15 minutes late', 'is_correct' => true],
                            ['choice_text' => '10 minutes late', 'is_correct' => false],
                            ['choice_text' => '25 minutes late', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'I don\'t mind the new office, although parking is difficult.\' What can you infer?',
                        'explanation' => 'The phrase \'don\'t mind\' is generally neutral or positive, while the parking comment adds a complaint.',
                        'choices' => [
                            ['choice_text' => 'The speaker is mostly okay with the office but has one complaint', 'is_correct' => true],
                            ['choice_text' => 'The speaker hates everything about the office', 'is_correct' => false],
                            ['choice_text' => 'Parking is free and easy', 'is_correct' => false],
                            ['choice_text' => 'The speaker has not seen the office', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You hear: \'If you need extra help, the tutor will be available in the library after class.\' Where can students find the tutor?',
                        'explanation' => 'The speaker says the tutor will be available in the library after class.',
                        'choices' => [
                            ['choice_text' => 'At the sports center', 'is_correct' => false],
                            ['choice_text' => 'In the cafeteria', 'is_correct' => false],
                            ['choice_text' => 'At the bus station', 'is_correct' => false],
                            ['choice_text' => 'In the library', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex];

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

                foreach ($questionData['choices'] as $choiceIndex => $choice) {
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
