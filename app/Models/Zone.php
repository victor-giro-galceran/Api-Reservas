<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use App\Models\Reserve;

class Zone extends Model {

    use HasFactory;

    protected $fillable = [

        'code',
        'name',
        'description',
        'area',
        'height',
        'cocktail',
        'theater',
        'school',
        'feast',
        'cabaret',

    ];

    public function services() {
        
        return $this -> belongsToMany(Service::class, 'zone_services');
    
    }

    public function Reserve() {
        
        return $this -> belongsToMany(Reserve::class);
    
    }

}
