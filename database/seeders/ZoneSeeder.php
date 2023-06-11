<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zone;

class ZoneSeeder extends Seeder {

    /**
     * Run the database seeds.
     */
    public function run(): void {

        $zones = [
            
            [ // ID => 1       (A) Privilege Corner
                "code"        => "A",
                "name"        => "Privilege Corner",
                "description" => "The Privilege Corner building stands on a hill located at the end of the Circuit straight, in an extensive 6,000m2 green area with a 435m2 two-story building, which allows events to be held outdoors and indoors. But the great attraction of the building lies on the upper floor, with a large terrace that offers a 360 degree view of the first curves of the Circuit de Barcelona-Catalunya and the main straight.",
                "area"        => 525,
                "height"      => 3.20,
                "cocktail"    => 520,
                "theater"     => 145,
                "school"      => 40,
                "feast"       => 340,
                "cabaret"     => 300
            ],

            [ // ID => 2       (B) Cristal Palace
                "code"        => "B",
                "name"        => "Cristal Palace",
                "description" => "A modern space with lots of natural light where you can hold your meetings, making a difference and enjoying a unique environment.",
                "area"        => 130,
                "height"      => 2.75,
                "cocktail"    => 120,
                "theater"     => 80,
                "school"      => 0,
                "feast"       => 80,
                "cabaret"     => 60
            ],

            [ // ID => 3      (C1) Boxes
                "code"        => "C1",
                "name"        => "Boxes",
                "description" => "Make your team work with the precision of a team. For any activity you want to celebrate, we put at your disposal one of the spaces par excellence of the elite competition.",
                "area"        => 90,
                "height"      => 3.55,
                "cocktail"    => 90,
                "theater"     => 75,
                "school"      => 25,
                "feast"       => 60,
                "cabaret"     => 45
            ],

            [ // ID => 4       (C2) Box Floor
                "code"        => "C2",
                "name"        => "Box Floor",
                "description" => "Due to its strategic location, just above the pits, it is one of the most exclusive spaces on the Circuit. You will enjoy a view of the entire pit lane, starting grid and paddock. Located in the focus of the action!",
                "area"        => 70,
                "height"      => 2.50,
                "cocktail"    => 60,
                "theater"     => 50,
                "school"      => 15,
                "feast"       => 30,
                "cabaret"     => 0
            ],

            [ // ID => 5       (C3) Box Floor Member
                "code"        => "C3",
                "name"        => "Box Floor Member",
                "description" => "Due to its strategic location, just above the pits, it is the Circuit's most exclusive product. Available to individuals and companies, you can enjoy a view of the entire pit lane, starting grid and paddock. A unique way to experience all the races.",
                "area"        => 1085,
                "height"      => 2.50,
                "cocktail"    => 525,
                "theater"     => 820,
                "school"      => 520,
                "feast"       => 520,
                "cabaret"     => 0
            ],

            [ // ID => 6       (C4) Briefing Room
                "code"        => "C4",
                "name"        => "Briefing Room",
                "description" => "This room, located in the paddock pit building, used by journalists to interview the winning drivers after the race, has a surface area of 165m2 and is equipped with audio and video equipment. An emblematic space in every professional circuit.",
                "area"        => 135,
                "height"      => 2.80,
                "cocktail"    => 115,
                "theater"     => 100,
                "school"      => 30,
                "feast"       => 70,
                "cabaret"     => 45
            ],

            [ // ID => 7       (C5) Press Room
                "code"        => "C5",
                "name"        => "Press Room",
                "description" => "This room is the meeting point for journalists during the celebration of the grand prizes. With an approximate capacity of 450 seats, each equipped with an individual ADSL connection, it also has 32” monitors, lockers and telephone lines.",
                "area"        => 850,
                "height"      => 2.10,
                "cocktail"    => 600,
                "theater"     => 630,
                "school"      => 210,
                "feast"       => 420,
                "cabaret"     => 0
            ],

            [ // ID => 8       (D1) VIP
                "code"        => "D1",
                "name"        => "VIP",
                "description" => "Located on the third floor of the control tower, this room has a surface area of 170 m2. Enjoy a unique space with luxurious views.",
                "area"        => 170,
                "height"      => 2.50,
                "cocktail"    => 150,
                "theater"     => 100,
                "school"      => 25,
                "feast"       => 90,
                "cabaret"     => 0
            ],

            [ // ID => 9       (D2) Panoramic Room
                "code"        => "D2",
                "name"        => "Panoramic Room",
                "description" => "The panoramic room is located on the fourth floor of the control tower. A room that will offer you one of the best views of the Circuit and where at the same time you can enjoy an exclusive space.",
                "area"        => 220,
                "height"      => 2.40,
                "cocktail"    => 150,
                "theater"     => 40,
                "school"      => 10,
                "feast"       => 30,
                "cabaret"     => 0
            ],

            [ // ID => 10      (E1) Corporate Suite
                "code"        => "E1",
                "name"        => "Corporate Suite",
                "description" => "The Corporte Suite, located in the Main Grandstand, is the suite with the largest capacity and offers impressive views of the entire circuit.",
                "area"        => 295,
                "height"      => 2.70,
                "cocktail"    => 250,
                "theater"     => 230,
                "school"      => 85,
                "feast"       => 200,
                "cabaret"     => 0
            ],

            [ // ID => 11      (E2) Single Suite
                "code"        => "E2",
                "name"        => "Single Suite",
                "description" => "On the first and third floors of the Main Grandstand we have Suites where you can organize any type of activity and with unbeatable views.",
                "area"        => 40,
                "height"      => 2.70,
                "cocktail"    => 35,
                "theater"     => 30,
                "school"      => 15,
                "feast"       => 30,
                "cabaret"     => 0
            ],

            [ // ID => 12      (F) Paddock
                "code"        => "F",
                "name"        => "Paddock",
                "description" => "Enjoy an outdoor space in front of the incomparable setting of the Circuit layout. More than 30,000m2 equipped with all the services you may need to hold your events.",
                "area"        => 35600,
                "height"      => 0,
                "cocktail"    => 0,
                "theater"     => 0,
                "school"      => 0,
                "feast"       => 0,
                "cabaret"     => 0
            ],

            [ // ID => 13      (G) Principal Stand Space
                "code"        => "G",
                "name"        => "Principal Stand Space",
                "description" => "Behind the Main Grandstand, it has more than 7,000 m2 of exterior space where you can organize fairs, corporate events, concerts or whatever you can imagine.",
                "area"        => 7600,
                "height"      => 0,
                "cocktail"    => 0,
                "theater"     => 0,
                "school"      => 0,
                "feast"       => 0,
                "cabaret"     => 0
            ],

            [ // ID => 14      (H) Stadium Zone
                "code"        => "H",
                "name"        => "Stadium Zone",
                "description" => "Very close to the stadium area, in one of the highest parts of the Circuit, it has 5,000m2 of outdoor space where you can host any type of activity and with impressive views of the Circuit.",
                "area"        => 5000,
                "height"      => 0,
                "cocktail"    => 0,
                "theater"     => 0,
                "school"      => 0,
                "feast"       => 0,
                "cabaret"     => 0
            ]


        ];

        foreach ($zones as $zone) {

            Zone::create($zone);

        }
    
    }

}
