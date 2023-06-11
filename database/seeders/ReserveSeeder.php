<?php

namespace Database\Seeders;

use App\Models\Reserve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReserveSeeder extends Seeder {

    /**
     * Run the database seeds.
     */
    public function run(): void {
        
        for ($i = 1; $i <= 2; $i++) {
        
            $reserves = [

                [ // ID => 1
                    "email"         => "marc.garcia@gmail.com",
                    "date"          => "2023-05-16",
                    "zone"          => "A",
                    "services"      => ["Bus", "Catering", "Chauffeur", "Climatization", "Furniture", "Open Bar & Snacks", "Parking", "Television"],
                    "state"         => "Requested",
                    "name"          => "Marc",
                    "surname"       => "Garcia",
                    "phone"         => "612 34 56 78"
                ],
                
                [ // ID => 2
                    "email"         => "julia.perez@gmail.com",
                    "date"          => "2023-05-15",
                    "zone"          => "B",
                    "services"      => ["Bus", "Climatization", "Furniture", "Television"],
                    "state"         => "Approved",
                    "name"          => "Julia",
                    "surname"       => "Perez",
                    "phone"         => "615 67 89 01"
                ],
                
                [ // ID => 3
                    "email"         => "david.lopez@gmail.com",
                    "date"          => "2023-05-14",
                    "zone"          => "C1",
                    "services"      => ["Furniture", "Parking", "Television"],
                    "state"         => "Requested",
                    "name"          => "David",
                    "surname"       => "Lopez",
                    "phone"         => "618 90 12 34"
                ],
                
                [ // ID => 4
                    "email"         => "laura.martinez@gmail.com",
                    "date"          => "2023-06-25",
                    "zone"          => "C2",
                    "services"      => ["Bus",  "Climatization", "Furniture"],
                    "state"         => "Cancelled",
                    "name"          => "Laura",
                    "surname"       => "Martinez",
                    "phone"         => "621 23 45 67"
                ],
                
                [ // ID => 5
                    "email"         => "pablo.sanchez@gmail.com",
                    "date"          => "2023-07-10",
                    "zone"          => "C3",
                    "services"      => ["Bus", "Catering", "Open Bar & Snacks", "Parking"],
                    "state"         => "Rejected",
                    "name"          => "Pablo",
                    "surname"       => "Sanchez",
                    "phone"         => "624 56 78 90"
                ],
                
                [ // ID => 6
                    "email"         => "clara.fernandez@gmail.com",
                    "date"          => "2023-07-20",
                    "zone"          => "C4",
                    "services"      => ["Bus", "Catering", "Furniture", "Television"],
                    "state"         => "Scheduled",
                    "name"          => "Clara",
                    "surname"       => "Fernandez",
                    "phone"         => "627 89 01 23"
                ],
                
                [ // ID => 7
                    "email"         => "sergio.gomez@gmail.com",
                    "date"          => "2023-05-10",
                    "zone"          => "C5",
                    "services"      => ["Chauffeur", "Furniture", "Parking", "Television"],
                    "state"         => "Requested",
                    "name"          => "Sergio",
                    "surname"       => "Gomez",
                    "phone"         => "630 12 34 56"
                ],
                
                [ // ID => 8
                    "email"         => "marta.rodriguez@gmail.com",
                    "date"          => "2023-05-09",
                    "zone"          => "D1",
                    "services"      => ["Bus","Chauffeur", "Climatization", "Parking", "Television"],
                    "state"         => "Approved",
                    "name"          => "Marta",
                    "surname"       => "Rodriguez",
                    "phone"         => "633 45 67 89"
                ],
                
                [ // ID => 9
                    "email"         => "alejandro.lopez@gmail.com",
                    "date"          => "2023-05-08",
                    "zone"          => "D2",
                    "services"      => ["Bus", "Catering", "Parking"],
                    "state"         => "Requested",
                    "name"          => "Alejandro",
                    "surname"       => "Lopez",
                    "phone"         => "636 78 90 12"
                ],
                
                [ // ID => 10
                    "email"         => "carolina.gonzalez@gmail.com",
                    "date"          => "2023-05-07",
                    "zone"          => "E1",
                    "services"      => ["Bus", "Catering", "Parking", "Television"],
                    "state"         => "Requested",
                    "name"          => "Carolina",
                    "surname"       => "Gonzalez",
                    "phone"         => "639 01 23 45"
                ],
                
                [ // ID => 11
                    "email"         => "miranda.alatriste@gmail.com",
                    "date"          => "2023-05-10",
                    "zone"          => "E2",
                    "services"      => ["Bus", "Catering", "Parking", "Television"],
                    "state"         => "Requested",
                    "name"          => "Miranda",
                    "surname"       => "Alatriste",
                    "phone"         => "609 78 34 12"
                ],
                
                [ // ID => 12
                    "email"         => "simon.porton@gmail.com",
                    "date"          => "2023-05-09",
                    "zone"          => "F",
                    "services"      => ["Parking", "Television"],
                    "state"         => "Approved",
                    "name"          => "Simon",
                    "surname"       => "Porton",
                    "phone"         => "633 45 67 89"
                ],
                
                [ // ID => 13
                    "email"         => "carlos.marmo@gmail.com",
                    "date"          => "2023-05-08",
                    "zone"          => "G",
                    "services"      => ["Bus", "Television"],
                    "state"         => "Requested",
                    "name"          => "Carlos",
                    "surname"       => "Marmo",
                    "phone"         => "636 78 90 12"
                ],
                
                [ // ID => 14
                    "email"         => "emilio.zidane@gmail.com",
                    "date"          => "2023-05-07",
                    "zone"          => "H",
                    "services"      => ["Bus", "Catering", "Chauffeur", "Climatization", "Furniture", "Open Bar & Snacks", "Parking", "Television"],
                    "state"         => "Requested",
                    "name"          => "Emilio",
                    "surname"       => "Zidane",
                    "phone"         => "639 01 23 45"
                ]
                
            ];

            foreach ($reserves as $reserve) {

                Reserve::create([
                    'email'     => $reserve['email'],
                    'date'      => $reserve['date'],
                    'zone'      => $reserve['zone'],
                    'services'  => json_encode($reserve['services']), // Encode the services array as a JSON string
                    'state'     => $reserve['state'],
                    'name'      => $reserve['name'],
                    'surname'   => $reserve['surname'],
                    'phone'     => $reserve['phone'],
                ]);

            }
        
        }
    
    }

}
