<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use App\Models\Zone;

class ZoneService extends Model {

    use HasFactory;

    protected $fillable = [

        'zone_id',
        'service_id',

    ];

    public function zones() {

        return $this -> belongsTo(Zone::class);
    
    }

    public function services() {

        return $this -> belongsTo(Service::class);
    
    }

}
