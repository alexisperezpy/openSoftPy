<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('cedula')->unique();
            $table->string('ruc')->nullable()->unique();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable()->unique();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
