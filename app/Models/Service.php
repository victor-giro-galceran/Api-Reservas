<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zone;
use App\Models\Reserve;

class Service extends Model {

    use HasFactory;

    protected $fillable = [

        'type',
        'description',
        'capacity',
        'price',

    ];

    public function Zones() {
        
        return $this -> belongsToMany(Zone::class, 'zone_services');
    
    }

    public function Reserves() {
        
        return $this -> belongsToMany(Reserve::class);
    
    }

}
