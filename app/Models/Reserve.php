<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zone;
use App\Models\Service;


class Reserve extends Model {

    use HasFactory;

    protected $fillable = [

        'name',
        'surname',
        'phone',
        'email',
        'date',
        'zone',
        'services',
        'state',

    ];

    public function Zones() {
        
        return $this -> belongsToMany(Zone::class);
    
    }

    public function Services() {
        
        return $this -> belongsToMany(Service::class, 'reserve_services');
    
    }

}
