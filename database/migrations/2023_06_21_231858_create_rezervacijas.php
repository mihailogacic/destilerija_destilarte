<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('korisniks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ime');
            $table->string('prezime');
            $table->date('godina_rodjenja');
            $table->string('broj_telefona');
        });

        Schema::create('dogadjajs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('naziv');
            $table->string('opis');
            $table->string('slika')->nullable();
        });

        Schema::create('rezervacijas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('status');

            $table->unsignedBigInteger("korisnik_id");
            $table->foreign("korisnik_id")->references("id")->on("korisniks");

            $table->unsignedBigInteger("dogadjaj_id");
            $table->foreign("dogadjaj_id")->references("id")->on("dogadjajs");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rezervacijas');
        Schema::dropIfExists('korisniks');
        Schema::dropIfExists('dogadjajs');
    }
};
