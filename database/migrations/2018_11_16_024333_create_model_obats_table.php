<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelObatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_obats', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nama_obat');
			$table->string('harga');
			$table->string('stok');
			$table->text('expired_date');
			$table->text('production_date');
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
        Schema::dropIfExists('model_obats');
    }
}
