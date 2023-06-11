<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder {

    /**
     * Run the database seeds.
     */
    public function run(): void {

        $services = [

            [ // ID = 1
                "type"          => "Bus",
                "description"   => "The Circuit de Barcelona-Catalunya offers a shuttle bus service that connects the city of Barcelona with the racetrack during major events. The buses depart from designated stops in the city center and drop off passengers directly at the circuit. The service is comfortable, convenient, and a great way to avoid the hassle of driving and parking.",
                "capacity"      => 70,
                "price"         => 78.65
            ],

            [ // ID = 2
                "type"          => "Catering",
                "description"   => "The catering service at Circuit de Barcelona-Catalunya provides a wide range of food and beverage options for both public and corporate events. From snacks and drinks to complete meals, visitors can enjoy delicious food and exceptional service in different areas of the venue, including VIP boxes, suites, restaurants, and mobile kiosks. The catering team can also customize menus for specific dietary requirements and preferences.",
                "capacity"      => 0,
                "price"         => 0.00
            ],

            [ // ID = 3
                "type"          => "Chauffeur",
                "description"   => "The Chauffeur service at the Montmeló circuit provides an exclusive experience for guests to enjoy the event without worrying about transportation. The service includes a professional driver, a luxury car, and personalized attention to meet the specific needs of each guest.",
                "capacity"      => 1,
                "price"         => 181.5
            ],

            [ // ID = 4
                "type"          => "Climatization",
                "description"   => "The Montmeló circuit features air conditioning and heating systems in its facilities, ensuring a comfortable environment for visitors and staff, regardless of the weather conditions outside.",
                "capacity"      => 0,
                "price"         => 0.00
            ],

            [ // ID = 5
                "type"          => "Furniture",
                "description"   => "The Circuit de Barcelona-Catalunya provides a variety of furniture for different areas, such as chairs, tables, benches, and stools. This furniture is designed to meet the specific needs of the various events held at the circuit, including races, exhibitions, and concerts. The furniture is available in different styles and materials to fit the desired aesthetic and practical requirements.",
                "capacity"      => 0,
                "price"         => 0.00
            ],

            [ // ID = 6
                "type"          => "Open Bar & Snacks",
                "description"   => "At Circuit de Barcelona-Catalunya, guests can enjoy the Open Bar & Snacks service, which offers a wide variety of drinks and snacks throughout the day. This service is available in various areas of the circuit, allowing guests to refuel and relax while enjoying the excitement of the races.",
                "capacity"      => 0,
                "price"         => 0.00
            ],

            [ // ID = 7
                "type"          => "Parking",
                "description"   => "The parking facilities at the Circuit de Barcelona-Catalunya offer a safe and convenient solution for visitors arriving by car. There are various parking options available, ranging from general parking to VIP parking. The parking lots are spacious and are monitored by security staff to ensure the safety of vehicles. There are also shuttle buses available to transport visitors from the parking lots to the circuit entrance.",
                "capacity"      => 1,
                "price"         => 30.25
            ],

            [ // ID = 8
                "type"          => "Television",
                "description"   => "The Montmeló circuit provides high-quality televisions strategically located throughout the facilities, allowing spectators to enjoy a complete and detailed view of the races. The TVs display real-time race information, including timings, rankings, and key moments, enhancing the viewing experience and ensuring that fans don't miss a beat.",
                "capacity"      => 0,
                "price"         => 0.00
            ]


        ];

        foreach ($services as $service) {

            Service::create($service);

        }
    
    }

}
