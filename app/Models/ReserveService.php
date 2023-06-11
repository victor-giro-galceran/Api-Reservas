<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reserve;
use App\Models\Service;

class ReserveService extends Model {

    use HasFactory;

    protected $fillable = [

        'reserve_id',
        'service_id',

    ];

    public function reserves() {

        return $this -> belongsTo(Reserve::class);
   
    }

    public function services() {
        
        return $this -> belongsTo(Service::class);
    
    }

}
