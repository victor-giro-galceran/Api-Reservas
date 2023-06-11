<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {

        Schema::create('reserve_zones', function (Blueprint $table) {
            
            $table -> id();

            $table -> unsignedBigInteger("reserve_id");
            $table -> foreign("reserve_id") 
                   -> references("id") 
                   -> on("reserves") 
                   -> onDelete("cascade");

            $table -> unsignedBigInteger("zone_id");
            $table -> foreign("zone_id") 
                    -> references("id") 
                    -> on("zones") 
                    -> onDelete("cascade");

            $table -> timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {

        Schema::dropIfExists('reserve_zones');
    
    }

};
