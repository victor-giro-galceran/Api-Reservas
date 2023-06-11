<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reserve;
use App\Models\Zone;

class ReserveZone extends Model {

    use HasFactory;

    protected $fillable = [

        'reserve_id',
        'zone_id',

    ];

    public function reserves() {

        return $this -> belongsTo(Reserve::class);
    
    }

    public function zones() {

        return $this -> belongsTo(Zone::class);
    
    }

}
