<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {

        Schema::create('reserves', function (Blueprint $table) {
        
            $table -> id();

            $table->string('name')->default('')->nullable();
            $table -> string('surname');
            $table -> string('email');
            $table -> string('phone');
            $table -> date('date');
            $table -> string('zone');
            $table -> json('services');
            $table -> string('state');

            $table -> timestamps();
        
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {

        Schema::dropIfExists('reserves');
    
    }

};
