<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {

        Schema::create('zones', function (Blueprint $table) {
    
            $table -> id();

            $table -> string('code');
            $table -> string('name');
            $table -> text('description');
            $table -> integer('area');
            $table -> integer('height');
            $table -> integer('cocktail');
            $table -> integer('theater');
            $table -> integer('school');
            $table -> integer('feast');
            $table -> integer('cabaret');

            $table -> timestamps();
    
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {

        Schema::dropIfExists('zones');

    }

};
