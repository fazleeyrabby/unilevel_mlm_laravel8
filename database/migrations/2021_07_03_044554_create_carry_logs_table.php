<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarryLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carry_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->decimal('carry',11,2);
            $table->string('down_position');
            $table->integer('reference_id')->nullable();
            $table->integer('paid')->default(null)->nullable();
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
        Schema::dropIfExists('carry_logs');
    }
}
