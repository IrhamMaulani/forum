<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_user');
            $table->string('keterangan_user');
            $table->string('photo_user');
            $table->string('kesukaan_user');
       
        });
        Schema::table('profil_users', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
        
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profil_user');
    }
}
