<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelPartnerShop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partnerShops', function (Blueprint $table) {
            $table->id();
            $table->string('namaToko');
            $table->string('foto');
            $table->string('pemilik');
            $table->string('deskripsi');
            $table->string('kontak');
            $table->string('alamat');
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
        Schema::dropIfExists('partnerShops');
    }
}
