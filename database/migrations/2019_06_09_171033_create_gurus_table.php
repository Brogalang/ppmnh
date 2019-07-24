<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->bigInteger('nip', 20);
            $table->string('nama',100);
            $table->string('tempat_lahir',100);
            $table->date('tgl_lahir');
            $table->string('no_telp',20);
            $table->string('status_nikah',100);
            $table->text('image')->nullable();
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
        Schema::dropIfExists('guru');
    }
}
