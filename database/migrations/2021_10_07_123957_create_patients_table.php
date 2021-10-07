<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->date('birth_date')->nullable();
            $table->string('category');
            $table->string('gender');
            $table->date('operation_date');
            $table->integer('treatment_term');
            $table->unsignedBigInteger('surgeon_id');
            $table->unsignedBigInteger('tariff_id');

            $table->foreign('surgeon_id')
                ->references('id')
                ->on('surgeons');

            $table->foreign('tariff_id')
                ->references('id')
                ->on('tariffs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
