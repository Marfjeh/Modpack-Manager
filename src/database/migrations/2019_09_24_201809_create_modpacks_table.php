<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModpacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modpacks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger("user_id");
            $table->string("name");
            $table->boolean("active");
            $table->boolean("private");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modpacks');
    }
}
