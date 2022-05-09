<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('ruc')->unique();
            $table->string('address')->nullable();
            $table->string('phone');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('providers');
    }
}
